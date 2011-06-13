<?php

namespace Padel\LeagueBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Padel\LeagueBundle\Entity\Stage;
use Padel\LeagueBundle\Entity\League;
use Padel\LeagueBundle\Form\StageType;

class StagesController extends Controller {

    public function createAction($id) {

        $stage = new Stage();

        $form = $this->get('form.factory')
                ->create(new StageType(), $stage);
        $request = $this->get('request');

        if ($request->getMethod() == 'POST') {
            $league = new League();
            $manager = $this->get('doctrine')->getEntityManager();
            $league = $manager->getRepository('PadelLeagueBundle:League')->findOneById($id);
            $form->bindRequest($request);
            if ($form->isValid()) {
                $stage->setLeague($league);
                $manager->persist($stage);
                $manager->flush();
                return $this->redirect($this->generateUrl('league_manager', array('id' => $id)));
            }
        }
        return $this->render('PadelLeagueBundle:Stages:create.html.twig', array(
            'form' => $form->createView(),
            'id' => $id
        ));
    }

    public function deleteAction($id) {

        $stage = new Stage();
        $request = $this->get('request');

        if ($request->getMethod() == 'POST') {
            $manager = $this->get('doctrine')->getEntityManager();
            $stage = $manager->getRepository('PadelLeagueBundle:Stage')->findOneById($id);
            $leagueId = $stage->getLeague()->getId();

            if (!$stage) {
                throw $this->createNotFoundException('No division found for id ' . $stage->getId());
            }

            $manager->remove($stage);
            $manager->flush();
            return $this->redirect($this->generateUrl('league_manager', array('id' => $leagueId)));
        }
    }

    public function managerAction($id) {

        $stage = new Stage();
        $manager = $this->get('doctrine')->getEntityManager();
        $stage = $manager->getRepository('PadelLeagueBundle:Stage')->findOneById($id);
        $leagueId = $stage->getLeague()->getId();

        $form = $this->get('form.factory')
                ->create(new StageType(), $stage);
        $request = $this->get('request');

        if ($request->getMethod() == 'POST') {
            $form->bindRequest($request);
            if ($form->isValid()) {
                $manager->flush();
                return $this->redirect($this->generateUrl('league_manager', array('id' => $leagueId)));
            }
        }

        $divisions = $this->get('doctrine')
                ->getEntityManager()
                ->getRepository('PadelLeagueBundle:Division')
                ->findByStage($stage->getId());

        $error = '';
        if (!$divisions) {
            $error = "The are no divisions in this stage at the moment.";
        }

        return $this->render('PadelLeagueBundle:Stages:manager.html.twig', array(
            'form' => $form->createView(),
            'id' => $id,
            'divisions' => $divisions,
            'error' => $error
        ));
    }

}
