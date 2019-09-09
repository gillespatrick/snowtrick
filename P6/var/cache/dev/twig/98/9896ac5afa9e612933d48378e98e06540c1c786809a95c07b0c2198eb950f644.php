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
    <a class=\"navbar-brand\" href=\"/\">SNOWMASS</a>
    <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarColor03\" aria-controls=\"navbarColor03\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
        <span class=\"navbar-toggler-icon\"></span>
    </button>

    <div class=\"collapse navbar-collapse\" id=\"navbarColor03\">
        <ul class=\"navbar-nav mr-auto\">
            <li class=\"nav-item\">
                <a class=\"nav-link\" href=\"#\">ADD TRICK </a>
            </li>
             <li class=\"dropdown\" >
                <a class=\"nav-link\" href=\"";
        // line 13
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("category_new");
        echo "\">ADD CATEGORY</a>
            
            </li>
        </ul>
        <form class=\"form-inline my-2 my-lg-0\">
            <li class=\"nav-item\">
                <a class=\"nav-link\" href=\"#\">HOME</a>
            </li>

            <li class=\"nav-item\">
                <a class=\"nav-link\" href=\"#\">TRICKS</a>
            </li>

            <li class=\"nav-item\">
                <a class=\"nav-link\" href=\"#\">SIGNIN</a>
            </li>

            <li class=\"nav-item\">
                <a class=\"nav-link\" href=\"#\">SIGNUP</a>
            </li>
        </form>
    </div>
</nav>


<div class=\"container mt-3\">

    <div class=\"jumbotron\">
        <h1 class=\"display-3\">Welcome on SnowMass!</h1>
        <p class=\"lead text-warning\">All things you want to know about snowtrick are here.</p>
        
    </div>
</div>
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
        return array (  57 => 13,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<nav class=\"navbar navbar-expand-lg navbar-light bg-light\">
    <a class=\"navbar-brand\" href=\"/\">SNOWMASS</a>
    <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarColor03\" aria-controls=\"navbarColor03\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
        <span class=\"navbar-toggler-icon\"></span>
    </button>

    <div class=\"collapse navbar-collapse\" id=\"navbarColor03\">
        <ul class=\"navbar-nav mr-auto\">
            <li class=\"nav-item\">
                <a class=\"nav-link\" href=\"#\">ADD TRICK </a>
            </li>
             <li class=\"dropdown\" >
                <a class=\"nav-link\" href=\"{{ path('category_new')}}\">ADD CATEGORY</a>
            
            </li>
        </ul>
        <form class=\"form-inline my-2 my-lg-0\">
            <li class=\"nav-item\">
                <a class=\"nav-link\" href=\"#\">HOME</a>
            </li>

            <li class=\"nav-item\">
                <a class=\"nav-link\" href=\"#\">TRICKS</a>
            </li>

            <li class=\"nav-item\">
                <a class=\"nav-link\" href=\"#\">SIGNIN</a>
            </li>

            <li class=\"nav-item\">
                <a class=\"nav-link\" href=\"#\">SIGNUP</a>
            </li>
        </form>
    </div>
</nav>


<div class=\"container mt-3\">

    <div class=\"jumbotron\">
        <h1 class=\"display-3\">Welcome on SnowMass!</h1>
        <p class=\"lead text-warning\">All things you want to know about snowtrick are here.</p>
        
    </div>
</div>
", "part/header.html.twig", "/home/gilles/DEV/snowtrick/P6/templates/part/header.html.twig");
    }
}
