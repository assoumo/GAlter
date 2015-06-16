<?php

/* GAlterUserBundle::layout.html.twig */
class __TwigTemplate_7c4b51762ac345a9e7579b823a805e695ea4104e7e40bfd78db177b374aa8e62 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascripts_head' => array($this, 'block_javascripts_head'),
            'content' => array($this, 'block_content'),
            'corp' => array($this, 'block_corp'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
    <title>";
        // line 4
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <!-- Bootstrap -->

    ";
        // line 8
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 27
        echo "    ";
        $this->displayBlock('javascripts_head', $context, $blocks);
        // line 46
        echo "


</head>


";
        // line 60
        echo "
";
        // line 70
        echo "
<body>
";
        // line 73
        echo "
";
        // line 74
        $this->displayBlock('content', $context, $blocks);
        // line 226
        echo "


            <hr />

            ";
        // line 231
        $this->displayBlock('corp', $context, $blocks);
        // line 233
        echo "        </div>
    </div>
</div>

</body>


</html>";
    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        echo "Mon site ";
    }

    // line 8
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 9
        echo "        <link href=\"//netdna.bootstrapcdn.com/bootstrap/3.1.0/fonts/glyphicons-halflings-regular.eot\" rel=\"stylesheet\">
        <link href=\"//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.css\" rel=\"stylesheet\">
        <link href=\"http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css\" rel=\"stylesheet\">

        ";
        // line 14
        echo "        ";
        // line 15
        echo "        <link href=";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("CSS/bootstrap.css"), "html", null, true);
        echo " rel=\"stylesheet\" />
        <link href=";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("CSS/style.css"), "html", null, true);
        echo " rel=\"stylesheet\" />
        <!-- FONTAWESOME STYLES-->
        <link href=";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("CSS/font-awesome.css"), "html", null, true);
        echo " rel=\"stylesheet\" />

        <!-- MORRIS CHART STYLES-->
        <link href=";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("JS/morris/morris-0.4.3.min.css"), "html", null, true);
        echo " rel=\"stylesheet\" />
        <!-- CUSTOM STYLES-->
        <link href=";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("CSS/custom.css"), "html", null, true);
        echo " rel=\"stylesheet\" />
        <!-- GOOGLE FONTS-->
        <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
    ";
    }

    // line 27
    public function block_javascripts_head($context, array $blocks = array())
    {
        // line 28
        echo "
        <script src=\"http://code.jquery.com/jquery-2.1.0.min.js\"></script>

        <script type=\"text/javascript\" src=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/galteruser/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>

        <script src=";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("JS/jquery-1.10.2.js"), "html", null, true);
        echo "></script>
        <!-- BOOTSTRAP SCRIPTS -->
        <script src=";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("JS/bootstrap.min.js"), "html", null, true);
        echo "></script>
        <!-- METISMENU SCRIPTS -->
        <script src=";
        // line 37
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("JS/jquery.metisMenu.js"), "html", null, true);
        echo "></script>
        <!-- MORRIS CHART SCRIPTS -->
        <script src=";
        // line 39
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("JS/morris/raphael-2.1.0.min.js"), "html", null, true);
        echo "></script>
        <script src=";
        // line 40
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("JS/morris/morris.js"), "html", null, true);
        echo "></script>
        <script src=";
        // line 41
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("JS/functions.js"), "html", null, true);
        echo "></script>
        <!-- CUSTOM SCRIPTS -->
        <script src=";
        // line 43
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("JS/custom.js"), "html", null, true);
        echo "></script>
        <script src=";
        // line 44
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("lib/ckeditor/ckeditor.js"), "html", null, true);
        echo "></script>
    ";
    }

    // line 74
    public function block_content($context, array $blocks = array())
    {
        // line 77
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
        // line 92
        echo $this->env->getExtension('routing')->getPath("fos_user_security_logout");
        echo "\" class=\"btn btn-danger square-btn-adjust\">
                ";
        // line 93
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
        // line 101
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("JS/find_user.png"), "html", null, true);
        echo " class=\"user-image img-responsive\"/>
                </li>

                <!-- Le menu a gauche  -->
                <li>
                    <a class=\"active-menu\"  href=\"";
        // line 106
        echo $this->env->getExtension('routing')->getPath("rapport_create");
        echo "\"><i class=\"fa fa-dashboard fa-3x\"></i> Rediger un rapport</a>
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
        // line 171
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
            ";
    }

    // line 231
    public function block_corp($context, array $blocks = array())
    {
        // line 232
        echo "            ";
    }

    public function getTemplateName()
    {
        return "GAlterUserBundle::layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  350 => 232,  347 => 231,  289 => 171,  221 => 106,  213 => 101,  202 => 93,  198 => 92,  181 => 77,  178 => 74,  172 => 44,  168 => 43,  163 => 41,  159 => 40,  155 => 39,  150 => 37,  145 => 35,  140 => 33,  135 => 31,  130 => 28,  127 => 27,  119 => 23,  114 => 21,  108 => 18,  103 => 16,  98 => 15,  96 => 14,  90 => 9,  87 => 8,  81 => 4,  70 => 233,  68 => 231,  61 => 226,  59 => 74,  56 => 73,  52 => 70,  49 => 60,  41 => 46,  38 => 27,  36 => 8,  29 => 4,  24 => 1,);
    }
}
