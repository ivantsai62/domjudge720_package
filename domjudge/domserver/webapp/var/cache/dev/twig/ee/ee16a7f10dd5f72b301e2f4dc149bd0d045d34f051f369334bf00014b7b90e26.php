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

/* partials/scoreboard_progress_bar.html.twig */
class __TwigTemplate_5f8e0a834a4d44892f67230667cce25e6e80729597caa3feaaf13df87374eb62 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "partials/scoreboard_progress_bar.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "partials/scoreboard_progress_bar.html.twig"));

        // line 1
        if ((((isset($context["contest"]) || array_key_exists("contest", $context) ? $context["contest"] : (function () { throw new RuntimeError('Variable "contest" does not exist.', 1, $this->source); })()) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["contest"]) || array_key_exists("contest", $context) ? $context["contest"] : (function () { throw new RuntimeError('Variable "contest" does not exist.', 1, $this->source); })()), "freezeData", [], "any", false, false, false, 1), "started", [], "any", false, false, false, 1)) &&  !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["contest"]) || array_key_exists("contest", $context) ? $context["contest"] : (function () { throw new RuntimeError('Variable "contest" does not exist.', 1, $this->source); })()), "freezeData", [], "any", false, false, false, 1), "stopped", [], "any", false, false, false, 1))) {
            // line 2
            echo "    ";
            $context["percentage"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["contest"]) || array_key_exists("contest", $context) ? $context["contest"] : (function () { throw new RuntimeError('Variable "contest" does not exist.', 2, $this->source); })()), "freezeData", [], "any", false, false, false, 2), "progress", [], "any", false, false, false, 2);
            // line 3
            echo "    <div class=\"progress\" style=\"margin-top:";
            echo twig_escape_filter($this->env, (((isset($context["margin"]) || array_key_exists("margin", $context))) ? (_twig_default_filter((isset($context["margin"]) || array_key_exists("margin", $context) ? $context["margin"] : (function () { throw new RuntimeError('Variable "margin" does not exist.', 3, $this->source); })()), 0)) : (0)), "html", null, true);
            echo "px; height: 10px;\" data-progress-bar>
        <div class=\"progress-bar\" role=\"progressbar\" style=\"width: ";
            // line 4
            echo twig_escape_filter($this->env, (isset($context["percentage"]) || array_key_exists("percentage", $context) ? $context["percentage"] : (function () { throw new RuntimeError('Variable "percentage" does not exist.', 4, $this->source); })()), "html", null, true);
            echo "%;\"
             aria-valuenow=\"";
            // line 5
            echo twig_escape_filter($this->env, (isset($context["percentage"]) || array_key_exists("percentage", $context) ? $context["percentage"] : (function () { throw new RuntimeError('Variable "percentage" does not exist.', 5, $this->source); })()), "html", null, true);
            echo "\" aria-valuemin=\"0\" aria-valuemax=\"100\"></div>
    </div>
";
        }
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "partials/scoreboard_progress_bar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 5,  53 => 4,  48 => 3,  45 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% if contest and contest.freezeData.started and not contest.freezeData.stopped %}
    {% set percentage = contest.freezeData.progress %}
    <div class=\"progress\" style=\"margin-top:{{ margin|default(0) }}px; height: 10px;\" data-progress-bar>
        <div class=\"progress-bar\" role=\"progressbar\" style=\"width: {{ percentage }}%;\"
             aria-valuenow=\"{{ percentage }}\" aria-valuemin=\"0\" aria-valuemax=\"100\"></div>
    </div>
{% endif %}
", "partials/scoreboard_progress_bar.html.twig", "/opt/domjudge/domserver/webapp/templates/partials/scoreboard_progress_bar.html.twig");
    }
}
