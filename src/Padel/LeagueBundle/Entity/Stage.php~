<?php

namespace Padel\LeagueBundle\Entity;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="stages")
 */
class Stage
{
    /**
     *
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
     * @var string $number
     */
    private $number;

    /**
     * @ORM\Column(name="start_date", type="string")
     *
     * @var string $startDate
     */
    private $startDate;

    /**
     * @ORM\Column(name="finish_date", type="string")
     *
     * @var string $finishDate
     */
    private $finishDate;

    /**
     * @ORM\Column(type="string")
     *
     * @var string $year
     */
    private $year;

    /**
     * @ORM\Column(type="string")
     *
     * @var string $status
     */
    private $status;

    /**
     * @ORM\ManyToOne(targetEntity="League")
     *
     * @var League
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="league_id", referencedColumnName="id", onDelete="CASCADE")
     * })
     */
    private $league;

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
     * Set number
     *
     * @param integer $number
     */
    public function setNumber($number)
    {
        $this->number = $number;
    }

    /**
     * Get number
     *
     * @return integer $number
     */
    public function getNumber()
    {
        return $this->number;
    }

    /**
     * Set startDate
     *
     * @param string $startDate
     */
    public function setStartDate($startDate)
    {
        $this->startDate = $startDate;
    }

    /**
     * Get startDate
     *
     * @return string $startDate
     */
    public function getStartDate()
    {
        return $this->startDate;
    }

    /**
     * Set finishDate
     *
     * @param string $finishDate
     */
    public function setFinishDate($finishDate)
    {
        $this->finishDate = $finishDate;
    }

    /**
     * Get finishDate
     *
     * @return string $finishDate
     */
    public function getFinishDate()
    {
        return $this->finishDate;
    }

    /**
     * Set year
     *
     * @param string $year
     */
    public function setYear($year)
    {
        $this->year = $year;
    }

    /**
     * Get year
     *
     * @return string $year
     */
    public function getYear()
    {
        return $this->year;
    }

    /**
     * Set status
     *
     * @param string $status
     */
    public function setStatus($status)
    {
        $this->status = $status;
    }

    /**
     * Get status
     *
     * @return string $status
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Set league
     *
     * @param \Padel\LeagueBundle\Entity\League $league
     */
    public function setLeague(\Padel\LeagueBundle\Entity\League $league)
    {
        $this->league = $league;
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
}