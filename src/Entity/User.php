<?php

namespace App\Entity;

use App\Repository\UserRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
use Symfony\Component\Security\Core\User\PasswordAuthenticatedUserInterface;
use Symfony\Component\Security\Core\User\UserInterface;

#[ORM\Entity(repositoryClass: UserRepository::class)]
#[UniqueEntity(fields: ['email'], message: 'There is already an account with this email')]
class User implements UserInterface, PasswordAuthenticatedUserInterface
{

    public function __toString(): string
    {
        return $this->getEmail();
    }

    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 180, unique: true)]
    private ?string $email = null;

    #[ORM\Column]
    private array $roles = [];

    /**
     * @var string The hashed password
     */
    #[ORM\Column]
    private ?string $password = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $nombre = null;

    #[ORM\Column(nullable: true)]
    private ?int $contacto = null;

    #[ORM\Column(nullable: true)]
    private ?int $puntos = null;

    #[ORM\OneToMany(mappedBy: 'user', targetEntity: Reservas::class)]
    private Collection $reservas;

    #[ORM\ManyToOne(inversedBy: 'users')]
    private ?Invitacion $invitacion = null;

    #[ORM\OneToMany(mappedBy: 'user', targetEntity: InvitacionEvento::class)]
    private Collection $invitacionEventos;

    public function __construct()
    {
        $this->reservas = new ArrayCollection();
        $this->invitacionEventos = new ArrayCollection();
    }


    public function getId(): ?int
    {
        return $this->id;
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

    /**
     * A visual identifier that represents this user.
     *
     * @see UserInterface
     */
    public function getUserIdentifier(): string
    {
        return (string) $this->email;
    }

    /**
     * @see UserInterface
     */
    public function getRoles(): array
    {
        $roles = $this->roles;
        // guarantee every user at least has ROLE_USER
        // if ( $roles[] = '' ){
        //     $roles[] = 'ROLE_USER';
        // } else {
        //     $roles[] = 'ROLE_ADMIN';
        // }
        $roles[] = 'ROLE_USER';

        return array_unique($roles);
    }

    public function setRoles(array $roles): self
    {
        $this->roles = $roles;

        return $this;
    }

    /**
     * @see PasswordAuthenticatedUserInterface
     */
    public function getPassword(): string
    {
        return $this->password;
    }

    public function setPassword(string $password): self
    {
        $this->password = $password;

        return $this;
    }

    /**
     * @see UserInterface
     */
    public function eraseCredentials()
    {
        // If you store any temporary, sensitive data on the user, clear it here
        // $this->plainPassword = null;
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

    public function getContacto(): ?int
    {
        return $this->contacto;
    }

    public function setContacto(?int $contacto): self
    {
        $this->contacto = $contacto;

        return $this;
    }

    public function getPuntos(): ?int
    {
        return $this->puntos;
    }

    public function setPuntos(?int $puntos): self
    {
        $this->puntos = $puntos;

        return $this;
    }

    public function getAdmin(){
        return in_array('ROLE_ADMIN', $this->roles);
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
            $reserva->setUser($this);
        }

        return $this;
    }

    public function removeReserva(Reservas $reserva): self
    {
        if ($this->reservas->removeElement($reserva)) {
            // set the owning side to null (unless already changed)
            if ($reserva->getUser() === $this) {
                $reserva->setUser(null);
            }
        }

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
            $invitacionEvento->setUser($this);
        }

        return $this;
    }

    public function removeInvitacionEvento(InvitacionEvento $invitacionEvento): self
    {
        if ($this->invitacionEventos->removeElement($invitacionEvento)) {
            // set the owning side to null (unless already changed)
            if ($invitacionEvento->getUser() === $this) {
                $invitacionEvento->setUser(null);
            }
        }

        return $this;
    }

}
