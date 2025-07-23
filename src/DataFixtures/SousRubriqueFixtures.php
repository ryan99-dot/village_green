<?php

namespace App\DataFixtures;

use App\Entity\SousRubrique;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class SousRubriqueFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $sousRubrique = new SousRubrique();
        $sousRubrique->setId(1);
        $sousRubrique->setNom('Guitares');
        $sousRubrique->setPhoto('guitares.jpg');
        $sousRubrique->setRubriqueId(1);
        $manager->persist($sousRubrique);

        $sousRubrique = new SousRubrique();
        $sousRubrique->setId(2);
        $sousRubrique->setNom('Basses');
        $sousRubrique->setPhoto('basses.jpg');
        $sousRubrique->setRubriqueId(1);
        $manager->persist($sousRubrique);

        $sousRubrique = new SousRubrique();
        $sousRubrique->setId(3);
        $sousRubrique->setNom('Pianos');
        $sousRubrique->setPhoto('pianos.jpg');
        $sousRubrique->setRubriqueId(2);
        $manager->persist($sousRubrique);

        $sousRubrique = new SousRubrique();
        $sousRubrique->setId(4);
        $sousRubrique->setNom('Synthétiseurs');
        $sousRubrique->setPhoto('synthes.jpg');
        $sousRubrique->setRubriqueId(2);
        $manager->persist($sousRubrique);

        $sousRubrique = new SousRubrique();
        $sousRubrique->setId(5);
        $sousRubrique->setNom('Batteries');
        $sousRubrique->setPhoto('batteries.jpg');
        $sousRubrique->setRubriqueId(3);
        $manager->persist($sousRubrique);

        $sousRubrique = new SousRubrique();
        $sousRubrique->setId(6);
        $sousRubrique->setNom('Congas');
        $sousRubrique->setPhoto('congas.jpg');
        $sousRubrique->setRubriqueId(3);
        $manager->persist($sousRubrique);

        $sousRubrique = new SousRubrique();
        $sousRubrique->setId(7);
        $sousRubrique->setNom('Trompettes');
        $sousRubrique->setPhoto('trompettes.jpg');
        $sousRubrique->setRubriqueId(4);
        $manager->persist($sousRubrique);

        $sousRubrique = new SousRubrique();
        $sousRubrique->setId(8);
        $sousRubrique->setNom('Saxophones');
        $sousRubrique->setPhoto('saxophones.jpg');
        $sousRubrique->setRubriqueId(4);
        $manager->persist($sousRubrique);

        $sousRubrique = new SousRubrique();
        $sousRubrique->setId(9);
        $sousRubrique->setNom('Câbles');
        $sousRubrique->setPhoto('cables.jpg');
        $sousRubrique->setRubriqueId(5);
        $manager->persist($sousRubrique);

        $sousRubrique = new SousRubrique();
        $sousRubrique->setId(10);
        $sousRubrique->setNom('Supports');
        $sousRubrique->setPhoto('supports.jpg');
        $sousRubrique->setRubriqueId(5);
        $manager->persist($sousRubrique);

        $sousRubrique = new SousRubrique();
        $sousRubrique->setId(11);
        $sousRubrique->setNom('Clarinette');
        $sousRubrique->setPhoto('clarinette.jpg');
        $sousRubrique->setRubriqueId(6);
        $manager->persist($sousRubrique);

        $sousRubrique = new SousRubrique();
        $sousRubrique->setId(12);
        $sousRubrique->setNom('Flûte traversière');
        $sousRubrique->setPhoto('flute.jpg');
        $sousRubrique->setRubriqueId(6);
        $manager->persist($sousRubrique);

        $sousRubrique = new SousRubrique();
        $sousRubrique->setId(13);
        $sousRubrique->setNom('Enceintes');
        $sousRubrique->setPhoto('enceintes.jpg');
        $sousRubrique->setRubriqueId(7);
        $manager->persist($sousRubrique);

        $sousRubrique = new SousRubrique();
        $sousRubrique->setId(14);
        $sousRubrique->setNom('Tables de mixage');
        $sousRubrique->setPhoto('tables_mixage.jpg');
        $sousRubrique->setRubriqueId(7);
        $manager->persist($sousRubrique);

        $sousRubrique = new SousRubrique();
        $sousRubrique->setId(15);
        $sousRubrique->setNom('Projecteurs');
        $sousRubrique->setPhoto('projecteurs.jpg');
        $sousRubrique->setRubriqueId(8);
        $manager->persist($sousRubrique);

        $sousRubrique = new SousRubrique();
        $sousRubrique->setId(16);
        $sousRubrique->setNom('Pieds & Supports');
        $sousRubrique->setPhoto('pieds.jpg');
        $sousRubrique->setRubriqueId(8);
        $manager->persist($sousRubrique);

        $sousRubrique = new SousRubrique();
        $sousRubrique->setId(17);
        $sousRubrique->setNom('Interfaces audio');
        $sousRubrique->setPhoto('interfaces.jpg');
        $sousRubrique->setRubriqueId(9);
        $manager->persist($sousRubrique);

        $sousRubrique = new SousRubrique();
        $sousRubrique->setId(18);
        $sousRubrique->setNom('Claviers maîtres');
        $sousRubrique->setPhoto('claviers_maitres.jpg');
        $sousRubrique->setRubriqueId(9);
        $manager->persist($sousRubrique);

        $sousRubrique = new SousRubrique();
        $sousRubrique->setId(19);
        $sousRubrique->setNom('Partitions classiques');
        $sousRubrique->setPhoto('partitions_classiques.jpg');
        $sousRubrique->setRubriqueId(10);
        $manager->persist($sousRubrique);

        $sousRubrique = new SousRubrique();
        $sousRubrique->setId(20);
        $sousRubrique->setNom('Méthodes débutants');
        $sousRubrique->setPhoto('methodes_debutants.jpg');
        $sousRubrique->setRubriqueId(10);
        $manager->persist($sousRubrique);

        $sousRubrique = new SousRubrique();
        $sousRubrique->setId(21);
        $sousRubrique->setNom('Contrôleurs DJ');
        $sousRubrique->setPhoto('controleurs.jpg');
        $sousRubrique->setRubriqueId(11);
        $manager->persist($sousRubrique);

        $sousRubrique = new SousRubrique();
        $sousRubrique->setId(22);
        $sousRubrique->setNom('Logiciels DJ');
        $sousRubrique->setPhoto('logiciels_dj.jpg');
        $sousRubrique->setRubriqueId(11);
        $manager->persist($sousRubrique);

        $sousRubrique = new SousRubrique();
        $sousRubrique->setId(23);
        $sousRubrique->setNom('Microphones filaires');
        $sousRubrique->setPhoto('micros_filaires.jpg');
        $sousRubrique->setRubriqueId(12);
        $manager->persist($sousRubrique);

        $sousRubrique = new SousRubrique();
        $sousRubrique->setId(24);
        $sousRubrique->setNom('Microphones sans fil');
        $sousRubrique->setPhoto('micros_sans_fil.jpg');
        $sousRubrique->setRubriqueId(12);
        $manager->persist($sousRubrique);

        $sousRubrique = new SousRubrique();
        $sousRubrique->setId(25);
        $sousRubrique->setNom('Enregistreurs numériques');
        $sousRubrique->setPhoto('enregistreurs.jpg');
        $sousRubrique->setRubriqueId(13);
        $manager->persist($sousRubrique);

        $sousRubrique = new SousRubrique();
        $sousRubrique->setId(26);
        $sousRubrique->setNom('Studios portables');
        $sousRubrique->setPhoto('studios_portables.jpg');
        $sousRubrique->setRubriqueId(13);
        $manager->persist($sousRubrique);

        $sousRubrique = new SousRubrique();
        $sousRubrique->setId(27);
        $sousRubrique->setNom('Produits d’entretien');
        $sousRubrique->setPhoto('entretien.jpg');
        $sousRubrique->setRubriqueId(14);
        $manager->persist($sousRubrique);

        $sousRubrique = new SousRubrique();
        $sousRubrique->setId(28);
        $sousRubrique->setNom('Outils de réparation');
        $sousRubrique->setPhoto('outils.jpg');
        $sousRubrique->setRubriqueId(14);
        $manager->persist($sousRubrique);

        $sousRubrique = new SousRubrique();
        $sousRubrique->setId(29);
        $sousRubrique->setNom('Plugins VST');
        $sousRubrique->setPhoto('plugins.jpg');
        $sousRubrique->setRubriqueId(15);
        $manager->persist($sousRubrique);

        $sousRubrique = new SousRubrique();
        $sousRubrique->setId(30);
        $sousRubrique->setNom('Banques de sons');
        $sousRubrique->setPhoto('banques_sons.jpg');
        $sousRubrique->setRubriqueId(15);
        $manager->persist($sousRubrique);

        $manager->flush();
    }
}
