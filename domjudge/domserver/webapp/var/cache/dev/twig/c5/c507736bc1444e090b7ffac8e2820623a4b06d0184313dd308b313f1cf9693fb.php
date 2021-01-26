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

/* jury/judgehost_restriction.html.twig */
class __TwigTemplate_c8eafe8bb06c4852e74944a7fc24d05a06630e9ef32e14c9e964cb392e4a37b7 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "jury/judgehost_restriction.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "jury/judgehost_restriction.html.twig"));

        // line 2
        $macros["macros"] = $this->macros["macros"] = $this->loadTemplate("jury/jury_macros.twig", "jury/judgehost_restriction.html.twig", 2)->unwrap();
        // line 1
        $this->parent = $this->loadTemplate("jury/base.html.twig", "jury/judgehost_restriction.html.twig", 1);
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

        echo "Judgehost restriction ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["judgehostRestriction"]) || array_key_exists("judgehostRestriction", $context) ? $context["judgehostRestriction"] : (function () { throw new RuntimeError('Variable "judgehostRestriction" does not exist.', 4, $this->source); })()), "name", [], "any", false, false, false, 4), "html", null, true);
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
    <h1>Judgehost restriction ";
        // line 13
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["judgehostRestriction"]) || array_key_exists("judgehostRestriction", $context) ? $context["judgehostRestriction"] : (function () { throw new RuntimeError('Variable "judgehostRestriction" does not exist.', 13, $this->source); })()), "name", [], "any", false, false, false, 13), "html", null, true);
        echo "</h1>

    <div class=\"row\">
        <div class=\"col-lg-6\">
            <table class=\"table table-sm table-striped\">
                <tr>
                    <th>ID</th>
                    <td>";
        // line 20
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["judgehostRestriction"]) || array_key_exists("judgehostRestriction", $context) ? $context["judgehostRestriction"] : (function () { throw new RuntimeError('Variable "judgehostRestriction" does not exist.', 20, $this->source); })()), "restrictionid", [], "any", false, false, false, 20), "html", null, true);
        echo "</td>
                </tr>
                <tr>
                    <th>Name</th>
                    <td>";
        // line 24
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["judgehostRestriction"]) || array_key_exists("judgehostRestriction", $context) ? $context["judgehostRestriction"] : (function () { throw new RuntimeError('Variable "judgehostRestriction" does not exist.', 24, $this->source); })()), "name", [], "any", false, false, false, 24), "html", null, true);
        echo "</td>
                </tr>
                <tr>
                    <th>Restrict to contests</th>
                    ";
        // line 28
        if (twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["judgehostRestriction"]) || array_key_exists("judgehostRestriction", $context) ? $context["judgehostRestriction"] : (function () { throw new RuntimeError('Variable "judgehostRestriction" does not exist.', 28, $this->source); })()), "contests", [], "any", false, false, false, 28))) {
            // line 29
            echo "                        <td class=\"nodata\">none</td>
                    ";
        } else {
            // line 31
            echo "                        <td>
                            ";
            // line 32
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["judgehostRestriction"]) || array_key_exists("judgehostRestriction", $context) ? $context["judgehostRestriction"] : (function () { throw new RuntimeError('Variable "judgehostRestriction" does not exist.', 32, $this->source); })()), "contests", [], "any", false, false, false, 32));
            foreach ($context['_seq'] as $context["_key"] => $context["contest"]) {
                // line 33
                echo "                                ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["contests"]) || array_key_exists("contests", $context) ? $context["contests"] : (function () { throw new RuntimeError('Variable "contests" does not exist.', 33, $this->source); })()), $context["contest"], [], "array", false, false, false, 33), "name", [], "any", false, false, false, 33), "html", null, true);
                echo " (";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["contests"]) || array_key_exists("contests", $context) ? $context["contests"] : (function () { throw new RuntimeError('Variable "contests" does not exist.', 33, $this->source); })()), $context["contest"], [], "array", false, false, false, 33), "shortname", [], "any", false, false, false, 33), "html", null, true);
                echo " - c";
                echo twig_escape_filter($this->env, $context["contest"], "html", null, true);
                echo ")<br/>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['contest'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 35
            echo "                        </td>
                    ";
        }
        // line 37
        echo "                </tr>
                <tr>
                    <th>Restrict to problems</th>
                    ";
        // line 40
        if (twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["judgehostRestriction"]) || array_key_exists("judgehostRestriction", $context) ? $context["judgehostRestriction"] : (function () { throw new RuntimeError('Variable "judgehostRestriction" does not exist.', 40, $this->source); })()), "problems", [], "any", false, false, false, 40))) {
            // line 41
            echo "                        <td class=\"nodata\">none</td>
                    ";
        } else {
            // line 43
            echo "                        <td>
                            ";
            // line 44
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["judgehostRestriction"]) || array_key_exists("judgehostRestriction", $context) ? $context["judgehostRestriction"] : (function () { throw new RuntimeError('Variable "judgehostRestriction" does not exist.', 44, $this->source); })()), "problems", [], "any", false, false, false, 44));
            foreach ($context['_seq'] as $context["_key"] => $context["problem"]) {
                // line 45
                echo "                                ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["problems"]) || array_key_exists("problems", $context) ? $context["problems"] : (function () { throw new RuntimeError('Variable "problems" does not exist.', 45, $this->source); })()), $context["problem"], [], "array", false, false, false, 45), "name", [], "any", false, false, false, 45), "html", null, true);
                echo " (p";
                echo twig_escape_filter($this->env, $context["problem"], "html", null, true);
                echo ")<br/>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['problem'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 47
            echo "                        </td>
                    ";
        }
        // line 49
        echo "                </tr>
                <tr>
                    <th>Restrict to languages</th>
                    ";
        // line 52
        if (twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["judgehostRestriction"]) || array_key_exists("judgehostRestriction", $context) ? $context["judgehostRestriction"] : (function () { throw new RuntimeError('Variable "judgehostRestriction" does not exist.', 52, $this->source); })()), "languages", [], "any", false, false, false, 52))) {
            // line 53
            echo "                        <td class=\"nodata\">none</td>
                    ";
        } else {
            // line 55
            echo "                        <td>
                            ";
            // line 56
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["judgehostRestriction"]) || array_key_exists("judgehostRestriction", $context) ? $context["judgehostRestriction"] : (function () { throw new RuntimeError('Variable "judgehostRestriction" does not exist.', 56, $this->source); })()), "languages", [], "any", false, false, false, 56));
            foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
                // line 57
                echo "                                ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["languages"]) || array_key_exists("languages", $context) ? $context["languages"] : (function () { throw new RuntimeError('Variable "languages" does not exist.', 57, $this->source); })()), $context["language"], [], "array", false, false, false, 57), "name", [], "any", false, false, false, 57), "html", null, true);
                echo " (";
                echo twig_escape_filter($this->env, $context["language"], "html", null, true);
                echo ")<br/>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 59
            echo "                        </td>
                    ";
        }
        // line 61
        echo "                </tr>
                <tr>
                    <th>Rejudge by same judgehost</th>
                    <td>";
        // line 64
        echo twig_escape_filter($this->env, $this->extensions['App\Twig\TwigExtension']->printYesNo(twig_get_attribute($this->env, $this->source, (isset($context["judgehostRestriction"]) || array_key_exists("judgehostRestriction", $context) ? $context["judgehostRestriction"] : (function () { throw new RuntimeError('Variable "judgehostRestriction" does not exist.', 64, $this->source); })()), "rejudgeOwn", [], "any", false, false, false, 64)), "html", null, true);
        echo "</td>
                </tr>
            </table>
        </div>
    </div>

    <div class=\"mb-4\">";
        // line 71
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 72
            echo $this->extensions['App\Twig\TwigExtension']->button($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_judgehost_restriction_edit", ["restrictionId" => twig_get_attribute($this->env, $this->source, (isset($context["judgehostRestriction"]) || array_key_exists("judgehostRestriction", $context) ? $context["judgehostRestriction"] : (function () { throw new RuntimeError('Variable "judgehostRestriction" does not exist.', 72, $this->source); })()), "restrictionid", [], "any", false, false, false, 72)]), "Edit", "primary", "edit");
            echo "
            ";
            // line 73
            echo $this->extensions['App\Twig\TwigExtension']->button($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_judgehost_restriction_delete", ["restrictionId" => twig_get_attribute($this->env, $this->source, (isset($context["judgehostRestriction"]) || array_key_exists("judgehostRestriction", $context) ? $context["judgehostRestriction"] : (function () { throw new RuntimeError('Variable "judgehostRestriction" does not exist.', 73, $this->source); })()), "restrictionid", [], "any", false, false, false, 73)]), "Delete", "danger", "trash-alt", true);
            echo "
        ";
        }
        // line 75
        echo "    </div>

    <h2>Judgehosts having restriction ";
        // line 77
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["judgehostRestriction"]) || array_key_exists("judgehostRestriction", $context) ? $context["judgehostRestriction"] : (function () { throw new RuntimeError('Variable "judgehostRestriction" does not exist.', 77, $this->source); })()), "name", [], "any", false, false, false, 77), "html", null, true);
        echo "</h2>
    ";
        // line 78
        if (twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["judgehostRestriction"]) || array_key_exists("judgehostRestriction", $context) ? $context["judgehostRestriction"] : (function () { throw new RuntimeError('Variable "judgehostRestriction" does not exist.', 78, $this->source); })()), "judgehosts", [], "any", false, false, false, 78))) {
            // line 79
            echo "        <p class=\"nodata\">no judgehosts</p>
    ";
        } else {
            // line 81
            echo "        <div class=\"row\">
            <div class=\"col-lg-6\">
                <table class=\"data-table table table-sm table-striped\">
                    <thead>
                    <tr>
                        <th>hostname</th>
                        <th>active</th>
                    </tr>
                    </thead>
                    <tbody>
                    ";
            // line 91
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["judgehostRestriction"]) || array_key_exists("judgehostRestriction", $context) ? $context["judgehostRestriction"] : (function () { throw new RuntimeError('Variable "judgehostRestriction" does not exist.', 91, $this->source); })()), "judgehosts", [], "any", false, false, false, 91));
            foreach ($context['_seq'] as $context["_key"] => $context["judgehost"]) {
                // line 92
                echo "                        <tr>
                            <td ";
                // line 93
                if ( !twig_get_attribute($this->env, $this->source, $context["judgehost"], "active", [], "any", false, false, false, 93)) {
                    echo "class=\"disabled\"";
                }
                echo ">
                                <a href=\"";
                // line 94
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_judgehost", ["hostname" => twig_get_attribute($this->env, $this->source, $context["judgehost"], "hostname", [], "any", false, false, false, 94)]), "html", null, true);
                echo "\">
                                    ";
                // line 95
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["judgehost"], "hostname", [], "any", false, false, false, 95), "html", null, true);
                echo "
                                </a>
                            </td>
                            <td ";
                // line 98
                if ( !twig_get_attribute($this->env, $this->source, $context["judgehost"], "active", [], "any", false, false, false, 98)) {
                    echo "class=\"disabled\"";
                }
                echo ">
                                <a href=\"";
                // line 99
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_judgehost", ["hostname" => twig_get_attribute($this->env, $this->source, $context["judgehost"], "hostname", [], "any", false, false, false, 99)]), "html", null, true);
                echo "\">
                                    ";
                // line 100
                echo twig_escape_filter($this->env, $this->extensions['App\Twig\TwigExtension']->printYesNo(twig_get_attribute($this->env, $this->source, $context["judgehost"], "active", [], "any", false, false, false, 100)), "html", null, true);
                echo "
                                </a>
                            </td>
                        </tr>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['judgehost'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 105
            echo "                    </tbody>
                </table>
            </div>
        </div>
    ";
        }
        // line 110
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "jury/judgehost_restriction.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  347 => 110,  340 => 105,  329 => 100,  325 => 99,  319 => 98,  313 => 95,  309 => 94,  303 => 93,  300 => 92,  296 => 91,  284 => 81,  280 => 79,  278 => 78,  274 => 77,  270 => 75,  265 => 73,  261 => 72,  259 => 71,  250 => 64,  245 => 61,  241 => 59,  230 => 57,  226 => 56,  223 => 55,  219 => 53,  217 => 52,  212 => 49,  208 => 47,  197 => 45,  193 => 44,  190 => 43,  186 => 41,  184 => 40,  179 => 37,  175 => 35,  162 => 33,  158 => 32,  155 => 31,  151 => 29,  149 => 28,  142 => 24,  135 => 20,  125 => 13,  122 => 12,  112 => 11,  100 => 8,  95 => 7,  85 => 6,  63 => 4,  52 => 1,  50 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"jury/base.html.twig\" %}
{% import \"jury/jury_macros.twig\" as macros %}

{% block title %}Judgehost restriction {{ judgehostRestriction.name }} - {{ parent() }}{% endblock %}

{% block extrahead %}
    {{ parent() }}
    {{ macros.table_extrahead() }}
{% endblock %}

{% block content %}

    <h1>Judgehost restriction {{ judgehostRestriction.name }}</h1>

    <div class=\"row\">
        <div class=\"col-lg-6\">
            <table class=\"table table-sm table-striped\">
                <tr>
                    <th>ID</th>
                    <td>{{ judgehostRestriction.restrictionid }}</td>
                </tr>
                <tr>
                    <th>Name</th>
                    <td>{{ judgehostRestriction.name }}</td>
                </tr>
                <tr>
                    <th>Restrict to contests</th>
                    {% if judgehostRestriction.contests is empty %}
                        <td class=\"nodata\">none</td>
                    {% else %}
                        <td>
                            {% for contest in judgehostRestriction.contests %}
                                {{ contests[contest].name }} ({{ contests[contest].shortname }} - c{{ contest }})<br/>
                            {% endfor %}
                        </td>
                    {% endif %}
                </tr>
                <tr>
                    <th>Restrict to problems</th>
                    {% if judgehostRestriction.problems is empty %}
                        <td class=\"nodata\">none</td>
                    {% else %}
                        <td>
                            {% for problem in judgehostRestriction.problems %}
                                {{ problems[problem].name }} (p{{ problem }})<br/>
                            {% endfor %}
                        </td>
                    {% endif %}
                </tr>
                <tr>
                    <th>Restrict to languages</th>
                    {% if judgehostRestriction.languages is empty %}
                        <td class=\"nodata\">none</td>
                    {% else %}
                        <td>
                            {% for language in judgehostRestriction.languages %}
                                {{ languages[language].name }} ({{ language }})<br/>
                            {% endfor %}
                        </td>
                    {% endif %}
                </tr>
                <tr>
                    <th>Rejudge by same judgehost</th>
                    <td>{{ judgehostRestriction.rejudgeOwn | printYesNo }}</td>
                </tr>
            </table>
        </div>
    </div>

    <div class=\"mb-4\">
        {%- if is_granted('ROLE_ADMIN') -%}
            {{ button(path('jury_judgehost_restriction_edit', {'restrictionId': judgehostRestriction.restrictionid}), 'Edit', 'primary', 'edit') }}
            {{ button(path('jury_judgehost_restriction_delete', {'restrictionId': judgehostRestriction.restrictionid}), 'Delete', 'danger', 'trash-alt', true) }}
        {% endif %}
    </div>

    <h2>Judgehosts having restriction {{ judgehostRestriction.name }}</h2>
    {% if judgehostRestriction.judgehosts is empty %}
        <p class=\"nodata\">no judgehosts</p>
    {% else %}
        <div class=\"row\">
            <div class=\"col-lg-6\">
                <table class=\"data-table table table-sm table-striped\">
                    <thead>
                    <tr>
                        <th>hostname</th>
                        <th>active</th>
                    </tr>
                    </thead>
                    <tbody>
                    {% for judgehost in judgehostRestriction.judgehosts %}
                        <tr>
                            <td {% if not judgehost.active %}class=\"disabled\"{% endif %}>
                                <a href=\"{{ path('jury_judgehost', {'hostname': judgehost.hostname}) }}\">
                                    {{ judgehost.hostname }}
                                </a>
                            </td>
                            <td {% if not judgehost.active %}class=\"disabled\"{% endif %}>
                                <a href=\"{{ path('jury_judgehost', {'hostname': judgehost.hostname}) }}\">
                                    {{ judgehost.active | printYesNo }}
                                </a>
                            </td>
                        </tr>
                    {% endfor %}
                    </tbody>
                </table>
            </div>
        </div>
    {% endif %}

{% endblock %}
", "jury/judgehost_restriction.html.twig", "/opt/domjudge/domserver/webapp/templates/jury/judgehost_restriction.html.twig");
    }
}
