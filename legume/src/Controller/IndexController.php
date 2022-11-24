<?php

namespace App\Controller;

use App\Entity\Magasins;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class IndexController extends AbstractController
{
    /**
     * @Route("/", name="accueil")
     */
    public function index()
    {
        $magasin = new Magasins();
        return $this->render('index/index.html.twig', [
            'controller_name' => 'IndexController',
            'magasin' => $magasin
        ]);
    }
}
