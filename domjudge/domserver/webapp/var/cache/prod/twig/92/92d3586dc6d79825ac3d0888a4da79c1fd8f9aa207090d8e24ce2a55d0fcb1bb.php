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
class __TwigTemplate_2d1fd33586a337ae816f8433624020da150b1c2be9cd58cbbe21c2bf37e2cf56 extends \Twig\Template
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
        // line 3
        if (twig_test_empty(($context["submissions"] ?? null))) {
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
            $context['_seq'] = twig_ensure_traversable(($context["submissions"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["submission"]) {
                // line 17
                echo "        ";
                // line 18
                echo "            ";
                $context["link"] = null;
                // line 19
                echo "            ";
                if ((((((twig_get_attribute($this->env, $this->source, $context["submission"], "submittime", [], "any", false, false, false, 19) < twig_get_attribute($this->env, $this->source, ($context["current_team_contest"] ?? null), "endtime", [], "any", false, false, false, 19)) && twig_get_attribute($this->env, $this->source, $context["submission"], "result", [], "any", false, false, false, 19)) &&  !twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["submission"], "judgings", [], "any", false, false, false, 19), "first", [], "any", false, false, false, 19))) &&  !twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["submission"], "judgings", [], "any", false, false, false, 19), "first", [], "any", false, false, false, 19), "result", [], "any", false, false, false, 19))) && ( !($context["verificationRequired"] ?? null) || twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["submission"], "judgings", [], "any", false, false, false, 19), "first", [], "any", false, false, false, 19), "verified", [], "any", false, false, false, 19)))) {
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
                    $context["classes"] = (($context["classes"] ?? null) . " ignore");
                    // line 26
                    echo "            ";
                }
                // line 27
                echo "            ";
                if ((twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["submission"], "judgings", [], "any", false, false, false, 27), "first", [], "any", false, false, false, 27)) ||  !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["submission"], "judgings", [], "any", false, false, false, 27), "first", [], "any", false, false, false, 27), "seen", [], "any", false, false, false, 27))) {
                    // line 28
                    echo "                ";
                    $context["classes"] = (($context["classes"] ?? null) . " unseen");
                    // line 29
                    echo "            ";
                }
                // line 30
                echo "            <tr class=\"";
                echo twig_escape_filter($this->env, ($context["classes"] ?? null), "html", null, true);
                echo "\">
                <td>
                    <a data-ajax-modal data-ajax-modal-after=\"markSeen\" ";
                // line 32
                if (($context["link"] ?? null)) {
                    echo "href=\"";
                    echo twig_escape_filter($this->env, ($context["link"] ?? null), "html", null, true);
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
                if (($context["link"] ?? null)) {
                    echo "href=\"";
                    echo twig_escape_filter($this->env, ($context["link"] ?? null), "html", null, true);
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
                if (($context["link"] ?? null)) {
                    echo "href=\"";
                    echo twig_escape_filter($this->env, ($context["link"] ?? null), "html", null, true);
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
                if (($context["link"] ?? null)) {
                    echo "href=\"";
                    echo twig_escape_filter($this->env, ($context["link"] ?? null), "html", null, true);
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
($context["verificationRequired"] ?? null) &&  !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["submission"], "judgings", [], "any", false, false, false, 52), "first", [], "any", false, false, false, 52), "verified", [], "any", false, false, false, 52))) {
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
                        $context['_seq'] = twig_ensure_traversable(($context["TaskResults"] ?? null));
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
                    if (($context["part"] ?? null)) {
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
        return array (  213 => 74,  205 => 70,  201 => 67,  198 => 65,  196 => 64,  187 => 61,  182 => 60,  180 => 59,  178 => 58,  175 => 57,  172 => 55,  170 => 54,  168 => 53,  166 => 52,  164 => 51,  162 => 50,  159 => 49,  157 => 48,  150 => 47,  143 => 43,  133 => 42,  126 => 38,  116 => 37,  109 => 33,  101 => 32,  95 => 30,  92 => 29,  89 => 28,  86 => 27,  83 => 26,  80 => 25,  77 => 24,  75 => 23,  72 => 22,  69 => 21,  66 => 20,  63 => 19,  60 => 18,  58 => 17,  54 => 16,  43 => 6,  39 => 4,  37 => 3,);
    }

    public function getSourceContext()
    {
        return new Source("", "team/partials/submission_list.html.twig", "/opt/domjudge/domserver/webapp/templates/team/partials/submission_list.html.twig");
    }
}
