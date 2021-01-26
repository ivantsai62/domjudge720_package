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

/* team/partials/submission.html.twig */
class __TwigTemplate_26c9f042d20f4b0819540c26983f750a59433af210600f7d84fb84d52c69c4c0 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "team/partials/submission.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "team/partials/submission.html.twig"));

        // line 1
        echo "
";
        // line 2
        if (((twig_test_empty((isset($context["judging"]) || array_key_exists("judging", $context) ? $context["judging"] : (function () { throw new RuntimeError('Variable "judging" does not exist.', 2, $this->source); })())) || (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["judging"]) || array_key_exists("judging", $context) ? $context["judging"] : (function () { throw new RuntimeError('Variable "judging" does not exist.', 2, $this->source); })()), "submission", [], "any", false, false, false, 2), "submittime", [], "any", false, false, false, 2) >= twig_get_attribute($this->env, $this->source, (isset($context["current_team_contest"]) || array_key_exists("current_team_contest", $context) ? $context["current_team_contest"] : (function () { throw new RuntimeError('Variable "current_team_contest" does not exist.', 2, $this->source); })()), "endtime", [], "any", false, false, false, 2))) || ((isset($context["verificationRequired"]) || array_key_exists("verificationRequired", $context) ? $context["verificationRequired"] : (function () { throw new RuntimeError('Variable "verificationRequired" does not exist.', 2, $this->source); })()) &&  !twig_get_attribute($this->env, $this->source, (isset($context["judging"]) || array_key_exists("judging", $context) ? $context["judging"] : (function () { throw new RuntimeError('Variable "judging" does not exist.', 2, $this->source); })()), "verified", [], "any", false, false, false, 2)))) {
            // line 3
            echo "    <div class=\"alert alert-danger\">Submission not found for this team or not judged yet.</div>
";
        } else {
            // line 5
            echo "    <div class=\"container\">
        ";
            // line 6
            if ( !twig_get_attribute($this->env, $this->source, (isset($context["judging"]) || array_key_exists("judging", $context) ? $context["judging"] : (function () { throw new RuntimeError('Variable "judging" does not exist.', 6, $this->source); })()), "valid", [], "any", false, false, false, 6)) {
                // line 7
                echo "            <div class=\"alert alert-warning\">This submission is being ignored. It is not used in determining your
                score.
            </div>
        ";
            }
            // line 11
            echo "
        <div class=\"d-flex flex-row\">
            <div class=\"p-2\">
                Problem:
                <b>
                        <span class=\"probid\">
                            ";
            // line 17
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["judging"]) || array_key_exists("judging", $context) ? $context["judging"] : (function () { throw new RuntimeError('Variable "judging" does not exist.', 17, $this->source); })()), "submission", [], "any", false, false, false, 17), "contestProblem", [], "any", false, false, false, 17), "shortname", [], "any", false, false, false, 17), "html", null, true);
            echo "</span> -
                    ";
            // line 18
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["judging"]) || array_key_exists("judging", $context) ? $context["judging"] : (function () { throw new RuntimeError('Variable "judging" does not exist.', 18, $this->source); })()), "submission", [], "any", false, false, false, 18), "contestProblem", [], "any", false, false, false, 18), "problem", [], "any", false, false, false, 18), "name", [], "any", false, false, false, 18), "html", null, true);
            echo "
                </b>
            </div>
            <div class=\"p-2\">
                Submitted:
                <b>";
            // line 23
            echo twig_escape_filter($this->env, $this->extensions['App\Twig\TwigExtension']->printtime(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["judging"]) || array_key_exists("judging", $context) ? $context["judging"] : (function () { throw new RuntimeError('Variable "judging" does not exist.', 23, $this->source); })()), "submission", [], "any", false, false, false, 23), "submittime", [], "any", false, false, false, 23), null, (isset($context["current_team_contest"]) || array_key_exists("current_team_contest", $context) ? $context["current_team_contest"] : (function () { throw new RuntimeError('Variable "current_team_contest" does not exist.', 23, $this->source); })())), "html", null, true);
            echo "</b>
            </div>
            <div class=\"p-2\">
                Language:
                <b>";
            // line 27
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["judging"]) || array_key_exists("judging", $context) ? $context["judging"] : (function () { throw new RuntimeError('Variable "judging" does not exist.', 27, $this->source); })()), "submission", [], "any", false, false, false, 27), "language", [], "any", false, false, false, 27), "name", [], "any", false, false, false, 27), "html", null, true);
            echo "</b>
            </div>
            <div class=\"p-2\">
                Compilation:
                ";
            // line 31
            if ((twig_get_attribute($this->env, $this->source, (isset($context["judging"]) || array_key_exists("judging", $context) ? $context["judging"] : (function () { throw new RuntimeError('Variable "judging" does not exist.', 31, $this->source); })()), "result", [], "any", false, false, false, 31) == "compiler-error")) {
                // line 32
                echo "                    <span class=\"badge badge-danger\">failed</span>
                ";
            } else {
                // line 34
                echo "                    <span class=\"badge badge-success\">successful</span>
                ";
            }
            // line 36
            echo "            </div>
        </div>
        ";
            // line 39
            echo "        ";
            // line 40
            echo "        <div class=\"p-2\">
            Testcase:";
            // line 41
            echo $this->extensions['App\Twig\TwigExtension']->testcaseResults(twig_get_attribute($this->env, $this->source, (isset($context["judging"]) || array_key_exists("judging", $context) ? $context["judging"] : (function () { throw new RuntimeError('Variable "judging" does not exist.', 41, $this->source); })()), "submission", [], "any", false, false, false, 41));
            // line 42
            echo "</div>
        ";
            // line 44
            echo "        ";
            if ((twig_get_attribute($this->env, $this->source, (isset($context["judging"]) || array_key_exists("judging", $context) ? $context["judging"] : (function () { throw new RuntimeError('Variable "judging" does not exist.', 44, $this->source); })()), "result", [], "any", false, false, false, 44) != "compiler-error")) {
                // line 45
                echo "            <div class=\"d-flex flex-row\">
                <div class=\"p-2\">
                    Run result: ";
                // line 47
                echo $this->extensions['App\Twig\TwigExtension']->printResult(twig_get_attribute($this->env, $this->source, (isset($context["judging"]) || array_key_exists("judging", $context) ? $context["judging"] : (function () { throw new RuntimeError('Variable "judging" does not exist.', 47, $this->source); })()), "result", [], "any", false, false, false, 47));
                echo "
                </div>
            </div>
        ";
            }
            // line 51
            echo "
        ";
            // line 52
            if ((((isset($context["showCompile"]) || array_key_exists("showCompile", $context) ? $context["showCompile"] : (function () { throw new RuntimeError('Variable "showCompile" does not exist.', 52, $this->source); })()) == 2) || (((isset($context["showCompile"]) || array_key_exists("showCompile", $context) ? $context["showCompile"] : (function () { throw new RuntimeError('Variable "showCompile" does not exist.', 52, $this->source); })()) == 1) && (twig_get_attribute($this->env, $this->source, (isset($context["judging"]) || array_key_exists("judging", $context) ? $context["judging"] : (function () { throw new RuntimeError('Variable "judging" does not exist.', 52, $this->source); })()), "result", [], "any", false, false, false, 52) == "compiler-error")))) {
                // line 53
                echo "            <hr/>
            <h4 class=\"text-center\">Compilation output</h4>
            ";
                // line 55
                if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["judging"]) || array_key_exists("judging", $context) ? $context["judging"] : (function () { throw new RuntimeError('Variable "judging" does not exist.', 55, $this->source); })()), "outputCompile", [0 => true], "method", false, false, false, 55))) {
                    // line 56
                    echo "                <pre class=\"output_text pre-scrollable\">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["judging"]) || array_key_exists("judging", $context) ? $context["judging"] : (function () { throw new RuntimeError('Variable "judging" does not exist.', 56, $this->source); })()), "outputCompile", [0 => true], "method", false, false, false, 56), "html", null, true);
                    echo "</pre>
            ";
                } else {
                    // line 58
                    echo "                <p class=\"nodata\">There were no compiler errors or warnings.</p>
            ";
                }
                // line 60
                echo "        ";
            }
            // line 61
            echo "
        ";
            // line 62
            if (((isset($context["showSampleOutput"]) || array_key_exists("showSampleOutput", $context) ? $context["showSampleOutput"] : (function () { throw new RuntimeError('Variable "showSampleOutput" does not exist.', 62, $this->source); })()) && (twig_get_attribute($this->env, $this->source, (isset($context["judging"]) || array_key_exists("judging", $context) ? $context["judging"] : (function () { throw new RuntimeError('Variable "judging" does not exist.', 62, $this->source); })()), "result", [], "any", false, false, false, 62) != "compiler-error"))) {
                // line 63
                echo "            <hr/>
            <h4 class=\"text-center\">Run(s) on the provided sample data</h4>

            ";
                // line 66
                if (twig_test_empty((isset($context["runs"]) || array_key_exists("runs", $context) ? $context["runs"] : (function () { throw new RuntimeError('Variable "runs" does not exist.', 66, $this->source); })()))) {
                    // line 67
                    echo "                <p class=\"nodata\">No sample cases available.</p>
            ";
                } else {
                    // line 69
                    echo "                ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable((isset($context["runs"]) || array_key_exists("runs", $context) ? $context["runs"] : (function () { throw new RuntimeError('Variable "runs" does not exist.', 69, $this->source); })()));
                    foreach ($context['_seq'] as $context["_key"] => $context["run"]) {
                        // line 70
                        echo "                    <h5 id=\"run-";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["run"], "rank", [], "any", false, false, false, 70), "html", null, true);
                        echo "\" class=\"text-center mt-4\">Run ";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["run"], "rank", [], "any", false, false, false, 70), "html", null, true);
                        echo "</h5>

                    ";
                        // line 72
                        $context["judgingRun"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["run"], "judgingRuns", [], "any", false, false, false, 72), "first", [], "any", false, false, false, 72);
                        // line 73
                        echo "                    ";
                        if ((((isset($context["judgingRun"]) || array_key_exists("judgingRun", $context) ? $context["judgingRun"] : (function () { throw new RuntimeError('Variable "judgingRun" does not exist.', 73, $this->source); })()) == null) || (twig_get_attribute($this->env, $this->source, (isset($context["judgingRun"]) || array_key_exists("judgingRun", $context) ? $context["judgingRun"] : (function () { throw new RuntimeError('Variable "judgingRun" does not exist.', 73, $this->source); })()), "runresult", [], "any", false, false, false, 73) == null))) {
                            // line 74
                            echo "                        <p class=\"nodata\">Run not finished yet.</p>
                    ";
                        } else {
                            // line 76
                            echo "                        <div class=\"row\">
                            <div class=\"col-md-";
                            // line 77
                            echo twig_escape_filter($this->env, (((isset($context["size"]) || array_key_exists("size", $context))) ? (_twig_default_filter((isset($context["size"]) || array_key_exists("size", $context) ? $context["size"] : (function () { throw new RuntimeError('Variable "size" does not exist.', 77, $this->source); })()), 4)) : (4)), "html", null, true);
                            echo "\">
                                <table class=\"table table-sm table-striped\">
                                    <tr>
                                        <th>Description</th>
                                        <td>";
                            // line 81
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["run"], "description", [0 => true], "method", false, false, false, 81), "html", null, true);
                            echo "</td>
                                    </tr>
                                    <tr>
                                        <th>Runtime</th>
                                        <td>";
                            // line 85
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["judgingRun"]) || array_key_exists("judgingRun", $context) ? $context["judgingRun"] : (function () { throw new RuntimeError('Variable "judgingRun" does not exist.', 85, $this->source); })()), "runtime", [], "any", false, false, false, 85), "html", null, true);
                            echo " sec</td>
                                    </tr>
                                    <tr>
                                        <th>Result</th>
                                        <td>
                                                <span class=\"sol sol_";
                            // line 90
                            if ((twig_get_attribute($this->env, $this->source, (isset($context["judgingRun"]) || array_key_exists("judgingRun", $context) ? $context["judgingRun"] : (function () { throw new RuntimeError('Variable "judgingRun" does not exist.', 90, $this->source); })()), "runresult", [], "any", false, false, false, 90) != "correct")) {
                                echo " in";
                            }
                            echo "correct\">
                                                    ";
                            // line 91
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["judgingRun"]) || array_key_exists("judgingRun", $context) ? $context["judgingRun"] : (function () { throw new RuntimeError('Variable "judgingRun" does not exist.', 91, $this->source); })()), "runresult", [], "any", false, false, false, 91), "html", null, true);
                            echo "
                                                </span>
                                        </td>
                                    </tr>
                                </table>
                            </div>
                        </div>

                        <h6 class=\"text-center\">Program output</h6>
                        ";
                            // line 100
                            if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["judgingRun"]) || array_key_exists("judgingRun", $context) ? $context["judgingRun"] : (function () { throw new RuntimeError('Variable "judgingRun" does not exist.', 100, $this->source); })()), "output", [], "any", false, false, false, 100), "outputRun", [], "any", false, false, false, 100))) {
                                // line 101
                                echo "                            <pre class=\"output_text\">";
                                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["judgingRun"]) || array_key_exists("judgingRun", $context) ? $context["judgingRun"] : (function () { throw new RuntimeError('Variable "judgingRun" does not exist.', 101, $this->source); })()), "output", [], "any", false, false, false, 101), "outputRun", [], "any", false, false, false, 101), "html", null, true);
                                echo "</pre>
                        ";
                            } else {
                                // line 103
                                echo "                            <p class=\"nodata\">There was no program output.</p>
                        ";
                            }
                            // line 105
                            echo "
                        <h6 class=\"text-center\">Diff output</h6>
                        ";
                            // line 107
                            if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["judgingRun"]) || array_key_exists("judgingRun", $context) ? $context["judgingRun"] : (function () { throw new RuntimeError('Variable "judgingRun" does not exist.', 107, $this->source); })()), "output", [], "any", false, false, false, 107), "outputDiff", [], "any", false, false, false, 107))) {
                                // line 108
                                echo "                            <pre class=\"output_text\">";
                                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["judgingRun"]) || array_key_exists("judgingRun", $context) ? $context["judgingRun"] : (function () { throw new RuntimeError('Variable "judgingRun" does not exist.', 108, $this->source); })()), "output", [], "any", false, false, false, 108), "outputDiff", [], "any", false, false, false, 108), "html", null, true);
                                echo "</pre>
                        ";
                            } else {
                                // line 110
                                echo "                            <p class=\"nodata\">There was no diff output.</p>
                        ";
                            }
                            // line 112
                            echo "
                        <h6 class=\"text-center\">Error output (info/debug/errors)</h6>
                        ";
                            // line 114
                            if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["judgingRun"]) || array_key_exists("judgingRun", $context) ? $context["judgingRun"] : (function () { throw new RuntimeError('Variable "judgingRun" does not exist.', 114, $this->source); })()), "output", [], "any", false, false, false, 114), "outputError", [], "any", false, false, false, 114))) {
                                // line 115
                                echo "                            <pre class=\"output_text\">";
                                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["judgingRun"]) || array_key_exists("judgingRun", $context) ? $context["judgingRun"] : (function () { throw new RuntimeError('Variable "judgingRun" does not exist.', 115, $this->source); })()), "output", [], "any", false, false, false, 115), "outputError", [], "any", false, false, false, 115), "html", null, true);
                                echo "</pre>
                        ";
                            } else {
                                // line 117
                                echo "                            <p class=\"nodata\">There was no stderr output.</p>
                        ";
                            }
                            // line 119
                            echo "                    ";
                        }
                        // line 120
                        echo "                ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['run'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 121
                    echo "            ";
                }
                echo " ";
                // line 122
                echo "        ";
            }
            echo " ";
            // line 123
            echo "    </div>
";
        }
        // line 124
        echo " ";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "team/partials/submission.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  305 => 124,  301 => 123,  297 => 122,  293 => 121,  287 => 120,  284 => 119,  280 => 117,  274 => 115,  272 => 114,  268 => 112,  264 => 110,  258 => 108,  256 => 107,  252 => 105,  248 => 103,  242 => 101,  240 => 100,  228 => 91,  222 => 90,  214 => 85,  207 => 81,  200 => 77,  197 => 76,  193 => 74,  190 => 73,  188 => 72,  180 => 70,  175 => 69,  171 => 67,  169 => 66,  164 => 63,  162 => 62,  159 => 61,  156 => 60,  152 => 58,  146 => 56,  144 => 55,  140 => 53,  138 => 52,  135 => 51,  128 => 47,  124 => 45,  121 => 44,  118 => 42,  116 => 41,  113 => 40,  111 => 39,  107 => 36,  103 => 34,  99 => 32,  97 => 31,  90 => 27,  83 => 23,  75 => 18,  71 => 17,  63 => 11,  57 => 7,  55 => 6,  52 => 5,  48 => 3,  46 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("
{% if judging is empty or judging.submission.submittime >= current_team_contest.endtime or (verificationRequired and not judging.verified) %}
    <div class=\"alert alert-danger\">Submission not found for this team or not judged yet.</div>
{% else %}
    <div class=\"container\">
        {% if not judging.valid %}
            <div class=\"alert alert-warning\">This submission is being ignored. It is not used in determining your
                score.
            </div>
        {% endif %}

        <div class=\"d-flex flex-row\">
            <div class=\"p-2\">
                Problem:
                <b>
                        <span class=\"probid\">
                            {{ judging.submission.contestProblem.shortname }}</span> -
                    {{ judging.submission.contestProblem.problem.name }}
                </b>
            </div>
            <div class=\"p-2\">
                Submitted:
                <b>{{ judging.submission.submittime | printtime(null, current_team_contest) }}</b>
            </div>
            <div class=\"p-2\">
                Language:
                <b>{{ judging.submission.language.name }}</b>
            </div>
            <div class=\"p-2\">
                Compilation:
                {% if judging.result == 'compiler-error' %}
                    <span class=\"badge badge-danger\">failed</span>
                {% else %}
                    <span class=\"badge badge-success\">successful</span>
                {% endif %}
            </div>
        </div>
        {#新增部份#}
        {#勾勾圖案 將judging.submission 丟進 TwigExtension.php(Twig Filters) 的 testcaseResults 函式處理 回傳顯示結果 #}
        <div class=\"p-2\">
            Testcase:  {{- judging.submission | testcaseResults -}}
        </div>
        {#/新增部份#}
        {% if judging.result != 'compiler-error' %}
            <div class=\"d-flex flex-row\">
                <div class=\"p-2\">
                    Run result: {{ judging.result | printResult }}
                </div>
            </div>
        {% endif %}

        {% if showCompile == 2 or (showCompile == 1 and judging.result == 'compiler-error') %}
            <hr/>
            <h4 class=\"text-center\">Compilation output</h4>
            {% if judging.outputCompile(true) is not empty %}
                <pre class=\"output_text pre-scrollable\">{{ judging.outputCompile(true) }}</pre>
            {% else %}
                <p class=\"nodata\">There were no compiler errors or warnings.</p>
            {% endif %}
        {% endif %}

        {% if showSampleOutput and judging.result != 'compiler-error' %}
            <hr/>
            <h4 class=\"text-center\">Run(s) on the provided sample data</h4>

            {% if runs is empty %}
                <p class=\"nodata\">No sample cases available.</p>
            {% else %}
                {% for run in runs %}
                    <h5 id=\"run-{{ run.rank }}\" class=\"text-center mt-4\">Run {{ run.rank }}</h5>

                    {% set judgingRun = run.judgingRuns.first %}
                    {% if judgingRun == null or judgingRun.runresult == null %}
                        <p class=\"nodata\">Run not finished yet.</p>
                    {% else %}
                        <div class=\"row\">
                            <div class=\"col-md-{{ size|default(4) }}\">
                                <table class=\"table table-sm table-striped\">
                                    <tr>
                                        <th>Description</th>
                                        <td>{{ run.description(true) }}</td>
                                    </tr>
                                    <tr>
                                        <th>Runtime</th>
                                        <td>{{ judgingRun.runtime }} sec</td>
                                    </tr>
                                    <tr>
                                        <th>Result</th>
                                        <td>
                                                <span class=\"sol sol_{% if judgingRun.runresult != 'correct' %} in{% endif %}correct\">
                                                    {{ judgingRun.runresult }}
                                                </span>
                                        </td>
                                    </tr>
                                </table>
                            </div>
                        </div>

                        <h6 class=\"text-center\">Program output</h6>
                        {% if judgingRun.output.outputRun is not empty %}
                            <pre class=\"output_text\">{{ judgingRun.output.outputRun }}</pre>
                        {% else %}
                            <p class=\"nodata\">There was no program output.</p>
                        {% endif %}

                        <h6 class=\"text-center\">Diff output</h6>
                        {% if judgingRun.output.outputDiff is not empty %}
                            <pre class=\"output_text\">{{ judgingRun.output.outputDiff }}</pre>
                        {% else %}
                            <p class=\"nodata\">There was no diff output.</p>
                        {% endif %}

                        <h6 class=\"text-center\">Error output (info/debug/errors)</h6>
                        {% if judgingRun.output.outputError is not empty %}
                            <pre class=\"output_text\">{{ judgingRun.output.outputError }}</pre>
                        {% else %}
                            <p class=\"nodata\">There was no stderr output.</p>
                        {% endif %}
                    {% endif %}
                {% endfor %}
            {% endif %} {# not runs is empty #}
        {% endif %} {# showSampleOutput and judging.result != 'compiler-error' #}
    </div>
{% endif %} {# not (judging is empty or judging.submission.submittime >= current_team_contest.endtime or (verificationRequired and not judging.verified)) #}
", "team/partials/submission.html.twig", "/opt/domjudge/domserver/webapp/templates/team/partials/submission.html.twig");
    }
}
