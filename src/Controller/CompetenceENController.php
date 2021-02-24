<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class CompetenceENController extends AbstractController
{
    /**
     * @Route("/competence/e/n", name="competence_e_n")
     */
    public function index(): Response
    {
        return $this->render('competence_en/index.html.twig', [
            'controller_name' => 'CompetenceENController',
        ]);
    }
}
