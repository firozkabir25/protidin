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

/* so-buyshop/template/common/footer.twig */
class __TwigTemplate_f2710a0f0bde16d61d3dba943244959d136ef0e6eb3e7e4bcfe6cecc67464de0 extends \Twig\Template
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
        // line 2
        echo "
";
        // line 3
        if ((twig_get_attribute($this->env, $this->source, ($context["soconfig"] ?? null), "get_settings", [0 => "typefooter"], "method", false, false, false, 3) == "1")) {
            // line 4
            echo "\t";
            $this->loadTemplate((($context["theme_directory"] ?? null) . "/template/footer/footer1.twig"), "so-buyshop/template/common/footer.twig", 4)->display(twig_array_merge($context, ["typefooter" => twig_get_attribute($this->env, $this->source, ($context["soconfig"] ?? null), "get_settings", [0 => "typefooter"], "method", false, false, false, 4)]));
        } elseif ((twig_get_attribute($this->env, $this->source,         // line 5
($context["soconfig"] ?? null), "get_settings", [0 => "typefooter"], "method", false, false, false, 5) == "2")) {
            // line 6
            echo "\t";
            $this->loadTemplate((($context["theme_directory"] ?? null) . "/template/footer/footer2.twig"), "so-buyshop/template/common/footer.twig", 6)->display(twig_array_merge($context, ["typefooter" => twig_get_attribute($this->env, $this->source, ($context["soconfig"] ?? null), "get_settings", [0 => "typefooter"], "method", false, false, false, 6)]));
        } elseif ((twig_get_attribute($this->env, $this->source,         // line 7
($context["soconfig"] ?? null), "get_settings", [0 => "typefooter"], "method", false, false, false, 7) == "3")) {
            // line 8
            echo "\t";
            $this->loadTemplate((($context["theme_directory"] ?? null) . "/template/footer/footer3.twig"), "so-buyshop/template/common/footer.twig", 8)->display(twig_array_merge($context, ["typefooter" => twig_get_attribute($this->env, $this->source, ($context["soconfig"] ?? null), "get_settings", [0 => "typefooter"], "method", false, false, false, 8)]));
        } elseif ((twig_get_attribute($this->env, $this->source,         // line 9
($context["soconfig"] ?? null), "get_settings", [0 => "typefooter"], "method", false, false, false, 9) == "4")) {
            // line 10
            echo "\t";
            $this->loadTemplate((($context["theme_directory"] ?? null) . "/template/footer/footer4.twig"), "so-buyshop/template/common/footer.twig", 10)->display(twig_array_merge($context, ["typefooter" => twig_get_attribute($this->env, $this->source, ($context["soconfig"] ?? null), "get_settings", [0 => "typefooter"], "method", false, false, false, 10)]));
            // line 11
            echo "
";
        }
        // line 13
        echo "
";
        // line 14
        $this->loadTemplate((($context["theme_directory"] ?? null) . "/template/soconfig/icon-defs.twig"), "so-buyshop/template/common/footer.twig", 14)->display($context);
        // line 15
        echo "
\t
";
        // line 18
        echo "
";
        // line 19
        if (twig_get_attribute($this->env, $this->source, ($context["soconfig"] ?? null), "get_settings", [0 => "social_sidebar"], "method", false, false, false, 19)) {
            // line 20
            echo "\t";
            if ((twig_get_attribute($this->env, $this->source, ($context["soconfig"] ?? null), "get_settings", [0 => "social_sidebar"], "method", false, false, false, 20) == 1)) {
                // line 21
                echo "\t\t";
                $context["social_sidebar"] = "socialwidgets-left";
                // line 22
                echo "\t";
            } else {
                // line 23
                echo "\t\t";
                $context["social_sidebar"] = "socialwidgets-right";
                // line 24
                echo "\t";
            }
            // line 25
            echo "\t<section class=\"social-widgets visible-lg ";
            echo ($context["social_sidebar"] ?? null);
            echo " \">
\t\t<ul class=\"items\">
\t\t\t";
            // line 27
            if (twig_get_attribute($this->env, $this->source, ($context["soconfig"] ?? null), "get_settings", [0 => "social_fb_status"], "method", false, false, false, 27)) {
                echo " 
\t\t\t<li class=\"item item-01 facebook\">
\t\t\t\t<a href=\"catalog/view/theme/";
                // line 29
                echo ($context["theme_directory"] ?? null);
                echo "/template/social/facebook.php?account_fb=";
                echo twig_get_attribute($this->env, $this->source, ($context["soconfig"] ?? null), "get_settings", [0 => "facebook"], "method", false, false, false, 29);
                echo " \" class=\"tab-icon\"><span class=\"fa fa-facebook\"></span></a>
\t\t\t\t<div class=\"tab-content\">
\t\t\t\t\t<div class=\"title\"><h5>FACEBOOK</h5></div>
\t\t\t\t\t<div class=\"loading\">
\t\t\t\t\t\t<img data-sizes=\"auto\" src=\"data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==\" data-src=\"catalog/view/theme/";
                // line 33
                echo ($context["theme_directory"] ?? null);
                echo "/images/ajax-loader.gif\" class=\"ajaxloader lazyload\" alt=\"loader\">
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</li>
\t\t\t";
            }
            // line 37
            echo " 

\t\t\t";
            // line 39
            if (twig_get_attribute($this->env, $this->source, ($context["soconfig"] ?? null), "get_settings", [0 => "social_twitter_status"], "method", false, false, false, 39)) {
                echo " 
\t\t\t<li class=\"item item-02 twitter\">
\t\t\t\t<a href=\"catalog/view/theme/";
                // line 41
                echo ($context["theme_directory"] ?? null);
                echo "/template/social/twitter.php?account_twitter=";
                echo twig_get_attribute($this->env, $this->source, ($context["soconfig"] ?? null), "get_settings", [0 => "twitter"], "method", false, false, false, 41);
                echo " \" class=\"tab-icon\"><span class=\"fa fa-twitter\"></span></a>
\t\t\t\t<div class=\"tab-content\">
\t\t\t\t\t<div class=\"title\"><h5>TWITTER FEEDS</h5></div>
\t\t\t\t\t<div class=\"loading\">
\t\t\t\t\t\t<img data-sizes=\"auto\" src=\"data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==\" data-src=\"catalog/view/theme/";
                // line 45
                echo ($context["theme_directory"] ?? null);
                echo "/images/ajax-loader.gif\" class=\"ajaxloader lazyload\" alt=\"loader\">
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</li>
\t\t\t";
            }
            // line 49
            echo " 

\t\t\t";
            // line 51
            if (twig_get_attribute($this->env, $this->source, ($context["soconfig"] ?? null), "get_settings", [0 => "social_custom_status"], "method", false, false, false, 51)) {
                echo " 
\t\t\t<li class=\"item item-03 youtube\">
\t\t\t\t<div class=\"tab-icon\"><span class=\"fa fa-youtube\"></span></div>
\t\t\t\t<div class=\"tab-content\">
\t\t\t\t\t<div class=\"loading\">
\t\t\t\t\t\t";
                // line 56
                if (twig_get_attribute($this->env, $this->source, ($context["soconfig"] ?? null), "get_settings", [0 => "video_code"], "method", false, false, false, 56)) {
                    // line 57
                    echo "\t\t\t\t\t\t\t\t";
                    echo twig_get_attribute($this->env, $this->source, ($context["soconfig"] ?? null), "decode_entities", [0 => twig_get_attribute($this->env, $this->source, ($context["soconfig"] ?? null), "get_settings", [0 => "video_code"], "method", false, false, false, 57)], "method", false, false, false, 57);
                    echo "
\t\t\t\t\t\t";
                }
                // line 58
                echo " 
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</li>
\t\t\t";
            }
            // line 62
            echo " 
\t\t</ul>
\t</section>
\t
";
        }
        // line 66
        echo " 

</div>
</body>
</html>";
    }

    public function getTemplateName()
    {
        return "so-buyshop/template/common/footer.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  181 => 66,  174 => 62,  167 => 58,  161 => 57,  159 => 56,  151 => 51,  147 => 49,  139 => 45,  130 => 41,  125 => 39,  121 => 37,  113 => 33,  104 => 29,  99 => 27,  93 => 25,  90 => 24,  87 => 23,  84 => 22,  81 => 21,  78 => 20,  76 => 19,  73 => 18,  69 => 15,  67 => 14,  64 => 13,  60 => 11,  57 => 10,  55 => 9,  52 => 8,  50 => 7,  47 => 6,  45 => 5,  42 => 4,  40 => 3,  37 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("", "so-buyshop/template/common/footer.twig", "");
    }
}
