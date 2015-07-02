<?php

/* GAlterGestionBundle:Export:tous.html.twig */
class __TwigTemplate_ab86b36dea100337930149e4737de6414f8a9115b5818ad1953a33254b0e4f7e extends Twig_Template
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
        // line 1
        echo "<html>
<body>
";
        // line 3
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["rapports"]) ? $context["rapports"] : $this->getContext($context, "rapports")));
        foreach ($context['_seq'] as $context["_key"] => $context["rap"]) {
            // line 4
            echo "    <div class=\"row\">
        <div class=\"col-sm-2\">
            <div class=\"glyphicon glyphicon-user\"> par ";
            // line 6
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["rap"], "etudiant", array()), "prenom", array()), "html", null, true);
            echo " a ";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["rap"], "date", array()), "Y-d-m"), "html", null, true);
            echo "</div>
        </div>
        <div class=\"col-sm-8\">
            <div class=\"glyphicon glyphicon-time\"> Periode de ";
            // line 9
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["rap"], "periodedebut", array()), "Y-d-m"), "html", null, true);
            echo " a ";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["rap"], "periodefin", array()), "Y-d-m"), "html", null, true);
            echo "</div>
        </div>
    </div>
    <hr/>

<div  class=\"well\" style=\"border: solid\">
        <h3>";
            // line 15
            echo $this->getAttribute($context["rap"], "contenu", array());
            echo "</h3>
</div>
    <br/>
    <br/>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['rap'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 20
        echo "
</body>
</html>
";
    }

    public function getTemplateName()
    {
        return "GAlterGestionBundle:Export:tous.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  61 => 20,  50 => 15,  39 => 9,  31 => 6,  27 => 4,  23 => 3,  19 => 1,);
    }
}
