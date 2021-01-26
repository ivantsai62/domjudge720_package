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

/* public/menu.html.twig */
class __TwigTemplate_74ce070a97b216e1851a628df45b22d86ba3ff76f937fc83c084642483d685af extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "public/menu.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "public/menu.html.twig"));

        // line 1
        echo "<nav class=\"navbar navbar-expand-md navbar-light bg-light fixed-top\">
    <a class=\"navbar-brand hidden-sm-down\" href=\"";
        // line 2
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("public_index");
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
        // line 12
        echo $this->extensions['Symfony\Bridge\Twig\Extension\DumpExtension']->dump($this->env, $context, (isset($context["current_route"]) || array_key_exists("current_route", $context) ? $context["current_route"] : (function () { throw new RuntimeError('Variable "current_route" does not exist.', 12, $this->source); })()));
        echo "
            <li class=\"nav-item ";
        // line 13
        if (twig_in_filter((isset($context["current_route"]) || array_key_exists("current_route", $context) ? $context["current_route"] : (function () { throw new RuntimeError('Variable "current_route" does not exist.', 13, $this->source); })()), [0 => "public_index", 1 => "public_team", 2 => "public_index_test"])) {
            echo "active";
        }
        echo "\">
                <a class=\"nav-link\" href=\"";
        // line 14
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("public_index_test");
        echo "\"><i class=\"fas fa-home\"></i> HomePage_test</a>
            </li>

            <li class=\"nav-item ";
        // line 17
        if (twig_in_filter((isset($context["current_route"]) || array_key_exists("current_route", $context) ? $context["current_route"] : (function () { throw new RuntimeError('Variable "current_route" does not exist.', 17, $this->source); })()), [0 => "public_index", 1 => "public_team"])) {
            echo "active";
        }
        echo "\">
                <a class=\"nav-link\" href=\"";
        // line 18
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("public_index");
        echo "\"><i class=\"fas fa-list-ol\"></i> Scoreboard</a>
            </li>
            <li class=\"nav-item ";
        // line 20
        if (((isset($context["current_route"]) || array_key_exists("current_route", $context) ? $context["current_route"] : (function () { throw new RuntimeError('Variable "current_route" does not exist.', 20, $this->source); })()) == "public_problems")) {
            echo "active";
        }
        echo "\">
                ";
        // line 21
        if (($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_JURY") || ( !(null === (isset($context["current_public_contest"]) || array_key_exists("current_public_contest", $context) ? $context["current_public_contest"] : (function () { throw new RuntimeError('Variable "current_public_contest" does not exist.', 21, $this->source); })())) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["current_public_contest"]) || array_key_exists("current_public_contest", $context) ? $context["current_public_contest"] : (function () { throw new RuntimeError('Variable "current_public_contest" does not exist.', 21, $this->source); })()), "freezeData", [], "any", false, false, false, 21), "started", [], "any", false, false, false, 21)))) {
            // line 22
            echo "                    <a class=\"nav-link\" href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("public_problems");
            echo "\">
                        <i class=\"fas fa-book-open\"></i> Problemset
                    </a>
                ";
        } else {
            // line 26
            echo "                    <a class=\"nav-link disabled\"><i class=\"fas fa-book-open\"></i> Problemset</a>
                ";
        }
        // line 28
        echo "            </li>

            ";
        // line 30
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_TEAM")) {
            // line 31
            echo "                <li class=\"nav-item\">
                    <a class=\"nav-link\" href=\"";
            // line 32
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("team_index");
            echo "\">
                        <i class=\"fas fa-arrow-right\"></i> Team
                    </a>
                </li>
            ";
        }
        // line 37
        echo "
            ";
        // line 38
        if (($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_JURY") || $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_BALLOON"))) {
            // line 39
            echo "                <li class=\"nav-item\">
                    <a class=\"nav-link\" href=\"";
            // line 40
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_index");
            echo "\"><i class=\"fas fa-arrow-right\"></i> Jury</a>
                </li>
            ";
        }
        // line 43
        echo "        </ul>

        ";
        // line 45
        $this->loadTemplate("partials/menu_login_logout_button.html.twig", "public/menu.html.twig", 45)->display($context);
        // line 46
        echo "
        <ul class=\"navbar-nav\">
            ";
        // line 48
        if ((twig_length_filter($this->env, (isset($context["current_public_contests"]) || array_key_exists("current_public_contests", $context) ? $context["current_public_contests"] : (function () { throw new RuntimeError('Variable "current_public_contests" does not exist.', 48, $this->source); })())) > 1)) {
            // line 49
            echo "                ";
            $this->loadTemplate("partials/menu_change_contest.html.twig", "public/menu.html.twig", 49)->display(twig_array_merge($context, ["contest" => (isset($context["current_public_contest"]) || array_key_exists("current_public_contest", $context) ? $context["current_public_contest"] : (function () { throw new RuntimeError('Variable "current_public_contest" does not exist.', 49, $this->source); })()), "contests" => (isset($context["current_public_contests"]) || array_key_exists("current_public_contests", $context) ? $context["current_public_contests"] : (function () { throw new RuntimeError('Variable "current_public_contests" does not exist.', 49, $this->source); })()), "change_path" => "public_change_contest", "show_no_contest" => false]));
            // line 50
            echo "            ";
        }
        // line 51
        echo "        </ul>

        ";
        // line 53
        $this->loadTemplate("partials/menu_countdown.html.twig", "public/menu.html.twig", 53)->display(twig_array_merge($context, ["contest" => (isset($context["current_public_contest"]) || array_key_exists("current_public_contest", $context) ? $context["current_public_contest"] : (function () { throw new RuntimeError('Variable "current_public_contest" does not exist.', 53, $this->source); })())]));
        // line 54
        echo "    </div>
</nav>
";
        // line 56
        $this->loadTemplate("partials/scoreboard_progress_bar.html.twig", "public/menu.html.twig", 56)->display(twig_array_merge($context, ["margin" =>  -9, "contest" => (isset($context["current_public_contest"]) || array_key_exists("current_public_contest", $context) ? $context["current_public_contest"] : (function () { throw new RuntimeError('Variable "current_public_contest" does not exist.', 56, $this->source); })())]));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "public/menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  168 => 56,  164 => 54,  162 => 53,  158 => 51,  155 => 50,  152 => 49,  150 => 48,  146 => 46,  144 => 45,  140 => 43,  134 => 40,  131 => 39,  129 => 38,  126 => 37,  118 => 32,  115 => 31,  113 => 30,  109 => 28,  105 => 26,  97 => 22,  95 => 21,  89 => 20,  84 => 18,  78 => 17,  72 => 14,  66 => 13,  62 => 12,  57 => 9,  55 => 8,  46 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<nav class=\"navbar navbar-expand-md navbar-light bg-light fixed-top\">
    <a class=\"navbar-brand hidden-sm-down\" href=\"{{ path('public_index') }}\">DOMjudge</a>
    <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#menuDefault\"
            aria-controls=\"menuDefault\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
        <span class=\"navbar-toggler-icon\"></span>
    </button>

    {% set current_route = app.request.attributes.get('_route') %}

    <div class=\"collapse navbar-collapse\" id=\"menuDefault\">
        <ul class=\"navbar-nav mr-auto\">
            {{dump(current_route)}}
            <li class=\"nav-item {% if current_route in ['public_index', 'public_team','public_index_test'] %}active{% endif %}\">
                <a class=\"nav-link\" href=\"{{ path('public_index_test') }}\"><i class=\"fas fa-home\"></i> HomePage_test</a>
            </li>

            <li class=\"nav-item {% if current_route in ['public_index', 'public_team'] %}active{% endif %}\">
                <a class=\"nav-link\" href=\"{{ path('public_index') }}\"><i class=\"fas fa-list-ol\"></i> Scoreboard</a>
            </li>
            <li class=\"nav-item {% if current_route == 'public_problems' %}active{% endif %}\">
                {% if is_granted('ROLE_JURY') or (current_public_contest is not null and current_public_contest.freezeData.started) %}
                    <a class=\"nav-link\" href=\"{{ path('public_problems') }}\">
                        <i class=\"fas fa-book-open\"></i> Problemset
                    </a>
                {% else %}
                    <a class=\"nav-link disabled\"><i class=\"fas fa-book-open\"></i> Problemset</a>
                {% endif %}
            </li>

            {% if is_granted('ROLE_TEAM') %}
                <li class=\"nav-item\">
                    <a class=\"nav-link\" href=\"{{ path('team_index') }}\">
                        <i class=\"fas fa-arrow-right\"></i> Team
                    </a>
                </li>
            {% endif %}

            {% if is_granted('ROLE_JURY') or is_granted('ROLE_BALLOON') %}
                <li class=\"nav-item\">
                    <a class=\"nav-link\" href=\"{{ path('jury_index') }}\"><i class=\"fas fa-arrow-right\"></i> Jury</a>
                </li>
            {% endif %}
        </ul>

        {% include 'partials/menu_login_logout_button.html.twig' %}

        <ul class=\"navbar-nav\">
            {% if current_public_contests | length > 1 %}
                {% include 'partials/menu_change_contest.html.twig' with {contest: current_public_contest, contests: current_public_contests, change_path: 'public_change_contest', show_no_contest: false} %}
            {% endif %}
        </ul>

        {% include 'partials/menu_countdown.html.twig' with {contest: current_public_contest} %}
    </div>
</nav>
{% include 'partials/scoreboard_progress_bar.html.twig' with {margin: -9, contest: current_public_contest} %}
", "public/menu.html.twig", "/opt/domjudge/domserver/webapp/templates/public/menu.html.twig");
    }
}
