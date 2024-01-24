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

/* professional/show.html.twig */
class __TwigTemplate_e9c448b9acb9088cc5d15ab021ce610f extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "professional/show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "professional/show.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "professional/show.html.twig", 1);
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

        echo "Professional";
        
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
        echo "    <h1>Professional</h1>

    <table class=\"table\">
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 12
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["professional"]) || array_key_exists("professional", $context) ? $context["professional"] : (function () { throw new RuntimeError('Variable "professional" does not exist.', 12, $this->source); })()), "id", [], "any", false, false, false, 12), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Name</th>
                <td>";
        // line 16
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["professional"]) || array_key_exists("professional", $context) ? $context["professional"] : (function () { throw new RuntimeError('Variable "professional" does not exist.', 16, $this->source); })()), "name", [], "any", false, false, false, 16), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Lastname</th>
                <td>";
        // line 20
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["professional"]) || array_key_exists("professional", $context) ? $context["professional"] : (function () { throw new RuntimeError('Variable "professional" does not exist.', 20, $this->source); })()), "lastname", [], "any", false, false, false, 20), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Address</th>
                <td>";
        // line 24
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["professional"]) || array_key_exists("professional", $context) ? $context["professional"] : (function () { throw new RuntimeError('Variable "professional" does not exist.', 24, $this->source); })()), "address", [], "any", false, false, false, 24), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Dni</th>
                <td>";
        // line 28
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["professional"]) || array_key_exists("professional", $context) ? $context["professional"] : (function () { throw new RuntimeError('Variable "professional" does not exist.', 28, $this->source); })()), "dni", [], "any", false, false, false, 28), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Phone</th>
                <td>";
        // line 32
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["professional"]) || array_key_exists("professional", $context) ? $context["professional"] : (function () { throw new RuntimeError('Variable "professional" does not exist.', 32, $this->source); })()), "phone", [], "any", false, false, false, 32), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Email</th>
                <td>";
        // line 36
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["professional"]) || array_key_exists("professional", $context) ? $context["professional"] : (function () { throw new RuntimeError('Variable "professional" does not exist.', 36, $this->source); })()), "email", [], "any", false, false, false, 36), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Cif</th>
                <td>";
        // line 40
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["professional"]) || array_key_exists("professional", $context) ? $context["professional"] : (function () { throw new RuntimeError('Variable "professional" does not exist.', 40, $this->source); })()), "cif", [], "any", false, false, false, 40), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>ManagerNif</th>
                <td>";
        // line 44
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["professional"]) || array_key_exists("professional", $context) ? $context["professional"] : (function () { throw new RuntimeError('Variable "professional" does not exist.', 44, $this->source); })()), "managerNif", [], "any", false, false, false, 44), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>LOPDdoc</th>
                <td>";
        // line 48
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["professional"]) || array_key_exists("professional", $context) ? $context["professional"] : (function () { throw new RuntimeError('Variable "professional" does not exist.', 48, $this->source); })()), "LOPDdoc", [], "any", false, false, false, 48), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>BussinessName</th>
                <td>";
        // line 52
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["professional"]) || array_key_exists("professional", $context) ? $context["professional"] : (function () { throw new RuntimeError('Variable "professional" does not exist.', 52, $this->source); })()), "bussinessName", [], "any", false, false, false, 52), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>ConstitutionWriting</th>
                <td>";
        // line 56
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["professional"]) || array_key_exists("professional", $context) ? $context["professional"] : (function () { throw new RuntimeError('Variable "professional" does not exist.', 56, $this->source); })()), "constitutionWriting", [], "any", false, false, false, 56), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Subscription</th>
                <td>";
        // line 60
        echo ((twig_get_attribute($this->env, $this->source, (isset($context["professional"]) || array_key_exists("professional", $context) ? $context["professional"] : (function () { throw new RuntimeError('Variable "professional" does not exist.', 60, $this->source); })()), "subscription", [], "any", false, false, false, 60)) ? ("Yes") : ("No"));
        echo "</td>
            </tr>
        </tbody>
    </table>

    <a href=\"";
        // line 65
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_customer");
        echo "\">back to list</a>

    <a href=\"";
        // line 67
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_professional_edit", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["professional"]) || array_key_exists("professional", $context) ? $context["professional"] : (function () { throw new RuntimeError('Variable "professional" does not exist.', 67, $this->source); })()), "id", [], "any", false, false, false, 67)]), "html", null, true);
        echo "\">edit</a>

    ";
        // line 69
        echo twig_include($this->env, $context, "professional/_delete_form.html.twig");
        echo "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "professional/show.html.twig";
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
        return array (  198 => 69,  193 => 67,  188 => 65,  180 => 60,  173 => 56,  166 => 52,  159 => 48,  152 => 44,  145 => 40,  138 => 36,  131 => 32,  124 => 28,  117 => 24,  110 => 20,  103 => 16,  96 => 12,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Professional{% endblock %}

{% block body %}
    <h1>Professional</h1>

    <table class=\"table\">
        <tbody>
            <tr>
                <th>Id</th>
                <td>{{ professional.id }}</td>
            </tr>
            <tr>
                <th>Name</th>
                <td>{{ professional.name }}</td>
            </tr>
            <tr>
                <th>Lastname</th>
                <td>{{ professional.lastname }}</td>
            </tr>
            <tr>
                <th>Address</th>
                <td>{{ professional.address }}</td>
            </tr>
            <tr>
                <th>Dni</th>
                <td>{{ professional.dni }}</td>
            </tr>
            <tr>
                <th>Phone</th>
                <td>{{ professional.phone }}</td>
            </tr>
            <tr>
                <th>Email</th>
                <td>{{ professional.email }}</td>
            </tr>
            <tr>
                <th>Cif</th>
                <td>{{ professional.cif }}</td>
            </tr>
            <tr>
                <th>ManagerNif</th>
                <td>{{ professional.managerNif }}</td>
            </tr>
            <tr>
                <th>LOPDdoc</th>
                <td>{{ professional.LOPDdoc }}</td>
            </tr>
            <tr>
                <th>BussinessName</th>
                <td>{{ professional.bussinessName }}</td>
            </tr>
            <tr>
                <th>ConstitutionWriting</th>
                <td>{{ professional.constitutionWriting }}</td>
            </tr>
            <tr>
                <th>Subscription</th>
                <td>{{ professional.subscription ? 'Yes' : 'No' }}</td>
            </tr>
        </tbody>
    </table>

    <a href=\"{{ path('app_customer') }}\">back to list</a>

    <a href=\"{{ path('app_professional_edit', {'id': professional.id}) }}\">edit</a>

    {{ include('professional/_delete_form.html.twig') }}
{% endblock %}
", "professional/show.html.twig", "/var/www/html/templates/professional/show.html.twig");
    }
}
