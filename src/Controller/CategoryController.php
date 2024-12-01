<?php

namespace App\Controller;

use App\Entity\Category;
use App\Form\CategoryType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class CategoryController extends AbstractController
{
    #[Route('/category', name: 'app_category')]
    public function index(): Response
    {
        return $this->render('category/index.html.twig', [
            'controller_name' => 'CategoryController',
        ]);
    }

    #[Route('admin/categories/new', name: 'category_new')]
    public function new(Request $request, EntityManagerInterface $manager): Response
    {
        $categ = new Category();
        $form = $this->createForm(CategoryType::class, $categ);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            $manager->persist($categ);
            $manager->flush();

            return $this->redirectToRoute('admin_dashboard');
        }

        return $this->render('category/new.html.twig', [
            'form' => $form->createView(),
        ]);
    }
}
