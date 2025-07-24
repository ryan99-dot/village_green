<?php

namespace App\Controller;

use App\Entity\Produit;
use App\Repository\ProduitRepository;
use App\Service\Panier;
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
}
