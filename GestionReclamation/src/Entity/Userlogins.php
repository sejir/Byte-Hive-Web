<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Userlogins
 *
 * @ORM\Table(name="userlogins", indexes={@ORM\Index(name="fk_id_user", columns={"id_user"})})
 * @ORM\Entity
 */
class Userlogins
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
     *
     * @ORM\Column(name="id_user", type="integer", nullable=false)
     */
    private $idUser;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="loginDate", type="datetime", nullable=false, options={"default"="CURRENT_TIMESTAMP"})
     */
    private $logindate = 'CURRENT_TIMESTAMP';

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getIdUser(): ?int
    {
        return $this->idUser;
    }

    public function setIdUser(int $idUser): self
    {
        $this->idUser = $idUser;

        return $this;
    }

    public function getLogindate(): ?\DateTimeInterface
    {
        return $this->logindate;
    }

    public function setLogindate(\DateTimeInterface $logindate): self
    {
        $this->logindate = $logindate;

        return $this;
    }


}
