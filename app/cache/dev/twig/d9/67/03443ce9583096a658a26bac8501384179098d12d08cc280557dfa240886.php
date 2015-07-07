<?php

/* FOSUserBundle:Security:login.html.twig */
class __TwigTemplate_d96703443ce9583096a658a26bac8501384179098d12d08cc280557dfa240886 extends Twig_Template
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
        // line 1
        echo "
<html>


  <head>




    <link rel=\"stylesheet\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("CSS/style.css"), "html", null, true);
        echo "\">

    <link href='http://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900' rel='stylesheet' type='text/css'>

  </head>

";
        // line 17
        echo "
<body>

    <h1>BIENVENUE!<span>Connectez-vous!</span>
        ";
        // line 21
        if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
            // line 22
            echo "        <div class=\"alert alert-danger\">mot de passe et/ou mail incorrect</div>
        ";
        }
        // line 24
        echo "
    </h1>
    <div class=\"login-box\">
        <form id=\"loginform\" class=\"form-horizontal\" role=\"form\" action=\"";
        // line 27
        echo $this->env->getExtension('routing')->getPath("fos_user_security_check");
        echo "\" method=\"post\">
        <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 28
        echo twig_escape_filter($this->env, (isset($context["csrf_token"]) ? $context["csrf_token"] : $this->getContext($context, "csrf_token")), "html", null, true);
        echo "\" />

            <input type=\"text\" id=\"username\" name=\"_username\"  value=\"Nom utilisateur\" onfocus=\"this.value = '';\" onblur=\"if (this.value == '') {this.value = 'Nom utilisateur';}\" required=\"required\" />

            <input type=\"password\" id=\"password\" name=\"_password\"  value=\"Mot de passe\" onfocus=\"this.value = '';\" onblur=\"if (this.value == '') {this.value = 'Mot de passe';}\" required=\"required\" />

        <div class=\"remember\">
            <h4><input id=\"login-remember\" type=\"checkbox\" name=\"remember\" value=\"1\"> Remember me</h4>
            <div class=\"clear\"> </div>
            <h4>Mot de passe oublié?<a href=\"";
        // line 37
        echo $this->env->getExtension('routing')->getPath("fos_user_resetting_request");
        echo "\">Cliquer ici.</a></h4>
        </div>
        <div class=\"clear\"> </div>
        <div class=\"btn btn-success\">
            <input type=\"submit\"  name=\"_submit\" value=\"Se connecter\" >
        </div>

        </form>
        <div class=\"clear\"> </div>
    </div>
    <!--//End-login-form-->
    <!--start-copyright-->
    <div class=\"copy-right\">
        <p>GAlter' team UPJV 2015</p>
    </div>

    </body>

</html>


";
    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Security:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 37,  60 => 28,  56 => 27,  51 => 24,  47 => 22,  45 => 21,  39 => 17,  30 => 10,  19 => 1,);
    }
}
