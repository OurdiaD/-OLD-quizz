<?php

/* @Framework/Form/choice_widget_expanded.html.php */
class __TwigTemplate_d66ff2e3fc24f201d8a1baca33353eafa861212204a49c240a88ee9261f971b0 extends Twig_Template
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
        $__internal_5064f020e81f199726644924a93f4016bff606bc40b8f6474721cb76ba8f86e1 = $this->env->getExtension("native_profiler");
        $__internal_5064f020e81f199726644924a93f4016bff606bc40b8f6474721cb76ba8f86e1->enter($__internal_5064f020e81f199726644924a93f4016bff606bc40b8f6474721cb76ba8f86e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_5064f020e81f199726644924a93f4016bff606bc40b8f6474721cb76ba8f86e1->leave($__internal_5064f020e81f199726644924a93f4016bff606bc40b8f6474721cb76ba8f86e1_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget_expanded.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/* <?php foreach ($form as $child): ?>*/
/*     <?php echo $view['form']->widget($child) ?>*/
/*     <?php echo $view['form']->label($child, null, array('translation_domain' => $choice_translation_domain)) ?>*/
/* <?php endforeach ?>*/
/* </div>*/
/* */
