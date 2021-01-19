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

/* so-buyshop/template/extension/simple_blog/article.twig */
class __TwigTemplate_fb676a809c510acfac33fddfce0633127970ebf270d59a780cdf4e8155ff36fe extends \Twig\Template
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
";
        // line 2
        echo ($context["header"] ?? null);
        echo "

\t<div class=\"breadcrumbs \">
\t\t<div class=\"container\">
\t      \t<ul class=\"breadcrumb\">
\t\t\t\t";
        // line 7
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 8
            echo "\t\t\t\t<li><a href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 8);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 8);
            echo "</a></li>
\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 10
        echo "\t\t\t</ul>
\t    </div>
\t</div>
    <div class=\"container product-listing\">
        
        <div class=\"row\">
            ";
        // line 16
        echo ($context["column_left"] ?? null);
        echo "
            ";
        // line 17
        if ((($context["column_left"] ?? null) && ($context["column_right"] ?? null))) {
            // line 18
            echo "                ";
            $context["class"] = "col-sm-6 fluid-allsidebar";
            // line 19
            echo "            ";
        } elseif ((($context["column_left"] ?? null) || ($context["column_right"] ?? null))) {
            // line 20
            echo "                ";
            $context["class"] = "col-md-9 col-sm-12 fluid-sidebar";
            // line 21
            echo "            ";
        } else {
            // line 22
            echo "                ";
            $context["class"] = "col-sm-12";
            // line 23
            echo "            ";
        }
        // line 24
        echo "            
            <div id=\"content\" class=\"";
        // line 25
        echo ($context["class"] ?? null);
        echo "\">
                ";
        // line 26
        echo ($context["content_top"] ?? null);
        echo "
                
                ";
        // line 28
        if ((($context["column_left"] ?? null) || ($context["column_right"] ?? null))) {
            // line 29
            echo "\t\t\t\t<a href=\"javascript:void(0)\" class=\"open-sidebar hidden-lg hidden-md\"><i class=\"fa fa-bars\"></i>";
            echo ($context["text_sidebar"] ?? null);
            echo "</a>
\t\t\t\t\t<div class=\"sidebar-overlay \"></div>
\t\t\t\t";
        }
        // line 32
        echo "
\t\t\t\t";
        // line 33
        if (((isset($context["error_no_database"]) || array_key_exists("error_no_database", $context)) && (($context["error_no_database"] ?? null) == ""))) {
            // line 34
            echo "\t            <div class=\"blog-category clearfix\">
\t\t\t\t\t <div class=\"blog-header\">
\t\t\t\t\t\t<h3>";
            // line 36
            echo ($context["heading_title"] ?? null);
            echo "</h3>
\t\t\t\t\t\t";
            // line 37
            if (($context["image"] ?? null)) {
                echo "\t
\t\t\t\t\t\t<img  src=\"";
                // line 38
                echo ($context["image"] ?? null);
                echo "\" alt=\"";
                echo ($context["heading_title"] ?? null);
                echo "\" />
\t\t\t\t\t\t";
            }
            // line 40
            echo "\t\t\t\t\t\t";
            echo ((((isset($context["description"]) || array_key_exists("description", $context)) && ($context["description"] ?? null))) ? (($context["description"] ?? null)) : (""));
            echo "
\t\t\t\t\t</div>\t
\t\t\t\t

\t\t\t\t\t";
            // line 45
            echo "\t\t\t\t\t<div class=\"product-filter product-filter-top filters-panel\">
\t\t\t\t\t\t  <div class=\"row\">
\t\t\t\t\t\t\t\t<div class=\"col-sm-4 view-mode\">
\t\t\t\t\t\t\t\t\t<div class=\"list-view\">
\t\t\t\t\t\t\t\t\t\t<button type=\"button\" id=\"grid-view\" class=\"btn btn-view hidden-sm hidden-xs\">1</button>
\t\t\t\t\t\t\t\t\t\t<button type=\"button\" id=\"grid-view-2\" class=\"btn btn-view \">2</button>
\t\t\t\t\t\t\t\t\t  \t<button type=\"button\" id=\"grid-view-3\" class=\"btn btn-view hidden-sm hidden-xs \">3</button>
\t\t\t\t\t\t\t\t\t  \t<button type=\"button\" id=\"grid-view-4\" class=\"btn btn-view hidden-sm hidden-xs\">4</button>
\t\t\t\t\t\t\t\t\t\t<button type=\"button\" id=\"list-view\" class=\"btn btn-view list \"><i class=\"fa fa-bars\"></i></button>
\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t
\t\t\t\t\t\t  </div>
\t\t\t\t\t</div>

\t                <div class=\"blog-listitem row\">
\t                    ";
            // line 62
            if (($context["articles"] ?? null)) {
                // line 63
                echo "\t                        ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["articles"] ?? null));
                foreach ($context['_seq'] as $context["id_article"] => $context["article"]) {
                    // line 64
                    echo "
\t\t                        <div class=\"blog-item \">
\t\t                        \t<div class=\"blog-item-inner clearfix\">
\t\t\t\t\t\t\t\t\t\t";
                    // line 67
                    if (twig_get_attribute($this->env, $this->source, $context["article"], "image", [], "any", false, false, false, 67)) {
                        // line 68
                        echo "\t\t\t\t\t\t\t\t\t\t\t<div class=\"itemBlogImg clearfix\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"article-image\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a  class=\"popup-gallery\" href=\"";
                        // line 71
                        echo twig_get_attribute($this->env, $this->source, $context["article"], "image", [], "any", false, false, false, 71);
                        echo "\"><img  src=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["article"], "image", [], "any", false, false, false, 71);
                        echo "\" alt=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["article"], "article_title", [], "any", false, false, false, 71);
                        echo "\" /></a>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t

\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t";
                    }
                    // line 78
                    echo "\t\t\t\t\t\t\t\t\t\t<div class=\"itemBlogContent clearfix \">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"article-date\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"date\">
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    // line 81
                    $context["datetotime"] = twig_get_attribute($this->env, $this->source, $context["article"], "date_added", [], "any", false, false, false, 81);
                    // line 82
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t   ";
                    echo ($context["datetotime"] ?? null);
                    echo "
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"blog-content\">

\t\t\t\t\t\t\t\t\t\t  \t\t<div class=\"article-title font-title\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<h4><a href=\"";
                    // line 88
                    echo twig_get_attribute($this->env, $this->source, $context["article"], "href", [], "any", false, false, false, 88);
                    echo "\">";
                    echo twig_capitalize_string_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "article_title", [], "any", false, false, false, 88));
                    echo "</a></h4>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t  \t\t
\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t \t<p class=\"article-description\" >
\t\t\t\t\t\t\t\t\t\t\t\t\t ";
                    // line 94
                    echo twig_get_attribute($this->env, $this->source, $context["article"], "description", [], "any", false, false, false, 94);
                    echo "
\t\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"blog-meta\">
\t\t\t\t\t\t\t\t\t\t  \t\t\t<span class=\"author hidden\"><i class=\"fa fa-user\"></i><span>Post by </span>";
                    // line 97
                    echo twig_get_attribute($this->env, $this->source, $context["article"], "author_name", [], "any", false, false, false, 97);
                    echo "</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    // line 98
                    if (twig_get_attribute($this->env, $this->source, $context["article"], "allow_comment", [], "any", false, false, false, 98)) {
                        // line 99
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"comment_count\"><a href=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["article"], "comment_href", [], "any", false, false, false, 99);
                        echo "#comment-section\">";
                        echo twig_get_attribute($this->env, $this->source, $context["article"], "total_comment", [], "any", false, false, false, 99);
                        echo "</a><i class=\"fa fa-comments\"></i></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    }
                    // line 101
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"btn-readmore font-title\" href=\"";
                    // line 103
                    echo twig_get_attribute($this->env, $this->source, $context["article"], "href", [], "any", false, false, false, 103);
                    echo "\">";
                    echo ($context["button_continue_reading"] ?? null);
                    echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-arrow-circle-right\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t</a>

\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t                        </div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t                    \t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['id_article'], $context['article'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 113
                echo "\t                    ";
            } else {
                // line 114
                echo "\t                        <div class=\"col-xs-12\">
\t\t\t\t\t\t\t\t<h3 class=\"text-center\">";
                // line 115
                echo ($context["text_no_found"] ?? null);
                echo "</h3>
\t\t\t\t\t\t\t</div>
\t                    ";
            }
            // line 118
            echo "\t                </div> 
\t\t\t\t\t
\t\t\t\t\t<script type=\"text/javascript\"><!--
\t\t\t\t\treinitView();
\t\t\t\t\tfunction getParameterByName(name, url) {
\t\t\t\t\t    if (!url) url = window.location.href;
\t\t\t\t\t    name = name.replace(/[\\[\\]]/g, \"\\\\\$&\");
\t\t\t\t\t    var regex = new RegExp(\"[?&]\" + name + \"(=([^&#]*)|&|#|\$)\"),
\t\t\t\t\t        results = regex.exec(url);
\t\t\t\t\t    if (!results) return null;
\t\t\t\t\t    if (!results[2]) return '';
\t\t\t\t\t    return decodeURIComponent(results[2].replace(/\\+/g, \" \"));
\t\t\t\t\t}
\t\t\t\t\tfunction reinitView() {
\t\t\t\t\t\t
\t\t\t\t\t\t\$('.view-mode .list-view button').bind(\"click\", function() {
\t\t\t\t\t\t\t\$(this).parent().find('button').removeClass('active');
\t\t\t\t\t\t\t\$(this).addClass('active');
\t\t\t\t\t\t});\t
\t\t\t\t\t\t// Product List
\t\t\t\t\t\t\$('#list-view').click(function() {
\t\t\t\t\t\t\t\$('#content .blog-item').attr('class', 'blog-item blog-list col-xs-12');
\t\t\t\t\t\t\tlocalStorage.setItem('blogview', 'blog-list');
\t\t\t\t\t\t});

\t\t\t\t\t\t// Product Grid
\t\t\t\t\t\t\$('#grid-view').click(function() {
\t\t\t\t\t\t\t\$('#content .blog-item').attr('class', 'blog-item blog-grid blog-grid-1 col-sm-12 col-xs-12');
\t\t\t\t\t\t\tlocalStorage.setItem('blogview', 'blog-grid');
\t\t\t\t\t\t});

\t\t\t\t\t\t// Product Grid 2
\t\t\t\t\t\t\$('#grid-view-2').click(function() {
\t\t\t\t\t\t\t\$('#content .blog-item').attr('class', 'blog-item blog-grid blog-grid-2 col-lg-6 col-md-6 col-sm-6 col-xs-12');
\t\t\t\t\t\t\tlocalStorage.setItem('blogview', 'blog-2');
\t\t\t\t\t\t});

\t\t\t\t\t\t// Product Grid 3
\t\t\t\t\t\t\$('#grid-view-3').click(function() {
\t\t\t\t\t\t\t\$('#content .blog-item').attr('class', 'blog-item blog-grid blog-grid-3 col-lg-4 col-md-4 col-sm-6 col-xs-12');
\t\t\t\t\t\t\tlocalStorage.setItem('blogview', 'blog-3');
\t\t\t\t\t\t});

\t\t\t\t\t\t// Product Grid 4
\t\t\t\t\t\t\$('#grid-view-4').click(function() {
\t\t\t\t\t\t\t\$('#content .blog-item').attr('class', 'blog-item blog-grid blog-grid-4 col-lg-3 col-md-4 col-sm-6 col-xs-12');
\t\t\t\t\t\t\tlocalStorage.setItem('blogview', 'blog-4');
\t\t\t\t\t\t});

\t\t\t\t\t\tvar url_blogview = getParameterByName('blogview'); // \"lorem\"
\t\t\t\t\t\tif(localStorage.getItem('blogview')== null) localStorage.setItem('blogview', '";
            // line 168
            echo ($context["simple_blog_columns"] ?? null);
            echo "');
\t\t\t\t\t\tif(url_blogview){
\t\t\t\t\t\t\tif (url_blogview == 'blog-grid') {
\t\t\t\t\t\t\t\t\$('#grid-view').trigger('click');
\t\t\t\t\t\t\t}  else if (url_blogview == 'blog-2'){
\t\t\t\t\t\t\t\t\$('#grid-view-2').trigger('click');
\t\t\t\t\t\t\t} else if (url_blogview == 'blog-3' ){
\t\t\t\t\t\t\t\t\$('#grid-view-3').trigger('click');
\t\t\t\t\t\t\t} else if (url_blogview == 'blog-4'){
\t\t\t\t\t\t\t\t\$('#grid-view-4').trigger('click');
\t\t\t\t\t\t\t} else{
\t\t\t\t\t\t\t\t\$('#list-view').trigger('click');
\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t
\t\t\t\t\t\t}else{

\t\t\t\t\t\t\tif (localStorage.getItem('blogview') == 'blog-grid') {
\t\t\t\t\t\t\t\t\$('#grid-view').trigger('click');
\t\t\t\t\t\t\t}  else if (localStorage.getItem('blogview') == 'blog-2'){
\t\t\t\t\t\t\t\t\$('#grid-view-2').trigger('click');
\t\t\t\t\t\t\t} else if (localStorage.getItem('blogview') == 'blog-3' ){
\t\t\t\t\t\t\t\t\$('#grid-view-3').trigger('click');
\t\t\t\t\t\t\t} else if (localStorage.getItem('blogview') == 'blog-4'){
\t\t\t\t\t\t\t\t\$('#grid-view-4').trigger('click');
\t\t\t\t\t\t\t} else{
\t\t\t\t\t\t\t\t\$('#list-view').trigger('click');
\t\t\t\t\t\t\t}
\t\t\t\t\t\t}
\t\t\t\t\t\t
\t\t\t\t\t}

\t\t\t\t\t//--></script> 
\t\t\t\t\t";
            // line 200
            if (($context["pagination"] ?? null)) {
                // line 201
                echo "\t                <div class=\"product-filter product-filter-bottom filters-panel clearfix\" >
\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<div class=\"col-md-12\"><div>";
                // line 204
                echo ($context["pagination"] ?? null);
                echo "</div></div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t";
            }
            // line 208
            echo "\t\t\t\t</div>
\t\t\t\t";
        } else {
            // line 210
            echo "\t\t\t\t\t<div class=\"alert alert-danger\"><i class=\"fa fa-exclamation-circle\"></i>
\t\t\t\t\t\t";
            // line 211
            echo ($context["error_no_database"] ?? null);
            echo "
\t\t\t\t\t</div>
\t\t\t\t";
        }
        // line 214
        echo "\t\t\t\t
                ";
        // line 215
        echo ($context["content_bottom"] ?? null);
        echo "
            </div>            
            
            ";
        // line 218
        echo ($context["column_right"] ?? null);
        echo "
        </div>        
    </div> 

";
        // line 222
        echo ($context["footer"] ?? null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "so-buyshop/template/extension/simple_blog/article.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  412 => 222,  405 => 218,  399 => 215,  396 => 214,  390 => 211,  387 => 210,  383 => 208,  376 => 204,  371 => 201,  369 => 200,  334 => 168,  282 => 118,  276 => 115,  273 => 114,  270 => 113,  252 => 103,  248 => 101,  240 => 99,  238 => 98,  234 => 97,  228 => 94,  217 => 88,  207 => 82,  205 => 81,  200 => 78,  186 => 71,  181 => 68,  179 => 67,  174 => 64,  169 => 63,  167 => 62,  148 => 45,  140 => 40,  133 => 38,  129 => 37,  125 => 36,  121 => 34,  119 => 33,  116 => 32,  109 => 29,  107 => 28,  102 => 26,  98 => 25,  95 => 24,  92 => 23,  89 => 22,  86 => 21,  83 => 20,  80 => 19,  77 => 18,  75 => 17,  71 => 16,  63 => 10,  52 => 8,  48 => 7,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "so-buyshop/template/extension/simple_blog/article.twig", "/home/azhkhn/public_html/protidin.com.bd/catalog/view/theme/so-buyshop/template/extension/simple_blog/article.twig");
    }
}
