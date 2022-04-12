<?php

namespace App\Entity;

use App\Repository\UpcomingeventsRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=UpcomingeventsRepository::class)
 */
class Upcomingevents
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
    private $event_number;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $event_name;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $location;

    /**
     * @ORM\Column(type="date")
     */
    private $date_camping;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $guide;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $id_guide;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getEventNumber(): ?int
    {
        return $this->event_number;
    }

    public function setEventNumber(int $event_number): self
    {
        $this->event_number = $event_number;

        return $this;
    }

    public function getEventName(): ?string
    {
        return $this->event_name;
    }

    public function setEventName(string $event_name): self
    {
        $this->event_name = $event_name;

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

    public function getDateCamping(): ?\DateTimeInterface
    {
        return $this->date_camping;
    }

    public function setDateCamping(\DateTimeInterface $date_camping): self
    {
        $this->date_camping = $date_camping;

        return $this;
    }

    public function getGuide(): ?string
    {
        return $this->guide;
    }

    public function setGuide(string $guide): self
    {
        $this->guide = $guide;

        return $this;
    }

    public function getIdGuide(): ?int
    {
        return $this->id_guide;
    }

    public function setIdGuide(?int $id_guide): self
    {
        $this->id_guide = $id_guide;

        return $this;
    }
    public function __toString()
    {
return (string)$this->id;    }
}
