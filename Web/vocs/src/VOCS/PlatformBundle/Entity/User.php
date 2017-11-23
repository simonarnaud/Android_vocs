<?php

namespace VOCS\PlatformBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use FOS\UserBundle\Model\User as BaseUser;

/**
 * User
 *
 * @ORM\Table(name="user")
 * @ORM\Entity(repositoryClass="VOCS\PlatformBundle\Repository\UserRepository")
 */
class User extends BaseUser
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;


    /**
     * @ORM\Column(name="firstname", type="string", length=255)
     */
    private $firstname;

    /**
     * @ORM\Column(name="surname", type="string", length=255)
     */
    private $surname;

    /**
     * @ORM\ManyToMany(targetEntity="Lists", inversedBy="users", cascade={"persist"})
     * @ORM\JoinTable(name="users_lists")
     */
    private $lists;

    /**
     * @ORM\ManyToMany(targetEntity="Classes", inversedBy="users")
     * @ORM\JoinTable(name="users_classes")
     */
    private $classes;



    public function __construct()
    {
        parent::__construct();
        $this->lists = new \Doctrine\Common\Collections\ArrayCollection();
        $this->classes = new \Doctrine\Common\Collections\ArrayCollection();
    }


    public function setEmail($email)
    {
        parent::setEmail($email); // TODO: Change the autogenerated stub
        $this->setUsername($email);
    }

    /**
     * Set firstname
     *
     * @param string $firstname
     *
     * @return User
     */
    public function setFirstname($firstname)
    {
        $this->firstname = $firstname;
        return $this;
    }

    /**
     * Get firstname
     *
     * @return string
     */
    public function getFirstname()
    {
        return $this->firstname;
    }

    /**
     * Set surname
     *
     * @param string $surname
     *
     * @return User
     */
    public function setSurname($surname)
    {
        $this->surname = $surname;
        return $this;
    }

    /**
     * Get surname
     *
     * @return string
     */
    public function getSurname()
    {
        return $this->surname;
    }

    /**
     * Add list
     *
     * @param \VOCS\PlatformBundle\Entity\Lists $list
     *
     * @return User
     */
    public function addList(\VOCS\PlatformBundle\Entity\Lists $list)
    {
        $this->lists[] = $list;

        return $this;
    }

    /**
     * Remove list
     *
     * @param \VOCS\PlatformBundle\Entity\Lists $list
     */
    public function removeList(\VOCS\PlatformBundle\Entity\Lists $list)
    {
        $this->lists->removeElement($list);
    }

    /**
     * Get lists
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getLists()
    {
        return $this->lists;
    }

    /**
     * Add class
     *
     * @param \VOCS\PlatformBundle\Entity\Classes $class
     *
     * @return User
     */
    public function addClass(\VOCS\PlatformBundle\Entity\Classes $class)
    {

        $this->classes->add($class);

        return $this;
    }

    /**
     * Remove class
     *
     * @param \VOCS\PlatformBundle\Entity\Classes $class
     */
    public function removeClass(\VOCS\PlatformBundle\Entity\Classes $class)
    {
        $this->classes->removeElement($class);
    }

    /**
     * Get classes
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getClasses()
    {
        return $this->classes;
    }

}