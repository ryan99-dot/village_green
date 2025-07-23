<?php

namespace App\Controller;

use App\Entity\Produit;
use App\Entity\Rubrique;
use App\Entity\SousRubrique;
use App\Repository\ProduitRepository;
use App\Repository\RubriqueRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class CatalogueController extends AbstractController
{
    #[Route('/rubriques', name: 'app_rubriques')]
    public function index(RubriqueRepository $repository): Response
    {
        $rubriques = $repository->findAll();
        return $this->render('catalogue/rubriques.html.twig', [
            'rubriques' => $rubriques
        ]);
    }

    #[Route('/rubrique/{rubrique}', name: 'app_sous_rubriques')]
    public function sousRubrique(Rubrique $rubrique): Response
    {
        return $this->render('catalogue/sousRubriques.html.twig', ['rubrique' => $rubrique]);
    }

    #[Route('/sousRubriques/{sousRubrique}', name: 'app_produits')]
    public function produits(SousRubrique $sousRubrique): Response
    {
        return $this->render('catalogue/produits.html.twig', [
            'sousRubrique' => $sousRubrique,
        ]);
    }

        #[Route('/produits', name: 'app_all_produits')]
    public function allProduit(ProduitRepository $repository): Response
    {
        $produits = $repository->findAll();
        return $this->render('catalogue/allProduits.html.twig', [
            'produits' => $produits
        ]);
    }

    #[Route('/produit/{produit}', name: 'app_produit')]
    public function produit(Produit $produit): Response
    {
        return $this->render('catalogue/produit.html.twig', [
            'produit' => $produit,
        ]);
    }
}
