<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Louer
 *
 * @ORM\Table(name="louer")
 * @ORM\Entity
 */
class Louer
{
    /**
     * @var int
     *
     * @ORM\Column(name="idLouer", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idlouer;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="dateEmprunt", type="date", nullable=true)
     */
    private $dateemprunt;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="dateRemise", type="date", nullable=true)
     */
    private $dateremise;

    /**
     * @var int
     *
     * @ORM\Column(name="idEquipement", type="integer")
     */
    private $idequipement;

    /**
     * @var \int
     * @ORM\Column(name="idclient", type="integer")
     */
    private $idclient;

    public function getIdlouer(): ?int
    {
        return $this->idlouer;
    }

    public function getDateemprunt(): ?\DateTimeInterface
    {
        return $this->dateemprunt;
    }

    public function setDateemprunt(?\DateTimeInterface $dateemprunt): self
    {
        $this->dateemprunt = $dateemprunt;

        return $this;
    }

    public function getDateremise(): ?\DateTimeInterface
    {
        return $this->dateremise;
    }

    public function setDateremise(?\DateTimeInterface $dateremise): self
    {
        $this->dateremise = $dateremise;

        return $this;
    }

    public function getIdequipement(): ?int
    {
        return $this->idequipement;
    }

    public function setIdequipement(?int $idequipement): self
    {
        $this->idequipement = $idequipement;

        return $this;
    }

    public function getIdclient(): ?int
    {
        return $this->idclient;
    }

    public function setIdclient(?int $idclient): self
    {
        $this->idclient = $idclient;

        return $this;
    }


}
