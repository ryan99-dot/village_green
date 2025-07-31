<?php

namespace App\Controller;

use App\Entity\Adresse;
use App\Entity\Utilisateur;
use App\Form\AdresseType;
use App\Form\UtilisateurType;
use App\Repository\CommandeRepository;
use App\Repository\UtilisateurRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\FormError;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use Symfony\Component\Security\Http\Attribute\IsGranted;


final class UtilisateurController extends AbstractController
{
    #[Route('/utilisateur', name: 'app_utilisateur')]
    public function index(): Response
    {
        return $this->render('utilisateur/index.html.twig', [
            'controller_name' => 'UtilisateurController',
        ]);
    }

    #[Route('/inscription', name: 'app_inscription')]
    public function inscription(Request $request, EntityManagerInterface $em, UserPasswordHasherInterface $passwordHasher): Response

    {
        $utilisateur = new Utilisateur();

        $form = $this->createForm(UtilisateurType::class, $utilisateur);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $password = $form->get('password')->getData();
            $utilisateur->setPassword(
                $passwordHasher->hashPassword($utilisateur, $password)
            );

            $em->persist($utilisateur);
            $em->flush();
            return $this->redirectToRoute('app_login');
        }

        return $this->render('utilisateur/new.html.twig', [
            'form' => $form,
        ]);
    }

    #[IsGranted('ROLE_USER')]
    #[Route('/profil', name: 'app_profil')]
    public function profil(Request $request, EntityManagerInterface $em, UserPasswordHasherInterface $passwordHasher): Response
    {
        /** @var Utilisateur $utilisateur */
        $utilisateur = $this->getUser();

        $form = $this->createForm(UtilisateurType::class, $utilisateur, [
            'is_password_change' => true,
        ]);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $currentPassword = $form->get('currentPassword')->getData();

            if (!$passwordHasher->isPasswordValid($utilisateur, $currentPassword)) {
                $form->get('currentPassword')->addError(new FormError('Mot de passe actuel incorrect.'));
            } else {
                $newPassword = $form->get('password')->getData();
                $utilisateur->setPassword(
                    $passwordHasher->hashPassword($utilisateur, $newPassword)
                );
                $em->flush();
                $this->addFlash('success', 'Mot de passe mis à jour.');
                return $this->redirectToRoute('app_profil');
            }
        }

        $adresse = new Adresse();
        $adresse->setUtilisateur($utilisateur);

        $formAdresse = $this->createForm(AdresseType::class, $adresse);
        $formAdresse->handleRequest($request);

        if ($formAdresse->isSubmitted() && $formAdresse->isValid()) {
            $em->persist($adresse);
            $em->flush();
            return $this->redirectToRoute('app_profil');
        }

        return $this->render('utilisateur/profil.html.twig', [
            'form' => $form,
            'formAdresse' => $formAdresse,
        ]);
    }

    #[IsGranted('ROLE_USER')]
    #[Route('profil/informations', name: 'app_infos')]
    public function infos(Request $request, EntityManagerInterface $em): Response
    {
        $utilisateur = $this->getUser();

        $form = $this->createForm(UtilisateurType::class, $utilisateur);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $em->persist($utilisateur);
            $em->flush();
            return $this->redirectToRoute('app_infos');
        }

        return $this->render('utilisateur/infos.html.twig', [
            'utilisateur' => $utilisateur,
            'form' => $form
        ]);
    }

    #[IsGranted('ROLE_USER')]
    #[Route('profil/commandes', name: 'app_commandes')]
    public function commandes(CommandeRepository $repo): Response
    {
        $utilisateur = $this->getUser();
        $commandes = $repo->findBy(['utilisateur' => $utilisateur]);
        return $this->render('utilisateur/commandes.html.twig', [
            'commandes' => $commandes
        ]);
    }
}
