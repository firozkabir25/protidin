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

/* so-buyshop/template/product/manufacturer_list.twig */
class __TwigTemplate_9529965b7f5eddb879d76878d7213c75db779ab896e68491dac9beca7578bd70 extends \Twig\Template
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
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 5
            echo "    <li><a href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 5);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 5);
            echo "</a></li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 7
        echo "  </ul>
  <div class=\"row\">";
        // line 8
        echo ($context["column_left"] ?? null);
        echo "
    ";
        // line 9
        if ((($context["column_left"] ?? null) && ($context["column_right"] ?? null))) {
            // line 10
            echo "    ";
            $context["class"] = "col-sm-6";
            // line 11
            echo "    ";
        } elseif ((($context["column_left"] ?? null) || ($context["column_right"] ?? null))) {
            // line 12
            echo "    ";
            $context["class"] = "col-sm-9";
            // line 13
            echo "    ";
        } else {
            // line 14
            echo "    ";
            $context["class"] = "col-sm-12";
            // line 15
            echo "    ";
        }
        // line 16
        echo "    <div id=\"content\" class=\"";
        echo ($context["class"] ?? null);
        echo "\">";
        echo ($context["content_top"] ?? null);
        echo "
      <h1>";
        // line 17
        echo ($context["heading_title"] ?? null);
        echo "</h1>
     
\t\t";
        // line 19
        if (($context["categories"] ?? null)) {
            // line 20
            echo "\t\t\t<p><strong>";
            echo ($context["text_index"] ?? null);
            echo "</strong> ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["categories"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                // line 21
                echo "        &nbsp;&nbsp;&nbsp;<a href=\"index.php?route=product/manufacturer#";
                echo twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 21);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 21);
                echo "</a> ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo " </p>
      
\t\t\t";
            // line 23
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["categories"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                // line 24
                echo "      <h2 id=\"";
                echo twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 24);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 24);
                echo "</h2>
      ";
                // line 25
                if (twig_get_attribute($this->env, $this->source, $context["category"], "manufacturer", [], "any", false, false, false, 25)) {
                    // line 26
                    echo "
      ";
                    // line 27
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_array_batch(twig_get_attribute($this->env, $this->source, $context["category"], "manufacturer", [], "any", false, false, false, 27), 4));
                    foreach ($context['_seq'] as $context["_key"] => $context["manufacturers"]) {
                        // line 28
                        echo "      <div class=\"row\"> ";
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable($context["manufacturers"]);
                        foreach ($context['_seq'] as $context["_key"] => $context["manufacturer"]) {
                            // line 29
                            echo "        <div class=\"col-sm-3\"><a href=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["manufacturer"], "href", [], "any", false, false, false, 29);
                            echo "\">";
                            echo twig_get_attribute($this->env, $this->source, $context["manufacturer"], "name", [], "any", false, false, false, 29);
                            echo "</a></div>
        ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['manufacturer'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 30
                        echo " </div>
      ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['manufacturers'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 32
                    echo "      ";
                }
                // line 33
                echo "      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 34
            echo "
      ";
        } else {
            // line 36
            echo "      <p>";
            echo ($context["text_empty"] ?? null);
            echo "</p>
      <div class=\"buttons clearfix\">
        <div class=\"pull-right\"><a href=\"";
            // line 38
            echo ($context["continue"] ?? null);
            echo "\" class=\"btn btn-primary\">";
            echo ($context["button_continue"] ?? null);
            echo "</a></div>
      </div>
      ";
        }
        // line 41
        echo "\t  
      ";
        // line 42
        echo ($context["content_bottom"] ?? null);
        echo "</div>
    ";
        // line 43
        echo ($context["column_right"] ?? null);
        echo "</div>
</div>
";
        // line 45
        echo ($context["footer"] ?? null);
    }

    public function getTemplateName()
    {
        return "so-buyshop/template/product/manufacturer_list.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  201 => 45,  196 => 43,  192 => 42,  189 => 41,  181 => 38,  175 => 36,  171 => 34,  165 => 33,  162 => 32,  155 => 30,  144 => 29,  139 => 28,  135 => 27,  132 => 26,  130 => 25,  123 => 24,  119 => 23,  106 => 21,  99 => 20,  97 => 19,  92 => 17,  85 => 16,  82 => 15,  79 => 14,  76 => 13,  73 => 12,  70 => 11,  67 => 10,  65 => 9,  61 => 8,  58 => 7,  47 => 5,  43 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "so-buyshop/template/product/manufacturer_list.twig", "/home/azhkhn/public_html/protidin.com.bd/catalog/view/theme/so-buyshop/template/product/manufacturer_list.twig");
    }
}
