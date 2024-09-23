<?php

namespace App\Entity;

use App\Repository\DepenseRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: DepenseRepository::class)]
class Depense
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(type: Types::DATE_MUTABLE)]
    private ?\DateTimeInterface $date = null;

    #[ORM\Column(length: 255)]
    private ?string $motif = null;

    #[ORM\Column(type: Types::DECIMAL, precision: 10, scale: 2)]
    private ?string $montant = null;

    #[ORM\ManyToOne(inversedBy: 'depenses')]
    // Remettre à true une fois l'user mis en place
    #[ORM\JoinColumn(nullable: true)]
    private ?User $depenseUser = null;

    #[ORM\ManyToOne(inversedBy: 'depenseNecessite')]
    #[ORM\JoinColumn(nullable: false)]
    private ?Necessite $necessite = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDate(): ?\DateTimeInterface
    {
        return $this->date;
    }

    public function setDate(\DateTimeInterface $date): static
    {
        $this->date = $date;

        return $this;
    }

    public function getMotif(): ?string
    {
        return $this->motif;
    }

    public function setMotif(string $motif): static
    {
        $this->motif = $motif;

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

    public function getDepenseUser(): ?User
    {
        return $this->depenseUser;
    }

    public function setDepenseUser(?User $depenseUser): static
    {
        $this->depenseUser = $depenseUser;

        return $this;
    }

    public function getNecessite(): ?Necessite
    {
        return $this->necessite;
    }

    public function setNecessite(?Necessite $necessite): static
    {
        $this->necessite = $necessite;

        return $this;
    }
}
