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

/* so-buyshop/template/extension/module/so_listing_tabs/default/default_items.twig */
class __TwigTemplate_e7e85f8a464da43a774cd3d337f204e446b80051d6de354217d767f2db7db102 extends \Twig\Template
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
        if ((($context["type_show"] ?? null) == "slider")) {
            // line 2
            echo "\t\t<div class=\"ltabs-items-inner owl2-carousel  ltabs-slider \">
";
        } else {
            // line 4
            echo "\t\t<div class=\"ltabs-items-inner ";
            echo (((($context["type_show"] ?? null) == "loadmore")) ? (((($context["class_ltabs"] ?? null) . " ") . ($context["effect"] ?? null))) : (" "));
            echo "\">
";
        }
        // line 6
        if ( !twig_test_empty(($context["child_items"] ?? null))) {
            // line 7
            echo "\t";
            $context["i"] = 0;
            // line 8
            echo "\t";
            $context["k"] = (((isset($context["rl_loaded"]) || array_key_exists("rl_loaded", $context))) ? (($context["rl_loaded"] ?? null)) : (0));
            // line 9
            echo "\t";
            $context["count"] = twig_length_filter($this->env, ($context["child_items"] ?? null));
            // line 10
            echo "\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["child_items"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 11
                echo "\t\t\t";
                $context["i"] = (($context["i"] ?? null) + 1);
                // line 12
                echo "\t\t\t";
                $context["k"] = (($context["k"] ?? null) + 1);
                // line 13
                echo "\t\t\t
\t\t\t";
                // line 14
                if (((($context["type_show"] ?? null) == "slider") && (((($context["i"] ?? null) % ($context["nb_rows"] ?? null)) == 1) || (($context["nb_rows"] ?? null) == 1)))) {
                    // line 15
                    echo "\t\t\t\t<div class=\"ltabs-item \">
\t\t\t";
                }
                // line 17
                echo "\t\t\t";
                if ((($context["type_show"] ?? null) == "loadmore")) {
                    // line 18
                    echo "\t\t\t\t<div class=\"ltabs-item new-ltabs-item\" >
\t\t\t";
                }
                // line 19
                echo "\t\t\t
\t\t\t<div class=\"item-inner product-layout transition product-grid\">

\t\t\t\t<div class=\"product-item-container\">
\t\t\t\t\t<div class=\"left-block\">\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t";
                // line 24
                if (($context["product_image"] ?? null)) {
                    echo "\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<div class=\"product-image-container ";
                    // line 25
                    if ((($context["product_image_num"] ?? null) == 2)) {
                        echo " ";
                        echo "second_img";
                        echo " ";
                    }
                    echo "\t\">
\t\t\t\t\t\t\t\t<a href=\"";
                    // line 26
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 26);
                    echo "\" data-product='";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 26);
                    echo "' target=\"";
                    echo ($context["item_link_target"] ?? null);
                    echo "\" title=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "name_maxlength", [], "any", false, false, false, 26);
                    echo "\"  >
\t\t\t\t\t\t\t\t\t";
                    // line 27
                    if ((($context["product_image_num"] ?? null) == 2)) {
                        // line 28
                        echo "\t\t\t\t\t\t\t\t\t\t<img data-sizes=\"auto\" src=\"data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==\" data-src=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 28);
                        echo "\" class=\"img-1 lazyload\" alt=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 28);
                        echo "\">
\t\t\t\t\t\t\t\t\t\t<img data-sizes=\"auto\" src=\"data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==\" data-src=\"";
                        // line 29
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb2", [], "any", false, false, false, 29);
                        echo "\" class=\"img-2 lazyload\" alt=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 29);
                        echo "\">
\t\t\t\t\t\t\t\t\t";
                    } else {
                        // line 31
                        echo "\t\t\t\t\t\t\t\t\t\t<img data-sizes=\"auto\" src=\"data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==\" data-src=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 31);
                        echo "\" alt=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 31);
                        echo "\" class=\"lazyload\">
\t\t\t\t\t\t\t\t\t";
                    }
                    // line 32
                    echo "\t\t
\t\t\t\t\t\t\t\t</a>\t\t\t\t\t\t
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
                }
                // line 35
                echo "\t
\t\t\t\t\t\t<div class=\"box-label\">
\t\t\t\t\t\t\t";
                // line 37
                if ((twig_get_attribute($this->env, $this->source, $context["product"], "productNew", [], "any", false, false, false, 37) && ($context["display_new"] ?? null))) {
                    // line 38
                    echo "\t\t\t\t\t\t\t\t<span class=\"label-product label-new\">";
                    echo twig_get_attribute($this->env, $this->source, ($context["objlang"] ?? null), "get", [0 => "text_new"], "method", false, false, false, 38);
                    echo "</span>
\t\t\t\t\t\t\t";
                }
                // line 40
                echo "\t\t\t\t\t\t\t";
                if ((twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 40) && ($context["display_sale"] ?? null))) {
                    // line 41
                    echo "\t\t\t\t\t\t\t\t<span class=\"label-product label-sale\">";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "discount", [], "any", false, false, false, 41);
                    echo " \t</span>
\t\t\t\t\t\t\t";
                }
                // line 43
                echo "\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
                // line 44
                if (((($context["display_add_to_cart"] ?? null) || ($context["display_compare"] ?? null)) || ($context["display_wishlist"] ?? null))) {
                    // line 45
                    echo "\t\t\t\t\t\t<div class=\"button-group so-quickview\">\t\t\t\t\t\t\t

\t\t\t\t\t\t\t";
                    // line 47
                    if (($context["display_wishlist"] ?? null)) {
                        echo " 
\t\t\t\t\t\t\t<button type=\"button\" class=\"wishlist btn-button\" title=\"";
                        // line 48
                        echo twig_get_attribute($this->env, $this->source, ($context["objlang"] ?? null), "get", [0 => "button_wishlist"], "method", false, false, false, 48);
                        echo "\" onclick=\"wishlist.add('";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 48);
                        echo "');\"><i class=\"fa fa-heart-o\"></i><span>";
                        echo twig_get_attribute($this->env, $this->source, ($context["objlang"] ?? null), "get", [0 => "button_wishlist"], "method", false, false, false, 48);
                        echo "</span></button>
\t\t\t\t\t\t\t";
                    }
                    // line 49
                    echo " 

\t\t\t\t\t\t\t";
                    // line 51
                    if (($context["display_compare"] ?? null)) {
                        echo " 
\t\t\t\t\t\t\t<button type=\"button\" class=\"compare btn-button\" title=\"";
                        // line 52
                        echo twig_get_attribute($this->env, $this->source, ($context["objlang"] ?? null), "get", [0 => "button_compare"], "method", false, false, false, 52);
                        echo " \" onclick=\"compare.add('";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 52);
                        echo "');\"><i class=\"fa fa-refresh\"></i><span>";
                        echo twig_get_attribute($this->env, $this->source, ($context["objlang"] ?? null), "get", [0 => "button_compare"], "method", false, false, false, 52);
                        echo "</span></button>
\t\t\t\t\t\t\t";
                    }
                    // line 54
                    echo "\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<a class=\"hidden\" data-product='";
                    // line 55
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 55);
                    echo "' href=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "link", [], "any", false, false, false, 55);
                    echo "\"></a>

\t\t\t\t\t\t\t";
                    // line 57
                    if (($context["display_add_to_cart"] ?? null)) {
                        echo " 
\t\t\t\t\t\t\t<div class=\"btn-addToCart\">
\t\t\t\t\t\t\t\t<button type=\"button\" class=\"addToCart btn-button\" title=\"";
                        // line 59
                        echo twig_get_attribute($this->env, $this->source, ($context["objlang"] ?? null), "get", [0 => "button_cart"], "method", false, false, false, 59);
                        echo "\" onclick=\"cart.add('";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 59);
                        echo " ');\">
\t\t\t\t\t\t\t\t\t<i class=\"fa fa-shopping-cart\"></i> 
\t\t\t\t\t\t\t\t\t<span>";
                        // line 61
                        echo twig_get_attribute($this->env, $this->source, ($context["objlang"] ?? null), "get", [0 => "button_cart"], "method", false, false, false, 61);
                        echo " </span>\t\t\t\t\t\t
\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
                    }
                    // line 65
                    echo "\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
                }
                // line 66
                echo " 

\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"right-block\">
\t\t\t\t\t\t
\t\t\t\t\t\t";
                // line 71
                if ((((($context["display_title"] ?? null) || ($context["display_description"] ?? null)) || ($context["display_price"] ?? null)) || ($context["display_rating"] ?? null))) {
                    // line 72
                    echo "\t\t\t\t\t\t<div class=\"caption\">
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t

\t\t\t\t\t\t\t";
                    // line 76
                    if (($context["display_title"] ?? null)) {
                        // line 77
                        echo "\t\t\t\t\t\t\t\t<h4><a href=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 77);
                        echo "\" title=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 77);
                        echo "\" target=\"";
                        echo ($context["item_link_target"] ?? null);
                        echo "\">";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "name_maxlength", [], "any", false, false, false, 77);
                        echo "</a></h4>
\t\t\t\t\t\t\t";
                    }
                    // line 79
                    echo "\t\t\t\t\t\t\t
\t\t\t\t\t\t\t";
                    // line 80
                    if ((twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 80) && ($context["display_price"] ?? null))) {
                        // line 81
                        echo "\t\t\t\t\t\t\t\t<div class=\"price\">
\t\t\t\t\t\t\t\t  \t";
                        // line 82
                        if (twig_test_empty(twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 82))) {
                            // line 83
                            echo "\t\t\t\t\t\t\t\t  \t\t";
                            echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 83);
                            echo "
\t\t\t\t\t\t\t\t  \t";
                        } else {
                            // line 85
                            echo "\t\t\t\t\t\t\t\t  \t\t<span class=\"price-old\">";
                            echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 85);
                            echo "</span>
\t\t\t\t\t\t\t\t  \t\t<span class=\"price-new\">";
                            // line 86
                            echo twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 86);
                            echo "</span>
\t\t\t\t\t\t\t\t  \t\t
\t\t\t\t\t\t\t\t  \t";
                        }
                        // line 89
                        echo "\t\t\t\t\t\t\t\t  \t";
                        if (twig_get_attribute($this->env, $this->source, $context["product"], "tax", [], "any", false, false, false, 89)) {
                            // line 90
                            echo "\t\t\t\t\t\t\t\t  \t\t<span class=\"price-tax hidden\">";
                            echo twig_get_attribute($this->env, $this->source, ($context["objlang"] ?? null), "get", [0 => "text_tax"], "method", false, false, false, 90);
                            echo " ";
                            echo twig_get_attribute($this->env, $this->source, $context["product"], "tax", [], "any", false, false, false, 90);
                            echo "</span>
\t\t\t\t\t\t\t\t  \t";
                        }
                        // line 92
                        echo "\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
                    }
                    // line 93
                    echo "\t\t\t
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t";
                    // line 95
                    if (($context["display_rating"] ?? null)) {
                        // line 96
                        echo "\t\t\t\t\t\t\t\t<div class=\"rating\">
\t\t\t\t\t\t\t\t\t<div class=\"rating-box\">
\t\t\t\t\t\t\t\t  \t";
                        // line 98
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(range(1, 5));
                        foreach ($context['_seq'] as $context["_key"] => $context["j"]) {
                            // line 99
                            echo "\t\t\t\t\t\t\t\t  \t\t";
                            if ((twig_get_attribute($this->env, $this->source, $context["product"], "rating", [], "any", false, false, false, 99) < $context["j"])) {
                                // line 100
                                echo "\t\t\t\t\t\t\t\t  \t\t\t<span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-2x\"></i></span>
\t\t\t\t\t\t\t\t  \t\t";
                            } else {
                                // line 102
                                echo "\t\t\t\t\t\t\t\t  \t\t\t<span class=\"fa fa-stack\"><i class=\"fa fa-star fa-stack-2x\"></i><i class=\"fa fa-star-o fa-stack-2x\"></i></span>
\t\t\t\t\t\t\t\t  \t\t";
                            }
                            // line 104
                            echo "\t\t\t\t\t\t\t\t  \t";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['j'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 105
                        echo "\t\t\t\t\t\t\t\t  \t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
                    }
                    // line 108
                    echo "\t\t\t\t\t
\t\t\t\t\t\t
\t\t\t\t\t\t\t";
                    // line 110
                    if (($context["display_description"] ?? null)) {
                        echo " 
\t\t\t\t\t\t\t\t<div class=\"item-des\">
\t\t\t\t\t\t\t\t\t";
                        // line 112
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "description_maxlength", [], "any", false, false, false, 112);
                        echo " 
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
                    }
                    // line 115
                    echo "\t\t\t\t\t\t\t
\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
                }
                // line 118
                echo "
\t\t\t\t\t\t";
                // line 119
                if (((($context["display_add_to_cart"] ?? null) || ($context["display_compare"] ?? null)) || ($context["display_wishlist"] ?? null))) {
                    // line 120
                    echo "\t\t\t\t\t\t<div class=\"button-group cartinfo--bottom\">\t
\t\t\t\t\t\t\t";
                    // line 121
                    if (($context["display_add_to_cart"] ?? null)) {
                        echo " 
\t\t\t\t\t\t\t<div class=\"btn-addToCart\">
\t\t\t\t\t\t\t\t<button type=\"button\" class=\"addToCart btn-button\" title=\"";
                        // line 123
                        echo twig_get_attribute($this->env, $this->source, ($context["objlang"] ?? null), "get", [0 => "button_cart"], "method", false, false, false, 123);
                        echo "\" onclick=\"cart.add('";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 123);
                        echo " ');\">
\t\t\t\t\t\t\t\t\t<i class=\"fa fa-shopping-cart\"></i> 
\t\t\t\t\t\t\t\t\t<span>";
                        // line 125
                        echo twig_get_attribute($this->env, $this->source, ($context["objlang"] ?? null), "get", [0 => "button_cart"], "method", false, false, false, 125);
                        echo " </span>\t\t\t\t\t\t
\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
                    }
                    // line 129
                    echo "\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<div class=\"button-group-in so-quickview\">\t\t\t\t\t\t

\t\t\t\t\t\t\t\t";
                    // line 132
                    if (($context["display_wishlist"] ?? null)) {
                        echo " 
\t\t\t\t\t\t\t\t<button type=\"button\" class=\"wishlist btn-button\" title=\"";
                        // line 133
                        echo twig_get_attribute($this->env, $this->source, ($context["objlang"] ?? null), "get", [0 => "button_wishlist"], "method", false, false, false, 133);
                        echo "\" onclick=\"wishlist.add('";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 133);
                        echo "');\"><i class=\"fa fa-heart-o\"></i><span>";
                        echo twig_get_attribute($this->env, $this->source, ($context["objlang"] ?? null), "get", [0 => "button_wishlist"], "method", false, false, false, 133);
                        echo "</span></button>
\t\t\t\t\t\t\t\t";
                    }
                    // line 134
                    echo " 

\t\t\t\t\t\t\t\t";
                    // line 136
                    if (($context["display_compare"] ?? null)) {
                        echo " 
\t\t\t\t\t\t\t\t<button type=\"button\" class=\"compare btn-button\" title=\"";
                        // line 137
                        echo twig_get_attribute($this->env, $this->source, ($context["objlang"] ?? null), "get", [0 => "button_compare"], "method", false, false, false, 137);
                        echo " \" onclick=\"compare.add('";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 137);
                        echo "');\"><i class=\"fa fa-refresh\"></i><span>";
                        echo twig_get_attribute($this->env, $this->source, ($context["objlang"] ?? null), "get", [0 => "button_compare"], "method", false, false, false, 137);
                        echo "</span></button>
\t\t\t\t\t\t\t\t";
                    }
                    // line 139
                    echo "\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<a class=\"hidden\" data-product='";
                    // line 140
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 140);
                    echo "' href=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "link", [], "any", false, false, false, 140);
                    echo "\"></a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t
\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
                }
                // line 144
                echo " 
\t\t\t\t\t\t
\t\t\t\t\t</div>

\t\t\t\t</div>
\t\t\t</div>
\t\t\t";
                // line 150
                if (((($context["type_show"] ?? null) == "slider") && (((($context["i"] ?? null) % ($context["nb_rows"] ?? null)) == 0) || (($context["i"] ?? null) == ($context["count"] ?? null))))) {
                    // line 151
                    echo "\t\t\t</div>
\t\t\t";
                }
                // line 153
                echo "\t\t\t
\t\t\t";
                // line 154
                if ((($context["type_show"] ?? null) == "loadmore")) {
                    // line 155
                    echo "\t\t\t</div>
\t\t\t";
                }
                // line 157
                echo "
\t\t\t";
                // line 158
                if ((($context["type_show"] ?? null) == "loadmore")) {
                    // line 159
                    echo "\t\t\t\t";
                    $context["clear"] = "clr1";
                    // line 160
                    echo "\t\t\t\t";
                    if (((($context["k"] ?? null) % 2) == 0)) {
                        echo " ";
                        $context["clear"] = (($context["clear"] ?? null) . " clr2");
                        echo " ";
                    }
                    // line 161
                    echo "\t\t\t\t";
                    if (((($context["k"] ?? null) % 3) == 0)) {
                        echo " ";
                        $context["clear"] = (($context["clear"] ?? null) . " clr3");
                        echo " ";
                    }
                    // line 162
                    echo "\t\t\t\t";
                    if (((($context["k"] ?? null) % 4) == 0)) {
                        echo " ";
                        $context["clear"] = (($context["clear"] ?? null) . " clr4");
                        echo " ";
                    }
                    // line 163
                    echo "\t\t\t\t";
                    if (((($context["k"] ?? null) % 5) == 0)) {
                        echo " ";
                        $context["clear"] = (($context["clear"] ?? null) . " clr5");
                        echo " ";
                    }
                    // line 164
                    echo "\t\t\t\t";
                    if (((($context["k"] ?? null) % 6) == 0)) {
                        echo " ";
                        $context["clear"] = (($context["clear"] ?? null) . " clr6");
                        echo " ";
                    }
                    // line 165
                    echo "\t\t\t\t<div class=\"";
                    echo ($context["clear"] ?? null);
                    echo "\"></div>
\t\t\t";
                }
                // line 167
                echo "\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 168
            echo "\t";
        }
        // line 169
        echo "</div>

";
        // line 171
        if ((($context["type_show"] ?? null) == "slider")) {
            // line 172
            echo "<script type=\"text/javascript\">
\tjQuery(document).ready(function(\$){
\t\tvar \$tag_id = \$('#";
            // line 174
            echo ($context["tag_id"] ?? null);
            echo "'), 
\t\tparent_active = \t\$('.items-category-";
            // line 175
            echo ($context["tab_id"] ?? null);
            echo "', \$tag_id),
\t\ttotal_product = parent_active.data('total'),
\t\ttab_active = \$('.ltabs-items-inner',parent_active),
\t\tnb_column0 = ";
            // line 178
            echo ($context["nb_column0"] ?? null);
            echo ",
\t\tnb_column1 = ";
            // line 179
            echo ($context["nb_column1"] ?? null);
            echo ",
\t\tnb_column2 = ";
            // line 180
            echo ($context["nb_column2"] ?? null);
            echo ",
\t\tnb_column3 = ";
            // line 181
            echo ($context["nb_column3"] ?? null);
            echo ",
\t\tnb_column4 = ";
            // line 182
            echo ($context["nb_column4"] ?? null);
            echo ";
\t\ttab_active.owlCarousel2({
\t\t\trtl: ";
            // line 184
            echo ($context["direction"] ?? null);
            echo ",
\t\t\tnav: ";
            // line 185
            echo ($context["display_nav"] ?? null);
            echo ",
\t\t\tdots: true,\t
\t\t\tmargin: 0,
\t\t\tloop:  ";
            // line 188
            echo ($context["display_loop"] ?? null);
            echo ",
\t\t\tautoplay: ";
            // line 189
            echo ($context["autoplay"] ?? null);
            echo ",
\t\t\tautoplayHoverPause: ";
            // line 190
            echo ($context["pausehover"] ?? null);
            echo ",
\t\t\tautoplayTimeout: ";
            // line 191
            echo ($context["autoplayTimeout"] ?? null);
            echo ",
\t\t\tautoplaySpeed: ";
            // line 192
            echo ($context["autoplaySpeed"] ?? null);
            echo ",
\t\t\tmouseDrag: ";
            // line 193
            echo ($context["mousedrag"] ?? null);
            echo ",
\t\t\ttouchDrag: ";
            // line 194
            echo ($context["touchdrag"] ?? null);
            echo ",
\t\t\tnavRewind: true,
\t\t\tnavText: [ '', '' ],
\t\t\tresponsive: {
\t\t\t\t0: {
\t\t\t\t\titems: nb_column4,
\t\t\t\t\tnav: total_product <= nb_column0 ? false : ((";
            // line 200
            echo ($context["display_nav"] ?? null);
            echo ") ? true: false),
\t\t\t\t},
\t\t\t\t480: {
\t\t\t\t\titems: nb_column3,
\t\t\t\t\tnav: total_product <= nb_column0 ? false : ((";
            // line 204
            echo ($context["display_nav"] ?? null);
            echo ") ? true: false),
\t\t\t\t},
\t\t\t\t768: {
\t\t\t\t\titems: nb_column2,
\t\t\t\t\tnav: total_product <= nb_column0 ? false : ((";
            // line 208
            echo ($context["display_nav"] ?? null);
            echo ") ? true: false),
\t\t\t\t},
\t\t\t\t992: {
\t\t\t\t\titems: nb_column1,
\t\t\t\t\tnav: total_product <= nb_column0 ? false : ((";
            // line 212
            echo ($context["display_nav"] ?? null);
            echo ") ? true: false),
\t\t\t\t},
\t\t\t\t1200: {
\t\t\t\t\titems: nb_column0,
\t\t\t\t\t
\t\t\t\t\tnav: total_product <= nb_column0 ? false : ((";
            // line 217
            echo ($context["display_nav"] ?? null);
            echo ") ? true: false),
\t\t\t\t}
\t\t\t}
\t\t});
\t});
</script>
";
        }
    }

    public function getTemplateName()
    {
        return "so-buyshop/template/extension/module/so_listing_tabs/default/default_items.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  635 => 217,  627 => 212,  620 => 208,  613 => 204,  606 => 200,  597 => 194,  593 => 193,  589 => 192,  585 => 191,  581 => 190,  577 => 189,  573 => 188,  567 => 185,  563 => 184,  558 => 182,  554 => 181,  550 => 180,  546 => 179,  542 => 178,  536 => 175,  532 => 174,  528 => 172,  526 => 171,  522 => 169,  519 => 168,  513 => 167,  507 => 165,  500 => 164,  493 => 163,  486 => 162,  479 => 161,  472 => 160,  469 => 159,  467 => 158,  464 => 157,  460 => 155,  458 => 154,  455 => 153,  451 => 151,  449 => 150,  441 => 144,  431 => 140,  428 => 139,  419 => 137,  415 => 136,  411 => 134,  402 => 133,  398 => 132,  393 => 129,  386 => 125,  379 => 123,  374 => 121,  371 => 120,  369 => 119,  366 => 118,  361 => 115,  355 => 112,  350 => 110,  346 => 108,  341 => 105,  335 => 104,  331 => 102,  327 => 100,  324 => 99,  320 => 98,  316 => 96,  314 => 95,  310 => 93,  306 => 92,  298 => 90,  295 => 89,  289 => 86,  284 => 85,  278 => 83,  276 => 82,  273 => 81,  271 => 80,  268 => 79,  256 => 77,  254 => 76,  248 => 72,  246 => 71,  239 => 66,  235 => 65,  228 => 61,  221 => 59,  216 => 57,  209 => 55,  206 => 54,  197 => 52,  193 => 51,  189 => 49,  180 => 48,  176 => 47,  172 => 45,  170 => 44,  167 => 43,  161 => 41,  158 => 40,  152 => 38,  150 => 37,  146 => 35,  140 => 32,  132 => 31,  125 => 29,  118 => 28,  116 => 27,  106 => 26,  98 => 25,  94 => 24,  87 => 19,  83 => 18,  80 => 17,  76 => 15,  74 => 14,  71 => 13,  68 => 12,  65 => 11,  60 => 10,  57 => 9,  54 => 8,  51 => 7,  49 => 6,  43 => 4,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "so-buyshop/template/extension/module/so_listing_tabs/default/default_items.twig", "/home/azhkhn/public_html/protidin.com.bd/catalog/view/theme/so-buyshop/template/extension/module/so_listing_tabs/default/default_items.twig");
    }
}
