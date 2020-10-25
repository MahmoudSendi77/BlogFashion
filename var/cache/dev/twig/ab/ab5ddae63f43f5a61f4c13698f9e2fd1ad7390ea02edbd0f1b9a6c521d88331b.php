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

/* @Forum/Sujets/forum_client.html.twig */
class __TwigTemplate_3f59637dc409216d49ab609fc62ce7226aa8cd9350080a4b0845257e0611a8f3 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Forum/Sujets/forum_client.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Forum/Sujets/forum_client.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "@Forum/Sujets/forum_client.html.twig", 1);
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
                  <div class=\"intro-heading text-uppercase\">WELCOME TO CHICK CLICK FORUM</div>

                  <div>
                      <td><a href=\"";
        // line 12
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("forum_create");
        echo "\">CLICK HERE TO ADD YOUR OWN SUBJECT NOW</a></td></div>
                  <div>
                      <td><a href=\"";
        // line 14
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("chart_statClient");
        echo "\">CLICK HERE TO SEE OUR STATISTICS </a></td></div>


          </div>

          <div>

              ";
        // line 21
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), 'form');
        echo "

          </div>

          </div>
      </header>






  ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 34
    public function block_other($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "other"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "other"));

        // line 35
        echo "    <section class=\"bg-light page-section\" id=\"portfolio\">
        <centre><div class=\"card-group\"></div></centre>
        <tr>
            <h1 style=\"text-align: center\" >

                <table  class=\"table\">
                    <td>
                        <tr>
                            <div id=\"recherchetable\">
                            ";
        // line 44
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["forums"]) ? $context["forums"] : $this->getContext($context, "forums")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 45
            echo "                            <div class=\"card\">
                                <div class=\"card-body\">
                                    <h5><p class=\"card-text\">Categorie :";
            // line 47
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "name", []), "html", null, true);
            echo "</p></h5>
                                    <p class=\"card-title\">";
            // line 48
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "subjectName", []), "html", null, true);
            echo "</p>

                                    <h5><p class=\"card-text\">";
            // line 50
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "subjectDescription", []), "html", null, true);
            echo "</p></h5>

                                    <a href=\"";
            // line 52
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("show_comment_client", ["id" => $this->getAttribute($context["entity"], "id", [])]), "html", null, true);
            echo "\" class=\"white-text d-flex justify-content-end\"><h5> Comments <i class=\"fas fa-angle-double-right\"></i></h5></a>
                                </div>
                            </div>

                        </tr>
                    </td>


                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 61
        echo "</div>
                </table>

            </h1>

            </div>
        </tr>

    </section>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@Forum/Sujets/forum_client.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  166 => 61,  151 => 52,  146 => 50,  141 => 48,  137 => 47,  133 => 45,  129 => 44,  118 => 35,  109 => 34,  86 => 21,  76 => 14,  71 => 12,  61 => 4,  52 => 3,  30 => 1,);
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
                  <div class=\"intro-heading text-uppercase\">WELCOME TO CHICK CLICK FORUM</div>

                  <div>
                      <td><a href=\"{{path('forum_create')}}\">CLICK HERE TO ADD YOUR OWN SUBJECT NOW</a></td></div>
                  <div>
                      <td><a href=\"{{path('chart_statClient')}}\">CLICK HERE TO SEE OUR STATISTICS </a></td></div>


          </div>

          <div>

              {{ form(f) }}

          </div>

          </div>
      </header>






  {% endblock %}
{% block other %}
    <section class=\"bg-light page-section\" id=\"portfolio\">
        <centre><div class=\"card-group\"></div></centre>
        <tr>
            <h1 style=\"text-align: center\" >

                <table  class=\"table\">
                    <td>
                        <tr>
                            <div id=\"recherchetable\">
                            {% for entity in forums   %}
                            <div class=\"card\">
                                <div class=\"card-body\">
                                    <h5><p class=\"card-text\">Categorie :{{ entity.name }}</p></h5>
                                    <p class=\"card-title\">{{ entity.subjectName }}</p>

                                    <h5><p class=\"card-text\">{{ entity.subjectDescription }}</p></h5>

                                    <a href=\"{{path('show_comment_client',{'id':entity.id})}}\" class=\"white-text d-flex justify-content-end\"><h5> Comments <i class=\"fas fa-angle-double-right\"></i></h5></a>
                                </div>
                            </div>

                        </tr>
                    </td>


                    {% endfor %}
</div>
                </table>

            </h1>

            </div>
        </tr>

    </section>
{% endblock %}





", "@Forum/Sujets/forum_client.html.twig", "C:\\wamp64\\www\\Chick_Click\\src\\ForumBundle\\Resources\\views\\Sujets\\forum_client.html.twig");
    }
}
