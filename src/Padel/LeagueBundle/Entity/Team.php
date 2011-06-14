<?php

namespace Padel\LeagueBundle\Entity;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="teams")
 */
class Team
{
    /**
     * @ORM\Column(type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue
     *
     * @var integer $id
     */
    private $id;

    /**
     * @ORM\Column(type="string")
     *
     * @var string $name1
     */
    private $name1;

    /**
     * @ORM\Column(type="string")
     *
     * @var string $surname1
     */
    private $surname1;

    /**
     * @ORM\Column(type="string")
     *
     * @var string $phone1
     */
    private $phone1;

    /**
     * @ORM\Column(type="string")
     *
     * @var string $email1
     */
    private $email1;

    /**
     * @ORM\Column(type="string")
     *
     * @var string $name2
     */
    private $name2;

    /**
     * @ORM\Column(type="string")
     *
     * @var string $surname2
     */
    private $surname2;

    /**
     * @ORM\Column(type="string")
     *
     * @var string $phone2
     */
    private $phone2;

    /**
     * @ORM\Column(type="string")
     *
     * @var string $email2
     */
    private $email2;

    /**
     * @ORM\ManyToMany(targetEntity="Division", mappedBy="teamsTeam")
     *
     * @var Division
     */
    private $divisionsDivision;

    /**
     * @ORM\ManyToOne(targetEntity="League")
     * @ORM\JoinColumns({
     * @ORM\JoinColumn(name="league_id", referencedColumnName="id")
     * })
     * 
     * @var League $league
     */
    private $league;

    /**
     * @ORM\ManyToOne(targetEntity="User")
     * @ORM\JoinColumns({
     * @ORM\JoinColumn(name="user_id", referencedColumnName="id")
     * })
     *
     * @var User
     */
    private $user;

    public function __construct()
    {
        $this->divisionsDivision = new \Doctrine\Common\Collections\ArrayCollection();
    }
    

    /**
     * Get id
     *
     * @return integer $id
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set name1
     *
     * @param string $name1
     */
    public function setName1($name1)
    {
        $this->name1 = $name1;
    }

    /**
     * Get name1
     *
     * @return string $name1
     */
    public function getName1()
    {
        return $this->name1;
    }

    /**
     * Set surname1
     *
     * @param string $surname1
     */
    public function setSurname1($surname1)
    {
        $this->surname1 = $surname1;
    }

    /**
     * Get surname1
     *
     * @return string $surname1
     */
    public function getSurname1()
    {
        return $this->surname1;
    }

    /**
     * Set phone1
     *
     * @param string $phone1
     */
    public function setPhone1($phone1)
    {
        $this->phone1 = $phone1;
    }

    /**
     * Get phone1
     *
     * @return string $phone1
     */
    public function getPhone1()
    {
        return $this->phone1;
    }

    /**
     * Set email1
     *
     * @param string $email1
     */
    public function setEmail1($email1)
    {
        $this->email1 = $email1;
    }

    /**
     * Get email1
     *
     * @return string $email1
     */
    public function getEmail1()
    {
        return $this->email1;
    }

    /**
     * Set name2
     *
     * @param string $name2
     */
    public function setName2($name2)
    {
        $this->name2 = $name2;
    }

    /**
     * Get name2
     *
     * @return string $name2
     */
    public function getName2()
    {
        return $this->name2;
    }

    /**
     * Set surname2
     *
     * @param string $surname2
     */
    public function setSurname2($surname2)
    {
        $this->surname2 = $surname2;
    }

    /**
     * Get surname2
     *
     * @return string $surname2
     */
    public function getSurname2()
    {
        return $this->surname2;
    }

    /**
     * Set phone2
     *
     * @param string $phone2
     */
    public function setPhone2($phone2)
    {
        $this->phone2 = $phone2;
    }

    /**
     * Get phone2
     *
     * @return string $phone2
     */
    public function getPhone2()
    {
        return $this->phone2;
    }

    /**
     * Set email2
     *
     * @param string $email2
     */
    public function setEmail2($email2)
    {
        $this->email2 = $email2;
    }

    /**
     * Get email2
     *
     * @return string $email2
     */
    public function getEmail2()
    {
        return $this->email2;
    }

    /**
     * Add divisionsDivision
     *
     * @param Acme\TableBundle\Entity\Division $divisionsDivision
     */
    public function addDivisionsDivision(\Acme\TableBundle\Entity\Division $divisionsDivision)
    {
        $this->divisionsDivision[] = $divisionsDivision;
    }

    /**
     * Get divisionsDivision
     *
     * @return Doctrine\Common\Collections\Collection $divisionsDivision
     */
    public function getDivisionsDivision()
    {
        return $this->divisionsDivision;
    }

    /**
     * Set league
     *
     * @param \Padel\LeagueBundle\Entity\League $league
     */
    public function setLeague(\Padel\LeagueBundle\Entity\League $league)
    {
        $this->leagueLeague = $league;
    }

    /**
     * Get league
     *
     * @return \Padel\LeagueBundle\Entity\League $league
     */
    public function getLeague()
    {
        return $this->league;
    }

    /**
     * Set user
     *
     * @param \Padel\LeagueBundle\Entity\User $user
     */
    public function setUser(\Padel\LeagueBundle\Entity\User $user)
    {
        $this->user = $user;
    }

    /**
     * Get user
     *
     * @return \Padel\LeagueBundle\Entity\User $user
     */
    public function getUser()
    {
        return $this->user;
    }
}