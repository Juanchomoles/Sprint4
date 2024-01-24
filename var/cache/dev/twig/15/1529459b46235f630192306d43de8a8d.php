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

/* base_back_2.html.twig */
class __TwigTemplate_71ef5f128af4d2ae8855c488f6e8267f extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base_back_2.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base_back_2.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">

<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <title>Plantilla</title>
    <link href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("styles/equip2/css/Normalize.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\">
    <link href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("styles/equip2/css/grid.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\">
    <link href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("styles/equip2/css/backoffice-skeleton.css.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\">
    <link href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("styles/equip2/css/content.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\">
    <link href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("styles/equip2/css/styles_order.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\">
    <link href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("styles/equip2/css/modal.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\">
    <link href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("styles/equip2/css/ajax.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\">
    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css\">
    <!-- JavaScript -->
    <script src=\"https://code.jquery.com/jquery-3.7.0.js\"></script>
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/jquery.tablesorter/2.31.3/js/jquery.tablesorter.min.js\" integrity=\"sha512-qzgd5cYSZcosqpzpn7zF2ZId8f/8CHmFKZ8j7mU4OUXTNRd5g+ZHBPsgKEwoqxCtdQvExE5LprwwPAgoicguNg==\" crossorigin=\"anonymous\" referrerpolicy=\"no-referrer\"></script>
    <script src=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("styles/equip2/js/modal.js"), "html", null, true);
        echo "\" defer></script>
    <script src=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("styles/equip2/js/searcher.js"), "html", null, true);
        echo "\" defer></script>
    <script src=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("styles/equip2/js/menu_aside.js"), "html", null, true);
        echo "\" defer></script>
    <script src=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("styles/equip2/js/menu-burguer.js"), "html", null, true);
        echo "\" defer></script>
    <script src=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("styles/equip2/js/form_proveedores.js"), "html", null, true);
        echo "\" defer></script>
    <script src=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("styles/equip2/js/taules.js"), "html", null, true);
        echo "\" defer></script>
    <script src=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("styles/equip2/js/tableSorter.js"), "html", null, true);
        echo "\" defer></script>
    <script src=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("styles/equip2/js/ajax.js"), "html", null, true);
        echo "\" defer></script>
</head>

<body>
<header>
    <div class=\"container-fluid\">
        <div class=\"row\">
            <div class=\"col-12\">
                <div id=\"headerDiv\">
                    <a href=\"/\">
                        <div id=\"logoAndNav\">
                            <img src=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("styles/equip2/img/logoBHEC.png"), "html", null, true);
        echo "\" alt=\"Logo\">
                        </div>
                    </a>
                    <nav id=\"menu-desktop\" class=\"navIcons\">
                        <a href=\"#\"><img src=\"";
        // line 41
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("styles/equip2/img/icones/usuari-Groc.png"), "html", null, true);
        echo "\" alt=\"user\" class=\"icon\" id=\"usuari\"></a>
                    </nav>

                    <nav id=\"menu-mobile\">
                        <div id=\"burger\">
                            <span class=\"line1\"></span>
                            <span class=\"line2\"></span>
                            <span class=\"line3\"></span>
                        </div>
                        <div class=\"ocultMenu\">
                            <nav id=\"main-menu\">
                                <ul>
                                    <li><a href=\"";
        // line 53
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("templates");
        echo "\"><i class=\"fas fa-home\"></i> Inici</a></li>
                                    <li><a href=\"/\"><i class=\"fas fa-exchange-alt\"></i> Moviments</a></li>
                                    <li><a href=\"/\"><i class=\"fas fa-shopping-cart\"></i> Comandes</a></li>
                                    <li class=\"submenu\">
                                        <a href=\"#\"><i class=\"fas fa-users\"></i> Usuaris <i class=\"fas fa-chevron-right\"></i></a>
                                        <ul class=\"submenu-content\">
                                            <li><a href=\"#\">Clients</a></li>
                                            <li><a href=\"#\">Administratius</a></li>
                                            <li><a href=\"#\">Proveïdors</a></li>
                                        </ul>
                                    </li>
                                    <li class=\"submenu\">
                                        <a href=\"#\"><i class=\"fas fa-user-tie\"></i> Vehicles <i class=\"fas fa-chevron-right\"></i></a>
                                        <ul class=\"submenu-content\">
                                            <li><a href=\"";
        // line 67
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("templates");
        echo "\">Llistat dels vehicles</a></li>
                                            <li><a href=\"/\"><i class=\"fas fa-box\"></i> Stock</a></li>
                                        </ul>
                                    </li>
                                    <li><a href=\"";
        // line 71
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("templates");
        echo "\"><i class=\"fas fa-file-invoice\"></i> Factures</a></li>
                                    <li class=\"submenu\">
                                        <a href=\"#\"><i class=\"fas fa-cogs\"></i> Configuració <i class=\"fas fa-chevron-right\"></i></a>
                                        <ul class=\"submenu-content\">
                                            <li><a href=\"#\"><i class=\"fas fa-user-tag\"></i> Rols</a></li>
                                            <li><a href=\"#\"><i class=\"fas fa-user-shield\"></i> Privacitat</a></li>
                                            <li><a href=\"#\"><i class=\"fas fa-paint-brush\"></i> Apariència</a></li>
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


    <div class=\"ocultMenuEs\">
        <nav id=\"main-menuEs\">
            <ul>
                <li><a href=\"";
        // line 98
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("templates");
        echo "\"><i class=\"fas fa-home\"></i> Inici</a></li>
                <li><a href=\"/\"><i class=\"fas fa-exchange-alt\"></i> Moviments</a></li>
                <li><a href=\"/\"><i class=\"fas fa-shopping-cart\"></i> Comandes</a></li>
                <li class=\"submenu\">
                    <a href=\"#\"><i class=\"fas fa-users\"></i> Usuaris <i class=\"fas fa-chevron-right\"></i></a>
                    <ul class=\"submenu-content\">
                        <li><a href=\"#\">Clients</a></li>
                        <li><a href=\"#\">Administratius</a></li>
                        <li><a href=\"#\">Proveïdors</a></li>
                    </ul>
                </li>
                <li class=\"submenu\">
                    <a href=\"#\"><i class=\"fas fa-user-tie\"></i> Vehicles <i class=\"fas fa-chevron-right\"></i></a>
                    <ul class=\"submenu-content\">
                        <li><a href=\"";
        // line 112
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("templates");
        echo "\">Llistat dels vehicles</a></li>
                        <li><a href=\"/\"><i class=\"fas fa-box\"></i> Stock</a></li>
                    </ul>
                </li>
                <li><a href=\"";
        // line 116
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("templates");
        echo "\"><i class=\"fas fa-file-invoice\"></i> Factures</a></li>
                <li class=\"submenu\">
                    <a href=\"#\"><i class=\"fas fa-cogs\"></i> Configuració <i class=\"fas fa-chevron-right\"></i></a>
                    <ul class=\"submenu-content\">
                        <li><a href=\"#\"><i class=\"fas fa-user-tag\"></i> Rols</a></li>
                        <li><a href=\"#\"><i class=\"fas fa-user-shield\"></i> Privacitat</a></li>
                        <li><a href=\"#\"><i class=\"fas fa-paint-brush\"></i> Apariència</a></li>
                    </ul>
                </li>
            </ul>
        </nav>
    </div>
    ";
        // line 128
        $this->displayBlock('body', $context, $blocks);
        // line 131
        echo "</main>
</body>
</html>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 128
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 129
        echo "        <h1>Prova</h1>
    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "base_back_2.html.twig";
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
        return array (  266 => 129,  256 => 128,  244 => 131,  242 => 128,  227 => 116,  220 => 112,  203 => 98,  173 => 71,  166 => 67,  149 => 53,  134 => 41,  127 => 37,  113 => 26,  109 => 25,  105 => 24,  101 => 23,  97 => 22,  93 => 21,  89 => 20,  85 => 19,  77 => 14,  73 => 13,  69 => 12,  65 => 11,  61 => 10,  57 => 9,  53 => 8,  44 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">

<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <title>Plantilla</title>
    <link href=\"{{ asset('styles/equip2/css/Normalize.css') }}\" type=\"text/css\" rel=\"stylesheet\">
    <link href=\"{{ asset('styles/equip2/css/grid.css') }}\" type=\"text/css\" rel=\"stylesheet\">
    <link href=\"{{ asset('styles/equip2/css/backoffice-skeleton.css.css') }}\" type=\"text/css\" rel=\"stylesheet\">
    <link href=\"{{ asset('styles/equip2/css/content.css') }}\" type=\"text/css\" rel=\"stylesheet\">
    <link href=\"{{ asset('styles/equip2/css/styles_order.css') }}\" type=\"text/css\" rel=\"stylesheet\">
    <link href=\"{{ asset('styles/equip2/css/modal.css') }}\" type=\"text/css\" rel=\"stylesheet\">
    <link href=\"{{ asset('styles/equip2/css/ajax.css') }}\" type=\"text/css\" rel=\"stylesheet\">
    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css\">
    <!-- JavaScript -->
    <script src=\"https://code.jquery.com/jquery-3.7.0.js\"></script>
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/jquery.tablesorter/2.31.3/js/jquery.tablesorter.min.js\" integrity=\"sha512-qzgd5cYSZcosqpzpn7zF2ZId8f/8CHmFKZ8j7mU4OUXTNRd5g+ZHBPsgKEwoqxCtdQvExE5LprwwPAgoicguNg==\" crossorigin=\"anonymous\" referrerpolicy=\"no-referrer\"></script>
    <script src=\"{{ asset('styles/equip2/js/modal.js') }}\" defer></script>
    <script src=\"{{ asset('styles/equip2/js/searcher.js') }}\" defer></script>
    <script src=\"{{ asset('styles/equip2/js/menu_aside.js') }}\" defer></script>
    <script src=\"{{ asset('styles/equip2/js/menu-burguer.js') }}\" defer></script>
    <script src=\"{{ asset('styles/equip2/js/form_proveedores.js') }}\" defer></script>
    <script src=\"{{ asset('styles/equip2/js/taules.js') }}\" defer></script>
    <script src=\"{{ asset('styles/equip2/js/tableSorter.js') }}\" defer></script>
    <script src=\"{{ asset('styles/equip2/js/ajax.js') }}\" defer></script>
</head>

<body>
<header>
    <div class=\"container-fluid\">
        <div class=\"row\">
            <div class=\"col-12\">
                <div id=\"headerDiv\">
                    <a href=\"/\">
                        <div id=\"logoAndNav\">
                            <img src=\"{{ asset('styles/equip2/img/logoBHEC.png') }}\" alt=\"Logo\">
                        </div>
                    </a>
                    <nav id=\"menu-desktop\" class=\"navIcons\">
                        <a href=\"#\"><img src=\"{{ asset('styles/equip2/img/icones/usuari-Groc.png') }}\" alt=\"user\" class=\"icon\" id=\"usuari\"></a>
                    </nav>

                    <nav id=\"menu-mobile\">
                        <div id=\"burger\">
                            <span class=\"line1\"></span>
                            <span class=\"line2\"></span>
                            <span class=\"line3\"></span>
                        </div>
                        <div class=\"ocultMenu\">
                            <nav id=\"main-menu\">
                                <ul>
                                    <li><a href=\"{{ path('templates') }}\"><i class=\"fas fa-home\"></i> Inici</a></li>
                                    <li><a href=\"/\"><i class=\"fas fa-exchange-alt\"></i> Moviments</a></li>
                                    <li><a href=\"/\"><i class=\"fas fa-shopping-cart\"></i> Comandes</a></li>
                                    <li class=\"submenu\">
                                        <a href=\"#\"><i class=\"fas fa-users\"></i> Usuaris <i class=\"fas fa-chevron-right\"></i></a>
                                        <ul class=\"submenu-content\">
                                            <li><a href=\"#\">Clients</a></li>
                                            <li><a href=\"#\">Administratius</a></li>
                                            <li><a href=\"#\">Proveïdors</a></li>
                                        </ul>
                                    </li>
                                    <li class=\"submenu\">
                                        <a href=\"#\"><i class=\"fas fa-user-tie\"></i> Vehicles <i class=\"fas fa-chevron-right\"></i></a>
                                        <ul class=\"submenu-content\">
                                            <li><a href=\"{{ path('templates') }}\">Llistat dels vehicles</a></li>
                                            <li><a href=\"/\"><i class=\"fas fa-box\"></i> Stock</a></li>
                                        </ul>
                                    </li>
                                    <li><a href=\"{{ path('templates') }}\"><i class=\"fas fa-file-invoice\"></i> Factures</a></li>
                                    <li class=\"submenu\">
                                        <a href=\"#\"><i class=\"fas fa-cogs\"></i> Configuració <i class=\"fas fa-chevron-right\"></i></a>
                                        <ul class=\"submenu-content\">
                                            <li><a href=\"#\"><i class=\"fas fa-user-tag\"></i> Rols</a></li>
                                            <li><a href=\"#\"><i class=\"fas fa-user-shield\"></i> Privacitat</a></li>
                                            <li><a href=\"#\"><i class=\"fas fa-paint-brush\"></i> Apariència</a></li>
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


    <div class=\"ocultMenuEs\">
        <nav id=\"main-menuEs\">
            <ul>
                <li><a href=\"{{ path('templates') }}\"><i class=\"fas fa-home\"></i> Inici</a></li>
                <li><a href=\"/\"><i class=\"fas fa-exchange-alt\"></i> Moviments</a></li>
                <li><a href=\"/\"><i class=\"fas fa-shopping-cart\"></i> Comandes</a></li>
                <li class=\"submenu\">
                    <a href=\"#\"><i class=\"fas fa-users\"></i> Usuaris <i class=\"fas fa-chevron-right\"></i></a>
                    <ul class=\"submenu-content\">
                        <li><a href=\"#\">Clients</a></li>
                        <li><a href=\"#\">Administratius</a></li>
                        <li><a href=\"#\">Proveïdors</a></li>
                    </ul>
                </li>
                <li class=\"submenu\">
                    <a href=\"#\"><i class=\"fas fa-user-tie\"></i> Vehicles <i class=\"fas fa-chevron-right\"></i></a>
                    <ul class=\"submenu-content\">
                        <li><a href=\"{{ path('templates') }}\">Llistat dels vehicles</a></li>
                        <li><a href=\"/\"><i class=\"fas fa-box\"></i> Stock</a></li>
                    </ul>
                </li>
                <li><a href=\"{{ path('templates') }}\"><i class=\"fas fa-file-invoice\"></i> Factures</a></li>
                <li class=\"submenu\">
                    <a href=\"#\"><i class=\"fas fa-cogs\"></i> Configuració <i class=\"fas fa-chevron-right\"></i></a>
                    <ul class=\"submenu-content\">
                        <li><a href=\"#\"><i class=\"fas fa-user-tag\"></i> Rols</a></li>
                        <li><a href=\"#\"><i class=\"fas fa-user-shield\"></i> Privacitat</a></li>
                        <li><a href=\"#\"><i class=\"fas fa-paint-brush\"></i> Apariència</a></li>
                    </ul>
                </li>
            </ul>
        </nav>
    </div>
    {% block body %}
        <h1>Prova</h1>
    {% endblock %}
</main>
</body>
</html>", "base_back_2.html.twig", "/var/www/html/templates/base_back_2.html.twig");
    }
}
