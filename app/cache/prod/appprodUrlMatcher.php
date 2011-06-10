<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appprodUrlMatcher
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appprodUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = array();

        // homepage
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'homepage');
            }
            return array (  '_controller' => 'Padel\\LeagueBundle\\Controller\\DefaultController::indexAction',  '_route' => 'homepage',);
        }

        // register
        if (rtrim($pathinfo, '/') === '/register') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'register');
            }
            return array (  '_controller' => 'Padel\\LeagueBundle\\Controller\\DefaultController::registerAction',  '_route' => 'register',);
        }

        // classification
        if (rtrim($pathinfo, '/') === '/classification') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'classification');
            }
            return array (  '_controller' => 'Padel\\LeagueBundle\\Controller\\DefaultController::classificationAction',  '_route' => 'classification',);
        }

        // outcome
        if (rtrim($pathinfo, '/') === '/outcome') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'outcome');
            }
            return array (  '_controller' => 'Padel\\LeagueBundle\\Controller\\DefaultController::outcomeAction',  '_route' => 'outcome',);
        }

        // teams
        if (rtrim($pathinfo, '/') === '/teams') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'teams');
            }
            return array (  '_controller' => 'Padel\\LeagueBundle\\Controller\\DefaultController::teamsAction',  '_route' => 'teams',);
        }

        // leagues
        if (rtrim($pathinfo, '/') === '/leagues') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'leagues');
            }
            return array (  '_controller' => 'Padel\\LeagueBundle\\Controller\\LeaguesController::indexAction',  '_route' => 'leagues',);
        }

        // create_league
        if (rtrim($pathinfo, '/') === '/create_league') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'create_league');
            }
            return array (  '_controller' => 'Padel\\LeagueBundle\\Controller\\LeaguesController::createAction',  '_route' => 'create_league',);
        }

        // login
        if (rtrim($pathinfo, '/') === '/login') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'login');
            }
            return array (  '_controller' => 'Padel\\LeagueBundle\\Controller\\DefaultController::loginAction',  '_route' => 'login',);
        }

        // logout
        if ($pathinfo === '/logout') {
            return array('_route' => 'logout');
        }

        // login_check
        if ($pathinfo === '/login_check') {
            return array('_route' => 'login_check');
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
