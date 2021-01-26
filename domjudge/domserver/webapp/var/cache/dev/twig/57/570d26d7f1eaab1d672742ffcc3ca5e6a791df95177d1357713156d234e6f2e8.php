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

/* jury/partials/language_form.html.twig */
class __TwigTemplate_8d0ffa442c0e3f5f2d05328e572e4b34c99b2f95e1009e7de333ac3a0e803c6c extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "jury/partials/language_form.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "jury/partials/language_form.html.twig"));

        // line 1
        echo "<div class=\"row\">
    <div class=\"col-lg-4\">
        ";
        // line 3
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 3, $this->source); })()), 'form_start');
        echo "
        ";
        // line 4
        if (twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 4, $this->source); })()), "offsetExists", [0 => "langid"], "method", false, false, false, 4)) {
            // line 5
            echo "            ";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 5, $this->source); })()), "langid", [], "any", false, false, false, 5), 'row');
            echo "
        ";
        }
        // line 7
        echo "        ";
        if (twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 7, $this->source); })()), "offsetExists", [0 => "externalid"], "method", false, false, false, 7)) {
            // line 8
            echo "            ";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 8, $this->source); })()), "externalid", [], "any", false, false, false, 8), 'row');
            echo "
        ";
        }
        // line 10
        echo "        ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 10, $this->source); })()), "name", [], "any", false, false, false, 10), 'row');
        echo "
        ";
        // line 11
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 11, $this->source); })()), "requireEntryPoint", [], "any", false, false, false, 11), 'row');
        echo "
        ";
        // line 12
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 12, $this->source); })()), "entryPointDescription", [], "any", false, false, false, 12), 'row');
        echo "
        ";
        // line 13
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 13, $this->source); })()), "allowSubmit", [], "any", false, false, false, 13), 'row');
        echo "
        ";
        // line 14
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 14, $this->source); })()), "allowJudge", [], "any", false, false, false, 14), 'row');
        echo "
        <div class=\"form-group\">
            ";
        // line 16
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 16, $this->source); })()), "timeFactor", [], "any", false, false, false, 16), 'label');
        echo "
            <div class=\"input-group\">
                ";
        // line 18
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 18, $this->source); })()), "timeFactor", [], "any", false, false, false, 18), 'widget');
        echo "
                <div class=\"input-group-append\">
                    <div class=\"input-group-text\">&times;</div>
                </div>
            </div>
        </div>
        ";
        // line 24
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 24, $this->source); })()), "compileExecutable", [], "any", false, false, false, 24), 'row');
        echo "
        ";
        // line 25
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 25, $this->source); })()), "extensions", [], "any", false, false, false, 25), 'row');
        echo "
        ";
        // line 26
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 26, $this->source); })()), "filterCompilerFiles", [], "any", false, false, false, 26), 'row');
        echo "
        ";
        // line 27
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 27, $this->source); })()), 'form_end');
        echo "
    </div>
</div>

<script>
    var \$extensionsHolder;
    var \$addExtensionButton = \$('<button type=\"button\" class=\"btn btn-secondary\"><i class=\"fas fa-plus\"></i></button>');

    \$(function () {
        \$extensionsHolder = \$('div#language_extensions');
        \$extensionsHolder.append(\$addExtensionButton);

        \$extensionsHolder.data('index', \$extensionsHolder.find(':input').length);

        \$addExtensionButton.on('click', function (e) {
            addExtension(\$extensionsHolder, \$addExtensionButton);
        });

        \$extensionsHolder.find('div.form-group').each(function() {
            addDeleteLink(\$(this));
        });

        function addExtension(\$extensionsHolder, \$addExtensionButton) {
            var prototype = \$extensionsHolder.data('prototype');
            var index = \$extensionsHolder.data('index');
            var newForm = prototype;
            newForm = newForm.replace(/__name__/g, index);
            \$extensionsHolder.data('index', index + 1);
            var \$newForm = \$(newForm);
            \$addExtensionButton.before(\$newForm);
            addDeleteLink(\$newForm);
        }

        function addDeleteLink(\$extensionDiv) {
            var \$removeFormButton = \$('<button type=\"button\" class=\"input-group-append btn btn-danger\"><i class=\"fas fa-trash\"></i></button>');
            var \$inputGroup = \$('<div class=\"input-group\"></div>');
            var \$formControl = \$extensionDiv.find('.form-control');
            \$inputGroup.append(\$formControl);
            \$inputGroup.append(\$removeFormButton);
            \$extensionDiv.html(\$inputGroup);

            \$removeFormButton.on('click', function(e) {
                \$extensionDiv.remove();
            });
        }
    });
</script>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "jury/partials/language_form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  116 => 27,  112 => 26,  108 => 25,  104 => 24,  95 => 18,  90 => 16,  85 => 14,  81 => 13,  77 => 12,  73 => 11,  68 => 10,  62 => 8,  59 => 7,  53 => 5,  51 => 4,  47 => 3,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"row\">
    <div class=\"col-lg-4\">
        {{ form_start(form) }}
        {% if form.offsetExists('langid') %}
            {{ form_row(form.langid) }}
        {% endif %}
        {% if form.offsetExists('externalid') %}
            {{ form_row(form.externalid) }}
        {% endif %}
        {{ form_row(form.name) }}
        {{ form_row(form.requireEntryPoint) }}
        {{ form_row(form.entryPointDescription) }}
        {{ form_row(form.allowSubmit) }}
        {{ form_row(form.allowJudge) }}
        <div class=\"form-group\">
            {{ form_label(form.timeFactor) }}
            <div class=\"input-group\">
                {{ form_widget(form.timeFactor) }}
                <div class=\"input-group-append\">
                    <div class=\"input-group-text\">&times;</div>
                </div>
            </div>
        </div>
        {{ form_row(form.compileExecutable) }}
        {{ form_row(form.extensions) }}
        {{ form_row(form.filterCompilerFiles) }}
        {{ form_end(form) }}
    </div>
</div>

<script>
    var \$extensionsHolder;
    var \$addExtensionButton = \$('<button type=\"button\" class=\"btn btn-secondary\"><i class=\"fas fa-plus\"></i></button>');

    \$(function () {
        \$extensionsHolder = \$('div#language_extensions');
        \$extensionsHolder.append(\$addExtensionButton);

        \$extensionsHolder.data('index', \$extensionsHolder.find(':input').length);

        \$addExtensionButton.on('click', function (e) {
            addExtension(\$extensionsHolder, \$addExtensionButton);
        });

        \$extensionsHolder.find('div.form-group').each(function() {
            addDeleteLink(\$(this));
        });

        function addExtension(\$extensionsHolder, \$addExtensionButton) {
            var prototype = \$extensionsHolder.data('prototype');
            var index = \$extensionsHolder.data('index');
            var newForm = prototype;
            newForm = newForm.replace(/__name__/g, index);
            \$extensionsHolder.data('index', index + 1);
            var \$newForm = \$(newForm);
            \$addExtensionButton.before(\$newForm);
            addDeleteLink(\$newForm);
        }

        function addDeleteLink(\$extensionDiv) {
            var \$removeFormButton = \$('<button type=\"button\" class=\"input-group-append btn btn-danger\"><i class=\"fas fa-trash\"></i></button>');
            var \$inputGroup = \$('<div class=\"input-group\"></div>');
            var \$formControl = \$extensionDiv.find('.form-control');
            \$inputGroup.append(\$formControl);
            \$inputGroup.append(\$removeFormButton);
            \$extensionDiv.html(\$inputGroup);

            \$removeFormButton.on('click', function(e) {
                \$extensionDiv.remove();
            });
        }
    });
</script>
", "jury/partials/language_form.html.twig", "/opt/domjudge/domserver/webapp/templates/jury/partials/language_form.html.twig");
    }
}
