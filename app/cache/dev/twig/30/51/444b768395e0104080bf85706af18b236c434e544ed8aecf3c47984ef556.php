<?php

/* GAlterGestionBundle:Rapport:new.html.twig */
class __TwigTemplate_3051444b768395e0104080bf85706af18b236c434e544ed8aecf3c47984ef556 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("GAlterUserBundle::layout.html.twig", "GAlterGestionBundle:Rapport:new.html.twig", 1);
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
        echo "    <h1>Soummetre un rapport</h1>
    <div class=\"well\" style=\"height: 700px\">
        ";
        // line 6
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("attr" => array("class" => "form-horizontal")));
        echo "
        ";
        // line 7
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "

        <div class=\"form-group\">
            ";
        // line 10
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "periodedebut", array()), 'label', array("label_attr" => array("class" => "col-sm-4 control-label"), "label" => "Debut"));
        echo "
            ";
        // line 11
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "periodedebut", array()), 'errors');
        echo "
            <div class=\"col-sm-4\">
                ";
        // line 13
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "periodedebut", array()), 'widget', array("attr" => array("class" => " col-sm-5 form-control")));
        echo "
            </div>

        </div>
        <div class=\"form-group\">
            ";
        // line 18
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "periodefin", array()), 'label', array("label_attr" => array("class" => "col-sm-4 control-label"), "label" => "Fin"));
        echo "
            ";
        // line 19
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "periodefin", array()), 'errors');
        echo "
            <div class=\"col-sm-4\">
                ";
        // line 21
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "periodefin", array()), 'widget', array("attr" => array("class" => " col-sm-5 form-control")));
        echo "
            </div>

        </div>
        <div class=\"form-group\">
            ";
        // line 26
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "contenu", array()), 'label', array("label_attr" => array("class" => "col-sm-4 control-label"), "label" => "Rapport"));
        echo "
            ";
        // line 27
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "contenu", array()), 'errors');
        echo "
            <div class=\"col-sm-4\">
                ";
        // line 29
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "contenu", array()), 'widget', array("attr" => array("class" => "col-sm-7 form-control", "type" => "textarea", "id" => "editor")));
        echo "

            </div>
        </div>

        ";
        // line 34
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "submit", array()), 'widget', array("attr" => array("class" => " col-sm-offset-5  col-sm-3 btn btn-primary")));
        echo "

        ";
        // line 36
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
    </div>
    <ul class=\"record_actions\">
        <li>
            <a href=\"";
        // line 40
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
        return "GAlterGestionBundle:Rapport:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  108 => 40,  101 => 36,  96 => 34,  88 => 29,  83 => 27,  79 => 26,  71 => 21,  66 => 19,  62 => 18,  54 => 13,  49 => 11,  45 => 10,  39 => 7,  35 => 6,  31 => 4,  28 => 3,  11 => 1,);
    }
}
