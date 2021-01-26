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

/* jury/submission_source.html.twig */
class __TwigTemplate_6b1b7445de1506f837922d08b6e73d9fb5016a1043bf385e33dfa41dcb86ff0b extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "jury/submission_source.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "jury/submission_source.html.twig"));

        $this->parent = $this->loadTemplate("jury/base.html.twig", "jury/submission_source.html.twig", 1);
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

        echo "Source s";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["submission"]) || array_key_exists("submission", $context) ? $context["submission"] : (function () { throw new RuntimeError('Variable "submission" does not exist.', 3, $this->source); })()), "submitid", [], "any", false, false, false, 3), "html", null, true);
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
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 10
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 11
        echo "
    <h1>
        Source code for submission
        <a href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_submission", ["submitId" => twig_get_attribute($this->env, $this->source, (isset($context["submission"]) || array_key_exists("submission", $context) ? $context["submission"] : (function () { throw new RuntimeError('Variable "submission" does not exist.', 14, $this->source); })()), "submitid", [], "any", false, false, false, 14)]), "html", null, true);
        echo "\">s";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["submission"]) || array_key_exists("submission", $context) ? $context["submission"] : (function () { throw new RuntimeError('Variable "submission" does not exist.', 14, $this->source); })()), "submitid", [], "any", false, false, false, 14), "html", null, true);
        echo "</a>";
        // line 15
        if (twig_get_attribute($this->env, $this->source, (isset($context["submission"]) || array_key_exists("submission", $context) ? $context["submission"] : (function () { throw new RuntimeError('Variable "submission" does not exist.', 15, $this->source); })()), "originalSubmission", [], "any", false, false, false, 15)) {
            // line 16
            echo "            (resubmit of
            <a href=\"";
            // line 17
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_submission", ["submitId" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["submission"]) || array_key_exists("submission", $context) ? $context["submission"] : (function () { throw new RuntimeError('Variable "submission" does not exist.', 17, $this->source); })()), "originalSubmission", [], "any", false, false, false, 17), "submitid", [], "any", false, false, false, 17)]), "html", null, true);
            echo "\">s";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["submission"]) || array_key_exists("submission", $context) ? $context["submission"] : (function () { throw new RuntimeError('Variable "submission" does not exist.', 17, $this->source); })()), "originalSubmission", [], "any", false, false, false, 17), "submitid", [], "any", false, false, false, 17), "html", null, true);
            echo "</a>)";
        }
        // line 19
        echo "        ";
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["submission"]) || array_key_exists("submission", $context) ? $context["submission"] : (function () { throw new RuntimeError('Variable "submission" does not exist.', 19, $this->source); })()), "resubmissions", [], "any", false, false, false, 19))) {
            // line 20
            echo "            (resubmitted as";
            // line 21
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["submission"]) || array_key_exists("submission", $context) ? $context["submission"] : (function () { throw new RuntimeError('Variable "submission" does not exist.', 21, $this->source); })()), "resubmissions", [], "any", false, false, false, 21));
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
            foreach ($context['_seq'] as $context["_key"] => $context["resubmission"]) {
                // line 22
                echo "                <a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_submission", ["submitId" => twig_get_attribute($this->env, $this->source, $context["resubmission"], "origsubmitid", [], "any", false, false, false, 22)]), "html", null, true);
                echo "\">s";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["resubmission"], "submitid", [], "any", false, false, false, 22), "html", null, true);
                echo "</a>";
                // line 23
                if ( !twig_get_attribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, false, 23)) {
                    echo ",";
                }
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['resubmission'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 25
            echo ")
        ";
        }
        // line 27
        echo "
    </h1>";
        // line 30
        if (twig_get_attribute($this->env, $this->source, (isset($context["submission"]) || array_key_exists("submission", $context) ? $context["submission"] : (function () { throw new RuntimeError('Variable "submission" does not exist.', 30, $this->source); })()), "entryPoint", [], "any", false, false, false, 30)) {
            // line 31
            echo "
        <p><b>Entry point</b>: ";
            // line 32
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["submission"]) || array_key_exists("submission", $context) ? $context["submission"] : (function () { throw new RuntimeError('Variable "submission" does not exist.', 32, $this->source); })()), "entryPoint", [], "any", false, false, false, 32), "html", null, true);
            echo "</p>";
        }
        // line 35
        if ( !(null === (isset($context["oldSubmission"]) || array_key_exists("oldSubmission", $context) ? $context["oldSubmission"] : (function () { throw new RuntimeError('Variable "oldSubmission" does not exist.', 35, $this->source); })()))) {
            // line 36
            echo "
        <p><a href=\"#diff\">Go to diff to previous submission</a></p>";
        }
        // line 40
        if (twig_get_attribute($this->env, $this->source, (isset($context["submission"]) || array_key_exists("submission", $context) ? $context["submission"] : (function () { throw new RuntimeError('Variable "submission" does not exist.', 40, $this->source); })()), "origsubmitid", [], "any", false, false, false, 40)) {
            // line 41
            echo "
        <p><a href=\"#origdiff\">Go to diff to original submission</a></p>";
        }
        // line 44
        echo "
    <ul class=\"nav nav-tabs source-tab-nav\">";
        // line 46
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["files"]) || array_key_exists("files", $context) ? $context["files"] : (function () { throw new RuntimeError('Variable "files" does not exist.', 46, $this->source); })()));
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
        foreach ($context['_seq'] as $context["_key"] => $context["file"]) {
            // line 47
            echo "
            <li class=\"nav-item\">
                <a class=\"nav-link ";
            // line 49
            if (twig_get_attribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 49)) {
                echo "active";
            }
            echo "\" data-toggle=\"tab\"
                   href=\"#source-";
            // line 50
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["file"], "rank", [], "any", false, false, false, 50), "html", null, true);
            echo "\" role=\"tab\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["file"], "filename", [], "any", false, false, false, 50), "html", null, true);
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['file'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 53
        echo "
    </ul>
    <div class=\"tab-content source-tab\">";
        // line 56
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["files"]) || array_key_exists("files", $context) ? $context["files"] : (function () { throw new RuntimeError('Variable "files" does not exist.', 56, $this->source); })()));
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
        foreach ($context['_seq'] as $context["_key"] => $context["file"]) {
            // line 57
            echo "
            <div class=\"tab-pane fade ";
            // line 58
            if (twig_get_attribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 58)) {
                echo "show active";
            }
            echo "\" id=\"source-";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["file"], "rank", [], "any", false, false, false, 58), "html", null, true);
            echo "\"
                 role=\"tabpanel\">
                <div class=\"mb-1\">
                    <a class=\"btn btn-secondary btn-sm\"
                       href=\"";
            // line 62
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_submission_source", ["submission" => twig_get_attribute($this->env, $this->source, (isset($context["submission"]) || array_key_exists("submission", $context) ? $context["submission"] : (function () { throw new RuntimeError('Variable "submission" does not exist.', 62, $this->source); })()), "submitid", [], "any", false, false, false, 62), "fetch" => twig_get_attribute($this->env, $this->source, $context["file"], "rank", [], "any", false, false, false, 62)]), "html", null, true);
            echo "\">
                        <i class=\"fas fa-download\"></i> Download
                    </a>
                    <a class=\"btn btn-secondary btn-sm\"
                       href=\"";
            // line 66
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_submission_edit_source", ["submission" => twig_get_attribute($this->env, $this->source, (isset($context["submission"]) || array_key_exists("submission", $context) ? $context["submission"] : (function () { throw new RuntimeError('Variable "submission" does not exist.', 66, $this->source); })()), "submitid", [], "any", false, false, false, 66), "rank" => twig_get_attribute($this->env, $this->source, $context["file"], "rank", [], "any", false, false, false, 66)]), "html", null, true);
            echo "\">
                        <i class=\"fas fa-pencil-alt\"></i> Edit
                    </a>
                </div>

                ";
            // line 71
            echo $this->extensions['App\Twig\TwigExtension']->codeEditor(twig_get_attribute($this->env, $this->source, $context["file"], "sourcecode", [], "any", false, false, false, 71), twig_get_attribute($this->env, $this->source, $context["file"], "rank", [], "any", false, false, false, 71), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["submission"]) || array_key_exists("submission", $context) ? $context["submission"] : (function () { throw new RuntimeError('Variable "submission" does not exist.', 71, $this->source); })()), "language", [], "any", false, false, false, 71), "aceLanguage", [], "any", false, false, false, 71));
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['file'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 74
        echo "
    </div>";
        // line 77
        if ( !(null === (isset($context["oldSubmission"]) || array_key_exists("oldSubmission", $context) ? $context["oldSubmission"] : (function () { throw new RuntimeError('Variable "oldSubmission" does not exist.', 77, $this->source); })()))) {
            // line 78
            echo "
        <h2 id=\"diff\" class=\"mt-3\">
            Diff to submission
            <a href=\"";
            // line 81
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_submission", ["submitId" => twig_get_attribute($this->env, $this->source, (isset($context["oldSubmission"]) || array_key_exists("oldSubmission", $context) ? $context["oldSubmission"] : (function () { throw new RuntimeError('Variable "oldSubmission" does not exist.', 81, $this->source); })()), "submitid", [], "any", false, false, false, 81)]), "html", null, true);
            echo "\">
                s";
            // line 82
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["oldSubmission"]) || array_key_exists("oldSubmission", $context) ? $context["oldSubmission"] : (function () { throw new RuntimeError('Variable "oldSubmission" does not exist.', 82, $this->source); })()), "submitid", [], "any", false, false, false, 82), "html", null, true);
            echo "
            </a>
        </h2>";
            // line 86
            $this->loadTemplate("jury/partials/submission_diff.html.twig", "jury/submission_source.html.twig", 86)->display(twig_array_merge($context, ["oldSubmission" => (isset($context["oldSubmission"]) || array_key_exists("oldSubmission", $context) ? $context["oldSubmission"] : (function () { throw new RuntimeError('Variable "oldSubmission" does not exist.', 86, $this->source); })()), "oldFiles" => (isset($context["oldFiles"]) || array_key_exists("oldFiles", $context) ? $context["oldFiles"] : (function () { throw new RuntimeError('Variable "oldFiles" does not exist.', 86, $this->source); })()), "oldFileStats" => (isset($context["oldFileStats"]) || array_key_exists("oldFileStats", $context) ? $context["oldFileStats"] : (function () { throw new RuntimeError('Variable "oldFileStats" does not exist.', 86, $this->source); })())]));
        }
        // line 89
        if ( !(null === (isset($context["originalSubmission"]) || array_key_exists("originalSubmission", $context) ? $context["originalSubmission"] : (function () { throw new RuntimeError('Variable "originalSubmission" does not exist.', 89, $this->source); })()))) {
            // line 90
            echo "
        <h2 id=\"origdiff\" class=\"mt-3\">
            Diff to original submission
            <a href=\"";
            // line 93
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_submission", ["submitId" => twig_get_attribute($this->env, $this->source, (isset($context["originalSubmission"]) || array_key_exists("originalSubmission", $context) ? $context["originalSubmission"] : (function () { throw new RuntimeError('Variable "originalSubmission" does not exist.', 93, $this->source); })()), "submitid", [], "any", false, false, false, 93)]), "html", null, true);
            echo "\">
                s";
            // line 94
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["originalSubmission"]) || array_key_exists("originalSubmission", $context) ? $context["originalSubmission"] : (function () { throw new RuntimeError('Variable "originalSubmission" does not exist.', 94, $this->source); })()), "submitid", [], "any", false, false, false, 94), "html", null, true);
            echo "
            </a>
        </h2>";
            // line 98
            $this->loadTemplate("jury/partials/submission_diff.html.twig", "jury/submission_source.html.twig", 98)->display(twig_array_merge($context, ["oldSubmission" => (isset($context["originalSubmission"]) || array_key_exists("originalSubmission", $context) ? $context["originalSubmission"] : (function () { throw new RuntimeError('Variable "originalSubmission" does not exist.', 98, $this->source); })()), "oldFiles" => (isset($context["originalFiles"]) || array_key_exists("originalFiles", $context) ? $context["originalFiles"] : (function () { throw new RuntimeError('Variable "originalFiles" does not exist.', 98, $this->source); })()), "oldFileStats" => (isset($context["originalFileStats"]) || array_key_exists("originalFileStats", $context) ? $context["originalFileStats"] : (function () { throw new RuntimeError('Variable "originalFileStats" does not exist.', 98, $this->source); })())]));
        }
        // line 100
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "jury/submission_source.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  367 => 100,  364 => 98,  359 => 94,  355 => 93,  350 => 90,  348 => 89,  345 => 86,  340 => 82,  336 => 81,  331 => 78,  329 => 77,  326 => 74,  310 => 71,  302 => 66,  295 => 62,  284 => 58,  281 => 57,  264 => 56,  260 => 53,  242 => 50,  236 => 49,  232 => 47,  215 => 46,  212 => 44,  208 => 41,  206 => 40,  202 => 36,  200 => 35,  196 => 32,  193 => 31,  191 => 30,  188 => 27,  184 => 25,  168 => 23,  162 => 22,  145 => 21,  143 => 20,  140 => 19,  134 => 17,  131 => 16,  129 => 15,  124 => 14,  119 => 11,  109 => 10,  97 => 7,  92 => 6,  82 => 5,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"jury/base.html.twig\" %}

{% block title %}Source s{{ submission.submitid }} - {{ parent() }}{% endblock %}

{% block extrahead %}
    {{ parent() }}
    <script src=\"{{ asset('js/ace/ace.js') }}\"></script>
{% endblock %}

{% block content %}

    <h1>
        Source code for submission
        <a href=\"{{ path('jury_submission', {submitId: submission.submitid}) }}\">s{{ submission.submitid }}</a>
        {%- if submission.originalSubmission %}
            (resubmit of
            <a href=\"{{ path('jury_submission', {submitId: submission.originalSubmission.submitid}) }}\">s{{ submission.originalSubmission.submitid }}</a>)
        {%- endif %}
        {% if submission.resubmissions is not empty %}
            (resubmitted as
            {%- for resubmission in submission.resubmissions %}
                <a href=\"{{ path('jury_submission', {submitId: resubmission.origsubmitid}) }}\">s{{ resubmission.submitid }}</a>
                {%- if not loop.last -%},{%- endif -%}
            {%- endfor -%}
            )
        {% endif %}

    </h1>

    {%- if submission.entryPoint %}

        <p><b>Entry point</b>: {{ submission.entryPoint }}</p>
    {%- endif %}

    {%- if oldSubmission is not null %}

        <p><a href=\"#diff\">Go to diff to previous submission</a></p>
    {%- endif %}

    {%- if submission.origsubmitid %}

        <p><a href=\"#origdiff\">Go to diff to original submission</a></p>
    {%- endif %}

    <ul class=\"nav nav-tabs source-tab-nav\">
        {%- for file in files %}

            <li class=\"nav-item\">
                <a class=\"nav-link {% if loop.first %}active{% endif %}\" data-toggle=\"tab\"
                   href=\"#source-{{ file.rank }}\" role=\"tab\">{{ file.filename }}</a>
            </li>
        {%- endfor %}

    </ul>
    <div class=\"tab-content source-tab\">
        {%- for file in files %}

            <div class=\"tab-pane fade {% if loop.first %}show active{% endif %}\" id=\"source-{{ file.rank }}\"
                 role=\"tabpanel\">
                <div class=\"mb-1\">
                    <a class=\"btn btn-secondary btn-sm\"
                       href=\"{{ path('jury_submission_source', {submission: submission.submitid, fetch: file.rank}) }}\">
                        <i class=\"fas fa-download\"></i> Download
                    </a>
                    <a class=\"btn btn-secondary btn-sm\"
                       href=\"{{ path('jury_submission_edit_source', {submission: submission.submitid, rank: file.rank}) }}\">
                        <i class=\"fas fa-pencil-alt\"></i> Edit
                    </a>
                </div>

                {{ file.sourcecode | codeEditor(file.rank, submission.language.aceLanguage) }}
            </div>
        {%- endfor %}

    </div>

    {%- if oldSubmission is not null %}

        <h2 id=\"diff\" class=\"mt-3\">
            Diff to submission
            <a href=\"{{ path('jury_submission', {submitId: oldSubmission.submitid}) }}\">
                s{{ oldSubmission.submitid }}
            </a>
        </h2>

        {%- include 'jury/partials/submission_diff.html.twig' with {oldSubmission: oldSubmission, oldFiles: oldFiles, oldFileStats: oldFileStats} %}
    {%- endif %}

    {%- if originalSubmission is not null %}

        <h2 id=\"origdiff\" class=\"mt-3\">
            Diff to original submission
            <a href=\"{{ path('jury_submission', {submitId: originalSubmission.submitid}) }}\">
                s{{ originalSubmission.submitid }}
            </a>
        </h2>

        {%- include 'jury/partials/submission_diff.html.twig' with {oldSubmission: originalSubmission, oldFiles: originalFiles, oldFileStats: originalFileStats} %}
    {%- endif %}

{% endblock %}
", "jury/submission_source.html.twig", "/opt/domjudge/domserver/webapp/templates/jury/submission_source.html.twig");
    }
}
