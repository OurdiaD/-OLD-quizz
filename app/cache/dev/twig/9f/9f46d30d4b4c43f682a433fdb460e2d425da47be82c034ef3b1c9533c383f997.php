<?php

/* TwigBundle:Exception:exception.rdf.twig */
class __TwigTemplate_f94998dc4d0d60bfba3ca50d4dfbef21a80f58b21f63e019019c752e5f4c395b extends Twig_Template
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
        $__internal_1ef940646f378455b688da2f58bfbc4e03a5e086980c085a75f324175b327be5 = $this->env->getExtension("native_profiler");
        $__internal_1ef940646f378455b688da2f58bfbc4e03a5e086980c085a75f324175b327be5->enter($__internal_1ef940646f378455b688da2f58bfbc4e03a5e086980c085a75f324175b327be5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_1ef940646f378455b688da2f58bfbc4e03a5e086980c085a75f324175b327be5->leave($__internal_1ef940646f378455b688da2f58bfbc4e03a5e086980c085a75f324175b327be5_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.rdf.twig";
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
