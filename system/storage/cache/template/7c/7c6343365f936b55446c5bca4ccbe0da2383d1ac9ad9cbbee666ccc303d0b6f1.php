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

/* so-buyshop/template/soconfig/subcategory.twig */
class __TwigTemplate_501b13739a24eae09ecfde34e0c4d336b640e11e8fa646eed0e18424bad66902 extends \Twig\Template
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
        $context["category_info"] = twig_get_attribute($this->env, $this->source, ($context["soconfig"] ?? null), "get_settings", [0 => "lstimg_cate_status"], "method", false, false, false, 9);
        // line 10
        if (($context["category_info"] ?? null)) {
            // line 11
            echo "\t<h3 class=\"title-category \">";
            echo ($context["heading_title"] ?? null);
            echo "</h3> 
\t";
            // line 13
            echo "\t";
            if ((($context["thumb"] ?? null) || ($context["description"] ?? null))) {
                // line 14
                echo "\t<div class=\"form-group category-info banners\">
\t\t\t";
                // line 15
                $context["class_category_info"] = (((($context["category_info"] ?? null) == 2)) ? ("col-sm-9 col-xs-12") : ("col-sm-12 col-xs-12"));
                // line 16
                echo "\t\t\t<div class=\" row\">
\t\t\t\t";
                // line 17
                if ((($context["thumb"] ?? null) && (($context["category_info"] ?? null) == 2))) {
                    // line 18
                    echo "\t\t\t\t\t<div class=\"img-cate col-sm-3 col-xs-12\"><img class=\"media-object lazyload\"  data-sizes=\"auto\" src=\"data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==\" data-src=\"";
                    echo ($context["thumb"] ?? null);
                    echo "\" alt=\"";
                    echo ($context["heading_title"] ?? null);
                    echo "\" title=\"";
                    echo ($context["heading_title"] ?? null);
                    echo "\" /></div>
\t\t\t\t";
                }
                // line 20
                echo "
\t\t\t\t";
                // line 21
                if (($context["description"] ?? null)) {
                    // line 22
                    echo "\t\t\t\t\t<div class=\"";
                    echo ($context["class_category_info"] ?? null);
                    echo "\">";
                    echo ($context["description"] ?? null);
                    echo "</div>
\t\t\t\t";
                }
                // line 24
                echo "\t\t\t\t
\t\t\t</div>
\t\t
\t\t
\t</div>
\t";
            }
        }
        // line 31
        echo "
";
        // line 33
        if ((($context["categories"] ?? null) && twig_get_attribute($this->env, $this->source, ($context["soconfig"] ?? null), "get_settings", [0 => "product_catalog_refine"], "method", false, false, false, 33))) {
            // line 34
            echo "\t<div class=\"refine-search form-group clearfix\">
\t\t<h3 class=\"title-category\">";
            // line 35
            echo ($context["text_refine"] ?? null);
            echo "</h3>
\t\t<ul class=\"refine-search__content \">
\t\t";
            // line 37
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["categories"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                // line 38
                echo "\t\t\t<li class=\"refine-search__subitem\">
\t\t\t\t";
                // line 39
                if ((twig_get_attribute($this->env, $this->source, ($context["soconfig"] ?? null), "get_settings", [0 => "product_catalog_refine"], "method", false, false, false, 39) == 1)) {
                    // line 40
                    echo "\t\t\t\t\t<a href=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["category"], "href", [], "any", false, false, false, 40);
                    echo "\" class=\"thumbnail\"><img class=\"lazyload\"  data-sizes=\"auto\" src=\"data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==\" data-src=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["category"], "thumb", [], "any", false, false, false, 40);
                    echo "\" alt=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 40);
                    echo "\" /> </a>
\t\t\t\t";
                } else {
                    // line 42
                    echo "\t\t\t\t\t<a href=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["category"], "href", [], "any", false, false, false, 42);
                    echo "\" class=\"thumbnail\"><img class=\"lazyload\"  data-sizes=\"auto\" src=\"data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==\" data-src=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["category"], "thumb", [], "any", false, false, false, 42);
                    echo "\" alt=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 42);
                    echo "\" /> </a>
\t\t\t\t\t<a href=\"";
                    // line 43
                    echo twig_get_attribute($this->env, $this->source, $context["category"], "href", [], "any", false, false, false, 43);
                    echo "\" class=\"text-center\">";
                    echo twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 43);
                    echo "</a>
\t\t\t\t";
                }
                // line 45
                echo "\t\t\t</li>
\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 47
            echo "\t\t</ul>
\t\t<script type=\"text/javascript\"><!--
\t\t\tcatalog_refine_number = ";
            // line 49
            echo twig_get_attribute($this->env, $this->source, ($context["soconfig"] ?? null), "get_settings", [0 => "catalog_refine_number"], "method", false, false, false, 49);
            echo ";
\t\t\tif(catalog_refine_number <= \$('.refine-search__content > li').length)
\t\t\t\$('.refine-search__content').append('<li class=\"refine-loadmore\"><i class=\"fa fa-plus\"></i> <span class=\"more-view\"> ";
            // line 51
            echo ($context["text_refine_more"] ?? null);
            echo " </span></li>');

\t\t\tvar show_catalog_refine_number = catalog_refine_number-1 ;
\t\t\t\$('ul.refine-search__content > li.refine-search__subitem').each(function(i){
\t\t\t\tif(i>show_catalog_refine_number){
\t\t\t\t\t\$(this).css('display', 'none');
\t\t\t\t}
\t\t\t});

\t\t\t\$(\"ul.refine-search__content .refine-loadmore\").click(function(){
\t\t\t\tif(\$(this).hasClass('open')){
\t\t\t\t\t\$('ul.refine-search__content li.refine-search__subitem').each(function(i){
\t\t\t\t\t\tif(i>show_catalog_refine_number){
\t\t\t\t\t\t\t\$(this).slideUp(200);
\t\t\t\t\t\t\t\$(this).css('display', 'none');
\t\t\t\t\t\t}
\t\t\t\t\t});
\t\t\t\t\t\$(this).removeClass('open');
\t\t\t\t\t\$('.refine-loadmore').html('<i class=\"fa fa-plus\"></i> <span class=\"more-view\">";
            // line 69
            echo ($context["text_refine_more"] ?? null);
            echo " </span>');

\t\t\t\t}else{
\t\t\t\t\t\$('ul.refine-search__content li.refine-search__subitem').each(function(i){
\t\t\t\t\t\tif(i>show_catalog_refine_number){
\t\t\t\t\t\t\t\$(this).slideDown(200);
\t\t\t\t\t\t}
\t\t\t\t\t});
\t\t\t\t\t\$(this).addClass('open');
\t\t\t\t\t\$('.refine-loadmore').html('<i class=\"fa fa-minus\"></i> <span class=\"more-view\">";
            // line 78
            echo ($context["text_refine_less"] ?? null);
            echo " </span>');
\t\t\t\t}
\t\t\t});
\t\t//--></script> 
\t\t
\t\t
\t</div>
";
        }
    }

    public function getTemplateName()
    {
        return "so-buyshop/template/soconfig/subcategory.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  188 => 78,  176 => 69,  155 => 51,  150 => 49,  146 => 47,  139 => 45,  132 => 43,  123 => 42,  113 => 40,  111 => 39,  108 => 38,  104 => 37,  99 => 35,  96 => 34,  94 => 33,  91 => 31,  82 => 24,  74 => 22,  72 => 21,  69 => 20,  59 => 18,  57 => 17,  54 => 16,  52 => 15,  49 => 14,  46 => 13,  41 => 11,  39 => 10,  37 => 9,);
    }

    public function getSourceContext()
    {
        return new Source("", "so-buyshop/template/soconfig/subcategory.twig", "/home/azhkhn/public_html/protidin.com.bd/catalog/view/theme/so-buyshop/template/soconfig/subcategory.twig");
    }
}
