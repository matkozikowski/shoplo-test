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

/* components/tabs.html.twig */
class __TwigTemplate_b882bcb988312c7834c1e8fac45fddd27891e3db6c7769b61b0a4391bbe12c92 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "components/tabs.html.twig"));

        // line 1
        echo "<div class=\"d-flex\">
    <ul class=\"nav nav-tabs\" id=\"filesTabs\" role=\"tablist\">
        ";
        // line 3
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["items"]) || array_key_exists("items", $context) ? $context["items"] : (function () { throw new RuntimeError('Variable "items" does not exist.', 3, $this->source); })()));
        foreach ($context['_seq'] as $context["index"] => $context["item"]) {
            // line 4
            echo "        <li class=\"nav-item\">
            <a class=\"nav-link ";
            // line 5
            echo (((0 === twig_compare($context["index"], "de"))) ? ("active") : (""));
            echo "\" id=\"";
            echo twig_escape_filter($this->env, $context["index"], "html", null, true);
            echo "-tab\" data-toggle=\"tab\" href=\"#";
            echo twig_escape_filter($this->env, $context["index"], "html", null, true);
            echo "\" role=\"tab\" aria-controls=\"";
            echo twig_escape_filter($this->env, $context["index"], "html", null, true);
            echo "\" aria-selected=\"";
            echo (((0 === twig_compare($context["index"], "de"))) ? ("true") : ("false"));
            echo "\">";
            echo twig_escape_filter($this->env, twig_upper_filter($this->env, $context["index"]), "html", null, true);
            echo "</a>
        </li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['index'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 8
        echo "    </ul>
</div>

<div class=\"d-flex\">
    <div class=\"tab-content\" id=\"myTabContent\">
        ";
        // line 13
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["items"]) || array_key_exists("items", $context) ? $context["items"] : (function () { throw new RuntimeError('Variable "items" does not exist.', 13, $this->source); })()));
        foreach ($context['_seq'] as $context["index"] => $context["item"]) {
            // line 14
            echo "            <div class=\"tab-pane fade show ";
            echo (((0 === twig_compare($context["index"], "de"))) ? ("active") : (""));
            echo "\" id=\"";
            echo twig_escape_filter($this->env, $context["index"], "html", null, true);
            echo "\" role=\"tabpanel\" aria-labelledby=\"";
            echo twig_escape_filter($this->env, $context["index"], "html", null, true);
            echo "-tab\">
                <div class=\"table-responsive\">
                    <table class=\"table table-striped\">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>File name</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        ";
            // line 25
            $context["lp"] = 1;
            // line 26
            echo "                        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["item"], "files", [], "any", false, false, false, 26));
            foreach ($context['_seq'] as $context["_key"] => $context["file"]) {
                // line 27
                echo "                            <tr>
                                <td>";
                // line 28
                echo twig_escape_filter($this->env, (isset($context["lp"]) || array_key_exists("lp", $context) ? $context["lp"] : (function () { throw new RuntimeError('Variable "lp" does not exist.', 28, $this->source); })()), "html", null, true);
                echo "</td>
                                <td>";
                // line 29
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["file"], "name", [], "any", false, false, false, 29), "html", null, true);
                echo "</td>
                                <td><a target=\"_blank\" class=\"btn btn-sm btn-outline-secondary\" href=\"";
                // line 30
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["file"], "location", [], "any", false, false, false, 30), "html", null, true);
                echo "\">Download</a></td>
                            </tr>
                            ";
                // line 32
                $context["lp"] = ((isset($context["lp"]) || array_key_exists("lp", $context) ? $context["lp"] : (function () { throw new RuntimeError('Variable "lp" does not exist.', 32, $this->source); })()) + 1);
                // line 33
                echo "                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['file'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 34
            echo "                        </tbody>
                    </table>
                </div>
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['index'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 39
        echo "    </div>
</div>";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "components/tabs.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  141 => 39,  131 => 34,  125 => 33,  123 => 32,  118 => 30,  114 => 29,  110 => 28,  107 => 27,  102 => 26,  100 => 25,  81 => 14,  77 => 13,  70 => 8,  51 => 5,  48 => 4,  44 => 3,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"d-flex\">
    <ul class=\"nav nav-tabs\" id=\"filesTabs\" role=\"tablist\">
        {% for index, item in items %}
        <li class=\"nav-item\">
            <a class=\"nav-link {{ index == 'de' ? 'active' : '' }}\" id=\"{{ index }}-tab\" data-toggle=\"tab\" href=\"#{{ index }}\" role=\"tab\" aria-controls=\"{{ index }}\" aria-selected=\"{{ index == 'de' ? 'true' : 'false' }}\">{{ index | upper }}</a>
        </li>
        {% endfor %}
    </ul>
</div>

<div class=\"d-flex\">
    <div class=\"tab-content\" id=\"myTabContent\">
        {% for index, item in items %}
            <div class=\"tab-pane fade show {{ index == 'de' ? 'active' : '' }}\" id=\"{{ index }}\" role=\"tabpanel\" aria-labelledby=\"{{ index }}-tab\">
                <div class=\"table-responsive\">
                    <table class=\"table table-striped\">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>File name</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        {% set lp = 1 %}
                        {% for file in item.files %}
                            <tr>
                                <td>{{ lp }}</td>
                                <td>{{ file.name }}</td>
                                <td><a target=\"_blank\" class=\"btn btn-sm btn-outline-secondary\" href=\"{{ file.location }}\">Download</a></td>
                            </tr>
                            {% set lp = lp + 1 %}
                        {% endfor %}
                        </tbody>
                    </table>
                </div>
            </div>
        {% endfor %}
    </div>
</div>", "components/tabs.html.twig", "/var/www/html/partner-bank/2590/application/templates/components/tabs.html.twig");
    }
}
