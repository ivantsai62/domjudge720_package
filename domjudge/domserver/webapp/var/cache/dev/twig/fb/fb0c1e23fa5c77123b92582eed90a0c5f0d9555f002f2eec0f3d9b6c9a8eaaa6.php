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

/* partials/menu_countdown.html.twig */
class __TwigTemplate_50d13260a62388134040f56d1bbea8ce36d0dc0c8faa121c931394605f3d0f21 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "partials/menu_countdown.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "partials/menu_countdown.html.twig"));

        // line 1
        echo "<div class=\"navbar-text\" style=\"white-space:nowrap;\">
    <span style=\"padding-left: 10px;\">
        <i class=\"fas fa-clock loading-indicator\"></i>
    </span>
    ";
        // line 5
        $context["now"] = twig_date_format_filter($this->env, "now", "U");
        // line 6
        echo "    <span id=\"timeleft\">";
        // line 7
        if ((null === (isset($context["contest"]) || array_key_exists("contest", $context) ? $context["contest"] : (function () { throw new RuntimeError('Variable "contest" does not exist.', 7, $this->source); })()))) {
            // line 8
            echo "no contest";
        } else {
            // line 10
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["contest"]) || array_key_exists("contest", $context) ? $context["contest"] : (function () { throw new RuntimeError('Variable "contest" does not exist.', 10, $this->source); })()), "countdown", [], "any", false, false, false, 10), "html", null, true);
        }
        // line 12
        echo "</span>
</div>

<script>
    var initial = ";
        // line 16
        echo twig_escape_filter($this->env, (isset($context["now"]) || array_key_exists("now", $context) ? $context["now"] : (function () { throw new RuntimeError('Variable "now" does not exist.', 16, $this->source); })()), "html", null, true);
        echo ";
    var localInitial = new Date().getTime();
    var activatetime = ";
        // line 18
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["contest"] ?? null), "activatetime", [], "any", true, true, false, 18)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["contest"] ?? null), "activatetime", [], "any", false, false, false, 18),  -1)) : ( -1)), "html", null, true);
        echo ";
    var starttime = ";
        // line 19
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["contest"] ?? null), "starttime", [], "any", true, true, false, 19)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["contest"] ?? null), "starttime", [], "any", false, false, false, 19),  -1)) : ( -1)), "html", null, true);
        echo ";
    var endtime = ";
        // line 20
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["contest"] ?? null), "endtime", [], "any", true, true, false, 20)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["contest"] ?? null), "endtime", [], "any", false, false, false, 20),  -1)) : ( -1)), "html", null, true);
        echo ";
    var clientOffset = localInitial - new Date(initial * 1000).getTime();
    var timeleftelt = document.getElementById(\"timeleft\");

    setInterval(function () {
        updateClock();
    }, 1000);
    updateClock();
</script>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "partials/menu_countdown.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  80 => 20,  76 => 19,  72 => 18,  67 => 16,  61 => 12,  58 => 10,  55 => 8,  53 => 7,  51 => 6,  49 => 5,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"navbar-text\" style=\"white-space:nowrap;\">
    <span style=\"padding-left: 10px;\">
        <i class=\"fas fa-clock loading-indicator\"></i>
    </span>
    {% set now = 'now'|date('U') %}
    <span id=\"timeleft\">
        {%- if contest is null -%}
          no contest
        {%- else -%}
            {{ contest.countdown }}
        {%- endif -%}
    </span>
</div>

<script>
    var initial = {{ now }};
    var localInitial = new Date().getTime();
    var activatetime = {{ contest.activatetime|default(-1) }};
    var starttime = {{ contest.starttime|default(-1) }};
    var endtime = {{ contest.endtime|default(-1) }};
    var clientOffset = localInitial - new Date(initial * 1000).getTime();
    var timeleftelt = document.getElementById(\"timeleft\");

    setInterval(function () {
        updateClock();
    }, 1000);
    updateClock();
</script>
", "partials/menu_countdown.html.twig", "/opt/domjudge/domserver/webapp/templates/partials/menu_countdown.html.twig");
    }
}
