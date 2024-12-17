<?php

namespace App\Entity;

use App\Repository\AnimalRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: AnimalRepository::class)]
class Animal
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column]
    private ?int $Identifiant = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $Nom = null;

    #[ORM\Column(type: Types::DATE_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $DateDeNaissance = null;

    #[ORM\Column(type: Types::DATE_MUTABLE)]
    private ?\DateTimeInterface $DateArriverZoo = null;

    #[ORM\Column(type: Types::DATE_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $DateDepart = null;

    #[ORM\Column]
    private ?bool $ZooProprio = null;

    #[ORM\Column(length: 255)]
    private ?string $Genre = null;

    #[ORM\Column(length: 255)]
    private ?string $Espece = null;

    #[ORM\Column(length: 20)]
    private ?string $Sexe = null;

    #[ORM\Column]
    private ?bool $Steril = null;

    #[ORM\Column]
    private ?bool $PeutEtreQuarantaine = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getIdentifiant(): ?int
    {
        return $this->Identifiant;
    }

    public function setIdentifiant(int $Identifiant): static
    {
        $this->Identifiant = $Identifiant;

        return $this;
    }

    public function getNom(): ?string
    {
        return $this->Nom;
    }

    public function setNom(?string $Nom): static
    {
        $this->Nom = $Nom;

        return $this;
    }

    public function getDateDeNaissance(): ?\DateTimeInterface
    {
        return $this->DateDeNaissance;
    }

    public function setDateDeNaissance(?\DateTimeInterface $DateDeNaissance): static
    {
        $this->DateDeNaissance = $DateDeNaissance;

        return $this;
    }

    public function getDateArriverZoo(): ?\DateTimeInterface
    {
        return $this->DateArriverZoo;
    }

    public function setDateArriverZoo(\DateTimeInterface $DateArriverZoo): static
    {
        $this->DateArriverZoo = $DateArriverZoo;

        return $this;
    }

    public function getDateDepart(): ?\DateTimeInterface
    {
        return $this->DateDepart;
    }

    public function setDateDepart(?\DateTimeInterface $DateDepart): static
    {
        $this->DateDepart = $DateDepart;

        return $this;
    }

    public function isZooProprio(): ?bool
    {
        return $this->ZooProprio;
    }

    public function setZooProprio(bool $ZooProprio): static
    {
        $this->ZooProprio = $ZooProprio;

        return $this;
    }

    public function getGenre(): ?string
    {
        return $this->Genre;
    }

    public function setGenre(string $Genre): static
    {
        $this->Genre = $Genre;

        return $this;
    }

    public function getEspece(): ?string
    {
        return $this->Espece;
    }

    public function setEspece(string $Espece): static
    {
        $this->Espece = $Espece;

        return $this;
    }

    public function getSexe(): ?string
    {
        return $this->Sexe;
    }

    public function setSexe(string $Sexe): static
    {
        $this->Sexe = $Sexe;

        return $this;
    }

    public function isSteril(): ?bool
    {
        return $this->Steril;
    }

    public function setSteril(bool $Steril): static
    {
        $this->Steril = $Steril;

        return $this;
    }

    public function isPeutEtreQuarantaine(): ?bool
    {
        return $this->PeutEtreQuarantaine;
    }

    public function setPeutEtreQuarantaine(bool $PeutEtreQuarantaine): static
    {
        $this->PeutEtreQuarantaine = $PeutEtreQuarantaine;

        return $this;
    }
}
