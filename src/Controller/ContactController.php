<?php

namespace App\Controller;

use App\Form\ContactType;
use App\Entity\Utilisateur;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Mime\Email;

class ContactController extends AbstractController
{
    #[Route('/contact', name: 'app_contact')]
    public function index(Request $request, MailerInterface $mailer): Response
    {
        $user = $this->getUser();

        $defaultData = [];
        if ($user instanceof Utilisateur) {
            $defaultData = [
                'nom' => $user->getNom(),
                'prenom' => $user->getPrenom(),
                'email' => $user->getEmail(),
            ];
        }

        $form = $this->createForm(ContactType::class, $defaultData);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $data = $form->getData();

            // Envoi du mail
            $email = (new Email())
                ->from($data['email'])
                ->to('contact@villagegreen.fr') // destinataire
                ->subject('Nouveau message de contact')
                ->text(
                    "Nom : {$data['nom']}\n".
                    "Prénom : {$data['prenom']}\n".
                    "Email : {$data['email']}\n\n".
                    "Message :\n{$data['message']}"
                );

            $mailer->send($email);

            $this->addFlash('success', 'Votre message a bien été envoyé !');

            return $this->redirectToRoute('app_contact');
        }

        return $this->render('contact/index.html.twig', [
            'form' => $form->createView(),
        ]);
    }
}
