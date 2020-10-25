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

/* @MahmoudEvent/HomeEvent/show_event.html.twig */
class __TwigTemplate_802386734235e48002926ccda17d7f4d41a9e49d8555d10f9433fc47cd953432 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@MahmoudEvent/HomeEvent/show_event.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@MahmoudEvent/HomeEvent/show_event.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "@MahmoudEvent/HomeEvent/show_event.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_header($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header"));

        // line 4
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

    // line 16
    public function block_other($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "other"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "other"));

        // line 17
        echo "
    <br>

    ";
        // line 46
        echo "
    <div class=\"w-100\">
        <center>
            <form action=\"";
        // line 49
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("search_event");
        echo "\" id=\"searchi\" class=\"\" method=\"get\">

                <select name=\"\" id=\"\">
                    <option value=\"Country\" id=\"Country\">ByCountry</option>
                    <option value=\"Filter\" id=\"Filter\">Filter By</option>
                </select>
                <input type=\"text\" class=\"w-75\" placeholder=\"search for event\" id=\"search\">
                <button class=\"\" type=\"submit\"><i class=\"fa fa-search\"
                                                  aria-hidden=\"true\"></i></button>
            </form>
        </center>


    </div>




    <div class=\"events\" id=\"entitiesNav\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col\">
                    <ul>

                    </ul>

                </div>
            </div>
        </div>
    </div>

    <br>

    <!-- jQuery is necessary -->
    <script type=\"text/javascript\" src=\"https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js\"></script>

    <script type=\"text/javascript\">
        jQuery(document).ready(function () {
            var searchRequest = null;
            /* \$(\"#selector\").keyup(function (){}*/
            \$(\"#search\").keyup(function () {
                var minlength = 3;
                var that = this;
                var value = \$(this).val();
                var entitySelector = \$(\"#entitiesNav\").html('');
                if (value.length >= minlength) {
                    if (searchRequest != null)
                        searchRequest.abort();
                    searchRequest = \$.ajax({
                        type: \"GET\",
                        url: \"";
        // line 99
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ajax_search");
        echo "\",
                        data: {
                            'q': value
                        },
                        dataType: \"text\",
                        success: function (msg) {
                            //we need to check if the value is the same
                            if (value == \$(that).val()) {
                                var result = JSON.parse(msg);
                                \$.each(result, function (key, arr) {
                                    \$.each(arr, function (id, value) {
                                        if (key == 'entities') {
                                            if (id != 'error') {
                                                entitySelector.append('' +
                                                    '<div style=\"width: auto; height: 100px; padding-left: 50px \" id=\"show_event_div\">' +
                                                    '<div class=\"container\">' +
                                                    '<li> <a href=\"/chick_click/web/app_dev.php/event/showEventDetail/'+id+' \">  <img  src=\" ' + value[1] + '\" style=\"width: 90px ;height: 50px\" >  ' + value[0] + '</a></li>' +
                                                    ' </div>' +
                                                    ' </div>');
                                            } else {
                                                entitySelector.append('<li class=\"errorLi\">' + value + '</li>');
                                            }
                                        }
                                    });
                                });
                            }

                        }
                    });
                }
            });
        });
    </script>
    <br>


    <hr>
    <div class=\"events\" id=\"show_event_div\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col\">

                    ";
        // line 141
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["listEvent"]) ? $context["listEvent"] : $this->getContext($context, "listEvent")));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 142
            echo "
                    <!-- Event -->
                    <div class=\"event \">
                        <div class=\"row row-lg-eq-height\">
                            <div class=\"col-lg-6 event_col\">
                                <div class=\"event_image_container\">
                                    <div class=\"background_image\"
                                         style=\"background-image:url(";
            // line 149
            echo twig_escape_filter($this->env, $this->getAttribute($context["i"], "displayPhoto", []), "html", null, true);
            echo ")\"></div>
                                    <div class=\"date_container\">
                                        <a href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"date_content d-flex flex-column align-items-center justify-content-center\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"date_day\">";
            // line 153
            echo twig_escape_filter($this->env, twig_slice($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["i"], "getEventStartDate", []), "m/d/Y"), 3, 2), "html", null, true);
            echo "</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"date_month\">";
            // line 154
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["i"], "getEventStartDate", []), "M"), "html", null, true);
            echo "</div>
\t\t\t\t\t\t\t\t\t\t\t</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class=\"col-lg-6 event_col\">
                                <div class=\"event_content\">
                                    <div class=\"event_title\">";
            // line 162
            echo twig_escape_filter($this->env, $this->getAttribute($context["i"], "getEventTitle", []), "html", null, true);
            echo "</div>
                                    <div class=\"event_location\">@ ";
            // line 163
            echo twig_escape_filter($this->env, $this->getAttribute($context["i"], "getEventCountry", []), "html", null, true);
            echo "</div>
                                    <div class=\"event_text\">
                                        <p>Donec quis metus ac arcu luctus accumsan. Nunc in justo tincidunt,
                                            sodales nunc id, finibus nibh. Class aptent taciti sociosqu ad
                                            litora torquent per conubia nostra, per inceptos himenaeos. Fusce
                                            nec ante vitae lacus aliquet vulputate. Donec scelerisque accu msan
                                            molestie. Vestibulum ante ipsum primis in faucibus orci luctus.</p>
                                    </div>
                                    <div><a href=\" ";
            // line 171
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("event_detail", ["id" => $this->getAttribute($context["i"], "getId", [])]), "html", null, true);
            echo "\"
                                            class=\"white-text d-flex justify-content-end\"><h5>Read more <i
                                                        class=\"fas fa-angle-double-right\"></i></h5></a>
                                    </div>
                                    <div class=\"event_speakers\">
                                        <!-- Event Speaker -->
                                        <div class=\"event_speaker d-flex flex-row align-items-center justify-content-start\">
                                            <table>
                                                <tr>
                                                   ";
            // line 191
            echo "                                                    <td>
                                                        <div class=\"col-lg-4 milestone_col\">
                                                            <div class=\"milestone d-flex flex-row align-items-start justify-content-start\">
                                                                <div class=\"milestone_counter\" data-end-value=\"";
            // line 194
            echo twig_escape_filter($this->env, $this->getAttribute($context["i"], "getEventNBRPlace", []), "html", null, true);
            echo "\">0
                                                                </div>
                                                                <div class=\"milestone_content\">
                                                                    <div class=\"milestone_text\">Availability</div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                            </table>

                                        </div>
                                        ";
            // line 217
            echo "                                        <!-- Event Speaker -->
                                        ";
            // line 228
            echo "                                    <div class=\"event_buttons \">
                                        <div class=\"button event_button event_button_1\"><a
                                                    href=\"";
            // line 230
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("reserve_event", ["id" => $this->getAttribute($context["i"], "getId", [])]), "html", null, true);
            echo "\">Get Your
                                                Reservation Now!</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 240
        echo "                <div class=\" align-content-lg-center\">";
        echo $this->env->getExtension('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension')->render($this->env, (isset($context["listEvent"]) ? $context["listEvent"] : $this->getContext($context, "listEvent")));
        echo "</div>

                <br>
                <br>
                <br>
            </div>

        </div>
    </div>

    </div>

    <script src=\"https://npmcdn.com/leaflet@1.0.0-rc.2/dist/leaflet.js\"></script>

    <br>
    <br>
    <br>

    ";
        // line 258
        $this->displayBlock('javascripts', $context, $blocks);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function block_javascripts($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 259
        echo "        ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@MahmoudEvent/HomeEvent/show_event.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  344 => 259,  326 => 258,  304 => 240,  288 => 230,  284 => 228,  281 => 217,  266 => 194,  261 => 191,  249 => 171,  238 => 163,  234 => 162,  223 => 154,  219 => 153,  212 => 149,  203 => 142,  199 => 141,  154 => 99,  101 => 49,  96 => 46,  91 => 17,  82 => 16,  62 => 4,  53 => 3,  31 => 1,);
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
                  <div class=\"intro-heading text-uppercase\">WELCOM TO FASHION EVENTS</div>
              </div>
          </div>
      </header>

  {% endblock %}

{% block other %}

    <br>

    {# <div class=\"container\">
         <div class=\"row\">
             <div class=\"col-xs-8 col-xs-offset-2\">
                 <div class=\"input-group\">
                     <div class=\"input-group-btn search-panel\">
                         <button type=\"button\" class=\"btn btn-default dropdown-toggle\" data-toggle=\"dropdown\">
                             <span id=\"search_concept\">Filter by</span> <span class=\"caret\"></span>
                         </button>
                         <ul class=\"dropdown-menu\" role=\"menu\">
                             <li><a href=\"#contains\">Contains</a></li>
                             <li><a href=\"#its_equal\">It's equal</a></li>
                             <li><a href=\"#greather_than\">Greather than ></a></li>
                             <li><a href=\"#less_than\">Less than < </a></li>
                             <li class=\"divider\"></li>
                             <li><a href=\"#all\">Anything</a></li>
                         </ul>
                     </div>
                     <input type=\"hidden\" name=\"search_param\" value=\"all\" id=\"search_param\">
                     <input type=\"text\" class=\"form-control\" name=\"x\" placeholder=\"Search term...\">
                     <span class=\"input-group-btn\">
                     <button class=\"btn btn-default\" type=\"button\"><span class=\"glyphicon glyphicon-search\"></span></button>
                 </span>
                 </div>
             </div>
         </div>
     </div>#}

    <div class=\"w-100\">
        <center>
            <form action=\"{{ path('search_event') }}\" id=\"searchi\" class=\"\" method=\"get\">

                <select name=\"\" id=\"\">
                    <option value=\"Country\" id=\"Country\">ByCountry</option>
                    <option value=\"Filter\" id=\"Filter\">Filter By</option>
                </select>
                <input type=\"text\" class=\"w-75\" placeholder=\"search for event\" id=\"search\">
                <button class=\"\" type=\"submit\"><i class=\"fa fa-search\"
                                                  aria-hidden=\"true\"></i></button>
            </form>
        </center>


    </div>




    <div class=\"events\" id=\"entitiesNav\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col\">
                    <ul>

                    </ul>

                </div>
            </div>
        </div>
    </div>

    <br>

    <!-- jQuery is necessary -->
    <script type=\"text/javascript\" src=\"https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js\"></script>

    <script type=\"text/javascript\">
        jQuery(document).ready(function () {
            var searchRequest = null;
            /* \$(\"#selector\").keyup(function (){}*/
            \$(\"#search\").keyup(function () {
                var minlength = 3;
                var that = this;
                var value = \$(this).val();
                var entitySelector = \$(\"#entitiesNav\").html('');
                if (value.length >= minlength) {
                    if (searchRequest != null)
                        searchRequest.abort();
                    searchRequest = \$.ajax({
                        type: \"GET\",
                        url: \"{{ path('ajax_search') }}\",
                        data: {
                            'q': value
                        },
                        dataType: \"text\",
                        success: function (msg) {
                            //we need to check if the value is the same
                            if (value == \$(that).val()) {
                                var result = JSON.parse(msg);
                                \$.each(result, function (key, arr) {
                                    \$.each(arr, function (id, value) {
                                        if (key == 'entities') {
                                            if (id != 'error') {
                                                entitySelector.append('' +
                                                    '<div style=\"width: auto; height: 100px; padding-left: 50px \" id=\"show_event_div\">' +
                                                    '<div class=\"container\">' +
                                                    '<li> <a href=\"/chick_click/web/app_dev.php/event/showEventDetail/'+id+' \">  <img  src=\" ' + value[1] + '\" style=\"width: 90px ;height: 50px\" >  ' + value[0] + '</a></li>' +
                                                    ' </div>' +
                                                    ' </div>');
                                            } else {
                                                entitySelector.append('<li class=\"errorLi\">' + value + '</li>');
                                            }
                                        }
                                    });
                                });
                            }

                        }
                    });
                }
            });
        });
    </script>
    <br>


    <hr>
    <div class=\"events\" id=\"show_event_div\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col\">

                    {% for i in  listEvent %}

                    <!-- Event -->
                    <div class=\"event \">
                        <div class=\"row row-lg-eq-height\">
                            <div class=\"col-lg-6 event_col\">
                                <div class=\"event_image_container\">
                                    <div class=\"background_image\"
                                         style=\"background-image:url({{ i.displayPhoto }})\"></div>
                                    <div class=\"date_container\">
                                        <a href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"date_content d-flex flex-column align-items-center justify-content-center\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"date_day\">{{ i.getEventStartDate|date(\"m/d/Y\")|slice(3,2) }}</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"date_month\">{{ i.getEventStartDate|date(\"M\") }}</div>
\t\t\t\t\t\t\t\t\t\t\t</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class=\"col-lg-6 event_col\">
                                <div class=\"event_content\">
                                    <div class=\"event_title\">{{ i.getEventTitle }}</div>
                                    <div class=\"event_location\">@ {{ i.getEventCountry }}</div>
                                    <div class=\"event_text\">
                                        <p>Donec quis metus ac arcu luctus accumsan. Nunc in justo tincidunt,
                                            sodales nunc id, finibus nibh. Class aptent taciti sociosqu ad
                                            litora torquent per conubia nostra, per inceptos himenaeos. Fusce
                                            nec ante vitae lacus aliquet vulputate. Donec scelerisque accu msan
                                            molestie. Vestibulum ante ipsum primis in faucibus orci luctus.</p>
                                    </div>
                                    <div><a href=\" {{ path('event_detail',{'id':i.getId}) }}\"
                                            class=\"white-text d-flex justify-content-end\"><h5>Read more <i
                                                        class=\"fas fa-angle-double-right\"></i></h5></a>
                                    </div>
                                    <div class=\"event_speakers\">
                                        <!-- Event Speaker -->
                                        <div class=\"event_speaker d-flex flex-row align-items-center justify-content-start\">
                                            <table>
                                                <tr>
                                                   {# <td>
                                                        <div class=\"col-lg-4 milestone_col\">
                                                            <div class=\"milestone d-flex flex-row align-items-start justify-content-start\">
                                                                <div class=\"milestone_counter\" data-end-value=\"2\">0
                                                                </div>
                                                                <div class=\"milestone_content\">
                                                                    <div class=\"milestone_text\">Subscriber</div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </td>#}
                                                    <td>
                                                        <div class=\"col-lg-4 milestone_col\">
                                                            <div class=\"milestone d-flex flex-row align-items-start justify-content-start\">
                                                                <div class=\"milestone_counter\" data-end-value=\"{{ i.getEventNBRPlace }}\">0
                                                                </div>
                                                                <div class=\"milestone_content\">
                                                                    <div class=\"milestone_text\">Availability</div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                            </table>

                                        </div>
                                        {#<div class=\"event_speaker d-flex flex-row align-items-center justify-content-start\">
                                            <div>
                                                <div class=\"event_speaker_image\"><img
                                                            src=\"{{ asset('No-Image-Availbe.jpg') }}\" alt=\"\">
                                                </div>
                                            </div>
                                            <div class=\"event_speaker_content\">
                                                <div class=\"event_speaker_name\">Michael Smith</div>
                                                <div class=\"event_speaker_title\">Marketing Specialist</div>
                                            </div>
                                        </div>#}
                                        <!-- Event Speaker -->
                                        {#  <div class=\"event_speaker d-flex flex-row align-items-center justify-content-start\">
                                              <div>
                                                  <div class=\"event_speaker_image\"><input type=\"image\"
                                                                                          data-image-src=\"\"></div>
                                              </div>
                                              <div class=\"event_speaker_content\">
                                                  <div class=\"event_speaker_name\"></div>

                                              </div>
                                          </div>#}
                                    <div class=\"event_buttons \">
                                        <div class=\"button event_button event_button_1\"><a
                                                    href=\"{{ path('reserve_event',{'id':i.getId}) }}\">Get Your
                                                Reservation Now!</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                {% endfor %}
                <div class=\" align-content-lg-center\">{{ knp_pagination_render(listEvent) }}</div>

                <br>
                <br>
                <br>
            </div>

        </div>
    </div>

    </div>

    <script src=\"https://npmcdn.com/leaflet@1.0.0-rc.2/dist/leaflet.js\"></script>

    <br>
    <br>
    <br>

    {% block javascripts %}
        {{ parent() }}
    {% endblock %}
{% endblock %}
", "@MahmoudEvent/HomeEvent/show_event.html.twig", "C:\\wamp64\\www\\Chick_Click\\src\\Mahmoud\\EventBundle\\Resources\\views\\HomeEvent\\show_event.html.twig");
    }
}
