<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;


/**
 * @ORM\Entity()
 * @ORM\Entity
 * @ORM\Table(name="persona")
 */
class Persona
{
    /**
     * @ORM\Id()
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue()
     *
     */
    private ?int $id;

    /**
     * @ORM\Column(type="string")
     */
    private ?string $nombre;

    /**
     * @ORM\Column(type="string")
     */

    private ?string $apellidos;

    /**
     * @ORM\Column(type="string",length=9,nullable=true,unique=true)
     */
    private ?string $dni;

    /**
     * @ORM\Column (type="date",nullable=true)
     */
    private ?\DateTime $fechaNacimiento;

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @return string|null
     */
    public function getNombre(): ?string
    {
        return $this->nombre;
    }

    /**
     * @param string|null $nombre
     * @return Persona
     */
    public function setNombre(?string $nombre): Persona
    {
        $this->nombre = $nombre;
        return $this;
    }




}