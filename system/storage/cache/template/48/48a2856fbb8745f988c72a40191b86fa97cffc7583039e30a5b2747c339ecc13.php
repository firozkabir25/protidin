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

/* so-buyshop/template/extension/module/so_filter_shop_by/default_option.twig */
class __TwigTemplate_218bb69361abb453cad235178e8057d59cd77b4243016f77fb16a0fb827ef639 extends \Twig\Template
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
        echo "<li class=\"so-filter-options\" data-option=\"";
        echo (($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = ($context["item"] ?? null)) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4[0] ?? null) : null);
        echo "\">
\t<div class=\"so-filter-heading\">
\t\t<div class=\"so-filter-heading-text\">
\t\t\t<span>";
        // line 4
        echo (($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = ($context["item"] ?? null)) && is_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) || $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 instanceof ArrayAccess ? ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144[0] ?? null) : null);
        echo "</span>
\t\t</div>
\t\t<i class=\"fa fa-chevron-down\"></i>
\t</div>

\t<div class=\"so-filter-content-opts\">
\t\t<div class=\"so-filter-content-opts-container\">
\t\t\t";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["values"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["value"]) {
            // line 12
            echo "\t\t\t\t";
            if (((twig_length_filter($this->env, ($context["opt_id"] ?? null)) > 0) && (($context["opt_id"] ?? null) != ""))) {
                // line 13
                echo "\t\t\t\t\t";
                $context["class"] = (((twig_in_filter(twig_get_attribute($this->env, $this->source, $context["value"], "opt_value_id", [], "any", false, false, false, 13), twig_split_filter($this->env, ($context["opt_id"] ?? null), ",")) == true)) ? ("opt_active") : (""));
                // line 14
                echo "\t\t\t\t";
            } else {
                // line 15
                echo "\t\t\t\t\t";
                $context["class"] = "";
                // line 16
                echo "\t\t\t\t";
            }
            // line 17
            echo "\t\t\t\t<div class=\"so-filter-option opt-select ";
            echo ($context["class"] ?? null);
            echo " ";
            echo (((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["value"], "opt_count_product", [], "any", false, false, false, 17)) > 0)) ? ("opt_enable") : ("opt_disable"));
            echo "\" data-type=\"option\" data-option_id=\"";
            echo twig_get_attribute($this->env, $this->source, $context["value"], "option_id", [], "any", false, false, false, 17);
            echo "\" data-option_value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["value"], "opt_value_id", [], "any", false, false, false, 17);
            echo "\" data-count_product=\"";
            echo twig_get_attribute($this->env, $this->source, $context["value"], "opt_count_product", [], "any", false, false, false, 17);
            echo "\" data-list_product=\"";
            echo twig_get_attribute($this->env, $this->source, $context["value"], "opt_list_product", [], "any", false, false, false, 17);
            echo "\">
\t\t\t\t\t<div class=\"so-option-container\">
\t\t\t\t\t\t<div class=\"option-input\">
\t\t\t\t\t\t\t<i class=\"fa fa-square-o\"></i>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<label>";
            // line 22
            echo twig_get_attribute($this->env, $this->source, $context["value"], "opt_value_name", [], "any", false, false, false, 22);
            echo "</label>
\t\t\t\t\t\t<div class=\"option-count ";
            // line 23
            if (((twig_length_filter($this->env, ($context["opt_id"] ?? null)) > 0) && (($context["opt_id"] ?? null) != ""))) {
                echo " ";
                echo (((twig_in_filter(twig_get_attribute($this->env, $this->source, $context["value"], "opt_value_id", [], "any", false, false, false, 23), twig_split_filter($this->env, ($context["opt_id"] ?? null), ",")) == true)) ? ("opt_close") : (""));
            }
            echo "\">
\t\t\t\t\t\t\t<span>";
            // line 24
            echo twig_get_attribute($this->env, $this->source, $context["value"], "opt_count_product", [], "any", false, false, false, 24);
            echo "</span>
\t\t\t\t\t\t\t<i class=\"fa fa-times\"></i>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['value'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 30
        echo "\t\t</div>
\t</div>
</li>
";
    }

    public function getTemplateName()
    {
        return "so-buyshop/template/extension/module/so_filter_shop_by/default_option.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  115 => 30,  103 => 24,  96 => 23,  92 => 22,  73 => 17,  70 => 16,  67 => 15,  64 => 14,  61 => 13,  58 => 12,  54 => 11,  44 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "so-buyshop/template/extension/module/so_filter_shop_by/default_option.twig", "/home/azhkhn/public_html/protidin.com.bd/catalog/view/theme/so-buyshop/template/extension/module/so_filter_shop_by/default_option.twig");
    }
}
