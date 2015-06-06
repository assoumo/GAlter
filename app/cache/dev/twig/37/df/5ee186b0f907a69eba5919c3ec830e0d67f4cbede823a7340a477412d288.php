<?php

/* FOSUserBundle:Security:login.html.twig */
class __TwigTemplate_37df5ee186b0f907a69eba5919c3ec830e0d67f4cbede823a7340a477412d288 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "FOSUserBundle:Security:login.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        // line 4
        echo "
";
        // line 6
        echo "    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-4 col-md-offset-4\">
                <div class=\"panel panel-default\">
                    <div class=\"panel-heading\">
                        <h3 class=\"panel-title\">Login GAlter</h3>
                        ";
        // line 12
        if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
            // line 13
            echo "                            <div class=\"alert alert-danger\">mot de passe et/ou mail incorrect</div>
                        ";
        }
        // line 15
        echo "                    </div>
                    <div class=\"panel-body\">
                        <form id=\"loginform\" class=\"form-horizontal\" role=\"form\" action=\"";
        // line 17
        echo $this->env->getExtension('routing')->getPath("fos_user_security_check");
        echo "\" method=\"post\">
                            <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 18
        echo twig_escape_filter($this->env, (isset($context["csrf_token"]) ? $context["csrf_token"] : $this->getContext($context, "csrf_token")), "html", null, true);
        echo "\" />
                            <fieldset>
                                <div class=\"form-group\">
                                    <input id=\"username\" type=\"text\" class=\"form-control\" name=\"_username\" value=\"";
        // line 21
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : $this->getContext($context, "last_username")), "html", null, true);
        echo "\" placeholder=\"Pseudo ou email\" required=\"required\" >
                                </div>
                                <div class=\"form-group\">

                                    <input id=\"password\" type=\"password\" class=\"form-control\" name=\"_password\" placeholder=\"mot de passe\" required=\"required\">                                </div>
                                <div class=\"checkbox\">
                                    <label>
                                        <input id=\"login-remember\" type=\"checkbox\" name=\"remember\" value=\"1\"> Remember me
                                    </label>
                                </div>

                               <div> <a href=\"";
        // line 32
        echo $this->env->getExtension('routing')->getPath("fos_user_resetting_request");
        echo "\"> Mot de passe oublié?</a> </div>

                                <input  class=\"btn btn-success\" type=\"submit\" id=\"_submit\" name=\"_submit\" value=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />

                            </fieldset>
                        </form>
                        <hr/>

                </div>
            </div>
        </div>
    </div>

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
        return array (  81 => 34,  76 => 32,  62 => 21,  56 => 18,  52 => 17,  48 => 15,  44 => 13,  42 => 12,  34 => 6,  31 => 4,  28 => 3,  11 => 1,);
    }
}
