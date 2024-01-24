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

/* base_back_1.html.twig */
class __TwigTemplate_01466fd40cdc6768f282415eff5c0d41 extends Template
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
            'javascripts' => [$this, 'block_javascripts'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base_back_1.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base_back_1.html.twig"));

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

    ";
        // line 9
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 12
        echo "
    <link rel=\"stylesheet\" href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("equip1/css/Normalize.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("equip1/css/grid.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("equip1/css/variables.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css\">
    <link rel=\"stylesheet\" href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("equip1/css/backend-skeleton.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("equip1/css/taules.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("equip1/css/modal.css"), "html", null, true);
        echo "\">
    <script src=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("equip1/js/menu_aside.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("equip1/js/menu-burguer.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("equip1/js/modal.js"), "html", null, true);
        echo "\"></script>

    ";
        // line 24
        $this->displayBlock('javascripts', $context, $blocks);
        // line 28
        echo "</head>

<body>
<header>
    <div class=\"container-fluid\">
        <div class=\"row\">
            <div class=\"col-12\">
                <div class=\"logo\">
                    <a href=\"\">
                        <img src=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("equip1/img/logoBHEC.png"), "html", null, true);
        echo "\"
                             class=\"img-logo-header\" alt=\"logo\">
                    </a>
                    <nav class=\"grup-icones\">
                        <ul>
                            <li>
                                <a>
                                    <img src=\"";
        // line 44
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("equip1/img/usuari-Groc.png"), "html", null, true);
        echo "\" alt=\"usuari\" id=\"usuari\">
                                </a>
                            </li>
                        </ul>
                    </nav>
                    <nav id=\"menu-mobile\">
                        <div id=\"burger\" class=\"\">
                            <span class=\"line1\"></span>
                            <span class=\"line2\"></span>
                            <span class=\"line3\"></span>
                        </div>
                        <div class=\"ocultMenu\">
                            <nav id=\"main-menu\">
                                <ul>
                                    <li class=\"submenu\">
                                        <i class=\"fas fa-file-invoice\"></i>
                                        <a href=\"\"> Factures

                                        </a>
                                    </li>
                                    <li class=\"submenu\">
                                        <a>
                                            <i class=\"fas fa-users\"></i> Clients
                                            <i class=\"fas fa-chevron-right\"></i>
                                        </a>
                                        <ul class=\"submenu-content\">
                                            <li>
                                                <a href=\"\">
                                                    Alta de Client
                                                </a>
                                            </li>
                                            <li>
                                                <a href=\"\">
                                                    Visualitzar Clients
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class=\"submenu\">
                                        <a>
                                            <i class=\"fas fa-user-tie\"></i> Empleats
                                            <i class=\"fas fa-chevron-right\"></i>
                                        </a>
                                        <ul class=\"submenu-content\">
                                            <li>
                                                <a href=\"\">
                                                    Alta Administratius
                                                </a>
                                            </li>
                                            <li>
                                                <a href=\"\">
                                                    Alta Administradors
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class=\"submenu\">
                                        <a>
                                            <i class=\"fas fa-truck\"></i> Proveidors
                                            <i class=\"fas fa-chevron-right\"></i>
                                        </a>
                                        <ul class=\"submenu-content\">
                                            <li>
                                                <a href=\"\">
                                                    Alta Proveidor
                                                </a>
                                            </li>
                                            <li>
                                                <a href=\"\">
                                                    Visualitzar Proveidors
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class=\"submenu\">
                                        <a href=\"\">
                                            <i class=\"fas fa-shopping-cart\"></i> Comandes

                                        </a>
                                    </li>
                                    <li class=\"submenu\">
                                        <a>
                                            <i class=\"fas fa-car\"></i> Vehicles
                                            <i class=\"fas fa-chevron-right\"></i>
                                        </a>
                                        <ul class=\"submenu-content\">
                                            <li>
                                                <a href=\"\">
                                                    Alta Vehicle
                                                </a>
                                            </li>
                                            <li>
                                                <a href=\"\">
                                                    Visualitzar Vehicles
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</header>

<main>
    <div class=\"container-fluid\">
        <div class=\"row\">
            ";
        // line 155
        $this->loadTemplate("_aside_back_3.html.twig", "base_back_1.html.twig", 155)->display($context);
        // line 156
        echo "            <div class=\"col-10\">
                ";
        // line 157
        $this->displayBlock('body', $context, $blocks);
        // line 159
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
        // line 169
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("equip1/img/logoBHEC.png"), "html", null, true);
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

    // line 9
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 10
        echo "        ";
        echo $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackLinkTags("app");
        echo " <!-- BOOSTRAP -->
    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 24
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 25
        echo "        ";
        echo $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackScriptTags("app");
        echo "

    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 157
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 158
        echo "                ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "base_back_1.html.twig";
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
        return array (  355 => 158,  345 => 157,  331 => 25,  321 => 24,  308 => 10,  298 => 9,  279 => 7,  259 => 169,  247 => 159,  245 => 157,  242 => 156,  240 => 155,  126 => 44,  116 => 37,  105 => 28,  103 => 24,  98 => 22,  94 => 21,  90 => 20,  86 => 19,  82 => 18,  78 => 17,  73 => 15,  69 => 14,  65 => 13,  62 => 12,  60 => 9,  55 => 7,  47 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">

<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <title>{% block title %}BackOffice{% endblock %}</title>

    {% block stylesheets %}
        {{ encore_entry_link_tags('app') }} <!-- BOOSTRAP -->
    {% endblock %}

    <link rel=\"stylesheet\" href=\"{{ asset('equip1/css/Normalize.css') }}\">
    <link rel=\"stylesheet\" href=\"{{ asset('equip1/css/grid.css') }}\">
    <link rel=\"stylesheet\" href=\"{{ asset('equip1/css/variables.css') }}\">
    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css\">
    <link rel=\"stylesheet\" href=\"{{ asset('equip1/css/backend-skeleton.css') }}\">
    <link rel=\"stylesheet\" href=\"{{ asset('equip1/css/taules.css') }}\">
    <link rel=\"stylesheet\" href=\"{{ asset('equip1/css/modal.css') }}\">
    <script src=\"{{ asset('equip1/js/menu_aside.js') }}\"></script>
    <script src=\"{{ asset('equip1/js/menu-burguer.js') }}\"></script>
    <script src=\"{{ asset('equip1/js/modal.js') }}\"></script>

    {% block javascripts %}
        {{ encore_entry_script_tags('app') }}

    {% endblock %}
</head>

<body>
<header>
    <div class=\"container-fluid\">
        <div class=\"row\">
            <div class=\"col-12\">
                <div class=\"logo\">
                    <a href=\"\">
                        <img src=\"{{ asset('equip1/img/logoBHEC.png') }}\"
                             class=\"img-logo-header\" alt=\"logo\">
                    </a>
                    <nav class=\"grup-icones\">
                        <ul>
                            <li>
                                <a>
                                    <img src=\"{{ asset('equip1/img/usuari-Groc.png') }}\" alt=\"usuari\" id=\"usuari\">
                                </a>
                            </li>
                        </ul>
                    </nav>
                    <nav id=\"menu-mobile\">
                        <div id=\"burger\" class=\"\">
                            <span class=\"line1\"></span>
                            <span class=\"line2\"></span>
                            <span class=\"line3\"></span>
                        </div>
                        <div class=\"ocultMenu\">
                            <nav id=\"main-menu\">
                                <ul>
                                    <li class=\"submenu\">
                                        <i class=\"fas fa-file-invoice\"></i>
                                        <a href=\"\"> Factures

                                        </a>
                                    </li>
                                    <li class=\"submenu\">
                                        <a>
                                            <i class=\"fas fa-users\"></i> Clients
                                            <i class=\"fas fa-chevron-right\"></i>
                                        </a>
                                        <ul class=\"submenu-content\">
                                            <li>
                                                <a href=\"\">
                                                    Alta de Client
                                                </a>
                                            </li>
                                            <li>
                                                <a href=\"\">
                                                    Visualitzar Clients
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class=\"submenu\">
                                        <a>
                                            <i class=\"fas fa-user-tie\"></i> Empleats
                                            <i class=\"fas fa-chevron-right\"></i>
                                        </a>
                                        <ul class=\"submenu-content\">
                                            <li>
                                                <a href=\"\">
                                                    Alta Administratius
                                                </a>
                                            </li>
                                            <li>
                                                <a href=\"\">
                                                    Alta Administradors
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class=\"submenu\">
                                        <a>
                                            <i class=\"fas fa-truck\"></i> Proveidors
                                            <i class=\"fas fa-chevron-right\"></i>
                                        </a>
                                        <ul class=\"submenu-content\">
                                            <li>
                                                <a href=\"\">
                                                    Alta Proveidor
                                                </a>
                                            </li>
                                            <li>
                                                <a href=\"\">
                                                    Visualitzar Proveidors
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class=\"submenu\">
                                        <a href=\"\">
                                            <i class=\"fas fa-shopping-cart\"></i> Comandes

                                        </a>
                                    </li>
                                    <li class=\"submenu\">
                                        <a>
                                            <i class=\"fas fa-car\"></i> Vehicles
                                            <i class=\"fas fa-chevron-right\"></i>
                                        </a>
                                        <ul class=\"submenu-content\">
                                            <li>
                                                <a href=\"\">
                                                    Alta Vehicle
                                                </a>
                                            </li>
                                            <li>
                                                <a href=\"\">
                                                    Visualitzar Vehicles
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</header>

<main>
    <div class=\"container-fluid\">
        <div class=\"row\">
            {% include '_aside_back_3.html.twig' %}
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
                    <img src=\"{{ asset('equip1/img/logoBHEC.png') }}\" alt=\"logoFooter\">
                    <h2>BHEC</h2>
                </div>
            </div>
        </div>
    </div>
</footer>
</body>

</html>", "base_back_1.html.twig", "/var/www/html/templates/base_back_1.html.twig");
    }
}
