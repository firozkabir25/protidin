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

/* so-buyshop/template/extension/module/so_extra_slider/simple.twig */
class __TwigTemplate_ea14995915892363714cab6c66858f0db49b266b4a2ee7e186db37476e587d30 extends \Twig\Template
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
<div class=\"module ";
        // line 2
        echo ($context["direction_class"] ?? null);
        echo " ";
        echo ($context["class_suffix"] ?? null);
        echo "\">
\t";
        // line 3
        if (($context["disp_title_module"] ?? null)) {
            echo " 
\t\t<h3 class=\"modtitle\"><span>";
            // line 4
            echo ($context["head_name"] ?? null);
            echo "</span></h3>
\t";
        }
        // line 6
        echo "
\t";
        // line 7
        if ( !twig_test_empty(twig_trim_filter(($context["pre_text"] ?? null)))) {
            echo " 
\t\t<div class=\"form-group\">
\t\t\t";
            // line 9
            echo ($context["pre_text"] ?? null);
            echo "
\t\t</div>
\t";
        }
        // line 12
        echo "
\t<div class=\"modcontent\">
\t\t
\t\t";
        // line 15
        if (twig_test_empty(($context["products"] ?? null))) {
            // line 16
            echo "\t\t\t<div class=\"alert alert-info\"><i class=\"fa fa-info-circle\"></i> 
\t\t\t\t";
            // line 17
            echo ($context["text_noproduct"] ?? null);
            echo "
\t\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"alert\">×</button>
\t\t\t</div>

\t\t";
        } else {
            // line 22
            echo "\t\t\t";
            $context["count_item"] = twig_length_filter($this->env, ($context["products"] ?? null));
            echo "\t
\t\t\t";
            // line 23
            $context["cls_btn_page"] = (((($context["button_page"] ?? null) == "top")) ? ("buttom-type1") : ("button-type2"));
            echo "\t
\t\t\t";
            // line 24
            $context["btn_type"] = (((($context["button_page"] ?? null) == "top")) ? ("button-type1") : ("button-type2"));
            // line 25
            echo "\t\t\t
\t\t\t";
            // line 26
            $context["tag_id"] = ("so_extra_slider_" . ($context["suffix"] ?? null));
            // line 27
            echo "\t\t\t";
            $context["class_respl"] = ((((((((("preset00-" . ($context["nb_column0"] ?? null)) . " preset01-") . ($context["nb_column1"] ?? null)) . " preset02-") . ($context["nb_column2"] ?? null)) . " preset03-") . ($context["nb_column3"] ?? null)) . " preset04-") . ($context["nb_column4"] ?? null));
            // line 28
            echo "\t\t\t";
            $context["btn_prev"] = (((($context["button_page"] ?? null) == "top")) ? ("&#171") : ("&#139"));
            // line 29
            echo "\t\t\t";
            $context["btn_next"] = (((($context["button_page"] ?? null) == "top")) ? ("&#187") : ("&#155"));
            // line 30
            echo "\t\t\t";
            $context["i"] = 0;
            // line 31
            echo "
\t\t\t<div id=\"";
            // line 32
            echo ($context["tag_id"] ?? null);
            echo "\" class=\"so-extraslider ";
            echo ($context["cls_btn_page"] ?? null);
            echo " ";
            echo ($context["class_respl"] ?? null);
            echo " ";
            echo ($context["btn_type"] ?? null);
            echo "\">
\t\t\t\t<!-- Begin extraslider-inner -->
\t\t\t\t<div class=\"extraslider-inner products-list\" data-effect=\"";
            // line 34
            echo ($context["effect"] ?? null);
            echo "\">
\t\t\t\t\t";
            // line 35
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
            foreach ($context['_seq'] as $context["i"] => $context["product"]) {
                // line 36
                echo "\t\t\t\t\t\t";
                $context["i"] = ($context["i"] + 1);
                // line 37
                echo "\t\t\t\t\t\t";
                if (((($context["i"] % ($context["nb_rows"] ?? null)) == 1) || (($context["nb_rows"] ?? null) == 1))) {
                    echo " 
\t\t\t\t\t\t<div class=\"item \">
\t\t\t\t\t\t";
                }
                // line 39
                echo " 

\t\t\t\t\t\t\t<div class=\"product-layout item-inner ";
                // line 41
                echo ($context["products_style"] ?? null);
                echo " \">\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<div class=\"item-image\">
\t\t\t\t\t\t\t\t\t\t<div class=\"item-img-info\">
\t\t\t\t\t\t\t\t\t\t\t";
                // line 44
                if ((twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 44) && ($context["display_sale"] ?? null))) {
                    echo " 
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"label-product label-product-sale\">";
                    // line 45
                    echo " ";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "discount", [], "any", false, false, false, 45);
                    echo "</span>
\t\t\t\t\t\t\t\t\t\t\t";
                }
                // line 46
                echo " 

\t\t\t\t\t\t\t\t\t\t\t";
                // line 48
                if ((twig_get_attribute($this->env, $this->source, $context["product"], "productNew", [], "any", false, false, false, 48) && ($context["display_new"] ?? null))) {
                    echo " 
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"label-product label-product-new\">";
                    // line 49
                    echo twig_get_attribute($this->env, $this->source, ($context["objlang"] ?? null), "get", [0 => "text_new"], "method", false, false, false, 49);
                    echo " </span>
\t\t\t\t\t\t\t\t\t\t\t";
                }
                // line 50
                echo " 
\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
                // line 51
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 51);
                echo "\" target=\"";
                echo ($context["item_link_target"] ?? null);
                echo "\" title=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "nameFull", [], "any", false, false, false, 51);
                echo " \"  >
\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 52
                if ((($context["product_image_num"] ?? null) == 2)) {
                    // line 53
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<img data-sizes=\"auto\" src=\"data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==\" data-src=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 53);
                    echo "\" class=\"img-1 lazyload\" alt=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "nameFull", [], "any", false, false, false, 53);
                    echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<img data-sizes=\"auto\" src=\"data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==\" data-src=\"";
                    // line 54
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb2", [], "any", false, false, false, 54);
                    echo "\" class=\"img-2 lazyload\" alt=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "nameFull", [], "any", false, false, false, 54);
                    echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t";
                } else {
                    // line 56
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<img data-sizes=\"auto\" src=\"data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==\" data-src=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 56);
                    echo "\" alt=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "nameFull", [], "any", false, false, false, 56);
                    echo "\" class=\"lazyload\">
\t\t\t\t\t\t\t\t\t\t\t\t";
                }
                // line 58
                echo "\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t";
                // line 63
                echo "\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t";
                // line 65
                if ((((((($context["display_title"] ?? null) || ($context["display_description"] ?? null)) || ($context["display_price"] ?? null)) || ($context["display_addtocart"] ?? null)) || ($context["display_wishlist"] ?? null)) || ($context["display_compare"] ?? null))) {
                    echo " 
\t\t\t\t\t\t\t\t\t\t<div class=\"item-info\">
\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t";
                    // line 68
                    if (($context["display_title"] ?? null)) {
                        echo " 
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"item-title\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
                        // line 70
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 70);
                        echo "\" target=\"";
                        echo ($context["item_link_target"] ?? null);
                        echo "\" title=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "nameFull", [], "any", false, false, false, 70);
                        echo "\"  >
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        // line 71
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 71);
                        echo " 
\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t";
                    }
                    // line 74
                    echo " 

\t\t\t\t\t\t\t\t\t\t\t";
                    // line 76
                    if (($context["display_price"] ?? null)) {
                        echo " 
\t\t\t\t\t\t\t\t\t\t\t\t<div  class=\"content_price price\">
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        // line 78
                        if ( !twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 78)) {
                            echo " 
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"price product-price\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                            // line 80
                            echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 80);
                            echo " 
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        } else {
                            // line 82
                            echo "   
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"price-new product-price\">";
                            // line 83
                            echo twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 83);
                            echo " </span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"price-old\">";
                            // line 84
                            echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 84);
                            echo " </span>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        }
                        // line 85
                        echo " 
\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t";
                    }
                    // line 88
                    echo " 

\t\t\t\t\t\t\t\t\t\t\t";
                    // line 90
                    if (($context["display_rating"] ?? null)) {
                        // line 91
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t";
                        if (twig_get_attribute($this->env, $this->source, $context["product"], "rating", [], "any", false, false, false, 91)) {
                            // line 92
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"rating\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"rating-box\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                            // line 94
                            $context['_parent'] = $context;
                            $context['_seq'] = twig_ensure_traversable(range(1, 5));
                            foreach ($context['_seq'] as $context["_key"] => $context["k"]) {
                                // line 95
                                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                // line 96
                                if ((twig_get_attribute($this->env, $this->source, $context["product"], "rating", [], "any", false, false, false, 96) < $context["k"])) {
                                    echo " 
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-2x\"></i></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t \t";
                                } else {
                                    // line 98
                                    echo "   
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"fa fa-stack\"><i class=\"fa fa-star fa-stack-2x\"></i></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                }
                                // line 100
                                echo " 
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                // line 101
                                $context["k"] = ($context["k"] + 1);
                                // line 102
                                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                            }
                            $_parent = $context['_parent'];
                            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['k'], $context['_parent'], $context['loop']);
                            $context = array_intersect_key($context, $_parent) + $_parent;
                            echo " 
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t";
                        } else {
                            // line 105
                            echo "  
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"rating\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"rating-box\">
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                            // line 108
                            $context['_parent'] = $context;
                            $context['_seq'] = twig_ensure_traversable(range(1, 5));
                            foreach ($context['_seq'] as $context["_key"] => $context["j"]) {
                                // line 109
                                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                $context["j"] = ($context["j"] + 1);
                                // line 110
                                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-2x\"></i></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                            }
                            $_parent = $context['_parent'];
                            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['j'], $context['_parent'], $context['loop']);
                            $context = array_intersect_key($context, $_parent) + $_parent;
                            // line 111
                            echo " \t
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t";
                        }
                        // line 114
                        echo "\t
\t\t\t\t\t\t\t\t\t\t\t";
                    }
                    // line 115
                    echo "\t

\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t";
                    // line 118
                    if ((((($context["display_description"] ?? null) || ($context["display_addtocart"] ?? null)) || ($context["display_wishlist"] ?? null)) || ($context["display_compare"] ?? null))) {
                        echo " 
\t\t\t\t\t\t\t\t\t\t\t\t<!-- Begin item-content -->
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"item-content\">
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        // line 121
                        if (($context["display_description"] ?? null)) {
                            echo " 
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"item-des\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                            // line 123
                            echo twig_get_attribute($this->env, $this->source, $context["product"], "description", [], "any", false, false, false, 123);
                            echo " 
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        }
                        // line 125
                        echo " 

\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        // line 127
                        if (((($context["display_addtocart"] ?? null) || ($context["display_wishlist"] ?? null)) || ($context["display_compare"] ?? null))) {
                            echo " 
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"button-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                            // line 129
                            if (($context["display_addtocart"] ?? null)) {
                                echo " 
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"addToCart btn-button\" title=\"";
                                // line 130
                                echo twig_get_attribute($this->env, $this->source, ($context["objlang"] ?? null), "get", [0 => "button_cart"], "method", false, false, false, 130);
                                echo "\" onclick=\"cart.add('";
                                echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 130);
                                echo "');\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa fa-shopping-cart\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                // line 132
                                if ((($context["nb_column0"] ?? null) != 6)) {
                                    echo " 
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span>";
                                    // line 133
                                    echo twig_get_attribute($this->env, $this->source, ($context["objlang"] ?? null), "get", [0 => "button_cart"], "method", false, false, false, 133);
                                    echo " </span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                }
                                // line 134
                                echo " 
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                            }
                            // line 136
                            echo " 
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                            // line 137
                            if (($context["display_wishlist"] ?? null)) {
                                echo " 
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"wishlist btn-button\" title=\"";
                                // line 138
                                echo twig_get_attribute($this->env, $this->source, ($context["objlang"] ?? null), "get", [0 => "button_wishlist"], "method", false, false, false, 138);
                                echo " \" onclick=\"wishlist.add('";
                                echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 138);
                                echo "');\"><i class=\"fa fa-heart-o\"></i></button>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                            }
                            // line 139
                            echo " 
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                            // line 140
                            if (($context["display_compare"] ?? null)) {
                                echo " 
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"compare btn-button\" title=\"";
                                // line 141
                                echo twig_get_attribute($this->env, $this->source, ($context["objlang"] ?? null), "get", [0 => "button_compare"], "method", false, false, false, 141);
                                echo " \" onclick=\"compare.add('";
                                echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 141);
                                echo "');\"><i class=\"fa fa-refresh\"></i></button>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                            }
                            // line 142
                            echo " 
\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        }
                        // line 145
                        echo " 

\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<!-- End item-content -->
\t\t\t\t\t\t\t\t\t\t\t";
                    }
                    // line 149
                    echo " 
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<!-- End item-info -->
\t\t\t\t\t\t\t\t\t";
                }
                // line 152
                echo " 
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<!-- End item-wrap-inner -->
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<!-- End item-wrap -->

\t\t\t\t\t\t";
                // line 158
                if (((($context["i"] % ($context["nb_rows"] ?? null)) == 0) || ($context["i"] == ($context["count_item"] ?? null)))) {
                    echo " 
\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
                }
                // line 160
                echo " 

\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['i'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 162
            echo "\t 
\t\t\t\t</div>
\t\t\t\t<!--End extraslider-inner -->

\t\t\t\t<script type=\"text/javascript\">
\t\t\t\t//<![CDATA[
\t\t\t\tjQuery(document).ready(function (\$) {
\t\t\t\t\t(function (element) {
\t\t\t\t\t\tvar \$element = \$(element),
\t\t\t\t\t\t\t\t\$extraslider = \$(\".extraslider-inner\", \$element),
\t\t\t\t\t\t\t\t_delay = ";
            // line 172
            echo ($context["delay"] ?? null);
            echo " ,
\t\t\t\t\t\t\t\t_duration = ";
            // line 173
            echo ($context["duration"] ?? null);
            echo " ,
\t\t\t\t\t\t\t\t_effect = '";
            // line 174
            echo ($context["effect"] ?? null);
            echo " ';

\t\t\t\t\t\t\$extraslider.on(\"initialized.owl.carousel2\", function () {
\t\t\t\t\t\t\tvar \$item_active = \$(\".owl2-item.active\", \$element);
\t\t\t\t\t\t\tif (\$item_active.length > 1 && _effect != \"none\") {
\t\t\t\t\t\t\t\t_getAnimate(\$item_active);
\t\t\t\t\t\t\t}
\t\t\t\t\t\t\telse {
\t\t\t\t\t\t\t\tvar \$item = \$(\".owl2-item\", \$element);
\t\t\t\t\t\t\t\t\$item.css({\"opacity\": 1, \"filter\": \"alpha(opacity = 100)\"});
\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t";
            // line 185
            if ((($context["dots"] ?? null) == "true")) {
                echo " 
\t\t\t\t\t\t\tif (\$(\".owl2-dot\", \$element).length < 2) {
\t\t\t\t\t\t\t\t\$(\".owl2-prev\", \$element).css(\"display\", \"none\");
\t\t\t\t\t\t\t\t\$(\".owl2-next\", \$element).css(\"display\", \"none\");
\t\t\t\t\t\t\t\t\$(\".owl2-dot\", \$element).css(\"display\", \"none\");
\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t";
            }
            // line 192
            echo "
\t\t\t\t\t\t\t";
            // line 193
            if ((($context["button_page"] ?? null) == "top")) {
                echo " 
\t\t\t\t\t\t\t\t\$(\".owl2-controls\", \$element).insertBefore(\$extraslider);
\t\t\t\t\t\t\t\t\$(\".owl2-dots\", \$element).insertAfter(\$(\".owl2-prev\", \$element));
\t\t\t\t\t\t\t";
            } else {
                // line 196
                echo "  
\t\t\t\t\t\t\t\t\$(\".owl2-nav\", \$element).insertBefore(\$extraslider);
\t\t\t\t\t\t\t\t\$(\".owl2-controls\", \$element).insertAfter(\$extraslider);
\t\t\t\t\t\t\t";
            }
            // line 200
            echo "
\t\t\t\t\t\t});

\t\t\t\t\t\t\$extraslider.owlCarousel2({
\t\t\t\t\t\t\trtl: ";
            // line 204
            echo ($context["direction"] ?? null);
            echo ",
\t\t\t\t\t\t\tmargin: ";
            // line 205
            echo ($context["margin"] ?? null);
            echo ",
\t\t\t\t\t\t\tslideBy: ";
            // line 206
            echo ($context["slideBy"] ?? null);
            echo ",
\t\t\t\t\t\t\tautoplay: ";
            // line 207
            echo ($context["autoplay"] ?? null);
            echo ",
\t\t\t\t\t\t\tautoplayHoverPause: ";
            // line 208
            echo ($context["autoplayHoverPause"] ?? null);
            echo ",
\t\t\t\t\t\t\tautoplayTimeout: ";
            // line 209
            echo ($context["autoplayTimeout"] ?? null);
            echo " ,
\t\t\t\t\t\t\tautoplaySpeed: ";
            // line 210
            echo ($context["autoplaySpeed"] ?? null);
            echo " ,
\t\t\t\t\t\t\tstartPosition: ";
            // line 211
            echo ($context["startPosition"] ?? null);
            echo " ,
\t\t\t\t\t\t\tmouseDrag: ";
            // line 212
            echo ($context["mouseDrag"] ?? null);
            echo ",
\t\t\t\t\t\t\ttouchDrag: ";
            // line 213
            echo ($context["touchDrag"] ?? null);
            echo " ,
\t\t\t\t\t\t\tautoWidth: false,
\t\t\t\t\t\t\tresponsive: {
\t\t\t\t\t\t\t\t0: \t{ items: ";
            // line 216
            echo ($context["nb_column4"] ?? null);
            echo " } ,
\t\t\t\t\t\t\t\t480: { items: ";
            // line 217
            echo ($context["nb_column3"] ?? null);
            echo " },
\t\t\t\t\t\t\t\t768: { items: ";
            // line 218
            echo ($context["nb_column2"] ?? null);
            echo " },
\t\t\t\t\t\t\t\t992: { items: ";
            // line 219
            echo ($context["nb_column1"] ?? null);
            echo " },
\t\t\t\t\t\t\t\t1200: {items: ";
            // line 220
            echo ($context["nb_column0"] ?? null);
            echo "}
\t\t\t\t\t\t\t},
\t\t\t\t\t\t\tdotClass: \"owl2-dot\",
\t\t\t\t\t\t\tdotsClass: \"owl2-dots\",
\t\t\t\t\t\t\tdots: ";
            // line 224
            echo ($context["dots"] ?? null);
            echo " ,
\t\t\t\t\t\t\tdotsSpeed:";
            // line 225
            echo ($context["dotsSpeed"] ?? null);
            echo " ,
\t\t\t\t\t\t\tnav: ";
            // line 226
            echo ($context["nav"] ?? null);
            echo " ,
\t\t\t\t\t\t\tloop: ";
            // line 227
            echo ($context["loop"] ?? null);
            echo " ,
\t\t\t\t\t\t\tnavSpeed: ";
            // line 228
            echo ($context["navSpeed"] ?? null);
            echo " ,
\t\t\t\t\t\t\tnavText: [\"";
            // line 229
            echo ($context["btn_prev"] ?? null);
            echo " \", \"";
            echo ($context["btn_next"] ?? null);
            echo " \"],
\t\t\t\t\t\t\tnavClass: [\"owl2-prev\", \"owl2-next\"]

\t\t\t\t\t\t});

\t\t\t\t\t\t\$extraslider.on(\"translate.owl.carousel2\", function (e) {
\t\t\t\t\t\t\t";
            // line 235
            if ((($context["dots"] ?? null) == "true")) {
                echo " 
\t\t\t\t\t\t\tif (\$(\".owl2-dot\", \$element).length < 2) {
\t\t\t\t\t\t\t\t\$(\".owl2-prev\", \$element).css(\"display\", \"none\");
\t\t\t\t\t\t\t\t\$(\".owl2-next\", \$element).css(\"display\", \"none\");
\t\t\t\t\t\t\t\t\$(\".owl2-dot\", \$element).css(\"display\", \"none\");
\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t";
            }
            // line 241
            echo " 

\t\t\t\t\t\t\tvar \$item_active = \$(\".owl2-item.active\", \$element);
\t\t\t\t\t\t\t_UngetAnimate(\$item_active);
\t\t\t\t\t\t\t_getAnimate(\$item_active);
\t\t\t\t\t\t});

\t\t\t\t\t\t\$extraslider.on(\"translated.owl.carousel2\", function (e) {

\t\t\t\t\t\t\t";
            // line 250
            if ((($context["dots"] ?? null) == "true")) {
                echo " 
\t\t\t\t\t\t\tif (\$(\".owl2-dot\", \$element).length < 2) {
\t\t\t\t\t\t\t\t\$(\".owl2-prev\", \$element).css(\"display\", \"none\");
\t\t\t\t\t\t\t\t\$(\".owl2-next\", \$element).css(\"display\", \"none\");
\t\t\t\t\t\t\t\t\$(\".owl2-dot\", \$element).css(\"display\", \"none\");
\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t";
            }
            // line 256
            echo " 

\t\t\t\t\t\t\tvar \$item_active = \$(\".owl2-item.active\", \$element);
\t\t\t\t\t\t\tvar \$item = \$(\".owl2-item\", \$element);

\t\t\t\t\t\t\t_UngetAnimate(\$item);

\t\t\t\t\t\t\tif (\$item_active.length > 1 && _effect != \"none\") {
\t\t\t\t\t\t\t\t_getAnimate(\$item_active);
\t\t\t\t\t\t\t} else {

\t\t\t\t\t\t\t\t\$item.css({\"opacity\": 1, \"filter\": \"alpha(opacity = 100)\"});

\t\t\t\t\t\t\t}
\t\t\t\t\t\t});

\t\t\t\t\t\tfunction _getAnimate(\$el) {
\t\t\t\t\t\t\tif (_effect == \"none\") return;
\t\t\t\t\t\t\t//if (\$.browser.msie && parseInt(\$.browser.version, 10) <= 9) return;
\t\t\t\t\t\t\t\$extraslider.removeClass(\"extra-animate\");
\t\t\t\t\t\t\t\$el.each(function (i) {
\t\t\t\t\t\t\t\tvar \$_el = \$(this);
\t\t\t\t\t\t\t\t\$(this).css({
\t\t\t\t\t\t\t\t\t\"-webkit-animation\": _effect + \" \" + _duration + \"ms ease both\",
\t\t\t\t\t\t\t\t\t\"-moz-animation\": _effect + \" \" + _duration + \"ms ease both\",
\t\t\t\t\t\t\t\t\t\"-o-animation\": _effect + \" \" + _duration + \"ms ease both\",
\t\t\t\t\t\t\t\t\t\"animation\": _effect + \" \" + _duration + \"ms ease both\",
\t\t\t\t\t\t\t\t\t\"-webkit-animation-delay\": +i * _delay + \"ms\",
\t\t\t\t\t\t\t\t\t\"-moz-animation-delay\": +i * _delay + \"ms\",
\t\t\t\t\t\t\t\t\t\"-o-animation-delay\": +i * _delay + \"ms\",
\t\t\t\t\t\t\t\t\t\"animation-delay\": +i * _delay + \"ms\",
\t\t\t\t\t\t\t\t\t\"opacity\": 1
\t\t\t\t\t\t\t\t}).animate({
\t\t\t\t\t\t\t\t\topacity: 1
\t\t\t\t\t\t\t\t});

\t\t\t\t\t\t\t\tif (i == \$el.size() - 1) {
\t\t\t\t\t\t\t\t\t\$extraslider.addClass(\"extra-animate\");
\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t});
\t\t\t\t\t\t}

\t\t\t\t\t\tfunction _UngetAnimate(\$el) {
\t\t\t\t\t\t\t\$el.each(function (i) {
\t\t\t\t\t\t\t\t\$(this).css({
\t\t\t\t\t\t\t\t\t\"animation\": \"\",
\t\t\t\t\t\t\t\t\t\"-webkit-animation\": \"\",
\t\t\t\t\t\t\t\t\t\"-moz-animation\": \"\",
\t\t\t\t\t\t\t\t\t\"-o-animation\": \"\",
\t\t\t\t\t\t\t\t\t\"opacity\": 1
\t\t\t\t\t\t\t\t});
\t\t\t\t\t\t\t});
\t\t\t\t\t\t}

\t\t\t\t\t})(\"#";
            // line 310
            echo ($context["tag_id"] ?? null);
            echo " \");
\t\t\t\t});
\t\t\t\t//]]>
\t\t\t</script>

\t\t\t</div>
\t\t";
        }
        // line 317
        echo "\t
\t</div> 
\t";
        // line 319
        if ( !twig_test_empty(twig_trim_filter(($context["post_text"] ?? null)))) {
            echo " 
\t\t<div class=\"form-group\">
\t\t\t";
            // line 321
            echo ($context["post_text"] ?? null);
            echo "
\t\t</div>
\t";
        }
        // line 324
        echo "
</div>";
    }

    public function getTemplateName()
    {
        return "so-buyshop/template/extension/module/so_extra_slider/simple.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  762 => 324,  756 => 321,  751 => 319,  747 => 317,  737 => 310,  681 => 256,  671 => 250,  660 => 241,  650 => 235,  639 => 229,  635 => 228,  631 => 227,  627 => 226,  623 => 225,  619 => 224,  612 => 220,  608 => 219,  604 => 218,  600 => 217,  596 => 216,  590 => 213,  586 => 212,  582 => 211,  578 => 210,  574 => 209,  570 => 208,  566 => 207,  562 => 206,  558 => 205,  554 => 204,  548 => 200,  542 => 196,  535 => 193,  532 => 192,  522 => 185,  508 => 174,  504 => 173,  500 => 172,  488 => 162,  480 => 160,  474 => 158,  466 => 152,  460 => 149,  453 => 145,  447 => 142,  440 => 141,  436 => 140,  433 => 139,  426 => 138,  422 => 137,  419 => 136,  414 => 134,  409 => 133,  405 => 132,  398 => 130,  394 => 129,  389 => 127,  385 => 125,  379 => 123,  374 => 121,  368 => 118,  363 => 115,  359 => 114,  353 => 111,  346 => 110,  343 => 109,  339 => 108,  334 => 105,  323 => 102,  321 => 101,  318 => 100,  313 => 98,  307 => 96,  304 => 95,  300 => 94,  296 => 92,  293 => 91,  291 => 90,  287 => 88,  281 => 85,  276 => 84,  272 => 83,  269 => 82,  263 => 80,  258 => 78,  253 => 76,  249 => 74,  242 => 71,  234 => 70,  229 => 68,  223 => 65,  219 => 63,  215 => 58,  207 => 56,  200 => 54,  193 => 53,  191 => 52,  183 => 51,  180 => 50,  175 => 49,  171 => 48,  167 => 46,  161 => 45,  157 => 44,  151 => 41,  147 => 39,  140 => 37,  137 => 36,  133 => 35,  129 => 34,  118 => 32,  115 => 31,  112 => 30,  109 => 29,  106 => 28,  103 => 27,  101 => 26,  98 => 25,  96 => 24,  92 => 23,  87 => 22,  79 => 17,  76 => 16,  74 => 15,  69 => 12,  63 => 9,  58 => 7,  55 => 6,  50 => 4,  46 => 3,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "so-buyshop/template/extension/module/so_extra_slider/simple.twig", "/home/azhkhn/public_html/protidin.com.bd/catalog/view/theme/so-buyshop/template/extension/module/so_extra_slider/simple.twig");
    }
}
