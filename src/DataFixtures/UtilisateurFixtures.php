<?php

namespace App\DataFixtures;

use App\Entity\Utilisateur;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class UtilisateurFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $utilisateur = new Utilisateur();
        $utilisateur->setId(1);
        $utilisateur->setEmail('paul.durand@villagegreen.fr');
        $utilisateur->setRoles('["ROLE_COMMERCIAL"]');
        $utilisateur->setPassword('mdp123');
        $utilisateur->setNom('Durand');
        $utilisateur->setPrenom('Paul');
        $utilisateur->setService('Ventes');
        $manager->persist($utilisateur);

        $utilisateur = new Utilisateur();
        $utilisateur->setId(2);
        $utilisateur->setEmail('sophie.lemoine@villagegreen.fr');
        $utilisateur->setRoles('["ROLE_COMMERCIAL"]');
        $utilisateur->setPassword('mdp456');
        $utilisateur->setNom('Lemoine');
        $utilisateur->setPrenom('Sophie');
        $utilisateur->setService('Ventes');
        $manager->persist($utilisateur);

        $utilisateur = new Utilisateur();
        $utilisateur->setId(3);
        $utilisateur->setEmail('camille.dupont@villagegreen.fr');
        $utilisateur->setRoles('["ROLE_COMMERCIAL"]');
        $utilisateur->setPassword('mdp789');
        $utilisateur->setNom('Dupont');
        $utilisateur->setPrenom('Camille');
        $utilisateur->setService('Grands Comptes');
        $manager->persist($utilisateur);

        $utilisateur = new Utilisateur();
        $utilisateur->setId(4);
        $utilisateur->setEmail('antoine.garcia@villagegreen.fr');
        $utilisateur->setRoles('["ROLE_COMMERCIAL"]');
        $utilisateur->setPassword('mdp321');
        $utilisateur->setNom('Garcia');
        $utilisateur->setPrenom('Antoine');
        $utilisateur->setService('Export');
        $manager->persist($utilisateur);

        $utilisateur = new Utilisateur();
        $utilisateur->setId(5);
        $utilisateur->setCommercialId(1);
        $utilisateur->setEmail('jean.martin@clientpro.fr');
        $utilisateur->setRoles('["ROLE_CLIENT"]');
        $utilisateur->setPassword('pass123');
        $utilisateur->setNom('Martin');
        $utilisateur->setPrenom('Jean');
        $utilisateur->setCategorieClient('Professionnel');
        $utilisateur->setTelephone('0612345678');
        $utilisateur->setCoefficientTaxe(1.2);
        $utilisateur->setReduction(0.05);
        $manager->persist($utilisateur);

        $utilisateur = new Utilisateur();
        $utilisateur->setId(6);
        $utilisateur->setCommercialId(1);
        $utilisateur->setEmail('claire.bernard@clientpro.fr');
        $utilisateur->setRoles('["ROLE_CLIENT"]');
        $utilisateur->setPassword('pass456');
        $utilisateur->setNom('Bernard');
        $utilisateur->setPrenom('Claire');
        $utilisateur->setCategorieClient('Professionnel');
        $utilisateur->setTelephone('0698765432');
        $utilisateur->setCoefficientTaxe(1.15);
        $utilisateur->setReduction(0.1);
        $manager->persist($utilisateur);

        $utilisateur = new Utilisateur();
        $utilisateur->setId(7);
        $utilisateur->setCommercialId(3);
        $utilisateur->setEmail('nathalie.leroy@clientpro.fr');
        $utilisateur->setRoles('["ROLE_CLIENT"]');
        $utilisateur->setPassword('pro789');
        $utilisateur->setNom('Leroy');
        $utilisateur->setPrenom('Nathalie');
        $utilisateur->setCategorieClient('Professionnel');
        $utilisateur->setTelephone('0623456789');
        $utilisateur->setCoefficientTaxe(1.1);
        $utilisateur->setReduction(0.08);
        $manager->persist($utilisateur);

        $utilisateur = new Utilisateur();
        $utilisateur->setId(8);
        $utilisateur->setCommercialId(4);
        $utilisateur->setEmail('olivier.faure@clientpro.fr');
        $utilisateur->setRoles('["ROLE_CLIENT"]');
        $utilisateur->setPassword('pro321');
        $utilisateur->setNom('Faure');
        $utilisateur->setPrenom('Olivier');
        $utilisateur->setCategorieClient('Professionnel');
        $utilisateur->setTelephone('0634567891');
        $utilisateur->setCoefficientTaxe(1.18);
        $utilisateur->setReduction(0.06);
        $manager->persist($utilisateur);

        $utilisateur = new Utilisateur();
        $utilisateur->setId(9);
        $utilisateur->setCommercialId(1);
        $utilisateur->setEmail('julie.simon@clientpro.fr');
        $utilisateur->setRoles('["ROLE_CLIENT"]');
        $utilisateur->setPassword('pro654');
        $utilisateur->setNom('Simon');
        $utilisateur->setPrenom('Julie');
        $utilisateur->setCategorieClient('Professionnel');
        $utilisateur->setTelephone('0645678912');
        $utilisateur->setCoefficientTaxe(1.2);
        $utilisateur->setReduction(0.07);
        $manager->persist($utilisateur);

        $utilisateur = new Utilisateur();
        $utilisateur->setId(10);
        $utilisateur->setCommercialId(2);
        $utilisateur->setEmail('lucie.petit@clientpart.fr');
        $utilisateur->setRoles('["ROLE_CLIENT"]');
        $utilisateur->setPassword('pass789');
        $utilisateur->setNom('Petit');
        $utilisateur->setPrenom('Lucie');
        $utilisateur->setCategorieClient('Particulier');
        $utilisateur->setTelephone('0678945612');
        $utilisateur->setCoefficientTaxe(1.25);
        $manager->persist($utilisateur);

        $utilisateur = new Utilisateur();
        $utilisateur->setId(11);
        $utilisateur->setCommercialId(2);
        $utilisateur->setEmail('thomas.moreau@clientpart.fr');
        $utilisateur->setRoles('["ROLE_CLIENT"]');
        $utilisateur->setPassword('pass321');
        $utilisateur->setNom('Moreau');
        $utilisateur->setPrenom('Thomas');
        $utilisateur->setCategorieClient('Particulier');
        $utilisateur->setTelephone('0654321987');
        $utilisateur->setCoefficientTaxe(1.25);
        $manager->persist($utilisateur);

        $utilisateur = new Utilisateur();
        $utilisateur->setId(12);
        $utilisateur->setCommercialId(2);
        $utilisateur->setEmail('hugo.noel@clientpart.fr');
        $utilisateur->setRoles('["ROLE_CLIENT"]');
        $utilisateur->setPassword('part111');
        $utilisateur->setNom('Noël');
        $utilisateur->setPrenom('Hugo');
        $utilisateur->setCategorieClient('Particulier');
        $utilisateur->setTelephone('0667891234');
        $utilisateur->setCoefficientTaxe(1.25);
        $manager->persist($utilisateur);

        $utilisateur = new Utilisateur();
        $utilisateur->setId(13);
        $utilisateur->setCommercialId(2);
        $utilisateur->setEmail('chloe.lemoine@clientpart.fr');
        $utilisateur->setRoles('["ROLE_CLIENT"]');
        $utilisateur->setPassword('part222');
        $utilisateur->setNom('Lemoine');
        $utilisateur->setPrenom('Chloé');
        $utilisateur->setCategorieClient('Particulier');
        $utilisateur->setTelephone('0678912345');
        $utilisateur->setCoefficientTaxe(1.25);
        $manager->persist($utilisateur);

        $utilisateur = new Utilisateur();
        $utilisateur->setId(14);
        $utilisateur->setCommercialId(2);
        $utilisateur->setEmail('mathieu.barre@clientpart.fr');
        $utilisateur->setRoles('["ROLE_CLIENT"]');
        $utilisateur->setPassword('part333');
        $utilisateur->setNom('Barre');
        $utilisateur->setPrenom('Mathieu');
        $utilisateur->setCategorieClient('Particulier');
        $utilisateur->setTelephone('0689123456');
        $utilisateur->setCoefficientTaxe(1.25);
        $manager->persist($utilisateur);

        $manager->flush();
    }
}
