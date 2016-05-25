<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_4e51a9db661502de4bfd73be0702a94c7136a110d85fafc241d77f34813dc389 extends Twig_Template
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
        $__internal_bfc15fd2fdd7b060393bd4ae75151b4d7ef5ef805f3e43d37ca25f157633017f = $this->env->getExtension("native_profiler");
        $__internal_bfc15fd2fdd7b060393bd4ae75151b4d7ef5ef805f3e43d37ca25f157633017f->enter($__internal_bfc15fd2fdd7b060393bd4ae75151b4d7ef5ef805f3e43d37ca25f157633017f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_bfc15fd2fdd7b060393bd4ae75151b4d7ef5ef805f3e43d37ca25f157633017f->leave($__internal_bfc15fd2fdd7b060393bd4ae75151b4d7ef5ef805f3e43d37ca25f157633017f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($compound): ?>*/
/* <?php echo $view['form']->block($form, 'form_widget_compound')?>*/
/* <?php else: ?>*/
/* <?php echo $view['form']->block($form, 'form_widget_simple')?>*/
/* <?php endif ?>*/
/* */
