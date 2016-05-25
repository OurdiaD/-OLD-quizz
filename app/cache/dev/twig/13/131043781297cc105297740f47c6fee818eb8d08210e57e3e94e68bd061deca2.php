<?php

/* TwigBundle:Exception:error.css.twig */
class __TwigTemplate_c0b10f0512d1589975670b3f49d3f3c04e0e794062dc1b0471d5880f49dbdd68 extends Twig_Template
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
        $__internal_9ec46d52187b62aa8efcc58e17a53e37cbed1da5b65824ee72040feb970d2931 = $this->env->getExtension("native_profiler");
        $__internal_9ec46d52187b62aa8efcc58e17a53e37cbed1da5b65824ee72040feb970d2931->enter($__internal_9ec46d52187b62aa8efcc58e17a53e37cbed1da5b65824ee72040feb970d2931_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

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
        
        $__internal_9ec46d52187b62aa8efcc58e17a53e37cbed1da5b65824ee72040feb970d2931->leave($__internal_9ec46d52187b62aa8efcc58e17a53e37cbed1da5b65824ee72040feb970d2931_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.css.twig";
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
