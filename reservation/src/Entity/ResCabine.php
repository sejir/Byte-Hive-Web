<?php

namespace App\Entity;
use Symfony\Component\Validator\Constraints as Assert;
use Doctrine\ORM\Mapping as ORM;

/**
 * ResCabine
 *
 * @ORM\Table(name="res_cabine", uniqueConstraints={@ORM\UniqueConstraint(name="num", columns={"num"})})
 * @ORM\Entity
 */
class ResCabine
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var int
     *@Assert\NotBlank(message="NumCabine is required")
     * @ORM\Column(name="num", type="integer", nullable=false)
     */
    private $num;

    /**
     * @var int
     *
      *@Assert\NotBlank(message="Nbp is required")
     * @ORM\Column(name="nb_personnes", type="integer", nullable=false)
     */
    private $nbPersonnes;

    /**
     * @var string
     *@Assert\NotIdenticalTo("Bangalow",message="Type not available")
     *@Assert\NotBlank(message="Type is required")
     * @ORM\Column(name="type", type="string", length=20, nullable=false)
     */
    private $type;

    /**

     * @var string
     * @Assert\NotBlank(message="Prix is required")
     * @ORM\Column(name="prix", type="string", length=4000, nullable=false)
     */
    private $prix;

    /**
     * @var int
     *
     * @ORM\Column(name="Dispo", type="integer", nullable=false)
     */
    private $dispo;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNum(): ?int
    {
        return $this->num;
    }

    public function setNum(int $num): self
    {
        $this->num = $num;

        return $this;
    }

    public function getNbPersonnes(): ?int
    {
        return $this->nbPersonnes;
    }

    public function setNbPersonnes(int $nbPersonnes): self
    {
        $this->nbPersonnes = $nbPersonnes;

        return $this;
    }

    public function getType(): ?string
    {
        return $this->type;
    }

    public function setType(string $type): self
    {
        $this->type = $type;

        return $this;
    }

    public function getPrix(): ?string
    {
        return $this->prix;
    }

    public function setPrix(string $prix): self
    {
        $this->prix = $prix;

        return $this;
    }

    public function getDispo(): ?int
    {
        return $this->dispo;
    }

    public function setDispo(int $dispo): self
    {
        $this->dispo = $dispo;

        return $this;
    }


}
