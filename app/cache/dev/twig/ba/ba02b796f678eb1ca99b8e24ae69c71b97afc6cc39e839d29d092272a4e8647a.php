<?php

/* @Framework/FormTable/form_widget_compound.html.php */
class __TwigTemplate_ad7f211a2a0b518eeddb31b4fc527444f7e98c977f57f107e74ad8b107fd7600 extends Twig_Template
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
        $__internal_c9dad9b7ffb6d56ae952066063952fe7a21654615484c8baf6e9a17dbe3fd908 = $this->env->getExtension("native_profiler");
        $__internal_c9dad9b7ffb6d56ae952066063952fe7a21654615484c8baf6e9a17dbe3fd908->enter($__internal_c9dad9b7ffb6d56ae952066063952fe7a21654615484c8baf6e9a17dbe3fd908_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        // line 1
        echo "<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form) ?>
        </td>
    </tr>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</table>
";
        
        $__internal_c9dad9b7ffb6d56ae952066063952fe7a21654615484c8baf6e9a17dbe3fd908->leave($__internal_c9dad9b7ffb6d56ae952066063952fe7a21654615484c8baf6e9a17dbe3fd908_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_widget_compound.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <table <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/*     <?php if (!$form->parent && $errors): ?>*/
/*     <tr>*/
/*         <td colspan="2">*/
/*             <?php echo $view['form']->errors($form) ?>*/
/*         </td>*/
/*     </tr>*/
/*     <?php endif ?>*/
/*     <?php echo $view['form']->block($form, 'form_rows') ?>*/
/*     <?php echo $view['form']->rest($form) ?>*/
/* </table>*/
/* */
