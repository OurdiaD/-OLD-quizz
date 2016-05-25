<?php

/* @Twig/Exception/error.json.twig */
class __TwigTemplate_916c6d06973896ee8549581cec8162b1570f6ff5d2496018063d76390d5044a6 extends Twig_Template
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
        $__internal_ca0a85f9c409e979b51e29f405ad2a79cd6e5c2291941c0124721d8984dd6b64 = $this->env->getExtension("native_profiler");
        $__internal_ca0a85f9c409e979b51e29f405ad2a79cd6e5c2291941c0124721d8984dd6b64->enter($__internal_ca0a85f9c409e979b51e29f405ad2a79cd6e5c2291941c0124721d8984dd6b64_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_ca0a85f9c409e979b51e29f405ad2a79cd6e5c2291941c0124721d8984dd6b64->leave($__internal_ca0a85f9c409e979b51e29f405ad2a79cd6e5c2291941c0124721d8984dd6b64_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.json.twig";
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
/* {{ { 'error': { 'code': status_code, 'message': status_text } }|json_encode|raw }}*/
/* */
