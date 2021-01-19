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

/* default/template/extension/module/so_onepagecheckout/checkout/payment_methods.twig */
class __TwigTemplate_f10dc376cd9d4a3aa491998a49f74741688a040f69632409a842f3366d4f9cfc extends \Twig\Template
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
        if ((twig_get_attribute($this->env, $this->source, ($context["setting_so_onepagecheckout_layout_setting"] ?? null), "payment_method_status", [], "any", false, false, false, 1) == 1)) {
            // line 2
            echo "<div class=\"checkout-content checkout-payment-methods\">
    ";
            // line 3
            if (($context["error_warning"] ?? null)) {
                // line 4
                echo "        <div class=\"alert alert-warning warning\"><i class=\"fa fa-exclamation-circle\"></i> ";
                echo ($context["error_warning"] ?? null);
                echo "
        </div>
    ";
            }
            // line 7
            echo "    ";
            if (($context["payment_methods"] ?? null)) {
                // line 8
                echo "        <h2 class=\"secondary-title\"><i class=\"fa fa-credit-card\"></i>";
                echo ($context["text_title_payment_method"] ?? null);
                echo "</h2>
        <div class=\"box-inner\">
            ";
                // line 10
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["payment_methods"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["payment_method"]) {
                    // line 11
                    echo "                ";
                    if ((twig_get_attribute($this->env, $this->source, ($context["setting_so_onepagecheckout_layout_setting"] ?? null), (twig_get_attribute($this->env, $this->source, $context["payment_method"], "code", [], "any", false, false, false, 11) . "_status"), [], "array", true, true, false, 11) && ((($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = ($context["setting_so_onepagecheckout_layout_setting"] ?? null)) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4[(twig_get_attribute($this->env, $this->source, $context["payment_method"], "code", [], "any", false, false, false, 11) . "_status")] ?? null) : null) == 1))) {
                        // line 12
                        echo "                <div class=\"radio\">
                    <label>
                        ";
                        // line 14
                        if ((((twig_get_attribute($this->env, $this->source, $context["payment_method"], "code", [], "any", false, false, false, 14) == ($context["code"] ?? null)) ||  !($context["code"] ?? null)) || (twig_get_attribute($this->env, $this->source, ($context["setting_so_onepagecheckout_layout_setting"] ?? null), "so_onepagecheckout_default_payment", [], "any", false, false, false, 14) == twig_get_attribute($this->env, $this->source, $context["payment_method"], "code", [], "any", false, false, false, 14)))) {
                            // line 15
                            echo "                            ";
                            $context["code"] = twig_get_attribute($this->env, $this->source, $context["payment_method"], "code", [], "any", false, false, false, 15);
                            // line 16
                            echo "                            <input type=\"radio\" name=\"payment_method\" value=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["payment_method"], "code", [], "any", false, false, false, 16);
                            echo "\" checked=\"checked\"/>
                        ";
                        } else {
                            // line 18
                            echo "                            <input type=\"radio\" name=\"payment_method\" value=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["payment_method"], "code", [], "any", false, false, false, 18);
                            echo "\"/>
                        ";
                        }
                        // line 20
                        echo "                        ";
                        echo twig_get_attribute($this->env, $this->source, $context["payment_method"], "title", [], "any", false, false, false, 20);
                        echo "
                        
                        ";
                        // line 22
                        if ((twig_get_attribute($this->env, $this->source, $context["payment_method"], "terms", [], "any", true, true, false, 22) && twig_get_attribute($this->env, $this->source, $context["payment_method"], "terms", [], "any", false, false, false, 22))) {
                            // line 23
                            echo "                            (";
                            echo twig_get_attribute($this->env, $this->source, $context["payment_method"], "terms", [], "any", false, false, false, 23);
                            echo ")
                        ";
                        }
                        // line 25
                        echo "                    </label>
                </div>
                ";
                    }
                    // line 28
                    echo "            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['payment_method'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 29
                echo "        </div>
    ";
            }
            // line 31
            echo "</div>
";
        }
    }

    public function getTemplateName()
    {
        return "default/template/extension/module/so_onepagecheckout/checkout/payment_methods.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 31,  113 => 29,  107 => 28,  102 => 25,  96 => 23,  94 => 22,  88 => 20,  82 => 18,  76 => 16,  73 => 15,  71 => 14,  67 => 12,  64 => 11,  60 => 10,  54 => 8,  51 => 7,  44 => 4,  42 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/extension/module/so_onepagecheckout/checkout/payment_methods.twig", "/home/azhkhn/public_html/protidin.com.bd/catalog/view/theme/default/template/extension/module/so_onepagecheckout/checkout/payment_methods.twig");
    }
}
