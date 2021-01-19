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

/* so-buyshop/template/extension/module/so_listing_tabs/category/default_items.twig */
class __TwigTemplate_c60ba32a32c657240b68f4468946671278cdec3cfeed3e2ae05a3133586c1069 extends \Twig\Template
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
\t\t\t<div class=\"item-inner product-layout transition\">

\t\t\t\t<div class=\"product-item-container\">
\t\t\t\t\t<div class=\"left-block col-sm-5\">\t\t\t\t\t\t\t\t\t\t
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
                    echo "\" target=\"";
                    echo ($context["item_link_target"] ?? null);
                    echo "\" title=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "name_maxlength", [], "any", false, false, false, 26);
                    echo "\"  >
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t";
                    // line 28
                    if ((($context["product_image_num"] ?? null) == 2)) {
                        // line 29
                        echo "\t\t\t\t\t\t\t\t\t\t<img data-sizes=\"auto\" src=\"data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==\" data-src=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 29);
                        echo "\" class=\"img-thumb1 lazyload\" alt=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "name_maxlength", [], "any", false, false, false, 29);
                        echo "\">
\t\t\t\t\t\t\t\t\t\t<img data-sizes=\"auto\" src=\"data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==\" data-src=\"";
                        // line 30
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb2", [], "any", false, false, false, 30);
                        echo "\" class=\"img-thumb2 lazyload\" alt=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "name_maxlength", [], "any", false, false, false, 30);
                        echo "\">
\t\t\t\t\t\t\t\t\t";
                    } else {
                        // line 32
                        echo "\t\t\t\t\t\t\t\t\t\t<img data-sizes=\"auto\" src=\"data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==\" data-src=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 32);
                        echo "\" alt=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "name_maxlength", [], "any", false, false, false, 32);
                        echo "\" class=\"lazyload\">
\t\t\t\t\t\t\t\t\t";
                    }
                    // line 33
                    echo "\t
\t\t\t\t\t\t\t\t</a>\t\t\t\t\t\t
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
                }
                // line 36
                echo "\t
\t\t\t\t\t\t<div class=\"box-label\">
\t\t\t\t\t\t\t";
                // line 38
                if ((twig_get_attribute($this->env, $this->source, $context["product"], "productNew", [], "any", false, false, false, 38) && ($context["display_new"] ?? null))) {
                    // line 39
                    echo "\t\t\t\t\t\t\t\t<span class=\"label-product label-new\">";
                    echo twig_get_attribute($this->env, $this->source, ($context["objlang"] ?? null), "get", [0 => "text_new"], "method", false, false, false, 39);
                    echo "</span>
\t\t\t\t\t\t\t";
                }
                // line 41
                echo "\t\t\t\t\t\t\t";
                if ((twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 41) && ($context["display_sale"] ?? null))) {
                    // line 42
                    echo "\t\t\t\t\t\t\t\t<span class=\"label-product label-sale\">";
                    echo " ";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "discount", [], "any", false, false, false, 42);
                    echo " </span>
\t\t\t\t\t\t\t";
                }
                // line 44
                echo "\t\t\t\t\t\t</div>

\t\t\t\t\t
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"right-block  col-sm-7\">
\t\t\t\t\t\t
\t\t\t\t\t\t";
                // line 50
                if ((((($context["display_title"] ?? null) || ($context["display_description"] ?? null)) || ($context["display_price"] ?? null)) || ($context["display_rating"] ?? null))) {
                    // line 51
                    echo "\t\t\t\t\t\t<div class=\"caption\">
\t\t\t\t\t\t\t";
                    // line 52
                    if (($context["display_title"] ?? null)) {
                        // line 53
                        echo "\t\t\t\t\t\t\t\t<h4><a href=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 53);
                        echo "\" title=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 53);
                        echo "\" target=\"";
                        echo ($context["item_link_target"] ?? null);
                        echo "\">";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "name_maxlength", [], "any", false, false, false, 53);
                        echo "</a></h4>
\t\t\t\t\t\t\t";
                    }
                    // line 55
                    echo "\t\t\t\t\t\t\t
\t\t\t\t\t\t\t";
                    // line 56
                    if (($context["display_rating"] ?? null)) {
                        // line 57
                        echo "\t\t\t\t\t\t\t\t<div class=\"rating\">
\t\t\t\t\t\t\t\t\t<div class=\"rating-box\">

\t\t\t\t\t\t\t\t  \t";
                        // line 60
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(range(1, 5));
                        foreach ($context['_seq'] as $context["_key"] => $context["j"]) {
                            // line 61
                            echo "\t\t\t\t\t\t\t\t  \t\t";
                            if ((twig_get_attribute($this->env, $this->source, $context["product"], "rating", [], "any", false, false, false, 61) < $context["j"])) {
                                // line 62
                                echo "\t\t\t\t\t\t\t\t  \t\t\t<span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-2x\"></i></span>
\t\t\t\t\t\t\t\t  \t\t";
                            } else {
                                // line 64
                                echo "\t\t\t\t\t\t\t\t  \t\t\t<span class=\"fa fa-stack\"><i class=\"fa fa-star fa-stack-2x\"></i><i class=\"fa fa-star-o fa-stack-2x\"></i></span>
\t\t\t\t\t\t\t\t  \t\t";
                            }
                            // line 66
                            echo "\t\t\t\t\t\t\t\t  \t";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['j'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 67
                        echo "\t\t\t\t\t\t\t\t  \t</div>
\t\t\t\t\t\t\t\t  \t<a class=\"rating-num\"  href=\"";
                        // line 68
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 68);
                        echo "\" rel=\"nofollow\" target=\"_blank\" >";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "reviews", [], "any", false, false, false, 68);
                        echo "</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
                    }
                    // line 71
                    echo "
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t";
                    // line 73
                    if ((twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 73) && ($context["display_price"] ?? null))) {
                        // line 74
                        echo "\t\t\t\t\t\t\t\t<div class=\"price\">
\t\t\t\t\t\t\t\t  \t";
                        // line 75
                        if (twig_test_empty(twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 75))) {
                            // line 76
                            echo "\t\t\t\t\t\t\t\t  \t\t";
                            echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 76);
                            echo "
\t\t\t\t\t\t\t\t  \t";
                        } else {
                            // line 78
                            echo "\t\t\t\t\t\t\t\t  \t\t<span class=\"price-old\">";
                            echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 78);
                            echo "</span>
\t\t\t\t\t\t\t\t  \t\t<span class=\"price-new\">";
                            // line 79
                            echo twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 79);
                            echo "</span>
\t\t\t\t\t\t\t\t  \t\t
\t\t\t\t\t\t\t\t  \t";
                        }
                        // line 82
                        echo "\t\t\t\t\t\t\t\t  \t";
                        if (twig_get_attribute($this->env, $this->source, $context["product"], "tax", [], "any", false, false, false, 82)) {
                            // line 83
                            echo "\t\t\t\t\t\t\t\t  \t\t<span class=\"price-tax hidden\">";
                            echo twig_get_attribute($this->env, $this->source, ($context["objlang"] ?? null), "get", [0 => "text_tax"], "method", false, false, false, 83);
                            echo " ";
                            echo twig_get_attribute($this->env, $this->source, $context["product"], "tax", [], "any", false, false, false, 83);
                            echo "</span>
\t\t\t\t\t\t\t\t  \t";
                        }
                        // line 85
                        echo "\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
                    }
                    // line 86
                    echo "\t\t\t
\t\t\t\t\t\t\t
\t\t\t\t\t
\t\t\t\t\t\t
\t\t\t\t\t\t\t";
                    // line 90
                    if (($context["display_description"] ?? null)) {
                        echo " 
\t\t\t\t\t\t\t\t<div class=\"item-des\">
\t\t\t\t\t\t\t\t\t";
                        // line 92
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "description_maxlength", [], "any", false, false, false, 92);
                        echo " 
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
                    }
                    // line 95
                    echo "\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<div class=\"item-available\">
\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t<span class=\"col-sm-6 text-left\">";
                    // line 98
                    echo twig_get_attribute($this->env, $this->source, ($context["objlang"] ?? null), "get", [0 => "text_available"], "method", false, false, false, 98);
                    echo " <b>";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "avail_number", [], "any", false, false, false, 98);
                    echo "</b> </span>
\t\t\t\t\t\t\t\t\t<span class=\"col-sm-6 text-right\">";
                    // line 99
                    echo twig_get_attribute($this->env, $this->source, ($context["objlang"] ?? null), "get", [0 => "text_sold"], "method", false, false, false, 99);
                    echo " <b>";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "sold_number", [], "any", false, false, false, 99);
                    echo "</b>  </span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"available\">
\t\t\t\t\t\t\t\t\t<span class=\"color_width\" data-title=\"";
                    // line 102
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "sold_width", [], "any", false, false, false, 102);
                    echo "%\" data-toggle='tooltip' style=\"width: ";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "sold_width", [], "any", false, false, false, 102);
                    echo "%\"></span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
                }
                // line 108
                echo "
\t\t\t\t\t\t";
                // line 109
                if (((($context["display_wishlist"] ?? null) || ($context["display_compare"] ?? null)) || ($context["display_add_to_cart"] ?? null))) {
                    echo " 
\t\t\t\t\t\t\t<div class=\"button-group so-quickview \">
\t\t\t\t\t\t\t\t ";
                    // line 111
                    if (($context["display_add_to_cart"] ?? null)) {
                        echo " 
\t\t\t\t\t\t\t\t <div class=\"btn-addToCart\">
\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"addToCart btn-button\" title=\"";
                        // line 113
                        echo twig_get_attribute($this->env, $this->source, ($context["objlang"] ?? null), "get", [0 => "button_cart"], "method", false, false, false, 113);
                        echo "\" onclick=\"cart.add('";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 113);
                        echo " ');\">
\t\t\t\t\t\t\t\t\t\t<span>";
                        // line 114
                        echo twig_get_attribute($this->env, $this->source, ($context["objlang"] ?? null), "get", [0 => "button_cart"], "method", false, false, false, 114);
                        echo " </span>\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t";
                    }
                    // line 118
                    echo "\t\t\t\t\t\t\t\t";
                    if (($context["display_wishlist"] ?? null)) {
                        echo " 
\t\t\t\t\t\t\t\t<button type=\"button\" class=\"wishlist btn-button\" title=\"";
                        // line 119
                        echo twig_get_attribute($this->env, $this->source, ($context["objlang"] ?? null), "get", [0 => "button_wishlist"], "method", false, false, false, 119);
                        echo "\" onclick=\"wishlist.add('";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 119);
                        echo "');\"><i class=\"fa fa-heart-o\"></i><span>";
                        echo twig_get_attribute($this->env, $this->source, ($context["objlang"] ?? null), "get", [0 => "button_wishlist"], "method", false, false, false, 119);
                        echo "</span></button>
\t\t\t\t\t\t\t\t";
                    }
                    // line 120
                    echo " 
\t\t\t\t\t\t\t\t";
                    // line 121
                    if (($context["display_compare"] ?? null)) {
                        echo " 
\t\t\t\t\t\t\t\t<button type=\"button\" class=\"compare btn-button\" title=\"";
                        // line 122
                        echo twig_get_attribute($this->env, $this->source, ($context["objlang"] ?? null), "get", [0 => "button_compare"], "method", false, false, false, 122);
                        echo " \" onclick=\"compare.add('";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 122);
                        echo "');\"><i class=\"fa fa-refresh\"></i><span>";
                        echo twig_get_attribute($this->env, $this->source, ($context["objlang"] ?? null), "get", [0 => "button_compare"], "method", false, false, false, 122);
                        echo "</span></button>
\t\t\t\t\t\t\t\t";
                    }
                    // line 123
                    echo " 

\t\t\t\t\t\t\t\t<a class=\"hidden\" data-product='";
                    // line 125
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 125);
                    echo "' href=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 125);
                    echo "\" target=\"";
                    echo ($context["item_link_target"] ?? null);
                    echo "\" ></a>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
                }
                // line 128
                echo " 
\t\t\t\t\t\t
\t\t\t\t\t</div>

\t\t\t\t</div>
\t\t\t</div>
\t\t\t";
                // line 134
                if (((($context["type_show"] ?? null) == "slider") && (((($context["i"] ?? null) % ($context["nb_rows"] ?? null)) == 0) || (($context["i"] ?? null) == ($context["count"] ?? null))))) {
                    // line 135
                    echo "\t\t\t</div>
\t\t\t";
                }
                // line 137
                echo "\t\t\t
\t\t\t";
                // line 138
                if ((($context["type_show"] ?? null) == "loadmore")) {
                    // line 139
                    echo "\t\t\t</div>
\t\t\t";
                }
                // line 141
                echo "
\t\t\t";
                // line 142
                if ((($context["type_show"] ?? null) == "loadmore")) {
                    // line 143
                    echo "\t\t\t\t";
                    $context["clear"] = "clr1";
                    // line 144
                    echo "\t\t\t\t";
                    if (((($context["k"] ?? null) % 2) == 0)) {
                        echo " ";
                        $context["clear"] = (($context["clear"] ?? null) . " clr2");
                        echo " ";
                    }
                    // line 145
                    echo "\t\t\t\t";
                    if (((($context["k"] ?? null) % 3) == 0)) {
                        echo " ";
                        $context["clear"] = (($context["clear"] ?? null) . " clr3");
                        echo " ";
                    }
                    // line 146
                    echo "\t\t\t\t";
                    if (((($context["k"] ?? null) % 4) == 0)) {
                        echo " ";
                        $context["clear"] = (($context["clear"] ?? null) . " clr4");
                        echo " ";
                    }
                    // line 147
                    echo "\t\t\t\t";
                    if (((($context["k"] ?? null) % 5) == 0)) {
                        echo " ";
                        $context["clear"] = (($context["clear"] ?? null) . " clr5");
                        echo " ";
                    }
                    // line 148
                    echo "\t\t\t\t";
                    if (((($context["k"] ?? null) % 6) == 0)) {
                        echo " ";
                        $context["clear"] = (($context["clear"] ?? null) . " clr6");
                        echo " ";
                    }
                    // line 149
                    echo "\t\t\t\t<div class=\"";
                    echo ($context["clear"] ?? null);
                    echo "\"></div>
\t\t\t";
                }
                // line 151
                echo "\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 152
            echo "\t";
        }
        // line 153
        echo "</div>

";
        // line 155
        if ((($context["type_show"] ?? null) == "slider")) {
            // line 156
            echo "<script type=\"text/javascript\">
\tjQuery(document).ready(function(\$){
\t\tvar \$tag_id = \$('#";
            // line 158
            echo ($context["tag_id"] ?? null);
            echo "'), 
\t\tparent_active = \t\$('.items-category-";
            // line 159
            echo ($context["tab_id"] ?? null);
            echo "', \$tag_id),
\t\ttotal_product = parent_active.data('total'),
\t\ttab_active = \$('.ltabs-items-inner',parent_active),
\t\tnb_column0 = ";
            // line 162
            echo ($context["nb_column0"] ?? null);
            echo ",
\t\tnb_column1 = ";
            // line 163
            echo ($context["nb_column1"] ?? null);
            echo ",
\t\tnb_column2 = ";
            // line 164
            echo ($context["nb_column2"] ?? null);
            echo ",
\t\tnb_column3 = ";
            // line 165
            echo ($context["nb_column3"] ?? null);
            echo ",
\t\tnb_column4 = ";
            // line 166
            echo ($context["nb_column4"] ?? null);
            echo ";
\t\ttab_active.owlCarousel2({
\t\t\trtl: ";
            // line 168
            echo ($context["direction"] ?? null);
            echo ",
\t\t\tnav: ";
            // line 169
            echo ($context["display_nav"] ?? null);
            echo ",
\t\t\tdots: true,\t
\t\t\tmargin: 0,
\t\t\tloop:  ";
            // line 172
            echo ($context["display_loop"] ?? null);
            echo ",
\t\t\tautoplay: ";
            // line 173
            echo ($context["autoplay"] ?? null);
            echo ",
\t\t\tautoplayHoverPause: ";
            // line 174
            echo ($context["pausehover"] ?? null);
            echo ",
\t\t\tautoplayTimeout: ";
            // line 175
            echo ($context["autoplayTimeout"] ?? null);
            echo ",
\t\t\tautoplaySpeed: ";
            // line 176
            echo ($context["autoplaySpeed"] ?? null);
            echo ",
\t\t\tmouseDrag: ";
            // line 177
            echo ($context["mousedrag"] ?? null);
            echo ",
\t\t\ttouchDrag: ";
            // line 178
            echo ($context["touchdrag"] ?? null);
            echo ",
\t\t\tnavRewind: true,
\t\t\tnavText: [ '', '' ],
\t\t\tresponsive: {
\t\t\t\t0: {
\t\t\t\t\titems: nb_column4,
\t\t\t\t\tnav: total_product <= nb_column0 ? false : ((";
            // line 184
            echo ($context["display_nav"] ?? null);
            echo ") ? true: false),
\t\t\t\t},
\t\t\t\t480: {
\t\t\t\t\titems: nb_column3,
\t\t\t\t\tnav: total_product <= nb_column0 ? false : ((";
            // line 188
            echo ($context["display_nav"] ?? null);
            echo ") ? true: false),
\t\t\t\t},
\t\t\t\t768: {
\t\t\t\t\titems: nb_column2,
\t\t\t\t\tnav: total_product <= nb_column0 ? false : ((";
            // line 192
            echo ($context["display_nav"] ?? null);
            echo ") ? true: false),
\t\t\t\t},
\t\t\t\t992: {
\t\t\t\t\titems: nb_column1,
\t\t\t\t\tnav: total_product <= nb_column0 ? false : ((";
            // line 196
            echo ($context["display_nav"] ?? null);
            echo ") ? true: false),
\t\t\t\t},
\t\t\t\t1200: {
\t\t\t\t\titems: nb_column0,
\t\t\t\t\t
\t\t\t\t\tnav: total_product <= nb_column0 ? false : ((";
            // line 201
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
        return "so-buyshop/template/extension/module/so_listing_tabs/category/default_items.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  591 => 201,  583 => 196,  576 => 192,  569 => 188,  562 => 184,  553 => 178,  549 => 177,  545 => 176,  541 => 175,  537 => 174,  533 => 173,  529 => 172,  523 => 169,  519 => 168,  514 => 166,  510 => 165,  506 => 164,  502 => 163,  498 => 162,  492 => 159,  488 => 158,  484 => 156,  482 => 155,  478 => 153,  475 => 152,  469 => 151,  463 => 149,  456 => 148,  449 => 147,  442 => 146,  435 => 145,  428 => 144,  425 => 143,  423 => 142,  420 => 141,  416 => 139,  414 => 138,  411 => 137,  407 => 135,  405 => 134,  397 => 128,  386 => 125,  382 => 123,  373 => 122,  369 => 121,  366 => 120,  357 => 119,  352 => 118,  345 => 114,  339 => 113,  334 => 111,  329 => 109,  326 => 108,  315 => 102,  307 => 99,  301 => 98,  296 => 95,  290 => 92,  285 => 90,  279 => 86,  275 => 85,  267 => 83,  264 => 82,  258 => 79,  253 => 78,  247 => 76,  245 => 75,  242 => 74,  240 => 73,  236 => 71,  228 => 68,  225 => 67,  219 => 66,  215 => 64,  211 => 62,  208 => 61,  204 => 60,  199 => 57,  197 => 56,  194 => 55,  182 => 53,  180 => 52,  177 => 51,  175 => 50,  167 => 44,  160 => 42,  157 => 41,  151 => 39,  149 => 38,  145 => 36,  139 => 33,  131 => 32,  124 => 30,  117 => 29,  115 => 28,  106 => 26,  98 => 25,  94 => 24,  87 => 19,  83 => 18,  80 => 17,  76 => 15,  74 => 14,  71 => 13,  68 => 12,  65 => 11,  60 => 10,  57 => 9,  54 => 8,  51 => 7,  49 => 6,  43 => 4,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "so-buyshop/template/extension/module/so_listing_tabs/category/default_items.twig", "/home/azhkhn/public_html/protidin.com.bd/catalog/view/theme/so-buyshop/template/extension/module/so_listing_tabs/category/default_items.twig");
    }
}
