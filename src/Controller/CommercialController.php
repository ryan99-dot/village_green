<?php

namespace App\Controller;

use App\Repository\CommandeRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class CommercialController extends AbstractController
{
    #[Route('/commercial/tableau', name: 'app_tableau')]
    public function tableau(Request $request, CommandeRepository $commandeRepo): Response
    {
        // On récupère l'année depuis l'URL : ?annee=2024
        // Si aucune année n'est fournie → année en cours
        $annee = $request->query->getInt('annee', (int) date('Y'));

        $caParMois = $commandeRepo->getChiffreAffairesParMois($annee);

        $moisNoms = [
            1 => 'Janvier',
            2 => 'Février',
            3 => 'Mars',
            4 => 'Avril',
            5 => 'Mai',
            6 => 'Juin',
            7 => 'Juillet',
            8 => 'Août',
            9 => 'Septembre',
            10 => 'Octobre',
            11 => 'Novembre',
            12 => 'Décembre'
        ];

        foreach ($caParMois as &$row) {
            $row['mois_nom'] = $moisNoms[(int)$row['mois']];
        }

        $caParFour = $commandeRepo->getChiffreAffairesParFournisseur($annee);
        $top10Quantite = $commandeRepo->getTop10Quantite($annee);
        $top10Marge = $commandeRepo->getTop10Marge($annee);
        $top10ClientsCommande = $commandeRepo->getTop10ClientsCommande($annee);
        $top10ClientsChiffre = $commandeRepo->getTop10ClientsChiffre($annee);
        $caTypeClient = $commandeRepo->getChiffreAffairesTypeClient($annee);
        $commandeEnLivraison = $commandeRepo->getNombreCommandesEnLivraison();

        return $this->render('commercial/tableau.html.twig', [
            'caParMois' => $caParMois,
            'caParFour' => $caParFour,
            'top10Quantite' => $top10Quantite,
            'top10Marge' => $top10Marge,
            'top10ClientsCommande' => $top10ClientsCommande,
            'top10ClientsChiffre' => $top10ClientsChiffre,
            'caTypeClient' => $caTypeClient,
            'commandeEnLivraison' => $commandeEnLivraison,
            'annee' => $annee,
        ]);
    }
}
