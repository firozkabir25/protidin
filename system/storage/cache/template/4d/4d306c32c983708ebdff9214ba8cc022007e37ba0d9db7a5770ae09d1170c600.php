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

/* so-buyshop/template/extension/module/category.twig */
class __TwigTemplate_9399bff5cbd3782adbf8dbd23c56cb76243f27e8c127612708ad96cbab4560f9 extends \Twig\Template
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
        echo "
<div class=\"module category-style\">
  <h3 class=\"modtitle\"><span>";
        // line 3
        echo ($context["heading_title"] ?? null);
        echo " </span></h3>
  <div class=\"mod-content box-category\">
    <ul class=\"accordion\" id=\"accordion-category\">
      ";
        // line 6
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["categories"] ?? null));
        foreach ($context['_seq'] as $context["i"] => $context["category"]) {
            echo " 
\t\t<li class=\"panel\">
\t\t\t";
            // line 8
            if ((twig_get_attribute($this->env, $this->source, $context["category"], "category_id", [], "any", false, false, false, 8) == ($context["category_id"] ?? null))) {
                echo " 
\t\t\t\t<a href=\"";
                // line 9
                echo twig_get_attribute($this->env, $this->source, $context["category"], "href", [], "any", false, false, false, 9);
                echo " \" class=\"active\">";
                echo twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 9);
                echo " </a>
\t\t\t";
            } else {
                // line 10
                echo "   
\t\t\t\t<a href=\"";
                // line 11
                echo twig_get_attribute($this->env, $this->source, $context["category"], "href", [], "any", false, false, false, 11);
                echo " \">";
                echo twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 11);
                echo " </a>
\t\t\t";
            }
            // line 12
            echo " 
\t\t\t\t\t\t
\t\t\t";
            // line 14
            if (twig_get_attribute($this->env, $this->source, $context["category"], "children", [], "any", false, false, false, 14)) {
                echo " 
\t\t\t\t<span class=\"head\"><a  class=\"pull-right accordion-toggle";
                // line 15
                if ((twig_get_attribute($this->env, $this->source, $context["category"], "category_id", [], "any", false, false, false, 15) != ($context["category_id"] ?? null))) {
                    echo " ";
                    echo " collapsed";
                    echo " ";
                }
                echo " \" data-toggle=\"collapse\" data-parent=\"#accordion-category\" href=\"#category";
                echo $context["i"];
                echo " \"></a></span>
\t\t\t\t<div id=\"category";
                // line 16
                echo $context["i"];
                echo "\" class=\"panel-collapse collapse ";
                if ((twig_get_attribute($this->env, $this->source, $context["category"], "category_id", [], "any", false, false, false, 16) == ($context["category_id"] ?? null))) {
                    echo " ";
                    echo "in";
                    echo " ";
                }
                echo " \" style=\"clear:both\">
\t\t\t\t\t<ul>
\t\t\t\t\t   ";
                // line 18
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["category"], "children", [], "any", false, false, false, 18));
                foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                    echo " 
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t";
                    // line 20
                    if ((twig_get_attribute($this->env, $this->source, $context["child"], "category_id", [], "any", false, false, false, 20) == ($context["child_id"] ?? null))) {
                        echo " 
\t\t\t\t\t\t\t\t<a href=\"";
                        // line 21
                        echo twig_get_attribute($this->env, $this->source, $context["child"], "href", [], "any", false, false, false, 21);
                        echo " \" class=\"active\">";
                        echo twig_get_attribute($this->env, $this->source, $context["child"], "name", [], "any", false, false, false, 21);
                        echo " </a>
\t\t\t\t\t\t\t";
                    } else {
                        // line 22
                        echo "   
\t\t\t\t\t\t\t\t<a href=\"";
                        // line 23
                        echo twig_get_attribute($this->env, $this->source, $context["child"], "href", [], "any", false, false, false, 23);
                        echo " \">";
                        echo twig_get_attribute($this->env, $this->source, $context["child"], "name", [], "any", false, false, false, 23);
                        echo " </a>
\t\t\t\t\t\t\t";
                    }
                    // line 24
                    echo " 
\t\t\t\t\t\t</li>
\t\t\t\t\t   ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 27
                echo "\t\t\t\t\t</ul>
\t\t\t\t</div>
\t\t\t\t
\t\t\t";
            }
            // line 30
            echo " 
\t\t</li>
       ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['i'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
        echo "    </ul>
  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "so-buyshop/template/extension/module/category.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  154 => 33,  146 => 30,  140 => 27,  132 => 24,  125 => 23,  122 => 22,  115 => 21,  111 => 20,  104 => 18,  93 => 16,  83 => 15,  79 => 14,  75 => 12,  68 => 11,  65 => 10,  58 => 9,  54 => 8,  47 => 6,  41 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "so-buyshop/template/extension/module/category.twig", "/home/azhkhn/public_html/protidin.com.bd/catalog/view/theme/so-buyshop/template/extension/module/category.twig");
    }
}
