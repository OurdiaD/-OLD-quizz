<?php

/* SensioDistributionBundle::Configurator/layout.html.twig */
class __TwigTemplate_aa498db37d829493aa8818caf016081afb320605fa2351af90cfbc7484cdef79 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TwigBundle::layout.html.twig", "SensioDistributionBundle::Configurator/layout.html.twig", 1);
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
        $__internal_54197fd7213f86c6bca87af468f60381f3180d1a0993563d7da01db2456b5fe6 = $this->env->getExtension("native_profiler");
        $__internal_54197fd7213f86c6bca87af468f60381f3180d1a0993563d7da01db2456b5fe6->enter($__internal_54197fd7213f86c6bca87af468f60381f3180d1a0993563d7da01db2456b5fe6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SensioDistributionBundle::Configurator/layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_54197fd7213f86c6bca87af468f60381f3180d1a0993563d7da01db2456b5fe6->leave($__internal_54197fd7213f86c6bca87af468f60381f3180d1a0993563d7da01db2456b5fe6_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_8ba85a277e202303567908f7409b54ffd53008c0eb4a06d3505a29ae0b28237c = $this->env->getExtension("native_profiler");
        $__internal_8ba85a277e202303567908f7409b54ffd53008c0eb4a06d3505a29ae0b28237c->enter($__internal_8ba85a277e202303567908f7409b54ffd53008c0eb4a06d3505a29ae0b28237c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/sensiodistribution/webconfigurator/css/configurator.css"), "html", null, true);
        echo "\" />
";
        
        $__internal_8ba85a277e202303567908f7409b54ffd53008c0eb4a06d3505a29ae0b28237c->leave($__internal_8ba85a277e202303567908f7409b54ffd53008c0eb4a06d3505a29ae0b28237c_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_f8978e8ae615e785939f5134d21a2a3c6011677e4c6c0cbcde6eadc546b4baab = $this->env->getExtension("native_profiler");
        $__internal_f8978e8ae615e785939f5134d21a2a3c6011677e4c6c0cbcde6eadc546b4baab->enter($__internal_f8978e8ae615e785939f5134d21a2a3c6011677e4c6c0cbcde6eadc546b4baab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Web Configurator Bundle";
        
        $__internal_f8978e8ae615e785939f5134d21a2a3c6011677e4c6c0cbcde6eadc546b4baab->leave($__internal_f8978e8ae615e785939f5134d21a2a3c6011677e4c6c0cbcde6eadc546b4baab_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_252b33c645fe8d2d9e395c87cf43c2b2b0c1b5bd2f860cba01f099b44e1b35f2 = $this->env->getExtension("native_profiler");
        $__internal_252b33c645fe8d2d9e395c87cf43c2b2b0c1b5bd2f860cba01f099b44e1b35f2->enter($__internal_252b33c645fe8d2d9e395c87cf43c2b2b0c1b5bd2f860cba01f099b44e1b35f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_252b33c645fe8d2d9e395c87cf43c2b2b0c1b5bd2f860cba01f099b44e1b35f2->leave($__internal_252b33c645fe8d2d9e395c87cf43c2b2b0c1b5bd2f860cba01f099b44e1b35f2_prof);

    }

    // line 11
    public function block_content($context, array $blocks = array())
    {
        $__internal_ef9b059026655aebcbcc1efcf50c6bc61137185058c7a1e6064a68b26b95752c = $this->env->getExtension("native_profiler");
        $__internal_ef9b059026655aebcbcc1efcf50c6bc61137185058c7a1e6064a68b26b95752c->enter($__internal_ef9b059026655aebcbcc1efcf50c6bc61137185058c7a1e6064a68b26b95752c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        
        $__internal_ef9b059026655aebcbcc1efcf50c6bc61137185058c7a1e6064a68b26b95752c->leave($__internal_ef9b059026655aebcbcc1efcf50c6bc61137185058c7a1e6064a68b26b95752c_prof);

    }

    public function getTemplateName()
    {
        return "SensioDistributionBundle::Configurator/layout.html.twig";
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
