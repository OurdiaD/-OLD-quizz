<?php

/* @SensioDistribution/Configurator/layout.html.twig */
class __TwigTemplate_68ffbc2ce2d7214c185ba8e291cc64750766ddbb6253868b433ca71159d0925c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TwigBundle::layout.html.twig", "@SensioDistribution/Configurator/layout.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TwigBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_48875b5ce4fb9563fa287acb5436129b5eab7dfa153de0eb5126418b2a86c7b1 = $this->env->getExtension("native_profiler");
        $__internal_48875b5ce4fb9563fa287acb5436129b5eab7dfa153de0eb5126418b2a86c7b1->enter($__internal_48875b5ce4fb9563fa287acb5436129b5eab7dfa153de0eb5126418b2a86c7b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SensioDistribution/Configurator/layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_48875b5ce4fb9563fa287acb5436129b5eab7dfa153de0eb5126418b2a86c7b1->leave($__internal_48875b5ce4fb9563fa287acb5436129b5eab7dfa153de0eb5126418b2a86c7b1_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_266f1c0bfb6dea30632e5b0c2aa4c95cc32c9631acc3e6c508c5a7f7702dca51 = $this->env->getExtension("native_profiler");
        $__internal_266f1c0bfb6dea30632e5b0c2aa4c95cc32c9631acc3e6c508c5a7f7702dca51->enter($__internal_266f1c0bfb6dea30632e5b0c2aa4c95cc32c9631acc3e6c508c5a7f7702dca51_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/sensiodistribution/webconfigurator/css/configurator.css"), "html", null, true);
        echo "\" />
";
        
        $__internal_266f1c0bfb6dea30632e5b0c2aa4c95cc32c9631acc3e6c508c5a7f7702dca51->leave($__internal_266f1c0bfb6dea30632e5b0c2aa4c95cc32c9631acc3e6c508c5a7f7702dca51_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_ab502101571d9e507b801320aeb8cfc6c412d9394518da77c5ffbe3a91901a9d = $this->env->getExtension("native_profiler");
        $__internal_ab502101571d9e507b801320aeb8cfc6c412d9394518da77c5ffbe3a91901a9d->enter($__internal_ab502101571d9e507b801320aeb8cfc6c412d9394518da77c5ffbe3a91901a9d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Web Configurator Bundle";
        
        $__internal_ab502101571d9e507b801320aeb8cfc6c412d9394518da77c5ffbe3a91901a9d->leave($__internal_ab502101571d9e507b801320aeb8cfc6c412d9394518da77c5ffbe3a91901a9d_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_8c6b4696454a671f649d8d8adbc9529de19ca96e042a1f25412a2194e1bfd533 = $this->env->getExtension("native_profiler");
        $__internal_8c6b4696454a671f649d8d8adbc9529de19ca96e042a1f25412a2194e1bfd533->enter($__internal_8c6b4696454a671f649d8d8adbc9529de19ca96e042a1f25412a2194e1bfd533_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "    <div class=\"block\">
        ";
        // line 11
        $this->displayBlock('content', $context, $blocks);
        // line 12
        echo "    </div>
    <div class=\"version\">Symfony Standard Edition v.";
        // line 13
        echo twig_escape_filter($this->env, (isset($context["version"]) ? $context["version"] : $this->getContext($context, "version")), "html", null, true);
        echo "</div>
";
        
        $__internal_8c6b4696454a671f649d8d8adbc9529de19ca96e042a1f25412a2194e1bfd533->leave($__internal_8c6b4696454a671f649d8d8adbc9529de19ca96e042a1f25412a2194e1bfd533_prof);

    }

    // line 11
    public function block_content($context, array $blocks = array())
    {
        $__internal_2a9399396fc83f93ccbcb0827cefc736544506b14683112096df9daa51246876 = $this->env->getExtension("native_profiler");
        $__internal_2a9399396fc83f93ccbcb0827cefc736544506b14683112096df9daa51246876->enter($__internal_2a9399396fc83f93ccbcb0827cefc736544506b14683112096df9daa51246876_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        
        $__internal_2a9399396fc83f93ccbcb0827cefc736544506b14683112096df9daa51246876->leave($__internal_2a9399396fc83f93ccbcb0827cefc736544506b14683112096df9daa51246876_prof);

    }

    public function getTemplateName()
    {
        return "@SensioDistribution/Configurator/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 11,  79 => 13,  76 => 12,  74 => 11,  71 => 10,  65 => 9,  53 => 7,  43 => 4,  37 => 3,  11 => 1,);
    }
}
/* {% extends "TwigBundle::layout.html.twig" %}*/
/* */
/* {% block head %}*/
/*     <link rel="stylesheet" href="{{ asset('bundles/sensiodistribution/webconfigurator/css/configurator.css') }}" />*/
/* {% endblock %}*/
/* */
/* {% block title 'Web Configurator Bundle' %}*/
/* */
/* {% block body %}*/
/*     <div class="block">*/
/*         {% block content %}{% endblock %}*/
/*     </div>*/
/*     <div class="version">Symfony Standard Edition v.{{ version }}</div>*/
/* {% endblock %}*/
/* */
