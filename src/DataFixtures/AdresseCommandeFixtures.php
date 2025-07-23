<?php

namespace App\DataFixtures;

use App\Entity\AdresseCommande;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class AdresseCommandeFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $adresseCommande = new AdresseCommande();
        $adresseCommande->setId(1);
        $adresseCommande->setCommandeId(1);
        $adresseCommande->setAdresseId(1);
        $adresseCommande->setBonLivraisonId(1);
        $adresseCommande->setNumeroFacture('FAC001');
        $adresseCommande->setDate('2025-04-20');
        $adresseCommande->setTypeAdresse('Livraison');
        $manager->persist($adresseCommande);

        $adresseCommande = new AdresseCommande();
        $adresseCommande->setId(2);
        $adresseCommande->setCommandeId(1);
        $adresseCommande->setAdresseId(2);
        $adresseCommande->setBonLivraisonId(1);
        $adresseCommande->setNumeroFacture('FAC001');
        $adresseCommande->setDate('2025-04-20');
        $adresseCommande->setTypeAdresse('Facturation');
        $manager->persist($adresseCommande);

        $adresseCommande = new AdresseCommande();
        $adresseCommande->setId(3);
        $adresseCommande->setCommandeId(2);
        $adresseCommande->setAdresseId(3);
        $adresseCommande->setBonLivraisonId(2);
        $adresseCommande->setNumeroFacture('FAC002');
        $adresseCommande->setDate('2025-04-21');
        $adresseCommande->setTypeAdresse('Livraison');
        $manager->persist($adresseCommande);

        $adresseCommande = new AdresseCommande();
        $adresseCommande->setId(4);
        $adresseCommande->setCommandeId(2);
        $adresseCommande->setAdresseId(4);
        $adresseCommande->setBonLivraisonId(2);
        $adresseCommande->setNumeroFacture('FAC002');
        $adresseCommande->setDate('2025-04-21');
        $adresseCommande->setTypeAdresse('Facturation');
        $manager->persist($adresseCommande);

        $adresseCommande = new AdresseCommande();
        $adresseCommande->setId(5);
        $adresseCommande->setCommandeId(3);
        $adresseCommande->setAdresseId(5);
        $adresseCommande->setBonLivraisonId(3);
        $adresseCommande->setNumeroFacture('FAC003');
        $adresseCommande->setDate('2025-04-22');
        $adresseCommande->setTypeAdresse('Livraison');
        $manager->persist($adresseCommande);

        $adresseCommande = new AdresseCommande();
        $adresseCommande->setId(6);
        $adresseCommande->setCommandeId(3);
        $adresseCommande->setAdresseId(6);
        $adresseCommande->setBonLivraisonId(3);
        $adresseCommande->setNumeroFacture('FAC003');
        $adresseCommande->setDate('2025-04-22');
        $adresseCommande->setTypeAdresse('Facturation');
        $manager->persist($adresseCommande);

        $adresseCommande = new AdresseCommande();
        $adresseCommande->setId(7);
        $adresseCommande->setCommandeId(4);
        $adresseCommande->setAdresseId(7);
        $adresseCommande->setBonLivraisonId(4);
        $adresseCommande->setNumeroFacture('FAC004');
        $adresseCommande->setDate('2025-04-23');
        $adresseCommande->setTypeAdresse('Livraison');
        $manager->persist($adresseCommande);

        $adresseCommande = new AdresseCommande();
        $adresseCommande->setId(8);
        $adresseCommande->setCommandeId(4);
        $adresseCommande->setAdresseId(8);
        $adresseCommande->setBonLivraisonId(4);
        $adresseCommande->setNumeroFacture('FAC004');
        $adresseCommande->setDate('2025-04-23');
        $adresseCommande->setTypeAdresse('Facturation');
        $manager->persist($adresseCommande);

        $adresseCommande = new AdresseCommande();
        $adresseCommande->setId(9);
        $adresseCommande->setCommandeId(5);
        $adresseCommande->setAdresseId(9);
        $adresseCommande->setBonLivraisonId(5);
        $adresseCommande->setNumeroFacture('FAC005');
        $adresseCommande->setDate('2025-04-24');
        $adresseCommande->setTypeAdresse('Livraison');
        $manager->persist($adresseCommande);

        $adresseCommande = new AdresseCommande();
        $adresseCommande->setId(10);
        $adresseCommande->setCommandeId(5);
        $adresseCommande->setAdresseId(10);
        $adresseCommande->setBonLivraisonId(5);
        $adresseCommande->setNumeroFacture('FAC005');
        $adresseCommande->setDate('2025-04-24');
        $adresseCommande->setTypeAdresse('Facturation');
        $manager->persist($adresseCommande);

        $adresseCommande = new AdresseCommande();
        $adresseCommande->setId(11);
        $adresseCommande->setCommandeId(6);
        $adresseCommande->setAdresseId(11);
        $adresseCommande->setBonLivraisonId(6);
        $adresseCommande->setNumeroFacture('FAC006');
        $adresseCommande->setDate('2025-04-25');
        $adresseCommande->setTypeAdresse('Livraison');
        $manager->persist($adresseCommande);

        $adresseCommande = new AdresseCommande();
        $adresseCommande->setId(12);
        $adresseCommande->setCommandeId(6);
        $adresseCommande->setAdresseId(12);
        $adresseCommande->setBonLivraisonId(6);
        $adresseCommande->setNumeroFacture('FAC006');
        $adresseCommande->setDate('2025-04-25');
        $adresseCommande->setTypeAdresse('Facturation');
        $manager->persist($adresseCommande);

        $adresseCommande = new AdresseCommande();
        $adresseCommande->setId(13);
        $adresseCommande->setCommandeId(7);
        $adresseCommande->setAdresseId(13);
        $adresseCommande->setBonLivraisonId(7);
        $adresseCommande->setNumeroFacture('FAC007');
        $adresseCommande->setDate('2025-04-26');
        $adresseCommande->setTypeAdresse('Livraison');
        $manager->persist($adresseCommande);

        $adresseCommande = new AdresseCommande();
        $adresseCommande->setId(14);
        $adresseCommande->setCommandeId(7);
        $adresseCommande->setAdresseId(14);
        $adresseCommande->setBonLivraisonId(7);
        $adresseCommande->setNumeroFacture('FAC007');
        $adresseCommande->setDate('2025-04-26');
        $adresseCommande->setTypeAdresse('Facturation');
        $manager->persist($adresseCommande);

        $adresseCommande = new AdresseCommande();
        $adresseCommande->setId(15);
        $adresseCommande->setCommandeId(8);
        $adresseCommande->setAdresseId(15);
        $adresseCommande->setBonLivraisonId(8);
        $adresseCommande->setNumeroFacture('FAC008');
        $adresseCommande->setDate('2025-04-27');
        $adresseCommande->setTypeAdresse('Livraison');
        $manager->persist($adresseCommande);

        $adresseCommande = new AdresseCommande();
        $adresseCommande->setId(16);
        $adresseCommande->setCommandeId(8);
        $adresseCommande->setAdresseId(1);
        $adresseCommande->setBonLivraisonId(8);
        $adresseCommande->setNumeroFacture('FAC008');
        $adresseCommande->setDate('2025-04-27');
        $adresseCommande->setTypeAdresse('Facturation');
        $manager->persist($adresseCommande);

        $adresseCommande = new AdresseCommande();
        $adresseCommande->setId(17);
        $adresseCommande->setCommandeId(9);
        $adresseCommande->setAdresseId(2);
        $adresseCommande->setBonLivraisonId(9);
        $adresseCommande->setNumeroFacture('FAC009');
        $adresseCommande->setDate('2025-04-28');
        $adresseCommande->setTypeAdresse('Livraison');
        $manager->persist($adresseCommande);

        $adresseCommande = new AdresseCommande();
        $adresseCommande->setId(18);
        $adresseCommande->setCommandeId(9);
        $adresseCommande->setAdresseId(3);
        $adresseCommande->setBonLivraisonId(9);
        $adresseCommande->setNumeroFacture('FAC009');
        $adresseCommande->setDate('2025-04-28');
        $adresseCommande->setTypeAdresse('Facturation');
        $manager->persist($adresseCommande);

        $adresseCommande = new AdresseCommande();
        $adresseCommande->setId(19);
        $adresseCommande->setCommandeId(10);
        $adresseCommande->setAdresseId(4);
        $adresseCommande->setBonLivraisonId(10);
        $adresseCommande->setNumeroFacture('FAC010');
        $adresseCommande->setDate('2025-04-29');
        $adresseCommande->setTypeAdresse('Livraison');
        $manager->persist($adresseCommande);

        $adresseCommande = new AdresseCommande();
        $adresseCommande->setId(20);
        $adresseCommande->setCommandeId(10);
        $adresseCommande->setAdresseId(5);
        $adresseCommande->setBonLivraisonId(10);
        $adresseCommande->setNumeroFacture('FAC010');
        $adresseCommande->setDate('2025-04-29');
        $adresseCommande->setTypeAdresse('Facturation');
        $manager->persist($adresseCommande);

        $adresseCommande = new AdresseCommande();
        $adresseCommande->setId(21);
        $adresseCommande->setCommandeId(11);
        $adresseCommande->setAdresseId(6);
        $adresseCommande->setBonLivraisonId(11);
        $adresseCommande->setNumeroFacture('FAC011');
        $adresseCommande->setDate('2025-04-30');
        $adresseCommande->setTypeAdresse('Livraison');
        $manager->persist($adresseCommande);

        $adresseCommande = new AdresseCommande();
        $adresseCommande->setId(22);
        $adresseCommande->setCommandeId(11);
        $adresseCommande->setAdresseId(7);
        $adresseCommande->setBonLivraisonId(11);
        $adresseCommande->setNumeroFacture('FAC011');
        $adresseCommande->setDate('2025-04-30');
        $adresseCommande->setTypeAdresse('Facturation');
        $manager->persist($adresseCommande);

        $adresseCommande = new AdresseCommande();
        $adresseCommande->setId(23);
        $adresseCommande->setCommandeId(12);
        $adresseCommande->setAdresseId(8);
        $adresseCommande->setBonLivraisonId(12);
        $adresseCommande->setNumeroFacture('FAC012');
        $adresseCommande->setDate('2025-05-01');
        $adresseCommande->setTypeAdresse('Livraison');
        $manager->persist($adresseCommande);

        $adresseCommande = new AdresseCommande();
        $adresseCommande->setId(24);
        $adresseCommande->setCommandeId(12);
        $adresseCommande->setAdresseId(9);
        $adresseCommande->setBonLivraisonId(12);
        $adresseCommande->setNumeroFacture('FAC012');
        $adresseCommande->setDate('2025-05-01');
        $adresseCommande->setTypeAdresse('Facturation');
        $manager->persist($adresseCommande);

        $adresseCommande = new AdresseCommande();
        $adresseCommande->setId(25);
        $adresseCommande->setCommandeId(13);
        $adresseCommande->setAdresseId(10);
        $adresseCommande->setBonLivraisonId(13);
        $adresseCommande->setNumeroFacture('FAC013');
        $adresseCommande->setDate('2025-05-02');
        $adresseCommande->setTypeAdresse('Livraison');
        $manager->persist($adresseCommande);

        $adresseCommande = new AdresseCommande();
        $adresseCommande->setId(26);
        $adresseCommande->setCommandeId(13);
        $adresseCommande->setAdresseId(11);
        $adresseCommande->setBonLivraisonId(13);
        $adresseCommande->setNumeroFacture('FAC013');
        $adresseCommande->setDate('2025-05-02');
        $adresseCommande->setTypeAdresse('Facturation');
        $manager->persist($adresseCommande);

        $adresseCommande = new AdresseCommande();
        $adresseCommande->setId(27);
        $adresseCommande->setCommandeId(14);
        $adresseCommande->setAdresseId(12);
        $adresseCommande->setBonLivraisonId(14);
        $adresseCommande->setNumeroFacture('FAC014');
        $adresseCommande->setDate('2025-05-03');
        $adresseCommande->setTypeAdresse('Livraison');
        $manager->persist($adresseCommande);

        $adresseCommande = new AdresseCommande();
        $adresseCommande->setId(28);
        $adresseCommande->setCommandeId(14);
        $adresseCommande->setAdresseId(13);
        $adresseCommande->setBonLivraisonId(14);
        $adresseCommande->setNumeroFacture('FAC014');
        $adresseCommande->setDate('2025-05-03');
        $adresseCommande->setTypeAdresse('Facturation');
        $manager->persist($adresseCommande);

        $adresseCommande = new AdresseCommande();
        $adresseCommande->setId(29);
        $adresseCommande->setCommandeId(15);
        $adresseCommande->setAdresseId(14);
        $adresseCommande->setBonLivraisonId(15);
        $adresseCommande->setNumeroFacture('FAC015');
        $adresseCommande->setDate('2025-05-04');
        $adresseCommande->setTypeAdresse('Livraison');
        $manager->persist($adresseCommande);

        $adresseCommande = new AdresseCommande();
        $adresseCommande->setId(30);
        $adresseCommande->setCommandeId(15);
        $adresseCommande->setAdresseId(15);
        $adresseCommande->setBonLivraisonId(15);
        $adresseCommande->setNumeroFacture('FAC015');
        $adresseCommande->setDate('2025-05-04');
        $adresseCommande->setTypeAdresse('Facturation');
        $manager->persist($adresseCommande);

        $manager->flush();
    }
}
