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

/* security/register.html.twig */
class __TwigTemplate_b4285ae30112a469c7c4bdac62cdf6f3309d648c098c303b3dbb6f6bc63b6784 extends \Twig\Template
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
            'body' => [$this, 'block_body'],
            'extrafooter' => [$this, 'block_extrafooter'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/register.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/register.html.twig"));

        // line 2
        $macros["macros"] = $this->macros["macros"] = $this->loadTemplate("jury/jury_macros.twig", "security/register.html.twig", 2)->unwrap();
        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "security/register.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 4
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Register Account";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 6
    public function block_extrahead($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "extrahead"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "extrahead"));

        // line 7
        echo "    ";
        $this->displayParentBlock("extrahead", $context, $blocks);
        echo "
    ";
        // line 8
        echo twig_call_macro($macros["macros"], "macro_select2_extrahead", [], 8, $context, $this->getSourceContext());
        echo "
    <link rel=\"stylesheet\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("style_login.css"), "html", null, true);
        echo "\">
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 12
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 13
        echo "    <div class=\"additional-logins\">

        ";
        // line 15
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["registration_form"]) || array_key_exists("registration_form", $context) ? $context["registration_form"] : (function () { throw new RuntimeError('Variable "registration_form" does not exist.', 15, $this->source); })()), 'form_start', ["attr" => ["class" => "form-signin"]]);
        echo "
        <h1 class=\"h3 mb-3 font-weight-normal\">Register Account</h1>
        <div class=\"mb-2\">
            Enter the following information to register your account with DOMjudge.
        </div>
        ";
        // line 21
        echo "        ";
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["registration_form"]) || array_key_exists("registration_form", $context) ? $context["registration_form"] : (function () { throw new RuntimeError('Variable "registration_form" does not exist.', 21, $this->source); })()), 'form_end');
        echo "
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 25
    public function block_extrafooter($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "extrafooter"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "extrafooter"));

        // line 26
        echo "    <script>
        \$(function () {
            \$('#user_registration_existingAffiliation').select2();

            var \$affiliationRadios = \$('[name=\"user_registration[affiliation]\"]');

            if (\$affiliationRadios.length) {
                \$affiliationRadios.on('change', function () {
                    var \$affiliationNameGroup = \$('#user_registration_affiliationName').closest('.form-group');
                    var \$affiliationCountryGroup = \$('#user_registration_affiliationCountry').closest('.form-group');
                    var \$existingAffiliationGroup = \$('#user_registration_existingAffiliation').closest('.form-group');
                    var value = \$affiliationRadios.filter(':checked').val();

                    switch (value) {
                        case 'none':
                            \$affiliationNameGroup.hide();
                            \$affiliationCountryGroup.hide();
                            \$existingAffiliationGroup.hide();
                            break;
                        case 'new':
                            \$affiliationNameGroup.show();
                            \$affiliationCountryGroup.show();
                            \$existingAffiliationGroup.hide();
                            break;
                        case 'existing':
                            \$affiliationNameGroup.hide();
                            \$affiliationCountryGroup.hide();
                            \$existingAffiliationGroup.show();
                            break;
                    }
                });

                var \$checkedRadio = \$affiliationRadios.filter(':checked');
                if (\$checkedRadio.length === 0) {
                    \$affiliationRadios.first().prop('checked', true);
                }

                \$affiliationRadios.change();
            }
        });
    </script>

    ";
        // line 68
        $this->loadTemplate("jury/partials/country_select.html.twig", "security/register.html.twig", 68)->display(twig_array_merge($context, ["field" => "#user_registration_affiliationCountry"]));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "security/register.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  204 => 68,  160 => 26,  150 => 25,  136 => 21,  128 => 15,  124 => 13,  114 => 12,  102 => 9,  98 => 8,  93 => 7,  83 => 6,  64 => 4,  53 => 1,  51 => 2,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"base.html.twig\" %}
{% import \"jury/jury_macros.twig\" as macros %}

{% block title %}Register Account{% endblock %}

{% block extrahead %}
    {{ parent() }}
    {{ macros.select2_extrahead() }}
    <link rel=\"stylesheet\" href=\"{{ asset('style_login.css') }}\">
{% endblock %}

{% block body %}
    <div class=\"additional-logins\">

        {{ form_start(registration_form, { 'attr': {'class': 'form-signin'} }) }}
        <h1 class=\"h3 mb-3 font-weight-normal\">Register Account</h1>
        <div class=\"mb-2\">
            Enter the following information to register your account with DOMjudge.
        </div>
        {# Form elements will be renderd automatically #}
        {{ form_end(registration_form) }}
    </div>
{% endblock %}

{% block extrafooter %}
    <script>
        \$(function () {
            \$('#user_registration_existingAffiliation').select2();

            var \$affiliationRadios = \$('[name=\"user_registration[affiliation]\"]');

            if (\$affiliationRadios.length) {
                \$affiliationRadios.on('change', function () {
                    var \$affiliationNameGroup = \$('#user_registration_affiliationName').closest('.form-group');
                    var \$affiliationCountryGroup = \$('#user_registration_affiliationCountry').closest('.form-group');
                    var \$existingAffiliationGroup = \$('#user_registration_existingAffiliation').closest('.form-group');
                    var value = \$affiliationRadios.filter(':checked').val();

                    switch (value) {
                        case 'none':
                            \$affiliationNameGroup.hide();
                            \$affiliationCountryGroup.hide();
                            \$existingAffiliationGroup.hide();
                            break;
                        case 'new':
                            \$affiliationNameGroup.show();
                            \$affiliationCountryGroup.show();
                            \$existingAffiliationGroup.hide();
                            break;
                        case 'existing':
                            \$affiliationNameGroup.hide();
                            \$affiliationCountryGroup.hide();
                            \$existingAffiliationGroup.show();
                            break;
                    }
                });

                var \$checkedRadio = \$affiliationRadios.filter(':checked');
                if (\$checkedRadio.length === 0) {
                    \$affiliationRadios.first().prop('checked', true);
                }

                \$affiliationRadios.change();
            }
        });
    </script>

    {% include 'jury/partials/country_select.html.twig' with {field: '#user_registration_affiliationCountry'} %}
{% endblock %}
", "security/register.html.twig", "/opt/domjudge/domserver/webapp/templates/security/register.html.twig");
    }
}
