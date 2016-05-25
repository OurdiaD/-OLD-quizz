<?php

/* @Framework/Form/checkbox_widget.html.php */
class __TwigTemplate_8e9a527409a214f7b6bd81b24a64295a4b2a7a081f5e55890dab337141cc357d extends Twig_Template
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
        $__internal_ce55a5cacf8a8a55ac3e62707d76ed8e9911ee609cc194de6b1f3051c8c46d4c = $this->env->getExtension("native_profiler");
        $__internal_ce55a5cacf8a8a55ac3e62707d76ed8e9911ee609cc194de6b1f3051c8c46d4c->enter($__internal_ce55a5cacf8a8a55ac3e62707d76ed8e9911ee609cc194de6b1f3051c8c46d4c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_ce55a5cacf8a8a55ac3e62707d76ed8e9911ee609cc194de6b1f3051c8c46d4c->leave($__internal_ce55a5cacf8a8a55ac3e62707d76ed8e9911ee609cc194de6b1f3051c8c46d4c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/checkbox_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="checkbox"*/
/*     <?php echo $view['form']->block($form, 'widget_attributes') ?>*/
/*     <?php if (strlen($value) > 0): ?> value="<?php echo $view->escape($value) ?>"<?php endif ?>*/
/*     <?php if ($checked): ?> checked="checked"<?php endif ?>*/
/* />*/
/* */
