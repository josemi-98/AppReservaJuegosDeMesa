<?php

namespace App\Entity;

use App\Repository\JuegoRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use Gedmo\Mapping\Annotation as Gedmo;
use Symfony\Component\HttpFoundation\File\File;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Vich\UploaderBundle\Mapping\Annotation as Vich;
use Vich\UploaderBundle\Form\Type\VichImageType;
use Symfony\Component\Validator\Constraints as Assert;

#[ORM\Entity(repositoryClass: JuegoRepository::class)]
#[Vich\Uploadable]
class Juego
{
    public function __toString(): string
    {
        return $this->getNombre();
    }
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255, nullable: false)]
    #[Assert\NotBlank]
    #[Assert\Type(
        type: 'string',
        message: 'El atributo nombre: {{ value }} no es valido si no tiene  {{ type }}.',
    )]
    private ?string $nombre = null;


    #[ORM\Column(nullable: true)]
    #[Assert\NotBlank]
    #[Assert\Length(
        min: 2,
        max: 4,
        minMessage: 'Este campo tiene que tener como minimo {{ limit }} numeros',
        maxMessage: 'Este campo tiene que tener como maximo {{ limit }} numeros',
    )]
    private ?int $ancho = null;

    #[ORM\Column(nullable: true)]
    #[Assert\NotBlank]
    #[Assert\Length(
        min: 2,
        max: 4,
        minMessage: 'Este campo tiene que tener como minimo {{ limit }} numeros',
        maxMessage: 'Este campo tiene que tener como maximo {{ limit }} numeros',
    )]
    private ?int $alto = null;

    #[ORM\Column(nullable: true)]
    #[Assert\NotBlank]
    #[Assert\Length(
        min: 1,
        max: 2,
        minMessage: 'Este campo tiene que tener como minimo {{ limit }} numeros',
        maxMessage: 'Este campo tiene que tener como maximo {{ limit }} numeros',
    )]
    private ?int $min_person = null;

    #[ORM\Column(nullable: true)]
    #[Assert\NotBlank]
    #[Assert\Length(
        min: 1,
        max: 2,
        minMessage: 'Este campo tiene que tener como minimo {{ limit }} numeros',
        maxMessage: 'Este campo tiene que tener como maximo {{ limit }} numeros',
    )]
    private ?int $max_person = null;

     #[ORM\Column(type: Types::BLOB, nullable: true)]
    // // #[Vich\UploadableField(mapping: 'juegos', fileNameProperty: 'imageName', size: 'imageSize')]
     private $imagen = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $image = null;

    #[Vich\UploadableField(mapping: 'juego', fileNameProperty: 'image')]
    //#[var File]
    private $imageFile;

    #[ORM\OneToMany(mappedBy: 'juego', targetEntity: Reservas::class)]
    private Collection $reservas;

    // #[ORM\ManyToMany(targetEntity: Eventos::class, inversedBy: 'juegos')]
    // private Collection $evento;

    #[ORM\OneToMany(mappedBy: 'juego', targetEntity: GamesEvents::class)]
    private Collection $gamesEvents;

    

    public function __construct()
    {
        $this->reservas = new ArrayCollection();
        $this->evento = new ArrayCollection();
        $this->gamesEvents = new ArrayCollection();
    }

    public function getImage(): ?string
    {
        return $this->image;
    }

    public function setImage(?string $image): self
    {
        $this->image = $image;

        return $this;
    }




    // #[Vich\UploadableField(mapping: 'juego_images', fileNameProperty: 'imagen')]
    // private $imageFile;

    // #[Gedmo\Timestampable(on:"update")]
    // #[ORM\Column(type: 'datetime', nullable: true)]
    // private $created_at;
 
    // #[Gedmo\Timestampable(on:"update")]
    // #[ORM\Column(type: 'datetime', nullable: true)]
    // private $updated_at;


    // public function setImageFile(File $image = null)
    // {
    //     $this->imageFile = $image;

    //     // VERY IMPORTANT:
    //     // It is required that at least one field changes if you are using Doctrine,
    //     // otherwise the event listeners won't be called and the file is lost
    //     if ($image) {
    //         // if 'updatedAt' is not defined in your entity, use another property
    //         $this->updatedAt = new \DateTime('now');
    //     }
    // }

    public function getImageFile(): ?File
    {
        return $this->imageFile;
    }


    public function setImageFile(?File $imageFile=null)
    {
        $this->imageFile = $imageFile;

        return $this;
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

    public function getAncho(): ?int
    {
        return $this->ancho;
    }

    public function setAncho(?int $ancho): self
    {
        $this->ancho = $ancho;

        return $this;
    }

    public function getAlto(): ?int
    {
        return $this->alto;
    }

    public function setAlto(int $alto): self
    {
        $this->alto = $alto;

        return $this;
    }

    public function getMinPerson(): ?int
    {
        return $this->min_person;
    }

    public function setMinPerson(?int $min_person): self
    {
        $this->min_person = $min_person;

        return $this;
    }

    public function getMaxPerson(): ?int
    {
        return $this->max_person;
    }

    public function setMaxPerson(int $max_person): self
    {
        $this->max_person = $max_person;

        return $this;
    }

    public function getImagen()
    {
        return $this->imagen;
    }

    public function setImagen($imagen): self
    {
        $this->imagen = $imagen;

        return $this;
    }

    // public function getCreatedAt(): ?\DateTimeInterface
    // {
    //     return $this->created_at;
    // }
 
    // public function setCreatedAt(?\DateTimeInterface $created_at): self
    // {
    //     $this->created_at = $created_at;
 
    //     return $this;
    // }
 
    // public function getUpdatedAt(): ?\DateTimeInterface
    // {
    //     return $this->updated_at;
    // }
 
    // public function setUpdatedAt(?\DateTimeInterface $updated_at): self
    // {
    //     $this->updated_at = $updated_at;
 
    //     return $this;
    // }

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
            $reserva->setJuego($this);
        }

        return $this;
    }

    public function removeReserva(Reservas $reserva): self
    {
        if ($this->reservas->removeElement($reserva)) {
            // set the owning side to null (unless already changed)
            if ($reserva->getJuego() === $this) {
                $reserva->setJuego(null);
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
            $gamesEvent->setJuego($this);
        }

        return $this;
    }

    public function removeGamesEvent(GamesEvents $gamesEvent): self
    {
        if ($this->gamesEvents->removeElement($gamesEvent)) {
            // set the owning side to null (unless already changed)
            if ($gamesEvent->getJuego() === $this) {
                $gamesEvent->setJuego(null);
            }
        }

        return $this;
    }

    
}
