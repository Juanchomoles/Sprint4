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

/* order/index.html.twig */
class __TwigTemplate_f0d77bd9bc012a781b42b24e414653d8 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "order/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "order/index.html.twig"));

        $this->parent = $this->loadTemplate("base_back_3.html.twig", "order/index.html.twig", 1);
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

        echo "Order index";
        
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
        echo "
    <h1>Order index</h1>

    <form method=\"GET\" class=\"col-12 col-lg-auto mb-3 mb-lg-0 me-lg-3 mb-lg-1\" role=\"search\">
        <input name=\"q\" type=\"search\" class=\"form-control form-control-light text-dark\" placeholder=\"Buscar...\" aria-label=\"Search\">
    </form>

    <div ";
        // line 13
        echo $this->extensions['Symfony\UX\Vue\Twig\VueComponentExtension']->renderVueComponent("OrderList_component", ["orders" => (isset($context["orders"]) || array_key_exists("orders", $context) ? $context["orders"] : (function () { throw new RuntimeError('Variable "orders" does not exist.', 13, $this->source); })())]);
        echo "></div>

    <div class=\"navigation pt-3\">
        ";
        // line 16
        echo $this->env->getRuntime('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationRuntime')->render($this->env, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 16, $this->source); })()));
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
        return "order/index.html.twig";
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
        return array (  103 => 16,  97 => 13,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base_back_3.html.twig' %}

{% block title %}Order index{% endblock %}

{% block body %}

    <h1>Order index</h1>

    <form method=\"GET\" class=\"col-12 col-lg-auto mb-3 mb-lg-0 me-lg-3 mb-lg-1\" role=\"search\">
        <input name=\"q\" type=\"search\" class=\"form-control form-control-light text-dark\" placeholder=\"Buscar...\" aria-label=\"Search\">
    </form>

    <div {{ vue_component('OrderList_component', { 'orders': orders }) }}></div>

    <div class=\"navigation pt-3\">
        {{ knp_pagination_render(pagination) }}
    </div>

{% endblock %}


{#
{% extends 'base_back_3.html.twig' %}

{% block title %}Order index{% endblock %}

{% block stylesheets %}
    {{ parent() }}
    <link rel=\"stylesheet\" href=\"{{ asset('equip3/css/Personal.css') }}\">
{% endblock %}

{% block body %}
<article class=\"col-10\">
    <section class=\"contingut col-10\">

        <h1>Order index</h1>

        <div id=\"div-table\">

            <table id=\"backoffice-table\">
                <thead>
                <tr>
                    <th>Customer Name</th>
                    <th>Vehicle Brand</th>
                    <th>Vehicle Model</th>
                    <th>Order State</th>
                    <th>Actions</th>
                </tr>
                </thead>
                <tbody>
                {% for order in orders %}
                    {% for vehicle in order.vehicles %}
                    <tr>
                        <td data-title=\"Customer Name:\">{{ order.customer.name }}</td>
                        <td data-title=\"Marca:\">{{ vehicle.model.brand.name }} </td>
                        <td data-title=\"Model:\">{{ vehicle.model.name }}</td>
                        <td data-title=\"Estat:\"> {{ order.state }} </td>
                        <td>
                            <a href=\"{{ path('app_order_show', {'id': order.id}) }}\">
                                <button class=\"details-button\"><i class=\"fas fa-eye\"></i></button>
                            </a>
                            <a href=\"{{ path('app_order_edit', {'id': order.id}) }}\">
                                <button class=\"edit-button\"><i class=\"fas fa-pencil-alt\"></i></button>
                            </a>
                            <a>
                                <button class=\"delete-button\"><i class=\"fas fa-trash\"></i></button>
                            </a>
                        </td>
                    </tr>
                {% else %}
                    <tr>
                        <td colspan=\"5\">no records found</td>
                    </tr>
                {% endfor %}
                {% endfor %}
                </tbody>
            </table>

            <div class=\"pt-3\">
            <a href=\"{{ path('app_order_new') }}\">
                <button>Create new</button>
            </a>
            </div>

            <div class=\"navigation pt-3\">
                {{ knp_pagination_render(orders) }}
            </div>
        </div>
    </section>
</article>

{% endblock %}
#}", "order/index.html.twig", "/var/www/html/templates/order/index.html.twig");
    }
}
