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

/* publication/index.html.twig */
class __TwigTemplate_5787bb3ca5b40fd6395630624f58ca94ee0e113383a077701370beb62f5dbf2b extends \Twig\Template
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
        // line 46
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "publication/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "publication/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "publication/index.html.twig", 46);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 48
    public function block_body($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 49
        echo "<!DOCTYPE html>
<!--[if lt IE 7]>      <html class=\"no-js lt-ie9 lt-ie8 lt-ie7\"> <![endif]-->
<!--[if IE 7]>         <html class=\"no-js lt-ie9 lt-ie8\"> <![endif]-->
<!--[if IE 8]>         <html class=\"no-js lt-ie9\"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class=\"no-js\"> <!--<![endif]-->

<!-- Mirrored from demo.themefisher.com/themefisher/aviato/blog-full-width.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 07 Nov 2019 17:40:32 GMT -->
<head>
    <meta http-equiv=\"Content-Type\" content=\"text/html; charset=UTF-8\">
    <meta name=\"description\" content=\"Aviato E-Commerce Template\">

    <meta name=\"author\" content=\"Themefisher.com\">


    <!-- Mobile Specific Meta-->
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">

    <!-- Favicon -->
    <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        // line 68
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("T/favicon.ico"), "html", null, true);
        echo "\" />


    <meta http-equiv=\"Content-Type\" content=\"text/html; charset=UTF-8\">
    <meta name=\"description\" content=\"Aviato E-Commerce Template\">

    <meta name=\"author\" content=\"Themefisher.com\">


    <!-- Mobile Specific Meta-->
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">

    <!-- Favicon -->

    <!-- Themefisher Icon font -->
    <link rel=\"stylesheet\" href=\"";
        // line 83
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("T/plugins/themefisher-font/style.css"), "html", null, true);
        echo "\">
    <!-- bootstrap.min css -->
    <link rel=\"stylesheet\" href=\"";
        // line 85
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("T/plugins/bootstrap/css/bootstrap.min.css"), "html", null, true);
        echo "\">

    <!-- Revolution Slider -->
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 88
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("T/plugins/revolution-slider/revolution/fonts/pe-icon-7-stroke/css/pe-icon-7-stroke.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 89
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("T/plugins/revolution-slider/revolution/fonts/font-awesome/css/font-awesome.css"), "html", null, true);
        echo "\">

    <!-- REVOLUTION STYLE SHEETS -->
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 92
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("T/plugins/revolution-slider/revolution/css/settings.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 93
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("T/plugins/revolution-slider/revolution/css/layers.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 94
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("T/plugins/revolution-slider/revolution/css/navigation.css"), "html", null, true);
        echo "\">
    <link href=\"";
        // line 95
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/vendors/custom/vendors/flaticon/flaticon.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
    <!-- Main Stylesheet -->
    <link rel=\"stylesheet\" href=\"";
        // line 97
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("T/css/style.css"), "html", null, true);
        echo "\">
</head>

<body id=\"body\">







</section>
<div class=\"page-wrapper\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-12\">
                <ul>
                            <li>
                                <a href=\"";
        // line 115
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("pub_new");
        echo "\" class=\"btn btn-main\">Create a new publication</a>
                            </li>
                        </ul>
                ";
        // line 118
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["publications"]) ? $context["publications"] : $this->getContext($context, "publications")));
        foreach ($context['_seq'] as $context["_key"] => $context["publication"]) {
            // line 119
            echo "                <div class=\"post\">
                    <div class=\"post-media post-thumb\">
                        <a href=\"blog-single.html\">
                            <img class=\"img-responsive\" src=\"";
            // line 122
            echo twig_escape_filter($this->env, ($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("uploads/images/") . $this->getAttribute($context["publication"], "publicationImage", [])), "html", null, true);
            echo "\" alt=\"\">                        </a>
                    </div>


                    <h2 class=\"post-title\"><a href=\"";
            // line 126
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("pub_show", ["id" => $this->getAttribute($context["publication"], "id", [])]), "html", null, true);
            echo "\"> ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["publication"], "pseudo", []), "html", null, true);
            echo " </a></h2>
                    <div class=\"post-meta\">
                        <ul>
                                                    <li>
                                                        <a href=\"";
            // line 130
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("pub_show", ["id" => $this->getAttribute($context["publication"], "id", [])]), "html", null, true);
            echo "\">show</a>
                                                    </li>
                                                    <li>
                                                        <a href=\"";
            // line 133
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("pub_edit", ["id" => $this->getAttribute($context["publication"], "id", [])]), "html", null, true);
            echo "\">edit</a>
                                                    </li>
                                                </ul>
                        <ul>
                            <li>
                                <i class=\"tf-ion-ios-calendar\"></i> 20, MAR 2017
                            </li>
                            <li>
                                <i class=\"tf-ion-android-person\"></i> POSTED BY ADMIN
                            </li>
                            <li>
                                <a href=\"#\"><i class=\"tf-ion-ios-pricetags\"></i> LIFESTYLE</a>,<a href=\"#\"> TRAVEL</a>, <a href=\"#\">FASHION</a>
                            </li>
                            <li>
                                <a href=\"#\"><i class=\"tf-ion-chatbubbles\"></i> 4 COMMENTS</a>
                            </li>
                        </ul>
                    </div>
                    <div class=\"post-content\">
                        <p>";
            // line 152
            echo twig_escape_filter($this->env, $this->getAttribute($context["publication"], "coreText", []), "html", null, true);
            echo "  </p>
                        <a href=\"";
            // line 153
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("pub_show", ["id" => $this->getAttribute($context["publication"], "id", [])]), "html", null, true);
            echo "\" class=\"btn btn-main\">Continue Reading</a>
";
            // line 157
            echo "                    </div>

";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['publication'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 160
        echo "
                </div>





<!--
Essential Scripts
=====================================-->

<!-- Main jQuery -->
<script src=\"";
        // line 172
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("T/plugins/jquery/dist/jquery.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 173
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("T/js/test.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 174
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery-3.2.1.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 175
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/js/jquery.js"), "html", null, true);
        echo "\"></script>
<!-- Bootstrap 3.1 -->
<script src=\"";
        // line 177
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("T/plugins/bootstrap/js/bootstrap.min.js"), "html", null, true);
        echo "\" ></script>
<!-- Bootstrap Touchpin -->
<script src=\"";
        // line 179
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("T/plugins/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.min.js"), "html", null, true);
        echo "\"></script>
<!-- Instagram Feed Js -->
<script src=\"";
        // line 181
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("T/plugins/instafeed-js/instafeed.min.js"), "html", null, true);
        echo "\"></script>
<!-- Video Lightbox Plugin -->
<script src=\"";
        // line 183
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("T/plugins/ekko-lightbox/dist/ekko-lightbox.min.js"), "html", null, true);
        echo "\"></script>
<!-- Count Down Js -->
<script src=\"";
        // line 185
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("T/plugins/SyoTimer/build/jquery.syotimer.min.js"), "html", null, true);
        echo "\"></script>

<!-- Revolution Slider -->
<script type=\"text/javascript\" src=\"";
        // line 188
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("T/plugins/revolution-slider/revolution/js/jquery.themepunch.tools.min.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 189
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("T/plugins/revolution-slider/revolution/js/jquery.themepunch.revolution.min.js"), "html", null, true);
        echo "\"></script>

<!-- Revolution Slider -->
<script type=\"text/javascript\" src=\"";
        // line 192
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("T/plugins/revolution-slider/revolution/js/extensions/revolution.extension.actions.min.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 193
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("T/plugins/revolution-slider/revolution/js/extensions/revolution.extension.carousel.min.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 194
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("T/plugins/revolution-slider/revolution/js/extensions/revolution.extension.kenburn.min.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 195
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("T/plugins/revolution-slider/revolution/js/extensions/revolution.extension.layeranimation.min.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 196
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("T/plugins/revolution-slider/revolution/js/extensions/revolution.extension.migration.min.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 197
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("T/plugins/revolution-slider/revolution/js/extensions/revolution.extension.navigation.min.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 198
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("T/plugins/revolution-slider/revolution/js/extensions/revolution.extension.parallax.min.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 199
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("T/plugins/revolution-slider/revolution/js/extensions/revolution.extension.slideanims.min.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 200
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("T/plugins/revolution-slider/revolution/js/extensions/revolution.extension.video.min.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 201
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("T/plugins/revolution-slider/revolution/js/extensions/revolution.extension.video.min.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 202
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("T/plugins/revolution-slider/assets/warning.js"), "html", null, true);
        echo "\"></script>



<!-- Google Mapl -->
<script src=\"https://maps.googleapis.com/maps/api/js?key=AIzaSyCC72vZw-6tGqFyRhhg5CkF2fqfILn2Tsw\"></script>
<script type=\"text/javascript\" src=\"plugins/google-map/gmap.js\"></script>

<!-- Main Js File -->
<script src=\"";
        // line 211
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("T/js/script.js"), "html", null, true);
        echo "\"></script>
</body>
</html>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "publication/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  352 => 211,  340 => 202,  336 => 201,  332 => 200,  328 => 199,  324 => 198,  320 => 197,  316 => 196,  312 => 195,  308 => 194,  304 => 193,  300 => 192,  294 => 189,  290 => 188,  284 => 185,  279 => 183,  274 => 181,  269 => 179,  264 => 177,  259 => 175,  255 => 174,  251 => 173,  247 => 172,  233 => 160,  225 => 157,  221 => 153,  217 => 152,  195 => 133,  189 => 130,  180 => 126,  173 => 122,  168 => 119,  164 => 118,  158 => 115,  137 => 97,  132 => 95,  128 => 94,  124 => 93,  120 => 92,  114 => 89,  110 => 88,  104 => 85,  99 => 83,  81 => 68,  60 => 49,  51 => 48,  29 => 46,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{#{% extends 'base.html.twig' %}#}

{#{% block body %}#}
{#    <h1>Publications list</h1>#}

{#    <table>#}
{#        <thead>#}
{#            <tr>#}
{#                <th>Id</th>#}
{#                <th>Pseudo</th>#}
{#                <th>Publicationimage</th>#}
{#                <th>Publicationdate</th>#}
{#                <th>Coretext</th>#}
{#                <th>Actions</th>#}
{#            </tr>#}
{#        </thead>#}
{#        <tbody>#}
{#        {% for publication in publications %}#}
{#            <tr>#}
{#                <td><a href=\"{{ path('pub_show', { 'id': publication.id }) }}\">{{ publication.id }}</a></td>#}
{#                <td>{{ publication.pseudo }}</td>#}
{#                <td>{{ publication.publicationImage }}</td>#}
{#                <td>{% if publication.publicationDate %}{{ publication.publicationDate|date('Y-m-d') }}{% endif %}</td>#}
{#                <td>{{ publication.coreText }}</td>#}
{#                <td>#}
{#                    <ul>#}
{#                        <li>#}
{#                            <a href=\"{{ path('pub_show', { 'id': publication.id }) }}\">show</a>#}
{#                        </li>#}
{#                        <li>#}
{#                            <a href=\"{{ path('pub_edit', { 'id': publication.id }) }}\">edit</a>#}
{#                        </li>#}
{#                    </ul>#}
{#                </td>#}
{#            </tr>#}
{#        {% endfor %}#}
{#        </tbody>#}
{#    </table>#}

{#    <ul>#}
{#        <li>#}
{#            <a href=\"{{ path('pub_new') }}\">Create a new publication</a>#}
{#        </li>#}
{#    </ul>#}
{#{% endblock %}#}
{% extends 'base.html.twig' %}

{% block body %}
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class=\"no-js lt-ie9 lt-ie8 lt-ie7\"> <![endif]-->
<!--[if IE 7]>         <html class=\"no-js lt-ie9 lt-ie8\"> <![endif]-->
<!--[if IE 8]>         <html class=\"no-js lt-ie9\"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class=\"no-js\"> <!--<![endif]-->

<!-- Mirrored from demo.themefisher.com/themefisher/aviato/blog-full-width.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 07 Nov 2019 17:40:32 GMT -->
<head>
    <meta http-equiv=\"Content-Type\" content=\"text/html; charset=UTF-8\">
    <meta name=\"description\" content=\"Aviato E-Commerce Template\">

    <meta name=\"author\" content=\"Themefisher.com\">


    <!-- Mobile Specific Meta-->
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">

    <!-- Favicon -->
    <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('T/favicon.ico') }}\" />


    <meta http-equiv=\"Content-Type\" content=\"text/html; charset=UTF-8\">
    <meta name=\"description\" content=\"Aviato E-Commerce Template\">

    <meta name=\"author\" content=\"Themefisher.com\">


    <!-- Mobile Specific Meta-->
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">

    <!-- Favicon -->

    <!-- Themefisher Icon font -->
    <link rel=\"stylesheet\" href=\"{{ asset('T/plugins/themefisher-font/style.css') }}\">
    <!-- bootstrap.min css -->
    <link rel=\"stylesheet\" href=\"{{ asset('T/plugins/bootstrap/css/bootstrap.min.css') }}\">

    <!-- Revolution Slider -->
    <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset ('T/plugins/revolution-slider/revolution/fonts/pe-icon-7-stroke/css/pe-icon-7-stroke.css') }}\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset ('T/plugins/revolution-slider/revolution/fonts/font-awesome/css/font-awesome.css') }}\">

    <!-- REVOLUTION STYLE SHEETS -->
    <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset ('T/plugins/revolution-slider/revolution/css/settings.css') }}\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset ('T/plugins/revolution-slider/revolution/css/layers.css') }}\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset ('T/plugins/revolution-slider/revolution/css/navigation.css') }}\">
    <link href=\"{{ asset('assets/vendors/custom/vendors/flaticon/flaticon.css') }}\" rel=\"stylesheet\" type=\"text/css\" />
    <!-- Main Stylesheet -->
    <link rel=\"stylesheet\" href=\"{{ asset ('T/css/style.css') }}\">
</head>

<body id=\"body\">







</section>
<div class=\"page-wrapper\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-12\">
                <ul>
                            <li>
                                <a href=\"{{ path('pub_new') }}\" class=\"btn btn-main\">Create a new publication</a>
                            </li>
                        </ul>
                {% for publication in publications %}
                <div class=\"post\">
                    <div class=\"post-media post-thumb\">
                        <a href=\"blog-single.html\">
                            <img class=\"img-responsive\" src=\"{{ asset('uploads/images/') ~ publication.publicationImage }}\" alt=\"\">                        </a>
                    </div>


                    <h2 class=\"post-title\"><a href=\"{{ path('pub_show', { 'id': publication.id }) }}\"> {{ publication.pseudo }} </a></h2>
                    <div class=\"post-meta\">
                        <ul>
                                                    <li>
                                                        <a href=\"{{ path('pub_show', { 'id': publication.id }) }}\">show</a>
                                                    </li>
                                                    <li>
                                                        <a href=\"{{ path('pub_edit', { 'id': publication.id }) }}\">edit</a>
                                                    </li>
                                                </ul>
                        <ul>
                            <li>
                                <i class=\"tf-ion-ios-calendar\"></i> 20, MAR 2017
                            </li>
                            <li>
                                <i class=\"tf-ion-android-person\"></i> POSTED BY ADMIN
                            </li>
                            <li>
                                <a href=\"#\"><i class=\"tf-ion-ios-pricetags\"></i> LIFESTYLE</a>,<a href=\"#\"> TRAVEL</a>, <a href=\"#\">FASHION</a>
                            </li>
                            <li>
                                <a href=\"#\"><i class=\"tf-ion-chatbubbles\"></i> 4 COMMENTS</a>
                            </li>
                        </ul>
                    </div>
                    <div class=\"post-content\">
                        <p>{{ publication.coreText }}  </p>
                        <a href=\"{{ path('pub_show', { 'id': publication.id }) }}\" class=\"btn btn-main\">Continue Reading</a>
{#                        <li>#}
{#                            <a href=\"{{ path('pub_show', { 'id': publication.id }) }}\">show</a>#}
{#                        </li>#}
                    </div>

{% endfor %}

                </div>





<!--
Essential Scripts
=====================================-->

<!-- Main jQuery -->
<script src=\"{{ asset('T/plugins/jquery/dist/jquery.min.js') }}\"></script>
<script src=\"{{ asset('T/js/test.js') }}\"></script>
<script src=\"{{ asset('js/jquery-3.2.1.min.js') }}\"></script>
<script src=\"{{ asset('js/js/jquery.js') }}\"></script>
<!-- Bootstrap 3.1 -->
<script src=\"{{ asset('T/plugins/bootstrap/js/bootstrap.min.js') }}\" ></script>
<!-- Bootstrap Touchpin -->
<script src=\"{{ asset('T/plugins/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.min.js') }}\"></script>
<!-- Instagram Feed Js -->
<script src=\"{{ asset('T/plugins/instafeed-js/instafeed.min.js') }}\"></script>
<!-- Video Lightbox Plugin -->
<script src=\"{{ asset('T/plugins/ekko-lightbox/dist/ekko-lightbox.min.js') }}\"></script>
<!-- Count Down Js -->
<script src=\"{{ asset('T/plugins/SyoTimer/build/jquery.syotimer.min.js') }}\"></script>

<!-- Revolution Slider -->
<script type=\"text/javascript\" src=\"{{ asset('T/plugins/revolution-slider/revolution/js/jquery.themepunch.tools.min.js') }}\"></script>
<script type=\"text/javascript\" src=\"{{ asset('T/plugins/revolution-slider/revolution/js/jquery.themepunch.revolution.min.js') }}\"></script>

<!-- Revolution Slider -->
<script type=\"text/javascript\" src=\"{{ asset('T/plugins/revolution-slider/revolution/js/extensions/revolution.extension.actions.min.js') }}\"></script>
<script type=\"text/javascript\" src=\"{{ asset('T/plugins/revolution-slider/revolution/js/extensions/revolution.extension.carousel.min.js') }}\"></script>
<script type=\"text/javascript\" src=\"{{ asset('T/plugins/revolution-slider/revolution/js/extensions/revolution.extension.kenburn.min.js') }}\"></script>
<script type=\"text/javascript\" src=\"{{ asset('T/plugins/revolution-slider/revolution/js/extensions/revolution.extension.layeranimation.min.js') }}\"></script>
<script type=\"text/javascript\" src=\"{{ asset('T/plugins/revolution-slider/revolution/js/extensions/revolution.extension.migration.min.js') }}\"></script>
<script type=\"text/javascript\" src=\"{{ asset('T/plugins/revolution-slider/revolution/js/extensions/revolution.extension.navigation.min.js') }}\"></script>
<script type=\"text/javascript\" src=\"{{ asset('T/plugins/revolution-slider/revolution/js/extensions/revolution.extension.parallax.min.js') }}\"></script>
<script type=\"text/javascript\" src=\"{{ asset('T/plugins/revolution-slider/revolution/js/extensions/revolution.extension.slideanims.min.js') }}\"></script>
<script type=\"text/javascript\" src=\"{{ asset('T/plugins/revolution-slider/revolution/js/extensions/revolution.extension.video.min.js') }}\"></script>
<script type=\"text/javascript\" src=\"{{ asset('T/plugins/revolution-slider/revolution/js/extensions/revolution.extension.video.min.js') }}\"></script>
<script type=\"text/javascript\" src=\"{{ asset('T/plugins/revolution-slider/assets/warning.js') }}\"></script>



<!-- Google Mapl -->
<script src=\"https://maps.googleapis.com/maps/api/js?key=AIzaSyCC72vZw-6tGqFyRhhg5CkF2fqfILn2Tsw\"></script>
<script type=\"text/javascript\" src=\"plugins/google-map/gmap.js\"></script>

<!-- Main Js File -->
<script src=\"{{ asset('T/js/script.js') }}\"></script>
</body>
</html>
{% endblock %}", "publication/index.html.twig", "C:\\wamp64\\www\\Chick_Click\\app\\Resources\\views\\publication\\index.html.twig");
    }
}
