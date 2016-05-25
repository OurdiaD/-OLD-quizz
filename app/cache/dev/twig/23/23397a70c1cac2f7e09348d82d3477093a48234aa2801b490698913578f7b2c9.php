<?php

/* @Framework/Form/button_widget.html.php */
class __TwigTemplate_6095991b93ebf6152af16518ece23f659df5d9bc0db2380456d4c3eb885ac66a extends Twig_Template
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
        $__internal_4ac7386e389fd8cbfe18b777b010f86f2ae0c84b49d9f6dba696bedb2c199a26 = $this->env->getExtension("native_profiler");
        $__internal_4ac7386e389fd8cbfe18b777b010f86f2ae0c84b49d9f6dba696bedb2c199a26->enter($__internal_4ac7386e389fd8cbfe18b777b010f86f2ae0c84b49d9f6dba696bedb2c199a26_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        // line 1
        echo "<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
";
        
        $__internal_4ac7386e389fd8cbfe18b777b010f86f2ae0c84b49d9f6dba696bedb2c199a26->leave($__internal_4ac7386e389fd8cbfe18b777b010f86f2ae0c84b49d9f6dba696bedb2c199a26_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (!$label) { $label = isset($label_format)*/
/*     ? strtr($label_format, array('%name%' => $name, '%id%' => $id))*/
/*     : $view['form']->humanize($name); } ?>*/
/* <button type="<?php echo isset($type) ? $view->escape($type) : 'button' ?>" <?php echo $view['form']->block($form, 'button_attributes') ?>><?php echo $view->escape(false !== $translation_domain ? $view['translator']->trans($label, array(), $translation_domain) : $label) ?></button>*/
/* */
