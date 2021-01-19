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

/* so-buyshop/template/product/category.twig */
class __TwigTemplate_be592a18c2bbbcf8166ae74703d32bac87daedca585b7508822abdbcb810c847 extends \Twig\Template
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
        echo "
";
        // line 2
        echo ($context["header"] ?? null);
        echo "
";
        // line 4
        $this->loadTemplate((($context["theme_directory"] ?? null) . "/template/soconfig/breadcrumbs.twig"), "so-buyshop/template/product/category.twig", 4)->display($context);
        // line 5
        echo "

";
        // line 8
        if (($context["url_asidePosition"] ?? null)) {
            $context["col_position"] = ($context["url_asidePosition"] ?? null);
        } else {
            // line 9
            $context["col_position"] = twig_get_attribute($this->env, $this->source, ($context["soconfig"] ?? null), "get_settings", [0 => "catalog_col_position"], "method", false, false, false, 9);
            echo " ";
        }
        // line 10
        echo "
";
        // line 11
        if (($context["url_asideType"] ?? null)) {
            echo " ";
            $context["col_canvas"] = ($context["url_asideType"] ?? null);
        } else {
            // line 12
            $context["col_canvas"] = twig_get_attribute($this->env, $this->source, ($context["soconfig"] ?? null), "get_settings", [0 => "catalog_col_type"], "method", false, false, false, 12);
        }
        // line 13
        $context["desktop_canvas"] = (((($context["col_canvas"] ?? null) == "off_canvas")) ? ("desktop-offcanvas") : (""));
        // line 14
        echo "

";
        // line 16
        if ((($context["col_position"] ?? null) == "inside")) {
            // line 17
            echo "<div class=\"container\">
\t";
            // line 18
            $this->loadTemplate((($context["theme_directory"] ?? null) . "/template/soconfig/subcategory.twig"), "so-buyshop/template/product/category.twig", 18)->display($context);
            // line 19
            echo "\t
</div>
";
        }
        // line 22
        echo "
<div class=\"container product-listing content-main ";
        // line 23
        echo ($context["desktop_canvas"] ?? null);
        echo "\">
  
  <div class=\"row\">";
        // line 25
        echo ($context["column_left"] ?? null);
        echo "
     ";
        // line 26
        if ((($context["col_canvas"] ?? null) == "off_canvas")) {
            // line 27
            echo "    \t";
            $context["class"] = "col-sm-12";
            // line 28
            echo "    ";
        } elseif ((($context["column_left"] ?? null) && ($context["column_right"] ?? null))) {
            // line 29
            echo "    \t";
            $context["class"] = "col-md-6 col-sm-12 col-xs-12 fluid-allsidebar";
            // line 30
            echo "    ";
        } elseif ((($context["column_left"] ?? null) || ($context["column_right"] ?? null))) {
            // line 31
            echo "    \t";
            $context["class"] = "col-md-9 col-sm-12 col-xs-12 fluid-sidebar";
            // line 32
            echo "    ";
        } else {
            // line 33
            echo "    \t";
            $context["class"] = "col-sm-12";
            // line 34
            echo "    ";
        }
        // line 35
        echo "
    <div id=\"content\" class=\"";
        // line 36
        echo ($context["class"] ?? null);
        echo "\">

    \t";
        // line 38
        echo ($context["content_top"] ?? null);
        echo "
\t\t<div class=\"products-category clearfix\">

\t\t\t";
        // line 41
        if ((($context["col_position"] ?? null) == "outside")) {
            // line 42
            echo "\t\t\t\t
\t\t\t\t";
            // line 43
            $this->loadTemplate((($context["theme_directory"] ?? null) . "/template/soconfig/subcategory.twig"), "so-buyshop/template/product/category.twig", 43)->display($context);
            // line 44
            echo "\t\t\t";
        }
        // line 45
        echo "\t  
\t\t\t";
        // line 46
        if (($context["products"] ?? null)) {
            // line 47
            echo "\t\t\t\t";
            // line 48
            echo "\t\t\t\t";
            $this->loadTemplate((($context["theme_directory"] ?? null) . "/template/soconfig/listing.twig"), "so-buyshop/template/product/category.twig", 48)->display(twig_array_merge($context, ["listingType" => ($context["listingType"] ?? null)]));
            // line 49
            echo "\t\t\t\t
\t\t\t";
        }
        // line 51
        echo "\t\t  
\t\t\t";
        // line 52
        if (( !($context["categories"] ?? null) &&  !($context["products"] ?? null))) {
            // line 53
            echo "\t\t\t  <p>";
            echo ($context["text_empty"] ?? null);
            echo "</p>
\t\t\t  <div class=\"buttons\">
\t\t\t\t<div class=\"pull-right\"><a href=\"";
            // line 55
            echo ($context["continue"] ?? null);
            echo "\" class=\"btn btn-primary\">";
            echo ($context["button_continue"] ?? null);
            echo "</a></div>
\t\t\t  </div>
\t\t\t";
        }
        // line 58
        echo "
\t      \t";
        // line 59
        echo ($context["content_bottom"] ?? null);
        echo "

\t  \t</div>
\t </div>

    ";
        // line 64
        echo ($context["column_right"] ?? null);
        echo "

    ";
        // line 66
        if (($context["url_sidebarsticky"] ?? null)) {
            echo " ";
            $context["sidebar_sticky"] = ($context["url_sidebarsticky"] ?? null);
            // line 67
            echo "\t";
        } else {
            echo " ";
            $context["sidebar_sticky"] = twig_get_attribute($this->env, $this->source, ($context["soconfig"] ?? null), "get_settings", [0 => "catalog_sidebar_sticky"], "method", false, false, false, 67);
        }
        // line 68
        echo "    <script type=\"text/javascript\"><!--
\t\t\$(window).load(sidebar_sticky_update);
\t\t\$(window).resize(sidebar_sticky_update);

    \tfunction sidebar_sticky_update(){
    \t\t var viewportWidth = \$(window).width();
    \t\t if (viewportWidth > 1200) {
\t    \t\t// Initialize the sticky scrolling on an item 
\t\t\t\tsidebar_sticky = '";
        // line 76
        echo ($context["sidebar_sticky"] ?? null);
        echo "';
\t\t\t\t
\t\t\t\tif(sidebar_sticky=='left'){
\t\t\t\t\t\$(\".left_column\").stick_in_parent({
\t\t\t\t\t    offset_top: 10,
\t\t\t\t\t    bottoming   : true
\t\t\t\t\t});
\t\t\t\t}else if (sidebar_sticky=='right'){
\t\t\t\t\t\$(\".right_column\").stick_in_parent({
\t\t\t\t\t    offset_top: 10,
\t\t\t\t\t    bottoming   : true
\t\t\t\t\t});
\t\t\t\t}else if (sidebar_sticky=='all'){
\t\t\t\t\t\$(\".content-aside\").stick_in_parent({
\t\t\t\t\t    offset_top: 10,
\t\t\t\t\t    bottoming   : true
\t\t\t\t\t});
\t\t\t\t}
\t\t\t}
    \t}
\t\t
\t\t
\t//--></script> 

\t</div>
</div>
";
        // line 102
        echo ($context["footer"] ?? null);
        echo " 
";
    }

    public function getTemplateName()
    {
        return "so-buyshop/template/product/category.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  247 => 102,  218 => 76,  208 => 68,  202 => 67,  198 => 66,  193 => 64,  185 => 59,  182 => 58,  174 => 55,  168 => 53,  166 => 52,  163 => 51,  159 => 49,  156 => 48,  154 => 47,  152 => 46,  149 => 45,  146 => 44,  144 => 43,  141 => 42,  139 => 41,  133 => 38,  128 => 36,  125 => 35,  122 => 34,  119 => 33,  116 => 32,  113 => 31,  110 => 30,  107 => 29,  104 => 28,  101 => 27,  99 => 26,  95 => 25,  90 => 23,  87 => 22,  82 => 19,  80 => 18,  77 => 17,  75 => 16,  71 => 14,  69 => 13,  66 => 12,  61 => 11,  58 => 10,  54 => 9,  50 => 8,  46 => 5,  44 => 4,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "so-buyshop/template/product/category.twig", "/home/azhkhn/public_html/protidin.com.bd/catalog/view/theme/so-buyshop/template/product/category.twig");
    }
}
