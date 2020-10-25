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

/* @Ticket/HomeTickets/reade.html.twig */
class __TwigTemplate_e5c3e02db67671ae362eb2ec2f093bd81a198a0f0a7e4c139ac46f0e5e991d6d extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'header' => [$this, 'block_header'],
            'aya' => [$this, 'block_aya'],
            'Portfolio' => [$this, 'block_Portfolio'],
            'footer' => [$this, 'block_footer'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Ticket/HomeTickets/reade.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Ticket/HomeTickets/reade.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "@Ticket/HomeTickets/reade.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 2
    public function block_header($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header"));

        // line 3
        echo "    <!-- Header -->
    <header class=\"masthead\">
        <div class=\"container\">
            <div class=\"intro-text\">
                <div class=\"intro-lead-in\">Welcome To Chick Click!</div>
                <div class=\"intro-heading text-uppercase\">WELCOME TO the reclamations</div>
            </div>
        </div>
    </header>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 14
    public function block_aya($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "aya"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "aya"));

        // line 15
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery.min.js"), "html", null, true);
        echo "\"></script>
    <CENTER><input type=\"text\" id=\"search\" placeholder=\"CHERCHER RECLAMATION ...\"></CENTER>


<center><table id=\"tableac\" border=\"0\">
        </br>
        </br>
    <tr>
        <td><H6>REPORTER</H6></td>
        <td><h6>REPORTER MAIL</h6></td>
        <td><h6>RECLAMATION ABOUT</h6></td>
        <td><h6>PRIORITY</h6></td>
        <td><h6>DESCRIBE YOUR CLAIMS</h6></td>
        <td><h6> TICKET DATE </h6></td>


    </tr>
    ";
        // line 32
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["listTicket"]) ? $context["listTicket"] : $this->getContext($context, "listTicket")));
        foreach ($context['_seq'] as $context["_key"] => $context["ticket"]) {
            // line 33
            echo "        <tr>
            <td>";
            // line 34
            echo twig_escape_filter($this->env, $this->getAttribute($context["ticket"], "reporter", []), "html", null, true);
            echo "</td>
            <td>";
            // line 35
            echo twig_escape_filter($this->env, $this->getAttribute($context["ticket"], "reporterMail", []), "html", null, true);
            echo "</td>
            <td>";
            // line 36
            echo twig_escape_filter($this->env, $this->getAttribute($context["ticket"], "reclamationAbout", []), "html", null, true);
            echo "</td>
            <td>";
            // line 37
            echo twig_escape_filter($this->env, $this->getAttribute($context["ticket"], "priority", []), "html", null, true);
            echo "</td>
            <td>";
            // line 38
            echo twig_escape_filter($this->env, $this->getAttribute($context["ticket"], "description", []), "html", null, true);
            echo "</td>
            <td>";
            // line 39
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["ticket"], "dateTicket", [])), "html", null, true);
            echo "</td>


            <td><a href=\"";
            // line 42
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("update_ticket", ["id" => $this->getAttribute($context["ticket"], "id", [])]), "html", null, true);
            echo "\">update</a></td>
            <td><a href=\"";
            // line 43
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("delete_ticket", ["id" => $this->getAttribute($context["ticket"], "id", [])]), "html", null, true);
            echo "\">delete</a></td>


        </tr>
        <script>
            \$(document).ready(function(){
                \$('#search').keyup(function(){
                    search_table(\$(this).val());
                });
                function search_table(value){
                    \$('#tableac tbody tr').each(function(){
                        var found = 'false';
                        \$(this).each(function(){
                            if(\$(this).text().toLowerCase().indexOf(value.toLowerCase()) >= 0)
                            {
                                found = 'true';
                            }
                        });
                        if(found == 'true')
                        {
                            \$(this).show();

                        }
                        else
                        {
                            \$(this).hide();

                        }
                    });
                }
            });
        </script>


    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ticket'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 78
        echo "
    </table></center>
    <div>
        <td><a href=\"";
        // line 81
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("create_ticket");
        echo "\">Add A new reclamation</a></td>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 84
    public function block_Portfolio($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "Portfolio"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "Portfolio"));

        // line 85
        echo "    <!-- Portfolio Grid -->
    <section class=\"bg-light page-section\" id=\"portfolio\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-12 text-center\">
                    <h2 class=\"section-heading text-uppercase\">Reclamations</h2>
                    <h3 class=\"section-subheading text-muted\">Leave your ticket here.</h3>
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
                        <h4>PUT ON YOUR RECLAMATION</h4>
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
                        <h4>CHECK YOUR FEED BACK NOTIFICATIONS</h4>
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
                        <h4>CHECK YOUR TICKET HISTORY</h4>
                        <p class=\"text-muted\">Identity</p>
                    </div>
                </div>

            </div>
        </div>
    </section>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 142
    public function block_footer($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        // line 143
        echo "    <footer class=\" py-5 bg-dark\">
        <div class=\"container\">
            <div class=\"m-0 text-center text-white\">Copyright &copy; Chick Click 2019</div>
            <div class=\"m-0 text-center text-white\">Here you can always get your CLICK and be in the FLEEK</div>
        </div>
    </footer>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@Ticket/HomeTickets/reade.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  293 => 143,  284 => 142,  218 => 85,  209 => 84,  196 => 81,  191 => 78,  150 => 43,  146 => 42,  140 => 39,  136 => 38,  132 => 37,  128 => 36,  124 => 35,  120 => 34,  117 => 33,  113 => 32,  92 => 15,  83 => 14,  63 => 3,  54 => 2,  32 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"base.html.twig\" %}
{% block header %}
    <!-- Header -->
    <header class=\"masthead\">
        <div class=\"container\">
            <div class=\"intro-text\">
                <div class=\"intro-lead-in\">Welcome To Chick Click!</div>
                <div class=\"intro-heading text-uppercase\">WELCOME TO the reclamations</div>
            </div>
        </div>
    </header>

{% endblock %}
{% block aya %}
    <script src=\"{{ asset('js/jquery.min.js') }}\"></script>
    <CENTER><input type=\"text\" id=\"search\" placeholder=\"CHERCHER RECLAMATION ...\"></CENTER>


<center><table id=\"tableac\" border=\"0\">
        </br>
        </br>
    <tr>
        <td><H6>REPORTER</H6></td>
        <td><h6>REPORTER MAIL</h6></td>
        <td><h6>RECLAMATION ABOUT</h6></td>
        <td><h6>PRIORITY</h6></td>
        <td><h6>DESCRIBE YOUR CLAIMS</h6></td>
        <td><h6> TICKET DATE </h6></td>


    </tr>
    {% for ticket in listTicket %}
        <tr>
            <td>{{ ticket.reporter }}</td>
            <td>{{ ticket.reporterMail }}</td>
            <td>{{ ticket.reclamationAbout }}</td>
            <td>{{ ticket.priority }}</td>
            <td>{{ ticket.description }}</td>
            <td>{{ ticket.dateTicket |date}}</td>


            <td><a href=\"{{path('update_ticket',{'id':ticket.id})}}\">update</a></td>
            <td><a href=\"{{path('delete_ticket',{'id':ticket.id})}}\">delete</a></td>


        </tr>
        <script>
            \$(document).ready(function(){
                \$('#search').keyup(function(){
                    search_table(\$(this).val());
                });
                function search_table(value){
                    \$('#tableac tbody tr').each(function(){
                        var found = 'false';
                        \$(this).each(function(){
                            if(\$(this).text().toLowerCase().indexOf(value.toLowerCase()) >= 0)
                            {
                                found = 'true';
                            }
                        });
                        if(found == 'true')
                        {
                            \$(this).show();

                        }
                        else
                        {
                            \$(this).hide();

                        }
                    });
                }
            });
        </script>


    {% endfor %}

    </table></center>
    <div>
        <td><a href=\"{{path('create_ticket')}}\">Add A new reclamation</a></td>
    </div>
{% endblock %}
{% block Portfolio %}
    <!-- Portfolio Grid -->
    <section class=\"bg-light page-section\" id=\"portfolio\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-12 text-center\">
                    <h2 class=\"section-heading text-uppercase\">Reclamations</h2>
                    <h3 class=\"section-subheading text-muted\">Leave your ticket here.</h3>
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
                        <h4>PUT ON YOUR RECLAMATION</h4>
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
                        <h4>CHECK YOUR FEED BACK NOTIFICATIONS</h4>
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
                        <h4>CHECK YOUR TICKET HISTORY</h4>
                        <p class=\"text-muted\">Identity</p>
                    </div>
                </div>

            </div>
        </div>
    </section>
{% endblock %}
{% block footer %}
    <footer class=\" py-5 bg-dark\">
        <div class=\"container\">
            <div class=\"m-0 text-center text-white\">Copyright &copy; Chick Click 2019</div>
            <div class=\"m-0 text-center text-white\">Here you can always get your CLICK and be in the FLEEK</div>
        </div>
    </footer>
{% endblock %}", "@Ticket/HomeTickets/reade.html.twig", "C:\\wamp64\\www\\Chick_Click\\src\\TicketBundle\\Resources\\views\\HomeTickets\\reade.html.twig");
    }
}
