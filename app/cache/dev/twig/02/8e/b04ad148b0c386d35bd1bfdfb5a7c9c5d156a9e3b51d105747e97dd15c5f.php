<?php

/* FOSMessageBundle:Message:newThread.html.twig */
class __TwigTemplate_028eb04ad148b0c386d35bd1bfdfb5a7c9c5d156a9e3b51d105747e97dd15c5f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("GAlterUserBundle::layout.html.twig", "FOSMessageBundle:Message:newThread.html.twig", 1);
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
        echo $this->env->getExtension('translator')->getTranslator()->trans("send_new", array(), "FOSMessageBundle");
        echo "</h2>

<form action=\"";
        // line 7
        echo $this->env->getExtension('routing')->getUrl("fos_message_thread_new");
        echo "\" method=\"post\">
    ";
        // line 8
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "

    <input type=\"submit\" />
</form>

";
    }

    public function getTemplateName()
    {
        return "FOSMessageBundle:Message:newThread.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 8,  39 => 7,  34 => 5,  31 => 4,  28 => 3,  11 => 1,);
    }
}
