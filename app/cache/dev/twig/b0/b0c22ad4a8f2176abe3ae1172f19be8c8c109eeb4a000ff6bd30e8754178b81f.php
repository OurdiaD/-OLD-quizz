<?php

/* @QuizIndex/Quiz/question.html.twig */
class __TwigTemplate_b5b817b95421f21a3a9c34d569fca734930d799a6056b8006b141879b85fb7af extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("QuizIndexBundle::base.html.twig", "@QuizIndex/Quiz/question.html.twig", 1);
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
        $__internal_afafe9fc949190dc6a68efe0c5dffc28ae4a945a632da2001db62c1f94afece2 = $this->env->getExtension("native_profiler");
        $__internal_afafe9fc949190dc6a68efe0c5dffc28ae4a945a632da2001db62c1f94afece2->enter($__internal_afafe9fc949190dc6a68efe0c5dffc28ae4a945a632da2001db62c1f94afece2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@QuizIndex/Quiz/question.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_afafe9fc949190dc6a68efe0c5dffc28ae4a945a632da2001db62c1f94afece2->leave($__internal_afafe9fc949190dc6a68efe0c5dffc28ae4a945a632da2001db62c1f94afece2_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_69a8506e637cf128613561b701a0b6dbe1f3a254bf9fc15a249ec9f7ce06ec15 = $this->env->getExtension("native_profiler");
        $__internal_69a8506e637cf128613561b701a0b6dbe1f3a254bf9fc15a249ec9f7ce06ec15->enter($__internal_69a8506e637cf128613561b701a0b6dbe1f3a254bf9fc15a249ec9f7ce06ec15_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<h1>question</h1>
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
        echo "<p>";
        echo twig_escape_filter($this->env, (isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")), "html", null, true);
        echo "</p>
<form method='post' ";
        // line 9
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo ">
    ";
        // line 10
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
    <input type='submit' name='valid' class='btn btn-primary' />
    <input type='submit' name='next' class='btn btn-primary' value='Suivant' />
</form>

";
        
        $__internal_69a8506e637cf128613561b701a0b6dbe1f3a254bf9fc15a249ec9f7ce06ec15->leave($__internal_69a8506e637cf128613561b701a0b6dbe1f3a254bf9fc15a249ec9f7ce06ec15_prof);

    }

    public function getTemplateName()
    {
        return "@QuizIndex/Quiz/question.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  65 => 10,  61 => 9,  56 => 8,  47 => 6,  43 => 5,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'QuizIndexBundle::base.html.twig' %}*/
/* */
/* {% block body %}*/
/* <h1>question</h1>*/
/* {% for message in app.session.flashbag.get('info') %}*/
/*         <p>Message flash : {{ message }}</p>*/
/*       {% endfor %}*/
/* <p>{{ label }}</p>*/
/* <form method='post' {{ form_enctype(form) }}>*/
/*     {{ form_widget(form) }}*/
/*     <input type='submit' name='valid' class='btn btn-primary' />*/
/*     <input type='submit' name='next' class='btn btn-primary' value='Suivant' />*/
/* </form>*/
/* */
/* {% endblock %}*/
