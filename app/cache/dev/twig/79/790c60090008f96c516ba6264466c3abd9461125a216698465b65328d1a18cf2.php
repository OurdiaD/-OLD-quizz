<?php

/* @Twig/Exception/error.xml.twig */
class __TwigTemplate_344484aa2e5a4295ca4138d28cc71863df202fb1b4c84492bc353050d6adb073 extends Twig_Template
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
        $__internal_2150f4d668d8f071f6ae83a8d386a6d4f469c729e4fe426fc616b81a9d9493cb = $this->env->getExtension("native_profiler");
        $__internal_2150f4d668d8f071f6ae83a8d386a6d4f469c729e4fe426fc616b81a9d9493cb->enter($__internal_2150f4d668d8f071f6ae83a8d386a6d4f469c729e4fe426fc616b81a9d9493cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.xml.twig"));

        // line 1
        echo "<?xml version=\"1.0\" encoding=\"";
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" ?>

<error code=\"";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo "\" message=\"";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo "\" />
";
        
        $__internal_2150f4d668d8f071f6ae83a8d386a6d4f469c729e4fe426fc616b81a9d9493cb->leave($__internal_2150f4d668d8f071f6ae83a8d386a6d4f469c729e4fe426fc616b81a9d9493cb_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 3,  22 => 1,);
    }
}
/* <?xml version="1.0" encoding="{{ _charset }}" ?>*/
/* */
/* <error code="{{ status_code }}" message="{{ status_text }}" />*/
/* */
