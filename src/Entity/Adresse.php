<?php

namespace App\Entity;

use App\Repository\AdresseRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

#[ORM\Entity(repositoryClass: AdresseRepository::class)]
class Adresse
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $adresse = null;

    #[ORM\Column(length: 255)]
    private ?string $ville = null;

    #[ORM\Column(length: 5)]
    #[Assert\Regex('/^[0-9]{5}$/')]
    private ?string $codePostal = null;

    /**
     * @var Collection<int, AdresseCommande>
     */
    #[ORM\OneToMany(targetEntity: AdresseCommande::class, mappedBy: 'adresse')]
    private Collection $adressesCommande;

    #[ORM\ManyToOne(inversedBy: 'adresses')]
    private ?Utilisateur $utilisateur = null;

    public function __construct()
    {
        $this->adressesCommande = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getAdresse(): ?string
    {
        return $this->adresse;
    }

    public function setAdresse(string $adresse): static
    {
        $this->adresse = $adresse;

        return $this;
    }

    public function getVille(): ?string
    {
        return $this->ville;
    }

    public function setVille(string $ville): static
    {
        $this->ville = $ville;

        return $this;
    }

    public function getCodePostal(): ?string
    {
        return $this->codePostal;
    }

    public function setCodePostal(string $codePostal): static
    {
        $this->codePostal = $codePostal;

        return $this;
    }

    /**
     * @return Collection<int, AdresseCommande>
     */
    public function getAdressesCommande(): Collection
    {
        return $this->adressesCommande;
    }

    public function addAdressesCommande(AdresseCommande $adressesCommande): static
    {
        if (!$this->adressesCommande->contains($adressesCommande)) {
            $this->adressesCommande->add($adressesCommande);
            $adressesCommande->setAdresse($this);
        }

        return $this;
    }

    public function removeAdressesCommande(AdresseCommande $adressesCommande): static
    {
        if ($this->adressesCommande->removeElement($adressesCommande)) {
            // set the owning side to null (unless already changed)
            if ($adressesCommande->getAdresse() === $this) {
                $adressesCommande->setAdresse(null);
            }
        }

        return $this;
    }

    public function getUtilisateur(): ?Utilisateur
    {
        return $this->utilisateur;
    }

    public function setUtilisateur(?Utilisateur $utilisateur): static
    {
        $this->utilisateur = $utilisateur;

        return $this;
    }
}
