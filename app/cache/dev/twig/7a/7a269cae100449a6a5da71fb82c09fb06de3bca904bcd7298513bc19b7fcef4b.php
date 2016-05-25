<?php

/* QuizIndexBundle:Quiz:base.html.twig */
class __TwigTemplate_38ee296348d46f8f3509b7e33d5cd5d7a07e39f78803d6b88a76a3c17238ba51 extends Twig_Template
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
        $__internal_6c200ca5cfc94e8fb4a3afb26dc8b18422cb81bfc18b390b83107354d89e6707 = $this->env->getExtension("native_profiler");
        $__internal_6c200ca5cfc94e8fb4a3afb26dc8b18422cb81bfc18b390b83107354d89e6707->enter($__internal_6c200ca5cfc94e8fb4a3afb26dc8b18422cb81bfc18b390b83107354d89e6707_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "QuizIndexBundle:Quiz:base.html.twig"));

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
        
        $__internal_6c200ca5cfc94e8fb4a3afb26dc8b18422cb81bfc18b390b83107354d89e6707->leave($__internal_6c200ca5cfc94e8fb4a3afb26dc8b18422cb81bfc18b390b83107354d89e6707_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_f608d4db3a2662eaf345405ddcf928e6950d1be8add16f348fc33dc20d2f2011 = $this->env->getExtension("native_profiler");
        $__internal_f608d4db3a2662eaf345405ddcf928e6950d1be8add16f348fc33dc20d2f2011->enter($__internal_f608d4db3a2662eaf345405ddcf928e6950d1be8add16f348fc33dc20d2f2011_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "My_Quiz";
        
        $__internal_f608d4db3a2662eaf345405ddcf928e6950d1be8add16f348fc33dc20d2f2011->leave($__internal_f608d4db3a2662eaf345405ddcf928e6950d1be8add16f348fc33dc20d2f2011_prof);

    }

    // line 9
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_6b5c15094d179ac7b69ff7a239f1473e79cfe078faa374f9a0e3a51716db6f41 = $this->env->getExtension("native_profiler");
        $__internal_6b5c15094d179ac7b69ff7a239f1473e79cfe078faa374f9a0e3a51716db6f41->enter($__internal_6b5c15094d179ac7b69ff7a239f1473e79cfe078faa374f9a0e3a51716db6f41_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

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
        
        $__internal_6b5c15094d179ac7b69ff7a239f1473e79cfe078faa374f9a0e3a51716db6f41->leave($__internal_6b5c15094d179ac7b69ff7a239f1473e79cfe078faa374f9a0e3a51716db6f41_prof);

    }

    // line 19
    public function block_body($context, array $blocks = array())
    {
        $__internal_d6c469b200008a69efb5ced82cb90f1db1627b8221b728027b8a61420b4d310c = $this->env->getExtension("native_profiler");
        $__internal_d6c469b200008a69efb5ced82cb90f1db1627b8221b728027b8a61420b4d310c->enter($__internal_d6c469b200008a69efb5ced82cb90f1db1627b8221b728027b8a61420b4d310c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_d6c469b200008a69efb5ced82cb90f1db1627b8221b728027b8a61420b4d310c->leave($__internal_d6c469b200008a69efb5ced82cb90f1db1627b8221b728027b8a61420b4d310c_prof);

    }

    public function getTemplateName()
    {
        return "QuizIndexBundle:Quiz:base.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  95 => 19,  85 => 13,  81 => 12,  77 => 11,  74 => 10,  68 => 9,  56 => 5,  47 => 20,  45 => 19,  40 => 16,  38 => 9,  31 => 5,  25 => 1,);
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
