<?php

/* GAlterGestionBundle:Rapport:show.html.twig */
class __TwigTemplate_a80f737761e5e67ad9631428ee381fdd9f4afe81d3b98bcc801c328c3c570db8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "GAlterGestionBundle:Rapport:show.html.twig", 1);
        $this->blocks = array(
            'corps' => array($this, 'block_corps'),
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
    public function block_corps($context, array $blocks = array())
    {
        // line 4
        echo "    <h1>Rapport</h1>


    <div class=\"container\">
    <div class=\"page-header\">
        <h1 id=\"timeline\">Rapports</h1>
    </div>
    <ul class=\"timeline\">
        <li>
            ";
        // line 13
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 14
            echo "                <div class=\"timeline-badge\"><i class=\"glyphicon glyphicon-check\"></i></div>
                <div class=\"timeline-panel\">
                    <div class=\"timeline-heading\">
                        <h4 class=\"timeline-title\">Mussum ipsum cacilds</h4>
                        <p><small class=\"text-muted\"><i class=\"glyphicon glyphicon-time\"></i> 11 hours ago via Twitter</small></p>
                    </div>
                    <div class=\"timeline-body\">
                        ";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "contenu", array()), "html", null, true);
            echo "
                    </div>
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 25
        echo "        </li>
    </ul>

    <ul class=\"record_actions\">
        <li>
            <a href=\"";
        // line 30
        echo $this->env->getExtension('routing')->getPath("rapport");
        echo "\">
                Back to the list
            </a>
        </li>
        <li>
            <a href=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("rapport_edit", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()))), "html", null, true);
        echo "\">
                Edit
            </a>
        </li>
        <li>";
        // line 39
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form');
        echo "</li>
    </ul>
";
    }

    public function getTemplateName()
    {
        return "GAlterGestionBundle:Rapport:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  87 => 39,  80 => 35,  72 => 30,  65 => 25,  55 => 21,  46 => 14,  42 => 13,  31 => 4,  28 => 3,  11 => 1,);
    }
}
