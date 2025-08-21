<?php

namespace App\Controller;

use App\Entity\AdresseCommande;
use App\Entity\Commande;
use App\Entity\CommandeProduit;
use App\Entity\Produit;
use App\Repository\ProduitRepository;
use App\Service\Panier;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Component\Routing\Attribute\Route;

final class PanierController extends AbstractController
{
    #[Route('/panier', name: 'app_panier')]
    public function index(Panier $panier, ProduitRepository $repository): Response
    {
        $panier_complet = [];
        foreach ($panier->liste() as $id => $quantite) {
            $produit = $repository->find($id);
            $panier_complet[] = ['produit' => $produit, 'quantite' => $quantite];
        }

        return $this->render('panier/index.html.twig', ['panier' => $panier_complet]);
    }

    #[Route('/panier/add/{produit}', name: 'app_panier_add', methods: ['POST'])]
    public function add(Panier $panier, Produit $produit, Request $request): Response
    {
        $quantite = (int) $request->request->get('quantity', 1);
        $panier->add($produit->getId(), $quantite);

        return $this->redirectToRoute('app_panier');
    }

    #[Route('/panier/update/{id}', name: 'app_panier_update', methods: ['POST'])]
    public function updatePanier(int $id, Request $request, SessionInterface $session): Response
    {
        $quantity = (int) $request->request->get('quantity');
        $panier = $session->get('panier', []);

        if ($quantity >= 1) {
            $panier[$id] = $quantity;
        }

        $session->set('panier', $panier);

        return $this->redirectToRoute('app_panier');
    }


    #[Route('/panier/delete/{produit}', name: 'app_panier_delete')]
    public function del(Panier $panier, Produit $produit): Response
    {
        $panier->del($produit->getId());

        return $this->redirectToRoute('app_panier');
    }

    #[Route('/commande/confirmation/{id}', name: 'app_commande_confirmation')]
public function confirmation(Commande $commande): Response
{
    return $this->render('panier/confirmation.html.twig', [
        'commande' => $commande,
    ]);
}


#[Route('/panier/valider', name: 'app_commande_valider', methods: ['POST'])]
public function validerCommande(
    Request $request,
    Panier $panier,
    ProduitRepository $produitRepository,
    SessionInterface $session,
    EntityManagerInterface $em
): Response {
    $user = $this->getUser();
    if (!$user) {
        return $this->redirectToRoute('app_login');
    }

    // 1) Créer la commande (sans numéro ni ref paiement)
    $commande = new Commande();
    $commande->setDate(new \DateTimeImmutable());
    $commande->setEtat('En cours');

    // Type de paiement en clair
    $paiementChoisi = $request->request->get('paiement', 'cb');
    switch ($paiementChoisi) {
        case 'cheque':
            $commande->setTypePaiement('Chèque');
            break;
        case 'virement':
            $commande->setTypePaiement('Virement');
            break;
        default:
            $commande->setTypePaiement('Carte Bancaire');
            break;
    }

    $commande->setStatutPaiement('En attente');
    $commande->setUtilisateur($user);

    $em->persist($commande);
    $em->flush(); // ⚡ flush pour générer l'ID

    // 2) Mettre à jour avec l’ID formaté
    $numero = 'CMD' . str_pad($commande->getId(), 3, '0', STR_PAD_LEFT);
    $commande->setNumero($numero);

    $referencePaiement = 'PAY' . str_pad($commande->getId(), 3, '0', STR_PAD_LEFT);
    $commande->setReferencePaiement($referencePaiement);

    // 3) Ajouter les produits du panier
    foreach ($panier->liste() as $id => $quantite) {
        $produit = $produitRepository->find($id);
        if ($produit) {
            $commandeProduit = new CommandeProduit();
            $commandeProduit->setCommande($commande);
            $commandeProduit->setProduit($produit);
            $commandeProduit->setQuantite($quantite);

            $em->persist($commandeProduit);
        }
    }

    // 4) Associer l’adresse
    $adresseId = (int) $request->request->get('adresse');
    if ($adresseId) {
        $adresse = $em->getRepository(\App\Entity\Adresse::class)->find($adresseId);
        if ($adresse) {
            $adresseCommande = new AdresseCommande();
            $adresseCommande->setCommande($commande);
            $adresseCommande->setAdresse($adresse);
            $adresseCommande->setTypeAdresse('livraison');

            $em->persist($adresseCommande);
        }
    }

    // 5) Flush final
    $em->flush();

    // 6) Vider le panier
    $session->set('panier', []);

    return $this->redirectToRoute('app_commande_confirmation', [
        'id' => $commande->getId()
    ]);
}

}
