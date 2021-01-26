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

/* base.html.twig */
class __TwigTemplate_08e1fddccca7c1fa9ea9cf456dac13ebfdfbaef6247ded907bedfe2713ff1b11 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'extrahead' => [$this, 'block_extrahead'],
            'menu' => [$this, 'block_menu'],
            'body' => [$this, 'block_body'],
            'messages' => [$this, 'block_messages'],
            'content' => [$this, 'block_content'],
            'footer' => [$this, 'block_footer'],
            'extrafooter' => [$this, 'block_extrafooter'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
<head>
    <div id=\"fb-root\"></div>
    <!-- DOMjudge version ";
        // line 5
        echo twig_escape_filter($this->env, ($context["DOMJUDGE_VERSION"] ?? null), "html", null, true);
        echo " -->
    <meta charset=\"";
        // line 6
        echo twig_escape_filter($this->env, ($context["DJ_CHARACTER_SET"] ?? null), "html", null, true);
        echo "\">
    <title>";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    <link rel=\"icon\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">

    <link rel=\"stylesheet\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/bootstrap.min.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/fontawesome-all.min.css"), "html", null, true);
        echo "\">
    <script src=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/jquery.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/bootstrap.bundle.min.js"), "html", null, true);
        echo "\"></script>

    <script src=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/domjudge.js"), "html", null, true);
        echo "\"></script>
    ";
        // line 17
        $this->displayBlock('extrahead', $context, $blocks);
        // line 22
        echo "</head>
<body style=\"padding-top: 4.5rem;\">
";
        // line 24
        $this->displayBlock('menu', $context, $blocks);
        // line 25
        $this->displayBlock('body', $context, $blocks);
        // line 37
        echo "
<script>
    ";
        // line 39
        if (twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 39)) {
            // line 40
            echo "        var domjudge_base_url = \"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 40), "getBaseURL", [], "method", false, false, false, 40), "html", null, true);
            echo "\";
    ";
        }
        // line 42
        echo "    \$(function () {
        \$('body').on('change', '.custom-file-input', function () {
            var files = this.files;
            var fileNames = [];
            for (var i = 0; i < files.length; i++) {
                fileNames.push(files.item(i).name);
            }
            \$(this).next('.custom-file-label').html(fileNames.join(\", \"));
            \$(this).next('.custom-file-label').removeClass('text-muted');
        });

        /* toggle refresh if set */
        ";
        // line 54
        if (((isset($context["refresh"]) || array_key_exists("refresh", $context)) && ($context["refresh"] ?? null))) {
            // line 55
            echo "        \$('#refresh-navitem').on('click', function () {
            toggleRefresh('";
            // line 56
            echo twig_get_attribute($this->env, $this->source, ($context["refresh"] ?? null), "url", [], "any", false, false, false, 56);
            echo "', ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["refresh"] ?? null), "after", [], "any", false, false, false, 56), "html", null, true);
            echo ", ";
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["refresh"] ?? null), "ajax", [], "any", true, true, false, 56)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["refresh"] ?? null), "ajax", [], "any", false, false, false, 56), 0)) : (0)), "html", null, true);
            echo ");
        });
        ";
        }
        // line 59
        echo "        /* Enable page refresh if set if wanted by the page, and wanted by the user */
        ";
        // line 60
        if ((((isset($context["refresh"]) || array_key_exists("refresh", $context)) && ($context["refresh"] ?? null)) && ($context["refresh_flag"] ?? null))) {
            // line 61
            echo "        enableRefresh('";
            echo twig_get_attribute($this->env, $this->source, ($context["refresh"] ?? null), "url", [], "any", false, false, false, 61);
            echo "', ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["refresh"] ?? null), "after", [], "any", false, false, false, 61), "html", null, true);
            echo ", ";
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["refresh"] ?? null), "ajax", [], "any", true, true, false, 61)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["refresh"] ?? null), "ajax", [], "any", false, false, false, 61), 0)) : (0)), "html", null, true);
            echo ");
        ";
        }
        // line 63
        echo "
        initializeAjaxModals();
    });
</script>
";
        // line 67
        $this->displayBlock('footer', $context, $blocks);
        // line 68
        $this->displayBlock('extrafooter', $context, $blocks);
        // line 69
        echo "</body>
</html>
";
    }

    // line 7
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "DOMjudge";
    }

    // line 17
    public function block_extrahead($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 18
        echo "        <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("style_domjudge.css"), "html", null, true);
        echo "\">

        ";
        // line 20
        echo twig_escape_filter($this->env, (((isset($context["extrahead"]) || array_key_exists("extrahead", $context))) ? (_twig_default_filter(($context["extrahead"] ?? null), "")) : ("")), "html", null, true);
        echo "
    ";
    }

    // line 24
    public function block_menu($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 25
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 26
        echo "    <div class=\"container-fluid\">
        <div class=\"row\">
            <div class=\"col-12\">
                ";
        // line 29
        $this->displayBlock('messages', $context, $blocks);
        // line 32
        echo "                ";
        $this->displayBlock('content', $context, $blocks);
        // line 33
        echo "            </div>
        </div>
    </div>
";
    }

    // line 29
    public function block_messages($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 30
        echo "                    ";
        $this->loadTemplate("partials/messages.html.twig", "base.html.twig", 30)->display($context);
        // line 31
        echo "                ";
    }

    // line 32
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo ($context["body"] ?? null);
    }

    // line 67
    public function block_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 68
    public function block_extrafooter($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  246 => 68,  240 => 67,  233 => 32,  229 => 31,  226 => 30,  222 => 29,  215 => 33,  212 => 32,  210 => 29,  205 => 26,  201 => 25,  195 => 24,  189 => 20,  183 => 18,  179 => 17,  172 => 7,  166 => 69,  164 => 68,  162 => 67,  156 => 63,  146 => 61,  144 => 60,  141 => 59,  131 => 56,  128 => 55,  126 => 54,  112 => 42,  106 => 40,  104 => 39,  100 => 37,  98 => 25,  96 => 24,  92 => 22,  90 => 17,  86 => 16,  81 => 14,  77 => 13,  73 => 12,  69 => 11,  63 => 8,  59 => 7,  55 => 6,  51 => 5,  45 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "base.html.twig", "/opt/domjudge/domserver/webapp/templates/base.html.twig");
    }
}
