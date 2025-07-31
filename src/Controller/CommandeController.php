<?php

namespace App\Controller;

use App\Repository\CommandeRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\Security\Http\Attribute\IsGranted;

final class CommandeController extends AbstractController
{
    #[IsGranted('ROLE_USER')]
    #[Route('commande', name: 'app_commande')]
    public function commandes(CommandeRepository $repo): Response
    {
        $utilisateur = $this->getUser();
        $commandes = $repo->findBy(['utilisateur' => $utilisateur]);
        return $this->render('commande/index.html.twig', [
            'commandes' => $commandes
        ]);
    }
}
