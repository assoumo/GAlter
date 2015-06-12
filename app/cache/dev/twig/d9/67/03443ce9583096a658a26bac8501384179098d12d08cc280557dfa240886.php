<?php

/* FOSUserBundle:Security:login.html.twig */
class __TwigTemplate_d96703443ce9583096a658a26bac8501384179098d12d08cc280557dfa240886 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("GAlterUserBundle::layout.html.twig", "FOSUserBundle:Security:login.html.twig", 1);
        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'menu' => array($this, 'block_menu'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "GAlterUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 5
        echo "


    <link rel=\"stylesheet\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("CSS/style.css"), "html", null, true);
        echo "\">

    <link href='http://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900' rel='stylesheet' type='text/css'>

";
    }

    // line 13
    public function block_menu($context, array $blocks = array())
    {
        // line 14
        echo "
";
        // line 16
        echo "    ";
        // line 17
        echo "        ";
        // line 18
        echo "            ";
        // line 19
        echo "                ";
        // line 20
        echo "                    ";
        // line 21
        echo "                        ";
        // line 22
        echo "                        ";
        // line 23
        echo "                            ";
        // line 24
        echo "                        ";
        // line 25
        echo "                    ";
        // line 26
        echo "                    ";
        // line 27
        echo "                        ";
        // line 28
        echo "                            ";
        // line 29
        echo "                            ";
        // line 30
        echo "                                ";
        // line 31
        echo "                                    ";
        // line 32
        echo "                                ";
        // line 33
        echo "                                ";
        // line 34
        echo "
                                    ";
        // line 36
        echo "                                ";
        // line 37
        echo "                                    ";
        // line 38
        echo "                                        ";
        // line 39
        echo "                                    ";
        // line 40
        echo "                                ";
        // line 41
        echo "
                               ";
        // line 43
        echo "
                                ";
        // line 45
        echo "
                            ";
        // line 47
        echo "                        ";
        // line 48
        echo "                        ";
        // line 49
        echo "
                ";
        // line 51
        echo "            ";
        // line 52
        echo "        ";
        // line 53
        echo "    ";
        // line 54
        echo "
<body>
    <h1>BIENVENUE!<span>Connectez-vous!</span>
        ";
        // line 57
        if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
            // line 58
            echo "        <div class=\"alert alert-danger\">mot de passe et/ou mail incorrect</div>
        ";
        }
        // line 60
        echo "
    </h1>
    <div class=\"login-box\">
        <form id=\"loginform\" class=\"form-horizontal\" role=\"form\" action=\"";
        // line 63
        echo $this->env->getExtension('routing')->getPath("fos_user_security_check");
        echo "\" method=\"post\">
        <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 64
        echo twig_escape_filter($this->env, (isset($context["csrf_token"]) ? $context["csrf_token"] : $this->getContext($context, "csrf_token")), "html", null, true);
        echo "\" />

            <input type=\"text\" id=\"username\" name=\"_username\"  value=\"Nom utilisateur\" onfocus=\"this.value = '';\" onblur=\"if (this.value == '') {this.value = 'Nom utilisateur';}\" required=\"required\" />

            <input type=\"password\" id=\"password\" name=\"_password\"  value=\"Mot de passe\" onfocus=\"this.value = '';\" onblur=\"if (this.value == '') {this.value = 'Mot de passe';}\" required=\"required\" />

        <div class=\"remember\">
            <h4><input id=\"login-remember\" type=\"checkbox\" name=\"remember\" value=\"1\"> Remember me</h4>
            <div class=\"clear\"> </div>
            <h4>Mot de passe oublié?<a href=\"";
        // line 73
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
        return array (  155 => 73,  143 => 64,  139 => 63,  134 => 60,  130 => 58,  128 => 57,  123 => 54,  121 => 53,  119 => 52,  117 => 51,  114 => 49,  112 => 48,  110 => 47,  107 => 45,  104 => 43,  101 => 41,  99 => 40,  97 => 39,  95 => 38,  93 => 37,  91 => 36,  88 => 34,  86 => 33,  84 => 32,  82 => 31,  80 => 30,  78 => 29,  76 => 28,  74 => 27,  72 => 26,  70 => 25,  68 => 24,  66 => 23,  64 => 22,  62 => 21,  60 => 20,  58 => 19,  56 => 18,  54 => 17,  52 => 16,  49 => 14,  46 => 13,  37 => 8,  32 => 5,  29 => 4,  11 => 1,);
    }
}
