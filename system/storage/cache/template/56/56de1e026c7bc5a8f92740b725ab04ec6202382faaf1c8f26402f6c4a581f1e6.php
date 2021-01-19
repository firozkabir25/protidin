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

/* so-buyshop/template/extension/module/so_filter_shop_by/default_product_price.twig */
class __TwigTemplate_3770e4e3624e8fa0ee7a5cd529c06bb3fa43147b320bcb6003784de9f53346fb extends \Twig\Template
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
        echo "<li class=\"so-filter-options\" data-option=\"Price\">
\t<div class=\"so-filter-heading\">
\t\t<div class=\"so-filter-heading-text\">
\t\t\t<span>";
        // line 4
        echo twig_get_attribute($this->env, $this->source, ($context["obj_lang"] ?? null), "get", [0 => "text_price"], "method", false, false, false, 4);
        echo "</span>
\t\t</div>
\t\t<i class=\"fa fa-chevron-down\"></i>
\t</div>
\t<div class=\"so-filter-content-opts\">
\t\t<div class=\"so-filter-content-opts-container\">
\t\t\t<div class=\"so-filter-content-wrapper so-filter-iscroll\">
\t\t\t\t<div class=\"so-filter-options\">
\t\t\t\t\t<div class=\"so-filter-option so-filter-price\">
\t\t\t\t\t\t<div class=\"content_min_max\">
\t\t\t\t\t\t\t<div class=\"put-min put-min_max\">
\t\t\t\t\t\t\t<span class=\"name-curent\">";
        // line 15
        echo ($context["currencies"] ?? null);
        echo "</span> <input type=\"text\" class=\"input_min form-control\" value=\"";
        echo ($context["minPrice_new"] ?? null);
        echo "\" min=\"";
        echo ($context["minPrice"] ?? null);
        echo "\" max=\"";
        echo ($context["maxPrice"] ?? null);
        echo "\"> </div>
\t\t\t\t\t\t\t<div class=\"put-max put-min_max\"> <span class=\"name-curent\">";
        // line 16
        echo ($context["currencies"] ?? null);
        echo "</span> <input type=\"text\" class=\"input_max form-control\" value=\"";
        echo ($context["maxPrice_new"] ?? null);
        echo "\" min=\"";
        echo ($context["minPrice"] ?? null);
        echo "\" max=\"";
        echo ($context["maxPrice"] ?? null);
        echo "\"></div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"content_scroll\">
\t\t\t\t\t\t\t<div id=\"slider-range\"></div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>

</li>
";
    }

    public function getTemplateName()
    {
        return "so-buyshop/template/extension/module/so_filter_shop_by/default_product_price.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  66 => 16,  56 => 15,  42 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "so-buyshop/template/extension/module/so_filter_shop_by/default_product_price.twig", "/home/azhkhn/public_html/protidin.com.bd/catalog/view/theme/so-buyshop/template/extension/module/so_filter_shop_by/default_product_price.twig");
    }
}
