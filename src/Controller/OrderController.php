<?php

namespace App\Controller;

use App\Repository\OrderRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class OrderController extends AbstractController
{
    #[Route('/order', name: 'app_order')]
    public function index(): Response
    {
        return $this->render('order/index.html.twig', [
            'controller_name' => 'OrderController',
        ]);
    }

    #[Route('/order/detail/{id}', name: 'order_detail')]
    public function orderDetail(OrderRepository $orderRepository, $id): Response
    {
        $order = $orderRepository->findOneById($id);

        return $this->render('order/product_detail.html.twig',[
            'order' => $order
        ]);
    }
}
