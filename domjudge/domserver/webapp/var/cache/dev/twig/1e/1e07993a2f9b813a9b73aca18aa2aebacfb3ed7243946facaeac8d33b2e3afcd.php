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

/* partials/javascript_language_detect.html.twig */
class __TwigTemplate_c7feb97a877b88dee74df20826e68b6597051f0d1a4efda724199121ccfd0375 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "partials/javascript_language_detect.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "partials/javascript_language_detect.html.twig"));

        // line 2
        echo "<script>
    function getMainExtension(ext) {
        switch (ext) {
                ";
        // line 5
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["submission_languages"]) || array_key_exists("submission_languages", $context) ? $context["submission_languages"] : (function () { throw new RuntimeError('Variable "submission_languages" does not exist.', 5, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 6
            echo "                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["language"], "extensions", [], "any", false, false, false, 6));
            foreach ($context['_seq'] as $context["_key"] => $context["extension"]) {
                // line 7
                echo "            case '";
                echo twig_escape_filter($this->env, $context["extension"], "html", null, true);
                echo "':
                return '";
                // line 8
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["language"], "langid", [], "any", false, false, false, 8), "html", null, true);
                echo "';
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['extension'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 10
            echo "                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 11
        echo "            default:
                return '';
        }
    }

    function getEntryPoint(mainext) {
        switch (mainext) {
                ";
        // line 18
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["submission_languages"]) || array_key_exists("submission_languages", $context) ? $context["submission_languages"] : (function () { throw new RuntimeError('Variable "submission_languages" does not exist.', 18, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 19
            echo "                ";
            if (twig_get_attribute($this->env, $this->source, $context["language"], "requireEntryPoint", [], "any", false, false, false, 19)) {
                // line 20
                echo "            case '";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["language"], "langid", [], "any", false, false, false, 20), "html", null, true);
                echo "':
                return '";
                // line 21
                echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, $context["language"], "entryPointDescription", [], "any", true, true, false, 21)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, $context["language"], "entryPointDescription", [], "any", false, false, false, 21), "Entry point")) : ("Entry point")), "html", null, true);
                echo "';
                ";
            }
            // line 23
            echo "                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 24
        echo "            default:
                return '';
        }
    }
</script>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "partials/javascript_language_detect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  108 => 24,  102 => 23,  97 => 21,  92 => 20,  89 => 19,  85 => 18,  76 => 11,  70 => 10,  62 => 8,  57 => 7,  52 => 6,  48 => 5,  43 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("{# @var language \\App\\Entity\\Language #}
<script>
    function getMainExtension(ext) {
        switch (ext) {
                {% for language in submission_languages %}
                {% for extension in language.extensions %}
            case '{{ extension }}':
                return '{{ language.langid }}';
                {% endfor %}
                {% endfor %}
            default:
                return '';
        }
    }

    function getEntryPoint(mainext) {
        switch (mainext) {
                {% for language in submission_languages %}
                {% if language.requireEntryPoint %}
            case '{{ language.langid }}':
                return '{{ language.entryPointDescription | default('Entry point') }}';
                {% endif %}
                {% endfor %}
            default:
                return '';
        }
    }
</script>
", "partials/javascript_language_detect.html.twig", "/opt/domjudge/domserver/webapp/templates/partials/javascript_language_detect.html.twig");
    }
}
