<?php

namespace Padel\LeagueBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Security\Core\SecurityContext;
use Padel\LeagueBundle\Entity\User;
use Padel\LeagueBundle\Form\UserType;
use Padel\LeagueBundle\Entity\Role;

class LeaguesController extends Controller {

    public function indexAction() {
        $leagues = $this->get('doctrine')
                ->getEntityManager()
                ->getRepository('PadelLeagueBundle:League')
                ->findAll();

        if (!$leagues) {
            $error = "The are no leagues at the moment.";
        }
        $error = '';
        return $this->render('PadelLeagueBundle:Leagues:index.html.twig', array(
            'leagues' => $leagues,
            'error' => $error
        ));
    }

    public function createAction() {
        return $this->render('PadelLeagueBundle:Leagues:create.html.twig');
    }

    public function managerAction($id) {
        return $this->render('PadelLeagueBundle:Leagues:manager.html.twig', array(
            'id' => $id
        ));
    }
}
