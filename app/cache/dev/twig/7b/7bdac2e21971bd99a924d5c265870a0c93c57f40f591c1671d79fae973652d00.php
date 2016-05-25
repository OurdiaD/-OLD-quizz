<?php

/* @Framework/Form/choice_widget.html.php */
class __TwigTemplate_4af6e46187c0b214d25af3e64604641445130ec1cb60ac423df21ae88475fd12 extends Twig_Template
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
        $__internal_a27904af2d258017f01877136e10b523325bf3fbac0dbb2129e0ea90bf968dc7 = $this->env->getExtension("native_profiler");
        $__internal_a27904af2d258017f01877136e10b523325bf3fbac0dbb2129e0ea90bf968dc7->enter($__internal_a27904af2d258017f01877136e10b523325bf3fbac0dbb2129e0ea90bf968dc7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_a27904af2d258017f01877136e10b523325bf3fbac0dbb2129e0ea90bf968dc7->leave($__internal_a27904af2d258017f01877136e10b523325bf3fbac0dbb2129e0ea90bf968dc7_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($expanded): ?>*/
/* <?php echo $view['form']->block($form, 'choice_widget_expanded') ?>*/
/* <?php else: ?>*/
/* <?php echo $view['form']->block($form, 'choice_widget_collapsed') ?>*/
/* <?php endif ?>*/
/* */
