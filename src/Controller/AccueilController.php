<?php

namespace App\Controller;

use App\Repository\FournisseurRepository;
use App\Repository\ProduitRepository;
use App\Repository\RubriqueRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class AccueilController extends AbstractController
{
    #[Route('/', name: 'app_accueil')]
    public function index(RubriqueRepository $rubriqueRepo, ProduitRepository $produitRepo, FournisseurRepository $fournisseurRepo): Response
    {
        $rubriques = $rubriqueRepo->find6Rubriques();
        $produitsVedettes = $produitRepo->find5ProduitsRandom();
        $fournisseursObj = $fournisseurRepo->find5FournisseursWithProduitsRandom();

        $fournisseurs = [];

        foreach ($fournisseursObj as $fournisseurArray) {
            $fournisseur = $fournisseurRepo->find($fournisseurArray['id']); // récupérer l'entité complète
            $produitsFournisseur = $produitRepo->findBy(['fournisseur' => $fournisseur->getId()]);

            $fournisseurs[] = [
                'fournisseur' => $fournisseur,
                'produits' => $produitsFournisseur
            ];
        }


        return $this->render('accueil/index.html.twig', [
            'rubriques' => $rubriques,
            'produits' => $produitsVedettes,
            'fournisseurs' => $fournisseurs
        ]);
    }
}
