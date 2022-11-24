<?php

namespace App\Entity;

use App\Repository\MagasinsRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=MagasinsRepository::class)
 */
class Magasins
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
    private $Nom;

    /**
     * @ORM\Column(type="string", length=255)
     */

    private $TypeProduitVendu;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Adresse;

    /**
     * @ORM\Column(type="string", length=2000, nullable=true)
     */
    private $Horaires;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Vendeur;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNom(): ?string
    {
        return $this->Nom;
    }

    public function setNom(string $Nom): self
    {
        $this->Nom = $Nom;

        return $this;
    }

    public function getTypeProduitVendu(): ?string
    {
        return $this->TypeProduitVendu;
    }

    public function setTypeProduitVendu(string $TypeProduitVendu): self
    {
        $this->TypeProduitVendu = $TypeProduitVendu;

        return $this;
    }

    public function getAdresse(): ?string
    {
        return $this->Adresse;
    }

    public function setAdresse(string $Adresse): self
    {
        $this->Adresse = $Adresse;

        return $this;
    }

    public function getHoraires(): ?string
    {
        return $this->Horaires;
    }

    public function setHoraires(?string $Horaires): self
    {
        $this->Horaires = $Horaires;

        return $this;
    }

    public function getVendeur(): ?string
    {
        return $this->Vendeur;
    }

    public function setVendeur(string $Vendeur): self
    {
        $this->Vendeur = $Vendeur;

        return $this;
    }
}
