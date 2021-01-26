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

/* partials/javascript_print.html.twig */
class __TwigTemplate_fd221747754879d26e2650c3b49ac854a8faf7a9a4a81ebe188453b6b4fb15c6 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "partials/javascript_print.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "partials/javascript_print.html.twig"));

        // line 1
        echo "<script>
    function detectLanguage(filename) {
        var parts = filename.toLowerCase().split('.').reverse();
        if (parts.length < 2) return;

        // language ID

        var elt = document.getElementById('print_langid');
        // the 'autodetect' option has empty value
        if (elt.value !== '') return;

        var langid = getMainExtension(parts[0]);
        for (var i = 0; i < elt.length; i++) {
            if (elt.options[i].value === langid) {
                elt.selectedIndex = i;
            }
        }

    }
</script>
";
        // line 21
        $this->loadTemplate("partials/javascript_language_detect.html.twig", "partials/javascript_print.html.twig", 21)->display($context);
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "partials/javascript_print.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  65 => 21,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<script>
    function detectLanguage(filename) {
        var parts = filename.toLowerCase().split('.').reverse();
        if (parts.length < 2) return;

        // language ID

        var elt = document.getElementById('print_langid');
        // the 'autodetect' option has empty value
        if (elt.value !== '') return;

        var langid = getMainExtension(parts[0]);
        for (var i = 0; i < elt.length; i++) {
            if (elt.options[i].value === langid) {
                elt.selectedIndex = i;
            }
        }

    }
</script>
{% include 'partials/javascript_language_detect.html.twig' %}
", "partials/javascript_print.html.twig", "/opt/domjudge/domserver/webapp/templates/partials/javascript_print.html.twig");
    }
}
