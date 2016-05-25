<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_4ce13bca6fb5893fb70eab6a7c4f308dcdcedb0fdf8a8412af9b4226c6ba1d14 extends Twig_Template
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
        $__internal_274f6e0d8f2ac263f6cafaa077bbfa17c6e32c131b8f91adc5d34a1bea4d0e06 = $this->env->getExtension("native_profiler");
        $__internal_274f6e0d8f2ac263f6cafaa077bbfa17c6e32c131b8f91adc5d34a1bea4d0e06->enter($__internal_274f6e0d8f2ac263f6cafaa077bbfa17c6e32c131b8f91adc5d34a1bea4d0e06_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_274f6e0d8f2ac263f6cafaa077bbfa17c6e32c131b8f91adc5d34a1bea4d0e06->leave($__internal_274f6e0d8f2ac263f6cafaa077bbfa17c6e32c131b8f91adc5d34a1bea4d0e06_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_end.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (!isset($render_rest) || $render_rest): ?>*/
/* <?php echo $view['form']->rest($form) ?>*/
/* <?php endif ?>*/
/* </form>*/
/* */
