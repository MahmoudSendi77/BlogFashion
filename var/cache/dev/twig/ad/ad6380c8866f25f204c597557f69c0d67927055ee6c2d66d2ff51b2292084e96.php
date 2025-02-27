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

/* template.html.twig.twig */
class __TwigTemplate_446a11d9c08f4d73b758767860555a58b1e2e905527f086d09c82c6122054dee extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "template.html.twig.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "template.html.twig.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
<head>
  <meta charset=\"utf-8\">
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
  <meta http-equiv=\"x-ua-compatible\" content=\"ie=edge\">

  <title>AdminLTE 3 | Dashboard 2</title>

  <!-- Font Awesome Icons -->
  <link rel=\"stylesheet\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("back/plugins/fontawesome-free/css/all.min.css"), "html", null, true);
        echo "\">
  <!-- overlayScrollbars -->
  <link rel=\"stylesheet\" href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("back/plugins/overlayScrollbars/css/OverlayScrollbars.min.css"), "html", null, true);
        echo "\">
  <!-- Theme style -->
  <link rel=\"stylesheet\" href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("back/dist/css/adminlte.min.css"), "html", null, true);
        echo "\">
  <!-- Google Font: Source Sans Pro -->
  <link href=\"https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700\" rel=\"stylesheet\">
</head>
<body class=\"hold-transition sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed\">
<div class=\"wrapper\">
  <!-- Navbar -->
  <nav class=\"main-header navbar navbar-expand navbar-white navbar-light\">
    <!-- Left navbar links -->
    <ul class=\"navbar-nav\">
      <li class=\"nav-item\">
        <a class=\"nav-link\" data-widget=\"pushmenu\" href=\"#\"><i class=\"fas fa-bars\"></i></a>
      </li>
      <li class=\"nav-item d-none d-sm-inline-block\">
        <a href=\"index3.html\" class=\"nav-link\">Home</a>
      </li>
      <li class=\"nav-item d-none d-sm-inline-block\">
        <a href=\"#\" class=\"nav-link\">Contact</a>
      </li>
    </ul>

    <!-- SEARCH FORM -->
    <form class=\"form-inline ml-3\">
      <div class=\"input-group input-group-sm\">
        <input class=\"form-control form-control-navbar\" type=\"search\" placeholder=\"Search\" aria-label=\"Search\">
        <div class=\"input-group-append\">
          <button class=\"btn btn-navbar\" type=\"submit\">
            <i class=\"fas fa-search\"></i>
          </button>
        </div>
      </div>
    </form>

    <!-- Right navbar links -->
    <ul class=\"navbar-nav ml-auto\">
      <!-- Messages Dropdown Menu -->
      <li class=\"nav-item dropdown\">
        <a class=\"nav-link\" data-toggle=\"dropdown\" href=\"#\">
          <i class=\"far fa-comments\"></i>
          <span class=\"badge badge-danger navbar-badge\">3</span>
        </a>
        <div class=\"dropdown-menu dropdown-menu-lg dropdown-menu-right\">
          <a href=\"#\" class=\"dropdown-item\">
            <!-- Message Start -->
            <div class=\"media\">
              <img src=\"";
        // line 60
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("back/dist/img/user1-128x128.jpg\" alt=\"User Avatar\" class=\"img-size-50 mr-3 img-circle"), "html", null, true);
        echo "\">
              <div class=\"media-body\">
                <h3 class=\"dropdown-item-title\">
                  Brad Diesel
                  <span class=\"float-right text-sm text-danger\"><i class=\"fas fa-star\"></i></span>
                </h3>
                <p class=\"text-sm\">Call me whenever you can...</p>
                <p class=\"text-sm text-muted\"><i class=\"far fa-clock mr-1\"></i> 4 Hours Ago</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class=\"dropdown-divider\"></div>
          <a href=\"#\" class=\"dropdown-item\">
            <!-- Message Start -->
            <div class=\"media\">
              <img src=\"";
        // line 76
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("back/dist/img/user8-128x128.jpg\" alt=\"User Avatar"), "html", null, true);
        echo "\" class=\"img-size-50 img-circle mr-3\">
              <div class=\"media-body\">
                <h3 class=\"dropdown-item-title\">
                  John Pierce
                  <span class=\"float-right text-sm text-muted\"><i class=\"fas fa-star\"></i></span>
                </h3>
                <p class=\"text-sm\">I got your message bro</p>
                <p class=\"text-sm text-muted\"><i class=\"far fa-clock mr-1\"></i> 4 Hours Ago</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class=\"dropdown-divider\"></div>
          <a href=\"#\" class=\"dropdown-item\">
            <!-- Message Start -->
            <div class=\"media\">
              <img src=\"";
        // line 92
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("back/dist/img/user3-128x128.jpg"), "html", null, true);
        echo "\" alt=\"User Avatar\" class=\"img-size-50 img-circle mr-3\">
              <div class=\"media-body\">
                <h3 class=\"dropdown-item-title\">
                  Nora Silvester
                  <span class=\"float-right text-sm text-warning\"><i class=\"fas fa-star\"></i></span>
                </h3>
                <p class=\"text-sm\">The subject goes here</p>
                <p class=\"text-sm text-muted\"><i class=\"far fa-clock mr-1\"></i> 4 Hours Ago</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class=\"dropdown-divider\"></div>
          <a href=\"#\" class=\"dropdown-item dropdown-footer\">See All Messages</a>
        </div>
      </li>
      <!-- Notifications Dropdown Menu -->
      <li class=\"nav-item dropdown\">
        <a class=\"nav-link\" data-toggle=\"dropdown\" href=\"#\">
          <i class=\"far fa-bell\"></i>
          <span class=\"badge badge-warning navbar-badge\">15</span>
        </a>
        <div class=\"dropdown-menu dropdown-menu-lg dropdown-menu-right\">
          <span class=\"dropdown-item dropdown-header\">15 Notifications</span>
          <div class=\"dropdown-divider\"></div>
          <a href=\"#\" class=\"dropdown-item\">
            <i class=\"fas fa-envelope mr-2\"></i> 4 new messages
            <span class=\"float-right text-muted text-sm\">3 mins</span>
          </a>
          <div class=\"dropdown-divider\"></div>
          <a href=\"#\" class=\"dropdown-item\">
            <i class=\"fas fa-users mr-2\"></i> 8 friend requests
            <span class=\"float-right text-muted text-sm\">12 hours</span>
          </a>
          <div class=\"dropdown-divider\"></div>
          <a href=\"#\" class=\"dropdown-item\">
            <i class=\"fas fa-file mr-2\"></i> 3 new reports
            <span class=\"float-right text-muted text-sm\">2 days</span>
          </a>
          <div class=\"dropdown-divider\"></div>
          <a href=\"#\" class=\"dropdown-item dropdown-footer\">See All Notifications</a>
        </div>
      </li>
      <li class=\"nav-item\">
        <a class=\"nav-link\" data-widget=\"control-sidebar\" data-slide=\"true\" href=\"#\"><i
                class=\"fas fa-th-large\"></i></a>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class=\"main-sidebar sidebar-dark-primary elevation-4\">
    <!-- Brand Logo -->
    <a href=\"index3.html\" class=\"brand-link\">
      <img src=\"";
        // line 147
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("back/dist/img/AdminLTELogo.png"), "html", null, true);
        echo "\" alt=\"AdminLTE Logo\" class=\"brand-image img-circle elevation-3\"
           style=\"opacity: .8\">
      <span class=\"brand-text font-weight-light\">AdminLTE 3</span>
    </a>

    <!-- Sidebar -->
    <div class=\"sidebar\">
      <!-- Sidebar user panel (optional) -->
      <div class=\"user-panel mt-3 pb-3 mb-3 d-flex\">
        <div class=\"image\">
          <img src=\"";
        // line 157
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("back/dist/img/user2-160x160.jpg"), "html", null, true);
        echo "\" class=\"img-circle elevation-2\" alt=\"User Image\">
        </div>
        <div class=\"info\">
          <a href=\"#\" class=\"d-block\">Alexander Pierce</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class=\"mt-2\">
        <ul class=\"nav nav-pills nav-sidebar flex-column\" data-widget=\"treeview\" role=\"menu\" data-accordion=\"false\">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class=\"nav-item has-treeview menu-open\">
            <a href=\"#\" class=\"nav-link active\">
              <i class=\"nav-icon fas fa-tachometer-alt\"></i>
              <p>
                Dashboard
                <i class=\"right fas fa-angle-left\"></i>
              </p>
            </a>
            <ul class=\"nav nav-treeview\">
              <li class=\"nav-item\">
                <a href=\"./index.html\" class=\"nav-link\">
                  <i class=\"far fa-circle nav-icon\"></i>
                  <p>Dashboard v1</p>
                </a>
              </li>
              <li class=\"nav-item\">
                <a href=\"./index2.html\" class=\"nav-link active\">
                  <i class=\"far fa-circle nav-icon\"></i>
                  <p>Dashboard v2</p>
                </a>
              </li>
              <li class=\"nav-item\">
                <a href=\"./index3.html\" class=\"nav-link\">
                  <i class=\"far fa-circle nav-icon\"></i>
                  <p>Dashboard v3</p>
                </a>
              </li>
            </ul>
          </li>
          <li class=\"nav-item\">
            <a href=\"pages/widgets.html\" class=\"nav-link\">
              <i class=\"nav-icon fas fa-th\"></i>
              <p>
                Widgets
                <span class=\"right badge badge-danger\">New</span>
              </p>
            </a>
          </li>
          <li class=\"nav-item has-treeview\">
            <a href=\"#\" class=\"nav-link\">
              <i class=\"nav-icon fas fa-copy\"></i>
              <p>
                Settings
                <i class=\"fas fa-angle-left right\"></i>
                <span class=\"badge badge-info right\">6</span>
              </p>
            </a>
            <ul class=\"nav nav-treeview\">
              <li class=\"nav-item\">
                <a href=\"pages/layout/top-nav.html\" class=\"nav-link\">
                  <i class=\"far fa-circle nav-icon\"></i>
                  <p>Deals</p>
                </a>
              </li>
              <li class=\"nav-item\">
                <a href=\"pages/layout/boxed.html\" class=\"nav-link\">
                  <i class=\"far fa-circle nav-icon\"></i>
                  <p>Deal's Category</p>
                </a>
              </li>
              <li class=\"nav-item\">
                <a href=\"pages/layout/fixed-sidebar.html\" class=\"nav-link\">
                  <i class=\"far fa-circle nav-icon\"></i>
                  <p>Admin's Deals</p>
                </a>
              </li>
              <li class=\"nav-item\">
                <a href=\"pages/layout/fixed-topnav.html\" class=\"nav-link\">
                  <i class=\"far fa-circle nav-icon\"></i>
                  <p> Nothing </p>
                </a>
              </li>

              <li class=\"nav-item\">
                <a href=\"pages/layout/fixed-footer.html\" class=\"nav-link\">
                  <i class=\"far fa-circle nav-icon\"></i>
                  <p>Nothing</p>
                </a>
              </li>
              <li class=\"nav-item\">
                <a href=\"pages/layout/collapsed-sidebar.html\" class=\"nav-link\">
                  <i class=\"far fa-circle nav-icon\"></i>
                  <p> Nothing </p>
                </a>
              </li>
            </ul>

          </li>






          <li class=\"nav-item has-treeview\">
            <a href=\"#\" class=\"nav-link\">
              <i class=\"nav-icon far fa-envelope\"></i>
              <p>
                Mailbox
                <i class=\"fas fa-angle-left right\"></i>
              </p>
            </a>
            <ul class=\"nav nav-treeview\">
              <li class=\"nav-item\">
                <a href=\"pages/mailbox/mailbox.html\" class=\"nav-link\">
                  <i class=\"far fa-circle nav-icon\"></i>
                  <p>Inbox</p>
                </a>
              </li>
              <li class=\"nav-item\">
                <a href=\"pages/mailbox/compose.html\" class=\"nav-link\">
                  <i class=\"far fa-circle nav-icon\"></i>
                  <p>Compose</p>
                </a>
              </li>
              <li class=\"nav-item\">
                <a href=\"pages/mailbox/read-mail.html\" class=\"nav-link\">
                  <i class=\"far fa-circle nav-icon\"></i>
                  <p>Read</p>
                </a>
              </li>
            </ul>
          </li>
          <li class=\"nav-item has-treeview\">
            <a href=\"#\" class=\"nav-link\">
              <i class=\"nav-icon fas fa-book\"></i>
              <p>
                Pages
                <i class=\"fas fa-angle-left right\"></i>
              </p>
            </a>
            <ul class=\"nav nav-treeview\">
              <li class=\"nav-item\">
                <a href=\"pages/examples/invoice.html\" class=\"nav-link\">
                  <i class=\"far fa-circle nav-icon\"></i>
                  <p>Invoice</p>
                </a>
              </li>
              <li class=\"nav-item\">
                <a href=\"pages/examples/profile.html\" class=\"nav-link\">
                  <i class=\"far fa-circle nav-icon\"></i>
                  <p>Profile</p>
                </a>
              </li>
              <li class=\"nav-item\">
                <a href=\"pages/examples/e_commerce.html\" class=\"nav-link\">
                  <i class=\"far fa-circle nav-icon\"></i>
                  <p>E-commerce</p>
                </a>
              </li>
              <li class=\"nav-item\">
                <a href=\"pages/examples/projects.html\" class=\"nav-link\">
                  <i class=\"far fa-circle nav-icon\"></i>
                  <p>Projects</p>
                </a>
              </li>
              <li class=\"nav-item\">
                <a href=\"pages/examples/project_add.html\" class=\"nav-link\">
                  <i class=\"far fa-circle nav-icon\"></i>
                  <p>Project Add</p>
                </a>
              </li>
              <li class=\"nav-item\">
                <a href=\"pages/examples/project_edit.html\" class=\"nav-link\">
                  <i class=\"far fa-circle nav-icon\"></i>
                  <p>Project Edit</p>
                </a>
              </li>
              <li class=\"nav-item\">
                <a href=\"pages/examples/project_detail.html\" class=\"nav-link\">
                  <i class=\"far fa-circle nav-icon\"></i>
                  <p>Project Detail</p>
                </a>
              </li>
              <li class=\"nav-item\">
                <a href=\"pages/examples/contacts.html\" class=\"nav-link\">
                  <i class=\"far fa-circle nav-icon\"></i>
                  <p>Contacts</p>
                </a>
              </li>
            </ul>
          </li>
          <li class=\"nav-item has-treeview\">
            <a href=\"#\" class=\"nav-link\">
              <i class=\"nav-icon far fa-plus-square\"></i>
              <p>
                Extras
                <i class=\"fas fa-angle-left right\"></i>
              </p>
            </a>
            <ul class=\"nav nav-treeview\">
              <li class=\"nav-item\">
                <a href=\"pages/examples/login.html\" class=\"nav-link\">
                  <i class=\"far fa-circle nav-icon\"></i>
                  <p>Login</p>
                </a>
              </li>
              <li class=\"nav-item\">
                <a href=\"pages/examples/register.html\" class=\"nav-link\">
                  <i class=\"far fa-circle nav-icon\"></i>
                  <p>Register</p>
                </a>
              </li>
              <li class=\"nav-item\">
                <a href=\"pages/examples/forgot-password.html\" class=\"nav-link\">
                  <i class=\"far fa-circle nav-icon\"></i>
                  <p>Forgot Password</p>
                </a>
              </li>
              <li class=\"nav-item\">
                <a href=\"pages/examples/recover-password.html\" class=\"nav-link\">
                  <i class=\"far fa-circle nav-icon\"></i>
                  <p>Recover Password</p>
                </a>
              </li>
              <li class=\"nav-item\">
                <a href=\"pages/examples/lockscreen.html\" class=\"nav-link\">
                  <i class=\"far fa-circle nav-icon\"></i>
                  <p>Lockscreen</p>
                </a>
              </li>
              <li class=\"nav-item\">
                <a href=\"pages/examples/legacy-user-menu.html\" class=\"nav-link\">
                  <i class=\"far fa-circle nav-icon\"></i>
                  <p>Legacy User Menu</p>
                </a>
              </li>
              <li class=\"nav-item\">
                <a href=\"pages/examples/language-menu.html\" class=\"nav-link\">
                  <i class=\"far fa-circle nav-icon\"></i>
                  <p>Language Menu</p>
                </a>
              </li>
              <li class=\"nav-item\">
                <a href=\"pages/examples/404.html\" class=\"nav-link\">
                  <i class=\"far fa-circle nav-icon\"></i>
                  <p>Error 404</p>
                </a>
              </li>
              <li class=\"nav-item\">
                <a href=\"pages/examples/500.html\" class=\"nav-link\">
                  <i class=\"far fa-circle nav-icon\"></i>
                  <p>Error 500</p>
                </a>
              </li>
              <li class=\"nav-item\">
                <a href=\"pages/examples/pace.html\" class=\"nav-link\">
                  <i class=\"far fa-circle nav-icon\"></i>
                  <p>Pace</p>
                </a>
              </li>
              <li class=\"nav-item\">
                <a href=\"pages/examples/blank.html\" class=\"nav-link\">
                  <i class=\"far fa-circle nav-icon\"></i>
                  <p>Blank Page</p>
                </a>
              </li>
              <li class=\"nav-item\">
                <a href=\"starter.html\" class=\"nav-link\">
                  <i class=\"far fa-circle nav-icon\"></i>
                  <p>Starter Page</p>
                </a>
              </li>
            </ul>
          </li>


        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class=\"content-wrapper\">
    <!-- Content Header (Page header) -->
    <div class=\"content-header\">
      <div class=\"container-fluid\">
        <div class=\"row mb-2\">
          ";
        // line 449
        $this->displayBlock('body', $context, $blocks);
        // line 452
        echo "          <!-- /.col -->
          ";
        // line 459
        echo "
          <!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->

    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Control Sidebar -->
  <aside class=\"control-sidebar control-sidebar-dark\">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->

  <!-- Main Footer -->
  <footer class=\"main-footer\">
    <strong>Copyright &copy; 2014-2019 <a href=\"http://adminlte.io\">AdminLTE.io</a>.</strong>
    All rights reserved.
    <div class=\"float-right d-none d-sm-inline-block\">
      <b>Version</b> 3.0.1
    </div>
  </footer>
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->
<!-- jQuery -->
<script src=\"";
        // line 491
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("back/plugins/jquery/jquery.min.js"), "html", null, true);
        echo "\"></script>
<!-- Bootstrap -->
<script src=\"";
        // line 493
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("back/plugins/bootstrap/js/bootstrap.bundle.min.js"), "html", null, true);
        echo "\"></script>
<!-- overlayScrollbars -->
<script src=\"";
        // line 495
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("back/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"), "html", null, true);
        echo "\"></script>
<!-- AdminLTE App -->
<script src=\"";
        // line 497
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("back/dist/js/adminlte.js"), "html", null, true);
        echo "\"></script>

<!-- OPTIONAL SCRIPTS -->
<script src=\"";
        // line 500
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("back/dist/js/demo.js"), "html", null, true);
        echo "\"></script>

<!-- PAGE PLUGINS -->
<!-- jQuery Mapael -->
<script src=\"";
        // line 504
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("back/plugins/jquery-mousewheel/jquery.mousewheel.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 505
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("back/plugins/raphael/raphael.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 506
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("back/plugins/jquery-mapael/jquery.mapael.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 507
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("back/plugins/jquery-mapael/maps/usa_states.min.js"), "html", null, true);
        echo "\"></script>
<!-- ChartJS -->
<script src=\"";
        // line 509
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("back/plugins/chart.js/Chart.min.js"), "html", null, true);
        echo "\"></script>

<!-- PAGE SCRIPTS -->
<script src=\"";
        // line 512
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("back/dist/js/pages/dashboard2.js"), "html", null, true);
        echo "\"></script>
</body>
</html>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 449
    public function block_body($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 450
        echo "
          ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "template.html.twig.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  624 => 450,  615 => 449,  601 => 512,  595 => 509,  590 => 507,  586 => 506,  582 => 505,  578 => 504,  571 => 500,  565 => 497,  560 => 495,  555 => 493,  550 => 491,  516 => 459,  513 => 452,  511 => 449,  216 => 157,  203 => 147,  145 => 92,  126 => 76,  107 => 60,  59 => 15,  54 => 13,  49 => 11,  37 => 1,);
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
<html lang=\"en\">
<head>
  <meta charset=\"utf-8\">
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
  <meta http-equiv=\"x-ua-compatible\" content=\"ie=edge\">

  <title>AdminLTE 3 | Dashboard 2</title>

  <!-- Font Awesome Icons -->
  <link rel=\"stylesheet\" href=\"{{ asset('back/plugins/fontawesome-free/css/all.min.css')}}\">
  <!-- overlayScrollbars -->
  <link rel=\"stylesheet\" href=\"{{ asset('back/plugins/overlayScrollbars/css/OverlayScrollbars.min.css')}}\">
  <!-- Theme style -->
  <link rel=\"stylesheet\" href=\"{{ asset('back/dist/css/adminlte.min.css')}}\">
  <!-- Google Font: Source Sans Pro -->
  <link href=\"https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700\" rel=\"stylesheet\">
</head>
<body class=\"hold-transition sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed\">
<div class=\"wrapper\">
  <!-- Navbar -->
  <nav class=\"main-header navbar navbar-expand navbar-white navbar-light\">
    <!-- Left navbar links -->
    <ul class=\"navbar-nav\">
      <li class=\"nav-item\">
        <a class=\"nav-link\" data-widget=\"pushmenu\" href=\"#\"><i class=\"fas fa-bars\"></i></a>
      </li>
      <li class=\"nav-item d-none d-sm-inline-block\">
        <a href=\"index3.html\" class=\"nav-link\">Home</a>
      </li>
      <li class=\"nav-item d-none d-sm-inline-block\">
        <a href=\"#\" class=\"nav-link\">Contact</a>
      </li>
    </ul>

    <!-- SEARCH FORM -->
    <form class=\"form-inline ml-3\">
      <div class=\"input-group input-group-sm\">
        <input class=\"form-control form-control-navbar\" type=\"search\" placeholder=\"Search\" aria-label=\"Search\">
        <div class=\"input-group-append\">
          <button class=\"btn btn-navbar\" type=\"submit\">
            <i class=\"fas fa-search\"></i>
          </button>
        </div>
      </div>
    </form>

    <!-- Right navbar links -->
    <ul class=\"navbar-nav ml-auto\">
      <!-- Messages Dropdown Menu -->
      <li class=\"nav-item dropdown\">
        <a class=\"nav-link\" data-toggle=\"dropdown\" href=\"#\">
          <i class=\"far fa-comments\"></i>
          <span class=\"badge badge-danger navbar-badge\">3</span>
        </a>
        <div class=\"dropdown-menu dropdown-menu-lg dropdown-menu-right\">
          <a href=\"#\" class=\"dropdown-item\">
            <!-- Message Start -->
            <div class=\"media\">
              <img src=\"{{ asset('back/dist/img/user1-128x128.jpg\" alt=\"User Avatar\" class=\"img-size-50 mr-3 img-circle')}}\">
              <div class=\"media-body\">
                <h3 class=\"dropdown-item-title\">
                  Brad Diesel
                  <span class=\"float-right text-sm text-danger\"><i class=\"fas fa-star\"></i></span>
                </h3>
                <p class=\"text-sm\">Call me whenever you can...</p>
                <p class=\"text-sm text-muted\"><i class=\"far fa-clock mr-1\"></i> 4 Hours Ago</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class=\"dropdown-divider\"></div>
          <a href=\"#\" class=\"dropdown-item\">
            <!-- Message Start -->
            <div class=\"media\">
              <img src=\"{{ asset('back/dist/img/user8-128x128.jpg\" alt=\"User Avatar')}}\" class=\"img-size-50 img-circle mr-3\">
              <div class=\"media-body\">
                <h3 class=\"dropdown-item-title\">
                  John Pierce
                  <span class=\"float-right text-sm text-muted\"><i class=\"fas fa-star\"></i></span>
                </h3>
                <p class=\"text-sm\">I got your message bro</p>
                <p class=\"text-sm text-muted\"><i class=\"far fa-clock mr-1\"></i> 4 Hours Ago</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class=\"dropdown-divider\"></div>
          <a href=\"#\" class=\"dropdown-item\">
            <!-- Message Start -->
            <div class=\"media\">
              <img src=\"{{ asset('back/dist/img/user3-128x128.jpg')}}\" alt=\"User Avatar\" class=\"img-size-50 img-circle mr-3\">
              <div class=\"media-body\">
                <h3 class=\"dropdown-item-title\">
                  Nora Silvester
                  <span class=\"float-right text-sm text-warning\"><i class=\"fas fa-star\"></i></span>
                </h3>
                <p class=\"text-sm\">The subject goes here</p>
                <p class=\"text-sm text-muted\"><i class=\"far fa-clock mr-1\"></i> 4 Hours Ago</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class=\"dropdown-divider\"></div>
          <a href=\"#\" class=\"dropdown-item dropdown-footer\">See All Messages</a>
        </div>
      </li>
      <!-- Notifications Dropdown Menu -->
      <li class=\"nav-item dropdown\">
        <a class=\"nav-link\" data-toggle=\"dropdown\" href=\"#\">
          <i class=\"far fa-bell\"></i>
          <span class=\"badge badge-warning navbar-badge\">15</span>
        </a>
        <div class=\"dropdown-menu dropdown-menu-lg dropdown-menu-right\">
          <span class=\"dropdown-item dropdown-header\">15 Notifications</span>
          <div class=\"dropdown-divider\"></div>
          <a href=\"#\" class=\"dropdown-item\">
            <i class=\"fas fa-envelope mr-2\"></i> 4 new messages
            <span class=\"float-right text-muted text-sm\">3 mins</span>
          </a>
          <div class=\"dropdown-divider\"></div>
          <a href=\"#\" class=\"dropdown-item\">
            <i class=\"fas fa-users mr-2\"></i> 8 friend requests
            <span class=\"float-right text-muted text-sm\">12 hours</span>
          </a>
          <div class=\"dropdown-divider\"></div>
          <a href=\"#\" class=\"dropdown-item\">
            <i class=\"fas fa-file mr-2\"></i> 3 new reports
            <span class=\"float-right text-muted text-sm\">2 days</span>
          </a>
          <div class=\"dropdown-divider\"></div>
          <a href=\"#\" class=\"dropdown-item dropdown-footer\">See All Notifications</a>
        </div>
      </li>
      <li class=\"nav-item\">
        <a class=\"nav-link\" data-widget=\"control-sidebar\" data-slide=\"true\" href=\"#\"><i
                class=\"fas fa-th-large\"></i></a>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class=\"main-sidebar sidebar-dark-primary elevation-4\">
    <!-- Brand Logo -->
    <a href=\"index3.html\" class=\"brand-link\">
      <img src=\"{{ asset('back/dist/img/AdminLTELogo.png')}}\" alt=\"AdminLTE Logo\" class=\"brand-image img-circle elevation-3\"
           style=\"opacity: .8\">
      <span class=\"brand-text font-weight-light\">AdminLTE 3</span>
    </a>

    <!-- Sidebar -->
    <div class=\"sidebar\">
      <!-- Sidebar user panel (optional) -->
      <div class=\"user-panel mt-3 pb-3 mb-3 d-flex\">
        <div class=\"image\">
          <img src=\"{{ asset('back/dist/img/user2-160x160.jpg')}}\" class=\"img-circle elevation-2\" alt=\"User Image\">
        </div>
        <div class=\"info\">
          <a href=\"#\" class=\"d-block\">Alexander Pierce</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class=\"mt-2\">
        <ul class=\"nav nav-pills nav-sidebar flex-column\" data-widget=\"treeview\" role=\"menu\" data-accordion=\"false\">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class=\"nav-item has-treeview menu-open\">
            <a href=\"#\" class=\"nav-link active\">
              <i class=\"nav-icon fas fa-tachometer-alt\"></i>
              <p>
                Dashboard
                <i class=\"right fas fa-angle-left\"></i>
              </p>
            </a>
            <ul class=\"nav nav-treeview\">
              <li class=\"nav-item\">
                <a href=\"./index.html\" class=\"nav-link\">
                  <i class=\"far fa-circle nav-icon\"></i>
                  <p>Dashboard v1</p>
                </a>
              </li>
              <li class=\"nav-item\">
                <a href=\"./index2.html\" class=\"nav-link active\">
                  <i class=\"far fa-circle nav-icon\"></i>
                  <p>Dashboard v2</p>
                </a>
              </li>
              <li class=\"nav-item\">
                <a href=\"./index3.html\" class=\"nav-link\">
                  <i class=\"far fa-circle nav-icon\"></i>
                  <p>Dashboard v3</p>
                </a>
              </li>
            </ul>
          </li>
          <li class=\"nav-item\">
            <a href=\"pages/widgets.html\" class=\"nav-link\">
              <i class=\"nav-icon fas fa-th\"></i>
              <p>
                Widgets
                <span class=\"right badge badge-danger\">New</span>
              </p>
            </a>
          </li>
          <li class=\"nav-item has-treeview\">
            <a href=\"#\" class=\"nav-link\">
              <i class=\"nav-icon fas fa-copy\"></i>
              <p>
                Settings
                <i class=\"fas fa-angle-left right\"></i>
                <span class=\"badge badge-info right\">6</span>
              </p>
            </a>
            <ul class=\"nav nav-treeview\">
              <li class=\"nav-item\">
                <a href=\"pages/layout/top-nav.html\" class=\"nav-link\">
                  <i class=\"far fa-circle nav-icon\"></i>
                  <p>Deals</p>
                </a>
              </li>
              <li class=\"nav-item\">
                <a href=\"pages/layout/boxed.html\" class=\"nav-link\">
                  <i class=\"far fa-circle nav-icon\"></i>
                  <p>Deal's Category</p>
                </a>
              </li>
              <li class=\"nav-item\">
                <a href=\"pages/layout/fixed-sidebar.html\" class=\"nav-link\">
                  <i class=\"far fa-circle nav-icon\"></i>
                  <p>Admin's Deals</p>
                </a>
              </li>
              <li class=\"nav-item\">
                <a href=\"pages/layout/fixed-topnav.html\" class=\"nav-link\">
                  <i class=\"far fa-circle nav-icon\"></i>
                  <p> Nothing </p>
                </a>
              </li>

              <li class=\"nav-item\">
                <a href=\"pages/layout/fixed-footer.html\" class=\"nav-link\">
                  <i class=\"far fa-circle nav-icon\"></i>
                  <p>Nothing</p>
                </a>
              </li>
              <li class=\"nav-item\">
                <a href=\"pages/layout/collapsed-sidebar.html\" class=\"nav-link\">
                  <i class=\"far fa-circle nav-icon\"></i>
                  <p> Nothing </p>
                </a>
              </li>
            </ul>

          </li>






          <li class=\"nav-item has-treeview\">
            <a href=\"#\" class=\"nav-link\">
              <i class=\"nav-icon far fa-envelope\"></i>
              <p>
                Mailbox
                <i class=\"fas fa-angle-left right\"></i>
              </p>
            </a>
            <ul class=\"nav nav-treeview\">
              <li class=\"nav-item\">
                <a href=\"pages/mailbox/mailbox.html\" class=\"nav-link\">
                  <i class=\"far fa-circle nav-icon\"></i>
                  <p>Inbox</p>
                </a>
              </li>
              <li class=\"nav-item\">
                <a href=\"pages/mailbox/compose.html\" class=\"nav-link\">
                  <i class=\"far fa-circle nav-icon\"></i>
                  <p>Compose</p>
                </a>
              </li>
              <li class=\"nav-item\">
                <a href=\"pages/mailbox/read-mail.html\" class=\"nav-link\">
                  <i class=\"far fa-circle nav-icon\"></i>
                  <p>Read</p>
                </a>
              </li>
            </ul>
          </li>
          <li class=\"nav-item has-treeview\">
            <a href=\"#\" class=\"nav-link\">
              <i class=\"nav-icon fas fa-book\"></i>
              <p>
                Pages
                <i class=\"fas fa-angle-left right\"></i>
              </p>
            </a>
            <ul class=\"nav nav-treeview\">
              <li class=\"nav-item\">
                <a href=\"pages/examples/invoice.html\" class=\"nav-link\">
                  <i class=\"far fa-circle nav-icon\"></i>
                  <p>Invoice</p>
                </a>
              </li>
              <li class=\"nav-item\">
                <a href=\"pages/examples/profile.html\" class=\"nav-link\">
                  <i class=\"far fa-circle nav-icon\"></i>
                  <p>Profile</p>
                </a>
              </li>
              <li class=\"nav-item\">
                <a href=\"pages/examples/e_commerce.html\" class=\"nav-link\">
                  <i class=\"far fa-circle nav-icon\"></i>
                  <p>E-commerce</p>
                </a>
              </li>
              <li class=\"nav-item\">
                <a href=\"pages/examples/projects.html\" class=\"nav-link\">
                  <i class=\"far fa-circle nav-icon\"></i>
                  <p>Projects</p>
                </a>
              </li>
              <li class=\"nav-item\">
                <a href=\"pages/examples/project_add.html\" class=\"nav-link\">
                  <i class=\"far fa-circle nav-icon\"></i>
                  <p>Project Add</p>
                </a>
              </li>
              <li class=\"nav-item\">
                <a href=\"pages/examples/project_edit.html\" class=\"nav-link\">
                  <i class=\"far fa-circle nav-icon\"></i>
                  <p>Project Edit</p>
                </a>
              </li>
              <li class=\"nav-item\">
                <a href=\"pages/examples/project_detail.html\" class=\"nav-link\">
                  <i class=\"far fa-circle nav-icon\"></i>
                  <p>Project Detail</p>
                </a>
              </li>
              <li class=\"nav-item\">
                <a href=\"pages/examples/contacts.html\" class=\"nav-link\">
                  <i class=\"far fa-circle nav-icon\"></i>
                  <p>Contacts</p>
                </a>
              </li>
            </ul>
          </li>
          <li class=\"nav-item has-treeview\">
            <a href=\"#\" class=\"nav-link\">
              <i class=\"nav-icon far fa-plus-square\"></i>
              <p>
                Extras
                <i class=\"fas fa-angle-left right\"></i>
              </p>
            </a>
            <ul class=\"nav nav-treeview\">
              <li class=\"nav-item\">
                <a href=\"pages/examples/login.html\" class=\"nav-link\">
                  <i class=\"far fa-circle nav-icon\"></i>
                  <p>Login</p>
                </a>
              </li>
              <li class=\"nav-item\">
                <a href=\"pages/examples/register.html\" class=\"nav-link\">
                  <i class=\"far fa-circle nav-icon\"></i>
                  <p>Register</p>
                </a>
              </li>
              <li class=\"nav-item\">
                <a href=\"pages/examples/forgot-password.html\" class=\"nav-link\">
                  <i class=\"far fa-circle nav-icon\"></i>
                  <p>Forgot Password</p>
                </a>
              </li>
              <li class=\"nav-item\">
                <a href=\"pages/examples/recover-password.html\" class=\"nav-link\">
                  <i class=\"far fa-circle nav-icon\"></i>
                  <p>Recover Password</p>
                </a>
              </li>
              <li class=\"nav-item\">
                <a href=\"pages/examples/lockscreen.html\" class=\"nav-link\">
                  <i class=\"far fa-circle nav-icon\"></i>
                  <p>Lockscreen</p>
                </a>
              </li>
              <li class=\"nav-item\">
                <a href=\"pages/examples/legacy-user-menu.html\" class=\"nav-link\">
                  <i class=\"far fa-circle nav-icon\"></i>
                  <p>Legacy User Menu</p>
                </a>
              </li>
              <li class=\"nav-item\">
                <a href=\"pages/examples/language-menu.html\" class=\"nav-link\">
                  <i class=\"far fa-circle nav-icon\"></i>
                  <p>Language Menu</p>
                </a>
              </li>
              <li class=\"nav-item\">
                <a href=\"pages/examples/404.html\" class=\"nav-link\">
                  <i class=\"far fa-circle nav-icon\"></i>
                  <p>Error 404</p>
                </a>
              </li>
              <li class=\"nav-item\">
                <a href=\"pages/examples/500.html\" class=\"nav-link\">
                  <i class=\"far fa-circle nav-icon\"></i>
                  <p>Error 500</p>
                </a>
              </li>
              <li class=\"nav-item\">
                <a href=\"pages/examples/pace.html\" class=\"nav-link\">
                  <i class=\"far fa-circle nav-icon\"></i>
                  <p>Pace</p>
                </a>
              </li>
              <li class=\"nav-item\">
                <a href=\"pages/examples/blank.html\" class=\"nav-link\">
                  <i class=\"far fa-circle nav-icon\"></i>
                  <p>Blank Page</p>
                </a>
              </li>
              <li class=\"nav-item\">
                <a href=\"starter.html\" class=\"nav-link\">
                  <i class=\"far fa-circle nav-icon\"></i>
                  <p>Starter Page</p>
                </a>
              </li>
            </ul>
          </li>


        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class=\"content-wrapper\">
    <!-- Content Header (Page header) -->
    <div class=\"content-header\">
      <div class=\"container-fluid\">
        <div class=\"row mb-2\">
          {% block body %}

          {% endblock %}
          <!-- /.col -->
          {#<div class=\"col-sm-6\">
          <ol class=\"breadcrumb float-sm-right\">
            <li class=\"breadcrumb-item\"><a href=\"#\">Home</a></li>
            <li class=\"breadcrumb-item active\">Dashboard v2</li>
          </ol>
        </div>#}

          <!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->

    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Control Sidebar -->
  <aside class=\"control-sidebar control-sidebar-dark\">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->

  <!-- Main Footer -->
  <footer class=\"main-footer\">
    <strong>Copyright &copy; 2014-2019 <a href=\"http://adminlte.io\">AdminLTE.io</a>.</strong>
    All rights reserved.
    <div class=\"float-right d-none d-sm-inline-block\">
      <b>Version</b> 3.0.1
    </div>
  </footer>
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->
<!-- jQuery -->
<script src=\"{{ asset('back/plugins/jquery/jquery.min.js')}}\"></script>
<!-- Bootstrap -->
<script src=\"{{ asset('back/plugins/bootstrap/js/bootstrap.bundle.min.js')}}\"></script>
<!-- overlayScrollbars -->
<script src=\"{{ asset('back/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js')}}\"></script>
<!-- AdminLTE App -->
<script src=\"{{ asset('back/dist/js/adminlte.js')}}\"></script>

<!-- OPTIONAL SCRIPTS -->
<script src=\"{{ asset('back/dist/js/demo.js')}}\"></script>

<!-- PAGE PLUGINS -->
<!-- jQuery Mapael -->
<script src=\"{{ asset('back/plugins/jquery-mousewheel/jquery.mousewheel.js')}}\"></script>
<script src=\"{{ asset('back/plugins/raphael/raphael.min.js')}}\"></script>
<script src=\"{{ asset('back/plugins/jquery-mapael/jquery.mapael.min.js')}}\"></script>
<script src=\"{{ asset('back/plugins/jquery-mapael/maps/usa_states.min.js')}}\"></script>
<!-- ChartJS -->
<script src=\"{{ asset('back/plugins/chart.js/Chart.min.js')}}\"></script>

<!-- PAGE SCRIPTS -->
<script src=\"{{ asset('back/dist/js/pages/dashboard2.js')}}\"></script>
</body>
</html>
", "template.html.twig.twig", "C:\\wamp64\\www\\Chick_Click\\app\\Resources\\views\\template.html.twig.twig");
    }
}
