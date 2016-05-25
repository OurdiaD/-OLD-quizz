<?php

/* @WebProfiler/Profiler/header.html.twig */
class __TwigTemplate_7073c2d1313a82340364455ae58c163af5a37e62914681ce4e16ed50b91a74fa extends Twig_Template
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
        $__internal_e4fd2aca5920bd677b53a85ec65e58fa4cdba93d2ac0ffa7079e2ebf22f7a7eb = $this->env->getExtension("native_profiler");
        $__internal_e4fd2aca5920bd677b53a85ec65e58fa4cdba93d2ac0ffa7079e2ebf22f7a7eb->enter($__internal_e4fd2aca5920bd677b53a85ec65e58fa4cdba93d2ac0ffa7079e2ebf22f7a7eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/header.html.twig"));

        // line 1
        echo "<div id=\"header\">
    <div class=\"container\">
        <h1>";
        // line 3
        echo twig_include($this->env, $context, "@WebProfiler/Icon/symfony.svg");
        echo " Symfony <span>Profiler</span></h1>

        <div class=\"search\">
            <form method=\"get\" action=\"https://symfony.com/search\" target=\"_blank\">
                <div class=\"form-row\">
                    <input name=\"q\" id=\"search-id\" type=\"search\" placeholder=\"search on symfony.com\">
                    <button type=\"submit\" class=\"btn\">Search</button>
                </div>
           </form>
        </div>
    </div>
</div>
";
        
        $__internal_e4fd2aca5920bd677b53a85ec65e58fa4cdba93d2ac0ffa7079e2ebf22f7a7eb->leave($__internal_e4fd2aca5920bd677b53a85ec65e58fa4cdba93d2ac0ffa7079e2ebf22f7a7eb_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  26 => 3,  22 => 1,);
    }
}
/* <div id="header">*/
/*     <div class="container">*/
/*         <h1>{{ include('@WebProfiler/Icon/symfony.svg') }} Symfony <span>Profiler</span></h1>*/
/* */
/*         <div class="search">*/
/*             <form method="get" action="https://symfony.com/search" target="_blank">*/
/*                 <div class="form-row">*/
/*                     <input name="q" id="search-id" type="search" placeholder="search on symfony.com">*/
/*                     <button type="submit" class="btn">Search</button>*/
/*                 </div>*/
/*            </form>*/
/*         </div>*/
/*     </div>*/
/* </div>*/
/* */
