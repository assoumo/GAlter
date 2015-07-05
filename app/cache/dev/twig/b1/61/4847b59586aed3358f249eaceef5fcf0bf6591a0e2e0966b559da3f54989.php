<?php

/* FOSUserBundle:Profile:show_content.html.twig */
class __TwigTemplate_b1614847b59586aed3358f249eaceef5fcf0bf6591a0e2e0966b559da3f54989 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("GAlterUserBundle::layout.html.twig", "FOSUserBundle:Profile:show_content.html.twig", 1);
        $this->blocks = array(
            'titre' => array($this, 'block_titre'),
            'corps' => array($this, 'block_corps'),
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
    public function block_titre($context, array $blocks = array())
    {
        echo " BIENVENUE ! ";
    }

    // line 5
    public function block_corps($context, array $blocks = array())
    {
        // line 6
        echo "



    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-sm-2 col-md-2\">

                ";
        // line 14
        if ($this->env->getExtension('security')->isGranted("ROLE_ADMIN")) {
            // line 15
            echo "                <img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("JS/admin 2.jpg"), "html", null, true);
            echo "\"
                     alt=\"\" class=\"img-rounded img-responsive\" />
                
                ";
        } elseif ($this->env->getExtension('security')->isGranted("ROLE_RESPONSABLE")) {
            // line 19
            echo "                    <img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("JS/responsable 2.jpg"), "html", null, true);
            echo "\"
                         alt=\"\" class=\"img-rounded img-responsive\" />

                ";
        }
        // line 23
        echo "

            </div>
            <div class=\"col-sm-4 col-md-4\">
                <blockquote>
                    <p>  <strong>";
        // line 28
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array()), "html", null, true);
        echo " </strong> ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "prenom", array()), "html", null, true);
        echo "  </p> <small><cite title=\"Source Title\"> ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "adresse", array()), "html", null, true);
        echo " <i class=\"glyphicon glyphicon-map-marker\"></i></cite></small>
                </blockquote>
                <p> <i class=\"glyphicon glyphicon-envelope\"></i> ";
        // line 30
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "email", array()), "html", null, true);
        echo "
                    <br
                            /> <i class=\"glyphicon glyphicon-globe\"></i> ";
        // line 32
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "telephone", array()), "html", null, true);
        echo "
                    <br /> <i class=\"glyphicon glyphicon-gift\"></i> ";
        // line 33
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "lastLogin", array())), "html", null, true);
        echo "</p>
            </div>




    </div>
        </div>

";
    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:show_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  91 => 33,  87 => 32,  82 => 30,  73 => 28,  66 => 23,  58 => 19,  50 => 15,  48 => 14,  38 => 6,  35 => 5,  29 => 4,  11 => 1,);
    }
}
