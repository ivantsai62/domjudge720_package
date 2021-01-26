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

/* team/partials/index_content.html.twig */
class __TwigTemplate_2d6caa894e219af505485c95df5423ce2a57a1e9b7523832bee56be04cceadd2 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "team/partials/index_content.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "team/partials/index_content.html.twig"));

        // line 1
        if (twig_test_empty((isset($context["contest"]) || array_key_exists("contest", $context) ? $context["contest"] : (function () { throw new RuntimeError('Variable "contest" does not exist.', 1, $this->source); })()))) {
            // line 2
            echo "    <h1 id=\"teamwelcome\" class=\"text-center\">Welcome team <span id=\"teamwelcometeam\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["team"]) || array_key_exists("team", $context) ? $context["team"] : (function () { throw new RuntimeError('Variable "team" does not exist.', 2, $this->source); })()), "name", [], "any", false, false, false, 2), "html", null, true);
            echo "</span>!</h1>
    <h2 id=\"contestnotstarted\" class=\"text-center\">There's no active contest for you (yet).</h2>
";
        } elseif ( !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 4
(isset($context["contest"]) || array_key_exists("contest", $context) ? $context["contest"] : (function () { throw new RuntimeError('Variable "contest" does not exist.', 4, $this->source); })()), "freezeData", [], "any", false, false, false, 4), "started", [], "any", false, false, false, 4)) {
            // line 5
            echo "    <h1 id=\"teamwelcome\" class=\"text-center\">Welcome team <span id=\"teamwelcometeam\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["team"]) || array_key_exists("team", $context) ? $context["team"] : (function () { throw new RuntimeError('Variable "team" does not exist.', 5, $this->source); })()), "name", [], "any", false, false, false, 5), "html", null, true);
            echo "</span>!</h1>
    <h2 id=\"contestnotstarted\" class=\"text-center\">
        Contest ";
            // line 7
            echo twig_escape_filter($this->env, $this->extensions['App\Twig\TwigExtension']->printContestStart((isset($context["contest"]) || array_key_exists("contest", $context) ? $context["contest"] : (function () { throw new RuntimeError('Variable "contest" does not exist.', 7, $this->source); })())), "html", null, true);
            echo "
    </h2>
";
        } else {
            // line 10
            echo "    <div id=\"teamscoresummary\">
        ";
            // line 11
            $context["displayRank"] =  !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["contest"]) || array_key_exists("contest", $context) ? $context["contest"] : (function () { throw new RuntimeError('Variable "contest" does not exist.', 11, $this->source); })()), "freezeData", [], "any", false, false, false, 11), "showFrozen", [], "any", false, false, false, 11);
            // line 12
            echo "        ";
            $this->loadTemplate("partials/scoreboard_table.html.twig", "team/partials/index_content.html.twig", 12)->display(twig_array_merge($context, ["displayRank" => (isset($context["displayRank"]) || array_key_exists("displayRank", $context) ? $context["displayRank"] : (function () { throw new RuntimeError('Variable "displayRank" does not exist.', 12, $this->source); })()), "jury" => false, "public" => false]));
            // line 13
            echo "    </div>

    <div class=\"mt-4\" data-flash-messages>
        ";
            // line 16
            $this->loadTemplate("partials/messages.html.twig", "team/partials/index_content.html.twig", 16)->display($context);
            // line 17
            echo "    </div>

    <div class=\"row\">
        <div class=\"col\">
            <h3 class=\"teamoverview\">Submissions</h3>

            ";
            // line 23
            $this->loadTemplate("team/partials/submission_list.html.twig", "team/partials/index_content.html.twig", 23)->display($context);
            // line 24
            echo "        </div>
        <div class=\"col\">
            <h3 class=\"teamoverview\">Clarifications</h3>
            ";
            // line 27
            if (twig_test_empty((isset($context["clarifications"]) || array_key_exists("clarifications", $context) ? $context["clarifications"] : (function () { throw new RuntimeError('Variable "clarifications" does not exist.', 27, $this->source); })()))) {
                // line 28
                echo "                <p class=\"nodata\">No clarifications.</p>
            ";
            } else {
                // line 30
                echo "                ";
                $this->loadTemplate("team/partials/clarification_list.html.twig", "team/partials/index_content.html.twig", 30)->display(twig_array_merge($context, ["clarifications" => (isset($context["clarifications"]) || array_key_exists("clarifications", $context) ? $context["clarifications"] : (function () { throw new RuntimeError('Variable "clarifications" does not exist.', 30, $this->source); })())]));
                // line 31
                echo "            ";
            }
            // line 32
            echo "
            <h3 class=\"teamoverview\">Clarification Requests</h3>
            ";
            // line 34
            if (twig_test_empty((isset($context["clarificationRequests"]) || array_key_exists("clarificationRequests", $context) ? $context["clarificationRequests"] : (function () { throw new RuntimeError('Variable "clarificationRequests" does not exist.', 34, $this->source); })()))) {
                // line 35
                echo "                <p class=\"nodata\">No clarification request.</p>
            ";
            } else {
                // line 37
                echo "                ";
                $this->loadTemplate("team/partials/clarification_list.html.twig", "team/partials/index_content.html.twig", 37)->display(twig_array_merge($context, ["clarifications" => (isset($context["clarificationRequests"]) || array_key_exists("clarificationRequests", $context) ? $context["clarificationRequests"] : (function () { throw new RuntimeError('Variable "clarificationRequests" does not exist.', 37, $this->source); })())]));
                // line 38
                echo "            ";
            }
            // line 39
            echo "
            <div class=\"m-1\">
                <a href=\"";
            // line 41
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("team_clarification_add");
            echo "\" class=\"btn btn-secondary btn-sm\" data-ajax-modal>
                    request clarification
                </a>
            </div>
        </div>
    </div>
";
        }
        // line 48
        if (((isset($context["ajax"]) || array_key_exists("ajax", $context)) && (isset($context["ajax"]) || array_key_exists("ajax", $context) ? $context["ajax"] : (function () { throw new RuntimeError('Variable "ajax" does not exist.', 48, $this->source); })()))) {
            // line 49
            echo "    ";
            $this->loadTemplate("partials/scoreboard_progress_bar.html.twig", "team/partials/index_content.html.twig", 49)->display(twig_array_merge($context, ["margin" =>  -9, "contest" => (isset($context["current_team_contest"]) || array_key_exists("current_team_contest", $context) ? $context["current_team_contest"] : (function () { throw new RuntimeError('Variable "current_team_contest" does not exist.', 49, $this->source); })())]));
        }
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "team/partials/index_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  139 => 49,  137 => 48,  127 => 41,  123 => 39,  120 => 38,  117 => 37,  113 => 35,  111 => 34,  107 => 32,  104 => 31,  101 => 30,  97 => 28,  95 => 27,  90 => 24,  88 => 23,  80 => 17,  78 => 16,  73 => 13,  70 => 12,  68 => 11,  65 => 10,  59 => 7,  53 => 5,  51 => 4,  45 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% if contest is empty %}
    <h1 id=\"teamwelcome\" class=\"text-center\">Welcome team <span id=\"teamwelcometeam\">{{ team.name }}</span>!</h1>
    <h2 id=\"contestnotstarted\" class=\"text-center\">There's no active contest for you (yet).</h2>
{% elseif not contest.freezeData.started %}
    <h1 id=\"teamwelcome\" class=\"text-center\">Welcome team <span id=\"teamwelcometeam\">{{ team.name }}</span>!</h1>
    <h2 id=\"contestnotstarted\" class=\"text-center\">
        Contest {{ contest | printContestStart }}
    </h2>
{% else %}
    <div id=\"teamscoresummary\">
        {% set displayRank = not contest.freezeData.showFrozen %}
        {% include 'partials/scoreboard_table.html.twig' with {displayRank: displayRank, jury: false, public: false} %}
    </div>

    <div class=\"mt-4\" data-flash-messages>
        {% include 'partials/messages.html.twig' %}
    </div>

    <div class=\"row\">
        <div class=\"col\">
            <h3 class=\"teamoverview\">Submissions</h3>

            {% include 'team/partials/submission_list.html.twig' %}
        </div>
        <div class=\"col\">
            <h3 class=\"teamoverview\">Clarifications</h3>
            {% if clarifications is empty %}
                <p class=\"nodata\">No clarifications.</p>
            {% else %}
                {% include 'team/partials/clarification_list.html.twig' with {clarifications: clarifications} %}
            {% endif %}

            <h3 class=\"teamoverview\">Clarification Requests</h3>
            {% if clarificationRequests is empty %}
                <p class=\"nodata\">No clarification request.</p>
            {% else %}
                {% include 'team/partials/clarification_list.html.twig' with {clarifications: clarificationRequests} %}
            {% endif %}

            <div class=\"m-1\">
                <a href=\"{{ path('team_clarification_add') }}\" class=\"btn btn-secondary btn-sm\" data-ajax-modal>
                    request clarification
                </a>
            </div>
        </div>
    </div>
{% endif %}
{% if ajax is defined and ajax %}
    {% include 'partials/scoreboard_progress_bar.html.twig' with {margin: -9, contest: current_team_contest} %}
{% endif %}
", "team/partials/index_content.html.twig", "/opt/domjudge/domserver/webapp/templates/team/partials/index_content.html.twig");
    }
}
