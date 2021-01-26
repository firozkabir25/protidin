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

/* so-buyshop/template/product/product.twig */
class __TwigTemplate_485f334b7a1adbfec2a8fb6758d108f78ddcfaaac76c0597ad72f16f7b20b808 extends \Twig\Template
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
        echo ($context["header"] ?? null);
        echo "

";
        // line 4
        $this->loadTemplate((($context["theme_directory"] ?? null) . "/template/soconfig/breadcrumbs.twig"), "so-buyshop/template/product/product.twig", 4)->display($context);
        // line 5
        echo "

";
        // line 8
        if (($context["url_asidePosition"] ?? null)) {
            $context["col_position"] = ($context["url_asidePosition"] ?? null);
        } else {
            // line 9
            $context["col_position"] = twig_get_attribute($this->env, $this->source, ($context["soconfig"] ?? null), "get_settings", [0 => "catalog_col_position"], "method", false, false, false, 9);
        }
        // line 10
        echo "
";
        // line 11
        if (($context["url_asideType"] ?? null)) {
            echo " ";
            $context["col_canvas"] = ($context["url_asideType"] ?? null);
        } else {
            // line 12
            $context["col_canvas"] = twig_get_attribute($this->env, $this->source, ($context["soconfig"] ?? null), "get_settings", [0 => "catalog_col_type"], "method", false, false, false, 12);
        }
        // line 13
        echo "
";
        // line 14
        if (($context["url_productGallery"] ?? null)) {
            echo " ";
            $context["productGallery"] = ($context["url_productGallery"] ?? null);
        } else {
            // line 15
            $context["productGallery"] = twig_get_attribute($this->env, $this->source, ($context["soconfig"] ?? null), "get_settings", [0 => "thumbnails_position"], "method", false, false, false, 15);
        }
        // line 16
        echo "
";
        // line 17
        if (($context["url_sidebarsticky"] ?? null)) {
            echo " ";
            $context["sidebar_sticky"] = ($context["url_sidebarsticky"] ?? null);
        } else {
            // line 18
            echo " ";
            $context["sidebar_sticky"] = twig_get_attribute($this->env, $this->source, ($context["soconfig"] ?? null), "get_settings", [0 => "catalog_sidebar_sticky"], "method", false, false, false, 18);
        }
        // line 19
        echo "
";
        // line 20
        $context["desktop_canvas"] = (((($context["col_canvas"] ?? null) == "off_canvas")) ? ("desktop-offcanvas") : (""));
        // line 21
        echo "
<div class=\"content-main container product-detail ";
        // line 22
        echo ($context["productGallery"] ?? null);
        echo " ";
        echo ($context["desktop_canvas"] ?? null);
        echo "\">
\t<div class=\"contain\">
\t\t<div class=\"row\">
\t\t\t
\t\t\t";
        // line 27
        echo "\t\t\t";
        if ((($context["col_position"] ?? null) == "outside")) {
            // line 28
            echo "\t\t\t\t";
            echo ($context["column_left"] ?? null);
            echo "
\t\t\t\t
\t\t\t\t";
            // line 30
            if ((($context["col_canvas"] ?? null) == "off_canvas")) {
                // line 31
                echo "\t\t\t\t\t";
                $context["class_pos"] = "col-sm-12";
                // line 32
                echo "\t\t    \t";
            } elseif ((($context["column_left"] ?? null) && ($context["column_right"] ?? null))) {
                // line 33
                echo "\t\t    \t\t";
                $context["class_pos"] = "col-md-6 col-xs-12 fluid-allsidebar";
                // line 34
                echo "\t\t\t    ";
            } elseif ((($context["column_left"] ?? null) || ($context["column_right"] ?? null))) {
                // line 35
                echo "\t\t\t    \t";
                $context["class_pos"] = "col-md-9 col-sm-12 col-xs-12 fluid-sidebar";
                // line 36
                echo "\t\t\t    ";
            } else {
                // line 37
                echo "\t\t\t    \t";
                $context["class_pos"] = "col-sm-12";
                // line 38
                echo "\t\t\t    ";
            }
            // line 39
            echo "\t\t\t";
        } else {
            // line 40
            echo "\t\t\t\t";
            $context["class_pos"] = "col-sm-12";
            // line 41
            echo "\t\t\t";
        }
        // line 42
        echo "\t\t\t";
        // line 43
        echo "\t    \t
\t\t\t<div id=\"content\" class=\"product-view ";
        // line 44
        echo ($context["class_pos"] ?? null);
        echo "\"> 
\t\t\t
\t\t\t";
        // line 47
        echo "\t\t\t";
        if ((($context["productGallery"] ?? null) == "grid")) {
            // line 48
            echo "\t\t\t\t";
            $context["class_left_gallery"] = "col-md-6 col-sm-12 col-xs-12";
            // line 49
            echo "\t\t\t\t";
            $context["class_right_gallery"] = "col-md-6 col-sm-12 col-xs-12";
            // line 50
            echo "\t\t\t";
        } elseif ((($context["productGallery"] ?? null) == "list")) {
            // line 51
            echo "\t\t\t\t";
            $context["class_left_gallery"] = "col-md-5 col-sm-12 col-xs-12";
            // line 52
            echo "\t\t\t\t";
            $context["class_right_gallery"] = "col-md-7 col-sm-12 col-xs-12";
            // line 53
            echo "\t\t\t";
        } elseif ((($context["productGallery"] ?? null) == "left")) {
            // line 54
            echo "\t\t\t\t";
            $context["class_left_gallery"] = "col-md-6 col-sm-12 col-xs-12";
            // line 55
            echo "\t\t\t\t";
            $context["class_right_gallery"] = "col-md-6 col-sm-12 col-xs-12";
            // line 56
            echo "\t\t\t\t";
        } elseif ((($context["productGallery"] ?? null) == "bottom")) {
            // line 57
            echo "\t\t\t";
            $context["class_left_gallery"] = "col-md-5 col-sm-12 col-xs-12";
            // line 58
            echo "\t\t\t\t";
            $context["class_right_gallery"] = "col-md-7 col-sm-12 col-xs-12";
            // line 59
            echo "\t\t\t";
        } else {
            // line 60
            echo "\t\t\t\t";
            $context["class_left_gallery"] = "col-md-12 col-sm-12 col-xs-12";
            // line 61
            echo "\t\t\t\t";
            $context["class_right_gallery"] = "col-md-12 col-sm-12 col-xs-12 col-gallery-slider";
            // line 62
            echo "\t\t\t";
        }
        // line 63
        echo "
\t\t\t";
        // line 65
        echo "\t\t

\t\t\t";
        // line 67
        $context["class_canvas"] = (((($context["col_canvas"] ?? null) == "off_canvas")) ? ("") : ("hidden-lg hidden-md"));
        // line 68
        echo "\t\t\t";
        if (($context["column_left"] ?? null)) {
            // line 69
            echo "\t\t\t\t<a href=\"javascript:void(0)\" class=\" open-leftsidebar ";
            echo ($context["class_canvas"] ?? null);
            echo "\"><i class=\"fa fa-align-left\"></i>";
            echo ($context["text_sidebar"] ?? null);
            echo "</a>
\t\t\t\t<div class=\"sidebar-overlay left\"></div>
\t\t\t";
        }
        // line 72
        echo "\t\t\t";
        if (($context["column_right"] ?? null)) {
            // line 73
            echo "\t\t\t<a href=\"javascript:void(0)\" class=\" open-rightsidebar ";
            echo ($context["class_canvas"] ?? null);
            echo "\"><i class=\"fa fa-align-right\"></i>";
            echo ($context["text_sidebar"] ?? null);
            echo "</a>
\t\t\t\t<div class=\"sidebar-overlay right\"></div>
\t\t\t";
        }
        // line 76
        echo "
\t\t\t<div class=\"content-product-mainheader clearfix\"> 
\t\t\t\t<div class=\"row\">\t
\t\t\t\t";
        // line 80
        echo "\t\t\t\t<div class=\"content-product-left  ";
        echo ($context["class_left_gallery"] ?? null);
        echo "\" >
\t\t\t\t\t";
        // line 81
        if (($context["images"] ?? null)) {
            // line 82
            echo "\t\t\t\t\t\t<div class=\"so-loadeding\" ></div>
\t\t\t\t\t\t";
            // line 84
            echo "\t\t\t\t\t\t";
            if ((($context["productGallery"] ?? null) == "left")) {
                // line 85
                echo "\t\t\t\t\t\t \t";
                $this->loadTemplate((($context["theme_directory"] ?? null) . "/template/product/gallery/gallery-left.twig"), "so-buyshop/template/product/product.twig", 85)->display($context);
                // line 86
                echo "
\t\t\t\t\t\t";
            } elseif ((            // line 87
($context["productGallery"] ?? null) == "bottom")) {
                // line 88
                echo "\t\t\t\t\t\t\t";
                $this->loadTemplate((($context["theme_directory"] ?? null) . "/template/product/gallery/gallery-bottom.twig"), "so-buyshop/template/product/product.twig", 88)->display($context);
                // line 89
                echo "
\t\t\t\t\t\t";
            } elseif ((            // line 90
($context["productGallery"] ?? null) == "grid")) {
                // line 91
                echo "\t\t\t\t\t\t\t";
                $this->loadTemplate((($context["theme_directory"] ?? null) . "/template/product/gallery/gallery-grid.twig"), "so-buyshop/template/product/product.twig", 91)->display($context);
                // line 92
                echo "
\t\t\t\t\t\t";
            } elseif ((            // line 93
($context["productGallery"] ?? null) == "list")) {
                // line 94
                echo "\t\t\t\t\t\t\t";
                $this->loadTemplate((($context["theme_directory"] ?? null) . "/template/product/gallery/gallery-list.twig"), "so-buyshop/template/product/product.twig", 94)->display($context);
                // line 95
                echo "
\t\t\t\t\t\t";
            } elseif ((            // line 96
($context["productGallery"] ?? null) == "slider")) {
                // line 97
                echo "\t\t\t\t\t\t\t";
                $this->loadTemplate((($context["theme_directory"] ?? null) . "/template/product/gallery/gallery-slider.twig"), "so-buyshop/template/product/product.twig", 97)->display($context);
                // line 98
                echo "\t\t\t\t\t\t";
            }
            // line 99
            echo "\t\t\t\t\t";
        }
        // line 100
        echo "\t\t\t\t</div>
\t        \t";
        // line 102
        echo "
\t\t\t\t";
        // line 104
        echo "\t\t\t\t<div class=\"content-product-right ";
        echo ($context["class_right_gallery"] ?? null);
        echo "\" itemprop=\"offerDetails\" itemscope itemtype=\"http://schema.org/Product\">
\t\t\t\t\t<div class=\"title-product\">
\t\t\t\t\t\t <h1 itemprop=\"name\">";
        // line 106
        echo ($context["heading_title"] ?? null);
        echo "</h1>
\t\t\t\t\t</div>
\t\t\t\t\t
\t\t\t\t\t";
        // line 109
        if (($context["review_status"] ?? null)) {
            // line 110
            echo "\t\t\t\t\t";
            // line 111
            echo "\t\t\t\t\t<div class=\"box-review\"  itemprop=\"aggregateRating\" itemscope itemtype=\"http://schema.org/AggregateRating\">
\t\t\t\t\t\t";
            // line 112
            if (($context["count_reviews"] ?? null)) {
                // line 113
                echo "\t\t\t\t\t\t\t\t<meta itemprop=\"ratingValue\" content=\"";
                echo ($context["rating"] ?? null);
                echo "\">
\t\t\t\t\t\t\t\t<meta itemprop=\"ratingCount\" content=\"";
                // line 114
                echo ($context["count_reviews"] ?? null);
                echo "\">
\t\t\t\t\t\t\t\t<meta itemprop=\"reviewCount\" content=\"";
                // line 115
                echo ($context["count_reviews"] ?? null);
                echo "\">
\t\t\t\t\t\t";
            }
            // line 117
            echo "\t\t\t\t\t\t
\t\t\t\t\t\t<div class=\"rating\">
\t\t\t\t\t\t\t<div class=\"rating-box\">
\t\t\t\t\t\t\t";
            // line 120
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(1, 5));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 121
                echo "\t\t\t\t\t\t\t\t";
                if ((($context["rating"] ?? null) < $context["i"])) {
                    echo "<span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-1x\"></i></span>";
                } else {
                    echo "<span class=\"fa fa-stack\"><i class=\"fa fa-star fa-stack-1x\"></i><i class=\"fa fa-star-o fa-stack-1x\"></i></span>";
                }
                // line 122
                echo "\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 123
            echo "\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<a class=\"reviews_button\" href=\"\" onclick=\"\$('a[href=\\'#tab-review\\']').trigger('click'); return false;\">";
            // line 125
            echo ($context["reviews"] ?? null);
            echo "</a>
\t\t\t\t\t\t";
            // line 126
            if (twig_get_attribute($this->env, $this->source, ($context["soconfig"] ?? null), "get_settings", [0 => "product_order"], "method", false, false, false, 126)) {
                // line 127
                echo "\t\t\t\t\t\t\t\t\t<span class=\"order-num\">";
                echo ($context["orders"] ?? null);
                echo "</span>
\t\t\t\t\t\t";
            }
            // line 129
            echo "\t\t\t\t\t
\t\t\t\t\t</div>
\t\t\t\t\t";
        }
        // line 132
        echo "
\t\t\t\t\t";
        // line 133
        if (($context["price"] ?? null)) {
            // line 134
            echo "\t\t\t\t\t";
            // line 135
            echo "\t\t\t\t\t<div class=\"product_page_price price\" itemprop=\"offers\" itemscope itemtype=\"http://schema.org/Offer\">
\t\t\t\t\t\t";
            // line 136
            if ( !($context["special"] ?? null)) {
                // line 137
                echo "\t\t\t\t\t\t\t<span class=\"price-new\">
\t\t\t\t\t\t\t\t<span itemprop=\"price\" content=\"";
                // line 138
                echo ($context["price_value"] ?? null);
                echo "\" id=\"price-old\">";
                echo ($context["price"] ?? null);
                echo "</span>
\t\t\t\t\t\t\t\t<meta itemprop=\"priceCurrency\" content=\"";
                // line 139
                echo ($context["currency"] ?? null);
                echo "\" />
\t\t\t\t\t\t\t</span>

\t\t\t\t\t\t";
            } else {
                // line 143
                echo "\t\t\t\t\t\t
\t\t\t\t\t\t\t<span class=\"price-new\">
\t\t\t\t\t\t\t\t<span itemprop=\"price\" content=\"";
                // line 145
                echo ($context["special_value"] ?? null);
                echo "\" id=\"price-special\">";
                echo ($context["special"] ?? null);
                echo "</span>
\t\t\t\t\t\t\t\t<meta itemprop=\"priceCurrency\" content=\"";
                // line 146
                echo ($context["currency"] ?? null);
                echo "\" />
\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t   <span class=\"price-old\" id=\"price-old\"> 
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t   </span>
\t\t\t\t\t\t   
\t\t\t\t\t\t";
            }
            // line 153
            echo "\t\t\t\t\t\t
\t\t\t\t\t\t";
            // line 154
            if ((($context["special"] ?? null) && twig_get_attribute($this->env, $this->source, ($context["soconfig"] ?? null), "get_settings", [0 => "discount_status"], "method", false, false, false, 154))) {
                echo " 
\t\t\t\t\t\t";
                // line 156
                echo "\t\t\t\t\t\t<span class=\"label-product label-sale\">
\t\t\t\t\t\t\t ";
                // line 157
                echo ($context["discount"] ?? null);
                echo "
\t\t\t\t\t\t</span>
\t\t\t\t\t\t";
            }
            // line 159
            echo " 

\t\t\t\t\t\t";
            // line 161
            if (($context["tax"] ?? null)) {
                // line 162
                echo "\t\t\t\t\t\t\t<div class=\"price-tax\"><span>";
                echo ($context["text_tax"] ?? null);
                echo "</span> <span id=\"price-tax\"> ";
                echo ($context["tax"] ?? null);
                echo " </span></div>
\t\t\t\t\t\t";
            }
            // line 164
            echo "\t\t\t\t\t 
\t\t\t\t\t</div>
\t\t\t\t\t";
        }
        // line 167
        echo "\t\t\t\t\t\t

\t\t\t\t\t";
        // line 169
        if (($context["discounts"] ?? null)) {
            echo " 
\t\t\t\t\t\t<ul class=\"list-unstyled text-success\">
\t\t\t\t\t\t";
            // line 171
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["discounts"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["discount"]) {
                echo " 
\t\t\t\t\t\t\t<li><strong>";
                // line 172
                echo twig_get_attribute($this->env, $this->source, $context["discount"], "quantity", [], "any", false, false, false, 172);
                echo " ";
                echo ($context["text_discount"] ?? null);
                echo " ";
                echo twig_get_attribute($this->env, $this->source, $context["discount"], "price", [], "any", false, false, false, 172);
                echo "</strong> </li>
\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['discount'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 174
            echo "\t\t\t\t\t\t</ul>
\t\t\t\t\t";
        }
        // line 175
        echo " \t

\t\t\t\t\t<div class=\"product-box-desc\">
\t\t\t\t\t\t<div class=\"inner-box-desc\">

\t\t\t\t\t\t\t";
        // line 180
        if (($context["manufacturer"] ?? null)) {
            // line 181
            echo "\t\t\t\t\t\t\t        <div class=\"brand\" itemprop=\"brand\" itemscope itemtype=\"http://schema.org/Brand\">
\t\t\t\t\t\t\t        <span>";
            // line 182
            echo ($context["text_manufacturer"] ?? null);
            echo " </span><a href=\"";
            echo ($context["manufacturers"] ?? null);
            echo "\" itemprop=\"url\"><span itemprop=\"name\">";
            echo ($context["manufacturer"] ?? null);
            echo " </span></a></div>
\t\t\t\t\t\t\t";
        }
        // line 184
        echo "\t\t\t\t\t\t\t
\t\t\t\t\t\t\t";
        // line 185
        if (($context["model"] ?? null)) {
            // line 186
            echo "\t\t\t\t\t\t\t<div class=\"model\"><span>";
            echo ($context["text_model"] ?? null);
            echo " </span> ";
            echo ($context["model"] ?? null);
            echo "</div>
\t\t\t\t\t\t\t";
        }
        // line 188
        echo "\t\t\t\t\t\t\t
\t\t\t\t\t\t\t";
        // line 189
        if (($context["reward"] ?? null)) {
            // line 190
            echo "\t\t\t\t\t\t\t\t<div class=\"reward\"><span>";
            echo ($context["text_reward"] ?? null);
            echo "</span> ";
            echo ($context["reward"] ?? null);
            echo "</div>
\t\t\t\t\t\t\t";
        }
        // line 192
        echo "\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<div class=\"stock\"><span>";
        // line 193
        echo ($context["text_stock"] ?? null);
        echo "</span> <i class=\"fa fa-check-square-o\"></i> ";
        echo ($context["stock"] ?? null);
        echo "</div>\t
\t\t\t\t\t\t</div>\t

\t\t\t\t\t\t";
        // line 196
        if (twig_get_attribute($this->env, $this->source, ($context["soconfig"] ?? null), "get_settings", [0 => "product_enablesold"], "method", false, false, false, 196)) {
            // line 197
            echo "\t\t\t\t\t\t<div class=\"inner-box-sold \">
\t\t\t\t\t\t\t<div class=\"viewed\"><span>";
            // line 198
            echo ($context["text_viewed"] ?? null);
            echo "</span> <span class=\"label label-primary\">";
            echo ($context["viewed"] ?? null);
            echo "</span></div>\t
\t\t\t\t\t\t\t";
            // line 199
            if (($context["sold"] ?? null)) {
                // line 200
                echo "\t\t\t\t\t\t\t<div class=\"sold\"><span>";
                echo ($context["text_sold_ready"] ?? null);
                echo "</span> <span class=\"label label-success\"> ";
                echo ($context["sold"] ?? null);
                echo " </span></div>\t
\t\t\t\t\t\t\t";
            }
            // line 202
            echo "\t\t\t\t\t\t</div>\t
\t\t\t\t\t\t";
        }
        // line 204
        echo "\t\t\t\t\t\t
\t\t\t\t\t\t";
        // line 205
        if (twig_get_attribute($this->env, $this->source, ($context["soconfig"] ?? null), "get_settings", [0 => "product_enablesizechart"], "method", false, false, false, 205)) {
            // line 206
            echo "\t\t\t\t\t\t\t<a class=\"image-popup-sizechart\" href=\"image/";
            echo twig_get_attribute($this->env, $this->source, ($context["soconfig"] ?? null), "get_settings", [0 => "img_sizechart"], "method", false, false, false, 206);
            echo "\" >";
            echo ($context["text_size_chart"] ?? null);
            echo " </a>\t
\t\t\t\t\t    ";
        }
        // line 208
        echo "
\t\t\t\t\t</div>
\t\t\t\t\t
\t\t\t\t\t";
        // line 211
        if (($context["description_short"] ?? null)) {
            // line 212
            echo "\t\t\t\t\t <div class=\"short_description form-group\" itemprop=\"description\">
\t\t\t\t\t\t<h3>";
            // line 213
            echo twig_get_attribute($this->env, $this->source, ($context["objlang"] ?? null), "get", [0 => "text_overview"], "method", false, false, false, 213);
            echo "</h3>
\t\t                ";
            // line 214
            echo ($context["description_short"] ?? null);
            echo "       
\t\t\t\t\t</div>
\t\t\t\t\t";
        }
        // line 217
        echo "
\t\t\t\t\t";
        // line 219
        echo "\t\t\t\t\t";
        if ((twig_get_attribute($this->env, $this->source, ($context["soconfig"] ?? null), "get_settings", [0 => "countdown_status"], "method", false, false, false, 219) && ($context["special_end_date"] ?? null))) {
            // line 220
            echo "\t\t\t\t\t\t";
            $this->loadTemplate((($context["theme_directory"] ?? null) . "/template/soconfig/countdown.twig"), "so-buyshop/template/product/product.twig", 220)->display(twig_array_merge($context, ["product" => ($context["product"] ?? null), "special_end_date" => ($context["special_end_date"] ?? null)]));
            // line 221
            echo "\t\t\t\t\t";
        }
        // line 222
        echo "\t\t\t\t\t
\t\t\t\t\t
\t\t\t\t\t<div id=\"product\">\t
\t\t\t\t\t\t";
        // line 225
        if (($context["options"] ?? null)) {
            echo " 
\t\t\t\t\t\t<h3>";
            // line 226
            echo ($context["text_option"] ?? null);
            echo "</h3>

                ";
            // line 228
            if (((($context["option_data"] ?? null) && twig_get_attribute($this->env, $this->source, ($context["option_data"] ?? null), "product_option_value", [], "any", true, true, false, 228)) && twig_get_attribute($this->env, $this->source, ($context["option_data"] ?? null), "product_option_value", [], "any", false, false, false, 228))) {
                // line 229
                echo "                    <ul id=\"so-colorswatch-selector-";
                echo ($context["product_id"] ?? null);
                echo "\" class='so-colorswatch-productpage-icons'>
                        ";
                // line 230
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["option_data"] ?? null), "product_option_value", [], "any", false, false, false, 230));
                foreach ($context['_seq'] as $context["_key"] => $context["option_value"]) {
                    // line 231
                    echo "                            <li class=\"option-item\">
                                <a class=\"\" 
                                    data-product-option-value-id=\"";
                    // line 233
                    echo twig_get_attribute($this->env, $this->source, $context["option_value"], "product_option_value_id", [], "any", false, false, false, 233);
                    echo "\" 
                                    data-option-value-id=\"";
                    // line 234
                    echo twig_get_attribute($this->env, $this->source, $context["option_value"], "option_value_id", [], "any", false, false, false, 234);
                    echo "\" 
                                    data-color-image=\"";
                    // line 235
                    echo twig_get_attribute($this->env, $this->source, $context["option_value"], "color_image", [], "any", false, false, false, 235);
                    echo "\" 
                                    data-color-thumb-image=\"";
                    // line 236
                    echo twig_get_attribute($this->env, $this->source, $context["option_value"], "color_thumb_image", [], "any", false, false, false, 236);
                    echo "\" 
                                    style=\"width: ";
                    // line 237
                    echo ($context["width_product_page"] ?? null);
                    echo "px; height: ";
                    echo ($context["height_product_page"] ?? null);
                    echo "px; background-image: url('";
                    echo twig_get_attribute($this->env, $this->source, $context["option_value"], "image", [], "any", false, false, false, 237);
                    echo "')\">
                                </a>
                            </li>
                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option_value'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 241
                echo "                        <li class=\"selected-option\"><span></span></li>
                    </ul>
                    <script type=\"text/javascript\">
                        var \$window_width = \$(window).width();
                        var ProductOptionId = '";
                // line 245
                echo ($context["product_option_id"] ?? null);
                echo "';
                        var default_image = \$('.large-image img').attr('src');
                        jQuery(document).ready(function(\$) {
                            \$('#input-option";
                // line 248
                echo ($context["product_option_id"] ?? null);
                echo "').parent().hide();
    
                            \$('#input-option";
                // line 250
                echo ($context["product_option_id"] ?? null);
                echo " option').each(function(){
                              var text = \$(this).text().replace(/\\s{2,}/g, ' ');
                              var val = \$(this).attr('value');
                              \$('.so-colorswatch-productpage-icons li a').each(function(index, el){
                                if(\$(el).data('product-option-value-id')== val){
                                  \$(el).attr('title', text);
                                }
                              })
                            })
                            
                            ";
                // line 260
                if ((($context["colorswatch_type"] ?? null) == "click")) {
                    // line 261
                    echo "                                \$(document).on('click', '.so-colorswatch-productpage-icons li.option-item', function(e){
                                    e.preventDefault();
                                    var option_value_id = \$(this).children('a').data('product-option-value-id');
                                    var option_id = \$(this).children('a').data('option-value-id');
        
                                    if (\$(this).hasClass('checked')) {
                                        \$('.so-colorswatch-productpage-icons li.option-item').removeClass('checked');
                                        \$(this).removeClass('checked');
                                        \$('#input-option";
                    // line 269
                    echo ($context["product_option_id"] ?? null);
                    echo "').val('').trigger('change');
                                        \$('.so-colorswatch-productpage-icons li.selected-option > span').html('');
                                        
                                        \$('.large-image img').attr('src', default_image);
                                    }
                                    else {
                                        \$('.so-colorswatch-productpage-icons li.option-item').removeClass('checked');
                                        \$(this).removeClass('checked').addClass('checked');
                                        \$('#input-option";
                    // line 277
                    echo ($context["product_option_id"] ?? null);
                    echo "').val(option_value_id).trigger('change');
                                        \$('.so-colorswatch-productpage-icons li.selected-option > span').html(\$(this).children('a').attr('title'));
                                        
                                        if (\$(this).children('a').data('color-image') != '') {
                                            \$('.large-image img').attr('src', \$(this).children('a').data('color-image'));
                                        }
                                        else {
                                            \$('.large-image img').attr('src', default_image);
                                        }

                                        \$('#thumb-slider  a.thumbnail').removeClass('active');
                                    }
                                })
                            ";
                } else {
                    // line 291
                    echo "                                if (\$window_width > 1199) {
                                    \$('.so-colorswatch-productpage-icons li.option-item').hover(function(e){
                                        e.preventDefault();
                                        var option_value_id = \$(this).children('a').data('product-option-value-id');
                                        var option_id = \$(this).children('a').data('option-value-id');
                                        
                                        \$('.so-colorswatch-productpage-icons li.option-item').removeClass('checked');
                                        if (\$(this).hasClass('checked')) {
                                            \$(this).removeClass('checked');
                                            \$('#input-option";
                    // line 300
                    echo ($context["product_option_id"] ?? null);
                    echo "').val('').trigger('change');
                                            \$('.large-image img').attr('src', default_image);
                                           
                                        }
                                        else {
                                            \$(this).removeClass('checked').addClass('checked');
                                            \$('#input-option";
                    // line 306
                    echo ($context["product_option_id"] ?? null);
                    echo "').val(option_value_id).trigger('change');
                                            \$('.so-colorswatch-productpage-icons li.selected-option > span').html(\$(this).children('a').attr('title'));
                                            
                                            if (\$(this).children('a').data('color-image') != '') {
\t                                            \$('.large-image img').attr('src', \$(this).children('a').data('color-image'));
\t                                        }
\t                                        else {
\t                                            \$('.large-image img').attr('src', default_image);
\t                                        }
\t                                         \$('#thumb-slider  a.thumbnail').removeClass('active');
                                        }
                                    });
                                }
                                else {
                                    \$(document).on('click', '.so-colorswatch-productpage-icons li.option-item', function(e){
                                        e.preventDefault();
                                        var option_value_id = \$(this).children('a').data('product-option-value-id');
                                        var option_id = \$(this).children('a').data('option-value-id');
            
                                        \$('.so-colorswatch-productpage-icons li.option-item').removeClass('checked');
                                        if (\$(this).hasClass('checked')) {
                                            \$(this).removeClass('checked');
                                            \$('#input-option";
                    // line 328
                    echo ($context["product_option_id"] ?? null);
                    echo "').val('').trigger('change');
                                            \$('.large-image img').attr('src', default_image);
                                           
                                        }
                                        else {
                                            \$(this).removeClass('checked').addClass('checked');
                                            \$('#input-option";
                    // line 334
                    echo ($context["product_option_id"] ?? null);
                    echo "').val(option_value_id).trigger('change');
                                            \$('.so-colorswatch-productpage-icons li.selected-option > span').html(\$(this).children('a').attr('title'));
                                            
                                            if (\$(this).children('a').data('color-image') != '') {
\t                                            \$('.large-image img').attr('src', \$(this).children('a').data('color-image'));
\t                                        }
\t                                        else {
\t                                            \$('.large-image img').attr('src', default_image);
\t                                        }
\t                                         \$('#thumb-slider  a.thumbnail').removeClass('active');
                                        }
                                    })
                                }
                            ";
                }
                // line 348
                echo "                        })                  
                    </script>
                ";
            }
            // line 351
            echo "            
\t\t\t\t\t\t";
            // line 352
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["options"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
                // line 353
                echo "\t\t\t\t\t\t\t
\t\t\t\t\t\t\t";
                // line 354
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 354) == "select")) {
                    // line 355
                    echo "\t\t\t\t\t\t\t<div class=\"form-group";
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 355)) {
                        echo " required ";
                    }
                    echo "\">
\t\t\t\t\t\t\t\t<label class=\"control-label\" for=\"input-option";
                    // line 356
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 356);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 356);
                    echo "</label>
\t\t\t\t\t\t\t\t<select name=\"option[";
                    // line 357
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 357);
                    echo "]\" id=\"input-option";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 357);
                    echo "\" class=\"form-control width50\">
\t\t\t\t\t\t\t\t\t<option value=\"\">";
                    // line 358
                    echo ($context["text_select"] ?? null);
                    echo "</option>
\t\t\t\t\t\t\t\t";
                    // line 359
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["option"], "product_option_value", [], "any", false, false, false, 359));
                    foreach ($context['_seq'] as $context["_key"] => $context["option_value"]) {
                        // line 360
                        echo "\t\t\t\t\t\t\t\t\t<option value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "product_option_value_id", [], "any", false, false, false, 360);
                        echo "\">";
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 360);
                        echo "
\t\t\t\t\t\t\t\t\t";
                        // line 361
                        if (twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 361)) {
                            // line 362
                            echo "\t\t\t\t\t\t\t\t\t\t(";
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price_prefix", [], "any", false, false, false, 362);
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 362);
                            echo ")
\t\t\t\t\t\t\t\t\t";
                        }
                        // line 364
                        echo "\t\t\t\t\t\t\t\t\t</option>
\t\t\t\t\t\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 366
                    echo "\t\t\t\t\t\t\t  </select>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
                }
                // line 369
                echo "\t\t\t\t\t\t\t
\t\t\t\t\t\t\t";
                // line 370
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 370) == "radio")) {
                    // line 371
                    echo "\t\t\t\t\t\t\t<div class=\"form-group";
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 371)) {
                        echo " required ";
                    }
                    echo "\">
\t\t\t\t\t\t\t  \t<label class=\"control-label\">";
                    // line 372
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 372);
                    echo "</label>
\t\t\t\t\t\t\t\t<div id=\"input-option";
                    // line 373
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 373);
                    echo "\">
\t\t\t\t\t\t\t\t\t";
                    // line 374
                    $context["radio_style"] = twig_get_attribute($this->env, $this->source, ($context["soconfig"] ?? null), "get_settings", [0 => "radio_style"], "method", false, false, false, 374);
                    // line 375
                    echo "\t\t\t\t\t\t\t\t\t";
                    $context["radio_type"] = ((($context["radio_style"] ?? null)) ? (" radio-type-button") : (""));
                    // line 376
                    echo "
\t\t\t\t\t\t\t\t\t";
                    // line 377
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["option"], "product_option_value", [], "any", false, false, false, 377));
                    foreach ($context['_seq'] as $context["_key"] => $context["option_value"]) {
                        echo " 
\t\t\t\t\t\t\t\t\t";
                        // line 378
                        $context["radio_image"] = ((twig_get_attribute($this->env, $this->source, $context["option_value"], "image", [], "any", false, false, false, 378)) ? ("option_image") : (""));
                        echo " 
\t\t\t\t\t\t\t\t\t";
                        // line 379
                        $context["radio_price"] = ((($context["radio_style"] ?? null)) ? ((twig_get_attribute($this->env, $this->source, $context["option_value"], "price_prefix", [], "any", false, false, false, 379) . twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 379))) : (""));
                        echo " 
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t<div class=\"radio ";
                        // line 381
                        echo (($context["radio_image"] ?? null) . ($context["radio_type"] ?? null));
                        echo "\">
\t\t\t\t\t\t\t\t\t\t\t<label>\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"option[";
                        // line 383
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 383);
                        echo "]\" value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "product_option_value_id", [], "any", false, false, false, 383);
                        echo "\" />
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"option-content-box\" data-title=\"";
                        // line 384
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 384);
                        echo " ";
                        echo ($context["radio_price"] ?? null);
                        echo "\" data-toggle='tooltip'>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        // line 385
                        if (twig_get_attribute($this->env, $this->source, $context["option_value"], "image", [], "any", false, false, false, 385)) {
                            echo " 
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"";
                            // line 386
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "image", [], "any", false, false, false, 386);
                            echo " \" alt=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 386);
                            echo "  ";
                            echo ($context["radio_price"] ?? null);
                            echo "\" /> 
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        }
                        // line 387
                        echo " 
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"option-name\">";
                        // line 388
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 388);
                        echo " </span>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        // line 389
                        if ((twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 389) && (($context["radio_style"] ?? null) != "1"))) {
                            echo " (";
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price_prefix", [], "any", false, false, false, 389);
                            echo " ";
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 389);
                            echo " )";
                        }
                        echo " 
\t\t\t\t\t\t\t\t\t\t\t\t  
\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 394
                    echo "\t
\t\t\t\t\t\t\t\t\t 
\t\t\t\t\t\t\t\t\t";
                    // line 396
                    if (($context["radio_style"] ?? null)) {
                        echo " 
\t\t\t\t\t\t\t\t\t<script type=\"text/javascript\">
\t\t\t\t\t\t\t\t\t\t \$(document).ready(function(){
\t\t\t\t\t\t\t\t\t\t\t  \$('#input-option";
                        // line 399
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 399);
                        echo " ').on('click', 'span', function () {
\t\t\t\t\t\t\t\t\t\t\t\t   \$('#input-option";
                        // line 400
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 400);
                        echo "  span').removeClass(\"active\");
\t\t\t\t\t\t\t\t\t\t\t\t   \$(this).toggleClass(\"active\");
\t\t\t\t\t\t\t\t\t\t\t  });
\t\t\t\t\t\t\t\t\t\t });
\t\t\t\t\t\t\t\t\t</script>
\t\t\t\t\t\t\t\t\t";
                    }
                    // line 405
                    echo " 

\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
                }
                // line 410
                echo "
\t\t\t\t\t\t\t";
                // line 411
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 411) == "checkbox")) {
                    // line 412
                    echo "\t\t\t\t\t\t\t<div class=\"form-group";
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 412)) {
                        echo " required ";
                    }
                    echo "\">
\t\t\t\t\t\t\t  \t<label class=\"control-label\">";
                    // line 413
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 413);
                    echo "</label>
\t\t\t\t\t\t\t  \t<div id=\"input-option";
                    // line 414
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 414);
                    echo "\">
\t\t\t\t\t\t\t\t\t";
                    // line 415
                    $context["radio_style"] = twig_get_attribute($this->env, $this->source, ($context["soconfig"] ?? null), "get_settings", [0 => "radio_style"], "method", false, false, false, 415);
                    // line 416
                    echo "\t\t\t\t\t\t\t\t\t";
                    $context["radio_type"] = ((($context["radio_style"] ?? null)) ? (" radio-type-button") : (""));
                    // line 417
                    echo "
\t\t\t\t\t\t\t\t\t";
                    // line 418
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["option"], "product_option_value", [], "any", false, false, false, 418));
                    foreach ($context['_seq'] as $context["_key"] => $context["option_value"]) {
                        echo " 
\t\t\t\t\t\t\t\t\t";
                        // line 419
                        $context["radio_image"] = ((twig_get_attribute($this->env, $this->source, $context["option_value"], "image", [], "any", false, false, false, 419)) ? ("option_image") : (""));
                        echo " 
\t\t\t\t\t\t\t\t\t";
                        // line 420
                        $context["radio_price"] = ((($context["radio_style"] ?? null)) ? ((twig_get_attribute($this->env, $this->source, $context["option_value"], "price_prefix", [], "any", false, false, false, 420) . twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 420))) : (""));
                        echo " 
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t<div class=\"checkbox  ";
                        // line 422
                        echo (($context["radio_image"] ?? null) . ($context["radio_type"] ?? null));
                        echo "\">
\t\t\t\t\t\t\t\t\t\t\t<label>
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"option[";
                        // line 424
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 424);
                        echo "][]\" value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "product_option_value_id", [], "any", false, false, false, 424);
                        echo "\" />
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"option-content-box\" data-title=\"";
                        // line 425
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 425);
                        echo " ";
                        echo ($context["radio_price"] ?? null);
                        echo "\" data-toggle='tooltip'>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        // line 426
                        if (twig_get_attribute($this->env, $this->source, $context["option_value"], "image", [], "any", false, false, false, 426)) {
                            echo " 
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"";
                            // line 427
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "image", [], "any", false, false, false, 427);
                            echo " \" alt=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 427);
                            echo "  ";
                            echo ($context["radio_price"] ?? null);
                            echo "\" /> 
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        }
                        // line 428
                        echo " 

\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"option-name\">";
                        // line 430
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 430);
                        echo " </span>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        // line 431
                        if ((twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 431) && (($context["radio_style"] ?? null) != "1"))) {
                            echo " 
\t\t\t\t\t\t\t\t\t\t\t\t\t\t(";
                            // line 432
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price_prefix", [], "any", false, false, false, 432);
                            echo " ";
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 432);
                            echo " )
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        }
                        // line 433
                        echo " 
\t\t\t\t\t\t\t\t\t\t\t\t  
\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 438
                    echo "\t
\t\t\t\t\t\t\t\t\t 
\t\t\t\t\t\t\t\t\t";
                    // line 440
                    if (($context["radio_style"] ?? null)) {
                        echo " 
\t\t\t\t\t\t\t\t\t<script type=\"text/javascript\">
\t\t\t\t\t\t\t\t\t\t \$(document).ready(function(){
\t\t\t\t\t\t\t\t\t\t\t  \$('#input-option";
                        // line 443
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 443);
                        echo " ').on('click', 'span', function () {
\t\t\t\t\t\t\t\t\t\t\t\t   \$(this).toggleClass(\"active\");
\t\t\t\t\t\t\t\t\t\t\t  });
\t\t\t\t\t\t\t\t\t\t });
\t\t\t\t\t\t\t\t\t</script>
\t\t\t\t\t\t\t\t\t";
                    }
                    // line 448
                    echo " 

\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
                }
                // line 453
                echo "
\t\t\t\t\t\t\t";
                // line 454
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 454) == "text")) {
                    // line 455
                    echo "\t\t\t\t\t\t\t<div class=\"form-group";
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 455)) {
                        echo " required ";
                    }
                    echo "\">
\t\t\t\t\t\t\t  <label class=\"control-label\" for=\"input-option";
                    // line 456
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 456);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 456);
                    echo "</label>
\t\t\t\t\t\t\t  <input type=\"text\" name=\"option[";
                    // line 457
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 457);
                    echo "]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 457);
                    echo "\" placeholder=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 457);
                    echo "\" id=\"input-option";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 457);
                    echo "\" class=\"form-control\" />
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
                }
                // line 460
                echo "
\t\t\t\t\t\t\t";
                // line 461
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 461) == "textarea")) {
                    // line 462
                    echo "\t\t\t\t\t\t\t<div class=\"form-group";
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 462)) {
                        echo " required ";
                    }
                    echo "\">
\t\t\t\t\t\t\t  <label class=\"control-label\" for=\"input-option";
                    // line 463
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 463);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 463);
                    echo "</label>
\t\t\t\t\t\t\t  <textarea name=\"option[";
                    // line 464
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 464);
                    echo "]\" rows=\"5\" placeholder=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 464);
                    echo "\" id=\"input-option";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 464);
                    echo "\" class=\"form-control\">";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 464);
                    echo "</textarea>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
                }
                // line 467
                echo "
\t\t\t\t\t\t\t";
                // line 468
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 468) == "file")) {
                    // line 469
                    echo "\t\t\t\t\t\t\t<div class=\"form-group";
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 469)) {
                        echo " required ";
                    }
                    echo "\">
\t\t\t\t\t\t\t  <label class=\"control-label\">";
                    // line 470
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 470);
                    echo "</label>
\t\t\t\t\t\t\t  <button type=\"button\" id=\"button-upload";
                    // line 471
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 471);
                    echo "\" data-loading-text=\"";
                    echo ($context["text_loading"] ?? null);
                    echo "\" class=\"btn btn-default btn-block\"><i class=\"fa fa-upload\"></i> ";
                    echo ($context["button_upload"] ?? null);
                    echo "</button>
\t\t\t\t\t\t\t  <input type=\"hidden\" name=\"option[";
                    // line 472
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 472);
                    echo "]\" value=\"\" id=\"input-option";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 472);
                    echo "\" />
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
                }
                // line 475
                echo "
\t\t\t\t\t\t\t";
                // line 476
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 476) == "date")) {
                    // line 477
                    echo "\t\t\t\t\t\t\t<div class=\"form-group";
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 477)) {
                        echo " required ";
                    }
                    echo "\">
\t\t\t\t\t\t\t  <label class=\"control-label\" for=\"input-option";
                    // line 478
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 478);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 478);
                    echo "</label>
\t\t\t\t\t\t\t  <div class=\"input-group date\">
\t\t\t\t\t\t\t\t<input type=\"text\" name=\"option[";
                    // line 480
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 480);
                    echo "]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 480);
                    echo "\" data-date-format=\"YYYY-MM-DD\" id=\"input-option";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 480);
                    echo "\" class=\"form-control\" />
\t\t\t\t\t\t\t\t<span class=\"input-group-btn\">
\t\t\t\t\t\t\t\t<button class=\"btn btn-default\" type=\"button\"><i class=\"fa fa-calendar\"></i></button>
\t\t\t\t\t\t\t\t</span></div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
                }
                // line 486
                echo "
\t\t\t\t\t\t\t";
                // line 487
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 487) == "datetime")) {
                    // line 488
                    echo "\t\t\t\t\t\t\t<div class=\"form-group";
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 488)) {
                        echo " required ";
                    }
                    echo "\">
\t\t\t\t\t\t\t  <label class=\"control-label\" for=\"input-option";
                    // line 489
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 489);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 489);
                    echo "</label>
\t\t\t\t\t\t\t  <div class=\"input-group datetime\">
\t\t\t\t\t\t\t\t<input type=\"text\" name=\"option[";
                    // line 491
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 491);
                    echo "]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 491);
                    echo "\" data-date-format=\"YYYY-MM-DD HH:mm\" id=\"input-option";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 491);
                    echo "\" class=\"form-control\" />
\t\t\t\t\t\t\t\t<span class=\"input-group-btn\">
\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button>
\t\t\t\t\t\t\t\t</span></div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
                }
                // line 497
                echo "\t\t\t\t\t\t\t
\t\t\t\t\t\t\t";
                // line 498
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 498) == "time")) {
                    // line 499
                    echo "\t\t\t\t\t\t\t<div class=\"form-group";
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 499)) {
                        echo " required ";
                    }
                    echo "\">
\t\t\t\t\t\t\t\t<label class=\"control-label\" for=\"input-option";
                    // line 500
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 500);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 500);
                    echo "</label>
\t\t\t\t\t\t\t\t<div class=\"input-group time\">
\t\t\t\t\t\t\t\t<input type=\"text\" name=\"option[";
                    // line 502
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 502);
                    echo "]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 502);
                    echo "\" data-date-format=\"HH:mm\" id=\"input-option";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 502);
                    echo "\" class=\"form-control\" />
\t\t\t\t\t\t\t\t<span class=\"input-group-btn\">
\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button>
\t\t\t\t\t\t\t\t</span></div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
                }
                // line 508
                echo "\t\t\t\t\t\t\t
\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 510
            echo "\t\t\t\t\t\t";
        }
        // line 511
        echo "
\t\t\t\t\t\t<div class=\"box-cart clearfix form-group\">
\t\t\t\t\t\t\t";
        // line 513
        if (($context["recurrings"] ?? null)) {
            // line 514
            echo "\t\t\t\t\t\t\t<h3>";
            echo ($context["text_payment_recurring"] ?? null);
            echo "</h3>
\t\t\t\t\t\t\t<div class=\"form-group required\">
\t\t\t\t\t\t\t\t<select name=\"recurring_id\" class=\"form-control\">
\t\t\t\t\t\t\t\t<option value=\"\">";
            // line 517
            echo ($context["text_select"] ?? null);
            echo "</option>
\t\t\t\t\t\t\t\t";
            // line 518
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["recurrings"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["recurring"]) {
                // line 519
                echo "\t\t\t\t\t\t\t\t<option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["recurring"], "recurring_id", [], "any", false, false, false, 519);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["recurring"], "name", [], "any", false, false, false, 519);
                echo "</option>
\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['recurring'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 521
            echo "\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t  <div class=\"help-block\" id=\"recurring-description\"></div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
        }
        // line 525
        echo "\t\t\t\t\t\t  
\t\t\t\t\t\t\t<div class=\"form-group box-info-product\">
\t\t\t\t\t\t\t\t<div class=\"option quantity\">
\t\t\t\t\t\t\t\t\t<div class=\"input-group quantity-control\">
\t\t\t\t\t\t\t\t\t\t<label>";
        // line 529
        echo ($context["entry_qty"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t  <input class=\"form-control\" type=\"text\" name=\"quantity\" value=\"";
        // line 530
        echo ($context["minimum"] ?? null);
        echo "\" />
\t\t\t\t\t\t\t\t\t\t  <input type=\"hidden\" name=\"product_id\" value=\"";
        // line 531
        echo ($context["product_id"] ?? null);
        echo "\" />\t\t\t\t\t\t\t\t  
\t\t\t\t\t\t\t\t\t\t  <span class=\"input-group-addon product_quantity_down fa fa-minus\"></span> 
\t                                  <span class=\"input-group-addon product_quantity_up fa fa-plus\"></span>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"detail-action\">
\t\t\t\t\t\t\t\t\t";
        // line 538
        echo "\t\t\t\t\t\t\t\t\t<div class=\"cart\">
\t\t\t\t\t\t\t\t\t\t<input type=\"button\"  value=\"";
        // line 539
        echo ($context["button_cart"] ?? null);
        echo "\" data-loading-text=\"";
        echo ($context["text_loading"] ?? null);
        echo "\" id=\"button-cart\" class=\"btn btn-mega btn-lg \" />
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"add-to-links wish_comp\">
\t\t\t\t\t\t\t\t\t\t<ul class=\"blank\">
\t\t\t\t\t\t\t\t\t\t\t<li class=\"wishlist\">
\t\t\t\t\t\t\t\t\t\t\t\t<a onclick=\"wishlist.add(";
        // line 544
        echo ($context["product_id"] ?? null);
        echo ");\"><i class=\"fa fa-heart-o\"></i></a>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t<li class=\"compare\">
\t\t\t\t\t\t\t\t\t\t\t\t<a onclick=\"compare.add(";
        // line 547
        echo ($context["product_id"] ?? null);
        echo ");\"><i class=\"fa fa-refresh\"></i></a>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t\t\t";
        // line 556
        if ((($context["minimum"] ?? null) > 1)) {
            // line 557
            echo "\t\t\t\t\t\t\t\t<div class=\"alert alert-info\"><i class=\"fa fa-info-circle\"></i> ";
            echo ($context["text_minimum"] ?? null);
            echo "</div>
\t\t\t\t\t\t\t";
        }
        // line 559
        echo "\t\t\t\t\t\t</div>

\t\t\t\t\t\t";
        // line 561
        if ((twig_get_attribute($this->env, $this->source, ($context["soconfig"] ?? null), "get_settings", [0 => "product_page_button"], "method", false, false, false, 561) && twig_get_attribute($this->env, $this->source, ($context["soconfig"] ?? null), "get_settings", [0 => "product_socialshare"], "method", false, false, false, 561))) {
            // line 562
            echo "\t\t\t\t\t\t<div class=\"form-group social-share clearfix\">
\t\t\t\t\t\t\t";
            // line 563
            echo twig_get_attribute($this->env, $this->source, ($context["soconfig"] ?? null), "decode_entities", [0 => twig_get_attribute($this->env, $this->source, ($context["soconfig"] ?? null), "get_settings", [0 => "product_socialshare"], "method", false, false, false, 563)], "method", false, false, false, 563);
            echo "
\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
        }
        // line 566
        echo "\t\t\t\t\t\t<!-- Go to www.addthis.com/dashboard to customize your tools -->
\t\t\t\t\t\t<script type=\"text/javascript\" src=\"//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-529be2200cc72db5\"></script>
\t\t\t\t\t\t
\t\t\t\t\t\t ";
        // line 569
        if (($context["tags"] ?? null)) {
            // line 570
            echo "\t\t\t\t\t\t<div id=\"tab-tags\">
\t\t\t\t\t\t\t";
            // line 571
            echo ($context["text_tags"] ?? null);
            echo "
\t\t\t\t\t\t\t";
            // line 572
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(0, twig_length_filter($this->env, ($context["tags"] ?? null))));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 573
                echo "\t\t\t\t\t\t\t";
                if (($context["i"] < (twig_length_filter($this->env, ($context["tags"] ?? null)) - 1))) {
                    echo " <a class=\"btn btn-primary btn-sm\" href=\"";
                    echo twig_get_attribute($this->env, $this->source, (($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = ($context["tags"] ?? null)) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4[$context["i"]] ?? null) : null), "href", [], "any", false, false, false, 573);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, (($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = ($context["tags"] ?? null)) && is_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) || $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 instanceof ArrayAccess ? ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144[$context["i"]] ?? null) : null), "tag", [], "any", false, false, false, 573);
                    echo "</a>
\t\t\t\t\t\t\t";
                } else {
                    // line 574
                    echo " 
\t\t\t\t\t\t\t";
                    // line 575
                    if ( !twig_test_empty((($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b = ($context["tags"] ?? null)) && is_array($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b) || $__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b instanceof ArrayAccess ? ($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b[$context["i"]] ?? null) : null))) {
                        // line 576
                        echo "\t\t\t\t\t\t\t<a class=\"btn btn-primary btn-sm 22\" href=\"";
                        echo twig_get_attribute($this->env, $this->source, (($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 = ($context["tags"] ?? null)) && is_array($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002) || $__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 instanceof ArrayAccess ? ($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002[$context["i"]] ?? null) : null), "href", [], "any", false, false, false, 576);
                        echo "\">";
                        echo twig_get_attribute($this->env, $this->source, (($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 = ($context["tags"] ?? null)) && is_array($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4) || $__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 instanceof ArrayAccess ? ($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4[$context["i"]] ?? null) : null), "tag", [], "any", false, false, false, 576);
                        echo "</a> ";
                    }
                    // line 577
                    echo "\t\t\t\t\t\t\t";
                }
                // line 578
                echo "\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo " 
\t\t\t\t\t\t\t
\t\t\t\t\t\t 
\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
        }
        // line 583
        echo "
\t\t\t\t\t</div>
\t\t\t\t\t\t
\t\t\t\t</div>
\t\t\t\t";
        // line 588
        echo "\t\t\t\t</div>
\t\t\t</div>

\t\t\t";
        // line 592
        echo "\t\t\t";
        if (($context["content_top"] ?? null)) {
            // line 593
            echo "\t\t\t<div class=\"content-product-maintop form-group clearfix\">
\t\t\t\t";
            // line 594
            echo ($context["content_top"] ?? null);
            echo "
\t\t\t</div>
\t\t\t";
        }
        // line 597
        echo "\t\t\t<div class=\"content-product-mainbody clearfix row\">
\t\t\t\t
\t\t\t\t";
        // line 599
        if ((($context["col_position"] ?? null) == "inside")) {
            // line 600
            echo "\t\t\t\t";
            // line 601
            echo "\t\t\t\t\t";
            echo ($context["column_left"] ?? null);
            echo "
\t\t\t\t    ";
            // line 602
            if ((($context["col_canvas"] ?? null) == "off_canvas")) {
                // line 603
                echo "\t\t\t\t\t\t";
                $context["class_left"] = "col-sm-12";
                // line 604
                echo "\t\t\t    \t";
            } elseif ((($context["column_left"] ?? null) && ($context["column_right"] ?? null))) {
                // line 605
                echo "\t\t\t    \t\t";
                $context["class_left"] = "col-md-6 col-column3";
                // line 606
                echo "\t\t\t\t    ";
            } elseif ((($context["column_left"] ?? null) || ($context["column_right"] ?? null))) {
                // line 607
                echo "\t\t\t\t    \t";
                $context["class_left"] = "col-md-9 col-sm-12 col-xs-12";
                // line 608
                echo "\t\t\t\t    ";
            } else {
                // line 609
                echo "\t\t\t\t    \t";
                $context["class_left"] = "col-sm-12";
                // line 610
                echo "\t\t\t\t    ";
            }
            // line 611
            echo "\t\t\t\t";
        } else {
            // line 612
            echo "\t\t\t\t\t";
            $context["class_left"] = "col-sm-12";
            // line 613
            echo "\t\t\t\t";
        }
        // line 614
        echo "
\t\t\t    <div class=\"content-product-content ";
        // line 615
        echo ($context["class_left"] ?? null);
        echo "\">
\t\t\t\t\t<div class=\"content-product-midde clearfix\">
\t\t\t\t\t\t";
        // line 618
        echo "\t\t\t\t\t\t";
        $context["related_position"] = (((twig_get_attribute($this->env, $this->source, ($context["soconfig"] ?? null), "get_settings", [0 => "tabs_position"], "method", false, false, false, 618) == 1)) ? ("vertical-tabs") : (""));
        // line 619
        echo "\t\t\t\t\t\t";
        $context["tabs_position"] = twig_get_attribute($this->env, $this->source, ($context["soconfig"] ?? null), "get_settings", [0 => "tabs_position"], "method", false, false, false, 619);
        // line 620
        echo "\t\t\t\t\t\t";
        $context["showmore"] = twig_get_attribute($this->env, $this->source, ($context["soconfig"] ?? null), "get_settings", [0 => "product_enableshowmore"], "method", false, false, false, 620);
        // line 621
        echo "\t\t\t\t\t\t";
        if (($context["showmore"] ?? null)) {
            echo " ";
            $context["class_showmore"] = "showdown";
            // line 622
            echo "\t\t\t\t\t\t";
        } else {
            echo " ";
            $context["class_showmore"] = "showup";
            // line 623
            echo "\t\t\t\t\t\t";
        }
        // line 624
        echo "
\t\t\t\t\t\t<div class=\"producttab \">
\t\t\t\t\t\t\t<div class=\"tabsslider ";
        // line 626
        echo ($context["related_position"] ?? null);
        echo " ";
        if ((($context["tabs_position"] ?? null) == 1)) {
            echo " ";
            echo "vertical-tabs";
            echo " ";
        } else {
            echo " ";
            echo "horizontal-tabs";
            echo " ";
        }
        echo " col-xs-12\">
\t\t\t\t\t\t\t\t";
        // line 628
        echo "\t\t\t\t\t\t\t\t";
        if ((($context["tabs_position"] ?? null) == 2)) {
            // line 629
            echo "\t\t\t\t\t\t\t\t<ul class=\"nav nav-tabs font-sn\">
\t\t\t\t\t\t\t\t\t<li class=\"active\"><a data-toggle=\"tab\" href=\"#tab-description\">";
            // line 630
            echo ($context["tab_description"] ?? null);
            echo "</a></li>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t         
\t\t\t\t\t\t            ";
            // line 633
            if (($context["review_status"] ?? null)) {
                // line 634
                echo "\t\t\t\t\t\t           \t <li><a href=\"#tab-review\" data-toggle=\"tab\">";
                echo ($context["tab_review"] ?? null);
                echo "</a></li>
\t\t\t\t\t\t            ";
            }
            // line 636
            echo "\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t";
            // line 637
            if (twig_get_attribute($this->env, $this->source, ($context["soconfig"] ?? null), "get_settings", [0 => "product_enableshipping"], "method", false, false, false, 637)) {
                // line 638
                echo "\t\t\t\t\t\t\t\t\t <li><a href=\"#tab-contentshipping\" data-toggle=\"tab\">";
                echo ($context["tab_shipping"] ?? null);
                echo "</a></li>
\t\t\t\t\t\t\t\t\t";
            }
            // line 640
            echo "
\t\t\t\t\t\t\t\t\t";
            // line 641
            if (($context["product_tabtitle"] ?? null)) {
                // line 642
                echo "\t\t\t\t\t\t           \t <li><a href=\"#tab-customhtml\" data-toggle=\"tab\">";
                echo ($context["product_tabtitle"] ?? null);
                echo "</a></li>
\t\t\t\t\t\t            ";
            }
            // line 644
            echo "
\t\t\t\t\t\t\t\t\t";
            // line 645
            if (($context["product_video"] ?? null)) {
                // line 646
                echo "\t\t\t\t\t\t           \t <li><a class=\"thumb-video\" href=\"";
                echo ($context["product_video"] ?? null);
                echo "\"><i class=\"fa fa-youtube-play fa-lg\"></i> ";
                echo ($context["tab_video"] ?? null);
                echo "</a></li>
\t\t\t\t\t\t            ";
            }
            // line 648
            echo "\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t</ul>

\t\t\t\t\t\t\t\t";
            // line 654
            echo "\t\t\t\t\t\t\t\t";
        } elseif ((($context["tabs_position"] ?? null) == 1)) {
            // line 655
            echo "\t\t\t\t\t\t\t\t\t<ul class=\"nav nav-tabs col-lg-3 col-sm-4\">
\t\t\t\t\t\t\t\t\t<li class=\"active\"><a data-toggle=\"tab\" href=\"#tab-description\">";
            // line 656
            echo ($context["tab_description"] ?? null);
            echo "</a></li>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t            ";
            // line 658
            if (($context["review_status"] ?? null)) {
                // line 659
                echo "\t\t\t\t\t\t           \t <li><a href=\"#tab-review\" data-toggle=\"tab\">";
                echo ($context["tab_review"] ?? null);
                echo "</a></li>
\t\t\t\t\t\t            ";
            }
            // line 661
            echo "\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t";
            // line 662
            if (twig_get_attribute($this->env, $this->source, ($context["soconfig"] ?? null), "get_settings", [0 => "product_enableshipping"], "method", false, false, false, 662)) {
                // line 663
                echo "\t\t\t\t\t\t\t\t\t <li><a href=\"#tab-contentshipping\" data-toggle=\"tab\">";
                echo ($context["tab_shipping"] ?? null);
                echo "</a></li>
\t\t\t\t\t\t\t\t\t";
            }
            // line 665
            echo "
\t\t\t\t\t\t\t\t\t";
            // line 666
            if (($context["product_tabtitle"] ?? null)) {
                // line 667
                echo "\t\t\t\t\t\t           \t <li><a href=\"#tab-customhtml\" data-toggle=\"tab\">";
                echo ($context["product_tabtitle"] ?? null);
                echo "</a></li>
\t\t\t\t\t\t            ";
            }
            // line 669
            echo "\t\t\t\t\t\t            
\t\t\t\t\t\t\t\t\t";
            // line 670
            if (($context["product_video"] ?? null)) {
                // line 671
                echo "\t\t\t\t\t\t           \t <li><a class=\"thumb-video\" href=\"";
                echo ($context["product_video"] ?? null);
                echo "\"><i class=\"fa fa-youtube-play fa-lg\"></i> ";
                echo ($context["tab_video"] ?? null);
                echo "</a></li>
\t\t\t\t\t\t            ";
            }
            // line 673
            echo "\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t";
        }
        // line 677
        echo "
\t\t\t\t\t\t\t\t<div class=\"tab-content ";
        // line 678
        if ((($context["tabs_position"] ?? null) == 1)) {
            echo " ";
            echo "col-lg-9 col-sm-8";
            echo " ";
        }
        echo " col-xs-12\">
\t\t\t\t\t\t\t\t\t<div class=\"tab-pane active\" id=\"tab-description\">
\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t";
        // line 681
        if (($context["attribute_groups"] ?? null)) {
            // line 682
            echo "\t\t\t\t\t\t\t\t\t\t\t<h3 class=\"product-property-title\" > ";
            echo ($context["text_product_specifics"] ?? null);
            echo "</h3>
\t\t\t\t\t\t\t              \t<ul class=\"product-property-list util-clearfix\">
\t\t\t\t\t\t\t\t                ";
            // line 684
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["attribute_groups"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["attribute_group"]) {
                // line 685
                echo "\t\t\t\t\t\t\t\t               
\t\t\t\t\t\t\t\t                \t
\t\t\t\t\t\t\t\t\t                ";
                // line 687
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["attribute_group"], "attribute", [], "any", false, false, false, 687));
                foreach ($context['_seq'] as $context["_key"] => $context["attribute"]) {
                    // line 688
                    echo "\t\t\t\t\t\t\t\t\t                <li class=\"property-item\">
\t\t\t\t\t\t\t\t\t                  <span class=\"propery-title\">";
                    // line 689
                    echo twig_get_attribute($this->env, $this->source, $context["attribute"], "name", [], "any", false, false, false, 689);
                    echo "</span>
\t\t\t\t\t\t\t\t\t                  <span class=\"propery-des\">";
                    // line 690
                    echo twig_get_attribute($this->env, $this->source, $context["attribute"], "text", [], "any", false, false, false, 690);
                    echo "</span>
\t\t\t\t\t\t\t\t\t                </li>
\t\t\t\t\t\t\t\t\t                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['attribute'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 693
                echo "\t\t\t\t\t\t\t\t                 \t
\t\t\t\t\t\t\t\t                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['attribute_group'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 695
            echo "\t\t\t\t\t\t\t              \t</ul>
\t\t\t\t\t\t\t            ";
        }
        // line 697
        echo "
\t\t\t\t\t\t\t            <h3 class=\"product-property-title\" > ";
        // line 698
        echo ($context["text_product_description"] ?? null);
        echo "</h3>
\t\t\t\t\t\t\t            <div id=\"collapse-description\" class=\"desc-collapse ";
        // line 699
        echo ($context["class_showmore"] ?? null);
        echo "\">
\t\t\t\t\t\t\t\t\t\t\t";
        // line 700
        echo ($context["description"] ?? null);
        echo "
\t\t\t\t\t\t\t\t\t\t</div>\t

\t\t\t\t\t\t\t\t\t\t";
        // line 703
        if (($context["showmore"] ?? null)) {
            // line 704
            echo "\t\t\t\t\t\t\t\t\t\t<div class=\"button-toggle\">
\t\t\t\t\t\t\t\t\t         <a class=\"showmore\" data-toggle=\"collapse\" href=\"#\" aria-expanded=\"false\" aria-controls=\"collapse-footer\">
\t\t\t\t\t\t\t\t\t            <span class=\"toggle-more\">";
            // line 706
            echo twig_get_attribute($this->env, $this->source, ($context["objlang"] ?? null), "get", [0 => "show_more"], "method", false, false, false, 706);
            echo " <i class=\"fa fa-angle-down\"></i></span> 
\t\t\t\t\t\t\t\t\t            <span class=\"toggle-less\">";
            // line 707
            echo twig_get_attribute($this->env, $this->source, ($context["objlang"] ?? null), "get", [0 => "show_less"], "method", false, false, false, 707);
            echo " <i class=\"fa fa-angle-up\"></i></span>           
\t\t\t\t\t\t\t\t\t\t\t</a>        
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t";
        }
        // line 711
        echo "\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t

\t\t\t\t\t\t            ";
        // line 714
        if (($context["review_status"] ?? null)) {
            // line 715
            echo "\t\t\t\t\t\t            <div class=\"tab-pane\" id=\"tab-review\">
\t\t\t\t\t\t\t            <form class=\"form-horizontal\" id=\"form-review\">
\t\t\t\t\t\t\t                <div id=\"review\"></div>
\t\t\t\t\t\t\t                <h3 class=\"product-property-title\" >";
            // line 718
            echo ($context["text_write"] ?? null);
            echo "</h3>
\t\t\t\t\t\t\t                ";
            // line 719
            if (($context["review_guest"] ?? null)) {
                // line 720
                echo "\t\t\t\t\t\t\t                <div class=\"form-group required\">
\t\t\t\t\t\t\t                  <div class=\"col-sm-12\">
\t\t\t\t\t\t\t                    <label class=\"control-label\" for=\"input-name\">";
                // line 722
                echo ($context["entry_your_name"] ?? null);
                echo "</label>
\t\t\t\t\t\t\t                    <input type=\"text\" name=\"name\" value=\"";
                // line 723
                echo ($context["customer_name"] ?? null);
                echo "\" id=\"input-name\" class=\"form-control\" />
\t\t\t\t\t\t\t                  </div>
\t\t\t\t\t\t\t                </div>
\t\t\t\t\t\t\t                <div class=\"form-group required\">
\t\t\t\t\t\t\t                  <div class=\"col-sm-12\">
\t\t\t\t\t\t\t                    <label class=\"control-label\" for=\"input-review\">";
                // line 728
                echo ($context["entry_review"] ?? null);
                echo "</label>
\t\t\t\t\t\t\t                    <textarea name=\"text\" rows=\"5\" id=\"input-review\" class=\"form-control\"></textarea>
\t\t\t\t\t\t\t                    <div class=\"help-block\">";
                // line 730
                echo ($context["text_note"] ?? null);
                echo "</div>
\t\t\t\t\t\t\t                  </div>
\t\t\t\t\t\t\t                </div>
\t\t\t\t\t\t\t                <div class=\"form-group required\">
\t\t\t\t\t\t\t                  <div class=\"col-sm-12\">
\t\t\t\t\t\t\t                    <label class=\"control-label\">";
                // line 735
                echo ($context["entry_rating"] ?? null);
                echo "</label>
\t\t\t\t\t\t\t                    &nbsp;&nbsp;&nbsp; ";
                // line 736
                echo ($context["entry_bad"] ?? null);
                echo "&nbsp;
\t\t\t\t\t\t\t                    <input type=\"radio\" name=\"rating\" value=\"1\" />
\t\t\t\t\t\t\t                    &nbsp;
\t\t\t\t\t\t\t                    <input type=\"radio\" name=\"rating\" value=\"2\" />
\t\t\t\t\t\t\t                    &nbsp;
\t\t\t\t\t\t\t                    <input type=\"radio\" name=\"rating\" value=\"3\" />
\t\t\t\t\t\t\t                    &nbsp;
\t\t\t\t\t\t\t                    <input type=\"radio\" name=\"rating\" value=\"4\" />
\t\t\t\t\t\t\t                    &nbsp;
\t\t\t\t\t\t\t                    <input type=\"radio\" name=\"rating\" value=\"5\" />
\t\t\t\t\t\t\t                    &nbsp;";
                // line 746
                echo ($context["entry_good"] ?? null);
                echo "</div>
\t\t\t\t\t\t\t                </div>
\t\t\t\t\t\t\t                ";
                // line 748
                echo ($context["captcha"] ?? null);
                echo "
\t\t\t\t\t\t\t                
\t\t\t\t\t\t\t                  <div class=\"pull-right\">
\t\t\t\t\t\t\t                    <button type=\"button\" id=\"button-review\" data-loading-text=\"";
                // line 751
                echo ($context["text_loading"] ?? null);
                echo "\" class=\"btn btn-primary\">";
                echo ($context["button_continue"] ?? null);
                echo "</button>
\t\t\t\t\t\t\t                  </div>
\t\t\t\t\t\t\t               
\t\t\t\t\t\t\t                ";
            } else {
                // line 755
                echo "\t\t\t\t\t\t\t                ";
                echo ($context["text_login"] ?? null);
                echo "
\t\t\t\t\t\t\t                ";
            }
            // line 757
            echo "\t\t\t\t\t\t\t            </form>
\t\t\t\t\t\t            </div>
\t\t\t\t\t\t            ";
        }
        // line 760
        echo "\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t            ";
        // line 761
        if ((twig_get_attribute($this->env, $this->source, ($context["soconfig"] ?? null), "get_settings", [0 => "product_enableshipping"], "method", false, false, false, 761) && twig_get_attribute($this->env, $this->source, ($context["soconfig"] ?? null), "get_settings", [0 => "product_contentshipping"], "method", false, false, false, 761))) {
            // line 762
            echo "\t\t\t\t\t\t\t\t\t<div class=\"tab-pane\" id=\"tab-contentshipping\">
\t\t\t\t\t\t\t\t\t\t";
            // line 763
            echo twig_get_attribute($this->env, $this->source, ($context["soconfig"] ?? null), "decode_entities", [0 => twig_get_attribute($this->env, $this->source, ($context["soconfig"] ?? null), "get_settings", [0 => "product_contentshipping"], "method", false, false, false, 763)], "method", false, false, false, 763);
            echo "
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t";
        }
        // line 766
        echo "
\t\t\t\t\t\t\t\t\t";
        // line 767
        if (($context["product_tabtitle"] ?? null)) {
            // line 768
            echo "\t\t\t\t\t\t\t\t\t<div class=\"tab-pane \" id=\"tab-customhtml\">";
            echo ($context["product_tabcontent"] ?? null);
            echo "</div>
\t\t\t\t\t\t\t\t\t";
        }
        // line 770
        echo "\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t
\t\t\t\t\t";
        // line 777
        echo "
\t\t\t\t\t";
        // line 778
        if ((($context["products"] ?? null) && twig_get_attribute($this->env, $this->source, ($context["soconfig"] ?? null), "get_settings", [0 => "related_status"], "method", false, false, false, 778))) {
            // line 779
            echo "\t\t\t\t\t<div class=\"content-product-bottom clearfix\">
\t\t\t\t\t\t<ul class=\"nav nav-tabs\">
\t\t\t\t\t\t  <li class=\"active\"><a data-toggle=\"tab\" href=\"#product-related\">";
            // line 781
            echo ($context["text_related"] ?? null);
            echo "</a></li> 
\t\t\t\t\t\t  <li><a data-toggle=\"tab\" href=\"#product-upsell\">";
            // line 782
            echo ($context["text_upsell"] ?? null);
            echo "</a></li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t\t<div class=\"tab-content\">
\t\t\t\t\t\t  \t<div id=\"product-related\" class=\"tab-pane fade in active\">
\t\t\t\t\t\t\t\t";
            // line 786
            $this->loadTemplate((($context["theme_directory"] ?? null) . "/template/soconfig/related_product.twig"), "so-buyshop/template/product/product.twig", 786)->display($context);
            // line 787
            echo "\t\t\t\t\t\t  \t</div>
\t\t\t\t\t\t  \t<div id=\"product-upsell\" class=\"tab-pane fade\">
\t\t\t\t\t\t  \t\t";
            // line 790
            echo "\t\t\t\t\t\t  \t\t";
            echo ($context["content_bottom"] ?? null);
            echo "
\t\t\t\t\t\t  \t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t
\t\t\t\t\t</div>
\t\t\t\t\t";
        }
        // line 796
        echo "
\t\t\t\t\t
\t\t\t\t</div>
\t\t\t\t";
        // line 800
        echo "\t\t\t\t";
        if ((($context["col_position"] ?? null) == "inside")) {
            echo " ";
            echo ($context["column_right"] ?? null);
            echo " ";
        }
        // line 801
        echo "
\t\t\t</div>
\t\t\t
\t    \t
\t    </div>
\t    ";
        // line 807
        echo "\t    ";
        if ((($context["col_position"] ?? null) == "outside")) {
            echo " ";
            echo ($context["column_right"] ?? null);
            echo " ";
        }
        // line 808
        echo "\t    </div>
\t</div>
</div>

<script type=\"text/javascript\">
<!--
\$('select[name=\\'recurring_id\\'], input[name=\"quantity\"]').change(function(){
\t\$.ajax({
\t\turl: 'index.php?route=product/product/getRecurringDescription',
\t\ttype: 'post',
\t\tdata: \$('input[name=\\'product_id\\'], input[name=\\'quantity\\'], select[name=\\'recurring_id\\']'),
\t\tdataType: 'json',
\t\tbeforeSend: function() {
\t\t\t\$('#recurring-description').html('');
\t\t},
\t\tsuccess: function(json) {
\t\t\t\$('.alert-dismissible, .text-danger').remove();

\t\t\tif (json['success']) {
\t\t\t\t\$('#recurring-description').html(json['success']);
\t\t\t}
\t\t}
\t});
});
//--></script>

<script type=\"text/javascript\"><!--
\$('#button-cart').on('click', function() {
\t
\t\$.ajax({
\t\turl: 'index.php?route=extension/soconfig/cart/add',
\t\ttype: 'post',
\t\tdata: \$('#product input[type=\\'text\\'], #product input[type=\\'hidden\\'], #product input[type=\\'radio\\']:checked, #product input[type=\\'checkbox\\']:checked, #product select, #product textarea'),
\t\tdataType: 'json',
\t\tbeforeSend: function() {
\t\t\t\$('#button-cart').button('loading');
\t\t},
\t\tcomplete: function() {
\t\t\t\$('#button-cart').button('reset');
\t\t},
\t\tsuccess: function(json) {
\t\t\t\$('.alert').remove();
\t\t\t\$('.text-danger').remove();
\t\t\t\$('.form-group').removeClass('has-error');
\t\t\tif (json['error']) {
\t\t\t\tif (json['error']['option']) {
\t\t\t\t\tfor (i in json['error']['option']) {
\t\t\t\t\t\tvar element = \$('#input-option' + i.replace('_', '-'));

\t\t\t\t";
        // line 857
        if (($context["option_data"] ?? null)) {
            // line 858
            echo "\t\t\t\t\tif(ProductOptionId != undefined && ProductOptionId==i.replace('_', '-')){
\t\t\t\t\t\t\$('.so-colorswatch-productpage-icons').after('<div class=\"text-danger\">' + json['error']['option'][i] + '</div>');
\t\t\t\t\t}
\t\t\t\t";
        }
        // line 862
        echo "            
\t\t\t\t\t\t
\t\t\t\t\t\tif (element.parent().hasClass('input-group')) {
\t\t\t\t\t\t\telement.parent().after('<div class=\"text-danger\">' + json['error']['option'][i] + '</div>');
\t\t\t\t\t\t} else {
\t\t\t\t\t\t\telement.after('<div class=\"text-danger\">' + json['error']['option'][i] + '</div>');
\t\t\t\t\t\t}
\t\t\t\t\t}
\t\t\t\t}
\t\t\t\t
\t\t\t\tif (json['error']['recurring']) {
\t\t\t\t\t\$('select[name=\\'recurring_id\\']').after('<div class=\"text-danger\">' + json['error']['recurring'] + '</div>');
\t\t\t\t}
\t\t\t\t
\t\t\t\t// Highlight any found errors
\t\t\t\t\$('.text-danger').parent().addClass('has-error');
\t\t\t}
\t\t\t
\t\t\tif (json['success']) {
\t\t\t\t\$('.text-danger').remove();
\t\t\t\t\$('#wrapper').before('<div class=\"alert alert-success\"><i class=\"fa fa-check-circle\"></i> ' + json['success'] + ' <button type=\"button\" class=\"fa fa-close close\" data-dismiss=\"alert\"></button></div>');
\t\t\t\t\$('#cart  .total-shopping-cart ').html(json['total'] );
\t\t\t\t\$('#cart > ul').load('index.php?route=common/cart/info ul li');
\t\t\t\t
\t\t\t\ttimer = setTimeout(function () {
\t\t\t\t\t\$('.alert').addClass('fadeOut');
\t\t\t\t}, 4000);
\t\t\t\t\$('.so-groups-sticky .popup-mycart .popup-content').load('index.php?route=extension/module/so_tools/info .popup-content .cart-header');
\t\t\t}
\t\t\t
\t\t
\t\t},
        error: function(xhr, ajaxOptions, thrownError) {
            alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
        }
\t});
});

//--></script> 

<script type=\"text/javascript\"><!--
\$('.date').datetimepicker({
\tlanguage: document.cookie.match(new RegExp('language=([^;]+)'))[1],
\tpickTime: false
});

\$('.datetime').datetimepicker({
\tlanguage: document.cookie.match(new RegExp('language=([^;]+)'))[1],
\tpickDate: true,
\tpickTime: true
});

\$('.time').datetimepicker({
\tlanguage: document.cookie.match(new RegExp('language=([^;]+)'))[1],
\tpickDate: false
});

\$('button[id^=\\'button-upload\\']').on('click', function() {
\tvar node = this;

\t\$('#form-upload').remove();

\t\$('body').prepend('<form enctype=\"multipart/form-data\" id=\"form-upload\" style=\"display: none;\"><input type=\"file\" name=\"file\" /></form>');

\t\$('#form-upload input[name=\\'file\\']').trigger('click');

\tif (typeof timer != 'undefined') {
\t\tclearInterval(timer);
\t}

\ttimer = setInterval(function() {
\t\tif (\$('#form-upload input[name=\\'file\\']').val() != '') {
\t\t\tclearInterval(timer);

\t\t\t\$.ajax({
\t\t\t\turl: 'index.php?route=tool/upload',
\t\t\t\ttype: 'post',
\t\t\t\tdataType: 'json',
\t\t\t\tdata: new FormData(\$('#form-upload')[0]),
\t\t\t\tcache: false,
\t\t\t\tcontentType: false,
\t\t\t\tprocessData: false,
\t\t\t\tbeforeSend: function() {
\t\t\t\t\t\$(node).button('loading');
\t\t\t\t},
\t\t\t\tcomplete: function() {
\t\t\t\t\t\$(node).button('reset');
\t\t\t\t},
\t\t\t\tsuccess: function(json) {
\t\t\t\t\t\$('.text-danger').remove();

\t\t\t\t\tif (json['error']) {
\t\t\t\t\t\t\$(node).parent().find('input').after('<div class=\"text-danger\">' + json['error'] + '</div>');
\t\t\t\t\t}

\t\t\t\t\tif (json['success']) {
\t\t\t\t\t\talert(json['success']);

\t\t\t\t\t\t\$(node).parent().find('input').val(json['code']);
\t\t\t\t\t}
\t\t\t\t},
\t\t\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t\t\t}
\t\t\t});
\t\t}
\t}, 500);
});
//--></script> 
<script type=\"text/javascript\"><!--
\$('#review').delegate('.pagination a', 'click', function(e) {
    e.preventDefault();

    \$('#review').fadeOut('slow');
    \$('#review').load(this.href);
    \$('#review').fadeIn('slow');
});

\$('#review').load('index.php?route=product/product/review&product_id=";
        // line 980
        echo ($context["product_id"] ?? null);
        echo "');

\$('#button-review').on('click', function() {
\t\$.ajax({
\t\turl: 'index.php?route=product/product/write&product_id=";
        // line 984
        echo ($context["product_id"] ?? null);
        echo "',
\t\ttype: 'post',
\t\tdataType: 'json',
\t\tdata: \$(\"#form-review\").serialize(),
\t\tbeforeSend: function() {
\t\t\t\$('#button-review').button('loading');
\t\t},
\t\tcomplete: function() {
\t\t\t\$('#button-review').button('reset');
\t\t},
\t\tsuccess: function(json) {
\t\t\t\$('.alert-dismissible').remove();

\t\t\tif (json['error']) {
\t\t\t\t\$('#review').after('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ' + json['error'] + '</div>');
\t\t\t}

\t\t\tif (json['success']) {
\t\t\t\t\$('#review').after('<div class=\"alert alert-success alert-dismissible\"><i class=\"fa fa-check-circle\"></i> ' + json['success'] + '</div>');

\t\t\t\t\$('input[name=\\'name\\']').val('');
\t\t\t\t\$('textarea[name=\\'text\\']').val('');
\t\t\t\t\$('input[name=\\'rating\\']:checked').prop('checked', false);
\t\t\t}
\t\t}
\t});
});

//--></script>



<script type=\"text/javascript\"><!--
\t\$(document).ready(function() {
\t\t
\t\t// Initialize the sticky scrolling on an item 
\t\tsidebar_sticky = '";
        // line 1020
        echo ($context["sidebar_sticky"] ?? null);
        echo "';
\t\t
\t\tif(sidebar_sticky=='left'){
\t\t\t\$(\".left_column\").stick_in_parent({
\t\t\t    offset_top: 10,
\t\t\t    bottoming   : true
\t\t\t});
\t\t}else if (sidebar_sticky=='right'){
\t\t\t\$(\".right_column\").stick_in_parent({
\t\t\t    offset_top: 10,
\t\t\t    bottoming   : true
\t\t\t});
\t\t}else if (sidebar_sticky=='all'){
\t\t\t\$(\".content-aside\").stick_in_parent({
\t\t\t    offset_top: 10,
\t\t\t    bottoming   : true
\t\t\t});
\t\t}
\t\t

\t\t\$(\"#thumb-slider .image-additional\").each(function() {
\t\t\t\$(this).find(\"[data-index='0']\").addClass('active');
\t\t});
\t\t
\t\t\$('.product-options li.radio').click(function(){
\t\t\t\$(this).addClass(function() {
\t\t\t\tif(\$(this).hasClass(\"active\")) return \"\";
\t\t\t\treturn \"active\";
\t\t\t});
\t\t\t
\t\t\t\$(this).siblings(\"li\").removeClass(\"active\");
\t\t\t\$(this).parent().find('.selected-option').html('<span class=\"label label-success\">'+ \$(this).find('img').data('original-title') +'</span>');
\t\t})
\t\t
\t\t\$('.thumb-video').magnificPopup({
\t\t  type: 'iframe',
\t\t  iframe: {
\t\t\tpatterns: {
\t\t\t   youtube: {
\t\t\t\t  index: 'youtube.com/', // String that detects type of video (in this case YouTube). Simply via url.indexOf(index).
\t\t\t\t  id: 'v=', // String that splits URL in a two parts, second part should be %id%
\t\t\t\t  src: '//www.youtube.com/embed/%id%?autoplay=1' // URL that will be set as a source for iframe. 
\t\t\t\t\t},
\t\t\t\t}
\t\t\t}
\t\t});
\t});
//--></script>


<script type=\"text/javascript\">
var ajax_price = function() {
\t\$.ajax({
\t\ttype: 'POST',
\t\turl: 'index.php?route=extension/soconfig/liveprice/index',
\t\tdata: \$('.product-detail input[type=\\'text\\'], .product-detail input[type=\\'hidden\\'], .product-detail input[type=\\'radio\\']:checked, .product-detail input[type=\\'checkbox\\']:checked, .product-detail select, .product-detail textarea'),
\t\tdataType: 'json',
\t\t\tsuccess: function(json) {
\t\t\tif (json.success) {
\t\t\t\tchange_price('#price-special', json.new_price.special);
\t\t\t\tchange_price('#price-tax', json.new_price.tax);
\t\t\t\tchange_price('#price-old', json.new_price.price);
\t\t\t}
\t\t}
\t});
}

var change_price = function(id, new_price) {\$(id).html(new_price);}
\$('.product-detail input[type=\\'text\\'], .product-detail input[type=\\'hidden\\'], .product-detail input[type=\\'radio\\'], .product-detail input[type=\\'checkbox\\'], .product-detail select, .product-detail textarea, .product-detail input[name=\\'quantity\\']').on('change', function() {
\tajax_price();
});
</script>

";
        // line 1093
        echo ($context["footer"] ?? null);
        echo " 
";
    }

    public function getTemplateName()
    {
        return "so-buyshop/template/product/product.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  2349 => 1093,  2273 => 1020,  2234 => 984,  2227 => 980,  2107 => 862,  2101 => 858,  2099 => 857,  2048 => 808,  2041 => 807,  2034 => 801,  2027 => 800,  2022 => 796,  2012 => 790,  2008 => 787,  2006 => 786,  1999 => 782,  1995 => 781,  1991 => 779,  1989 => 778,  1986 => 777,  1978 => 770,  1972 => 768,  1970 => 767,  1967 => 766,  1961 => 763,  1958 => 762,  1956 => 761,  1953 => 760,  1948 => 757,  1942 => 755,  1933 => 751,  1927 => 748,  1922 => 746,  1909 => 736,  1905 => 735,  1897 => 730,  1892 => 728,  1884 => 723,  1880 => 722,  1876 => 720,  1874 => 719,  1870 => 718,  1865 => 715,  1863 => 714,  1858 => 711,  1851 => 707,  1847 => 706,  1843 => 704,  1841 => 703,  1835 => 700,  1831 => 699,  1827 => 698,  1824 => 697,  1820 => 695,  1813 => 693,  1804 => 690,  1800 => 689,  1797 => 688,  1793 => 687,  1789 => 685,  1785 => 684,  1779 => 682,  1777 => 681,  1767 => 678,  1764 => 677,  1758 => 673,  1750 => 671,  1748 => 670,  1745 => 669,  1739 => 667,  1737 => 666,  1734 => 665,  1728 => 663,  1726 => 662,  1723 => 661,  1717 => 659,  1715 => 658,  1710 => 656,  1707 => 655,  1704 => 654,  1697 => 648,  1689 => 646,  1687 => 645,  1684 => 644,  1678 => 642,  1676 => 641,  1673 => 640,  1667 => 638,  1665 => 637,  1662 => 636,  1656 => 634,  1654 => 633,  1648 => 630,  1645 => 629,  1642 => 628,  1628 => 626,  1624 => 624,  1621 => 623,  1616 => 622,  1611 => 621,  1608 => 620,  1605 => 619,  1602 => 618,  1597 => 615,  1594 => 614,  1591 => 613,  1588 => 612,  1585 => 611,  1582 => 610,  1579 => 609,  1576 => 608,  1573 => 607,  1570 => 606,  1567 => 605,  1564 => 604,  1561 => 603,  1559 => 602,  1554 => 601,  1552 => 600,  1550 => 599,  1546 => 597,  1540 => 594,  1537 => 593,  1534 => 592,  1529 => 588,  1523 => 583,  1511 => 578,  1508 => 577,  1501 => 576,  1499 => 575,  1496 => 574,  1486 => 573,  1482 => 572,  1478 => 571,  1475 => 570,  1473 => 569,  1468 => 566,  1462 => 563,  1459 => 562,  1457 => 561,  1453 => 559,  1447 => 557,  1445 => 556,  1433 => 547,  1427 => 544,  1417 => 539,  1414 => 538,  1405 => 531,  1401 => 530,  1397 => 529,  1391 => 525,  1385 => 521,  1374 => 519,  1370 => 518,  1366 => 517,  1359 => 514,  1357 => 513,  1353 => 511,  1350 => 510,  1343 => 508,  1330 => 502,  1323 => 500,  1316 => 499,  1314 => 498,  1311 => 497,  1298 => 491,  1291 => 489,  1284 => 488,  1282 => 487,  1279 => 486,  1266 => 480,  1259 => 478,  1252 => 477,  1250 => 476,  1247 => 475,  1239 => 472,  1231 => 471,  1227 => 470,  1220 => 469,  1218 => 468,  1215 => 467,  1203 => 464,  1197 => 463,  1190 => 462,  1188 => 461,  1185 => 460,  1173 => 457,  1167 => 456,  1160 => 455,  1158 => 454,  1155 => 453,  1148 => 448,  1139 => 443,  1133 => 440,  1129 => 438,  1118 => 433,  1111 => 432,  1107 => 431,  1103 => 430,  1099 => 428,  1090 => 427,  1086 => 426,  1080 => 425,  1074 => 424,  1069 => 422,  1064 => 420,  1060 => 419,  1054 => 418,  1051 => 417,  1048 => 416,  1046 => 415,  1042 => 414,  1038 => 413,  1031 => 412,  1029 => 411,  1026 => 410,  1019 => 405,  1010 => 400,  1006 => 399,  1000 => 396,  996 => 394,  978 => 389,  974 => 388,  971 => 387,  962 => 386,  958 => 385,  952 => 384,  946 => 383,  941 => 381,  936 => 379,  932 => 378,  926 => 377,  923 => 376,  920 => 375,  918 => 374,  914 => 373,  910 => 372,  903 => 371,  901 => 370,  898 => 369,  893 => 366,  886 => 364,  879 => 362,  877 => 361,  870 => 360,  866 => 359,  862 => 358,  856 => 357,  850 => 356,  843 => 355,  841 => 354,  838 => 353,  834 => 352,  831 => 351,  826 => 348,  809 => 334,  800 => 328,  775 => 306,  766 => 300,  755 => 291,  738 => 277,  727 => 269,  717 => 261,  715 => 260,  702 => 250,  697 => 248,  691 => 245,  685 => 241,  671 => 237,  667 => 236,  663 => 235,  659 => 234,  655 => 233,  651 => 231,  647 => 230,  642 => 229,  640 => 228,  635 => 226,  631 => 225,  626 => 222,  623 => 221,  620 => 220,  617 => 219,  614 => 217,  608 => 214,  604 => 213,  601 => 212,  599 => 211,  594 => 208,  586 => 206,  584 => 205,  581 => 204,  577 => 202,  569 => 200,  567 => 199,  561 => 198,  558 => 197,  556 => 196,  548 => 193,  545 => 192,  537 => 190,  535 => 189,  532 => 188,  524 => 186,  522 => 185,  519 => 184,  510 => 182,  507 => 181,  505 => 180,  498 => 175,  494 => 174,  482 => 172,  476 => 171,  471 => 169,  467 => 167,  462 => 164,  454 => 162,  452 => 161,  448 => 159,  442 => 157,  439 => 156,  435 => 154,  432 => 153,  422 => 146,  416 => 145,  412 => 143,  405 => 139,  399 => 138,  396 => 137,  394 => 136,  391 => 135,  389 => 134,  387 => 133,  384 => 132,  379 => 129,  373 => 127,  371 => 126,  367 => 125,  363 => 123,  357 => 122,  350 => 121,  346 => 120,  341 => 117,  336 => 115,  332 => 114,  327 => 113,  325 => 112,  322 => 111,  320 => 110,  318 => 109,  312 => 106,  306 => 104,  303 => 102,  300 => 100,  297 => 99,  294 => 98,  291 => 97,  289 => 96,  286 => 95,  283 => 94,  281 => 93,  278 => 92,  275 => 91,  273 => 90,  270 => 89,  267 => 88,  265 => 87,  262 => 86,  259 => 85,  256 => 84,  253 => 82,  251 => 81,  246 => 80,  241 => 76,  232 => 73,  229 => 72,  220 => 69,  217 => 68,  215 => 67,  211 => 65,  208 => 63,  205 => 62,  202 => 61,  199 => 60,  196 => 59,  193 => 58,  190 => 57,  187 => 56,  184 => 55,  181 => 54,  178 => 53,  175 => 52,  172 => 51,  169 => 50,  166 => 49,  163 => 48,  160 => 47,  155 => 44,  152 => 43,  150 => 42,  147 => 41,  144 => 40,  141 => 39,  138 => 38,  135 => 37,  132 => 36,  129 => 35,  126 => 34,  123 => 33,  120 => 32,  117 => 31,  115 => 30,  109 => 28,  106 => 27,  97 => 22,  94 => 21,  92 => 20,  89 => 19,  85 => 18,  80 => 17,  77 => 16,  74 => 15,  69 => 14,  66 => 13,  63 => 12,  58 => 11,  55 => 10,  52 => 9,  48 => 8,  44 => 5,  42 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "so-buyshop/template/product/product.twig", "/opt/lampp/htdocs/protidin/system/storage/modification/catalog/view/theme/so-buyshop/template/product/product.twig");
    }
}
