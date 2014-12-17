<?php

//Src/Acme/UserBundle/Entity/User.php

namespace Nimbu\NotificacionBundle\Entity;

use FOS\UserBundle\Model\User as BaseUser;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name = "fos_user")
 */
class User extends BaseUser{

    /**
     * @ORM\Id
     * @ORM\Column (type="integer")
     * @ORM\GeneratedValue (strategy = "AUTO")
     */
    protected $id;

    public function __construct() {
        
        parent::__construct();
        $this->roles[] = 'ROLE_ADMIN';
// Su propia lógica
    }


    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }
}
