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

/* default/template/extension/module/so_onepagecheckout/checkout/coupon_voucher_reward.twig */
class __TwigTemplate_885fab5cd99c7c110f166614f8ca5aecddf978220aa12cbea7af3d1aa0682c7f extends \Twig\Template
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
        if ((twig_get_attribute($this->env, $this->source, ($context["setting_so_onepagecheckout_general"] ?? null), "so_onepagecheckout_layout", [], "any", false, false, false, 1) == 2)) {
            // line 2
            echo "    <div class=\"panel-group\" id=\"accordion\">
        ";
            // line 3
            if (($context["coupon_status"] ?? null)) {
                // line 4
                echo "        <div class=\"panel panel-default\">
            <div class=\"panel-heading\">
                <h4 class=\"panel-title\">
                    <a href=\"#collapse-coupon\" class=\"accordion-toggle\" data-toggle=\"collapse\" data-parent=\"#accordion\"><i class=\"fa fa-qrcode\"></i> ";
                // line 7
                echo ($context["text_enter_coupon_code"] ?? null);
                echo " <i class=\"fa fa-caret-down\"></i></a>
                </h4>
            </div>
            <div id=\"collapse-coupon\" class=\"panel-collapse collapse\">
                <div class=\"panel-body\">
                    <label class=\"control-label\" for=\"input-coupon\">";
                // line 12
                echo ($context["text_enter_coupon_code"] ?? null);
                echo "</label>
                    <div class=\"input-group\">
                        <input type=\"text\" name=\"coupon\" value=\"";
                // line 14
                echo ($context["coupon"] ?? null);
                echo "\" placeholder=\"";
                echo ($context["text_enter_coupon_code"] ?? null);
                echo "\" id=\"input-coupon\" class=\"form-control\">
                        <span class=\"input-group-btn\">
                            <input type=\"button\" value=\"Apply Coupon\" id=\"button-coupon\" data-loading-text=\"";
                // line 16
                echo ($context["text_loading"] ?? null);
                echo "\" class=\"btn btn-primary\">
                        </span>
                    </div>                    
                </div>
              </div>
        </div>
        ";
            }
            // line 23
            echo "
        ";
            // line 24
            if (($context["voucher_status"] ?? null)) {
                // line 25
                echo "        <div class=\"panel panel-default\">
            <div class=\"panel-heading\">
                <h4 class=\"panel-title\">
                    <a href=\"#collapse-voucher\" class=\"accordion-toggle\" data-toggle=\"collapse\" data-parent=\"#accordion\"><i class=\"fa fa-gift\"></i> ";
                // line 28
                echo ($context["text_enter_voucher_code"] ?? null);
                echo " <i class=\"fa fa-caret-down\"></i></a>
                </h4>
            </div>
            <div id=\"collapse-voucher\" class=\"panel-collapse collapse\">
                <div class=\"panel-body\">
                    <label class=\"control-label\" for=\"input-voucher\">";
                // line 33
                echo ($context["text_enter_voucher_code"] ?? null);
                echo "</label>
                    <div class=\"input-group\">
                        <input type=\"text\" name=\"voucher\" value=\"";
                // line 35
                echo ($context["voucher"] ?? null);
                echo "\" placeholder=\"";
                echo ($context["text_enter_voucher_code"] ?? null);
                echo "\" id=\"input-coupon\" class=\"form-control\">
                        <span class=\"input-group-btn\">
                            <input type=\"button\" value=\"";
                // line 37
                echo ($context["text_apply_voucher"] ?? null);
                echo "\" id=\"button-voucher\" data-loading-text=\"";
                echo ($context["text_loading"] ?? null);
                echo "\" class=\"btn btn-primary\">
                        </span>
                    </div>                    
                </div>
              </div>
        </div>
        ";
            }
            // line 44
            echo "
        ";
            // line 45
            if (($context["reward_status"] ?? null)) {
                // line 46
                echo "        <div class=\"panel panel-default\">
            <div class=\"panel-heading\">
                <h4 class=\"panel-title\">
                    <a href=\"#collapse-reward\" class=\"accordion-toggle\" data-toggle=\"collapse\" data-parent=\"#accordion\"><i class=\"fa fa-gift\"></i> ";
                // line 49
                echo ($context["text_enter_reward_points"] ?? null);
                echo " <i class=\"fa fa-caret-down\"></i></a>
                </h4>
            </div>
            <div id=\"collapse-reward\" class=\"panel-collapse collapse\">
                <div class=\"panel-body\">
                    <label class=\"control-label\" for=\"input-reward\">";
                // line 54
                echo ($context["text_enter_reward_points"] ?? null);
                echo "</label>
                    <div class=\"input-group\">
                        <input type=\"text\" name=\"reward\" value=\"";
                // line 56
                echo ($context["reward"] ?? null);
                echo "\" placeholder=\"";
                echo ($context["text_enter_reward_points"] ?? null);
                echo "\" id=\"input-coupon\" class=\"form-control\">
                        <span class=\"input-group-btn\">
                            <input type=\"button\" value=\"";
                // line 58
                echo ($context["text_apply_points"] ?? null);
                echo "\" id=\"button-reward\" data-loading-text=\"";
                echo ($context["text_loading"] ?? null);
                echo "\" class=\"btn btn-primary\">
                        </span>
                    </div>                    
                </div>
              </div>
        </div>
        ";
            }
            // line 65
            echo "    </div>
";
        } else {
            // line 67
            echo "    <div class=\"checkout-content coupon-voucher\">
        <h2 class=\"secondary-title\"><i class=\"fa fa-gift\"></i>";
            // line 68
            echo ($context["text_coupon_voucher"] ?? null);
            echo "</h2>
        <div class=\"box-inner\">
            ";
            // line 70
            if (($context["coupon_status"] ?? null)) {
                // line 71
                echo "            <div class=\"panel-body checkout-coupon\">
                <label class=\"col-sm-2 control-label\" for=\"input-coupon\">";
                // line 72
                echo ($context["text_enter_coupon_code"] ?? null);
                echo "</label>
                <div class=\"input-group\">
                    <input type=\"text\" name=\"coupon\" value=\"";
                // line 74
                echo ($context["coupon"] ?? null);
                echo "\" placeholder=\"";
                echo ($context["text_enter_coupon_code"] ?? null);
                echo "\" id=\"input-coupon\" class=\"form-control\" />
                    <span class=\"input-group-btn\">
                        <input type=\"button\" value=\"Apply Coupon\" id=\"button-coupon\" data-loading-text=\"";
                // line 76
                echo ($context["text_loading"] ?? null);
                echo "\"  class=\"btn-primary button\" />
                    </span>
                </div>
            </div>
            ";
            }
            // line 81
            echo "
            ";
            // line 82
            if (($context["voucher_status"] ?? null)) {
                // line 83
                echo "            <div class=\"panel-body checkout-voucher\">
                <label class=\"col-sm-2 control-label\" for=\"input-voucher\">";
                // line 84
                echo ($context["text_enter_voucher_code"] ?? null);
                echo "</label>
                <div class=\"input-group\">
                    <input type=\"text\" name=\"voucher\" value=\"";
                // line 86
                echo ($context["voucher"] ?? null);
                echo "\" placeholder=\"";
                echo ($context["text_enter_voucher_code"] ?? null);
                echo "\" id=\"input-voucher\" class=\"form-control\" />
                    <span class=\"input-group-btn\">
                        <input type=\"button\" value=\"";
                // line 88
                echo ($context["text_apply_voucher"] ?? null);
                echo "\" id=\"button-voucher\" data-loading-text=\"";
                echo ($context["text_loading"] ?? null);
                echo "\"  class=\"btn-primary button\" />
                    </span>
                </div>
            </div>
            ";
            }
            // line 93
            echo "
            ";
            // line 94
            if (($context["reward_status"] ?? null)) {
                // line 95
                echo "                <div class=\"panel-body checkout-reward\">
                    <label class=\"col-sm-2 control-label\" for=\"input-reward\">";
                // line 96
                echo ($context["text_enter_reward_points"] ?? null);
                echo "</label>
                    <div class=\"input-group\">
                        <input type=\"text\" name=\"reward\" value=\"";
                // line 98
                echo ($context["reward"] ?? null);
                echo "\" placeholder=\"";
                echo ($context["text_enter_reward_points"] ?? null);
                echo "\" id=\"input-reward\" class=\"form-control\" />
                        <span class=\"input-group-btn\">
                            <input type=\"button\" value=\"";
                // line 100
                echo ($context["text_apply_points"] ?? null);
                echo "\" id=\"button-reward\" data-loading-text=\"";
                echo ($context["text_loading"] ?? null);
                echo "\"  class=\"btn-primary button\" />
                        </span>
                    </div>
                </div>
            ";
            }
            // line 105
            echo "        </div>
    </div>
";
        }
    }

    public function getTemplateName()
    {
        return "default/template/extension/module/so_onepagecheckout/checkout/coupon_voucher_reward.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  260 => 105,  250 => 100,  243 => 98,  238 => 96,  235 => 95,  233 => 94,  230 => 93,  220 => 88,  213 => 86,  208 => 84,  205 => 83,  203 => 82,  200 => 81,  192 => 76,  185 => 74,  180 => 72,  177 => 71,  175 => 70,  170 => 68,  167 => 67,  163 => 65,  151 => 58,  144 => 56,  139 => 54,  131 => 49,  126 => 46,  124 => 45,  121 => 44,  109 => 37,  102 => 35,  97 => 33,  89 => 28,  84 => 25,  82 => 24,  79 => 23,  69 => 16,  62 => 14,  57 => 12,  49 => 7,  44 => 4,  42 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/extension/module/so_onepagecheckout/checkout/coupon_voucher_reward.twig", "/home/azhkhn/public_html/protidin.com.bd/catalog/view/theme/default/template/extension/module/so_onepagecheckout/checkout/coupon_voucher_reward.twig");
    }
}
