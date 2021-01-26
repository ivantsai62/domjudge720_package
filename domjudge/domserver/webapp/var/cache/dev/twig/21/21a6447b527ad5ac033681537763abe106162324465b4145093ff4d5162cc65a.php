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

/* team/partials/clarification.html.twig */
class __TwigTemplate_8c753e105251a230e5c578bee481f110531fc4d2526145403418f5cc0fa1cb5b extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "team/partials/clarification.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "team/partials/clarification.html.twig"));

        // line 1
        echo "<div class=\"card mb-3\">
    <div class=\"card-header\">
        <div class=\"row\">
            <div class=\"col-sm\">
                Subject:
                ";
        // line 6
        if (twig_get_attribute($this->env, $this->source, (isset($context["clarification"]) || array_key_exists("clarification", $context) ? $context["clarification"] : (function () { throw new RuntimeError('Variable "clarification" does not exist.', 6, $this->source); })()), "problem", [], "any", false, false, false, 6)) {
            // line 7
            echo "                    Problem ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["clarification"]) || array_key_exists("clarification", $context) ? $context["clarification"] : (function () { throw new RuntimeError('Variable "clarification" does not exist.', 7, $this->source); })()), "problem", [], "any", false, false, false, 7), "contestProblems", [], "any", false, false, false, 7), "first", [], "any", false, false, false, 7), "shortname", [], "any", false, false, false, 7), "html", null, true);
            echo ": ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["clarification"]) || array_key_exists("clarification", $context) ? $context["clarification"] : (function () { throw new RuntimeError('Variable "clarification" does not exist.', 7, $this->source); })()), "problem", [], "any", false, false, false, 7), "name", [], "any", false, false, false, 7), "html", null, true);
            echo "
                ";
        } elseif (twig_get_attribute($this->env, $this->source,         // line 8
(isset($context["clarification"]) || array_key_exists("clarification", $context) ? $context["clarification"] : (function () { throw new RuntimeError('Variable "clarification" does not exist.', 8, $this->source); })()), "category", [], "any", false, false, false, 8)) {
            // line 9
            echo "                    ";
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["categories"] ?? null), twig_get_attribute($this->env, $this->source, (isset($context["clarification"]) || array_key_exists("clarification", $context) ? $context["clarification"] : (function () { throw new RuntimeError('Variable "clarification" does not exist.', 9, $this->source); })()), "category", [], "any", false, false, false, 9), [], "array", true, true, false, 9)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["categories"] ?? null), twig_get_attribute($this->env, $this->source, (isset($context["clarification"]) || array_key_exists("clarification", $context) ? $context["clarification"] : (function () { throw new RuntimeError('Variable "clarification" does not exist.', 9, $this->source); })()), "category", [], "any", false, false, false, 9), [], "array", false, false, false, 9), "general")) : ("general")), "html", null, true);
            echo "
                ";
        } else {
            // line 11
            echo "                    General issue
                ";
        }
        // line 13
        echo "            </div>
            <div class=\"col-sm text-muted text-right\">";
        // line 14
        echo $this->extensions['App\Twig\TwigExtension']->printtimeHover(twig_get_attribute($this->env, $this->source, (isset($context["clarification"]) || array_key_exists("clarification", $context) ? $context["clarification"] : (function () { throw new RuntimeError('Variable "clarification" does not exist.', 14, $this->source); })()), "submittime", [], "any", false, false, false, 14), twig_get_attribute($this->env, $this->source, (isset($context["clarification"]) || array_key_exists("clarification", $context) ? $context["clarification"] : (function () { throw new RuntimeError('Variable "clarification" does not exist.', 14, $this->source); })()), "contest", [], "any", false, false, false, 14));
        echo "</div>
        </div>
    </div>
    <div class=\"card-body\">
        <div class=\"card-title\">
            <div class=\"row\">
                <div class=\"col-sm\">
                    From:
                    ";
        // line 22
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["clarification"]) || array_key_exists("clarification", $context) ? $context["clarification"] : (function () { throw new RuntimeError('Variable "clarification" does not exist.', 22, $this->source); })()), "sender", [], "any", false, false, false, 22))) {
            // line 23
            echo "                        ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["clarification"]) || array_key_exists("clarification", $context) ? $context["clarification"] : (function () { throw new RuntimeError('Variable "clarification" does not exist.', 23, $this->source); })()), "sender", [], "any", false, false, false, 23), "name", [], "any", false, false, false, 23), "html", null, true);
            echo " (t";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["clarification"]) || array_key_exists("clarification", $context) ? $context["clarification"] : (function () { throw new RuntimeError('Variable "clarification" does not exist.', 23, $this->source); })()), "sender", [], "any", false, false, false, 23), "teamid", [], "any", false, false, false, 23), "html", null, true);
            echo ")
                    ";
        } else {
            // line 25
            echo "                        Jury
                    ";
        }
        // line 27
        echo "                </div>
                <div class=\"col-sm\">To:
                    ";
        // line 29
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["clarification"]) || array_key_exists("clarification", $context) ? $context["clarification"] : (function () { throw new RuntimeError('Variable "clarification" does not exist.', 29, $this->source); })()), "recipient", [], "any", false, false, false, 29))) {
            // line 30
            echo "                        ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["clarification"]) || array_key_exists("clarification", $context) ? $context["clarification"] : (function () { throw new RuntimeError('Variable "clarification" does not exist.', 30, $this->source); })()), "recipient", [], "any", false, false, false, 30), "name", [], "any", false, false, false, 30), "html", null, true);
            echo " (t";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["clarification"]) || array_key_exists("clarification", $context) ? $context["clarification"] : (function () { throw new RuntimeError('Variable "clarification" does not exist.', 30, $this->source); })()), "recipient", [], "any", false, false, false, 30), "teamid", [], "any", false, false, false, 30), "html", null, true);
            echo ")
                    ";
        } elseif ( !(null === twig_get_attribute($this->env, $this->source,         // line 31
(isset($context["clarification"]) || array_key_exists("clarification", $context) ? $context["clarification"] : (function () { throw new RuntimeError('Variable "clarification" does not exist.', 31, $this->source); })()), "sender", [], "any", false, false, false, 31))) {
            // line 32
            echo "                        Jury
                    ";
        } else {
            // line 34
            echo "                        <strong>All</strong>
                    ";
        }
        // line 36
        echo "                </div>
            </div>
        </div>

        <div class=\"card-text\">
            <pre class=\"output-text bg-light p-3\">";
        // line 41
        echo twig_escape_filter($this->env, $this->extensions['App\Twig\TwigExtension']->wrapUnquoted(twig_get_attribute($this->env, $this->source, (isset($context["clarification"]) || array_key_exists("clarification", $context) ? $context["clarification"] : (function () { throw new RuntimeError('Variable "clarification" does not exist.', 41, $this->source); })()), "body", [], "any", false, false, false, 41), 78), "html", null, true);
        echo "</pre>
        </div>
    </div>
</div>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "team/partials/clarification.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  129 => 41,  122 => 36,  118 => 34,  114 => 32,  112 => 31,  105 => 30,  103 => 29,  99 => 27,  95 => 25,  87 => 23,  85 => 22,  74 => 14,  71 => 13,  67 => 11,  61 => 9,  59 => 8,  52 => 7,  50 => 6,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"card mb-3\">
    <div class=\"card-header\">
        <div class=\"row\">
            <div class=\"col-sm\">
                Subject:
                {% if clarification.problem %}
                    Problem {{ clarification.problem.contestProblems.first.shortname }}: {{ clarification.problem.name }}
                {% elseif clarification.category %}
                    {{ categories[clarification.category]|default('general') }}
                {% else %}
                    General issue
                {% endif %}
            </div>
            <div class=\"col-sm text-muted text-right\">{{ clarification.submittime | printtimeHover(clarification.contest) }}</div>
        </div>
    </div>
    <div class=\"card-body\">
        <div class=\"card-title\">
            <div class=\"row\">
                <div class=\"col-sm\">
                    From:
                    {% if clarification.sender is not empty %}
                        {{ clarification.sender.name }} (t{{ clarification.sender.teamid }})
                    {% else %}
                        Jury
                    {% endif %}
                </div>
                <div class=\"col-sm\">To:
                    {% if clarification.recipient is not empty %}
                        {{ clarification.recipient.name }} (t{{ clarification.recipient.teamid }})
                    {% elseif clarification.sender is not null %}
                        Jury
                    {% else %}
                        <strong>All</strong>
                    {% endif %}
                </div>
            </div>
        </div>

        <div class=\"card-text\">
            <pre class=\"output-text bg-light p-3\">{{ clarification.body|wrapUnquoted(78) }}</pre>
        </div>
    </div>
</div>
", "team/partials/clarification.html.twig", "/opt/domjudge/domserver/webapp/templates/team/partials/clarification.html.twig");
    }
}
