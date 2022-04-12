<?php

namespace App\Entity;
use Symfony\Component\Validator\Constraints as Assert;
use Doctrine\ORM\Mapping as ORM;

/**
 * ResAct
 *
 * @ORM\Table(name="res_act", uniqueConstraints={@ORM\UniqueConstraint(name="NumC", columns={"NumC"})})
 * @ORM\Entity
 */
class ResAct
{
    /**
     * @var int
     *
     * @ORM\Column(name="IdRes", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idres;

    /**
     * @var string
     *
     * @ORM\Column(name="NomClient", type="string", length=20, nullable=false)
     */
    private $nomclient;

    /**
     * @var string
     *
      *@Assert\NotBlank(message="nomclient is required")
     * @ORM\Column(name="PrenomC", type="string", length=20, nullable=false)
     */
    private $prenomc;

    /**
     * @var int
     **@Assert\NotBlank(message="prenomc is required")
     * @ORM\Column(name="IdAct", type="integer", nullable=false)
     */
    private $idact;

    /**
     * @var int
     **@Assert\NotBlank(message="idact is required")
     * @ORM\Column(name="Nbre_Perso", type="integer", nullable=false)
     */
    private $nbrePerso;

    /**
     * @var int
     *@Assert\NotBlank(message="nbrePerso is required")
     * @ORM\Column(name="NumC", type="integer", nullable=false)
     */
    private $numc;

    public function getIdres(): ?int
    {
        return $this->idres;
    }

    public function getNomclient(): ?string
    {
        return $this->nomclient;
    }

    public function setNomclient(string $nomclient): self
    {
        $this->nomclient = $nomclient;

        return $this;
    }

    public function getPrenomc(): ?string
    {
        return $this->prenomc;
    }

    public function setPrenomc(string $prenomc): self
    {
        $this->prenomc = $prenomc;

        return $this;
    }

    public function getIdact(): ?int
    {
        return $this->idact;
    }

    public function setIdact(int $idact): self
    {
        $this->idact = $idact;

        return $this;
    }

    public function getNbrePerso(): ?int
    {
        return $this->nbrePerso;
    }

    public function setNbrePerso(int $nbrePerso): self
    {
        $this->nbrePerso = $nbrePerso;

        return $this;
    }

    public function getNumc(): ?int
    {
        return $this->numc;
    }

    public function setNumc(int $numc): self
    {
        $this->numc = $numc;

        return $this;
    }


}
