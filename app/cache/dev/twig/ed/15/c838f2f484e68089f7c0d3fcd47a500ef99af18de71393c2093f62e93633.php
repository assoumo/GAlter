<?php

/* base.html.twig */
class __TwigTemplate_ed15c838f2f484e68089f7c0d3fcd47a500ef99af18de71393c2093f62e93633 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascripts_head' => array($this, 'block_javascripts_head'),
            'menu' => array($this, 'block_menu'),
            'fos_user_content' => array($this, 'block_fos_user_content'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
    <title>";
        // line 4
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <!-- Bootstrap -->

    ";
        // line 8
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 17
        echo "    ";
        $this->displayBlock('javascripts_head', $context, $blocks);
        // line 28
        echo "



</head>

<body>

";
        // line 36
        $this->displayBlock('menu', $context, $blocks);
        // line 39
        echo "
<br/>
<br/>

";
        // line 43
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 46
        echo "



    ";
        // line 50
        $this->displayBlock('body', $context, $blocks);
        // line 52
        echo "
</body>
</html>";
    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        echo "Mon site ";
    }

    // line 8
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 9
        echo "        <link href=\"//netdna.bootstrapcdn.com/bootstrap/3.1.0/fonts/glyphicons-halflings-regular.eot\" rel=\"stylesheet\">
        <link href=\"//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.css\" rel=\"stylesheet\">
        <link href=\"http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css\" rel=\"stylesheet\">

        <link rel=\"stylesheet\" href=\"  ";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/galtuser/css/themes/base/jquery.ui.all.css"), "html", null, true);
        echo " \">
        <link rel=\"stylesheet\" href=\" ";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/galteruser/css/demo.css"), "html", null, true);
        echo "\">

    ";
    }

    // line 17
    public function block_javascripts_head($context, array $blocks = array())
    {
        // line 18
        echo "




        <script src=\"http://code.jquery.com/jquery-2.1.0.min.js\"></script>

        <script type=\"text/javascript\" src=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/galteruser/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>

    ";
    }

    // line 36
    public function block_menu($context, array $blocks = array())
    {
        // line 37
        echo "
";
    }

    // line 43
    public function block_fos_user_content($context, array $blocks = array())
    {
        // line 44
        echo "
";
    }

    // line 50
    public function block_body($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  137 => 50,  132 => 44,  129 => 43,  124 => 37,  121 => 36,  114 => 25,  105 => 18,  102 => 17,  95 => 14,  91 => 13,  85 => 9,  82 => 8,  76 => 4,  70 => 52,  68 => 50,  62 => 46,  60 => 43,  54 => 39,  52 => 36,  42 => 28,  39 => 17,  37 => 8,  30 => 4,  25 => 1,);
    }
}
