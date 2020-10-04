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

/* components/navigation.html.twig */
class __TwigTemplate_eae368d941ea75912652a2cc7f1cdd9f696e01adfdf93af6e967b23e78219c9d extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "components/navigation.html.twig"));

        // line 1
        echo "<nav id=\"sidebarMenu\" class=\"col-md-3 col-lg-2 d-md-block bg-light sidebar collapse\">
    <div class=\"sidebar-sticky pt-3\">
        <ul class=\"nav flex-column\">
            <li class=\"nav-item\">
                <a class=\"nav-link active\" href=\"";
        // line 5
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("index");
        echo "\">
                    Home
                </a>
            </li>
            <li class=\"nav-item\">
                <a class=\"nav-link\" href=\"";
        // line 10
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("list", ["product" => "kopernikus"]);
        echo "\">
                    Kopernikus
                </a>
            </li>
        </ul>
    </div>
</nav>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "components/navigation.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  54 => 10,  46 => 5,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<nav id=\"sidebarMenu\" class=\"col-md-3 col-lg-2 d-md-block bg-light sidebar collapse\">
    <div class=\"sidebar-sticky pt-3\">
        <ul class=\"nav flex-column\">
            <li class=\"nav-item\">
                <a class=\"nav-link active\" href=\"{{ path('index') }}\">
                    Home
                </a>
            </li>
            <li class=\"nav-item\">
                <a class=\"nav-link\" href=\"{{ path('list', {'product' : 'kopernikus'}) }}\">
                    Kopernikus
                </a>
            </li>
        </ul>
    </div>
</nav>
", "components/navigation.html.twig", "/var/www/html/partner-bank/2590/application/templates/components/navigation.html.twig");
    }
}
