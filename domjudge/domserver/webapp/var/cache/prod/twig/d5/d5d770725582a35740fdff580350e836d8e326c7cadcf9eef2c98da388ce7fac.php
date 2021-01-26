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

/* jury/rejudging.html.twig */
class __TwigTemplate_4c19605e4ac1a91ce13d7d067d4d6fc992e4e85b17c22f9de7d972a31256c87e extends \Twig\Template
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
            'extrafooter' => [$this, 'block_extrafooter'],
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
        $macros["macros"] = $this->macros["macros"] = $this->loadTemplate("jury/jury_macros.twig", "jury/rejudging.html.twig", 2)->unwrap();
        // line 1
        $this->parent = $this->loadTemplate("jury/base.html.twig", "jury/rejudging.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Rejudging r";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["rejudging"] ?? null), "rejudgingid", [], "any", false, false, false, 4), "html", null, true);
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
        // line 9
        echo twig_call_macro($macros["macros"], "macro_select2_extrahead", [], 9, $context, $this->getSourceContext());
        echo "
";
    }

    // line 12
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 13
        echo "
    <h1>Rejudging r";
        // line 14
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["rejudging"] ?? null), "rejudgingid", [], "any", false, false, false, 14), "html", null, true);
        echo " ";
        if ( !twig_get_attribute($this->env, $this->source, ($context["rejudging"] ?? null), "valid", [], "any", false, false, false, 14)) {
            echo "(canceled)";
        }
        echo "</h1>

    <div class=\"row\">
        <div class=\"col-lg-4\">
            <table class=\"table table-sm table-striped\">
                <tr>
                    <th>Reason</th>
                    <td>
                        ";
        // line 22
        if (twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["rejudging"] ?? null), "reason", [], "any", false, false, false, 22))) {
            // line 23
            echo "                            <span class=\"nodata\">none</span>
                        ";
        } else {
            // line 25
            echo "                            ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["rejudging"] ?? null), "reason", [], "any", false, false, false, 25), "html", null, true);
            echo "
                        ";
        }
        // line 27
        echo "                    </td>
                </tr>
                ";
        // line 29
        if (twig_get_attribute($this->env, $this->source, ($context["rejudging"] ?? null), "startUser", [], "any", false, false, false, 29)) {
            // line 30
            echo "                    <tr>
                        <th>Issued by</th>
                        <td>
                            <a href=\"";
            // line 33
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_user", ["userId" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["rejudging"] ?? null), "startUser", [], "any", false, false, false, 33), "userid", [], "any", false, false, false, 33)]), "html", null, true);
            echo "\">
                                ";
            // line 34
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["rejudging"] ?? null), "startUser", [], "any", false, false, false, 34), "name", [], "any", false, false, false, 34), "html", null, true);
            echo "
                            </a>
                        </td>
                    </tr>
                ";
        }
        // line 39
        echo "                ";
        if (twig_get_attribute($this->env, $this->source, ($context["rejudging"] ?? null), "finishUser", [], "any", false, false, false, 39)) {
            // line 40
            echo "                    <tr>
                        <th>";
            // line 41
            if (twig_get_attribute($this->env, $this->source, ($context["rejudging"] ?? null), "valid", [], "any", false, false, false, 41)) {
                echo "Accepted";
            } else {
                echo "Canceled";
            }
            echo " by</th>
                        <td>
                            <a href=\"";
            // line 43
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_user", ["userId" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["rejudging"] ?? null), "finishUser", [], "any", false, false, false, 43), "userid", [], "any", false, false, false, 43)]), "html", null, true);
            echo "\">
                                ";
            // line 44
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["rejudging"] ?? null), "finishUser", [], "any", false, false, false, 44), "name", [], "any", false, false, false, 44), "html", null, true);
            echo "
                            </a>
                        </td>
                    </tr>
                ";
        }
        // line 49
        echo "                <tr>
                    <th>Start time</th>
                    <td>
                        ";
        // line 52
        if (twig_get_attribute($this->env, $this->source, ($context["rejudging"] ?? null), "starttime", [], "any", false, false, false, 52)) {
            // line 53
            echo "                            <span title=\"";
            echo twig_escape_filter($this->env, $this->extensions['App\Twig\TwigExtension']->printtime(twig_get_attribute($this->env, $this->source, ($context["rejudging"] ?? null), "starttime", [], "any", false, false, false, 53), "%Y-%m-%d %H:%M:%S (%Z)"), "html", null, true);
            echo "\">
                                ";
            // line 54
            echo twig_escape_filter($this->env, $this->extensions['App\Twig\TwigExtension']->printtime(twig_get_attribute($this->env, $this->source, ($context["rejudging"] ?? null), "starttime", [], "any", false, false, false, 54)), "html", null, true);
            echo "
                            </span>
                        ";
        } else {
            // line 57
            echo "                            <span class=\"nodata\">-</span>
                        ";
        }
        // line 59
        echo "                    </td>
                </tr>
                <tr>
                    <th>Apply time</th>
                    <td>
                        ";
        // line 64
        if (twig_get_attribute($this->env, $this->source, ($context["rejudging"] ?? null), "endtime", [], "any", false, false, false, 64)) {
            // line 65
            echo "                            <span title=\"";
            echo twig_escape_filter($this->env, $this->extensions['App\Twig\TwigExtension']->printtime(twig_get_attribute($this->env, $this->source, ($context["rejudging"] ?? null), "endtime", [], "any", false, false, false, 65), "%Y-%m-%d %H:%M:%S (%Z)"), "html", null, true);
            echo "\">
                                ";
            // line 66
            echo twig_escape_filter($this->env, $this->extensions['App\Twig\TwigExtension']->printtime(twig_get_attribute($this->env, $this->source, ($context["rejudging"] ?? null), "endtime", [], "any", false, false, false, 66)), "html", null, true);
            echo "
                            </span>
                        ";
        } else {
            // line 69
            echo "                            <span class=\"nodata\">-</span>
                        ";
        }
        // line 71
        echo "                    </td>
                </tr>
                <tr ";
        // line 73
        if ((($context["todo"] ?? null) <= 0)) {
            echo "class=\"d-none\"";
        }
        echo ">
                    <th>Queued</th>
                    <td><span data-todo>";
        // line 75
        echo twig_escape_filter($this->env, ($context["todo"] ?? null), "html", null, true);
        echo "</span> unfinished judgings</td>
                </tr>
            </table>
        </div>
    </div>

    <div data-rejudging-buttons>
        ";
        // line 82
        $this->loadTemplate("jury/partials/rejudging_buttons.html.twig", "jury/rejudging.html.twig", 82)->display($context);
        // line 83
        echo "    </div>

    <div data-rejudging-matrix>
        ";
        // line 86
        $this->loadTemplate("jury/partials/rejudging_matrix.html.twig", "jury/rejudging.html.twig", 86)->display($context);
        // line 87
        echo "    </div>

    <h2 class=\"mt-4\">Details</h2>

    Show submissions:
    <div class=\"btn-group btn-group-toggle btn-group-sm mb-3\" data-toggle=\"buttons\">";
        // line 93
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["viewTypes"] ?? null));
        foreach ($context['_seq'] as $context["idx"] => $context["type"]) {
            // line 94
            echo "
            <label class=\"btn btn-secondary ";
            // line 95
            if (($context["idx"] == ($context["view"] ?? null))) {
                echo "active";
            }
            echo "\">
                <input type=\"radio\" name=\"viewtype\" autocomplete=\"off\" value=\"";
            // line 96
            echo twig_escape_filter($this->env, $context["type"], "html", null, true);
            echo "\"
                       ";
            // line 97
            if (($context["idx"] == ($context["view"] ?? null))) {
                echo "checked";
            }
            echo "> ";
            echo twig_escape_filter($this->env, $context["type"], "html", null, true);
            echo "
            </label>";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['idx'], $context['type'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 100
        echo "    </div>

    <form action=\"";
        // line 102
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_rejudging", ["rejudgingId" => twig_get_attribute($this->env, $this->source, ($context["rejudging"] ?? null), "rejudgingid", [], "any", false, false, false, 102)]), "html", null, true);
        echo "\" method=\"get\">
        <input type=\"hidden\" name=\"view\" value=\"";
        // line 103
        echo twig_escape_filter($this->env, (($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = ($context["viewTypes"] ?? null)) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4[($context["view"] ?? null)] ?? null) : null), "html", null, true);
        echo "\"/>
        <div class=\"form-row\">
            <div class=\"form-group col-md-4\">
                <label for=\"oldverdict\">Old verdict</label>
                <select style=\"width: 100%\" class=\"select2 form-control\" name=\"oldverdict\" id=\"oldverdict\">
                    <option value=\"all\" ";
        // line 108
        if ((($context["oldverdict"] ?? null) == "all")) {
            echo "selected";
        }
        echo ">all</option>";
        // line 109
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["verdicts"] ?? null));
        foreach ($context['_seq'] as $context["verdict"] => $context["abbreviation"]) {
            // line 110
            echo "                        <option value=\"";
            echo twig_escape_filter($this->env, $context["verdict"], "html", null, true);
            echo "\" ";
            if ((($context["oldverdict"] ?? null) == $context["verdict"])) {
                echo "selected";
            }
            echo ">
                            ";
            // line 111
            echo twig_escape_filter($this->env, $context["verdict"], "html", null, true);
            echo "
                        </option>";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['verdict'], $context['abbreviation'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 114
        echo "
                </select>
            </div>
            <div class=\"form-group col-md-4\">
                <label for=\"newverdict\">New verdict</label>
                <select style=\"width: 100%\" class=\"select2 form-control\" name=\"newverdict\" id=\"newverdict\">
                    <option value=\"all\" ";
        // line 120
        if ((($context["newverdict"] ?? null) == "all")) {
            echo "selected";
        }
        echo ">all</option>";
        // line 121
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["verdicts"] ?? null));
        foreach ($context['_seq'] as $context["verdict"] => $context["abbreviation"]) {
            // line 122
            echo "                        <option value=\"";
            echo twig_escape_filter($this->env, $context["verdict"], "html", null, true);
            echo "\" ";
            if ((($context["newverdict"] ?? null) == $context["verdict"])) {
                echo "selected";
            }
            echo ">
                            ";
            // line 123
            echo twig_escape_filter($this->env, $context["verdict"], "html", null, true);
            echo "
                        </option>";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['verdict'], $context['abbreviation'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 126
        echo "
                </select>
            </div>
            <div class=\"form-group col-md-2\">
                <label>&nbsp;</label>
                <input class=\"btn btn-primary form-control\" type=\"submit\" value=\"Filter\"/>
            </div>
            <div class=\"form-group col-md-2\">
                <label>&nbsp;</label>
                <a href=\"";
        // line 135
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_rejudging", ["rejudgingId" => twig_get_attribute($this->env, $this->source, ($context["rejudging"] ?? null), "rejudgingid", [], "any", false, false, false, 135), "view" => (($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = ($context["viewTypes"] ?? null)) && is_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) || $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 instanceof ArrayAccess ? ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144[($context["view"] ?? null)] ?? null) : null)]), "html", null, true);
        echo "\"
                   class=\"btn btn-secondary form-control\">Clear</a>
            </div>
        </div>
    </form>

    <div data-ajax-refresh-target data-ajax-refresh-after=\"updateMatrix\">
        ";
        // line 142
        $this->loadTemplate("jury/partials/rejudging_submissions.html.twig", "jury/rejudging.html.twig", 142)->display($context);
        // line 143
        echo "    </div>

";
    }

    // line 147
    public function block_extrafooter($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 148
        echo "    <script>
        \$(function () {
            \$('input[name=viewtype]').on('change', function () {
                window.location = '";
        // line 151
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_rejudging", ["rejudgingId" => twig_get_attribute($this->env, $this->source, ($context["rejudging"] ?? null), "rejudgingid", [], "any", false, false, false, 151), "view" => "REPLACE_ME", "oldverdict" => ($context["oldverdict"] ?? null), "newverdict" => ($context["newverdict"] ?? null)]), "html", null, true);
        echo "'.replace('REPLACE_ME', \$(this).val());
            });

            \$('.select2').select2();

            window.updateMatrix = function () {
                var \$matrixData = \$('[data-new-rejudging-matrix]');
                var \$matrix = \$('[data-rejudging-matrix]');
                \$matrix.html(\$matrixData.children());

                var \$buttonData = \$('[data-new-rejudging-buttons]');
                var \$button = \$('[data-rejudging-buttons]');
                \$button.html(\$buttonData.children());

                var todo = \$('[data-new-todo]').text();
                var \$todo = \$('[data-todo]');
                \$todo.text(todo);
                if (parseInt(todo) <= 0) {
                    \$todo.closest('tr').addClass('d-none');
                } else {
                    \$todo.closest('tr').removeClass('d-none');
                }
            }
        });
    </script>
";
    }

    public function getTemplateName()
    {
        return "jury/rejudging.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  391 => 151,  386 => 148,  382 => 147,  376 => 143,  374 => 142,  364 => 135,  353 => 126,  345 => 123,  336 => 122,  332 => 121,  327 => 120,  319 => 114,  311 => 111,  302 => 110,  298 => 109,  293 => 108,  285 => 103,  281 => 102,  277 => 100,  265 => 97,  261 => 96,  255 => 95,  252 => 94,  248 => 93,  241 => 87,  239 => 86,  234 => 83,  232 => 82,  222 => 75,  215 => 73,  211 => 71,  207 => 69,  201 => 66,  196 => 65,  194 => 64,  187 => 59,  183 => 57,  177 => 54,  172 => 53,  170 => 52,  165 => 49,  157 => 44,  153 => 43,  144 => 41,  141 => 40,  138 => 39,  130 => 34,  126 => 33,  121 => 30,  119 => 29,  115 => 27,  109 => 25,  105 => 23,  103 => 22,  88 => 14,  85 => 13,  81 => 12,  75 => 9,  71 => 8,  66 => 7,  62 => 6,  52 => 4,  47 => 1,  45 => 2,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "jury/rejudging.html.twig", "/opt/domjudge/domserver/webapp/templates/jury/rejudging.html.twig");
    }
}
