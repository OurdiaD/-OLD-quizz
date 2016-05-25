<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_adbfec562e5de3c3c12d5a197c0b4585a42418f70889dcc223de19fddaf2d643 extends Twig_Template
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
        $__internal_668feacf0827e31c857733ee57c0072284d8f9f38ea12da38c5230acc8f6326a = $this->env->getExtension("native_profiler");
        $__internal_668feacf0827e31c857733ee57c0072284d8f9f38ea12da38c5230acc8f6326a->enter($__internal_668feacf0827e31c857733ee57c0072284d8f9f38ea12da38c5230acc8f6326a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_668feacf0827e31c857733ee57c0072284d8f9f38ea12da38c5230acc8f6326a->leave($__internal_668feacf0827e31c857733ee57c0072284d8f9f38ea12da38c5230acc8f6326a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div>*/
/*     <?php echo $view['form']->label($form) ?>*/
/*     <?php echo $view['form']->errors($form) ?>*/
/*     <?php echo $view['form']->widget($form) ?>*/
/* </div>*/
/* */
