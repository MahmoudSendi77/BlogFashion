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

/* @MahmoudEvent/HomeEvent/admin_admin.html.twig */
class __TwigTemplate_9fa66b6ca26cd4df98e7e48d5e8269a75923fb362f3bfa9329454b5abfda9389 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'stylesheets' => [$this, 'block_stylesheets'],
            'content_event' => [$this, 'block_content_event'],
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@MahmoudEvent/HomeEvent/admin_admin.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@MahmoudEvent/HomeEvent/admin_admin.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "@MahmoudEvent/HomeEvent/admin_admin.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 4
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "

    ";
        // line 7
        echo "    ";
        // line 11
        echo "    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("eventStyle/styles/events.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("eventStyle/styles/events_responsive.css"), "html", null, true);
        echo "\">

    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("eventStyle/styles/bootstrap4/bootstrap.min.css"), "html", null, true);
        echo "\">


    ";
        // line 19
        echo "    ";
        // line 22
        echo "


";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 39
    public function block_content_event($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content_event"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content_event"));

        // line 40
        echo "
    <section>


        <br>
        ";
        // line 48
        echo "
        <br>
        ";
        // line 58
        echo "        <hr>
        <hr>
        <div class=\"events\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col\">

                        ";
        // line 65
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["listEvent"]) ? $context["listEvent"] : $this->getContext($context, "listEvent")));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 66
            echo "
                            <!-- Event -->
                            <div class=\"event \">
                                <div class=\"row row-lg-eq-height\">
                                    <div class=\"col-lg-6 event_col\">
                                        <div class=\"event_image_container\">
                                            <div class=\"background_image\" style=\"background-image:url(";
            // line 72
            echo twig_escape_filter($this->env, $this->getAttribute($context["i"], "displayPhoto", []), "html", null, true);
            echo ")\" ><img src=\"images/event_speaker_2.jpg\" alt=\"\"> </div>
                                            <div class=\"date_container\">
                                                <a href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"date_content d-flex flex-column align-items-center justify-content-center\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"date_day\">";
            // line 76
            echo twig_escape_filter($this->env, twig_slice($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["i"], "getEventStartDate", []), "m/d/Y"), 3, 2), "html", null, true);
            echo "</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"date_month\">May</div>
\t\t\t\t\t\t\t\t\t\t\t</span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"col-lg-6 event_col\">
                                        <div class=\"event_content\">
                                            <div class=\"event_title\">";
            // line 85
            echo twig_escape_filter($this->env, $this->getAttribute($context["i"], "getEventTitle", []), "html", null, true);
            echo "</div>
                                            <div class=\"event_location\">@ Miami Auditorium</div>
                                            <div class=\"event_text\">
                                                <p>Donec quis metus ac arcu luctus accumsan. Nunc in justo tincidunt, sodales nunc id, finibus nibh. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Fusce nec ante vitae lacus aliquet vulputate. Donec scelerisque accu msan molestie. Vestibulum ante ipsum primis in faucibus orci luctus.</p>
                                            </div>
                                            <div ><a href=\" ";
            // line 90
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("event_detail", ["id" => $this->getAttribute($context["i"], "getId", [])]), "html", null, true);
            echo "\" class=\"white-text d-flex justify-content-end\"><h5>Read more <i class=\"fas fa-angle-double-right\"></i></h5></a>
                                            </div>
                                            <div class=\"event_speakers\">
                                                <!-- Event Speaker -->
                                                <div class=\"event_speaker d-flex flex-row align-items-center justify-content-start\">
                                                    <div><div class=\"event_speaker_image\"><img src=\"\" alt=\"\"></div></div>
                                                    <div class=\"event_speaker_content\">
                                                        <div class=\"event_speaker_name\">Michael Smith</div>
                                                        <div class=\"event_speaker_title\">Marketing Specialist</div>
                                                    </div>
                                                </div>
                                                <!-- Event Speaker -->
                                                <div class=\"event_speaker d-flex flex-row align-items-center justify-content-start\">
                                                    <div><div class=\"event_speaker_image\"><img src=\"images/event_speaker_2.jpg\" alt=\"\"></div></div>
                                                    <div class=\"event_speaker_content\">
                                                        <div class=\"event_speaker_name\">Jessica Williams</div>
                                                        <div class=\"event_speaker_title\">Marketing Specialist</div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class=\"event_buttons\">
                                                <div class=\"button event_button event_button_1\"><a href=\"";
            // line 111
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("delete_event", ["id" => $this->getAttribute($context["i"], "getId", [])]), "html", null, true);
            echo "\">Delete</a></div>
                                                <div class=\"button event_button event_button_1\"><a href=\"";
            // line 112
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("modify_event", ["id" => $this->getAttribute($context["i"], "getId", [])]), "html", null, true);
            echo "\">update</a></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class=\"menu trans_500\">
                                <button class=\"-cart-plus\"> ADD NEW EVENT</button>
                            </div>




                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 127
        echo "                    </div>
                </div>
            </div>
        </div>

    </section>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 134
    public function block_javascripts($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 135
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script src=\"";
        // line 136
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("eventStyle/js/jquery-3.2.1.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 137
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("eventStyle/styles/bootstrap4/popper.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 138
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("eventStyle/styles/bootstrap4/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 139
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("eventStyle/plugins/OwlCarousel2-2.2.1/owl.carousel.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 140
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("eventStyle/plugins/easing/easing.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 141
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("eventStyle/plugins/parallax-js-master/parallax.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 142
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("eventStyle/js/events.js"), "html", null, true);
        echo "\"></script>




    <script src=\"";
        // line 147
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("eventStyle/js/jquery-3.2.1.min.js"), "html", null, true);
        echo "\"></script>

    <script src=\"";
        // line 149
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("eventStyle/styles/bootstrap4/popper.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 150
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("eventStyle/styles/bootstrap4/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 151
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("eventStyle/plugins/greensock/TweenMax.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 152
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("eventStyle/plugins/greensock/TimelineMax.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 153
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("eventStyle/plugins/scrollmagic/ScrollMagic.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 154
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("eventStyle/plugins/greensock/animation.gsap.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 155
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("eventStyle/plugins/greensock/ScrollToPlugin.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 156
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("eventStyle/plugins/progressbar/progressbar.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 157
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("eventStyle/plugins/easing/easing.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 158
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("eventStyle/plugins/jquery-circle-progress-1.2.2/circle-progress.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 159
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("eventStyle/plugins/parallax-js-master/parallax.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 160
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("eventStyle/js/elements.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@MahmoudEvent/HomeEvent/admin_admin.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  329 => 160,  325 => 159,  321 => 158,  317 => 157,  313 => 156,  309 => 155,  305 => 154,  301 => 153,  297 => 152,  293 => 151,  289 => 150,  285 => 149,  280 => 147,  272 => 142,  268 => 141,  264 => 140,  260 => 139,  256 => 138,  252 => 137,  248 => 136,  243 => 135,  234 => 134,  218 => 127,  197 => 112,  193 => 111,  169 => 90,  161 => 85,  149 => 76,  142 => 72,  134 => 66,  130 => 65,  121 => 58,  117 => 48,  110 => 40,  101 => 39,  88 => 22,  86 => 19,  80 => 14,  75 => 12,  70 => 11,  68 => 7,  62 => 4,  53 => 3,  31 => 1,);
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
    {{ parent() }}

    {# <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('eventStyle/styles/bootstrap4/bootstrap.min.css')}}\">#}
    {#<link href=\"{{ asset('eventStyle/plugins/font-awesome-4.7.0/css/font-awesome.min.css')}}\" rel=\"stylesheet\" type=\"text/css\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('eventStyle/plugins/OwlCarousel2-2.2.1/owl.carousel.css')}}\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('eventStyle/plugins/OwlCarousel2-2.2.1/owl.theme.default.css')}}\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('eventStyle/plugins/OwlCarousel2-2.2.1/animate.css')}}\">#}
    <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('eventStyle/styles/events.css')}}\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('eventStyle/styles/events_responsive.css')}}\">

    <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('eventStyle/styles/bootstrap4/bootstrap.min.css') }}\">


    {# <link href=\"{{ asset('eventStyle/plugins/font-awesome-4.7.0/css/font-awesome.min.css') }}\" rel=\"stylesheet\"
           type=\"text/css\">#}
    {#  <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('eventStyle/styles/elements.css') }}\">

      <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('eventStyle/styles/elements_responsive.css') }}\">#}



{% endblock %}

{#  {% block header %}
      <!-- Header -->
      <header class=\"masthead\">
          <div class=\"container\">
              <div class=\"intro-text\">
                  <div class=\"intro-lead-in\">Welcome To Chick Click!</div>
                  <div class=\"intro-heading text-uppercase\">WELCOM TO FASHION EVENTS</div>
              </div>
          </div>
      </header>

  {% endblock %}#}
{% block content_event %}

    <section>


        <br>
        {#<div>
        <a href=\" {{ path('modify_event' ) }}\" class=\"white-text d-flex justify-content-end circl btn-toolbar\" ><h5> My Events    . <i class=\"fas fa-angle-double-right\"></i></h5></a>
        </div>#}

        <br>
        {# <div class=\"color-box break col-lg-5 \">
             <div class=\"shadow\">
                 <div class=\"info-tab note-icon\" title=\"Important Notes\"><i></i></div>
                 <div class=\"note-box\">
                     <p><strong>Note:</strong> It is recommended to include a label for every form inputs otherwise screen readers will have trouble with your forms. However, in case of inline form layouts you can hide the labels using the <code>.sr-only</code> class, so that only screen readers can read it.</p>
                 </div>
             </div>
         </div>#}
        <hr>
        <hr>
        <div class=\"events\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col\">

                        {% for i in  listEvent %}

                            <!-- Event -->
                            <div class=\"event \">
                                <div class=\"row row-lg-eq-height\">
                                    <div class=\"col-lg-6 event_col\">
                                        <div class=\"event_image_container\">
                                            <div class=\"background_image\" style=\"background-image:url({{ i.displayPhoto }})\" ><img src=\"images/event_speaker_2.jpg\" alt=\"\"> </div>
                                            <div class=\"date_container\">
                                                <a href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"date_content d-flex flex-column align-items-center justify-content-center\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"date_day\">{{ i.getEventStartDate|date(\"m/d/Y\")|slice(3,2) }}</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"date_month\">May</div>
\t\t\t\t\t\t\t\t\t\t\t</span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"col-lg-6 event_col\">
                                        <div class=\"event_content\">
                                            <div class=\"event_title\">{{ i.getEventTitle }}</div>
                                            <div class=\"event_location\">@ Miami Auditorium</div>
                                            <div class=\"event_text\">
                                                <p>Donec quis metus ac arcu luctus accumsan. Nunc in justo tincidunt, sodales nunc id, finibus nibh. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Fusce nec ante vitae lacus aliquet vulputate. Donec scelerisque accu msan molestie. Vestibulum ante ipsum primis in faucibus orci luctus.</p>
                                            </div>
                                            <div ><a href=\" {{ path('event_detail',{'id':i.getId}) }}\" class=\"white-text d-flex justify-content-end\"><h5>Read more <i class=\"fas fa-angle-double-right\"></i></h5></a>
                                            </div>
                                            <div class=\"event_speakers\">
                                                <!-- Event Speaker -->
                                                <div class=\"event_speaker d-flex flex-row align-items-center justify-content-start\">
                                                    <div><div class=\"event_speaker_image\"><img src=\"\" alt=\"\"></div></div>
                                                    <div class=\"event_speaker_content\">
                                                        <div class=\"event_speaker_name\">Michael Smith</div>
                                                        <div class=\"event_speaker_title\">Marketing Specialist</div>
                                                    </div>
                                                </div>
                                                <!-- Event Speaker -->
                                                <div class=\"event_speaker d-flex flex-row align-items-center justify-content-start\">
                                                    <div><div class=\"event_speaker_image\"><img src=\"images/event_speaker_2.jpg\" alt=\"\"></div></div>
                                                    <div class=\"event_speaker_content\">
                                                        <div class=\"event_speaker_name\">Jessica Williams</div>
                                                        <div class=\"event_speaker_title\">Marketing Specialist</div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class=\"event_buttons\">
                                                <div class=\"button event_button event_button_1\"><a href=\"{{ path('delete_event',{'id':i.getId}) }}\">Delete</a></div>
                                                <div class=\"button event_button event_button_1\"><a href=\"{{ path('modify_event',{'id':i.getId}) }}\">update</a></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class=\"menu trans_500\">
                                <button class=\"-cart-plus\"> ADD NEW EVENT</button>
                            </div>




                        {% endfor %}
                    </div>
                </div>
            </div>
        </div>

    </section>
{% endblock  %}
{% block javascripts %}
    {{ parent() }}
    <script src=\"{{ asset('eventStyle/js/jquery-3.2.1.min.js') }}\"></script>
    <script src=\"{{ asset('eventStyle/styles/bootstrap4/popper.js') }}\"></script>
    <script src=\"{{ asset('eventStyle/styles/bootstrap4/bootstrap.min.js') }}\"></script>
    <script src=\"{{ asset('eventStyle/plugins/OwlCarousel2-2.2.1/owl.carousel.js') }}\"></script>
    <script src=\"{{ asset('eventStyle/plugins/easing/easing.js') }}\"></script>
    <script src=\"{{ asset('eventStyle/plugins/parallax-js-master/parallax.min.js')}}\"></script>
    <script src=\"{{ asset('eventStyle/js/events.js') }}\"></script>




    <script src=\"{{ asset('eventStyle/js/jquery-3.2.1.min.js') }}\"></script>

    <script src=\"{{ asset('eventStyle/styles/bootstrap4/popper.js') }}\"></script>
    <script src=\"{{ asset('eventStyle/styles/bootstrap4/bootstrap.min.js') }}\"></script>
    <script src=\"{{ asset('eventStyle/plugins/greensock/TweenMax.min.js') }}\"></script>
    <script src=\"{{ asset('eventStyle/plugins/greensock/TimelineMax.min.js') }}\"></script>
    <script src=\"{{ asset('eventStyle/plugins/scrollmagic/ScrollMagic.min.js') }}\"></script>
    <script src=\"{{ asset('eventStyle/plugins/greensock/animation.gsap.min.js') }}\"></script>
    <script src=\"{{ asset('eventStyle/plugins/greensock/ScrollToPlugin.min.js') }}\"></script>
    <script src=\"{{ asset('eventStyle/plugins/progressbar/progressbar.min.js') }}\"></script>
    <script src=\"{{ asset('eventStyle/plugins/easing/easing.js') }}\"></script>
    <script src=\"{{ asset('eventStyle/plugins/jquery-circle-progress-1.2.2/circle-progress.js') }}\"></script>
    <script src=\"{{ asset('eventStyle/plugins/parallax-js-master/parallax.min.js') }}\"></script>
    <script src=\"{{ asset('eventStyle/js/elements.js') }}\"></script>
{% endblock %}

", "@MahmoudEvent/HomeEvent/admin_admin.html.twig", "C:\\wamp64\\www\\Chick_Click\\src\\Mahmoud\\EventBundle\\Resources\\views\\HomeEvent\\admin_admin.html.twig");
    }
}
