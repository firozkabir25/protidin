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

/* so-buyshop/template/product/compare.twig */
class __TwigTemplate_f2813ff06f0e1df2d7ce4460ac17a4a8ba78e9cf61368d90db85be3b853a7b1a extends \Twig\Template
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
  ";
        // line 8
        if (($context["success"] ?? null)) {
            // line 9
            echo "  <div class=\"alert alert-success alert-dismissible\"><i class=\"fa fa-check-circle\"></i> ";
            echo ($context["success"] ?? null);
            echo "
    <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
  </div>
  ";
        }
        // line 13
        echo "  <div class=\"row\">";
        echo ($context["column_left"] ?? null);
        echo "
    ";
        // line 14
        if ((($context["column_left"] ?? null) && ($context["column_right"] ?? null))) {
            // line 15
            echo "    ";
            $context["class"] = "col-sm-6";
            // line 16
            echo "    ";
        } elseif ((($context["column_left"] ?? null) || ($context["column_right"] ?? null))) {
            // line 17
            echo "    ";
            $context["class"] = "col-sm-9";
            // line 18
            echo "    ";
        } else {
            // line 19
            echo "    ";
            $context["class"] = "col-sm-12";
            // line 20
            echo "    ";
        }
        // line 21
        echo "    <div id=\"content\" class=\"";
        echo ($context["class"] ?? null);
        echo "\">";
        echo ($context["content_top"] ?? null);
        echo "
      <h1>";
        // line 22
        echo ($context["heading_title"] ?? null);
        echo "</h1>
      ";
        // line 23
        if (($context["products"] ?? null)) {
            // line 24
            echo "      <table class=\"table table-bordered\">
        <thead>
          <tr>
            <td colspan=\"";
            // line 27
            echo (twig_length_filter($this->env, ($context["products"] ?? null)) + 1);
            echo "\"><strong>";
            echo ($context["text_product"] ?? null);
            echo "</strong></td>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>";
            // line 32
            echo ($context["text_name"] ?? null);
            echo "</td>
            ";
            // line 33
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 34
                echo "            <td><a href=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 34);
                echo "\"><strong>";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 34);
                echo "</strong></a></td>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 35
            echo " </tr>
          <tr>
            <td>";
            // line 37
            echo ($context["text_image"] ?? null);
            echo "</td>
            ";
            // line 38
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 39
                echo "            <td class=\"text-center\">";
                if (twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 39)) {
                    echo " <img src=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 39);
                    echo "\" alt=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 39);
                    echo "\" title=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 39);
                    echo "\" class=\"img-thumbnail\" /> ";
                }
                echo "</td>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 40
            echo " </tr>
          <tr>
            <td>";
            // line 42
            echo ($context["text_price"] ?? null);
            echo "</td>
            ";
            // line 43
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 44
                echo "            <td>";
                if (twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 44)) {
                    // line 45
                    echo "              <p class=\"price\">

              ";
                    // line 47
                    if ( !twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 47)) {
                        // line 48
                        echo "                
                 <span class=\"price-new\">";
                        // line 49
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 49);
                        echo "</span>
              ";
                    } else {
                        // line 50
                        echo " 
                 <span class=\"price-new\">";
                        // line 51
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 51);
                        echo "</span> <span class=\"price-old\">";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 51);
                        echo "</span>  
              ";
                    }
                    // line 53
                    echo "               </p>
              ";
                }
                // line 54
                echo "</td>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 55
            echo " </tr>
          <tr>
            <td>";
            // line 57
            echo ($context["text_model"] ?? null);
            echo "</td>
            ";
            // line 58
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 59
                echo "            <td>";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "model", [], "any", false, false, false, 59);
                echo "</td>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 60
            echo " </tr>
          <tr>
            <td>";
            // line 62
            echo ($context["text_manufacturer"] ?? null);
            echo "</td>
            ";
            // line 63
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 64
                echo "            <td>";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "manufacturer", [], "any", false, false, false, 64);
                echo "</td>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 65
            echo " </tr>
          <tr>
            <td>";
            // line 67
            echo ($context["text_availability"] ?? null);
            echo "</td>
            ";
            // line 68
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 69
                echo "            <td>";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "availability", [], "any", false, false, false, 69);
                echo "</td>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 70
            echo " </tr>
        ";
            // line 71
            if (($context["review_status"] ?? null)) {
                // line 72
                echo "        <tr>
          <td>";
                // line 73
                echo ($context["text_rating"] ?? null);
                echo "</td>
          ";
                // line 74
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                    // line 75
                    echo "          <td class=\"rating\"> ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(range(1, 5));
                    foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                        // line 76
                        echo "            ";
                        if ((twig_get_attribute($this->env, $this->source, $context["product"], "rating", [], "any", false, false, false, 76) < $context["i"])) {
                            echo " <span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-2x\"></i></span> ";
                        } else {
                            echo " <span class=\"fa fa-stack\"><i class=\"fa fa-star fa-stack-2x\"></i><i class=\"fa fa-star-o fa-stack-2x\"></i></span> ";
                        }
                        // line 77
                        echo "            ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    echo " <br />
            ";
                    // line 78
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "reviews", [], "any", false, false, false, 78);
                    echo "</td>
          ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 79
                echo " </tr>
        ";
            }
            // line 81
            echo "        <tr>
          <td>";
            // line 82
            echo ($context["text_summary"] ?? null);
            echo "</td>
          ";
            // line 83
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 84
                echo "          <td class=\"description\">";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "description", [], "any", false, false, false, 84);
                echo "</td>
          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 85
            echo " </tr>
        <tr>
          <td>";
            // line 87
            echo ($context["text_weight"] ?? null);
            echo "</td>
          ";
            // line 88
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 89
                echo "          <td>";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "weight", [], "any", false, false, false, 89);
                echo "</td>
          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 90
            echo " </tr>
        <tr>
          <td>";
            // line 92
            echo ($context["text_dimension"] ?? null);
            echo "</td>
          ";
            // line 93
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 94
                echo "          <td>";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "length", [], "any", false, false, false, 94);
                echo " x ";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "width", [], "any", false, false, false, 94);
                echo " x ";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "height", [], "any", false, false, false, 94);
                echo "</td>
          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 95
            echo " </tr>
          </tbody>
        
        ";
            // line 98
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["attribute_groups"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["attribute_group"]) {
                // line 99
                echo "        <thead>
          <tr>
            <td colspan=\"";
                // line 101
                echo (twig_length_filter($this->env, ($context["products"] ?? null)) + 1);
                echo "\"><strong>";
                echo twig_get_attribute($this->env, $this->source, $context["attribute_group"], "name", [], "any", false, false, false, 101);
                echo "</strong></td>
          </tr>
        </thead>
        ";
                // line 104
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["attribute_group"], "attribute", [], "any", false, false, false, 104));
                foreach ($context['_seq'] as $context["key"] => $context["attribute"]) {
                    // line 105
                    echo "        <tbody>
          <tr>
            <td>";
                    // line 107
                    echo twig_get_attribute($this->env, $this->source, $context["attribute"], "name", [], "any", false, false, false, 107);
                    echo "</td>
            ";
                    // line 108
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
                    foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                        // line 109
                        echo "            ";
                        if ((($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = twig_get_attribute($this->env, $this->source, $context["product"], "attribute", [], "any", false, false, false, 109)) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4[$context["key"]] ?? null) : null)) {
                            // line 110
                            echo "            <td> ";
                            echo (($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = twig_get_attribute($this->env, $this->source, $context["product"], "attribute", [], "any", false, false, false, 110)) && is_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) || $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 instanceof ArrayAccess ? ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144[$context["key"]] ?? null) : null);
                            echo "</td>
            ";
                        } else {
                            // line 112
                            echo "            <td></td>
            ";
                        }
                        // line 114
                        echo "            ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 115
                    echo "          </tr>
        </tbody>
        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['key'], $context['attribute'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 118
                echo "        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['attribute_group'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 119
            echo "        <tr>
          <td></td>
          ";
            // line 121
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 122
                echo "          <td><input type=\"button\" value=\"";
                echo ($context["button_cart"] ?? null);
                echo "\" class=\"btn btn-primary btn-block\" onclick=\"cart.add('";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 122);
                echo "', '";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "minimum", [], "any", false, false, false, 122);
                echo "');\" />
            <a href=\"";
                // line 123
                echo twig_get_attribute($this->env, $this->source, $context["product"], "remove", [], "any", false, false, false, 123);
                echo "\" class=\"btn btn-danger btn-block\">";
                echo ($context["button_remove"] ?? null);
                echo "</a></td>
          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 124
            echo " </tr>
      </table>
      ";
        } else {
            // line 127
            echo "      <p>";
            echo ($context["text_empty"] ?? null);
            echo "</p>
      <div class=\"buttons\">
        <div class=\"pull-right\"><a href=\"";
            // line 129
            echo ($context["continue"] ?? null);
            echo "\" class=\"btn btn-default\">";
            echo ($context["button_continue"] ?? null);
            echo "</a></div>
      </div>
      ";
        }
        // line 132
        echo "      ";
        echo ($context["content_bottom"] ?? null);
        echo "</div>
    ";
        // line 133
        echo ($context["column_right"] ?? null);
        echo "</div>
</div>
";
        // line 135
        echo ($context["footer"] ?? null);
        echo " ";
    }

    public function getTemplateName()
    {
        return "so-buyshop/template/product/compare.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  525 => 135,  520 => 133,  515 => 132,  507 => 129,  501 => 127,  496 => 124,  486 => 123,  477 => 122,  473 => 121,  469 => 119,  463 => 118,  455 => 115,  449 => 114,  445 => 112,  439 => 110,  436 => 109,  432 => 108,  428 => 107,  424 => 105,  420 => 104,  412 => 101,  408 => 99,  404 => 98,  399 => 95,  386 => 94,  382 => 93,  378 => 92,  374 => 90,  365 => 89,  361 => 88,  357 => 87,  353 => 85,  344 => 84,  340 => 83,  336 => 82,  333 => 81,  329 => 79,  321 => 78,  313 => 77,  306 => 76,  301 => 75,  297 => 74,  293 => 73,  290 => 72,  288 => 71,  285 => 70,  276 => 69,  272 => 68,  268 => 67,  264 => 65,  255 => 64,  251 => 63,  247 => 62,  243 => 60,  234 => 59,  230 => 58,  226 => 57,  222 => 55,  215 => 54,  211 => 53,  204 => 51,  201 => 50,  196 => 49,  193 => 48,  191 => 47,  187 => 45,  184 => 44,  180 => 43,  176 => 42,  172 => 40,  155 => 39,  151 => 38,  147 => 37,  143 => 35,  132 => 34,  128 => 33,  124 => 32,  114 => 27,  109 => 24,  107 => 23,  103 => 22,  96 => 21,  93 => 20,  90 => 19,  87 => 18,  84 => 17,  81 => 16,  78 => 15,  76 => 14,  71 => 13,  63 => 9,  61 => 8,  58 => 7,  47 => 5,  43 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "so-buyshop/template/product/compare.twig", "/home/azhkhn/public_html/protidin.com.bd/catalog/view/theme/so-buyshop/template/product/compare.twig");
    }
}
