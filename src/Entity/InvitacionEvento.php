<?php

namespace App\Entity;

use App\Repository\InvitacionEventoRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: InvitacionEventoRepository::class)]
class InvitacionEvento
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\ManyToOne(inversedBy: 'invitacionEventos')]
    private ?Eventos $evento = null;

    #[ORM\ManyToOne(inversedBy: 'invitacionEventos')]
    private ?User $user = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getEvento(): ?Eventos
    {
        return $this->evento;
    }

    public function setEvento(?Eventos $evento): self
    {
        $this->evento = $evento;

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
}
