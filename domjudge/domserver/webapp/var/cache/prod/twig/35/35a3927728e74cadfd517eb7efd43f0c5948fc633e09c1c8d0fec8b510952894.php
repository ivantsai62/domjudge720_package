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
class __TwigTemplate_d781bf68fb82b5d5213a15f52028e4213c1ebbde3df40a3987a5763e67dc3c16 extends \Twig\Template
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
            $context['_seq'] = twig_ensure_traversable(($context["limitToTeams"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["team"]) {
                // line 7
                echo "        ";
                $context["limitToTeamIds"] = twig_array_merge(($context["limitToTeamIds"] ?? null), [0 => twig_get_attribute($this->env, $this->source, $context["team"], "teamid", [], "any", false, false, false, 7)]);
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
        $context["showPoints"] = twig_get_attribute($this->env, $this->source, ($context["scoreboard"] ?? null), "showPoints", [], "any", false, false, false, 16);
        // line 17
        $context["usedCategories"] = twig_get_attribute($this->env, $this->source, ($context["scoreboard"] ?? null), "usedCategories", [0 => ($context["limitToTeamIds"] ?? null)], "method", false, false, false, 17);
        // line 18
        $context["hasDifferentCategoryColors"] = twig_get_attribute($this->env, $this->source, ($context["scoreboard"] ?? null), "categoryColors", [0 => ($context["limitToTeamIds"] ?? null)], "method", false, false, false, 18);
        // line 19
        $context["scores"] = twig_array_filter(twig_get_attribute($this->env, $this->source, ($context["scoreboard"] ?? null), "scores", [], "any", false, false, false, 19), function ($__score__) use ($context) { $context["score"] = $__score__; return ((null === ($context["limitToTeams"] ?? null)) || twig_in_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["score"] ?? null), "team", [], "any", false, false, false, 19), "teamid", [], "any", false, false, false, 19), ($context["limitToTeamIds"] ?? null))); });
        // line 20
        $context["problems"] = twig_get_attribute($this->env, $this->source, ($context["scoreboard"] ?? null), "problems", [], "any", false, false, false, 20);
        // line 21
        if ((($context["maxWidth"] ?? null) > 0)) {
            // line 22
            echo "    <style>
        .forceWidth {
            max-width: ";
            // line 24
            echo twig_escape_filter($this->env, ($context["maxWidth"] ?? null), "html", null, true);
            echo "px;
        }
    </style>
";
        }
        // line 28
        echo "
            
<table class=\"scoreboard center ";
        // line 30
        if (($context["jury"] ?? null)) {
            echo "scoreboard_jury";
        }
        echo "\">

    ";
        // line 33
        echo "    <colgroup>
        <col id=\"scorerank\"/>
        ";
        // line 35
        if (($context["showFlags"] ?? null)) {
            // line 36
            echo "            <col id=\"scoreflags\"/>
        ";
        } else {
            // line 38
            echo "            <col/>
        ";
        }
        // line 40
        echo "        ";
        if (($context["showAffiliationLogos"] ?? null)) {
            // line 41
            echo "            <col id=\"scorelogos\"/>
        ";
        }
        // line 43
        echo "        <col id=\"scoreteamname\"/>
    </colgroup>
    <colgroup>
        <col id=\"scoresolv\"/>
        <col id=\"scoretotal\"/>
    </colgroup>
    <colgroup>
        ";
        // line 50
        if ((($context["showTeamSubmissions"] ?? null) || ($context["jury"] ?? null))) {
            // line 51
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["problems"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["problem"]) {
                // line 52
                echo "                <col class=\"scoreprob\"/>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['problem'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 54
            echo "        ";
        }
        // line 55
        echo "    </colgroup>

    ";
        // line 57
        $context["teamColspan"] = 2;
        // line 58
        echo "    ";
        if (($context["showAffiliationLogos"] ?? null)) {
            // line 59
            echo "        ";
            $context["teamColspan"] = (($context["teamColspan"] ?? null) + 1);
            // line 60
            echo "    ";
        }
        // line 61
        echo "
    <thead>
    <tr class=\"scoreheader\">
        <th title=\"rank\" scope=\"col\">rank</th>
        <th title=\"team name\" scope=\"col\" colspan=\"";
        // line 65
        echo twig_escape_filter($this->env, ($context["teamColspan"] ?? null), "html", null, true);
        echo "\">team</th>
        <th title=\"# solved / penalty time\" colspan=\"2\" scope=\"col\">score</th>
        ";
        // line 67
        if ((($context["showTeamSubmissions"] ?? null) || ($context["jury"] ?? null))) {
            // line 68
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["problems"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["problem"]) {
                // line 69
                echo "                ";
                $context["link"] = null;
                // line 70
                echo "                ";
                $context["target"] = "_self";
                // line 71
                echo "                ";
                if ( !($context["static"] ?? null)) {
                    // line 72
                    echo "                    ";
                    if (($context["jury"] ?? null)) {
                        // line 73
                        echo "                        ";
                        $context["link"] = $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_problem", ["probId" => twig_get_attribute($this->env, $this->source, $context["problem"], "probid", [], "any", false, false, false, 73)]);
                        // line 74
                        echo "                    ";
                    } elseif (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["problem"], "problem", [], "any", false, false, false, 74), "hasProblemtext", [], "any", false, false, false, 74)) {
                        // line 75
                        echo "                        ";
                        if (($context["public"] ?? null)) {
                            // line 76
                            echo "                            ";
                            $context["link"] = $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("public_problem_text", ["probId" => twig_get_attribute($this->env, $this->source, $context["problem"], "probid", [], "any", false, false, false, 76)]);
                            // line 77
                            echo "                            ";
                            $context["target"] = "_blank";
                            // line 78
                            echo "                        ";
                        } else {
                            // line 79
                            echo "                            ";
                            $context["link"] = $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("team_problem_text", ["probId" => twig_get_attribute($this->env, $this->source, $context["problem"], "probid", [], "any", false, false, false, 79)]);
                            // line 80
                            echo "                            ";
                            $context["target"] = "_blank";
                            // line 81
                            echo "                        ";
                        }
                        // line 82
                        echo "                    ";
                    }
                    // line 83
                    echo "                ";
                }
                // line 84
                echo "                <th title=\"problem ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["problem"], "problem", [], "any", false, false, false, 84), "name", [], "any", false, false, false, 84), "html", null, true);
                echo "\" scope=\"col\">
                    <a ";
                // line 85
                if (($context["link"] ?? null)) {
                    echo "href=\"";
                    echo twig_escape_filter($this->env, ($context["link"] ?? null), "html", null, true);
                    echo "\"";
                }
                echo " target=\"";
                echo twig_escape_filter($this->env, ($context["target"] ?? null), "html", null, true);
                echo "\">
                        ";
                // line 86
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["problem"], "shortname", [], "any", false, false, false, 86), "html", null, true);
                echo "
                        ";
                // line 87
                if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, $context["problem"], "color", [], "any", false, false, false, 87))) {
                    // line 88
                    echo "                            <div class=\"circle\" style=\"background: ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["problem"], "color", [], "any", false, false, false, 88), "html", null, true);
                    echo ";\"></div>
                        ";
                }
                // line 90
                echo "                        ";
                if (($context["showPoints"] ?? null)) {
                    // line 91
                    echo "                            <span class='problempoints'>
                                [";
                    // line 92
                    if ((twig_get_attribute($this->env, $this->source, $context["problem"], "points", [], "any", false, false, false, 92) == 1)) {
                        echo "1 point";
                    } else {
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["problem"], "points", [], "any", false, false, false, 92), "html", null, true);
                        echo " points";
                    }
                    echo "]
                            </span>
                        ";
                }
                // line 95
                echo "                    </a>
                </th>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['problem'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 98
            echo "        ";
        }
        // line 99
        echo "    </tr>
    </thead>
    <tbody>
    ";
        // line 102
        $context["previousSortOrder"] =  -1;
        // line 103
        echo "    ";
        $context["previousTeam"] = null;
        // line 104
        echo "    ";
        $context["backgroundColors"] = ["#FFFFFF" => 1];
        // line 105
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["scores"] ?? null));
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
            // line 106
            echo "        ";
            $context["classes"] = [];
            // line 107
            echo "        ";
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["score"], "team", [], "any", false, false, false, 107), "category", [], "any", false, false, false, 107), "sortorder", [], "any", false, false, false, 107) != ($context["previousSortOrder"] ?? null))) {
                // line 108
                echo "            ";
                if ((($context["previousSortOrder"] ?? null) !=  -1)) {
                    // line 109
                    echo "                ";
                    // line 110
                    echo "                ";
                    $this->loadTemplate("partials/scoreboard_summary.html.twig", "partials/scoreboard_table.html.twig", 110)->display(twig_array_merge($context, ["sortOrder" => ($context["previousSortOrder"] ?? null)]));
                    // line 111
                    echo "            ";
                }
                // line 112
                echo "            ";
                $context["classes"] = twig_array_merge(($context["classes"] ?? null), [0 => "sortorderswitch"]);
                // line 113
                echo "            ";
                $context["previousSortOrder"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["score"], "team", [], "any", false, false, false, 113), "category", [], "any", false, false, false, 113), "sortorder", [], "any", false, false, false, 113);
                // line 114
                echo "            ";
                $context["previousTeam"] = null;
                // line 115
                echo "        ";
            }
            // line 116
            echo "
        ";
            // line 118
            echo "        ";
            if (((isset($context["myTeamId"]) || array_key_exists("myTeamId", $context)) && (($context["myTeamId"] ?? null) == twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["score"], "team", [], "any", false, false, false, 118), "teamid", [], "any", false, false, false, 118)))) {
                // line 119
                echo "            ";
                $context["classes"] = twig_array_merge(($context["classes"] ?? null), [0 => "scorethisisme"]);
                // line 120
                echo "            ";
                $context["color"] = "#FFFF99";
                // line 121
                echo "        ";
            } else {
                // line 122
                echo "            ";
                $context["color"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["score"], "team", [], "any", false, false, false, 122), "category", [], "any", false, false, false, 122), "color", [], "any", false, false, false, 122);
                // line 123
                echo "        ";
            }
            // line 124
            echo "        <tr class=\"";
            echo twig_escape_filter($this->env, twig_join_filter(($context["classes"] ?? null), " "), "html", null, true);
            echo "\" id=\"team:";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["score"], "team", [], "any", false, false, false, 124), "teamid", [], "any", false, false, false, 124), "html", null, true);
            echo "\">
            <td class=\"scorepl\">
                ";
            // line 127
            echo "                ";
            if ( !($context["displayRank"] ?? null)) {
                // line 128
                echo "                    ?
                ";
            } elseif (((null ===             // line 129
($context["previousTeam"] ?? null)) || (twig_get_attribute($this->env, $this->source, (($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = twig_get_attribute($this->env, $this->source, ($context["scoreboard"] ?? null), "scores", [], "any", false, false, false, 129)) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4[twig_get_attribute($this->env, $this->source, ($context["previousTeam"] ?? null), "teamid", [], "any", false, false, false, 129)] ?? null) : null), "rank", [], "any", false, false, false, 129) != twig_get_attribute($this->env, $this->source, $context["score"], "rank", [], "any", false, false, false, 129)))) {
                // line 130
                echo "                    ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["score"], "rank", [], "any", false, false, false, 130), "html", null, true);
                echo "
                ";
            } else {
                // line 132
                echo "                ";
            }
            // line 133
            echo "                ";
            $context["previousTeam"] = twig_get_attribute($this->env, $this->source, $context["score"], "team", [], "any", false, false, false, 133);
            // line 134
            echo "            </td>
            <td class=\"scoreaf\">
                ";
            // line 136
            if (($context["showFlags"] ?? null)) {
                // line 137
                echo "                    ";
                if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["score"], "team", [], "any", false, false, false, 137), "affiliation", [], "any", false, false, false, 137)) {
                    // line 138
                    echo "                        ";
                    $context["link"] = null;
                    // line 139
                    echo "                        ";
                    if (($context["jury"] ?? null)) {
                        // line 140
                        echo "                            ";
                        $context["link"] = $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_team_affiliation", ["affilId" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["score"], "team", [], "any", false, false, false, 140), "affilid", [], "any", false, false, false, 140)]);
                        // line 141
                        echo "                        ";
                    }
                    // line 142
                    echo "                        <a ";
                    if (($context["link"] ?? null)) {
                        echo "href=\"";
                        echo twig_escape_filter($this->env, ($context["link"] ?? null), "html", null, true);
                        echo "\"";
                    }
                    echo ">
                            ";
                    // line 143
                    if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["score"], "team", [], "any", false, false, false, 143), "affiliation", [], "any", false, false, false, 143), "country", [], "any", false, false, false, 143)) {
                        // line 144
                        echo "                                ";
                        $context["countryFlag"] = (("images/countries/" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["score"], "team", [], "any", false, false, false, 144), "affiliation", [], "any", false, false, false, 144), "country", [], "any", false, false, false, 144)) . ".png");
                        // line 145
                        echo "                                ";
                        if ($this->extensions['App\Twig\TwigExtension']->assetExists(($context["countryFlag"] ?? null))) {
                            // line 146
                            echo "                                    <img src=\"";
                            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(($context["countryFlag"] ?? null)), "html", null, true);
                            echo "\" alt=\"";
                            echo twig_escape_filter($this->env, (($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = ($context["alpha3_countries"] ?? null)) && is_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) || $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 instanceof ArrayAccess ? ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144[twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["score"], "team", [], "any", false, false, false, 146), "affiliation", [], "any", false, false, false, 146), "country", [], "any", false, false, false, 146)] ?? null) : null), "html", null, true);
                            echo "\"
                                         title=\"";
                            // line 147
                            echo twig_escape_filter($this->env, (($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b = ($context["alpha3_countries"] ?? null)) && is_array($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b) || $__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b instanceof ArrayAccess ? ($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b[twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["score"], "team", [], "any", false, false, false, 147), "affiliation", [], "any", false, false, false, 147), "country", [], "any", false, false, false, 147)] ?? null) : null), "html", null, true);
                            echo "\" class=\"countryflag\"/>
                                ";
                        } else {
                            // line 149
                            echo "                                    ";
                            echo twig_escape_filter($this->env, (($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 = ($context["alpha3_countries"] ?? null)) && is_array($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002) || $__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 instanceof ArrayAccess ? ($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002[twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["score"], "team", [], "any", false, false, false, 149), "affiliation", [], "any", false, false, false, 149), "country", [], "any", false, false, false, 149)] ?? null) : null), "html", null, true);
                            echo "
                                ";
                        }
                        // line 151
                        echo "                            ";
                    }
                    // line 152
                    echo "                        </a>
                    ";
                }
                // line 154
                echo "                ";
            }
            // line 155
            echo "            </td>
            ";
            // line 156
            if (($context["showAffiliationLogos"] ?? null)) {
                // line 157
                echo "                <td class=\"scoreaf\">
                    ";
                // line 158
                if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["score"], "team", [], "any", false, false, false, 158), "affiliation", [], "any", false, false, false, 158)) {
                    // line 159
                    echo "                        ";
                    $context["link"] = null;
                    // line 160
                    echo "                        ";
                    if (($context["jury"] ?? null)) {
                        // line 161
                        echo "                            ";
                        $context["link"] = $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_team_affiliation", ["affilId" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["score"], "team", [], "any", false, false, false, 161), "affilid", [], "any", false, false, false, 161)]);
                        // line 162
                        echo "                        ";
                    }
                    // line 163
                    echo "                        <a ";
                    if (($context["link"] ?? null)) {
                        echo "href=\"";
                        echo twig_escape_filter($this->env, ($context["link"] ?? null), "html", null, true);
                        echo "\"";
                    }
                    echo ">
                            ";
                    // line 164
                    $context["affiliationId"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["score"], "team", [], "any", false, false, false, 164), "affiliation", [], "any", false, false, false, 164), "affilid", [], "any", false, false, false, 164);
                    // line 165
                    echo "                            ";
                    if ($this->extensions['App\Twig\TwigExtension']->showExternalId(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["score"], "team", [], "any", false, false, false, 165), "affiliation", [], "any", false, false, false, 165))) {
                        // line 166
                        echo "                                ";
                        $context["affiliationId"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["score"], "team", [], "any", false, false, false, 166), "affiliation", [], "any", false, false, false, 166), "externalid", [], "any", false, false, false, 166);
                        // line 167
                        echo "                            ";
                    }
                    // line 168
                    echo "                            ";
                    $context["affiliationImage"] = (("images/affiliations/" . ($context["affiliationId"] ?? null)) . ".png");
                    // line 169
                    echo "                            ";
                    if ($this->extensions['App\Twig\TwigExtension']->assetExists(($context["affiliationImage"] ?? null))) {
                        // line 170
                        echo "                                <img src=\"";
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(($context["affiliationImage"] ?? null)), "html", null, true);
                        echo "\" alt=\"";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["score"], "team", [], "any", false, false, false, 170), "affiliation", [], "any", false, false, false, 170), "name", [], "any", false, false, false, 170), "html", null, true);
                        echo "\"
                                     title=\"";
                        // line 171
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["score"], "team", [], "any", false, false, false, 171), "affiliation", [], "any", false, false, false, 171), "name", [], "any", false, false, false, 171), "html", null, true);
                        echo "\" class=\"affiliation-logo\">
                            ";
                    } else {
                        // line 173
                        echo "                                ";
                        echo twig_escape_filter($this->env, ($context["affiliationId"] ?? null), "html", null, true);
                        echo "
                            ";
                    }
                    // line 175
                    echo "                        </a>
                    ";
                }
                // line 177
                echo "                </td>
            ";
            }
            // line 179
            echo "            ";
            if ((null === ($context["color"] ?? null))) {
                // line 180
                echo "                ";
                $context["color"] = "#FFFFFF";
                // line 181
                echo "                ";
                $context["colorClass"] = "_FFFFFF";
                // line 182
                echo "            ";
            } else {
                // line 183
                echo "                ";
                $context["colorClass"] = twig_replace_filter(($context["color"] ?? null), ["#" => "_"]);
                // line 184
                echo "                ";
                $context["backgroundColors"] = twig_array_merge(($context["backgroundColors"] ?? null), [($context["color"] ?? null) => 1]);
                // line 185
                echo "            ";
            }
            // line 186
            echo "            <td class=\"scoretn cl";
            echo twig_escape_filter($this->env, ($context["colorClass"] ?? null), "html", null, true);
            echo "\" title=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["score"], "team", [], "any", false, false, false, 186), "name", [], "any", false, false, false, 186), "html", null, true);
            echo "\">
                ";
            // line 187
            $context["link"] = null;
            // line 188
            echo "                ";
            $context["extra"] = null;
            // line 189
            echo "                ";
            if ( !($context["static"] ?? null)) {
                // line 190
                echo "                    ";
                if (($context["jury"] ?? null)) {
                    // line 191
                    echo "                        ";
                    $context["link"] = $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_team", ["teamId" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["score"], "team", [], "any", false, false, false, 191), "teamid", [], "any", false, false, false, 191)]);
                    // line 192
                    echo "                    ";
                } elseif (($context["public"] ?? null)) {
                    // line 193
                    echo "                        ";
                    $context["link"] = $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("public_team", ["teamId" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["score"], "team", [], "any", false, false, false, 193), "teamid", [], "any", false, false, false, 193)]);
                    // line 194
                    echo "                        ";
                    $context["extra"] = "data-ajax-modal";
                    // line 195
                    echo "                    ";
                } else {
                    // line 196
                    echo "                        ";
                    $context["link"] = $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("team_team", ["teamId" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["score"], "team", [], "any", false, false, false, 196), "teamid", [], "any", false, false, false, 196)]);
                    // line 197
                    echo "                        ";
                    $context["extra"] = "data-ajax-modal";
                    // line 198
                    echo "                    ";
                }
                // line 199
                echo "                ";
            }
            // line 200
            echo "                <a ";
            if ( !(null === ($context["extra"] ?? null))) {
                echo twig_escape_filter($this->env, ($context["extra"] ?? null), "html", null, true);
            }
            echo " ";
            if ( !(null === ($context["link"] ?? null))) {
                echo "href=\"";
                echo twig_escape_filter($this->env, ($context["link"] ?? null), "html", null, true);
                echo "\"";
            }
            echo ">
                    <span class=\"forceWidth\">
                        ";
            // line 202
            if (((twig_length_filter($this->env, ($context["usedCategories"] ?? null)) > 1) && twig_get_attribute($this->env, $this->source, ($context["scoreboard"] ?? null), "bestInCategory", [0 => twig_get_attribute($this->env, $this->source, $context["score"], "team", [], "any", false, false, false, 202), 1 => ($context["limitToTeamIds"] ?? null)], "method", false, false, false, 202))) {
                // line 203
                echo "                            <span class=\"badge badge-warning\" style=\"margin-right: 2em; font-weight: normal;\">
                            ";
                // line 204
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["score"], "team", [], "any", false, false, false, 204), "category", [], "any", false, false, false, 204), "name", [], "any", false, false, false, 204), "html", null, true);
                echo "
                        </span>
                        ";
            }
            // line 207
            echo "                        ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["score"], "team", [], "any", false, false, false, 207), "name", [], "any", false, false, false, 207), "html", null, true);
            echo "
                    </span>
                    ";
            // line 209
            if (($context["showAffiliations"] ?? null)) {
                // line 210
                echo "                        <span class=\"univ forceWidth\">
                            ";
                // line 211
                if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["score"], "team", [], "any", false, false, false, 211), "affiliation", [], "any", false, false, false, 211)) {
                    // line 212
                    echo "                                ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["score"], "team", [], "any", false, false, false, 212), "affiliation", [], "any", false, false, false, 212), "name", [], "any", false, false, false, 212), "html", null, true);
                    echo "
                            ";
                }
                // line 214
                echo "                        </span>
                    ";
            }
            // line 216
            echo "                </a>
            </td>
            ";
            // line 218
            $context["totalTime"] = twig_get_attribute($this->env, $this->source, $context["score"], "totalTime", [], "any", false, false, false, 218);
            // line 219
            echo "            ";
            if (($context["scoreInSeconds"] ?? null)) {
                // line 220
                echo "                ";
                $context["totalTime"] = $this->extensions['App\Twig\TwigExtension']->printTimeRelative(($context["totalTime"] ?? null));
                // line 221
                echo "            ";
            }
            // line 222
            echo "            ";
            $context["totalPoints"] = twig_get_attribute($this->env, $this->source, $context["score"], "numberOfPoints", [], "any", false, false, false, 222);
            // line 223
            echo "            <td class=\"scorenc\">";
            echo twig_escape_filter($this->env, ($context["totalPoints"] ?? null), "html", null, true);
            echo "</td>
            <td class=\"scorett\">";
            // line 224
            echo twig_escape_filter($this->env, ($context["totalTime"] ?? null), "html", null, true);
            echo "</td>
            
            
            ";
            // line 227
            if ((($context["showTeamSubmissions"] ?? null) || ($context["jury"] ?? null))) {
                // line 228
                echo "            ";
                $context["num"] = 0;
                // line 229
                echo "                ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["problems"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["problem"]) {
                    // line 230
                    echo "                ";
                    if (twig_get_attribute($this->env, $this->source, ($context["scoreboard"] ?? null), "Scorecache", [], "any", true, true, false, 230)) {
                        // line 231
                        echo "                ";
                        $context["Scorecache"] = (($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 = twig_get_attribute($this->env, $this->source, ($context["scoreboard"] ?? null), "Scorecache", [], "any", false, false, false, 231)) && is_array($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4) || $__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 instanceof ArrayAccess ? ($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4[($context["num"] ?? null)] ?? null) : null);
                        // line 232
                        echo "                ";
                    }
                    // line 233
                    echo "                    ";
                    // line 234
                    echo "                    ";
                    $context["scoreCssClass"] = "score_neutral";
                    // line 235
                    echo "                    ";
                    $context["matrixItem"] = (($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 = (($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e = twig_get_attribute($this->env, $this->source, ($context["scoreboard"] ?? null), "matrix", [], "any", false, false, false, 235)) && is_array($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e) || $__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e instanceof ArrayAccess ? ($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e[twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["score"], "team", [], "any", false, false, false, 235), "teamid", [], "any", false, false, false, 235)] ?? null) : null)) && is_array($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666) || $__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 instanceof ArrayAccess ? ($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666[twig_get_attribute($this->env, $this->source, $context["problem"], "probid", [], "any", false, false, false, 235)] ?? null) : null);
                    // line 236
                    echo "                    
                    ";
                    // line 237
                    if (twig_get_attribute($this->env, $this->source, ($context["matrixItem"] ?? null), "isCorrect", [], "any", false, false, false, 237)) {
                        // line 238
                        echo "                        ";
                        $context["scoreCssClass"] = "score_correct";
                        // line 239
                        echo "                        ";
                        if (twig_get_attribute($this->env, $this->source, ($context["scoreboard"] ?? null), "solvedFirst", [0 => twig_get_attribute($this->env, $this->source, $context["score"], "team", [], "any", false, false, false, 239), 1 => $context["problem"]], "method", false, false, false, 239)) {
                            // line 240
                            echo "                            ";
                            $context["scoreCssClass"] = (($context["scoreCssClass"] ?? null) . " score_first");
                            // line 241
                            echo "                        ";
                        }
                        // line 242
                        echo "                    ";
                    } elseif ((($context["showPending"] ?? null) && (twig_get_attribute($this->env, $this->source, ($context["matrixItem"] ?? null), "numberOfPendingSubmissions", [], "any", false, false, false, 242) > 0))) {
                        // line 243
                        echo "                        ";
                        $context["scoreCssClass"] = "score_pending";
                        // line 244
                        echo "                    ";
                    } elseif ((twig_get_attribute($this->env, $this->source, ($context["matrixItem"] ?? null), "numberOfSubmissions", [], "any", false, false, false, 244) > 0)) {
                        // line 245
                        echo "                        ";
                        $context["scoreCssClass"] = "score_incorrect";
                        // line 246
                        echo "                    ";
                    }
                    // line 247
                    echo "
                    ";
                    // line 248
                    $context["numberOfSubmissions"] = twig_get_attribute($this->env, $this->source, ($context["matrixItem"] ?? null), "numberOfSubmissions", [], "any", false, false, false, 248);
                    // line 249
                    echo "                    ";
                    if ((($context["showPending"] ?? null) && (twig_get_attribute($this->env, $this->source, ($context["matrixItem"] ?? null), "numberOfPendingSubmissions", [], "any", false, false, false, 249) > 0))) {
                        // line 250
                        echo "                        ";
                        $context["numberOfSubmissions"] = ((($context["numberOfSubmissions"] ?? null) . " + ") . twig_get_attribute($this->env, $this->source, ($context["matrixItem"] ?? null), "numberOfPendingSubmissions", [], "any", false, false, false, 250));
                        // line 251
                        echo "                    ";
                    }
                    // line 252
                    echo "
                    ";
                    // line 254
                    echo "                    ";
                    $context["time"] = "&nbsp;";
                    // line 255
                    echo "                    ";
                    if (twig_get_attribute($this->env, $this->source, ($context["matrixItem"] ?? null), "isCorrect", [], "any", false, false, false, 255)) {
                        // line 256
                        echo "                        ";
                        $context["time"] = twig_get_attribute($this->env, $this->source, ($context["matrixItem"] ?? null), "time", [], "any", false, false, false, 256);
                        // line 257
                        echo "                        ";
                        if (($context["scoreInSeconds"] ?? null)) {
                            // line 258
                            echo "                            ";
                            $context["time"] = $this->extensions['App\Twig\TwigExtension']->printTimeRelative($this->extensions['App\Twig\TwigExtension']->scoreTime(($context["time"] ?? null)));
                            // line 259
                            echo "                            ";
                            if ((twig_get_attribute($this->env, $this->source, ($context["matrixItem"] ?? null), "numberOfSubmissions", [], "any", false, false, false, 259) > 1)) {
                                // line 260
                                echo "                                ";
                                $context["time"] = ((($context["time"] ?? null) . " + ") . $this->extensions['App\Twig\TwigExtension']->printTimeRelative($this->extensions['App\Twig\TwigExtension']->calculatePenaltyTime(true, twig_get_attribute($this->env, $this->source, ($context["matrixItem"] ?? null), "numberOfSubmissions", [], "any", false, false, false, 260))));
                                // line 261
                                echo "                            ";
                            }
                            // line 262
                            echo "                        ";
                        } else {
                            // line 263
                            echo "                            ";
                            $context["time"] = $this->extensions['App\Twig\TwigExtension']->scoreTime(($context["time"] ?? null));
                            // line 264
                            echo "                        ";
                        }
                        // line 265
                        echo "                    ";
                    }
                    // line 266
                    echo "
                    ";
                    // line 267
                    $context["link"] = null;
                    // line 268
                    echo "                    ";
                    if (($context["jury"] ?? null)) {
                        // line 269
                        echo "                        ";
                        $context["restrict"] = ["probid" => twig_get_attribute($this->env, $this->source, $context["problem"], "probid", [], "any", false, false, false, 269)];
                        // line 270
                        echo "                        ";
                        $context["link"] = $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_team", ["teamId" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["score"], "team", [], "any", false, false, false, 270), "teamid", [], "any", false, false, false, 270), "restrict" => ($context["restrict"] ?? null)]);
                        // line 271
                        echo "                    ";
                    }
                    // line 272
                    echo "                    <td class=\"score_cell\">
                        ";
                    // line 273
                    if ((($context["numberOfSubmissions"] ?? null) != "0")) {
                        // line 274
                        echo "                            <a ";
                        if (($context["link"] ?? null)) {
                            echo "href=\"";
                            echo twig_escape_filter($this->env, ($context["link"] ?? null), "html", null, true);
                            echo "\"";
                        }
                        echo ">
                                <div class=\"";
                        // line 275
                        echo twig_escape_filter($this->env, ($context["scoreCssClass"] ?? null), "html", null, true);
                        echo "\">
                                    ";
                        // line 276
                        if ((($context["time"] ?? null) == "&nbsp;")) {
                            // line 277
                            echo "                                    ";
                            if ((isset($context["Scorecache"]) || array_key_exists("Scorecache", $context))) {
                                // line 278
                                echo "                                    ";
                                if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["Scorecache"] ?? null), "AllTaskPoint", [], "any", false, false, false, 278))) {
                                    // line 279
                                    echo "                                    ";
                                    $context["A"] = (((($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52 = twig_get_attribute($this->env, $this->source, ($context["Scorecache"] ?? null), "AllTaskPoint", [], "any", false, false, false, 279)) && is_array($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52) || $__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52 instanceof ArrayAccess ? ($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52[1] ?? null) : null) / (($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136 = twig_get_attribute($this->env, $this->source, ($context["Scorecache"] ?? null), "AllTaskPoint", [], "any", false, false, false, 279)) && is_array($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136) || $__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136 instanceof ArrayAccess ? ($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136[0] ?? null) : null)) * twig_get_attribute($this->env, $this->source, $context["problem"], "points", [], "any", false, false, false, 279));
                                    // line 280
                                    echo "                                            ";
                                    echo twig_escape_filter($this->env, ($context["A"] ?? null), "html", null, true);
                                    echo " points
                                    ";
                                } else {
                                    // line 282
                                    echo "                                    ";
                                    echo ($context["time"] ?? null);
                                    echo " 
                                    ";
                                }
                                // line 284
                                echo "                                    ";
                            } else {
                                // line 285
                                echo "                                    ";
                                echo ($context["time"] ?? null);
                                echo "
                                    ";
                            }
                            // line 287
                            echo "                                    ";
                        } else {
                            // line 288
                            echo "                                    
                                    ";
                            // line 289
                            echo ($context["time"] ?? null);
                            echo "
                                    ";
                        }
                        // line 291
                        echo "                                    <span>
                                    
                                        ";
                        // line 293
                        if ((($context["numberOfSubmissions"] ?? null) === 1)) {
                            // line 294
                            echo "                                            1 try
                                        ";
                        } else {
                            // line 296
                            echo "                                            ";
                            echo twig_escape_filter($this->env, ($context["numberOfSubmissions"] ?? null), "html", null, true);
                            echo " tries
                                        ";
                        }
                        // line 298
                        echo "                                    </span>
                                </div>
                            </a>
                        ";
                    }
                    // line 302
                    echo "                    </td>
                    
                ";
                    // line 304
                    $context["num"] = (($context["num"] ?? null) + 1);
                    // line 305
                    echo "                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['problem'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 306
                echo "            ";
            }
            // line 307
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
        // line 310
        echo "
    ";
        // line 312
        echo "    ";
        $this->loadTemplate("partials/scoreboard_summary.html.twig", "partials/scoreboard_table.html.twig", 312)->display(twig_array_merge($context, ["sortOrder" => ($context["previousSortOrder"] ?? null)]));
        // line 313
        echo "    </tbody>
</table>

";
        // line 316
        if (($context["showLegends"] ?? null)) {
            // line 317
            echo "    <p><br/><br/></p>

    ";
            // line 320
            echo "    ";
            if ((((null === ($context["limitToTeamIds"] ?? null)) && (twig_length_filter($this->env, ($context["usedCategories"] ?? null)) > 1)) && ($context["hasDifferentCategoryColors"] ?? null))) {
                // line 321
                echo "        <table id=\"categ_legend\" class=\"scoreboard scorelegend ";
                if (($context["jury"] ?? null)) {
                    echo "scoreboard_jury";
                }
                echo "\">
            <thead>
            <tr>
                <th scope=\"col\">
                    ";
                // line 325
                $context["link"] = null;
                // line 326
                echo "                    ";
                if (($context["jury"] ?? null)) {
                    // line 327
                    echo "                        ";
                    $context["link"] = $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_team_categories");
                    // line 328
                    echo "                    ";
                }
                // line 329
                echo "                    <a ";
                if (($context["link"] ?? null)) {
                    echo "href=\"";
                    echo twig_escape_filter($this->env, ($context["link"] ?? null), "html", null, true);
                    echo "\"";
                }
                echo ">Categories</a>
                </th>
            </tr>
            </thead>
            <tbody>
            ";
                // line 334
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_array_filter(twig_get_attribute($this->env, $this->source, ($context["scoreboard"] ?? null), "categories", [], "any", false, false, false, 334), function ($__category__) use ($context) { $context["category"] = $__category__; return twig_get_attribute($this->env, $this->source, ($context["usedCategories"] ?? null), twig_get_attribute($this->env, $this->source, $context["category"], "categoryid", [], "any", false, false, false, 334), [], "array", true, true, false, 334); }));
                foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                    // line 335
                    echo "                <tr ";
                    if (twig_get_attribute($this->env, $this->source, $context["category"], "color", [], "any", false, false, false, 335)) {
                        echo "style=\"background: ";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "color", [], "any", false, false, false, 335), "html", null, true);
                        echo ";\"";
                    }
                    echo ">
                    <td>
                        ";
                    // line 337
                    $context["link"] = null;
                    // line 338
                    echo "                        ";
                    if (($context["jury"] ?? null)) {
                        // line 339
                        echo "                            ";
                        $context["link"] = $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_team_category", ["categoryId" => twig_get_attribute($this->env, $this->source, $context["category"], "categoryid", [], "any", false, false, false, 339)]);
                        // line 340
                        echo "                        ";
                    }
                    // line 341
                    echo "                        <a ";
                    if (($context["link"] ?? null)) {
                        echo "href=\"";
                        echo twig_escape_filter($this->env, ($context["link"] ?? null), "html", null, true);
                        echo "\"";
                    }
                    echo ">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 341), "html", null, true);
                    echo "</a>
                    </td>
                </tr>
            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 345
                echo "            </tbody>
        </table>
    ";
            }
            // line 348
            echo "
    ";
            // line 349
            if ((($context["showTeamSubmissions"] ?? null) || ($context["jury"] ?? null))) {
                // line 350
                echo "        ";
                $context["cellColors"] = ["first" => "Solved first", "correct" => "Solved", "incorrect" => "Tried, incorrect", "pending" => "Tried, pending", "neutral" => "Untried"];
                // line 351
                echo "        <table id=\"cell_legend\" class=\"scoreboard scorelegend ";
                if (($context["jury"] ?? null)) {
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
                // line 358
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["cellColors"] ?? null));
                foreach ($context['_seq'] as $context["color"] => $context["description"]) {
                    // line 359
                    echo "                ";
                    if ((($context["color"] != "pending") || ($context["showPending"] ?? null))) {
                        // line 360
                        echo "                    <tr class=\"score_";
                        echo twig_escape_filter($this->env, $context["color"], "html", null, true);
                        echo "\">
                        <td>";
                        // line 361
                        echo twig_escape_filter($this->env, $context["description"], "html", null, true);
                        echo "</td>
                    </tr>
                ";
                    }
                    // line 364
                    echo "            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['color'], $context['description'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 365
                echo "            </tbody>
        </table>
    ";
            }
        }
        // line 369
        echo "
<style>
    ";
        // line 371
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["backgroundColors"] ?? null));
        foreach ($context['_seq'] as $context["color"] => $context["i"]) {
            // line 372
            echo "        ";
            $context["colorClass"] = twig_replace_filter($context["color"], ["#" => "_"]);
            // line 373
            echo "
        .cl";
            // line 374
            echo twig_escape_filter($this->env, ($context["colorClass"] ?? null), "html", null, true);
            echo " {
            background-color: ";
            // line 375
            echo twig_escape_filter($this->env, $context["color"], "html", null, true);
            echo ";
        }

        ";
            // line 378
            $context["cMin"] = $this->extensions['App\Twig\TwigExtension']->hexColorToRGBA($context["color"], 0);
            // line 379
            echo "        ";
            $context["cMax"] = $this->extensions['App\Twig\TwigExtension']->hexColorToRGBA($context["color"], 1);
            // line 380
            echo "
        .cl";
            // line 381
            echo twig_escape_filter($this->env, ($context["colorClass"] ?? null), "html", null, true);
            echo " .forceWidth.toolong:after {
            background: linear-gradient(to right,
                ";
            // line 383
            echo twig_escape_filter($this->env, ($context["cMin"] ?? null), "html", null, true);
            echo " 0%,
                ";
            // line 384
            echo twig_escape_filter($this->env, ($context["cMax"] ?? null), "html", null, true);
            echo " 96%);
        }
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['color'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 387
        echo "</style>
<script>
    document.querySelectorAll(\".forceWidth:not(.toolong)\").forEach(el => {
        if (el instanceof Element && el.scrollWidth > el.offsetWidth) {
            el.classList.add(\"toolong\");
        }
    });
</script>
";
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
        return array (  1127 => 387,  1118 => 384,  1114 => 383,  1109 => 381,  1106 => 380,  1103 => 379,  1101 => 378,  1095 => 375,  1091 => 374,  1088 => 373,  1085 => 372,  1081 => 371,  1077 => 369,  1071 => 365,  1065 => 364,  1059 => 361,  1054 => 360,  1051 => 359,  1047 => 358,  1034 => 351,  1031 => 350,  1029 => 349,  1026 => 348,  1021 => 345,  1004 => 341,  1001 => 340,  998 => 339,  995 => 338,  993 => 337,  983 => 335,  979 => 334,  966 => 329,  963 => 328,  960 => 327,  957 => 326,  955 => 325,  945 => 321,  942 => 320,  938 => 317,  936 => 316,  931 => 313,  928 => 312,  925 => 310,  909 => 307,  906 => 306,  900 => 305,  898 => 304,  894 => 302,  888 => 298,  882 => 296,  878 => 294,  876 => 293,  872 => 291,  867 => 289,  864 => 288,  861 => 287,  855 => 285,  852 => 284,  846 => 282,  840 => 280,  837 => 279,  834 => 278,  831 => 277,  829 => 276,  825 => 275,  816 => 274,  814 => 273,  811 => 272,  808 => 271,  805 => 270,  802 => 269,  799 => 268,  797 => 267,  794 => 266,  791 => 265,  788 => 264,  785 => 263,  782 => 262,  779 => 261,  776 => 260,  773 => 259,  770 => 258,  767 => 257,  764 => 256,  761 => 255,  758 => 254,  755 => 252,  752 => 251,  749 => 250,  746 => 249,  744 => 248,  741 => 247,  738 => 246,  735 => 245,  732 => 244,  729 => 243,  726 => 242,  723 => 241,  720 => 240,  717 => 239,  714 => 238,  712 => 237,  709 => 236,  706 => 235,  703 => 234,  701 => 233,  698 => 232,  695 => 231,  692 => 230,  687 => 229,  684 => 228,  682 => 227,  676 => 224,  671 => 223,  668 => 222,  665 => 221,  662 => 220,  659 => 219,  657 => 218,  653 => 216,  649 => 214,  643 => 212,  641 => 211,  638 => 210,  636 => 209,  630 => 207,  624 => 204,  621 => 203,  619 => 202,  605 => 200,  602 => 199,  599 => 198,  596 => 197,  593 => 196,  590 => 195,  587 => 194,  584 => 193,  581 => 192,  578 => 191,  575 => 190,  572 => 189,  569 => 188,  567 => 187,  560 => 186,  557 => 185,  554 => 184,  551 => 183,  548 => 182,  545 => 181,  542 => 180,  539 => 179,  535 => 177,  531 => 175,  525 => 173,  520 => 171,  513 => 170,  510 => 169,  507 => 168,  504 => 167,  501 => 166,  498 => 165,  496 => 164,  487 => 163,  484 => 162,  481 => 161,  478 => 160,  475 => 159,  473 => 158,  470 => 157,  468 => 156,  465 => 155,  462 => 154,  458 => 152,  455 => 151,  449 => 149,  444 => 147,  437 => 146,  434 => 145,  431 => 144,  429 => 143,  420 => 142,  417 => 141,  414 => 140,  411 => 139,  408 => 138,  405 => 137,  403 => 136,  399 => 134,  396 => 133,  393 => 132,  387 => 130,  385 => 129,  382 => 128,  379 => 127,  371 => 124,  368 => 123,  365 => 122,  362 => 121,  359 => 120,  356 => 119,  353 => 118,  350 => 116,  347 => 115,  344 => 114,  341 => 113,  338 => 112,  335 => 111,  332 => 110,  330 => 109,  327 => 108,  324 => 107,  321 => 106,  303 => 105,  300 => 104,  297 => 103,  295 => 102,  290 => 99,  287 => 98,  279 => 95,  268 => 92,  265 => 91,  262 => 90,  256 => 88,  254 => 87,  250 => 86,  240 => 85,  235 => 84,  232 => 83,  229 => 82,  226 => 81,  223 => 80,  220 => 79,  217 => 78,  214 => 77,  211 => 76,  208 => 75,  205 => 74,  202 => 73,  199 => 72,  196 => 71,  193 => 70,  190 => 69,  185 => 68,  183 => 67,  178 => 65,  172 => 61,  169 => 60,  166 => 59,  163 => 58,  161 => 57,  157 => 55,  154 => 54,  147 => 52,  142 => 51,  140 => 50,  131 => 43,  127 => 41,  124 => 40,  120 => 38,  116 => 36,  114 => 35,  110 => 33,  103 => 30,  99 => 28,  92 => 24,  88 => 22,  86 => 21,  84 => 20,  82 => 19,  80 => 18,  78 => 17,  76 => 16,  72 => 14,  70 => 13,  66 => 11,  64 => 10,  57 => 8,  54 => 7,  49 => 6,  46 => 5,  42 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "partials/scoreboard_table.html.twig", "/opt/domjudge/domserver/webapp/templates/partials/scoreboard_table.html.twig");
    }
}
