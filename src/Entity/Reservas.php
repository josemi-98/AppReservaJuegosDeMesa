<?php

namespace App\Entity;

use App\Repository\ReservasRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;

#[ORM\Entity(repositoryClass: ReservasRepository::class)]
class Reservas
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $nombre = null;

    #[ORM\Column(type: Types::DATETIME_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $fecha_inicio = null;

    #[ORM\Column(type: Types::DATETIME_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $fecha_fin = null;

    #[ORM\Column(type: Types::DATETIME_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $fecha_cancelacion = null;

    #[ORM\Column(nullable: true)]
    private ?bool $presentado = null;

    #[ORM\Column(nullable: true)]
    private ?int $participantes = null;

    #[ORM\ManyToOne(inversedBy: 'reservas')]
    private ?Juego $juego = null;

    #[ORM\ManyToOne(inversedBy: 'reservas')]
    private ?User $user = null;

    #[ORM\ManyToOne(inversedBy: 'reservas')]
    private ?Mesa $mesa = null;

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

    public function getFechaCancelacion(): ?\DateTimeInterface
    {
        return $this->fecha_cancelacion;
    }

    public function setFechaCancelacion(?\DateTimeInterface $fecha_cancelacion): self
    {
        $this->fecha_cancelacion = $fecha_cancelacion;

        return $this;
    }

    public function getPresentado(): ?bool
    {
        return $this->presentado;
    }

    public function setPresentado(?bool $presentado): self
    {
        $this->presentado = $presentado;

        return $this;
    }

    public function getParticipantes(): ?int
    {
        return $this->participantes;
    }

    public function setParticipantes(?int $participantes): self
    {
        $this->participantes = $participantes;

        return $this;
    }

    public function getJuego(): ?Juego
    {
        return $this->juego;
    }

    public function setJuego(?Juego $juego): self
    {
        $this->juego = $juego;

        return $this;
    }

    public function getUser(): ?User
    {
        return $this->user;
    }

    public function setUser(?User $user): self
    {
        $this->user = $user;

        return $this;
    }

    public function getMesa(): ?Mesa
    {
        return $this->mesa;
    }

    public function setMesa(?Mesa $mesa): self
    {
        $this->mesa = $mesa;

        return $this;
    }
}
