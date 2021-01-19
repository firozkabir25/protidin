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

/* so-buyshop/template/extension/module/so_deals/default.twig */
class __TwigTemplate_1c8d84388e679febe0aa46783f69d538464bb5dbbe1230366758689d0038ef0f extends \Twig\Template
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
        // line 1
        echo "<script>
//<![CDATA[
\tvar listdeal";
        // line 3
        echo ($context["module"] ?? null);
        echo " = [];
//]]>
</script>
<div class=\"module ";
        // line 6
        echo ($context["direction_class"] ?? null);
        echo " ";
        echo ($context["class_suffix"] ?? null);
        echo "\">
\t<div class=\"head-title\">
\t\t<div class=\"head-title-inn\">
\t\t";
        // line 9
        if (($context["disp_title_module"] ?? null)) {
            // line 10
            echo "\t\t\t<h2 class=\"modtitle font-ct\"><span>";
            echo ($context["head_name"] ?? null);
            echo "</span></h2>
\t\t";
        }
        // line 11
        echo "\t
\t\t
\t\t";
        // line 13
        if (($context["display_countdown"] ?? null)) {
            // line 14
            echo "\t\t\t<div class=\"cslider-item-timer\">
\t\t\t\t<div class=\"timer-label\"><i class=\"fa fa-clock-o\"></i>";
            // line 15
            echo ($context["text_end_in"] ?? null);
            echo "</div>
\t\t\t\t<div class=\"product_time_maxprice\"></div>
\t\t\t</div>
\t\t\t";
            // line 18
            $context["maxPriceToDate"] = "";
            // line 19
            echo "\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["list"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 20
                echo "\t\t\t\t";
                $context["maxPriceToDate"] = twig_get_attribute($this->env, $this->source, $context["product"], "specialPriceToDate", [], "any", false, false, false, 20);
                // line 21
                echo "\t\t\t\t";
                if ((($context["maxPriceToDate"] ?? null) < twig_get_attribute($this->env, $this->source, $context["product"], "specialPriceToDate", [], "any", false, false, false, 21))) {
                    // line 22
                    echo "\t\t\t\t\t";
                    $context["maxPriceToDate"] = twig_get_attribute($this->env, $this->source, $context["product"], "specialPriceToDate", [], "any", false, false, false, 22);
                    // line 23
                    echo "\t\t\t\t";
                }
                // line 24
                echo "\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 25
            echo "\t\t\t
\t\t\t<script type=\"text/javascript\">
\t\t\t\t//<![CDATA[
\t\t\t\tlistdeal";
            // line 28
            echo ($context["module"] ?? null);
            echo ".push('product_time_maxprice|";
            echo ($context["maxPriceToDate"] ?? null);
            echo "')
\t\t\t\t//]]> 
\t\t\t</script>
\t\t";
        }
        // line 32
        echo "\t\t</div>
\t</div>
\t";
        // line 34
        if ((($context["pre_text"] ?? null) != "")) {
            // line 35
            echo "\t\t<div class=\"form-group\">
\t\t\t";
            // line 36
            echo ($context["pre_text"] ?? null);
            echo "
\t\t</div>
\t";
        }
        // line 39
        echo "\t<div class=\"modcontent\">
\t\t";
        // line 40
        if (((isset($context["list"]) || array_key_exists("list", $context)) && ($context["list"] ?? null))) {
            // line 41
            echo "\t\t\t";
            $context["tag_id"] = (("so_deals_" . twig_random($this->env)) . twig_date_format_filter($this->env, "now", "mdYHis"));
            // line 42
            echo "\t\t\t";
            $context["class_respl"] = ((((((((("preset00-" . ($context["nb_column0"] ?? null)) . " preset01-") . ($context["nb_column1"] ?? null)) . " preset02-") . ($context["nb_column2"] ?? null)) . " preset03-") . ($context["nb_column3"] ?? null)) . " preset04-") . ($context["nb_column4"] ?? null));
            // line 43
            echo "\t\t\t";
            $context["i"] = 0;
            // line 44
            echo "\t\t\t";
            $context["count_item"] = twig_length_filter($this->env, ($context["list"] ?? null));
            // line 45
            echo "\t\t\t";
            if ((($context["include_js"] ?? null) == "owlCarousel")) {
                // line 46
                echo "\t\t\t\t";
                $this->loadTemplate((((($context["config_theme"] ?? null) . "/template/extension/module/so_deals/") . ($context["store_layout"] ?? null)) . "_carousel.twig"), "so-buyshop/template/extension/module/so_deals/default.twig", 46)->display($context);
                // line 47
                echo "\t\t\t";
            } elseif ((($context["include_js"] ?? null) == "slick")) {
                // line 48
                echo "\t\t\t\t";
                echo twig_include($this->env, $context, (((($context["config_theme"] ?? null) . "/template/extension/module/so_deals/") . ($context["store_layout"] ?? null)) . "_slick.twig"));
                echo "
\t\t\t";
            } else {
                // line 50
                echo "\t\t\t\t";
                echo "";
                echo "
\t\t\t";
            }
            // line 52
            echo "\t\t";
        } else {
            // line 53
            echo "\t\t\t<div class=\"alert alert-info\"><i class=\"fa fa-info-circle\"></i> 
\t\t\t\t";
            // line 54
            echo twig_get_attribute($this->env, $this->source, ($context["objlang"] ?? null), "get", [0 => "text_noitem"], "method", false, false, false, 54);
            echo "
\t\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"alert\">×</button>
\t\t\t</div>
\t\t";
        }
        // line 58
        echo "\t</div>
\t\t
\t";
        // line 60
        if ((($context["post_text"] ?? null) != "")) {
            // line 61
            echo "\t\t<div class=\"form-group\">
\t\t\t";
            // line 62
            echo ($context["post_text"] ?? null);
            echo "
\t\t</div>
\t";
        }
        // line 65
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "so-buyshop/template/extension/module/so_deals/default.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  198 => 65,  192 => 62,  189 => 61,  187 => 60,  183 => 58,  176 => 54,  173 => 53,  170 => 52,  164 => 50,  158 => 48,  155 => 47,  152 => 46,  149 => 45,  146 => 44,  143 => 43,  140 => 42,  137 => 41,  135 => 40,  132 => 39,  126 => 36,  123 => 35,  121 => 34,  117 => 32,  108 => 28,  103 => 25,  97 => 24,  94 => 23,  91 => 22,  88 => 21,  85 => 20,  80 => 19,  78 => 18,  72 => 15,  69 => 14,  67 => 13,  63 => 11,  57 => 10,  55 => 9,  47 => 6,  41 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "so-buyshop/template/extension/module/so_deals/default.twig", "/home/azhkhn/public_html/protidin.com.bd/catalog/view/theme/so-buyshop/template/extension/module/so_deals/default.twig");
    }
}
