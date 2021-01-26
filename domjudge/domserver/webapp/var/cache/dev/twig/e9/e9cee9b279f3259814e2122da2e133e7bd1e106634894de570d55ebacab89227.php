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

/* jury/import_export.html.twig */
class __TwigTemplate_04cb4435661648f8c224bbb6ca74163f2460696fe71d2f187eca86fd38858e51 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "jury/import_export.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "jury/import_export.html.twig"));

        $this->parent = $this->loadTemplate("jury/base.html.twig", "jury/import_export.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Import and export - ";
        $this->displayParentBlock("title", $context, $blocks);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 6
        echo "
    <h1>Import and export</h1>

    <h3>Import / export via file down/upload</h3>

    <ul>
        <li><a href=\"";
        // line 12
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_import_export_yaml");
        echo "\">Contest data (<code>contest.yaml</code>)</a></li>
        <li><a href=\"";
        // line 13
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_problems");
        echo "\">Problem archive</a></li>
        <li>
            Tab separated, export:
            <ul>
                ";
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable([0 => "groups", 1 => "teams", 2 => "scoreboard"]);
        foreach ($context['_seq'] as $context["_key"] => $context["type"]) {
            // line 18
            echo "                    <li>
                        <a href=\"";
            // line 19
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_tsv_export", ["type" => $context["type"]]), "html", null, true);
            echo "\"><code>";
            echo twig_escape_filter($this->env, $context["type"], "html", null, true);
            echo ".tsv</code></a>
                    </li>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['type'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 22
        echo "                <li><code>results.tsv</code> for sort order
                    <ul>
                        ";
        // line 24
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["sort_orders"]) || array_key_exists("sort_orders", $context) ? $context["sort_orders"] : (function () { throw new RuntimeError('Variable "sort_orders" does not exist.', 24, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["sort_order"]) {
            // line 25
            echo "                            <li>
                                <a href=\"";
            // line 26
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_tsv_export", ["type" => "results"]);
            echo "?sort_order=";
            echo twig_escape_filter($this->env, $context["sort_order"], "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $context["sort_order"], "html", null, true);
            echo "</a>
                            </li>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sort_order'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 29
        echo "                    </ul>
                </li>
            </ul>
        </li>
        <li>
            HTML, export:
            <ul>
                <li><code>results.html</code> for sort order
                    <ul>
                        ";
        // line 38
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["sort_orders"]) || array_key_exists("sort_orders", $context) ? $context["sort_orders"] : (function () { throw new RuntimeError('Variable "sort_orders" does not exist.', 38, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["sort_order"]) {
            // line 39
            echo "                            <li>
                                <a href=\"";
            // line 40
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_html_export", ["type" => "results"]);
            echo "?sort_order=";
            echo twig_escape_filter($this->env, $context["sort_order"], "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $context["sort_order"], "html", null, true);
            echo "</a>
                            </li>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sort_order'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 43
        echo "                    </ul>
                </li>
                <li><code>results.html</code> for on ICPC site for sort order
                    <ul>
                        ";
        // line 47
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["sort_orders"]) || array_key_exists("sort_orders", $context) ? $context["sort_orders"] : (function () { throw new RuntimeError('Variable "sort_orders" does not exist.', 47, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["sort_order"]) {
            // line 48
            echo "                            <li>
                                <a href=\"";
            // line 49
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_html_export", ["type" => "results-icpc"]);
            echo "?sort_order=";
            echo twig_escape_filter($this->env, $context["sort_order"], "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $context["sort_order"], "html", null, true);
            echo "</a>
                            </li>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sort_order'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 52
        echo "                    </ul>
                </li>
                <li>
                    <a href=\"";
        // line 55
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_html_export", ["type" => "clarifications"]);
        echo "\" target=\"_blank\"><code>clarifications.html</code></a>
                </li>
            </ul>
        </li>
    </ul>

    <h4>Tab-separated import</h4>
    <div class=\"row\">
        <div class=\"col-md-6\">
            ";
        // line 64
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["tsv_form"]) || array_key_exists("tsv_form", $context) ? $context["tsv_form"] : (function () { throw new RuntimeError('Variable "tsv_form" does not exist.', 64, $this->source); })()), 'form');
        echo "
        </div>
    </div>

    <h3>Import teams / upload standings from / to icpc.baylor.edu</h3>

    <div class=\"row\">
        <div class=\"col-md-6\">
            <div class=\"alert alert-info\">
                Create a \"Web Services Token\" with appropriate rights in the \"Export\" section for your contest at <a
                        href=\"https://icpc.baylor.edu/login\" target=\"_blank\">https://icpc.baylor.edu/login</a>.
                You can find the Contest ID (e.g. <code>Southwestern-Europe-2014</code>) in the URL.
            </div>

            ";
        // line 78
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["baylor_form"]) || array_key_exists("baylor_form", $context) ? $context["baylor_form"] : (function () { throw new RuntimeError('Variable "baylor_form" does not exist.', 78, $this->source); })()), 'form_start');
        echo "
            ";
        // line 79
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["baylor_form"]) || array_key_exists("baylor_form", $context) ? $context["baylor_form"] : (function () { throw new RuntimeError('Variable "baylor_form" does not exist.', 79, $this->source); })()), "contest_id", [], "any", false, false, false, 79), 'row');
        echo "
            ";
        // line 80
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["baylor_form"]) || array_key_exists("baylor_form", $context) ? $context["baylor_form"] : (function () { throw new RuntimeError('Variable "baylor_form" does not exist.', 80, $this->source); })()), "access_token", [], "any", false, false, false, 80), 'row');
        echo "
            <div class=\"form-group\">
                ";
        // line 82
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["baylor_form"]) || array_key_exists("baylor_form", $context) ? $context["baylor_form"] : (function () { throw new RuntimeError('Variable "baylor_form" does not exist.', 82, $this->source); })()), "fetch_teams", [], "any", false, false, false, 82), 'widget');
        echo "
                ";
        // line 83
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["baylor_form"]) || array_key_exists("baylor_form", $context) ? $context["baylor_form"] : (function () { throw new RuntimeError('Variable "baylor_form" does not exist.', 83, $this->source); })()), "upload_standings", [], "any", false, false, false, 83), 'widget');
        echo "
            </div>
            ";
        // line 85
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["baylor_form"]) || array_key_exists("baylor_form", $context) ? $context["baylor_form"] : (function () { throw new RuntimeError('Variable "baylor_form" does not exist.', 85, $this->source); })()), 'form_end');
        echo "
        </div>
    </div>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "jury/import_export.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  263 => 85,  258 => 83,  254 => 82,  249 => 80,  245 => 79,  241 => 78,  224 => 64,  212 => 55,  207 => 52,  194 => 49,  191 => 48,  187 => 47,  181 => 43,  168 => 40,  165 => 39,  161 => 38,  150 => 29,  137 => 26,  134 => 25,  130 => 24,  126 => 22,  115 => 19,  112 => 18,  108 => 17,  101 => 13,  97 => 12,  89 => 6,  79 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"jury/base.html.twig\" %}

{% block title %}Import and export - {{ parent() }}{% endblock %}

{% block content %}

    <h1>Import and export</h1>

    <h3>Import / export via file down/upload</h3>

    <ul>
        <li><a href=\"{{ path('jury_import_export_yaml') }}\">Contest data (<code>contest.yaml</code>)</a></li>
        <li><a href=\"{{ path('jury_problems') }}\">Problem archive</a></li>
        <li>
            Tab separated, export:
            <ul>
                {% for type in ['groups', 'teams', 'scoreboard'] %}
                    <li>
                        <a href=\"{{ path('jury_tsv_export', {'type': type}) }}\"><code>{{ type }}.tsv</code></a>
                    </li>
                {% endfor %}
                <li><code>results.tsv</code> for sort order
                    <ul>
                        {% for sort_order in sort_orders %}
                            <li>
                                <a href=\"{{ path('jury_tsv_export', {'type': 'results'}) }}?sort_order={{ sort_order }}\">{{ sort_order }}</a>
                            </li>
                        {% endfor %}
                    </ul>
                </li>
            </ul>
        </li>
        <li>
            HTML, export:
            <ul>
                <li><code>results.html</code> for sort order
                    <ul>
                        {% for sort_order in sort_orders %}
                            <li>
                                <a href=\"{{ path('jury_html_export', {'type': 'results'}) }}?sort_order={{ sort_order }}\">{{ sort_order }}</a>
                            </li>
                        {% endfor %}
                    </ul>
                </li>
                <li><code>results.html</code> for on ICPC site for sort order
                    <ul>
                        {% for sort_order in sort_orders %}
                            <li>
                                <a href=\"{{ path('jury_html_export', {'type': 'results-icpc'}) }}?sort_order={{ sort_order }}\">{{ sort_order }}</a>
                            </li>
                        {% endfor %}
                    </ul>
                </li>
                <li>
                    <a href=\"{{ path('jury_html_export', {'type': 'clarifications'}) }}\" target=\"_blank\"><code>clarifications.html</code></a>
                </li>
            </ul>
        </li>
    </ul>

    <h4>Tab-separated import</h4>
    <div class=\"row\">
        <div class=\"col-md-6\">
            {{ form(tsv_form) }}
        </div>
    </div>

    <h3>Import teams / upload standings from / to icpc.baylor.edu</h3>

    <div class=\"row\">
        <div class=\"col-md-6\">
            <div class=\"alert alert-info\">
                Create a \"Web Services Token\" with appropriate rights in the \"Export\" section for your contest at <a
                        href=\"https://icpc.baylor.edu/login\" target=\"_blank\">https://icpc.baylor.edu/login</a>.
                You can find the Contest ID (e.g. <code>Southwestern-Europe-2014</code>) in the URL.
            </div>

            {{ form_start(baylor_form) }}
            {{ form_row(baylor_form.contest_id) }}
            {{ form_row(baylor_form.access_token) }}
            <div class=\"form-group\">
                {{ form_widget(baylor_form.fetch_teams) }}
                {{ form_widget(baylor_form.upload_standings) }}
            </div>
            {{ form_end(baylor_form) }}
        </div>
    </div>

{% endblock %}
", "jury/import_export.html.twig", "/opt/domjudge/domserver/webapp/templates/jury/import_export.html.twig");
    }
}
