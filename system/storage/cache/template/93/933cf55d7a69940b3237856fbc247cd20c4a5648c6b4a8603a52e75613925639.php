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

/* so-mobile/template/extension/module/so_deals/default.twig */
class __TwigTemplate_8eb4c309cbd7afdd0c31c1081ae30314dab208a0d129bf66611c2a92b53b4af2 extends \Twig\Template
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
\t<h3 class=\"modtitle\">
\t\t";
        // line 8
        if ((($context["pre_text"] ?? null) != "")) {
            // line 9
            echo "\t\t\t<!-- <div class=\"form-group\"> -->
\t\t\t\t";
            // line 10
            echo ($context["pre_text"] ?? null);
            echo "
\t\t\t<!-- </div> -->
\t\t";
        }
        // line 13
        echo "\t\t";
        if (($context["disp_title_module"] ?? null)) {
            echo "<span>";
            echo ($context["head_name"] ?? null);
            echo "</span>";
        }
        // line 14
        echo "\t</h3>
\t<div class=\"modcontent\">
\t\t";
        // line 16
        if (((isset($context["list"]) || array_key_exists("list", $context)) && ($context["list"] ?? null))) {
            // line 17
            echo "\t\t    ";
            $context["tag_id"] = (("so_deals_" . twig_random($this->env)) . twig_date_format_filter($this->env, "now", "mdYHis"));
            // line 18
            echo "\t\t    ";
            $context["class_respl"] = ((((((((("preset00-" . ($context["nb_column0"] ?? null)) . " preset01-") . ($context["nb_column1"] ?? null)) . " preset02-") . ($context["nb_column2"] ?? null)) . " preset03-") . ($context["nb_column3"] ?? null)) . " preset04-") . ($context["nb_column4"] ?? null));
            // line 19
            echo "\t\t    ";
            $context["i"] = 0;
            // line 20
            echo "\t\t    ";
            $context["count_item"] = twig_length_filter($this->env, ($context["list"] ?? null));
            // line 21
            echo "\t\t    ";
            if ((($context["include_js"] ?? null) == "owlCarousel")) {
                // line 22
                echo "\t\t    \t";
                $this->loadTemplate((((($context["config_theme"] ?? null) . "/template/extension/module/so_deals/") . ($context["store_layout"] ?? null)) . "_carousel.twig"), "so-mobile/template/extension/module/so_deals/default.twig", 22)->display($context);
                // line 23
                echo "\t\t    ";
            } elseif ((($context["include_js"] ?? null) == "slick")) {
                // line 24
                echo "\t\t    \t";
                echo twig_include($this->env, $context, (((($context["config_theme"] ?? null) . "/template/extension/module/so_deals/") . ($context["store_layout"] ?? null)) . "_slick.twig"));
                echo "
\t\t    ";
            } else {
                // line 26
                echo "\t\t    \t";
                echo "";
                echo "
\t\t    ";
            }
            // line 28
            echo "\t\t";
        } else {
            // line 29
            echo "\t    \t<div class=\"alert alert-danger\"><i class=\"fa fa-info-circle\"></i> 
\t\t\t\t";
            // line 30
            echo twig_get_attribute($this->env, $this->source, ($context["objlang"] ?? null), "get", [0 => "text_noitem"], "method", false, false, false, 30);
            echo "
\t\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"alert\">×</button>
\t\t\t</div>
\t    ";
        }
        // line 34
        echo "\t</div>
\t
\t";
        // line 36
        if ((($context["post_text"] ?? null) != "")) {
            // line 37
            echo "\t\t<div class=\"form-group\">
\t\t\t";
            // line 38
            echo ($context["post_text"] ?? null);
            echo "
\t\t</div>
\t";
        }
        // line 41
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "so-mobile/template/extension/module/so_deals/default.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  139 => 41,  133 => 38,  130 => 37,  128 => 36,  124 => 34,  117 => 30,  114 => 29,  111 => 28,  105 => 26,  99 => 24,  96 => 23,  93 => 22,  90 => 21,  87 => 20,  84 => 19,  81 => 18,  78 => 17,  76 => 16,  72 => 14,  65 => 13,  59 => 10,  56 => 9,  54 => 8,  47 => 6,  41 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "so-mobile/template/extension/module/so_deals/default.twig", "/home/azhkhn/public_html/protidin.com.bd/catalog/view/theme/so-mobile/template/extension/module/so_deals/default.twig");
    }
}
