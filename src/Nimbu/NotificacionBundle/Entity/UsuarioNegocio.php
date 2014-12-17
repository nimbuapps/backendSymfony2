<?php

namespace Nimbu\NotificacionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * UsuarioNegocio
 *
 * @ORM\Table(name="usuario_negocio", indexes={@ORM\Index(name="usuario_id", columns={"usuario_id"}), @ORM\Index(name="negocio_id", columns={"negocio_id"})})
 * @ORM\Entity
 */
class UsuarioNegocio
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
     * @var \Usuario
     *
     * @ORM\ManyToOne(targetEntity="Usuario")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="usuario_id", referencedColumnName="id")
     * })
     */
    private $usuario;

    /**
     * @var \Negocio
     *
     * @ORM\ManyToOne(targetEntity="Negocio")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="negocio_id", referencedColumnName="id")
     * })
     */
    private $negocio;



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
     * Set usuario
     *
     * @param \Nimbu\NotificacionBundle\Entity\Usuario $usuario
     * @return UsuarioNegocio
     */
    public function setUsuario(\Nimbu\NotificacionBundle\Entity\Usuario $usuario = null)
    {
        $this->usuario = $usuario;

        return $this;
    }

    /**
     * Get usuario
     *
     * @return \Nimbu\NotificacionBundle\Entity\Usuario 
     */
    public function getUsuario()
    {
        return $this->usuario;
    }

    /**
     * Set negocio
     *
     * @param \Nimbu\NotificacionBundle\Entity\Negocio $negocio
     * @return UsuarioNegocio
     */
    public function setNegocio(\Nimbu\NotificacionBundle\Entity\Negocio $negocio = null)
    {
        $this->negocio = $negocio;

        return $this;
    }

    /**
     * Get negocio
     *
     * @return \Nimbu\NotificacionBundle\Entity\Negocio 
     */
    public function getNegocio()
    {
        return $this->negocio;
    }
}
