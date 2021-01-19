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

/* so-buyshop/template/extension/module/so_filter_shop_by/default_subcategory.twig */
class __TwigTemplate_897fe6c608e58919161f73f5fa38cc038d498b82f15134e08213ff69443f7bec extends \Twig\Template
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
        echo "<li class=\"so-filter-options\" data-option=\"Subcategory\">
\t<div class=\"so-filter-heading\">
\t\t<div class=\"so-filter-heading-text\">
\t\t\t<span>";
        // line 4
        echo twig_get_attribute($this->env, $this->source, ($context["obj_lang"] ?? null), "get", [0 => "text_subcategory"], "method", false, false, false, 4);
        echo "</span>
\t\t</div>
\t\t<i class=\"fa fa-chevron-down\"></i>
\t</div>

\t<div class=\"so-filter-content-opts\">
\t\t<div class=\"so-filter-content-opts-container\">
\t\t\t";
        // line 11
        if ( !twig_test_empty(($context["subcategory_all"] ?? null))) {
            // line 12
            echo "\t\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["subcategory_all"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 13
                echo "\t\t\t\t\t";
                if (((twig_length_filter($this->env, ($context["subcate_id"] ?? null)) > 0) && (($context["subcate_id"] ?? null) != ""))) {
                    // line 14
                    echo "\t\t\t\t\t\t";
                    $context["class"] = (((twig_in_filter(twig_get_attribute($this->env, $this->source, $context["item"], "subcate_id", [], "any", false, false, false, 14), twig_split_filter($this->env, ($context["subcate_id"] ?? null), ",")) == true)) ? ("opt_active") : (""));
                    // line 15
                    echo "\t\t\t\t\t";
                } else {
                    // line 16
                    echo "\t\t\t\t\t\t";
                    $context["class"] = "";
                    // line 17
                    echo "\t\t\t\t\t";
                }
                // line 18
                echo "\t\t\t\t\t<div class=\"so-filter-option-sub so-filter-option opt-select ";
                echo ($context["class"] ?? null);
                echo " ";
                echo (((twig_get_attribute($this->env, $this->source, $context["item"], "subcate_count_product", [], "any", false, false, false, 18) > 0)) ? ("opt_enable") : ("opt_disable"));
                echo "\" data-type=\"subcategory\" data-subcategory_value= \"";
                echo twig_get_attribute($this->env, $this->source, $context["item"], "subcate_id", [], "any", false, false, false, 18);
                echo "\" data-count_product=\"";
                echo twig_get_attribute($this->env, $this->source, $context["item"], "subcate_count_product", [], "any", false, false, false, 18);
                echo "\" data-list_product=\"";
                echo twig_get_attribute($this->env, $this->source, $context["item"], "subcate_list_product", [], "any", false, false, false, 18);
                echo "\">
\t\t\t\t\t\t<div class=\"so-option-container\">
\t\t\t\t\t\t\t<div class=\"option-input\">
\t\t\t\t\t\t\t\t<i class=\"fa fa-square-o\"></i>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<label><img class=\"hidden\" src=\"";
                // line 23
                echo twig_get_attribute($this->env, $this->source, $context["item"], "subcate_image", [], "any", false, false, false, 23);
                echo "\"> ";
                echo twig_get_attribute($this->env, $this->source, $context["item"], "subcate_name", [], "any", false, false, false, 23);
                echo "</label>
\t\t\t\t\t\t\t<div class=\"option-count ";
                // line 24
                if ((twig_length_filter($this->env, ($context["subcate_id"] ?? null)) > 0)) {
                    echo " ";
                    echo (((twig_in_filter(twig_get_attribute($this->env, $this->source, $context["item"], "subcate_id", [], "any", false, false, false, 24), twig_split_filter($this->env, ($context["subcate_id"] ?? null), ",")) == true)) ? ("opt_close") : (""));
                    echo " ";
                }
                echo "\">
\t\t\t\t\t\t\t\t<span>";
                // line 25
                echo twig_get_attribute($this->env, $this->source, $context["item"], "subcate_count_product", [], "any", false, false, false, 25);
                echo "</span>
\t\t\t\t\t\t\t\t<i class=\"fa fa-times\"></i>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 31
            echo "\t\t\t";
        }
        // line 32
        echo "\t\t</div>
\t</div>
</li>
";
    }

    public function getTemplateName()
    {
        return "so-buyshop/template/extension/module/so_filter_shop_by/default_subcategory.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  120 => 32,  117 => 31,  105 => 25,  97 => 24,  91 => 23,  74 => 18,  71 => 17,  68 => 16,  65 => 15,  62 => 14,  59 => 13,  54 => 12,  52 => 11,  42 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "so-buyshop/template/extension/module/so_filter_shop_by/default_subcategory.twig", "/home/azhkhn/public_html/protidin.com.bd/catalog/view/theme/so-buyshop/template/extension/module/so_filter_shop_by/default_subcategory.twig");
    }
}
