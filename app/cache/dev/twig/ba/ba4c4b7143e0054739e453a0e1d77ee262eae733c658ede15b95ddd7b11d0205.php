<?php

/* @WebProfiler/Profiler/toolbar_redirect.html.twig */
class __TwigTemplate_13ace876f54e32f145745112b70a15d98715f4d358103040fb44c41fad8d5a09 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@WebProfiler/Profiler/toolbar_redirect.html.twig", 1);
        $this->blocks = array(
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
        $__internal_a24bffb23e1b8e202ef9d2b21c1583252fa77bc4f373e59bea3f4f5df246de1b = $this->env->getExtension("native_profiler");
        $__internal_a24bffb23e1b8e202ef9d2b21c1583252fa77bc4f373e59bea3f4f5df246de1b->enter($__internal_a24bffb23e1b8e202ef9d2b21c1583252fa77bc4f373e59bea3f4f5df246de1b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a24bffb23e1b8e202ef9d2b21c1583252fa77bc4f373e59bea3f4f5df246de1b->leave($__internal_a24bffb23e1b8e202ef9d2b21c1583252fa77bc4f373e59bea3f4f5df246de1b_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_9ee385d1b9f3e8a3affff4e7ccb6d75058f70b0eebfb5e84a4f18a58a625055d = $this->env->getExtension("native_profiler");
        $__internal_9ee385d1b9f3e8a3affff4e7ccb6d75058f70b0eebfb5e84a4f18a58a625055d->enter($__internal_9ee385d1b9f3e8a3affff4e7ccb6d75058f70b0eebfb5e84a4f18a58a625055d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_9ee385d1b9f3e8a3affff4e7ccb6d75058f70b0eebfb5e84a4f18a58a625055d->leave($__internal_9ee385d1b9f3e8a3affff4e7ccb6d75058f70b0eebfb5e84a4f18a58a625055d_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_e3f8db3796f9d3c158b54ef19babb77567570bd0701a2cd0d2ff57f6a0e4f14c = $this->env->getExtension("native_profiler");
        $__internal_e3f8db3796f9d3c158b54ef19babb77567570bd0701a2cd0d2ff57f6a0e4f14c->enter($__internal_e3f8db3796f9d3c158b54ef19babb77567570bd0701a2cd0d2ff57f6a0e4f14c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_e3f8db3796f9d3c158b54ef19babb77567570bd0701a2cd0d2ff57f6a0e4f14c->leave($__internal_e3f8db3796f9d3c158b54ef19babb77567570bd0701a2cd0d2ff57f6a0e4f14c_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 8,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block title 'Redirection Intercepted' %}*/
/* */
/* {% block body %}*/
/*     <div class="sf-reset">*/
/*         <div class="block-exception">*/
/*             <h1>This request redirects to <a href="{{ location }}">{{ location }}</a>.</h1>*/
/* */
/*             <p>*/
/*                 <small>*/
/*                     The redirect was intercepted by the web debug toolbar to help debugging.*/
/*                     For more information, see the "intercept-redirects" option of the Profiler.*/
/*                 </small>*/
/*             </p>*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
/* */
