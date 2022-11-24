<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class EspaceClientController extends AbstractController
{
    /**
     * @Route("/espace/client", name="espace_client")
     */
    public function espace_client()
    {
        return $this->render('espace_client/espaceclient.html.twig', [
            'controller_name' => 'EspaceClientController',
        ]);
    }

}
