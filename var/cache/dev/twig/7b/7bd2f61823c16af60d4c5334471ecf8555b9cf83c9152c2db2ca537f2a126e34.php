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

/* @MahmoudEvent/HomeEvent/my_event.html.twig */
class __TwigTemplate_5f136c3228e26a6797565be3567209e9b501d057186da52ac03d732e8a8325f7 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'header' => [$this, 'block_header'],
            'other' => [$this, 'block_other'],
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@MahmoudEvent/HomeEvent/my_event.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@MahmoudEvent/HomeEvent/my_event.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "@MahmoudEvent/HomeEvent/my_event.html.twig", 1);
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

    // line 15
    public function block_other($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "other"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "other"));

        // line 16
        echo "






    <br>
    ";
        // line 27
        echo "
    <hr>
    <br>
   ";
        // line 38
        echo "    <hr>

    <hr>
    <div class=\"events\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col\">

                    ";
        // line 46
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["listEvent"]) ? $context["listEvent"] : $this->getContext($context, "listEvent")));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 47
            echo "
                        <!-- Event -->
                        <div class=\"event \">
                            <div class=\"row row-lg-eq-height\">
                                <div class=\"col-lg-6 event_col\">
                                    <div class=\"event_image_container\">
                                        <div class=\"background_image\" style=\"background-image:url(";
            // line 53
            echo twig_escape_filter($this->env, $this->getAttribute($context["i"], "displayPhoto", []), "html", null, true);
            echo ")\" ><img src=\"images/event_speaker_2.jpg\" alt=\"\"> </div>
                                        <div class=\"date_container\">
                                            <a href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"date_content d-flex flex-column align-items-center justify-content-center\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"date_day\">";
            // line 57
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
            // line 66
            echo twig_escape_filter($this->env, $this->getAttribute($context["i"], "getEventTitle", []), "html", null, true);
            echo "</div>
                                        <div class=\"event_location\">@ Miami Auditorium</div>
                                        <div class=\"event_text\">
                                            <p>Donec quis metus ac arcu luctus accumsan. Nunc in justo tincidunt, sodales nunc id, finibus nibh. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Fusce nec ante vitae lacus aliquet vulputate. Donec scelerisque accu msan molestie. Vestibulum ante ipsum primis in faucibus orci luctus.</p>
                                        </div>
                                        <div ><a href=\" ";
            // line 71
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
            // line 92
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("delete_event", ["id" => $this->getAttribute($context["i"], "getId", [])]), "html", null, true);
            echo "\">Delete</a></div>
                                            <div class=\"button event_button event_button_1\"><a href=\"";
            // line 93
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
        // line 105
        echo "                </div>
            </div>
        </div>
    </div>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@MahmoudEvent/HomeEvent/my_event.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  200 => 105,  182 => 93,  178 => 92,  154 => 71,  146 => 66,  134 => 57,  127 => 53,  119 => 47,  115 => 46,  105 => 38,  100 => 27,  90 => 16,  81 => 15,  61 => 4,  52 => 3,  30 => 1,);
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
    {#<div>
    <a href=\" {{ path('modify_event' ) }}\" class=\"white-text d-flex justify-content-end circl btn-toolbar\" ><h5> My Events    . <i class=\"fas fa-angle-double-right\"></i></h5></a>
    </div>#}

    <hr>
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
    </div>
{% endblock  %}
", "@MahmoudEvent/HomeEvent/my_event.html.twig", "C:\\wamp64\\www\\Chick_Click\\src\\Mahmoud\\EventBundle\\Resources\\views\\HomeEvent\\my_event.html.twig");
    }
}
