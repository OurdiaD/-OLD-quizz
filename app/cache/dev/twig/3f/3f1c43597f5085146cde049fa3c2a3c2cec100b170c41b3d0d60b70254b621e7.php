<?php

/* :default:index.html.twig */
class __TwigTemplate_9b418f2341e4b5886cb589412c5d41f72cb7ae145eeda3cbf2ad134626f348f6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":default:index.html.twig", 1);
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
        $__internal_06d04d25f7f7949923d59188fb26fb1d16c3c5cb8433ed551e38c0a4ca1a4937 = $this->env->getExtension("native_profiler");
        $__internal_06d04d25f7f7949923d59188fb26fb1d16c3c5cb8433ed551e38c0a4ca1a4937->enter($__internal_06d04d25f7f7949923d59188fb26fb1d16c3c5cb8433ed551e38c0a4ca1a4937_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_06d04d25f7f7949923d59188fb26fb1d16c3c5cb8433ed551e38c0a4ca1a4937->leave($__internal_06d04d25f7f7949923d59188fb26fb1d16c3c5cb8433ed551e38c0a4ca1a4937_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_3347baee538cb493bcf31ebaf021eea96009f9fa6752df1e0ce56dcd5b304310 = $this->env->getExtension("native_profiler");
        $__internal_3347baee538cb493bcf31ebaf021eea96009f9fa6752df1e0ce56dcd5b304310->enter($__internal_3347baee538cb493bcf31ebaf021eea96009f9fa6752df1e0ce56dcd5b304310_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    Homepage.
";
        
        $__internal_3347baee538cb493bcf31ebaf021eea96009f9fa6752df1e0ce56dcd5b304310->leave($__internal_3347baee538cb493bcf31ebaf021eea96009f9fa6752df1e0ce56dcd5b304310_prof);

    }

    public function getTemplateName()
    {
        return ":default:index.html.twig";
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
