<?php

/* PadelLeagueBundle:Stages:manager.html.twig */
class __TwigTemplate_d8fa9fb3ad3964e6738c7efaf1c098b1 extends Twig_Template
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

        // line 42
        $context['code'] = $this->env->getExtension('demo')->getCode($this);
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "    <h1>Stage manager</h1>

    <form action=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("stage_manager", array("id" => $this->getContext($context, 'id'))), "html");
        echo "\" method=\"post\" ";
        echo $this->env->getExtension('form')->renderEnctype($this->getContext($context, 'form'));
        echo " id=\"login\">
        ";
        // line 7
        echo $this->env->getExtension('form')->renderWidget($this->getContext($context, 'form'));
        echo "
        <input type=\"submit\" class=\"symfony-button-grey\" value=\"SAVE\" />
    </form>
    <br />
    <form action=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("delete_stage", array("id" => $this->getContext($context, 'id'))), "html");
        echo "\" method=\"post\" ";
        echo $this->env->getExtension('form')->renderEnctype($this->getContext($context, 'form'));
        echo " id=\"login\">
        <input type=\"submit\" class=\"symfony-button-grey\" value=\"DELETE\" />
    </form>

    <br />
    <h1>Divisions</h1>
    ";
        // line 17
        if (twig_test_empty($this->getContext($context, 'error'))) {
            // line 18
            echo "        <table id=\"tablesorter-demo\" class=\"tablesorter\"> 
            <thead> 
                <tr> 
                    <th>Level</th> 
                </tr> 
            </thead> 
            <tbody> 
                ";
            // line 25
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getContext($context, 'divisions'));
            foreach ($context['_seq'] as $context['_key'] => $context['division']) {
                echo "               
                    <tr url=\"";
                // line 26
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("division_manager", array("id" => $this->getAttribute($this->getContext($context, 'division'), "id", array(), "any", false))), "html");
                echo "\" >
                        <td>";
                // line 27
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, 'division'), "level", array(), "any", false), "html");
                echo "</td>
                    </tr>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['division'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 29
            echo "            
            </tbody> 
        </table> 
    ";
        } else {
            // line 33
            echo "        ";
            echo twig_escape_filter($this->env, $this->getContext($context, 'error'), "html");
            echo "
    ";
        }
        // line 35
        echo "    <br />
    <br />
    <ul id=\"demo-list\">
        <a href=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("create_division", array("id" => $this->getContext($context, 'id'))), "html");
        echo "\">Create Division</a> 
    </ul>
";
    }

    public function getTemplateName()
    {
        return "PadelLeagueBundle:Stages:manager.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
