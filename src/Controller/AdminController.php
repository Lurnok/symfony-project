<?php

namespace App\Controller;

use App\Repository\CategoryRepository;
use App\Repository\OrderRepository;
use App\Repository\ProductRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\UX\Chartjs\Builder\ChartBuilderInterface;
use Symfony\UX\Chartjs\Model\Chart;

class AdminController extends AbstractController
{
    #[Route('/admin', name: 'app_admin')]
    public function index(): Response
    {
        return $this->render('admin/index.html.twig', [
            'controller_name' => 'AdminController',
        ]);
    }

    #[Route('/admin/dashboard', name: 'admin_dashboard')]
    public function dashboard(CategoryRepository $categoryRepository, ProductRepository $productRepository, ChartBuilderInterface $chartBuilder, OrderRepository $orderRepository): Response
    {
        $categWithProductCount = $categoryRepository->getCategoryWithProductCount();
        $percentages = $productRepository->getStatusPercentage();

        $lastFiveOrders = $orderRepository->getFiveLastOrders();

        $chart = $chartBuilder->createChart(Chart::TYPE_PIE);

        $chart->setData([
            'labels' => [
                "Disponible",
                "En précommande",
                "Indisponible"
            ],
            'datasets' => [
                [
                    'label' => 'Répartition des status de produits',
                    'backgroundColor' => [
                        'rgb(75, 192, 192)',
                        'rgb(255, 205, 86)',
                        'rgb(255, 99, 132)'
                    ],
                    'data' => [
                        $percentages[0]['percentage'] ?? 0, // Fallback to 0 if not set
                        $percentages[1]['percentage'] ?? 0,
                        100 - (($percentages[0]['percentage'] ?? 0) + ($percentages[1]['percentage'] ?? 0))
                    ],
                ],
            ],
        ]);
        

        return $this->render('admin/dashboard.html.twig', [
            'categWithProductCount' => $categWithProductCount,
            'controller_name' => 'AdminController',
            'percentages' => $percentages,
            'chart' => $chart,
            'lastFiveOrders' => $lastFiveOrders,
        ]);
    }
}
