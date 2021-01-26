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
class __TwigTemplate_4fc9505187471130fd129fe15af9b2b31a4a7b6b5722848c465a394a0d6f1c4a extends \Twig\Template
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
        $this->parent = $this->loadTemplate("team/base.html.twig", "team/index_test.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Contest problems - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "

";
    }

    // line 7
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 8
        echo "      
                                
<h1 class=\"mt-4 text-left\">Problem list - ";
        // line 10
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["contest"] ?? null), "name", [], "any", false, false, false, 10), "html", null, true);
        echo "  </h1>
<iframe src=\"https://hackmd.io/6be_WN0FQ7elCaO9tIgsdA\" width=\"600\" height=\"450\" frameborder=\"0\" style=\"border:0;\" allowfullscreen=\"\" aria-hidden=\"false\" tabindex=\"0\"></iframe>


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
        $context['_seq'] = twig_ensure_traversable(twig_array_batch(($context["problems"] ?? null), 1, []));
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
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["problem"] ?? null), "problem", [], "any", false, false, false, 55), "probid", [], "any", false, false, false, 55), "html", null, true);
                    echo "/text\" target=\"_blank\" style=\"text-decoration:none; color:black\">

                 ";
                    // line 57
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["problem"] ?? null), "problem", [], "any", false, false, false, 57), "probid", [], "any", false, false, false, 57), "html", null, true);
                    echo "</a></td>
                
            <td width=\"30%\">
                <a href=\"/team/problem_list/";
                    // line 60
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["problem"] ?? null), "problem", [], "any", false, false, false, 60), "probid", [], "any", false, false, false, 60), "html", null, true);
                    echo "\" target=\"_blank\" style=\"text-decoration:none;\">
                
                 ";
                    // line 62
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["problem"] ?? null), "problem", [], "any", false, false, false, 62), "name", [], "any", false, false, false, 62), "html", null, true);
                    echo "</a></td>

            <td>";
                    // line 64
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["problem"] ?? null), "problem", [], "any", false, false, false, 64), "timelimit", [], "any", false, false, false, 64), "html", null, true);
                    echo "</td>

            <td>";
                    // line 66
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["problem"] ?? null), "problem", [], "any", false, false, false, 66), "memlimit", [], "any", false, false, false, 66), "html", null, true);
                    echo "</td>
            
            <td>";
                    // line 68
                    echo twig_escape_filter($this->env, twig_join_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["problem"] ?? null), "problem", [], "any", false, false, false, 68), "restrictionlanguages", [], "any", false, false, false, 68), ", "), "html", null, true);
                    echo "</td>

            
            ";
                    // line 71
                    if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["problem"] ?? null), "problem", [], "any", false, false, false, 71), "problemsgroup", [], "any", false, false, false, 71) != null)) {
                        echo " 
        
            <td class=\"hidden_td\" style=\"display: none\">";
                        // line 73
                        echo twig_join_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["problem"] ?? null), "problem", [], "any", false, false, false, 73), "problemsgroup", [], "any", false, false, false, 73), ", ");
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
        return array (  200 => 83,  194 => 82,  188 => 81,  180 => 75,  175 => 73,  170 => 71,  164 => 68,  159 => 66,  154 => 64,  149 => 62,  144 => 60,  138 => 57,  133 => 55,  127 => 51,  124 => 50,  120 => 48,  118 => 47,  115 => 46,  110 => 45,  106 => 44,  103 => 43,  101 => 42,  66 => 10,  62 => 8,  58 => 7,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "team/index_test.html.twig", "/opt/domjudge/domserver/webapp/templates/team/index_test.html.twig");
    }
}
