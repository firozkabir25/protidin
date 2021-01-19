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

/* so-buyshop/template/product/search.twig */
class __TwigTemplate_c277aac3da29b1fc99dd8c669347d8702676b76c47daac2b45276c4af877a764 extends \Twig\Template
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
\t\t<div class=\"form-group\">
\t\t\t<h1>";
        // line 18
        echo ($context["heading_title"] ?? null);
        echo "</h1>
\t\t\t<label class=\"control-label\" for=\"input-search\">";
        // line 19
        echo ($context["entry_search"] ?? null);
        echo "</label>
\t\t  
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-sm-3\">
\t\t\t\t  <input type=\"text\" name=\"search\" value=\"";
        // line 23
        echo ($context["search"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["text_keyword"] ?? null);
        echo "\" id=\"input-search\" class=\"form-control\" />
\t\t\t\t</div>
\t\t\t\t<div class=\"col-sm-3\">
\t\t\t\t  <select name=\"category_id\" class=\"form-control\">
\t\t\t\t\t<option value=\"0\">";
        // line 27
        echo ($context["text_category"] ?? null);
        echo "</option>
\t\t\t\t\t";
        // line 28
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["categories"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["category_1"]) {
            // line 29
            echo "\t\t\t\t\t";
            if ((twig_get_attribute($this->env, $this->source, $context["category_1"], "category_id", [], "any", false, false, false, 29) == ($context["category_id"] ?? null))) {
                // line 30
                echo "\t\t\t\t\t<option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["category_1"], "category_id", [], "any", false, false, false, 30);
                echo "\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["category_1"], "name", [], "any", false, false, false, 30);
                echo "</option>
\t\t\t\t\t";
            } else {
                // line 32
                echo "\t\t\t\t\t<option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["category_1"], "category_id", [], "any", false, false, false, 32);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["category_1"], "name", [], "any", false, false, false, 32);
                echo "</option>
\t\t\t\t\t";
            }
            // line 34
            echo "\t\t\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["category_1"], "children", [], "any", false, false, false, 34));
            foreach ($context['_seq'] as $context["_key"] => $context["category_2"]) {
                // line 35
                echo "\t\t\t\t\t";
                if ((twig_get_attribute($this->env, $this->source, $context["category_2"], "category_id", [], "any", false, false, false, 35) == ($context["category_id"] ?? null))) {
                    // line 36
                    echo "\t\t\t\t\t<option value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["category_2"], "category_id", [], "any", false, false, false, 36);
                    echo "\" selected=\"selected\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
                    echo twig_get_attribute($this->env, $this->source, $context["category_2"], "name", [], "any", false, false, false, 36);
                    echo "</option>
\t\t\t\t\t";
                } else {
                    // line 38
                    echo "\t\t\t\t\t<option value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["category_2"], "category_id", [], "any", false, false, false, 38);
                    echo "\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
                    echo twig_get_attribute($this->env, $this->source, $context["category_2"], "name", [], "any", false, false, false, 38);
                    echo "</option>
\t\t\t\t\t";
                }
                // line 40
                echo "\t\t\t\t\t";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["category_2"], "children", [], "any", false, false, false, 40));
                foreach ($context['_seq'] as $context["_key"] => $context["category_3"]) {
                    // line 41
                    echo "\t\t\t\t\t";
                    if ((twig_get_attribute($this->env, $this->source, $context["category_3"], "category_id", [], "any", false, false, false, 41) == ($context["category_id"] ?? null))) {
                        // line 42
                        echo "\t\t\t\t\t<option value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["category_3"], "category_id", [], "any", false, false, false, 42);
                        echo "\" selected=\"selected\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
                        echo twig_get_attribute($this->env, $this->source, $context["category_3"], "name", [], "any", false, false, false, 42);
                        echo "</option>
\t\t\t\t\t";
                    } else {
                        // line 44
                        echo "\t\t\t\t\t<option value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["category_3"], "category_id", [], "any", false, false, false, 44);
                        echo "\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
                        echo twig_get_attribute($this->env, $this->source, $context["category_3"], "name", [], "any", false, false, false, 44);
                        echo "</option>
\t\t\t\t\t";
                    }
                    // line 46
                    echo "\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category_3'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 47
                echo "\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category_2'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 48
            echo "\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category_1'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 49
        echo "\t\t\t\t  </select>
\t\t\t\t</div>
\t\t\t<div class=\"col-sm-12\" style=\"margin: 15px 0;\">
\t\t\t\t<label class=\"checkbox-inline\">
\t\t\t\t\t";
        // line 53
        if (($context["sub_category"] ?? null)) {
            // line 54
            echo "\t\t\t\t\t<input type=\"checkbox\" name=\"sub_category\" value=\"1\" checked=\"checked\" />
\t\t\t\t\t";
        } else {
            // line 56
            echo "\t\t\t\t\t<input type=\"checkbox\" name=\"sub_category\" value=\"1\" />
\t\t\t\t\t";
        }
        // line 58
        echo "\t\t\t\t\t";
        echo ($context["text_sub_category"] ?? null);
        echo "
\t\t\t\t</label>
\t\t\t\t
\t\t\t\t<label class=\"checkbox-inline\">
\t\t\t\t  ";
        // line 62
        if (($context["description"] ?? null)) {
            // line 63
            echo "\t\t\t\t  <input type=\"checkbox\" name=\"description\" value=\"1\" id=\"description\" checked=\"checked\" />
\t\t\t\t  ";
        } else {
            // line 65
            echo "\t\t\t\t  <input type=\"checkbox\" name=\"description\" value=\"1\" id=\"description\" />
\t\t\t\t  ";
        }
        // line 67
        echo "\t\t\t\t  ";
        echo ($context["entry_description"] ?? null);
        echo "
\t\t\t  </label>
\t\t\t</div>
\t\t  </div>
\t\t 
\t\t\t
\t\t  
\t\t  <input type=\"button\" value=\"";
        // line 74
        echo ($context["button_search"] ?? null);
        echo "\" id=\"button-search\" class=\"btn btn-primary\" />
\t\t</div>
\t\t";
        // line 76
        if (($context["products"] ?? null)) {
            // line 77
            echo "\t\t
\t  
\t\t";
            // line 80
            echo "\t\t<div class=\"products-category\">
\t\t";
            // line 81
            $this->loadTemplate((($context["theme_directory"] ?? null) . "/template/soconfig/listing.twig"), "so-buyshop/template/product/search.twig", 81)->display(twig_array_merge($context, ["listingType" => ($context["listingType"] ?? null)]));
            // line 82
            echo "\t\t</div>
\t  
\t  
\t\t";
        } else {
            // line 86
            echo "\t\t\t<p>";
            echo ($context["text_empty"] ?? null);
            echo "</p>
\t\t\t<div class=\"buttons\">
\t\t\t\t<div class=\"pull-right\"><a href=\"";
            // line 88
            echo ($context["continue"] ?? null);
            echo "\" class=\"btn btn-primary\">";
            echo ($context["button_continue"] ?? null);
            echo "</a></div>
\t\t\t</div>
\t\t";
        }
        // line 91
        echo "\t  
      ";
        // line 92
        echo ($context["content_bottom"] ?? null);
        echo "</div>
    ";
        // line 93
        echo ($context["column_right"] ?? null);
        echo "</div>
</div>
<script type=\"text/javascript\"><!--
\$('#button-search').bind('click', function() {
\turl = 'index.php?route=product/search';

\tvar search = \$('#content input[name=\\'search\\']').prop('value');

\tif (search) {
\t\turl += '&search=' + encodeURIComponent(search);
\t}

\tvar category_id = \$('#content select[name=\\'category_id\\']').prop('value');

\tif (category_id > 0) {
\t\turl += '&category_id=' + encodeURIComponent(category_id);
\t}

\tvar sub_category = \$('#content input[name=\\'sub_category\\']:checked').prop('value');

\tif (sub_category) {
\t\turl += '&sub_category=true';
\t}

\tvar filter_description = \$('#content input[name=\\'description\\']:checked').prop('value');

\tif (filter_description) {
\t\turl += '&description=true';
\t}

\tlocation = url;
});

\$('#content input[name=\\'search\\']').bind('keydown', function(e) {
\tif (e.keyCode == 13) {
\t\t\$('#button-search').trigger('click');
\t}
});

\$('select[name=\\'category_id\\']').on('change', function() {
\tif (this.value == '0') {
\t\t\$('input[name=\\'sub_category\\']').prop('disabled', true);
\t} else {
\t\t\$('input[name=\\'sub_category\\']').prop('disabled', false);
\t}
});

\$('select[name=\\'category_id\\']').trigger('change');
--></script>
";
        // line 142
        echo ($context["footer"] ?? null);
    }

    public function getTemplateName()
    {
        return "so-buyshop/template/product/search.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  346 => 142,  294 => 93,  290 => 92,  287 => 91,  279 => 88,  273 => 86,  267 => 82,  265 => 81,  262 => 80,  258 => 77,  256 => 76,  251 => 74,  240 => 67,  236 => 65,  232 => 63,  230 => 62,  222 => 58,  218 => 56,  214 => 54,  212 => 53,  206 => 49,  200 => 48,  194 => 47,  188 => 46,  180 => 44,  172 => 42,  169 => 41,  164 => 40,  156 => 38,  148 => 36,  145 => 35,  140 => 34,  132 => 32,  124 => 30,  121 => 29,  117 => 28,  113 => 27,  104 => 23,  97 => 19,  93 => 18,  85 => 16,  82 => 15,  79 => 14,  76 => 13,  73 => 12,  70 => 11,  67 => 10,  65 => 9,  61 => 8,  58 => 7,  47 => 5,  43 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "so-buyshop/template/product/search.twig", "/home/azhkhn/public_html/protidin.com.bd/catalog/view/theme/so-buyshop/template/product/search.twig");
    }
}
