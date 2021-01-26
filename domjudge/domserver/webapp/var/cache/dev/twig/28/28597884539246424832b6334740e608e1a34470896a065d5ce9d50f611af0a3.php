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

/* team/index_test.html.twig */
class __TwigTemplate_76853444447ee4ebcfbf53e9c95ea1bba37a06514a5077f212cb8f7fb4a21180 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "team/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "team/index_test.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "team/index_test.html.twig"));

        $this->parent = $this->loadTemplate("team/base.html.twig", "team/index_test.html.twig", 1);
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

        echo "Contest problems - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 7
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 8
        echo "      
                                
<h1 class=\"mt-4 text-left\">Problem list - ";
        // line 10
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["contest"]) || array_key_exists("contest", $context) ? $context["contest"] : (function () { throw new RuntimeError('Variable "contest" does not exist.', 10, $this->source); })()), "name", [], "any", false, false, false, 10), "html", null, true);
        echo "  </h1>
<iframe src=\"https://hackmd.io/fm_XJBkDRNmhDyAZtbIKvw?view\" width=\"50%\" height=\"450\" frameborder=\"0\" style=\"border:0;\" allowfullscreen=\"\" aria-hidden=\"false\" tabindex=\"0\"></iframe>


<div class=\"table-wrapper\">

    <table class=\"data-table table table-sm table-striped table-borderexited\" style=\"width:auto\">
    
    <thead class=\"\">
    
    <td colspan='7'>
        <form class=form-inline action=\"\">
            <input class=\"form-control search-query\" type='text' name='id'  placeholder=\"Problem ID\">
            <button class=\"form-control\" type='submit' >Go</button></form>
            <form class=\"form-search form-inline\">
            <input type=\"text\" name=search class=\"form-control search-query\" placeholder=\"Keywords Title or Source\">
            <button type=\"submit\" class=\"form-control\">Search</button>
        </form>
    </td>
        
        <tr>
            <th scope=\"col\">#</th>
            <th> Problem Name </th>
            <th> Time Limit </th> 
            <th> Memory Limit </th>
            <th> Restriction Languages </th>
            <th id='trigger_group'> Problems Group </th>
            <th> Acceptance </th>
        </tr>
    </thead>

    <tbody>
        ";
        // line 42
        $context["num_group"] = 0;
        // line 43
        echo "        
            ";
        // line 44
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_array_batch((isset($context["problems"]) || array_key_exists("problems", $context) ? $context["problems"] : (function () { throw new RuntimeError('Variable "problems" does not exist.', 44, $this->source); })()), 1, []));
        foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
            // line 45
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["row"]);
            foreach ($context['_seq'] as $context["_key"] => $context["problemData"]) {
                // line 46
                echo "                              
                                    ";
                // line 47
                if (twig_test_empty($context["problemData"])) {
                    // line 48
                    echo "                                        <div class=\"card\" style=\"border: none;\"></div>
                                    ";
                } else {
                    // line 50
                    echo "                                        ";
                    $context["problem"] = twig_get_attribute($this->env, $this->source, $context["problemData"], 0, [], "any", false, false, false, 50);
                    // line 51
                    echo "          
        
        <tr>
            <td width = \"5%\">
                 <a href=\"/public/problems/";
                    // line 55
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["problem"]) || array_key_exists("problem", $context) ? $context["problem"] : (function () { throw new RuntimeError('Variable "problem" does not exist.', 55, $this->source); })()), "problem", [], "any", false, false, false, 55), "probid", [], "any", false, false, false, 55), "html", null, true);
                    echo "/text\" target=\"_blank\" style=\"text-decoration:none; color:black\">

                 ";
                    // line 57
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["problem"]) || array_key_exists("problem", $context) ? $context["problem"] : (function () { throw new RuntimeError('Variable "problem" does not exist.', 57, $this->source); })()), "problem", [], "any", false, false, false, 57), "probid", [], "any", false, false, false, 57), "html", null, true);
                    echo "</a></td>
                
            <td width=\"30%\">
                <a href=\"/team/problem_list/";
                    // line 60
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["problem"]) || array_key_exists("problem", $context) ? $context["problem"] : (function () { throw new RuntimeError('Variable "problem" does not exist.', 60, $this->source); })()), "problem", [], "any", false, false, false, 60), "probid", [], "any", false, false, false, 60), "html", null, true);
                    echo "\" target=\"_blank\" style=\"text-decoration:none;\">
                
                 ";
                    // line 62
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["problem"]) || array_key_exists("problem", $context) ? $context["problem"] : (function () { throw new RuntimeError('Variable "problem" does not exist.', 62, $this->source); })()), "problem", [], "any", false, false, false, 62), "name", [], "any", false, false, false, 62), "html", null, true);
                    echo "</a></td>

            <td>";
                    // line 64
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["problem"]) || array_key_exists("problem", $context) ? $context["problem"] : (function () { throw new RuntimeError('Variable "problem" does not exist.', 64, $this->source); })()), "problem", [], "any", false, false, false, 64), "timelimit", [], "any", false, false, false, 64), "html", null, true);
                    echo "</td>

            <td>";
                    // line 66
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["problem"]) || array_key_exists("problem", $context) ? $context["problem"] : (function () { throw new RuntimeError('Variable "problem" does not exist.', 66, $this->source); })()), "problem", [], "any", false, false, false, 66), "memlimit", [], "any", false, false, false, 66), "html", null, true);
                    echo "</td>
            
            <td>";
                    // line 68
                    echo twig_escape_filter($this->env, twig_join_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["problem"]) || array_key_exists("problem", $context) ? $context["problem"] : (function () { throw new RuntimeError('Variable "problem" does not exist.', 68, $this->source); })()), "problem", [], "any", false, false, false, 68), "restrictionlanguages", [], "any", false, false, false, 68), ", "), "html", null, true);
                    echo "</td>

            
            ";
                    // line 71
                    if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["problem"]) || array_key_exists("problem", $context) ? $context["problem"] : (function () { throw new RuntimeError('Variable "problem" does not exist.', 71, $this->source); })()), "problem", [], "any", false, false, false, 71), "problemsgroup", [], "any", false, false, false, 71) != null)) {
                        echo " 
        
            <td class=\"hidden_td\" style=\"display: none\">";
                        // line 73
                        echo twig_join_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["problem"]) || array_key_exists("problem", $context) ? $context["problem"] : (function () { throw new RuntimeError('Variable "problem" does not exist.', 73, $this->source); })()), "problem", [], "any", false, false, false, 73), "problemsgroup", [], "any", false, false, false, 73), ", ");
                        echo "</td>
             ";
                    }
                    // line 75
                    echo "       
            <td></td>
            
        </tr>
           
            ";
                }
                // line 81
                echo "            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['problemData'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 82
            echo "            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 83
        echo "
        
    </tbody>

<script>
    \$(\"#trigger_group\").click(function(){
            \$(\".hidden_td\").slideToggle();
  });
</script>

    
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "team/index_test.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  230 => 83,  224 => 82,  218 => 81,  210 => 75,  205 => 73,  200 => 71,  194 => 68,  189 => 66,  184 => 64,  179 => 62,  174 => 60,  168 => 57,  163 => 55,  157 => 51,  154 => 50,  150 => 48,  148 => 47,  145 => 46,  140 => 45,  136 => 44,  133 => 43,  131 => 42,  96 => 10,  92 => 8,  82 => 7,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"team/base.html.twig\" %}

{% block title %}Contest problems - {{ parent() }}

{% endblock %}

{% block content %}
      
                                
<h1 class=\"mt-4 text-left\">Problem list - {{ contest.name }}  </h1>
<iframe src=\"https://hackmd.io/fm_XJBkDRNmhDyAZtbIKvw?view\" width=\"50%\" height=\"450\" frameborder=\"0\" style=\"border:0;\" allowfullscreen=\"\" aria-hidden=\"false\" tabindex=\"0\"></iframe>


<div class=\"table-wrapper\">

    <table class=\"data-table table table-sm table-striped table-borderexited\" style=\"width:auto\">
    
    <thead class=\"\">
    
    <td colspan='7'>
        <form class=form-inline action=\"\">
            <input class=\"form-control search-query\" type='text' name='id'  placeholder=\"Problem ID\">
            <button class=\"form-control\" type='submit' >Go</button></form>
            <form class=\"form-search form-inline\">
            <input type=\"text\" name=search class=\"form-control search-query\" placeholder=\"Keywords Title or Source\">
            <button type=\"submit\" class=\"form-control\">Search</button>
        </form>
    </td>
        
        <tr>
            <th scope=\"col\">#</th>
            <th> Problem Name </th>
            <th> Time Limit </th> 
            <th> Memory Limit </th>
            <th> Restriction Languages </th>
            <th id='trigger_group'> Problems Group </th>
            <th> Acceptance </th>
        </tr>
    </thead>

    <tbody>
        {% set num_group = 0 %}
        
            {% for row in problems|batch(1, []) %}
            {% for problemData in row %}
                              
                                    {% if problemData is empty %}
                                        <div class=\"card\" style=\"border: none;\"></div>
                                    {% else %}
                                        {% set problem = problemData.0 %}
          
        
        <tr>
            <td width = \"5%\">
                 <a href=\"/public/problems/{{problem.problem.probid}}/text\" target=\"_blank\" style=\"text-decoration:none; color:black\">

                 {{ problem.problem.probid }}</a></td>
                
            <td width=\"30%\">
                <a href=\"/team/problem_list/{{problem.problem.probid}}\" target=\"_blank\" style=\"text-decoration:none;\">
                
                 {{problem.problem.name }}</a></td>

            <td>{{ problem.problem.timelimit }}</td>

            <td>{{ problem.problem.memlimit }}</td>
            
            <td>{{ problem.problem.restrictionlanguages|join(', ') }}</td>

            
            {% if problem.problem.problemsgroup != null %} 
        
            <td class=\"hidden_td\" style=\"display: none\">{{ problem.problem.problemsgroup|join(', ')|raw }}</td>
             {% endif %}
       
            <td></td>
            
        </tr>
           
            {% endif %}
            {% endfor %}
            {% endfor %}

        
    </tbody>

<script>
    \$(\"#trigger_group\").click(function(){
            \$(\".hidden_td\").slideToggle();
  });
</script>

    
{% endblock %}
", "team/index_test.html.twig", "/opt/domjudge/domserver/webapp/templates/team/index_test.html.twig");
    }
}
