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
class __TwigTemplate_880df1397ecf5c0074ecba68115c2013 extends Template
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

    ";
        // line 10
        echo "    ";
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 13
        echo "    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"https://cdn.datatables.net/1.11.6/css/jquery.dataTables.css\">
    <link rel=\"stylesheet\" href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("equip3/css/variables.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("equip3/css/modal.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("equip3/css/backend-skeleton.css"), "html", null, true);
        echo "\">

    ";
        // line 20
        echo "    <script src=\"https://code.jquery.com/jquery-3.6.0.min.js\" defer></script>
    <script src=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("equip3/js/menu-burguer.js"), "html", null, true);
        echo "\" defer></script>
    <script src=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("equip3/js/menu_aside.js"), "html", null, true);
        echo "\" defer></script>
    <script src=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("equip3/js/modal.js"), "html", null, true);
        echo "\" defer></script>



    ";
        // line 27
        $this->displayBlock('javascripts', $context, $blocks);
        // line 31
        echo "</head>

<body>
";
        // line 35
        $this->loadTemplate("_header_back_3.html.twig", "base_back_3.html.twig", 35)->display($context);
        // line 36
        echo "
";
        // line 38
        echo "<main>
    <div class=\"container-fluid\">
        <div class=\"row\">
            ";
        // line 41
        $this->loadTemplate("_aside_back_3.html.twig", "base_back_3.html.twig", 41)->display($context);
        echo " ";
        // line 42
        echo "            <article class=\"col-10\">
                ";
        // line 43
        $this->displayBlock('body', $context, $blocks);
        // line 45
        echo "            </article>
        </div>
    </div>
</main>


<div id=\"menu-modal\" class=\"menu-modal\">
    <div class=\"menu-content\">
        <a href=\"#\" class=\"close-button\" onclick=\"closeMenuModal()\">&times;</a>
        <div class=\"user-info\">
            <img src=\"";
        // line 55
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("equip3/img/usuari.png"), "html", null, true);
        echo "\" alt=\"Imagen de perfil\">
            <div class=\"user-details\">
                <h3>Tu Nombre</h3>
                <p>correo@example.com</p>
            </div>
        </div>
        <ul class=\"menu-links\">
            <ul class=\"dropdown\">
                <li><a href=\"";
        // line 63
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_front_office");
        echo "\">Entrar a Front</a></li>
                <li><a href=\"";
        // line 64
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("templates");
        echo "\">Entrar Backoffice</a></li>
                <li><a href=\"";
        // line 65
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_catalogue_index");
        echo "\">Catalogo(temporal)</a></li>
            </ul>
            <ul class=\"dropdown\">
                <li onclick=openAdmin()>Administració</li>
                <ul class=\"dropdown-content\" id=\"administration-menu\">
                    <li><a href=\"#\">Configuració del compter usuari</a></li>
                    <li><a href=\"#\">Configuració del compter administrador</a></li>
                    <li><a href=\"#\">Cookies</a></li>
                </ul>
            </ul>
        </ul>
    </div>
    <div id=\"banda-amb-logo\">
        <div id=\"rectangle-blau\">
            <p id=\"titol-rectangle\">BHEC</p>
            <div id=\"cercle-gris\">
                <img src=\"";
        // line 81
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("equip3/img/logoBHEC.png"), "html", null, true);
        echo "\" alt=\"Imagen del semicírculo\">
            </div>
        </div>
    </div>

    <div id=\"div-sessio\">
        <ul>
            <li id=\"tancar-sessio\"><a href=\"#\">Tancar Sessió</a></li>
        </ul>
    </div>
</div>

";
        // line 94
        $this->loadTemplate("_footer_back_3.html.twig", "base_back_3.html.twig", 94)->display($context);
        // line 95
        echo "
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

    // line 10
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 11
        echo "        ";
        echo $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackLinkTags("app");
        echo "
    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 27
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 28
        echo "        ";
        echo $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackScriptTags("app");
        echo " ";
        // line 29
        echo "        <script src=\"https://cdn.datatables.net/1.11.6/js/jquery.dataTables.min.js\" defer></script>
    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 43
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 44
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
        return array (  280 => 44,  270 => 43,  259 => 29,  255 => 28,  245 => 27,  232 => 11,  222 => 10,  203 => 7,  190 => 95,  188 => 94,  173 => 81,  154 => 65,  150 => 64,  146 => 63,  135 => 55,  123 => 45,  121 => 43,  118 => 42,  115 => 41,  110 => 38,  107 => 36,  105 => 35,  100 => 31,  98 => 27,  91 => 23,  87 => 22,  83 => 21,  80 => 20,  75 => 17,  71 => 16,  67 => 15,  63 => 13,  60 => 10,  55 => 7,  47 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">

<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <title>{% block title %}BackOffice{% endblock %}</title>

    {# <--- Estilos ---> #}
    {% block stylesheets %}
        {{ encore_entry_link_tags('app') }}
    {% endblock %}
    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"https://cdn.datatables.net/1.11.6/css/jquery.dataTables.css\">
    <link rel=\"stylesheet\" href=\"{{ asset('equip3/css/variables.css') }}\">
    <link rel=\"stylesheet\" href=\"{{ asset('equip3/css/modal.css') }}\">
    <link rel=\"stylesheet\" href=\"{{ asset('equip3/css/backend-skeleton.css') }}\">

    {# <--- Scripts ---> #}
    <script src=\"https://code.jquery.com/jquery-3.6.0.min.js\" defer></script>
    <script src=\"{{ asset('equip3/js/menu-burguer.js') }}\" defer></script>
    <script src=\"{{ asset('equip3/js/menu_aside.js') }}\" defer></script>
    <script src=\"{{ asset('equip3/js/modal.js') }}\" defer></script>



    {% block javascripts %}
        {{ encore_entry_script_tags('app') }} {# Carga todos los componentes de VUE #}
        <script src=\"https://cdn.datatables.net/1.11.6/js/jquery.dataTables.min.js\" defer></script>
    {% endblock %}
</head>

<body>
{# Header #}
{% include '_header_back_3.html.twig' %}

{# Secció de contingut principal #}
<main>
    <div class=\"container-fluid\">
        <div class=\"row\">
            {% include '_aside_back_3.html.twig' %} {# Aside de Back #}
            <article class=\"col-10\">
                {% block body %}
                {% endblock %}
            </article>
        </div>
    </div>
</main>


<div id=\"menu-modal\" class=\"menu-modal\">
    <div class=\"menu-content\">
        <a href=\"#\" class=\"close-button\" onclick=\"closeMenuModal()\">&times;</a>
        <div class=\"user-info\">
            <img src=\"{{ asset('equip3/img/usuari.png') }}\" alt=\"Imagen de perfil\">
            <div class=\"user-details\">
                <h3>Tu Nombre</h3>
                <p>correo@example.com</p>
            </div>
        </div>
        <ul class=\"menu-links\">
            <ul class=\"dropdown\">
                <li><a href=\"{{ path('app_front_office') }}\">Entrar a Front</a></li>
                <li><a href=\"{{ path('templates') }}\">Entrar Backoffice</a></li>
                <li><a href=\"{{ path('app_catalogue_index') }}\">Catalogo(temporal)</a></li>
            </ul>
            <ul class=\"dropdown\">
                <li onclick=openAdmin()>Administració</li>
                <ul class=\"dropdown-content\" id=\"administration-menu\">
                    <li><a href=\"#\">Configuració del compter usuari</a></li>
                    <li><a href=\"#\">Configuració del compter administrador</a></li>
                    <li><a href=\"#\">Cookies</a></li>
                </ul>
            </ul>
        </ul>
    </div>
    <div id=\"banda-amb-logo\">
        <div id=\"rectangle-blau\">
            <p id=\"titol-rectangle\">BHEC</p>
            <div id=\"cercle-gris\">
                <img src=\"{{ asset('equip3/img/logoBHEC.png') }}\" alt=\"Imagen del semicírculo\">
            </div>
        </div>
    </div>

    <div id=\"div-sessio\">
        <ul>
            <li id=\"tancar-sessio\"><a href=\"#\">Tancar Sessió</a></li>
        </ul>
    </div>
</div>

{# Footer #}
{% include '_footer_back_3.html.twig' %}

</body>

</html>", "base_back_3.html.twig", "/var/www/html/templates/base_back_3.html.twig");
    }
}
