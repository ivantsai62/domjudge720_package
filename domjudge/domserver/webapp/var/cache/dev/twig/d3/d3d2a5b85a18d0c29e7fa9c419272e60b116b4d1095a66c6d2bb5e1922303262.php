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

/* jury/partials/submission_diff.html.twig */
class __TwigTemplate_f1ef66fd1ba80f205021485a7f44e2dd04f0cca12545ce6416f0ca1f1978d4c8 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "jury/partials/submission_diff.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "jury/partials/submission_diff.html.twig"));

        // line 1
        if (((twig_length_filter($this->env, (isset($context["files"]) || array_key_exists("files", $context) ? $context["files"] : (function () { throw new RuntimeError('Variable "files" does not exist.', 1, $this->source); })())) > 1) || (twig_length_filter($this->env, (isset($context["oldFiles"]) || array_key_exists("oldFiles", $context) ? $context["oldFiles"] : (function () { throw new RuntimeError('Variable "oldFiles" does not exist.', 1, $this->source); })())) > 1))) {
            // line 2
            echo "
    <table class=\"table table-sm table-striped file-diff-table\">
        <tr>
            <th class=\"diff-add\">Files added</th>
            <td class=\"filename\">";
            // line 6
            echo twig_escape_filter($this->env, twig_join_filter(twig_get_attribute($this->env, $this->source, (isset($context["oldFileStats"]) || array_key_exists("oldFileStats", $context) ? $context["oldFileStats"] : (function () { throw new RuntimeError('Variable "oldFileStats" does not exist.', 6, $this->source); })()), "added", [], "any", false, false, false, 6), ", "), "html", null, true);
            echo "</td>
        </tr>
        <tr>
            <th class=\"diff-del\">Files removed</th>
            <td class=\"filename\">";
            // line 10
            echo twig_escape_filter($this->env, twig_join_filter(twig_get_attribute($this->env, $this->source, (isset($context["oldFileStats"]) || array_key_exists("oldFileStats", $context) ? $context["oldFileStats"] : (function () { throw new RuntimeError('Variable "oldFileStats" does not exist.', 10, $this->source); })()), "removed", [], "any", false, false, false, 10), ", "), "html", null, true);
            echo "</td>
        </tr>
        <tr>
            <th class=\"diff-changed\">Files changed</th>
            <td class=\"filename\">";
            // line 14
            echo twig_escape_filter($this->env, twig_join_filter(twig_get_attribute($this->env, $this->source, (isset($context["oldFileStats"]) || array_key_exists("oldFileStats", $context) ? $context["oldFileStats"] : (function () { throw new RuntimeError('Variable "oldFileStats" does not exist.', 14, $this->source); })()), "changed", [], "any", false, false, false, 14), ", "), "html", null, true);
            echo "</td>
        </tr>
        <tr>
            <th>Files unchanged</th>
            <td class=\"filename\">";
            // line 18
            echo twig_escape_filter($this->env, twig_join_filter(twig_get_attribute($this->env, $this->source, (isset($context["oldFileStats"]) || array_key_exists("oldFileStats", $context) ? $context["oldFileStats"] : (function () { throw new RuntimeError('Variable "oldFileStats" does not exist.', 18, $this->source); })()), "unchanged", [], "any", false, false, false, 18), ", "), "html", null, true);
            echo "</td>
        </tr>
    </table>
";
        }
        // line 22
        echo "<ul class=\"nav nav-tabs source-tab-nav\">";
        // line 23
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["oldFileStats"]) || array_key_exists("oldFileStats", $context) ? $context["oldFileStats"] : (function () { throw new RuntimeError('Variable "oldFileStats" does not exist.', 23, $this->source); })()), "changedfiles", [], "any", false, false, false, 23));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["filePair"]) {
            // line 24
            echo "
        <li class=\"nav-item\">
            <a class=\"nav-link ";
            // line 26
            if (twig_get_attribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 26)) {
                echo "active";
            }
            echo "\" data-toggle=\"tab\"
               href=\"#diff-";
            // line 27
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["filePair"], 1, [], "any", false, false, false, 27), "submitfileid", [], "any", false, false, false, 27), "html", null, true);
            echo "\" role=\"tab\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["filePair"], 0, [], "any", false, false, false, 27), "filename", [], "any", false, false, false, 27), "html", null, true);
            echo "</a>
        </li>";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['filePair'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 30
        echo "
</ul>
<div class=\"tab-content source-tab\">";
        // line 33
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["oldFileStats"]) || array_key_exists("oldFileStats", $context) ? $context["oldFileStats"] : (function () { throw new RuntimeError('Variable "oldFileStats" does not exist.', 33, $this->source); })()), "changedfiles", [], "any", false, false, false, 33));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["filePair"]) {
            // line 34
            echo "
        <div class=\"tab-pane fade ";
            // line 35
            if (twig_get_attribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 35)) {
                echo "show active";
            }
            echo "\" id=\"diff-";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["filePair"], 1, [], "any", false, false, false, 35), "submitfileid", [], "any", false, false, false, 35), "html", null, true);
            echo "\"
             role=\"tabpanel\">
            <pre class=\"output_text\">";
            // line 37
            echo $this->extensions['App\Twig\TwigExtension']->showDiff(twig_get_attribute($this->env, $this->source, $context["filePair"], 0, [], "any", false, false, false, 37), twig_get_attribute($this->env, $this->source, $context["filePair"], 1, [], "any", false, false, false, 37));
            echo "</pre>
        </div>";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['filePair'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 40
        echo "
</div>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "jury/partials/submission_diff.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  175 => 40,  159 => 37,  150 => 35,  147 => 34,  130 => 33,  126 => 30,  108 => 27,  102 => 26,  98 => 24,  81 => 23,  79 => 22,  72 => 18,  65 => 14,  58 => 10,  51 => 6,  45 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% if files | length > 1 or oldFiles | length > 1 %}

    <table class=\"table table-sm table-striped file-diff-table\">
        <tr>
            <th class=\"diff-add\">Files added</th>
            <td class=\"filename\">{{ oldFileStats.added | join(', ') }}</td>
        </tr>
        <tr>
            <th class=\"diff-del\">Files removed</th>
            <td class=\"filename\">{{ oldFileStats.removed | join(', ') }}</td>
        </tr>
        <tr>
            <th class=\"diff-changed\">Files changed</th>
            <td class=\"filename\">{{ oldFileStats.changed | join(', ') }}</td>
        </tr>
        <tr>
            <th>Files unchanged</th>
            <td class=\"filename\">{{ oldFileStats.unchanged | join(', ') }}</td>
        </tr>
    </table>
{% endif %}
<ul class=\"nav nav-tabs source-tab-nav\">
    {%- for filePair in oldFileStats.changedfiles %}

        <li class=\"nav-item\">
            <a class=\"nav-link {% if loop.first %}active{% endif %}\" data-toggle=\"tab\"
               href=\"#diff-{{ filePair.1.submitfileid }}\" role=\"tab\">{{ filePair.0.filename }}</a>
        </li>
    {%- endfor %}

</ul>
<div class=\"tab-content source-tab\">
    {%- for filePair in oldFileStats.changedfiles %}

        <div class=\"tab-pane fade {% if loop.first %}show active{% endif %}\" id=\"diff-{{ filePair.1.submitfileid }}\"
             role=\"tabpanel\">
            <pre class=\"output_text\">{{ filePair.0 | showDiff(filePair.1) }}</pre>
        </div>
    {%- endfor %}

</div>
", "jury/partials/submission_diff.html.twig", "/opt/domjudge/domserver/webapp/templates/jury/partials/submission_diff.html.twig");
    }
}
