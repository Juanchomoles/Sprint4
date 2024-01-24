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

/* catalogue/index.html.twig */
class __TwigTemplate_a2c6209becd7769fa0ae3a965c18e7ca extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base_3.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "catalogue/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "catalogue/index.html.twig"));

        $this->parent = $this->loadTemplate("base_3.html.twig", "catalogue/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 2
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo " Cataleg ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 4
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 5
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    <link rel=\"stylesheet\" href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("equip3/css/catalogue.css"), "html", null, true);
        echo "\">
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 8
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 9
        echo "    <h1 class=\"col-12 \">Cataleg</h1>
    <form method=\"GET\" class=\"col-12 col-lg-auto mb-3 mb-lg-0 mx-lg-5 mb-lg-1\" role=\"search\">
        <input name=\"q\" type=\"search\" class=\"form-control form-control-light text-dark justify-content-center\"
               placeholder=\"Buscar...\" aria-label=\"Search\">
    </form>

    ";
        // line 15
        if ((isset($context["q"]) || array_key_exists("q", $context) ? $context["q"] : (function () { throw new RuntimeError('Variable "q" does not exist.', 15, $this->source); })())) {
            // line 16
            echo "        <h2>Mostrant el resultat de la cerca: ";
            echo twig_escape_filter($this->env, (isset($context["q"]) || array_key_exists("q", $context) ? $context["q"] : (function () { throw new RuntimeError('Variable "q" does not exist.', 16, $this->source); })()), "html", null, true);
            echo "</h2>
    ";
        }
        // line 18
        echo "    <div class=\"vehicle-container d-flex flex-wrap gap-4 justify-content-center  p-5 bg-#f5f5f5\">
        ";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["vehicles"]) || array_key_exists("vehicles", $context) ? $context["vehicles"] : (function () { throw new RuntimeError('Variable "vehicles" does not exist.', 19, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["vehicle"]) {
            // line 20
            echo "            ";
            if ((twig_get_attribute($this->env, $this->source, $context["vehicle"], "vehicleOrder", [], "any", false, false, false, 20) == null)) {
                // line 21
                echo "                <div class=\"vehicle w-20 mb-2 border border-1 border-light rounded-5 overflow-hidden \">
                    <div class=\"img-vehicle rounded-2 w-100 overflow-hidden mh-\">
                        <!--<img src=\"";
                // line 23
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("/equip3/img/vehicles/" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["vehicle"], "images", [], "any", false, false, false, 23), 0, [], "array", false, false, false, 23), "filename", [], "any", false, false, false, 23))), "html", null, true);
                echo "\"
                         alt=\"image ";
                // line 24
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["vehicle"], "model", [], "any", false, false, false, 24), "name", [], "any", false, false, false, 24), "html", null, true);
                echo "\">-->
                        <div id=\"carouselExampleIndicators_";
                // line 25
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["vehicle"], "id", [], "any", false, false, false, 25), "html", null, true);
                echo "\" class=\"carousel slide w-100\">
                            <div class=\"carousel-indicators\">
                                <button type=\"button\" data-bs-target=\"#carouselExampleIndicators\" data-bs-slide-to=\"0\"
                                        class=\"active\" aria-current=\"true\" aria-label=\"Slide 1\"></button>
                                <button type=\"button\" data-bs-target=\"#carouselExampleIndicators\" data-bs-slide-to=\"1\"
                                        aria-label=\"Slide 2\"></button>
                                <button type=\"button\" data-bs-target=\"#carouselExampleIndicators \" data-bs-slide-to=\"2\"
                                        aria-label=\"Slide 3\"></button>
                            </div>
                            <div class=\"carousel-inner\">
                                <div class=\"carousel-item active\">
                                    <img src=\"";
                // line 36
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("/equip3/img/vehicles/" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["vehicle"], "images", [], "any", false, false, false, 36), 0, [], "array", false, false, false, 36), "filename", [], "any", false, false, false, 36))), "html", null, true);
                echo "\"
                                         class=\"d-block w-100 object-fit-cover rounded-top\"
                                         alt=\"image ";
                // line 38
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["vehicle"], "model", [], "any", false, false, false, 38), "name", [], "any", false, false, false, 38), "html", null, true);
                echo "\">
                                </div>
                                <div class=\"carousel-item\">
                                    <img src=\"";
                // line 41
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("/equip3/img/vehicles/" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["vehicle"], "images", [], "any", false, false, false, 41), 1, [], "array", false, false, false, 41), "filename", [], "any", false, false, false, 41))), "html", null, true);
                echo "\"
                                         class=\"d-block w-100object-fit-cover rounded-top\"
                                         alt=\"image ";
                // line 43
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["vehicle"], "model", [], "any", false, false, false, 43), "name", [], "any", false, false, false, 43), "html", null, true);
                echo "\">
                                </div>
                                <div class=\"carousel-item\">
                                    <img src=\"";
                // line 46
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("/equip3/img/vehicles/" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["vehicle"], "images", [], "any", false, false, false, 46), 2, [], "array", false, false, false, 46), "filename", [], "any", false, false, false, 46))), "html", null, true);
                echo "\"
                                         class=\"d-block w-100 object-fit-cover rounded-top\"
                                         alt=\"image ";
                // line 48
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["vehicle"], "model", [], "any", false, false, false, 48), "name", [], "any", false, false, false, 48), "html", null, true);
                echo "\">
                                </div>
                            </div>
                            <button class=\"carousel-control-prev\" type=\"button\"
                                    data-bs-target=\"#carouselExampleIndicators_";
                // line 52
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["vehicle"], "id", [], "any", false, false, false, 52), "html", null, true);
                echo "\" data-bs-slide=\"prev\">
                                <span class=\"carousel-control-prev-icon\" aria-hidden=\"true\"></span>
                                <span class=\"visually-hidden\">Previous</span>
                            </button>
                            <button class=\"carousel-control-next\" type=\"button\"
                                    data-bs-target=\"#carouselExampleIndicators_";
                // line 57
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["vehicle"], "id", [], "any", false, false, false, 57), "html", null, true);
                echo "\" data-bs-slide=\"next\">
                                <span class=\"carousel-control-next-icon\" aria-hidden=\"true\"></span>
                                <span class=\"visually-hidden\">Next</span>
                            </button>
                        </div>
                    </div>
                    <div class=\"des-vehicle p-3 rounded-top\">
                        <p class=\"name-vehicle text-center mt-3 fs-5 fw-bold\">";
                // line 64
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["vehicle"], "model", [], "any", false, false, false, 64), "brand", [], "any", false, false, false, 64), "name", [], "any", false, false, false, 64), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["vehicle"], "model", [], "any", false, false, false, 64), "name", [], "any", false, false, false, 64), "html", null, true);
                echo " </p>
                        <div class=\"data-vehicle d-flex justify-content-around p-3 rounded-top\">
                            <div><p class=\"price-vehicle mt-1 text-center fs-5 fw-bold\">";
                // line 66
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["vehicle"], "sellPrice", [], "any", false, false, false, 66), "html", null, true);
                echo "€</p></div>
                            <div><p class=\"km-vehicle mt-1 text-center fs-6\"> ";
                // line 67
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["vehicle"], "kilometers", [], "any", false, false, false, 67), "html", null, true);
                echo "km</p></div>
                        </div>
                        <div class=\"vehicle-add text-center pt-2 pb-2\">
                            <a class=\"vehicle-add-button px-3 py-2 rounded-2 text-decoration-none\"
                               href=\"/add/";
                // line 71
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["vehicle"], "id", [], "any", false, false, false, 71), "html", null, true);
                echo "\">Add</a>
                        </div>
                    </div>
                </div>
            ";
            }
            // line 76
            echo "
        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 78
            echo "            <h2>No s'ha trobat res</h2>

        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['vehicle'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 81
        echo "    </div>
    <div class=\"navigation d-flex justify-content-center mt-lg-3\">

        ";
        // line 84
        echo $this->env->getRuntime('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationRuntime')->render($this->env, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 84, $this->source); })()));
        echo "
    </div>

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "catalogue/index.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable()
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  266 => 84,  261 => 81,  253 => 78,  247 => 76,  239 => 71,  232 => 67,  228 => 66,  221 => 64,  211 => 57,  203 => 52,  196 => 48,  191 => 46,  185 => 43,  180 => 41,  174 => 38,  169 => 36,  155 => 25,  151 => 24,  147 => 23,  143 => 21,  140 => 20,  135 => 19,  132 => 18,  126 => 16,  124 => 15,  116 => 9,  106 => 8,  94 => 6,  89 => 5,  79 => 4,  60 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base_3.html.twig' %}
{% block title %} Cataleg {% endblock %}

{% block stylesheets %}
    {{ parent() }}
    <link rel=\"stylesheet\" href=\"{{ asset('equip3/css/catalogue.css') }}\">
{% endblock %}
{% block body %}
    <h1 class=\"col-12 \">Cataleg</h1>
    <form method=\"GET\" class=\"col-12 col-lg-auto mb-3 mb-lg-0 mx-lg-5 mb-lg-1\" role=\"search\">
        <input name=\"q\" type=\"search\" class=\"form-control form-control-light text-dark justify-content-center\"
               placeholder=\"Buscar...\" aria-label=\"Search\">
    </form>

    {% if q %}
        <h2>Mostrant el resultat de la cerca: {{ q }}</h2>
    {% endif %}
    <div class=\"vehicle-container d-flex flex-wrap gap-4 justify-content-center  p-5 bg-#f5f5f5\">
        {% for vehicle in vehicles %}
            {% if vehicle.vehicleOrder == null %}
                <div class=\"vehicle w-20 mb-2 border border-1 border-light rounded-5 overflow-hidden \">
                    <div class=\"img-vehicle rounded-2 w-100 overflow-hidden mh-\">
                        <!--<img src=\"{{ asset(\"/equip3/img/vehicles/\" ~ vehicle.images[0].filename) }}\"
                         alt=\"image {{ vehicle.model.name }}\">-->
                        <div id=\"carouselExampleIndicators_{{ vehicle.id }}\" class=\"carousel slide w-100\">
                            <div class=\"carousel-indicators\">
                                <button type=\"button\" data-bs-target=\"#carouselExampleIndicators\" data-bs-slide-to=\"0\"
                                        class=\"active\" aria-current=\"true\" aria-label=\"Slide 1\"></button>
                                <button type=\"button\" data-bs-target=\"#carouselExampleIndicators\" data-bs-slide-to=\"1\"
                                        aria-label=\"Slide 2\"></button>
                                <button type=\"button\" data-bs-target=\"#carouselExampleIndicators \" data-bs-slide-to=\"2\"
                                        aria-label=\"Slide 3\"></button>
                            </div>
                            <div class=\"carousel-inner\">
                                <div class=\"carousel-item active\">
                                    <img src=\"{{ asset(\"/equip3/img/vehicles/\" ~ vehicle.images[0].filename) }}\"
                                         class=\"d-block w-100 object-fit-cover rounded-top\"
                                         alt=\"image {{ vehicle.model.name }}\">
                                </div>
                                <div class=\"carousel-item\">
                                    <img src=\"{{ asset(\"/equip3/img/vehicles/\" ~ vehicle.images[1].filename) }}\"
                                         class=\"d-block w-100object-fit-cover rounded-top\"
                                         alt=\"image {{ vehicle.model.name }}\">
                                </div>
                                <div class=\"carousel-item\">
                                    <img src=\"{{ asset(\"/equip3/img/vehicles/\" ~ vehicle.images[2].filename) }}\"
                                         class=\"d-block w-100 object-fit-cover rounded-top\"
                                         alt=\"image {{ vehicle.model.name }}\">
                                </div>
                            </div>
                            <button class=\"carousel-control-prev\" type=\"button\"
                                    data-bs-target=\"#carouselExampleIndicators_{{ vehicle.id }}\" data-bs-slide=\"prev\">
                                <span class=\"carousel-control-prev-icon\" aria-hidden=\"true\"></span>
                                <span class=\"visually-hidden\">Previous</span>
                            </button>
                            <button class=\"carousel-control-next\" type=\"button\"
                                    data-bs-target=\"#carouselExampleIndicators_{{ vehicle.id }}\" data-bs-slide=\"next\">
                                <span class=\"carousel-control-next-icon\" aria-hidden=\"true\"></span>
                                <span class=\"visually-hidden\">Next</span>
                            </button>
                        </div>
                    </div>
                    <div class=\"des-vehicle p-3 rounded-top\">
                        <p class=\"name-vehicle text-center mt-3 fs-5 fw-bold\">{{ vehicle.model.brand.name }} {{ vehicle.model.name }} </p>
                        <div class=\"data-vehicle d-flex justify-content-around p-3 rounded-top\">
                            <div><p class=\"price-vehicle mt-1 text-center fs-5 fw-bold\">{{ vehicle.sellPrice }}€</p></div>
                            <div><p class=\"km-vehicle mt-1 text-center fs-6\"> {{ vehicle.kilometers }}km</p></div>
                        </div>
                        <div class=\"vehicle-add text-center pt-2 pb-2\">
                            <a class=\"vehicle-add-button px-3 py-2 rounded-2 text-decoration-none\"
                               href=\"/add/{{ vehicle.id }}\">Add</a>
                        </div>
                    </div>
                </div>
            {% endif %}

        {% else %}
            <h2>No s'ha trobat res</h2>

        {% endfor %}
    </div>
    <div class=\"navigation d-flex justify-content-center mt-lg-3\">

        {{ knp_pagination_render(pagination) }}
    </div>

{% endblock %}", "catalogue/index.html.twig", "/var/www/html/templates/catalogue/index.html.twig");
    }
}
