<?php

/* @Twig/Exception/error.js.twig */
class __TwigTemplate_273a0b3de8cd6a8610c1fa6c736db30a90e55d48b857addd8d7c106593f3d40b extends Twig_Template
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
        $__internal_3787c9531de54fcc0c0caa3a293b256fff955a91f73f845c63a9e086fbabee03 = $this->env->getExtension("native_profiler");
        $__internal_3787c9531de54fcc0c0caa3a293b256fff955a91f73f845c63a9e086fbabee03->enter($__internal_3787c9531de54fcc0c0caa3a293b256fff955a91f73f845c63a9e086fbabee03_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "js", null, true);
        echo "

*/
";
        
        $__internal_3787c9531de54fcc0c0caa3a293b256fff955a91f73f845c63a9e086fbabee03->leave($__internal_3787c9531de54fcc0c0caa3a293b256fff955a91f73f845c63a9e086fbabee03_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {{ status_code }} {{ status_text }}*/
/* */
/* *//* */
/* */
