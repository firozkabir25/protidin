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

/* so-buyshop/template/soconfig/related_product.twig */
class __TwigTemplate_1b59cbec66f837a0f7a01337ba86f41c3e20c7b7c4960e4e6167efe97849e185 extends \Twig\Template
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
        // line 10
        if (($context["url_thumbgallery"] ?? null)) {
            echo " ";
            $context["thumbgallery"] = ($context["url_thumbgallery"] ?? null);
        } else {
            // line 11
            echo " ";
            $context["thumbgallery"] = twig_get_attribute($this->env, $this->source, ($context["soconfig"] ?? null), "get_settings", [0 => "card_gallery"], "method", false, false, false, 11);
        }
        // line 12
        echo "
";
        // line 13
        if (($context["url_cartinfo"] ?? null)) {
            echo " ";
            $context["cartinfo"] = ($context["url_cartinfo"] ?? null);
        } else {
            // line 14
            echo " ";
            $context["cartinfo"] = twig_get_attribute($this->env, $this->source, ($context["soconfig"] ?? null), "get_settings", [0 => "desktop_addcart_position"], "method", false, false, false, 14);
        }
        // line 15
        echo "
";
        // line 17
        $context["related_col_lg"] = twig_get_attribute($this->env, $this->source, ($context["soconfig"] ?? null), "get_settings", [0 => "product_related_column_lg"], "method", false, false, false, 17);
        // line 18
        $context["related_col_md"] = twig_get_attribute($this->env, $this->source, ($context["soconfig"] ?? null), "get_settings", [0 => "product_related_column_md"], "method", false, false, false, 18);
        // line 19
        $context["related_col_sm"] = twig_get_attribute($this->env, $this->source, ($context["soconfig"] ?? null), "get_settings", [0 => "product_related_column_sm"], "method", false, false, false, 19);
        // line 20
        $context["related_col_xs"] = twig_get_attribute($this->env, $this->source, ($context["soconfig"] ?? null), "get_settings", [0 => "product_related_column_xs"], "method", false, false, false, 20);
        // line 21
        echo "
<div class=\"clearfix module related-horizontal \">
\t<h3 class=\"modtitle hidden\"><span>";
        // line 23
        echo ($context["text_related"] ?? null);
        echo " </span></h3>
\t
    <div class=\"related-products products-list  contentslider\" data-rtl=\"";
        // line 25
        echo ($context["direction"] ?? null);
        echo "\" data-autoplay=\"no\"  data-pagination=\"no\" data-delay=\"4\" data-speed=\"0.6\" data-margin=\"30\"  data-items_column0=\"";
        echo ($context["related_col_lg"] ?? null);
        echo "\" data-items_column1=\"";
        echo ($context["related_col_md"] ?? null);
        echo "\" data-items_column2=\"";
        echo ($context["related_col_sm"] ?? null);
        echo "\"
\t\t\tdata-items_column3=\"";
        // line 26
        echo ($context["related_col_xs"] ?? null);
        echo "\" data-items_column4=\"1\" data-arrows=\"yes\" data-lazyload=\"yes\" data-loop=\"no\" data-hoverpause=\"yes\">
\t\t<!-- Products list -->
\t\t";
        // line 28
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            echo " 

\t\t";
            // line 31
            echo "\t\t";
            if ((($context["cartinfo"] ?? null) == "right")) {
                // line 32
                echo "\t\t";
                $context["class_cart_info"] = "cartinfo--right";
                // line 33
                echo "\t\t";
            } elseif ((($context["cartinfo"] ?? null) == "bottom")) {
                // line 34
                echo "\t\t\t";
                $context["class_cart_info"] = "cartinfo--static";
                // line 35
                echo "\t\t";
            } elseif ((($context["cartinfo"] ?? null) == "center")) {
                // line 36
                echo "\t\t\t";
                $context["class_cart_info"] = "cartinfo--center";
                // line 37
                echo "\t\t";
            } else {
                // line 38
                echo "\t\t\t";
                $context["class_cart_info"] = "cartinfo--left";
                // line 39
                echo "\t\t";
            }
            // line 40
            echo "            <div class=\"product-layout product-grid\">
\t\t\t  \t<div class=\"product-item-container \">
\t\t\t\t\t<div class=\"left-block\">
\t\t\t\t\t\t<div class=\"product-image-container\">
\t\t\t\t\t\t\t<div class=\"image\">
\t\t\t\t\t\t\t\t<a href=\"";
            // line 45
            echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 45);
            echo " \" title=\"";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 45);
            echo " \">
\t\t\t\t\t\t\t\t\t<img data-sizes=\"auto\" src=\"data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==\" data-src=\"";
            // line 46
            echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 46);
            echo " \"  title=\"";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 46);
            echo " \" 
\t\t\t\t\t\t\t\t\tclass=\"lazyload img-responsive\" alt=\"";
            // line 47
            echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 47);
            echo "\" />
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t
\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t<div class=\"box-label\">
\t\t\t\t\t\t\t";
            // line 55
            echo "\t\t\t\t\t\t\t";
            if (twig_get_attribute($this->env, $this->source, ($context["soconfig"] ?? null), "get_settings", [0 => "discount_status"], "method", false, false, false, 55)) {
                echo " 
\t\t\t\t\t\t\t";
                // line 56
                if ((twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 56) && twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 56))) {
                    echo " 
\t\t\t\t\t\t\t\t<span class=\"label-product label-sale\">
\t\t\t\t\t\t\t\t\t ";
                    // line 58
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "discount", [], "any", false, false, false, 58);
                    echo "
\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t";
                }
                // line 60
                echo " 
\t\t\t\t\t\t\t";
            }
            // line 61
            echo " 
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"button-group cartinfo--center\">
\t\t\t\t\t\t\t";
            // line 65
            if (twig_get_attribute($this->env, $this->source, ($context["soconfig"] ?? null), "get_settings", [0 => "desktop_addcart_status"], "method", false, false, false, 65)) {
                // line 66
                echo "\t\t\t\t\t\t\t\t<div class=\"btn-addToCart\">
\t\t\t\t\t\t\t\t<button class=\"addToCart btn-button\" type=\"button\" title=\"";
                // line 67
                echo ($context["button_cart"] ?? null);
                echo "\" onclick=\"cart.add('";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 67);
                echo "', '";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "minimum", [], "any", false, false, false, 67);
                echo "');\"><i class=\"fa fa-shopping-cart\"></i><span>";
                echo ($context["button_cart"] ?? null);
                echo "</span></button>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
            }
            // line 69
            echo " 
\t\t\t\t\t\t\t";
            // line 70
            if (twig_get_attribute($this->env, $this->source, ($context["soconfig"] ?? null), "get_settings", [0 => "desktop_wishlist_status"], "method", false, false, false, 70)) {
                // line 71
                echo "\t\t\t\t\t\t\t\t<button class=\"wishlist btn-button\" type=\"button\" title=\"";
                echo ($context["button_wishlist"] ?? null);
                echo "\" onclick=\"wishlist.add('";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 71);
                echo "');\"><i class=\"fa fa-heart-o\"></i></button>
\t\t\t\t\t\t\t";
            }
            // line 72
            echo " 
\t\t\t\t\t\t\t";
            // line 73
            if (twig_get_attribute($this->env, $this->source, ($context["soconfig"] ?? null), "get_settings", [0 => "desktop_Compare_status"], "method", false, false, false, 73)) {
                // line 74
                echo "\t\t\t\t\t\t\t<button class=\"compare btn-button\" type=\"button\" title=\"";
                echo ($context["button_compare"] ?? null);
                echo "\" onclick=\"compare.add('";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 74);
                echo "');\"><i class=\"fa fa-refresh\"></i></button>
\t\t\t\t\t\t\t";
            }
            // line 75
            echo " 
\t\t\t\t\t\t\t<a class=\"quickview iframe-link visible-lg btn-button\" title=\"";
            // line 76
            echo twig_get_attribute($this->env, $this->source, ($context["objlang"] ?? null), "get", [0 => "text_quickview"], "method", false, false, false, 76);
            echo "\" data-fancybox-type=\"iframe\"  href=\"";
            echo twig_get_attribute($this->env, $this->source, ($context["our_url"] ?? null), "link", [0 => "extension/soconfig/quickview", 1 => ("product_id=" . twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 76))], "method", false, false, false, 76);
            echo "\"> <i class=\"fa fa-search\"></i><span>";
            echo ($context["text_quickview"] ?? null);
            echo "</span> </a>
\t\t\t\t\t\t</div>
\t\t\t\t\t

\t\t\t\t\t</div>
\t\t\t\t\t 
\t\t\t\t\t<div class=\"right-block\">
\t\t\t\t\t\t
\t\t\t\t\t\t\t<h4><a href=\"";
            // line 84
            echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 84);
            echo " \">";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 84);
            echo " </a></h4>

\t\t\t\t\t\t\t";
            // line 86
            if (twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 86)) {
                echo " 
\t\t\t\t\t\t\t<div class=\"price\">
\t\t\t\t\t\t\t\t";
                // line 88
                if ( !twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 88)) {
                    echo " 
\t\t\t\t\t\t\t\t\t<span class=\"price-new\">";
                    // line 89
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 89);
                    echo " </span>
\t\t\t\t\t\t\t\t";
                } else {
                    // line 90
                    echo "   
\t\t\t\t\t\t\t\t\t<span class=\"price-new\">";
                    // line 91
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 91);
                    echo " </span> <span class=\"price-old\">";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 91);
                    echo " </span>
\t\t\t\t\t\t\t\t";
                }
                // line 92
                echo " 
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
            }
            // line 94
            echo " 

\t\t\t\t\t\t\t";
            // line 96
            if (twig_get_attribute($this->env, $this->source, ($context["soconfig"] ?? null), "get_settings", [0 => "rating_status"], "method", false, false, false, 96)) {
                echo " 
\t\t\t\t\t\t\t<div class=\"ratings\">
\t\t\t\t\t\t\t\t<div class=\"rating-box\">
\t\t\t\t\t\t\t\t";
                // line 99
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(range(1, 5));
                foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                    // line 100
                    echo "\t\t\t\t\t\t\t\t";
                    if ((twig_get_attribute($this->env, $this->source, $context["product"], "rating", [], "any", false, false, false, 100) < $context["i"])) {
                        echo " 
\t\t\t\t\t\t\t\t\t<span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-1x\"></i></span>
\t\t\t\t\t\t\t\t";
                    } else {
                        // line 102
                        echo "   
\t\t\t\t\t\t\t\t\t<span class=\"fa fa-stack\"><i class=\"fa fa-star fa-stack-1x\"></i><i class=\"fa fa-star-o fa-stack-1x\"></i></span>
\t\t\t\t\t\t\t\t";
                    }
                    // line 104
                    echo " 
\t\t\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 106
                echo "
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
            }
            // line 109
            echo " 
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t
\t\t\t\t\t\t
\t\t\t\t\t\t
\t\t\t\t\t</div>
\t\t\t\t</div>
            </div>
     ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 117
        echo " 
    </div>
\t
</div>

";
    }

    public function getTemplateName()
    {
        return "so-buyshop/template/soconfig/related_product.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  332 => 117,  318 => 109,  312 => 106,  305 => 104,  300 => 102,  293 => 100,  289 => 99,  283 => 96,  279 => 94,  274 => 92,  267 => 91,  264 => 90,  259 => 89,  255 => 88,  250 => 86,  243 => 84,  228 => 76,  225 => 75,  217 => 74,  215 => 73,  212 => 72,  204 => 71,  202 => 70,  199 => 69,  187 => 67,  184 => 66,  182 => 65,  176 => 61,  172 => 60,  166 => 58,  161 => 56,  156 => 55,  146 => 47,  140 => 46,  134 => 45,  127 => 40,  124 => 39,  121 => 38,  118 => 37,  115 => 36,  112 => 35,  109 => 34,  106 => 33,  103 => 32,  100 => 31,  93 => 28,  88 => 26,  78 => 25,  73 => 23,  69 => 21,  67 => 20,  65 => 19,  63 => 18,  61 => 17,  58 => 15,  54 => 14,  49 => 13,  46 => 12,  42 => 11,  37 => 10,);
    }

    public function getSourceContext()
    {
        return new Source("", "so-buyshop/template/soconfig/related_product.twig", "/home/azhkhn/public_html/protidin.com.bd/catalog/view/theme/so-buyshop/template/soconfig/related_product.twig");
    }
}
