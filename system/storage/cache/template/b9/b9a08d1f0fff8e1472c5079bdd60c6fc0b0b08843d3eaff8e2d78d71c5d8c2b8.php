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

/* so-buyshop/template/extension/module/so_tools/layout.twig */
class __TwigTemplate_5a77b5406d6f4552edc68b0c53ec756211b2ff9b89c183032dc5c4cba11a95d9 extends \Twig\Template
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
        if ((twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "status", [], "any", true, true, false, 1) && (twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "status", [], "any", false, false, false, 1) == 1))) {
            // line 2
            echo "<script type=\"text/javascript\" src=\"";
            echo ($context["tool_js"] ?? null);
            echo "\"></script>
<div id=\"so-groups\" class=\"";
            // line 3
            echo ($context["position"] ?? null);
            echo " so-groups-sticky hidden-xs\" style=\"top: ";
            echo (($context["top"] ?? null) . "px");
            echo "\">
\t";
            // line 4
            if (twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "show_category", [], "any", false, false, false, 4)) {
                // line 5
                echo "\t<a class=\"sticky-categories\" data-target=\"popup\" data-popup=\"#popup-categories\"><span>";
                echo ($context["text_head_categories"] ?? null);
                echo "</span><i class=\"fa fa-align-justify\"></i></a>
\t";
            }
            // line 7
            echo "\t";
            if (twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "show_cart", [], "any", false, false, false, 7)) {
                // line 8
                echo "\t<a class=\"sticky-mycart\" data-target=\"popup\" data-popup=\"#popup-mycart\"><span>";
                echo ($context["text_head_cart"] ?? null);
                echo "</span><i class=\"fa fa-shopping-cart\"></i></a>
\t";
            }
            // line 10
            echo "\t";
            if (twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "show_account", [], "any", false, false, false, 10)) {
                // line 11
                echo "\t<a class=\"sticky-myaccount\" data-target=\"popup\" data-popup=\"#popup-myaccount\"><span>";
                echo ($context["text_head_account"] ?? null);
                echo "</span><i class=\"fa fa-user\"></i></a>
\t";
            }
            // line 13
            echo "\t";
            if (twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "show_search", [], "any", false, false, false, 13)) {
                // line 14
                echo "\t<a class=\"sticky-mysearch\" data-target=\"popup\" data-popup=\"#popup-mysearch\"><span>";
                echo ($context["text_head_search"] ?? null);
                echo "</span><i class=\"fa fa-search\"></i></a>
\t";
            }
            // line 16
            echo "\t";
            if (twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "show_recent_product", [], "any", false, false, false, 16)) {
                // line 17
                echo "\t<a class=\"sticky-recent\" data-target=\"popup\" data-popup=\"#popup-recent\"><span>";
                echo ($context["text_head_recent_view"] ?? null);
                echo "</span><i class=\"fa fa-recent\"></i></a>
\t";
            }
            // line 19
            echo "\t";
            if (twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "show_backtop", [], "any", false, false, false, 19)) {
                // line 20
                echo "\t<a class=\"sticky-backtop\" data-target=\"scroll\" data-scroll=\"html\"><span>";
                echo ($context["text_head_gotop"] ?? null);
                echo "</span><i class=\"fa fa-angle-double-up\"></i></a>
\t";
            }
            // line 22
            echo "
\t";
            // line 23
            if (twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "show_category", [], "any", false, false, false, 23)) {
                // line 24
                echo "\t<div class=\"popup popup-categories popup-hidden\" id=\"popup-categories\">
\t\t<div class=\"popup-screen\">
\t\t\t<div class=\"popup-position\">
\t\t\t\t<div class=\"popup-container popup-small\">
\t\t\t\t\t<div class=\"popup-header\">
\t\t\t\t\t\t<span><i class=\"fa fa-align-justify\"></i>";
                // line 29
                echo ($context["text_all_categories"] ?? null);
                echo "</span>
\t\t\t\t\t\t<a class=\"popup-close\" data-target=\"popup-close\" data-popup-close=\"#popup-categories\">&times;</a>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"popup-content\">
\t\t\t\t\t\t";
                // line 33
                if (($context["categories"] ?? null)) {
                    // line 34
                    echo "\t\t\t\t\t\t<div class=\"nav-secondary\">
\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t";
                    // line 36
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(($context["categories"] ?? null));
                    foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                        // line 37
                        echo "\t\t\t\t\t\t\t\t\t";
                        $context["childrens"] = twig_get_attribute($this->env, $this->source, $context["category"], "children", [], "any", false, false, false, 37);
                        // line 38
                        echo "\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t";
                        // line 39
                        if (($context["childrens"] ?? null)) {
                            // line 40
                            echo "\t\t\t\t\t\t\t\t\t\t\t<span class=\"nav-action\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-plus more\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-minus less\"></i>
\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t";
                        }
                        // line 45
                        echo "\t\t\t\t\t\t\t\t\t\t<a href=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["category"], "href", [], "any", false, false, false, 45);
                        echo "\"><i class=\"fa fa-chevron-down nav-arrow\"></i>";
                        echo twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 45);
                        echo "</a>
\t\t\t\t\t\t\t\t\t\t";
                        // line 46
                        if (($context["childrens"] ?? null)) {
                            // line 47
                            echo "\t\t\t\t\t\t\t\t\t\t\t<ul class=\"level-2\">
\t\t\t\t\t\t\t\t\t\t\t\t";
                            // line 48
                            $context['_parent'] = $context;
                            $context['_seq'] = twig_ensure_traversable(($context["childrens"] ?? null));
                            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                                // line 49
                                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                $context["subchildrens"] = twig_get_attribute($this->env, $this->source, $context["child"], "children", [], "any", false, false, false, 49);
                                // line 50
                                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                // line 51
                                if (($context["subchildrens"] ?? null)) {
                                    // line 52
                                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"nav-action\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-plus more\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-minus less\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                }
                                // line 57
                                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
                                echo twig_get_attribute($this->env, $this->source, $context["child"], "href", [], "any", false, false, false, 57);
                                echo "\"><i class=\"fa fa-chevron-right flip nav-arrow\"></i>";
                                echo twig_get_attribute($this->env, $this->source, $context["child"], "name", [], "any", false, false, false, 57);
                                echo "</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                // line 58
                                if (($context["subchildrens"] ?? null)) {
                                    // line 59
                                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<ul class=\"level-3\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                    // line 60
                                    $context['_parent'] = $context;
                                    $context['_seq'] = twig_ensure_traversable(($context["subchildrens"] ?? null));
                                    foreach ($context['_seq'] as $context["_key"] => $context["subchild"]) {
                                        // line 61
                                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"";
                                        echo twig_get_attribute($this->env, $this->source, $context["subchild"], "href", [], "any", false, false, false, 61);
                                        echo "\">";
                                        echo twig_get_attribute($this->env, $this->source, $context["subchild"], "name", [], "any", false, false, false, 61);
                                        echo "</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                    }
                                    $_parent = $context['_parent'];
                                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['subchild'], $context['_parent'], $context['loop']);
                                    $context = array_intersect_key($context, $_parent) + $_parent;
                                    // line 63
                                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                }
                                // line 65
                                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t";
                            }
                            $_parent = $context['_parent'];
                            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
                            $context = array_intersect_key($context, $_parent) + $_parent;
                            // line 67
                            echo "\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t";
                        }
                        // line 69
                        echo "\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 71
                    echo "\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
                }
                // line 74
                echo "\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
\t";
            }
            // line 80
            echo "
\t";
            // line 81
            if (twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "show_cart", [], "any", false, false, false, 81)) {
                // line 82
                echo "\t<div class=\"popup popup-mycart popup-hidden\" id=\"popup-mycart\">
\t\t<div class=\"popup-screen\">
\t\t\t<div class=\"popup-position\">
\t\t\t\t<div class=\"popup-container popup-small\">
\t\t\t\t\t<div class=\"popup-html\">
\t\t\t\t\t\t<div class=\"popup-header\">
\t\t\t\t\t\t\t<span><i class=\"fa fa-shopping-cart\"></i>";
                // line 88
                echo ($context["text_shopping_cart"] ?? null);
                echo "</span>
\t\t\t\t\t\t\t<a class=\"popup-close\" data-target=\"popup-close\" data-popup-close=\"#popup-mycart\">&times;</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"popup-content\">
\t\t\t\t\t\t\t<div class=\"cart-header\">
\t\t\t\t\t\t\t\t";
                // line 93
                if ((($context["products"] ?? null) || ($context["vouchers"] ?? null))) {
                    // line 94
                    echo "\t\t\t\t\t\t\t\t\t<div class=\"notification gray\">
\t\t\t\t\t\t\t\t\t\t<p>";
                    // line 95
                    echo ($context["text_items_product"] ?? null);
                    echo "</p>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<table class=\"table table-striped\">
\t\t\t\t\t\t\t\t\t\t";
                    // line 98
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
                    foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                        // line 99
                        echo "\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t  \t\t\t<td class=\"text-left first\">
\t\t\t\t\t\t\t\t\t  \t\t\t\t";
                        // line 101
                        if (twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 101)) {
                            // line 102
                            echo "\t\t\t\t\t\t\t\t\t    \t\t\t\t<a href=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 102);
                            echo "\"><img class=\"img-thumbnail lazyload\" data-sizes=\"auto\" src=\"data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==\" data-src=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 102);
                            echo "\" alt=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 102);
                            echo "\" title=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 102);
                            echo "\" /></a>
\t\t\t\t\t\t\t\t\t    \t\t\t";
                        }
                        // line 104
                        echo "\t\t\t\t\t\t\t\t\t    \t\t</td>
\t\t\t\t\t\t\t\t\t  \t\t\t<td class=\"text-left\">
\t\t\t\t\t\t\t\t\t  \t\t\t\t<a href=\"";
                        // line 106
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 106);
                        echo "\">";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 106);
                        echo "</a>
\t\t\t\t\t\t\t\t\t    \t\t\t";
                        // line 107
                        if (twig_get_attribute($this->env, $this->source, $context["product"], "option", [], "any", false, false, false, 107)) {
                            // line 108
                            echo "\t\t\t\t\t\t\t\t\t    \t\t\t\t";
                            $context['_parent'] = $context;
                            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["product"], "option", [], "any", false, false, false, 108));
                            foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
                                // line 109
                                echo "\t\t\t\t\t\t\t\t\t    \t\t\t\t\t<br />
\t\t\t\t\t\t\t\t\t    \t\t\t\t\t- <small>";
                                // line 110
                                echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 110);
                                echo " ";
                                echo twig_get_attribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 110);
                                echo "</small>
\t\t\t\t\t\t\t\t\t    \t\t\t\t";
                            }
                            $_parent = $context['_parent'];
                            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
                            $context = array_intersect_key($context, $_parent) + $_parent;
                            // line 112
                            echo "\t\t\t\t\t\t\t\t\t    \t\t\t";
                        }
                        // line 113
                        echo "\t\t\t\t\t\t\t\t\t    \t\t\t";
                        if (twig_get_attribute($this->env, $this->source, $context["product"], "recurring", [], "any", false, false, false, 113)) {
                            // line 114
                            echo "\t\t\t\t\t\t\t\t\t    \t\t\t\t<br />
\t\t\t\t\t\t\t\t\t    \t\t\t\t- <small>";
                            // line 115
                            echo ($context["text_recurring"] ?? null);
                            echo " ";
                            echo twig_get_attribute($this->env, $this->source, $context["product"], "recurring", [], "any", false, false, false, 115);
                            echo "</small>
\t\t\t\t\t\t\t\t\t    \t\t\t";
                        }
                        // line 117
                        echo "\t\t\t\t\t\t\t\t\t    \t\t</td>
\t\t\t\t\t\t\t\t\t  \t\t\t<td class=\"text-right\">x ";
                        // line 118
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "quantity", [], "any", false, false, false, 118);
                        echo "</td>
\t\t\t\t\t\t\t\t\t  \t\t\t<td class=\"text-right total-price\">";
                        // line 119
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "total", [], "any", false, false, false, 119);
                        echo "</td>
\t\t\t\t\t\t\t\t\t  \t\t\t<td class=\"text-right last\"><a href=\"javascript:;\" onclick=\"cart.remove('";
                        // line 120
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "cart_id", [], "any", false, false, false, 120);
                        echo "');\" title=\"";
                        echo ($context["button_remove"] ?? null);
                        echo "\"><i class=\"fa fa-trash\"></i></a></td>
\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 123
                    echo "\t\t\t\t\t\t\t\t\t\t";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(($context["vouchers"] ?? null));
                    foreach ($context['_seq'] as $context["_key"] => $context["voucher"]) {
                        // line 124
                        echo "\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t  \t\t\t<td class=\"text-left first\"></td>
\t\t\t\t\t\t\t\t\t  \t\t\t<td class=\"text-left\">";
                        // line 126
                        echo twig_get_attribute($this->env, $this->source, $context["voucher"], "description", [], "any", false, false, false, 126);
                        echo "</td>
\t\t\t\t\t\t\t\t\t  \t\t\t<td class=\"text-right\">x&nbsp;1</td>
\t\t\t\t\t\t\t\t\t  \t\t\t<td class=\"text-right\">";
                        // line 128
                        echo twig_get_attribute($this->env, $this->source, $context["voucher"], "amount", [], "any", false, false, false, 128);
                        echo "</td>
\t\t\t\t\t\t\t\t\t  \t\t\t<td class=\"text-right last\"><a href=\"javascript:;\" onclick=\"voucher.remove('";
                        // line 129
                        echo twig_get_attribute($this->env, $this->source, $context["voucher"], "key", [], "any", false, false, false, 129);
                        echo "');\" title=\"";
                        echo ($context["button_remove"] ?? null);
                        echo "\"><i class=\"fa fa-trash\"></i></a></td>
\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['voucher'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 132
                    echo "\t\t\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t\t\t<div class=\"cart-bottom\">
\t\t\t\t\t\t\t\t\t\t<table class=\"table table-striped\">
\t\t\t\t\t\t\t\t\t  \t\t";
                    // line 135
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(($context["totals"] ?? null));
                    foreach ($context['_seq'] as $context["_key"] => $context["total"]) {
                        // line 136
                        echo "\t\t\t\t\t\t\t\t\t  \t\t\t<tr>
\t\t\t\t\t\t\t\t\t    \t\t\t<td class=\"text-left\"><strong>";
                        // line 137
                        echo twig_get_attribute($this->env, $this->source, $context["total"], "title", [], "any", false, false, false, 137);
                        echo "</strong></td>
\t\t\t\t\t\t\t\t\t    \t\t\t<td class=\"text-right\">";
                        // line 138
                        echo twig_get_attribute($this->env, $this->source, $context["total"], "text", [], "any", false, false, false, 138);
                        echo "</td>
\t\t\t\t\t\t\t\t\t  \t\t\t</tr>
\t\t\t\t\t\t\t\t\t  \t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['total'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 141
                    echo "\t\t\t\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t\t\t\t<p class=\"text-center\">
\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
                    // line 143
                    echo ($context["cart"] ?? null);
                    echo "\" class=\"btn btn-view-cart\"><strong>";
                    echo ($context["text_cart"] ?? null);
                    echo "</strong></a>
\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
                    // line 144
                    echo ($context["checkout"] ?? null);
                    echo "\" class=\"btn btn-checkout\"><strong>";
                    echo ($context["text_checkout"] ?? null);
                    echo "</strong></a>
\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t";
                } else {
                    // line 148
                    echo "\t\t\t\t\t\t\t\t\t<div class=\"notification gray\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-shopping-cart info-icon\"></i>
\t\t\t\t\t\t\t\t\t\t<p>";
                    // line 150
                    echo ($context["text_empty"] ?? null);
                    echo "</p>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t";
                }
                // line 153
                echo "\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>\t\t\t
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
\t";
            }
            // line 161
            echo "
\t";
            // line 162
            if (twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "show_account", [], "any", false, false, false, 162)) {
                // line 163
                echo "\t<div class=\"popup popup-myaccount popup-hidden\" id=\"popup-myaccount\">
\t\t<div class=\"popup-screen\">
\t\t\t<div class=\"popup-position\">
\t\t\t\t<div class=\"popup-container popup-small\">
\t\t\t\t\t<div class=\"popup-html\">
\t\t\t\t\t\t<div class=\"popup-header\">
\t\t\t\t\t\t\t<span><i class=\"fa fa-user\"></i>";
                // line 169
                echo ($context["text_my_account"] ?? null);
                echo "</span>
\t\t\t\t\t\t\t<a class=\"popup-close\" data-target=\"popup-close\" data-popup-close=\"#popup-myaccount\">&times;</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"popup-content\">
\t\t\t\t\t\t\t<div class=\"form-content\">
\t\t\t\t\t\t\t\t<div class=\"row space\">
\t\t\t\t\t\t\t\t\t<div class=\"col col-sm-6 col-xs-12\">
\t\t\t\t\t\t\t\t\t\t<div class=\"form-box\">
\t\t\t\t\t\t\t\t\t\t\t<form action=\"";
                // line 177
                echo ($context["action_currency"] ?? null);
                echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"sticky-form-currency\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"label-top\" for=\"input-language\"><span>";
                // line 178
                echo ($context["text_currency"] ?? null);
                echo "</span></label>
\t\t\t\t\t\t\t\t\t\t\t\t<select name=\"select-currency\" id=\"input-currency\" class=\"field icon dark arrow\">
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 180
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["currencies"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["currency"]) {
                    // line 181
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    if (twig_get_attribute($this->env, $this->source, $context["currency"], "symbol_left", [], "any", false, false, false, 181)) {
                        // line 182
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["currency"], "code", [], "any", false, false, false, 182);
                        echo "\" ";
                        if ((($context["code"] ?? null) == twig_get_attribute($this->env, $this->source, $context["currency"], "code", [], "any", false, false, false, 182))) {
                            echo " ";
                            echo "selected=\"selected\"";
                            echo " ";
                        }
                        echo ">";
                        echo twig_get_attribute($this->env, $this->source, $context["currency"], "symbol_left", [], "any", false, false, false, 182);
                        echo " ";
                        echo twig_get_attribute($this->env, $this->source, $context["currency"], "title", [], "any", false, false, false, 182);
                        echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    } else {
                        // line 184
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["currency"], "code", [], "any", false, false, false, 184);
                        echo "\" ";
                        if ((($context["code"] ?? null) == twig_get_attribute($this->env, $this->source, $context["currency"], "code", [], "any", false, false, false, 184))) {
                            echo " ";
                            echo "selected=\"selected\"";
                            echo " ";
                        }
                        echo ">";
                        echo twig_get_attribute($this->env, $this->source, $context["currency"], "symbol_right", [], "any", false, false, false, 184);
                        echo " ";
                        echo twig_get_attribute($this->env, $this->source, $context["currency"], "title", [], "any", false, false, false, 184);
                        echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    }
                    // line 186
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['currency'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                echo "\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"code\" value=\"\">
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"redirect\" value=\"";
                // line 189
                echo ($context["redirect_currency"] ?? null);
                echo "\">
\t\t\t\t\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"col col-sm-6 col-xs-12\">
\t\t\t\t\t\t\t\t\t\t<div class=\"form-box\">
\t\t\t\t\t\t\t\t\t\t\t<form action=\"";
                // line 195
                echo ($context["action_language"] ?? null);
                echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"sticky-form-language\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"label-top\" for=\"input-language\"><span>";
                // line 196
                echo ($context["text_language"] ?? null);
                echo "</span></label>
\t\t\t\t\t\t\t\t\t\t\t\t<select name=\"select-language\" id=\"input-language\" class=\"field icon dark arrow\">
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 198
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
                    // line 199
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    if ((twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 199) == ($context["code_language"] ?? null))) {
                        // line 200
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 200);
                        echo "\" selected=\"selected\">";
                        echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 200);
                        echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    } else {
                        // line 202
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 202);
                        echo "\">";
                        echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 202);
                        echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    }
                    // line 204
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 205
                echo "\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"code\" value=\"\">
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"redirect\" value=\"";
                // line 207
                echo ($context["redirect_language"] ?? null);
                echo "\">
\t\t\t\t\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"col col-sm-12\">
\t\t\t\t\t\t\t\t\t\t<div class=\"form-box\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"hr show\"></div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"col col-sm-4 col-xs-6 txt-center\">
\t\t\t\t\t\t\t\t\t\t<div class=\"form-box\">
\t\t\t\t\t\t\t\t\t\t\t<a class=\"account-url\" href=\"";
                // line 218
                echo ($context["link_order"] ?? null);
                echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"ico ico-32 ico-sm\"><i class=\"fa fa-history\"></i></span><br>
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"account-txt\">";
                // line 220
                echo ($context["text_history"] ?? null);
                echo "</span>
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"col col-sm-4 col-xs-6 txt-center\">
\t\t\t\t\t\t\t\t\t\t<div class=\"form-box\">
\t\t\t\t\t\t\t\t\t\t\t<a class=\"account-url\" href=\"";
                // line 226
                echo ($context["link_cart"] ?? null);
                echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"ico ico-32 ico-sm\"><i class=\"fa fa-shoppingcart\"></i></span><br>
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"account-txt\">";
                // line 228
                echo ($context["text_shopping_cart"] ?? null);
                echo "</span>
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"col col-sm-4 col-xs-6 txt-center\">
\t\t\t\t\t\t\t\t\t\t<div class=\"form-box\">
\t\t\t\t\t\t\t\t\t\t\t<a class=\"account-url\" href=\"";
                // line 234
                echo ($context["link_register"] ?? null);
                echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"ico ico-32 ico-sm\"><i class=\"fa fa-register\"></i></span><br>
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"account-txt\">";
                // line 236
                echo ($context["text_register"] ?? null);
                echo "</span>
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"col col-sm-4 col-xs-6 txt-center\">
\t\t\t\t\t\t\t\t\t\t<div class=\"form-box\">
\t\t\t\t\t\t\t\t\t\t\t<a class=\"account-url\" href=\"";
                // line 242
                echo ($context["link_account"] ?? null);
                echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"ico ico-32 ico-sm\"><i class=\"fa fa-account\"></i></span><br>
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"account-txt\">";
                // line 244
                echo ($context["text_account"] ?? null);
                echo "</span>
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"col col-sm-4 col-xs-6 txt-center\">
\t\t\t\t\t\t\t\t\t\t<div class=\"form-box\">
\t\t\t\t\t\t\t\t\t\t\t<a class=\"account-url\" href=\"";
                // line 250
                echo ($context["link_download"] ?? null);
                echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"ico ico-32 ico-sm\"><i class=\"fa fa-download\"></i></span><br>
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"account-txt\">";
                // line 252
                echo ($context["text_download"] ?? null);
                echo "</span>
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"col col-sm-4 col-xs-6 txt-center\">
\t\t\t\t\t\t\t\t\t\t<div class=\"form-box\">
\t\t\t\t\t\t\t\t\t\t\t<a class=\"account-url\" href=\"";
                // line 258
                echo ($context["link_login"] ?? null);
                echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"ico ico-32 ico-sm\"><i class=\"fa fa-login\"></i></span><br>
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"account-txt\">";
                // line 260
                echo ($context["text_login"] ?? null);
                echo "</span>
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"clear\"></div>
\t\t\t\t\t\t</div>\t\t\t\t\t
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
\t";
            }
            // line 274
            echo "
\t";
            // line 275
            if (twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "show_search", [], "any", false, false, false, 275)) {
                // line 276
                echo "\t<div class=\"popup popup-mysearch popup-hidden\" id=\"popup-mysearch\">
\t\t<div class=\"popup-screen\">
\t\t\t<div class=\"popup-position\">
\t\t\t\t<div class=\"popup-container popup-small\">
\t\t\t\t\t<div class=\"popup-html\">
\t\t\t\t\t\t<div class=\"popup-header\">
\t\t\t\t\t\t\t<span><i class=\"fa fa-search\"></i>";
                // line 282
                echo ($context["text_search"] ?? null);
                echo "</span>
\t\t\t\t\t\t\t<a class=\"popup-close\" data-target=\"popup-close\" data-popup-close=\"#popup-mysearch\">&times;</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"popup-content\">
\t\t\t\t\t\t\t<div class=\"form-content\">
\t\t\t\t\t\t\t\t<div class=\"row space\">
\t\t\t\t\t\t\t\t\t<div class=\"col\">
\t\t\t\t\t\t\t\t\t\t<div class=\"form-box\">
\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"search\" value=\"\" placeholder=\"";
                // line 290
                echo ($context["text_search"] ?? null);
                echo "\" id=\"input-search\" class=\"field\" />
\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-search sbmsearch\"></i>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"col\">
\t\t\t\t\t\t\t\t\t\t<div class=\"form-box\">
\t\t\t\t\t\t\t\t\t\t\t<button type=\"button\" id=\"button-search\" class=\"btn button-search\">";
                // line 296
                echo ($context["text_search"] ?? null);
                echo "</button>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"clear\"></div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
\t";
            }
            // line 309
            echo "
\t";
            // line 310
            if (twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "show_recent_product", [], "any", false, false, false, 310)) {
                // line 311
                echo "\t<div class=\"popup popup-recent popup-hidden\" id=\"popup-recent\">
\t\t<div class=\"popup-screen\">
\t\t\t<div class=\"popup-position\">
\t\t\t\t<div class=\"popup-container popup-small\">
\t\t\t\t\t<div class=\"popup-html\">
\t\t\t\t\t\t<div class=\"popup-header\">
\t\t\t\t\t\t\t<span><i class=\"fa fa-recent\"></i>";
                // line 317
                echo ($context["text_recent_products"] ?? null);
                echo "</span>
\t\t\t\t\t\t\t<a class=\"popup-close\" data-target=\"popup-close\" data-popup-close=\"#popup-recent\">&times;</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"popup-content\">
\t\t\t\t\t\t\t<div class=\"form-content\">
\t\t\t\t\t\t\t\t<div class=\"row space\">
\t\t\t\t\t\t\t\t\t";
                // line 323
                if (($context["recent_products"] ?? null)) {
                    // line 324
                    echo "\t\t\t\t\t\t\t\t\t\t";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(($context["recent_products"] ?? null));
                    foreach ($context['_seq'] as $context["_key"] => $context["product_viewed"]) {
                        // line 325
                        echo "\t\t\t\t\t\t\t\t\t\t\t<div class=\"col col-sm-4 col-xs-6\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-box\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"item\">
\t\t\t\t                                        <div class=\"product-thumb transition\">
\t\t\t\t\t\t\t\t                        \t<div class=\"image\">
\t\t\t\t\t\t\t\t                        \t\t";
                        // line 330
                        if (twig_get_attribute($this->env, $this->source, $context["product_viewed"], "product_special", [], "any", false, false, false, 330)) {
                            // line 331
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"bt-sale\">";
                            echo twig_get_attribute($this->env, $this->source, $context["product_viewed"], "product_discount", [], "any", false, false, false, 331);
                            echo "</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        }
                        // line 333
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        if (twig_get_attribute($this->env, $this->source, $context["product_viewed"], "product_new", [], "any", false, false, false, 333)) {
                            // line 334
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"bt-new\">";
                            echo ($context["text_new"] ?? null);
                            echo "</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        }
                        // line 336
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["product_viewed"], "product_href", [], "any", false, false, false, 336);
                        echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img class=\"lazyload\" data-sizes=\"auto\" src=\"data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==\" data-src=\"";
                        // line 337
                        echo twig_get_attribute($this->env, $this->source, $context["product_viewed"], "product_image", [], "any", false, false, false, 337);
                        echo "\" alt=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["product_viewed"], "product_name", [], "any", false, false, false, 337);
                        echo "\" >
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t                         \t</div>
\t\t\t\t\t\t\t\t\t                        <div class=\"caption\">
\t\t                                                        ";
                        // line 341
                        if (twig_get_attribute($this->env, $this->source, $context["product_viewed"], "product_name", [], "any", false, false, false, 341)) {
                            echo "<h4 class=\"font-ct\"><a href=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["product_viewed"], "product_href", [], "any", false, false, false, 341);
                            echo "\" title=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["product_viewed"], "product_name", [], "any", false, false, false, 341);
                            echo "\" >";
                            echo twig_get_attribute($this->env, $this->source, $context["product_viewed"], "product_name", [], "any", false, false, false, 341);
                            echo "</a></h4>";
                        }
                        // line 342
                        echo "\t\t                                                        ";
                        if (twig_get_attribute($this->env, $this->source, $context["product_viewed"], "product_price", [], "any", false, false, false, 342)) {
                            // line 343
                            echo "\t\t\t                                                        <p class=\"price\">
\t\t\t                                                        \t";
                            // line 344
                            if ((twig_get_attribute($this->env, $this->source, $context["product_viewed"], "product_special", [], "any", false, false, false, 344) == false)) {
                                // line 345
                                echo "\t\t\t\t\t\t\t\t\t\t                                \t<span class=\"price-new\">";
                                echo twig_get_attribute($this->env, $this->source, $context["product_viewed"], "product_price", [], "any", false, false, false, 345);
                                echo "</span>
\t\t\t\t\t\t\t\t\t\t                                ";
                            } else {
                                // line 347
                                echo "\t\t\t\t\t\t\t\t\t\t                                \t<span class=\"price-new\">";
                                echo twig_get_attribute($this->env, $this->source, $context["product_viewed"], "product_special", [], "any", false, false, false, 347);
                                echo "</span>
\t\t\t\t\t\t\t\t\t\t                                \t<span class=\"price-old\">";
                                // line 348
                                echo twig_get_attribute($this->env, $this->source, $context["product_viewed"], "product_price", [], "any", false, false, false, 348);
                                echo "</span>
\t\t\t\t\t\t\t\t\t\t                                ";
                            }
                            // line 350
                            echo "\t\t\t\t\t\t\t\t\t\t                            </p>
\t\t                                                    \t";
                        }
                        // line 352
                        echo "\t\t                                                    </div>
\t\t                                                    <div class=\"button-group\">
\t\t                                                    \t<button type=\"button\" onclick=\"cart.add('";
                        // line 354
                        echo twig_get_attribute($this->env, $this->source, $context["product_viewed"], "product_id", [], "any", false, false, false, 354);
                        echo "');\">
\t\t                                                    \t\t<span class=\"\">";
                        // line 355
                        echo ($context["button_cart"] ?? null);
                        echo "</span>
\t\t                                                    \t</button>
\t\t                                                    </div>
\t\t\t                                            </div>
\t\t\t\t                                    </div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product_viewed'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 363
                    echo "\t\t\t\t\t\t\t\t\t";
                } else {
                    // line 364
                    echo "\t\t\t\t\t\t\t\t\t\t<div class=\"col col-xs-12\">";
                    echo ($context["text_no_content"] ?? null);
                    echo "</div>
\t\t\t\t\t\t\t\t\t";
                }
                // line 366
                echo "\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"clear\"></div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
\t";
            }
            // line 376
            echo "</div>
";
        }
    }

    public function getTemplateName()
    {
        return "so-buyshop/template/extension/module/so_tools/layout.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  891 => 376,  879 => 366,  873 => 364,  870 => 363,  856 => 355,  852 => 354,  848 => 352,  844 => 350,  839 => 348,  834 => 347,  828 => 345,  826 => 344,  823 => 343,  820 => 342,  810 => 341,  801 => 337,  796 => 336,  790 => 334,  787 => 333,  781 => 331,  779 => 330,  772 => 325,  767 => 324,  765 => 323,  756 => 317,  748 => 311,  746 => 310,  743 => 309,  727 => 296,  718 => 290,  707 => 282,  699 => 276,  697 => 275,  694 => 274,  677 => 260,  672 => 258,  663 => 252,  658 => 250,  649 => 244,  644 => 242,  635 => 236,  630 => 234,  621 => 228,  616 => 226,  607 => 220,  602 => 218,  588 => 207,  584 => 205,  578 => 204,  570 => 202,  562 => 200,  559 => 199,  555 => 198,  550 => 196,  546 => 195,  537 => 189,  527 => 186,  511 => 184,  495 => 182,  492 => 181,  488 => 180,  483 => 178,  479 => 177,  468 => 169,  460 => 163,  458 => 162,  455 => 161,  445 => 153,  439 => 150,  435 => 148,  426 => 144,  420 => 143,  416 => 141,  407 => 138,  403 => 137,  400 => 136,  396 => 135,  391 => 132,  380 => 129,  376 => 128,  371 => 126,  367 => 124,  362 => 123,  351 => 120,  347 => 119,  343 => 118,  340 => 117,  333 => 115,  330 => 114,  327 => 113,  324 => 112,  314 => 110,  311 => 109,  306 => 108,  304 => 107,  298 => 106,  294 => 104,  282 => 102,  280 => 101,  276 => 99,  272 => 98,  266 => 95,  263 => 94,  261 => 93,  253 => 88,  245 => 82,  243 => 81,  240 => 80,  232 => 74,  227 => 71,  220 => 69,  216 => 67,  209 => 65,  205 => 63,  194 => 61,  190 => 60,  187 => 59,  185 => 58,  178 => 57,  171 => 52,  169 => 51,  166 => 50,  163 => 49,  159 => 48,  156 => 47,  154 => 46,  147 => 45,  140 => 40,  138 => 39,  135 => 38,  132 => 37,  128 => 36,  124 => 34,  122 => 33,  115 => 29,  108 => 24,  106 => 23,  103 => 22,  97 => 20,  94 => 19,  88 => 17,  85 => 16,  79 => 14,  76 => 13,  70 => 11,  67 => 10,  61 => 8,  58 => 7,  52 => 5,  50 => 4,  44 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "so-buyshop/template/extension/module/so_tools/layout.twig", "/opt/lampp/htdocs/protidin/catalog/view/theme/so-buyshop/template/extension/module/so_tools/layout.twig");
    }
}
