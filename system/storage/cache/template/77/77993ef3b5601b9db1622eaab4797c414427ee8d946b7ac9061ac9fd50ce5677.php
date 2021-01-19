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

/* so-mobile/template/soconfig/panel_bar.twig */
class __TwigTemplate_bc318e8a8d18dd8e85cfbc13e75547e17a83a96870cd67b90b8af21518d8e36c extends \Twig\Template
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
        // line 9
        echo "
<nav class=\"bar bar-tab\">
\t<a class=\"tab-item\" href=\"";
        // line 11
        echo ($context["home"] ?? null);
        echo "\" data-transition=\"slide-in\">
\t\t<span class=\"icon icon-home\"></span>
\t\t<span class=\"tab-label\">";
        // line 13
        echo twig_get_attribute($this->env, $this->source, ($context["objlang"] ?? null), "get", [0 => "text_home"], "method", false, false, false, 13);
        echo " </span>
\t</a>
\t<a class=\"tab-item\" href=\"";
        // line 15
        echo ($context["menu_search"] ?? null);
        echo "\" data-transition=\"slide-in\">
\t\t<span class=\"icon icon-search\"></span>
\t\t<span class=\"tab-label\">";
        // line 17
        echo twig_get_attribute($this->env, $this->source, ($context["objlang"] ?? null), "get", [0 => "text_search"], "method", false, false, false, 17);
        echo " </span>
\t</a>
\t<a class=\"tab-item item-cart\" href=\"";
        // line 19
        echo ($context["shopping_cart"] ?? null);
        echo "\" data-transition=\"slide-in\">
\t\t<span class=\"icon icon-download\"></span>
\t\t<div id=\"cart\" class=\"btn-shopping-cart\">
\t\t\t<span class=\"total-shopping-cart cart-total-full\">
\t\t\t\t";
        // line 23
        echo ($context["text_items"] ?? null);
        echo " 
\t\t\t</span>
\t\t</div>
\t\t
\t\t<span class=\"tab-label\">";
        // line 27
        echo twig_get_attribute($this->env, $this->source, ($context["objlang"] ?? null), "get", [0 => "text_cart"], "method", false, false, false, 27);
        echo " </span>
\t</a>
\t<a class=\"tab-item\" href=\"";
        // line 29
        echo ($context["login"] ?? null);
        echo "\" data-transition=\"slide-in\">
\t\t<span class=\"icon icon-person\"></span>
\t\t<span class=\"tab-label\">";
        // line 31
        echo twig_get_attribute($this->env, $this->source, ($context["objlang"] ?? null), "get", [0 => "text_account"], "method", false, false, false, 31);
        echo " </span>
\t</a>

\t";
        // line 34
        if (twig_get_attribute($this->env, $this->source, ($context["soconfig"] ?? null), "get_settings", [0 => "barmore_status"], "method", false, false, false, 34)) {
            // line 35
            echo "\t<a class=\"tab-item tab-item--more tooltip-popovers\"  href=\"";
            echo ($context["actual_link"] ?? null);
            echo "#popover\">
\t\t<span class=\"icon icon-more\"></span>
\t\t<span class=\"tab-label\">";
            // line 37
            echo twig_get_attribute($this->env, $this->source, ($context["objlang"] ?? null), "get", [0 => "text_more"], "method", false, false, false, 37);
            echo " </span>
\t</a>
\t";
        }
        // line 40
        echo "</nav>

";
        // line 42
        if (twig_get_attribute($this->env, $this->source, ($context["soconfig"] ?? null), "get_settings", [0 => "barmore_status"], "method", false, false, false, 42)) {
            // line 43
            echo "<div id=\"popover\" class=\"popover fade bottom in right\">
\t<ul class=\"table-view\">
\t\t";
            // line 45
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["soconfig"] ?? null), "get_settings", [0 => "listmenus"], "method", false, false, false, 45));
            foreach ($context['_seq'] as $context["_key"] => $context["menuitem"]) {
                echo " 
\t\t\t
\t\t\t";
                // line 47
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["menuitem"], "namemore", [], "any", false, false, false, 47));
                foreach ($context['_seq'] as $context["nameid"] => $context["menuname"]) {
                    // line 48
                    echo "\t\t\t\t";
                    if (($context["nameid"] == ($context["lang_id"] ?? null))) {
                        // line 49
                        echo "\t\t\t\t<li class=\"table-view-cell\"><a href=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["menuitem"], "link", [], "any", false, false, false, 49);
                        echo "\">";
                        echo $context["menuname"];
                        echo "</a></li>
\t\t\t\t";
                    }
                    // line 51
                    echo "\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['nameid'], $context['menuname'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 52
                echo "\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['menuitem'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 53
            echo "\t</ul>
</div>
";
        }
        // line 56
        echo "\t


";
    }

    public function getTemplateName()
    {
        return "so-mobile/template/soconfig/panel_bar.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  154 => 56,  149 => 53,  143 => 52,  137 => 51,  129 => 49,  126 => 48,  122 => 47,  115 => 45,  111 => 43,  109 => 42,  105 => 40,  99 => 37,  93 => 35,  91 => 34,  85 => 31,  80 => 29,  75 => 27,  68 => 23,  61 => 19,  56 => 17,  51 => 15,  46 => 13,  41 => 11,  37 => 9,);
    }

    public function getSourceContext()
    {
        return new Source("", "so-mobile/template/soconfig/panel_bar.twig", "/home/azhkhn/public_html/protidin.com.bd/catalog/view/theme/so-mobile/template/soconfig/panel_bar.twig");
    }
}
