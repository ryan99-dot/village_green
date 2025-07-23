<?php

namespace App\DataFixtures;

use App\Entity\Fournisseur;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class FournisseurFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $fournisseur = new Fournisseur();
        $fournisseur->setId(1);
        $fournisseur->setReference('FOUR001');
        $fournisseur->setNom('Musique Plus');
        $fournisseur->setMail('contact@musiqueplus.fr');
        $fournisseur->setTelephone('0123456789');
        $manager->persist($fournisseur);

        $fournisseur = new Fournisseur();
        $fournisseur->setId(2);
        $fournisseur->setReference('FOUR002');
        $fournisseur->setNom('Instruments Pro');
        $fournisseur->setMail('info@instrumentspro.com');
        $fournisseur->setTelephone('0987654321');
        $manager->persist($fournisseur);

        $fournisseur = new Fournisseur();
        $fournisseur->setId(3);
        $fournisseur->setReference('FOUR003');
        $fournisseur->setNom('Sonorité');
        $fournisseur->setMail('support@sonorite.fr');
        $fournisseur->setTelephone('0147258369');
        $manager->persist($fournisseur);

        $fournisseur = new Fournisseur();
        $fournisseur->setId(4);
        $fournisseur->setReference('FOUR004');
        $fournisseur->setNom('Harmony');
        $fournisseur->setMail('service@harmony.com');
        $fournisseur->setTelephone('0173648291');
        $manager->persist($fournisseur);

        $fournisseur = new Fournisseur();
        $fournisseur->setId(5);
        $fournisseur->setReference('FOUR005');
        $fournisseur->setNom('Melody Corp');
        $fournisseur->setMail('contact@melodycorp.fr');
        $fournisseur->setTelephone('0165987432');
        $manager->persist($fournisseur);

        $fournisseur = new Fournisseur();
        $fournisseur->setId(6);
        $fournisseur->setReference('FOUR006');
        $fournisseur->setNom('Acoustic World');
        $fournisseur->setMail('info@acousticworld.com');
        $fournisseur->setTelephone('0156324789');
        $manager->persist($fournisseur);

        $fournisseur = new Fournisseur();
        $fournisseur->setId(7);
        $fournisseur->setReference('FOUR007');
        $fournisseur->setNom('Digital Harmony');
        $fournisseur->setMail('contact@digitalharmony.fr');
        $fournisseur->setTelephone('0187456321');
        $manager->persist($fournisseur);

        $fournisseur = new Fournisseur();
        $fournisseur->setId(8);
        $fournisseur->setReference('FOUR008');
        $fournisseur->setNom('ElectroSound');
        $fournisseur->setMail('support@electrosound.com');
        $fournisseur->setTelephone('0145897632');
        $manager->persist($fournisseur);

        $fournisseur = new Fournisseur();
        $fournisseur->setId(9);
        $fournisseur->setReference('FOUR009');
        $fournisseur->setNom('BassLine');
        $fournisseur->setMail('contact@bassline.fr');
        $fournisseur->setTelephone('0192837465');
        $manager->persist($fournisseur);

        $fournisseur = new Fournisseur();
        $fournisseur->setId(10);
        $fournisseur->setReference('FOUR010');
        $fournisseur->setNom('Orchestra Supply');
        $fournisseur->setMail('info@orchestrasupply.com');
        $fournisseur->setTelephone('0178965412');
        $manager->persist($fournisseur);

        $fournisseur = new Fournisseur();
        $fournisseur->setId(11);
        $fournisseur->setReference('FOUR011');
        $fournisseur->setNom('Percussion Center');
        $fournisseur->setMail('vente@percussioncenter.fr');
        $fournisseur->setTelephone('0165478932');
        $manager->persist($fournisseur);

        $fournisseur = new Fournisseur();
        $fournisseur->setId(12);
        $fournisseur->setReference('FOUR012');
        $fournisseur->setNom('PianoHouse');
        $fournisseur->setMail('contact@pianohouse.fr');
        $fournisseur->setTelephone('0147852369');
        $manager->persist($fournisseur);

        $fournisseur = new Fournisseur();
        $fournisseur->setId(13);
        $fournisseur->setReference('FOUR013');
        $fournisseur->setNom('GuitarZone');
        $fournisseur->setMail('service@guitarzone.com');
        $fournisseur->setTelephone('0189567324');
        $manager->persist($fournisseur);

        $fournisseur = new Fournisseur();
        $fournisseur->setId(14);
        $fournisseur->setReference('FOUR014');
        $fournisseur->setNom('StudioMix');
        $fournisseur->setMail('contact@studiomix.fr');
        $fournisseur->setTelephone('0132456789');
        $manager->persist($fournisseur);

        $fournisseur = new Fournisseur();
        $fournisseur->setId(15);
        $fournisseur->setReference('FOUR015');
        $fournisseur->setNom('Musicalia');
        $fournisseur->setMail('info@musicalia.com');
        $fournisseur->setTelephone('0178456329');
        $manager->persist($fournisseur);

        $manager->flush();
    }
}
