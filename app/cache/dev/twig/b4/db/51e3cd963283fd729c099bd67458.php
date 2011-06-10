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
            $this->parent = $this->env->loadTemplate("PadelLeagueBundle:Leagues:layout.html.twig");
        }

        return $this->parent;
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $context = array_merge($this->env->getGlobals(), $context);

        // line 8
        $context['code'] = $this->env->getExtension('demo')->getCode($this);
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "    <h1>Create league</h1>
    League creation system.
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
