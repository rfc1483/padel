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

        return $this->render('PadelLeagueBundle:Stages:manager.html.twig', array(
            'form' => $form->createView(),
            'id' => $id,
        ));
    }

}