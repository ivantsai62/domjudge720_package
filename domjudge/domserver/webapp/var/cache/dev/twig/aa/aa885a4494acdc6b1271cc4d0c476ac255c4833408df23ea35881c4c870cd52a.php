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

/* jury/executable.html.twig */
class __TwigTemplate_2da2262fa947747a13e5917295d642a5935705e40144c1f76199d2440a82cfa9 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "jury/executable.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "jury/executable.html.twig"));

        // line 2
        $macros["macros"] = $this->macros["macros"] = $this->loadTemplate("jury/jury_macros.twig", "jury/executable.html.twig", 2)->unwrap();
        // line 1
        $this->parent = $this->loadTemplate("jury/base.html.twig", "jury/executable.html.twig", 1);
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

        echo "Executable ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["executable"]) || array_key_exists("executable", $context) ? $context["executable"] : (function () { throw new RuntimeError('Variable "executable" does not exist.', 4, $this->source); })()), "execid", [], "any", false, false, false, 4), "html", null, true);
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
    <h1>Executable ";
        // line 13
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["executable"]) || array_key_exists("executable", $context) ? $context["executable"] : (function () { throw new RuntimeError('Variable "executable" does not exist.', 13, $this->source); })()), "execid", [], "any", false, false, false, 13), "html", null, true);
        echo "</h1>

    <div class=\"row\">
        <div class=\"col-lg-4\">
            <table class=\"table table-sm table-striped\">
                <tr>
                    <th>ID</th>
                    <td>";
        // line 20
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["executable"]) || array_key_exists("executable", $context) ? $context["executable"] : (function () { throw new RuntimeError('Variable "executable" does not exist.', 20, $this->source); })()), "execid", [], "any", false, false, false, 20), "html", null, true);
        echo "</td>
                </tr>
                <tr>
                    <th>Name</th>
                    <td>";
        // line 24
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["executable"]) || array_key_exists("executable", $context) ? $context["executable"] : (function () { throw new RuntimeError('Variable "executable" does not exist.', 24, $this->source); })()), "description", [], "any", false, false, false, 24), "html", null, true);
        echo "</td>
                </tr>
                <tr>
                    <th>MD5sum</th>
                    <td>";
        // line 28
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["executable"]) || array_key_exists("executable", $context) ? $context["executable"] : (function () { throw new RuntimeError('Variable "executable" does not exist.', 28, $this->source); })()), "md5sum", [], "any", false, false, false, 28), "html", null, true);
        echo "</td>
                </tr>
                <tr>
                    <th>Type</th>
                    <td>";
        // line 32
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["executable"]) || array_key_exists("executable", $context) ? $context["executable"] : (function () { throw new RuntimeError('Variable "executable" does not exist.', 32, $this->source); })()), "type", [], "any", false, false, false, 32), "html", null, true);
        echo "</td>
                </tr>
                <tr>
                    <th>Size</th>
                    <td>";
        // line 36
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["executable"]) || array_key_exists("executable", $context) ? $context["executable"] : (function () { throw new RuntimeError('Variable "executable" does not exist.', 36, $this->source); })()), "zipFileSize", [], "any", false, false, false, 36), "html", null, true);
        echo " bytes</td>
                </tr>
                <tr>
                    <th>Content</th>
                    <td>
                        <a href=\"";
        // line 41
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_executable_content", ["execId" => twig_get_attribute($this->env, $this->source, (isset($context["executable"]) || array_key_exists("executable", $context) ? $context["executable"] : (function () { throw new RuntimeError('Variable "executable" does not exist.', 41, $this->source); })()), "execid", [], "any", false, false, false, 41)]), "html", null, true);
        echo "\">
                            View file contents
                        </a>
                    </td>
                </tr>
                <tr>
                    <th>Used as ";
        // line 47
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["executable"]) || array_key_exists("executable", $context) ? $context["executable"] : (function () { throw new RuntimeError('Variable "executable" does not exist.', 47, $this->source); })()), "type", [], "any", false, false, false, 47), "html", null, true);
        echo " script</th>
                    <td>
                        ";
        // line 49
        $context["used"] = false;
        // line 50
        echo "                        ";
        if (((twig_get_attribute($this->env, $this->source, (isset($context["executable"]) || array_key_exists("executable", $context) ? $context["executable"] : (function () { throw new RuntimeError('Variable "executable" does not exist.', 50, $this->source); })()), "type", [], "any", false, false, false, 50) == "compare") && ((isset($context["default_compare"]) || array_key_exists("default_compare", $context) ? $context["default_compare"] : (function () { throw new RuntimeError('Variable "default_compare" does not exist.', 50, $this->source); })()) == twig_get_attribute($this->env, $this->source, (isset($context["executable"]) || array_key_exists("executable", $context) ? $context["executable"] : (function () { throw new RuntimeError('Variable "executable" does not exist.', 50, $this->source); })()), "execid", [], "any", false, false, false, 50)))) {
            // line 51
            echo "                            <em>default compare</em>
                            ";
            // line 52
            $context["used"] = true;
            // line 53
            echo "                        ";
        } elseif (((twig_get_attribute($this->env, $this->source, (isset($context["executable"]) || array_key_exists("executable", $context) ? $context["executable"] : (function () { throw new RuntimeError('Variable "executable" does not exist.', 53, $this->source); })()), "type", [], "any", false, false, false, 53) == "run") && ((isset($context["default_run"]) || array_key_exists("default_run", $context) ? $context["default_run"] : (function () { throw new RuntimeError('Variable "default_run" does not exist.', 53, $this->source); })()) == twig_get_attribute($this->env, $this->source, (isset($context["executable"]) || array_key_exists("executable", $context) ? $context["executable"] : (function () { throw new RuntimeError('Variable "executable" does not exist.', 53, $this->source); })()), "execid", [], "any", false, false, false, 53)))) {
            // line 54
            echo "                            <em>default run</em>
                            ";
            // line 55
            $context["used"] = true;
            // line 56
            echo "                        ";
        }
        // line 57
        echo "                        ";
        if ((twig_get_attribute($this->env, $this->source, (isset($context["executable"]) || array_key_exists("executable", $context) ? $context["executable"] : (function () { throw new RuntimeError('Variable "executable" does not exist.', 57, $this->source); })()), "type", [], "any", false, false, false, 57) == "compare")) {
            // line 58
            echo "                            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["executable"]) || array_key_exists("executable", $context) ? $context["executable"] : (function () { throw new RuntimeError('Variable "executable" does not exist.', 58, $this->source); })()), "problemsCompare", [], "any", false, false, false, 58));
            foreach ($context['_seq'] as $context["_key"] => $context["problem"]) {
                // line 59
                echo "                                <a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_problem", ["probId" => twig_get_attribute($this->env, $this->source, $context["problem"], "probid", [], "any", false, false, false, 59)]), "html", null, true);
                echo "\">
                                    p";
                // line 60
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["problem"], "probid", [], "any", false, false, false, 60), "html", null, true);
                echo "
                                </a>
                                ";
                // line 62
                $context["used"] = true;
                // line 63
                echo "                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['problem'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 64
            echo "                        ";
        } elseif ((twig_get_attribute($this->env, $this->source, (isset($context["executable"]) || array_key_exists("executable", $context) ? $context["executable"] : (function () { throw new RuntimeError('Variable "executable" does not exist.', 64, $this->source); })()), "type", [], "any", false, false, false, 64) == "run")) {
            // line 65
            echo "                            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["executable"]) || array_key_exists("executable", $context) ? $context["executable"] : (function () { throw new RuntimeError('Variable "executable" does not exist.', 65, $this->source); })()), "problemsRun", [], "any", false, false, false, 65));
            foreach ($context['_seq'] as $context["_key"] => $context["problem"]) {
                // line 66
                echo "                                <a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_problem", ["probId" => twig_get_attribute($this->env, $this->source, $context["problem"], "probid", [], "any", false, false, false, 66)]), "html", null, true);
                echo "\">
                                    p";
                // line 67
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["problem"], "probid", [], "any", false, false, false, 67), "html", null, true);
                echo "
                                </a>
                                ";
                // line 69
                $context["used"] = true;
                // line 70
                echo "                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['problem'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 71
            echo "                        ";
        } elseif ((twig_get_attribute($this->env, $this->source, (isset($context["executable"]) || array_key_exists("executable", $context) ? $context["executable"] : (function () { throw new RuntimeError('Variable "executable" does not exist.', 71, $this->source); })()), "type", [], "any", false, false, false, 71) == "compile")) {
            // line 72
            echo "                            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["executable"]) || array_key_exists("executable", $context) ? $context["executable"] : (function () { throw new RuntimeError('Variable "executable" does not exist.', 72, $this->source); })()), "languages", [], "any", false, false, false, 72));
            foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
                // line 73
                echo "                                <a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_language", ["langId" => twig_get_attribute($this->env, $this->source, $context["language"], "langid", [], "any", false, false, false, 73)]), "html", null, true);
                echo "\">
                                    ";
                // line 74
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["language"], "langid", [], "any", false, false, false, 74), "html", null, true);
                echo "
                                </a>
                                ";
                // line 76
                $context["used"] = true;
                // line 77
                echo "                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 78
            echo "                        ";
        }
        // line 79
        echo "                        ";
        if ( !(isset($context["used"]) || array_key_exists("used", $context) ? $context["used"] : (function () { throw new RuntimeError('Variable "used" does not exist.', 79, $this->source); })())) {
            // line 80
            echo "                            <span class=\"nodata\">none</span>
                        ";
        }
        // line 82
        echo "                    </td>
                </tr>
            </table>
        </div>
    </div>

    <div class=\"mb-4\">";
        // line 89
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 90
            echo "<p>
                ";
            // line 91
            echo $this->extensions['App\Twig\TwigExtension']->button($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_executable_download", ["execId" => twig_get_attribute($this->env, $this->source, (isset($context["executable"]) || array_key_exists("executable", $context) ? $context["executable"] : (function () { throw new RuntimeError('Variable "executable" does not exist.', 91, $this->source); })()), "execid", [], "any", false, false, false, 91)]), "Download", "secondary", "file-download");
            echo "
                ";
            // line 92
            echo $this->extensions['App\Twig\TwigExtension']->button($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_executable_edit", ["execId" => twig_get_attribute($this->env, $this->source, (isset($context["executable"]) || array_key_exists("executable", $context) ? $context["executable"] : (function () { throw new RuntimeError('Variable "executable" does not exist.', 92, $this->source); })()), "execid", [], "any", false, false, false, 92)]), "Edit", "primary", "edit");
            echo "
                ";
            // line 93
            echo $this->extensions['App\Twig\TwigExtension']->button($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_executable_delete", ["execId" => twig_get_attribute($this->env, $this->source, (isset($context["executable"]) || array_key_exists("executable", $context) ? $context["executable"] : (function () { throw new RuntimeError('Variable "executable" does not exist.', 93, $this->source); })()), "execid", [], "any", false, false, false, 93)]), "Delete", "danger", "trash-alt", true);
            echo "
            </p>
        ";
        }
        // line 96
        echo "    </div>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "jury/executable.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  321 => 96,  315 => 93,  311 => 92,  307 => 91,  304 => 90,  302 => 89,  294 => 82,  290 => 80,  287 => 79,  284 => 78,  278 => 77,  276 => 76,  271 => 74,  266 => 73,  261 => 72,  258 => 71,  252 => 70,  250 => 69,  245 => 67,  240 => 66,  235 => 65,  232 => 64,  226 => 63,  224 => 62,  219 => 60,  214 => 59,  209 => 58,  206 => 57,  203 => 56,  201 => 55,  198 => 54,  195 => 53,  193 => 52,  190 => 51,  187 => 50,  185 => 49,  180 => 47,  171 => 41,  163 => 36,  156 => 32,  149 => 28,  142 => 24,  135 => 20,  125 => 13,  122 => 12,  112 => 11,  100 => 8,  95 => 7,  85 => 6,  63 => 4,  52 => 1,  50 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"jury/base.html.twig\" %}
{% import \"jury/jury_macros.twig\" as macros %}

{% block title %}Executable {{ executable.execid }} - {{ parent() }}{% endblock %}

{% block extrahead %}
    {{ parent() }}
    {{ macros.table_extrahead() }}
{% endblock %}

{% block content %}

    <h1>Executable {{ executable.execid }}</h1>

    <div class=\"row\">
        <div class=\"col-lg-4\">
            <table class=\"table table-sm table-striped\">
                <tr>
                    <th>ID</th>
                    <td>{{ executable.execid }}</td>
                </tr>
                <tr>
                    <th>Name</th>
                    <td>{{ executable.description }}</td>
                </tr>
                <tr>
                    <th>MD5sum</th>
                    <td>{{ executable.md5sum }}</td>
                </tr>
                <tr>
                    <th>Type</th>
                    <td>{{ executable.type }}</td>
                </tr>
                <tr>
                    <th>Size</th>
                    <td>{{ executable.zipFileSize }} bytes</td>
                </tr>
                <tr>
                    <th>Content</th>
                    <td>
                        <a href=\"{{ path('jury_executable_content', {'execId': executable.execid}) }}\">
                            View file contents
                        </a>
                    </td>
                </tr>
                <tr>
                    <th>Used as {{ executable.type }} script</th>
                    <td>
                        {% set used = false %}
                        {% if executable.type == 'compare' and default_compare == executable.execid %}
                            <em>default compare</em>
                            {% set used = true %}
                        {% elseif executable.type == 'run' and default_run == executable.execid %}
                            <em>default run</em>
                            {% set used = true %}
                        {% endif %}
                        {% if executable.type == 'compare' %}
                            {% for problem in executable.problemsCompare %}
                                <a href=\"{{ path('jury_problem', {'probId': problem.probid}) }}\">
                                    p{{ problem.probid }}
                                </a>
                                {% set used = true %}
                            {% endfor %}
                        {% elseif executable.type == 'run' %}
                            {% for problem in executable.problemsRun %}
                                <a href=\"{{ path('jury_problem', {'probId': problem.probid}) }}\">
                                    p{{ problem.probid }}
                                </a>
                                {% set used = true %}
                            {% endfor %}
                        {% elseif executable.type == 'compile' %}
                            {% for language in executable.languages %}
                                <a href=\"{{ path('jury_language', {'langId': language.langid}) }}\">
                                    {{ language.langid }}
                                </a>
                                {% set used = true %}
                            {% endfor %}
                        {% endif %}
                        {% if not used %}
                            <span class=\"nodata\">none</span>
                        {% endif %}
                    </td>
                </tr>
            </table>
        </div>
    </div>

    <div class=\"mb-4\">
        {%- if is_granted('ROLE_ADMIN') -%}
            <p>
                {{ button(path('jury_executable_download', {'execId': executable.execid}), 'Download', 'secondary', 'file-download') }}
                {{ button(path('jury_executable_edit', {'execId': executable.execid}), 'Edit', 'primary', 'edit') }}
                {{ button(path('jury_executable_delete', {'execId': executable.execid}), 'Delete', 'danger', 'trash-alt', true) }}
            </p>
        {% endif %}
    </div>

{% endblock %}
", "jury/executable.html.twig", "/opt/domjudge/domserver/webapp/templates/jury/executable.html.twig");
    }
}
