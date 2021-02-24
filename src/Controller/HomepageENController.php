<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomepageENController extends AbstractController
{
    /**
     * @Route("/homepage/e/n", name="homepage_e_n")
     */
    public function index(): Response
    {
        return $this->render('homepage_en/index.html.twig', [
            'controller_name' => 'HomepageENController',
        ]);
    }
}
