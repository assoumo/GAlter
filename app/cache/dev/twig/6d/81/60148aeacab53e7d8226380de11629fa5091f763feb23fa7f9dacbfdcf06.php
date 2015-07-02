<?php

/* GAlterGestionBundle:Rapport:index.html.twig */
class __TwigTemplate_6d8160148aeacab53e7d8226380de11629fa5091f763feb23fa7f9dacbfdcf06 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("GAlterUserBundle::layout.html.twig", "GAlterGestionBundle:Rapport:index.html.twig", 1);
        $this->blocks = array(
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
    public function block_corps($context, array $blocks = array())
    {
        // line 4
        echo "    <div class=\"container\">
        <div class=\"page-header\">
            <h1 id=\"timeline\">Rapports</h1>
        </div>

        <form action=\"";
        // line 9
        echo $this->env->getExtension('routing')->getPath("exporter_tout", array("rapports" => "rapp"));
        echo "\"  method=\"POST\" >
            <button type=\"submit\">exporter</button>
        </form>
        <ul class=\"timeline\">
            ";
        // line 13
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 14
            echo "                <li>
                    <div class=\"timeline-badge\"><i class=\"glyphicon glyphicon-check\"></i>
                    </div>
                    <div class=\"timeline-panel\">
                        <div class=\"timeline-heading\">
                            <h4 class=\"timeline-title\">";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["entity"], "etudiant", array()), "prenom", array()), "html", null, true);
            echo "
                            </h4>
                            <p>
                                <small class=\"text-muted\"><i class=\"glyphicon glyphicon-briefcase\"></i>
                                    du ";
            // line 23
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["entity"], "periodedebut", array()), "Y-d-m"), "html", null, true);
            echo " à ";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["entity"], "periodefin", array()), "Y-d-m"), "html", null, true);
            echo "
                                </small>
                            </p>
                            <p>
                                <small class=\"text-muted\"><i class=\"glyphicon glyphicon-time\"></i>
                                    ";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "textaudit", array()), "html", null, true);
            echo " le ";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["entity"], "date", array()), "Y-d-m"), "html", null, true);
            echo "
                                </small>
                            </p>
                        </div>
                        <div class=\"timeline-body\">
                            ";
            // line 33
            echo $this->getAttribute($context["entity"], "contenu", array());
            echo "

                        </div>
                        <div class=\"btn-groupe\" role=\"toolbar\">
                            ";
            // line 37
            if ($this->env->getExtension('security')->isGranted("ROLE_ETUDIANT")) {
                // line 38
                echo "                                <a class=\"btn btn-success glyphicon glyphicon-pencil\" href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("rapport_edit", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
                echo "\"></a>
                                <a class=\"btn btn-danger glyphicon  glyphicon-trash\" href=\"";
                // line 39
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("rapport_delete", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
                echo "\"></a>

                            ";
            }
            // line 42
            echo "                          ";
            // line 43
            echo "                            ";
            if ($this->env->getExtension('security')->isGranted("ROLE_TUTEUR")) {
                // line 44
                echo "                            <a class=\"btn btn-primary glyphicon glyphicon-comment\" href=\"\"></a>
                            <a class=\"btn btn-danger\" href=\"\"><span class=\" glyphicon glyphicon-envelope\"></span></a>
                            ";
            }
            // line 47
            echo "
                        </div>
                    </div>
                </li>
                ";
            // line 51
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["entity"], "remarque", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["remarque"]) {
                // line 52
                echo "                    <li>
                        <div class=\"timeline-panel\">
                            <div class=\"timeline-heading\">
                                <h4 class=\"timeline-title\">remarque.tuteurId.nom</h4>
                            </div>
                            <div class=\"timeline-body\">
                                ";
                // line 58
                echo twig_escape_filter($this->env, $this->getAttribute($context["remarque"], "contenu", array()), "html", null, true);
                echo "
                            </div>
                        </div>
                    </li>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['remarque'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 63
            echo "

            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 66
        echo "        </ul>
    </div>

    <ul class=\"record_actions\">
        <li>
            <a href=\"";
        // line 71
        echo $this->env->getExtension('routing')->getPath("rapport");
        echo "\">
                Back to the list
            </a>
        </li>
    </ul>
";
    }

    public function getTemplateName()
    {
        return "GAlterGestionBundle:Rapport:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  157 => 71,  150 => 66,  142 => 63,  131 => 58,  123 => 52,  119 => 51,  113 => 47,  108 => 44,  105 => 43,  103 => 42,  97 => 39,  92 => 38,  90 => 37,  83 => 33,  73 => 28,  63 => 23,  56 => 19,  49 => 14,  45 => 13,  38 => 9,  31 => 4,  28 => 3,  11 => 1,);
    }
}
