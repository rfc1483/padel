<?php

/* PadelLeagueBundle:Default:leagues.html.twig */
class __TwigTemplate_ae9ad0d2b02065c6df2f9e5385d28a06 extends Twig_Template
{
    protected $parent;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
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

        // line 13
        $context['code'] = $this->env->getExtension('demo')->getCode($this);
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "    <h1>Leagues</h1>
    ";
        // line 5
        echo twig_escape_filter($this->env, $this->getContext($context, 'error'), "html");
        echo "
    <br />
    <br />
    <ul id=\"demo-list\">
        <a href=";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("create_league"), "html");
        echo ">Create League</a> 
    </ul>
";
    }

    public function getTemplateName()
    {
        return "PadelLeagueBundle:Default:leagues.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
