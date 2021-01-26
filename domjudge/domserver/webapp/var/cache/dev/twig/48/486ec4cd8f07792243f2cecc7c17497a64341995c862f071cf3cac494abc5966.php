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

/* partials/team.html.twig */
class __TwigTemplate_aeb1e208b16cd46aa20a2b56d0f6d1924ce9dd2638ac14175c4cb1ba1f787b0c extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "partials/team.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "partials/team.html.twig"));

        // line 1
        if (twig_test_empty((isset($context["team"]) || array_key_exists("team", $context) ? $context["team"] : (function () { throw new RuntimeError('Variable "team" does not exist.', 1, $this->source); })()))) {
            // line 2
            echo "    <div class=\"alert alert-danger mt-4\">
        No team found by this id.
    </div>
";
        } else {
            // line 6
            echo "
    <div class=\"row\">
        <div class=\"col-lg-";
            // line 8
            echo twig_escape_filter($this->env, (((isset($context["size"]) || array_key_exists("size", $context))) ? (_twig_default_filter((isset($context["size"]) || array_key_exists("size", $context) ? $context["size"] : (function () { throw new RuntimeError('Variable "size" does not exist.', 8, $this->source); })()), 4)) : (4)), "html", null, true);
            echo "\">
            <table class=\"table table-sm table-striped\">
                <tr>
                    <th>Name</th>
                    <td>";
            // line 12
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["team"]) || array_key_exists("team", $context) ? $context["team"] : (function () { throw new RuntimeError('Variable "team" does not exist.', 12, $this->source); })()), "name", [], "any", false, false, false, 12), "html", null, true);
            echo "</td>
                </tr>
                <tr>
                    <th>Category</th>
                    <td>";
            // line 16
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["team"]) || array_key_exists("team", $context) ? $context["team"] : (function () { throw new RuntimeError('Variable "team" does not exist.', 16, $this->source); })()), "category", [], "any", false, false, false, 16), "name", [], "any", false, false, false, 16), "html", null, true);
            echo "</td>
                </tr>
                ";
            // line 18
            if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["team"]) || array_key_exists("team", $context) ? $context["team"] : (function () { throw new RuntimeError('Variable "team" does not exist.', 18, $this->source); })()), "members", [], "any", false, false, false, 18))) {
                // line 19
                echo "                    <tr>
                        <th>Members</th>
                        <td>";
                // line 21
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["team"]) || array_key_exists("team", $context) ? $context["team"] : (function () { throw new RuntimeError('Variable "team" does not exist.', 21, $this->source); })()), "members", [], "any", false, false, false, 21), "html", null, true);
                echo "</td>
                    </tr>
                ";
            }
            // line 24
            echo "                ";
            if (((isset($context["showAffiliations"]) || array_key_exists("showAffiliations", $context) ? $context["showAffiliations"] : (function () { throw new RuntimeError('Variable "showAffiliations" does not exist.', 24, $this->source); })()) &&  !twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["team"]) || array_key_exists("team", $context) ? $context["team"] : (function () { throw new RuntimeError('Variable "team" does not exist.', 24, $this->source); })()), "affiliation", [], "any", false, false, false, 24)))) {
                // line 25
                echo "                    <tr>
                        <th>Affiliation</th>
                        <td>
                        ";
                // line 28
                $context["affiliationId"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["team"]) || array_key_exists("team", $context) ? $context["team"] : (function () { throw new RuntimeError('Variable "team" does not exist.', 28, $this->source); })()), "affiliation", [], "any", false, false, false, 28), "affilid", [], "any", false, false, false, 28);
                // line 29
                echo "                        ";
                if ($this->extensions['App\Twig\TwigExtension']->showExternalId(twig_get_attribute($this->env, $this->source, (isset($context["team"]) || array_key_exists("team", $context) ? $context["team"] : (function () { throw new RuntimeError('Variable "team" does not exist.', 29, $this->source); })()), "affiliation", [], "any", false, false, false, 29))) {
                    // line 30
                    echo "                            ";
                    $context["affiliationId"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["team"]) || array_key_exists("team", $context) ? $context["team"] : (function () { throw new RuntimeError('Variable "team" does not exist.', 30, $this->source); })()), "affiliation", [], "any", false, false, false, 30), "externalid", [], "any", false, false, false, 30);
                    // line 31
                    echo "                        ";
                }
                // line 32
                echo "                        ";
                $context["affiliationLogo"] = (("images/affiliations/" . (isset($context["affiliationId"]) || array_key_exists("affiliationId", $context) ? $context["affiliationId"] : (function () { throw new RuntimeError('Variable "affiliationId" does not exist.', 32, $this->source); })())) . ".png");
                // line 33
                echo "                        ";
                if ($this->extensions['App\Twig\TwigExtension']->assetExists((isset($context["affiliationLogo"]) || array_key_exists("affiliationLogo", $context) ? $context["affiliationLogo"] : (function () { throw new RuntimeError('Variable "affiliationLogo" does not exist.', 33, $this->source); })()))) {
                    // line 34
                    echo "                            <img src=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl((isset($context["affiliationLogo"]) || array_key_exists("affiliationLogo", $context) ? $context["affiliationLogo"] : (function () { throw new RuntimeError('Variable "affiliationLogo" does not exist.', 34, $this->source); })())), "html", null, true);
                    echo "\" alt=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["team"]) || array_key_exists("team", $context) ? $context["team"] : (function () { throw new RuntimeError('Variable "team" does not exist.', 34, $this->source); })()), "affiliation", [], "any", false, false, false, 34), "shortname", [], "any", false, false, false, 34), "html", null, true);
                    echo "\"
                                 title=\"";
                    // line 35
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["team"]) || array_key_exists("team", $context) ? $context["team"] : (function () { throw new RuntimeError('Variable "team" does not exist.', 35, $this->source); })()), "affiliation", [], "any", false, false, false, 35), "shortname", [], "any", false, false, false, 35), "html", null, true);
                    echo "\" class=\"affiliation-logo\">
                        ";
                }
                // line 37
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["team"]) || array_key_exists("team", $context) ? $context["team"] : (function () { throw new RuntimeError('Variable "team" does not exist.', 37, $this->source); })()), "affiliation", [], "any", false, false, false, 37), "name", [], "any", false, false, false, 37), "html", null, true);
                echo "</td>
                    </tr>
                    ";
                // line 39
                if (((isset($context["showFlags"]) || array_key_exists("showFlags", $context) ? $context["showFlags"] : (function () { throw new RuntimeError('Variable "showFlags" does not exist.', 39, $this->source); })()) &&  !twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["team"]) || array_key_exists("team", $context) ? $context["team"] : (function () { throw new RuntimeError('Variable "team" does not exist.', 39, $this->source); })()), "affiliation", [], "any", false, false, false, 39), "country", [], "any", false, false, false, 39)))) {
                    // line 40
                    echo "                        <tr>
                            <th>Country</th>
                            <td>
                                ";
                    // line 43
                    $context["countryFlag"] = (("images/countries/" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["team"]) || array_key_exists("team", $context) ? $context["team"] : (function () { throw new RuntimeError('Variable "team" does not exist.', 43, $this->source); })()), "affiliation", [], "any", false, false, false, 43), "country", [], "any", false, false, false, 43)) . ".png");
                    // line 44
                    echo "                                ";
                    if ($this->extensions['App\Twig\TwigExtension']->assetExists((isset($context["countryFlag"]) || array_key_exists("countryFlag", $context) ? $context["countryFlag"] : (function () { throw new RuntimeError('Variable "countryFlag" does not exist.', 44, $this->source); })()))) {
                        // line 45
                        echo "                                    <img src=\"";
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl((isset($context["countryFlag"]) || array_key_exists("countryFlag", $context) ? $context["countryFlag"] : (function () { throw new RuntimeError('Variable "countryFlag" does not exist.', 45, $this->source); })())), "html", null, true);
                        echo "\" alt=\"";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["alpha3_countries"]) || array_key_exists("alpha3_countries", $context) ? $context["alpha3_countries"] : (function () { throw new RuntimeError('Variable "alpha3_countries" does not exist.', 45, $this->source); })()), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["team"]) || array_key_exists("team", $context) ? $context["team"] : (function () { throw new RuntimeError('Variable "team" does not exist.', 45, $this->source); })()), "affiliation", [], "any", false, false, false, 45), "country", [], "any", false, false, false, 45), [], "array", false, false, false, 45), "html", null, true);
                        echo "\"
                                         title=\"";
                        // line 46
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["alpha3_countries"]) || array_key_exists("alpha3_countries", $context) ? $context["alpha3_countries"] : (function () { throw new RuntimeError('Variable "alpha3_countries" does not exist.', 46, $this->source); })()), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["team"]) || array_key_exists("team", $context) ? $context["team"] : (function () { throw new RuntimeError('Variable "team" does not exist.', 46, $this->source); })()), "affiliation", [], "any", false, false, false, 46), "country", [], "any", false, false, false, 46), [], "array", false, false, false, 46), "html", null, true);
                        echo "\" class=\"countryflag\"/>
                                ";
                    }
                    // line 48
                    echo "                                ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["alpha3_countries"]) || array_key_exists("alpha3_countries", $context) ? $context["alpha3_countries"] : (function () { throw new RuntimeError('Variable "alpha3_countries" does not exist.', 48, $this->source); })()), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["team"]) || array_key_exists("team", $context) ? $context["team"] : (function () { throw new RuntimeError('Variable "team" does not exist.', 48, $this->source); })()), "affiliation", [], "any", false, false, false, 48), "country", [], "any", false, false, false, 48), [], "array", false, false, false, 48), "html", null, true);
                    echo "
                            </td>
                        </tr>
                    ";
                }
                // line 52
                echo "                ";
            }
            // line 53
            echo "                ";
            if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["team"]) || array_key_exists("team", $context) ? $context["team"] : (function () { throw new RuntimeError('Variable "team" does not exist.', 53, $this->source); })()), "room", [], "any", false, false, false, 53))) {
                // line 54
                echo "                    <tr>
                        <th>Location</th>
                        <td>";
                // line 56
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["team"]) || array_key_exists("team", $context) ? $context["team"] : (function () { throw new RuntimeError('Variable "team" does not exist.', 56, $this->source); })()), "room", [], "any", false, false, false, 56), "html", null, true);
                echo "</td>
                    </tr>
                ";
            }
            // line 59
            echo "            </table>
        </div>
    ";
            // line 61
            $context["teamImage"] = (("images/teams/" . twig_get_attribute($this->env, $this->source, (isset($context["team"]) || array_key_exists("team", $context) ? $context["team"] : (function () { throw new RuntimeError('Variable "team" does not exist.', 61, $this->source); })()), "teamId", [], "any", false, false, false, 61)) . ".jpg");
            // line 62
            echo "    ";
            if ($this->extensions['App\Twig\TwigExtension']->assetExists((isset($context["teamImage"]) || array_key_exists("teamImage", $context) ? $context["teamImage"] : (function () { throw new RuntimeError('Variable "teamImage" does not exist.', 62, $this->source); })()))) {
                // line 63
                echo "        <div class=\"col-lg-";
                echo twig_escape_filter($this->env, (((isset($context["size"]) || array_key_exists("size", $context))) ? (_twig_default_filter((isset($context["size"]) || array_key_exists("size", $context) ? $context["size"] : (function () { throw new RuntimeError('Variable "size" does not exist.', 63, $this->source); })()), 4)) : (4)), "html", null, true);
                echo "\">
        <img id=\"teampicture\" src=\"";
                // line 64
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl((isset($context["teamImage"]) || array_key_exists("teamImage", $context) ? $context["teamImage"] : (function () { throw new RuntimeError('Variable "teamImage" does not exist.', 64, $this->source); })())), "html", null, true);
                echo "\" alt=\"Picture of team ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["team"]) || array_key_exists("team", $context) ? $context["team"] : (function () { throw new RuntimeError('Variable "team" does not exist.', 64, $this->source); })()), "name", [], "any", false, false, false, 64), "html", null, true);
                echo "\"
             title=\"Picture of team ";
                // line 65
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["team"]) || array_key_exists("team", $context) ? $context["team"] : (function () { throw new RuntimeError('Variable "team" does not exist.', 65, $this->source); })()), "name", [], "any", false, false, false, 65), "html", null, true);
                echo "\">
        </div>
    ";
            }
            // line 68
            echo "    </div>
";
        }
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "partials/team.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  202 => 68,  196 => 65,  190 => 64,  185 => 63,  182 => 62,  180 => 61,  176 => 59,  170 => 56,  166 => 54,  163 => 53,  160 => 52,  152 => 48,  147 => 46,  140 => 45,  137 => 44,  135 => 43,  130 => 40,  128 => 39,  123 => 37,  118 => 35,  111 => 34,  108 => 33,  105 => 32,  102 => 31,  99 => 30,  96 => 29,  94 => 28,  89 => 25,  86 => 24,  80 => 21,  76 => 19,  74 => 18,  69 => 16,  62 => 12,  55 => 8,  51 => 6,  45 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% if team is empty %}
    <div class=\"alert alert-danger mt-4\">
        No team found by this id.
    </div>
{% else %}

    <div class=\"row\">
        <div class=\"col-lg-{{ size | default(4) }}\">
            <table class=\"table table-sm table-striped\">
                <tr>
                    <th>Name</th>
                    <td>{{ team.name }}</td>
                </tr>
                <tr>
                    <th>Category</th>
                    <td>{{ team.category.name }}</td>
                </tr>
                {% if team.members is not empty %}
                    <tr>
                        <th>Members</th>
                        <td>{{ team.members }}</td>
                    </tr>
                {% endif %}
                {% if showAffiliations and team.affiliation is not empty %}
                    <tr>
                        <th>Affiliation</th>
                        <td>
                        {% set affiliationId = team.affiliation.affilid %}
                        {% if showExternalId(team.affiliation) %}
                            {% set affiliationId = team.affiliation.externalid %}
                        {% endif %}
                        {% set affiliationLogo = 'images/affiliations/' ~ affiliationId ~ '.png' %}
                        {% if affiliationLogo | assetExists %}
                            <img src=\"{{ asset(affiliationLogo) }}\" alt=\"{{ team.affiliation.shortname }}\"
                                 title=\"{{ team.affiliation.shortname }}\" class=\"affiliation-logo\">
                        {% endif %}
{{ team.affiliation.name }}</td>
                    </tr>
                    {% if showFlags and team.affiliation.country is not empty %}
                        <tr>
                            <th>Country</th>
                            <td>
                                {% set countryFlag = 'images/countries/' ~ team.affiliation.country ~ '.png' %}
                                {% if countryFlag | assetExists %}
                                    <img src=\"{{ asset(countryFlag) }}\" alt=\"{{ alpha3_countries[team.affiliation.country] }}\"
                                         title=\"{{ alpha3_countries[team.affiliation.country] }}\" class=\"countryflag\"/>
                                {% endif %}
                                {{ alpha3_countries[team.affiliation.country] }}
                            </td>
                        </tr>
                    {% endif %}
                {% endif %}
                {% if team.room is not empty %}
                    <tr>
                        <th>Location</th>
                        <td>{{ team.room }}</td>
                    </tr>
                {% endif %}
            </table>
        </div>
    {% set teamImage = 'images/teams/' ~ team.teamId ~ '.jpg' %}
    {% if teamImage | assetExists %}
        <div class=\"col-lg-{{ size | default(4) }}\">
        <img id=\"teampicture\" src=\"{{ asset(teamImage) }}\" alt=\"Picture of team {{ team.name }}\"
             title=\"Picture of team {{ team.name }}\">
        </div>
    {% endif %}
    </div>
{% endif %}
", "partials/team.html.twig", "/opt/domjudge/domserver/webapp/templates/partials/team.html.twig");
    }
}
