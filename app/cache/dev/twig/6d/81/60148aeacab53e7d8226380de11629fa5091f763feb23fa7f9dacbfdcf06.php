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
            'corp' => array($this, 'block_corp'),
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
    public function block_corp($context, array $blocks = array())
    {
        // line 4
        echo "    <div class=\"container\">
        <div class=\"page-header\">
            <h1 id=\"timeline\">Rapports</h1>
        </div>
        <ul class=\"timeline\">
            ";
        // line 9
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 10
            echo "                <li>
                    <div class=\"timeline-badge\"><i class=\"glyphicon glyphicon-check\"></i>
                    </div>
                    <div class=\"timeline-panel\">
                        <div class=\"timeline-heading\">
                            <h4 class=\"timeline-title\">";
            // line 15
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["entity"], "etudiant", array()), "prenom", array()), "html", null, true);
            echo "
                            </h4>
                            <p>
                                <small class=\"text-muted\"><i class=\"glyphicon glyphicon-time\"></i>
                                    du ";
            // line 19
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["entity"], "periodedebut", array()), "Y-d-m"), "html", null, true);
            echo " à ";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["entity"], "periodefin", array()), "Y-d-m"), "html", null, true);
            echo "
                                </small>
                            </p>
                        </div>
                        <div class=\"timeline-body\">
                            ";
            // line 24
            echo $this->getAttribute($context["entity"], "contenu", array());
            echo "
                           ";
            // line 25
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["entity"], "remarque", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["ent"]) {
                // line 26
                echo "                              ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["ent"], "id", array()), "html", null, true);
                echo "
                           ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ent'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 28
            echo "                        </div>

                        <a class=\"btn btn-primary\" href=\"\">ADD</a>
                    </div>
                </li>
                <li>
                    <div class=\"timeline-panel\">
                        <div class=\"timeline-heading\">
                            <h4 class=\"timeline-title\">Mussum ipsum cacilds</h4>
                        </div>
                        <div class=\"timeline-body\">
                            <p>Mussum ipsum cacilds, vidis litro abertis. Consetis adipiscings elitis. Pra lá , depois divoltis porris, paradis. Paisis, filhis, espiritis santis. Mé faiz elementum girarzis, nisi eros vermeio, in elementis mé pra quem é amistosis quis leo. Manduma pindureta quium dia nois paga. Sapien in monti palavris qui num significa nadis i pareci latim. Interessantiss quisso pudia ce receita de bolis, mais bolis eu num gostis.</p>
                        </div>
                    </div>
                </li>


            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 46
        echo "        </ul>
    </div>

    <ul class=\"record_actions\">
        <li>
            <a href=\"";
        // line 51
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
        return array (  113 => 51,  106 => 46,  83 => 28,  74 => 26,  70 => 25,  66 => 24,  56 => 19,  49 => 15,  42 => 10,  38 => 9,  31 => 4,  28 => 3,  11 => 1,);
    }
}
