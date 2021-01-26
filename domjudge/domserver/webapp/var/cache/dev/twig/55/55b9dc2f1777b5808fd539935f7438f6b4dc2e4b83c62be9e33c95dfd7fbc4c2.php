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

/* jury/export/clarifications.html.twig */
class __TwigTemplate_869592411b9ac1d28315e87008396b071897df152632bacb4201039c78c7ae40 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "jury/export/clarifications.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "jury/export/clarifications.html.twig"));

        $this->parent = $this->loadTemplate("jury/export/layout.html.twig", "jury/export/clarifications.html.twig", 1);
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
        echo "    <style>
        td:first-child {
            padding-right: 10px;
        }

        tr.top-line {
            border-top: 4px solid #ccc;
        }

        tr.top-line td {
            padding-top: 8px;
        }
    </style>

    ";
        // line 18
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["grouped"]) || array_key_exists("grouped", $context) ? $context["grouped"] : (function () { throw new RuntimeError('Variable "grouped" does not exist.', 18, $this->source); })()));
        foreach ($context['_seq'] as $context["queue"] => $context["clarifications"]) {
            // line 19
            echo "        <h2>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["queues"]) || array_key_exists("queues", $context) ? $context["queues"] : (function () { throw new RuntimeError('Variable "queues" does not exist.', 19, $this->source); })()), $context["queue"], [], "array", false, false, false, 19), "html", null, true);
            echo "</h2>
        <table class=\"table\">
            <thead>
            <tr>
                <th scope=\"col\">ID</th>
                <th scope=\"col\">Contest time</th>
                <th scope=\"col\">From</th>
                <th scope=\"col\">To</th>
                <th scope=\"col\">Subject</th>
                <th scope=\"col\">Answered?</th>
            </tr>
            </thead>
            <tbody>
            ";
            // line 32
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["clarifications"]);
            foreach ($context['_seq'] as $context["_key"] => $context["clarification"]) {
                // line 33
                echo "                <tr class=\"top-line\">
                    <td>";
                // line 34
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["clarification"], "clarId", [], "any", false, false, false, 34), "html", null, true);
                echo "</td>
                    <td>";
                // line 35
                echo twig_escape_filter($this->env, $this->extensions['App\Twig\TwigExtension']->printtime(twig_get_attribute($this->env, $this->source, $context["clarification"], "submitTime", [], "any", false, false, false, 35), null, (isset($context["contest"]) || array_key_exists("contest", $context) ? $context["contest"] : (function () { throw new RuntimeError('Variable "contest" does not exist.', 35, $this->source); })())), "html", null, true);
                echo "</td>
                    <td>
                        ";
                // line 37
                if (twig_get_attribute($this->env, $this->source, $context["clarification"], "sender", [], "any", false, false, false, 37)) {
                    // line 38
                    echo "                            ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["clarification"], "sender", [], "any", false, false, false, 38), "name", [], "any", false, false, false, 38), "html", null, true);
                    echo "
                        ";
                } else {
                    // line 40
                    echo "                            Jury (";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["clarification"], "juryMember", [], "any", false, false, false, 40), "html", null, true);
                    echo ")
                        ";
                }
                // line 42
                echo "                    </td>
                    <td>
                        ";
                // line 44
                if ((twig_get_attribute($this->env, $this->source, $context["clarification"], "recipient", [], "any", false, false, false, 44) && twig_test_empty(twig_get_attribute($this->env, $this->source, $context["clarification"], "sender", [], "any", false, false, false, 44)))) {
                    // line 45
                    echo "                            ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["clarification"], "recipient", [], "any", false, false, false, 45), "name", [], "any", false, false, false, 45), "html", null, true);
                    echo "
                        ";
                } elseif (twig_get_attribute($this->env, $this->source,                 // line 46
$context["clarification"], "sender", [], "any", false, false, false, 46)) {
                    // line 47
                    echo "                            Jury
                        ";
                } else {
                    // line 49
                    echo "                            All
                        ";
                }
                // line 51
                echo "                    </td>
                    <td>
                        ";
                // line 53
                if (twig_get_attribute($this->env, $this->source, $context["clarification"], "problem", [], "any", false, false, false, 53)) {
                    // line 54
                    echo "                            ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["problems"]) || array_key_exists("problems", $context) ? $context["problems"] : (function () { throw new RuntimeError('Variable "problems" does not exist.', 54, $this->source); })()), twig_get_attribute($this->env, $this->source, $context["clarification"], "probid", [], "any", false, false, false, 54), [], "array", false, false, false, 54), "shortName", [], "any", false, false, false, 54), "html", null, true);
                    echo ": ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["clarification"], "problem", [], "any", false, false, false, 54), "name", [], "any", false, false, false, 54), "html", null, true);
                    echo "
                        ";
                } elseif ((twig_get_attribute($this->env, $this->source,                 // line 55
$context["clarification"], "category", [], "any", false, false, false, 55) && twig_get_attribute($this->env, $this->source, ($context["categories"] ?? null), twig_get_attribute($this->env, $this->source, $context["clarification"], "category", [], "any", false, false, false, 55), [], "array", true, true, false, 55))) {
                    // line 56
                    echo "                            ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["categories"]) || array_key_exists("categories", $context) ? $context["categories"] : (function () { throw new RuntimeError('Variable "categories" does not exist.', 56, $this->source); })()), twig_get_attribute($this->env, $this->source, $context["clarification"], "category", [], "any", false, false, false, 56), [], "array", false, false, false, 56), "html", null, true);
                    echo "
                        ";
                } else {
                    // line 58
                    echo "                            General
                        ";
                }
                // line 60
                echo "                    </td>
                    <td>
                        ";
                // line 62
                echo twig_escape_filter($this->env, $this->extensions['App\Twig\TwigExtension']->printYesNo(twig_get_attribute($this->env, $this->source, $context["clarification"], "answered", [], "any", false, false, false, 62)), "html", null, true);
                echo "
                    </td>
                </tr>
                <tr>
                    <td><b>Content</b></td>
                    <td colspan=\"5\">
                        <pre>";
                // line 68
                echo twig_escape_filter($this->env, $this->extensions['App\Twig\TwigExtension']->wrapUnquoted(twig_get_attribute($this->env, $this->source, $context["clarification"], "body", [], "any", false, false, false, 68), 80), "html", null, true);
                echo "</pre>
                    </td>
                </tr>
                ";
                // line 71
                if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, $context["clarification"], "replies", [], "any", false, false, false, 71))) {
                    // line 72
                    echo "                    ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["clarification"], "replies", [], "any", false, false, false, 72));
                    foreach ($context['_seq'] as $context["idx"] => $context["reply"]) {
                        // line 73
                        echo "                        <tr>
                            <td>
                                <b>
                                    ";
                        // line 76
                        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["clarification"], "replies", [], "any", false, false, false, 76), "count", [], "any", false, false, false, 76) > 1)) {
                            // line 77
                            echo "                                        Reply #";
                            echo twig_escape_filter($this->env, ($context["idx"] + 1), "html", null, true);
                            echo "
                                    ";
                        } else {
                            // line 79
                            echo "                                        Reply
                                    ";
                        }
                        // line 81
                        echo "                                </b>
                            </td>
                            <td colspan=\"5\">
                                <pre>";
                        // line 84
                        echo twig_escape_filter($this->env, $this->extensions['App\Twig\TwigExtension']->wrapUnquoted(twig_get_attribute($this->env, $this->source, $context["reply"], "body", [], "any", false, false, false, 84), 80), "html", null, true);
                        echo "</pre>
                            </td>
                        </tr>
                    ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['idx'], $context['reply'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 88
                    echo "                ";
                }
                // line 89
                echo "            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['clarification'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 90
            echo "            </tbody>
        </table>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['queue'], $context['clarifications'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "jury/export/clarifications.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  248 => 90,  242 => 89,  239 => 88,  229 => 84,  224 => 81,  220 => 79,  214 => 77,  212 => 76,  207 => 73,  202 => 72,  200 => 71,  194 => 68,  185 => 62,  181 => 60,  177 => 58,  171 => 56,  169 => 55,  162 => 54,  160 => 53,  156 => 51,  152 => 49,  148 => 47,  146 => 46,  141 => 45,  139 => 44,  135 => 42,  129 => 40,  123 => 38,  121 => 37,  116 => 35,  112 => 34,  109 => 33,  105 => 32,  88 => 19,  84 => 18,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'jury/export/layout.html.twig' %}

{% block body %}
    <style>
        td:first-child {
            padding-right: 10px;
        }

        tr.top-line {
            border-top: 4px solid #ccc;
        }

        tr.top-line td {
            padding-top: 8px;
        }
    </style>

    {% for queue, clarifications in grouped %}
        <h2>{{ queues[queue] }}</h2>
        <table class=\"table\">
            <thead>
            <tr>
                <th scope=\"col\">ID</th>
                <th scope=\"col\">Contest time</th>
                <th scope=\"col\">From</th>
                <th scope=\"col\">To</th>
                <th scope=\"col\">Subject</th>
                <th scope=\"col\">Answered?</th>
            </tr>
            </thead>
            <tbody>
            {% for clarification in clarifications %}
                <tr class=\"top-line\">
                    <td>{{ clarification.clarId }}</td>
                    <td>{{ clarification.submitTime | printtime(null, contest) }}</td>
                    <td>
                        {% if clarification.sender %}
                            {{ clarification.sender.name }}
                        {% else %}
                            Jury ({{ clarification.juryMember }})
                        {% endif %}
                    </td>
                    <td>
                        {% if clarification.recipient and clarification.sender is empty %}
                            {{ clarification.recipient.name }}
                        {% elseif clarification.sender %}
                            Jury
                        {% else %}
                            All
                        {% endif %}
                    </td>
                    <td>
                        {% if clarification.problem %}
                            {{ problems[clarification.probid].shortName }}: {{ clarification.problem.name }}
                        {% elseif clarification.category and categories[clarification.category] is defined %}
                            {{ categories[clarification.category] }}
                        {% else %}
                            General
                        {% endif %}
                    </td>
                    <td>
                        {{ clarification.answered | printYesNo }}
                    </td>
                </tr>
                <tr>
                    <td><b>Content</b></td>
                    <td colspan=\"5\">
                        <pre>{{ clarification.body | wrapUnquoted(80) }}</pre>
                    </td>
                </tr>
                {% if clarification.replies is not empty %}
                    {% for idx, reply in clarification.replies %}
                        <tr>
                            <td>
                                <b>
                                    {% if clarification.replies.count > 1 %}
                                        Reply #{{ idx + 1 }}
                                    {% else %}
                                        Reply
                                    {% endif %}
                                </b>
                            </td>
                            <td colspan=\"5\">
                                <pre>{{ reply.body | wrapUnquoted(80) }}</pre>
                            </td>
                        </tr>
                    {% endfor %}
                {% endif %}
            {% endfor %}
            </tbody>
        </table>
    {% endfor %}
{% endblock %}
", "jury/export/clarifications.html.twig", "/opt/domjudge/domserver/webapp/templates/jury/export/clarifications.html.twig");
    }
}
