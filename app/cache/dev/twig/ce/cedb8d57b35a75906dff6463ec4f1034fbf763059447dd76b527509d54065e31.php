<?php

/* @QuizIndex/base.html.twig */
class __TwigTemplate_1d1cd0257b6a1df21b91a0e73a3266c0ef56ab8b1f1661a37efd4e76ed79c3f1 extends Twig_Template
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
        $__internal_3cda0147350a7043609fb1d9ad1f0a39578d9ec75a13b735c2cfe038e940cd87 = $this->env->getExtension("native_profiler");
        $__internal_3cda0147350a7043609fb1d9ad1f0a39578d9ec75a13b735c2cfe038e940cd87->enter($__internal_3cda0147350a7043609fb1d9ad1f0a39578d9ec75a13b735c2cfe038e940cd87_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@QuizIndex/base.html.twig"));

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
        
        $__internal_3cda0147350a7043609fb1d9ad1f0a39578d9ec75a13b735c2cfe038e940cd87->leave($__internal_3cda0147350a7043609fb1d9ad1f0a39578d9ec75a13b735c2cfe038e940cd87_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_8c13535b85e2104c1ae2926698af77881048540c588d5f939814c8e6e36505b5 = $this->env->getExtension("native_profiler");
        $__internal_8c13535b85e2104c1ae2926698af77881048540c588d5f939814c8e6e36505b5->enter($__internal_8c13535b85e2104c1ae2926698af77881048540c588d5f939814c8e6e36505b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "My_Quiz";
        
        $__internal_8c13535b85e2104c1ae2926698af77881048540c588d5f939814c8e6e36505b5->leave($__internal_8c13535b85e2104c1ae2926698af77881048540c588d5f939814c8e6e36505b5_prof);

    }

    // line 9
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_764645839a57fcae7b3c3e5ebaf2e1ccf6409ed4d6827b5979fc686ecc86733b = $this->env->getExtension("native_profiler");
        $__internal_764645839a57fcae7b3c3e5ebaf2e1ccf6409ed4d6827b5979fc686ecc86733b->enter($__internal_764645839a57fcae7b3c3e5ebaf2e1ccf6409ed4d6827b5979fc686ecc86733b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

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
        
        $__internal_764645839a57fcae7b3c3e5ebaf2e1ccf6409ed4d6827b5979fc686ecc86733b->leave($__internal_764645839a57fcae7b3c3e5ebaf2e1ccf6409ed4d6827b5979fc686ecc86733b_prof);

    }

    // line 25
    public function block_body($context, array $blocks = array())
    {
        $__internal_4589c58e3ea127fe9e5f1b89deece9ceb3942c3423784cf8ded23d56d3ce6ba3 = $this->env->getExtension("native_profiler");
        $__internal_4589c58e3ea127fe9e5f1b89deece9ceb3942c3423784cf8ded23d56d3ce6ba3->enter($__internal_4589c58e3ea127fe9e5f1b89deece9ceb3942c3423784cf8ded23d56d3ce6ba3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_4589c58e3ea127fe9e5f1b89deece9ceb3942c3423784cf8ded23d56d3ce6ba3->leave($__internal_4589c58e3ea127fe9e5f1b89deece9ceb3942c3423784cf8ded23d56d3ce6ba3_prof);

    }

    public function getTemplateName()
    {
        return "@QuizIndex/base.html.twig";
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
