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

/* jury/refresh_scoreboard.html.twig */
class __TwigTemplate_217637c8363c838c648eafdf3633dafe00f027254f68202325fc8e76ef7b8930 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "jury/refresh_scoreboard.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "jury/refresh_scoreboard.html.twig"));

        // line 1
        echo "<div class=\"alert alert-warning\">
    <strong>Warning:</strong> Refresh scoreboard cache
    <hr>
    <p>";
        // line 4
        echo twig_escape_filter($this->env, (isset($context["message"]) || array_key_exists("message", $context) ? $context["message"] : (function () { throw new RuntimeError('Variable "message" does not exist.', 4, $this->source); })()), "html", null, true);
        echo "</p>
    <form action=\"";
        // line 5
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_refresh_cache");
        echo "\" method=\"POST\">
        ";
        // line 6
        if ( !twig_test_empty((isset($context["current_contest"]) || array_key_exists("current_contest", $context) ? $context["current_contest"] : (function () { throw new RuntimeError('Variable "current_contest" does not exist.', 6, $this->source); })()))) {
            // line 7
            echo "            <input type=\"hidden\" name=\"cid\" value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["current_contest"]) || array_key_exists("current_contest", $context) ? $context["current_contest"] : (function () { throw new RuntimeError('Variable "current_contest" does not exist.', 7, $this->source); })()), "cid", [], "any", false, false, false, 7), "html", null, true);
            echo "\"/>
        ";
        }
        // line 9
        echo "        <input type=\"submit\" name=\"refresh\" value=\"Recalculate caches now\" class=\"btn btn-primary\"/>
    </form>
</div>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "jury/refresh_scoreboard.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  64 => 9,  58 => 7,  56 => 6,  52 => 5,  48 => 4,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"alert alert-warning\">
    <strong>Warning:</strong> Refresh scoreboard cache
    <hr>
    <p>{{ message }}</p>
    <form action=\"{{ path('jury_refresh_cache') }}\" method=\"POST\">
        {% if current_contest is not empty %}
            <input type=\"hidden\" name=\"cid\" value=\"{{ current_contest.cid }}\"/>
        {% endif %}
        <input type=\"submit\" name=\"refresh\" value=\"Recalculate caches now\" class=\"btn btn-primary\"/>
    </form>
</div>
", "jury/refresh_scoreboard.html.twig", "/opt/domjudge/domserver/webapp/templates/jury/refresh_scoreboard.html.twig");
    }
}
