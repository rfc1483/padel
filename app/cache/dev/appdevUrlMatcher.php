<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appdevUrlMatcher
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appdevUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
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

        // league_manager
        if (0 === strpos($pathinfo, '/league_manager') && preg_match('#^/league_manager/(?P<id>[^/]+?)/?$#x', $pathinfo, $matches)) {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'league_manager');
            }
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Padel\\LeagueBundle\\Controller\\LeaguesController::managerAction',)), array('_route' => 'league_manager'));
        }

        // create_league
        if (rtrim($pathinfo, '/') === '/create_league') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'create_league');
            }
            return array (  '_controller' => 'Padel\\LeagueBundle\\Controller\\LeaguesController::createAction',  '_route' => 'create_league',);
        }

        // delete_league
        if (0 === strpos($pathinfo, '/delete_league') && preg_match('#^/delete_league/(?P<id>[^/]+?)/?$#x', $pathinfo, $matches)) {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'delete_league');
            }
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Padel\\LeagueBundle\\Controller\\LeaguesController::deleteAction',)), array('_route' => 'delete_league'));
        }

        // create_stage
        if (0 === strpos($pathinfo, '/create_stage') && preg_match('#^/create_stage/(?P<id>[^/]+?)/?$#x', $pathinfo, $matches)) {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'create_stage');
            }
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Padel\\LeagueBundle\\Controller\\StagesController::createAction',)), array('_route' => 'create_stage'));
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

        // _welcome
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', '_welcome');
            }
            return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\WelcomeController::indexAction',  '_route' => '_welcome',);
        }

        // _demo_login
        if ($pathinfo === '/demo/secured/login') {
            return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::loginAction',  '_route' => '_demo_login',);
        }

        // _security_check
        if ($pathinfo === '/demo/secured/login_check') {
            return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::securityCheckAction',  '_route' => '_security_check',);
        }

        // _demo_logout
        if ($pathinfo === '/demo/secured/logout') {
            return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::logoutAction',  '_route' => '_demo_logout',);
        }

        // acme_demo_secured_hello
        if ($pathinfo === '/demo/secured/hello') {
            return array (  'name' => 'World',  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::helloAction',  '_route' => 'acme_demo_secured_hello',);
        }

        // _demo_secured_hello
        if (0 === strpos($pathinfo, '/demo/secured/hello') && preg_match('#^/demo/secured/hello/(?P<name>[^/]+?)$#x', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::helloAction',)), array('_route' => '_demo_secured_hello'));
        }

        // _demo_secured_hello_admin
        if (0 === strpos($pathinfo, '/demo/secured/hello/admin') && preg_match('#^/demo/secured/hello/admin/(?P<name>[^/]+?)$#x', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::helloadminAction',)), array('_route' => '_demo_secured_hello_admin'));
        }

        if (0 === strpos($pathinfo, '/demo')) {
            if (0 === strpos($pathinfo, '/demo')) {
                // _demo
                if (rtrim($pathinfo, '/') === '/demo') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_demo');
                    }
                    return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\DemoController::indexAction',  '_route' => '_demo',);
                }
        
                // _demo_hello
                if (0 === strpos($pathinfo, '/demo/hello') && preg_match('#^/demo/hello/(?P<name>[^/]+?)$#x', $pathinfo, $matches)) {
                    return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Acme\\DemoBundle\\Controller\\DemoController::helloAction',)), array('_route' => '_demo_hello'));
                }
        
                // _demo_contact
                if ($pathinfo === '/demo/contact') {
                    return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\DemoController::contactAction',  '_route' => '_demo_contact',);
                }
        
            }
    
        }

        // _wdt
        if (0 === strpos($pathinfo, '/_wdt') && preg_match('#^/_wdt/(?P<token>[^/]+?)$#x', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::toolbarAction',)), array('_route' => '_wdt'));
        }

        if (0 === strpos($pathinfo, '/_profiler')) {
            // _profiler_search
            if ($pathinfo === '/_profiler/search') {
                return array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::searchAction',  '_route' => '_profiler_search',);
            }
    
            // _profiler_purge
            if ($pathinfo === '/_profiler/purge') {
                return array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::purgeAction',  '_route' => '_profiler_purge',);
            }
    
            // _profiler_import
            if ($pathinfo === '/_profiler/import') {
                return array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::importAction',  '_route' => '_profiler_import',);
            }
    
            // _profiler_export
            if (0 === strpos($pathinfo, '/_profiler/export') && preg_match('#^/_profiler/export/(?P<token>[^/\.]+?)\.txt$#x', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::exportAction',)), array('_route' => '_profiler_export'));
            }
    
            // _profiler_search_results
            if (0 === strpos($pathinfo, '/_profiler') && preg_match('#^/_profiler/(?P<token>[^/]+?)/search/results$#x', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::searchResultsAction',)), array('_route' => '_profiler_search_results'));
            }
    
            // _profiler
            if (0 === strpos($pathinfo, '/_profiler') && preg_match('#^/_profiler/(?P<token>[^/]+?)$#x', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::panelAction',)), array('_route' => '_profiler'));
            }
    
        }

        if (0 === strpos($pathinfo, '/_configurator')) {
            // _configurator_home
            if (rtrim($pathinfo, '/') === '/_configurator') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', '_configurator_home');
                }
                return array (  '_controller' => 'Symfony\\Bundle\\WebConfiguratorBundle\\Controller\\ConfiguratorController::checkAction',  '_route' => '_configurator_home',);
            }
    
            // _configurator_step
            if (0 === strpos($pathinfo, '/_configurator/step') && preg_match('#^/_configurator/step/(?P<index>[^/]+?)$#x', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Symfony\\Bundle\\WebConfiguratorBundle\\Controller\\ConfiguratorController::stepAction',)), array('_route' => '_configurator_step'));
            }
    
            // _configurator_final
            if ($pathinfo === '/_configurator/final') {
                return array (  '_controller' => 'Symfony\\Bundle\\WebConfiguratorBundle\\Controller\\ConfiguratorController::finalAction',  '_route' => '_configurator_final',);
            }
    
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
