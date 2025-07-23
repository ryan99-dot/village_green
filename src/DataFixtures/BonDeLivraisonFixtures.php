<?php

namespace App\DataFixtures;

use App\Entity\BonDeLivraison;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class BonDeLivraisonFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $bonDeLivraison = new BonDeLivraison();
        $bonDeLivraison->setId(1);
        $bonDeLivraison->setNumero('BL001');
        $bonDeLivraison->setStatut('Envoyé');
        $manager->persist($bonDeLivraison);

        $bonDeLivraison = new BonDeLivraison();
        $bonDeLivraison->setId(2);
        $bonDeLivraison->setNumero('BL002');
        $bonDeLivraison->setStatut('En préparation');
        $manager->persist($bonDeLivraison);

        $bonDeLivraison = new BonDeLivraison();
        $bonDeLivraison->setId(3);
        $bonDeLivraison->setNumero('BL003');
        $bonDeLivraison->setStatut('Livré');
        $manager->persist($bonDeLivraison);

        $bonDeLivraison = new BonDeLivraison();
        $bonDeLivraison->setId(4);
        $bonDeLivraison->setNumero('BL004');
        $bonDeLivraison->setStatut('Partiellement livré');
        $manager->persist($bonDeLivraison);

        $bonDeLivraison = new BonDeLivraison();
        $bonDeLivraison->setId(5);
        $bonDeLivraison->setNumero('BL005');
        $bonDeLivraison->setStatut('Préparé');
        $manager->persist($bonDeLivraison);

        $bonDeLivraison = new BonDeLivraison();
        $bonDeLivraison->setId(6);
        $bonDeLivraison->setNumero('BL006');
        $bonDeLivraison->setStatut('En attente');
        $manager->persist($bonDeLivraison);

        $bonDeLivraison = new BonDeLivraison();
        $bonDeLivraison->setId(7);
        $bonDeLivraison->setNumero('BL007');
        $bonDeLivraison->setStatut('Annulé');
        $manager->persist($bonDeLivraison);

        $bonDeLivraison = new BonDeLivraison();
        $bonDeLivraison->setId(8);
        $bonDeLivraison->setNumero('BL008');
        $bonDeLivraison->setStatut('En préparation');
        $manager->persist($bonDeLivraison);

        $bonDeLivraison = new BonDeLivraison();
        $bonDeLivraison->setId(9);
        $bonDeLivraison->setNumero('BL009');
        $bonDeLivraison->setStatut('Livré');
        $manager->persist($bonDeLivraison);

        $bonDeLivraison = new BonDeLivraison();
        $bonDeLivraison->setId(10);
        $bonDeLivraison->setNumero('BL010');
        $bonDeLivraison->setStatut('En cours d\'expédition');
        $manager->persist($bonDeLivraison);

        $bonDeLivraison = new BonDeLivraison();
        $bonDeLivraison->setId(11);
        $bonDeLivraison->setNumero('BL011');
        $bonDeLivraison->setStatut('En cours d\'expédition');
        $manager->persist($bonDeLivraison);

        $bonDeLivraison = new BonDeLivraison();
        $bonDeLivraison->setId(12);
        $bonDeLivraison->setNumero('BL012');
        $bonDeLivraison->setStatut('Livré');
        $manager->persist($bonDeLivraison);

        $bonDeLivraison = new BonDeLivraison();
        $bonDeLivraison->setId(13);
        $bonDeLivraison->setNumero('BL013');
        $bonDeLivraison->setStatut('En préparation');
        $manager->persist($bonDeLivraison);

        $bonDeLivraison = new BonDeLivraison();
        $bonDeLivraison->setId(14);
        $bonDeLivraison->setNumero('BL014');
        $bonDeLivraison->setStatut('Annulé');
        $manager->persist($bonDeLivraison);

        $bonDeLivraison = new BonDeLivraison();
        $bonDeLivraison->setId(15);
        $bonDeLivraison->setNumero('BL015');
        $bonDeLivraison->setStatut('En attente');
        $manager->persist($bonDeLivraison);

        $manager->flush();
    }
}
