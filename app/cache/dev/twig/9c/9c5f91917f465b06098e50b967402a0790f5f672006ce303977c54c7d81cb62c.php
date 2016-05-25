<?php

/* QuizIndexBundle:Quiz:view.html.twig */
class __TwigTemplate_15e0876b441371f5a00b8c458b14fbf13bf39685355006694f6e295f20b6777f extends Twig_Template
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
        $__internal_1146b0f183a61df90d719625a6725eb16f173a3bb8d5cc07328ccfcceb853b99 = $this->env->getExtension("native_profiler");
        $__internal_1146b0f183a61df90d719625a6725eb16f173a3bb8d5cc07328ccfcceb853b99->enter($__internal_1146b0f183a61df90d719625a6725eb16f173a3bb8d5cc07328ccfcceb853b99_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "QuizIndexBundle:Quiz:view.html.twig"));

        // line 1
        echo "bla
<body>
";
        // line 3
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "info"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 4
            echo "        <p>Message flash : ";
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "</p>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 6
        echo "ci cube
alsacreation 
monster
brize
passer synfony en prod
</body>";
        
        $__internal_1146b0f183a61df90d719625a6725eb16f173a3bb8d5cc07328ccfcceb853b99->leave($__internal_1146b0f183a61df90d719625a6725eb16f173a3bb8d5cc07328ccfcceb853b99_prof);

    }

    public function getTemplateName()
    {
        return "QuizIndexBundle:Quiz:view.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  39 => 6,  30 => 4,  26 => 3,  22 => 1,);
    }
}
/* bla*/
/* <body>*/
/* {% for message in app.session.flashbag.get('info') %}*/
/*         <p>Message flash : {{ message }}</p>*/
/*       {% endfor %}*/
/* ci cube*/
/* alsacreation */
/* monster*/
/* brize*/
/* passer synfony en prod*/
/* </body>*/
