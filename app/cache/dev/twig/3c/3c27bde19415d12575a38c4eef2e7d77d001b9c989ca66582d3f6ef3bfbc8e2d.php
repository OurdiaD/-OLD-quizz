<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_d0484ac0799424e91fe73cf0c36319b70b1c7415d8e78824229d7f1dd34bd050 extends Twig_Template
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
        $__internal_9bb0a4eccd62cdc7c94f7d2481b0a3b67e61fd814655bad96a5e724cc821a409 = $this->env->getExtension("native_profiler");
        $__internal_9bb0a4eccd62cdc7c94f7d2481b0a3b67e61fd814655bad96a5e724cc821a409->enter($__internal_9bb0a4eccd62cdc7c94f7d2481b0a3b67e61fd814655bad96a5e724cc821a409_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_9bb0a4eccd62cdc7c94f7d2481b0a3b67e61fd814655bad96a5e724cc821a409->leave($__internal_9bb0a4eccd62cdc7c94f7d2481b0a3b67e61fd814655bad96a5e724cc821a409_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/textarea_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <textarea <?php echo $view['form']->block($form, 'widget_attributes') ?>><?php echo $view->escape($value) ?></textarea>*/
/* */
