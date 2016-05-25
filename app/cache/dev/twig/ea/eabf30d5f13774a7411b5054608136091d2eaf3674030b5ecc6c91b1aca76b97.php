<?php

/* @Framework/FormTable/form_row.html.php */
class __TwigTemplate_a3902997a1ef08c34ccf8d2f49ef921a9f330679b78b95b447b566c404a71e38 extends Twig_Template
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
        $__internal_5e63268c44c3faa36995941c50a94365193b2affa8ee12adbd750e066bd177bc = $this->env->getExtension("native_profiler");
        $__internal_5e63268c44c3faa36995941c50a94365193b2affa8ee12adbd750e066bd177bc->enter($__internal_5e63268c44c3faa36995941c50a94365193b2affa8ee12adbd750e066bd177bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        // line 1
        echo "<tr>
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_5e63268c44c3faa36995941c50a94365193b2affa8ee12adbd750e066bd177bc->leave($__internal_5e63268c44c3faa36995941c50a94365193b2affa8ee12adbd750e066bd177bc_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <tr>*/
/*     <td>*/
/*         <?php echo $view['form']->label($form) ?>*/
/*     </td>*/
/*     <td>*/
/*         <?php echo $view['form']->errors($form) ?>*/
/*         <?php echo $view['form']->widget($form) ?>*/
/*     </td>*/
/* </tr>*/
/* */
