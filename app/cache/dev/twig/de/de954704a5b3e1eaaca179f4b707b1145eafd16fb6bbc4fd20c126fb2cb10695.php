<?php

/* TwigBundle:Exception:exception.js.twig */
class __TwigTemplate_948f885c54c352d03a62d0e63e6ec4c3addb239ebb7f72f8c381532de69063c8 extends Twig_Template
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
        $__internal_1f493813f202c9dd8f23c56159a39cd6d6eeca317fd12840b418529e8851c90d = $this->env->getExtension("native_profiler");
        $__internal_1f493813f202c9dd8f23c56159a39cd6d6eeca317fd12840b418529e8851c90d->enter($__internal_1f493813f202c9dd8f23c56159a39cd6d6eeca317fd12840b418529e8851c90d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.js.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_1f493813f202c9dd8f23c56159a39cd6d6eeca317fd12840b418529e8851c90d->leave($__internal_1f493813f202c9dd8f23c56159a39cd6d6eeca317fd12840b418529e8851c90d_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.js.twig";
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
