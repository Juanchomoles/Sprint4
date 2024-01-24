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

/* customer/index.html.twig */
class __TwigTemplate_9cd776e8c481d7f280cf4a253ca096cc extends Template
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
        return "base_back_1.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "customer/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "customer/index.html.twig"));

        $this->parent = $this->loadTemplate("base_back_1.html.twig", "customer/index.html.twig", 1);
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

        echo "Pàgina Index Customer!";
        
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
    <div ";
        // line 7
        echo $this->extensions['Symfony\UX\Vue\Twig\VueComponentExtension']->renderVueComponent("CustomerList_component", ["customers" => (isset($context["customers"]) || array_key_exists("customers", $context) ? $context["customers"] : (function () { throw new RuntimeError('Variable "customers" does not exist.', 7, $this->source); })())]);
        echo "></div>

    <div class=\"navigation d-flex justify-content-center\">
        ";
        // line 10
        echo $this->env->getRuntime('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationRuntime')->render($this->env, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 10, $this->source); })()));
        echo "
    </div

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "customer/index.html.twig";
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
        return array (  97 => 10,  91 => 7,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base_back_1.html.twig' %}

{% block title %}Pàgina Index Customer!{% endblock %}

{% block body %}

    <div {{ vue_component('CustomerList_component', { 'customers': customers }) }}></div>

    <div class=\"navigation d-flex justify-content-center\">
        {{ knp_pagination_render(pagination) }}
    </div

{% endblock %}







{#

{% block body %}
    <div {{ vue_component('CustomerList_component', { 'customers': customers }) }}></div>


    <h1>Customer index</h1>

    <form method=\"GET\" class=\"col-12 col-lg-auto my-3 mb-lg-0 me-lg-3\" role=\"search\">
        <div class=\"input-group\">
            <div class=\"form-outline\" data-mdb-input-init>
                <input type=\"search\" id=\"form1\" class=\"form-control\" placeholder=\"Search...\"/>
            </div>
            <button type=\"button\" class=\"btn btn-primary\" data-mdb-ripple-init>
                <i class=\"fas fa-search\"></i>
            </button>
        </div>
    </form>

    <div id=\"div-table\">
        <table class=\"table mt-3 contingut\">
            <thead>
            <tr>
                <th>Name</th>
                <th>Lastname</th>
                <th>Address</th>
                <th>Dni</th>
                <th>Phone</th>
                <th>Email</th>
                <th>Customer_type</th>
                <th>Operations</th>
            </tr>
            </thead>
            <tbody>
            {% for customer in customers %}
                <tr>
                    <td data-title=\"Name:\">{{ customer.name }}</td>
                    <td data-title=\"Lastname\">{{ customer.lastname }}</td>
                    <td data-title=\"Address\">{{ customer.address }}</td>
                    <td data-title=\"DNI\">{{ customer.dni }}</td>
                    <td data-title=\"Phone\">{{ customer.phone }}</td>
                    <td data-title=\"Email\">{{ customer.email }}</td>
                    <td data-title=\"Type\">{{ customer.type }}</td>
                    <td data-title=\"Operations\">
                        {% if customer.type == \"private\" %}
                            <a href=\"{{ path('app_private_customer_show', {'id': customer.id}) }}\"><button class=\"details-button\" data-invoice-id=\"3\"><i
                                            class=\"fas fa-eye\"></i></button></a>
                            <a href=\"{{ path('app_private_customer_edit', {'id': customer.id}) }}\"><button class=\"edit-button\" data-invoice-id=\"3\"><i
                                            class=\"fas fa-pencil-alt\"></i></button></a>
                        {% elseif customer.type == \"professional\" %}
                            <a href=\"{{ path('app_professional_show', {'id': customer.id}) }}\"><button class=\"details-button\" data-invoice-id=\"3\"><i
                                            class=\"fas fa-eye\"></i></button></a>
                            <a href=\"{{ path('app_professional_edit', {'id': customer.id}) }}\"><button class=\"edit-button\" data-invoice-id=\"3\"><i
                                            class=\"fas fa-pencil-alt\"></i></button></a>
                        {% endif %}
                    </td>
                </tr>
            {% else %}
                <tr>
                    <td colspan=\"8\">no records found</td>
                </tr>
            {% endfor %}
            </tbody>
        </table>
    </div>

    <div class=\"navigation d-flex justify-content-center\">
        {{ knp_pagination_render(customers) }}
    </div>



{% endblock %}

        #}", "customer/index.html.twig", "/var/www/html/templates/customer/index.html.twig");
    }
}
