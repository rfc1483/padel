<?php

/* PadelLeagueBundle:Default:outcome.html.twig */
class __TwigTemplate_4b1d8eb8a80f38d2ae474bf062e1f592 extends Twig_Template
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

        // line 8
        $context['code'] = $this->env->getExtension('demo')->getCode($this);
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "    <h1>Send outcome</h1>
    Form for sending the outcome of the matches.
";
    }

    public function getTemplateName()
    {
        return "PadelLeagueBundle:Default:outcome.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
