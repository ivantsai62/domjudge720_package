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

/* team/partials/submission_list.html.twig */
class __TwigTemplate_f4390febf77b29280274c7460ac960397ea966703600a15868e4a954b4effdc2 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "team/partials/submission_list.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "team/partials/submission_list.html.twig"));

        // line 3
        if (twig_test_empty((isset($context["submissions"]) || array_key_exists("submissions", $context) ? $context["submissions"] : (function () { throw new RuntimeError('Variable "submissions" does not exist.', 3, $this->source); })()))) {
            // line 4
            echo "    <div class=\"alert alert-warning\">No submissions</div>
";
        } else {
            // line 6
            echo "    <table class=\"data-table table table-hover table-striped table-sm submissions-table\">
        <thead class=\"thead-light\">
        <tr>
            <th scope=\"col\">time</th>
            <th scope=\"col\">problem</th>
            <th scope=\"col\">lang</th>
            <th scope=\"col\">result</th>
        </tr>
        </thead>
        <tbody>";
            // line 16
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["submissions"]) || array_key_exists("submissions", $context) ? $context["submissions"] : (function () { throw new RuntimeError('Variable "submissions" does not exist.', 16, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["submission"]) {
                // line 17
                echo "        ";
                // line 18
                echo "            ";
                $context["link"] = null;
                // line 19
                echo "            ";
                if ((((((twig_get_attribute($this->env, $this->source, $context["submission"], "submittime", [], "any", false, false, false, 19) < twig_get_attribute($this->env, $this->source, (isset($context["current_team_contest"]) || array_key_exists("current_team_contest", $context) ? $context["current_team_contest"] : (function () { throw new RuntimeError('Variable "current_team_contest" does not exist.', 19, $this->source); })()), "endtime", [], "any", false, false, false, 19)) && twig_get_attribute($this->env, $this->source, $context["submission"], "result", [], "any", false, false, false, 19)) &&  !twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["submission"], "judgings", [], "any", false, false, false, 19), "first", [], "any", false, false, false, 19))) &&  !twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["submission"], "judgings", [], "any", false, false, false, 19), "first", [], "any", false, false, false, 19), "result", [], "any", false, false, false, 19))) && ( !(isset($context["verificationRequired"]) || array_key_exists("verificationRequired", $context) ? $context["verificationRequired"] : (function () { throw new RuntimeError('Variable "verificationRequired" does not exist.', 19, $this->source); })()) || twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["submission"], "judgings", [], "any", false, false, false, 19), "first", [], "any", false, false, false, 19), "verified", [], "any", false, false, false, 19)))) {
                    // line 20
                    echo "                ";
                    $context["link"] = $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("team_submission", ["submitId" => twig_get_attribute($this->env, $this->source, $context["submission"], "submitid", [], "any", false, false, false, 20)]);
                    // line 21
                    echo "            ";
                }
                // line 22
                echo "
            ";
                // line 23
                $context["classes"] = "";
                // line 24
                echo "            ";
                if ( !twig_get_attribute($this->env, $this->source, $context["submission"], "valid", [], "any", false, false, false, 24)) {
                    // line 25
                    echo "                ";
                    $context["classes"] = ((isset($context["classes"]) || array_key_exists("classes", $context) ? $context["classes"] : (function () { throw new RuntimeError('Variable "classes" does not exist.', 25, $this->source); })()) . " ignore");
                    // line 26
                    echo "            ";
                }
                // line 27
                echo "            ";
                if ((twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["submission"], "judgings", [], "any", false, false, false, 27), "first", [], "any", false, false, false, 27)) ||  !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["submission"], "judgings", [], "any", false, false, false, 27), "first", [], "any", false, false, false, 27), "seen", [], "any", false, false, false, 27))) {
                    // line 28
                    echo "                ";
                    $context["classes"] = ((isset($context["classes"]) || array_key_exists("classes", $context) ? $context["classes"] : (function () { throw new RuntimeError('Variable "classes" does not exist.', 28, $this->source); })()) . " unseen");
                    // line 29
                    echo "            ";
                }
                // line 30
                echo "            <tr class=\"";
                echo twig_escape_filter($this->env, (isset($context["classes"]) || array_key_exists("classes", $context) ? $context["classes"] : (function () { throw new RuntimeError('Variable "classes" does not exist.', 30, $this->source); })()), "html", null, true);
                echo "\">
                <td>
                    <a data-ajax-modal data-ajax-modal-after=\"markSeen\" ";
                // line 32
                if ((isset($context["link"]) || array_key_exists("link", $context) ? $context["link"] : (function () { throw new RuntimeError('Variable "link" does not exist.', 32, $this->source); })())) {
                    echo "href=\"";
                    echo twig_escape_filter($this->env, (isset($context["link"]) || array_key_exists("link", $context) ? $context["link"] : (function () { throw new RuntimeError('Variable "link" does not exist.', 32, $this->source); })()), "html", null, true);
                    echo "\"";
                }
                echo ">
                        ";
                // line 33
                echo twig_escape_filter($this->env, $this->extensions['App\Twig\TwigExtension']->printtime(twig_get_attribute($this->env, $this->source, $context["submission"], "submittime", [], "any", false, false, false, 33), null, twig_get_attribute($this->env, $this->source, $context["submission"], "contest", [], "any", false, false, false, 33)), "html", null, true);
                echo "
                    </a>
                </td>
                <td class=\"probid\">
                    <a data-ajax-modal data-ajax-modal-after=\"markSeen\" ";
                // line 37
                if ((isset($context["link"]) || array_key_exists("link", $context) ? $context["link"] : (function () { throw new RuntimeError('Variable "link" does not exist.', 37, $this->source); })())) {
                    echo "href=\"";
                    echo twig_escape_filter($this->env, (isset($context["link"]) || array_key_exists("link", $context) ? $context["link"] : (function () { throw new RuntimeError('Variable "link" does not exist.', 37, $this->source); })()), "html", null, true);
                    echo "\"";
                }
                echo " title=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["submission"], "problem", [], "any", false, false, false, 37), "name", [], "any", false, false, false, 37), "html", null, true);
                echo "\">
                        ";
                // line 38
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["submission"], "contestProblem", [], "any", false, false, false, 38), "shortname", [], "any", false, false, false, 38), "html", null, true);
                echo "
                    </a>
                </td>
                <td class=\"langid\">
                    <a data-ajax-modal data-ajax-modal-after=\"markSeen\" ";
                // line 42
                if ((isset($context["link"]) || array_key_exists("link", $context) ? $context["link"] : (function () { throw new RuntimeError('Variable "link" does not exist.', 42, $this->source); })())) {
                    echo "href=\"";
                    echo twig_escape_filter($this->env, (isset($context["link"]) || array_key_exists("link", $context) ? $context["link"] : (function () { throw new RuntimeError('Variable "link" does not exist.', 42, $this->source); })()), "html", null, true);
                    echo "\"";
                }
                echo " title=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["submission"], "language", [], "any", false, false, false, 42), "name", [], "any", false, false, false, 42), "html", null, true);
                echo "\">
                        ";
                // line 43
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["submission"], "langid", [], "any", false, false, false, 43), "html", null, true);
                echo "
                    </a>
                </td>
                <td>
                    <a data-ajax-modal data-ajax-modal-after=\"markSeen\" ";
                // line 47
                if ((isset($context["link"]) || array_key_exists("link", $context) ? $context["link"] : (function () { throw new RuntimeError('Variable "link" does not exist.', 47, $this->source); })())) {
                    echo "href=\"";
                    echo twig_escape_filter($this->env, (isset($context["link"]) || array_key_exists("link", $context) ? $context["link"] : (function () { throw new RuntimeError('Variable "link" does not exist.', 47, $this->source); })()), "html", null, true);
                    echo "\"";
                }
                echo ">";
                // line 48
                if ((twig_get_attribute($this->env, $this->source, $context["submission"], "submittime", [], "any", false, false, false, 48) > twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["submission"], "contest", [], "any", false, false, false, 48), "endtime", [], "any", false, false, false, 48))) {
                    // line 49
                    echo "                            ";
                    echo $this->extensions['App\Twig\TwigExtension']->printResult("too-late");
                } elseif ((twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,                 // line 50
$context["submission"], "judgings", [], "any", false, false, false, 50), "first", [], "any", false, false, false, 50)) || twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["submission"], "judgings", [], "any", false, false, false, 50), "first", [], "any", false, false, false, 50), "result", [], "any", false, false, false, 50)))) {
                    // line 51
                    echo $this->extensions['App\Twig\TwigExtension']->printResult("");
                } elseif ((                // line 52
(isset($context["verificationRequired"]) || array_key_exists("verificationRequired", $context) ? $context["verificationRequired"] : (function () { throw new RuntimeError('Variable "verificationRequired" does not exist.', 52, $this->source); })()) &&  !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["submission"], "judgings", [], "any", false, false, false, 52), "first", [], "any", false, false, false, 52), "verified", [], "any", false, false, false, 52))) {
                    // line 53
                    echo $this->extensions['App\Twig\TwigExtension']->printResult("");
                } elseif ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,                 // line 54
$context["submission"], "judgings", [], "any", false, false, false, 54), "first", [], "any", false, false, false, 54), "result", [], "any", false, false, false, 54) == "correct")) {
                    // line 55
                    echo $this->extensions['App\Twig\TwigExtension']->printResult(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["submission"], "judgings", [], "any", false, false, false, 55), "first", [], "any", false, false, false, 55), "result", [], "any", false, false, false, 55));
                } else {
                    // line 57
                    echo "                        ";
                    $context["part"] = false;
                    // line 58
                    if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["submission"], "problem", [], "any", false, false, false, 58), "subtask", [], "any", false, false, false, 58))) {
                        // line 59
                        $context["TaskResults"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["submission"], "judgings", [], "any", false, false, false, 59), "first", [], "any", false, false, false, 59), "TaskResult", [], "any", false, false, false, 59);
                        // line 60
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable((isset($context["TaskResults"]) || array_key_exists("TaskResults", $context) ? $context["TaskResults"] : (function () { throw new RuntimeError('Variable "TaskResults" does not exist.', 60, $this->source); })()));
                        foreach ($context['_seq'] as $context["_key"] => $context["TaskResult"]) {
                            if (($context["TaskResult"] == 1)) {
                                // line 61
                                echo "                        ";
                                $context["part"] = true;
                            }
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['TaskResult'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                    }
                    // line 64
                    if ((isset($context["part"]) || array_key_exists("part", $context) ? $context["part"] : (function () { throw new RuntimeError('Variable "part" does not exist.', 64, $this->source); })())) {
                        // line 65
                        echo $this->extensions['App\Twig\TwigExtension']->printResult("partially_correct");
                    } else {
                        // line 67
                        echo $this->extensions['App\Twig\TwigExtension']->printResult(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["submission"], "judgings", [], "any", false, false, false, 67), "first", [], "any", false, false, false, 67), "result", [], "any", false, false, false, 67));
                    }
                }
                // line 70
                echo "                    </a>
                </td>
            </tr>";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['submission'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 74
            echo "        </tbody>
    </table>
";
        }
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "team/partials/submission_list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  219 => 74,  211 => 70,  207 => 67,  204 => 65,  202 => 64,  193 => 61,  188 => 60,  186 => 59,  184 => 58,  181 => 57,  178 => 55,  176 => 54,  174 => 53,  172 => 52,  170 => 51,  168 => 50,  165 => 49,  163 => 48,  156 => 47,  149 => 43,  139 => 42,  132 => 38,  122 => 37,  115 => 33,  107 => 32,  101 => 30,  98 => 29,  95 => 28,  92 => 27,  89 => 26,  86 => 25,  83 => 24,  81 => 23,  78 => 22,  75 => 21,  72 => 20,  69 => 19,  66 => 18,  64 => 17,  60 => 16,  49 => 6,  45 => 4,  43 => 3,);
    }

    public function getSourceContext()
    {
        return new Source("{# Render a list of submissions for a team page #}
{# @var submission \\App\\Entity\\Submission #}
{% if submissions is empty %}
    <div class=\"alert alert-warning\">No submissions</div>
{% else %}
    <table class=\"data-table table table-hover table-striped table-sm submissions-table\">
        <thead class=\"thead-light\">
        <tr>
            <th scope=\"col\">time</th>
            <th scope=\"col\">problem</th>
            <th scope=\"col\">lang</th>
            <th scope=\"col\">result</th>
        </tr>
        </thead>
        <tbody>
        {%- for submission in submissions %}
        {# {{dump(submission)}} #}
            {% set link = null %}
            {% if submission.submittime < current_team_contest.endtime and submission.result and submission.judgings.first is not empty and submission.judgings.first.result is not empty and (not verificationRequired or submission.judgings.first.verified) %}
                {% set link = path('team_submission', {submitId: submission.submitid}) %}
            {% endif %}

            {% set classes = '' %}
            {% if not submission.valid %}
                {% set classes = classes ~ ' ignore' %}
            {% endif %}
            {% if submission.judgings.first is empty or not submission.judgings.first.seen %}
                {% set classes = classes ~ ' unseen' %}
            {% endif %}
            <tr class=\"{{ classes }}\">
                <td>
                    <a data-ajax-modal data-ajax-modal-after=\"markSeen\" {% if link %}href=\"{{ link }}\"{% endif %}>
                        {{ submission.submittime | printtime(null, submission.contest) }}
                    </a>
                </td>
                <td class=\"probid\">
                    <a data-ajax-modal data-ajax-modal-after=\"markSeen\" {% if link %}href=\"{{ link }}\"{% endif %} title=\"{{ submission.problem.name }}\">
                        {{ submission.contestProblem.shortname }}
                    </a>
                </td>
                <td class=\"langid\">
                    <a data-ajax-modal data-ajax-modal-after=\"markSeen\" {% if link %}href=\"{{ link }}\"{% endif %} title=\"{{ submission.language.name }}\">
                        {{ submission.langid }}
                    </a>
                </td>
                <td>
                    <a data-ajax-modal data-ajax-modal-after=\"markSeen\" {% if link %}href=\"{{ link }}\"{% endif %}>
                        {%- if submission.submittime > submission.contest.endtime %}
                            {{ 'too-late' | printResult }}
                        {%- elseif submission.judgings.first is empty or submission.judgings.first.result is empty %}
                            {{- '' | printResult -}}
                        {%- elseif verificationRequired and not submission.judgings.first.verified %}
                            {{- '' | printResult -}}
                        {%- elseif submission.judgings.first.result == 'correct' %}
                        {{- submission.judgings.first.result | printResult -}}
                        {%- else %}
                        {% set part = false %}
                        {%- if  submission.problem.subtask is not empty  %}
                        {%- set TaskResults = submission.judgings.first.TaskResult %}
                        {%- for TaskResult in TaskResults if TaskResult == 1 %}
                        {% set part = true %}
                        {%- endfor %}
                        {%- endif %}
                        {%- if part %} 
                            {{- 'partially_correct' | printResult -}}
                        {%- else %}
                            {{- submission.judgings.first.result | printResult -}}
                        {%- endif %}
                        {%- endif %}
                    </a>
                </td>
            </tr>
        {%- endfor %}
        </tbody>
    </table>
{% endif %}
", "team/partials/submission_list.html.twig", "/opt/domjudge/domserver/webapp/templates/team/partials/submission_list.html.twig");
    }
}
