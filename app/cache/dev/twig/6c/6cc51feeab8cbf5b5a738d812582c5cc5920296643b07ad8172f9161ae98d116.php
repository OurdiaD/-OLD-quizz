<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_8b85eb58a31e7efe1b3ea5b1d17e5b29ab4a72e7a36598ffedd864cd17f18998 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2e18f9aafbd20dbe0aab8b2ad5ea05d5b5e5ca08825ea26039f1d42880864a10 = $this->env->getExtension("native_profiler");
        $__internal_2e18f9aafbd20dbe0aab8b2ad5ea05d5b5e5ca08825ea26039f1d42880864a10->enter($__internal_2e18f9aafbd20dbe0aab8b2ad5ea05d5b5e5ca08825ea26039f1d42880864a10_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2e18f9aafbd20dbe0aab8b2ad5ea05d5b5e5ca08825ea26039f1d42880864a10->leave($__internal_2e18f9aafbd20dbe0aab8b2ad5ea05d5b5e5ca08825ea26039f1d42880864a10_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_f898c0c9db59d2e136401b43a7f410f0199eb76db903e7ae7f2012a578c413d1 = $this->env->getExtension("native_profiler");
        $__internal_f898c0c9db59d2e136401b43a7f410f0199eb76db903e7ae7f2012a578c413d1->enter($__internal_f898c0c9db59d2e136401b43a7f410f0199eb76db903e7ae7f2012a578c413d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_f898c0c9db59d2e136401b43a7f410f0199eb76db903e7ae7f2012a578c413d1->leave($__internal_f898c0c9db59d2e136401b43a7f410f0199eb76db903e7ae7f2012a578c413d1_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_fad576382d4ea8ae79f4f2526ae2b8a32bebcb17e31fc801aaeaf9d4ee268502 = $this->env->getExtension("native_profiler");
        $__internal_fad576382d4ea8ae79f4f2526ae2b8a32bebcb17e31fc801aaeaf9d4ee268502->enter($__internal_fad576382d4ea8ae79f4f2526ae2b8a32bebcb17e31fc801aaeaf9d4ee268502_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_fad576382d4ea8ae79f4f2526ae2b8a32bebcb17e31fc801aaeaf9d4ee268502->leave($__internal_fad576382d4ea8ae79f4f2526ae2b8a32bebcb17e31fc801aaeaf9d4ee268502_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_afc72f1903e11e925edd7492a7ced5faa982350c6945764af446b1ec8ab8ccfc = $this->env->getExtension("native_profiler");
        $__internal_afc72f1903e11e925edd7492a7ced5faa982350c6945764af446b1ec8ab8ccfc->enter($__internal_afc72f1903e11e925edd7492a7ced5faa982350c6945764af446b1ec8ab8ccfc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_afc72f1903e11e925edd7492a7ced5faa982350c6945764af446b1ec8ab8ccfc->leave($__internal_afc72f1903e11e925edd7492a7ced5faa982350c6945764af446b1ec8ab8ccfc_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include '@Twig/Exception/exception.html.twig' %}*/
/* {% endblock %}*/
/* */
