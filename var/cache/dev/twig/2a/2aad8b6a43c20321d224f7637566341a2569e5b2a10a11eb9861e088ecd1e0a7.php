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

/* @Product/Product/show_product.html.twig */
class __TwigTemplate_c4f23470a994cae4face4f19db75df0a98b0ee30c5c223fae472c1470a23e76c extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'header' => [$this, 'block_header'],
            'other' => [$this, 'block_other'],
            'foot' => [$this, 'block_foot'],
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Product/Product/show_product.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Product/Product/show_product.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "@Product/Product/show_product.html.twig", 1);
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
                  <div class=\"intro-heading text-uppercase\"> Deals </div>
              </div>
          </div>
      </header>

  ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 18
    public function block_other($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "other"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "other"));

        // line 19
        echo "
<div style=\"text-align: center;\"> <div>
    <h4>   <a href=\"";
        // line 21
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("new");
        echo "\">ADD New Deal</a></h4>
    </div>
</div>



    <hr>
    <hr>

    <div class=\"product\">
        <div class=\"container\">

            <div class=\"row\">
                <div class=\"col\">




                    ";
        // line 39
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["listProduct"]) ? $context["listProduct"] : $this->getContext($context, "listProduct")));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 40
            echo "
                        <!-- Event -->
                        <div class=\"product\">
                            <div class=\"row row-lg-eq-height\">
                                <div class=\"col-lg-6 product_col\">
                                    <div class=\"product_image_container\">
                                        <div class=\"background_image\" style=\"background-image:url(";
            // line 46
            echo twig_escape_filter($this->env, $this->getAttribute($context["i"], "displayPhoto", []), "html", null, true);
            echo ")\" >

                                        </div>
                                        <img src=\" ";
            // line 49
            echo twig_escape_filter($this->env, $this->getAttribute($context["i"], "displayPhoto", []), "html", null, true);
            echo " \" class=\"card-img-top\" alt=\"Deal's photo\">

                                    </div>
                                </div>
                                <div class=\"col-lg-6 event_col\">
                                    <div class=\"product_content\">
                                        <div class=\"product_title\" ><h3>";
            // line 55
            echo twig_escape_filter($this->env, $this->getAttribute($context["i"], "getProductname", []), "html", null, true);
            echo "</h3></div>
                                        <div class=\"product-info\">";
            // line 56
            echo twig_escape_filter($this->env, $this->getAttribute($context["i"], "getProductcatid", []), "html", null, true);
            echo "</div>

                                        <div class=\"product_description\">
                                            <p>";
            // line 59
            echo twig_escape_filter($this->env, $this->getAttribute($context["i"], "getProductdescription", []), "html", null, true);
            echo "</p>
                                        </div>
                                        <div class=\"product_price \">
                                            <div class=\"product_price\"><p>";
            // line 62
            echo twig_escape_filter($this->env, $this->getAttribute($context["i"], "getPrice", []), "html", null, true);
            echo " TND</p>  </div>
                                        </div>



                                            <div >
                                                <a href=\"";
            // line 68
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("update_product", ["productid" => $this->getAttribute($context["i"], "getProductid", [])]), "html", null, true);
            echo "\" class=\"white-text d-flex justify-content-end\"><h5> Update <i class=\"fas fa-angle-double-right\"></i></h5></a>
                                                <a href=\"";
            // line 69
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("delete_product", ["productid" => $this->getAttribute($context["i"], "getProductid", [])]), "html", null, true);
            echo "\" class=\"white-text d-flex justify-content-end\"><h5> Remove <i class=\"fas fa-angle-double-right\"></i></h5></a>


                                            </div>


                                        <div class=\"Deal_buttons \">
                                            <div class=\"button Deal_button Deal_button_1\"><a href=\" ";
            // line 76
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("show_detailedproduct", ["productid" => $this->getAttribute($context["i"], "getProductid", [])]), "html", null, true);
            echo "\">Read More </a></div>
                                        </div>

                                        <br>
                                        <br>
                                       <div class=\"event_speakers\">
                                            <!-- Event Speaker -->
                                            <div class=\"event_speaker d-flex flex-row align-items-center justify-content-start\">
                                                <div><div class=\"event_speaker_image\"><img src=\"";
            // line 84
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("No-Image-Availbe.jpg"), "html", null, true);
            echo "\" alt=\"\"></div></div>
                                                <div class=\"event_speaker_content\">
                                                    <div class=\"event_speaker_name\">Michael Smith</div>
                                                    <div class=\"event_speaker_title\">";
            // line 87
            echo twig_escape_filter($this->env, $this->getAttribute($context["i"], "getProductcatid", []), "html", null, true);
            echo "</div>

                                                </div>
                                            </div>
                                            <!-- Event Speaker -->
                                            <div class=\"event_speaker d-flex flex-row align-items-center justify-content-start\">
                                                <div><div class=\"event_speaker_image\"> <input type=\"image\" data-image-src=\"\"> </div></div>
                                                <div class=\"event_speaker_content\">
                                                    <div class=\"event_speaker_name\" > </div>

                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>

<div>
    <br>
    <br>
</div>

                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 112
        echo "

                </div>
            </div>
        </div>
    </div>
    </div>
    <script>
        var l=1;
        function Change() {
            l=-l;
            document.getElementById('val').value=l;

        }
    </script>






";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 135
    public function block_foot($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "foot"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "foot"));

        // line 136
        echo "     <!-- Footer -->
     <footer class=\"footer\">
         <div class=\"container\">
             <div class=\"row align-items-center\">
                 <div class=\"col-md-4\">
                     <span class=\"copyright\">Copyright &copy; Your Website 2019</span>
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
        return "@Product/Product/show_product.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  270 => 136,  261 => 135,  230 => 112,  199 => 87,  193 => 84,  182 => 76,  172 => 69,  168 => 68,  159 => 62,  153 => 59,  147 => 56,  143 => 55,  134 => 49,  128 => 46,  120 => 40,  116 => 39,  95 => 21,  91 => 19,  82 => 18,  62 => 4,  53 => 3,  31 => 1,);
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
                  <div class=\"intro-heading text-uppercase\"> Deals </div>
              </div>
          </div>
      </header>

  {% endblock %}



{% block other %}

<div style=\"text-align: center;\"> <div>
    <h4>   <a href=\"{{path('new')}}\">ADD New Deal</a></h4>
    </div>
</div>



    <hr>
    <hr>

    <div class=\"product\">
        <div class=\"container\">

            <div class=\"row\">
                <div class=\"col\">




                    {% for i in  listProduct %}

                        <!-- Event -->
                        <div class=\"product\">
                            <div class=\"row row-lg-eq-height\">
                                <div class=\"col-lg-6 product_col\">
                                    <div class=\"product_image_container\">
                                        <div class=\"background_image\" style=\"background-image:url({{ i.displayPhoto }})\" >

                                        </div>
                                        <img src=\" {{ i.displayPhoto  }} \" class=\"card-img-top\" alt=\"Deal's photo\">

                                    </div>
                                </div>
                                <div class=\"col-lg-6 event_col\">
                                    <div class=\"product_content\">
                                        <div class=\"product_title\" ><h3>{{ i.getProductname }}</h3></div>
                                        <div class=\"product-info\">{{i.getProductcatid}}</div>

                                        <div class=\"product_description\">
                                            <p>{{ i.getProductdescription }}</p>
                                        </div>
                                        <div class=\"product_price \">
                                            <div class=\"product_price\"><p>{{ i.getPrice }} TND</p>  </div>
                                        </div>



                                            <div >
                                                <a href=\"{{path('update_product',{'productid':i.getProductid})}}\" class=\"white-text d-flex justify-content-end\"><h5> Update <i class=\"fas fa-angle-double-right\"></i></h5></a>
                                                <a href=\"{{path('delete_product',{'productid':i.getProductid})}}\" class=\"white-text d-flex justify-content-end\"><h5> Remove <i class=\"fas fa-angle-double-right\"></i></h5></a>


                                            </div>


                                        <div class=\"Deal_buttons \">
                                            <div class=\"button Deal_button Deal_button_1\"><a href=\" {{path('show_detailedproduct',{'productid':i.getProductid})}}\">Read More </a></div>
                                        </div>

                                        <br>
                                        <br>
                                       <div class=\"event_speakers\">
                                            <!-- Event Speaker -->
                                            <div class=\"event_speaker d-flex flex-row align-items-center justify-content-start\">
                                                <div><div class=\"event_speaker_image\"><img src=\"{{ asset('No-Image-Availbe.jpg') }}\" alt=\"\"></div></div>
                                                <div class=\"event_speaker_content\">
                                                    <div class=\"event_speaker_name\">Michael Smith</div>
                                                    <div class=\"event_speaker_title\">{{i.getProductcatid}}</div>

                                                </div>
                                            </div>
                                            <!-- Event Speaker -->
                                            <div class=\"event_speaker d-flex flex-row align-items-center justify-content-start\">
                                                <div><div class=\"event_speaker_image\"> <input type=\"image\" data-image-src=\"\"> </div></div>
                                                <div class=\"event_speaker_content\">
                                                    <div class=\"event_speaker_name\" > </div>

                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>

<div>
    <br>
    <br>
</div>

                    {% endfor %}


                </div>
            </div>
        </div>
    </div>
    </div>
    <script>
        var l=1;
        function Change() {
            l=-l;
            document.getElementById('val').value=l;

        }
    </script>






{% endblock  %}

 {% block foot %}
     <!-- Footer -->
     <footer class=\"footer\">
         <div class=\"container\">
             <div class=\"row align-items-center\">
                 <div class=\"col-md-4\">
                     <span class=\"copyright\">Copyright &copy; Your Website 2019</span>
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
 {%  endblock %}", "@Product/Product/show_product.html.twig", "C:\\wamp64\\www\\Chick_Click\\src\\ProductBundle\\Resources\\views\\Product\\show_product.html.twig");
    }
}
