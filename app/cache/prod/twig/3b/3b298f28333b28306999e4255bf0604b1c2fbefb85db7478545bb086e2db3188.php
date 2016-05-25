<?php

/* QuizIndexBundle::base.html.twig */
class __TwigTemplate_38aeca4b195d6442f1c2b3d4fc4cd247df81d8d4a5757171a9e73ed635b11d92 extends Twig_Template
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
    }

    // line 25
    public function block_body($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "QuizIndexBundle::base.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  99 => 25,  94 => 20,  89 => 18,  85 => 17,  81 => 16,  76 => 15,  74 => 14,  70 => 13,  66 => 12,  62 => 11,  59 => 10,  56 => 9,  50 => 5,  44 => 26,  42 => 25,  37 => 22,  35 => 9,  28 => 5,  22 => 1,);
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
