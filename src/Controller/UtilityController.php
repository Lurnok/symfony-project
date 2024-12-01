<?php

namespace App\Controller;

use App\Repository\OrderItemRepository;
use App\Repository\OrderRepository;
use App\Repository\ProductRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;

/**
 * @method User|null getUser()
 */
class UtilityController extends AbstractController
{
    #[Route('/deleteFromCart', name: 'deleteFromCart')]
    public function deleteFromCart(Request $request, ProductRepository $productRepository, EntityManagerInterface $manager, OrderItemRepository $orderItemRepository, OrderRepository $orderRepository): Response
    {
        $name = $request->request->get('name');

        $product = $productRepository->getByName($name);
        $userId = $this->getUser()->getId();
        $cart = $orderRepository->getUserCart($userId);

        $cartItem = $orderItemRepository->findOneInCart($cart->getId(), $product->getId());

        $manager->remove($cartItem);
        $manager->flush();

        return $this->redirectToRoute('cart');
    }
}
