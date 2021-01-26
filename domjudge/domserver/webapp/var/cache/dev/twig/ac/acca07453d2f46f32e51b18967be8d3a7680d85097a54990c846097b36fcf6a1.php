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

/* jury/partials/balloon_list.html.twig */
class __TwigTemplate_f427f6fa6200ebfbef7b362bebbadf8e7a2399b8806684326792a4660dd2946c extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "jury/partials/balloon_list.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "jury/partials/balloon_list.html.twig"));

        // line 3
        echo "
";
        // line 4
        if (twig_test_empty((isset($context["balloons"]) || array_key_exists("balloons", $context) ? $context["balloons"] : (function () { throw new RuntimeError('Variable "balloons" does not exist.', 4, $this->source); })()))) {
            // line 5
            echo "    <div class=\"alert alert-warning\">No balloons</div>
";
        } else {
            // line 7
            echo "    <table class=\"data-table table table-hover table-striped table-sm balloons-table\" style=\"width:auto\">
        <thead class=\"thead-light\">
        <tr>
            <th scope=\"col\">&nbsp;</th>
            <th scope=\"col\">ID</th>
            <th scope=\"col\">time</th>
            <th scope=\"col\">solved</th>
            <th scope=\"col\">team</th>
            <th scope=\"col\">affiliation</th>
            <th scope=\"col\">location</th>
            <th scope=\"col\">category</th>
            <th scope=\"col\">total</th>
            <th scope=\"col\">awards</th>
            <th scope=\"col\"></th>
        </tr>
        </thead>
        <tbody>";
            // line 24
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["balloons"]) || array_key_exists("balloons", $context) ? $context["balloons"] : (function () { throw new RuntimeError('Variable "balloons" does not exist.', 24, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["balloon"]) {
                // line 25
                echo "            <tr class=\"";
                if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["balloon"], "data", [], "any", false, false, false, 25), "done", [], "any", false, false, false, 25)) {
                    echo "disabled";
                }
                echo "\"
                data-affiliation-id=\"";
                // line 26
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["balloon"], "data", [], "any", false, false, false, 26), "affiliation", [], "any", false, false, false, 26), "html", null, true);
                echo "\"
                data-location-str=\"";
                // line 27
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["balloon"], "data", [], "any", false, false, false, 27), "location", [], "any", false, false, false, 27), "html", null, true);
                echo "\">
                <td>";
                // line 29
                if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["balloon"], "data", [], "any", false, false, false, 29), "done", [], "any", false, false, false, 29)) {
                    // line 30
                    echo "<i class=\"far fa-check-circle\"></i>";
                } else {
                    // line 32
                    echo "<i class=\"far fa-hourglass\"></i>";
                }
                // line 34
                echo "<td>";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["balloon"], "data", [], "any", false, false, false, 34), "balloonid", [], "any", false, false, false, 34), "html", null, true);
                echo "</td>
                <td>";
                // line 35
                echo twig_escape_filter($this->env, $this->extensions['App\Twig\TwigExtension']->printtime(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["balloon"], "data", [], "any", false, false, false, 35), "time", [], "any", false, false, false, 35)), "html", null, true);
                echo "</td>
                <td><i style=\"color: ";
                // line 36
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["balloon"], "data", [], "any", false, false, false, 36), "color", [], "any", false, false, false, 36), "html", null, true);
                echo "\" class=\"fas fa-golf-ball\"></i> ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["balloon"], "data", [], "any", false, false, false, 36), "problem", [], "any", false, false, false, 36), "html", null, true);
                echo "</td>
                <td>";
                // line 37
                echo twig_escape_filter($this->env, twig_truncate_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["balloon"], "data", [], "any", false, false, false, 37), "team", [], "any", false, false, false, 37), 30), "html", null, true);
                echo "</td>
                <td>";
                // line 38
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["balloon"], "data", [], "any", false, false, false, 38), "affiliation", [], "any", false, false, false, 38), "html", null, true);
                echo "</td>
                <td>";
                // line 39
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["balloon"], "data", [], "any", false, false, false, 39), "location", [], "any", false, false, false, 39), "html", null, true);
                echo "</td>
                <td>";
                // line 40
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["balloon"], "data", [], "any", false, false, false, 40), "category", [], "any", false, false, false, 40), "html", null, true);
                echo "</td>
                <td>";
                // line 42
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["balloon"], "data", [], "any", false, false, false, 42), "total", [], "any", false, false, false, 42));
                foreach ($context['_seq'] as $context["_key"] => $context["totalballoon"]) {
                    // line 43
                    echo "<i style=\"color: ";
                    echo twig_escape_filter($this->env, $context["totalballoon"], "html", null, true);
                    echo "\" class=\"fas fa-golf-ball\"></i>";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['totalballoon'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 45
                echo "</td>
                <td>";
                // line 46
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["balloon"], "data", [], "any", false, false, false, 46), "awards", [], "any", false, false, false, 46), "html", null, true);
                echo "</td>
                <td>";
                // line 48
                if ( !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["balloon"], "data", [], "any", false, false, false, 48), "done", [], "any", false, false, false, 48)) {
                    // line 49
                    $context["link"] = $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_balloons_setdone", ["balloonId" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["balloon"], "data", [], "any", false, false, false, 49), "balloonid", [], "any", false, false, false, 49)]);
                    // line 50
                    echo "                    <a href=\"";
                    echo twig_escape_filter($this->env, (isset($context["link"]) || array_key_exists("link", $context) ? $context["link"] : (function () { throw new RuntimeError('Variable "link" does not exist.', 50, $this->source); })()), "html", null, true);
                    echo "\" title=\"mark balloon as done\">
                    <i class=\"fas fa-running\"></i>
                    </a>
                </td>";
                }
                // line 55
                echo "</tr>";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['balloon'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 57
            echo "
        </tbody>
    </table>

";
        }
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "jury/partials/balloon_list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  165 => 57,  159 => 55,  151 => 50,  149 => 49,  147 => 48,  143 => 46,  140 => 45,  132 => 43,  128 => 42,  124 => 40,  120 => 39,  116 => 38,  112 => 37,  106 => 36,  102 => 35,  97 => 34,  94 => 32,  91 => 30,  89 => 29,  85 => 27,  81 => 26,  74 => 25,  70 => 24,  52 => 7,  48 => 5,  46 => 4,  43 => 3,);
    }

    public function getSourceContext()
    {
        return new Source("{# Render a list of balloons for a jury page #}
{# @var \\App\\Entity\\Balloon balloonfoo #}

{% if balloons is empty %}
    <div class=\"alert alert-warning\">No balloons</div>
{% else %}
    <table class=\"data-table table table-hover table-striped table-sm balloons-table\" style=\"width:auto\">
        <thead class=\"thead-light\">
        <tr>
            <th scope=\"col\">&nbsp;</th>
            <th scope=\"col\">ID</th>
            <th scope=\"col\">time</th>
            <th scope=\"col\">solved</th>
            <th scope=\"col\">team</th>
            <th scope=\"col\">affiliation</th>
            <th scope=\"col\">location</th>
            <th scope=\"col\">category</th>
            <th scope=\"col\">total</th>
            <th scope=\"col\">awards</th>
            <th scope=\"col\"></th>
        </tr>
        </thead>
        <tbody>
        {%- for balloon in balloons %}
            <tr class=\"{% if balloon.data.done %}disabled{% endif %}\"
                data-affiliation-id=\"{{ balloon.data.affiliation }}\"
                data-location-str=\"{{ balloon.data.location }}\">
                <td>
                {%- if balloon.data.done -%}
                    <i class=\"far fa-check-circle\"></i>
                {%- else -%}
                    <i class=\"far fa-hourglass\"></i>
                {%- endif -%}
                <td>{{ balloon.data.balloonid }}</td>
                <td>{{ balloon.data.time | printtime }}</td>
                <td><i style=\"color: {{ balloon.data.color }}\" class=\"fas fa-golf-ball\"></i> {{ balloon.data.problem }}</td>
                <td>{{ balloon.data.team | truncate(30) }}</td>
                <td>{{ balloon.data.affiliation }}</td>
                <td>{{ balloon.data.location }}</td>
                <td>{{ balloon.data.category }}</td>
                <td>
                {%- for totalballoon in balloon.data.total -%}
                    <i style=\"color: {{ totalballoon }}\" class=\"fas fa-golf-ball\"></i>
                {%- endfor -%}
                </td>
                <td>{{ balloon.data.awards }}</td>
                <td>
                    {%- if not balloon.data.done -%}
                    {%- set link = path('jury_balloons_setdone', {balloonId: balloon.data.balloonid}) %}
                    <a href=\"{{ link }}\" title=\"mark balloon as done\">
                    <i class=\"fas fa-running\"></i>
                    </a>
                </td>
                {%- endif -%}
            </tr>
        {%- endfor %}

        </tbody>
    </table>

{% endif %}
", "jury/partials/balloon_list.html.twig", "/opt/domjudge/domserver/webapp/templates/jury/partials/balloon_list.html.twig");
    }
}
