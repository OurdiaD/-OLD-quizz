<?php

/* @Twig/Exception/exception.css.twig */
class __TwigTemplate_e123efdb092326f0411c2ac18733f6c38087f0d2ecbab9e6ae01d1d0ce742102 extends Twig_Template
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
        $__internal_8537bdd41813719a308170fce85268eb45144aed62f491f7613654d4b693d780 = $this->env->getExtension("native_profiler");
        $__internal_8537bdd41813719a308170fce85268eb45144aed62f491f7613654d4b693d780->enter($__internal_8537bdd41813719a308170fce85268eb45144aed62f491f7613654d4b693d780_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "@Twig/Exception/exception.css.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_8537bdd41813719a308170fce85268eb45144aed62f491f7613654d4b693d780->leave($__internal_8537bdd41813719a308170fce85268eb45144aed62f491f7613654d4b693d780_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 3,  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {% include '@Twig/Exception/exception.txt.twig' with { 'exception': exception } %}*/
/* *//* */
/* */
