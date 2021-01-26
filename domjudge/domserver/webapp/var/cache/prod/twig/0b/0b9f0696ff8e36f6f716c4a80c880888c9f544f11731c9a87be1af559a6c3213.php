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
class __TwigTemplate_413e23910d05a6b20440a089ca8b2a3df4a4109a81131034415b47b34e6c197b extends \Twig\Template
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
        // line 1
        echo "
";
        // line 2
        if (((twig_test_empty(($context["judging"] ?? null)) || (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["judging"] ?? null), "submission", [], "any", false, false, false, 2), "submittime", [], "any", false, false, false, 2) >= twig_get_attribute($this->env, $this->source, ($context["current_team_contest"] ?? null), "endtime", [], "any", false, false, false, 2))) || (($context["verificationRequired"] ?? null) &&  !twig_get_attribute($this->env, $this->source, ($context["judging"] ?? null), "verified", [], "any", false, false, false, 2)))) {
            // line 3
            echo "    <div class=\"alert alert-danger\">Submission not found for this team or not judged yet.</div>
";
        } else {
            // line 5
            echo "    <div class=\"container\">
        ";
            // line 6
            if ( !twig_get_attribute($this->env, $this->source, ($context["judging"] ?? null), "valid", [], "any", false, false, false, 6)) {
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
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["judging"] ?? null), "submission", [], "any", false, false, false, 17), "contestProblem", [], "any", false, false, false, 17), "shortname", [], "any", false, false, false, 17), "html", null, true);
            echo "</span> -
                    ";
            // line 18
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["judging"] ?? null), "submission", [], "any", false, false, false, 18), "contestProblem", [], "any", false, false, false, 18), "problem", [], "any", false, false, false, 18), "name", [], "any", false, false, false, 18), "html", null, true);
            echo "
                </b>
            </div>
            <div class=\"p-2\">
                Submitted:
                <b>";
            // line 23
            echo twig_escape_filter($this->env, $this->extensions['App\Twig\TwigExtension']->printtime(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["judging"] ?? null), "submission", [], "any", false, false, false, 23), "submittime", [], "any", false, false, false, 23), null, ($context["current_team_contest"] ?? null)), "html", null, true);
            echo "</b>
            </div>
            <div class=\"p-2\">
                Language:
                <b>";
            // line 27
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["judging"] ?? null), "submission", [], "any", false, false, false, 27), "language", [], "any", false, false, false, 27), "name", [], "any", false, false, false, 27), "html", null, true);
            echo "</b>
            </div>
            <div class=\"p-2\">
                Compilation:
                ";
            // line 31
            if ((twig_get_attribute($this->env, $this->source, ($context["judging"] ?? null), "result", [], "any", false, false, false, 31) == "compiler-error")) {
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
            echo $this->extensions['App\Twig\TwigExtension']->testcaseResults(twig_get_attribute($this->env, $this->source, ($context["judging"] ?? null), "submission", [], "any", false, false, false, 41));
            // line 42
            echo "</div>
        ";
            // line 44
            echo "        ";
            if ((twig_get_attribute($this->env, $this->source, ($context["judging"] ?? null), "result", [], "any", false, false, false, 44) != "compiler-error")) {
                // line 45
                echo "            <div class=\"d-flex flex-row\">
                <div class=\"p-2\">
                    Run result: ";
                // line 47
                echo $this->extensions['App\Twig\TwigExtension']->printResult(twig_get_attribute($this->env, $this->source, ($context["judging"] ?? null), "result", [], "any", false, false, false, 47));
                echo "
                </div>
            </div>
        ";
            }
            // line 51
            echo "
        ";
            // line 52
            if (((($context["showCompile"] ?? null) == 2) || ((($context["showCompile"] ?? null) == 1) && (twig_get_attribute($this->env, $this->source, ($context["judging"] ?? null), "result", [], "any", false, false, false, 52) == "compiler-error")))) {
                // line 53
                echo "            <hr/>
            <h4 class=\"text-center\">Compilation output</h4>
            ";
                // line 55
                if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["judging"] ?? null), "outputCompile", [0 => true], "method", false, false, false, 55))) {
                    // line 56
                    echo "                <pre class=\"output_text pre-scrollable\">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["judging"] ?? null), "outputCompile", [0 => true], "method", false, false, false, 56), "html", null, true);
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
            if ((($context["showSampleOutput"] ?? null) && (twig_get_attribute($this->env, $this->source, ($context["judging"] ?? null), "result", [], "any", false, false, false, 62) != "compiler-error"))) {
                // line 63
                echo "            <hr/>
            <h4 class=\"text-center\">Run(s) on the provided sample data</h4>

            ";
                // line 66
                if (twig_test_empty(($context["runs"] ?? null))) {
                    // line 67
                    echo "                <p class=\"nodata\">No sample cases available.</p>
            ";
                } else {
                    // line 69
                    echo "                ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(($context["runs"] ?? null));
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
                        if (((($context["judgingRun"] ?? null) == null) || (twig_get_attribute($this->env, $this->source, ($context["judgingRun"] ?? null), "runresult", [], "any", false, false, false, 73) == null))) {
                            // line 74
                            echo "                        <p class=\"nodata\">Run not finished yet.</p>
                    ";
                        } else {
                            // line 76
                            echo "                        <div class=\"row\">
                            <div class=\"col-md-";
                            // line 77
                            echo twig_escape_filter($this->env, (((isset($context["size"]) || array_key_exists("size", $context))) ? (_twig_default_filter(($context["size"] ?? null), 4)) : (4)), "html", null, true);
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
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["judgingRun"] ?? null), "runtime", [], "any", false, false, false, 85), "html", null, true);
                            echo " sec</td>
                                    </tr>
                                    <tr>
                                        <th>Result</th>
                                        <td>
                                                <span class=\"sol sol_";
                            // line 90
                            if ((twig_get_attribute($this->env, $this->source, ($context["judgingRun"] ?? null), "runresult", [], "any", false, false, false, 90) != "correct")) {
                                echo " in";
                            }
                            echo "correct\">
                                                    ";
                            // line 91
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["judgingRun"] ?? null), "runresult", [], "any", false, false, false, 91), "html", null, true);
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
                            if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["judgingRun"] ?? null), "output", [], "any", false, false, false, 100), "outputRun", [], "any", false, false, false, 100))) {
                                // line 101
                                echo "                            <pre class=\"output_text\">";
                                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["judgingRun"] ?? null), "output", [], "any", false, false, false, 101), "outputRun", [], "any", false, false, false, 101), "html", null, true);
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
                            if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["judgingRun"] ?? null), "output", [], "any", false, false, false, 107), "outputDiff", [], "any", false, false, false, 107))) {
                                // line 108
                                echo "                            <pre class=\"output_text\">";
                                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["judgingRun"] ?? null), "output", [], "any", false, false, false, 108), "outputDiff", [], "any", false, false, false, 108), "html", null, true);
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
                            if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["judgingRun"] ?? null), "output", [], "any", false, false, false, 114), "outputError", [], "any", false, false, false, 114))) {
                                // line 115
                                echo "                            <pre class=\"output_text\">";
                                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["judgingRun"] ?? null), "output", [], "any", false, false, false, 115), "outputError", [], "any", false, false, false, 115), "html", null, true);
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
        return array (  299 => 124,  295 => 123,  291 => 122,  287 => 121,  281 => 120,  278 => 119,  274 => 117,  268 => 115,  266 => 114,  262 => 112,  258 => 110,  252 => 108,  250 => 107,  246 => 105,  242 => 103,  236 => 101,  234 => 100,  222 => 91,  216 => 90,  208 => 85,  201 => 81,  194 => 77,  191 => 76,  187 => 74,  184 => 73,  182 => 72,  174 => 70,  169 => 69,  165 => 67,  163 => 66,  158 => 63,  156 => 62,  153 => 61,  150 => 60,  146 => 58,  140 => 56,  138 => 55,  134 => 53,  132 => 52,  129 => 51,  122 => 47,  118 => 45,  115 => 44,  112 => 42,  110 => 41,  107 => 40,  105 => 39,  101 => 36,  97 => 34,  93 => 32,  91 => 31,  84 => 27,  77 => 23,  69 => 18,  65 => 17,  57 => 11,  51 => 7,  49 => 6,  46 => 5,  42 => 3,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "team/partials/submission.html.twig", "/opt/domjudge/domserver/webapp/templates/team/partials/submission.html.twig");
    }
}
