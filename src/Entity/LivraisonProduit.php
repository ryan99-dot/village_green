<?php

namespace App\Entity;

use App\Repository\LivraisonProduitRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: LivraisonProduitRepository::class)]
class LivraisonProduit
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\ManyToOne(inversedBy: 'produitsLivraison')]
    private ?Produit $produit = null;

    #[ORM\ManyToOne(inversedBy: 'livraisonsProduit')]
    private ?BonDeLivraison $bonLivraison = null;

    #[ORM\Column]
    private ?int $quantite = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getProduit(): ?Produit
    {
        return $this->produit;
    }

    public function setProduit(?Produit $produit): static
    {
        $this->produit = $produit;

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

    public function getQuantite(): ?int
    {
        return $this->quantite;
    }

    public function setQuantite(int $quantite): static
    {
        $this->quantite = $quantite;

        return $this;
    }
}
