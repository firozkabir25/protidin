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

/* extension/soconfig/options_stores.twig */
class __TwigTemplate_ebdc98eb7f71fb46244dc6561dc8e1009bdeaeb25d1afb33fa99472b09487e3f extends \Twig\Template
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
        $context["fonts"] = ["standard" => "Standard", "google" => "Google Fonts"];
        // line 6
        echo "
";
        // line 7
        $context["columns"] = ["1" => "1 columns", "2" => "2 columns", "3" => "3 columns", "4" => "4 columns", "5" => "5 columns", "6" => "6 columns", "7" => "7 columns", "8" => "8 columns", "9" => "9 columns"];
        // line 18
        echo "
";
        // line 19
        $context["card_gallery"] = ["0" => "Disable", "1" => "Align Left", "2" => "Align Right", "3" => "Align Bottom"];
        // line 25
        echo "
";
        // line 26
        $context["refine_search"] = ["0" => "Disable ", "1" => "Show image", "2" => "Show all"];
        // line 31
        echo "
";
        // line 32
        $context["fonts_normal"] = ["inherit" => "No Use", "Arial, Helvetica, sans-serif" => "Arial", "Verdana, Geneva, sans-serif" => "Verdana", "Georgia,Times New Roman, Times, serif" => "Georgia", "Impact, Arial, Helvetica, sans-serif" => "Impact", "Tahoma, Geneva, sans-serif" => "Tahoma", "Trebuchet MS, Arial, Helvetica, sans-serif" => "Trebuchet MS", "Arial Black, Gadget, sans-serif" => "Arial Black", "Times, Times New Roman, serif" => "Times", "Palatino Linotype, Book Antiqua, Palatino, serif" => "Palatino Linotype", "Lucida Sans Unicode, Lucida Grande\", sans-serif" => "Lucida Sans Unicode", "MS Serif, New York, serif" => "MS Serif", "Comic Sans MS, cursive" => "Comic Sans MS", "Courier New, Courier, monospace" => "Courier New", "Lucida Console, Monaco, monospace" => "Lucida Console"];
        // line 49
        echo "
";
        // line 50
        $context["devices"] = ["lg" => "<i class=\"fa fa-desktop\"></i> Desktops", "md" => "<i class=\"fa fa-tablet\"></i> Tablet Landscape", "sm" => "<i class=\"fa fa-tablet\"></i> Tablet Portrait", "xs" => "<i class=\"fa fa-mobile\"></i> Phones"];
        // line 56
        echo "
";
        // line 57
        $context["Scssformat"] = ["Expanded" => "Expanded", "Nested" => "Nested (default)", "Compressed" => "Compressed", "Compact" => "Compact", "Crunched" => "Crunched"];
        // line 64
        echo "
";
        // line 65
        $context["layoutStyle"] = ["full" => "Default", "fluid" => "Layout fluid", "boxed" => "Layout boxed"];
        // line 70
        echo "
";
        // line 71
        $context["content_bg_mode"] = ["repeat" => "Repeat", "no-repeat" => "No-Repeat"];
        // line 75
        echo "
";
        // line 76
        $context["content_attachment"] = ["scroll" => "Scroll", "fixed" => "Fixed"];
        // line 80
        echo "
";
        // line 81
        $context["related_position"] = ["vertical" => "Vertical", "horizontal" => "Horizontal"];
        // line 85
        echo "
";
        // line 86
        $context["thumbnailPos"] = ["bottom" => "Gallery Bottom", "left" => "Gallery Left", "grid" => "Gallery Grid", "list" => "Gallery List", "slider" => "Gallery Slider"];
        // line 93
        echo "
";
        // line 94
        $context["zoommode"] = ["window" => "Basic Zoom", "inner" => "Inner Zoom", "lens" => "Lens Zoom"];
        // line 99
        echo "
";
        // line 100
        $context["gallerysize"] = ["small" => "Image Small", "medium" => "Image Medium", "large" => "Image Large"];
        // line 105
        echo "
";
        // line 106
        $context["tabs_position"] = ["1" => "Bottom vertical", "2" => "Bottom horizontal"];
        // line 110
        echo "
";
        // line 111
        $context["toppanel_type"] = ["1" => "Show Header Center", "2" => "Show Header Bottom", "3" => "Show All"];
        // line 116
        echo "
";
        // line 117
        $context["catalog_mode"] = ["grid-list" => "List Column", "grid-table" => "Table Column", "grid-2" => "2 Columns", "grid-3" => "3 Columns", "grid-4" => "4 Columns", "grid-5" => "5 Columns"];
        // line 125
        echo "
";
        // line 126
        $context["radio_style"] = ["0" => "Default", "1" => "Button"];
        // line 130
        echo "
";
        // line 131
        $context["type_banner"] = ["1" => "Hover effect 1", "2" => "Hover effect 2", "3" => "Hover effect 3", "4" => "Hover effect 4", "5" => "Hover effect 5", "6" => "Hover effect 6", "7" => "Hover effect 7", "8" => "Hover effect 8", "9" => "Hover effect 9", "10" => "Hover effect 10", "11" => "Hover effect 11", "12" => "Hover effect 12"];
        // line 145
        echo "
";
        // line 146
        $context["preloader_animation"] = ["line" => "Default line", "double-loop" => "Double Bounce", "cube-move" => "Cube Move", "circle-bounce" => "Circle Bounce", "folding-cube" => "Cube Folding"];
        // line 153
        echo "
";
        // line 154
        $context["pattern_array"] = ["0" => "None"];
        // line 155
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(2, 45));
        foreach ($context['_seq'] as $context["_key"] => $context["pattern_id"]) {
            // line 156
            echo "\t";
            if (!twig_in_filter($context["pattern_id"], ($context["pattern_array"] ?? null))) {
                // line 157
                echo "          ";
                $context["pattern_array"] = twig_array_merge(($context["pattern_array"] ?? null), [0 => $context["pattern_id"]]);
                // line 158
                echo "    ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pattern_id'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 161
        echo "
<div class=\"sidebar \" data-sticky_column>
<ul class=\"nav nav-tabs main_tabs_vertical\" >
    <li class=\"active\"><a href=\"#tab-general\" data-toggle=\"tab\">";
        // line 164
        echo twig_get_attribute($this->env, $this->source, ($context["objlang"] ?? null), "get", [0 => "maintabs_general"], "method", false, false, false, 164);
        echo " </a></li>
    <li><a href=\"#tab-layout\" data-toggle=\"tab\">";
        // line 165
        echo twig_get_attribute($this->env, $this->source, ($context["objlang"] ?? null), "get", [0 => "maintabs_layout"], "method", false, false, false, 165);
        echo " </a></li>
    <li><a href=\"#tab-products\" data-toggle=\"tab\">";
        // line 166
        echo twig_get_attribute($this->env, $this->source, ($context["objlang"] ?? null), "get", [0 => "maintabs_products"], "method", false, false, false, 166);
        echo " </a></li>
    <li><a href=\"#tab-fonts\" data-toggle=\"tab\">";
        // line 167
        echo twig_get_attribute($this->env, $this->source, ($context["objlang"] ?? null), "get", [0 => "maintabs_fonts"], "method", false, false, false, 167);
        echo " </a></li>
    <li><a href=\"#tab-social\" data-toggle=\"tab\">";
        // line 168
        echo twig_get_attribute($this->env, $this->source, ($context["objlang"] ?? null), "get", [0 => "maintabs_social"], "method", false, false, false, 168);
        echo " </a></li>
    <li><a href=\"#tab-custom\" data-toggle=\"tab\">";
        // line 169
        echo twig_get_attribute($this->env, $this->source, ($context["objlang"] ?? null), "get", [0 => "maintabs_custom"], "method", false, false, false, 169);
        echo " </a></li>
\t<li><a href=\"#tab-advanced\" data-toggle=\"tab\">";
        // line 170
        echo twig_get_attribute($this->env, $this->source, ($context["objlang"] ?? null), "get", [0 => "maintabs_advanced"], "method", false, false, false, 170);
        echo " </a></li>
</ul>
</div>

<div class=\"tab-content main_content_vertical col-sm-10\" data-sticky_column>
    <!-------------------------------------Tab General---------------------------------->
    <div class=\"tab-pane active\" id=\"tab-general\">
        <ul class=\"nav nav-tabs  main_tabs_2 \">
            <li class=\"active\"><a href=\"#tab-general-layout1\" class=\"selected\" data-toggle=\"tab\">";
        // line 178
        echo ($context["general_tab_general"] ?? null);
        echo " </a></li>
            <li><a href=\"#tab-general-layout2\" data-toggle=\"tab\">";
        // line 179
        echo ($context["general_tab_header"] ?? null);
        echo " </a></li>
            <li><a href=\"#tab-general-layout3\" data-toggle=\"tab\">";
        // line 180
        echo ($context["general_tab_footer"] ?? null);
        echo "  </a></li>
\t\t\t<li><a href=\"#tab-general-layout4\" data-toggle=\"tab\">Banner Effect</a></li>
        </ul>

        <div class=\"tab-content \">
\t\t\t";
        // line 186
        echo "            <div class=\"tab-pane active\" id=\"tab-general-layout1\">
\t\t\t\t
\t\t\t\t<div class=\"so-panel\">
\t\t\t\t\t<h3 class=\"panel-title\">Select Layout</h3>
\t\t\t\t\t<div class=\"panel-container\">
\t\t\t\t\t\t
\t\t\t\t\t\t<div id=\"tab-general__layouttype\" class=\"form-group\">
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<div class=\"col-sm-12\">
\t\t\t\t\t\t\t\t";
        // line 195
        echo twig_get_attribute($this->env, $this->source, ($context["fields"] ?? null), "field_typelayout", [0 => "soconfig_general_store", 1 => "typelayout", 2 => ($context["typelayouts"] ?? null), 3 => "6"], "method", false, false, false, 195);
        echo " 
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t
\t\t\t\t\t\t<div class=\"form-group\" >
\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" >
\t\t\t\t\t\t\t\t<span data-toggle=\"tooltip\" title=\"
\t\t\t\t\t\t\t\t\t<p class='help-hint-text'>
\t\t\t\t\t\t\t\t\t\t<i class='fa fa-bullhorn' ></i> 
\t\t\t\t\t\t\t\t\t\t<span>Create New Color</span>
\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t<p ><strong class='text-primary'>Step 1:</strong> Select the layout you want to display.<p>
\t\t\t\t\t\t\t\t\t<p ><strong class='text-primary'>Step 2:</strong> Fill color and color code >> Click button Compile CSS >> Create a new Color.</p>
\t\t\t\t\t\t\t\t\t<p ><strong class='text-primary'>Step 3:</strong> Select the color you just created >> Click button Save. </p>
\t\t\t\t\t\t\t\t\">
\t\t\t\t\t\t\t\t\tNew Color
\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<div class=\"col-sm-2\">
\t\t\t\t\t\t\t\t";
        // line 215
        echo twig_get_attribute($this->env, $this->source, ($context["fields"] ?? null), "field_text", [0 => "soconfig_advanced_store", 1 => "name_color", 2 => "Name Color"], "method", false, false, false, 215);
        echo " 
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-sm-2\">
\t\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t\t<i class=\"input-group-addon fa fa-paint-brush\" aria-hidden=\"true\"></i>
\t\t\t\t\t\t\t\t\t";
        // line 220
        echo twig_get_attribute($this->env, $this->source, ($context["fields"] ?? null), "field_colors", [0 => "soconfig_advanced_store", 1 => "theme_color", 2 => "Select color"], "method", false, false, false, 220);
        echo " 
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-sm-5\">
\t\t\t\t\t\t\t\t<button onclick=\"buttonApplyColor();\" class=\"btn btn-primary\" type=\"button\"  ";
        // line 224
        if (($context["scsscompile"] ?? null)) {
            echo " ";
            echo "disabled='disabled'";
            echo " ";
        }
        echo "><i class=\"fa fa-compress\" aria-hidden=\"true\"></i> Compile CSS</button>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-sm-offset-2 col-sm-10\">
\t\t\t\t\t\t\t\t";
        // line 227
        if (twig_get_attribute($this->env, $this->source, ($context["error"] ?? null), "nameColor", [], "any", false, false, false, 227)) {
            // line 228
            echo "\t\t\t\t\t\t\t\t\t<div class=\"text-danger\"> ";
            echo twig_get_attribute($this->env, $this->source, ($context["error"] ?? null), "nameColor", [], "any", false, false, false, 228);
            echo "</div>
\t\t\t\t\t\t\t\t";
        }
        // line 230
        echo "\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-sm-offset-2 col-sm-10\">
\t\t\t
\t\t\t\t\t\t\t\t ";
        // line 233
        if ((($context["scsscompile"] ?? null) || ($context["compileMutiColor"] ?? null))) {
            echo " 
\t\t\t\t\t\t\t\t<div class=\"text-info\" style=\"margin-top:20px;\">
\t\t\t\t\t\t\t\t<p><strong>You need set :</strong> Before Compile css</p>
\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t1.Tab Advanced → SCSS Compile = Off .</br>
\t\t\t\t\t\t\t\t2.Tab Advanced → User Developer Compile Muti Color = Off .
\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t";
        }
        // line 242
        echo " 
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t
\t\t\t\t\t\t
\t\t\t\t\t\t
\t\t\t\t\t\t<div id=\"tab-general__themecolor\" class=\"form-group\">
\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" >
\t\t\t\t\t\t\t\t<span data-toggle=\"tooltip\" title=\"
\t\t\t\t\t\t\t\t\t<p class='help-hint-text'>
\t\t\t\t\t\t\t\t\t\t<i class='fa fa-bullhorn' ></i> 
\t\t\t\t\t\t\t\t\t\t<span>Create New Color</span>
\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t<p ><strong class='text-primary'>Step 1:</strong> Select the layout you want to display.<p>
\t\t\t\t\t\t\t\t\t<p ><strong class='text-primary'>Step 2:</strong> Fill color and color code >> Click button Compile CSS >> Create a new Color.</p>
\t\t\t\t\t\t\t\t\t<p ><strong class='text-primary'>Step 3:</strong> Select the color you just created >> Click button Save. </p>
\t\t\t\t\t\t\t\t\">
\t\t\t\t\t\t\t\t\tSelect  Color
\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t<div class=\"col-sm-6\" id=\"select_color\">
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t";
        // line 264
        echo twig_get_attribute($this->env, $this->source, ($context["fields"] ?? null), "field_select", [0 => "soconfig_general_store", 1 => "themecolor", 2 => ($context["allThemeColor"] ?? null), 3 => "width30"], "method", false, false, false, 264);
        echo " 
\t\t\t\t\t\t\t\t";
        // line 265
        if ((($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = ($context["allThemeColor"] ?? null)) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4["none"] ?? null) : null)) {
            // line 266
            echo "\t\t\t\t\t\t\t\t\t<div class=\"text-warning\" style=\"margin-top:20px;\">
\t\t\t\t\t\t\t\t\t<p><i class=\"fa fa-exclamation-triangle\" style=\"font-size:24px;\"></i> Can not find css color file. Please recreate color new </p>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t";
        }
        // line 269
        echo "\t
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
                </div>
\t\t\t\t
\t\t\t\t
\t\t\t\t<div class=\"so-panel\">
\t\t\t\t\t<h3 class=\"panel-title\" >
\t\t\t\t\t\t<span>Sticky Menu on Top   </span>
\t\t\t\t\t\t<a href=\"view/template/extension/soconfig/images/general/sticky_menu_top.png\" target=\"_blank\" class=\"question-circle\" data-toggle=\"tooltip\" title=\"Screenshot Themes Config \">
\t\t\t\t\t\t\t<i class=\"fa fa-question-circle\" ></i>
\t\t\t\t\t\t\t
\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t
\t\t\t\t\t</h3>
\t\t\t\t\t<div class=\"panel-container\">
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"logo_position\">
\t\t\t\t\t\t\t\tStatus:
\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t";
        // line 291
        echo twig_get_attribute($this->env, $this->source, ($context["fields"] ?? null), "field_radio", [0 => "soconfig_general_store", 1 => "toppanel_status", 2 => [1 => "ON", 0 => "OFF"], 3 => 0, 4 => "parent sticky_menu"], "method", false, false, false, 291);
        echo " 
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"form-group\" >
\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" >
\t\t\t\t\t\t\t\tSelect Block on header:
\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t<div class=\"col-sm-8\">
\t\t\t\t\t\t\t\t";
        // line 299
        echo twig_get_attribute($this->env, $this->source, ($context["fields"] ?? null), "field_radio", [0 => "soconfig_general_store", 1 => "toppanel_type", 2 => ($context["toppanel_type"] ?? null), 3 => 1, 4 => "child sticky_menu"], "method", false, false, false, 299);
        echo " 
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t
\t\t\t\t\t\t
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t
\t\t\t\t<div class=\"so-panel\">\t
\t\t\t\t\t<h3 class=\"panel-title\">
\t\t\t\t\t\tTop Bar
\t\t\t\t\t\t<a href=\"view/template/extension/soconfig/images/general/top_bar.png\" target=\"_blank\" class=\"question-circle\" data-toggle=\"tooltip\" title=\"Screenshot Themes Config \">
\t\t\t\t\t\t\t<i class=\"fa fa-question-circle\" ></i>
\t\t\t\t\t\t\t
\t\t\t\t\t\t</a>
\t\t\t\t\t</h3>
\t\t\t\t\t<div class=\"panel-container\">
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\">Telephone No</label>
\t\t\t\t\t\t\t<div class=\"col-sm-2\" >
\t\t\t\t\t\t\t\t";
        // line 319
        echo twig_get_attribute($this->env, $this->source, ($context["fields"] ?? null), "field_radio", [0 => "soconfig_general_store", 1 => "phone_status", 2 => [1 => "ON", 0 => "OFF"], 3 => 1], "method", false, false, false, 319);
        echo " 
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-sm-8\" id=\"tab-field-phone_status\">
\t\t\t\t\t\t\t\t";
        // line 322
        echo twig_get_attribute($this->env, $this->source, ($context["fields"] ?? null), "field_langHori", [0 => ($context["languages"] ?? null), 1 => "soconfig_general_store", 2 => "contact_number", 3 => 50], "method", false, false, false, 322);
        echo "
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\">Welcome Message</label>
\t\t\t\t\t\t\t<div class=\"col-sm-2\" >
\t\t\t\t\t\t\t\t";
        // line 329
        echo twig_get_attribute($this->env, $this->source, ($context["fields"] ?? null), "field_radio", [0 => "soconfig_general_store", 1 => "welcome_message_status", 2 => [1 => "ON", 0 => "OFF"]], "method", false, false, false, 329);
        echo " 
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-sm-8\" id=\"tab-field-welcome_message_status\">
\t\t\t\t\t\t\t\t";
        // line 332
        echo twig_get_attribute($this->env, $this->source, ($context["fields"] ?? null), "field_langHori", [0 => ($context["languages"] ?? null), 1 => "soconfig_general_store", 2 => "welcome_message", 3 => 50], "method", false, false, false, 332);
        echo "
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
        // line 354
        echo "\t\t\t\t\t\t
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\">Checkout Link</label>
\t\t\t\t\t\t\t<div class=\"col-sm-3\" >
\t\t\t\t\t\t\t\t";
        // line 358
        echo twig_get_attribute($this->env, $this->source, ($context["fields"] ?? null), "field_radio", [0 => "soconfig_general_store", 1 => "checkout_status", 2 => [1 => "ON", 0 => "OFF"]], "method", false, false, false, 358);
        echo " 
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t
\t\t\t\t\t\t<div class=\"form-group last\">
\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\">Language/Currency Title</label>
\t\t\t\t\t\t\t<div class=\"col-sm-3\" >
\t\t\t\t\t\t\t\t";
        // line 365
        echo twig_get_attribute($this->env, $this->source, ($context["fields"] ?? null), "field_radio", [0 => "soconfig_general_store", 1 => "lang_status", 2 => [1 => "ON", 0 => "OFF"]], "method", false, false, false, 365);
        echo " 
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div class=\"so-panel\">
\t\t\t\t\t<h3 class=\"panel-title\">General</h3>
\t\t\t\t\t<div class=\"panel-container\">\t\t
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" >Preloader </label>
\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t";
        // line 377
        echo twig_get_attribute($this->env, $this->source, ($context["fields"] ?? null), "field_radio", [0 => "soconfig_general_store", 1 => "preloader", 2 => [1 => "ON", 0 => "OFF"], 3 => 1, 4 => "parent preloader"], "method", false, false, false, 377);
        echo " 
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"form-group\" id=\"tab-field-preloader\">
\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" >
\t\t\t\t\t\t\t\t<span data-toggle=\"tooltip\" title=\"Select a preloader animation from the list\">
\t\t\t\t\t\t\t\t\tPreloader Animation:
\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t";
        // line 387
        echo twig_get_attribute($this->env, $this->source, ($context["fields"] ?? null), "field_radio", [0 => "soconfig_general_store", 1 => "preloader_animation", 2 => ($context["preloader_animation"] ?? null), 3 => "line", 4 => "child preloader"], "method", false, false, false, 387);
        echo " 
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" > Status Payment  </label>
\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t";
        // line 395
        echo twig_get_attribute($this->env, $this->source, ($context["fields"] ?? null), "field_radio", [0 => "soconfig_general_store", 1 => "imgpayment_status", 2 => [1 => "ON", 0 => "OFF"]], "method", false, false, false, 395);
        echo " 
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"form-group\" id=\"tab-field-imgpayment_status\">
\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" >
\t\t\t\t\t\t\t\t<span data-toggle=\"tooltip\" title=\"Edit content here Footer Custom Block.\">
\t\t\t\t\t\t\t\t\tImage (Payment block):
\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t";
        // line 405
        echo twig_get_attribute($this->env, $this->source, ($context["fields"] ?? null), "field_addimage", [0 => "soconfig_general_store", 1 => "imgpayment"], "method", false, false, false, 405);
        echo " 
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\">  ";
        // line 411
        echo ($context["general_copyright"] ?? null);
        echo "   </label>
\t\t\t\t\t\t\t<div class=\"col-sm-4\">
\t\t\t\t\t\t\t\t";
        // line 413
        echo twig_get_attribute($this->env, $this->source, ($context["fields"] ?? null), "field_text", [0 => "soconfig_general_store", 1 => "copyright", 2 => "Footer copyright content"], "method", false, false, false, 413);
        echo " 
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-sm-offset-2 col-sm-10\">
\t\t\t\t\t\t\t\t";
        // line 416
        if (twig_get_attribute($this->env, $this->source, ($context["error"] ?? null), "copyright", [], "any", false, false, false, 416)) {
            // line 417
            echo "\t\t\t\t\t\t\t\t\t<div class=\"text-danger\"> ";
            echo twig_get_attribute($this->env, $this->source, ($context["error"] ?? null), "copyright", [], "any", false, false, false, 417);
            echo "</div>
\t\t\t\t\t\t\t\t";
        }
        // line 419
        echo "\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t
\t\t\t\t\t</div>
                </div>
\t\t\t\t
            </div>
           

\t\t\t";
        // line 429
        echo "            <div id=\"tab-general-layout2\" class=\"tab-pane\">
\t\t\t\t<div id=\"tab-general__headertype\" class=\"tab-pane active\">
\t\t\t\t\t<div class=\"so-panel\">
\t\t\t\t\t\t<h3 class=\"panel-title\">Type of Header</h3>
\t\t\t\t\t\t<span class=\"help-block\">If you need content from other header like phone number you need to set it in custom Theme Control Panel.</span>
\t\t\t\t\t\t<p class=\"help-hint\">
\t\t\t\t\t\t\t<i class=\"fa fa-bullhorn\" aria-hidden=\"true\"></i> 
\t\t\t\t\t\t\t<span>You can set these headers for any skin you want</span>
\t\t\t\t\t\t</p>
\t\t\t\t\t\t";
        // line 438
        echo twig_get_attribute($this->env, $this->source, ($context["fields"] ?? null), "field_typeheader", [0 => "soconfig_general_store", 1 => "typeheader", 2 => ($context["typelayouts"] ?? null)], "method", false, false, false, 438);
        echo " 
\t\t\t\t\t</div>
\t\t\t\t\t
\t\t\t\t</div>
\t\t\t\t\t\t\t\t
            </div>

\t\t\t
\t\t\t";
        // line 447
        echo "            <div id=\"tab-general-layout3\" class=\"tab-pane\">
\t\t\t\t<div id=\"tab-general__footertype\">
\t\t\t\t\t<div class=\"so-panel\">
\t\t\t\t\t\t<h3 class=\"panel-title\">Type of Footer</h3>
\t\t\t\t\t\t<span class=\"help-block\">If you need content from other footer like contact us you need to set it in custom modules.</span>
\t\t\t\t\t\t<p class=\"help-hint\">
\t\t\t\t\t\t\t<i class=\"fa fa-bullhorn\" aria-hidden=\"true\"></i> 
\t\t\t\t\t\t\t<span>You can set these footer for any skin you want</span>
\t\t\t\t\t\t</p>
\t\t\t\t\t\t";
        // line 456
        echo twig_get_attribute($this->env, $this->source, ($context["fields"] ?? null), "field_typeheader", [0 => "soconfig_general_store", 1 => "typefooter", 2 => ($context["typelayouts"] ?? null)], "method", false, false, false, 456);
        echo " 
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t
            </div>
            
\t\t\t";
        // line 463
        echo "            <div id=\"tab-general-layout4\" class=\"tab-pane\">
\t\t\t\t<div class=\"clearfix\">
\t\t\t\t\t
\t\t\t\t\t\t<div id=\"tab-general__bannereffect\" class=\"tab-pane\">
\t\t\t\t\t\t\t<div class=\"so-panel\">
\t\t\t\t\t\t\t\t<h3 class=\"panel-title\">Hover over image below to see effect.</h3>
\t\t\t\t\t\t\t\t<p class=\"help-hint\">
\t\t\t\t\t\t\t\t\t<i class=\"fa fa-bullhorn\" aria-hidden=\"true\"></i> 
\t\t\t\t\t\t\t\t\t<span>Hover over image below to see effect.</span>
\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t";
        // line 473
        echo twig_get_attribute($this->env, $this->source, ($context["fields"] ?? null), "field_typebanner", [0 => "soconfig_general_store", 1 => "type_banner", 2 => ($context["type_banner"] ?? null), 3 => 3], "method", false, false, false, 473);
        echo " 
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t
\t\t\t\t\t\t</div>
\t\t\t\t\t\t
\t\t\t\t\t
\t\t\t\t</div>
\t\t\t\t
\t\t\t\t
\t\t\t\t
            </div>

        </div>
    </div>
    <!-------------------------------------end tab General---------------------------------->

    <!-------------------------------------Tab Layout---------------------------------------->
    <div class=\"tab-pane\" id=\"tab-layout\">
\t\t<!--subtabs: General -->
\t\t<div class=\"tab-pane active\" id=\"tab-colors-layout1\">
\t\t\t<div class=\"so-panel\">
\t\t\t\t<h3 class=\"panel-title\">Theme Layout Settings</h3>
\t\t\t\t<div class=\"panel-container\">
\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" >
\t\t\t\t\t\t\t<span data-toggle=\"tooltip\" title=\"With the boxed layout you can choose additional options such as custom background images, patterns and solid colors\">Layout Style</span>
\t\t\t\t\t\t</label>
\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t<div class=\"btn-group btn-toggle block-group \" data-toggle=\"buttons\">
\t\t\t\t\t\t\t\t";
        // line 502
        echo twig_get_attribute($this->env, $this->source, ($context["fields"] ?? null), "field_radio", [0 => "soconfig_layout_store", 1 => "layoutstyle", 2 => ($context["layoutStyle"] ?? null)], "method", false, false, false, 502);
        echo " 
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t
\t\t\t\t\t
\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<label class=\"col-sm-3 control-label\">
\t\t\t\t\t\t\t <span data-toggle=\"tooltip\" title=\"Set background color for all content.\">Body Background Color:</span>
\t\t\t\t\t\t</label>
\t\t\t\t\t\t<div class=\"col-sm-2\">
\t\t\t\t\t\t\t";
        // line 513
        echo twig_get_attribute($this->env, $this->source, ($context["fields"] ?? null), "field_colors", [0 => "soconfig_layout_store", 1 => "theme_bgcolor", 2 => "Background color"], "method", false, false, false, 513);
        echo " 
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t
\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" >Overlay pattern</label>
\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t<div class=\"form-group no-margin\">
\t\t\t\t\t\t\t\t";
        // line 521
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, 45));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 522
            echo "\t\t\t\t\t\t\t\t\t<div class=\"img-patt\"><small>";
            echo $context["i"];
            echo " </small><img src=\"";
            echo ($context["dir_soconfig"] ?? null);
            echo "patterns/";
            echo $context["i"];
            echo ".png\" alt=\"pattern ";
            echo $context["i"];
            echo " \"></div>
\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 524
        echo "\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
        // line 525
        echo twig_get_attribute($this->env, $this->source, ($context["fields"] ?? null), "field_select", [0 => "soconfig_layout_store", 1 => "pattern", 2 => ($context["pattern_array"] ?? null), 3 => "width30"], "method", false, false, false, 525);
        echo " 
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<small class=\"help-block\">Select a pattern number if you want to use one.</small>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t
\t\t\t\t\t
\t\t\t\t\t
\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<label class=\"col-sm-3 control-label\">
\t\t\t\t\t\t\t<span data-toggle=\"tooltip\" title=\"Set background image for all site.\">Background Image:</span>
\t\t\t\t\t\t</label>
\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t";
        // line 538
        echo twig_get_attribute($this->env, $this->source, ($context["fields"] ?? null), "field_addimage", [0 => "soconfig_layout_store", 1 => "contentbg"], "method", false, false, false, 538);
        echo " 
\t\t\t\t\t\t\t
\t\t\t\t\t\t</div>
\t\t\t\t\t\t
\t\t\t\t\t\t
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" >
\t\t\t\t\t\t\t <span data-toggle=\"tooltip\" title=\"Set background image display mode\">
\t\t\t\t\t\t\t\t Background Image display mode
\t\t\t\t\t\t\t </span>
\t\t\t\t\t\t</label>
\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t";
        // line 552
        echo twig_get_attribute($this->env, $this->source, ($context["fields"] ?? null), "field_radio", [0 => "soconfig_layout_store", 1 => "content_bg_mode", 2 => ($context["content_bg_mode"] ?? null)], "method", false, false, false, 552);
        echo " 

\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t
\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" >
\t\t\t\t\t\t\tBackground Image display Attachment
\t\t\t\t\t\t</label>
\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t";
        // line 562
        echo twig_get_attribute($this->env, $this->source, ($context["fields"] ?? null), "field_radio", [0 => "soconfig_layout_store", 1 => "content_attachment", 2 => ($context["content_attachment"] ?? null)], "method", false, false, false, 562);
        echo " 

\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t\t
\t\t\t\t</div>
\t\t\t</div>

\t\t</div>
\t\t<!--subtabs: General -->
    </div>
    <!-------------------------------------end tab Colors,backgrounds,fonts-->

    <!-------------------------------------Tab Products sliders, products listings-->
    <div class=\"tab-pane\" id=\"tab-products\">

        <ul class=\"nav nav-tabs  main_tabs_2\">
            <li class=\"active\"><a href=\"#tab-products-layout1\" class=\"selected\" data-toggle=\"tab\">";
        // line 580
        echo ($context["pages_pro_listings"] ?? null);
        echo " </a></li>
            <li><a href=\"#tab-products-layout2\" data-toggle=\"tab\">";
        // line 581
        echo ($context["pages_pro_detail"] ?? null);
        echo " </a></li>
            <li><a href=\"#tab-products-layout3\" data-toggle=\"tab\">";
        // line 582
        echo ($context["pages_comingsoon"] ?? null);
        echo " </a></li>
        </ul>
        <div class=\"tab-content\">
            <!--subtabs: Listings -->
            <div class=\"tab-pane active wrapper-tabcategory\" id=\"tab-products-layout1\">
\t\t\t\t
\t\t\t\t<div class=\"so-panel\">
\t\t\t\t\t<h3 class=\"panel-title\">
\t\t\t\t\t\tLayout Category & Product
\t\t\t\t\t</h3>
\t\t\t\t\t<div class=\"panel-container\">
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\">";
        // line 594
        echo ($context["product_catalog_col_position"] ?? null);
        echo " </label>
\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t";
        // line 596
        echo twig_get_attribute($this->env, $this->source, ($context["fields"] ?? null), "field_radio", [0 => "soconfig_pages_store", 1 => "catalog_col_position", 2 => ["outside" => "Outside content", "inside" => "Inside content"], 3 => "outside"], "method", false, false, false, 596);
        echo " 
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\">";
        // line 600
        echo ($context["product_catalog_col_type"] ?? null);
        echo " </label>
\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t";
        // line 602
        echo twig_get_attribute($this->env, $this->source, ($context["fields"] ?? null), "field_radio", [0 => "soconfig_pages_store", 1 => "catalog_col_type", 2 => ["default" => "Default", "off_canvas" => "Column Off Canvas"], 3 => "default"], "method", false, false, false, 602);
        echo " 
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\">";
        // line 606
        echo ($context["product_catalog_sidebar_sticky"] ?? null);
        echo " </label>
\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t";
        // line 608
        echo twig_get_attribute($this->env, $this->source, ($context["fields"] ?? null), "field_radio", [0 => "soconfig_pages_store", 1 => "catalog_sidebar_sticky", 2 => ["disable" => "Disable", "left" => "Sidebar Left", "right" => "Sidebar Right", "all" => "Sidebar All"], 3 => "disable"], "method", false, false, false, 608);
        echo " 
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t
\t\t\t\t<div class=\"so-panel\">
\t\t\t\t\t<h3 class=\"panel-title\">
\t\t\t\t\t\tCategory Info
\t\t\t\t\t\t<a href=\"view/template/extension/soconfig/images/general/category_info.png\" target=\"_blank\" class=\"question-circle\" data-toggle=\"tooltip\" title=\"Screenshot Themes Config \">
\t\t\t\t\t\t\t<i class=\"fa fa-question-circle\" ></i>
\t\t\t\t\t\t</a>
\t\t\t\t\t</h3>
\t\t\t\t\t<div class=\"panel-container\">

\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" >
\t\t\t\t\t\t\t\t";
        // line 625
        echo ($context["product_catalog_refine"] ?? null);
        echo "
\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t";
        // line 628
        echo twig_get_attribute($this->env, $this->source, ($context["fields"] ?? null), "field_radio", [0 => "soconfig_pages_store", 1 => "product_catalog_refine", 2 => ($context["refine_search"] ?? null)], "method", false, false, false, 628);
        echo " 
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" >";
        // line 632
        echo ($context["product_catalog_refine_col"] ?? null);
        echo "</span></label>
\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t";
        // line 634
        echo twig_get_attribute($this->env, $this->source, ($context["fields"] ?? null), "field_select", [0 => "soconfig_pages_store", 1 => "catalog_refine_number", 2 => ($context["columns"] ?? null), 3 => "width30"], "method", false, false, false, 634);
        echo " 
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\">";
        // line 638
        echo ($context["product_catalog_show"] ?? null);
        echo " </label>
\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t";
        // line 640
        echo twig_get_attribute($this->env, $this->source, ($context["fields"] ?? null), "field_radio", [0 => "soconfig_pages_store", 1 => "lstimg_cate_status", 2 => [0 => "Disable", 1 => "Show Derc", 2 => "Show all"]], "method", false, false, false, 640);
        echo " 
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-product_catalog_mode\">
\t\t\t\t\t\t\t\t<span data-toggle=\"tooltip\" title=\"Create your listings into simple catalog.\">";
        // line 646
        echo ($context["product_catalog_mode"] ?? null);
        echo "</span>
\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t";
        // line 649
        echo twig_get_attribute($this->env, $this->source, ($context["fields"] ?? null), "field_select", [0 => "soconfig_pages_store", 1 => "product_catalog_mode", 2 => ($context["catalog_mode"] ?? null), 3 => "width30"], "method", false, false, false, 649);
        echo " 
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t
\t\t\t\t<div class=\"so-panel col-sm-6\">
\t\t\t\t\t<h3 class=\"panel-title\">Product Item</h3>
\t\t\t\t\t<div class=\"panel-container\">
\t\t\t\t\t\t
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<label class=\"col-sm-6 control-label\">
\t\t\t\t\t\t\t\t<span data-toggle=\"tooltip\" title=\"Set display or not 'Discount' label.\">Show \"Discount\":</span>
\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t";
        // line 665
        echo twig_get_attribute($this->env, $this->source, ($context["fields"] ?? null), "field_radio", [0 => "soconfig_pages_store", 1 => "discount_status", 2 => [1 => "ON", 0 => "OFF"]], "method", false, false, false, 665);
        echo " 
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<label class=\"col-sm-6 control-label\">
\t\t\t\t\t\t\t\t<span data-toggle=\"tooltip\" title=\"Set display or not countdown of Special Offer in product sliders.\">Show countdown of Special Offer:</span>
\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t";
        // line 674
        echo twig_get_attribute($this->env, $this->source, ($context["fields"] ?? null), "field_radio", [0 => "soconfig_pages_store", 1 => "countdown_status", 2 => [1 => "ON", 0 => "OFF"]], "method", false, false, false, 674);
        echo " 
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t
\t\t\t\t\t    <div class=\"form-group\">
\t\t\t\t\t\t\t<label class=\"col-sm-6 control-label\">Show Ratings</label>
\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t";
        // line 682
        echo twig_get_attribute($this->env, $this->source, ($context["fields"] ?? null), "field_radio", [0 => "soconfig_pages_store", 1 => "rating_status", 2 => [1 => "ON", 0 => "OFF"]], "method", false, false, false, 682);
        echo " 
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<label class=\"col-sm-6 control-label\" >
\t\t\t\t\t\t\t\tShow  Orders
\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t";
        // line 691
        echo twig_get_attribute($this->env, $this->source, ($context["fields"] ?? null), "field_radio", [0 => "soconfig_pages_store", 1 => "product_order", 2 => [1 => "ON", 0 => "OFF"], 3 => 1], "method", false, false, false, 691);
        echo " 
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<label class=\"col-sm-6 control-label\">Show image gallery </label>
\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t";
        // line 697
        echo twig_get_attribute($this->env, $this->source, ($context["fields"] ?? null), "field_radio", [0 => "soconfig_pages_store", 1 => "card_gallery", 2 => ($context["card_gallery"] ?? null)], "method", false, false, false, 697);
        echo " 
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<label class=\"col-sm-6 control-label\">Status use placeholder images</label>
\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t";
        // line 703
        echo twig_get_attribute($this->env, $this->source, ($context["fields"] ?? null), "field_radio", [0 => "soconfig_pages_store", 1 => "placeholder_status", 2 => [1 => "ON", 0 => "OFF"], 3 => 0, 4 => "parent placeholder"], "method", false, false, false, 703);
        echo " 
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<label class=\"col-sm-6 control-label\" > Placeholder default images</label>
\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t";
        // line 710
        echo twig_get_attribute($this->env, $this->source, ($context["fields"] ?? null), "field_addimage", [0 => "soconfig_pages_store", 1 => "placeholder_img", 2 => "child placeholder"], "method", false, false, false, 710);
        echo " 
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t

\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"so-panel col-sm-6\">
\t\t\t\t\t<h3 class=\"panel-title\">Button group
\t\t\t\t\t\t
\t\t\t\t\t</h3>
\t\t\t\t\t<div class=\"panel-container\">
\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t<label class=\"col-sm-5 control-label\">
\t\t\t\t\t\t\t\t\tShow position cart info
\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t<div class=\"col-sm-7\">
\t\t\t\t\t\t\t\t\t";
        // line 727
        echo twig_get_attribute($this->env, $this->source, ($context["fields"] ?? null), "field_radio", [0 => "soconfig_pages_store", 1 => "desktop_addcart_position", 2 => ["left" => "Align Left", "right" => "Align Right", "center" => "Align Center", "bottom" => "Align Bottom"], 3 => "left"], "method", false, false, false, 727);
        echo " 
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t<label class=\"col-sm-5 control-label\">
\t\t\t\t\t\t\t\t\tShow \"QuickView\" Button
\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t<div class=\"col-sm-7\">
\t\t\t\t\t\t\t\t\t";
        // line 736
        echo twig_get_attribute($this->env, $this->source, ($context["fields"] ?? null), "field_radio", [0 => "soconfig_pages_store", 1 => "quick_status", 2 => [1 => "ON", 0 => "OFF"]], "method", false, false, false, 736);
        echo " 
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t<label class=\"col-sm-5 control-label\">
\t\t\t\t\t\t\t\t\tShow \"Addtocart \" Button
\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t<div class=\"col-sm-7\">
\t\t\t\t\t\t\t\t\t";
        // line 745
        echo twig_get_attribute($this->env, $this->source, ($context["fields"] ?? null), "field_radio", [0 => "soconfig_pages_store", 1 => "desktop_addcart_status", 2 => [1 => "ON", 0 => "OFF"]], "method", false, false, false, 745);
        echo " 
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t<label class=\"col-sm-5 control-label\">
\t\t\t\t\t\t\t\t\tShow \"Wishlist \" Button
\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t<div class=\"col-sm-7\">
\t\t\t\t\t\t\t\t\t";
        // line 754
        echo twig_get_attribute($this->env, $this->source, ($context["fields"] ?? null), "field_radio", [0 => "soconfig_pages_store", 1 => "desktop_wishlist_status", 2 => [1 => "ON", 0 => "OFF"]], "method", false, false, false, 754);
        echo " 
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t<label class=\"col-sm-5 control-label\">
\t\t\t\t\t\t\t\t\tShow \"Compare \" Button
\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t<div class=\"col-sm-7\">
\t\t\t\t\t\t\t\t\t";
        // line 763
        echo twig_get_attribute($this->env, $this->source, ($context["fields"] ?? null), "field_radio", [0 => "soconfig_pages_store", 1 => "desktop_Compare_status", 2 => [1 => "ON", 0 => "OFF"]], "method", false, false, false, 763);
        echo " 
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>

         
            <!--subtabs: product page -->
            <div id=\"tab-products-layout2\" class=\"tab-pane\">
                <div class=\"so-panel\">
\t\t\t\t\t<h3 class=\"panel-title\">Options Styles</h3>
\t\t\t\t\t<div class=\"panel-container\">
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-thumbnails_position\">Option Checkbox and Radio Style:</label>
\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t";
        // line 779
        echo twig_get_attribute($this->env, $this->source, ($context["fields"] ?? null), "field_radio", [0 => "soconfig_pages_store", 1 => "radio_style", 2 => ($context["radio_style"] ?? null)], "method", false, false, false, 779);
        echo " 
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"so-panel\">
\t\t\t\t\t<h3 class=\"panel-title\">Product Page</h3>
\t\t\t\t\t<div class=\"panel-container\">
\t\t\t\t\t\t
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-thumbnails_position\">Select of product gallery:</label>
\t\t\t\t\t\t\t<div class=\"col-sm-5\">
\t\t\t\t\t\t\t\t<img src=\"";
        // line 792
        echo ($context["dir_soconfig"] ?? null);
        echo "images/general/product-grid.png\" alt=\"product-grid\">
\t\t\t\t\t\t\t\t";
        // line 793
        echo twig_get_attribute($this->env, $this->source, ($context["fields"] ?? null), "field_radio", [0 => "soconfig_pages_store", 1 => "thumbnails_position", 2 => ($context["thumbnailPos"] ?? null)], "method", false, false, false, 793);
        echo " 
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-cloudzoom_mode\">
\t\t\t\t\t\t\t\t<span data-toggle=\"tooltip\" title=\"Choose position of cloudzoom image preview on product page.\">Enable Product Zoom</span>
\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t";
        // line 801
        echo twig_get_attribute($this->env, $this->source, ($context["fields"] ?? null), "field_radio", [0 => "soconfig_pages_store", 1 => "product_enablezoom", 2 => [1 => "ON", 0 => "OFF"]], "method", false, false, false, 801);
        echo " 
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" >
\t\t\t\t\t\t\t\tEnable Size Chart
\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t";
        // line 810
        echo twig_get_attribute($this->env, $this->source, ($context["fields"] ?? null), "field_radio", [0 => "soconfig_pages_store", 1 => "product_enablesizechart", 2 => [1 => "ON", 0 => "OFF"], 3 => 0, 4 => "parent sizechart"], "method", false, false, false, 810);
        echo " 
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"form-group\" id=\"tab-field-product_enablesizechart\">
\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" >
\t\t\t\t\t\t\t\tSize Chart:
\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t";
        // line 819
        echo twig_get_attribute($this->env, $this->source, ($context["fields"] ?? null), "field_addimage", [0 => "soconfig_general_store", 1 => "img_sizechart", 2 => "child sizechart"], "method", false, false, false, 819);
        echo " 
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-tabs_position\">Tabs block</label>
\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t";
        // line 826
        echo twig_get_attribute($this->env, $this->source, ($context["fields"] ?? null), "field_radio", [0 => "soconfig_pages_store", 1 => "tabs_position", 2 => ($context["tabs_position"] ?? null)], "method", false, false, false, 826);
        echo " 
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" >
\t\t\t\t\t\t\t\tEnable Button Show More
\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t";
        // line 834
        echo twig_get_attribute($this->env, $this->source, ($context["fields"] ?? null), "field_radio", [0 => "soconfig_pages_store", 1 => "product_enableshowmore", 2 => [1 => "ON", 0 => "OFF"], 3 => 0], "method", false, false, false, 834);
        echo " 
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-meta-keyword\">Show Shipping & Payment</label>
\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t";
        // line 840
        echo twig_get_attribute($this->env, $this->source, ($context["fields"] ?? null), "field_radio", [0 => "soconfig_pages_store", 1 => "product_enableshipping", 2 => [1 => "ON", 0 => "OFF"], 3 => 1], "method", false, false, false, 840);
        echo " 
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t
\t\t\t\t\t\t<div class=\"form-group\" id=\"tab-field-product_enableshipping\">
\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" >Content Shipping & Payment</label>
\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t";
        // line 847
        echo twig_get_attribute($this->env, $this->source, ($context["fields"] ?? null), "field_langTextarea", [0 => ($context["languages"] ?? null), 1 => "soconfig_pages_store", 2 => "product_contentshipping"], "method", false, false, false, 847);
        echo "
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>

\t\t\t\t\t</div>
\t\t\t\t</div>\t
\t\t\t\t<div class=\"so-panel\">
\t\t\t\t\t<h3 class=\"panel-title\">Social Share</h3>
\t\t\t\t\t<div class=\"panel-container\">
\t\t\t\t\t\t
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-meta-keyword\">Show Custom</label>
\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t";
        // line 860
        echo twig_get_attribute($this->env, $this->source, ($context["fields"] ?? null), "field_radio", [0 => "soconfig_pages_store", 1 => "product_page_button", 2 => [1 => "ON", 0 => "OFF"]], "method", false, false, false, 860);
        echo " 
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t
\t\t\t\t\t\t<div class=\"form-group\" id=\"tab-field-product_page_button\">
\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" >Custom block</label>
\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t";
        // line 867
        echo twig_get_attribute($this->env, $this->source, ($context["fields"] ?? null), "field_langTextarea", [0 => ($context["languages"] ?? null), 1 => "soconfig_pages_store", 2 => "product_socialshare"], "method", false, false, false, 867);
        echo "
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"so-panel\">
\t\t\t\t\t<h3 class=\"panel-title\">Related products</h3>
\t\t\t\t\t<div class=\"panel-container\">
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-related\">Show Related</label>
\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t";
        // line 878
        echo twig_get_attribute($this->env, $this->source, ($context["fields"] ?? null), "field_radio", [0 => "soconfig_pages_store", 1 => "related_status", 2 => [1 => "ON", 0 => "OFF"]], "method", false, false, false, 878);
        echo " 
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div id=\"tab-field-related_status\">
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-listing_quick_type\">Related product number per row <p class=\"help-block\">(use orientation related = Horizontal)</p></label>
\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t";
        // line 887
        echo twig_get_attribute($this->env, $this->source, ($context["fields"] ?? null), "field_devices", [0 => "soconfig_pages_store", 1 => "product_related_column_", 2 => ($context["devices"] ?? null), 3 => ($context["columns"] ?? null)], "method", false, false, false, 887);
        echo " 

\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>\t
\t\t\t\t</div>\t\t
\t\t\t\t\t
\t\t\t\t
            </div>
\t\t\t
\t\t\t<!--subtabs: Coming Soon-->
\t\t\t<div id=\"tab-products-layout3\" class=\"tab-pane\">
\t    \t   <div class=\"so-panel\">
\t\t\t\t\t<h3 class=\"panel-title\">Coming Soon</h3>
\t\t\t\t\t<div class=\"panel-container\">
\t\t\t\t\t\t<div class=\"form-group\" id=\"tab-field-comingsoon_status\">
\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" >
\t\t\t\t\t\t\t\tComing Soon Background
\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t";
        // line 908
        echo twig_get_attribute($this->env, $this->source, ($context["fields"] ?? null), "field_addimage", [0 => "soconfig_pages_store", 1 => "comingsoon_imglogo"], "method", false, false, false, 908);
        echo " 
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\">Coming Soon Title</label>
\t\t\t\t\t\t\t<div class=\"col-sm-10\" id=\"tab-field-welcome_message_status\">
\t\t\t\t\t\t\t\t";
        // line 914
        echo twig_get_attribute($this->env, $this->source, ($context["fields"] ?? null), "field_langHori", [0 => ($context["languages"] ?? null), 1 => "soconfig_pages_store", 2 => "comingsoon_title", 3 => 50], "method", false, false, false, 914);
        echo "
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\">Date</label>
\t\t\t\t\t\t\t<div class=\"col-sm-3\" id=\"tab-field-welcome_message_status\">
\t\t\t\t\t\t\t\t";
        // line 920
        echo twig_get_attribute($this->env, $this->source, ($context["fields"] ?? null), "field_date", [0 => "soconfig_pages_store", 1 => "comingsoon_date", 2 => "2016-05-26"], "method", false, false, false, 920);
        echo "
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"form-group\" id=\"tab-field-social_custom_status\">
\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" >Content</label>
\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t";
        // line 926
        echo twig_get_attribute($this->env, $this->source, ($context["fields"] ?? null), "field_langTextarea", [0 => ($context["languages"] ?? null), 1 => "soconfig_pages_store", 2 => "comingsoon_content"], "method", false, false, false, 926);
        echo "
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t        </div>
        </div>

    </div>
    <!------------------------------------end tab Pages-->

    <!-------------------------------------Tab Fonts-->
    <div class=\"tab-pane\" id=\"tab-fonts\">
\t\t
\t\t<div class=\"so-panel\">
\t\t\t<h3 class=\"panel-title\">Fonts<span class=\"help-block\">If you want to speed up your site use one of the common fonts instead of the fonts from Google.</span></h3>
\t\t\t<div class=\"panel-container\">
\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t
\t\t\t\t\t<label class=\"col-sm-3 control-label\" >";
        // line 945
        echo ($context["fonts_body"] ?? null);
        echo "  </label>
\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t<div class=\"block-group fonts-change\">
\t\t\t\t\t\t\t";
        // line 948
        echo twig_get_attribute($this->env, $this->source, ($context["fields"] ?? null), "field_onOffFont", [0 => "soconfig_fonts_store", 1 => "body_status"], "method", false, false, false, 948);
        echo " 
\t\t\t\t\t\t\t<div class=\"block-group items-font font-standard\" >
\t\t\t\t\t\t\t\t";
        // line 950
        echo twig_get_attribute($this->env, $this->source, ($context["fields"] ?? null), "field_select", [0 => "soconfig_fonts_store", 1 => "normal_body", 2 => ($context["fonts_normal"] ?? null)], "method", false, false, false, 950);
        echo " 
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"block-group items-font font-google\" >
\t\t\t\t\t\t\t\t<label class=\"control-label\">  ";
        // line 953
        echo ($context["entry_google_url"] ?? null);
        echo "   </label>
\t\t\t\t\t\t\t\t<div class=\"\">
\t\t\t\t\t\t\t\t\t";
        // line 955
        echo twig_get_attribute($this->env, $this->source, ($context["fields"] ?? null), "field_text", [0 => "soconfig_fonts_store", 1 => "url_body"], "method", false, false, false, 955);
        echo " 
\t\t\t\t\t\t\t\t\t<span class=\"help-block\">";
        // line 956
        echo ($context["entry_google_url_help"] ?? null);
        echo "</span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"block-group items-font font-google\" >
\t\t\t\t\t\t\t\t<label class=\" control-label\"> ";
        // line 960
        echo ($context["entry_google_family"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t<div class=\"\">
\t\t\t\t\t\t\t\t\t";
        // line 962
        echo twig_get_attribute($this->env, $this->source, ($context["fields"] ?? null), "field_text", [0 => "soconfig_fonts_store", 1 => "family_body"], "method", false, false, false, 962);
        echo " 
\t\t\t\t\t\t\t\t\t<span class=\"help-block\"> ";
        // line 963
        echo ($context["entry_google_family_help"] ?? null);
        echo "</span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"block-group\">
\t\t\t\t\t\t\t";
        // line 968
        echo twig_get_attribute($this->env, $this->source, ($context["fields"] ?? null), "field_textarea", [0 => "soconfig_fonts_store", 1 => "selector_body", 2 => "Add css selectors"], "method", false, false, false, 968);
        echo " 
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t
\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t<label class=\"col-sm-3 control-label\" >";
        // line 974
        echo ($context["fonts_menu"] ?? null);
        echo "  </label>
\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t<div class=\"block-group fonts-change\">
\t\t\t\t\t\t\t";
        // line 977
        echo twig_get_attribute($this->env, $this->source, ($context["fields"] ?? null), "field_onOffFont", [0 => "soconfig_fonts_store", 1 => "menu_status"], "method", false, false, false, 977);
        echo " 
\t\t\t\t\t\t\t<div class=\"block-group items-font font-standard\" >
\t\t\t\t\t\t\t\t";
        // line 979
        echo twig_get_attribute($this->env, $this->source, ($context["fields"] ?? null), "field_select", [0 => "soconfig_fonts_store", 1 => "normal_menu", 2 => ($context["fonts_normal"] ?? null)], "method", false, false, false, 979);
        echo " 
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"block-group items-font font-google\" >
\t\t\t\t\t\t\t\t<label class=\"control-label\">  ";
        // line 982
        echo ($context["entry_google_url"] ?? null);
        echo "   </label>
\t\t\t\t\t\t\t\t<div class=\"\">
\t\t\t\t\t\t\t\t\t";
        // line 984
        echo twig_get_attribute($this->env, $this->source, ($context["fields"] ?? null), "field_text", [0 => "soconfig_fonts_store", 1 => "url_menu"], "method", false, false, false, 984);
        echo " 
\t\t\t\t\t\t\t\t\t<span class=\"help-block\">";
        // line 985
        echo ($context["entry_google_url_help"] ?? null);
        echo "</span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"block-group items-font font-google\" >
\t\t\t\t\t\t\t\t<label class=\" control-label\"> ";
        // line 989
        echo ($context["entry_google_family"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t<div class=\"\">
\t\t\t\t\t\t\t\t\t";
        // line 991
        echo twig_get_attribute($this->env, $this->source, ($context["fields"] ?? null), "field_text", [0 => "soconfig_fonts_store", 1 => "family_menu"], "method", false, false, false, 991);
        echo " 
\t\t\t\t\t\t\t\t\t<span class=\"help-block\"> ";
        // line 992
        echo ($context["entry_google_family_help"] ?? null);
        echo "</span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"block-group\">
\t\t\t\t\t\t\t";
        // line 997
        echo twig_get_attribute($this->env, $this->source, ($context["fields"] ?? null), "field_textarea", [0 => "soconfig_fonts_store", 1 => "selector_menu", 2 => "Add css selectors"], "method", false, false, false, 997);
        echo " 
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>\t
\t\t\t\t
\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t<label class=\"col-sm-3 control-label\" >";
        // line 1003
        echo ($context["fonts_heading"] ?? null);
        echo "  </label>
\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t<div class=\"block-group fonts-change\">
\t\t\t\t\t\t\t";
        // line 1006
        echo twig_get_attribute($this->env, $this->source, ($context["fields"] ?? null), "field_onOffFont", [0 => "soconfig_fonts_store", 1 => "heading_status"], "method", false, false, false, 1006);
        echo " 
\t\t\t\t\t\t\t<div class=\"block-group items-font font-standard\" >
\t\t\t\t\t\t\t\t";
        // line 1008
        echo twig_get_attribute($this->env, $this->source, ($context["fields"] ?? null), "field_select", [0 => "soconfig_fonts_store", 1 => "normal_heading", 2 => ($context["fonts_normal"] ?? null)], "method", false, false, false, 1008);
        echo " 
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"block-group items-font font-google\" >
\t\t\t\t\t\t\t\t<label class=\"control-label\"> ";
        // line 1011
        echo ($context["entry_google_url"] ?? null);
        echo "  </label>
\t\t\t\t\t\t\t\t<div class=\"\">
\t\t\t\t\t\t\t\t\t";
        // line 1013
        echo twig_get_attribute($this->env, $this->source, ($context["fields"] ?? null), "field_text", [0 => "soconfig_fonts_store", 1 => "url_heading"], "method", false, false, false, 1013);
        echo " 
\t\t\t\t\t\t\t\t\t<span class=\"help-block\">";
        // line 1014
        echo ($context["entry_google_url_help"] ?? null);
        echo "</span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"block-group items-font font-google\" >
\t\t\t\t\t\t\t\t<label class=\" control-label\"> ";
        // line 1018
        echo ($context["entry_google_family"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t<div class=\"\">
\t\t\t\t\t\t\t\t\t";
        // line 1020
        echo twig_get_attribute($this->env, $this->source, ($context["fields"] ?? null), "field_text", [0 => "soconfig_fonts_store", 1 => "family_heading"], "method", false, false, false, 1020);
        echo " 
\t\t\t\t\t\t\t\t\t<span class=\"help-block\"> ";
        // line 1021
        echo ($context["entry_google_family_help"] ?? null);
        echo "</span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"block-group\">
\t\t\t\t\t\t\t";
        // line 1026
        echo twig_get_attribute($this->env, $this->source, ($context["fields"] ?? null), "field_textarea", [0 => "soconfig_fonts_store", 1 => "selector_heading", 2 => "Add css selectors"], "method", false, false, false, 1026);
        echo " 
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>\t\t\t\t
    </div>
    <!-------------------------------------end tab Fonts-->
\t
\t<!-------------------------------------Tab Social-->
\t<div class=\"tab-pane\" id=\"tab-social\">
\t\t<div class=\"so-panel\">
\t\t\t<h3 class=\"panel-title\">sidebar social
\t\t\t\t
\t\t\t</h3>
\t\t\t<div class=\"panel-container\">
\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t<label class=\"col-sm-3 control-label\" >
\t\t\t\t\t\tShow sidebar social
\t\t\t\t\t</label>
\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t";
        // line 1047
        echo twig_get_attribute($this->env, $this->source, ($context["fields"] ?? null), "field_radio", [0 => "soconfig_social_store", 1 => "social_sidebar", 2 => [0 => "Disable", 1 => "Sidebar Left", 2 => "Sidebar Right"]], "method", false, false, false, 1047);
        echo " 
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t
\t\t\t</div>
\t\t</div>\t
\t\t<div class=\"so-panel\">
\t\t\t<h3 class=\"panel-title\">Facebook</h3>
\t\t\t<div class=\"panel-container\">
\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t<label class=\"col-sm-3 control-label\" >
\t\t\t\t\t\tShow Facebook
\t\t\t\t\t</label>
\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t";
        // line 1061
        echo twig_get_attribute($this->env, $this->source, ($context["fields"] ?? null), "field_radio", [0 => "soconfig_social_store", 1 => "social_fb_status", 2 => [1 => "ON", 0 => "OFF"], 3 => "0", 4 => "parent social_fb"], "method", false, false, false, 1061);
        echo " 
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"form-group\" id=\"tab-field-social_fb_status\">
\t\t\t\t\t<label class=\"col-sm-3 control-label\" >
\t\t\t\t\t\tFacebook ID:
\t\t\t\t\t</label>
\t\t\t\t\t<div class=\"col-sm-3\">
\t\t\t\t\t\t";
        // line 1069
        echo twig_get_attribute($this->env, $this->source, ($context["fields"] ?? null), "field_text", [0 => "soconfig_social_store", 1 => "facebook", 2 => "Facebook profile name", 3 => "child social_fb"], "method", false, false, false, 1069);
        echo " 
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-sm-4\">
\t\t\t\t\t\t <a href=\"http://findmyfacebookid.com/\" target=\"_blank\" style=\"display: block;float: left;width: auto;margin-top: 7px\">Find your Facebook ID »</a>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>\t
\t\t
\t\t<div class=\"so-panel\">
\t\t\t<h3 class=\"panel-title\">Twitter</h3>
\t\t\t<div class=\"panel-container\">
\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t<label class=\"col-sm-3 control-label\" >
\t\t\t\t\t\tShow Twitter
\t\t\t\t\t</label>
\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t";
        // line 1086
        echo twig_get_attribute($this->env, $this->source, ($context["fields"] ?? null), "field_radio", [0 => "soconfig_social_store", 1 => "social_twitter_status", 2 => [1 => "ON", 0 => "OFF"], 3 => "0", 4 => "parent social_tt"], "method", false, false, false, 1086);
        echo " 
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"form-group\" id=\"tab-field-social_twitter_status\">
\t\t\t\t\t<label class=\"col-sm-3 control-label\" >
\t\t\t\t\t\tTwitter username:
\t\t\t\t\t</label>
\t\t\t\t\t<div class=\"col-sm-3\">
\t\t\t\t\t\t";
        // line 1094
        echo twig_get_attribute($this->env, $this->source, ($context["fields"] ?? null), "field_text", [0 => "soconfig_social_store", 1 => "twitter", 2 => "Twitter account name", 3 => "child social_tt"], "method", false, false, false, 1094);
        echo " 
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t
\t\t<div class=\"so-panel\">
\t\t\t<h3 class=\"panel-title\">Custom</h3>
\t\t\t<div class=\"panel-container\">
\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t<label class=\"col-sm-3 control-label\" >Show Custom </label>
\t\t\t\t\t<div class=\"col-sm-3\">
\t\t\t\t\t\t";
        // line 1106
        echo twig_get_attribute($this->env, $this->source, ($context["fields"] ?? null), "field_radio", [0 => "soconfig_social_store", 1 => "social_custom_status", 2 => [1 => "ON", 0 => "OFF"]], "method", false, false, false, 1106);
        echo " 
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t
\t\t\t\t<div class=\"form-group\" id=\"tab-field-social_custom_status\">
\t\t\t\t\t<label class=\"col-sm-3 control-label\" >Custom block</label>
\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t";
        // line 1113
        echo twig_get_attribute($this->env, $this->source, ($context["fields"] ?? null), "field_langTextarea", [0 => ($context["languages"] ?? null), 1 => "soconfig_social_store", 2 => "video_code"], "method", false, false, false, 1113);
        echo "
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
\t
\t<!-------------------------------------Tab Tab Advanced-->
\t<div class=\"tab-pane\" id=\"tab-custom\">
\t\t<div class=\"tab-horizontal\">
\t\t\t<ul class=\"nav nav-tabs  main_tabs_2\">
\t\t\t\t<li class=\"active\"><a href=\"#tab-custom-layout1\" class=\"selected\" data-toggle=\"tab\">";
        // line 1124
        echo ($context["custom_tab_css_input"] ?? null);
        echo "</a></li>
\t\t\t\t<li><a href=\"#tab-custom-layout2\" data-toggle=\"tab\">";
        // line 1125
        echo ($context["custom_tab_css_file"] ?? null);
        echo "</a></li>
\t\t\t\t<li><a href=\"#tab-custom-layout3\" data-toggle=\"tab\">";
        // line 1126
        echo ($context["custom_tab_js_input"] ?? null);
        echo "</a></li>

\t\t\t</ul>
\t\t</div>
        <div class=\"tab-content \">
        \t<div class=\"tab-pane active\" id=\"tab-custom-layout1\">
\t\t\t\t<div class=\"so-panel\">
\t\t\t\t\t<h3 class=\"panel-title\">CSS CODE DIRECT INPUT</h3>
\t\t\t\t\t<div class=\"panel-container\">
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" >Status </label>
\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t";
        // line 1138
        echo twig_get_attribute($this->env, $this->source, ($context["fields"] ?? null), "field_radio", [0 => "soconfig_custom_store", 1 => "cssinput_status", 2 => [1 => "ON", 0 => "OFF"]], "method", false, false, false, 1138);
        echo " 
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t";
        // line 1142
        echo twig_get_attribute($this->env, $this->source, ($context["fields"] ?? null), "field_textarea", [0 => "soconfig_custom_store", 1 => "cssinput_content"], "method", false, false, false, 1142);
        echo " 
\t\t\t\t\t\t</div>
\t\t\t\t\t\t
\t\t\t\t\t</div>
\t\t\t\t</div>
            </div>

            <div id=\"tab-custom-layout2\" class=\"customcode_wrap tab-pane\">
\t\t\t\t<div class=\"so-panel\">
\t\t\t\t\t
\t\t\t\t\t<div class=\"form-group no-margin\" >
\t\t\t\t\t\t<h3 class=\"col-sm-2 panel-title \">ADD CSS FILES</h3>
\t\t\t\t\t\t<div class=\"col-sm-10 text-right\"><a class=\"btn btn-success add-cssfile_url\" > <i class=\"fa fa-plus-circle\"></i> Add file</a></div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"panel-container\">
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" >Status </label>
\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t";
        // line 1160
        echo twig_get_attribute($this->env, $this->source, ($context["fields"] ?? null), "field_radio", [0 => "soconfig_custom_store", 1 => "cssfile_status", 2 => [1 => "ON", 0 => "OFF"]], "method", false, false, false, 1160);
        echo " 
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t
\t\t\t\t\t\t";
        // line 1164
        if ( !twig_test_empty(($context["cssfile_url"] ?? null))) {
            // line 1165
            echo "\t\t\t\t\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["cssfile_url"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["cssfile"]) {
                // line 1166
                echo "\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" >Enter file path</label>
\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t<input class=\"form-control\" type=\"text\" name=\"soconfig_custom_store[cssfile_url][]\" value=\"";
                // line 1169
                echo $context["cssfile"];
                echo "\" />
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-sm-1\">
\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-success remove_field\"><i class=\"fa fa-times\"></i></a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cssfile'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 1175
            echo "\t
\t\t\t\t\t\t";
        } else {
            // line 1176
            echo "\t
\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" >Enter file path</label>
\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t<input class=\"form-control\" type=\"text\" name=\"soconfig_custom_store[cssfile_url][]\" value=\"catalog/view/theme/";
            // line 1180
            echo ($context["theme_directory"] ?? null);
            echo "/css/custom.css\" />
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
        }
        // line 1184
        echo "\t\t\t\t\t\t
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>

            <div class=\"tab-pane\" id=\"tab-custom-layout3\">
\t\t\t\t<div class=\"so-panel\">
\t\t\t\t\t<h3 class=\"panel-title\">JS CODE DIRECT INPUT</h3>
\t\t\t\t\t<div class=\"panel-container\">
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" >Status </label>
\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t";
        // line 1196
        echo twig_get_attribute($this->env, $this->source, ($context["fields"] ?? null), "field_radio", [0 => "soconfig_custom_store", 1 => "jsinput_status", 2 => [1 => "ON", 0 => "OFF"]], "method", false, false, false, 1196);
        echo " 
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t";
        // line 1200
        echo twig_get_attribute($this->env, $this->source, ($context["fields"] ?? null), "field_textarea", [0 => "soconfig_custom_store", 1 => "jsinput_content"], "method", false, false, false, 1200);
        echo " 
\t\t\t\t\t\t</div>
\t\t\t\t\t\t
\t\t\t\t\t</div>
\t\t\t\t</div>
            </div>
           
        </div>
\t</div>
\t<!------------------------------------- End Tab Tab Advanced-->
\t
\t<!-------------------------------------Tab Tab Advanced-->
\t<div class=\"tab-pane\" id=\"tab-advanced\">
\t\t
\t\t<div class=\"so-panel\">
\t\t\t<h3 class=\"panel-title\">SCSS Compile</h3>
\t\t\t<div class=\"panel-container\">
\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t<label class=\"col-sm-2 control-label\" >SCSS Compile</label>
\t\t\t\t\t<div class=\"col-sm-2\">
\t\t\t\t\t\t";
        // line 1220
        echo twig_get_attribute($this->env, $this->source, ($context["fields"] ?? null), "field_radio", [0 => "soconfig_advanced_store", 1 => "scsscompile", 2 => [1 => "ON", 0 => "OFF"], 3 => 0, 4 => "parent scsscompile"], "method", false, false, false, 1220);
        echo " 
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t<label class=\"col-sm-2 control-label\" >CSS Format</label>
\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t";
        // line 1226
        echo twig_get_attribute($this->env, $this->source, ($context["fields"] ?? null), "field_radio", [0 => "soconfig_advanced_store", 1 => "scssformat", 2 => ($context["Scssformat"] ?? null), 3 => "Nested", 4 => "child scsscompile"], "method", false, false, false, 1226);
        echo " 
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t<label class=\"col-sm-2 control-label\" >User Developer Compile Muti Color</label>
\t\t\t\t\t<div class=\"col-sm-2\">
\t\t\t\t\t\t";
        // line 1232
        echo twig_get_attribute($this->env, $this->source, ($context["fields"] ?? null), "field_radio", [0 => "soconfig_advanced_store", 1 => "compileMutiColor", 2 => [1 => "ON", 0 => "OFF"]], "method", false, false, false, 1232);
        echo " 
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t
\t\t<div class=\"so-panel col-sm-6\">
\t\t\t<h3 class=\"panel-title\">Performance</h3>
\t\t\t<div class=\"form-group\">
\t\t\t\t<label class=\"col-sm-4 control-label\">Show Minify CSS </label>
\t\t\t\t<div class=\"col-sm-8\">
\t\t\t\t\t";
        // line 1243
        echo twig_get_attribute($this->env, $this->source, ($context["fields"] ?? null), "field_radio", [0 => "soconfig_advanced_store", 1 => "cssminify", 2 => [1 => "ON", 0 => "OFF"]], "method", false, false, false, 1243);
        echo " \t\t\t\t\t
\t\t\t\t</div>
\t\t\t</div>

\t\t\t<!-- cssminify -->
\t\t\t<div id=\"tab-field-cssminify\" class=\"form-group\">
\t\t\t\t
\t\t\t\t<div class=\"col-sm-8\"  style=\"margin-bottom:15px\">
\t\t\t\t\t<a onclick=\"add_cssExclude();\" class=\"add-item-payment btn btn-info\"><i class=\"fa fa-plus-circle\" aria-hidden=\"true\"></i> Add file css</a>\t\t\t
\t\t\t\t</div>
\t\t\t\t<table class=\"bottom-bar\" id=\"listgroup-cssminify\">
\t\t\t\t\t<thead>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td class=\"first\" style=\"width: 40%;\" >Exclude file css</td>
\t\t\t\t\t\t\t<td style=\"width: 10%;\">Delete</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t</thead>

\t\t\t\t\t";
        // line 1261
        $context["listcss_row"] = 0;
        // line 1262
        echo "\t\t\t\t\t";
        if ((($context["cssExcludes"] ?? null) && (($context["cssExcludes"] ?? null) != ""))) {
            // line 1263
            echo "
\t\t\t\t\t  \t";
            // line 1264
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["cssExcludes"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["cssExclude"]) {
                // line 1265
                echo "\t\t\t\t\t\t  \t";
                if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, $context["cssExclude"], "namecss", [], "any", false, false, false, 1265))) {
                    // line 1266
                    echo "\t\t\t\t\t\t\t\t<tbody id=\"listcssExclude";
                    echo ($context["listcss_row"] ?? null);
                    echo "\">
\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t<td class=\"first\">
\t\t\t\t\t\t\t\t\t\t\t<input class=\"form-control\" type=\"text\" class=\"form-control\" value=\"";
                    // line 1269
                    echo twig_get_attribute($this->env, $this->source, $context["cssExclude"], "namecss", [], "any", false, false, false, 1269);
                    echo "\" name=\"soconfig_advanced_store[cssExclude][";
                    echo ($context["listcss_row"] ?? null);
                    echo "][namecss]\">
\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t<a onclick=\"\$('#listcssExclude";
                    // line 1272
                    echo ($context["listcss_row"] ?? null);
                    echo "').remove();\" class=\"btn btn-danger\">Remove</a>
\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t";
                    // line 1276
                    $context["listcss_row"] = (($context["listcss_row"] ?? null) + 1);
                    // line 1277
                    echo "\t\t\t\t\t\t\t";
                }
                // line 1278
                echo "\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cssExclude'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo "\t
\t\t\t\t\t";
        }
        // line 1280
        echo "\t\t\t\t\t<tfoot></tfoot>
\t\t\t\t</table>

\t\t\t\t
\t\t\t\t<script type=\"text/javascript\">
\t\t\t\tvar listcss_row = ";
        // line 1285
        echo ($context["listcss_row"] ?? null);
        echo " ;
\t\t\t\tvar languages = ";
        // line 1286
        echo json_encode(($context["languages"] ?? null));
        echo " ;
\t\t\t\t
\t\t\t\tfunction add_cssExclude() {

\t\t\t\t\thtml  = '<tbody id=\"listcssExclude' + listcss_row + '\">';
\t\t\t\t\thtml += '  <tr>';
\t\t\t\t\thtml += '    <td>';
\t\t\t\t\thtml += '\t\t<input class=\"form-control\" type=\"text\" value=\"catalog/view/javascript/font-awesome/css/font-awesome.min.css\" name=\"soconfig_advanced_store[cssExclude][' + listcss_row + '][namecss]\">';
\t\t\t\t\thtml += '    </td>';
\t\t\t\t\thtml += '    <td><a onclick=\"\$(\\'#listcssExclude' + listcss_row + '\\').remove();\" class=\"btn btn-danger\">Remove</a></td>';
\t\t\t\t\thtml += '  </tr>';
\t\t\t\t\thtml += '</tbody>';
\t\t\t\t\t
\t\t\t\t\t\$('#listgroup-cssminify tfoot').before(html);
\t\t\t\t\tlistcss_row++;
\t\t\t\t}
\t\t\t\t</script> 
\t\t\t</div>
\t\t\t<!--  END cssminify -->
\t\t\t<div class=\"form-group\" style=\"padding:0;border:none;\">
\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t<a href=\"";
        // line 1307
        echo ($context["clear_cache"] ?? null);
        echo "\"><button class=\"btn btn-warning\" type=\"button\"><i class=\"fa fa-eraser\"></i> Clear Minify</button></a>
\t\t\t\t\t<span style=\"margin:0 10px;\">Delete all of the theme css, js file path: system/library/so/cache/minify</span>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t<div class=\"so-panel col-sm-6\">
\t\t\t
\t\t\t<div class=\"form-group\" style=\"margin-top: 15px;\">
\t\t\t\t<label class=\"col-sm-4 control-label\">Show Minify JS</label>
\t\t\t\t<div class=\"col-sm-8\">
\t\t\t\t\t";
        // line 1317
        echo twig_get_attribute($this->env, $this->source, ($context["fields"] ?? null), "field_radio", [0 => "soconfig_advanced_store", 1 => "jsminify", 2 => [1 => "ON", 0 => "OFF"]], "method", false, false, false, 1317);
        echo " \t\t\t\t\t\t\t
\t\t\t\t</div>
\t\t\t</div>

\t\t\t<!-- jsminify -->
\t\t\t<div id=\"tab-field-jsminify\" class=\"form-group\">
\t\t\t\t<div class=\"col-sm-8 \"  style=\"margin-bottom:15px\">
\t\t\t\t\t<a onclick=\"add_jsExclude();\" class=\"add-item-payment btn btn-info\"><i class=\"fa fa-plus-circle\" aria-hidden=\"true\"></i> Add file JS</a>\t\t\t
\t\t\t\t</div>
\t\t\t\t<table class=\"bottom-bar\" id=\"listgroup-jsminify\">
\t\t\t\t\t<thead>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td class=\"first\" style=\"width: 40%;\" >Exclude file Javascript</td>
\t\t\t\t\t\t\t<td style=\"width: 10%;\">Delete</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t</thead>

\t\t\t\t\t";
        // line 1334
        $context["listjs_row"] = 0;
        // line 1335
        echo "\t\t\t\t\t";
        if ((($context["jsExcludes"] ?? null) && (($context["jsExcludes"] ?? null) != ""))) {
            // line 1336
            echo "\t\t\t\t\t\t
\t\t\t\t\t  \t";
            // line 1337
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["jsExcludes"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["jsExclude"]) {
                // line 1338
                echo "\t\t\t\t\t\t  \t";
                if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, $context["jsExclude"], "namecss", [], "any", false, false, false, 1338))) {
                    // line 1339
                    echo "\t\t\t\t\t\t\t\t<tbody id=\"listjsExclude";
                    echo ($context["listjs_row"] ?? null);
                    echo "\">
\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t<td class=\"first\">
\t\t\t\t\t\t\t\t\t\t\t<input class=\"form-control\" type=\"text\" class=\"form-control\" value=\"";
                    // line 1342
                    echo twig_get_attribute($this->env, $this->source, $context["jsExclude"], "namecss", [], "any", false, false, false, 1342);
                    echo "\" name=\"soconfig_advanced_store[jsExclude][";
                    echo ($context["listjs_row"] ?? null);
                    echo "][namecss]\">
\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t<a onclick=\"\$('#listjsExclude";
                    // line 1346
                    echo ($context["listjs_row"] ?? null);
                    echo "').remove();\" class=\"btn btn-danger\">Remove</a>
\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t";
                    // line 1350
                    $context["listjs_row"] = (($context["listjs_row"] ?? null) + 1);
                    // line 1351
                    echo "\t\t\t\t\t\t\t";
                }
                // line 1352
                echo "\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['jsExclude'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo "\t
\t\t\t\t\t";
        }
        // line 1354
        echo "\t\t\t\t\t<tfoot></tfoot>
\t\t\t\t</table>

\t\t\t\t
\t\t\t\t<script type=\"text/javascript\">
\t\t\t\tvar listjs_row = ";
        // line 1359
        echo ($context["listjs_row"] ?? null);
        echo " ;
\t\t\t\t
\t\t\t\tfunction add_jsExclude() {

\t\t\t\t\thtml  = '<tbody id=\"listjsExclude' + listjs_row + '\">';
\t\t\t\t\thtml += '  <tr>';
\t\t\t\t\thtml += '    <td>';
\t\t\t\t\thtml += '\t\t<input class=\"form-control\" type=\"text\" value=\"catalog/view/javascript/jquery/datetimepicker/moment/moment-with-locales.min.js\" name=\"soconfig_advanced_store[jsExclude][' + listjs_row + '][namecss]\">';
\t\t\t\t\thtml += '    </td>';
\t\t\t\t\thtml += '    <td><a onclick=\"\$(\\'#listjsExclude' + listjs_row + '\\').remove();\" class=\"btn btn-danger\">Remove</a></td>';
\t\t\t\t\thtml += '  </tr>';
\t\t\t\t\thtml += '</tbody>';
\t\t\t\t\t
\t\t\t\t\t\$('#listgroup-jsminify tfoot').before(html);
\t\t\t\t\tlistjs_row++;
\t\t\t\t}
\t\t\t\t</script> 
\t\t\t</div>
\t\t\t<!--  END jsminify -->
\t\t</div>
\t\t
\t</div>
\t<!-------------------------------------End Tab Advanced-->
\t
\t
</div>
";
    }

    public function getTemplateName()
    {
        return "extension/soconfig/options_stores.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1897 => 1359,  1890 => 1354,  1881 => 1352,  1878 => 1351,  1876 => 1350,  1869 => 1346,  1860 => 1342,  1853 => 1339,  1850 => 1338,  1846 => 1337,  1843 => 1336,  1840 => 1335,  1838 => 1334,  1818 => 1317,  1805 => 1307,  1781 => 1286,  1777 => 1285,  1770 => 1280,  1761 => 1278,  1758 => 1277,  1756 => 1276,  1749 => 1272,  1741 => 1269,  1734 => 1266,  1731 => 1265,  1727 => 1264,  1724 => 1263,  1721 => 1262,  1719 => 1261,  1698 => 1243,  1684 => 1232,  1675 => 1226,  1666 => 1220,  1643 => 1200,  1636 => 1196,  1622 => 1184,  1615 => 1180,  1609 => 1176,  1605 => 1175,  1592 => 1169,  1587 => 1166,  1582 => 1165,  1580 => 1164,  1573 => 1160,  1552 => 1142,  1545 => 1138,  1530 => 1126,  1526 => 1125,  1522 => 1124,  1508 => 1113,  1498 => 1106,  1483 => 1094,  1472 => 1086,  1452 => 1069,  1441 => 1061,  1424 => 1047,  1400 => 1026,  1392 => 1021,  1388 => 1020,  1383 => 1018,  1376 => 1014,  1372 => 1013,  1367 => 1011,  1361 => 1008,  1356 => 1006,  1350 => 1003,  1341 => 997,  1333 => 992,  1329 => 991,  1324 => 989,  1317 => 985,  1313 => 984,  1308 => 982,  1302 => 979,  1297 => 977,  1291 => 974,  1282 => 968,  1274 => 963,  1270 => 962,  1265 => 960,  1258 => 956,  1254 => 955,  1249 => 953,  1243 => 950,  1238 => 948,  1232 => 945,  1210 => 926,  1201 => 920,  1192 => 914,  1183 => 908,  1159 => 887,  1147 => 878,  1133 => 867,  1123 => 860,  1107 => 847,  1097 => 840,  1088 => 834,  1077 => 826,  1067 => 819,  1055 => 810,  1043 => 801,  1032 => 793,  1028 => 792,  1012 => 779,  993 => 763,  981 => 754,  969 => 745,  957 => 736,  945 => 727,  925 => 710,  915 => 703,  906 => 697,  897 => 691,  885 => 682,  874 => 674,  862 => 665,  843 => 649,  837 => 646,  828 => 640,  823 => 638,  816 => 634,  811 => 632,  804 => 628,  798 => 625,  778 => 608,  773 => 606,  766 => 602,  761 => 600,  754 => 596,  749 => 594,  734 => 582,  730 => 581,  726 => 580,  705 => 562,  692 => 552,  675 => 538,  659 => 525,  656 => 524,  641 => 522,  637 => 521,  626 => 513,  612 => 502,  580 => 473,  568 => 463,  559 => 456,  548 => 447,  537 => 438,  526 => 429,  515 => 419,  509 => 417,  507 => 416,  501 => 413,  496 => 411,  487 => 405,  474 => 395,  463 => 387,  450 => 377,  435 => 365,  425 => 358,  419 => 354,  413 => 332,  407 => 329,  397 => 322,  391 => 319,  368 => 299,  357 => 291,  333 => 269,  327 => 266,  325 => 265,  321 => 264,  297 => 242,  284 => 233,  279 => 230,  273 => 228,  271 => 227,  261 => 224,  254 => 220,  246 => 215,  223 => 195,  212 => 186,  204 => 180,  200 => 179,  196 => 178,  185 => 170,  181 => 169,  177 => 168,  173 => 167,  169 => 166,  165 => 165,  161 => 164,  156 => 161,  149 => 158,  146 => 157,  143 => 156,  139 => 155,  137 => 154,  134 => 153,  132 => 146,  129 => 145,  127 => 131,  124 => 130,  122 => 126,  119 => 125,  117 => 117,  114 => 116,  112 => 111,  109 => 110,  107 => 106,  104 => 105,  102 => 100,  99 => 99,  97 => 94,  94 => 93,  92 => 86,  89 => 85,  87 => 81,  84 => 80,  82 => 76,  79 => 75,  77 => 71,  74 => 70,  72 => 65,  69 => 64,  67 => 57,  64 => 56,  62 => 50,  59 => 49,  57 => 32,  54 => 31,  52 => 26,  49 => 25,  47 => 19,  44 => 18,  42 => 7,  39 => 6,  37 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("", "extension/soconfig/options_stores.twig", "/home/azhkhn/public_html/protidin.com.bd/admin/view/template/extension/soconfig/options_stores.twig");
    }
}
