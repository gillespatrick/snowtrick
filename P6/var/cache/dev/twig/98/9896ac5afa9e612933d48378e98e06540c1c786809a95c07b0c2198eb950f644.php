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

/* part/header.html.twig */
class __TwigTemplate_f214c0f413623c85242e2257693619b7c86bde545104ab5e77f53dc5585aa4b7 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "part/header.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "part/header.html.twig"));

        // line 1
        echo "<nav class=\"navbar navbar-expand-lg navbar-light bg-light\">
    <a class=\"navbar-brand\" href=\"";
        // line 2
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home");
        echo "\">SNOWMASS</a>
    <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarColor03\" aria-controls=\"navbarColor03\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
        <span class=\"navbar-toggler-icon\"></span>
    </button>

    <div class=\"collapse navbar-collapse\" id=\"navbarColor03\">
        <ul class=\"navbar-nav mr-auto\">
            <li class=\"nav-item\">
                <a class=\"nav-link\" href=\"";
        // line 10
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("add_trick");
        echo "\">ADD TRICK
                </a>
            </li>
            <li class=\"dropdown\">
                <a class=\"nav-link\" href=\"#\">ADD CATEGORY</a>

            </li>
        </ul>
        <form class=\"form-inline my-2 my-lg-0\">
            <ul class=\"navbar-nav mr-auto\">

                <li class=\"nav-item\">
                    <a class=\"nav-link\" href=\"";
        // line 22
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home");
        echo "\">HOME</a>
                </li>

                <li class=\"nav-item\">
                    <a class=\"nav-link\" href=\"";
        // line 26
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("tricks");
        echo "\">TRICKS</a>
                </li>

                <li class=\"nav-item\">
                    <a class=\"nav-link\" href=\"#\">SIGNIN</a>
                </li>

                <li class=\"nav-item\">
                    <a class=\"nav-link\" href=\"#\">SIGNUP</a>
                </li>

            </ul>
        </form>
    </div>
</nav>


";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "part/header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  79 => 26,  72 => 22,  57 => 10,  46 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<nav class=\"navbar navbar-expand-lg navbar-light bg-light\">
    <a class=\"navbar-brand\" href=\"{{path('home')}}\">SNOWMASS</a>
    <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarColor03\" aria-controls=\"navbarColor03\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
        <span class=\"navbar-toggler-icon\"></span>
    </button>

    <div class=\"collapse navbar-collapse\" id=\"navbarColor03\">
        <ul class=\"navbar-nav mr-auto\">
            <li class=\"nav-item\">
                <a class=\"nav-link\" href=\"{{path('add_trick')}}\">ADD TRICK
                </a>
            </li>
            <li class=\"dropdown\">
                <a class=\"nav-link\" href=\"#\">ADD CATEGORY</a>

            </li>
        </ul>
        <form class=\"form-inline my-2 my-lg-0\">
            <ul class=\"navbar-nav mr-auto\">

                <li class=\"nav-item\">
                    <a class=\"nav-link\" href=\"{{path('home')}}\">HOME</a>
                </li>

                <li class=\"nav-item\">
                    <a class=\"nav-link\" href=\"{{path('tricks')}}\">TRICKS</a>
                </li>

                <li class=\"nav-item\">
                    <a class=\"nav-link\" href=\"#\">SIGNIN</a>
                </li>

                <li class=\"nav-item\">
                    <a class=\"nav-link\" href=\"#\">SIGNUP</a>
                </li>

            </ul>
        </form>
    </div>
</nav>


{#<div class=\"navbar-mobile col-xs-12 navbar-inverse navbar-fixed-bottom\" style=\"background-image: f358\">
    <div class=\"row\" id=\"bottomNav\">
        <div class=\"col-xs-4 text-center\">
            <a href=\"#\">
                <i class=\"fas fa-home\"></i>
            </a>
        </div>
        <div class=\"col-xs-4 text-center\">
            <a class=\"navbar-link\" href=\"#\">
                <i class=\"fas fa-bookmark\"></i>
            </a>

        </div>
        <div class=\"col-xs-4 text-center\">
            <a href=\"#\">
                <i class=\"fas fa-sign-in-alt\"></i>
            </a>
        </div>

    </div>


</div>#}
", "part/header.html.twig", "/home/gilles/DEV/snowtrick/P6/templates/part/header.html.twig");
    }
}
