<?php
/**
 * Created by PhpStorm.
 * User: firas
 * Date: 14/10/2018
 * Time: 22:53
 */

namespace TransportBundle\Entity;
use FOS\UserBundle\Model\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;
/**
 * @ORM\Entity
 * @ORM\Table(name="User")
 */

class User extends BaseUser
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
    4
     */
    protected $id;

    /**
     * User constructor.
     */
    public function __construct()
    {
        parent::__construct();
    }


}