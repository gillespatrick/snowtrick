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

/* part/footer.html.twig */
class __TwigTemplate_09f67f0b8b09d559fffe05acb9d0fe3b552c39ed8c82d1bdc8280aca9e862c92 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "part/footer.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "part/footer.html.twig"));

        // line 1
        echo "<!-- Footer -->
<br><br>

<!-- <script src=\"https://code.jquery.com/jquery-3.4.1.min.js\" integrity=\"sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=\" crossorigin=\"anonymous\"></script> -->
<br>
<!-- Copyright Section -->
<section class=\"copyright py-4 text-center text-white\">
    <div class=\"container\">
        <small>Copyright &copy; Snowmass-2019 -
            <a href=\"https://github.com/gillespatrick\">
                <i class=\"fab fa-github-alt fa-1x\"></i>
            </small>
        </a>
        -
        <a href=\"https://www.linkedin.com/in/gillespatrick\">
            <i class=\"fab fa-linkedin fa-1x\"></i>
        </small>
    </a>

</div></section>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "part/footer.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!-- Footer -->
<br><br>

<!-- <script src=\"https://code.jquery.com/jquery-3.4.1.min.js\" integrity=\"sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=\" crossorigin=\"anonymous\"></script> -->
<br>
<!-- Copyright Section -->
<section class=\"copyright py-4 text-center text-white\">
    <div class=\"container\">
        <small>Copyright &copy; Snowmass-2019 -
            <a href=\"https://github.com/gillespatrick\">
                <i class=\"fab fa-github-alt fa-1x\"></i>
            </small>
        </a>
        -
        <a href=\"https://www.linkedin.com/in/gillespatrick\">
            <i class=\"fab fa-linkedin fa-1x\"></i>
        </small>
    </a>

</div></section>{#<!-- Scroll to Top Button (Only visible on small and extra-small screen sizes) -->
    <div class=\"scroll-to-top d-lg-none position-fixed \">
        <a class=\"js-scroll-trigger d-block text-center text-white rounded\" href=\"#page-top\">
            <i class=\"far fa-arrow-circle-up\"></i>
        </a>
    </div>#}
", "part/footer.html.twig", "/home/gilles/DEV/snowtrick/P6/templates/part/footer.html.twig");
    }
}
