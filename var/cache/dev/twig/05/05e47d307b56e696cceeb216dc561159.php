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

/* base_3.html.twig */
class __TwigTemplate_b62018e12307b7fccbff68608e33c9ec extends Template
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
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base_3.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base_3.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"es\">
<head>
    <meta charset=\"UTF-8\">
    <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css\">
    <link  href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("equip3/Normalize.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link  href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("equip3/grid.css"), "html", null, true);
        echo " \" rel=\"stylesheet\">
    <link  href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("equip3/variables.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link  href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("equip3/squeleton-frontend.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <script src=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("equip3/burger.js"), "html", null, true);
        echo "\" defer ></script>
    <script src=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("equip3/searchBar.js"), "html", null, true);
        echo "\" defer ></script>

</head>
<body>
<header class=\"container-fluid\">
    <div class=\"row div-header\">
        <div class=\"col-12\">
            <nav class=\"first-nav\">
                <img src=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("equip3/img/logoBHEC.png"), "html", null, true);
        echo "\" alt=\"logo BEHC\" width=\"50px\"/>
                <ul class=\"hidden\">
                    <li>
                        <a href=\"/catalogue_list.php\">Catàleg</a>
                    </li>
                    <li>
                        <a href=\"#\">Contacte</a>
                    </li>
                </ul>
            </nav>

            <div class=\"searcher-header hidden\">
                <div>
                    <input type=\"text\" class=\"input-searcher-header\" placeholder=\"Buscar...\">
                    <button class=\"button-searcher-header\"><i class=\"fas fa-search\"></i></button>
                </div>
            </div>

            <nav class=\"header-icons\">
                <ul>
                    <li class=\"hidden-desktop\">
                        <a href=\"#\">
                            <img src=\"";
        // line 42
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("equip3/img/busqueda-Groc.png"), "html", null, true);
        echo "\" alt=\"Imatge Lupa\" id=\"busqueda\">
                        </a>
                    </li>
                    <li class=\"hidden\">
                        <a href=\"#\">
                            <img src=\"";
        // line 47
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("equip3/img/notificacio-Groc.png"), "html", null, true);
        echo "\" alt=\"Imatge Notificació\" id=\"notificacio\">
                        </a>
                    </li>
                    <li class=\"hidden\">
                        <a href=\"#\">
                            <img src=\"";
        // line 52
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("equip3/img/llistaDeDesitjos-Groc.png"), "html", null, true);
        echo "\" alt=\"Imatge Llista De Dessitjos\"
                                 id=\"desitjos\"/>
                        </a>
                    </li>
                    <li>
                        <a href=\"/garage_list.php\">
                            <img src=\"";
        // line 58
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("equip3/img/garatge-Groc.png"), "html", null, true);
        echo "\" alt=\"Imatge Garatge\" id=\"garatge\">
                        </a>
                    </li>
                    <li>
                        <a>
                            <img src=\"";
        // line 63
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("equip3/img/usuari-Groc.png"), "html", null, true);
        echo "\" alt=\"Imatge Usuari\" id=\"usuari\">
                        </a>
                    </li>
                    <li>
                        <nav id=\"menu-mobile\">
                            <div id=\"burger\">
                                <span class=\"line1\"></span>
                                <span class=\"line2\"></span>
                                <span class=\"line3\"></span>
                            </div>
                            <div class=\"ocultMenu\">
                                <nav id=\"main-menu\">
                                    <ul>
                                        <li>
                                            <a href=\"/catalogue_list.php\">
                                                Catàleg
                                            </a>
                                        </li>
                                        <li>
                                            <a href=\"/contacte.html\">
                                                Contacte
                                            </a>
                                        </li>
                                        <li>
                                            <a href=\"/contacte.html\">
                                                Notificacions
                                            </a>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                        </nav>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
</header>
<!-- L'estrctura que segueix és la mateixa que deuríen seguir tots, el grid. Un container conté rows i cada row conté columns.
    Jo recomane crear un div dins del column ja que et permetrà controlar el contingut sense alterar els estils del grid  -->
";
        // line 103
        $this->displayBlock('body', $context, $blocks);
        // line 105
        echo "<!-- Container-fluid ocupa el 100% de l'amplaria de la pàgina -->
<footer class=\"container-fluid\">
    <div class=\"row\">
        <div class=\"col-12\">
            <!-- Div per controlar tot el contingut sense aplicar classes i id's a column -->
            <div class=\"self-container\">
                <!-- Div per estructurar el logo i el nom de l'empresa -->
                <div class=\"nom-logo\">
                    <img src=\"";
        // line 113
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("equip3/img/logoBHEC.png"), "html", null, true);
        echo "\" alt=\"Logotip Empresa\" width=\"50px\">
                    <h3>BHEC</h3>
                </div>
                <!-- Línia separadora -->
                <hr class=\"separator\"/>

                <!-- Llista amb els enllaços corresponents -->
                <ul class=\"footer-menu\">
                    <li>
                        <a href=\"#\">FAQ</a>
                    </li>
                    <li>
                        <a href=\"#\">Terminis i Condicions</a>
                    </li>
                    <li>
                        <a href=\"#\">Política de Privacitat</a>
                    </li>
                </ul>

            </div>
        </div>
    </div>
</footer>
</body>
</html>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 5
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Front Office";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 103
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "base_3.html.twig";
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
        return array (  255 => 103,  236 => 5,  200 => 113,  190 => 105,  188 => 103,  145 => 63,  137 => 58,  128 => 52,  120 => 47,  112 => 42,  87 => 20,  76 => 12,  72 => 11,  68 => 10,  64 => 9,  60 => 8,  56 => 7,  51 => 5,  45 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"es\">
<head>
    <meta charset=\"UTF-8\">
    <title>{% block title %}Front Office{% endblock %}</title>
    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css\">
    <link  href=\"{{ asset('equip3/Normalize.css') }}\" rel=\"stylesheet\">
    <link  href=\"{{ asset('equip3/grid.css') }} \" rel=\"stylesheet\">
    <link  href=\"{{ asset('equip3/variables.css') }}\" rel=\"stylesheet\">
    <link  href=\"{{ asset('equip3/squeleton-frontend.css') }}\" rel=\"stylesheet\">
    <script src=\"{{ asset('equip3/burger.js') }}\" defer ></script>
    <script src=\"{{ asset('equip3/searchBar.js') }}\" defer ></script>

</head>
<body>
<header class=\"container-fluid\">
    <div class=\"row div-header\">
        <div class=\"col-12\">
            <nav class=\"first-nav\">
                <img src=\"{{ asset('equip3/img/logoBHEC.png') }}\" alt=\"logo BEHC\" width=\"50px\"/>
                <ul class=\"hidden\">
                    <li>
                        <a href=\"/catalogue_list.php\">Catàleg</a>
                    </li>
                    <li>
                        <a href=\"#\">Contacte</a>
                    </li>
                </ul>
            </nav>

            <div class=\"searcher-header hidden\">
                <div>
                    <input type=\"text\" class=\"input-searcher-header\" placeholder=\"Buscar...\">
                    <button class=\"button-searcher-header\"><i class=\"fas fa-search\"></i></button>
                </div>
            </div>

            <nav class=\"header-icons\">
                <ul>
                    <li class=\"hidden-desktop\">
                        <a href=\"#\">
                            <img src=\"{{ asset('equip3/img/busqueda-Groc.png') }}\" alt=\"Imatge Lupa\" id=\"busqueda\">
                        </a>
                    </li>
                    <li class=\"hidden\">
                        <a href=\"#\">
                            <img src=\"{{ asset('equip3/img/notificacio-Groc.png') }}\" alt=\"Imatge Notificació\" id=\"notificacio\">
                        </a>
                    </li>
                    <li class=\"hidden\">
                        <a href=\"#\">
                            <img src=\"{{ asset('equip3/img/llistaDeDesitjos-Groc.png') }}\" alt=\"Imatge Llista De Dessitjos\"
                                 id=\"desitjos\"/>
                        </a>
                    </li>
                    <li>
                        <a href=\"/garage_list.php\">
                            <img src=\"{{ asset('equip3/img/garatge-Groc.png') }}\" alt=\"Imatge Garatge\" id=\"garatge\">
                        </a>
                    </li>
                    <li>
                        <a>
                            <img src=\"{{ asset('equip3/img/usuari-Groc.png') }}\" alt=\"Imatge Usuari\" id=\"usuari\">
                        </a>
                    </li>
                    <li>
                        <nav id=\"menu-mobile\">
                            <div id=\"burger\">
                                <span class=\"line1\"></span>
                                <span class=\"line2\"></span>
                                <span class=\"line3\"></span>
                            </div>
                            <div class=\"ocultMenu\">
                                <nav id=\"main-menu\">
                                    <ul>
                                        <li>
                                            <a href=\"/catalogue_list.php\">
                                                Catàleg
                                            </a>
                                        </li>
                                        <li>
                                            <a href=\"/contacte.html\">
                                                Contacte
                                            </a>
                                        </li>
                                        <li>
                                            <a href=\"/contacte.html\">
                                                Notificacions
                                            </a>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                        </nav>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
</header>
<!-- L'estrctura que segueix és la mateixa que deuríen seguir tots, el grid. Un container conté rows i cada row conté columns.
    Jo recomane crear un div dins del column ja que et permetrà controlar el contingut sense alterar els estils del grid  -->
{% block body %}
{% endblock %}
<!-- Container-fluid ocupa el 100% de l'amplaria de la pàgina -->
<footer class=\"container-fluid\">
    <div class=\"row\">
        <div class=\"col-12\">
            <!-- Div per controlar tot el contingut sense aplicar classes i id's a column -->
            <div class=\"self-container\">
                <!-- Div per estructurar el logo i el nom de l'empresa -->
                <div class=\"nom-logo\">
                    <img src=\"{{ asset('equip3/img/logoBHEC.png') }}\" alt=\"Logotip Empresa\" width=\"50px\">
                    <h3>BHEC</h3>
                </div>
                <!-- Línia separadora -->
                <hr class=\"separator\"/>

                <!-- Llista amb els enllaços corresponents -->
                <ul class=\"footer-menu\">
                    <li>
                        <a href=\"#\">FAQ</a>
                    </li>
                    <li>
                        <a href=\"#\">Terminis i Condicions</a>
                    </li>
                    <li>
                        <a href=\"#\">Política de Privacitat</a>
                    </li>
                </ul>

            </div>
        </div>
    </div>
</footer>
</body>
</html>
", "base_3.html.twig", "/home/juan/Escritorio/2024-sprint-4/templates/base_3.html.twig");
    }
}