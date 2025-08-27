<?php

namespace App\Controller;

use App\Entity\Commande;
use App\Entity\Utilisateur;
use App\Form\UtilisateurType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Http\Attribute\IsGranted;

#[Route('/ventes')]
#[IsGranted('ROLE_COMMERCIAL')]
class VentesController extends AbstractController
{
    #[Route('/ventes/clients', name: 'app_clients')]
    public function clients(EntityManagerInterface $em): Response
    {
        // récupérer le commercial connecté
        /** @var Utilisateur $commercial */
        $commercial = $this->getUser();

        // récupérer ses clients
        $clients = $em->getRepository(Utilisateur::class)
            ->findBy(['commercial' => $commercial]);

        return $this->render('ventes/clients.html.twig', [
            'clients' => $clients,
            'commercial' => $commercial,
        ]);
    }

    #[Route('/ventes/client/{id}/infos', name: 'app_client_infos')]
    public function clientsInfos(int $id, Request $request, EntityManagerInterface $em): Response
    {
        $utilisateur = $em->getRepository(Utilisateur::class)->find($id);

        if (!$utilisateur) {
            throw $this->createNotFoundException('Client introuvable');
        }

        // Récupérer les commandes du client
        $commandes = $em->getRepository(Commande::class)
            ->findBy(['utilisateur' => $utilisateur]);

        $form = $this->createForm(UtilisateurType::class, $utilisateur);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em->flush();
            $this->addFlash('success', 'Informations mises à jour.');
            return $this->redirectToRoute('app_client_infos', ['id' => $utilisateur->getId()]);
        }

        return $this->render('ventes/client_infos.html.twig', [
            'form' => $form,
            'client' => $utilisateur,
            'commandes' => $commandes
        ]);
    }

    #[Route('/ventes/commande/{id}/paiement', name: 'app_commande_paiement')]
public function Paiement(int $id, EntityManagerInterface $em): Response
{
$commande = $em->getRepository(Commande::class)->find($id);

    if (!$commande) {
        throw $this->createNotFoundException('Commande introuvable');
    }

    // basculer le statut
        $commande->setStatutPaiement('Payé');
        $commande->setDatePaiement(new \DateTimeImmutable());

    $em->flush();

    $this->addFlash('success', 'État du paiement mis à jour.');
    return $this->redirectToRoute('app_client_infos', ['id' => $commande->getUtilisateur()->getId()]);
}

#[Route('/ventes/commande/{id}/facture', name: 'app_commande_facture')]
public function envoyerFacture(int $id, EntityManagerInterface $em): Response
{
    $commande = $em->getRepository(Commande::class)->find($id);

    if (!$commande) {
        throw $this->createNotFoundException('Commande introuvable');
    }

    // TODO : Génération/envoi de la facture (PDF + email)
    $this->addFlash('info', 'La facture a été envoyée par email.');

    return $this->redirectToRoute('app_client_infos', ['id' => $commande->getClient()->getId()]);
}

}
