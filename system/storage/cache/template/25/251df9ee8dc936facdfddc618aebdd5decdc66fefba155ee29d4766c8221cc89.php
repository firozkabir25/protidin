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

/* so-buyshop/template/extension/module/so_filter_shop_by/default_search.twig */
class __TwigTemplate_c3b6f0189d5ad23d1c6fbb74cade082400a2f183f9509cb28dcde98ea7413edb extends \Twig\Template
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
        echo "<li class=\"so-filter-options\" data-option=\"search\">
\t<div class=\"so-filter-heading\">
\t\t<div class=\"so-filter-heading-text\">
\t\t\t<span>";
        // line 4
        echo twig_get_attribute($this->env, $this->source, ($context["obj_lang"] ?? null), "get", [0 => "text_search"], "method", false, false, false, 4);
        echo "</span>
\t\t</div>
\t\t<i class=\"fa fa-chevron-down\"></i>
\t</div>
\t<div class=\"so-filter-content-opts\">
\t\t<div class=\"so-filter-content-opts-container\">
\t\t\t<div class=\"so-filter-option\" data-type=\"search\">
\t\t\t\t<div class=\"so-option-container\">
\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" name=\"text_search\" id=\"text_search\" value=\"";
        // line 13
        echo ($context["text_search"] ?? null);
        echo "\">
\t\t\t\t\t\t<div class=\"input-group-btn\">
\t\t\t\t\t\t\t<button class=\"btn btn-default\" type=\"button\" id=\"submit_text_search\"><i class=\"fa fa-search\"></i></button>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
</li>
";
    }

    public function getTemplateName()
    {
        return "so-buyshop/template/extension/module/so_filter_shop_by/default_search.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  54 => 13,  42 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "so-buyshop/template/extension/module/so_filter_shop_by/default_search.twig", "/home/azhkhn/public_html/protidin.com.bd/catalog/view/theme/so-buyshop/template/extension/module/so_filter_shop_by/default_search.twig");
    }
}
