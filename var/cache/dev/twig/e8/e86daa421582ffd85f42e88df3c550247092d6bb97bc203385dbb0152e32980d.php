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

/* publication/new.html.twig */
class __TwigTemplate_09627e1bf880173ee49736016d8876baf35ce4f3d817658abbaed561851892d2 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'body' => [$this, 'block_body'],
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "publication/new.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "publication/new.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "publication/new.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Publication creation</h1>

    ";
        // line 6
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
        <div class=\"form-group\"  >

        ";
        // line 9
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "publicationDate", []), 'row');
        echo "
    </div>
    <div class=\"form-group\">
        ";
        // line 12
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "coreText", []), 'row');
        echo "
    </div>
    <div class=\"form-group\">
        ";
        // line 15
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "pseudo", []), 'row');
        echo "
    </div>
    <center>
        <div class=\"form-group\" >
            ";
        // line 19
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "publicationImage", []), 'widget');
        echo "
        </div>
    </center>
        <input type=\"submit\" value=\"Create\" />
    ";
        // line 23
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
    <li>
        <div class=\"fb-share-button\" data-href=\"https://developers.facebook.com/docs/plugins/\" data-layout=\"button_count\" data-size=\"small\"><a target=\"_blank\" href=\"https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Fdevelopers.facebook.com%2Fdocs%2Fplugins%2F&amp;src=sdkpreparse\" class=\"fb-xfbml-parse-ignore\">Share in Facebook<i class=\"fab fa-facebook-f\"></i>

            </a></div>
    </li>
    <li>
        <div class=\"twitter-share-button\" data-href=\"https://developers.facebook.com/docs/plugins/\" data-layout=\"button_count\" data-size=\"small\"><a href=\"https://twitter.com/intent/tweet?screen_name=TwitterDev&ref_src=twsrc%5Etfw\" class=\"twitter-mention-button\" data-show-count=\"false\">Share in Twitter</a><script async src=\"https://platform.twitter.com/widgets.js\" charset=\"utf-8\"></script></div>
    </li>
    <li>
        <div class=\"fb-share-button\" data-href=\"https://developers.facebook.com/docs/plugins/\" data-layout=\"button_count\" data-size=\"small\"><a href=\"https://www.pinterest.com/pin/create/button/\" data-pin-do=\"buttonBookmark\">Share in Pinterest<i class=\"fab fa-pinterest\"></i></a></div>
    </li>
    <br> <br>
    <ul>
        <li>
            <a href=\"";
        // line 38
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("pub_index");
        echo "\">Back to the list</a>
        </li>

    </ul>


";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "publication/new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  114 => 38,  96 => 23,  89 => 19,  82 => 15,  76 => 12,  70 => 9,  64 => 6,  60 => 4,  51 => 3,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block body %}
    <h1>Publication creation</h1>

    {{ form_start(form) }}
        <div class=\"form-group\"  >

        {{ form_row (form.publicationDate)  }}
    </div>
    <div class=\"form-group\">
        {{ form_row (form.coreText)  }}
    </div>
    <div class=\"form-group\">
        {{ form_row (form.pseudo)  }}
    </div>
    <center>
        <div class=\"form-group\" >
            {{ form_widget (form.publicationImage)  }}
        </div>
    </center>
        <input type=\"submit\" value=\"Create\" />
    {{ form_end(form) }}
    <li>
        <div class=\"fb-share-button\" data-href=\"https://developers.facebook.com/docs/plugins/\" data-layout=\"button_count\" data-size=\"small\"><a target=\"_blank\" href=\"https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Fdevelopers.facebook.com%2Fdocs%2Fplugins%2F&amp;src=sdkpreparse\" class=\"fb-xfbml-parse-ignore\">Share in Facebook<i class=\"fab fa-facebook-f\"></i>

            </a></div>
    </li>
    <li>
        <div class=\"twitter-share-button\" data-href=\"https://developers.facebook.com/docs/plugins/\" data-layout=\"button_count\" data-size=\"small\"><a href=\"https://twitter.com/intent/tweet?screen_name=TwitterDev&ref_src=twsrc%5Etfw\" class=\"twitter-mention-button\" data-show-count=\"false\">Share in Twitter</a><script async src=\"https://platform.twitter.com/widgets.js\" charset=\"utf-8\"></script></div>
    </li>
    <li>
        <div class=\"fb-share-button\" data-href=\"https://developers.facebook.com/docs/plugins/\" data-layout=\"button_count\" data-size=\"small\"><a href=\"https://www.pinterest.com/pin/create/button/\" data-pin-do=\"buttonBookmark\">Share in Pinterest<i class=\"fab fa-pinterest\"></i></a></div>
    </li>
    <br> <br>
    <ul>
        <li>
            <a href=\"{{ path('pub_index') }}\">Back to the list</a>
        </li>

    </ul>


{% endblock %}
", "publication/new.html.twig", "C:\\wamp64\\www\\Chick_Click\\app\\Resources\\views\\publication\\new.html.twig");
    }
}
