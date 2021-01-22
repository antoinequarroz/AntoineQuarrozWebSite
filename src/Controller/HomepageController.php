<?php

namespace App\Controller;

use App\Form\ContactType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Validator\Constraints\Length;

class HomepageController extends AbstractController
{
    /**
     * @Route("/", name="homepage")
     */

    public function index(Request $request, \Swift_Mailer $mailer)

    {
        $form = $this->createForm(ContactType::class);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()){
            $contact = $form->getData();

            $message = (new \Swift_Message('Nouveau message'))
                ->setFrom($contact['email'])
                ->setTo('info@antoinequarroz.ch')
                ->setBody(
                    $this->renderView(
                        'emails/contact.html.twig', compact('contact')
                    ),
                    'text/html'
                )
            ;


            $mailer->send($message);

            $this->addFlash('message', 'Le message a bien été envoyé');
            return $this->redirectToRoute('homepage');
        }


            return $this->render(':homepage:index1.html.twig', [
                'form' => $form->createView()
            ]);
    }


}
