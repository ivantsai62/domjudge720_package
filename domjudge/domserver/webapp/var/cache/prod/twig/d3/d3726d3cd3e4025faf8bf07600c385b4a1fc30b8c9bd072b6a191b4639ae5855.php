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

/* jury/submission.html.twig */
class __TwigTemplate_9795cbf04f3acbf648119c75aeb98aa02a96d7f0d3c35c067ee6114e4059e8ee extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'extrahead' => [$this, 'block_extrahead'],
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 2
        return "jury/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("jury/base.html.twig", "jury/submission.html.twig", 2);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Submission s";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["submission"] ?? null), "submitid", [], "any", false, false, false, 4), "html", null, true);
        echo " - ";
        $this->displayParentBlock("title", $context, $blocks);
    }

    // line 6
    public function block_extrahead($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 7
        echo "    ";
        $this->displayParentBlock("extrahead", $context, $blocks);
        echo "
    <link rel=\"stylesheet\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/nv.d3.min.css"), "html", null, true);
        echo "\">
    <script src=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/d3.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/nv.d3.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/FileSaver.min.js"), "html", null, true);
        echo "\"></script>
    <style>
        .judging-table td a, .judging-table td a:hover {
            display: block;
            text-decoration: none;
            color: inherit;
        }

        .judging-table tr.disabled td a {
            color: silver
        }
    </style>
";
    }

    // line 25
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 26
        echo "
    ";
        // line 27
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["submission"] ?? null), "externalJudgements", [], "any", false, false, false, 27), "empty", [], "any", false, false, false, 27)) {
            // line 28
            echo "        ";
            $context["externalJudgement"] = null;
            // line 29
            echo "    ";
        } else {
            // line 30
            echo "        ";
            $context["externalJudgement"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["submission"] ?? null), "externalJudgements", [], "any", false, false, false, 30), "first", [], "any", false, false, false, 30);
            // line 31
            echo "    ";
        }
        // line 32
        echo "
    ";
        // line 33
        if (($context["claimWarning"] ?? null)) {
            // line 34
            echo "        <div class=\"alert alert-warning\">
            ";
            // line 35
            echo twig_escape_filter($this->env, ($context["claimWarning"] ?? null), "html", null, true);
            echo "
        </div>
    ";
        }
        // line 38
        echo "    <div class=\"mb-3\">
        <h1 style=\"display: inline;\">
            Submission ";
        // line 40
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["submission"] ?? null), "submitid", [], "any", false, false, false, 40), "html", null, true);
        echo "
            ";
        // line 41
        if (twig_get_attribute($this->env, $this->source, ($context["submission"] ?? null), "originalSubmission", [], "any", false, false, false, 41)) {
            // line 42
            echo "                ";
            $context["origSubmissionUrl"] = $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_submission", ["submitId" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["submission"] ?? null), "originalSubmission", [], "any", false, false, false, 42), "submitid", [], "any", false, false, false, 42)]);
            // line 43
            echo "                (resubmit of <a href=\"";
            echo twig_escape_filter($this->env, ($context["origSubmissionUrl"] ?? null), "html", null, true);
            echo "\">s";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["submission"] ?? null), "originalSubmission", [], "any", false, false, false, 43), "submitid", [], "any", false, false, false, 43), "html", null, true);
            echo "</a>)
            ";
        }
        // line 45
        echo "            ";
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["submission"] ?? null), "resubmissions", [], "any", false, false, false, 45))) {
            // line 46
            echo "                (resubmitted as";
            // line 47
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["submission"] ?? null), "resubmissions", [], "any", false, false, false, 47));
            $context['loop'] = [
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            ];
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["resubmission"]) {
                // line 48
                $context["resubmissionUrl"] = $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_submission", ["submitId" => twig_get_attribute($this->env, $this->source, $context["resubmission"], "submitid", [], "any", false, false, false, 48)]);
                // line 49
                echo "                    <a href=\"";
                echo twig_escape_filter($this->env, ($context["resubmissionUrl"] ?? null), "html", null, true);
                echo "\">s";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["resubmission"], "submitid", [], "any", false, false, false, 49), "html", null, true);
                echo "</a>";
                // line 50
                if ( !twig_get_attribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, false, 50)) {
                    echo ",";
                }
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['resubmission'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 52
            echo ")
            ";
        }
        // line 54
        echo "            ";
        if ( !twig_get_attribute($this->env, $this->source, ($context["submission"] ?? null), "valid", [], "any", false, false, false, 54)) {
            // line 55
            echo "                (ignored)
            ";
        }
        // line 57
        echo "        </h1>
        ";
        // line 58
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 59
            echo "            ";
            if (twig_get_attribute($this->env, $this->source, ($context["submission"] ?? null), "valid", [], "any", false, false, false, 59)) {
                // line 60
                echo "                ";
                $context["action"] = "ignore";
                // line 61
                echo "            ";
            } else {
                // line 62
                echo "                ";
                $context["action"] = "unignore";
                // line 63
                echo "            ";
            }
            // line 64
            echo "            <form action=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_submission_update_status", ["submitId" => twig_get_attribute($this->env, $this->source, ($context["submission"] ?? null), "submitid", [], "any", false, false, false, 64)]), "html", null, true);
            echo "\" method=\"post\"
                  style=\"display: inline; \">
                <input type=\"hidden\" name=\"valid\" value=\"";
            // line 66
            if (twig_get_attribute($this->env, $this->source, ($context["submission"] ?? null), "valid", [], "any", false, false, false, 66)) {
                echo "0";
            } else {
                echo "1";
            }
            echo "\"/>
                <input type=\"submit\" class=\"btn btn-outline-secondary btn-sm\"
                       value=\"";
            // line 68
            echo twig_escape_filter($this->env, twig_upper_filter($this->env, ($context["action"] ?? null)), "html", null, true);
            echo " this submission\"
                       onclick=\"return confirm('Really ";
            // line 69
            echo twig_escape_filter($this->env, ($context["action"] ?? null), "html", null, true);
            echo " submission s";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["submission"] ?? null), "submitid", [], "any", false, false, false, 69), "html", null, true);
            echo "?');\"/>
            </form>
        ";
        }
        // line 72
        echo "
        ";
        // line 73
        $this->loadTemplate("jury/partials/rejudge_form.html.twig", "jury/submission.html.twig", 73)->display(twig_array_merge($context, ["table" => "submission", "id" => twig_get_attribute($this->env, $this->source, ($context["submission"] ?? null), "submitid", [], "any", false, false, false, 73)]));
        // line 74
        echo "    </div>

    ";
        // line 76
        if ( !twig_get_attribute($this->env, $this->source, ($context["submission"] ?? null), "valid", [], "any", false, false, false, 76)) {
            // line 77
            echo "        <div class=\"alert alert-danger\">This submission is not used during scoreboard calculations.</div>
    ";
        }
        // line 79
        echo "
    ";
        // line 80
        if ( !twig_get_attribute($this->env, $this->source, ($context["submission"] ?? null), "contestProblem", [], "any", false, false, false, 80)) {
            // line 81
            echo "        <div class=\"alert alert-danger\">
            This submission is for a problem that is not part (anymore) of the contest of the submission.
        </div>
    ";
        }
        // line 85
        echo "
    ";
        // line 87
        echo "    <div class=\"submission-summary mb-2\">
        <span>
            <i class=\"fas fa-users\" title=\"Team:\"></i>
            <a href=\"";
        // line 90
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_team", ["teamId" => twig_get_attribute($this->env, $this->source, ($context["submission"] ?? null), "teamid", [], "any", false, false, false, 90), "cid" => twig_get_attribute($this->env, $this->source, ($context["submission"] ?? null), "cid", [], "any", false, false, false, 90)]), "html", null, true);
        echo "\">
                ";
        // line 91
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["submission"] ?? null), "team", [], "any", false, false, false, 91), "name", [], "any", false, false, false, 91), "html", null, true);
        echo " (t";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["submission"] ?? null), "teamid", [], "any", false, false, false, 91), "html", null, true);
        echo ")
            </a>
        </span>

        <span>
            <i class=\"fas fa-trophy\" title=\"Contest:\"></i>
            <a href=\"";
        // line 97
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_contest", ["contestId" => twig_get_attribute($this->env, $this->source, ($context["submission"] ?? null), "cid", [], "any", false, false, false, 97)]), "html", null, true);
        echo "\">
                ";
        // line 98
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["submission"] ?? null), "contest", [], "any", false, false, false, 98), "shortname", [], "any", false, false, false, 98), "html", null, true);
        echo "
            </a>
        </span>

        <span>
            <i class=\"fas fa-book-open\" title=\"Problem:\"></i>
            <a href=\"";
        // line 104
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_problem", ["probId" => twig_get_attribute($this->env, $this->source, ($context["submission"] ?? null), "probid", [], "any", false, false, false, 104)]), "html", null, true);
        echo "\">
                ";
        // line 105
        if (twig_get_attribute($this->env, $this->source, ($context["submission"] ?? null), "contestProblem", [], "any", false, false, false, 105)) {
            // line 106
            echo "                    ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["submission"] ?? null), "contestProblem", [], "any", false, false, false, 106), "shortname", [], "any", false, false, false, 106), "html", null, true);
            echo ": ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["submission"] ?? null), "problem", [], "any", false, false, false, 106), "name", [], "any", false, false, false, 106), "html", null, true);
            echo "
                ";
        } else {
            // line 108
            echo "                    ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["submission"] ?? null), "problem", [], "any", false, false, false, 108), "name", [], "any", false, false, false, 108), "html", null, true);
            echo "
                ";
        }
        // line 110
        echo "            </a>
        </span>

        <span>
            <i class=\"fas fa-comments\" title=\"Language:\"></i>
            <a href=\"";
        // line 115
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_language", ["langId" => twig_get_attribute($this->env, $this->source, ($context["submission"] ?? null), "langid", [], "any", false, false, false, 115)]), "html", null, true);
        echo "\">
                ";
        // line 116
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["submission"] ?? null), "language", [], "any", false, false, false, 116), "name", [], "any", false, false, false, 116), "html", null, true);
        echo "
            </a>
        </span>

        <span>
            <i class=\"fas fa-clock\" title=\"Submittime:\"></i>
            <span title=\"";
        // line 122
        echo twig_escape_filter($this->env, $this->extensions['App\Twig\TwigExtension']->printtime(twig_get_attribute($this->env, $this->source, ($context["submission"] ?? null), "submittime", [], "any", false, false, false, 122), "%Y-%m-%d %H:%M:%S (%Z)"), "html", null, true);
        echo "\">
                ";
        // line 123
        echo twig_escape_filter($this->env, $this->extensions['App\Twig\TwigExtension']->printtime(twig_get_attribute($this->env, $this->source, ($context["submission"] ?? null), "submittime", [], "any", false, false, false, 123), null, twig_get_attribute($this->env, $this->source, ($context["submission"] ?? null), "contest", [], "any", false, false, false, 123)), "html", null, true);
        echo "
            </span>
        </span>

        <span>
            <i class=\"fas fa-stopwatch\" title=\"Allowed runtime:\"></i>
            ";
        // line 129
        echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["submission"] ?? null), "problem", [], "any", false, false, false, 129), "timelimit", [], "any", false, false, false, 129) * twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["submission"] ?? null), "language", [], "any", false, false, false, 129), "timeFactor", [], "any", false, false, false, 129)), "html", null, true);
        echo "s
        </span>

        <span>
            <i class=\"fas fa-code\" title=\"Source code:\"></i>
            <a href=\"";
        // line 134
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_submission_source", ["submission" => twig_get_attribute($this->env, $this->source, ($context["submission"] ?? null), "submitid", [], "any", false, false, false, 134)]), "html", null, true);
        echo "\">
                View source code
            </a>
        </span>

        ";
        // line 139
        if ( !twig_test_empty(($context["external_ccs_submission_url"] ?? null))) {
            // line 140
            echo "            <span>
                <i class=\"fas fa-link\" title=\"External link:\"></i>
                <a href=\"";
            // line 142
            echo twig_escape_filter($this->env, $this->extensions['App\Twig\TwigExtension']->externalCcsUrl(($context["submission"] ?? null)), "html", null, true);
            echo "\" target=\"_blank\">
                    View in external CCS
                </a>
            </span>
        ";
        }
        // line 147
        echo "    </div>

    ";
        // line 149
        if (twig_get_attribute($this->env, $this->source, ($context["submission"] ?? null), "externalid", [], "any", false, false, false, 149)) {
            // line 150
            echo "        <div class=\"mb-2\">
            External ID:
            ";
            // line 152
            if (twig_test_empty(($context["external_ccs_submission_url"] ?? null))) {
                // line 153
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["submission"] ?? null), "externalid", [], "any", false, false, false, 153), "html", null, true);
            } else {
                // line 155
                echo "                <a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['App\Twig\TwigExtension']->externalCcsUrl(($context["submission"] ?? null)), "html", null, true);
                echo "\" target=\"_blank\">";
                // line 156
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["submission"] ?? null), "externalid", [], "any", false, false, false, 156), "html", null, true);
                // line 157
                echo "</a>";
            }
            // line 159
            if ( !(null === ($context["externalJudgement"] ?? null))) {
                // line 160
                echo ", ";
                echo $this->extensions['App\Twig\TwigExtension']->printValidJuryResult(twig_get_attribute($this->env, $this->source, ($context["externalJudgement"] ?? null), "result", [], "any", false, false, false, 160));
                echo "
            ";
            }
            // line 162
            echo "        </div>
    ";
        }
        // line 164
        echo "
    ";
        // line 165
        if (((( !(null === ($context["externalJudgement"] ?? null)) &&  !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["externalJudgement"] ?? null), "result", [], "any", false, false, false, 165))) &&  !(null === ($context["selectedJudging"] ?? null))) && (twig_get_attribute($this->env, $this->source, ($context["externalJudgement"] ?? null), "result", [], "any", false, false, false, 165) != twig_get_attribute($this->env, $this->source, ($context["selectedJudging"] ?? null), "result", [], "any", false, false, false, 165)))) {
            // line 166
            echo "        <div class=\"alert alert-danger\">
            <strong>Results differ!</strong>
            <hr>
            <p>
                This submission was judged as
                ";
            // line 171
            if (twig_test_empty(($context["external_ccs_submission_url"] ?? null))) {
                // line 172
                echo "                    ";
                echo $this->extensions['App\Twig\TwigExtension']->printValidJuryResult(twig_get_attribute($this->env, $this->source, ($context["externalJudgement"] ?? null), "result", [], "any", false, false, false, 172));
                echo " by the external CCS
                ";
            } else {
                // line 174
                echo "                    <a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['App\Twig\TwigExtension']->externalCcsUrl(($context["submission"] ?? null)), "html", null, true);
                echo "\" target=\"_blank\">
                        ";
                // line 175
                echo $this->extensions['App\Twig\TwigExtension']->printValidJuryResult(twig_get_attribute($this->env, $this->source, ($context["externalJudgement"] ?? null), "result", [], "any", false, false, false, 175));
                echo " by the external CCS
                    </a>
                ";
            }
            // line 178
            echo ", but as ";
            echo $this->extensions['App\Twig\TwigExtension']->printValidJuryResult(twig_get_attribute($this->env, $this->source, ($context["selectedJudging"] ?? null), "result", [], "any", false, false, false, 178));
            echo "
                by DOMjudge.
            </p>
        </div>
    ";
        }
        // line 183
        echo "
    ";
        // line 184
        if (((twig_length_filter($this->env, ($context["judgings"] ?? null)) > 1) || ((twig_length_filter($this->env, ($context["judgings"] ?? null)) == 1) && (null === ($context["selectedJudging"] ?? null))))) {
            // line 185
            echo "        <h2>Judgings</h2>
        <table class=\"judging-table table table-striped table-hover table-sm\" style=\"width: auto;\">
            <thead>
            <tr>
                <td></td>
                <th scope=\"col\">ID</th>
                <th scope=\"col\">start</th>
                <th scope=\"col\">max runtime</th>
                <th scope=\"col\">judgehost</th>
                <th scope=\"col\">result</th>
                <th scope=\"col\">rejudging</th>
            </tr>
            </thead>
            <tbody>
            ";
            // line 199
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["judgings"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["judging"]) {
                // line 200
                echo "                ";
                $context["link"] = $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_submission", ["submitId" => twig_get_attribute($this->env, $this->source, ($context["submission"] ?? null), "submitid", [], "any", false, false, false, 200), "jid" => twig_get_attribute($this->env, $this->source, $context["judging"], "judgingid", [], "any", false, false, false, 200)]);
                // line 201
                echo "                <tr ";
                if ( !twig_get_attribute($this->env, $this->source, $context["judging"], "valid", [], "any", false, false, false, 201)) {
                    echo "class=\"disabled\"";
                }
                echo ">
                    <td>
                        <a href=\"";
                // line 203
                echo twig_escape_filter($this->env, ($context["link"] ?? null), "html", null, true);
                echo "\">
                            ";
                // line 204
                if (( !(null === ($context["selectedJudging"] ?? null)) && (twig_get_attribute($this->env, $this->source, ($context["selectedJudging"] ?? null), "judgingid", [], "any", false, false, false, 204) == twig_get_attribute($this->env, $this->source, $context["judging"], "judgingid", [], "any", false, false, false, 204)))) {
                    // line 205
                    echo "                                <i class=\"fas fa-long-arrow-alt-right\"></i>
                            ";
                } else {
                    // line 207
                    echo "                                &nbsp;
                            ";
                }
                // line 209
                echo "                        </a>
                    </td>
                    <td><a href=\"";
                // line 211
                echo twig_escape_filter($this->env, ($context["link"] ?? null), "html", null, true);
                echo "\">j";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["judging"], "judgingid", [], "any", false, false, false, 211), "html", null, true);
                echo "</a></td>
                    <td><a href=\"";
                // line 212
                echo twig_escape_filter($this->env, ($context["link"] ?? null), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->extensions['App\Twig\TwigExtension']->printtime(twig_get_attribute($this->env, $this->source, $context["judging"], "starttime", [], "any", false, false, false, 212), null, twig_get_attribute($this->env, $this->source, ($context["submission"] ?? null), "contest", [], "any", false, false, false, 212)), "html", null, true);
                echo "</a></td>
                    <td>
                        <a href=\"";
                // line 214
                echo twig_escape_filter($this->env, ($context["link"] ?? null), "html", null, true);
                echo "\">
                            ";
                // line 215
                if ( !(null === (($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = ($context["maxRunTimes"] ?? null)) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4[twig_get_attribute($this->env, $this->source, $context["judging"], "judgingId", [], "any", false, false, false, 215)] ?? null) : null))) {
                    // line 216
                    echo "                                ";
                    echo twig_escape_filter($this->env, (($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = ($context["maxRunTimes"] ?? null)) && is_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) || $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 instanceof ArrayAccess ? ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144[twig_get_attribute($this->env, $this->source, $context["judging"], "judgingId", [], "any", false, false, false, 216)] ?? null) : null), "html", null, true);
                    echo "s
                            ";
                }
                // line 218
                echo "                        </a>
                    </td>
                    <td>
                        <a href=\"";
                // line 221
                echo twig_escape_filter($this->env, ($context["link"] ?? null), "html", null, true);
                echo "\">
                            ";
                // line 222
                if ( !(null === twig_get_attribute($this->env, $this->source, $context["judging"], "judgehost", [], "any", false, false, false, 222))) {
                    // line 223
                    echo "                                ";
                    echo $this->extensions['App\Twig\TwigExtension']->printHost(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["judging"], "judgehost", [], "any", false, false, false, 223), "hostname", [], "any", false, false, false, 223));
                    echo "
                            ";
                }
                // line 225
                echo "                        </a>
                    </td>
                    <td>
                        <a href=\"";
                // line 228
                echo twig_escape_filter($this->env, ($context["link"] ?? null), "html", null, true);
                echo "\">
                            ";
                // line 229
                echo $this->extensions['App\Twig\TwigExtension']->printResult(twig_get_attribute($this->env, $this->source, $context["judging"], "result", [], "any", false, false, false, 229), twig_get_attribute($this->env, $this->source, $context["judging"], "valid", [], "any", false, false, false, 229), true);
                echo "
                            ";
                // line 230
                if (twig_get_attribute($this->env, $this->source, $context["judging"], "stillBusy", [], "any", false, false, false, 230)) {
                    // line 231
                    echo "                                (&hellip;)
                            ";
                }
                // line 233
                echo "                        </a>
                    </td>
                    <td>
                        <a href=\"";
                // line 236
                echo twig_escape_filter($this->env, ($context["link"] ?? null), "html", null, true);
                echo "\">
                            ";
                // line 237
                if ( !(null === twig_get_attribute($this->env, $this->source, $context["judging"], "rejudging", [], "any", false, false, false, 237))) {
                    // line 238
                    echo "                                r";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["judging"], "rejudgingid", [], "any", false, false, false, 238), "html", null, true);
                    echo " (";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["judging"], "rejudging", [], "any", false, false, false, 238), "reason", [], "any", false, false, false, 238), "html", null, true);
                    echo ")
                            ";
                }
                // line 240
                echo "                        </a>
                    </td>
                </tr>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['judging'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 244
            echo "            </tbody>
        </table>
    ";
        }
        // line 247
        echo "
    ";
        // line 248
        if ((null === ($context["selectedJudging"] ?? null))) {
            // line 249
            echo "        <div class=\"alert alert-warning\">Not (re)judged yet</div>

        ";
            // line 251
            if ( !twig_test_empty(($context["unjudgableReasons"] ?? null))) {
                // line 252
                echo "            ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["unjudgableReasons"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["reason"]) {
                    // line 253
                    echo "                <div class=\"alert alert-danger\">";
                    echo twig_escape_filter($this->env, $context["reason"], "html", null, true);
                    echo "</div>
            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['reason'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 255
                echo "        ";
            }
            // line 256
            echo "    ";
        }
        // line 257
        echo "
    ";
        // line 258
        if (( !(null === ($context["selectedJudging"] ?? null)) ||  !(null === ($context["externalJudgement"] ?? null)))) {
            // line 259
            echo "
        ";
            // line 260
            $this->loadTemplate("jury/partials/submission_graph.html.twig", "jury/submission.html.twig", 260)->display($context);
            // line 261
            echo "
        ";
            // line 262
            if ( !(null === ($context["selectedJudging"] ?? null))) {
                // line 263
                echo "
            ";
                // line 265
                echo "            <div class=\"mb-2\">
                <h2 style=\"display: inline;\">
                    Judging j";
                // line 267
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["selectedJudging"] ?? null), "judgingid", [], "any", false, false, false, 267), "html", null, true);
                echo "
                    ";
                // line 268
                if (twig_get_attribute($this->env, $this->source, ($context["selectedJudging"] ?? null), "rejudging", [], "any", false, false, false, 268)) {
                    // line 269
                    echo "                        (rejudging
                        <a href=\"";
                    // line 270
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_rejudging", ["rejudgingId" => twig_get_attribute($this->env, $this->source, ($context["selectedJudging"] ?? null), "rejudgingid", [], "any", false, false, false, 270)]), "html", null, true);
                    echo "\">
                            r";
                    // line 271
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["selectedJudging"] ?? null), "rejudgingid", [], "any", false, false, false, 271), "html", null, true);
                    echo "</a>, reason: ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["selectedJudging"] ?? null), "rejudging", [], "any", false, false, false, 271), "reason", [], "any", false, false, false, 271), "html", null, true);
                    echo ")
                    ";
                } elseif ( !twig_get_attribute($this->env, $this->source,                 // line 272
($context["selectedJudging"] ?? null), "valid", [], "any", false, false, false, 272)) {
                    // line 273
                    echo "                        (Invalid)
                    ";
                }
                // line 275
                echo "                </h2>
                &nbsp;
                ";
                // line 277
                if ( !twig_get_attribute($this->env, $this->source, ($context["selectedJudging"] ?? null), "verified", [], "any", false, false, false, 277)) {
                    // line 278
                    echo "                    <form action=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_submission", ["submitId" => twig_get_attribute($this->env, $this->source, ($context["submission"] ?? null), "submitid", [], "any", false, false, false, 278), "jid" => twig_get_attribute($this->env, $this->source, ($context["selectedJudging"] ?? null), "judgingid", [], "any", false, false, false, 278)]), "html", null, true);
                    echo "\"
                          method=\"post\" style=\"display: inline;\">
                        ";
                    // line 280
                    if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["selectedJudging"] ?? null), "juryMember", [], "any", false, false, false, 280))) {
                        // line 281
                        echo "                            (claimed by ";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["selectedJudging"] ?? null), "juryMember", [], "any", false, false, false, 281), "html", null, true);
                        echo ")
                            <input type=\"hidden\" name=\"forceclaim\" value=\"1\"/>
                        ";
                    }
                    // line 284
                    echo "                        ";
                    if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 284), "username", [], "any", false, false, false, 284) == twig_get_attribute($this->env, $this->source, ($context["selectedJudging"] ?? null), "juryMember", [], "any", false, false, false, 284))) {
                        // line 285
                        echo "                            <input type=\"submit\" value=\"unclaim\" name=\"unclaim\" class=\"btn btn-outline-secondary btn-sm\"/>
                        ";
                    } else {
                        // line 287
                        echo "                            <input type=\"submit\" value=\"claim\" name=\"claim\" class=\"btn btn-outline-secondary btn-sm\"/>
                        ";
                    }
                    // line 289
                    echo "                    </form>
                ";
                }
                // line 291
                echo "            </div>
        ";
            }
            // line 293
            echo "
        <div class=\"mb-2\">
            <div>
                Result:
                ";
            // line 297
            if (((null === ($context["selectedJudging"] ?? null)) || twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["selectedJudging"] ?? null), "result", [], "any", false, false, false, 297)))) {
                // line 298
                if (twig_get_attribute($this->env, $this->source, ($context["submission"] ?? null), "judgehost", [], "any", false, false, false, 298)) {
                    // line 299
                    echo $this->extensions['App\Twig\TwigExtension']->printValidJuryResult("");
                } else {
                    // line 301
                    echo $this->extensions['App\Twig\TwigExtension']->printValidJuryResult("queued");
                }
            } else {
                // line 304
                echo $this->extensions['App\Twig\TwigExtension']->printValidJuryResult(twig_get_attribute($this->env, $this->source, ($context["selectedJudging"] ?? null), "result", [], "any", false, false, false, 304));
            }
            // line 306
            if (twig_get_attribute($this->env, $this->source, ($context["submission"] ?? null), "stillBusy", [], "any", false, false, false, 306)) {
                // line 307
                echo "(&hellip;)";
            }
            // line 309
            if ( !(null === ($context["lastJudging"] ?? null))) {
                // line 310
                $context["lastSubmissionLink"] = $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_submission", ["submitId" => twig_get_attribute($this->env, $this->source, ($context["lastSubmission"] ?? null), "submitid", [], "any", false, false, false, 310)]);
                // line 311
                echo "<span class=\"lastresult\">
                    (<a href=\"";
                // line 312
                echo twig_escape_filter($this->env, ($context["lastSubmissionLink"] ?? null), "html", null, true);
                echo "\">s";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["lastSubmission"] ?? null), "submitid", [], "any", false, false, false, 312), "html", null, true);
                echo "</a>: ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["lastJudging"] ?? null), "result", [], "any", false, false, false, 312), "html", null, true);
                echo ")";
                // line 313
                echo "</span>";
            }
            // line 315
            if ( !(null === ($context["externalJudgement"] ?? null))) {
                // line 316
                echo "                    (external: ";
                echo $this->extensions['App\Twig\TwigExtension']->printValidJuryResult(twig_get_attribute($this->env, $this->source, ($context["externalJudgement"] ?? null), "result", [], "any", false, false, false, 316));
                echo ")";
            }
            // line 318
            if ( !(null === ($context["selectedJudging"] ?? null))) {
                // line 319
                echo ", Judgehost:
                    ";
                // line 320
                $context["judgehostLink"] = $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_judgehost", ["hostname" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["selectedJudging"] ?? null), "judgehost", [], "any", false, false, false, 320), "hostname", [], "any", false, false, false, 320)]);
                // line 321
                echo "                    <a href=\"";
                echo twig_escape_filter($this->env, ($context["judgehostLink"] ?? null), "html", null, true);
                echo "\">";
                echo $this->extensions['App\Twig\TwigExtension']->printHost(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["selectedJudging"] ?? null), "judgehost", [], "any", false, false, false, 321), "hostname", [], "any", false, false, false, 321));
                echo "</a>,
                    <span class=\"judgetime\">Judging started: ";
                // line 322
                echo twig_escape_filter($this->env, $this->extensions['App\Twig\TwigExtension']->printtime(twig_get_attribute($this->env, $this->source, ($context["selectedJudging"] ?? null), "starttime", [], "any", false, false, false, 322), "%H:%M:%S"), "html", null, true);
                // line 323
                if (twig_get_attribute($this->env, $this->source, ($context["selectedJudging"] ?? null), "endtime", [], "any", false, false, false, 323)) {
                    // line 324
                    echo ", finished in ";
                    echo twig_escape_filter($this->env, $this->extensions['App\Twig\TwigExtension']->printtimediff(twig_get_attribute($this->env, $this->source, ($context["selectedJudging"] ?? null), "starttime", [], "any", false, false, false, 324), twig_get_attribute($this->env, $this->source, ($context["selectedJudging"] ?? null), "endtime", [], "any", false, false, false, 324)), "html", null, true);
                    echo "s";
                } elseif ((twig_get_attribute($this->env, $this->source,                 // line 325
($context["selectedJudging"] ?? null), "valid", [], "any", false, false, false, 325) || twig_get_attribute($this->env, $this->source, ($context["selectedJudging"] ?? null), "rejudging", [], "any", false, false, false, 325))) {
                    // line 326
                    echo "&nbsp;[still judging - busy ";
                    echo twig_escape_filter($this->env, $this->extensions['App\Twig\TwigExtension']->printtimediff(twig_get_attribute($this->env, $this->source, ($context["selectedJudging"] ?? null), "starttime", [], "any", false, false, false, 326)), "html", null, true);
                    echo "]";
                } else {
                    // line 328
                    echo "&nbsp;[aborted]";
                }
                // line 330
                echo "</span>
                ";
            }
            // line 332
            if ( !(null === ($context["externalJudgement"] ?? null))) {
                // line 333
                echo "                    <span class=\"judgetime\">(external judging started: ";
                echo twig_escape_filter($this->env, $this->extensions['App\Twig\TwigExtension']->printtime(twig_get_attribute($this->env, $this->source, ($context["externalJudgement"] ?? null), "starttime", [], "any", false, false, false, 333), "%H:%M:%S"), "html", null, true);
                // line 334
                if (twig_get_attribute($this->env, $this->source, ($context["externalJudgement"] ?? null), "endtime", [], "any", false, false, false, 334)) {
                    // line 335
                    echo ", finished in ";
                    echo twig_escape_filter($this->env, $this->extensions['App\Twig\TwigExtension']->printtimediff(twig_get_attribute($this->env, $this->source, ($context["externalJudgement"] ?? null), "starttime", [], "any", false, false, false, 335), twig_get_attribute($this->env, $this->source, ($context["externalJudgement"] ?? null), "endtime", [], "any", false, false, false, 335)), "html", null, true);
                    echo "s";
                } else {
                    // line 337
                    echo "&nbsp;[still judging - busy ";
                    echo twig_escape_filter($this->env, $this->extensions['App\Twig\TwigExtension']->printtimediff(twig_get_attribute($this->env, $this->source, ($context["externalJudgement"] ?? null), "starttime", [], "any", false, false, false, 337)), "html", null, true);
                    echo "]";
                }
                // line 339
                echo ")</span>";
            }
            // line 341
            if (( !(null === ($context["selectedJudging"] ?? null)) && (twig_get_attribute($this->env, $this->source, ($context["selectedJudging"] ?? null), "result", [], "any", false, false, false, 341) != "compiler-error"))) {
                // line 342
                echo ", max/sum runtime:
                    ";
                // line 343
                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["selectedJudging"] ?? null), "maxRuntime", [], "any", false, false, false, 343), 2, ".", ""), "html", null, true);
                echo "/";
                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["selectedJudging"] ?? null), "sumRuntime", [], "any", false, false, false, 343), 2, ".", ""), "html", null, true);
                echo "s";
                // line 344
                if ( !(null === ($context["lastJudging"] ?? null))) {
                    // line 345
                    echo "<span class=\"lastruntime\">
                        (<a href=\"";
                    // line 346
                    echo twig_escape_filter($this->env, ($context["lastSubmissionLink"] ?? null), "html", null, true);
                    echo "\">s";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["lastSubmission"] ?? null), "submitid", [], "any", false, false, false, 346), "html", null, true);
                    echo "</a>:
                            ";
                    // line 347
                    echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["lastJudging"] ?? null), "maxRuntime", [], "any", false, false, false, 347), 2, ".", ""), "html", null, true);
                    // line 348
                    echo "/";
                    echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["lastJudging"] ?? null), "sumRuntime", [], "any", false, false, false, 348), 2, ".", ""), "html", null, true);
                    echo "s)
                    </span>";
                }
            }
            // line 352
            if ((( !(null === ($context["externalJudgement"] ?? null)) && (twig_get_attribute($this->env, $this->source, ($context["externalJudgement"] ?? null), "result", [], "any", false, false, false, 352) != "compiler-error")) && (twig_get_attribute($this->env, $this->source, ($context["externalJudgement"] ?? null), "result", [], "any", false, false, false, 352) != null))) {
                // line 353
                echo ", external max/sum runtime:
                    ";
                // line 354
                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["externalJudgement"] ?? null), "maxRuntime", [], "any", false, false, false, 354), 2, ".", ""), "html", null, true);
                echo "/";
                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["externalJudgement"] ?? null), "sumRuntime", [], "any", false, false, false, 354), 2, ".", ""), "html", null, true);
                echo "s
                ";
            }
            // line 356
            echo "            </div>

            ";
            // line 359
            echo "            ";
            if (( !(null === ($context["externalJudgement"] ?? null)) || ( !(null === ($context["selectedJudging"] ?? null)) && (twig_get_attribute($this->env, $this->source, ($context["selectedJudging"] ?? null), "result", [], "any", false, false, false, 359) != "compiler-error")))) {
                // line 360
                echo "                <table>
                    <tr>
                        <td>testcase runs:</td>
                        <td>
                            ";
                // line 364
                if ((null === ($context["selectedJudging"] ?? null))) {
                    // line 365
                    echo "                                ";
                    $context["judgingDone"] = false;
                    // line 366
                    echo "                            ";
                } else {
                    // line 367
                    echo "                                ";
                    $context["judgingDone"] =  !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["selectedJudging"] ?? null), "endtime", [], "any", false, false, false, 367));
                    // line 368
                    echo "                            ";
                }
                // line 369
                echo "                            ";
                echo $this->extensions['App\Twig\TwigExtension']->displayTestcaseResults(($context["runs"] ?? null), ($context["judgingDone"] ?? null));
                echo "
                        </td>
                    </tr>
                    ";
                // line 372
                if ( !(null === ($context["lastJudging"] ?? null))) {
                    // line 373
                    echo "                        <tr class=\"lasttcruns\">
                            <td>
                                <a href=\"";
                    // line 375
                    echo twig_escape_filter($this->env, ($context["lastSubmissionLink"] ?? null), "html", null, true);
                    echo "\">s";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["lastSubmission"] ?? null), "submitid", [], "any", false, false, false, 375), "html", null, true);
                    echo "</a> runs:
                            </td>
                            <td>
                                ";
                    // line 378
                    echo $this->extensions['App\Twig\TwigExtension']->displayTestcaseResults(($context["lastRuns"] ?? null),  !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["lastJudging"] ?? null), "endtime", [], "any", false, false, false, 378)));
                    echo "
                            </td>
                        </tr>
                    ";
                }
                // line 382
                echo "                    ";
                if ( !(null === ($context["externalJudgement"] ?? null))) {
                    // line 383
                    echo "                        <tr>
                            <td>external runs:</td>
                            <td>
                                ";
                    // line 386
                    echo $this->extensions['App\Twig\TwigExtension']->displayTestcaseResults(($context["externalRuns"] ?? null),  !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["externalJudgement"] ?? null), "endtime", [], "any", false, false, false, 386)), true);
                    echo "
                            </td>
                        </tr>
                    ";
                }
                // line 390
                echo "                </table>

                ";
                // line 393
                echo "                ";
                if ( !(null === ($context["lastJudging"] ?? null))) {
                    // line 394
                    echo "                    <span class=\"testcases_prev\">
                    <a href=\"javascript:togglelastruns();\">show/hide</a>
                    results of previous <a href=\"";
                    // line 396
                    echo twig_escape_filter($this->env, ($context["lastSubmissionLink"] ?? null), "html", null, true);
                    echo "\">submission s";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["lastSubmission"] ?? null), "submitid", [], "any", false, false, false, 396), "html", null, true);
                    echo "</a>
                        ";
                    // line 397
                    if (twig_get_attribute($this->env, $this->source, ($context["lastJudging"] ?? null), "verifyComment", [], "any", false, false, false, 397)) {
                        // line 398
                        echo "                            <span class=\"prevsubmit\">(verify comment: '";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["lastJudging"] ?? null), "verifyComment", [], "any", false, false, false, 398), "html", null, true);
                        echo "')</span>
                        ";
                    }
                    // line 400
                    echo "                </span>
                ";
                }
                // line 402
                echo "            ";
            }
            // line 403
            echo "        </div>

        <script>
            \$(function () {
                togglelastruns();
            });
        </script>

        ";
            // line 412
            echo "        ";
            if (( !(null === ($context["selectedJudging"] ?? null)) &&  !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["selectedJudging"] ?? null), "result", [], "any", false, false, false, 412)))) {
                // line 413
                echo "            <form action=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_judging_verify", ["judgingId" => twig_get_attribute($this->env, $this->source, ($context["selectedJudging"] ?? null), "judgingid", [], "any", false, false, false, 413)]), "html", null, true);
                echo "\" method=\"post\">
                <input type=\"hidden\" name=\"verified\" value=\"";
                // line 414
                if (twig_get_attribute($this->env, $this->source, ($context["selectedJudging"] ?? null), "verified", [], "any", false, false, false, 414)) {
                    echo "0";
                } else {
                    echo "1";
                }
                echo "\"/>

                ";
                // line 417
                echo "                <p>
                    Verified: <strong>";
                // line 418
                if (twig_get_attribute($this->env, $this->source, ($context["selectedJudging"] ?? null), "verified", [], "any", false, false, false, 418)) {
                    echo "yes";
                } else {
                    echo "no";
                }
                echo "</strong>";
                // line 419
                if ((twig_get_attribute($this->env, $this->source, ($context["selectedJudging"] ?? null), "verified", [], "any", false, false, false, 419) &&  !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["selectedJudging"] ?? null), "juryMember", [], "any", false, false, false, 419)))) {
                    // line 420
                    echo ", by ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["selectedJudging"] ?? null), "juryMember", [], "any", false, false, false, 420), "html", null, true);
                    // line 421
                    if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["selectedJudging"] ?? null), "verifyComment", [], "any", false, false, false, 421))) {
                        // line 422
                        echo "                            with comment \"";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["selectedJudging"] ?? null), "verifyComment", [], "any", false, false, false, 422), "html", null, true);
                        echo "\"";
                    }
                }
                // line 425
                if ( !((($context["verificationRequired"] ?? null) && twig_get_attribute($this->env, $this->source, ($context["selectedJudging"] ?? null), "verified", [], "any", false, false, false, 425)) && twig_get_attribute($this->env, $this->source, ($context["selectedJudging"] ?? null), "valid", [], "any", false, false, false, 425))) {
                    // line 426
                    echo "                        <input type=\"submit\" value=\"";
                    if (twig_get_attribute($this->env, $this->source, ($context["selectedJudging"] ?? null), "verified", [], "any", false, false, false, 426)) {
                        echo "un";
                    }
                    echo "mark verified\"
                               class=\"btn btn-outline-secondary btn-sm\"/>

                        ";
                    // line 429
                    if ( !twig_get_attribute($this->env, $this->source, ($context["selectedJudging"] ?? null), "verified", [], "any", false, false, false, 429)) {
                        // line 430
                        echo "                            with comment
                            <input type=\"text\" name=\"comment\" size=\"25\" class=\"form-control\" id=\"comment\"
                                   style=\"display: inline; width: auto;\"/>
                        ";
                    }
                    // line 434
                    echo "
                        ";
                    // line 435
                    if (( !(null === ($context["icat_url"] ?? null)) && twig_get_attribute($this->env, $this->source, ($context["submission"] ?? null), "contestProblem", [], "any", false, false, false, 435))) {
                        // line 436
                        echo "                            <button class=\"btn btn-outline-secondary btn-sm\" id=\"post-to-icat\">
                                post to iCAT
                            </button>
                        ";
                    }
                    // line 440
                    echo "                    ";
                }
                // line 441
                echo "                </p>
            </form>
            ";
                // line 443
                if (twig_get_attribute($this->env, $this->source, ($context["submission"] ?? null), "contestProblem", [], "any", false, false, false, 443)) {
                    // line 444
                    echo "                <script>
                    \$(function () {
                        \$('#post-to-icat').on('click', function () {
                            postVerifyCommentToICAT(
                                '";
                    // line 448
                    echo twig_escape_filter($this->env, ($context["icat_url"] ?? null), "html", null, true);
                    echo "/insert_entry.php',
                                '";
                    // line 449
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 449), "username", [], "any", false, false, false, 449), "html", null, true);
                    echo "',
                                '";
                    // line 450
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["submission"] ?? null), "teamid", [], "any", false, false, false, 450), "html", null, true);
                    echo "',
                                '";
                    // line 451
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["submission"] ?? null), "contestProblem", [], "any", false, false, false, 451), "shortname", [], "any", false, false, false, 451), "html", null, true);
                    echo "',
                                '";
                    // line 452
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["submission"] ?? null), "externalid", [], "any", false, false, false, 452), "html", null, true);
                    echo "'
                            );
                            alert('Comment posted to iCAT.');
                            return false;
                        });
                    });
                </script>
            ";
                }
                // line 460
                echo "        ";
            } elseif ( !(null === ($context["selectedJudging"] ?? null))) {
                // line 461
                echo "            <div class=\"alert alert-warning\">Judging is not ready yet!</div>
        ";
            }
            // line 463
            echo "
        ";
            // line 465
            echo "        ";
            $context["color"] = "#6666FF";
            // line 466
            echo "        ";
            $context["message"] = "not finished yet";
            // line 467
            echo "        ";
            $context["output"] = null;
            // line 468
            echo "        ";
            if ( !(null === ($context["selectedJudging"] ?? null))) {
                // line 469
                echo "            ";
                $context["output"] = twig_get_attribute($this->env, $this->source, ($context["selectedJudging"] ?? null), "outputCompile", [0 => true], "method", false, false, false, 469);
                // line 470
                echo "        ";
            }
            // line 471
            echo "        ";
            if ( !(null === ($context["output"] ?? null))) {
                // line 472
                echo "            ";
                if ((twig_get_attribute($this->env, $this->source, ($context["selectedJudging"] ?? null), "result", [], "any", false, false, false, 472) == "compiler-error")) {
                    // line 473
                    echo "                ";
                    $context["color"] = "red";
                    // line 474
                    echo "                ";
                    $context["message"] = "unsuccessful";
                    // line 475
                    echo "            ";
                } else {
                    // line 476
                    echo "                ";
                    $context["color"] = "#1daa1d";
                    // line 477
                    echo "                ";
                    $context["message"] = "successful";
                    // line 478
                    echo "                ";
                    if ( !twig_test_empty(($context["output"] ?? null))) {
                        // line 479
                        echo "                    ";
                        $context["message"] = (((($context["message"] ?? null) . " (with ") . $this->extensions['App\Twig\TwigExtension']->lineCount(($context["output"] ?? null))) . " line(s) of output)");
                        // line 480
                        echo "                ";
                    }
                    // line 481
                    echo "            ";
                }
                // line 482
                echo "        ";
            }
            // line 483
            echo "        ";
            $context["header"] = (((("Compilation <span style=\"color: " . ($context["color"] ?? null)) . ";\">") . ($context["message"] ?? null)) . "</span>");
            // line 484
            echo "        <h3>
            ";
            // line 485
            if ( !twig_test_empty(($context["output"] ?? null))) {
                // line 486
                echo "                <a class=\"collapse-link\" href=\"javascript:collapse('#detailcompile')\">
                    ";
                // line 487
                echo ($context["header"] ?? null);
                echo "
                </a>
            ";
            } else {
                // line 490
                echo "                ";
                echo ($context["header"] ?? null);
                echo "
            ";
            }
            // line 492
            echo "        </h3>
        ";
            // line 493
            if (twig_test_empty(($context["output"] ?? null))) {
                // line 494
                echo "            <p class=\"nodata";
                if (((null === ($context["selectedJudging"] ?? null)) || (twig_get_attribute($this->env, $this->source, ($context["selectedJudging"] ?? null), "result", [], "any", false, false, false, 494) != "compiler-error"))) {
                    echo " d-none";
                }
                echo "\"
                id=\"detailcompile\">There were no compiler errors or warnings.</p>
        ";
            } else {
                // line 497
                echo "            <pre class=\"output_text ";
                if (((null === ($context["selectedJudging"] ?? null)) || (twig_get_attribute($this->env, $this->source, ($context["selectedJudging"] ?? null), "result", [], "any", false, false, false, 497) != "compiler-error"))) {
                    echo " d-none";
                }
                echo "\"
                id=\"detailcompile\">";
                // line 498
                echo twig_escape_filter($this->env, ($context["output"] ?? null), "html", null, true);
                echo "</pre>
        ";
            }
            // line 500
            echo "
        ";
            // line 501
            if (( !(null === ($context["externalJudgement"] ?? null)) || ( !(null === ($context["selectedJudging"] ?? null)) && (twig_get_attribute($this->env, $this->source, ($context["selectedJudging"] ?? null), "result", [], "any", false, false, false, 501) != "compiler-error")))) {
                // line 502
                echo "            ";
                // line 503
                echo "            ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["runs"] ?? null));
                foreach ($context['_seq'] as $context["runIdx"] => $context["run"]) {
                    // line 504
                    echo "                ";
                    $context["externalRun"] = null;
                    // line 505
                    echo "                ";
                    if (twig_get_attribute($this->env, $this->source, ($context["externalRuns"] ?? null), $context["runIdx"], [], "array", true, true, false, 505)) {
                        // line 506
                        echo "                    ";
                        $context["externalRun"] = (($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b = ($context["externalRuns"] ?? null)) && is_array($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b) || $__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b instanceof ArrayAccess ? ($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b[$context["runIdx"]] ?? null) : null);
                        // line 507
                        echo "                ";
                    }
                    // line 508
                    echo "                <div id=\"run-";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["run"], "rank", [], "any", false, false, false, 508), "html", null, true);
                    echo "\"
                     style=\"margin-bottom: 20px;\"
                     class=\"card run ";
                    // line 510
                    if ((twig_get_attribute($this->env, $this->source, $context["run"], "firstJudgingRun", [], "any", false, false, false, 510) && (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["run"], "firstJudgingRun", [], "any", false, false, false, 510), "runresult", [], "any", false, false, false, 510) == "correct"))) {
                        echo "run_correct";
                    }
                    echo "\">
                    <div class=\"card-header\">
                        Run #";
                    // line 512
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["run"], "rank", [], "any", false, false, false, 512), "html", null, true);
                    echo "
                        ";
                    // line 513
                    if ( !(null === twig_get_attribute($this->env, $this->source, $context["run"], "origInputFilename", [], "any", false, false, false, 513))) {
                        // line 514
                        echo "                            | <span style=\"font-family:monospace;\">";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["run"], "origInputFilename", [], "any", false, false, false, 514), "html", null, true);
                        echo ".in</span>
                        ";
                    } else {
                        // line 516
                        echo "                            ";
                        if ( !(null === twig_get_attribute($this->env, $this->source, $context["run"], "description", [], "any", false, false, false, 516))) {
                            // line 517
                            echo "                                | ";
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["run"], "description", [], "any", false, false, false, 517), "html", null, true);
                            echo "
                            ";
                        }
                        // line 519
                        echo "                        ";
                    }
                    // line 520
                    echo "                        ";
                    if ( !(null === twig_get_attribute($this->env, $this->source, $context["run"], "firstJudgingRun", [], "any", false, false, false, 520))) {
                        // line 521
                        echo "                            | 
                            <span class=\"sol ";
                        // line 522
                        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["run"], "firstJudgingRun", [], "any", false, false, false, 522), "runresult", [], "any", false, false, false, 522) == "correct")) {
                            echo "sol_correct";
                        } else {
                            echo "sol_incorrect";
                        }
                        echo "\">
                                ";
                        // line 523
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["run"], "firstJudgingRun", [], "any", false, false, false, 523), "runresult", [], "any", false, false, false, 523), "html", null, true);
                        echo "
                            </span>
                            ";
                        // line 525
                        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["run"], "firstJudgingRun", [], "any", false, false, false, 525), "runresult", [], "any", false, false, false, 525) == "timelimit")) {
                            // line 526
                            echo "                                ";
                            if (twig_get_attribute($this->env, $this->source, (($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 = ($context["runsOutput"] ?? null)) && is_array($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002) || $__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 instanceof ArrayAccess ? ($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002[$context["runIdx"]] ?? null) : null), "terminated", [], "any", false, false, false, 526)) {
                                // line 527
                                echo "                                    <b>(terminated)</b>
                                ";
                            } else {
                                // line 529
                                echo "                                    <b>(finished late)</b>
                                ";
                            }
                            // line 531
                            echo "                            ";
                        }
                        // line 532
                        echo "                        ";
                    }
                    // line 533
                    echo "                        ";
                    if (( !(null === ($context["externalRun"] ?? null)) &&  !(null === twig_get_attribute($this->env, $this->source, ($context["externalRun"] ?? null), "firstExternalRun", [], "any", false, false, false, 533)))) {
                        // line 534
                        echo "                            ";
                        if ( !(null === twig_get_attribute($this->env, $this->source, ($context["externalRun"] ?? null), "firstExternalRun", [], "any", false, false, false, 534))) {
                            // line 535
                            echo "                                (external:
                                <span class=\"sol ";
                            // line 536
                            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["externalRun"] ?? null), "firstExternalRun", [], "any", false, false, false, 536), "result", [], "any", false, false, false, 536) == "correct")) {
                                echo "sol_correct";
                            } else {
                                echo "sol_incorrect";
                            }
                            echo "\">
                                    ";
                            // line 537
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["externalRun"] ?? null), "firstExternalRun", [], "any", false, false, false, 537), "result", [], "any", false, false, false, 537), "html", null, true);
                            // line 538
                            echo "</span>";
                            // line 539
                            echo ")
                            ";
                        }
                        // line 541
                        echo "                        ";
                    }
                    // line 542
                    echo "                        <span style=\"float: right;\">
                            <a href=\"";
                    // line 543
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_problem_testcase_fetch", ["probId" => twig_get_attribute($this->env, $this->source, ($context["submission"] ?? null), "probid", [], "any", false, false, false, 543), "rank" => twig_get_attribute($this->env, $this->source, $context["run"], "rank", [], "any", false, false, false, 543), "type" => "input"]), "html", null, true);
                    echo "\">
                                <button class=\"btn btn-sm btn-outline-secondary\" >
                                    <i class=\"fas fa-download\"></i>
                                    Input
                                </button>
                            </a>
                            <a href=\"";
                    // line 549
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_problem_testcase_fetch", ["probId" => twig_get_attribute($this->env, $this->source, ($context["submission"] ?? null), "probid", [], "any", false, false, false, 549), "rank" => twig_get_attribute($this->env, $this->source, $context["run"], "rank", [], "any", false, false, false, 549), "type" => "output"]), "html", null, true);
                    echo "\">
                                <button class=\"btn btn-sm btn-outline-secondary\" >
                                    <i class=\"fas fa-download\"></i>
                                    Reference Output
                                </button>
                            </a>
                            ";
                    // line 555
                    if ( !(null === twig_get_attribute($this->env, $this->source, $context["run"], "firstJudgingRun", [], "any", false, false, false, 555))) {
                        // line 556
                        echo "                                <a href=\"";
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_submission_team_output", ["submission" => twig_get_attribute($this->env, $this->source, ($context["submission"] ?? null), "submitid", [], "any", false, false, false, 556), "run" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["run"], "firstJudgingRun", [], "any", false, false, false, 556), "runid", [], "any", false, false, false, 556), "contest" => twig_get_attribute($this->env, $this->source, ($context["submission"] ?? null), "cid", [], "any", false, false, false, 556)]), "html", null, true);
                        echo "\">
                                    <button class=\"btn btn-sm btn-outline-secondary\" >
                                        <i class=\"fas fa-download\"></i>
                                        Team Output
                                    </button>
                                </a>
                            ";
                    }
                    // line 563
                    echo "                        </span>
                    </div>
                    <div class=\"card-body\">
                    ";
                    // line 566
                    if ( !(null === twig_get_attribute($this->env, $this->source, $context["run"], "firstJudgingRun", [], "any", false, false, false, 566))) {
                        // line 567
                        echo "                    <span style=\"display:inline; margin-left: 5px;\">
\t\t        <i class=\"fas fa-stopwatch\" title=\"runtime\"></i>
                        ";
                        // line 569
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 = ($context["runsOutput"] ?? null)) && is_array($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4) || $__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 instanceof ArrayAccess ? ($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4[$context["runIdx"]] ?? null) : null), "cpu_time", [], "any", false, false, false, 569), "html", null, true);
                        echo "s CPU
                        ";
                        // line 570
                        if ( !(null === twig_get_attribute($this->env, $this->source, (($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 = ($context["runsOutput"] ?? null)) && is_array($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666) || $__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 instanceof ArrayAccess ? ($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666[$context["runIdx"]] ?? null) : null), "metadata", [], "any", false, false, false, 570))) {
                            // line 571
                            echo "                            , ";
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e = ($context["runsOutput"] ?? null)) && is_array($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e) || $__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e instanceof ArrayAccess ? ($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e[$context["runIdx"]] ?? null) : null), "wall_time", [], "any", false, false, false, 571), "html", null, true);
                            echo "s wall,
\t\t            <i class=\"fas fa-memory\" title=\"RAM\"></i>
                            ";
                            // line 573
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52 = ($context["runsOutput"] ?? null)) && is_array($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52) || $__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52 instanceof ArrayAccess ? ($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52[$context["runIdx"]] ?? null) : null), "memory", [], "any", false, false, false, 573), "html", null, true);
                            echo "
\t\t            <i class=\"far fa-question-circle\" title=\"exit-code\"></i>
                            exit code:
                            ";
                            // line 576
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136 = ($context["runsOutput"] ?? null)) && is_array($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136) || $__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136 instanceof ArrayAccess ? ($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136[$context["runIdx"]] ?? null) : null), "exitcode", [], "any", false, false, false, 576), "html", null, true);
                            if ((twig_get_attribute($this->env, $this->source, (($__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386 = ($context["runsOutput"] ?? null)) && is_array($__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386) || $__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386 instanceof ArrayAccess ? ($__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386[$context["runIdx"]] ?? null) : null), "signal", [], "any", false, false, false, 576) > 0)) {
                                echo ",
                                signal: ";
                                // line 577
                                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (($__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9 = ($context["runsOutput"] ?? null)) && is_array($__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9) || $__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9 instanceof ArrayAccess ? ($__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9[$context["runIdx"]] ?? null) : null), "signal", [], "any", false, false, false, 577), "html", null, true);
                                echo "
                            ";
                            }
                            // line 579
                            echo "                            <button class=\"btn btn-sm btn-outline-secondary\" data-toggle=\"collapse\"
                                    data-target=\"#collapseExample-";
                            // line 580
                            echo twig_escape_filter($this->env, $context["runIdx"], "html", null, true);
                            echo "\"
                                    aria-expanded=\"false\">
                                show complete metadata
                            </button>
                            <div class=\"collapse\" id=\"collapseExample-";
                            // line 584
                            echo twig_escape_filter($this->env, $context["runIdx"], "html", null, true);
                            echo "\">
                                  <div class=\"card card-body output_text\">";
                            // line 585
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (($__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae = ($context["runsOutput"] ?? null)) && is_array($__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae) || $__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae instanceof ArrayAccess ? ($__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae[$context["runIdx"]] ?? null) : null), "metadata", [], "any", false, false, false, 585), "html", null, true);
                            echo "</div>
                            </div>
                        ";
                        }
                        // line 588
                        echo "                    </span>
                    ";
                    }
                    // line 590
                    echo "                    ";
                    if ( !(null === twig_get_attribute($this->env, $this->source, $context["run"], "description", [], "any", false, false, false, 590))) {
                        // line 591
                        echo "                        <p><em>
                            ";
                        // line 592
                        echo $this->extensions['App\Twig\TwigExtension']->descriptionExpand(twig_get_attribute($this->env, $this->source, $context["run"], "description", [0 => true], "method", false, false, false, 592));
                        echo "
                        </em></p>
                    ";
                    }
                    // line 595
                    echo "                    ";
                    if (twig_get_attribute($this->env, $this->source, (($__internal_25c0fab8152b8dd6b90603159c0f2e8a936a09ab76edb5e4d7bc95d9a8d2dc8f = ($context["runsOutput"] ?? null)) && is_array($__internal_25c0fab8152b8dd6b90603159c0f2e8a936a09ab76edb5e4d7bc95d9a8d2dc8f) || $__internal_25c0fab8152b8dd6b90603159c0f2e8a936a09ab76edb5e4d7bc95d9a8d2dc8f instanceof ArrayAccess ? ($__internal_25c0fab8152b8dd6b90603159c0f2e8a936a09ab76edb5e4d7bc95d9a8d2dc8f[$context["runIdx"]] ?? null) : null), "image_thumb", [], "any", false, false, false, 595)) {
                        // line 596
                        echo "                        <span style=\"float:right; border: 3px solid #438ec3; margin: 5px; padding: 5px;\">
                            ";
                        // line 597
                        $context["imgUrl"] = $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_problem_testcase_fetch", ["probId" => twig_get_attribute($this->env, $this->source, ($context["submission"] ?? null), "probid", [], "any", false, false, false, 597), "rank" => twig_get_attribute($this->env, $this->source, $context["run"], "rank", [], "any", false, false, false, 597), "type" => "image"]);
                        // line 598
                        echo "                            <a href=\"";
                        echo twig_escape_filter($this->env, ($context["imgUrl"] ?? null), "html", null, true);
                        echo "\">
                                <img src=\"data:image/";
                        // line 599
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["run"], "imageType", [], "any", false, false, false, 599), "html", null, true);
                        echo ";base64,";
                        echo twig_escape_filter($this->env, base64_encode(twig_get_attribute($this->env, $this->source, (($__internal_f769f712f3484f00110c86425acea59f5af2752239e2e8596bcb6effeb425b40 = ($context["runsOutput"] ?? null)) && is_array($__internal_f769f712f3484f00110c86425acea59f5af2752239e2e8596bcb6effeb425b40) || $__internal_f769f712f3484f00110c86425acea59f5af2752239e2e8596bcb6effeb425b40 instanceof ArrayAccess ? ($__internal_f769f712f3484f00110c86425acea59f5af2752239e2e8596bcb6effeb425b40[$context["runIdx"]] ?? null) : null), "image_thumb", [], "any", false, false, false, 599)), "html", null, true);
                        echo "\"/>
                            </a>
                        </span>
                    ";
                    }
                    // line 603
                    echo "
                    ";
                    // line 604
                    $context["runDone"] = false;
                    // line 605
                    echo "                    ";
                    if ((( !(null === $context["run"]) &&  !(null === twig_get_attribute($this->env, $this->source, $context["run"], "firstJudgingRun", [], "any", false, false, false, 605))) &&  !(null === twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["run"], "firstJudgingRun", [], "any", false, false, false, 605), "runresult", [], "any", false, false, false, 605)))) {
                        // line 606
                        echo "                        ";
                        $context["runDone"] = true;
                        // line 607
                        echo "                    ";
                    } elseif ((( !(null === ($context["externalRun"] ?? null)) &&  !(null === twig_get_attribute($this->env, $this->source, ($context["externalRun"] ?? null), "firstExternalRun", [], "any", false, false, false, 607))) &&  !(null === twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["run"], "firstExternalRun", [], "any", false, false, false, 607), "result", [], "any", false, false, false, 607)))) {
                        // line 608
                        echo "                        ";
                        $context["runDone"] = true;
                        // line 609
                        echo "                    ";
                    }
                    // line 610
                    echo "                    ";
                    if ( !($context["runDone"] ?? null)) {
                        // line 611
                        echo "                        <p class=\"nodata\">
                            ";
                        // line 612
                        if (( !(null === ($context["selectedJudging"] ?? null)) && twig_get_attribute($this->env, $this->source, ($context["selectedJudging"] ?? null), "result", [], "any", false, false, false, 612))) {
                            // line 613
                            echo "                                Run not used for final result.
                            ";
                        } else {
                            // line 615
                            echo "                                Run not started/finished yet.
                            ";
                        }
                        // line 617
                        echo "                        </p>
                    ";
                    } else {
                        // line 619
                        echo "                        ";
                        if (( !(null === twig_get_attribute($this->env, $this->source, $context["run"], "firstJudgingRun", [], "any", false, false, false, 619)) &&  !(null === twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["run"], "firstJudgingRun", [], "any", false, false, false, 619), "runresult", [], "any", false, false, false, 619)))) {
                            // line 620
                            echo "                            ";
                            if (($context["combinedRunCompare"] ?? null)) {
                                // line 621
                                echo "                                <h5>Validator output</h5>
                                ";
                                // line 622
                                if (twig_test_empty(twig_get_attribute($this->env, $this->source, (($__internal_98e944456c0f58b2585e4aa36e3a7e43f4b7c9038088f0f056004af41f4a007f = ($context["runsOutput"] ?? null)) && is_array($__internal_98e944456c0f58b2585e4aa36e3a7e43f4b7c9038088f0f056004af41f4a007f) || $__internal_98e944456c0f58b2585e4aa36e3a7e43f4b7c9038088f0f056004af41f4a007f instanceof ArrayAccess ? ($__internal_98e944456c0f58b2585e4aa36e3a7e43f4b7c9038088f0f056004af41f4a007f[$context["runIdx"]] ?? null) : null), "output_diff", [], "any", false, false, false, 622))) {
                                    // line 623
                                    echo "                                    <p class=\"nodata\">There was no validator output.</p>
                                ";
                                } else {
                                    // line 625
                                    echo "                                    <pre class=\"output_text\">";
                                    echo $this->extensions['App\Twig\TwigExtension']->parseRunDiff(twig_get_attribute($this->env, $this->source, (($__internal_a06a70691a7ca361709a372174fa669f5ee1c1e4ed302b3a5b61c10c80c02760 = ($context["runsOutput"] ?? null)) && is_array($__internal_a06a70691a7ca361709a372174fa669f5ee1c1e4ed302b3a5b61c10c80c02760) || $__internal_a06a70691a7ca361709a372174fa669f5ee1c1e4ed302b3a5b61c10c80c02760 instanceof ArrayAccess ? ($__internal_a06a70691a7ca361709a372174fa669f5ee1c1e4ed302b3a5b61c10c80c02760[$context["runIdx"]] ?? null) : null), "output_diff", [], "any", false, false, false, 625));
                                    echo "</pre>
                                ";
                                }
                                // line 627
                                echo "                            ";
                            } else {
                                // line 628
                                echo "                                <h5>Diff output</h5>
                                ";
                                // line 629
                                if (twig_test_empty(twig_get_attribute($this->env, $this->source, (($__internal_653499042eb14fd8415489ba6fa87c1e85cff03392e9f57b26d0da09b9be82ce = ($context["runsOutput"] ?? null)) && is_array($__internal_653499042eb14fd8415489ba6fa87c1e85cff03392e9f57b26d0da09b9be82ce) || $__internal_653499042eb14fd8415489ba6fa87c1e85cff03392e9f57b26d0da09b9be82ce instanceof ArrayAccess ? ($__internal_653499042eb14fd8415489ba6fa87c1e85cff03392e9f57b26d0da09b9be82ce[$context["runIdx"]] ?? null) : null), "output_diff", [], "any", false, false, false, 629))) {
                                    // line 630
                                    echo "                                    <p class=\"nodata\">There was no diff output.</p>
                                ";
                                } else {
                                    // line 632
                                    echo "                                    <pre class=\"output_text\">";
                                    echo $this->extensions['App\Twig\TwigExtension']->parseRunDiff(twig_get_attribute($this->env, $this->source, (($__internal_ba9f0a3bb95c082f61c9fbf892a05514d732703d52edc77b51f2e6284135900b = ($context["runsOutput"] ?? null)) && is_array($__internal_ba9f0a3bb95c082f61c9fbf892a05514d732703d52edc77b51f2e6284135900b) || $__internal_ba9f0a3bb95c082f61c9fbf892a05514d732703d52edc77b51f2e6284135900b instanceof ArrayAccess ? ($__internal_ba9f0a3bb95c082f61c9fbf892a05514d732703d52edc77b51f2e6284135900b[$context["runIdx"]] ?? null) : null), "output_diff", [], "any", false, false, false, 632));
                                    echo "</pre>
                                ";
                                }
                                // line 634
                                echo "
                                ";
                                // line 635
                                if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["run"], "firstJudgingRun", [], "any", false, false, false, 635), "runresult", [], "any", false, false, false, 635) != "correct")) {
                                    // line 636
                                    echo "                                    ";
                                    echo $this->extensions['App\Twig\TwigExtension']->runDiff((($__internal_73db8eef4d2582468dab79a6b09c77ce3b48675a610afd65a1f325b68804a60c = ($context["runsOutput"] ?? null)) && is_array($__internal_73db8eef4d2582468dab79a6b09c77ce3b48675a610afd65a1f325b68804a60c) || $__internal_73db8eef4d2582468dab79a6b09c77ce3b48675a610afd65a1f325b68804a60c instanceof ArrayAccess ? ($__internal_73db8eef4d2582468dab79a6b09c77ce3b48675a610afd65a1f325b68804a60c[$context["runIdx"]] ?? null) : null));
                                    echo "
                                ";
                                }
                                // line 638
                                echo "                            ";
                            }
                            // line 639
                            echo "
                            ";
                            // line 640
                            if (($context["combinedRunCompare"] ?? null)) {
                                // line 641
                                echo "                                <h5>Validator/Submission interaction</h5>
                                ";
                                // line 642
                                if (twig_test_empty(twig_get_attribute($this->env, $this->source, (($__internal_d8ad5934f1874c52fa2ac9a4dfae52038b39b8b03cfc82eeb53de6151d883972 = ($context["runsOutput"] ?? null)) && is_array($__internal_d8ad5934f1874c52fa2ac9a4dfae52038b39b8b03cfc82eeb53de6151d883972) || $__internal_d8ad5934f1874c52fa2ac9a4dfae52038b39b8b03cfc82eeb53de6151d883972 instanceof ArrayAccess ? ($__internal_d8ad5934f1874c52fa2ac9a4dfae52038b39b8b03cfc82eeb53de6151d883972[$context["runIdx"]] ?? null) : null), "output_run", [], "any", false, false, false, 642))) {
                                    // line 643
                                    echo "                                    <p class=\"nodata\">There was no interaction log.</p>
                                ";
                                } else {
                                    // line 645
                                    echo "                                    ";
                                    echo $this->extensions['App\Twig\TwigExtension']->interactiveLog(twig_get_attribute($this->env, $this->source, (($__internal_df39c71428eaf37baa1ea2198679e0077f3699bdd31bb5ba10d084710b9da216 = ($context["runsOutput"] ?? null)) && is_array($__internal_df39c71428eaf37baa1ea2198679e0077f3699bdd31bb5ba10d084710b9da216) || $__internal_df39c71428eaf37baa1ea2198679e0077f3699bdd31bb5ba10d084710b9da216 instanceof ArrayAccess ? ($__internal_df39c71428eaf37baa1ea2198679e0077f3699bdd31bb5ba10d084710b9da216[$context["runIdx"]] ?? null) : null), "output_run", [], "any", false, false, false, 645));
                                    echo "
                                ";
                                }
                                // line 647
                                echo "                            ";
                            } else {
                                // line 648
                                echo "                                <h5>Program output</h5>
                                ";
                                // line 649
                                if (twig_test_empty(twig_get_attribute($this->env, $this->source, (($__internal_bf0e189d688dc2ad611b50a437a32d3692fb6b8be90d2228617cfa6db44e75c0 = ($context["runsOutput"] ?? null)) && is_array($__internal_bf0e189d688dc2ad611b50a437a32d3692fb6b8be90d2228617cfa6db44e75c0) || $__internal_bf0e189d688dc2ad611b50a437a32d3692fb6b8be90d2228617cfa6db44e75c0 instanceof ArrayAccess ? ($__internal_bf0e189d688dc2ad611b50a437a32d3692fb6b8be90d2228617cfa6db44e75c0[$context["runIdx"]] ?? null) : null), "output_run", [], "any", false, false, false, 649))) {
                                    // line 650
                                    echo "                                    <p class=\"nodata\">There was no program output.</p>
                                ";
                                } else {
                                    // line 652
                                    echo "                                    <pre class=\"output_text\">";
                                    echo $this->extensions['App\Twig\TwigExtension']->parseRunDiff(twig_get_attribute($this->env, $this->source, (($__internal_674c0abf302105af78b0a38907d86c5dd0028bdc3ee5f24bf52771a16487760c = ($context["runsOutput"] ?? null)) && is_array($__internal_674c0abf302105af78b0a38907d86c5dd0028bdc3ee5f24bf52771a16487760c) || $__internal_674c0abf302105af78b0a38907d86c5dd0028bdc3ee5f24bf52771a16487760c instanceof ArrayAccess ? ($__internal_674c0abf302105af78b0a38907d86c5dd0028bdc3ee5f24bf52771a16487760c[$context["runIdx"]] ?? null) : null), "output_run", [], "any", false, false, false, 652));
                                    echo "</pre>
                                ";
                                }
                                // line 654
                                echo "                            ";
                            }
                            // line 655
                            echo "
                            <h5>Program error output</h5>
                            ";
                            // line 657
                            if (twig_test_empty(twig_get_attribute($this->env, $this->source, (($__internal_dd839fbfcab68823c49af471c7df7659a500fe72e71b58d6b80d896bdb55e75f = ($context["runsOutput"] ?? null)) && is_array($__internal_dd839fbfcab68823c49af471c7df7659a500fe72e71b58d6b80d896bdb55e75f) || $__internal_dd839fbfcab68823c49af471c7df7659a500fe72e71b58d6b80d896bdb55e75f instanceof ArrayAccess ? ($__internal_dd839fbfcab68823c49af471c7df7659a500fe72e71b58d6b80d896bdb55e75f[$context["runIdx"]] ?? null) : null), "output_error", [], "any", false, false, false, 657))) {
                                // line 658
                                echo "                                <p class=\"nodata\">There was no stderr output.</p>
                            ";
                            } else {
                                // line 660
                                echo "                                <pre class=\"output_text\">";
                                echo $this->extensions['App\Twig\TwigExtension']->parseRunDiff(twig_get_attribute($this->env, $this->source, (($__internal_a7ed47878554bdc32b70e1ba5ccc67d2302196876fbf62b4c853b20cb9e029fc = ($context["runsOutput"] ?? null)) && is_array($__internal_a7ed47878554bdc32b70e1ba5ccc67d2302196876fbf62b4c853b20cb9e029fc) || $__internal_a7ed47878554bdc32b70e1ba5ccc67d2302196876fbf62b4c853b20cb9e029fc instanceof ArrayAccess ? ($__internal_a7ed47878554bdc32b70e1ba5ccc67d2302196876fbf62b4c853b20cb9e029fc[$context["runIdx"]] ?? null) : null), "output_error", [], "any", false, false, false, 660));
                                echo "</pre>
                            ";
                            }
                            // line 662
                            echo "
                            <h5>Judging system output (info/debug/errors)</h5>
                            ";
                            // line 664
                            if (twig_test_empty(twig_get_attribute($this->env, $this->source, (($__internal_e5d7b41e16b744b68da1e9bb49047b8028ced86c782900009b4b4029b83d4b55 = ($context["runsOutput"] ?? null)) && is_array($__internal_e5d7b41e16b744b68da1e9bb49047b8028ced86c782900009b4b4029b83d4b55) || $__internal_e5d7b41e16b744b68da1e9bb49047b8028ced86c782900009b4b4029b83d4b55 instanceof ArrayAccess ? ($__internal_e5d7b41e16b744b68da1e9bb49047b8028ced86c782900009b4b4029b83d4b55[$context["runIdx"]] ?? null) : null), "output_system", [], "any", false, false, false, 664))) {
                                // line 665
                                echo "                                <p class=\"nodata\">There was no judging system output.</p>
                            ";
                            } else {
                                // line 667
                                echo "                                <pre class=\"output_text\">";
                                echo $this->extensions['App\Twig\TwigExtension']->parseRunDiff(twig_get_attribute($this->env, $this->source, (($__internal_9e93f398968fa0576dce82fd00f280e95c734ad3f84e7816ff09158ae224f5ba = ($context["runsOutput"] ?? null)) && is_array($__internal_9e93f398968fa0576dce82fd00f280e95c734ad3f84e7816ff09158ae224f5ba) || $__internal_9e93f398968fa0576dce82fd00f280e95c734ad3f84e7816ff09158ae224f5ba instanceof ArrayAccess ? ($__internal_9e93f398968fa0576dce82fd00f280e95c734ad3f84e7816ff09158ae224f5ba[$context["runIdx"]] ?? null) : null), "output_system", [], "any", false, false, false, 667));
                                echo "</pre>
                            ";
                            }
                            // line 669
                            echo "                        ";
                        }
                        // line 670
                        echo "                    ";
                    }
                    // line 671
                    echo "
                    </div>
                </div>
            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['runIdx'], $context['run'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 675
                echo "
            <script>
                function display_correctruns(show) {
                    elements = document.getElementsByClassName('run_correct');
                    for (var i = 0; i < elements.length; i++) {
                        elements[i].style.display = show ? 'block' : 'none';
                    }
                }

                display_correctruns(false);
            </script>
        ";
            }
            // line 686
            echo " ";
            // line 687
            echo "
    ";
        }
        // line 688
        echo " ";
        // line 689
        echo "
";
    }

    public function getTemplateName()
    {
        return "jury/submission.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1688 => 689,  1686 => 688,  1682 => 687,  1680 => 686,  1666 => 675,  1657 => 671,  1654 => 670,  1651 => 669,  1645 => 667,  1641 => 665,  1639 => 664,  1635 => 662,  1629 => 660,  1625 => 658,  1623 => 657,  1619 => 655,  1616 => 654,  1610 => 652,  1606 => 650,  1604 => 649,  1601 => 648,  1598 => 647,  1592 => 645,  1588 => 643,  1586 => 642,  1583 => 641,  1581 => 640,  1578 => 639,  1575 => 638,  1569 => 636,  1567 => 635,  1564 => 634,  1558 => 632,  1554 => 630,  1552 => 629,  1549 => 628,  1546 => 627,  1540 => 625,  1536 => 623,  1534 => 622,  1531 => 621,  1528 => 620,  1525 => 619,  1521 => 617,  1517 => 615,  1513 => 613,  1511 => 612,  1508 => 611,  1505 => 610,  1502 => 609,  1499 => 608,  1496 => 607,  1493 => 606,  1490 => 605,  1488 => 604,  1485 => 603,  1476 => 599,  1471 => 598,  1469 => 597,  1466 => 596,  1463 => 595,  1457 => 592,  1454 => 591,  1451 => 590,  1447 => 588,  1441 => 585,  1437 => 584,  1430 => 580,  1427 => 579,  1422 => 577,  1417 => 576,  1411 => 573,  1405 => 571,  1403 => 570,  1399 => 569,  1395 => 567,  1393 => 566,  1388 => 563,  1377 => 556,  1375 => 555,  1366 => 549,  1357 => 543,  1354 => 542,  1351 => 541,  1347 => 539,  1345 => 538,  1343 => 537,  1335 => 536,  1332 => 535,  1329 => 534,  1326 => 533,  1323 => 532,  1320 => 531,  1316 => 529,  1312 => 527,  1309 => 526,  1307 => 525,  1302 => 523,  1294 => 522,  1291 => 521,  1288 => 520,  1285 => 519,  1279 => 517,  1276 => 516,  1270 => 514,  1268 => 513,  1264 => 512,  1257 => 510,  1251 => 508,  1248 => 507,  1245 => 506,  1242 => 505,  1239 => 504,  1234 => 503,  1232 => 502,  1230 => 501,  1227 => 500,  1222 => 498,  1215 => 497,  1206 => 494,  1204 => 493,  1201 => 492,  1195 => 490,  1189 => 487,  1186 => 486,  1184 => 485,  1181 => 484,  1178 => 483,  1175 => 482,  1172 => 481,  1169 => 480,  1166 => 479,  1163 => 478,  1160 => 477,  1157 => 476,  1154 => 475,  1151 => 474,  1148 => 473,  1145 => 472,  1142 => 471,  1139 => 470,  1136 => 469,  1133 => 468,  1130 => 467,  1127 => 466,  1124 => 465,  1121 => 463,  1117 => 461,  1114 => 460,  1103 => 452,  1099 => 451,  1095 => 450,  1091 => 449,  1087 => 448,  1081 => 444,  1079 => 443,  1075 => 441,  1072 => 440,  1066 => 436,  1064 => 435,  1061 => 434,  1055 => 430,  1053 => 429,  1044 => 426,  1042 => 425,  1036 => 422,  1034 => 421,  1031 => 420,  1029 => 419,  1022 => 418,  1019 => 417,  1010 => 414,  1005 => 413,  1002 => 412,  992 => 403,  989 => 402,  985 => 400,  979 => 398,  977 => 397,  971 => 396,  967 => 394,  964 => 393,  960 => 390,  953 => 386,  948 => 383,  945 => 382,  938 => 378,  930 => 375,  926 => 373,  924 => 372,  917 => 369,  914 => 368,  911 => 367,  908 => 366,  905 => 365,  903 => 364,  897 => 360,  894 => 359,  890 => 356,  883 => 354,  880 => 353,  878 => 352,  871 => 348,  869 => 347,  863 => 346,  860 => 345,  858 => 344,  853 => 343,  850 => 342,  848 => 341,  845 => 339,  840 => 337,  835 => 335,  833 => 334,  830 => 333,  828 => 332,  824 => 330,  821 => 328,  816 => 326,  814 => 325,  810 => 324,  808 => 323,  806 => 322,  799 => 321,  797 => 320,  794 => 319,  792 => 318,  787 => 316,  785 => 315,  782 => 313,  775 => 312,  772 => 311,  770 => 310,  768 => 309,  765 => 307,  763 => 306,  760 => 304,  756 => 301,  753 => 299,  751 => 298,  749 => 297,  743 => 293,  739 => 291,  735 => 289,  731 => 287,  727 => 285,  724 => 284,  717 => 281,  715 => 280,  709 => 278,  707 => 277,  703 => 275,  699 => 273,  697 => 272,  691 => 271,  687 => 270,  684 => 269,  682 => 268,  678 => 267,  674 => 265,  671 => 263,  669 => 262,  666 => 261,  664 => 260,  661 => 259,  659 => 258,  656 => 257,  653 => 256,  650 => 255,  641 => 253,  636 => 252,  634 => 251,  630 => 249,  628 => 248,  625 => 247,  620 => 244,  611 => 240,  603 => 238,  601 => 237,  597 => 236,  592 => 233,  588 => 231,  586 => 230,  582 => 229,  578 => 228,  573 => 225,  567 => 223,  565 => 222,  561 => 221,  556 => 218,  550 => 216,  548 => 215,  544 => 214,  537 => 212,  531 => 211,  527 => 209,  523 => 207,  519 => 205,  517 => 204,  513 => 203,  505 => 201,  502 => 200,  498 => 199,  482 => 185,  480 => 184,  477 => 183,  468 => 178,  462 => 175,  457 => 174,  451 => 172,  449 => 171,  442 => 166,  440 => 165,  437 => 164,  433 => 162,  427 => 160,  425 => 159,  422 => 157,  420 => 156,  416 => 155,  413 => 153,  411 => 152,  407 => 150,  405 => 149,  401 => 147,  393 => 142,  389 => 140,  387 => 139,  379 => 134,  371 => 129,  362 => 123,  358 => 122,  349 => 116,  345 => 115,  338 => 110,  332 => 108,  324 => 106,  322 => 105,  318 => 104,  309 => 98,  305 => 97,  294 => 91,  290 => 90,  285 => 87,  282 => 85,  276 => 81,  274 => 80,  271 => 79,  267 => 77,  265 => 76,  261 => 74,  259 => 73,  256 => 72,  248 => 69,  244 => 68,  235 => 66,  229 => 64,  226 => 63,  223 => 62,  220 => 61,  217 => 60,  214 => 59,  212 => 58,  209 => 57,  205 => 55,  202 => 54,  198 => 52,  182 => 50,  176 => 49,  174 => 48,  157 => 47,  155 => 46,  152 => 45,  144 => 43,  141 => 42,  139 => 41,  135 => 40,  131 => 38,  125 => 35,  122 => 34,  120 => 33,  117 => 32,  114 => 31,  111 => 30,  108 => 29,  105 => 28,  103 => 27,  100 => 26,  96 => 25,  79 => 11,  75 => 10,  71 => 9,  67 => 8,  62 => 7,  58 => 6,  48 => 4,  37 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("", "jury/submission.html.twig", "/opt/domjudge/domserver/webapp/templates/jury/submission.html.twig");
    }
}
