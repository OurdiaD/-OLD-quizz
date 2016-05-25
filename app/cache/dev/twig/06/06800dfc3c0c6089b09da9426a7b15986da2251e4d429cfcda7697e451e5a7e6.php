<?php

/* @QuizIndex/Quiz/modif.html.twig */
class __TwigTemplate_f0780c8d496bc27d351b4985a9c787415627506e43213db95b1092ba9a0a1d54 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("QuizIndexBundle::base.html.twig", "@QuizIndex/Quiz/modif.html.twig", 1);
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
        $__internal_7ff52c4724ed683b2cd1722b42e7df5b189085b9bd7ed08993342b80022b4a0c = $this->env->getExtension("native_profiler");
        $__internal_7ff52c4724ed683b2cd1722b42e7df5b189085b9bd7ed08993342b80022b4a0c->enter($__internal_7ff52c4724ed683b2cd1722b42e7df5b189085b9bd7ed08993342b80022b4a0c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@QuizIndex/Quiz/modif.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7ff52c4724ed683b2cd1722b42e7df5b189085b9bd7ed08993342b80022b4a0c->leave($__internal_7ff52c4724ed683b2cd1722b42e7df5b189085b9bd7ed08993342b80022b4a0c_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_0dc5fc2bd77bf2a72760ab158333eea6d1efc10d025fcf69d3130e358c27188f = $this->env->getExtension("native_profiler");
        $__internal_0dc5fc2bd77bf2a72760ab158333eea6d1efc10d025fcf69d3130e358c27188f->enter($__internal_0dc5fc2bd77bf2a72760ab158333eea6d1efc10d025fcf69d3130e358c27188f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_0dc5fc2bd77bf2a72760ab158333eea6d1efc10d025fcf69d3130e358c27188f->leave($__internal_0dc5fc2bd77bf2a72760ab158333eea6d1efc10d025fcf69d3130e358c27188f_prof);

    }

    public function getTemplateName()
    {
        return "@QuizIndex/Quiz/modif.html.twig";
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
