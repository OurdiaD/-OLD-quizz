<?php

/* WebProfilerBundle:Collector:router.html.twig */
class __TwigTemplate_84584945c94d4a6c5243305743711e9984b6b7ef9a6bf36756c09e4427a47302 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
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
        $__internal_9efaa534d107356ab95fffb3efcea3877690ebbdf6eb6158af2a0e282f55ef59 = $this->env->getExtension("native_profiler");
        $__internal_9efaa534d107356ab95fffb3efcea3877690ebbdf6eb6158af2a0e282f55ef59->enter($__internal_9efaa534d107356ab95fffb3efcea3877690ebbdf6eb6158af2a0e282f55ef59_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9efaa534d107356ab95fffb3efcea3877690ebbdf6eb6158af2a0e282f55ef59->leave($__internal_9efaa534d107356ab95fffb3efcea3877690ebbdf6eb6158af2a0e282f55ef59_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_9cc1f5abceaa50068db117e49d3f12f4c4356c4b5ce6dd24d50f86ce32ce7d39 = $this->env->getExtension("native_profiler");
        $__internal_9cc1f5abceaa50068db117e49d3f12f4c4356c4b5ce6dd24d50f86ce32ce7d39->enter($__internal_9cc1f5abceaa50068db117e49d3f12f4c4356c4b5ce6dd24d50f86ce32ce7d39_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_9cc1f5abceaa50068db117e49d3f12f4c4356c4b5ce6dd24d50f86ce32ce7d39->leave($__internal_9cc1f5abceaa50068db117e49d3f12f4c4356c4b5ce6dd24d50f86ce32ce7d39_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_0312dda13565030385468b0c46c3f991b0a7ee6e5b3f138356a438ab4c5e6074 = $this->env->getExtension("native_profiler");
        $__internal_0312dda13565030385468b0c46c3f991b0a7ee6e5b3f138356a438ab4c5e6074->enter($__internal_0312dda13565030385468b0c46c3f991b0a7ee6e5b3f138356a438ab4c5e6074_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_0312dda13565030385468b0c46c3f991b0a7ee6e5b3f138356a438ab4c5e6074->leave($__internal_0312dda13565030385468b0c46c3f991b0a7ee6e5b3f138356a438ab4c5e6074_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_2705d94202467060d715541f8a4ea250419e0c0470ae09635a2d1b4c22c9a9a1 = $this->env->getExtension("native_profiler");
        $__internal_2705d94202467060d715541f8a4ea250419e0c0470ae09635a2d1b4c22c9a9a1->enter($__internal_2705d94202467060d715541f8a4ea250419e0c0470ae09635a2d1b4c22c9a9a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_2705d94202467060d715541f8a4ea250419e0c0470ae09635a2d1b4c22c9a9a1->leave($__internal_2705d94202467060d715541f8a4ea250419e0c0470ae09635a2d1b4c22c9a9a1_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block toolbar %}{% endblock %}*/
/* */
/* {% block menu %}*/
/* <span class="label">*/
/*     <span class="icon">{{ include('@WebProfiler/Icon/router.svg') }}</span>*/
/*     <strong>Routing</strong>*/
/* </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     {{ render(path('_profiler_router', { token: token })) }}*/
/* {% endblock %}*/
/* */
