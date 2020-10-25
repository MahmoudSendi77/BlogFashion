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

/* @MahmoudEvent/HomeEvent/home_event.html.twig */
class __TwigTemplate_875fcd9ffb9676851b9dbc4399938f3bdda7a29f2cc81ce0b0d7598528d53b15 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@MahmoudEvent/HomeEvent/home_event.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@MahmoudEvent/HomeEvent/home_event.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "@MahmoudEvent/HomeEvent/home_event.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@MahmoudEvent/HomeEvent/home_event.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 1,);
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


 {# {% block navbar %}
      <!-- Navigation -->


      <nav class=\"navbar navbar-expand-md navbar-dark fixed-top\" id=\"mainNav\" style=\"background-color: #343a40\">
          <div class=\"container\">

              <a class=\"navbar-brand js-scroll-trigger\" href=\"#page-top\">Chick Click</a>
              <button class=\"navbar-toggler navbar-toggler-right\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarResponsive\" aria-controls=\"navbarResponsive\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
                  Menu
                  <i class=\"fas fa-bars\"></i>
              </button>
              <div class=\"collapse navbar-collapse\" id=\"navbarResponsive\" style=\"background-color: #343a40\">
                  <ul class=\"navbar-nav text-uppercase ml-auto\">
                      <li class=\"nav-item\">
                          <a class=\"nav-link js-scroll-trigger\" href=\"#services\">HOME</a>
                      </li>
                      <li class=\"nav-item\">
                          <a class=\"nav-link js-scroll-trigger\" href=\"{{ path('show_event') }}\">EVENTS</a>
                      </li>
                      <li class=\"nav-item\">
                          <a class=\"nav-link js-scroll-trigger\" href=\"#about\">About</a>
                      </li>
                      <li class=\"nav-item\">
                          <a class=\"nav-link js-scroll-trigger\" href=\"#team\">Team</a>
                      </li>
                      <li class=\"nav-item\">
                          <a class=\"nav-link js-scroll-trigger\" href=\"#contact\">Contact</a>

                      </li>
                      {% if is_granted('ROLE_ADMIN')  %}
                          <li class=\"nav-item\">
                              <a class=\"nav-link js-scroll-trigger\" href=\"{{ path('admin_space') }}\">MANAGE AS ADMIN</a>
                          </li>
                          <li class=\"nav-item\">
                              <a class=\"nav-link js-scroll-trigger\" href=\"{{ path('fos_user_security_logout') }}\">LOGOUT</a>
                          </li>

                      {% else %}
                          <li class=\"nav-item\">
                              <a class=\"nav-link js-scroll-trigger\" href=\"{{ path('fos_user_registration_register') }}\">sing up</a>
                          </li>
                          <li class=\"nav-item\">
                              <a class=\"nav-link js-scroll-trigger\" href=\"{{ path('fos_user_security_login') }}\">sign in</a>
                          </li>




                      {% endif %}

                  </ul>
              </div>
          </div>

      </nav>
  {% endblock  %}#}




", "@MahmoudEvent/HomeEvent/home_event.html.twig", "C:\\wamp64\\www\\Chick_Click\\src\\Mahmoud\\EventBundle\\Resources\\views\\HomeEvent\\home_event.html.twig");
    }
}
