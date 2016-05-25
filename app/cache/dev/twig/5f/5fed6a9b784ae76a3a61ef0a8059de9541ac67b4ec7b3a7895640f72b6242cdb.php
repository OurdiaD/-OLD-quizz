<?php

/* @Twig/Exception/error.css.twig */
class __TwigTemplate_8c8091ee0fd36eafc03810921219c1224df09e6faa91ab753b2d4e6c39dd4790 extends Twig_Template
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
        $__internal_da398ee72850cecd0f5a31d4fc30fd21f95439c3347918fa6c049f5bb8138db5 = $this->env->getExtension("native_profiler");
        $__internal_da398ee72850cecd0f5a31d4fc30fd21f95439c3347918fa6c049f5bb8138db5->enter($__internal_da398ee72850cecd0f5a31d4fc30fd21f95439c3347918fa6c049f5bb8138db5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "css", null, true);
        echo "

*/
";
        
        $__internal_da398ee72850cecd0f5a31d4fc30fd21f95439c3347918fa6c049f5bb8138db5->leave($__internal_da398ee72850cecd0f5a31d4fc30fd21f95439c3347918fa6c049f5bb8138db5_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.css.twig";
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
