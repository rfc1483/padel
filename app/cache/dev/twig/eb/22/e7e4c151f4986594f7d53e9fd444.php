<?php

/* PadelLeagueBundle:Default:index.html.twig */
class __TwigTemplate_eb22e7e4c151f4986594f7d53e9fd444 extends Twig_Template
{
    protected $parent;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
        );
    }

    public function getParent(array $context)
    {
        if (null === $this->parent) {
            $this->parent = $this->env->loadTemplate("PadelLeagueBundle:Default:layout.html.twig");
        }

        return $this->parent;
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $context = array_merge($this->env->getGlobals(), $context);

        // line 22
        $context['code'] = $this->env->getExtension('demo')->getCode($this);
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "Symfony - Demos";
    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        // line 6
        echo "    <h1>Menu</h1>
    <ul id=\"demo-list\">
        ";
        // line 8
        if ($this->env->getExtension('security')->isGranted("ROLE_USER")) {
            // line 9
            echo "            <li><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("classification"), "html");
            echo "\">Classification</a></li>
            <li><a href=\"";
            // line 10
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("outcome"), "html");
            echo "\">Send outcome</a></li>
        ";
        } elseif ($this->env->getExtension('security')->isGranted("ROLE_ADMIN")) {
            // line 12
            echo "            <li><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("classification"), "html");
            echo "\">Classification</a></li>
            <li><a href=\"";
            // line 13
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("teams"), "html");
            echo "\">Teams</a></li>
            <li><a href=\"";
            // line 14
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("leagues"), "html");
            echo "\">Leagues</a></li>
        ";
        } elseif ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_ANONYMOUSLY")) {
            // line 16
            echo "            <li><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("login"), "html");
            echo "\">Login</a></li>
            <li><a href=\"";
            // line 17
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("register"), "html");
            echo "\">Sign up</a></li>        
        ";
        }
        // line 19
        echo "    </ul>
";
    }

    public function getTemplateName()
    {
        return "PadelLeagueBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
