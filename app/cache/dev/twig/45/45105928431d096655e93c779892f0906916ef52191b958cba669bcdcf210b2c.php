<?php

/* base.html.twig */
class __TwigTemplate_15e535970ea55e711d186280fd2f700a3c7c6d7dda874e9f9eb1ca72295be360 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_44ee2f5cea59f4c520e3e0809efb4961470674b68bd93267c71e9830a684304e = $this->env->getExtension("native_profiler");
        $__internal_44ee2f5cea59f4c520e3e0809efb4961470674b68bd93267c71e9830a684304e->enter($__internal_44ee2f5cea59f4c520e3e0809efb4961470674b68bd93267c71e9830a684304e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_44ee2f5cea59f4c520e3e0809efb4961470674b68bd93267c71e9830a684304e->leave($__internal_44ee2f5cea59f4c520e3e0809efb4961470674b68bd93267c71e9830a684304e_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_e91210749b9c651e43a4e2ca77690c2c94c095771659190fa65bf5825ad46412 = $this->env->getExtension("native_profiler");
        $__internal_e91210749b9c651e43a4e2ca77690c2c94c095771659190fa65bf5825ad46412->enter($__internal_e91210749b9c651e43a4e2ca77690c2c94c095771659190fa65bf5825ad46412_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_e91210749b9c651e43a4e2ca77690c2c94c095771659190fa65bf5825ad46412->leave($__internal_e91210749b9c651e43a4e2ca77690c2c94c095771659190fa65bf5825ad46412_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_b041dedd87b50cffd26283082d65d6c9e048865b5971e4ad4270a008bc727d3d = $this->env->getExtension("native_profiler");
        $__internal_b041dedd87b50cffd26283082d65d6c9e048865b5971e4ad4270a008bc727d3d->enter($__internal_b041dedd87b50cffd26283082d65d6c9e048865b5971e4ad4270a008bc727d3d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_b041dedd87b50cffd26283082d65d6c9e048865b5971e4ad4270a008bc727d3d->leave($__internal_b041dedd87b50cffd26283082d65d6c9e048865b5971e4ad4270a008bc727d3d_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_4f12115ba1f227002189878f59a98306a717dc01147f715989271dae59ba03c5 = $this->env->getExtension("native_profiler");
        $__internal_4f12115ba1f227002189878f59a98306a717dc01147f715989271dae59ba03c5->enter($__internal_4f12115ba1f227002189878f59a98306a717dc01147f715989271dae59ba03c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_4f12115ba1f227002189878f59a98306a717dc01147f715989271dae59ba03c5->leave($__internal_4f12115ba1f227002189878f59a98306a717dc01147f715989271dae59ba03c5_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_104fa85b239154bfd666edc498379762346a548f0c69ffec67448c2822645ffe = $this->env->getExtension("native_profiler");
        $__internal_104fa85b239154bfd666edc498379762346a548f0c69ffec67448c2822645ffe->enter($__internal_104fa85b239154bfd666edc498379762346a548f0c69ffec67448c2822645ffe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_104fa85b239154bfd666edc498379762346a548f0c69ffec67448c2822645ffe->leave($__internal_104fa85b239154bfd666edc498379762346a548f0c69ffec67448c2822645ffe_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 11,  82 => 10,  71 => 6,  59 => 5,  50 => 12,  47 => 11,  45 => 10,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>{% block title %}Welcome!{% endblock %}</title>*/
/*         {% block stylesheets %}{% endblock %}*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*     </head>*/
/*     <body>*/
/*         {% block body %}{% endblock %}*/
/*         {% block javascripts %}{% endblock %}*/
/*     </body>*/
/* </html>*/
/* */
