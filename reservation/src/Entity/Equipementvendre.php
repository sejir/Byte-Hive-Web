<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Equipementvendre
 *
 * @ORM\Table(name="equipementvendre", indexes={@ORM\Index(name="FK", columns={"idFournisseur"})})
 * @ORM\Entity
 */
class Equipementvendre
{
    /**
     * @var int
     *
     * @ORM\Column(name="idEquipement", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idequipement;

    /**
     * @var string|null
     *
     * @ORM\Column(name="nomEquipement", type="string", length=255, nullable=true)
     */
    private $nomequipement;

    /**
     * @var string|null
     *
     * @ORM\Column(name="prixEquipement", type="string", length=255, nullable=true)
     */
    private $prixequipement;

    /**
     * @var string|null
     *
     * @ORM\Column(name="descriptionEquipement", type="string", length=255, nullable=true)
     */
    private $descriptionequipement;

    /**
     * @var string|null
     *
     * @ORM\Column(name="imageEquipement", type="string", length=255, nullable=true)
     */
    private $imageequipement;

    /**
     * @var string|null
     *
     * @ORM\Column(name="quantiteEquipement", type="string", length=255, nullable=true)
     */
    private $quantiteequipement;

    /**
     * @var int|null
     *
     * @ORM\Column(name="idFournisseur", type="integer", nullable=true)
     */
    private $idfournisseur;

    /**
     * @var float|null
     *
     * @ORM\Column(name="rating", type="float", precision=10, scale=0, nullable=true)
     */
    private $rating;

    public function getIdequipement(): ?int
    {
        return $this->idequipement;
    }

    public function getNomequipement(): ?string
    {
        return $this->nomequipement;
    }

    public function setNomequipement(?string $nomequipement): self
    {
        $this->nomequipement = $nomequipement;

        return $this;
    }

    public function getPrixequipement(): ?string
    {
        return $this->prixequipement;
    }

    public function setPrixequipement(?string $prixequipement): self
    {
        $this->prixequipement = $prixequipement;

        return $this;
    }

    public function getDescriptionequipement(): ?string
    {
        return $this->descriptionequipement;
    }

    public function setDescriptionequipement(?string $descriptionequipement): self
    {
        $this->descriptionequipement = $descriptionequipement;

        return $this;
    }

    public function getImageequipement(): ?string
    {
        return $this->imageequipement;
    }

    public function setImageequipement(?string $imageequipement): self
    {
        $this->imageequipement = $imageequipement;

        return $this;
    }

    public function getQuantiteequipement(): ?string
    {
        return $this->quantiteequipement;
    }

    public function setQuantiteequipement(?string $quantiteequipement): self
    {
        $this->quantiteequipement = $quantiteequipement;

        return $this;
    }

    public function getIdfournisseur(): ?int
    {
        return $this->idfournisseur;
    }

    public function setIdfournisseur(?int $idfournisseur): self
    {
        $this->idfournisseur = $idfournisseur;

        return $this;
    }

    public function getRating(): ?float
    {
        return $this->rating;
    }

    public function setRating(?float $rating): self
    {
        $this->rating = $rating;

        return $this;
    }


}
