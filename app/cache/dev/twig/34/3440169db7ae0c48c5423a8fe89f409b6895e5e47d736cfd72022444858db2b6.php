<?php

/* @QuizIndex/Quiz/add.html.twig */
class __TwigTemplate_3fa45ee231a35b1d57498bb80b092de3d5b34d751fdfc70e7d6f41af4a329221 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("QuizIndexBundle::base.html.twig", "@QuizIndex/Quiz/add.html.twig", 1);
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
        $__internal_a049180338d7b4bac3572b548f1140172806fd441d79fcdc8897e43d7234730d = $this->env->getExtension("native_profiler");
        $__internal_a049180338d7b4bac3572b548f1140172806fd441d79fcdc8897e43d7234730d->enter($__internal_a049180338d7b4bac3572b548f1140172806fd441d79fcdc8897e43d7234730d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@QuizIndex/Quiz/add.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a049180338d7b4bac3572b548f1140172806fd441d79fcdc8897e43d7234730d->leave($__internal_a049180338d7b4bac3572b548f1140172806fd441d79fcdc8897e43d7234730d_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_837a52b97f4b53ee92dfb2e12075300f3906c9a21da13b5e7a055d2c2c210166 = $this->env->getExtension("native_profiler");
        $__internal_837a52b97f4b53ee92dfb2e12075300f3906c9a21da13b5e7a055d2c2c210166->enter($__internal_837a52b97f4b53ee92dfb2e12075300f3906c9a21da13b5e7a055d2c2c210166_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_837a52b97f4b53ee92dfb2e12075300f3906c9a21da13b5e7a055d2c2c210166->leave($__internal_837a52b97f4b53ee92dfb2e12075300f3906c9a21da13b5e7a055d2c2c210166_prof);

    }

    public function getTemplateName()
    {
        return "@QuizIndex/Quiz/add.html.twig";
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
