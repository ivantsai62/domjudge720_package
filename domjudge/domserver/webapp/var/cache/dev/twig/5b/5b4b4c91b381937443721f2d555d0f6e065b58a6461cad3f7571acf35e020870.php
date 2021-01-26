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

/* jury/index.html.twig */
class __TwigTemplate_33401865cb7eecc9d12e427d6af5074a41113821d728278cfa2c8fb8cd673432 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'extrahead' => [$this, 'block_extrahead'],
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "jury/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "jury/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "jury/index.html.twig"));

        $this->parent = $this->loadTemplate("jury/base.html.twig", "jury/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo " - Jury Interface";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_extrahead($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "extrahead"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "extrahead"));

        // line 6
        $this->displayParentBlock("extrahead", $context, $blocks);
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 9
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 10
        echo "<h1>DOMjudge Jury interface 123</h1>

";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["errors"]) || array_key_exists("errors", $context) ? $context["errors"] : (function () { throw new RuntimeError('Variable "errors" does not exist.', 12, $this->source); })()));
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
        foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
            // line 13
            echo "    ";
            $this->loadTemplate("partials/alert.html.twig", "jury/index.html.twig", 13)->display(twig_array_merge($context, ["type" => "danger", "message" => $context["error"]]));
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 15
        echo "
<a href=\"https://www.domjudge.org/\">
  <img src=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/DOMjudgelogo.png"), "html", null, true);
        echo "\" id=\"djlogo\" alt=\"DOMjudge logo\" class=\"float-right d-none d-md-block\" title=\"The DOMjudge logo: free as in beer!\" />
</a>

<div class=\"row equal mt-3\">
    <div class=\"col-lg-4 col-md-5 col-sm-6 mt-3\">
        ";
        // line 22
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_JURY")) {
            // line 23
            echo "        <div class=\"card mb-3\">
            <div class=\"card-header\">
                Before contest:
            </div>
            <div class=\"card-body\">
                <ul>
                    <li><a href=\"";
            // line 29
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_contests");
            echo "\">Contests</a></li>
                    <li><a href=\"";
            // line 30
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_executables");
            echo "\">Executables</a></li>
                    <li><a href=\"";
            // line 31
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_judgehosts");
            echo "\">Judgehosts</a></li>
                    <li><a href=\"";
            // line 32
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_judgehost_restrictions");
            echo "\">Judgehost Restrictions</a></li>
                    <li><a href=\"";
            // line 33
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_languages");
            echo "\">Languages</a></li>
                    <li><a href=\"";
            // line 34
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_problems");
            echo "\">Problems</a></li>
                    <li><a href=\"";
            // line 35
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_users");
            echo "\">Users</a></li>
                    <li><a href=\"";
            // line 36
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_teams");
            echo "\">Teams</a></li>
                    <li><a href=\"";
            // line 37
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_team_categories");
            echo "\">Team Categories</a></li>
                    <li><a href=\"";
            // line 38
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_team_affiliations");
            echo "\">Team Affiliations</a></li>
                </ul>
            </div>
        </div>
        ";
        }
        // line 43
        echo "
        <div class=\"card mb-3\">
            <div class=\"card-header\">
                During contest:
            </div>
            <div class=\"card-body\">
                <ul>
                    <li><a href=\"";
        // line 50
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_balloons");
        echo "\">Balloon Status</a></li>
                    ";
        // line 51
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_JURY")) {
            // line 52
            echo "                        <li><a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_clarifications");
            echo "\">Clarifications</a></li>
                        <li><a href=\"";
            // line 53
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_internal_errors");
            echo "\">Internal Errors</a></li>
                    ";
        }
        // line 55
        echo "                    ";
        if ((isset($context["have_printing"]) || array_key_exists("have_printing", $context) ? $context["have_printing"] : (function () { throw new RuntimeError('Variable "have_printing" does not exist.', 55, $this->source); })())) {
            // line 56
            echo "                        <li><a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_print");
            echo "\">Print</a></li>
                    ";
        }
        // line 58
        echo "                    ";
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_JURY")) {
            // line 59
            echo "                        <li><a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_rejudgings");
            echo "\">Rejudgings</a></li>
                        <li><a href=\"";
            // line 60
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_scoreboard");
            echo "\">Scoreboard</a></li>
                        <li><a href=\"";
            // line 61
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("analysis_index");
            echo "\">Statistics/Analysis</a></li>
                        <li><a href=\"";
            // line 62
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_submissions");
            echo "\">Submissions</a></li>
                        ";
            // line 63
            if ((isset($context["show_shadow_differences"]) || array_key_exists("show_shadow_differences", $context) ? $context["show_shadow_differences"] : (function () { throw new RuntimeError('Variable "show_shadow_differences" does not exist.', 63, $this->source); })())) {
                // line 64
                echo "                            <li><a href=\"";
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_shadow_differences");
                echo "\">Shadow Differences</a></li>
                        ";
            }
            // line 66
            echo "                    ";
        }
        // line 67
        echo "                </ul>
            </div>
        </div>
    </div>

  <div class=\"col-lg-4 col-md-5 col-sm-6 mt-3\">
    ";
        // line 73
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 74
            echo "    <div class=\"card mb-3\">
      <div class=\"card-header\">
        Administrator:
      </div>
      <div class=\"card-body\">
        <ul>
          <li><a href=\"";
            // line 80
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_config");
            echo "\">Configuration settings</a></li>
          <li><a href=\"";
            // line 81
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_config_check");
            echo "\">Config checker</a></li>
          <li><a href=\"";
            // line 82
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_import_export");
            echo "\">Import / export</a></li>
          <li><a href=\"";
            // line 83
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_generate_passwords");
            echo "\">Manage team passwords</a></li>
          <li><a href=\"";
            // line 84
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_refresh_cache");
            echo "\">Refresh scoreboard cache</a></li>
          <li><a href=\"";
            // line 85
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_judging_verifier");
            echo "\">Judging verifier</a></li>
          <li><a href=\"";
            // line 86
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_auditlog");
            echo "\">Audit log</a></li>
        </ul>
      </div>
    </div>
    ";
        }
        // line 91
        echo "
    <div class=\"card mb-3\">
      <div class=\"card-header\">
        Documentation:
      </div>
      <div class=\"card-body\">
        <ul>
        <li><a href=\"";
        // line 98
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("doc/manual/build/html/index.html"), "html", null, true);
        echo "\">DOMjudge manual</a></li>
        <li><a href=\"";
        // line 99
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("doc/team/team-manual.pdf"), "html", null, true);
        echo "\">Team manual <i class=\"fas fa-file-pdf\"></i></a></li>
        <li><a href=\"";
        // line 100
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app.swagger_ui");
        echo "\">API documentation</a><br />
            See also the <a href=\"https://clics.ecs.baylor.edu/index.php/Contest_API\">ICPC Contest API</a>.</li>
        </ul>
      </div>
    </div>
  </div>
</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "jury/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  346 => 100,  342 => 99,  338 => 98,  329 => 91,  321 => 86,  317 => 85,  313 => 84,  309 => 83,  305 => 82,  301 => 81,  297 => 80,  289 => 74,  287 => 73,  279 => 67,  276 => 66,  270 => 64,  268 => 63,  264 => 62,  260 => 61,  256 => 60,  251 => 59,  248 => 58,  242 => 56,  239 => 55,  234 => 53,  229 => 52,  227 => 51,  223 => 50,  214 => 43,  206 => 38,  202 => 37,  198 => 36,  194 => 35,  190 => 34,  186 => 33,  182 => 32,  178 => 31,  174 => 30,  170 => 29,  162 => 23,  160 => 22,  152 => 17,  148 => 15,  133 => 13,  116 => 12,  112 => 10,  102 => 9,  90 => 6,  80 => 5,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"jury/base.html.twig\" %}

{% block title %}{{ parent() }} - Jury Interface{% endblock %}

{% block extrahead %}
{{ parent() }}
{% endblock %}

{% block content %}
<h1>DOMjudge Jury interface 123</h1>

{% for error in errors %}
    {% include 'partials/alert.html.twig' with {type: 'danger', message: error} %}
{% endfor %}

<a href=\"https://www.domjudge.org/\">
  <img src=\"{{ asset('images/DOMjudgelogo.png') }}\" id=\"djlogo\" alt=\"DOMjudge logo\" class=\"float-right d-none d-md-block\" title=\"The DOMjudge logo: free as in beer!\" />
</a>

<div class=\"row equal mt-3\">
    <div class=\"col-lg-4 col-md-5 col-sm-6 mt-3\">
        {% if is_granted('ROLE_JURY') %}
        <div class=\"card mb-3\">
            <div class=\"card-header\">
                Before contest:
            </div>
            <div class=\"card-body\">
                <ul>
                    <li><a href=\"{{ path('jury_contests') }}\">Contests</a></li>
                    <li><a href=\"{{ path('jury_executables') }}\">Executables</a></li>
                    <li><a href=\"{{ path('jury_judgehosts') }}\">Judgehosts</a></li>
                    <li><a href=\"{{ path('jury_judgehost_restrictions') }}\">Judgehost Restrictions</a></li>
                    <li><a href=\"{{ path('jury_languages') }}\">Languages</a></li>
                    <li><a href=\"{{ path('jury_problems') }}\">Problems</a></li>
                    <li><a href=\"{{ path('jury_users') }}\">Users</a></li>
                    <li><a href=\"{{ path('jury_teams') }}\">Teams</a></li>
                    <li><a href=\"{{ path('jury_team_categories') }}\">Team Categories</a></li>
                    <li><a href=\"{{ path('jury_team_affiliations') }}\">Team Affiliations</a></li>
                </ul>
            </div>
        </div>
        {% endif %}

        <div class=\"card mb-3\">
            <div class=\"card-header\">
                During contest:
            </div>
            <div class=\"card-body\">
                <ul>
                    <li><a href=\"{{ path('jury_balloons') }}\">Balloon Status</a></li>
                    {% if is_granted('ROLE_JURY') %}
                        <li><a href=\"{{ path('jury_clarifications') }}\">Clarifications</a></li>
                        <li><a href=\"{{ path('jury_internal_errors') }}\">Internal Errors</a></li>
                    {% endif %}
                    {% if have_printing %}
                        <li><a href=\"{{ path('jury_print') }}\">Print</a></li>
                    {% endif %}
                    {% if is_granted('ROLE_JURY') %}
                        <li><a href=\"{{ path('jury_rejudgings') }}\">Rejudgings</a></li>
                        <li><a href=\"{{ path('jury_scoreboard') }}\">Scoreboard</a></li>
                        <li><a href=\"{{ path('analysis_index') }}\">Statistics/Analysis</a></li>
                        <li><a href=\"{{ path('jury_submissions') }}\">Submissions</a></li>
                        {% if show_shadow_differences %}
                            <li><a href=\"{{ path('jury_shadow_differences') }}\">Shadow Differences</a></li>
                        {% endif %}
                    {% endif %}
                </ul>
            </div>
        </div>
    </div>

  <div class=\"col-lg-4 col-md-5 col-sm-6 mt-3\">
    {% if is_granted('ROLE_ADMIN') %}
    <div class=\"card mb-3\">
      <div class=\"card-header\">
        Administrator:
      </div>
      <div class=\"card-body\">
        <ul>
          <li><a href=\"{{ path('jury_config') }}\">Configuration settings</a></li>
          <li><a href=\"{{ path('jury_config_check') }}\">Config checker</a></li>
          <li><a href=\"{{ path('jury_import_export') }}\">Import / export</a></li>
          <li><a href=\"{{ path('jury_generate_passwords') }}\">Manage team passwords</a></li>
          <li><a href=\"{{ path('jury_refresh_cache') }}\">Refresh scoreboard cache</a></li>
          <li><a href=\"{{ path('jury_judging_verifier') }}\">Judging verifier</a></li>
          <li><a href=\"{{ path('jury_auditlog') }}\">Audit log</a></li>
        </ul>
      </div>
    </div>
    {% endif %}

    <div class=\"card mb-3\">
      <div class=\"card-header\">
        Documentation:
      </div>
      <div class=\"card-body\">
        <ul>
        <li><a href=\"{{ asset('doc/manual/build/html/index.html') }}\">DOMjudge manual</a></li>
        <li><a href=\"{{ asset('doc/team/team-manual.pdf') }}\">Team manual <i class=\"fas fa-file-pdf\"></i></a></li>
        <li><a href=\"{{ path('app.swagger_ui') }}\">API documentation</a><br />
            See also the <a href=\"https://clics.ecs.baylor.edu/index.php/Contest_API\">ICPC Contest API</a>.</li>
        </ul>
      </div>
    </div>
  </div>
</div>
{% endblock %}
", "jury/index.html.twig", "/opt/domjudge/domserver/webapp/templates/jury/index.html.twig");
    }
}
