<?php

namespace App\Controller;

use App\Entity\Order;
use App\Entity\Product;
use App\Enum\OrderStatusEnum;
use App\Form\AddToCartType;
use App\Form\ProductType;
use App\Repository\OrderItemRepository;
use App\Repository\OrderRepository;
use App\Repository\ProductRepository;
use DateTimeImmutable;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Doctrine\ORM\EntityManagerInterface;
use Knp\Component\Pager\PaginatorInterface;
use Symfony\Component\HttpFoundation\Request;

/**
 * @method User|null getUser()
 */
class ProductController extends AbstractController
{
    #[Route('/products', name: 'product_index')]
    public function index(ProductRepository $productRepository,  PaginatorInterface $paginator, Request $request): Response
    {
        $products = $productRepository->findAllPagination();

        $pagination = $paginator->paginate(
            $products,
            $request->query->getInt('page', 1),
            9
        );

        $mercureUrl = $this->getParameter('MERCURE_PUBLIC_URL');
        return $this->render('product/index.html.twig', [
            'mercureHubUrl' => $mercureUrl,
            'all' => true,
            'categ' => 'no_categ',
            'pagination' => $pagination
        ]);
    }

    #[Route('/products/{categ}', name: 'product_by_categ')]
    public function byCateg(ProductRepository $productRepository, $categ,  PaginatorInterface $paginator, Request $request): Response
    {
        $products = $productRepository->getByCategPagination($categ);

        $pagination = $paginator->paginate(
            $products,
            $request->query->getInt('page', 1),
            9
        );

        $mercureUrl = $this->getParameter('MERCURE_PUBLIC_URL');
        return $this->render('product/index.html.twig', [
            'mercureHubUrl' => $mercureUrl,
            'all' => false,
            'categ' => $categ,
            'pagination' => $pagination
        ]);
    }

    #[Route('/products/detail/{id}', name: 'product_detail')]
    public function detail(Request $request, ProductRepository $productRepository, $id, OrderRepository $orderRepository, EntityManagerInterface $manager, OrderItemRepository $orderItemRepository): Response
    {
        $product = $productRepository->getById($id);
        $form = $this->createForm(AddToCartType::class);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            $userId = $this->getUser()->getId();

            $userCart = $orderRepository->getUserCart($userId);

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

            $item = $form->getData();

            if ($orderItemRepository->alreadyInCart($userCart->getId(), $product[0]->getId())) {
                $oi = $orderItemRepository->findOneInCart($userCart->getId(), $product[0]->getId());
                $oi->setQuantity($oi->getQuantity() + $item->getQuantity());
            } else {
                $item->setProduct($product[0]);
                $item->setProductPrice($product[0]->getPrice());

                $manager->persist($item);
                $userCart->addItem($item);
            }
            
            $manager->persist($userCart);
            $manager->flush();


            return $this->redirectToRoute('cart');
        }

        $mercureUrl = $this->getParameter('MERCURE_PUBLIC_URL');
        
        return $this->render('product/detail.html.twig', [
            'mercureHubUrl' => $mercureUrl,
            'product' => $product[0],
            'rating' => 5,
            'form' => $form
        ]);
    }

    #[Route('/admin/products/new', name: 'product_new')]
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $product = new Product();
        $form = $this->createForm(ProductType::class, $product);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($product);
            $entityManager->flush();

            return $this->redirectToRoute('product_index');
        }

        return $this->render('product/new.html.twig', [
            'form' => $form->createView(),
        ]);
    }
}
