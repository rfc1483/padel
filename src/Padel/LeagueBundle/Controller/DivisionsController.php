<?php

namespace Padel\LeagueBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Padel\LeagueBundle\Entity\Stage;
use Padel\LeagueBundle\Entity\Division;
use Padel\LeagueBundle\Form\DivisionType;

class DivisionsController extends Controller {

    public function managerAction($id) {

        $stage = new Stage();
        $manager = $this->get('doctrine')->getEntityManager();
        $division = $manager->getRepository('PadelLeagueBundle:Division')->findOneById($id);
        $stageId = $division->getStage()->getId();

        $form = $this->get('form.factory')
                ->create(new DivisionType(), $division);
        $request = $this->get('request');

        if ($request->getMethod() == 'POST') {
            $form->bindRequest($request);
            if ($form->isValid()) {
                $manager->flush();
                return $this->redirect($this->generateUrl('stage_manager', array('id' => $stageId)));
            }
        }

        return $this->render('PadelLeagueBundle:Divisions:manager.html.twig', array(
            'form' => $form->createView(),
            'id' => $id,
        ));
    }

    public function deleteAction($id) {

        $division = new Division();
        $request = $this->get('request');

        if ($request->getMethod() == 'POST') {
            $manager = $this->get('doctrine')->getEntityManager();
            $division = $manager->getRepository('PadelLeagueBundle:Division')->findOneById($id);
            $stageId = $division->getStage()->getId();

            if (!$division) {
                throw $this->createNotFoundException('No stage found for id ' . $division->getId());
            }

            $manager->remove($division);
            $manager->flush();
            return $this->redirect($this->generateUrl('league_manager', array('id' => $stageId)));
        }
    }

    public function createAction($id) {

        $division = new Division();

        $form = $this->get('form.factory')
                ->create(new DivisionType(), $division);
        $request = $this->get('request');

        if ($request->getMethod() == 'POST') {
            $stage = new Stage();
            $manager = $this->get('doctrine')->getEntityManager();
            $stage = $manager->getRepository('PadelLeagueBundle:League')->findOneById($id);
            $form->bindRequest($request);
            if ($form->isValid()) {
                $division->setStage($stage);
                $manager->persist($division);
                $manager->flush();
                return $this->redirect($this->generateUrl('stage_manager', array('id' => $id)));
            }
        }
        return $this->render('PadelLeagueBundle:Divisions:create.html.twig', array(
            'form' => $form->createView(),
            'id' => $id
        ));
    }

}