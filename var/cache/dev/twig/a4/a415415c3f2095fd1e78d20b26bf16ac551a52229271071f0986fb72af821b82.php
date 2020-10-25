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

/* @MahmoudEvent/HomeEvent/modify_event.html.twig */
class __TwigTemplate_9ea6266c5904bdc4447c414e504337ed86773044f108883e09c4618edf906dd1 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'stylesheets' => [$this, 'block_stylesheets'],
            'other' => [$this, 'block_other'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 63
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@MahmoudEvent/HomeEvent/modify_event.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@MahmoudEvent/HomeEvent/modify_event.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "@MahmoudEvent/HomeEvent/modify_event.html.twig", 63);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 65
    public function block_stylesheets($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 66
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
 <style type=\"text/css\">

    .imgeve{

    border-radius: 50%;
    border: 1px solid #ddd;

    padding: 5px;
    width: 150px;
    top: 150px;
    /* == margin:5px 0px 5px 0px;*/
    margin:-954px 718px 1px;
    }
    .imgeve2{

        border-radius: 50%;
        border: 1px solid #ddd;

        padding: 5px;
        width: 150px;
        top: 150px;
        /* == margin:5px 0px 5px 0px;*/
        margin:-954px 718px 1px;
    }
    .titreevent{
    margin:-954px 718px 1px;
    }
    </style>
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 97
    public function block_other($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "other"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "other"));

        // line 98
        echo "
    <br>
    <br>
    <br>

    <div class=\"col-10 \" >

        <center>
        <div class=\"col-4 \" >
            <h3> Modify Event  </h3>
            <hr>

            <br>
            <br>
        </div>
        <div class=\"col-6 \" >
            <div  class=\"w-75 -align-right\">
                ";
        // line 115
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form');
        echo "
            </div>
            <div class=\"imgeve\" >
                <br>
                <img src=\" ";
        // line 119
        echo twig_escape_filter($this->env, (isset($context["img"]) ? $context["img"] : $this->getContext($context, "img")), "html", null, true);
        echo "\" alt=\"\">

                <br>
            </div>
        </div>
        </center>




    </div>
    <br>

    <br>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@MahmoudEvent/HomeEvent/modify_event.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 119,  130 => 115,  111 => 98,  102 => 97,  61 => 66,  52 => 65,  30 => 63,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{#
{% extends 'base.html.twig' %}

{% block other %}
    <h1>Event</h1>

    <table class=\"\">
        <tbody>
        <tr>
            <th>Id</th>
            <td> <input value=\"{{ event.id }}\">
            </td>
        </tr>
        <tr>
            <th>Eventtitle</th>
            <td><input value=\"{{ event.eventTitle }}\"></td>
        </tr>
        <tr>
            <th>Eventpicture</th>
            <td><input value=\"{{ event.eventPicture }}\"></td>
        </tr>
        <tr>
            <th>Eventdescription</th>
            <td><input value=\"{{ event.eventDescription }}\"></td>
        </tr>
        <tr>
            <th>Eventadress</th>
            <td><input value=\"{{ event.eventAdress }}\"></td>
        </tr>
        <tr>
            <th>Eventcountry</th>
            <td><input value=\"{{ event.eventCountry }}\"></td>
        </tr>
        <tr>
            <th>Eventhoure</th>
            <td><input value=\"{{ event.eventHoure }}\"></td>
        </tr>
        <tr>
            <th>Eventstartdate</th>
            <td>{% if event.eventStartDate %}<input value=\"{{ event.eventStartDate|date('Y-m-d') }}\">{% endif %}</td>
        </tr>
        <tr>
            <th>Eventenddate</th>
            <td>{% if event.eventEndDate %}<input value=\"{{ event.eventEndDate|date('Y-m-d') }}\">{% endif %}</td>
        </tr>
        <tr>
            <th>Eventcategory</th>
            <td><input value=\"{{ event.eventCategory }}\"></td>
        </tr>
        </tbody>
    </table>

    <ul>
        #}
{#<li>
            <a href=\"{{ path('event_index') }}\">Back to the list</a>
        </li>#}{#

    </ul>
{% endblock %}
#}

{% extends \"base.html.twig\" %}

{% block stylesheets %}
    {{ parent() }}
 <style type=\"text/css\">

    .imgeve{

    border-radius: 50%;
    border: 1px solid #ddd;

    padding: 5px;
    width: 150px;
    top: 150px;
    /* == margin:5px 0px 5px 0px;*/
    margin:-954px 718px 1px;
    }
    .imgeve2{

        border-radius: 50%;
        border: 1px solid #ddd;

        padding: 5px;
        width: 150px;
        top: 150px;
        /* == margin:5px 0px 5px 0px;*/
        margin:-954px 718px 1px;
    }
    .titreevent{
    margin:-954px 718px 1px;
    }
    </style>
    {% endblock %}

{%  block other %}

    <br>
    <br>
    <br>

    <div class=\"col-10 \" >

        <center>
        <div class=\"col-4 \" >
            <h3> Modify Event  </h3>
            <hr>

            <br>
            <br>
        </div>
        <div class=\"col-6 \" >
            <div  class=\"w-75 -align-right\">
                {{ form(form) }}
            </div>
            <div class=\"imgeve\" >
                <br>
                <img src=\" {{ img }}\" alt=\"\">

                <br>
            </div>
        </div>
        </center>




    </div>
    <br>

    <br>

{% endblock %}", "@MahmoudEvent/HomeEvent/modify_event.html.twig", "C:\\wamp64\\www\\Chick_Click\\src\\Mahmoud\\EventBundle\\Resources\\views\\HomeEvent\\modify_event.html.twig");
    }
}
