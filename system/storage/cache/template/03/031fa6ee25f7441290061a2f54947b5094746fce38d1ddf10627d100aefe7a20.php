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

/* so-buyshop/template/extension/module/so_extra_slider/default.twig */
class __TwigTemplate_61e4b904c69f9032b259e73cb9e60916b66e1bd1efe7e93955492b36ebab80a6 extends \Twig\Template
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
        echo "<!-- default Grid  -->
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
\t\t<h3 class=\"modtitle\">";
            // line 4
            echo ($context["head_name"] ?? null);
            echo "
\t\t\t";
            // line 5
            if ((twig_length_filter($this->env, ($context["category"] ?? null)) == 1)) {
                echo " 
\t\t\t\t<a class=\"viewall\" href=\"";
                // line 6
                echo ($context["linkCategory"] ?? null);
                echo "\"> ";
                echo ($context["text_view_all"] ?? null);
                echo " <i class=\"fa fa-caret-right\" aria-hidden=\"true\"></i></a>
\t\t\t";
            }
            // line 8
            echo "\t\t</h3>
\t\t
\t";
        }
        // line 11
        echo "
\t";
        // line 12
        if ( !twig_test_empty(twig_trim_filter(($context["pre_text"] ?? null)))) {
            echo " 
\t\t<div class=\"form-group col-pre\">
\t\t\t";
            // line 14
            echo ($context["pre_text"] ?? null);
            echo "
\t\t</div>
\t";
        }
        // line 17
        echo "
\t<div class=\"modcontent\">
\t\t
\t\t";
        // line 20
        if (twig_test_empty(($context["products"] ?? null))) {
            // line 21
            echo "\t\t\t<div class=\"alert alert-info\"><i class=\"fa fa-info-circle\"></i> 
\t\t\t\t";
            // line 22
            echo ($context["text_noproduct"] ?? null);
            echo "
\t\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"alert\">×</button>
\t\t\t</div>

\t\t";
        } else {
            // line 27
            echo "\t\t\t";
            $context["count_item"] = twig_length_filter($this->env, ($context["products"] ?? null));
            echo "\t
\t\t\t";
            // line 28
            $context["cls_btn_page"] = (((($context["button_page"] ?? null) == "top")) ? ("buttom-type1") : ("button-type2"));
            echo "\t
\t\t\t";
            // line 29
            $context["btn_type"] = (((($context["button_page"] ?? null) == "top")) ? ("button-type1") : ("button-type2"));
            // line 30
            echo "\t\t\t
\t\t\t";
            // line 31
            $context["tag_id"] = ("so_extra_slider_" . ($context["suffix"] ?? null));
            // line 32
            echo "\t\t\t";
            $context["class_respl"] = ((((((((("preset00-" . ($context["nb_column0"] ?? null)) . " preset01-") . ($context["nb_column1"] ?? null)) . " preset02-") . ($context["nb_column2"] ?? null)) . " preset03-") . ($context["nb_column3"] ?? null)) . " preset04-") . ($context["nb_column4"] ?? null));
            // line 33
            echo "\t\t\t";
            $context["btn_prev"] = (((($context["button_page"] ?? null) == "top")) ? ("&#171") : ("&#139"));
            // line 34
            echo "\t\t\t";
            $context["btn_next"] = (((($context["button_page"] ?? null) == "top")) ? ("&#187") : ("&#155"));
            // line 35
            echo "\t\t\t";
            $context["i"] = 0;
            // line 36
            echo "
\t\t\t<div id=\"";
            // line 37
            echo ($context["tag_id"] ?? null);
            echo "\" class=\"so-extraslider ";
            echo ($context["cls_btn_page"] ?? null);
            echo " ";
            echo ($context["class_respl"] ?? null);
            echo " ";
            echo ($context["btn_type"] ?? null);
            echo "\">
\t\t\t\t<!-- Begin extraslider-inner -->
\t\t\t\t<div class=\"extraslider-inner products-list \" data-effect=\"";
            // line 39
            echo ($context["effect"] ?? null);
            echo "\">
\t\t\t\t\t";
            // line 40
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
            foreach ($context['_seq'] as $context["i"] => $context["product"]) {
                // line 41
                echo "\t\t\t\t\t\t";
                $context["i"] = ($context["i"] + 1);
                // line 42
                echo "\t\t\t\t\t\t";
                if (((($context["i"] % ($context["nb_rows"] ?? null)) == 1) || (($context["nb_rows"] ?? null) == 1))) {
                    echo " 
\t\t\t\t\t\t<div class=\"item \">
\t\t\t\t\t\t";
                }
                // line 44
                echo " 
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<div class=\"product-layout product-grid pro-row-";
                // line 46
                echo $context["i"];
                echo " ";
                echo ($context["products_style"] ?? null);
                echo " \">
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<div class=\"product-item-container\">
\t\t\t\t\t\t\t\t\t<div class=\"left-block\">\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t<div class=\"product-image-container ";
                // line 50
                if ((($context["product_image_num"] ?? null) == 2)) {
                    echo " ";
                    echo "second_img";
                    echo " ";
                }
                echo "\t\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"image\">
\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
                // line 52
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 52);
                echo "\" data-product='";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 52);
                echo "' target=\"";
                echo ($context["item_link_target"] ?? null);
                echo "\" title=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "nameFull", [], "any", false, false, false, 52);
                echo " \"  >
\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 53
                if ((($context["product_image_num"] ?? null) == 2)) {
                    // line 54
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<img data-sizes=\"auto\" src=\"data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==\" data-src=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 54);
                    echo "\" class=\"img-1 lazyload\" alt=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "nameFull", [], "any", false, false, false, 54);
                    echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<img data-sizes=\"auto\" src=\"data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==\" data-src=\"";
                    // line 55
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb2", [], "any", false, false, false, 55);
                    echo "\" class=\"img-2 lazyload\" alt=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "nameFull", [], "any", false, false, false, 55);
                    echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t";
                } else {
                    // line 57
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<img data-sizes=\"auto\" src=\"data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==\" data-src=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 57);
                    echo "\" alt=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "nameFull", [], "any", false, false, false, 57);
                    echo "\" class=\"lazyload\">
\t\t\t\t\t\t\t\t\t\t\t\t";
                }
                // line 58
                echo "\t\t
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t</div>\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"box-label\">
\t\t\t\t\t\t\t\t\t\t\t";
                // line 63
                if ((twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 63) && ($context["display_sale"] ?? null))) {
                    echo " 
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"label-product label-sale\">";
                    // line 64
                    echo " ";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "discount", [], "any", false, false, false, 64);
                    echo "  </span>
\t\t\t\t\t\t\t\t\t\t\t";
                }
                // line 65
                echo " 

\t\t\t\t\t\t\t\t\t\t\t";
                // line 67
                if ((twig_get_attribute($this->env, $this->source, $context["product"], "productNew", [], "any", false, false, false, 67) && ($context["display_new"] ?? null))) {
                    echo " 
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"label-product label-new\">";
                    // line 68
                    echo twig_get_attribute($this->env, $this->source, ($context["objlang"] ?? null), "get", [0 => "text_new"], "method", false, false, false, 68);
                    echo " </span>
\t\t\t\t\t\t\t\t\t\t\t";
                }
                // line 69
                echo " \t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t";
                // line 72
                if (((($context["display_compare"] ?? null) || ($context["display_add_to_cart"] ?? null)) || ($context["display_wishlist"] ?? null))) {
                    // line 73
                    echo "\t\t\t\t\t\t\t\t\t\t<div class=\"button-group cartinfo--center so-quickview\">
\t\t\t\t\t\t\t\t\t\t\t";
                    // line 74
                    if (($context["display_add_to_cart"] ?? null)) {
                        echo " 
\t\t\t\t\t\t\t\t\t\t\t<div class=\"btn-addToCart\">
\t\t\t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"addToCart btn-button\" title=\"";
                        // line 76
                        echo twig_get_attribute($this->env, $this->source, ($context["objlang"] ?? null), "get", [0 => "button_cart"], "method", false, false, false, 76);
                        echo "\" onclick=\"cart.add('";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 76);
                        echo " ');\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-shopping-cart\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t<span>";
                        // line 78
                        echo twig_get_attribute($this->env, $this->source, ($context["objlang"] ?? null), "get", [0 => "button_cart"], "method", false, false, false, 78);
                        echo " </span>\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t";
                    }
                    // line 82
                    echo "\t\t\t\t\t\t\t\t\t\t\t";
                    if (($context["display_wishlist"] ?? null)) {
                        echo " 
\t\t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"wishlist btn-button\" title=\"";
                        // line 83
                        echo twig_get_attribute($this->env, $this->source, ($context["objlang"] ?? null), "get", [0 => "button_wishlist"], "method", false, false, false, 83);
                        echo "\" onclick=\"wishlist.add('";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 83);
                        echo "');\"><i class=\"fa fa-heart-o\"></i><span>";
                        echo twig_get_attribute($this->env, $this->source, ($context["objlang"] ?? null), "get", [0 => "button_wishlist"], "method", false, false, false, 83);
                        echo "</span></button>
\t\t\t\t\t\t\t\t\t\t\t";
                    }
                    // line 84
                    echo " 
\t\t\t\t\t\t\t\t\t\t\t";
                    // line 85
                    if (($context["display_compare"] ?? null)) {
                        echo " 
\t\t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"compare btn-button\" title=\"";
                        // line 86
                        echo twig_get_attribute($this->env, $this->source, ($context["objlang"] ?? null), "get", [0 => "button_compare"], "method", false, false, false, 86);
                        echo " \" onclick=\"compare.add('";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 86);
                        echo "');\"><i class=\"fa fa-refresh\"></i><span>";
                        echo twig_get_attribute($this->env, $this->source, ($context["objlang"] ?? null), "get", [0 => "button_compare"], "method", false, false, false, 86);
                        echo "</span></button>

\t\t\t\t\t\t\t\t\t\t\t";
                    }
                    // line 89
                    echo "\t\t\t\t\t\t\t\t\t\t\t<a class=\"hidden\" data-product='";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 89);
                    echo "' href=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "link", [], "any", false, false, false, 89);
                    echo "\"></a>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t";
                }
                // line 92
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t<div class=\"right-block\">
\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t<div class=\"caption\">

\t\t\t\t\t\t\t\t\t\t\t";
                // line 99
                if (($context["display_title"] ?? null)) {
                    echo " 
\t\t\t\t\t\t\t\t\t\t\t\t<h4>
\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
                    // line 101
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 101);
                    echo "\" target=\"";
                    echo ($context["item_link_target"] ?? null);
                    echo "\" title=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "nameFull", [], "any", false, false, false, 101);
                    echo " \"  >
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    // line 102
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 102);
                    echo " 
\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t</h4>
\t\t\t\t\t\t\t\t\t\t\t";
                }
                // line 106
                echo "
\t\t\t\t\t\t\t\t\t\t\t";
                // line 107
                if (($context["display_price"] ?? null)) {
                    echo " 
\t\t\t\t\t\t\t\t\t\t\t\t<div  class=\"price\">
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    // line 109
                    if ( !twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 109)) {
                        echo " 
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"price-new\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        // line 111
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 111);
                        echo " 
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    } else {
                        // line 113
                        echo "   
\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"price-old\">";
                        // line 115
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 115);
                        echo " </span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"price-new\">";
                        // line 116
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 116);
                        echo " </span>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    }
                    // line 117
                    echo " 
\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t";
                }
                // line 120
                echo " 
\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t";
                // line 122
                if (($context["display_rating"] ?? null)) {
                    // line 123
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t";
                    if (twig_get_attribute($this->env, $this->source, $context["product"], "rating", [], "any", false, false, false, 123)) {
                        // line 124
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"rating\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"rating-box\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        // line 126
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(range(1, 5));
                        foreach ($context['_seq'] as $context["_key"] => $context["k"]) {
                            // line 127
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                            // line 128
                            if ((twig_get_attribute($this->env, $this->source, $context["product"], "rating", [], "any", false, false, false, 128) < $context["k"])) {
                                echo " 
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-2x\"></i></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t \t";
                            } else {
                                // line 130
                                echo "   
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"fa fa-stack\"><i class=\"fa fa-star fa-stack-2x\"></i></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                            }
                            // line 132
                            echo " 
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                            // line 133
                            $context["k"] = ($context["k"] + 1);
                            // line 134
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
                        // line 137
                        echo "  
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"rating\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"rating-box\">
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        // line 140
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(range(1, 5));
                        foreach ($context['_seq'] as $context["_key"] => $context["j"]) {
                            // line 141
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                            $context["j"] = ($context["j"] + 1);
                            // line 142
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-2x\"></i></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['j'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 143
                        echo " \t
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t";
                    }
                    // line 146
                    echo "\t
\t\t\t\t\t\t\t\t\t\t\t";
                }
                // line 147
                echo "\t

\t\t\t\t\t\t\t\t\t\t\t";
                // line 149
                if (($context["display_description"] ?? null)) {
                    echo " 
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"item-des\">
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    // line 151
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "description", [], "any", false, false, false, 151);
                    echo " 
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t";
                }
                // line 153
                echo " 
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t
\t\t\t\t\t
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<!-- End item-wrap-inner -->
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<!-- End item-wrap -->

\t\t\t\t\t\t";
                // line 166
                if (((($context["i"] % ($context["nb_rows"] ?? null)) == 0) || ($context["i"] == ($context["count_item"] ?? null)))) {
                    echo " 
\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
                }
                // line 168
                echo " 

\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['i'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 170
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
            // line 180
            echo ($context["delay"] ?? null);
            echo " ,
\t\t\t\t\t\t\t\t_duration = ";
            // line 181
            echo ($context["duration"] ?? null);
            echo " ,
\t\t\t\t\t\t\t\t_effect = '";
            // line 182
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
            // line 193
            if ((($context["dots"] ?? null) == "true")) {
                echo " 
\t\t\t\t\t\t\tif (\$(\".owl2-dot\", \$element).length < 2) {
\t\t\t\t\t\t\t\t\$(\".owl2-prev\", \$element).css(\"display\", \"none\");
\t\t\t\t\t\t\t\t\$(\".owl2-next\", \$element).css(\"display\", \"none\");
\t\t\t\t\t\t\t\t\$(\".owl2-dot\", \$element).css(\"display\", \"none\");
\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t";
            }
            // line 200
            echo "
\t\t\t\t\t\t\t";
            // line 201
            if ((($context["button_page"] ?? null) == "top")) {
                echo " 
\t\t\t\t\t\t\t\t\$(\".owl2-controls\", \$element).insertBefore(\$extraslider);
\t\t\t\t\t\t\t\t\$(\".owl2-dots\", \$element).insertAfter(\$(\".owl2-prev\", \$element));
\t\t\t\t\t\t\t";
            } else {
                // line 204
                echo "  
\t\t\t\t\t\t\t\t\$(\".owl2-nav\", \$element).insertBefore(\$extraslider);
\t\t\t\t\t\t\t\t\$(\".owl2-controls\", \$element).insertAfter(\$extraslider);
\t\t\t\t\t\t\t";
            }
            // line 208
            echo "
\t\t\t\t\t\t});

\t\t\t\t\t\t\$extraslider.owlCarousel2({
\t\t\t\t\t\t\trtl: ";
            // line 212
            echo ($context["direction"] ?? null);
            echo ",
\t\t\t\t\t\t\tmargin: ";
            // line 213
            echo ($context["margin"] ?? null);
            echo ",
\t\t\t\t\t\t\tslideBy: ";
            // line 214
            echo ($context["slideBy"] ?? null);
            echo ",
\t\t\t\t\t\t\tautoplay: ";
            // line 215
            echo ($context["autoplay"] ?? null);
            echo ",
\t\t\t\t\t\t\tautoplayHoverPause: ";
            // line 216
            echo ($context["autoplayHoverPause"] ?? null);
            echo ",
\t\t\t\t\t\t\tautoplayTimeout: ";
            // line 217
            echo ($context["autoplayTimeout"] ?? null);
            echo " ,
\t\t\t\t\t\t\tautoplaySpeed: ";
            // line 218
            echo ($context["autoplaySpeed"] ?? null);
            echo " ,
\t\t\t\t\t\t\tstartPosition: ";
            // line 219
            echo ($context["startPosition"] ?? null);
            echo " ,
\t\t\t\t\t\t\tmouseDrag: ";
            // line 220
            echo ($context["mouseDrag"] ?? null);
            echo ",
\t\t\t\t\t\t\ttouchDrag: ";
            // line 221
            echo ($context["touchDrag"] ?? null);
            echo " ,
\t\t\t\t\t\t\tautoWidth: false,
\t\t\t\t\t\t\tresponsive: {
\t\t\t\t\t\t\t\t0: \t{ items: ";
            // line 224
            echo ($context["nb_column4"] ?? null);
            echo " } ,
\t\t\t\t\t\t\t\t480: { items: ";
            // line 225
            echo ($context["nb_column3"] ?? null);
            echo " },
\t\t\t\t\t\t\t\t768: { items: ";
            // line 226
            echo ($context["nb_column2"] ?? null);
            echo " },
\t\t\t\t\t\t\t\t992: { items: ";
            // line 227
            echo ($context["nb_column1"] ?? null);
            echo " },
\t\t\t\t\t\t\t\t1200: {items: ";
            // line 228
            echo ($context["nb_column0"] ?? null);
            echo "}
\t\t\t\t\t\t\t},
\t\t\t\t\t\t\tdotClass: \"owl2-dot\",
\t\t\t\t\t\t\tdotsClass: \"owl2-dots\",
\t\t\t\t\t\t\tdots: ";
            // line 232
            echo ($context["dots"] ?? null);
            echo " ,
\t\t\t\t\t\t\tdotsSpeed:";
            // line 233
            echo ($context["dotsSpeed"] ?? null);
            echo " ,
\t\t\t\t\t\t\tnav: ";
            // line 234
            echo ($context["nav"] ?? null);
            echo " ,
\t\t\t\t\t\t\tloop: ";
            // line 235
            echo ($context["loop"] ?? null);
            echo " ,
\t\t\t\t\t\t\tnavSpeed: ";
            // line 236
            echo ($context["navSpeed"] ?? null);
            echo " ,
\t\t\t\t\t\t\tnavText: [\"";
            // line 237
            echo ($context["btn_prev"] ?? null);
            echo " \", \"";
            echo ($context["btn_next"] ?? null);
            echo " \"],
\t\t\t\t\t\t\tnavClass: [\"owl2-prev\", \"owl2-next\"]

\t\t\t\t\t\t});

\t\t\t\t\t\t\$extraslider.on(\"translate.owl.carousel2\", function (e) {
\t\t\t\t        \t";
            // line 243
            if ((($context["dots"] ?? null) == "true")) {
                echo " 
\t\t\t\t        \tif (\$(\".owl2-dot\", \$element).length < 2) {
\t\t\t\t        \t\t\$(\".owl2-prev\", \$element).css(\"display\", \"none\");
\t\t\t\t        \t\t\$(\".owl2-next\", \$element).css(\"display\", \"none\");
\t\t\t\t        \t\t\$(\".owl2-dot\", \$element).css(\"display\", \"none\");
\t\t\t\t        \t}
\t\t\t\t        \t";
            }
            // line 249
            echo " 
\t\t\t\t        \tvar \$item_active = \$(\".owl2-item.active\", \$element);
\t\t\t\t        \t_UngetAnimate(\$item_active);
\t\t\t\t        \t_getAnimate(\$item_active);
\t\t\t\t        });
\t\t\t\t        \$extraslider.on(\"translated.owl.carousel2\", function (e) {
\t\t\t\t        \t";
            // line 255
            if ((($context["dots"] ?? null) == "true")) {
                echo " 
\t\t\t\t        \tif (\$(\".owl2-dot\", \$element).length < 2) {
\t\t\t\t        \t\t\$(\".owl2-prev\", \$element).css(\"display\", \"none\");
\t\t\t\t        \t\t\$(\".owl2-next\", \$element).css(\"display\", \"none\");
\t\t\t\t        \t\t\$(\".owl2-dot\", \$element).css(\"display\", \"none\");
\t\t\t\t        \t}
\t\t\t\t        \t";
            }
            // line 261
            echo " 
\t\t\t\t        \tvar \$item_active = \$(\".owl2-item.active\", \$element);
\t\t\t\t        \tvar \$item = \$(\".owl2-item\", \$element);
\t\t\t\t        \t_UngetAnimate(\$item);
\t\t\t\t        \tif (\$item_active.length > 1 && _effect != \"none\") {
\t\t\t\t        \t\t_getAnimate(\$item_active);
\t\t\t\t        \t} else {
\t\t\t\t        \t\t\$item.css({\"opacity\": 1, \"filter\": \"alpha(opacity = 100)\"});
\t\t\t\t        \t}
\t\t\t\t        });
\t\t\t\t        function _getAnimate(\$el) {
\t\t\t\t        \tif (_effect == \"none\") return;
\t\t\t\t        \t//if (\$.browser.msie && parseInt(\$.browser.version, 10) <= 9) return;
\t\t\t\t        \t\$extraslider.removeClass(\"extra-animate\");
\t\t\t\t        \t\$el.each(function (i) {
\t\t\t\t        \t\tvar \$_el = \$(this);
\t\t\t\t        \t\tvar i= i + 1;
\t\t\t\t        \t\t\$(this).css({
\t\t\t\t        \t\t\t\"-webkit-animation\": _effect + \" \" + _duration + \"ms ease both\",
\t\t\t\t        \t\t\t\"-moz-animation\": _effect + \" \" + _duration + \"ms ease both\",
\t\t\t\t        \t\t\t\"-o-animation\": _effect + \" \" + _duration + \"ms ease both\",
\t\t\t\t        \t\t\t\"animation\": _effect + \" \" + _duration + \"ms ease both\",
\t\t\t\t        \t\t\t\"-webkit-animation-delay\": +i * _delay + \"ms\",
\t\t\t\t        \t\t\t\"-moz-animation-delay\": +i * _delay + \"ms\",
\t\t\t\t        \t\t\t\"-o-animation-delay\": +i * _delay + \"ms\",
\t\t\t\t        \t\t\t\"animation-delay\": +i * _delay + \"ms\",
\t\t\t\t        \t\t\t
\t\t\t\t        \t\t}).animate({
\t\t\t\t        \t\t\t
\t\t\t\t        \t\t});
\t\t\t\t        \t\tif (i == \$el.size() - 1) {
\t\t\t\t        \t\t\t\$extraslider.addClass(\"extra-animate\");
\t\t\t\t        \t\t}
\t\t\t\t        \t});
\t\t\t\t        }
\t\t\t\t        function _UngetAnimate(\$el) {
\t\t\t\t        \t\$el.each(function (i) {
\t\t\t\t        \t\t\$(this).css({
\t\t\t\t        \t\t\t\"animation\": \"\",
\t\t\t\t        \t\t\t\"-webkit-animation\": \"\",
\t\t\t\t        \t\t\t\"-moz-animation\": \"\",
\t\t\t\t        \t\t\t\"-o-animation\": \"\",
\t\t\t\t        \t\t});
\t\t\t\t        \t});
\t\t\t\t        } 
\t\t\t\t\t})(\"#";
            // line 306
            echo ($context["tag_id"] ?? null);
            echo " \");
\t\t\t\t});
\t\t\t\t//]]>
\t\t\t</script>

\t\t\t</div>
\t\t";
        }
        // line 313
        echo "\t
\t</div> 
\t";
        // line 315
        if ( !twig_test_empty(twig_trim_filter(($context["post_text"] ?? null)))) {
            echo " 
\t\t<div class=\"form-group\">
\t\t\t";
            // line 317
            echo ($context["post_text"] ?? null);
            echo "
\t\t</div>
\t";
        }
        // line 320
        echo "
</div>";
    }

    public function getTemplateName()
    {
        return "so-buyshop/template/extension/module/so_extra_slider/default.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  766 => 320,  760 => 317,  755 => 315,  751 => 313,  741 => 306,  694 => 261,  684 => 255,  676 => 249,  666 => 243,  655 => 237,  651 => 236,  647 => 235,  643 => 234,  639 => 233,  635 => 232,  628 => 228,  624 => 227,  620 => 226,  616 => 225,  612 => 224,  606 => 221,  602 => 220,  598 => 219,  594 => 218,  590 => 217,  586 => 216,  582 => 215,  578 => 214,  574 => 213,  570 => 212,  564 => 208,  558 => 204,  551 => 201,  548 => 200,  538 => 193,  524 => 182,  520 => 181,  516 => 180,  504 => 170,  496 => 168,  490 => 166,  475 => 153,  469 => 151,  464 => 149,  460 => 147,  456 => 146,  450 => 143,  443 => 142,  440 => 141,  436 => 140,  431 => 137,  420 => 134,  418 => 133,  415 => 132,  410 => 130,  404 => 128,  401 => 127,  397 => 126,  393 => 124,  390 => 123,  388 => 122,  384 => 120,  378 => 117,  373 => 116,  369 => 115,  365 => 113,  359 => 111,  354 => 109,  349 => 107,  346 => 106,  339 => 102,  331 => 101,  326 => 99,  317 => 92,  308 => 89,  298 => 86,  294 => 85,  291 => 84,  282 => 83,  277 => 82,  270 => 78,  263 => 76,  258 => 74,  255 => 73,  253 => 72,  248 => 69,  243 => 68,  239 => 67,  235 => 65,  229 => 64,  225 => 63,  218 => 58,  210 => 57,  203 => 55,  196 => 54,  194 => 53,  184 => 52,  175 => 50,  166 => 46,  162 => 44,  155 => 42,  152 => 41,  148 => 40,  144 => 39,  133 => 37,  130 => 36,  127 => 35,  124 => 34,  121 => 33,  118 => 32,  116 => 31,  113 => 30,  111 => 29,  107 => 28,  102 => 27,  94 => 22,  91 => 21,  89 => 20,  84 => 17,  78 => 14,  73 => 12,  70 => 11,  65 => 8,  58 => 6,  54 => 5,  50 => 4,  46 => 3,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "so-buyshop/template/extension/module/so_extra_slider/default.twig", "/home/azhkhn/public_html/protidin.com.bd/catalog/view/theme/so-buyshop/template/extension/module/so_extra_slider/default.twig");
    }
}
