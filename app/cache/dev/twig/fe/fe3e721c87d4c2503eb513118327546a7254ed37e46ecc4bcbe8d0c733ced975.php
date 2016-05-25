<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_77ec19e380b876ee64bdf3caed1d4776545a94f4f133be7ec9b09fff3b1a3a9e extends Twig_Template
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
        $__internal_8518eaa4c8e98654e2112bc49194d465f161344e5e483b3ce8e27001253b3034 = $this->env->getExtension("native_profiler");
        $__internal_8518eaa4c8e98654e2112bc49194d465f161344e5e483b3ce8e27001253b3034->enter($__internal_8518eaa4c8e98654e2112bc49194d465f161344e5e483b3ce8e27001253b3034_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_8518eaa4c8e98654e2112bc49194d465f161344e5e483b3ce8e27001253b3034->leave($__internal_8518eaa4c8e98654e2112bc49194d465f161344e5e483b3ce8e27001253b3034_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/error.xml.twig' %}*/
/* */
