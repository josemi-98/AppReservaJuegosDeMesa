<?php

namespace App\Entity;

use App\Repository\EventosRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: EventosRepository::class)]
class Eventos
{

    public function __toString(): string
    {
        return $this->getNombre();
    }
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $nombre = null;

    #[ORM\Column(type: Types::TEXT, nullable: true)]
    private ?string $descripcion = null;

    #[ORM\Column(type: Types::DATETIME_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $fecha_inicio = null;

    #[ORM\Column(type: Types::DATETIME_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $fecha_fin = null;

    #[ORM\ManyToOne(inversedBy: 'eventos')]
    private ?Invitacion $invitacion = null;

    #[ORM\ManyToMany(targetEntity: Juego::class, mappedBy: 'evento')]
    private Collection $juegos;

    #[ORM\OneToMany(mappedBy: 'evento', targetEntity: InvitacionEvento::class)]
    private Collection $invitacionEventos;

    #[ORM\OneToMany(mappedBy: 'eventos', targetEntity: GamesEvents::class)]
    private Collection $gamesEvents;

    public function __construct()
    {
        $this->juegos = new ArrayCollection();
        $this->invitacionEventos = new ArrayCollection();
        $this->gamesEvents = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNombre(): ?string
    {
        return $this->nombre;
    }

    public function setNombre(?string $nombre): self
    {
        $this->nombre = $nombre;

        return $this;
    }

    public function getDescripcion(): ?string
    {
        return $this->descripcion;
    }

    public function setDescripcion(?string $descripcion): self
    {
        $this->descripcion = $descripcion;

        return $this;
    }

    public function getFechaInicio(): ?\DateTimeInterface
    {
        return $this->fecha_inicio;
    }

    public function setFechaInicio(?\DateTimeInterface $fecha_inicio): self
    {
        $this->fecha_inicio = $fecha_inicio;

        return $this;
    }

    public function getFechaFin(): ?\DateTimeInterface
    {
        return $this->fecha_fin;
    }

    public function setFechaFin(?\DateTimeInterface $fecha_fin): self
    {
        $this->fecha_fin = $fecha_fin;

        return $this;
    }

    public function getInvitacion(): ?Invitacion
    {
        return $this->invitacion;
    }

    public function setInvitacion(?Invitacion $invitacion): self
    {
        $this->invitacion = $invitacion;

        return $this;
    }

    /**
     * @return Collection<int, InvitacionEvento>
     */
    public function getInvitacionEventos(): Collection
    {
        return $this->invitacionEventos;
    }

    public function addInvitacionEvento(InvitacionEvento $invitacionEvento): self
    {
        if (!$this->invitacionEventos->contains($invitacionEvento)) {
            $this->invitacionEventos->add($invitacionEvento);
            $invitacionEvento->setEvento($this);
        }

        return $this;
    }

    public function removeInvitacionEvento(InvitacionEvento $invitacionEvento): self
    {
        if ($this->invitacionEventos->removeElement($invitacionEvento)) {
            // set the owning side to null (unless already changed)
            if ($invitacionEvento->getEvento() === $this) {
                $invitacionEvento->setEvento(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, GamesEvents>
     */
    public function getGamesEvents(): Collection
    {
        return $this->gamesEvents;
    }

    public function addGamesEvent(GamesEvents $gamesEvent): self
    {
        if (!$this->gamesEvents->contains($gamesEvent)) {
            $this->gamesEvents->add($gamesEvent);
            $gamesEvent->setEventos($this);
        }

        return $this;
    }

    public function removeGamesEvent(GamesEvents $gamesEvent): self
    {
        if ($this->gamesEvents->removeElement($gamesEvent)) {
            // set the owning side to null (unless already changed)
            if ($gamesEvent->getEventos() === $this) {
                $gamesEvent->setEventos(null);
            }
        }

        return $this;
    }

   
}
