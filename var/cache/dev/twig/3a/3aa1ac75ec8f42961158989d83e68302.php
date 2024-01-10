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

/* _aside_back.html.twig */
class __TwigTemplate_1eab897f7385cb6c205b1f3352c6c21e extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "_aside_back.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "_aside_back.html.twig"));

        // line 1
        echo "<aside class=\"col-2 aside\">
    <nav id=\"main-menu\">
        <ul>
            <li class=\"submenu\">
                <a href=\"#\"><i class=\"fas fa-file-invoice\"></i> Factures <i
                            class=\"fas fa-chevron-right\"></i></a>
                <ul class=\"submenu-content\">
                    <li><a href=\"/invoice_list.php\">Visualitzar Factures</a></li>
                </ul>
            </li>
            <li class=\"submenu\">
                <a href=\"#\"><i class=\"fas fa-users\"></i> Clients <i class=\"fas fa-chevron-right\"></i></a>
                <ul class=\"submenu-content\">
                    <li><a href=\"#\">Alta de Client</a></li>
                    <li><a href=\"#\">Visualitzar Clients</a></li>
                </ul>
            </li>
            <li class=\"submenu\">
                <a href=\"#\"><i class=\"fas fa-user-tie\"></i> Empleats <i
                            class=\"fas fa-chevron-right\"></i></a>
                <ul class=\"submenu-content\">
                    <li><a href=\"#\">Alta d'Empleat</a></li>
                    <li><a href=\"#\">Visualitzar Empleats</a></li>
                </ul>
            </li>
            <li class=\"submenu\">
                <a href=\"#\"><i class=\"fas fa-truck\"></i> Proveïdors <i class=\"fas fa-chevron-right\"></i></a>
                <ul class=\"submenu-content\">
                    <li><a href=\"/provider_create.php\">Alta Proveïdor</a></li>
                    <li><a href=\"/provider_list.php\">Visualitzar Proveïdors</a></li>
                </ul>
            </li>
            <li class=\"submenu\">
                <a href=\"#\"><i class=\"fas fa-shopping-cart\"></i> Comandes <i
                            class=\"fas fa-chevron-right\"></i></a>
                <ul class=\"submenu-content\">
                    <li><a href=\"/order_list.php\">Visualitzar Comandes</a></li>
                </ul>
            </li>
            <li class=\"submenu\">
                <a href=\"#\"><i class=\"fas fa-car\"></i> Vehicles <i class=\"fas fa-chevron-right\"></i></a>
                <ul class=\"submenu-content\">
                    <li><a href=\"/vehicle_create.php\">Alta Vehicle</a></li>
                    <li><a href=\"/vehicle_list.php\">Visualitzar Vehicles</a></li>
                </ul>
            </li>
        </ul>
    </nav>
</aside>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "_aside_back.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<aside class=\"col-2 aside\">
    <nav id=\"main-menu\">
        <ul>
            <li class=\"submenu\">
                <a href=\"#\"><i class=\"fas fa-file-invoice\"></i> Factures <i
                            class=\"fas fa-chevron-right\"></i></a>
                <ul class=\"submenu-content\">
                    <li><a href=\"/invoice_list.php\">Visualitzar Factures</a></li>
                </ul>
            </li>
            <li class=\"submenu\">
                <a href=\"#\"><i class=\"fas fa-users\"></i> Clients <i class=\"fas fa-chevron-right\"></i></a>
                <ul class=\"submenu-content\">
                    <li><a href=\"#\">Alta de Client</a></li>
                    <li><a href=\"#\">Visualitzar Clients</a></li>
                </ul>
            </li>
            <li class=\"submenu\">
                <a href=\"#\"><i class=\"fas fa-user-tie\"></i> Empleats <i
                            class=\"fas fa-chevron-right\"></i></a>
                <ul class=\"submenu-content\">
                    <li><a href=\"#\">Alta d'Empleat</a></li>
                    <li><a href=\"#\">Visualitzar Empleats</a></li>
                </ul>
            </li>
            <li class=\"submenu\">
                <a href=\"#\"><i class=\"fas fa-truck\"></i> Proveïdors <i class=\"fas fa-chevron-right\"></i></a>
                <ul class=\"submenu-content\">
                    <li><a href=\"/provider_create.php\">Alta Proveïdor</a></li>
                    <li><a href=\"/provider_list.php\">Visualitzar Proveïdors</a></li>
                </ul>
            </li>
            <li class=\"submenu\">
                <a href=\"#\"><i class=\"fas fa-shopping-cart\"></i> Comandes <i
                            class=\"fas fa-chevron-right\"></i></a>
                <ul class=\"submenu-content\">
                    <li><a href=\"/order_list.php\">Visualitzar Comandes</a></li>
                </ul>
            </li>
            <li class=\"submenu\">
                <a href=\"#\"><i class=\"fas fa-car\"></i> Vehicles <i class=\"fas fa-chevron-right\"></i></a>
                <ul class=\"submenu-content\">
                    <li><a href=\"/vehicle_create.php\">Alta Vehicle</a></li>
                    <li><a href=\"/vehicle_list.php\">Visualitzar Vehicles</a></li>
                </ul>
            </li>
        </ul>
    </nav>
</aside>
", "_aside_back.html.twig", "/home/juan/Escritorio/2024-sprint-4/templates/_aside_back.html.twig");
    }
}
