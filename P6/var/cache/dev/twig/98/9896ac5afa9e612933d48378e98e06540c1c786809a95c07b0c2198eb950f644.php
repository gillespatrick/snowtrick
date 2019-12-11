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
\t<a class=\"navbar-brand\" href=\"";
        // line 2
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home");
        echo "\">SNOWMASS</a>
\t<button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarColor03\" aria-controls=\"navbarColor03\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
\t\t<span class=\"navbar-toggler-icon\"></span>
\t</button>

\t<div class=\"collapse navbar-collapse\" id=\"navbarColor03\">
\t\t<ul class=\"navbar-nav mr-auto\">



\t\t</ul>
\t\t<form class=\"form-inline my-2 my-lg-0\">
\t\t\t<ul class=\"navbar-nav mr-auto \">

\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t<a class=\"nav-link\" href=\"";
        // line 17
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home");
        echo "\">Home</a>
\t\t\t\t</li>

\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t<a class=\"nav-link\" href=\"";
        // line 21
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home");
        echo "\"> Tricks
\t\t\t\t\t</a>
\t\t\t\t</li>



\t\t\t\t";
        // line 27
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 27, $this->source); })()), "user", [], "any", false, false, false, 27)) {
            // line 28
            echo "
\t\t\t\t\t



\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t<a class=\"nav-link\" href=\"";
            // line 34
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user");
            echo "\"> My Profile
\t\t\t\t\t\t</a>
\t\t\t\t\t</li>

\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t<a class=\"nav-link\" href=\"";
            // line 39
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user_account_logout");
            echo "\">Logout</a>
\t\t\t\t\t</li>




\t\t\t\t";
        } else {
            // line 46
            echo "\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t<a class=\"nav-link\" href=\"";
            // line 47
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user_account");
            echo "\">Signin</a>
\t\t\t\t\t</li>

\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t<a class=\"nav-link\" href=\"";
            // line 51
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user_account_register");
            echo "\">Signup</a>
\t\t\t\t\t</li>

\t\t\t\t\t";
            // line 55
            echo "
\t\t\t\t\t


\t\t\t\t\t";
            // line 60
            echo "\t\t\t\t";
        }
        // line 61
        echo "

\t\t\t</ul>
\t\t</form>
\t</div>
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
        return array (  133 => 61,  130 => 60,  124 => 55,  118 => 51,  111 => 47,  108 => 46,  98 => 39,  90 => 34,  82 => 28,  80 => 27,  71 => 21,  64 => 17,  46 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<nav class=\"navbar navbar-expand-lg navbar-light bg-light\">
\t<a class=\"navbar-brand\" href=\"{{path('home')}}\">SNOWMASS</a>
\t<button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarColor03\" aria-controls=\"navbarColor03\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
\t\t<span class=\"navbar-toggler-icon\"></span>
\t</button>

\t<div class=\"collapse navbar-collapse\" id=\"navbarColor03\">
\t\t<ul class=\"navbar-nav mr-auto\">



\t\t</ul>
\t\t<form class=\"form-inline my-2 my-lg-0\">
\t\t\t<ul class=\"navbar-nav mr-auto \">

\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t<a class=\"nav-link\" href=\"{{path('home')}}\">Home</a>
\t\t\t\t</li>

\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t<a class=\"nav-link\" href=\"{{ path ('home') }}\"> Tricks
\t\t\t\t\t</a>
\t\t\t\t</li>



\t\t\t\t{% if app.user %}

\t\t\t\t\t



\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t<a class=\"nav-link\" href=\"{{ path ('user')}}\"> My Profile
\t\t\t\t\t\t</a>
\t\t\t\t\t</li>

\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t<a class=\"nav-link\" href=\"{{path('user_account_logout')}}\">Logout</a>
\t\t\t\t\t</li>




\t\t\t\t{% else %}
\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t<a class=\"nav-link\" href=\"{{path ('user_account')}}\">Signin</a>
\t\t\t\t\t</li>

\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t<a class=\"nav-link\" href=\"{{path ('user_account_register')}}\">Signup</a>
\t\t\t\t\t</li>

\t\t\t\t\t{##}

\t\t\t\t\t


\t\t\t\t\t{##}
\t\t\t\t{% endif %}


\t\t\t</ul>
\t\t</form>
\t</div>
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

    <a class=\"nav-link\" href=\"{{path ('user_account_logout')}}\">LOGOUT</a>



     <li class=\"nav-item dropdown\">
                    <a class=\"nav-link dropdown-toggle\" href=\"#\" data-toggle=\"dropdown\" id=\"accountDropdownLink\" aria-haspopup=\"true\" aria-expanded=\"false\">
                        <img src=\"#\" class=\"avatar avatar-mini\" >
                       {{app.user.username}}
                    </a>

                    <div class=\"btn dropdown-menu dropdown-menu-right\" aria-labelledby=\"accountDropdownLink\">
                        <a class=\"dropdown-item\" href=\"#\">AAAAA</a>
                        <div class=\"dropdown-divider\"></div>
                        <a class=\"dropdown-item\" href=\"#\">BBBBB</a>
                    </div>
                </li>




</div>#}
", "part/header.html.twig", "/home/gilles/DEV/snowtrick/P6/templates/part/header.html.twig");
    }
}
