<?php

/* GAlterGestionBundle:Formation:index.html.twig */
class __TwigTemplate_c19c1ea382612290a417b8fbf0fd4c6a015b1fb3de210ee45a8c224fd1cbca16 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("GAlterUserBundle::layout.html.twig", "GAlterGestionBundle:Formation:index.html.twig", 1);
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

    // line 4
    public function block_titre($context, array $blocks = array())
    {
        echo "  Liste des formations  ";
    }

    // line 6
    public function block_corps($context, array $blocks = array())
    {
        // line 7
        echo "
    <a href=\"";
        // line 8
        echo $this->env->getExtension('routing')->getPath("formation_new");
        echo "\">  <button type=\"button\" class=\"btn btn-primary btn-lg\">Creer une nouvelle formation</button> </a>
    <br>
    <br>
    <div class=\"table-responsive\">
        <table class=\"table table-bordered table-hover table-striped\">
            <thead>
            <tr class=\"success\">

                <th>Libelle</th>
                <th>Description</th>
                <th>Departement</th>
                <th>Actions</th>

            </tr>
            </thead>
            <tbody>
            ";
        // line 24
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 25
            echo "                <tr class=\"warning\">
                    <td>";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "libelle", array()), "html", null, true);
            echo "</td>

                    <td>";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "description", array()), "html", null, true);
            echo "</td>
                    <td>";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "departement", array()), "html", null, true);
            echo "</td>

                    <td class=\"text-center\"><a href=\"";
            // line 31
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("formation_edit", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\">  <button type=\"button\" class=\"btn btn-primary\">Editer</button> </a>

                        </td>

                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 37
        echo "
            </tbody>
        </table>
    </div>
";
    }

    public function getTemplateName()
    {
        return "GAlterGestionBundle:Formation:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 37,  81 => 31,  76 => 29,  72 => 28,  67 => 26,  64 => 25,  60 => 24,  41 => 8,  38 => 7,  35 => 6,  29 => 4,  11 => 1,);
    }
}
