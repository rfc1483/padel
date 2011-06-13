<?php

namespace Padel\LeagueBundle\Entity;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="divisions")
 */
class Division
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue
     *
     * @var integer $id
     */
    private $id;

    /**
     * @ORM\Column(type="string")
     *
     * @var string $level
     */
    private $level;

    /**
     * @ORM\ManyToMany(targetEntity="Team", inversedBy="divisionsDivision")
     * @ORM\JoinTable(name="divisions_teams",
     *   joinColumns={
     *     @ORM\JoinColumn(name="division_id", referencedColumnName="id")
     *   },
     *   inverseJoinColumns={
     *     @ORM\JoinColumn(name="team_id", referencedColumnName="id")
     *   }
     * )
     *
     * @var Team
     */
    private $teamsTeam;

    /**
     * @ORM\ManyToOne(targetEntity="Stage")
     * @ORM\JoinColumns({
     * @ORM\JoinColumn(name="stage_id", referencedColumnName="id")
     * })
     *
     * @var stage
     */
    private $stage;

    public function __construct()
    {
        $this->teamsTeam = new \Doctrine\Common\Collections\ArrayCollection();
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
     * Set level
     *
     * @param string $level
     */
    public function setLevel($level)
    {
        $this->level = $level;
    }

    /**
     * Get level
     *
     * @return string $level
     */
    public function getLevel()
    {
        return $this->level;
    }

    /**
     * Add teamsTeam
     *
     * @param Acme\TableBundle\Entity\Team $teamsTeam
     */
    public function addTeamsTeam(\Acme\TableBundle\Entity\Team $teamsTeam)
    {
        $this->teamsTeam[] = $teamsTeam;
    }

    /**
     * Get teamsTeam
     *
     * @return Doctrine\Common\Collections\Collection $teamsTeam
     */
    public function getTeamsTeam()
    {
        return $this->teamsTeam;
    }

    /**
     * Set stage
     *
     * @param \Padel\LeagueBundle\Entity\Stage $stage
     */
    public function setStage(\Padel\LeagueBundle\Entity\Stage $stage)
    {
        $this->stage = $stage;
    }

    /**
     * Get stage
     *
     * @return \Padel\LeagueBundle\Entity\Stage $stage
     */
    public function getStage()
    {
        return $this->stage;
    }
}