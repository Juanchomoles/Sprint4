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

/* _aside_back_3.html.twig */
class __TwigTemplate_dcc0adcdd4ba3f27e829e681ef4cd64b extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "_aside_back_3.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "_aside_back_3.html.twig"));

        // line 1
        echo "<aside class=\"col-2 aside\">
    <nav id=\"main-menu\">
        <ul>
            <li class=\"submenu\">
                <i class=\"fas fa-file-invoice\"></i>
                <a href=\"";
        // line 6
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_invoice_index");
        echo "\"> Factures

                </a>
            </li>
            <li class=\"submenu\">
                <a href=\"\">
                    <i class=\"fas fa-users\"></i> Clients
                </a>
            </li>
            <li class=\"submenu\">
                <a>
                    <i class=\"fas fa-user-tie\"></i> Empleats
                </a>
            </li>
            <li class=\"submenu\">
                <a href=\"";
        // line 21
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_provider_index");
        echo "\">
                    <i class=\"fas fa-truck\"></i> Proveidors
                </a>
            </li>
            <li class=\"submenu\">
                <a href=\"";
        // line 26
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_order_index");
        echo "\">
                    <i class=\"fas fa-shopping-cart\"></i> Comandes
                </a>
            </li>
            <li class=\"submenu\">
                <a href=\"";
        // line 31
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_vehicle_index");
        echo "\">
                    <i class=\"fas fa-car\"></i> Vehicles
                </a>
            </li>
        </ul>
    </nav>
</aside>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "_aside_back_3.html.twig";
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
        return array (  84 => 31,  76 => 26,  68 => 21,  50 => 6,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<aside class=\"col-2 aside\">
    <nav id=\"main-menu\">
        <ul>
            <li class=\"submenu\">
                <i class=\"fas fa-file-invoice\"></i>
                <a href=\"{{ path('app_invoice_index')}}\"> Factures

                </a>
            </li>
            <li class=\"submenu\">
                <a href=\"\">
                    <i class=\"fas fa-users\"></i> Clients
                </a>
            </li>
            <li class=\"submenu\">
                <a>
                    <i class=\"fas fa-user-tie\"></i> Empleats
                </a>
            </li>
            <li class=\"submenu\">
                <a href=\"{{ path('app_provider_index')}}\">
                    <i class=\"fas fa-truck\"></i> Proveidors
                </a>
            </li>
            <li class=\"submenu\">
                <a href=\"{{ path('app_order_index')}}\">
                    <i class=\"fas fa-shopping-cart\"></i> Comandes
                </a>
            </li>
            <li class=\"submenu\">
                <a href=\"{{ path('app_vehicle_index')}}\">
                    <i class=\"fas fa-car\"></i> Vehicles
                </a>
            </li>
        </ul>
    </nav>
</aside>", "_aside_back_3.html.twig", "/var/www/html/templates/_aside_back_3.html.twig");
    }
}
