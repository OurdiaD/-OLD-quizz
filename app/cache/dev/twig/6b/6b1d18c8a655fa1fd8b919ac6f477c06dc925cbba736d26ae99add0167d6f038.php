<?php

/* @Framework/Form/datetime_widget.html.php */
class __TwigTemplate_5e3bf6fae1c7153968a4b0f70fcef867a1053174cb93e80b347e26724c0414f4 extends Twig_Template
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
        $__internal_a9b4c1717b518d2b269f489daec57d4b03031fb41b94e59c5a6357ca9ed57b09 = $this->env->getExtension("native_profiler");
        $__internal_a9b4c1717b518d2b269f489daec57d4b03031fb41b94e59c5a6357ca9ed57b09->enter($__internal_a9b4c1717b518d2b269f489daec57d4b03031fb41b94e59c5a6357ca9ed57b09_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_a9b4c1717b518d2b269f489daec57d4b03031fb41b94e59c5a6357ca9ed57b09->leave($__internal_a9b4c1717b518d2b269f489daec57d4b03031fb41b94e59c5a6357ca9ed57b09_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/datetime_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($widget == 'single_text'): ?>*/
/*     <?php echo $view['form']->block($form, 'form_widget_simple'); ?>*/
/* <?php else: ?>*/
/*     <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/*         <?php echo $view['form']->widget($form['date']).' '.$view['form']->widget($form['time']) ?>*/
/*     </div>*/
/* <?php endif ?>*/
/* */
