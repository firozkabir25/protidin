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

/* so-buyshop/template/extension/module/so_filter_shop_by/default_manufacturer.twig */
class __TwigTemplate_ae3f6cf2942d7613f217751457f6c3abe1e0ae89a75fe9551b4b7d8c7d45cb39 extends \Twig\Template
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
        echo "<li class=\"so-filter-options\" data-option=\"Manufacturer\">
\t<div class=\"so-filter-heading\">
\t\t<div class=\"so-filter-heading-text\">
\t\t\t<span>";
        // line 4
        echo twig_get_attribute($this->env, $this->source, ($context["obj_lang"] ?? null), "get", [0 => "text_manufacturer"], "method", false, false, false, 4);
        echo "</span>
\t\t</div>
\t\t<i class=\"fa fa-chevron-down\"></i>
\t</div>

\t<div class=\"so-filter-content-opts\">
\t\t<div class=\"so-filter-content-opts-container\">
\t\t\t";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["manufacturer_all"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 12
            echo "\t\t\t\t";
            if (((twig_length_filter($this->env, ($context["manu_id"] ?? null)) > 0) && (($context["manu_id"] ?? null) != ""))) {
                // line 13
                echo "\t\t\t\t\t";
                $context["class"] = (((twig_in_filter(twig_get_attribute($this->env, $this->source, $context["item"], "manu_value_id", [], "any", false, false, false, 13), twig_split_filter($this->env, ($context["manu_id"] ?? null), ",")) == true)) ? ("opt_active") : (""));
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
            echo "\t\t\t\t
\t\t\t\t";
            // line 18
            if ((($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = ($context["disp_manu"] ?? null)) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4[("disp_manu_id_" . twig_get_attribute($this->env, $this->source, $context["item"], "manu_value_id", [], "any", false, false, false, 18))] ?? null) : null)) {
                // line 19
                echo "\t\t\t\t\t<div class=\"so-filter-option opt-select ";
                echo ($context["class"] ?? null);
                echo " ";
                echo (((twig_get_attribute($this->env, $this->source, $context["item"], "manu_count_product", [], "any", false, false, false, 19) > 0)) ? ("opt_enable") : ("opt_disable"));
                echo "\" data-type=\"manufacturer\" data-manufacturer_value= \"";
                echo twig_get_attribute($this->env, $this->source, $context["item"], "manu_value_id", [], "any", false, false, false, 19);
                echo "\" data-count_product=\"";
                echo twig_get_attribute($this->env, $this->source, $context["item"], "manu_count_product", [], "any", false, false, false, 19);
                echo "\" data-list_product=\"";
                echo twig_get_attribute($this->env, $this->source, $context["item"], "manu_list_product", [], "any", false, false, false, 19);
                echo "\">
\t\t\t\t\t\t<div class=\"so-option-container\">
\t\t\t\t\t\t\t<div class=\"option-input\">
\t\t\t\t\t\t\t\t<i class=\"fa fa-square-o\"></i>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<label><img class=\"hidden\" src=\"";
                // line 24
                echo twig_get_attribute($this->env, $this->source, $context["item"], "manu_value_image", [], "any", false, false, false, 24);
                echo "\"> ";
                echo twig_get_attribute($this->env, $this->source, $context["item"], "manu_value_name", [], "any", false, false, false, 24);
                echo "</label>
\t\t\t\t\t\t\t<div class=\"option-count ";
                // line 25
                if ((twig_length_filter($this->env, ($context["manu_id"] ?? null)) > 0)) {
                    echo " ";
                    echo (((twig_in_filter(twig_get_attribute($this->env, $this->source, $context["item"], "manu_value_id", [], "any", false, false, false, 25), twig_get_attribute($this->env, $this->source, ($context["manu_id"] ?? null), "split", [0 => ","], "method", false, false, false, 25)) == true)) ? ("opt_close") : (""));
                    echo " ";
                }
                echo "\">
\t\t\t\t\t\t\t\t<span>";
                // line 26
                echo twig_get_attribute($this->env, $this->source, $context["item"], "manu_count_product", [], "any", false, false, false, 26);
                echo "</span>
\t\t\t\t\t\t\t\t<i class=\"fa fa-times\"></i>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t";
            }
            // line 32
            echo "\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
        echo "\t\t</div>
\t</div>
</li>
";
    }

    public function getTemplateName()
    {
        return "so-buyshop/template/extension/module/so_filter_shop_by/default_manufacturer.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  122 => 33,  116 => 32,  107 => 26,  99 => 25,  93 => 24,  76 => 19,  74 => 18,  71 => 17,  68 => 16,  65 => 15,  62 => 14,  59 => 13,  56 => 12,  52 => 11,  42 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "so-buyshop/template/extension/module/so_filter_shop_by/default_manufacturer.twig", "/home/azhkhn/public_html/protidin.com.bd/catalog/view/theme/so-buyshop/template/extension/module/so_filter_shop_by/default_manufacturer.twig");
    }
}
