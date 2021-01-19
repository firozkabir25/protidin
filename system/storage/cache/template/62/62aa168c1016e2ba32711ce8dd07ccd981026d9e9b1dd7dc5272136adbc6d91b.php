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

/* so-buyshop/template/extension/module/so_listing_tabs/category/default_tabs.twig */
class __TwigTemplate_9ce55c4d18555175865e6691a820b824a43635c0ea3b8c5f330a545c87b3a0d5 extends \Twig\Template
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
        echo "<div class=\"ltabs-tabs-wrap\">
\t<span class='ltabs-tab-selected'></span>
\t<span class=\"ltabs-tab-arrow\">▼</span>
\t<ul class=\"ltabs-tabs cf list-sub-cat font-title\">

\t\t";
        // line 6
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["list"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["tab"]) {
            // line 7
            echo "\t\t
\t\t\t";
            // line 8
            if ((($context["type_source"] ?? null) == "0")) {
                // line 9
                echo "\t\t\t\t<li class=\"ltabs-tab ";
                echo ((twig_get_attribute($this->env, $this->source, $context["tab"], "sel", [], "any", true, true, false, 9)) ? ("  tab-sel tab-loaded") : (""));
                echo " ";
                echo (((twig_get_attribute($this->env, $this->source, $context["tab"], "category_id", [], "any", false, false, false, 9) == "*")) ? (" tab-all") : (""));
                echo "\"
\t\t\t\t\tdata-category-id=\"";
                // line 10
                echo twig_get_attribute($this->env, $this->source, $context["tab"], "category_id", [], "any", false, false, false, 10);
                echo "\"
\t\t\t\t\tdata-active-content-l=\".items-category-";
                // line 11
                echo (((twig_get_attribute($this->env, $this->source, $context["tab"], "category_id", [], "any", false, false, false, 11) == "*")) ? ("all") : (twig_get_attribute($this->env, $this->source, $context["tab"], "category_id", [], "any", false, false, false, 11)));
                echo "\"  
\t\t\t\t\t>
\t\t\t\t";
                // line 13
                if ((($context["tab_icon_display"] ?? null) == "1")) {
                    // line 14
                    echo "\t\t\t\t\t";
                    if ((twig_get_attribute($this->env, $this->source, $context["tab"], "category_id", [], "any", false, false, false, 14) != "*")) {
                        // line 15
                        echo "\t\t\t\t\t\t<div class=\"ltabs-tab-img\">
\t\t\t\t\t\t\t<img src=\"";
                        // line 16
                        echo twig_get_attribute($this->env, $this->source, $context["tab"], "icon_image", [], "any", false, false, false, 16);
                        echo "\"
\t\t\t\t\t\t\t\t title=\"";
                        // line 17
                        echo twig_get_attribute($this->env, $this->source, $context["tab"], "name", [], "any", false, false, false, 17);
                        echo "\" alt=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["tab"], "name", [], "any", false, false, false, 17);
                        echo "\"
\t\t\t\t\t\t\t\t style=\"width: ";
                        // line 18
                        echo ($context["imgcfgcat_width"] ?? null);
                        echo "px; height:";
                        echo ($context["imgcfgcat_height"] ?? null);
                        echo "px;background:#fff\"/>
\t\t\t\t\t\t</div>
\t\t\t\t\t";
                    } else {
                        // line 21
                        echo "\t\t\t\t\t\t<div class=\"ltabs-tab-img\">
\t\t\t\t\t\t\t<img src=\"catalog/view/javascript/so_listing_tabs/images/icon-catall.png\"
\t\t\t\t\t\t\t\t title=\"";
                        // line 23
                        echo twig_get_attribute($this->env, $this->source, $context["tab"], "name", [], "any", false, false, false, 23);
                        echo "\" alt=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["tab"], "name", [], "any", false, false, false, 23);
                        echo "\"
\t\t\t\t\t\t\t\t style=\"width: 30px; height:74px; background:#fff\"/>
\t\t\t\t\t\t</div>
\t\t\t\t\t";
                    }
                    // line 27
                    echo "\t\t\t\t";
                }
                // line 28
                echo "\t\t\t\t\t<span class=\"ltabs-tab-label\">
\t\t\t\t\t\t";
                // line 29
                if (((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tab"], "name", [], "any", false, false, false, 29)) > ($context["tab_max_characters"] ?? null)) && (($context["tab_max_characters"] ?? null) != "0"))) {
                    // line 30
                    echo "\t\t\t\t\t\t\t";
                    echo (twig_slice($this->env, strip_tags(twig_get_attribute($this->env, $this->source, $context["tab"], "name", [], "any", false, false, false, 30)), 0, ($context["tab_max_characters"] ?? null)) . "..");
                    echo "
\t\t\t\t\t\t";
                } else {
                    // line 32
                    echo "\t\t\t\t\t\t\t";
                    echo twig_get_attribute($this->env, $this->source, $context["tab"], "name", [], "any", false, false, false, 32);
                    echo "
\t\t\t\t\t\t";
                }
                // line 34
                echo "\t\t\t\t\t</span>
\t\t\t\t</li>
\t\t\t";
            } else {
                // line 37
                echo "\t\t\t\t<li class=\"ltabs-tab ";
                echo ((twig_get_attribute($this->env, $this->source, $context["tab"], "sel", [], "any", true, true, false, 37)) ? ("  tab-sel tab-loaded") : (""));
                echo " ";
                echo (((twig_get_attribute($this->env, $this->source, $context["tab"], "category_id", [], "any", false, false, false, 37) == "*")) ? (" tab-all") : (""));
                echo "\"
\t\t\t\t\tdata-category-id=\"";
                // line 38
                echo twig_get_attribute($this->env, $this->source, $context["tab"], "category_id", [], "any", false, false, false, 38);
                echo "\"
\t\t\t\t\tdata-active-content-l=\".items-category-";
                // line 39
                echo twig_get_attribute($this->env, $this->source, $context["tab"], "category_id", [], "any", false, false, false, 39);
                echo "\">
\t\t\t\t\t<span class=\"ltabs-tab-label\">
\t\t\t\t\t\t";
                // line 41
                if (((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tab"], "title", [], "any", false, false, false, 41)) > ($context["tab_max_characters"] ?? null)) && (($context["tab_max_characters"] ?? null) != "0"))) {
                    // line 42
                    echo "\t\t\t\t\t\t\t";
                    echo (twig_slice($this->env, strip_tags(twig_get_attribute($this->env, $this->source, $context["tab"], "title", [], "any", false, false, false, 42)), 0, ($context["tab_max_characters"] ?? null)) . "..");
                    echo "
\t\t\t\t\t\t";
                } else {
                    // line 44
                    echo "\t\t\t\t\t\t\t";
                    echo twig_get_attribute($this->env, $this->source, $context["tab"], "title", [], "any", false, false, false, 44);
                    echo "
\t\t\t\t\t\t";
                }
                // line 46
                echo "\t\t\t\t\t</span>
\t\t\t\t</li>
\t\t\t";
            }
            // line 49
            echo "\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tab'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 50
        echo "\t</ul>
</div>
";
    }

    public function getTemplateName()
    {
        return "so-buyshop/template/extension/module/so_listing_tabs/category/default_tabs.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  174 => 50,  168 => 49,  163 => 46,  157 => 44,  151 => 42,  149 => 41,  144 => 39,  140 => 38,  133 => 37,  128 => 34,  122 => 32,  116 => 30,  114 => 29,  111 => 28,  108 => 27,  99 => 23,  95 => 21,  87 => 18,  81 => 17,  77 => 16,  74 => 15,  71 => 14,  69 => 13,  64 => 11,  60 => 10,  53 => 9,  51 => 8,  48 => 7,  44 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "so-buyshop/template/extension/module/so_listing_tabs/category/default_tabs.twig", "/home/azhkhn/public_html/protidin.com.bd/catalog/view/theme/so-buyshop/template/extension/module/so_listing_tabs/category/default_tabs.twig");
    }
}
