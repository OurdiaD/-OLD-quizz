<?php

/* @Twig/Exception/exception.rdf.twig */
class __TwigTemplate_d6ed6232f2194a7ec8c462f09084c572aa3411316527439a9451b1bcda4cc795 extends Twig_Template
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
        $__internal_6e62653dd4ef8c2eb4c6e07de44c36f31be3c944c75df8198dd431c419ea3540 = $this->env->getExtension("native_profiler");
        $__internal_6e62653dd4ef8c2eb4c6e07de44c36f31be3c944c75df8198dd431c419ea3540->enter($__internal_6e62653dd4ef8c2eb4c6e07de44c36f31be3c944c75df8198dd431c419ea3540_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "@Twig/Exception/exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_6e62653dd4ef8c2eb4c6e07de44c36f31be3c944c75df8198dd431c419ea3540->leave($__internal_6e62653dd4ef8c2eb4c6e07de44c36f31be3c944c75df8198dd431c419ea3540_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.rdf.twig";
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
/* {% include '@Twig/Exception/exception.xml.twig' with { 'exception': exception } %}*/
/* */
