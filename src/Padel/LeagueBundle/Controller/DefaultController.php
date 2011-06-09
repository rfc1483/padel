<?php

/*
 * This file is part of the Symfony framework.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace Padel\LeagueBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Security\Core\SecurityContext;
use Padel\LeagueBundle\Entity\User;
use Padel\LeagueBundle\Form\UserType;
use Padel\LeagueBundle\Entity\Role;

class DefaultController extends Controller {

    public function indexAction() {
        return $this->render('PadelLeagueBundle:Default:index.html.twig');
    }

    public function loginAction() {
        if ($this->get('request')->attributes->has(SecurityContext::AUTHENTICATION_ERROR)) {
            $error = $this->get('request')->attributes->get(SecurityContext::AUTHENTICATION_ERROR);
        } else {
            $error = $this->get('request')->getSession()->get(SecurityContext::AUTHENTICATION_ERROR);
        }

        return $this->render('PadelLeagueBundle:Default:login.html.twig', array(
            'last_username' => $this->get('request')
                    ->getSession()
                    ->get(SecurityContext::LAST_USERNAME),
            'error' => $error
        ));
    }

    public function registerAction() {

        $user = new User();

        $form = $this->get('form.factory')
                ->create(new UserType(), $user);
        $request = $this->get('request');

        if ($request->getMethod() == 'POST') {
            $form->bindRequest($request);
            if ($form->isValid()) {
                $manager = $this->get('doctrine')->getEntityManager();
                $role = new Role();
                $role = $manager->getRepository('PadelLeagueBundle:Role')->findOneByName('ROLE_USER');
                
                // Assign salt to the user
                $user->setSalt(md5(time()));

                // encode and set the password for the user,
                // these settings match our config
                $factory = $this->get('security.encoder_factory');
                $encoder = $factory->getEncoder($user);
                $password = $encoder->encodePassword($user->getPassword(), $user->getSalt());
                $user->setPassword($password);
                $user->getUserRoles()->add($role);

                $manager->persist($user);
                $manager->flush();
                return $this->redirect($this->generateUrl('homepage'));
            }
        }
        return $this->render('PadelLeagueBundle:Default:register.html.twig', array(
            'form' => $form->createView()
        ));
    }

}
