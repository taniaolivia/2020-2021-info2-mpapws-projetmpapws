<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ConsultationProduitController extends AbstractController
{
    /**
     * @Route("/consultation/produit", name="consultation_produit")
     */
    public function consultation_produit()
    {
        return $this->render('consultation_produit/consultationpro.html.twig', [
            'controller_name' => 'ConsultationProduitController',
        ]);
    }

}
