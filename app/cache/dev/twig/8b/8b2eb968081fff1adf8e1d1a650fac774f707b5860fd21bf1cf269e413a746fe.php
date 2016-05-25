<?php

/* default/index.html.twig */
class __TwigTemplate_e5d605ab209c6a0efd95600671aaad0f1eb8da308aff78ed7d4b26f12b0b9169 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "default/index.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0a5ebe28429fbbed24969c2fbecc1b64193f86a976464f2adb28890dcf7302ad = $this->env->getExtension("native_profiler");
        $__internal_0a5ebe28429fbbed24969c2fbecc1b64193f86a976464f2adb28890dcf7302ad->enter($__internal_0a5ebe28429fbbed24969c2fbecc1b64193f86a976464f2adb28890dcf7302ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0a5ebe28429fbbed24969c2fbecc1b64193f86a976464f2adb28890dcf7302ad->leave($__internal_0a5ebe28429fbbed24969c2fbecc1b64193f86a976464f2adb28890dcf7302ad_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_db9208e43ece456d9da60a51a12a525e79628ae5500d54ffe8bbc10f6ae24377 = $this->env->getExtension("native_profiler");
        $__internal_db9208e43ece456d9da60a51a12a525e79628ae5500d54ffe8bbc10f6ae24377->enter($__internal_db9208e43ece456d9da60a51a12a525e79628ae5500d54ffe8bbc10f6ae24377_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    Homepage.
";
        
        $__internal_db9208e43ece456d9da60a51a12a525e79628ae5500d54ffe8bbc10f6ae24377->leave($__internal_db9208e43ece456d9da60a51a12a525e79628ae5500d54ffe8bbc10f6ae24377_prof);

    }

    public function getTemplateName()
    {
        return "default/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     Homepage.*/
/* {% endblock %}*/
/* */
