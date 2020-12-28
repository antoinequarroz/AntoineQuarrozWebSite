<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ParcoursController extends AbstractController
{
    /**
     * @Route("/parcours", name="parcours")
     */
    public function index(): Response
    {
        return $this->render('parcours/index.html.twig');
    }
}
