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

/* so-buyshop/template/common/cart.twig */
class __TwigTemplate_1323b387d09bd72b54058579489f887ed9226a593c4e79aaf5846a1dfb0b7de5 extends \Twig\Template
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
        echo "<div id=\"cart\" class=\"btn-shopping-cart\">
  

   <a data-loading-text=\"";
        // line 4
        echo ($context["text_loading"] ?? null);
        echo " \" class=\"btn-group top_cart dropdown-toggle\" data-toggle=\"dropdown\">
    <div class=\"shopcart\">
      <span class=\"icon-c\">
        <i class=\"fa fa-shopping-cart\"></i>
      </span>
      <div class=\"shopcart-inner\">
        <p class=\"text-shopping-cart\">

         ";
        // line 12
        echo ($context["text_shop_cart"] ?? null);
        echo "
        </p>
   
        <span class=\"total-shopping-cart cart-total-full\">
          ";
        // line 16
        echo ($context["text_items"] ?? null);
        echo "
        </span>
      </div>
    </div>
  </a>
  
  <ul class=\"dropdown-menu pull-right shoppingcart-box\">
    ";
        // line 23
        if ((($context["products"] ?? null) || ($context["vouchers"] ?? null))) {
            // line 24
            echo "    <li class=\"content-item\">
      <table class=\"table table-striped\" style=\"margin-bottom:10px;\">
        ";
            // line 26
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 27
                echo "        <tr>
          <td class=\"text-center size-img-cart\">";
                // line 28
                if (twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 28)) {
                    echo " <a href=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 28);
                    echo "\"><img class=\"img-thumbnail lazyload\" data-sizes=\"auto\" src=\"data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==\" data-src=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 28);
                    echo "\" alt=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 28);
                    echo "\" title=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 28);
                    echo "\"  /></a> ";
                }
                echo "</td>
          <td class=\"text-left\"><a href=\"";
                // line 29
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 29);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 29);
                echo "</a> ";
                if (twig_get_attribute($this->env, $this->source, $context["product"], "option", [], "any", false, false, false, 29)) {
                    // line 30
                    echo "            ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["product"], "option", [], "any", false, false, false, 30));
                    foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
                        echo " <br />
            - <small>";
                        // line 31
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 31);
                        echo " ";
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 31);
                        echo "</small> ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 32
                    echo "            ";
                }
                // line 33
                echo "            ";
                if (twig_get_attribute($this->env, $this->source, $context["product"], "recurring", [], "any", false, false, false, 33)) {
                    echo " <br />
            - <small>";
                    // line 34
                    echo ($context["text_recurring"] ?? null);
                    echo " ";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "recurring", [], "any", false, false, false, 34);
                    echo "</small> ";
                }
                echo "</td>
          <td class=\"text-right\">x ";
                // line 35
                echo twig_get_attribute($this->env, $this->source, $context["product"], "quantity", [], "any", false, false, false, 35);
                echo "</td>
          <td class=\"text-right\">";
                // line 36
                echo twig_get_attribute($this->env, $this->source, $context["product"], "total", [], "any", false, false, false, 36);
                echo "</td>
          <td class=\"text-center\"><button type=\"button\" onclick=\"cart.remove('";
                // line 37
                echo twig_get_attribute($this->env, $this->source, $context["product"], "cart_id", [], "any", false, false, false, 37);
                echo "');\" title=\"";
                echo ($context["button_remove"] ?? null);
                echo "\" class=\"btn btn-danger btn-xs\"><i class=\"fa fa-trash-o\"></i></button></td>
        </tr>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 40
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["vouchers"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["voucher"]) {
                // line 41
                echo "        <tr>
          <td class=\"text-center\"></td>
          <td class=\"text-left\">";
                // line 43
                echo twig_get_attribute($this->env, $this->source, $context["voucher"], "description", [], "any", false, false, false, 43);
                echo "</td>
          <td class=\"text-right\">x&nbsp;1</td>
          <td class=\"text-right\">";
                // line 45
                echo twig_get_attribute($this->env, $this->source, $context["voucher"], "amount", [], "any", false, false, false, 45);
                echo "</td>
          <td class=\"text-center text-danger\"><button type=\"button\" onclick=\"voucher.remove('";
                // line 46
                echo twig_get_attribute($this->env, $this->source, $context["voucher"], "key", [], "any", false, false, false, 46);
                echo "');\" title=\"";
                echo ($context["button_remove"] ?? null);
                echo "\" class=\"btn btn-danger btn-xs\"><i class=\"fa fa-times\"></i></button></td>
        </tr>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['voucher'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 49
            echo "      </table>
    </li>
  
\t<li>
\t\t<div class=\"checkout clearfix\">
\t\t<a href=\"";
            // line 54
            echo ($context["cart"] ?? null);
            echo "\" class=\"btn btn-view-cart inverse\"> ";
            echo ($context["text_cart"] ?? null);
            echo "</a>
\t\t<a href=\"";
            // line 55
            echo ($context["checkout"] ?? null);
            echo "\" class=\"btn btn-checkout pull-right\">";
            echo ($context["text_checkout"] ?? null);
            echo "</a>
\t\t</div>
\t</li>
    ";
        } else {
            // line 59
            echo "    <li>
      <p class=\"text-center empty\">";
            // line 60
            echo ($context["text_empty_cart"] ?? null);
            echo "</p>
    </li>
    ";
        }
        // line 63
        echo "  </ul>
</div>
";
    }

    public function getTemplateName()
    {
        return "so-buyshop/template/common/cart.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  214 => 63,  208 => 60,  205 => 59,  196 => 55,  190 => 54,  183 => 49,  172 => 46,  168 => 45,  163 => 43,  159 => 41,  154 => 40,  143 => 37,  139 => 36,  135 => 35,  127 => 34,  122 => 33,  119 => 32,  110 => 31,  103 => 30,  97 => 29,  83 => 28,  80 => 27,  76 => 26,  72 => 24,  70 => 23,  60 => 16,  53 => 12,  42 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "so-buyshop/template/common/cart.twig", "/home/azhkhn/public_html/protidin.com.bd/system/storage/modification/catalog/view/theme/so-buyshop/template/common/cart.twig");
    }
}
