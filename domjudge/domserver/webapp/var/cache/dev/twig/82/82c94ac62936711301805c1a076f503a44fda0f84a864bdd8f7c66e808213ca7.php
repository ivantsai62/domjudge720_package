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

/* jury/partials/shadow_matrix.html.twig */
class __TwigTemplate_cd7449b80e5c31341ae4aa9192c0d6587adbd1d7069a2d8395fc8074b0dcb582 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "jury/partials/shadow_matrix.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "jury/partials/shadow_matrix.html.twig"));

        // line 1
        echo "<div class=\"mt-2\">
    <table class=\"rejudgetable\">
        <tr>
            <th title=\"external vs. local verdicts\">e\\l</th>
            ";
        // line 5
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["verdicts"]) || array_key_exists("verdicts", $context) ? $context["verdicts"] : (function () { throw new RuntimeError('Variable "verdicts" does not exist.', 5, $this->source); })()));
        foreach ($context['_seq'] as $context["verdict"] => $context["abbreviation"]) {
            // line 6
            echo "                ";
            if (twig_get_attribute($this->env, $this->source, ($context["used"] ?? null), $context["verdict"], [], "array", true, true, false, 6)) {
                // line 7
                echo "                    <th title=\"";
                echo twig_escape_filter($this->env, $context["verdict"], "html", null, true);
                echo " (local)\">";
                echo twig_escape_filter($this->env, $context["abbreviation"], "html", null, true);
                echo "</th>
                ";
            }
            // line 9
            echo "            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['verdict'], $context['abbreviation'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 10
        echo "        </tr>

        ";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["verdictTable"]) || array_key_exists("verdictTable", $context) ? $context["verdictTable"] : (function () { throw new RuntimeError('Variable "verdictTable" does not exist.', 12, $this->source); })()));
        foreach ($context['_seq'] as $context["externalVerdict"] => $context["localVerdicts"]) {
            // line 13
            echo "            ";
            if (twig_get_attribute($this->env, $this->source, ($context["used"] ?? null), $context["externalVerdict"], [], "array", true, true, false, 13)) {
                // line 14
                echo "                <tr>
                    <th title=\"";
                // line 15
                echo twig_escape_filter($this->env, $context["externalVerdict"], "html", null, true);
                echo " (external)\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["verdicts"]) || array_key_exists("verdicts", $context) ? $context["verdicts"] : (function () { throw new RuntimeError('Variable "verdicts" does not exist.', 15, $this->source); })()), $context["externalVerdict"], [], "array", false, false, false, 15), "html", null, true);
                echo "</th>
                    ";
                // line 16
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["localVerdicts"]);
                foreach ($context['_seq'] as $context["localVerdict"] => $context["submitIds"]) {
                    // line 17
                    echo "                        ";
                    if (twig_get_attribute($this->env, $this->source, ($context["used"] ?? null), $context["localVerdict"], [], "array", true, true, false, 17)) {
                        // line 18
                        echo "                            ";
                        $context["numSubmissions"] = twig_length_filter($this->env, $context["submitIds"]);
                        // line 19
                        echo "                            ";
                        $context["link"] = null;
                        // line 20
                        echo "                            ";
                        if (($context["externalVerdict"] == $context["localVerdict"])) {
                            // line 21
                            echo "                                ";
                            $context["class"] = "identical";
                            // line 22
                            echo "                            ";
                        } elseif (((isset($context["numSubmissions"]) || array_key_exists("numSubmissions", $context) ? $context["numSubmissions"] : (function () { throw new RuntimeError('Variable "numSubmissions" does not exist.', 22, $this->source); })()) == 0)) {
                            // line 23
                            echo "                                ";
                            $context["class"] = "zero";
                            // line 24
                            echo "                            ";
                        } else {
                            // line 25
                            echo "                                ";
                            $context["class"] = "changed";
                            // line 26
                            echo "                                ";
                            $context["link"] = $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_shadow_differences", ["view" => "all", "external" => $context["externalVerdict"], "local" => $context["localVerdict"]]);
                            // line 27
                            echo "                            ";
                        }
                        // line 28
                        echo "                            <td class=\"";
                        echo twig_escape_filter($this->env, (isset($context["class"]) || array_key_exists("class", $context) ? $context["class"] : (function () { throw new RuntimeError('Variable "class" does not exist.', 28, $this->source); })()), "html", null, true);
                        echo "\">
                                ";
                        // line 29
                        if ( !(null === (isset($context["link"]) || array_key_exists("link", $context) ? $context["link"] : (function () { throw new RuntimeError('Variable "link" does not exist.', 29, $this->source); })()))) {
                            // line 30
                            echo "                                    <a href=\"";
                            echo twig_escape_filter($this->env, (isset($context["link"]) || array_key_exists("link", $context) ? $context["link"] : (function () { throw new RuntimeError('Variable "link" does not exist.', 30, $this->source); })()), "html", null, true);
                            echo "\">";
                            echo twig_escape_filter($this->env, (isset($context["numSubmissions"]) || array_key_exists("numSubmissions", $context) ? $context["numSubmissions"] : (function () { throw new RuntimeError('Variable "numSubmissions" does not exist.', 30, $this->source); })()), "html", null, true);
                            echo "</a>
                                ";
                        } else {
                            // line 32
                            echo "                                    ";
                            echo twig_escape_filter($this->env, (isset($context["numSubmissions"]) || array_key_exists("numSubmissions", $context) ? $context["numSubmissions"] : (function () { throw new RuntimeError('Variable "numSubmissions" does not exist.', 32, $this->source); })()), "html", null, true);
                            echo "
                                ";
                        }
                        // line 34
                        echo "                            </td>
                        ";
                    }
                    // line 36
                    echo "                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['localVerdict'], $context['submitIds'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 37
                echo "                </tr>
            ";
            }
            // line 39
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['externalVerdict'], $context['localVerdicts'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 40
        echo "    </table>
</div>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "jury/partials/shadow_matrix.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  168 => 40,  162 => 39,  158 => 37,  152 => 36,  148 => 34,  142 => 32,  134 => 30,  132 => 29,  127 => 28,  124 => 27,  121 => 26,  118 => 25,  115 => 24,  112 => 23,  109 => 22,  106 => 21,  103 => 20,  100 => 19,  97 => 18,  94 => 17,  90 => 16,  84 => 15,  81 => 14,  78 => 13,  74 => 12,  70 => 10,  64 => 9,  56 => 7,  53 => 6,  49 => 5,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"mt-2\">
    <table class=\"rejudgetable\">
        <tr>
            <th title=\"external vs. local verdicts\">e\\l</th>
            {% for verdict, abbreviation in verdicts %}
                {% if used[verdict] is defined %}
                    <th title=\"{{ verdict }} (local)\">{{ abbreviation }}</th>
                {% endif %}
            {% endfor %}
        </tr>

        {% for externalVerdict, localVerdicts in verdictTable %}
            {% if used[externalVerdict] is defined %}
                <tr>
                    <th title=\"{{ externalVerdict }} (external)\">{{ verdicts[externalVerdict] }}</th>
                    {% for localVerdict, submitIds in localVerdicts %}
                        {% if used[localVerdict] is defined %}
                            {% set numSubmissions = submitIds | length %}
                            {% set link = null %}
                            {% if externalVerdict == localVerdict %}
                                {% set class = 'identical' %}
                            {% elseif numSubmissions == 0 %}
                                {% set class = 'zero' %}
                            {% else %}
                                {% set class = 'changed' %}
                                {% set link = path('jury_shadow_differences', {view: 'all', external: externalVerdict, local: localVerdict}) %}
                            {% endif %}
                            <td class=\"{{ class }}\">
                                {% if link is not null %}
                                    <a href=\"{{ link }}\">{{ numSubmissions }}</a>
                                {% else %}
                                    {{ numSubmissions }}
                                {% endif %}
                            </td>
                        {% endif %}
                    {% endfor %}
                </tr>
            {% endif %}
        {% endfor %}
    </table>
</div>
", "jury/partials/shadow_matrix.html.twig", "/opt/domjudge/domserver/webapp/templates/jury/partials/shadow_matrix.html.twig");
    }
}
