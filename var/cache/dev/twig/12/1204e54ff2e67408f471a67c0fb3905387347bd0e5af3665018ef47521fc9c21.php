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

/* @MahmoudEvent/HomeEvent/detail_event.html.twig */
class __TwigTemplate_90e38dc334919dcaa7c2e54585db535d85169ca7bc9499efd0de9dade6f11644 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'stylesheets' => [$this, 'block_stylesheets'],
            'header' => [$this, 'block_header'],
            'other' => [$this, 'block_other'],
            'javascripts' => [$this, 'block_javascripts'],
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@MahmoudEvent/HomeEvent/detail_event.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@MahmoudEvent/HomeEvent/detail_event.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "@MahmoudEvent/HomeEvent/detail_event.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
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
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "

<!-- Import Leaflet CSS Style Sheet -->
<link rel=\"stylesheet\" href=\"https://npmcdn.com/leaflet@1.0.0-rc.2/dist/leaflet.css\" />

    <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css\">
<style>
#my_osm_widget_map { /* use the same name as <div id=\"\"> */
\twidth: 100%; /* important! if you need full width display */
\theight: 400px;
\tmargin: 0;
\tborder-radius: 5px;
\t/* ... */
}
</style>


        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">


";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 28
    public function block_header($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header"));

        // line 29
        echo "      <!-- Header -->
      <header class=\"masthead\">
          <div class=\"container\">
              <div class=\"intro-text\">
                  <div class=\"intro-lead-in\">Welcome To Chick Click!</div>
                  <div class=\"intro-heading text-uppercase\">WELCOM TO FASHION EVENTS</div>
              </div>
          </div>
      </header>

  ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 40
    public function block_other($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "other"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "other"));

        // line 41
        echo "
        <!-- Import Leaflet JS Library -->
        <script src=\"https://npmcdn.com/leaflet@1.0.0-rc.2/dist/leaflet.js\"></script>


    <hr>
    <hr>
    <hr>

        <center>
        <div class=\"view overlay\">
            <!-- Card image -->
            <img class=\"card-img-top  w-75 p-3 h-10 d-inline-block align-content-lg-center\"  src=\"";
        // line 53
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["event"]) ? $context["event"] : $this->getContext($context, "event")), "displayPhoto", []), "html", null, true);
        echo "\" alt=\"Card image cap\">
            <a>
                <div class=\"mask rgba-white-slight\"></div>
            </a>
        </div>

        <!-- Card content -->
        <div class=\"card-body elegant-color white-text rounded-bottom w-50 p-3 h-10 d-inline-block align-content-md-center\" >

            <!-- Social shares button -->
            ";
        // line 64
        echo "            <!-- Title -->
            <h3 class=\"card-title\">";
        // line 65
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["event"]) ? $context["event"] : $this->getContext($context, "event")), "getEventTitle", []), "html", null, true);
        echo "</h3>


            <h5 class=\"card-title\">FROM :  ";
        // line 68
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["event"]) ? $context["event"] : $this->getContext($context, "event")), "getEventStartDate", []), "m/d/Y"), "html", null, true);
        echo "   TO :  ";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["event"]) ? $context["event"] : $this->getContext($context, "event")), "getEventEndDate", []), "m/d/Y"), "html", null, true);
        echo "  </h5>
            <hr class=\"hr-light\">
            <!-- Text -->
            <p class=\"card-text white-text mb-4\">";
        // line 71
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["event"]) ? $context["event"] : $this->getContext($context, "event")), "getEventDescription", []), "html", null, true);
        echo ".</p>
            <!-- Link -->

        </div>

        </center>
    <div>
        <center>
            <div class=\"col-8\">
                <div class=\"elements_milestones\">
                    <div class=\"elements_title\">Some Statistic</div>
                    <div class=\"milestones\">
                        <div class=\"row milestones_container\">

                            <!-- Milestone -->
                            <div class=\"col-lg-4 milestone_col\">
                                <div class=\"milestone d-flex flex-row align-items-start justify-content-start\">
                                    <div class=\"milestone_counter\" data-end-value=\"";
        // line 88
        echo twig_escape_filter($this->env, (isset($context["rank"]) ? $context["rank"] : $this->getContext($context, "rank")), "html", null, true);
        echo "\">0</div>
                                    <div class=\"milestone_content\">
                                        <div class=\"milestone_text\">Rank Of The Year</div>
                                        <div class=\"milestone_sub\">Top of the top</div>
                                    </div>
                                </div>
                            </div>

                            <!-- Milestone -->
                            <div class=\"col-lg-4 milestone_col\">
                                <div class=\"milestone d-flex flex-row align-items-start justify-content-start\">
                                    <div class=\"milestone_counter\" data-end-value=\"";
        // line 99
        echo twig_escape_filter($this->env, (isset($context["subscriber"]) ? $context["subscriber"] : $this->getContext($context, "subscriber")), "html", null, true);
        echo "\" data-sign-after=\"\">0</div>
                                    <div class=\"milestone_content\">
                                        <div class=\"milestone_text\">People Joined</div>
                                        <div class=\"milestone_sub\">Number Of Subscription</div>
                                    </div>
                                </div>
                            </div>

                            <!-- Milestone -->
                            <div class=\"col-lg-4 milestone_col\">
                                <div class=\"milestone d-flex flex-row align-items-start justify-content-start\">
                                    <div class=\"milestone_counter\" data-end-value=\"";
        // line 110
        echo twig_escape_filter($this->env, (isset($context["available"]) ? $context["available"] : $this->getContext($context, "available")), "html", null, true);
        echo "\">0</div>
                                    <div class=\"milestone_content\">
                                        <div class=\"milestone_text\">Available Place </div>
                                        <div class=\"milestone_sub\">Be Here</div>
                                    </div>
                                </div>
                            </div>



                        </div>
                    </div>
                </div>



            </div>



        </center>
    </div>

    <center>

        ";
        // line 136
        echo "
        <div class=\"elements_loaders\">
            <div class=\"elements_title\">INTERACTIONS</div>
            <div class=\"loaders_container\">
                <center>
                    ";
        // line 155
        echo "                        <div class=\" loader_col\">
                            <div class=\"circle loader\" data-value=\"";
        // line 156
        echo twig_escape_filter($this->env, (isset($context["perSubs"]) ? $context["perSubs"] : $this->getContext($context, "perSubs")), "html", null, true);
        echo "\">
                                <strong><i></i></strong>
                                <span>Subscription</span>
                            </div>
                        </div>
                    </div>
                </center>
            </div>
        </div>
    </center>



        <section class=\"bg-light page-section\" >

            <hr>

            <hr>
            <div id=\"my_osm_widget_map\"></div>
            <hr>
            <script >
                var lat = ";
        // line 177
        echo twig_escape_filter($this->env, (isset($context["lat"]) ? $context["lat"] : $this->getContext($context, "lat")), "html", null, true);
        echo ";
                var lon = ";
        // line 178
        echo twig_escape_filter($this->env, (isset($context["lon"]) ? $context["lon"] : $this->getContext($context, "lon")), "html", null, true);
        echo ";

                var mymap = L.map('my_osm_widget_map', { /* use the same name as your <div id=\"\"> */
                    center: [lat, lon], /* set GPS Coordinates */
                    zoom: 8, /* define the zoom level */
                    zoomControl: true, /* false = no zoom control buttons displayed */
                    scrollWheelZoom: true /* false = scrolling zoom on the map is locked */
                });

                L.tileLayer('https://api.tiles.mapbox.com/v4/{id}/{z}/{x}/{y}.png?access_token=pk.eyJ1IjoibWFobW91ZHNlbmRpIiwiYSI6ImNrM2FxYjR0NjBldm4zbW4zNGYxcHBqdXkifQ.V0MqzbF3ovQ3PfDQv87P4w', { /* set your personal MapBox Access Token */
                    maxZoom: 20, /* zoom limit of the map */
                    attribution: 'Données &copy; Contributeurs <a href=\"http://openstreetmap.org\">OpenStreetMap</a> + ' +
                    '<a href=\"http://mapbox.com\">Mapbox</a> | ' +
                    '<a href=\"https://creativecommons.org/licenses/by/2.0/\">CC-BY</a> ' +
                    'Guillaume Rouan 2016', /* set the map's caption */
                    id: 'mapbox.streets' /* mapbox.light / dark / streets / outdoors / satellite */
                }).addTo(mymap);


                L.marker([lat, lon]).addTo(mymap); /* set your location's GPS Coordinates : [LAT,LON] */

                L.popup
                    .setLatLng([lat, lon])
                    .setContent(";
        // line 201
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["event"]) ? $context["event"] : $this->getContext($context, "event")), "eventTitle", []), "html", null, true);
        echo ")
                    .openOn(mymap);
            </script>

        </section>

    ";
        // line 207
        $this->displayBlock('javascripts', $context, $blocks);
        // line 210
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 207
    public function block_javascripts($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 208
        echo "        ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@MahmoudEvent/HomeEvent/detail_event.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  347 => 208,  338 => 207,  327 => 210,  325 => 207,  316 => 201,  290 => 178,  286 => 177,  262 => 156,  259 => 155,  252 => 136,  224 => 110,  210 => 99,  196 => 88,  176 => 71,  168 => 68,  162 => 65,  159 => 64,  146 => 53,  132 => 41,  123 => 40,  103 => 29,  94 => 28,  63 => 5,  54 => 4,  32 => 1,);
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


{% block stylesheets %}
{{parent()}}

<!-- Import Leaflet CSS Style Sheet -->
<link rel=\"stylesheet\" href=\"https://npmcdn.com/leaflet@1.0.0-rc.2/dist/leaflet.css\" />

    <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css\">
<style>
#my_osm_widget_map { /* use the same name as <div id=\"\"> */
\twidth: 100%; /* important! if you need full width display */
\theight: 400px;
\tmargin: 0;
\tborder-radius: 5px;
\t/* ... */
}
</style>


        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">


{% endblock  %}


  {% block header %}
      <!-- Header -->
      <header class=\"masthead\">
          <div class=\"container\">
              <div class=\"intro-text\">
                  <div class=\"intro-lead-in\">Welcome To Chick Click!</div>
                  <div class=\"intro-heading text-uppercase\">WELCOM TO FASHION EVENTS</div>
              </div>
          </div>
      </header>

  {% endblock %}
{% block other %}

        <!-- Import Leaflet JS Library -->
        <script src=\"https://npmcdn.com/leaflet@1.0.0-rc.2/dist/leaflet.js\"></script>


    <hr>
    <hr>
    <hr>

        <center>
        <div class=\"view overlay\">
            <!-- Card image -->
            <img class=\"card-img-top  w-75 p-3 h-10 d-inline-block align-content-lg-center\"  src=\"{{ event.displayPhoto  }}\" alt=\"Card image cap\">
            <a>
                <div class=\"mask rgba-white-slight\"></div>
            </a>
        </div>

        <!-- Card content -->
        <div class=\"card-body elegant-color white-text rounded-bottom w-50 p-3 h-10 d-inline-block align-content-md-center\" >

            <!-- Social shares button -->
            {#<a class=\"activator waves-effect mr-4\"><i class=\"fas fa-share-alt white-text\">Like</i></a>#}
            <!-- Title -->
            <h3 class=\"card-title\">{{ event.getEventTitle }}</h3>


            <h5 class=\"card-title\">FROM :  {{ event.getEventStartDate|date(\"m/d/Y\") }}   TO :  {{ event.getEventEndDate|date(\"m/d/Y\") }}  </h5>
            <hr class=\"hr-light\">
            <!-- Text -->
            <p class=\"card-text white-text mb-4\">{{ event.getEventDescription }}.</p>
            <!-- Link -->

        </div>

        </center>
    <div>
        <center>
            <div class=\"col-8\">
                <div class=\"elements_milestones\">
                    <div class=\"elements_title\">Some Statistic</div>
                    <div class=\"milestones\">
                        <div class=\"row milestones_container\">

                            <!-- Milestone -->
                            <div class=\"col-lg-4 milestone_col\">
                                <div class=\"milestone d-flex flex-row align-items-start justify-content-start\">
                                    <div class=\"milestone_counter\" data-end-value=\"{{ rank }}\">0</div>
                                    <div class=\"milestone_content\">
                                        <div class=\"milestone_text\">Rank Of The Year</div>
                                        <div class=\"milestone_sub\">Top of the top</div>
                                    </div>
                                </div>
                            </div>

                            <!-- Milestone -->
                            <div class=\"col-lg-4 milestone_col\">
                                <div class=\"milestone d-flex flex-row align-items-start justify-content-start\">
                                    <div class=\"milestone_counter\" data-end-value=\"{{ subscriber }}\" data-sign-after=\"\">0</div>
                                    <div class=\"milestone_content\">
                                        <div class=\"milestone_text\">People Joined</div>
                                        <div class=\"milestone_sub\">Number Of Subscription</div>
                                    </div>
                                </div>
                            </div>

                            <!-- Milestone -->
                            <div class=\"col-lg-4 milestone_col\">
                                <div class=\"milestone d-flex flex-row align-items-start justify-content-start\">
                                    <div class=\"milestone_counter\" data-end-value=\"{{ available }}\">0</div>
                                    <div class=\"milestone_content\">
                                        <div class=\"milestone_text\">Available Place </div>
                                        <div class=\"milestone_sub\">Be Here</div>
                                    </div>
                                </div>
                            </div>



                        </div>
                    </div>
                </div>



            </div>



        </center>
    </div>

    <center>

        {# element rend statistique#}

        <div class=\"elements_loaders\">
            <div class=\"elements_title\">INTERACTIONS</div>
            <div class=\"loaders_container\">
                <center>
                    {#<div class=\"row elements_loaders_container\">
                        <div class=\"col-lg-3 loader_col\">
                            <!-- Loader -->
                            <div class=\"circle loader\" data-value=\"0.85\">
                                <strong><i></i></strong>
                                <span>Like</span>
                            </div>
                        </div>
                        <div class=\"col-lg-3 loader_col\">
                            <div class=\"circle loader\" data-value=\"0.50\">
                                <strong><i></i></strong>
                                <span>Rating</span>
                            </div>
                        </div>#}
                        <div class=\" loader_col\">
                            <div class=\"circle loader\" data-value=\"{{ perSubs }}\">
                                <strong><i></i></strong>
                                <span>Subscription</span>
                            </div>
                        </div>
                    </div>
                </center>
            </div>
        </div>
    </center>



        <section class=\"bg-light page-section\" >

            <hr>

            <hr>
            <div id=\"my_osm_widget_map\"></div>
            <hr>
            <script >
                var lat = {{ lat }};
                var lon = {{ lon }};

                var mymap = L.map('my_osm_widget_map', { /* use the same name as your <div id=\"\"> */
                    center: [lat, lon], /* set GPS Coordinates */
                    zoom: 8, /* define the zoom level */
                    zoomControl: true, /* false = no zoom control buttons displayed */
                    scrollWheelZoom: true /* false = scrolling zoom on the map is locked */
                });

                L.tileLayer('https://api.tiles.mapbox.com/v4/{id}/{z}/{x}/{y}.png?access_token=pk.eyJ1IjoibWFobW91ZHNlbmRpIiwiYSI6ImNrM2FxYjR0NjBldm4zbW4zNGYxcHBqdXkifQ.V0MqzbF3ovQ3PfDQv87P4w', { /* set your personal MapBox Access Token */
                    maxZoom: 20, /* zoom limit of the map */
                    attribution: 'Données &copy; Contributeurs <a href=\"http://openstreetmap.org\">OpenStreetMap</a> + ' +
                    '<a href=\"http://mapbox.com\">Mapbox</a> | ' +
                    '<a href=\"https://creativecommons.org/licenses/by/2.0/\">CC-BY</a> ' +
                    'Guillaume Rouan 2016', /* set the map's caption */
                    id: 'mapbox.streets' /* mapbox.light / dark / streets / outdoors / satellite */
                }).addTo(mymap);


                L.marker([lat, lon]).addTo(mymap); /* set your location's GPS Coordinates : [LAT,LON] */

                L.popup
                    .setLatLng([lat, lon])
                    .setContent({{ event.eventTitle }})
                    .openOn(mymap);
            </script>

        </section>

    {% block javascripts %}
        {{ parent() }}
    {% endblock %}

{%  endblock %}", "@MahmoudEvent/HomeEvent/detail_event.html.twig", "C:\\wamp64\\www\\Chick_Click\\src\\Mahmoud\\EventBundle\\Resources\\views\\HomeEvent\\detail_event.html.twig");
    }
}
