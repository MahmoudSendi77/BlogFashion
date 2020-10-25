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

/* base_back_admin.html.twig */
class __TwigTemplate_40edcb8b1041afe1fec670998a20092c50c8ab4a7af8c2055dc41c1c39d8120f extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'stylesheets' => [$this, 'block_stylesheets'],
            'body' => [$this, 'block_body'],
            'navbar' => [$this, 'block_navbar'],
            'header' => [$this, 'block_header'],
            'other' => [$this, 'block_other'],
            'service' => [$this, 'block_service'],
            'eventGrid' => [$this, 'block_eventGrid'],
            'about' => [$this, 'block_about'],
            'team' => [$this, 'block_team'],
            'client' => [$this, 'block_client'],
            'contact' => [$this, 'block_contact'],
            'footer' => [$this, 'block_footer'],
            'modalEvent' => [$this, 'block_modalEvent'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base_back_admin.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base_back_admin.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        ";
        // line 4
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 33
        echo "    </head>
    <body>

        ";
        // line 36
        $this->displayBlock('body', $context, $blocks);
        // line 764
        echo "    </body>
</html>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 4
    public function block_stylesheets($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 5
        echo "            <meta charset=\"utf-8\">
            <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
            <meta name=\"description\" content=\"\">
            <meta name=\"author\" content=\"\">

            <title>Click Chick Blog</title>


            <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("eventStyle/styles/bootstrap4/bootstrap.min.css"), "html", null, true);
        echo "\">
            <link href=\"plugins/font-awesome-4.7.0/css/font-awesome.min.css\" rel=\"stylesheet\" type=\"text/css\">
            <link rel=\"stylesheet\" type=\"text/css\" href=\"plugins/OwlCarousel2-2.2.1/owl.carousel.css\">
            <link rel=\"stylesheet\" type=\"text/css\" href=\"plugins/OwlCarousel2-2.2.1/owl.theme.default.css\">
            <link rel=\"stylesheet\" type=\"text/css\" href=\"plugins/OwlCarousel2-2.2.1/animate.css\">
            <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("eventStyle/styles/events.css"), "html", null, true);
        echo "\">
            <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("eventStyle/styles/events_responsive.css"), "html", null, true);
        echo "\">


            <!-- Bootstrap core CSS -->
            <link href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("vendor/bootstrap/css/bootstrap.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
            <!-- Custom fonts for this template -->
            <link href=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("vendor/fontawesome-free/css/all.css\" rel=\"stylesheet\" type=\"text/css"), "html", null, true);
        echo "\">
            <link href=\"https://fonts.googleapis.com/css?family=Montserrat:400,700\" rel=\"stylesheet\" type=\"text/css\">
            <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
            <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
            <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>
            <!-- Custom styles for this template -->
            <link href=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/agency.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 36
    public function block_body($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 37
        echo "        ";
        $this->displayBlock('navbar', $context, $blocks);
        // line 79
        echo "
        ";
        // line 80
        $this->displayBlock('header', $context, $blocks);
        // line 93
        echo "
        ";
        // line 94
        $this->displayBlock('other', $context, $blocks);
        // line 762
        echo "
        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 37
    public function block_navbar($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "navbar"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "navbar"));

        // line 38
        echo "            <!-- Navigation -->


            <nav class=\"navbar navbar-expand-md navbar-dark fixed-top\" id=\"mainNav\" style=\"background-color: #343a40\">
                <div class=\"container\">

                        <a class=\"navbar-brand js-scroll-trigger\" href=\"#page-top\">Chick Click</a>
                    <button class=\"navbar-toggler navbar-toggler-right\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarResponsive\" aria-controls=\"navbarResponsive\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
                        Menu
                        <i class=\"fas fa-bars\"></i>
                    </button>
                    <div class=\"collapse navbar-collapse\" id=\"navbarResponsive\" style=\"background-color: #343a40\">
                        <ul class=\"navbar-nav text-uppercase ml-auto\">
                            <li class=\"nav-item\">
                                <a class=\"nav-link js-scroll-trigger\" href=\"#services\">HOME</a>
                            </li>
                            <li class=\"nav-item\">
                                <a class=\"nav-link js-scroll-trigger\" href=\"";
        // line 55
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("show_event");
        echo "\">EVENTS</a>
                            </li>
                            <li class=\"nav-item\">
                                <a class=\"nav-link js-scroll-trigger\" href=\"#about\">About</a>
                            </li>
                            <li class=\"nav-item\">
                                <a class=\"nav-link js-scroll-trigger\" href=\"#team\">Team</a>
                            </li>
                            <li class=\"nav-item\">
                                <a class=\"nav-link js-scroll-trigger\" href=\"#contact\">Contact</a>
                            </li>
                            <li class=\"nav-item\">
                                <a class=\"nav-link js-scroll-trigger\" href=\"";
        // line 67
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_space");
        echo "\">MANAGE AS ADMIN</a>
                            </li>
                            <li class=\"nav-item\">
                                <a class=\"nav-link js-scroll-trigger\" href=\"";
        // line 70
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_logout");
        echo "\">LOGOUT</a>
                            </li>

                        </ul>
                    </div>
                </div>

            </nav>
        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 80
    public function block_header($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header"));

        // line 81
        echo "            <!-- Header -->
            <header class=\"masthead h-25\">
                <div class=\"container\">
                    <div class=\"intro-text\">
                        <div class=\"intro-lead-in\">Welcome To Chick Click!</div>
                        <div class=\"intro-heading text-uppercase\">It's Nice To Meet You </div>
                        <a class=\"btn btn-primary btn-xl text-uppercase js-scroll-trigger\" href=\"#services\">Tell Me More</a>
                    </div>
                </div>
            </header>

        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 94
    public function block_other($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "other"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "other"));

        // line 95
        echo "
            <!-- Services -->
            ";
        // line 97
        $this->displayBlock('service', $context, $blocks);
        // line 136
        echo "
        ";
        // line 137
        $this->displayBlock('eventGrid', $context, $blocks);
        // line 237
        echo "        ";
        $this->displayBlock('about', $context, $blocks);
        // line 319
        echo "        ";
        $this->displayBlock('team', $context, $blocks);
        // line 411
        echo "        ";
        $this->displayBlock('client', $context, $blocks);
        // line 440
        echo "        ";
        $this->displayBlock('contact', $context, $blocks);
        // line 486
        echo "            ";
        $this->displayBlock('footer', $context, $blocks);
        // line 527
        echo "
            <!-- Portfolio Modals -->
        ";
        // line 529
        $this->displayBlock('modalEvent', $context, $blocks);
        // line 734
        echo "            ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 760
        echo "
        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 97
    public function block_service($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "service"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "service"));

        // line 98
        echo "            <section class=\"page-section\" id=\"services\">
                <div class=\"container\">
                    <div class=\"row\">
                        <div class=\"col-lg-12 text-center\">
                            <h2 class=\"section-heading text-uppercase\">Services</h2>
                            <h3 class=\"section-subheading text-muted\">Lorem ipsum dolor sit amet consectetur.</h3>
                        </div>
                    </div>
                    <div class=\"row text-center\">
                        <div class=\"col-md-4\">
          <span class=\"fa-stack fa-4x\">
            <i class=\"fas fa-circle fa-stack-2x text-primary\"></i>
            <i class=\"fas fa-shopping-cart fa-stack-1x fa-inverse\"></i>
          </span>
                            <h4 class=\"service-heading\">E-Commerce</h4>
                            <p class=\"text-muted\">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima maxime quam architecto quo inventore harum ex magni, dicta impedit.</p>
                        </div>
                        <div class=\"col-md-4\">
          <span class=\"fa-stack fa-4x\">
            <i class=\"fas fa-circle fa-stack-2x text-primary\"></i>
            <i class=\"fas fa-laptop fa-stack-1x fa-inverse\"></i>
          </span>
                            <h4 class=\"service-heading\">Responsive Design</h4>
                            <p class=\"text-muted\">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima maxime quam architecto quo inventore harum ex magni, dicta impedit.</p>
                        </div>
                        <div class=\"col-md-4\">
          <span class=\"fa-stack fa-4x\">
            <i class=\"fas fa-circle fa-stack-2x text-primary\"></i>
            <i class=\"fas fa-lock fa-stack-1x fa-inverse\"></i>
          </span>
                            <h4 class=\"service-heading\">Web Security</h4>
                            <p class=\"text-muted\">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima maxime quam architecto quo inventore harum ex magni, dicta impedit.</p>
                        </div>
                    </div>
                </div>
            </section>

            ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 137
    public function block_eventGrid($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "eventGrid"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "eventGrid"));

        // line 138
        echo "            <!-- Event Grid -->
            <section class=\"bg-light page-section\" id=\"portfolio\">
                <div class=\"container\">
                    <div class=\"row\">
                        <div class=\"col-lg-12 text-center\">
                            <h2 class=\"section-heading text-uppercase\">Portfolio</h2>
                            <h3 class=\"section-subheading text-muted\">Lorem ipsum dolor sit amet consectetur.</h3>
                        </div>
                    </div>
                    <div class=\"row\">
                        <div class=\"col-md-4 col-sm-6 portfolio-item\">
                            <a class=\"portfolio-link\" data-toggle=\"modal\" href=\"#portfolioModal1\">
                                <div class=\"portfolio-hover\">
                                    <div class=\"portfolio-hover-content\">
                                        <i class=\"fas fa-plus fa-3x\"></i>
                                    </div>
                                </div>
                                <img class=\"img-fluid\" src=\"img/portfolio/01-thumbnail.jpg\" alt=\"\">
                            </a>
                            <div class=\"portfolio-caption\">
                                <h4>Threads</h4>
                                <p class=\"text-muted\">Illustration</p>
                            </div>
                        </div>
                        <div class=\"col-md-4 col-sm-6 portfolio-item\">
                            <a class=\"portfolio-link\" data-toggle=\"modal\" href=\"#portfolioModal2\">
                                <div class=\"portfolio-hover\">
                                    <div class=\"portfolio-hover-content\">
                                        <i class=\"fas fa-plus fa-3x\"></i>
                                    </div>
                                </div>
                                <img class=\"img-fluid\" src=\"img/portfolio/02-thumbnail.jpg\" alt=\"\">
                            </a>
                            <div class=\"portfolio-caption\">
                                <h4>Explore</h4>
                                <p class=\"text-muted\">Graphic Design</p>
                            </div>
                        </div>
                        <div class=\"col-md-4 col-sm-6 portfolio-item\">
                            <a class=\"portfolio-link\" data-toggle=\"modal\" href=\"#portfolioModal3\">
                                <div class=\"portfolio-hover\">
                                    <div class=\"portfolio-hover-content\">
                                        <i class=\"fas fa-plus fa-3x\"></i>
                                    </div>
                                </div>
                                <img class=\"img-fluid\" src=\"img/portfolio/03-thumbnail.jpg\" alt=\"\">
                            </a>
                            <div class=\"portfolio-caption\">
                                <h4>Finish</h4>
                                <p class=\"text-muted\">Identity</p>
                            </div>
                        </div>
                        <div class=\"col-md-4 col-sm-6 portfolio-item\">
                            <a class=\"portfolio-link\" data-toggle=\"modal\" href=\"#portfolioModal4\">
                                <div class=\"portfolio-hover\">
                                    <div class=\"portfolio-hover-content\">
                                        <i class=\"fas fa-plus fa-3x\"></i>
                                    </div>
                                </div>
                                <img class=\"img-fluid\" src=\"img/portfolio/04-thumbnail.jpg\" alt=\"\">
                            </a>
                            <div class=\"portfolio-caption\">
                                <h4>Lines</h4>
                                <p class=\"text-muted\">Branding</p>
                            </div>
                        </div>
                        <div class=\"col-md-4 col-sm-6 portfolio-item\">
                            <a class=\"portfolio-link\" data-toggle=\"modal\" href=\"#portfolioModal5\">
                                <div class=\"portfolio-hover\">
                                    <div class=\"portfolio-hover-content\">
                                        <i class=\"fas fa-plus fa-3x\"></i>
                                    </div>
                                </div>
                                <img class=\"img-fluid\" src=\"img/portfolio/05-thumbnail.jpg\" alt=\"\">
                            </a>
                            <div class=\"portfolio-caption\">
                                <h4>Southwest</h4>
                                <p class=\"text-muted\">Website Design</p>
                            </div>
                        </div>
                        <div class=\"col-md-4 col-sm-6 portfolio-item\">
                            <a class=\"portfolio-link\" data-toggle=\"modal\" href=\"#portfolioModal6\">
                                <div class=\"portfolio-hover\">
                                    <div class=\"portfolio-hover-content\">
                                        <i class=\"fas fa-plus fa-3x\"></i>
                                    </div>
                                </div>
                                <img class=\"img-fluid\" src=\"img/portfolio/06-thumbnail.jpg\" alt=\"\">
                            </a>
                            <div class=\"portfolio-caption\">
                                <h4>Window</h4>
                                <p class=\"text-muted\">Photography</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 237
    public function block_about($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "about"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "about"));

        // line 238
        echo "            <!-- About -->
            <section class=\"page-section\" id=\"about\">
                <div class=\"container\">
                    <div class=\"row\">
                        <div class=\"col-lg-12 text-center\">
                            <h2 class=\"section-heading text-uppercase\">About</h2>
                            <h3 class=\"section-subheading text-muted\">Lorem ipsum dolor sit amet consectetur.</h3>
                        </div>
                    </div>
                    <div class=\"row\">
                        <div class=\"col-lg-12\">
                            <ul class=\"timeline\">
                                <li>
                                    <div class=\"timeline-image\">
                                        <img class=\"rounded-circle img-fluid\" src=\"img/about/1.jpg\" alt=\"\">
                                    </div>
                                    <div class=\"timeline-panel\">
                                        <div class=\"timeline-heading\">
                                            <h4>2009-2011</h4>
                                            <h4 class=\"subheading\">Our Humble Beginnings</h4>
                                        </div>
                                        <div class=\"timeline-body\">
                                            <p class=\"text-muted\">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt ut voluptatum eius sapiente, totam reiciendis temporibus qui quibusdam, recusandae sit vero unde, sed, incidunt et ea quo dolore laudantium consectetur!</p>
                                        </div>
                                    </div>
                                </li>
                                <li class=\"timeline-inverted\">
                                    <div class=\"timeline-image\">
                                        <img class=\"rounded-circle img-fluid\" src=\"img/about/2.jpg\" alt=\"\">
                                    </div>
                                    <div class=\"timeline-panel\">
                                        <div class=\"timeline-heading\">
                                            <h4>March 2011</h4>
                                            <h4 class=\"subheading\">An Agency is Born</h4>
                                        </div>
                                        <div class=\"timeline-body\">
                                            <p class=\"text-muted\">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt ut voluptatum eius sapiente, totam reiciendis temporibus qui quibusdam, recusandae sit vero unde, sed, incidunt et ea quo dolore laudantium consectetur!</p>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class=\"timeline-image\">
                                        <img class=\"rounded-circle img-fluid\" src=\"img/about/3.jpg\" alt=\"\">
                                    </div>
                                    <div class=\"timeline-panel\">
                                        <div class=\"timeline-heading\">
                                            <h4>December 2012</h4>
                                            <h4 class=\"subheading\">Transition to Full Service</h4>
                                        </div>
                                        <div class=\"timeline-body\">
                                            <p class=\"text-muted\">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt ut voluptatum eius sapiente, totam reiciendis temporibus qui quibusdam, recusandae sit vero unde, sed, incidunt et ea quo dolore laudantium consectetur!</p>
                                        </div>
                                    </div>
                                </li>
                                <li class=\"timeline-inverted\">
                                    <div class=\"timeline-image\">
                                        <img class=\"rounded-circle img-fluid\" src=\"img/about/4.jpg\" alt=\"\">
                                    </div>
                                    <div class=\"timeline-panel\">
                                        <div class=\"timeline-heading\">
                                            <h4>July 2014</h4>
                                            <h4 class=\"subheading\">Phase Two Expansion</h4>
                                        </div>
                                        <div class=\"timeline-body\">
                                            <p class=\"text-muted\">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt ut voluptatum eius sapiente, totam reiciendis temporibus qui quibusdam, recusandae sit vero unde, sed, incidunt et ea quo dolore laudantium consectetur!</p>
                                        </div>
                                    </div>
                                </li>
                                <li class=\"timeline-inverted\">
                                    <div class=\"timeline-image\">
                                        <h4>Be Part
                                            <br>Of Our
                                            <br>Story!</h4>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </section>
        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 319
    public function block_team($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "team"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "team"));

        // line 320
        echo "            <!-- Team -->
            <section class=\"bg-light page-section\" id=\"team\">
                <div class=\"container\">
                    <div class=\"row\">
                        <div class=\"col-lg-12 text-center\">
                            <h2 class=\"section-heading text-uppercase\">Our Amazing Team</h2>
                            <h3 class=\"section-subheading text-muted\">Lorem ipsum dolor sit amet consectetur.</h3>
                        </div>
                    </div>
                    <div class=\"row\">
                        <div class=\"col-sm-4\">
                            <div class=\"team-member\">
                                <img class=\"mx-auto rounded-circle\" src=\"img/team/1.jpg\" alt=\"\">
                                <h4>Kay Garland</h4>
                                <p class=\"text-muted\">Lead Designer</p>
                                <ul class=\"list-inline social-buttons\">
                                    <li class=\"list-inline-item\">
                                        <a href=\"#\">
                                            <i class=\"fab fa-twitter\"></i>
                                        </a>
                                    </li>
                                    <li class=\"list-inline-item\">
                                        <a href=\"#\">
                                            <i class=\"fab fa-facebook-f\"></i>
                                        </a>
                                    </li>
                                    <li class=\"list-inline-item\">
                                        <a href=\"#\">
                                            <i class=\"fab fa-linkedin-in\"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class=\"col-sm-4\">
                            <div class=\"team-member\">
                                <img class=\"mx-auto rounded-circle\" src=\"img/team/2.jpg\" alt=\"\">
                                <h4>Larry Parker</h4>
                                <p class=\"text-muted\">Lead Marketer</p>
                                <ul class=\"list-inline social-buttons\">
                                    <li class=\"list-inline-item\">
                                        <a href=\"#\">
                                            <i class=\"fab fa-twitter\"></i>
                                        </a>
                                    </li>
                                    <li class=\"list-inline-item\">
                                        <a href=\"#\">
                                            <i class=\"fab fa-facebook-f\"></i>
                                        </a>
                                    </li>
                                    <li class=\"list-inline-item\">
                                        <a href=\"#\">
                                            <i class=\"fab fa-linkedin-in\"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class=\"col-sm-4\">
                            <div class=\"team-member\">
                                <img class=\"mx-auto rounded-circle\" src=\"img/team/3.jpg\" alt=\"\">
                                <h4>Diana Pertersen</h4>
                                <p class=\"text-muted\">Lead Developer</p>
                                <ul class=\"list-inline social-buttons\">
                                    <li class=\"list-inline-item\">
                                        <a href=\"#\">
                                            <i class=\"fab fa-twitter\"></i>
                                        </a>
                                    </li>
                                    <li class=\"list-inline-item\">
                                        <a href=\"#\">
                                            <i class=\"fab fa-facebook-f\"></i>
                                        </a>
                                    </li>
                                    <li class=\"list-inline-item\">
                                        <a href=\"#\">
                                            <i class=\"fab fa-linkedin-in\"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class=\"row\">
                        <div class=\"col-lg-8 mx-auto text-center\">
                            <p class=\"large text-muted\">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut eaque, laboriosam veritatis, quos non quis ad perspiciatis, totam corporis ea, alias ut unde.</p>
                        </div>
                    </div>
                </div>
            </section>
        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 411
    public function block_client($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "client"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "client"));

        // line 412
        echo "            <!-- Clients -->
            <section class=\"py-5\">
                <div class=\"container\">
                    <div class=\"row\">
                        <div class=\"col-md-3 col-sm-6\">
                            <a href=\"#\">
                                <img class=\"img-fluid d-block mx-auto\" src=\"img/logos/envato.jpg\" alt=\"\">
                            </a>
                        </div>
                        <div class=\"col-md-3 col-sm-6\">
                            <a href=\"#\">
                                <img class=\"img-fluid d-block mx-auto\" src=\"img/logos/designmodo.jpg\" alt=\"\">
                            </a>
                        </div>
                        <div class=\"col-md-3 col-sm-6\">
                            <a href=\"#\">
                                <img class=\"img-fluid d-block mx-auto\" src=\"img/logos/themeforest.jpg\" alt=\"\">
                            </a>
                        </div>
                        <div class=\"col-md-3 col-sm-6\">
                            <a href=\"#\">
                                <img class=\"img-fluid d-block mx-auto\" src=\"img/logos/creative-market.jpg\" alt=\"\">
                            </a>
                        </div>
                    </div>
                </div>
            </section>
        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 440
    public function block_contact($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "contact"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "contact"));

        // line 441
        echo "            <!-- Contact -->
            <section class=\"page-section\" id=\"contact\">
                <div class=\"container\">
                    <div class=\"row\">
                        <div class=\"col-lg-12 text-center\">
                            <h2 class=\"section-heading text-uppercase\">Contact Us</h2>
                            <h3 class=\"section-subheading text-muted\">Lorem ipsum dolor sit amet consectetur.</h3>
                        </div>
                    </div>
                    <div class=\"row\">
                        <div class=\"col-lg-12\">
                            <form id=\"contactForm\" name=\"sentMessage\" novalidate=\"novalidate\">
                                <div class=\"row\">
                                    <div class=\"col-md-6\">
                                        <div class=\"form-group\">
                                            <input class=\"form-control\" id=\"name\" type=\"text\" placeholder=\"Your Name *\" required=\"required\" data-validation-required-message=\"Please enter your name.\">
                                            <p class=\"help-block text-danger\"></p>
                                        </div>
                                        <div class=\"form-group\">
                                            <input class=\"form-control\" id=\"email\" type=\"email\" placeholder=\"Your Email *\" required=\"required\" data-validation-required-message=\"Please enter your email address.\">
                                            <p class=\"help-block text-danger\"></p>
                                        </div>
                                        <div class=\"form-group\">
                                            <input class=\"form-control\" id=\"phone\" type=\"tel\" placeholder=\"Your Phone *\" required=\"required\" data-validation-required-message=\"Please enter your phone number.\">
                                            <p class=\"help-block text-danger\"></p>
                                        </div>
                                    </div>
                                    <div class=\"col-md-6\">
                                        <div class=\"form-group\">
                                            <textarea class=\"form-control\" id=\"message\" placeholder=\"Your Message *\" required=\"required\" data-validation-required-message=\"Please enter a message.\"></textarea>
                                            <p class=\"help-block text-danger\"></p>
                                        </div>
                                    </div>
                                    <div class=\"clearfix\"></div>
                                    <div class=\"col-lg-12 text-center\">
                                        <div id=\"success\"></div>
                                        <button id=\"sendMessageButton\" class=\"btn btn-primary btn-xl text-uppercase\" type=\"submit\">Send Message</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </section>
        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 486
    public function block_footer($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        // line 487
        echo "            <!-- Footer -->
            <footer class=\"footer\">
                <div class=\"container\">
                    <div class=\"row align-items-center\">
                        <div class=\"col-md-4\">
                            <span class=\"copyright\">Copyright &copy; Your Website 2019</span>
                        </div>
                        <div class=\"col-md-4\">
                            <ul class=\"list-inline social-buttons\">
                                <li class=\"list-inline-item\">
                                    <a href=\"#\">
                                        <i class=\"fab fa-twitter\"></i>
                                    </a>
                                </li>
                                <li class=\"list-inline-item\">
                                    <a href=\"#\">
                                        <i class=\"fab fa-facebook-f\"></i>
                                    </a>
                                </li>
                                <li class=\"list-inline-item\">
                                    <a href=\"#\">
                                        <i class=\"fab fa-linkedin-in\"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class=\"col-md-4\">
                            <ul class=\"list-inline quicklinks\">
                                <li class=\"list-inline-item\">
                                    <a href=\"#\">Privacy Policy</a>
                                </li>
                                <li class=\"list-inline-item\">
                                    <a href=\"#\">Terms of Use</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </footer>
            ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 529
    public function block_modalEvent($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "modalEvent"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "modalEvent"));

        // line 530
        echo "            <!-- Modal 1 -->
            <div class=\"portfolio-modal modal fade\" id=\"portfolioModal1\" tabindex=\"-1\" role=\"dialog\" aria-hidden=\"true\">
                <div class=\"modal-dialog\">
                    <div class=\"modal-content\">
                        <div class=\"close-modal\" data-dismiss=\"modal\">
                            <div class=\"lr\">
                                <div class=\"rl\"></div>
                            </div>
                        </div>
                        <div class=\"container\">
                            <div class=\"row\">
                                <div class=\"col-lg-8 mx-auto\">
                                    <div class=\"modal-body\">
                                        <!-- Project Details Go Here -->
                                        <h2 class=\"text-uppercase\">Project Name</h2>
                                        <p class=\"item-intro text-muted\">Lorem ipsum dolor sit amet consectetur.</p>
                                        <img class=\"img-fluid d-block mx-auto\" src=\"img/portfolio/01-full.jpg\" alt=\"\">
                                        <p>Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt repellat aperiam quasi sunt officia expedita beatae cupiditate, maiores repudiandae, nostrum, reiciendis facere nemo!</p>
                                        <ul class=\"list-inline\">
                                            <li>Date: January 2017</li>
                                            <li>Client: Threads</li>
                                            <li>Category: Illustration</li>
                                        </ul>
                                        <button class=\"btn btn-primary\" data-dismiss=\"modal\" type=\"button\">
                                            <i class=\"fas fa-times\"></i>
                                            Close Project</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Modal 2 -->
            <div class=\"portfolio-modal modal fade\" id=\"portfolioModal2\" tabindex=\"-1\" role=\"dialog\" aria-hidden=\"true\">
                <div class=\"modal-dialog\">
                    <div class=\"modal-content\">
                        <div class=\"close-modal\" data-dismiss=\"modal\">
                            <div class=\"lr\">
                                <div class=\"rl\"></div>
                            </div>
                        </div>
                        <div class=\"container\">
                            <div class=\"row\">
                                <div class=\"col-lg-8 mx-auto\">
                                    <div class=\"modal-body\">
                                        <!-- Project Details Go Here -->
                                        <h2 class=\"text-uppercase\">Project Name</h2>
                                        <p class=\"item-intro text-muted\">Lorem ipsum dolor sit amet consectetur.</p>
                                        <img class=\"img-fluid d-block mx-auto\" src=\"img/portfolio/02-full.jpg\" alt=\"\">
                                        <p>Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt repellat aperiam quasi sunt officia expedita beatae cupiditate, maiores repudiandae, nostrum, reiciendis facere nemo!</p>
                                        <ul class=\"list-inline\">
                                            <li>Date: January 2017</li>
                                            <li>Client: Explore</li>
                                            <li>Category: Graphic Design</li>
                                        </ul>
                                        <button class=\"btn btn-primary\" data-dismiss=\"modal\" type=\"button\">
                                            <i class=\"fas fa-times\"></i>
                                            Close Project</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Modal 3 -->
            <div class=\"portfolio-modal modal fade\" id=\"portfolioModal3\" tabindex=\"-1\" role=\"dialog\" aria-hidden=\"true\">
                <div class=\"modal-dialog\">
                    <div class=\"modal-content\">
                        <div class=\"close-modal\" data-dismiss=\"modal\">
                            <div class=\"lr\">
                                <div class=\"rl\"></div>
                            </div>
                        </div>
                        <div class=\"container\">
                            <div class=\"row\">
                                <div class=\"col-lg-8 mx-auto\">
                                    <div class=\"modal-body\">
                                        <!-- Project Details Go Here -->
                                        <h2 class=\"text-uppercase\">Project Name</h2>
                                        <p class=\"item-intro text-muted\">Lorem ipsum dolor sit amet consectetur.</p>
                                        <img class=\"img-fluid d-block mx-auto\" src=\"img/portfolio/03-full.jpg\" alt=\"\">
                                        <p>Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt repellat aperiam quasi sunt officia expedita beatae cupiditate, maiores repudiandae, nostrum, reiciendis facere nemo!</p>
                                        <ul class=\"list-inline\">
                                            <li>Date: January 2017</li>
                                            <li>Client: Finish</li>
                                            <li>Category: Identity</li>
                                        </ul>
                                        <button class=\"btn btn-primary\" data-dismiss=\"modal\" type=\"button\">
                                            <i class=\"fas fa-times\"></i>
                                            Close Project</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Modal 4 -->
            <div class=\"portfolio-modal modal fade\" id=\"portfolioModal4\" tabindex=\"-1\" role=\"dialog\" aria-hidden=\"true\">
                <div class=\"modal-dialog\">
                    <div class=\"modal-content\">
                        <div class=\"close-modal\" data-dismiss=\"modal\">
                            <div class=\"lr\">
                                <div class=\"rl\"></div>
                            </div>
                        </div>
                        <div class=\"container\">
                            <div class=\"row\">
                                <div class=\"col-lg-8 mx-auto\">
                                    <div class=\"modal-body\">
                                        <!-- Project Details Go Here -->
                                        <h2 class=\"text-uppercase\">Project Name</h2>
                                        <p class=\"item-intro text-muted\">Lorem ipsum dolor sit amet consectetur.</p>
                                        <img class=\"img-fluid d-block mx-auto\" src=\"img/portfolio/04-full.jpg\" alt=\"\">
                                        <p>Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt repellat aperiam quasi sunt officia expedita beatae cupiditate, maiores repudiandae, nostrum, reiciendis facere nemo!</p>
                                        <ul class=\"list-inline\">
                                            <li>Date: January 2017</li>
                                            <li>Client: Lines</li>
                                            <li>Category: Branding</li>
                                        </ul>
                                        <button class=\"btn btn-primary\" data-dismiss=\"modal\" type=\"button\">
                                            <i class=\"fas fa-times\"></i>
                                            Close Project</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Modal 5 -->
            <div class=\"portfolio-modal modal fade\" id=\"portfolioModal5\" tabindex=\"-1\" role=\"dialog\" aria-hidden=\"true\">
                <div class=\"modal-dialog\">
                    <div class=\"modal-content\">
                        <div class=\"close-modal\" data-dismiss=\"modal\">
                            <div class=\"lr\">
                                <div class=\"rl\"></div>
                            </div>
                        </div>
                        <div class=\"container\">
                            <div class=\"row\">
                                <div class=\"col-lg-8 mx-auto\">
                                    <div class=\"modal-body\">
                                        <!-- Project Details Go Here -->
                                        <h2 class=\"text-uppercase\">Project Name</h2>
                                        <p class=\"item-intro text-muted\">Lorem ipsum dolor sit amet consectetur.</p>
                                        <img class=\"img-fluid d-block mx-auto\" src=\"img/portfolio/05-full.jpg\" alt=\"\">
                                        <p>Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt repellat aperiam quasi sunt officia expedita beatae cupiditate, maiores repudiandae, nostrum, reiciendis facere nemo!</p>
                                        <ul class=\"list-inline\">
                                            <li>Date: January 2017</li>
                                            <li>Client: Southwest</li>
                                            <li>Category: Website Design</li>
                                        </ul>
                                        <button class=\"btn btn-primary\" data-dismiss=\"modal\" type=\"button\">
                                            <i class=\"fas fa-times\"></i>
                                            Close Project</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Modal 6 -->
            <div class=\"portfolio-modal modal fade\" id=\"portfolioModal6\" tabindex=\"-1\" role=\"dialog\" aria-hidden=\"true\">
                <div class=\"modal-dialog\">
                    <div class=\"modal-content\">
                        <div class=\"close-modal\" data-dismiss=\"modal\">
                            <div class=\"lr\">
                                <div class=\"rl\"></div>
                            </div>
                        </div>
                        <div class=\"container\">
                            <div class=\"row\">
                                <div class=\"col-lg-8 mx-auto\">
                                    <div class=\"modal-body\">
                                        <!-- Project Details Go Here -->
                                        <h2 class=\"text-uppercase\">Project Name</h2>
                                        <p class=\"item-intro text-muted\">Lorem ipsum dolor sit amet consectetur.</p>
                                        <img class=\"img-fluid d-block mx-auto\" src=\"img/portfolio/06-full.jpg\" alt=\"\">
                                        <p>Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt repellat aperiam quasi sunt officia expedita beatae cupiditate, maiores repudiandae, nostrum, reiciendis facere nemo!</p>
                                        <ul class=\"list-inline\">
                                            <li>Date: January 2017</li>
                                            <li>Client: Window</li>
                                            <li>Category: Photography</li>
                                        </ul>
                                        <button class=\"btn btn-primary\" data-dismiss=\"modal\" type=\"button\">
                                            <i class=\"fas fa-times\"></i>
                                            Close Project</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 734
    public function block_javascripts($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 735
        echo "            <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("eventStyle/js/jquery-3.2.1.min.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 736
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("eventStyle/styles/bootstrap4/popper.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 737
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("eventStyle/styles/bootstrap4/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
            <script src=\"plugins/OwlCarousel2-2.2.1/owl.carousel.js\"></script>
            <script src=\"plugins/easing/easing.js\"></script>
            <script src=\"plugins/parallax-js-master/parallax.min.js\"></script>
            <script src=\"";
        // line 741
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("eventStyle/js/events.js"), "html", null, true);
        echo "\"></script>



            <!-- Bootstrap core JavaScript -->
            <script src=\"vendor/jquery/jquery.min.js\"></script>
            <script src=\"vendor/bootstrap/js/bootstrap.bundle.min.js\"></script>

            <!-- Plugin JavaScript -->
            <script src=\"vendor/jquery-easing/jquery.easing.min.js\"></script>

            <!-- Contact form JavaScript -->
            <script src=\"js/jqBootstrapValidation.js\"></script>
            <script src=\"js/contact_me.js\"></script>

            <!-- Custom scripts for this template -->
            <script src=\"js/agency.min.js\"></script>

            ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "base_back_admin.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  1121 => 741,  1114 => 737,  1110 => 736,  1105 => 735,  1096 => 734,  883 => 530,  874 => 529,  825 => 487,  816 => 486,  762 => 441,  753 => 440,  716 => 412,  707 => 411,  607 => 320,  598 => 319,  508 => 238,  499 => 237,  391 => 138,  382 => 137,  335 => 98,  326 => 97,  315 => 760,  312 => 734,  310 => 529,  306 => 527,  303 => 486,  300 => 440,  297 => 411,  294 => 319,  291 => 237,  289 => 137,  286 => 136,  284 => 97,  280 => 95,  271 => 94,  250 => 81,  241 => 80,  222 => 70,  216 => 67,  201 => 55,  182 => 38,  173 => 37,  162 => 762,  160 => 94,  157 => 93,  155 => 80,  152 => 79,  149 => 37,  140 => 36,  128 => 31,  119 => 25,  114 => 23,  107 => 19,  103 => 18,  95 => 13,  85 => 5,  76 => 4,  64 => 764,  62 => 36,  57 => 33,  55 => 4,  50 => 1,);
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
        {% block stylesheets %}
            <meta charset=\"utf-8\">
            <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
            <meta name=\"description\" content=\"\">
            <meta name=\"author\" content=\"\">

            <title>Click Chick Blog</title>


            <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('eventStyle/styles/bootstrap4/bootstrap.min.css')}}\">
            <link href=\"plugins/font-awesome-4.7.0/css/font-awesome.min.css\" rel=\"stylesheet\" type=\"text/css\">
            <link rel=\"stylesheet\" type=\"text/css\" href=\"plugins/OwlCarousel2-2.2.1/owl.carousel.css\">
            <link rel=\"stylesheet\" type=\"text/css\" href=\"plugins/OwlCarousel2-2.2.1/owl.theme.default.css\">
            <link rel=\"stylesheet\" type=\"text/css\" href=\"plugins/OwlCarousel2-2.2.1/animate.css\">
            <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('eventStyle/styles/events.css')}}\">
            <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('eventStyle/styles/events_responsive.css')}}\">


            <!-- Bootstrap core CSS -->
            <link href=\"{{  asset('vendor/bootstrap/css/bootstrap.css')}}\" rel=\"stylesheet\">
            <!-- Custom fonts for this template -->
            <link href=\"{{  asset('vendor/fontawesome-free/css/all.css\" rel=\"stylesheet\" type=\"text/css')}}\">
            <link href=\"https://fonts.googleapis.com/css?family=Montserrat:400,700\" rel=\"stylesheet\" type=\"text/css\">
            <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
            <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
            <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>
            <!-- Custom styles for this template -->
            <link href=\"{{  asset('css/agency.css')}}\" rel=\"stylesheet\">
        {% endblock %}
    </head>
    <body>

        {% block body %}
        {% block navbar %}
            <!-- Navigation -->


            <nav class=\"navbar navbar-expand-md navbar-dark fixed-top\" id=\"mainNav\" style=\"background-color: #343a40\">
                <div class=\"container\">

                        <a class=\"navbar-brand js-scroll-trigger\" href=\"#page-top\">Chick Click</a>
                    <button class=\"navbar-toggler navbar-toggler-right\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarResponsive\" aria-controls=\"navbarResponsive\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
                        Menu
                        <i class=\"fas fa-bars\"></i>
                    </button>
                    <div class=\"collapse navbar-collapse\" id=\"navbarResponsive\" style=\"background-color: #343a40\">
                        <ul class=\"navbar-nav text-uppercase ml-auto\">
                            <li class=\"nav-item\">
                                <a class=\"nav-link js-scroll-trigger\" href=\"#services\">HOME</a>
                            </li>
                            <li class=\"nav-item\">
                                <a class=\"nav-link js-scroll-trigger\" href=\"{{ path('show_event') }}\">EVENTS</a>
                            </li>
                            <li class=\"nav-item\">
                                <a class=\"nav-link js-scroll-trigger\" href=\"#about\">About</a>
                            </li>
                            <li class=\"nav-item\">
                                <a class=\"nav-link js-scroll-trigger\" href=\"#team\">Team</a>
                            </li>
                            <li class=\"nav-item\">
                                <a class=\"nav-link js-scroll-trigger\" href=\"#contact\">Contact</a>
                            </li>
                            <li class=\"nav-item\">
                                <a class=\"nav-link js-scroll-trigger\" href=\"{{ path('admin_space') }}\">MANAGE AS ADMIN</a>
                            </li>
                            <li class=\"nav-item\">
                                <a class=\"nav-link js-scroll-trigger\" href=\"{{ path('fos_user_security_logout') }}\">LOGOUT</a>
                            </li>

                        </ul>
                    </div>
                </div>

            </nav>
        {% endblock  %}

        {% block header %}
            <!-- Header -->
            <header class=\"masthead h-25\">
                <div class=\"container\">
                    <div class=\"intro-text\">
                        <div class=\"intro-lead-in\">Welcome To Chick Click!</div>
                        <div class=\"intro-heading text-uppercase\">It's Nice To Meet You </div>
                        <a class=\"btn btn-primary btn-xl text-uppercase js-scroll-trigger\" href=\"#services\">Tell Me More</a>
                    </div>
                </div>
            </header>

        {% endblock %}

        {% block other %}

            <!-- Services -->
            {% block service %}
            <section class=\"page-section\" id=\"services\">
                <div class=\"container\">
                    <div class=\"row\">
                        <div class=\"col-lg-12 text-center\">
                            <h2 class=\"section-heading text-uppercase\">Services</h2>
                            <h3 class=\"section-subheading text-muted\">Lorem ipsum dolor sit amet consectetur.</h3>
                        </div>
                    </div>
                    <div class=\"row text-center\">
                        <div class=\"col-md-4\">
          <span class=\"fa-stack fa-4x\">
            <i class=\"fas fa-circle fa-stack-2x text-primary\"></i>
            <i class=\"fas fa-shopping-cart fa-stack-1x fa-inverse\"></i>
          </span>
                            <h4 class=\"service-heading\">E-Commerce</h4>
                            <p class=\"text-muted\">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima maxime quam architecto quo inventore harum ex magni, dicta impedit.</p>
                        </div>
                        <div class=\"col-md-4\">
          <span class=\"fa-stack fa-4x\">
            <i class=\"fas fa-circle fa-stack-2x text-primary\"></i>
            <i class=\"fas fa-laptop fa-stack-1x fa-inverse\"></i>
          </span>
                            <h4 class=\"service-heading\">Responsive Design</h4>
                            <p class=\"text-muted\">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima maxime quam architecto quo inventore harum ex magni, dicta impedit.</p>
                        </div>
                        <div class=\"col-md-4\">
          <span class=\"fa-stack fa-4x\">
            <i class=\"fas fa-circle fa-stack-2x text-primary\"></i>
            <i class=\"fas fa-lock fa-stack-1x fa-inverse\"></i>
          </span>
                            <h4 class=\"service-heading\">Web Security</h4>
                            <p class=\"text-muted\">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima maxime quam architecto quo inventore harum ex magni, dicta impedit.</p>
                        </div>
                    </div>
                </div>
            </section>

            {% endblock  %}

        {% block eventGrid %}
            <!-- Event Grid -->
            <section class=\"bg-light page-section\" id=\"portfolio\">
                <div class=\"container\">
                    <div class=\"row\">
                        <div class=\"col-lg-12 text-center\">
                            <h2 class=\"section-heading text-uppercase\">Portfolio</h2>
                            <h3 class=\"section-subheading text-muted\">Lorem ipsum dolor sit amet consectetur.</h3>
                        </div>
                    </div>
                    <div class=\"row\">
                        <div class=\"col-md-4 col-sm-6 portfolio-item\">
                            <a class=\"portfolio-link\" data-toggle=\"modal\" href=\"#portfolioModal1\">
                                <div class=\"portfolio-hover\">
                                    <div class=\"portfolio-hover-content\">
                                        <i class=\"fas fa-plus fa-3x\"></i>
                                    </div>
                                </div>
                                <img class=\"img-fluid\" src=\"img/portfolio/01-thumbnail.jpg\" alt=\"\">
                            </a>
                            <div class=\"portfolio-caption\">
                                <h4>Threads</h4>
                                <p class=\"text-muted\">Illustration</p>
                            </div>
                        </div>
                        <div class=\"col-md-4 col-sm-6 portfolio-item\">
                            <a class=\"portfolio-link\" data-toggle=\"modal\" href=\"#portfolioModal2\">
                                <div class=\"portfolio-hover\">
                                    <div class=\"portfolio-hover-content\">
                                        <i class=\"fas fa-plus fa-3x\"></i>
                                    </div>
                                </div>
                                <img class=\"img-fluid\" src=\"img/portfolio/02-thumbnail.jpg\" alt=\"\">
                            </a>
                            <div class=\"portfolio-caption\">
                                <h4>Explore</h4>
                                <p class=\"text-muted\">Graphic Design</p>
                            </div>
                        </div>
                        <div class=\"col-md-4 col-sm-6 portfolio-item\">
                            <a class=\"portfolio-link\" data-toggle=\"modal\" href=\"#portfolioModal3\">
                                <div class=\"portfolio-hover\">
                                    <div class=\"portfolio-hover-content\">
                                        <i class=\"fas fa-plus fa-3x\"></i>
                                    </div>
                                </div>
                                <img class=\"img-fluid\" src=\"img/portfolio/03-thumbnail.jpg\" alt=\"\">
                            </a>
                            <div class=\"portfolio-caption\">
                                <h4>Finish</h4>
                                <p class=\"text-muted\">Identity</p>
                            </div>
                        </div>
                        <div class=\"col-md-4 col-sm-6 portfolio-item\">
                            <a class=\"portfolio-link\" data-toggle=\"modal\" href=\"#portfolioModal4\">
                                <div class=\"portfolio-hover\">
                                    <div class=\"portfolio-hover-content\">
                                        <i class=\"fas fa-plus fa-3x\"></i>
                                    </div>
                                </div>
                                <img class=\"img-fluid\" src=\"img/portfolio/04-thumbnail.jpg\" alt=\"\">
                            </a>
                            <div class=\"portfolio-caption\">
                                <h4>Lines</h4>
                                <p class=\"text-muted\">Branding</p>
                            </div>
                        </div>
                        <div class=\"col-md-4 col-sm-6 portfolio-item\">
                            <a class=\"portfolio-link\" data-toggle=\"modal\" href=\"#portfolioModal5\">
                                <div class=\"portfolio-hover\">
                                    <div class=\"portfolio-hover-content\">
                                        <i class=\"fas fa-plus fa-3x\"></i>
                                    </div>
                                </div>
                                <img class=\"img-fluid\" src=\"img/portfolio/05-thumbnail.jpg\" alt=\"\">
                            </a>
                            <div class=\"portfolio-caption\">
                                <h4>Southwest</h4>
                                <p class=\"text-muted\">Website Design</p>
                            </div>
                        </div>
                        <div class=\"col-md-4 col-sm-6 portfolio-item\">
                            <a class=\"portfolio-link\" data-toggle=\"modal\" href=\"#portfolioModal6\">
                                <div class=\"portfolio-hover\">
                                    <div class=\"portfolio-hover-content\">
                                        <i class=\"fas fa-plus fa-3x\"></i>
                                    </div>
                                </div>
                                <img class=\"img-fluid\" src=\"img/portfolio/06-thumbnail.jpg\" alt=\"\">
                            </a>
                            <div class=\"portfolio-caption\">
                                <h4>Window</h4>
                                <p class=\"text-muted\">Photography</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

        {% endblock %}
        {% block about %}
            <!-- About -->
            <section class=\"page-section\" id=\"about\">
                <div class=\"container\">
                    <div class=\"row\">
                        <div class=\"col-lg-12 text-center\">
                            <h2 class=\"section-heading text-uppercase\">About</h2>
                            <h3 class=\"section-subheading text-muted\">Lorem ipsum dolor sit amet consectetur.</h3>
                        </div>
                    </div>
                    <div class=\"row\">
                        <div class=\"col-lg-12\">
                            <ul class=\"timeline\">
                                <li>
                                    <div class=\"timeline-image\">
                                        <img class=\"rounded-circle img-fluid\" src=\"img/about/1.jpg\" alt=\"\">
                                    </div>
                                    <div class=\"timeline-panel\">
                                        <div class=\"timeline-heading\">
                                            <h4>2009-2011</h4>
                                            <h4 class=\"subheading\">Our Humble Beginnings</h4>
                                        </div>
                                        <div class=\"timeline-body\">
                                            <p class=\"text-muted\">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt ut voluptatum eius sapiente, totam reiciendis temporibus qui quibusdam, recusandae sit vero unde, sed, incidunt et ea quo dolore laudantium consectetur!</p>
                                        </div>
                                    </div>
                                </li>
                                <li class=\"timeline-inverted\">
                                    <div class=\"timeline-image\">
                                        <img class=\"rounded-circle img-fluid\" src=\"img/about/2.jpg\" alt=\"\">
                                    </div>
                                    <div class=\"timeline-panel\">
                                        <div class=\"timeline-heading\">
                                            <h4>March 2011</h4>
                                            <h4 class=\"subheading\">An Agency is Born</h4>
                                        </div>
                                        <div class=\"timeline-body\">
                                            <p class=\"text-muted\">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt ut voluptatum eius sapiente, totam reiciendis temporibus qui quibusdam, recusandae sit vero unde, sed, incidunt et ea quo dolore laudantium consectetur!</p>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class=\"timeline-image\">
                                        <img class=\"rounded-circle img-fluid\" src=\"img/about/3.jpg\" alt=\"\">
                                    </div>
                                    <div class=\"timeline-panel\">
                                        <div class=\"timeline-heading\">
                                            <h4>December 2012</h4>
                                            <h4 class=\"subheading\">Transition to Full Service</h4>
                                        </div>
                                        <div class=\"timeline-body\">
                                            <p class=\"text-muted\">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt ut voluptatum eius sapiente, totam reiciendis temporibus qui quibusdam, recusandae sit vero unde, sed, incidunt et ea quo dolore laudantium consectetur!</p>
                                        </div>
                                    </div>
                                </li>
                                <li class=\"timeline-inverted\">
                                    <div class=\"timeline-image\">
                                        <img class=\"rounded-circle img-fluid\" src=\"img/about/4.jpg\" alt=\"\">
                                    </div>
                                    <div class=\"timeline-panel\">
                                        <div class=\"timeline-heading\">
                                            <h4>July 2014</h4>
                                            <h4 class=\"subheading\">Phase Two Expansion</h4>
                                        </div>
                                        <div class=\"timeline-body\">
                                            <p class=\"text-muted\">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt ut voluptatum eius sapiente, totam reiciendis temporibus qui quibusdam, recusandae sit vero unde, sed, incidunt et ea quo dolore laudantium consectetur!</p>
                                        </div>
                                    </div>
                                </li>
                                <li class=\"timeline-inverted\">
                                    <div class=\"timeline-image\">
                                        <h4>Be Part
                                            <br>Of Our
                                            <br>Story!</h4>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </section>
        {% endblock  %}
        {% block team %}
            <!-- Team -->
            <section class=\"bg-light page-section\" id=\"team\">
                <div class=\"container\">
                    <div class=\"row\">
                        <div class=\"col-lg-12 text-center\">
                            <h2 class=\"section-heading text-uppercase\">Our Amazing Team</h2>
                            <h3 class=\"section-subheading text-muted\">Lorem ipsum dolor sit amet consectetur.</h3>
                        </div>
                    </div>
                    <div class=\"row\">
                        <div class=\"col-sm-4\">
                            <div class=\"team-member\">
                                <img class=\"mx-auto rounded-circle\" src=\"img/team/1.jpg\" alt=\"\">
                                <h4>Kay Garland</h4>
                                <p class=\"text-muted\">Lead Designer</p>
                                <ul class=\"list-inline social-buttons\">
                                    <li class=\"list-inline-item\">
                                        <a href=\"#\">
                                            <i class=\"fab fa-twitter\"></i>
                                        </a>
                                    </li>
                                    <li class=\"list-inline-item\">
                                        <a href=\"#\">
                                            <i class=\"fab fa-facebook-f\"></i>
                                        </a>
                                    </li>
                                    <li class=\"list-inline-item\">
                                        <a href=\"#\">
                                            <i class=\"fab fa-linkedin-in\"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class=\"col-sm-4\">
                            <div class=\"team-member\">
                                <img class=\"mx-auto rounded-circle\" src=\"img/team/2.jpg\" alt=\"\">
                                <h4>Larry Parker</h4>
                                <p class=\"text-muted\">Lead Marketer</p>
                                <ul class=\"list-inline social-buttons\">
                                    <li class=\"list-inline-item\">
                                        <a href=\"#\">
                                            <i class=\"fab fa-twitter\"></i>
                                        </a>
                                    </li>
                                    <li class=\"list-inline-item\">
                                        <a href=\"#\">
                                            <i class=\"fab fa-facebook-f\"></i>
                                        </a>
                                    </li>
                                    <li class=\"list-inline-item\">
                                        <a href=\"#\">
                                            <i class=\"fab fa-linkedin-in\"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class=\"col-sm-4\">
                            <div class=\"team-member\">
                                <img class=\"mx-auto rounded-circle\" src=\"img/team/3.jpg\" alt=\"\">
                                <h4>Diana Pertersen</h4>
                                <p class=\"text-muted\">Lead Developer</p>
                                <ul class=\"list-inline social-buttons\">
                                    <li class=\"list-inline-item\">
                                        <a href=\"#\">
                                            <i class=\"fab fa-twitter\"></i>
                                        </a>
                                    </li>
                                    <li class=\"list-inline-item\">
                                        <a href=\"#\">
                                            <i class=\"fab fa-facebook-f\"></i>
                                        </a>
                                    </li>
                                    <li class=\"list-inline-item\">
                                        <a href=\"#\">
                                            <i class=\"fab fa-linkedin-in\"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class=\"row\">
                        <div class=\"col-lg-8 mx-auto text-center\">
                            <p class=\"large text-muted\">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut eaque, laboriosam veritatis, quos non quis ad perspiciatis, totam corporis ea, alias ut unde.</p>
                        </div>
                    </div>
                </div>
            </section>
        {% endblock  %}
        {% block client %}
            <!-- Clients -->
            <section class=\"py-5\">
                <div class=\"container\">
                    <div class=\"row\">
                        <div class=\"col-md-3 col-sm-6\">
                            <a href=\"#\">
                                <img class=\"img-fluid d-block mx-auto\" src=\"img/logos/envato.jpg\" alt=\"\">
                            </a>
                        </div>
                        <div class=\"col-md-3 col-sm-6\">
                            <a href=\"#\">
                                <img class=\"img-fluid d-block mx-auto\" src=\"img/logos/designmodo.jpg\" alt=\"\">
                            </a>
                        </div>
                        <div class=\"col-md-3 col-sm-6\">
                            <a href=\"#\">
                                <img class=\"img-fluid d-block mx-auto\" src=\"img/logos/themeforest.jpg\" alt=\"\">
                            </a>
                        </div>
                        <div class=\"col-md-3 col-sm-6\">
                            <a href=\"#\">
                                <img class=\"img-fluid d-block mx-auto\" src=\"img/logos/creative-market.jpg\" alt=\"\">
                            </a>
                        </div>
                    </div>
                </div>
            </section>
        {% endblock  %}
        {% block contact %}
            <!-- Contact -->
            <section class=\"page-section\" id=\"contact\">
                <div class=\"container\">
                    <div class=\"row\">
                        <div class=\"col-lg-12 text-center\">
                            <h2 class=\"section-heading text-uppercase\">Contact Us</h2>
                            <h3 class=\"section-subheading text-muted\">Lorem ipsum dolor sit amet consectetur.</h3>
                        </div>
                    </div>
                    <div class=\"row\">
                        <div class=\"col-lg-12\">
                            <form id=\"contactForm\" name=\"sentMessage\" novalidate=\"novalidate\">
                                <div class=\"row\">
                                    <div class=\"col-md-6\">
                                        <div class=\"form-group\">
                                            <input class=\"form-control\" id=\"name\" type=\"text\" placeholder=\"Your Name *\" required=\"required\" data-validation-required-message=\"Please enter your name.\">
                                            <p class=\"help-block text-danger\"></p>
                                        </div>
                                        <div class=\"form-group\">
                                            <input class=\"form-control\" id=\"email\" type=\"email\" placeholder=\"Your Email *\" required=\"required\" data-validation-required-message=\"Please enter your email address.\">
                                            <p class=\"help-block text-danger\"></p>
                                        </div>
                                        <div class=\"form-group\">
                                            <input class=\"form-control\" id=\"phone\" type=\"tel\" placeholder=\"Your Phone *\" required=\"required\" data-validation-required-message=\"Please enter your phone number.\">
                                            <p class=\"help-block text-danger\"></p>
                                        </div>
                                    </div>
                                    <div class=\"col-md-6\">
                                        <div class=\"form-group\">
                                            <textarea class=\"form-control\" id=\"message\" placeholder=\"Your Message *\" required=\"required\" data-validation-required-message=\"Please enter a message.\"></textarea>
                                            <p class=\"help-block text-danger\"></p>
                                        </div>
                                    </div>
                                    <div class=\"clearfix\"></div>
                                    <div class=\"col-lg-12 text-center\">
                                        <div id=\"success\"></div>
                                        <button id=\"sendMessageButton\" class=\"btn btn-primary btn-xl text-uppercase\" type=\"submit\">Send Message</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </section>
        {% endblock  %}
            {% block footer %}
            <!-- Footer -->
            <footer class=\"footer\">
                <div class=\"container\">
                    <div class=\"row align-items-center\">
                        <div class=\"col-md-4\">
                            <span class=\"copyright\">Copyright &copy; Your Website 2019</span>
                        </div>
                        <div class=\"col-md-4\">
                            <ul class=\"list-inline social-buttons\">
                                <li class=\"list-inline-item\">
                                    <a href=\"#\">
                                        <i class=\"fab fa-twitter\"></i>
                                    </a>
                                </li>
                                <li class=\"list-inline-item\">
                                    <a href=\"#\">
                                        <i class=\"fab fa-facebook-f\"></i>
                                    </a>
                                </li>
                                <li class=\"list-inline-item\">
                                    <a href=\"#\">
                                        <i class=\"fab fa-linkedin-in\"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class=\"col-md-4\">
                            <ul class=\"list-inline quicklinks\">
                                <li class=\"list-inline-item\">
                                    <a href=\"#\">Privacy Policy</a>
                                </li>
                                <li class=\"list-inline-item\">
                                    <a href=\"#\">Terms of Use</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </footer>
            {%  endblock %}

            <!-- Portfolio Modals -->
        {% block modalEvent %}
            <!-- Modal 1 -->
            <div class=\"portfolio-modal modal fade\" id=\"portfolioModal1\" tabindex=\"-1\" role=\"dialog\" aria-hidden=\"true\">
                <div class=\"modal-dialog\">
                    <div class=\"modal-content\">
                        <div class=\"close-modal\" data-dismiss=\"modal\">
                            <div class=\"lr\">
                                <div class=\"rl\"></div>
                            </div>
                        </div>
                        <div class=\"container\">
                            <div class=\"row\">
                                <div class=\"col-lg-8 mx-auto\">
                                    <div class=\"modal-body\">
                                        <!-- Project Details Go Here -->
                                        <h2 class=\"text-uppercase\">Project Name</h2>
                                        <p class=\"item-intro text-muted\">Lorem ipsum dolor sit amet consectetur.</p>
                                        <img class=\"img-fluid d-block mx-auto\" src=\"img/portfolio/01-full.jpg\" alt=\"\">
                                        <p>Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt repellat aperiam quasi sunt officia expedita beatae cupiditate, maiores repudiandae, nostrum, reiciendis facere nemo!</p>
                                        <ul class=\"list-inline\">
                                            <li>Date: January 2017</li>
                                            <li>Client: Threads</li>
                                            <li>Category: Illustration</li>
                                        </ul>
                                        <button class=\"btn btn-primary\" data-dismiss=\"modal\" type=\"button\">
                                            <i class=\"fas fa-times\"></i>
                                            Close Project</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Modal 2 -->
            <div class=\"portfolio-modal modal fade\" id=\"portfolioModal2\" tabindex=\"-1\" role=\"dialog\" aria-hidden=\"true\">
                <div class=\"modal-dialog\">
                    <div class=\"modal-content\">
                        <div class=\"close-modal\" data-dismiss=\"modal\">
                            <div class=\"lr\">
                                <div class=\"rl\"></div>
                            </div>
                        </div>
                        <div class=\"container\">
                            <div class=\"row\">
                                <div class=\"col-lg-8 mx-auto\">
                                    <div class=\"modal-body\">
                                        <!-- Project Details Go Here -->
                                        <h2 class=\"text-uppercase\">Project Name</h2>
                                        <p class=\"item-intro text-muted\">Lorem ipsum dolor sit amet consectetur.</p>
                                        <img class=\"img-fluid d-block mx-auto\" src=\"img/portfolio/02-full.jpg\" alt=\"\">
                                        <p>Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt repellat aperiam quasi sunt officia expedita beatae cupiditate, maiores repudiandae, nostrum, reiciendis facere nemo!</p>
                                        <ul class=\"list-inline\">
                                            <li>Date: January 2017</li>
                                            <li>Client: Explore</li>
                                            <li>Category: Graphic Design</li>
                                        </ul>
                                        <button class=\"btn btn-primary\" data-dismiss=\"modal\" type=\"button\">
                                            <i class=\"fas fa-times\"></i>
                                            Close Project</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Modal 3 -->
            <div class=\"portfolio-modal modal fade\" id=\"portfolioModal3\" tabindex=\"-1\" role=\"dialog\" aria-hidden=\"true\">
                <div class=\"modal-dialog\">
                    <div class=\"modal-content\">
                        <div class=\"close-modal\" data-dismiss=\"modal\">
                            <div class=\"lr\">
                                <div class=\"rl\"></div>
                            </div>
                        </div>
                        <div class=\"container\">
                            <div class=\"row\">
                                <div class=\"col-lg-8 mx-auto\">
                                    <div class=\"modal-body\">
                                        <!-- Project Details Go Here -->
                                        <h2 class=\"text-uppercase\">Project Name</h2>
                                        <p class=\"item-intro text-muted\">Lorem ipsum dolor sit amet consectetur.</p>
                                        <img class=\"img-fluid d-block mx-auto\" src=\"img/portfolio/03-full.jpg\" alt=\"\">
                                        <p>Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt repellat aperiam quasi sunt officia expedita beatae cupiditate, maiores repudiandae, nostrum, reiciendis facere nemo!</p>
                                        <ul class=\"list-inline\">
                                            <li>Date: January 2017</li>
                                            <li>Client: Finish</li>
                                            <li>Category: Identity</li>
                                        </ul>
                                        <button class=\"btn btn-primary\" data-dismiss=\"modal\" type=\"button\">
                                            <i class=\"fas fa-times\"></i>
                                            Close Project</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Modal 4 -->
            <div class=\"portfolio-modal modal fade\" id=\"portfolioModal4\" tabindex=\"-1\" role=\"dialog\" aria-hidden=\"true\">
                <div class=\"modal-dialog\">
                    <div class=\"modal-content\">
                        <div class=\"close-modal\" data-dismiss=\"modal\">
                            <div class=\"lr\">
                                <div class=\"rl\"></div>
                            </div>
                        </div>
                        <div class=\"container\">
                            <div class=\"row\">
                                <div class=\"col-lg-8 mx-auto\">
                                    <div class=\"modal-body\">
                                        <!-- Project Details Go Here -->
                                        <h2 class=\"text-uppercase\">Project Name</h2>
                                        <p class=\"item-intro text-muted\">Lorem ipsum dolor sit amet consectetur.</p>
                                        <img class=\"img-fluid d-block mx-auto\" src=\"img/portfolio/04-full.jpg\" alt=\"\">
                                        <p>Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt repellat aperiam quasi sunt officia expedita beatae cupiditate, maiores repudiandae, nostrum, reiciendis facere nemo!</p>
                                        <ul class=\"list-inline\">
                                            <li>Date: January 2017</li>
                                            <li>Client: Lines</li>
                                            <li>Category: Branding</li>
                                        </ul>
                                        <button class=\"btn btn-primary\" data-dismiss=\"modal\" type=\"button\">
                                            <i class=\"fas fa-times\"></i>
                                            Close Project</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Modal 5 -->
            <div class=\"portfolio-modal modal fade\" id=\"portfolioModal5\" tabindex=\"-1\" role=\"dialog\" aria-hidden=\"true\">
                <div class=\"modal-dialog\">
                    <div class=\"modal-content\">
                        <div class=\"close-modal\" data-dismiss=\"modal\">
                            <div class=\"lr\">
                                <div class=\"rl\"></div>
                            </div>
                        </div>
                        <div class=\"container\">
                            <div class=\"row\">
                                <div class=\"col-lg-8 mx-auto\">
                                    <div class=\"modal-body\">
                                        <!-- Project Details Go Here -->
                                        <h2 class=\"text-uppercase\">Project Name</h2>
                                        <p class=\"item-intro text-muted\">Lorem ipsum dolor sit amet consectetur.</p>
                                        <img class=\"img-fluid d-block mx-auto\" src=\"img/portfolio/05-full.jpg\" alt=\"\">
                                        <p>Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt repellat aperiam quasi sunt officia expedita beatae cupiditate, maiores repudiandae, nostrum, reiciendis facere nemo!</p>
                                        <ul class=\"list-inline\">
                                            <li>Date: January 2017</li>
                                            <li>Client: Southwest</li>
                                            <li>Category: Website Design</li>
                                        </ul>
                                        <button class=\"btn btn-primary\" data-dismiss=\"modal\" type=\"button\">
                                            <i class=\"fas fa-times\"></i>
                                            Close Project</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Modal 6 -->
            <div class=\"portfolio-modal modal fade\" id=\"portfolioModal6\" tabindex=\"-1\" role=\"dialog\" aria-hidden=\"true\">
                <div class=\"modal-dialog\">
                    <div class=\"modal-content\">
                        <div class=\"close-modal\" data-dismiss=\"modal\">
                            <div class=\"lr\">
                                <div class=\"rl\"></div>
                            </div>
                        </div>
                        <div class=\"container\">
                            <div class=\"row\">
                                <div class=\"col-lg-8 mx-auto\">
                                    <div class=\"modal-body\">
                                        <!-- Project Details Go Here -->
                                        <h2 class=\"text-uppercase\">Project Name</h2>
                                        <p class=\"item-intro text-muted\">Lorem ipsum dolor sit amet consectetur.</p>
                                        <img class=\"img-fluid d-block mx-auto\" src=\"img/portfolio/06-full.jpg\" alt=\"\">
                                        <p>Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt repellat aperiam quasi sunt officia expedita beatae cupiditate, maiores repudiandae, nostrum, reiciendis facere nemo!</p>
                                        <ul class=\"list-inline\">
                                            <li>Date: January 2017</li>
                                            <li>Client: Window</li>
                                            <li>Category: Photography</li>
                                        </ul>
                                        <button class=\"btn btn-primary\" data-dismiss=\"modal\" type=\"button\">
                                            <i class=\"fas fa-times\"></i>
                                            Close Project</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        {% endblock  %}
            {% block javascripts %}
            <script src=\"{{ asset('eventStyle/js/jquery-3.2.1.min.js') }}\"></script>
            <script src=\"{{ asset('eventStyle/styles/bootstrap4/popper.js') }}\"></script>
            <script src=\"{{ asset('eventStyle/styles/bootstrap4/bootstrap.min.js') }}\"></script>
            <script src=\"plugins/OwlCarousel2-2.2.1/owl.carousel.js\"></script>
            <script src=\"plugins/easing/easing.js\"></script>
            <script src=\"plugins/parallax-js-master/parallax.min.js\"></script>
            <script src=\"{{ asset('eventStyle/js/events.js') }}\"></script>



            <!-- Bootstrap core JavaScript -->
            <script src=\"vendor/jquery/jquery.min.js\"></script>
            <script src=\"vendor/bootstrap/js/bootstrap.bundle.min.js\"></script>

            <!-- Plugin JavaScript -->
            <script src=\"vendor/jquery-easing/jquery.easing.min.js\"></script>

            <!-- Contact form JavaScript -->
            <script src=\"js/jqBootstrapValidation.js\"></script>
            <script src=\"js/contact_me.js\"></script>

            <!-- Custom scripts for this template -->
            <script src=\"js/agency.min.js\"></script>

            {% endblock %}

        {% endblock %}

        {% endblock %}
    </body>
</html>
", "base_back_admin.html.twig", "C:\\wamp64\\www\\Chick_Click\\app\\Resources\\views\\base_back_admin.html.twig");
    }
}
