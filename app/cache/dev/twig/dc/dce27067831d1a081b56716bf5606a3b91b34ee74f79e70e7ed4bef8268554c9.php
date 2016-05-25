<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_31bcf53fe4c4e035a8f086cabc73b2625cd491e1ef1fad98cd32f4220b817c4e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
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
        $__internal_993adb01893d0e403e52da90110fc9ce952d56321bcf4b3363643c0540a6d9b0 = $this->env->getExtension("native_profiler");
        $__internal_993adb01893d0e403e52da90110fc9ce952d56321bcf4b3363643c0540a6d9b0->enter($__internal_993adb01893d0e403e52da90110fc9ce952d56321bcf4b3363643c0540a6d9b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_993adb01893d0e403e52da90110fc9ce952d56321bcf4b3363643c0540a6d9b0->leave($__internal_993adb01893d0e403e52da90110fc9ce952d56321bcf4b3363643c0540a6d9b0_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_61424fd9c56836ea532c0373428a5c818344e4992286948303cc4cd60b12c683 = $this->env->getExtension("native_profiler");
        $__internal_61424fd9c56836ea532c0373428a5c818344e4992286948303cc4cd60b12c683->enter($__internal_61424fd9c56836ea532c0373428a5c818344e4992286948303cc4cd60b12c683_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_61424fd9c56836ea532c0373428a5c818344e4992286948303cc4cd60b12c683->leave($__internal_61424fd9c56836ea532c0373428a5c818344e4992286948303cc4cd60b12c683_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_9fe285ede010b04ad1dfc2df81dd3a6710bb83064e9a0128ef7a0ee051f10243 = $this->env->getExtension("native_profiler");
        $__internal_9fe285ede010b04ad1dfc2df81dd3a6710bb83064e9a0128ef7a0ee051f10243->enter($__internal_9fe285ede010b04ad1dfc2df81dd3a6710bb83064e9a0128ef7a0ee051f10243_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_9fe285ede010b04ad1dfc2df81dd3a6710bb83064e9a0128ef7a0ee051f10243->leave($__internal_9fe285ede010b04ad1dfc2df81dd3a6710bb83064e9a0128ef7a0ee051f10243_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_0296bf6ed4009c7f67e52bc70de71e65edda4e4b5b78546b45c86e5c83707b57 = $this->env->getExtension("native_profiler");
        $__internal_0296bf6ed4009c7f67e52bc70de71e65edda4e4b5b78546b45c86e5c83707b57->enter($__internal_0296bf6ed4009c7f67e52bc70de71e65edda4e4b5b78546b45c86e5c83707b57_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_0296bf6ed4009c7f67e52bc70de71e65edda4e4b5b78546b45c86e5c83707b57->leave($__internal_0296bf6ed4009c7f67e52bc70de71e65edda4e4b5b78546b45c86e5c83707b57_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
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
