<?php

/* @Twig/Exception/exception.js.twig */
class __TwigTemplate_d91017f05f25935952e2fde232becb27e31f09c40ec2ed9c5f18b13a71223ccc extends Twig_Template
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
        $__internal_8ad4f3256a3cb74f0b858cef7db755d786aa1143a6fa75a4c454be1bcdbdcedf = $this->env->getExtension("native_profiler");
        $__internal_8ad4f3256a3cb74f0b858cef7db755d786aa1143a6fa75a4c454be1bcdbdcedf->enter($__internal_8ad4f3256a3cb74f0b858cef7db755d786aa1143a6fa75a4c454be1bcdbdcedf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "@Twig/Exception/exception.js.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_8ad4f3256a3cb74f0b858cef7db755d786aa1143a6fa75a4c454be1bcdbdcedf->leave($__internal_8ad4f3256a3cb74f0b858cef7db755d786aa1143a6fa75a4c454be1bcdbdcedf_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.js.twig";
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
