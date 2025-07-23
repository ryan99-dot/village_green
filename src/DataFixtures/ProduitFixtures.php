<?php

namespace App\DataFixtures;

use App\Entity\Produit;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class ProduitFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $produit = new Produit();
        $produit->setId(1);
        $produit->setSousRubriqueId(1);
        $produit->setFournisseurId(1);
        $produit->setReference('PROD001');
        $produit->setNom('Guitare Acoustique');
        $produit->setDescription('Guitare acoustique en bois massif');
        $produit->setPrix(150.0);
        $produit->setPhoto('https://cdn.pixabay.com/photo/2016/03/27/22/20/wood-1284504_1280.jpg');
        $produit->setStock(10);
        $produit->setPublie(1);
        $produit->setActif(1);
        $produit->setPrixAchat(100.0);
        $manager->persist($produit);

        $produit = new Produit();
        $produit->setId(2);
        $produit->setSousRubriqueId(2);
        $produit->setFournisseurId(2);
        $produit->setReference('PROD002');
        $produit->setNom('Basse Électrique');
        $produit->setDescription('Basse électrique 4 cordes');
        $produit->setPrix(200.0);
        $produit->setPhoto('https://cdn.pixabay.com/photo/2015/08/18/16/58/bass-guitar-894524_1280.jpg');
        $produit->setStock(5);
        $produit->setPublie(1);
        $produit->setActif(1);
        $produit->setPrixAchat(140.0);
        $manager->persist($produit);

        $produit = new Produit();
        $produit->setId(3);
        $produit->setSousRubriqueId(3);
        $produit->setFournisseurId(3);
        $produit->setReference('PROD003');
        $produit->setNom('Piano Numérique');
        $produit->setDescription('Piano numérique 88 touches');
        $produit->setPrix(500.0);
        $produit->setPhoto('piano_numerique.jpg');
        $produit->setStock(3);
        $produit->setPublie(1);
        $produit->setActif(1);
        $produit->setPrixAchat(350.0);
        $manager->persist($produit);

        $produit = new Produit();
        $produit->setId(4);
        $produit->setSousRubriqueId(4);
        $produit->setFournisseurId(4);
        $produit->setReference('PROD004');
        $produit->setNom('Synthétiseur Analogique');
        $produit->setDescription('Synthétiseur avec sons vintage');
        $produit->setPrix(300.0);
        $produit->setPhoto('synth_analogique.jpg');
        $produit->setStock(7);
        $produit->setPublie(1);
        $produit->setActif(1);
        $produit->setPrixAchat(220.0);
        $manager->persist($produit);

        $produit = new Produit();
        $produit->setId(5);
        $produit->setSousRubriqueId(5);
        $produit->setFournisseurId(5);
        $produit->setReference('PROD005');
        $produit->setNom('Batterie Électronique');
        $produit->setDescription('Kit de batterie électronique complet');
        $produit->setPrix(450.0);
        $produit->setPhoto('batterie_electronique.jpg');
        $produit->setStock(2);
        $produit->setPublie(1);
        $produit->setActif(1);
        $produit->setPrixAchat(320.0);
        $manager->persist($produit);

        $produit = new Produit();
        $produit->setId(6);
        $produit->setSousRubriqueId(6);
        $produit->setFournisseurId(6);
        $produit->setReference('PROD006');
        $produit->setNom('Congas en bois');
        $produit->setDescription('Paire de congas professionnels');
        $produit->setPrix(280.0);
        $produit->setPhoto('congas_bois.jpg');
        $produit->setStock(4);
        $produit->setPublie(1);
        $produit->setActif(1);
        $produit->setPrixAchat(180.0);
        $manager->persist($produit);

        $produit = new Produit();
        $produit->setId(7);
        $produit->setSousRubriqueId(7);
        $produit->setFournisseurId(7);
        $produit->setReference('PROD007');
        $produit->setNom('Trompette Sib');
        $produit->setDescription('Trompette en laiton avec étui');
        $produit->setPrix(320.0);
        $produit->setPhoto('trompette_sib.jpg');
        $produit->setStock(6);
        $produit->setPublie(1);
        $produit->setActif(1);
        $produit->setPrixAchat(240.0);
        $manager->persist($produit);

        $produit = new Produit();
        $produit->setId(8);
        $produit->setSousRubriqueId(8);
        $produit->setFournisseurId(8);
        $produit->setReference('PROD008');
        $produit->setNom('Saxophone Alto');
        $produit->setDescription('Saxophone alto doré');
        $produit->setPrix(600.0);
        $produit->setPhoto('saxophone_alto.jpg');
        $produit->setStock(3);
        $produit->setPublie(1);
        $produit->setActif(1);
        $produit->setPrixAchat(420.0);
        $manager->persist($produit);

        $produit = new Produit();
        $produit->setId(9);
        $produit->setSousRubriqueId(9);
        $produit->setFournisseurId(9);
        $produit->setReference('PROD009');
        $produit->setNom('Câble Jack-Jack 6m');
        $produit->setDescription('Câble audio 6 mètres pour instrument');
        $produit->setPrix(15.0);
        $produit->setPhoto('cable_jack.jpg');
        $produit->setStock(20);
        $produit->setPublie(1);
        $produit->setActif(1);
        $produit->setPrixAchat(10.0);
        $manager->persist($produit);

        $produit = new Produit();
        $produit->setId(10);
        $produit->setSousRubriqueId(10);
        $produit->setFournisseurId(10);
        $produit->setReference('PROD010');
        $produit->setNom('Support Guitare');
        $produit->setDescription('Support pliable pour guitare acoustique/électrique');
        $produit->setPrix(25.0);
        $produit->setPhoto('support_guitare.jpg');
        $produit->setStock(15);
        $produit->setPublie(1);
        $produit->setActif(1);
        $produit->setPrixAchat(18.0);
        $manager->persist($produit);

        $produit = new Produit();
        $produit->setId(11);
        $produit->setSousRubriqueId(1);
        $produit->setFournisseurId(1);
        $produit->setReference('PROD011');
        $produit->setNom('Guitare Électrique');
        $produit->setDescription('Guitare électrique 6 cordes, corps en érable');
        $produit->setPrix(180.0);
        $produit->setPhoto('guitare_electrique.jpg');
        $produit->setStock(5);
        $produit->setPublie(1);
        $produit->setActif(1);
        $produit->setPrixAchat(130.0);
        $manager->persist($produit);

        $produit = new Produit();
        $produit->setId(12);
        $produit->setSousRubriqueId(1);
        $produit->setFournisseurId(1);
        $produit->setReference('PROD012');
        $produit->setNom('Ampli Guitare');
        $produit->setDescription('Ampli de guitare 30W avec effets');
        $produit->setPrix(120.0);
        $produit->setPhoto('ampli_guitare.jpg');
        $produit->setStock(8);
        $produit->setPublie(1);
        $produit->setActif(1);
        $produit->setPrixAchat(85.0);
        $manager->persist($produit);

        $produit = new Produit();
        $produit->setId(13);
        $produit->setSousRubriqueId(2);
        $produit->setFournisseurId(1);
        $produit->setReference('PROD013');
        $produit->setNom('Basse Active');
        $produit->setDescription('Basse active avec préampli');
        $produit->setPrix(250.0);
        $produit->setPhoto('basse_active.jpg');
        $produit->setStock(4);
        $produit->setPublie(1);
        $produit->setActif(1);
        $produit->setPrixAchat(180.0);
        $manager->persist($produit);

        $produit = new Produit();
        $produit->setId(14);
        $produit->setSousRubriqueId(3);
        $produit->setFournisseurId(3);
        $produit->setReference('PROD014');
        $produit->setNom('Piano à queue');
        $produit->setDescription('Piano à queue acoustique');
        $produit->setPrix(1200.0);
        $produit->setPhoto('piano_queue.jpg');
        $produit->setStock(2);
        $produit->setPublie(0);
        $produit->setActif(0);
        $produit->setPrixAchat(900.0);
        $manager->persist($produit);

        $produit = new Produit();
        $produit->setId(15);
        $produit->setSousRubriqueId(5);
        $produit->setFournisseurId(5);
        $produit->setReference('PROD015');
        $produit->setNom('Microphone USB');
        $produit->setDescription('Microphone de studio pour enregistrement');
        $produit->setPrix(80.0);
        $produit->setPhoto('microphone_usb.jpg');
        $produit->setStock(10);
        $produit->setPublie(1);
        $produit->setActif(0);
        $produit->setPrixAchat(60.0);
        $manager->persist($produit);

        $produit = new Produit();
        $produit->setId(16);
        $produit->setSousRubriqueId(5);
        $produit->setFournisseurId(5);
        $produit->setReference('PROD016');
        $produit->setNom('Batterie Acoustique');
        $produit->setDescription('Batterie acoustique avec cymbales');
        $produit->setPrix(600.0);
        $produit->setPhoto('batterie_acoustique.jpg');
        $produit->setStock(5);
        $produit->setPublie(1);
        $produit->setActif(1);
        $produit->setPrixAchat(450.0);
        $manager->persist($produit);

        $manager->flush();
    }
}
