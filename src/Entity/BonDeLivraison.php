<?php

namespace App\Entity;

use App\Repository\BonDeLivraisonRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

#[ORM\Entity(repositoryClass: BonDeLivraisonRepository::class)]
class BonDeLivraison
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    #[Assert\Regex('/^BL\d{3}$/')]
    private ?string $numero = null;

    #[ORM\Column(length: 255)]
    #[Assert\Choice(["En cours d'expédition", 'En préparation', 'Livré', 'Préparé', 'En attente', 'Annulé'])]
    private ?string $statut = null;

    /**
     * @var Collection<int, LivraisonProduit>
     */
    #[ORM\OneToMany(targetEntity: LivraisonProduit::class, mappedBy: 'bonLivraison')]
    private Collection $livraisonsProduit;

    /**
     * @var Collection<int, AdresseCommande>
     */
    #[ORM\OneToMany(targetEntity: AdresseCommande::class, mappedBy: 'bonLivraison')]
    private Collection $bonsAdresseCommande;

    public function __construct()
    {
        $this->livraisonsProduit = new ArrayCollection();
        $this->bonsAdresseCommande = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNumero(): ?string
    {
        return $this->numero;
    }

    public function setNumero(string $numero): static
    {
        $this->numero = $numero;

        return $this;
    }

    public function getStatut(): ?string
    {
        return $this->statut;
    }

    public function setStatut(string $statut): static
    {
        $this->statut = $statut;

        return $this;
    }

    /**
     * @return Collection<int, LivraisonProduit>
     */
    public function getLivraisonsProduit(): Collection
    {
        return $this->livraisonsProduit;
    }

    public function addLivraisonsProduit(LivraisonProduit $livraisonsProduit): static
    {
        if (!$this->livraisonsProduit->contains($livraisonsProduit)) {
            $this->livraisonsProduit->add($livraisonsProduit);
            $livraisonsProduit->setBonLivraison($this);
        }

        return $this;
    }

    public function removeLivraisonsProduit(LivraisonProduit $livraisonsProduit): static
    {
        if ($this->livraisonsProduit->removeElement($livraisonsProduit)) {
            // set the owning side to null (unless already changed)
            if ($livraisonsProduit->getBonLivraison() === $this) {
                $livraisonsProduit->setBonLivraison(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, AdresseCommande>
     */
    public function getBonsAdresseCommande(): Collection
    {
        return $this->bonsAdresseCommande;
    }

    public function addBonsAdresseCommande(AdresseCommande $bonsAdresseCommande): static
    {
        if (!$this->bonsAdresseCommande->contains($bonsAdresseCommande)) {
            $this->bonsAdresseCommande->add($bonsAdresseCommande);
            $bonsAdresseCommande->setBonLivraison($this);
        }

        return $this;
    }

    public function removeBonsAdresseCommande(AdresseCommande $bonsAdresseCommande): static
    {
        if ($this->bonsAdresseCommande->removeElement($bonsAdresseCommande)) {
            // set the owning side to null (unless already changed)
            if ($bonsAdresseCommande->getBonLivraison() === $this) {
                $bonsAdresseCommande->setBonLivraison(null);
            }
        }

        return $this;
    }
}
