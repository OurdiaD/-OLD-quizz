<?php

/* QuizIndexBundle:Quiz:addC.html.twig */
class __TwigTemplate_00903ce4799ae760442090474253f6ebbddebb0e76c6ad7d12fd1f1392e9afde extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("QuizIndexBundle::base.html.twig", "QuizIndexBundle:Quiz:addC.html.twig", 1);
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
        $__internal_e833b81f1b39a360c0942ab97e0e31e423e400268ed0790f7a9c61399f7bc52a = $this->env->getExtension("native_profiler");
        $__internal_e833b81f1b39a360c0942ab97e0e31e423e400268ed0790f7a9c61399f7bc52a->enter($__internal_e833b81f1b39a360c0942ab97e0e31e423e400268ed0790f7a9c61399f7bc52a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "QuizIndexBundle:Quiz:addC.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e833b81f1b39a360c0942ab97e0e31e423e400268ed0790f7a9c61399f7bc52a->leave($__internal_e833b81f1b39a360c0942ab97e0e31e423e400268ed0790f7a9c61399f7bc52a_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_3c9d4bb6899a09cc6a5634364f13fdd8db11d2b48302dc37cf6ad35dfc021b99 = $this->env->getExtension("native_profiler");
        $__internal_3c9d4bb6899a09cc6a5634364f13fdd8db11d2b48302dc37cf6ad35dfc021b99->enter($__internal_3c9d4bb6899a09cc6a5634364f13fdd8db11d2b48302dc37cf6ad35dfc021b99_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<h1>Ajouter Categorie</h1>
";
        // line 5
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "info"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 6
            echo "        <p>Message flash : ";
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "</p>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 8
        echo "
<form method='post' ";
        // line 9
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo ">
    ";
        // line 10
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
    <input type='submit' name='valid' class='btn btn-primary' />
</form>

";
        
        $__internal_3c9d4bb6899a09cc6a5634364f13fdd8db11d2b48302dc37cf6ad35dfc021b99->leave($__internal_3c9d4bb6899a09cc6a5634364f13fdd8db11d2b48302dc37cf6ad35dfc021b99_prof);

    }

    public function getTemplateName()
    {
        return "QuizIndexBundle:Quiz:addC.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  63 => 10,  59 => 9,  56 => 8,  47 => 6,  43 => 5,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'QuizIndexBundle::base.html.twig' %}*/
/* */
/* {% block body %}*/
/* <h1>Ajouter Categorie</h1>*/
/* {% for message in app.session.flashbag.get('info') %}*/
/*         <p>Message flash : {{ message }}</p>*/
/*       {% endfor %}*/
/* */
/* <form method='post' {{ form_enctype(form) }}>*/
/*     {{ form_widget(form) }}*/
/*     <input type='submit' name='valid' class='btn btn-primary' />*/
/* </form>*/
/* */
/* {% endblock %}*/
