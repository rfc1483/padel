<?php

namespace Padel\LeagueBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="games")
 */
class Game {

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
     * @var string $club
     */
    private $club;
    /**
     * @ORM\Column(type="string")
     *
     * @var string $date
     */
    private $date;
    /**
     * @ORM\Column(type="string")
     *
     * @var string $result
     */
    private $result;
    /**
     * @ORM\Column(name="local_game1", type="string")
     *
     * @var string $localGame1
     */
    private $localGame1;
    /**
     * @ORM\Column(name="local_game2", type="string")
     *
     * @var string $localGame2
     */
    private $localGame2;
    /**
     * @ORM\Column(name="local_game3", type="string")
     *
     * @var string $localGame3
     */
    private $localGame3;
    /**
     * @ORM\Column(name="visitor_game1", type="string")
     *
     * @var string $visitorGame1
     */
    private $visitorGame1;
    /**
     * @ORM\Column(name="visitor_game2", type="string")
     *
     * @var string $visitorGame2
     */
    private $visitorGame2;
    /**
     * @ORM\Column(name="visitor_game3", type="string")
     *
     * @var string $visitorGame3
     */
    private $visitorGame3;
    /**
     * @ORM\Column(name="tie_break1", type="string")
     *
     * @var string $tieBreak1
     */
    private $tieBreak1;
    /**
     * @ORM\Column("tie_break2", type="string")
     *
     * @var string $tieBreak2
     */
    private $tieBreak2;
    /**
     * @ORM\Column("tie_break3", type="string")
     *
     * @var string $tieBreak3
     */
    private $tieBreak3;
    /**
     * @ORM\Column(name="super_tie_break", type="string")
     *
     * @var string $superTieBreak
     */
    private $superTieBreak;
    /**
     *
     * @ORM\ManyToOne(targetEntity="Team")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="team_local_id", referencedColumnName="id")
     * })
     * 
     * @var Team
     */
    private $teamLocal;
    /**
     *
     * @ORM\ManyToOne(targetEntity="Team")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="team_visitor_id", referencedColumnName="id")
     * })
     * 
     * @var Team
     */
    private $teamVisitor;
    /**
     *
     * @ORM\ManyToOne(targetEntity="Team")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="team_winner_id", referencedColumnName="id")
     * })
     * 
     * @var Team
     */
    private $teamWinner;
    /**
     *
     * @ORM\ManyToOne(targetEntity="Team")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="team_looser_id", referencedColumnName="id")
     * })
     * 
     * @var Team
     */
    private $teamLooser;
    /**
     * @ORM\ManyToOne(targetEntity="Division")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="division_id", referencedColumnName="id")
     * })
     */
    private $divisionDivision;
    /**
     * @ORM\ManyToOne(targetEntity="Stage")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="stage_id", referencedColumnName="id")
     * })
     */
    private $stagesStage;


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
     * Set club
     *
     * @param string $club
     */
    public function setClub($club)
    {
        $this->club = $club;
    }

    /**
     * Get club
     *
     * @return string $club
     */
    public function getClub()
    {
        return $this->club;
    }

    /**
     * Set date
     *
     * @param string $date
     */
    public function setDate($date)
    {
        $this->date = $date;
    }

    /**
     * Get date
     *
     * @return string $date
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Set result
     *
     * @param string $result
     */
    public function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * Get result
     *
     * @return string $result
     */
    public function getResult()
    {
        return $this->result;
    }

    /**
     * Set localGame1
     *
     * @param string $localGame1
     */
    public function setLocalGame1($localGame1)
    {
        $this->localGame1 = $localGame1;
    }

    /**
     * Get localGame1
     *
     * @return string $localGame1
     */
    public function getLocalGame1()
    {
        return $this->localGame1;
    }

    /**
     * Set localGame2
     *
     * @param string $localGame2
     */
    public function setLocalGame2($localGame2)
    {
        $this->localGame2 = $localGame2;
    }

    /**
     * Get localGame2
     *
     * @return string $localGame2
     */
    public function getLocalGame2()
    {
        return $this->localGame2;
    }

    /**
     * Set localGame3
     *
     * @param string $localGame3
     */
    public function setLocalGame3($localGame3)
    {
        $this->localGame3 = $localGame3;
    }

    /**
     * Get localGame3
     *
     * @return string $localGame3
     */
    public function getLocalGame3()
    {
        return $this->localGame3;
    }

    /**
     * Set visitorGame1
     *
     * @param string $visitorGame1
     */
    public function setVisitorGame1($visitorGame1)
    {
        $this->visitorGame1 = $visitorGame1;
    }

    /**
     * Get visitorGame1
     *
     * @return string $visitorGame1
     */
    public function getVisitorGame1()
    {
        return $this->visitorGame1;
    }

    /**
     * Set visitorGame2
     *
     * @param string $visitorGame2
     */
    public function setVisitorGame2($visitorGame2)
    {
        $this->visitorGame2 = $visitorGame2;
    }

    /**
     * Get visitorGame2
     *
     * @return string $visitorGame2
     */
    public function getVisitorGame2()
    {
        return $this->visitorGame2;
    }

    /**
     * Set visitorGame3
     *
     * @param string $visitorGame3
     */
    public function setVisitorGame3($visitorGame3)
    {
        $this->visitorGame3 = $visitorGame3;
    }

    /**
     * Get visitorGame3
     *
     * @return string $visitorGame3
     */
    public function getVisitorGame3()
    {
        return $this->visitorGame3;
    }

    /**
     * Set tieBreak1
     *
     * @param string $tieBreak1
     */
    public function setTieBreak1($tieBreak1)
    {
        $this->tieBreak1 = $tieBreak1;
    }

    /**
     * Get tieBreak1
     *
     * @return string $tieBreak1
     */
    public function getTieBreak1()
    {
        return $this->tieBreak1;
    }

    /**
     * Set tieBreak2
     *
     * @param string $tieBreak2
     */
    public function setTieBreak2($tieBreak2)
    {
        $this->tieBreak2 = $tieBreak2;
    }

    /**
     * Get tieBreak2
     *
     * @return string $tieBreak2
     */
    public function getTieBreak2()
    {
        return $this->tieBreak2;
    }

    /**
     * Set tieBreak3
     *
     * @param string $tieBreak3
     */
    public function setTieBreak3($tieBreak3)
    {
        $this->tieBreak3 = $tieBreak3;
    }

    /**
     * Get tieBreak3
     *
     * @return string $tieBreak3
     */
    public function getTieBreak3()
    {
        return $this->tieBreak3;
    }

    /**
     * Set superTieBreak
     *
     * @param string $superTieBreak
     */
    public function setSuperTieBreak($superTieBreak)
    {
        $this->superTieBreak = $superTieBreak;
    }

    /**
     * Get superTieBreak
     *
     * @return string $superTieBreak
     */
    public function getSuperTieBreak()
    {
        return $this->superTieBreak;
    }

    /**
     * Set teamLocal
     *
     * @param Acme\TableBundle\Entity\Team $teamLocal
     */
    public function setTeamLocal(\Acme\TableBundle\Entity\Team $teamLocal)
    {
        $this->teamLocal = $teamLocal;
    }

    /**
     * Get teamLocal
     *
     * @return Acme\TableBundle\Entity\Team $teamLocal
     */
    public function getTeamLocal()
    {
        return $this->teamLocal;
    }

    /**
     * Set teamVisitor
     *
     * @param Acme\TableBundle\Entity\Team $teamVisitor
     */
    public function setTeamVisitor(\Acme\TableBundle\Entity\Team $teamVisitor)
    {
        $this->teamVisitor = $teamVisitor;
    }

    /**
     * Get teamVisitor
     *
     * @return Acme\TableBundle\Entity\Team $teamVisitor
     */
    public function getTeamVisitor()
    {
        return $this->teamVisitor;
    }

    /**
     * Set teamWinner
     *
     * @param Acme\TableBundle\Entity\Team $teamWinner
     */
    public function setTeamWinner(\Acme\TableBundle\Entity\Team $teamWinner)
    {
        $this->teamWinner = $teamWinner;
    }

    /**
     * Get teamWinner
     *
     * @return Acme\TableBundle\Entity\Team $teamWinner
     */
    public function getTeamWinner()
    {
        return $this->teamWinner;
    }

    /**
     * Set teamLooser
     *
     * @param Acme\TableBundle\Entity\Team $teamLooser
     */
    public function setTeamLooser(\Acme\TableBundle\Entity\Team $teamLooser)
    {
        $this->teamLooser = $teamLooser;
    }

    /**
     * Get teamLooser
     *
     * @return Acme\TableBundle\Entity\Team $teamLooser
     */
    public function getTeamLooser()
    {
        return $this->teamLooser;
    }

    /**
     * Set divisionDivision
     *
     * @param Acme\TableBundle\Entity\Division $divisionDivision
     */
    public function setDivisionDivision(\Acme\TableBundle\Entity\Division $divisionDivision)
    {
        $this->divisionDivision = $divisionDivision;
    }

    /**
     * Get divisionDivision
     *
     * @return Acme\TableBundle\Entity\Division $divisionDivision
     */
    public function getDivisionDivision()
    {
        return $this->divisionDivision;
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