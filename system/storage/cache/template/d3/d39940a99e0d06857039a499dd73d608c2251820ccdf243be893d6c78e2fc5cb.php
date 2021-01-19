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

/* so-buyshop/template/extension/module/so_listing_tabs/default.twig */
class __TwigTemplate_526d683fc5179a8a6b30e05c6ecbb5ba75c63f211c674cf024b0b9d0473455b8 extends \Twig\Template
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
        echo "<div class=\"module ";
        echo ($context["direction_class"] ?? null);
        echo " ";
        echo ($context["class_suffix"] ?? null);
        echo " so-tab-default\">
\t";
        // line 2
        if ((($context["disp_title_module"] ?? null) || (($context["pre_text"] ?? null) != ""))) {
            // line 3
            echo "\t<h3 class=\"modtitle\">
\t\t";
            // line 4
            if ( !twig_test_empty(twig_trim_filter(($context["pre_text"] ?? null)))) {
                // line 5
                echo "\t\t\t<!-- <div class=\"form-group\"> -->
\t\t\t\t";
                // line 6
                echo ($context["pre_text"] ?? null);
                echo "
\t\t\t<!-- </div> -->
\t\t";
            }
            // line 9
            echo "\t\t<a class=\"viewall\" href=\"#\"> ";
            echo ($context["text_view_all"] ?? null);
            echo " <i class=\"fa fa-angle-double-right\" aria-hidden=\"true\"></i></a>
\t\t";
            // line 10
            if (($context["disp_title_module"] ?? null)) {
                echo ($context["head_name"] ?? null);
            }
            // line 11
            echo "\t</h3>
\t";
        }
        // line 13
        echo "\t<div class=\"modcontent\">
\t\t<!--[if lt IE 9]>
\t\t<div id=\"";
        // line 15
        echo ($context["tag_id"] ?? null);
        echo "\" class=\"so-listing-tabs msie lt-ie9 first-load module\"><![endif]-->
\t\t<!--[if IE 9]>
\t\t<div id=\"";
        // line 17
        echo ($context["tag_id"] ?? null);
        echo "\" class=\"so-listing-tabs msie first-load module\"><![endif]-->
\t\t<!--[if gt IE 9]><!-->
\t\t<div id=\"";
        // line 19
        echo ($context["tag_id"] ?? null);
        echo "\" class=\"so-listing-tabs first-load module\"><!--<![endif]-->
\t\t\t";
        // line 20
        if (twig_length_filter($this->env, ($context["list"] ?? null))) {
            // line 21
            echo "\t\t\t\t<div class=\"ltabs-wrap \">
\t\t\t\t\t<div class=\"ltabs-tabs-container\" data-delay=\"";
            // line 22
            echo ($context["delay"] ?? null);
            echo "\"
\t\t\t\t\t \tdata-duration=\"";
            // line 23
            echo ($context["duration"] ?? null);
            echo "\"
\t\t\t\t\t \tdata-effect=\"";
            // line 24
            echo ($context["effect"] ?? null);
            echo "\"
\t\t\t\t\t \tdata-ajaxurl=\"";
            // line 25
            echo ($context["ajaxurl"] ?? null);
            echo "\" data-type_source=\"";
            echo ($context["type_source"] ?? null);
            echo "\"
\t\t\t\t\t \tdata-type_show=\"";
            // line 26
            echo ($context["type_show"] ?? null);
            echo "\" >
\t\t\t\t\t\t 
\t\t\t\t\t\t";
            // line 28
            echo twig_include($this->env, $context, (($context["theme_config"] ?? null) . "/template/extension/module/so_listing_tabs/default/default_tabs.twig"));
            echo "
\t\t\t\t\t\t
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"wap-listing-tabs products-list grid\">
\t\t\t\t\t\t";
            // line 32
            if ((($context["display_banner_image"] ?? null) == 1)) {
                // line 33
                echo "\t\t\t\t\t\t\t<div class=\"item-cat-image\">
\t\t\t\t\t\t\t\t<a href=\"";
                // line 34
                echo ($context["banner_image_url"] ?? null);
                echo "\" title=\"\" target=\"";
                echo ($context["item_link_target"] ?? null);
                echo "\" >
\t\t\t\t\t\t\t\t\t<img class=\"categories-loadimage\" title=\"\" alt=\"\" src=\"";
                // line 35
                echo ($context["banner_image"] ?? null);
                echo "\"/>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
            }
            // line 39
            echo "\t\t\t\t\t\t<div class=\"ltabs-items-container\">
\t\t\t\t\t\t\t";
            // line 40
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["list"] ?? null));
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
            foreach ($context['_seq'] as $context["key"] => $context["items"]) {
                // line 41
                echo "\t\t\t\t\t\t\t\t";
                $context["child_items"] = ((twig_get_attribute($this->env, $this->source, $context["items"], "child", [], "any", true, true, false, 41)) ? (twig_get_attribute($this->env, $this->source, $context["items"], "child", [], "any", false, false, false, 41)) : (""));
                // line 42
                echo "\t\t\t\t\t\t\t\t";
                $context["cls"] = (((twig_get_attribute($this->env, $this->source, $context["items"], "sel", [], "any", true, true, false, 42) && (twig_get_attribute($this->env, $this->source, $context["items"], "sel", [], "any", false, false, false, 42) == "sel"))) ? (" ltabs-items-selected ltabs-items-loaded") : (""));
                // line 43
                echo "\t\t\t\t\t\t\t\t";
                $context["cls"] = (($context["cls"] ?? null) . (((twig_get_attribute($this->env, $this->source, $context["items"], "category_id", [], "any", false, false, false, 43) == "*")) ? (" items-category-all") : ((" items-category-" . twig_get_attribute($this->env, $this->source, $context["items"], "category_id", [], "any", false, false, false, 43)))));
                // line 44
                echo "\t\t\t\t\t\t\t\t";
                $context["tab_id"] = ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["list"] ?? null), $context["key"], [], "array", false, true, false, 44), "sel", [], "array", true, true, false, 44)) ? (twig_get_attribute($this->env, $this->source, $context["items"], "category_id", [], "any", false, false, false, 44)) : (""));
                // line 45
                echo "\t\t\t\t\t\t\t\t";
                $context["tab_id"] = (((($context["tab_id"] ?? null) == "*")) ? ("all") : (($context["tab_id"] ?? null)));
                // line 46
                echo "\t\t\t\t\t\t\t\t<div class=\"products-list ltabs-items ";
                echo ($context["cls"] ?? null);
                echo "\" data-total=\"";
                echo twig_get_attribute($this->env, $this->source, $context["items"], "count", [], "any", false, false, false, 46);
                echo "\">
\t\t\t\t\t\t\t\t\t";
                // line 47
                if (($context["child_items"] ?? null)) {
                    // line 48
                    echo "\t\t\t\t\t\t\t\t\t\t";
                    echo twig_include($this->env, $context, (($context["theme_config"] ?? null) . "/template/extension/module/so_listing_tabs/default/default_items.twig"));
                    echo "
\t\t\t\t\t\t\t\t\t";
                } else {
                    // line 50
                    echo "\t\t\t\t\t\t\t\t\t\t<div class=\"ltabs-loading\"></div>
\t\t\t\t\t\t\t\t\t";
                }
                // line 52
                echo "\t\t\t\t\t\t\t\t\t";
                $context["classloaded"] = ((((($context["source_limit"] ?? null) >= twig_get_attribute($this->env, $this->source, $context["items"], "count", [], "any", false, false, false, 52)) || (($context["source_limit"] ?? null) == 0))) ? ("loaded") : (""));
                // line 53
                echo "\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t";
                // line 54
                if ((($context["type_show"] ?? null) == "loadmore")) {
                    // line 55
                    echo "\t\t\t\t\t\t\t\t\t\t<div class=\"ltabs-loadmore\"
\t\t\t\t\t\t\t\t\t\t\t data-active-content=\".items-category-";
                    // line 56
                    echo (((twig_get_attribute($this->env, $this->source, $context["items"], "category_id", [], "any", false, false, false, 56) == "*")) ? ("all") : (twig_get_attribute($this->env, $this->source, $context["items"], "category_id", [], "any", false, false, false, 56)));
                    echo "\"
\t\t\t\t\t\t\t\t\t\t\t data-categoryid\t=\"";
                    // line 57
                    echo twig_get_attribute($this->env, $this->source, $context["items"], "category_id", [], "any", false, false, false, 57);
                    echo "\"
\t\t\t\t\t\t\t\t\t\t\t data-rl_start\t\t=\"";
                    // line 58
                    echo ($context["source_limit"] ?? null);
                    echo "\"
\t\t\t\t\t\t\t\t\t\t\t data-rl_total\t\t=\"";
                    // line 59
                    echo twig_get_attribute($this->env, $this->source, $context["items"], "count", [], "any", false, false, false, 59);
                    echo "\"
\t\t\t\t\t\t\t\t\t\t\t data-rl_allready\t=\"All ready\"
\t\t\t\t\t\t\t\t\t\t\t data-ajaxurl\t\t=\"";
                    // line 61
                    echo ($context["ajaxurl"] ?? null);
                    echo "\" 
\t\t\t\t\t\t\t\t\t\t\t data-rl_load\t\t=\"";
                    // line 62
                    echo ($context["source_limit"] ?? null);
                    echo "\" 
\t\t\t\t\t\t\t\t\t\t\t data-moduleid\t\t='";
                    // line 63
                    echo ($context["moduleid"] ?? null);
                    echo "'
\t\t\t\t\t\t\t\t\t\t\t >
\t\t\t\t\t\t\t\t\t\t\t<div class=\"ltabs-loadmore-btn ";
                    // line 65
                    echo ($context["classloaded"] ?? null);
                    echo "\"
\t\t\t\t\t\t\t\t\t\t\t\t data-label=\"";
                    // line 66
                    echo ((($context["classloaded"] ?? null)) ? (twig_get_attribute($this->env, $this->source, ($context["objlang"] ?? null), "get", [0 => "all_ready"], "method", false, false, false, 66)) : (twig_get_attribute($this->env, $this->source, ($context["objlang"] ?? null), "get", [0 => "load_more"], "method", false, false, false, 66)));
                    echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"ltabs-image-loading\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-plus\"></i>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t";
                }
                // line 72
                echo "\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
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
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['items'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 74
            echo "\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t";
            // line 77
            echo twig_include($this->env, $context, (($context["theme_config"] ?? null) . "/template/extension/module/so_listing_tabs/default/default_js.twig"));
            echo "
\t\t\t";
        } else {
            // line 79
            echo "\t\t\t\t";
            echo twig_get_attribute($this->env, $this->source, ($context["objlang"] ?? null), "get", [0 => "text_noproduct"], "method", false, false, false, 79);
            echo "
\t\t\t";
        }
        // line 81
        echo "\t\t</div>
\t</div> <!-- /.modcontent-->
\t
\t";
        // line 84
        if ( !twig_test_empty(twig_trim_filter(($context["post_text"] ?? null)))) {
            // line 85
            echo "\t\t<div class=\"form-group\">
\t\t\t";
            // line 86
            echo ($context["post_text"] ?? null);
            echo "
\t\t</div>
\t";
        }
        // line 89
        echo "</div>\t";
    }

    public function getTemplateName()
    {
        return "so-buyshop/template/extension/module/so_listing_tabs/default.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  299 => 89,  293 => 86,  290 => 85,  288 => 84,  283 => 81,  277 => 79,  272 => 77,  267 => 74,  252 => 72,  243 => 66,  239 => 65,  234 => 63,  230 => 62,  226 => 61,  221 => 59,  217 => 58,  213 => 57,  209 => 56,  206 => 55,  204 => 54,  201 => 53,  198 => 52,  194 => 50,  188 => 48,  186 => 47,  179 => 46,  176 => 45,  173 => 44,  170 => 43,  167 => 42,  164 => 41,  147 => 40,  144 => 39,  137 => 35,  131 => 34,  128 => 33,  126 => 32,  119 => 28,  114 => 26,  108 => 25,  104 => 24,  100 => 23,  96 => 22,  93 => 21,  91 => 20,  87 => 19,  82 => 17,  77 => 15,  73 => 13,  69 => 11,  65 => 10,  60 => 9,  54 => 6,  51 => 5,  49 => 4,  46 => 3,  44 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "so-buyshop/template/extension/module/so_listing_tabs/default.twig", "/home/azhkhn/public_html/protidin.com.bd/catalog/view/theme/so-buyshop/template/extension/module/so_listing_tabs/default.twig");
    }
}
