<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* film/discover.html.twig */
class __TwigTemplate_3a899a9d22cab95558e216256ce620491209571141d3f20ab10aa502a3105e4e extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
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
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "film/discover.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "film/discover.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "film/discover.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Discover";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "

    <center><h2 class=\"mt-3\">Discover Films & Series</h2></center>

    <div class=\"container\">
        <div class=\"row\">
            ";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["films"]) || array_key_exists("films", $context) ? $context["films"] : (function () { throw new RuntimeError('Variable "films" does not exist.', 12, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["film"]) {
            // line 13
            echo "                <div class=\"col-md-4\">
                    <div class=\"jumbotron\">
                        <h1 class=\"display-8\">";
            // line 15
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["film"], 0, [], "array", false, false, false, 15), "title", [], "array", false, false, false, 15), "html", null, true);
            echo "</h1>
                        <p class=\"lead\">This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.</p>
                        <hr class=\"my-4\">
                        <p>It uses utility classes for typography and spacing to space content out within the larger container.</p>
                        <a class=\"btn btn-primary btn-lg\" href=\"#\" role=\"button\">Learn more</a>
                    </div>
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['film'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 23
        echo "        </div>
    </div>

















    <!--<div id=\"carouselExampleInterval\" class=\"carousel slide\" data-ride=\"carousel\">
        <div class=\"carousel-inner\">
            <div class=\"carousel-item active\" data-interval=\"5000\">
                <img src=\"https://image.tmdb.org/t/p/w100/";
        // line 45
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["films"]) || array_key_exists("films", $context) ? $context["films"] : (function () { throw new RuntimeError('Variable "films" does not exist.', 45, $this->source); })()), 0, [], "array", false, false, false, 45), 0, [], "array", false, false, false, 45), "backdrop_path", [], "array", false, false, false, 45), "html", null, true);
        echo "\" class=\"d-block w-100\" alt=\"...\">
            </div>
            <div class=\"carousel-item\" data-interval=\"5000\">
                <img src=\"https://image.tmdb.org/t/p/w100/";
        // line 48
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["films"]) || array_key_exists("films", $context) ? $context["films"] : (function () { throw new RuntimeError('Variable "films" does not exist.', 48, $this->source); })()), 1, [], "array", false, false, false, 48), 0, [], "array", false, false, false, 48), "backdrop_path", [], "array", false, false, false, 48), "html", null, true);
        echo "\" class=\"d-block w-100\" alt=\"...\">
            </div>
            <div class=\"carousel-item\" data-interval=\"5000\">
                <img src=\"https://image.tmdb.org/t/p/w100/";
        // line 51
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["films"]) || array_key_exists("films", $context) ? $context["films"] : (function () { throw new RuntimeError('Variable "films" does not exist.', 51, $this->source); })()), 2, [], "array", false, false, false, 51), 0, [], "array", false, false, false, 51), "backdrop_path", [], "array", false, false, false, 51), "html", null, true);
        echo "\" class=\"d-block w-100\" alt=\"...\">
            </div>
        </div>
        <a class=\"carousel-control-prev\" href=\"#carouselExampleInterval\" role=\"button\" data-slide=\"prev\">
            <span class=\"carousel-control-prev-icon\" aria-hidden=\"true\"></span>
            <span class=\"sr-only\">Previous</span>
        </a>
        <a class=\"carousel-control-next\" href=\"#carouselExampleInterval\" role=\"button\" data-slide=\"next\">
            <span class=\"carousel-control-next-icon\" aria-hidden=\"true\"></span>
            <span class=\"sr-only\">Next</span>
        </a>
    </div>-->

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "film/discover.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  154 => 51,  148 => 48,  142 => 45,  118 => 23,  104 => 15,  100 => 13,  96 => 12,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Discover{% endblock %}

{% block body %}


    <center><h2 class=\"mt-3\">Discover Films & Series</h2></center>

    <div class=\"container\">
        <div class=\"row\">
            {% for film in films %}
                <div class=\"col-md-4\">
                    <div class=\"jumbotron\">
                        <h1 class=\"display-8\">{{ film[0]['title'] }}</h1>
                        <p class=\"lead\">This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.</p>
                        <hr class=\"my-4\">
                        <p>It uses utility classes for typography and spacing to space content out within the larger container.</p>
                        <a class=\"btn btn-primary btn-lg\" href=\"#\" role=\"button\">Learn more</a>
                    </div>
                </div>
            {% endfor %}
        </div>
    </div>

















    <!--<div id=\"carouselExampleInterval\" class=\"carousel slide\" data-ride=\"carousel\">
        <div class=\"carousel-inner\">
            <div class=\"carousel-item active\" data-interval=\"5000\">
                <img src=\"https://image.tmdb.org/t/p/w100/{{films[0][0]['backdrop_path']}}\" class=\"d-block w-100\" alt=\"...\">
            </div>
            <div class=\"carousel-item\" data-interval=\"5000\">
                <img src=\"https://image.tmdb.org/t/p/w100/{{films[1][0]['backdrop_path']}}\" class=\"d-block w-100\" alt=\"...\">
            </div>
            <div class=\"carousel-item\" data-interval=\"5000\">
                <img src=\"https://image.tmdb.org/t/p/w100/{{films[2][0]['backdrop_path']}}\" class=\"d-block w-100\" alt=\"...\">
            </div>
        </div>
        <a class=\"carousel-control-prev\" href=\"#carouselExampleInterval\" role=\"button\" data-slide=\"prev\">
            <span class=\"carousel-control-prev-icon\" aria-hidden=\"true\"></span>
            <span class=\"sr-only\">Previous</span>
        </a>
        <a class=\"carousel-control-next\" href=\"#carouselExampleInterval\" role=\"button\" data-slide=\"next\">
            <span class=\"carousel-control-next-icon\" aria-hidden=\"true\"></span>
            <span class=\"sr-only\">Next</span>
        </a>
    </div>-->

{% endblock %}", "film/discover.html.twig", "/var/www/site/templates/film/discover.html.twig");
    }
}
