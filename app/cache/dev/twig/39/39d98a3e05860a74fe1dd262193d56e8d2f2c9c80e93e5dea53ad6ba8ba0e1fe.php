<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_3fb0fa4927451f2064b7a75613940d1692790c468be255a799d06114034ca0e5 extends Twig_Template
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
        $__internal_318a1048ad55325a69061494ded8522bcf29a27cc6bee93911fd15ebff2b3a7f = $this->env->getExtension("native_profiler");
        $__internal_318a1048ad55325a69061494ded8522bcf29a27cc6bee93911fd15ebff2b3a7f->enter($__internal_318a1048ad55325a69061494ded8522bcf29a27cc6bee93911fd15ebff2b3a7f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.rdf.twig", 1)->display($context);
        
        $__internal_318a1048ad55325a69061494ded8522bcf29a27cc6bee93911fd15ebff2b3a7f->leave($__internal_318a1048ad55325a69061494ded8522bcf29a27cc6bee93911fd15ebff2b3a7f_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.rdf.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/error.xml.twig' %}*/
/* */
