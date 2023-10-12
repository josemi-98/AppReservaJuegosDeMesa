<?php

namespace App\Entity;

use App\Repository\MesaRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: MesaRepository::class)]
class Mesa
{

    public function __toString(): string
    {
        return $this->nombre;
    }

    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $nombre = null;

    #[ORM\Column]
    private ?float $ancho = null;

    #[ORM\Column]
    private ?float $alto = null;

    #[ORM\Column(nullable: true)]
    private ?float $x = null;

    #[ORM\Column(nullable: true)]
    private ?float $y = null;

    #[ORM\OneToMany(mappedBy: 'mesa', targetEntity: Reservas::class)]
    private Collection $reservas;

    #[ORM\OneToMany(mappedBy: 'mesa', targetEntity: Distribucion2::class)]
    private Collection $distribuciones;

    public function __construct()
    {
        $this->reservas = new ArrayCollection();
        $this->distribuciones = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNombre(): ?string
    {
        return $this->nombre;
    }

    public function setNombre(string $nombre): self
    {
        $this->nombre = $nombre;

        return $this;
    }

    public function getAncho(): ?float
    {
        return $this->ancho;
    }

    public function setAncho(float $ancho): self
    {
        $this->ancho = $ancho;

        return $this;
    }

    public function getAlto(): ?float
    {
        return $this->alto;
    }

    public function setAlto(float $alto): self
    {
        $this->alto = $alto;

        return $this;
    }

    public function getX(): ?float
    {
        return $this->x;
    }

    public function setX(?float $x): self
    {
        $this->x = $x;

        return $this;
    }

    public function getY(): ?float
    {
        return $this->y;
    }

    public function setY(?float $y): self
    {
        $this->y = $y;

        return $this;
    }

    /**
     * @return Collection<int, Reservas>
     */
    public function getReservas(): Collection
    {
        return $this->reservas;
    }

    public function addReserva(Reservas $reserva): self
    {
        if (!$this->reservas->contains($reserva)) {
            $this->reservas->add($reserva);
            $reserva->setMesa($this);
        }

        return $this;
    }

    public function removeReserva(Reservas $reserva): self
    {
        if ($this->reservas->removeElement($reserva)) {
            // set the owning side to null (unless already changed)
            if ($reserva->getMesa() === $this) {
                $reserva->setMesa(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, Distribucion2>
     */
    public function getDistribuciones(): Collection
    {
        return $this->distribuciones;
    }

    public function addDistribucione(Distribucion2 $distribucione): self
    {
        if (!$this->distribuciones->contains($distribucione)) {
            $this->distribuciones->add($distribucione);
            $distribucione->setMesa($this);
        }

        return $this;
    }

    public function removeDistribucione(Distribucion2 $distribucione): self
    {
        if ($this->distribuciones->removeElement($distribucione)) {
            // set the owning side to null (unless already changed)
            if ($distribucione->getMesa() === $this) {
                $distribucione->setMesa(null);
            }
        }

        return $this;
    }
}
