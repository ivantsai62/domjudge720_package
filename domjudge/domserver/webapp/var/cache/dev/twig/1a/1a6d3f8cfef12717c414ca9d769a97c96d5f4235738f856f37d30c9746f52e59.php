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

/* jury/partials/judgehost_judgings.html.twig */
class __TwigTemplate_72024fe564bbfce0eb40f9fc7b6d51b77a0e2d28a4efac8b3aaa68547038f899 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "jury/partials/judgehost_judgings.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "jury/partials/judgehost_judgings.html.twig"));

        // line 1
        if ( !(isset($context["judgings"]) || array_key_exists("judgings", $context) ? $context["judgings"] : (function () { throw new RuntimeError('Variable "judgings" does not exist.', 1, $this->source); })())) {
            // line 2
            echo "    <div class=\"alert alert-warning\">No judgings</div>
";
        } else {
            // line 4
            echo "    <table class=\"data-table table table-sm table-striped col-lg-4\">
        <thead>
        <tr>
            <th>ID</th>
            <th>started</th>
            <th>runtime</th>
            <th>result</th>
            <th>valid</th>
            <th>verified</th>
        </tr>
        </thead>
        <tbody>
        ";
            // line 16
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["judgings"]) || array_key_exists("judgings", $context) ? $context["judgings"] : (function () { throw new RuntimeError('Variable "judgings" does not exist.', 16, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["judging"]) {
                // line 17
                echo "            ";
                $context["link"] = $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_submission_by_judging", ["jid" => twig_get_attribute($this->env, $this->source, $context["judging"], "judgingid", [], "any", false, false, false, 17)]);
                // line 18
                echo "            <tr class=\"";
                if ( !twig_get_attribute($this->env, $this->source, $context["judging"], "valid", [], "any", false, false, false, 18)) {
                    echo "disabled";
                }
                echo "\">
                <td><a href=\"";
                // line 19
                echo twig_escape_filter($this->env, (isset($context["link"]) || array_key_exists("link", $context) ? $context["link"] : (function () { throw new RuntimeError('Variable "link" does not exist.', 19, $this->source); })()), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["judging"], "judgingid", [], "any", false, false, false, 19), "html", null, true);
                echo "</a></td>
                <td><a href=\"";
                // line 20
                echo twig_escape_filter($this->env, (isset($context["link"]) || array_key_exists("link", $context) ? $context["link"] : (function () { throw new RuntimeError('Variable "link" does not exist.', 20, $this->source); })()), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->extensions['App\Twig\TwigExtension']->printtime(twig_get_attribute($this->env, $this->source, $context["judging"], "starttime", [], "any", false, false, false, 20)), "html", null, true);
                echo "</a></td>
                <td>
                    <a href=\"";
                // line 22
                echo twig_escape_filter($this->env, (isset($context["link"]) || array_key_exists("link", $context) ? $context["link"] : (function () { throw new RuntimeError('Variable "link" does not exist.', 22, $this->source); })()), "html", null, true);
                echo "\">
                        ";
                // line 23
                if (twig_get_attribute($this->env, $this->source, $context["judging"], "aborted", [], "any", false, false, false, 23)) {
                    // line 24
                    echo "                            [aborted]
                        ";
                } else {
                    // line 26
                    echo "                            ";
                    echo twig_escape_filter($this->env, $this->extensions['App\Twig\TwigExtension']->printtimediff(twig_get_attribute($this->env, $this->source, $context["judging"], "starttime", [], "any", false, false, false, 26), twig_get_attribute($this->env, $this->source, $context["judging"], "endtime", [], "any", false, false, false, 26)), "html", null, true);
                    echo "
                        ";
                }
                // line 28
                echo "                    </a>
                </td>
                <td>
                    <a href=\"";
                // line 31
                echo twig_escape_filter($this->env, (isset($context["link"]) || array_key_exists("link", $context) ? $context["link"] : (function () { throw new RuntimeError('Variable "link" does not exist.', 31, $this->source); })()), "html", null, true);
                echo "\">
                        ";
                // line 32
                echo $this->extensions['App\Twig\TwigExtension']->printResult(twig_get_attribute($this->env, $this->source, $context["judging"], "result", [], "any", false, false, false, 32), twig_get_attribute($this->env, $this->source, $context["judging"], "valid", [], "any", false, false, false, 32));
                echo "
                        ";
                // line 33
                if (twig_get_attribute($this->env, $this->source, $context["judging"], "stillBusy", [], "any", false, false, false, 33)) {
                    // line 34
                    echo "                            (&hellip;)
                        ";
                }
                // line 36
                echo "                    </a>
                </td>
                <td><a href=\"";
                // line 38
                echo twig_escape_filter($this->env, (isset($context["link"]) || array_key_exists("link", $context) ? $context["link"] : (function () { throw new RuntimeError('Variable "link" does not exist.', 38, $this->source); })()), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->extensions['App\Twig\TwigExtension']->printYesNo(twig_get_attribute($this->env, $this->source, $context["judging"], "valid", [], "any", false, false, false, 38)), "html", null, true);
                echo "</a></td>
                <td><a href=\"";
                // line 39
                echo twig_escape_filter($this->env, (isset($context["link"]) || array_key_exists("link", $context) ? $context["link"] : (function () { throw new RuntimeError('Variable "link" does not exist.', 39, $this->source); })()), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->extensions['App\Twig\TwigExtension']->printYesNo(twig_get_attribute($this->env, $this->source, $context["judging"], "verified", [], "any", false, false, false, 39)), "html", null, true);
                echo "</a></td>
            </tr>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['judging'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 42
            echo "        </tbody>
    </table>
";
        }
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "jury/partials/judgehost_judgings.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  146 => 42,  135 => 39,  129 => 38,  125 => 36,  121 => 34,  119 => 33,  115 => 32,  111 => 31,  106 => 28,  100 => 26,  96 => 24,  94 => 23,  90 => 22,  83 => 20,  77 => 19,  70 => 18,  67 => 17,  63 => 16,  49 => 4,  45 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% if not judgings %}
    <div class=\"alert alert-warning\">No judgings</div>
{% else %}
    <table class=\"data-table table table-sm table-striped col-lg-4\">
        <thead>
        <tr>
            <th>ID</th>
            <th>started</th>
            <th>runtime</th>
            <th>result</th>
            <th>valid</th>
            <th>verified</th>
        </tr>
        </thead>
        <tbody>
        {% for judging in judgings %}
            {% set link = path('jury_submission_by_judging', {jid: judging.judgingid}) %}
            <tr class=\"{% if not judging.valid %}disabled{% endif %}\">
                <td><a href=\"{{ link }}\">{{ judging.judgingid }}</a></td>
                <td><a href=\"{{ link }}\">{{ judging.starttime | printtime }}</a></td>
                <td>
                    <a href=\"{{ link }}\">
                        {% if judging.aborted %}
                            [aborted]
                        {% else %}
                            {{ judging.starttime | printtimediff(judging.endtime) }}
                        {% endif %}
                    </a>
                </td>
                <td>
                    <a href=\"{{ link }}\">
                        {{ judging.result | printResult(judging.valid) }}
                        {% if judging.stillBusy %}
                            (&hellip;)
                        {% endif %}
                    </a>
                </td>
                <td><a href=\"{{ link }}\">{{ judging.valid | printYesNo }}</a></td>
                <td><a href=\"{{ link }}\">{{ judging.verified | printYesNo }}</a></td>
            </tr>
        {% endfor %}
        </tbody>
    </table>
{% endif %}
", "jury/partials/judgehost_judgings.html.twig", "/opt/domjudge/domserver/webapp/templates/jury/partials/judgehost_judgings.html.twig");
    }
}
