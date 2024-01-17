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

/* garage/index.html.twig */
class __TwigTemplate_864ebeaee10f91b3b6f6dac7ac5e476d extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "garage/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "garage/index.html.twig"));

        $this->parent = $this->loadTemplate("base_3.html.twig", "garage/index.html.twig", 1);
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

        echo " Garage ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 4
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("equip3/css/garage.css"), "html", null, true);
        echo "\">
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 6
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo "    <h1>Garatge</h1>

    <div class=\"garage-container\">
        <div>
            ";
        // line 11
        $context["hasPendingOrder"] = false;
        // line 12
        echo "            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["vehicles"]) || array_key_exists("vehicles", $context) ? $context["vehicles"] : (function () { throw new RuntimeError('Variable "vehicles" does not exist.', 12, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["vehicle"]) {
            // line 13
            echo "                ";
            if (((twig_get_attribute($this->env, $this->source, $context["vehicle"], "vehicleOrder", [], "any", false, false, false, 13) != null) && (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["vehicle"], "vehicleOrder", [], "any", false, false, false, 13), "state", [], "any", false, false, false, 13) == "Pendent"))) {
                // line 14
                echo "                    ";
                $context["hasPendingOrder"] = true;
                // line 15
                echo "                ";
            }
            // line 16
            echo "            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['vehicle'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 17
        echo "
            ";
        // line 18
        if ((isset($context["hasPendingOrder"]) || array_key_exists("hasPendingOrder", $context) ? $context["hasPendingOrder"] : (function () { throw new RuntimeError('Variable "hasPendingOrder" does not exist.', 18, $this->source); })())) {
            // line 19
            echo "                <table>
                    <thead>
                    <tr>
                        <th>Model</th>
                        <th>Brand</th>
                        <th>Plate</th>
                        <th>Price</th>
                        <th></th>
                    </tr>
                    </thead>
                    <tbody>
                    ";
            // line 30
            $context["totalPrice"] = 0;
            // line 31
            echo "                    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["vehicles"]) || array_key_exists("vehicles", $context) ? $context["vehicles"] : (function () { throw new RuntimeError('Variable "vehicles" does not exist.', 31, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["vehicle"]) {
                // line 32
                echo "                        ";
                if (((twig_get_attribute($this->env, $this->source, $context["vehicle"], "vehicleOrder", [], "any", false, false, false, 32) != null) && (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["vehicle"], "vehicleOrder", [], "any", false, false, false, 32), "state", [], "any", false, false, false, 32) == "Pendent"))) {
                    // line 33
                    echo "                            ";
                    $context["totalPrice"] = ((isset($context["totalPrice"]) || array_key_exists("totalPrice", $context) ? $context["totalPrice"] : (function () { throw new RuntimeError('Variable "totalPrice" does not exist.', 33, $this->source); })()) + twig_get_attribute($this->env, $this->source, $context["vehicle"], "sellPrice", [], "any", false, false, false, 33));
                    // line 34
                    echo "                            <tr>
                                <td>";
                    // line 35
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["vehicle"], "model", [], "any", false, false, false, 35), "brand", [], "any", false, false, false, 35), "name", [], "any", false, false, false, 35), "html", null, true);
                    echo "</td>
                                <td>";
                    // line 36
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["vehicle"], "model", [], "any", false, false, false, 36), "name", [], "any", false, false, false, 36), "html", null, true);
                    echo "</td>
                                <td>";
                    // line 37
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["vehicle"], "plate", [], "any", false, false, false, 37), "html", null, true);
                    echo "</td>
                                <td>";
                    // line 38
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["vehicle"], "sellPrice", [], "any", false, false, false, 38), "html", null, true);
                    echo "</td>
                                <td><a class=\"remove-vehicle\" href=\"/remove/";
                    // line 39
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["vehicle"], "id", [], "any", false, false, false, 39), "html", null, true);
                    echo "\">Eliminar</a></td>
                            </tr>
                        ";
                }
                // line 42
                echo "                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['vehicle'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 43
            echo "                    <tr>
                        <td colspan=\"2\"></td>
                        <td>Total price:</td>
                        <td>";
            // line 46
            echo twig_escape_filter($this->env, (isset($context["totalPrice"]) || array_key_exists("totalPrice", $context) ? $context["totalPrice"] : (function () { throw new RuntimeError('Variable "totalPrice" does not exist.', 46, $this->source); })()), "html", null, true);
            echo "</td>
                    </tr>
                    </tbody>
                </table>
                <div class=\"buttons-container\">
                    <a class=\"cancel-order-button\" href=\"/cancel\">Cancel·lar</a>
                    <a class=\"close-order-button\" href=\"/close\">Tancar</a>
                </div>
            ";
        } else {
            // line 55
            echo "                <div class=\"no-order-message\">
                    <h3>No hi ha cap comanda pendent</h3>
                </div>
            ";
        }
        // line 59
        echo "        </div>
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
        return "garage/index.html.twig";
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
        return array (  225 => 59,  219 => 55,  207 => 46,  202 => 43,  196 => 42,  190 => 39,  186 => 38,  182 => 37,  178 => 36,  174 => 35,  171 => 34,  168 => 33,  165 => 32,  160 => 31,  158 => 30,  145 => 19,  143 => 18,  140 => 17,  134 => 16,  131 => 15,  128 => 14,  125 => 13,  120 => 12,  118 => 11,  112 => 7,  102 => 6,  89 => 4,  79 => 3,  60 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base_3.html.twig' %}
{% block title %} Garage {% endblock %}
{% block stylesheets %}
    <link rel=\"stylesheet\" href=\"{{ asset('equip3/css/garage.css') }}\">
{% endblock %}
{% block body %}
    <h1>Garatge</h1>

    <div class=\"garage-container\">
        <div>
            {% set hasPendingOrder = false %}
            {% for vehicle in vehicles %}
                {% if vehicle.vehicleOrder != null and vehicle.vehicleOrder.state == 'Pendent' %}
                    {% set hasPendingOrder = true %}
                {% endif %}
            {% endfor %}

            {% if hasPendingOrder %}
                <table>
                    <thead>
                    <tr>
                        <th>Model</th>
                        <th>Brand</th>
                        <th>Plate</th>
                        <th>Price</th>
                        <th></th>
                    </tr>
                    </thead>
                    <tbody>
                    {% set totalPrice = 0 %}
                    {% for vehicle in vehicles %}
                        {% if vehicle.vehicleOrder != null and vehicle.vehicleOrder.state == 'Pendent' %}
                            {% set totalPrice = totalPrice + vehicle.sellPrice %}
                            <tr>
                                <td>{{ vehicle.model.brand.name }}</td>
                                <td>{{ vehicle.model.name }}</td>
                                <td>{{ vehicle.plate }}</td>
                                <td>{{ vehicle.sellPrice }}</td>
                                <td><a class=\"remove-vehicle\" href=\"/remove/{{ vehicle.id }}\">Eliminar</a></td>
                            </tr>
                        {% endif %}
                    {% endfor %}
                    <tr>
                        <td colspan=\"2\"></td>
                        <td>Total price:</td>
                        <td>{{ totalPrice }}</td>
                    </tr>
                    </tbody>
                </table>
                <div class=\"buttons-container\">
                    <a class=\"cancel-order-button\" href=\"/cancel\">Cancel·lar</a>
                    <a class=\"close-order-button\" href=\"/close\">Tancar</a>
                </div>
            {% else %}
                <div class=\"no-order-message\">
                    <h3>No hi ha cap comanda pendent</h3>
                </div>
            {% endif %}
        </div>
    </div>
{% endblock %}", "garage/index.html.twig", "/var/www/html/templates/garage/index.html.twig");
    }
}
