<?php

namespace App\DataFixtures;

use App\Entity\Commande;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class CommandeFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $commande = new Commande();
        $commande->setId(1);
        $commande->setUtilisateurId(10);
        $commande->setNumero('CMD001');
        $commande->setDate('2025-04-20 00:00:00');
        $commande->setEtat('En cours');
        $commande->setReferencePaiement('PAY001');
        $commande->setTypePaiement('Carte Bancaire');
        $commande->setStatutPaiement('Payé');
        $commande->setDatePaiement('2025-04-20 00:00:00');
        $manager->persist($commande);

        $commande = new Commande();
        $commande->setId(2);
        $commande->setUtilisateurId(5);
        $commande->setNumero('CMD002');
        $commande->setDate('2025-04-21 00:00:00');
        $commande->setEtat('Livrée');
        $commande->setReferencePaiement('PAY002');
        $commande->setTypePaiement('Virement');
        $commande->setStatutPaiement('En attente');
        $manager->persist($commande);

        $commande = new Commande();
        $commande->setId(3);
        $commande->setUtilisateurId(6);
        $commande->setNumero('CMD003');
        $commande->setDate('2025-04-22 00:00:00');
        $commande->setEtat('Préparée');
        $commande->setReferencePaiement('PAY003');
        $commande->setTypePaiement('Chèque');
        $commande->setStatutPaiement('En attente');
        $manager->persist($commande);

        $commande = new Commande();
        $commande->setId(4);
        $commande->setUtilisateurId(11);
        $commande->setNumero('CMD004');
        $commande->setDate('2025-04-22 00:00:00');
        $commande->setEtat('En cours');
        $commande->setReferencePaiement('PAY004');
        $commande->setTypePaiement('Carte Bancaire');
        $commande->setStatutPaiement('Payé');
        $commande->setDatePaiement('2025-04-22 00:00:00');
        $manager->persist($commande);

        $commande = new Commande();
        $commande->setId(5);
        $commande->setUtilisateurId(7);
        $commande->setNumero('CMD005');
        $commande->setDate('2025-04-23 00:00:00');
        $commande->setEtat('En cours');
        $commande->setReferencePaiement('PAY005');
        $commande->setTypePaiement('Virement');
        $commande->setStatutPaiement('Payé');
        $commande->setDatePaiement('2025-04-23 00:00:00');
        $manager->persist($commande);

        $commande = new Commande();
        $commande->setId(6);
        $commande->setUtilisateurId(12);
        $commande->setNumero('CMD006');
        $commande->setDate('2025-04-23 00:00:00');
        $commande->setEtat('Livrée');
        $commande->setReferencePaiement('PAY006');
        $commande->setTypePaiement('Carte Bancaire');
        $commande->setStatutPaiement('Payé');
        $commande->setDatePaiement('2025-04-23 00:00:00');
        $manager->persist($commande);

        $commande = new Commande();
        $commande->setId(7);
        $commande->setUtilisateurId(8);
        $commande->setNumero('CMD007');
        $commande->setDate('2025-04-24 00:00:00');
        $commande->setEtat('En cours');
        $commande->setReferencePaiement('PAY007');
        $commande->setTypePaiement('Chèque');
        $commande->setStatutPaiement('En attente');
        $manager->persist($commande);

        $commande = new Commande();
        $commande->setId(8);
        $commande->setUtilisateurId(13);
        $commande->setNumero('CMD008');
        $commande->setDate('2025-04-24 00:00:00');
        $commande->setEtat('Annulée');
        $commande->setReferencePaiement('PAY008');
        $commande->setTypePaiement('Carte Bancaire');
        $commande->setStatutPaiement('Annulé');
        $manager->persist($commande);

        $commande = new Commande();
        $commande->setId(9);
        $commande->setUtilisateurId(14);
        $commande->setNumero('CMD009');
        $commande->setDate('2025-04-25 00:00:00');
        $commande->setEtat('Préparée');
        $commande->setReferencePaiement('PAY009');
        $commande->setTypePaiement('Carte Bancaire');
        $commande->setStatutPaiement('Payé');
        $commande->setDatePaiement('2025-04-25 00:00:00');
        $manager->persist($commande);

        $commande = new Commande();
        $commande->setId(10);
        $commande->setUtilisateurId(9);
        $commande->setNumero('CMD010');
        $commande->setDate('2025-04-25 00:00:00');
        $commande->setEtat('En cours');
        $commande->setReferencePaiement('PAY010');
        $commande->setTypePaiement('Virement');
        $commande->setStatutPaiement('Payé');
        $commande->setDatePaiement('2025-04-25 00:00:00');
        $manager->persist($commande);

        $commande = new Commande();
        $commande->setId(11);
        $commande->setUtilisateurId(10);
        $commande->setNumero('CMD011');
        $commande->setDate('2024-05-15 00:00:00');
        $commande->setEtat('En cours');
        $commande->setReferencePaiement('PAY003');
        $commande->setTypePaiement('Carte Bancaire');
        $commande->setStatutPaiement('Payé');
        $commande->setDatePaiement('2024-05-15 00:00:00');
        $manager->persist($commande);

        $commande = new Commande();
        $commande->setId(12);
        $commande->setUtilisateurId(6);
        $commande->setNumero('CMD012');
        $commande->setDate('2024-06-20 00:00:00');
        $commande->setEtat('Livrée');
        $commande->setReferencePaiement('PAY004');
        $commande->setTypePaiement('Virement');
        $commande->setStatutPaiement('En attente');
        $manager->persist($commande);

        $commande = new Commande();
        $commande->setId(13);
        $commande->setUtilisateurId(11);
        $commande->setNumero('CMD013');
        $commande->setDate('2024-07-10 00:00:00');
        $commande->setEtat('Annulée');
        $commande->setReferencePaiement('PAY005');
        $commande->setTypePaiement('Chèque');
        $commande->setStatutPaiement('Non payé');
        $manager->persist($commande);

        $commande = new Commande();
        $commande->setId(14);
        $commande->setUtilisateurId(5);
        $commande->setNumero('CMD014');
        $commande->setDate('2024-08-05 00:00:00');
        $commande->setEtat('En cours');
        $commande->setReferencePaiement('PAY006');
        $commande->setTypePaiement('Carte Bancaire');
        $commande->setStatutPaiement('Payé');
        $commande->setDatePaiement('2024-08-05 00:00:00');
        $manager->persist($commande);

        $commande = new Commande();
        $commande->setId(15);
        $commande->setUtilisateurId(10);
        $commande->setNumero('CMD015');
        $commande->setDate('2024-09-18 00:00:00');
        $commande->setEtat('Livrée');
        $commande->setReferencePaiement('PAY007');
        $commande->setTypePaiement('Virement');
        $commande->setStatutPaiement('En attente');
        $manager->persist($commande);

        $manager->flush();
    }
}
