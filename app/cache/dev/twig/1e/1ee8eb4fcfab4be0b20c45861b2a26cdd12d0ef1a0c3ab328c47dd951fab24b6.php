<?php

/* @Twig/Exception/exception.json.twig */
class __TwigTemplate_8884819229eedb38c8759c9fb56ad93f8685503c8fda86b6e2675f98dce40638 extends Twig_Template
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
        $__internal_b86ef2d2ab626a8ad39102656b5d1bf3cc080229dc8201623cc89bcf14522555 = $this->env->getExtension("native_profiler");
        $__internal_b86ef2d2ab626a8ad39102656b5d1bf3cc080229dc8201623cc89bcf14522555->enter($__internal_b86ef2d2ab626a8ad39102656b5d1bf3cc080229dc8201623cc89bcf14522555_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "exception" => $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_b86ef2d2ab626a8ad39102656b5d1bf3cc080229dc8201623cc89bcf14522555->leave($__internal_b86ef2d2ab626a8ad39102656b5d1bf3cc080229dc8201623cc89bcf14522555_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.json.twig";
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
/* {{ { 'error': { 'code': status_code, 'message': status_text, 'exception': exception.toarray } }|json_encode|raw }}*/
/* */
