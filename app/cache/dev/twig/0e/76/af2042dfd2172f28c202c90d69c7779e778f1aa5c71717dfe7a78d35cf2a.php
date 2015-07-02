<?php

/* GAlterUserBundle:etudiant:index.html.twig */
class __TwigTemplate_0e76af2042dfd2172f28c202c90d69c7779e778f1aa5c71717dfe7a78d35cf2a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("GAlterUserBundle::layout.html.twig", "GAlterUserBundle:etudiant:index.html.twig", 1);
        $this->blocks = array(
            'titre' => array($this, 'block_titre'),
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
    public function block_titre($context, array $blocks = array())
    {
        echo "  Liste des étudiants  ";
    }

    // line 6
    public function block_corps($context, array $blocks = array())
    {
        // line 7
        echo "
    <div class=\"table-responsive\">
        <table class=\"table table-bordered table-hover table-striped\">
            <thead>
            <tr class=\"success\">
                <th class=\"text-center\">Nom</th>
                <th class=\"text-center\">Prenom</th>
                <th class=\"text-center\">Etat</th>
                <th class=\"text-center\">Actions</th>

            </tr>
            </thead>
            <tbody>
            ";
        // line 20
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 21
            echo "                <tr class=\"warning\">
                    <td class=\"text-center\">";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "username", array()), "html", null, true);
            echo "</td>
                    <td class=\"text-center\">";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "prenom", array()), "html", null, true);
            echo "</td>
                    <td class=\"text-center\">
                        ";
            // line 25
            if (($this->getAttribute($context["entity"], "etat", array()) == "actif")) {
                // line 26
                echo "
                        <button type=\"button\" class=\"btn btn-success btn-sm disabled\">";
                // line 27
                echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "etat", array()), "html", null, true);
                echo "</button>

                            ";
            } else {
                // line 30
                echo "
                                <button type=\"button\" class=\"btn btn-danger btn-sm disabled\">";
                // line 31
                echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "etat", array()), "html", null, true);
                echo "</button>

                       ";
            }
            // line 33
            echo "</td>
                    <td class=\"text-center\"><a href=\"";
            // line 34
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("etudiant_edit", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\">  <button type=\"button\" class=\"btn btn-danger\">
                                <span class=\"glyphicon glyphicon-wrench\"></span> Editer
                            </button> </a> </td>

                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 40
        echo "
            </tbody>
        </table>
    </div>


";
    }

    public function getTemplateName()
    {
        return "GAlterUserBundle:etudiant:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  104 => 40,  92 => 34,  89 => 33,  83 => 31,  80 => 30,  74 => 27,  71 => 26,  69 => 25,  64 => 23,  60 => 22,  57 => 21,  53 => 20,  38 => 7,  35 => 6,  29 => 3,  11 => 1,);
    }
}
