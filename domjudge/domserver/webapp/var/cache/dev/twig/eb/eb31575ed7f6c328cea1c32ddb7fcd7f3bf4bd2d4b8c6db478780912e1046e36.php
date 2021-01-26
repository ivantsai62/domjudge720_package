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

/* team/partials/clarification_list.html.twig */
class __TwigTemplate_5badbd56aae150a7ba557cdf20de09391f032a83ac00667d87ad7c6ca5d4ecdc extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "team/partials/clarification_list.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "team/partials/clarification_list.html.twig"));

        // line 1
        echo "<div class=\"table-wrapper\">
    <table class=\"data-table table table-striped table-hover table-sm\" style=\"width:100%;\">
        <thead class=\"thead-light\">
        <tr>
            <th scope=\"col\">time</th>
            <th scope=\"col\">from</th>
            <th scope=\"col\">to</th>
            <th scope=\"col\">subject</th>
            <th scope=\"col\">text</th>
        </tr>
        </thead>
        <tbody>";
        // line 13
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["clarifications"]) || array_key_exists("clarifications", $context) ? $context["clarifications"] : (function () { throw new RuntimeError('Variable "clarifications" does not exist.', 13, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["clarification"]) {
            // line 14
            $context["link"] = $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("team_clarification", ["clarId" => twig_get_attribute($this->env, $this->source, $context["clarification"], "clarid", [], "any", false, false, false, 14)]);
            // line 15
            echo "
            <tr class=\"";
            // line 16
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["team"]) || array_key_exists("team", $context) ? $context["team"] : (function () { throw new RuntimeError('Variable "team" does not exist.', 16, $this->source); })()), "unreadClarifications", [], "any", false, false, false, 16), "contains", [0 => $context["clarification"]], "method", false, false, false, 16)) {
                echo "unseen";
            }
            echo "\">
                <td>
                    <a data-ajax-modal data-ajax-modal-after=\"markSeen\" href=\"";
            // line 18
            echo twig_escape_filter($this->env, (isset($context["link"]) || array_key_exists("link", $context) ? $context["link"] : (function () { throw new RuntimeError('Variable "link" does not exist.', 18, $this->source); })()), "html", null, true);
            echo "\">
                        ";
            // line 19
            echo twig_escape_filter($this->env, $this->extensions['App\Twig\TwigExtension']->printtime(twig_get_attribute($this->env, $this->source, $context["clarification"], "submittime", [], "any", false, false, false, 19), null, twig_get_attribute($this->env, $this->source, $context["clarification"], "contest", [], "any", false, false, false, 19)), "html", null, true);
            echo "
                    </a>
                </td>";
            // line 22
            if ((null === twig_get_attribute($this->env, $this->source, $context["clarification"], "sender", [], "any", false, false, false, 22))) {
                // line 23
                $context["sender"] = "Jury";
                // line 24
                if ((null === twig_get_attribute($this->env, $this->source, $context["clarification"], "recipient", [], "any", false, false, false, 24))) {
                    // line 25
                    $context["recipient"] = "All";
                } else {
                    // line 27
                    $context["recipient"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["clarification"], "recipient", [], "any", false, false, false, 27), "name", [], "any", false, false, false, 27);
                }
            } else {
                // line 30
                $context["recipient"] = "Jury";
                // line 31
                $context["sender"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["clarification"], "sender", [], "any", false, false, false, 31), "name", [], "any", false, false, false, 31);
            }
            // line 33
            echo "
                <td>
                    <a data-ajax-modal data-ajax-modal-after=\"markSeen\" href=\"";
            // line 35
            echo twig_escape_filter($this->env, (isset($context["link"]) || array_key_exists("link", $context) ? $context["link"] : (function () { throw new RuntimeError('Variable "link" does not exist.', 35, $this->source); })()), "html", null, true);
            echo "\" title=\"";
            echo twig_escape_filter($this->env, (isset($context["sender"]) || array_key_exists("sender", $context) ? $context["sender"] : (function () { throw new RuntimeError('Variable "sender" does not exist.', 35, $this->source); })()), "html", null, true);
            echo "\">
                        ";
            // line 36
            echo twig_escape_filter($this->env, twig_truncate_filter($this->env, (isset($context["sender"]) || array_key_exists("sender", $context) ? $context["sender"] : (function () { throw new RuntimeError('Variable "sender" does not exist.', 36, $this->source); })()), 30), "html", null, true);
            echo "
                    </a>
                </td>
                <td>
                    <a data-ajax-modal data-ajax-modal-after=\"markSeen\" href=\"";
            // line 40
            echo twig_escape_filter($this->env, (isset($context["link"]) || array_key_exists("link", $context) ? $context["link"] : (function () { throw new RuntimeError('Variable "link" does not exist.', 40, $this->source); })()), "html", null, true);
            echo "\" title=\"";
            echo twig_escape_filter($this->env, (isset($context["recipient"]) || array_key_exists("recipient", $context) ? $context["recipient"] : (function () { throw new RuntimeError('Variable "recipient" does not exist.', 40, $this->source); })()), "html", null, true);
            echo "\">
                        ";
            // line 41
            echo twig_escape_filter($this->env, twig_truncate_filter($this->env, (isset($context["recipient"]) || array_key_exists("recipient", $context) ? $context["recipient"] : (function () { throw new RuntimeError('Variable "recipient" does not exist.', 41, $this->source); })()), 30), "html", null, true);
            echo "
                    </a>
                </td>
                <td>
                    <a data-ajax-modal data-ajax-modal-after=\"markSeen\" href=\"";
            // line 45
            echo twig_escape_filter($this->env, (isset($context["link"]) || array_key_exists("link", $context) ? $context["link"] : (function () { throw new RuntimeError('Variable "link" does not exist.', 45, $this->source); })()), "html", null, true);
            echo "\">";
            // line 46
            if (twig_get_attribute($this->env, $this->source, $context["clarification"], "problem", [], "any", false, false, false, 46)) {
                // line 47
                echo "problem ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["clarification"], "problem", [], "any", false, false, false, 47), "contestProblems", [], "any", false, false, false, 47), "first", [], "any", false, false, false, 47), "shortname", [], "any", false, false, false, 47), "html", null, true);
            } elseif (twig_get_attribute($this->env, $this->source,             // line 48
$context["clarification"], "category", [], "any", false, false, false, 48)) {
                // line 49
                echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["categories"] ?? null), twig_get_attribute($this->env, $this->source, $context["clarification"], "category", [], "any", false, false, false, 49), [], "array", true, true, false, 49)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["categories"] ?? null), twig_get_attribute($this->env, $this->source, $context["clarification"], "category", [], "any", false, false, false, 49), [], "array", false, false, false, 49), "general")) : ("general")), "html", null, true);
            } else {
                // line 51
                echo "general";
            }
            // line 53
            echo "</a>
                </td>

                <td>
                    <a data-ajax-modal data-ajax-modal-after=\"markSeen\" href=\"";
            // line 57
            echo twig_escape_filter($this->env, (isset($context["link"]) || array_key_exists("link", $context) ? $context["link"] : (function () { throw new RuntimeError('Variable "link" does not exist.', 57, $this->source); })()), "html", null, true);
            echo "\">
                        ";
            // line 58
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["clarification"], "summary", [], "any", false, false, false, 58), "html", null, true);
            echo "
                    </a>
                </td>
            </tr>";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['clarification'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 63
        echo "
        </tbody>
    </table>
</div>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "team/partials/clarification_list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  165 => 63,  155 => 58,  151 => 57,  145 => 53,  142 => 51,  139 => 49,  137 => 48,  134 => 47,  132 => 46,  129 => 45,  122 => 41,  116 => 40,  109 => 36,  103 => 35,  99 => 33,  96 => 31,  94 => 30,  90 => 27,  87 => 25,  85 => 24,  83 => 23,  81 => 22,  76 => 19,  72 => 18,  65 => 16,  62 => 15,  60 => 14,  56 => 13,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"table-wrapper\">
    <table class=\"data-table table table-striped table-hover table-sm\" style=\"width:100%;\">
        <thead class=\"thead-light\">
        <tr>
            <th scope=\"col\">time</th>
            <th scope=\"col\">from</th>
            <th scope=\"col\">to</th>
            <th scope=\"col\">subject</th>
            <th scope=\"col\">text</th>
        </tr>
        </thead>
        <tbody>
        {%- for clarification in clarifications %}
            {%- set link = path('team_clarification', {clarId: clarification.clarid}) %}

            <tr class=\"{% if team.unreadClarifications.contains(clarification) %}unseen{% endif %}\">
                <td>
                    <a data-ajax-modal data-ajax-modal-after=\"markSeen\" href=\"{{ link }}\">
                        {{ clarification.submittime | printtime(null, clarification.contest) }}
                    </a>
                </td>
                {%- if clarification.sender is null %}
                    {%- set sender = 'Jury' %}
                    {%- if clarification.recipient is null %}
                        {%- set recipient = 'All' %}
                    {%- else %}
                        {%- set recipient = clarification.recipient.name %}
                    {%- endif %}
                {%- else %}
                    {%- set recipient = 'Jury' %}
                    {%- set sender = clarification.sender.name %}
                {%- endif %}

                <td>
                    <a data-ajax-modal data-ajax-modal-after=\"markSeen\" href=\"{{ link }}\" title=\"{{ sender }}\">
                        {{ sender | truncate(30) }}
                    </a>
                </td>
                <td>
                    <a data-ajax-modal data-ajax-modal-after=\"markSeen\" href=\"{{ link }}\" title=\"{{ recipient }}\">
                        {{ recipient | truncate(30) }}
                    </a>
                </td>
                <td>
                    <a data-ajax-modal data-ajax-modal-after=\"markSeen\" href=\"{{ link }}\">
                        {%- if clarification.problem -%}
                            problem {{ clarification.problem.contestProblems.first.shortname -}}
                        {%- elseif clarification.category -%}
                            {{- categories[clarification.category]|default('general') -}}
                        {%- else -%}
                            general
                        {%- endif -%}
                    </a>
                </td>

                <td>
                    <a data-ajax-modal data-ajax-modal-after=\"markSeen\" href=\"{{ link }}\">
                        {{ clarification.summary }}
                    </a>
                </td>
            </tr>
        {%- endfor %}

        </tbody>
    </table>
</div>
", "team/partials/clarification_list.html.twig", "/opt/domjudge/domserver/webapp/templates/team/partials/clarification_list.html.twig");
    }
}
