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

/* team/menu.html.twig */
class __TwigTemplate_c0128ceab15ec46ad714ae0aec9afe4f0e1d0b316a011187658fa4c22621c0af extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "team/menu.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "team/menu.html.twig"));

        // line 1
        echo "<nav class=\"navbar navbar-expand-md navbar-dark bg-dark fixed-top\">
    <a class=\"navbar-brand hidden-sm-down\" href=\"";
        // line 2
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("team_index");
        echo "\">DOMjudge</a>
    <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#menuDefault\"
            aria-controls=\"menuDefault\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
        <span class=\"navbar-toggler-icon\"></span>
    </button>

    ";
        // line 8
        $context["current_route"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 8, $this->source); })()), "request", [], "any", false, false, false, 8), "attributes", [], "any", false, false, false, 8), "get", [0 => "_route"], "method", false, false, false, 8);
        // line 9
        echo "    
    <div class=\"collapse navbar-collapse\" id=\"menuDefault\">
        <ul class=\"navbar-nav mr-auto\">
        ";
        // line 13
        echo "         <li class=\"nav-item ";
        if (twig_in_filter((isset($context["current_route"]) || array_key_exists("current_route", $context) ? $context["current_route"] : (function () { throw new RuntimeError('Variable "current_route" does not exist.', 13, $this->source); })()), [0 => "team_index_test", 1 => "team_clarification", 2 => "team_clarification_add", 3 => "team_submission"])) {
            echo "active";
        }
        echo "\">
                <a class=\"nav-link\" href=\"";
        // line 14
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("team_index_test");
        echo "\"><i class=\"fas fa-home\"></i> Problem list</a>
            </li>



            <li class=\"nav-item ";
        // line 19
        if (twig_in_filter((isset($context["current_route"]) || array_key_exists("current_route", $context) ? $context["current_route"] : (function () { throw new RuntimeError('Variable "current_route" does not exist.', 19, $this->source); })()), [0 => "team_index", 1 => "team_clarification", 2 => "team_clarification_add", 3 => "team_submission"])) {
            echo "active";
        }
        echo "\">
                <a class=\"nav-link\" href=\"";
        // line 20
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("team_index");
        echo "\"><i class=\"fas fa-user\"></i> MyPage </a>
            </li>
            <li class=\"nav-item ";
        // line 22
        if (((isset($context["current_route"]) || array_key_exists("current_route", $context) ? $context["current_route"] : (function () { throw new RuntimeError('Variable "current_route" does not exist.', 22, $this->source); })()) == "team_problems")) {
            echo "active";
        }
        echo "\">
                ";
        // line 23
        if (($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_JURY") || twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["current_team_contest"]) || array_key_exists("current_team_contest", $context) ? $context["current_team_contest"] : (function () { throw new RuntimeError('Variable "current_team_contest" does not exist.', 23, $this->source); })()), "freezeData", [], "any", false, false, false, 23), "started", [], "any", false, false, false, 23))) {
            // line 24
            echo "                    <a class=\"nav-link\" href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("team_problems");
            echo "\">
                        <i class=\"fas fa-book-open\"></i> Problemset
                    </a>
                ";
        } else {
            // line 28
            echo "                    <a class=\"nav-link disabled\"><i class=\"fas fa-book-open\"></i> Problemset</a>
                ";
        }
        // line 30
        echo "            </li>
            ";
        // line 31
        if ((isset($context["have_printing"]) || array_key_exists("have_printing", $context) ? $context["have_printing"] : (function () { throw new RuntimeError('Variable "have_printing" does not exist.', 31, $this->source); })())) {
            // line 32
            echo "                <li class=\"nav-item ";
            if (((isset($context["current_route"]) || array_key_exists("current_route", $context) ? $context["current_route"] : (function () { throw new RuntimeError('Variable "current_route" does not exist.', 32, $this->source); })()) == "team_print")) {
                echo "active";
            }
            echo "\">
                    <a class=\"nav-link\" href=\"";
            // line 33
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("team_print");
            echo "\"><i class=\"fas fa-file-alt\"></i> Print</a>
                </li>
            ";
        }
        // line 36
        echo "            <li class=\"nav-item ";
        if (twig_in_filter((isset($context["current_route"]) || array_key_exists("current_route", $context) ? $context["current_route"] : (function () { throw new RuntimeError('Variable "current_route" does not exist.', 36, $this->source); })()), [0 => "team_scoreboard", 1 => "team_team"])) {
            echo "active";
        }
        echo "\">
                <a class=\"nav-link\" href=\"";
        // line 37
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("team_scoreboard");
        echo "\"><i class=\"fas fa-list-ol\"></i> Scoreboard</a>
            </li>

            ";
        // line 40
        if (($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_JURY") || $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_BALLOON"))) {
            // line 41
            echo "                <li class=\"nav-item\">
                    <a class=\"nav-link\" href=\"";
            // line 42
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_index");
            echo "\"><i class=\"fas fa-arrow-right\"></i> Jury</a>
                </li>
            ";
        }
        // line 45
        echo "        </ul>

        <div id=\"submitbut\">
            ";
        // line 48
        if (($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_JURY") || twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["current_team_contest"]) || array_key_exists("current_team_contest", $context) ? $context["current_team_contest"] : (function () { throw new RuntimeError('Variable "current_team_contest" does not exist.', 48, $this->source); })()), "freezeData", [], "any", false, false, false, 48), "started", [], "any", false, false, false, 48))) {
            // line 49
            echo "                <a class=\"nav-link justify-content-center\" data-ajax-modal data-ajax-modal-after=\"initSubmitModal\" href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("team_submit");
            echo "\">
                    <button type=\"button\" class=\"btn btn-success btn-sm\">
                        <i class=\"fas fa-cloud-upload-alt\"></i> Submit
                    </button>
                </a>
            ";
        } else {
            // line 55
            echo "                <a class=\"nav-link justify-content-center\">
                    <button type=\"button\" class=\"btn btn-success btn-sm disabled\" disabled>
                        <i class=\"fas fa-cloud-upload-alt\"></i> Submit
                    </button>
                </a>
            ";
        }
        // line 61
        echo "        </div>

        ";
        // line 63
        $this->loadTemplate("partials/menu_login_logout_button.html.twig", "team/menu.html.twig", 63)->display(twig_array_merge($context, ["confirmLogout" => true]));
        // line 64
        echo "
        <ul class=\"navbar-nav\">
            ";
        // line 66
        if ((twig_length_filter($this->env, (isset($context["current_team_contests"]) || array_key_exists("current_team_contests", $context) ? $context["current_team_contests"] : (function () { throw new RuntimeError('Variable "current_team_contests" does not exist.', 66, $this->source); })())) > 1)) {
            // line 67
            echo "                ";
            $this->loadTemplate("partials/menu_change_contest.html.twig", "team/menu.html.twig", 67)->display(twig_array_merge($context, ["contest" => (isset($context["current_team_contest"]) || array_key_exists("current_team_contest", $context) ? $context["current_team_contest"] : (function () { throw new RuntimeError('Variable "current_team_contest" does not exist.', 67, $this->source); })()), "contests" => (isset($context["current_team_contests"]) || array_key_exists("current_team_contests", $context) ? $context["current_team_contests"] : (function () { throw new RuntimeError('Variable "current_team_contests" does not exist.', 67, $this->source); })()), "change_path" => "team_change_contest", "show_no_contest" => false]));
            // line 68
            echo "            ";
        }
        // line 69
        echo "        </ul>

        ";
        // line 71
        $this->loadTemplate("partials/menu_countdown.html.twig", "team/menu.html.twig", 71)->display(twig_array_merge($context, ["contest" => (isset($context["current_team_contest"]) || array_key_exists("current_team_contest", $context) ? $context["current_team_contest"] : (function () { throw new RuntimeError('Variable "current_team_contest" does not exist.', 71, $this->source); })())]));
        // line 72
        echo "    </div>
</nav>
";
        // line 74
        $this->loadTemplate("partials/scoreboard_progress_bar.html.twig", "team/menu.html.twig", 74)->display(twig_array_merge($context, ["margin" =>  -9, "contest" => (isset($context["current_team_contest"]) || array_key_exists("current_team_contest", $context) ? $context["current_team_contest"] : (function () { throw new RuntimeError('Variable "current_team_contest" does not exist.', 74, $this->source); })())]));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "team/menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  203 => 74,  199 => 72,  197 => 71,  193 => 69,  190 => 68,  187 => 67,  185 => 66,  181 => 64,  179 => 63,  175 => 61,  167 => 55,  157 => 49,  155 => 48,  150 => 45,  144 => 42,  141 => 41,  139 => 40,  133 => 37,  126 => 36,  120 => 33,  113 => 32,  111 => 31,  108 => 30,  104 => 28,  96 => 24,  94 => 23,  88 => 22,  83 => 20,  77 => 19,  69 => 14,  62 => 13,  57 => 9,  55 => 8,  46 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<nav class=\"navbar navbar-expand-md navbar-dark bg-dark fixed-top\">
    <a class=\"navbar-brand hidden-sm-down\" href=\"{{ path('team_index') }}\">DOMjudge</a>
    <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#menuDefault\"
            aria-controls=\"menuDefault\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
        <span class=\"navbar-toggler-icon\"></span>
    </button>

    {% set current_route = app.request.attributes.get('_route') %}
    
    <div class=\"collapse navbar-collapse\" id=\"menuDefault\">
        <ul class=\"navbar-nav mr-auto\">
        {# 新增 #}
         <li class=\"nav-item {% if current_route in ['team_index_test', 'team_clarification', 'team_clarification_add', 'team_submission'] %}active{% endif %}\">
                <a class=\"nav-link\" href=\"{{ path('team_index_test') }}\"><i class=\"fas fa-home\"></i> Problem list</a>
            </li>



            <li class=\"nav-item {% if current_route in ['team_index', 'team_clarification', 'team_clarification_add', 'team_submission'] %}active{% endif %}\">
                <a class=\"nav-link\" href=\"{{ path('team_index') }}\"><i class=\"fas fa-user\"></i> MyPage </a>
            </li>
            <li class=\"nav-item {% if current_route == 'team_problems' %}active{% endif %}\">
                {% if is_granted('ROLE_JURY') or current_team_contest.freezeData.started %}
                    <a class=\"nav-link\" href=\"{{ path('team_problems') }}\">
                        <i class=\"fas fa-book-open\"></i> Problemset
                    </a>
                {% else %}
                    <a class=\"nav-link disabled\"><i class=\"fas fa-book-open\"></i> Problemset</a>
                {% endif %}
            </li>
            {% if have_printing %}
                <li class=\"nav-item {% if current_route == 'team_print' %}active{% endif %}\">
                    <a class=\"nav-link\" href=\"{{ path('team_print') }}\"><i class=\"fas fa-file-alt\"></i> Print</a>
                </li>
            {% endif %}
            <li class=\"nav-item {% if current_route in ['team_scoreboard', 'team_team'] %}active{% endif %}\">
                <a class=\"nav-link\" href=\"{{ path('team_scoreboard') }}\"><i class=\"fas fa-list-ol\"></i> Scoreboard</a>
            </li>

            {% if is_granted('ROLE_JURY') or is_granted('ROLE_BALLOON') %}
                <li class=\"nav-item\">
                    <a class=\"nav-link\" href=\"{{ path('jury_index') }}\"><i class=\"fas fa-arrow-right\"></i> Jury</a>
                </li>
            {% endif %}
        </ul>

        <div id=\"submitbut\">
            {% if is_granted('ROLE_JURY') or current_team_contest.freezeData.started %}
                <a class=\"nav-link justify-content-center\" data-ajax-modal data-ajax-modal-after=\"initSubmitModal\" href=\"{{ path('team_submit') }}\">
                    <button type=\"button\" class=\"btn btn-success btn-sm\">
                        <i class=\"fas fa-cloud-upload-alt\"></i> Submit
                    </button>
                </a>
            {% else %}
                <a class=\"nav-link justify-content-center\">
                    <button type=\"button\" class=\"btn btn-success btn-sm disabled\" disabled>
                        <i class=\"fas fa-cloud-upload-alt\"></i> Submit
                    </button>
                </a>
            {% endif %}
        </div>

        {% include 'partials/menu_login_logout_button.html.twig' with {confirmLogout: true} %}

        <ul class=\"navbar-nav\">
            {% if current_team_contests | length > 1 %}
                {% include 'partials/menu_change_contest.html.twig' with {contest: current_team_contest, contests: current_team_contests, change_path: 'team_change_contest', show_no_contest: false} %}
            {% endif %}
        </ul>

        {% include 'partials/menu_countdown.html.twig' with {contest: current_team_contest} %}
    </div>
</nav>
{% include 'partials/scoreboard_progress_bar.html.twig' with {margin: -9, contest: current_team_contest} %}
", "team/menu.html.twig", "/opt/domjudge/domserver/webapp/templates/team/menu.html.twig");
    }
}
