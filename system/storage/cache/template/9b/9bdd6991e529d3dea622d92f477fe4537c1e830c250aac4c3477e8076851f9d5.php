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

/* so-buyshop/template/extension/module/so_categories/default_theme2.twig */
class __TwigTemplate_c7ada1d76b689cdc1c4be660641fd81373525fb4098e1e3c352b400dfdfd8246 extends \Twig\Template
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
        echo "<div class=\"cat-wrap theme2\">
\t";
        // line 2
        $context["i"] = 0;
        // line 3
        echo "\t";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["list"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["items"]) {
            // line 4
            echo "\t\t";
            $context["i"] = (($context["i"] ?? null) + 1);
            // line 5
            echo "\t\t<div class=\"content-box content-box-";
            echo ($context["i"] ?? null);
            echo "\">
\t\t\t<div class=\"content-box-inner\">
\t\t\t\t<div class=\"parent-cat\">\t\t\t\t
\t\t\t\t\t";
            // line 8
            if (((twig_get_attribute($this->env, $this->source, $context["items"], "image", [], "any", false, false, false, 8) && (twig_get_attribute($this->env, $this->source, $context["items"], "image", [], "any", false, false, false, 8) != "")) && (twig_get_attribute($this->env, $this->source, $context["items"], "product_image", [], "any", false, false, false, 8) == 1))) {
                // line 9
                echo "\t\t\t\t\t\t<div class=\"image-cat\">
\t\t\t\t\t\t\t<a href=\"";
                // line 10
                echo twig_get_attribute($this->env, $this->source, $context["items"], "link", [], "any", false, false, false, 10);
                echo "\"
\t\t\t\t\t\t\t   title=\"";
                // line 11
                echo twig_get_attribute($this->env, $this->source, $context["items"], "title", [], "any", false, false, false, 11);
                echo "\" target=\"";
                echo ($context["item_link_target"] ?? null);
                echo "\" >
\t\t\t\t\t\t\t\t<img class=\"lazyload\" data-sizes=\"auto\" src=\"data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==\" data-src=\"";
                // line 12
                echo twig_get_attribute($this->env, $this->source, $context["items"], "image", [], "any", false, false, false, 12);
                echo "\" title=\"";
                echo twig_get_attribute($this->env, $this->source, $context["items"], "title", [], "any", false, false, false, 12);
                echo "\" alt=\"";
                echo twig_get_attribute($this->env, $this->source, $context["items"], "title", [], "any", false, false, false, 12);
                echo "\" />
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t";
            }
            // line 16
            echo "\t\t\t\t</div>

\t\t\t\t<div class=\"content-box-info\">\t\t\t\t\t
\t\t\t\t\t";
            // line 19
            if (($context["cat_title_display"] ?? null)) {
                // line 20
                echo "\t\t\t\t\t\t<div class=\"cat-title\">
\t\t\t\t\t\t\t<a href=\"";
                // line 21
                echo twig_get_attribute($this->env, $this->source, $context["items"], "link", [], "any", false, false, false, 21);
                echo "\"
\t\t\t\t\t\t\t   title=\"";
                // line 22
                echo twig_get_attribute($this->env, $this->source, $context["items"], "title", [], "any", false, false, false, 22);
                echo "\" target=\"";
                echo ($context["item_link_target"] ?? null);
                echo "\" >
\t\t\t\t\t\t\t\t";
                // line 23
                echo twig_get_attribute($this->env, $this->source, $context["items"], "title_maxlength", [], "any", false, false, false, 23);
                echo "
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t";
            }
            // line 27
            echo "\t\t\t\t
\t\t\t\t\t";
            // line 28
            if (($context["cat_sub_title_display"] ?? null)) {
                // line 29
                echo "\t\t\t\t\t\t<div class=\"child-cat\">
\t\t\t\t\t\t\t";
                // line 30
                if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, $context["items"], "child_cat", [], "any", false, false, false, 30))) {
                    // line 31
                    echo "\t\t\t\t\t\t\t\t";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["items"], "child_cat", [], "any", false, false, false, 31));
                    foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                        // line 32
                        echo "\t\t\t\t\t\t\t\t\t<div class=\"arrow\"></div>
\t\t\t\t\t\t\t\t\t<div class=\"child-cat-title\">
\t\t\t\t\t\t\t\t\t\t<a href=\"";
                        // line 34
                        echo twig_get_attribute($this->env, $this->source, $context["item"], "link", [], "any", false, false, false, 34);
                        echo "\" target=\"";
                        echo ($context["item_link_target"] ?? null);
                        echo "\">
\t\t\t\t\t\t\t\t\t\t\t";
                        // line 35
                        if (((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, false, 35)) > ($context["cat_sub_title_maxcharacs"] ?? null)) && (($context["cat_sub_title_maxcharacs"] ?? null) != 0))) {
                            // line 36
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t";
                            echo twig_slice($this->env, strip_tags(twig_get_attribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, false, 36)), 0, ($context["cat_sub_title_maxcharacs"] ?? null));
                            echo "
\t\t\t\t\t\t\t\t\t\t\t";
                        } else {
                            // line 37
                            echo "\t
\t\t\t\t\t\t\t\t\t\t\t\t";
                            // line 38
                            echo twig_get_attribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, false, 38);
                            echo "
\t\t\t\t\t\t\t\t\t\t\t";
                        }
                        // line 40
                        echo "
\t\t\t\t\t\t\t\t\t\t\t";
                        // line 41
                        if (($context["cat_all_product"] ?? null)) {
                            // line 42
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t";
                            echo (("(" . twig_get_attribute($this->env, $this->source, $context["item"], "all_product", [], "any", false, false, false, 42)) . ")");
                            echo "
\t\t\t\t\t\t\t\t\t\t\t";
                        }
                        // line 44
                        echo "\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 47
                    echo "\t\t\t\t\t\t\t";
                } else {
                    // line 48
                    echo "\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t";
                    // line 49
                    echo twig_get_attribute($this->env, $this->source, ($context["objlang"] ?? null), "get", [0 => "text_noitem"], "method", false, false, false, 49);
                    echo "
\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t";
                }
                // line 52
                echo "\t\t\t\t\t\t</div>
\t\t\t\t\t";
            }
            // line 54
            echo "
\t\t\t\t</div>
\t\t\t</div>

\t\t\t<div class=\"view-pro\">
\t\t\t\t<a href=\"";
            // line 59
            echo twig_get_attribute($this->env, $this->source, $context["items"], "link", [], "any", false, false, false, 59);
            echo "\"
\t\t\t\t   title=\"";
            // line 60
            echo twig_get_attribute($this->env, $this->source, $context["items"], "title", [], "any", false, false, false, 60);
            echo "\" target=\"";
            echo ($context["item_link_target"] ?? null);
            echo "\" >
\t\t\t\t\tView products
\t\t\t\t</a>
\t\t\t</div>

\t\t</div>
\t\t";
            // line 66
            $context["clear"] = "clr1";
            // line 67
            echo "\t\t";
            if (((($context["i"] ?? null) % 2) == 0)) {
                echo " ";
                $context["clear"] = (($context["clear"] ?? null) . " clr2");
                echo " ";
            }
            // line 68
            echo "\t\t";
            if (((($context["i"] ?? null) % 3) == 0)) {
                echo " ";
                $context["clear"] = (($context["clear"] ?? null) . " clr3");
                echo " ";
            }
            // line 69
            echo "\t\t";
            if (((($context["i"] ?? null) % 4) == 0)) {
                echo " ";
                $context["clear"] = (($context["clear"] ?? null) . " clr4");
                echo " ";
            }
            // line 70
            echo "\t\t";
            if (((($context["i"] ?? null) % 5) == 0)) {
                echo " ";
                $context["clear"] = (($context["clear"] ?? null) . " clr5");
                echo " ";
            }
            // line 71
            echo "\t\t";
            if (((($context["i"] ?? null) % 6) == 0)) {
                echo " ";
                $context["clear"] = (($context["clear"] ?? null) . " clr6");
                echo " ";
            }
            // line 72
            echo "\t\t<div class=\"";
            echo ($context["clear"] ?? null);
            echo "\"></div>
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['items'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 74
        echo "</div>";
    }

    public function getTemplateName()
    {
        return "so-buyshop/template/extension/module/so_categories/default_theme2.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  254 => 74,  245 => 72,  238 => 71,  231 => 70,  224 => 69,  217 => 68,  210 => 67,  208 => 66,  197 => 60,  193 => 59,  186 => 54,  182 => 52,  176 => 49,  173 => 48,  170 => 47,  162 => 44,  156 => 42,  154 => 41,  151 => 40,  146 => 38,  143 => 37,  137 => 36,  135 => 35,  129 => 34,  125 => 32,  120 => 31,  118 => 30,  115 => 29,  113 => 28,  110 => 27,  103 => 23,  97 => 22,  93 => 21,  90 => 20,  88 => 19,  83 => 16,  72 => 12,  66 => 11,  62 => 10,  59 => 9,  57 => 8,  50 => 5,  47 => 4,  42 => 3,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "so-buyshop/template/extension/module/so_categories/default_theme2.twig", "/home/azhkhn/public_html/protidin.com.bd/catalog/view/theme/so-buyshop/template/extension/module/so_categories/default_theme2.twig");
    }
}
