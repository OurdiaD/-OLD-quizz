<?php

/* QuizIndexBundle:Quiz:inscription.html.twig */
class __TwigTemplate_d5d112ce8b4c08ac9d2a3e6168f07624e80c02362f861ac3c2bde1a98d2496d1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("QuizIndexBundle::base.html.twig", "QuizIndexBundle:Quiz:inscription.html.twig", 1);
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
        $__internal_3ee31e92d38401614e3e97b78a71bbdef40b474f0b8e4e94be2375679b4e0774 = $this->env->getExtension("native_profiler");
        $__internal_3ee31e92d38401614e3e97b78a71bbdef40b474f0b8e4e94be2375679b4e0774->enter($__internal_3ee31e92d38401614e3e97b78a71bbdef40b474f0b8e4e94be2375679b4e0774_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "QuizIndexBundle:Quiz:inscription.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3ee31e92d38401614e3e97b78a71bbdef40b474f0b8e4e94be2375679b4e0774->leave($__internal_3ee31e92d38401614e3e97b78a71bbdef40b474f0b8e4e94be2375679b4e0774_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_7a57c4203a79a93eedd1561a0de58355777c83541f4eb62344ff1875a5819a64 = $this->env->getExtension("native_profiler");
        $__internal_7a57c4203a79a93eedd1561a0de58355777c83541f4eb62344ff1875a5819a64->enter($__internal_7a57c4203a79a93eedd1561a0de58355777c83541f4eb62344ff1875a5819a64_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_7a57c4203a79a93eedd1561a0de58355777c83541f4eb62344ff1875a5819a64->leave($__internal_7a57c4203a79a93eedd1561a0de58355777c83541f4eb62344ff1875a5819a64_prof);

    }

    public function getTemplateName()
    {
        return "QuizIndexBundle:Quiz:inscription.html.twig";
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
