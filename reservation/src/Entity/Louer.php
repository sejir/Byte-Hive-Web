<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Louer
 *
 * @ORM\Table(name="louer", indexes={@ORM\Index(name="FK", columns={"idEquipement"}), @ORM\Index(name="FK_PersonOrder", columns={"idClient"})})
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
     * @var \Equipementlouer
     *
     * @ORM\ManyToOne(targetEntity="Equipementlouer")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idEquipement", referencedColumnName="idEquipement")
     * })
     */
    private $idequipement;

    /**
     * @var \Users
     *
     * @ORM\ManyToOne(targetEntity="Users")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idClient", referencedColumnName="id")
     * })
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

    public function getIdequipement(): ?Equipementlouer
    {
        return $this->idequipement;
    }

    public function setIdequipement(?Equipementlouer $idequipement): self
    {
        $this->idequipement = $idequipement;

        return $this;
    }

    public function getIdclient(): ?Users
    {
        return $this->idclient;
    }

    public function setIdclient(?Users $idclient): self
    {
        $this->idclient = $idclient;

        return $this;
    }


}
