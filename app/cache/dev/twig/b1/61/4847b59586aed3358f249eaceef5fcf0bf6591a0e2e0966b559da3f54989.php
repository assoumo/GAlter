<?php

/* FOSUserBundle:Profile:show_content.html.twig */
class __TwigTemplate_b1614847b59586aed3358f249eaceef5fcf0bf6591a0e2e0966b559da3f54989 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("GAlterUserBundle::layout.html.twig", "FOSUserBundle:Profile:show_content.html.twig", 1);
        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascripts_head' => array($this, 'block_javascripts_head'),
            'content' => array($this, 'block_content'),
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


                <li>
                    <a class=\"active-menu\"  href=\"index.html\"><i class=\"fa fa-dashboard fa-3x\"></i> Dashboard</a>
                </li>
                <li>
                    <a  href=\"ui.html\"><i class=\"fa fa-desktop fa-3x\"></i> UI Elements</a>
                </li>
                <li>
                    <a  href=\"tab-panel.html\"><i class=\"fa fa-qrcode fa-3x\"></i> Tabs & Panels</a>
                </li>
                <li  >
                    <a   href=\"chart.html\"><i class=\"fa fa-bar-chart-o fa-3x\"></i> Morris Charts</a>
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
    <div class=\"row\">
        <div class=\"col-md-6 col-sm-12 col-xs-12\">
            <div class=\"panel panel-back noti-box\">
                <span class=\"icon-box bg-color-blue\">
                    <i class=\"fa fa-warning\"></i>
                </span>
                <div class=\"text-box\" >
                    <p class=\"main-text\">52 Important Issues to Fix </p>
                    <p class=\"text-muted\">Please fix these issues to work smooth</p>
                    <p class=\"text-muted\">Time Left: 30 mins</p>
                    <hr />
                    <p class=\"text-muted\">
                          <span class=\"text-muted color-bottom-txt\"><i class=\"fa fa-edit\"></i>
                               Lorem ipsum dolor sit amet, consectetur adipiscing elit gthn.
                              Lorem ipsum dolor sit amet, consectetur adipiscing elit gthn.
                               </span>
                    </p>
                </div>
            </div>
        </div>


        <div class=\"col-md-3 col-sm-12 col-xs-12\">
            <div class=\"panel back-dash\">
                <i class=\"fa fa-dashboard fa-3x\"></i><strong> &nbsp; SPEED</strong>
                <p class=\"text-muted\">Lorem ipsum dolor sit amet, consectetur adipiscing sit ametsit amet elit ftr. Lorem ipsum dolor sit amet, consectetur adipiscing elit. </p>
            </div>

        </div>
        <div class=\"col-md-3 col-sm-12 col-xs-12 \">
            <div class=\"panel \">
                <div class=\"main-temp-back\">
                    <div class=\"panel-body\">
                        <div class=\"row\">
                            <div class=\"col-xs-6\"> <i class=\"fa fa-cloud fa-3x\"></i> Newyork City </div>
                            <div class=\"col-xs-6\">
                                <div class=\"text-temp\"> 10° </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <div class=\"panel panel-back noti-box\">
                <span class=\"icon-box bg-color-green set-icon\">
                    <i class=\"fa fa-desktop\"></i>
                </span>
                <div class=\"text-box\" >
                    <p class=\"main-text\">Display</p>
                    <p class=\"text-muted\">Looking Good</p>
                </div>
            </div>

        </div>

    </div>
    <!-- /. ROW  -->
    <div class=\"row\">


        <div class=\"col-md-9 col-sm-12 col-xs-12\">
            <div class=\"panel panel-default\">
                <div class=\"panel-heading\">
                    Bar Chart Example
                </div>
                <div class=\"panel-body\">
                    <div id=\"morris-bar-chart\"></div>
                </div>
            </div>
        </div>
        <div class=\"col-md-3 col-sm-12 col-xs-12\">
            <div class=\"panel panel-primary text-center no-boder bg-color-green\">
                <div class=\"panel-body\">
                    <i class=\"fa fa-bar-chart-o fa-5x\"></i>
                    <h3>120 GB </h3>
                </div>
                <div class=\"panel-footer back-footer-green\">
                    Disk Space Available

                </div>
            </div>
            <div class=\"panel panel-primary text-center no-boder bg-color-red\">
                <div class=\"panel-body\">
                    <i class=\"fa fa-edit fa-5x\"></i>
                    <h3>20,000 </h3>
                </div>
                <div class=\"panel-footer back-footer-red\">
                    Articles Pending

                </div>
            </div>
        </div>

    </div>
    <!-- /. ROW  -->
    <div class=\"row\" >
        <div class=\"col-md-3 col-sm-12 col-xs-12\">
            <div class=\"panel panel-primary text-center no-boder bg-color-green\">
                <div class=\"panel-body\">
                    <i class=\"fa fa-comments-o fa-5x\"></i>
                    <h4>200 New Comments </h4>
                    <h4>See All Comments  </h4>
                </div>
                <div class=\"panel-footer back-footer-green\">
                    <i class=\"fa fa-rocket fa-5x\"></i>
                    Lorem ipsum dolor sit amet sit sit, consectetur adipiscing elitsit sit gthn ipsum dolor sit amet ipsum dolor sit amet

                </div>
            </div>
        </div>
        <div class=\"col-md-9 col-sm-12 col-xs-12\">

            <div class=\"panel panel-default\">
                <div class=\"panel-heading\">
                    Responsive Table Example
                </div>
                <div class=\"panel-body\">
                    <div class=\"table-responsive\">
                        <table class=\"table table-striped table-bordered table-hover\">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>First Name</th>
                                <th>Last Name</th>
                                <th>Username</th>
                                <th>User No.</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>1</td>
                                <td>Mark</td>
                                <td>Otto</td>
                                <td>@mdo</td>
                                <td>100090</td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>Jacob</td>
                                <td>Thornton</td>
                                <td>@fat</td>
                                <td>100090</td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>Larry</td>
                                <td>the Bird</td>
                                <td>@twitter</td>
                                <td>100090</td>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td>Mark</td>
                                <td>Otto</td>
                                <td>@mdo</td>
                                <td>100090</td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>Jacob</td>
                                <td>Thornton</td>
                                <td>@fat</td>
                                <td>100090</td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>Larry</td>
                                <td>the Bird</td>
                                <td>@twitter</td>
                                <td>100090</td>
                            </tr>

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <!-- /. ROW  -->
    <div class=\"row\">
        <div class=\"col-md-6 col-sm-12 col-xs-12\">

            <div class=\"chat-panel panel panel-default chat-boder chat-panel-head\" >
                <div class=\"panel-heading\">
                    <i class=\"fa fa-comments fa-fw\"></i>
                    Chat Box
                    <div class=\"btn-group pull-right\">
                        <button type=\"button\" class=\"btn btn-default btn-xs dropdown-toggle\" data-toggle=\"dropdown\">
                            <i class=\"fa fa-chevron-down\"></i>
                        </button>
                        <ul class=\"dropdown-menu slidedown\">
                            <li>
                                <a href=\"#\">
                                    <i class=\"fa fa-refresh fa-fw\"></i>Refresh
                                </a>
                            </li>
                            <li>
                                <a href=\"#\">
                                    <i class=\"fa fa-check-circle fa-fw\"></i>Available
                                </a>
                            </li>
                            <li>
                                <a href=\"#\">
                                    <i class=\"fa fa-times fa-fw\"></i>Busy
                                </a>
                            </li>
                            <li>
                                <a href=\"#\">
                                    <i class=\"fa fa-clock-o fa-fw\"></i>Away
                                </a>
                            </li>
                            <li class=\"divider\"></li>
                            <li>
                                <a href=\"#\">
                                    <i class=\"fa fa-sign-out fa-fw\"></i>Sign Out
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class=\"panel-body\">
                    <ul class=\"chat-box\">
                        <li class=\"left clearfix\">
                                    <span class=\"chat-img pull-left\">
                                        <img src= ";
        // line 409
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("JS/1.png"), "html", null, true);
        echo "  alt=\"User\" class=\"img-circle\" />
                                    </span>
                            <div class=\"chat-body\">
                                <strong >Jack Sparrow</strong>
                                <small class=\"pull-right text-muted\">
                                    <i class=\"fa fa-clock-o fa-fw\"></i>12 mins ago
                                </small>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur bibendum ornare dolor, quis ullamcorper ligula sodales.
                                </p>
                            </div>
                        </li>
                        <li class=\"right clearfix\">
                                    <span class=\"chat-img pull-right\">

                                        <img src=";
        // line 424
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("JS/2.png"), "html", null, true);
        echo "  alt=\"User\" class=\"img-circle\" />
                                    </span>
                            <div class=\"chat-body clearfix\">

                                <small class=\" text-muted\">
                                    <i class=\"fa fa-clock-o fa-fw\"></i>13 mins ago</small>
                                <strong class=\"pull-right\">Jhonson Deed</strong>

                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur bibendum ornare dolor, quis ullamcorper ligula sodales.
                                </p>
                            </div>
                        </li>
                        <li class=\"left clearfix\">
                                    <span class=\"chat-img pull-left\">
                                         <img src=";
        // line 439
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("JS/3.png"), "html", null, true);
        echo "  alt=\"User\" class=\"img-circle\" />
                                    </span>
                            <div class=\"chat-body clearfix\">

                                <strong >Jack Sparrow</strong>
                                <small class=\"pull-right text-muted\">
                                    <i class=\"fa fa-clock-o fa-fw\"></i>14 mins ago</small>

                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur bibendum ornare dolor, quis ullamcorper ligula sodales.
                                </p>
                            </div>
                        </li>
                        <li class=\"right clearfix\">
                                    <span class=\"chat-img pull-right\">
                                         <img src=";
        // line 454
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("JS/4.png"), "html", null, true);
        echo " alt=\"User\" class=\"img-circle\" />
                                    </span>
                            <div class=\"chat-body clearfix\">

                                <small class=\" text-muted\">
                                    <i class=\"fa fa-clock-o fa-fw\"></i>15 mins ago</small>
                                <strong class=\"pull-right\">Jhonson Deed</strong>

                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur bibendum ornare dolor, quis ullamcorper ligula sodales.
                                </p>
                            </div>
                        </li>
                        <li class=\"left clearfix\">
                                    <span class=\"chat-img pull-left\">
                                        <img src=";
        // line 469
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("JS/1.png"), "html", null, true);
        echo "  alt=\"User\" class=\"img-circle\" />
                                    </span>
                            <div class=\"chat-body\">
                                <strong >Jack Sparrow</strong>
                                <small class=\"pull-right text-muted\">
                                    <i class=\"fa fa-clock-o fa-fw\"></i>12 mins ago
                                </small>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur bibendum ornare dolor, quis ullamcorper ligula sodales.
                                </p>
                            </div>
                        </li>
                        <li class=\"right clearfix\">
                                    <span class=\"chat-img pull-right\">
                                       <img src= ";
        // line 483
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("JS/2.png"), "html", null, true);
        echo "  alt=\"User\" class=\"img-circle\" />
                                    </span>
                            <div class=\"chat-body clearfix\">

                                <small class=\" text-muted\">
                                    <i class=\"fa fa-clock-o fa-fw\"></i>13 mins ago</small>
                                <strong class=\"pull-right\">Jhonson Deed</strong>

                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur bibendum ornare dolor, quis ullamcorper ligula sodales.
                                </p>
                            </div>
                        </li>
                    </ul>
                </div>

                <div class=\"panel-footer\">
                    <div class=\"input-group\">
                        <input id=\"btn-input\" type=\"text\" class=\"form-control input-sm\" placeholder=\"Type your message to send...\" />
                                <span class=\"input-group-btn\">
                                    <button class=\"btn btn-warning btn-sm\" id=\"btn-chat\">
                                        Send
                                    </button>
                                </span>
                    </div>
                </div>

            </div>

        </div>
        <div class=\"col-md-6 col-sm-12 col-xs-12\">
            <div class=\"panel panel-default\">
                <div class=\"panel-heading\">
                    Label Examples
                </div>
                <div class=\"panel-body\">
                    <span class=\"label label-default\">Default</span>
                    <span class=\"label label-primary\">Primary</span>
                    <span class=\"label label-success\">Success</span>
                    <span class=\"label label-info\">Info</span>
                    <span class=\"label label-warning\">Warning</span>
                    <span class=\"label label-danger\">Danger</span>
                </div>
            </div>

            <div class=\"panel panel-default\">
                <div class=\"panel-heading\">
                    Donut Chart Example
                </div>
                <div class=\"panel-body\">
                    <div id=\"morris-donut-chart\"></div>
                </div>
            </div>

        </div>
    </div>
    <!-- /. ROW  -->
    </div>
    <!-- /. PAGE INNER  -->
    </div>
    <!-- /. PAGE WRAPPER  -->
    </div>

";
    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:show_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  576 => 483,  559 => 469,  541 => 454,  523 => 439,  505 => 424,  487 => 409,  204 => 129,  131 => 59,  120 => 51,  116 => 50,  99 => 35,  97 => 34,  95 => 33,  92 => 32,  86 => 27,  81 => 25,  77 => 24,  72 => 22,  67 => 20,  61 => 18,  58 => 17,  50 => 12,  45 => 10,  39 => 7,  33 => 5,  30 => 4,  11 => 1,);
    }
}
