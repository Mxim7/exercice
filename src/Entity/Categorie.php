<?php

namespace App\Entity;

use App\Repository\CategorieRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: CategorieRepository::class)]
class Categorie
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 50)]
    private ?string $nom_technologie = null;

    #[ORM\Column(length: 45, nullable: true)]
    private ?string $logo_technologie = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNomTechnologie(): ?string
    {
        return $this->nom_technologie;
    }

    public function setNomTechnologie(string $nom_technologie): self
    {
        $this->nom_technologie = $nom_technologie;

        return $this;
    }

    public function getLogoTechnologie(): ?string
    {
        return $this->logo_technologie;
    }

    public function setLogoTechnologie(?string $logo_technologie): self
    {
        $this->logo_technologie = $logo_technologie;

        return $this;
    }
}
