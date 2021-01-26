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

/* jury/partials/rejudging_buttons.html.twig */
class __TwigTemplate_591a8773e65670dfb7f3165e7d1df97341f3387a44902fa1510e645164ee2a37 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "jury/partials/rejudging_buttons.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "jury/partials/rejudging_buttons.html.twig"));

        // line 1
        if ( !twig_get_attribute($this->env, $this->source, (isset($context["rejudging"]) || array_key_exists("rejudging", $context) ? $context["rejudging"] : (function () { throw new RuntimeError('Variable "rejudging" does not exist.', 1, $this->source); })()), "endtime", [], "any", false, false, false, 1)) {
            // line 2
            echo "    <div>
        ";
            // line 3
            echo $this->extensions['App\Twig\TwigExtension']->button($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_rejudging_finish", ["rejudgingId" => twig_get_attribute($this->env, $this->source, (isset($context["rejudging"]) || array_key_exists("rejudging", $context) ? $context["rejudging"] : (function () { throw new RuntimeError('Variable "rejudging" does not exist.', 3, $this->source); })()), "rejudgingid", [], "any", false, false, false, 3), "action" => "cancel"]), "Cancel rejudging", "danger", "times");
            echo "
        ";
            // line 4
            if (((isset($context["todo"]) || array_key_exists("todo", $context) ? $context["todo"] : (function () { throw new RuntimeError('Variable "todo" does not exist.', 4, $this->source); })()) == 0)) {
                // line 5
                echo "            ";
                echo $this->extensions['App\Twig\TwigExtension']->button($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_rejudging_finish", ["rejudgingId" => twig_get_attribute($this->env, $this->source, (isset($context["rejudging"]) || array_key_exists("rejudging", $context) ? $context["rejudging"] : (function () { throw new RuntimeError('Variable "rejudging" does not exist.', 5, $this->source); })()), "rejudgingid", [], "any", false, false, false, 5), "action" => "apply"]), "Apply rejudging", "success", "check");
                echo "
        ";
            }
            // line 7
            echo "    </div>
";
        } else {
            // line 9
            echo "    <div>
        <button type=\"button\" class=\"btn btn-primary\" data-toggle=\"modal\" data-target=\"#rejudge-modal\">
            <i class=\"fas fa-sync\"></i> Repeat rejudging
        </button>
    </div>

    <div class=\"modal fade\" id=\"rejudge-modal\" tabindex=\"-1\" role=\"dialog\" aria-hidden=\"true\">
        <div class=\"modal-dialog\" role=\"document\">
            <div class=\"modal-content\">
                <div class=\"modal-header\">
                    <h5 class=\"modal-title\">Repeat rejudging</h5>
                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                        <span aria-hidden=\"true\">&times;</span>
                    </button>
                </div>
                <form action=\"";
            // line 24
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_create_rejudge");
            echo "\" method=\"post\">
                    <div class=\"modal-body\">
                        <input type=\"hidden\" name=\"table\" value=\"rejudging\"/>
                        <input type=\"hidden\" name=\"id\" value=\"";
            // line 27
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["rejudging"]) || array_key_exists("rejudging", $context) ? $context["rejudging"] : (function () { throw new RuntimeError('Variable "rejudging" does not exist.', 27, $this->source); })()), "rejudgingid", [], "any", false, false, false, 27), "html", null, true);
            echo "\"/>
                        This will create a new rejudging with the same submissions as this rejudging.
                    </div>
                    <div class=\"modal-footer\">
                        <button type=\"button\" class=\"btn btn-secondary\" data-dismiss=\"modal\">Cancel</button>
                        <input type=\"submit\" value=\"Repeat rejudging\" class=\"btn btn-primary\"/>
                    </div>
                </form>
            </div>
        </div>
    </div>
";
        }
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "jury/partials/rejudging_buttons.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  87 => 27,  81 => 24,  64 => 9,  60 => 7,  54 => 5,  52 => 4,  48 => 3,  45 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% if not rejudging.endtime %}
    <div>
        {{ button(path('jury_rejudging_finish', {rejudgingId: rejudging.rejudgingid, action: 'cancel'}), 'Cancel rejudging', 'danger', 'times') }}
        {% if todo == 0 %}
            {{ button(path('jury_rejudging_finish', {rejudgingId: rejudging.rejudgingid, action: 'apply'}), 'Apply rejudging', 'success', 'check') }}
        {% endif %}
    </div>
{% else %}
    <div>
        <button type=\"button\" class=\"btn btn-primary\" data-toggle=\"modal\" data-target=\"#rejudge-modal\">
            <i class=\"fas fa-sync\"></i> Repeat rejudging
        </button>
    </div>

    <div class=\"modal fade\" id=\"rejudge-modal\" tabindex=\"-1\" role=\"dialog\" aria-hidden=\"true\">
        <div class=\"modal-dialog\" role=\"document\">
            <div class=\"modal-content\">
                <div class=\"modal-header\">
                    <h5 class=\"modal-title\">Repeat rejudging</h5>
                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                        <span aria-hidden=\"true\">&times;</span>
                    </button>
                </div>
                <form action=\"{{ path('jury_create_rejudge') }}\" method=\"post\">
                    <div class=\"modal-body\">
                        <input type=\"hidden\" name=\"table\" value=\"rejudging\"/>
                        <input type=\"hidden\" name=\"id\" value=\"{{ rejudging.rejudgingid }}\"/>
                        This will create a new rejudging with the same submissions as this rejudging.
                    </div>
                    <div class=\"modal-footer\">
                        <button type=\"button\" class=\"btn btn-secondary\" data-dismiss=\"modal\">Cancel</button>
                        <input type=\"submit\" value=\"Repeat rejudging\" class=\"btn btn-primary\"/>
                    </div>
                </form>
            </div>
        </div>
    </div>
{% endif %}
", "jury/partials/rejudging_buttons.html.twig", "/opt/domjudge/domserver/webapp/templates/jury/partials/rejudging_buttons.html.twig");
    }
}
