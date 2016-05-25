<?php

/* QuizIndexBundle:Quiz:add.html.twig */
class __TwigTemplate_b67ff362010bfc0a5a7654bee8fd77513e56141d509b67eeedba7d1a7ffcd372 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("QuizIndexBundle::base.html.twig", "QuizIndexBundle:Quiz:add.html.twig", 1);
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
        $__internal_44ce7bb865562aaf8e759d68aef253526e12afd62aeb1c26ca74eb8863854fb0 = $this->env->getExtension("native_profiler");
        $__internal_44ce7bb865562aaf8e759d68aef253526e12afd62aeb1c26ca74eb8863854fb0->enter($__internal_44ce7bb865562aaf8e759d68aef253526e12afd62aeb1c26ca74eb8863854fb0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "QuizIndexBundle:Quiz:add.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_44ce7bb865562aaf8e759d68aef253526e12afd62aeb1c26ca74eb8863854fb0->leave($__internal_44ce7bb865562aaf8e759d68aef253526e12afd62aeb1c26ca74eb8863854fb0_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_24e3dbfa101765526ffec6dfe28c361b30391ca1fe1fc6d29ee0d1c1e54042c1 = $this->env->getExtension("native_profiler");
        $__internal_24e3dbfa101765526ffec6dfe28c361b30391ca1fe1fc6d29ee0d1c1e54042c1->enter($__internal_24e3dbfa101765526ffec6dfe28c361b30391ca1fe1fc6d29ee0d1c1e54042c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<h1>Nouveau</h1>
<form method='post' ";
        // line 5
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo ">
    ";
        // line 6
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
    <input type='submit' class='btn btn-primary' />
</form>

";
        
        $__internal_24e3dbfa101765526ffec6dfe28c361b30391ca1fe1fc6d29ee0d1c1e54042c1->leave($__internal_24e3dbfa101765526ffec6dfe28c361b30391ca1fe1fc6d29ee0d1c1e54042c1_prof);

    }

    public function getTemplateName()
    {
        return "QuizIndexBundle:Quiz:add.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  47 => 6,  43 => 5,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'QuizIndexBundle::base.html.twig' %}*/
/* */
/* {% block body %}*/
/* <h1>Nouveau</h1>*/
/* <form method='post' {{ form_enctype(form) }}>*/
/*     {{ form_widget(form) }}*/
/*     <input type='submit' class='btn btn-primary' />*/
/* </form>*/
/* */
/* {% endblock %}*/
