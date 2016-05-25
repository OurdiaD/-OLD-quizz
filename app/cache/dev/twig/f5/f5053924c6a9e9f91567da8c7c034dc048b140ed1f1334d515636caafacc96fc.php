<?php

/* @QuizIndex/Default/index.html.twig */
class __TwigTemplate_d362268297ae4de3b60dec12efd29bad54d1fed67e8f2f7a29d980b57e9c2e31 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c3feb8d7efc75e289ba15e1950e940f206c31aeb417c82b8287774c4dd770821 = $this->env->getExtension("native_profiler");
        $__internal_c3feb8d7efc75e289ba15e1950e940f206c31aeb417c82b8287774c4dd770821->enter($__internal_c3feb8d7efc75e289ba15e1950e940f206c31aeb417c82b8287774c4dd770821_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@QuizIndex/Default/index.html.twig"));

        // line 1
        echo "Hello ";
        echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "html", null, true);
        echo "!
";
        
        $__internal_c3feb8d7efc75e289ba15e1950e940f206c31aeb417c82b8287774c4dd770821->leave($__internal_c3feb8d7efc75e289ba15e1950e940f206c31aeb417c82b8287774c4dd770821_prof);

    }

    public function getTemplateName()
    {
        return "@QuizIndex/Default/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* Hello {{ name }}!*/
/* */
