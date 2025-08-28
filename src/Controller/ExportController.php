<?php

namespace App\Controller;

use App\Entity\Commande;
use App\Form\CommandeType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

final class ExportController extends AbstractController
{
    #[Route('/export', name: 'app_export')]
    public function index(EntityManagerInterface $em): Response
    {
        $commandes = $em->getRepository(Commande::class)->findAll();

        // On crée un formulaire par commande
        $forms = [];
        foreach ($commandes as $commande) {
            $forms[$commande->getId()] = $this->createForm(CommandeType::class, $commande, [
                'action' => $this->generateUrl('app_export_update', ['id' => $commande->getId()]),
                'method' => 'POST',
            ])->createView();
        }

        return $this->render('export/index.html.twig', [
            'commandes' => $commandes,
            'forms' => $forms,
        ]);
    }

    #[Route('/export/commande/{id}/etat', name: 'app_export_update', methods: ['POST'])]
    public function updateEtat(
        Request $request,
        Commande $commande,
        EntityManagerInterface $em
    ): Response {
        $form = $this->createForm(CommandeType::class, $commande);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em->flush();
            $this->addFlash('success', 'État de la commande mis à jour');
        }

        return $this->redirectToRoute('app_export');
    }
}
