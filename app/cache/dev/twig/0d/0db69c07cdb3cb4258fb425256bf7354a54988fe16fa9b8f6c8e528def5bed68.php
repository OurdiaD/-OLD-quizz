<?php

/* QuizIndexBundle:Advert:index.html.twig */
class __TwigTemplate_b89c6af26cd896be3df0a852da85b7733e93baf5e12690f3f054f2fd527f79e3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9dd820f0ea9d60449a96512bb2cce95a4178303bb67ed898cb4690c56a99bd5b = $this->env->getExtension("native_profiler");
        $__internal_9dd820f0ea9d60449a96512bb2cce95a4178303bb67ed898cb4690c56a99bd5b->enter($__internal_9dd820f0ea9d60449a96512bb2cce95a4178303bb67ed898cb4690c56a99bd5b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "QuizIndexBundle:Advert:index.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <title>";
        // line 4
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    </head>
    ";
        // line 6
        $this->displayBlock('body', $context, $blocks);
        // line 18
        echo "</html>";
        
        $__internal_9dd820f0ea9d60449a96512bb2cce95a4178303bb67ed898cb4690c56a99bd5b->leave($__internal_9dd820f0ea9d60449a96512bb2cce95a4178303bb67ed898cb4690c56a99bd5b_prof);

    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        $__internal_5a02d6d3903e4592df117ccdcc893c2501c8d877e01ec600787a7b7401cdf4fe = $this->env->getExtension("native_profiler");
        $__internal_5a02d6d3903e4592df117ccdcc893c2501c8d877e01ec600787a7b7401cdf4fe->enter($__internal_5a02d6d3903e4592df117ccdcc893c2501c8d877e01ec600787a7b7401cdf4fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Bienvenue sur ma première page avec OpenClassrooms !";
        
        $__internal_5a02d6d3903e4592df117ccdcc893c2501c8d877e01ec600787a7b7401cdf4fe->leave($__internal_5a02d6d3903e4592df117ccdcc893c2501c8d877e01ec600787a7b7401cdf4fe_prof);

    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        $__internal_256a7bfc05d0bc3e30de23ecfbc2b0cf80ab368d1732fc3c53ee098e3f474ede = $this->env->getExtension("native_profiler");
        $__internal_256a7bfc05d0bc3e30de23ecfbc2b0cf80ab368d1732fc3c53ee098e3f474ede->enter($__internal_256a7bfc05d0bc3e30de23ecfbc2b0cf80ab368d1732fc3c53ee098e3f474ede_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo "        <h1>Hello World !</h1>
        
        
        <p>
            ";
        // line 11
        echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "html", null, true);
        echo "
            Le Hello World est un grand classique en programmation.
            Il signifie énormément, car cela veut dire que vous avez
            réussi à exécuter le programme pour accomplir une tâche simple :
            afficher ce hello world !
        </p>
    ";
        
        $__internal_256a7bfc05d0bc3e30de23ecfbc2b0cf80ab368d1732fc3c53ee098e3f474ede->leave($__internal_256a7bfc05d0bc3e30de23ecfbc2b0cf80ab368d1732fc3c53ee098e3f474ede_prof);

    }

    public function getTemplateName()
    {
        return "QuizIndexBundle:Advert:index.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  67 => 11,  61 => 7,  55 => 6,  43 => 4,  36 => 18,  34 => 6,  29 => 4,  24 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <title>{% block title %}Bienvenue sur ma première page avec OpenClassrooms !{% endblock %}</title>*/
/*     </head>*/
/*     {% block body %}*/
/*         <h1>Hello World !</h1>*/
/*         */
/*         */
/*         <p>*/
/*             {{name}}*/
/*             Le Hello World est un grand classique en programmation.*/
/*             Il signifie énormément, car cela veut dire que vous avez*/
/*             réussi à exécuter le programme pour accomplir une tâche simple :*/
/*             afficher ce hello world !*/
/*         </p>*/
/*     {% endblock %}*/
/* </html>*/
