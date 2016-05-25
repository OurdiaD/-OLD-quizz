<?php

/* ::base.html.twig */
class __TwigTemplate_6531a85025bb7970db847918c5aa47158f6a44205b19d2d47231ce681ebc9b41 extends Twig_Template
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
        $__internal_4a0724bdf9e72af882f710091f3e89a53f30fcd186cffab1b6b26f695e8acb12 = $this->env->getExtension("native_profiler");
        $__internal_4a0724bdf9e72af882f710091f3e89a53f30fcd186cffab1b6b26f695e8acb12->enter($__internal_4a0724bdf9e72af882f710091f3e89a53f30fcd186cffab1b6b26f695e8acb12_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        
        $__internal_4a0724bdf9e72af882f710091f3e89a53f30fcd186cffab1b6b26f695e8acb12->leave($__internal_4a0724bdf9e72af882f710091f3e89a53f30fcd186cffab1b6b26f695e8acb12_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_f9bd6141aecc8f29c7d83163b4f5843d84dded0cc9c1139acddaec4af112c466 = $this->env->getExtension("native_profiler");
        $__internal_f9bd6141aecc8f29c7d83163b4f5843d84dded0cc9c1139acddaec4af112c466->enter($__internal_f9bd6141aecc8f29c7d83163b4f5843d84dded0cc9c1139acddaec4af112c466_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_f9bd6141aecc8f29c7d83163b4f5843d84dded0cc9c1139acddaec4af112c466->leave($__internal_f9bd6141aecc8f29c7d83163b4f5843d84dded0cc9c1139acddaec4af112c466_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_b59ad4601c1a4f7919873c495608f364201017ff89954e7ae1032346371acd87 = $this->env->getExtension("native_profiler");
        $__internal_b59ad4601c1a4f7919873c495608f364201017ff89954e7ae1032346371acd87->enter($__internal_b59ad4601c1a4f7919873c495608f364201017ff89954e7ae1032346371acd87_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_b59ad4601c1a4f7919873c495608f364201017ff89954e7ae1032346371acd87->leave($__internal_b59ad4601c1a4f7919873c495608f364201017ff89954e7ae1032346371acd87_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_e03188155f6ed0e5b8d05be9e06fbf363c33e24ad756a5e53f8df0a8655ef9bc = $this->env->getExtension("native_profiler");
        $__internal_e03188155f6ed0e5b8d05be9e06fbf363c33e24ad756a5e53f8df0a8655ef9bc->enter($__internal_e03188155f6ed0e5b8d05be9e06fbf363c33e24ad756a5e53f8df0a8655ef9bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_e03188155f6ed0e5b8d05be9e06fbf363c33e24ad756a5e53f8df0a8655ef9bc->leave($__internal_e03188155f6ed0e5b8d05be9e06fbf363c33e24ad756a5e53f8df0a8655ef9bc_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_e439eb74c1b022596e77bb9af969460bd88572d338d94d2aef062ec84863ac0d = $this->env->getExtension("native_profiler");
        $__internal_e439eb74c1b022596e77bb9af969460bd88572d338d94d2aef062ec84863ac0d->enter($__internal_e439eb74c1b022596e77bb9af969460bd88572d338d94d2aef062ec84863ac0d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_e439eb74c1b022596e77bb9af969460bd88572d338d94d2aef062ec84863ac0d->leave($__internal_e439eb74c1b022596e77bb9af969460bd88572d338d94d2aef062ec84863ac0d_prof);

    }

    public function getTemplateName()
    {
        return "::base.html.twig";
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
