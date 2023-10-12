<?php

namespace App\Entity;

use App\Repository\GamesEventsRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: GamesEventsRepository::class)]
class GamesEvents
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\ManyToOne(inversedBy: 'gamesEvents')]
    private ?Juego $juego = null;

    #[ORM\ManyToOne(inversedBy: 'gamesEvents')]
    private ?Eventos $eventos = null;

    public function getId(): ?int
    {
        return $this->id;
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

    public function getEventos(): ?Eventos
    {
        return $this->eventos;
    }

    public function setEventos(?Eventos $eventos): self
    {
        $this->eventos = $eventos;

        return $this;
    }
}
