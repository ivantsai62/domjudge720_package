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

/* jury/team_affiliation.html.twig */
class __TwigTemplate_cad2193db75ee8333c0c55bedb159c3c201eeeab63015afd2d718d75882c3982 extends \Twig\Template
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
        // line 1
        return "jury/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "jury/team_affiliation.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "jury/team_affiliation.html.twig"));

        // line 2
        $macros["macros"] = $this->macros["macros"] = $this->loadTemplate("jury/jury_macros.twig", "jury/team_affiliation.html.twig", 2)->unwrap();
        // line 1
        $this->parent = $this->loadTemplate("jury/base.html.twig", "jury/team_affiliation.html.twig", 1);
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

        echo "Affiliation ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["teamAffiliation"]) || array_key_exists("teamAffiliation", $context) ? $context["teamAffiliation"] : (function () { throw new RuntimeError('Variable "teamAffiliation" does not exist.', 4, $this->source); })()), "affilid", [], "any", false, false, false, 4), "html", null, true);
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
    ";
        // line 8
        echo twig_call_macro($macros["macros"], "macro_table_extrahead", [], 8, $context, $this->getSourceContext());
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 11
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 12
        echo "
    <h1>Affiliation: ";
        // line 13
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["teamAffiliation"]) || array_key_exists("teamAffiliation", $context) ? $context["teamAffiliation"] : (function () { throw new RuntimeError('Variable "teamAffiliation" does not exist.', 13, $this->source); })()), "name", [], "any", false, false, false, 13), "html", null, true);
        echo "</h1>

    <div class=\"row\">
        <div class=\"col-lg-4\">
            <table class=\"table table-sm table-striped\">
                <tr>
                    <th>ID</th>
                    <td>";
        // line 20
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["teamAffiliation"]) || array_key_exists("teamAffiliation", $context) ? $context["teamAffiliation"] : (function () { throw new RuntimeError('Variable "teamAffiliation" does not exist.', 20, $this->source); })()), "affilid", [], "any", false, false, false, 20), "html", null, true);
        echo "</td>
                </tr>
                ";
        // line 22
        if ($this->extensions['App\Twig\TwigExtension']->showExternalId((isset($context["teamAffiliation"]) || array_key_exists("teamAffiliation", $context) ? $context["teamAffiliation"] : (function () { throw new RuntimeError('Variable "teamAffiliation" does not exist.', 22, $this->source); })()))) {
            // line 23
            echo "                    <tr>
                        <th>External ID</th>
                        <td>";
            // line 25
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["teamAffiliation"]) || array_key_exists("teamAffiliation", $context) ? $context["teamAffiliation"] : (function () { throw new RuntimeError('Variable "teamAffiliation" does not exist.', 25, $this->source); })()), "externalid", [], "any", false, false, false, 25), "html", null, true);
            echo "</td>
                    </tr>
                ";
        }
        // line 28
        echo "                <tr>
                    <th>Shortname</th>
                    <td>";
        // line 30
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["teamAffiliation"]) || array_key_exists("teamAffiliation", $context) ? $context["teamAffiliation"] : (function () { throw new RuntimeError('Variable "teamAffiliation" does not exist.', 30, $this->source); })()), "shortname", [], "any", false, false, false, 30), "html", null, true);
        echo "</td>
                </tr>
                <tr>
                    <th>Name</th>
                    <td>";
        // line 34
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["teamAffiliation"]) || array_key_exists("teamAffiliation", $context) ? $context["teamAffiliation"] : (function () { throw new RuntimeError('Variable "teamAffiliation" does not exist.', 34, $this->source); })()), "name", [], "any", false, false, false, 34), "html", null, true);
        echo "</td>
                </tr>
                <tr>
                    <th>Logo</th>
                    <td class=\"affiliation-logo\">
                        ";
        // line 39
        $context["affiliationId"] = twig_get_attribute($this->env, $this->source, (isset($context["teamAffiliation"]) || array_key_exists("teamAffiliation", $context) ? $context["teamAffiliation"] : (function () { throw new RuntimeError('Variable "teamAffiliation" does not exist.', 39, $this->source); })()), "affilid", [], "any", false, false, false, 39);
        // line 40
        echo "                        ";
        if ($this->extensions['App\Twig\TwigExtension']->showExternalId((isset($context["teamAffiliation"]) || array_key_exists("teamAffiliation", $context) ? $context["teamAffiliation"] : (function () { throw new RuntimeError('Variable "teamAffiliation" does not exist.', 40, $this->source); })()))) {
            // line 41
            echo "                            ";
            $context["affiliationId"] = twig_get_attribute($this->env, $this->source, (isset($context["teamAffiliation"]) || array_key_exists("teamAffiliation", $context) ? $context["teamAffiliation"] : (function () { throw new RuntimeError('Variable "teamAffiliation" does not exist.', 41, $this->source); })()), "externalid", [], "any", false, false, false, 41);
            // line 42
            echo "                        ";
        }
        // line 43
        echo "                        ";
        $context["affiliationLogo"] = (("images/affiliations/" . (isset($context["affiliationId"]) || array_key_exists("affiliationId", $context) ? $context["affiliationId"] : (function () { throw new RuntimeError('Variable "affiliationId" does not exist.', 43, $this->source); })())) . ".png");
        // line 44
        echo "                        ";
        if ($this->extensions['App\Twig\TwigExtension']->assetExists((isset($context["affiliationLogo"]) || array_key_exists("affiliationLogo", $context) ? $context["affiliationLogo"] : (function () { throw new RuntimeError('Variable "affiliationLogo" does not exist.', 44, $this->source); })()))) {
            // line 45
            echo "                            <img src=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl((isset($context["affiliationLogo"]) || array_key_exists("affiliationLogo", $context) ? $context["affiliationLogo"] : (function () { throw new RuntimeError('Variable "affiliationLogo" does not exist.', 45, $this->source); })())), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["teamAffiliation"]) || array_key_exists("teamAffiliation", $context) ? $context["teamAffiliation"] : (function () { throw new RuntimeError('Variable "teamAffiliation" does not exist.', 45, $this->source); })()), "shortname", [], "any", false, false, false, 45), "html", null, true);
            echo "\"
                                 title=\"";
            // line 46
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["teamAffiliation"]) || array_key_exists("teamAffiliation", $context) ? $context["teamAffiliation"] : (function () { throw new RuntimeError('Variable "teamAffiliation" does not exist.', 46, $this->source); })()), "shortname", [], "any", false, false, false, 46), "html", null, true);
            echo "\" class=\"affiliation-logo\"/>
                        ";
        } else {
            // line 48
            echo "                            Not available
                        ";
        }
        // line 50
        echo "                    </td>
                </tr>
                ";
        // line 52
        if ((((isset($context["showFlags"]) || array_key_exists("showFlags", $context) ? $context["showFlags"] : (function () { throw new RuntimeError('Variable "showFlags" does not exist.', 52, $this->source); })()) && (isset($context["teamAffiliation"]) || array_key_exists("teamAffiliation", $context) ? $context["teamAffiliation"] : (function () { throw new RuntimeError('Variable "teamAffiliation" does not exist.', 52, $this->source); })())) && twig_get_attribute($this->env, $this->source, (isset($context["teamAffiliation"]) || array_key_exists("teamAffiliation", $context) ? $context["teamAffiliation"] : (function () { throw new RuntimeError('Variable "teamAffiliation" does not exist.', 52, $this->source); })()), "country", [], "any", false, false, false, 52))) {
            // line 53
            echo "                    <tr>
                        <th>Country</th>
                        <td>
                            ";
            // line 56
            if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["teamAffiliation"]) || array_key_exists("teamAffiliation", $context) ? $context["teamAffiliation"] : (function () { throw new RuntimeError('Variable "teamAffiliation" does not exist.', 56, $this->source); })()), "country", [], "any", false, false, false, 56))) {
                // line 57
                echo "                                ";
                $context["countryFlag"] = (("images/countries/" . twig_get_attribute($this->env, $this->source, (isset($context["teamAffiliation"]) || array_key_exists("teamAffiliation", $context) ? $context["teamAffiliation"] : (function () { throw new RuntimeError('Variable "teamAffiliation" does not exist.', 57, $this->source); })()), "country", [], "any", false, false, false, 57)) . ".png");
                // line 58
                echo "                                ";
                if ($this->extensions['App\Twig\TwigExtension']->assetExists((isset($context["countryFlag"]) || array_key_exists("countryFlag", $context) ? $context["countryFlag"] : (function () { throw new RuntimeError('Variable "countryFlag" does not exist.', 58, $this->source); })()))) {
                    // line 59
                    echo "                                    <img src=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl((isset($context["countryFlag"]) || array_key_exists("countryFlag", $context) ? $context["countryFlag"] : (function () { throw new RuntimeError('Variable "countryFlag" does not exist.', 59, $this->source); })())), "html", null, true);
                    echo "\" alt=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["alpha3_countries"]) || array_key_exists("alpha3_countries", $context) ? $context["alpha3_countries"] : (function () { throw new RuntimeError('Variable "alpha3_countries" does not exist.', 59, $this->source); })()), twig_get_attribute($this->env, $this->source, (isset($context["teamAffiliation"]) || array_key_exists("teamAffiliation", $context) ? $context["teamAffiliation"] : (function () { throw new RuntimeError('Variable "teamAffiliation" does not exist.', 59, $this->source); })()), "country", [], "any", false, false, false, 59), [], "array", false, false, false, 59), "html", null, true);
                    echo "\"
                                         title=\"";
                    // line 60
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["alpha3_countries"]) || array_key_exists("alpha3_countries", $context) ? $context["alpha3_countries"] : (function () { throw new RuntimeError('Variable "alpha3_countries" does not exist.', 60, $this->source); })()), twig_get_attribute($this->env, $this->source, (isset($context["teamAffiliation"]) || array_key_exists("teamAffiliation", $context) ? $context["teamAffiliation"] : (function () { throw new RuntimeError('Variable "teamAffiliation" does not exist.', 60, $this->source); })()), "country", [], "any", false, false, false, 60), [], "array", false, false, false, 60), "html", null, true);
                    echo "\" class=\"countryflag\"/>
                                ";
                }
                // line 62
                echo "                            ";
            }
            // line 63
            echo "                            ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["alpha3_countries"]) || array_key_exists("alpha3_countries", $context) ? $context["alpha3_countries"] : (function () { throw new RuntimeError('Variable "alpha3_countries" does not exist.', 63, $this->source); })()), twig_get_attribute($this->env, $this->source, (isset($context["teamAffiliation"]) || array_key_exists("teamAffiliation", $context) ? $context["teamAffiliation"] : (function () { throw new RuntimeError('Variable "teamAffiliation" does not exist.', 63, $this->source); })()), "country", [], "any", false, false, false, 63), [], "array", false, false, false, 63), "html", null, true);
            echo "
                        </td>
                    </tr>
                ";
        }
        // line 67
        echo "                ";
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["teamAffiliation"]) || array_key_exists("teamAffiliation", $context) ? $context["teamAffiliation"] : (function () { throw new RuntimeError('Variable "teamAffiliation" does not exist.', 67, $this->source); })()), "comments", [], "any", false, false, false, 67))) {
            // line 68
            echo "                    <tr>
                        <th>Comments</th>
                        <td>";
            // line 70
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["teamAffiliation"]) || array_key_exists("teamAffiliation", $context) ? $context["teamAffiliation"] : (function () { throw new RuntimeError('Variable "teamAffiliation" does not exist.', 70, $this->source); })()), "comments", [], "any", false, false, false, 70), "html", null, true);
            echo "</td>
                    </tr>
                ";
        }
        // line 73
        echo "            </table>
        </div>
    </div>";
        // line 77
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 78
            echo "<p>
            ";
            // line 79
            echo $this->extensions['App\Twig\TwigExtension']->button($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_team_affiliation_edit", ["affilId" => twig_get_attribute($this->env, $this->source, (isset($context["teamAffiliation"]) || array_key_exists("teamAffiliation", $context) ? $context["teamAffiliation"] : (function () { throw new RuntimeError('Variable "teamAffiliation" does not exist.', 79, $this->source); })()), "affilid", [], "any", false, false, false, 79)]), "Edit", "primary", "edit");
            echo "
            ";
            // line 80
            echo $this->extensions['App\Twig\TwigExtension']->button($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_team_affiliation_delete", ["affilId" => twig_get_attribute($this->env, $this->source, (isset($context["teamAffiliation"]) || array_key_exists("teamAffiliation", $context) ? $context["teamAffiliation"] : (function () { throw new RuntimeError('Variable "teamAffiliation" does not exist.', 80, $this->source); })()), "affilid", [], "any", false, false, false, 80)]), "Delete", "danger", "trash-alt", true);
            echo "
        </p>
    ";
        }
        // line 83
        echo "
    <h2>Teams from ";
        // line 84
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["teamAffiliation"]) || array_key_exists("teamAffiliation", $context) ? $context["teamAffiliation"] : (function () { throw new RuntimeError('Variable "teamAffiliation" does not exist.', 84, $this->source); })()), "name", [], "any", false, false, false, 84), "html", null, true);
        echo "</h2>
    ";
        // line 85
        if (twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["teamAffiliation"]) || array_key_exists("teamAffiliation", $context) ? $context["teamAffiliation"] : (function () { throw new RuntimeError('Variable "teamAffiliation" does not exist.', 85, $this->source); })()), "teams", [], "any", false, false, false, 85))) {
            // line 86
            echo "        <p class=\"nodata\">no teams</p>
    ";
        } else {
            // line 88
            echo "        <div class=\"row\">
            <div class=\"col-lg-4\">
                <table class=\"data-table table table-sm table-striped table-hover\">
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>Teamname</th>
                    </tr>
                    </thead>
                    <tbody>
                    ";
            // line 98
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["teamAffiliation"]) || array_key_exists("teamAffiliation", $context) ? $context["teamAffiliation"] : (function () { throw new RuntimeError('Variable "teamAffiliation" does not exist.', 98, $this->source); })()), "teams", [], "any", false, false, false, 98));
            foreach ($context['_seq'] as $context["_key"] => $context["team"]) {
                // line 99
                echo "                        <tr>
                            <td>
                                <a href=\"";
                // line 101
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_team", ["teamId" => twig_get_attribute($this->env, $this->source, $context["team"], "teamid", [], "any", false, false, false, 101)]), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["team"], "teamid", [], "any", false, false, false, 101), "html", null, true);
                echo "</a>
                            </td>
                            <td>
                                <a href=\"";
                // line 104
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_team", ["teamId" => twig_get_attribute($this->env, $this->source, $context["team"], "teamid", [], "any", false, false, false, 104)]), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["team"], "name", [], "any", false, false, false, 104), "html", null, true);
                echo "</a>
                            </td>
                        </tr>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['team'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 108
            echo "                    </tbody>
                </table>
            </div>
        </div>

        ";
            // line 113
            if ((isset($context["scoreboard"]) || array_key_exists("scoreboard", $context))) {
                // line 114
                echo "            <div data-ajax-refresh-target>
                ";
                // line 115
                $this->loadTemplate("partials/scoreboard_table.html.twig", "jury/team_affiliation.html.twig", 115)->display(twig_array_merge($context, ["displayRank" => true, "jury" => true]));
                // line 116
                echo "            </div>
        ";
            }
            // line 118
            echo "    ";
        }
        // line 119
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "jury/team_affiliation.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  352 => 119,  349 => 118,  345 => 116,  343 => 115,  340 => 114,  338 => 113,  331 => 108,  319 => 104,  311 => 101,  307 => 99,  303 => 98,  291 => 88,  287 => 86,  285 => 85,  281 => 84,  278 => 83,  272 => 80,  268 => 79,  265 => 78,  263 => 77,  259 => 73,  253 => 70,  249 => 68,  246 => 67,  238 => 63,  235 => 62,  230 => 60,  223 => 59,  220 => 58,  217 => 57,  215 => 56,  210 => 53,  208 => 52,  204 => 50,  200 => 48,  195 => 46,  188 => 45,  185 => 44,  182 => 43,  179 => 42,  176 => 41,  173 => 40,  171 => 39,  163 => 34,  156 => 30,  152 => 28,  146 => 25,  142 => 23,  140 => 22,  135 => 20,  125 => 13,  122 => 12,  112 => 11,  100 => 8,  95 => 7,  85 => 6,  63 => 4,  52 => 1,  50 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"jury/base.html.twig\" %}
{% import \"jury/jury_macros.twig\" as macros %}

{% block title %}Affiliation {{ teamAffiliation.affilid }} - {{ parent() }}{% endblock %}

{% block extrahead %}
    {{ parent() }}
    {{ macros.table_extrahead() }}
{% endblock %}

{% block content %}

    <h1>Affiliation: {{ teamAffiliation.name }}</h1>

    <div class=\"row\">
        <div class=\"col-lg-4\">
            <table class=\"table table-sm table-striped\">
                <tr>
                    <th>ID</th>
                    <td>{{ teamAffiliation.affilid }}</td>
                </tr>
                {% if showExternalId(teamAffiliation) %}
                    <tr>
                        <th>External ID</th>
                        <td>{{ teamAffiliation.externalid }}</td>
                    </tr>
                {% endif %}
                <tr>
                    <th>Shortname</th>
                    <td>{{ teamAffiliation.shortname }}</td>
                </tr>
                <tr>
                    <th>Name</th>
                    <td>{{ teamAffiliation.name }}</td>
                </tr>
                <tr>
                    <th>Logo</th>
                    <td class=\"affiliation-logo\">
                        {% set affiliationId = teamAffiliation.affilid %}
                        {% if showExternalId(teamAffiliation) %}
                            {% set affiliationId = teamAffiliation.externalid %}
                        {% endif %}
                        {% set affiliationLogo = 'images/affiliations/' ~ affiliationId ~ '.png' %}
                        {% if affiliationLogo | assetExists %}
                            <img src=\"{{ asset(affiliationLogo) }}\" alt=\"{{ teamAffiliation.shortname }}\"
                                 title=\"{{ teamAffiliation.shortname }}\" class=\"affiliation-logo\"/>
                        {% else %}
                            Not available
                        {% endif %}
                    </td>
                </tr>
                {% if showFlags and teamAffiliation and teamAffiliation.country %}
                    <tr>
                        <th>Country</th>
                        <td>
                            {% if teamAffiliation.country is not empty %}
                                {% set countryFlag = 'images/countries/' ~ teamAffiliation.country ~ '.png' %}
                                {% if countryFlag | assetExists %}
                                    <img src=\"{{ asset(countryFlag) }}\" alt=\"{{ alpha3_countries[teamAffiliation.country] }}\"
                                         title=\"{{ alpha3_countries[teamAffiliation.country] }}\" class=\"countryflag\"/>
                                {% endif %}
                            {% endif %}
                            {{ alpha3_countries[teamAffiliation.country] }}
                        </td>
                    </tr>
                {% endif %}
                {% if teamAffiliation.comments is not empty %}
                    <tr>
                        <th>Comments</th>
                        <td>{{ teamAffiliation.comments }}</td>
                    </tr>
                {% endif %}
            </table>
        </div>
    </div>

    {%- if is_granted('ROLE_ADMIN') -%}
        <p>
            {{ button(path('jury_team_affiliation_edit', {'affilId': teamAffiliation.affilid}), 'Edit', 'primary', 'edit') }}
            {{ button(path('jury_team_affiliation_delete', {'affilId': teamAffiliation.affilid}), 'Delete', 'danger', 'trash-alt', true) }}
        </p>
    {% endif %}

    <h2>Teams from {{ teamAffiliation.name }}</h2>
    {% if teamAffiliation.teams is empty %}
        <p class=\"nodata\">no teams</p>
    {% else %}
        <div class=\"row\">
            <div class=\"col-lg-4\">
                <table class=\"data-table table table-sm table-striped table-hover\">
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>Teamname</th>
                    </tr>
                    </thead>
                    <tbody>
                    {% for team in teamAffiliation.teams %}
                        <tr>
                            <td>
                                <a href=\"{{ path('jury_team', {'teamId': team.teamid}) }}\">{{ team.teamid }}</a>
                            </td>
                            <td>
                                <a href=\"{{ path('jury_team', {'teamId': team.teamid}) }}\">{{ team.name }}</a>
                            </td>
                        </tr>
                    {% endfor %}
                    </tbody>
                </table>
            </div>
        </div>

        {% if scoreboard is defined %}
            <div data-ajax-refresh-target>
                {% include 'partials/scoreboard_table.html.twig' with {displayRank: true, jury: true} %}
            </div>
        {% endif %}
    {% endif %}

{% endblock %}
", "jury/team_affiliation.html.twig", "/opt/domjudge/domserver/webapp/templates/jury/team_affiliation.html.twig");
    }
}
