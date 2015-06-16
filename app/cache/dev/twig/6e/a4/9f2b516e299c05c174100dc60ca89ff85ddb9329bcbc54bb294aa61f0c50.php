<?php

/* GAlterGestionBundle::show_content.html.twig */
class __TwigTemplate_6ea49f2b516e299c05c174100dc60ca89ff85ddb9329bcbc54bb294aa61f0c50 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("GAlterUserBundle::layout.html.twig", "GAlterGestionBundle::show_content.html.twig", 1);
        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascripts_head' => array($this, 'block_javascripts_head'),
            'content' => array($this, 'block_content'),
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

    // line 4
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 5
        echo "    <link href=";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("CSS/bootstrap.css"), "html", null, true);
        echo " rel=\"stylesheet\" />
    <!-- FONTAWESOME STYLES-->
    <link href=";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("CSS/font-awesome.css"), "html", null, true);
        echo " rel=\"stylesheet\" />

    <!-- MORRIS CHART STYLES-->
    <link href=";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("JS/morris/morris-0.4.3.min.css"), "html", null, true);
        echo " rel=\"stylesheet\" />
    <!-- CUSTOM STYLES-->
    <link href=";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("CSS/custom.css"), "html", null, true);
        echo " rel=\"stylesheet\" />
    <!-- GOOGLE FONTS-->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
";
    }

    // line 17
    public function block_javascripts_head($context, array $blocks = array())
    {
        // line 18
        echo "    <script src=";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("JS/jquery-1.10.2.js"), "html", null, true);
        echo "></script>
    <!-- BOOTSTRAP SCRIPTS -->
    <script src=";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("JS/bootstrap.min.js"), "html", null, true);
        echo "></script>
    <!-- METISMENU SCRIPTS -->
    <script src=";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("JS/jquery.metisMenu.js"), "html", null, true);
        echo "></script>
    <!-- MORRIS CHART SCRIPTS -->
    <script src=";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("JS/morris/raphael-2.1.0.min.js"), "html", null, true);
        echo "></script>
    <script src=";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("JS/morris/morris.js"), "html", null, true);
        echo "></script>
    <!-- CUSTOM SCRIPTS -->
    <script src=";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("JS/custom.js"), "html", null, true);
        echo "></script>
";
    }

    // line 32
    public function block_content($context, array $blocks = array())
    {
        // line 33
        echo "    ";
        // line 34
        echo "    ";
        // line 35
        echo "
    <div id=\"wrapper\">
    <nav class=\"navbar navbar-default navbar-cls-top \" role=\"navigation\" style=\"margin-bottom: 0\">
        <div class=\"navbar-header\">
            <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\".sidebar-collapse\">
                <span class=\"sr-only\">Toggle navigation</span>
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
            </button>
            <a class=\"navbar-brand\" href=\"index.html\">Binary admin</a>
        </div>
        <div style=\"color: white;
padding: 15px 50px 5px 50px;
float: right;
font-size: 16px;\"> <a href=\"";
        // line 50
        echo $this->env->getExtension('routing')->getPath("fos_user_security_logout");
        echo "\" class=\"btn btn-danger square-btn-adjust\">
            ";
        // line 51
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("layout.logout", array(), "FOSUserBundle"), "html", null, true);
        echo "
                <span class=\"glyphicon glyphicon-off\" aria-hidden=\"true\"></span> </a> </div>
    </nav>
    <!-- /. NAV TOP  -->
    <nav class=\"navbar-default navbar-side\" role=\"navigation\">
        <div class=\"sidebar-collapse\">
            <ul class=\"nav\" id=\"main-menu\">
                <li class=\"text-center\">
                    <img src=";
        // line 59
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("JS/find_user.png"), "html", null, true);
        echo " class=\"user-image img-responsive\"/>
                </li>

                <!-- Le menu a gauche  -->
                <li>
                    <a class=\"active-menu\"  href=\"index.html\"><i class=\"fa fa-dashboard fa-3x\"></i> Rediger un rapport</a>
                </li>
                <li>
                    <a  href=\"#\"><i class=\"fa fa-desktop fa-3x\"></i>Planifier une reunion</a>
                </li>
                <li>
                    <a  href=\"tab-panel.html\"><i class=\"fa fa-qrcode fa-3x\"></i>Mes projets </a>
                </li>
                <li  >
                    <a   href=\"chart.html\"><i class=\"fa fa-bar-chart-o fa-3x\"></i> Mon profil</a>
                </li>
                <li  >
                    <a  href=\"table.html\"><i class=\"fa fa-table fa-3x\"></i> Table Examples</a>
                </li>
                <li  >
                    <a  href=\"form.html\"><i class=\"fa fa-edit fa-3x\"></i> Forms </a>
                </li>
                <li  >
                    <a   href=\"login.html\"><i class=\"fa fa-bolt fa-3x\"></i> Login</a>
                </li>
                <li  >
                    <a   href=\"registeration.html\"><i class=\"fa fa-laptop fa-3x\"></i> Registeration</a>
                </li>

                <li>
                    <a href=\"#\"><i class=\"fa fa-sitemap fa-3x\"></i> Multi-Level Dropdown<span class=\"fa arrow\"></span></a>
                    <ul class=\"nav nav-second-level\">
                        <li>
                            <a href=\"#\">Second Level Link</a>
                        </li>
                        <li>
                            <a href=\"#\">Second Level Link</a>
                        </li>
                        <li>
                            <a href=\"#\">Second Level Link<span class=\"fa arrow\"></span></a>
                            <ul class=\"nav nav-third-level\">
                                <li>
                                    <a href=\"#\">Third Level Link</a>
                                </li>
                                <li>
                                    <a href=\"#\">Third Level Link</a>
                                </li>
                                <li>
                                    <a href=\"#\">Third Level Link</a>
                                </li>

                            </ul>

                        </li>
                    </ul>
                </li>
                <li  >
                    <a  href=\"blank.html\"><i class=\"fa fa-square-o fa-3x\"></i> Blank Page</a>
                </li>
            </ul>

        </div>

    </nav>
    <!-- /. NAV SIDE  -->
    <div id=\"page-wrapper\" >
    <div id=\"page-inner\">
    <div class=\"row\">
        <div class=\"col-md-12\">
            <h2>Admin Tableau de bord</h2>
            <h5>Bonjour : ";
        // line 129
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "html", null, true);
        echo "</h5>
        </div>
    </div>
    <!-- /. ROW  -->
    <hr />
    <div class=\"row\">
        <div class=\"col-md-3 col-sm-6 col-xs-6\">
            <div class=\"panel panel-back noti-box\">
                <span class=\"icon-box bg-color-red set-icon\">
                    <i class=\"fa fa-envelope-o\"></i>
                </span>
                <div class=\"text-box\" >
                    <p class=\"main-text\">120 New</p>
                    <p class=\"text-muted\">Messages</p>
                </div>
            </div>
        </div>
        <div class=\"col-md-3 col-sm-6 col-xs-6\">
            <div class=\"panel panel-back noti-box\">
                <span class=\"icon-box bg-color-green set-icon\">
                    <i class=\"fa fa-bars\"></i>
                </span>
                <div class=\"text-box\" >
                    <p class=\"main-text\">30 Tasks</p>
                    <p class=\"text-muted\">Remaining</p>
                </div>
            </div>
        </div>
        <div class=\"col-md-3 col-sm-6 col-xs-6\">
            <div class=\"panel panel-back noti-box\">
                <span class=\"icon-box bg-color-blue set-icon\">
                    <i class=\"fa fa-bell-o\"></i>
                </span>
                <div class=\"text-box\" >
                    <p class=\"main-text\">240 New</p>
                    <p class=\"text-muted\">Notifications</p>
                </div>
            </div>
        </div>
        <div class=\"col-md-3 col-sm-6 col-xs-6\">
            <div class=\"panel panel-back noti-box\">
                <span class=\"icon-box bg-color-brown set-icon\">
                    <i class=\"fa fa-rocket\"></i>
                </span>
                <div class=\"text-box\" >
                    <p class=\"main-text\">3 Orders</p>
                    <p class=\"text-muted\">Pending</p>
                </div>
            </div>
        </div>
    </div>
    <!-- /. ROW  -->
    <hr />    
";
    }

    // line 183
    public function block_corp($context, array $blocks = array())
    {
        // line 184
        echo "
";
    }

    public function getTemplateName()
    {
        return "GAlterGestionBundle::show_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  266 => 184,  263 => 183,  205 => 129,  132 => 59,  121 => 51,  117 => 50,  100 => 35,  98 => 34,  96 => 33,  93 => 32,  87 => 27,  82 => 25,  78 => 24,  73 => 22,  68 => 20,  62 => 18,  59 => 17,  51 => 12,  46 => 10,  40 => 7,  34 => 5,  31 => 4,  11 => 1,);
    }
}
