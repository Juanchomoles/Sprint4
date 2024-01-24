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

/* _header_front_3.html.twig */
class __TwigTemplate_f87b528f48dff2c0e5d62b97bfa7b67d extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "_header_front_3.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "_header_front_3.html.twig"));

        // line 1
        echo "<header class=\"container-fluid\">
    <div class=\"row div-header\">
        <div class=\"col-12\">
            <nav class=\"first-nav\">
                <img src=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("equip3/img/logoBHEC.png"), "html", null, true);
        echo "\" alt=\"logo BHEC\" width=\"50px\"/>
                <ul class=\"hidden\">
                    <li>
                        <a href=\"";
        // line 8
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_catalogue_index");
        echo "\">Catàleg</a>
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
        // line 27
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("equip3/img/busqueda-Groc.png"), "html", null, true);
        echo "\" alt=\"Imatge Lupa\" id=\"busqueda\">
                        </a>
                    </li>
                    <li class=\"hidden\">
                        <a href=\"#\">
                            <img src=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("equip3/img/notificacio-Groc.png"), "html", null, true);
        echo "\" alt=\"Imatge Notificació\" id=\"notificacio\">
                        </a>
                    </li>
                    <li class=\"hidden\">
                        <a href=\"#\">
                            <img src=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("equip3/img/llistaDeDesitjos-Groc.png"), "html", null, true);
        echo "\" alt=\"Imatge Llista De Dessitjos\"
                                 id=\"desitjos\"/>
                        </a>
                    </li>
                    <li>
                        <a href=\"";
        // line 42
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_garage_index");
        echo "\">
                            <img src=\"";
        // line 43
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("equip3/img/garatge-Groc.png"), "html", null, true);
        echo "\" alt=\"Imatge Garatge\" id=\"garatge\">
                        </a>
                    </li>
                    <li>
                        <a>
                            <img src=\"";
        // line 48
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("equip3/img/usuari-Groc.png"), "html", null, true);
        echo "\" alt=\"Imatge Usuari\" onclick=openMenuModal()>
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
                                            <a href=\"";
        // line 62
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_catalogue_index");
        echo "\">
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
</header>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "_header_front_3.html.twig";
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
        return array (  130 => 62,  113 => 48,  105 => 43,  101 => 42,  93 => 37,  85 => 32,  77 => 27,  55 => 8,  49 => 5,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<header class=\"container-fluid\">
    <div class=\"row div-header\">
        <div class=\"col-12\">
            <nav class=\"first-nav\">
                <img src=\"{{ asset('equip3/img/logoBHEC.png') }}\" alt=\"logo BHEC\" width=\"50px\"/>
                <ul class=\"hidden\">
                    <li>
                        <a href=\"{{ path('app_catalogue_index') }}\">Catàleg</a>
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
                        <a href=\"{{ path('app_garage_index') }}\">
                            <img src=\"{{ asset('equip3/img/garatge-Groc.png') }}\" alt=\"Imatge Garatge\" id=\"garatge\">
                        </a>
                    </li>
                    <li>
                        <a>
                            <img src=\"{{ asset('equip3/img/usuari-Groc.png') }}\" alt=\"Imatge Usuari\" onclick=openMenuModal()>
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
                                            <a href=\"{{ path('app_catalogue_index') }}\">
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
</header>", "_header_front_3.html.twig", "/var/www/html/templates/_header_front_3.html.twig");
    }
}
