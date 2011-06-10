<?php

/* PadelLeagueBundle:Leagues:index.html.twig */
class __TwigTemplate_89d478fe246ade51d8ab0619424d7c31 extends Twig_Template
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

        // line 31
        $context['code'] = $this->env->getExtension('demo')->getCode($this);
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "    <h1>Leagues</h1>
    <table id=\"tablesorter-demo\" class=\"tablesorter\"> 
        <thead> 
            <tr> 
                <th>Name</th> 
                <th>Year</th> 
                <th>Status</th> 
            </tr> 
        </thead> 
        <tbody> 
            ";
        // line 14
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, 'leagues'));
        foreach ($context['_seq'] as $context['_key'] => $context['league']) {
            // line 15
            echo "                <tr url=\"../league_manager/";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, 'league'), "id", array(), "any", false), "html");
            echo "\">
                    <td>";
            // line 16
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, 'league'), "name", array(), "any", false), "html");
            echo "</td>
                    <td>";
            // line 17
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, 'league'), "year", array(), "any", false), "html");
            echo "</td>
                    <td>";
            // line 18
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, 'league'), "status", array(), "any", false), "html");
            echo "</td>
                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['league'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 20
        echo "            
        </tbody> 
    </table> 
    ";
        // line 23
        echo twig_escape_filter($this->env, $this->getContext($context, 'error'), "html");
        echo "
    <br />
    <br />
    <ul id=\"demo-list\">
        <a href=";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("create_league"), "html");
        echo ">Create League</a> 
    </ul>
";
    }

    public function getTemplateName()
    {
        return "PadelLeagueBundle:Leagues:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
