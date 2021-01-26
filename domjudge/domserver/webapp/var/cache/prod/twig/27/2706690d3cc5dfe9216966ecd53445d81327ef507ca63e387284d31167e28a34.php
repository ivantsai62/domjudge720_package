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

/* jury/team_category.html.twig */
class __TwigTemplate_c105beafceecd9aeb52bd1ccd4a684d91fd8a6e96f8150e08e37811e552855a8 extends \Twig\Template
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
        $macros["macros"] = $this->macros["macros"] = $this->loadTemplate("jury/jury_macros.twig", "jury/team_category.html.twig", 2)->unwrap();
        // line 1
        $this->parent = $this->loadTemplate("jury/base.html.twig", "jury/team_category.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Category ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["teamCategory"] ?? null), "categoryid", [], "any", false, false, false, 4), "html", null, true);
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
    <h1>Category ";
        // line 13
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["teamCategory"] ?? null), "categoryid", [], "any", false, false, false, 13), "html", null, true);
        echo "</h1>

    <div class=\"row\">
        <div class=\"col-lg-4\">
            <table class=\"table table-sm table-striped\">
                <tr>
                    <th>ID</th>
                    <td>";
        // line 20
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["teamCategory"] ?? null), "categoryid", [], "any", false, false, false, 20), "html", null, true);
        echo "</td>
                </tr>
                <tr>
                    <th>Name</th>
                    <td>";
        // line 24
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["teamCategory"] ?? null), "name", [], "any", false, false, false, 24), "html", null, true);
        echo "</td>
                </tr>
                <tr>
                    <th>Sortorder</th>
                    <td>";
        // line 28
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["teamCategory"] ?? null), "sortorder", [], "any", false, false, false, 28), "html", null, true);
        echo "</td>
                </tr>
                ";
        // line 30
        if (twig_get_attribute($this->env, $this->source, ($context["teamCategory"] ?? null), "color", [], "any", false, false, false, 30)) {
            // line 31
            echo "                    <tr>
                        <th>Color</th>
                        <td style=\"background-color: ";
            // line 33
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["teamCategory"] ?? null), "color", [], "any", false, false, false, 33), "html", null, true);
            echo ";\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["teamCategory"] ?? null), "color", [], "any", false, false, false, 33), "html", null, true);
            echo "</td>
                    </tr>
                ";
        }
        // line 36
        echo "                <tr>
                    <th>Visible</th>
                    <td>";
        // line 38
        echo twig_escape_filter($this->env, $this->extensions['App\Twig\TwigExtension']->printYesNo(twig_get_attribute($this->env, $this->source, ($context["teamCategory"] ?? null), "visible", [], "any", false, false, false, 38)), "html", null, true);
        echo "</td>
                </tr>
            </table>
        </div>
    </div>";
        // line 44
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 45
            echo "<p>
            ";
            // line 46
            echo $this->extensions['App\Twig\TwigExtension']->button($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_team_category_edit", ["categoryId" => twig_get_attribute($this->env, $this->source, ($context["teamCategory"] ?? null), "categoryid", [], "any", false, false, false, 46)]), "Edit", "primary", "edit");
            echo "
            ";
            // line 47
            echo $this->extensions['App\Twig\TwigExtension']->button($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_team_category_delete", ["categoryId" => twig_get_attribute($this->env, $this->source, ($context["teamCategory"] ?? null), "categoryid", [], "any", false, false, false, 47)]), "Delete", "danger", "trash-alt", true);
            echo "
        </p>
    ";
        }
        // line 50
        echo "
    <h2>Teams in ";
        // line 51
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["teamCategory"] ?? null), "name", [], "any", false, false, false, 51), "html", null, true);
        echo "</h2>
    ";
        // line 52
        if (twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["teamCategory"] ?? null), "teams", [], "any", false, false, false, 52))) {
            // line 53
            echo "        <p class=\"nodata\">no teams</p>
    ";
        } else {
            // line 55
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
            // line 65
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["teamCategory"] ?? null), "teams", [], "any", false, false, false, 65));
            foreach ($context['_seq'] as $context["_key"] => $context["team"]) {
                // line 66
                echo "                        <tr>
                            <td>
                                <a href=\"";
                // line 68
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_team", ["teamId" => twig_get_attribute($this->env, $this->source, $context["team"], "teamid", [], "any", false, false, false, 68)]), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["team"], "teamid", [], "any", false, false, false, 68), "html", null, true);
                echo "</a>
                            </td>
                            <td>
                                <a href=\"";
                // line 71
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_team", ["teamId" => twig_get_attribute($this->env, $this->source, $context["team"], "teamid", [], "any", false, false, false, 71)]), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["team"], "name", [], "any", false, false, false, 71), "html", null, true);
                echo "</a>
                            </td>
                        </tr>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['team'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 75
            echo "                    </tbody>
                </table>
            </div>
        </div>

        <h2>Submissions for ";
            // line 80
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["teamCategory"] ?? null), "name", [], "any", false, false, false, 80), "html", null, true);
            echo "</h2>

        <div data-ajax-refresh-target>";
            // line 83
            $this->loadTemplate("jury/partials/submission_list.html.twig", "jury/team_category.html.twig", 83)->display(twig_array_merge($context, ["showTestcases" => false]));
            // line 84
            echo "        </div>
    ";
        }
        // line 86
        echo "
";
    }

    public function getTemplateName()
    {
        return "jury/team_category.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  223 => 86,  219 => 84,  217 => 83,  212 => 80,  205 => 75,  193 => 71,  185 => 68,  181 => 66,  177 => 65,  165 => 55,  161 => 53,  159 => 52,  155 => 51,  152 => 50,  146 => 47,  142 => 46,  139 => 45,  137 => 44,  130 => 38,  126 => 36,  118 => 33,  114 => 31,  112 => 30,  107 => 28,  100 => 24,  93 => 20,  83 => 13,  80 => 12,  76 => 11,  70 => 8,  65 => 7,  61 => 6,  51 => 4,  46 => 1,  44 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "jury/team_category.html.twig", "/opt/domjudge/domserver/webapp/templates/jury/team_category.html.twig");
    }
}
