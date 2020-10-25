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

/* @MahmoudEvent/HomeEvent/my_event_reservation.html.twig */
class __TwigTemplate_23ebe3cecd520a0536aa710d5864bf116cd840bc66a9878e1ad1da53859f4154 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@MahmoudEvent/HomeEvent/my_event_reservation.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@MahmoudEvent/HomeEvent/my_event_reservation.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "@MahmoudEvent/HomeEvent/my_event_reservation.html.twig", 1);
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

    // line 17
    public function block_other($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "other"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "other"));

        // line 18
        echo "


    <br>



   ";
        // line 31
        echo "    <center><a href=\"#\"><h4>  Click On Card To Access Your Reservation </h4></a>
        <hr></center>
    <br>
    <br>

    ";
        // line 36
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["listEvent"]) ? $context["listEvent"] : $this->getContext($context, "listEvent")));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 37
            echo "<center>
       ";
            // line 40
            echo "    <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("reservation_card", ["id" => $this->getAttribute($context["i"], "getId", [])]), "html", null, true);
            echo "\">
        <div class=\"card mb-3\" style=\"max-width: 540px;\">
            <div class=\"row no-gutters\">
                <div class=\"col-md-4\">
                    <img src=\"";
            // line 44
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["i"], "eventId", []), "displayPhoto", []), "html", null, true);
            echo "\" class=\"card-img\" alt=\"...\">
                </div>
                <div class=\"col-md-8\">
                    <div class=\"card-body\">
                        <h5 class=\"card-title\">";
            // line 48
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["i"], "eventId", []), "getEventTitle", []), "html", null, true);
            echo "</h5>
                        <p class=\"card-text\">";
            // line 49
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["i"], "eventId", []), "getEventDescription", []), "html", null, true);
            echo "</p>
                        <p class=\"card-text\"><small class=\"text-muted\">";
            // line 50
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute($context["i"], "eventId", []), "getEventStartDate", []), "m/d/Y"), "html", null, true);
            echo "</small></p>
                    </div>
                </div>
            </div>
        </div>
     </a>
    <a href=\"";
            // line 56
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("delete_reservation", ["id" => $this->getAttribute($context["i"], "getId", [])]), "html", null, true);
            echo "\" onclick=\"return confirm('are you sure you want to delete your reservation ?')\">Delete Reservation</a>
</center>
        <br>        <br>

    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 61
        echo "
    <hr>
    <br>


    <br>
    <br>


";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@MahmoudEvent/HomeEvent/my_event_reservation.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  156 => 61,  145 => 56,  136 => 50,  132 => 49,  128 => 48,  121 => 44,  113 => 40,  110 => 37,  106 => 36,  99 => 31,  90 => 18,  81 => 17,  61 => 4,  52 => 3,  30 => 1,);
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



   {# Card title
    This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.

    Last updated 3 mins ago

    Copy#}
    <center><a href=\"#\"><h4>  Click On Card To Access Your Reservation </h4></a>
        <hr></center>
    <br>
    <br>

    {% for i in listEvent %}
<center>
       {# <a href=\"{{ path('reservation_card',{'id':i.getId}) }}\">  azertuytyt : + i.getId </a> <br>
#}
    <a href=\"{{ path('reservation_card',{'id':i.getId}) }}\">
        <div class=\"card mb-3\" style=\"max-width: 540px;\">
            <div class=\"row no-gutters\">
                <div class=\"col-md-4\">
                    <img src=\"{{ i.eventId.displayPhoto }}\" class=\"card-img\" alt=\"...\">
                </div>
                <div class=\"col-md-8\">
                    <div class=\"card-body\">
                        <h5 class=\"card-title\">{{ i.eventId.getEventTitle }}</h5>
                        <p class=\"card-text\">{{ i.eventId.getEventDescription }}</p>
                        <p class=\"card-text\"><small class=\"text-muted\">{{ i.eventId.getEventStartDate|date(\"m/d/Y\") }}</small></p>
                    </div>
                </div>
            </div>
        </div>
     </a>
    <a href=\"{{ path('delete_reservation',{'id':i.getId}) }}\" onclick=\"return confirm('are you sure you want to delete your reservation ?')\">Delete Reservation</a>
</center>
        <br>        <br>

    {% endfor %}

    <hr>
    <br>


    <br>
    <br>


{% endblock  %}


", "@MahmoudEvent/HomeEvent/my_event_reservation.html.twig", "C:\\wamp64\\www\\Chick_Click\\src\\Mahmoud\\EventBundle\\Resources\\views\\HomeEvent\\my_event_reservation.html.twig");
    }
}
