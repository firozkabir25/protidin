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

/* so-buyshop/template/product/manufacturer_info.twig */
class __TwigTemplate_335ab24fd92943e737bbdae8f0f65d85755f8109a370086a7b0bd6beb456958e extends \Twig\Template
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
        echo ($context["header"] ?? null);
        echo "


<div class=\"container\">
  <ul class=\"breadcrumb\">
    ";
        // line 6
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 7
            echo "    <li><a href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 7);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 7);
            echo "</a></li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 9
        echo "  </ul>
  <div class=\"row\">";
        // line 10
        echo ($context["column_left"] ?? null);
        echo "
    ";
        // line 11
        if ((($context["column_left"] ?? null) && ($context["column_right"] ?? null))) {
            // line 12
            echo "    ";
            $context["class"] = "col-sm-6";
            // line 13
            echo "    ";
        } elseif ((($context["column_left"] ?? null) || ($context["column_right"] ?? null))) {
            // line 14
            echo "    ";
            $context["class"] = "col-sm-9";
            // line 15
            echo "    ";
        } else {
            // line 16
            echo "    ";
            $context["class"] = "col-sm-12";
            // line 17
            echo "    ";
        }
        // line 18
        echo "    <div id=\"content\" class=\"";
        echo ($context["class"] ?? null);
        echo "\">";
        echo ($context["content_top"] ?? null);
        echo "
\t\t<h2>";
        // line 19
        echo ($context["heading_title"] ?? null);
        echo "</h2>
\t\t";
        // line 20
        if (($context["products"] ?? null)) {
            // line 21
            echo "\t\t\t";
            // line 22
            echo "            <div class=\"products-category\">
                ";
            // line 23
            $this->loadTemplate((($context["theme_directory"] ?? null) . "/template/soconfig/listing.twig"), "so-buyshop/template/product/manufacturer_info.twig", 23)->display(twig_array_merge($context, ["listingType" => ($context["listingType"] ?? null)]));
            // line 24
            echo "            </div>
\t\t";
        } else {
            // line 26
            echo "\t\t\t<p>";
            echo ($context["text_empty"] ?? null);
            echo "</p>
\t\t\t<div class=\"buttons\">
\t\t\t\t<div class=\"pull-right\"><a href=\"";
            // line 28
            echo ($context["continue"] ?? null);
            echo "\" class=\"btn btn-primary\">";
            echo ($context["button_continue"] ?? null);
            echo "</a></div>
\t\t\t</div>
\t\t";
        }
        // line 31
        echo "\t\t";
        echo ($context["content_bottom"] ?? null);
        echo "</div>
    ";
        // line 32
        echo ($context["column_right"] ?? null);
        echo "</div>
</div>
";
        // line 34
        echo ($context["footer"] ?? null);
    }

    public function getTemplateName()
    {
        return "so-buyshop/template/product/manufacturer_info.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  135 => 34,  130 => 32,  125 => 31,  117 => 28,  111 => 26,  107 => 24,  105 => 23,  102 => 22,  100 => 21,  98 => 20,  94 => 19,  87 => 18,  84 => 17,  81 => 16,  78 => 15,  75 => 14,  72 => 13,  69 => 12,  67 => 11,  63 => 10,  60 => 9,  49 => 7,  45 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "so-buyshop/template/product/manufacturer_info.twig", "/home/azhkhn/public_html/protidin.com.bd/catalog/view/theme/so-buyshop/template/product/manufacturer_info.twig");
    }
}
