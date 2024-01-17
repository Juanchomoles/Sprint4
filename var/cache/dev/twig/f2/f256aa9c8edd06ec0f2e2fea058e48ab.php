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

/* invoice/index.html.twig */
class __TwigTemplate_7fb06e82ee1f2950b4ec856b0ebdb62e extends Template
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
        return "base_back_3.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "invoice/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "invoice/index.html.twig"));

        $this->parent = $this->loadTemplate("base_back_3.html.twig", "invoice/index.html.twig", 1);
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

        echo "Invoice index";
        
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
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("equip3/css/Personal.css"), "html", null, true);
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
        echo "
    <article class=\"col-10\">
        <section class=\"contingut col-10\">

            <h1>Lista de Facturas</h1>

            <div id=\"div-table\">
                <div class=\"table-searcher\">
                    <input type=\"text\" class=\"table-searcher-input\" placeholder=\"Buscar...\">
                    <button class=\"table-searcher-button\">
                        <i class=\"fas fa-search\"></i>
                    </button>
                </div>
                <table id=\"backoffice-table\">
                    <thead>
                    <tr>
                        <th>Id</th>
                        <th>Numero</th>
                        <th>Precio</th>
                        <th>Fecha</th>
                        <th>Operacions</th>
                    </tr>
                    </thead>
                    <tbody>
                    ";
        // line 33
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["invoices"]) || array_key_exists("invoices", $context) ? $context["invoices"] : (function () { throw new RuntimeError('Variable "invoices" does not exist.', 33, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["invoice"]) {
            // line 34
            echo "                    <tr>
                        <td data-title=\"Id:\">";
            // line 35
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["invoice"], "id", [], "any", false, false, false, 35), "html", null, true);
            echo "</td>
                        <td data-title=\"Numero:\">";
            // line 36
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["invoice"], "number", [], "any", false, false, false, 36), "html", null, true);
            echo "</td>
                        <td data-title=\"Precio:\">";
            // line 37
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["invoice"], "price", [], "any", false, false, false, 37), "html", null, true);
            echo "</td>
                        <td data-title=\"Fecha:\">";
            // line 38
            ((twig_get_attribute($this->env, $this->source, $context["invoice"], "date", [], "any", false, false, false, 38)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["invoice"], "date", [], "any", false, false, false, 38), "Y-m-d"), "html", null, true))) : (print ("")));
            echo "</td>
                        <td>
                            <a href=\"";
            // line 40
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_invoice_show", ["id" => twig_get_attribute($this->env, $this->source, $context["invoice"], "id", [], "any", false, false, false, 40)]), "html", null, true);
            echo "\">
                                <button class=\"details-button\"><i class=\"fas fa-eye\"></i></button>
                            </a>
                            <a href=\"";
            // line 43
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_invoice_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["invoice"], "id", [], "any", false, false, false, 43)]), "html", null, true);
            echo "\">
                                <button class=\"edit-button\" data-invoice-id=\"2\"><i class=\"fas fa-pencil-alt\"></i></button>
                            </a>
                            <a href=\"https://jovial-villani.217-160-209-39.plesk.page/comanda/borrar-comanda.html\"><button class=\"delete-button\" data-invoice-id=\"3\"><i
                                            class=\"fas fa-trash\"></i></button></a>
                        </td>
                    </tr>
                    ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 51
            echo "                        <tr>
                            <td colspan=\"5\">no records found</td>
                        </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['invoice'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 55
        echo "                    </tbody>
                </table>
            </div>
        </section>
    </article>

    <a href=\"";
        // line 61
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_invoice_new");
        echo "\">Create new</a>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "invoice/index.html.twig";
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
        return array (  199 => 61,  191 => 55,  182 => 51,  169 => 43,  163 => 40,  158 => 38,  154 => 37,  150 => 36,  146 => 35,  143 => 34,  138 => 33,  112 => 9,  102 => 8,  89 => 5,  79 => 4,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base_back_3.html.twig' %}

{% block title %}Invoice index{% endblock %}
{% block stylesheets %}
    <link rel=\"stylesheet\" href=\"{{ asset('equip3/css/Personal.css') }}\">
{% endblock %}

{% block body %}

    <article class=\"col-10\">
        <section class=\"contingut col-10\">

            <h1>Lista de Facturas</h1>

            <div id=\"div-table\">
                <div class=\"table-searcher\">
                    <input type=\"text\" class=\"table-searcher-input\" placeholder=\"Buscar...\">
                    <button class=\"table-searcher-button\">
                        <i class=\"fas fa-search\"></i>
                    </button>
                </div>
                <table id=\"backoffice-table\">
                    <thead>
                    <tr>
                        <th>Id</th>
                        <th>Numero</th>
                        <th>Precio</th>
                        <th>Fecha</th>
                        <th>Operacions</th>
                    </tr>
                    </thead>
                    <tbody>
                    {% for invoice in invoices %}
                    <tr>
                        <td data-title=\"Id:\">{{ invoice.id }}</td>
                        <td data-title=\"Numero:\">{{ invoice.number }}</td>
                        <td data-title=\"Precio:\">{{ invoice.price }}</td>
                        <td data-title=\"Fecha:\">{{ invoice.date ? invoice.date|date('Y-m-d') : '' }}</td>
                        <td>
                            <a href=\"{{ path('app_invoice_show', {'id': invoice.id}) }}\">
                                <button class=\"details-button\"><i class=\"fas fa-eye\"></i></button>
                            </a>
                            <a href=\"{{ path('app_invoice_edit', {'id': invoice.id}) }}\">
                                <button class=\"edit-button\" data-invoice-id=\"2\"><i class=\"fas fa-pencil-alt\"></i></button>
                            </a>
                            <a href=\"https://jovial-villani.217-160-209-39.plesk.page/comanda/borrar-comanda.html\"><button class=\"delete-button\" data-invoice-id=\"3\"><i
                                            class=\"fas fa-trash\"></i></button></a>
                        </td>
                    </tr>
                    {% else %}
                        <tr>
                            <td colspan=\"5\">no records found</td>
                        </tr>
                    {% endfor %}
                    </tbody>
                </table>
            </div>
        </section>
    </article>

    <a href=\"{{ path('app_invoice_new') }}\">Create new</a>
{% endblock %}
", "invoice/index.html.twig", "/var/www/html/templates/invoice/index.html.twig");
    }
}
