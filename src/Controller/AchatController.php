<?php

namespace App\Controller;

use App\Entity\Produit;
use App\Entity\Rubrique;
use App\Entity\SousRubrique;
use App\Form\ProduitType;
use App\Form\RubriqueType;
use App\Form\SousRubriqueType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\Security\Http\Attribute\IsGranted;

#[IsGranted('ROLE_COMMERCIAL')]
final class AchatController extends AbstractController
{
    #[Route('/achat/rubrique/new', name: 'app_rubrique_new')]
    public function newRubrique(Request $request, EntityManagerInterface $em): Response
    {
        $rubrique = new Rubrique();

        $form = $this->createForm(RubriqueType::class, $rubrique)
            ->add('save', SubmitType::class, [
                'label' => "Ajouter la rubrique",
                'attr' => ['class' => 'btn-vert text-white mt-3']
            ]);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em->persist($rubrique);
            $em->flush();
            return $this->redirectToRoute('app_rubriques');
        }

        return $this->render('achat/new_rubrique.html.twig', [
            'form' => $form,
        ]);
    }


    #[Route('/achat/rubrique/{id}/edit', name: 'app_rubrique_edit')]
    public function editRubrique(int $id, Request $request, EntityManagerInterface $em): Response
    {
        $rubrique = $em->getRepository(Rubrique::class)->find($id);

        $form = $this->createForm(RubriqueType::class, $rubrique)
            ->add('save', SubmitType::class, [
                'label' => "Modifier la rubrique",
                'attr' => ['class' => 'btn-vert text-white mt-3']
            ]);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em->flush();
            $this->addFlash('success', 'Rubrique mise à jour.');
            return $this->redirectToRoute('app_rubriques');
        }

        return $this->render('achat/edit_rubrique.html.twig', [
            'form' => $form,
            'rubrique' => $rubrique
        ]);
    }

    #[Route('/achat/rubrique/{id}/delete', name: 'app_rubrique_delete', methods: ['POST'])]
    public function deleteRubrique(int $id, Request $request, EntityManagerInterface $em): Response
    {
        $rubrique = $em->getRepository(Rubrique::class)->find($id);

        // Protection CSRF
        if ($this->isCsrfTokenValid('delete' . $rubrique->getId(), $request->request->get('_token'))) {
            $em->remove($rubrique);
            $em->flush();
            $this->addFlash('success', 'Rubrique supprimée.');
        }

        return $this->redirectToRoute('app_rubriques');
    }

    #[Route('/achat/sous_rubrique/new', name: 'app_sous_rubrique_new')]
    public function newSousRubrique(Request $request, EntityManagerInterface $em): Response
    {
        $sousRubrique = new SousRubrique();

        $form = $this->createForm(SousRubriqueType::class, $sousRubrique)
            ->add('save', SubmitType::class, [
                'label' => "Ajouter la sous rubrique",
                'attr' => ['class' => 'btn-vert text-white mt-3']
            ]);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em->persist($sousRubrique);
            $em->flush();
            return $this->redirectToRoute('app_sous_rubriques');
        }

        return $this->render('achat/new_sous_rubrique.html.twig', [
            'form' => $form,
        ]);
    }


    #[Route('/achat/sous_rubrique/{id}/edit', name: 'app_sous_rubrique_edit')]
    public function editSousRubrique(int $id, Request $request, EntityManagerInterface $em): Response
    {
        $sousRubrique = $em->getRepository(SousRubrique::class)->find($id);

        $form = $this->createForm(SousRubriqueType::class, $sousRubrique)->add('save', SubmitType::class, [
            'label' => "Modifier la sous rubrique",
            'attr' => ['class' => 'btn-vert text-white mt-3']
        ]);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em->flush();
            $this->addFlash('success', 'Sous rubrique mise à jour.');
            return $this->redirectToRoute('app_sous_rubriques');
        }

        return $this->render('achat/edit_sous_rubrique.html.twig', [
            'form' => $form,
            'sousRubrique' => $sousRubrique
        ]);
    }

    #[Route('/achat/rubrique/{id}/delete', name: 'app_sous_rubrique_delete', methods: ['POST'])]
    public function deleteSousRubrique(int $id, Request $request, EntityManagerInterface $em): Response
    {
        $sousRubrique = $em->getRepository(SousRubrique::class)->find($id);

        // Protection CSRF
        if ($this->isCsrfTokenValid('delete' . $sousRubrique->getId(), $request->request->get('_token'))) {
            $em->remove($sousRubrique);
            $em->flush();
            $this->addFlash('success', 'Sous rubrique supprimée.');
        }

        return $this->redirectToRoute('app_sous_rubriques');
    }

    #[Route('/achat/produit/new', name: 'app_produit_new')]
    public function newProduit(Request $request, EntityManagerInterface $em): Response
    {
        $produit = new Produit();

        $form = $this->createForm(ProduitType::class, $produit)->add('save', SubmitType::class, [
            'label' => "Ajouter le produit",
            'attr' => ['class' => 'btn-vert text-white mt-3']
        ]);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em->persist($produit);
            $em->flush();
            return $this->redirectToRoute('app_produits');
        }

        return $this->render('achat/new_produit.html.twig', [
            'form' => $form,
        ]);
    }


    #[Route('/achat/produit/{id}/edit', name: 'app_produit_edit')]
    public function editProduit(int $id, Request $request, EntityManagerInterface $em): Response
    {
        $produit = $em->getRepository(Produit::class)->find($id);

        $form = $this->createForm(ProduitType::class, $produit)->add('save', SubmitType::class, [
            'label' => "Modifier la rubrique",
            'attr' => ['class' => 'btn-vert text-white mt-3']
        ]);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em->flush();
            $this->addFlash('success', 'Produit mis à jour.');
            return $this->redirectToRoute('app_produits');
        }

        return $this->render('achat/edit_produit.html.twig', [
            'form' => $form,
            'produit' => $produit
        ]);
    }

    #[Route('/achat/produit/{id}/delete', name: 'app_produit_delete', methods: ['POST'])]
    public function deleteProduit(int $id, Request $request, EntityManagerInterface $em): Response
    {
        $produit = $em->getRepository(Produit::class)->find($id);

        // Protection CSRF
        if ($this->isCsrfTokenValid('delete' . $produit->getId(), $request->request->get('_token'))) {
            $em->remove($produit);
            $em->flush();
            $this->addFlash('success', 'Produit supprimé.');
        }

        return $this->redirectToRoute('app_produits');
    }
}
