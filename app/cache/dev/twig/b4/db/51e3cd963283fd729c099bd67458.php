<?php

/* PadelLeagueBundle:Leagues:create.html.twig */
class __TwigTemplate_b4db51e3cd963283fd729c099bd67458 extends Twig_Template
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
        echo "    <h1>New league</h1>

    <form action=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("create_league"), "html");
        echo "\" method=\"post\" ";
        echo $this->env->getExtension('form')->renderEnctype($this->getContext($context, 'form'));
        echo " id=\"login\">
        ";
        // line 7
        echo $this->env->getExtension('form')->renderWidget($this->getContext($context, 'form'));
        echo "
        <input type=\"submit\" class=\"symfony-button-grey\" value=\"REGISTER\" />
    </form>

";
    }

    public function getTemplateName()
    {
        return "PadelLeagueBundle:Leagues:create.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
