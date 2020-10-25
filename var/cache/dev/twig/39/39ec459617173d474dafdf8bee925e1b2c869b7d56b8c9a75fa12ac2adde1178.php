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

/* @MahmoudEvent/HomeEvent/map_event.html.twig */
class __TwigTemplate_0b0c366d5caf16d1dfc12510fac3141c4400ac135e0ce7ab98c0c4ef6c96cb0f extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'stylesheets' => [$this, 'block_stylesheets'],
            'other' => [$this, 'block_other'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 2
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@MahmoudEvent/HomeEvent/map_event.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@MahmoudEvent/HomeEvent/map_event.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "@MahmoudEvent/HomeEvent/map_event.html.twig", 2);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 5
    public function block_stylesheets($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 6
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "

    <link rel=\"stylesheet\" href=\"https://unpkg.com/leaflet@1.3.1/dist/leaflet.css\" integrity=\"sha512-Rksm5RenBEKSKFjgI3a41vrjkw4EVPlJ3+OiI65vTjIdo9brlAacEuKOiQ5OFh7cOI1bkDwLqdLw3Zg0cRJAAQ==\"crossorigin=\"\" />
    <link rel=\"stylesheet\" type=\"text/css\" href=\"https://unpkg.com/leaflet.markercluster@1.3.0/dist/MarkerCluster.css\" />
    <link rel=\"stylesheet\" type=\"text/css\" href=\"https://unpkg.com/leaflet.markercluster@1.3.0/dist/MarkerCluster.Default.css\" />
    <script src=\"https://unpkg.com/leaflet@1.3.1/dist/leaflet.js\" integrity=\"sha512-/Nsx9X4HebavoBvEBuyp3I7od5tA0UzAxs+j83KgC8PU0kgB4XiK4Lfe4y4cgBtaRJQEIFCW+oC506aPT2L1zw==\"crossorigin=\"\"></script>
    <script type='text/javascript' src='https://code.jquery.com/jquery-3.3.1.min.js'></script>
    <script type='text/javascript' src='https://unpkg.com/leaflet.markercluster@1.3.0/dist/leaflet.markercluster.js'></script>
    <style type=\"text/css\">
        #map{ /* la carte DOIT avoir une hauteur sinon elle n'apparaît pas */
            height:600px;
            width: 800px;
        }
    </style>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 24
    public function block_other($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "other"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "other"));

        // line 25
        echo "    ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 91
        echo "    <br>
    <br>
    <br>



    <table>
        <tr>
            <td>

                <h1>Add Location Event </h1>
                ";
        // line 102
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
                 </br> </br>

                <center >

                    ";
        // line 107
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
                    lattitude:  ";
        // line 108
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "lattitude", []), 'widget', ["id" => "lat"]);
        echo " </br> </br>
                    longitude:  ";
        // line 109
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "longitude", []), 'widget', ["id" => "long"]);
        echo " </br> </br>

                    <center> ";
        // line 111
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo " </center>
                    <br>

                </center>
            </td>
            <td>
                <div  id=\"map\"  >

                    <!-- Ici s'affichera la carte -->
                </div >
            </td>

        </tr>


    </table>




    <br>
    <br>
    <br>
   ";
        // line 142
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 25
    public function block_javascripts($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 26
        echo "        ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
        <script type=\"text/javascript\">
            var theme = 'https://{s}.tile.openstreetmap.fr/osmfr/{z}/{x}/{y}.png';
            var lat = 8.619543;
            var lon = 0.82;
            var alt =481;
            var macarte = null;
            //var trace = new Array();
            var i = 0;
            //var marker1;
            var markerClusters; // Servira à stocker les groupes de marqueurs
            var popup = L.popup();
            var mark =L.marker();
            function initMap(){

                // Nous définissons le dossier qui contiendra les marqueurs
                //var iconBase = 'img';
                // Créer l'objet \"macarte\" et l'insèrer dans l'élément HTML qui a l'ID \"map\"
                macarte = L.map('map').setView([lat, lon], 5);
                // markerClusters = L.markerClusterGroup; // Nous initialisons les groupes de marqueurs
                // Leaflet ne récupère pas les cartes (tiles) sur un serveur par défaut. Nous devons lui préciser où nous souhaitons les récupérer. Ici, openstreetmap.fr
                L.tileLayer(theme, {
                    // Il est toujours bien de laisser le lien vers la source des données
                    //attribution: 'données © OpenStreetMap/ODbL - rendu OSM France',
                    minZoom: 1,
                    maxZoom: 20
                }).addTo(macarte);
                macarte.on('click', onMapClick);
            }


            function onMapClick(e) {
                popup
                    .setLatLng(e.latlng)
                    .setContent(\"You clicked the map at \" + e.latlng.toString())
                    .openOn(macarte);

                mark.setLatLng(e.latlng).addTo(macarte);

                var str = e.latlng.toString();
                var l =str.indexOf(\"(\")+1;
                var r = str.indexOf(\",\")-l;
                var latt = str.substr(l, r).trim();

                var l =str.indexOf(\",\")+1;
                var r = str.indexOf(\")\")-l;
                var longg = str.substr(l, r).trim();
                document.getElementById(\"lat\").value = latt;
                document.getElementById(\"long\").value = longg;




            }




            \$(document).ready(function(){
                initMap();

            });
        </script>

    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@MahmoudEvent/HomeEvent/map_event.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  179 => 26,  170 => 25,  159 => 142,  133 => 111,  128 => 109,  124 => 108,  120 => 107,  112 => 102,  99 => 91,  96 => 25,  87 => 24,  62 => 6,  53 => 5,  31 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("
{% extends \"base.html.twig\" %}


{% block stylesheets %}
{{parent()}}

    <link rel=\"stylesheet\" href=\"https://unpkg.com/leaflet@1.3.1/dist/leaflet.css\" integrity=\"sha512-Rksm5RenBEKSKFjgI3a41vrjkw4EVPlJ3+OiI65vTjIdo9brlAacEuKOiQ5OFh7cOI1bkDwLqdLw3Zg0cRJAAQ==\"crossorigin=\"\" />
    <link rel=\"stylesheet\" type=\"text/css\" href=\"https://unpkg.com/leaflet.markercluster@1.3.0/dist/MarkerCluster.css\" />
    <link rel=\"stylesheet\" type=\"text/css\" href=\"https://unpkg.com/leaflet.markercluster@1.3.0/dist/MarkerCluster.Default.css\" />
    <script src=\"https://unpkg.com/leaflet@1.3.1/dist/leaflet.js\" integrity=\"sha512-/Nsx9X4HebavoBvEBuyp3I7od5tA0UzAxs+j83KgC8PU0kgB4XiK4Lfe4y4cgBtaRJQEIFCW+oC506aPT2L1zw==\"crossorigin=\"\"></script>
    <script type='text/javascript' src='https://code.jquery.com/jquery-3.3.1.min.js'></script>
    <script type='text/javascript' src='https://unpkg.com/leaflet.markercluster@1.3.0/dist/leaflet.markercluster.js'></script>
    <style type=\"text/css\">
        #map{ /* la carte DOIT avoir une hauteur sinon elle n'apparaît pas */
            height:600px;
            width: 800px;
        }
    </style>
{% endblock %}



{% block other %}
    {% block javascripts %}
        {{parent()}}
        <script type=\"text/javascript\">
            var theme = 'https://{s}.tile.openstreetmap.fr/osmfr/{z}/{x}/{y}.png';
            var lat = 8.619543;
            var lon = 0.82;
            var alt =481;
            var macarte = null;
            //var trace = new Array();
            var i = 0;
            //var marker1;
            var markerClusters; // Servira à stocker les groupes de marqueurs
            var popup = L.popup();
            var mark =L.marker();
            function initMap(){

                // Nous définissons le dossier qui contiendra les marqueurs
                //var iconBase = 'img';
                // Créer l'objet \"macarte\" et l'insèrer dans l'élément HTML qui a l'ID \"map\"
                macarte = L.map('map').setView([lat, lon], 5);
                // markerClusters = L.markerClusterGroup; // Nous initialisons les groupes de marqueurs
                // Leaflet ne récupère pas les cartes (tiles) sur un serveur par défaut. Nous devons lui préciser où nous souhaitons les récupérer. Ici, openstreetmap.fr
                L.tileLayer(theme, {
                    // Il est toujours bien de laisser le lien vers la source des données
                    //attribution: 'données © OpenStreetMap/ODbL - rendu OSM France',
                    minZoom: 1,
                    maxZoom: 20
                }).addTo(macarte);
                macarte.on('click', onMapClick);
            }


            function onMapClick(e) {
                popup
                    .setLatLng(e.latlng)
                    .setContent(\"You clicked the map at \" + e.latlng.toString())
                    .openOn(macarte);

                mark.setLatLng(e.latlng).addTo(macarte);

                var str = e.latlng.toString();
                var l =str.indexOf(\"(\")+1;
                var r = str.indexOf(\",\")-l;
                var latt = str.substr(l, r).trim();

                var l =str.indexOf(\",\")+1;
                var r = str.indexOf(\")\")-l;
                var longg = str.substr(l, r).trim();
                document.getElementById(\"lat\").value = latt;
                document.getElementById(\"long\").value = longg;




            }




            \$(document).ready(function(){
                initMap();

            });
        </script>

    {% endblock %}
    <br>
    <br>
    <br>



    <table>
        <tr>
            <td>

                <h1>Add Location Event </h1>
                {{ form_start(form)  }}
                 </br> </br>

                <center >

                    {{ form_start(form)  }}
                    lattitude:  {{ form_widget(form.lattitude,{'id':\"lat\"}) }} </br> </br>
                    longitude:  {{ form_widget(form.longitude,{'id':\"long\"})}} </br> </br>

                    <center> {{ form_rest(form) }} </center>
                    <br>

                </center>
            </td>
            <td>
                <div  id=\"map\"  >

                    <!-- Ici s'affichera la carte -->
                </div >
            </td>

        </tr>


    </table>




    <br>
    <br>
    <br>
   {# <div class=\"color-box break\">
        <div class=\"shadow\">
            <div class=\"info-tab note-icon\" title=\"Important Notes\"><i></i></div>
            <div class=\"note-box\">
                <p><strong>Note:</strong> It is recommended to include a label for every form inputs otherwise screen readers will have trouble with your forms. However, in case of inline form layouts you can hide the labels using the <code>.sr-only</code> class, so that only screen readers can read it.</p>
            </div>
        </div>
    </div>#}

{% endblock %}




", "@MahmoudEvent/HomeEvent/map_event.html.twig", "C:\\wamp64\\www\\Chick_Click\\src\\Mahmoud\\EventBundle\\Resources\\views\\HomeEvent\\map_event.html.twig");
    }
}
