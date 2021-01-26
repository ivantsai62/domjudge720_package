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

/* partials/scoreboard_table.html.twig */
class __TwigTemplate_106570112a63ab34be37d728ec7985724ea58d3ced2f814a1d319b48069922f4 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "partials/scoreboard_table.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "partials/scoreboard_table.html.twig"));

        // line 1
        if ( !(isset($context["limitToTeams"]) || array_key_exists("limitToTeams", $context))) {
            // line 2
            echo "    ";
            $context["limitToTeams"] = null;
            // line 3
            echo "    ";
            $context["limitToTeamIds"] = null;
        } else {
            // line 5
            echo "    ";
            $context["limitToTeamIds"] = [];
            // line 6
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["limitToTeams"]) || array_key_exists("limitToTeams", $context) ? $context["limitToTeams"] : (function () { throw new RuntimeError('Variable "limitToTeams" does not exist.', 6, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["team"]) {
                // line 7
                echo "        ";
                $context["limitToTeamIds"] = twig_array_merge((isset($context["limitToTeamIds"]) || array_key_exists("limitToTeamIds", $context) ? $context["limitToTeamIds"] : (function () { throw new RuntimeError('Variable "limitToTeamIds" does not exist.', 7, $this->source); })()), [0 => twig_get_attribute($this->env, $this->source, $context["team"], "teamid", [], "any", false, false, false, 7)]);
                // line 8
                echo "    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['team'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        // line 10
        if ( !(isset($context["showLegends"]) || array_key_exists("showLegends", $context))) {
            // line 11
            echo "    ";
            $context["showLegends"] = false;
        }
        // line 13
        if ( !(isset($context["static"]) || array_key_exists("static", $context))) {
            // line 14
            echo "    ";
            $context["static"] = false;
        }
        // line 16
        $context["showPoints"] = twig_get_attribute($this->env, $this->source, (isset($context["scoreboard"]) || array_key_exists("scoreboard", $context) ? $context["scoreboard"] : (function () { throw new RuntimeError('Variable "scoreboard" does not exist.', 16, $this->source); })()), "showPoints", [], "any", false, false, false, 16);
        // line 17
        $context["usedCategories"] = twig_get_attribute($this->env, $this->source, (isset($context["scoreboard"]) || array_key_exists("scoreboard", $context) ? $context["scoreboard"] : (function () { throw new RuntimeError('Variable "scoreboard" does not exist.', 17, $this->source); })()), "usedCategories", [0 => (isset($context["limitToTeamIds"]) || array_key_exists("limitToTeamIds", $context) ? $context["limitToTeamIds"] : (function () { throw new RuntimeError('Variable "limitToTeamIds" does not exist.', 17, $this->source); })())], "method", false, false, false, 17);
        // line 18
        $context["hasDifferentCategoryColors"] = twig_get_attribute($this->env, $this->source, (isset($context["scoreboard"]) || array_key_exists("scoreboard", $context) ? $context["scoreboard"] : (function () { throw new RuntimeError('Variable "scoreboard" does not exist.', 18, $this->source); })()), "categoryColors", [0 => (isset($context["limitToTeamIds"]) || array_key_exists("limitToTeamIds", $context) ? $context["limitToTeamIds"] : (function () { throw new RuntimeError('Variable "limitToTeamIds" does not exist.', 18, $this->source); })())], "method", false, false, false, 18);
        // line 19
        $context["scores"] = twig_array_filter(twig_get_attribute($this->env, $this->source, (isset($context["scoreboard"]) || array_key_exists("scoreboard", $context) ? $context["scoreboard"] : (function () { throw new RuntimeError('Variable "scoreboard" does not exist.', 19, $this->source); })()), "scores", [], "any", false, false, false, 19), function ($__score__) use ($context) { $context["score"] = $__score__; return ((null === (isset($context["limitToTeams"]) || array_key_exists("limitToTeams", $context) ? $context["limitToTeams"] : (function () { throw new RuntimeError('Variable "limitToTeams" does not exist.', 19, $this->source); })())) || twig_in_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["score"]) || array_key_exists("score", $context) ? $context["score"] : (function () { throw new RuntimeError('Variable "score" does not exist.', 19, $this->source); })()), "team", [], "any", false, false, false, 19), "teamid", [], "any", false, false, false, 19), (isset($context["limitToTeamIds"]) || array_key_exists("limitToTeamIds", $context) ? $context["limitToTeamIds"] : (function () { throw new RuntimeError('Variable "limitToTeamIds" does not exist.', 19, $this->source); })()))); });
        // line 20
        $context["problems"] = twig_get_attribute($this->env, $this->source, (isset($context["scoreboard"]) || array_key_exists("scoreboard", $context) ? $context["scoreboard"] : (function () { throw new RuntimeError('Variable "scoreboard" does not exist.', 20, $this->source); })()), "problems", [], "any", false, false, false, 20);
        // line 21
        if (((isset($context["maxWidth"]) || array_key_exists("maxWidth", $context) ? $context["maxWidth"] : (function () { throw new RuntimeError('Variable "maxWidth" does not exist.', 21, $this->source); })()) > 0)) {
            // line 22
            echo "    <style>
        .forceWidth {
            max-width: ";
            // line 24
            echo twig_escape_filter($this->env, (isset($context["maxWidth"]) || array_key_exists("maxWidth", $context) ? $context["maxWidth"] : (function () { throw new RuntimeError('Variable "maxWidth" does not exist.', 24, $this->source); })()), "html", null, true);
            echo "px;
        }
    </style>
";
        }
        // line 28
        echo "            
<table class=\"scoreboard center ";
        // line 29
        if ((isset($context["jury"]) || array_key_exists("jury", $context) ? $context["jury"] : (function () { throw new RuntimeError('Variable "jury" does not exist.', 29, $this->source); })())) {
            echo "scoreboard_jury";
        }
        echo "\">

    ";
        // line 32
        echo "    <colgroup>
        <col id=\"scorerank\"/>
        ";
        // line 34
        if ((isset($context["showFlags"]) || array_key_exists("showFlags", $context) ? $context["showFlags"] : (function () { throw new RuntimeError('Variable "showFlags" does not exist.', 34, $this->source); })())) {
            // line 35
            echo "            <col id=\"scoreflags\"/>
        ";
        } else {
            // line 37
            echo "            <col/>
        ";
        }
        // line 39
        echo "        ";
        if ((isset($context["showAffiliationLogos"]) || array_key_exists("showAffiliationLogos", $context) ? $context["showAffiliationLogos"] : (function () { throw new RuntimeError('Variable "showAffiliationLogos" does not exist.', 39, $this->source); })())) {
            // line 40
            echo "            <col id=\"scorelogos\"/>
        ";
        }
        // line 42
        echo "        <col id=\"scoreteamname\"/>
    </colgroup>
    <colgroup>
        <col id=\"scoresolv\"/>
        <col id=\"scoretotal\"/>
    </colgroup>
    <colgroup>
        ";
        // line 49
        if (((isset($context["showTeamSubmissions"]) || array_key_exists("showTeamSubmissions", $context) ? $context["showTeamSubmissions"] : (function () { throw new RuntimeError('Variable "showTeamSubmissions" does not exist.', 49, $this->source); })()) || (isset($context["jury"]) || array_key_exists("jury", $context) ? $context["jury"] : (function () { throw new RuntimeError('Variable "jury" does not exist.', 49, $this->source); })()))) {
            // line 50
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["problems"]) || array_key_exists("problems", $context) ? $context["problems"] : (function () { throw new RuntimeError('Variable "problems" does not exist.', 50, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["problem"]) {
                // line 51
                echo "                <col class=\"scoreprob\"/>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['problem'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 53
            echo "        ";
        }
        // line 54
        echo "    </colgroup>

    ";
        // line 56
        $context["teamColspan"] = 2;
        // line 57
        echo "    ";
        if ((isset($context["showAffiliationLogos"]) || array_key_exists("showAffiliationLogos", $context) ? $context["showAffiliationLogos"] : (function () { throw new RuntimeError('Variable "showAffiliationLogos" does not exist.', 57, $this->source); })())) {
            // line 58
            echo "        ";
            $context["teamColspan"] = ((isset($context["teamColspan"]) || array_key_exists("teamColspan", $context) ? $context["teamColspan"] : (function () { throw new RuntimeError('Variable "teamColspan" does not exist.', 58, $this->source); })()) + 1);
            // line 59
            echo "    ";
        }
        // line 60
        echo "
    <thead>
    <tr class=\"scoreheader\">
        <th title=\"rank\" scope=\"col\">rank</th>
        <th title=\"team name\" scope=\"col\" colspan=\"";
        // line 64
        echo twig_escape_filter($this->env, (isset($context["teamColspan"]) || array_key_exists("teamColspan", $context) ? $context["teamColspan"] : (function () { throw new RuntimeError('Variable "teamColspan" does not exist.', 64, $this->source); })()), "html", null, true);
        echo "\">team</th>
        <th title=\"# solved / penalty time\" colspan=\"2\" scope=\"col\">score</th>
        ";
        // line 66
        if (((isset($context["showTeamSubmissions"]) || array_key_exists("showTeamSubmissions", $context) ? $context["showTeamSubmissions"] : (function () { throw new RuntimeError('Variable "showTeamSubmissions" does not exist.', 66, $this->source); })()) || (isset($context["jury"]) || array_key_exists("jury", $context) ? $context["jury"] : (function () { throw new RuntimeError('Variable "jury" does not exist.', 66, $this->source); })()))) {
            // line 67
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["problems"]) || array_key_exists("problems", $context) ? $context["problems"] : (function () { throw new RuntimeError('Variable "problems" does not exist.', 67, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["problem"]) {
                // line 68
                echo "                ";
                $context["link"] = null;
                // line 69
                echo "                ";
                $context["target"] = "_self";
                // line 70
                echo "                ";
                if ( !(isset($context["static"]) || array_key_exists("static", $context) ? $context["static"] : (function () { throw new RuntimeError('Variable "static" does not exist.', 70, $this->source); })())) {
                    // line 71
                    echo "                    ";
                    if ((isset($context["jury"]) || array_key_exists("jury", $context) ? $context["jury"] : (function () { throw new RuntimeError('Variable "jury" does not exist.', 71, $this->source); })())) {
                        // line 72
                        echo "                        ";
                        $context["link"] = $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_problem", ["probId" => twig_get_attribute($this->env, $this->source, $context["problem"], "probid", [], "any", false, false, false, 72)]);
                        // line 73
                        echo "                    ";
                    } elseif (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["problem"], "problem", [], "any", false, false, false, 73), "hasProblemtext", [], "any", false, false, false, 73)) {
                        // line 74
                        echo "                        ";
                        if ((isset($context["public"]) || array_key_exists("public", $context) ? $context["public"] : (function () { throw new RuntimeError('Variable "public" does not exist.', 74, $this->source); })())) {
                            // line 75
                            echo "                            ";
                            $context["link"] = $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("public_problem_text", ["probId" => twig_get_attribute($this->env, $this->source, $context["problem"], "probid", [], "any", false, false, false, 75)]);
                            // line 76
                            echo "                            ";
                            $context["target"] = "_blank";
                            // line 77
                            echo "                        ";
                        } else {
                            // line 78
                            echo "                            ";
                            $context["link"] = $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("team_problem_text", ["probId" => twig_get_attribute($this->env, $this->source, $context["problem"], "probid", [], "any", false, false, false, 78)]);
                            // line 79
                            echo "                            ";
                            $context["target"] = "_blank";
                            // line 80
                            echo "                        ";
                        }
                        // line 81
                        echo "                    ";
                    }
                    // line 82
                    echo "                ";
                }
                // line 83
                echo "                <th title=\"problem ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["problem"], "problem", [], "any", false, false, false, 83), "name", [], "any", false, false, false, 83), "html", null, true);
                echo "\" scope=\"col\">
                    <a ";
                // line 84
                if ((isset($context["link"]) || array_key_exists("link", $context) ? $context["link"] : (function () { throw new RuntimeError('Variable "link" does not exist.', 84, $this->source); })())) {
                    echo "href=\"";
                    echo twig_escape_filter($this->env, (isset($context["link"]) || array_key_exists("link", $context) ? $context["link"] : (function () { throw new RuntimeError('Variable "link" does not exist.', 84, $this->source); })()), "html", null, true);
                    echo "\"";
                }
                echo " target=\"";
                echo twig_escape_filter($this->env, (isset($context["target"]) || array_key_exists("target", $context) ? $context["target"] : (function () { throw new RuntimeError('Variable "target" does not exist.', 84, $this->source); })()), "html", null, true);
                echo "\">
                        ";
                // line 85
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["problem"], "shortname", [], "any", false, false, false, 85), "html", null, true);
                echo "
                        ";
                // line 86
                if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, $context["problem"], "color", [], "any", false, false, false, 86))) {
                    // line 87
                    echo "                            <div class=\"circle\" style=\"background: ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["problem"], "color", [], "any", false, false, false, 87), "html", null, true);
                    echo ";\"></div>
                        ";
                }
                // line 89
                echo "                        ";
                if ((isset($context["showPoints"]) || array_key_exists("showPoints", $context) ? $context["showPoints"] : (function () { throw new RuntimeError('Variable "showPoints" does not exist.', 89, $this->source); })())) {
                    // line 90
                    echo "                            <span class='problempoints'>
                                [";
                    // line 91
                    if ((twig_get_attribute($this->env, $this->source, $context["problem"], "points", [], "any", false, false, false, 91) == 1)) {
                        echo "1 point";
                    } else {
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["problem"], "points", [], "any", false, false, false, 91), "html", null, true);
                        echo " points";
                    }
                    echo "]
                            </span>
                        ";
                }
                // line 94
                echo "                    </a>
                </th>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['problem'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 97
            echo "        ";
        }
        // line 98
        echo "    </tr>
    </thead>
    <tbody>
    ";
        // line 101
        $context["previousSortOrder"] =  -1;
        // line 102
        echo "    ";
        $context["previousTeam"] = null;
        // line 103
        echo "    ";
        $context["backgroundColors"] = ["#FFFFFF" => 1];
        // line 104
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["scores"]) || array_key_exists("scores", $context) ? $context["scores"] : (function () { throw new RuntimeError('Variable "scores" does not exist.', 104, $this->source); })()));
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
        foreach ($context['_seq'] as $context["_key"] => $context["score"]) {
            // line 105
            echo "        ";
            $context["classes"] = [];
            // line 106
            echo "        ";
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["score"], "team", [], "any", false, false, false, 106), "category", [], "any", false, false, false, 106), "sortorder", [], "any", false, false, false, 106) != (isset($context["previousSortOrder"]) || array_key_exists("previousSortOrder", $context) ? $context["previousSortOrder"] : (function () { throw new RuntimeError('Variable "previousSortOrder" does not exist.', 106, $this->source); })()))) {
                // line 107
                echo "            ";
                if (((isset($context["previousSortOrder"]) || array_key_exists("previousSortOrder", $context) ? $context["previousSortOrder"] : (function () { throw new RuntimeError('Variable "previousSortOrder" does not exist.', 107, $this->source); })()) !=  -1)) {
                    // line 108
                    echo "                ";
                    // line 109
                    echo "                ";
                    $this->loadTemplate("partials/scoreboard_summary.html.twig", "partials/scoreboard_table.html.twig", 109)->display(twig_array_merge($context, ["sortOrder" => (isset($context["previousSortOrder"]) || array_key_exists("previousSortOrder", $context) ? $context["previousSortOrder"] : (function () { throw new RuntimeError('Variable "previousSortOrder" does not exist.', 109, $this->source); })())]));
                    // line 110
                    echo "            ";
                }
                // line 111
                echo "            ";
                $context["classes"] = twig_array_merge((isset($context["classes"]) || array_key_exists("classes", $context) ? $context["classes"] : (function () { throw new RuntimeError('Variable "classes" does not exist.', 111, $this->source); })()), [0 => "sortorderswitch"]);
                // line 112
                echo "            ";
                $context["previousSortOrder"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["score"], "team", [], "any", false, false, false, 112), "category", [], "any", false, false, false, 112), "sortorder", [], "any", false, false, false, 112);
                // line 113
                echo "            ";
                $context["previousTeam"] = null;
                // line 114
                echo "        ";
            }
            // line 115
            echo "
        ";
            // line 117
            echo "        ";
            if (((isset($context["myTeamId"]) || array_key_exists("myTeamId", $context)) && ((isset($context["myTeamId"]) || array_key_exists("myTeamId", $context) ? $context["myTeamId"] : (function () { throw new RuntimeError('Variable "myTeamId" does not exist.', 117, $this->source); })()) == twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["score"], "team", [], "any", false, false, false, 117), "teamid", [], "any", false, false, false, 117)))) {
                // line 118
                echo "            ";
                $context["classes"] = twig_array_merge((isset($context["classes"]) || array_key_exists("classes", $context) ? $context["classes"] : (function () { throw new RuntimeError('Variable "classes" does not exist.', 118, $this->source); })()), [0 => "scorethisisme"]);
                // line 119
                echo "            ";
                $context["color"] = "#FFFF99";
                // line 120
                echo "        ";
            } else {
                // line 121
                echo "            ";
                $context["color"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["score"], "team", [], "any", false, false, false, 121), "category", [], "any", false, false, false, 121), "color", [], "any", false, false, false, 121);
                // line 122
                echo "        ";
            }
            // line 123
            echo "        <tr class=\"";
            echo twig_escape_filter($this->env, twig_join_filter((isset($context["classes"]) || array_key_exists("classes", $context) ? $context["classes"] : (function () { throw new RuntimeError('Variable "classes" does not exist.', 123, $this->source); })()), " "), "html", null, true);
            echo "\" id=\"team:";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["score"], "team", [], "any", false, false, false, 123), "teamid", [], "any", false, false, false, 123), "html", null, true);
            echo "\">
            <td class=\"scorepl\">
                ";
            // line 126
            echo "                ";
            if ( !(isset($context["displayRank"]) || array_key_exists("displayRank", $context) ? $context["displayRank"] : (function () { throw new RuntimeError('Variable "displayRank" does not exist.', 126, $this->source); })())) {
                // line 127
                echo "                    ?
                ";
            } elseif (((null ===             // line 128
(isset($context["previousTeam"]) || array_key_exists("previousTeam", $context) ? $context["previousTeam"] : (function () { throw new RuntimeError('Variable "previousTeam" does not exist.', 128, $this->source); })())) || (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["scoreboard"]) || array_key_exists("scoreboard", $context) ? $context["scoreboard"] : (function () { throw new RuntimeError('Variable "scoreboard" does not exist.', 128, $this->source); })()), "scores", [], "any", false, false, false, 128), twig_get_attribute($this->env, $this->source, (isset($context["previousTeam"]) || array_key_exists("previousTeam", $context) ? $context["previousTeam"] : (function () { throw new RuntimeError('Variable "previousTeam" does not exist.', 128, $this->source); })()), "teamid", [], "any", false, false, false, 128), [], "array", false, false, false, 128), "rank", [], "any", false, false, false, 128) != twig_get_attribute($this->env, $this->source, $context["score"], "rank", [], "any", false, false, false, 128)))) {
                // line 129
                echo "                    ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["score"], "rank", [], "any", false, false, false, 129), "html", null, true);
                echo "
                ";
            } else {
                // line 131
                echo "                ";
            }
            // line 132
            echo "                ";
            $context["previousTeam"] = twig_get_attribute($this->env, $this->source, $context["score"], "team", [], "any", false, false, false, 132);
            // line 133
            echo "            </td>
            <td class=\"scoreaf\">
                ";
            // line 135
            if ((isset($context["showFlags"]) || array_key_exists("showFlags", $context) ? $context["showFlags"] : (function () { throw new RuntimeError('Variable "showFlags" does not exist.', 135, $this->source); })())) {
                // line 136
                echo "                    ";
                if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["score"], "team", [], "any", false, false, false, 136), "affiliation", [], "any", false, false, false, 136)) {
                    // line 137
                    echo "                        ";
                    $context["link"] = null;
                    // line 138
                    echo "                        ";
                    if ((isset($context["jury"]) || array_key_exists("jury", $context) ? $context["jury"] : (function () { throw new RuntimeError('Variable "jury" does not exist.', 138, $this->source); })())) {
                        // line 139
                        echo "                            ";
                        $context["link"] = $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_team_affiliation", ["affilId" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["score"], "team", [], "any", false, false, false, 139), "affilid", [], "any", false, false, false, 139)]);
                        // line 140
                        echo "                        ";
                    }
                    // line 141
                    echo "                        <a ";
                    if ((isset($context["link"]) || array_key_exists("link", $context) ? $context["link"] : (function () { throw new RuntimeError('Variable "link" does not exist.', 141, $this->source); })())) {
                        echo "href=\"";
                        echo twig_escape_filter($this->env, (isset($context["link"]) || array_key_exists("link", $context) ? $context["link"] : (function () { throw new RuntimeError('Variable "link" does not exist.', 141, $this->source); })()), "html", null, true);
                        echo "\"";
                    }
                    echo ">
                            ";
                    // line 142
                    if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["score"], "team", [], "any", false, false, false, 142), "affiliation", [], "any", false, false, false, 142), "country", [], "any", false, false, false, 142)) {
                        // line 143
                        echo "                                ";
                        $context["countryFlag"] = (("images/countries/" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["score"], "team", [], "any", false, false, false, 143), "affiliation", [], "any", false, false, false, 143), "country", [], "any", false, false, false, 143)) . ".png");
                        // line 144
                        echo "                                ";
                        if ($this->extensions['App\Twig\TwigExtension']->assetExists((isset($context["countryFlag"]) || array_key_exists("countryFlag", $context) ? $context["countryFlag"] : (function () { throw new RuntimeError('Variable "countryFlag" does not exist.', 144, $this->source); })()))) {
                            // line 145
                            echo "                                    <img src=\"";
                            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl((isset($context["countryFlag"]) || array_key_exists("countryFlag", $context) ? $context["countryFlag"] : (function () { throw new RuntimeError('Variable "countryFlag" does not exist.', 145, $this->source); })())), "html", null, true);
                            echo "\" alt=\"";
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["alpha3_countries"]) || array_key_exists("alpha3_countries", $context) ? $context["alpha3_countries"] : (function () { throw new RuntimeError('Variable "alpha3_countries" does not exist.', 145, $this->source); })()), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["score"], "team", [], "any", false, false, false, 145), "affiliation", [], "any", false, false, false, 145), "country", [], "any", false, false, false, 145), [], "array", false, false, false, 145), "html", null, true);
                            echo "\"
                                         title=\"";
                            // line 146
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["alpha3_countries"]) || array_key_exists("alpha3_countries", $context) ? $context["alpha3_countries"] : (function () { throw new RuntimeError('Variable "alpha3_countries" does not exist.', 146, $this->source); })()), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["score"], "team", [], "any", false, false, false, 146), "affiliation", [], "any", false, false, false, 146), "country", [], "any", false, false, false, 146), [], "array", false, false, false, 146), "html", null, true);
                            echo "\" class=\"countryflag\"/>
                                ";
                        } else {
                            // line 148
                            echo "                                    ";
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["alpha3_countries"]) || array_key_exists("alpha3_countries", $context) ? $context["alpha3_countries"] : (function () { throw new RuntimeError('Variable "alpha3_countries" does not exist.', 148, $this->source); })()), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["score"], "team", [], "any", false, false, false, 148), "affiliation", [], "any", false, false, false, 148), "country", [], "any", false, false, false, 148), [], "array", false, false, false, 148), "html", null, true);
                            echo "
                                ";
                        }
                        // line 150
                        echo "                            ";
                    }
                    // line 151
                    echo "                        </a>
                    ";
                }
                // line 153
                echo "                ";
            }
            // line 154
            echo "            </td>
            ";
            // line 155
            if ((isset($context["showAffiliationLogos"]) || array_key_exists("showAffiliationLogos", $context) ? $context["showAffiliationLogos"] : (function () { throw new RuntimeError('Variable "showAffiliationLogos" does not exist.', 155, $this->source); })())) {
                // line 156
                echo "                <td class=\"scoreaf\">
                    ";
                // line 157
                if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["score"], "team", [], "any", false, false, false, 157), "affiliation", [], "any", false, false, false, 157)) {
                    // line 158
                    echo "                        ";
                    $context["link"] = null;
                    // line 159
                    echo "                        ";
                    if ((isset($context["jury"]) || array_key_exists("jury", $context) ? $context["jury"] : (function () { throw new RuntimeError('Variable "jury" does not exist.', 159, $this->source); })())) {
                        // line 160
                        echo "                            ";
                        $context["link"] = $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_team_affiliation", ["affilId" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["score"], "team", [], "any", false, false, false, 160), "affilid", [], "any", false, false, false, 160)]);
                        // line 161
                        echo "                        ";
                    }
                    // line 162
                    echo "                        <a ";
                    if ((isset($context["link"]) || array_key_exists("link", $context) ? $context["link"] : (function () { throw new RuntimeError('Variable "link" does not exist.', 162, $this->source); })())) {
                        echo "href=\"";
                        echo twig_escape_filter($this->env, (isset($context["link"]) || array_key_exists("link", $context) ? $context["link"] : (function () { throw new RuntimeError('Variable "link" does not exist.', 162, $this->source); })()), "html", null, true);
                        echo "\"";
                    }
                    echo ">
                            ";
                    // line 163
                    $context["affiliationId"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["score"], "team", [], "any", false, false, false, 163), "affiliation", [], "any", false, false, false, 163), "affilid", [], "any", false, false, false, 163);
                    // line 164
                    echo "                            ";
                    if ($this->extensions['App\Twig\TwigExtension']->showExternalId(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["score"], "team", [], "any", false, false, false, 164), "affiliation", [], "any", false, false, false, 164))) {
                        // line 165
                        echo "                                ";
                        $context["affiliationId"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["score"], "team", [], "any", false, false, false, 165), "affiliation", [], "any", false, false, false, 165), "externalid", [], "any", false, false, false, 165);
                        // line 166
                        echo "                            ";
                    }
                    // line 167
                    echo "                            ";
                    $context["affiliationImage"] = (("images/affiliations/" . (isset($context["affiliationId"]) || array_key_exists("affiliationId", $context) ? $context["affiliationId"] : (function () { throw new RuntimeError('Variable "affiliationId" does not exist.', 167, $this->source); })())) . ".png");
                    // line 168
                    echo "                            ";
                    if ($this->extensions['App\Twig\TwigExtension']->assetExists((isset($context["affiliationImage"]) || array_key_exists("affiliationImage", $context) ? $context["affiliationImage"] : (function () { throw new RuntimeError('Variable "affiliationImage" does not exist.', 168, $this->source); })()))) {
                        // line 169
                        echo "                                <img src=\"";
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl((isset($context["affiliationImage"]) || array_key_exists("affiliationImage", $context) ? $context["affiliationImage"] : (function () { throw new RuntimeError('Variable "affiliationImage" does not exist.', 169, $this->source); })())), "html", null, true);
                        echo "\" alt=\"";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["score"], "team", [], "any", false, false, false, 169), "affiliation", [], "any", false, false, false, 169), "name", [], "any", false, false, false, 169), "html", null, true);
                        echo "\"
                                     title=\"";
                        // line 170
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["score"], "team", [], "any", false, false, false, 170), "affiliation", [], "any", false, false, false, 170), "name", [], "any", false, false, false, 170), "html", null, true);
                        echo "\" class=\"affiliation-logo\">
                            ";
                    } else {
                        // line 172
                        echo "                                ";
                        echo twig_escape_filter($this->env, (isset($context["affiliationId"]) || array_key_exists("affiliationId", $context) ? $context["affiliationId"] : (function () { throw new RuntimeError('Variable "affiliationId" does not exist.', 172, $this->source); })()), "html", null, true);
                        echo "
                            ";
                    }
                    // line 174
                    echo "                        </a>
                    ";
                }
                // line 176
                echo "                </td>
            ";
            }
            // line 178
            echo "            ";
            if ((null === (isset($context["color"]) || array_key_exists("color", $context) ? $context["color"] : (function () { throw new RuntimeError('Variable "color" does not exist.', 178, $this->source); })()))) {
                // line 179
                echo "                ";
                $context["color"] = "#FFFFFF";
                // line 180
                echo "                ";
                $context["colorClass"] = "_FFFFFF";
                // line 181
                echo "            ";
            } else {
                // line 182
                echo "                ";
                $context["colorClass"] = twig_replace_filter((isset($context["color"]) || array_key_exists("color", $context) ? $context["color"] : (function () { throw new RuntimeError('Variable "color" does not exist.', 182, $this->source); })()), ["#" => "_"]);
                // line 183
                echo "                ";
                $context["backgroundColors"] = twig_array_merge((isset($context["backgroundColors"]) || array_key_exists("backgroundColors", $context) ? $context["backgroundColors"] : (function () { throw new RuntimeError('Variable "backgroundColors" does not exist.', 183, $this->source); })()), [(isset($context["color"]) || array_key_exists("color", $context) ? $context["color"] : (function () { throw new RuntimeError('Variable "color" does not exist.', 183, $this->source); })()) => 1]);
                // line 184
                echo "            ";
            }
            // line 185
            echo "            <td class=\"scoretn cl";
            echo twig_escape_filter($this->env, (isset($context["colorClass"]) || array_key_exists("colorClass", $context) ? $context["colorClass"] : (function () { throw new RuntimeError('Variable "colorClass" does not exist.', 185, $this->source); })()), "html", null, true);
            echo "\" title=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["score"], "team", [], "any", false, false, false, 185), "name", [], "any", false, false, false, 185), "html", null, true);
            echo "\">
                ";
            // line 186
            $context["link"] = null;
            // line 187
            echo "                ";
            $context["extra"] = null;
            // line 188
            echo "                ";
            if ( !(isset($context["static"]) || array_key_exists("static", $context) ? $context["static"] : (function () { throw new RuntimeError('Variable "static" does not exist.', 188, $this->source); })())) {
                // line 189
                echo "                    ";
                if ((isset($context["jury"]) || array_key_exists("jury", $context) ? $context["jury"] : (function () { throw new RuntimeError('Variable "jury" does not exist.', 189, $this->source); })())) {
                    // line 190
                    echo "                        ";
                    $context["link"] = $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_team", ["teamId" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["score"], "team", [], "any", false, false, false, 190), "teamid", [], "any", false, false, false, 190)]);
                    // line 191
                    echo "                    ";
                } elseif ((isset($context["public"]) || array_key_exists("public", $context) ? $context["public"] : (function () { throw new RuntimeError('Variable "public" does not exist.', 191, $this->source); })())) {
                    // line 192
                    echo "                        ";
                    $context["link"] = $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("public_team", ["teamId" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["score"], "team", [], "any", false, false, false, 192), "teamid", [], "any", false, false, false, 192)]);
                    // line 193
                    echo "                        ";
                    $context["extra"] = "data-ajax-modal";
                    // line 194
                    echo "                    ";
                } else {
                    // line 195
                    echo "                        ";
                    $context["link"] = $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("team_team", ["teamId" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["score"], "team", [], "any", false, false, false, 195), "teamid", [], "any", false, false, false, 195)]);
                    // line 196
                    echo "                        ";
                    $context["extra"] = "data-ajax-modal";
                    // line 197
                    echo "                    ";
                }
                // line 198
                echo "                ";
            }
            // line 199
            echo "                <a ";
            if ( !(null === (isset($context["extra"]) || array_key_exists("extra", $context) ? $context["extra"] : (function () { throw new RuntimeError('Variable "extra" does not exist.', 199, $this->source); })()))) {
                echo twig_escape_filter($this->env, (isset($context["extra"]) || array_key_exists("extra", $context) ? $context["extra"] : (function () { throw new RuntimeError('Variable "extra" does not exist.', 199, $this->source); })()), "html", null, true);
            }
            echo " ";
            if ( !(null === (isset($context["link"]) || array_key_exists("link", $context) ? $context["link"] : (function () { throw new RuntimeError('Variable "link" does not exist.', 199, $this->source); })()))) {
                echo "href=\"";
                echo twig_escape_filter($this->env, (isset($context["link"]) || array_key_exists("link", $context) ? $context["link"] : (function () { throw new RuntimeError('Variable "link" does not exist.', 199, $this->source); })()), "html", null, true);
                echo "\"";
            }
            echo ">
                    <span class=\"forceWidth\">
                        ";
            // line 201
            if (((twig_length_filter($this->env, (isset($context["usedCategories"]) || array_key_exists("usedCategories", $context) ? $context["usedCategories"] : (function () { throw new RuntimeError('Variable "usedCategories" does not exist.', 201, $this->source); })())) > 1) && twig_get_attribute($this->env, $this->source, (isset($context["scoreboard"]) || array_key_exists("scoreboard", $context) ? $context["scoreboard"] : (function () { throw new RuntimeError('Variable "scoreboard" does not exist.', 201, $this->source); })()), "bestInCategory", [0 => twig_get_attribute($this->env, $this->source, $context["score"], "team", [], "any", false, false, false, 201), 1 => (isset($context["limitToTeamIds"]) || array_key_exists("limitToTeamIds", $context) ? $context["limitToTeamIds"] : (function () { throw new RuntimeError('Variable "limitToTeamIds" does not exist.', 201, $this->source); })())], "method", false, false, false, 201))) {
                // line 202
                echo "                            <span class=\"badge badge-warning\" style=\"margin-right: 2em; font-weight: normal;\">
                            ";
                // line 203
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["score"], "team", [], "any", false, false, false, 203), "category", [], "any", false, false, false, 203), "name", [], "any", false, false, false, 203), "html", null, true);
                echo "
                        </span>
                        ";
            }
            // line 206
            echo "                        ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["score"], "team", [], "any", false, false, false, 206), "name", [], "any", false, false, false, 206), "html", null, true);
            echo "
                    </span>
                    ";
            // line 208
            if ((isset($context["showAffiliations"]) || array_key_exists("showAffiliations", $context) ? $context["showAffiliations"] : (function () { throw new RuntimeError('Variable "showAffiliations" does not exist.', 208, $this->source); })())) {
                // line 209
                echo "                        <span class=\"univ forceWidth\">
                            ";
                // line 210
                if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["score"], "team", [], "any", false, false, false, 210), "affiliation", [], "any", false, false, false, 210)) {
                    // line 211
                    echo "                                ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["score"], "team", [], "any", false, false, false, 211), "affiliation", [], "any", false, false, false, 211), "name", [], "any", false, false, false, 211), "html", null, true);
                    echo "
                            ";
                }
                // line 213
                echo "                        </span>
                    ";
            }
            // line 215
            echo "                </a>
            </td>
            ";
            // line 217
            $context["totalTime"] = twig_get_attribute($this->env, $this->source, $context["score"], "totalTime", [], "any", false, false, false, 217);
            // line 218
            echo "            ";
            if ((isset($context["scoreInSeconds"]) || array_key_exists("scoreInSeconds", $context) ? $context["scoreInSeconds"] : (function () { throw new RuntimeError('Variable "scoreInSeconds" does not exist.', 218, $this->source); })())) {
                // line 219
                echo "                ";
                $context["totalTime"] = $this->extensions['App\Twig\TwigExtension']->printTimeRelative((isset($context["totalTime"]) || array_key_exists("totalTime", $context) ? $context["totalTime"] : (function () { throw new RuntimeError('Variable "totalTime" does not exist.', 219, $this->source); })()));
                // line 220
                echo "            ";
            }
            // line 221
            echo "            ";
            // line 222
            echo "            ";
            $context["totalPoints"] = twig_get_attribute($this->env, $this->source, $context["score"], "numberOfPoints", [], "any", false, false, false, 222);
            // line 223
            echo "            <td class=\"scorenc\">";
            echo twig_escape_filter($this->env, (isset($context["totalPoints"]) || array_key_exists("totalPoints", $context) ? $context["totalPoints"] : (function () { throw new RuntimeError('Variable "totalPoints" does not exist.', 223, $this->source); })()), "html", null, true);
            echo "</td>
            <td class=\"scorett\">";
            // line 224
            echo twig_escape_filter($this->env, (isset($context["totalTime"]) || array_key_exists("totalTime", $context) ? $context["totalTime"] : (function () { throw new RuntimeError('Variable "totalTime" does not exist.', 224, $this->source); })()), "html", null, true);
            echo "</td>
            
            
         
            ";
            // line 228
            if (((isset($context["showTeamSubmissions"]) || array_key_exists("showTeamSubmissions", $context) ? $context["showTeamSubmissions"] : (function () { throw new RuntimeError('Variable "showTeamSubmissions" does not exist.', 228, $this->source); })()) || (isset($context["jury"]) || array_key_exists("jury", $context) ? $context["jury"] : (function () { throw new RuntimeError('Variable "jury" does not exist.', 228, $this->source); })()))) {
                // line 229
                echo "            ";
                $context["num"] = 0;
                // line 230
                echo "                ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["problems"]) || array_key_exists("problems", $context) ? $context["problems"] : (function () { throw new RuntimeError('Variable "problems" does not exist.', 230, $this->source); })()));
                foreach ($context['_seq'] as $context["_key"] => $context["problem"]) {
                    // line 231
                    echo "                ";
                    if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["scoreboard"] ?? null), "Scorecache", [], "any", false, true, false, 231), (isset($context["num"]) || array_key_exists("num", $context) ? $context["num"] : (function () { throw new RuntimeError('Variable "num" does not exist.', 231, $this->source); })()), [], "array", true, true, false, 231) &&  !twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["scoreboard"]) || array_key_exists("scoreboard", $context) ? $context["scoreboard"] : (function () { throw new RuntimeError('Variable "scoreboard" does not exist.', 231, $this->source); })()), "Scorecache", [], "any", false, false, false, 231), (isset($context["num"]) || array_key_exists("num", $context) ? $context["num"] : (function () { throw new RuntimeError('Variable "num" does not exist.', 231, $this->source); })()), [], "array", false, false, false, 231)))) {
                        // line 232
                        echo "                ";
                        $context["Scorecache"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["scoreboard"]) || array_key_exists("scoreboard", $context) ? $context["scoreboard"] : (function () { throw new RuntimeError('Variable "scoreboard" does not exist.', 232, $this->source); })()), "Scorecache", [], "any", false, false, false, 232), (isset($context["num"]) || array_key_exists("num", $context) ? $context["num"] : (function () { throw new RuntimeError('Variable "num" does not exist.', 232, $this->source); })()), [], "array", false, false, false, 232);
                        // line 233
                        echo "                ";
                    }
                    // line 234
                    echo "                    ";
                    // line 235
                    echo "                    ";
                    $context["scoreCssClass"] = "score_neutral";
                    // line 236
                    echo "                    ";
                    $context["matrixItem"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["scoreboard"]) || array_key_exists("scoreboard", $context) ? $context["scoreboard"] : (function () { throw new RuntimeError('Variable "scoreboard" does not exist.', 236, $this->source); })()), "matrix", [], "any", false, false, false, 236), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["score"], "team", [], "any", false, false, false, 236), "teamid", [], "any", false, false, false, 236), [], "array", false, false, false, 236), twig_get_attribute($this->env, $this->source, $context["problem"], "probid", [], "any", false, false, false, 236), [], "array", false, false, false, 236);
                    // line 237
                    echo "                    
                    ";
                    // line 238
                    if (twig_get_attribute($this->env, $this->source, (isset($context["matrixItem"]) || array_key_exists("matrixItem", $context) ? $context["matrixItem"] : (function () { throw new RuntimeError('Variable "matrixItem" does not exist.', 238, $this->source); })()), "isCorrect", [], "any", false, false, false, 238)) {
                        // line 239
                        echo "                        ";
                        $context["scoreCssClass"] = "score_correct";
                        // line 240
                        echo "                        ";
                        if (twig_get_attribute($this->env, $this->source, (isset($context["scoreboard"]) || array_key_exists("scoreboard", $context) ? $context["scoreboard"] : (function () { throw new RuntimeError('Variable "scoreboard" does not exist.', 240, $this->source); })()), "solvedFirst", [0 => twig_get_attribute($this->env, $this->source, $context["score"], "team", [], "any", false, false, false, 240), 1 => $context["problem"]], "method", false, false, false, 240)) {
                            // line 241
                            echo "                            ";
                            $context["scoreCssClass"] = ((isset($context["scoreCssClass"]) || array_key_exists("scoreCssClass", $context) ? $context["scoreCssClass"] : (function () { throw new RuntimeError('Variable "scoreCssClass" does not exist.', 241, $this->source); })()) . " score_first");
                            // line 242
                            echo "                        ";
                        }
                        // line 243
                        echo "                    ";
                    } elseif (((isset($context["showPending"]) || array_key_exists("showPending", $context) ? $context["showPending"] : (function () { throw new RuntimeError('Variable "showPending" does not exist.', 243, $this->source); })()) && (twig_get_attribute($this->env, $this->source, (isset($context["matrixItem"]) || array_key_exists("matrixItem", $context) ? $context["matrixItem"] : (function () { throw new RuntimeError('Variable "matrixItem" does not exist.', 243, $this->source); })()), "numberOfPendingSubmissions", [], "any", false, false, false, 243) > 0))) {
                        // line 244
                        echo "                        ";
                        $context["scoreCssClass"] = "score_pending";
                        // line 245
                        echo "                    ";
                    } elseif ((twig_get_attribute($this->env, $this->source, (isset($context["matrixItem"]) || array_key_exists("matrixItem", $context) ? $context["matrixItem"] : (function () { throw new RuntimeError('Variable "matrixItem" does not exist.', 245, $this->source); })()), "numberOfSubmissions", [], "any", false, false, false, 245) > 0)) {
                        // line 246
                        echo "                        ";
                        $context["scoreCssClass"] = "score_incorrect";
                        // line 247
                        echo "                    ";
                    }
                    // line 248
                    echo "
                    ";
                    // line 249
                    $context["numberOfSubmissions"] = twig_get_attribute($this->env, $this->source, (isset($context["matrixItem"]) || array_key_exists("matrixItem", $context) ? $context["matrixItem"] : (function () { throw new RuntimeError('Variable "matrixItem" does not exist.', 249, $this->source); })()), "numberOfSubmissions", [], "any", false, false, false, 249);
                    // line 250
                    echo "                    ";
                    if (((isset($context["showPending"]) || array_key_exists("showPending", $context) ? $context["showPending"] : (function () { throw new RuntimeError('Variable "showPending" does not exist.', 250, $this->source); })()) && (twig_get_attribute($this->env, $this->source, (isset($context["matrixItem"]) || array_key_exists("matrixItem", $context) ? $context["matrixItem"] : (function () { throw new RuntimeError('Variable "matrixItem" does not exist.', 250, $this->source); })()), "numberOfPendingSubmissions", [], "any", false, false, false, 250) > 0))) {
                        // line 251
                        echo "                        ";
                        $context["numberOfSubmissions"] = (((isset($context["numberOfSubmissions"]) || array_key_exists("numberOfSubmissions", $context) ? $context["numberOfSubmissions"] : (function () { throw new RuntimeError('Variable "numberOfSubmissions" does not exist.', 251, $this->source); })()) . " + ") . twig_get_attribute($this->env, $this->source, (isset($context["matrixItem"]) || array_key_exists("matrixItem", $context) ? $context["matrixItem"] : (function () { throw new RuntimeError('Variable "matrixItem" does not exist.', 251, $this->source); })()), "numberOfPendingSubmissions", [], "any", false, false, false, 251));
                        // line 252
                        echo "                    ";
                    }
                    // line 253
                    echo "
                    ";
                    // line 255
                    echo "                    ";
                    $context["time"] = "&nbsp;";
                    // line 256
                    echo "                    ";
                    if (twig_get_attribute($this->env, $this->source, (isset($context["matrixItem"]) || array_key_exists("matrixItem", $context) ? $context["matrixItem"] : (function () { throw new RuntimeError('Variable "matrixItem" does not exist.', 256, $this->source); })()), "isCorrect", [], "any", false, false, false, 256)) {
                        // line 257
                        echo "                        ";
                        $context["time"] = twig_get_attribute($this->env, $this->source, (isset($context["matrixItem"]) || array_key_exists("matrixItem", $context) ? $context["matrixItem"] : (function () { throw new RuntimeError('Variable "matrixItem" does not exist.', 257, $this->source); })()), "time", [], "any", false, false, false, 257);
                        // line 258
                        echo "                        ";
                        if ((isset($context["scoreInSeconds"]) || array_key_exists("scoreInSeconds", $context) ? $context["scoreInSeconds"] : (function () { throw new RuntimeError('Variable "scoreInSeconds" does not exist.', 258, $this->source); })())) {
                            // line 259
                            echo "                            ";
                            $context["time"] = $this->extensions['App\Twig\TwigExtension']->printTimeRelative($this->extensions['App\Twig\TwigExtension']->scoreTime((isset($context["time"]) || array_key_exists("time", $context) ? $context["time"] : (function () { throw new RuntimeError('Variable "time" does not exist.', 259, $this->source); })())));
                            // line 260
                            echo "                            ";
                            if ((twig_get_attribute($this->env, $this->source, (isset($context["matrixItem"]) || array_key_exists("matrixItem", $context) ? $context["matrixItem"] : (function () { throw new RuntimeError('Variable "matrixItem" does not exist.', 260, $this->source); })()), "numberOfSubmissions", [], "any", false, false, false, 260) > 1)) {
                                // line 261
                                echo "                                ";
                                $context["time"] = (((isset($context["time"]) || array_key_exists("time", $context) ? $context["time"] : (function () { throw new RuntimeError('Variable "time" does not exist.', 261, $this->source); })()) . " + ") . $this->extensions['App\Twig\TwigExtension']->printTimeRelative($this->extensions['App\Twig\TwigExtension']->calculatePenaltyTime(true, twig_get_attribute($this->env, $this->source, (isset($context["matrixItem"]) || array_key_exists("matrixItem", $context) ? $context["matrixItem"] : (function () { throw new RuntimeError('Variable "matrixItem" does not exist.', 261, $this->source); })()), "numberOfSubmissions", [], "any", false, false, false, 261))));
                                // line 262
                                echo "                            ";
                            }
                            // line 263
                            echo "                        ";
                        } else {
                            // line 264
                            echo "                            ";
                            $context["time"] = $this->extensions['App\Twig\TwigExtension']->scoreTime((isset($context["time"]) || array_key_exists("time", $context) ? $context["time"] : (function () { throw new RuntimeError('Variable "time" does not exist.', 264, $this->source); })()));
                            // line 265
                            echo "                        ";
                        }
                        // line 266
                        echo "                    ";
                    }
                    // line 267
                    echo "
                    ";
                    // line 268
                    $context["link"] = null;
                    // line 269
                    echo "                    ";
                    if ((isset($context["jury"]) || array_key_exists("jury", $context) ? $context["jury"] : (function () { throw new RuntimeError('Variable "jury" does not exist.', 269, $this->source); })())) {
                        // line 270
                        echo "                        ";
                        $context["restrict"] = ["probid" => twig_get_attribute($this->env, $this->source, $context["problem"], "probid", [], "any", false, false, false, 270)];
                        // line 271
                        echo "                        ";
                        $context["link"] = $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_team", ["teamId" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["score"], "team", [], "any", false, false, false, 271), "teamid", [], "any", false, false, false, 271), "restrict" => (isset($context["restrict"]) || array_key_exists("restrict", $context) ? $context["restrict"] : (function () { throw new RuntimeError('Variable "restrict" does not exist.', 271, $this->source); })())]);
                        // line 272
                        echo "                    ";
                    }
                    // line 273
                    echo "                    <td class=\"score_cell\">
                        ";
                    // line 274
                    if (((isset($context["numberOfSubmissions"]) || array_key_exists("numberOfSubmissions", $context) ? $context["numberOfSubmissions"] : (function () { throw new RuntimeError('Variable "numberOfSubmissions" does not exist.', 274, $this->source); })()) != "0")) {
                        // line 275
                        echo "                            <a ";
                        if ((isset($context["link"]) || array_key_exists("link", $context) ? $context["link"] : (function () { throw new RuntimeError('Variable "link" does not exist.', 275, $this->source); })())) {
                            echo "href=\"";
                            echo twig_escape_filter($this->env, (isset($context["link"]) || array_key_exists("link", $context) ? $context["link"] : (function () { throw new RuntimeError('Variable "link" does not exist.', 275, $this->source); })()), "html", null, true);
                            echo "\"";
                        }
                        echo ">
                                <div class=\"";
                        // line 276
                        echo twig_escape_filter($this->env, (isset($context["scoreCssClass"]) || array_key_exists("scoreCssClass", $context) ? $context["scoreCssClass"] : (function () { throw new RuntimeError('Variable "scoreCssClass" does not exist.', 276, $this->source); })()), "html", null, true);
                        echo "\">
                                    ";
                        // line 277
                        if (((isset($context["time"]) || array_key_exists("time", $context) ? $context["time"] : (function () { throw new RuntimeError('Variable "time" does not exist.', 277, $this->source); })()) == "&nbsp;")) {
                            // line 278
                            echo "                                        ";
                            if (((isset($context["Scorecache"]) || array_key_exists("Scorecache", $context)) && ((isset($context["scoreInSeconds"]) || array_key_exists("scoreInSeconds", $context) ? $context["scoreInSeconds"] : (function () { throw new RuntimeError('Variable "scoreInSeconds" does not exist.', 278, $this->source); })()) == false))) {
                                // line 279
                                echo "                                            ";
                                if (( !twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["matrixItem"]) || array_key_exists("matrixItem", $context) ? $context["matrixItem"] : (function () { throw new RuntimeError('Variable "matrixItem" does not exist.', 279, $this->source); })()), "AllTaskPoint", [], "any", false, false, false, 279)) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["matrixItem"] ?? null), "AllTaskPoint", [], "any", false, true, false, 279), 1, [], "array", true, true, false, 279))) {
                                    // line 280
                                    echo "                                                ";
                                    $context["A"] = ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["matrixItem"]) || array_key_exists("matrixItem", $context) ? $context["matrixItem"] : (function () { throw new RuntimeError('Variable "matrixItem" does not exist.', 280, $this->source); })()), "AllTaskPoint", [], "any", false, false, false, 280), 1, [], "array", false, false, false, 280) / twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["matrixItem"]) || array_key_exists("matrixItem", $context) ? $context["matrixItem"] : (function () { throw new RuntimeError('Variable "matrixItem" does not exist.', 280, $this->source); })()), "AllTaskPoint", [], "any", false, false, false, 280), 0, [], "array", false, false, false, 280)) * twig_get_attribute($this->env, $this->source, $context["problem"], "points", [], "any", false, false, false, 280));
                                    // line 281
                                    echo "                                                ";
                                    if (((((isset($context["A"]) || array_key_exists("A", $context) ? $context["A"] : (function () { throw new RuntimeError('Variable "A" does not exist.', 281, $this->source); })()) != 0) &&  !twig_test_empty(twig_get_attribute($this->env, $this->source, $context["problem"], "subtask", [], "any", false, false, false, 281))) && (twig_get_attribute($this->env, $this->source, $context["problem"], "subtask", [], "any", false, false, false, 281) != 0))) {
                                        // line 282
                                        echo "                                                    ";
                                        echo twig_escape_filter($this->env, twig_round((isset($context["A"]) || array_key_exists("A", $context) ? $context["A"] : (function () { throw new RuntimeError('Variable "A" does not exist.', 282, $this->source); })())), "html", null, true);
                                        echo " points
                                                ";
                                    } else {
                                        // line 284
                                        echo "                                                    ";
                                        echo (isset($context["time"]) || array_key_exists("time", $context) ? $context["time"] : (function () { throw new RuntimeError('Variable "time" does not exist.', 284, $this->source); })());
                                        echo "
                                                ";
                                    }
                                    // line 286
                                    echo "                                            ";
                                } else {
                                    // line 287
                                    echo "                                                ";
                                    echo (isset($context["time"]) || array_key_exists("time", $context) ? $context["time"] : (function () { throw new RuntimeError('Variable "time" does not exist.', 287, $this->source); })());
                                    echo " 
                                            ";
                                }
                                // line 289
                                echo "                                        ";
                            } else {
                                // line 290
                                echo "                                            ";
                                echo (isset($context["time"]) || array_key_exists("time", $context) ? $context["time"] : (function () { throw new RuntimeError('Variable "time" does not exist.', 290, $this->source); })());
                                echo "
                                        ";
                            }
                            // line 292
                            echo "                                    ";
                        } else {
                            // line 293
                            echo "                                        ";
                            echo (isset($context["time"]) || array_key_exists("time", $context) ? $context["time"] : (function () { throw new RuntimeError('Variable "time" does not exist.', 293, $this->source); })());
                            echo "
                                    ";
                        }
                        // line 295
                        echo "                                    <span>
                                    
                                        ";
                        // line 297
                        if (((isset($context["numberOfSubmissions"]) || array_key_exists("numberOfSubmissions", $context) ? $context["numberOfSubmissions"] : (function () { throw new RuntimeError('Variable "numberOfSubmissions" does not exist.', 297, $this->source); })()) === 1)) {
                            // line 298
                            echo "                                            1 try
                                        ";
                        } else {
                            // line 300
                            echo "                                            ";
                            echo twig_escape_filter($this->env, (isset($context["numberOfSubmissions"]) || array_key_exists("numberOfSubmissions", $context) ? $context["numberOfSubmissions"] : (function () { throw new RuntimeError('Variable "numberOfSubmissions" does not exist.', 300, $this->source); })()), "html", null, true);
                            echo " tries
                                        ";
                        }
                        // line 302
                        echo "                                    </span>
                                </div>
                            </a>
                        ";
                    }
                    // line 306
                    echo "                    </td>
                    
                ";
                    // line 308
                    $context["num"] = ((isset($context["num"]) || array_key_exists("num", $context) ? $context["num"] : (function () { throw new RuntimeError('Variable "num" does not exist.', 308, $this->source); })()) + 1);
                    // line 309
                    echo "                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['problem'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 310
                echo "            ";
            }
            // line 311
            echo "        </tr>
        
    ";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['score'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 314
        echo "
    ";
        // line 316
        echo "    ";
        $this->loadTemplate("partials/scoreboard_summary.html.twig", "partials/scoreboard_table.html.twig", 316)->display(twig_array_merge($context, ["sortOrder" => (isset($context["previousSortOrder"]) || array_key_exists("previousSortOrder", $context) ? $context["previousSortOrder"] : (function () { throw new RuntimeError('Variable "previousSortOrder" does not exist.', 316, $this->source); })())]));
        // line 317
        echo "    </tbody>
</table>

";
        // line 320
        if ((isset($context["showLegends"]) || array_key_exists("showLegends", $context) ? $context["showLegends"] : (function () { throw new RuntimeError('Variable "showLegends" does not exist.', 320, $this->source); })())) {
            // line 321
            echo "    <p><br/><br/></p>

    ";
            // line 324
            echo "    ";
            if ((((null === (isset($context["limitToTeamIds"]) || array_key_exists("limitToTeamIds", $context) ? $context["limitToTeamIds"] : (function () { throw new RuntimeError('Variable "limitToTeamIds" does not exist.', 324, $this->source); })())) && (twig_length_filter($this->env, (isset($context["usedCategories"]) || array_key_exists("usedCategories", $context) ? $context["usedCategories"] : (function () { throw new RuntimeError('Variable "usedCategories" does not exist.', 324, $this->source); })())) > 1)) && (isset($context["hasDifferentCategoryColors"]) || array_key_exists("hasDifferentCategoryColors", $context) ? $context["hasDifferentCategoryColors"] : (function () { throw new RuntimeError('Variable "hasDifferentCategoryColors" does not exist.', 324, $this->source); })()))) {
                // line 325
                echo "        <table id=\"categ_legend\" class=\"scoreboard scorelegend ";
                if ((isset($context["jury"]) || array_key_exists("jury", $context) ? $context["jury"] : (function () { throw new RuntimeError('Variable "jury" does not exist.', 325, $this->source); })())) {
                    echo "scoreboard_jury";
                }
                echo "\">
            <thead>
            <tr>
                <th scope=\"col\">
                    ";
                // line 329
                $context["link"] = null;
                // line 330
                echo "                    ";
                if ((isset($context["jury"]) || array_key_exists("jury", $context) ? $context["jury"] : (function () { throw new RuntimeError('Variable "jury" does not exist.', 330, $this->source); })())) {
                    // line 331
                    echo "                        ";
                    $context["link"] = $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_team_categories");
                    // line 332
                    echo "                    ";
                }
                // line 333
                echo "                    <a ";
                if ((isset($context["link"]) || array_key_exists("link", $context) ? $context["link"] : (function () { throw new RuntimeError('Variable "link" does not exist.', 333, $this->source); })())) {
                    echo "href=\"";
                    echo twig_escape_filter($this->env, (isset($context["link"]) || array_key_exists("link", $context) ? $context["link"] : (function () { throw new RuntimeError('Variable "link" does not exist.', 333, $this->source); })()), "html", null, true);
                    echo "\"";
                }
                echo ">Categories</a>
                </th>
            </tr>
            </thead>
            <tbody>
            ";
                // line 338
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_array_filter(twig_get_attribute($this->env, $this->source, (isset($context["scoreboard"]) || array_key_exists("scoreboard", $context) ? $context["scoreboard"] : (function () { throw new RuntimeError('Variable "scoreboard" does not exist.', 338, $this->source); })()), "categories", [], "any", false, false, false, 338), function ($__category__) use ($context) { $context["category"] = $__category__; return twig_get_attribute($this->env, $this->source, ($context["usedCategories"] ?? null), twig_get_attribute($this->env, $this->source, $context["category"], "categoryid", [], "any", false, false, false, 338), [], "array", true, true, false, 338); }));
                foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                    // line 339
                    echo "                <tr ";
                    if (twig_get_attribute($this->env, $this->source, $context["category"], "color", [], "any", false, false, false, 339)) {
                        echo "style=\"background: ";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "color", [], "any", false, false, false, 339), "html", null, true);
                        echo ";\"";
                    }
                    echo ">
                    <td>
                        ";
                    // line 341
                    $context["link"] = null;
                    // line 342
                    echo "                        ";
                    if ((isset($context["jury"]) || array_key_exists("jury", $context) ? $context["jury"] : (function () { throw new RuntimeError('Variable "jury" does not exist.', 342, $this->source); })())) {
                        // line 343
                        echo "                            ";
                        $context["link"] = $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_team_category", ["categoryId" => twig_get_attribute($this->env, $this->source, $context["category"], "categoryid", [], "any", false, false, false, 343)]);
                        // line 344
                        echo "                        ";
                    }
                    // line 345
                    echo "                        <a ";
                    if ((isset($context["link"]) || array_key_exists("link", $context) ? $context["link"] : (function () { throw new RuntimeError('Variable "link" does not exist.', 345, $this->source); })())) {
                        echo "href=\"";
                        echo twig_escape_filter($this->env, (isset($context["link"]) || array_key_exists("link", $context) ? $context["link"] : (function () { throw new RuntimeError('Variable "link" does not exist.', 345, $this->source); })()), "html", null, true);
                        echo "\"";
                    }
                    echo ">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 345), "html", null, true);
                    echo "</a>
                    </td>
                </tr>
            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 349
                echo "            </tbody>
        </table>
    ";
            }
            // line 352
            echo "    ";
            if (((isset($context["showTeamSubmissions"]) || array_key_exists("showTeamSubmissions", $context) ? $context["showTeamSubmissions"] : (function () { throw new RuntimeError('Variable "showTeamSubmissions" does not exist.', 352, $this->source); })()) || (isset($context["jury"]) || array_key_exists("jury", $context) ? $context["jury"] : (function () { throw new RuntimeError('Variable "jury" does not exist.', 352, $this->source); })()))) {
                // line 353
                echo "        ";
                $context["cellColors"] = ["first" => "Solved first", "correct" => "Solved", "incorrect" => "Tried, incorrect", "pending" => "Tried, pending", "neutral" => "Untried"];
                // line 354
                echo "        <table id=\"cell_legend\" class=\"scoreboard scorelegend ";
                if ((isset($context["jury"]) || array_key_exists("jury", $context) ? $context["jury"] : (function () { throw new RuntimeError('Variable "jury" does not exist.', 354, $this->source); })())) {
                    echo "scoreboard_jury";
                }
                echo "\">
            <thead>
            <tr>
                <th scope=\"col\">Cell colours</th>
            </tr>
            </thead>
            <tbody>
            ";
                // line 361
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["cellColors"]) || array_key_exists("cellColors", $context) ? $context["cellColors"] : (function () { throw new RuntimeError('Variable "cellColors" does not exist.', 361, $this->source); })()));
                foreach ($context['_seq'] as $context["color"] => $context["description"]) {
                    // line 362
                    echo "                ";
                    if ((($context["color"] != "pending") || (isset($context["showPending"]) || array_key_exists("showPending", $context) ? $context["showPending"] : (function () { throw new RuntimeError('Variable "showPending" does not exist.', 362, $this->source); })()))) {
                        // line 363
                        echo "                    <tr class=\"score_";
                        echo twig_escape_filter($this->env, $context["color"], "html", null, true);
                        echo "\">
                        <td>";
                        // line 364
                        echo twig_escape_filter($this->env, $context["description"], "html", null, true);
                        echo "</td>
                    </tr>
                ";
                    }
                    // line 367
                    echo "            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['color'], $context['description'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 368
                echo "            </tbody>
        </table>
    ";
            }
        }
        // line 372
        echo "
<style>
    ";
        // line 374
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["backgroundColors"]) || array_key_exists("backgroundColors", $context) ? $context["backgroundColors"] : (function () { throw new RuntimeError('Variable "backgroundColors" does not exist.', 374, $this->source); })()));
        foreach ($context['_seq'] as $context["color"] => $context["i"]) {
            // line 375
            echo "        ";
            $context["colorClass"] = twig_replace_filter($context["color"], ["#" => "_"]);
            // line 376
            echo "
        .cl";
            // line 377
            echo twig_escape_filter($this->env, (isset($context["colorClass"]) || array_key_exists("colorClass", $context) ? $context["colorClass"] : (function () { throw new RuntimeError('Variable "colorClass" does not exist.', 377, $this->source); })()), "html", null, true);
            echo " {
            background-color: ";
            // line 378
            echo twig_escape_filter($this->env, $context["color"], "html", null, true);
            echo ";
        }

        ";
            // line 381
            $context["cMin"] = $this->extensions['App\Twig\TwigExtension']->hexColorToRGBA($context["color"], 0);
            // line 382
            echo "        ";
            $context["cMax"] = $this->extensions['App\Twig\TwigExtension']->hexColorToRGBA($context["color"], 1);
            // line 383
            echo "
        .cl";
            // line 384
            echo twig_escape_filter($this->env, (isset($context["colorClass"]) || array_key_exists("colorClass", $context) ? $context["colorClass"] : (function () { throw new RuntimeError('Variable "colorClass" does not exist.', 384, $this->source); })()), "html", null, true);
            echo " .forceWidth.toolong:after {
            background: linear-gradient(to right,
                ";
            // line 386
            echo twig_escape_filter($this->env, (isset($context["cMin"]) || array_key_exists("cMin", $context) ? $context["cMin"] : (function () { throw new RuntimeError('Variable "cMin" does not exist.', 386, $this->source); })()), "html", null, true);
            echo " 0%,
                ";
            // line 387
            echo twig_escape_filter($this->env, (isset($context["cMax"]) || array_key_exists("cMax", $context) ? $context["cMax"] : (function () { throw new RuntimeError('Variable "cMax" does not exist.', 387, $this->source); })()), "html", null, true);
            echo " 96%);
        }
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['color'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 390
        echo "</style>
<script>
    document.querySelectorAll(\".forceWidth:not(.toolong)\").forEach(el => {
        if (el instanceof Element && el.scrollWidth > el.offsetWidth) {
            el.classList.add(\"toolong\");
        }
    });
</script>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "partials/scoreboard_table.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1143 => 390,  1134 => 387,  1130 => 386,  1125 => 384,  1122 => 383,  1119 => 382,  1117 => 381,  1111 => 378,  1107 => 377,  1104 => 376,  1101 => 375,  1097 => 374,  1093 => 372,  1087 => 368,  1081 => 367,  1075 => 364,  1070 => 363,  1067 => 362,  1063 => 361,  1050 => 354,  1047 => 353,  1044 => 352,  1039 => 349,  1022 => 345,  1019 => 344,  1016 => 343,  1013 => 342,  1011 => 341,  1001 => 339,  997 => 338,  984 => 333,  981 => 332,  978 => 331,  975 => 330,  973 => 329,  963 => 325,  960 => 324,  956 => 321,  954 => 320,  949 => 317,  946 => 316,  943 => 314,  927 => 311,  924 => 310,  918 => 309,  916 => 308,  912 => 306,  906 => 302,  900 => 300,  896 => 298,  894 => 297,  890 => 295,  884 => 293,  881 => 292,  875 => 290,  872 => 289,  866 => 287,  863 => 286,  857 => 284,  851 => 282,  848 => 281,  845 => 280,  842 => 279,  839 => 278,  837 => 277,  833 => 276,  824 => 275,  822 => 274,  819 => 273,  816 => 272,  813 => 271,  810 => 270,  807 => 269,  805 => 268,  802 => 267,  799 => 266,  796 => 265,  793 => 264,  790 => 263,  787 => 262,  784 => 261,  781 => 260,  778 => 259,  775 => 258,  772 => 257,  769 => 256,  766 => 255,  763 => 253,  760 => 252,  757 => 251,  754 => 250,  752 => 249,  749 => 248,  746 => 247,  743 => 246,  740 => 245,  737 => 244,  734 => 243,  731 => 242,  728 => 241,  725 => 240,  722 => 239,  720 => 238,  717 => 237,  714 => 236,  711 => 235,  709 => 234,  706 => 233,  703 => 232,  700 => 231,  695 => 230,  692 => 229,  690 => 228,  683 => 224,  678 => 223,  675 => 222,  673 => 221,  670 => 220,  667 => 219,  664 => 218,  662 => 217,  658 => 215,  654 => 213,  648 => 211,  646 => 210,  643 => 209,  641 => 208,  635 => 206,  629 => 203,  626 => 202,  624 => 201,  610 => 199,  607 => 198,  604 => 197,  601 => 196,  598 => 195,  595 => 194,  592 => 193,  589 => 192,  586 => 191,  583 => 190,  580 => 189,  577 => 188,  574 => 187,  572 => 186,  565 => 185,  562 => 184,  559 => 183,  556 => 182,  553 => 181,  550 => 180,  547 => 179,  544 => 178,  540 => 176,  536 => 174,  530 => 172,  525 => 170,  518 => 169,  515 => 168,  512 => 167,  509 => 166,  506 => 165,  503 => 164,  501 => 163,  492 => 162,  489 => 161,  486 => 160,  483 => 159,  480 => 158,  478 => 157,  475 => 156,  473 => 155,  470 => 154,  467 => 153,  463 => 151,  460 => 150,  454 => 148,  449 => 146,  442 => 145,  439 => 144,  436 => 143,  434 => 142,  425 => 141,  422 => 140,  419 => 139,  416 => 138,  413 => 137,  410 => 136,  408 => 135,  404 => 133,  401 => 132,  398 => 131,  392 => 129,  390 => 128,  387 => 127,  384 => 126,  376 => 123,  373 => 122,  370 => 121,  367 => 120,  364 => 119,  361 => 118,  358 => 117,  355 => 115,  352 => 114,  349 => 113,  346 => 112,  343 => 111,  340 => 110,  337 => 109,  335 => 108,  332 => 107,  329 => 106,  326 => 105,  308 => 104,  305 => 103,  302 => 102,  300 => 101,  295 => 98,  292 => 97,  284 => 94,  273 => 91,  270 => 90,  267 => 89,  261 => 87,  259 => 86,  255 => 85,  245 => 84,  240 => 83,  237 => 82,  234 => 81,  231 => 80,  228 => 79,  225 => 78,  222 => 77,  219 => 76,  216 => 75,  213 => 74,  210 => 73,  207 => 72,  204 => 71,  201 => 70,  198 => 69,  195 => 68,  190 => 67,  188 => 66,  183 => 64,  177 => 60,  174 => 59,  171 => 58,  168 => 57,  166 => 56,  162 => 54,  159 => 53,  152 => 51,  147 => 50,  145 => 49,  136 => 42,  132 => 40,  129 => 39,  125 => 37,  121 => 35,  119 => 34,  115 => 32,  108 => 29,  105 => 28,  98 => 24,  94 => 22,  92 => 21,  90 => 20,  88 => 19,  86 => 18,  84 => 17,  82 => 16,  78 => 14,  76 => 13,  72 => 11,  70 => 10,  63 => 8,  60 => 7,  55 => 6,  52 => 5,  48 => 3,  45 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% if limitToTeams is not defined %}
    {% set limitToTeams = null %}
    {% set limitToTeamIds = null %}
{% else %}
    {% set limitToTeamIds = [] %}
    {% for team in limitToTeams %}
        {% set limitToTeamIds = limitToTeamIds | merge([team.teamid]) %}
    {% endfor %}
{% endif %}
{% if showLegends is not defined %}
    {% set showLegends = false %}
{% endif %}
{% if static is not defined %}
    {% set static = false %}
{% endif %}
{% set showPoints = scoreboard.showPoints %}
{% set usedCategories = scoreboard.usedCategories(limitToTeamIds) %}
{% set hasDifferentCategoryColors = scoreboard.categoryColors(limitToTeamIds) %}
{% set scores = scoreboard.scores | filter(score => limitToTeams is null or score.team.teamid in limitToTeamIds) %}
{% set problems = scoreboard.problems %}
{% if maxWidth > 0 %}
    <style>
        .forceWidth {
            max-width: {{ maxWidth }}px;
        }
    </style>
{% endif %}
            
<table class=\"scoreboard center {% if jury %}scoreboard_jury{% endif %}\">

    {# output table column groups (for the styles) #}
    <colgroup>
        <col id=\"scorerank\"/>
        {% if showFlags %}
            <col id=\"scoreflags\"/>
        {% else %}
            <col/>
        {% endif %}
        {% if showAffiliationLogos %}
            <col id=\"scorelogos\"/>
        {% endif %}
        <col id=\"scoreteamname\"/>
    </colgroup>
    <colgroup>
        <col id=\"scoresolv\"/>
        <col id=\"scoretotal\"/>
    </colgroup>
    <colgroup>
        {% if showTeamSubmissions or jury %}
            {% for problem in problems %}
                <col class=\"scoreprob\"/>
            {% endfor %}
        {% endif %}
    </colgroup>

    {% set teamColspan = 2 %}
    {% if showAffiliationLogos %}
        {% set teamColspan = teamColspan + 1 %}
    {% endif %}

    <thead>
    <tr class=\"scoreheader\">
        <th title=\"rank\" scope=\"col\">rank</th>
        <th title=\"team name\" scope=\"col\" colspan=\"{{ teamColspan }}\">team</th>
        <th title=\"# solved / penalty time\" colspan=\"2\" scope=\"col\">score</th>
        {% if showTeamSubmissions or jury %}
            {% for problem in problems %}
                {% set link = null %}
                {% set target = '_self' %}
                {% if not static %}
                    {% if jury %}
                        {% set link = path('jury_problem', {'probId': problem.probid}) %}
                    {% elseif problem.problem.hasProblemtext %}
                        {% if public %}
                            {% set link = path('public_problem_text', {probId: problem.probid}) %}
                            {% set target = '_blank' %}
                        {% else %}
                            {% set link = path('team_problem_text', {probId: problem.probid}) %}
                            {% set target = '_blank' %}
                        {% endif %}
                    {% endif %}
                {% endif %}
                <th title=\"problem {{ problem.problem.name }}\" scope=\"col\">
                    <a {% if link %}href=\"{{ link }}\"{% endif %} target=\"{{ target }}\">
                        {{ problem.shortname }}
                        {% if problem.color is not empty %}
                            <div class=\"circle\" style=\"background: {{ problem.color }};\"></div>
                        {% endif %}
                        {% if showPoints %}
                            <span class='problempoints'>
                                [{% if problem.points == 1 %}1 point{% else %}{{ problem.points }} points{% endif %}]
                            </span>
                        {% endif %}
                    </a>
                </th>
            {% endfor %}
        {% endif %}
    </tr>
    </thead>
    <tbody>
    {% set previousSortOrder = -1 %}
    {% set previousTeam = null %}
    {% set backgroundColors = {\"#FFFFFF\": 1} %}
    {% for score in scores %}
        {% set classes = [] %}
        {% if score.team.category.sortorder != previousSortOrder %}
            {% if previousSortOrder != -1 %}
                {# Output summary of previous sort order #}
                {% include 'partials/scoreboard_summary.html.twig' with {sortOrder: previousSortOrder} %}
            {% endif %}
            {% set classes = classes | merge(['sortorderswitch']) %}
            {% set previousSortOrder = score.team.category.sortorder %}
            {% set previousTeam = null %}
        {% endif %}

        {# check whether this is us, otherwise use category colour #}
        {% if myTeamId is defined and myTeamId == score.team.teamid %}
            {% set classes = classes | merge(['scorethisisme']) %}
            {% set color = '#FFFF99' %}
        {% else %}
            {% set color = score.team.category.color %}
        {% endif %}
        <tr class=\"{{ classes | join(' ') }}\" id=\"team:{{ score.team.teamid }}\">
            <td class=\"scorepl\">
                {# Only print rank when score is different from the previous team #}
                {% if not displayRank %}
                    ?
                {% elseif previousTeam is null or scoreboard.scores[previousTeam.teamid].rank != score.rank %}
                    {{ score.rank }}
                {% else %}
                {% endif %}
                {% set previousTeam = score.team %}
            </td>
            <td class=\"scoreaf\">
                {% if showFlags %}
                    {% if score.team.affiliation %}
                        {% set link = null %}
                        {% if jury %}
                            {% set link = path('jury_team_affiliation', {'affilId': score.team.affilid}) %}
                        {% endif %}
                        <a {% if link %}href=\"{{ link }}\"{% endif %}>
                            {% if score.team.affiliation.country %}
                                {% set countryFlag = 'images/countries/' ~ score.team.affiliation.country ~ '.png' %}
                                {% if countryFlag | assetExists %}
                                    <img src=\"{{ asset(countryFlag) }}\" alt=\"{{ alpha3_countries[score.team.affiliation.country] }}\"
                                         title=\"{{ alpha3_countries[score.team.affiliation.country] }}\" class=\"countryflag\"/>
                                {% else %}
                                    {{ alpha3_countries[score.team.affiliation.country] }}
                                {% endif %}
                            {% endif %}
                        </a>
                    {% endif %}
                {% endif %}
            </td>
            {% if showAffiliationLogos %}
                <td class=\"scoreaf\">
                    {% if score.team.affiliation %}
                        {% set link = null %}
                        {% if jury %}
                            {% set link = path('jury_team_affiliation', {'affilId': score.team.affilid}) %}
                        {% endif %}
                        <a {% if link %}href=\"{{ link }}\"{% endif %}>
                            {% set affiliationId = score.team.affiliation.affilid %}
                            {% if showExternalId(score.team.affiliation) %}
                                {% set affiliationId = score.team.affiliation.externalid %}
                            {% endif %}
                            {% set affiliationImage = 'images/affiliations/' ~ affiliationId ~ '.png' %}
                            {% if affiliationImage | assetExists %}
                                <img src=\"{{ asset(affiliationImage) }}\" alt=\"{{ score.team.affiliation.name }}\"
                                     title=\"{{ score.team.affiliation.name }}\" class=\"affiliation-logo\">
                            {% else %}
                                {{ affiliationId }}
                            {% endif %}
                        </a>
                    {% endif %}
                </td>
            {% endif %}
            {% if color is null %}
                {% set color = \"#FFFFFF\" %}
                {% set colorClass = \"_FFFFFF\" %}
            {% else %}
                {% set colorClass = color | replace({\"#\": \"_\"}) %}
                {% set backgroundColors = backgroundColors | merge({(color): 1}) %}
            {% endif %}
            <td class=\"scoretn cl{{ colorClass }}\" title=\"{{ score.team.name }}\">
                {% set link = null %}
                {% set extra = null %}
                {% if not static %}
                    {% if jury %}
                        {% set link = path('jury_team', {teamId: score.team.teamid}) %}
                    {% elseif public %}
                        {% set link = path('public_team', {teamId: score.team.teamid}) %}
                        {% set extra = 'data-ajax-modal' %}
                    {% else %}
                        {% set link = path('team_team', {teamId: score.team.teamid}) %}
                        {% set extra = 'data-ajax-modal' %}
                    {% endif %}
                {% endif %}
                <a {% if extra is not null %}{{ extra }}{% endif %} {% if link is not null %}href=\"{{ link }}\"{% endif %}>
                    <span class=\"forceWidth\">
                        {% if usedCategories | length > 1 and scoreboard.bestInCategory(score.team, limitToTeamIds) %}
                            <span class=\"badge badge-warning\" style=\"margin-right: 2em; font-weight: normal;\">
                            {{ score.team.category.name }}
                        </span>
                        {% endif %}
                        {{ score.team.name }}
                    </span>
                    {% if showAffiliations %}
                        <span class=\"univ forceWidth\">
                            {% if score.team.affiliation %}
                                {{ score.team.affiliation.name }}
                            {% endif %}
                        </span>
                    {% endif %}
                </a>
            </td>
            {% set totalTime = score.totalTime %}
            {% if scoreInSeconds %}
                {% set totalTime = totalTime | printTimeRelative %}
            {% endif %}
            {#{dump(score.numberOfPoints)}#}
            {% set totalPoints = score.numberOfPoints %}
            <td class=\"scorenc\">{{ totalPoints }}</td>
            <td class=\"scorett\">{{ totalTime }}</td>
            
            
         
            {% if showTeamSubmissions or jury %}
            {% set num = 0 %}
                {% for problem in problems %}
                {% if scoreboard.Scorecache[num] is defined and scoreboard.Scorecache[num] is not empty %}
                {% set Scorecache = scoreboard.Scorecache[num] %}
                {% endif %}
                    {# CSS class for correct/incorrect/neutral results #}
                    {% set scoreCssClass = 'score_neutral' %}
                    {% set matrixItem = scoreboard.matrix[score.team.teamid][problem.probid] %}
                    
                    {% if matrixItem.isCorrect %}
                        {% set scoreCssClass = 'score_correct' %}
                        {% if scoreboard.solvedFirst(score.team, problem) %}
                            {% set scoreCssClass = scoreCssClass ~ ' score_first' %}
                        {% endif %}
                    {% elseif showPending and matrixItem.numberOfPendingSubmissions > 0 %}
                        {% set scoreCssClass = 'score_pending' %}
                    {% elseif matrixItem.numberOfSubmissions > 0 %}
                        {% set scoreCssClass = 'score_incorrect' %}
                    {% endif %}

                    {% set numberOfSubmissions = matrixItem.numberOfSubmissions %}
                    {% if showPending and matrixItem.numberOfPendingSubmissions > 0 %}
                        {% set numberOfSubmissions = numberOfSubmissions ~ ' + ' ~ matrixItem.numberOfPendingSubmissions %}
                    {% endif %}

                    {# If correct, print time scored. The format will vary depending on the scoreboard resolution setting #}
                    {% set time = '&nbsp;' %}
                    {% if matrixItem.isCorrect %}
                        {% set time = matrixItem.time %}
                        {% if scoreInSeconds %}
                            {% set time = time | scoreTime | printTimeRelative %}
                            {% if matrixItem.numberOfSubmissions > 1 %}
                                {% set time = time ~ ' + ' ~ (calculatePenaltyTime(true, matrixItem.numberOfSubmissions) | printTimeRelative) %}
                            {% endif %}
                        {% else %}
                            {% set time = time | scoreTime %}
                        {% endif %}
                    {% endif %}

                    {% set link = null %}
                    {% if jury %}
                        {% set restrict = {probid: problem.probid} %}
                        {% set link = path('jury_team', {teamId: score.team.teamid, restrict: restrict}) %}
                    {% endif %}
                    <td class=\"score_cell\">
                        {% if numberOfSubmissions != '0' %}
                            <a {% if link %}href=\"{{ link }}\"{% endif %}>
                                <div class=\"{{ scoreCssClass }}\">
                                    {% if time == '&nbsp;' %}
                                        {% if Scorecache is defined and scoreInSeconds == false %}
                                            {% if matrixItem.AllTaskPoint is not empty and matrixItem.AllTaskPoint[1] is defined %}
                                                {% set A = matrixItem.AllTaskPoint[1] / matrixItem.AllTaskPoint[0] * problem.points  %}
                                                {% if A != 0 and problem.subtask is not empty and problem.subtask != 0 %}
                                                    {{A | round }} points
                                                {% else %}
                                                    {{ time| raw }}
                                                {% endif %}
                                            {% else %}
                                                {{ time| raw }} 
                                            {% endif %}
                                        {% else %}
                                            {{ time| raw }}
                                        {% endif %}
                                    {% else %}
                                        {{ time| raw }}
                                    {% endif %}
                                    <span>
                                    
                                        {% if numberOfSubmissions is same as(1) %}
                                            1 try
                                        {% else %}
                                            {{ numberOfSubmissions }} tries
                                        {% endif %}
                                    </span>
                                </div>
                            </a>
                        {% endif %}
                    </td>
                    
                {% set num = num + 1%}
                {% endfor %}
            {% endif %}
        </tr>
        
    {% endfor %}

    {# Output summary of last sort order #}
    {% include 'partials/scoreboard_summary.html.twig' with {sortOrder: previousSortOrder} %}
    </tbody>
</table>

{% if showLegends %}
    <p><br/><br/></p>

    {# only print legend when there's more than one category #}
    {% if limitToTeamIds is null and usedCategories | length > 1 and hasDifferentCategoryColors %}
        <table id=\"categ_legend\" class=\"scoreboard scorelegend {% if jury %}scoreboard_jury{% endif %}\">
            <thead>
            <tr>
                <th scope=\"col\">
                    {% set link = null %}
                    {% if jury %}
                        {% set link = path('jury_team_categories') %}
                    {% endif %}
                    <a {% if link %}href=\"{{ link }}\"{% endif %}>Categories</a>
                </th>
            </tr>
            </thead>
            <tbody>
            {% for category in scoreboard.categories | filter(category => usedCategories[category.categoryid] is defined) %}
                <tr {% if category.color %}style=\"background: {{ category.color }};\"{% endif %}>
                    <td>
                        {% set link = null %}
                        {% if jury %}
                            {% set link = path('jury_team_category', {'categoryId': category.categoryid}) %}
                        {% endif %}
                        <a {% if link %}href=\"{{ link }}\"{% endif %}>{{ category.name }}</a>
                    </td>
                </tr>
            {% endfor %}
            </tbody>
        </table>
    {% endif %}
    {% if showTeamSubmissions or jury %}
        {% set cellColors = {first: 'Solved first', correct: 'Solved', incorrect: 'Tried, incorrect', pending: 'Tried, pending', neutral: 'Untried'} %}
        <table id=\"cell_legend\" class=\"scoreboard scorelegend {% if jury %}scoreboard_jury{% endif %}\">
            <thead>
            <tr>
                <th scope=\"col\">Cell colours</th>
            </tr>
            </thead>
            <tbody>
            {% for color, description in cellColors %}
                {% if color != 'pending' or showPending %}
                    <tr class=\"score_{{ color }}\">
                        <td>{{ description }}</td>
                    </tr>
                {% endif %}
            {% endfor %}
            </tbody>
        </table>
    {% endif %}
{% endif %}

<style>
    {% for color,i in backgroundColors %}
        {% set colorClass = color | replace({\"#\": \"_\"}) %}

        .cl{{ colorClass }} {
            background-color: {{ color }};
        }

        {% set cMin = color|hexColorToRGBA(0) %}
        {% set cMax = color|hexColorToRGBA(1) %}

        .cl{{ colorClass }} .forceWidth.toolong:after {
            background: linear-gradient(to right,
                {{ cMin }} 0%,
                {{ cMax }} 96%);
        }
    {% endfor %}
</style>
<script>
    document.querySelectorAll(\".forceWidth:not(.toolong)\").forEach(el => {
        if (el instanceof Element && el.scrollWidth > el.offsetWidth) {
            el.classList.add(\"toolong\");
        }
    });
</script>
", "partials/scoreboard_table.html.twig", "/opt/domjudge/domserver/webapp/templates/partials/scoreboard_table.html.twig");
    }
}
