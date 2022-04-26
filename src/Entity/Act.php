<?php

namespace App\Entity;
use Symfony\Component\Validator\Constraints as Assert;
use Doctrine\ORM\Mapping as ORM;
use DateTime;
use DateTimeInterface;

/**
 * Act
 *
 * @ORM\Table(name="act")
 * @ORM\Entity
 */
class Act
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_act", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idAct;

    /**
     * @var string
     *
     * @ORM\Column(name="nom_act", type="string", length=20, nullable=false)
     *  @Assert\Regex(
     * pattern = "/^[a-zA-Z\s]+$/i",
     * message = "Vous ne devez saisir que des lettres et des espaces"
     * )
     */
    private $nomAct;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="string", length=200, nullable=false)
     *  @Assert\Regex(
     * pattern = "/^[a-zA-Z\s]+$/i",
     * message = "Vous ne devez saisir que des lettres et des espaces"
     * )
     */
    private $description;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="d_debut", type="date", nullable=false)
     * @Assert\GreaterThanOrEqual(
     *     value = "today GMT+1",
     *     message = "La date debut doit dépasser la date d'aujourd'hui"
     * )
     */
    private $dDebut;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="d_fin", type="date", nullable=false )
     *
     */
    private $dFin;

    /**
     * @var string
     *
     * @ORM\Column(name="emplacement", type="string", length=20, nullable=false)
     *  @Assert\Regex(
     * pattern = "/^[a-zA-Z\s]+$/i",
     * message = "Vous ne devez saisir que des lettres et des espaces"
     * )
     */
    private $emplacement;

    /**
     * @var int
     *
     * @ORM\Column(name="idemplacement", type="integer", nullable=false)
     *  @Assert\Regex(
     * pattern = "/^[1-99\s]+$/i" )
     */
    private $idemplacement;

    /**
     * @var int|null
     *
     * @ORM\Column(name="nb_personne", type="integer", nullable=false)
     *  @Assert\Regex(
     * pattern = "/^[1-99\s]+$/i" )
     */
    private $nbPersonne;

    /**
     * @var int|null
     *
     * @ORM\Column(name="id_user", type="integer", nullable=false)
     *  @Assert\Regex(
     * pattern = "/^[1-99\s]+$/i" )
     */
    private $idUser;

    public function getIdAct(): ?int
    {
        return $this->idAct;
    }

    public function getNomAct(): ?string
    {
        return $this->nomAct;
    }

    public function setNomAct(string $nomAct): self
    {
        $this->nomAct = $nomAct;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(string $description): self
    {
        $this->description = $description;

        return $this;
    }

    public function getDDebut(): ?DateTimeInterface
    {
        return $this->dDebut;
    }
    /**
     * @param \DateTimeInterface
     */
    public function setDDebut(DateTimeInterface $dDebut): self
    {
        $this->dDebut = $dDebut;

        return $this;
    }

    public function getDFin(): ?DateTimeInterface
    {
        return $this->dFin;
    }
    /**
     * @param \DateTimeInterface
     */
    public function setDFin(DateTimeInterface $dFin): self
    {
        $this->dFin = $dFin;

        return $this;
    }

    public function getEmplacement(): ?string
    {
        return $this->emplacement;
    }

    public function setEmplacement(string $emplacement): self
    {
        $this->emplacement = $emplacement;

        return $this;
    }

    public function getIdemplacement(): ?int
    {
        return $this->idemplacement;
    }

    public function setIdemplacement(int $idemplacement): self
    {
        $this->idemplacement = $idemplacement;

        return $this;
    }

    public function getNbPersonne(): ?int
    {
        return $this->nbPersonne;
    }

    public function setNbPersonne(?int $nbPersonne): self
    {
        $this->nbPersonne = $nbPersonne;

        return $this;
    }

    public function getIdUser(): ?int
    {
        return $this->idUser;
    }

    public function setIdUser(?int $idUser): self
    {
        $this->idUser = $idUser;

        return $this;
    }


}
