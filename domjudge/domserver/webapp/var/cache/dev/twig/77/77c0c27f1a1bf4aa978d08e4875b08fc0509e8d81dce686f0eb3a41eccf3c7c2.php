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

/* jury/partials/submission_graph.html.twig */
class __TwigTemplate_4b7d2efe44ccfe018ec9589dfefb255759894bccb4a3b33302e9664c374d31a5 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "jury/partials/submission_graph.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "jury/partials/submission_graph.html.twig"));

        // line 1
        $context["timelimit"] = (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["submission"]) || array_key_exists("submission", $context) ? $context["submission"] : (function () { throw new RuntimeError('Variable "submission" does not exist.', 1, $this->source); })()), "problem", [], "any", false, false, false, 1), "timelimit", [], "any", false, false, false, 1) * twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["submission"]) || array_key_exists("submission", $context) ? $context["submission"] : (function () { throw new RuntimeError('Variable "submission" does not exist.', 1, $this->source); })()), "language", [], "any", false, false, false, 1), "timeFactor", [], "any", false, false, false, 1));
        // line 2
        echo "<div>
    ";
        // line 3
        if ( !(null === (isset($context["selectedJudging"]) || array_key_exists("selectedJudging", $context) ? $context["selectedJudging"] : (function () { throw new RuntimeError('Variable "selectedJudging" does not exist.', 3, $this->source); })()))) {
            // line 4
            echo "        <div style=\"display: inline-block\" id=\"testcaseruntime\">
            <h3 id=\"graphs\">Testcase Runtimes</h3>
            <svg style=\"width:500px; height:250px;\"></svg>
        </div>
    ";
        }
        // line 9
        echo "    ";
        if (( !(null === (isset($context["externalJudgement"]) || array_key_exists("externalJudgement", $context) ? $context["externalJudgement"] : (function () { throw new RuntimeError('Variable "externalJudgement" does not exist.', 9, $this->source); })())) &&  !(null === twig_get_attribute($this->env, $this->source, (isset($context["externalJudgement"]) || array_key_exists("externalJudgement", $context) ? $context["externalJudgement"] : (function () { throw new RuntimeError('Variable "externalJudgement" does not exist.', 9, $this->source); })()), "result", [], "any", false, false, false, 9)))) {
            // line 10
            echo "        <div style=\"display: inline-block\" id=\"externalruntime\">
            <h3 id=\"graphs\">External Testcase Runtimes</h3>
            <svg style=\"width:500px; height:250px;\"></svg>
        </div>
    ";
        }
        // line 15
        echo "    ";
        if ((twig_length_filter($this->env, (isset($context["judgings"]) || array_key_exists("judgings", $context) ? $context["judgings"] : (function () { throw new RuntimeError('Variable "judgings" does not exist.', 15, $this->source); })())) > 1)) {
            // line 16
            echo "        <div style=\"display: inline-block\" id=\"maxruntime\">
            <h3 id=\"graphs\">Max Runtimes</h3>
            <svg style=\"width:500px; height:250px;\"></svg>
        </div>
    ";
        }
        // line 21
        echo "</div>

<script>
    ";
        // line 24
        $context["colors"] = ["correct" => "#28a745", "wrong-answer" => "#dc3545", "timelimit" => "orange", "run-error" => "#ff3399", "compiler-error" => "grey", "no-output" => "purple", "frozen" => "blue", "output-limit" => "black"];
        // line 34
        echo "    function create_chart(data, maxY) {
        var tickStep = 1;
        if (maxY <= 2) {
            tickStep = 0.2;
        } else if (maxY <= 5) {
            tickStep = 0.5;
        }
        maxY += tickStep;
        var chart = nv.models.multiBarChart()
            .x(function (d) {
                return d.label
            })
            .y(function (d) {
                return d.value
            })
            .showControls(false)
            .reduceXTicks(true)
            .forceY([0, maxY])
            .duration(250)
            .showLegend(false)
        ;
        var tickValues = [];
        for (i = 0; i <= maxY; i += tickStep) {
            tickValues.push(i);
        }
        chart.yAxis
            .tickValues(tickValues)
            .axisLabel('Runtime(in s)');
        return chart;
    }

    \$(function () {
        var maxY = ";
        // line 66
        echo twig_escape_filter($this->env, (isset($context["timelimit"]) || array_key_exists("timelimit", $context) ? $context["timelimit"] : (function () { throw new RuntimeError('Variable "timelimit" does not exist.', 66, $this->source); })()), "html", null, true);
        echo ";
        ";
        // line 67
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["judgings"]) || array_key_exists("judgings", $context) ? $context["judgings"] : (function () { throw new RuntimeError('Variable "judgings" does not exist.', 67, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["judging"]) {
            // line 68
            echo "        maxY = Math.max(maxY, ";
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["maxRunTimes"] ?? null), twig_get_attribute($this->env, $this->source, $context["judging"], "judgingId", [], "any", false, false, false, 68), [], "array", true, true, false, 68)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["maxRunTimes"] ?? null), twig_get_attribute($this->env, $this->source, $context["judging"], "judgingId", [], "any", false, false, false, 68), [], "array", false, false, false, 68), 0)) : (0)), "html", null, true);
            echo ");
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['judging'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 70
        echo "        ";
        if ((twig_length_filter($this->env, (isset($context["judgings"]) || array_key_exists("judgings", $context) ? $context["judgings"] : (function () { throw new RuntimeError('Variable "judgings" does not exist.', 70, $this->source); })())) > 1)) {
            // line 71
            echo "        var run_max_times = [
            {
                key: \"Max Runtime\",
                values: [
                    ";
            // line 75
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_array_filter((isset($context["judgings"]) || array_key_exists("judgings", $context) ? $context["judgings"] : (function () { throw new RuntimeError('Variable "judgings" does not exist.', 75, $this->source); })()), function ($__judging__) use ($context) { $context["judging"] = $__judging__; return twig_get_attribute($this->env, $this->source, $context["judging"], "result", [], "any", false, false, false, 75); }));
            foreach ($context['_seq'] as $context["_key"] => $context["judging"]) {
                // line 76
                echo "                    {
                        \"label\": \"j";
                // line 77
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["judging"], "judgingid", [], "any", false, false, false, 77), "html", null, true);
                echo "\",
                        \"value\": ";
                // line 78
                echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["maxRunTimes"] ?? null), twig_get_attribute($this->env, $this->source, $context["judging"], "judgingId", [], "any", false, false, false, 78), [], "array", true, true, false, 78)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["maxRunTimes"] ?? null), twig_get_attribute($this->env, $this->source, $context["judging"], "judgingId", [], "any", false, false, false, 78), [], "array", false, false, false, 78), 0)) : (0)), "html", null, true);
                echo ",
                        \"color\": \"";
                // line 79
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["colors"]) || array_key_exists("colors", $context) ? $context["colors"] : (function () { throw new RuntimeError('Variable "colors" does not exist.', 79, $this->source); })()), twig_get_attribute($this->env, $this->source, $context["judging"], "result", [], "any", false, false, false, 79), [], "array", false, false, false, 79), "html", null, true);
                echo "\",
                    },
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['judging'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 82
            echo "                ]
            }
        ];
        nv.addGraph(function () {
            var chart = create_chart(run_max_times, maxY);
            chart.xAxis.axisLabel(\"Judging\");
            d3.select('#maxruntime svg')
                .datum(run_max_times)
                .call(chart);
            var svgsize = chart.container.clientWidth || chart.container.parentNode.clientWidth;
            var line = d3.select('#maxruntime svg')
                .append('line')
                .attr({
                    x1: chart.margin().left,
                    y1: chart.yAxis.scale()(";
            // line 96
            echo twig_escape_filter($this->env, (isset($context["timelimit"]) || array_key_exists("timelimit", $context) ? $context["timelimit"] : (function () { throw new RuntimeError('Variable "timelimit" does not exist.', 96, $this->source); })()), "html", null, true);
            echo ") + chart.margin().top,
                    x2: +svgsize - chart.margin().right,
                    y2: chart.yAxis.scale()(";
            // line 98
            echo twig_escape_filter($this->env, (isset($context["timelimit"]) || array_key_exists("timelimit", $context) ? $context["timelimit"] : (function () { throw new RuntimeError('Variable "timelimit" does not exist.', 98, $this->source); })()), "html", null, true);
            echo ") + chart.margin().top,
                })
                .style(\"stroke\", \"#F00\");
            nv.utils.windowResize(chart.update);
            return chart;
        });
        ";
        }
        // line 105
        echo "
        ";
        // line 106
        if ( !(null === (isset($context["selectedJudging"]) || array_key_exists("selectedJudging", $context) ? $context["selectedJudging"] : (function () { throw new RuntimeError('Variable "selectedJudging" does not exist.', 106, $this->source); })()))) {
            // line 107
            echo "        var testcase_times = [
            {
                key: \"Runtime\",
                values: [
                    ";
            // line 111
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["runs"]) || array_key_exists("runs", $context) ? $context["runs"] : (function () { throw new RuntimeError('Variable "runs" does not exist.', 111, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["run"]) {
                // line 112
                echo "                    {
                        \"label\": \"";
                // line 113
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["run"], "rank", [], "any", false, false, false, 113), "html", null, true);
                echo "\",
                        \"value\": ";
                // line 114
                if (twig_get_attribute($this->env, $this->source, $context["run"], "firstJudgingRun", [], "any", false, false, false, 114)) {
                    echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["run"], "firstJudgingRun", [], "any", false, true, false, 114), "runtime", [], "any", true, true, false, 114)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["run"], "firstJudgingRun", [], "any", false, true, false, 114), "runtime", [], "any", false, false, false, 114), 0)) : (0)), "html", null, true);
                } else {
                    echo "0";
                }
                echo ",
                        \"color\": \"";
                // line 115
                if (twig_get_attribute($this->env, $this->source, $context["run"], "firstJudgingRun", [], "any", false, false, false, 115)) {
                    echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["colors"] ?? null), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["run"], "firstJudgingRun", [], "any", false, false, false, 115), "runresult", [], "any", false, false, false, 115), [], "array", true, true, false, 115)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["colors"] ?? null), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["run"], "firstJudgingRun", [], "any", false, false, false, 115), "runresult", [], "any", false, false, false, 115), [], "array", false, false, false, 115), "grey")) : ("grey")), "html", null, true);
                } else {
                    echo "grey";
                }
                echo "\",
                        \"description\": \"";
                // line 116
                echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, $context["run"], "description", [0 => true], "method", true, true, false, 116)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, $context["run"], "description", [0 => true], "method", false, false, false, 116), twig_get_attribute($this->env, $this->source, $context["run"], "rank", [], "any", false, false, false, 116))) : (twig_get_attribute($this->env, $this->source, $context["run"], "rank", [], "any", false, false, false, 116))), "html", null, true);
                echo "\",
                    },
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['run'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 119
            echo "                ]
            }
        ];
        nv.addGraph(function () {
            var chart = create_chart(testcase_times, maxY);
            chart.tooltip.contentGenerator(function (obj) {
                var format = d3.format(\".3f\");
                return \"<b>Testcase \" + obj.data.description + \"</b><br><b>Runtime:</b> \" + format(obj.data.value) + \"s\";
            });
            chart.xAxis.axisLabel(\"Testcase Rank\");
            d3.select('#testcaseruntime svg')
                .datum(testcase_times)
                .call(chart);
            var svgsize = chart.container.clientWidth || chart.container.parentNode.clientWidth;
            var line = d3.select('#testcaseruntime svg')
                .append('line')
                .attr({
                    x1: chart.margin().left,
                    y1: chart.yAxis.scale()(";
            // line 137
            echo twig_escape_filter($this->env, (isset($context["timelimit"]) || array_key_exists("timelimit", $context) ? $context["timelimit"] : (function () { throw new RuntimeError('Variable "timelimit" does not exist.', 137, $this->source); })()), "html", null, true);
            echo ") + chart.margin().top,
                    x2: +svgsize - chart.margin().right,
                    y2: chart.yAxis.scale()(";
            // line 139
            echo twig_escape_filter($this->env, (isset($context["timelimit"]) || array_key_exists("timelimit", $context) ? $context["timelimit"] : (function () { throw new RuntimeError('Variable "timelimit" does not exist.', 139, $this->source); })()), "html", null, true);
            echo ") + chart.margin().top,
                })
                .style(\"stroke\", \"#F00\");
            nv.utils.windowResize(chart.update);
            return chart;
        });
        ";
        }
        // line 146
        echo "
        ";
        // line 148
        echo "        ";
        if (( !(null === (isset($context["externalJudgement"]) || array_key_exists("externalJudgement", $context) ? $context["externalJudgement"] : (function () { throw new RuntimeError('Variable "externalJudgement" does not exist.', 148, $this->source); })())) &&  !(null === twig_get_attribute($this->env, $this->source, (isset($context["externalJudgement"]) || array_key_exists("externalJudgement", $context) ? $context["externalJudgement"] : (function () { throw new RuntimeError('Variable "externalJudgement" does not exist.', 148, $this->source); })()), "result", [], "any", false, false, false, 148)))) {
            // line 149
            echo "        var external_times = [
            {
                key: \"Runtime\",
                values: [
                    ";
            // line 153
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["externalRuns"]) || array_key_exists("externalRuns", $context) ? $context["externalRuns"] : (function () { throw new RuntimeError('Variable "externalRuns" does not exist.', 153, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["run"]) {
                // line 154
                echo "                    {
                        \"label\": \"";
                // line 155
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["run"], "rank", [], "any", false, false, false, 155), "html", null, true);
                echo "\",
                        \"value\": ";
                // line 156
                if (twig_get_attribute($this->env, $this->source, $context["run"], "firstExternalRun", [], "any", false, false, false, 156)) {
                    echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["run"], "firstExternalRun", [], "any", false, true, false, 156), "runtime", [], "any", true, true, false, 156)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["run"], "firstExternalRun", [], "any", false, true, false, 156), "runtime", [], "any", false, false, false, 156), 0)) : (0)), "html", null, true);
                } else {
                    echo "0";
                }
                echo ",
                        \"color\": \"";
                // line 157
                if (twig_get_attribute($this->env, $this->source, $context["run"], "firstExternalRun", [], "any", false, false, false, 157)) {
                    echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["colors"] ?? null), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["run"], "firstExternalRun", [], "any", false, false, false, 157), "result", [], "any", false, false, false, 157), [], "array", true, true, false, 157)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["colors"] ?? null), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["run"], "firstExternalRun", [], "any", false, false, false, 157), "result", [], "any", false, false, false, 157), [], "array", false, false, false, 157), "grey")) : ("grey")), "html", null, true);
                } else {
                    echo "grey";
                }
                echo "\",
                        \"description\": \"";
                // line 158
                echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, $context["run"], "description", [], "any", true, true, false, 158)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, $context["run"], "description", [], "any", false, false, false, 158), twig_get_attribute($this->env, $this->source, $context["run"], "rank", [], "any", false, false, false, 158))) : (twig_get_attribute($this->env, $this->source, $context["run"], "rank", [], "any", false, false, false, 158))), "html", null, true);
                echo "\",
                    },
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['run'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 161
            echo "                ]
            }
        ];
        nv.addGraph(function () {
            var chart = create_chart(external_times, maxY);
            chart.tooltip.contentGenerator(function (obj) {
                var format = d3.format(\".3f\");
                return \"<b>Testcase \" + obj.data.description + \"</b><br><b>Runtime:</b> \" + format(obj.data.value) + \"s\";
            });
            chart.xAxis.axisLabel(\"Testcase Rank\");
            d3.select('#externalruntime svg')
                .datum(external_times)
                .call(chart);
            var svgsize = chart.container.clientWidth || chart.container.parentNode.clientWidth;
            var line = d3.select('#externalruntime svg')
                .append('line')
                .attr({
                    x1: chart.margin().left,
                    y1: chart.yAxis.scale()(";
            // line 179
            echo twig_escape_filter($this->env, (isset($context["timelimit"]) || array_key_exists("timelimit", $context) ? $context["timelimit"] : (function () { throw new RuntimeError('Variable "timelimit" does not exist.', 179, $this->source); })()), "html", null, true);
            echo ") + chart.margin().top,
                    x2: +svgsize - chart.margin().right,
                    y2: chart.yAxis.scale()(";
            // line 181
            echo twig_escape_filter($this->env, (isset($context["timelimit"]) || array_key_exists("timelimit", $context) ? $context["timelimit"] : (function () { throw new RuntimeError('Variable "timelimit" does not exist.', 181, $this->source); })()), "html", null, true);
            echo ") + chart.margin().top,
                })
                .style(\"stroke\", \"#F00\");
            nv.utils.windowResize(chart.update);
            return chart;
        });
        ";
        }
        // line 188
        echo "    })
</script>

";
        // line 191
        $this->loadTemplate("jury/analysis/download_graphs.html.twig", "jury/partials/submission_graph.html.twig", 191)->display($context);
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "jury/partials/submission_graph.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  369 => 191,  364 => 188,  354 => 181,  349 => 179,  329 => 161,  320 => 158,  312 => 157,  304 => 156,  300 => 155,  297 => 154,  293 => 153,  287 => 149,  284 => 148,  281 => 146,  271 => 139,  266 => 137,  246 => 119,  237 => 116,  229 => 115,  221 => 114,  217 => 113,  214 => 112,  210 => 111,  204 => 107,  202 => 106,  199 => 105,  189 => 98,  184 => 96,  168 => 82,  159 => 79,  155 => 78,  151 => 77,  148 => 76,  144 => 75,  138 => 71,  135 => 70,  126 => 68,  122 => 67,  118 => 66,  84 => 34,  82 => 24,  77 => 21,  70 => 16,  67 => 15,  60 => 10,  57 => 9,  50 => 4,  48 => 3,  45 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% set timelimit = submission.problem.timelimit * submission.language.timeFactor %}
<div>
    {% if selectedJudging is not null %}
        <div style=\"display: inline-block\" id=\"testcaseruntime\">
            <h3 id=\"graphs\">Testcase Runtimes</h3>
            <svg style=\"width:500px; height:250px;\"></svg>
        </div>
    {% endif %}
    {% if externalJudgement is not null and externalJudgement.result is not null %}
        <div style=\"display: inline-block\" id=\"externalruntime\">
            <h3 id=\"graphs\">External Testcase Runtimes</h3>
            <svg style=\"width:500px; height:250px;\"></svg>
        </div>
    {% endif %}
    {% if judgings|length > 1 %}
        <div style=\"display: inline-block\" id=\"maxruntime\">
            <h3 id=\"graphs\">Max Runtimes</h3>
            <svg style=\"width:500px; height:250px;\"></svg>
        </div>
    {% endif %}
</div>

<script>
    {% set colors = {
        'correct':        '#28a745',
        'wrong-answer':   '#dc3545',
        'timelimit':      'orange',
        'run-error':      '#ff3399',
        'compiler-error': 'grey',
        'no-output':      'purple',
        'frozen':         'blue',
        'output-limit':   'black',
    } %}
    function create_chart(data, maxY) {
        var tickStep = 1;
        if (maxY <= 2) {
            tickStep = 0.2;
        } else if (maxY <= 5) {
            tickStep = 0.5;
        }
        maxY += tickStep;
        var chart = nv.models.multiBarChart()
            .x(function (d) {
                return d.label
            })
            .y(function (d) {
                return d.value
            })
            .showControls(false)
            .reduceXTicks(true)
            .forceY([0, maxY])
            .duration(250)
            .showLegend(false)
        ;
        var tickValues = [];
        for (i = 0; i <= maxY; i += tickStep) {
            tickValues.push(i);
        }
        chart.yAxis
            .tickValues(tickValues)
            .axisLabel('Runtime(in s)');
        return chart;
    }

    \$(function () {
        var maxY = {{ timelimit }};
        {% for judging in judgings %}
        maxY = Math.max(maxY, {{ maxRunTimes[judging.judgingId]|default(0) }});
        {% endfor %}
        {% if judgings|length > 1 %}
        var run_max_times = [
            {
                key: \"Max Runtime\",
                values: [
                    {% for judging in judgings | filter(judging => judging.result) %}
                    {
                        \"label\": \"j{{ judging.judgingid }}\",
                        \"value\": {{ maxRunTimes[judging.judgingId]|default(0) }},
                        \"color\": \"{{ colors[judging.result] }}\",
                    },
                    {% endfor %}
                ]
            }
        ];
        nv.addGraph(function () {
            var chart = create_chart(run_max_times, maxY);
            chart.xAxis.axisLabel(\"Judging\");
            d3.select('#maxruntime svg')
                .datum(run_max_times)
                .call(chart);
            var svgsize = chart.container.clientWidth || chart.container.parentNode.clientWidth;
            var line = d3.select('#maxruntime svg')
                .append('line')
                .attr({
                    x1: chart.margin().left,
                    y1: chart.yAxis.scale()({{ timelimit }}) + chart.margin().top,
                    x2: +svgsize - chart.margin().right,
                    y2: chart.yAxis.scale()({{ timelimit }}) + chart.margin().top,
                })
                .style(\"stroke\", \"#F00\");
            nv.utils.windowResize(chart.update);
            return chart;
        });
        {% endif %}

        {% if selectedJudging is not null %}
        var testcase_times = [
            {
                key: \"Runtime\",
                values: [
                    {% for run in runs %}
                    {
                        \"label\": \"{{ run.rank }}\",
                        \"value\": {% if run.firstJudgingRun %}{{ run.firstJudgingRun.runtime|default(0) }}{% else %}0{% endif %},
                        \"color\": \"{% if run.firstJudgingRun %}{{ colors[run.firstJudgingRun.runresult]|default('grey') }}{% else %}grey{% endif %}\",
                        \"description\": \"{{ run.description(true)|default(run.rank) }}\",
                    },
                    {% endfor %}
                ]
            }
        ];
        nv.addGraph(function () {
            var chart = create_chart(testcase_times, maxY);
            chart.tooltip.contentGenerator(function (obj) {
                var format = d3.format(\".3f\");
                return \"<b>Testcase \" + obj.data.description + \"</b><br><b>Runtime:</b> \" + format(obj.data.value) + \"s\";
            });
            chart.xAxis.axisLabel(\"Testcase Rank\");
            d3.select('#testcaseruntime svg')
                .datum(testcase_times)
                .call(chart);
            var svgsize = chart.container.clientWidth || chart.container.parentNode.clientWidth;
            var line = d3.select('#testcaseruntime svg')
                .append('line')
                .attr({
                    x1: chart.margin().left,
                    y1: chart.yAxis.scale()({{ timelimit }}) + chart.margin().top,
                    x2: +svgsize - chart.margin().right,
                    y2: chart.yAxis.scale()({{ timelimit }}) + chart.margin().top,
                })
                .style(\"stroke\", \"#F00\");
            nv.utils.windowResize(chart.update);
            return chart;
        });
        {% endif %}

        {# TODO: merge this in the above graph? #}
        {% if externalJudgement is not null and externalJudgement.result is not null %}
        var external_times = [
            {
                key: \"Runtime\",
                values: [
                    {% for run in externalRuns %}
                    {
                        \"label\": \"{{ run.rank }}\",
                        \"value\": {% if run.firstExternalRun %}{{ run.firstExternalRun.runtime|default(0) }}{% else %}0{% endif %},
                        \"color\": \"{% if run.firstExternalRun %}{{ colors[run.firstExternalRun.result]|default('grey') }}{% else %}grey{% endif %}\",
                        \"description\": \"{{ run.description|default(run.rank) }}\",
                    },
                    {% endfor %}
                ]
            }
        ];
        nv.addGraph(function () {
            var chart = create_chart(external_times, maxY);
            chart.tooltip.contentGenerator(function (obj) {
                var format = d3.format(\".3f\");
                return \"<b>Testcase \" + obj.data.description + \"</b><br><b>Runtime:</b> \" + format(obj.data.value) + \"s\";
            });
            chart.xAxis.axisLabel(\"Testcase Rank\");
            d3.select('#externalruntime svg')
                .datum(external_times)
                .call(chart);
            var svgsize = chart.container.clientWidth || chart.container.parentNode.clientWidth;
            var line = d3.select('#externalruntime svg')
                .append('line')
                .attr({
                    x1: chart.margin().left,
                    y1: chart.yAxis.scale()({{ timelimit }}) + chart.margin().top,
                    x2: +svgsize - chart.margin().right,
                    y2: chart.yAxis.scale()({{ timelimit }}) + chart.margin().top,
                })
                .style(\"stroke\", \"#F00\");
            nv.utils.windowResize(chart.update);
            return chart;
        });
        {% endif %}
    })
</script>

{% include 'jury/analysis/download_graphs.html.twig' %}
", "jury/partials/submission_graph.html.twig", "/opt/domjudge/domserver/webapp/templates/jury/partials/submission_graph.html.twig");
    }
}
