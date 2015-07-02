<?php

/* GAlterUserBundle:User:index.html.twig */
class __TwigTemplate_a68322a8b8e4c016a9470ba73a748787b48d8539b63c9ec6d2d9c1725b6818cf extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("GAlterUserBundle::layout.html.twig", "GAlterUserBundle:User:index.html.twig", 1);
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
        echo "  Liste des responsables  ";
    }

    // line 4
    public function block_corps($context, array $blocks = array())
    {
        // line 5
        echo "
    <div class=\"table-responsive\">
        <table class=\"table table-bordered table-hover table-striped\">
            <thead>
            <tr class=\"success\">
                <th>Nom</th>
                <th>Prenom</th>
                <th>Email</th>
                <th>Rôle</th>
                <th>Action</th>

            </tr>
            </thead>
            <tbody>
            ";
        // line 19
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 20
            echo "            <tr class=\"warning\">
                <td>";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "username", array()), "html", null, true);
            echo "</td>

                <td>";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "prenom", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "email", array()), "html", null, true);
            echo "</td>
                <td>
                    ";
            // line 27
            echo "
                    ";
            // line 29
            echo "
                    ";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["entity"], "roles", array()), 0, array(), "array"), "html", null, true);
            echo "
                ";
            // line 32
            echo "                </td>
                <td><a href=\"";
            // line 33
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("user_edit", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\">  <button type=\"button\" class=\"btn btn-primary\">Changer le rôle</button> </a> </td>

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
        return "GAlterUserBundle:User:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  98 => 37,  88 => 33,  85 => 32,  81 => 30,  78 => 29,  75 => 27,  70 => 24,  66 => 23,  61 => 21,  58 => 20,  54 => 19,  38 => 5,  35 => 4,  29 => 3,  11 => 1,);
    }
}
