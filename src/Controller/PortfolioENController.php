<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class PortfolioENController extends AbstractController
{
    /**
     * @Route("/portfolio/e/n", name="portfolio_e_n")
     */
    public function index(): Response
    {
        return $this->render('portfolio_en/index.html.twig', [
            'controller_name' => 'PortfolioENController',
        ]);
    }
}
