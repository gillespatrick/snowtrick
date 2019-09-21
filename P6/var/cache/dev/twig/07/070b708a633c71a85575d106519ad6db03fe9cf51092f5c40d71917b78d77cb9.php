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

/* home/home.html.twig */
class __TwigTemplate_ab9e4ff879ba5deca74104c5fa6e9bbed96ac9d1d88c8d5ff3d603ca9fbf9785 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/home.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/home.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "home/home.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Hello HomeController!
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 6
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo "
    <div class=\"container mt-5\">
        <div class=\"jumbotron\" style=\"background-image: url(/images/snow.jpg)\">
            <h1 class=\"display-3\">Welcome on SnowMass!</h1>
            <p class=\"lead text-warning\">All things you want to know about snowtrick are here.</p>

        </div>
        <div class=\"text-right\">
            <a href=\"#\" id=\"back-bottom\" class=\"page-scroll\">

                <i class=\"far fa-arrow-alt-circle-down fa-2x\"></i>
            </a>
        </div>
        <h1>
            There are all my snowtrick list
        </h1><br>

        <div id=\"tricks\" class=\"row\">

            ";
        // line 26
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["tricks"]) || array_key_exists("tricks", $context) ? $context["tricks"] : (function () { throw new RuntimeError('Variable "tricks" does not exist.', 26, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["trick"]) {
            // line 27
            echo "                <div class=\"col-md-4\">
                    <div class=\"card bg-light mb-3\">

                        <img alt=\"Trick Picture\" src=\"";
            // line 30
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["trick"], "cover", [], "any", false, false, false, 30), "html", null, true);
            echo "\" style=\"height: 200px ;
                                                                                                                                                                                                                 width: 100% ; display: block\">

                        <div class=\"card-body\">


                            <a href=\"";
            // line 36
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("showdetail", ["slug" => twig_get_attribute($this->env, $this->source, $context["trick"], "slug", [], "any", false, false, false, 36)]), "html", null, true);
            echo "\">
                                <h4 class=\"card-title\">";
            // line 37
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["trick"], "name", [], "any", false, false, false, 37), "html", null, true);
            echo "</h4>
                            </a>

                            <p class=\"card-text\">
                                ";
            // line 41
            echo twig_slice($this->env, twig_get_attribute($this->env, $this->source, $context["trick"], "description", [], "any", false, false, false, 41), 0, 30);
            echo "
                            </p>
                        </div>

                        <a class=\"btn btn-secondary\" href=\"";
            // line 45
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("showdetail", ["slug" => twig_get_attribute($this->env, $this->source, $context["trick"], "slug", [], "any", false, false, false, 45)]), "html", null, true);
            echo "\">More details</a>
                    </div>


                </div>

            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trick'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 52
        echo "

        </div>

        <div class=\" container text-right\">
            <a href=\"#tricks\" id=\"back-top\" class=\"page-scroll\">
                <i class=\"far fa-arrow-alt-circle-up fa-2x\"></i>
            </a>
        </div>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "home/home.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  159 => 52,  146 => 45,  139 => 41,  132 => 37,  128 => 36,  119 => 30,  114 => 27,  110 => 26,  89 => 7,  79 => 6,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Hello HomeController!
{% endblock %}

{% block body %}

    <div class=\"container mt-5\">
        <div class=\"jumbotron\" style=\"background-image: url(/images/snow.jpg)\">
            <h1 class=\"display-3\">Welcome on SnowMass!</h1>
            <p class=\"lead text-warning\">All things you want to know about snowtrick are here.</p>

        </div>
        <div class=\"text-right\">
            <a href=\"#\" id=\"back-bottom\" class=\"page-scroll\">

                <i class=\"far fa-arrow-alt-circle-down fa-2x\"></i>
            </a>
        </div>
        <h1>
            There are all my snowtrick list
        </h1><br>

        <div id=\"tricks\" class=\"row\">

            {% for trick in tricks %}
                <div class=\"col-md-4\">
                    <div class=\"card bg-light mb-3\">

                        <img alt=\"Trick Picture\" src=\"{{ trick.cover}}\" style=\"height: 200px ;
                                                                                                                                                                                                                 width: 100% ; display: block\">

                        <div class=\"card-body\">


                            <a href=\"{{ path ('showdetail', {'slug': trick.slug}) }}\">
                                <h4 class=\"card-title\">{{trick.name}}</h4>
                            </a>

                            <p class=\"card-text\">
                                {{trick.description | slice(0, 30)| raw }}
                            </p>
                        </div>

                        <a class=\"btn btn-secondary\" href=\"{{ path ('showdetail', {'slug': trick.slug}) }}\">More details</a>
                    </div>


                </div>

            {% endfor %}


        </div>

        <div class=\" container text-right\">
            <a href=\"#tricks\" id=\"back-top\" class=\"page-scroll\">
                <i class=\"far fa-arrow-alt-circle-up fa-2x\"></i>
            </a>
        </div>
    </div>
{% endblock %}
", "home/home.html.twig", "/home/gilles/DEV/snowtrick/P6/templates/home/home.html.twig");
    }
}
