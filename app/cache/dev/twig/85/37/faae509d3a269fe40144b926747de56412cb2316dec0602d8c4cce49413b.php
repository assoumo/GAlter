<?php

/* GAlterUserBundle:Registration:user_one.form.html.twig */
class __TwigTemplate_8537faae509d3a269fe40144b926747de56412cb2316dec0602d8c4cce49413b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("GAlterUserBundle::layout.html.twig", "GAlterUserBundle:Registration:user_one.form.html.twig", 1);
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
        echo "  formulaire etudiant ";
    }

    // line 4
    public function block_corps($context, array $blocks = array())
    {
        // line 5
        echo "    ";
        // line 6
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
        // line 28
        echo $this->env->getExtension('routing')->getPath("user_one_registration");
        echo "\" method=\"post\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo ">
            <div class=\"row setup-content\" id=\"step-1\">
                <div class=\"col-xs-6 col-md-offset-3\">
                    <div class=\"col-md-12\">
                        ";
        // line 33
        echo "
                        <div class=\"form-group\">
                            <label class=\"control-label\">Nom</label>


                            ";
        // line 38
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "username", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                            ";
        // line 39
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "username", array()), 'errors');
        echo "


                            ";
        // line 43
        echo "                            ";
        // line 44
        echo "                        </div>
                        <div class=\"form-group\">
                            <label class=\"control-label\"> Prenom</label>

                            ";
        // line 48
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "prenom", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "

                        </div>
                        <div class=\"form-group\">
                            <label class=\"control-label\">Numero etudiant</label>

                            ";
        // line 54
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "numeroetudiant", array()), 'widget', array("attr" => array("class" => "form-control", "required" => "required")));
        echo "

                        </div>
                        <button class=\"btn btn-primary nextBtn btn-lg pull-right\" type=\"button\" >Suivant</button>
                    </div>
                </div>
            </div>
            <div class=\"row setup-content\" id=\"step-2\">
                <div class=\"col-xs-6 col-md-offset-3\">
                    <div class=\"col-md-12\">

                        <div class=\"form-group\">
                            <label class=\"control-label\">Email</label>
                            ";
        // line 67
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), 'widget', array("attr" => array("class" => "form-control", "required" => "required")));
        echo "


                        </div>

                        <div class=\"form-group\">
                            <label class=\"control-label\">Mot de passe</label>
                            ";
        // line 74
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "plainPassword", array()), "first", array()), 'widget', array("attr" => array("class" => "form-control", "required" => "required")));
        echo "


                        </div>

                        <div class=\"form-group\">

                            <label class=\"control-label\">Confirmation mot de passe</label>
                            ";
        // line 82
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "plainPassword", array()), "second", array()), 'widget', array("attr" => array("class" => "form-control", "required" => "required")));
        echo "



                        </div>

                        <div class=\"form-group\">
                            <label class=\"control-label\">Adresse</label>

                            ";
        // line 91
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "adresse", array()), 'widget', array("attr" => array("class" => "form-control", "required" => "required")));
        echo "

                        </div>


                        <div class=\"form-group\">
                            <label class=\"control-label\">Telephone</label>

                            ";
        // line 99
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "telephone", array()), 'widget', array("attr" => array("class" => "form-control", "required" => "required")));
        echo "

                        </div>
                        <button class=\"btn btn-primary nextBtn btn-lg pull-right\" type=\"button\" >Suivant</button>
                    </div>
                </div>
            </div>
            <div class=\"row setup-content\" id=\"step-3\">
                <div class=\"col-xs-6 col-md-offset-3\">
                    <div class=\"col-md-12\">
                        ";
        // line 110
        echo "
                        <div class=\"form-group\">
                            <label class=\"control-label\">Type de contrat</label>

                            ";
        // line 114
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "typecontrat", array()), 'widget', array("attr" => array("class" => "form-control", "required" => "required")));
        echo "

                        </div>


                        <div class=\"form-group\">
                            <label class=\"control-label\">Infos supplementaire du contrat</label>

                            ";
        // line 122
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "information_contrat", array()), 'widget', array("attr" => array("class" => "form-control", "required" => "required")));
        echo "

                        </div>


                        <div class=\"form-group\">
                            <label class=\"control-label\">Tuteur pedagogique</label>

                            ";
        // line 130
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "Tuteur", array()), 'widget', array("attr" => array("class" => "form-control", "required" => "required")));
        echo "

                        </div>

                        <div class=\"form-group\">
                            <label class=\"control-label\">Tuteur entreprise</label>
                            ";
        // line 136
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "TuteurEntreprise", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "

                        </div>
                        <button class=\"btn btn-success btn-lg pull-right\" type=\"submit\">Envoyer</button>
                    </div>
                </div>
            </div>




            ";
        // line 147
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "roles", array()), 'widget', array("attr" => array("style" => "display:none")));
        echo "
            ";
        // line 148
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "roles", array()), 'errors', array("attr" => array("style" => "display:none")));
        echo "


            ";
        // line 151
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "etat", array()), 'widget', array("attr" => array("style" => "display:none")));
        echo "
            ";
        // line 152
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "etat", array()), 'errors', array("attr" => array("style" => "display:none")));
        echo "




            ";
        // line 157
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "
        </form>

    </div>

";
    }

    public function getTemplateName()
    {
        return "GAlterUserBundle:Registration:user_one.form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  253 => 157,  245 => 152,  241 => 151,  235 => 148,  231 => 147,  217 => 136,  208 => 130,  197 => 122,  186 => 114,  180 => 110,  167 => 99,  156 => 91,  144 => 82,  133 => 74,  123 => 67,  107 => 54,  98 => 48,  92 => 44,  90 => 43,  84 => 39,  80 => 38,  73 => 33,  64 => 28,  40 => 6,  38 => 5,  35 => 4,  29 => 3,  11 => 1,);
    }
}
