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

/* jury/partials/rejudging_submissions.html.twig */
class __TwigTemplate_c9975f5a9cc9e643f02897904b06cdf5a9922ffc2e8b40ea425f87f19ba557e8 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "jury/partials/rejudging_submissions.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "jury/partials/rejudging_submissions.html.twig"));

        // line 1
        if (((isset($context["ajax"]) || array_key_exists("ajax", $context)) && (isset($context["ajax"]) || array_key_exists("ajax", $context) ? $context["ajax"] : (function () { throw new RuntimeError('Variable "ajax" does not exist.', 1, $this->source); })()))) {
            // line 2
            echo "    <span class=\"d-none\" data-new-todo>
        ";
            // line 3
            echo twig_escape_filter($this->env, (isset($context["todo"]) || array_key_exists("todo", $context) ? $context["todo"] : (function () { throw new RuntimeError('Variable "todo" does not exist.', 3, $this->source); })()), "html", null, true);
            echo "
    </span>
    <div class=\"d-none\" data-new-rejudging-buttons>
        ";
            // line 6
            $this->loadTemplate("jury/partials/rejudging_buttons.html.twig", "jury/partials/rejudging_submissions.html.twig", 6)->display($context);
            // line 7
            echo "    </div>
    <div class=\"d-none\" data-new-rejudging-matrix>
        ";
            // line 9
            $this->loadTemplate("jury/partials/rejudging_matrix.html.twig", "jury/partials/rejudging_submissions.html.twig", 9)->display($context);
            // line 10
            echo "    </div>
";
        }
        // line 13
        $this->loadTemplate("jury/partials/submission_list.html.twig", "jury/partials/rejudging_submissions.html.twig", 13)->display(twig_array_merge($context, ["showContest" => true]));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "jury/partials/rejudging_submissions.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  66 => 13,  62 => 10,  60 => 9,  56 => 7,  54 => 6,  48 => 3,  45 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% if ajax is defined and ajax %}
    <span class=\"d-none\" data-new-todo>
        {{ todo }}
    </span>
    <div class=\"d-none\" data-new-rejudging-buttons>
        {% include 'jury/partials/rejudging_buttons.html.twig' %}
    </div>
    <div class=\"d-none\" data-new-rejudging-matrix>
        {% include 'jury/partials/rejudging_matrix.html.twig' %}
    </div>
{% endif %}

{%- include 'jury/partials/submission_list.html.twig' with {showContest: true} %}
", "jury/partials/rejudging_submissions.html.twig", "/opt/domjudge/domserver/webapp/templates/jury/partials/rejudging_submissions.html.twig");
    }
}
