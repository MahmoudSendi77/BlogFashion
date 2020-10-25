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

/* @MahmoudEvent/HomeEvent/reservation.html.twig */
class __TwigTemplate_f953db62f6e59d5cd055e545e0fe562648f94601bd517b60e0bda6f12420ac8e extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@MahmoudEvent/HomeEvent/reservation.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@MahmoudEvent/HomeEvent/reservation.html.twig"));

        // line 1
        echo "<html lang=\"en\">
<head>
    <meta charset=\"UTF-8\">
    <title>Event Card</title>
    <link href=\"https://fonts.googleapis.com/icon?family=Material+Icons\" rel=\"stylesheet\">


    <link rel=\"stylesheet\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("card/css/style.css"), "html", null, true);
        echo "\">


    <style type=\"text/css\" media=\"print\">
        .no-print { display: none; }
    </style>


</head>

<body>


<div class=\"event_container\">
    ";
        // line 25
        echo "    <div class=\"event_bg\"><img src=\"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["res"]) ? $context["res"] : $this->getContext($context, "res")), "eventId", []), "displayPhoto", []), "html", null, true);
        echo "\"  width=\"300\" height=\"230\">
    </div>
    <div class=\"event_info\">
        <div class=\"event_title\">

                <h4>";
        // line 30
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["res"]) ? $context["res"] : $this->getContext($context, "res")), "eventId", []), "getEventTitle", []), "html", null, true);
        echo "</h4>
                <h5>@";
        // line 31
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["res"]) ? $context["res"] : $this->getContext($context, "res")), "eventId", []), "getEventCountry", []), "html", null, true);
        echo "</h5>


        </div>
        <div class=\"event_desc\">
            ";
        // line 37
        echo "            <h4> On The Naame Of ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["res"]) ? $context["res"] : $this->getContext($context, "res")), "userId", []), "getUsername", []), "html", null, true);
        echo " <br> Welcome To ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["res"]) ? $context["res"] : $this->getContext($context, "res")), "eventId", []), "getEventTitle", []), "html", null, true);
        echo " </h4>
        </div>


        <div class=\"event_footer\">
            <div class=\"event_date\">
                <p>";
        // line 43
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["res"]) ? $context["res"] : $this->getContext($context, "res")), "eventId", []), "getEventStartDate", []), "m/d/Y"), "html", null, true);
        echo "</p>
            </div>

                <div class=\"event_more \">
                    <p>";
        // line 47
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["res"]) ? $context["res"] : $this->getContext($context, "res")), "getCode", [], "method"), "html", null, true);
        echo "</p>
                    <div class=\"no-print\">
                    <a href=\"javascript:window.print()\" class=\"btn_more\">
                        Save File TO ...
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>


</body>
</html>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@MahmoudEvent/HomeEvent/reservation.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  102 => 47,  95 => 43,  83 => 37,  75 => 31,  71 => 30,  62 => 25,  45 => 8,  36 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<html lang=\"en\">
<head>
    <meta charset=\"UTF-8\">
    <title>Event Card</title>
    <link href=\"https://fonts.googleapis.com/icon?family=Material+Icons\" rel=\"stylesheet\">


    <link rel=\"stylesheet\" href=\"{{ asset(\"card/css/style.css\") }}\">


    <style type=\"text/css\" media=\"print\">
        .no-print { display: none; }
    </style>


</head>

<body>


<div class=\"event_container\">
    {#
        <div class=\"event_bg\" style=\"background-image: url('https://images.unsplash.com/photo-1483443487168-a49ed320d532?ixlib=rb-0.3.5&amp;q=85&amp;fm=jpg&amp;crop=entropy&amp;cs=srgb&amp;s=25a13b3cccc5f22a2d4cb32c4171e3c4')\"></div>
    #}
    <div class=\"event_bg\"><img src=\"{{ res.eventId.displayPhoto  }}\"  width=\"300\" height=\"230\">
    </div>
    <div class=\"event_info\">
        <div class=\"event_title\">

                <h4>{{  res.eventId.getEventTitle }}</h4>
                <h5>@{{  res.eventId.getEventCountry }}</h5>


        </div>
        <div class=\"event_desc\">
            {#<p> {{  res.eventId.getEventDescription|slice(0,120) }}.</p>#}
            <h4> On The Naame Of {{  res.userId.getUsername }} <br> Welcome To {{  res.eventId.getEventTitle }} </h4>
        </div>


        <div class=\"event_footer\">
            <div class=\"event_date\">
                <p>{{ res.eventId.getEventStartDate|date(\"m/d/Y\") }}</p>
            </div>

                <div class=\"event_more \">
                    <p>{{ res.getCode() }}</p>
                    <div class=\"no-print\">
                    <a href=\"javascript:window.print()\" class=\"btn_more\">
                        Save File TO ...
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>


</body>
</html>", "@MahmoudEvent/HomeEvent/reservation.html.twig", "C:\\wamp64\\www\\Chick_Click\\src\\Mahmoud\\EventBundle\\Resources\\views\\HomeEvent\\reservation.html.twig");
    }
}
