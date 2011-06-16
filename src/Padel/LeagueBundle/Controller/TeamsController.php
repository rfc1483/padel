<?php

namespace Padel\LeagueBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Padel\LeagueBundle\Entity\League;
use Padel\LeagueBundle\Entity\Team;
use Padel\LeagueBundle\Entity\TeamDivision;

class TeamsController extends Controller {

    public function indexAction() {
        $leagues = $this->get('doctrine')
                ->getEntityManager()
                ->getRepository('PadelLeagueBundle:League')
                ->findAll();

        $leaguesArray = array();
        foreach ($leagues as $league) {
            $leaguesArray[$league->getId()] = $league->getName();
        }

        $form = $this->createFormBuilder()
                        ->add('Leagues', 'choice', array(
                            'choices' => $leaguesArray,
                            'multiple' => false,
                        ))->getForm();

        $request = $this->get('request');

        if ($request->getMethod() == 'POST') {
            $leagueId = $_REQUEST["form"]["Leagues"];
            return $this->redirect($this->generateUrl('team_manager', array('id' => $leagueId)));
        }

        return $this->render("PadelLeagueBundle:Teams:index.html.twig", array(
            'leagues' => $leagues,
            'form' => $form->createView()
        ));
    }

    public function managerAction($id) {
        $teams = new Team();
        $manager = $this->get('doctrine')->getEntityManager();
        $teams = $manager->getRepository('PadelLeagueBundle:Team')->findByLeague($id);
        $error = '';
        if (!$teams) {
            $error = "The are no teams in this league at the moment.";
        }

        // create a product and give it some dummy data for this example
        $teamDivision = new TeamDivision();
        $teamDivision->setDivision('Division 1');
        $teamDivision->setTeam('Maria Xose Bugallo / Marta Fernandez');
        $form = $this->createFormBuilder($teamDivision)
                ->add('team', 'text')
                ->add('division', 'text')
                ->getForm();

        return $this->render("PadelLeagueBundle:Teams:manager.html.twig", array(
            'teams' => $teams,
            'form' => $form->createView(),
            'error' => $error
        ));
    }

    public function assignAction() {
        return $this->render("PadelLeagueBundle:Teams:assign.html.twig");
    }

}