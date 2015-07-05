<?php

/* GAlterUserBundle::layout.html.twig */
class __TwigTemplate_3f7a123a3c4a0c2461ecd45599ac2aaa154748e754d2308af5699edf1132f37f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascripts_head' => array($this, 'block_javascripts_head'),
            'titre' => array($this, 'block_titre'),
            'corps' => array($this, 'block_corps'),
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
        // line 11
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 82
        echo "    ";
        $this->displayBlock('javascripts_head', $context, $blocks);
        // line 159
        echo "


</head>


";
        // line 173
        echo "
";
        // line 183
        echo "
<body>


<div id=\"wrapper\">

<!-- Navigation -->
<nav class=\"navbar navbar-default navbar-static-top\" role=\"navigation\" style=\"margin-bottom: 0\">
<div class=\"navbar-header\">
    <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\".navbar-collapse\">
        <span class=\"sr-only\">Toggle navigation</span>
        <span class=\"icon-bar\"></span>
        <span class=\"icon-bar\"></span>
        <span class=\"icon-bar\"></span>
    </button>
    <a class=\"navbar-brand\" href=\"index.html\">SB Admin v2.0</a>
</div>
<!-- /.navbar-header -->


<ul class=\"nav navbar-top-links navbar-right\">
<li class=\"dropdown\">



    <a class=\"dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\">


        ";
        // line 211
        $context["var"] = $this->env->getExtension('fos_message')->getNbUnread();
        // line 212
        echo "
        ";
        // line 213
        if (((isset($context["var"]) ? $context["var"] : $this->getContext($context, "var")) == 0)) {
            // line 214
            echo "

        <i class=\"fa fa-envelope fa-fw\"></i>  <i class=\"fa fa-caret-down\"></i>

    </a>


        ";
        } else {
            // line 222
            echo "

            ";
            // line 225
            echo "

            <button class=\"btn btn-danger\" type=\"button\">
                Messages <span class=\"badge\">";
            // line 228
            echo twig_escape_filter($this->env, $this->env->getExtension('fos_message')->getNbUnread(), "html", null, true);
            echo "</span><i class=\"fa fa-caret-down\"></i>
            </button>
        ";
        }
        // line 231
        echo "




    <ul class=\"dropdown-menu dropdown-messages\">

        <li>
            <a href=\"";
        // line 239
        echo $this->env->getExtension('routing')->getUrl("fos_message_thread_new");
        echo "\">";
        echo $this->env->getExtension('translator')->getTranslator()->trans("send_new", array(), "FOSMessageBundle");
        echo "</a>
        </li>
        <li class=\"divider\"></li>
        <li>
            <a href=\"";
        // line 243
        echo $this->env->getExtension('routing')->getUrl("fos_message_inbox");
        echo "\">";
        echo $this->env->getExtension('translator')->getTranslator()->trans("inbox", array(), "FOSMessageBundle");
        echo "</a>
        </li>
        <li class=\"divider\"></li>
        <li>
            <a href=\"";
        // line 247
        echo $this->env->getExtension('routing')->getUrl("fos_message_sent");
        echo "\">";
        echo $this->env->getExtension('translator')->getTranslator()->trans("sent", array(), "FOSMessageBundle");
        echo "</a>


        </li>
        <li class=\"divider\"></li>
        <li>
            <a href=\"";
        // line 253
        echo $this->env->getExtension('routing')->getUrl("fos_message_deleted");
        echo "\">";
        echo $this->env->getExtension('translator')->getTranslator()->trans("deleted", array(), "FOSMessageBundle");
        echo "</a>
        </li>

    </ul>
    <!-- /.dropdown-messages -->
</li>
<!-- /.dropdown -->
<li class=\"dropdown\">
    <a class=\"dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\">
        <i class=\"fa fa-tasks fa-fw\"></i>  <i class=\"fa fa-caret-down\"></i>
    </a>
    <ul class=\"dropdown-menu dropdown-tasks\">
        <li>
            <a href=\"#\">
                <div>
                    <p>
                        <strong>Task 1</strong>
                        <span class=\"pull-right text-muted\">40% Complete</span>
                    </p>
                    <div class=\"progress progress-striped active\">
                        <div class=\"progress-bar progress-bar-success\" role=\"progressbar\" aria-valuenow=\"40\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: 40%\">
                            <span class=\"sr-only\">40% Complete (success)</span>
                        </div>
                    </div>
                </div>
            </a>
        </li>
        <li class=\"divider\"></li>
        <li>
            <a href=\"#\">
                <div>
                    <p>
                        <strong>Task 2</strong>
                        <span class=\"pull-right text-muted\">20% Complete</span>
                    </p>
                    <div class=\"progress progress-striped active\">
                        <div class=\"progress-bar progress-bar-info\" role=\"progressbar\" aria-valuenow=\"20\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: 20%\">
                            <span class=\"sr-only\">20% Complete</span>
                        </div>
                    </div>
                </div>
            </a>
        </li>
        <li class=\"divider\"></li>
        <li>
            <a href=\"#\">
                <div>
                    <p>
                        <strong>Task 3</strong>
                        <span class=\"pull-right text-muted\">60% Complete</span>
                    </p>
                    <div class=\"progress progress-striped active\">
                        <div class=\"progress-bar progress-bar-warning\" role=\"progressbar\" aria-valuenow=\"60\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: 60%\">
                            <span class=\"sr-only\">60% Complete (warning)</span>
                        </div>
                    </div>
                </div>
            </a>
        </li>
        <li class=\"divider\"></li>
        <li>
            <a href=\"#\">
                <div>
                    <p>
                        <strong>Task 4</strong>
                        <span class=\"pull-right text-muted\">80% Complete</span>
                    </p>
                    <div class=\"progress progress-striped active\">
                        <div class=\"progress-bar progress-bar-danger\" role=\"progressbar\" aria-valuenow=\"80\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: 80%\">
                            <span class=\"sr-only\">80% Complete (danger)</span>
                        </div>
                    </div>
                </div>
            </a>
        </li>
        <li class=\"divider\"></li>
        <li>
            <a class=\"text-center\" href=\"#\">
                <strong>See All Tasks</strong>
                <i class=\"fa fa-angle-right\"></i>
            </a>
        </li>
    </ul>
    <!-- /.dropdown-tasks -->
</li>
<!-- /.dropdown -->
<li class=\"dropdown\">
    <a class=\"dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\">
        <i class=\"fa fa-bell fa-fw\"></i>  <i class=\"fa fa-caret-down\"></i>
    </a>
    <ul class=\"dropdown-menu dropdown-alerts\">
        <li>
            <a href=\"#\">
                <div>
                    <i class=\"fa fa-comment fa-fw\"></i> New Comment
                    <span class=\"pull-right text-muted small\">4 minutes ago</span>
                </div>
            </a>
        </li>
        <li class=\"divider\"></li>
        <li>
            <a href=\"#\">
                <div>
                    <i class=\"fa fa-twitter fa-fw\"></i> 3 New Followers
                    <span class=\"pull-right text-muted small\">12 minutes ago</span>
                </div>
            </a>
        </li>
        <li class=\"divider\"></li>
        <li>
            <a href=\"#\">
                <div>
                    <i class=\"fa fa-envelope fa-fw\"></i> Message Sent
                    <span class=\"pull-right text-muted small\">4 minutes ago</span>
                </div>
            </a>
        </li>
        <li class=\"divider\"></li>
        <li>
            <a href=\"#\">
                <div>
                    <i class=\"fa fa-tasks fa-fw\"></i> New Task
                    <span class=\"pull-right text-muted small\">4 minutes ago</span>
                </div>
            </a>
        </li>
        <li class=\"divider\"></li>
        <li>
            <a href=\"#\">
                <div>
                    <i class=\"fa fa-upload fa-fw\"></i> Server Rebooted
                    <span class=\"pull-right text-muted small\">4 minutes ago</span>
                </div>
            </a>
        </li>
        <li class=\"divider\"></li>
        <li>
            <a class=\"text-center\" href=\"#\">
                <strong>See All Alerts</strong>
                <i class=\"fa fa-angle-right\"></i>
            </a>
        </li>
    </ul>
    <!-- /.dropdown-alerts -->
</li>
<!-- /.dropdown -->
<li class=\"dropdown\">
    <a class=\"dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\">
        <i class=\"fa fa-user fa-fw\"></i>  <i class=\"fa fa-caret-down\"></i>
    </a>
    <ul class=\"dropdown-menu dropdown-user\">
        <li><a href=\"#\"><i class=\"fa fa-user fa-fw\"></i> User Profile</a>
        </li>
        <li><a href=\"#\"><i class=\"fa fa-gear fa-fw\"></i> Settings</a>
        </li>
        <li class=\"divider\"></li>
        <li> <a href=\"";
        // line 409
        echo $this->env->getExtension('routing')->getPath("fos_user_security_logout");
        echo "\">  Deconnexion</a>
        </li>
    </ul>
    <!-- /.dropdown-user -->
</li>
<!-- /.dropdown -->
</ul>
<!-- /.navbar-top-links -->

<div class=\"navbar-default sidebar\" role=\"navigation\">
    <div class=\"sidebar-nav navbar-collapse\">
        <ul class=\"nav\" id=\"side-menu\">
            <li class=\"sidebar-search\">
                <div class=\"input-group custom-search-form\">
                    <input type=\"text\" class=\"form-control\" placeholder=\"Search...\">
                                <span class=\"input-group-btn\">
                                <button class=\"btn btn-default\" type=\"button\">
                                    <i class=\"fa fa-search\"></i>
                                </button>
                            </span>
                </div>
                <!-- /input-group -->
            </li>


            ";
        // line 434
        if ($this->env->getExtension('security')->isGranted("ROLE_ADMIN")) {
            // line 435
            echo "            <li>
                <a href=\"";
            // line 436
            echo $this->env->getExtension('routing')->getPath("etudiant");
            echo "\"><i class=\"fa fa-dashboard fa-fw\"></i> Gestion des étudiants</a>
            </li>

            <li>
                <a href=\"";
            // line 440
            echo $this->env->getExtension('routing')->getPath("user");
            echo "\"><i class=\"fa fa-table fa-fw\"></i> Gestion des responsables</a>
            </li>
            <li>
                <a href=\"";
            // line 443
            echo $this->env->getExtension('routing')->getPath("formation");
            echo "\"><i class=\"fa fa-edit fa-fw\"></i> Gestion des formations</a>
            </li>
            ";
        }
        // line 446
        echo "

            ";
        // line 448
        if ($this->env->getExtension('security')->isGranted("ROLE_RESPONSABLE")) {
            // line 449
            echo "                <li>
                    <a href=\"#\"><i class=\"fa fa-dashboard fa-fw\"></i> Menu responsable</a>
                </li>

                <li>
                    <a href=\"#\"><i class=\"fa fa-dashboard fa-fw\"></i> Menu responsable</a>                </li>
                <li>
                    <a href=\"#\"><i class=\"fa fa-dashboard fa-fw\"></i> Menu responsable</a>                </li>
            ";
        }
        // line 458
        echo "


            ";
        // line 461
        if ($this->env->getExtension('security')->isGranted("ROLE_TUTEUR")) {
            // line 462
            echo "                <li>
                    <a href=\"#\"><i class=\"fa fa-dashboard fa-fw\"></i> menu tuteur</a>
                </li>

                <li>
                    <a href=\"#\"><i class=\"fa fa-dashboard fa-fw\"></i> menu tuteur</a>
                </li>
                <li>
                    <a href=\"#\"><i class=\"fa fa-dashboard fa-fw\"></i> menu tuteur</a>
                </li>
            ";
        }
        // line 473
        echo "


            ";
        // line 476
        if ($this->env->getExtension('security')->isGranted("ROLE_ETUDIANT")) {
            // line 477
            echo "                <li>
                    <a href=\"#\"><i class=\"fa fa-dashboard fa-fw\"></i> menu etudiant</a>
                </li>

                <li>
                    <a href=\"#\"><i class=\"fa fa-dashboard fa-fw\"></i> menu etudiant</a>
                </li>
                <li>
                    <a href=\"#\"><i class=\"fa fa-dashboard fa-fw\"></i> menu etudiant</a>
                </li>
            ";
        }
        // line 488
        echo "
        </ul>
    </div>
    <!-- /.sidebar-collapse -->
</div>
<!-- /.navbar-static-side -->
</nav>


<div id=\"page-wrapper\">

<div class=\"row\">
    <div class=\"col-lg-12\">
       <div class=\"text-center\">  <h1 class=\"page-header\" >  ";
        // line 501
        $this->displayBlock('titre', $context, $blocks);
        echo "</h1> </div>
    </div>

    <!-- /.col-lg-12 -->
</div>
<!-- /.row -->
";
        // line 507
        $this->displayBlock('corps', $context, $blocks);
        // line 1022
        echo "
</body>

</html>
";
    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        echo "Mon site ";
    }

    // line 11
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 12
        echo "

        <style type=\"text/css\">
            /*body {*/
            /*margin-top:40px;*/
            /*}*/
            .stepwizard-step p {
                margin-top: 10px;
            }
            .stepwizard-row {
                display: table-row;
            }
            .stepwizard {
                display: table;
                width: 50%;
                position: relative;
            }
            .stepwizard-step button[disabled] {
                opacity: 1 !important;
                filter: alpha(opacity=100) !important;
            }
            .stepwizard-row:before {
                top: 14px;
                bottom: 0;
                position: absolute;
                content: \" \";
                width: 100%;
                height: 1px;
                background-color: #ccc;
                z-order: 0;
            }
            .stepwizard-step {
                display: table-cell;
                text-align: center;
                position: relative;
            }
            .btn-circle {
                width: 30px;
                height: 30px;
                text-align: center;
                padding: 6px 0;
                font-size: 12px;
                line-height: 1.428571429;
                border-radius: 15px;
            }
        </style>
        <link href=\"//netdna.bootstrapcdn.com/bootstrap/3.1.0/fonts/glyphicons-halflings-regular.eot\" rel=\"stylesheet\">
        <link href=\"//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.css\" rel=\"stylesheet\">
        <link href=\"http://netdna.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.css\" rel=\"stylesheet\">
        ";
        // line 62
        echo "
        <!-- Bootstrap Core CSS -->
        <link href=";
        // line 64
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("CSS/bootstrap.css"), "html", null, true);
        echo " rel=\"stylesheet\">

        <!-- MetisMenu CSS -->
        <link href= ";
        // line 67
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("CSS/metisMenu.min.css "), "html", null, true);
        echo " rel=\"stylesheet\">

        <!-- Timeline CSS -->
        <link href=";
        // line 70
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("CSS/timeline.css"), "html", null, true);
        echo "  rel=\"stylesheet\">

        <!-- Custom CSS -->
        <link href=";
        // line 73
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("CSS/sb-admin-2.css "), "html", null, true);
        echo " rel=\"stylesheet\">

        <!-- Morris Charts CSS -->
        <link href=";
        // line 76
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("CSS/morris.css"), "html", null, true);
        echo "  rel=\"stylesheet\">

        <!-- Custom Fonts -->
        ";
        // line 80
        echo "
    ";
    }

    // line 82
    public function block_javascripts_head($context, array $blocks = array())
    {
        // line 83
        echo "
        <script src=\"//code.jquery.com/jquery-1.10.2.min.js\"></script>
        <script src=\"//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js\"></script>
        <script type=\"text/javascript\">
            \$(document).ready(function () {
                var navListItems = \$('div.setup-panel div a'),
                        allWells = \$('.setup-content'),
                        allNextBtn = \$('.nextBtn');

                allWells.hide();

                navListItems.click(function (e) {
                    e.preventDefault();
                    var \$target = \$(\$(this).attr('href')),
                            \$item = \$(this);

                    if (!\$item.hasClass('disabled')) {
                        navListItems.removeClass('btn-primary').addClass('btn-default');
                        \$item.addClass('btn-primary');
                        allWells.hide();
                        \$target.show();
                        \$target.find('input:eq(0)').focus();
                    }
                });

                allNextBtn.click(function(){
                    var curStep = \$(this).closest(\".setup-content\"),
                            curStepBtn = curStep.attr(\"id\"),
                            nextStepWizard = \$('div.setup-panel div a[href=\"#' + curStepBtn + '\"]').parent().next().children(\"a\"),
                            curInputs = curStep.find(\"input[type='text'],input[type='email'],input[type='password'],input[type='telephone'],input[type='url']\"),
                            isValid = true;

                    \$(\".form-group\").removeClass(\"has-error\");
                    for(var i=0; i<curInputs.length; i++){
                        if (!curInputs[i].validity.valid){
                            isValid = false;
                            \$(curInputs[i]).closest(\".form-group\").addClass(\"has-error\");
                        }
                    }

                    if (isValid)
                        nextStepWizard.removeAttr('disabled').trigger('click');
                });

                \$('div.setup-panel div a.btn-primary').trigger('click');
            });
        </script>





        <!-- jQuery -->
        <script src=";
        // line 136
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("JS/jquery.min.js"), "html", null, true);
        echo "> </script>


        <script src=";
        // line 139
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("JS/jquery.steps.js"), "html", null, true);
        echo "> </script>
        <script src=";
        // line 140
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("lib/ckeditor/ckeditor.js"), "html", null, true);
        echo "> </script>
        <script src=";
        // line 141
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("JS/functions.js"), "html", null, true);
        echo "> </script>

        ";
        // line 144
        echo "        ";
        // line 145
        echo "
        <!-- Metis Menu Plugin JavaScript -->
        <script src=";
        // line 147
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("JS/metisMenu.min.js"), "html", null, true);
        echo " ></script>

        <!-- Morris Charts JavaScript -->
        <script src=";
        // line 150
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("JS/raphael-min.js"), "html", null, true);
        echo " ></script>
        <script src=";
        // line 151
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("JS/morris.min.js"), "html", null, true);
        echo " ></script>
        <script src=";
        // line 152
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("JS/morris-data.js"), "html", null, true);
        echo "  ></script>

        <!-- Custom Theme JavaScript -->
        <script src=";
        // line 155
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("JS/sb-admin-2.js"), "html", null, true);
        echo "></script>


    ";
    }

    // line 501
    public function block_titre($context, array $blocks = array())
    {
        echo "  ";
    }

    // line 507
    public function block_corps($context, array $blocks = array())
    {
        // line 508
        echo "<div class=\"row\">
    <div class=\"col-lg-3 col-md-6\">
        <div class=\"panel panel-primary\">
            <div class=\"panel-heading\">
                <div class=\"row\">
                    <div class=\"col-xs-3\">
                        <i class=\"fa fa-comments fa-5x\"></i>
                    </div>
                    <div class=\"col-xs-9 text-right\">
                        <div class=\"huge\">26</div>
                        <div>New Comments!</div>
                    </div>
                </div>
            </div>
            <a href=\"#\">
                <div class=\"panel-footer\">
                    <span class=\"pull-left\">View Details</span>
                    <span class=\"pull-right\"><i class=\"fa fa-arrow-circle-right\"></i></span>
                    <div class=\"clearfix\"></div>
                </div>
            </a>
        </div>
    </div>
    <div class=\"col-lg-3 col-md-6\">
        <div class=\"panel panel-green\">
            <div class=\"panel-heading\">
                <div class=\"row\">
                    <div class=\"col-xs-3\">
                        <i class=\"fa fa-tasks fa-5x\"></i>
                    </div>
                    <div class=\"col-xs-9 text-right\">
                        <div class=\"huge\">12</div>
                        <div>New Tasks!</div>
                    </div>
                </div>
            </div>
            <a href=\"#\">
                <div class=\"panel-footer\">
                    <span class=\"pull-left\">View Details</span>
                    <span class=\"pull-right\"><i class=\"fa fa-arrow-circle-right\"></i></span>
                    <div class=\"clearfix\"></div>
                </div>
            </a>
        </div>
    </div>
    <div class=\"col-lg-3 col-md-6\">
        <div class=\"panel panel-yellow\">
            <div class=\"panel-heading\">
                <div class=\"row\">
                    <div class=\"col-xs-3\">
                        <i class=\"fa fa-shopping-cart fa-5x\"></i>
                    </div>
                    <div class=\"col-xs-9 text-right\">
                        <div class=\"huge\">124</div>
                        <div>New Orders!</div>
                    </div>
                </div>
            </div>
            <a href=\"#\">
                <div class=\"panel-footer\">
                    <span class=\"pull-left\">View Details</span>
                    <span class=\"pull-right\"><i class=\"fa fa-arrow-circle-right\"></i></span>
                    <div class=\"clearfix\"></div>
                </div>
            </a>
        </div>
    </div>
    <div class=\"col-lg-3 col-md-6\">
        <div class=\"panel panel-red\">
            <div class=\"panel-heading\">
                <div class=\"row\">
                    <div class=\"col-xs-3\">
                        <i class=\"fa fa-support fa-5x\"></i>
                    </div>
                    <div class=\"col-xs-9 text-right\">
                        <div class=\"huge\">13</div>
                        <div>Support Tickets!</div>
                    </div>
                </div>
            </div>
            <a href=\"#\">
                <div class=\"panel-footer\">
                    <span class=\"pull-left\">View Details</span>
                    <span class=\"pull-right\"><i class=\"fa fa-arrow-circle-right\"></i></span>
                    <div class=\"clearfix\"></div>
                </div>
            </a>
        </div>
    </div>
</div>
<!-- /.row -->
<div class=\"row\">
<div class=\"col-lg-8\">
";
        // line 602
        echo "    ";
        // line 603
        echo "        ";
        // line 604
        echo "        ";
        // line 605
        echo "            ";
        // line 606
        echo "                ";
        // line 607
        echo "                    ";
        // line 608
        echo "                    ";
        // line 609
        echo "                ";
        // line 610
        echo "                ";
        // line 611
        echo "                    ";
        // line 612
        echo "                    ";
        // line 613
        echo "                    ";
        // line 614
        echo "                    ";
        // line 615
        echo "                    ";
        // line 616
        echo "                    ";
        // line 617
        echo "                    ";
        // line 618
        echo "                    ";
        // line 619
        echo "                    ";
        // line 620
        echo "                ";
        // line 621
        echo "            ";
        // line 622
        echo "        ";
        // line 623
        echo "    ";
        // line 624
        echo "    ";
        // line 625
        echo "    ";
        // line 626
        echo "
        ";
        // line 628
        echo "    ";
        // line 629
        echo "    ";
        // line 631
        echo "<!-- /.panel -->
<div class=\"panel panel-default\">
    <div class=\"panel-heading\">
        <i class=\"fa fa-bar-chart-o fa-fw\"></i> Bar Chart Example
        <div class=\"pull-right\">
            <div class=\"btn-group\">
                <button type=\"button\" class=\"btn btn-default btn-xs dropdown-toggle\" data-toggle=\"dropdown\">
                    Actions
                    <span class=\"caret\"></span>
                </button>
                <ul class=\"dropdown-menu pull-right\" role=\"menu\">
                    <li><a href=\"#\">Action</a>
                    </li>
                    <li><a href=\"#\">Another action</a>
                    </li>
                    <li><a href=\"#\">Something else here</a>
                    </li>
                    <li class=\"divider\"></li>
                    <li><a href=\"#\">Separated link</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <!-- /.panel-heading -->
    <div class=\"panel-body\">
        <div class=\"row\">
            <div class=\"col-lg-4\">
                <div class=\"table-responsive\">
                    <table class=\"table table-bordered table-hover table-striped\">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>Date</th>
                            <th>Time</th>
                            <th>Amount</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>3326</td>
                            <td>10/21/2013</td>
                            <td>3:29 PM</td>
                            <td>\$321.33</td>
                        </tr>
                        <tr>
                            <td>3325</td>
                            <td>10/21/2013</td>
                            <td>3:20 PM</td>
                            <td>\$234.34</td>
                        </tr>
                        <tr>
                            <td>3324</td>
                            <td>10/21/2013</td>
                            <td>3:03 PM</td>
                            <td>\$724.17</td>
                        </tr>
                        <tr>
                            <td>3323</td>
                            <td>10/21/2013</td>
                            <td>3:00 PM</td>
                            <td>\$23.71</td>
                        </tr>
                        <tr>
                            <td>3322</td>
                            <td>10/21/2013</td>
                            <td>2:49 PM</td>
                            <td>\$8345.23</td>
                        </tr>
                        <tr>
                            <td>3321</td>
                            <td>10/21/2013</td>
                            <td>2:23 PM</td>
                            <td>\$245.12</td>
                        </tr>
                        <tr>
                            <td>3320</td>
                            <td>10/21/2013</td>
                            <td>2:15 PM</td>
                            <td>\$5663.54</td>
                        </tr>
                        <tr>
                            <td>3319</td>
                            <td>10/21/2013</td>
                            <td>2:13 PM</td>
                            <td>\$943.45</td>
                        </tr>
                        </tbody>
                    </table>
                </div>
                <!-- /.table-responsive -->
            </div>
            <!-- /.col-lg-4 (nested) -->
            <div class=\"col-lg-8\">

                ";
        // line 727
        echo "                mon test
            </div>
            <!-- /.col-lg-8 (nested) -->
        </div>
        <!-- /.row -->
    </div>
    <!-- /.panel-body -->
</div>
<!-- /.panel -->
<div class=\"panel panel-default\">
    <div class=\"panel-heading\">
        <i class=\"fa fa-clock-o fa-fw\"></i> Responsive Timeline
    </div>
    <!-- /.panel-heading -->
    <div class=\"panel-body\">
        <ul class=\"timeline\">
            <li>
                <div class=\"timeline-badge\"><i class=\"fa fa-check\"></i>
                </div>
                <div class=\"timeline-panel\">
                    <div class=\"timeline-heading\">
                        <h4 class=\"timeline-title\">Lorem ipsum dolor</h4>
                        <p><small class=\"text-muted\"><i class=\"fa fa-clock-o\"></i> 11 hours ago via Twitter</small>
                        </p>
                    </div>
                    <div class=\"timeline-body\">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Libero laboriosam dolor perspiciatis omnis exercitationem. Beatae, officia pariatur? Est cum veniam excepturi. Maiores praesentium, porro voluptas suscipit facere rem dicta, debitis.</p>
                    </div>
                </div>
            </li>
            <li class=\"timeline-inverted\">
                <div class=\"timeline-badge warning\"><i class=\"fa fa-credit-card\"></i>
                </div>
                <div class=\"timeline-panel\">
                    <div class=\"timeline-heading\">
                        <h4 class=\"timeline-title\">Lorem ipsum dolor</h4>
                    </div>
                    <div class=\"timeline-body\">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem dolorem quibusdam, tenetur commodi provident cumque magni voluptatem libero, quis rerum. Fugiat esse debitis optio, tempore. Animi officiis alias, officia repellendus.</p>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laudantium maiores odit qui est tempora eos, nostrum provident explicabo dignissimos debitis vel! Adipisci eius voluptates, ad aut recusandae minus eaque facere.</p>
                    </div>
                </div>
            </li>
            <li>
                <div class=\"timeline-badge danger\"><i class=\"fa fa-bomb\"></i>
                </div>
                <div class=\"timeline-panel\">
                    <div class=\"timeline-heading\">
                        <h4 class=\"timeline-title\">Lorem ipsum dolor</h4>
                    </div>
                    <div class=\"timeline-body\">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellendus numquam facilis enim eaque, tenetur nam id qui vel velit similique nihil iure molestias aliquam, voluptatem totam quaerat, magni commodi quisquam.</p>
                    </div>
                </div>
            </li>
            <li class=\"timeline-inverted\">
                <div class=\"timeline-panel\">
                    <div class=\"timeline-heading\">
                        <h4 class=\"timeline-title\">Lorem ipsum dolor</h4>
                    </div>
                    <div class=\"timeline-body\">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptates est quaerat asperiores sapiente, eligendi, nihil. Itaque quos, alias sapiente rerum quas odit! Aperiam officiis quidem delectus libero, omnis ut debitis!</p>
                    </div>
                </div>
            </li>
            <li>
                <div class=\"timeline-badge info\"><i class=\"fa fa-save\"></i>
                </div>
                <div class=\"timeline-panel\">
                    <div class=\"timeline-heading\">
                        <h4 class=\"timeline-title\">Lorem ipsum dolor</h4>
                    </div>
                    <div class=\"timeline-body\">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nobis minus modi quam ipsum alias at est molestiae excepturi delectus nesciunt, quibusdam debitis amet, beatae consequuntur impedit nulla qui! Laborum, atque.</p>
                        <hr>
                        <div class=\"btn-group\">
                            <button type=\"button\" class=\"btn btn-primary btn-sm dropdown-toggle\" data-toggle=\"dropdown\">
                                <i class=\"fa fa-gear\"></i>  <span class=\"caret\"></span>
                            </button>
                            <ul class=\"dropdown-menu\" role=\"menu\">
                                <li><a href=\"#\">Action</a>
                                </li>
                                <li><a href=\"#\">Another action</a>
                                </li>
                                <li><a href=\"#\">Something else here</a>
                                </li>
                                <li class=\"divider\"></li>
                                <li><a href=\"#\">Separated link</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </li>
            <li>
                <div class=\"timeline-panel\">
                    <div class=\"timeline-heading\">
                        <h4 class=\"timeline-title\">Lorem ipsum dolor</h4>
                    </div>
                    <div class=\"timeline-body\">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sequi fuga odio quibusdam. Iure expedita, incidunt unde quis nam! Quod, quisquam. Officia quam qui adipisci quas consequuntur nostrum sequi. Consequuntur, commodi.</p>
                    </div>
                </div>
            </li>
            <li class=\"timeline-inverted\">
                <div class=\"timeline-badge success\"><i class=\"fa fa-graduation-cap\"></i>
                </div>
                <div class=\"timeline-panel\">
                    <div class=\"timeline-heading\">
                        <h4 class=\"timeline-title\">Lorem ipsum dolor</h4>
                    </div>
                    <div class=\"timeline-body\">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deserunt obcaecati, quaerat tempore officia voluptas debitis consectetur culpa amet, accusamus dolorum fugiat, animi dicta aperiam, enim incidunt quisquam maxime neque eaque.</p>
                    </div>
                </div>
            </li>
        </ul>
    </div>
    <!-- /.panel-body -->
</div>
<!-- /.panel -->
</div>
<!-- /.col-lg-8 -->
<div class=\"col-lg-4\">
    <div class=\"panel panel-default\">
        <div class=\"panel-heading\">
            <i class=\"fa fa-bell fa-fw\"></i> Notifications Panel
        </div>
        <!-- /.panel-heading -->
        <div class=\"panel-body\">
            <div class=\"list-group\">
                <a href=\"#\" class=\"list-group-item\">
                    <i class=\"fa fa-comment fa-fw\"></i> New Comment
                                    <span class=\"pull-right text-muted small\"><em>4 minutes ago</em>
                                    </span>
                </a>
                <a href=\"#\" class=\"list-group-item\">
                    <i class=\"fa fa-twitter fa-fw\"></i> 3 New Followers
                                    <span class=\"pull-right text-muted small\"><em>12 minutes ago</em>
                                    </span>
                </a>
                <a href=\"#\" class=\"list-group-item\">
                    <i class=\"fa fa-envelope fa-fw\"></i> Message Sent
                                    <span class=\"pull-right text-muted small\"><em>27 minutes ago</em>
                                    </span>
                </a>
                <a href=\"#\" class=\"list-group-item\">
                    <i class=\"fa fa-tasks fa-fw\"></i> New Task
                                    <span class=\"pull-right text-muted small\"><em>43 minutes ago</em>
                                    </span>
                </a>
                <a href=\"#\" class=\"list-group-item\">
                    <i class=\"fa fa-upload fa-fw\"></i> Server Rebooted
                                    <span class=\"pull-right text-muted small\"><em>11:32 AM</em>
                                    </span>
                </a>
                <a href=\"#\" class=\"list-group-item\">
                    <i class=\"fa fa-bolt fa-fw\"></i> Server Crashed!
                                    <span class=\"pull-right text-muted small\"><em>11:13 AM</em>
                                    </span>
                </a>
                <a href=\"#\" class=\"list-group-item\">
                    <i class=\"fa fa-warning fa-fw\"></i> Server Not Responding
                                    <span class=\"pull-right text-muted small\"><em>10:57 AM</em>
                                    </span>
                </a>
                <a href=\"#\" class=\"list-group-item\">
                    <i class=\"fa fa-shopping-cart fa-fw\"></i> New Order Placed
                                    <span class=\"pull-right text-muted small\"><em>9:49 AM</em>
                                    </span>
                </a>
                <a href=\"#\" class=\"list-group-item\">
                    <i class=\"fa fa-money fa-fw\"></i> Payment Received
                                    <span class=\"pull-right text-muted small\"><em>Yesterday</em>
                                    </span>
                </a>
            </div>
            <!-- /.list-group -->
            <a href=\"#\" class=\"btn btn-default btn-block\">View All Alerts</a>
        </div>
        <!-- /.panel-body -->
    </div>
    <!-- /.panel -->
    <div class=\"panel panel-default\">
        <div class=\"panel-heading\">
            <i class=\"fa fa-bar-chart-o fa-fw\"></i> Donut Chart Example
        </div>
        <div class=\"panel-body\">
            <div id=\"morris-donut-chart\"></div>
            <a href=\"#\" class=\"btn btn-default btn-block\">View Details</a>
        </div>
        <!-- /.panel-body -->
    </div>
    <!-- /.panel -->
    <div class=\"chat-panel panel panel-default\">
        <div class=\"panel-heading\">
            <i class=\"fa fa-comments fa-fw\"></i>
            Chat
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
            <ul class=\"chat\">
                <li class=\"left clearfix\">
                                    <span class=\"chat-img pull-left\">
                                        <img src=\"http://placehold.it/50/55C1E7/fff\" alt=\"User Avatar\" class=\"img-circle\" />
                                    </span>
                    <div class=\"chat-body clearfix\">
                        <div class=\"header\">
                            <strong class=\"primary-font\">Jack Sparrow</strong>
                            <small class=\"pull-right text-muted\">
                                <i class=\"fa fa-clock-o fa-fw\"></i> 12 mins ago
                            </small>
                        </div>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur bibendum ornare dolor, quis ullamcorper ligula sodales.
                        </p>
                    </div>
                </li>
                <li class=\"right clearfix\">
                                    <span class=\"chat-img pull-right\">
                                        <img src=\"http://placehold.it/50/FA6F57/fff\" alt=\"User Avatar\" class=\"img-circle\" />
                                    </span>
                    <div class=\"chat-body clearfix\">
                        <div class=\"header\">
                            <small class=\" text-muted\">
                                <i class=\"fa fa-clock-o fa-fw\"></i> 13 mins ago</small>
                            <strong class=\"pull-right primary-font\">Bhaumik Patel</strong>
                        </div>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur bibendum ornare dolor, quis ullamcorper ligula sodales.
                        </p>
                    </div>
                </li>

            </ul>
        </div>
        <!-- /.panel-body -->
        <div class=\"panel-footer\">
            <div class=\"input-group\">
                <input id=\"btn-input\" type=\"text\" class=\"form-control input-sm\" placeholder=\"Type your message here...\" />
                                <span class=\"input-group-btn\">
                                    <button class=\"btn btn-warning btn-sm\" id=\"btn-chat\">
                                        Send
                                    </button>
                                </span>
            </div>
        </div>
        <!-- /.panel-footer -->
    </div>
    <!-- /.panel .chat-panel -->
</div>
<!-- /.col-lg-4 -->
</div>
<!-- /.row -->
</div>
<!-- /#page-wrapper -->

</div>
<!-- /#wrapper -->

<!-- jQuery -->
";
    }

    public function getTemplateName()
    {
        return "GAlterUserBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  926 => 727,  829 => 631,  827 => 629,  825 => 628,  822 => 626,  820 => 625,  818 => 624,  816 => 623,  814 => 622,  812 => 621,  810 => 620,  808 => 619,  806 => 618,  804 => 617,  802 => 616,  800 => 615,  798 => 614,  796 => 613,  794 => 612,  792 => 611,  790 => 610,  788 => 609,  786 => 608,  784 => 607,  782 => 606,  780 => 605,  778 => 604,  776 => 603,  774 => 602,  679 => 508,  676 => 507,  670 => 501,  662 => 155,  656 => 152,  652 => 151,  648 => 150,  642 => 147,  638 => 145,  636 => 144,  631 => 141,  627 => 140,  623 => 139,  617 => 136,  562 => 83,  559 => 82,  554 => 80,  548 => 76,  542 => 73,  536 => 70,  530 => 67,  524 => 64,  520 => 62,  469 => 12,  466 => 11,  460 => 4,  452 => 1022,  450 => 507,  441 => 501,  426 => 488,  413 => 477,  411 => 476,  406 => 473,  393 => 462,  391 => 461,  386 => 458,  375 => 449,  373 => 448,  369 => 446,  363 => 443,  357 => 440,  350 => 436,  347 => 435,  345 => 434,  317 => 409,  156 => 253,  145 => 247,  136 => 243,  127 => 239,  117 => 231,  111 => 228,  106 => 225,  102 => 222,  92 => 214,  90 => 213,  87 => 212,  85 => 211,  55 => 183,  52 => 173,  44 => 159,  41 => 82,  39 => 11,  29 => 4,  24 => 1,);
    }
}
