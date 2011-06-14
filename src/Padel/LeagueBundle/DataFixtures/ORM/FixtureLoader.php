<?php

namespace Padel\LeagueBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Padel\LeagueBundle\Entity\User;
use Padel\LeagueBundle\Entity\Role;
use Padel\LeagueBundle\Entity\League;
use Padel\LeagueBundle\Entity\Stage;
use Padel\LeagueBundle\Entity\Division;
use Padel\LeagueBundle\Entity\Team;
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
        $password = $encoder->encodePassword('admin', $user->getSalt());
        $user->setPassword($password);

        $role = $manager->getRepository('PadelLeagueBundle:Role')->findOneByName('ROLE_ADMIN');
        $user->getUserRoles()->add($role);

        $manager->persist($user);
        $manager->flush();
        
        // create a user with ROLE_USER
        $user = new User();
        $user->setUsername('vera');
        $user->setSalt(md5(time()));
        
        $encoder = new MessageDigestPasswordEncoder('sha512', true, 10);
        $password = $encoder->encodePassword('user', $user->getSalt());
        $user->setPassword($password);

        $role = $manager->getRepository('PadelLeagueBundle:Role')->findOneByName('ROLE_USER');
        $user->getUserRoles()->add($role);

        $manager->persist($user);
        $manager->flush();
        
        // create a user with ROLE_USER
        $user = new User();
        $user->setUsername('lopez');
        $user->setSalt(md5(time()));
        
        $encoder = new MessageDigestPasswordEncoder('sha512', true, 10);
        $password = $encoder->encodePassword('user', $user->getSalt());
        $user->setPassword($password);

        $role = $manager->getRepository('PadelLeagueBundle:Role')->findOneByName('ROLE_USER');
        $user->getUserRoles()->add($role);

        $manager->persist($user);
        $manager->flush();
        
        // create a user with ROLE_USER
        $user = new User();
        $user->setUsername('ramos');
        $user->setSalt(md5(time()));
        
        $encoder = new MessageDigestPasswordEncoder('sha512', true, 10);
        $password = $encoder->encodePassword('user', $user->getSalt());
        $user->setPassword($password);

        $role = $manager->getRepository('PadelLeagueBundle:Role')->findOneByName('ROLE_USER');
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

        // Create stages
        $stage = new Stage();
        $stage->setNumber("1");
        $stage->setStartDate("15/5/2011");
        $stage->setFinishDate("30/5/2011");
        $stage->setYear("2011");
        $stage->setStatus("Active");
        $stage->setLeague($league);
        
        $manager->persist($stage);
        $manager->flush();

        $stage = new Stage();
        $stage->setNumber("2");
        $stage->setStartDate("1/6/2011");
        $stage->setFinishDate("15/6/2011");
        $stage->setYear("2011");
        $stage->setStatus("Inactive");
        $stage->setLeague($league);

        $manager->persist($stage);
        $manager->flush();
        
        $stage = new Stage();
        $stage->setNumber("3");
        $stage->setStartDate("15/6/2011");
        $stage->setFinishDate("30/6/2011");
        $stage->setYear("2011");
        $stage->setStatus("Inactive");
        $stage->setLeague($league);
        
        $manager->persist($stage);
        $manager->flush();       
        
        // Create divisions
        $division = new Division();
        $division->setLevel("1");
        $division->setStage($stage);
        
        $manager->persist($division);
        $manager->flush();
        
        $division = new Division();
        $division->setLevel("2");
        $division->setStage($stage);
        
        $manager->persist($division);
        $manager->flush();
        
        $division = new Division();
        $division->setLevel("3");
        $division->setStage($stage);
        
        $manager->persist($division);
        $manager->flush();
        
        // Create teams
        $team = new Team();
        $team->setName1("Mirentxu");
        $team->setSurname1("Vera");
        $team->setPhone1("9863030");
        $team->setEmail1("vera@gmail.com");
        $team->setName2("Maria Jose");
        $team->setSurname2("Moure");
        $team->setPhone2("9863031");
        $team->setEmail2("moure@gmail.com");
        
        $user = $manager->getRepository('PadelLeagueBundle:User')->findOneByUsername('vera');
        $team->setUser($user);
        $league->setName("League C");
        $league = $manager->getRepository('PadelLeagueBundle:League')->findOneByName('League C');
        $team->setLeague($league);
        $stage->setLeague($league);
        
        $manager->persist($team);
        $manager->flush();
    }

}
