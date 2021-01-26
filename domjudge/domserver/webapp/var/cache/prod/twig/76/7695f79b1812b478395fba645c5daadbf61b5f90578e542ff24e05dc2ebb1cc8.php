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

/* jury/shadow_differences.html.twig */
class __TwigTemplate_34bc0896fe728e450c3b66939c2435887b8bd4dc817cc8cbfe0f93f9e3325544 extends \Twig\Template
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
        $macros["macros"] = $this->macros["macros"] = $this->loadTemplate("jury/jury_macros.twig", "jury/shadow_differences.html.twig", 2)->unwrap();
        // line 1
        $this->parent = $this->loadTemplate("jury/base.html.twig", "jury/shadow_differences.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Shadow differences - ";
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
    <h1>Shadow differences</h1>

    <div data-shadow-matrix>
        ";
        // line 17
        $this->loadTemplate("jury/partials/shadow_matrix.html.twig", "jury/shadow_differences.html.twig", 17)->display($context);
        // line 18
        echo "    </div>

    <h2 class=\"mt-4\">Details</h2>

    Show submissions:
    <div class=\"btn-group btn-group-toggle btn-group-sm mb-3\" data-toggle=\"buttons\">";
        // line 24
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["viewTypes"] ?? null));
        foreach ($context['_seq'] as $context["idx"] => $context["type"]) {
            // line 25
            echo "
            <label class=\"btn btn-secondary ";
            // line 26
            if (($context["idx"] == ($context["view"] ?? null))) {
                echo "active";
            }
            echo "\">
                <input type=\"radio\" name=\"viewtype\" autocomplete=\"off\" value=\"";
            // line 27
            echo twig_escape_filter($this->env, $context["type"], "html", null, true);
            echo "\"
                       ";
            // line 28
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
        // line 31
        echo "    </div>

    <form action=\"";
        // line 33
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_shadow_differences");
        echo "\" method=\"get\">
        <input type=\"hidden\" name=\"view\" value=\"";
        // line 34
        echo twig_escape_filter($this->env, (($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = ($context["viewTypes"] ?? null)) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4[($context["view"] ?? null)] ?? null) : null), "html", null, true);
        echo "\"/>
        <div class=\"form-row\">
            <div class=\"form-group col-md-4\">
                <label for=\"oldverdict\">External verdict</label>
                <select style=\"width: 100%\" class=\"select2 form-control\" name=\"external\"
                        id=\"external\">
                    <option value=\"all\" ";
        // line 40
        if ((($context["external"] ?? null) == "all")) {
            echo "selected";
        }
        echo ">all</option>";
        // line 41
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["verdicts"] ?? null));
        foreach ($context['_seq'] as $context["verdict"] => $context["abbreviation"]) {
            // line 42
            echo "                        <option value=\"";
            echo twig_escape_filter($this->env, $context["verdict"], "html", null, true);
            echo "\"
                                ";
            // line 43
            if ((($context["external"] ?? null) == $context["verdict"])) {
                echo "selected";
            }
            echo ">
                            ";
            // line 44
            echo twig_escape_filter($this->env, $context["verdict"], "html", null, true);
            echo "
                        </option>";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['verdict'], $context['abbreviation'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 47
        echo "
                </select>
            </div>
            <div class=\"form-group col-md-4\">
                <label for=\"newverdict\">Local verdict</label>
                <select style=\"width: 100%\" class=\"select2 form-control\" name=\"local\" id=\"local\">
                    <option value=\"all\" ";
        // line 53
        if ((($context["local"] ?? null) == "all")) {
            echo "selected";
        }
        echo ">all</option>";
        // line 54
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["verdicts"] ?? null));
        foreach ($context['_seq'] as $context["verdict"] => $context["abbreviation"]) {
            // line 55
            echo "                        <option value=\"";
            echo twig_escape_filter($this->env, $context["verdict"], "html", null, true);
            echo "\" ";
            if ((($context["local"] ?? null) == $context["verdict"])) {
                echo "selected";
            }
            echo ">
                            ";
            // line 56
            echo twig_escape_filter($this->env, $context["verdict"], "html", null, true);
            echo "
                        </option>";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['verdict'], $context['abbreviation'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 59
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
        // line 68
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_shadow_differences", ["view" => (($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = ($context["viewTypes"] ?? null)) && is_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) || $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 instanceof ArrayAccess ? ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144[($context["view"] ?? null)] ?? null) : null)]), "html", null, true);
        echo "\"
                   class=\"btn btn-secondary form-control\">Clear</a>
            </div>
        </div>
    </form>

    <div data-ajax-refresh-target data-ajax-refresh-after=\"updateMatrix\">
        ";
        // line 75
        $this->loadTemplate("jury/partials/shadow_submissions.html.twig", "jury/shadow_differences.html.twig", 75)->display($context);
        // line 76
        echo "    </div>

";
    }

    // line 80
    public function block_extrafooter($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 81
        echo "    <script>
        \$(function () {
            \$('input[name=viewtype]').on('change', function () {
                window.location = '";
        // line 84
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_shadow_differences", ["view" => "REPLACE_ME", "external" => ($context["external"] ?? null), "local" => ($context["local"] ?? null)]), "html", null, true);
        echo "'.replace('REPLACE_ME', \$(this).val());
            });

            \$('.select2').select2();

            window.updateMatrix = function () {
                var \$matrixData = \$('[data-new-shadow-matrix]');
                var \$matrix = \$('[data-shadow-matrix]');
                \$matrix.html(\$matrixData.children());
            }
        });
    </script>
";
    }

    public function getTemplateName()
    {
        return "jury/shadow_differences.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  244 => 84,  239 => 81,  235 => 80,  229 => 76,  227 => 75,  217 => 68,  206 => 59,  198 => 56,  189 => 55,  185 => 54,  180 => 53,  172 => 47,  164 => 44,  158 => 43,  153 => 42,  149 => 41,  144 => 40,  135 => 34,  131 => 33,  127 => 31,  115 => 28,  111 => 27,  105 => 26,  102 => 25,  98 => 24,  91 => 18,  89 => 17,  83 => 13,  79 => 12,  73 => 9,  69 => 8,  64 => 7,  60 => 6,  52 => 4,  47 => 1,  45 => 2,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "jury/shadow_differences.html.twig", "/opt/domjudge/domserver/webapp/templates/jury/shadow_differences.html.twig");
    }
}
