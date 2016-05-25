<?php

/* @Twig/Exception/error.atom.twig */
class __TwigTemplate_42d6e73f22afa57a254ee4d6b578fd211b2c137319c8f0a3f45816a94b6f320d extends Twig_Template
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
        $__internal_e9a9883688a109a661ff7bdcd6b096dbdae69f037be2eb788582d70a0860f6d2 = $this->env->getExtension("native_profiler");
        $__internal_e9a9883688a109a661ff7bdcd6b096dbdae69f037be2eb788582d70a0860f6d2->enter($__internal_e9a9883688a109a661ff7bdcd6b096dbdae69f037be2eb788582d70a0860f6d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "@Twig/Exception/error.atom.twig", 1)->display($context);
        
        $__internal_e9a9883688a109a661ff7bdcd6b096dbdae69f037be2eb788582d70a0860f6d2->leave($__internal_e9a9883688a109a661ff7bdcd6b096dbdae69f037be2eb788582d70a0860f6d2_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.atom.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/error.xml.twig' %}*/
/* */
