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

/* jury/partials/team_affiliation_form.html.twig */
class __TwigTemplate_136682eec835d1e63528eb72d304af43679cd7c8a4f3d28e2354b89d933291d1 extends \Twig\Template
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
        // line 1
        echo "<div class=\"row col-lg-4\">
    ";
        // line 2
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form');
        echo "
</div>

";
        // line 5
        $this->loadTemplate("jury/partials/country_select.html.twig", "jury/partials/team_affiliation_form.html.twig", 5)->display(twig_array_merge($context, ["field" => "#team_affiliation_country"]));
    }

    public function getTemplateName()
    {
        return "jury/partials/team_affiliation_form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  46 => 5,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "jury/partials/team_affiliation_form.html.twig", "/opt/domjudge/domserver/webapp/templates/jury/partials/team_affiliation_form.html.twig");
    }
}
