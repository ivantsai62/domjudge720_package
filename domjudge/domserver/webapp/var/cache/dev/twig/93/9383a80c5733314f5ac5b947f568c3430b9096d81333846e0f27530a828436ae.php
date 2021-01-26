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
class __TwigTemplate_1f9af4ef8ca209fe723839cc7f968f6473fa94b056f82abca077006d3afd1253 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "jury/submission.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "jury/submission.html.twig"));

        $this->parent = $this->loadTemplate("jury/base.html.twig", "jury/submission.html.twig", 2);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 4
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Submission s";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["submission"]) || array_key_exists("submission", $context) ? $context["submission"] : (function () { throw new RuntimeError('Variable "submission" does not exist.', 4, $this->source); })()), "submitid", [], "any", false, false, false, 4), "html", null, true);
        echo " - ";
        $this->displayParentBlock("title", $context, $blocks);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 6
    public function block_extrahead($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "extrahead"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "extrahead"));

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
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 25
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 26
        echo "
    ";
        // line 27
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["submission"]) || array_key_exists("submission", $context) ? $context["submission"] : (function () { throw new RuntimeError('Variable "submission" does not exist.', 27, $this->source); })()), "externalJudgements", [], "any", false, false, false, 27), "empty", [], "any", false, false, false, 27)) {
            // line 28
            echo "        ";
            $context["externalJudgement"] = null;
            // line 29
            echo "    ";
        } else {
            // line 30
            echo "        ";
            $context["externalJudgement"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["submission"]) || array_key_exists("submission", $context) ? $context["submission"] : (function () { throw new RuntimeError('Variable "submission" does not exist.', 30, $this->source); })()), "externalJudgements", [], "any", false, false, false, 30), "first", [], "any", false, false, false, 30);
            // line 31
            echo "    ";
        }
        // line 32
        echo "
    ";
        // line 33
        if ((isset($context["claimWarning"]) || array_key_exists("claimWarning", $context) ? $context["claimWarning"] : (function () { throw new RuntimeError('Variable "claimWarning" does not exist.', 33, $this->source); })())) {
            // line 34
            echo "        <div class=\"alert alert-warning\">
            ";
            // line 35
            echo twig_escape_filter($this->env, (isset($context["claimWarning"]) || array_key_exists("claimWarning", $context) ? $context["claimWarning"] : (function () { throw new RuntimeError('Variable "claimWarning" does not exist.', 35, $this->source); })()), "html", null, true);
            echo "
        </div>
    ";
        }
        // line 38
        echo "    <div class=\"mb-3\">
        <h1 style=\"display: inline;\">
            Submission ";
        // line 40
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["submission"]) || array_key_exists("submission", $context) ? $context["submission"] : (function () { throw new RuntimeError('Variable "submission" does not exist.', 40, $this->source); })()), "submitid", [], "any", false, false, false, 40), "html", null, true);
        echo "
            ";
        // line 41
        if (twig_get_attribute($this->env, $this->source, (isset($context["submission"]) || array_key_exists("submission", $context) ? $context["submission"] : (function () { throw new RuntimeError('Variable "submission" does not exist.', 41, $this->source); })()), "originalSubmission", [], "any", false, false, false, 41)) {
            // line 42
            echo "                ";
            $context["origSubmissionUrl"] = $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_submission", ["submitId" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["submission"]) || array_key_exists("submission", $context) ? $context["submission"] : (function () { throw new RuntimeError('Variable "submission" does not exist.', 42, $this->source); })()), "originalSubmission", [], "any", false, false, false, 42), "submitid", [], "any", false, false, false, 42)]);
            // line 43
            echo "                (resubmit of <a href=\"";
            echo twig_escape_filter($this->env, (isset($context["origSubmissionUrl"]) || array_key_exists("origSubmissionUrl", $context) ? $context["origSubmissionUrl"] : (function () { throw new RuntimeError('Variable "origSubmissionUrl" does not exist.', 43, $this->source); })()), "html", null, true);
            echo "\">s";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["submission"]) || array_key_exists("submission", $context) ? $context["submission"] : (function () { throw new RuntimeError('Variable "submission" does not exist.', 43, $this->source); })()), "originalSubmission", [], "any", false, false, false, 43), "submitid", [], "any", false, false, false, 43), "html", null, true);
            echo "</a>)
            ";
        }
        // line 45
        echo "            ";
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["submission"]) || array_key_exists("submission", $context) ? $context["submission"] : (function () { throw new RuntimeError('Variable "submission" does not exist.', 45, $this->source); })()), "resubmissions", [], "any", false, false, false, 45))) {
            // line 46
            echo "                (resubmitted as";
            // line 47
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["submission"]) || array_key_exists("submission", $context) ? $context["submission"] : (function () { throw new RuntimeError('Variable "submission" does not exist.', 47, $this->source); })()), "resubmissions", [], "any", false, false, false, 47));
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
                echo twig_escape_filter($this->env, (isset($context["resubmissionUrl"]) || array_key_exists("resubmissionUrl", $context) ? $context["resubmissionUrl"] : (function () { throw new RuntimeError('Variable "resubmissionUrl" does not exist.', 49, $this->source); })()), "html", null, true);
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
        if ( !twig_get_attribute($this->env, $this->source, (isset($context["submission"]) || array_key_exists("submission", $context) ? $context["submission"] : (function () { throw new RuntimeError('Variable "submission" does not exist.', 54, $this->source); })()), "valid", [], "any", false, false, false, 54)) {
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
            if (twig_get_attribute($this->env, $this->source, (isset($context["submission"]) || array_key_exists("submission", $context) ? $context["submission"] : (function () { throw new RuntimeError('Variable "submission" does not exist.', 59, $this->source); })()), "valid", [], "any", false, false, false, 59)) {
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
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_submission_update_status", ["submitId" => twig_get_attribute($this->env, $this->source, (isset($context["submission"]) || array_key_exists("submission", $context) ? $context["submission"] : (function () { throw new RuntimeError('Variable "submission" does not exist.', 64, $this->source); })()), "submitid", [], "any", false, false, false, 64)]), "html", null, true);
            echo "\" method=\"post\"
                  style=\"display: inline; \">
                <input type=\"hidden\" name=\"valid\" value=\"";
            // line 66
            if (twig_get_attribute($this->env, $this->source, (isset($context["submission"]) || array_key_exists("submission", $context) ? $context["submission"] : (function () { throw new RuntimeError('Variable "submission" does not exist.', 66, $this->source); })()), "valid", [], "any", false, false, false, 66)) {
                echo "0";
            } else {
                echo "1";
            }
            echo "\"/>
                <input type=\"submit\" class=\"btn btn-outline-secondary btn-sm\"
                       value=\"";
            // line 68
            echo twig_escape_filter($this->env, twig_upper_filter($this->env, (isset($context["action"]) || array_key_exists("action", $context) ? $context["action"] : (function () { throw new RuntimeError('Variable "action" does not exist.', 68, $this->source); })())), "html", null, true);
            echo " this submission\"
                       onclick=\"return confirm('Really ";
            // line 69
            echo twig_escape_filter($this->env, (isset($context["action"]) || array_key_exists("action", $context) ? $context["action"] : (function () { throw new RuntimeError('Variable "action" does not exist.', 69, $this->source); })()), "html", null, true);
            echo " submission s";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["submission"]) || array_key_exists("submission", $context) ? $context["submission"] : (function () { throw new RuntimeError('Variable "submission" does not exist.', 69, $this->source); })()), "submitid", [], "any", false, false, false, 69), "html", null, true);
            echo "?');\"/>
            </form>
        ";
        }
        // line 72
        echo "
        ";
        // line 73
        $this->loadTemplate("jury/partials/rejudge_form.html.twig", "jury/submission.html.twig", 73)->display(twig_array_merge($context, ["table" => "submission", "id" => twig_get_attribute($this->env, $this->source, (isset($context["submission"]) || array_key_exists("submission", $context) ? $context["submission"] : (function () { throw new RuntimeError('Variable "submission" does not exist.', 73, $this->source); })()), "submitid", [], "any", false, false, false, 73)]));
        // line 74
        echo "    </div>

    ";
        // line 76
        if ( !twig_get_attribute($this->env, $this->source, (isset($context["submission"]) || array_key_exists("submission", $context) ? $context["submission"] : (function () { throw new RuntimeError('Variable "submission" does not exist.', 76, $this->source); })()), "valid", [], "any", false, false, false, 76)) {
            // line 77
            echo "        <div class=\"alert alert-danger\">This submission is not used during scoreboard calculations.</div>
    ";
        }
        // line 79
        echo "
    ";
        // line 80
        if ( !twig_get_attribute($this->env, $this->source, (isset($context["submission"]) || array_key_exists("submission", $context) ? $context["submission"] : (function () { throw new RuntimeError('Variable "submission" does not exist.', 80, $this->source); })()), "contestProblem", [], "any", false, false, false, 80)) {
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
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_team", ["teamId" => twig_get_attribute($this->env, $this->source, (isset($context["submission"]) || array_key_exists("submission", $context) ? $context["submission"] : (function () { throw new RuntimeError('Variable "submission" does not exist.', 90, $this->source); })()), "teamid", [], "any", false, false, false, 90), "cid" => twig_get_attribute($this->env, $this->source, (isset($context["submission"]) || array_key_exists("submission", $context) ? $context["submission"] : (function () { throw new RuntimeError('Variable "submission" does not exist.', 90, $this->source); })()), "cid", [], "any", false, false, false, 90)]), "html", null, true);
        echo "\">
                ";
        // line 91
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["submission"]) || array_key_exists("submission", $context) ? $context["submission"] : (function () { throw new RuntimeError('Variable "submission" does not exist.', 91, $this->source); })()), "team", [], "any", false, false, false, 91), "name", [], "any", false, false, false, 91), "html", null, true);
        echo " (t";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["submission"]) || array_key_exists("submission", $context) ? $context["submission"] : (function () { throw new RuntimeError('Variable "submission" does not exist.', 91, $this->source); })()), "teamid", [], "any", false, false, false, 91), "html", null, true);
        echo ")
            </a>
        </span>

        <span>
            <i class=\"fas fa-trophy\" title=\"Contest:\"></i>
            <a href=\"";
        // line 97
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_contest", ["contestId" => twig_get_attribute($this->env, $this->source, (isset($context["submission"]) || array_key_exists("submission", $context) ? $context["submission"] : (function () { throw new RuntimeError('Variable "submission" does not exist.', 97, $this->source); })()), "cid", [], "any", false, false, false, 97)]), "html", null, true);
        echo "\">
                ";
        // line 98
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["submission"]) || array_key_exists("submission", $context) ? $context["submission"] : (function () { throw new RuntimeError('Variable "submission" does not exist.', 98, $this->source); })()), "contest", [], "any", false, false, false, 98), "shortname", [], "any", false, false, false, 98), "html", null, true);
        echo "
            </a>
        </span>

        <span>
            <i class=\"fas fa-book-open\" title=\"Problem:\"></i>
            <a href=\"";
        // line 104
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_problem", ["probId" => twig_get_attribute($this->env, $this->source, (isset($context["submission"]) || array_key_exists("submission", $context) ? $context["submission"] : (function () { throw new RuntimeError('Variable "submission" does not exist.', 104, $this->source); })()), "probid", [], "any", false, false, false, 104)]), "html", null, true);
        echo "\">
                ";
        // line 105
        if (twig_get_attribute($this->env, $this->source, (isset($context["submission"]) || array_key_exists("submission", $context) ? $context["submission"] : (function () { throw new RuntimeError('Variable "submission" does not exist.', 105, $this->source); })()), "contestProblem", [], "any", false, false, false, 105)) {
            // line 106
            echo "                    ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["submission"]) || array_key_exists("submission", $context) ? $context["submission"] : (function () { throw new RuntimeError('Variable "submission" does not exist.', 106, $this->source); })()), "contestProblem", [], "any", false, false, false, 106), "shortname", [], "any", false, false, false, 106), "html", null, true);
            echo ": ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["submission"]) || array_key_exists("submission", $context) ? $context["submission"] : (function () { throw new RuntimeError('Variable "submission" does not exist.', 106, $this->source); })()), "problem", [], "any", false, false, false, 106), "name", [], "any", false, false, false, 106), "html", null, true);
            echo "
                ";
        } else {
            // line 108
            echo "                    ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["submission"]) || array_key_exists("submission", $context) ? $context["submission"] : (function () { throw new RuntimeError('Variable "submission" does not exist.', 108, $this->source); })()), "problem", [], "any", false, false, false, 108), "name", [], "any", false, false, false, 108), "html", null, true);
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
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_language", ["langId" => twig_get_attribute($this->env, $this->source, (isset($context["submission"]) || array_key_exists("submission", $context) ? $context["submission"] : (function () { throw new RuntimeError('Variable "submission" does not exist.', 115, $this->source); })()), "langid", [], "any", false, false, false, 115)]), "html", null, true);
        echo "\">
                ";
        // line 116
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["submission"]) || array_key_exists("submission", $context) ? $context["submission"] : (function () { throw new RuntimeError('Variable "submission" does not exist.', 116, $this->source); })()), "language", [], "any", false, false, false, 116), "name", [], "any", false, false, false, 116), "html", null, true);
        echo "
            </a>
        </span>

        <span>
            <i class=\"fas fa-clock\" title=\"Submittime:\"></i>
            <span title=\"";
        // line 122
        echo twig_escape_filter($this->env, $this->extensions['App\Twig\TwigExtension']->printtime(twig_get_attribute($this->env, $this->source, (isset($context["submission"]) || array_key_exists("submission", $context) ? $context["submission"] : (function () { throw new RuntimeError('Variable "submission" does not exist.', 122, $this->source); })()), "submittime", [], "any", false, false, false, 122), "%Y-%m-%d %H:%M:%S (%Z)"), "html", null, true);
        echo "\">
                ";
        // line 123
        echo twig_escape_filter($this->env, $this->extensions['App\Twig\TwigExtension']->printtime(twig_get_attribute($this->env, $this->source, (isset($context["submission"]) || array_key_exists("submission", $context) ? $context["submission"] : (function () { throw new RuntimeError('Variable "submission" does not exist.', 123, $this->source); })()), "submittime", [], "any", false, false, false, 123), null, twig_get_attribute($this->env, $this->source, (isset($context["submission"]) || array_key_exists("submission", $context) ? $context["submission"] : (function () { throw new RuntimeError('Variable "submission" does not exist.', 123, $this->source); })()), "contest", [], "any", false, false, false, 123)), "html", null, true);
        echo "
            </span>
        </span>

        <span>
            <i class=\"fas fa-stopwatch\" title=\"Allowed runtime:\"></i>
            ";
        // line 129
        echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["submission"]) || array_key_exists("submission", $context) ? $context["submission"] : (function () { throw new RuntimeError('Variable "submission" does not exist.', 129, $this->source); })()), "problem", [], "any", false, false, false, 129), "timelimit", [], "any", false, false, false, 129) * twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["submission"]) || array_key_exists("submission", $context) ? $context["submission"] : (function () { throw new RuntimeError('Variable "submission" does not exist.', 129, $this->source); })()), "language", [], "any", false, false, false, 129), "timeFactor", [], "any", false, false, false, 129)), "html", null, true);
        echo "s
        </span>

        <span>
            <i class=\"fas fa-code\" title=\"Source code:\"></i>
            <a href=\"";
        // line 134
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_submission_source", ["submission" => twig_get_attribute($this->env, $this->source, (isset($context["submission"]) || array_key_exists("submission", $context) ? $context["submission"] : (function () { throw new RuntimeError('Variable "submission" does not exist.', 134, $this->source); })()), "submitid", [], "any", false, false, false, 134)]), "html", null, true);
        echo "\">
                View source code
            </a>
        </span>

        ";
        // line 139
        if ( !twig_test_empty((isset($context["external_ccs_submission_url"]) || array_key_exists("external_ccs_submission_url", $context) ? $context["external_ccs_submission_url"] : (function () { throw new RuntimeError('Variable "external_ccs_submission_url" does not exist.', 139, $this->source); })()))) {
            // line 140
            echo "            <span>
                <i class=\"fas fa-link\" title=\"External link:\"></i>
                <a href=\"";
            // line 142
            echo twig_escape_filter($this->env, $this->extensions['App\Twig\TwigExtension']->externalCcsUrl((isset($context["submission"]) || array_key_exists("submission", $context) ? $context["submission"] : (function () { throw new RuntimeError('Variable "submission" does not exist.', 142, $this->source); })())), "html", null, true);
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
        if (twig_get_attribute($this->env, $this->source, (isset($context["submission"]) || array_key_exists("submission", $context) ? $context["submission"] : (function () { throw new RuntimeError('Variable "submission" does not exist.', 149, $this->source); })()), "externalid", [], "any", false, false, false, 149)) {
            // line 150
            echo "        <div class=\"mb-2\">
            External ID:
            ";
            // line 152
            if (twig_test_empty((isset($context["external_ccs_submission_url"]) || array_key_exists("external_ccs_submission_url", $context) ? $context["external_ccs_submission_url"] : (function () { throw new RuntimeError('Variable "external_ccs_submission_url" does not exist.', 152, $this->source); })()))) {
                // line 153
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["submission"]) || array_key_exists("submission", $context) ? $context["submission"] : (function () { throw new RuntimeError('Variable "submission" does not exist.', 153, $this->source); })()), "externalid", [], "any", false, false, false, 153), "html", null, true);
            } else {
                // line 155
                echo "                <a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['App\Twig\TwigExtension']->externalCcsUrl((isset($context["submission"]) || array_key_exists("submission", $context) ? $context["submission"] : (function () { throw new RuntimeError('Variable "submission" does not exist.', 155, $this->source); })())), "html", null, true);
                echo "\" target=\"_blank\">";
                // line 156
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["submission"]) || array_key_exists("submission", $context) ? $context["submission"] : (function () { throw new RuntimeError('Variable "submission" does not exist.', 156, $this->source); })()), "externalid", [], "any", false, false, false, 156), "html", null, true);
                // line 157
                echo "</a>";
            }
            // line 159
            if ( !(null === (isset($context["externalJudgement"]) || array_key_exists("externalJudgement", $context) ? $context["externalJudgement"] : (function () { throw new RuntimeError('Variable "externalJudgement" does not exist.', 159, $this->source); })()))) {
                // line 160
                echo ", ";
                echo $this->extensions['App\Twig\TwigExtension']->printValidJuryResult(twig_get_attribute($this->env, $this->source, (isset($context["externalJudgement"]) || array_key_exists("externalJudgement", $context) ? $context["externalJudgement"] : (function () { throw new RuntimeError('Variable "externalJudgement" does not exist.', 160, $this->source); })()), "result", [], "any", false, false, false, 160));
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
        if (((( !(null === (isset($context["externalJudgement"]) || array_key_exists("externalJudgement", $context) ? $context["externalJudgement"] : (function () { throw new RuntimeError('Variable "externalJudgement" does not exist.', 165, $this->source); })())) &&  !twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["externalJudgement"]) || array_key_exists("externalJudgement", $context) ? $context["externalJudgement"] : (function () { throw new RuntimeError('Variable "externalJudgement" does not exist.', 165, $this->source); })()), "result", [], "any", false, false, false, 165))) &&  !(null === (isset($context["selectedJudging"]) || array_key_exists("selectedJudging", $context) ? $context["selectedJudging"] : (function () { throw new RuntimeError('Variable "selectedJudging" does not exist.', 165, $this->source); })()))) && (twig_get_attribute($this->env, $this->source, (isset($context["externalJudgement"]) || array_key_exists("externalJudgement", $context) ? $context["externalJudgement"] : (function () { throw new RuntimeError('Variable "externalJudgement" does not exist.', 165, $this->source); })()), "result", [], "any", false, false, false, 165) != twig_get_attribute($this->env, $this->source, (isset($context["selectedJudging"]) || array_key_exists("selectedJudging", $context) ? $context["selectedJudging"] : (function () { throw new RuntimeError('Variable "selectedJudging" does not exist.', 165, $this->source); })()), "result", [], "any", false, false, false, 165)))) {
            // line 166
            echo "        <div class=\"alert alert-danger\">
            <strong>Results differ!</strong>
            <hr>
            <p>
                This submission was judged as
                ";
            // line 171
            if (twig_test_empty((isset($context["external_ccs_submission_url"]) || array_key_exists("external_ccs_submission_url", $context) ? $context["external_ccs_submission_url"] : (function () { throw new RuntimeError('Variable "external_ccs_submission_url" does not exist.', 171, $this->source); })()))) {
                // line 172
                echo "                    ";
                echo $this->extensions['App\Twig\TwigExtension']->printValidJuryResult(twig_get_attribute($this->env, $this->source, (isset($context["externalJudgement"]) || array_key_exists("externalJudgement", $context) ? $context["externalJudgement"] : (function () { throw new RuntimeError('Variable "externalJudgement" does not exist.', 172, $this->source); })()), "result", [], "any", false, false, false, 172));
                echo " by the external CCS
                ";
            } else {
                // line 174
                echo "                    <a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['App\Twig\TwigExtension']->externalCcsUrl((isset($context["submission"]) || array_key_exists("submission", $context) ? $context["submission"] : (function () { throw new RuntimeError('Variable "submission" does not exist.', 174, $this->source); })())), "html", null, true);
                echo "\" target=\"_blank\">
                        ";
                // line 175
                echo $this->extensions['App\Twig\TwigExtension']->printValidJuryResult(twig_get_attribute($this->env, $this->source, (isset($context["externalJudgement"]) || array_key_exists("externalJudgement", $context) ? $context["externalJudgement"] : (function () { throw new RuntimeError('Variable "externalJudgement" does not exist.', 175, $this->source); })()), "result", [], "any", false, false, false, 175));
                echo " by the external CCS
                    </a>
                ";
            }
            // line 178
            echo ", but as ";
            echo $this->extensions['App\Twig\TwigExtension']->printValidJuryResult(twig_get_attribute($this->env, $this->source, (isset($context["selectedJudging"]) || array_key_exists("selectedJudging", $context) ? $context["selectedJudging"] : (function () { throw new RuntimeError('Variable "selectedJudging" does not exist.', 178, $this->source); })()), "result", [], "any", false, false, false, 178));
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
        if (((twig_length_filter($this->env, (isset($context["judgings"]) || array_key_exists("judgings", $context) ? $context["judgings"] : (function () { throw new RuntimeError('Variable "judgings" does not exist.', 184, $this->source); })())) > 1) || ((twig_length_filter($this->env, (isset($context["judgings"]) || array_key_exists("judgings", $context) ? $context["judgings"] : (function () { throw new RuntimeError('Variable "judgings" does not exist.', 184, $this->source); })())) == 1) && (null === (isset($context["selectedJudging"]) || array_key_exists("selectedJudging", $context) ? $context["selectedJudging"] : (function () { throw new RuntimeError('Variable "selectedJudging" does not exist.', 184, $this->source); })()))))) {
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
            $context['_seq'] = twig_ensure_traversable((isset($context["judgings"]) || array_key_exists("judgings", $context) ? $context["judgings"] : (function () { throw new RuntimeError('Variable "judgings" does not exist.', 199, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["judging"]) {
                // line 200
                echo "                ";
                $context["link"] = $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_submission", ["submitId" => twig_get_attribute($this->env, $this->source, (isset($context["submission"]) || array_key_exists("submission", $context) ? $context["submission"] : (function () { throw new RuntimeError('Variable "submission" does not exist.', 200, $this->source); })()), "submitid", [], "any", false, false, false, 200), "jid" => twig_get_attribute($this->env, $this->source, $context["judging"], "judgingid", [], "any", false, false, false, 200)]);
                // line 201
                echo "                <tr ";
                if ( !twig_get_attribute($this->env, $this->source, $context["judging"], "valid", [], "any", false, false, false, 201)) {
                    echo "class=\"disabled\"";
                }
                echo ">
                    <td>
                        <a href=\"";
                // line 203
                echo twig_escape_filter($this->env, (isset($context["link"]) || array_key_exists("link", $context) ? $context["link"] : (function () { throw new RuntimeError('Variable "link" does not exist.', 203, $this->source); })()), "html", null, true);
                echo "\">
                            ";
                // line 204
                if (( !(null === (isset($context["selectedJudging"]) || array_key_exists("selectedJudging", $context) ? $context["selectedJudging"] : (function () { throw new RuntimeError('Variable "selectedJudging" does not exist.', 204, $this->source); })())) && (twig_get_attribute($this->env, $this->source, (isset($context["selectedJudging"]) || array_key_exists("selectedJudging", $context) ? $context["selectedJudging"] : (function () { throw new RuntimeError('Variable "selectedJudging" does not exist.', 204, $this->source); })()), "judgingid", [], "any", false, false, false, 204) == twig_get_attribute($this->env, $this->source, $context["judging"], "judgingid", [], "any", false, false, false, 204)))) {
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
                echo twig_escape_filter($this->env, (isset($context["link"]) || array_key_exists("link", $context) ? $context["link"] : (function () { throw new RuntimeError('Variable "link" does not exist.', 211, $this->source); })()), "html", null, true);
                echo "\">j";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["judging"], "judgingid", [], "any", false, false, false, 211), "html", null, true);
                echo "</a></td>
                    <td><a href=\"";
                // line 212
                echo twig_escape_filter($this->env, (isset($context["link"]) || array_key_exists("link", $context) ? $context["link"] : (function () { throw new RuntimeError('Variable "link" does not exist.', 212, $this->source); })()), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->extensions['App\Twig\TwigExtension']->printtime(twig_get_attribute($this->env, $this->source, $context["judging"], "starttime", [], "any", false, false, false, 212), null, twig_get_attribute($this->env, $this->source, (isset($context["submission"]) || array_key_exists("submission", $context) ? $context["submission"] : (function () { throw new RuntimeError('Variable "submission" does not exist.', 212, $this->source); })()), "contest", [], "any", false, false, false, 212)), "html", null, true);
                echo "</a></td>
                    <td>
                        <a href=\"";
                // line 214
                echo twig_escape_filter($this->env, (isset($context["link"]) || array_key_exists("link", $context) ? $context["link"] : (function () { throw new RuntimeError('Variable "link" does not exist.', 214, $this->source); })()), "html", null, true);
                echo "\">
                            ";
                // line 215
                if ( !(null === twig_get_attribute($this->env, $this->source, (isset($context["maxRunTimes"]) || array_key_exists("maxRunTimes", $context) ? $context["maxRunTimes"] : (function () { throw new RuntimeError('Variable "maxRunTimes" does not exist.', 215, $this->source); })()), twig_get_attribute($this->env, $this->source, $context["judging"], "judgingId", [], "any", false, false, false, 215), [], "array", false, false, false, 215))) {
                    // line 216
                    echo "                                ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["maxRunTimes"]) || array_key_exists("maxRunTimes", $context) ? $context["maxRunTimes"] : (function () { throw new RuntimeError('Variable "maxRunTimes" does not exist.', 216, $this->source); })()), twig_get_attribute($this->env, $this->source, $context["judging"], "judgingId", [], "any", false, false, false, 216), [], "array", false, false, false, 216), "html", null, true);
                    echo "s
                            ";
                }
                // line 218
                echo "                        </a>
                    </td>
                    <td>
                        <a href=\"";
                // line 221
                echo twig_escape_filter($this->env, (isset($context["link"]) || array_key_exists("link", $context) ? $context["link"] : (function () { throw new RuntimeError('Variable "link" does not exist.', 221, $this->source); })()), "html", null, true);
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
                echo twig_escape_filter($this->env, (isset($context["link"]) || array_key_exists("link", $context) ? $context["link"] : (function () { throw new RuntimeError('Variable "link" does not exist.', 228, $this->source); })()), "html", null, true);
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
                echo twig_escape_filter($this->env, (isset($context["link"]) || array_key_exists("link", $context) ? $context["link"] : (function () { throw new RuntimeError('Variable "link" does not exist.', 236, $this->source); })()), "html", null, true);
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
        if ((null === (isset($context["selectedJudging"]) || array_key_exists("selectedJudging", $context) ? $context["selectedJudging"] : (function () { throw new RuntimeError('Variable "selectedJudging" does not exist.', 248, $this->source); })()))) {
            // line 249
            echo "        <div class=\"alert alert-warning\">Not (re)judged yet</div>

        ";
            // line 251
            if ( !twig_test_empty((isset($context["unjudgableReasons"]) || array_key_exists("unjudgableReasons", $context) ? $context["unjudgableReasons"] : (function () { throw new RuntimeError('Variable "unjudgableReasons" does not exist.', 251, $this->source); })()))) {
                // line 252
                echo "            ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["unjudgableReasons"]) || array_key_exists("unjudgableReasons", $context) ? $context["unjudgableReasons"] : (function () { throw new RuntimeError('Variable "unjudgableReasons" does not exist.', 252, $this->source); })()));
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
        if (( !(null === (isset($context["selectedJudging"]) || array_key_exists("selectedJudging", $context) ? $context["selectedJudging"] : (function () { throw new RuntimeError('Variable "selectedJudging" does not exist.', 258, $this->source); })())) ||  !(null === (isset($context["externalJudgement"]) || array_key_exists("externalJudgement", $context) ? $context["externalJudgement"] : (function () { throw new RuntimeError('Variable "externalJudgement" does not exist.', 258, $this->source); })())))) {
            // line 259
            echo "
        ";
            // line 260
            $this->loadTemplate("jury/partials/submission_graph.html.twig", "jury/submission.html.twig", 260)->display($context);
            // line 261
            echo "
        ";
            // line 262
            if ( !(null === (isset($context["selectedJudging"]) || array_key_exists("selectedJudging", $context) ? $context["selectedJudging"] : (function () { throw new RuntimeError('Variable "selectedJudging" does not exist.', 262, $this->source); })()))) {
                // line 263
                echo "
            ";
                // line 265
                echo "            <div class=\"mb-2\">
                <h2 style=\"display: inline;\">
                    Judging j";
                // line 267
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["selectedJudging"]) || array_key_exists("selectedJudging", $context) ? $context["selectedJudging"] : (function () { throw new RuntimeError('Variable "selectedJudging" does not exist.', 267, $this->source); })()), "judgingid", [], "any", false, false, false, 267), "html", null, true);
                echo "
                    ";
                // line 268
                if (twig_get_attribute($this->env, $this->source, (isset($context["selectedJudging"]) || array_key_exists("selectedJudging", $context) ? $context["selectedJudging"] : (function () { throw new RuntimeError('Variable "selectedJudging" does not exist.', 268, $this->source); })()), "rejudging", [], "any", false, false, false, 268)) {
                    // line 269
                    echo "                        (rejudging
                        <a href=\"";
                    // line 270
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_rejudging", ["rejudgingId" => twig_get_attribute($this->env, $this->source, (isset($context["selectedJudging"]) || array_key_exists("selectedJudging", $context) ? $context["selectedJudging"] : (function () { throw new RuntimeError('Variable "selectedJudging" does not exist.', 270, $this->source); })()), "rejudgingid", [], "any", false, false, false, 270)]), "html", null, true);
                    echo "\">
                            r";
                    // line 271
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["selectedJudging"]) || array_key_exists("selectedJudging", $context) ? $context["selectedJudging"] : (function () { throw new RuntimeError('Variable "selectedJudging" does not exist.', 271, $this->source); })()), "rejudgingid", [], "any", false, false, false, 271), "html", null, true);
                    echo "</a>, reason: ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["selectedJudging"]) || array_key_exists("selectedJudging", $context) ? $context["selectedJudging"] : (function () { throw new RuntimeError('Variable "selectedJudging" does not exist.', 271, $this->source); })()), "rejudging", [], "any", false, false, false, 271), "reason", [], "any", false, false, false, 271), "html", null, true);
                    echo ")
                    ";
                } elseif ( !twig_get_attribute($this->env, $this->source,                 // line 272
(isset($context["selectedJudging"]) || array_key_exists("selectedJudging", $context) ? $context["selectedJudging"] : (function () { throw new RuntimeError('Variable "selectedJudging" does not exist.', 272, $this->source); })()), "valid", [], "any", false, false, false, 272)) {
                    // line 273
                    echo "                        (Invalid)
                    ";
                }
                // line 275
                echo "                </h2>
                &nbsp;
                ";
                // line 277
                if ( !twig_get_attribute($this->env, $this->source, (isset($context["selectedJudging"]) || array_key_exists("selectedJudging", $context) ? $context["selectedJudging"] : (function () { throw new RuntimeError('Variable "selectedJudging" does not exist.', 277, $this->source); })()), "verified", [], "any", false, false, false, 277)) {
                    // line 278
                    echo "                    <form action=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_submission", ["submitId" => twig_get_attribute($this->env, $this->source, (isset($context["submission"]) || array_key_exists("submission", $context) ? $context["submission"] : (function () { throw new RuntimeError('Variable "submission" does not exist.', 278, $this->source); })()), "submitid", [], "any", false, false, false, 278), "jid" => twig_get_attribute($this->env, $this->source, (isset($context["selectedJudging"]) || array_key_exists("selectedJudging", $context) ? $context["selectedJudging"] : (function () { throw new RuntimeError('Variable "selectedJudging" does not exist.', 278, $this->source); })()), "judgingid", [], "any", false, false, false, 278)]), "html", null, true);
                    echo "\"
                          method=\"post\" style=\"display: inline;\">
                        ";
                    // line 280
                    if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["selectedJudging"]) || array_key_exists("selectedJudging", $context) ? $context["selectedJudging"] : (function () { throw new RuntimeError('Variable "selectedJudging" does not exist.', 280, $this->source); })()), "juryMember", [], "any", false, false, false, 280))) {
                        // line 281
                        echo "                            (claimed by ";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["selectedJudging"]) || array_key_exists("selectedJudging", $context) ? $context["selectedJudging"] : (function () { throw new RuntimeError('Variable "selectedJudging" does not exist.', 281, $this->source); })()), "juryMember", [], "any", false, false, false, 281), "html", null, true);
                        echo ")
                            <input type=\"hidden\" name=\"forceclaim\" value=\"1\"/>
                        ";
                    }
                    // line 284
                    echo "                        ";
                    if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 284, $this->source); })()), "user", [], "any", false, false, false, 284), "username", [], "any", false, false, false, 284) == twig_get_attribute($this->env, $this->source, (isset($context["selectedJudging"]) || array_key_exists("selectedJudging", $context) ? $context["selectedJudging"] : (function () { throw new RuntimeError('Variable "selectedJudging" does not exist.', 284, $this->source); })()), "juryMember", [], "any", false, false, false, 284))) {
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
            if (((null === (isset($context["selectedJudging"]) || array_key_exists("selectedJudging", $context) ? $context["selectedJudging"] : (function () { throw new RuntimeError('Variable "selectedJudging" does not exist.', 297, $this->source); })())) || twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["selectedJudging"]) || array_key_exists("selectedJudging", $context) ? $context["selectedJudging"] : (function () { throw new RuntimeError('Variable "selectedJudging" does not exist.', 297, $this->source); })()), "result", [], "any", false, false, false, 297)))) {
                // line 298
                if (twig_get_attribute($this->env, $this->source, (isset($context["submission"]) || array_key_exists("submission", $context) ? $context["submission"] : (function () { throw new RuntimeError('Variable "submission" does not exist.', 298, $this->source); })()), "judgehost", [], "any", false, false, false, 298)) {
                    // line 299
                    echo $this->extensions['App\Twig\TwigExtension']->printValidJuryResult("");
                } else {
                    // line 301
                    echo $this->extensions['App\Twig\TwigExtension']->printValidJuryResult("queued");
                }
            } else {
                // line 304
                echo $this->extensions['App\Twig\TwigExtension']->printValidJuryResult(twig_get_attribute($this->env, $this->source, (isset($context["selectedJudging"]) || array_key_exists("selectedJudging", $context) ? $context["selectedJudging"] : (function () { throw new RuntimeError('Variable "selectedJudging" does not exist.', 304, $this->source); })()), "result", [], "any", false, false, false, 304));
            }
            // line 306
            if (twig_get_attribute($this->env, $this->source, (isset($context["submission"]) || array_key_exists("submission", $context) ? $context["submission"] : (function () { throw new RuntimeError('Variable "submission" does not exist.', 306, $this->source); })()), "stillBusy", [], "any", false, false, false, 306)) {
                // line 307
                echo "(&hellip;)";
            }
            // line 309
            if ( !(null === (isset($context["lastJudging"]) || array_key_exists("lastJudging", $context) ? $context["lastJudging"] : (function () { throw new RuntimeError('Variable "lastJudging" does not exist.', 309, $this->source); })()))) {
                // line 310
                $context["lastSubmissionLink"] = $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_submission", ["submitId" => twig_get_attribute($this->env, $this->source, (isset($context["lastSubmission"]) || array_key_exists("lastSubmission", $context) ? $context["lastSubmission"] : (function () { throw new RuntimeError('Variable "lastSubmission" does not exist.', 310, $this->source); })()), "submitid", [], "any", false, false, false, 310)]);
                // line 311
                echo "<span class=\"lastresult\">
                    (<a href=\"";
                // line 312
                echo twig_escape_filter($this->env, (isset($context["lastSubmissionLink"]) || array_key_exists("lastSubmissionLink", $context) ? $context["lastSubmissionLink"] : (function () { throw new RuntimeError('Variable "lastSubmissionLink" does not exist.', 312, $this->source); })()), "html", null, true);
                echo "\">s";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["lastSubmission"]) || array_key_exists("lastSubmission", $context) ? $context["lastSubmission"] : (function () { throw new RuntimeError('Variable "lastSubmission" does not exist.', 312, $this->source); })()), "submitid", [], "any", false, false, false, 312), "html", null, true);
                echo "</a>: ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["lastJudging"]) || array_key_exists("lastJudging", $context) ? $context["lastJudging"] : (function () { throw new RuntimeError('Variable "lastJudging" does not exist.', 312, $this->source); })()), "result", [], "any", false, false, false, 312), "html", null, true);
                echo ")";
                // line 313
                echo "</span>";
            }
            // line 315
            if ( !(null === (isset($context["externalJudgement"]) || array_key_exists("externalJudgement", $context) ? $context["externalJudgement"] : (function () { throw new RuntimeError('Variable "externalJudgement" does not exist.', 315, $this->source); })()))) {
                // line 316
                echo "                    (external: ";
                echo $this->extensions['App\Twig\TwigExtension']->printValidJuryResult(twig_get_attribute($this->env, $this->source, (isset($context["externalJudgement"]) || array_key_exists("externalJudgement", $context) ? $context["externalJudgement"] : (function () { throw new RuntimeError('Variable "externalJudgement" does not exist.', 316, $this->source); })()), "result", [], "any", false, false, false, 316));
                echo ")";
            }
            // line 318
            if ( !(null === (isset($context["selectedJudging"]) || array_key_exists("selectedJudging", $context) ? $context["selectedJudging"] : (function () { throw new RuntimeError('Variable "selectedJudging" does not exist.', 318, $this->source); })()))) {
                // line 319
                echo ", Judgehost:
                    ";
                // line 320
                $context["judgehostLink"] = $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_judgehost", ["hostname" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["selectedJudging"]) || array_key_exists("selectedJudging", $context) ? $context["selectedJudging"] : (function () { throw new RuntimeError('Variable "selectedJudging" does not exist.', 320, $this->source); })()), "judgehost", [], "any", false, false, false, 320), "hostname", [], "any", false, false, false, 320)]);
                // line 321
                echo "                    <a href=\"";
                echo twig_escape_filter($this->env, (isset($context["judgehostLink"]) || array_key_exists("judgehostLink", $context) ? $context["judgehostLink"] : (function () { throw new RuntimeError('Variable "judgehostLink" does not exist.', 321, $this->source); })()), "html", null, true);
                echo "\">";
                echo $this->extensions['App\Twig\TwigExtension']->printHost(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["selectedJudging"]) || array_key_exists("selectedJudging", $context) ? $context["selectedJudging"] : (function () { throw new RuntimeError('Variable "selectedJudging" does not exist.', 321, $this->source); })()), "judgehost", [], "any", false, false, false, 321), "hostname", [], "any", false, false, false, 321));
                echo "</a>,
                    <span class=\"judgetime\">Judging started: ";
                // line 322
                echo twig_escape_filter($this->env, $this->extensions['App\Twig\TwigExtension']->printtime(twig_get_attribute($this->env, $this->source, (isset($context["selectedJudging"]) || array_key_exists("selectedJudging", $context) ? $context["selectedJudging"] : (function () { throw new RuntimeError('Variable "selectedJudging" does not exist.', 322, $this->source); })()), "starttime", [], "any", false, false, false, 322), "%H:%M:%S"), "html", null, true);
                // line 323
                if (twig_get_attribute($this->env, $this->source, (isset($context["selectedJudging"]) || array_key_exists("selectedJudging", $context) ? $context["selectedJudging"] : (function () { throw new RuntimeError('Variable "selectedJudging" does not exist.', 323, $this->source); })()), "endtime", [], "any", false, false, false, 323)) {
                    // line 324
                    echo ", finished in ";
                    echo twig_escape_filter($this->env, $this->extensions['App\Twig\TwigExtension']->printtimediff(twig_get_attribute($this->env, $this->source, (isset($context["selectedJudging"]) || array_key_exists("selectedJudging", $context) ? $context["selectedJudging"] : (function () { throw new RuntimeError('Variable "selectedJudging" does not exist.', 324, $this->source); })()), "starttime", [], "any", false, false, false, 324), twig_get_attribute($this->env, $this->source, (isset($context["selectedJudging"]) || array_key_exists("selectedJudging", $context) ? $context["selectedJudging"] : (function () { throw new RuntimeError('Variable "selectedJudging" does not exist.', 324, $this->source); })()), "endtime", [], "any", false, false, false, 324)), "html", null, true);
                    echo "s";
                } elseif ((twig_get_attribute($this->env, $this->source,                 // line 325
(isset($context["selectedJudging"]) || array_key_exists("selectedJudging", $context) ? $context["selectedJudging"] : (function () { throw new RuntimeError('Variable "selectedJudging" does not exist.', 325, $this->source); })()), "valid", [], "any", false, false, false, 325) || twig_get_attribute($this->env, $this->source, (isset($context["selectedJudging"]) || array_key_exists("selectedJudging", $context) ? $context["selectedJudging"] : (function () { throw new RuntimeError('Variable "selectedJudging" does not exist.', 325, $this->source); })()), "rejudging", [], "any", false, false, false, 325))) {
                    // line 326
                    echo "&nbsp;[still judging - busy ";
                    echo twig_escape_filter($this->env, $this->extensions['App\Twig\TwigExtension']->printtimediff(twig_get_attribute($this->env, $this->source, (isset($context["selectedJudging"]) || array_key_exists("selectedJudging", $context) ? $context["selectedJudging"] : (function () { throw new RuntimeError('Variable "selectedJudging" does not exist.', 326, $this->source); })()), "starttime", [], "any", false, false, false, 326)), "html", null, true);
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
            if ( !(null === (isset($context["externalJudgement"]) || array_key_exists("externalJudgement", $context) ? $context["externalJudgement"] : (function () { throw new RuntimeError('Variable "externalJudgement" does not exist.', 332, $this->source); })()))) {
                // line 333
                echo "                    <span class=\"judgetime\">(external judging started: ";
                echo twig_escape_filter($this->env, $this->extensions['App\Twig\TwigExtension']->printtime(twig_get_attribute($this->env, $this->source, (isset($context["externalJudgement"]) || array_key_exists("externalJudgement", $context) ? $context["externalJudgement"] : (function () { throw new RuntimeError('Variable "externalJudgement" does not exist.', 333, $this->source); })()), "starttime", [], "any", false, false, false, 333), "%H:%M:%S"), "html", null, true);
                // line 334
                if (twig_get_attribute($this->env, $this->source, (isset($context["externalJudgement"]) || array_key_exists("externalJudgement", $context) ? $context["externalJudgement"] : (function () { throw new RuntimeError('Variable "externalJudgement" does not exist.', 334, $this->source); })()), "endtime", [], "any", false, false, false, 334)) {
                    // line 335
                    echo ", finished in ";
                    echo twig_escape_filter($this->env, $this->extensions['App\Twig\TwigExtension']->printtimediff(twig_get_attribute($this->env, $this->source, (isset($context["externalJudgement"]) || array_key_exists("externalJudgement", $context) ? $context["externalJudgement"] : (function () { throw new RuntimeError('Variable "externalJudgement" does not exist.', 335, $this->source); })()), "starttime", [], "any", false, false, false, 335), twig_get_attribute($this->env, $this->source, (isset($context["externalJudgement"]) || array_key_exists("externalJudgement", $context) ? $context["externalJudgement"] : (function () { throw new RuntimeError('Variable "externalJudgement" does not exist.', 335, $this->source); })()), "endtime", [], "any", false, false, false, 335)), "html", null, true);
                    echo "s";
                } else {
                    // line 337
                    echo "&nbsp;[still judging - busy ";
                    echo twig_escape_filter($this->env, $this->extensions['App\Twig\TwigExtension']->printtimediff(twig_get_attribute($this->env, $this->source, (isset($context["externalJudgement"]) || array_key_exists("externalJudgement", $context) ? $context["externalJudgement"] : (function () { throw new RuntimeError('Variable "externalJudgement" does not exist.', 337, $this->source); })()), "starttime", [], "any", false, false, false, 337)), "html", null, true);
                    echo "]";
                }
                // line 339
                echo ")</span>";
            }
            // line 341
            if (( !(null === (isset($context["selectedJudging"]) || array_key_exists("selectedJudging", $context) ? $context["selectedJudging"] : (function () { throw new RuntimeError('Variable "selectedJudging" does not exist.', 341, $this->source); })())) && (twig_get_attribute($this->env, $this->source, (isset($context["selectedJudging"]) || array_key_exists("selectedJudging", $context) ? $context["selectedJudging"] : (function () { throw new RuntimeError('Variable "selectedJudging" does not exist.', 341, $this->source); })()), "result", [], "any", false, false, false, 341) != "compiler-error"))) {
                // line 342
                echo ", max/sum runtime:
                    ";
                // line 343
                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["selectedJudging"]) || array_key_exists("selectedJudging", $context) ? $context["selectedJudging"] : (function () { throw new RuntimeError('Variable "selectedJudging" does not exist.', 343, $this->source); })()), "maxRuntime", [], "any", false, false, false, 343), 2, ".", ""), "html", null, true);
                echo "/";
                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["selectedJudging"]) || array_key_exists("selectedJudging", $context) ? $context["selectedJudging"] : (function () { throw new RuntimeError('Variable "selectedJudging" does not exist.', 343, $this->source); })()), "sumRuntime", [], "any", false, false, false, 343), 2, ".", ""), "html", null, true);
                echo "s";
                // line 344
                if ( !(null === (isset($context["lastJudging"]) || array_key_exists("lastJudging", $context) ? $context["lastJudging"] : (function () { throw new RuntimeError('Variable "lastJudging" does not exist.', 344, $this->source); })()))) {
                    // line 345
                    echo "<span class=\"lastruntime\">
                        (<a href=\"";
                    // line 346
                    echo twig_escape_filter($this->env, (isset($context["lastSubmissionLink"]) || array_key_exists("lastSubmissionLink", $context) ? $context["lastSubmissionLink"] : (function () { throw new RuntimeError('Variable "lastSubmissionLink" does not exist.', 346, $this->source); })()), "html", null, true);
                    echo "\">s";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["lastSubmission"]) || array_key_exists("lastSubmission", $context) ? $context["lastSubmission"] : (function () { throw new RuntimeError('Variable "lastSubmission" does not exist.', 346, $this->source); })()), "submitid", [], "any", false, false, false, 346), "html", null, true);
                    echo "</a>:
                            ";
                    // line 347
                    echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["lastJudging"]) || array_key_exists("lastJudging", $context) ? $context["lastJudging"] : (function () { throw new RuntimeError('Variable "lastJudging" does not exist.', 347, $this->source); })()), "maxRuntime", [], "any", false, false, false, 347), 2, ".", ""), "html", null, true);
                    // line 348
                    echo "/";
                    echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["lastJudging"]) || array_key_exists("lastJudging", $context) ? $context["lastJudging"] : (function () { throw new RuntimeError('Variable "lastJudging" does not exist.', 348, $this->source); })()), "sumRuntime", [], "any", false, false, false, 348), 2, ".", ""), "html", null, true);
                    echo "s)
                    </span>";
                }
            }
            // line 352
            if ((( !(null === (isset($context["externalJudgement"]) || array_key_exists("externalJudgement", $context) ? $context["externalJudgement"] : (function () { throw new RuntimeError('Variable "externalJudgement" does not exist.', 352, $this->source); })())) && (twig_get_attribute($this->env, $this->source, (isset($context["externalJudgement"]) || array_key_exists("externalJudgement", $context) ? $context["externalJudgement"] : (function () { throw new RuntimeError('Variable "externalJudgement" does not exist.', 352, $this->source); })()), "result", [], "any", false, false, false, 352) != "compiler-error")) && (twig_get_attribute($this->env, $this->source, (isset($context["externalJudgement"]) || array_key_exists("externalJudgement", $context) ? $context["externalJudgement"] : (function () { throw new RuntimeError('Variable "externalJudgement" does not exist.', 352, $this->source); })()), "result", [], "any", false, false, false, 352) != null))) {
                // line 353
                echo ", external max/sum runtime:
                    ";
                // line 354
                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["externalJudgement"]) || array_key_exists("externalJudgement", $context) ? $context["externalJudgement"] : (function () { throw new RuntimeError('Variable "externalJudgement" does not exist.', 354, $this->source); })()), "maxRuntime", [], "any", false, false, false, 354), 2, ".", ""), "html", null, true);
                echo "/";
                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["externalJudgement"]) || array_key_exists("externalJudgement", $context) ? $context["externalJudgement"] : (function () { throw new RuntimeError('Variable "externalJudgement" does not exist.', 354, $this->source); })()), "sumRuntime", [], "any", false, false, false, 354), 2, ".", ""), "html", null, true);
                echo "s
                ";
            }
            // line 356
            echo "            </div>

            ";
            // line 359
            echo "            ";
            if (( !(null === (isset($context["externalJudgement"]) || array_key_exists("externalJudgement", $context) ? $context["externalJudgement"] : (function () { throw new RuntimeError('Variable "externalJudgement" does not exist.', 359, $this->source); })())) || ( !(null === (isset($context["selectedJudging"]) || array_key_exists("selectedJudging", $context) ? $context["selectedJudging"] : (function () { throw new RuntimeError('Variable "selectedJudging" does not exist.', 359, $this->source); })())) && (twig_get_attribute($this->env, $this->source, (isset($context["selectedJudging"]) || array_key_exists("selectedJudging", $context) ? $context["selectedJudging"] : (function () { throw new RuntimeError('Variable "selectedJudging" does not exist.', 359, $this->source); })()), "result", [], "any", false, false, false, 359) != "compiler-error")))) {
                // line 360
                echo "                <table>
                    <tr>
                        <td>testcase runs:</td>
                        <td>
                            ";
                // line 364
                if ((null === (isset($context["selectedJudging"]) || array_key_exists("selectedJudging", $context) ? $context["selectedJudging"] : (function () { throw new RuntimeError('Variable "selectedJudging" does not exist.', 364, $this->source); })()))) {
                    // line 365
                    echo "                                ";
                    $context["judgingDone"] = false;
                    // line 366
                    echo "                            ";
                } else {
                    // line 367
                    echo "                                ";
                    $context["judgingDone"] =  !twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["selectedJudging"]) || array_key_exists("selectedJudging", $context) ? $context["selectedJudging"] : (function () { throw new RuntimeError('Variable "selectedJudging" does not exist.', 367, $this->source); })()), "endtime", [], "any", false, false, false, 367));
                    // line 368
                    echo "                            ";
                }
                // line 369
                echo "                            ";
                echo $this->extensions['App\Twig\TwigExtension']->displayTestcaseResults((isset($context["runs"]) || array_key_exists("runs", $context) ? $context["runs"] : (function () { throw new RuntimeError('Variable "runs" does not exist.', 369, $this->source); })()), (isset($context["judgingDone"]) || array_key_exists("judgingDone", $context) ? $context["judgingDone"] : (function () { throw new RuntimeError('Variable "judgingDone" does not exist.', 369, $this->source); })()));
                echo "
                        </td>
                    </tr>
                    ";
                // line 372
                if ( !(null === (isset($context["lastJudging"]) || array_key_exists("lastJudging", $context) ? $context["lastJudging"] : (function () { throw new RuntimeError('Variable "lastJudging" does not exist.', 372, $this->source); })()))) {
                    // line 373
                    echo "                        <tr class=\"lasttcruns\">
                            <td>
                                <a href=\"";
                    // line 375
                    echo twig_escape_filter($this->env, (isset($context["lastSubmissionLink"]) || array_key_exists("lastSubmissionLink", $context) ? $context["lastSubmissionLink"] : (function () { throw new RuntimeError('Variable "lastSubmissionLink" does not exist.', 375, $this->source); })()), "html", null, true);
                    echo "\">s";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["lastSubmission"]) || array_key_exists("lastSubmission", $context) ? $context["lastSubmission"] : (function () { throw new RuntimeError('Variable "lastSubmission" does not exist.', 375, $this->source); })()), "submitid", [], "any", false, false, false, 375), "html", null, true);
                    echo "</a> runs:
                            </td>
                            <td>
                                ";
                    // line 378
                    echo $this->extensions['App\Twig\TwigExtension']->displayTestcaseResults((isset($context["lastRuns"]) || array_key_exists("lastRuns", $context) ? $context["lastRuns"] : (function () { throw new RuntimeError('Variable "lastRuns" does not exist.', 378, $this->source); })()),  !twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["lastJudging"]) || array_key_exists("lastJudging", $context) ? $context["lastJudging"] : (function () { throw new RuntimeError('Variable "lastJudging" does not exist.', 378, $this->source); })()), "endtime", [], "any", false, false, false, 378)));
                    echo "
                            </td>
                        </tr>
                    ";
                }
                // line 382
                echo "                    ";
                if ( !(null === (isset($context["externalJudgement"]) || array_key_exists("externalJudgement", $context) ? $context["externalJudgement"] : (function () { throw new RuntimeError('Variable "externalJudgement" does not exist.', 382, $this->source); })()))) {
                    // line 383
                    echo "                        <tr>
                            <td>external runs:</td>
                            <td>
                                ";
                    // line 386
                    echo $this->extensions['App\Twig\TwigExtension']->displayTestcaseResults((isset($context["externalRuns"]) || array_key_exists("externalRuns", $context) ? $context["externalRuns"] : (function () { throw new RuntimeError('Variable "externalRuns" does not exist.', 386, $this->source); })()),  !twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["externalJudgement"]) || array_key_exists("externalJudgement", $context) ? $context["externalJudgement"] : (function () { throw new RuntimeError('Variable "externalJudgement" does not exist.', 386, $this->source); })()), "endtime", [], "any", false, false, false, 386)), true);
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
                if ( !(null === (isset($context["lastJudging"]) || array_key_exists("lastJudging", $context) ? $context["lastJudging"] : (function () { throw new RuntimeError('Variable "lastJudging" does not exist.', 393, $this->source); })()))) {
                    // line 394
                    echo "                    <span class=\"testcases_prev\">
                    <a href=\"javascript:togglelastruns();\">show/hide</a>
                    results of previous <a href=\"";
                    // line 396
                    echo twig_escape_filter($this->env, (isset($context["lastSubmissionLink"]) || array_key_exists("lastSubmissionLink", $context) ? $context["lastSubmissionLink"] : (function () { throw new RuntimeError('Variable "lastSubmissionLink" does not exist.', 396, $this->source); })()), "html", null, true);
                    echo "\">submission s";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["lastSubmission"]) || array_key_exists("lastSubmission", $context) ? $context["lastSubmission"] : (function () { throw new RuntimeError('Variable "lastSubmission" does not exist.', 396, $this->source); })()), "submitid", [], "any", false, false, false, 396), "html", null, true);
                    echo "</a>
                        ";
                    // line 397
                    if (twig_get_attribute($this->env, $this->source, (isset($context["lastJudging"]) || array_key_exists("lastJudging", $context) ? $context["lastJudging"] : (function () { throw new RuntimeError('Variable "lastJudging" does not exist.', 397, $this->source); })()), "verifyComment", [], "any", false, false, false, 397)) {
                        // line 398
                        echo "                            <span class=\"prevsubmit\">(verify comment: '";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["lastJudging"]) || array_key_exists("lastJudging", $context) ? $context["lastJudging"] : (function () { throw new RuntimeError('Variable "lastJudging" does not exist.', 398, $this->source); })()), "verifyComment", [], "any", false, false, false, 398), "html", null, true);
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
            if (( !(null === (isset($context["selectedJudging"]) || array_key_exists("selectedJudging", $context) ? $context["selectedJudging"] : (function () { throw new RuntimeError('Variable "selectedJudging" does not exist.', 412, $this->source); })())) &&  !twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["selectedJudging"]) || array_key_exists("selectedJudging", $context) ? $context["selectedJudging"] : (function () { throw new RuntimeError('Variable "selectedJudging" does not exist.', 412, $this->source); })()), "result", [], "any", false, false, false, 412)))) {
                // line 413
                echo "            <form action=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_judging_verify", ["judgingId" => twig_get_attribute($this->env, $this->source, (isset($context["selectedJudging"]) || array_key_exists("selectedJudging", $context) ? $context["selectedJudging"] : (function () { throw new RuntimeError('Variable "selectedJudging" does not exist.', 413, $this->source); })()), "judgingid", [], "any", false, false, false, 413)]), "html", null, true);
                echo "\" method=\"post\">
                <input type=\"hidden\" name=\"verified\" value=\"";
                // line 414
                if (twig_get_attribute($this->env, $this->source, (isset($context["selectedJudging"]) || array_key_exists("selectedJudging", $context) ? $context["selectedJudging"] : (function () { throw new RuntimeError('Variable "selectedJudging" does not exist.', 414, $this->source); })()), "verified", [], "any", false, false, false, 414)) {
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
                if (twig_get_attribute($this->env, $this->source, (isset($context["selectedJudging"]) || array_key_exists("selectedJudging", $context) ? $context["selectedJudging"] : (function () { throw new RuntimeError('Variable "selectedJudging" does not exist.', 418, $this->source); })()), "verified", [], "any", false, false, false, 418)) {
                    echo "yes";
                } else {
                    echo "no";
                }
                echo "</strong>";
                // line 419
                if ((twig_get_attribute($this->env, $this->source, (isset($context["selectedJudging"]) || array_key_exists("selectedJudging", $context) ? $context["selectedJudging"] : (function () { throw new RuntimeError('Variable "selectedJudging" does not exist.', 419, $this->source); })()), "verified", [], "any", false, false, false, 419) &&  !twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["selectedJudging"]) || array_key_exists("selectedJudging", $context) ? $context["selectedJudging"] : (function () { throw new RuntimeError('Variable "selectedJudging" does not exist.', 419, $this->source); })()), "juryMember", [], "any", false, false, false, 419)))) {
                    // line 420
                    echo ", by ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["selectedJudging"]) || array_key_exists("selectedJudging", $context) ? $context["selectedJudging"] : (function () { throw new RuntimeError('Variable "selectedJudging" does not exist.', 420, $this->source); })()), "juryMember", [], "any", false, false, false, 420), "html", null, true);
                    // line 421
                    if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["selectedJudging"]) || array_key_exists("selectedJudging", $context) ? $context["selectedJudging"] : (function () { throw new RuntimeError('Variable "selectedJudging" does not exist.', 421, $this->source); })()), "verifyComment", [], "any", false, false, false, 421))) {
                        // line 422
                        echo "                            with comment \"";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["selectedJudging"]) || array_key_exists("selectedJudging", $context) ? $context["selectedJudging"] : (function () { throw new RuntimeError('Variable "selectedJudging" does not exist.', 422, $this->source); })()), "verifyComment", [], "any", false, false, false, 422), "html", null, true);
                        echo "\"";
                    }
                }
                // line 425
                if ( !(((isset($context["verificationRequired"]) || array_key_exists("verificationRequired", $context) ? $context["verificationRequired"] : (function () { throw new RuntimeError('Variable "verificationRequired" does not exist.', 425, $this->source); })()) && twig_get_attribute($this->env, $this->source, (isset($context["selectedJudging"]) || array_key_exists("selectedJudging", $context) ? $context["selectedJudging"] : (function () { throw new RuntimeError('Variable "selectedJudging" does not exist.', 425, $this->source); })()), "verified", [], "any", false, false, false, 425)) && twig_get_attribute($this->env, $this->source, (isset($context["selectedJudging"]) || array_key_exists("selectedJudging", $context) ? $context["selectedJudging"] : (function () { throw new RuntimeError('Variable "selectedJudging" does not exist.', 425, $this->source); })()), "valid", [], "any", false, false, false, 425))) {
                    // line 426
                    echo "                        <input type=\"submit\" value=\"";
                    if (twig_get_attribute($this->env, $this->source, (isset($context["selectedJudging"]) || array_key_exists("selectedJudging", $context) ? $context["selectedJudging"] : (function () { throw new RuntimeError('Variable "selectedJudging" does not exist.', 426, $this->source); })()), "verified", [], "any", false, false, false, 426)) {
                        echo "un";
                    }
                    echo "mark verified\"
                               class=\"btn btn-outline-secondary btn-sm\"/>

                        ";
                    // line 429
                    if ( !twig_get_attribute($this->env, $this->source, (isset($context["selectedJudging"]) || array_key_exists("selectedJudging", $context) ? $context["selectedJudging"] : (function () { throw new RuntimeError('Variable "selectedJudging" does not exist.', 429, $this->source); })()), "verified", [], "any", false, false, false, 429)) {
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
                    if (( !(null === (isset($context["icat_url"]) || array_key_exists("icat_url", $context) ? $context["icat_url"] : (function () { throw new RuntimeError('Variable "icat_url" does not exist.', 435, $this->source); })())) && twig_get_attribute($this->env, $this->source, (isset($context["submission"]) || array_key_exists("submission", $context) ? $context["submission"] : (function () { throw new RuntimeError('Variable "submission" does not exist.', 435, $this->source); })()), "contestProblem", [], "any", false, false, false, 435))) {
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
                if (twig_get_attribute($this->env, $this->source, (isset($context["submission"]) || array_key_exists("submission", $context) ? $context["submission"] : (function () { throw new RuntimeError('Variable "submission" does not exist.', 443, $this->source); })()), "contestProblem", [], "any", false, false, false, 443)) {
                    // line 444
                    echo "                <script>
                    \$(function () {
                        \$('#post-to-icat').on('click', function () {
                            postVerifyCommentToICAT(
                                '";
                    // line 448
                    echo twig_escape_filter($this->env, (isset($context["icat_url"]) || array_key_exists("icat_url", $context) ? $context["icat_url"] : (function () { throw new RuntimeError('Variable "icat_url" does not exist.', 448, $this->source); })()), "html", null, true);
                    echo "/insert_entry.php',
                                '";
                    // line 449
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 449, $this->source); })()), "user", [], "any", false, false, false, 449), "username", [], "any", false, false, false, 449), "html", null, true);
                    echo "',
                                '";
                    // line 450
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["submission"]) || array_key_exists("submission", $context) ? $context["submission"] : (function () { throw new RuntimeError('Variable "submission" does not exist.', 450, $this->source); })()), "teamid", [], "any", false, false, false, 450), "html", null, true);
                    echo "',
                                '";
                    // line 451
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["submission"]) || array_key_exists("submission", $context) ? $context["submission"] : (function () { throw new RuntimeError('Variable "submission" does not exist.', 451, $this->source); })()), "contestProblem", [], "any", false, false, false, 451), "shortname", [], "any", false, false, false, 451), "html", null, true);
                    echo "',
                                '";
                    // line 452
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["submission"]) || array_key_exists("submission", $context) ? $context["submission"] : (function () { throw new RuntimeError('Variable "submission" does not exist.', 452, $this->source); })()), "externalid", [], "any", false, false, false, 452), "html", null, true);
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
            } elseif ( !(null === (isset($context["selectedJudging"]) || array_key_exists("selectedJudging", $context) ? $context["selectedJudging"] : (function () { throw new RuntimeError('Variable "selectedJudging" does not exist.', 460, $this->source); })()))) {
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
            if ( !(null === (isset($context["selectedJudging"]) || array_key_exists("selectedJudging", $context) ? $context["selectedJudging"] : (function () { throw new RuntimeError('Variable "selectedJudging" does not exist.', 468, $this->source); })()))) {
                // line 469
                echo "            ";
                $context["output"] = twig_get_attribute($this->env, $this->source, (isset($context["selectedJudging"]) || array_key_exists("selectedJudging", $context) ? $context["selectedJudging"] : (function () { throw new RuntimeError('Variable "selectedJudging" does not exist.', 469, $this->source); })()), "outputCompile", [0 => true], "method", false, false, false, 469);
                // line 470
                echo "        ";
            }
            // line 471
            echo "        ";
            if ( !(null === (isset($context["output"]) || array_key_exists("output", $context) ? $context["output"] : (function () { throw new RuntimeError('Variable "output" does not exist.', 471, $this->source); })()))) {
                // line 472
                echo "            ";
                if ((twig_get_attribute($this->env, $this->source, (isset($context["selectedJudging"]) || array_key_exists("selectedJudging", $context) ? $context["selectedJudging"] : (function () { throw new RuntimeError('Variable "selectedJudging" does not exist.', 472, $this->source); })()), "result", [], "any", false, false, false, 472) == "compiler-error")) {
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
                    if ( !twig_test_empty((isset($context["output"]) || array_key_exists("output", $context) ? $context["output"] : (function () { throw new RuntimeError('Variable "output" does not exist.', 478, $this->source); })()))) {
                        // line 479
                        echo "                    ";
                        $context["message"] = ((((isset($context["message"]) || array_key_exists("message", $context) ? $context["message"] : (function () { throw new RuntimeError('Variable "message" does not exist.', 479, $this->source); })()) . " (with ") . $this->extensions['App\Twig\TwigExtension']->lineCount((isset($context["output"]) || array_key_exists("output", $context) ? $context["output"] : (function () { throw new RuntimeError('Variable "output" does not exist.', 479, $this->source); })()))) . " line(s) of output)");
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
            $context["header"] = (((("Compilation <span style=\"color: " . (isset($context["color"]) || array_key_exists("color", $context) ? $context["color"] : (function () { throw new RuntimeError('Variable "color" does not exist.', 483, $this->source); })())) . ";\">") . (isset($context["message"]) || array_key_exists("message", $context) ? $context["message"] : (function () { throw new RuntimeError('Variable "message" does not exist.', 483, $this->source); })())) . "</span>");
            // line 484
            echo "        <h3>
            ";
            // line 485
            if ( !twig_test_empty((isset($context["output"]) || array_key_exists("output", $context) ? $context["output"] : (function () { throw new RuntimeError('Variable "output" does not exist.', 485, $this->source); })()))) {
                // line 486
                echo "                <a class=\"collapse-link\" href=\"javascript:collapse('#detailcompile')\">
                    ";
                // line 487
                echo (isset($context["header"]) || array_key_exists("header", $context) ? $context["header"] : (function () { throw new RuntimeError('Variable "header" does not exist.', 487, $this->source); })());
                echo "
                </a>
            ";
            } else {
                // line 490
                echo "                ";
                echo (isset($context["header"]) || array_key_exists("header", $context) ? $context["header"] : (function () { throw new RuntimeError('Variable "header" does not exist.', 490, $this->source); })());
                echo "
            ";
            }
            // line 492
            echo "        </h3>
        ";
            // line 493
            if (twig_test_empty((isset($context["output"]) || array_key_exists("output", $context) ? $context["output"] : (function () { throw new RuntimeError('Variable "output" does not exist.', 493, $this->source); })()))) {
                // line 494
                echo "            <p class=\"nodata";
                if (((null === (isset($context["selectedJudging"]) || array_key_exists("selectedJudging", $context) ? $context["selectedJudging"] : (function () { throw new RuntimeError('Variable "selectedJudging" does not exist.', 494, $this->source); })())) || (twig_get_attribute($this->env, $this->source, (isset($context["selectedJudging"]) || array_key_exists("selectedJudging", $context) ? $context["selectedJudging"] : (function () { throw new RuntimeError('Variable "selectedJudging" does not exist.', 494, $this->source); })()), "result", [], "any", false, false, false, 494) != "compiler-error"))) {
                    echo " d-none";
                }
                echo "\"
                id=\"detailcompile\">There were no compiler errors or warnings.</p>
        ";
            } else {
                // line 497
                echo "            <pre class=\"output_text ";
                if (((null === (isset($context["selectedJudging"]) || array_key_exists("selectedJudging", $context) ? $context["selectedJudging"] : (function () { throw new RuntimeError('Variable "selectedJudging" does not exist.', 497, $this->source); })())) || (twig_get_attribute($this->env, $this->source, (isset($context["selectedJudging"]) || array_key_exists("selectedJudging", $context) ? $context["selectedJudging"] : (function () { throw new RuntimeError('Variable "selectedJudging" does not exist.', 497, $this->source); })()), "result", [], "any", false, false, false, 497) != "compiler-error"))) {
                    echo " d-none";
                }
                echo "\"
                id=\"detailcompile\">";
                // line 498
                echo twig_escape_filter($this->env, (isset($context["output"]) || array_key_exists("output", $context) ? $context["output"] : (function () { throw new RuntimeError('Variable "output" does not exist.', 498, $this->source); })()), "html", null, true);
                echo "</pre>
        ";
            }
            // line 500
            echo "
        ";
            // line 501
            if (( !(null === (isset($context["externalJudgement"]) || array_key_exists("externalJudgement", $context) ? $context["externalJudgement"] : (function () { throw new RuntimeError('Variable "externalJudgement" does not exist.', 501, $this->source); })())) || ( !(null === (isset($context["selectedJudging"]) || array_key_exists("selectedJudging", $context) ? $context["selectedJudging"] : (function () { throw new RuntimeError('Variable "selectedJudging" does not exist.', 501, $this->source); })())) && (twig_get_attribute($this->env, $this->source, (isset($context["selectedJudging"]) || array_key_exists("selectedJudging", $context) ? $context["selectedJudging"] : (function () { throw new RuntimeError('Variable "selectedJudging" does not exist.', 501, $this->source); })()), "result", [], "any", false, false, false, 501) != "compiler-error")))) {
                // line 502
                echo "            ";
                // line 503
                echo "            ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["runs"]) || array_key_exists("runs", $context) ? $context["runs"] : (function () { throw new RuntimeError('Variable "runs" does not exist.', 503, $this->source); })()));
                foreach ($context['_seq'] as $context["runIdx"] => $context["run"]) {
                    // line 504
                    echo "                ";
                    $context["externalRun"] = null;
                    // line 505
                    echo "                ";
                    if (twig_get_attribute($this->env, $this->source, ($context["externalRuns"] ?? null), $context["runIdx"], [], "array", true, true, false, 505)) {
                        // line 506
                        echo "                    ";
                        $context["externalRun"] = twig_get_attribute($this->env, $this->source, (isset($context["externalRuns"]) || array_key_exists("externalRuns", $context) ? $context["externalRuns"] : (function () { throw new RuntimeError('Variable "externalRuns" does not exist.', 506, $this->source); })()), $context["runIdx"], [], "array", false, false, false, 506);
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
                            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["runsOutput"]) || array_key_exists("runsOutput", $context) ? $context["runsOutput"] : (function () { throw new RuntimeError('Variable "runsOutput" does not exist.', 526, $this->source); })()), $context["runIdx"], [], "array", false, false, false, 526), "terminated", [], "any", false, false, false, 526)) {
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
                    if (( !(null === (isset($context["externalRun"]) || array_key_exists("externalRun", $context) ? $context["externalRun"] : (function () { throw new RuntimeError('Variable "externalRun" does not exist.', 533, $this->source); })())) &&  !(null === twig_get_attribute($this->env, $this->source, (isset($context["externalRun"]) || array_key_exists("externalRun", $context) ? $context["externalRun"] : (function () { throw new RuntimeError('Variable "externalRun" does not exist.', 533, $this->source); })()), "firstExternalRun", [], "any", false, false, false, 533)))) {
                        // line 534
                        echo "                            ";
                        if ( !(null === twig_get_attribute($this->env, $this->source, (isset($context["externalRun"]) || array_key_exists("externalRun", $context) ? $context["externalRun"] : (function () { throw new RuntimeError('Variable "externalRun" does not exist.', 534, $this->source); })()), "firstExternalRun", [], "any", false, false, false, 534))) {
                            // line 535
                            echo "                                (external:
                                <span class=\"sol ";
                            // line 536
                            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["externalRun"]) || array_key_exists("externalRun", $context) ? $context["externalRun"] : (function () { throw new RuntimeError('Variable "externalRun" does not exist.', 536, $this->source); })()), "firstExternalRun", [], "any", false, false, false, 536), "result", [], "any", false, false, false, 536) == "correct")) {
                                echo "sol_correct";
                            } else {
                                echo "sol_incorrect";
                            }
                            echo "\">
                                    ";
                            // line 537
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["externalRun"]) || array_key_exists("externalRun", $context) ? $context["externalRun"] : (function () { throw new RuntimeError('Variable "externalRun" does not exist.', 537, $this->source); })()), "firstExternalRun", [], "any", false, false, false, 537), "result", [], "any", false, false, false, 537), "html", null, true);
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
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_problem_testcase_fetch", ["probId" => twig_get_attribute($this->env, $this->source, (isset($context["submission"]) || array_key_exists("submission", $context) ? $context["submission"] : (function () { throw new RuntimeError('Variable "submission" does not exist.', 543, $this->source); })()), "probid", [], "any", false, false, false, 543), "rank" => twig_get_attribute($this->env, $this->source, $context["run"], "rank", [], "any", false, false, false, 543), "type" => "input"]), "html", null, true);
                    echo "\">
                                <button class=\"btn btn-sm btn-outline-secondary\" >
                                    <i class=\"fas fa-download\"></i>
                                    Input
                                </button>
                            </a>
                            <a href=\"";
                    // line 549
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_problem_testcase_fetch", ["probId" => twig_get_attribute($this->env, $this->source, (isset($context["submission"]) || array_key_exists("submission", $context) ? $context["submission"] : (function () { throw new RuntimeError('Variable "submission" does not exist.', 549, $this->source); })()), "probid", [], "any", false, false, false, 549), "rank" => twig_get_attribute($this->env, $this->source, $context["run"], "rank", [], "any", false, false, false, 549), "type" => "output"]), "html", null, true);
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
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_submission_team_output", ["submission" => twig_get_attribute($this->env, $this->source, (isset($context["submission"]) || array_key_exists("submission", $context) ? $context["submission"] : (function () { throw new RuntimeError('Variable "submission" does not exist.', 556, $this->source); })()), "submitid", [], "any", false, false, false, 556), "run" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["run"], "firstJudgingRun", [], "any", false, false, false, 556), "runid", [], "any", false, false, false, 556), "contest" => twig_get_attribute($this->env, $this->source, (isset($context["submission"]) || array_key_exists("submission", $context) ? $context["submission"] : (function () { throw new RuntimeError('Variable "submission" does not exist.', 556, $this->source); })()), "cid", [], "any", false, false, false, 556)]), "html", null, true);
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
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["runsOutput"]) || array_key_exists("runsOutput", $context) ? $context["runsOutput"] : (function () { throw new RuntimeError('Variable "runsOutput" does not exist.', 569, $this->source); })()), $context["runIdx"], [], "array", false, false, false, 569), "cpu_time", [], "any", false, false, false, 569), "html", null, true);
                        echo "s CPU
                        ";
                        // line 570
                        if ( !(null === twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["runsOutput"]) || array_key_exists("runsOutput", $context) ? $context["runsOutput"] : (function () { throw new RuntimeError('Variable "runsOutput" does not exist.', 570, $this->source); })()), $context["runIdx"], [], "array", false, false, false, 570), "metadata", [], "any", false, false, false, 570))) {
                            // line 571
                            echo "                            , ";
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["runsOutput"]) || array_key_exists("runsOutput", $context) ? $context["runsOutput"] : (function () { throw new RuntimeError('Variable "runsOutput" does not exist.', 571, $this->source); })()), $context["runIdx"], [], "array", false, false, false, 571), "wall_time", [], "any", false, false, false, 571), "html", null, true);
                            echo "s wall,
\t\t            <i class=\"fas fa-memory\" title=\"RAM\"></i>
                            ";
                            // line 573
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["runsOutput"]) || array_key_exists("runsOutput", $context) ? $context["runsOutput"] : (function () { throw new RuntimeError('Variable "runsOutput" does not exist.', 573, $this->source); })()), $context["runIdx"], [], "array", false, false, false, 573), "memory", [], "any", false, false, false, 573), "html", null, true);
                            echo "
\t\t            <i class=\"far fa-question-circle\" title=\"exit-code\"></i>
                            exit code:
                            ";
                            // line 576
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["runsOutput"]) || array_key_exists("runsOutput", $context) ? $context["runsOutput"] : (function () { throw new RuntimeError('Variable "runsOutput" does not exist.', 576, $this->source); })()), $context["runIdx"], [], "array", false, false, false, 576), "exitcode", [], "any", false, false, false, 576), "html", null, true);
                            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["runsOutput"]) || array_key_exists("runsOutput", $context) ? $context["runsOutput"] : (function () { throw new RuntimeError('Variable "runsOutput" does not exist.', 576, $this->source); })()), $context["runIdx"], [], "array", false, false, false, 576), "signal", [], "any", false, false, false, 576) > 0)) {
                                echo ",
                                signal: ";
                                // line 577
                                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["runsOutput"]) || array_key_exists("runsOutput", $context) ? $context["runsOutput"] : (function () { throw new RuntimeError('Variable "runsOutput" does not exist.', 577, $this->source); })()), $context["runIdx"], [], "array", false, false, false, 577), "signal", [], "any", false, false, false, 577), "html", null, true);
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
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["runsOutput"]) || array_key_exists("runsOutput", $context) ? $context["runsOutput"] : (function () { throw new RuntimeError('Variable "runsOutput" does not exist.', 585, $this->source); })()), $context["runIdx"], [], "array", false, false, false, 585), "metadata", [], "any", false, false, false, 585), "html", null, true);
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
                    if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["runsOutput"]) || array_key_exists("runsOutput", $context) ? $context["runsOutput"] : (function () { throw new RuntimeError('Variable "runsOutput" does not exist.', 595, $this->source); })()), $context["runIdx"], [], "array", false, false, false, 595), "image_thumb", [], "any", false, false, false, 595)) {
                        // line 596
                        echo "                        <span style=\"float:right; border: 3px solid #438ec3; margin: 5px; padding: 5px;\">
                            ";
                        // line 597
                        $context["imgUrl"] = $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_problem_testcase_fetch", ["probId" => twig_get_attribute($this->env, $this->source, (isset($context["submission"]) || array_key_exists("submission", $context) ? $context["submission"] : (function () { throw new RuntimeError('Variable "submission" does not exist.', 597, $this->source); })()), "probid", [], "any", false, false, false, 597), "rank" => twig_get_attribute($this->env, $this->source, $context["run"], "rank", [], "any", false, false, false, 597), "type" => "image"]);
                        // line 598
                        echo "                            <a href=\"";
                        echo twig_escape_filter($this->env, (isset($context["imgUrl"]) || array_key_exists("imgUrl", $context) ? $context["imgUrl"] : (function () { throw new RuntimeError('Variable "imgUrl" does not exist.', 598, $this->source); })()), "html", null, true);
                        echo "\">
                                <img src=\"data:image/";
                        // line 599
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["run"], "imageType", [], "any", false, false, false, 599), "html", null, true);
                        echo ";base64,";
                        echo twig_escape_filter($this->env, base64_encode(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["runsOutput"]) || array_key_exists("runsOutput", $context) ? $context["runsOutput"] : (function () { throw new RuntimeError('Variable "runsOutput" does not exist.', 599, $this->source); })()), $context["runIdx"], [], "array", false, false, false, 599), "image_thumb", [], "any", false, false, false, 599)), "html", null, true);
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
                    } elseif ((( !(null === (isset($context["externalRun"]) || array_key_exists("externalRun", $context) ? $context["externalRun"] : (function () { throw new RuntimeError('Variable "externalRun" does not exist.', 607, $this->source); })())) &&  !(null === twig_get_attribute($this->env, $this->source, (isset($context["externalRun"]) || array_key_exists("externalRun", $context) ? $context["externalRun"] : (function () { throw new RuntimeError('Variable "externalRun" does not exist.', 607, $this->source); })()), "firstExternalRun", [], "any", false, false, false, 607))) &&  !(null === twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["run"], "firstExternalRun", [], "any", false, false, false, 607), "result", [], "any", false, false, false, 607)))) {
                        // line 608
                        echo "                        ";
                        $context["runDone"] = true;
                        // line 609
                        echo "                    ";
                    }
                    // line 610
                    echo "                    ";
                    if ( !(isset($context["runDone"]) || array_key_exists("runDone", $context) ? $context["runDone"] : (function () { throw new RuntimeError('Variable "runDone" does not exist.', 610, $this->source); })())) {
                        // line 611
                        echo "                        <p class=\"nodata\">
                            ";
                        // line 612
                        if (( !(null === (isset($context["selectedJudging"]) || array_key_exists("selectedJudging", $context) ? $context["selectedJudging"] : (function () { throw new RuntimeError('Variable "selectedJudging" does not exist.', 612, $this->source); })())) && twig_get_attribute($this->env, $this->source, (isset($context["selectedJudging"]) || array_key_exists("selectedJudging", $context) ? $context["selectedJudging"] : (function () { throw new RuntimeError('Variable "selectedJudging" does not exist.', 612, $this->source); })()), "result", [], "any", false, false, false, 612))) {
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
                            if ((isset($context["combinedRunCompare"]) || array_key_exists("combinedRunCompare", $context) ? $context["combinedRunCompare"] : (function () { throw new RuntimeError('Variable "combinedRunCompare" does not exist.', 620, $this->source); })())) {
                                // line 621
                                echo "                                <h5>Validator output</h5>
                                ";
                                // line 622
                                if (twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["runsOutput"]) || array_key_exists("runsOutput", $context) ? $context["runsOutput"] : (function () { throw new RuntimeError('Variable "runsOutput" does not exist.', 622, $this->source); })()), $context["runIdx"], [], "array", false, false, false, 622), "output_diff", [], "any", false, false, false, 622))) {
                                    // line 623
                                    echo "                                    <p class=\"nodata\">There was no validator output.</p>
                                ";
                                } else {
                                    // line 625
                                    echo "                                    <pre class=\"output_text\">";
                                    echo $this->extensions['App\Twig\TwigExtension']->parseRunDiff(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["runsOutput"]) || array_key_exists("runsOutput", $context) ? $context["runsOutput"] : (function () { throw new RuntimeError('Variable "runsOutput" does not exist.', 625, $this->source); })()), $context["runIdx"], [], "array", false, false, false, 625), "output_diff", [], "any", false, false, false, 625));
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
                                if (twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["runsOutput"]) || array_key_exists("runsOutput", $context) ? $context["runsOutput"] : (function () { throw new RuntimeError('Variable "runsOutput" does not exist.', 629, $this->source); })()), $context["runIdx"], [], "array", false, false, false, 629), "output_diff", [], "any", false, false, false, 629))) {
                                    // line 630
                                    echo "                                    <p class=\"nodata\">There was no diff output.</p>
                                ";
                                } else {
                                    // line 632
                                    echo "                                    <pre class=\"output_text\">";
                                    echo $this->extensions['App\Twig\TwigExtension']->parseRunDiff(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["runsOutput"]) || array_key_exists("runsOutput", $context) ? $context["runsOutput"] : (function () { throw new RuntimeError('Variable "runsOutput" does not exist.', 632, $this->source); })()), $context["runIdx"], [], "array", false, false, false, 632), "output_diff", [], "any", false, false, false, 632));
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
                                    echo $this->extensions['App\Twig\TwigExtension']->runDiff(twig_get_attribute($this->env, $this->source, (isset($context["runsOutput"]) || array_key_exists("runsOutput", $context) ? $context["runsOutput"] : (function () { throw new RuntimeError('Variable "runsOutput" does not exist.', 636, $this->source); })()), $context["runIdx"], [], "array", false, false, false, 636));
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
                            if ((isset($context["combinedRunCompare"]) || array_key_exists("combinedRunCompare", $context) ? $context["combinedRunCompare"] : (function () { throw new RuntimeError('Variable "combinedRunCompare" does not exist.', 640, $this->source); })())) {
                                // line 641
                                echo "                                <h5>Validator/Submission interaction</h5>
                                ";
                                // line 642
                                if (twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["runsOutput"]) || array_key_exists("runsOutput", $context) ? $context["runsOutput"] : (function () { throw new RuntimeError('Variable "runsOutput" does not exist.', 642, $this->source); })()), $context["runIdx"], [], "array", false, false, false, 642), "output_run", [], "any", false, false, false, 642))) {
                                    // line 643
                                    echo "                                    <p class=\"nodata\">There was no interaction log.</p>
                                ";
                                } else {
                                    // line 645
                                    echo "                                    ";
                                    echo $this->extensions['App\Twig\TwigExtension']->interactiveLog(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["runsOutput"]) || array_key_exists("runsOutput", $context) ? $context["runsOutput"] : (function () { throw new RuntimeError('Variable "runsOutput" does not exist.', 645, $this->source); })()), $context["runIdx"], [], "array", false, false, false, 645), "output_run", [], "any", false, false, false, 645));
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
                                if (twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["runsOutput"]) || array_key_exists("runsOutput", $context) ? $context["runsOutput"] : (function () { throw new RuntimeError('Variable "runsOutput" does not exist.', 649, $this->source); })()), $context["runIdx"], [], "array", false, false, false, 649), "output_run", [], "any", false, false, false, 649))) {
                                    // line 650
                                    echo "                                    <p class=\"nodata\">There was no program output.</p>
                                ";
                                } else {
                                    // line 652
                                    echo "                                    <pre class=\"output_text\">";
                                    echo $this->extensions['App\Twig\TwigExtension']->parseRunDiff(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["runsOutput"]) || array_key_exists("runsOutput", $context) ? $context["runsOutput"] : (function () { throw new RuntimeError('Variable "runsOutput" does not exist.', 652, $this->source); })()), $context["runIdx"], [], "array", false, false, false, 652), "output_run", [], "any", false, false, false, 652));
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
                            if (twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["runsOutput"]) || array_key_exists("runsOutput", $context) ? $context["runsOutput"] : (function () { throw new RuntimeError('Variable "runsOutput" does not exist.', 657, $this->source); })()), $context["runIdx"], [], "array", false, false, false, 657), "output_error", [], "any", false, false, false, 657))) {
                                // line 658
                                echo "                                <p class=\"nodata\">There was no stderr output.</p>
                            ";
                            } else {
                                // line 660
                                echo "                                <pre class=\"output_text\">";
                                echo $this->extensions['App\Twig\TwigExtension']->parseRunDiff(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["runsOutput"]) || array_key_exists("runsOutput", $context) ? $context["runsOutput"] : (function () { throw new RuntimeError('Variable "runsOutput" does not exist.', 660, $this->source); })()), $context["runIdx"], [], "array", false, false, false, 660), "output_error", [], "any", false, false, false, 660));
                                echo "</pre>
                            ";
                            }
                            // line 662
                            echo "
                            <h5>Judging system output (info/debug/errors)</h5>
                            ";
                            // line 664
                            if (twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["runsOutput"]) || array_key_exists("runsOutput", $context) ? $context["runsOutput"] : (function () { throw new RuntimeError('Variable "runsOutput" does not exist.', 664, $this->source); })()), $context["runIdx"], [], "array", false, false, false, 664), "output_system", [], "any", false, false, false, 664))) {
                                // line 665
                                echo "                                <p class=\"nodata\">There was no judging system output.</p>
                            ";
                            } else {
                                // line 667
                                echo "                                <pre class=\"output_text\">";
                                echo $this->extensions['App\Twig\TwigExtension']->parseRunDiff(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["runsOutput"]) || array_key_exists("runsOutput", $context) ? $context["runsOutput"] : (function () { throw new RuntimeError('Variable "runsOutput" does not exist.', 667, $this->source); })()), $context["runIdx"], [], "array", false, false, false, 667), "output_system", [], "any", false, false, false, 667));
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
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

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
        return array (  1730 => 689,  1728 => 688,  1724 => 687,  1722 => 686,  1708 => 675,  1699 => 671,  1696 => 670,  1693 => 669,  1687 => 667,  1683 => 665,  1681 => 664,  1677 => 662,  1671 => 660,  1667 => 658,  1665 => 657,  1661 => 655,  1658 => 654,  1652 => 652,  1648 => 650,  1646 => 649,  1643 => 648,  1640 => 647,  1634 => 645,  1630 => 643,  1628 => 642,  1625 => 641,  1623 => 640,  1620 => 639,  1617 => 638,  1611 => 636,  1609 => 635,  1606 => 634,  1600 => 632,  1596 => 630,  1594 => 629,  1591 => 628,  1588 => 627,  1582 => 625,  1578 => 623,  1576 => 622,  1573 => 621,  1570 => 620,  1567 => 619,  1563 => 617,  1559 => 615,  1555 => 613,  1553 => 612,  1550 => 611,  1547 => 610,  1544 => 609,  1541 => 608,  1538 => 607,  1535 => 606,  1532 => 605,  1530 => 604,  1527 => 603,  1518 => 599,  1513 => 598,  1511 => 597,  1508 => 596,  1505 => 595,  1499 => 592,  1496 => 591,  1493 => 590,  1489 => 588,  1483 => 585,  1479 => 584,  1472 => 580,  1469 => 579,  1464 => 577,  1459 => 576,  1453 => 573,  1447 => 571,  1445 => 570,  1441 => 569,  1437 => 567,  1435 => 566,  1430 => 563,  1419 => 556,  1417 => 555,  1408 => 549,  1399 => 543,  1396 => 542,  1393 => 541,  1389 => 539,  1387 => 538,  1385 => 537,  1377 => 536,  1374 => 535,  1371 => 534,  1368 => 533,  1365 => 532,  1362 => 531,  1358 => 529,  1354 => 527,  1351 => 526,  1349 => 525,  1344 => 523,  1336 => 522,  1333 => 521,  1330 => 520,  1327 => 519,  1321 => 517,  1318 => 516,  1312 => 514,  1310 => 513,  1306 => 512,  1299 => 510,  1293 => 508,  1290 => 507,  1287 => 506,  1284 => 505,  1281 => 504,  1276 => 503,  1274 => 502,  1272 => 501,  1269 => 500,  1264 => 498,  1257 => 497,  1248 => 494,  1246 => 493,  1243 => 492,  1237 => 490,  1231 => 487,  1228 => 486,  1226 => 485,  1223 => 484,  1220 => 483,  1217 => 482,  1214 => 481,  1211 => 480,  1208 => 479,  1205 => 478,  1202 => 477,  1199 => 476,  1196 => 475,  1193 => 474,  1190 => 473,  1187 => 472,  1184 => 471,  1181 => 470,  1178 => 469,  1175 => 468,  1172 => 467,  1169 => 466,  1166 => 465,  1163 => 463,  1159 => 461,  1156 => 460,  1145 => 452,  1141 => 451,  1137 => 450,  1133 => 449,  1129 => 448,  1123 => 444,  1121 => 443,  1117 => 441,  1114 => 440,  1108 => 436,  1106 => 435,  1103 => 434,  1097 => 430,  1095 => 429,  1086 => 426,  1084 => 425,  1078 => 422,  1076 => 421,  1073 => 420,  1071 => 419,  1064 => 418,  1061 => 417,  1052 => 414,  1047 => 413,  1044 => 412,  1034 => 403,  1031 => 402,  1027 => 400,  1021 => 398,  1019 => 397,  1013 => 396,  1009 => 394,  1006 => 393,  1002 => 390,  995 => 386,  990 => 383,  987 => 382,  980 => 378,  972 => 375,  968 => 373,  966 => 372,  959 => 369,  956 => 368,  953 => 367,  950 => 366,  947 => 365,  945 => 364,  939 => 360,  936 => 359,  932 => 356,  925 => 354,  922 => 353,  920 => 352,  913 => 348,  911 => 347,  905 => 346,  902 => 345,  900 => 344,  895 => 343,  892 => 342,  890 => 341,  887 => 339,  882 => 337,  877 => 335,  875 => 334,  872 => 333,  870 => 332,  866 => 330,  863 => 328,  858 => 326,  856 => 325,  852 => 324,  850 => 323,  848 => 322,  841 => 321,  839 => 320,  836 => 319,  834 => 318,  829 => 316,  827 => 315,  824 => 313,  817 => 312,  814 => 311,  812 => 310,  810 => 309,  807 => 307,  805 => 306,  802 => 304,  798 => 301,  795 => 299,  793 => 298,  791 => 297,  785 => 293,  781 => 291,  777 => 289,  773 => 287,  769 => 285,  766 => 284,  759 => 281,  757 => 280,  751 => 278,  749 => 277,  745 => 275,  741 => 273,  739 => 272,  733 => 271,  729 => 270,  726 => 269,  724 => 268,  720 => 267,  716 => 265,  713 => 263,  711 => 262,  708 => 261,  706 => 260,  703 => 259,  701 => 258,  698 => 257,  695 => 256,  692 => 255,  683 => 253,  678 => 252,  676 => 251,  672 => 249,  670 => 248,  667 => 247,  662 => 244,  653 => 240,  645 => 238,  643 => 237,  639 => 236,  634 => 233,  630 => 231,  628 => 230,  624 => 229,  620 => 228,  615 => 225,  609 => 223,  607 => 222,  603 => 221,  598 => 218,  592 => 216,  590 => 215,  586 => 214,  579 => 212,  573 => 211,  569 => 209,  565 => 207,  561 => 205,  559 => 204,  555 => 203,  547 => 201,  544 => 200,  540 => 199,  524 => 185,  522 => 184,  519 => 183,  510 => 178,  504 => 175,  499 => 174,  493 => 172,  491 => 171,  484 => 166,  482 => 165,  479 => 164,  475 => 162,  469 => 160,  467 => 159,  464 => 157,  462 => 156,  458 => 155,  455 => 153,  453 => 152,  449 => 150,  447 => 149,  443 => 147,  435 => 142,  431 => 140,  429 => 139,  421 => 134,  413 => 129,  404 => 123,  400 => 122,  391 => 116,  387 => 115,  380 => 110,  374 => 108,  366 => 106,  364 => 105,  360 => 104,  351 => 98,  347 => 97,  336 => 91,  332 => 90,  327 => 87,  324 => 85,  318 => 81,  316 => 80,  313 => 79,  309 => 77,  307 => 76,  303 => 74,  301 => 73,  298 => 72,  290 => 69,  286 => 68,  277 => 66,  271 => 64,  268 => 63,  265 => 62,  262 => 61,  259 => 60,  256 => 59,  254 => 58,  251 => 57,  247 => 55,  244 => 54,  240 => 52,  224 => 50,  218 => 49,  216 => 48,  199 => 47,  197 => 46,  194 => 45,  186 => 43,  183 => 42,  181 => 41,  177 => 40,  173 => 38,  167 => 35,  164 => 34,  162 => 33,  159 => 32,  156 => 31,  153 => 30,  150 => 29,  147 => 28,  145 => 27,  142 => 26,  132 => 25,  109 => 11,  105 => 10,  101 => 9,  97 => 8,  92 => 7,  82 => 6,  60 => 4,  37 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("{# @var \\App\\Entity\\ExternalJudgement externalJudgement #}
{% extends \"jury/base.html.twig\" %}

{% block title %}Submission s{{ submission.submitid }} - {{ parent() }}{% endblock %}

{% block extrahead %}
    {{ parent() }}
    <link rel=\"stylesheet\" href=\"{{ asset('css/nv.d3.min.css') }}\">
    <script src=\"{{ asset('js/d3.min.js') }}\"></script>
    <script src=\"{{ asset('js/nv.d3.min.js') }}\"></script>
    <script src=\"{{ asset('js/FileSaver.min.js') }}\"></script>
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
{% endblock %}

{% block content %}

    {% if submission.externalJudgements.empty %}
        {% set externalJudgement = null %}
    {% else %}
        {% set externalJudgement = submission.externalJudgements.first %}
    {% endif %}

    {% if claimWarning %}
        <div class=\"alert alert-warning\">
            {{ claimWarning }}
        </div>
    {% endif %}
    <div class=\"mb-3\">
        <h1 style=\"display: inline;\">
            Submission {{ submission.submitid }}
            {% if submission.originalSubmission %}
                {% set origSubmissionUrl = path('jury_submission', {submitId: submission.originalSubmission.submitid}) %}
                (resubmit of <a href=\"{{ origSubmissionUrl }}\">s{{ submission.originalSubmission.submitid }}</a>)
            {% endif %}
            {% if submission.resubmissions is not empty %}
                (resubmitted as
                {%- for resubmission in submission.resubmissions -%}
                    {% set resubmissionUrl = path('jury_submission', {submitId: resubmission.submitid}) %}
                    <a href=\"{{ resubmissionUrl }}\">s{{ resubmission.submitid }}</a>
                    {%- if not loop.last -%},{%- endif -%}
                {%- endfor -%}
                )
            {% endif %}
            {% if not submission.valid %}
                (ignored)
            {% endif %}
        </h1>
        {% if is_granted('ROLE_ADMIN') %}
            {% if submission.valid %}
                {% set action = 'ignore' %}
            {% else %}
                {% set action = 'unignore' %}
            {% endif %}
            <form action=\"{{ path('jury_submission_update_status', {'submitId': submission.submitid}) }}\" method=\"post\"
                  style=\"display: inline; \">
                <input type=\"hidden\" name=\"valid\" value=\"{% if submission.valid %}0{% else %}1{% endif %}\"/>
                <input type=\"submit\" class=\"btn btn-outline-secondary btn-sm\"
                       value=\"{{ action | upper }} this submission\"
                       onclick=\"return confirm('Really {{ action }} submission s{{ submission.submitid }}?');\"/>
            </form>
        {% endif %}

        {% include 'jury/partials/rejudge_form.html.twig' with {table: 'submission', id: submission.submitid} %}
    </div>

    {% if not submission.valid %}
        <div class=\"alert alert-danger\">This submission is not used during scoreboard calculations.</div>
    {% endif %}

    {% if not submission.contestProblem %}
        <div class=\"alert alert-danger\">
            This submission is for a problem that is not part (anymore) of the contest of the submission.
        </div>
    {% endif %}

    {# Condensed submission info on a single line with icons #}
    <div class=\"submission-summary mb-2\">
        <span>
            <i class=\"fas fa-users\" title=\"Team:\"></i>
            <a href=\"{{ path('jury_team', {teamId: submission.teamid, cid: submission.cid}) }}\">
                {{ submission.team.name }} (t{{ submission.teamid }})
            </a>
        </span>

        <span>
            <i class=\"fas fa-trophy\" title=\"Contest:\"></i>
            <a href=\"{{ path('jury_contest', {'contestId': submission.cid}) }}\">
                {{ submission.contest.shortname }}
            </a>
        </span>

        <span>
            <i class=\"fas fa-book-open\" title=\"Problem:\"></i>
            <a href=\"{{ path('jury_problem', {'probId': submission.probid}) }}\">
                {% if submission.contestProblem %}
                    {{ submission.contestProblem.shortname }}: {{ submission.problem.name }}
                {% else %}
                    {{ submission.problem.name }}
                {% endif %}
            </a>
        </span>

        <span>
            <i class=\"fas fa-comments\" title=\"Language:\"></i>
            <a href=\"{{ path('jury_language', {'langId': submission.langid}) }}\">
                {{ submission.language.name }}
            </a>
        </span>

        <span>
            <i class=\"fas fa-clock\" title=\"Submittime:\"></i>
            <span title=\"{{ submission.submittime | printtime('%Y-%m-%d %H:%M:%S (%Z)') }}\">
                {{ submission.submittime | printtime(null, submission.contest) }}
            </span>
        </span>

        <span>
            <i class=\"fas fa-stopwatch\" title=\"Allowed runtime:\"></i>
            {{ submission.problem.timelimit * submission.language.timeFactor }}s
        </span>

        <span>
            <i class=\"fas fa-code\" title=\"Source code:\"></i>
            <a href=\"{{ path('jury_submission_source', {submission: submission.submitid}) }}\">
                View source code
            </a>
        </span>

        {% if external_ccs_submission_url is not empty %}
            <span>
                <i class=\"fas fa-link\" title=\"External link:\"></i>
                <a href=\"{{ submission | externalCcsUrl }}\" target=\"_blank\">
                    View in external CCS
                </a>
            </span>
        {% endif %}
    </div>

    {% if submission.externalid %}
        <div class=\"mb-2\">
            External ID:
            {% if external_ccs_submission_url is empty %}
                {{- submission.externalid -}}
            {% else %}
                <a href=\"{{ submission | externalCcsUrl }}\" target=\"_blank\">
                    {{- submission.externalid -}}
                </a>
            {%- endif -%}
            {%- if externalJudgement is not null -%}
                , {{ externalJudgement.result | printValidJuryResult }}
            {% endif %}
        </div>
    {% endif %}

    {% if externalJudgement is not null and externalJudgement.result is not empty and selectedJudging is not null and externalJudgement.result != selectedJudging.result %}
        <div class=\"alert alert-danger\">
            <strong>Results differ!</strong>
            <hr>
            <p>
                This submission was judged as
                {% if external_ccs_submission_url is empty %}
                    {{ externalJudgement.result | printValidJuryResult }} by the external CCS
                {% else %}
                    <a href=\"{{ submission | externalCcsUrl }}\" target=\"_blank\">
                        {{ externalJudgement.result | printValidJuryResult }} by the external CCS
                    </a>
                {% endif -%}
                , but as {{ selectedJudging.result | printValidJuryResult }}
                by DOMjudge.
            </p>
        </div>
    {% endif %}

    {% if judgings | length > 1 or (judgings | length == 1 and selectedJudging is null) %}
        <h2>Judgings</h2>
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
            {% for judging in judgings %}
                {% set link = path('jury_submission', {submitId: submission.submitid, jid: judging.judgingid}) %}
                <tr {% if not judging.valid %}class=\"disabled\"{% endif %}>
                    <td>
                        <a href=\"{{ link }}\">
                            {% if selectedJudging is not null and selectedJudging.judgingid == judging.judgingid %}
                                <i class=\"fas fa-long-arrow-alt-right\"></i>
                            {% else %}
                                &nbsp;
                            {% endif %}
                        </a>
                    </td>
                    <td><a href=\"{{ link }}\">j{{ judging.judgingid }}</a></td>
                    <td><a href=\"{{ link }}\">{{ judging.starttime | printtime(null, submission.contest) }}</a></td>
                    <td>
                        <a href=\"{{ link }}\">
                            {% if maxRunTimes[judging.judgingId] is not null %}
                                {{ maxRunTimes[judging.judgingId] }}s
                            {% endif %}
                        </a>
                    </td>
                    <td>
                        <a href=\"{{ link }}\">
                            {% if judging.judgehost is not null %}
                                {{ judging.judgehost.hostname | printHost }}
                            {% endif %}
                        </a>
                    </td>
                    <td>
                        <a href=\"{{ link }}\">
                            {{ judging.result | printResult(judging.valid, true) }}
                            {% if judging.stillBusy %}
                                (&hellip;)
                            {% endif %}
                        </a>
                    </td>
                    <td>
                        <a href=\"{{ link }}\">
                            {% if judging.rejudging is not null %}
                                r{{ judging.rejudgingid }} ({{ judging.rejudging.reason }})
                            {% endif %}
                        </a>
                    </td>
                </tr>
            {% endfor %}
            </tbody>
        </table>
    {% endif %}

    {% if selectedJudging is null %}
        <div class=\"alert alert-warning\">Not (re)judged yet</div>

        {% if unjudgableReasons is not empty %}
            {% for reason in unjudgableReasons %}
                <div class=\"alert alert-danger\">{{ reason }}</div>
            {% endfor %}
        {% endif %}
    {% endif %}

    {% if selectedJudging is not null or externalJudgement is not null %}

        {% include 'jury/partials/submission_graph.html.twig' %}

        {% if selectedJudging is not null %}

            {# Show judging information #}
            <div class=\"mb-2\">
                <h2 style=\"display: inline;\">
                    Judging j{{ selectedJudging.judgingid }}
                    {% if selectedJudging.rejudging %}
                        (rejudging
                        <a href=\"{{ path('jury_rejudging', {rejudgingId: selectedJudging.rejudgingid}) }}\">
                            r{{ selectedJudging.rejudgingid }}</a>, reason: {{ selectedJudging.rejudging.reason }})
                    {% elseif not selectedJudging.valid %}
                        (Invalid)
                    {% endif %}
                </h2>
                &nbsp;
                {% if not selectedJudging.verified %}
                    <form action=\"{{ path('jury_submission', {submitId: submission.submitid, jid: selectedJudging.judgingid}) }}\"
                          method=\"post\" style=\"display: inline;\">
                        {% if selectedJudging.juryMember is not empty %}
                            (claimed by {{ selectedJudging.juryMember }})
                            <input type=\"hidden\" name=\"forceclaim\" value=\"1\"/>
                        {% endif %}
                        {% if app.user.username == selectedJudging.juryMember %}
                            <input type=\"submit\" value=\"unclaim\" name=\"unclaim\" class=\"btn btn-outline-secondary btn-sm\"/>
                        {% else %}
                            <input type=\"submit\" value=\"claim\" name=\"claim\" class=\"btn btn-outline-secondary btn-sm\"/>
                        {% endif %}
                    </form>
                {% endif %}
            </div>
        {% endif %}

        <div class=\"mb-2\">
            <div>
                Result:
                {% if selectedJudging is null or selectedJudging.result is empty %}
                    {%- if submission.judgehost %}
                        {{- '' | printValidJuryResult -}}
                    {%- else %}
                        {{- 'queued' | printValidJuryResult -}}
                    {%- endif %}
                {%- else %}
                    {{- selectedJudging.result | printValidJuryResult -}}
                {%- endif %}
                {%- if submission.stillBusy -%}
                    (&hellip;)
                {%- endif -%}
                {%- if lastJudging is not null -%}
                    {% set lastSubmissionLink = path('jury_submission', {submitId: lastSubmission.submitid}) %}{#-
                -#}<span class=\"lastresult\">
                    (<a href=\"{{ lastSubmissionLink }}\">s{{ lastSubmission.submitid }}</a>: {{ lastJudging.result }}){#-
                -#}</span>
                {%- endif -%}
                {%- if externalJudgement is not null %}
                    (external: {{ externalJudgement.result | printValidJuryResult }})
                {%- endif %}
                {%- if selectedJudging is not null -%}
                    , Judgehost:
                    {% set judgehostLink = path('jury_judgehost', {hostname: selectedJudging.judgehost.hostname}) %}
                    <a href=\"{{ judgehostLink }}\">{{ selectedJudging.judgehost.hostname | printHost }}</a>,
                    <span class=\"judgetime\">Judging started: {{ selectedJudging.starttime | printtime('%H:%M:%S') }}
                        {%- if selectedJudging.endtime -%}
                            , finished in {{ selectedJudging.starttime | printtimediff(selectedJudging.endtime) }}s
                        {%- elseif selectedJudging.valid or selectedJudging.rejudging -%}
                            &nbsp;[still judging - busy {{ selectedJudging.starttime | printtimediff }}]
                        {%- else -%}
                            &nbsp;[aborted]
                        {%- endif -%}
                    </span>
                {% endif -%}
                {%- if externalJudgement is not null %}
                    <span class=\"judgetime\">(external judging started: {{ externalJudgement.starttime | printtime('%H:%M:%S') }}
                        {%- if externalJudgement.endtime -%}
                            , finished in {{ externalJudgement.starttime | printtimediff(externalJudgement.endtime) }}s
                        {%- else -%}
                            &nbsp;[still judging - busy {{ externalJudgement.starttime | printtimediff }}]
                        {%- endif -%}
                    )</span>
                {%- endif -%}
                {%- if selectedJudging is not null and selectedJudging.result != 'compiler-error' -%}
                    , max/sum runtime:
                    {{ selectedJudging.maxRuntime | number_format(2, '.', '') }}/{{ selectedJudging.sumRuntime | number_format(2, '.', '') }}s
                    {%- if lastJudging is not null -%}
                        <span class=\"lastruntime\">
                        (<a href=\"{{ lastSubmissionLink }}\">s{{ lastSubmission.submitid }}</a>:
                            {{ lastJudging.maxRuntime | number_format(2, '.', '') }}{#-
                        -#}/{{ lastJudging.sumRuntime | number_format(2, '.', '') }}s)
                    </span>
                    {%- endif -%}
                {% endif -%}
                {%- if externalJudgement is not null and externalJudgement.result != 'compiler-error' and externalJudgement.result != null -%}
                    , external max/sum runtime:
                    {{ externalJudgement.maxRuntime | number_format(2, '.', '') }}/{{ externalJudgement.sumRuntime | number_format(2, '.', '') }}s
                {% endif %}
            </div>

            {# Display testcase results #}
            {% if externalJudgement is not null or (selectedJudging is not null and selectedJudging.result != 'compiler-error') %}
                <table>
                    <tr>
                        <td>testcase runs:</td>
                        <td>
                            {% if selectedJudging is null %}
                                {% set judgingDone = false %}
                            {% else %}
                                {% set judgingDone = selectedJudging.endtime is not empty %}
                            {% endif %}
                            {{ runs | displayTestcaseResults(judgingDone) }}
                        </td>
                    </tr>
                    {% if lastJudging is not null %}
                        <tr class=\"lasttcruns\">
                            <td>
                                <a href=\"{{ lastSubmissionLink }}\">s{{ lastSubmission.submitid }}</a> runs:
                            </td>
                            <td>
                                {{ lastRuns | displayTestcaseResults(lastJudging.endtime is not empty) }}
                            </td>
                        </tr>
                    {% endif %}
                    {% if externalJudgement is not null %}
                        <tr>
                            <td>external runs:</td>
                            <td>
                                {{ externalRuns | displayTestcaseResults(externalJudgement.endtime is not empty, true) }}
                            </td>
                        </tr>
                    {% endif %}
                </table>

                {# Show JS toggle of previous submission results #}
                {% if lastJudging is not null %}
                    <span class=\"testcases_prev\">
                    <a href=\"javascript:togglelastruns();\">show/hide</a>
                    results of previous <a href=\"{{ lastSubmissionLink }}\">submission s{{ lastSubmission.submitid }}</a>
                        {% if lastJudging.verifyComment %}
                            <span class=\"prevsubmit\">(verify comment: '{{ lastJudging.verifyComment }}')</span>
                        {% endif %}
                </span>
                {% endif %}
            {% endif %}
        </div>

        <script>
            \$(function () {
                togglelastruns();
            });
        </script>

        {# Show verify info, but only when a result is known #}
        {% if selectedJudging is not null and selectedJudging.result is not empty %}
            <form action=\"{{ path('jury_judging_verify', {judgingId: selectedJudging.judgingid}) }}\" method=\"post\">
                <input type=\"hidden\" name=\"verified\" value=\"{% if selectedJudging.verified %}0{% else %}1{% endif %}\"/>

                {# Display verification data: verified, by whom, and comment #}
                <p>
                    Verified: <strong>{% if selectedJudging.verified %}yes{% else %}no{% endif %}</strong>
                    {%- if selectedJudging.verified and selectedJudging.juryMember is not empty -%}
                        , by {{ selectedJudging.juryMember }}
                        {%- if selectedJudging.verifyComment is not empty %}
                            with comment \"{{ selectedJudging.verifyComment }}\"
                        {%- endif -%}
                    {%- endif -%}
                    {% if not (verificationRequired and selectedJudging.verified and selectedJudging.valid) %}
                        <input type=\"submit\" value=\"{% if selectedJudging.verified %}un{% endif %}mark verified\"
                               class=\"btn btn-outline-secondary btn-sm\"/>

                        {% if not selectedJudging.verified %}
                            with comment
                            <input type=\"text\" name=\"comment\" size=\"25\" class=\"form-control\" id=\"comment\"
                                   style=\"display: inline; width: auto;\"/>
                        {% endif %}

                        {% if icat_url is not null and submission.contestProblem %}
                            <button class=\"btn btn-outline-secondary btn-sm\" id=\"post-to-icat\">
                                post to iCAT
                            </button>
                        {% endif %}
                    {% endif %}
                </p>
            </form>
            {% if submission.contestProblem %}
                <script>
                    \$(function () {
                        \$('#post-to-icat').on('click', function () {
                            postVerifyCommentToICAT(
                                '{{ icat_url }}/insert_entry.php',
                                '{{ app.user.username }}',
                                '{{ submission.teamid }}',
                                '{{ submission.contestProblem.shortname }}',
                                '{{ submission.externalid }}'
                            );
                            alert('Comment posted to iCAT.');
                            return false;
                        });
                    });
                </script>
            {% endif %}
        {% elseif selectedJudging is not null %}
            <div class=\"alert alert-warning\">Judging is not ready yet!</div>
        {% endif %}

        {# Display compile output #}
        {% set color = '#6666FF' %}
        {% set message = 'not finished yet' %}
        {% set output = null %}
        {% if selectedJudging is not null %}
            {% set output = selectedJudging.outputCompile(true) %}
        {% endif %}
        {% if output is not null %}
            {% if selectedJudging.result == 'compiler-error' %}
                {% set color = 'red' %}
                {% set message = 'unsuccessful' %}
            {% else %}
                {% set color = '#1daa1d' %}
                {% set message = 'successful' %}
                {% if output is not empty %}
                    {% set message = message ~ ' (with ' ~ (output | lineCount) ~ ' line(s) of output)' %}
                {% endif %}
            {% endif %}
        {% endif %}
        {% set header = 'Compilation <span style=\"color: ' ~ color ~ ';\">' ~ message ~ '</span>' %}
        <h3>
            {% if output is not empty %}
                <a class=\"collapse-link\" href=\"javascript:collapse('#detailcompile')\">
                    {{ header | raw }}
                </a>
            {% else %}
                {{ header | raw }}
            {% endif %}
        </h3>
        {% if output is empty %}
            <p class=\"nodata{% if selectedJudging is null or selectedJudging.result != 'compiler-error' %} d-none{% endif %}\"
                id=\"detailcompile\">There were no compiler errors or warnings.</p>
        {% else %}
            <pre class=\"output_text {% if selectedJudging is null or selectedJudging.result != 'compiler-error' %} d-none{% endif %}\"
                id=\"detailcompile\">{{ output }}</pre>
        {% endif %}

        {% if externalJudgement is not null or (selectedJudging is not null and selectedJudging.result != 'compiler-error') %}
            {# Show run info. Only when compilation was successful or we have an external judgement #}
            {% for runIdx, run in runs %}
                {% set externalRun = null %}
                {% if externalRuns[runIdx] is defined %}
                    {% set externalRun = externalRuns[runIdx] %}
                {% endif %}
                <div id=\"run-{{run.rank}}\"
                     style=\"margin-bottom: 20px;\"
                     class=\"card run {% if run.firstJudgingRun and run.firstJudgingRun.runresult == 'correct' %}run_correct{% endif %}\">
                    <div class=\"card-header\">
                        Run #{{ run.rank }}
                        {% if run.origInputFilename is not null %}
                            | <span style=\"font-family:monospace;\">{{ run.origInputFilename }}.in</span>
                        {% else %}
                            {% if run.description is not null %}
                                | {{ run.description }}
                            {% endif %}
                        {% endif %}
                        {% if run.firstJudgingRun is not null %}
                            | 
                            <span class=\"sol {% if run.firstJudgingRun.runresult == 'correct' %}sol_correct{% else %}sol_incorrect{% endif %}\">
                                {{ run.firstJudgingRun.runresult }}
                            </span>
                            {% if run.firstJudgingRun.runresult == 'timelimit' %}
                                {% if runsOutput[runIdx].terminated %}
                                    <b>(terminated)</b>
                                {% else %}
                                    <b>(finished late)</b>
                                {% endif %}
                            {% endif %}
                        {% endif %}
                        {% if externalRun is not null and externalRun.firstExternalRun is not null %}
                            {% if externalRun.firstExternalRun is not null %}
                                (external:
                                <span class=\"sol {% if externalRun.firstExternalRun.result == 'correct' %}sol_correct{% else %}sol_incorrect{% endif %}\">
                                    {{ externalRun.firstExternalRun.result }}{#-
                                -#}</span>{#-
                                -#})
                            {% endif %}
                        {% endif %}
                        <span style=\"float: right;\">
                            <a href=\"{{ path('jury_problem_testcase_fetch', {'probId': submission.probid, 'rank': run.rank, 'type': 'input'}) }}\">
                                <button class=\"btn btn-sm btn-outline-secondary\" >
                                    <i class=\"fas fa-download\"></i>
                                    Input
                                </button>
                            </a>
                            <a href=\"{{ path('jury_problem_testcase_fetch', {'probId': submission.probid, 'rank': run.rank, 'type': 'output'}) }}\">
                                <button class=\"btn btn-sm btn-outline-secondary\" >
                                    <i class=\"fas fa-download\"></i>
                                    Reference Output
                                </button>
                            </a>
                            {% if run.firstJudgingRun is not null %}
                                <a href=\"{{ path('jury_submission_team_output', {'submission': submission.submitid, 'run': run.firstJudgingRun.runid, 'contest': submission.cid}) }}\">
                                    <button class=\"btn btn-sm btn-outline-secondary\" >
                                        <i class=\"fas fa-download\"></i>
                                        Team Output
                                    </button>
                                </a>
                            {% endif %}
                        </span>
                    </div>
                    <div class=\"card-body\">
                    {% if run.firstJudgingRun is not null %}
                    <span style=\"display:inline; margin-left: 5px;\">
\t\t        <i class=\"fas fa-stopwatch\" title=\"runtime\"></i>
                        {{ runsOutput[runIdx].cpu_time }}s CPU
                        {% if runsOutput[runIdx].metadata is not null %}
                            , {{ runsOutput[runIdx].wall_time }}s wall,
\t\t            <i class=\"fas fa-memory\" title=\"RAM\"></i>
                            {{ runsOutput[runIdx].memory }}
\t\t            <i class=\"far fa-question-circle\" title=\"exit-code\"></i>
                            exit code:
                            {{ runsOutput[runIdx].exitcode }}{% if runsOutput[runIdx].signal > 0 %},
                                signal: {{ runsOutput[runIdx].signal }}
                            {% endif %}
                            <button class=\"btn btn-sm btn-outline-secondary\" data-toggle=\"collapse\"
                                    data-target=\"#collapseExample-{{ runIdx }}\"
                                    aria-expanded=\"false\">
                                show complete metadata
                            </button>
                            <div class=\"collapse\" id=\"collapseExample-{{ runIdx }}\">
                                  <div class=\"card card-body output_text\">{{ runsOutput[runIdx].metadata }}</div>
                            </div>
                        {% endif %}
                    </span>
                    {% endif %}
                    {% if run.description is not null %}
                        <p><em>
                            {{ run.description(true) | descriptionExpand }}
                        </em></p>
                    {% endif %}
                    {% if runsOutput[runIdx].image_thumb %}
                        <span style=\"float:right; border: 3px solid #438ec3; margin: 5px; padding: 5px;\">
                            {% set imgUrl = path('jury_problem_testcase_fetch', {'probId': submission.probid, 'rank': run.rank, 'type': 'image'}) %}
                            <a href=\"{{ imgUrl }}\">
                                <img src=\"data:image/{{ run.imageType }};base64,{{ runsOutput[runIdx].image_thumb | base64 }}\"/>
                            </a>
                        </span>
                    {% endif %}

                    {% set runDone = false %}
                    {% if run is not null and run.firstJudgingRun is not null and run.firstJudgingRun.runresult is not null %}
                        {% set runDone = true %}
                    {% elseif externalRun is not null and externalRun.firstExternalRun is not null and run.firstExternalRun.result is not null %}
                        {% set runDone = true %}
                    {% endif %}
                    {% if not runDone %}
                        <p class=\"nodata\">
                            {% if selectedJudging is not null and selectedJudging.result %}
                                Run not used for final result.
                            {% else %}
                                Run not started/finished yet.
                            {% endif %}
                        </p>
                    {% else %}
                        {% if run.firstJudgingRun is not null and run.firstJudgingRun.runresult is not null %}
                            {% if combinedRunCompare %}
                                <h5>Validator output</h5>
                                {% if runsOutput[runIdx].output_diff is empty %}
                                    <p class=\"nodata\">There was no validator output.</p>
                                {% else %}
                                    <pre class=\"output_text\">{{ runsOutput[runIdx].output_diff | parseRunDiff }}</pre>
                                {% endif %}
                            {% else %}
                                <h5>Diff output</h5>
                                {% if runsOutput[runIdx].output_diff is empty %}
                                    <p class=\"nodata\">There was no diff output.</p>
                                {% else %}
                                    <pre class=\"output_text\">{{ runsOutput[runIdx].output_diff | parseRunDiff }}</pre>
                                {% endif %}

                                {% if run.firstJudgingRun.runresult != 'correct' %}
                                    {{ runsOutput[runIdx] | runDiff }}
                                {% endif %}
                            {% endif %}

                            {% if combinedRunCompare %}
                                <h5>Validator/Submission interaction</h5>
                                {% if runsOutput[runIdx].output_run is empty %}
                                    <p class=\"nodata\">There was no interaction log.</p>
                                {% else %}
                                    {{ runsOutput[runIdx].output_run | interactiveLog }}
                                {% endif %}
                            {% else %}
                                <h5>Program output</h5>
                                {% if runsOutput[runIdx].output_run is empty %}
                                    <p class=\"nodata\">There was no program output.</p>
                                {% else %}
                                    <pre class=\"output_text\">{{ runsOutput[runIdx].output_run | parseRunDiff }}</pre>
                                {% endif %}
                            {% endif %}

                            <h5>Program error output</h5>
                            {% if runsOutput[runIdx].output_error is empty %}
                                <p class=\"nodata\">There was no stderr output.</p>
                            {% else %}
                                <pre class=\"output_text\">{{ runsOutput[runIdx].output_error | parseRunDiff }}</pre>
                            {% endif %}

                            <h5>Judging system output (info/debug/errors)</h5>
                            {% if runsOutput[runIdx].output_system is empty %}
                                <p class=\"nodata\">There was no judging system output.</p>
                            {% else %}
                                <pre class=\"output_text\">{{ runsOutput[runIdx].output_system | parseRunDiff }}</pre>
                            {% endif %}
                        {% endif %}
                    {% endif %}

                    </div>
                </div>
            {% endfor %}

            <script>
                function display_correctruns(show) {
                    elements = document.getElementsByClassName('run_correct');
                    for (var i = 0; i < elements.length; i++) {
                        elements[i].style.display = show ? 'block' : 'none';
                    }
                }

                display_correctruns(false);
            </script>
        {% endif %} {# selectedJudging.result != 'compiler-error' #}

    {% endif %} {# selectedJudging is not null or externalJudgement is not null #}

{% endblock %}
", "jury/submission.html.twig", "/opt/domjudge/domserver/webapp/templates/jury/submission.html.twig");
    }
}
