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

/* so-mobile/template/extension/module/so_extra_slider/default2.twig */
class __TwigTemplate_d63574f63d3bc1d14e4f8b999620d46032acacafba15d367a8cccbed5cc90c57 extends \Twig\Template
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
        echo "<!-- use for layout 2 -->
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

\t\t\t\t\t\t\t<div class=\"product-layout product-grid ";
                // line 41
                echo ($context["products_style"] ?? null);
                echo " \">
\t\t\t\t\t\t\t\t<div class=\"product-item-container\">
\t\t\t\t\t\t\t\t\t<div class=\"right-block\">
\t\t\t\t\t\t\t\t\t\t<div class=\"box-label\">
\t\t\t\t\t\t\t\t\t\t\t";
                // line 45
                if ((twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 45) && ($context["display_sale"] ?? null))) {
                    echo " 
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"label-product label-sale\">";
                    // line 46
                    echo " ";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "discount", [], "any", false, false, false, 46);
                    echo "  </span>
\t\t\t\t\t\t\t\t\t\t\t";
                }
                // line 47
                echo " 

\t\t\t\t\t\t\t\t\t\t\t";
                // line 49
                if ((twig_get_attribute($this->env, $this->source, $context["product"], "productNew", [], "any", false, false, false, 49) && ($context["display_new"] ?? null))) {
                    echo " 
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"label-product label-new\">";
                    // line 50
                    echo twig_get_attribute($this->env, $this->source, ($context["objlang"] ?? null), "get", [0 => "text_new"], "method", false, false, false, 50);
                    echo " </span>
\t\t\t\t\t\t\t\t\t\t\t";
                }
                // line 51
                echo " \t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"caption\">
\t\t\t\t\t\t\t\t\t\t\t";
                // line 54
                if (($context["display_rating"] ?? null)) {
                    // line 55
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t";
                    if (twig_get_attribute($this->env, $this->source, $context["product"], "rating", [], "any", false, false, false, 55)) {
                        // line 56
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"rating\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        // line 57
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(range(1, 5));
                        foreach ($context['_seq'] as $context["_key"] => $context["k"]) {
                            // line 58
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                            $context["k"] = ($context["k"] + 1);
                            // line 59
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                            if ((twig_get_attribute($this->env, $this->source, $context["product"], "rating", [], "any", false, false, false, 59) < $context["k"])) {
                                echo " 
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-2x\"></i></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t \t";
                            } else {
                                // line 61
                                echo "   
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"fa fa-stack\"><i class=\"fa fa-star fa-stack-2x\"></i><i class=\"fa fa-star-o fa-stack-2x\"></i></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                            }
                            // line 63
                            echo " 
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['k'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 64
                        echo " 
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t";
                    } else {
                        // line 66
                        echo "  
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"rating\">
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        // line 68
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(range(1, 5));
                        foreach ($context['_seq'] as $context["_key"] => $context["j"]) {
                            // line 69
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                            $context["j"] = ($context["j"] + 1);
                            // line 70
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-2x\"></i></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['j'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 71
                        echo " 
\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t";
                    }
                    // line 74
                    echo "\t
\t\t\t\t\t\t\t\t\t\t\t";
                }
                // line 75
                echo "\t\t

\t\t\t\t\t\t\t\t\t\t\t";
                // line 77
                if (($context["display_title"] ?? null)) {
                    echo " 
\t\t\t\t\t\t\t\t\t\t\t\t<h4>
\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
                    // line 79
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 79);
                    echo "\" target=\"";
                    echo ($context["item_link_target"] ?? null);
                    echo "\" title=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "nameFull", [], "any", false, false, false, 79);
                    echo " \"  >
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    // line 80
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 80);
                    echo " 
\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t</h4>
\t\t\t\t\t\t\t\t\t\t\t";
                }
                // line 84
                echo "\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t";
                // line 85
                if (($context["display_price"] ?? null)) {
                    echo " 
\t\t\t\t\t\t\t\t\t\t\t\t<div  class=\"price\">
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    // line 87
                    if ( !twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 87)) {
                        echo " 
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"price-new\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        // line 89
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 89);
                        echo " 
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    } else {
                        // line 91
                        echo "   
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"price-new\">";
                        // line 92
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 92);
                        echo " </span>&nbsp;&nbsp;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"price-old\">";
                        // line 93
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 93);
                        echo " </span>&nbsp;
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    }
                    // line 94
                    echo " 
\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t";
                }
                // line 97
                echo " 
\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t";
                // line 99
                if (($context["display_description"] ?? null)) {
                    echo " 
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"item-des\">
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    // line 101
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "description", [], "any", false, false, false, 101);
                    echo " 
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t";
                }
                // line 103
                echo " 
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t<div class=\"left-block\">
\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t<div class=\"product-image-container ";
                // line 111
                if ((($context["product_image_num"] ?? null) == 2)) {
                    echo " ";
                    echo "second_img";
                    echo " ";
                }
                echo "\t\">
\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
                // line 112
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 112);
                echo "\" target=\"";
                echo ($context["item_link_target"] ?? null);
                echo "\" title=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "nameFull", [], "any", false, false, false, 112);
                echo " \"  >
\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 113
                if ((($context["product_image_num"] ?? null) == 2)) {
                    // line 114
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 114);
                    echo "\" class=\"img-1 img-responsive\" alt=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "nameFull", [], "any", false, false, false, 114);
                    echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"";
                    // line 115
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb2", [], "any", false, false, false, 115);
                    echo "\" class=\"img-2 img-responsive\" alt=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "nameFull", [], "any", false, false, false, 115);
                    echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t";
                } else {
                    // line 116
                    echo " 
\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"";
                    // line 117
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 117);
                    echo "\" alt=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "nameFull", [], "any", false, false, false, 117);
                    echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t";
                }
                // line 118
                echo "\t\t
\t\t\t\t\t\t\t\t\t\t\t</a>\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t";
                // line 122
                if (((($context["display_addtocart"] ?? null) || ($context["display_wishlist"] ?? null)) || ($context["display_compare"] ?? null))) {
                    echo " 
\t\t\t\t\t\t\t\t\t\t\t<div class=\"button-group so-quickview\">
\t\t\t\t\t\t\t\t\t\t\t\t";
                    // line 124
                    if (($context["display_addtocart"] ?? null)) {
                        echo " 
\t\t\t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"addToCart btn-button\" title=\"";
                        // line 125
                        echo twig_get_attribute($this->env, $this->source, ($context["objlang"] ?? null), "get", [0 => "button_cart"], "method", false, false, false, 125);
                        echo "\" onclick=\"cart.add('";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 125);
                        echo " ');\"><i class=\"fa fa-shopping-cart\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        // line 126
                        if ((($context["nb_column0"] ?? null) != 6)) {
                            echo " 
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"hidden hidden-xs hidden-sm hidden-md\">";
                            // line 127
                            echo twig_get_attribute($this->env, $this->source, ($context["objlang"] ?? null), "get", [0 => "button_cart"], "method", false, false, false, 127);
                            echo " </span>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        }
                        // line 128
                        echo " 
\t\t\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t\t\t\t";
                    }
                    // line 130
                    echo " 
\t\t\t\t\t\t\t\t\t\t\t\t";
                    // line 131
                    if (($context["display_wishlist"] ?? null)) {
                        echo " 
\t\t\t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"wishlist btn-button\" title=\"";
                        // line 132
                        echo twig_get_attribute($this->env, $this->source, ($context["objlang"] ?? null), "get", [0 => "button_wishlist"], "method", false, false, false, 132);
                        echo " \" onclick=\"wishlist.add('";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 132);
                        echo " ');\"><i class=\"fa fa-heart\"></i></button>
\t\t\t\t\t\t\t\t\t\t\t\t";
                    }
                    // line 133
                    echo " 
\t\t\t\t\t\t\t\t\t\t\t\t";
                    // line 134
                    if (($context["display_compare"] ?? null)) {
                        echo " 
\t\t\t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"compare btn-button\" title=\"";
                        // line 135
                        echo twig_get_attribute($this->env, $this->source, ($context["objlang"] ?? null), "get", [0 => "button_compare"], "method", false, false, false, 135);
                        echo " \" onclick=\"compare.add('";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 135);
                        echo " ');\"><i class=\"fa fa-exchange\"></i></button>
\t\t\t\t\t\t\t\t\t\t\t\t";
                    }
                    // line 136
                    echo " 

\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"hidden\" data-product='";
                    // line 138
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 138);
                    echo "' href=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 138);
                    echo "\" target=\"";
                    echo ($context["item_link_target"] ?? null);
                    echo "\" ></a>\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t";
                }
                // line 140
                echo " 

\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<!-- End item-wrap-inner -->
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<!-- End item-wrap -->

\t\t\t\t\t\t";
                // line 151
                if (((($context["i"] % ($context["nb_rows"] ?? null)) == 0) || ($context["i"] == ($context["count_item"] ?? null)))) {
                    echo " 
\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
                }
                // line 153
                echo " 

\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['i'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 155
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
            // line 165
            echo ($context["delay"] ?? null);
            echo " ,
\t\t\t\t\t\t\t\t_duration = ";
            // line 166
            echo ($context["duration"] ?? null);
            echo " ,
\t\t\t\t\t\t\t\t_effect = '";
            // line 167
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
            // line 178
            if ((($context["dots"] ?? null) == "true")) {
                echo " 
\t\t\t\t\t\t\tif (\$(\".owl2-dot\", \$element).length < 2) {
\t\t\t\t\t\t\t\t\$(\".owl2-prev\", \$element).css(\"display\", \"none\");
\t\t\t\t\t\t\t\t\$(\".owl2-next\", \$element).css(\"display\", \"none\");
\t\t\t\t\t\t\t\t\$(\".owl2-dot\", \$element).css(\"display\", \"none\");
\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t";
            }
            // line 185
            echo "
\t\t\t\t\t\t\t";
            // line 186
            if ((($context["button_page"] ?? null) == "top")) {
                echo " 
\t\t\t\t\t\t\t\t\$(\".owl2-controls\", \$element).insertBefore(\$extraslider);
\t\t\t\t\t\t\t\t\$(\".owl2-dots\", \$element).insertAfter(\$(\".owl2-prev\", \$element));
\t\t\t\t\t\t\t";
            } else {
                // line 189
                echo "  
\t\t\t\t\t\t\t\t\$(\".owl2-nav\", \$element).insertBefore(\$extraslider);
\t\t\t\t\t\t\t\t\$(\".owl2-controls\", \$element).insertAfter(\$extraslider);
\t\t\t\t\t\t\t";
            }
            // line 193
            echo "
\t\t\t\t\t\t});

\t\t\t\t\t\t\$extraslider.owlCarousel2({
\t\t\t\t\t\t\trtl: ";
            // line 197
            echo ($context["direction"] ?? null);
            echo ",
\t\t\t\t\t\t\tmargin: ";
            // line 198
            echo ($context["margin"] ?? null);
            echo ",
\t\t\t\t\t\t\tslideBy: ";
            // line 199
            echo ($context["slideBy"] ?? null);
            echo ",
\t\t\t\t\t\t\tautoplay: ";
            // line 200
            echo ($context["autoplay"] ?? null);
            echo ",
\t\t\t\t\t\t\tautoplayHoverPause: ";
            // line 201
            echo ($context["autoplayHoverPause"] ?? null);
            echo ",
\t\t\t\t\t\t\tautoplayTimeout: ";
            // line 202
            echo ($context["autoplayTimeout"] ?? null);
            echo " ,
\t\t\t\t\t\t\tautoplaySpeed: ";
            // line 203
            echo ($context["autoplaySpeed"] ?? null);
            echo " ,
\t\t\t\t\t\t\tstartPosition: ";
            // line 204
            echo ($context["startPosition"] ?? null);
            echo " ,
\t\t\t\t\t\t\tmouseDrag: ";
            // line 205
            echo ($context["mouseDrag"] ?? null);
            echo ",
\t\t\t\t\t\t\ttouchDrag: ";
            // line 206
            echo ($context["touchDrag"] ?? null);
            echo " ,
\t\t\t\t\t\t\tautoWidth: false,
\t\t\t\t\t\t\tresponsive: {
\t\t\t\t\t\t\t\t0: \t{ items: ";
            // line 209
            echo ($context["nb_column4"] ?? null);
            echo " } ,
\t\t\t\t\t\t\t\t480: { items: ";
            // line 210
            echo ($context["nb_column3"] ?? null);
            echo " },
\t\t\t\t\t\t\t\t768: { items: ";
            // line 211
            echo ($context["nb_column2"] ?? null);
            echo " },
\t\t\t\t\t\t\t\t992: { items: ";
            // line 212
            echo ($context["nb_column1"] ?? null);
            echo " },
\t\t\t\t\t\t\t\t1200: {items: ";
            // line 213
            echo ($context["nb_column0"] ?? null);
            echo "}
\t\t\t\t\t\t\t},
\t\t\t\t\t\t\tdotClass: \"owl2-dot\",
\t\t\t\t\t\t\tdotsClass: \"owl2-dots\",
\t\t\t\t\t\t\tdots: ";
            // line 217
            echo ($context["dots"] ?? null);
            echo " ,
\t\t\t\t\t\t\tdotsSpeed:";
            // line 218
            echo ($context["dotsSpeed"] ?? null);
            echo " ,
\t\t\t\t\t\t\tnav: ";
            // line 219
            echo ($context["nav"] ?? null);
            echo " ,
\t\t\t\t\t\t\tloop: ";
            // line 220
            echo ($context["loop"] ?? null);
            echo " ,
\t\t\t\t\t\t\tnavSpeed: ";
            // line 221
            echo ($context["navSpeed"] ?? null);
            echo " ,
\t\t\t\t\t\t\tnavText: [\"";
            // line 222
            echo ($context["btn_prev"] ?? null);
            echo " \", \"";
            echo ($context["btn_next"] ?? null);
            echo " \"],
\t\t\t\t\t\t\tnavClass: [\"owl2-prev\", \"owl2-next\"]

\t\t\t\t\t\t});

\t\t\t\t\t\t\$extraslider.on(\"translate.owl.carousel2\", function (e) {
\t\t\t\t\t\t\t";
            // line 228
            if ((($context["dots"] ?? null) == "true")) {
                echo " 
\t\t\t\t\t\t\tif (\$(\".owl2-dot\", \$element).length < 2) {
\t\t\t\t\t\t\t\t\$(\".owl2-prev\", \$element).css(\"display\", \"none\");
\t\t\t\t\t\t\t\t\$(\".owl2-next\", \$element).css(\"display\", \"none\");
\t\t\t\t\t\t\t\t\$(\".owl2-dot\", \$element).css(\"display\", \"none\");
\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t";
            }
            // line 234
            echo " 

\t\t\t\t\t\t\tvar \$item_active = \$(\".owl2-item.active\", \$element);
\t\t\t\t\t\t\t_UngetAnimate(\$item_active);
\t\t\t\t\t\t\t_getAnimate(\$item_active);
\t\t\t\t\t\t});

\t\t\t\t\t\t\$extraslider.on(\"translated.owl.carousel2\", function (e) {

\t\t\t\t\t\t\t";
            // line 243
            if ((($context["dots"] ?? null) == "true")) {
                echo " 
\t\t\t\t\t\t\tif (\$(\".owl2-dot\", \$element).length < 2) {
\t\t\t\t\t\t\t\t\$(\".owl2-prev\", \$element).css(\"display\", \"none\");
\t\t\t\t\t\t\t\t\$(\".owl2-next\", \$element).css(\"display\", \"none\");
\t\t\t\t\t\t\t\t\$(\".owl2-dot\", \$element).css(\"display\", \"none\");
\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t";
            }
            // line 249
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
            // line 303
            echo ($context["tag_id"] ?? null);
            echo " \");
\t\t\t\t});
\t\t\t\t//]]>
\t\t\t</script>

\t\t\t</div>
\t\t";
        }
        // line 310
        echo "\t
\t</div> 
\t";
        // line 312
        if ( !twig_test_empty(twig_trim_filter(($context["post_text"] ?? null)))) {
            echo " 
\t\t<div class=\"form-group\">
\t\t\t";
            // line 314
            echo ($context["post_text"] ?? null);
            echo "
\t\t</div>
\t";
        }
        // line 317
        echo "
</div>";
    }

    public function getTemplateName()
    {
        return "so-mobile/template/extension/module/so_extra_slider/default2.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  759 => 317,  753 => 314,  748 => 312,  744 => 310,  734 => 303,  678 => 249,  668 => 243,  657 => 234,  647 => 228,  636 => 222,  632 => 221,  628 => 220,  624 => 219,  620 => 218,  616 => 217,  609 => 213,  605 => 212,  601 => 211,  597 => 210,  593 => 209,  587 => 206,  583 => 205,  579 => 204,  575 => 203,  571 => 202,  567 => 201,  563 => 200,  559 => 199,  555 => 198,  551 => 197,  545 => 193,  539 => 189,  532 => 186,  529 => 185,  519 => 178,  505 => 167,  501 => 166,  497 => 165,  485 => 155,  477 => 153,  471 => 151,  458 => 140,  448 => 138,  444 => 136,  437 => 135,  433 => 134,  430 => 133,  423 => 132,  419 => 131,  416 => 130,  411 => 128,  406 => 127,  402 => 126,  396 => 125,  392 => 124,  387 => 122,  381 => 118,  374 => 117,  371 => 116,  364 => 115,  357 => 114,  355 => 113,  347 => 112,  339 => 111,  329 => 103,  323 => 101,  318 => 99,  314 => 97,  308 => 94,  303 => 93,  299 => 92,  296 => 91,  290 => 89,  285 => 87,  280 => 85,  277 => 84,  270 => 80,  262 => 79,  257 => 77,  253 => 75,  249 => 74,  243 => 71,  236 => 70,  233 => 69,  229 => 68,  225 => 66,  220 => 64,  213 => 63,  208 => 61,  201 => 59,  198 => 58,  194 => 57,  191 => 56,  188 => 55,  186 => 54,  181 => 51,  176 => 50,  172 => 49,  168 => 47,  162 => 46,  158 => 45,  151 => 41,  147 => 39,  140 => 37,  137 => 36,  133 => 35,  129 => 34,  118 => 32,  115 => 31,  112 => 30,  109 => 29,  106 => 28,  103 => 27,  101 => 26,  98 => 25,  96 => 24,  92 => 23,  87 => 22,  79 => 17,  76 => 16,  74 => 15,  69 => 12,  63 => 9,  58 => 7,  55 => 6,  50 => 4,  46 => 3,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "so-mobile/template/extension/module/so_extra_slider/default2.twig", "/home/azhkhn/public_html/protidin.com.bd/catalog/view/theme/so-mobile/template/extension/module/so_extra_slider/default2.twig");
    }
}
