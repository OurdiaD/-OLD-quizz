<?php

/* @Framework/Form/form_widget_compound.html.php */
class __TwigTemplate_fa313b411cd577efaf5dc31ef36f046eefc6846bae04be14ede0777c07f5481b extends Twig_Template
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
        $__internal_763acec2814e29060543c9a60d7696795d13ed3101fd7794452d96aa4a153b77 = $this->env->getExtension("native_profiler");
        $__internal_763acec2814e29060543c9a60d7696795d13ed3101fd7794452d96aa4a153b77->enter($__internal_763acec2814e29060543c9a60d7696795d13ed3101fd7794452d96aa4a153b77_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_763acec2814e29060543c9a60d7696795d13ed3101fd7794452d96aa4a153b77->leave($__internal_763acec2814e29060543c9a60d7696795d13ed3101fd7794452d96aa4a153b77_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_compound.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/*     <?php if (!$form->parent && $errors): ?>*/
/*     <?php echo $view['form']->errors($form) ?>*/
/*     <?php endif ?>*/
/*     <?php echo $view['form']->block($form, 'form_rows') ?>*/
/*     <?php echo $view['form']->rest($form) ?>*/
/* </div>*/
/* */
