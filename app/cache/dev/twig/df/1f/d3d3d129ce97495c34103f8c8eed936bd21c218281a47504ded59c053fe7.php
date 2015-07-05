<?php

/* GAlterUserBundle:Registration:user_two.form.html.twig */
class __TwigTemplate_df1fd3d3d129ce97495c34103f8c8eed936bd21c218281a47504ded59c053fe7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("GAlterUserBundle::layout.html.twig", "GAlterUserBundle:Registration:user_two.form.html.twig", 1);
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
        echo "  formulaire tuteur ";
    }

    // line 4
    public function block_corps($context, array $blocks = array())
    {
        // line 5
        echo "    ";
        // line 6
        echo "


   ";
        // line 10
        echo "


    <div class=\"container\">

        <div class=\"stepwizard col-md-offset-3\">
            <div class=\"stepwizard-row setup-panel\">
                <div class=\"stepwizard-step\">
                    <a href=\"#step-1\" type=\"button\" class=\"btn btn-primary btn-circle\">1</a>
                    <p>Etape 1</p>
                </div>
                <div class=\"stepwizard-step\">
                    <a href=\"#step-2\" type=\"button\" class=\"btn btn-default btn-circle\" disabled=\"disabled\">2</a>
                    <p>Etape 2</p>
                </div>
                <div class=\"stepwizard-step\">
                    <a href=\"#step-3\" type=\"button\" class=\"btn btn-default btn-circle\" disabled=\"disabled\">3</a>
                    <p>Etape 3</p>
                </div>
            </div>
        </div>

        <form action=\"";
        // line 32
        echo $this->env->getExtension('routing')->getPath("user_two_registration");
        echo "\" method=\"post\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo ">
            <div class=\"row setup-content\" id=\"step-1\">
                <div class=\"col-xs-6 col-md-offset-3\">
                    <div class=\"col-md-12\">
                        ";
        // line 37
        echo "
                        <div class=\"form-group\">
                            <label class=\"control-label\">Nom</label>


                            ";
        // line 42
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "username", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                            ";
        // line 43
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "username", array()), 'errors');
        echo "


                            ";
        // line 47
        echo "                            ";
        // line 48
        echo "                        </div>


                        <div class=\"form-group\">
                            <label class=\"control-label\">Prenom</label>

                            ";
        // line 54
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "prenom", array()), 'widget', array("attr" => array("class" => "form-control", "required" => "required")));
        echo "

                        </div>

                        <div class=\"form-group\">
                            <label class=\"control-label\"> Email</label>

                            ";
        // line 61
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "



                            ";
        // line 66
        echo "                            ";
        // line 67
        echo "                        </div>

                        <button class=\"btn btn-primary nextBtn btn-lg pull-right\" type=\"button\" >Next</button>
                    </div>
                </div>
            </div>
            <div class=\"row setup-content\" id=\"step-2\">
                <div class=\"col-xs-6 col-md-offset-3\">
                    <div class=\"col-md-12\">
                        ";
        // line 77
        echo "                        <div class=\"form-group\">
                            <label class=\"control-label\">Mot de passe</label>
                            ";
        // line 79
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "plainPassword", array()), "first", array()), 'widget', array("attr" => array("class" => "form-control", "required" => "required")));
        echo "


                        </div>

                        <div class=\"form-group\">

                            <label class=\"control-label\">Verification</label>
                            ";
        // line 87
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "plainPassword", array()), "second", array()), 'widget', array("attr" => array("class" => "form-control", "required" => "required")));
        echo "



                        </div>


                        <button class=\"btn btn-primary nextBtn btn-lg pull-right\" type=\"button\" >Next</button>
                    </div>
                </div>
            </div>
            <div class=\"row setup-content\" id=\"step-3\">
                <div class=\"col-xs-6 col-md-offset-3\">
                    <div class=\"col-md-12\">
                        ";
        // line 102
        echo "
                        <div class=\"form-group\">
                            <label class=\"control-label\">Telephone</label>

                            ";
        // line 106
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "telephone", array()), 'widget', array("attr" => array("class" => "form-control", "required" => "required")));
        echo "

                        </div>

                        <div class=\"form-group\">
                            <label class=\"control-label\">Adresse</label>

                            ";
        // line 113
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "adresse", array()), 'widget', array("attr" => array("class" => "form-control", "required" => "required")));
        echo "

                        </div>

                        <div class=\"form-group\">
                            <label class=\"control-label\">Organisation</label>
                            ";
        // line 119
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "organisation", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "

                        </div>
                        <button class=\"btn btn-success btn-lg pull-right\" type=\"submit\">Submit</button>
                    </div>
                </div>
            </div>

            ";
        // line 127
        if ($this->env->getExtension('security')->isGranted("ROLE_ADMIN")) {
            // line 128
            echo "            ";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "roles", array()), 'label');
            echo "
            ";
            // line 129
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "roles", array()), 'widget');
            echo "
            ";
            // line 130
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "roles", array()), 'errors');
            echo "


            ";
        } else {
            // line 134
            echo "            ";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "roles", array()), 'widget', array("attr" => array("style" => "display:none")));
            echo "
            ";
            // line 135
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "roles", array()), 'errors', array("attr" => array("style" => "display:none")));
            echo "
            ";
        }
        // line 137
        echo "



        ";
        // line 141
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "
        </form>

    </div>

";
    }

    public function getTemplateName()
    {
        return "GAlterUserBundle:Registration:user_two.form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  237 => 141,  231 => 137,  226 => 135,  221 => 134,  214 => 130,  210 => 129,  205 => 128,  203 => 127,  192 => 119,  183 => 113,  173 => 106,  167 => 102,  150 => 87,  139 => 79,  135 => 77,  124 => 67,  122 => 66,  115 => 61,  105 => 54,  97 => 48,  95 => 47,  89 => 43,  85 => 42,  78 => 37,  69 => 32,  45 => 10,  40 => 6,  38 => 5,  35 => 4,  29 => 3,  11 => 1,);
    }
}
