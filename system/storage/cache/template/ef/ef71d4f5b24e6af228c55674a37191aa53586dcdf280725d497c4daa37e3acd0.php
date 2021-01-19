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

/* so-mobile/template/extension/module/so_extra_slider/default.twig */
class __TwigTemplate_4fe955da50dc03547ce3dac84cd4ed276e5399dab9aef5ed53c162e93cf51b30 extends \Twig\Template
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
\t\t\t\t<div class=\"extraslider-inner products-list \" data-effect=\"";
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

\t\t\t\t\t\t\t<div class=\"product-layout product-grid ";
                // line 41
                echo ($context["products_style"] ?? null);
                echo " \">
\t\t\t\t\t\t\t\t<div class=\"product-item-container\">
\t\t\t\t\t\t\t\t\t<div class=\"left-block\">\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t<div class=\"product-image-container ";
                // line 44
                if ((($context["product_image_num"] ?? null) == 2)) {
                    echo " ";
                    echo "second_img";
                    echo " ";
                }
                echo "\t\">
\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
                // line 45
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 45);
                echo "\" target=\"";
                echo ($context["item_link_target"] ?? null);
                echo "\" title=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "nameFull", [], "any", false, false, false, 45);
                echo " \"  >
\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 47
                if ((($context["product_image_num"] ?? null) == 2)) {
                    // line 48
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<img data-sizes=\"auto\" src=\"data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==\" data-src=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 48);
                    echo "\" class=\"img-thumb1 lazyload\" alt=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "nameFull", [], "any", false, false, false, 48);
                    echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<img data-sizes=\"auto\" src=\"data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==\" data-src=\"";
                    // line 49
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb2", [], "any", false, false, false, 49);
                    echo "\" class=\"img-thumb2 lazyload\" alt=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "nameFull", [], "any", false, false, false, 49);
                    echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t";
                } else {
                    // line 51
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<img class=\"lazyload\"   data-sizes=\"auto\" src=\"data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==\" data-src=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 51);
                    echo "\" alt=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "nameFull", [], "any", false, false, false, 51);
                    echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t";
                }
                // line 53
                echo "\t\t\t\t\t\t\t\t\t\t\t</a>\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"box-label\">
\t\t\t\t\t\t\t\t\t\t\t";
                // line 56
                if ((twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 56) && ($context["display_sale"] ?? null))) {
                    echo " 
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"label-product label-sale\">";
                    // line 57
                    echo " ";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "discount", [], "any", false, false, false, 57);
                    echo "  </span>
\t\t\t\t\t\t\t\t\t\t\t";
                }
                // line 58
                echo " 

\t\t\t\t\t\t\t\t\t\t\t";
                // line 60
                if ((twig_get_attribute($this->env, $this->source, $context["product"], "productNew", [], "any", false, false, false, 60) && ($context["display_new"] ?? null))) {
                    echo " 
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"label-product label-new\">";
                    // line 61
                    echo twig_get_attribute($this->env, $this->source, ($context["objlang"] ?? null), "get", [0 => "text_new"], "method", false, false, false, 61);
                    echo " </span>
\t\t\t\t\t\t\t\t\t\t\t";
                }
                // line 62
                echo " \t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t";
                // line 64
                if (((($context["display_addtocart"] ?? null) || ($context["display_wishlist"] ?? null)) || ($context["display_compare"] ?? null))) {
                    echo " 
\t\t\t\t\t\t\t\t\t\t\t<div class=\"button-group text-center\">
\t\t\t\t\t\t\t\t\t\t\t\t";
                    // line 66
                    if (($context["display_addtocart"] ?? null)) {
                        echo " 
\t\t\t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"addToCart btn-button\" title=\"";
                        // line 67
                        echo twig_get_attribute($this->env, $this->source, ($context["objlang"] ?? null), "get", [0 => "button_cart"], "method", false, false, false, 67);
                        echo "\" onclick=\"cart.add('";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 67);
                        echo " ');\"><i class=\"fa fa-shopping-cart\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        // line 68
                        if ((($context["nb_column0"] ?? null) != 6)) {
                            echo " 
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"hidden hidden-xs hidden-sm hidden-md\">";
                            // line 69
                            echo twig_get_attribute($this->env, $this->source, ($context["objlang"] ?? null), "get", [0 => "button_cart"], "method", false, false, false, 69);
                            echo " </span>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        }
                        // line 70
                        echo " 
\t\t\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t\t\t\t";
                    }
                    // line 72
                    echo " 
\t\t\t\t\t\t\t\t\t\t\t\t";
                    // line 73
                    if (($context["display_wishlist"] ?? null)) {
                        echo " 
\t\t\t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"wishlist btn-button\" title=\"";
                        // line 74
                        echo twig_get_attribute($this->env, $this->source, ($context["objlang"] ?? null), "get", [0 => "button_wishlist"], "method", false, false, false, 74);
                        echo " \" onclick=\"wishlist.add('";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 74);
                        echo " ');\"><i class=\"fa fa-heart\"></i></button>
\t\t\t\t\t\t\t\t\t\t\t\t";
                    }
                    // line 75
                    echo " 
\t\t\t\t\t\t\t\t\t\t\t\t";
                    // line 76
                    if (($context["display_compare"] ?? null)) {
                        echo " 
\t\t\t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"compare btn-button\" title=\"";
                        // line 77
                        echo twig_get_attribute($this->env, $this->source, ($context["objlang"] ?? null), "get", [0 => "button_compare"], "method", false, false, false, 77);
                        echo " \" onclick=\"compare.add('";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 77);
                        echo " ');\"><i class=\"fa fa-exchange\"></i></button>
\t\t\t\t\t\t\t\t\t\t\t\t";
                    }
                    // line 78
                    echo " 

\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"hidden\" data-product='";
                    // line 80
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 80);
                    echo "' href=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 80);
                    echo "\" target=\"";
                    echo ($context["item_link_target"] ?? null);
                    echo "\" ></a>
\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t";
                }
                // line 83
                echo " 
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t<div class=\"right-block\">
\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t<div class=\"caption\">
\t\t\t\t\t\t\t\t\t\t\t";
                // line 90
                if (($context["display_rating"] ?? null)) {
                    // line 91
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t";
                    if (twig_get_attribute($this->env, $this->source, $context["product"], "rating", [], "any", false, false, false, 91)) {
                        // line 92
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"rating\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        // line 93
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(range(1, 5));
                        foreach ($context['_seq'] as $context["_key"] => $context["k"]) {
                            // line 94
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                            $context["k"] = ($context["k"] + 1);
                            // line 95
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                            if ((twig_get_attribute($this->env, $this->source, $context["product"], "rating", [], "any", false, false, false, 95) < $context["k"])) {
                                echo " 
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-2x\"></i></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t \t";
                            } else {
                                // line 97
                                echo "   
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"fa fa-stack\"><i class=\"fa fa-star fa-stack-2x\"></i><i class=\"fa fa-star-o fa-stack-2x\"></i></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                            }
                            // line 99
                            echo " 
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['k'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 100
                        echo " 
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t";
                    } else {
                        // line 102
                        echo "  
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"rating\">
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        // line 104
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(range(1, 5));
                        foreach ($context['_seq'] as $context["_key"] => $context["j"]) {
                            // line 105
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                            $context["j"] = ($context["j"] + 1);
                            // line 106
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-2x\"></i></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['j'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 107
                        echo " 
\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t";
                    }
                    // line 110
                    echo "\t
\t\t\t\t\t\t\t\t\t\t\t";
                }
                // line 111
                echo "\t\t

\t\t\t\t\t\t\t\t\t\t\t";
                // line 113
                if (($context["display_title"] ?? null)) {
                    echo " 
\t\t\t\t\t\t\t\t\t\t\t\t<h4>
\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
                    // line 115
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 115);
                    echo "\" target=\"";
                    echo ($context["item_link_target"] ?? null);
                    echo "\" title=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "nameFull", [], "any", false, false, false, 115);
                    echo " \"  >
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    // line 116
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 116);
                    echo " 
\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t</h4>
\t\t\t\t\t\t\t\t\t\t\t";
                }
                // line 120
                echo "\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t";
                // line 121
                if (($context["display_price"] ?? null)) {
                    echo " 
\t\t\t\t\t\t\t\t\t\t\t\t<div  class=\"price\">
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    // line 123
                    if ( !twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 123)) {
                        echo " 
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"price-new\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        // line 125
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 125);
                        echo " 
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    } else {
                        // line 127
                        echo "   
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"price-new\">";
                        // line 128
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 128);
                        echo " </span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"price-old\">";
                        // line 129
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 129);
                        echo " </span>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    }
                    // line 130
                    echo " 
\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t";
                }
                // line 133
                echo " 
\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t";
                // line 135
                if (($context["display_description"] ?? null)) {
                    echo " 
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"item-des\">
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    // line 137
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "description", [], "any", false, false, false, 137);
                    echo " 
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t";
                }
                // line 139
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
                // line 152
                if (((($context["i"] % ($context["nb_rows"] ?? null)) == 0) || ($context["i"] == ($context["count_item"] ?? null)))) {
                    echo " 
\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
                }
                // line 154
                echo " 

\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['i'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 156
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
            // line 166
            echo ($context["delay"] ?? null);
            echo " ,
\t\t\t\t\t\t\t\t_duration = ";
            // line 167
            echo ($context["duration"] ?? null);
            echo " ,
\t\t\t\t\t\t\t\t_effect = '";
            // line 168
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
            // line 179
            if ((($context["dots"] ?? null) == "true")) {
                echo " 
\t\t\t\t\t\t\tif (\$(\".owl2-dot\", \$element).length < 2) {
\t\t\t\t\t\t\t\t\$(\".owl2-prev\", \$element).css(\"display\", \"none\");
\t\t\t\t\t\t\t\t\$(\".owl2-next\", \$element).css(\"display\", \"none\");
\t\t\t\t\t\t\t\t\$(\".owl2-dot\", \$element).css(\"display\", \"none\");
\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t";
            }
            // line 186
            echo "
\t\t\t\t\t\t\t/*";
            // line 187
            if ((($context["button_page"] ?? null) == "top")) {
                echo " 
\t\t\t\t\t\t\t\t\$(\".owl2-controls\", \$element).insertBefore(\$extraslider);
\t\t\t\t\t\t\t\t\$(\".owl2-dots\", \$element).insertAfter(\$(\".owl2-prev\", \$element));
\t\t\t\t\t\t\t";
            } else {
                // line 190
                echo "  
\t\t\t\t\t\t\t\t\$(\".owl2-nav\", \$element).insertBefore(\$extraslider);
\t\t\t\t\t\t\t\t\$(\".owl2-controls\", \$element).insertAfter(\$extraslider);
\t\t\t\t\t\t\t";
            }
            // line 193
            echo "*/

\t\t\t\t\t\t});

\t\t\t\t\t\t\$extraslider.owlCarousel2({
\t\t\t\t\t\t\trtl: ";
            // line 198
            echo ($context["direction"] ?? null);
            echo ",
\t\t\t\t\t\t\tmargin: ";
            // line 199
            echo ($context["margin"] ?? null);
            echo ",
\t\t\t\t\t\t\tslideBy: ";
            // line 200
            echo ($context["slideBy"] ?? null);
            echo ",
\t\t\t\t\t\t\tautoplay: ";
            // line 201
            echo ($context["autoplay"] ?? null);
            echo ",
\t\t\t\t\t\t\tautoplayHoverPause: ";
            // line 202
            echo ($context["autoplayHoverPause"] ?? null);
            echo ",
\t\t\t\t\t\t\tautoplayTimeout: ";
            // line 203
            echo ($context["autoplayTimeout"] ?? null);
            echo " ,
\t\t\t\t\t\t\tautoplaySpeed: ";
            // line 204
            echo ($context["autoplaySpeed"] ?? null);
            echo " ,
\t\t\t\t\t\t\tstartPosition: ";
            // line 205
            echo ($context["startPosition"] ?? null);
            echo " ,
\t\t\t\t\t\t\tmouseDrag: ";
            // line 206
            echo ($context["mouseDrag"] ?? null);
            echo ",
\t\t\t\t\t\t\ttouchDrag: ";
            // line 207
            echo ($context["touchDrag"] ?? null);
            echo " ,
\t\t\t\t\t\t\t
\t\t\t\t\t\t\tresponsive: {
\t\t\t\t\t\t\t\t0: \t{ items: ";
            // line 210
            echo ($context["nb_column4"] ?? null);
            echo " } ,
\t\t\t\t\t\t\t\t480: { items: ";
            // line 211
            echo ($context["nb_column3"] ?? null);
            echo " },
\t\t\t\t\t\t\t\t768: { items: ";
            // line 212
            echo ($context["nb_column2"] ?? null);
            echo " },
\t\t\t\t\t\t\t\t992: { items: ";
            // line 213
            echo ($context["nb_column1"] ?? null);
            echo " },
\t\t\t\t\t\t\t\t1200: {items: ";
            // line 214
            echo ($context["nb_column0"] ?? null);
            echo "}
\t\t\t\t\t\t\t},
\t\t\t\t\t\t\tdotClass: \"owl2-dot\",
\t\t\t\t\t\t\tdotsClass: \"owl2-dots\",
\t\t\t\t\t\t\tdots: ";
            // line 218
            echo ($context["dots"] ?? null);
            echo " ,
\t\t\t\t\t\t\tdotsSpeed:";
            // line 219
            echo ($context["dotsSpeed"] ?? null);
            echo " ,
\t\t\t\t\t\t\tnav: ";
            // line 220
            echo ($context["nav"] ?? null);
            echo " ,
\t\t\t\t\t\t\tloop: ";
            // line 221
            echo ($context["loop"] ?? null);
            echo " ,
\t\t\t\t\t\t\tnavSpeed: ";
            // line 222
            echo ($context["navSpeed"] ?? null);
            echo " ,
\t\t\t\t\t\t\tnavText: ['<i class=\"fa fa-chevron-left\"></i>', '<i class=\"fa fa-chevron-right\"></i>'],
\t\t\t\t\t\t\tnavClass: [\"owl2-prev\", \"owl2-next\"]

\t\t\t\t\t\t});

\t\t\t\t\t\t\$extraslider.on(\"translate.owl.carousel2\", function (e) {
\t\t\t\t        \t";
            // line 229
            if ((($context["dots"] ?? null) == "true")) {
                echo " 
\t\t\t\t        \tif (\$(\".owl2-dot\", \$element).length < 2) {
\t\t\t\t        \t\t\$(\".owl2-prev\", \$element).css(\"display\", \"none\");
\t\t\t\t        \t\t\$(\".owl2-next\", \$element).css(\"display\", \"none\");
\t\t\t\t        \t\t\$(\".owl2-dot\", \$element).css(\"display\", \"none\");
\t\t\t\t        \t}
\t\t\t\t        \t";
            }
            // line 235
            echo " 
\t\t\t\t        \tvar \$item_active = \$(\".owl2-item.active\", \$element);
\t\t\t\t        \t_UngetAnimate(\$item_active);
\t\t\t\t        \t_getAnimate(\$item_active);
\t\t\t\t        });
\t\t\t\t        \$extraslider.on(\"translated.owl.carousel2\", function (e) {
\t\t\t\t        \t";
            // line 241
            if ((($context["dots"] ?? null) == "true")) {
                echo " 
\t\t\t\t        \tif (\$(\".owl2-dot\", \$element).length < 2) {
\t\t\t\t        \t\t\$(\".owl2-prev\", \$element).css(\"display\", \"none\");
\t\t\t\t        \t\t\$(\".owl2-next\", \$element).css(\"display\", \"none\");
\t\t\t\t        \t\t\$(\".owl2-dot\", \$element).css(\"display\", \"none\");
\t\t\t\t        \t}
\t\t\t\t        \t";
            }
            // line 247
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
            // line 292
            echo ($context["tag_id"] ?? null);
            echo " \");
\t\t\t\t});
\t\t\t\t//]]>
\t\t\t</script>

\t\t\t</div>
\t\t";
        }
        // line 299
        echo "\t
\t</div> 
\t";
        // line 301
        if ( !twig_test_empty(twig_trim_filter(($context["post_text"] ?? null)))) {
            echo " 
\t\t<div class=\"form-group\">
\t\t\t";
            // line 303
            echo ($context["post_text"] ?? null);
            echo "
\t\t</div>
\t";
        }
        // line 306
        echo "
</div>";
    }

    public function getTemplateName()
    {
        return "so-mobile/template/extension/module/so_extra_slider/default.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  741 => 306,  735 => 303,  730 => 301,  726 => 299,  716 => 292,  669 => 247,  659 => 241,  651 => 235,  641 => 229,  631 => 222,  627 => 221,  623 => 220,  619 => 219,  615 => 218,  608 => 214,  604 => 213,  600 => 212,  596 => 211,  592 => 210,  586 => 207,  582 => 206,  578 => 205,  574 => 204,  570 => 203,  566 => 202,  562 => 201,  558 => 200,  554 => 199,  550 => 198,  543 => 193,  537 => 190,  530 => 187,  527 => 186,  517 => 179,  503 => 168,  499 => 167,  495 => 166,  483 => 156,  475 => 154,  469 => 152,  454 => 139,  448 => 137,  443 => 135,  439 => 133,  433 => 130,  428 => 129,  424 => 128,  421 => 127,  415 => 125,  410 => 123,  405 => 121,  402 => 120,  395 => 116,  387 => 115,  382 => 113,  378 => 111,  374 => 110,  368 => 107,  361 => 106,  358 => 105,  354 => 104,  350 => 102,  345 => 100,  338 => 99,  333 => 97,  326 => 95,  323 => 94,  319 => 93,  316 => 92,  313 => 91,  311 => 90,  302 => 83,  291 => 80,  287 => 78,  280 => 77,  276 => 76,  273 => 75,  266 => 74,  262 => 73,  259 => 72,  254 => 70,  249 => 69,  245 => 68,  239 => 67,  235 => 66,  230 => 64,  226 => 62,  221 => 61,  217 => 60,  213 => 58,  207 => 57,  203 => 56,  198 => 53,  190 => 51,  183 => 49,  176 => 48,  174 => 47,  165 => 45,  157 => 44,  151 => 41,  147 => 39,  140 => 37,  137 => 36,  133 => 35,  129 => 34,  118 => 32,  115 => 31,  112 => 30,  109 => 29,  106 => 28,  103 => 27,  101 => 26,  98 => 25,  96 => 24,  92 => 23,  87 => 22,  79 => 17,  76 => 16,  74 => 15,  69 => 12,  63 => 9,  58 => 7,  55 => 6,  50 => 4,  46 => 3,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "so-mobile/template/extension/module/so_extra_slider/default.twig", "/home/azhkhn/public_html/protidin.com.bd/catalog/view/theme/so-mobile/template/extension/module/so_extra_slider/default.twig");
    }
}
