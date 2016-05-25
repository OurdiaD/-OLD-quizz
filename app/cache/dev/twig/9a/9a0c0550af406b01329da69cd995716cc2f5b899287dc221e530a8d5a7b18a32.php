<?php

/* @Framework/Form/money_widget.html.php */
class __TwigTemplate_a91521a6ec4a22b2e5e7b0c4077719a72c138908a8bcda5af3eb6abf1bac5a9d extends Twig_Template
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
        $__internal_6de98200c39d401e8ae0f466c47a932e5e16050d63c0d0cc597922d19565eabe = $this->env->getExtension("native_profiler");
        $__internal_6de98200c39d401e8ae0f466c47a932e5e16050d63c0d0cc597922d19565eabe->enter($__internal_6de98200c39d401e8ae0f466c47a932e5e16050d63c0d0cc597922d19565eabe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        // line 1
        echo "<?php echo str_replace('";
        echo twig_escape_filter($this->env, (isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")), "html", null, true);
        echo "', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
";
        
        $__internal_6de98200c39d401e8ae0f466c47a932e5e16050d63c0d0cc597922d19565eabe->leave($__internal_6de98200c39d401e8ae0f466c47a932e5e16050d63c0d0cc597922d19565eabe_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/money_widget.html.php";
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
/* <?php echo str_replace('{{ widget }}', $view['form']->block($form, 'form_widget_simple'), $money_pattern) ?>*/
/* */
