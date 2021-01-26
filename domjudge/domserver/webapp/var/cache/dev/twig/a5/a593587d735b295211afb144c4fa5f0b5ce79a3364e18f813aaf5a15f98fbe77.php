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
class __TwigTemplate_0c4016b16a56a3b7571cd279f596870e8f72469f5ca0882aab20d9fda79135ed extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "jury/rejudging.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "jury/rejudging.html.twig"));

        // line 2
        $macros["macros"] = $this->macros["macros"] = $this->loadTemplate("jury/jury_macros.twig", "jury/rejudging.html.twig", 2)->unwrap();
        // line 1
        $this->parent = $this->loadTemplate("jury/base.html.twig", "jury/rejudging.html.twig", 1);
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

        echo "Rejudging r";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["rejudging"]) || array_key_exists("rejudging", $context) ? $context["rejudging"] : (function () { throw new RuntimeError('Variable "rejudging" does not exist.', 4, $this->source); })()), "rejudgingid", [], "any", false, false, false, 4), "html", null, true);
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
        // line 9
        echo twig_call_macro($macros["macros"], "macro_select2_extrahead", [], 9, $context, $this->getSourceContext());
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 12
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 13
        echo "
    <h1>Rejudging r";
        // line 14
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["rejudging"]) || array_key_exists("rejudging", $context) ? $context["rejudging"] : (function () { throw new RuntimeError('Variable "rejudging" does not exist.', 14, $this->source); })()), "rejudgingid", [], "any", false, false, false, 14), "html", null, true);
        echo " ";
        if ( !twig_get_attribute($this->env, $this->source, (isset($context["rejudging"]) || array_key_exists("rejudging", $context) ? $context["rejudging"] : (function () { throw new RuntimeError('Variable "rejudging" does not exist.', 14, $this->source); })()), "valid", [], "any", false, false, false, 14)) {
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
        if (twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["rejudging"]) || array_key_exists("rejudging", $context) ? $context["rejudging"] : (function () { throw new RuntimeError('Variable "rejudging" does not exist.', 22, $this->source); })()), "reason", [], "any", false, false, false, 22))) {
            // line 23
            echo "                            <span class=\"nodata\">none</span>
                        ";
        } else {
            // line 25
            echo "                            ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["rejudging"]) || array_key_exists("rejudging", $context) ? $context["rejudging"] : (function () { throw new RuntimeError('Variable "rejudging" does not exist.', 25, $this->source); })()), "reason", [], "any", false, false, false, 25), "html", null, true);
            echo "
                        ";
        }
        // line 27
        echo "                    </td>
                </tr>
                ";
        // line 29
        if (twig_get_attribute($this->env, $this->source, (isset($context["rejudging"]) || array_key_exists("rejudging", $context) ? $context["rejudging"] : (function () { throw new RuntimeError('Variable "rejudging" does not exist.', 29, $this->source); })()), "startUser", [], "any", false, false, false, 29)) {
            // line 30
            echo "                    <tr>
                        <th>Issued by</th>
                        <td>
                            <a href=\"";
            // line 33
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_user", ["userId" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["rejudging"]) || array_key_exists("rejudging", $context) ? $context["rejudging"] : (function () { throw new RuntimeError('Variable "rejudging" does not exist.', 33, $this->source); })()), "startUser", [], "any", false, false, false, 33), "userid", [], "any", false, false, false, 33)]), "html", null, true);
            echo "\">
                                ";
            // line 34
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["rejudging"]) || array_key_exists("rejudging", $context) ? $context["rejudging"] : (function () { throw new RuntimeError('Variable "rejudging" does not exist.', 34, $this->source); })()), "startUser", [], "any", false, false, false, 34), "name", [], "any", false, false, false, 34), "html", null, true);
            echo "
                            </a>
                        </td>
                    </tr>
                ";
        }
        // line 39
        echo "                ";
        if (twig_get_attribute($this->env, $this->source, (isset($context["rejudging"]) || array_key_exists("rejudging", $context) ? $context["rejudging"] : (function () { throw new RuntimeError('Variable "rejudging" does not exist.', 39, $this->source); })()), "finishUser", [], "any", false, false, false, 39)) {
            // line 40
            echo "                    <tr>
                        <th>";
            // line 41
            if (twig_get_attribute($this->env, $this->source, (isset($context["rejudging"]) || array_key_exists("rejudging", $context) ? $context["rejudging"] : (function () { throw new RuntimeError('Variable "rejudging" does not exist.', 41, $this->source); })()), "valid", [], "any", false, false, false, 41)) {
                echo "Accepted";
            } else {
                echo "Canceled";
            }
            echo " by</th>
                        <td>
                            <a href=\"";
            // line 43
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_user", ["userId" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["rejudging"]) || array_key_exists("rejudging", $context) ? $context["rejudging"] : (function () { throw new RuntimeError('Variable "rejudging" does not exist.', 43, $this->source); })()), "finishUser", [], "any", false, false, false, 43), "userid", [], "any", false, false, false, 43)]), "html", null, true);
            echo "\">
                                ";
            // line 44
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["rejudging"]) || array_key_exists("rejudging", $context) ? $context["rejudging"] : (function () { throw new RuntimeError('Variable "rejudging" does not exist.', 44, $this->source); })()), "finishUser", [], "any", false, false, false, 44), "name", [], "any", false, false, false, 44), "html", null, true);
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
        if (twig_get_attribute($this->env, $this->source, (isset($context["rejudging"]) || array_key_exists("rejudging", $context) ? $context["rejudging"] : (function () { throw new RuntimeError('Variable "rejudging" does not exist.', 52, $this->source); })()), "starttime", [], "any", false, false, false, 52)) {
            // line 53
            echo "                            <span title=\"";
            echo twig_escape_filter($this->env, $this->extensions['App\Twig\TwigExtension']->printtime(twig_get_attribute($this->env, $this->source, (isset($context["rejudging"]) || array_key_exists("rejudging", $context) ? $context["rejudging"] : (function () { throw new RuntimeError('Variable "rejudging" does not exist.', 53, $this->source); })()), "starttime", [], "any", false, false, false, 53), "%Y-%m-%d %H:%M:%S (%Z)"), "html", null, true);
            echo "\">
                                ";
            // line 54
            echo twig_escape_filter($this->env, $this->extensions['App\Twig\TwigExtension']->printtime(twig_get_attribute($this->env, $this->source, (isset($context["rejudging"]) || array_key_exists("rejudging", $context) ? $context["rejudging"] : (function () { throw new RuntimeError('Variable "rejudging" does not exist.', 54, $this->source); })()), "starttime", [], "any", false, false, false, 54)), "html", null, true);
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
        if (twig_get_attribute($this->env, $this->source, (isset($context["rejudging"]) || array_key_exists("rejudging", $context) ? $context["rejudging"] : (function () { throw new RuntimeError('Variable "rejudging" does not exist.', 64, $this->source); })()), "endtime", [], "any", false, false, false, 64)) {
            // line 65
            echo "                            <span title=\"";
            echo twig_escape_filter($this->env, $this->extensions['App\Twig\TwigExtension']->printtime(twig_get_attribute($this->env, $this->source, (isset($context["rejudging"]) || array_key_exists("rejudging", $context) ? $context["rejudging"] : (function () { throw new RuntimeError('Variable "rejudging" does not exist.', 65, $this->source); })()), "endtime", [], "any", false, false, false, 65), "%Y-%m-%d %H:%M:%S (%Z)"), "html", null, true);
            echo "\">
                                ";
            // line 66
            echo twig_escape_filter($this->env, $this->extensions['App\Twig\TwigExtension']->printtime(twig_get_attribute($this->env, $this->source, (isset($context["rejudging"]) || array_key_exists("rejudging", $context) ? $context["rejudging"] : (function () { throw new RuntimeError('Variable "rejudging" does not exist.', 66, $this->source); })()), "endtime", [], "any", false, false, false, 66)), "html", null, true);
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
        if (((isset($context["todo"]) || array_key_exists("todo", $context) ? $context["todo"] : (function () { throw new RuntimeError('Variable "todo" does not exist.', 73, $this->source); })()) <= 0)) {
            echo "class=\"d-none\"";
        }
        echo ">
                    <th>Queued</th>
                    <td><span data-todo>";
        // line 75
        echo twig_escape_filter($this->env, (isset($context["todo"]) || array_key_exists("todo", $context) ? $context["todo"] : (function () { throw new RuntimeError('Variable "todo" does not exist.', 75, $this->source); })()), "html", null, true);
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
        $context['_seq'] = twig_ensure_traversable((isset($context["viewTypes"]) || array_key_exists("viewTypes", $context) ? $context["viewTypes"] : (function () { throw new RuntimeError('Variable "viewTypes" does not exist.', 93, $this->source); })()));
        foreach ($context['_seq'] as $context["idx"] => $context["type"]) {
            // line 94
            echo "
            <label class=\"btn btn-secondary ";
            // line 95
            if (($context["idx"] == (isset($context["view"]) || array_key_exists("view", $context) ? $context["view"] : (function () { throw new RuntimeError('Variable "view" does not exist.', 95, $this->source); })()))) {
                echo "active";
            }
            echo "\">
                <input type=\"radio\" name=\"viewtype\" autocomplete=\"off\" value=\"";
            // line 96
            echo twig_escape_filter($this->env, $context["type"], "html", null, true);
            echo "\"
                       ";
            // line 97
            if (($context["idx"] == (isset($context["view"]) || array_key_exists("view", $context) ? $context["view"] : (function () { throw new RuntimeError('Variable "view" does not exist.', 97, $this->source); })()))) {
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
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_rejudging", ["rejudgingId" => twig_get_attribute($this->env, $this->source, (isset($context["rejudging"]) || array_key_exists("rejudging", $context) ? $context["rejudging"] : (function () { throw new RuntimeError('Variable "rejudging" does not exist.', 102, $this->source); })()), "rejudgingid", [], "any", false, false, false, 102)]), "html", null, true);
        echo "\" method=\"get\">
        <input type=\"hidden\" name=\"view\" value=\"";
        // line 103
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["viewTypes"]) || array_key_exists("viewTypes", $context) ? $context["viewTypes"] : (function () { throw new RuntimeError('Variable "viewTypes" does not exist.', 103, $this->source); })()), (isset($context["view"]) || array_key_exists("view", $context) ? $context["view"] : (function () { throw new RuntimeError('Variable "view" does not exist.', 103, $this->source); })()), [], "array", false, false, false, 103), "html", null, true);
        echo "\"/>
        <div class=\"form-row\">
            <div class=\"form-group col-md-4\">
                <label for=\"oldverdict\">Old verdict</label>
                <select style=\"width: 100%\" class=\"select2 form-control\" name=\"oldverdict\" id=\"oldverdict\">
                    <option value=\"all\" ";
        // line 108
        if (((isset($context["oldverdict"]) || array_key_exists("oldverdict", $context) ? $context["oldverdict"] : (function () { throw new RuntimeError('Variable "oldverdict" does not exist.', 108, $this->source); })()) == "all")) {
            echo "selected";
        }
        echo ">all</option>";
        // line 109
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["verdicts"]) || array_key_exists("verdicts", $context) ? $context["verdicts"] : (function () { throw new RuntimeError('Variable "verdicts" does not exist.', 109, $this->source); })()));
        foreach ($context['_seq'] as $context["verdict"] => $context["abbreviation"]) {
            // line 110
            echo "                        <option value=\"";
            echo twig_escape_filter($this->env, $context["verdict"], "html", null, true);
            echo "\" ";
            if (((isset($context["oldverdict"]) || array_key_exists("oldverdict", $context) ? $context["oldverdict"] : (function () { throw new RuntimeError('Variable "oldverdict" does not exist.', 110, $this->source); })()) == $context["verdict"])) {
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
        if (((isset($context["newverdict"]) || array_key_exists("newverdict", $context) ? $context["newverdict"] : (function () { throw new RuntimeError('Variable "newverdict" does not exist.', 120, $this->source); })()) == "all")) {
            echo "selected";
        }
        echo ">all</option>";
        // line 121
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["verdicts"]) || array_key_exists("verdicts", $context) ? $context["verdicts"] : (function () { throw new RuntimeError('Variable "verdicts" does not exist.', 121, $this->source); })()));
        foreach ($context['_seq'] as $context["verdict"] => $context["abbreviation"]) {
            // line 122
            echo "                        <option value=\"";
            echo twig_escape_filter($this->env, $context["verdict"], "html", null, true);
            echo "\" ";
            if (((isset($context["newverdict"]) || array_key_exists("newverdict", $context) ? $context["newverdict"] : (function () { throw new RuntimeError('Variable "newverdict" does not exist.', 122, $this->source); })()) == $context["verdict"])) {
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
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_rejudging", ["rejudgingId" => twig_get_attribute($this->env, $this->source, (isset($context["rejudging"]) || array_key_exists("rejudging", $context) ? $context["rejudging"] : (function () { throw new RuntimeError('Variable "rejudging" does not exist.', 135, $this->source); })()), "rejudgingid", [], "any", false, false, false, 135), "view" => twig_get_attribute($this->env, $this->source, (isset($context["viewTypes"]) || array_key_exists("viewTypes", $context) ? $context["viewTypes"] : (function () { throw new RuntimeError('Variable "viewTypes" does not exist.', 135, $this->source); })()), (isset($context["view"]) || array_key_exists("view", $context) ? $context["view"] : (function () { throw new RuntimeError('Variable "view" does not exist.', 135, $this->source); })()), [], "array", false, false, false, 135)]), "html", null, true);
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
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 147
    public function block_extrafooter($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "extrafooter"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "extrafooter"));

        // line 148
        echo "    <script>
        \$(function () {
            \$('input[name=viewtype]').on('change', function () {
                window.location = '";
        // line 151
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_rejudging", ["rejudgingId" => twig_get_attribute($this->env, $this->source, (isset($context["rejudging"]) || array_key_exists("rejudging", $context) ? $context["rejudging"] : (function () { throw new RuntimeError('Variable "rejudging" does not exist.', 151, $this->source); })()), "rejudgingid", [], "any", false, false, false, 151), "view" => "REPLACE_ME", "oldverdict" => (isset($context["oldverdict"]) || array_key_exists("oldverdict", $context) ? $context["oldverdict"] : (function () { throw new RuntimeError('Variable "oldverdict" does not exist.', 151, $this->source); })()), "newverdict" => (isset($context["newverdict"]) || array_key_exists("newverdict", $context) ? $context["newverdict"] : (function () { throw new RuntimeError('Variable "newverdict" does not exist.', 151, $this->source); })())]), "html", null, true);
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
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

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
        return array (  445 => 151,  440 => 148,  430 => 147,  418 => 143,  416 => 142,  406 => 135,  395 => 126,  387 => 123,  378 => 122,  374 => 121,  369 => 120,  361 => 114,  353 => 111,  344 => 110,  340 => 109,  335 => 108,  327 => 103,  323 => 102,  319 => 100,  307 => 97,  303 => 96,  297 => 95,  294 => 94,  290 => 93,  283 => 87,  281 => 86,  276 => 83,  274 => 82,  264 => 75,  257 => 73,  253 => 71,  249 => 69,  243 => 66,  238 => 65,  236 => 64,  229 => 59,  225 => 57,  219 => 54,  214 => 53,  212 => 52,  207 => 49,  199 => 44,  195 => 43,  186 => 41,  183 => 40,  180 => 39,  172 => 34,  168 => 33,  163 => 30,  161 => 29,  157 => 27,  151 => 25,  147 => 23,  145 => 22,  130 => 14,  127 => 13,  117 => 12,  105 => 9,  101 => 8,  96 => 7,  86 => 6,  64 => 4,  53 => 1,  51 => 2,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"jury/base.html.twig\" %}
{% import \"jury/jury_macros.twig\" as macros %}

{% block title %}Rejudging r{{ rejudging.rejudgingid }} - {{ parent() }}{% endblock %}

{% block extrahead %}
    {{ parent() }}
    {{ macros.table_extrahead() }}
    {{ macros.select2_extrahead() }}
{% endblock %}

{% block content %}

    <h1>Rejudging r{{ rejudging.rejudgingid }} {% if not rejudging.valid %}(canceled){% endif %}</h1>

    <div class=\"row\">
        <div class=\"col-lg-4\">
            <table class=\"table table-sm table-striped\">
                <tr>
                    <th>Reason</th>
                    <td>
                        {% if rejudging.reason is empty %}
                            <span class=\"nodata\">none</span>
                        {% else %}
                            {{ rejudging.reason }}
                        {% endif %}
                    </td>
                </tr>
                {% if rejudging.startUser %}
                    <tr>
                        <th>Issued by</th>
                        <td>
                            <a href=\"{{ path('jury_user', {'userId': rejudging.startUser.userid}) }}\">
                                {{ rejudging.startUser.name }}
                            </a>
                        </td>
                    </tr>
                {% endif %}
                {% if rejudging.finishUser %}
                    <tr>
                        <th>{% if rejudging.valid %}Accepted{% else %}Canceled{% endif %} by</th>
                        <td>
                            <a href=\"{{ path('jury_user', {'userId': rejudging.finishUser.userid}) }}\">
                                {{ rejudging.finishUser.name }}
                            </a>
                        </td>
                    </tr>
                {% endif %}
                <tr>
                    <th>Start time</th>
                    <td>
                        {% if rejudging.starttime %}
                            <span title=\"{{ rejudging.starttime | printtime('%Y-%m-%d %H:%M:%S (%Z)') }}\">
                                {{ rejudging.starttime | printtime }}
                            </span>
                        {% else %}
                            <span class=\"nodata\">-</span>
                        {% endif %}
                    </td>
                </tr>
                <tr>
                    <th>Apply time</th>
                    <td>
                        {% if rejudging.endtime %}
                            <span title=\"{{ rejudging.endtime | printtime('%Y-%m-%d %H:%M:%S (%Z)') }}\">
                                {{ rejudging.endtime | printtime }}
                            </span>
                        {% else %}
                            <span class=\"nodata\">-</span>
                        {% endif %}
                    </td>
                </tr>
                <tr {% if todo <= 0 %}class=\"d-none\"{% endif %}>
                    <th>Queued</th>
                    <td><span data-todo>{{ todo }}</span> unfinished judgings</td>
                </tr>
            </table>
        </div>
    </div>

    <div data-rejudging-buttons>
        {% include 'jury/partials/rejudging_buttons.html.twig' %}
    </div>

    <div data-rejudging-matrix>
        {% include 'jury/partials/rejudging_matrix.html.twig' %}
    </div>

    <h2 class=\"mt-4\">Details</h2>

    Show submissions:
    <div class=\"btn-group btn-group-toggle btn-group-sm mb-3\" data-toggle=\"buttons\">
        {%- for idx, type in viewTypes %}

            <label class=\"btn btn-secondary {% if idx == view %}active{% endif %}\">
                <input type=\"radio\" name=\"viewtype\" autocomplete=\"off\" value=\"{{ type }}\"
                       {% if idx == view %}checked{% endif %}> {{ type }}
            </label>
        {%- endfor %}
    </div>

    <form action=\"{{ path('jury_rejudging', {rejudgingId: rejudging.rejudgingid}) }}\" method=\"get\">
        <input type=\"hidden\" name=\"view\" value=\"{{ viewTypes[view] }}\"/>
        <div class=\"form-row\">
            <div class=\"form-group col-md-4\">
                <label for=\"oldverdict\">Old verdict</label>
                <select style=\"width: 100%\" class=\"select2 form-control\" name=\"oldverdict\" id=\"oldverdict\">
                    <option value=\"all\" {% if oldverdict == 'all' %}selected{% endif %}>all</option>
                    {%- for verdict, abbreviation in verdicts %}
                        <option value=\"{{ verdict }}\" {% if oldverdict == verdict %}selected{% endif %}>
                            {{ verdict }}
                        </option>
                    {%- endfor %}

                </select>
            </div>
            <div class=\"form-group col-md-4\">
                <label for=\"newverdict\">New verdict</label>
                <select style=\"width: 100%\" class=\"select2 form-control\" name=\"newverdict\" id=\"newverdict\">
                    <option value=\"all\" {% if newverdict == 'all' %}selected{% endif %}>all</option>
                    {%- for verdict, abbreviation in verdicts %}
                        <option value=\"{{ verdict }}\" {% if newverdict == verdict %}selected{% endif %}>
                            {{ verdict }}
                        </option>
                    {%- endfor %}

                </select>
            </div>
            <div class=\"form-group col-md-2\">
                <label>&nbsp;</label>
                <input class=\"btn btn-primary form-control\" type=\"submit\" value=\"Filter\"/>
            </div>
            <div class=\"form-group col-md-2\">
                <label>&nbsp;</label>
                <a href=\"{{ path('jury_rejudging', {rejudgingId: rejudging.rejudgingid, view: viewTypes[view]}) }}\"
                   class=\"btn btn-secondary form-control\">Clear</a>
            </div>
        </div>
    </form>

    <div data-ajax-refresh-target data-ajax-refresh-after=\"updateMatrix\">
        {% include 'jury/partials/rejudging_submissions.html.twig' %}
    </div>

{% endblock %}

{% block extrafooter %}
    <script>
        \$(function () {
            \$('input[name=viewtype]').on('change', function () {
                window.location = '{{ path('jury_rejudging', {rejudgingId: rejudging.rejudgingid, view: 'REPLACE_ME', oldverdict: oldverdict, newverdict: newverdict}) }}'.replace('REPLACE_ME', \$(this).val());
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
{% endblock %}
", "jury/rejudging.html.twig", "/opt/domjudge/domserver/webapp/templates/jury/rejudging.html.twig");
    }
}
