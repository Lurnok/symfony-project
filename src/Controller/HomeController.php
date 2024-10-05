<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class HomeController extends AbstractController
{
    public function __construct(protected string $mercurePublicUrl) {
    }

    #[Route('/home', name: 'home')]
    public function index(): Response
    {
        return $this->render('base.html.twig', [
            'mercure_url' => $this->mercurePublicUrl,
        ]);
    }
}