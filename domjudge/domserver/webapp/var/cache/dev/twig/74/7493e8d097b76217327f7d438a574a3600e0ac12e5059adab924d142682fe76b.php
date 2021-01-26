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

/* jury/problem_testcases.html.twig */
class __TwigTemplate_cd5f436670ae5f500ab01bc505a3569297ebada8d4dc17ce5418aa01b3397d0f extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "jury/problem_testcases.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "jury/problem_testcases.html.twig"));

        // line 2
        $macros["macros"] = $this->macros["macros"] = $this->loadTemplate("jury/jury_macros.twig", "jury/problem_testcases.html.twig", 2)->unwrap();
        // line 1
        $this->parent = $this->loadTemplate("jury/base.html.twig", "jury/problem_testcases.html.twig", 1);
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

        echo "Testcases for p";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["problem"]) || array_key_exists("problem", $context) ? $context["problem"] : (function () { throw new RuntimeError('Variable "problem" does not exist.', 4, $this->source); })()), "probid", [], "any", false, false, false, 4), "html", null, true);
        echo " - ";
        $this->displayParentBlock("title", $context, $blocks);
        
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
        echo twig_call_macro($macros["macros"], "macro_table_extrahead", [], 8, $context, $this->getSourceContext());
        echo "
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
    <h1>Testcases for p";
        // line 13
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["problem"]) || array_key_exists("problem", $context) ? $context["problem"] : (function () { throw new RuntimeError('Variable "problem" does not exist.', 13, $this->source); })()), "probid", [], "any", false, false, false, 13), "html", null, true);
        echo " - ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["problem"]) || array_key_exists("problem", $context) ? $context["problem"] : (function () { throw new RuntimeError('Variable "problem" does not exist.', 13, $this->source); })()), "name", [], "any", false, false, false, 13), "html", null, true);
        echo "</h1>

    <div class=\"mb-2\">
        <a href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_problem", ["probId" => twig_get_attribute($this->env, $this->source, (isset($context["problem"]) || array_key_exists("problem", $context) ? $context["problem"] : (function () { throw new RuntimeError('Variable "problem" does not exist.', 16, $this->source); })()), "probid", [], "any", false, false, false, 16)]), "html", null, true);
        echo "\">Back to problem p";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["problem"]) || array_key_exists("problem", $context) ? $context["problem"] : (function () { throw new RuntimeError('Variable "problem" does not exist.', 16, $this->source); })()), "probid", [], "any", false, false, false, 16), "html", null, true);
        echo "</a>
    </div>

    ";
        // line 19
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 20
            echo "        ";
            // line 21
            echo "        ";
            $context["formStart"] = "<form method=\"post\" enctype=\"multipart/form-data\">";
            // line 22
            echo "        ";
            echo (isset($context["formStart"]) || array_key_exists("formStart", $context) ? $context["formStart"] : (function () { throw new RuntimeError('Variable "formStart" does not exist.', 22, $this->source); })());
            echo "
    ";
        }
        // line 24
        echo "    ";
        if (twig_test_empty((isset($context["testcases"]) || array_key_exists("testcases", $context) ? $context["testcases"] : (function () { throw new RuntimeError('Variable "testcases" does not exist.', 24, $this->source); })()))) {
            // line 25
            echo "        <p class=\"nodata\">No testcase(s) yet.</p>
    ";
        } else {
            // line 27
            echo "        <table class=\"table table-sm table-striped table-hover testcases\">
            <thead>
            <tr>
                <th class=\"testrank\">#</th>
                <th class=\"testsample\">sample</th>
                ";
            // line 32
            if (((twig_get_attribute($this->env, $this->source, (isset($context["problem"]) || array_key_exists("problem", $context) ? $context["problem"] : (function () { throw new RuntimeError('Variable "problem" does not exist.', 32, $this->source); })()), "subtask", [], "any", false, false, false, 32) != null) && (twig_get_attribute($this->env, $this->source, (isset($context["problem"]) || array_key_exists("problem", $context) ? $context["problem"] : (function () { throw new RuntimeError('Variable "problem" does not exist.', 32, $this->source); })()), "subtask", [], "any", false, false, false, 32) != 0))) {
                // line 33
                echo "                <th class=\"testsubtask\">task</th>
                ";
            }
            // line 35
            echo "                <th>download</th>
                <th>size</th>
                <th>md5</th>
                ";
            // line 38
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
                // line 39
                echo "                    <th>upload new</th>
                ";
            }
            // line 41
            echo "                <th>description / image</th>
            </tr>
            </thead>
            <tbody>
            ";
            // line 45
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["testcases"]) || array_key_exists("testcases", $context) ? $context["testcases"] : (function () { throw new RuntimeError('Variable "testcases" does not exist.', 45, $this->source); })()));
            foreach ($context['_seq'] as $context["rank"] => $context["testcase"]) {
                // line 46
                echo "                <tr>
                    <td rowspan=\"2\" class=\"testrank\">
                        <a href=\"";
                // line 48
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_problem_testcase_move", ["probId" => twig_get_attribute($this->env, $this->source, (isset($context["problem"]) || array_key_exists("problem", $context) ? $context["problem"] : (function () { throw new RuntimeError('Variable "problem" does not exist.', 48, $this->source); })()), "probid", [], "any", false, false, false, 48), "rank" => twig_get_attribute($this->env, $this->source, $context["testcase"], "rank", [], "any", false, false, false, 48), "direction" => "up"]), "html", null, true);
                echo "\"
                           title=\"Move testcase up\"><i class=\"fas fa-arrow-up\"></i></a><br>
                        ";
                // line 50
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["testcase"], "rank", [], "any", false, false, false, 50), "html", null, true);
                echo "<br>
                        <a href=\"";
                // line 51
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_problem_testcase_move", ["probId" => twig_get_attribute($this->env, $this->source, (isset($context["problem"]) || array_key_exists("problem", $context) ? $context["problem"] : (function () { throw new RuntimeError('Variable "problem" does not exist.', 51, $this->source); })()), "probid", [], "any", false, false, false, 51), "rank" => twig_get_attribute($this->env, $this->source, $context["testcase"], "rank", [], "any", false, false, false, 51), "direction" => "down"]), "html", null, true);
                echo "\"
                           title=\"Move testcase down\"><i class=\"fas fa-arrow-down\"></i></a>
                    </td>
                    <td rowspan=\"2\" class=\"testsample\">
                        <input type=\"checkbox\" name=\"sample[";
                // line 55
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["testcase"], "rank", [], "any", false, false, false, 55), "html", null, true);
                echo "]\" value=\"sample\"
                               ";
                // line 56
                if (twig_get_attribute($this->env, $this->source, $context["testcase"], "sample", [], "any", false, false, false, 56)) {
                    echo "checked";
                }
                echo " />
                    </td>
                    ";
                // line 58
                if (((twig_get_attribute($this->env, $this->source, (isset($context["problem"]) || array_key_exists("problem", $context) ? $context["problem"] : (function () { throw new RuntimeError('Variable "problem" does not exist.', 58, $this->source); })()), "subtask", [], "any", false, false, false, 58) != null) && (twig_get_attribute($this->env, $this->source, (isset($context["problem"]) || array_key_exists("problem", $context) ? $context["problem"] : (function () { throw new RuntimeError('Variable "problem" does not exist.', 58, $this->source); })()), "subtask", [], "any", false, false, false, 58) != 0))) {
                    // line 59
                    echo "                    <td rowspan=\"2\" class=\"testsubtask\">
                        <input type=\"number\" class=\"inputsubtask\" min=1 max =\"";
                    // line 60
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["problem"]) || array_key_exists("problem", $context) ? $context["problem"] : (function () { throw new RuntimeError('Variable "problem" does not exist.', 60, $this->source); })()), "subtask", [], "any", false, false, false, 60), "html", null, true);
                    echo "\" id=\"task[";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["testcase"], "rank", [], "any", false, false, false, 60), "html", null, true);
                    echo "]\" name=\"task[";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["testcase"], "rank", [], "any", false, false, false, 60), "html", null, true);
                    echo "]\" value=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["testcase"], "task", [], "any", false, false, false, 60), "html", null, true);
                    echo "\"/>
                    </td>
                    ";
                }
                // line 63
                echo "                    <td class=\"filename\">
                        <a href=\"";
                // line 64
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_problem_testcase_fetch", ["probId" => twig_get_attribute($this->env, $this->source, (isset($context["problem"]) || array_key_exists("problem", $context) ? $context["problem"] : (function () { throw new RuntimeError('Variable "problem" does not exist.', 64, $this->source); })()), "probid", [], "any", false, false, false, 64), "rank" => twig_get_attribute($this->env, $this->source, $context["testcase"], "rank", [], "any", false, false, false, 64), "type" => "input"]), "html", null, true);
                echo "\">
                            p";
                // line 65
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["problem"]) || array_key_exists("problem", $context) ? $context["problem"] : (function () { throw new RuntimeError('Variable "problem" does not exist.', 65, $this->source); })()), "probid", [], "any", false, false, false, 65), "html", null, true);
                echo ".t";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["testcase"], "rank", [], "any", false, false, false, 65), "html", null, true);
                echo ".in
                        </a>
                    </td>
                    <td class=\"size\">
                        ";
                // line 69
                echo App\Utils\Utils::printSize(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["testcaseData"]) || array_key_exists("testcaseData", $context) ? $context["testcaseData"] : (function () { throw new RuntimeError('Variable "testcaseData" does not exist.', 69, $this->source); })()), twig_get_attribute($this->env, $this->source, $context["testcase"], "rank", [], "any", false, false, false, 69), [], "array", false, false, false, 69), "input_size", [], "any", false, false, false, 69));
                echo "
                    </td>
                    <td class=\"md5 small\">
                        ";
                // line 72
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["testcase"], "md5sumInput", [], "any", false, false, false, 72), "html", null, true);
                echo "
                    </td>
                    ";
                // line 74
                if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
                    // line 75
                    echo "                        <td><div class=\"custom-file\">
                            <input type=\"file\" class=\"custom-file-input\" name=\"update_input[";
                    // line 76
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["testcase"], "rank", [], "any", false, false, false, 76), "html", null, true);
                    echo "]\" id=\"update_input_";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["testcase"], "rank", [], "any", false, false, false, 76), "html", null, true);
                    echo "\">
                            <label class=\"custom-file-label text-truncate text-muted\" for=\"update_input_";
                    // line 77
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["testcase"], "rank", [], "any", false, false, false, 77), "html", null, true);
                    echo "\">new input file</label>
                        </div></td>
                    ";
                }
                // line 80
                echo "                    <td class=\"testdesc\">
                        <span class=\"testcase-description\">";
                // line 81
                echo $this->extensions['App\Twig\TwigExtension']->descriptionExpand(twig_get_attribute($this->env, $this->source, $context["testcase"], "description", [0 => true], "method", false, false, false, 81));
                echo "</span>
                        ";
                // line 82
                if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
                    // line 83
                    echo "                            <textarea class=\"d-none form-control testcase-description-field\" name=\"description[";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["testcase"], "rank", [], "any", false, false, false, 83), "html", null, true);
                    echo "]\">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["testcase"], "description", [0 => true], "method", false, false, false, 83), "html", null, true);
                    echo "</textarea>
                            <button type=\"button\" class=\"float-right testcase-edit-description btn btn-secondary btn-sm\">Edit</button>
                        ";
                }
                // line 86
                echo "                    </td>
                </tr>
                <tr>
                    <td class=\"filename\">
                        <a href=\"";
                // line 90
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_problem_testcase_fetch", ["probId" => twig_get_attribute($this->env, $this->source, (isset($context["problem"]) || array_key_exists("problem", $context) ? $context["problem"] : (function () { throw new RuntimeError('Variable "problem" does not exist.', 90, $this->source); })()), "probid", [], "any", false, false, false, 90), "rank" => twig_get_attribute($this->env, $this->source, $context["testcase"], "rank", [], "any", false, false, false, 90), "type" => "output"]), "html", null, true);
                echo "\">
                            p";
                // line 91
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["problem"]) || array_key_exists("problem", $context) ? $context["problem"] : (function () { throw new RuntimeError('Variable "problem" does not exist.', 91, $this->source); })()), "probid", [], "any", false, false, false, 91), "html", null, true);
                echo ".t";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["testcase"], "rank", [], "any", false, false, false, 91), "html", null, true);
                echo ".out
                        </a>
                    </td>
                    <td class=\"size\">
                        ";
                // line 95
                echo App\Utils\Utils::printSize(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["testcaseData"]) || array_key_exists("testcaseData", $context) ? $context["testcaseData"] : (function () { throw new RuntimeError('Variable "testcaseData" does not exist.', 95, $this->source); })()), twig_get_attribute($this->env, $this->source, $context["testcase"], "rank", [], "any", false, false, false, 95), [], "array", false, false, false, 95), "output_size", [], "any", false, false, false, 95));
                echo "
                    </td>
                    <td class=\"md5 small\">
                        ";
                // line 98
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["testcase"], "md5sumOutput", [], "any", false, false, false, 98), "html", null, true);
                echo "
                    </td>
                    ";
                // line 100
                if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
                    // line 101
                    echo "                        <td><div class=\"custom-file\">
                            <input type=\"file\" class=\"custom-file-input\" name=\"update_output[";
                    // line 102
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["testcase"], "rank", [], "any", false, false, false, 102), "html", null, true);
                    echo "]\" id=\"update_output_";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["testcase"], "rank", [], "any", false, false, false, 102), "html", null, true);
                    echo "\">
                            <label class=\"custom-file-label text-truncate text-muted\" for=\"update_output_";
                    // line 103
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["testcase"], "rank", [], "any", false, false, false, 103), "html", null, true);
                    echo "\">new output file</label>
                        </div></td>
                    ";
                }
                // line 106
                echo "                    <td class=\"testimage\">
                        ";
                // line 107
                if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["testcaseData"]) || array_key_exists("testcaseData", $context) ? $context["testcaseData"] : (function () { throw new RuntimeError('Variable "testcaseData" does not exist.', 107, $this->source); })()), twig_get_attribute($this->env, $this->source, $context["testcase"], "rank", [], "any", false, false, false, 107), [], "array", false, false, false, 107), "image_size", [], "any", false, false, false, 107) > 0)) {
                    // line 108
                    echo "                            <a href=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_problem_testcase_fetch", ["probId" => twig_get_attribute($this->env, $this->source, (isset($context["problem"]) || array_key_exists("problem", $context) ? $context["problem"] : (function () { throw new RuntimeError('Variable "problem" does not exist.', 108, $this->source); })()), "probid", [], "any", false, false, false, 108), "rank" => twig_get_attribute($this->env, $this->source, $context["testcase"], "rank", [], "any", false, false, false, 108), "type" => "image"]), "html", null, true);
                    echo "\">
                                <span class=\"filename\">p";
                    // line 109
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["problem"]) || array_key_exists("problem", $context) ? $context["problem"] : (function () { throw new RuntimeError('Variable "problem" does not exist.', 109, $this->source); })()), "probid", [], "any", false, false, false, 109), "html", null, true);
                    echo ".t";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["testcase"], "rank", [], "any", false, false, false, 109), "html", null, true);
                    echo ".";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["testcaseData"]) || array_key_exists("testcaseData", $context) ? $context["testcaseData"] : (function () { throw new RuntimeError('Variable "testcaseData" does not exist.', 109, $this->source); })()), twig_get_attribute($this->env, $this->source, $context["testcase"], "rank", [], "any", false, false, false, 109), [], "array", false, false, false, 109), "image_type", [], "any", false, false, false, 109), "html", null, true);
                    echo "</span>
                            </a>
                            ";
                    // line 111
                    if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
                        // line 112
                        echo "                            &nbsp;
                            <div class=\"custom-file\">
                                <input type=\"file\" class=\"custom-file-input\" name=\"update_image[";
                        // line 114
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["testcase"], "rank", [], "any", false, false, false, 114), "html", null, true);
                        echo "]\" id=\"update_image_";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["testcase"], "rank", [], "any", false, false, false, 114), "html", null, true);
                        echo "\">
                                <label class=\"custom-file-label text-truncate text-muted\" for=\"update_image_";
                        // line 115
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["testcase"], "rank", [], "any", false, false, false, 115), "html", null, true);
                        echo "\">replace image</label>
                            </div>
                            ";
                    }
                    // line 118
                    echo "                        ";
                } else {
                    // line 119
                    echo "                            ";
                    if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
                        // line 120
                        echo "                            <div class=\"custom-file\">
                                <input type=\"file\" class=\"custom-file-input\" name=\"update_image[";
                        // line 121
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["testcase"], "rank", [], "any", false, false, false, 121), "html", null, true);
                        echo "]\" id=\"update_image_";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["testcase"], "rank", [], "any", false, false, false, 121), "html", null, true);
                        echo "\">
                                <label class=\"custom-file-label text-truncate text-muted\" for=\"update_image_";
                        // line 122
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["testcase"], "rank", [], "any", false, false, false, 122), "html", null, true);
                        echo "\">add an image</label>
                            </div>
                            ";
                    } else {
                        // line 125
                        echo "                            <span class=\"nodata\">No image</span>
                            ";
                    }
                    // line 127
                    echo "                        ";
                }
                // line 128
                echo "                    </td>
                </tr>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['rank'], $context['testcase'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 131
            echo "            </tbody>
        </table>
    ";
        }
        // line 134
        echo "
    ";
        // line 135
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 136
            echo "        <h2>Create new testcase</h2>

        <div class=\"form-row\">
            <div class=\"form-group col-sm-4\">
                <div class=\"custom-file\">
                    <input type=\"file\" class=\"custom-file-input\" name=\"add_input\" id=\"add_input\">
                    <label class=\"custom-file-label text-truncate text-muted\" for=\"add_input\">Input testdata</label>
                </div>
            </div>
        </div>

        <div class=\"form-row\">
            <div class=\"form-group col-sm-4\">
                <div class=\"custom-file\">
                    <input type=\"file\" class=\"custom-file-input\" name=\"add_output\" id=\"add_output\">
                    <label class=\"custom-file-label text-truncate text-muted\" for=\"add_output\">Output testdata</label>
                </div>
            </div>
        </div>

        <div class=\"form-row\">
            <div class=\"form-group col-sm-4\">
                <div class=\"custom-control custom-checkbox\">
                    <input type=\"checkbox\" class=\"custom-control-input\" id=\"add_sample\" name=\"add_sample\">
                    <label class=\"custom-control-label\" for=\"add_sample\">Sample testcase</label>
                </div>
            </div>
        </div>
        <div class=\"form-row\">
            <div class=\"form-group col-sm-4\">
                ";
            // line 166
            if (((twig_get_attribute($this->env, $this->source, (isset($context["problem"]) || array_key_exists("problem", $context) ? $context["problem"] : (function () { throw new RuntimeError('Variable "problem" does not exist.', 166, $this->source); })()), "subtask", [], "any", false, false, false, 166) != null) && (twig_get_attribute($this->env, $this->source, (isset($context["problem"]) || array_key_exists("problem", $context) ? $context["problem"] : (function () { throw new RuntimeError('Variable "problem" does not exist.', 166, $this->source); })()), "subtask", [], "any", false, false, false, 166) != 0))) {
                // line 167
                echo "                <td rowspan=\"2\" class=\"testsubtask\">
                    <input type=\"number\" class=\"inputsubtask\" min=1 max =\"";
                // line 168
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["problem"]) || array_key_exists("problem", $context) ? $context["problem"] : (function () { throw new RuntimeError('Variable "problem" does not exist.', 168, $this->source); })()), "subtask", [], "any", false, false, false, 168), "html", null, true);
                echo "\" name=\"add_task\" id=\"add_task\" /> Task
                </td>
                ";
            }
            // line 171
            echo "            </div>
        </div>
        <div class=\"form-row\">
            <div class=\"form-group col-sm-4\">
                <label for=\"add_desc\">Description</label>
                <textarea name=\"add_desc\" id=\"add_desc\" rows=\"5\" class=\"form-control\"></textarea>
            </div>
        </div>

        <div class=\"form-row\">
            <div class=\"form-group col-sm-4\">
                <div class=\"custom-file\">
                    <input type=\"file\" class=\"custom-file-input\" name=\"add_image\" id=\"add_image\">
                    <label class=\"custom-file-label text-truncate text-muted\" for=\"add_image\">Image</label>
                </div>
            </div>
        </div>

        <input type=\"submit\" class=\"btn btn-primary\" value=\"Submit all changes\">
    ";
        }
        // line 191
        echo "
    ";
        // line 192
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 193
            echo "        ";
            // line 194
            echo "        ";
            $context["formEnd"] = "</form>";
            // line 195
            echo "        ";
            echo (isset($context["formEnd"]) || array_key_exists("formEnd", $context) ? $context["formEnd"] : (function () { throw new RuntimeError('Variable "formEnd" does not exist.', 195, $this->source); })());
            echo "
    ";
        }
        // line 197
        echo "
    <script>
        \$(function() {
            \$('.testcase-edit-description').on('click', function() {
                var \$button = \$(this);
                var \$description = \$button.parent().find('.testcase-description');
                var \$descriptionInput = \$button.parent().find('.testcase-description-field');

                if (\$description.hasClass('d-none')) {
                    \$description.removeClass('d-none');
                    \$descriptionInput.addClass('d-none');
                    \$button.text('Edit');
                    \$descriptionInput.val(\$description.text());
                } else {
                    \$description.addClass('d-none');
                    \$descriptionInput.removeClass('d-none');
                    \$button.text('Cancel');
                }
            });
        });
    </script>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "jury/problem_testcases.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  516 => 197,  510 => 195,  507 => 194,  505 => 193,  503 => 192,  500 => 191,  478 => 171,  472 => 168,  469 => 167,  467 => 166,  435 => 136,  433 => 135,  430 => 134,  425 => 131,  417 => 128,  414 => 127,  410 => 125,  404 => 122,  398 => 121,  395 => 120,  392 => 119,  389 => 118,  383 => 115,  377 => 114,  373 => 112,  371 => 111,  362 => 109,  357 => 108,  355 => 107,  352 => 106,  346 => 103,  340 => 102,  337 => 101,  335 => 100,  330 => 98,  324 => 95,  315 => 91,  311 => 90,  305 => 86,  296 => 83,  294 => 82,  290 => 81,  287 => 80,  281 => 77,  275 => 76,  272 => 75,  270 => 74,  265 => 72,  259 => 69,  250 => 65,  246 => 64,  243 => 63,  231 => 60,  228 => 59,  226 => 58,  219 => 56,  215 => 55,  208 => 51,  204 => 50,  199 => 48,  195 => 46,  191 => 45,  185 => 41,  181 => 39,  179 => 38,  174 => 35,  170 => 33,  168 => 32,  161 => 27,  157 => 25,  154 => 24,  148 => 22,  145 => 21,  143 => 20,  141 => 19,  133 => 16,  125 => 13,  122 => 12,  112 => 11,  100 => 8,  95 => 7,  85 => 6,  63 => 4,  52 => 1,  50 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"jury/base.html.twig\" %}
{% import \"jury/jury_macros.twig\" as macros %}

{% block title %}Testcases for p{{ problem.probid }} - {{ parent() }}{% endblock %}

{% block extrahead %}
    {{ parent() }}
    {{ macros.table_extrahead() }}
{% endblock %}

{% block content %}

    <h1>Testcases for p{{ problem.probid }} - {{ problem.name }}</h1>

    <div class=\"mb-2\">
        <a href=\"{{ path('jury_problem', {'probId': problem.probid}) }}\">Back to problem p{{ problem.probid }}</a>
    </div>

    {% if is_granted('ROLE_ADMIN') %}
        {# We use a variable here so indeting doesn't get screwed up #}
        {% set formStart = '<form method=\"post\" enctype=\"multipart/form-data\">' %}
        {{ formStart | raw }}
    {% endif %}
    {% if testcases is empty %}
        <p class=\"nodata\">No testcase(s) yet.</p>
    {% else %}
        <table class=\"table table-sm table-striped table-hover testcases\">
            <thead>
            <tr>
                <th class=\"testrank\">#</th>
                <th class=\"testsample\">sample</th>
                {% if problem.subtask != null and problem.subtask != 0 %}
                <th class=\"testsubtask\">task</th>
                {% endif %}
                <th>download</th>
                <th>size</th>
                <th>md5</th>
                {% if is_granted('ROLE_ADMIN') %}
                    <th>upload new</th>
                {% endif %}
                <th>description / image</th>
            </tr>
            </thead>
            <tbody>
            {% for rank, testcase in testcases %}
                <tr>
                    <td rowspan=\"2\" class=\"testrank\">
                        <a href=\"{{ path('jury_problem_testcase_move', {'probId': problem.probid, 'rank': testcase.rank, 'direction': 'up'}) }}\"
                           title=\"Move testcase up\"><i class=\"fas fa-arrow-up\"></i></a><br>
                        {{ testcase.rank }}<br>
                        <a href=\"{{ path('jury_problem_testcase_move', {'probId': problem.probid, 'rank': testcase.rank, 'direction': 'down'}) }}\"
                           title=\"Move testcase down\"><i class=\"fas fa-arrow-down\"></i></a>
                    </td>
                    <td rowspan=\"2\" class=\"testsample\">
                        <input type=\"checkbox\" name=\"sample[{{ testcase.rank }}]\" value=\"sample\"
                               {% if testcase.sample %}checked{% endif %} />
                    </td>
                    {% if problem.subtask != null and problem.subtask != 0 %}
                    <td rowspan=\"2\" class=\"testsubtask\">
                        <input type=\"number\" class=\"inputsubtask\" min=1 max =\"{{problem.subtask}}\" id=\"task[{{ testcase.rank }}]\" name=\"task[{{ testcase.rank }}]\" value=\"{{testcase.task}}\"/>
                    </td>
                    {% endif %}
                    <td class=\"filename\">
                        <a href=\"{{ path('jury_problem_testcase_fetch', {'probId': problem.probid, 'rank': testcase.rank, 'type': 'input'}) }}\">
                            p{{ problem.probid }}.t{{ testcase.rank }}.in
                        </a>
                    </td>
                    <td class=\"size\">
                        {{ testcaseData[testcase.rank].input_size | printSize }}
                    </td>
                    <td class=\"md5 small\">
                        {{ testcase.md5sumInput }}
                    </td>
                    {% if is_granted('ROLE_ADMIN') %}
                        <td><div class=\"custom-file\">
                            <input type=\"file\" class=\"custom-file-input\" name=\"update_input[{{ testcase.rank }}]\" id=\"update_input_{{testcase.rank}}\">
                            <label class=\"custom-file-label text-truncate text-muted\" for=\"update_input_{{testcase.rank}}\">new input file</label>
                        </div></td>
                    {% endif %}
                    <td class=\"testdesc\">
                        <span class=\"testcase-description\">{{ testcase.description(true) | descriptionExpand }}</span>
                        {% if is_granted('ROLE_ADMIN') %}
                            <textarea class=\"d-none form-control testcase-description-field\" name=\"description[{{ testcase.rank }}]\">{{ testcase.description(true) }}</textarea>
                            <button type=\"button\" class=\"float-right testcase-edit-description btn btn-secondary btn-sm\">Edit</button>
                        {% endif %}
                    </td>
                </tr>
                <tr>
                    <td class=\"filename\">
                        <a href=\"{{ path('jury_problem_testcase_fetch', {'probId': problem.probid, 'rank': testcase.rank, 'type': 'output'}) }}\">
                            p{{ problem.probid }}.t{{ testcase.rank }}.out
                        </a>
                    </td>
                    <td class=\"size\">
                        {{ testcaseData[testcase.rank].output_size | printSize }}
                    </td>
                    <td class=\"md5 small\">
                        {{ testcase.md5sumOutput }}
                    </td>
                    {% if is_granted('ROLE_ADMIN') %}
                        <td><div class=\"custom-file\">
                            <input type=\"file\" class=\"custom-file-input\" name=\"update_output[{{ testcase.rank }}]\" id=\"update_output_{{testcase.rank}}\">
                            <label class=\"custom-file-label text-truncate text-muted\" for=\"update_output_{{testcase.rank}}\">new output file</label>
                        </div></td>
                    {% endif %}
                    <td class=\"testimage\">
                        {% if testcaseData[testcase.rank].image_size > 0 %}
                            <a href=\"{{ path('jury_problem_testcase_fetch', {'probId': problem.probid, 'rank': testcase.rank, 'type': 'image'}) }}\">
                                <span class=\"filename\">p{{ problem.probid }}.t{{ testcase.rank }}.{{ testcaseData[testcase.rank].image_type }}</span>
                            </a>
                            {% if is_granted('ROLE_ADMIN') %}
                            &nbsp;
                            <div class=\"custom-file\">
                                <input type=\"file\" class=\"custom-file-input\" name=\"update_image[{{ testcase.rank }}]\" id=\"update_image_{{testcase.rank}}\">
                                <label class=\"custom-file-label text-truncate text-muted\" for=\"update_image_{{testcase.rank}}\">replace image</label>
                            </div>
                            {% endif %}
                        {% else %}
                            {% if is_granted('ROLE_ADMIN') %}
                            <div class=\"custom-file\">
                                <input type=\"file\" class=\"custom-file-input\" name=\"update_image[{{ testcase.rank }}]\" id=\"update_image_{{testcase.rank}}\">
                                <label class=\"custom-file-label text-truncate text-muted\" for=\"update_image_{{testcase.rank}}\">add an image</label>
                            </div>
                            {% else %}
                            <span class=\"nodata\">No image</span>
                            {% endif %}
                        {% endif %}
                    </td>
                </tr>
            {% endfor %}
            </tbody>
        </table>
    {% endif %}

    {% if is_granted('ROLE_ADMIN') %}
        <h2>Create new testcase</h2>

        <div class=\"form-row\">
            <div class=\"form-group col-sm-4\">
                <div class=\"custom-file\">
                    <input type=\"file\" class=\"custom-file-input\" name=\"add_input\" id=\"add_input\">
                    <label class=\"custom-file-label text-truncate text-muted\" for=\"add_input\">Input testdata</label>
                </div>
            </div>
        </div>

        <div class=\"form-row\">
            <div class=\"form-group col-sm-4\">
                <div class=\"custom-file\">
                    <input type=\"file\" class=\"custom-file-input\" name=\"add_output\" id=\"add_output\">
                    <label class=\"custom-file-label text-truncate text-muted\" for=\"add_output\">Output testdata</label>
                </div>
            </div>
        </div>

        <div class=\"form-row\">
            <div class=\"form-group col-sm-4\">
                <div class=\"custom-control custom-checkbox\">
                    <input type=\"checkbox\" class=\"custom-control-input\" id=\"add_sample\" name=\"add_sample\">
                    <label class=\"custom-control-label\" for=\"add_sample\">Sample testcase</label>
                </div>
            </div>
        </div>
        <div class=\"form-row\">
            <div class=\"form-group col-sm-4\">
                {% if problem.subtask != null and problem.subtask != 0 %}
                <td rowspan=\"2\" class=\"testsubtask\">
                    <input type=\"number\" class=\"inputsubtask\" min=1 max =\"{{problem.subtask}}\" name=\"add_task\" id=\"add_task\" /> Task
                </td>
                {% endif %}
            </div>
        </div>
        <div class=\"form-row\">
            <div class=\"form-group col-sm-4\">
                <label for=\"add_desc\">Description</label>
                <textarea name=\"add_desc\" id=\"add_desc\" rows=\"5\" class=\"form-control\"></textarea>
            </div>
        </div>

        <div class=\"form-row\">
            <div class=\"form-group col-sm-4\">
                <div class=\"custom-file\">
                    <input type=\"file\" class=\"custom-file-input\" name=\"add_image\" id=\"add_image\">
                    <label class=\"custom-file-label text-truncate text-muted\" for=\"add_image\">Image</label>
                </div>
            </div>
        </div>

        <input type=\"submit\" class=\"btn btn-primary\" value=\"Submit all changes\">
    {% endif %}

    {% if is_granted('ROLE_ADMIN') %}
        {# We use a variable here so indeting doesn't get screwed up #}
        {% set formEnd = '</form>' %}
        {{ formEnd | raw }}
    {% endif %}

    <script>
        \$(function() {
            \$('.testcase-edit-description').on('click', function() {
                var \$button = \$(this);
                var \$description = \$button.parent().find('.testcase-description');
                var \$descriptionInput = \$button.parent().find('.testcase-description-field');

                if (\$description.hasClass('d-none')) {
                    \$description.removeClass('d-none');
                    \$descriptionInput.addClass('d-none');
                    \$button.text('Edit');
                    \$descriptionInput.val(\$description.text());
                } else {
                    \$description.addClass('d-none');
                    \$descriptionInput.removeClass('d-none');
                    \$button.text('Cancel');
                }
            });
        });
    </script>

{% endblock %}
", "jury/problem_testcases.html.twig", "/opt/domjudge/domserver/webapp/templates/jury/problem_testcases.html.twig");
    }
}
