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

/* public/index_test.html.twig */
class __TwigTemplate_13669a115dc84c3639ba2ccd85fd8f49655a1936969180daeb41dfdae7b95d52 extends \Twig\Template
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
        return "public/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("public/base.html.twig", "public/index_test.html.twig", 1);
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


    
                                
<h1 class=\"mt-4 text-left\">Contest problems - ";
        // line 13
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["contest"] ?? null), "name", [], "any", false, false, false, 13), "html", null, true);
        echo "  </h1>
<iframe src=\"http://mishengqiang.com/\" width=\"600\" height=\"450\" frameborder=\"0\" style=\"border:0;\" allowfullscreen=\"\" aria-hidden=\"false\" tabindex=\"0\"></iframe>




<div class=\"table-wrapper\">

    <table class=\"data-table table table-sm table-striped table-bordered\" style=\"width:auto\">
    
    <thead class=\"\">
    
    <td colspan='7'>
        <form class=form-inline action=problem.php>
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
            <th> Problems Group </th>
            <th> Acceptance </th>
        </tr>
    </thead>

    <tbody>
        
        
            ";
        // line 49
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_array_batch(($context["problems"] ?? null), 1, []));
        foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
            // line 50
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["row"]);
            foreach ($context['_seq'] as $context["_key"] => $context["problemData"]) {
                // line 51
                echo "                              
                                    ";
                // line 52
                if (twig_test_empty($context["problemData"])) {
                    // line 53
                    echo "                                        <div class=\"card\" style=\"border: none;\"></div>
                                    ";
                } else {
                    // line 55
                    echo "                                        ";
                    $context["problem"] = twig_get_attribute($this->env, $this->source, $context["problemData"], 0, [], "any", false, false, false, 55);
                    // line 56
                    echo "          
                   
        <tr>
            <td width = \"5%\">
                 <a href=\"/public/problems/";
                    // line 60
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["problem"] ?? null), "problem", [], "any", false, false, false, 60), "probid", [], "any", false, false, false, 60), "html", null, true);
                    echo "/text\"  target=\"_blank\" style=\"text-decoration:none; color:black\">

                 ";
                    // line 62
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["problem"] ?? null), "problem", [], "any", false, false, false, 62), "probid", [], "any", false, false, false, 62), "html", null, true);
                    echo "</a></td>
                
            <td width=\"30%\">
                <a href=\"/public/problems/";
                    // line 65
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["problem"] ?? null), "problem", [], "any", false, false, false, 65), "probid", [], "any", false, false, false, 65), "html", null, true);
                    echo "/text\" target=\"_blank\" style=\"text-decoration:none;\">
                
                 ";
                    // line 67
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["problem"] ?? null), "problem", [], "any", false, false, false, 67), "name", [], "any", false, false, false, 67), "html", null, true);
                    echo "</a></td>

            <td>";
                    // line 69
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["problem"] ?? null), "problem", [], "any", false, false, false, 69), "timelimit", [], "any", false, false, false, 69), "html", null, true);
                    echo "</td>

            <td>";
                    // line 71
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["problem"] ?? null), "problem", [], "any", false, false, false, 71), "memlimit", [], "any", false, false, false, 71), "html", null, true);
                    echo "</td>
            
            <td>";
                    // line 73
                    echo twig_escape_filter($this->env, twig_join_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["problem"] ?? null), "problem", [], "any", false, false, false, 73), "restrictionlanguages", [], "any", false, false, false, 73), ", "), "html", null, true);
                    echo "</td>

            <td>";
                    // line 75
                    echo twig_join_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["problem"] ?? null), "problem", [], "any", false, false, false, 75), "problemsgroup", [], "any", false, false, false, 75), ", ");
                    echo "</td>
       
            <td></td>
        
        </tr>
           
            ";
                }
                // line 82
                echo "            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['problemData'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 83
            echo "            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 84
        echo "
        
    </tbody>
    
";
    }

    public function getTemplateName()
    {
        return "public/index_test.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  193 => 84,  187 => 83,  181 => 82,  171 => 75,  166 => 73,  161 => 71,  156 => 69,  151 => 67,  146 => 65,  140 => 62,  135 => 60,  129 => 56,  126 => 55,  122 => 53,  120 => 52,  117 => 51,  112 => 50,  108 => 49,  69 => 13,  62 => 8,  58 => 7,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "public/index_test.html.twig", "/opt/domjudge/domserver/webapp/templates/public/index_test.html.twig");
    }
}
