<?php

/* @QuizIndex/Quiz/connexion.html.twig */
class __TwigTemplate_068232d9a2dddf51a5c8576dea3a788f4402d37e835ba283a2e88687844f2190 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("QuizIndexBundle::base.html.twig", "@QuizIndex/Quiz/connexion.html.twig", 1);
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
        $__internal_49963c495ace0d9a6693de77a4472675845d9b9d48124c35d17b4ce34dbd4007 = $this->env->getExtension("native_profiler");
        $__internal_49963c495ace0d9a6693de77a4472675845d9b9d48124c35d17b4ce34dbd4007->enter($__internal_49963c495ace0d9a6693de77a4472675845d9b9d48124c35d17b4ce34dbd4007_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@QuizIndex/Quiz/connexion.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_49963c495ace0d9a6693de77a4472675845d9b9d48124c35d17b4ce34dbd4007->leave($__internal_49963c495ace0d9a6693de77a4472675845d9b9d48124c35d17b4ce34dbd4007_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_ee24d6f4a8efc25fc1b1a194a28cde4edae78a8c74b20e7fc4fbb8addf97f999 = $this->env->getExtension("native_profiler");
        $__internal_ee24d6f4a8efc25fc1b1a194a28cde4edae78a8c74b20e7fc4fbb8addf97f999->enter($__internal_ee24d6f4a8efc25fc1b1a194a28cde4edae78a8c74b20e7fc4fbb8addf97f999_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_ee24d6f4a8efc25fc1b1a194a28cde4edae78a8c74b20e7fc4fbb8addf97f999->leave($__internal_ee24d6f4a8efc25fc1b1a194a28cde4edae78a8c74b20e7fc4fbb8addf97f999_prof);

    }

    public function getTemplateName()
    {
        return "@QuizIndex/Quiz/connexion.html.twig";
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
