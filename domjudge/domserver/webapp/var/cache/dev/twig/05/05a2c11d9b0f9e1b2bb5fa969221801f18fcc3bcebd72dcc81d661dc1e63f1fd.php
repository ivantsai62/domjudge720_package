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

/* jury/analysis/problem.html.twig */
class __TwigTemplate_165ff818c6e63fccfe58cb94142f9ee645ace7772382f0b3c58f433df3be36a8 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "jury/analysis/problem.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "jury/analysis/problem.html.twig"));

        $this->parent = $this->loadTemplate("jury/base.html.twig", "jury/analysis/problem.html.twig", 1);
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

        echo "Analysis - Problem ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["problem"]) || array_key_exists("problem", $context) ? $context["problem"] : (function () { throw new RuntimeError('Variable "problem" does not exist.', 3, $this->source); })()), "probid", [], "any", false, false, false, 3), "html", null, true);
        
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
      <h1>Problem ";
        // line 30
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["problem"]) || array_key_exists("problem", $context) ? $context["problem"] : (function () { throw new RuntimeError('Variable "problem" does not exist.', 30, $this->source); })()), "probid", [], "any", false, false, false, 30), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["problem"]) || array_key_exists("problem", $context) ? $context["problem"] : (function () { throw new RuntimeError('Variable "problem" does not exist.', 30, $this->source); })()), "name", [], "any", false, false, false, 30), "html", null, true);
        echo "</h1>
        ";
        // line 31
        $this->loadTemplate("jury/partials/analysis_filter.html.twig", "jury/analysis/problem.html.twig", 31)->display($context);
        // line 32
        echo "    </div>
    <div class=\"col-lg-3 col-sm-6 mt-3\">
      <div class=\"card\">
        <div class=\"card-header\">
          Misc Statistics
        </div>
        <div class=\"card-body\">
          <dl class=\"row\">
            <dt class=\"col-sm-6\"># Submissions</dt>
            <dd class=\"col-sm-6\">";
        // line 41
        echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["submissions"]) || array_key_exists("submissions", $context) ? $context["submissions"] : (function () { throw new RuntimeError('Variable "submissions" does not exist.', 41, $this->source); })())), "html", null, true);
        echo "</dd>

            <dt class=\"col-sm-6\"># Correct</dt>
            <dd class=\"col-sm-6\">";
        // line 44
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["results"] ?? null), "correct", [], "array", true, true, false, 44)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["results"] ?? null), "correct", [], "array", false, false, false, 44), 0)) : (0)), "html", null, true);
        echo " <span class=\"text-muted\">(";
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["misc"]) || array_key_exists("misc", $context) ? $context["misc"] : (function () { throw new RuntimeError('Variable "misc" does not exist.', 44, $this->source); })()), "correct_percentage", [], "any", false, false, false, 44), 2), "html", null, true);
        echo "%)</span></dd>

            <dt class=\"col-sm-6\"># Teams Attempted</dt>
            <dd class=\"col-sm-6\">";
        // line 47
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["misc"]) || array_key_exists("misc", $context) ? $context["misc"] : (function () { throw new RuntimeError('Variable "misc" does not exist.', 47, $this->source); })()), "num_teams_attempted", [], "any", false, false, false, 47), "html", null, true);
        echo "</dd>

            <dt class=\"col-sm-6\"># Teams Correct</dt>
            <dd class=\"col-sm-6\">";
        // line 50
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["misc"]) || array_key_exists("misc", $context) ? $context["misc"] : (function () { throw new RuntimeError('Variable "misc" does not exist.', 50, $this->source); })()), "num_teams_correct", [], "any", false, false, false, 50), "html", null, true);
        echo " <span class=\"text-muted\">(";
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["misc"]) || array_key_exists("misc", $context) ? $context["misc"] : (function () { throw new RuntimeError('Variable "misc" does not exist.', 50, $this->source); })()), "teams_correct_percentage", [], "any", false, false, false, 50), 2), "html", null, true);
        echo "%)</dd>
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
  <div class=\"row equal mt-3\">
    <div class=\"col-12\" id=\"maxruntime\">
      <div class=\"card\">
        <div class=\"card-header\">
          Max Runtimes
        </div>
        <div class=\"card-body\">
          <svg style=\"height: 600px\"></svg>
        </div>
      </div>
    </div>
  </div>
</div>


<script>
";
        // line 93
        $context["colors"] = ["correct" => "#01df01", "wrong-answer" => "red", "timelimit" => "orange", "run-error" => "#ff3399", "compiler-error" => "grey", "no-output" => "purple", "frozen" => "blue", "output-limit" => "black"];
        // line 104
        echo "\$(function(){
    var run_max_times = [
      {
        key: \"Max Runtimes\",
        values: [
          ";
        // line 109
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["judgings"]) || array_key_exists("judgings", $context) ? $context["judgings"] : (function () { throw new RuntimeError('Variable "judgings" does not exist.', 109, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["j"]) {
            // line 110
            echo "            {
              \"id\"    : ";
            // line 111
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["j"], "judgingid", [], "any", false, false, false, 111), "html", null, true);
            echo ",
              \"label\" : \"j";
            // line 112
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["j"], "judgingid", [], "any", false, false, false, 112), "html", null, true);
            echo "\",
              \"value\" : ";
            // line 113
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["j"], "maxRuntime", [], "method", false, false, false, 113), "html", null, true);
            echo ",
              \"team\"  : \"";
            // line 114
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["j"], "submission", [], "any", false, false, false, 114), "team", [], "any", false, false, false, 114), "name", [], "any", false, false, false, 114), "html", null, true);
            echo "\",
              \"submittime\"  : \"";
            // line 115
            echo twig_escape_filter($this->env, $this->extensions['App\Twig\TwigExtension']->printtime(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["j"], "submission", [], "any", false, false, false, 115), "submittime", [], "any", false, false, false, 115), null, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["j"], "submission", [], "any", false, false, false, 115), "contest", [], "any", false, false, false, 115)), "html", null, true);
            echo "\",
              \"color\" : \"";
            // line 116
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["colors"]) || array_key_exists("colors", $context) ? $context["colors"] : (function () { throw new RuntimeError('Variable "colors" does not exist.', 116, $this->source); })()), twig_get_attribute($this->env, $this->source, $context["j"], "result", [], "any", false, false, false, 116), [], "array", false, false, false, 116), "html", null, true);
            echo "\",
              \"firstfile\" : \"";
            // line 117
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["j"], "submission", [], "any", false, false, false, 117), "files", [], "any", false, false, false, 117), 0, [], "array", false, false, false, 117), "filename", [], "any", false, false, false, 117), "html", null, true);
            echo "\",
            },
          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['j'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 120
        echo "        ]
      }
    ];
    nv.addGraph(function() {
      var chart = nv.models.discreteBarChart()
          .x(function(d) { return d.label })
          .y(function(d) { return d.value })
          .valueFormat(d3.format('.3f'))
          .staggerLabels(run_max_times[0].values.length > 10)
          .forceY([0, ";
        // line 129
        echo twig_escape_filter($this->env, ((isset($context["timelimit"]) || array_key_exists("timelimit", $context) ? $context["timelimit"] : (function () { throw new RuntimeError('Variable "timelimit" does not exist.', 129, $this->source); })()) * 1.2), "html", null, true);
        echo "])
          .showValues(false)
          .margin({bottom: 90})
          .duration(250)
        ;


      chart.yAxis
        .tickFormat(d3.format('.3f'))
        .axisLabel('Runtime(in s)');
      chart.xAxis.axisLabel(\"Judgings\");
      d3.select('#maxruntime svg')
          .datum(run_max_times)
          .call(chart);
      // Clicking on one of the bars takes you to the judgment
      chart.discretebar.dispatch.on('elementClick', function(e) {
        window.location = \"";
        // line 145
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_submission_by_judging", ["jid" => "_JUDGING_ID_"]);
        echo "\".replace('_JUDGING_ID_', e.data.id);
      });
      // More useful tooltip
      chart.tooltip.contentGenerator(function (obj) {
        var format = d3.format(\".3f\");
        return '<div style=\"background: LightCyan;\">'
\t  + '<b>Team:</b> ' + obj.data.team + '<br/>'
          + '<b>Submitted:</b> ' + obj.data.submittime + '<br/>'
          + '<b>First file:</b> <tt>' + obj.data.firstfile + '</tt><br/>'
          + '<b>max. Runtime:</b> ' + format(obj.data.value) + 's</b><br/>'
          + '<small>click to view judging</small>'
          + '</div>';
      });

      // Create our timelimit line
      d3.select('#maxruntime svg')
        .append('line')
        .attr({id: 'maxline'})
        .style(\"stroke\", \"#F00\");

      // update the line in case the chart dimensions have changed
      var svgsize = chart.container.clientWidth || chart.container.parentNode.clientWidth;
      updateline = function(){
        line = d3.select('#maxruntime svg #maxline')
        .attr({
          x1: chart.margin().left,
          y1: chart.yAxis.scale()(";
        // line 171
        echo twig_escape_filter($this->env, (isset($context["timelimit"]) || array_key_exists("timelimit", $context) ? $context["timelimit"] : (function () { throw new RuntimeError('Variable "timelimit" does not exist.', 171, $this->source); })()), "html", null, true);
        echo ")+ chart.margin().top,
          x2: +svgsize - chart.margin().right,
          y2: chart.yAxis.scale()(";
        // line 173
        echo twig_escape_filter($this->env, (isset($context["timelimit"]) || array_key_exists("timelimit", $context) ? $context["timelimit"] : (function () { throw new RuntimeError('Variable "timelimit" does not exist.', 173, $this->source); })()), "html", null, true);
        echo ") + chart.margin().top,
        })
      }
      updateline();
      nv.utils.windowResize(function() {
        updateline();
        chart.update()
      });
      return chart;
    });

    //////////////////////////////////////
    // Results by type
    var judging_results = [
      {
        key: \"Judging Results\",
        values: [
          ";
        // line 190
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["results"]) || array_key_exists("results", $context) ? $context["results"] : (function () { throw new RuntimeError('Variable "results" does not exist.', 190, $this->source); })()));
        foreach ($context['_seq'] as $context["result"] => $context["count"]) {
            // line 191
            echo "            {
              \"label\" : \"";
            // line 192
            echo twig_escape_filter($this->env, $context["result"], "html", null, true);
            echo "\",
              \"value\" : ";
            // line 193
            echo twig_escape_filter($this->env, $context["count"], "html", null, true);
            echo ",
              \"color\" : \"";
            // line 194
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["colors"]) || array_key_exists("colors", $context) ? $context["colors"] : (function () { throw new RuntimeError('Variable "colors" does not exist.', 194, $this->source); })()), $context["result"], [], "array", false, false, false, 194), "html", null, true);
            echo "\",
            },
          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['result'], $context['count'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 197
        echo "        ]
      }
    ];
    nv.addGraph(function() {
      var chart = nv.models.discreteBarChart()
          .x(function(d) { return d.label })
          .y(function(d) { return d.value })
          .valueFormat(d3.format('.0f'))
          .staggerLabels(run_max_times[0].values.length > 2)
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
        // line 228
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable([0 => "correct", 1 => "wrong-answer", 2 => "timelimit", 3 => "run-error", 4 => "compiler-error", 5 => "no-output"]);
        foreach ($context['_seq'] as $context["_key"] => $context["result"]) {
            // line 229
            echo "      {
        key: \"";
            // line 230
            echo twig_escape_filter($this->env, $context["result"], "html", null, true);
            echo "\",
        color: \"";
            // line 231
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["colors"]) || array_key_exists("colors", $context) ? $context["colors"] : (function () { throw new RuntimeError('Variable "colors" does not exist.', 231, $this->source); })()), $context["result"], [], "array", false, false, false, 231), "html", null, true);
            echo "\",
        values: [
          ";
            // line 234
            echo "          ";
            // line 235
            echo "          [0,0],
          ";
            // line 236
            $context["count"] = 0;
            // line 237
            echo "          ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_array_filter((isset($context["submissions"]) || array_key_exists("submissions", $context) ? $context["submissions"] : (function () { throw new RuntimeError('Variable "submissions" does not exist.', 237, $this->source); })()), function ($__submission__) use ($context) { $context["submission"] = $__submission__; return twig_get_attribute($this->env, $this->source, $context["submission"], "result", [], "any", false, false, false, 237); }));
            foreach ($context['_seq'] as $context["_key"] => $context["submission"]) {
                // line 238
                echo "            ";
                if ((twig_get_attribute($this->env, $this->source, $context["submission"], "result", [], "any", false, false, false, 238) == $context["result"])) {
                    $context["count"] = ((isset($context["count"]) || array_key_exists("count", $context) ? $context["count"] : (function () { throw new RuntimeError('Variable "count" does not exist.', 238, $this->source); })()) + 1);
                }
                // line 239
                echo "            [ ";
                echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, $context["submission"], "submittime", [], "any", false, false, false, 239) - twig_get_attribute($this->env, $this->source, (isset($context["current_contest"]) || array_key_exists("current_contest", $context) ? $context["current_contest"] : (function () { throw new RuntimeError('Variable "current_contest" does not exist.', 239, $this->source); })()), "starttime", [], "any", false, false, false, 239)) / 60.0), "html", null, true);
                echo ",
              ";
                // line 240
                echo twig_escape_filter($this->env, (isset($context["count"]) || array_key_exists("count", $context) ? $context["count"] : (function () { throw new RuntimeError('Variable "count" does not exist.', 240, $this->source); })()), "html", null, true);
                echo "
            ],
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['submission'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 243
            echo "        ]
      },
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['result'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 246
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
        // line 258
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, (isset($context["current_contest"]) || array_key_exists("current_contest", $context) ? $context["current_contest"] : (function () { throw new RuntimeError('Variable "current_contest" does not exist.', 258, $this->source); })()), "endtime", [], "any", false, false, false, 258) - twig_get_attribute($this->env, $this->source, (isset($context["current_contest"]) || array_key_exists("current_contest", $context) ? $context["current_contest"] : (function () { throw new RuntimeError('Variable "current_contest" does not exist.', 258, $this->source); })()), "starttime", [], "any", false, false, false, 258)) / 60), "html", null, true);
        echo "])
          .forceY([0, ";
        // line 259
        echo twig_escape_filter($this->env, (twig_length_filter($this->env, (isset($context["submissions"]) || array_key_exists("submissions", $context) ? $context["submissions"] : (function () { throw new RuntimeError('Variable "submissions" does not exist.', 259, $this->source); })())) * 1.1), "html", null, true);
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
        // line 284
        $this->loadTemplate("jury/analysis/download_graphs.html.twig", "jury/analysis/problem.html.twig", 284)->display($context);
        // line 285
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "jury/analysis/problem.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  523 => 285,  521 => 284,  493 => 259,  489 => 258,  475 => 246,  467 => 243,  458 => 240,  453 => 239,  448 => 238,  443 => 237,  441 => 236,  438 => 235,  436 => 234,  431 => 231,  427 => 230,  424 => 229,  420 => 228,  387 => 197,  378 => 194,  374 => 193,  370 => 192,  367 => 191,  363 => 190,  343 => 173,  338 => 171,  309 => 145,  290 => 129,  279 => 120,  270 => 117,  266 => 116,  262 => 115,  258 => 114,  254 => 113,  250 => 112,  246 => 111,  243 => 110,  239 => 109,  232 => 104,  230 => 93,  183 => 50,  177 => 47,  169 => 44,  163 => 41,  152 => 32,  150 => 31,  144 => 30,  139 => 27,  129 => 26,  103 => 9,  99 => 8,  95 => 7,  90 => 6,  80 => 5,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"jury/base.html.twig\" %}

{% block title %}Analysis - Problem {{ problem.probid }}{% endblock %}

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
      <h1>Problem {{ problem.probid }}: {{ problem.name }}</h1>
        {% include 'jury/partials/analysis_filter.html.twig' %}
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

            <dt class=\"col-sm-6\"># Teams Attempted</dt>
            <dd class=\"col-sm-6\">{{ misc.num_teams_attempted }}</dd>

            <dt class=\"col-sm-6\"># Teams Correct</dt>
            <dd class=\"col-sm-6\">{{misc.num_teams_correct}} <span class=\"text-muted\">({{  misc.teams_correct_percentage|number_format(2) }}%)</dd>
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
  <div class=\"row equal mt-3\">
    <div class=\"col-12\" id=\"maxruntime\">
      <div class=\"card\">
        <div class=\"card-header\">
          Max Runtimes
        </div>
        <div class=\"card-body\">
          <svg style=\"height: 600px\"></svg>
        </div>
      </div>
    </div>
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
    var run_max_times = [
      {
        key: \"Max Runtimes\",
        values: [
          {% for j in judgings %}
            {
              \"id\"    : {{ j.judgingid }},
              \"label\" : \"j{{ j.judgingid }}\",
              \"value\" : {{ j.maxRuntime() }},
              \"team\"  : \"{{ j.submission.team.name }}\",
              \"submittime\"  : \"{{ j.submission.submittime | printtime(null, j.submission.contest) }}\",
              \"color\" : \"{{ colors[j.result] }}\",
              \"firstfile\" : \"{{ j.submission.files[0].filename }}\",
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
          .staggerLabels(run_max_times[0].values.length > 10)
          .forceY([0, {{ timelimit*1.20 }}])
          .showValues(false)
          .margin({bottom: 90})
          .duration(250)
        ;


      chart.yAxis
        .tickFormat(d3.format('.3f'))
        .axisLabel('Runtime(in s)');
      chart.xAxis.axisLabel(\"Judgings\");
      d3.select('#maxruntime svg')
          .datum(run_max_times)
          .call(chart);
      // Clicking on one of the bars takes you to the judgment
      chart.discretebar.dispatch.on('elementClick', function(e) {
        window.location = \"{{ path('jury_submission_by_judging', {'jid': '_JUDGING_ID_' }) }}\".replace('_JUDGING_ID_', e.data.id);
      });
      // More useful tooltip
      chart.tooltip.contentGenerator(function (obj) {
        var format = d3.format(\".3f\");
        return '<div style=\"background: LightCyan;\">'
\t  + '<b>Team:</b> ' + obj.data.team + '<br/>'
          + '<b>Submitted:</b> ' + obj.data.submittime + '<br/>'
          + '<b>First file:</b> <tt>' + obj.data.firstfile + '</tt><br/>'
          + '<b>max. Runtime:</b> ' + format(obj.data.value) + 's</b><br/>'
          + '<small>click to view judging</small>'
          + '</div>';
      });

      // Create our timelimit line
      d3.select('#maxruntime svg')
        .append('line')
        .attr({id: 'maxline'})
        .style(\"stroke\", \"#F00\");

      // update the line in case the chart dimensions have changed
      var svgsize = chart.container.clientWidth || chart.container.parentNode.clientWidth;
      updateline = function(){
        line = d3.select('#maxruntime svg #maxline')
        .attr({
          x1: chart.margin().left,
          y1: chart.yAxis.scale()({{timelimit}})+ chart.margin().top,
          x2: +svgsize - chart.margin().right,
          y2: chart.yAxis.scale()({{timelimit}}) + chart.margin().top,
        })
      }
      updateline();
      nv.utils.windowResize(function() {
        updateline();
        chart.update()
      });
      return chart;
    });

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
          .staggerLabels(run_max_times[0].values.length > 2)
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
", "jury/analysis/problem.html.twig", "/opt/domjudge/domserver/webapp/templates/jury/analysis/problem.html.twig");
    }
}
