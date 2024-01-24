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

/* _header_back_3.html.twig */
class __TwigTemplate_f7d8ddb966a56206af779c179f4f8bc5 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "_header_back_3.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "_header_back_3.html.twig"));

        // line 1
        echo "<header>
    <div class=\"container-fluid\">
        <div class=\"row\">
            <div class=\"col-12\">
                <!-- Secció de logotip i navegació -->
                <div class=\"logo\">
                    <!-- Enllaç del logotip -->
                    <a href=\"";
        // line 8
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("templates");
        echo "\">
                        <!-- Imatge del logotip -->
                        <img src=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("equip3/img/logoBHEC.png"), "html", null, true);
        echo "\" class=\"img-logo-header\">
                    </a>
                    <!-- Navegació amb icona d'usuari -->
                    <nav class=\"grup-icones\">
                        <ul>
                            <li>
                                <!-- Enllaç de l'ícona d'usuari -->
                                <a>
                                    <!-- Imatge de l'ícona d'usuari -->
                                    <img src=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("equip3/img/usuari-Groc.png"), "html", null, true);
        echo "\"  alt=\"usuari\" onclick=openMenuModal()>
                                </a>
                            </li>
                        </ul>
                    </nav>
                    <nav id=\"menu-mobile\">
                        <div onclick=burguer() id=\"burger\" class=\"\">
                            <span class=\"line1\"></span>
                            <span class=\"line2\"></span>
                            <span class=\"line3\"></span>
                        </div>
                        <div class=\"ocultMenu\">
                            <nav id=\"main-menu\">
                                <ul>
                                    <li class=\"submenu\"><a><i class=\"fas fa-file-invoice\"></i> Factures <i class=\"fas fa-chevron-right\"></i></a>
                                        <ul class=\"submenu-content\">
                                            <li><a ";
        // line 35
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_invoice_index");
        echo ">Visualitzar Factures</a></li>
                                        </ul>
                                    </li>
                                    <li class=\"submenu\"><a><i class=\"fas fa-users\"></i> Clients <i class=\"fas fa-chevron-right\"></i></a>
                                        <ul class=\"submenu-content\">
                                            <li><a href=\"#\">Alta de Client</a></li>
                                            <li><a href=\"#\">Visualitzar Clients</a></li>
                                        </ul>
                                    </li>
                                    <li class=\"submenu\"><a><i class=\"fas fa-user-tie\"></i> Empleats </a><i class=\"fas fa-chevron-right\"></i>
                                        <ul class=\"submenu-content\">
                                            <li><a href=\"";
        // line 46
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_provider_new");
        echo "\">Alta Proveïdor</a></li>
                                            <li><a href=\"";
        // line 47
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_provider_index");
        echo "\">Visualitzar Proveïdors</a></li>
                                        </ul>
                                    </li>
                                    <li class=\"submenu\">
                                        <a><i class=\"fas fa-shopping-cart\"></i> Comandes <i class=\"fas fa-chevron-right\"></i></a>
                                        <ul class=\"submenu-content\">
                                            <li><a href=\"";
        // line 53
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_order_index");
        echo "\">Visualitzar Comandes</a></li>
                                        </ul>
                                    </li>
                                    <li class=\"submenu\">
                                        <a><i class=\"fas fa-car\"></i> Vehicles <i class=\"fas fa-chevron-right\"></i></a>
                                        <ul class=\"submenu-content\">
                                            <li><a href=\"#\">Alta Vehicle</a></li>
                                            <li><a href=\"";
        // line 60
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_catalogue_index");
        echo "\">Visualitzar Vehicles</a></li>
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
</header>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "_header_back_3.html.twig";
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
        return array (  125 => 60,  115 => 53,  106 => 47,  102 => 46,  88 => 35,  69 => 19,  57 => 10,  52 => 8,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<header>
    <div class=\"container-fluid\">
        <div class=\"row\">
            <div class=\"col-12\">
                <!-- Secció de logotip i navegació -->
                <div class=\"logo\">
                    <!-- Enllaç del logotip -->
                    <a href=\"{{ path('templates') }}\">
                        <!-- Imatge del logotip -->
                        <img src=\"{{ asset('equip3/img/logoBHEC.png')}}\" class=\"img-logo-header\">
                    </a>
                    <!-- Navegació amb icona d'usuari -->
                    <nav class=\"grup-icones\">
                        <ul>
                            <li>
                                <!-- Enllaç de l'ícona d'usuari -->
                                <a>
                                    <!-- Imatge de l'ícona d'usuari -->
                                    <img src=\"{{ asset('equip3/img/usuari-Groc.png')}}\"  alt=\"usuari\" onclick=openMenuModal()>
                                </a>
                            </li>
                        </ul>
                    </nav>
                    <nav id=\"menu-mobile\">
                        <div onclick=burguer() id=\"burger\" class=\"\">
                            <span class=\"line1\"></span>
                            <span class=\"line2\"></span>
                            <span class=\"line3\"></span>
                        </div>
                        <div class=\"ocultMenu\">
                            <nav id=\"main-menu\">
                                <ul>
                                    <li class=\"submenu\"><a><i class=\"fas fa-file-invoice\"></i> Factures <i class=\"fas fa-chevron-right\"></i></a>
                                        <ul class=\"submenu-content\">
                                            <li><a {{ path('app_invoice_index')}}>Visualitzar Factures</a></li>
                                        </ul>
                                    </li>
                                    <li class=\"submenu\"><a><i class=\"fas fa-users\"></i> Clients <i class=\"fas fa-chevron-right\"></i></a>
                                        <ul class=\"submenu-content\">
                                            <li><a href=\"#\">Alta de Client</a></li>
                                            <li><a href=\"#\">Visualitzar Clients</a></li>
                                        </ul>
                                    </li>
                                    <li class=\"submenu\"><a><i class=\"fas fa-user-tie\"></i> Empleats </a><i class=\"fas fa-chevron-right\"></i>
                                        <ul class=\"submenu-content\">
                                            <li><a href=\"{{ path('app_provider_new')}}\">Alta Proveïdor</a></li>
                                            <li><a href=\"{{ path('app_provider_index')}}\">Visualitzar Proveïdors</a></li>
                                        </ul>
                                    </li>
                                    <li class=\"submenu\">
                                        <a><i class=\"fas fa-shopping-cart\"></i> Comandes <i class=\"fas fa-chevron-right\"></i></a>
                                        <ul class=\"submenu-content\">
                                            <li><a href=\"{{ path('app_order_index')}}\">Visualitzar Comandes</a></li>
                                        </ul>
                                    </li>
                                    <li class=\"submenu\">
                                        <a><i class=\"fas fa-car\"></i> Vehicles <i class=\"fas fa-chevron-right\"></i></a>
                                        <ul class=\"submenu-content\">
                                            <li><a href=\"#\">Alta Vehicle</a></li>
                                            <li><a href=\"{{ path('app_catalogue_index')}}\">Visualitzar Vehicles</a></li>
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
</header>", "_header_back_3.html.twig", "/var/www/html/templates/_header_back_3.html.twig");
    }
}
