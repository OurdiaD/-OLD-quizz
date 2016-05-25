<?php

/* @QuizIndex/Quiz/base.html.twig */
class __TwigTemplate_180a0ed016a7aaefad4f8262b2f3668fc35bc51229196cf64a195a123d2a604e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'sidebar' => array($this, 'block_sidebar'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4db0045e31b623e58d9df5402358d1ed42a0876e4a4d3683339ebdd301d92d3b = $this->env->getExtension("native_profiler");
        $__internal_4db0045e31b623e58d9df5402358d1ed42a0876e4a4d3683339ebdd301d92d3b->enter($__internal_4db0045e31b623e58d9df5402358d1ed42a0876e4a4d3683339ebdd301d92d3b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@QuizIndex/Quiz/base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    </head>
    <body>
        <div id=\"sidebar\">
            ";
        // line 9
        $this->displayBlock('sidebar', $context, $blocks);
        // line 16
        echo "        </div>

        <div id=\"content\">
            ";
        // line 19
        $this->displayBlock('body', $context, $blocks);
        // line 20
        echo "        </div>
    </body>
</html>";
        
        $__internal_4db0045e31b623e58d9df5402358d1ed42a0876e4a4d3683339ebdd301d92d3b->leave($__internal_4db0045e31b623e58d9df5402358d1ed42a0876e4a4d3683339ebdd301d92d3b_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_85106d9bd40cadbf3841a943d4f4c421452a3a87387fa665f6b619be782fe62d = $this->env->getExtension("native_profiler");
        $__internal_85106d9bd40cadbf3841a943d4f4c421452a3a87387fa665f6b619be782fe62d->enter($__internal_85106d9bd40cadbf3841a943d4f4c421452a3a87387fa665f6b619be782fe62d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "My_Quiz";
        
        $__internal_85106d9bd40cadbf3841a943d4f4c421452a3a87387fa665f6b619be782fe62d->leave($__internal_85106d9bd40cadbf3841a943d4f4c421452a3a87387fa665f6b619be782fe62d_prof);

    }

    // line 9
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_b7a2d29833f0014485e5238f64e3a88fa48c5eed0fb2476386b6a71926d43692 = $this->env->getExtension("native_profiler");
        $__internal_b7a2d29833f0014485e5238f64e3a88fa48c5eed0fb2476386b6a71926d43692->enter($__internal_b7a2d29833f0014485e5238f64e3a88fa48c5eed0fb2476386b6a71926d43692_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        // line 10
        echo "            <ul>
                <li><a href=\"";
        // line 11
        echo $this->env->getExtension('routing')->getPath("index");
        echo "\">index</a></li>
                <li><a href=\"";
        // line 12
        echo $this->env->getExtension('routing')->getPath("login");
        echo "\">connexion</a></li>
                <li><a href=\"";
        // line 13
        echo $this->env->getExtension('routing')->getPath("inscription");
        echo "\">inscription</a></li>
            </ul>
            ";
        
        $__internal_b7a2d29833f0014485e5238f64e3a88fa48c5eed0fb2476386b6a71926d43692->leave($__internal_b7a2d29833f0014485e5238f64e3a88fa48c5eed0fb2476386b6a71926d43692_prof);

    }

    // line 19
    public function block_body($context, array $blocks = array())
    {
        $__internal_0e972b591852347aac5c3dbd668813eadd9eb13a6237c86a8be5c6db6ae59eb8 = $this->env->getExtension("native_profiler");
        $__internal_0e972b591852347aac5c3dbd668813eadd9eb13a6237c86a8be5c6db6ae59eb8->enter($__internal_0e972b591852347aac5c3dbd668813eadd9eb13a6237c86a8be5c6db6ae59eb8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_0e972b591852347aac5c3dbd668813eadd9eb13a6237c86a8be5c6db6ae59eb8->leave($__internal_0e972b591852347aac5c3dbd668813eadd9eb13a6237c86a8be5c6db6ae59eb8_prof);

    }

    public function getTemplateName()
    {
        return "@QuizIndex/Quiz/base.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  95 => 19,  85 => 13,  81 => 12,  77 => 11,  74 => 10,  68 => 9,  56 => 5,  47 => 20,  45 => 19,  40 => 16,  38 => 9,  31 => 5,  25 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />*/
/*         <title>{% block title %}My_Quiz{% endblock %}</title>*/
/*     </head>*/
/*     <body>*/
/*         <div id="sidebar">*/
/*             {% block sidebar %}*/
/*             <ul>*/
/*                 <li><a href="{{ path('index') }}">index</a></li>*/
/*                 <li><a href="{{ path('login') }}">connexion</a></li>*/
/*                 <li><a href="{{ path('inscription') }}">inscription</a></li>*/
/*             </ul>*/
/*             {% endblock %}*/
/*         </div>*/
/* */
/*         <div id="content">*/
/*             {% block body %}{% endblock %}*/
/*         </div>*/
/*     </body>*/
/* </html>*/
