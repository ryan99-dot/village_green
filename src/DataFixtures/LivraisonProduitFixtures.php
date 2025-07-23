<?php

namespace App\DataFixtures;

use App\Entity\LivraisonProduit;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class LivraisonProduitFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $livraisonProduit = new LivraisonProduit();
        $livraisonProduit->setId(1);
        $livraisonProduit->setProduitId(1);
        $livraisonProduit->setBonLivraisonId(1);
        $livraisonProduit->setQuantite(2);
        $manager->persist($livraisonProduit);

        $livraisonProduit = new LivraisonProduit();
        $livraisonProduit->setId(2);
        $livraisonProduit->setProduitId(2);
        $livraisonProduit->setBonLivraisonId(1);
        $livraisonProduit->setQuantite(1);
        $manager->persist($livraisonProduit);

        $livraisonProduit = new LivraisonProduit();
        $livraisonProduit->setId(3);
        $livraisonProduit->setProduitId(1);
        $livraisonProduit->setBonLivraisonId(2);
        $livraisonProduit->setQuantite(3);
        $manager->persist($livraisonProduit);

        $livraisonProduit = new LivraisonProduit();
        $livraisonProduit->setId(4);
        $livraisonProduit->setProduitId(3);
        $livraisonProduit->setBonLivraisonId(2);
        $livraisonProduit->setQuantite(4);
        $manager->persist($livraisonProduit);

        $livraisonProduit = new LivraisonProduit();
        $livraisonProduit->setId(5);
        $livraisonProduit->setProduitId(4);
        $livraisonProduit->setBonLivraisonId(3);
        $livraisonProduit->setQuantite(2);
        $manager->persist($livraisonProduit);

        $livraisonProduit = new LivraisonProduit();
        $livraisonProduit->setId(6);
        $livraisonProduit->setProduitId(5);
        $livraisonProduit->setBonLivraisonId(3);
        $livraisonProduit->setQuantite(1);
        $manager->persist($livraisonProduit);

        $livraisonProduit = new LivraisonProduit();
        $livraisonProduit->setId(7);
        $livraisonProduit->setProduitId(2);
        $livraisonProduit->setBonLivraisonId(4);
        $livraisonProduit->setQuantite(3);
        $manager->persist($livraisonProduit);

        $livraisonProduit = new LivraisonProduit();
        $livraisonProduit->setId(8);
        $livraisonProduit->setProduitId(3);
        $livraisonProduit->setBonLivraisonId(4);
        $livraisonProduit->setQuantite(2);
        $manager->persist($livraisonProduit);

        $livraisonProduit = new LivraisonProduit();
        $livraisonProduit->setId(9);
        $livraisonProduit->setProduitId(5);
        $livraisonProduit->setBonLivraisonId(5);
        $livraisonProduit->setQuantite(1);
        $manager->persist($livraisonProduit);

        $livraisonProduit = new LivraisonProduit();
        $livraisonProduit->setId(10);
        $livraisonProduit->setProduitId(1);
        $livraisonProduit->setBonLivraisonId(5);
        $livraisonProduit->setQuantite(4);
        $manager->persist($livraisonProduit);

        $manager->flush();
    }
}
