<?php

namespace App\Controller;

use App\Repository\ProduitRepository;
use App\Repository\RubriqueRepository;
use App\Repository\SousRubriqueRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class RechercheController extends AbstractController
{
    #[Route('/recherche', name: 'app_recherche')]
    public function index(
        Request $request,
        ProduitRepository $produitRepo,
        RubriqueRepository $rubriqueRepo,
        SousRubriqueRepository $sousRubriqueRepo
    ): Response {
        $q = trim($request->query->get('recherche', ''));

        $produits = [];
        $rubriques = [];
        $sousRubriques = [];

        if ($q !== '') {
            $produits = $produitRepo->createQueryBuilder('p')
                ->where('p.nom LIKE :recherche OR p.description LIKE :recherche')
                ->setParameter('recherche', "%$q%")
                ->getQuery()
                ->getResult();

            $rubriques = $rubriqueRepo->createQueryBuilder('r')
                ->where('r.nom LIKE :recherche')
                ->setParameter('recherche', "%$q%")
                ->getQuery()
                ->getResult();

            $sousRubriques = $sousRubriqueRepo->createQueryBuilder('s')
                ->where('s.nom LIKE :recherche')
                ->setParameter('recherche', "%$q%")
                ->getQuery()
                ->getResult();
        }

        return $this->render('recherche/index.html.twig', [
            'query' => $q,
            'produits' => $produits,
            'rubriques' => $rubriques,
            'sousRubriques' => $sousRubriques,
        ]);
    }
}
