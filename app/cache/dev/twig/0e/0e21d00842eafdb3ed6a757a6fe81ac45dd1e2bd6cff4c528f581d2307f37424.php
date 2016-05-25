<?php

/* TwigBundle:Exception:exception.css.twig */
class __TwigTemplate_04683cfc0ba2fea2033f9b81485ce96043364e3c00a2a70cb98ff55ad6ab2a72 extends Twig_Template
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
        $__internal_2283cee74a7fa46e4c0eee1cbcd3f99ae46a8d2c2b44afb5423e56492a565a90 = $this->env->getExtension("native_profiler");
        $__internal_2283cee74a7fa46e4c0eee1cbcd3f99ae46a8d2c2b44afb5423e56492a565a90->enter($__internal_2283cee74a7fa46e4c0eee1cbcd3f99ae46a8d2c2b44afb5423e56492a565a90_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.css.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_2283cee74a7fa46e4c0eee1cbcd3f99ae46a8d2c2b44afb5423e56492a565a90->leave($__internal_2283cee74a7fa46e4c0eee1cbcd3f99ae46a8d2c2b44afb5423e56492a565a90_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.css.twig";
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
