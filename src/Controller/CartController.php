<?php

namespace App\Controller;

use App\Entity\Order;
use App\Entity\OrderItem;
use App\Entity\User;
use App\Enum\OrderStatusEnum;
use App\Enum\StatusEnum;
use App\Form\PayOrderType;
use App\Repository\OrderItemRepository;
use App\Repository\OrderRepository;
use App\Repository\ProductRepository;
use DateTimeImmutable;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Mercure\HubInterface;
use Symfony\Component\Mercure\Update;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorageInterface;

/**
 * @method User|null getUser()
 */
class CartController extends AbstractController
{
    #[Route('/cart', name: 'cart')]
    public function index(HubInterface $hub, Request $request, OrderRepository $orderRepository, EntityManagerInterface $manager, OrderItemRepository $orderItemRepository, ProductRepository $productRepository): Response
    {

        $userId = $this->getUser()->getId();

        $userCart = $orderRepository->getUserCart($userId);

        $form = $this->createForm(PayOrderType::class);

        $form->handleRequest($request);



        if ($userCart == null) {
            $newCart = new Order();
            $newCart->setUser($this->getUser());
            $newCart->setReference("CAR-" . strtoupper(uniqid()));
            $newCart->setStatus(OrderStatusEnum::cart);
            $newCart->setCreatedAt(new DateTimeImmutable());

            $manager->persist($newCart);
            $manager->flush();
        }

        $userCart = $orderRepository->getUserCart($userId);
        $cartItems = $orderItemRepository->findAllByOrder($userCart->getId());

        if ($form->isSubmitted() && $form->isValid()) {
            $newOrder = new Order();
            $newOrder->setReference("ORD-" . strtoupper(uniqid()));
            $newOrder->setStatus(OrderStatusEnum::prep);
            $newOrder->setCreatedAt(new DateTimeImmutable());
            $newOrder->setUser($this->getUser());

            $manager->persist($newOrder);

            for ($i = 0; $i < count($cartItems); $i++) {
                $oi = new OrderItem();
                $oi->setProduct($productRepository->getByName($cartItems[$i]['name']));
                $oi->setQuantity($cartItems[$i]['quantity']);
                $oi->setProductPrice($cartItems[$i]['productPrice']);
                $newOrder->addItem($oi);

                $manager->persist($oi);

                $itemToRemove = $orderItemRepository->findOneInCart($userCart->getId(), $cartItems[$i]['id']);
                $manager->remove($itemToRemove);

                $productToModify = $productRepository->getById($cartItems[$i]['id'])[0];
                $productToModify->setStock($productToModify->getStock() - $cartItems[$i]['quantity']);
                if ($productToModify->getStock() == 0) {
                    $productToModify->setStatus(StatusEnum::rupture);
                }

                $update = new Update(
                    sprintf('/products/%d/stock', $cartItems[$i]['id']),

                    json_encode([
                        'id' => $cartItems[$i]['id'],
                        'name' => $cartItems[$i]['name'],
                        'stock' => $productToModify->getStock(),
                    ])
                );

                $hub->publish($update);
            }


            $manager->flush();
            return $this->redirectToRoute('cart');
        }

        $enoughStock = true;
        for ($i = 0; $i < count($cartItems); $i++) {
            if (!$productRepository->productHasEnoughStock($cartItems[$i]['name'], $cartItems[$i]['quantity'])) {
                $enoughStock = false;
            }
        }


        $cartValid = $orderItemRepository->cartValid($userCart->getId()) && $enoughStock;
        $mercureUrl = $this->getParameter('MERCURE_PUBLIC_URL');


        return $this->render('cart/index.html.twig', [
            'cart' => $userCart,
            'cartItems' => $cartItems,
            'cartValid' => $cartValid,
            'form' => $form,
            'mercureHubUrl' => $mercureUrl,
        ]);
    }
}
