<?php

namespace App\Controller;

use App\Repository\RubriqueRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class CatalogueController extends AbstractController
{
    #[Route('/categories', name: 'app_categories')]
    public function index(RubriqueRepository $repository): Response
    {
        $categories = $repository->findAll();
        return $this->render('catalogue/categories.html.twig', [
            'categories' => $categories
        ]);
    }

    #[Route('/sous_categories', name: 'app_sous_categories')]
    public function index1(): Response
    {
        return $this->render('catalogue/index.html.twig', [
            'controller_name' => 'CatalogueController',
        ]);
    }

    #[Route('/produits', name: 'app_produits')]
    public function index2(): Response
    {
        return $this->render('catalogue/index.html.twig', [
            'controller_name' => 'CatalogueController',
        ]);
    }
    
    #[Route('/article', name: 'app_article')]
    public function index3(): Response
    {
        return $this->render('catalogue/index.html.twig', [
            'controller_name' => 'CatalogueController',
        ]);
    }
}
