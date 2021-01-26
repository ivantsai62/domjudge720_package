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

/* partials/problem_list.html.twig */
class __TwigTemplate_6c36ffba32f18fd2a48b2e621b3eb1e5bc3cbeffece4247aa098fe9fbecb25f5 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "partials/problem_list.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "partials/problem_list.html.twig"));

        // line 2
        echo "
<h1 class=\"mt-4 text-center\">Contest problems</h1>

";
        // line 5
        if (twig_test_empty((isset($context["problems"]) || array_key_exists("problems", $context) ? $context["problems"] : (function () { throw new RuntimeError('Variable "problems" does not exist.', 5, $this->source); })()))) {
            // line 6
            echo "    <div class=\"alert alert-secondary\">No problem texts available at this point.</div>
";
        } else {
            // line 8
            echo "

    <div class=\"container\">
        <div class=\"row problem-list\">
            ";
            // line 12
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_array_batch((isset($context["problems"]) || array_key_exists("problems", $context) ? $context["problems"] : (function () { throw new RuntimeError('Variable "problems" does not exist.', 12, $this->source); })()), 3, []));
            foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
                // line 13
                echo "                <div class=\"col-md-12\">
                    <div class=\"card-deck my-md-3\">
                
                        ";
                // line 16
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["row"]);
                foreach ($context['_seq'] as $context["_key"] => $context["problemData"]) {
                    // line 17
                    echo "                      
                            ";
                    // line 18
                    if (twig_test_empty($context["problemData"])) {
                        // line 19
                        echo "                                <div class=\"card\" style=\"border: none;\"></div>
                            ";
                    } else {
                        // line 21
                        echo "                                ";
                        $context["problem"] = twig_get_attribute($this->env, $this->source, $context["problemData"], 0, [], "any", false, false, false, 21);
                        // line 22
                        echo "                                ";
                        $context["numsamples"] = twig_get_attribute($this->env, $this->source, $context["problemData"], "numsamples", [], "any", false, false, false, 22);
                        // line 23
                        echo "                               
                                
                                
                              

                                <div class=\"card\">
                                    <div class=\"card-body\">
                                        <h3 class=\"card-title\">
                                            ";
                        // line 31
                        if (twig_get_attribute($this->env, $this->source, (isset($context["problem"]) || array_key_exists("problem", $context) ? $context["problem"] : (function () { throw new RuntimeError('Variable "problem" does not exist.', 31, $this->source); })()), "color", [], "any", false, false, false, 31)) {
                            // line 32
                            echo "                                                <div class=\"circle\"
                                                     style=\"background-color: ";
                            // line 33
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["problem"]) || array_key_exists("problem", $context) ? $context["problem"] : (function () { throw new RuntimeError('Variable "problem" does not exist.', 33, $this->source); })()), "color", [], "any", false, false, false, 33), "html", null, true);
                            echo ";\"></div>
                                                Problem ";
                            // line 34
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["problem"]) || array_key_exists("problem", $context) ? $context["problem"] : (function () { throw new RuntimeError('Variable "problem" does not exist.', 34, $this->source); })()), "shortName", [], "any", false, false, false, 34), "html", null, true);
                            echo "
                                            ";
                        }
                        // line 36
                        echo "                                        </h3>
                                        <h4 class=\"card-subtitle mb-2 text-muted\">
                                            ";
                        // line 38
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["problem"]) || array_key_exists("problem", $context) ? $context["problem"] : (function () { throw new RuntimeError('Variable "problem" does not exist.', 38, $this->source); })()), "problem", [], "any", false, false, false, 38), "name", [], "any", false, false, false, 38), "html", null, true);
                        echo "
                                        </h4>
                                        ";
                        // line 40
                        if ((isset($context["showLimits"]) || array_key_exists("showLimits", $context) ? $context["showLimits"] : (function () { throw new RuntimeError('Variable "showLimits" does not exist.', 40, $this->source); })())) {
                            // line 41
                            echo "                                            <h5 class=\"card-subtitle mb-2 text-muted\">
                                                Limits: ";
                            // line 42
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["problem"]) || array_key_exists("problem", $context) ? $context["problem"] : (function () { throw new RuntimeError('Variable "problem" does not exist.', 42, $this->source); })()), "problem", [], "any", false, false, false, 42), "timelimit", [], "any", false, false, false, 42), "html", null, true);
                            echo "
                                                second";
                            // line 44
                            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["problem"]) || array_key_exists("problem", $context) ? $context["problem"] : (function () { throw new RuntimeError('Variable "problem" does not exist.', 44, $this->source); })()), "problem", [], "any", false, false, false, 44), "timelimit", [], "any", false, false, false, 44) > 1)) {
                                echo "s";
                            }
                            // line 45
                            if ((isset($context["timeFactorDiffers"]) || array_key_exists("timeFactorDiffers", $context) ? $context["timeFactorDiffers"] : (function () { throw new RuntimeError('Variable "timeFactorDiffers" does not exist.', 45, $this->source); })())) {
                                // line 46
                                echo "<sup>*</sup>
                                                ";
                            }
                            // line 48
                            echo "                                                /
                                                ";
                            // line 49
                            echo App\Utils\Utils::printSize((((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["problem"] ?? null), "problem", [], "any", false, true, false, 49), "memlimit", [], "any", true, true, false, 49)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["problem"] ?? null), "problem", [], "any", false, true, false, 49), "memlimit", [], "any", false, false, false, 49), (isset($context["defaultMemoryLimit"]) || array_key_exists("defaultMemoryLimit", $context) ? $context["defaultMemoryLimit"] : (function () { throw new RuntimeError('Variable "defaultMemoryLimit" does not exist.', 49, $this->source); })()))) : ((isset($context["defaultMemoryLimit"]) || array_key_exists("defaultMemoryLimit", $context) ? $context["defaultMemoryLimit"] : (function () { throw new RuntimeError('Variable "defaultMemoryLimit" does not exist.', 49, $this->source); })()))) * 1024));
                            echo "
                                            </h5>
                                        ";
                        }
                        // line 52
                        echo "
                                        ";
                        // line 53
                        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["problem"]) || array_key_exists("problem", $context) ? $context["problem"] : (function () { throw new RuntimeError('Variable "problem" does not exist.', 53, $this->source); })()), "problem", [], "any", false, false, false, 53), "problemtextType", [], "any", false, false, false, 53))) {
                            // line 54
                            echo "                                            <div class=\"text-center\">
                                                <a class=\"btn btn-secondary\" role=\"button\"
                                                   href=\"";
                            // line 56
                            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath((isset($context["problem_text_path"]) || array_key_exists("problem_text_path", $context) ? $context["problem_text_path"] : (function () { throw new RuntimeError('Variable "problem_text_path" does not exist.', 56, $this->source); })()), ["probId" => twig_get_attribute($this->env, $this->source, (isset($context["problem"]) || array_key_exists("problem", $context) ? $context["problem"] : (function () { throw new RuntimeError('Variable "problem" does not exist.', 56, $this->source); })()), "probid", [], "any", false, false, false, 56)]), "html", null, true);
                            echo "\">
                                                    <i class=\"fas fa-file-";
                            // line 57
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["problem"]) || array_key_exists("problem", $context) ? $context["problem"] : (function () { throw new RuntimeError('Variable "problem" does not exist.', 57, $this->source); })()), "problem", [], "any", false, false, false, 57), "problemtextType", [], "any", false, false, false, 57), "html", null, true);
                            echo "\"></i>
                                                    problem text
                                                </a>
                                            </div>
                                            <iframe src=\"";
                            // line 61
                            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath((isset($context["problem_text_path"]) || array_key_exists("problem_text_path", $context) ? $context["problem_text_path"] : (function () { throw new RuntimeError('Variable "problem_text_path" does not exist.', 61, $this->source); })()), ["probId" => twig_get_attribute($this->env, $this->source, (isset($context["problem"]) || array_key_exists("problem", $context) ? $context["problem"] : (function () { throw new RuntimeError('Variable "problem" does not exist.', 61, $this->source); })()), "probid", [], "any", false, false, false, 61)]), "html", null, true);
                            echo "\" width=\"100%\" height=\"768px\"></iframe>
                                            ";
                            // line 62
                            echo $this->extensions['Symfony\Bridge\Twig\Extension\DumpExtension']->dump($this->env, $context);
                            echo "
                                            ";
                            // line 63
                            echo $this->extensions['Symfony\Bridge\Twig\Extension\DumpExtension']->dump($this->env, $context, (isset($context["problem_text_path"]) || array_key_exists("problem_text_path", $context) ? $context["problem_text_path"] : (function () { throw new RuntimeError('Variable "problem_text_path" does not exist.', 63, $this->source); })()));
                            echo "
                                        ";
                        }
                        // line 65
                        echo "
                                        ";
                        // line 66
                        if (((isset($context["numsamples"]) || array_key_exists("numsamples", $context) ? $context["numsamples"] : (function () { throw new RuntimeError('Variable "numsamples" does not exist.', 66, $this->source); })()) > 0)) {
                            // line 67
                            echo "                                            <div>
                                                <br/>
                                            </div>
                                            <h4 class=\"card-subtitle mb-2\">Samples</h4>
                                            <ol class=\"text-center list-group list-group-flush\">
                                                ";
                            // line 72
                            $context['_parent'] = $context;
                            $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["numsamples"]) || array_key_exists("numsamples", $context) ? $context["numsamples"] : (function () { throw new RuntimeError('Variable "numsamples" does not exist.', 72, $this->source); })())));
                            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                                // line 73
                                echo "                                                    <li class=\"list-group-item\">
                                                        <a class=\"btn btn-outline-secondary\" role=\"button\"
                                                           href=\"";
                                // line 75
                                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath((isset($context["problem_sample_testcase_path"]) || array_key_exists("problem_sample_testcase_path", $context) ? $context["problem_sample_testcase_path"] : (function () { throw new RuntimeError('Variable "problem_sample_testcase_path" does not exist.', 75, $this->source); })()), ["probId" => twig_get_attribute($this->env, $this->source, (isset($context["problem"]) || array_key_exists("problem", $context) ? $context["problem"] : (function () { throw new RuntimeError('Variable "problem" does not exist.', 75, $this->source); })()), "probid", [], "any", false, false, false, 75), "type" => "input", "index" => $context["i"]]), "html", null, true);
                                echo "\">
                                                            input ";
                                // line 76
                                if (((isset($context["numsamples"]) || array_key_exists("numsamples", $context) ? $context["numsamples"] : (function () { throw new RuntimeError('Variable "numsamples" does not exist.', 76, $this->source); })()) > 1)) {
                                    echo "#";
                                    echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                                }
                                // line 77
                                echo "                                                        </a>
                                                        <a class=\"btn btn-outline-secondary\" role=\"button\"
                                                           href=\"";
                                // line 79
                                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath((isset($context["problem_sample_testcase_path"]) || array_key_exists("problem_sample_testcase_path", $context) ? $context["problem_sample_testcase_path"] : (function () { throw new RuntimeError('Variable "problem_sample_testcase_path" does not exist.', 79, $this->source); })()), ["probId" => twig_get_attribute($this->env, $this->source, (isset($context["problem"]) || array_key_exists("problem", $context) ? $context["problem"] : (function () { throw new RuntimeError('Variable "problem" does not exist.', 79, $this->source); })()), "probid", [], "any", false, false, false, 79), "type" => "output", "index" => $context["i"]]), "html", null, true);
                                echo "\">
                                                            output ";
                                // line 80
                                if (((isset($context["numsamples"]) || array_key_exists("numsamples", $context) ? $context["numsamples"] : (function () { throw new RuntimeError('Variable "numsamples" does not exist.', 80, $this->source); })()) > 1)) {
                                    echo "#";
                                    echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                                }
                                // line 81
                                echo "                                                        </a>
                                                    </li>
                                                ";
                            }
                            $_parent = $context['_parent'];
                            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                            $context = array_intersect_key($context, $_parent) + $_parent;
                            // line 84
                            echo "                                                <li class=\"list-group-item\">
                                                    <a class=\"btn btn-outline-secondary\" role=\"button\"
                                                       href=\"";
                            // line 86
                            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath((isset($context["problem_sample_zip_path"]) || array_key_exists("problem_sample_zip_path", $context) ? $context["problem_sample_zip_path"] : (function () { throw new RuntimeError('Variable "problem_sample_zip_path" does not exist.', 86, $this->source); })()), ["probId" => twig_get_attribute($this->env, $this->source, (isset($context["problem"]) || array_key_exists("problem", $context) ? $context["problem"] : (function () { throw new RuntimeError('Variable "problem" does not exist.', 86, $this->source); })()), "probid", [], "any", false, false, false, 86)]), "html", null, true);
                            echo "\">
                                                        zip with all samples
                                                    </a>
                                                </li>
                                            </ol>
                                        ";
                        }
                        // line 92
                        echo "                                    </div>
                                </div>
                            ";
                    }
                    // line 95
                    echo "                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['problemData'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 96
                echo "                    </div>
                </div>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 99
            echo "        </div>

        ";
            // line 101
            if (((isset($context["showLimits"]) || array_key_exists("showLimits", $context) ? $context["showLimits"] : (function () { throw new RuntimeError('Variable "showLimits" does not exist.', 101, $this->source); })()) && (isset($context["timeFactorDiffers"]) || array_key_exists("timeFactorDiffers", $context) ? $context["timeFactorDiffers"] : (function () { throw new RuntimeError('Variable "timeFactorDiffers" does not exist.', 101, $this->source); })()))) {
                // line 102
                echo "            <div class=\"row\">
                <div class=\"col-md-12 my-sm-3\">
                    <div class=\" alert alert-secondary\" role=\"alert\">
                        * language time factors apply
                    </div>
                </div>
            </div>
        ";
            }
            // line 110
            echo "    </div>
";
        }
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "partials/problem_list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  280 => 110,  270 => 102,  268 => 101,  264 => 99,  256 => 96,  250 => 95,  245 => 92,  236 => 86,  232 => 84,  224 => 81,  219 => 80,  215 => 79,  211 => 77,  206 => 76,  202 => 75,  198 => 73,  194 => 72,  187 => 67,  185 => 66,  182 => 65,  177 => 63,  173 => 62,  169 => 61,  162 => 57,  158 => 56,  154 => 54,  152 => 53,  149 => 52,  143 => 49,  140 => 48,  136 => 46,  134 => 45,  130 => 44,  126 => 42,  123 => 41,  121 => 40,  116 => 38,  112 => 36,  107 => 34,  103 => 33,  100 => 32,  98 => 31,  88 => 23,  85 => 22,  82 => 21,  78 => 19,  76 => 18,  73 => 17,  69 => 16,  64 => 13,  60 => 12,  54 => 8,  50 => 6,  48 => 5,  43 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("{# problem \\App\\Entity\\ContestProblem #}

<h1 class=\"mt-4 text-center\">Contest problems</h1>

{% if problems is empty %}
    <div class=\"alert alert-secondary\">No problem texts available at this point.</div>
{% else %}


    <div class=\"container\">
        <div class=\"row problem-list\">
            {% for row in problems|batch(3, []) %}
                <div class=\"col-md-12\">
                    <div class=\"card-deck my-md-3\">
                
                        {% for problemData in row %}
                      
                            {% if problemData is empty %}
                                <div class=\"card\" style=\"border: none;\"></div>
                            {% else %}
                                {% set problem = problemData.0 %}
                                {% set numsamples = problemData.numsamples %}
                               
                                
                                
                              

                                <div class=\"card\">
                                    <div class=\"card-body\">
                                        <h3 class=\"card-title\">
                                            {% if problem.color %}
                                                <div class=\"circle\"
                                                     style=\"background-color: {{ problem.color }};\"></div>
                                                Problem {{ problem.shortName }}
                                            {% endif %}
                                        </h3>
                                        <h4 class=\"card-subtitle mb-2 text-muted\">
                                            {{ problem.problem.name }}
                                        </h4>
                                        {% if showLimits %}
                                            <h5 class=\"card-subtitle mb-2 text-muted\">
                                                Limits: {{ problem.problem.timelimit }}
                                                second
                                                {%- if problem.problem.timelimit > 1 %}s{% endif %}
                                                {%- if timeFactorDiffers -%}
                                                    <sup>*</sup>
                                                {% endif %}
                                                /
                                                {{ ((problem.problem.memlimit | default(defaultMemoryLimit)) * 1024) | printSize }}
                                            </h5>
                                        {% endif %}

                                        {% if problem.problem.problemtextType is not empty %}
                                            <div class=\"text-center\">
                                                <a class=\"btn btn-secondary\" role=\"button\"
                                                   href=\"{{ path(problem_text_path, {'probId': problem.probid}) }}\">
                                                    <i class=\"fas fa-file-{{ problem.problem.problemtextType }}\"></i>
                                                    problem text
                                                </a>
                                            </div>
                                            <iframe src=\"{{ path(problem_text_path, {'probId': problem.probid}) }}\" width=\"100%\" height=\"768px\"></iframe>
                                            {{dump()}}
                                            {{dump(problem_text_path)}}
                                        {% endif %}

                                        {% if numsamples > 0 %}
                                            <div>
                                                <br/>
                                            </div>
                                            <h4 class=\"card-subtitle mb-2\">Samples</h4>
                                            <ol class=\"text-center list-group list-group-flush\">
                                                {% for i in 1..numsamples %}
                                                    <li class=\"list-group-item\">
                                                        <a class=\"btn btn-outline-secondary\" role=\"button\"
                                                           href=\"{{ path(problem_sample_testcase_path, {'probId': problem.probid, 'type': 'input', 'index': i}) }}\">
                                                            input {% if numsamples > 1 %}#{{ i }}{% endif %}
                                                        </a>
                                                        <a class=\"btn btn-outline-secondary\" role=\"button\"
                                                           href=\"{{ path(problem_sample_testcase_path, {'probId': problem.probid, 'type': 'output', 'index': i}) }}\">
                                                            output {% if numsamples > 1 %}#{{ i }}{% endif %}
                                                        </a>
                                                    </li>
                                                {% endfor %}
                                                <li class=\"list-group-item\">
                                                    <a class=\"btn btn-outline-secondary\" role=\"button\"
                                                       href=\"{{ path(problem_sample_zip_path, {'probId': problem.probid}) }}\">
                                                        zip with all samples
                                                    </a>
                                                </li>
                                            </ol>
                                        {% endif %}
                                    </div>
                                </div>
                            {% endif %}
                        {% endfor %}
                    </div>
                </div>
            {% endfor %}
        </div>

        {% if showLimits and timeFactorDiffers %}
            <div class=\"row\">
                <div class=\"col-md-12 my-sm-3\">
                    <div class=\" alert alert-secondary\" role=\"alert\">
                        * language time factors apply
                    </div>
                </div>
            </div>
        {% endif %}
    </div>
{% endif %}
", "partials/problem_list.html.twig", "/opt/domjudge/domserver/webapp/templates/partials/problem_list.html.twig");
    }
}
