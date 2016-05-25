<?php

/* QuizIndexBundle:Quiz:index.html.twig */
class __TwigTemplate_a9b3c05b1cc9f9994df0615cf1b71be983d1ff18e000e4c8a93d8b744fa64ebe extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("QuizIndexBundle::base.html.twig", "QuizIndexBundle:Quiz:index.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "QuizIndexBundle::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f2703af5ce827c864eb3759d82f5d980deab48e3ab5cf81051539b3443d35e08 = $this->env->getExtension("native_profiler");
        $__internal_f2703af5ce827c864eb3759d82f5d980deab48e3ab5cf81051539b3443d35e08->enter($__internal_f2703af5ce827c864eb3759d82f5d980deab48e3ab5cf81051539b3443d35e08_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "QuizIndexBundle:Quiz:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f2703af5ce827c864eb3759d82f5d980deab48e3ab5cf81051539b3443d35e08->leave($__internal_f2703af5ce827c864eb3759d82f5d980deab48e3ab5cf81051539b3443d35e08_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_baa5a946923ebe20c683efc142704a8ea080002cee4e025ac8865a49f8e0b95b = $this->env->getExtension("native_profiler");
        $__internal_baa5a946923ebe20c683efc142704a8ea080002cee4e025ac8865a49f8e0b95b->enter($__internal_baa5a946923ebe20c683efc142704a8ea080002cee4e025ac8865a49f8e0b95b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<h1>Category</h1>
<ul>
";
        // line 6
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["category"]) ? $context["category"] : $this->getContext($context, "category")));
        foreach ($context['_seq'] as $context["_key"] => $context["cat"]) {
            // line 7
            echo "        <li> <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("question", array("id" => $this->getAttribute($context["cat"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["cat"], "name", array()), "html", null, true);
            echo "</a></li>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cat'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 9
        echo "      </ul>
";
        
        $__internal_baa5a946923ebe20c683efc142704a8ea080002cee4e025ac8865a49f8e0b95b->leave($__internal_baa5a946923ebe20c683efc142704a8ea080002cee4e025ac8865a49f8e0b95b_prof);

    }

    public function getTemplateName()
    {
        return "QuizIndexBundle:Quiz:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  59 => 9,  48 => 7,  44 => 6,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'QuizIndexBundle::base.html.twig' %}*/
/* */
/* {% block body %}*/
/* <h1>Category</h1>*/
/* <ul>*/
/* {% for cat in category %}*/
/*         <li> <a href="{{ path('question',  {'id':cat.id}) }}">{{ cat.name }}</a></li>*/
/*       {% endfor %}*/
/*       </ul>*/
/* {% endblock %}*/
