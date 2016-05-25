<?php

/* @QuizIndex/Advert/index.html.twig */
class __TwigTemplate_ba66aca4eb953bf9a9979b134235e0df739088429e27190c296b529ccbfc53d6 extends Twig_Template
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
        $__internal_12b0f249b37dc6623412fb727c2c821958cb096f355bf448fb0edd9a31c6b0eb = $this->env->getExtension("native_profiler");
        $__internal_12b0f249b37dc6623412fb727c2c821958cb096f355bf448fb0edd9a31c6b0eb->enter($__internal_12b0f249b37dc6623412fb727c2c821958cb096f355bf448fb0edd9a31c6b0eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@QuizIndex/Advert/index.html.twig"));

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
        
        $__internal_12b0f249b37dc6623412fb727c2c821958cb096f355bf448fb0edd9a31c6b0eb->leave($__internal_12b0f249b37dc6623412fb727c2c821958cb096f355bf448fb0edd9a31c6b0eb_prof);

    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        $__internal_930a24b15e7bf0bc4a144e12f5becd495d8ac73ac858226a41c2b7e8507fc59b = $this->env->getExtension("native_profiler");
        $__internal_930a24b15e7bf0bc4a144e12f5becd495d8ac73ac858226a41c2b7e8507fc59b->enter($__internal_930a24b15e7bf0bc4a144e12f5becd495d8ac73ac858226a41c2b7e8507fc59b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Bienvenue sur ma première page avec OpenClassrooms !";
        
        $__internal_930a24b15e7bf0bc4a144e12f5becd495d8ac73ac858226a41c2b7e8507fc59b->leave($__internal_930a24b15e7bf0bc4a144e12f5becd495d8ac73ac858226a41c2b7e8507fc59b_prof);

    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        $__internal_1923da186e5f4437c1468c5b5e714ed91d7df7e8614ceabb3464e6446c043d03 = $this->env->getExtension("native_profiler");
        $__internal_1923da186e5f4437c1468c5b5e714ed91d7df7e8614ceabb3464e6446c043d03->enter($__internal_1923da186e5f4437c1468c5b5e714ed91d7df7e8614ceabb3464e6446c043d03_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo "        <h1>Hello World !</h1>
        
        
        <p>
            ";
        // line 11
        echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "html", null, true);
        echo "
            Le Hello World est un grand classique en programmation.
            Il signifie énormément, car cela veut dire que vous avez
            réussi à exécuter le programme pour accomplir une tâche simple :
            afficher ce hello world !
        </p>
    ";
        
        $__internal_1923da186e5f4437c1468c5b5e714ed91d7df7e8614ceabb3464e6446c043d03->leave($__internal_1923da186e5f4437c1468c5b5e714ed91d7df7e8614ceabb3464e6446c043d03_prof);

    }

    public function getTemplateName()
    {
        return "@QuizIndex/Advert/index.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  67 => 11,  61 => 7,  55 => 6,  43 => 4,  36 => 18,  34 => 6,  29 => 4,  24 => 1,);
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
