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

/* jury/judgehost.html.twig */
class __TwigTemplate_2311920483494e02bc67865221d05baa7f07ebf023224f5154169d93d4879776 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "jury/judgehost.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "jury/judgehost.html.twig"));

        // line 2
        $macros["macros"] = $this->macros["macros"] = $this->loadTemplate("jury/jury_macros.twig", "jury/judgehost.html.twig", 2)->unwrap();
        // line 1
        $this->parent = $this->loadTemplate("jury/base.html.twig", "jury/judgehost.html.twig", 1);
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

        echo "Judgehost ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["judgehost"]) || array_key_exists("judgehost", $context) ? $context["judgehost"] : (function () { throw new RuntimeError('Variable "judgehost" does not exist.', 4, $this->source); })()), "hostname", [], "any", false, false, false, 4), "html", null, true);
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
    <h1>Judgehost ";
        // line 13
        echo $this->extensions['App\Twig\TwigExtension']->printHost(twig_get_attribute($this->env, $this->source, (isset($context["judgehost"]) || array_key_exists("judgehost", $context) ? $context["judgehost"] : (function () { throw new RuntimeError('Variable "judgehost" does not exist.', 13, $this->source); })()), "hostname", [], "any", false, false, false, 13));
        echo "</h1>

    <div class=\"row\">
        <div class=\"col-lg-4\">
            <table class=\"table table-sm table-striped\">
                <tr>
                    <th>Name</th>
                    <td>";
        // line 20
        echo $this->extensions['App\Twig\TwigExtension']->printHost(twig_get_attribute($this->env, $this->source, (isset($context["judgehost"]) || array_key_exists("judgehost", $context) ? $context["judgehost"] : (function () { throw new RuntimeError('Variable "judgehost" does not exist.', 20, $this->source); })()), "hostname", [], "any", false, false, false, 20));
        echo "</td>
                </tr>
                <tr>
                    <th>Active</th>
                    <td>";
        // line 24
        echo twig_escape_filter($this->env, $this->extensions['App\Twig\TwigExtension']->printYesNo(twig_get_attribute($this->env, $this->source, (isset($context["judgehost"]) || array_key_exists("judgehost", $context) ? $context["judgehost"] : (function () { throw new RuntimeError('Variable "judgehost" does not exist.', 24, $this->source); })()), "active", [], "any", false, false, false, 24)), "html", null, true);
        echo "</td>
                </tr>
                <tr>
                    <th>Restriction</th>
                    <td>
                        ";
        // line 29
        if ( !twig_get_attribute($this->env, $this->source, (isset($context["judgehost"]) || array_key_exists("judgehost", $context) ? $context["judgehost"] : (function () { throw new RuntimeError('Variable "judgehost" does not exist.', 29, $this->source); })()), "restriction", [], "any", false, false, false, 29)) {
            // line 30
            echo "                            <i>None</i>
                        ";
        } else {
            // line 32
            echo "                            <a href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_judgehost_restriction", ["restrictionId" => twig_get_attribute($this->env, $this->source, (isset($context["judgehost"]) || array_key_exists("judgehost", $context) ? $context["judgehost"] : (function () { throw new RuntimeError('Variable "judgehost" does not exist.', 32, $this->source); })()), "restrictionid", [], "any", false, false, false, 32)]), "html", null, true);
            echo "\">
                                ";
            // line 33
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["judgehost"]) || array_key_exists("judgehost", $context) ? $context["judgehost"] : (function () { throw new RuntimeError('Variable "judgehost" does not exist.', 33, $this->source); })()), "restriction", [], "any", false, false, false, 33), "name", [], "any", false, false, false, 33), "html", null, true);
            echo "
                            </a>
                        ";
        }
        // line 36
        echo "                    </td>
                </tr>
                <tr>
                    <th>Status</th>
                    <td>
                        ";
        // line 41
        if ( !twig_get_attribute($this->env, $this->source, (isset($context["judgehost"]) || array_key_exists("judgehost", $context) ? $context["judgehost"] : (function () { throw new RuntimeError('Variable "judgehost" does not exist.', 41, $this->source); })()), "polltime", [], "any", false, false, false, 41)) {
            // line 42
            echo "                            Judgehost never checked in.
                        ";
        } else {
            // line 44
            echo "                            ";
            echo twig_escape_filter($this->env, (isset($context["status"]) || array_key_exists("status", $context) ? $context["status"] : (function () { throw new RuntimeError('Variable "status" does not exist.', 44, $this->source); })()), "html", null, true);
            echo ", last checked in ";
            echo twig_escape_filter($this->env, $this->extensions['App\Twig\TwigExtension']->printtimediff(twig_get_attribute($this->env, $this->source, (isset($context["judgehost"]) || array_key_exists("judgehost", $context) ? $context["judgehost"] : (function () { throw new RuntimeError('Variable "judgehost" does not exist.', 44, $this->source); })()), "polltime", [], "any", false, false, false, 44)), "html", null, true);
            echo "s ago.
                        ";
        }
        // line 46
        echo "                    </td>
                </tr>
            </table>
        </div>
    </div>

    <div class=\"mb-4\">";
        // line 53
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 54
            if (twig_get_attribute($this->env, $this->source, (isset($context["judgehost"]) || array_key_exists("judgehost", $context) ? $context["judgehost"] : (function () { throw new RuntimeError('Variable "judgehost" does not exist.', 54, $this->source); })()), "active", [], "any", false, false, false, 54)) {
                // line 55
                $context["url"] = $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_judgehost_deactivate", ["hostname" => twig_get_attribute($this->env, $this->source, (isset($context["judgehost"]) || array_key_exists("judgehost", $context) ? $context["judgehost"] : (function () { throw new RuntimeError('Variable "judgehost" does not exist.', 55, $this->source); })()), "hostname", [], "any", false, false, false, 55)]);
                // line 56
                echo "                ";
                $context["icon"] = "pause";
                // line 57
                echo "                ";
                $context["action"] = "Deactivate";
                // line 58
                echo "                ";
                $context["class"] = "warning";
            } else {
                // line 60
                $context["url"] = $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_judgehost_activate", ["hostname" => twig_get_attribute($this->env, $this->source, (isset($context["judgehost"]) || array_key_exists("judgehost", $context) ? $context["judgehost"] : (function () { throw new RuntimeError('Variable "judgehost" does not exist.', 60, $this->source); })()), "hostname", [], "any", false, false, false, 60)]);
                // line 61
                echo "                ";
                $context["icon"] = "play";
                // line 62
                echo "                ";
                $context["action"] = "Activate";
                // line 63
                echo "                ";
                $context["class"] = "success";
            }
            // line 65
            echo $this->extensions['App\Twig\TwigExtension']->button((isset($context["url"]) || array_key_exists("url", $context) ? $context["url"] : (function () { throw new RuntimeError('Variable "url" does not exist.', 65, $this->source); })()), (isset($context["action"]) || array_key_exists("action", $context) ? $context["action"] : (function () { throw new RuntimeError('Variable "action" does not exist.', 65, $this->source); })()), (isset($context["class"]) || array_key_exists("class", $context) ? $context["class"] : (function () { throw new RuntimeError('Variable "class" does not exist.', 65, $this->source); })()), (isset($context["icon"]) || array_key_exists("icon", $context) ? $context["icon"] : (function () { throw new RuntimeError('Variable "icon" does not exist.', 65, $this->source); })()));
            echo "
            ";
            // line 66
            echo $this->extensions['App\Twig\TwigExtension']->button($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_judgehost_delete", ["hostname" => twig_get_attribute($this->env, $this->source, (isset($context["judgehost"]) || array_key_exists("judgehost", $context) ? $context["judgehost"] : (function () { throw new RuntimeError('Variable "judgehost" does not exist.', 66, $this->source); })()), "hostname", [], "any", false, false, false, 66)]), "Delete judgehost", "danger", "trash-alt", true);
            echo "
        ";
        }
        // line 68
        echo "        ";
        $this->loadTemplate("jury/partials/rejudge_form.html.twig", "jury/judgehost.html.twig", 68)->display(twig_array_merge($context, ["table" => "judgehost", "id" => twig_get_attribute($this->env, $this->source, (isset($context["judgehost"]) || array_key_exists("judgehost", $context) ? $context["judgehost"] : (function () { throw new RuntimeError('Variable "judgehost" does not exist.', 68, $this->source); })()), "hostname", [], "any", false, false, false, 68), "buttonClass" => "btn-primary"]));
        // line 69
        echo "    </div>

    <h3>Judgings by ";
        // line 71
        echo $this->extensions['App\Twig\TwigExtension']->printHost(twig_get_attribute($this->env, $this->source, (isset($context["judgehost"]) || array_key_exists("judgehost", $context) ? $context["judgehost"] : (function () { throw new RuntimeError('Variable "judgehost" does not exist.', 71, $this->source); })()), "hostname", [], "any", false, false, false, 71));
        echo "</h3>

    <div data-ajax-refresh-target>
        ";
        // line 74
        $this->loadTemplate("jury/partials/judgehost_judgings.html.twig", "jury/judgehost.html.twig", 74)->display($context);
        // line 75
        echo "    </div>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "jury/judgehost.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  248 => 75,  246 => 74,  240 => 71,  236 => 69,  233 => 68,  228 => 66,  224 => 65,  220 => 63,  217 => 62,  214 => 61,  212 => 60,  208 => 58,  205 => 57,  202 => 56,  200 => 55,  198 => 54,  196 => 53,  188 => 46,  180 => 44,  176 => 42,  174 => 41,  167 => 36,  161 => 33,  156 => 32,  152 => 30,  150 => 29,  142 => 24,  135 => 20,  125 => 13,  122 => 12,  112 => 11,  100 => 8,  95 => 7,  85 => 6,  63 => 4,  52 => 1,  50 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"jury/base.html.twig\" %}
{% import \"jury/jury_macros.twig\" as macros %}

{% block title %}Judgehost {{ judgehost.hostname }} - {{ parent() }}{% endblock %}

{% block extrahead %}
    {{ parent() }}
    {{ macros.table_extrahead() }}
{% endblock %}

{% block content %}

    <h1>Judgehost {{ judgehost.hostname | printHost }}</h1>

    <div class=\"row\">
        <div class=\"col-lg-4\">
            <table class=\"table table-sm table-striped\">
                <tr>
                    <th>Name</th>
                    <td>{{ judgehost.hostname | printHost }}</td>
                </tr>
                <tr>
                    <th>Active</th>
                    <td>{{ judgehost.active | printYesNo }}</td>
                </tr>
                <tr>
                    <th>Restriction</th>
                    <td>
                        {% if not judgehost.restriction %}
                            <i>None</i>
                        {% else %}
                            <a href=\"{{ path('jury_judgehost_restriction', {restrictionId: judgehost.restrictionid}) }}\">
                                {{ judgehost.restriction.name }}
                            </a>
                        {% endif %}
                    </td>
                </tr>
                <tr>
                    <th>Status</th>
                    <td>
                        {% if not judgehost.polltime %}
                            Judgehost never checked in.
                        {% else %}
                            {{ status }}, last checked in {{ judgehost.polltime | printtimediff }}s ago.
                        {% endif %}
                    </td>
                </tr>
            </table>
        </div>
    </div>

    <div class=\"mb-4\">
        {%- if is_granted('ROLE_ADMIN') -%}
            {%- if judgehost.active -%}
                {% set url = path('jury_judgehost_deactivate', {hostname: judgehost.hostname}) %}
                {% set icon = 'pause' %}
                {% set action = 'Deactivate' %}
                {% set class = 'warning' %}
            {%- else -%}
                {% set url = path('jury_judgehost_activate', {hostname: judgehost.hostname}) %}
                {% set icon = 'play' %}
                {% set action = 'Activate' %}
                {% set class = 'success' %}
            {%- endif -%}
            {{ button(url, action, class, icon) }}
            {{ button(path('jury_judgehost_delete', {'hostname': judgehost.hostname}), 'Delete judgehost', 'danger', 'trash-alt', true) }}
        {% endif %}
        {% include 'jury/partials/rejudge_form.html.twig' with {table: 'judgehost', id: judgehost.hostname, buttonClass: 'btn-primary'} %}
    </div>

    <h3>Judgings by {{ judgehost.hostname | printHost }}</h3>

    <div data-ajax-refresh-target>
        {% include 'jury/partials/judgehost_judgings.html.twig' %}
    </div>

{% endblock %}
", "jury/judgehost.html.twig", "/opt/domjudge/domserver/webapp/templates/jury/judgehost.html.twig");
    }
}
