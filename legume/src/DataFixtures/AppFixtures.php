<?php

namespace App\DataFixtures;

use App\Entity\Magasins;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        //Liste des magasins
        $magasin1 = new Magasins();
        $magasin1->setNom('Julie Fruits');
        $magasin1->setVendeur('Jean MARET');
        $magasin1->setTypeProduitVendu('Fruits, Légumes');
        $magasin1->setAdresse('Place de lÎle-de-France, 17000 La Rochelle');
        $magasin1->setHoraires('lundi Fermé mardi 08:30–12:30, 15:30–19:00 mercredi 08:30–12:30, 15:30–19:00 jeudi 08:30–12:30, 15:30–19:00 vendredi 08:30–12:30, 15:30–19:00 samedi 08:30–12:30, 15:30–19:00 dimanche Fermé');
        $manager->persist($magasin1);

        $magasin2 = new Magasins();
        $magasin2->setNom('Rayons Verts');
        $magasin2->setVendeur('Camille BARON');
        $magasin2->setTypeProduitVendu('Fruits, Légumes');
        $magasin2->setAdresse('67 Boulevard André Sautel, 17000 La Rochelle');
        $magasin2->setHoraires('lundi 09:00–19:00 mardi 09:00–19:00 mercredi 09:00–19:00 jeudi 09:00–19:00 vendredi 09:00–19:00 samedi 09:00–19:00 dimanche Fermé');
        $manager->persist($magasin2);

        $manager->flush();
    }
}
