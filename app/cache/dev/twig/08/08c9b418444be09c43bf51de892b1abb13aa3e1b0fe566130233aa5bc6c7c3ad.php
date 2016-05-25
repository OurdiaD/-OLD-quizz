<?php

/* QuizIndexBundle:Quiz:connexion.html.twig */
class __TwigTemplate_278f187843358e62388ff0e3de475d14d5f7e2545f876641d8d9b7dbffefead3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("QuizIndexBundle::base.html.twig", "QuizIndexBundle:Quiz:connexion.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "QuizIndexBundle::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5db60c3fcc5c15d1260f9cf22a85140a4c022c94b5323109368e899b409d3f61 = $this->env->getExtension("native_profiler");
        $__internal_5db60c3fcc5c15d1260f9cf22a85140a4c022c94b5323109368e899b409d3f61->enter($__internal_5db60c3fcc5c15d1260f9cf22a85140a4c022c94b5323109368e899b409d3f61_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "QuizIndexBundle:Quiz:connexion.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5db60c3fcc5c15d1260f9cf22a85140a4c022c94b5323109368e899b409d3f61->leave($__internal_5db60c3fcc5c15d1260f9cf22a85140a4c022c94b5323109368e899b409d3f61_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_8c0978525da914bddab4190f7908ffda4094c975ae30d4a5eebb4f009c1ff610 = $this->env->getExtension("native_profiler");
        $__internal_8c0978525da914bddab4190f7908ffda4094c975ae30d4a5eebb4f009c1ff610->enter($__internal_8c0978525da914bddab4190f7908ffda4094c975ae30d4a5eebb4f009c1ff610_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<h1>Connexion</h1>
    ";
        // line 5
        if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
            // line 6
            echo "    <div class=\"alert alert-danger\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "message", array()), "html", null, true);
            echo "</div>
  ";
        }
        // line 8
        echo "
      <form action=\"";
        // line 9
        echo $this->env->getExtension('routing')->getPath("login_check");
        echo "\" method=\"post\">
    <label for=\"username\">Login :</label>
    <input type=\"text\" id=\"username\" name=\"_username\" value=\"";
        // line 11
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : $this->getContext($context, "last_username")), "html", null, true);
        echo "\" />

    <label for=\"password\">Mot de passe :</label>
    <input type=\"password\" id=\"password\" name=\"_password\" />
    <br />
    <input type=\"submit\" value=\"Connexion\" />
  </form>
    
";
        
        $__internal_8c0978525da914bddab4190f7908ffda4094c975ae30d4a5eebb4f009c1ff610->leave($__internal_8c0978525da914bddab4190f7908ffda4094c975ae30d4a5eebb4f009c1ff610_prof);

    }

    public function getTemplateName()
    {
        return "QuizIndexBundle:Quiz:connexion.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  59 => 11,  54 => 9,  51 => 8,  45 => 6,  43 => 5,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'QuizIndexBundle::base.html.twig' %}*/
/* */
/* {% block body %}*/
/* <h1>Connexion</h1>*/
/*     {% if error %}*/
/*     <div class="alert alert-danger">{{ error.message }}</div>*/
/*   {% endif %}*/
/* */
/*       <form action="{{ path('login_check') }}" method="post">*/
/*     <label for="username">Login :</label>*/
/*     <input type="text" id="username" name="_username" value="{{ last_username }}" />*/
/* */
/*     <label for="password">Mot de passe :</label>*/
/*     <input type="password" id="password" name="_password" />*/
/*     <br />*/
/*     <input type="submit" value="Connexion" />*/
/*   </form>*/
/*     */
/* {% endblock %}*/
