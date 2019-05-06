<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\DestinationRepository")
 */
class Destination
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $city;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $activity;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $pays;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\pays", mappedBy="name")
     */
    private $cityfk;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Activity", inversedBy="destination")
     * @ORM\JoinColumn(nullable=false)
     */
    private $type;

    public function __construct()
    {
        $this->cityfk = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getCity(): ?string
    {
        return $this->city;
    }

    public function setCity(string $city): self
    {
        $this->city = $city;

        return $this;
    }

    public function getActivity(): ?string
    {
        return $this->activity;
    }

    public function setActivity(string $activity): self
    {
        $this->activity = $activity;

        return $this;
    }

    public function getPays(): ?string
    {
        return $this->pays;
    }

    public function setPays(string $pays): self
    {
        $this->pays = $pays;

        return $this;
    }

    /**
     * @return Collection|pays[]
     */
    public function getCityfk(): Collection
    {
        return $this->cityfk;
    }

    public function addCityfk(pays $cityfk): self
    {
        if (!$this->cityfk->contains($cityfk)) {
            $this->cityfk[] = $cityfk;
            $cityfk->setName($this);
        }

        return $this;
    }

    public function removeCityfk(pays $cityfk): self
    {
        if ($this->cityfk->contains($cityfk)) {
            $this->cityfk->removeElement($cityfk);
            // set the owning side to null (unless already changed)
            if ($cityfk->getName() === $this) {
                $cityfk->setName(null);
            }
        }

        return $this;
    }

    public function getType(): ?Activity
    {
        return $this->type;
    }

    public function setType(?Activity $type): self
    {
        $this->type = $type;

        return $this;
    }

}
