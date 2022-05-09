<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
/**
 * Equipementlouer
 * @ORM\Table(name="equipementlouer")
 * @ORM\Entity
 */
class Equipementlouer
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
     * @Assert\NotBlank(message="le champs ne doit pas etre vide")
     * @ORM\Column(name="nomEquipement", type="string", length=200, nullable=true)
     */
    private $nomequipement;

    /**
     * @var string|null
     *@Assert\NotBlank(message="le champs ne doit pas etre vide")
     * @ORM\Column(name="prixEquipement", type="string", length=200, nullable=true)
     */
    private $prixequipement;

    /**
     * @var string|null
     *@Assert\NotBlank(message="le champs ne doit pas etre vide")
     * @ORM\Column(name="descriptionEquipement", type="string", length=200, nullable=true)
     */
    private $descriptionequipement;

    /**
     * @var string|null
     *
     * @ORM\Column(name="imageEquipement", type="string", length=200, nullable=true)
     */
    private $imageequipement;

    /**
     * @var int
     *@Assert\NotBlank(message="le champs ne doit pas etre vide")
     * @ORM\Column(name="idFournisseur", type="integer", nullable=false)
     */
    private $idfournisseur;

    /**
     * @var int
     *@Assert\NotBlank(message="le champs ne doit pas etre vide")
     * @ORM\Column(name="disponibilite", type="integer", nullable=false, options={"default"="1"})
     */
    private $disponibilite = 1;

    /**
     * @var int|null
     *@Assert\NotBlank(message="le champs ne doit pas etre vide")
     * @ORM\Column(name="rating", type="integer", nullable=true)
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

    public function getIdfournisseur(): ?int
    {
        return $this->idfournisseur;
    }

    public function setIdfournisseur(int $idfournisseur): self
    {
        $this->idfournisseur = $idfournisseur;

        return $this;
    }

    public function getDisponibilite(): ?int
    {
        return $this->disponibilite;
    }

    public function setDisponibilite(int $disponibilite): self
    {
        $this->disponibilite = $disponibilite;

        return $this;
    }

    public function getRating(): ?int
    {
        return $this->rating;
    }

    public function setRating(?int $rating): self
    {
        $this->rating = $rating;

        return $this;
    }


}
