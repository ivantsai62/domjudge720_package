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

/* jury/export/results.html.twig */
class __TwigTemplate_32bf1d9ee26effaeb38049b63486f14c2af98a77932b02fd66d716d7685802ab extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "jury/export/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "jury/export/results.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "jury/export/results.html.twig"));

        $this->parent = $this->loadTemplate("jury/export/layout.html.twig", "jury/export/results.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h2>Awards</h2>
    <table class=\"table\">
        <thead>
        <tr>
            <th scope=\"col\">Place</th>
            <th scope=\"col\">Team</th>
            <th scope=\"col\">Award</th>
            <th scope=\"col\">Solved problems</th>
            <th scope=\"col\">Total time</th>
            <th scope=\"col\">Time of last submission</th>
        </tr>
        </thead>
        <tbody>
        ";
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["awarded"]) || array_key_exists("awarded", $context) ? $context["awarded"] : (function () { throw new RuntimeError('Variable "awarded" does not exist.', 17, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
            // line 18
            echo "            <tr>
                <th scope=\"row\">";
            // line 19
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["row"], "rank", [], "any", false, false, false, 19), "html", null, true);
            echo "</th>
                <th scope=\"row\">";
            // line 20
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["row"], "team", [], "any", false, false, false, 20), "html", null, true);
            echo "</th>
                <td>";
            // line 21
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["row"], "award", [], "any", false, false, false, 21), "html", null, true);
            echo "</td>
                <td>";
            // line 22
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["row"], "solved", [], "any", false, false, false, 22), "html", null, true);
            echo "</td>
                <td>";
            // line 23
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["row"], "total_time", [], "any", false, false, false, 23), "html", null, true);
            echo "</td>
                <td>";
            // line 24
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["row"], "max_time", [], "any", false, false, false, 24), "html", null, true);
            echo "</td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 27
        echo "        </tbody>
    </table>

    <h2>Other ranked teams</h2>
    <table class=\"table\">
        <thead>
        <tr>
            <th scope=\"col\">Rank</th>
            <th scope=\"col\">Team</th>
            <th scope=\"col\">Solved problems</th>
        </tr>
        </thead>
        <tbody>
        ";
        // line 40
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["ranked"]) || array_key_exists("ranked", $context) ? $context["ranked"] : (function () { throw new RuntimeError('Variable "ranked" does not exist.', 40, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
            // line 41
            echo "            <tr>
                <th scope=\"row\">";
            // line 42
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["row"], "rank", [], "any", false, false, false, 42), "html", null, true);
            echo "</th>
                <th scope=\"row\">";
            // line 43
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["row"], "team", [], "any", false, false, false, 43), "html", null, true);
            echo "</th>
                <td>";
            // line 44
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["row"], "solved", [], "any", false, false, false, 44), "html", null, true);
            echo "</td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 47
        echo "        </tbody>
    </table>

    <h2>Honorable mentions</h2>
    <table class=\"table\">
        <tbody>
        ";
        // line 53
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_array_batch((isset($context["honorable"]) || array_key_exists("honorable", $context) ? $context["honorable"] : (function () { throw new RuntimeError('Variable "honorable" does not exist.', 53, $this->source); })()), 2));
        foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
            // line 54
            echo "            <tr>
                ";
            // line 55
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["row"]);
            foreach ($context['_seq'] as $context["_key"] => $context["team"]) {
                // line 56
                echo "                    <td>";
                echo twig_escape_filter($this->env, $context["team"], "html", null, true);
                echo "</td>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['team'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 58
            echo "            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 60
        echo "        </tbody>
    </table>

    <h2>Region winners</h2>
    <table class=\"table\">
        <thead>
        <tr>
            <th scope=\"col\">Region</th>
            <th scope=\"col\">Team</th>
        </tr>
        </thead>
        <tbody>
        ";
        // line 72
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["regionWinners"]) || array_key_exists("regionWinners", $context) ? $context["regionWinners"] : (function () { throw new RuntimeError('Variable "regionWinners" does not exist.', 72, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
            // line 73
            echo "            <tr>
                <th scope=\"row\">";
            // line 74
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["row"], "group", [], "any", false, false, false, 74), "html", null, true);
            echo "</th>
                <td>";
            // line 75
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["row"], "team", [], "any", false, false, false, 75), "html", null, true);
            echo "</td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 78
        echo "        </tbody>
    </table>

    <h2>First to solve</h2>
    <table class=\"table\">
        <thead>
        <tr>
            <th scope=\"col\">Problem</th>
            <th scope=\"col\">Team</th>
            <th scope=\"col\">Time</th>
        </tr>
        </thead>
        <tbody>
        ";
        // line 91
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["firstToSolve"]) || array_key_exists("firstToSolve", $context) ? $context["firstToSolve"] : (function () { throw new RuntimeError('Variable "firstToSolve" does not exist.', 91, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
            // line 92
            echo "            <tr>
                <th scope=\"row\">";
            // line 93
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["row"], "problem", [], "any", false, false, false, 93), "html", null, true);
            echo ": ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["row"], "problem_name", [], "any", false, false, false, 93), "html", null, true);
            echo "</th>
                <td>
                    ";
            // line 95
            if ( !(null === twig_get_attribute($this->env, $this->source, $context["row"], "team", [], "any", false, false, false, 95))) {
                // line 96
                echo "                        ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["row"], "team", [], "any", false, false, false, 96), "html", null, true);
                echo "
                    ";
            } else {
                // line 98
                echo "                        <i>Not solved</i>
                    ";
            }
            // line 100
            echo "                </td>
                <td>
                    ";
            // line 102
            if ( !(null === twig_get_attribute($this->env, $this->source, $context["row"], "time", [], "any", false, false, false, 102))) {
                // line 103
                echo "                        ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["row"], "time", [], "any", false, false, false, 103), "html", null, true);
                echo "
                    ";
            } else {
                // line 105
                echo "                        <i>-</i>
                    ";
            }
            // line 107
            echo "                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 110
        echo "        </tbody>
    </table>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "jury/export/results.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  292 => 110,  284 => 107,  280 => 105,  274 => 103,  272 => 102,  268 => 100,  264 => 98,  258 => 96,  256 => 95,  249 => 93,  246 => 92,  242 => 91,  227 => 78,  218 => 75,  214 => 74,  211 => 73,  207 => 72,  193 => 60,  186 => 58,  177 => 56,  173 => 55,  170 => 54,  166 => 53,  158 => 47,  149 => 44,  145 => 43,  141 => 42,  138 => 41,  134 => 40,  119 => 27,  110 => 24,  106 => 23,  102 => 22,  98 => 21,  94 => 20,  90 => 19,  87 => 18,  83 => 17,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'jury/export/layout.html.twig' %}

{% block body %}
    <h2>Awards</h2>
    <table class=\"table\">
        <thead>
        <tr>
            <th scope=\"col\">Place</th>
            <th scope=\"col\">Team</th>
            <th scope=\"col\">Award</th>
            <th scope=\"col\">Solved problems</th>
            <th scope=\"col\">Total time</th>
            <th scope=\"col\">Time of last submission</th>
        </tr>
        </thead>
        <tbody>
        {% for row in awarded %}
            <tr>
                <th scope=\"row\">{{ row.rank }}</th>
                <th scope=\"row\">{{ row.team }}</th>
                <td>{{ row.award }}</td>
                <td>{{ row.solved }}</td>
                <td>{{ row.total_time }}</td>
                <td>{{ row.max_time }}</td>
            </tr>
        {% endfor %}
        </tbody>
    </table>

    <h2>Other ranked teams</h2>
    <table class=\"table\">
        <thead>
        <tr>
            <th scope=\"col\">Rank</th>
            <th scope=\"col\">Team</th>
            <th scope=\"col\">Solved problems</th>
        </tr>
        </thead>
        <tbody>
        {% for row in ranked %}
            <tr>
                <th scope=\"row\">{{ row.rank }}</th>
                <th scope=\"row\">{{ row.team }}</th>
                <td>{{ row.solved }}</td>
            </tr>
        {% endfor %}
        </tbody>
    </table>

    <h2>Honorable mentions</h2>
    <table class=\"table\">
        <tbody>
        {% for row in honorable|batch(2) %}
            <tr>
                {% for team in row %}
                    <td>{{ team }}</td>
                {% endfor %}
            </tr>
        {% endfor %}
        </tbody>
    </table>

    <h2>Region winners</h2>
    <table class=\"table\">
        <thead>
        <tr>
            <th scope=\"col\">Region</th>
            <th scope=\"col\">Team</th>
        </tr>
        </thead>
        <tbody>
        {% for row in regionWinners %}
            <tr>
                <th scope=\"row\">{{ row.group }}</th>
                <td>{{ row.team }}</td>
            </tr>
        {% endfor %}
        </tbody>
    </table>

    <h2>First to solve</h2>
    <table class=\"table\">
        <thead>
        <tr>
            <th scope=\"col\">Problem</th>
            <th scope=\"col\">Team</th>
            <th scope=\"col\">Time</th>
        </tr>
        </thead>
        <tbody>
        {% for row in firstToSolve %}
            <tr>
                <th scope=\"row\">{{ row.problem }}: {{ row.problem_name }}</th>
                <td>
                    {% if row.team is not null %}
                        {{ row.team }}
                    {% else %}
                        <i>Not solved</i>
                    {% endif %}
                </td>
                <td>
                    {% if row.time is not null %}
                        {{ row.time }}
                    {% else %}
                        <i>-</i>
                    {% endif %}
                </td>
            </tr>
        {% endfor %}
        </tbody>
    </table>
{% endblock %}
", "jury/export/results.html.twig", "/opt/domjudge/domserver/webapp/templates/jury/export/results.html.twig");
    }
}
