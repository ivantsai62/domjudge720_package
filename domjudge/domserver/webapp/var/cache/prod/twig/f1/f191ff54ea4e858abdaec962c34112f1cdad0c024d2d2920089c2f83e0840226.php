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
class __TwigTemplate_0c54073b5973fe8e41afc0fece13deae1f16ca8b77645b6673ea981561a34769 extends \Twig\Template
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
        // line 2
        $macros["macros"] = $this->macros["macros"] = $this->loadTemplate("jury/jury_macros.twig", "jury/team.html.twig", 2)->unwrap();
        // line 1
        $this->parent = $this->loadTemplate("jury/base.html.twig", "jury/team.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Team ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["team"] ?? null), "teamid", [], "any", false, false, false, 4), "html", null, true);
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
    ";
        // line 8
        echo twig_call_macro($macros["macros"], "macro_table_extrahead", [], 8, $context, $this->getSourceContext());
        echo "
";
    }

    // line 11
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 12
        echo "
    <h1>Team ";
        // line 13
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["team"] ?? null), "name", [], "any", false, false, false, 13), "html", null, true);
        echo "</h1>

    <div class=\"row\">
        <div class=\"col\">
            <table class=\"table table-sm table-striped\">
                <tr>
                    <th>ID</th>
                    <td>";
        // line 20
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["team"] ?? null), "teamid", [], "any", false, false, false, 20), "html", null, true);
        echo "</td>
                </tr>
                <tr>
                    <th>External ID</th>
                    <td>
                        ";
        // line 25
        if (twig_get_attribute($this->env, $this->source, ($context["team"] ?? null), "externalid", [], "any", false, false, false, 25)) {
            // line 26
            echo "                            ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["team"] ?? null), "externalid", [], "any", false, false, false, 26), "html", null, true);
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
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["team"] ?? null), "name", [], "any", false, false, false, 34), "html", null, true);
        echo "</td>
                </tr>
                <tr>
                    <th>First login</th>
                    <td>
                        ";
        // line 39
        if (( !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["team"] ?? null), "users", [], "any", false, false, false, 39)) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["team"] ?? null), "users", [], "any", false, false, false, 39), "first", [], "any", false, false, false, 39), "firstLogin", [], "any", false, false, false, 39))) {
            // line 40
            echo "                            ";
            echo twig_escape_filter($this->env, $this->extensions['App\Twig\TwigExtension']->printtime(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["team"] ?? null), "users", [], "any", false, false, false, 40), "first", [], "any", false, false, false, 40), "firstLogin", [], "any", false, false, false, 40), "%a %d %b %Y %T %Z"), "html", null, true);
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
        if (( !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["team"] ?? null), "users", [], "any", false, false, false, 49)) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["team"] ?? null), "users", [], "any", false, false, false, 49), "first", [], "any", false, false, false, 49), "lastIpAddress", [], "any", false, false, false, 49))) {
            // line 50
            echo "                            ";
            echo $this->extensions['App\Twig\TwigExtension']->printHost(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["team"] ?? null), "users", [], "any", false, false, false, 50), "first", [], "any", false, false, false, 50), "lastIpAddress", [], "any", false, false, false, 50), true);
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
        if (twig_get_attribute($this->env, $this->source, ($context["team"] ?? null), "penalty", [], "any", false, false, false, 56)) {
            // line 57
            echo "                    <tr>
                        <th>Penalty time</th>
                        <td>";
            // line 59
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["team"] ?? null), "penalty", [], "any", false, false, false, 59), "html", null, true);
            echo "</td>
                    </tr>
                ";
        }
        // line 62
        echo "                ";
        if (twig_get_attribute($this->env, $this->source, ($context["team"] ?? null), "room", [], "any", false, false, false, 62)) {
            // line 63
            echo "                    <tr>
                        <th>Location</th>
                        <td>";
            // line 65
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["team"] ?? null), "room", [], "any", false, false, false, 65), "html", null, true);
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
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["team"] ?? null), "users", [], "any", false, false, false, 71));
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
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_user_add", ["team" => twig_get_attribute($this->env, $this->source, ($context["team"] ?? null), "teamid", [], "any", false, false, false, 74)]), "html", null, true);
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
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_team_category", ["categoryId" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["team"] ?? null), "category", [], "any", false, false, false, 88), "categoryid", [], "any", false, false, false, 88)]), "html", null, true);
        echo "\">
                            ";
        // line 89
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["team"] ?? null), "category", [], "any", false, false, false, 89), "name", [], "any", false, false, false, 89), "html", null, true);
        echo "
                        </a>
                    </td>
                </tr>
                ";
        // line 93
        if ((($context["showAffiliations"] ?? null) && twig_get_attribute($this->env, $this->source, ($context["team"] ?? null), "affiliation", [], "any", false, false, false, 93))) {
            // line 94
            echo "                    <tr>
                        <th>Affiliation</th>
                        <td>
                            ";
            // line 97
            $context["affiliationId"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["team"] ?? null), "affiliation", [], "any", false, false, false, 97), "affilid", [], "any", false, false, false, 97);
            // line 98
            echo "                            ";
            if ($this->extensions['App\Twig\TwigExtension']->showExternalId(twig_get_attribute($this->env, $this->source, ($context["team"] ?? null), "affiliation", [], "any", false, false, false, 98))) {
                // line 99
                echo "                                ";
                $context["affiliationId"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["team"] ?? null), "affiliation", [], "any", false, false, false, 99), "externalid", [], "any", false, false, false, 99);
                // line 100
                echo "                            ";
            }
            // line 101
            echo "                            ";
            $context["affiliationLogo"] = (("images/affiliations/" . ($context["affiliationId"] ?? null)) . ".png");
            // line 102
            echo "                            ";
            if ($this->extensions['App\Twig\TwigExtension']->assetExists(($context["affiliationLogo"] ?? null))) {
                // line 103
                echo "                                <img src=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(($context["affiliationLogo"] ?? null)), "html", null, true);
                echo "\" alt=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["team"] ?? null), "affiliation", [], "any", false, false, false, 103), "shortname", [], "any", false, false, false, 103), "html", null, true);
                echo "\"
                                     title=\"";
                // line 104
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["team"] ?? null), "affiliation", [], "any", false, false, false, 104), "shortname", [], "any", false, false, false, 104), "html", null, true);
                echo "\" class=\"affiliation-logo\"/>
                            ";
            }
            // line 106
            echo "                            <a href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_team_affiliation", ["affilId" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["team"] ?? null), "affiliation", [], "any", false, false, false, 106), "affilid", [], "any", false, false, false, 106)]), "html", null, true);
            echo "\">
                                ";
            // line 107
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["team"] ?? null), "affiliation", [], "any", false, false, false, 107), "name", [], "any", false, false, false, 107), "html", null, true);
            echo "
                            </a>
                        </td>
                    </tr>
                ";
        }
        // line 112
        echo "                ";
        if (((($context["showFlags"] ?? null) && twig_get_attribute($this->env, $this->source, ($context["team"] ?? null), "affiliation", [], "any", false, false, false, 112)) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["team"] ?? null), "affiliation", [], "any", false, false, false, 112), "country", [], "any", false, false, false, 112))) {
            // line 113
            echo "                    <tr>
                        <th>Country</th>
                        <td>
                            ";
            // line 116
            $context["countryFlag"] = (("images/countries/" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["team"] ?? null), "affiliation", [], "any", false, false, false, 116), "country", [], "any", false, false, false, 116)) . ".png");
            // line 117
            echo "                            ";
            if ($this->extensions['App\Twig\TwigExtension']->assetExists(($context["countryFlag"] ?? null))) {
                // line 118
                echo "                                <img src=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(($context["countryFlag"] ?? null)), "html", null, true);
                echo "\" alt=\"";
                echo twig_escape_filter($this->env, (($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = ($context["alpha3_countries"] ?? null)) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4[twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["team"] ?? null), "affiliation", [], "any", false, false, false, 118), "country", [], "any", false, false, false, 118)] ?? null) : null), "html", null, true);
                echo "\"
                                     title=\"";
                // line 119
                echo twig_escape_filter($this->env, (($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = ($context["alpha3_countries"] ?? null)) && is_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) || $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 instanceof ArrayAccess ? ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144[twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["team"] ?? null), "affiliation", [], "any", false, false, false, 119), "country", [], "any", false, false, false, 119)] ?? null) : null), "html", null, true);
                echo "\" class=\"countryflag\"/>
                            ";
            }
            // line 121
            echo "                            ";
            echo twig_escape_filter($this->env, (($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b = ($context["alpha3_countries"] ?? null)) && is_array($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b) || $__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b instanceof ArrayAccess ? ($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b[twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["team"] ?? null), "affiliation", [], "any", false, false, false, 121), "country", [], "any", false, false, false, 121)] ?? null) : null), "html", null, true);
            echo "
                        </td>
                    </tr>
                ";
        }
        // line 125
        echo "                ";
        if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["team"] ?? null), "contests", [], "any", false, false, false, 125)) > 0)) {
            // line 126
            echo "                <tr>
                    <th>Contests</th>
                    <td>
                        ";
            // line 129
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["team"] ?? null), "contests", [], "any", false, false, false, 129));
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
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["team"] ?? null), "comments", [], "any", false, false, false, 135))) {
            // line 136
            echo "                <tr>
                    <th>Comments</th>
                    <td>
                        ";
            // line 139
            echo nl2br(twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["team"] ?? null), "comments", [], "any", false, false, false, 139), "html", null, true));
            echo "
                    </td>
                </tr>
                ";
        }
        // line 143
        echo "                ";
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["team"] ?? null), "members", [], "any", false, false, false, 143))) {
            // line 144
            echo "                    <tr>
                        <th>Members</th>
                        <td>";
            // line 146
            echo nl2br(twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["team"] ?? null), "members", [], "any", false, false, false, 146), "html", null, true));
            echo "</td>
                    </tr>
                ";
        }
        // line 149
        echo "            </table>
        </div>
    ";
        // line 151
        $context["teamImage"] = (("images/teams/" . twig_get_attribute($this->env, $this->source, ($context["team"] ?? null), "teamId", [], "any", false, false, false, 151)) . ".jpg");
        // line 152
        echo "    ";
        if ($this->extensions['App\Twig\TwigExtension']->assetExists(($context["teamImage"] ?? null))) {
            // line 153
            echo "        <div class=\"col\">
        <img id=\"teampicture\" src=\"";
            // line 154
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(($context["teamImage"] ?? null)), "html", null, true);
            echo "\" alt=\"Picture of team ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["team"] ?? null), "name", [], "any", false, false, false, 154), "html", null, true);
            echo "\"
             title=\"Picture of team ";
            // line 155
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["team"] ?? null), "name", [], "any", false, false, false, 155), "html", null, true);
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
            echo $this->extensions['App\Twig\TwigExtension']->button($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_team_edit", ["teamId" => twig_get_attribute($this->env, $this->source, ($context["team"] ?? null), "teamid", [], "any", false, false, false, 162)]), "Edit", "primary", "edit");
            echo "
            ";
            // line 163
            echo $this->extensions['App\Twig\TwigExtension']->button($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_team_delete", ["teamId" => twig_get_attribute($this->env, $this->source, ($context["team"] ?? null), "teamid", [], "any", false, false, false, 163)]), "Delete", "danger", "trash-alt", true);
            echo "
        ";
        }
        // line 165
        echo "        ";
        echo $this->extensions['App\Twig\TwigExtension']->button($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_clarification_send", ["teamto" => twig_get_attribute($this->env, $this->source, ($context["team"] ?? null), "teamid", [], "any", false, false, false, 165)]), "Send message", "secondary", "envelope");
        echo "
        ";
        // line 166
        $this->loadTemplate("jury/partials/rejudge_form.html.twig", "jury/team.html.twig", 166)->display(twig_array_merge($context, ["table" => "team", "id" => twig_get_attribute($this->env, $this->source, ($context["team"] ?? null), "teamid", [], "any", false, false, false, 166), "buttonClass" => "btn-secondary"]));
        // line 167
        echo "    </p>

    <div data-ajax-refresh-target>
        ";
        // line 170
        $this->loadTemplate("jury/partials/team_score_and_submissions.html.twig", "jury/team.html.twig", 170)->display($context);
        // line 171
        echo "    </div>

";
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
        return array (  432 => 171,  430 => 170,  425 => 167,  423 => 166,  418 => 165,  413 => 163,  409 => 162,  407 => 161,  403 => 158,  397 => 155,  391 => 154,  388 => 153,  385 => 152,  383 => 151,  379 => 149,  373 => 146,  369 => 144,  366 => 143,  359 => 139,  354 => 136,  351 => 135,  346 => 132,  335 => 130,  331 => 129,  326 => 126,  323 => 125,  315 => 121,  310 => 119,  303 => 118,  300 => 117,  298 => 116,  293 => 113,  290 => 112,  282 => 107,  277 => 106,  272 => 104,  265 => 103,  262 => 102,  259 => 101,  256 => 100,  253 => 99,  250 => 98,  248 => 97,  243 => 94,  241 => 93,  234 => 89,  230 => 88,  218 => 78,  207 => 74,  197 => 72,  192 => 71,  187 => 68,  181 => 65,  177 => 63,  174 => 62,  168 => 59,  164 => 57,  162 => 56,  158 => 54,  154 => 52,  148 => 50,  146 => 49,  139 => 44,  135 => 42,  129 => 40,  127 => 39,  119 => 34,  113 => 30,  109 => 28,  103 => 26,  101 => 25,  93 => 20,  83 => 13,  80 => 12,  76 => 11,  70 => 8,  65 => 7,  61 => 6,  51 => 4,  46 => 1,  44 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "jury/team.html.twig", "/opt/domjudge/domserver/webapp/templates/jury/team.html.twig");
    }
}
