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

/* base_back_3.html.twig */
class __TwigTemplate_a6887887e62cbadfb216a529b42b75fd extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base_back_3.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base_back_3.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">

<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <title>";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    <link rel=\"stylesheet\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("equip3/Normalize.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("equip3/grid.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("equip3/variables.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css\">
    ";
        // line 12
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 15
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("equip3/js/menu_aside.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("equip3/js/menu-burguer.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("equip3/js/modal.js"), "html", null, true);
        echo "\"></script>
</head>

<body>
<!-- Secció de capçalera -->
<header>
    <div class=\"container-fluid\">
        <div class=\"row\">
            <div class=\"col-12\">
                <!-- Secció de logotip i navegació -->
                <div class=\"logo\">
                    <!-- Enllaç del logotip -->
                    <a href=\"#logo\">
                        <!-- Imatge del logotip -->
                        <img src=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("equip3/img/logoBHEC.png"), "html", null, true);
        echo "\" class=\"img-logo-header\">
                    </a>
                    <!-- Navegació amb icona d'usuari -->
                    <nav class=\"grup-icones\">
                        <ul>
                            <li>
                                <!-- Enllaç de l'ícona d'usuari -->
                                <a href=\"#usuari\">
                                    <!-- Imatge de l'ícona d'usuari -->
                                    <img src=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("equip3/img/usuari-Groc.png"), "html", null, true);
        echo "\">
                                </a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</header>

<!-- Secció de contingut principal -->
<main>
    <div class=\"container-fluid\">
        <div class=\"row\">
            ";
        // line 55
        $this->loadTemplate("_aside_back.html.twig", "base_back_3.html.twig", 55)->display($context);
        // line 56
        echo "            <div class=\"col-10\">
                ";
        // line 57
        $this->displayBlock('body', $context, $blocks);
        // line 59
        echo "            </div>
        </div>
    </div>
</main>
<footer>
    <div class=\"container-fluid\">
        <div class=\"row\">
            <div class=\"col-12\">
                <div class=\"footerContent\">
                    <img src=\"";
        // line 68
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("equip3/img/logoBHEC.png"), "html", null, true);
        echo "\" alt=\"logoFooter\">
                    <h2>BHEC</h2>
                </div>
            </div>
        </div>
    </div>
</footer>
</body>

</html>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 7
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "BackOffice";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 12
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 13
        echo "        <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("equip3/squeleton-back.css"), "html", null, true);
        echo "\">
    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 57
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 58
        echo "                ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "base_back_3.html.twig";
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
        return array (  219 => 58,  209 => 57,  196 => 13,  186 => 12,  167 => 7,  147 => 68,  136 => 59,  134 => 57,  131 => 56,  129 => 55,  111 => 40,  99 => 31,  82 => 17,  78 => 16,  73 => 15,  71 => 12,  66 => 10,  62 => 9,  58 => 8,  54 => 7,  46 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">

<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <title>{% block title %}BackOffice{% endblock %}</title>
    <link rel=\"stylesheet\" href=\"{{ asset('equip3/Normalize.css') }}\">
    <link rel=\"stylesheet\" href=\"{{ asset('equip3/grid.css') }}\">
    <link rel=\"stylesheet\" href=\"{{ asset('equip3/variables.css') }}\">
    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css\">
    {% block stylesheets %}
        <link rel=\"stylesheet\" href=\"{{ asset('equip3/squeleton-back.css') }}\">
    {% endblock %}
    <script src=\"{{ asset('equip3/js/menu_aside.js') }}\"></script>
    <script src=\"{{ asset('equip3/js/menu-burguer.js') }}\"></script>
    <script src=\"{{ asset('equip3/js/modal.js') }}\"></script>
</head>

<body>
<!-- Secció de capçalera -->
<header>
    <div class=\"container-fluid\">
        <div class=\"row\">
            <div class=\"col-12\">
                <!-- Secció de logotip i navegació -->
                <div class=\"logo\">
                    <!-- Enllaç del logotip -->
                    <a href=\"#logo\">
                        <!-- Imatge del logotip -->
                        <img src=\"{{ asset('equip3/img/logoBHEC.png') }}\" class=\"img-logo-header\">
                    </a>
                    <!-- Navegació amb icona d'usuari -->
                    <nav class=\"grup-icones\">
                        <ul>
                            <li>
                                <!-- Enllaç de l'ícona d'usuari -->
                                <a href=\"#usuari\">
                                    <!-- Imatge de l'ícona d'usuari -->
                                    <img src=\"{{asset('equip3/img/usuari-Groc.png')}}\">
                                </a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</header>

<!-- Secció de contingut principal -->
<main>
    <div class=\"container-fluid\">
        <div class=\"row\">
            {% include '_aside_back.html.twig' %}
            <div class=\"col-10\">
                {% block body %}
                {% endblock %}
            </div>
        </div>
    </div>
</main>
<footer>
    <div class=\"container-fluid\">
        <div class=\"row\">
            <div class=\"col-12\">
                <div class=\"footerContent\">
                    <img src=\"{{asset('equip3/img/logoBHEC.png')}}\" alt=\"logoFooter\">
                    <h2>BHEC</h2>
                </div>
            </div>
        </div>
    </div>
</footer>
</body>

</html>", "base_back_3.html.twig", "/home/juan/Escritorio/2024-sprint-4/templates/base_back_3.html.twig");
    }
}
