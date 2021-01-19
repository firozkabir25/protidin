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

/* so-buyshop/template/product/gallery/gallery-bottom.twig */
class __TwigTemplate_440859134176467f1ffb84d6b14f86183ed463b444618eabf70902f135c14f72 extends \Twig\Template
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
        // line 3
        echo "<div class=\"large-image  ";
        echo ($context["class_honizol"] ?? null);
        echo "\">
\t<img itemprop=\"image\" class=\"product-image-zoom lazyload\" data-sizes=\"auto\" src=\"data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==\" data-src=\"";
        // line 4
        echo ($context["popup"] ?? null);
        echo "\" data-zoom-image=\"";
        echo ($context["popup"] ?? null);
        echo "\" title=\"";
        echo ($context["heading_title"] ?? null);
        echo "\" alt=\"";
        echo ($context["heading_title"] ?? null);
        echo "\" />
</div>

<div id=\"thumb-slider\" class=\"full_slider  contentslider--default\" data-rtl=\"";
        // line 7
        echo ($context["direction"] ?? null);
        echo "\" data-autoplay=\"no\"  data-pagination=\"no\" data-delay=\"4\" data-speed=\"0.6\" data-margin=\"10\"  data-items_column0=\"4\" data-items_column1=\"3\" data-items_column2=\"5\" data-items_column3=\"3\" data-items_column4=\"2\" data-arrows=\"yes\" data-lazyload=\"yes\" data-loop=\"no\" data-hoverpause=\"yes\">
\t";
        // line 8
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["images"] ?? null));
        foreach ($context['_seq'] as $context["key"] => $context["image"]) {
            // line 9
            echo "\t\t<div class=\"image-additional\">
\t\t<a data-index=\"";
            // line 10
            echo $context["key"];
            echo "\" class=\"img thumbnail \" data-image=\"";
            echo twig_get_attribute($this->env, $this->source, $context["image"], "popup", [], "any", false, false, false, 10);
            echo "\" title=\"";
            echo ($context["heading_title"] ?? null);
            echo "\">
\t\t\t<img class=\"lazyload\" data-sizes=\"auto\" src=\"data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==\" data-src=\"";
            // line 11
            echo twig_get_attribute($this->env, $this->source, $context["image"], "thumb", [], "any", false, false, false, 11);
            echo "\" title=\"";
            echo ($context["heading_title"] ?? null);
            echo "\" alt=\"";
            echo ($context["heading_title"] ?? null);
            echo "\" />
\t\t</a>
\t\t</div>
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['image'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 15
        echo "</div>


<script type=\"text/javascript\"><!--
\t\$(document).ready(function() {
\t\tvar zoomCollection = '.large-image img';
\t\t\$( zoomCollection ).elevateZoom({
\t\t\t//value zoomType (window,inner,lens)
\t\t\t";
        // line 23
        if (twig_get_attribute($this->env, $this->source, ($context["soconfig"] ?? null), "get_settings", [0 => "product_enablezoom"], "method", false, false, false, 23)) {
            // line 24
            echo "\t\t\tzoomType        : \"inner\",
\t\t\t";
        } else {
            // line 26
            echo "\t\t\tzoomType        :\"none\",
\t\t\t";
        }
        // line 28
        echo "\t\t\tlensSize    :'250',
\t\t\teasing:false,
\t\t\tscrollZoom : true,
\t\t\tgallery:'thumb-slider',
\t\t\tcursor: 'pointer',
\t\t\tgalleryActiveClass: \"active\",
\t\t});
\t\t\$(zoomCollection).bind('touchstart', function(){
\t\t    \$(zoomCollection).unbind('touchmove');
\t\t});
\t\t
\t\t";
        // line 39
        if (($context["images"] ?? null)) {
            // line 40
            echo "\t\t\$('.large-image img').magnificPopup({
\t\t\titems: [
\t\t\t";
            // line 42
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["images"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
                // line 43
                echo "\t\t\t\t{src: '";
                echo twig_get_attribute($this->env, $this->source, $context["image"], "popup", [], "any", false, false, false, 43);
                echo "'},
\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 45
            echo "\t\t\t],
\t\t\tgallery: { enabled: true, preload: [0,2] },
\t\t\ttype: 'image',
\t\t\tmainClass: 'mfp-fade',
\t\t\tcallbacks: {
\t\t\t\topen: function() {
\t\t\t\t\t";
            // line 51
            if (($context["images"] ?? null)) {
                // line 52
                echo "\t\t\t\t\t\tvar activeIndex = parseInt(\$('#thumb-slider .img.active').attr('data-index'));
\t\t\t\t\t";
            } else {
                // line 54
                echo "\t\t\t\t\t\tvar activeIndex = 0;
\t\t\t\t\t";
            }
            // line 56
            echo "\t\t\t\t\tvar magnificPopup = \$.magnificPopup.instance;
\t\t\t\t\tmagnificPopup.goTo(activeIndex);
\t\t\t\t}
\t\t\t}

\t\t});
\t\t";
        }
        // line 63
        echo "\t});
//--></script>";
    }

    public function getTemplateName()
    {
        return "so-buyshop/template/product/gallery/gallery-bottom.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  169 => 63,  160 => 56,  156 => 54,  152 => 52,  150 => 51,  142 => 45,  133 => 43,  129 => 42,  125 => 40,  123 => 39,  110 => 28,  106 => 26,  102 => 24,  100 => 23,  90 => 15,  76 => 11,  68 => 10,  65 => 9,  61 => 8,  57 => 7,  45 => 4,  40 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "so-buyshop/template/product/gallery/gallery-bottom.twig", "/home/azhkhn/public_html/protidin.com.bd/catalog/view/theme/so-buyshop/template/product/gallery/gallery-bottom.twig");
    }
}
