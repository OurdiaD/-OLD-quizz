<?php

/* @QuizIndex/Advert/index.html.twig */
class __TwigTemplate_b5f4519c9eb57d6b3a3bd3a72bda14e214e9c3244028372829e632408ee6efdf extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <title>";
        // line 4
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    </head>
    ";
        // line 6
        $this->displayBlock('body', $context, $blocks);
        // line 18
        echo "</html>";
    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        echo "Bienvenue sur ma première page avec OpenClassrooms !";
    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        // line 7
        echo "        <h1>Hello World !</h1>
        
        
        <p>
            ";
        // line 11
        echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : null), "html", null, true);
        echo "
            Le Hello World est un grand classique en programmation.
            Il signifie énormément, car cela veut dire que vous avez
            réussi à exécuter le programme pour accomplir une tâche simple :
            afficher ce hello world !
        </p>
    ";
    }

    public function getTemplateName()
    {
        return "@QuizIndex/Advert/index.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  52 => 11,  46 => 7,  43 => 6,  37 => 4,  33 => 18,  31 => 6,  26 => 4,  21 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <title>{% block title %}Bienvenue sur ma première page avec OpenClassrooms !{% endblock %}</title>*/
/*     </head>*/
/*     {% block body %}*/
/*         <h1>Hello World !</h1>*/
/*         */
/*         */
/*         <p>*/
/*             {{name}}*/
/*             Le Hello World est un grand classique en programmation.*/
/*             Il signifie énormément, car cela veut dire que vous avez*/
/*             réussi à exécuter le programme pour accomplir une tâche simple :*/
/*             afficher ce hello world !*/
/*         </p>*/
/*     {% endblock %}*/
/* </html>*/
