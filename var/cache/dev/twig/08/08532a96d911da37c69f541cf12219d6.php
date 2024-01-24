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

/* vehicle/index.html.twig */
class __TwigTemplate_b3b02cdb14ecdfb355e73fb32e8aeea6 extends Template
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
        return "base_back_3.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vehicle/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vehicle/index.html.twig"));

        $this->parent = $this->loadTemplate("base_back_3.html.twig", "vehicle/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Vehicle index";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    ";
        // line 7
        echo "    <div ";
        echo $this->extensions['Symfony\UX\Vue\Twig\VueComponentExtension']->renderVueComponent("VehiclesList_component", ["vehicles" => (isset($context["vehicles"]) || array_key_exists("vehicles", $context) ? $context["vehicles"] : (function () { throw new RuntimeError('Variable "vehicles" does not exist.', 7, $this->source); })())]);
        echo "></div>

<div class=\"navigation d-flex justify-content-center\">
    ";
        // line 10
        echo $this->env->getRuntime('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationRuntime')->render($this->env, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 10, $this->source); })()));
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
        return "vehicle/index.html.twig";
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
        return array (  97 => 10,  90 => 7,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base_back_3.html.twig' %}

{% block title %}Vehicle index{% endblock %}

{% block body %}
    {# {{ dump (vehicles) }} #}
    <div {{ vue_component('VehiclesList_component', { 'vehicles': vehicles }) }}></div>

<div class=\"navigation d-flex justify-content-center\">
    {{ knp_pagination_render(pagination) }}
</div>
{% endblock %}


{#
{% block body %}
    <h1>Vehicle index</h1>

    <form method=\"get\" role=\"search\">
        <input type=\"search\" name=\"q\" placeholder=\"Search...\" aria-label=\"Search\">
        <button type=\"submit\">Search</button>
    </form>

    <table class=\"table\">
        <thead>
            <tr>
                <th>Id</th>
                <th>Plate</th>
                <th>ObservedDamages</th>
                <th>Kilometers</th>
                <th>BuyPrice</th>
                <th>SellPrice</th>
                <th>Fuel</th>
                <th>Iva</th>
                <th>Description</th>
                <th>ChassisNumber</th>
                <th>GearShit</th>
                <th>IsNew</th>
                <th>TransportIncluded</th>
                <th>Color</th>
                <th>RegistrationDate</th>
                <th>actions</th>
            </tr>
        </thead>
        <tbody>
        {% for vehicle in vehicles %}
            <tr>
                <td>{{ vehicle.id }}</td>
                <td>{{ vehicle.plate }}</td>
                <td>{{ vehicle.observedDamages }}</td>
                <td>{{ vehicle.kilometers }}</td>
                <td>{{ vehicle.buyPrice }}</td>
                <td>{{ vehicle.sellPrice }}</td>
                <td>{{ vehicle.fuel }}</td>
                <td>{{ vehicle.iva }}</td>
                <td>{{ vehicle.description }}</td>
                <td>{{ vehicle.chassisNumber }}</td>
                <td>{{ vehicle.gearShit }}</td>
                <td>{{ vehicle.isNew ? 'Yes' : 'No' }}</td>
                <td>{{ vehicle.transportIncluded ? 'Yes' : 'No' }}</td>
                <td>{{ vehicle.color }}</td>
                <td>{{ vehicle.registrationDate ? vehicle.registrationDate|date('Y-m-d') : '' }}</td>
                <td>
                    <a href=\"{{ path('app_vehicle_show', {'id': vehicle.id}) }}\">show</a>
                    <a href=\"{{ path('app_vehicle_edit', {'id': vehicle.id}) }}\">edit</a>
                </td>
            </tr>
        {% else %}
            <tr>
                <td colspan=\"16\">no records found</td>
            </tr>
        {% endfor %}
        </tbody>
    </table>

    <a href=\"{{ path('app_vehicle_new') }}\">Create new</a>
{% endblock %}
#}", "vehicle/index.html.twig", "/var/www/html/templates/vehicle/index.html.twig");
    }
}
