<?php

namespace Padel\LeagueBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Security\Core\SecurityContext;
use Padel\LeagueBundle\Entity\User;
use Padel\LeagueBundle\Form\UserType;
use Padel\LeagueBundle\Entity\Role;
use Padel\LeagueBundle\Form\LeagueType;
use Padel\LeagueBundle\Entity\League;

class LeaguesController extends Controller {

    public function indexAction() {
        $leagues = $this->get('doctrine')
                ->getEntityManager()
                ->getRepository('PadelLeagueBundle:League')
                ->findAll();

        $error = '';
        if (!$leagues) {
            $error = "The are no leagues at the moment.";
        }
        return $this->render('PadelLeagueBundle:Leagues:index.html.twig', array(
            'leagues' => $leagues,
            'error' => $error
        ));
    }

    public function managerAction($id) {

        $league = new League();
        $manager = $this->get('doctrine')->getEntityManager();
        $league = $manager->getRepository('PadelLeagueBundle:League')->findOneById($id);

        $form = $this->get('form.factory')
                ->create(new LeagueType(), $league);
        $request = $this->get('request');

        if ($request->getMethod() == 'POST') {
            $form->bindRequest($request);
            if ($form->isValid()) {
                $manager->flush();
                return $this->redirect($this->generateUrl('leagues'));
            }
        }
        
        $stages = $this->get('doctrine')
                ->getEntityManager()
                ->getRepository('PadelLeagueBundle:Stage')
                ->findAll();

        $error = '';
        if (!$stages) {
            $error = "The are no stages in this league at the moment.";
        }
        
        return $this->render('PadelLeagueBundle:Leagues:manager.html.twig', array(
            'form' => $form->createView(),
            'id' => $id,
            'stages' => $stages,
            'error' => $error
        ));
    }

    public function deleteAction($id) {

        $league = new League();
        $request = $this->get('request');

        if ($request->getMethod() == 'POST') {
            $manager = $this->get('doctrine')->getEntityManager();
            $league = $manager->getRepository('PadelLeagueBundle:League')->findOneById($id);

            if (!$league) {
                throw $this->createNotFoundException('No product found for id ' . $league->getId());
            }

            $manager->remove($league);
            $manager->flush();
            return $this->redirect($this->generateUrl('leagues'));
        }
    }

    public function createAction() {

        $league = new League();

        $form = $this->get('form.factory')
                ->create(new LeagueType(), $league);
        $request = $this->get('request');

        if ($request->getMethod() == 'POST') {
            $form->bindRequest($request);
            if ($form->isValid()) {
                $manager = $this->get('doctrine')->getEntityManager();
                $manager->persist($league);
                $manager->flush();
                return $this->redirect($this->generateUrl('leagues'));
            }
        }
        return $this->render('PadelLeagueBundle:Leagues:create.html.twig', array(
            'form' => $form->createView()
        ));
    }

}
