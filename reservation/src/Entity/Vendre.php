<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Vendre
 *
 * @ORM\Table(name="vendre", indexes={@ORM\Index(name="idClient", columns={"idClient"})})
 * @ORM\Entity
 */
class Vendre
{
    /**
     * @var int
     *
     * @ORM\Column(name="idEquipement", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $idequipement;

    /**
     * @var int
     *
     * @ORM\Column(name="prixEquipement", type="integer", nullable=false)
     */
    private $prixequipement;

    /**
     * @var \Users
     *
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     * @ORM\OneToOne(targetEntity="Users")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idClient", referencedColumnName="id")
     * })
     */
    private $idclient;

    public function getIdequipement(): ?int
    {
        return $this->idequipement;
    }

    public function getPrixequipement(): ?int
    {
        return $this->prixequipement;
    }

    public function setPrixequipement(int $prixequipement): self
    {
        $this->prixequipement = $prixequipement;

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
