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

/* default/template/extension/module/so_onepagecheckout/checkout/register.twig */
class __TwigTemplate_bb936079dfa24da36086fcc88021402f8c1986b36b479df1d2b4cda86db0c552 extends \Twig\Template
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
        echo "<div class=\"checkout-content checkout-register\">
    <fieldset id=\"account\">
        <h2 class=\"secondary-title\"><i class=\"fa fa-user-plus\"></i>";
        // line 3
        echo ($context["text_your_details"] ?? null);
        echo "</h2>
        <div class=\"payment-new box-inner\">
            <div class=\"form-group customer-group\" style=\"display: ";
        // line 5
        echo (((twig_length_filter($this->env, ($context["customer_groups"] ?? null)) > 1)) ? ("block") : ("none"));
        echo "\">
                <label class=\"control-label\">";
        // line 6
        echo ($context["entry_customer_group"] ?? null);
        echo "</label>
                ";
        // line 7
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["customer_groups"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["customer_group"]) {
            // line 8
            echo "                    ";
            if ((twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 8) == ($context["customer_group_id"] ?? null))) {
                // line 9
                echo "                        <div class=\"radio\">
                            <label>
                                <input type=\"radio\" name=\"customer_group_id\" value=\"";
                // line 11
                echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 11);
                echo "\" checked=\"checked\"/>
                                ";
                // line 12
                echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "name", [], "any", false, false, false, 12);
                echo "
                            </label>
                        </div>
                    ";
            } else {
                // line 16
                echo "                        <div class=\"radio\">
                            <label>
                                <input type=\"radio\" name=\"customer_group_id\" value=\"";
                // line 18
                echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 18);
                echo "\"/>
                                ";
                // line 19
                echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "name", [], "any", false, false, false, 19);
                echo "
                            </label>
                        </div>
                    ";
            }
            // line 23
            echo "                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['customer_group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 24
        echo "            </div>
            <div class=\"form-group input-firstname required\" style=\"width: 49%; float: left;\">
                <input type=\"text\" name=\"firstname\" value=\"";
        // line 26
        echo twig_get_attribute($this->env, $this->source, ($context["SoUtils"] ?? null), "getProperty", [0 => ($context["order_data"] ?? null), 1 => "firstname"], "method", false, false, false, 26);
        echo "\" placeholder=\"";
        echo ($context["entry_firstname"] ?? null);
        echo " *\" id=\"input-payment-firstname\" class=\"form-control\"/>
            </div>
            <div class=\"form-group input-lastname required\" style=\"width: 49%; float: right;\">
                <input type=\"text\" name=\"lastname\" value=\"";
        // line 29
        echo twig_get_attribute($this->env, $this->source, ($context["SoUtils"] ?? null), "getProperty", [0 => ($context["order_data"] ?? null), 1 => "lastname"], "method", false, false, false, 29);
        echo "\" placeholder=\"";
        echo ($context["entry_lastname"] ?? null);
        echo " *\" id=\"input-payment-lastname\" class=\"form-control\"/>
            </div>
            <div class=\"form-group required\">
                <input type=\"text\" name=\"email\" value=\"";
        // line 32
        echo twig_get_attribute($this->env, $this->source, ($context["SoUtils"] ?? null), "getProperty", [0 => ($context["order_data"] ?? null), 1 => "email"], "method", false, false, false, 32);
        echo "\" placeholder=\"";
        echo ($context["entry_email"] ?? null);
        echo " *\" id=\"input-payment-email\" class=\"form-control\"/>
            </div>
            <div class=\"form-group required\">
                <input type=\"text\" name=\"telephone\" value=\"";
        // line 35
        echo twig_get_attribute($this->env, $this->source, ($context["SoUtils"] ?? null), "getProperty", [0 => ($context["order_data"] ?? null), 1 => "telephone"], "method", false, false, false, 35);
        echo "\" placeholder=\"";
        echo ($context["entry_telephone"] ?? null);
        echo " *\" id=\"input-payment-telephone\" class=\"form-control\"/>
            </div>
            <div class=\"form-group fax-input\">
                <input type=\"text\" name=\"fax\" value=\"";
        // line 38
        echo twig_get_attribute($this->env, $this->source, ($context["SoUtils"] ?? null), "getProperty", [0 => ($context["order_data"] ?? null), 1 => "fax"], "method", false, false, false, 38);
        echo "\" placeholder=\"";
        echo ($context["entry_fax"] ?? null);
        echo "\" id=\"input-payment-fax\" class=\"form-control\"/>
            </div>
            ";
        // line 40
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["custom_fields"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["custom_field"]) {
            // line 41
            echo "                ";
            if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 41) == "account")) {
                // line 42
                echo "                    ";
                if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 42) == "select")) {
                    // line 43
                    echo "                        <div id=\"payment-custom-field";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 43);
                    echo "\" class=\"form-group ";
                    echo ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "required", [], "any", false, false, false, 43)) ? (" required") : (""));
                    echo " custom-field\" data-sort=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "sort_order", [], "any", false, false, false, 43);
                    echo "\">
                            <label class=\"control-label\" for=\"input-payment-custom-field";
                    // line 44
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 44);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 44);
                    echo "</label>
                            <select
                                name=\"custom_field[";
                    // line 46
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 46);
                    echo "]\"
                                id=\"input-payment-custom-field";
                    // line 47
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 47);
                    echo "\"
                                class=\"form-control\">
                                <option value=\"\">";
                    // line 49
                    echo ($context["text_select"] ?? null);
                    echo "</option>
                                ";
                    // line 50
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_value", [], "any", false, false, false, 50));
                    foreach ($context['_seq'] as $context["_key"] => $context["custom_field_value"]) {
                        // line 51
                        echo "                                    <option value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 51);
                        echo "\">";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "name", [], "any", false, false, false, 51);
                        echo "</option>
                                ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 53
                    echo "                            </select>
                        </div>
                    ";
                }
                // line 56
                echo "
                    ";
                // line 57
                if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 57) == "radio")) {
                    // line 58
                    echo "                        <div id=\"payment-custom-field";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 58);
                    echo "\" class=\"form-group ";
                    echo ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "required", [], "any", false, false, false, 58)) ? (" required") : (""));
                    echo " custom-field\" data-sort=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "sort_order", [], "any", false, false, false, 58);
                    echo "\">
                            <label class=\"control-label\">";
                    // line 59
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 59);
                    echo "</label>
                            <div id=\"input-payment-custom-field";
                    // line 60
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 60);
                    echo "\">
                                ";
                    // line 61
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_value", [], "any", false, false, false, 61));
                    foreach ($context['_seq'] as $context["_key"] => $context["custom_field_value"]) {
                        // line 62
                        echo "                                    <div class=\"radio\">
                                        <label>
                                            <input type=\"radio\" name=\"custom_field[";
                        // line 64
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 64);
                        echo "]\" value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 64);
                        echo "\"/>
                                            ";
                        // line 65
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "name", [], "any", false, false, false, 65);
                        echo "
                                        </label>
                                    </div>
                                ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 69
                    echo "                            </div>
                        </div>
                    ";
                }
                // line 72
                echo "
                    ";
                // line 73
                if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 73) == "checkbox")) {
                    // line 74
                    echo "                        <div id=\"payment-custom-field";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 74);
                    echo "\" class=\"form-group ";
                    echo ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "required", [], "any", false, false, false, 74)) ? (" required") : (""));
                    echo " custom-field\" data-sort=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "sort_order", [], "any", false, false, false, 74);
                    echo "\">
                            <label class=\"control-label\">";
                    // line 75
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 75);
                    echo "</label>
                            <div id=\"input-payment-custom-field";
                    // line 76
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 76);
                    echo "\">
                                ";
                    // line 77
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_value", [], "any", false, false, false, 77));
                    foreach ($context['_seq'] as $context["_key"] => $context["custom_field_value"]) {
                        // line 78
                        echo "                                    <div class=\"checkbox\">
                                        <label>
                                            <input type=\"checkbox\" name=\"custom_field[";
                        // line 80
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 80);
                        echo "][]\" value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 80);
                        echo "\"/>
                                            ";
                        // line 81
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "name", [], "any", false, false, false, 81);
                        echo "
                                        </label>
                                    </div>
                                ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 85
                    echo "                            </div>
                        </div>
                    ";
                }
                // line 88
                echo "
                    ";
                // line 89
                if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 89) == "text")) {
                    // line 90
                    echo "                        <div id=\"payment-custom-field";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 90);
                    echo "\" class=\"form-group ";
                    echo ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "required", [], "any", false, false, false, 90)) ? (" required") : (""));
                    echo " custom-field\" data-sort=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "sort_order", [], "any", false, false, false, 90);
                    echo "\">
                            <label class=\"control-label\" for=\"input-payment-custom-field";
                    // line 91
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 91);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 91);
                    echo "</label>
                            <input type=\"text\"
                                name=\"custom_field[";
                    // line 93
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 93);
                    echo "]\"
                                value=\"";
                    // line 94
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 94);
                    echo "\"
                                placeholder=\"";
                    // line 95
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 95);
                    echo "\"
                                id=\"input-payment-custom-field";
                    // line 96
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 96);
                    echo "\"
                                class=\"form-control\"/>
                        </div>
                    ";
                }
                // line 100
                echo "
                    ";
                // line 101
                if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 101) == "textarea")) {
                    // line 102
                    echo "                        <div id=\"payment-custom-field";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 102);
                    echo "\" class=\"form-group ";
                    echo ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "required", [], "any", false, false, false, 102)) ? (" required") : (""));
                    echo " custom-field\" data-sort=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "sort_order", [], "any", false, false, false, 102);
                    echo "\">
                            <label class=\"control-label\" for=\"input-payment-custom-field";
                    // line 103
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 103);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 103);
                    echo "</label>
                            <textarea
                                name=\"custom_field[";
                    // line 105
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 105);
                    echo "]\"
                                rows=\"5\" placeholder=\"";
                    // line 106
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 106);
                    echo "\"
                                id=\"input-payment-custom-field";
                    // line 107
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 107);
                    echo "\"
                                class=\"form-control\">";
                    // line 108
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 108);
                    echo "</textarea>
                        </div>
                    ";
                }
                // line 111
                echo "
                    ";
                // line 112
                if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 112) == "file")) {
                    // line 113
                    echo "                        <div id=\"payment-custom-field";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 113);
                    echo "\" class=\"form-group ";
                    echo ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "required", [], "any", false, false, false, 113)) ? (" required") : (""));
                    echo " custom-field\" data-sort=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "sort_order", [], "any", false, false, false, 113);
                    echo "\">
                            <label class=\"control-label\">";
                    // line 114
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 114);
                    echo "</label>
                            <br/>
                            <button type=\"button\"
                                id=\"button-payment-custom-field";
                    // line 117
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 117);
                    echo "\"
                                data-loading-text=\"";
                    // line 118
                    echo ($context["text_loading"] ?? null);
                    echo "\" class=\"btn btn-default\"><i
                                class=\"fa fa-upload\"></i> ";
                    // line 119
                    echo ($context["button_upload"] ?? null);
                    echo "</button>
                            <input type=\"hidden\"
                                name=\"custom_field[";
                    // line 121
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 121);
                    echo "]\"
                                value=\"\"
                                id=\"input-payment-custom-field";
                    // line 123
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 123);
                    echo "\"/>
                        </div>
                    ";
                }
                // line 126
                echo "
                    ";
                // line 127
                if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 127) == "date")) {
                    // line 128
                    echo "                        <div id=\"payment-custom-field";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 128);
                    echo "\" class=\"form-group ";
                    echo ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "required", [], "any", false, false, false, 128)) ? (" required") : (""));
                    echo " custom-field\" data-sort=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "sort_order", [], "any", false, false, false, 128);
                    echo "\">
                            <label class=\"control-label\" for=\"input-payment-custom-field";
                    // line 129
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 129);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 129);
                    echo "</label>
                            <div class=\"input-group date\">
                                <input type=\"text\"
                                    name=\"custom_field[";
                    // line 132
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 132);
                    echo "]\"
                                    value=\"";
                    // line 133
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 133);
                    echo "\"
                                    placeholder=\"";
                    // line 134
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 134);
                    echo "\" data-date-format=\"YYYY-MM-DD\"
                                    id=\"input-payment-custom-field";
                    // line 135
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 135);
                    echo "\"
                                    class=\"form-control\"/>
                                <span class=\"input-group-btn\">
                                    <button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button>
                                </span>
                            </div>
                        </div>
                    ";
                }
                // line 143
                echo "
                    ";
                // line 144
                if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 144) == "time")) {
                    // line 145
                    echo "                        <div id=\"payment-custom-field";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 145);
                    echo "\" class=\"form-group ";
                    echo ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "required", [], "any", false, false, false, 145)) ? (" required") : (""));
                    echo " custom-field\" data-sort=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "sort_order", [], "any", false, false, false, 145);
                    echo "\">
                            <label class=\"control-label\" for=\"input-payment-custom-field";
                    // line 146
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 146);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 146);
                    echo "</label>
                            <div class=\"input-group time\">
                                <input type=\"text\"
                                    name=\"custom_field[";
                    // line 149
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 149);
                    echo "]\"
                                    value=\"";
                    // line 150
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 150);
                    echo "\"
                                    placeholder=\"";
                    // line 151
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 151);
                    echo "\" data-date-format=\"HH:mm\"
                                    id=\"input-payment-custom-field";
                    // line 152
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 152);
                    echo "\"
                                    class=\"form-control\"/>
                                <span class=\"input-group-btn\">
                                    <button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button>
                                </span>
                            </div>
                        </div>
                    ";
                }
                // line 160
                echo "
                    ";
                // line 161
                if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 161) == "datetime")) {
                    // line 162
                    echo "                        <div id=\"payment-custom-field";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 162);
                    echo "\" class=\"form-group ";
                    echo ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "required", [], "any", false, false, false, 162)) ? (" required") : (""));
                    echo " custom-field\" data-sort=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "sort_order", [], "any", false, false, false, 162);
                    echo "\">
                            <label class=\"control-label\" for=\"input-payment-custom-field";
                    // line 163
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 163);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 163);
                    echo "</label>
                            <div class=\"input-group datetime\">
                                <input type=\"text\"
                                    name=\"custom_field[";
                    // line 166
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 166);
                    echo "]\"
                                    value=\"";
                    // line 167
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 167);
                    echo "\"
                                    placeholder=\"";
                    // line 168
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 168);
                    echo "\"
                                    data-date-format=\"YYYY-MM-DD HH:mm\"
                                    id=\"input-payment-custom-field";
                    // line 170
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 170);
                    echo "\"
                                    class=\"form-control\"/>
                                <span class=\"input-group-btn\">
                                    <button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button>
                                </span>
                            </div>
                        </div>
                    ";
                }
                // line 178
                echo "                ";
            }
            // line 179
            echo "            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 180
        echo "        </div>
    </fieldset>
    <fieldset id=\"password\" style=\"display: ";
        // line 182
        echo (((twig_get_attribute($this->env, $this->source, ($context["setting_so_onepagecheckout_layout_setting"] ?? null), "so_onepagecheckout_account_open", [], "any", false, false, false, 182) == "register")) ? ("block") : ("none"));
        echo "\">
        ";
        // line 183
        if ((twig_get_attribute($this->env, $this->source, ($context["setting_so_onepagecheckout_general"] ?? null), "so_onepagecheckout_layout", [], "any", false, false, false, 183) != 2)) {
            // line 184
            echo "            <h2 class=\"secondary-title\"><i class=\"fa fa-lock\"></i>";
            echo ($context["text_your_password"] ?? null);
            echo "</h2>
        ";
        }
        // line 186
        echo "        <div class=\"box-inner\">
            <div class=\"form-group required\">
                <input type=\"password\" name=\"password\" value=\"";
        // line 188
        echo twig_get_attribute($this->env, $this->source, ($context["SoUtils"] ?? null), "getProperty", [0 => ($context["order_data"] ?? null), 1 => "password"], "method", false, false, false, 188);
        echo "\" placeholder=\"";
        echo ($context["entry_password"] ?? null);
        echo " *\" id=\"input-payment-password\" class=\"form-control\"/>
            </div>
            <div class=\"form-group required\">
                <input type=\"password\" name=\"confirm\" value=\"";
        // line 191
        echo twig_get_attribute($this->env, $this->source, ($context["SoUtils"] ?? null), "getProperty", [0 => ($context["order_data"] ?? null), 1 => "confirm"], "method", false, false, false, 191);
        echo "\" placeholder=\"";
        echo ($context["entry_confirm"] ?? null);
        echo " *\" id=\"input-payment-confirm\" class=\"form-control\"/>
            </div>
        </div>
    </fieldset>
    <fieldset id=\"address\">
        <h2 class=\"secondary-title\"><i class=\"fa fa-map-marker\"></i>";
        // line 196
        echo ($context["text_your_address"] ?? null);
        echo "</h2>
        ";
        // line 197
        echo ($context["payment_address_form"] ?? null);
        echo "
    </fieldset>
    
    ";
        // line 200
        if (($context["is_shipping_required"] ?? null)) {
            // line 201
            echo "        <div class=\"checkbox\">
            <label>
                ";
            // line 203
            if ((($context["shipping_address"] ?? null) == "1")) {
                // line 204
                echo "                    <input type=\"checkbox\" name=\"shipping_address\" value=\"1\" checked=\"checked\" />
                ";
            } else {
                // line 206
                echo "                    <input type=\"checkbox\" name=\"shipping_address\" value=\"0\" />
                ";
            }
            // line 208
            echo "                ";
            echo ($context["entry_shipping"] ?? null);
            echo "
            </label>
        </div>
        <fieldset id=\"shipping-address\" style=\"display: ";
            // line 211
            echo (((($context["shipping_address"] ?? null) == "1")) ? ("none") : ("block"));
            echo "\">
            <h2 class=\"secondary-title\"><i class=\"fa fa-map-marker\"></i>";
            // line 212
            echo ($context["text_shipping_address"] ?? null);
            echo "</h2>
            ";
            // line 213
            echo ($context["shipping_address_form"] ?? null);
            echo "
        </fieldset>
    ";
        }
        // line 216
        echo "
    <script type=\"text/javascript\">
        if (\$('.so-onepagecheckout .date').length) {
            \$('.so-onepagecheckout .date').datetimepicker({pickTime: false});
        }
        if (\$('.so-onepagecheckout .time').length) {
            \$('.so-onepagecheckout .time').datetimepicker({pickDate: false});
        }
        if (\$('.so-onepagecheckout .datetime').length) {
            \$('.so-onepagecheckout .datetime').datetimepicker({pickDate: true, pickTime: true});
        }

        ";
        // line 228
        if ((twig_length_filter($this->env, ($context["customer_groups"] ?? null)) > 1)) {
            // line 229
            echo "            \$(document).delegate('input[name=\"customer_group_id\"]', 'change', function () {
                \$(document).trigger('so_checkout_customer_group_changed', this.value);
            });
        ";
        }
        // line 233
        echo "
        \$('#account .form-group[data-sort]').detach().each(function() {
            if (\$(this).attr('data-sort') >= 0 && \$(this).attr('data-sort') <= \$('#account .form-group').length) {
                \$('#account .form-group').eq(\$(this).attr('data-sort')).before(this);
            }

            if (\$(this).attr('data-sort') > \$('#account .form-group').length) {
                \$('#account .form-group:last').after(this);
            }

            if (\$(this).attr('data-sort') < -\$('#account .form-group').length) {
                \$('#account .form-group:first').before(this);
            }
        });
    </script>
</div>";
    }

    public function getTemplateName()
    {
        return "default/template/extension/module/so_onepagecheckout/checkout/register.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  676 => 233,  670 => 229,  668 => 228,  654 => 216,  648 => 213,  644 => 212,  640 => 211,  633 => 208,  629 => 206,  625 => 204,  623 => 203,  619 => 201,  617 => 200,  611 => 197,  607 => 196,  597 => 191,  589 => 188,  585 => 186,  579 => 184,  577 => 183,  573 => 182,  569 => 180,  563 => 179,  560 => 178,  549 => 170,  544 => 168,  540 => 167,  536 => 166,  528 => 163,  519 => 162,  517 => 161,  514 => 160,  503 => 152,  499 => 151,  495 => 150,  491 => 149,  483 => 146,  474 => 145,  472 => 144,  469 => 143,  458 => 135,  454 => 134,  450 => 133,  446 => 132,  438 => 129,  429 => 128,  427 => 127,  424 => 126,  418 => 123,  413 => 121,  408 => 119,  404 => 118,  400 => 117,  394 => 114,  385 => 113,  383 => 112,  380 => 111,  374 => 108,  370 => 107,  366 => 106,  362 => 105,  355 => 103,  346 => 102,  344 => 101,  341 => 100,  334 => 96,  330 => 95,  326 => 94,  322 => 93,  315 => 91,  306 => 90,  304 => 89,  301 => 88,  296 => 85,  286 => 81,  280 => 80,  276 => 78,  272 => 77,  268 => 76,  264 => 75,  255 => 74,  253 => 73,  250 => 72,  245 => 69,  235 => 65,  229 => 64,  225 => 62,  221 => 61,  217 => 60,  213 => 59,  204 => 58,  202 => 57,  199 => 56,  194 => 53,  183 => 51,  179 => 50,  175 => 49,  170 => 47,  166 => 46,  159 => 44,  150 => 43,  147 => 42,  144 => 41,  140 => 40,  133 => 38,  125 => 35,  117 => 32,  109 => 29,  101 => 26,  97 => 24,  91 => 23,  84 => 19,  80 => 18,  76 => 16,  69 => 12,  65 => 11,  61 => 9,  58 => 8,  54 => 7,  50 => 6,  46 => 5,  41 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/extension/module/so_onepagecheckout/checkout/register.twig", "/home/azhkhn/public_html/protidin.com.bd/catalog/view/theme/default/template/extension/module/so_onepagecheckout/checkout/register.twig");
    }
}
