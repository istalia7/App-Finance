<?php

namespace App\Entity;

use App\Repository\NecessiteRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: NecessiteRepository::class)]
class Necessite
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column]
    private ?bool $necessaire = null;

    /**
     * @var Collection<int, Depense>
     */
    #[ORM\OneToMany(targetEntity: Depense::class, mappedBy: 'necessite')]
    private Collection $depenseNecessite;

    #[ORM\Column(length: 255)]
    private ?string $description = null;

    public function __construct()
    {
        $this->depenseNecessite = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function isNecessaire(): ?bool
    {
        return $this->necessaire;
    }

    public function setNecessaire(bool $necessaire): static
    {
        $this->necessaire = $necessaire;

        return $this;
    }

    /**
     * @return Collection<int, Depense>
     */
    public function getDepenseNecessite(): Collection
    {
        return $this->depenseNecessite;
    }

    public function addDepenseNecessite(Depense $depenseNecessite): static
    {
        if (!$this->depenseNecessite->contains($depenseNecessite)) {
            $this->depenseNecessite->add($depenseNecessite);
            $depenseNecessite->setNecessite($this);
        }

        return $this;
    }

    public function removeDepenseNecessite(Depense $depenseNecessite): static
    {
        if ($this->depenseNecessite->removeElement($depenseNecessite)) {
            // set the owning side to null (unless already changed)
            if ($depenseNecessite->getNecessite() === $this) {
                $depenseNecessite->setNecessite(null);
            }
        }

        return $this;
    }

    public function __toString()
    {
        return $this->necessaire ? "Nécessaire" : "Non nécessaire";
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
}
