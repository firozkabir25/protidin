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

/* default/template/extension/module/so_onepagecheckout/checkout/address_form.twig */
class __TwigTemplate_c4903a20f4daeff157f93c356f22ed40ad46e4f7b90f595f72da16b8fcd7421b extends \Twig\Template
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
        echo "<div class=\"";
        echo ((($context["is_logged_in"] ?? null)) ? ("checkout-content") : (""));
        echo " checkout-";
        echo ($context["type"] ?? null);
        echo "-form\">
    ";
        // line 2
        if (($context["is_logged_in"] ?? null)) {
            // line 3
            echo "        <h2 class=\"secondary-title\"><i class=\"fa fa-user\"></i>";
            echo (((($context["type"] ?? null) == "payment")) ? ("Billing Address") : ("Delivery Address"));
            echo " </h2>
    ";
        }
        // line 5
        echo "    <div class=\"box-inner\">
        <form class=\"form-horizontal form-";
        // line 6
        echo ($context["type"] ?? null);
        echo "\">
            ";
        // line 7
        if (($context["addresses"] ?? null)) {
            // line 8
            echo "                <div class=\"radio\">
                    <label>
                        <input type=\"radio\" name=\"";
            // line 10
            echo ($context["type"] ?? null);
            echo "_address\" value=\"existing\" checked=\"checked\" />
                        ";
            // line 11
            echo ($context["text_address_existing"] ?? null);
            echo "
                    </label>
                </div>
                <div id=\"";
            // line 14
            echo ($context["type"] ?? null);
            echo "-existing\">
                    <select name=\"";
            // line 15
            echo ($context["type"] ?? null);
            echo "_address_id\" class=\"form-control\">
                        ";
            // line 16
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["addresses"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["address"]) {
                // line 17
                echo "                            ";
                if ((twig_get_attribute($this->env, $this->source, $context["address"], "address_id", [], "any", false, false, false, 17) == ($context["address_id"] ?? null))) {
                    // line 18
                    echo "                                <option value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["address"], "address_id", [], "any", false, false, false, 18);
                    echo "\" selected=\"selected\">";
                    echo twig_get_attribute($this->env, $this->source, $context["address"], "firstname", [], "any", false, false, false, 18);
                    echo " ";
                    echo twig_get_attribute($this->env, $this->source, $context["address"], "lastname", [], "any", false, false, false, 18);
                    echo ", ";
                    echo twig_get_attribute($this->env, $this->source, $context["address"], "address_1", [], "any", false, false, false, 18);
                    echo ", ";
                    echo twig_get_attribute($this->env, $this->source, $context["address"], "city", [], "any", false, false, false, 18);
                    echo ", ";
                    echo twig_get_attribute($this->env, $this->source, $context["address"], "zone", [], "any", false, false, false, 18);
                    echo ", ";
                    echo twig_get_attribute($this->env, $this->source, $context["address"], "country", [], "any", false, false, false, 18);
                    echo "</option>
                            ";
                } else {
                    // line 20
                    echo "                                <option value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["address"], "address_id", [], "any", false, false, false, 20);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["address"], "firstname", [], "any", false, false, false, 20);
                    echo " ";
                    echo twig_get_attribute($this->env, $this->source, $context["address"], "lastname", [], "any", false, false, false, 20);
                    echo ", ";
                    echo twig_get_attribute($this->env, $this->source, $context["address"], "address_1", [], "any", false, false, false, 20);
                    echo ", ";
                    echo twig_get_attribute($this->env, $this->source, $context["address"], "city", [], "any", false, false, false, 20);
                    echo ", ";
                    echo twig_get_attribute($this->env, $this->source, $context["address"], "zone", [], "any", false, false, false, 20);
                    echo ", ";
                    echo twig_get_attribute($this->env, $this->source, $context["address"], "country", [], "any", false, false, false, 20);
                    echo "</option>
                            ";
                }
                // line 22
                echo "                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['address'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 23
            echo "                    </select>
                </div>
                <div class=\"radio\">
                    <label>
                        <input type=\"radio\" name=\"";
            // line 27
            echo ($context["type"] ?? null);
            echo "_address\" value=\"new\"/>
                        ";
            // line 28
            echo ($context["text_address_new"] ?? null);
            echo "
                    </label>
                </div>
            ";
        }
        // line 32
        echo "            <div id=\"";
        echo ($context["type"] ?? null);
        echo "-new\" style=\"display: ";
        echo ((($context["addresses"] ?? null)) ? ("none") : ("block"));
        echo "\">
                ";
        // line 33
        if (($context["name"] ?? null)) {
            // line 34
            echo "                    <div class=\"form-group required\">
                        <input type=\"text\" name=\"";
            // line 35
            echo ($context["type"] ?? null);
            echo "_firstname\" value=\"";
            echo twig_get_attribute($this->env, $this->source, ($context["SoUtils"] ?? null), "getProperty", [0 => ($context["order_data"] ?? null), 1 => (($context["type"] ?? null) . "_firstname")], "method", false, false, false, 35);
            echo " *\" placeholder=\"";
            echo ($context["entry_firstname"] ?? null);
            echo "\" id=\"input-";
            echo ($context["type"] ?? null);
            echo "-firstname\" class=\"form-control\" />
                    </div>
                    <div class=\"form-group required\">
                        <input type=\"text\" name=\"";
            // line 38
            echo ($context["type"] ?? null);
            echo "_lastname\" value=\"";
            echo twig_get_attribute($this->env, $this->source, ($context["SoUtils"] ?? null), "getProperty", [0 => ($context["order_data"] ?? null), 1 => (($context["type"] ?? null) . "_lastname")], "method", false, false, false, 38);
            echo "\" placeholder=\"";
            echo ($context["entry_lastname"] ?? null);
            echo " *\" id=\"input-";
            echo ($context["type"] ?? null);
            echo "-lastname\" class=\"form-control\"/>
                    </div>
                ";
        }
        // line 41
        echo "                <div class=\"form-group company-input\">
                    <input type=\"text\" name=\"";
        // line 42
        echo ($context["type"] ?? null);
        echo "_company\" value=\"";
        echo twig_get_attribute($this->env, $this->source, ($context["SoUtils"] ?? null), "getProperty", [0 => ($context["order_data"] ?? null), 1 => (($context["type"] ?? null) . "_company")], "method", false, false, false, 42);
        echo "\" placeholder=\"";
        echo ($context["entry_company"] ?? null);
        echo "\" id=\"input-";
        echo ($context["type"] ?? null);
        echo "-company\" class=\"form-control\"/>
                </div>
                <div class=\"form-group required\">
                    <input type=\"text\" name=\"";
        // line 45
        echo ($context["type"] ?? null);
        echo "_address_1\" value=\"";
        echo twig_get_attribute($this->env, $this->source, ($context["SoUtils"] ?? null), "getProperty", [0 => ($context["order_data"] ?? null), 1 => (($context["type"] ?? null) . "_address_1")], "method", false, false, false, 45);
        echo "\" placeholder=\"";
        echo ($context["entry_address_1"] ?? null);
        echo " *\" id=\"input-";
        echo ($context["type"] ?? null);
        echo "-address-1\" class=\"form-control\"/>
                </div>
                <div class=\"form-group address-2-input\">
                    <input type=\"text\" name=\"";
        // line 48
        echo ($context["type"] ?? null);
        echo "_address_2\" value=\"";
        echo twig_get_attribute($this->env, $this->source, ($context["SoUtils"] ?? null), "getProperty", [0 => ($context["order_data"] ?? null), 1 => (($context["type"] ?? null) . "_address_2")], "method", false, false, false, 48);
        echo "\" placeholder=\"";
        echo ($context["entry_address_2"] ?? null);
        echo "\" id=\"input-";
        echo ($context["type"] ?? null);
        echo "-address-2\" class=\"form-control\"/>
                </div>
                <div class=\"form-group required\">
                    <input type=\"text\" name=\"";
        // line 51
        echo ($context["type"] ?? null);
        echo "_city\" value=\"";
        echo twig_get_attribute($this->env, $this->source, ($context["SoUtils"] ?? null), "getProperty", [0 => ($context["order_data"] ?? null), 1 => (($context["type"] ?? null) . "_city")], "method", false, false, false, 51);
        echo "\" placeholder=\"";
        echo ($context["entry_city"] ?? null);
        echo " *\" id=\"input-";
        echo ($context["type"] ?? null);
        echo "-city\" class=\"form-control\"/>
                </div>
                <div class=\"form-group required\">
                    <input type=\"text\" name=\"";
        // line 54
        echo ($context["type"] ?? null);
        echo "_postcode\" value=\"";
        echo ($context["postcode"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_postcode"] ?? null);
        echo " *\" id=\"input-";
        echo ($context["type"] ?? null);
        echo "-postcode\" class=\"form-control\"/>
                </div>
                <div class=\"form-group required\">
                    <select name=\"";
        // line 57
        echo ($context["type"] ?? null);
        echo "_country_id\" id=\"input-";
        echo ($context["type"] ?? null);
        echo "-country\" class=\"form-control\">
                        <option value=\"\">";
        // line 58
        echo ($context["text_select"] ?? null);
        echo "</option>
                        ";
        // line 59
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["countries"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["country"]) {
            // line 60
            echo "                            ";
            if ((twig_get_attribute($this->env, $this->source, $context["country"], "country_id", [], "any", false, false, false, 60) == ($context["country_id"] ?? null))) {
                // line 61
                echo "                                <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["country"], "country_id", [], "any", false, false, false, 61);
                echo "\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["country"], "name", [], "any", false, false, false, 61);
                echo "</option>
                            ";
            } else {
                // line 63
                echo "                                <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["country"], "country_id", [], "any", false, false, false, 63);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["country"], "name", [], "any", false, false, false, 63);
                echo "</option>
                            ";
            }
            // line 65
            echo "                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['country'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 66
        echo "                    </select>
                </div>
                <div class=\"form-group required\">
                    <select name=\"";
        // line 69
        echo ($context["type"] ?? null);
        echo "_zone_id\" id=\"input-";
        echo ($context["type"] ?? null);
        echo "-zone\" class=\"form-control\">
                    </select>
                </div>
                ";
        // line 72
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["custom_fields"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["custom_field"]) {
            // line 73
            echo "                    ";
            if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 73) == "address")) {
                // line 74
                echo "                        ";
                if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 74) == "select")) {
                    // line 75
                    echo "                            <div class=\"form-group ";
                    echo ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "required", [], "any", false, false, false, 75)) ? (" required") : (""));
                    echo " custom-field\" data-sort=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "sort_order", [], "any", false, false, false, 75);
                    echo "\">
                                <label class=\"col-sm-2 control-label\" for=\"input-";
                    // line 76
                    echo ($context["type"] ?? null);
                    echo "-custom-field";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 76);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 76);
                    echo "</label>
                                <select name=\"";
                    // line 77
                    echo ($context["type"] ?? null);
                    echo "_custom_field[";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 77);
                    echo "]\"
                                        id=\"input-";
                    // line 78
                    echo ($context["type"] ?? null);
                    echo "-custom-field";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 78);
                    echo "\"
                                        class=\"form-control\">
                                    <option value=\"\">";
                    // line 80
                    echo ($context["text_select"] ?? null);
                    echo "</option>
                                    ";
                    // line 81
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_value", [], "any", false, false, false, 81));
                    foreach ($context['_seq'] as $context["_key"] => $context["custom_field_value"]) {
                        // line 82
                        echo "                                        <option value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 82);
                        echo "\">";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "name", [], "any", false, false, false, 82);
                        echo "</option>
                                    ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 84
                    echo "                                </select>
                            </div>
                        ";
                }
                // line 87
                echo "                        
                        ";
                // line 88
                if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 88) == "radio")) {
                    // line 89
                    echo "                            <div class=\"form-group ";
                    echo ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "required", [], "any", false, false, false, 89)) ? (" required") : (""));
                    echo " custom-field\" data-sort=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "sort_order", [], "any", false, false, false, 89);
                    echo "\">
                                <label class=\"col-sm-2 control-label\">";
                    // line 90
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 90);
                    echo "</label>
                                <div id=\"input-";
                    // line 91
                    echo ($context["type"] ?? null);
                    echo "-custom-field";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 91);
                    echo "\">
                                    ";
                    // line 92
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_value", [], "any", false, false, false, 92));
                    foreach ($context['_seq'] as $context["_key"] => $context["custom_field_value"]) {
                        // line 93
                        echo "                                        <div class=\"radio\">
                                            <label>
                                                <input type=\"radio\"
                                                       name=\"";
                        // line 96
                        echo ($context["type"] ?? null);
                        echo "_custom_field[";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 96);
                        echo "]\"
                                                       value=\"";
                        // line 97
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 97);
                        echo "\"/>
                                                ";
                        // line 98
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "name", [], "any", false, false, false, 98);
                        echo "
                                            </label>
                                        </div>
                                    ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 102
                    echo "                                </div>
                            </div>
                        ";
                }
                // line 105
                echo "
                        ";
                // line 106
                if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 106) == "checkbox")) {
                    // line 107
                    echo "                            <div class=\"form-group ";
                    echo ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "required", [], "any", false, false, false, 107)) ? (" required") : (""));
                    echo " custom-field\" data-sort=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "sort_order", [], "any", false, false, false, 107);
                    echo "\">
                                <label class=\"col-sm-2 control-label\">";
                    // line 108
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 108);
                    echo "</label>
                                <div id=\"input-";
                    // line 109
                    echo ($context["type"] ?? null);
                    echo "-custom-field";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 109);
                    echo "\">
                                    ";
                    // line 110
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_value", [], "any", false, false, false, 110));
                    foreach ($context['_seq'] as $context["_key"] => $context["custom_field_value"]) {
                        // line 111
                        echo "                                        <div class=\"checkbox\">
                                            <label>
                                                <input type=\"checkbox\"
                                                       name=\"";
                        // line 114
                        echo ($context["type"] ?? null);
                        echo "_custom_field[";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 114);
                        echo "][]\"
                                                       value=\"";
                        // line 115
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 115);
                        echo "\"/>
                                                ";
                        // line 116
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "name", [], "any", false, false, false, 116);
                        echo "
                                            </label>
                                        </div>
                                    ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 120
                    echo "                                </div>
                            </div>
                        ";
                }
                // line 123
                echo "
                        ";
                // line 124
                if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 124) == "text")) {
                    // line 125
                    echo "                            <div class=\"form-group ";
                    echo ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "required", [], "any", false, false, false, 125)) ? (" required") : (""));
                    echo " custom-field\" data-sort=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "sort_order", [], "any", false, false, false, 125);
                    echo "\">
                                <label class=\"col-sm-2 control-label\" for=\"input-";
                    // line 126
                    echo ($context["type"] ?? null);
                    echo "-custom-field";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 126);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 126);
                    echo "</label>
                                <input type=\"text\" name=\"";
                    // line 127
                    echo ($context["type"] ?? null);
                    echo "_custom_field[";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 127);
                    echo "]\"
                                       value=\"";
                    // line 128
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 128);
                    echo "\"
                                       placeholder=\"";
                    // line 129
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 129);
                    echo "\"
                                       id=\"input-";
                    // line 130
                    echo ($context["type"] ?? null);
                    echo "-custom-field";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 130);
                    echo "\"
                                       class=\"form-control\"/>
                            </div>
                        ";
                }
                // line 134
                echo "
                        ";
                // line 135
                if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 135) == "textarea")) {
                    // line 136
                    echo "                            <div class=\"form-group ";
                    echo ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "required", [], "any", false, false, false, 136)) ? (" required") : (""));
                    echo " custom-field\" data-sort=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "sort_order", [], "any", false, false, false, 136);
                    echo "\">
                                <label class=\"col-sm-2 control-label\" for=\"input-";
                    // line 137
                    echo ($context["type"] ?? null);
                    echo "-custom-field";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 137);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 137);
                    echo "</label>
                                <textarea name=\"";
                    // line 138
                    echo ($context["type"] ?? null);
                    echo "_custom_field[";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 138);
                    echo "]\" rows=\"5\"
                                          placeholder=\"";
                    // line 139
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 139);
                    echo "\"
                                          id=\"input-";
                    // line 140
                    echo ($context["type"] ?? null);
                    echo "-custom-field";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 140);
                    echo "\"
                                          class=\"form-control\">";
                    // line 141
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 141);
                    echo "</textarea>
                            </div>
                        ";
                }
                // line 144
                echo "
                        ";
                // line 145
                if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 145) == "file")) {
                    // line 146
                    echo "                            <div class=\"form-group ";
                    echo ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "required", [], "any", false, false, false, 146)) ? (" required") : (""));
                    echo " custom-field\" data-sort=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "sort_order", [], "any", false, false, false, 146);
                    echo "\">
                                <label class=\"col-sm-2 control-label\">";
                    // line 147
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 147);
                    echo "</label>
                                <button type=\"button\"
                                        id=\"button-";
                    // line 149
                    echo ($context["type"] ?? null);
                    echo "-custom-field";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 149);
                    echo "\"
                                        data-loading-text=\"";
                    // line 150
                    echo ($context["text_loading"] ?? null);
                    echo "\" class=\"btn btn-default\"><i
                                        class=\"fa fa-upload\"></i> ";
                    // line 151
                    echo ($context["button_upload"] ?? null);
                    echo "</button>
                                <input type=\"hidden\" name=\"";
                    // line 152
                    echo ($context["type"] ?? null);
                    echo "_custom_field[";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 152);
                    echo "]\"
                                       value=\"\"
                                       id=\"input-";
                    // line 154
                    echo ($context["type"] ?? null);
                    echo "-custom-field";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 154);
                    echo "\"/>
                            </div>
                        ";
                }
                // line 157
                echo "
                        ";
                // line 158
                if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 158) == "date")) {
                    // line 159
                    echo "                            <div class=\"form-group ";
                    echo ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "required", [], "any", false, false, false, 159)) ? (" required") : (""));
                    echo " custom-field\" data-sort=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "sort_order", [], "any", false, false, false, 159);
                    echo "\">
                                <label class=\"col-sm-2 control-label\" for=\"input-";
                    // line 160
                    echo ($context["type"] ?? null);
                    echo "-custom-field";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 160);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 160);
                    echo "</label>
                                <div class=\"input-group date\">
                                    <input type=\"text\" name=\"";
                    // line 162
                    echo ($context["type"] ?? null);
                    echo "_custom_field[";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 162);
                    echo "]\"
                                        value=\"";
                    // line 163
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 163);
                    echo "\"
                                        placeholder=\"";
                    // line 164
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 164);
                    echo "\" data-date-format=\"YYYY-MM-DD\"
                                        id=\"input-";
                    // line 165
                    echo ($context["type"] ?? null);
                    echo "-custom-field";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 165);
                    echo "\"
                                        class=\"form-control\"/>
                                    <span class=\"input-group-btn\">
                                        <button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button>
                                    </span>
                                </div>
                            </div>
                        ";
                }
                // line 173
                echo "
                        ";
                // line 174
                if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 174) == "time")) {
                    // line 175
                    echo "                            <div class=\"form-group ";
                    echo ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "required", [], "any", false, false, false, 175)) ? (" required") : (""));
                    echo " custom-field\" data-sort=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "sort_order", [], "any", false, false, false, 175);
                    echo "\">
                                <label class=\"col-sm-2 control-label\" for=\"input-";
                    // line 176
                    echo ($context["type"] ?? null);
                    echo "-custom-field";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 176);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 176);
                    echo "</label>
                                <div class=\"input-group time\">
                                    <input type=\"text\" name=\"";
                    // line 178
                    echo ($context["type"] ?? null);
                    echo "_custom_field[";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 178);
                    echo "]\"
                                        value=\"";
                    // line 179
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 179);
                    echo "\"
                                        placeholder=\"";
                    // line 180
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 180);
                    echo "\" data-date-format=\"HH:mm\"
                                        id=\"input-";
                    // line 181
                    echo ($context["type"] ?? null);
                    echo "-custom-field";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 181);
                    echo "\"
                                        class=\"form-control\"/>
                                    <span class=\"input-group-btn\">
                                        <button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button>
                                    </span>
                                </div>
                            </div>
                        ";
                }
                // line 189
                echo "
                        ";
                // line 190
                if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 190) == "datetime")) {
                    // line 191
                    echo "                            <div class=\"form-group ";
                    echo ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "required", [], "any", false, false, false, 191)) ? (" required") : (""));
                    echo " custom-field\" data-sort=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "sort_order", [], "any", false, false, false, 191);
                    echo "\">
                                <label class=\"col-sm-2 control-label\" for=\"input-";
                    // line 192
                    echo ($context["type"] ?? null);
                    echo "-custom-field";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 192);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 192);
                    echo "</label>
                                <div class=\"input-group datetime\">
                                    <input type=\"text\" name=\"";
                    // line 194
                    echo ($context["type"] ?? null);
                    echo "_custom_field[";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 194);
                    echo "]\"
                                        value=\"";
                    // line 195
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 195);
                    echo "\"
                                        placeholder=\"";
                    // line 196
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 196);
                    echo "\"
                                        data-date-format=\"YYYY-MM-DD HH:mm\"
                                        id=\"input-";
                    // line 198
                    echo ($context["type"] ?? null);
                    echo "-custom-field";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 198);
                    echo "\"
                                        class=\"form-control\"/>
                                    <span class=\"input-group-btn\">
                                        <button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button>
                                    </span>
                                </div>
                            </div>
                        ";
                }
                // line 206
                echo "                    ";
            }
            // line 207
            echo "                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 208
        echo "            </div>
        </form>
        <script type=\"text/javascript\">
            \$('.so-onepagecheckout form.form-";
        // line 211
        echo ($context["type"] ?? null);
        echo " input[name=\"";
        echo ($context["type"] ?? null);
        echo "_address\"]').change(function(){
                if (this.value == 'new') {
                    \$('#";
        // line 213
        echo ($context["type"] ?? null);
        echo "-existing').hide();
                    \$('#";
        // line 214
        echo ($context["type"] ?? null);
        echo "-new').show().find('input[type=\"text\"]').val('');
                } else {
                    \$('#";
        // line 216
        echo ($context["type"] ?? null);
        echo "-existing').show();
                    \$('#";
        // line 217
        echo ($context["type"] ?? null);
        echo "-new').hide();
                }
                \$(document).trigger('so_checkout_address_changed', '";
        // line 219
        echo ($context["type"] ?? null);
        echo "');
            });

            \$('.so-onepagecheckout form.form-";
        // line 222
        echo ($context["type"] ?? null);
        echo " select[name=\\'";
        echo ($context["type"] ?? null);
        echo "_country_id\\']').on('change', function(e, first) {
                if (!this.value) return;
                \$.ajax({
                    url: 'index.php?route=checkout/checkout/country&country_id=' + this.value,
                    dataType: 'json',
                    beforeSend: function() {
                        \$('.so-onepagecheckout form.form-";
        // line 228
        echo ($context["type"] ?? null);
        echo " select[name=\\'";
        echo ($context["type"] ?? null);
        echo "_country_id\\']').after(' <i class=\"fa fa-circle-o-notch fa-spin\"></i>');
                    },
                    complete: function() {
                        \$('.fa-spin').remove();
                    },
                    success: function(json) {
                        \$('.fa-spin').remove();

                        if (json['postcode_required'] == '1') {
                            \$('.so-onepagecheckout form.form-";
        // line 237
        echo ($context["type"] ?? null);
        echo " input[name=\\'";
        echo ($context["type"] ?? null);
        echo "_postcode\\']').parent().addClass('required');
                        } else {
                            \$('.so-onepagecheckout form.form-";
        // line 239
        echo ($context["type"] ?? null);
        echo " input[name=\\'";
        echo ($context["type"] ?? null);
        echo "_postcode\\']').parent().removeClass('required');
                        }

                        html = '<option value=\"\"> --- ";
        // line 242
        echo ($context["text_select"] ?? null);
        echo " --- </option>';

                        if (json['zone'] != '') {
                            for (i = 0; i < json['zone'].length; i++) {
                                html += '<option value=\"' + json['zone'][i]['zone_id'] + '\"';

                                if (json['zone'][i]['zone_id'] == '";
        // line 248
        echo ($context["zone_id"] ?? null);
        echo "') {
                                    html += ' selected=\"selected\"';
                                }

                                html += '>' + json['zone'][i]['name'] + '</option>';
                            }
                        } else {
                            html += '<option value=\"0\" selected=\"selected\">";
        // line 255
        echo ($context["text_none"] ?? null);
        echo "</option>';
                        }

                        \$('.so-onepagecheckout form.form-";
        // line 258
        echo ($context["type"] ?? null);
        echo " select[name=\\'";
        echo ($context["type"] ?? null);
        echo "_zone_id\\']').html(html);

                        if (!first) {
                            \$(document).trigger('so_checkout_address_changed', '";
        // line 261
        echo ($context["type"] ?? null);
        echo "');
                        }
                    },
                    error: function(xhr, ajaxOptions, thrownError) {
                        alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
                    }
                });
            }).trigger('change', true);

            \$('.so-onepagecheckout form.form-";
        // line 270
        echo ($context["type"] ?? null);
        echo " select[name=\\'";
        echo ($context["type"] ?? null);
        echo "_zone_id\\']').on('change', function() {
                \$(document).trigger('so_checkout_address_changed', '";
        // line 271
        echo ($context["type"] ?? null);
        echo "');
            });

            \$('.so-onepagecheckout form.form-";
        // line 274
        echo ($context["type"] ?? null);
        echo " select[name=\\'";
        echo ($context["type"] ?? null);
        echo "_address_id\\']').on('change', function() {
                \$(document).trigger('so_checkout_address_changed', '";
        // line 275
        echo ($context["type"] ?? null);
        echo "');
            });

            var timeout_";
        // line 278
        echo ($context["type"] ?? null);
        echo " = null;
            \$('.so-onepagecheckout form.form-";
        // line 279
        echo ($context["type"] ?? null);
        echo " input[name=\\'";
        echo ($context["type"] ?? null);
        echo "_postcode\\']').on('keydown', function() {
                if (timeout_";
        // line 280
        echo ($context["type"] ?? null);
        echo ") {
                    clearTimeout(timeout_";
        // line 281
        echo ($context["type"] ?? null);
        echo ");
                }
                timeout_";
        // line 283
        echo ($context["type"] ?? null);
        echo " = setTimeout(function () {
                    \$(document).trigger('so_checkout_address_changed', '";
        // line 284
        echo ($context["type"] ?? null);
        echo "');
                }, 500);
            });
        </script> 
    </div>
</div>
<input type=\"hidden\" name=\"default_zone_id\" id=\"default_zone_id\" value=\"";
        // line 290
        echo ($context["zone_id"] ?? null);
        echo "\" />";
    }

    public function getTemplateName()
    {
        return "default/template/extension/module/so_onepagecheckout/checkout/address_form.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  936 => 290,  927 => 284,  923 => 283,  918 => 281,  914 => 280,  908 => 279,  904 => 278,  898 => 275,  892 => 274,  886 => 271,  880 => 270,  868 => 261,  860 => 258,  854 => 255,  844 => 248,  835 => 242,  827 => 239,  820 => 237,  806 => 228,  795 => 222,  789 => 219,  784 => 217,  780 => 216,  775 => 214,  771 => 213,  764 => 211,  759 => 208,  753 => 207,  750 => 206,  737 => 198,  732 => 196,  728 => 195,  722 => 194,  713 => 192,  706 => 191,  704 => 190,  701 => 189,  688 => 181,  684 => 180,  680 => 179,  674 => 178,  665 => 176,  658 => 175,  656 => 174,  653 => 173,  640 => 165,  636 => 164,  632 => 163,  626 => 162,  617 => 160,  610 => 159,  608 => 158,  605 => 157,  597 => 154,  590 => 152,  586 => 151,  582 => 150,  576 => 149,  571 => 147,  564 => 146,  562 => 145,  559 => 144,  553 => 141,  547 => 140,  543 => 139,  537 => 138,  529 => 137,  522 => 136,  520 => 135,  517 => 134,  508 => 130,  504 => 129,  500 => 128,  494 => 127,  486 => 126,  479 => 125,  477 => 124,  474 => 123,  469 => 120,  459 => 116,  455 => 115,  449 => 114,  444 => 111,  440 => 110,  434 => 109,  430 => 108,  423 => 107,  421 => 106,  418 => 105,  413 => 102,  403 => 98,  399 => 97,  393 => 96,  388 => 93,  384 => 92,  378 => 91,  374 => 90,  367 => 89,  365 => 88,  362 => 87,  357 => 84,  346 => 82,  342 => 81,  338 => 80,  331 => 78,  325 => 77,  317 => 76,  310 => 75,  307 => 74,  304 => 73,  300 => 72,  292 => 69,  287 => 66,  281 => 65,  273 => 63,  265 => 61,  262 => 60,  258 => 59,  254 => 58,  248 => 57,  236 => 54,  224 => 51,  212 => 48,  200 => 45,  188 => 42,  185 => 41,  173 => 38,  161 => 35,  158 => 34,  156 => 33,  149 => 32,  142 => 28,  138 => 27,  132 => 23,  126 => 22,  108 => 20,  90 => 18,  87 => 17,  83 => 16,  79 => 15,  75 => 14,  69 => 11,  65 => 10,  61 => 8,  59 => 7,  55 => 6,  52 => 5,  46 => 3,  44 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/extension/module/so_onepagecheckout/checkout/address_form.twig", "/home/azhkhn/public_html/protidin.com.bd/catalog/view/theme/default/template/extension/module/so_onepagecheckout/checkout/address_form.twig");
    }
}
