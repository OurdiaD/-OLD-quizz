<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_8bb1080a90e0d6f51cde13d1b94852316c2993cd6066460b4e7b1c0129ac80ff extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_80b8c143438314a21d3144fedc70f4507406057871e2154f4548bec74c82f917 = $this->env->getExtension("native_profiler");
        $__internal_80b8c143438314a21d3144fedc70f4507406057871e2154f4548bec74c82f917->enter($__internal_80b8c143438314a21d3144fedc70f4507406057871e2154f4548bec74c82f917_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_80b8c143438314a21d3144fedc70f4507406057871e2154f4548bec74c82f917->leave($__internal_80b8c143438314a21d3144fedc70f4507406057871e2154f4548bec74c82f917_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_e6b919218a345b6bfd8e8c2b6d7915833a615cd171c474e9dbdaee2a69688705 = $this->env->getExtension("native_profiler");
        $__internal_e6b919218a345b6bfd8e8c2b6d7915833a615cd171c474e9dbdaee2a69688705->enter($__internal_e6b919218a345b6bfd8e8c2b6d7915833a615cd171c474e9dbdaee2a69688705_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_e6b919218a345b6bfd8e8c2b6d7915833a615cd171c474e9dbdaee2a69688705->leave($__internal_e6b919218a345b6bfd8e8c2b6d7915833a615cd171c474e9dbdaee2a69688705_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }
}
/* {% block panel '' %}*/
/* */
