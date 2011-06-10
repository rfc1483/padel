<?php

/* PadelLeagueBundle:Leagues:layout.html.twig */
class __TwigTemplate_98c5d8de6d68b436a2f8e44c004e8e2f extends Twig_Template
{
    protected $parent;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'content_header_more' => array($this, 'block_content_header_more'),
        );
    }

    public function getParent(array $context)
    {
        if (null === $this->parent) {
            $this->parent = $this->env->loadTemplate("PadelLeagueBundle::layout.html.twig");
        }

        return $this->parent;
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $context = array_merge($this->env->getGlobals(), $context);

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content_header_more($context, array $blocks = array())
    {
        // line 4
        echo "    ";
        echo $this->renderParentBlock("content_header_more", $context, $blocks);
        echo "
    ";
        // line 5
        if (($this->env->getExtension('security')->isGranted("ROLE_USER") || $this->env->getExtension('security')->isGranted("ROLE_ADMIN"))) {
            // line 6
            echo "        <li>logged in as <strong>";
            echo twig_escape_filter($this->env, (($this->getAttribute($this->getContext($context, 'app'), "user", array(), "any", false)) ? ($this->getAttribute($this->getAttribute($this->getContext($context, 'app'), "user", array(), "any", false), "username", array(), "any", false)) : ("Anonymous")), "html");
            echo "</strong> - <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("logout"), "html");
            echo "\">Logout</a></li>
    ";
        }
    }

    public function getTemplateName()
    {
        return "PadelLeagueBundle:Leagues:layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
