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

/* jury/menu.html.twig */
class __TwigTemplate_1cc87167dc5590777b8e93de63f40ce071cfcd396200ec8b32ddeda3397c3bb5 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "jury/menu.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "jury/menu.html.twig"));

        // line 1
        echo "<nav class=\"navbar navbar-expand-md navbar-dark bg-dark fixed-top\">
    <a class=\"navbar-brand hidden-sm-down\" href=\"";
        // line 2
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_index");
        echo "\">DOMjudge</a>
    <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#menuDefault\" aria-controls=\"menuDefault\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
        <span class=\"navbar-toggler-icon\"></span>
    </button>

    <div class=\"collapse navbar-collapse\" id=\"menuDefault\" data-update-url=\"";
        // line 7
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_ajax_updates");
        echo "\">
        <ul class=\"navbar-nav mr-auto\">

            ";
        // line 10
        if ((($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_BALLOON") &&  !$this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_JURY")) &&  !$this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN"))) {
            // line 11
            echo "                <li class=\"nav-item\">
                    <a class=\"nav-link\" href=\"";
            // line 12
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_balloons");
            echo "\"><i class=\"fas fa-map-marker-alt\"></i> balloons</a>
                </li>
            ";
        }
        // line 15
        echo "
            ";
        // line 16
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 17
            echo "                <li class=\"nav-item dropdown\">
                    <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"navbarDropdownJudgehosts\" role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                        <i class=\"fas fa-gavel\"></i> judgehosts
                        <span class=\"badge badge-warning\" id=\"num-alerts-judgehosts\"></span>
                        <span class=\"badge badge-danger\" id=\"num-alerts-internalerrors\"></span>
                    </a>
                    <div class=\"dropdown-menu\" aria-labelledby=\"navbarDropdown\">
                        <a class=\"dropdown-item\" href=\"";
            // line 24
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_judgehosts");
            echo "\" id=\"menu_judgehosts\">
                            <i class=\"fas fa-server fa-fw\"></i> judgehosts <span class=\"badge badge-warning\" id=\"num-alerts-judgehosts-sub\"></span>
                        </a>
                        <a class=\"dropdown-item dropdown-disabled\" href=\"";
            // line 27
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_internal_errors");
            echo "\" id=\"menu_internal_error\">
                            <i class=\"fas fa-bolt fa-fw\"></i> internal error <span class=\"badge badge-danger\" id=\"num-alerts-internalerrors-sub\"></span>
                        </a>
                    </div>
                </li>
            ";
        }
        // line 33
        echo "
            ";
        // line 34
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_JURY")) {
            // line 35
            echo "                <li class=\"nav-item\">
                    <a class=\"nav-link\" href=\"";
            // line 36
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_clarifications");
            echo "\" id=\"menu_clarifications\"><i class=\"fas fa-comments\"></i> clarifications <span class=\"badge badge-info\" id=\"num-alerts-clarifications\"></span></a>
                </li>


                <li class=\"nav-item\">
                    <a class=\"nav-link\" href=\"";
            // line 41
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_submissions");
            echo "\"><i class=\"fas fa-file-code\"></i> submissions</a>
                </li>

                ";
            // line 44
            if ((isset($context["show_shadow_differences"]) || array_key_exists("show_shadow_differences", $context) ? $context["show_shadow_differences"] : (function () { throw new RuntimeError('Variable "show_shadow_differences" does not exist.', 44, $this->source); })())) {
                // line 45
                echo "                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"";
                // line 46
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_shadow_differences");
                echo "\"><i class=\"fas fa-not-equal\"></i> shadow differences</a>
                    </li>
                ";
            }
            // line 49
            echo "
                <li class=\"nav-item\">
                    <a class=\"nav-link\" href=\"";
            // line 51
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_rejudgings");
            echo "\" id=\"menu_rejudgings\"><i class=\"fas fa-sync\"></i> rejudgings <span class=\"badge badge-info\" id=\"num-alerts-rejudgings\"></span></a>
                </li>
            ";
        }
        // line 54
        echo "
            ";
        // line 55
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_JURY")) {
            // line 56
            echo "                <li class=\"nav-item\">
                    <a class=\"nav-link\" href=\"";
            // line 57
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_scoreboard");
            echo "\"><i class=\"fas fa-list-ol\"></i> scoreboard</a>
                </li>
            ";
        }
        // line 60
        echo "            ";
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_TEAM")) {
            // line 61
            echo "                <li class=\"nav-item\">
                    <a class=\"nav-link\" target=\"_top\" href=\"";
            // line 62
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("team_index");
            echo "\"><i class=\"fas fa-arrow-right\"></i> team</a>
                </li>
            ";
        }
        // line 65
        echo "        </ul>

        <ul class=\"navbar-nav ml-auto\">
            ";
        // line 69
        echo "            ";
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("IS_AUTHENTICATED_FULLY")) {
            // line 70
            echo "                <li class=\"nav-item dropdown\">
                    <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"navbarDropdown\" role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                        <i class=\"fas fa-user\"></i> ";
            // line 72
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 72, $this->source); })()), "user", [], "any", false, false, false, 72), "getUsername", [], "method", false, false, false, 72), "html", null, true);
            echo "
                    </a>
                    <div class=\"dropdown-menu\" aria-labelledby=\"navbarDropdown\">
                        ";
            // line 75
            if ((twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 75, $this->source); })()), "user", [], "any", false, false, false, 75) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 75, $this->source); })()), "user", [], "any", false, false, false, 75), "getName", [], "method", false, false, false, 75))) {
                // line 76
                echo "                            <a class=\"dropdown-item disabled\" href=\"#\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 76, $this->source); })()), "user", [], "any", false, false, false, 76), "getName", [], "method", false, false, false, 76), "html", null, true);
                echo "</a>
                        ";
            }
            // line 78
            echo "
                        <a class=\"dropdown-item d-none\" href=\"#\" id=\"notify_disable\">
                            <i class=\"fas fa-bell-slash fa-fw\"></i> Disable Notifications
                        </a>
                        <a class=\"dropdown-item d-none\" href=\"#\" id=\"notify_enable\">
                            <i class=\"fas fa-bell fa-fw\"></i> Enable Notifications
                        </a>

                        ";
            // line 86
            if (((isset($context["refresh"]) || array_key_exists("refresh", $context)) && (isset($context["refresh"]) || array_key_exists("refresh", $context) ? $context["refresh"] : (function () { throw new RuntimeError('Variable "refresh" does not exist.', 86, $this->source); })()))) {
                // line 87
                echo "                            <a class=\"dropdown-item\" href=\"#\" id=\"refresh-navitem\">
                                <i class=\"fas fa-sync-alt fa-fw\"></i> <span id=\"refresh-toggle\">
                  ";
                // line 89
                if ((isset($context["refresh_flag"]) || array_key_exists("refresh_flag", $context) ? $context["refresh_flag"] : (function () { throw new RuntimeError('Variable "refresh_flag" does not exist.', 89, $this->source); })())) {
                    // line 90
                    echo "                      Disable Refresh
                  ";
                } else {
                    // line 92
                    echo "                      Enable Refresh
                  ";
                }
                // line 94
                echo "                </span>
                                ";
                // line 95
                if ((isset($context["refresh"]) || array_key_exists("refresh", $context) ? $context["refresh"] : (function () { throw new RuntimeError('Variable "refresh" does not exist.', 95, $this->source); })())) {
                    // line 96
                    echo "                                    <span class=\"small text-muted\">(";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["refresh"]) || array_key_exists("refresh", $context) ? $context["refresh"] : (function () { throw new RuntimeError('Variable "refresh" does not exist.', 96, $this->source); })()), "after", [], "any", false, false, false, 96), "html", null, true);
                    echo "s)</span>
                                ";
                }
                // line 98
                echo "                            </a>
                        ";
            }
            // line 100
            echo "
                        <a class=\"dropdown-item\" href=\"";
            // line 101
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("logout");
            echo "\"><i class=\"fas fa-sign-out-alt fa-fw\"></i>Logout </a>
                    </div>
                </li>
            ";
        } else {
            // line 105
            echo "                <li class=\"nav-item\">
                    <a class=\"nav-link\" target=\"_top\" href=\"";
            // line 106
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("login");
            echo "\"><i class=\"fas fa-sign-in-alt fa-fw\"></i> log in</a>
                </li>
            ";
        }
        // line 109
        echo "
            ";
        // line 110
        $this->loadTemplate("partials/menu_change_contest.html.twig", "jury/menu.html.twig", 110)->display(twig_array_merge($context, ["contest" => (isset($context["current_contest"]) || array_key_exists("current_contest", $context) ? $context["current_contest"] : (function () { throw new RuntimeError('Variable "current_contest" does not exist.', 110, $this->source); })()), "contests" => (isset($context["current_contests"]) || array_key_exists("current_contests", $context) ? $context["current_contests"] : (function () { throw new RuntimeError('Variable "current_contests" does not exist.', 110, $this->source); })()), "change_path" => "jury_change_contest", "show_no_contest" => true]));
        // line 111
        echo "        </ul>
        ";
        // line 112
        $this->loadTemplate("partials/menu_countdown.html.twig", "jury/menu.html.twig", 112)->display(twig_array_merge($context, ["contest" => (isset($context["current_contest"]) || array_key_exists("current_contest", $context) ? $context["current_contest"] : (function () { throw new RuntimeError('Variable "current_contest" does not exist.', 112, $this->source); })())]));
        // line 113
        echo "    </div>
</nav>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "jury/menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  265 => 113,  263 => 112,  260 => 111,  258 => 110,  255 => 109,  249 => 106,  246 => 105,  239 => 101,  236 => 100,  232 => 98,  226 => 96,  224 => 95,  221 => 94,  217 => 92,  213 => 90,  211 => 89,  207 => 87,  205 => 86,  195 => 78,  189 => 76,  187 => 75,  181 => 72,  177 => 70,  174 => 69,  169 => 65,  163 => 62,  160 => 61,  157 => 60,  151 => 57,  148 => 56,  146 => 55,  143 => 54,  137 => 51,  133 => 49,  127 => 46,  124 => 45,  122 => 44,  116 => 41,  108 => 36,  105 => 35,  103 => 34,  100 => 33,  91 => 27,  85 => 24,  76 => 17,  74 => 16,  71 => 15,  65 => 12,  62 => 11,  60 => 10,  54 => 7,  46 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<nav class=\"navbar navbar-expand-md navbar-dark bg-dark fixed-top\">
    <a class=\"navbar-brand hidden-sm-down\" href=\"{{ path('jury_index') }}\">DOMjudge</a>
    <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#menuDefault\" aria-controls=\"menuDefault\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
        <span class=\"navbar-toggler-icon\"></span>
    </button>

    <div class=\"collapse navbar-collapse\" id=\"menuDefault\" data-update-url=\"{{ path('jury_ajax_updates') }}\">
        <ul class=\"navbar-nav mr-auto\">

            {% if is_granted('ROLE_BALLOON') and not is_granted('ROLE_JURY') and not is_granted('ROLE_ADMIN') %}
                <li class=\"nav-item\">
                    <a class=\"nav-link\" href=\"{{ path('jury_balloons') }}\"><i class=\"fas fa-map-marker-alt\"></i> balloons</a>
                </li>
            {% endif %}

            {% if is_granted('ROLE_ADMIN') %}
                <li class=\"nav-item dropdown\">
                    <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"navbarDropdownJudgehosts\" role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                        <i class=\"fas fa-gavel\"></i> judgehosts
                        <span class=\"badge badge-warning\" id=\"num-alerts-judgehosts\"></span>
                        <span class=\"badge badge-danger\" id=\"num-alerts-internalerrors\"></span>
                    </a>
                    <div class=\"dropdown-menu\" aria-labelledby=\"navbarDropdown\">
                        <a class=\"dropdown-item\" href=\"{{ path('jury_judgehosts') }}\" id=\"menu_judgehosts\">
                            <i class=\"fas fa-server fa-fw\"></i> judgehosts <span class=\"badge badge-warning\" id=\"num-alerts-judgehosts-sub\"></span>
                        </a>
                        <a class=\"dropdown-item dropdown-disabled\" href=\"{{ path('jury_internal_errors') }}\" id=\"menu_internal_error\">
                            <i class=\"fas fa-bolt fa-fw\"></i> internal error <span class=\"badge badge-danger\" id=\"num-alerts-internalerrors-sub\"></span>
                        </a>
                    </div>
                </li>
            {% endif %}

            {% if is_granted('ROLE_JURY') %}
                <li class=\"nav-item\">
                    <a class=\"nav-link\" href=\"{{ path('jury_clarifications') }}\" id=\"menu_clarifications\"><i class=\"fas fa-comments\"></i> clarifications <span class=\"badge badge-info\" id=\"num-alerts-clarifications\"></span></a>
                </li>


                <li class=\"nav-item\">
                    <a class=\"nav-link\" href=\"{{ path('jury_submissions') }}\"><i class=\"fas fa-file-code\"></i> submissions</a>
                </li>

                {% if show_shadow_differences %}
                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"{{ path('jury_shadow_differences') }}\"><i class=\"fas fa-not-equal\"></i> shadow differences</a>
                    </li>
                {% endif %}

                <li class=\"nav-item\">
                    <a class=\"nav-link\" href=\"{{ path('jury_rejudgings') }}\" id=\"menu_rejudgings\"><i class=\"fas fa-sync\"></i> rejudgings <span class=\"badge badge-info\" id=\"num-alerts-rejudgings\"></span></a>
                </li>
            {% endif %}

            {% if is_granted('ROLE_JURY') %}
                <li class=\"nav-item\">
                    <a class=\"nav-link\" href=\"{{ path('jury_scoreboard') }}\"><i class=\"fas fa-list-ol\"></i> scoreboard</a>
                </li>
            {% endif %}
            {% if is_granted('ROLE_TEAM') %}
                <li class=\"nav-item\">
                    <a class=\"nav-link\" target=\"_top\" href=\"{{ path('team_index') }}\"><i class=\"fas fa-arrow-right\"></i> team</a>
                </li>
            {% endif %}
        </ul>

        <ul class=\"navbar-nav ml-auto\">
            {# Render user information + logout button #}
            {% if is_granted('IS_AUTHENTICATED_FULLY') %}
                <li class=\"nav-item dropdown\">
                    <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"navbarDropdown\" role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                        <i class=\"fas fa-user\"></i> {{ app.user.getUsername() }}
                    </a>
                    <div class=\"dropdown-menu\" aria-labelledby=\"navbarDropdown\">
                        {% if app.user and app.user.getName() %}
                            <a class=\"dropdown-item disabled\" href=\"#\">{{ app.user.getName() }}</a>
                        {% endif %}

                        <a class=\"dropdown-item d-none\" href=\"#\" id=\"notify_disable\">
                            <i class=\"fas fa-bell-slash fa-fw\"></i> Disable Notifications
                        </a>
                        <a class=\"dropdown-item d-none\" href=\"#\" id=\"notify_enable\">
                            <i class=\"fas fa-bell fa-fw\"></i> Enable Notifications
                        </a>

                        {% if refresh is defined and refresh %}
                            <a class=\"dropdown-item\" href=\"#\" id=\"refresh-navitem\">
                                <i class=\"fas fa-sync-alt fa-fw\"></i> <span id=\"refresh-toggle\">
                  {% if refresh_flag %}
                      Disable Refresh
                  {% else %}
                      Enable Refresh
                  {% endif %}
                </span>
                                {% if refresh %}
                                    <span class=\"small text-muted\">({{ refresh.after }}s)</span>
                                {% endif %}
                            </a>
                        {% endif %}

                        <a class=\"dropdown-item\" href=\"{{ path('logout') }}\"><i class=\"fas fa-sign-out-alt fa-fw\"></i>Logout </a>
                    </div>
                </li>
            {% else %}
                <li class=\"nav-item\">
                    <a class=\"nav-link\" target=\"_top\" href=\"{{ path('login') }}\"><i class=\"fas fa-sign-in-alt fa-fw\"></i> log in</a>
                </li>
            {% endif %}

            {% include 'partials/menu_change_contest.html.twig' with {contest: current_contest, contests: current_contests, change_path: 'jury_change_contest', show_no_contest: true} %}
        </ul>
        {% include 'partials/menu_countdown.html.twig' with {contest: current_contest} %}
    </div>
</nav>
", "jury/menu.html.twig", "/opt/domjudge/domserver/webapp/templates/jury/menu.html.twig");
    }
}
