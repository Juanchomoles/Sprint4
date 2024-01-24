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

/* front_office/index_front.html.twig */
class __TwigTemplate_1bc083ccb69b70f88cbd20742bc338d1 extends Template
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
        return "base_3.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front_office/index_front.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front_office/index_front.html.twig"));

        $this->parent = $this->loadTemplate("base_3.html.twig", "front_office/index_front.html.twig", 1);
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

        echo "FrontOffice";
        
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
        echo "    <div class=\"container mt-4 mb-4\">
        <h1 class=\"display-4 text-center\">Benvingut a BHEC</h1>

        <div class=\"row\">
            <div class=\"col-md-6\">
                <ul class=\"list-group\">
                    <li class=\"list-group-item\">
                        <a href=\"#\" class=\"btn btn-dark btn-block w-100\">
                            <img src=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/equip3/img/logos/ferrari.png"), "html", null, true);
        echo "\" alt=\"Ferrari\">
                        </a>
                    </li>
                    <li class=\"list-group-item\">
                        <a href=\"#\" class=\"btn btn-light btn-block w-100\">
                            <img src=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/equip3/img/logos/bugatti.png"), "html", null, true);
        echo "\" alt=\"Bugatti\">
                        </a>
                    </li>
                    <li class=\"list-group-item\">
                        <a href=\"#\" class=\"btn btn-light btn-block text-dark w-100\">
                            <img src=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/equip3/img/logos/peugeot.png"), "html", null, true);
        echo "\" alt=\"Peugeot\">
                        </a>
                    </li>
                    <li class=\"list-group-item\">
                        <a href=\"#\" class=\"btn btn-light btn-block text-dark w-100\">
                            <img src=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/equip3/img/logos/eagle.png"), "html", null, true);
        echo "\" alt=\"Eagle\">
                        </a>
                    </li>
                    <li class=\"list-group-item\">
                        <a href=\"#\" class=\"btn btn-light btn-block text-dark w-100\">
                            <img src=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/equip3/img/logos/barkas.png"), "html", null, true);
        echo "\" alt=\"Barkas\">
                        </a>
                    </li>
                    <li class=\"list-group-item\">
                        <a href=\"#\" class=\"btn btn-light btn-block text-dark w-100\">
                            <img src=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/equip3/img/logos/samson.png"), "html", null, true);
        echo "\" alt=\"Samson\">
                        </a>
                    </li>
                    <li class=\"list-group-item\">
                        <a href=\"#\" class=\"btn btn-light btn-block text-dark w-100\">
                            <img src=\"";
        // line 44
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/equip3/img/logos/bertone.png"), "html", null, true);
        echo "\" alt=\"Bertone\">
                        </a>
                    </li>
                    <li class=\"list-group-item\">
                        <a href=\"#\" class=\"btn btn-light btn-block text-dark w-100\">
                            <img src=\"";
        // line 49
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/equip3/img/logos/geo.png"), "html", null, true);
        echo "\" alt=\"Geo\">
                        </a>
                    </li>
                    <li class=\"list-group-item\">
                        <a href=\"#\" class=\"btn btn-light btn-block text-dark w-100\">
                            <img src=\"";
        // line 54
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/equip3/img/logos/lancia.png"), "html", null, true);
        echo "\" alt=\"Lancia\">
                        </a>
                    </li>
                    <li class=\"list-group-item\">
                        <a href=\"#\" class=\"btn btn-light btn-block text-dark w-100\">
                            <img src=\"";
        // line 59
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/equip3/img/logos/mitsubishi.png"), "html", null, true);
        echo "\" alt=\"Mitsubishi\">
                        </a>
                    </li>
                    <li class=\"list-group-item\">
                        <a href=\"#\" class=\"btn btn-light btn-block text-dark w-100\">
                            <img src=\"";
        // line 64
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/equip3/img/logos/mazda.png"), "html", null, true);
        echo "\" alt=\"Mazda\">
                        </a>
                    </li>
                </ul>
            </div>
            <div class=\"col-md-6\">
                <ul class=\"list-group\">
                    <li class=\"list-group-item\">
                        <a href=\"#\" class=\"btn btn-light btn-block text-dark w-100\">
                            <img src=\"";
        // line 73
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/equip3/img/logos/gmc.png"), "html", null, true);
        echo "\" alt=\"GMC\">
                        </a>
                    </li>
                    <li class=\"list-group-item\">
                        <a href=\"#\" class=\"btn btn-light btn-block text-dark w-100\">
                            <img src=\"";
        // line 78
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/equip3/img/logos/triumph.png"), "html", null, true);
        echo "\" alt=\"Triumph\">
                        </a>
                    </li>
                    <li class=\"list-group-item\">
                        <a href=\"#\" class=\"btn btn-light btn-block text-dark w-100\">
                            <img src=\"";
        // line 83
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/equip3/img/logos/wuling.png"), "html", null, true);
        echo "\" alt=\"Wuling\">
                        </a>
                    </li>
                    <li class=\"list-group-item\">
                        <a href=\"#\" class=\"btn btn-light btn-block text-dark w-100\">
                            <img src=\"";
        // line 88
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/equip3/img/logos/proton.png"), "html", null, true);
        echo "\" alt=\"Proton\">
                        </a>
                    </li>
                    <li class=\"list-group-item\">
                        <a href=\"#\" class=\"btn btn-light btn-block text-dark w-100\">
                            <img src=\"";
        // line 93
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/equip3/img/logos/zimmer.png"), "html", null, true);
        echo "\" alt=\"Zimmer\">
                        </a>
                    </li>
                    <li class=\"list-group-item\">
                        <a href=\"#\" class=\"btn btn-light btn-block text-dark w-100\">
                            <img src=\"";
        // line 98
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/equip3/img/logos/bristol.png"), "html", null, true);
        echo "\" alt=\"Bristol\">
                        </a>
                    </li>
                    <li class=\"list-group-item\">
                        <a href=\"#\" class=\"btn btn-light btn-block text-dark w-100\">
                            <img src=\"";
        // line 103
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/equip3/img/logos/infinity.png"), "html", null, true);
        echo "\" alt=\"Infinity\">
                        </a>
                    </li>
                    <li class=\"list-group-item\">
                        <a href=\"#\" class=\"btn btn-light btn-block text-dark w-100\">
                            <img src=\"";
        // line 108
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/equip3/img/logos/morris.png"), "html", null, true);
        echo "\" alt=\"Morris\">
                        </a>
                    </li>
                    <li class=\"list-group-item\">
                        <a href=\"#\" class=\"btn btn-light btn-block text-dark w-100\">
                            <img src=\"";
        // line 113
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/equip3/img/logos/tata.png"), "html", null, true);
        echo "\" alt=\"TATA\">
                        </a>
                    </li>
                    <li class=\"list-group-item\">
                        <a href=\"#\" class=\"btn btn-light btn-block text-dark w-100\">
                            <img src=\"";
        // line 118
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/equip3/img/logos/volkswagen.png"), "html", null, true);
        echo "\" alt=\"Volkswagen\">
                        </a>
                    </li>
                    <li class=\"list-group-item\">
                        <a href=\"#\" class=\"btn btn-light btn-block text-dark w-100\">
                            <img src=\"";
        // line 123
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/equip3/img/logos/mahindra.png"), "html", null, true);
        echo "\" alt=\"Mahindra\">
                        </a>
                    </li>
                </ul>
            </div>
        </div>
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
        return "front_office/index_front.html.twig";
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
        return array (  270 => 123,  262 => 118,  254 => 113,  246 => 108,  238 => 103,  230 => 98,  222 => 93,  214 => 88,  206 => 83,  198 => 78,  190 => 73,  178 => 64,  170 => 59,  162 => 54,  154 => 49,  146 => 44,  138 => 39,  130 => 34,  122 => 29,  114 => 24,  106 => 19,  98 => 14,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base_3.html.twig' %}

{% block title %}FrontOffice{% endblock %}

{% block body %}
    <div class=\"container mt-4 mb-4\">
        <h1 class=\"display-4 text-center\">Benvingut a BHEC</h1>

        <div class=\"row\">
            <div class=\"col-md-6\">
                <ul class=\"list-group\">
                    <li class=\"list-group-item\">
                        <a href=\"#\" class=\"btn btn-dark btn-block w-100\">
                            <img src=\"{{ asset('/equip3/img/logos/ferrari.png') }}\" alt=\"Ferrari\">
                        </a>
                    </li>
                    <li class=\"list-group-item\">
                        <a href=\"#\" class=\"btn btn-light btn-block w-100\">
                            <img src=\"{{ asset('/equip3/img/logos/bugatti.png') }}\" alt=\"Bugatti\">
                        </a>
                    </li>
                    <li class=\"list-group-item\">
                        <a href=\"#\" class=\"btn btn-light btn-block text-dark w-100\">
                            <img src=\"{{ asset('/equip3/img/logos/peugeot.png') }}\" alt=\"Peugeot\">
                        </a>
                    </li>
                    <li class=\"list-group-item\">
                        <a href=\"#\" class=\"btn btn-light btn-block text-dark w-100\">
                            <img src=\"{{ asset('/equip3/img/logos/eagle.png') }}\" alt=\"Eagle\">
                        </a>
                    </li>
                    <li class=\"list-group-item\">
                        <a href=\"#\" class=\"btn btn-light btn-block text-dark w-100\">
                            <img src=\"{{ asset('/equip3/img/logos/barkas.png') }}\" alt=\"Barkas\">
                        </a>
                    </li>
                    <li class=\"list-group-item\">
                        <a href=\"#\" class=\"btn btn-light btn-block text-dark w-100\">
                            <img src=\"{{ asset('/equip3/img/logos/samson.png') }}\" alt=\"Samson\">
                        </a>
                    </li>
                    <li class=\"list-group-item\">
                        <a href=\"#\" class=\"btn btn-light btn-block text-dark w-100\">
                            <img src=\"{{ asset('/equip3/img/logos/bertone.png') }}\" alt=\"Bertone\">
                        </a>
                    </li>
                    <li class=\"list-group-item\">
                        <a href=\"#\" class=\"btn btn-light btn-block text-dark w-100\">
                            <img src=\"{{ asset('/equip3/img/logos/geo.png') }}\" alt=\"Geo\">
                        </a>
                    </li>
                    <li class=\"list-group-item\">
                        <a href=\"#\" class=\"btn btn-light btn-block text-dark w-100\">
                            <img src=\"{{ asset('/equip3/img/logos/lancia.png') }}\" alt=\"Lancia\">
                        </a>
                    </li>
                    <li class=\"list-group-item\">
                        <a href=\"#\" class=\"btn btn-light btn-block text-dark w-100\">
                            <img src=\"{{ asset('/equip3/img/logos/mitsubishi.png') }}\" alt=\"Mitsubishi\">
                        </a>
                    </li>
                    <li class=\"list-group-item\">
                        <a href=\"#\" class=\"btn btn-light btn-block text-dark w-100\">
                            <img src=\"{{ asset('/equip3/img/logos/mazda.png') }}\" alt=\"Mazda\">
                        </a>
                    </li>
                </ul>
            </div>
            <div class=\"col-md-6\">
                <ul class=\"list-group\">
                    <li class=\"list-group-item\">
                        <a href=\"#\" class=\"btn btn-light btn-block text-dark w-100\">
                            <img src=\"{{ asset('/equip3/img/logos/gmc.png') }}\" alt=\"GMC\">
                        </a>
                    </li>
                    <li class=\"list-group-item\">
                        <a href=\"#\" class=\"btn btn-light btn-block text-dark w-100\">
                            <img src=\"{{ asset('/equip3/img/logos/triumph.png') }}\" alt=\"Triumph\">
                        </a>
                    </li>
                    <li class=\"list-group-item\">
                        <a href=\"#\" class=\"btn btn-light btn-block text-dark w-100\">
                            <img src=\"{{ asset('/equip3/img/logos/wuling.png') }}\" alt=\"Wuling\">
                        </a>
                    </li>
                    <li class=\"list-group-item\">
                        <a href=\"#\" class=\"btn btn-light btn-block text-dark w-100\">
                            <img src=\"{{ asset('/equip3/img/logos/proton.png') }}\" alt=\"Proton\">
                        </a>
                    </li>
                    <li class=\"list-group-item\">
                        <a href=\"#\" class=\"btn btn-light btn-block text-dark w-100\">
                            <img src=\"{{ asset('/equip3/img/logos/zimmer.png') }}\" alt=\"Zimmer\">
                        </a>
                    </li>
                    <li class=\"list-group-item\">
                        <a href=\"#\" class=\"btn btn-light btn-block text-dark w-100\">
                            <img src=\"{{ asset('/equip3/img/logos/bristol.png') }}\" alt=\"Bristol\">
                        </a>
                    </li>
                    <li class=\"list-group-item\">
                        <a href=\"#\" class=\"btn btn-light btn-block text-dark w-100\">
                            <img src=\"{{ asset('/equip3/img/logos/infinity.png') }}\" alt=\"Infinity\">
                        </a>
                    </li>
                    <li class=\"list-group-item\">
                        <a href=\"#\" class=\"btn btn-light btn-block text-dark w-100\">
                            <img src=\"{{ asset('/equip3/img/logos/morris.png') }}\" alt=\"Morris\">
                        </a>
                    </li>
                    <li class=\"list-group-item\">
                        <a href=\"#\" class=\"btn btn-light btn-block text-dark w-100\">
                            <img src=\"{{ asset('/equip3/img/logos/tata.png') }}\" alt=\"TATA\">
                        </a>
                    </li>
                    <li class=\"list-group-item\">
                        <a href=\"#\" class=\"btn btn-light btn-block text-dark w-100\">
                            <img src=\"{{ asset('/equip3/img/logos/volkswagen.png') }}\" alt=\"Volkswagen\">
                        </a>
                    </li>
                    <li class=\"list-group-item\">
                        <a href=\"#\" class=\"btn btn-light btn-block text-dark w-100\">
                            <img src=\"{{ asset('/equip3/img/logos/mahindra.png') }}\" alt=\"Mahindra\">
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
{% endblock %}", "front_office/index_front.html.twig", "/var/www/html/templates/front_office/index_front.html.twig");
    }
}
