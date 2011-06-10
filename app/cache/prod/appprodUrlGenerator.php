<?php

use Symfony\Component\Routing\RequestContext;
use Symfony\Component\Routing\Exception\RouteNotFoundException;


/**
 * appprodUrlGenerator
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appprodUrlGenerator extends Symfony\Component\Routing\Generator\UrlGenerator
{
    static private $declaredRouteNames = array(
       'homepage' => true,
       'register' => true,
       'classification' => true,
       'outcome' => true,
       'teams' => true,
       'leagues' => true,
       'create_league' => true,
       'login' => true,
       'logout' => true,
       'login_check' => true,
    );

    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function generate($name, array $parameters = array(), $absolute = false)
    {
        if (!isset(self::$declaredRouteNames[$name])) {
            throw new RouteNotFoundException(sprintf('Route "%s" does not exist.', $name));
        }

        $escapedName = str_replace('.', '__', $name);

        list($variables, $defaults, $requirements, $tokens) = $this->{'get'.$escapedName.'RouteInfo'}();

        return $this->doGenerate($variables, $defaults, $requirements, $tokens, $parameters, $name, $absolute);
    }

    private function gethomepageRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Padel\\LeagueBundle\\Controller\\DefaultController::indexAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/',  ),));
    }

    private function getregisterRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Padel\\LeagueBundle\\Controller\\DefaultController::registerAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/register/',  ),));
    }

    private function getclassificationRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Padel\\LeagueBundle\\Controller\\DefaultController::classificationAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/classification/',  ),));
    }

    private function getoutcomeRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Padel\\LeagueBundle\\Controller\\DefaultController::outcomeAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/outcome/',  ),));
    }

    private function getteamsRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Padel\\LeagueBundle\\Controller\\DefaultController::teamsAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/teams/',  ),));
    }

    private function getleaguesRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Padel\\LeagueBundle\\Controller\\LeaguesController::indexAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/leagues/',  ),));
    }

    private function getcreate_leagueRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Padel\\LeagueBundle\\Controller\\LeaguesController::createAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/create_league/',  ),));
    }

    private function getloginRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Padel\\LeagueBundle\\Controller\\DefaultController::loginAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/login/',  ),));
    }

    private function getlogoutRouteInfo()
    {
        return array(array (), array (), array (), array (  0 =>   array (    0 => 'text',    1 => '/logout',  ),));
    }

    private function getlogin_checkRouteInfo()
    {
        return array(array (), array (), array (), array (  0 =>   array (    0 => 'text',    1 => '/login_check',  ),));
    }
}
