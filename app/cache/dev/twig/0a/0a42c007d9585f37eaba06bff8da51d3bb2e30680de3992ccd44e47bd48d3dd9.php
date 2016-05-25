<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_f11fdc5686d2b89a0a6464ef3fc45229c7be0c38bbba2334aae65d847764bee4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
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
        $__internal_69c5d749289f881a181c4477ca59c0100200d2c32142d8bec96305a4d449d99c = $this->env->getExtension("native_profiler");
        $__internal_69c5d749289f881a181c4477ca59c0100200d2c32142d8bec96305a4d449d99c->enter($__internal_69c5d749289f881a181c4477ca59c0100200d2c32142d8bec96305a4d449d99c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_69c5d749289f881a181c4477ca59c0100200d2c32142d8bec96305a4d449d99c->leave($__internal_69c5d749289f881a181c4477ca59c0100200d2c32142d8bec96305a4d449d99c_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_8dbd0244b030bcee05f55cc763b42c8098fd6f7dfeb393e31808a75070f120d8 = $this->env->getExtension("native_profiler");
        $__internal_8dbd0244b030bcee05f55cc763b42c8098fd6f7dfeb393e31808a75070f120d8->enter($__internal_8dbd0244b030bcee05f55cc763b42c8098fd6f7dfeb393e31808a75070f120d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_8dbd0244b030bcee05f55cc763b42c8098fd6f7dfeb393e31808a75070f120d8->leave($__internal_8dbd0244b030bcee05f55cc763b42c8098fd6f7dfeb393e31808a75070f120d8_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_3b259aaffa6a08dea0e50699c2de837a59b62a7e8b4cd105120d261060f24908 = $this->env->getExtension("native_profiler");
        $__internal_3b259aaffa6a08dea0e50699c2de837a59b62a7e8b4cd105120d261060f24908->enter($__internal_3b259aaffa6a08dea0e50699c2de837a59b62a7e8b4cd105120d261060f24908_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_3b259aaffa6a08dea0e50699c2de837a59b62a7e8b4cd105120d261060f24908->leave($__internal_3b259aaffa6a08dea0e50699c2de837a59b62a7e8b4cd105120d261060f24908_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_0f8cec2c975e72d503a44fab3b579ff5db5153bbaed438099a054476dd287612 = $this->env->getExtension("native_profiler");
        $__internal_0f8cec2c975e72d503a44fab3b579ff5db5153bbaed438099a054476dd287612->enter($__internal_0f8cec2c975e72d503a44fab3b579ff5db5153bbaed438099a054476dd287612_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_0f8cec2c975e72d503a44fab3b579ff5db5153bbaed438099a054476dd287612->leave($__internal_0f8cec2c975e72d503a44fab3b579ff5db5153bbaed438099a054476dd287612_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
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
