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

/* user_account/login.html.twig */
class __TwigTemplate_4f4ad794d2838c239aa1e7eef0f36a872ac2e8da85120bc8b6e9a2e54beadcb2 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user_account/login.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user_account/login.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "user_account/login.html.twig", 1);
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

        echo "LOGIN
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

     <div class=\"jumbotron\" style=\"background-image: url(/images/login.jpg)\">
            <h1 class=\"display-3 text-white\">Sign in to your account</h1>
            <p class=\"lead text-warning\"></p>

        </div>

        <div class=\"row\">
            <div class=\"col-md-3\">&nbsp;</div>
                <div class=\"col-md-6\">

                    <div class=\"bg-light py-3 px-3\">
                        <h1>
                            CONNECT</h1><br>

                            ";
        // line 25
        if ((isset($context["hasError"]) || array_key_exists("hasError", $context) ? $context["hasError"] : (function () { throw new RuntimeError('Variable "hasError" does not exist.', 25, $this->source); })())) {
            // line 26
            echo "
                                <div class=\"alert alert-danger\">
                                Incorrect username or password. Please try again!
                                </div>
                            ";
        }
        // line 31
        echo "                        <form action=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user_account");
        echo "\" method =\"post\">
                            <div class=\"form-group\">
                                <labe for=\"usename\">
                                    
                                </label>
                                <input type=\"text\" required value = \"";
        // line 36
        echo twig_escape_filter($this->env, (isset($context["name"]) || array_key_exists("name", $context) ? $context["name"] : (function () { throw new RuntimeError('Variable "name" does not exist.', 36, $this->source); })()), "html", null, true);
        echo "\" name=\"_username\" id=\"username\" class=\"form-control\" placeholder=\"Your username...\">

                            </div><br>

                            <div class=\"form-group\">
                                <labe for=\"password\">
                                   
                                </label>
                                <input type=\"password\"  required name=\"_password\" id=\"password\" class=\"form-control\" placeholder=\"Your password...\">

                            </div><br>

                            <center>
                            <div class=\"form-group\">
                                <button type=\"submit\" class=\" btn btn-success btn-lg\"><i class=\"fas fa-sign-in-alt\"></i>
                                    Sign in </button>

                                    

                            </div>
                             <div class=\"form-group\">
                            

                                    <a href =\"#\" > Forgot password ?</a><br>
                                    <a href =\"#\" > Create an account !</a>

                            </div></center>
                            </form>
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
        return "user_account/login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  127 => 36,  118 => 31,  111 => 26,  109 => 25,  89 => 7,  79 => 6,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}LOGIN
{% endblock %}

{% block body %}


    <div class=\"container mt-5\">

     <div class=\"jumbotron\" style=\"background-image: url(/images/login.jpg)\">
            <h1 class=\"display-3 text-white\">Sign in to your account</h1>
            <p class=\"lead text-warning\"></p>

        </div>

        <div class=\"row\">
            <div class=\"col-md-3\">&nbsp;</div>
                <div class=\"col-md-6\">

                    <div class=\"bg-light py-3 px-3\">
                        <h1>
                            CONNECT</h1><br>

                            {% if hasError %}

                                <div class=\"alert alert-danger\">
                                Incorrect username or password. Please try again!
                                </div>
                            {% endif %}
                        <form action=\"{{ path ('user_account')}}\" method =\"post\">
                            <div class=\"form-group\">
                                <labe for=\"usename\">
                                    
                                </label>
                                <input type=\"text\" required value = \"{{name}}\" name=\"_username\" id=\"username\" class=\"form-control\" placeholder=\"Your username...\">

                            </div><br>

                            <div class=\"form-group\">
                                <labe for=\"password\">
                                   
                                </label>
                                <input type=\"password\"  required name=\"_password\" id=\"password\" class=\"form-control\" placeholder=\"Your password...\">

                            </div><br>

                            <center>
                            <div class=\"form-group\">
                                <button type=\"submit\" class=\" btn btn-success btn-lg\"><i class=\"fas fa-sign-in-alt\"></i>
                                    Sign in </button>

                                    

                            </div>
                             <div class=\"form-group\">
                            

                                    <a href =\"#\" > Forgot password ?</a><br>
                                    <a href =\"#\" > Create an account !</a>

                            </div></center>
                            </form>
                    </div>
                </div>

            
        </div>

    </div>


        {% endblock %}
", "user_account/login.html.twig", "/home/gilles/DEV/snowtrick/P6/templates/user_account/login.html.twig");
    }
}
