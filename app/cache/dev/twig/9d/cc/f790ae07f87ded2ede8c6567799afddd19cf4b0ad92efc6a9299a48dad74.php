<?php

/* FOSUserBundle:Registration:register_content.html.twig */
class __TwigTemplate_9dccf790ae07f87ded2ede8c6567799afddd19cf4b0ad92efc6a9299a48dad74 extends Twig_Template
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
        // line 2
        echo "
<form action=\"
    ";
        // line 4
        if (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method") == "user_one_registration")) {
            // line 5
            echo "    ";
            echo $this->env->getExtension('routing')->getPath("user_one_registration");
            echo "
    ";
        }
        // line 7
        echo "
    ";
        // line 8
        if (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method") == "user_two_registration")) {
            // line 9
            echo "    ";
            echo $this->env->getExtension('routing')->getPath("user_two_registration");
            echo "
    ";
        }
        // line 11
        echo "
     ";
        // line 12
        if (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method") == "user_three_registration")) {
            // line 13
            echo "    ";
            echo $this->env->getExtension('routing')->getPath("user_three_registration");
            echo "
    ";
        }
        // line 15
        echo "

    ";
        // line 17
        if (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method") == "user_four_registration")) {
            // line 18
            echo "    ";
            echo $this->env->getExtension('routing')->getPath("user_four_registration");
            echo "
    ";
        }
        // line 19
        echo "\"  ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo " method=\"POST\"  class=\"fos_user_registration_register\">
    ";
        // line 20
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
    <div>
        <input type=\"submit\" value=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />
    </div>
</form>";
    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:register_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  75 => 22,  70 => 20,  65 => 19,  59 => 18,  57 => 17,  53 => 15,  47 => 13,  45 => 12,  42 => 11,  36 => 9,  34 => 8,  31 => 7,  25 => 5,  23 => 4,  19 => 2,);
    }
}
