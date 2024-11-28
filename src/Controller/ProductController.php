<?php

namespace App\Controller;

use App\Entity\Product;
use App\Form\ProductType;
use App\Repository\ProductRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Doctrine\ORM\EntityManagerInterface;
use Knp\Component\Pager\PaginatorInterface;
use Symfony\Component\HttpFoundation\Request;

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

        return $this->render('product/index.html.twig', [
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

        return $this->render('product/index.html.twig', [
            'all' => false,
            'categ' => $categ,
            'pagination' => $pagination
        ]);
    }

    #[Route('/products/detail/{id}', name: 'product_detail')]
    public function detail(ProductRepository $productRepository, $id): Response
    {
        $product = $productRepository->getById($id);

        return $this->render('product/detail.html.twig', [
            'product' => $product[0],
            'rating' => 5
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
