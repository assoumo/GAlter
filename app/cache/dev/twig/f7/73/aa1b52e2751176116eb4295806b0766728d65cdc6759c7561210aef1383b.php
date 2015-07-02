<?php

/* FOSUserBundle:Profile:show_content.html.twig */
class __TwigTemplate_f773aa1b52e2751176116eb4295806b0766728d65cdc6759c7561210aef1383b extends Twig_Template
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

    // line 3
    public function block_titre($context, array $blocks = array())
    {
        echo " BIENVENUE ! ";
    }

    // line 4
    public function block_corps($context, array $blocks = array())
    {
        // line 5
        echo "
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-sm-2 col-md-2\">

                ";
        // line 10
        if ($this->env->getExtension('security')->isGranted("ROLE_ADMIN")) {
            // line 11
            echo "                <img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("JS/admin 2.jpg"), "html", null, true);
            echo "\"
                     alt=\"\" class=\"img-rounded img-responsive\" />
                
                ";
        } elseif ($this->env->getExtension('security')->isGranted("ROLE_RESPONSABLE")) {
            // line 15
            echo "                    <img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("JS/responsable 2.jpg"), "html", null, true);
            echo "\"
                         alt=\"\" class=\"img-rounded img-responsive\" />

                ";
        }
        // line 19
        echo "

            </div>
            <div class=\"col-sm-4 col-md-4\">
                <blockquote>
                    <p>  <strong>";
        // line 24
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array()), "html", null, true);
        echo " </strong> ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "prenom", array()), "html", null, true);
        echo "  </p> <small><cite title=\"Source Title\"> ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "adresse", array()), "html", null, true);
        echo " <i class=\"glyphicon glyphicon-map-marker\"></i></cite></small>
                </blockquote>
                <p> <i class=\"glyphicon glyphicon-envelope\"></i> ";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "email", array()), "html", null, true);
        echo "
                    <br
                            /> <i class=\"glyphicon glyphicon-globe\"></i> ";
        // line 28
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "telephone", array()), "html", null, true);
        echo "
                    <br /> <i class=\"glyphicon glyphicon-gift\"></i> ";
        // line 29
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "lastLogin", array())), "html", null, true);
        echo "</p>
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
        return array (  88 => 29,  84 => 28,  79 => 26,  70 => 24,  63 => 19,  55 => 15,  47 => 11,  45 => 10,  38 => 5,  35 => 4,  29 => 3,  11 => 1,);
    }
}
