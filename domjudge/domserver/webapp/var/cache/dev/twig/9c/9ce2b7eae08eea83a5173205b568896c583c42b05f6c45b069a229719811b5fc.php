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

/* jury/internal_error.html.twig */
class __TwigTemplate_65c83f3b1a762699e6392dc2961f74e792ef48737cb37b2615c8b7ea4394eade extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "jury/internal_error.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "jury/internal_error.html.twig"));

        // line 2
        $macros["macros"] = $this->macros["macros"] = $this->loadTemplate("jury/jury_macros.twig", "jury/internal_error.html.twig", 2)->unwrap();
        // line 1
        $this->parent = $this->loadTemplate("jury/base.html.twig", "jury/internal_error.html.twig", 1);
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

        echo "Internal error e";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["internalError"]) || array_key_exists("internalError", $context) ? $context["internalError"] : (function () { throw new RuntimeError('Variable "internalError" does not exist.', 4, $this->source); })()), "errorid", [], "any", false, false, false, 4), "html", null, true);
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
    <h1>Internal error e";
        // line 13
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["internalError"]) || array_key_exists("internalError", $context) ? $context["internalError"] : (function () { throw new RuntimeError('Variable "internalError" does not exist.', 13, $this->source); })()), "errorid", [], "any", false, false, false, 13), "html", null, true);
        echo "</h1>

    <div class=\"row\">
        <div class=\"col-lg-6\">
            <table class=\"table table-sm table-striped\">
                <tr>
                    <th>Description</th>
                    <td>
                        ";
        // line 21
        if (twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["internalError"]) || array_key_exists("internalError", $context) ? $context["internalError"] : (function () { throw new RuntimeError('Variable "internalError" does not exist.', 21, $this->source); })()), "description", [], "any", false, false, false, 21))) {
            // line 22
            echo "                            <span class=\"nodata\">None</span>
                        ";
        } else {
            // line 24
            echo "                            ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["internalError"]) || array_key_exists("internalError", $context) ? $context["internalError"] : (function () { throw new RuntimeError('Variable "internalError" does not exist.', 24, $this->source); })()), "description", [], "any", false, false, false, 24), "html", null, true);
            echo "
                        ";
        }
        // line 26
        echo "                    </td>
                </tr>
                <tr>
                    <th>Time</th>
                    <td>";
        // line 30
        echo twig_escape_filter($this->env, $this->extensions['App\Twig\TwigExtension']->printtime(twig_get_attribute($this->env, $this->source, (isset($context["internalError"]) || array_key_exists("internalError", $context) ? $context["internalError"] : (function () { throw new RuntimeError('Variable "internalError" does not exist.', 30, $this->source); })()), "time", [], "any", false, false, false, 30), "%F %T"), "html", null, true);
        echo "</td>
                </tr>
                <tr>
                    <th>Status</th>
                    <td>";
        // line 34
        echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["internalError"]) || array_key_exists("internalError", $context) ? $context["internalError"] : (function () { throw new RuntimeError('Variable "internalError" does not exist.', 34, $this->source); })()), "status", [], "any", false, false, false, 34)), "html", null, true);
        echo "</td>
                </tr>
                ";
        // line 36
        if ( !(null === twig_get_attribute($this->env, $this->source, (isset($context["internalError"]) || array_key_exists("internalError", $context) ? $context["internalError"] : (function () { throw new RuntimeError('Variable "internalError" does not exist.', 36, $this->source); })()), "judgingid", [], "any", false, false, false, 36))) {
            // line 37
            echo "                    <tr>
                        <th>Related judging</th>
                        <td>
                            <a href=\"";
            // line 40
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_submission_by_judging", ["jid" => twig_get_attribute($this->env, $this->source, (isset($context["internalError"]) || array_key_exists("internalError", $context) ? $context["internalError"] : (function () { throw new RuntimeError('Variable "internalError" does not exist.', 40, $this->source); })()), "judgingid", [], "any", false, false, false, 40)]), "html", null, true);
            echo "\">
                                j";
            // line 41
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["internalError"]) || array_key_exists("internalError", $context) ? $context["internalError"] : (function () { throw new RuntimeError('Variable "internalError" does not exist.', 41, $this->source); })()), "judgingid", [], "any", false, false, false, 41), "html", null, true);
            echo "
                            </a>
                        </td>
                    </tr>
                ";
        }
        // line 46
        echo "                ";
        if ( !(null === twig_get_attribute($this->env, $this->source, (isset($context["internalError"]) || array_key_exists("internalError", $context) ? $context["internalError"] : (function () { throw new RuntimeError('Variable "internalError" does not exist.', 46, $this->source); })()), "cid", [], "any", false, false, false, 46))) {
            // line 47
            echo "                    <tr>
                        <th>Related contest</th>
                        <td>
                            <a href=\"";
            // line 50
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_contest", ["contestId" => twig_get_attribute($this->env, $this->source, (isset($context["internalError"]) || array_key_exists("internalError", $context) ? $context["internalError"] : (function () { throw new RuntimeError('Variable "internalError" does not exist.', 50, $this->source); })()), "cid", [], "any", false, false, false, 50)]), "html", null, true);
            echo "\">
                                c";
            // line 51
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["internalError"]) || array_key_exists("internalError", $context) ? $context["internalError"] : (function () { throw new RuntimeError('Variable "internalError" does not exist.', 51, $this->source); })()), "cid", [], "any", false, false, false, 51), "html", null, true);
            echo "
                            </a>
                        </td>
                    </tr>
                ";
        }
        // line 56
        echo "                ";
        if ( !(null === (isset($context["affectedText"]) || array_key_exists("affectedText", $context) ? $context["affectedText"] : (function () { throw new RuntimeError('Variable "affectedText" does not exist.', 56, $this->source); })()))) {
            // line 57
            echo "                    <tr>
                        <th>Affected ";
            // line 58
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["internalError"]) || array_key_exists("internalError", $context) ? $context["internalError"] : (function () { throw new RuntimeError('Variable "internalError" does not exist.', 58, $this->source); })()), "disabled", [], "any", false, false, false, 58), "kind", [], "any", false, false, false, 58), "html", null, true);
            echo "</th>
                        <td><a href=\"";
            // line 59
            echo twig_escape_filter($this->env, (isset($context["affectedLink"]) || array_key_exists("affectedLink", $context) ? $context["affectedLink"] : (function () { throw new RuntimeError('Variable "affectedLink" does not exist.', 59, $this->source); })()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, (isset($context["affectedText"]) || array_key_exists("affectedText", $context) ? $context["affectedText"] : (function () { throw new RuntimeError('Variable "affectedText" does not exist.', 59, $this->source); })()), "html", null, true);
            echo "</a></td>
                    </tr>
                ";
        }
        // line 62
        echo "                <tr>
                    <th>Judgehost log snippet</th>
                    <td>
                        <pre class=\"output_text\">";
        // line 65
        echo twig_escape_filter($this->env, base64_decode(twig_get_attribute($this->env, $this->source, (isset($context["internalError"]) || array_key_exists("internalError", $context) ? $context["internalError"] : (function () { throw new RuntimeError('Variable "internalError" does not exist.', 65, $this->source); })()), "judgehostlog", [], "any", false, false, false, 65)), "html", null, true);
        echo "</pre>
                    </td>
                </tr>
            </table>
        </div>
    </div>

    ";
        // line 72
        if ((twig_get_attribute($this->env, $this->source, (isset($context["internalError"]) || array_key_exists("internalError", $context) ? $context["internalError"] : (function () { throw new RuntimeError('Variable "internalError" does not exist.', 72, $this->source); })()), "status", [], "any", false, false, false, 72) == "open")) {
            // line 73
            echo "        <form action=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_internal_error_handle", ["errorId" => twig_get_attribute($this->env, $this->source, (isset($context["internalError"]) || array_key_exists("internalError", $context) ? $context["internalError"] : (function () { throw new RuntimeError('Variable "internalError" does not exist.', 73, $this->source); })()), "errorid", [], "any", false, false, false, 73), "action" => "ignore"]), "html", null, true);
            echo "\"
              method=\"post\" class=\"d-inline\">
            <button type=\"submit\" class=\"btn btn-danger\">
                <i class=\"fas fa-times\"></i> Ignore error
            </button>
        </form>

        <form action=\"";
            // line 80
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_internal_error_handle", ["errorId" => twig_get_attribute($this->env, $this->source, (isset($context["internalError"]) || array_key_exists("internalError", $context) ? $context["internalError"] : (function () { throw new RuntimeError('Variable "internalError" does not exist.', 80, $this->source); })()), "errorid", [], "any", false, false, false, 80), "action" => "resolve"]), "html", null, true);
            echo "\"
              method=\"post\" class=\"d-inline\">
            <button type=\"submit\" class=\"btn btn-success\">
                <i class=\"fas fa-check\"></i> Mark as resolved and re-enable ";
            // line 83
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["internalError"]) || array_key_exists("internalError", $context) ? $context["internalError"] : (function () { throw new RuntimeError('Variable "internalError" does not exist.', 83, $this->source); })()), "disabled", [], "any", false, false, false, 83), "kind", [], "any", false, false, false, 83), "html", null, true);
            echo "
            </button>
        </form>
    ";
        }
        // line 87
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "jury/internal_error.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  264 => 87,  257 => 83,  251 => 80,  240 => 73,  238 => 72,  228 => 65,  223 => 62,  215 => 59,  211 => 58,  208 => 57,  205 => 56,  197 => 51,  193 => 50,  188 => 47,  185 => 46,  177 => 41,  173 => 40,  168 => 37,  166 => 36,  161 => 34,  154 => 30,  148 => 26,  142 => 24,  138 => 22,  136 => 21,  125 => 13,  122 => 12,  112 => 11,  100 => 8,  95 => 7,  85 => 6,  63 => 4,  52 => 1,  50 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"jury/base.html.twig\" %}
{% import \"jury/jury_macros.twig\" as macros %}

{% block title %}Internal error e{{ internalError.errorid }} - {{ parent() }}{% endblock %}

{% block extrahead %}
    {{ parent() }}
    {{ macros.table_extrahead() }}
{% endblock %}

{% block content %}

    <h1>Internal error e{{ internalError.errorid }}</h1>

    <div class=\"row\">
        <div class=\"col-lg-6\">
            <table class=\"table table-sm table-striped\">
                <tr>
                    <th>Description</th>
                    <td>
                        {% if internalError.description is empty %}
                            <span class=\"nodata\">None</span>
                        {% else %}
                            {{ internalError.description }}
                        {% endif %}
                    </td>
                </tr>
                <tr>
                    <th>Time</th>
                    <td>{{ internalError.time | printtime('%F %T') }}</td>
                </tr>
                <tr>
                    <th>Status</th>
                    <td>{{ internalError.status | capitalize }}</td>
                </tr>
                {% if internalError.judgingid is not null %}
                    <tr>
                        <th>Related judging</th>
                        <td>
                            <a href=\"{{ path('jury_submission_by_judging', {jid: internalError.judgingid}) }}\">
                                j{{ internalError.judgingid }}
                            </a>
                        </td>
                    </tr>
                {% endif %}
                {% if internalError.cid is not null %}
                    <tr>
                        <th>Related contest</th>
                        <td>
                            <a href=\"{{ path('jury_contest', {'contestId': internalError.cid}) }}\">
                                c{{ internalError.cid }}
                            </a>
                        </td>
                    </tr>
                {% endif %}
                {% if affectedText is not null %}
                    <tr>
                        <th>Affected {{ internalError.disabled.kind }}</th>
                        <td><a href=\"{{ affectedLink }}\">{{ affectedText }}</a></td>
                    </tr>
                {% endif %}
                <tr>
                    <th>Judgehost log snippet</th>
                    <td>
                        <pre class=\"output_text\">{{ internalError.judgehostlog | base64_decode }}</pre>
                    </td>
                </tr>
            </table>
        </div>
    </div>

    {% if internalError.status == 'open' %}
        <form action=\"{{ path('jury_internal_error_handle', {errorId: internalError.errorid, action: 'ignore'}) }}\"
              method=\"post\" class=\"d-inline\">
            <button type=\"submit\" class=\"btn btn-danger\">
                <i class=\"fas fa-times\"></i> Ignore error
            </button>
        </form>

        <form action=\"{{ path('jury_internal_error_handle', {errorId: internalError.errorid, action: 'resolve'}) }}\"
              method=\"post\" class=\"d-inline\">
            <button type=\"submit\" class=\"btn btn-success\">
                <i class=\"fas fa-check\"></i> Mark as resolved and re-enable {{ internalError.disabled.kind }}
            </button>
        </form>
    {% endif %}

{% endblock %}
", "jury/internal_error.html.twig", "/opt/domjudge/domserver/webapp/templates/jury/internal_error.html.twig");
    }
}
