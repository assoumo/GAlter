<?php

/* FOSUserBundle:Security:login.html.twig */
class __TwigTemplate_37df5ee186b0f907a69eba5919c3ec830e0d67f4cbede823a7340a477412d288 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'menu' => array($this, 'block_menu'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "

";
        // line 3
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 12
        $this->displayBlock('menu', $context, $blocks);
    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 4
        echo "


    <link rel=\"stylesheet\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("CSS/style.css"), "html", null, true);
        echo "\">

    <link href='http://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900' rel='stylesheet' type='text/css'>

";
    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        // line 13
        echo "
";
        // line 15
        echo "    ";
        // line 16
        echo "        ";
        // line 17
        echo "            ";
        // line 18
        echo "                ";
        // line 19
        echo "                    ";
        // line 20
        echo "                        ";
        // line 21
        echo "                        ";
        // line 22
        echo "                            ";
        // line 23
        echo "                        ";
        // line 24
        echo "                    ";
        // line 25
        echo "                    ";
        // line 26
        echo "                        ";
        // line 27
        echo "                            ";
        // line 28
        echo "                            ";
        // line 29
        echo "                                ";
        // line 30
        echo "                                    ";
        // line 31
        echo "                                ";
        // line 32
        echo "                                ";
        // line 33
        echo "
                                    ";
        // line 35
        echo "                                ";
        // line 36
        echo "                                    ";
        // line 37
        echo "                                        ";
        // line 38
        echo "                                    ";
        // line 39
        echo "                                ";
        // line 40
        echo "
                               ";
        // line 42
        echo "
                                ";
        // line 44
        echo "
                            ";
        // line 46
        echo "                        ";
        // line 47
        echo "                        ";
        // line 48
        echo "
                ";
        // line 50
        echo "            ";
        // line 51
        echo "        ";
        // line 52
        echo "    ";
        // line 53
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

    public function getDebugInfo()
    {
        return array (  158 => 73,  146 => 64,  142 => 63,  137 => 60,  133 => 58,  131 => 57,  125 => 53,  123 => 52,  121 => 51,  119 => 50,  116 => 48,  114 => 47,  112 => 46,  109 => 44,  106 => 42,  103 => 40,  101 => 39,  99 => 38,  97 => 37,  95 => 36,  93 => 35,  90 => 33,  88 => 32,  86 => 31,  84 => 30,  82 => 29,  80 => 28,  78 => 27,  76 => 26,  74 => 25,  72 => 24,  70 => 23,  68 => 22,  66 => 21,  64 => 20,  62 => 19,  60 => 18,  58 => 17,  56 => 16,  54 => 15,  51 => 13,  48 => 12,  39 => 7,  34 => 4,  31 => 3,  27 => 12,  25 => 3,  21 => 1,);
    }
}
