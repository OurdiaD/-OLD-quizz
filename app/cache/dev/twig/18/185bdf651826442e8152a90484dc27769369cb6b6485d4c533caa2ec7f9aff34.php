<?php

/* @Framework/Form/form_widget_simple.html.php */
class __TwigTemplate_decbb3d186236c958f3a6a78493e3010767a571612a9558938bb2adeb35d3026 extends Twig_Template
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
        $__internal_fd49197035464a2a8d6b786716618cdc63a2cbbf09de2493377efb065eb0b556 = $this->env->getExtension("native_profiler");
        $__internal_fd49197035464a2a8d6b786716618cdc63a2cbbf09de2493377efb065eb0b556->enter($__internal_fd49197035464a2a8d6b786716618cdc63a2cbbf09de2493377efb065eb0b556_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_fd49197035464a2a8d6b786716618cdc63a2cbbf09de2493377efb065eb0b556->leave($__internal_fd49197035464a2a8d6b786716618cdc63a2cbbf09de2493377efb065eb0b556_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_simple.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="<?php echo isset($type) ? $view->escape($type) : 'text' ?>" <?php echo $view['form']->block($form, 'widget_attributes') ?><?php if (!empty($value) || is_numeric($value)): ?> value="<?php echo $view->escape($value) ?>"<?php endif ?> />*/
/* */
