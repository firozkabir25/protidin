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

/* default/template/extension/module/so_onepagecheckout/checkout/shipping_methods.twig */
class __TwigTemplate_c1ea9026ecfa5c429e203b037bcdfe109ec20dd3b2745684973388900402e1c6 extends \Twig\Template
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
        if ((twig_get_attribute($this->env, $this->source, ($context["setting_so_onepagecheckout_layout_setting"] ?? null), "delivery_method_status", [], "any", false, false, false, 1) == 1)) {
            // line 2
            echo "<div class=\"checkout-content checkout-shipping-methods\">
    ";
            // line 3
            if (($context["error_warning"] ?? null)) {
                // line 4
                echo "        <div class=\"alert alert-warning\"><i class=\"fa fa-exclamation-circle\"></i> ";
                echo ($context["error_warning"] ?? null);
                echo "</div>
    ";
            }
            // line 6
            echo "    ";
            if (($context["shipping_methods"] ?? null)) {
                // line 7
                echo "        <h2 class=\"secondary-title\"><i class=\"fa fa-location-arrow\"></i>";
                echo ($context["text_title_shipping_method"] ?? null);
                echo "</h2>
        <div class=\"box-inner\">
            ";
                // line 9
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["shipping_methods"] ?? null));
                foreach ($context['_seq'] as $context["key"] => $context["shipping_method"]) {
                    // line 10
                    echo "                <p><strong>";
                    echo twig_get_attribute($this->env, $this->source, $context["shipping_method"], "title", [], "any", false, false, false, 10);
                    echo "</strong></p>
                ";
                    // line 11
                    if ( !twig_get_attribute($this->env, $this->source, $context["shipping_method"], "error", [], "any", false, false, false, 11)) {
                        // line 12
                        echo "                    ";
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["shipping_method"], "quote", [], "any", false, false, false, 12));
                        foreach ($context['_seq'] as $context["_key"] => $context["quote"]) {
                            // line 13
                            echo "                        ";
                            $context["shipping_status"] = twig_split_filter($this->env, twig_get_attribute($this->env, $this->source, $context["quote"], "code", [], "any", false, false, false, 13), ".");
                            // line 14
                            echo "                        ";
                            if ((twig_get_attribute($this->env, $this->source, ($context["setting_so_onepagecheckout_layout_setting"] ?? null), ((($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = ($context["shipping_status"] ?? null)) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4[0] ?? null) : null) . "_status"), [], "array", true, true, false, 14) && ((($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = ($context["setting_so_onepagecheckout_layout_setting"] ?? null)) && is_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) || $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 instanceof ArrayAccess ? ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144[((($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b = ($context["shipping_status"] ?? null)) && is_array($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b) || $__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b instanceof ArrayAccess ? ($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b[0] ?? null) : null) . "_status")] ?? null) : null) == 1))) {
                                // line 15
                                echo "                            <div class=\"radio\">
                                <label>
                                    ";
                                // line 17
                                if ((((twig_get_attribute($this->env, $this->source, $context["quote"], "code", [], "any", false, false, false, 17) == ($context["code"] ?? null)) ||  !($context["code"] ?? null)) || (twig_get_attribute($this->env, $this->source, ($context["setting_so_onepagecheckout_layout_setting"] ?? null), "so_onepagecheckout_default_shipping", [], "any", false, false, false, 17) == (($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 = ($context["shipping_status"] ?? null)) && is_array($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002) || $__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 instanceof ArrayAccess ? ($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002[0] ?? null) : null)))) {
                                    // line 18
                                    echo "                                        ";
                                    $context["code"] = twig_get_attribute($this->env, $this->source, $context["quote"], "code", [], "any", false, false, false, 18);
                                    // line 19
                                    echo "                                        <input type=\"radio\" name=\"shipping_method\" value=\"";
                                    echo twig_get_attribute($this->env, $this->source, $context["quote"], "code", [], "any", false, false, false, 19);
                                    echo "\" checked=\"checked\"/>
                                    ";
                                } else {
                                    // line 21
                                    echo "                                        <input type=\"radio\" name=\"shipping_method\" value=\"";
                                    echo twig_get_attribute($this->env, $this->source, $context["quote"], "code", [], "any", false, false, false, 21);
                                    echo "\"/>
                                    ";
                                }
                                // line 23
                                echo "                                    ";
                                echo twig_get_attribute($this->env, $this->source, $context["quote"], "title", [], "any", false, false, false, 23);
                                echo " - ";
                                echo twig_get_attribute($this->env, $this->source, $context["quote"], "text", [], "any", false, false, false, 23);
                                echo "
                                </label>
                            </div>
                        ";
                            }
                            // line 27
                            echo "                    ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['quote'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 28
                        echo "                ";
                    } else {
                        // line 29
                        echo "                    <div class=\"alert alert-danger\">";
                        echo twig_get_attribute($this->env, $this->source, $context["shipping_method"], "error", [], "any", false, false, false, 29);
                        echo "</div>
                ";
                    }
                    // line 31
                    echo "            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['key'], $context['shipping_method'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 32
                echo "        </div>
    ";
            }
            // line 34
            echo "</div>
";
        }
    }

    public function getTemplateName()
    {
        return "default/template/extension/module/so_onepagecheckout/checkout/shipping_methods.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 34,  133 => 32,  127 => 31,  121 => 29,  118 => 28,  112 => 27,  102 => 23,  96 => 21,  90 => 19,  87 => 18,  85 => 17,  81 => 15,  78 => 14,  75 => 13,  70 => 12,  68 => 11,  63 => 10,  59 => 9,  53 => 7,  50 => 6,  44 => 4,  42 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/extension/module/so_onepagecheckout/checkout/shipping_methods.twig", "/home/azhkhn/public_html/protidin.com.bd/catalog/view/theme/default/template/extension/module/so_onepagecheckout/checkout/shipping_methods.twig");
    }
}
