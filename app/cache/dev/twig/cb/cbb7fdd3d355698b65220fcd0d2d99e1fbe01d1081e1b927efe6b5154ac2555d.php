<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_0865f2d43ca6f2c9dc7d6722e0fb974536f5624975b298e4240945fcd7a2e245 extends Twig_Template
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
        $__internal_6900639f0b8bc5d017d1e8cb2122fdaad5b3d662a737a210eec594b59a777a31 = $this->env->getExtension("native_profiler");
        $__internal_6900639f0b8bc5d017d1e8cb2122fdaad5b3d662a737a210eec594b59a777a31->enter($__internal_6900639f0b8bc5d017d1e8cb2122fdaad5b3d662a737a210eec594b59a777a31_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_6900639f0b8bc5d017d1e8cb2122fdaad5b3d662a737a210eec594b59a777a31->leave($__internal_6900639f0b8bc5d017d1e8cb2122fdaad5b3d662a737a210eec594b59a777a31_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rows.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php foreach ($form as $child) : ?>*/
/*     <?php echo $view['form']->row($child) ?>*/
/* <?php endforeach; ?>*/
/* */
