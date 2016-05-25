<?php

/* QuizIndexBundle::base.html.twig */
class __TwigTemplate_09b0e86a59cb4fbb1610115f76ccd3132de08e85de186f99189536c62d0e0adc extends Twig_Template
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
        $__internal_411d1ca453b213c0d81488786db30c9951f1d69984eacacf92307d186b2e0b95 = $this->env->getExtension("native_profiler");
        $__internal_411d1ca453b213c0d81488786db30c9951f1d69984eacacf92307d186b2e0b95->enter($__internal_411d1ca453b213c0d81488786db30c9951f1d69984eacacf92307d186b2e0b95_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "QuizIndexBundle::base.html.twig"));

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
        // line 22
        echo "        </div>

        <div id=\"content\">
            ";
        // line 25
        $this->displayBlock('body', $context, $blocks);
        // line 26
        echo "        </div>
    </body>
</html>";
        
        $__internal_411d1ca453b213c0d81488786db30c9951f1d69984eacacf92307d186b2e0b95->leave($__internal_411d1ca453b213c0d81488786db30c9951f1d69984eacacf92307d186b2e0b95_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_ff89e13b4e1190a3599a53dd8976fa8019e404425d2ca3f15f68d3aa5a2b1307 = $this->env->getExtension("native_profiler");
        $__internal_ff89e13b4e1190a3599a53dd8976fa8019e404425d2ca3f15f68d3aa5a2b1307->enter($__internal_ff89e13b4e1190a3599a53dd8976fa8019e404425d2ca3f15f68d3aa5a2b1307_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "My_Quiz";
        
        $__internal_ff89e13b4e1190a3599a53dd8976fa8019e404425d2ca3f15f68d3aa5a2b1307->leave($__internal_ff89e13b4e1190a3599a53dd8976fa8019e404425d2ca3f15f68d3aa5a2b1307_prof);

    }

    // line 9
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_6baef2a5df61a4e9956f698c3c8549b8ec3f8ee6d4a6aef4721d81037a736b53 = $this->env->getExtension("native_profiler");
        $__internal_6baef2a5df61a4e9956f698c3c8549b8ec3f8ee6d4a6aef4721d81037a736b53->enter($__internal_6baef2a5df61a4e9956f698c3c8549b8ec3f8ee6d4a6aef4721d81037a736b53_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

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
                ";
        // line 14
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 15
            echo "                    <li><a href=\"";
            echo $this->env->getExtension('routing')->getPath("add");
            echo "\">Ajouter une question</a></li>
                    <li><a href=\"";
            // line 16
            echo $this->env->getExtension('routing')->getPath("addC");
            echo "\">Ajouter une Categorie</a></li>
                    <!-- <li><a href=\"";
            // line 17
            echo $this->env->getExtension('routing')->getPath("modif");
            echo "\">modifier profil</a></li> -->
                    <li><a href='";
            // line 18
            echo $this->env->getExtension('routing')->getPath("logout");
            echo "'>Deconnexion</a></li>
                ";
        }
        // line 20
        echo "            </ul>
            ";
        
        $__internal_6baef2a5df61a4e9956f698c3c8549b8ec3f8ee6d4a6aef4721d81037a736b53->leave($__internal_6baef2a5df61a4e9956f698c3c8549b8ec3f8ee6d4a6aef4721d81037a736b53_prof);

    }

    // line 25
    public function block_body($context, array $blocks = array())
    {
        $__internal_86ded735525991de306184f1b55d5e71d3cd323f485a99829f5d10b18ea7a9d0 = $this->env->getExtension("native_profiler");
        $__internal_86ded735525991de306184f1b55d5e71d3cd323f485a99829f5d10b18ea7a9d0->enter($__internal_86ded735525991de306184f1b55d5e71d3cd323f485a99829f5d10b18ea7a9d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_86ded735525991de306184f1b55d5e71d3cd323f485a99829f5d10b18ea7a9d0->leave($__internal_86ded735525991de306184f1b55d5e71d3cd323f485a99829f5d10b18ea7a9d0_prof);

    }

    public function getTemplateName()
    {
        return "QuizIndexBundle::base.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  117 => 25,  109 => 20,  104 => 18,  100 => 17,  96 => 16,  91 => 15,  89 => 14,  85 => 13,  81 => 12,  77 => 11,  74 => 10,  68 => 9,  56 => 5,  47 => 26,  45 => 25,  40 => 22,  38 => 9,  31 => 5,  25 => 1,);
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
/*                 {% if is_granted('IS_AUTHENTICATED_REMEMBERED') %}*/
/*                     <li><a href="{{ path('add') }}">Ajouter une question</a></li>*/
/*                     <li><a href="{{ path('addC') }}">Ajouter une Categorie</a></li>*/
/*                     <!-- <li><a href="{{ path('modif') }}">modifier profil</a></li> -->*/
/*                     <li><a href='{{ path("logout") }}'>Deconnexion</a></li>*/
/*                 {% endif %}*/
/*             </ul>*/
/*             {% endblock %}*/
/*         </div>*/
/* */
/*         <div id="content">*/
/*             {% block body %}{% endblock %}*/
/*         </div>*/
/*     </body>*/
/* </html>*/
