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

/* extension/soconfig/soconfig.twig */
class __TwigTemplate_9794d1f7c89d0a958a6a2ab149734bff8e86bda9a623ca8bf5b53e65ee136f93 extends \Twig\Template
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
        echo ($context["header"] ?? null);
        echo " ";
        echo ($context["column_left"] ?? null);
        echo " 

<div id=\"content\">
    <div class=\"page-header\" style=\"border:none\">    </div>

    <div id=\"theme-options\" class=\"container-fluid\">

         ";
        // line 8
        if (twig_get_attribute($this->env, $this->source, ($context["error"] ?? null), "warning", [], "any", false, false, false, 8)) {
            // line 9
            echo "        <div class=\"alert alert-danger\"><i class=\"fa fa-exclamation-circle\"></i> ";
            echo twig_get_attribute($this->env, $this->source, ($context["error"] ?? null), "warning", [], "any", false, false, false, 9);
            echo "
            <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
        </div>
        ";
        }
        // line 12
        echo " 
\t\t
        ";
        // line 14
        if ((($context["success"] ?? null) && ($context["success"] ?? null))) {
            echo " 
        <div class=\"alert alert-success\"><i class=\"fa fa-check-circle\"></i> ";
            // line 15
            echo ($context["success"] ?? null);
            echo " 
            <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
        </div>
        ";
        }
        // line 18
        echo " 

        <div class=\"panel \">
\t\t\t<div class=\"content\">
\t\t\t\t<div class=\"panel-heading\">
\t\t\t\t\t
\t\t\t\t\t<div class=\"col-sm-4\">
\t\t\t\t\t\t<div class=\"btn-group\">
\t\t\t\t\t\t\t";
        // line 26
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["stores"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["store"]) {
            echo "  
\t\t\t\t\t\t\t\t";
            // line 27
            if ((twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 27) == ($context["active_store"] ?? null))) {
                // line 28
                echo "\t\t\t\t\t\t\t\t\t<a class=\"btn  dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\">";
                echo twig_get_attribute($this->env, $this->source, $context["store"], "name", [], "any", false, false, false, 28);
                echo " <span class=\"fa fa-angle-down\"></span></a>
\t\t\t\t\t\t\t\t";
            }
            // line 30
            echo "\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['store'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo " 
\t\t\t\t\t\t\t<span class=\"label label-primary\">";
        // line 31
        echo ($context["theme_version"] ?? null);
        echo "</span>
\t\t\t\t\t\t\t<ul class=\"dropdown-menu store_dropdown\">
\t\t\t\t\t\t\t\t";
        // line 33
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["stores"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["store"]) {
            echo "  
\t\t\t\t\t\t\t\t\t";
            // line 34
            $context["store_active"] = (((twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 34) == ($context["active_store"] ?? null))) ? ("active") : (""));
            // line 35
            echo "\t\t\t\t\t\t\t\t\t";
            if (twig_get_attribute($this->env, $this->source, $context["store"], "status", [], "any", false, false, false, 35)) {
                // line 36
                echo "\t\t\t\t\t\t\t\t\t<li class=\"";
                echo ($context["store_active"] ?? null);
                echo "\" ><a href=\"";
                echo ($context["base_href"] ?? null);
                echo "&store_id=";
                echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 36);
                echo "\" >";
                echo twig_get_attribute($this->env, $this->source, $context["store"], "name", [], "any", false, false, false, 36);
                echo " </a></li>
\t\t\t\t\t\t\t\t\t";
            }
            // line 38
            echo "\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['store'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo " 
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t   </div>

\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-sm-7 text-right\">
\t\t\t\t\t\t";
        // line 44
        if (($context["status_product_option"] ?? null)) {
            // line 45
            echo "\t\t\t\t\t\t\t<a href=\"";
            echo ($context["href_product"] ?? null);
            echo "\"><button class=\"btn btn-primary\" type=\"button\"><i class=\"fa fa-file-text\"></i> Product Feature</button></a>
\t\t\t\t\t\t";
        } else {
            // line 47
            echo "\t\t\t\t\t\t\t<a href=\"";
            echo ($context["add_db_product"] ?? null);
            echo "\"><button class=\"btn btn btn-success create-feature\" type=\"button\"><i class=\"fa fa-wrench\"></i> Create Product Feature</button></a>
\t\t\t\t\t\t";
        }
        // line 49
        echo "\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-sm-1\">
\t\t\t\t\t\t<div class=\"pull-right\">
\t\t\t\t\t\t\t<a onclick=\"buttonApply();\" data-toggle=\"tooltip\" title=\"Apply Changes\" class=\"btn btn-success\"><i class=\"fa fa-save\"></i></a>
\t\t\t\t\t\t\t<a href=\"";
        // line 53
        echo ($context["cancel"] ?? null);
        echo " \" data-toggle=\"tooltip\" title=\"";
        echo ($context["button_cancel"] ?? null);
        echo " \" class=\"btn btn-default\"><i class=\"fa fa-close\"></i></a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
            </div>
            
\t\t\t<div class=\"content\">
\t\t\t\t<div class=\"panel-body\">
\t\t\t\t\t<form name=\"settingsform\" action=\"";
        // line 61
        echo ($context["action"] ?? null);
        echo " \" method=\"post\" enctype=\"multipart/form-data\" id=\"form-optimus\" class=\"form-horizontal\">
\t\t\t\t\t\t<div class=\"form-horizontal\">
\t\t\t\t\t\t\t<div class=\"tab-content tab-content-main\">
\t\t\t\t\t\t\t\t";
        // line 64
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["stores"] ?? null));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["store"]) {
            echo "  
\t\t\t\t\t\t\t\t";
            // line 65
            $context["store_active"] = (((twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 65) == 0)) ? ("active") : (""));
            // line 66
            echo "\t\t\t\t\t\t\t\t\t";
            if ((twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 66) == ($context["active_store"] ?? null))) {
                // line 67
                echo "\t\t\t\t\t\t\t\t\t<div class=\"clearfix tab-pane-demo\" id=\"tab-store\" data-sticky_parent>
\t\t\t\t\t\t\t\t\t\t";
                // line 68
                $this->loadTemplate("extension/soconfig/options_stores.twig", "extension/soconfig/soconfig.twig", 68)->display(twig_array_merge($context, ["store" => $context["store"]]));
                // line 69
                echo "\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t";
            }
            // line 71
            echo "
\t\t\t\t\t\t\t\t";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['store'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 72
        echo " 
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</div>
\t\t\t\t\t\t<input name=\"buttonForm\" type=\"hidden\"  value=\"\" />
\t\t\t\t\t\t<input name=\"buttonColor\" type=\"hidden\"  value=\"\" />
\t\t\t\t\t</form>


\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"content-row clearfix\">
\t\t\t\t<div class=\"col-md-5\">
\t\t\t\t\t<div class=\"copyright-info\">
\t\t\t\t\t\tDesigned &amp; Developed with <i class=\"fa fa-heart\"></i> by <a href=\"http://www.opencartworks.com\" target=\"_blank\">Opencartworks</a>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div class=\"col-md-7\">
\t\t\t\t\t<div class=\"pagebuilder-links\">
\t\t\t\t\t\t<ul class=\"list-inline text-right\">
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a target=\"_blank\" href=\"http://www.opencartworks.com/forums\">Forum</a>
\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a target=\"_blank\" href=\"http://www.smartaddons.com/documentation/category/opencart/\">Documentation</a>
\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a target=\"_blank\" href=\"http://www.opencartworks.com/contact-us\">Support</a>
\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a target=\"_blank\" href=\"https://www.facebook.com/opencartworks\">Community</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t
\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>

        </div>

    </div>

</div>



<script type=\"text/javascript\"><!--
\$(document).ready(function(){
\t\t/*** Change ColorPicker ***/
\t\tChangeColor(\"#theme_color\");
\t\tChangeColor(\"#theme_bgcolor\");
\t\t
\t\t\$('#tab-general__headertype').on('click', '.type', function () {
\t\t   \$('#tab-general__headertype .type').removeClass(\"active\");
\t\t   \$(this).addClass(\"active\");
\t\t});
\t\t\$('#tab-general__footertype').on('click', '.type', function () {
\t\t   \$('#tab-general__footertype .type').removeClass(\"active\");
\t\t   \$(this).addClass(\"active\");
\t\t});

\t\t\$('#tab-general__layouttype').on('click', '.applyLayout', function () {
\t\t\t if (confirm('Are you sure you want to apply default setting')) {
\t\t\t\t\$keylayout = \$(this).data(\"keylayout\");
\t\t\t\t\$store_active =  ";
        // line 140
        echo ($context["active_store"] ?? null);
        echo ";
\t\t\t\t\$.ajax({
\t\t\t\t\turl: 'index.php?route=extension/module/soconfig/applyBaseLayout&user_token=";
        // line 142
        echo ($context["user_token"] ?? null);
        echo "&keylayout='+\$keylayout+'&store_id='+ \$store_active ,
\t\t\t\t\tdataType: 'json',
\t\t\t\t\tsuccess: function(json) {
\t\t\t\t\t\tlocation.reload();
\t\t\t\t\t},
\t\t\t\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\t\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t\t\t\t}
\t\t\t\t});
\t\t\t}
\t\t});

\t\t\$('#tab-general__layouttype').on('click', '.type', function () {
\t\t\tif (!\$(this).hasClass(\"active\")){
\t\t\t    \$('#tab-general__layouttype .type').removeClass(\"active\");
\t\t\t    \$(this).addClass(\"active\");
\t\t\t\t\$keylayout = \$(this).data(\"keylayout\");
\t\t\t\t\$keyheader = \$(this).data(\"keyheader\");
\t\t\t\t\$keyfooter = \$(this).data(\"keyfooter\");
\t\t\t\t\$store_active =  ";
        // line 161
        echo ($context["active_store"] ?? null);
        echo ";
\t\t\t\t
\t\t\t\t\$(\"#tab-general__headertype .group-typeheader\").each(function() {
\t\t\t\t    \$(this).find(\".type\").removeClass(\"active\");
\t\t\t\t\t\$(this).find(\"input:radio\").prop(\"checked\", false);
\t\t\t\t    if( \$keyheader ==  \$(this).find(\".type\").data(\"typeheader\")) {
\t\t\t\t\t\t\$(this).find(\".type\").addClass(\"active\");
\t\t\t\t\t\t\$(this).find(\".type\").prev().prop(\"checked\", true);
\t\t\t\t    }
\t\t\t\t});
\t\t\t\t\$(\"#tab-general__footertype .group-typeheader\").each(function() {
\t\t\t\t    \$(this).find(\".type\").removeClass(\"active\");
\t\t\t\t\t\$(this).find(\"input:radio\").prop(\"checked\", false);
\t\t\t\t\t
\t\t\t\t    if(\$keyfooter ==  \$(this).find(\".type\").data(\"typefooter\")) {
\t\t\t\t\t\t\$(this).find(\".type\").addClass(\"active\");
\t\t\t\t\t\t\$(this).find(\".type\").prev().prop(\"checked\", true);
\t\t\t\t    }
\t\t\t\t});
\t\t\t\t
\t\t\t\tvar \$currentcolor = \$(\"#select_color option\").filter(\":selected\").val();
\t\t\t\t\$.ajax({
\t\t\t\t\turl: 'index.php?route=extension/module/soconfig/ColorScheme&user_token=";
        // line 183
        echo ($context["user_token"] ?? null);
        echo "&keylayout='+\$keylayout+'&store_id='+ \$store_active ,
\t\t\t\t\tdataType: 'json',
\t\t\t\t\tsuccess: function(json) {
\t\t\t\t\t\t\$.map(json, function(item) {
\t\t\t\t\t\t\tvar selectList = \"<select name='numbers'>\";
\t\t\t\t\t\t\t\$.each(json, function (index, value) {
\t\t\t\t\t\t\t\t(\$currentcolor == value['name']) ? \$current = 'selected' : \$current=''; 
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\tselectList += \"<option \"+\$current+\">\" + value['name'] + \"</option>\";
\t\t\t\t\t\t\t});
\t\t\t\t\t\t\tselectList += \"</select>\";
\t\t\t\t\t\t\t\$select_id = \$('#select_color select');
\t\t\t\t\t\t\t\$select_id.html(selectList);
\t\t\t\t\t\t});
\t\t\t\t\t\t
\t\t\t\t\t},
\t\t\t\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\t\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t\t\t\t}
\t\t\t\t});
\t\t\t
\t\t\t}
\t\t});
\t\t
\t\t\$('#tab-general__bannereffect').on('click', '.type', function () {
\t\t   \$('#tab-general__bannereffect .type').removeClass(\"active\");
\t\t   \$(this).addClass(\"active\");
\t\t});
\t\t
\t\t
\t\t/*Button Radio On/Off*/
\t\tBtnToggle(\".field-phone_status\");
\t\tBtnToggle(\".field-welcome_message_status\");
\t\tBtnToggle(\".field-social_header_status\");
\t\tBtnToggle(\".field-link_header_status\");
\t\tBtnToggle(\".field-imgpayment_status\");
\t\tBtnToggle(\".field-product_page_button\");
   \t\tBtnToggle(\".field-product_enableshipping\");
    \tBtnToggle(\".field-related_status\");
    \tBtnToggle(\".field-social_custom_status\");
\t\tBtnToggle(\".field-cssminify\");
\t\tBtnToggle(\".field-jsminify\");

\t\t/* datetimepicker*/
\t\t\$('.date').datetimepicker({
\t\t\tlanguage: document.cookie.match(new RegExp('language=([^;]+)'))[0],
\t\t\tpickTime: false
\t\t});

\t\t/* create a dialog with “yes” and “no” options*/
\t\t\$(\".create-feature\").click(function(e){
\t       var action = confirm(\"Are you sure you want to add field (video, tab_title, html_product_tab) for table product_description\");

\t       /*cancel clicked : stop button default action */
\t       if (action === false) {return false; }

\t       /*action continues, saves in database, no need for more code*/


\t   });
});


function buttonApply() {document.settingsform.buttonForm.value='apply'; \$('#form-optimus').submit();}
function buttonApplyColor() {document.settingsform.buttonForm.value='color';\$('#form-optimus').submit();}

function BtnToggle(class_name) {
\tvar \$checkedValue = \$(class_name).filter(':checked').val();
\tif (\$checkedValue == 1) \$('#tab-'+\$(class_name).attr('class')).show();
\telse \$('#tab-'+\$(class_name).attr('class')).hide();
\t
\t\$(class_name).change(function(){
\t\tval = \$(this).val();
\t\tif(val ==1 ) {\$('#tab-'+\$(this).attr('class')).show(); }
\t\telse{\$('#tab-'+\$(this).attr('class')).hide();} 
\t});
}


function ChangeColor(class_name) {
\t\$(class_name).ColorPicker({
\t\t
\t\tcolor: \$(class_name).val(),
\t\tonShow: function (colpkr) {
\t\t\t\$(colpkr).fadeIn(500);
\t\t\treturn false;
\t\t},
\t\tonHide: function (colpkr) {
\t\t\t\$(colpkr).fadeOut(500);
\t\t\treturn false;
\t\t},
\t\tonChange: function (hsb, hex, rgb) {
\t\t\t\$(class_name).css('backgroundColor', '#' + hex);
\t\t\t\$(class_name).val('#' + hex);
\t\t}
\t});
}

//--></script>

";
        // line 283
        echo ($context["footer"] ?? null);
        echo " ";
    }

    public function getTemplateName()
    {
        return "extension/soconfig/soconfig.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  459 => 283,  356 => 183,  331 => 161,  309 => 142,  304 => 140,  234 => 72,  219 => 71,  215 => 69,  213 => 68,  210 => 67,  207 => 66,  205 => 65,  186 => 64,  180 => 61,  167 => 53,  161 => 49,  155 => 47,  149 => 45,  147 => 44,  134 => 38,  122 => 36,  119 => 35,  117 => 34,  111 => 33,  106 => 31,  98 => 30,  92 => 28,  90 => 27,  84 => 26,  74 => 18,  67 => 15,  63 => 14,  59 => 12,  51 => 9,  49 => 8,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "extension/soconfig/soconfig.twig", "");
    }
}
