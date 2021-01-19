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

/* so-buyshop/template/extension/module/so_filter_shop_by/default.twig */
class __TwigTemplate_1d18a1a0fa2ebd9edfd65f6bcee81f29bdafd7b6bb08dd09c2b731d7ae54b7f1 extends \Twig\Template
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
        echo "<div class=\"module so_filter_wrap ";
        echo ($context["class_suffix"] ?? null);
        echo "\">
\t";
        // line 2
        if (($context["disp_title_module"] ?? null)) {
            // line 3
            echo "\t\t<h3 class=\"modtitle\">";
            echo ($context["head_name"] ?? null);
            echo "</h3>
\t";
        }
        // line 5
        echo "
\t<div class=\"modcontent\">
\t\t
\t\t<ul data-product_id = \"";
        // line 8
        echo ($context["products_arr_id"] ?? null);
        echo "\">
\t\t\t";
        // line 9
        if ((($context["disp_search_text"] ?? null) && (($context["products_arr_id"] ?? null) != ""))) {
            // line 10
            echo "\t\t\t\t";
            echo twig_include($this->env, $context, (($context["theme_config"] ?? null) . "/template/extension/module/so_filter_shop_by/default_search.twig"));
            echo "
\t\t\t";
        }
        // line 12
        echo "\t\t\t
\t\t\t";
        // line 13
        if ((((($context["disp_subcategory"] ?? null) && (($context["subcategory_all"] ?? null) != "")) && (twig_length_filter($this->env, ($context["subcategory_all"] ?? null)) > 0)) && (($context["products_arr_id"] ?? null) != ""))) {
            // line 14
            echo "\t\t\t\t";
            echo twig_include($this->env, $context, (($context["theme_config"] ?? null) . "/template/extension/module/so_filter_shop_by/default_subcategory.twig"));
            echo "
\t\t\t";
        }
        // line 16
        echo "
\t\t\t";
        // line 17
        if (((($context["disp_manu_all"] ?? null) && (($context["manufacturer_all"] ?? null) != "")) && (twig_length_filter($this->env, ($context["manufacturer_all"] ?? null)) > 0))) {
            // line 18
            echo "\t\t\t\t";
            echo twig_include($this->env, $context, (($context["theme_config"] ?? null) . "/template/extension/module/so_filter_shop_by/default_manufacturer.twig"));
            echo "
\t\t\t";
        }
        // line 20
        echo "
\t\t\t";
        // line 21
        if (((($context["options_all"] ?? null) != "") && (twig_length_filter($this->env, ($context["options_all"] ?? null)) > 0))) {
            // line 22
            echo "\t\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["options_all"] ?? null));
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
            foreach ($context['_seq'] as $context["item"] => $context["values"]) {
                // line 23
                echo "\t\t\t\t\t";
                $context["item"] = twig_split_filter($this->env, $context["item"], "_");
                // line 24
                echo "\t\t\t\t\t";
                if (((($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = $context["item"]) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4[1] ?? null) : null) == "image")) {
                    // line 25
                    echo "\t\t\t\t\t\t";
                    $context["disp_opt_id"] = ("disp_opt_id_" . (($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = $context["item"]) && is_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) || $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 instanceof ArrayAccess ? ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144[3] ?? null) : null));
                    // line 26
                    echo "\t\t\t\t\t\t";
                    if ((($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b = ($context["disp_options"] ?? null)) && is_array($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b) || $__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b instanceof ArrayAccess ? ($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b[($context["disp_opt_id"] ?? null)] ?? null) : null)) {
                        // line 27
                        echo "\t\t\t\t\t\t\t";
                        echo twig_include($this->env, $context, (($context["theme_config"] ?? null) . "/template/extension/module/so_filter_shop_by/default_color.twig"));
                        echo "
\t\t\t\t\t\t";
                    }
                    // line 29
                    echo "\t\t\t\t\t";
                } else {
                    // line 30
                    echo "\t\t\t\t\t\t";
                    $context["disp_opt_id"] = ("disp_opt_id_" . (($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 = $context["item"]) && is_array($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002) || $__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 instanceof ArrayAccess ? ($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002[3] ?? null) : null));
                    // line 31
                    echo "\t\t\t\t\t\t";
                    if ((($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 = ($context["disp_options"] ?? null)) && is_array($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4) || $__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 instanceof ArrayAccess ? ($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4[($context["disp_opt_id"] ?? null)] ?? null) : null)) {
                        // line 32
                        echo "\t\t\t\t\t\t\t";
                        echo twig_include($this->env, $context, (($context["theme_config"] ?? null) . "/template/extension/module/so_filter_shop_by/default_option.twig"));
                        echo "
\t\t\t\t\t\t";
                    }
                    // line 34
                    echo "\t\t\t\t\t";
                }
                // line 35
                echo "\t\t\t\t";
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
            unset($context['_seq'], $context['_iterated'], $context['item'], $context['values'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 36
            echo "\t\t\t";
        }
        // line 37
        echo "
\t\t\t";
        // line 38
        if (((($context["attribute_all"] ?? null) != "") && (twig_length_filter($this->env, ($context["attribute_all"] ?? null)) > 0))) {
            // line 39
            echo "\t\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["attribute_all"] ?? null));
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
            foreach ($context['_seq'] as $context["item"] => $context["values"]) {
                // line 40
                echo "\t\t\t\t\t";
                $context["item"] = twig_split_filter($this->env, $context["item"], "_");
                // line 41
                echo "\t\t\t\t\t";
                $context["disp_att_group_id"] = ("disp_att_group_id_" . (($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 = $context["item"]) && is_array($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666) || $__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 instanceof ArrayAccess ? ($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666[2] ?? null) : null));
                // line 42
                echo "\t\t\t\t\t";
                if ((($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e = ($context["disp_attributes_group"] ?? null)) && is_array($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e) || $__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e instanceof ArrayAccess ? ($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e[($context["disp_att_group_id"] ?? null)] ?? null) : null)) {
                    // line 43
                    echo "\t\t\t\t\t\t";
                    echo twig_include($this->env, $context, (($context["theme_config"] ?? null) . "/template/extension/module/so_filter_shop_by/default_attribute.twig"));
                    echo "
\t\t\t\t\t";
                }
                // line 45
                echo "\t\t\t\t";
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
            unset($context['_seq'], $context['_iterated'], $context['item'], $context['values'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 46
            echo "\t\t\t";
        }
        // line 47
        echo "
\t\t\t";
        // line 48
        if (((($context["disp_pro_price"] ?? null) && ((($context["minPrice"] ?? null) != 0) || (($context["maxPrice"] ?? null) != 0))) && (($context["minPrice"] ?? null) != ($context["maxPrice"] ?? null)))) {
            // line 49
            echo "\t\t\t\t";
            echo twig_include($this->env, $context, (($context["theme_config"] ?? null) . "/template/extension/module/so_filter_shop_by/default_product_price.twig"));
            echo "
\t\t\t";
        }
        // line 51
        echo "\t\t</ul>
\t\t";
        // line 52
        if ((($context["disp_reset_all"] ?? null) && (($context["products_arr_id"] ?? null) != ""))) {
            // line 53
            echo "\t\t\t<a href=\"javascript:;\" class=\"btn-block btn_resetAll\">
\t\t\t\t<span class=\"fa fa-times\" aria-hidden=\"true\"></span> ";
            // line 54
            echo twig_get_attribute($this->env, $this->source, ($context["obj_lang"] ?? null), "get", [0 => "text_reset_all"], "method", false, false, false, 54);
            echo "
\t\t\t</a>
\t\t";
        }
        // line 57
        echo "\t</div>
</div>
<script type=\"text/javascript\">
//<![CDATA[
jQuery(window).load(function(\$){
\t\$ = typeof(\$ !== 'funtion') ? jQuery : \$;
\t
\tvar obj_class \t\t\t= \$('";
        // line 64
        echo ($context["in_class"] ?? null);
        echo "').find('.product-layout').parent(),
\t\tproduct_arr_all \t= \$(\".so_filter_wrap .modcontent ul\").attr(\"data-product_id\"),
\t\topt_value_id\t\t= \"";
        // line 66
        echo ($context["opt_id"] ?? null);
        echo "\",
\t\tatt_value_id\t\t= \"";
        // line 67
        echo ($context["att_id"] ?? null);
        echo "\",
\t\tmanu_value_id\t\t= \"";
        // line 68
        echo ($context["manu_id"] ?? null);
        echo "\",
\t\tsubcate_value_id\t= \"";
        // line 69
        echo ($context["subcate_id"] ?? null);
        echo "\",
\t\t\$minPrice\t\t\t= ";
        // line 70
        echo ($context["minPrice"] ?? null);
        echo ",
\t\t\$maxPrice \t\t\t= ";
        // line 71
        echo ($context["maxPrice"] ?? null);
        echo ",
\t\t\$minPrice_new \t\t= ";
        // line 72
        echo ($context["minPrice_new"] ?? null);
        echo ",
\t\t\$maxPrice_new \t\t= ";
        // line 73
        echo ($context["maxPrice_new"] ?? null);
        echo ",
\t\turl \t\t\t\t= '";
        // line 74
        echo ($context["url"] ?? null);
        echo "';
\t\ttext_search\t\t\t= \"";
        // line 75
        echo ($context["text_search"] ?? null);
        echo "\";
\t
\tobj_class.addClass('so-filter-gird');
\t\$load_gif = \$('.so-filter-gird');
\t\$(\".so-filter-heading\").on(\"click\",function(){
\t\tif(\$(this).find(\".fa\").hasClass(\"fa-chevron-down\")){
\t\t\t\$(this).find(\".fa-chevron-down\").addClass('fa-chevron-right','slow').removeClass('fa-chevron-down','slow');
\t\t}else{
\t\t\t\$(this).find(\".fa-chevron-right\").addClass('fa-chevron-down','slow').removeClass('fa-chevron-right','slow');
\t\t}
\t\t\$(this).parent().children(\".so-filter-content-opts\").slideToggle(\"slow\");
\t});

\tclickOption();
\tif( opt_value_id != \"\" || att_value_id != \"\" || manu_value_id != \"\" || \$minPrice != \$minPrice_new || \$maxPrice != \$maxPrice_new || text_search != \"\" || subcate_value_id != \"\")\t{
\t\trequestAjax();
\t}else{
\t\tobj_class.find(\".product-layout\").fadeIn(\"show\");
\t}

\tfunction getUrlVars() {
\t\tvar vars = {};
\t\tvar parts = window.location.href.replace(/[?&]+([^=&]+)=([^&]*)/gi, function(m,key,value) {
\t\t\tvars[key] = value;
\t\t});
\t\treturn vars;
\t}

\tfunction updateURL() {
\t\tif (history.pushState) {
\t\t\twindow.history.pushState({},'',url);
\t\t}
\t}

\tfunction clickOption(){
\t\t\$(\".so-filter-content-opts-container .opt-select.opt_enable\").on(\"click\",function(){
\t\t\tif (!\$(this).hasClass('opt_disable')){
\t\t\t\tvar type_li = \$(this).attr(\"data-type\");
\t\t\t\tvar att_value = \"\";
\t\t\t\tvar opt_value = \"\";
\t\t\t\tvar manu_value = \"\";
\t\t\t\t\$load_gif.addClass('loading-gif');
\t\t\t\tswitch(type_li)\t{
\t\t\t\t\tcase \"option\":
\t\t\t\t\t\topt_value = \$(this).attr(\"data-option_value\");
\t\t\t\t\t\tif(!\$(this).hasClass(\"opt_active\"))\t{
\t\t\t\t\t\t\t\$(this).addClass(\"opt_active\");
\t\t\t\t\t\t\t\$(this).find('.fa-square-o').removeClass('fa-square-o').addClass('fa-check-square-o');
\t\t\t\t\t\t\t\$(this).find(\".option-count\").addClass(\"opt_close\");
\t\t\t\t\t\t\tif(opt_value_id == \"\"){
\t\t\t\t\t\t\t\topt_value_id = opt_value;
\t\t\t\t\t\t\t}else{
\t\t\t\t\t\t\t\topt_value_id += \",\" + opt_value;
\t\t\t\t\t\t\t}
\t\t\t\t\t\t}else{
\t\t\t\t\t\t\t\$(this).removeClass(\"opt_active\");
\t\t\t\t\t\t\t\$(this).find('.fa-check-square-o').removeClass('fa-check-square-o').addClass('fa-square-o');
\t\t\t\t\t\t\t\$(this).find(\".option-count\").removeClass(\"opt_close\");
\t\t\t\t\t\t\topt_value_id = opt_value_id.replace(\",\"+opt_value,\"\");
\t\t\t\t\t\t\topt_value_id = opt_value_id.replace(opt_value+\",\",\"\");
\t\t\t\t\t\t\topt_value_id = opt_value_id.replace(opt_value,\"\");
\t\t\t\t\t\t}

\t\t\t\t\t\tif(url.indexOf(\"opt_id\") != -1)\t{
\t\t\t\t\t\t\tif(opt_value_id != \"\"){
\t\t\t\t\t\t\t\turl = url.replace(/(&opt_id=)[^\\&]+/,'&opt_id='+opt_value_id);
\t\t\t\t\t\t\t}else{
\t\t\t\t\t\t\t\turl = url.replace(/(&opt_id=)[^\\&]+/,'');
\t\t\t\t\t\t\t\tlocation.href= url;
\t\t\t\t\t\t\t}

\t\t\t\t\t\t}else{
\t\t\t\t\t\t\turl = url+'&opt_id='+opt_value_id;
\t\t\t\t\t\t}

\t\t\t\t\tbreak;
\t\t\t\t\tcase \"attribute\":
\t\t\t\t\t\tatt_value = \$(this).attr(\"data-attribute_value\");
\t\t\t\t\t\tif(!\$(this).hasClass(\"opt_active\"))\t{
\t\t\t\t\t\t\t\$(this).addClass(\"opt_active\");
\t\t\t\t\t\t\t\$(this).find('.fa-square-o').removeClass('fa-square-o').addClass('fa-check-square-o');
\t\t\t\t\t\t\t\$(this).find(\".option-count\").addClass(\"opt_close\");
\t\t\t\t\t\t\tif(att_value_id == \"\"){
\t\t\t\t\t\t\t\tatt_value_id = att_value;
\t\t\t\t\t\t\t}else{
\t\t\t\t\t\t\t\tatt_value_id = att_value_id.replace(\",\"+att_value,\"\");
\t\t\t\t\t\t\t\tatt_value_id = att_value_id.replace(att_value+\",\",\"\");
\t\t\t\t\t\t\t\tatt_value_id = att_value_id.replace(att_value,\"\");
\t\t\t\t\t\t\t\tatt_value_id += \",\" + att_value;
\t\t\t\t\t\t\t}
\t\t\t\t\t\t}else{
\t\t\t\t\t\t\t\$(this).removeClass(\"opt_active\");
\t\t\t\t\t\t\t\$(this).find('.fa-check-square-o').removeClass('fa-check-square-o').addClass('fa-square-o');
\t\t\t\t\t\t\t\$(this).find(\".option-count\").removeClass(\"opt_close\");
\t\t\t\t\t\t\tatt_value_id = att_value_id.replace(\",\"+att_value,\"\");
\t\t\t\t\t\t\tatt_value_id = att_value_id.replace(att_value+\",\",\"\");
\t\t\t\t\t\t\tatt_value_id = att_value_id.replace(att_value,\"\");
\t\t\t\t\t\t}
\t\t\t\t\t\tif(url.indexOf(\"att_id\") != -1){
\t\t\t\t\t\t\tif(att_value_id != \"\"){
\t\t\t\t\t\t\t\turl = url.replace(/(&att_id=)[^\\&]+/,'&att_id='+att_value_id);
\t\t\t\t\t\t\t}else{
\t\t\t\t\t\t\t\turl = url.replace(/(&att_id=)[^\\&]+/,'');
\t\t\t\t\t\t\t\tlocation.href= url;
\t\t\t\t\t\t\t}
\t\t\t\t\t\t}else{
\t\t\t\t\t\t\turl = url+'&att_id='+att_value_id;
\t\t\t\t\t\t}
\t\t\t\t\tbreak;
\t\t\t\t\tcase \"manufacturer\":
\t\t\t\t\t\tmanu_value = \$(this).attr(\"data-manufacturer_value\");
\t\t\t\t\t\tif(!\$(this).hasClass(\"opt_active\"))\t{
\t\t\t\t\t\t\t\$(this).addClass(\"opt_active\");
\t\t\t\t\t\t\t\$(this).find('.fa-square-o').removeClass('fa-square-o').addClass('fa-check-square-o');
\t\t\t\t\t\t\t\$(this).find(\".option-count\").addClass(\"opt_close\");
\t\t\t\t\t\t\tif(manu_value_id == \"\")\t{
\t\t\t\t\t\t\t\tmanu_value_id = manu_value;
\t\t\t\t\t\t\t}else{
\t\t\t\t\t\t\t\tmanu_value_id = manu_value_id.replace(\",\"+manu_value,\"\");
\t\t\t\t\t\t\t\tmanu_value_id = manu_value_id.replace(manu_value+\",\",\"\");
\t\t\t\t\t\t\t\tmanu_value_id = manu_value_id.replace(manu_value,\"\");
\t\t\t\t\t\t\t\tmanu_value_id += \",\" + manu_value;
\t\t\t\t\t\t\t}
\t\t\t\t\t\t}else{
\t\t\t\t\t\t\t\$(this).removeClass(\"opt_active\");
\t\t\t\t\t\t\t\$(this).find('.fa-check-square-o').removeClass('fa-check-square-o').addClass('fa-square-o');
\t\t\t\t\t\t\t\$(this).find(\".option-count\").removeClass(\"opt_close\");
\t\t\t\t\t\t\tmanu_value_id = manu_value_id.replace(\",\"+manu_value,\"\");
\t\t\t\t\t\t\tmanu_value_id = manu_value_id.replace(manu_value+\",\",\"\");
\t\t\t\t\t\t\tmanu_value_id = manu_value_id.replace(manu_value,\"\");
\t\t\t\t\t\t}
\t\t\t\t\t\tif(url.indexOf(\"manu_id\") != -1){
\t\t\t\t\t\t\tif(manu_value_id != \"\")\t{
\t\t\t\t\t\t\t\turl = url.replace(/(&manu_id=)[^\\&]+/,'&manu_id='+manu_value_id);
\t\t\t\t\t\t\t}else{
\t\t\t\t\t\t\t\turl = url.replace(/(&manu_id=)[^\\&]+/,'');
\t\t\t\t\t\t\t\tlocation.href= url;
\t\t\t\t\t\t\t}
\t\t\t\t\t\t}else{
\t\t\t\t\t\t\turl = url+'&manu_id='+manu_value_id;
\t\t\t\t\t\t}
\t\t\t\t\tbreak;
\t\t\t\t\tcase \"subcategory\":
\t\t\t\t\t\tsubcate_value = \$(this).attr(\"data-subcategory_value\");
\t\t\t\t\t\tif(!\$(this).hasClass(\"opt_active\"))\t{
\t\t\t\t\t\t\t\$(this).addClass(\"opt_active\");
\t\t\t\t\t\t\t\$(this).find('.fa-square-o').removeClass('fa-square-o').addClass('fa-check-square-o');
\t\t\t\t\t\t\t\$(this).find(\".option-count\").addClass(\"opt_close\");
\t\t\t\t\t\t\tif(subcate_value_id == \"\"){
\t\t\t\t\t\t\t\tsubcate_value_id = subcate_value;
\t\t\t\t\t\t\t}else{
\t\t\t\t\t\t\t\tsubcate_value_id = subcate_value_id.replace(\",\"+subcate_value,\"\");
\t\t\t\t\t\t\t\tsubcate_value_id = subcate_value_id.replace(subcate_value+\",\",\"\");
\t\t\t\t\t\t\t\tsubcate_value_id = subcate_value_id.replace(subcate_value,\"\");
\t\t\t\t\t\t\t\tsubcate_value_id += \",\" + subcate_value;
\t\t\t\t\t\t\t}
\t\t\t\t\t\t}else{
\t\t\t\t\t\t\t\$(this).removeClass(\"opt_active\");
\t\t\t\t\t\t\t\$(this).find('.fa-check-square-o').removeClass('fa-check-square-o').addClass('fa-square-o');
\t\t\t\t\t\t\t\$(this).find(\".option-count\").removeClass(\"opt_close\");
\t\t\t\t\t\t\tsubcate_value_id = subcate_value_id.replace(\",\"+subcate_value,\"\");
\t\t\t\t\t\t\tsubcate_value_id = subcate_value_id.replace(subcate_value+\",\",\"\");
\t\t\t\t\t\t\tsubcate_value_id = subcate_value_id.replace(subcate_value,\"\");
\t\t\t\t\t\t}
\t\t\t\t\t\tif(url.indexOf(\"subcate_id\") != -1)\t{
\t\t\t\t\t\t\tif(subcate_value_id != \"\"){
\t\t\t\t\t\t\t\turl = url.replace(/(&subcate_id=)[^\\&]+/,'&subcate_id='+subcate_value_id);
\t\t\t\t\t\t\t}else{
\t\t\t\t\t\t\t\turl = url.replace(/(&subcate_id=)[^\\&]+/,'');
\t\t\t\t\t\t\t\tlocation.href= url;
\t\t\t\t\t\t\t}
\t\t\t\t\t\t}else{
\t\t\t\t\t\t\turl = url+'&subcate_id='+subcate_value_id;
\t\t\t\t\t\t}
\t\t\t\t\t\tproduct_arr_all = \$(this).attr(\"data-list_product\");
\t\t\t\t\t\tlocation.href= url;
\t\t\t\t\tbreak;
\t\t\t\t}
\t\t\t\tobj_class.find(\".product-layout\").css(\"display\",\"none\");

\t\t\t\tupdateURL();
\t\t\t\trequestAjax();
\t\t\t}
\t\t\treturn false;
\t\t});
\t}

\t\$.arrayIntersect = function(a, b)
\t{
\t\treturn \$.grep(a, function(i)
\t\t{
\t\t\treturn \$.inArray(i, b) > -1;
\t\t});
\t};

\tfunction getCountProduct(){
\t\tvar product_tmp = \$(\".so_filter_wrap .modcontent ul\").attr(\"data-product_id\");
\t\t
\t\tproduct_arr = product_tmp.split(',');
\t\tif(product_arr == ''){
\t\t\t\$('.so-filter-option').each(function(){
\t\t\t\t\$(this).find('.option-count span').html(0);
\t\t\t});
\t\t}else{
\t\t\t\$('.so-filter-option.opt-select').each(function(){
\t\t\t\tvar product = \$(this).attr('data-list_product');
\t\t\t\tif(product != ''){
\t\t\t\t\tvar product_array = product.split(',');
\t\t\t\t\tvar length = product_array.length;
\t\t\t\t\tvar dem = 0 , a =[];
\t\t\t\t\tvar _general = \$.arrayIntersect(product_arr, product_array);
\t\t\t\t\tvar count = _general.length;
\t\t\t\t\t// for (var i = 0; i < length;i++){
\t\t\t\t\t\t// if(product_arr.indexOf(product_array[i]) > -1){
\t\t\t\t\t\t\t// count = count + 1;
\t\t\t\t\t\t\t// dem = product_array.length - product_arr.split(',').length;
\t\t\t\t\t\t// }
\t\t\t\t\t// }
\t\t\t\t\tif(count == 0){
\t\t\t\t\t\t\$(this).removeClass(\"opt_enable\").addClass(\"opt_disable\");
\t\t\t\t\t\t\$(this).attr(\"disabled\", \"disabled\");

\t\t\t\t\t}else{
\t\t\t\t\t\t\$(this).removeClass(\"opt_enable\").removeClass(\"opt_disable\").addClass(\"opt_enable\");
\t\t\t\t\t\t\$(this).removeAttr(\"disabled\");
\t\t\t\t\t}
\t\t\t\t\tvar type = \$(this).attr(\"data-type\");
\t\t\t\t\tif(count > 0 && ((att_value_id != \"\" && type == \"attribute\") || (opt_value_id != \"\" && type == \"option\"))){
\t\t\t\t\t\t\$(this).find('.option-count span').html(count);
\t\t\t\t\t}else{
\t\t\t\t\t\t\$(this).find('.option-count span').html(count);
\t\t\t\t\t}
\t\t\t\t}
\t\t\t});
\t\t}
\t}

\t";
        // line 312
        if (((($context["disp_pro_price"] ?? null) && ((($context["minPrice_new"] ?? null) != 0) || (($context["maxPrice_new"] ?? null) != 0))) && (($context["minPrice"] ?? null) != ($context["maxPrice"] ?? null)))) {
            // line 313
            echo "\t\tvar range = document.getElementById('slider-range');
\t\tnoUiSlider.create(range, {
\t\t\tstart: [\$minPrice_new, \$maxPrice_new],
\t\t\tstep: 1,
\t\t\tconnect: true,
\t\t\trange: {
\t\t\t\t'min': \$minPrice,
\t\t\t\t'max': \$maxPrice
\t\t\t},
\t\t\tslide: function(event, ui) {
\t            if (\$minPrice == \$maxPrice) {
\t                return false;
\t            }
\t        }
\t\t});
\t\tvar valueMin = \$('.content_min_max .input_min'),
\t\t\tvalueMax = \$('.content_min_max .input_max');

\t\trange.noUiSlider.on('change', function( values, handle ) {
\t\t\tif ( handle ) {
\t\t\t\tvalueMax.val(values[handle]);
\t\t\t\t\$maxPrice_new = values[handle];
\t\t\t\tif(url.indexOf(\"maxPrice\") != -1){
\t\t\t\t\tif(\$maxPrice_new != \"";
            // line 336
            echo ($context["maxPrice"] ?? null);
            echo "\"){
\t\t\t\t\t\turl = url.replace(/(&maxPrice=)[^\\&]+/,'&maxPrice='+\$maxPrice_new);
\t\t\t\t\t}else{
\t\t\t\t\t\turl = url.replace(/(&maxPrice=)[^\\&]+/,'');
\t\t\t\t\t\tlocation.href= url;
\t\t\t\t\t}
\t\t\t\t}else{
\t\t\t\t\turl = url+'&maxPrice='+\$maxPrice_new;
\t\t\t\t}
\t\t\t} else {
\t\t\t\tvalueMin.val(values[handle]);
\t\t\t\t\$minPrice_new = values[handle];
\t\t\t\tif(url.indexOf(\"minPrice\") != -1){
\t\t\t\t\tif(\$minPrice_new != \"";
            // line 349
            echo ($context["minPrice"] ?? null);
            echo "\"){
\t\t\t\t\t\turl = url.replace(/(&minPrice=)[^\\&]+/,'&minPrice='+\$minPrice_new);
\t\t\t\t\t}else{
\t\t\t\t\t\turl = url.replace(/(&minPrice=)[^\\&]+/,'');
\t\t\t\t\t\tlocation.href= url;
\t\t\t\t\t}
\t\t\t\t}else{
\t\t\t\t\turl = url+'&minPrice='+\$minPrice_new;
\t\t\t\t}
\t\t\t}
\t\t\tobj_class.find(\".product-layout\").css('display','none');
\t\t\tupdateURL();
\t\t\trequestAjax();

\t\t});
\t
\t\trange.noUiSlider.on('end', function( values, handle ) {
\t\t\tif ( handle ) {
\t\t\t\t\$maxPrice_new = values[handle];
\t\t\t\tif(url.indexOf(\"maxPrice\") != -1){
\t\t\t\t\tif(\$maxPrice_new != \"";
            // line 369
            echo ($context["maxPrice"] ?? null);
            echo "\"){
\t\t\t\t\t\turl = url.replace(/(&maxPrice=)[^\\&]+/,'&maxPrice='+\$maxPrice_new);
\t\t\t\t\t}else{
\t\t\t\t\t\turl = url.replace(/(&maxPrice=)[^\\&]+/,'');
\t\t\t\t\t\tlocation.href= url;
\t\t\t\t\t}
\t\t\t\t}else{
\t\t\t\t\turl = url+'&maxPrice='+\$maxPrice_new;
\t\t\t\t}

\t\t\t} else {
\t\t\t\t\$minPrice_new = values[handle];
\t\t\t\tif(url.indexOf(\"minPrice\") != -1){
\t\t\t\t\tif(\$minPrice_new != \"";
            // line 382
            echo ($context["minPrice"] ?? null);
            echo "\"){
\t\t\t\t\t\turl = url.replace(/(&minPrice=)[^\\&]+/,'&minPrice='+\$minPrice_new);
\t\t\t\t\t}else{
\t\t\t\t\t\turl = url.replace(/(&minPrice=)[^\\&]+/,'');
\t\t\t\t\t\tlocation.href= url;
\t\t\t\t\t}
\t\t\t\t}else{
\t\t\t\t\turl = url+'&minPrice='+\$minPrice_new;
\t\t\t\t}

\t\t\t}
\t\t\tobj_class.find(\".product-layout\").css('display','none');
\t\t\tupdateURL();
\t\t\trequestAjax();
\t\t});
\t
\t\t\$('.content_min_max .input_min').change(function(){
\t\t\tvar valueMin = \$(this).val();
\t\t\tvar maxPrice__ = getUrlVars()[\"maxPrice\"];

\t\t\tif(typeof maxPrice__ === 'undefined'){
\t\t\t\t\$maxPrice_new = ";
            // line 403
            echo ($context["maxPrice"] ?? null);
            echo ";
\t\t\t}else{
\t\t\t\t\$maxPrice_new = maxPrice__;
\t\t\t}
\t\t\tif(valueMin < ";
            // line 407
            echo ($context["minPrice"] ?? null);
            echo "){
\t\t\t\tvalueMin = ";
            // line 408
            echo ($context["minPrice"] ?? null);
            echo ";
\t\t\t\t\$(this).val(valueMin);
\t\t\t}
\t\t\tif(valueMin > ";
            // line 411
            echo ($context["maxPrice"] ?? null);
            echo "){
\t\t\t\tvalueMin = ";
            // line 412
            echo ($context["maxPrice"] ?? null);
            echo ";
\t\t\t\t\$(this).val(valueMin);
\t\t\t}
\t\t\trange.noUiSlider.set([valueMin,null]);
\t\t\tif(url.indexOf(\"minPrice\") != -1){
\t\t\t\tif(valueMin != \"";
            // line 417
            echo ($context["minPrice"] ?? null);
            echo "\"){
\t\t\t\t\turl = url.replace(/(&minPrice=)[^\\&]+/,'&minPrice='+valueMin);
\t\t\t\t}else{
\t\t\t\t\turl = url.replace(/(&minPrice=)[^\\&]+/,'');
\t\t\t\t\tlocation.href= url;
\t\t\t\t}
\t\t\t}else{
\t\t\t\turl = url+'&minPrice='+valueMin;
\t\t\t}
\t\t\tobj_class.find(\".product-layout\").css('display','none');
\t\t\tupdateURL();
\t\t\t\$minPrice_new = valueMin;

\t\t\trequestAjax();
\t\t});

\t\t\$('.content_min_max .input_max').change(function(){
\t\t\tvar valueMax = \$(this).val();
\t\t\tvar minPrice__ = getUrlVars()[\"minPrice\"];
\t\t\tif(typeof minPrice__ === 'undefined'){
\t\t\t\t\$minPrice_new = ";
            // line 437
            echo ($context["minPrice"] ?? null);
            echo ";
\t\t\t}else{
\t\t\t\t\$minPrice_new = minPrice__;
\t\t\t}
\t\t\tif(valueMax > ";
            // line 441
            echo ($context["maxPrice"] ?? null);
            echo "){
\t\t\t\tvalueMax = ";
            // line 442
            echo ($context["maxPrice"] ?? null);
            echo ";
\t\t\t\t\$(this).val(valueMax);
\t\t\t}
\t\t\tif(valueMax < ";
            // line 445
            echo ($context["minPrice"] ?? null);
            echo "){
\t\t\t\tvalueMax = ";
            // line 446
            echo ($context["maxPrice"] ?? null);
            echo ";
\t\t\t\t\$(this).val(valueMax);
\t\t\t}
\t\t\trange.noUiSlider.set([null, valueMax]);
\t\t\tif(url.indexOf(\"maxPrice\") != -1){
\t\t\t\tif(valueMax != \"";
            // line 451
            echo ($context["maxPrice"] ?? null);
            echo "\"){
\t\t\t\t\turl = url.replace(/(&maxPrice=)[^\\&]+/,'&maxPrice='+valueMax);
\t\t\t\t}else{
\t\t\t\t\turl = url.replace(/(&maxPrice=)[^\\&]+/,'');
\t\t\t\t\tlocation.href= url;
\t\t\t\t}
\t\t\t}else{
\t\t\t\turl = url+'&maxPrice='+valueMax;
\t\t\t}
\t\t\tobj_class.find(\".product-layout\").css('display','none');
\t\t\tupdateURL();
\t\t\t\$maxPrice_new = valueMax;
\t\t\trequestAjax();
\t\t});
\t";
        }
        // line 466
        echo "
\t";
        // line 467
        if (($context["disp_search_text"] ?? null)) {
            // line 468
            echo "\t\t\$('#text_search').keyup(function(){
\t\t\tvar character = ";
            // line 469
            echo ($context["character_search"] ?? null);
            echo ";
\t\t\ttext_search = \$(\"#text_search\").val();
\t\t\tif(text_search.length >= character){
\t\t\t\tif(url.indexOf(\"search\") != -1){
\t\t\t\t\tif(text_search != \"\"){
\t\t\t\t\t\turl = url.replace(/(&search=)[^\\&]+/,'&search='+text_search);
\t\t\t\t\t}else{
\t\t\t\t\t\turl = url.replace(/(&search=)[^\\&]+/,'');
\t\t\t\t\t\tlocation.href= url;
\t\t\t\t\t}
\t\t\t\t}else{
\t\t\t\t\turl = url+'&search='+text_search;
\t\t\t\t}
\t\t\t\tobj_class.find(\".product-layout\").css('display','none');
\t\t\t\tupdateURL();
\t\t\t\trequestAjax();
\t\t\t}
\t\t});

\t\t\$('#submit_text_search').on(\"click\",function(){
\t\t\ttext_search = \$(\"#text_search\").val();
\t\t\tif(url.indexOf(\"search\") != -1){
\t\t\t\tif(text_search != \"\"){
\t\t\t\t\turl = url.replace(/(&search=)[^\\&]+/,'&search='+text_search);
\t\t\t\t}else{
\t\t\t\t\turl = url.replace(/(&search=)[^\\&]+/,'');
\t\t\t\t\tlocation.href= url;
\t\t\t\t}
\t\t\t}else{
\t\t\t\turl = url+'&search='+text_search;
\t\t\t}
\t\t\tobj_class.find(\".product-layout\").css('display','none');
\t\t\tupdateURL();
\t\t\trequestAjax();
\t\t});
\t";
        }
        // line 505
        echo "
\t";
        // line 506
        if (($context["disp_reset_all"] ?? null)) {
            // line 507
            echo "\t\t\$('.btn_resetAll').on(\"click\",function(){
\t\t\topt_value_id \t\t= \"\";
\t\t\tatt_value_id \t\t= \"\";
\t\t\tmanu_value_id \t\t= \"\";
\t\t\t\$minPrice_new\t\t= \"\",
\t\t\t\$maxPrice_new \t\t= \"\",
\t\t\ttext_search \t\t= \"\";
\t\t\tsubcate_value_id\t= \"\";
\t\t\turl = url.replace(/(&opt_id=)[^\\&]+/,'');
\t\t\turl = url.replace(/(&att_id=)[^\\&]+/,'');
\t\t\turl = url.replace(/(&manu_id=)[^\\&]+/,'');
\t\t\turl = url.replace(/(&minPrice=)[^\\&]+/,'');
\t\t\turl = url.replace(/(&maxPrice=)[^\\&]+/,'');
\t\t\turl = url.replace(/(&search=)[^\\&]+/,'');
\t\t\turl = url.replace(/(&subcate_id=)[^\\&]+/,'');
\t\t\tobj_class.find(\".product-layout\").css('display','none');
\t\t\tupdateURL();
\t\t\t\$('.content_min_max .input_min').val(\$minPrice);
\t\t\t\$('.content_min_max .input_max').val(\$maxPrice);
\t\t\tif((\$minPrice != 0 || \$maxPrice != 0) && (\$minPrice != \$maxPrice)){
\t\t\t\trange.noUiSlider.set([\$minPrice, \$maxPrice]);
\t\t\t}
\t\t\t
\t\t\t\$(\".so-filter-option\").removeClass(\"opt_active\");
\t\t\t\$(\".so-filter-option\").find('.fa-check-square-o').removeClass('fa-check-square-o').addClass('fa-square-o');
\t\t\t\$(\".so-filter-option\").find(\".option-count\").removeClass(\"opt_close\");

\t\t\t\$(\".so-filter-option-sub\").removeClass(\"opt_active\");
\t\t\t\$(\".so-filter-option-sub\").find('.fa-check-square-o').removeClass('fa-check-square-o').addClass('fa-square-o');
\t\t\t\$(\".so-filter-option-sub\").find(\".option-count\").removeClass(\"opt_close\");

\t\t\t\$(\"#text_search\").val('');
\t\t\tlocation.href= url;
\t\t});
\t";
        }
        // line 542
        echo "\t
\tfunction requestAjax(){
\t\tvar page = (getUrlVars()[\"page\"] === \"undefined\" ? \"1\" : getUrlVars()[\"page\"]);
\t\t\$.ajax({
\t\t\ttype: 'POST',
\t\t\turl: 'index.php?route=extension/module/so_filter_shop_by/filter_data',
\t\t\tdata: {
\t\t\t\tisFilterShopBy\t\t: 1,
\t\t\t\topt_value_id\t\t: opt_value_id,
\t\t\t\tatt_value_id\t\t: att_value_id,
\t\t\t\tmanu_value_id\t\t: manu_value_id,
\t\t\t\tsubcate_value_id\t: subcate_value_id,
\t\t\t\tminPrice \t\t\t: \$minPrice_new,
\t\t\t\tmaxPrice \t\t\t: \$maxPrice_new,
\t\t\t\ttext_search \t\t: text_search,
\t\t\t\tcategory_id_path\t: '";
        // line 557
        echo ($context["category_id_path"] ?? null);
        echo "',
\t\t\t\tpage\t\t\t\t: page,
\t\t\t\tproduct_id_in        : \$('.so_filter_wrap .modcontent > ul').attr('data-product_id'),
\t\t\t\tproduct_arr_all \t: product_arr_all,
\t\t\t\tcondition_search\t: '";
        // line 561
        echo ($context["condition_search"] ?? null);
        echo "'
\t\t\t},
\t\t\tsuccess: function (data) {
\t\t\t\tobj_class.html(data['html']);
\t\t\t\tvar text_right = obj_class.find(\".product-layout\").parent().next().find('.text-right').html();
\t\t\t\tvar text_left = obj_class.find(\".product-layout\").parent().next().find('.text-left').html();
\t\t\t\tvar text_center = obj_class.find(\".product-layout\").parent().next().find('.short-by-show.text-center').html();
\t\t\t\tobj_class.next().find('.text-right').html(text_right);
\t\t\t\tobj_class.next().find('.text-left').html('');
\t\t\t\tobj_class.next().find('.short-by-show.text-center').html(text_center);
\t\t\t\tobj_class.next().find('.box-pagination.text-right').html('');
\t\t\t\tif(obj_class.find(\".product-layout\").length > 0){
\t\t\t\t\tvar html = obj_class.find(\".product-layout\").eq(0).parent().html();
\t\t\t\t\tobj_class.html(html);

\t\t\t\t}else{
\t\t\t\t\tobj_class.html('<div class=\"col-xs-12\">";
        // line 577
        echo ($context["text_empty"] ?? null);
        echo "</div>');
\t\t\t\t\tobj_class.next().find('.text-right').css('display','none');
\t\t\t\t\tobj_class.next().find('.short-by-show.text-center').css('display','none');
\t\t\t\t}
\t\t\t\tobj_class.find(\".product-layout\").fadeIn(\"show\");
\t\t\t\t\$(\".so_filter_wrap .modcontent ul\").attr(\"data-product_id\",data['product_arr']);
\t\t\t\t
\t\t\t\t/*===Leader Custom JS===*/
\t\t\t\t\$('#grid-view-4').click();
\t\t\t\t\$( '.product-card__gallery .item-img').hover(function() {
\t\t\t\t\t\$(this).addClass('thumb-active').siblings().removeClass('thumb-active');
\t\t\t\t\tvar thumb_src = \$(this).attr(\"data-src\");
\t\t\t\t\t\$(this).closest('.product-item-container').find('img.img-responsive').attr(\"src\",thumb_src);
\t\t\t\t}); 

\t\t\t\tgetCountProduct();
\t\t\t\t\$load_gif.removeClass('loading-gif');
\t\t\t},
\t\t\tdataType: 'json'
\t\t});
\t}

});
//]]>
</script>";
    }

    public function getTemplateName()
    {
        return "so-buyshop/template/extension/module/so_filter_shop_by/default.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  872 => 577,  853 => 561,  846 => 557,  829 => 542,  792 => 507,  790 => 506,  787 => 505,  748 => 469,  745 => 468,  743 => 467,  740 => 466,  722 => 451,  714 => 446,  710 => 445,  704 => 442,  700 => 441,  693 => 437,  670 => 417,  662 => 412,  658 => 411,  652 => 408,  648 => 407,  641 => 403,  617 => 382,  601 => 369,  578 => 349,  562 => 336,  537 => 313,  535 => 312,  295 => 75,  291 => 74,  287 => 73,  283 => 72,  279 => 71,  275 => 70,  271 => 69,  267 => 68,  263 => 67,  259 => 66,  254 => 64,  245 => 57,  239 => 54,  236 => 53,  234 => 52,  231 => 51,  225 => 49,  223 => 48,  220 => 47,  217 => 46,  203 => 45,  197 => 43,  194 => 42,  191 => 41,  188 => 40,  170 => 39,  168 => 38,  165 => 37,  162 => 36,  148 => 35,  145 => 34,  139 => 32,  136 => 31,  133 => 30,  130 => 29,  124 => 27,  121 => 26,  118 => 25,  115 => 24,  112 => 23,  94 => 22,  92 => 21,  89 => 20,  83 => 18,  81 => 17,  78 => 16,  72 => 14,  70 => 13,  67 => 12,  61 => 10,  59 => 9,  55 => 8,  50 => 5,  44 => 3,  42 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "so-buyshop/template/extension/module/so_filter_shop_by/default.twig", "/home/azhkhn/public_html/protidin.com.bd/catalog/view/theme/so-buyshop/template/extension/module/so_filter_shop_by/default.twig");
    }
}
