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

/* so-mobile/template/extension/module/so_searchpro/default.twig */
class __TwigTemplate_507210ffcf1dfb60bea15214b963e5c69ef318b6fb5c43ddda3e25e5629d263b extends \Twig\Template
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
<div id=\"sosearchpro\" class=\"sosearchpro-wrapper ";
        // line 2
        echo ($context["additional_class"] ?? null);
        echo " \">
\t";
        // line 3
        if (($context["disp_title_module"] ?? null)) {
            echo " 
\t\t<h3>";
            // line 4
            echo ($context["head_name"] ?? null);
            echo " </h3>
\t";
        }
        // line 5
        echo " 
\t
\t<form method=\"GET\" action=\"index.php\">
\t\t<div id=\"search";
        // line 8
        echo ($context["module"] ?? null);
        echo "\" class=\"search input-group form-group\">
\t\t\t";
        // line 9
        if (($context["categories"] ?? null)) {
            echo " 
\t\t\t<div class=\"select_category filter_type  icon-select\">
\t\t\t\t<select class=\"no-border\" name=\"category_id\">
\t\t\t\t\t<option value=\"0\">";
            // line 12
            echo ($context["text_category_all"] ?? null);
            echo " </option>
\t\t\t\t\t";
            // line 13
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["categories"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                echo " 
\t\t\t\t\t\t
\t\t\t\t\t\t";
                // line 15
                if ((twig_get_attribute($this->env, $this->source, $context["category"], "category_id", [], "any", false, false, false, 15) == ($context["category_id"] ?? null))) {
                    echo " 
\t\t\t\t\t\t\t<option value=\"";
                    // line 16
                    echo twig_get_attribute($this->env, $this->source, $context["category"], "category_id", [], "any", false, false, false, 16);
                    echo " \" selected=\"selected\">";
                    echo twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 16);
                    echo " </option>
\t\t\t\t\t\t";
                } else {
                    // line 17
                    echo "   
\t\t\t\t\t\t\t<option value=\"";
                    // line 18
                    echo twig_get_attribute($this->env, $this->source, $context["category"], "category_id", [], "any", false, false, false, 18);
                    echo " \">";
                    echo twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 18);
                    echo " </option>
\t\t\t\t\t\t";
                }
                // line 19
                echo " 
\t\t\t\t\t\t
\t\t\t\t\t\t";
                // line 21
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["category"], "children", [], "any", false, false, false, 21));
                foreach ($context['_seq'] as $context["_key"] => $context["category_lv2"]) {
                    echo " 
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t";
                    // line 23
                    if ((twig_get_attribute($this->env, $this->source, $context["category_lv2"], "category_id", [], "any", false, false, false, 23) == ($context["category_id"] ?? null))) {
                        echo " 
\t\t\t\t\t\t\t\t<option value=\"";
                        // line 24
                        echo twig_get_attribute($this->env, $this->source, $context["category_lv2"], "category_id", [], "any", false, false, false, 24);
                        echo " \" selected=\"selected\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; ";
                        echo twig_get_attribute($this->env, $this->source, $context["category_lv2"], "name", [], "any", false, false, false, 24);
                        echo " </option>
\t\t\t\t\t\t\t";
                    } else {
                        // line 25
                        echo "   
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<option value=\"";
                        // line 27
                        echo twig_get_attribute($this->env, $this->source, $context["category_lv2"], "category_id", [], "any", false, false, false, 27);
                        echo "\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; ";
                        echo twig_get_attribute($this->env, $this->source, $context["category_lv2"], "name", [], "any", false, false, false, 27);
                        echo " </option>
\t\t\t\t\t\t\t";
                    }
                    // line 28
                    echo " 
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t";
                    // line 30
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["category_lv2"], "children", [], "any", false, false, false, 30));
                    foreach ($context['_seq'] as $context["_key"] => $context["category_lv3"]) {
                        echo " 
\t\t\t\t\t\t\t\t";
                        // line 31
                        if ((twig_get_attribute($this->env, $this->source, $context["category_lv3"], "category_id", [], "any", false, false, false, 31) == ($context["category_id"] ?? null))) {
                            echo " 
\t\t\t\t\t\t\t\t\t<option value=\"";
                            // line 32
                            echo twig_get_attribute($this->env, $this->source, $context["category_lv3"], "category_id", [], "any", false, false, false, 32);
                            echo " \" selected=\"selected\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
                            echo twig_get_attribute($this->env, $this->source, $context["category_lv3"], "name", [], "any", false, false, false, 32);
                            echo " </option>
\t\t\t\t\t\t\t\t";
                        } else {
                            // line 33
                            echo "   
\t\t\t\t\t\t\t\t\t<option value=\"";
                            // line 34
                            echo twig_get_attribute($this->env, $this->source, $context["category_lv3"], "category_id", [], "any", false, false, false, 34);
                            echo " \">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
                            echo twig_get_attribute($this->env, $this->source, $context["category_lv3"], "name", [], "any", false, false, false, 34);
                            echo " </option>
\t\t\t\t\t\t\t\t";
                        }
                        // line 35
                        echo " 
\t\t\t\t\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category_lv3'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 37
                    echo "\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category_lv2'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 38
                echo "\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 39
            echo "\t\t\t\t</select>
\t\t\t</div>
\t\t\t";
        }
        // line 41
        echo "  
\t\t\t<input class=\"autosearch-input form-control\" type=\"text\" value=\"\" size=\"50\" autocomplete=\"off\" placeholder=\"";
        // line 42
        echo ($context["text_search"] ?? null);
        echo "\" name=\"search\">
\t\t\t<span class=\"input-group-btn\">
\t\t\t\t<button type=\"submit\" class=\"button-search btn btn-default btn-lg\" name=\"submit_search\"><i class=\"fa fa-search\"></i></button>
\t\t\t</span>
\t\t</div>

\t\t";
        // line 48
        if (($context["show_keyword"] ?? null)) {
            echo " 
\t\t<div class=\"text-keyword hidden-sm hidden-md hidden-xs\">
\t\t\t<span class=\"title-key\"><b>";
            // line 50
            echo ($context["str_keyword"] ?? null);
            echo " :</b></span>
\t\t\t
\t\t\t<span class=\"item-key\">
\t\t\t\t";
            // line 53
            $context["dem"] = 0;
            // line 54
            echo "\t\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["list_products"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 55
                echo "\t\t\t\t\t";
                $context["dem"] = (($context["dem"] ?? null) + 1);
                // line 56
                echo "\t\t\t\t\t<a href=\"";
                echo twig_get_attribute($this->env, $this->source, $context["item"], "href", [], "any", false, false, false, 56);
                echo "\" target=\"_blank\" title=\"";
                echo twig_get_attribute($this->env, $this->source, $context["item"], "nameFull", [], "any", false, false, false, 56);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["item"], "name_maxlength", [], "any", false, false, false, 56);
                echo "</a> ";
                if ((($context["dem"] ?? null) < twig_length_filter($this->env, ($context["list_products"] ?? null)))) {
                    echo " | ";
                }
                echo "\t
\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 58
            echo "\t\t\t</span>
\t\t</div>
\t";
        }
        // line 61
        echo "
\t\t<input type=\"hidden\" name=\"route\" value=\"product/search\"/>
\t</form>
</div>

<script type=\"text/javascript\">
// Autocomplete */
(function(\$) {
\t\$.fn.Soautocomplete = function(option) {
\t\treturn this.each(function() {
\t\t\tthis.timer = null;
\t\t\tthis.items = new Array();

\t\t\t\$.extend(this, option);

\t\t\t\$(this).attr('autocomplete', 'off');

\t\t\t// Focus
\t\t\t\$(this).on('focus', function() {
\t\t\t\tthis.request();
\t\t\t});

\t\t\t// Blur
\t\t\t\$(this).on('blur', function() {
\t\t\t\tsetTimeout(function(object) {
\t\t\t\t\tobject.hide();
\t\t\t\t}, 200, this);
\t\t\t});

\t\t\t// Keydown
\t\t\t\$(this).on('keydown', function(event) {
\t\t\t\tswitch(event.keyCode) {
\t\t\t\t\tcase 27: // escape
\t\t\t\t\t\tthis.hide();
\t\t\t\t\t\tbreak;
\t\t\t\t\tdefault:
\t\t\t\t\t\tthis.request();
\t\t\t\t\t\tbreak;
\t\t\t\t}
\t\t\t});

\t\t\t// Click
\t\t\tthis.click = function(event) {
\t\t\t\tevent.preventDefault();

\t\t\t\tvalue = \$(event.target).parent().attr('data-value');

\t\t\t\tif (value && this.items[value]) {
\t\t\t\t\tthis.select(this.items[value]);
\t\t\t\t}
\t\t\t}

\t\t\t// Show
\t\t\tthis.show = function() {
\t\t\t\tvar pos = \$(this).position();

\t\t\t\t\$(this).siblings('ul.dropdown-menu').css({
\t\t\t\t\ttop: pos.top + \$(this).outerHeight(),
\t\t\t\t\tleft: pos.left
\t\t\t\t});

\t\t\t\t\$(this).siblings('ul.dropdown-menu').show();
\t\t\t}

\t\t\t// Hide
\t\t\tthis.hide = function() {
\t\t\t\t\$(this).siblings('ul.dropdown-menu').hide();
\t\t\t}

\t\t\t// Request
\t\t\tthis.request = function() {
\t\t\t\tclearTimeout(this.timer);

\t\t\t\tthis.timer = setTimeout(function(object) {
\t\t\t\t\tobject.source(\$(object).val(), \$.proxy(object.response, object));
\t\t\t\t}, 200, this);
\t\t\t}

\t\t\t// Response
\t\t\tthis.response = function(json) {
\t\t\t\thtml = '';

\t\t\t\tif (json.length) {
\t\t\t\t\tfor (i = 0; i < json.length; i++) {
\t\t\t\t\t\tthis.items[json[i]['value']] = json[i];
\t\t\t\t\t}

\t\t\t\t\tfor (i = 0; i < json.length; i++) {
\t\t\t\t\t\tif (!json[i]['category']) {
\t\t\t\t\t\thtml += '<li class=\"media\" data-value=\"' + json[i]['value'] + '\" title=\"' + json[i]['label'] + '\">';
\t\t\t\t\t\tif(json[i]['image'] && json[i]['show_image'] && json[i]['show_image'] == 1 ) {
\t\t\t\t\t\t\thtml += '\t<a class=\"media-left\" href=\"' + json[i]['link'] + '\"><img class=\"pull-left\" src=\"' + json[i]['image'] + '\"></a>';
\t\t\t\t\t\t}

\t\t\t\t\t\thtml += '<div class=\"media-body\">';
\t\t\t\t\t\thtml += '<a href=\"' + json[i]['link'] + '\" title=\"' + json[i]['label'] + '\"><span>' +json[i]['cate_name'] + json[i]['label'] + '</span></a>';
\t\t\t\t\t\tif(json[i]['price'] && json[i]['show_price'] && json[i]['show_price'] == 1){
\t\t\t\t\t\t\thtml += '\t<div class=\"box-price  price\">';
\t\t\t\t\t\t\tif (!json[i]['special']) {
\t\t\t\t\t\t\t\thtml += '<span class=\"price\">'+json[i]['price']+'</span>';;
\t\t\t\t\t\t\t} else {
\t\t\t\t\t\t\t\thtml += '</span><span class=\"price-new\">' + json[i]['special'] + '</span>'+'<span class=\"price-old\" style=\"text-decoration:line-through;\">' + json[i]['price']  ;
\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t
\t\t\t\t\t\t\thtml += '\t</div>';
\t\t\t\t\t\t}
\t\t\t\t\t\thtml += '</div></li>';
\t\t\t\t\t\thtml += '<li class=\"clearfix\"></li>';
\t\t\t\t\t\t}
\t\t\t\t\t}

\t\t\t\t\t// Get all the ones with a categories
\t\t\t\t\tvar category = new Array();

\t\t\t\t\tfor (i = 0; i < json.length; i++) {
\t\t\t\t\t\tif (json[i]['category']) {
\t\t\t\t\t\t\tif (!category[json[i]['category']]) {
\t\t\t\t\t\t\t\tcategory[json[i]['category']] = new Array();
\t\t\t\t\t\t\t\tcategory[json[i]['category']]['name'] = json[i]['category'];
\t\t\t\t\t\t\t\tcategory[json[i]['category']]['item'] = new Array();
\t\t\t\t\t\t\t}

\t\t\t\t\t\t\tcategory[json[i]['category']]['item'].push(json[i]);
\t\t\t\t\t\t}
\t\t\t\t\t}

\t\t\t\t\tfor (i in category) {
\t\t\t\t\t\thtml += '<li class=\"dropdown-header\">' + category[i]['name'] + '</li>';

\t\t\t\t\t\tfor (j = 0; j < category[i]['item'].length; j++) {
\t\t\t\t\t\t\thtml += '<li data-value=\"' + category[i]['item'][j]['value'] + '\"><a href=\"#\">&nbsp;&nbsp;&nbsp;' + category[i]['item'][j]['label'] + '</a></li>';
\t\t\t\t\t\t}
\t\t\t\t\t}
\t\t\t\t}

\t\t\t\tif (html) {
\t\t\t\t\tthis.show();
\t\t\t\t} else {
\t\t\t\t\tthis.hide();
\t\t\t\t}

\t\t\t\t\$(this).siblings('ul.dropdown-menu').html(html);
\t\t\t}

\t\t\t\$(this).after('<ul class=\"dropdown-menu\"></ul>');

\t\t});
\t}
})(window.jQuery);

\$(document).ready(function() {
\tvar selector = '#search";
        // line 212
        echo ($context["module"] ?? null);
        echo "';
\tvar total = 0;
\tvar showimage = ";
        // line 214
        echo ($context["showimage"] ?? null);
        echo ";
\tvar showprice = ";
        // line 215
        echo ($context["showprice"] ?? null);
        echo ";
\tvar character = ";
        // line 216
        echo ($context["character"] ?? null);
        echo ";
\tvar height = ";
        // line 217
        echo ($context["height"] ?? null);
        echo ";
\tvar width = ";
        // line 218
        echo ($context["width"] ?? null);
        echo ";

\t\$(selector).find('input[name=\\'search\\']').Soautocomplete({
\t\tdelay: 500,
\t\tsource: function(request, response) {
\t\t\tvar category_id = \$(\".select_category select[name=\\\"category_id\\\"]\").first().val();
\t\t\tif(typeof(category_id) == 'undefined')
\t\t\t\tcategory_id = 0;
\t\t\t\tvar limit = ";
        // line 226
        echo ($context["limit"] ?? null);
        echo ";
\t\t\tif(request.length >= character){
\t\t\t\t\$.ajax({
\t\t\t\t\turl: 'index.php?route=extension/module/so_searchpro/autocomplete&filter_category_id='+category_id+'&limit='+limit+'&width='+width+'&height='+height+'&filter_name='+encodeURIComponent(request),
\t\t\t\t\tdataType: 'json',
\t\t\t\t\tsuccess: function(json) {
\t\t\t\t\t\tresponse(\$.map(json, function(item) {
\t\t\t\t\t\t\ttotal = 0;
\t\t\t\t\t\t\tif(item.total){
\t\t\t\t\t\t\t\ttotal = item.total;
\t\t\t\t\t\t\t}

\t\t\t\t\t\t\treturn {
\t\t\t\t\t\t\t\tprice:   item.price,
\t\t\t\t\t\t\t\tspecial: item.special,
\t\t\t\t\t\t\t\ttax\t\t:     item.tax,
\t\t\t\t\t\t\t\tlabel:   item.name,
\t\t\t\t\t\t\t\tcate_name:   (item.category_name) ? item.category_name + ' > ' : '',
\t\t\t\t\t\t\t\timage:   item.image,
\t\t\t\t\t\t\t\tlink:    item.link,
\t\t\t\t\t\t\t\tminimum:    item.minimum,
\t\t\t\t\t\t\t\tshow_price:  showprice,
\t\t\t\t\t\t\t\tshow_image:  showimage,
\t\t\t\t\t\t\t\tvalue:   item.product_id,
\t\t\t\t\t\t\t}
\t\t\t\t\t\t}));
\t\t\t\t\t}
\t\t\t\t});
\t\t\t}
\t\t},
\t});
});

</script>";
    }

    public function getTemplateName()
    {
        return "so-mobile/template/extension/module/so_searchpro/default.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  428 => 226,  417 => 218,  413 => 217,  409 => 216,  405 => 215,  401 => 214,  396 => 212,  243 => 61,  238 => 58,  221 => 56,  218 => 55,  213 => 54,  211 => 53,  205 => 50,  200 => 48,  191 => 42,  188 => 41,  183 => 39,  177 => 38,  171 => 37,  164 => 35,  157 => 34,  154 => 33,  147 => 32,  143 => 31,  137 => 30,  133 => 28,  126 => 27,  122 => 25,  115 => 24,  111 => 23,  104 => 21,  100 => 19,  93 => 18,  90 => 17,  83 => 16,  79 => 15,  72 => 13,  68 => 12,  62 => 9,  58 => 8,  53 => 5,  48 => 4,  44 => 3,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "so-mobile/template/extension/module/so_searchpro/default.twig", "/home/azhkhn/public_html/protidin.com.bd/catalog/view/theme/so-mobile/template/extension/module/so_searchpro/default.twig");
    }
}
