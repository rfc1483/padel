<?php

namespace Padel\LeagueBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Padel\LeagueBundle\Entity\League;

class TeamsController extends Controller {

    public function indexAction() {
        return $this->render("PadelLeagueBundle:Teams:index.html.twig");
    }

}