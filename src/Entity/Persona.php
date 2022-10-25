<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;


/**
 * @ORM\Entity()
 */
class Persona
{
    /**
     * @ORM\Id()
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue()
     */
    private $id;

    /**
     * @ORM\Column(type="string")
     */
    private $nombre;

    /**
     * @ORM\Column(type="string")
     */

    private $apellidos;

    /**
     * @ORM\Column(type="string",length=9,nullable=true,unique=true)
     */
    private $dni;

    /**
     * @ORM\Column (type="date",nullable=true)
     */
    private $fechaNacimiento;


}