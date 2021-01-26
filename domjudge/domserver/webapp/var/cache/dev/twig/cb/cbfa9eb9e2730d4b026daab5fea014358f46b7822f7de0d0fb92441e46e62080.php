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

/* partials/menu_change_contest.html.twig */
class __TwigTemplate_489322e5db80ac873fda256bca3b128d1a769dc8d160dbab04a4b01d21059e21 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "partials/menu_change_contest.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "partials/menu_change_contest.html.twig"));

        // line 1
        echo "<li class=\"nav-item dropdown\">
    <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"navbarDropdownContests\" role=\"button\" data-toggle=\"dropdown\"
       aria-haspopup=\"true\" aria-expanded=\"false\">
        <i class=\"fas fa-trophy\"></i> ";
        // line 4
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["contest"] ?? null), "shortname", [], "any", true, true, false, 4)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["contest"] ?? null), "shortname", [], "any", false, false, false, 4), "no contest")) : ("no contest")), "html", null, true);
        echo "
    </a>
    <div class=\"dropdown-menu scrollable-menu\" aria-labelledby=\"navbarDropdown\">
        <a class=\"dropdown-item disabled\" href=\"#\">Change Contest</a>
        ";
        // line 8
        if (((isset($context["show_no_contest"]) || array_key_exists("show_no_contest", $context) ? $context["show_no_contest"] : (function () { throw new RuntimeError('Variable "show_no_contest" does not exist.', 8, $this->source); })()) &&  !twig_test_empty((isset($context["contest"]) || array_key_exists("contest", $context) ? $context["contest"] : (function () { throw new RuntimeError('Variable "contest" does not exist.', 8, $this->source); })())))) {
            // line 9
            echo "            <a class=\"dropdown-item\" href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath((isset($context["change_path"]) || array_key_exists("change_path", $context) ? $context["change_path"] : (function () { throw new RuntimeError('Variable "change_path" does not exist.', 9, $this->source); })()), ["contestId" =>  -1]), "html", null, true);
            echo "\">No contest</a>
            <div class=\"dropdown-divider\"></div>
        ";
        }
        // line 12
        echo "        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_array_filter((isset($context["contests"]) || array_key_exists("contests", $context) ? $context["contests"] : (function () { throw new RuntimeError('Variable "contests" does not exist.', 12, $this->source); })()), function ($__c__) use ($context) { $context["c"] = $__c__; return ($context["c"] != (isset($context["contest"]) || array_key_exists("contest", $context) ? $context["contest"] : (function () { throw new RuntimeError('Variable "contest" does not exist.', 12, $this->source); })())); }));
        foreach ($context['_seq'] as $context["_key"] => $context["c"]) {
            // line 13
            echo "            <a class=\"dropdown-item\"
               href=\"";
            // line 14
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath((isset($context["change_path"]) || array_key_exists("change_path", $context) ? $context["change_path"] : (function () { throw new RuntimeError('Variable "change_path" does not exist.', 14, $this->source); })()), ["contestId" => twig_get_attribute($this->env, $this->source, $context["c"], "cid", [], "any", false, false, false, 14)]), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["c"], "shortname", [], "any", false, false, false, 14), "html", null, true);
            echo "</a>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['c'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 16
        echo "    </div>
</li>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "partials/menu_change_contest.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  82 => 16,  72 => 14,  69 => 13,  64 => 12,  57 => 9,  55 => 8,  48 => 4,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<li class=\"nav-item dropdown\">
    <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"navbarDropdownContests\" role=\"button\" data-toggle=\"dropdown\"
       aria-haspopup=\"true\" aria-expanded=\"false\">
        <i class=\"fas fa-trophy\"></i> {{ contest.shortname|default('no contest') }}
    </a>
    <div class=\"dropdown-menu scrollable-menu\" aria-labelledby=\"navbarDropdown\">
        <a class=\"dropdown-item disabled\" href=\"#\">Change Contest</a>
        {% if show_no_contest and contest is not empty %}
            <a class=\"dropdown-item\" href=\"{{ path(change_path, {'contestId': -1}) }}\">No contest</a>
            <div class=\"dropdown-divider\"></div>
        {% endif %}
        {% for c in contests | filter(c => c != contest) %}
            <a class=\"dropdown-item\"
               href=\"{{ path(change_path, {'contestId': c.cid}) }}\">{{ c.shortname }}</a>
        {% endfor %}
    </div>
</li>
", "partials/menu_change_contest.html.twig", "/opt/domjudge/domserver/webapp/templates/partials/menu_change_contest.html.twig");
    }
}
