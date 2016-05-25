<?php

/* WebProfilerBundle:Profiler:info.html.twig */
class __TwigTemplate_87b9df064d506da951f2484ab8458cedcc90b7dafb73d33873ac17dcb13e2913 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Profiler:info.html.twig", 1);
        $this->blocks = array(
            'summary' => array($this, 'block_summary'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4729783da5b6a2c0b471d3ac3b8de34477bb934a4e2a2d16e264c45d12ff0cb3 = $this->env->getExtension("native_profiler");
        $__internal_4729783da5b6a2c0b471d3ac3b8de34477bb934a4e2a2d16e264c45d12ff0cb3->enter($__internal_4729783da5b6a2c0b471d3ac3b8de34477bb934a4e2a2d16e264c45d12ff0cb3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        // line 3
        $context["messages"] = array("purge" => array("status" => "success", "title" => "The profiler database was purged successfully", "message" => "Now you need to browse some pages with the Symfony Profiler enabled to collect data."), "no_token" => array("status" => "error", "title" => (((((        // line 11
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("There are no profiles") : ("Token not found")), "message" => (((((        // line 12
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("No profiles found in the database.") : ((("Token \"" . ((array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "")) : (""))) . "\" was not found in the database.")))), "upload_error" => array("status" => "error", "title" => "A problem occurred when uploading the data", "message" => "No file given or the file was not uploaded successfully."), "already_exists" => array("status" => "error", "title" => "A problem occurred when uploading the data", "message" => "The token already exists in the database."));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4729783da5b6a2c0b471d3ac3b8de34477bb934a4e2a2d16e264c45d12ff0cb3->leave($__internal_4729783da5b6a2c0b471d3ac3b8de34477bb934a4e2a2d16e264c45d12ff0cb3_prof);

    }

    // line 26
    public function block_summary($context, array $blocks = array())
    {
        $__internal_4ed27f62245977201e23bcd20ba47b4d29f65bc8cb251f9cbc60bd0bed039130 = $this->env->getExtension("native_profiler");
        $__internal_4ed27f62245977201e23bcd20ba47b4d29f65bc8cb251f9cbc60bd0bed039130->enter($__internal_4ed27f62245977201e23bcd20ba47b4d29f65bc8cb251f9cbc60bd0bed039130_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        // line 27
        echo "    <div class=\"status status-";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")), (isset($context["about"]) ? $context["about"] : $this->getContext($context, "about")), array(), "array"), "status", array()), "html", null, true);
        echo "\">
        <div class=\"container\">
            <h2>";
        // line 29
        echo twig_escape_filter($this->env, twig_title_string_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")), (isset($context["about"]) ? $context["about"] : $this->getContext($context, "about")), array(), "array"), "status", array())), "html", null, true);
        echo "</h2>
        </div>
    </div>
";
        
        $__internal_4ed27f62245977201e23bcd20ba47b4d29f65bc8cb251f9cbc60bd0bed039130->leave($__internal_4ed27f62245977201e23bcd20ba47b4d29f65bc8cb251f9cbc60bd0bed039130_prof);

    }

    // line 34
    public function block_panel($context, array $blocks = array())
    {
        $__internal_7b5f2a87917fe9c998c4a95060ca7c3ee1f3550417d0af422b48c8c243511674 = $this->env->getExtension("native_profiler");
        $__internal_7b5f2a87917fe9c998c4a95060ca7c3ee1f3550417d0af422b48c8c243511674->enter($__internal_7b5f2a87917fe9c998c4a95060ca7c3ee1f3550417d0af422b48c8c243511674_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 35
        echo "    <h2>";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")), (isset($context["about"]) ? $context["about"] : $this->getContext($context, "about")), array(), "array"), "title", array()), "html", null, true);
        echo "</h2>
    <p>";
        // line 36
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")), (isset($context["about"]) ? $context["about"] : $this->getContext($context, "about")), array(), "array"), "message", array()), "html", null, true);
        echo "</p>
";
        
        $__internal_7b5f2a87917fe9c998c4a95060ca7c3ee1f3550417d0af422b48c8c243511674->leave($__internal_7b5f2a87917fe9c998c4a95060ca7c3ee1f3550417d0af422b48c8c243511674_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:info.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  74 => 36,  69 => 35,  63 => 34,  52 => 29,  46 => 27,  40 => 26,  33 => 1,  31 => 12,  30 => 11,  29 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% set messages = {*/
/*     'purge' : {*/
/*         status:  'success',*/
/*         title:   'The profiler database was purged successfully',*/
/*         message: 'Now you need to browse some pages with the Symfony Profiler enabled to collect data.'*/
/*     },*/
/*     'no_token' : {*/
/*         status:  'error',*/
/*         title:   (token|default('') == 'latest') ? 'There are no profiles' : 'Token not found',*/
/*         message: (token|default('') == 'latest') ? 'No profiles found in the database.' : 'Token "' ~ token|default('') ~ '" was not found in the database.'*/
/*     },*/
/*     'upload_error' : {*/
/*         status:  'error',*/
/*         title:   'A problem occurred when uploading the data',*/
/*         message: 'No file given or the file was not uploaded successfully.'*/
/*     },*/
/*     'already_exists' : {*/
/*         status:  'error',*/
/*         title:   'A problem occurred when uploading the data',*/
/*         message: 'The token already exists in the database.'*/
/*     }*/
/* } %}*/
/* */
/* {% block summary %}*/
/*     <div class="status status-{{ messages[about].status }}">*/
/*         <div class="container">*/
/*             <h2>{{ messages[about].status|title }}</h2>*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     <h2>{{ messages[about].title }}</h2>*/
/*     <p>{{ messages[about].message }}</p>*/
/* {% endblock %}*/
/* */
