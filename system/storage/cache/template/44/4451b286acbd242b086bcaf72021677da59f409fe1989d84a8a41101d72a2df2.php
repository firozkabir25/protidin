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

/* so-buyshop/template/extension/module/so_tools/infocart.twig */
class __TwigTemplate_144dd7f40a604f550371080986a56a222222f7693a4b16f14f70defa2a55df43 extends \Twig\Template
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
        echo "<div class=\"popup popup-mycart popup-hidden\" id=\"popup-mycart\">
\t<div class=\"popup-screen\">
\t\t<div class=\"popup-position\">
\t\t\t<div class=\"popup-container popup-small\">
\t\t\t\t<div class=\"popup-html\">
\t\t\t\t\t<div class=\"popup-header\">
\t\t\t\t\t\t<span><i class=\"fa fa-shopping-cart\"></i>";
        // line 7
        echo ($context["text_shopping_cart"] ?? null);
        echo "</span>
\t\t\t\t\t\t<a class=\"popup-close\" data-target=\"popup-close\" data-popup-close=\"#popup-mycart\"><i class=\"fa fa-times\"></i></a>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"popup-content\">
\t\t\t\t\t\t<div class=\"cart-header\">
\t\t\t\t\t\t\t";
        // line 12
        if ((($context["products"] ?? null) || ($context["vouchers"] ?? null))) {
            // line 13
            echo "\t\t\t\t\t\t\t\t<div class=\"notification gray\">
\t\t\t\t\t\t\t\t\t<p>";
            // line 14
            echo ($context["text_items_product"] ?? null);
            echo "</p>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<table class=\"table table-striped\">
\t\t\t\t\t\t\t\t\t";
            // line 17
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 18
                echo "\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t  \t\t\t<td class=\"text-left first\">
\t\t\t\t\t\t\t\t  \t\t\t\t";
                // line 20
                if (twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 20)) {
                    // line 21
                    echo "\t\t\t\t\t\t\t\t    \t\t\t\t<a href=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 21);
                    echo "\"><img class=\"img-thumbnail lazyload\" data-sizes=\"auto\" src=\"data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==\" data-src=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 21);
                    echo "\" alt=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 21);
                    echo "\" title=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 21);
                    echo "\" /></a>
\t\t\t\t\t\t\t\t    \t\t\t";
                }
                // line 23
                echo "\t\t\t\t\t\t\t\t    \t\t</td>
\t\t\t\t\t\t\t\t  \t\t\t<td class=\"text-left\">
\t\t\t\t\t\t\t\t  \t\t\t\t<a href=\"";
                // line 25
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 25);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 25);
                echo "</a>
\t\t\t\t\t\t\t\t    \t\t\t";
                // line 26
                if (twig_get_attribute($this->env, $this->source, $context["product"], "option", [], "any", false, false, false, 26)) {
                    // line 27
                    echo "\t\t\t\t\t\t\t\t    \t\t\t\t";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["product"], "option", [], "any", false, false, false, 27));
                    foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
                        // line 28
                        echo "\t\t\t\t\t\t\t\t    \t\t\t\t\t<br />
\t\t\t\t\t\t\t\t    \t\t\t\t\t- <small>";
                        // line 29
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 29);
                        echo " ";
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 29);
                        echo "</small>
\t\t\t\t\t\t\t\t    \t\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 31
                    echo "\t\t\t\t\t\t\t\t    \t\t\t";
                }
                // line 32
                echo "\t\t\t\t\t\t\t\t    \t\t\t";
                if (twig_get_attribute($this->env, $this->source, $context["product"], "recurring", [], "any", false, false, false, 32)) {
                    // line 33
                    echo "\t\t\t\t\t\t\t\t    \t\t\t\t<br />
\t\t\t\t\t\t\t\t    \t\t\t\t- <small>";
                    // line 34
                    echo ($context["text_recurring"] ?? null);
                    echo " ";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "recurring", [], "any", false, false, false, 34);
                    echo "</small>
\t\t\t\t\t\t\t\t    \t\t\t";
                }
                // line 36
                echo "\t\t\t\t\t\t\t\t    \t\t</td>
\t\t\t\t\t\t\t\t  \t\t\t<td class=\"text-right\">x ";
                // line 37
                echo twig_get_attribute($this->env, $this->source, $context["product"], "quantity", [], "any", false, false, false, 37);
                echo "</td>
\t\t\t\t\t\t\t\t  \t\t\t<td class=\"text-right total-price\">";
                // line 38
                echo twig_get_attribute($this->env, $this->source, $context["product"], "total", [], "any", false, false, false, 38);
                echo "</td>
\t\t\t\t\t\t\t\t  \t\t\t<td class=\"text-right last\"><a href=\"javascript:;\" onclick=\"cart.remove('";
                // line 39
                echo twig_get_attribute($this->env, $this->source, $context["product"], "cart_id", [], "any", false, false, false, 39);
                echo "');\" title=\"";
                echo ($context["button_remove"] ?? null);
                echo "\"><i class=\"fa fa-trash\"></i></a></td>
\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 42
            echo "\t\t\t\t\t\t\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["vouchers"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["voucher"]) {
                // line 43
                echo "\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t  \t\t\t<td class=\"text-left first\"></td>
\t\t\t\t\t\t\t\t  \t\t\t<td class=\"text-left\">";
                // line 45
                echo twig_get_attribute($this->env, $this->source, $context["voucher"], "description", [], "any", false, false, false, 45);
                echo "</td>
\t\t\t\t\t\t\t\t  \t\t\t<td class=\"text-right\">x&nbsp;1</td>
\t\t\t\t\t\t\t\t  \t\t\t<td class=\"text-right\">";
                // line 47
                echo twig_get_attribute($this->env, $this->source, $context["voucher"], "amount", [], "any", false, false, false, 47);
                echo "</td>
\t\t\t\t\t\t\t\t  \t\t\t<td class=\"text-right last\"><a href=\"javascript:;\" onclick=\"voucher.remove('";
                // line 48
                echo twig_get_attribute($this->env, $this->source, $context["voucher"], "key", [], "any", false, false, false, 48);
                echo "');\" title=\"";
                echo ($context["button_remove"] ?? null);
                echo "\"><i class=\"fa fa-trash\"></i></a></td>
\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['voucher'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 51
            echo "\t\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t\t<div class=\"cart-bottom\">
\t\t\t\t\t\t\t\t\t<table class=\"table table-striped\">
\t\t\t\t\t\t\t\t  \t\t";
            // line 54
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["totals"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["total"]) {
                // line 55
                echo "\t\t\t\t\t\t\t\t  \t\t\t<tr>
\t\t\t\t\t\t\t\t    \t\t\t<td class=\"text-left\"><strong>";
                // line 56
                echo twig_get_attribute($this->env, $this->source, $context["total"], "title", [], "any", false, false, false, 56);
                echo "</strong></td>
\t\t\t\t\t\t\t\t    \t\t\t<td class=\"text-right\">";
                // line 57
                echo twig_get_attribute($this->env, $this->source, $context["total"], "text", [], "any", false, false, false, 57);
                echo "</td>
\t\t\t\t\t\t\t\t  \t\t\t</tr>
\t\t\t\t\t\t\t\t  \t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['total'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 60
            echo "\t\t\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t\t\t<p class=\"text-center\">
\t\t\t\t\t\t\t\t\t\t<a href=\"";
            // line 62
            echo ($context["cart"] ?? null);
            echo "\" class=\"btn btn-view-cart\"><strong>";
            echo ($context["text_cart"] ?? null);
            echo "</strong></a>
\t\t\t\t\t\t\t\t\t\t<a href=\"";
            // line 63
            echo ($context["checkout"] ?? null);
            echo "\" class=\"btn btn-checkout\"><strong>";
            echo ($context["text_checkout"] ?? null);
            echo "</strong></a>
\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
        } else {
            // line 67
            echo "\t\t\t\t\t\t\t\t<div class=\"notification gray\">
\t\t\t\t\t\t\t\t\t<i class=\"fa fa-shopping-cart info-icon\"></i>
\t\t\t\t\t\t\t\t\t<p>";
            // line 69
            echo ($context["text_empty"] ?? null);
            echo "</p>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
        }
        // line 72
        echo "\t\t\t\t\t\t</div>
\t\t\t\t\t</div>\t\t\t
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
</div>";
    }

    public function getTemplateName()
    {
        return "so-buyshop/template/extension/module/so_tools/infocart.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  237 => 72,  231 => 69,  227 => 67,  218 => 63,  212 => 62,  208 => 60,  199 => 57,  195 => 56,  192 => 55,  188 => 54,  183 => 51,  172 => 48,  168 => 47,  163 => 45,  159 => 43,  154 => 42,  143 => 39,  139 => 38,  135 => 37,  132 => 36,  125 => 34,  122 => 33,  119 => 32,  116 => 31,  106 => 29,  103 => 28,  98 => 27,  96 => 26,  90 => 25,  86 => 23,  74 => 21,  72 => 20,  68 => 18,  64 => 17,  58 => 14,  55 => 13,  53 => 12,  45 => 7,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "so-buyshop/template/extension/module/so_tools/infocart.twig", "/home/azhkhn/public_html/protidin.com.bd/catalog/view/theme/so-buyshop/template/extension/module/so_tools/infocart.twig");
    }
}
