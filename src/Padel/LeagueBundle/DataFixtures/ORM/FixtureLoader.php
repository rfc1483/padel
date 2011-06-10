<?php

namespace Padel\LeagueBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Padel\LeagueBundle\Entity\User;
use Padel\LeagueBundle\Entity\Role;
use Padel\LeagueBundle\Entity\League;
use Symfony\Component\Security\Core\Encoder\MessageDigestPasswordEncoder;

class FixtureLoader implements FixtureInterface {

    public function load($manager) {
        // create the ROLE_ADMIN role
        $role = new Role();
        $role->setName('ROLE_ADMIN');

        $manager->persist($role);

        // create the ROLE_USER role
        $role = new Role();
        $role->setName('ROLE_USER');

        $manager->persist($role);
        $manager->flush();

        // create a user
        $user = new User();
        $user->setUsername('Frank Zappa');
        $user->setSalt(md5(time()));

        // encode and set the password for the user,
        // these settings match our config
        $encoder = new MessageDigestPasswordEncoder('sha512', true, 10);
        $password = $encoder->encodePassword('pass', $user->getSalt());
        $user->setPassword($password);

        $role = $manager->getRepository('PadelLeagueBundle:Role')->findOneByName('ROLE_USER');
        $user->getUserRoles()->add($role);

        $manager->persist($user);
        $manager->flush();

        // create a user with ROLE_ADMIN
        $user = new User();
        $user->setUsername('admin');
        $user->setSalt(md5(time()));

        // encode and set the password for the user,
        // these settings match our config
        $encoder = new MessageDigestPasswordEncoder('sha512', true, 10);
        $password = $encoder->encodePassword('pass_admin', $user->getSalt());
        $user->setPassword($password);

        $role = $manager->getRepository('PadelLeagueBundle:Role')->findOneByName('ROLE_ADMIN');
        $user->getUserRoles()->add($role);

        $manager->persist($user);
        $manager->flush();

        // Create leagues 
        $league = new League();
        $league->setName("League A");
        $league->setYear("2008");
        $league->setStatus("Inactive");

        $manager->persist($league);
        $manager->flush();
        $league = new League();
        $league->setName("League B");
        $league->setYear("2009");
        $league->setStatus("Inactive");

        $manager->persist($league);
        $manager->flush();

        $league = new League();
        $league->setName("League C");
        $league->setYear("2011");
        $league->setStatus("Active");

        $manager->persist($league);
        $manager->flush();
    }

}
