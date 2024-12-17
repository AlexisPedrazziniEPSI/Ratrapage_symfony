<?php

namespace App\Entity;

use App\Repository\EnclosRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: EnclosRepository::class)]
class Enclos
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $Nom = null;

    #[ORM\Column]
    private ?int $Superficie = null;

    #[ORM\Column]
    private ?int $NbMaxAnimaux = null;

    #[ORM\Column]
    private ?bool $PeutEtreStatusQuarantaine = null;

    public function getId(): ?int
    {
        return $this->id;
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

    public function getSuperficie(): ?int
    {
        return $this->Superficie;
    }

    public function setSuperficie(int $Superficie): static
    {
        $this->Superficie = $Superficie;

        return $this;
    }

    public function getNbMaxAnimaux(): ?int
    {
        return $this->NbMaxAnimaux;
    }

    public function setNbMaxAnimaux(int $NbMaxAnimaux): static
    {
        $this->NbMaxAnimaux = $NbMaxAnimaux;

        return $this;
    }

    public function isPeutEtreStatusQuarantaine(): ?bool
    {
        return $this->PeutEtreStatusQuarantaine;
    }

    public function setPeutEtreStatusQuarantaine(bool $PeutEtreStatusQuarantaine): static
    {
        $this->PeutEtreStatusQuarantaine = $PeutEtreStatusQuarantaine;

        return $this;
    }
}
