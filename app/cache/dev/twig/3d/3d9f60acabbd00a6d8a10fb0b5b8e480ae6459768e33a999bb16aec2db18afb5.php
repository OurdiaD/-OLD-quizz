<?php

/* QuizIndexBundle:Default:index.html.twig */
class __TwigTemplate_25f8dbc4b2c2325582835eceb1118761574277cfe5f7e2a18bc13cd6929152c2 extends Twig_Template
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
        $__internal_8055ea1c449f7599a808ceacbb6ca3628e761d21bf8f2dae17ae0e117ac218f3 = $this->env->getExtension("native_profiler");
        $__internal_8055ea1c449f7599a808ceacbb6ca3628e761d21bf8f2dae17ae0e117ac218f3->enter($__internal_8055ea1c449f7599a808ceacbb6ca3628e761d21bf8f2dae17ae0e117ac218f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "QuizIndexBundle:Default:index.html.twig"));

        // line 1
        echo "Hello ";
        echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "html", null, true);
        echo "!
";
        
        $__internal_8055ea1c449f7599a808ceacbb6ca3628e761d21bf8f2dae17ae0e117ac218f3->leave($__internal_8055ea1c449f7599a808ceacbb6ca3628e761d21bf8f2dae17ae0e117ac218f3_prof);

    }

    public function getTemplateName()
    {
        return "QuizIndexBundle:Default:index.html.twig";
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
/* Hello {{ name }}!*/
/* */
