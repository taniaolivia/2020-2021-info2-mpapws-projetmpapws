<?php

namespace App\Controller;

use App\Entity\Magasins;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class MagasinsController extends AbstractController
{
    /**
     * @Route("/listemagasin", name="liste_magasins")
     */
    public function listeMagasins()
    {
        //accès aux services Doctrine, puis Repository de l'objet Liste:
        $repository = $this->getDoctrine()->getManager();

        //Récupération du magasin choisi par un identifiant
        $Magasins = $repository->getRepository(Magasins::class)->findAll();

        return $this->render('magasins/liste_magasins.html.twig', [
            'Magasins' => $Magasins,
        ]);
    }

    /**
     * @Route("/detailmagasins/{id}", name="detail_magasins")
     */
    public function detailmagasins(int $id)
    {
        //accès aux services Doctrine, puis Repository de l'objet Liste:
        $repository = $this->getDoctrine()->getManager();

        //Récupération du magasin choisi par un identifiant
        $MagasinChoisi = $repository->getRepository(Magasins::class)->findBy($id);
        //dd($MagasinChoisi);

        return $this->render('magasins/detail_magasins.html.twig', [
            'MagasinChoisi' => $MagasinChoisi,
        ]);
    }

    /**
     * @Route("/listepartenaires", name="liste_partenaires")
     */
    public function listePartenaires()
    {
        return $this->render('magasins/liste_partenaires.html.twig', [
            'controller_name' => 'MagasinsController',
        ]);
    }

    /**
     * @Route("/listepartenaires", name="liste_partenaires")
     */
    public function engagements()
    {
        return $this->render('magasins/engagements.html.twig', [
            'controller_name' => 'MagasinsController',
        ]);
    }

}
