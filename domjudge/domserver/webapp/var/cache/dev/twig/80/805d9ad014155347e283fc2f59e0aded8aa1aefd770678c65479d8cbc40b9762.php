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

/* partials/menu_login_logout_button.html.twig */
class __TwigTemplate_6c8a9e464ed1433e7d9179a487fd81773e277bfec335fd3fc9dc30bae9373b60 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "partials/menu_login_logout_button.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "partials/menu_login_logout_button.html.twig"));

        // line 1
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("IS_AUTHENTICATED_FULLY")) {
            // line 2
            echo "    <a class=\"nav-link justify-content-center\" href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("logout");
            echo "\"
    ";
            // line 3
            if ((isset($context["confirmLogout"]) || array_key_exists("confirmLogout", $context))) {
                // line 4
                echo "        onclick=\"return confirmLogout();\"
    ";
            }
            // line 5
            echo ">
        <button type=\"button\" class=\"btn btn-outline-info btn-sm\">
            <i class=\"fas fa-sign-out-alt\"></i> Logout
        </button>
    </a>
";
        } else {
            // line 11
            echo "    <a class=\"nav-link justify-content-center\" href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("login");
            echo "\">
        <button type=\"button\" class=\"btn btn-info btn-sm\">
            <i class=\"fas fa-sign-in-alt\"></i> Login
        </button>
    </a>
";
        }
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "partials/menu_login_logout_button.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  64 => 11,  56 => 5,  52 => 4,  50 => 3,  45 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% if is_granted('IS_AUTHENTICATED_FULLY') %}
    <a class=\"nav-link justify-content-center\" href=\"{{ path('logout') }}\"
    {% if confirmLogout is defined %}
        onclick=\"return confirmLogout();\"
    {% endif %}>
        <button type=\"button\" class=\"btn btn-outline-info btn-sm\">
            <i class=\"fas fa-sign-out-alt\"></i> Logout
        </button>
    </a>
{% else %}
    <a class=\"nav-link justify-content-center\" href=\"{{ path('login') }}\">
        <button type=\"button\" class=\"btn btn-info btn-sm\">
            <i class=\"fas fa-sign-in-alt\"></i> Login
        </button>
    </a>
{% endif %}
", "partials/menu_login_logout_button.html.twig", "/opt/domjudge/domserver/webapp/templates/partials/menu_login_logout_button.html.twig");
    }
}
