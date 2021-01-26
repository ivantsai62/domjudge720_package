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

/* jury/analysis/team.html.twig */
class __TwigTemplate_3476616246fbbd08fab3b63704ba73dd43827d350b77481c95c886b51651ece3 extends \Twig\Template
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
            'body' => [$this, 'block_body'],
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "jury/analysis/team.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "jury/analysis/team.html.twig"));

        $this->parent = $this->loadTemplate("jury/base.html.twig", "jury/analysis/team.html.twig", 1);
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

        echo "Analysis - Team ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["team"]) || array_key_exists("team", $context) ? $context["team"] : (function () { throw new RuntimeError('Variable "team" does not exist.', 3, $this->source); })()), "name", [], "any", false, false, false, 3), "html", null, true);
        
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
        echo "<link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/nv.d3.min.css"), "html", null, true);
        echo "\">
<script src=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/d3.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/nv.d3.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/FileSaver.min.js"), "html", null, true);
        echo "\"></script>
<style>
.row.equal {
  display: flex;
  flex-wrap: wrap;
}
.card {
  height: 100%;
}

/* Don't show x-axis ticks/ticklines for max runtimes chart*/
#maxruntime .nv-x.nv-axis .tick {
  display: none;
}
</style>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 26
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 27
        echo "<div class=\"container-fluid\">
  <div class=\"row equal mt-3\">
    <div class=\"col-12\">
      <h1>Team ";
        // line 30
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["team"]) || array_key_exists("team", $context) ? $context["team"] : (function () { throw new RuntimeError('Variable "team" does not exist.', 30, $this->source); })()), "teamid", [], "any", false, false, false, 30), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["team"]) || array_key_exists("team", $context) ? $context["team"] : (function () { throw new RuntimeError('Variable "team" does not exist.', 30, $this->source); })()), "name", [], "any", false, false, false, 30), "html", null, true);
        echo "</h1>
    </div>
    <div class=\"col-lg-3 col-sm-6 mt-3\">
      <div class=\"card\">
        <div class=\"card-header\">
          Misc Statistics
        </div>
        <div class=\"card-body\">
          <dl class=\"row\">
            <dt class=\"col-sm-6\"># Submissions</dt>
            <dd class=\"col-sm-6\">";
        // line 40
        echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["submissions"]) || array_key_exists("submissions", $context) ? $context["submissions"] : (function () { throw new RuntimeError('Variable "submissions" does not exist.', 40, $this->source); })())), "html", null, true);
        echo "</dd>

            <dt class=\"col-sm-6\"># Correct</dt>
            <dd class=\"col-sm-6\">";
        // line 43
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["results"] ?? null), "correct", [], "array", true, true, false, 43)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["results"] ?? null), "correct", [], "array", false, false, false, 43), 0)) : (0)), "html", null, true);
        echo " <span class=\"text-muted\">(";
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["misc"]) || array_key_exists("misc", $context) ? $context["misc"] : (function () { throw new RuntimeError('Variable "misc" does not exist.', 43, $this->source); })()), "correct_percentage", [], "any", false, false, false, 43), 2), "html", null, true);
        echo "%)</span></dd>
          </dl>
        </div>
      </div>
    </div>
    <div class=\"col-lg-4 col-sm-6 mt-3\" id=\"judging_results\">
      <div class=\"card\">
        <div class=\"card-header\">
          Judging Results
        </div>
        <div class=\"card-body\">
          <svg style=\"height: 275px\"></svg>
        </div>
      </div>
    </div>
    <div class=\"col-lg-5 col-sm-12 mt-3\" id=\"submission_times\">
      <div class=\"card\">
        <div class=\"card-header\">
          Submissions over Time
        </div>
        <div class=\"card-body\">
            <svg style=\"height: 275px\"></svg>
        </div>
      </div>
    </div>
  </div>
  <div class=\"row equal\">
  ";
        // line 70
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["problems"]) || array_key_exists("problems", $context) ? $context["problems"] : (function () { throw new RuntimeError('Variable "problems" does not exist.', 70, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["problem"]) {
            // line 71
            echo "      <div class=\"col-3 mt-3\" id=\"maxruntime_";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["problem"], "probid", [], "any", false, false, false, 71), "html", null, true);
            echo "\">
        <div class=\"card\">
          <div class=\"card-header\">
            Max Runtimes for problem ";
            // line 74
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["problem"], "name", [], "any", false, false, false, 74), "html", null, true);
            echo "
          </div>
          <div class=\"card-body\">
            <svg style=\"height: 200px\"></svg>
          </div>
        </div>
      </div>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['problem'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 82
        echo "  </div>
</div>


<script>
";
        // line 88
        $context["colors"] = ["correct" => "#01df01", "wrong-answer" => "red", "timelimit" => "orange", "run-error" => "#ff3399", "compiler-error" => "grey", "no-output" => "purple", "frozen" => "blue", "output-limit" => "black"];
        // line 99
        echo "\$(function(){

    ";
        // line 101
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["problems"]) || array_key_exists("problems", $context) ? $context["problems"] : (function () { throw new RuntimeError('Variable "problems" does not exist.', 101, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["problem"]) {
            // line 102
            echo "      var run_max_times_";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["problem"], "probid", [], "any", false, false, false, 102), "html", null, true);
            echo " = [
        {
          key: \"Max Runtimes\",
          values: [
            ";
            // line 106
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_array_filter((isset($context["judgings"]) || array_key_exists("judgings", $context) ? $context["judgings"] : (function () { throw new RuntimeError('Variable "judgings" does not exist.', 106, $this->source); })()), function ($__j__) use ($context) { $context["j"] = $__j__; return (twig_get_attribute($this->env, $this->source, $context["j"], "result", [], "any", false, false, false, 106) && (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["j"], "submission", [], "any", false, false, false, 106), "problem", [], "any", false, false, false, 106) == $context["problem"])); }));
            foreach ($context['_seq'] as $context["_key"] => $context["j"]) {
                // line 107
                echo "              {
                \"id\"    : ";
                // line 108
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["j"], "judgingid", [], "any", false, false, false, 108), "html", null, true);
                echo ",
                \"label\" : \"j";
                // line 109
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["j"], "judgingid", [], "any", false, false, false, 109), "html", null, true);
                echo "\",
                \"value\" : ";
                // line 110
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["j"], "maxRuntime", [], "method", false, false, false, 110), "html", null, true);
                echo ",
                \"valid\" : ";
                // line 111
                echo ((twig_get_attribute($this->env, $this->source, $context["j"], "valid", [], "any", false, false, false, 111)) ? ("true") : ("false"));
                echo ",
                \"submittime\"  : \"";
                // line 112
                echo twig_escape_filter($this->env, $this->extensions['App\Twig\TwigExtension']->printtime(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["j"], "submission", [], "any", false, false, false, 112), "submittime", [], "any", false, false, false, 112), null, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["j"], "submission", [], "any", false, false, false, 112), "contest", [], "any", false, false, false, 112)), "html", null, true);
                echo "\",
                \"color\" : \"";
                // line 113
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["colors"]) || array_key_exists("colors", $context) ? $context["colors"] : (function () { throw new RuntimeError('Variable "colors" does not exist.', 113, $this->source); })()), twig_get_attribute($this->env, $this->source, $context["j"], "result", [], "any", false, false, false, 113), [], "array", false, false, false, 113), "html", null, true);
                echo "\",
\t\t\"firstfile\" : \"";
                // line 114
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["j"], "submission", [], "any", false, false, false, 114), "files", [], "any", false, false, false, 114), 0, [], "array", false, false, false, 114), "filename", [], "any", false, false, false, 114), "html", null, true);
                echo "\",
              },
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['j'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 117
            echo "          ]
        }
      ];
      nv.addGraph(function() {
        var chart = nv.models.discreteBarChart()
            .x(function(d) { return d.label })
            .y(function(d) { return d.value })
            .valueFormat(d3.format('.3f'))
            .staggerLabels(run_max_times_";
            // line 125
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["problem"], "probid", [], "any", false, false, false, 125), "html", null, true);
            echo "[0].values.length > 10)
            .showValues(false)
            .forceY([0, ";
            // line 127
            echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, $context["problem"], "timelimit", [], "any", false, false, false, 127) * 1.2), "html", null, true);
            echo "])
            .margin({bottom: 90})
            .duration(250)
          ;


        chart.yAxis
          .tickFormat(d3.format('.3f'))
          .axisLabel('Runtime(in s)');
        chart.xAxis.axisLabel(\"Judgings\");
        d3.select('#maxruntime_";
            // line 137
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["problem"], "probid", [], "any", false, false, false, 137), "html", null, true);
            echo " svg')
            .datum(run_max_times_";
            // line 138
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["problem"], "probid", [], "any", false, false, false, 138), "html", null, true);
            echo ")
            .call(chart);
        // Clicking on one of the bars takes you to the judgment
        chart.discretebar.dispatch.on('elementClick', function(e) {
          window.location = \"";
            // line 142
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_submission_by_judging", ["jid" => "_JUDGING_ID_"]);
            echo "\".replace('_JUDGING_ID_', e.data.id);
        });
        // More useful tooltip
        chart.tooltip.contentGenerator(function (obj) {
          var format = d3.format(\".3f\");
          var prepend = \"\";
          if (!obj.data.valid) {
            prepend = \"<b>(INVALID)</b><br>\"
          }
        return prepend
          + '<div style=\"background: LightCyan;\">'
          + '<b>Submitted:</b> ' + obj.data.submittime + '<br/>'
          + '<b>First file:</b> <tt>' + obj.data.firstfile + '</tt><br/>'
          + '<b>max. Runtime:</b> ' + format(obj.data.value) + 's</b><br/>'
          + '<small>click to view judging</small>'
          + '</div>';
        });

        // Create our timelimit line
        d3.select('#maxruntime_";
            // line 161
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["problem"], "probid", [], "any", false, false, false, 161), "html", null, true);
            echo " svg')
          .append('line')
          .attr({id: 'maxline'})
          .style(\"stroke\", \"#F00\");

        var svgsize = chart.container.clientWidth || chart.container.parentNode.clientWidth;
        updateline_";
            // line 167
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["problem"], "probid", [], "any", false, false, false, 167), "html", null, true);
            echo " = function(){
          line = d3.select('#maxruntime_";
            // line 168
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["problem"], "probid", [], "any", false, false, false, 168), "html", null, true);
            echo " svg #maxline')
          .attr({
            x1: chart.margin().left,
            y1: chart.yAxis.scale()(";
            // line 171
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["problem"], "timelimit", [], "any", false, false, false, 171), "html", null, true);
            echo ")+ chart.margin().top,
            x2: +svgsize - chart.margin().right,
            y2: chart.yAxis.scale()(";
            // line 173
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["problem"], "timelimit", [], "any", false, false, false, 173), "html", null, true);
            echo ") + chart.margin().top,
          })
        }
        updateline_";
            // line 176
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["problem"], "probid", [], "any", false, false, false, 176), "html", null, true);
            echo "();
        nv.utils.windowResize(function() {
          updateline_";
            // line 178
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["problem"], "probid", [], "any", false, false, false, 178), "html", null, true);
            echo "();
          chart.update()
        });
        return chart;
      });
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['problem'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 184
        echo "

    //////////////////////////////////////
    // Results by type
    var judging_results = [
      {
        key: \"Judging Results\",
        values: [
          ";
        // line 192
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["results"]) || array_key_exists("results", $context) ? $context["results"] : (function () { throw new RuntimeError('Variable "results" does not exist.', 192, $this->source); })()));
        foreach ($context['_seq'] as $context["result"] => $context["count"]) {
            // line 193
            echo "            {
              \"label\" : \"";
            // line 194
            echo twig_escape_filter($this->env, $context["result"], "html", null, true);
            echo "\",
              \"value\" : ";
            // line 195
            echo twig_escape_filter($this->env, $context["count"], "html", null, true);
            echo ",
              \"color\" : \"";
            // line 196
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["colors"]) || array_key_exists("colors", $context) ? $context["colors"] : (function () { throw new RuntimeError('Variable "colors" does not exist.', 196, $this->source); })()), $context["result"], [], "array", false, false, false, 196), "html", null, true);
            echo "\",
            },
          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['result'], $context['count'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 199
        echo "        ]
      }
    ];
    nv.addGraph(function() {
      var chart = nv.models.discreteBarChart()
          .x(function(d) { return d.label })
          .y(function(d) { return d.value })
          .valueFormat(d3.format('.0f'))
          .staggerLabels(judging_results[0].values.length > 2)
          .margin({bottom: 90})
          .duration(250)
          ;
      chart.yAxis
        .tickFormat(d3.format('.0f'))
        .axisLabel('Number of submissions');
      chart.xAxis.axisLabel(\"Judgement\");
      d3.select('#judging_results svg')
          .datum(judging_results)
          .call(chart);
      nv.utils.windowResize(chart.update);
      return chart;
    });


    //////////////////////////////////////
    // Submissions over time
    // stacked graph of correct, runtime-error, wrong-answer, compiler-error, timelimit, etc
    // x-axis is contest time
    // y axis is # of submissions

    var submission_stats = [
      ";
        // line 230
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable([0 => "correct", 1 => "wrong-answer", 2 => "timelimit", 3 => "run-error", 4 => "compiler-error", 5 => "no-output"]);
        foreach ($context['_seq'] as $context["_key"] => $context["result"]) {
            // line 231
            echo "      {
        key: \"";
            // line 232
            echo twig_escape_filter($this->env, $context["result"], "html", null, true);
            echo "\",
        color: \"";
            // line 233
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["colors"]) || array_key_exists("colors", $context) ? $context["colors"] : (function () { throw new RuntimeError('Variable "colors" does not exist.', 233, $this->source); })()), $context["result"], [], "array", false, false, false, 233), "html", null, true);
            echo "\",
        values: [
          ";
            // line 236
            echo "          ";
            // line 237
            echo "          [0,0],
          ";
            // line 238
            $context["count"] = 0;
            // line 239
            echo "          ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_array_filter((isset($context["submissions"]) || array_key_exists("submissions", $context) ? $context["submissions"] : (function () { throw new RuntimeError('Variable "submissions" does not exist.', 239, $this->source); })()), function ($__submission__) use ($context) { $context["submission"] = $__submission__; return twig_get_attribute($this->env, $this->source, $context["submission"], "result", [], "any", false, false, false, 239); }));
            foreach ($context['_seq'] as $context["_key"] => $context["submission"]) {
                // line 240
                echo "            ";
                if ((twig_get_attribute($this->env, $this->source, $context["submission"], "result", [], "any", false, false, false, 240) == $context["result"])) {
                    $context["count"] = ((isset($context["count"]) || array_key_exists("count", $context) ? $context["count"] : (function () { throw new RuntimeError('Variable "count" does not exist.', 240, $this->source); })()) + 1);
                }
                // line 241
                echo "            [ ";
                echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, $context["submission"], "submittime", [], "any", false, false, false, 241) - twig_get_attribute($this->env, $this->source, (isset($context["current_contest"]) || array_key_exists("current_contest", $context) ? $context["current_contest"] : (function () { throw new RuntimeError('Variable "current_contest" does not exist.', 241, $this->source); })()), "starttime", [], "any", false, false, false, 241)) / 60.0), "html", null, true);
                echo ",
              ";
                // line 242
                echo twig_escape_filter($this->env, (isset($context["count"]) || array_key_exists("count", $context) ? $context["count"] : (function () { throw new RuntimeError('Variable "count" does not exist.', 242, $this->source); })()), "html", null, true);
                echo "
            ],
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['submission'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 245
            echo "        ]
      },
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['result'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 248
        echo "    ];
    nv.addGraph(function() {
      var chart = nv.models.stackedAreaChart()
          // .margin({left: 100})  //Adjust chart margins to give the x-axis some breathing room.
          // .useInteractiveGuideline(true)  //We want nice looking tooltips and a guideline!
          // .transitionDuration(350)  //how fast do you want the lines to transition?
          // .showLegend(true)       //Show the legend, allowing users to turn on/off line series.
          .showControls(false)
          .x(function(d) { return d[0] })   //We can modify the data accessor functions...
          .y(function(d) { return d[1] })   //...in case your data is formatted differently.
          .showYAxis(true)        //Show the y-axis
          .showXAxis(true)        //Show the x-axis
          .forceX([0, ";
        // line 260
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, (isset($context["current_contest"]) || array_key_exists("current_contest", $context) ? $context["current_contest"] : (function () { throw new RuntimeError('Variable "current_contest" does not exist.', 260, $this->source); })()), "endtime", [], "any", false, false, false, 260) - twig_get_attribute($this->env, $this->source, (isset($context["current_contest"]) || array_key_exists("current_contest", $context) ? $context["current_contest"] : (function () { throw new RuntimeError('Variable "current_contest" does not exist.', 260, $this->source); })()), "starttime", [], "any", false, false, false, 260)) / 60), "html", null, true);
        echo "])
          .forceY([0, ";
        // line 261
        echo twig_escape_filter($this->env, (twig_length_filter($this->env, (isset($context["submissions"]) || array_key_exists("submissions", $context) ? $context["submissions"] : (function () { throw new RuntimeError('Variable "submissions" does not exist.', 261, $this->source); })())) * 1.1), "html", null, true);
        echo "])
          ;
      chart.xAxis     //Chart x-axis settings
          .axisLabel('Contest Time(minutes)')
          .tickFormat(d3.format('d'));

      chart.yAxis     //Chart y-axis settings
          .axisLabel('Total Submissions')
          .tickFormat(d3.format('d'));

      d3.select('#submission_times svg')
          .datum(submission_stats)
          .call(chart);
      nv.utils.windowResize(chart.update);
      return chart;
    });

})
</script>
";
        // line 280
        $this->loadTemplate("jury/analysis/download_graphs.html.twig", "jury/analysis/team.html.twig", 280)->display($context);
        // line 281
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "jury/analysis/team.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  559 => 281,  557 => 280,  535 => 261,  531 => 260,  517 => 248,  509 => 245,  500 => 242,  495 => 241,  490 => 240,  485 => 239,  483 => 238,  480 => 237,  478 => 236,  473 => 233,  469 => 232,  466 => 231,  462 => 230,  429 => 199,  420 => 196,  416 => 195,  412 => 194,  409 => 193,  405 => 192,  395 => 184,  383 => 178,  378 => 176,  372 => 173,  367 => 171,  361 => 168,  357 => 167,  348 => 161,  326 => 142,  319 => 138,  315 => 137,  302 => 127,  297 => 125,  287 => 117,  278 => 114,  274 => 113,  270 => 112,  266 => 111,  262 => 110,  258 => 109,  254 => 108,  251 => 107,  247 => 106,  239 => 102,  235 => 101,  231 => 99,  229 => 88,  222 => 82,  208 => 74,  201 => 71,  197 => 70,  165 => 43,  159 => 40,  144 => 30,  139 => 27,  129 => 26,  103 => 9,  99 => 8,  95 => 7,  90 => 6,  80 => 5,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"jury/base.html.twig\" %}

{% block title %}Analysis - Team {{ team.name }}{% endblock %}

{% block extrahead %}
<link rel=\"stylesheet\" href=\"{{asset('css/nv.d3.min.css')}}\">
<script src=\"{{asset('js/d3.min.js')}}\"></script>
<script src=\"{{asset('js/nv.d3.min.js')}}\"></script>
<script src=\"{{asset('js/FileSaver.min.js')}}\"></script>
<style>
.row.equal {
  display: flex;
  flex-wrap: wrap;
}
.card {
  height: 100%;
}

/* Don't show x-axis ticks/ticklines for max runtimes chart*/
#maxruntime .nv-x.nv-axis .tick {
  display: none;
}
</style>
{% endblock %}

{% block body %}
<div class=\"container-fluid\">
  <div class=\"row equal mt-3\">
    <div class=\"col-12\">
      <h1>Team {{ team.teamid }}: {{ team.name }}</h1>
    </div>
    <div class=\"col-lg-3 col-sm-6 mt-3\">
      <div class=\"card\">
        <div class=\"card-header\">
          Misc Statistics
        </div>
        <div class=\"card-body\">
          <dl class=\"row\">
            <dt class=\"col-sm-6\"># Submissions</dt>
            <dd class=\"col-sm-6\">{{ submissions|length }}</dd>

            <dt class=\"col-sm-6\"># Correct</dt>
            <dd class=\"col-sm-6\">{{ results['correct']|default(0) }} <span class=\"text-muted\">({{ misc.correct_percentage|number_format(2) }}%)</span></dd>
          </dl>
        </div>
      </div>
    </div>
    <div class=\"col-lg-4 col-sm-6 mt-3\" id=\"judging_results\">
      <div class=\"card\">
        <div class=\"card-header\">
          Judging Results
        </div>
        <div class=\"card-body\">
          <svg style=\"height: 275px\"></svg>
        </div>
      </div>
    </div>
    <div class=\"col-lg-5 col-sm-12 mt-3\" id=\"submission_times\">
      <div class=\"card\">
        <div class=\"card-header\">
          Submissions over Time
        </div>
        <div class=\"card-body\">
            <svg style=\"height: 275px\"></svg>
        </div>
      </div>
    </div>
  </div>
  <div class=\"row equal\">
  {% for problem in problems %}
      <div class=\"col-3 mt-3\" id=\"maxruntime_{{problem.probid}}\">
        <div class=\"card\">
          <div class=\"card-header\">
            Max Runtimes for problem {{ problem.name }}
          </div>
          <div class=\"card-body\">
            <svg style=\"height: 200px\"></svg>
          </div>
        </div>
      </div>
  {% endfor %}
  </div>
</div>


<script>
{%
set colors = {
  'correct':        '#01df01',
  'wrong-answer':   'red',
  'timelimit':      'orange',
  'run-error':      '#ff3399',
  'compiler-error': 'grey',
  'no-output':      'purple',
  'frozen':         'blue',
  'output-limit':   'black',
}
%}
\$(function(){

    {% for problem in problems %}
      var run_max_times_{{problem.probid}} = [
        {
          key: \"Max Runtimes\",
          values: [
            {% for j in judgings | filter(j => j.result and j.submission.problem == problem) %}
              {
                \"id\"    : {{ j.judgingid }},
                \"label\" : \"j{{ j.judgingid }}\",
                \"value\" : {{ j.maxRuntime() }},
                \"valid\" : {{ j.valid ? \"true\":\"false\" }},
                \"submittime\"  : \"{{ j.submission.submittime | printtime(null, j.submission.contest) }}\",
                \"color\" : \"{{ colors[j.result] }}\",
\t\t\"firstfile\" : \"{{ j.submission.files[0].filename }}\",
              },
            {% endfor %}
          ]
        }
      ];
      nv.addGraph(function() {
        var chart = nv.models.discreteBarChart()
            .x(function(d) { return d.label })
            .y(function(d) { return d.value })
            .valueFormat(d3.format('.3f'))
            .staggerLabels(run_max_times_{{problem.probid}}[0].values.length > 10)
            .showValues(false)
            .forceY([0, {{ problem.timelimit*1.20 }}])
            .margin({bottom: 90})
            .duration(250)
          ;


        chart.yAxis
          .tickFormat(d3.format('.3f'))
          .axisLabel('Runtime(in s)');
        chart.xAxis.axisLabel(\"Judgings\");
        d3.select('#maxruntime_{{problem.probid}} svg')
            .datum(run_max_times_{{problem.probid}})
            .call(chart);
        // Clicking on one of the bars takes you to the judgment
        chart.discretebar.dispatch.on('elementClick', function(e) {
          window.location = \"{{ path('jury_submission_by_judging', {'jid': '_JUDGING_ID_' }) }}\".replace('_JUDGING_ID_', e.data.id);
        });
        // More useful tooltip
        chart.tooltip.contentGenerator(function (obj) {
          var format = d3.format(\".3f\");
          var prepend = \"\";
          if (!obj.data.valid) {
            prepend = \"<b>(INVALID)</b><br>\"
          }
        return prepend
          + '<div style=\"background: LightCyan;\">'
          + '<b>Submitted:</b> ' + obj.data.submittime + '<br/>'
          + '<b>First file:</b> <tt>' + obj.data.firstfile + '</tt><br/>'
          + '<b>max. Runtime:</b> ' + format(obj.data.value) + 's</b><br/>'
          + '<small>click to view judging</small>'
          + '</div>';
        });

        // Create our timelimit line
        d3.select('#maxruntime_{{problem.probid}} svg')
          .append('line')
          .attr({id: 'maxline'})
          .style(\"stroke\", \"#F00\");

        var svgsize = chart.container.clientWidth || chart.container.parentNode.clientWidth;
        updateline_{{problem.probid}} = function(){
          line = d3.select('#maxruntime_{{problem.probid}} svg #maxline')
          .attr({
            x1: chart.margin().left,
            y1: chart.yAxis.scale()({{problem.timelimit}})+ chart.margin().top,
            x2: +svgsize - chart.margin().right,
            y2: chart.yAxis.scale()({{problem.timelimit}}) + chart.margin().top,
          })
        }
        updateline_{{problem.probid}}();
        nv.utils.windowResize(function() {
          updateline_{{problem.probid}}();
          chart.update()
        });
        return chart;
      });
    {% endfor %}


    //////////////////////////////////////
    // Results by type
    var judging_results = [
      {
        key: \"Judging Results\",
        values: [
          {% for result,count in results %}
            {
              \"label\" : \"{{result}}\",
              \"value\" : {{ count }},
              \"color\" : \"{{ colors[result] }}\",
            },
          {% endfor %}
        ]
      }
    ];
    nv.addGraph(function() {
      var chart = nv.models.discreteBarChart()
          .x(function(d) { return d.label })
          .y(function(d) { return d.value })
          .valueFormat(d3.format('.0f'))
          .staggerLabels(judging_results[0].values.length > 2)
          .margin({bottom: 90})
          .duration(250)
          ;
      chart.yAxis
        .tickFormat(d3.format('.0f'))
        .axisLabel('Number of submissions');
      chart.xAxis.axisLabel(\"Judgement\");
      d3.select('#judging_results svg')
          .datum(judging_results)
          .call(chart);
      nv.utils.windowResize(chart.update);
      return chart;
    });


    //////////////////////////////////////
    // Submissions over time
    // stacked graph of correct, runtime-error, wrong-answer, compiler-error, timelimit, etc
    // x-axis is contest time
    // y axis is # of submissions

    var submission_stats = [
      {% for result in ['correct', 'wrong-answer', 'timelimit', 'run-error', 'compiler-error', 'no-output'] %}
      {
        key: \"{{result}}\",
        color: \"{{colors[result]}}\",
        values: [
          {# TODO: make sure these are actually ordered by submittime #}
          {# TODO: also make sure these submissions are in the same contest #}
          [0,0],
          {% set count = 0 %}
          {% for submission in submissions | filter(submission => submission.result) %}
            {% if submission.result == result %}{% set count = count +1 %}{% endif %}
            [ {{ (submission.submittime - current_contest.starttime)/60.0 }},
              {{ count }}
            ],
            {% endfor %}
        ]
      },
      {% endfor %}
    ];
    nv.addGraph(function() {
      var chart = nv.models.stackedAreaChart()
          // .margin({left: 100})  //Adjust chart margins to give the x-axis some breathing room.
          // .useInteractiveGuideline(true)  //We want nice looking tooltips and a guideline!
          // .transitionDuration(350)  //how fast do you want the lines to transition?
          // .showLegend(true)       //Show the legend, allowing users to turn on/off line series.
          .showControls(false)
          .x(function(d) { return d[0] })   //We can modify the data accessor functions...
          .y(function(d) { return d[1] })   //...in case your data is formatted differently.
          .showYAxis(true)        //Show the y-axis
          .showXAxis(true)        //Show the x-axis
          .forceX([0, {{ (current_contest.endtime - current_contest.starttime) / 60 }}])
          .forceY([0, {{ submissions|length *1.10 }}])
          ;
      chart.xAxis     //Chart x-axis settings
          .axisLabel('Contest Time(minutes)')
          .tickFormat(d3.format('d'));

      chart.yAxis     //Chart y-axis settings
          .axisLabel('Total Submissions')
          .tickFormat(d3.format('d'));

      d3.select('#submission_times svg')
          .datum(submission_stats)
          .call(chart);
      nv.utils.windowResize(chart.update);
      return chart;
    });

})
</script>
{% include 'jury/analysis/download_graphs.html.twig' %}

{% endblock %}
", "jury/analysis/team.html.twig", "/opt/domjudge/domserver/webapp/templates/jury/analysis/team.html.twig");
    }
}
