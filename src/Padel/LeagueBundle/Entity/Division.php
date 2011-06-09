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
     * @ORM\Column(type="integer")
     *
     * @var integer $level
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
     * @var Stage
     */
    private $stagesStage;

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
     * @param integer $level
     */
    public function setLevel($level)
    {
        $this->level = $level;
    }

    /**
     * Get level
     *
     * @return integer $level
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
     * Set stagesStage
     *
     * @param Acme\TableBundle\Entity\Stage $stagesStage
     */
    public function setStagesStage(\Acme\TableBundle\Entity\Stage $stagesStage)
    {
        $this->stagesStage = $stagesStage;
    }

    /**
     * Get stagesStage
     *
     * @return Acme\TableBundle\Entity\Stage $stagesStage
     */
    public function getStagesStage()
    {
        return $this->stagesStage;
    }
}