<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_202945f40f679149e6d1b9d002163db344004a730e012865c9cd1124e43fb5bd extends Twig_Template
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
        $__internal_2c447b1f3686311a4d3df32370dfb7bfb4c70a3a7882e279a58fe9ce6fa3219e = $this->env->getExtension("native_profiler");
        $__internal_2c447b1f3686311a4d3df32370dfb7bfb4c70a3a7882e279a58fe9ce6fa3219e->enter($__internal_2c447b1f3686311a4d3df32370dfb7bfb4c70a3a7882e279a58fe9ce6fa3219e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_2c447b1f3686311a4d3df32370dfb7bfb4c70a3a7882e279a58fe9ce6fa3219e->leave($__internal_2c447b1f3686311a4d3df32370dfb7bfb4c70a3a7882e279a58fe9ce6fa3219e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rest.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php foreach ($form as $child): ?>*/
/*     <?php if (!$child->isRendered()): ?>*/
/*         <?php echo $view['form']->row($child) ?>*/
/*     <?php endif; ?>*/
/* <?php endforeach; ?>*/
/* */
