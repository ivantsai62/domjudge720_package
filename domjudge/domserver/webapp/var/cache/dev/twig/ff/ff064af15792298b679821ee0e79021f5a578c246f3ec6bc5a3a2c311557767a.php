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

/* partials/scoreboard.html.twig */
class __TwigTemplate_3d1ebe9312588ff0393c13fcb3bf4f6e81c4e12df472d44a9f32addb846061cc extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "partials/scoreboard.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "partials/scoreboard.html.twig"));

        // line 1
        if ( !(isset($context["static"]) || array_key_exists("static", $context))) {
            // line 2
            echo "    ";
            $context["static"] = false;
        }
        // line 5
        if (((((isset($context["ajax"]) || array_key_exists("ajax", $context)) && (isset($context["ajax"]) || array_key_exists("ajax", $context) ? $context["ajax"] : (function () { throw new RuntimeError('Variable "ajax" does not exist.', 5, $this->source); })())) &&  !(isset($context["static"]) || array_key_exists("static", $context) ? $context["static"] : (function () { throw new RuntimeError('Variable "static" does not exist.', 5, $this->source); })())) && (isset($context["public"]) || array_key_exists("public", $context) ? $context["public"] : (function () { throw new RuntimeError('Variable "public" does not exist.', 5, $this->source); })()))) {
            // line 6
            echo "    <div class=\"d-none\">
        ";
            // line 7
            $this->loadTemplate("partials/scoreboard_progress_bar.html.twig", "partials/scoreboard.html.twig", 7)->display(twig_array_merge($context, ["contest" => (isset($context["current_contest"]) || array_key_exists("current_contest", $context) ? $context["current_contest"] : (function () { throw new RuntimeError('Variable "current_contest" does not exist.', 7, $this->source); })())]));
            // line 8
            echo "    </div>
";
        }
        // line 10
        echo "
";
        // line 11
        if ((null === (isset($context["current_contest"]) || array_key_exists("current_contest", $context) ? $context["current_contest"] : (function () { throw new RuntimeError('Variable "current_contest" does not exist.', 11, $this->source); })()))) {
            // line 12
            echo "    <p class=\"nodata\">No active contest</p>
";
        } else {
            // line 14
            echo "    <div class=\"card\">
        <div class=\"card-header\" style=\"font-family: Roboto, sans-serif; display: flex;\">
            <span style=\"font-weight: bold;\">";
            // line 16
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["current_contest"]) || array_key_exists("current_contest", $context) ? $context["current_contest"] : (function () { throw new RuntimeError('Variable "current_contest" does not exist.', 16, $this->source); })()), "name", [], "any", false, false, false, 16), "html", null, true);
            echo "</span>
            <span style=\"color: DimGray; margin-left: auto;\">
                ";
            // line 18
            if ((null === (isset($context["scoreboard"]) || array_key_exists("scoreboard", $context) ? $context["scoreboard"] : (function () { throw new RuntimeError('Variable "scoreboard" does not exist.', 18, $this->source); })()))) {
                // line 19
                echo "                    ";
                echo twig_escape_filter($this->env, $this->extensions['App\Twig\TwigExtension']->printContestStart((isset($context["current_contest"]) || array_key_exists("current_contest", $context) ? $context["current_contest"] : (function () { throw new RuntimeError('Variable "current_contest" does not exist.', 19, $this->source); })())), "html", null, true);
                echo "
                ";
            } elseif (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 20
(isset($context["scoreboard"]) || array_key_exists("scoreboard", $context) ? $context["scoreboard"] : (function () { throw new RuntimeError('Variable "scoreboard" does not exist.', 20, $this->source); })()), "freezeData", [], "any", false, false, false, 20), "showFinal", [0 => (isset($context["jury"]) || array_key_exists("jury", $context) ? $context["jury"] : (function () { throw new RuntimeError('Variable "jury" does not exist.', 20, $this->source); })())], "method", false, false, false, 20)) {
                // line 21
                echo "                    ";
                if (twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["current_contest"]) || array_key_exists("current_contest", $context) ? $context["current_contest"] : (function () { throw new RuntimeError('Variable "current_contest" does not exist.', 21, $this->source); })()), "finalizetime", [], "any", false, false, false, 21))) {
                    // line 22
                    echo "                        preliminary results - not final
                    ";
                } else {
                    // line 24
                    echo "                        final standings
                    ";
                }
                // line 26
                echo "                ";
            } elseif (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["scoreboard"]) || array_key_exists("scoreboard", $context) ? $context["scoreboard"] : (function () { throw new RuntimeError('Variable "scoreboard" does not exist.', 26, $this->source); })()), "freezeData", [], "any", false, false, false, 26), "stopped", [], "any", false, false, false, 26)) {
                // line 27
                echo "                    contest over, waiting for results
                ";
            } else {
                // line 29
                echo "                    starts: ";
                echo twig_escape_filter($this->env, $this->extensions['App\Twig\TwigExtension']->printtime(twig_get_attribute($this->env, $this->source, (isset($context["current_contest"]) || array_key_exists("current_contest", $context) ? $context["current_contest"] : (function () { throw new RuntimeError('Variable "current_contest" does not exist.', 29, $this->source); })()), "starttime", [], "any", false, false, false, 29)), "html", null, true);
                echo " - ends: ";
                echo twig_escape_filter($this->env, $this->extensions['App\Twig\TwigExtension']->printtime(twig_get_attribute($this->env, $this->source, (isset($context["current_contest"]) || array_key_exists("current_contest", $context) ? $context["current_contest"] : (function () { throw new RuntimeError('Variable "current_contest" does not exist.', 29, $this->source); })()), "endtime", [], "any", false, false, false, 29)), "html", null, true);
                echo "
                ";
            }
            // line 31
            echo "            </span>
        </div>

        ";
            // line 34
            if ((isset($context["static"]) || array_key_exists("static", $context) ? $context["static"] : (function () { throw new RuntimeError('Variable "static" does not exist.', 34, $this->source); })())) {
                // line 35
                echo "            ";
                $this->loadTemplate("partials/scoreboard_progress_bar.html.twig", "partials/scoreboard.html.twig", 35)->display(twig_array_merge($context, ["contest" => (isset($context["current_contest"]) || array_key_exists("current_contest", $context) ? $context["current_contest"] : (function () { throw new RuntimeError('Variable "current_contest" does not exist.', 35, $this->source); })())]));
                // line 36
                echo "        ";
            }
            // line 37
            echo "    </div> ";
            // line 38
            echo "
    ";
            // line 39
            if (((null === (isset($context["scoreboard"]) || array_key_exists("scoreboard", $context) ? $context["scoreboard"] : (function () { throw new RuntimeError('Variable "scoreboard" does not exist.', 39, $this->source); })())) &&  !(isset($context["jury"]) || array_key_exists("jury", $context) ? $context["jury"] : (function () { throw new RuntimeError('Variable "jury" does not exist.', 39, $this->source); })()))) {
                // line 40
                echo "        ";
                // line 41
                echo "        ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["groupedAffiliations"]) || array_key_exists("groupedAffiliations", $context) ? $context["groupedAffiliations"] : (function () { throw new RuntimeError('Variable "groupedAffiliations" does not exist.', 41, $this->source); })()));
                foreach ($context['_seq'] as $context["_key"] => $context["affiliationGroupRow"]) {
                    // line 42
                    echo "            <br/><br/>
            <div class=\"card-deck\">
                ";
                    // line 44
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($context["affiliationGroupRow"]);
                    foreach ($context['_seq'] as $context["category"] => $context["affiliations"]) {
                        // line 45
                        echo "                    <div class=\"card\" style=\"font-family: Roboto, sans-serif;\">
                        <div class=\"card-header\">";
                        // line 46
                        echo twig_escape_filter($this->env, $context["category"], "html", null, true);
                        echo "</div>
                        <div class=\"card-body\">
                            <ul class=\"list-group list-group-flush\">
                                ";
                        // line 49
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable($context["affiliations"]);
                        foreach ($context['_seq'] as $context["_key"] => $context["affiliation"]) {
                            // line 50
                            echo "                                    <li class=\"list-group-item\">
                                        ";
                            // line 51
                            $context["affiliationLogo"] = (("images/affiliations/" . twig_get_attribute($this->env, $this->source, $context["affiliation"], "id", [], "any", false, false, false, 51)) . ".png");
                            // line 52
                            echo "                                        ";
                            if ($this->extensions['App\Twig\TwigExtension']->assetExists((isset($context["affiliationLogo"]) || array_key_exists("affiliationLogo", $context) ? $context["affiliationLogo"] : (function () { throw new RuntimeError('Variable "affiliationLogo" does not exist.', 52, $this->source); })()))) {
                                // line 53
                                echo "                                            <img src=\"";
                                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl((isset($context["affiliationLogo"]) || array_key_exists("affiliationLogo", $context) ? $context["affiliationLogo"] : (function () { throw new RuntimeError('Variable "affiliationLogo" does not exist.', 53, $this->source); })())), "html", null, true);
                                echo "\" alt=\"";
                                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["affiliation"], "name", [], "any", false, false, false, 53), "html", null, true);
                                echo "\"
                                                 title=\"";
                                // line 54
                                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["affiliation"], "name", [], "any", false, false, false, 54), "html", null, true);
                                echo "\" class=\"affiliation-logo\"/>
                                        ";
                            }
                            // line 56
                            echo "                                        ";
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["affiliation"], "name", [], "any", false, false, false, 56), "html", null, true);
                            echo "
                                    </li>
                                ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['affiliation'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 59
                        echo "                            </ul>
                        </div>
                    </div>
                ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['category'], $context['affiliations'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 63
                    echo "                ";
                    if ((twig_length_filter($this->env, $context["affiliationGroupRow"]) < 3)) {
                        // line 64
                        echo "                    ";
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(range((twig_length_filter($this->env, $context["affiliationGroupRow"]) + 1), 3));
                        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                            // line 65
                            echo "                        <div class=\"card\" style=\"border: none;\"></div>
                    ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 67
                        echo "                ";
                    }
                    // line 68
                    echo "            </div>
        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['affiliationGroupRow'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 70
                echo "    ";
            } else {
                // line 71
                echo "
        ";
                // line 72
                if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["scoreboard"]) || array_key_exists("scoreboard", $context) ? $context["scoreboard"] : (function () { throw new RuntimeError('Variable "scoreboard" does not exist.', 72, $this->source); })()), "freezeData", [], "any", false, false, false, 72), "showFrozen", [0 => false], "method", false, false, false, 72)) {
                    // line 73
                    echo "            <div class=\"alert alert-warning\" role=\"alert\" style=\"font-size: 80%;\">
                ";
                    // line 74
                    if ((isset($context["jury"]) || array_key_exists("jury", $context) ? $context["jury"] : (function () { throw new RuntimeError('Variable "jury" does not exist.', 74, $this->source); })())) {
                        // line 75
                        echo "                    <a href=\"";
                        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("public_index");
                        echo "\">The public scoreboard</a>
                    was frozen with ";
                        // line 76
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["current_contest"]) || array_key_exists("current_contest", $context) ? $context["current_contest"] : (function () { throw new RuntimeError('Variable "current_contest" does not exist.', 76, $this->source); })()), "minutesRemaining", [], "any", false, false, false, 76), "html", null, true);
                        echo " minutes remaining
                ";
                    } else {
                        // line 78
                        echo "                    The scoreboard was frozen with ";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["current_contest"]) || array_key_exists("current_contest", $context) ? $context["current_contest"] : (function () { throw new RuntimeError('Variable "current_contest" does not exist.', 78, $this->source); })()), "minutesRemaining", [], "any", false, false, false, 78), "html", null, true);
                        echo " minutes remaining - solutions
                    submitted in the last ";
                        // line 79
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["current_contest"]) || array_key_exists("current_contest", $context) ? $context["current_contest"] : (function () { throw new RuntimeError('Variable "current_contest" does not exist.', 79, $this->source); })()), "minutesRemaining", [], "any", false, false, false, 79), "html", null, true);
                        echo " minutes of the contest ";
                        if ((isset($context["showPending"]) || array_key_exists("showPending", $context) ? $context["showPending"] : (function () { throw new RuntimeError('Variable "showPending" does not exist.', 79, $this->source); })())) {
                            echo "are still shown as pending";
                        } else {
                            echo "are not shown";
                        }
                        echo ".
                ";
                    }
                    // line 81
                    echo "            </div>
        ";
                }
                // line 83
                echo "
        ";
                // line 84
                if (( !(isset($context["static"]) || array_key_exists("static", $context) ? $context["static"] : (function () { throw new RuntimeError('Variable "static" does not exist.', 84, $this->source); })()) && (((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source,                 // line 85
(isset($context["filterValues"]) || array_key_exists("filterValues", $context) ? $context["filterValues"] : (function () { throw new RuntimeError('Variable "filterValues" does not exist.', 85, $this->source); })()), "affiliations", [], "any", false, false, false, 85)) > 1) || (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source,                 // line 86
(isset($context["filterValues"]) || array_key_exists("filterValues", $context) ? $context["filterValues"] : (function () { throw new RuntimeError('Variable "filterValues" does not exist.', 86, $this->source); })()), "countries", [], "any", false, false, false, 86)) > 1)) || (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source,                 // line 87
(isset($context["filterValues"]) || array_key_exists("filterValues", $context) ? $context["filterValues"] : (function () { throw new RuntimeError('Variable "filterValues" does not exist.', 87, $this->source); })()), "categories", [], "any", false, false, false, 87)) > 1)))) {
                    // line 88
                    echo "\t<div class=\"dropdown\">
            <button class=\"btn btn-outline-secondary btn-sm m-2 dropdown-toggle\" data-toggle=\"dropdown\"
                aria-haspopup=\"true\" aria-expanded=\"false\" id=\"filter-toggle\">
                <i class=\"fas fa-filter\"></i>
                ";
                    // line 92
                    if (twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["scoreFilter"]) || array_key_exists("scoreFilter", $context) ? $context["scoreFilter"] : (function () { throw new RuntimeError('Variable "scoreFilter" does not exist.', 92, $this->source); })()), "filteredOn", [], "any", false, false, false, 92))) {
                        // line 93
                        echo "                    Filter
                ";
                    } else {
                        // line 95
                        echo "                    Filtered (";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["scoreFilter"]) || array_key_exists("scoreFilter", $context) ? $context["scoreFilter"] : (function () { throw new RuntimeError('Variable "scoreFilter" does not exist.', 95, $this->source); })()), "filteredOn", [], "any", false, false, false, 95), "html", null, true);
                        echo ")
                ";
                    }
                    // line 97
                    echo "            </button>

            <div class=\"dropdown-menu\" aria-labelledby=\"filter-toggle\">
                <form method=\"get\">
                    <div class=\"m-2 p-2 form-inline\">
                        ";
                    // line 102
                    if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["filterValues"]) || array_key_exists("filterValues", $context) ? $context["filterValues"] : (function () { throw new RuntimeError('Variable "filterValues" does not exist.', 102, $this->source); })()), "affiliations", [], "any", false, false, false, 102)) > 1)) {
                        // line 103
                        echo "                            <select class=\"form-control mr-2\" multiple size=\"8\" name=\"affiliations[]\">
                                ";
                        // line 104
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["filterValues"]) || array_key_exists("filterValues", $context) ? $context["filterValues"] : (function () { throw new RuntimeError('Variable "filterValues" does not exist.', 104, $this->source); })()), "affiliations", [], "any", false, false, false, 104));
                        foreach ($context['_seq'] as $context["affiliationId"] => $context["affiliation"]) {
                            // line 105
                            echo "                                    <option ";
                            if (twig_in_filter($context["affiliationId"], twig_get_attribute($this->env, $this->source, (isset($context["scoreFilter"]) || array_key_exists("scoreFilter", $context) ? $context["scoreFilter"] : (function () { throw new RuntimeError('Variable "scoreFilter" does not exist.', 105, $this->source); })()), "affiliations", [], "any", false, false, false, 105))) {
                                echo "selected";
                            }
                            // line 106
                            echo "                                            value=\"";
                            echo twig_escape_filter($this->env, $context["affiliationId"], "html", null, true);
                            echo "\">";
                            echo twig_escape_filter($this->env, $context["affiliation"], "html", null, true);
                            echo "</option>
                                ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['affiliationId'], $context['affiliation'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 108
                        echo "                            </select>
                        ";
                    }
                    // line 110
                    echo "                        ";
                    if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["filterValues"]) || array_key_exists("filterValues", $context) ? $context["filterValues"] : (function () { throw new RuntimeError('Variable "filterValues" does not exist.', 110, $this->source); })()), "countries", [], "any", false, false, false, 110)) > 1)) {
                        // line 111
                        echo "                            <select class=\"form-control mr-2\" multiple size=\"8\" name=\"countries[]\">
                                ";
                        // line 112
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["filterValues"]) || array_key_exists("filterValues", $context) ? $context["filterValues"] : (function () { throw new RuntimeError('Variable "filterValues" does not exist.', 112, $this->source); })()), "countries", [], "any", false, false, false, 112));
                        foreach ($context['_seq'] as $context["_key"] => $context["country"]) {
                            // line 113
                            echo "                                    <option ";
                            if (twig_in_filter($context["country"], twig_get_attribute($this->env, $this->source, (isset($context["scoreFilter"]) || array_key_exists("scoreFilter", $context) ? $context["scoreFilter"] : (function () { throw new RuntimeError('Variable "scoreFilter" does not exist.', 113, $this->source); })()), "countries", [], "any", false, false, false, 113))) {
                                echo "selected";
                            }
                            // line 114
                            echo "                                            value=\"";
                            echo twig_escape_filter($this->env, $context["country"], "html", null, true);
                            echo "\">";
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["alpha3_countries"]) || array_key_exists("alpha3_countries", $context) ? $context["alpha3_countries"] : (function () { throw new RuntimeError('Variable "alpha3_countries" does not exist.', 114, $this->source); })()), $context["country"], [], "array", false, false, false, 114), "html", null, true);
                            echo "</option>
                                ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['country'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 116
                        echo "                            </select>
                        ";
                    }
                    // line 118
                    echo "                        ";
                    if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["filterValues"]) || array_key_exists("filterValues", $context) ? $context["filterValues"] : (function () { throw new RuntimeError('Variable "filterValues" does not exist.', 118, $this->source); })()), "categories", [], "any", false, false, false, 118)) > 1)) {
                        // line 119
                        echo "                            <select class=\"form-control mr-2\" multiple size=\"8\" name=\"categories[]\">
                                ";
                        // line 120
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["filterValues"]) || array_key_exists("filterValues", $context) ? $context["filterValues"] : (function () { throw new RuntimeError('Variable "filterValues" does not exist.', 120, $this->source); })()), "categories", [], "any", false, false, false, 120));
                        foreach ($context['_seq'] as $context["categoryId"] => $context["category"]) {
                            // line 121
                            echo "                                    <option ";
                            if (twig_in_filter($context["categoryId"], twig_get_attribute($this->env, $this->source, (isset($context["scoreFilter"]) || array_key_exists("scoreFilter", $context) ? $context["scoreFilter"] : (function () { throw new RuntimeError('Variable "scoreFilter" does not exist.', 121, $this->source); })()), "categories", [], "any", false, false, false, 121))) {
                                echo "selected";
                            }
                            // line 122
                            echo "                                            value=\"";
                            echo twig_escape_filter($this->env, $context["categoryId"], "html", null, true);
                            echo "\">";
                            echo twig_escape_filter($this->env, $context["category"], "html", null, true);
                            echo "</option>
                                ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['categoryId'], $context['category'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 124
                        echo "                            </select>
                        ";
                    }
                    // line 126
                    echo "                    <input type=\"submit\" class=\"btn btn-primary btn-sm align-top\" name=\"filter\" value=\"filter\"/>
                    <input type=\"submit\" class=\"btn btn-secondary btn-sm align-top\" name=\"clear\" value=\"clear\"/>
                    </div>
                </form>
            </div>
        </div>
        ";
                } else {
                    // line 132
                    echo " ";
                    // line 133
                    echo "            <br/>
        ";
                }
                // line 134
                echo " ";
                // line 135
                echo "
        ";
                // line 136
                $this->loadTemplate("partials/scoreboard_table.html.twig", "partials/scoreboard.html.twig", 136)->display(twig_array_merge($context, ["displayRank" => true, "showLegends" => true]));
                // line 137
                echo "
    ";
            }
            // line 138
            echo " ";
            // line 139
            echo "
    <p id=\"lastmod\">
        Last Update: ";
            // line 141
            echo twig_escape_filter($this->env, $this->extensions['App\Twig\TwigExtension']->printtime(null, "%a %d %b %Y %T %Z"), "html", null, true);
            echo "<br/>
        using <a href=\"https://www.domjudge.org/\" target=\"_top\">DOMjudge</a>
    </p>
";
        }
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "partials/scoreboard.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  422 => 141,  418 => 139,  416 => 138,  412 => 137,  410 => 136,  407 => 135,  405 => 134,  401 => 133,  399 => 132,  390 => 126,  386 => 124,  375 => 122,  370 => 121,  366 => 120,  363 => 119,  360 => 118,  356 => 116,  345 => 114,  340 => 113,  336 => 112,  333 => 111,  330 => 110,  326 => 108,  315 => 106,  310 => 105,  306 => 104,  303 => 103,  301 => 102,  294 => 97,  288 => 95,  284 => 93,  282 => 92,  276 => 88,  274 => 87,  273 => 86,  272 => 85,  271 => 84,  268 => 83,  264 => 81,  253 => 79,  248 => 78,  243 => 76,  238 => 75,  236 => 74,  233 => 73,  231 => 72,  228 => 71,  225 => 70,  218 => 68,  215 => 67,  208 => 65,  203 => 64,  200 => 63,  191 => 59,  181 => 56,  176 => 54,  169 => 53,  166 => 52,  164 => 51,  161 => 50,  157 => 49,  151 => 46,  148 => 45,  144 => 44,  140 => 42,  135 => 41,  133 => 40,  131 => 39,  128 => 38,  126 => 37,  123 => 36,  120 => 35,  118 => 34,  113 => 31,  105 => 29,  101 => 27,  98 => 26,  94 => 24,  90 => 22,  87 => 21,  85 => 20,  80 => 19,  78 => 18,  73 => 16,  69 => 14,  65 => 12,  63 => 11,  60 => 10,  56 => 8,  54 => 7,  51 => 6,  49 => 5,  45 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% if static is not defined %}
    {% set static = false %}
{% endif %}
{#{dump(scoreboard)}#}
{% if ajax is defined and ajax and not static and public %}
    <div class=\"d-none\">
        {% include 'partials/scoreboard_progress_bar.html.twig' with {contest: current_contest} %}
    </div>
{% endif %}

{% if current_contest is null %}
    <p class=\"nodata\">No active contest</p>
{% else %}
    <div class=\"card\">
        <div class=\"card-header\" style=\"font-family: Roboto, sans-serif; display: flex;\">
            <span style=\"font-weight: bold;\">{{ current_contest.name }}</span>
            <span style=\"color: DimGray; margin-left: auto;\">
                {% if scoreboard is null %}
                    {{ current_contest | printContestStart }}
                {% elseif scoreboard.freezeData.showFinal(jury) %}
                    {% if current_contest.finalizetime is empty %}
                        preliminary results - not final
                    {% else %}
                        final standings
                    {% endif %}
                {% elseif scoreboard.freezeData.stopped %}
                    contest over, waiting for results
                {% else %}
                    starts: {{ current_contest.starttime | printtime }} - ends: {{ current_contest.endtime | printtime }}
                {% endif %}
            </span>
        </div>

        {% if static %}
            {% include 'partials/scoreboard_progress_bar.html.twig' with {contest: current_contest} %}
        {% endif %}
    </div> {# card #}

    {% if scoreboard is null and not jury %}
        {# Display a list of teams by group. This is targeted for World Finals, but looks nice anyway #}
        {% for affiliationGroupRow in groupedAffiliations %}
            <br/><br/>
            <div class=\"card-deck\">
                {% for category, affiliations in affiliationGroupRow %}
                    <div class=\"card\" style=\"font-family: Roboto, sans-serif;\">
                        <div class=\"card-header\">{{ category }}</div>
                        <div class=\"card-body\">
                            <ul class=\"list-group list-group-flush\">
                                {% for affiliation in affiliations %}
                                    <li class=\"list-group-item\">
                                        {% set affiliationLogo = 'images/affiliations/' ~ affiliation.id ~ '.png' %}
                                        {% if affiliationLogo | assetExists %}
                                            <img src=\"{{ asset(affiliationLogo) }}\" alt=\"{{ affiliation.name }}\"
                                                 title=\"{{ affiliation.name }}\" class=\"affiliation-logo\"/>
                                        {% endif %}
                                        {{ affiliation.name }}
                                    </li>
                                {% endfor %}
                            </ul>
                        </div>
                    </div>
                {% endfor %}
                {% if affiliationGroupRow | length < 3 %}
                    {% for i in (affiliationGroupRow | length + 1)..3 %}
                        <div class=\"card\" style=\"border: none;\"></div>
                    {% endfor %}
                {% endif %}
            </div>
        {% endfor %}
    {% else %}

        {% if scoreboard.freezeData.showFrozen(false) %}
            <div class=\"alert alert-warning\" role=\"alert\" style=\"font-size: 80%;\">
                {% if jury %}
                    <a href=\"{{ path('public_index') }}\">The public scoreboard</a>
                    was frozen with {{ current_contest.minutesRemaining }} minutes remaining
                {% else %}
                    The scoreboard was frozen with {{ current_contest.minutesRemaining }} minutes remaining - solutions
                    submitted in the last {{ current_contest.minutesRemaining }} minutes of the contest {% if showPending %}are still shown as pending{% else %}are not shown{% endif %}.
                {% endif %}
            </div>
        {% endif %}

        {% if not static and
            (filterValues.affiliations | length > 1 or
             filterValues.countries | length > 1 or
             filterValues.categories | length > 1) %}
\t<div class=\"dropdown\">
            <button class=\"btn btn-outline-secondary btn-sm m-2 dropdown-toggle\" data-toggle=\"dropdown\"
                aria-haspopup=\"true\" aria-expanded=\"false\" id=\"filter-toggle\">
                <i class=\"fas fa-filter\"></i>
                {% if scoreFilter.filteredOn is empty %}
                    Filter
                {% else %}
                    Filtered ({{ scoreFilter.filteredOn }})
                {% endif %}
            </button>

            <div class=\"dropdown-menu\" aria-labelledby=\"filter-toggle\">
                <form method=\"get\">
                    <div class=\"m-2 p-2 form-inline\">
                        {% if filterValues.affiliations | length > 1 %}
                            <select class=\"form-control mr-2\" multiple size=\"8\" name=\"affiliations[]\">
                                {% for affiliationId, affiliation in filterValues.affiliations %}
                                    <option {% if affiliationId in scoreFilter.affiliations %}selected{% endif %}
                                            value=\"{{ affiliationId }}\">{{ affiliation }}</option>
                                {% endfor %}
                            </select>
                        {% endif %}
                        {% if filterValues.countries | length > 1 %}
                            <select class=\"form-control mr-2\" multiple size=\"8\" name=\"countries[]\">
                                {% for country in filterValues.countries %}
                                    <option {% if country in scoreFilter.countries %}selected{% endif %}
                                            value=\"{{ country }}\">{{ alpha3_countries[country] }}</option>
                                {% endfor %}
                            </select>
                        {% endif %}
                        {% if filterValues.categories | length > 1 %}
                            <select class=\"form-control mr-2\" multiple size=\"8\" name=\"categories[]\">
                                {% for categoryId, category in filterValues.categories %}
                                    <option {% if categoryId in scoreFilter.categories %}selected{% endif %}
                                            value=\"{{ categoryId }}\">{{ category }}</option>
                                {% endfor %}
                            </select>
                        {% endif %}
                    <input type=\"submit\" class=\"btn btn-primary btn-sm align-top\" name=\"filter\" value=\"filter\"/>
                    <input type=\"submit\" class=\"btn btn-secondary btn-sm align-top\" name=\"clear\" value=\"clear\"/>
                    </div>
                </form>
            </div>
        </div>
        {% else %} {# not static and filterValues*length>1 #}
            <br/>
        {% endif %} {# not static and filterValues*length>1 #}

        {% include 'partials/scoreboard_table.html.twig' with {displayRank: true, showLegends: true} %}

    {% endif %} {# not scoreboard is null and not jury #}

    <p id=\"lastmod\">
        Last Update: {{ null | printtime('%a %d %b %Y %T %Z') }}<br/>
        using <a href=\"https://www.domjudge.org/\" target=\"_top\">DOMjudge</a>
    </p>
{% endif %}
", "partials/scoreboard.html.twig", "/opt/domjudge/domserver/webapp/templates/partials/scoreboard.html.twig");
    }
}
