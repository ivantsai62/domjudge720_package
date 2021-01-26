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

/* jury/executable_content.html.twig */
class __TwigTemplate_587afbfbc8772d1c90c2afbd2350a89b05888f2f66068469131ef15923dc39a2 extends \Twig\Template
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
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "jury/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "jury/executable_content.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "jury/executable_content.html.twig"));

        $this->parent = $this->loadTemplate("jury/base.html.twig", "jury/executable_content.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "View content of executable ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["executable"]) || array_key_exists("executable", $context) ? $context["executable"] : (function () { throw new RuntimeError('Variable "executable" does not exist.', 3, $this->source); })()), "execid", [], "any", false, false, false, 3), "html", null, true);
        echo " - ";
        $this->displayParentBlock("title", $context, $blocks);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_extrahead($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "extrahead"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "extrahead"));

        // line 6
        echo "    ";
        $this->displayParentBlock("extrahead", $context, $blocks);
        echo "
    <script src=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/ace/ace.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/ace/ext-modelist.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 11
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 12
        echo "
    <h1>View content of executable ";
        // line 13
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["executable"]) || array_key_exists("executable", $context) ? $context["executable"] : (function () { throw new RuntimeError('Variable "executable" does not exist.', 13, $this->source); })()), "execid", [], "any", false, false, false, 13), "html", null, true);
        echo "</h1>

    ";
        // line 15
        if ( !twig_test_empty((isset($context["skippedBinary"]) || array_key_exists("skippedBinary", $context) ? $context["skippedBinary"] : (function () { throw new RuntimeError('Variable "skippedBinary" does not exist.', 15, $this->source); })()))) {
            // line 16
            echo "        <div>
            Binary files:
            <ul>
                ";
            // line 19
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["skippedBinary"]) || array_key_exists("skippedBinary", $context) ? $context["skippedBinary"] : (function () { throw new RuntimeError('Variable "skippedBinary" does not exist.', 19, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["file"]) {
                // line 20
                echo "                    <li>";
                echo twig_escape_filter($this->env, $context["file"], "html", null, true);
                echo "</li>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['file'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 22
            echo "            </ul>
        </div>
    ";
        }
        // line 25
        echo "
    <ul class=\"nav nav-tabs source-tab-nav\">";
        // line 27
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["filenames"]) || array_key_exists("filenames", $context) ? $context["filenames"] : (function () { throw new RuntimeError('Variable "filenames" does not exist.', 27, $this->source); })()));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["idx"] => $context["filename"]) {
            // line 28
            echo "
            <li class=\"nav-item\">
                <a class=\"nav-link ";
            // line 30
            if (twig_get_attribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 30)) {
                echo "active";
            }
            echo "\" data-toggle=\"tab\"
                   href=\"#source-";
            // line 31
            echo twig_escape_filter($this->env, $context["idx"], "html", null, true);
            echo "\" role=\"tab\">";
            echo twig_escape_filter($this->env, $context["filename"], "html", null, true);
            echo "</a>
            </li>";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['idx'], $context['filename'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 34
        echo "
    </ul>
    <div class=\"tab-content source-tab\">";
        // line 37
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["filenames"]) || array_key_exists("filenames", $context) ? $context["filenames"] : (function () { throw new RuntimeError('Variable "filenames" does not exist.', 37, $this->source); })()));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["idx"] => $context["filename"]) {
            // line 38
            echo "            <div class=\"tab-pane fade ";
            if (twig_get_attribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 38)) {
                echo "show active";
            }
            echo "\" id=\"source-";
            echo twig_escape_filter($this->env, $context["idx"], "html", null, true);
            echo "\"
                 role=\"tabpanel\">
                <div class=\"mb-1\">
                    <a class=\"btn btn-secondary btn-sm\"
                       href=\"";
            // line 42
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_executable_download_single", ["execId" => twig_get_attribute($this->env, $this->source, (isset($context["executable"]) || array_key_exists("executable", $context) ? $context["executable"] : (function () { throw new RuntimeError('Variable "executable" does not exist.', 42, $this->source); })()), "execid", [], "any", false, false, false, 42), "index" => $context["idx"]]), "html", null, true);
            echo "\">
                        <i class=\"fas fa-download\"></i> Download
                    </a>";
            // line 45
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
                // line 46
                echo "                        <a class=\"btn btn-secondary btn-sm\"
\t\t\t   href=\"";
                // line 47
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_executable_edit_files", ["execId" => twig_get_attribute($this->env, $this->source, (isset($context["executable"]) || array_key_exists("executable", $context) ? $context["executable"] : (function () { throw new RuntimeError('Variable "executable" does not exist.', 47, $this->source); })()), "execid", [], "any", false, false, false, 47), "index" => $context["idx"]]), "html", null, true);
                echo "\">
                            <i class=\"fas fa-pencil-alt\"></i> Edit
\t\t\t</a>";
            }
            // line 51
            echo "                </div>

                ";
            // line 53
            echo $this->extensions['App\Twig\TwigExtension']->codeEditor(twig_get_attribute($this->env, $this->source, (isset($context["files"]) || array_key_exists("files", $context) ? $context["files"] : (function () { throw new RuntimeError('Variable "files" does not exist.', 53, $this->source); })()), $context["idx"], [], "array", false, false, false, 53), $context["idx"], null, false, "", twig_get_attribute($this->env, $this->source, (isset($context["aceFilenames"]) || array_key_exists("aceFilenames", $context) ? $context["aceFilenames"] : (function () { throw new RuntimeError('Variable "aceFilenames" does not exist.', 53, $this->source); })()), $context["idx"], [], "array", false, false, false, 53));
            echo "
            </div>";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['idx'], $context['filename'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 56
        echo "    </div>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "jury/executable_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  273 => 56,  257 => 53,  253 => 51,  247 => 47,  244 => 46,  242 => 45,  237 => 42,  225 => 38,  208 => 37,  204 => 34,  186 => 31,  180 => 30,  176 => 28,  159 => 27,  156 => 25,  151 => 22,  142 => 20,  138 => 19,  133 => 16,  131 => 15,  126 => 13,  123 => 12,  113 => 11,  101 => 8,  97 => 7,  92 => 6,  82 => 5,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"jury/base.html.twig\" %}

{% block title %}View content of executable {{ executable.execid }} - {{ parent() }}{% endblock %}

{% block extrahead %}
    {{ parent() }}
    <script src=\"{{ asset('js/ace/ace.js') }}\"></script>
    <script src=\"{{ asset('js/ace/ext-modelist.js') }}\"></script>
{% endblock %}

{% block content %}

    <h1>View content of executable {{ executable.execid }}</h1>

    {% if skippedBinary is not empty %}
        <div>
            Binary files:
            <ul>
                {% for file in skippedBinary %}
                    <li>{{ file }}</li>
                {% endfor %}
            </ul>
        </div>
    {% endif %}

    <ul class=\"nav nav-tabs source-tab-nav\">
        {%- for idx, filename in filenames %}

            <li class=\"nav-item\">
                <a class=\"nav-link {% if loop.first %}active{% endif %}\" data-toggle=\"tab\"
                   href=\"#source-{{ idx }}\" role=\"tab\">{{ filename }}</a>
            </li>
        {%- endfor %}

    </ul>
    <div class=\"tab-content source-tab\">
        {%- for idx, filename in filenames %}
            <div class=\"tab-pane fade {% if loop.first %}show active{% endif %}\" id=\"source-{{ idx }}\"
                 role=\"tabpanel\">
                <div class=\"mb-1\">
                    <a class=\"btn btn-secondary btn-sm\"
                       href=\"{{ path('jury_executable_download_single', {execId: executable.execid, index: idx}) }}\">
                        <i class=\"fas fa-download\"></i> Download
                    </a>
\t\t    {%- if is_granted('ROLE_ADMIN') %}
                        <a class=\"btn btn-secondary btn-sm\"
\t\t\t   href=\"{{ path('jury_executable_edit_files', {execId: executable.execid, index: idx}) }}\">
                            <i class=\"fas fa-pencil-alt\"></i> Edit
\t\t\t</a>
\t\t    {%- endif %}
                </div>

                {{ files[idx] | codeEditor(idx, null, false, '', aceFilenames[idx]) }}
            </div>
        {%- endfor %}
    </div>

{% endblock %}
", "jury/executable_content.html.twig", "/opt/domjudge/domserver/webapp/templates/jury/executable_content.html.twig");
    }
}
