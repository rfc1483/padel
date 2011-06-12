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

}
