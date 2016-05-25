<?php

/* QuizIndexBundle:Quiz:bla.html.twig */
class __TwigTemplate_8b4ae296eb840e6bfd8e3ec9c3219254eb3bd71c0e9680621f9a003ff391ef2f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("QuizIndexBundle::base.html.twig", "QuizIndexBundle:Quiz:bla.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "QuizIndexBundle::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a893503fd3496226b46b575da1d95379e79e5645bf20ac7546b1179341414d75 = $this->env->getExtension("native_profiler");
        $__internal_a893503fd3496226b46b575da1d95379e79e5645bf20ac7546b1179341414d75->enter($__internal_a893503fd3496226b46b575da1d95379e79e5645bf20ac7546b1179341414d75_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "QuizIndexBundle:Quiz:bla.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a893503fd3496226b46b575da1d95379e79e5645bf20ac7546b1179341414d75->leave($__internal_a893503fd3496226b46b575da1d95379e79e5645bf20ac7546b1179341414d75_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_76a717f4f19654d622243474843232da721a68e63fff4db208e4d921736da028 = $this->env->getExtension("native_profiler");
        $__internal_76a717f4f19654d622243474843232da721a68e63fff4db208e4d921736da028->enter($__internal_76a717f4f19654d622243474843232da721a68e63fff4db208e4d921736da028_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<h1>Bla</h1>
";
        // line 5
        echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "html", null, true);
        echo "
    
";
        
        $__internal_76a717f4f19654d622243474843232da721a68e63fff4db208e4d921736da028->leave($__internal_76a717f4f19654d622243474843232da721a68e63fff4db208e4d921736da028_prof);

    }

    public function getTemplateName()
    {
        return "QuizIndexBundle:Quiz:bla.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 5,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'QuizIndexBundle::base.html.twig' %}*/
/* */
/* {% block body %}*/
/* <h1>Bla</h1>*/
/* {{ name }}*/
/*     */
/* {% endblock %}*/
