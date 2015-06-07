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
        // line 33
        $this->displayBlock('menu', $context, $blocks);
        // line 36
        echo "

";
        // line 38
        $this->displayBlock('body', $context, $blocks);
        // line 40
        echo "

";
        // line 42
        $this->displayBlock('footer', $context, $blocks);
        // line 45
        echo "


";
        // line 49
        echo "    ";
        // line 50
        echo "    ";
        // line 51
        echo "        ";
        // line 52
        echo "    ";
        // line 54
        echo "    ";
        // line 56
        echo "
";
        // line 57
        if ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "hasPreviousSession", array())) {
            // line 58
            echo "    ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "all", array(), "method"));
            foreach ($context['_seq'] as $context["type"] => $context["messages"]) {
                // line 59
                echo "        ";
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($context["messages"]);
                foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                    // line 60
                    echo "            <div class=\"flash-";
                    echo twig_escape_filter($this->env, $context["type"], "html", null, true);
                    echo "\">
                ";
                    // line 61
                    echo twig_escape_filter($this->env, $context["message"], "html", null, true);
                    echo "
            </div>
        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 64
                echo "    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['type'], $context['messages'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        // line 66
        echo "
<div>
    ";
        // line 68
        $this->displayBlock('content', $context, $blocks);
        // line 70
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

    // line 33
    public function block_menu($context, array $blocks = array())
    {
        // line 34
        echo "
";
    }

    // line 38
    public function block_body($context, array $blocks = array())
    {
    }

    // line 42
    public function block_footer($context, array $blocks = array())
    {
        // line 43
        echo "
";
    }

    // line 68
    public function block_content($context, array $blocks = array())
    {
        // line 69
        echo "    ";
    }

    public function getTemplateName()
    {
        return "GAlterUserBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  195 => 69,  192 => 68,  187 => 43,  184 => 42,  179 => 38,  174 => 34,  171 => 33,  164 => 21,  159 => 18,  156 => 17,  151 => 15,  149 => 14,  143 => 9,  140 => 8,  134 => 4,  125 => 70,  123 => 68,  119 => 66,  112 => 64,  103 => 61,  98 => 60,  93 => 59,  88 => 58,  86 => 57,  83 => 56,  81 => 54,  79 => 52,  77 => 51,  75 => 50,  73 => 49,  68 => 45,  66 => 42,  62 => 40,  60 => 38,  56 => 36,  54 => 33,  43 => 24,  40 => 17,  38 => 8,  31 => 4,  26 => 1,);
    }
}
