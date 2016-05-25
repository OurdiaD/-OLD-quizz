<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_f94760547ed126340d7fcfa84a6a36dff98f20b60ed388228ecfcdcaf84eaf9c extends Twig_Template
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
        $__internal_d6421c3df5634fd1a802f9c5896b15aaeb708b64baea94273ac548719620538a = $this->env->getExtension("native_profiler");
        $__internal_d6421c3df5634fd1a802f9c5896b15aaeb708b64baea94273ac548719620538a->enter($__internal_d6421c3df5634fd1a802f9c5896b15aaeb708b64baea94273ac548719620538a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_d6421c3df5634fd1a802f9c5896b15aaeb708b64baea94273ac548719620538a->leave($__internal_d6421c3df5634fd1a802f9c5896b15aaeb708b64baea94273ac548719620538a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/radio_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="radio"*/
/*     <?php echo $view['form']->block($form, 'widget_attributes') ?>*/
/*     value="<?php echo $view->escape($value) ?>"*/
/*     <?php if ($checked): ?> checked="checked"<?php endif ?>*/
/* />*/
/* */
