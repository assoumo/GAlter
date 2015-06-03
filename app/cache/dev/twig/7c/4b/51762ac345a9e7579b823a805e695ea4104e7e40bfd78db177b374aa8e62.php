<?php

/* FOSUserBundle::layout.html.twig */
class __TwigTemplate_7c4b51762ac345a9e7579b823a805e695ea4104e7e40bfd78db177b374aa8e62 extends Twig_Template
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
            'fos_user_content' => array($this, 'block_fos_user_content'),
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
        // line 40
        $this->displayBlock('menu', $context, $blocks);
        // line 43
        echo "







";
        // line 51
        $this->displayBlock('body', $context, $blocks);
        // line 53
        echo "



";
        // line 57
        $this->displayBlock('footer', $context, $blocks);
        // line 60
        echo "


";
        // line 63
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 64
            echo "    ";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("layout.logged_in_as", array("%username%" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array())), "FOSUserBundle"), "html", null, true);
            echo " |
    <a href=\"";
            // line 65
            echo $this->env->getExtension('routing')->getPath("fos_user_security_logout");
            echo "\">
        ";
            // line 66
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("layout.logout", array(), "FOSUserBundle"), "html", null, true);
            echo "
    </a>
";
        } else {
            // line 69
            echo "    <a href=\"";
            echo $this->env->getExtension('routing')->getPath("fos_user_security_login");
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("layout.login", array(), "FOSUserBundle"), "html", null, true);
            echo "</a>
";
        }
        // line 71
        echo "
";
        // line 72
        if ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "hasPreviousSession", array())) {
            // line 73
            echo "    ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "all", array(), "method"));
            foreach ($context['_seq'] as $context["type"] => $context["messages"]) {
                // line 74
                echo "        ";
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($context["messages"]);
                foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                    // line 75
                    echo "            <div class=\"flash-";
                    echo twig_escape_filter($this->env, $context["type"], "html", null, true);
                    echo "\">
                ";
                    // line 76
                    echo twig_escape_filter($this->env, $context["message"], "html", null, true);
                    echo "
            </div>
        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 79
                echo "    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['type'], $context['messages'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        // line 81
        echo "
<div>
    ";
        // line 83
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 85
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

    // line 40
    public function block_menu($context, array $blocks = array())
    {
        // line 41
        echo "
";
    }

    // line 51
    public function block_body($context, array $blocks = array())
    {
    }

    // line 57
    public function block_footer($context, array $blocks = array())
    {
        // line 58
        echo "
";
    }

    // line 83
    public function block_fos_user_content($context, array $blocks = array())
    {
        // line 84
        echo "    ";
    }

    public function getTemplateName()
    {
        return "FOSUserBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  229 => 84,  226 => 83,  221 => 58,  218 => 57,  213 => 51,  208 => 41,  205 => 40,  198 => 25,  189 => 18,  186 => 17,  179 => 14,  175 => 13,  169 => 9,  166 => 8,  160 => 4,  151 => 85,  149 => 83,  145 => 81,  138 => 79,  129 => 76,  124 => 75,  119 => 74,  114 => 73,  112 => 72,  109 => 71,  101 => 69,  95 => 66,  91 => 65,  86 => 64,  84 => 63,  79 => 60,  77 => 57,  71 => 53,  69 => 51,  59 => 43,  57 => 40,  43 => 28,  40 => 17,  38 => 8,  31 => 4,  26 => 1,);
    }
}
