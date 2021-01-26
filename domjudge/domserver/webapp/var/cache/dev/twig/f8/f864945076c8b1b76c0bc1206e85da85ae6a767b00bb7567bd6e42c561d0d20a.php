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

/* jury/partials/country_select.html.twig */
class __TwigTemplate_c3f6f1783d2f0e75d0261023235ffb32601ecb65a2b8053f9fc8030b29944e84 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "jury/partials/country_select.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "jury/partials/country_select.html.twig"));

        // line 1
        echo "<script>
    var template = function(element) {
        var imgBase = '';
        ";
        // line 4
        $context["countryFlag"] = "images/countries/NLD.png";
        // line 5
        echo "        ";
        if ($this->extensions['App\Twig\TwigExtension']->assetExists((isset($context["countryFlag"]) || array_key_exists("countryFlag", $context) ? $context["countryFlag"] : (function () { throw new RuntimeError('Variable "countryFlag" does not exist.', 5, $this->source); })()))) {
            // line 6
            echo "        // Use a country flag we know exists to automatically determine base path and asset version
        imgBase = \"";
            // line 7
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl((isset($context["countryFlag"]) || array_key_exists("countryFlag", $context) ? $context["countryFlag"] : (function () { throw new RuntimeError('Variable "countryFlag" does not exist.', 7, $this->source); })())), "html", null, true);
            echo "\";
        ";
        }
        // line 9
        echo "
        var img = element.id == undefined || element.id == \"\" || imgBase == \"\"
            ? ''
            : '<img src=\"' + imgBase.replace(\"NLD.png\", element.id + \".png\", 1) + '\" class=\"countryflag\">&nbsp;';

        return img + element.text;
    };

    \$('";
        // line 17
        echo twig_escape_filter($this->env, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 17, $this->source); })()), "html", null, true);
        echo "').select2({
        templateResult: template,
        templateSelection: template,

        // Prevent escaping
        escapeMarkup: function(t) {
            return t;
        },
        theme: \"bootstrap\"
    });

</script>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "jury/partials/country_select.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  71 => 17,  61 => 9,  56 => 7,  53 => 6,  50 => 5,  48 => 4,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<script>
    var template = function(element) {
        var imgBase = '';
        {% set countryFlag = 'images/countries/NLD.png' %}
        {% if countryFlag | assetExists %}
        // Use a country flag we know exists to automatically determine base path and asset version
        imgBase = \"{{ asset(countryFlag) }}\";
        {% endif %}

        var img = element.id == undefined || element.id == \"\" || imgBase == \"\"
            ? ''
            : '<img src=\"' + imgBase.replace(\"NLD.png\", element.id + \".png\", 1) + '\" class=\"countryflag\">&nbsp;';

        return img + element.text;
    };

    \$('{{ field }}').select2({
        templateResult: template,
        templateSelection: template,

        // Prevent escaping
        escapeMarkup: function(t) {
            return t;
        },
        theme: \"bootstrap\"
    });

</script>
", "jury/partials/country_select.html.twig", "/opt/domjudge/domserver/webapp/templates/jury/partials/country_select.html.twig");
    }
}
