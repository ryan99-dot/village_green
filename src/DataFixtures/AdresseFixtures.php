<?php

namespace App\DataFixtures;

use App\Entity\Adresse;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class AdresseFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $adresse = new Adresse();
        $adresse->setId(1);
        $adresse->setAdresse('12 rue de la Musique');
        $adresse->setVille('Paris');
        $adresse->setCodePostal('75001');
        $manager->persist($adresse);

        $adresse = new Adresse();
        $adresse->setId(2);
        $adresse->setAdresse('45 avenue des Notes');
        $adresse->setVille('Lyon');
        $adresse->setCodePostal('69002');
        $manager->persist($adresse);

        $adresse = new Adresse();
        $adresse->setId(3);
        $adresse->setAdresse('78 boulevard du Son');
        $adresse->setVille('Marseille');
        $adresse->setCodePostal('13003');
        $manager->persist($adresse);

        $adresse = new Adresse();
        $adresse->setId(4);
        $adresse->setAdresse('23 impasse des Rythmes');
        $adresse->setVille('Toulouse');
        $adresse->setCodePostal('31000');
        $manager->persist($adresse);

        $adresse = new Adresse();
        $adresse->setId(5);
        $adresse->setAdresse('56 allée des Harmonies');
        $adresse->setVille('Nice');
        $adresse->setCodePostal('06000');
        $manager->persist($adresse);

        $adresse = new Adresse();
        $adresse->setId(6);
        $adresse->setAdresse('10 rue des Musiciens');
        $adresse->setVille('Paris');
        $adresse->setCodePostal('75015');
        $manager->persist($adresse);

        $adresse = new Adresse();
        $adresse->setId(7);
        $adresse->setAdresse('25 boulevard Harmonie');
        $adresse->setVille('Lyon');
        $adresse->setCodePostal('69003');
        $manager->persist($adresse);

        $adresse = new Adresse();
        $adresse->setId(8);
        $adresse->setAdresse('3 avenue des Instruments');
        $adresse->setVille('Marseille');
        $adresse->setCodePostal('13006');
        $manager->persist($adresse);

        $adresse = new Adresse();
        $adresse->setId(9);
        $adresse->setAdresse('18 rue du Conservatoire');
        $adresse->setVille('Bordeaux');
        $adresse->setCodePostal('33000');
        $manager->persist($adresse);

        $adresse = new Adresse();
        $adresse->setId(10);
        $adresse->setAdresse('47 place du Métronome');
        $adresse->setVille('Toulouse');
        $adresse->setCodePostal('31000');
        $manager->persist($adresse);

        $adresse = new Adresse();
        $adresse->setId(11);
        $adresse->setAdresse('12 rue de la Clé de Sol');
        $adresse->setVille('Nantes');
        $adresse->setCodePostal('44000');
        $manager->persist($adresse);

        $adresse = new Adresse();
        $adresse->setId(12);
        $adresse->setAdresse('7 chemin des Partitions');
        $adresse->setVille('Strasbourg');
        $adresse->setCodePostal('67000');
        $manager->persist($adresse);

        $adresse = new Adresse();
        $adresse->setId(13);
        $adresse->setAdresse('30 allée du Jazz');
        $adresse->setVille('Lille');
        $adresse->setCodePostal('59000');
        $manager->persist($adresse);

        $adresse = new Adresse();
        $adresse->setId(14);
        $adresse->setAdresse('5 impasse des Cordes');
        $adresse->setVille('Nice');
        $adresse->setCodePostal('06000');
        $manager->persist($adresse);

        $adresse = new Adresse();
        $adresse->setId(15);
        $adresse->setAdresse('22 rue du Solfège');
        $adresse->setVille('Rennes');
        $adresse->setCodePostal('35000');
        $manager->persist($adresse);

        $manager->flush();
    }
}
