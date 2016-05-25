<?php

/* @QuizIndex/Quiz/index.html.twig */
class __TwigTemplate_d499473048c9b0f55bca0f65fd676c77ff895a99c2aba8fb89e36ecf2659565f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("QuizIndexBundle::base.html.twig", "@QuizIndex/Quiz/index.html.twig", 1);
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
        $__internal_1c116bbf7951d5c1d928c8a2cfdec3e419df5db385ec9802eaf9b721615ce094 = $this->env->getExtension("native_profiler");
        $__internal_1c116bbf7951d5c1d928c8a2cfdec3e419df5db385ec9802eaf9b721615ce094->enter($__internal_1c116bbf7951d5c1d928c8a2cfdec3e419df5db385ec9802eaf9b721615ce094_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@QuizIndex/Quiz/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1c116bbf7951d5c1d928c8a2cfdec3e419df5db385ec9802eaf9b721615ce094->leave($__internal_1c116bbf7951d5c1d928c8a2cfdec3e419df5db385ec9802eaf9b721615ce094_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_cbd4bdee95be0ab3f2a2a7183c5e66b4e8870eabff591639613d5f67da904a1b = $this->env->getExtension("native_profiler");
        $__internal_cbd4bdee95be0ab3f2a2a7183c5e66b4e8870eabff591639613d5f67da904a1b->enter($__internal_cbd4bdee95be0ab3f2a2a7183c5e66b4e8870eabff591639613d5f67da904a1b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_cbd4bdee95be0ab3f2a2a7183c5e66b4e8870eabff591639613d5f67da904a1b->leave($__internal_cbd4bdee95be0ab3f2a2a7183c5e66b4e8870eabff591639613d5f67da904a1b_prof);

    }

    public function getTemplateName()
    {
        return "@QuizIndex/Quiz/index.html.twig";
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
