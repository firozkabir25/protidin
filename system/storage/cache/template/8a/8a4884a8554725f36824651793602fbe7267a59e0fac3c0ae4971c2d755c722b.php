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

/* so-mobile/template/soconfig/panel_left.twig */
class __TwigTemplate_b14730f83781c79a25c623922515a1c721bb3f856ad5c9832fc8b8cd24db23d6 extends \Twig\Template
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
        // line 9
        echo "<div id=\"panel-menu\" class=\"side-menu panel panel-left\">
\t<div class=\"content\">
\t\t<div class=\"panel-left__top clearfix text-center\">
\t\t\t<div class=\"panel-logo\">
\t\t\t\t";
        // line 13
        echo twig_get_attribute($this->env, $this->source, ($context["soconfig"] ?? null), "get_logoMobile", [], "method", false, false, false, 13);
        echo "
\t\t\t</div>
\t\t\t";
        // line 15
        if (twig_get_attribute($this->env, $this->source, ($context["soconfig"] ?? null), "get_settings", [0 => "barsearch_status"], "method", false, false, false, 15)) {
            // line 16
            echo "\t\t\t\t<div class=\"panel-search\">
\t\t\t\t\t";
            // line 17
            echo ($context["search"] ?? null);
            echo "
\t\t\t\t</div>
\t\t\t";
        }
        // line 20
        echo "\t\t\t
\t\t</div>
\t\t
\t\t";
        // line 23
        if (twig_get_attribute($this->env, $this->source, ($context["soconfig"] ?? null), "get_settings", [0 => "barmega1_status"], "method", false, false, false, 23)) {
            // line 24
            echo "\t\t\t";
            echo ($context["content_menu1"] ?? null);
            echo "
\t\t";
        }
        // line 26
        echo "

\t\t";
        // line 28
        if (twig_get_attribute($this->env, $this->source, ($context["soconfig"] ?? null), "get_settings", [0 => "barmega2_status"], "method", false, false, false, 28)) {
            // line 29
            echo "\t\t\t";
            echo ($context["content_menu2"] ?? null);
            echo "
\t\t";
        }
        // line 31
        echo "
\t\t
\t\t<div class=\"panel-left__bottom clearfix text-center\">
\t\t\t";
        // line 34
        if (twig_get_attribute($this->env, $this->source, ($context["soconfig"] ?? null), "get_settings", [0 => "barcompare_status"], "method", false, false, false, 34)) {
            // line 35
            echo "\t\t\t<div class=\"col-xs-6\">
\t\t\t\t<i class=\"fa fa-check-square-o\" aria-hidden=\"true\"></i>
\t\t\t\t<div class=\"bot-inner\">
\t\t\t\t\t<a href=\"";
            // line 38
            echo ($context["compare"] ?? null);
            echo "\">";
            echo ($context["text_compare"] ?? null);
            echo "</a>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t";
        }
        // line 42
        echo "
\t\t\t";
        // line 43
        if (twig_get_attribute($this->env, $this->source, ($context["soconfig"] ?? null), "get_settings", [0 => "barwistlist_status"], "method", false, false, false, 43)) {
            // line 44
            echo "\t\t\t<div class=\"col-xs-6\">
\t\t\t\t<i class=\"fa fa-heart\" aria-hidden=\"true\"></i>
\t\t\t\t<div class=\"bot-inner\">
\t\t\t\t\t<a href=\"";
            // line 47
            echo ($context["wishlist"] ?? null);
            echo "\">";
            echo ($context["text_wishlist"] ?? null);
            echo "</a>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t";
        }
        // line 51
        echo "
\t\t\t
\t\t\t";
        // line 53
        if (($context["language"] ?? null)) {
            // line 54
            echo "\t\t\t<div class=\"col-xs-6 panel-left__language\">
\t\t\t\t";
            // line 55
            echo ($context["language"] ?? null);
            echo "
\t\t\t\t<h4>";
            // line 56
            echo ($context["text_language"] ?? null);
            echo "</h4>
\t\t\t</div>
\t\t\t";
        }
        // line 59
        echo "
\t\t\t<div class=\"col-xs-6 panel-left__language\">
\t\t\t\t";
        // line 61
        echo ($context["currency"] ?? null);
        echo "
\t\t\t\t<h4>";
        // line 62
        echo ($context["text_currency"] ?? null);
        echo "</h4>
\t\t\t</div>
\t\t\t
\t\t\t
\t\t</div>
\t</div>
</div>

";
    }

    public function getTemplateName()
    {
        return "so-mobile/template/soconfig/panel_left.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  151 => 62,  147 => 61,  143 => 59,  137 => 56,  133 => 55,  130 => 54,  128 => 53,  124 => 51,  115 => 47,  110 => 44,  108 => 43,  105 => 42,  96 => 38,  91 => 35,  89 => 34,  84 => 31,  78 => 29,  76 => 28,  72 => 26,  66 => 24,  64 => 23,  59 => 20,  53 => 17,  50 => 16,  48 => 15,  43 => 13,  37 => 9,);
    }

    public function getSourceContext()
    {
        return new Source("", "so-mobile/template/soconfig/panel_left.twig", "/home/azhkhn/public_html/protidin.com.bd/catalog/view/theme/so-mobile/template/soconfig/panel_left.twig");
    }
}
