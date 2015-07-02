<?php

/* FOSUserBundle:Profile:show.html.twig */
class __TwigTemplate_7c8dbcfdda4e2b0d67116fac5dd033303a93d0bd1f4fdbcfa05576f85fa15acd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'test' => array($this, 'block_test'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        echo "
";
        // line 3
        $this->displayBlock('test', $context, $blocks);
        // line 8
        echo "

";
    }

    // line 3
    public function block_test($context, array $blocks = array())
    {
        // line 4
        echo "
    ";
        // line 5
        $this->loadTemplate("FOSUserBundle:Profile:show_content.html.twig", "FOSUserBundle:Profile:show.html.twig", 5)->display($context);
        // line 6
        echo "
";
    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:show.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  39 => 6,  37 => 5,  34 => 4,  31 => 3,  25 => 8,  23 => 3,  20 => 2,);
    }
}
