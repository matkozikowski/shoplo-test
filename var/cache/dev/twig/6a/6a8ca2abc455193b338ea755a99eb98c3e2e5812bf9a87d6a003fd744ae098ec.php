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
class __TwigTemplate_fe4ca41404e9bec315d27ba2037ceaf1e32620e4ea4d2d93af716d63e8562587 extends Template
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
                <a class=\"nav-link ";
        // line 5
        if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 5, $this->source); })()), "request", [], "any", false, false, false, 5), "get", [0 => "_route"], "method", false, false, false, 5), "index"))) {
            echo "active";
        }
        echo "\" href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("index");
        echo "\">
                    Home
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
        return array (  46 => 5,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<nav id=\"sidebarMenu\" class=\"col-md-3 col-lg-2 d-md-block bg-light sidebar collapse\">
    <div class=\"sidebar-sticky pt-3\">
        <ul class=\"nav flex-column\">
            <li class=\"nav-item\">
                <a class=\"nav-link {% if app.request.get('_route') == 'index' %}active{% endif %}\" href=\"{{ path('index') }}\">
                    Home
                </a>
            </li>
        </ul>
    </div>
</nav>
", "components/navigation.html.twig", "/var/www/html/shoplo-test/templates/components/navigation.html.twig");
    }
}
