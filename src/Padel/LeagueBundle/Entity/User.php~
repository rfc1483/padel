<?php

namespace Padel\LeagueBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Security\Core\User\UserInterface;

/**
 * @ORM\Entity
 * @ORM\Table(name="users")
 */
class User implements UserInterface {

    /**
     * @ORM\ManyToMany(targetEntity="Role")
     * @ORM\JoinTable(name="user_role",
     *     joinColumns={@ORM\JoinColumn(name="user_id", referencedColumnName="id")},
     *     inverseJoinColumns={@ORM\JoinColumn(name="role_id", referencedColumnName="id")}
     * )
     *
     * @var ArrayCollection $userRoles
     */
    private $userRoles;
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue
     * 
     * @var integer $id
     */
    private $id;
    /**
     * @ORM\Column(type="datetime")
     * 
     * @var DateTime $createdAt
     */
    private $createdAt;
    /**
     * @ORM\Column(type="string")
     *
     * @var string username
     */
    private $username;
    /**
     * @ORM\Column(type="string")
     *
     * @var string password
     */
    private $password;
    /**
     * @ORM\Column(type="string")
     *
     * @var string salt
     */
    private $salt;

    /**
     * Gets the id.
     * 
     * @return string The id
     */
    public function getId() {
        return $this->id;
    }

    /**
     * Gets an object representing the date and time the user was created.
     * 
     * @return DateTime A DateTime object
     */
    public function getCreatedAt() {
        return $this->createdAt;
    }

    /**
     * Gets the username.
     *
     * @return string The username.
     */
    public function getUsername() {
        return $this->username;
    }

    /**
     * Sets the username.
     *
     * @param string $value The username.
     */
    public function setUsername($value) {
        $this->username = $value;
    }

    /**
     * Gets the user password.
     *
     * @return string The password.
     */
    public function getPassword() {
        return $this->password;
    }

    /**
     * Sets the user password.
     *
     * @param string $value The password.
     */
    public function setPassword($value) {
        $this->password = $value;
    }

    /**
     * Gets the user salt.
     *
     * @return string The salt.
     */
    public function getSalt() {
        return $this->salt;
    }

    /**
     * Sets the user salt.
     *
     * @param string $value The salt.
     */
    public function setSalt($value) {
        $this->salt = $value;
    }

    /**
     * Gets the user roles.
     *
     * @return ArrayCollection A Doctrine ArrayCollection
     */
    public function getUserRoles() {
        return $this->userRoles;
    }

    /**
     * Constructs a new instance of User
     */
    public function __construct() {
        $this->posts = new ArrayCollection();
        $this->userRoles = new ArrayCollection();
        $this->createdAt = new \DateTime();
    }

    /**
     * Erases the user credentials.
     */
    public function eraseCredentials() {
        
    }

    /**
     * Gets an array of roles.
     * 
     * @return array An array of Role objects
     */
    public function getRoles() {
        return $this->getUserRoles()->toArray();
    }

    /**
     * Compares this user to another to determine if they are the same.
     * 
     * @param UserInterface $user The user
     * @return boolean True if equal, false othwerwise.
     */
    public function equals(UserInterface $user) {
        return md5($this->getUsername()) == md5($user->getUsername());
    }


    /**
     * Set createdAt
     *
     * @param datetime $createdAt
     */
    public function setCreatedAt($createdAt)
    {
        $this->createdAt = $createdAt;
    }

    /**
     * Add userRoles
     *
     * @param Padel\LeagueBundle\Entity\Role $userRoles
     */
    public function addUserRoles(\Padel\LeagueBundle\Entity\Role $userRoles)
    {
        $this->userRoles[] = $userRoles;
    }
}