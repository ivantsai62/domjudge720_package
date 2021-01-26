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

/* jury/clarifications.html.twig */
class __TwigTemplate_985f64c76689fa3352c9414af3d3192a67ed07d73028a8590915192a3ff111ff extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "jury/clarifications.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "jury/clarifications.html.twig"));

        // line 2
        $macros["macros"] = $this->macros["macros"] = $this->loadTemplate("jury/jury_macros.twig", "jury/clarifications.html.twig", 2)->unwrap();
        // line 1
        $this->parent = $this->loadTemplate("jury/base.html.twig", "jury/clarifications.html.twig", 1);
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

        echo "Clarifications - ";
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
    <h1>Clarifications</h1>";
        // line 15
        if (twig_test_empty((isset($context["current_contests"]) || array_key_exists("current_contests", $context) ? $context["current_contests"] : (function () { throw new RuntimeError('Variable "current_contests" does not exist.', 15, $this->source); })()))) {
            // line 16
            echo "
        <div class=\"alert alert-danger\">No active contest(s)</div>";
        } else {
            // line 19
            echo "
        <a href=\"";
            // line 20
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_clarification_new");
            echo "\" class=\"btn btn-primary btn-sm\">
                <i class=\"fas fa-envelope\"></i> Send clarification
        </a>
        <br />
        <br />

        Filter:
        <div class=\"btn-group btn-group-toggle btn-group-sm mb-3\" data-toggle=\"buttons\">
            <label class=\"btn btn-secondary ";
            // line 28
            if ((null === (isset($context["currentFilter"]) || array_key_exists("currentFilter", $context) ? $context["currentFilter"] : (function () { throw new RuntimeError('Variable "currentFilter" does not exist.', 28, $this->source); })()))) {
                echo "active";
            }
            echo "\">
                <input type=\"radio\" name=\"filter\" autocomplete=\"off\" value=\"all\"
                       ";
            // line 30
            if ((null === (isset($context["currentFilter"]) || array_key_exists("currentFilter", $context) ? $context["currentFilter"] : (function () { throw new RuntimeError('Variable "currentFilter" does not exist.', 30, $this->source); })()))) {
                echo "checked";
            }
            echo "> All
            </label>
            <label class=\"btn btn-secondary ";
            // line 32
            if (((isset($context["currentFilter"]) || array_key_exists("currentFilter", $context) ? $context["currentFilter"] : (function () { throw new RuntimeError('Variable "currentFilter" does not exist.', 32, $this->source); })()) == "new")) {
                echo "active";
            }
            echo "\">
                <input type=\"radio\" name=\"filter\" autocomplete=\"off\" value=\"new\"
                       ";
            // line 34
            if (((isset($context["currentFilter"]) || array_key_exists("currentFilter", $context) ? $context["currentFilter"] : (function () { throw new RuntimeError('Variable "currentFilter" does not exist.', 34, $this->source); })()) == "new")) {
                echo "checked";
            }
            echo "> New
            </label>
            <label class=\"btn btn-secondary ";
            // line 36
            if (((isset($context["currentFilter"]) || array_key_exists("currentFilter", $context) ? $context["currentFilter"] : (function () { throw new RuntimeError('Variable "currentFilter" does not exist.', 36, $this->source); })()) == "old")) {
                echo "active";
            }
            echo "\">
                <input type=\"radio\" name=\"filter\" autocomplete=\"off\" value=\"old\"
                       ";
            // line 38
            if (((isset($context["currentFilter"]) || array_key_exists("currentFilter", $context) ? $context["currentFilter"] : (function () { throw new RuntimeError('Variable "currentFilter" does not exist.', 38, $this->source); })()) == "old")) {
                echo "checked";
            }
            echo "> Old
            </label>
            <label class=\"btn btn-secondary ";
            // line 40
            if (((isset($context["currentFilter"]) || array_key_exists("currentFilter", $context) ? $context["currentFilter"] : (function () { throw new RuntimeError('Variable "currentFilter" does not exist.', 40, $this->source); })()) == "general")) {
                echo "active";
            }
            echo "\">
                <input type=\"radio\" name=\"filter\" autocomplete=\"off\" value=\"general\"
                       ";
            // line 42
            if (((isset($context["currentFilter"]) || array_key_exists("currentFilter", $context) ? $context["currentFilter"] : (function () { throw new RuntimeError('Variable "currentFilter" does not exist.', 42, $this->source); })()) == "general")) {
                echo "checked";
            }
            echo "> General
            </label>
        </div>

        ";
            // line 46
            if ((twig_length_filter($this->env, (isset($context["queues"]) || array_key_exists("queues", $context) ? $context["queues"] : (function () { throw new RuntimeError('Variable "queues" does not exist.', 46, $this->source); })())) > 0)) {
                // line 47
                echo "            Queue:
            <div class=\"btn-group btn-group-toggle btn-group-sm mb-3\" data-toggle=\"buttons\">
                <label class=\"btn btn-secondary ";
                // line 49
                if ((null === (isset($context["currentQueue"]) || array_key_exists("currentQueue", $context) ? $context["currentQueue"] : (function () { throw new RuntimeError('Variable "currentQueue" does not exist.', 49, $this->source); })()))) {
                    echo "active";
                }
                echo "\">
                    <input type=\"radio\" name=\"queue\" autocomplete=\"off\" value=\"all\"
                           ";
                // line 51
                if ((null === (isset($context["currentQueue"]) || array_key_exists("currentQueue", $context) ? $context["currentQueue"] : (function () { throw new RuntimeError('Variable "currentQueue" does not exist.', 51, $this->source); })()))) {
                    echo "checked";
                }
                echo "> All
                </label>
                <label class=\"btn btn-secondary ";
                // line 53
                if (( !(null === (isset($context["currentQueue"]) || array_key_exists("currentQueue", $context) ? $context["currentQueue"] : (function () { throw new RuntimeError('Variable "currentQueue" does not exist.', 53, $this->source); })())) && ((isset($context["currentQueue"]) || array_key_exists("currentQueue", $context) ? $context["currentQueue"] : (function () { throw new RuntimeError('Variable "currentQueue" does not exist.', 53, $this->source); })()) == ""))) {
                    echo "active";
                }
                echo "\">
                    <input type=\"radio\" name=\"queue\" autocomplete=\"off\" value=\"\"
                           ";
                // line 55
                if (( !(null === (isset($context["currentQueue"]) || array_key_exists("currentQueue", $context) ? $context["currentQueue"] : (function () { throw new RuntimeError('Variable "currentQueue" does not exist.', 55, $this->source); })())) && ((isset($context["currentQueue"]) || array_key_exists("currentQueue", $context) ? $context["currentQueue"] : (function () { throw new RuntimeError('Variable "currentQueue" does not exist.', 55, $this->source); })()) == ""))) {
                    echo "checked";
                }
                echo "> Unassigned
                </label>";
                // line 57
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["queues"]) || array_key_exists("queues", $context) ? $context["queues"] : (function () { throw new RuntimeError('Variable "queues" does not exist.', 57, $this->source); })()));
                foreach ($context['_seq'] as $context["queue"] => $context["name"]) {
                    // line 58
                    echo "                    <label class=\"btn btn-secondary ";
                    if (((isset($context["currentQueue"]) || array_key_exists("currentQueue", $context) ? $context["currentQueue"] : (function () { throw new RuntimeError('Variable "currentQueue" does not exist.', 58, $this->source); })()) == $context["queue"])) {
                        echo "active";
                    }
                    echo "\">
                        <input type=\"radio\" name=\"queue\" autocomplete=\"off\" value=\"";
                    // line 59
                    echo twig_escape_filter($this->env, $context["queue"], "html", null, true);
                    echo "\"
                               ";
                    // line 60
                    if (((isset($context["currentQueue"]) || array_key_exists("currentQueue", $context) ? $context["currentQueue"] : (function () { throw new RuntimeError('Variable "currentQueue" does not exist.', 60, $this->source); })()) == $context["queue"])) {
                        echo "checked";
                    }
                    echo "> ";
                    echo twig_escape_filter($this->env, $context["name"], "html", null, true);
                    echo "
                    </label>";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['queue'], $context['name'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 63
                echo "            </div>
        ";
            }
            // line 65
            echo "
        ";
            // line 66
            if (((null === (isset($context["currentFilter"]) || array_key_exists("currentFilter", $context) ? $context["currentFilter"] : (function () { throw new RuntimeError('Variable "currentFilter" does not exist.', 66, $this->source); })())) || ((isset($context["currentFilter"]) || array_key_exists("currentFilter", $context) ? $context["currentFilter"] : (function () { throw new RuntimeError('Variable "currentFilter" does not exist.', 66, $this->source); })()) == "new"))) {
                // line 67
                echo "            <h3 id=\"newrequests\">New requests:</h3>";
                // line 68
                if ((twig_length_filter($this->env, (isset($context["newClarifications"]) || array_key_exists("newClarifications", $context) ? $context["newClarifications"] : (function () { throw new RuntimeError('Variable "newClarifications" does not exist.', 68, $this->source); })())) == 0)) {
                    // line 69
                    echo "                <p class=\"nodata\">No new clarification requests.</p>";
                } else {
                    // line 71
                    $this->loadTemplate("jury/partials/clarification_list.html.twig", "jury/clarifications.html.twig", 71)->display(twig_array_merge($context, ["clarifications" => (isset($context["newClarifications"]) || array_key_exists("newClarifications", $context) ? $context["newClarifications"] : (function () { throw new RuntimeError('Variable "newClarifications" does not exist.', 71, $this->source); })())]));
                }
                // line 73
                echo "        ";
            }
            // line 74
            echo "
        ";
            // line 75
            if (((null === (isset($context["currentFilter"]) || array_key_exists("currentFilter", $context) ? $context["currentFilter"] : (function () { throw new RuntimeError('Variable "currentFilter" does not exist.', 75, $this->source); })())) || ((isset($context["currentFilter"]) || array_key_exists("currentFilter", $context) ? $context["currentFilter"] : (function () { throw new RuntimeError('Variable "currentFilter" does not exist.', 75, $this->source); })()) == "old"))) {
                // line 76
                echo "            <h3 id=\"oldrequests\">Old requests:</h3>";
                // line 77
                if ((twig_length_filter($this->env, (isset($context["oldClarifications"]) || array_key_exists("oldClarifications", $context) ? $context["oldClarifications"] : (function () { throw new RuntimeError('Variable "oldClarifications" does not exist.', 77, $this->source); })())) == 0)) {
                    // line 78
                    echo "                <p class=\"nodata\">No old clarification requests.</p>";
                } else {
                    // line 80
                    $this->loadTemplate("jury/partials/clarification_list.html.twig", "jury/clarifications.html.twig", 80)->display(twig_array_merge($context, ["clarifications" => (isset($context["oldClarifications"]) || array_key_exists("oldClarifications", $context) ? $context["oldClarifications"] : (function () { throw new RuntimeError('Variable "oldClarifications" does not exist.', 80, $this->source); })())]));
                }
                // line 82
                echo "        ";
            }
            // line 83
            echo "
        ";
            // line 84
            if (((null === (isset($context["currentFilter"]) || array_key_exists("currentFilter", $context) ? $context["currentFilter"] : (function () { throw new RuntimeError('Variable "currentFilter" does not exist.', 84, $this->source); })())) || ((isset($context["currentFilter"]) || array_key_exists("currentFilter", $context) ? $context["currentFilter"] : (function () { throw new RuntimeError('Variable "currentFilter" does not exist.', 84, $this->source); })()) == "general"))) {
                // line 85
                echo "            <h3 id=\"clarifications\">General clarifications:</h3>";
                // line 86
                if ((twig_length_filter($this->env, (isset($context["generalClarifications"]) || array_key_exists("generalClarifications", $context) ? $context["generalClarifications"] : (function () { throw new RuntimeError('Variable "generalClarifications" does not exist.', 86, $this->source); })())) == 0)) {
                    // line 87
                    echo "                <p class=\"nodata\">No general clarifications.</p>";
                } else {
                    // line 89
                    $this->loadTemplate("jury/partials/clarification_list.html.twig", "jury/clarifications.html.twig", 89)->display(twig_array_merge($context, ["clarifications" => (isset($context["generalClarifications"]) || array_key_exists("generalClarifications", $context) ? $context["generalClarifications"] : (function () { throw new RuntimeError('Variable "generalClarifications" does not exist.', 89, $this->source); })())]));
                }
                // line 91
                echo "        ";
            }
        }
        // line 93
        echo "
    <script>
        function doSwitch() {
            // Fallback the queue to all, since it might not be defined.
            window.location = '";
        // line 97
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_clarifications", ["queue" => "REPLACE_QUEUE", "filter" => "REPLACE_FILTER"]), "html", null, true);
        echo "'
                .replace('REPLACE_QUEUE', \$('input[name=queue]:checked').val())
                .replace('REPLACE_FILTER', \$('input[name=filter]:checked').val())
                .replace('&amp;', '&');
        }
        \$().ready(function () {
            var table = \$('.data-table').DataTable({
                \"paging\": false,
                \"ordering\": true,
                \"info\": false,
                \"autoWidth\": true,
                \"language\": {
                    \"searchPlaceholder\": \"filter table\",
                    \"search\": \"_INPUT_\",
                },
                'aoColumnDefs': [
                    {aTargets: ['_all'], bSortable: true, bSearchable: true}
                ],
            });
            \$('.qbut').on('change', function () {
                var icon = \$(\"#qig\" + \$(this).attr('data-clarid') );
                icon.html('<i class=\"fas fa-spinner fa-spin\"></i>');
                var parenttd = \$(this).closest('td');
                var parenttr = \$(this).closest('tr');
                var newname = \$(this).closest('label').text().trim();
                \$.post(\"";
        // line 122
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_clarification_change_queue", ["clarId" => 12345]);
        echo "\".replace('12345', \$(this).attr('data-clarid')),
                    {'queue': \$(this).val()})
                    .done(function( data ) {
                        if ( data ) {
                            parenttd.attr('data-search', newname);
                            table.rows(parenttr).invalidate();
                            icon.html('<i class=\"fas fa-check\"></i>');
                        } else {
                            icon.html('<i class=\"fas fa-times\"></i>');
                        }
                    });
            });

            \$('input[name=queue]').on('change', doSwitch);
            \$('input[name=filter]').on('change', doSwitch);
        });
    </script>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "jury/clarifications.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  354 => 122,  326 => 97,  320 => 93,  316 => 91,  313 => 89,  310 => 87,  308 => 86,  306 => 85,  304 => 84,  301 => 83,  298 => 82,  295 => 80,  292 => 78,  290 => 77,  288 => 76,  286 => 75,  283 => 74,  280 => 73,  277 => 71,  274 => 69,  272 => 68,  270 => 67,  268 => 66,  265 => 65,  261 => 63,  249 => 60,  245 => 59,  238 => 58,  234 => 57,  228 => 55,  221 => 53,  214 => 51,  207 => 49,  203 => 47,  201 => 46,  192 => 42,  185 => 40,  178 => 38,  171 => 36,  164 => 34,  157 => 32,  150 => 30,  143 => 28,  132 => 20,  129 => 19,  125 => 16,  123 => 15,  120 => 12,  110 => 11,  98 => 8,  93 => 7,  83 => 6,  63 => 4,  52 => 1,  50 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"jury/base.html.twig\" %}
{% import \"jury/jury_macros.twig\" as macros %}

{% block title %}Clarifications - {{ parent() }}{% endblock %}

{% block extrahead %}
    {{ parent() }}
    {{ macros.table_extrahead() }}
{% endblock %}

{% block content %}

    <h1>Clarifications</h1>

    {%- if current_contests is empty %}

        <div class=\"alert alert-danger\">No active contest(s)</div>
    {%- else %}

        <a href=\"{{ path('jury_clarification_new') }}\" class=\"btn btn-primary btn-sm\">
                <i class=\"fas fa-envelope\"></i> Send clarification
        </a>
        <br />
        <br />

        Filter:
        <div class=\"btn-group btn-group-toggle btn-group-sm mb-3\" data-toggle=\"buttons\">
            <label class=\"btn btn-secondary {% if currentFilter is null %}active{% endif %}\">
                <input type=\"radio\" name=\"filter\" autocomplete=\"off\" value=\"all\"
                       {% if currentFilter is null %}checked{% endif %}> All
            </label>
            <label class=\"btn btn-secondary {% if currentFilter == 'new' %}active{% endif %}\">
                <input type=\"radio\" name=\"filter\" autocomplete=\"off\" value=\"new\"
                       {% if currentFilter == 'new' %}checked{% endif %}> New
            </label>
            <label class=\"btn btn-secondary {% if currentFilter == 'old' %}active{% endif %}\">
                <input type=\"radio\" name=\"filter\" autocomplete=\"off\" value=\"old\"
                       {% if currentFilter == 'old' %}checked{% endif %}> Old
            </label>
            <label class=\"btn btn-secondary {% if currentFilter == 'general' %}active{% endif %}\">
                <input type=\"radio\" name=\"filter\" autocomplete=\"off\" value=\"general\"
                       {% if currentFilter == 'general' %}checked{% endif %}> General
            </label>
        </div>

        {% if queues | length > 0 %}
            Queue:
            <div class=\"btn-group btn-group-toggle btn-group-sm mb-3\" data-toggle=\"buttons\">
                <label class=\"btn btn-secondary {% if currentQueue is null %}active{% endif %}\">
                    <input type=\"radio\" name=\"queue\" autocomplete=\"off\" value=\"all\"
                           {% if currentQueue is null %}checked{% endif %}> All
                </label>
                <label class=\"btn btn-secondary {% if currentQueue is not null and currentQueue == '' %}active{% endif %}\">
                    <input type=\"radio\" name=\"queue\" autocomplete=\"off\" value=\"\"
                           {% if currentQueue is not null and currentQueue == '' %}checked{% endif %}> Unassigned
                </label>
                {%- for queue, name in queues %}
                    <label class=\"btn btn-secondary {% if currentQueue == queue %}active{% endif %}\">
                        <input type=\"radio\" name=\"queue\" autocomplete=\"off\" value=\"{{ queue }}\"
                               {% if currentQueue == queue %}checked{% endif %}> {{ name }}
                    </label>
                {%- endfor %}
            </div>
        {% endif %}

        {% if currentFilter is null or currentFilter == 'new' %}
            <h3 id=\"newrequests\">New requests:</h3>
            {%- if newClarifications | length == 0 %}
                <p class=\"nodata\">No new clarification requests.</p>
            {%- else %}
                {%- include 'jury/partials/clarification_list.html.twig' with {clarifications: newClarifications} %}
            {%- endif %}
        {% endif %}

        {% if currentFilter is null or currentFilter == 'old' %}
            <h3 id=\"oldrequests\">Old requests:</h3>
            {%- if oldClarifications | length == 0 %}
                <p class=\"nodata\">No old clarification requests.</p>
            {%- else %}
                {%- include 'jury/partials/clarification_list.html.twig' with {clarifications: oldClarifications} %}
            {%- endif %}
        {% endif %}

        {% if currentFilter is null or currentFilter == 'general' %}
            <h3 id=\"clarifications\">General clarifications:</h3>
            {%- if generalClarifications | length == 0 %}
                <p class=\"nodata\">No general clarifications.</p>
            {%- else %}
                {%- include 'jury/partials/clarification_list.html.twig' with {clarifications: generalClarifications} %}
            {%- endif %}
        {% endif %}
    {%- endif %}

    <script>
        function doSwitch() {
            // Fallback the queue to all, since it might not be defined.
            window.location = '{{ path('jury_clarifications', {'queue': 'REPLACE_QUEUE', 'filter': 'REPLACE_FILTER'}) }}'
                .replace('REPLACE_QUEUE', \$('input[name=queue]:checked').val())
                .replace('REPLACE_FILTER', \$('input[name=filter]:checked').val())
                .replace('&amp;', '&');
        }
        \$().ready(function () {
            var table = \$('.data-table').DataTable({
                \"paging\": false,
                \"ordering\": true,
                \"info\": false,
                \"autoWidth\": true,
                \"language\": {
                    \"searchPlaceholder\": \"filter table\",
                    \"search\": \"_INPUT_\",
                },
                'aoColumnDefs': [
                    {aTargets: ['_all'], bSortable: true, bSearchable: true}
                ],
            });
            \$('.qbut').on('change', function () {
                var icon = \$(\"#qig\" + \$(this).attr('data-clarid') );
                icon.html('<i class=\"fas fa-spinner fa-spin\"></i>');
                var parenttd = \$(this).closest('td');
                var parenttr = \$(this).closest('tr');
                var newname = \$(this).closest('label').text().trim();
                \$.post(\"{{ path('jury_clarification_change_queue', {'clarId': 12345}) }}\".replace('12345', \$(this).attr('data-clarid')),
                    {'queue': \$(this).val()})
                    .done(function( data ) {
                        if ( data ) {
                            parenttd.attr('data-search', newname);
                            table.rows(parenttr).invalidate();
                            icon.html('<i class=\"fas fa-check\"></i>');
                        } else {
                            icon.html('<i class=\"fas fa-times\"></i>');
                        }
                    });
            });

            \$('input[name=queue]').on('change', doSwitch);
            \$('input[name=filter]').on('change', doSwitch);
        });
    </script>

{% endblock %}
", "jury/clarifications.html.twig", "/opt/domjudge/domserver/webapp/templates/jury/clarifications.html.twig");
    }
}
