<?php

/* PadelLeagueBundle:Leagues:manager.html.twig */
class __TwigTemplate_55b6bfd6a3456ccc1f5d009904e31f1a extends Twig_Template
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
        echo "    <h1>Edit league</h1>
    Edit or delete league ";
        // line 5
        echo twig_escape_filter($this->env, $this->getContext($context, 'id'), "html");
        echo "
";
    }

    public function getTemplateName()
    {
        return "PadelLeagueBundle:Leagues:manager.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
