<?php

/* QuizIndexBundle:Quiz:base.html.twig */
class __TwigTemplate_7539151cf87aed60fc3d3926745d29247e993e48548706d22fa6ba9325264a7e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'sidebar' => array($this, 'block_sidebar'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    </head>
    <body>
        <div id=\"sidebar\">
            ";
        // line 9
        $this->displayBlock('sidebar', $context, $blocks);
        // line 16
        echo "        </div>

        <div id=\"content\">
            ";
        // line 19
        $this->displayBlock('body', $context, $blocks);
        // line 20
        echo "        </div>
    </body>
</html>";
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        echo "My_Quiz";
    }

    // line 9
    public function block_sidebar($context, array $blocks = array())
    {
        // line 10
        echo "            <ul>
                <li><a href=\"";
        // line 11
        echo $this->env->getExtension('routing')->getPath("index");
        echo "\">index</a></li>
                <li><a href=\"";
        // line 12
        echo $this->env->getExtension('routing')->getPath("login");
        echo "\">connexion</a></li>
                <li><a href=\"";
        // line 13
        echo $this->env->getExtension('routing')->getPath("inscription");
        echo "\">inscription</a></li>
            </ul>
            ";
    }

    // line 19
    public function block_body($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "QuizIndexBundle:Quiz:base.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  77 => 19,  70 => 13,  66 => 12,  62 => 11,  59 => 10,  56 => 9,  50 => 5,  44 => 20,  42 => 19,  37 => 16,  35 => 9,  28 => 5,  22 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />*/
/*         <title>{% block title %}My_Quiz{% endblock %}</title>*/
/*     </head>*/
/*     <body>*/
/*         <div id="sidebar">*/
/*             {% block sidebar %}*/
/*             <ul>*/
/*                 <li><a href="{{ path('index') }}">index</a></li>*/
/*                 <li><a href="{{ path('login') }}">connexion</a></li>*/
/*                 <li><a href="{{ path('inscription') }}">inscription</a></li>*/
/*             </ul>*/
/*             {% endblock %}*/
/*         </div>*/
/* */
/*         <div id="content">*/
/*             {% block body %}{% endblock %}*/
/*         </div>*/
/*     </body>*/
/* </html>*/
