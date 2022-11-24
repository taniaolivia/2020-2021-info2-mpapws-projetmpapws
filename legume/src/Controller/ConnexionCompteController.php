<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ConnexionCompteController extends AbstractController
{
    /**
     * @Route("/connexion/compte", name="connexion_compte")
     */
    public function connexion()
    {
        return $this->render('connexion_compte/connexioncompte.html.twig', [
            'controller_name' => 'ConnexionCompteController',
        ]);
    }
}
