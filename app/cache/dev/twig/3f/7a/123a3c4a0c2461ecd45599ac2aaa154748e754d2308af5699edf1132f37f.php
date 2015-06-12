<?php

/* GAlterUserBundle::layout.html.twig */
class __TwigTemplate_3f7a123a3c4a0c2461ecd45599ac2aaa154748e754d2308af5699edf1132f37f extends Twig_Template
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
            'body' => array($this, 'block_body'),
            'footer' => array($this, 'block_footer'),
            'content' => array($this, 'block_content'),
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
        // line 24
        echo "
</head>

<body>


";
        // line 30
        $this->displayBlock('menu', $context, $blocks);
        // line 33
        echo "

";
        // line 35
        $this->displayBlock('body', $context, $blocks);
        // line 37
        echo "

";
        // line 39
        $this->displayBlock('footer', $context, $blocks);
        // line 42
        echo "


";
        // line 46
        echo "    ";
        // line 47
        echo "    ";
        // line 48
        echo "        ";
        // line 49
        echo "    ";
        // line 51
        echo "    ";
        // line 53
        echo "
";
        // line 55
        echo "    ";
        // line 56
        echo "        ";
        // line 57
        echo "            ";
        // line 58
        echo "                ";
        // line 59
        echo "            ";
        // line 60
        echo "        ";
        // line 61
        echo "    ";
        // line 63
        echo "
<div>
    ";
        // line 65
        $this->displayBlock('content', $context, $blocks);
        // line 67
        echo "

</div>
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

        ";
        // line 14
        echo "        ";
        // line 15
        echo "
    ";
    }

    // line 17
    public function block_javascripts_head($context, array $blocks = array())
    {
        // line 18
        echo "
        <script src=\"http://code.jquery.com/jquery-2.1.0.min.js\"></script>

        <script type=\"text/javascript\" src=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/galteruser/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>

    ";
    }

    // line 30
    public function block_menu($context, array $blocks = array())
    {
        // line 31
        echo "
";
    }

    // line 35
    public function block_body($context, array $blocks = array())
    {
    }

    // line 39
    public function block_footer($context, array $blocks = array())
    {
        // line 40
        echo "
";
    }

    // line 65
    public function block_content($context, array $blocks = array())
    {
        // line 66
        echo "    ";
    }

    public function getTemplateName()
    {
        return "GAlterUserBundle::layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  173 => 66,  170 => 65,  165 => 40,  162 => 39,  157 => 35,  152 => 31,  149 => 30,  142 => 21,  137 => 18,  134 => 17,  129 => 15,  127 => 14,  121 => 9,  118 => 8,  112 => 4,  103 => 67,  101 => 65,  97 => 63,  95 => 61,  93 => 60,  91 => 59,  89 => 58,  87 => 57,  85 => 56,  83 => 55,  80 => 53,  78 => 51,  76 => 49,  74 => 48,  72 => 47,  70 => 46,  65 => 42,  63 => 39,  59 => 37,  57 => 35,  53 => 33,  51 => 30,  43 => 24,  40 => 17,  38 => 8,  31 => 4,  26 => 1,);
    }
}
