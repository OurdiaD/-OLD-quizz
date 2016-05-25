<?php

/* @WebProfiler/Profiler/ajax_layout.html.twig */
class __TwigTemplate_a8783992439e05b7a1d9e275ad391e176454e1e8e21ec8afd2f66f78fa27dc04 extends Twig_Template
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
        $__internal_7621ae1877119375f7178ac0855e2af42123d24f48071f1a664ff32eb616019e = $this->env->getExtension("native_profiler");
        $__internal_7621ae1877119375f7178ac0855e2af42123d24f48071f1a664ff32eb616019e->enter($__internal_7621ae1877119375f7178ac0855e2af42123d24f48071f1a664ff32eb616019e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_7621ae1877119375f7178ac0855e2af42123d24f48071f1a664ff32eb616019e->leave($__internal_7621ae1877119375f7178ac0855e2af42123d24f48071f1a664ff32eb616019e_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_f30dd0bebd060325ff24c34a98e65b0076ec83fe873fe6e2782a8c72dc735479 = $this->env->getExtension("native_profiler");
        $__internal_f30dd0bebd060325ff24c34a98e65b0076ec83fe873fe6e2782a8c72dc735479->enter($__internal_f30dd0bebd060325ff24c34a98e65b0076ec83fe873fe6e2782a8c72dc735479_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_f30dd0bebd060325ff24c34a98e65b0076ec83fe873fe6e2782a8c72dc735479->leave($__internal_f30dd0bebd060325ff24c34a98e65b0076ec83fe873fe6e2782a8c72dc735479_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }
}
/* {% block panel '' %}*/
/* */
