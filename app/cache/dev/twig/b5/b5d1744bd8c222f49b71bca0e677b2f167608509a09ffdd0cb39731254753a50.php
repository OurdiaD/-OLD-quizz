<?php

/* WebProfilerBundle:Collector:exception.html.twig */
class __TwigTemplate_35c0581d7602a7adeecb6848eea36d973b30f759a62b74480ff9e73b0074abc3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1f57ff9d17e0a8865599b8ee6322d1f1f7f77cc19ea96c711d1f59d4dcdc032f = $this->env->getExtension("native_profiler");
        $__internal_1f57ff9d17e0a8865599b8ee6322d1f1f7f77cc19ea96c711d1f59d4dcdc032f->enter($__internal_1f57ff9d17e0a8865599b8ee6322d1f1f7f77cc19ea96c711d1f59d4dcdc032f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1f57ff9d17e0a8865599b8ee6322d1f1f7f77cc19ea96c711d1f59d4dcdc032f->leave($__internal_1f57ff9d17e0a8865599b8ee6322d1f1f7f77cc19ea96c711d1f59d4dcdc032f_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_5d68f4c464bf477303f3103f58c13e2f1c00f38ac4451bc4af067f96ef93a6fc = $this->env->getExtension("native_profiler");
        $__internal_5d68f4c464bf477303f3103f58c13e2f1c00f38ac4451bc4af067f96ef93a6fc->enter($__internal_5d68f4c464bf477303f3103f58c13e2f1c00f38ac4451bc4af067f96ef93a6fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_5d68f4c464bf477303f3103f58c13e2f1c00f38ac4451bc4af067f96ef93a6fc->leave($__internal_5d68f4c464bf477303f3103f58c13e2f1c00f38ac4451bc4af067f96ef93a6fc_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_8b447765314a9abc6e3409cfeb32d23a4e1b7ba4497df44619443168ec785abf = $this->env->getExtension("native_profiler");
        $__internal_8b447765314a9abc6e3409cfeb32d23a4e1b7ba4497df44619443168ec785abf->enter($__internal_8b447765314a9abc6e3409cfeb32d23a4e1b7ba4497df44619443168ec785abf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_8b447765314a9abc6e3409cfeb32d23a4e1b7ba4497df44619443168ec785abf->leave($__internal_8b447765314a9abc6e3409cfeb32d23a4e1b7ba4497df44619443168ec785abf_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_906831a3ca94e47430f487345e96a8e4d316c055be66f352b84b1f301009d16b = $this->env->getExtension("native_profiler");
        $__internal_906831a3ca94e47430f487345e96a8e4d316c055be66f352b84b1f301009d16b->enter($__internal_906831a3ca94e47430f487345e96a8e4d316c055be66f352b84b1f301009d16b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_exception", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_906831a3ca94e47430f487345e96a8e4d316c055be66f352b84b1f301009d16b->leave($__internal_906831a3ca94e47430f487345e96a8e4d316c055be66f352b84b1f301009d16b_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 33,  114 => 32,  108 => 28,  106 => 27,  102 => 25,  96 => 24,  88 => 21,  82 => 17,  80 => 16,  75 => 14,  70 => 13,  64 => 12,  54 => 9,  48 => 6,  45 => 5,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     {% if collector.hasexception %}*/
/*         <style>*/
/*             {{ render(path('_profiler_exception_css', { token: token })) }}*/
/*         </style>*/
/*     {% endif %}*/
/*     {{ parent() }}*/
/* {% endblock %}*/
/* */
/* {% block menu %}*/
/*     <span class="label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}">*/
/*         <span class="icon">{{ include('@WebProfiler/Icon/exception.svg') }}</span>*/
/*         <strong>Exception</strong>*/
/*         {% if collector.hasexception %}*/
/*             <span class="count">*/
/*                 <span>1</span>*/
/*             </span>*/
/*         {% endif %}*/
/*     </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     <h2>Exceptions</h2>*/
/* */
/*     {% if not collector.hasexception %}*/
/*         <div class="empty">*/
/*             <p>No exception was thrown and caught during the request.</p>*/
/*         </div>*/
/*     {% else %}*/
/*         <div class="sf-reset">*/
/*             {{ render(path('_profiler_exception', { token: token })) }}*/
/*         </div>*/
/*     {% endif %}*/
/* {% endblock %}*/
/* */
