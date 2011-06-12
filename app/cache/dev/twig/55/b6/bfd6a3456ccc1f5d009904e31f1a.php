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
            $this->parent = $this->env->loadTemplate("PadelLeagueBundle:Default:layout.html.twig");
        }

        return $this->parent;
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $context = array_merge($this->env->getGlobals(), $context);

        // line 50
        $context['code'] = $this->env->getExtension('demo')->getCode($this);
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "    <h1>League manager</h1>

    <form action=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("league_manager", array("id" => $this->getContext($context, 'id'))), "html");
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
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("delete_league", array("id" => $this->getContext($context, 'id'))), "html");
        echo "\" method=\"post\" ";
        echo $this->env->getExtension('form')->renderEnctype($this->getContext($context, 'form'));
        echo " id=\"login\">
        <input type=\"submit\" class=\"symfony-button-grey\" value=\"DELETE\" />
    </form>

    <br />
    <h1>Stages</h1>
    ";
        // line 17
        if (twig_test_empty($this->getContext($context, 'error'))) {
            // line 18
            echo "        <table id=\"tablesorter-demo\" class=\"tablesorter\"> 
            <thead> 
                <tr> 
                    <th>Number</th> 
                    <th>Start date</th> 
                    <th>Finish date</th>
                    <th>Year</th> 
                    <th>Status</th>
                </tr> 
            </thead> 
            <tbody> 
                ";
            // line 29
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getContext($context, 'stages'));
            foreach ($context['_seq'] as $context['_key'] => $context['stage']) {
                echo "               
                    <tr url=\"";
                // line 30
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("league_manager", array("id" => $this->getAttribute($this->getContext($context, 'stage'), "id", array(), "any", false))), "html");
                echo "\" >
                        <td>";
                // line 31
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, 'stage'), "number", array(), "any", false), "html");
                echo "</td>
                        <td>";
                // line 32
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, 'stage'), "startDate", array(), "any", false), "html");
                echo "</td>
                        <td>";
                // line 33
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, 'stage'), "finishDate", array(), "any", false), "html");
                echo "</td>
                        <td>";
                // line 34
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, 'stage'), "year", array(), "any", false), "html");
                echo "</td>
                        <td>";
                // line 35
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, 'stage'), "status", array(), "any", false), "html");
                echo "</td>
                    </tr>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['stage'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 37
            echo "            
            </tbody> 
        </table> 
    ";
        } else {
            // line 41
            echo "        ";
            echo twig_escape_filter($this->env, $this->getContext($context, 'error'), "html");
            echo "
    ";
        }
        // line 43
        echo "    <br />
    <br />
    <ul id=\"demo-list\">
        <a href=\"";
        // line 46
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("create_stage", array("id" => $this->getContext($context, 'id'))), "html");
        echo "\">Create Stage</a> 
    </ul>
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
