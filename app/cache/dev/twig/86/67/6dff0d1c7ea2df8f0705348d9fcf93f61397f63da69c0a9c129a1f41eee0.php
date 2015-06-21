<?php

/* FOSMessageBundle:Message:thread.html.twig */
class __TwigTemplate_86676dff0d1c7ea2df8f0705348d9fcf93f61397f63da69c0a9c129a1f41eee0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("GAlterUserBundle::layout.html.twig", "FOSMessageBundle:Message:thread.html.twig", 1);
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
        echo "

<h3>";
        // line 6
        echo $this->env->getExtension('translator')->getTranslator()->trans("reply", array(), "FOSMessageBundle");
        echo "</h3>

<form action=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("fos_message_thread_view", array("threadId" => $this->getAttribute((isset($context["thread"]) ? $context["thread"] : $this->getContext($context, "thread")), "id", array()))), "html", null, true);
        echo "\" method=\"post\">
    ";
        // line 9
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "

    <input type=\"submit\" />
</form>


    <div class=\"chat-panel panel panel-default\">
        <div class=\"panel-heading\">
            <i class=\"fa fa-comments fa-fw\"></i>
            SUJET:";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["thread"]) ? $context["thread"] : $this->getContext($context, "thread")), "subject", array()), "html", null, true);
        echo "

            <div class=\"btn-group pull-right\">
                <button type=\"button\" class=\"btn btn-default btn-xs dropdown-toggle\" data-toggle=\"dropdown\">
                    <i class=\"fa fa-chevron-down\"></i>
                </button>
                <ul class=\"dropdown-menu slidedown\">
                    <li>
                        <a href=\"#\">
                            <i class=\"fa fa-refresh fa-fw\"></i> Refresh
                        </a>
                    </li>
                    <li>
                        <a href=\"#\">
                            <i class=\"fa fa-check-circle fa-fw\"></i> Available
                        </a>
                    </li>
                    <li>
                        <a href=\"#\">
                            <i class=\"fa fa-times fa-fw\"></i> Busy
                        </a>
                    </li>
                    <li>
                        <a href=\"#\">
                            <i class=\"fa fa-clock-o fa-fw\"></i> Away
                        </a>
                    </li>
                    <li class=\"divider\"></li>
                    <li>
                        <a href=\"#\">
                            <i class=\"fa fa-sign-out fa-fw\"></i> Sign Out
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <!-- /.panel-heading -->
        <div class=\"panel-body\">

            ";
        // line 57
        $context["id_first_sender"] = $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["thread"]) ? $context["thread"] : $this->getContext($context, "thread")), "messages", array()), "first", array(), "method"), "id", array());
        // line 58
        echo "            ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["thread"]) ? $context["thread"] : $this->getContext($context, "thread")), "messages", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 59
            echo "

            <ul class=\"chat\">

                ";
            // line 63
            if (((isset($context["id_first_sender"]) ? $context["id_first_sender"] : $this->getContext($context, "id_first_sender")) != $this->getAttribute($context["message"], "id", array()))) {
                // line 64
                echo "                <li class=\"left clearfix\">
                                    <span class=\"chat-img pull-left\">
                                        <img src=\"http://placehold.it/50/55C1E7/fff\" alt=\"User Avatar\" class=\"img-circle\" />
                                    </span>
                    <div class=\"chat-body clearfix\">
                        <div class=\"header\">
                            <strong class=\"primary-font\">";
                // line 70
                echo twig_escape_filter($this->env, $this->getAttribute($context["message"], "sender", array()), "html", null, true);
                echo "</strong>
                            <small class=\"pull-right text-muted\">
                                <i class=\"fa fa-clock-o fa-fw\"></i> ";
                // line 72
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["message"], "createdAt", array())), "html", null, true);
                echo "
                            </small>
                        </div>
                        <p>
                            ";
                // line 76
                echo twig_escape_filter($this->env, $this->getAttribute($context["message"], "body", array()), "html", null, true);
                echo "
                        </p>
                    </div>
                </li>
                ";
            } else {
                // line 81
                echo "                <li class=\"right clearfix\">
                                    <span class=\"chat-img pull-right\">
                                        <img src=\"http://placehold.it/50/FA6F57/fff\" alt=\"User Avatar\" class=\"img-circle\" />
                                    </span>
                    <div class=\"chat-body clearfix\">
                        <div class=\"header\">
                            <small class=\" text-muted\">
                                <i class=\"fa fa-clock-o fa-fw\"></i> ";
                // line 88
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["message"], "createdAt", array())), "html", null, true);
                echo "</small>
                            <strong class=\"pull-right primary-font\">";
                // line 89
                echo twig_escape_filter($this->env, $this->getAttribute($context["message"], "sender", array()), "html", null, true);
                echo "</strong>
                        </div>
                        <p>
                            ";
                // line 92
                echo twig_escape_filter($this->env, $this->getAttribute($context["message"], "body", array()), "html", null, true);
                echo "
                        </p>
                    </div>
                </li>
              ";
            }
            // line 97
            echo "            </ul>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 99
        echo "        </div>
        <!-- /.panel-body -->

    </div>

";
    }

    public function getTemplateName()
    {
        return "FOSMessageBundle:Message:thread.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  175 => 99,  168 => 97,  160 => 92,  154 => 89,  150 => 88,  141 => 81,  133 => 76,  126 => 72,  121 => 70,  113 => 64,  111 => 63,  105 => 59,  100 => 58,  98 => 57,  56 => 18,  44 => 9,  40 => 8,  35 => 6,  31 => 4,  28 => 3,  11 => 1,);
    }
}
