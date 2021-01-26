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

/* jury/submissions.html.twig */
class __TwigTemplate_0870c18d2a8a0416348cb26a177969b52cfbf694b4bc36085df4fb7a0fe0e0fe extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "jury/submissions.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "jury/submissions.html.twig"));

        // line 2
        $macros["macros"] = $this->macros["macros"] = $this->loadTemplate("jury/jury_macros.twig", "jury/submissions.html.twig", 2)->unwrap();
        // line 1
        $this->parent = $this->loadTemplate("jury/base.html.twig", "jury/submissions.html.twig", 1);
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

        echo "Submissions - ";
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
    <h1>Submissions</h1>

    Show submissions:
    <div class=\"btn-group btn-group-toggle btn-group-sm mb-3\" data-toggle=\"buttons\">";
        // line 18
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["viewTypes"]) || array_key_exists("viewTypes", $context) ? $context["viewTypes"] : (function () { throw new RuntimeError('Variable "viewTypes" does not exist.', 18, $this->source); })()));
        foreach ($context['_seq'] as $context["idx"] => $context["type"]) {
            // line 19
            echo "
            <label class=\"btn btn-secondary ";
            // line 20
            if (($context["idx"] == (isset($context["view"]) || array_key_exists("view", $context) ? $context["view"] : (function () { throw new RuntimeError('Variable "view" does not exist.', 20, $this->source); })()))) {
                echo "active";
            }
            echo "\">
                <input type=\"radio\" name=\"viewtype\" autocomplete=\"off\" value=\"";
            // line 21
            echo twig_escape_filter($this->env, $context["type"], "html", null, true);
            echo "\"
                       ";
            // line 22
            if (($context["idx"] == (isset($context["view"]) || array_key_exists("view", $context) ? $context["view"] : (function () { throw new RuntimeError('Variable "view" does not exist.', 22, $this->source); })()))) {
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
        // line 25
        echo "
    </div>

    <div class=\"mb-3\">
        <div class=\"btn-group-toggle\" data-toggle=\"buttons\">
            <label class=\"btn btn-outline-secondary ";
        // line 30
        if ((isset($context["hasFilters"]) || array_key_exists("hasFilters", $context) ? $context["hasFilters"] : (function () { throw new RuntimeError('Variable "hasFilters" does not exist.', 30, $this->source); })())) {
            echo "active";
        }
        echo "\">
                <input type=\"checkbox\" id=\"filter-toggle\" ";
        // line 31
        if ((isset($context["hasFilters"]) || array_key_exists("hasFilters", $context) ? $context["hasFilters"] : (function () { throw new RuntimeError('Variable "hasFilters" does not exist.', 31, $this->source); })())) {
            echo "checked";
        }
        echo " autocomplete=\"off\">
                <i class=\"fas fa-filter\"></i> Filter
            </label>
        </div>
        <div class=\"card mt-3";
        // line 35
        if ( !(isset($context["hasFilters"]) || array_key_exists("hasFilters", $context) ? $context["hasFilters"] : (function () { throw new RuntimeError('Variable "hasFilters" does not exist.', 35, $this->source); })())) {
            echo " d-none";
        }
        echo "\" id=\"filter-card\">
            <div class=\"card-body\">
                <div class=\"form-row\">
                    <div class=\"form-group col-sm-6\">
                        <label for=\"problems-filter\">Filter on problem(s)</label>
                        <select class=\"select2 form-control\" multiple data-filter-field=\"problem-id\"
                                data-ajax-url=\"";
        // line 41
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_ajax_data", ["datatype" => "problems", "select2" => true]), "html", null, true);
        echo "\">";
        // line 42
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["filteredProblems"]) || array_key_exists("filteredProblems", $context) ? $context["filteredProblems"] : (function () { throw new RuntimeError('Variable "filteredProblems" does not exist.', 42, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["problem"]) {
            // line 43
            echo "
                                <option value=\"";
            // line 44
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["problem"], "probid", [], "any", false, false, false, 44), "html", null, true);
            echo "\" selected>
                                    ";
            // line 45
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["problem"], "name", [], "any", false, false, false, 45), "html", null, true);
            echo " (p";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["problem"], "probid", [], "any", false, false, false, 45), "html", null, true);
            echo ")
                                </option>";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['problem'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 48
        echo "
                        </select>
                    </div>
                </div>

                <div class=\"form-row\">
                    <div class=\"form-group col-sm-6\">
                        <label for=\"problems-filter\">Filter on language(s)</label>
                        <select class=\"select2 form-control\" multiple data-filter-field=\"language-id\"
                                data-ajax-url=\"";
        // line 57
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_ajax_data", ["datatype" => "languages", "select2" => true]), "html", null, true);
        echo "\">";
        // line 58
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["filteredLanguages"]) || array_key_exists("filteredLanguages", $context) ? $context["filteredLanguages"] : (function () { throw new RuntimeError('Variable "filteredLanguages" does not exist.', 58, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 59
            echo "
                                <option value=\"";
            // line 60
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["language"], "langid", [], "any", false, false, false, 60), "html", null, true);
            echo "\" selected>
                                    ";
            // line 61
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 61), "html", null, true);
            echo " (";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["language"], "langid", [], "any", false, false, false, 61), "html", null, true);
            echo ")
                                </option>";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 64
        echo "
                        </select>
                    </div>
                </div>

                <div class=\"form-row\">
                    <div class=\"form-group col-sm-6\">
                        <label for=\"problems-filter\">Filter on team(s)</label>
                        <select class=\"select2 form-control\" multiple data-filter-field=\"team-id\"
                                data-ajax-url=\"";
        // line 73
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_ajax_data", ["datatype" => "teams", "select2" => true]), "html", null, true);
        echo "\">";
        // line 74
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["filteredTeams"]) || array_key_exists("filteredTeams", $context) ? $context["filteredTeams"] : (function () { throw new RuntimeError('Variable "filteredTeams" does not exist.', 74, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["team"]) {
            // line 75
            echo "
                                <option value=\"";
            // line 76
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["team"], "teamid", [], "any", false, false, false, 76), "html", null, true);
            echo "\" selected>
                                    ";
            // line 77
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["team"], "name", [], "any", false, false, false, 77), "html", null, true);
            echo " (t";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["team"], "teamid", [], "any", false, false, false, 77), "html", null, true);
            echo ")
                                </option>";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['team'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 80
        echo "
                        </select>
                    </div>
                </div>

                <button class=\"btn btn-secondary\" id=\"clear-filters\"><i class=\"fas fa-times-circle\"></i> Clear all
                    filters
                </button>
            </div>
        </div>
    </div>

    <div data-ajax-refresh-target data-ajax-refresh-after=\"process_submissions_filter\">";
        // line 93
        $this->loadTemplate("jury/partials/submission_list.html.twig", "jury/submissions.html.twig", 93)->display(twig_array_merge($context, ["showTestcases" => true]));
        // line 94
        echo "    </div>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 98
    public function block_extrafooter($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "extrafooter"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "extrafooter"));

        // line 99
        echo "    <script>
        \$(function () {
            \$('input[name=viewtype]').on('change', function () {
                window.location = '";
        // line 102
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_submissions", ["view" => "REPLACE_ME"]);
        echo "'.replace('REPLACE_ME', \$(this).val());
            });

            \$('#filter-toggle').on('change', function () {
                if (\$(this).is(':checked')) {
                    \$('#filter-card').removeClass('d-none');
                } else {
                    \$('#filter-card').addClass('d-none');
                }
            });

            \$('.select2').each(function () {
                var \$elem = \$(this);
                \$elem.select2({
                    minimumInputLength: 1,
                    ajax: {
                        url: \$elem.data('ajax-url'),
                        dataType: 'json',
                        delay: 250
                    }
                })
            });

            \$('#clear-filters').on('click', function () {
                \$('select[data-filter-field]').val([]).trigger('change');
            });

            window.process_submissions_filter = function () {
                var \$trs = \$('table.submissions-table > tbody tr');

                var filters = [];

                \$('select[data-filter-field]').each(function () {
                    var \$filterField = \$(this);
                    if (\$filterField.val().length) {
                        filters.push({
                            field: \$filterField.data('filter-field'),
                            values: \$filterField.val()
                        });
                    }
                });

                var submissions_filter = {};
                for (var i = 0; i < filters.length; i++) {
                    submissions_filter[filters[i].field] = filters[i].values;
                }

                setCookie('domjudge_submissionsfilter', JSON.stringify(submissions_filter));

                if (filters.length === 0) {
                    \$trs.show();
                } else {
                    \$trs
                        .hide()
                        .filter(function () {
                            var \$tr = \$(this);

                            for (var i = 0; i < filters.length; i++) {
                                var value = \"\" + \$tr.data(filters[i].field);
                                if (filters[i].values.indexOf(value) === -1) {
                                    return false;
                                }
                            }

                            return true;
                        })
                        .show();
                }
            };

            \$('select[data-filter-field]').on('change', process_submissions_filter);
            window.process_submissions_filter();
        });
    </script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "jury/submissions.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  330 => 102,  325 => 99,  315 => 98,  303 => 94,  301 => 93,  287 => 80,  277 => 77,  273 => 76,  270 => 75,  266 => 74,  263 => 73,  252 => 64,  242 => 61,  238 => 60,  235 => 59,  231 => 58,  228 => 57,  217 => 48,  207 => 45,  203 => 44,  200 => 43,  196 => 42,  193 => 41,  182 => 35,  173 => 31,  167 => 30,  160 => 25,  148 => 22,  144 => 21,  138 => 20,  135 => 19,  131 => 18,  125 => 13,  115 => 12,  103 => 9,  99 => 8,  94 => 7,  84 => 6,  64 => 4,  53 => 1,  51 => 2,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"jury/base.html.twig\" %}
{% import \"jury/jury_macros.twig\" as macros %}

{% block title %}Submissions - {{ parent() }}{% endblock %}

{% block extrahead %}
    {{ parent() }}
    {{ macros.table_extrahead() }}
    {{ macros.select2_extrahead() }}
{% endblock %}

{% block content %}

    <h1>Submissions</h1>

    Show submissions:
    <div class=\"btn-group btn-group-toggle btn-group-sm mb-3\" data-toggle=\"buttons\">
        {%- for idx, type in viewTypes %}

            <label class=\"btn btn-secondary {% if idx == view %}active{% endif %}\">
                <input type=\"radio\" name=\"viewtype\" autocomplete=\"off\" value=\"{{ type }}\"
                       {% if idx == view %}checked{% endif %}> {{ type }}
            </label>
        {%- endfor %}

    </div>

    <div class=\"mb-3\">
        <div class=\"btn-group-toggle\" data-toggle=\"buttons\">
            <label class=\"btn btn-outline-secondary {% if hasFilters %}active{% endif %}\">
                <input type=\"checkbox\" id=\"filter-toggle\" {% if hasFilters %}checked{% endif %} autocomplete=\"off\">
                <i class=\"fas fa-filter\"></i> Filter
            </label>
        </div>
        <div class=\"card mt-3{% if not hasFilters %} d-none{% endif %}\" id=\"filter-card\">
            <div class=\"card-body\">
                <div class=\"form-row\">
                    <div class=\"form-group col-sm-6\">
                        <label for=\"problems-filter\">Filter on problem(s)</label>
                        <select class=\"select2 form-control\" multiple data-filter-field=\"problem-id\"
                                data-ajax-url=\"{{ path('jury_ajax_data', {datatype: 'problems', select2: true}) }}\">
                            {%- for problem in filteredProblems %}

                                <option value=\"{{ problem.probid }}\" selected>
                                    {{ problem.name }} (p{{ problem.probid }})
                                </option>
                            {%- endfor %}

                        </select>
                    </div>
                </div>

                <div class=\"form-row\">
                    <div class=\"form-group col-sm-6\">
                        <label for=\"problems-filter\">Filter on language(s)</label>
                        <select class=\"select2 form-control\" multiple data-filter-field=\"language-id\"
                                data-ajax-url=\"{{ path('jury_ajax_data', {datatype: 'languages', select2: true}) }}\">
                            {%- for language in filteredLanguages %}

                                <option value=\"{{ language.langid }}\" selected>
                                    {{ language.name }} ({{ language.langid }})
                                </option>
                            {%- endfor %}

                        </select>
                    </div>
                </div>

                <div class=\"form-row\">
                    <div class=\"form-group col-sm-6\">
                        <label for=\"problems-filter\">Filter on team(s)</label>
                        <select class=\"select2 form-control\" multiple data-filter-field=\"team-id\"
                                data-ajax-url=\"{{ path('jury_ajax_data', {datatype: 'teams', select2: true}) }}\">
                            {%- for team in filteredTeams %}

                                <option value=\"{{ team.teamid }}\" selected>
                                    {{ team.name }} (t{{ team.teamid }})
                                </option>
                            {%- endfor %}

                        </select>
                    </div>
                </div>

                <button class=\"btn btn-secondary\" id=\"clear-filters\"><i class=\"fas fa-times-circle\"></i> Clear all
                    filters
                </button>
            </div>
        </div>
    </div>

    <div data-ajax-refresh-target data-ajax-refresh-after=\"process_submissions_filter\">
        {%- include 'jury/partials/submission_list.html.twig' with {showTestcases: true} %}
    </div>

{% endblock %}

{% block extrafooter %}
    <script>
        \$(function () {
            \$('input[name=viewtype]').on('change', function () {
                window.location = '{{ path('jury_submissions', {'view': 'REPLACE_ME'}) }}'.replace('REPLACE_ME', \$(this).val());
            });

            \$('#filter-toggle').on('change', function () {
                if (\$(this).is(':checked')) {
                    \$('#filter-card').removeClass('d-none');
                } else {
                    \$('#filter-card').addClass('d-none');
                }
            });

            \$('.select2').each(function () {
                var \$elem = \$(this);
                \$elem.select2({
                    minimumInputLength: 1,
                    ajax: {
                        url: \$elem.data('ajax-url'),
                        dataType: 'json',
                        delay: 250
                    }
                })
            });

            \$('#clear-filters').on('click', function () {
                \$('select[data-filter-field]').val([]).trigger('change');
            });

            window.process_submissions_filter = function () {
                var \$trs = \$('table.submissions-table > tbody tr');

                var filters = [];

                \$('select[data-filter-field]').each(function () {
                    var \$filterField = \$(this);
                    if (\$filterField.val().length) {
                        filters.push({
                            field: \$filterField.data('filter-field'),
                            values: \$filterField.val()
                        });
                    }
                });

                var submissions_filter = {};
                for (var i = 0; i < filters.length; i++) {
                    submissions_filter[filters[i].field] = filters[i].values;
                }

                setCookie('domjudge_submissionsfilter', JSON.stringify(submissions_filter));

                if (filters.length === 0) {
                    \$trs.show();
                } else {
                    \$trs
                        .hide()
                        .filter(function () {
                            var \$tr = \$(this);

                            for (var i = 0; i < filters.length; i++) {
                                var value = \"\" + \$tr.data(filters[i].field);
                                if (filters[i].values.indexOf(value) === -1) {
                                    return false;
                                }
                            }

                            return true;
                        })
                        .show();
                }
            };

            \$('select[data-filter-field]').on('change', process_submissions_filter);
            window.process_submissions_filter();
        });
    </script>
{% endblock %}
", "jury/submissions.html.twig", "/opt/domjudge/domserver/webapp/templates/jury/submissions.html.twig");
    }
}
