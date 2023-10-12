<?php

namespace App\Entity;

use App\Repository\InvitacionRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: InvitacionRepository::class)]
class Invitacion
{
    public function __toString(): string
    {
        return $this->getNombre();
    }
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $nombre = null;

    #[ORM\Column(nullable: true)]
    private ?bool $asistencia = null;

    #[ORM\OneToMany(mappedBy: 'invitacion', targetEntity: Eventos::class)]
    private Collection $eventos;

    #[ORM\OneToMany(mappedBy: 'invitacion', targetEntity: User::class)]
    private Collection $users;

    public function __construct()
    {
        $this->eventos = new ArrayCollection();
        $this->users = new ArrayCollection();
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

    public function isAsistencia(): ?bool
    {
        return $this->asistencia;
    }

    public function setAsistencia(?bool $asistencia): self
    {
        $this->asistencia = $asistencia;

        return $this;
    }

    /**
     * @return Collection<int, Eventos>
     */
    public function getEventos(): Collection
    {
        return $this->eventos;
    }

    public function addEvento(Eventos $evento): self
    {
        if (!$this->eventos->contains($evento)) {
            $this->eventos->add($evento);
            $evento->setInvitacion($this);
        }

        return $this;
    }

    public function removeEvento(Eventos $evento): self
    {
        if ($this->eventos->removeElement($evento)) {
            // set the owning side to null (unless already changed)
            if ($evento->getInvitacion() === $this) {
                $evento->setInvitacion(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, User>
     */
    public function getUsers(): Collection
    {
        return $this->users;
    }

    public function addUser(User $user): self
    {
        if (!$this->users->contains($user)) {
            $this->users->add($user);
            $user->setInvitacion($this);
        }

        return $this;
    }

    public function removeUser(User $user): self
    {
        if ($this->users->removeElement($user)) {
            // set the owning side to null (unless already changed)
            if ($user->getInvitacion() === $this) {
                $user->setInvitacion(null);
            }
        }

        return $this;
    }
}
