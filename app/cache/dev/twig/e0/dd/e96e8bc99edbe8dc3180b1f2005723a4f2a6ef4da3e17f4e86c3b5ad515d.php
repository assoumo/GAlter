<?php

/* GAlterUserBundle:User:edit.html.twig */
class __TwigTemplate_e0dde96e8bc99edbe8dc3180b1f2005723a4f2a6ef4da3e17f4e86c3b5ad515d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("GAlterUserBundle::layout.html.twig", "GAlterUserBundle:User:edit.html.twig", 1);
        $this->blocks = array(
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
    public function block_corps($context, array $blocks = array())
    {
        // line 4
        echo "    ";
        // line 5
        echo "

    ";
        // line 8
        echo "
        ";
        // line 10
        echo "            ";
        // line 11
        echo "        ";
        // line 12
        echo "            ";
        // line 13
        echo "            ";
        // line 14
        echo "            ";
        // line 15
        echo "

        ";
        // line 18
        echo "    ";
        // line 19
        echo "
    ";
        // line 20
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form');
        echo "

";
    }

    public function getTemplateName()
    {
        return "GAlterUserBundle:User:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  59 => 20,  56 => 19,  54 => 18,  50 => 15,  48 => 14,  46 => 13,  44 => 12,  42 => 11,  40 => 10,  37 => 8,  33 => 5,  31 => 4,  28 => 3,  11 => 1,);
    }
}
