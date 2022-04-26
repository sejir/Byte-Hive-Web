<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Upcomingevents
 *
 * @ORM\Table(name="upcomingevents", indexes={@ORM\Index(name="fkguide", columns={"id_guide"})})
 * @ORM\Entity
 */
class Upcomingevents
{
    /**
     * @var int
     *
     * @ORM\Column(name="event_number", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $eventNumber;

    /**
     * @var string
     *
     * @ORM\Column(name="event_name", type="string", length=255, nullable=false)
     */
    private $eventName;

    /**
     * @var string
     *
     * @ORM\Column(name="location", type="string", length=255, nullable=false)
     */
    private $location;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_camping", type="date", nullable=false)
     */
    private $dateCamping;

    /**
     * @var string
     *
     * @ORM\Column(name="guide", type="string", length=255, nullable=false)
     */
    private $guide;

    /**
     * @var \Guide
     *
     * @ORM\ManyToOne(targetEntity="Guide")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_guide", referencedColumnName="id")
     * })
     */
    private $idGuide;

    public function getEventNumber(): ?int
    {
        return $this->eventNumber;
    }

    public function getEventName(): ?string
    {
        return $this->eventName;
    }

    public function setEventName(string $eventName): self
    {
        $this->eventName = $eventName;

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
        return $this->dateCamping;
    }

    public function setDateCamping(\DateTimeInterface $dateCamping): self
    {
        $this->dateCamping = $dateCamping;

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

    public function getIdGuide(): ?Guide
    {
        return $this->idGuide;
    }

    public function setIdGuide(?Guide $idGuide): self
    {
        $this->idGuide = $idGuide;

        return $this;
    }


}
