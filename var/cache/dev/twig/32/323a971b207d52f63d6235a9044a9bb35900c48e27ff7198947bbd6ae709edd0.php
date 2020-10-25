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

/* @Product/Product/new.html.twig */
class __TwigTemplate_f9c45ba87d78b42200fd6df1cd5051d33bbcad8585a5aa209ebb1eb69b01ac93 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'header' => [$this, 'block_header'],
            'other' => [$this, 'block_other'],
            'footer' => [$this, 'block_footer'],
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Product/Product/new.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Product/Product/new.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "@Product/Product/new.html.twig", 1);
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
                  <div class=\"intro-heading text-uppercase\"> Add your Deal </div>
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

    <div class=\"col-10 \" >

        <div class=\"col-6 \" >
            <div  class=\"w-75 -align-right\">

                <br>

                <br>
                <h3>  ";
        // line 28
        echo twig_escape_filter($this->env, (isset($context["quote"]) ? $context["quote"] : $this->getContext($context, "quote")), "html", null, true);
        echo "  </h3>
                ";
        // line 29
        echo twig_include($this->env, $context, "@Product/Product/_form.html.twig");
        echo "
                <br>
                <br>
                <p>Today: ";
        // line 32
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y-m-d"), "html", null, true);
        echo "</p>


            </div>
        </div>
    </div>


";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 42
    public function block_footer($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        // line 43
        echo "     <!-- Footer -->
     <footer class=\"footer\">
         <div class=\"container\">
             <div class=\"row align-items-center\">
                 <div class=\"col-md-4\">
                     <span class=\"copyright\">Copyright &copy; Your Website 2019</span>
                 </div>
                 <div class=\"col-md-4\">
                     <ul class=\"list-inline social-buttons\">
                         <li class=\"list-inline-item\">
                             <a href=\"#\">
                                 <i class=\"fab fa-twitter\"></i>
                             </a>
                         </li>
                         <li class=\"list-inline-item\">
                             <a href=\"#\">
                                 <i class=\"fab fa-facebook-f\"></i>
                             </a>
                         </li>
                         <li class=\"list-inline-item\">
                             <a href=\"#\">
                                 <i class=\"fab fa-linkedin-in\"></i>
                             </a>
                         </li>
                     </ul>
                 </div>
                 <div class=\"col-md-4\">
                     <ul class=\"list-inline quicklinks\">
                         <li class=\"list-inline-item\">
                             <a href=\"#\">Privacy Policy</a>
                         </li>
                         <li class=\"list-inline-item\">
                             <a href=\"#\">Terms of Use</a>
                         </li>
                     </ul>
                 </div>
             </div>
         </div>
     </footer>
 ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@Product/Product/new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  142 => 43,  133 => 42,  114 => 32,  108 => 29,  104 => 28,  91 => 17,  82 => 16,  62 => 4,  53 => 3,  31 => 1,);
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
                  <div class=\"intro-heading text-uppercase\"> Add your Deal </div>
              </div>
          </div>
      </header>

  {% endblock %}

{% block other %}

    <br>

    <div class=\"col-10 \" >

        <div class=\"col-6 \" >
            <div  class=\"w-75 -align-right\">

                <br>

                <br>
                <h3>  {{ quote }}  </h3>
                {{ include('@Product/Product/_form.html.twig') }}
                <br>
                <br>
                <p>Today: {{ 'now'|date('Y-m-d') }}</p>


            </div>
        </div>
    </div>


{% endblock  %}

 {% block footer %}
     <!-- Footer -->
     <footer class=\"footer\">
         <div class=\"container\">
             <div class=\"row align-items-center\">
                 <div class=\"col-md-4\">
                     <span class=\"copyright\">Copyright &copy; Your Website 2019</span>
                 </div>
                 <div class=\"col-md-4\">
                     <ul class=\"list-inline social-buttons\">
                         <li class=\"list-inline-item\">
                             <a href=\"#\">
                                 <i class=\"fab fa-twitter\"></i>
                             </a>
                         </li>
                         <li class=\"list-inline-item\">
                             <a href=\"#\">
                                 <i class=\"fab fa-facebook-f\"></i>
                             </a>
                         </li>
                         <li class=\"list-inline-item\">
                             <a href=\"#\">
                                 <i class=\"fab fa-linkedin-in\"></i>
                             </a>
                         </li>
                     </ul>
                 </div>
                 <div class=\"col-md-4\">
                     <ul class=\"list-inline quicklinks\">
                         <li class=\"list-inline-item\">
                             <a href=\"#\">Privacy Policy</a>
                         </li>
                         <li class=\"list-inline-item\">
                             <a href=\"#\">Terms of Use</a>
                         </li>
                     </ul>
                 </div>
             </div>
         </div>
     </footer>
 {%  endblock %}

", "@Product/Product/new.html.twig", "C:\\wamp64\\www\\Chick_Click\\src\\ProductBundle\\Resources\\views\\Product\\new.html.twig");
    }
}
