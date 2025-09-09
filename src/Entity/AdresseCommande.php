<?php

namespace App\Entity;

use App\Repository\AdresseCommandeRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

#[ORM\Entity(repositoryClass: AdresseCommandeRepository::class)]
class AdresseCommande
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\ManyToOne(inversedBy: 'commandesAdresse')]
    private ?Commande $commande = null;

    #[ORM\ManyToOne(inversedBy: 'adressesCommande')]
    private ?Adresse $adresse = null;

    #[ORM\ManyToOne(inversedBy: 'bonsAdresseCommande')]
    private ?BonDeLivraison $bonLivraison = null;

    #[ORM\Column(length: 255, nullable: true)]
    #[Assert\Regex('/^FAC\d{3}$/')]
    private ?string $numeroFacture = null;

    #[ORM\Column(type: Types::DATE_IMMUTABLE, nullable: true)]
    private ?\DateTimeImmutable $date = null;

    #[ORM\Column(length: 255)]
    #[Assert\Choice(['Livraison', 'Facturation'])]
    private ?string $typeAdresse = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getCommande(): ?Commande
    {
        return $this->commande;
    }

    public function setCommande(?Commande $commande): static
    {
        $this->commande = $commande;

        return $this;
    }

    public function getAdresse(): ?Adresse
    {
        return $this->adresse;
    }

    public function setAdresse(?Adresse $adresse): static
    {
        $this->adresse = $adresse;

        return $this;
    }

    public function getBonLivraison(): ?BonDeLivraison
    {
        return $this->bonLivraison;
    }

    public function setBonLivraison(?BonDeLivraison $bonLivraison): static
    {
        $this->bonLivraison = $bonLivraison;

        return $this;
    }

    public function getNumeroFacture(): ?string
    {
        return $this->numeroFacture;
    }

    public function setNumeroFacture(?string $numeroFacture): static
    {
        $this->numeroFacture = $numeroFacture;

        return $this;
    }

    public function getDate(): ?\DateTimeImmutable
    {
        return $this->date;
    }

    public function setDate(?\DateTimeImmutable $date): static
    {
        $this->date = $date;

        return $this;
    }

    public function getTypeAdresse(): ?string
    {
        return $this->typeAdresse;
    }

    public function setTypeAdresse(string $typeAdresse): static
    {
        $this->typeAdresse = $typeAdresse;

        return $this;
    }
}
