<?php

namespace App\Entity;

use App\Repository\DirigeantRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=DirigeantRepository::class)
 */
class Dirigeant
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $nomDirigeant;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $sexeDirigeant;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $mailDirigeant;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNomDirigeant(): ?string
    {
        return $this->nomDirigeant;
    }

    public function setNomDirigeant(string $nomDirigeant): self
    {
        $this->nomDirigeant = $nomDirigeant;

        return $this;
    }

    public function getSexeDirigeant(): ?string
    {
        return $this->sexeDirigeant;
    }

    public function setSexeDirigeant(?string $sexeDirigeant): self
    {
        $this->sexeDirigeant = $sexeDirigeant;

        return $this;
    }

    public function getMailDirigeant(): ?string
    {
        return $this->mailDirigeant;
    }

    public function setMailDirigeant(?string $mailDirigeant): self
    {
        $this->mailDirigeant = $mailDirigeant;

        return $this;
    }
}
