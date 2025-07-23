<?php

namespace App\DataFixtures;

use App\Entity\CommandeProduit;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class CommandeProduitFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $commandeProduit = new CommandeProduit();
        $commandeProduit->setId(1);
        $commandeProduit->setProduitId(1);
        $commandeProduit->setCommandeId(1);
        $commandeProduit->setQuantite(2);
        $manager->persist($commandeProduit);

        $commandeProduit = new CommandeProduit();
        $commandeProduit->setId(2);
        $commandeProduit->setProduitId(3);
        $commandeProduit->setCommandeId(2);
        $commandeProduit->setQuantite(1);
        $manager->persist($commandeProduit);

        $commandeProduit = new CommandeProduit();
        $commandeProduit->setId(3);
        $commandeProduit->setProduitId(2);
        $commandeProduit->setCommandeId(2);
        $commandeProduit->setQuantite(3);
        $manager->persist($commandeProduit);

        $commandeProduit = new CommandeProduit();
        $commandeProduit->setId(4);
        $commandeProduit->setProduitId(11);
        $commandeProduit->setCommandeId(1);
        $commandeProduit->setQuantite(1);
        $manager->persist($commandeProduit);

        $commandeProduit = new CommandeProduit();
        $commandeProduit->setId(5);
        $commandeProduit->setProduitId(14);
        $commandeProduit->setCommandeId(1);
        $commandeProduit->setQuantite(1);
        $manager->persist($commandeProduit);

        $commandeProduit = new CommandeProduit();
        $commandeProduit->setId(6);
        $commandeProduit->setProduitId(16);
        $commandeProduit->setCommandeId(2);
        $commandeProduit->setQuantite(2);
        $manager->persist($commandeProduit);

        $commandeProduit = new CommandeProduit();
        $commandeProduit->setId(7);
        $commandeProduit->setProduitId(15);
        $commandeProduit->setCommandeId(1);
        $commandeProduit->setQuantite(5);
        $manager->persist($commandeProduit);

        $commandeProduit = new CommandeProduit();
        $commandeProduit->setId(8);
        $commandeProduit->setProduitId(12);
        $commandeProduit->setCommandeId(2);
        $commandeProduit->setQuantite(1);
        $manager->persist($commandeProduit);

        $commandeProduit = new CommandeProduit();
        $commandeProduit->setId(9);
        $commandeProduit->setProduitId(1);
        $commandeProduit->setCommandeId(3);
        $commandeProduit->setQuantite(2);
        $manager->persist($commandeProduit);

        $commandeProduit = new CommandeProduit();
        $commandeProduit->setId(10);
        $commandeProduit->setProduitId(3);
        $commandeProduit->setCommandeId(3);
        $commandeProduit->setQuantite(1);
        $manager->persist($commandeProduit);

        $commandeProduit = new CommandeProduit();
        $commandeProduit->setId(11);
        $commandeProduit->setProduitId(2);
        $commandeProduit->setCommandeId(3);
        $commandeProduit->setQuantite(3);
        $manager->persist($commandeProduit);

        $commandeProduit = new CommandeProduit();
        $commandeProduit->setId(12);
        $commandeProduit->setProduitId(1);
        $commandeProduit->setCommandeId(3);
        $commandeProduit->setQuantite(1);
        $manager->persist($commandeProduit);

        $commandeProduit = new CommandeProduit();
        $commandeProduit->setId(13);
        $commandeProduit->setProduitId(14);
        $commandeProduit->setCommandeId(4);
        $commandeProduit->setQuantite(1);
        $manager->persist($commandeProduit);

        $commandeProduit = new CommandeProduit();
        $commandeProduit->setId(14);
        $commandeProduit->setProduitId(16);
        $commandeProduit->setCommandeId(4);
        $commandeProduit->setQuantite(2);
        $manager->persist($commandeProduit);

        $commandeProduit = new CommandeProduit();
        $commandeProduit->setId(15);
        $commandeProduit->setProduitId(15);
        $commandeProduit->setCommandeId(4);
        $commandeProduit->setQuantite(5);
        $manager->persist($commandeProduit);

        $commandeProduit = new CommandeProduit();
        $commandeProduit->setId(16);
        $commandeProduit->setProduitId(12);
        $commandeProduit->setCommandeId(4);
        $commandeProduit->setQuantite(1);
        $manager->persist($commandeProduit);

        $commandeProduit = new CommandeProduit();
        $commandeProduit->setId(17);
        $commandeProduit->setProduitId(4);
        $commandeProduit->setCommandeId(5);
        $commandeProduit->setQuantite(1);
        $manager->persist($commandeProduit);

        $commandeProduit = new CommandeProduit();
        $commandeProduit->setId(18);
        $commandeProduit->setProduitId(5);
        $commandeProduit->setCommandeId(5);
        $commandeProduit->setQuantite(2);
        $manager->persist($commandeProduit);

        $commandeProduit = new CommandeProduit();
        $commandeProduit->setId(19);
        $commandeProduit->setProduitId(6);
        $commandeProduit->setCommandeId(5);
        $commandeProduit->setQuantite(3);
        $manager->persist($commandeProduit);

        $commandeProduit = new CommandeProduit();
        $commandeProduit->setId(20);
        $commandeProduit->setProduitId(7);
        $commandeProduit->setCommandeId(6);
        $commandeProduit->setQuantite(4);
        $manager->persist($commandeProduit);

        $commandeProduit = new CommandeProduit();
        $commandeProduit->setId(21);
        $commandeProduit->setProduitId(8);
        $commandeProduit->setCommandeId(6);
        $commandeProduit->setQuantite(1);
        $manager->persist($commandeProduit);

        $commandeProduit = new CommandeProduit();
        $commandeProduit->setId(22);
        $commandeProduit->setProduitId(9);
        $commandeProduit->setCommandeId(6);
        $commandeProduit->setQuantite(2);
        $manager->persist($commandeProduit);

        $commandeProduit = new CommandeProduit();
        $commandeProduit->setId(23);
        $commandeProduit->setProduitId(10);
        $commandeProduit->setCommandeId(7);
        $commandeProduit->setQuantite(3);
        $manager->persist($commandeProduit);

        $commandeProduit = new CommandeProduit();
        $commandeProduit->setId(24);
        $commandeProduit->setProduitId(13);
        $commandeProduit->setCommandeId(7);
        $commandeProduit->setQuantite(2);
        $manager->persist($commandeProduit);

        $commandeProduit = new CommandeProduit();
        $commandeProduit->setId(25);
        $commandeProduit->setProduitId(11);
        $commandeProduit->setCommandeId(8);
        $commandeProduit->setQuantite(2);
        $manager->persist($commandeProduit);

        $commandeProduit = new CommandeProduit();
        $commandeProduit->setId(26);
        $commandeProduit->setProduitId(14);
        $commandeProduit->setCommandeId(8);
        $commandeProduit->setQuantite(1);
        $manager->persist($commandeProduit);

        $commandeProduit = new CommandeProduit();
        $commandeProduit->setId(27);
        $commandeProduit->setProduitId(15);
        $commandeProduit->setCommandeId(8);
        $commandeProduit->setQuantite(1);
        $manager->persist($commandeProduit);

        $commandeProduit = new CommandeProduit();
        $commandeProduit->setId(28);
        $commandeProduit->setProduitId(1);
        $commandeProduit->setCommandeId(9);
        $commandeProduit->setQuantite(2);
        $manager->persist($commandeProduit);

        $commandeProduit = new CommandeProduit();
        $commandeProduit->setId(29);
        $commandeProduit->setProduitId(16);
        $commandeProduit->setCommandeId(9);
        $commandeProduit->setQuantite(3);
        $manager->persist($commandeProduit);

        $commandeProduit = new CommandeProduit();
        $commandeProduit->setId(30);
        $commandeProduit->setProduitId(2);
        $commandeProduit->setCommandeId(10);
        $commandeProduit->setQuantite(1);
        $manager->persist($commandeProduit);

        $commandeProduit = new CommandeProduit();
        $commandeProduit->setId(31);
        $commandeProduit->setProduitId(3);
        $commandeProduit->setCommandeId(10);
        $commandeProduit->setQuantite(4);
        $manager->persist($commandeProduit);

        $commandeProduit = new CommandeProduit();
        $commandeProduit->setId(32);
        $commandeProduit->setProduitId(5);
        $commandeProduit->setCommandeId(10);
        $commandeProduit->setQuantite(2);
        $manager->persist($commandeProduit);

        $commandeProduit = new CommandeProduit();
        $commandeProduit->setId(33);
        $commandeProduit->setProduitId(4);
        $commandeProduit->setCommandeId(11);
        $commandeProduit->setQuantite(1);
        $manager->persist($commandeProduit);

        $commandeProduit = new CommandeProduit();
        $commandeProduit->setId(34);
        $commandeProduit->setProduitId(6);
        $commandeProduit->setCommandeId(11);
        $commandeProduit->setQuantite(5);
        $manager->persist($commandeProduit);

        $commandeProduit = new CommandeProduit();
        $commandeProduit->setId(35);
        $commandeProduit->setProduitId(7);
        $commandeProduit->setCommandeId(12);
        $commandeProduit->setQuantite(3);
        $manager->persist($commandeProduit);

        $commandeProduit = new CommandeProduit();
        $commandeProduit->setId(36);
        $commandeProduit->setProduitId(9);
        $commandeProduit->setCommandeId(12);
        $commandeProduit->setQuantite(2);
        $manager->persist($commandeProduit);

        $commandeProduit = new CommandeProduit();
        $commandeProduit->setId(37);
        $commandeProduit->setProduitId(10);
        $commandeProduit->setCommandeId(12);
        $commandeProduit->setQuantite(1);
        $manager->persist($commandeProduit);

        $commandeProduit = new CommandeProduit();
        $commandeProduit->setId(38);
        $commandeProduit->setProduitId(11);
        $commandeProduit->setCommandeId(13);
        $commandeProduit->setQuantite(4);
        $manager->persist($commandeProduit);

        $commandeProduit = new CommandeProduit();
        $commandeProduit->setId(39);
        $commandeProduit->setProduitId(13);
        $commandeProduit->setCommandeId(13);
        $commandeProduit->setQuantite(1);
        $manager->persist($commandeProduit);

        $commandeProduit = new CommandeProduit();
        $commandeProduit->setId(40);
        $commandeProduit->setProduitId(14);
        $commandeProduit->setCommandeId(14);
        $commandeProduit->setQuantite(2);
        $manager->persist($commandeProduit);

        $commandeProduit = new CommandeProduit();
        $commandeProduit->setId(41);
        $commandeProduit->setProduitId(16);
        $commandeProduit->setCommandeId(14);
        $commandeProduit->setQuantite(2);
        $manager->persist($commandeProduit);

        $commandeProduit = new CommandeProduit();
        $commandeProduit->setId(42);
        $commandeProduit->setProduitId(5);
        $commandeProduit->setCommandeId(15);
        $commandeProduit->setQuantite(3);
        $manager->persist($commandeProduit);

        $commandeProduit = new CommandeProduit();
        $commandeProduit->setId(43);
        $commandeProduit->setProduitId(6);
        $commandeProduit->setCommandeId(15);
        $commandeProduit->setQuantite(4);
        $manager->persist($commandeProduit);

        $manager->flush();
    }
}
