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

        // line 4
        echo "    WELCOME
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 7
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "
    <div class=\"container\">

    <h1 class=\"text-info\"> THOSE ALL TRICKS </h1><br><br>

        <div class='row'>
            

            

            <div class='col-md-4 text-success'>
                <div class='card bg-light mb-3'>

                    <img src=\"http://placehold.it/1000x400\" alt=\"\" style=\" height:200px; width: 100%; display:block\">

                    <div class=\"card-body\">
                        <h4 class=\"card-title\">
                           YES! C'EST TRANQUILEMENT TRANQUILLE
                        </h4>


                    </div>

                </div>

            </div>


            <div class='col-md-4 text-info'>
                <div class='card bg-light mb-3'>

                    <img src=\"http://placehold.it/1000x400\" alt=\"\" style=\" height:200px; width: 100%; display:block\">

                    <div class=\"card-body\">
                        <h4 class=\"card-title\">
                            YES MAMAN! C'EST CADEAU
                        </h4>


                    </div>

                </div>

            </div>


            <div class='col-md-4 text-success'>
                <div class='card bg-light mb-3'>

                    <img src=\"http://placehold.it/1000x400\" alt=\"\" style=\" height:200px; width: 100%; display:block\">

                    <div class=\"card-body\">
                        <h4 class=\"card-title\">
                           YES PAPA! C'EST CADEAU
                        </h4>


                    </div>

                </div>

            </div>


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
        return array (  90 => 8,  80 => 7,  69 => 4,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}
    WELCOME
{% endblock %}

{% block body %}

    <div class=\"container\">

    <h1 class=\"text-info\"> THOSE ALL TRICKS </h1><br><br>

        <div class='row'>
            

            

            <div class='col-md-4 text-success'>
                <div class='card bg-light mb-3'>

                    <img src=\"http://placehold.it/1000x400\" alt=\"\" style=\" height:200px; width: 100%; display:block\">

                    <div class=\"card-body\">
                        <h4 class=\"card-title\">
                           YES! C'EST TRANQUILEMENT TRANQUILLE
                        </h4>


                    </div>

                </div>

            </div>


            <div class='col-md-4 text-info'>
                <div class='card bg-light mb-3'>

                    <img src=\"http://placehold.it/1000x400\" alt=\"\" style=\" height:200px; width: 100%; display:block\">

                    <div class=\"card-body\">
                        <h4 class=\"card-title\">
                            YES MAMAN! C'EST CADEAU
                        </h4>


                    </div>

                </div>

            </div>


            <div class='col-md-4 text-success'>
                <div class='card bg-light mb-3'>

                    <img src=\"http://placehold.it/1000x400\" alt=\"\" style=\" height:200px; width: 100%; display:block\">

                    <div class=\"card-body\">
                        <h4 class=\"card-title\">
                           YES PAPA! C'EST CADEAU
                        </h4>


                    </div>

                </div>

            </div>


        </div>


    </div>
{% endblock %}
", "home/home.html.twig", "/home/gilles/DEV/snowtrick/P6/templates/home/home.html.twig");
    }
}
