<?php

namespace App\Entity;

use App\Repository\RevenuRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: RevenuRepository::class)]
class Revenu
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(type: Types::DATE_MUTABLE)]
    private ?\DateTimeInterface $dateRevenu = null;

    #[ORM\Column(type: Types::DECIMAL, precision: 10, scale: 2)]
    private ?string $montant = null;

    #[ORM\Column(type: Types::DECIMAL, precision: 10, scale: 2)]
    private ?string $economie = null;

    #[ORM\ManyToOne(inversedBy: 'revenus')]
    // Remettre à true une fois l'user mis en place
    #[ORM\JoinColumn(nullable: true)]
    private ?User $revenuUser = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDateRevenu(): ?\DateTimeInterface
    {
        return $this->dateRevenu;
    }

    public function setDateRevenu(\DateTimeInterface $dateRevenu): static
    {
        $this->dateRevenu = $dateRevenu;

        return $this;
    }

    public function getMontant(): ?string
    {
        return $this->montant;
    }

    public function setMontant(string $montant): static
    {
        $this->montant = $montant;

        return $this;
    }

    public function getEconomie(): ?string
    {
        return $this->economie;
    }

    public function setEconomie(string $economie): static
    {
        $this->economie = $economie;

        return $this;
    }

    public function getRevenuUser(): ?User
    {
        return $this->revenuUser;
    }

    public function setRevenuUser(?User $revenuUser): static
    {
        $this->revenuUser = $revenuUser;

        return $this;
    }
}
