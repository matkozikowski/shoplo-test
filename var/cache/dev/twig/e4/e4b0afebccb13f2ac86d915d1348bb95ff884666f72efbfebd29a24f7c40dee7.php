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

/* index.html.twig */
class __TwigTemplate_24f175184372a80f0f7dbca76a9838044f5085b6ae97b163d2c4291f614c64ed extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "index.html.twig", 1);
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
    <div class=\"container\">
        <h3 class=\"h3\">Shoplo Test  DEV</h3>
        <div class=\"row\">
            <div class=\"col-md-3 col-sm-6\">
                <div class=\"product-grid3\">
                    <div class=\"product-image3\">
                        <a href=\"#\">
                            <img class=\"pic-1\" src=\"http://bestjquery.com/tutorial/product-grid/demo4/images/img-1.jpg\">
                            <img class=\"pic-2\" src=\"http://bestjquery.com/tutorial/product-grid/demo4/images/img-2.jpg\">
                        </a>
                        <ul class=\"social\">
                            <li><a href=\"#\"><i class=\"fa fa-shopping-bag\"></i></a></li>
                            <li><a href=\"#\"><i class=\"fa fa-shopping-cart\"></i></a></li>
                        </ul>
                        <span class=\"product-new-label\">New</span>
                    </div>
                    <div class=\"product-content\">
                        <h3 class=\"title\"><a href=\"#\">Men's Blazer</a></h3>
                        <div class=\"price\">
                            \$63.50
                            <span>\$75.00</span>
                        </div>
                        <ul class=\"rating\">
                            <li class=\"fa fa-star\"></li>
                            <li class=\"fa fa-star\"></li>
                            <li class=\"fa fa-star\"></li>
                            <li class=\"fa fa-star disable\"></li>
                            <li class=\"fa fa-star disable\"></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class=\"col-md-3 col-sm-6\">
                <div class=\"product-grid3\">
                    <div class=\"product-image3\">
                        <a href=\"#\">
                            <img class=\"pic-1\" src=\"http://bestjquery.com/tutorial/product-grid/demo4/images/img-3.jpg\">
                            <img class=\"pic-2\" src=\"http://bestjquery.com/tutorial/product-grid/demo4/images/img-4.jpg\">
                        </a>
                        <ul class=\"social\">
                            <li><a href=\"#\"><i class=\"fa fa-shopping-bag\"></i></a></li>
                            <li><a href=\"#\"><i class=\"fa fa-shopping-cart\"></i></a></li>
                        </ul>
                    </div>
                    <div class=\"product-content\">
                        <h3 class=\"title\"><a href=\"#\">Women's Designer Top</a></h3>
                        <div class=\"price\">
                            \$43.50
                        </div>
                        <ul class=\"rating\">
                            <li class=\"fa fa-star\"></li>
                            <li class=\"fa fa-star\"></li>
                            <li class=\"fa fa-star\"></li>
                            <li class=\"fa fa-star\"></li>
                            <li class=\"fa fa-star\"></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class=\"col-md-3 col-sm-6\">
                <div class=\"product-grid3\">
                    <div class=\"product-image3\">
                        <a href=\"#\">
                            <img class=\"pic-1\" src=\"http://bestjquery.com/tutorial/product-grid/demo4/images/img-5.jpg\">
                            <img class=\"pic-2\" src=\"http://bestjquery.com/tutorial/product-grid/demo4/images/img-6.jpg\">
                        </a>
                        <ul class=\"social\">
                            <li><a href=\"#\"><i class=\"fa fa-shopping-bag\"></i></a></li>
                            <li><a href=\"#\"><i class=\"fa fa-shopping-cart\"></i></a></li>
                        </ul>
                        <span class=\"product-new-label\">New</span>
                    </div>
                    <div class=\"product-content\">
                        <h3 class=\"title\"><a href=\"#\">Men's Blazer</a></h3>
                        <div class=\"price\">
                            \$63.50
                            <span>\$75.00</span>
                        </div>
                        <ul class=\"rating\">
                            <li class=\"fa fa-star\"></li>
                            <li class=\"fa fa-star\"></li>
                            <li class=\"fa fa-star\"></li>
                            <li class=\"fa fa-star disable\"></li>
                            <li class=\"fa fa-star disable\"></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class=\"col-md-3 col-sm-6\">
                <div class=\"product-grid3\">
                    <div class=\"product-image3\">
                        <a href=\"#\">
                            <img class=\"pic-1\" src=\"http://bestjquery.com/tutorial/product-grid/demo4/images/img-7.jpg\">
                            <img class=\"pic-2\" src=\"http://bestjquery.com/tutorial/product-grid/demo4/images/img-8.jpg\">
                        </a>
                        <ul class=\"social\">
                            <li><a href=\"#\"><i class=\"fa fa-shopping-bag\"></i></a></li>
                            <li><a href=\"#\"><i class=\"fa fa-shopping-cart\"></i></a></li>
                        </ul>
                        <span class=\"product-new-label\">New</span>
                    </div>
                    <div class=\"product-content\">
                        <h3 class=\"title\"><a href=\"#\">Men's Blazer</a></h3>
                        <div class=\"price\">
                            \$63.50
                            <span>\$75.00</span>
                        </div>
                        <ul class=\"rating\">
                            <li class=\"fa fa-star\"></li>
                            <li class=\"fa fa-star\"></li>
                            <li class=\"fa fa-star\"></li>
                            <li class=\"fa fa-star disable\"></li>
                            <li class=\"fa fa-star disable\"></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  59 => 4,  52 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block content %}

    <div class=\"container\">
        <h3 class=\"h3\">Shoplo Test  DEV</h3>
        <div class=\"row\">
            <div class=\"col-md-3 col-sm-6\">
                <div class=\"product-grid3\">
                    <div class=\"product-image3\">
                        <a href=\"#\">
                            <img class=\"pic-1\" src=\"http://bestjquery.com/tutorial/product-grid/demo4/images/img-1.jpg\">
                            <img class=\"pic-2\" src=\"http://bestjquery.com/tutorial/product-grid/demo4/images/img-2.jpg\">
                        </a>
                        <ul class=\"social\">
                            <li><a href=\"#\"><i class=\"fa fa-shopping-bag\"></i></a></li>
                            <li><a href=\"#\"><i class=\"fa fa-shopping-cart\"></i></a></li>
                        </ul>
                        <span class=\"product-new-label\">New</span>
                    </div>
                    <div class=\"product-content\">
                        <h3 class=\"title\"><a href=\"#\">Men's Blazer</a></h3>
                        <div class=\"price\">
                            \$63.50
                            <span>\$75.00</span>
                        </div>
                        <ul class=\"rating\">
                            <li class=\"fa fa-star\"></li>
                            <li class=\"fa fa-star\"></li>
                            <li class=\"fa fa-star\"></li>
                            <li class=\"fa fa-star disable\"></li>
                            <li class=\"fa fa-star disable\"></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class=\"col-md-3 col-sm-6\">
                <div class=\"product-grid3\">
                    <div class=\"product-image3\">
                        <a href=\"#\">
                            <img class=\"pic-1\" src=\"http://bestjquery.com/tutorial/product-grid/demo4/images/img-3.jpg\">
                            <img class=\"pic-2\" src=\"http://bestjquery.com/tutorial/product-grid/demo4/images/img-4.jpg\">
                        </a>
                        <ul class=\"social\">
                            <li><a href=\"#\"><i class=\"fa fa-shopping-bag\"></i></a></li>
                            <li><a href=\"#\"><i class=\"fa fa-shopping-cart\"></i></a></li>
                        </ul>
                    </div>
                    <div class=\"product-content\">
                        <h3 class=\"title\"><a href=\"#\">Women's Designer Top</a></h3>
                        <div class=\"price\">
                            \$43.50
                        </div>
                        <ul class=\"rating\">
                            <li class=\"fa fa-star\"></li>
                            <li class=\"fa fa-star\"></li>
                            <li class=\"fa fa-star\"></li>
                            <li class=\"fa fa-star\"></li>
                            <li class=\"fa fa-star\"></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class=\"col-md-3 col-sm-6\">
                <div class=\"product-grid3\">
                    <div class=\"product-image3\">
                        <a href=\"#\">
                            <img class=\"pic-1\" src=\"http://bestjquery.com/tutorial/product-grid/demo4/images/img-5.jpg\">
                            <img class=\"pic-2\" src=\"http://bestjquery.com/tutorial/product-grid/demo4/images/img-6.jpg\">
                        </a>
                        <ul class=\"social\">
                            <li><a href=\"#\"><i class=\"fa fa-shopping-bag\"></i></a></li>
                            <li><a href=\"#\"><i class=\"fa fa-shopping-cart\"></i></a></li>
                        </ul>
                        <span class=\"product-new-label\">New</span>
                    </div>
                    <div class=\"product-content\">
                        <h3 class=\"title\"><a href=\"#\">Men's Blazer</a></h3>
                        <div class=\"price\">
                            \$63.50
                            <span>\$75.00</span>
                        </div>
                        <ul class=\"rating\">
                            <li class=\"fa fa-star\"></li>
                            <li class=\"fa fa-star\"></li>
                            <li class=\"fa fa-star\"></li>
                            <li class=\"fa fa-star disable\"></li>
                            <li class=\"fa fa-star disable\"></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class=\"col-md-3 col-sm-6\">
                <div class=\"product-grid3\">
                    <div class=\"product-image3\">
                        <a href=\"#\">
                            <img class=\"pic-1\" src=\"http://bestjquery.com/tutorial/product-grid/demo4/images/img-7.jpg\">
                            <img class=\"pic-2\" src=\"http://bestjquery.com/tutorial/product-grid/demo4/images/img-8.jpg\">
                        </a>
                        <ul class=\"social\">
                            <li><a href=\"#\"><i class=\"fa fa-shopping-bag\"></i></a></li>
                            <li><a href=\"#\"><i class=\"fa fa-shopping-cart\"></i></a></li>
                        </ul>
                        <span class=\"product-new-label\">New</span>
                    </div>
                    <div class=\"product-content\">
                        <h3 class=\"title\"><a href=\"#\">Men's Blazer</a></h3>
                        <div class=\"price\">
                            \$63.50
                            <span>\$75.00</span>
                        </div>
                        <ul class=\"rating\">
                            <li class=\"fa fa-star\"></li>
                            <li class=\"fa fa-star\"></li>
                            <li class=\"fa fa-star\"></li>
                            <li class=\"fa fa-star disable\"></li>
                            <li class=\"fa fa-star disable\"></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

{% endblock %}", "index.html.twig", "/var/www/html/shoplo-test/templates/index.html.twig");
    }
}
