<?php

namespace Nimbu\NotificacionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Pack
 *
 * @ORM\Table(name="pack")
 * @ORM\Entity
 */
class Pack
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="nombre", type="string", length=50, nullable=false)
     */
    private $nombre;

    /**
     * @var integer
     *
     * @ORM\Column(name="cantidad_mensaje_diario", type="integer", nullable=false)
     */
    private $cantidadMensajeDiario;



    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set nombre
     *
     * @param string $nombre
     * @return Pack
     */
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;

        return $this;
    }

    /**
     * Get nombre
     *
     * @return string 
     */
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * Set cantidadMensajeDiario
     *
     * @param integer $cantidadMensajeDiario
     * @return Pack
     */
    public function setCantidadMensajeDiario($cantidadMensajeDiario)
    {
        $this->cantidadMensajeDiario = $cantidadMensajeDiario;

        return $this;
    }

    /**
     * Get cantidadMensajeDiario
     *
     * @return integer 
     */
    public function getCantidadMensajeDiario()
    {
        return $this->cantidadMensajeDiario;
    }
}
