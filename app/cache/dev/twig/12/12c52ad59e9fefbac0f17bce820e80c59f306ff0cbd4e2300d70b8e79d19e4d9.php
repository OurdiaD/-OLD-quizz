<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_4e200db1dda8bcae42562f5979fe4f096509f4e0fb6e64dbdcc3bbfa101093b9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
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
        $__internal_4ef5df0aab7fb03d76e48ed9b1329852a84007c4c462df5778b76d601848f068 = $this->env->getExtension("native_profiler");
        $__internal_4ef5df0aab7fb03d76e48ed9b1329852a84007c4c462df5778b76d601848f068->enter($__internal_4ef5df0aab7fb03d76e48ed9b1329852a84007c4c462df5778b76d601848f068_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4ef5df0aab7fb03d76e48ed9b1329852a84007c4c462df5778b76d601848f068->leave($__internal_4ef5df0aab7fb03d76e48ed9b1329852a84007c4c462df5778b76d601848f068_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_5c241b891f6faa41ce891103ae6a2e183939e37754d2caa6f44c25d694e665ef = $this->env->getExtension("native_profiler");
        $__internal_5c241b891f6faa41ce891103ae6a2e183939e37754d2caa6f44c25d694e665ef->enter($__internal_5c241b891f6faa41ce891103ae6a2e183939e37754d2caa6f44c25d694e665ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_5c241b891f6faa41ce891103ae6a2e183939e37754d2caa6f44c25d694e665ef->leave($__internal_5c241b891f6faa41ce891103ae6a2e183939e37754d2caa6f44c25d694e665ef_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_41f6213872f1d9326c32db503c3af3c0997ff8a89f64d36d4e3ca4d2f7338322 = $this->env->getExtension("native_profiler");
        $__internal_41f6213872f1d9326c32db503c3af3c0997ff8a89f64d36d4e3ca4d2f7338322->enter($__internal_41f6213872f1d9326c32db503c3af3c0997ff8a89f64d36d4e3ca4d2f7338322_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_41f6213872f1d9326c32db503c3af3c0997ff8a89f64d36d4e3ca4d2f7338322->leave($__internal_41f6213872f1d9326c32db503c3af3c0997ff8a89f64d36d4e3ca4d2f7338322_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
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
