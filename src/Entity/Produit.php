<?php

namespace App\Entity;

use App\Repository\ProduitRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use ApiPlatform\Metadata\ApiResource;

#[ORM\Entity(repositoryClass: ProduitRepository::class)]
#[ApiResource()]
class Produit
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    #[Assert\Regex('/^PROD\d{3}$/')]
    private ?string $reference = null;

    #[ORM\Column(length: 255)]
    private ?string $nom = null;

    #[ORM\Column(type: Types::TEXT)]
    private ?string $description = null;

    #[ORM\Column]
    private ?float $prix = null;

    #[ORM\Column(length: 255)]
    private ?string $photo = null;

    #[ORM\Column]
    private ?int $stock = null;

    #[ORM\Column]
    private ?bool $publie = null;

    #[ORM\Column]
    private ?bool $actif = null;

    #[ORM\Column]
    private ?float $prixAchat = null;

    #[ORM\ManyToOne(inversedBy: 'produits')]
    private ?SousRubrique $sousRubrique = null;

    #[ORM\ManyToOne(inversedBy: 'produits')]
    private ?Fournisseur $fournisseur = null;

    /**
     * @var Collection<int, CommandeProduit>
     */
    #[ORM\OneToMany(targetEntity: CommandeProduit::class, mappedBy: 'produit')]
    private Collection $produitsCommande;

    /**
     * @var Collection<int, LivraisonProduit>
     */
    #[ORM\OneToMany(targetEntity: LivraisonProduit::class, mappedBy: 'produit')]
    private Collection $produitsLivraison;

    public function __construct()
    {
        $this->produitsCommande = new ArrayCollection();
        $this->produitsLivraison = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getReference(): ?string
    {
        return $this->reference;
    }

    public function setReference(string $reference): static
    {
        $this->reference = $reference;

        return $this;
    }

    public function getNom(): ?string
    {
        return $this->nom;
    }

    public function setNom(string $nom): static
    {
        $this->nom = $nom;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(string $description): static
    {
        $this->description = $description;

        return $this;
    }

    public function getPrix(): ?float
    {
        return $this->prix;
    }

    public function setPrix(float $prix): static
    {
        $this->prix = $prix;

        return $this;
    }

    public function getPhoto(): ?string
    {
        return $this->photo;
    }

    public function setPhoto(string $photo): static
    {
        $this->photo = $photo;

        return $this;
    }

    public function getStock(): ?int
    {
        return $this->stock;
    }

    public function setStock(int $stock): static
    {
        $this->stock = $stock;

        return $this;
    }

    public function isPublie(): ?bool
    {
        return $this->publie;
    }

    public function setPublie(bool $publie): static
    {
        $this->publie = $publie;

        return $this;
    }

    public function isActif(): ?bool
    {
        return $this->actif;
    }

    public function setActif(bool $actif): static
    {
        $this->actif = $actif;

        return $this;
    }

    public function getPrixAchat(): ?float
    {
        return $this->prixAchat;
    }

    public function setPrixAchat(float $prixAchat): static
    {
        $this->prixAchat = $prixAchat;

        return $this;
    }

    public function getSousRubrique(): ?SousRubrique
    {
        return $this->sousRubrique;
    }

    public function setSousRubrique(?SousRubrique $sousRubrique): static
    {
        $this->sousRubrique = $sousRubrique;

        return $this;
    }

    public function getFournisseur(): ?Fournisseur
    {
        return $this->fournisseur;
    }

    public function setFournisseur(?Fournisseur $fournisseur): static
    {
        $this->fournisseur = $fournisseur;

        return $this;
    }

    /**
     * @return Collection<int, CommandeProduit>
     */
    public function getProduitsCommande(): Collection
    {
        return $this->produitsCommande;
    }

    public function addProduitsCommande(CommandeProduit $produitsCommande): static
    {
        if (!$this->produitsCommande->contains($produitsCommande)) {
            $this->produitsCommande->add($produitsCommande);
            $produitsCommande->setProduit($this);
        }

        return $this;
    }

    public function removeProduitsCommande(CommandeProduit $produitsCommande): static
    {
        if ($this->produitsCommande->removeElement($produitsCommande)) {
            // set the owning side to null (unless already changed)
            if ($produitsCommande->getProduit() === $this) {
                $produitsCommande->setProduit(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, LivraisonProduit>
     */
    public function getProduitsLivraison(): Collection
    {
        return $this->produitsLivraison;
    }

    public function addProduitsLivraison(LivraisonProduit $produitsLivraison): static
    {
        if (!$this->produitsLivraison->contains($produitsLivraison)) {
            $this->produitsLivraison->add($produitsLivraison);
            $produitsLivraison->setProduit($this);
        }

        return $this;
    }

    public function removeProduitsLivraison(LivraisonProduit $produitsLivraison): static
    {
        if ($this->produitsLivraison->removeElement($produitsLivraison)) {
            // set the owning side to null (unless already changed)
            if ($produitsLivraison->getProduit() === $this) {
                $produitsLivraison->setProduit(null);
            }
        }

        return $this;
    }
}
