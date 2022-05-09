<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Vendre
 *
 * @ORM\Table(name="vendre")
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
     * @var \int
     *
     *
     * @ORM\Column(name="idclient", type="integer")
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
