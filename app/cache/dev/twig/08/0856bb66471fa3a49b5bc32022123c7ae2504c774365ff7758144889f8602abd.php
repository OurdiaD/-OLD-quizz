<?php

/* @SensioDistribution/Configurator/form.html.twig */
class __TwigTemplate_a59629d4a58f3ccefdc439e619640b62f5890f0bda95b6e076ce4ac93c510466 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("form_div_layout.html.twig", "@SensioDistribution/Configurator/form.html.twig", 1);
        $this->blocks = array(
            'form_rows' => array($this, 'block_form_rows'),
            'form_row' => array($this, 'block_form_row'),
            'form_label' => array($this, 'block_form_label'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "form_div_layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8819e04b3f4244068833c9adfdea982f069b8d88b32cf508c6a01928eca03502 = $this->env->getExtension("native_profiler");
        $__internal_8819e04b3f4244068833c9adfdea982f069b8d88b32cf508c6a01928eca03502->enter($__internal_8819e04b3f4244068833c9adfdea982f069b8d88b32cf508c6a01928eca03502_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SensioDistribution/Configurator/form.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8819e04b3f4244068833c9adfdea982f069b8d88b32cf508c6a01928eca03502->leave($__internal_8819e04b3f4244068833c9adfdea982f069b8d88b32cf508c6a01928eca03502_prof);

    }

    // line 3
    public function block_form_rows($context, array $blocks = array())
    {
        $__internal_54a2ac0b912cc7e5b4b4edf9d71005fd3bb22dada6b1604bd1d363e12aae905e = $this->env->getExtension("native_profiler");
        $__internal_54a2ac0b912cc7e5b4b4edf9d71005fd3bb22dada6b1604bd1d363e12aae905e->enter($__internal_54a2ac0b912cc7e5b4b4edf9d71005fd3bb22dada6b1604bd1d363e12aae905e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_rows"));

        // line 4
        echo "    <div class=\"symfony-form-errors\">
        ";
        // line 5
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "
    </div>
    ";
        // line 7
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 8
            echo "        ";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($context["child"], 'row');
            echo "
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_54a2ac0b912cc7e5b4b4edf9d71005fd3bb22dada6b1604bd1d363e12aae905e->leave($__internal_54a2ac0b912cc7e5b4b4edf9d71005fd3bb22dada6b1604bd1d363e12aae905e_prof);

    }

    // line 12
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_02a830bac852acdc6322ca09de921a198519c57c922528f7b267db4ed3361a86 = $this->env->getExtension("native_profiler");
        $__internal_02a830bac852acdc6322ca09de921a198519c57c922528f7b267db4ed3361a86->enter($__internal_02a830bac852acdc6322ca09de921a198519c57c922528f7b267db4ed3361a86_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        // line 13
        echo "    <div class=\"symfony-form-row\">
        ";
        // line 14
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'label');
        echo "
        <div class=\"symfony-form-field\">
            ";
        // line 16
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
            <div class=\"symfony-form-errors\">
                ";
        // line 18
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "
            </div>
        </div>
    </div>
";
        
        $__internal_02a830bac852acdc6322ca09de921a198519c57c922528f7b267db4ed3361a86->leave($__internal_02a830bac852acdc6322ca09de921a198519c57c922528f7b267db4ed3361a86_prof);

    }

    // line 24
    public function block_form_label($context, array $blocks = array())
    {
        $__internal_42c3bae8d1d28c07d4ff3371849a66a2ca901e492980b2c3d21c54da0b582a39 = $this->env->getExtension("native_profiler");
        $__internal_42c3bae8d1d28c07d4ff3371849a66a2ca901e492980b2c3d21c54da0b582a39->enter($__internal_42c3bae8d1d28c07d4ff3371849a66a2ca901e492980b2c3d21c54da0b582a39_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        // line 25
        echo "    ";
        if (twig_test_empty((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")))) {
            // line 26
            echo "        ";
            $context["label"] = $this->env->getExtension('form')->humanize((isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")));
            // line 27
            echo "    ";
        }
        // line 28
        echo "    <label for=\"";
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "\">
        ";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label"))), "html", null, true);
        echo "
        ";
        // line 30
        if ((isset($context["required"]) ? $context["required"] : $this->getContext($context, "required"))) {
            // line 31
            echo "            <span class=\"symfony-form-required\" title=\"This field is required\">*</span>
        ";
        }
        // line 33
        echo "    </label>
";
        
        $__internal_42c3bae8d1d28c07d4ff3371849a66a2ca901e492980b2c3d21c54da0b582a39->leave($__internal_42c3bae8d1d28c07d4ff3371849a66a2ca901e492980b2c3d21c54da0b582a39_prof);

    }

    public function getTemplateName()
    {
        return "@SensioDistribution/Configurator/form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  129 => 33,  125 => 31,  123 => 30,  119 => 29,  114 => 28,  111 => 27,  108 => 26,  105 => 25,  99 => 24,  87 => 18,  82 => 16,  77 => 14,  74 => 13,  68 => 12,  54 => 8,  50 => 7,  45 => 5,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends "form_div_layout.html.twig" %}*/
/* */
/* {% block form_rows %}*/
/*     <div class="symfony-form-errors">*/
/*         {{ form_errors(form) }}*/
/*     </div>*/
/*     {% for child in form %}*/
/*         {{ form_row(child) }}*/
/*     {% endfor %}*/
/* {% endblock %}*/
/* */
/* {% block form_row %}*/
/*     <div class="symfony-form-row">*/
/*         {{ form_label(form) }}*/
/*         <div class="symfony-form-field">*/
/*             {{ form_widget(form) }}*/
/*             <div class="symfony-form-errors">*/
/*                 {{ form_errors(form) }}*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
/* */
/* {% block form_label %}*/
/*     {% if label is empty %}*/
/*         {% set label = name|humanize %}*/
/*     {% endif %}*/
/*     <label for="{{ id }}">*/
/*         {{ label|trans }}*/
/*         {% if required %}*/
/*             <span class="symfony-form-required" title="This field is required">*</span>*/
/*         {% endif %}*/
/*     </label>*/
/* {% endblock %}*/
/* */
