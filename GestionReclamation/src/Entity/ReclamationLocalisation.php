<?php

namespace App\Entity;

use App\Repository\ReclamationLocalisationRepository;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity(repositoryClass=ReclamationLocalisationRepository::class)
 */
class ReclamationLocalisation
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="integer")
     */
    private $id_client;

    /**
     * @ORM\Column(type="integer")
     */
    private $id_admin;

    /**
     * @ORM\Column(type="integer")
     */
    private $id_localisation;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $description;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $respond;

    /**
     * @ORM\Column(type="boolean")
     */
    private $status;

    /**
     * @ORM\Column(type="date")
     */
    private $reclamationdate;

    /**
     * @ORM\Column(type="string", length=30)
     * @Assert\Length(
     *      min = 2,
     *      max = 30,
     *      minMessage = "Your full name must be at least {{ 2 }} characters long",
     *      maxMessage = "Your full name cannot be longer than {{ 30 }} characters",
     *      allowEmptyString = false
     * )
     */
    private $fullname;

    /**
     * @ORM\Column(type="string", length=20)
     * @Assert\Length(
     *      min = 2,
     *      max = 20,
     *      minMessage = "Location name must be at least {{ 2 }} characters long",
     *      maxMessage = "Location name cannot be longer than {{ 20 }} characters",
     *      allowEmptyString = false
     * )
     */
    private $location;

    /**
     * @ORM\Column(type="string", length=30)
     * @Assert\Email(
     *     message = "The email '{{ value }}' is not a valid email."
     * )
     */
    private $email;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getIdClient(): ?int
    {
        return $this->id_client;
    }

    public function setIdClient(int $id_client): self
    {
        $this->id_client = $id_client;

        return $this;
    }

    public function getIdAdmin(): ?int
    {
        return $this->id_admin;
    }

    public function setIdAdmin(int $id_admin): self
    {
        $this->id_admin = $id_admin;

        return $this;
    }

    public function getIdLocalisation(): ?int
    {
        return $this->id_localisation;
    }

    public function setIdLocalisation(int $id_localisation): self
    {
        $this->id_localisation = $id_localisation;

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

    public function getRespond(): ?string
    {
        return $this->respond;
    }

    public function setRespond(?string $respond): self
    {
        $this->respond = $respond;

        return $this;
    }

    public function getStatus(): ?bool
    {
        return $this->status;
    }

    public function setStatus(bool $status): self
    {
        $this->status = $status;

        return $this;
    }

    public function getReclamationdate(): ?\DateTimeInterface
    {
        return $this->reclamationdate;
    }

    public function setReclamationdate(\DateTimeInterface $reclamationdate): self
    {
        $this->reclamationdate = $reclamationdate;

        return $this;
    }

    public function getFullname(): ?string
    {
        return $this->fullname;
    }

    public function setFullname(string $fullname): self
    {
        $this->fullname = $fullname;

        return $this;
    }

    public function getLocation(): ?string
    {
        return $this->location;
    }

    public function setLocation(string $location): self
    {
        $this->location = $location;

        return $this;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(string $email): self
    {
        $this->email = $email;

        return $this;
    }
}
