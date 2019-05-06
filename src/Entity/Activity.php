<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\ActivityRepository")
 */
class Activity
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\destination", mappedBy="type")
     */
    private $destination;

    public function __construct()
    {
        $this->destination = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * @return Collection|destination[]
     */
    public function getDestination(): Collection
    {
        return $this->destination;
    }

    public function addDestination(destination $destination): self
    {
        if (!$this->destination->contains($destination)) {
            $this->destination[] = $destination;
            $destination->setType($this);
        }

        return $this;
    }

    public function removeDestination(destination $destination): self
    {
        if ($this->destination->contains($destination)) {
            $this->destination->removeElement($destination);
            // set the owning side to null (unless already changed)
            if ($destination->getType() === $this) {
                $destination->setType(null);
            }
        }

        return $this;
    }
}
