<?php

/* @Framework/FormTable/hidden_row.html.php */
class __TwigTemplate_1e4b3d3cede61ab013f7b952a97863513a2dce147753329db73e118fbbc20959 extends Twig_Template
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
        $__internal_a83c2b68acfb07af131eebd29b664d46781a2d4465b6da04a0ddde916b08070f = $this->env->getExtension("native_profiler");
        $__internal_a83c2b68acfb07af131eebd29b664d46781a2d4465b6da04a0ddde916b08070f->enter($__internal_a83c2b68acfb07af131eebd29b664d46781a2d4465b6da04a0ddde916b08070f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_a83c2b68acfb07af131eebd29b664d46781a2d4465b6da04a0ddde916b08070f->leave($__internal_a83c2b68acfb07af131eebd29b664d46781a2d4465b6da04a0ddde916b08070f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/hidden_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <tr style="display: none">*/
/*     <td colspan="2">*/
/*         <?php echo $view['form']->widget($form) ?>*/
/*     </td>*/
/* </tr>*/
/* */
