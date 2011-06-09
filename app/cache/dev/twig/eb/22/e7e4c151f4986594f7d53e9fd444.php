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

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "Symfony - Demos";
    }

    // line 6
    public function block_content($context, array $blocks = array())
    {
        // line 7
        echo "    <h1>Menu</h1>
    <ul id=\"demo-list\">
        <li><a href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("login"), "html");
        echo "\">Login</a></li>
        <li><a href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("register"), "html");
        echo "\">Register</a></li>
    </ul>
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
