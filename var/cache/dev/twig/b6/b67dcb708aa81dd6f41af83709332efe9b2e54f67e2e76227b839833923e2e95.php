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

/* kopernikus/index.html.twig */
class __TwigTemplate_d793b764c163a151e3979bfee22eceaf6fb72198901b4a5622198466f4b1cb8b extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "kopernikus/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "kopernikus/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "
    <div class=\"d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom\">

        <h1 class=\"h2\">Kopernikus</h1>

        <div class=\"btn-toolbar mb-2 mb-md-0\">
            <div class=\"btn-group mr-2\">
                <a href=\"";
        // line 11
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("generate", ["product" => "kopernikus"]);
        echo "\" class=\"btn btn-md btn-outline-secondary\">Generate</a>
            </div>
        </div>
    </div>

    <div class=\"d-flex\">
        <div class=\"table-responsive\">
            <table class=\"table table-striped\">
                <thead>
                <tr>
                    <th>#</th>
                    <th>Date</th>
                    <th>Files</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>1</td>
                    <td>Lorem</td>
                    <td>ipsum</td>
                    <td><a class=\"btn btn-sm btn-outline-secondary\" href=\"#\">Download</a></td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>Lorem</td>
                    <td>ipsum</td>
                    <td><a class=\"btn btn-sm btn-outline-secondary\" href=\"#\">Download</a></td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "kopernikus/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  68 => 11,  59 => 4,  52 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block content %}

    <div class=\"d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom\">

        <h1 class=\"h2\">Kopernikus</h1>

        <div class=\"btn-toolbar mb-2 mb-md-0\">
            <div class=\"btn-group mr-2\">
                <a href=\"{{ path('generate', {'product' : 'kopernikus'}) }}\" class=\"btn btn-md btn-outline-secondary\">Generate</a>
            </div>
        </div>
    </div>

    <div class=\"d-flex\">
        <div class=\"table-responsive\">
            <table class=\"table table-striped\">
                <thead>
                <tr>
                    <th>#</th>
                    <th>Date</th>
                    <th>Files</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>1</td>
                    <td>Lorem</td>
                    <td>ipsum</td>
                    <td><a class=\"btn btn-sm btn-outline-secondary\" href=\"#\">Download</a></td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>Lorem</td>
                    <td>ipsum</td>
                    <td><a class=\"btn btn-sm btn-outline-secondary\" href=\"#\">Download</a></td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>
{% endblock %}", "kopernikus/index.html.twig", "/var/www/html/partner-bank/2590/application/templates/kopernikus/index.html.twig");
    }
}
