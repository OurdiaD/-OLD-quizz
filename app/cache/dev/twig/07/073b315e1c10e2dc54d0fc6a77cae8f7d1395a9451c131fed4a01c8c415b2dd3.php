<?php

/* @Twig/Exception/exception.atom.twig */
class __TwigTemplate_bcc1aac6c16e24ff17174f44ae9bce2c98318f1d042328196da6c4df6b012f1a extends Twig_Template
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
        $__internal_1f2fe4506f45841581be4fac20adb710372c6a3703d606ca31074ffc89d00ac2 = $this->env->getExtension("native_profiler");
        $__internal_1f2fe4506f45841581be4fac20adb710372c6a3703d606ca31074ffc89d00ac2->enter($__internal_1f2fe4506f45841581be4fac20adb710372c6a3703d606ca31074ffc89d00ac2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "@Twig/Exception/exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_1f2fe4506f45841581be4fac20adb710372c6a3703d606ca31074ffc89d00ac2->leave($__internal_1f2fe4506f45841581be4fac20adb710372c6a3703d606ca31074ffc89d00ac2_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.atom.twig";
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
