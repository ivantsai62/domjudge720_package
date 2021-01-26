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

/* jury/contests.html.twig */
class __TwigTemplate_f1b76dd23391e919df60288cf8c321c8724207ee4df6d7a26eadb81e56dafdd2 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "jury/contests.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "jury/contests.html.twig"));

        // line 2
        $macros["macros"] = $this->macros["macros"] = $this->loadTemplate("jury/jury_macros.twig", "jury/contests.html.twig", 2)->unwrap();
        // line 1
        $this->parent = $this->loadTemplate("jury/base.html.twig", "jury/contests.html.twig", 1);
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

        echo "Contests - ";
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
        echo "    <h1>Contests</h1>

    <h3>Current contests</h3>

    ";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["current_contests"]) || array_key_exists("current_contests", $context) ? $context["current_contests"] : (function () { throw new RuntimeError('Variable "current_contests" does not exist.', 16, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["contest"]) {
            // line 17
            echo "        ";
            // line 18
            echo "        <form action=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_contests");
            echo "\" method=\"post\">
            <input type=\"hidden\" name=\"contest\" value=\"";
            // line 19
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["contest"], "cid", [], "any", false, false, false, 19), "html", null, true);
            echo "\"/>
            <div class=\"row mb-4\">
                <div class=\"col-lg-8\">
                    <div class=\"card\">
                        <div class=\"card-header\">
                            ";
            // line 24
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["contest"], "name", [], "any", false, false, false, 24), "html", null, true);
            echo " (";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["contest"], "shortname", [], "any", false, false, false, 24), "html", null, true);
            echo " - c";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["contest"], "cid", [], "any", false, false, false, 24), "html", null, true);
            echo ")
                        </div>
                        <div class=\"card-body\">
                            ";
            // line 27
            if (( !twig_get_attribute($this->env, $this->source, $context["contest"], "starttimeEnabled", [], "any", false, false, false, 27) &&  !twig_test_empty(twig_get_attribute($this->env, $this->source, $context["contest"], "finalizetime", [], "any", false, false, false, 27)))) {
                // line 28
                echo "                                <div class=\"alert alert-warning\">
                                    <strong>Warning:</strong> start time is undefined, but contest is finalized!
                                </div>
                            ";
            }
            // line 32
            echo "                            <table class=\"table table-hover\">
                                <tbody>
                                ";
            // line 34
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["contest"], "juryTimeData", [], "any", false, false, false, 34));
            foreach ($context['_seq'] as $context["type"] => $context["data"]) {
                // line 35
                echo "                                    <tr>
                                        <td class=\"";
                // line 36
                echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, $context["data"], "class", [], "any", true, true, false, 36)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, $context["data"], "class", [], "any", false, false, false, 36), "")) : ("")), "html", null, true);
                echo "\">
                                            ";
                // line 37
                if (twig_get_attribute($this->env, $this->source, $context["data"], "icon", [], "any", true, true, false, 37)) {
                    // line 38
                    echo "                                                <i class=\"fas fa-";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["data"], "icon", [], "any", false, false, false, 38), "html", null, true);
                    echo "\"></i>
                                            ";
                }
                // line 40
                echo "                                        </td>
                                        <td class=\"";
                // line 41
                echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, $context["data"], "class", [], "any", true, true, false, 41)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, $context["data"], "class", [], "any", false, false, false, 41), "")) : ("")), "html", null, true);
                echo "\"><b>";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["data"], "label", [], "any", false, false, false, 41), "html", null, true);
                echo ":</b></td>
                                        <td class=\"";
                // line 42
                echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, $context["data"], "class", [], "any", true, true, false, 42)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, $context["data"], "class", [], "any", false, false, false, 42), "")) : ("")), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["data"], "time", [], "any", false, false, false, 42), "html", null, true);
                echo "</td>
                                        ";
                // line 43
                if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
                    // line 44
                    echo "                                            <td>
                                                ";
                    // line 45
                    if (twig_get_attribute($this->env, $this->source, $context["data"], "show_button", [], "any", false, false, false, 45)) {
                        // line 46
                        echo "                                                    <input type=\"submit\" class=\"btn btn-primary btn-sm\"
                                                           name=\"donow[";
                        // line 47
                        echo twig_escape_filter($this->env, $context["type"], "html", null, true);
                        echo "]\" value=\"";
                        echo twig_escape_filter($this->env, $context["type"], "html", null, true);
                        echo " now\"/>
                                                ";
                    }
                    // line 49
                    echo "                                                ";
                    if (twig_get_attribute($this->env, $this->source, $context["data"], "extra_button", [], "any", true, true, false, 49)) {
                        // line 50
                        echo "                                                    <input type=\"submit\" class=\"btn btn-primary btn-sm\"
                                                           name=\"donow[";
                        // line 51
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["data"], "extra_button", [], "any", false, false, false, 51), "type", [], "any", false, false, false, 51), "html", null, true);
                        echo "]\"
                                                           value=\"";
                        // line 52
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["data"], "extra_button", [], "any", false, false, false, 52), "label", [], "any", false, false, false, 52), "html", null, true);
                        echo "\"/>
                                                ";
                    }
                    // line 54
                    echo "                                            </td>
                                        ";
                }
                // line 56
                echo "                                    </tr>
                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['type'], $context['data'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 58
            echo "                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 66
            echo "        ";
            if (twig_test_empty((isset($context["upcoming_contest"]) || array_key_exists("upcoming_contest", $context) ? $context["upcoming_contest"] : (function () { throw new RuntimeError('Variable "upcoming_contest" does not exist.', 66, $this->source); })()))) {
                // line 67
                echo "            <div class=\"alert alert-danger\">
                No upcoming contest
            </div>
        ";
            } else {
                // line 71
                echo "            <div class=\"alert alert-warning\">
                <strong>No active contest.</strong> Upcoming:<br/>
                <p>
                    <i>";
                // line 74
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["upcoming_contest"]) || array_key_exists("upcoming_contest", $context) ? $context["upcoming_contest"] : (function () { throw new RuntimeError('Variable "upcoming_contest" does not exist.', 74, $this->source); })()), "name", [], "any", false, false, false, 74), "html", null, true);
                echo " (";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["upcoming_contest"]) || array_key_exists("upcoming_contest", $context) ? $context["upcoming_contest"] : (function () { throw new RuntimeError('Variable "upcoming_contest" does not exist.', 74, $this->source); })()), "shortname", [], "any", false, false, false, 74), "html", null, true);
                echo ")</i>;
                    active from ";
                // line 75
                echo twig_escape_filter($this->env, $this->extensions['App\Twig\TwigExtension']->printtime(twig_get_attribute($this->env, $this->source, (isset($context["upcoming_contest"]) || array_key_exists("upcoming_contest", $context) ? $context["upcoming_contest"] : (function () { throw new RuntimeError('Variable "upcoming_contest" does not exist.', 75, $this->source); })()), "activatetime", [], "any", false, false, false, 75), "%a %d %b %Y %T %Z"), "html", null, true);
                echo "
                </p>
                <form action=\"";
                // line 77
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_contests");
                echo "\" method=\"post\">
                    <input type=\"hidden\" name=\"contest\" value=\"";
                // line 78
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["upcoming_contest"]) || array_key_exists("upcoming_contest", $context) ? $context["upcoming_contest"] : (function () { throw new RuntimeError('Variable "upcoming_contest" does not exist.', 78, $this->source); })()), "cid", [], "any", false, false, false, 78), "html", null, true);
                echo "\"/>
                    <input type=\"submit\" class=\"btn btn-primary\" name=\"donow[activate]\" value=\"Activate now\"/>
                </form>
            </div>
        ";
            }
            // line 83
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['contest'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 84
        echo "
    <h3>All available contests</h3>

    ";
        // line 87
        echo twig_call_macro($macros["macros"], "macro_table", [(isset($context["contests_table"]) || array_key_exists("contests_table", $context) ? $context["contests_table"] : (function () { throw new RuntimeError('Variable "contests_table" does not exist.', 87, $this->source); })()), (isset($context["table_fields"]) || array_key_exists("table_fields", $context) ? $context["table_fields"] : (function () { throw new RuntimeError('Variable "table_fields" does not exist.', 87, $this->source); })()), (isset($context["num_actions"]) || array_key_exists("num_actions", $context) ? $context["num_actions"] : (function () { throw new RuntimeError('Variable "num_actions" does not exist.', 87, $this->source); })())], 87, $context, $this->getSourceContext());
        echo "

    ";
        // line 89
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 90
            echo "        <p>
            ";
            // line 91
            echo $this->extensions['App\Twig\TwigExtension']->button($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_contest_add"), "Add new contest", "primary", "plus");
            echo "
        </p>
    ";
        }
        // line 94
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "jury/contests.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  321 => 94,  315 => 91,  312 => 90,  310 => 89,  305 => 87,  300 => 84,  294 => 83,  286 => 78,  282 => 77,  277 => 75,  271 => 74,  266 => 71,  260 => 67,  257 => 66,  245 => 58,  238 => 56,  234 => 54,  229 => 52,  225 => 51,  222 => 50,  219 => 49,  212 => 47,  209 => 46,  207 => 45,  204 => 44,  202 => 43,  196 => 42,  190 => 41,  187 => 40,  181 => 38,  179 => 37,  175 => 36,  172 => 35,  168 => 34,  164 => 32,  158 => 28,  156 => 27,  146 => 24,  138 => 19,  133 => 18,  131 => 17,  126 => 16,  120 => 12,  110 => 11,  98 => 8,  93 => 7,  83 => 6,  63 => 4,  52 => 1,  50 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"jury/base.html.twig\" %}
{% import \"jury/jury_macros.twig\" as macros %}

{% block title %}Contests - {{ parent() }}{% endblock %}

{% block extrahead %}
    {{ parent() }}
    {{ macros.table_extrahead() }}
{% endblock %}

{% block content %}
    <h1>Contests</h1>

    <h3>Current contests</h3>

    {% for contest in current_contests %}
        {# TODO: at some point use real Symfony forms here? Is maybe hard because of all the submit buttons... #}
        <form action=\"{{ path('jury_contests') }}\" method=\"post\">
            <input type=\"hidden\" name=\"contest\" value=\"{{ contest.cid }}\"/>
            <div class=\"row mb-4\">
                <div class=\"col-lg-8\">
                    <div class=\"card\">
                        <div class=\"card-header\">
                            {{ contest.name }} ({{ contest.shortname }} - c{{ contest.cid }})
                        </div>
                        <div class=\"card-body\">
                            {% if not contest.starttimeEnabled and contest.finalizetime is not empty %}
                                <div class=\"alert alert-warning\">
                                    <strong>Warning:</strong> start time is undefined, but contest is finalized!
                                </div>
                            {% endif %}
                            <table class=\"table table-hover\">
                                <tbody>
                                {% for type, data in contest.juryTimeData %}
                                    <tr>
                                        <td class=\"{{ data.class|default('') }}\">
                                            {% if data.icon is defined %}
                                                <i class=\"fas fa-{{ data.icon }}\"></i>
                                            {% endif %}
                                        </td>
                                        <td class=\"{{ data.class|default('') }}\"><b>{{ data.label }}:</b></td>
                                        <td class=\"{{ data.class|default('') }}\">{{ data.time }}</td>
                                        {% if is_granted('ROLE_ADMIN') %}
                                            <td>
                                                {% if data.show_button %}
                                                    <input type=\"submit\" class=\"btn btn-primary btn-sm\"
                                                           name=\"donow[{{ type }}]\" value=\"{{ type }} now\"/>
                                                {% endif %}
                                                {% if data.extra_button is defined %}
                                                    <input type=\"submit\" class=\"btn btn-primary btn-sm\"
                                                           name=\"donow[{{ data.extra_button.type }}]\"
                                                           value=\"{{ data.extra_button.label }}\"/>
                                                {% endif %}
                                            </td>
                                        {% endif %}
                                    </tr>
                                {% endfor %}
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    {% else %}
        {% if upcoming_contest is empty %}
            <div class=\"alert alert-danger\">
                No upcoming contest
            </div>
        {% else %}
            <div class=\"alert alert-warning\">
                <strong>No active contest.</strong> Upcoming:<br/>
                <p>
                    <i>{{ upcoming_contest.name }} ({{ upcoming_contest.shortname }})</i>;
                    active from {{ upcoming_contest.activatetime | printtime('%a %d %b %Y %T %Z') }}
                </p>
                <form action=\"{{ path('jury_contests') }}\" method=\"post\">
                    <input type=\"hidden\" name=\"contest\" value=\"{{ upcoming_contest.cid }}\"/>
                    <input type=\"submit\" class=\"btn btn-primary\" name=\"donow[activate]\" value=\"Activate now\"/>
                </form>
            </div>
        {% endif %}
    {% endfor %}

    <h3>All available contests</h3>

    {{ macros.table(contests_table, table_fields, num_actions) }}

    {% if is_granted('ROLE_ADMIN') %}
        <p>
            {{ button(path('jury_contest_add'), 'Add new contest', 'primary', 'plus') }}
        </p>
    {% endif %}

{% endblock %}
", "jury/contests.html.twig", "/opt/domjudge/domserver/webapp/templates/jury/contests.html.twig");
    }
}
