<?php

/* FOSMessageBundle:Message:sent.html.twig */
class __TwigTemplate_a7cab48da9fb92940ec58f66f35b0694db2f6d65056c58a5058baae96017572e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("GAlterUserBundle::layout.html.twig", "FOSMessageBundle:Message:sent.html.twig", 1);
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
        echo $this->env->getExtension('translator')->getTranslator()->trans("sent", array(), "FOSMessageBundle");
        echo "</h2>

";
        // line 7
        $this->loadTemplate("FOSMessageBundle:Message:threads_list.html.twig", "FOSMessageBundle:Message:sent.html.twig", 7)->display(array_merge($context, array("threads" => (isset($context["threads"]) ? $context["threads"] : $this->getContext($context, "threads")))));
        // line 8
        echo "
";
    }

    public function getTemplateName()
    {
        return "FOSMessageBundle:Message:sent.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  41 => 8,  39 => 7,  34 => 5,  31 => 4,  28 => 3,  11 => 1,);
    }
}
