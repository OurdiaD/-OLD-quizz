<?php

/* @QuizIndex/Quiz/addC.html.twig */
class __TwigTemplate_a56d45154c46dfa24417547f0e24d8470fad4f486d6d9e1ddb749e33b09c487a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("QuizIndexBundle::base.html.twig", "@QuizIndex/Quiz/addC.html.twig", 1);
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
        $__internal_02887d08d1c82bd1b30d93aad15da3ee29938e699379d50902f6ea81db7a84ea = $this->env->getExtension("native_profiler");
        $__internal_02887d08d1c82bd1b30d93aad15da3ee29938e699379d50902f6ea81db7a84ea->enter($__internal_02887d08d1c82bd1b30d93aad15da3ee29938e699379d50902f6ea81db7a84ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@QuizIndex/Quiz/addC.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_02887d08d1c82bd1b30d93aad15da3ee29938e699379d50902f6ea81db7a84ea->leave($__internal_02887d08d1c82bd1b30d93aad15da3ee29938e699379d50902f6ea81db7a84ea_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_8a1f26d2fd4c11e93ff307797a47b4dd30d9004636226619c1cf99e9466f23c6 = $this->env->getExtension("native_profiler");
        $__internal_8a1f26d2fd4c11e93ff307797a47b4dd30d9004636226619c1cf99e9466f23c6->enter($__internal_8a1f26d2fd4c11e93ff307797a47b4dd30d9004636226619c1cf99e9466f23c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_8a1f26d2fd4c11e93ff307797a47b4dd30d9004636226619c1cf99e9466f23c6->leave($__internal_8a1f26d2fd4c11e93ff307797a47b4dd30d9004636226619c1cf99e9466f23c6_prof);

    }

    public function getTemplateName()
    {
        return "@QuizIndex/Quiz/addC.html.twig";
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
