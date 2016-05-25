<?php

/* @Framework/Form/form_errors.html.php */
class __TwigTemplate_142d62ee77e586b133f3aece9df9d3c00e522eb7f1d6e615eb5956fd0b090df7 extends Twig_Template
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
        $__internal_ca1df419a5964fd11fbc15a16cd83d1c82182f844d2ffa5bfeb37bf15a7ca9cb = $this->env->getExtension("native_profiler");
        $__internal_ca1df419a5964fd11fbc15a16cd83d1c82182f844d2ffa5bfeb37bf15a7ca9cb->enter($__internal_ca1df419a5964fd11fbc15a16cd83d1c82182f844d2ffa5bfeb37bf15a7ca9cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_ca1df419a5964fd11fbc15a16cd83d1c82182f844d2ffa5bfeb37bf15a7ca9cb->leave($__internal_ca1df419a5964fd11fbc15a16cd83d1c82182f844d2ffa5bfeb37bf15a7ca9cb_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_errors.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (count($errors) > 0): ?>*/
/*     <ul>*/
/*         <?php foreach ($errors as $error): ?>*/
/*             <li><?php echo $error->getMessage() ?></li>*/
/*         <?php endforeach; ?>*/
/*     </ul>*/
/* <?php endif ?>*/
/* */
