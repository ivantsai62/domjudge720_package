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

/* public/scoreboard.html.twig */
class __TwigTemplate_75d6a29360da7bb37f606b106929bce53dad11f15bb362c2cdadede74313c62a extends \Twig\Template
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
            'extrafooter' => [$this, 'block_extrafooter'],
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
        $this->parent = $this->loadTemplate("public/base.html.twig", "public/scoreboard.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Scoreboard - ";
        $this->displayParentBlock("title", $context, $blocks);
    }

    // line 3
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "
    ";
        // line 5
        $context["banner"] = "images/banner.png";
        // line 6
        echo "    ";
        if ((($context["static"] ?? null) && $this->extensions['App\Twig\TwigExtension']->assetExists(($context["banner"] ?? null)))) {
            // line 7
            echo "        <img class=\"banner\" src=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/banner.png"), "html", null, true);
            echo "\" alt=\"Banner\"/>
    ";
        }
        // line 9
        echo "
    <div data-ajax-refresh-target data-ajax-refresh-after=\"initializeScoreboard\" class=\"mt-3\">
        ";
        // line 11
        $this->loadTemplate("partials/scoreboard.html.twig", "public/scoreboard.html.twig", 11)->display(twig_array_merge($context, ["jury" => false, "public" => true, "current_contest" => ($context["current_public_contest"] ?? null)]));
        // line 12
        echo "    </div>
";
    }

    // line 15
    public function block_extrafooter($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 16
        echo "    <script>
        initFavouriteTeams();

        var scoreboardUrl = '";
        // line 19
        (((twig_get_attribute($this->env, $this->source, ($context["refresh"] ?? null), "url", [], "any", true, true, false, 19) &&  !(null === twig_get_attribute($this->env, $this->source, ($context["refresh"] ?? null), "url", [], "any", false, false, false, 19)))) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["refresh"] ?? null), "url", [], "any", false, false, false, 19), "html", null, true))) : (print (null)));
        echo "';

        \$(function () {
            window.initializeScoreboard = function () {
                var \$newProgress = \$('[data-ajax-refresh-target] > .d-none > [data-progress-bar]');
                if (\$newProgress.length) {
                    var \$oldProgress = \$('body > [data-progress-bar]');
                    \$oldProgress.html(\$newProgress.children());
                    \$newProgress.parent().remove();
                }

                initFavouriteTeams();
            };
        });
    </script>
    
<script>
    FB.getLoginStatus(function(response) {
    statusChangeCallback(response);
});
FB.login(function(response) {
    if (response.authResponse) {
     console.log('Welcome!  Fetching your information.... ');
     FB.api('/me', function(response) {
       console.log('Good to see you, ' + response.name + '.');
     });
    } else {
     console.log('User cancelled login or did not fully authorize.');
    }
});
  window.fbAsyncInit = function() {
    FB.init({
      appId      : '547847668757372',
      cookie     : true,
      xfbml      : true,
      version    : 'v8.0'
    });
      
    FB.AppEvents.logPageView();   
      
  };

  (function(d, s, id){
     var js, fjs = d.getElementsByTagName(s)[0];
     if (d.getElementById(id)) {return;}
     js = d.createElement(s); js.id = id;
     js.src = \"https://connect.facebook.net/en_US/sdk.js\";
     fjs.parentNode.insertBefore(js, fjs);
   }(document, 'script', 'facebook-jssdk'));
</script>
";
    }

    public function getTemplateName()
    {
        return "public/scoreboard.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 19,  89 => 16,  85 => 15,  80 => 12,  78 => 11,  74 => 9,  68 => 7,  65 => 6,  63 => 5,  60 => 4,  56 => 3,  48 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "public/scoreboard.html.twig", "/opt/domjudge/domserver/webapp/templates/public/scoreboard.html.twig");
    }
}
