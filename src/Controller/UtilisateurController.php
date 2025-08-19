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

    #[IsGranted('ROLE_USER')]
    #[Route('profil/commandes/{id}', name: 'app_commande_detail')]
    public function commandeDetail(int $id, CommandeRepository $repo): Response
    {
        $utilisateur = $this->getUser();
        $commande = $repo->find($id);

        // Sécurité : empêcher l’accès aux commandes des autres utilisateurs
        if (!$commande || $commande->getUtilisateur() !== $utilisateur) {
            throw $this->createAccessDeniedException('Commande introuvable.');
        }

        return $this->render('utilisateur/commande_detail.html.twig', [
            'commande' => $commande
        ]);
    }

    #[IsGranted('ROLE_USER')]
    #[Route('/profil/adresses', name: 'app_adresses')]
    public function adresses(): Response
    {
        /** @var Utilisateur $utilisateur */
        $utilisateur = $this->getUser();

        return $this->render('utilisateur/adresses.html.twig', [
            'adresses' => $utilisateur->getAdresses(),
        ]);
    }

    #[IsGranted('ROLE_USER')]
    #[Route('/profil/adresse/{id}/edit', name: 'app_adresse_edit')]
    public function editAdresse(int $id, Request $request, EntityManagerInterface $em): Response
    {
        $utilisateur = $this->getUser();
        $adresse = $em->getRepository(Adresse::class)->find($id);

        // Vérification de sécurité
        if (!$adresse || $adresse->getUtilisateur() !== $utilisateur) {
            throw $this->createAccessDeniedException('Accès interdit.');
        }

        $form = $this->createForm(AdresseType::class, $adresse);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em->flush();
            $this->addFlash('success', 'Adresse mise à jour.');
            return $this->redirectToRoute('app_adresses');
        }

        return $this->render('utilisateur/adresse_edit.html.twig', [
            'form' => $form,
        ]);
    }

    #[IsGranted('ROLE_USER')]
    #[Route('/profil/adresse/{id}/delete', name: 'app_adresse_delete', methods: ['POST'])]
    public function deleteAdresse(int $id, Request $request, EntityManagerInterface $em): Response
    {
        $utilisateur = $this->getUser();
        $adresse = $em->getRepository(Adresse::class)->find($id);

        if (!$adresse || $adresse->getUtilisateur() !== $utilisateur) {
            throw $this->createAccessDeniedException('Accès interdit.');
        }

        // Protection CSRF
        if ($this->isCsrfTokenValid('delete' . $adresse->getId(), $request->request->get('_token'))) {
            $em->remove($adresse);
            $em->flush();
            $this->addFlash('success', 'Adresse supprimée.');
        }

        return $this->redirectToRoute('app_adresses');
    }
}
