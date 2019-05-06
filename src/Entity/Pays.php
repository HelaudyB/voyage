<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\PaysRepository")
 */
class Pays
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=100)
     */
    private $nom;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $drapeau;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Destination", inversedBy="cityfk")
     * @ORM\JoinColumn(nullable=false)
     */
    private $name;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNom(): ?string
    {
        return $this->nom;
    }

    public function setNom(string $nom): self
    {
        $this->nom = $nom;

        return $this;
    }

    public function getDrapeau(): ?string
    {
        return $this->drapeau;
    }

    public function setDrapeau(string $drapeau): self
    {
        $this->drapeau = $drapeau;

        return $this;
    }

    public function getName(): ?Destination
    {
        return $this->name;
    }

    public function setName(?Destination $name): self
    {
        $this->name = $name;

        return $this;
    }
}
