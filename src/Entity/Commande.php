<?php

namespace App\Entity;

use App\Repository\CommandeRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: CommandeRepository::class)]
class Commande
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $numero = null;

    #[ORM\Column]
    private ?\DateTimeImmutable $date = null;

    #[ORM\Column(length: 255)]
    private ?string $etat = null;

    #[ORM\Column(length: 255)]
    private ?string $referencePaiement = null;

    #[ORM\Column(length: 255)]
    private ?string $typePaiement = null;

    #[ORM\Column(length: 255)]
    private ?string $statutPaiement = null;

    #[ORM\Column(nullable: true)]
    private ?\DateTimeImmutable $datePaiement = null;

    #[ORM\ManyToOne(inversedBy: 'commandes')]
    private ?Utilisateur $utilisateur = null;

    /**
     * @var Collection<int, CommandeProduit>
     */
    #[ORM\OneToMany(targetEntity: CommandeProduit::class, mappedBy: 'commande')]
    private Collection $commandesProduit;

    /**
     * @var Collection<int, AdresseCommande>
     */
    #[ORM\OneToMany(targetEntity: AdresseCommande::class, mappedBy: 'commande')]
    private Collection $commandesAdresse;

    public function __construct()
    {
        $this->commandesProduit = new ArrayCollection();
        $this->commandesAdresse = new ArrayCollection();
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

    public function getDate(): ?\DateTimeImmutable
    {
        return $this->date;
    }

    public function setDate(\DateTimeImmutable $date): static
    {
        $this->date = $date;

        return $this;
    }

    public function getEtat(): ?string
    {
        return $this->etat;
    }

    public function setEtat(string $etat): static
    {
        $this->etat = $etat;

        return $this;
    }

    public function getReferencePaiement(): ?string
    {
        return $this->referencePaiement;
    }

    public function setReferencePaiement(string $referencePaiement): static
    {
        $this->referencePaiement = $referencePaiement;

        return $this;
    }

    public function getTypePaiement(): ?string
    {
        return $this->typePaiement;
    }

    public function setTypePaiement(string $typePaiement): static
    {
        $this->typePaiement = $typePaiement;

        return $this;
    }

    public function getStatutPaiement(): ?string
    {
        return $this->statutPaiement;
    }

    public function setStatutPaiement(string $statutPaiement): static
    {
        $this->statutPaiement = $statutPaiement;

        return $this;
    }

    public function getDatePaiement(): ?\DateTimeImmutable
    {
        return $this->datePaiement;
    }

    public function setDatePaiement(?\DateTimeImmutable $datePaiement): static
    {
        $this->datePaiement = $datePaiement;

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

    /**
     * @return Collection<int, CommandeProduit>
     */
    public function getCommandesProduit(): Collection
    {
        return $this->commandesProduit;
    }

    public function addCommandesProduit(CommandeProduit $commandesProduit): static
    {
        if (!$this->commandesProduit->contains($commandesProduit)) {
            $this->commandesProduit->add($commandesProduit);
            $commandesProduit->setCommande($this);
        }

        return $this;
    }

    public function removeCommandesProduit(CommandeProduit $commandesProduit): static
    {
        if ($this->commandesProduit->removeElement($commandesProduit)) {
            // set the owning side to null (unless already changed)
            if ($commandesProduit->getCommande() === $this) {
                $commandesProduit->setCommande(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, AdresseCommande>
     */
    public function getCommandesAdresse(): Collection
    {
        return $this->commandesAdresse;
    }

    public function addCommandesAdresse(AdresseCommande $commandesAdresse): static
    {
        if (!$this->commandesAdresse->contains($commandesAdresse)) {
            $this->commandesAdresse->add($commandesAdresse);
            $commandesAdresse->setCommande($this);
        }

        return $this;
    }

    public function removeCommandesAdresse(AdresseCommande $commandesAdresse): static
    {
        if ($this->commandesAdresse->removeElement($commandesAdresse)) {
            // set the owning side to null (unless already changed)
            if ($commandesAdresse->getCommande() === $this) {
                $commandesAdresse->setCommande(null);
            }
        }

        return $this;
    }
}
