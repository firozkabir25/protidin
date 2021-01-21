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

/* default/template/extension/module/so_onepagecheckout/checkout/cart.twig */
class __TwigTemplate_79e3bd1f825386d4b8f4658907553211f9d2ea0ea678710d941a5a6190670998 extends \Twig\Template
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
        echo "<div class=\"checkout-content checkout-cart\">
    <h2 class=\"secondary-title\"><i class=\"fa fa-shopping-cart\"></i>";
        // line 2
        echo ($context["text_shopping_cart"] ?? null);
        echo " ";
        if (($context["weight"] ?? null)) {
            echo " ";
            echo (("(" . ($context["weight"] ?? null)) . ")");
            echo " ";
        }
        echo "</h2>
    <div class=\"box-inner\">
        <div class=\"table-responsive checkout-product\">
            <table class=\"table table-bordered table-hover\">
                <thead>
                    <tr>
                        <th class=\"text-left name\" colspan=\"2\">";
        // line 8
        echo ($context["column_name"] ?? null);
        echo "</th>
                        <th class=\"text-center quantity\">";
        // line 9
        echo ($context["column_quantity"] ?? null);
        echo "</th>
                        <th class=\"text-center price\">";
        // line 10
        echo ($context["column_price"] ?? null);
        echo "</th>
                        <th class=\"text-right total\">";
        // line 11
        echo ($context["column_total"] ?? null);
        echo "</th>
                    </tr>
                </thead>
                <tbody>
                ";
        // line 15
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 16
            echo "                    <tr>
                        <td class=\"text-left name\" colspan=\"2\">
                            ";
            // line 18
            if (twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 18)) {
                // line 19
                echo "                                <a href=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 19);
                echo "\"><img src=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 19);
                echo "\" alt=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 19);
                echo "\" title=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 19);
                echo "\" class=\"img-thumbnail\" /></a>
                            ";
            }
            // line 21
            echo "                            <a href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 21);
            echo "\" class=\"product-name\">";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 21);
            echo "</a>
                            ";
            // line 22
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["product"], "option", [], "any", false, false, false, 22));
            foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
                // line 23
                echo "                                <br/>
                                &nbsp;
                                <small> - ";
                // line 25
                echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 25);
                echo ": ";
                echo twig_get_attribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 25);
                echo "</small>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 27
            echo "                            ";
            if (twig_get_attribute($this->env, $this->source, $context["product"], "recurring", [], "any", false, false, false, 27)) {
                // line 28
                echo "                                <br/>
                                <span class=\"label label-info\">";
                // line 29
                echo ($context["text_recurring_item"] ?? null);
                echo "</span>
                                <small>";
                // line 30
                echo twig_get_attribute($this->env, $this->source, $context["product"], "recurring", [], "any", false, false, false, 30);
                echo "</small>
                            ";
            }
            // line 32
            echo "                        </td>
                        <td class=\"text-left quantity\">
                            <div class=\"input-group\">
                                <input type=\"text\" name=\"quantity[";
            // line 35
            echo twig_get_attribute($this->env, $this->source, $context["product"], "cart_id", [], "any", false, false, false, 35);
            echo "]\" value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "quantity", [], "any", false, false, false, 35);
            echo "\" size=\"1\" class=\"form-control\" />
                                <span class=\"input-group-btn\">
                                    ";
            // line 37
            if (twig_get_attribute($this->env, $this->source, ($context["setting_so_onepagecheckout_layout_setting"] ?? null), "show_product_removecart", [], "any", false, false, false, 37)) {
                // line 38
                echo "                                        <span data-toggle=\"tooltip\" title=\"";
                echo ($context["button_remove"] ?? null);
                echo "\" data-product-key=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "cart_id", [], "any", false, false, false, 38);
                echo "\" class=\"btn-delete\"><i class=\"fa fa-trash-o\"></i></span>
                                    ";
            }
            // line 40
            echo "                                    ";
            if (twig_get_attribute($this->env, $this->source, ($context["setting_so_onepagecheckout_layout_setting"] ?? null), "show_product_qnty_update", [], "any", false, false, false, 40)) {
                // line 41
                echo "                                        <span data-toggle=\"tooltip\" title=\"";
                echo ($context["button_update"] ?? null);
                echo "\" data-product-key=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "cart_id", [], "any", false, false, false, 41);
                echo "\" class=\"btn-update\"><i class=\"fa fa-refresh\"></i></span>
                                    ";
            }
            // line 43
            echo "                                </span>
                            </div>
                        </td>
                        <td class=\"text-right price\">";
            // line 46
            echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 46);
            echo "</td>
                        <td class=\"text-right total\">";
            // line 47
            echo twig_get_attribute($this->env, $this->source, $context["product"], "total", [], "any", false, false, false, 47);
            echo "</td>
                    </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 50
        echo "                ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["vouchers"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["voucher"]) {
            // line 51
            echo "                    <tr>
                        <td class=\"text-left\">";
            // line 52
            echo twig_get_attribute($this->env, $this->source, $context["voucher"], "description", [], "any", false, false, false, 52);
            echo "</td>
                        <td class=\"text-left\"></td>
                        <td class=\"text-right\">1</td>
                        <td class=\"text-right\">";
            // line 55
            echo twig_get_attribute($this->env, $this->source, $context["voucher"], "amount", [], "any", false, false, false, 55);
            echo "</td>
                        <td class=\"text-right\">";
            // line 56
            echo twig_get_attribute($this->env, $this->source, $context["voucher"], "amount", [], "any", false, false, false, 56);
            echo "</td>
                    </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['voucher'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 59
        echo "                </tbody>
                <tfoot>
                ";
        // line 61
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["totals"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["total"]) {
            // line 62
            echo "                    <tr>
                        <td colspan=\"4\" class=\"text-left\">";
            // line 63
            echo twig_get_attribute($this->env, $this->source, $context["total"], "title", [], "any", false, false, false, 63);
            echo ":</td>
                        <td class=\"text-right\">";
            // line 64
            echo twig_get_attribute($this->env, $this->source, $context["total"], "text", [], "any", false, false, false, 64);
            echo "</td>
                    </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['total'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 67
        echo "                </tfoot>
            </table>
        </div>
        <div id=\"payment-confirm-button\" class=\"payment-";
        // line 70
        echo twig_get_attribute($this->env, $this->source, ($context["SoUtils"] ?? null), "getProperty", [0 => ($context["session_data"] ?? null), 1 => "payment_method.code"], "method", false, false, false, 70);
        echo "\">
            <h2 class=\"secondary-title\"><i class=\"fa fa-credit-card\"></i>";
        // line 71
        echo ($context["text_payment_detail"] ?? null);
        echo "</h2>
            ";
        // line 72
        echo ($context["payment"] ?? null);
        echo "
        </div>
    </div>
</div>

";
    }

    public function getTemplateName()
    {
        return "default/template/extension/module/so_onepagecheckout/checkout/cart.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  251 => 72,  247 => 71,  243 => 70,  238 => 67,  229 => 64,  225 => 63,  222 => 62,  218 => 61,  214 => 59,  205 => 56,  201 => 55,  195 => 52,  192 => 51,  187 => 50,  178 => 47,  174 => 46,  169 => 43,  161 => 41,  158 => 40,  150 => 38,  148 => 37,  141 => 35,  136 => 32,  131 => 30,  127 => 29,  124 => 28,  121 => 27,  111 => 25,  107 => 23,  103 => 22,  96 => 21,  84 => 19,  82 => 18,  78 => 16,  74 => 15,  67 => 11,  63 => 10,  59 => 9,  55 => 8,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/extension/module/so_onepagecheckout/checkout/cart.twig", "");
    }
}
