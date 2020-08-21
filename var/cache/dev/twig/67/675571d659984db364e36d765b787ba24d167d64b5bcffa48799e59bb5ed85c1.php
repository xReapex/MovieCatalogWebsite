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

/* include/navbar.html.twig */
class __TwigTemplate_5dc219063223e2bea75c241f01951ded0df4f972dbd1f989d242846c32e7cf34 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "include/navbar.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "include/navbar.html.twig"));

        // line 1
        echo "<style>
    .nav-link, .dropdown-item, .navbar-brand:focus{
        outline: none;
    }
</style>

<nav class=\"navbar navbar-expand-lg navbar-dark bg-dark\">
    <a class=\"navbar-brand\" href=\"";
        // line 8
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("homepage");
        echo "\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Home"), "html", null, true);
        echo "</a>
    <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarNav\" aria-controls=\"navbarNav\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
        <span class=\"navbar-toggler-icon\"></span>
    </button>
    <div class=\"collapse navbar-collapse\" id=\"navbarColor02\">

        <ul class=\"navbar-nav mr-auto\">
            <li class=\"nav-item dropdown\">
                <a class=\"nav-link dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">";
        // line 16
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Movies & Series"), "html", null, true);
        echo "</a>
                <div class=\"dropdown-menu\">
                    <a class=\"dropdown-item\" href=\"#\">Discover</a>
                    <a class=\"dropdown-item\" href=\"#\">Themes</a>
                    <a class=\"dropdown-item\" href=\"#\">Something else here</a>
                    <div class=\"dropdown-divider\"></div>
                    <a class=\"dropdown-item\" href=\"#\">Separated link</a>
                </div>
            </li>
        </ul>

        <ul class=\"navbar-nav ml-auto\">
            <li class=\"nav-item dropdown \">
                <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"dropdown-language\" role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">";
        // line 29
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $this->extensions['Twig\Extra\String\StringExtension']->createUnicodeString($this->extensions['Twig\Extra\Intl\IntlExtension']->getLocaleName(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 29, $this->source); })()), "request", [], "any", false, false, false, 29), "locale", [], "any", false, false, false, 29), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 29, $this->source); })()), "request", [], "any", false, false, false, 29), "locale", [], "any", false, false, false, 29))), "title", [], "any", false, false, false, 29), "html", null, true);
        echo "</a>
                <div class=\"dropdown-menu dropdown-menu-right \" aria-labelledby=\"dropdown-language\">

                    ";
        // line 32
        if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 32, $this->source); })()), "request", [], "any", false, false, false, 32), "locale", [], "any", false, false, false, 32), "fr"))) {
            // line 33
            echo "                        <a class=\"dropdown-item\" href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 33, $this->source); })()), "request", [], "any", false, false, false, 33), "get", [0 => "_route"], "method", false, false, false, 33), twig_array_merge(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 33, $this->source); })()), "request", [], "any", false, false, false, 33), "get", [0 => "_route_params"], "method", false, false, false, 33), ["_locale" => "en"])), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("English"), "html", null, true);
            echo "</a>
                    ";
        } elseif ((0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 34
(isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 34, $this->source); })()), "request", [], "any", false, false, false, 34), "locale", [], "any", false, false, false, 34), "en"))) {
            // line 35
            echo "                        <a class=\"dropdown-item\" href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 35, $this->source); })()), "request", [], "any", false, false, false, 35), "get", [0 => "_route"], "method", false, false, false, 35), twig_array_merge(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 35, $this->source); })()), "request", [], "any", false, false, false, 35), "get", [0 => "_route_params"], "method", false, false, false, 35), ["_locale" => "fr"])), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("French"), "html", null, true);
            echo "</a>
                    ";
        }
        // line 37
        echo "                </div>
            </li>
        </ul>
    </div>
</nav>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "include/navbar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  106 => 37,  98 => 35,  96 => 34,  89 => 33,  87 => 32,  81 => 29,  65 => 16,  52 => 8,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<style>
    .nav-link, .dropdown-item, .navbar-brand:focus{
        outline: none;
    }
</style>

<nav class=\"navbar navbar-expand-lg navbar-dark bg-dark\">
    <a class=\"navbar-brand\" href=\"{{path('homepage')}}\">{{ 'Home'|trans }}</a>
    <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarNav\" aria-controls=\"navbarNav\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
        <span class=\"navbar-toggler-icon\"></span>
    </button>
    <div class=\"collapse navbar-collapse\" id=\"navbarColor02\">

        <ul class=\"navbar-nav mr-auto\">
            <li class=\"nav-item dropdown\">
                <a class=\"nav-link dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">{{\"Movies & Series\" | trans}}</a>
                <div class=\"dropdown-menu\">
                    <a class=\"dropdown-item\" href=\"#\">Discover</a>
                    <a class=\"dropdown-item\" href=\"#\">Themes</a>
                    <a class=\"dropdown-item\" href=\"#\">Something else here</a>
                    <div class=\"dropdown-divider\"></div>
                    <a class=\"dropdown-item\" href=\"#\">Separated link</a>
                </div>
            </li>
        </ul>

        <ul class=\"navbar-nav ml-auto\">
            <li class=\"nav-item dropdown \">
                <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"dropdown-language\" role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">{{ app.request.locale|locale_name(app.request.locale)|u.title }}</a>
                <div class=\"dropdown-menu dropdown-menu-right \" aria-labelledby=\"dropdown-language\">

                    {% if app.request.locale == \"fr\" %}
                        <a class=\"dropdown-item\" href=\"{{ path(app.request.get('_route'), app.request.get('_route_params')|merge({'_locale': 'en'})) }}\">{{ 'English'|trans }}</a>
                    {% elseif app.request.locale == \"en\" %}
                        <a class=\"dropdown-item\" href=\"{{ path(app.request.get('_route'), app.request.get('_route_params')|merge({'_locale': 'fr'})) }}\">{{ 'French'|trans}}</a>
                    {% endif %}
                </div>
            </li>
        </ul>
    </div>
</nav>", "include/navbar.html.twig", "/var/www/site/templates/include/navbar.html.twig");
    }
}
