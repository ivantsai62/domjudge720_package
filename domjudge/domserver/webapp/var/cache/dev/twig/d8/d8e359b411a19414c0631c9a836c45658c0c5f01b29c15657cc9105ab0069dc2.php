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

/* jury/language.html.twig */
class __TwigTemplate_f772bd7343f3fc2d9fc2e28ddbe01263e50be27919aa2f79feb908a39c417ea4 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "jury/language.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "jury/language.html.twig"));

        // line 2
        $macros["macros"] = $this->macros["macros"] = $this->loadTemplate("jury/jury_macros.twig", "jury/language.html.twig", 2)->unwrap();
        // line 1
        $this->parent = $this->loadTemplate("jury/base.html.twig", "jury/language.html.twig", 1);
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

        echo "Language ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["language"]) || array_key_exists("language", $context) ? $context["language"] : (function () { throw new RuntimeError('Variable "language" does not exist.', 4, $this->source); })()), "langid", [], "any", false, false, false, 4), "html", null, true);
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
    <h1>Language ";
        // line 13
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["language"]) || array_key_exists("language", $context) ? $context["language"] : (function () { throw new RuntimeError('Variable "language" does not exist.', 13, $this->source); })()), "name", [], "any", false, false, false, 13), "html", null, true);
        echo "</h1>

    <div class=\"row\">
        <div class=\"col-lg-4\">
            <table class=\"table table-sm table-striped\">
                <tr>
                    <th>ID/extension</th>
                    <td>";
        // line 20
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["language"]) || array_key_exists("language", $context) ? $context["language"] : (function () { throw new RuntimeError('Variable "language" does not exist.', 20, $this->source); })()), "langid", [], "any", false, false, false, 20), "html", null, true);
        echo "</td>
                </tr>
                ";
        // line 22
        if ($this->extensions['App\Twig\TwigExtension']->showExternalId((isset($context["language"]) || array_key_exists("language", $context) ? $context["language"] : (function () { throw new RuntimeError('Variable "language" does not exist.', 22, $this->source); })()))) {
            // line 23
            echo "                    <tr>
                        <th>External ID</th>
                        <td>";
            // line 25
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["language"]) || array_key_exists("language", $context) ? $context["language"] : (function () { throw new RuntimeError('Variable "language" does not exist.', 25, $this->source); })()), "externalid", [], "any", false, false, false, 25), "html", null, true);
            echo "</td>
                    </tr>
                ";
        }
        // line 28
        echo "                <tr>
                    <th>Name</th>
                    <td>";
        // line 30
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["language"]) || array_key_exists("language", $context) ? $context["language"] : (function () { throw new RuntimeError('Variable "language" does not exist.', 30, $this->source); })()), "name", [], "any", false, false, false, 30), "html", null, true);
        echo "</td>
                </tr>
                <tr>
                    <th>Entry point</th>
                    <td>
                        ";
        // line 35
        echo twig_escape_filter($this->env, $this->extensions['App\Twig\TwigExtension']->printYesNo(twig_get_attribute($this->env, $this->source, (isset($context["language"]) || array_key_exists("language", $context) ? $context["language"] : (function () { throw new RuntimeError('Variable "language" does not exist.', 35, $this->source); })()), "requireEntryPoint", [], "any", false, false, false, 35)), "html", null, true);
        echo "
                        ";
        // line 36
        if ((twig_get_attribute($this->env, $this->source, (isset($context["language"]) || array_key_exists("language", $context) ? $context["language"] : (function () { throw new RuntimeError('Variable "language" does not exist.', 36, $this->source); })()), "requireEntryPoint", [], "any", false, false, false, 36) && twig_get_attribute($this->env, $this->source, (isset($context["language"]) || array_key_exists("language", $context) ? $context["language"] : (function () { throw new RuntimeError('Variable "language" does not exist.', 36, $this->source); })()), "entryPointDescription", [], "any", false, false, false, 36))) {
            // line 37
            echo "                            (";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["language"]) || array_key_exists("language", $context) ? $context["language"] : (function () { throw new RuntimeError('Variable "language" does not exist.', 37, $this->source); })()), "entryPointDescription", [], "any", false, false, false, 37), "html", null, true);
            echo ")
                        ";
        }
        // line 39
        echo "                    </td>
                </tr>
                <tr>
                    <th>Allow submit</th>
                    <td>
                        ";
        // line 44
        echo twig_escape_filter($this->env, $this->extensions['App\Twig\TwigExtension']->printYesNo(twig_get_attribute($this->env, $this->source, (isset($context["language"]) || array_key_exists("language", $context) ? $context["language"] : (function () { throw new RuntimeError('Variable "language" does not exist.', 44, $this->source); })()), "allowSubmit", [], "any", false, false, false, 44)), "html", null, true);
        echo "
                        <form action=\"";
        // line 45
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_language_toggle_submit", ["langId" => twig_get_attribute($this->env, $this->source, (isset($context["language"]) || array_key_exists("language", $context) ? $context["language"] : (function () { throw new RuntimeError('Variable "language" does not exist.', 45, $this->source); })()), "langid", [], "any", false, false, false, 45)]), "html", null, true);
        echo "\" method=\"post\" class=\"d-inline\">
                            <input type=\"hidden\" name=\"allow_submit\" value=\"";
        // line 46
        echo twig_escape_filter($this->env,  !twig_get_attribute($this->env, $this->source, (isset($context["language"]) || array_key_exists("language", $context) ? $context["language"] : (function () { throw new RuntimeError('Variable "language" does not exist.', 46, $this->source); })()), "allowSubmit", [], "any", false, false, false, 46), "html", null, true);
        echo "\" />
                            <input type=\"submit\" class=\"btn btn-sm btn-outline-secondary\" value=\"toggle\"/>
                        </form>
                    </td>
                </tr>
                <tr>
                    <th>Allow judge</th>
                    <td>
                        ";
        // line 54
        echo twig_escape_filter($this->env, $this->extensions['App\Twig\TwigExtension']->printYesNo(twig_get_attribute($this->env, $this->source, (isset($context["language"]) || array_key_exists("language", $context) ? $context["language"] : (function () { throw new RuntimeError('Variable "language" does not exist.', 54, $this->source); })()), "allowJudge", [], "any", false, false, false, 54)), "html", null, true);
        echo "
                        <form action=\"";
        // line 55
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_language_toggle_judge", ["langId" => twig_get_attribute($this->env, $this->source, (isset($context["language"]) || array_key_exists("language", $context) ? $context["language"] : (function () { throw new RuntimeError('Variable "language" does not exist.', 55, $this->source); })()), "langid", [], "any", false, false, false, 55)]), "html", null, true);
        echo "\" method=\"post\" class=\"d-inline\">
                            <input type=\"hidden\" name=\"allow_judge\" value=\"";
        // line 56
        echo twig_escape_filter($this->env,  !twig_get_attribute($this->env, $this->source, (isset($context["language"]) || array_key_exists("language", $context) ? $context["language"] : (function () { throw new RuntimeError('Variable "language" does not exist.', 56, $this->source); })()), "allowJudge", [], "any", false, false, false, 56), "html", null, true);
        echo "\" />
                            <input type=\"submit\" class=\"btn btn-sm btn-outline-secondary\" value=\"toggle\"/>
                        </form>
                    </td>
                </tr>
                <tr>
                    <th>Time factor</th>
                    <td>";
        // line 63
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["language"]) || array_key_exists("language", $context) ? $context["language"] : (function () { throw new RuntimeError('Variable "language" does not exist.', 63, $this->source); })()), "timeFactor", [], "any", false, false, false, 63), "html", null, true);
        echo " &times;</td>
                </tr>
                <tr>
                    <th>Compile script</th>
                    <td>
                        ";
        // line 68
        if (twig_get_attribute($this->env, $this->source, (isset($context["language"]) || array_key_exists("language", $context) ? $context["language"] : (function () { throw new RuntimeError('Variable "language" does not exist.', 68, $this->source); })()), "compileExecutable", [], "any", false, false, false, 68)) {
            // line 69
            echo "                            <a href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_executable", ["execId" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["language"]) || array_key_exists("language", $context) ? $context["language"] : (function () { throw new RuntimeError('Variable "language" does not exist.', 69, $this->source); })()), "compileExecutable", [], "any", false, false, false, 69), "execid", [], "any", false, false, false, 69)]), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["language"]) || array_key_exists("language", $context) ? $context["language"] : (function () { throw new RuntimeError('Variable "language" does not exist.', 69, $this->source); })()), "compileExecutable", [], "any", false, false, false, 69), "execid", [], "any", false, false, false, 69), "html", null, true);
            echo "</a>
                        ";
        } else {
            // line 71
            echo "                            <span class=\"nodata\">none specified</span>
                        ";
        }
        // line 73
        echo "                    </td>
                </tr>
                <tr>
                    <th>Extensions</th>
                    <td>";
        // line 77
        echo twig_escape_filter($this->env, twig_join_filter(twig_get_attribute($this->env, $this->source, (isset($context["language"]) || array_key_exists("language", $context) ? $context["language"] : (function () { throw new RuntimeError('Variable "language" does not exist.', 77, $this->source); })()), "extensions", [], "any", false, false, false, 77), ", "), "html", null, true);
        echo "</td>
                </tr>
                <tr>
                    <th>Filter files passed to compiler by extension list</th>
                    <td>
                        ";
        // line 82
        echo twig_escape_filter($this->env, $this->extensions['App\Twig\TwigExtension']->printYesNo(twig_get_attribute($this->env, $this->source, (isset($context["language"]) || array_key_exists("language", $context) ? $context["language"] : (function () { throw new RuntimeError('Variable "language" does not exist.', 82, $this->source); })()), "filterCompilerFiles", [], "any", false, false, false, 82)), "html", null, true);
        echo "
                    </td>
                </tr>
            </table>
        </div>
    </div>

    <p>";
        // line 90
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 91
            echo $this->extensions['App\Twig\TwigExtension']->button($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_language_edit", ["langId" => twig_get_attribute($this->env, $this->source, (isset($context["language"]) || array_key_exists("language", $context) ? $context["language"] : (function () { throw new RuntimeError('Variable "language" does not exist.', 91, $this->source); })()), "langid", [], "any", false, false, false, 91)]), "Edit", "primary", "edit");
            echo "
            ";
            // line 92
            echo $this->extensions['App\Twig\TwigExtension']->button($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_language_delete", ["langId" => twig_get_attribute($this->env, $this->source, (isset($context["language"]) || array_key_exists("language", $context) ? $context["language"] : (function () { throw new RuntimeError('Variable "language" does not exist.', 92, $this->source); })()), "langid", [], "any", false, false, false, 92)]), "Delete", "danger", "trash-alt", true);
            echo "
        ";
        }
        // line 94
        echo "        ";
        $this->loadTemplate("jury/partials/rejudge_form.html.twig", "jury/language.html.twig", 94)->display(twig_array_merge($context, ["table" => "language", "id" => twig_get_attribute($this->env, $this->source, (isset($context["language"]) || array_key_exists("language", $context) ? $context["language"] : (function () { throw new RuntimeError('Variable "language" does not exist.', 94, $this->source); })()), "langid", [], "any", false, false, false, 94), "buttonClass" => "btn-secondary"]));
        // line 95
        echo "    </p>

    <h2>Submissions in ";
        // line 97
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["language"]) || array_key_exists("language", $context) ? $context["language"] : (function () { throw new RuntimeError('Variable "language" does not exist.', 97, $this->source); })()), "name", [], "any", false, false, false, 97), "html", null, true);
        echo "</h2>

    <div data-ajax-refresh-target>";
        // line 100
        $this->loadTemplate("jury/partials/submission_list.html.twig", "jury/language.html.twig", 100)->display(twig_array_merge($context, ["showTestcases" => false]));
        // line 101
        echo "    </div>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "jury/language.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  291 => 101,  289 => 100,  284 => 97,  280 => 95,  277 => 94,  272 => 92,  268 => 91,  266 => 90,  256 => 82,  248 => 77,  242 => 73,  238 => 71,  230 => 69,  228 => 68,  220 => 63,  210 => 56,  206 => 55,  202 => 54,  191 => 46,  187 => 45,  183 => 44,  176 => 39,  170 => 37,  168 => 36,  164 => 35,  156 => 30,  152 => 28,  146 => 25,  142 => 23,  140 => 22,  135 => 20,  125 => 13,  122 => 12,  112 => 11,  100 => 8,  95 => 7,  85 => 6,  63 => 4,  52 => 1,  50 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"jury/base.html.twig\" %}
{% import \"jury/jury_macros.twig\" as macros %}

{% block title %}Language {{ language.langid }} - {{ parent() }}{% endblock %}

{% block extrahead %}
    {{ parent() }}
    {{ macros.table_extrahead() }}
{% endblock %}

{% block content %}

    <h1>Language {{ language.name }}</h1>

    <div class=\"row\">
        <div class=\"col-lg-4\">
            <table class=\"table table-sm table-striped\">
                <tr>
                    <th>ID/extension</th>
                    <td>{{ language.langid }}</td>
                </tr>
                {% if showExternalId(language) %}
                    <tr>
                        <th>External ID</th>
                        <td>{{ language.externalid }}</td>
                    </tr>
                {% endif %}
                <tr>
                    <th>Name</th>
                    <td>{{ language.name }}</td>
                </tr>
                <tr>
                    <th>Entry point</th>
                    <td>
                        {{ language.requireEntryPoint | printYesNo }}
                        {% if language.requireEntryPoint and language.entryPointDescription %}
                            ({{ language.entryPointDescription }})
                        {% endif %}
                    </td>
                </tr>
                <tr>
                    <th>Allow submit</th>
                    <td>
                        {{ language.allowSubmit | printYesNo }}
                        <form action=\"{{ path('jury_language_toggle_submit', {'langId': language.langid}) }}\" method=\"post\" class=\"d-inline\">
                            <input type=\"hidden\" name=\"allow_submit\" value=\"{{ not language.allowSubmit }}\" />
                            <input type=\"submit\" class=\"btn btn-sm btn-outline-secondary\" value=\"toggle\"/>
                        </form>
                    </td>
                </tr>
                <tr>
                    <th>Allow judge</th>
                    <td>
                        {{ language.allowJudge | printYesNo }}
                        <form action=\"{{ path('jury_language_toggle_judge', {'langId': language.langid}) }}\" method=\"post\" class=\"d-inline\">
                            <input type=\"hidden\" name=\"allow_judge\" value=\"{{ not language.allowJudge }}\" />
                            <input type=\"submit\" class=\"btn btn-sm btn-outline-secondary\" value=\"toggle\"/>
                        </form>
                    </td>
                </tr>
                <tr>
                    <th>Time factor</th>
                    <td>{{ language.timeFactor }} &times;</td>
                </tr>
                <tr>
                    <th>Compile script</th>
                    <td>
                        {% if language.compileExecutable %}
                            <a href=\"{{ path('jury_executable', {'execId': language.compileExecutable.execid}) }}\">{{ language.compileExecutable.execid }}</a>
                        {% else %}
                            <span class=\"nodata\">none specified</span>
                        {% endif %}
                    </td>
                </tr>
                <tr>
                    <th>Extensions</th>
                    <td>{{ language.extensions | join(', ') }}</td>
                </tr>
                <tr>
                    <th>Filter files passed to compiler by extension list</th>
                    <td>
                        {{ language.filterCompilerFiles | printYesNo }}
                    </td>
                </tr>
            </table>
        </div>
    </div>

    <p>
        {%- if is_granted('ROLE_ADMIN') -%}
            {{ button(path('jury_language_edit', {'langId': language.langid}), 'Edit', 'primary', 'edit') }}
            {{ button(path('jury_language_delete', {'langId': language.langid}), 'Delete', 'danger', 'trash-alt', true) }}
        {% endif %}
        {% include 'jury/partials/rejudge_form.html.twig' with {table: 'language', id: language.langid, buttonClass: 'btn-secondary'} %}
    </p>

    <h2>Submissions in {{ language.name }}</h2>

    <div data-ajax-refresh-target>
        {%- include 'jury/partials/submission_list.html.twig' with {showTestcases: false} %}
    </div>

{% endblock %}
", "jury/language.html.twig", "/opt/domjudge/domserver/webapp/templates/jury/language.html.twig");
    }
}
