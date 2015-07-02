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
            'footer' => array($this, 'block_footer'),
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
        // line 33
        echo "    ";
        $this->displayBlock('javascripts_head', $context, $blocks);
        // line 49
        echo "



</head>

<body>

";
        // line 57
        $this->displayBlock('menu', $context, $blocks);
        // line 60
        echo "


";
        // line 63
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 66
        echo "



 ";
        // line 70
        $this->displayBlock('body', $context, $blocks);
        // line 72
        echo "


";
        // line 75
        $this->displayBlock('footer', $context, $blocks);
        // line 78
        echo "</body>
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


        <!-- BOOTSTRAP STYLES-->
        <link rel=\"stylesheet\" href=\"  ";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/assets/css/bootstrap.css"), "html", null, true);
        echo " \">

        <!-- FONTAWESOME STYLES-->
        <link rel=\"stylesheet\" href=\"  ";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/assets/css/font-awesome.css"), "html", null, true);
        echo " \">

        <!-- MORRIS CHART STYLES-->
        <link rel=\"stylesheet\" href=\"  ";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/assets/js/morris/morris-0.4.3.min.css"), "html", null, true);
        echo " \">

        <!-- CUSTOM STYLES-->
        <link rel=\"stylesheet\" href=\"  ";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/assets/css/custom.css"), "html", null, true);
        echo " \">

        <!-- GOOGLE FONTS-->
        <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />

    ";
    }

    // line 33
    public function block_javascripts_head($context, array $blocks = array())
    {
        // line 34
        echo "
        <script src=\"http://code.jquery.com/jquery-2.1.0.min.js\"></script>

        <script type=\"text/javascript\" src=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/galteruser/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
        <script src= \"";
        // line 38
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/assets/js/jquery-1.10.2.js"), "html", null, true);
        echo "\"> </script>
        <!-- BOOTSTRAP SCRIPTS -->
        <script src=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/assets/js/bootstrap.min.js"), "html", null, true);
        echo "\"> </script>
        <!-- METISMENU SCRIPTS -->
        <script src=\"";
        // line 42
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/assets/js/jquery.metisMenu.js"), "html", null, true);
        echo "\"> </script>
        <!-- MORRIS CHART SCRIPTS -->
        <script src=\" ";
        // line 44
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/assets/js/morris/raphael-2.1.0.min.js"), "html", null, true);
        echo "\"> </script>
        <script src=\" ";
        // line 45
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/assets/js/morris/morris.js"), "html", null, true);
        echo "\"> </script>
        <!-- CUSTOM SCRIPTS -->
        <script src=\" ";
        // line 47
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/assets/js/custom.js"), "html", null, true);
        echo "\"> </script>
    ";
    }

    // line 57
    public function block_menu($context, array $blocks = array())
    {
        // line 58
        echo "
";
    }

    // line 63
    public function block_fos_user_content($context, array $blocks = array())
    {
        // line 64
        echo "
";
    }

    // line 70
    public function block_body($context, array $blocks = array())
    {
    }

    // line 75
    public function block_footer($context, array $blocks = array())
    {
        // line 76
        echo "
";
    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  202 => 76,  199 => 75,  194 => 70,  189 => 64,  186 => 63,  181 => 58,  178 => 57,  172 => 47,  167 => 45,  163 => 44,  158 => 42,  153 => 40,  148 => 38,  144 => 37,  139 => 34,  136 => 33,  126 => 27,  120 => 24,  114 => 21,  108 => 18,  101 => 14,  97 => 13,  91 => 9,  88 => 8,  82 => 4,  77 => 78,  75 => 75,  70 => 72,  68 => 70,  62 => 66,  60 => 63,  55 => 60,  53 => 57,  43 => 49,  40 => 33,  38 => 8,  31 => 4,  26 => 1,);
    }
}
