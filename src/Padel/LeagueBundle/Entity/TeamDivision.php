<?php

namespace Padel\LeagueBundle\Entity;

class TeamDivision
{
    private $team;

    private $division;
    
    public function getTeam()
    {
        return $this->team;
    }
    
    public function setTeam($team) 
    {
        $this->team = $team;
    }

    public function getDivision()
    {
        return $this->division;
    }

    public function setDivision($division)
    {
        $this->division = $division;
    }
}