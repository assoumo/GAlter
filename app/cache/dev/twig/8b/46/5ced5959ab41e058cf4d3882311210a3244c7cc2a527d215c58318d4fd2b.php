<?php

/* GAlterGestionBundle:Test:testannee.html.twig */
class __TwigTemplate_8b465ced5959ab41e058cf4d3882311210a3244c7cc2a527d215c58318d4fd2b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "GAlterGestionBundle:Test:testannee.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "    ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["t"]) ? $context["t"] : $this->getContext($context, "t")));
        foreach ($context['_seq'] as $context["_key"] => $context["ts"]) {
            // line 5
            echo "   <h1> ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["ts"], "anneeFormation", array()), "html", null, true);
            echo "</h1>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ts'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "GAlterGestionBundle:Test:testannee.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  36 => 5,  31 => 4,  28 => 3,  11 => 1,);
    }
}
