<?php

/* @QuizIndex/Quiz/bla.html.twig */
class __TwigTemplate_d7f35a0794388e8e0258a5e27db34204726062387995850da76fbdf2135d12a3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("QuizIndexBundle::base.html.twig", "@QuizIndex/Quiz/bla.html.twig", 1);
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
        $__internal_11b26cadab4b23b5fffaddd17571223eee83d73aef5516bd0e89f26f8273322d = $this->env->getExtension("native_profiler");
        $__internal_11b26cadab4b23b5fffaddd17571223eee83d73aef5516bd0e89f26f8273322d->enter($__internal_11b26cadab4b23b5fffaddd17571223eee83d73aef5516bd0e89f26f8273322d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@QuizIndex/Quiz/bla.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_11b26cadab4b23b5fffaddd17571223eee83d73aef5516bd0e89f26f8273322d->leave($__internal_11b26cadab4b23b5fffaddd17571223eee83d73aef5516bd0e89f26f8273322d_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_c47ec204c0cfadb8ec5dd86fb46234af9aab881e14a9f7621774ee00c2ee74bf = $this->env->getExtension("native_profiler");
        $__internal_c47ec204c0cfadb8ec5dd86fb46234af9aab881e14a9f7621774ee00c2ee74bf->enter($__internal_c47ec204c0cfadb8ec5dd86fb46234af9aab881e14a9f7621774ee00c2ee74bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<h1>Bla</h1>
";
        // line 5
        echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "html", null, true);
        echo "
    
";
        
        $__internal_c47ec204c0cfadb8ec5dd86fb46234af9aab881e14a9f7621774ee00c2ee74bf->leave($__internal_c47ec204c0cfadb8ec5dd86fb46234af9aab881e14a9f7621774ee00c2ee74bf_prof);

    }

    public function getTemplateName()
    {
        return "@QuizIndex/Quiz/bla.html.twig";
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
