<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* base_back.html.twig */
class __TwigTemplate_d5b2a504fa6c056f8b768625a70b270d2d74a94f770197b307788efefc1c04a5 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'header' => [$this, 'block_header'],
            'mainsidebar' => [$this, 'block_mainsidebar'],
            'content_event' => [$this, 'block_content_event'],
            'content_admin' => [$this, 'block_content_admin'],
            'footer' => [$this, 'block_footer'],
            'sidebar' => [$this, 'block_sidebar'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base_back.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base_back.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <title>";
        // line 6
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    ";
        // line 7
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 42
        echo "</head>

<body class=\"hold-transition skin-blue sidebar-mini\">

<div class=\"wrapper\">
    ";
        // line 47
        $this->displayBlock('header', $context, $blocks);
        // line 313
        echo "    <!-- Left side column. contains the logo and sidebar -->
    ";
        // line 314
        $this->displayBlock('mainsidebar', $context, $blocks);
        // line 460
        echo "

    <div class=\"content-wrapper\">
        <section>
            ";
        // line 464
        $this->displayBlock('content_event', $context, $blocks);
        // line 467
        echo "        </section>
        ";
        // line 468
        $this->displayBlock('content_admin', $context, $blocks);
        // line 471
        echo "    </div>

    ";
        // line 473
        $this->displayBlock('footer', $context, $blocks);
        // line 482
        echo "    ";
        $this->displayBlock('sidebar', $context, $blocks);
        // line 677
        echo "</div>
";
        // line 678
        $this->displayBlock('javascripts', $context, $blocks);
        // line 719
        echo "</body>
</html>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 6
    public function block_title($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Word Friendship | Dashboard";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 7
    public function block_stylesheets($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 8
        echo "        <!-- Tell the browser to be responsive to screen width -->
        <meta content=\"width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no\" name=\"viewport\">
        <!-- Bootstrap 3.3.7 -->
        <link rel=\"stylesheet\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Back/bower_components/bootstrap/dist/css/bootstrap.min.css"), "html", null, true);
        echo "\">
        <!-- Font Awesome -->
        <link rel=\"stylesheet\" href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Back/bower_components/font-awesome/css/font-awesome.min.css"), "html", null, true);
        echo "\">
        <!-- Ionicons -->
        <link rel=\"stylesheet\" href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Back/bower_components/Ionicons/css/ionicons.min.css"), "html", null, true);
        echo "\">
        <!-- Theme style -->
        <link rel=\"stylesheet\" href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Back/dist/css/AdminLTE.min.css"), "html", null, true);
        echo "\">
        <!-- AdminLTE Skins. Choose a skin from the css/skins
             folder instead of downloading all of them to reduce the load. -->
        <link rel=\"stylesheet\" href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Back/dist/css/skins/_all-skins.min.css"), "html", null, true);
        echo "\">
        <!-- Morris chart -->
        <link rel=\"stylesheet\" href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Back/bower_components/morris.js/morris.css"), "html", null, true);
        echo "\">
        <!-- jvectormap -->
        <link rel=\"stylesheet\" href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Back/bower_components/jvectormap/jquery-jvectormap.css"), "html", null, true);
        echo "\">
        <!-- Date Picker -->
        <link rel=\"stylesheet\" href=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Back/bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css"), "html", null, true);
        echo "\">
        <!-- Daterange picker -->
        <link rel=\"stylesheet\" href=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Back/bower_components/bootstrap-daterangepicker/daterangepicker.css"), "html", null, true);
        echo "\">
        <!-- bootstrap wysihtml5 - text editor -->
        <link rel=\"stylesheet\" href=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Back/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css"), "html", null, true);
        echo "\">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src=\"https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js\"></script>
        <script src=\"https://oss.maxcdn.com/respond/1.4.2/respond.min.js\"></script>
        <![endif]-->

        <!-- Google Font -->
        <link rel=\"stylesheet\" href=\"https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic\">
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 47
    public function block_header($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header"));

        // line 48
        echo "        <header class=\"main-header\">
            <!-- Logo -->
            <a href=\"\" class=\"logo\">
                <!-- mini logo for sidebar mini 50x50 pixels -->
                <span class=\"logo-mini\"><b>A</b>LT</span>
                <!-- logo for regular state and mobile devices -->
                <span class=\"logo-lg\"><b>Admin</b>LTE</span>
            </a>
            <!-- Header Navbar: style can be found in header.less -->
            <nav class=\"navbar navbar-static-top\">
                <!-- Sidebar toggle button-->
                <a href=\"#\" class=\"sidebar-toggle\" data-toggle=\"push-menu\" role=\"button\">
                    <span class=\"sr-only\">Toggle navigation</span>
                </a>

                <div class=\"navbar-custom-menu\">
                    <ul class=\"nav navbar-nav\">
                        <!-- Messages: style can be found in dropdown.less-->
                        <li class=\"dropdown messages-menu\">
                            <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">
                                <i class=\"fa fa-envelope-o\"></i>
                                <span class=\"label label-success\">4</span>
                            </a>
                            <ul class=\"dropdown-menu\">
                                <li class=\"header\">You have 4 messages</li>
                                <li>
                                    <!-- inner menu: contains the actual data -->
                                    <ul class=\"menu\">
                                        <li><!-- start message -->
                                            <a href=\"#\">
                                                <div class=\"pull-left\">
                                                    <img src=\"";
        // line 79
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Back/dist/img/user2-160x160.jpg"), "html", null, true);
        echo "\" class=\"img-circle\" alt=\"User Image\">
                                                </div>
                                                <h4>
                                                    Support Team
                                                    <small><i class=\"fa fa-clock-o\"></i> 5 mins</small>
                                                </h4>
                                                <p>Why not buy a new awesome theme?</p>
                                            </a>
                                        </li>
                                        <!-- end message -->
                                        <li>
                                            <a href=\"#\">
                                                <div class=\"pull-left\">
                                                    <img src=\"";
        // line 92
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Back/dist/img/user3-128x128.jpg"), "html", null, true);
        echo "\" class=\"img-circle\" alt=\"User Image\">
                                                </div>
                                                <h4>
                                                    AdminLTE Design Team
                                                    <small><i class=\"fa fa-clock-o\"></i> 2 hours</small>
                                                </h4>
                                                <p>Why not buy a new awesome theme?</p>
                                            </a>
                                        </li>
                                        <li>
                                            <a href=\"#\">
                                                <div class=\"pull-left\">
                                                    <img src=\"";
        // line 104
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Back/dist/img/user4-128x128.jpg"), "html", null, true);
        echo "\" class=\"img-circle\" alt=\"User Image\">
                                                </div>
                                                <h4>
                                                    Developers
                                                    <small><i class=\"fa fa-clock-o\"></i> Today</small>
                                                </h4>
                                                <p>Why not buy a new awesome theme?</p>
                                            </a>
                                        </li>
                                        <li>
                                            <a href=\"#\">
                                                <div class=\"pull-left\">
                                                    <img src=\"";
        // line 116
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Back/dist/img/user3-128x128.jpg"), "html", null, true);
        echo "\" class=\"img-circle\" alt=\"User Image\">
                                                </div>
                                                <h4>
                                                    Sales Department
                                                    <small><i class=\"fa fa-clock-o\"></i> Yesterday</small>
                                                </h4>
                                                <p>Why not buy a new awesome theme?</p>
                                            </a>
                                        </li>
                                        <li>
                                            <a href=\"#\">
                                                <div class=\"pull-left\">
                                                    <img src=\"";
        // line 128
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Back/dist/img/user4-128x128.jpg"), "html", null, true);
        echo "\" class=\"img-circle\" alt=\"User Image\">
                                                </div>
                                                <h4>
                                                    Reviewers
                                                    <small><i class=\"fa fa-clock-o\"></i> 2 days</small>
                                                </h4>
                                                <p>Why not buy a new awesome theme?</p>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class=\"footer\"><a href=\"#\">See All Messages</a></li>
                            </ul>
                        </li>
                        <!-- Notifications: style can be found in dropdown.less -->
                        <li class=\"dropdown notifications-menu\">
                            <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">
                                <i class=\"fa fa-bell-o\"></i>
                                <span class=\"label label-warning\">10</span>
                            </a>
                            <ul class=\"dropdown-menu\">
                                <li class=\"header\">You have 10 notifications</li>
                                <li>
                                    <!-- inner menu: contains the actual data -->
                                    <ul class=\"menu\">
                                        <li>
                                            <a href=\"#\">
                                                <i class=\"fa fa-users text-aqua\"></i> 5 new members joined today
                                            </a>
                                        </li>
                                        <li>
                                            <a href=\"#\">
                                                <i class=\"fa fa-warning text-yellow\"></i> Very long description here that may not fit into the
                                                page and may cause design problems
                                            </a>
                                        </li>
                                        <li>
                                            <a href=\"#\">
                                                <i class=\"fa fa-users text-red\"></i> 5 new members joined
                                            </a>
                                        </li>
                                        <li>
                                            <a href=\"#\">
                                                <i class=\"fa fa-shopping-cart text-green\"></i> 25 sales made
                                            </a>
                                        </li>
                                        <li>
                                            <a href=\"#\">
                                                <i class=\"fa fa-user text-red\"></i> You changed your username
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class=\"footer\"><a href=\"#\">View all</a></li>
                            </ul>
                        </li>
                        <!-- Tasks: style can be found in dropdown.less -->
                        <li class=\"dropdown tasks-menu\">
                            <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">
                                <i class=\"fa fa-flag-o\"></i>
                                <span class=\"label label-danger\">9</span>
                            </a>
                            <ul class=\"dropdown-menu\">
                                <li class=\"header\">You have 9 tasks</li>
                                <li>
                                    <!-- inner menu: contains the actual data -->
                                    <ul class=\"menu\">
                                        <li><!-- Task item -->
                                            <a href=\"#\">
                                                <h3>
                                                    Design some buttons
                                                    <small class=\"pull-right\">20%</small>
                                                </h3>
                                                <div class=\"progress xs\">
                                                    <div class=\"progress-bar progress-bar-aqua\" style=\"width: 20%\" role=\"progressbar\"
                                                         aria-valuenow=\"20\" aria-valuemin=\"0\" aria-valuemax=\"100\">
                                                        <span class=\"sr-only\">20% Complete</span>
                                                    </div>
                                                </div>
                                            </a>
                                        </li>
                                        <!-- end task item -->
                                        <li><!-- Task item -->
                                            <a href=\"#\">
                                                <h3>
                                                    Create a nice theme
                                                    <small class=\"pull-right\">40%</small>
                                                </h3>
                                                <div class=\"progress xs\">
                                                    <div class=\"progress-bar progress-bar-green\" style=\"width: 40%\" role=\"progressbar\"
                                                         aria-valuenow=\"20\" aria-valuemin=\"0\" aria-valuemax=\"100\">
                                                        <span class=\"sr-only\">40% Complete</span>
                                                    </div>
                                                </div>
                                            </a>
                                        </li>
                                        <!-- end task item -->
                                        <li><!-- Task item -->
                                            <a href=\"#\">
                                                <h3>
                                                    Some task I need to do
                                                    <small class=\"pull-right\">60%</small>
                                                </h3>
                                                <div class=\"progress xs\">
                                                    <div class=\"progress-bar progress-bar-red\" style=\"width: 60%\" role=\"progressbar\"
                                                         aria-valuenow=\"20\" aria-valuemin=\"0\" aria-valuemax=\"100\">
                                                        <span class=\"sr-only\">60% Complete</span>
                                                    </div>
                                                </div>
                                            </a>
                                        </li>
                                        <!-- end task item -->
                                        <li><!-- Task item -->
                                            <a href=\"#\">
                                                <h3>
                                                    Make beautiful transitions
                                                    <small class=\"pull-right\">80%</small>
                                                </h3>
                                                <div class=\"progress xs\">
                                                    <div class=\"progress-bar progress-bar-yellow\" style=\"width: 80%\" role=\"progressbar\"
                                                         aria-valuenow=\"20\" aria-valuemin=\"0\" aria-valuemax=\"100\">
                                                        <span class=\"sr-only\">80% Complete</span>
                                                    </div>
                                                </div>
                                            </a>
                                        </li>
                                        <!-- end task item -->
                                    </ul>
                                </li>
                                <li class=\"footer\">
                                    <a href=\"#\">View all tasks</a>
                                </li>
                            </ul>
                        </li>
                        <!-- User Account: style can be found in dropdown.less -->
                        <li class=\"dropdown user user-menu\">
                            <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">
                                <img src=\"";
        // line 265
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Back/dist/img/user2-160x160.jpg"), "html", null, true);
        echo "\" class=\"user-image\" alt=\"User Image\">
                                <span class=\"hidden-xs\">Alexander Pierce</span>
                            </a>
                            <ul class=\"dropdown-menu\">
                                <!-- User image -->
                                <li class=\"user-header\">
                                    <img src=\"";
        // line 271
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Back/dist/img/user2-160x160.jpg"), "html", null, true);
        echo "\" class=\"img-circle\" alt=\"User Image\">

                                    <p>
                                        Alexander Pierce - Web Developer
                                        <small>Member since Nov. 2012</small>
                                    </p>
                                </li>
                                <!-- Menu Body -->
                                <li class=\"user-body\">
                                    <div class=\"row\">
                                        <div class=\"col-xs-4 text-center\">
                                            <a href=\"#\">Followers</a>
                                        </div>
                                        <div class=\"col-xs-4 text-center\">
                                            <a href=\"#\">Sales</a>
                                        </div>
                                        <div class=\"col-xs-4 text-center\">
                                            <a href=\"#\">Friends</a>
                                        </div>
                                    </div>
                                    <!-- /.row -->
                                </li>
                                <!-- Menu Footer-->
                                <li class=\"user-footer\">
                                    <div class=\"pull-left\">
                                        <a href=\"#\" class=\"btn btn-default btn-flat\">Profile</a>
                                    </div>
                                    <div class=\"pull-right\">
                                        <a href=\"";
        // line 299
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_logout");
        echo "\" class=\"btn btn-default btn-flat\">Sign out</a>
                                    </div>
                                </li>
                            </ul>
                        </li>
                        <!-- Control Sidebar Toggle Button -->
                        <li>
                            <a href=\"#\" data-toggle=\"control-sidebar\"><i class=\"fa fa-gears\"></i></a>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 314
    public function block_mainsidebar($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "mainsidebar"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "mainsidebar"));

        // line 315
        echo "        <aside class=\"main-sidebar\">
            <!-- sidebar: style can be found in sidebar.less -->
            <section class=\"sidebar\">
                <!-- Sidebar user panel -->
                <div class=\"user-panel\">
                    <div class=\"pull-left image\">
                        <img src=\"";
        // line 321
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Back/dist/img/user2-160x160.jpg"), "html", null, true);
        echo "\" class=\"img-circle\" alt=\"User Image\">
                    </div>
                    <div class=\"pull-left info\">
                        <p>Alexander Pierce</p>
                        <a href=\"#\"><i class=\"fa fa-circle text-success\"></i> Online</a>
                    </div>
                </div>
                <!-- search form -->
                <form action=\"#\" method=\"get\" class=\"sidebar-form\">
                    <div class=\"input-group\">
                        <input type=\"text\" name=\"q\" class=\"form-control\" placeholder=\"Search...\">
                        <span class=\"input-group-btn\">
                <button type=\"submit\" name=\"search\" id=\"search-btn\" class=\"btn btn-flat\"><i class=\"fa fa-search\"></i>
                </button>
              </span>
                    </div>
                </form>
                <!-- /.search form -->
                <!-- sidebar menu: : style can be found in sidebar.less -->
                <ul class=\"sidebar-menu\" data-widget=\"tree\">
                    <li class=\"header\">MAIN NAVIGATION</li>
                    <li class=\"treeview\">
                        <a href=\"#\">
                            <i class=\"fa fa-files-o\"></i>
                            <span>Gestion d'utilisateurs</span>
                            <span class=\"pull-right-container\">
              <span class=\"label label-primary pull-right\">4</span>
            </span>
                        </a>
                        <ul class=\"treeview-menu\">
                            <li><a href=\"/chick_click/web/app_dev.php/\"><i class=\"fa fa-circle-o\"></i> Administrateurs</a></li>
                            <li><a href=\"";
        // line 352
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Back/pages/layout/boxed.html"), "html", null, true);
        echo "\"><i class=\"fa fa-circle-o\"></i> Administrateurs de groupes</a></li>
                            <li><a href=\"";
        // line 353
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Back/pages/layout/fixed.html"), "html", null, true);
        echo "\"><i class=\"fa fa-circle-o\"></i> Utilisateurs</a></li>

                        </ul>
                    </li>
                    <li class=\"treeview\">
                        <a href=\"#\"><i class=\"fa fa-files-o\"></i><span>Gestion Publication</span>
                            <span class=\"pull-right-container\"></span></a>
                        <ul class=\"treeview-menu\">
                            <li><a href=\"";
        // line 361
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Back/pages/layout/top-nav.html"), "html", null, true);
        echo "\"><i class=\"fa fa-circle-o\"></i> Liste de produits</a></li>
                            <li class=\"treeview\">
                                <a href=\"#\"><i class=\"fa fa-circle-o\"></i><span>Listes des achats</span>
                                    <span class=\"pull-right-container\"></span></a>
                                <ul class=\"treeview-menu\">
                                    <li><a href=\"\"><i class=\"fa fa-circle-o\"></i> Liste des Commandes</a>

                                    <li><a href=\"\"><i class=\"fa fa-circle-o\"></i> Liste des Adresses</a></li>
                                    <li><a href=\"\"><i class=\"fa fa-circle-o\"></i> Statistiques</a></li>


                                </ul>

                            </li>


                        </ul>
                    </li>
                    <li class=\"treeview\">
                        <a href=\"#\">
                            <i class=\"fa fa-files-o\"></i>
                            <span>Forum Management</span>
                            <span class=\"pull-right-container\">
              <span class=\"label label-primary pull-right\">4</span>
            </span>
                        </a>
                        <ul class=\"treeview-menu\">
                            <li><a href=\"/chck_click/web/app_dev.php/forum/recherche\"><i class=\"fa fa-circle-o\"></i> View Subject</a></li>
                            <li><a href=\"#\"><i class=\"fa fa-circle-o\"></i> Add Subject</a></li>
                            <li><a href=\"#\"><i class=\"fa fa-circle-o\"></i> Add Category</a></li>
                            <li><a href=\"#\"><i class=\"fa fa-circle-o\"></i> Forum Statistics</a></li>


                        </ul>
                    </li>
                    <li class=\"treeview\">
                        <a href=\"#\">
                            <i class=\"fa fa-files-o\"></i>
                            <span>Gestion de Forum</span>
                            <span class=\"pull-right-container\">
              <span class=\"label label-primary pull-right\">4</span>
            </span>
                        </a>
                        <ul class=\"treeview-menu\">
                            <li><a href=\"";
        // line 405
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Back/pages/layout/top-nav.html"), "html", null, true);
        echo "\"><i class=\"fa fa-circle-o\"></i> ####</a></li>
                            <li><a href=\"";
        // line 406
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Back/pages/layout/boxed.html"), "html", null, true);
        echo "\"><i class=\"fa fa-circle-o\"></i> ####</a></li>


                        </ul>
                    </li>
                    <li class=\"treeview\">
                        <a href=\"#\">
                            <i class=\"fa fa-files-o\"></i>
                            <span>Reclamations Management</span>
                            <span class=\"pull-right-container\">
              <span class=\"label label-primary pull-right\">4</span>
            </span>
                        </a>
                        <ul class=\"treeview-menu\">
                            <li><a href=\"/chick_clck/web/app_dev.php/ticket/showTicketAdmin\"><i class=\"fa fa-circle-o\"></i> Inbox Reclamations</a></li>
                            <li><a href=\"#\"><i class=\"fa fa-circle-o\"></i> Categories of reclamations</a></li>
                            <li><a href=\"#\"><i class=\"fa fa-circle-o\"></i> Send an answer</a></li>


                        </ul>
                    </li>
                    <li class=\"treeview\">
                        <a href=\"#\">
                            <i class=\"fa fa-files-o\"></i>
                            <span>Events Manager</span>
                            <span class=\"pull-right-container\">
              <span class=\"label label-primary pull-right\">4</span>
            </span>
                        </a>
                        <ul class=\"treeview-menu\">
                            <li><a href=\"";
        // line 436
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("showA_ticket");
        echo "\"><i class=\"fa fa-circle-o\"></i> Inbox reclamations</a></li>
                            <li><a href=\"";
        // line 437
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("showA_reportissue");
        echo "\"><i class=\"fa fa-circle-o\"></i> Categories of reclamations</a></li>
                            <li><a href=\"";
        // line 438
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("SendMail");
        echo "\"><i class=\"fa fa-circle-o\"></i> Send an answer </a></li>


                        </ul>
                    </li>








                    <li class=\"header\">LABELS</li>
                    <li><a href=\"#\"><i class=\"fa fa-circle-o text-red\"></i> <span>Important</span></a></li>
                    <li><a href=\"#\"><i class=\"fa fa-circle-o text-yellow\"></i> <span>Warning</span></a></li>
                    <li><a href=\"#\"><i class=\"fa fa-circle-o text-aqua\"></i> <span>Information</span></a></li>
                </ul>
            </section>
            <!-- /.sidebar -->
        </aside>
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 464
    public function block_content_event($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content_event"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content_event"));

        // line 465
        echo "
            ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 468
    public function block_content_admin($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content_admin"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content_admin"));

        // line 469
        echo "
        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 473
    public function block_footer($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        // line 474
        echo "        <footer class=\"main-footer\">
            <div class=\"pull-right hidden-xs\">
                <b>Version</b> 2.4.0
            </div>
            <strong>Copyright &copy; 2014-2016 <a href=\"https://adminlte.io\">Almsaeed Studio</a>.</strong> All rights
            reserved.
        </footer>
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 482
    public function block_sidebar($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "sidebar"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "sidebar"));

        // line 483
        echo "        <!-- Control Sidebar -->
        <aside class=\"control-sidebar control-sidebar-dark\">
            <!-- Create the tabs -->
            <ul class=\"nav nav-tabs nav-justified control-sidebar-tabs\">
                <li><a href=\"#control-sidebar-home-tab\" data-toggle=\"tab\"><i class=\"fa fa-home\"></i></a></li>
                <li><a href=\"#control-sidebar-settings-tab\" data-toggle=\"tab\"><i class=\"fa fa-gears\"></i></a></li>
            </ul>
            <!-- Tab panes -->
            <div class=\"tab-content\">
                <!-- Home tab content -->
                <div class=\"tab-pane\" id=\"control-sidebar-home-tab\">
                    <h3 class=\"control-sidebar-heading\">Recent Activity</h3>
                    <ul class=\"control-sidebar-menu\">
                        <li>
                            <a href=\"javascript:void(0)\">
                                <i class=\"menu-icon fa fa-birthday-cake bg-red\"></i>

                                <div class=\"menu-info\">
                                    <h4 class=\"control-sidebar-subheading\">Langdon's Birthday</h4>

                                    <p>Will be 23 on April 24th</p>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href=\"javascript:void(0)\">
                                <i class=\"menu-icon fa fa-user bg-yellow\"></i>

                                <div class=\"menu-info\">
                                    <h4 class=\"control-sidebar-subheading\">Frodo Updated His Profile</h4>

                                    <p>New phone +1(800)555-1234</p>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href=\"javascript:void(0)\">
                                <i class=\"menu-icon fa fa-envelope-o bg-light-blue\"></i>

                                <div class=\"menu-info\">
                                    <h4 class=\"control-sidebar-subheading\">Nora Joined Mailing List</h4>

                                    <p>nora@example.com</p>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href=\"javascript:void(0)\">
                                <i class=\"menu-icon fa fa-file-code-o bg-green\"></i>

                                <div class=\"menu-info\">
                                    <h4 class=\"control-sidebar-subheading\">Cron Job 254 Executed</h4>

                                    <p>Execution time 5 seconds</p>
                                </div>
                            </a>
                        </li>
                    </ul>
                    <!-- /.control-sidebar-menu -->

                    <h3 class=\"control-sidebar-heading\">Tasks Progress</h3>
                    <ul class=\"control-sidebar-menu\">
                        <li>
                            <a href=\"javascript:void(0)\">
                                <h4 class=\"control-sidebar-subheading\">
                                    Custom Template Design
                                    <span class=\"label label-danger pull-right\">70%</span>
                                </h4>

                                <div class=\"progress progress-xxs\">
                                    <div class=\"progress-bar progress-bar-danger\" style=\"width: 70%\"></div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href=\"javascript:void(0)\">
                                <h4 class=\"control-sidebar-subheading\">
                                    Update Resume
                                    <span class=\"label label-success pull-right\">95%</span>
                                </h4>

                                <div class=\"progress progress-xxs\">
                                    <div class=\"progress-bar progress-bar-success\" style=\"width: 95%\"></div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href=\"javascript:void(0)\">
                                <h4 class=\"control-sidebar-subheading\">
                                    Laravel Integration
                                    <span class=\"label label-warning pull-right\">50%</span>
                                </h4>

                                <div class=\"progress progress-xxs\">
                                    <div class=\"progress-bar progress-bar-warning\" style=\"width: 50%\"></div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href=\"javascript:void(0)\">
                                <h4 class=\"control-sidebar-subheading\">
                                    Back End Framework
                                    <span class=\"label label-primary pull-right\">68%</span>
                                </h4>

                                <div class=\"progress progress-xxs\">
                                    <div class=\"progress-bar progress-bar-primary\" style=\"width: 68%\"></div>
                                </div>
                            </a>
                        </li>
                    </ul>
                    <!-- /.control-sidebar-menu -->

                </div>
                <!-- /.tab-pane -->
                <!-- Stats tab content -->
                <div class=\"tab-pane\" id=\"control-sidebar-stats-tab\">Stats Tab Content</div>
                <!-- /.tab-pane -->
                <!-- Settings tab content -->
                <div class=\"tab-pane\" id=\"control-sidebar-settings-tab\">
                    <form method=\"post\">
                        <h3 class=\"control-sidebar-heading\">General Settings</h3>

                        <div class=\"form-group\">
                            <label class=\"control-sidebar-subheading\">
                                Report panel usage
                                <input type=\"checkbox\" class=\"pull-right\" checked>
                            </label>

                            <p>
                                Some information about this general settings option
                            </p>
                        </div>
                        <!-- /.form-group -->

                        <div class=\"form-group\">
                            <label class=\"control-sidebar-subheading\">
                                Allow mail redirect
                                <input type=\"checkbox\" class=\"pull-right\" checked>
                            </label>

                            <p>
                                Other sets of options are available
                            </p>
                        </div>
                        <!-- /.form-group -->

                        <div class=\"form-group\">
                            <label class=\"control-sidebar-subheading\">
                                Expose author name in posts
                                <input type=\"checkbox\" class=\"pull-right\" checked>
                            </label>

                            <p>
                                Allow the user to show his name in blog posts
                            </p>
                        </div>
                        <!-- /.form-group -->

                        <h3 class=\"control-sidebar-heading\">Chat Settings</h3>

                        <div class=\"form-group\">
                            <label class=\"control-sidebar-subheading\">
                                Show me as online
                                <input type=\"checkbox\" class=\"pull-right\" checked>
                            </label>
                        </div>
                        <!-- /.form-group -->

                        <div class=\"form-group\">
                            <label class=\"control-sidebar-subheading\">
                                Turn off notifications
                                <input type=\"checkbox\" class=\"pull-right\">
                            </label>
                        </div>
                        <!-- /.form-group -->

                        <div class=\"form-group\">
                            <label class=\"control-sidebar-subheading\">
                                Delete chat history
                                <a href=\"javascript:void(0)\" class=\"text-red pull-right\"><i class=\"fa fa-trash-o\"></i></a>
                            </label>
                        </div>
                        <!-- /.form-group -->
                    </form>
                </div>
                <!-- /.tab-pane -->
            </div>
        </aside>
        <!-- /.control-sidebar -->
        <!-- Add the sidebar's background. This div must be placed
             immediately after the control sidebar -->
        <div class=\"control-sidebar-bg\"></div>
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 678
    public function block_javascripts($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 679
        echo "    <!-- ./wrapper -->

    <!-- jQuery 3 -->
    <script src=\"";
        // line 682
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Back/bower_components/jquery/dist/jquery.min.js"), "html", null, true);
        echo "\"></script>
    <!-- jQuery UI 1.11.4 -->
    <script src=\"";
        // line 684
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Back/bower_components/jquery-ui/jquery-ui.min.js"), "html", null, true);
        echo "\"></script>
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <script>
        \$.widget.bridge('uibutton', \$.ui.button);
    </script>
    <!-- Bootstrap 3.3.7 -->
    <script src=\"";
        // line 690
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Back/bower_components/bootstrap/dist/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
    <!-- Morris.js charts -->
    <script src=\"";
        // line 692
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Back/bower_components/raphael/raphael.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 693
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Back/bower_components/morris.js/morris.min.js"), "html", null, true);
        echo "\"></script>
    <!-- Sparkline -->
    <script src=\"";
        // line 695
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Back/bower_components/jquery-sparkline/dist/jquery.sparkline.min.js"), "html", null, true);
        echo "\"></script>
    <!-- jvectormap -->
    <script src=\"";
        // line 697
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Back/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 698
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Back/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"), "html", null, true);
        echo "\"></script>
    <!-- jQuery Knob Chart -->
    <script src=\"";
        // line 700
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Back/bower_components/jquery-knob/dist/jquery.knob.min.js"), "html", null, true);
        echo "\"></script>
    <!-- daterangepicker -->
    <script src=\"";
        // line 702
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Back/bower_components/moment/min/moment.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 703
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Back/bower_components/bootstrap-daterangepicker/daterangepicker.js"), "html", null, true);
        echo "\"></script>
    <!-- datepicker -->
    <script src=\"";
        // line 705
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Back/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"), "html", null, true);
        echo "\"></script>
    <!-- Bootstrap WYSIHTML5 -->
    <script src=\"";
        // line 707
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Back/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"), "html", null, true);
        echo "\"></script>
    <!-- Slimscroll -->
    <script src=\"";
        // line 709
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Back/bower_components/jquery-slimscroll/jquery.slimscroll.min.js"), "html", null, true);
        echo "\"></script>
    <!-- FastClick -->
    <script src=\"";
        // line 711
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Back/bower_components/fastclick/lib/fastclick.js"), "html", null, true);
        echo "\"></script>
    <!-- AdminLTE App -->
    <script src=\"";
        // line 713
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Back/dist/js/adminlte.min.js"), "html", null, true);
        echo "\"></script>
    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
    <script src=\"";
        // line 715
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Back/dist/js/pages/dashboard.js"), "html", null, true);
        echo "\"></script>
    <!-- AdminLTE for demo purposes -->
    <script src=\"";
        // line 717
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Back/dist/js/demo.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "base_back.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  1086 => 717,  1081 => 715,  1076 => 713,  1071 => 711,  1066 => 709,  1061 => 707,  1056 => 705,  1051 => 703,  1047 => 702,  1042 => 700,  1037 => 698,  1033 => 697,  1028 => 695,  1023 => 693,  1019 => 692,  1014 => 690,  1005 => 684,  1000 => 682,  995 => 679,  986 => 678,  783 => 483,  774 => 482,  757 => 474,  748 => 473,  737 => 469,  728 => 468,  717 => 465,  708 => 464,  676 => 438,  672 => 437,  668 => 436,  635 => 406,  631 => 405,  584 => 361,  573 => 353,  569 => 352,  535 => 321,  527 => 315,  518 => 314,  494 => 299,  463 => 271,  454 => 265,  314 => 128,  299 => 116,  284 => 104,  269 => 92,  253 => 79,  220 => 48,  211 => 47,  189 => 30,  184 => 28,  179 => 26,  174 => 24,  169 => 22,  164 => 20,  158 => 17,  153 => 15,  148 => 13,  143 => 11,  138 => 8,  129 => 7,  111 => 6,  99 => 719,  97 => 678,  94 => 677,  91 => 482,  89 => 473,  85 => 471,  83 => 468,  80 => 467,  78 => 464,  72 => 460,  70 => 314,  67 => 313,  65 => 47,  58 => 42,  56 => 7,  52 => 6,  45 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html>
<head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <title>{% block title %}Word Friendship | Dashboard{% endblock %}</title>
    {% block stylesheets %}
        <!-- Tell the browser to be responsive to screen width -->
        <meta content=\"width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no\" name=\"viewport\">
        <!-- Bootstrap 3.3.7 -->
        <link rel=\"stylesheet\" href=\"{{ asset('Back/bower_components/bootstrap/dist/css/bootstrap.min.css') }}\">
        <!-- Font Awesome -->
        <link rel=\"stylesheet\" href=\"{{ asset('Back/bower_components/font-awesome/css/font-awesome.min.css') }}\">
        <!-- Ionicons -->
        <link rel=\"stylesheet\" href=\"{{ asset('Back/bower_components/Ionicons/css/ionicons.min.css') }}\">
        <!-- Theme style -->
        <link rel=\"stylesheet\" href=\"{{ asset('Back/dist/css/AdminLTE.min.css') }}\">
        <!-- AdminLTE Skins. Choose a skin from the css/skins
             folder instead of downloading all of them to reduce the load. -->
        <link rel=\"stylesheet\" href=\"{{ asset('Back/dist/css/skins/_all-skins.min.css') }}\">
        <!-- Morris chart -->
        <link rel=\"stylesheet\" href=\"{{ asset('Back/bower_components/morris.js/morris.css') }}\">
        <!-- jvectormap -->
        <link rel=\"stylesheet\" href=\"{{ asset('Back/bower_components/jvectormap/jquery-jvectormap.css') }}\">
        <!-- Date Picker -->
        <link rel=\"stylesheet\" href=\"{{ asset('Back/bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css') }}\">
        <!-- Daterange picker -->
        <link rel=\"stylesheet\" href=\"{{ asset('Back/bower_components/bootstrap-daterangepicker/daterangepicker.css') }}\">
        <!-- bootstrap wysihtml5 - text editor -->
        <link rel=\"stylesheet\" href=\"{{ asset('Back/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css') }}\">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src=\"https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js\"></script>
        <script src=\"https://oss.maxcdn.com/respond/1.4.2/respond.min.js\"></script>
        <![endif]-->

        <!-- Google Font -->
        <link rel=\"stylesheet\" href=\"https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic\">
    {% endblock %}
</head>

<body class=\"hold-transition skin-blue sidebar-mini\">

<div class=\"wrapper\">
    {% block header  %}
        <header class=\"main-header\">
            <!-- Logo -->
            <a href=\"\" class=\"logo\">
                <!-- mini logo for sidebar mini 50x50 pixels -->
                <span class=\"logo-mini\"><b>A</b>LT</span>
                <!-- logo for regular state and mobile devices -->
                <span class=\"logo-lg\"><b>Admin</b>LTE</span>
            </a>
            <!-- Header Navbar: style can be found in header.less -->
            <nav class=\"navbar navbar-static-top\">
                <!-- Sidebar toggle button-->
                <a href=\"#\" class=\"sidebar-toggle\" data-toggle=\"push-menu\" role=\"button\">
                    <span class=\"sr-only\">Toggle navigation</span>
                </a>

                <div class=\"navbar-custom-menu\">
                    <ul class=\"nav navbar-nav\">
                        <!-- Messages: style can be found in dropdown.less-->
                        <li class=\"dropdown messages-menu\">
                            <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">
                                <i class=\"fa fa-envelope-o\"></i>
                                <span class=\"label label-success\">4</span>
                            </a>
                            <ul class=\"dropdown-menu\">
                                <li class=\"header\">You have 4 messages</li>
                                <li>
                                    <!-- inner menu: contains the actual data -->
                                    <ul class=\"menu\">
                                        <li><!-- start message -->
                                            <a href=\"#\">
                                                <div class=\"pull-left\">
                                                    <img src=\"{{ asset('Back/dist/img/user2-160x160.jpg') }}\" class=\"img-circle\" alt=\"User Image\">
                                                </div>
                                                <h4>
                                                    Support Team
                                                    <small><i class=\"fa fa-clock-o\"></i> 5 mins</small>
                                                </h4>
                                                <p>Why not buy a new awesome theme?</p>
                                            </a>
                                        </li>
                                        <!-- end message -->
                                        <li>
                                            <a href=\"#\">
                                                <div class=\"pull-left\">
                                                    <img src=\"{{ asset('Back/dist/img/user3-128x128.jpg') }}\" class=\"img-circle\" alt=\"User Image\">
                                                </div>
                                                <h4>
                                                    AdminLTE Design Team
                                                    <small><i class=\"fa fa-clock-o\"></i> 2 hours</small>
                                                </h4>
                                                <p>Why not buy a new awesome theme?</p>
                                            </a>
                                        </li>
                                        <li>
                                            <a href=\"#\">
                                                <div class=\"pull-left\">
                                                    <img src=\"{{ asset('Back/dist/img/user4-128x128.jpg') }}\" class=\"img-circle\" alt=\"User Image\">
                                                </div>
                                                <h4>
                                                    Developers
                                                    <small><i class=\"fa fa-clock-o\"></i> Today</small>
                                                </h4>
                                                <p>Why not buy a new awesome theme?</p>
                                            </a>
                                        </li>
                                        <li>
                                            <a href=\"#\">
                                                <div class=\"pull-left\">
                                                    <img src=\"{{ asset('Back/dist/img/user3-128x128.jpg') }}\" class=\"img-circle\" alt=\"User Image\">
                                                </div>
                                                <h4>
                                                    Sales Department
                                                    <small><i class=\"fa fa-clock-o\"></i> Yesterday</small>
                                                </h4>
                                                <p>Why not buy a new awesome theme?</p>
                                            </a>
                                        </li>
                                        <li>
                                            <a href=\"#\">
                                                <div class=\"pull-left\">
                                                    <img src=\"{{ asset('Back/dist/img/user4-128x128.jpg') }}\" class=\"img-circle\" alt=\"User Image\">
                                                </div>
                                                <h4>
                                                    Reviewers
                                                    <small><i class=\"fa fa-clock-o\"></i> 2 days</small>
                                                </h4>
                                                <p>Why not buy a new awesome theme?</p>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class=\"footer\"><a href=\"#\">See All Messages</a></li>
                            </ul>
                        </li>
                        <!-- Notifications: style can be found in dropdown.less -->
                        <li class=\"dropdown notifications-menu\">
                            <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">
                                <i class=\"fa fa-bell-o\"></i>
                                <span class=\"label label-warning\">10</span>
                            </a>
                            <ul class=\"dropdown-menu\">
                                <li class=\"header\">You have 10 notifications</li>
                                <li>
                                    <!-- inner menu: contains the actual data -->
                                    <ul class=\"menu\">
                                        <li>
                                            <a href=\"#\">
                                                <i class=\"fa fa-users text-aqua\"></i> 5 new members joined today
                                            </a>
                                        </li>
                                        <li>
                                            <a href=\"#\">
                                                <i class=\"fa fa-warning text-yellow\"></i> Very long description here that may not fit into the
                                                page and may cause design problems
                                            </a>
                                        </li>
                                        <li>
                                            <a href=\"#\">
                                                <i class=\"fa fa-users text-red\"></i> 5 new members joined
                                            </a>
                                        </li>
                                        <li>
                                            <a href=\"#\">
                                                <i class=\"fa fa-shopping-cart text-green\"></i> 25 sales made
                                            </a>
                                        </li>
                                        <li>
                                            <a href=\"#\">
                                                <i class=\"fa fa-user text-red\"></i> You changed your username
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class=\"footer\"><a href=\"#\">View all</a></li>
                            </ul>
                        </li>
                        <!-- Tasks: style can be found in dropdown.less -->
                        <li class=\"dropdown tasks-menu\">
                            <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">
                                <i class=\"fa fa-flag-o\"></i>
                                <span class=\"label label-danger\">9</span>
                            </a>
                            <ul class=\"dropdown-menu\">
                                <li class=\"header\">You have 9 tasks</li>
                                <li>
                                    <!-- inner menu: contains the actual data -->
                                    <ul class=\"menu\">
                                        <li><!-- Task item -->
                                            <a href=\"#\">
                                                <h3>
                                                    Design some buttons
                                                    <small class=\"pull-right\">20%</small>
                                                </h3>
                                                <div class=\"progress xs\">
                                                    <div class=\"progress-bar progress-bar-aqua\" style=\"width: 20%\" role=\"progressbar\"
                                                         aria-valuenow=\"20\" aria-valuemin=\"0\" aria-valuemax=\"100\">
                                                        <span class=\"sr-only\">20% Complete</span>
                                                    </div>
                                                </div>
                                            </a>
                                        </li>
                                        <!-- end task item -->
                                        <li><!-- Task item -->
                                            <a href=\"#\">
                                                <h3>
                                                    Create a nice theme
                                                    <small class=\"pull-right\">40%</small>
                                                </h3>
                                                <div class=\"progress xs\">
                                                    <div class=\"progress-bar progress-bar-green\" style=\"width: 40%\" role=\"progressbar\"
                                                         aria-valuenow=\"20\" aria-valuemin=\"0\" aria-valuemax=\"100\">
                                                        <span class=\"sr-only\">40% Complete</span>
                                                    </div>
                                                </div>
                                            </a>
                                        </li>
                                        <!-- end task item -->
                                        <li><!-- Task item -->
                                            <a href=\"#\">
                                                <h3>
                                                    Some task I need to do
                                                    <small class=\"pull-right\">60%</small>
                                                </h3>
                                                <div class=\"progress xs\">
                                                    <div class=\"progress-bar progress-bar-red\" style=\"width: 60%\" role=\"progressbar\"
                                                         aria-valuenow=\"20\" aria-valuemin=\"0\" aria-valuemax=\"100\">
                                                        <span class=\"sr-only\">60% Complete</span>
                                                    </div>
                                                </div>
                                            </a>
                                        </li>
                                        <!-- end task item -->
                                        <li><!-- Task item -->
                                            <a href=\"#\">
                                                <h3>
                                                    Make beautiful transitions
                                                    <small class=\"pull-right\">80%</small>
                                                </h3>
                                                <div class=\"progress xs\">
                                                    <div class=\"progress-bar progress-bar-yellow\" style=\"width: 80%\" role=\"progressbar\"
                                                         aria-valuenow=\"20\" aria-valuemin=\"0\" aria-valuemax=\"100\">
                                                        <span class=\"sr-only\">80% Complete</span>
                                                    </div>
                                                </div>
                                            </a>
                                        </li>
                                        <!-- end task item -->
                                    </ul>
                                </li>
                                <li class=\"footer\">
                                    <a href=\"#\">View all tasks</a>
                                </li>
                            </ul>
                        </li>
                        <!-- User Account: style can be found in dropdown.less -->
                        <li class=\"dropdown user user-menu\">
                            <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">
                                <img src=\"{{ asset('Back/dist/img/user2-160x160.jpg') }}\" class=\"user-image\" alt=\"User Image\">
                                <span class=\"hidden-xs\">Alexander Pierce</span>
                            </a>
                            <ul class=\"dropdown-menu\">
                                <!-- User image -->
                                <li class=\"user-header\">
                                    <img src=\"{{ asset('Back/dist/img/user2-160x160.jpg') }}\" class=\"img-circle\" alt=\"User Image\">

                                    <p>
                                        Alexander Pierce - Web Developer
                                        <small>Member since Nov. 2012</small>
                                    </p>
                                </li>
                                <!-- Menu Body -->
                                <li class=\"user-body\">
                                    <div class=\"row\">
                                        <div class=\"col-xs-4 text-center\">
                                            <a href=\"#\">Followers</a>
                                        </div>
                                        <div class=\"col-xs-4 text-center\">
                                            <a href=\"#\">Sales</a>
                                        </div>
                                        <div class=\"col-xs-4 text-center\">
                                            <a href=\"#\">Friends</a>
                                        </div>
                                    </div>
                                    <!-- /.row -->
                                </li>
                                <!-- Menu Footer-->
                                <li class=\"user-footer\">
                                    <div class=\"pull-left\">
                                        <a href=\"#\" class=\"btn btn-default btn-flat\">Profile</a>
                                    </div>
                                    <div class=\"pull-right\">
                                        <a href=\"{{ path('fos_user_security_logout') }}\" class=\"btn btn-default btn-flat\">Sign out</a>
                                    </div>
                                </li>
                            </ul>
                        </li>
                        <!-- Control Sidebar Toggle Button -->
                        <li>
                            <a href=\"#\" data-toggle=\"control-sidebar\"><i class=\"fa fa-gears\"></i></a>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
    {% endblock %}
    <!-- Left side column. contains the logo and sidebar -->
    {% block mainsidebar %}
        <aside class=\"main-sidebar\">
            <!-- sidebar: style can be found in sidebar.less -->
            <section class=\"sidebar\">
                <!-- Sidebar user panel -->
                <div class=\"user-panel\">
                    <div class=\"pull-left image\">
                        <img src=\"{{ asset('Back/dist/img/user2-160x160.jpg') }}\" class=\"img-circle\" alt=\"User Image\">
                    </div>
                    <div class=\"pull-left info\">
                        <p>Alexander Pierce</p>
                        <a href=\"#\"><i class=\"fa fa-circle text-success\"></i> Online</a>
                    </div>
                </div>
                <!-- search form -->
                <form action=\"#\" method=\"get\" class=\"sidebar-form\">
                    <div class=\"input-group\">
                        <input type=\"text\" name=\"q\" class=\"form-control\" placeholder=\"Search...\">
                        <span class=\"input-group-btn\">
                <button type=\"submit\" name=\"search\" id=\"search-btn\" class=\"btn btn-flat\"><i class=\"fa fa-search\"></i>
                </button>
              </span>
                    </div>
                </form>
                <!-- /.search form -->
                <!-- sidebar menu: : style can be found in sidebar.less -->
                <ul class=\"sidebar-menu\" data-widget=\"tree\">
                    <li class=\"header\">MAIN NAVIGATION</li>
                    <li class=\"treeview\">
                        <a href=\"#\">
                            <i class=\"fa fa-files-o\"></i>
                            <span>Gestion d'utilisateurs</span>
                            <span class=\"pull-right-container\">
              <span class=\"label label-primary pull-right\">4</span>
            </span>
                        </a>
                        <ul class=\"treeview-menu\">
                            <li><a href=\"/chick_click/web/app_dev.php/\"><i class=\"fa fa-circle-o\"></i> Administrateurs</a></li>
                            <li><a href=\"{{ asset('Back/pages/layout/boxed.html') }}\"><i class=\"fa fa-circle-o\"></i> Administrateurs de groupes</a></li>
                            <li><a href=\"{{ asset('Back/pages/layout/fixed.html') }}\"><i class=\"fa fa-circle-o\"></i> Utilisateurs</a></li>

                        </ul>
                    </li>
                    <li class=\"treeview\">
                        <a href=\"#\"><i class=\"fa fa-files-o\"></i><span>Gestion Publication</span>
                            <span class=\"pull-right-container\"></span></a>
                        <ul class=\"treeview-menu\">
                            <li><a href=\"{{ asset('Back/pages/layout/top-nav.html') }}\"><i class=\"fa fa-circle-o\"></i> Liste de produits</a></li>
                            <li class=\"treeview\">
                                <a href=\"#\"><i class=\"fa fa-circle-o\"></i><span>Listes des achats</span>
                                    <span class=\"pull-right-container\"></span></a>
                                <ul class=\"treeview-menu\">
                                    <li><a href=\"\"><i class=\"fa fa-circle-o\"></i> Liste des Commandes</a>

                                    <li><a href=\"\"><i class=\"fa fa-circle-o\"></i> Liste des Adresses</a></li>
                                    <li><a href=\"\"><i class=\"fa fa-circle-o\"></i> Statistiques</a></li>


                                </ul>

                            </li>


                        </ul>
                    </li>
                    <li class=\"treeview\">
                        <a href=\"#\">
                            <i class=\"fa fa-files-o\"></i>
                            <span>Forum Management</span>
                            <span class=\"pull-right-container\">
              <span class=\"label label-primary pull-right\">4</span>
            </span>
                        </a>
                        <ul class=\"treeview-menu\">
                            <li><a href=\"/chck_click/web/app_dev.php/forum/recherche\"><i class=\"fa fa-circle-o\"></i> View Subject</a></li>
                            <li><a href=\"#\"><i class=\"fa fa-circle-o\"></i> Add Subject</a></li>
                            <li><a href=\"#\"><i class=\"fa fa-circle-o\"></i> Add Category</a></li>
                            <li><a href=\"#\"><i class=\"fa fa-circle-o\"></i> Forum Statistics</a></li>


                        </ul>
                    </li>
                    <li class=\"treeview\">
                        <a href=\"#\">
                            <i class=\"fa fa-files-o\"></i>
                            <span>Gestion de Forum</span>
                            <span class=\"pull-right-container\">
              <span class=\"label label-primary pull-right\">4</span>
            </span>
                        </a>
                        <ul class=\"treeview-menu\">
                            <li><a href=\"{{ asset('Back/pages/layout/top-nav.html') }}\"><i class=\"fa fa-circle-o\"></i> ####</a></li>
                            <li><a href=\"{{ asset('Back/pages/layout/boxed.html') }}\"><i class=\"fa fa-circle-o\"></i> ####</a></li>


                        </ul>
                    </li>
                    <li class=\"treeview\">
                        <a href=\"#\">
                            <i class=\"fa fa-files-o\"></i>
                            <span>Reclamations Management</span>
                            <span class=\"pull-right-container\">
              <span class=\"label label-primary pull-right\">4</span>
            </span>
                        </a>
                        <ul class=\"treeview-menu\">
                            <li><a href=\"/chick_clck/web/app_dev.php/ticket/showTicketAdmin\"><i class=\"fa fa-circle-o\"></i> Inbox Reclamations</a></li>
                            <li><a href=\"#\"><i class=\"fa fa-circle-o\"></i> Categories of reclamations</a></li>
                            <li><a href=\"#\"><i class=\"fa fa-circle-o\"></i> Send an answer</a></li>


                        </ul>
                    </li>
                    <li class=\"treeview\">
                        <a href=\"#\">
                            <i class=\"fa fa-files-o\"></i>
                            <span>Events Manager</span>
                            <span class=\"pull-right-container\">
              <span class=\"label label-primary pull-right\">4</span>
            </span>
                        </a>
                        <ul class=\"treeview-menu\">
                            <li><a href=\"{{ path('showA_ticket') }}\"><i class=\"fa fa-circle-o\"></i> Inbox reclamations</a></li>
                            <li><a href=\"{{ path('showA_reportissue') }}\"><i class=\"fa fa-circle-o\"></i> Categories of reclamations</a></li>
                            <li><a href=\"{{ path('SendMail') }}\"><i class=\"fa fa-circle-o\"></i> Send an answer </a></li>


                        </ul>
                    </li>








                    <li class=\"header\">LABELS</li>
                    <li><a href=\"#\"><i class=\"fa fa-circle-o text-red\"></i> <span>Important</span></a></li>
                    <li><a href=\"#\"><i class=\"fa fa-circle-o text-yellow\"></i> <span>Warning</span></a></li>
                    <li><a href=\"#\"><i class=\"fa fa-circle-o text-aqua\"></i> <span>Information</span></a></li>
                </ul>
            </section>
            <!-- /.sidebar -->
        </aside>
    {% endblock %}


    <div class=\"content-wrapper\">
        <section>
            {% block content_event %}

            {% endblock %}
        </section>
        {% block content_admin %}

        {% endblock %}
    </div>

    {% block footer %}
        <footer class=\"main-footer\">
            <div class=\"pull-right hidden-xs\">
                <b>Version</b> 2.4.0
            </div>
            <strong>Copyright &copy; 2014-2016 <a href=\"https://adminlte.io\">Almsaeed Studio</a>.</strong> All rights
            reserved.
        </footer>
    {% endblock %}
    {% block sidebar %}
        <!-- Control Sidebar -->
        <aside class=\"control-sidebar control-sidebar-dark\">
            <!-- Create the tabs -->
            <ul class=\"nav nav-tabs nav-justified control-sidebar-tabs\">
                <li><a href=\"#control-sidebar-home-tab\" data-toggle=\"tab\"><i class=\"fa fa-home\"></i></a></li>
                <li><a href=\"#control-sidebar-settings-tab\" data-toggle=\"tab\"><i class=\"fa fa-gears\"></i></a></li>
            </ul>
            <!-- Tab panes -->
            <div class=\"tab-content\">
                <!-- Home tab content -->
                <div class=\"tab-pane\" id=\"control-sidebar-home-tab\">
                    <h3 class=\"control-sidebar-heading\">Recent Activity</h3>
                    <ul class=\"control-sidebar-menu\">
                        <li>
                            <a href=\"javascript:void(0)\">
                                <i class=\"menu-icon fa fa-birthday-cake bg-red\"></i>

                                <div class=\"menu-info\">
                                    <h4 class=\"control-sidebar-subheading\">Langdon's Birthday</h4>

                                    <p>Will be 23 on April 24th</p>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href=\"javascript:void(0)\">
                                <i class=\"menu-icon fa fa-user bg-yellow\"></i>

                                <div class=\"menu-info\">
                                    <h4 class=\"control-sidebar-subheading\">Frodo Updated His Profile</h4>

                                    <p>New phone +1(800)555-1234</p>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href=\"javascript:void(0)\">
                                <i class=\"menu-icon fa fa-envelope-o bg-light-blue\"></i>

                                <div class=\"menu-info\">
                                    <h4 class=\"control-sidebar-subheading\">Nora Joined Mailing List</h4>

                                    <p>nora@example.com</p>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href=\"javascript:void(0)\">
                                <i class=\"menu-icon fa fa-file-code-o bg-green\"></i>

                                <div class=\"menu-info\">
                                    <h4 class=\"control-sidebar-subheading\">Cron Job 254 Executed</h4>

                                    <p>Execution time 5 seconds</p>
                                </div>
                            </a>
                        </li>
                    </ul>
                    <!-- /.control-sidebar-menu -->

                    <h3 class=\"control-sidebar-heading\">Tasks Progress</h3>
                    <ul class=\"control-sidebar-menu\">
                        <li>
                            <a href=\"javascript:void(0)\">
                                <h4 class=\"control-sidebar-subheading\">
                                    Custom Template Design
                                    <span class=\"label label-danger pull-right\">70%</span>
                                </h4>

                                <div class=\"progress progress-xxs\">
                                    <div class=\"progress-bar progress-bar-danger\" style=\"width: 70%\"></div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href=\"javascript:void(0)\">
                                <h4 class=\"control-sidebar-subheading\">
                                    Update Resume
                                    <span class=\"label label-success pull-right\">95%</span>
                                </h4>

                                <div class=\"progress progress-xxs\">
                                    <div class=\"progress-bar progress-bar-success\" style=\"width: 95%\"></div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href=\"javascript:void(0)\">
                                <h4 class=\"control-sidebar-subheading\">
                                    Laravel Integration
                                    <span class=\"label label-warning pull-right\">50%</span>
                                </h4>

                                <div class=\"progress progress-xxs\">
                                    <div class=\"progress-bar progress-bar-warning\" style=\"width: 50%\"></div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href=\"javascript:void(0)\">
                                <h4 class=\"control-sidebar-subheading\">
                                    Back End Framework
                                    <span class=\"label label-primary pull-right\">68%</span>
                                </h4>

                                <div class=\"progress progress-xxs\">
                                    <div class=\"progress-bar progress-bar-primary\" style=\"width: 68%\"></div>
                                </div>
                            </a>
                        </li>
                    </ul>
                    <!-- /.control-sidebar-menu -->

                </div>
                <!-- /.tab-pane -->
                <!-- Stats tab content -->
                <div class=\"tab-pane\" id=\"control-sidebar-stats-tab\">Stats Tab Content</div>
                <!-- /.tab-pane -->
                <!-- Settings tab content -->
                <div class=\"tab-pane\" id=\"control-sidebar-settings-tab\">
                    <form method=\"post\">
                        <h3 class=\"control-sidebar-heading\">General Settings</h3>

                        <div class=\"form-group\">
                            <label class=\"control-sidebar-subheading\">
                                Report panel usage
                                <input type=\"checkbox\" class=\"pull-right\" checked>
                            </label>

                            <p>
                                Some information about this general settings option
                            </p>
                        </div>
                        <!-- /.form-group -->

                        <div class=\"form-group\">
                            <label class=\"control-sidebar-subheading\">
                                Allow mail redirect
                                <input type=\"checkbox\" class=\"pull-right\" checked>
                            </label>

                            <p>
                                Other sets of options are available
                            </p>
                        </div>
                        <!-- /.form-group -->

                        <div class=\"form-group\">
                            <label class=\"control-sidebar-subheading\">
                                Expose author name in posts
                                <input type=\"checkbox\" class=\"pull-right\" checked>
                            </label>

                            <p>
                                Allow the user to show his name in blog posts
                            </p>
                        </div>
                        <!-- /.form-group -->

                        <h3 class=\"control-sidebar-heading\">Chat Settings</h3>

                        <div class=\"form-group\">
                            <label class=\"control-sidebar-subheading\">
                                Show me as online
                                <input type=\"checkbox\" class=\"pull-right\" checked>
                            </label>
                        </div>
                        <!-- /.form-group -->

                        <div class=\"form-group\">
                            <label class=\"control-sidebar-subheading\">
                                Turn off notifications
                                <input type=\"checkbox\" class=\"pull-right\">
                            </label>
                        </div>
                        <!-- /.form-group -->

                        <div class=\"form-group\">
                            <label class=\"control-sidebar-subheading\">
                                Delete chat history
                                <a href=\"javascript:void(0)\" class=\"text-red pull-right\"><i class=\"fa fa-trash-o\"></i></a>
                            </label>
                        </div>
                        <!-- /.form-group -->
                    </form>
                </div>
                <!-- /.tab-pane -->
            </div>
        </aside>
        <!-- /.control-sidebar -->
        <!-- Add the sidebar's background. This div must be placed
             immediately after the control sidebar -->
        <div class=\"control-sidebar-bg\"></div>
    {% endblock %}
</div>
{% block javascripts %}
    <!-- ./wrapper -->

    <!-- jQuery 3 -->
    <script src=\"{{ asset('Back/bower_components/jquery/dist/jquery.min.js') }}\"></script>
    <!-- jQuery UI 1.11.4 -->
    <script src=\"{{ asset('Back/bower_components/jquery-ui/jquery-ui.min.js') }}\"></script>
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <script>
        \$.widget.bridge('uibutton', \$.ui.button);
    </script>
    <!-- Bootstrap 3.3.7 -->
    <script src=\"{{ asset('Back/bower_components/bootstrap/dist/js/bootstrap.min.js') }}\"></script>
    <!-- Morris.js charts -->
    <script src=\"{{ asset('Back/bower_components/raphael/raphael.min.js') }}\"></script>
    <script src=\"{{ asset('Back/bower_components/morris.js/morris.min.js') }}\"></script>
    <!-- Sparkline -->
    <script src=\"{{ asset('Back/bower_components/jquery-sparkline/dist/jquery.sparkline.min.js') }}\"></script>
    <!-- jvectormap -->
    <script src=\"{{ asset('Back/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js') }}\"></script>
    <script src=\"{{ asset('Back/plugins/jvectormap/jquery-jvectormap-world-mill-en.js') }}\"></script>
    <!-- jQuery Knob Chart -->
    <script src=\"{{ asset('Back/bower_components/jquery-knob/dist/jquery.knob.min.js') }}\"></script>
    <!-- daterangepicker -->
    <script src=\"{{ asset('Back/bower_components/moment/min/moment.min.js') }}\"></script>
    <script src=\"{{ asset('Back/bower_components/bootstrap-daterangepicker/daterangepicker.js') }}\"></script>
    <!-- datepicker -->
    <script src=\"{{ asset('Back/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js') }}\"></script>
    <!-- Bootstrap WYSIHTML5 -->
    <script src=\"{{ asset('Back/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js') }}\"></script>
    <!-- Slimscroll -->
    <script src=\"{{ asset('Back/bower_components/jquery-slimscroll/jquery.slimscroll.min.js') }}\"></script>
    <!-- FastClick -->
    <script src=\"{{ asset('Back/bower_components/fastclick/lib/fastclick.js') }}\"></script>
    <!-- AdminLTE App -->
    <script src=\"{{ asset('Back/dist/js/adminlte.min.js') }}\"></script>
    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
    <script src=\"{{ asset('Back/dist/js/pages/dashboard.js') }}\"></script>
    <!-- AdminLTE for demo purposes -->
    <script src=\"{{ asset('Back/dist/js/demo.js') }}\"></script>
{% endblock %}
</body>
</html>
", "base_back.html.twig", "C:\\wamp64\\www\\Chick_Click\\app\\Resources\\views\\base_back.html.twig");
    }
}
