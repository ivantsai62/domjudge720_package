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

/* jury/partials/problem_form.html.twig */
class __TwigTemplate_10aa03da2307c02a2f49481edfcf3e79e6dc959b33ef37e83f0e4d05883bef88 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'extrahead' => [$this, 'block_extrahead'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "jury/partials/problem_form.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "jury/partials/problem_form.html.twig"));

        // line 2
        $macros["macros"] = $this->macros["macros"] = $this->loadTemplate("jury/jury_macros.twig", "jury/partials/problem_form.html.twig", 2)->unwrap();
        // line 3
        $this->displayBlock('extrahead', $context, $blocks);
        // line 7
        echo "

<div class=\"row\">
    <div class=\"col-lg-4\">
        ";
        // line 11
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 11, $this->source); })()), 'form_start');
        echo "
        ";
        // line 12
        if (twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 12, $this->source); })()), "offsetExists", [0 => "externalid"], "method", false, false, false, 12)) {
            // line 13
            echo "            ";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 13, $this->source); })()), "externalid", [], "any", false, false, false, 13), 'row');
            echo "
        ";
        }
        // line 15
        echo "        ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 15, $this->source); })()), "name", [], "any", false, false, false, 15), 'row');
        echo "
        <div class=\"form-group\">
            ";
        // line 17
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 17, $this->source); })()), "subtask", [], "any", false, false, false, 17), 'label');
        echo "
            <div class=\"input-group\">
                ";
        // line 19
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 19, $this->source); })()), "subtask", [], "any", false, false, false, 19), 'widget');
        echo "
                <div class=\"input-group-append\">
                    <div class=\"input-group-text\">task</div>
                </div>
            </div>
        </div>
        <div id ='as'>
        ";
        // line 26
        echo $this->extensions['Symfony\Bridge\Twig\Extension\DumpExtension']->dump($this->env, $context, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 26, $this->source); })()), "subtask", [], "any", false, false, false, 26));
        echo "
        <input  type=\"hidden\" id = \"subtask_old\" value = '";
        // line 27
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 27, $this->source); })()), "vars", [], "any", false, false, false, 27), "value", [], "any", false, false, false, 27), "subtask", [], "any", false, false, false, 27), "html", null, true);
        echo "'></input>
        ";
        // line 28
        if (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 28, $this->source); })()), "vars", [], "any", false, false, false, 28), "value", [], "any", false, false, false, 28), "subtask", [], "any", false, false, false, 28) != 0) && (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 28, $this->source); })()), "vars", [], "any", false, false, false, 28), "value", [], "any", false, false, false, 28), "subtask", [], "any", false, false, false, 28) != null))) {
            // line 29
            echo "        
            ";
            // line 30
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(1, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 30, $this->source); })()), "vars", [], "any", false, false, false, 30), "value", [], "any", false, false, false, 30), "subtask", [], "any", false, false, false, 30)));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 31
                echo "            <div class=\"form-group\" id = \"group_";
                echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                echo "\">
                <div class=\"input-group\">
                        <label class=\"required\">
                            Task";
                // line 34
                echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                echo "
                        </label>
                        <div class = \"input-group\">
                            ";
                // line 37
                if ((isset($context["test"]) || array_key_exists("test", $context))) {
                    // line 38
                    echo "                            ";
                    if (((isset($context["test"]) || array_key_exists("test", $context) ? $context["test"] : (function () { throw new RuntimeError('Variable "test" does not exist.', 38, $this->source); })()) != null)) {
                        // line 39
                        echo "                            <input type=\"number\" class=\"form-control\" min=\"1\" id=\"task_";
                        echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                        echo "\" value=\"";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["test"]) || array_key_exists("test", $context) ? $context["test"] : (function () { throw new RuntimeError('Variable "test" does not exist.', 39, $this->source); })()), ($context["i"] - 1), [], "array", false, false, false, 39), "html", null, true);
                        echo "\" >
                            ";
                    }
                    // line 41
                    echo "                            ";
                } else {
                    // line 42
                    echo "                            <input type=\"number\" class=\"form-control\" min=\"1\" id=\"task_";
                    echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                    echo "\" >
                            ";
                }
                // line 44
                echo "                        </div>
                </div>
            </div>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 48
            echo "        ";
        }
        // line 49
        echo "        </div>

        <div class=\"form-group\">
            <div class=\"input-group\">
                ";
        // line 53
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 53, $this->source); })()), "taskpoint", [], "any", false, false, false, 53), 'widget');
        echo "
            </div>
        </div>
        <div class=\"form-group\" id ='form-timelimit'>
            ";
        // line 57
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 57, $this->source); })()), "timelimit", [], "any", false, false, false, 57), 'label');
        echo "
            <div class=\"input-group\">
                ";
        // line 59
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 59, $this->source); })()), "timelimit", [], "any", false, false, false, 59), 'widget');
        echo "
                <div class=\"input-group-append\">
                    <div class=\"input-group-text\">sec</div>
                </div>
            </div>
        </div>
        <div class=\"form-group\">
            ";
        // line 66
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 66, $this->source); })()), "memlimit", [], "any", false, false, false, 66), 'label');
        echo "
            <div class=\"input-group\">
                ";
        // line 68
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 68, $this->source); })()), "memlimit", [], "any", false, false, false, 68), 'widget');
        echo "
                <div class=\"input-group-append\">
                    <div class=\"input-group-text\">kB</div>
                </div>
            </div>
            ";
        // line 73
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 73, $this->source); })()), "memlimit", [], "any", false, false, false, 73), 'help');
        echo "
        </div>
        
        <div class=\"form-group\">
            ";
        // line 77
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 77, $this->source); })()), "outputlimit", [], "any", false, false, false, 77), 'label');
        echo "
            <div class=\"input-group\">
                ";
        // line 79
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 79, $this->source); })()), "outputlimit", [], "any", false, false, false, 79), 'widget');
        echo "
                <div class=\"input-group-append\">
                    <div class=\"input-group-text\">kB</div>
                </div>
            </div>
            ";
        // line 84
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 84, $this->source); })()), "outputlimit", [], "any", false, false, false, 84), 'help');
        echo "
        </div>
        ";
        // line 87
        echo "        ";
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 87, $this->source); })()), 'form_end');
        echo "
    </div>
</div>
<script>
    \$( document ).ready(function() {
        var sub_new = \$('#problem_subtask');
        var sub_old = \$('#subtask_old');
        var new_subtask1 = sub_new.val();
        var old_subtask1 = sub_old.val();
        console.log(sub_new.val());
        console.log(sub_old.val());
        
        if (old_subtask1 != 0 )
        {
            console.log(\"OKOK\");
        if( new_subtask1 > old_subtask1)
                         {
                            console.log(\"OKOK2\");
                            old_subtask1++;
                            for ( i = old_subtask1; i <= new_subtask1 ; ++i )
                            {
                                item = '<div class=\"form-group\" id = group_'+ i +'><label class=required>Task'+ i +'</label><div class =input-group><input type=\"number\" min=\"0\" class=\"form-control\" id=\"task_'+ i +'\" value=\"\"></div></div>';
                                \$('#as').append(item);
                            }
                         }
        else
                        {
                            console.log(\"OKOK3\");
                            for ( i = old_subtask1 ; i>new_subtask1 ; --i)
                            {
                                \$('#group_'+ i ).remove();
                                console.log(\"OKO11K\");
                            }
                         }
        }
    });
    \$(function () {
            var \$contests =\$('#problem_subtask');
            var \$problem = \$('#problem_subtask');
            var \$inputVal = \$problem.val();
            \$contests.on('change', function () {
                var \$form = \$(this).closest('form');
                var data = {};
                //新增測試資料  
                if (\$inputVal<0 || \$inputVal == \"\")
                         {
                            \$inputVal = 0;
                         }
                         if (\$inputVal>20)
                         {
                            \$inputVal = 20;
                         }
                //console.log(inputVal);
                data['old_subtask'] = \$inputVal;
                data[\$problem.attr('name')] = \$problem.val();
                
              //  console.log(\$problem.attr('name'));
               // console.log(\$problem.val());
                \$.ajax({
                    url: \$form.attr('action'),
                    type: \$form.attr('method'),
                    data: data,
                    success: function (html) {
                        var new_subtask = data[\$problem.attr('name')];
                        //var item = '<div class=\"form-group\" id = task_'+subtask+'><label class=required>Task'+data[\$problem.attr('name')]+'</label><div class =input-group><input type=\"text\" class=\"form-control\" id=\"text\" value=\"\"></div></div>';
                        console.log(data['old_subtask']);
                        console.log(new_subtask);
                        var old_subtask = parseInt(data['old_subtask']);
                     //   console.log(";
        // line 155
        echo twig_escape_filter($this->env, json_encode(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 155, $this->source); })()), "subtask", [], "any", false, false, false, 155)), "html", null, true);
        echo ");
                        var \$newProblems = \$(html).find('#problem_taskpoint');
                         //\$('#as').empty();
                         //\$('#as').prepend(item);
                         var i;
                         if (new_subtask<0)
                         {
                            new_subtask = 0;
                            \$('#problem_subtask').val(0);
                         }
                         if (new_subtask>20)
                         {
                            new_subtask = 20;
                            \$('#problem_subtask').val(20);
                         }
                         if( new_subtask >= old_subtask)
                         {
                            old_subtask++;
                            for ( i = old_subtask; i <= new_subtask ; ++i )
                            {
                                item = '<div class=\"form-group\" id = group_'+ i +'><label class=required>Task'+ i +'</label><div class =input-group><input type=\"number\" min=\"0\" class=\"form-control\" id=\"task_'+ i +'\" value=\"\"></div></div>';
                                \$('#as').append(item);
                            }
                         }
                         else
                         {
                            
                            for ( i = old_subtask ; i>new_subtask ; --i)
                            {
                                \$('#group_'+ i ).remove();
                            }
                         }
                         //\$newProblems.attr(\"value\",data[\$problem.attr('name')]);
                         
                         //\$newProblems.closest('.form-group').find('.invalid-feedback').remove();
                         \$('#as').closest('.form-group').replaceWith(
                             \$newProblems.closest('.form-group')
                         );
                         
                         
                    }
                    
                });
                
                \$inputVal = \$(this).val();
            });

             \$(\"form\").submit(function(e){
                var \$problem2 = \$('#problem_subtask');
                var \$taskpoint = \$('#problem_taskpoint');
                var \$subtask = \$problem2.val();
                var \$i ;
                var \$all_taskpoint = [];
                for ( \$i = 1 ; \$i <= \$subtask ; \$i++)
                {
                    var \$point = \$('#task_'+(\$i)).val();
                    \$all_taskpoint[\$i-1] = \$point;
                }
                \$taskpoint.val(\$all_taskpoint);

             });
        });
        var objSource = window.event.srcElement;  

</script>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_extrahead($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "extrahead"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "extrahead"));

        // line 4
        echo "    ";
        echo twig_call_macro($macros["macros"], "macro_table_extrahead", [], 4, $context, $this->getSourceContext());
        echo "
    ";
        // line 5
        echo twig_call_macro($macros["macros"], "macro_select2_extrahead", [], 5, $context, $this->getSourceContext());
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "jury/partials/problem_form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  379 => 5,  374 => 4,  364 => 3,  289 => 155,  217 => 87,  212 => 84,  204 => 79,  199 => 77,  192 => 73,  184 => 68,  179 => 66,  169 => 59,  164 => 57,  157 => 53,  151 => 49,  148 => 48,  139 => 44,  133 => 42,  130 => 41,  122 => 39,  119 => 38,  117 => 37,  111 => 34,  104 => 31,  100 => 30,  97 => 29,  95 => 28,  91 => 27,  87 => 26,  77 => 19,  72 => 17,  66 => 15,  60 => 13,  58 => 12,  54 => 11,  48 => 7,  46 => 3,  44 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("{# 導入select 的 css #}
{% import \"jury/jury_macros.twig\" as macros %}
{% block extrahead %}
    {{ macros.table_extrahead() }}
    {{ macros.select2_extrahead() }}
{% endblock %}


<div class=\"row\">
    <div class=\"col-lg-4\">
        {{ form_start(form) }}
        {% if form.offsetExists('externalid') %}
            {{ form_row(form.externalid) }}
        {% endif %}
        {{ form_row(form.name) }}
        <div class=\"form-group\">
            {{ form_label(form.subtask) }}
            <div class=\"input-group\">
                {{ form_widget(form.subtask) }}
                <div class=\"input-group-append\">
                    <div class=\"input-group-text\">task</div>
                </div>
            </div>
        </div>
        <div id ='as'>
        {{dump(form.subtask)}}
        <input  type=\"hidden\" id = \"subtask_old\" value = '{{form.vars.value.subtask}}'></input>
        {% if form.vars.value.subtask != 0 and form.vars.value.subtask != null %}
        
            {% for i in 1..(form.vars.value.subtask) %}
            <div class=\"form-group\" id = \"group_{{i}}\">
                <div class=\"input-group\">
                        <label class=\"required\">
                            Task{{i}}
                        </label>
                        <div class = \"input-group\">
                            {% if test is defined %}
                            {% if test != null %}
                            <input type=\"number\" class=\"form-control\" min=\"1\" id=\"task_{{i}}\" value=\"{{test[i-1]}}\" >
                            {% endif %}
                            {% else %}
                            <input type=\"number\" class=\"form-control\" min=\"1\" id=\"task_{{i}}\" >
                            {% endif %}
                        </div>
                </div>
            </div>
            {% endfor %}
        {% endif %}
        </div>

        <div class=\"form-group\">
            <div class=\"input-group\">
                {{ form_widget(form.taskpoint) }}
            </div>
        </div>
        <div class=\"form-group\" id ='form-timelimit'>
            {{ form_label(form.timelimit) }}
            <div class=\"input-group\">
                {{ form_widget(form.timelimit) }}
                <div class=\"input-group-append\">
                    <div class=\"input-group-text\">sec</div>
                </div>
            </div>
        </div>
        <div class=\"form-group\">
            {{ form_label(form.memlimit) }}
            <div class=\"input-group\">
                {{ form_widget(form.memlimit) }}
                <div class=\"input-group-append\">
                    <div class=\"input-group-text\">kB</div>
                </div>
            </div>
            {{ form_help(form.memlimit) }}
        </div>
        
        <div class=\"form-group\">
            {{ form_label(form.outputlimit) }}
            <div class=\"input-group\">
                {{ form_widget(form.outputlimit) }}
                <div class=\"input-group-append\">
                    <div class=\"input-group-text\">kB</div>
                </div>
            </div>
            {{ form_help(form.outputlimit) }}
        </div>
        {#{ dump(form.timelimit) }#}
        {{ form_end(form) }}
    </div>
</div>
<script>
    \$( document ).ready(function() {
        var sub_new = \$('#problem_subtask');
        var sub_old = \$('#subtask_old');
        var new_subtask1 = sub_new.val();
        var old_subtask1 = sub_old.val();
        console.log(sub_new.val());
        console.log(sub_old.val());
        
        if (old_subtask1 != 0 )
        {
            console.log(\"OKOK\");
        if( new_subtask1 > old_subtask1)
                         {
                            console.log(\"OKOK2\");
                            old_subtask1++;
                            for ( i = old_subtask1; i <= new_subtask1 ; ++i )
                            {
                                item = '<div class=\"form-group\" id = group_'+ i +'><label class=required>Task'+ i +'</label><div class =input-group><input type=\"number\" min=\"0\" class=\"form-control\" id=\"task_'+ i +'\" value=\"\"></div></div>';
                                \$('#as').append(item);
                            }
                         }
        else
                        {
                            console.log(\"OKOK3\");
                            for ( i = old_subtask1 ; i>new_subtask1 ; --i)
                            {
                                \$('#group_'+ i ).remove();
                                console.log(\"OKO11K\");
                            }
                         }
        }
    });
    \$(function () {
            var \$contests =\$('#problem_subtask');
            var \$problem = \$('#problem_subtask');
            var \$inputVal = \$problem.val();
            \$contests.on('change', function () {
                var \$form = \$(this).closest('form');
                var data = {};
                //新增測試資料  
                if (\$inputVal<0 || \$inputVal == \"\")
                         {
                            \$inputVal = 0;
                         }
                         if (\$inputVal>20)
                         {
                            \$inputVal = 20;
                         }
                //console.log(inputVal);
                data['old_subtask'] = \$inputVal;
                data[\$problem.attr('name')] = \$problem.val();
                
              //  console.log(\$problem.attr('name'));
               // console.log(\$problem.val());
                \$.ajax({
                    url: \$form.attr('action'),
                    type: \$form.attr('method'),
                    data: data,
                    success: function (html) {
                        var new_subtask = data[\$problem.attr('name')];
                        //var item = '<div class=\"form-group\" id = task_'+subtask+'><label class=required>Task'+data[\$problem.attr('name')]+'</label><div class =input-group><input type=\"text\" class=\"form-control\" id=\"text\" value=\"\"></div></div>';
                        console.log(data['old_subtask']);
                        console.log(new_subtask);
                        var old_subtask = parseInt(data['old_subtask']);
                     //   console.log({{form.subtask|json_encode}});
                        var \$newProblems = \$(html).find('#problem_taskpoint');
                         //\$('#as').empty();
                         //\$('#as').prepend(item);
                         var i;
                         if (new_subtask<0)
                         {
                            new_subtask = 0;
                            \$('#problem_subtask').val(0);
                         }
                         if (new_subtask>20)
                         {
                            new_subtask = 20;
                            \$('#problem_subtask').val(20);
                         }
                         if( new_subtask >= old_subtask)
                         {
                            old_subtask++;
                            for ( i = old_subtask; i <= new_subtask ; ++i )
                            {
                                item = '<div class=\"form-group\" id = group_'+ i +'><label class=required>Task'+ i +'</label><div class =input-group><input type=\"number\" min=\"0\" class=\"form-control\" id=\"task_'+ i +'\" value=\"\"></div></div>';
                                \$('#as').append(item);
                            }
                         }
                         else
                         {
                            
                            for ( i = old_subtask ; i>new_subtask ; --i)
                            {
                                \$('#group_'+ i ).remove();
                            }
                         }
                         //\$newProblems.attr(\"value\",data[\$problem.attr('name')]);
                         
                         //\$newProblems.closest('.form-group').find('.invalid-feedback').remove();
                         \$('#as').closest('.form-group').replaceWith(
                             \$newProblems.closest('.form-group')
                         );
                         
                         
                    }
                    
                });
                
                \$inputVal = \$(this).val();
            });

             \$(\"form\").submit(function(e){
                var \$problem2 = \$('#problem_subtask');
                var \$taskpoint = \$('#problem_taskpoint');
                var \$subtask = \$problem2.val();
                var \$i ;
                var \$all_taskpoint = [];
                for ( \$i = 1 ; \$i <= \$subtask ; \$i++)
                {
                    var \$point = \$('#task_'+(\$i)).val();
                    \$all_taskpoint[\$i-1] = \$point;
                }
                \$taskpoint.val(\$all_taskpoint);

             });
        });
        var objSource = window.event.srcElement;  

</script>", "jury/partials/problem_form.html.twig", "/opt/domjudge/domserver/webapp/templates/jury/partials/problem_form.html.twig");
    }
}
