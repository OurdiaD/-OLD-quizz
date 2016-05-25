<?php

/* @QuizIndex/Quiz/inscription.html.twig */
class __TwigTemplate_1d5ef9c1a8c7d1e2c5a11a3c6f7b184cfa78bac67d0392038d5d2f816bc7b732 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("QuizIndexBundle::base.html.twig", "@QuizIndex/Quiz/inscription.html.twig", 1);
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
        $__internal_d89c711809b551f31a4908899595351e46d5a3c74b8669a4b2954faa54ca7868 = $this->env->getExtension("native_profiler");
        $__internal_d89c711809b551f31a4908899595351e46d5a3c74b8669a4b2954faa54ca7868->enter($__internal_d89c711809b551f31a4908899595351e46d5a3c74b8669a4b2954faa54ca7868_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@QuizIndex/Quiz/inscription.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d89c711809b551f31a4908899595351e46d5a3c74b8669a4b2954faa54ca7868->leave($__internal_d89c711809b551f31a4908899595351e46d5a3c74b8669a4b2954faa54ca7868_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_7ccb94146b0691de2b6de8d177292f2aaf7e37aa10fd9b6a10ac89e278db06e6 = $this->env->getExtension("native_profiler");
        $__internal_7ccb94146b0691de2b6de8d177292f2aaf7e37aa10fd9b6a10ac89e278db06e6->enter($__internal_7ccb94146b0691de2b6de8d177292f2aaf7e37aa10fd9b6a10ac89e278db06e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<h1>Inscription</h1>
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
        echo "<form method='post' ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo ">
    ";
        // line 9
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
    <input type='submit' class='btn btn-primary' />
</form>
";
        
        $__internal_7ccb94146b0691de2b6de8d177292f2aaf7e37aa10fd9b6a10ac89e278db06e6->leave($__internal_7ccb94146b0691de2b6de8d177292f2aaf7e37aa10fd9b6a10ac89e278db06e6_prof);

    }

    public function getTemplateName()
    {
        return "@QuizIndex/Quiz/inscription.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  61 => 9,  56 => 8,  47 => 6,  43 => 5,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'QuizIndexBundle::base.html.twig' %}*/
/* */
/* {% block body %}*/
/* <h1>Inscription</h1>*/
/*      {% for message in app.session.flashbag.get('info') %}*/
/*         <p>Message flash : {{ message }}</p>*/
/*       {% endfor %}*/
/* <form method='post' {{ form_enctype(form) }}>*/
/*     {{ form_widget(form) }}*/
/*     <input type='submit' class='btn btn-primary' />*/
/* </form>*/
/* {% endblock %}*/
