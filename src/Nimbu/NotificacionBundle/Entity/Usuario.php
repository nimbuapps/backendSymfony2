<?php

namespace Nimbu\NotificacionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Usuario
 *
 * @ORM\Table(name="usuario", indexes={@ORM\Index(name="negocio_id", columns={"negocio_id"}), @ORM\Index(name="fos_id", columns={"fos_id"}), @ORM\Index(name="persona_id", columns={"persona_id"})})
 * @ORM\Entity
 */
class Usuario
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
     * @var \User
     *
     * @ORM\ManyToOne(targetEntity="User")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="fos_id", referencedColumnName="id")
     * })
     */
    private $fos;

    /**
     * @var \Persona
     *
     * @ORM\ManyToOne(targetEntity="Persona")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="persona_id", referencedColumnName="id")
     * })
     */
    private $persona;
    
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
     * Set fos
     *
     * @param \Nimbu\NotificacionBundle\Entity\User $fos
     * @return Usuario
     */
    public function setFos(\Nimbu\NotificacionBundle\Entity\User $fos = null)
    {
        $this->fos = $fos;

        return $this;
    }

    /**
     * Get fos
     *
     * @return \Nimbu\NotificacionBundle\Entity\User 
     */
    public function getFos()
    {
        return $this->fos;
    }

    /**
     * Set persona
     *
     * @param \Nimbu\NotificacionBundle\Entity\Persona $persona
     * @return Usuario
     */
    public function setPersona(\Nimbu\NotificacionBundle\Entity\Persona $persona = null)
    {
        $this->persona = $persona;

        return $this;
    }

    /**
     * Get persona
     *
     * @return \Nimbu\NotificacionBundle\Entity\Persona 
     */
    public function getPersona()
    {
        return $this->persona;
    }
    
        /**
     * Set negocio
     *
     * @param \Nimbu\NotificacionBundle\Entity\Negocio $negocio
     * @return Usuario
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
