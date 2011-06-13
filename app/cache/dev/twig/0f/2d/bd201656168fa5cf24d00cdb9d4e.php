<?php

/* PadelLeagueBundle::layout.html.twig */
class __TwigTemplate_0f2dbd201656168fa5cf24d00cdb9d4e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content_header_more' => array($this, 'block_content_header_more'),
            'content_header' => array($this, 'block_content_header'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $context = array_merge($this->env->getGlobals(), $context);

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />
        <link rel=\"stylesheet\" href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/padelleague/css/demo.css"), "html");
        echo "\" type=\"text/css\" media=\"all\" />
        <title>";
        // line 6
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link rel=\"shortcut icon\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("favicon.ico"), "html");
        echo "\" />
                <script type=\"text/javascript\" src=\" ";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/padelleague/js/jquery-1.6.1.js"), "html");
        echo "\"></script> 
        <script type=\"text/javascript\" src=\" ";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/padelleague/js/jquery.tablesorter.js"), "html");
        echo "\"></script> 
        <script type=\"text/javascript\">
            \$(document).ready(function() 
            { 
                \$(\"#tablesorter-demo\").tablesorter({sortList:[[0,0]], widgets: ['zebra']});
                \$(\"#options\").tablesorter({sortList: [[0,0]], headers: { 3:{sorter: false}, 4:{sorter: false}}});
            }           
        ); 
            \$(document).ready(function()
            {
                \$(\"tr\").click(function(){
                    window.location = \$(this).attr(\"url\");
               });
              
                \$('tr').css( 'cursor', 'pointer' );
            });

        </script>
        <link href=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/padelleague/css/style.css"), "html");
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
    </head>
    <body>
        <div id=\"symfony-wrapper\">
            <div id=\"symfony-header\">
            </div>
            
            ";
        // line 34
        if ($this->getAttribute($this->getAttribute($this->getContext($context, 'app'), "session", array(), "any", false), "flash", array("notice", ), "method", false)) {
            // line 35
            echo "            <div class=\"flash-message\">
                <em>Notice</em>: ";
            // line 36
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, 'app'), "session", array(), "any", false), "flash", array("notice", ), "method", false), "html");
            echo "
            </div>
            ";
        }
        // line 39
        echo "            
            ";
        // line 40
        $this->displayBlock('content_header', $context, $blocks);
        // line 49
        echo "
            <div class=\"symfony-content\">
                ";
        // line 51
        $this->displayBlock('content', $context, $blocks);
        // line 53
        echo "            </div>

            ";
        // line 55
        if (twig_test_defined("code", $context)) {
            // line 56
            echo "            <h2>Code behind this page</h2>
            <div class=\"symfony-content\">";
            // line 57
            echo $this->getContext($context, 'code');
            echo "</div>
            ";
        }
        // line 59
        echo "        </div>
    </body>
</html>
";
    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        echo "Demo Bundle";
    }

    // line 42
    public function block_content_header_more($context, array $blocks = array())
    {
        // line 43
        echo "                        <li><a href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("homepage"), "html");
        echo "\">Home</a></li>
                    ";
    }

    // line 40
    public function block_content_header($context, array $blocks = array())
    {
        // line 41
        echo "                <ul id=\"menu\">
                    ";
        // line 42
        $this->displayBlock('content_header_more', $context, $blocks);
        // line 45
        echo "                </ul>

                <div style=\"clear: both\"></div>
            ";
    }

    // line 51
    public function block_content($context, array $blocks = array())
    {
        // line 52
        echo "                ";
    }

    public function getTemplateName()
    {
        return "PadelLeagueBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
