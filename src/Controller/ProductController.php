<?php

namespace App\Controller;

use App\Repository\ProductRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class ProductController extends AbstractController
{
    #[Route('/products', name: 'product_index')]
    public function index(ProductRepository $productRepository): Response
    {
        $products = $productRepository->findAll();
        return $this->render('product/index.html.twig', [
            'products' => $products,
            'all' => true,
            'categ' => 'no_categ'
        ]);
    }

    #[Route('/products/{categ}', name: 'product_by_categ')]
    public function byCateg(ProductRepository $productRepository, $categ): Response
    {
        $products = $productRepository->getByCateg($categ);
        return $this->render('product/index.html.twig', [
            'products' => $products,
            'all' => false,
            'categ' => $categ
        ]);
    }
}
