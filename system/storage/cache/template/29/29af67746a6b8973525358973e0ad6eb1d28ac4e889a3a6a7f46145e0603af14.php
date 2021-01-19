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

/* so-mobile/template/extension/module/so_listing_tabs/default.twig */
class __TwigTemplate_656838356e784e184f0af803eb4793afffc54a07b64955d990a462f383096654 extends \Twig\Template
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
        echo "\">
\t";
        // line 2
        if ((($context["disp_title_module"] ?? null) || (($context["pre_text"] ?? null) != ""))) {
            // line 3
            echo "\t<h3 class=\"modtitle\">
\t\t";
            // line 4
            if ((($context["pre_text"] ?? null) != "")) {
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
            echo "\t\t";
            if (($context["disp_title_module"] ?? null)) {
                echo "<span>";
                echo ($context["head_name"] ?? null);
                echo "</span>";
            }
            // line 10
            echo "\t</h3>
\t";
        }
        // line 12
        echo "\t<div class=\"modcontent\">
\t\t<!--[if lt IE 9]>
\t\t<div id=\"";
        // line 14
        echo ($context["tag_id"] ?? null);
        echo "\" class=\"so-listing-tabs msie lt-ie9 first-load module\"><![endif]-->
\t\t<!--[if IE 9]>
\t\t<div id=\"";
        // line 16
        echo ($context["tag_id"] ?? null);
        echo "\" class=\"so-listing-tabs msie first-load module\"><![endif]-->
\t\t<!--[if gt IE 9]><!-->
\t\t<div id=\"";
        // line 18
        echo ($context["tag_id"] ?? null);
        echo "\" class=\"so-listing-tabs first-load module\"><!--<![endif]-->
\t\t\t";
        // line 19
        if (twig_length_filter($this->env, ($context["list"] ?? null))) {
            // line 20
            echo "\t\t\t\t<div class=\"ltabs-wrap \">
\t\t\t\t\t<div class=\"ltabs-tabs-container\" data-delay=\"";
            // line 21
            echo ($context["delay"] ?? null);
            echo "\"
\t\t\t\t\t \tdata-duration=\"";
            // line 22
            echo ($context["duration"] ?? null);
            echo "\"
\t\t\t\t\t \tdata-effect=\"";
            // line 23
            echo ($context["effect"] ?? null);
            echo "\"
\t\t\t\t\t \tdata-ajaxurl=\"";
            // line 24
            echo ($context["ajaxurl"] ?? null);
            echo "\" data-type_source=\"";
            echo ($context["type_source"] ?? null);
            echo "\"
\t\t\t\t\t \tdata-type_show=\"";
            // line 25
            echo ($context["type_show"] ?? null);
            echo "\" >
\t\t\t\t\t\t 
\t\t\t\t\t\t";
            // line 27
            echo twig_include($this->env, $context, (($context["theme_config"] ?? null) . "/template/extension/module/so_listing_tabs/default/default_tabs.twig"));
            echo "
\t\t\t\t\t\t
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"wap-listing-tabs products-list grid\">
\t\t\t\t\t\t";
            // line 31
            if ((($context["display_banner_image"] ?? null) == 1)) {
                // line 32
                echo "\t\t\t\t\t\t\t<div class=\"item-cat-image\">
\t\t\t\t\t\t\t\t<a href=\"";
                // line 33
                echo ($context["banner_image_url"] ?? null);
                echo "\" title=\"\" target=\"";
                echo ($context["item_link_target"] ?? null);
                echo "\" >
\t\t\t\t\t\t\t\t\t<img class=\"categories-loadimage\" title=\"\" alt=\"\" src=\"";
                // line 34
                echo ($context["banner_image"] ?? null);
                echo "\"/>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
            }
            // line 38
            echo "\t\t\t\t\t\t<div class=\"ltabs-items-container\">
\t\t\t\t\t\t\t";
            // line 39
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
                // line 40
                echo "\t\t\t\t\t\t\t\t";
                $context["child_items"] = ((twig_get_attribute($this->env, $this->source, $context["items"], "child", [], "any", true, true, false, 40)) ? (twig_get_attribute($this->env, $this->source, $context["items"], "child", [], "any", false, false, false, 40)) : (""));
                // line 41
                echo "\t\t\t\t\t\t\t\t";
                $context["cls"] = (((twig_get_attribute($this->env, $this->source, $context["items"], "sel", [], "any", true, true, false, 41) && (twig_get_attribute($this->env, $this->source, $context["items"], "sel", [], "any", false, false, false, 41) == "sel"))) ? (" ltabs-items-selected ltabs-items-loaded") : (""));
                // line 42
                echo "\t\t\t\t\t\t\t\t";
                $context["cls"] = (($context["cls"] ?? null) . (((twig_get_attribute($this->env, $this->source, $context["items"], "category_id", [], "any", false, false, false, 42) == "*")) ? (" items-category-all") : ((" items-category-" . twig_get_attribute($this->env, $this->source, $context["items"], "category_id", [], "any", false, false, false, 42)))));
                // line 43
                echo "\t\t\t\t\t\t\t\t";
                $context["tab_id"] = ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["list"] ?? null), $context["key"], [], "array", false, true, false, 43), "sel", [], "array", true, true, false, 43)) ? (twig_get_attribute($this->env, $this->source, $context["items"], "category_id", [], "any", false, false, false, 43)) : (""));
                // line 44
                echo "\t\t\t\t\t\t\t\t";
                $context["tab_id"] = (((($context["tab_id"] ?? null) == "*")) ? ("all") : (($context["tab_id"] ?? null)));
                // line 45
                echo "\t\t\t\t\t\t\t\t<div class=\"products-list ltabs-items ";
                echo ($context["cls"] ?? null);
                echo "\" data-total=\"";
                echo twig_get_attribute($this->env, $this->source, $context["items"], "count", [], "any", false, false, false, 45);
                echo "\">
\t\t\t\t\t\t\t\t\t";
                // line 46
                if (($context["child_items"] ?? null)) {
                    // line 47
                    echo "\t\t\t\t\t\t\t\t\t\t";
                    echo twig_include($this->env, $context, (($context["theme_config"] ?? null) . "/template/extension/module/so_listing_tabs/default/default_items.twig"));
                    echo "
\t\t\t\t\t\t\t\t\t";
                } else {
                    // line 49
                    echo "\t\t\t\t\t\t\t\t\t\t<div class=\"ltabs-loading\"></div>
\t\t\t\t\t\t\t\t\t";
                }
                // line 51
                echo "\t\t\t\t\t\t\t\t\t";
                $context["classloaded"] = ((((($context["source_limit"] ?? null) >= twig_get_attribute($this->env, $this->source, $context["items"], "count", [], "any", false, false, false, 51)) || (($context["source_limit"] ?? null) == 0))) ? ("loaded") : (""));
                // line 52
                echo "\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t";
                // line 53
                if ((($context["type_show"] ?? null) == "loadmore")) {
                    // line 54
                    echo "\t\t\t\t\t\t\t\t\t\t<div class=\"ltabs-loadmore\"
\t\t\t\t\t\t\t\t\t\t\t data-active-content=\".items-category-";
                    // line 55
                    echo (((twig_get_attribute($this->env, $this->source, $context["items"], "category_id", [], "any", false, false, false, 55) == "*")) ? ("all") : (twig_get_attribute($this->env, $this->source, $context["items"], "category_id", [], "any", false, false, false, 55)));
                    echo "\"
\t\t\t\t\t\t\t\t\t\t\t data-categoryid\t=\"";
                    // line 56
                    echo twig_get_attribute($this->env, $this->source, $context["items"], "category_id", [], "any", false, false, false, 56);
                    echo "\"
\t\t\t\t\t\t\t\t\t\t\t data-rl_start\t\t=\"";
                    // line 57
                    echo ($context["source_limit"] ?? null);
                    echo "\"
\t\t\t\t\t\t\t\t\t\t\t data-rl_total\t\t=\"";
                    // line 58
                    echo twig_get_attribute($this->env, $this->source, $context["items"], "count", [], "any", false, false, false, 58);
                    echo "\"
\t\t\t\t\t\t\t\t\t\t\t data-rl_allready\t=\"All ready\"
\t\t\t\t\t\t\t\t\t\t\t data-ajaxurl\t\t=\"";
                    // line 60
                    echo ($context["ajaxurl"] ?? null);
                    echo "\" 
\t\t\t\t\t\t\t\t\t\t\t data-rl_load\t\t=\"";
                    // line 61
                    echo ($context["source_limit"] ?? null);
                    echo "\" 
\t\t\t\t\t\t\t\t\t\t\t data-moduleid\t\t='";
                    // line 62
                    echo ($context["moduleid"] ?? null);
                    echo "'
\t\t\t\t\t\t\t\t\t\t\t >
\t\t\t\t\t\t\t\t\t\t\t<div class=\"ltabs-loadmore-btn ";
                    // line 64
                    echo ($context["classloaded"] ?? null);
                    echo "\"
\t\t\t\t\t\t\t\t\t\t\t\t data-label=\"";
                    // line 65
                    echo ((($context["classloaded"] ?? null)) ? (twig_get_attribute($this->env, $this->source, ($context["objlang"] ?? null), "get", [0 => "all_ready"], "method", false, false, false, 65)) : (twig_get_attribute($this->env, $this->source, ($context["objlang"] ?? null), "get", [0 => "load_more"], "method", false, false, false, 65)));
                    echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"ltabs-image-loading\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-plus\"></i>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t";
                }
                // line 71
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
            // line 73
            echo "\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t";
            // line 76
            echo twig_include($this->env, $context, (($context["theme_config"] ?? null) . "/template/extension/module/so_listing_tabs/default/default_js.twig"));
            echo "
\t\t\t";
        } else {
            // line 78
            echo "\t\t\t\t";
            echo twig_get_attribute($this->env, $this->source, ($context["objlang"] ?? null), "get", [0 => "text_noproduct"], "method", false, false, false, 78);
            echo "
\t\t\t";
        }
        // line 80
        echo "\t\t</div>
\t</div> <!-- /.modcontent-->
\t
\t";
        // line 83
        if ((($context["post_text"] ?? null) != "")) {
            // line 84
            echo "\t\t<div class=\"form-group\">
\t\t\t";
            // line 85
            echo ($context["post_text"] ?? null);
            echo "
\t\t</div>
\t";
        }
        // line 88
        echo "</div>\t";
    }

    public function getTemplateName()
    {
        return "so-mobile/template/extension/module/so_listing_tabs/default.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  297 => 88,  291 => 85,  288 => 84,  286 => 83,  281 => 80,  275 => 78,  270 => 76,  265 => 73,  250 => 71,  241 => 65,  237 => 64,  232 => 62,  228 => 61,  224 => 60,  219 => 58,  215 => 57,  211 => 56,  207 => 55,  204 => 54,  202 => 53,  199 => 52,  196 => 51,  192 => 49,  186 => 47,  184 => 46,  177 => 45,  174 => 44,  171 => 43,  168 => 42,  165 => 41,  162 => 40,  145 => 39,  142 => 38,  135 => 34,  129 => 33,  126 => 32,  124 => 31,  117 => 27,  112 => 25,  106 => 24,  102 => 23,  98 => 22,  94 => 21,  91 => 20,  89 => 19,  85 => 18,  80 => 16,  75 => 14,  71 => 12,  67 => 10,  60 => 9,  54 => 6,  51 => 5,  49 => 4,  46 => 3,  44 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "so-mobile/template/extension/module/so_listing_tabs/default.twig", "/home/azhkhn/public_html/protidin.com.bd/catalog/view/theme/so-mobile/template/extension/module/so_listing_tabs/default.twig");
    }
}
