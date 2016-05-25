<?php

/* TwigBundle:Exception:error.json.twig */
class __TwigTemplate_84783b39fd3a231471a341bf53bdfd7641901df59e7ea7f1a887e317d3f4a35b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3e4273f244dfa6381e555495bc2880d3f8c97949d6c51c2562ed8cd8ce58aef8 = $this->env->getExtension("native_profiler");
        $__internal_3e4273f244dfa6381e555495bc2880d3f8c97949d6c51c2562ed8cd8ce58aef8->enter($__internal_3e4273f244dfa6381e555495bc2880d3f8c97949d6c51c2562ed8cd8ce58aef8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_3e4273f244dfa6381e555495bc2880d3f8c97949d6c51c2562ed8cd8ce58aef8->leave($__internal_3e4273f244dfa6381e555495bc2880d3f8c97949d6c51c2562ed8cd8ce58aef8_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.json.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {{ { 'error': { 'code': status_code, 'message': status_text } }|json_encode|raw }}*/
/* */
