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
<h2>";
        // line 5
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["thread"]) ? $context["thread"] : $this->getContext($context, "thread")), "subject", array()), "html", null, true);
        echo "</h2>

";
        // line 7
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["thread"]) ? $context["thread"] : $this->getContext($context, "thread")), "messages", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 8
            echo "    <div class=\"messenger_thread_message\">
        <div class=\"messenger_thread_message_info\">
            ";
            // line 10
            echo $this->env->getExtension('translator')->getTranslator()->trans("message_info", array("%sender%" => twig_escape_filter($this->env, $this->getAttribute($context["message"], "sender", array())), "%date%" => twig_date_format_filter($this->env, $this->getAttribute($context["message"], "createdAt", array()))), "FOSMessageBundle");
            // line 11
            echo "        </div>

        <div class=\"messenger_thread_message_body\" id=\"message_";
            // line 13
            echo twig_escape_filter($this->env, $this->getAttribute($context["message"], "id", array()), "html", null, true);
            echo "\">
            ";
            // line 14
            echo twig_escape_filter($this->env, $this->getAttribute($context["message"], "body", array()), "html", null, true);
            echo "
        </div>
    </div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 18
        echo "
<h3>";
        // line 19
        echo $this->env->getExtension('translator')->getTranslator()->trans("reply", array(), "FOSMessageBundle");
        echo "</h3>

<form action=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("fos_message_thread_view", array("threadId" => $this->getAttribute((isset($context["thread"]) ? $context["thread"] : $this->getContext($context, "thread")), "id", array()))), "html", null, true);
        echo "\" method=\"post\">
    ";
        // line 22
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "

    <input type=\"submit\" />
</form>

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
        return array (  79 => 22,  75 => 21,  70 => 19,  67 => 18,  57 => 14,  53 => 13,  49 => 11,  47 => 10,  43 => 8,  39 => 7,  34 => 5,  31 => 4,  28 => 3,  11 => 1,);
    }
}
