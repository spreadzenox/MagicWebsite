<?php

namespace App\Entity;

use App\Repository\CarteRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: CarteRepository::class)]
class Carte
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $Nom = null;

    #[ORM\ManyToOne(inversedBy: 'items')]
    private ?Paquet $paquet = null;

    #[ORM\ManyToOne(inversedBy: 'cartes')]
    #[ORM\JoinColumn(nullable: false)]
    private ?User $proprietaire = null;

    #[ORM\Column]
    private ?int $Attaque = null;

    #[ORM\Column]
    private ?int $defense = null;

    #[ORM\Column(length: 255)]
    private ?string $pouvoir = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNom(): ?string
    {
        return $this->Nom;
    }
    
    public function __toString() : string
    {
        return $this->Nom;
    }

    public function setNom(string $Nom): static
    {
        $this->Nom = $Nom;

        return $this;
    }

    public function getPaquet(): ?Paquet
    {   
        return $this->paquet;
        
    }

    public function setPaquet(?Paquet $paquet): static
    {
        $this->paquet = $paquet;

        return $this;
    }

    public function getProprietaire(): ?User
    {
        return $this->proprietaire;
    }

    public function setProprietaire(?User $proprietaire): static
    {
        $this->proprietaire = $proprietaire;

        return $this;
    }

    public function getAttaque(): ?int
    {
        return $this->Attaque;
    }

    public function setAttaque(int $Attaque): static
    {
        $this->Attaque = $Attaque;

        return $this;
    }

    public function getDefense(): ?int
    {
        return $this->defense;
    }

    public function setDefense(int $defense): static
    {
        $this->defense = $defense;

        return $this;
    }

    public function getPouvoir(): ?string
    {
        return $this->pouvoir;
    }

    public function setPouvoir(string $pouvoir): static
    {
        $this->pouvoir = $pouvoir;

        return $this;
    }
    
}
