<?php

/* @Framework/Form/collection_widget.html.php */
class __TwigTemplate_3c978cc5da52c971a24886fa1419b78fe3689730cf9fe2da6dd03f23bf7b24d4 extends Twig_Template
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
        $__internal_911dbe6230488808324a27adca48665cf784b75aaae358d4a7e6416ccc9491f9 = $this->env->getExtension("native_profiler");
        $__internal_911dbe6230488808324a27adca48665cf784b75aaae358d4a7e6416ccc9491f9->enter($__internal_911dbe6230488808324a27adca48665cf784b75aaae358d4a7e6416ccc9491f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_911dbe6230488808324a27adca48665cf784b75aaae358d4a7e6416ccc9491f9->leave($__internal_911dbe6230488808324a27adca48665cf784b75aaae358d4a7e6416ccc9491f9_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/collection_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (isset($prototype)): ?>*/
/*     <?php $attr['data-prototype'] = $view->escape($view['form']->row($prototype)) ?>*/
/* <?php endif ?>*/
/* <?php echo $view['form']->widget($form, array('attr' => $attr)) ?>*/
/* */
