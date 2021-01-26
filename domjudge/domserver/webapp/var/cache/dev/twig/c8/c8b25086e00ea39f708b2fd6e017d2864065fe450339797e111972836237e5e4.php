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

/* jury/team.html.twig */
class __TwigTemplate_1fea7a203fd4ca227eec0d24308703b8266650a05df971a974ae2bd6c4b3e9c9 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "jury/team.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "jury/team.html.twig"));

        // line 2
        $macros["macros"] = $this->macros["macros"] = $this->loadTemplate("jury/jury_macros.twig", "jury/team.html.twig", 2)->unwrap();
        // line 1
        $this->parent = $this->loadTemplate("jury/base.html.twig", "jury/team.html.twig", 1);
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

        echo "Team ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["team"]) || array_key_exists("team", $context) ? $context["team"] : (function () { throw new RuntimeError('Variable "team" does not exist.', 4, $this->source); })()), "teamid", [], "any", false, false, false, 4), "html", null, true);
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
    <h1>Team ";
        // line 13
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["team"]) || array_key_exists("team", $context) ? $context["team"] : (function () { throw new RuntimeError('Variable "team" does not exist.', 13, $this->source); })()), "name", [], "any", false, false, false, 13), "html", null, true);
        echo "</h1>

    <div class=\"row\">
        <div class=\"col\">
            <table class=\"table table-sm table-striped\">
                <tr>
                    <th>ID</th>
                    <td>";
        // line 20
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["team"]) || array_key_exists("team", $context) ? $context["team"] : (function () { throw new RuntimeError('Variable "team" does not exist.', 20, $this->source); })()), "teamid", [], "any", false, false, false, 20), "html", null, true);
        echo "</td>
                </tr>
                <tr>
                    <th>External ID</th>
                    <td>
                        ";
        // line 25
        if (twig_get_attribute($this->env, $this->source, (isset($context["team"]) || array_key_exists("team", $context) ? $context["team"] : (function () { throw new RuntimeError('Variable "team" does not exist.', 25, $this->source); })()), "externalid", [], "any", false, false, false, 25)) {
            // line 26
            echo "                            ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["team"]) || array_key_exists("team", $context) ? $context["team"] : (function () { throw new RuntimeError('Variable "team" does not exist.', 26, $this->source); })()), "externalid", [], "any", false, false, false, 26), "html", null, true);
            echo "
                        ";
        } else {
            // line 28
            echo "                            -
                        ";
        }
        // line 30
        echo "                    </td>
                </tr>
                <tr>
                    <th>Name</th>
                    <td>";
        // line 34
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["team"]) || array_key_exists("team", $context) ? $context["team"] : (function () { throw new RuntimeError('Variable "team" does not exist.', 34, $this->source); })()), "name", [], "any", false, false, false, 34), "html", null, true);
        echo "</td>
                </tr>
                <tr>
                    <th>First login</th>
                    <td>
                        ";
        // line 39
        if (( !twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["team"]) || array_key_exists("team", $context) ? $context["team"] : (function () { throw new RuntimeError('Variable "team" does not exist.', 39, $this->source); })()), "users", [], "any", false, false, false, 39)) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["team"]) || array_key_exists("team", $context) ? $context["team"] : (function () { throw new RuntimeError('Variable "team" does not exist.', 39, $this->source); })()), "users", [], "any", false, false, false, 39), "first", [], "any", false, false, false, 39), "firstLogin", [], "any", false, false, false, 39))) {
            // line 40
            echo "                            ";
            echo twig_escape_filter($this->env, $this->extensions['App\Twig\TwigExtension']->printtime(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["team"]) || array_key_exists("team", $context) ? $context["team"] : (function () { throw new RuntimeError('Variable "team" does not exist.', 40, $this->source); })()), "users", [], "any", false, false, false, 40), "first", [], "any", false, false, false, 40), "firstLogin", [], "any", false, false, false, 40), "%a %d %b %Y %T %Z"), "html", null, true);
            echo "
                        ";
        } else {
            // line 42
            echo "                            -
                        ";
        }
        // line 44
        echo "                    </td>
                </tr>
                <tr>
                    <th>IP</th>
                    <td>
                        ";
        // line 49
        if (( !twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["team"]) || array_key_exists("team", $context) ? $context["team"] : (function () { throw new RuntimeError('Variable "team" does not exist.', 49, $this->source); })()), "users", [], "any", false, false, false, 49)) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["team"]) || array_key_exists("team", $context) ? $context["team"] : (function () { throw new RuntimeError('Variable "team" does not exist.', 49, $this->source); })()), "users", [], "any", false, false, false, 49), "first", [], "any", false, false, false, 49), "lastIpAddress", [], "any", false, false, false, 49))) {
            // line 50
            echo "                            ";
            echo $this->extensions['App\Twig\TwigExtension']->printHost(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["team"]) || array_key_exists("team", $context) ? $context["team"] : (function () { throw new RuntimeError('Variable "team" does not exist.', 50, $this->source); })()), "users", [], "any", false, false, false, 50), "first", [], "any", false, false, false, 50), "lastIpAddress", [], "any", false, false, false, 50), true);
            echo "
                        ";
        } else {
            // line 52
            echo "                            -
                        ";
        }
        // line 54
        echo "                    </td>
                </tr>
                ";
        // line 56
        if (twig_get_attribute($this->env, $this->source, (isset($context["team"]) || array_key_exists("team", $context) ? $context["team"] : (function () { throw new RuntimeError('Variable "team" does not exist.', 56, $this->source); })()), "penalty", [], "any", false, false, false, 56)) {
            // line 57
            echo "                    <tr>
                        <th>Penalty time</th>
                        <td>";
            // line 59
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["team"]) || array_key_exists("team", $context) ? $context["team"] : (function () { throw new RuntimeError('Variable "team" does not exist.', 59, $this->source); })()), "penalty", [], "any", false, false, false, 59), "html", null, true);
            echo "</td>
                    </tr>
                ";
        }
        // line 62
        echo "                ";
        if (twig_get_attribute($this->env, $this->source, (isset($context["team"]) || array_key_exists("team", $context) ? $context["team"] : (function () { throw new RuntimeError('Variable "team" does not exist.', 62, $this->source); })()), "room", [], "any", false, false, false, 62)) {
            // line 63
            echo "                    <tr>
                        <th>Location</th>
                        <td>";
            // line 65
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["team"]) || array_key_exists("team", $context) ? $context["team"] : (function () { throw new RuntimeError('Variable "team" does not exist.', 65, $this->source); })()), "room", [], "any", false, false, false, 65), "html", null, true);
            echo "</td>
                    </tr>
                ";
        }
        // line 68
        echo "                <tr>
                    <th>User</th>
                    <td>
                        ";
        // line 71
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["team"]) || array_key_exists("team", $context) ? $context["team"] : (function () { throw new RuntimeError('Variable "team" does not exist.', 71, $this->source); })()), "users", [], "any", false, false, false, 71));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 72
            echo "                            <a href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_user", ["userId" => twig_get_attribute($this->env, $this->source, $context["user"], "userid", [], "any", false, false, false, 72)]), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "username", [], "any", false, false, false, 72), "html", null, true);
            echo "</a>
                        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 74
            echo "                            <a href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_user_add", ["team" => twig_get_attribute($this->env, $this->source, (isset($context["team"]) || array_key_exists("team", $context) ? $context["team"] : (function () { throw new RuntimeError('Variable "team" does not exist.', 74, $this->source); })()), "teamid", [], "any", false, false, false, 74)]), "html", null, true);
            echo "\">
                                <i class=\"fas fa-user-plus\"></i> add user
                            </a>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 78
        echo "                    </td>
                </tr>
            </table>
        </div>

        <div class=\"col\">
            <table class=\"table table-sm table-striped\">
                <tr>
                    <th>Category</th>
                    <td>
                        <a href=\"";
        // line 88
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_team_category", ["categoryId" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["team"]) || array_key_exists("team", $context) ? $context["team"] : (function () { throw new RuntimeError('Variable "team" does not exist.', 88, $this->source); })()), "category", [], "any", false, false, false, 88), "categoryid", [], "any", false, false, false, 88)]), "html", null, true);
        echo "\">
                            ";
        // line 89
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["team"]) || array_key_exists("team", $context) ? $context["team"] : (function () { throw new RuntimeError('Variable "team" does not exist.', 89, $this->source); })()), "category", [], "any", false, false, false, 89), "name", [], "any", false, false, false, 89), "html", null, true);
        echo "
                        </a>
                    </td>
                </tr>
                ";
        // line 93
        if (((isset($context["showAffiliations"]) || array_key_exists("showAffiliations", $context) ? $context["showAffiliations"] : (function () { throw new RuntimeError('Variable "showAffiliations" does not exist.', 93, $this->source); })()) && twig_get_attribute($this->env, $this->source, (isset($context["team"]) || array_key_exists("team", $context) ? $context["team"] : (function () { throw new RuntimeError('Variable "team" does not exist.', 93, $this->source); })()), "affiliation", [], "any", false, false, false, 93))) {
            // line 94
            echo "                    <tr>
                        <th>Affiliation</th>
                        <td>
                            ";
            // line 97
            $context["affiliationId"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["team"]) || array_key_exists("team", $context) ? $context["team"] : (function () { throw new RuntimeError('Variable "team" does not exist.', 97, $this->source); })()), "affiliation", [], "any", false, false, false, 97), "affilid", [], "any", false, false, false, 97);
            // line 98
            echo "                            ";
            if ($this->extensions['App\Twig\TwigExtension']->showExternalId(twig_get_attribute($this->env, $this->source, (isset($context["team"]) || array_key_exists("team", $context) ? $context["team"] : (function () { throw new RuntimeError('Variable "team" does not exist.', 98, $this->source); })()), "affiliation", [], "any", false, false, false, 98))) {
                // line 99
                echo "                                ";
                $context["affiliationId"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["team"]) || array_key_exists("team", $context) ? $context["team"] : (function () { throw new RuntimeError('Variable "team" does not exist.', 99, $this->source); })()), "affiliation", [], "any", false, false, false, 99), "externalid", [], "any", false, false, false, 99);
                // line 100
                echo "                            ";
            }
            // line 101
            echo "                            ";
            $context["affiliationLogo"] = (("images/affiliations/" . (isset($context["affiliationId"]) || array_key_exists("affiliationId", $context) ? $context["affiliationId"] : (function () { throw new RuntimeError('Variable "affiliationId" does not exist.', 101, $this->source); })())) . ".png");
            // line 102
            echo "                            ";
            if ($this->extensions['App\Twig\TwigExtension']->assetExists((isset($context["affiliationLogo"]) || array_key_exists("affiliationLogo", $context) ? $context["affiliationLogo"] : (function () { throw new RuntimeError('Variable "affiliationLogo" does not exist.', 102, $this->source); })()))) {
                // line 103
                echo "                                <img src=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl((isset($context["affiliationLogo"]) || array_key_exists("affiliationLogo", $context) ? $context["affiliationLogo"] : (function () { throw new RuntimeError('Variable "affiliationLogo" does not exist.', 103, $this->source); })())), "html", null, true);
                echo "\" alt=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["team"]) || array_key_exists("team", $context) ? $context["team"] : (function () { throw new RuntimeError('Variable "team" does not exist.', 103, $this->source); })()), "affiliation", [], "any", false, false, false, 103), "shortname", [], "any", false, false, false, 103), "html", null, true);
                echo "\"
                                     title=\"";
                // line 104
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["team"]) || array_key_exists("team", $context) ? $context["team"] : (function () { throw new RuntimeError('Variable "team" does not exist.', 104, $this->source); })()), "affiliation", [], "any", false, false, false, 104), "shortname", [], "any", false, false, false, 104), "html", null, true);
                echo "\" class=\"affiliation-logo\"/>
                            ";
            }
            // line 106
            echo "                            <a href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_team_affiliation", ["affilId" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["team"]) || array_key_exists("team", $context) ? $context["team"] : (function () { throw new RuntimeError('Variable "team" does not exist.', 106, $this->source); })()), "affiliation", [], "any", false, false, false, 106), "affilid", [], "any", false, false, false, 106)]), "html", null, true);
            echo "\">
                                ";
            // line 107
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["team"]) || array_key_exists("team", $context) ? $context["team"] : (function () { throw new RuntimeError('Variable "team" does not exist.', 107, $this->source); })()), "affiliation", [], "any", false, false, false, 107), "name", [], "any", false, false, false, 107), "html", null, true);
            echo "
                            </a>
                        </td>
                    </tr>
                ";
        }
        // line 112
        echo "                ";
        if ((((isset($context["showFlags"]) || array_key_exists("showFlags", $context) ? $context["showFlags"] : (function () { throw new RuntimeError('Variable "showFlags" does not exist.', 112, $this->source); })()) && twig_get_attribute($this->env, $this->source, (isset($context["team"]) || array_key_exists("team", $context) ? $context["team"] : (function () { throw new RuntimeError('Variable "team" does not exist.', 112, $this->source); })()), "affiliation", [], "any", false, false, false, 112)) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["team"]) || array_key_exists("team", $context) ? $context["team"] : (function () { throw new RuntimeError('Variable "team" does not exist.', 112, $this->source); })()), "affiliation", [], "any", false, false, false, 112), "country", [], "any", false, false, false, 112))) {
            // line 113
            echo "                    <tr>
                        <th>Country</th>
                        <td>
                            ";
            // line 116
            $context["countryFlag"] = (("images/countries/" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["team"]) || array_key_exists("team", $context) ? $context["team"] : (function () { throw new RuntimeError('Variable "team" does not exist.', 116, $this->source); })()), "affiliation", [], "any", false, false, false, 116), "country", [], "any", false, false, false, 116)) . ".png");
            // line 117
            echo "                            ";
            if ($this->extensions['App\Twig\TwigExtension']->assetExists((isset($context["countryFlag"]) || array_key_exists("countryFlag", $context) ? $context["countryFlag"] : (function () { throw new RuntimeError('Variable "countryFlag" does not exist.', 117, $this->source); })()))) {
                // line 118
                echo "                                <img src=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl((isset($context["countryFlag"]) || array_key_exists("countryFlag", $context) ? $context["countryFlag"] : (function () { throw new RuntimeError('Variable "countryFlag" does not exist.', 118, $this->source); })())), "html", null, true);
                echo "\" alt=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["alpha3_countries"]) || array_key_exists("alpha3_countries", $context) ? $context["alpha3_countries"] : (function () { throw new RuntimeError('Variable "alpha3_countries" does not exist.', 118, $this->source); })()), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["team"]) || array_key_exists("team", $context) ? $context["team"] : (function () { throw new RuntimeError('Variable "team" does not exist.', 118, $this->source); })()), "affiliation", [], "any", false, false, false, 118), "country", [], "any", false, false, false, 118), [], "array", false, false, false, 118), "html", null, true);
                echo "\"
                                     title=\"";
                // line 119
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["alpha3_countries"]) || array_key_exists("alpha3_countries", $context) ? $context["alpha3_countries"] : (function () { throw new RuntimeError('Variable "alpha3_countries" does not exist.', 119, $this->source); })()), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["team"]) || array_key_exists("team", $context) ? $context["team"] : (function () { throw new RuntimeError('Variable "team" does not exist.', 119, $this->source); })()), "affiliation", [], "any", false, false, false, 119), "country", [], "any", false, false, false, 119), [], "array", false, false, false, 119), "html", null, true);
                echo "\" class=\"countryflag\"/>
                            ";
            }
            // line 121
            echo "                            ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["alpha3_countries"]) || array_key_exists("alpha3_countries", $context) ? $context["alpha3_countries"] : (function () { throw new RuntimeError('Variable "alpha3_countries" does not exist.', 121, $this->source); })()), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["team"]) || array_key_exists("team", $context) ? $context["team"] : (function () { throw new RuntimeError('Variable "team" does not exist.', 121, $this->source); })()), "affiliation", [], "any", false, false, false, 121), "country", [], "any", false, false, false, 121), [], "array", false, false, false, 121), "html", null, true);
            echo "
                        </td>
                    </tr>
                ";
        }
        // line 125
        echo "                ";
        if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["team"]) || array_key_exists("team", $context) ? $context["team"] : (function () { throw new RuntimeError('Variable "team" does not exist.', 125, $this->source); })()), "contests", [], "any", false, false, false, 125)) > 0)) {
            // line 126
            echo "                <tr>
                    <th>Contests</th>
                    <td>
                        ";
            // line 129
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["team"]) || array_key_exists("team", $context) ? $context["team"] : (function () { throw new RuntimeError('Variable "team" does not exist.', 129, $this->source); })()), "contests", [], "any", false, false, false, 129));
            foreach ($context['_seq'] as $context["_key"] => $context["ucontest"]) {
                // line 130
                echo "                            <a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_contest", ["contestId" => twig_get_attribute($this->env, $this->source, $context["ucontest"], "cid", [], "any", false, false, false, 130)]), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ucontest"], "shortname", [], "any", false, false, false, 130), "html", null, true);
                echo "</a>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ucontest'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 132
            echo "                    </td>
                </tr>
                ";
        }
        // line 135
        echo "                ";
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["team"]) || array_key_exists("team", $context) ? $context["team"] : (function () { throw new RuntimeError('Variable "team" does not exist.', 135, $this->source); })()), "comments", [], "any", false, false, false, 135))) {
            // line 136
            echo "                <tr>
                    <th>Comments</th>
                    <td>
                        ";
            // line 139
            echo nl2br(twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["team"]) || array_key_exists("team", $context) ? $context["team"] : (function () { throw new RuntimeError('Variable "team" does not exist.', 139, $this->source); })()), "comments", [], "any", false, false, false, 139), "html", null, true));
            echo "
                    </td>
                </tr>
                ";
        }
        // line 143
        echo "                ";
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["team"]) || array_key_exists("team", $context) ? $context["team"] : (function () { throw new RuntimeError('Variable "team" does not exist.', 143, $this->source); })()), "members", [], "any", false, false, false, 143))) {
            // line 144
            echo "                    <tr>
                        <th>Members</th>
                        <td>";
            // line 146
            echo nl2br(twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["team"]) || array_key_exists("team", $context) ? $context["team"] : (function () { throw new RuntimeError('Variable "team" does not exist.', 146, $this->source); })()), "members", [], "any", false, false, false, 146), "html", null, true));
            echo "</td>
                    </tr>
                ";
        }
        // line 149
        echo "            </table>
        </div>
    ";
        // line 151
        $context["teamImage"] = (("images/teams/" . twig_get_attribute($this->env, $this->source, (isset($context["team"]) || array_key_exists("team", $context) ? $context["team"] : (function () { throw new RuntimeError('Variable "team" does not exist.', 151, $this->source); })()), "teamId", [], "any", false, false, false, 151)) . ".jpg");
        // line 152
        echo "    ";
        if ($this->extensions['App\Twig\TwigExtension']->assetExists((isset($context["teamImage"]) || array_key_exists("teamImage", $context) ? $context["teamImage"] : (function () { throw new RuntimeError('Variable "teamImage" does not exist.', 152, $this->source); })()))) {
            // line 153
            echo "        <div class=\"col\">
        <img id=\"teampicture\" src=\"";
            // line 154
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl((isset($context["teamImage"]) || array_key_exists("teamImage", $context) ? $context["teamImage"] : (function () { throw new RuntimeError('Variable "teamImage" does not exist.', 154, $this->source); })())), "html", null, true);
            echo "\" alt=\"Picture of team ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["team"]) || array_key_exists("team", $context) ? $context["team"] : (function () { throw new RuntimeError('Variable "team" does not exist.', 154, $this->source); })()), "name", [], "any", false, false, false, 154), "html", null, true);
            echo "\"
             title=\"Picture of team ";
            // line 155
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["team"]) || array_key_exists("team", $context) ? $context["team"] : (function () { throw new RuntimeError('Variable "team" does not exist.', 155, $this->source); })()), "name", [], "any", false, false, false, 155), "html", null, true);
            echo "\">
        </div>
    ";
        }
        // line 158
        echo "    </div>

    <p>";
        // line 161
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 162
            echo $this->extensions['App\Twig\TwigExtension']->button($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_team_edit", ["teamId" => twig_get_attribute($this->env, $this->source, (isset($context["team"]) || array_key_exists("team", $context) ? $context["team"] : (function () { throw new RuntimeError('Variable "team" does not exist.', 162, $this->source); })()), "teamid", [], "any", false, false, false, 162)]), "Edit", "primary", "edit");
            echo "
            ";
            // line 163
            echo $this->extensions['App\Twig\TwigExtension']->button($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_team_delete", ["teamId" => twig_get_attribute($this->env, $this->source, (isset($context["team"]) || array_key_exists("team", $context) ? $context["team"] : (function () { throw new RuntimeError('Variable "team" does not exist.', 163, $this->source); })()), "teamid", [], "any", false, false, false, 163)]), "Delete", "danger", "trash-alt", true);
            echo "
        ";
        }
        // line 165
        echo "        ";
        echo $this->extensions['App\Twig\TwigExtension']->button($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_clarification_send", ["teamto" => twig_get_attribute($this->env, $this->source, (isset($context["team"]) || array_key_exists("team", $context) ? $context["team"] : (function () { throw new RuntimeError('Variable "team" does not exist.', 165, $this->source); })()), "teamid", [], "any", false, false, false, 165)]), "Send message", "secondary", "envelope");
        echo "
        ";
        // line 166
        $this->loadTemplate("jury/partials/rejudge_form.html.twig", "jury/team.html.twig", 166)->display(twig_array_merge($context, ["table" => "team", "id" => twig_get_attribute($this->env, $this->source, (isset($context["team"]) || array_key_exists("team", $context) ? $context["team"] : (function () { throw new RuntimeError('Variable "team" does not exist.', 166, $this->source); })()), "teamid", [], "any", false, false, false, 166), "buttonClass" => "btn-secondary"]));
        // line 167
        echo "    </p>

    <div data-ajax-refresh-target>
        ";
        // line 170
        $this->loadTemplate("jury/partials/team_score_and_submissions.html.twig", "jury/team.html.twig", 170)->display($context);
        // line 171
        echo "    </div>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "jury/team.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  474 => 171,  472 => 170,  467 => 167,  465 => 166,  460 => 165,  455 => 163,  451 => 162,  449 => 161,  445 => 158,  439 => 155,  433 => 154,  430 => 153,  427 => 152,  425 => 151,  421 => 149,  415 => 146,  411 => 144,  408 => 143,  401 => 139,  396 => 136,  393 => 135,  388 => 132,  377 => 130,  373 => 129,  368 => 126,  365 => 125,  357 => 121,  352 => 119,  345 => 118,  342 => 117,  340 => 116,  335 => 113,  332 => 112,  324 => 107,  319 => 106,  314 => 104,  307 => 103,  304 => 102,  301 => 101,  298 => 100,  295 => 99,  292 => 98,  290 => 97,  285 => 94,  283 => 93,  276 => 89,  272 => 88,  260 => 78,  249 => 74,  239 => 72,  234 => 71,  229 => 68,  223 => 65,  219 => 63,  216 => 62,  210 => 59,  206 => 57,  204 => 56,  200 => 54,  196 => 52,  190 => 50,  188 => 49,  181 => 44,  177 => 42,  171 => 40,  169 => 39,  161 => 34,  155 => 30,  151 => 28,  145 => 26,  143 => 25,  135 => 20,  125 => 13,  122 => 12,  112 => 11,  100 => 8,  95 => 7,  85 => 6,  63 => 4,  52 => 1,  50 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"jury/base.html.twig\" %}
{% import \"jury/jury_macros.twig\" as macros %}

{% block title %}Team {{ team.teamid }} - {{ parent() }}{% endblock %}

{% block extrahead %}
    {{ parent() }}
    {{ macros.table_extrahead() }}
{% endblock %}

{% block content %}

    <h1>Team {{ team.name }}</h1>

    <div class=\"row\">
        <div class=\"col\">
            <table class=\"table table-sm table-striped\">
                <tr>
                    <th>ID</th>
                    <td>{{ team.teamid }}</td>
                </tr>
                <tr>
                    <th>External ID</th>
                    <td>
                        {% if team.externalid %}
                            {{ team.externalid }}
                        {% else %}
                            -
                        {% endif %}
                    </td>
                </tr>
                <tr>
                    <th>Name</th>
                    <td>{{ team.name }}</td>
                </tr>
                <tr>
                    <th>First login</th>
                    <td>
                        {% if team.users is not empty and team.users.first.firstLogin %}
                            {{ team.users.first.firstLogin | printtime('%a %d %b %Y %T %Z') }}
                        {% else %}
                            -
                        {% endif %}
                    </td>
                </tr>
                <tr>
                    <th>IP</th>
                    <td>
                        {% if team.users is not empty and team.users.first.lastIpAddress %}
                            {{ team.users.first.lastIpAddress | printHost(true) }}
                        {% else %}
                            -
                        {% endif %}
                    </td>
                </tr>
                {% if team.penalty %}
                    <tr>
                        <th>Penalty time</th>
                        <td>{{ team.penalty }}</td>
                    </tr>
                {% endif %}
                {% if team.room %}
                    <tr>
                        <th>Location</th>
                        <td>{{ team.room }}</td>
                    </tr>
                {% endif %}
                <tr>
                    <th>User</th>
                    <td>
                        {% for user in team.users %}
                            <a href=\"{{ path('jury_user', {'userId': user.userid}) }}\">{{ user.username }}</a>
                        {% else %}
                            <a href=\"{{ path('jury_user_add', {'team': team.teamid}) }}\">
                                <i class=\"fas fa-user-plus\"></i> add user
                            </a>
                        {% endfor %}
                    </td>
                </tr>
            </table>
        </div>

        <div class=\"col\">
            <table class=\"table table-sm table-striped\">
                <tr>
                    <th>Category</th>
                    <td>
                        <a href=\"{{ path('jury_team_category', {'categoryId': team.category.categoryid}) }}\">
                            {{ team.category.name }}
                        </a>
                    </td>
                </tr>
                {% if showAffiliations and team.affiliation %}
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
                                     title=\"{{ team.affiliation.shortname }}\" class=\"affiliation-logo\"/>
                            {% endif %}
                            <a href=\"{{ path('jury_team_affiliation', {'affilId': team.affiliation.affilid}) }}\">
                                {{ team.affiliation.name }}
                            </a>
                        </td>
                    </tr>
                {% endif %}
                {% if showFlags and team.affiliation and team.affiliation.country %}
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
                {% if team.contests|length > 0 %}
                <tr>
                    <th>Contests</th>
                    <td>
                        {% for ucontest in team.contests %}
                            <a href=\"{{ path('jury_contest', {'contestId': ucontest.cid}) }}\">{{ ucontest.shortname }}</a>
                        {% endfor %}
                    </td>
                </tr>
                {% endif %}
                {% if team.comments is not empty %}
                <tr>
                    <th>Comments</th>
                    <td>
                        {{ team.comments | nl2br }}
                    </td>
                </tr>
                {% endif %}
                {% if team.members is not empty %}
                    <tr>
                        <th>Members</th>
                        <td>{{ team.members | nl2br }}</td>
                    </tr>
                {% endif %}
            </table>
        </div>
    {% set teamImage = 'images/teams/' ~ team.teamId ~ '.jpg' %}
    {% if teamImage | assetExists %}
        <div class=\"col\">
        <img id=\"teampicture\" src=\"{{ asset(teamImage) }}\" alt=\"Picture of team {{ team.name }}\"
             title=\"Picture of team {{ team.name }}\">
        </div>
    {% endif %}
    </div>

    <p>
        {%- if is_granted('ROLE_ADMIN') -%}
            {{ button(path('jury_team_edit', {'teamId': team.teamid}), 'Edit', 'primary', 'edit') }}
            {{ button(path('jury_team_delete', {'teamId': team.teamid}), 'Delete', 'danger', 'trash-alt', true) }}
        {% endif %}
        {{ button(path('jury_clarification_send', {'teamto': team.teamid}), 'Send message', 'secondary', 'envelope') }}
        {% include 'jury/partials/rejudge_form.html.twig' with {table: 'team', id: team.teamid, buttonClass: 'btn-secondary'} %}
    </p>

    <div data-ajax-refresh-target>
        {% include 'jury/partials/team_score_and_submissions.html.twig' %}
    </div>

{% endblock %}
", "jury/team.html.twig", "/opt/domjudge/domserver/webapp/templates/jury/team.html.twig");
    }
}
