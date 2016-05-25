<?php

/* TwigBundle:Exception:exception.atom.twig */
class __TwigTemplate_3464d101e3c19fc95fec7d13936827627bc55bed97f304e78429b152e8dab8dc extends Twig_Template
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
        $__internal_bd14d745055fbf7814613799f32edf89d46064a8d34c3e539d1e7b22489e25d0 = $this->env->getExtension("native_profiler");
        $__internal_bd14d745055fbf7814613799f32edf89d46064a8d34c3e539d1e7b22489e25d0->enter($__internal_bd14d745055fbf7814613799f32edf89d46064a8d34c3e539d1e7b22489e25d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_bd14d745055fbf7814613799f32edf89d46064a8d34c3e539d1e7b22489e25d0->leave($__internal_bd14d745055fbf7814613799f32edf89d46064a8d34c3e539d1e7b22489e25d0_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.atom.twig";
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
