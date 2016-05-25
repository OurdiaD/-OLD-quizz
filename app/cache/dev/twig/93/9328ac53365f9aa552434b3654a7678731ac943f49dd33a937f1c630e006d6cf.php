<?php

/* TwigBundle:Exception:error.js.twig */
class __TwigTemplate_aea3574248957423356ebc81f9c2336339bd104e62af29bb3e0f460dcce57894 extends Twig_Template
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
        $__internal_a3a1983026d47fc7966adab2d09d639bd3167643d54256e5a8c78a22929904cc = $this->env->getExtension("native_profiler");
        $__internal_a3a1983026d47fc7966adab2d09d639bd3167643d54256e5a8c78a22929904cc->enter($__internal_a3a1983026d47fc7966adab2d09d639bd3167643d54256e5a8c78a22929904cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

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
        
        $__internal_a3a1983026d47fc7966adab2d09d639bd3167643d54256e5a8c78a22929904cc->leave($__internal_a3a1983026d47fc7966adab2d09d639bd3167643d54256e5a8c78a22929904cc_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.js.twig";
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
