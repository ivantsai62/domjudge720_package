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

/* jury/partials/analysis_filter.html.twig */
class __TwigTemplate_8b597d945a6f46826a32934fff1a95ddd23dde5cfee6a5a556b5e67c030d562f extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "jury/partials/analysis_filter.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "jury/partials/analysis_filter.html.twig"));

        // line 1
        echo "Filter:
<div class=\"btn-group btn-group-toggle btn-group-sm mb-3\" data-toggle=\"buttons\">";
        // line 3
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 3, $this->source); })()));
        foreach ($context['_seq'] as $context["key"] => $context["label"]) {
            // line 4
            echo "
        <label class=\"btn btn-secondary ";
            // line 5
            if (($context["key"] == (isset($context["view"]) || array_key_exists("view", $context) ? $context["view"] : (function () { throw new RuntimeError('Variable "view" does not exist.', 5, $this->source); })()))) {
                echo "active";
            }
            echo "\">
            <input type=\"radio\" name=\"viewtype\" autocomplete=\"off\" value=\"";
            // line 6
            echo twig_escape_filter($this->env, $context["key"], "html", null, true);
            echo "\"
                   ";
            // line 7
            if (($context["key"] == (isset($context["view"]) || array_key_exists("view", $context) ? $context["view"] : (function () { throw new RuntimeError('Variable "view" does not exist.', 7, $this->source); })()))) {
                echo "checked";
            }
            echo "> ";
            echo twig_escape_filter($this->env, $context["label"], "html", null, true);
            echo "
        </label>";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['label'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 10
        echo "</div>

<script>
    \$(function () {
        \$('input[name=viewtype]').on('change', function () {
            window.location = '?view=' + \$(this).val();
        });
    });
</script>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "jury/partials/analysis_filter.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  75 => 10,  63 => 7,  59 => 6,  53 => 5,  50 => 4,  46 => 3,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("Filter:
<div class=\"btn-group btn-group-toggle btn-group-sm mb-3\" data-toggle=\"buttons\">
    {%- for key, label in filters %}

        <label class=\"btn btn-secondary {% if key == view %}active{% endif %}\">
            <input type=\"radio\" name=\"viewtype\" autocomplete=\"off\" value=\"{{ key }}\"
                   {% if key == view %}checked{% endif %}> {{ label }}
        </label>
    {%- endfor %}
</div>

<script>
    \$(function () {
        \$('input[name=viewtype]').on('change', function () {
            window.location = '?view=' + \$(this).val();
        });
    });
</script>
", "jury/partials/analysis_filter.html.twig", "/opt/domjudge/domserver/webapp/templates/jury/partials/analysis_filter.html.twig");
    }
}
