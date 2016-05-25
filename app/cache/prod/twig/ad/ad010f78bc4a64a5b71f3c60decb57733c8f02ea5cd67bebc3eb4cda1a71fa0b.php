<?php

/* QuizIndexBundle:Quiz:index.html.twig */
class __TwigTemplate_a36885f7e6f060261ed416900fa1cd7370bf76e69b3d2a49f1150a1eef15fa2b extends Twig_Template
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "<h1>Category</h1>
<ul>
";
        // line 6
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["category"]) ? $context["category"] : null));
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
        return array (  50 => 9,  39 => 7,  35 => 6,  31 => 4,  28 => 3,  11 => 1,);
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
