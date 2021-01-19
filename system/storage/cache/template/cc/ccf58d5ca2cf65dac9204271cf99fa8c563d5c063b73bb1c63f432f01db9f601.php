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

/* so-buyshop/template/extension/module/so_instagram_gallery/default.twig */
class __TwigTemplate_1862f352db1521902c852677a296df2776881315844e17727c7be8ba4e6d8824 extends \Twig\Template
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
        echo "\t
";
        // line 2
        $context["class_instagram"] = ((((((((("instagram00-" . ($context["nb_column0"] ?? null)) . " instagram01-") . ($context["nb_column1"] ?? null)) . " instagram02-") . ($context["nb_column2"] ?? null)) . " instagram03-") . ($context["nb_column3"] ?? null)) . " instagram04-") . ($context["nb_column4"] ?? null));
        // line 3
        $context["cls_btn_page"] = (((($context["button_page"] ?? null) == "top")) ? ("button-type1") : ("button-type2"));
        // line 4
        $context["btn_type"] = (((($context["button_page"] ?? null) == "top")) ? ("button-type1") : ("button-type2"));
        // line 5
        $context["btn_prev"] = (((($context["button_page"] ?? null) == "top")) ? ("&#171") : ("&#139"));
        // line 6
        $context["btn_next"] = (((($context["button_page"] ?? null) == "top")) ? ("&#187") : ("&#155"));
        // line 7
        $context["nb_rows"] = ($context["row"] ?? null);
        // line 8
        $context["navs"] = (((($context["navs"] ?? null) == 0)) ? ("false") : ("true"));
        // line 9
        $context["dots"] = (((($context["dots"] ?? null) == 0)) ? ("false") : ("true"));
        // line 10
        echo "
\t<div class=\"module footer-links";
        // line 11
        echo ($context["direction_class"] ?? null);
        echo " ";
        echo ($context["class_suffix"] ?? null);
        echo " \">
\t\t";
        // line 12
        if (($context["disp_title_module"] ?? null)) {
            echo " 
\t\t\t<h4 class=\"title-footer\">";
            // line 13
            echo ($context["head_name"] ?? null);
            echo "</h4>
\t\t";
        }
        // line 14
        echo " 

\t\t";
        // line 16
        if ((($context["pre_text"] ?? null) != " ")) {
            // line 17
            echo "\t\t\t<div class=\"form-group\">
\t\t\t\t";
            // line 18
            echo ($context["pre_text"] ?? null);
            echo "
\t\t\t</div>
\t\t";
        }
        // line 21
        echo "\t\t
\t\t<div class=\"modcontent\">
\t\t\t
\t\t\t<div class=\"so-instagram-gallery ";
        // line 24
        echo ($context["cls_btn_page"] ?? null);
        echo " ";
        echo ($context["count"] ?? null);
        echo "\" id=\"";
        echo ($context["moduleid"] ?? null);
        echo "\">
\t\t\t\t";
        // line 25
        if (((isset($context["count"]) || array_key_exists("count", $context)) && twig_length_filter($this->env, ($context["count"] ?? null)))) {
            echo " 
\t\t\t\t\t";
            // line 26
            if ((($context["type_show"] ?? null) == "slider")) {
                echo " 
\t\t\t\t\t<div class=\"instagram-items-inner owl2-carousel\">
\t\t\t\t\t";
            } else {
                // line 28
                echo "   
\t\t\t\t\t<div class=\"instagram-items-inner ";
                // line 29
                echo ($context["class_instagram"] ?? null);
                echo "\">
\t\t\t\t\t";
            }
            // line 30
            echo "  

\t\t\t\t\t";
            // line 32
            $context["j"] = 0;
            // line 33
            echo "\t\t\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(0, ($context["count"] ?? null)));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 34
                echo "\t\t\t\t\t\t";
                $context["j"] = (($context["j"] ?? null) + 1);
                echo " 

\t\t\t\t\t\t";
                // line 36
                if (((($context["type_show"] ?? null) == "slider") && (((($context["j"] ?? null) % ($context["nb_rows"] ?? null)) == 1) || (($context["nb_rows"] ?? null) == 1)))) {
                    echo " 
\t\t\t\t\t\t<div class=\"instagram-item\">
\t\t\t\t\t\t";
                }
                // line 39
                echo "
\t\t\t\t\t\t";
                // line 40
                if ((($context["type_show"] ?? null) == "simple")) {
                    echo " 
\t\t\t\t\t\t<div class=\"instagram-item ";
                    // line 41
                    echo $context["i"];
                    echo "\">
\t\t\t\t\t\t";
                }
                // line 42
                echo " 
\t\t\t\t\t\t\t<div class=\"instagram_users\">
\t\t\t\t\t\t\t\t<div class=\"img_users\">
\t\t\t\t\t\t\t\t\t<a title=\"";
                // line 45
                echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = twig_get_attribute($this->env, $this->source, ($context["json_output"] ?? null), "data", [], "any", false, false, false, 45)) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4[$context["i"]] ?? null) : null), "user", [], "any", false, false, false, 45), "full_name", [], "any", false, false, false, 45);
                echo "\" data-href=\"";
                echo twig_get_attribute($this->env, $this->source, (($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = twig_get_attribute($this->env, $this->source, ($context["json_output"] ?? null), "data", [], "any", false, false, false, 45)) && is_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) || $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 instanceof ArrayAccess ? ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144[$context["i"]] ?? null) : null), "link", [], "any", false, false, false, 45);
                echo "\" class=\"instagram_gallery_image gallery_image_";
                echo ($context["moduleid"] ?? null);
                echo "\" rel=\"\" href=\"";
                echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b = twig_get_attribute($this->env, $this->source, ($context["json_output"] ?? null), "data", [], "any", false, false, false, 45)) && is_array($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b) || $__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b instanceof ArrayAccess ? ($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b[$context["i"]] ?? null) : null), "images", [], "any", false, false, false, 45), "low_resolution", [], "any", false, false, false, 45), "url", [], "any", false, false, false, 45);
                echo "?taken-by=";
                echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 = twig_get_attribute($this->env, $this->source, ($context["json_output"] ?? null), "data", [], "any", false, false, false, 45)) && is_array($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002) || $__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 instanceof ArrayAccess ? ($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002[$context["i"]] ?? null) : null), "user", [], "any", false, false, false, 45), "username", [], "any", false, false, false, 45);
                echo "\">
\t\t\t\t\t\t\t\t\t\t<img class=\"image_users\" src=\"";
                // line 46
                echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 = twig_get_attribute($this->env, $this->source, ($context["json_output"] ?? null), "data", [], "any", false, false, false, 46)) && is_array($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4) || $__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 instanceof ArrayAccess ? ($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4[$context["i"]] ?? null) : null), "images", [], "any", false, false, false, 46), "low_resolution", [], "any", false, false, false, 46), "url", [], "any", false, false, false, 46);
                echo "\" title=\"";
                echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 = twig_get_attribute($this->env, $this->source, ($context["json_output"] ?? null), "data", [], "any", false, false, false, 46)) && is_array($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666) || $__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 instanceof ArrayAccess ? ($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666[$context["i"]] ?? null) : null), "user", [], "any", false, false, false, 46), "full_name", [], "any", false, false, false, 46);
                echo "\" alt=\"";
                echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e = twig_get_attribute($this->env, $this->source, ($context["json_output"] ?? null), "data", [], "any", false, false, false, 46)) && is_array($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e) || $__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e instanceof ArrayAccess ? ($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e[$context["i"]] ?? null) : null), "user", [], "any", false, false, false, 46), "full_name", [], "any", false, false, false, 46);
                echo "\" />
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
                // line 50
                if (((($context["type_show"] ?? null) == "slider") && (((($context["j"] ?? null) % ($context["nb_rows"] ?? null)) == 0) || (($context["j"] ?? null) == ($context["count"] ?? null))))) {
                    echo " 
\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
                }
                // line 53
                echo "
\t\t\t\t\t\t";
                // line 54
                if ((($context["type_show"] ?? null) == "simple")) {
                    echo " 
\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
                }
                // line 56
                echo " 
\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 57
            echo " 
\t\t\t\t\t</div> <!--/.instagram-items-inner-->
\t\t\t\t";
        } else {
            // line 59
            echo " 
\t\t\t\t\t";
            // line 60
            echo twig_get_attribute($this->env, $this->source, ($context["objlang"] ?? null), "get", [0 => "text_noproduct"], "method", false, false, false, 60);
            echo "
\t\t\t\t";
        }
        // line 61
        echo " 
\t\t\t</div>
\t\t</div> <!-- /.modcontent-->

\t\t";
        // line 65
        if ((($context["post_text"] ?? null) != " ")) {
            // line 66
            echo "\t\t\t<div class=\"form-group\">
\t\t\t\t";
            // line 67
            echo ($context["post_text"] ?? null);
            echo "
\t\t\t</div>
\t\t";
        }
        // line 70
        echo "\t\t\t
\t</div>

\t";
        // line 73
        if ((($context["type_show"] ?? null) == "slider")) {
            // line 74
            echo "\t<script type=\"text/javascript\">

\t\t//<![CDATA[
\t\tjQuery(document).ready(function (\$) {
\t\t\t;(function (element) {
\t\t\t\tvar \$element = \$(element),
\t\t\t\t\$extraslider = \$(\".instagram-items-inner\", \$element),
\t\t\t\t_delay = ";
            // line 81
            echo ($context["delay"] ?? null);
            echo " ,
\t\t\t\t_duration = ";
            // line 82
            echo ($context["duration"] ?? null);
            echo " ,
\t\t\t\t_effect = '";
            // line 83
            echo ($context["effect"] ?? null);
            echo " ';

\t\t\t\tthis_item = \$extraslider.find('div.media');
\t\t\t\tthis_item.find('div.item:eq(0)').addClass('head-button');
\t\t\t\tthis_item.find('div.item:eq(0) .media-heading').addClass('head-item');
\t\t\t\tthis_item.find('div.item:eq(0) .media-left').addClass('so-block');
\t\t\t\tthis_item.find('div.item:eq(0) .media-content').addClass('so-block');
\t\t\t\t\$extraslider.on(\"initialized.owl.carousel2\", function () {
\t\t\t\t\tvar \$item_active = \$(\".owl2-item.active\", \$element);
\t\t\t\t\tif (\$item_active.length > 1 && _effect != \"none\") {
\t\t\t\t\t\t_getAnimate(\$item_active);
\t\t\t\t\t}
\t\t\t\t\telse {
\t\t\t\t\t\tvar \$item = \$(\".owl2-item\", \$element);
\t\t\t\t\t\t\$item.css({\"opacity\": 1, \"filter\": \"alpha(opacity = 100)\"});
\t\t\t\t\t}

\t\t\t\t\t";
            // line 100
            if ((($context["dots"] ?? null) == "true")) {
                echo " 
\t\t\t\t\t\tif (\$(\".owl2-dot\", \$element).length < 2) {
\t\t\t\t\t\t\t\$(\".owl2-prev\", \$element).css(\"display\", \"none\");
\t\t\t\t\t\t\t\$(\".owl2-next\", \$element).css(\"display\", \"none\");
\t\t\t\t\t\t\t\$(\".owl2-dot\", \$element).css(\"display\", \"none\");
\t\t\t\t\t\t}
\t\t\t\t\t";
            }
            // line 107
            echo "
\t\t\t\t\t";
            // line 108
            if ((($context["button_page"] ?? null) == "top")) {
                echo " 
\t\t\t\t\t\t\$(\".owl2-controls\", \$element).insertBefore(\$extraslider);
\t\t\t\t\t\t\$(\".owl2-dots\", \$element).insertAfter(\$(\".owl2-prev\", \$element));
\t\t\t\t\t";
            } else {
                // line 111
                echo "  
\t\t\t\t\t\t\t\$(\".owl2-nav\", \$element).insertBefore(\$extraslider);
\t\t\t\t\t\t\t\$(\".owl2-controls\", \$element).insertAfter(\$extraslider);
\t\t\t\t\t";
            }
            // line 115
            echo "
\t\t\t});

\t\t\t\t\$extraslider.owlCarousel2({
\t\t\t\t\trtl: ";
            // line 119
            echo ($context["direction"] ?? null);
            echo ",
\t\t\t\t\tmargin: ";
            // line 120
            echo ($context["margin"] ?? null);
            echo ",
\t\t\t\t\tslideBy: ";
            // line 121
            echo ($context["slideBy"] ?? null);
            echo ",
\t\t\t\t\tautoplay: ";
            // line 122
            echo ($context["autoplay"] ?? null);
            echo ",
\t\t\t\t\tautoplayHoverPause: ";
            // line 123
            echo ($context["pausehover"] ?? null);
            echo ",
\t\t\t\t\tautoplayTimeout: ";
            // line 124
            echo ($context["autoplay_timeout"] ?? null);
            echo " ,
\t\t\t\t\tautoplaySpeed: ";
            // line 125
            echo ($context["autoplaySpeed"] ?? null);
            echo " ,

\t\t\t\t\tstartPosition: ";
            // line 127
            echo ($context["startPosition"] ?? null);
            echo " ,
\t\t\t\t\tmouseDrag: ";
            // line 128
            echo ($context["mouseDrag"] ?? null);
            echo ",
\t\t\t\t\ttouchDrag: ";
            // line 129
            echo ($context["touchDrag"] ?? null);
            echo " ,
\t\t\t\t\tautoWidth: false,
\t\t\t\t\tresponsive: {
\t\t\t\t\t\t0: \t{ items: ";
            // line 132
            echo ($context["nb_column4"] ?? null);
            echo " } ,
\t\t\t\t\t\t480: { items: ";
            // line 133
            echo ($context["nb_column3"] ?? null);
            echo " },
\t\t\t\t\t\t768: { items: ";
            // line 134
            echo ($context["nb_column2"] ?? null);
            echo " },
\t\t\t\t\t\t992: { items: ";
            // line 135
            echo ($context["nb_column1"] ?? null);
            echo " },
\t\t\t\t\t\t1200: {items: ";
            // line 136
            echo ($context["nb_column0"] ?? null);
            echo "}
\t\t\t\t\t},
\t\t\t\t\tdotClass: \"owl2-dot\",
\t\t\t\t\tdotsClass: \"owl2-dots\",
\t\t\t\t\tdots: ";
            // line 140
            echo ($context["dots"] ?? null);
            echo " ,
\t\t\t\t\tdotsSpeed:";
            // line 141
            echo ($context["dotsSpeed"] ?? null);
            echo " ,
\t\t\t\t\tnav: ";
            // line 142
            echo ($context["navs"] ?? null);
            echo " ,
\t\t\t\t\tloop: ";
            // line 143
            echo ($context["loop"] ?? null);
            echo " ,
\t\t\t\t\tnavSpeed: ";
            // line 144
            echo ($context["navSpeed"] ?? null);
            echo " ,
\t\t\t\t\tnavText: [\"";
            // line 145
            echo ($context["btn_prev"] ?? null);
            echo " \", \"";
            echo ($context["btn_next"] ?? null);
            echo " \"],
\t\t\t\t\tnavClass: [\"owl2-prev\", \"owl2-next\"]

\t\t\t\t});

\t\$extraslider.on(\"translate.owl.carousel2\", function (e) {
\t\t";
            // line 151
            if ((($context["dots"] ?? null) == "true")) {
                echo " 
\t\t\tif (\$(\".owl2-dot\", \$element).length < 2) {
\t\t\t\t\$(\".owl2-prev\", \$element).css(\"display\", \"none\");
\t\t\t\t\$(\".owl2-next\", \$element).css(\"display\", \"none\");
\t\t\t\t\$(\".owl2-dot\", \$element).css(\"display\", \"none\");
\t\t\t}
\t\t";
            }
            // line 157
            echo " 

\t\tvar \$item_active = \$(\".owl2-item.active\", \$element);
\t\t\t_UngetAnimate(\$item_active);
\t\t\t_getAnimate(\$item_active);
\t\t});

\t\$extraslider.on(\"translated.owl.carousel2\", function (e) {

\t\t";
            // line 166
            if ((($context["dots"] ?? null) == "true")) {
                echo " 
\t\t\tif (\$(\".owl2-dot\", \$element).length < 2) {
\t\t\t\t\$(\".owl2-prev\", \$element).css(\"display\", \"none\");
\t\t\t\t\$(\".owl2-next\", \$element).css(\"display\", \"none\");
\t\t\t\t\$(\".owl2-dot\", \$element).css(\"display\", \"none\");
\t\t\t}
\t\t";
            }
            // line 172
            echo " 

\t\tvar \$item_active = \$(\".owl2-item.active\", \$element);
\t\tvar \$item = \$(\".owl2-item\", \$element);

\t\t_UngetAnimate(\$item);

\t\tif (\$item_active.length > 1 && _effect != \"none\") {
\t\t\t_getAnimate(\$item_active);
\t\t} else {
\t\t\t\$item.css({\"opacity\": 1, \"filter\": \"alpha(opacity = 100)\"});
\t\t}
\t});

\tfunction _getAnimate(\$el) {
\t\tif (_effect == \"none\") return;
\t\t\t\t//if (\$.browser.msie && parseInt(\$.browser.version, 10) <= 9) return;
\t\t\t\t\$extraslider.removeClass(\"extra-animate\");
\t\t\t\t\$el.each(function (i) {
\t\t\t\t\tvar \$_el = \$(this);
\t\t\t\t\t\$(this).css({
\t\t\t\t\t\t\"-webkit-animation\": _effect + \" \" + _duration + \"ms ease both\",
\t\t\t\t\t\t\"-moz-animation\": _effect + \" \" + _duration + \"ms ease both\",
\t\t\t\t\t\t\"-o-animation\": _effect + \" \" + _duration + \"ms ease both\",
\t\t\t\t\t\t\"animation\": _effect + \" \" + _duration + \"ms ease both\",
\t\t\t\t\t\t\"-webkit-animation-delay\": +i * _delay + \"ms\",
\t\t\t\t\t\t\"-moz-animation-delay\": +i * _delay + \"ms\",
\t\t\t\t\t\t\"-o-animation-delay\": +i * _delay + \"ms\",
\t\t\t\t\t\t\"animation-delay\": +i * _delay + \"ms\",
\t\t\t\t\t\t\"opacity\": 1
\t\t\t\t\t}).animate({
\t\t\t\t\t\topacity: 1
\t\t\t\t\t});

\t\t\t\t\tif (i == \$el.size() - 1) {
\t\t\t\t\t\t\$extraslider.addClass(\"extra-animate\");
\t\t\t\t\t}
\t\t\t\t});
\t\t\t}

\t\t\tfunction _UngetAnimate(\$el) {
\t\t\t\t\$el.each(function (i) {
\t\t\t\t\t\$(this).css({
\t\t\t\t\t\t\"animation\": \"\",
\t\t\t\t\t\t\"-webkit-animation\": \"\",
\t\t\t\t\t\t\"-moz-animation\": \"\",
\t\t\t\t\t\t\"-o-animation\": \"\",
\t\t\t\t\t\t\"opacity\": 1
\t\t\t\t\t});
\t\t\t\t});
\t\t\t}

\t\t})(\"#";
            // line 224
            echo ($context["moduleid"] ?? null);
            echo "\");
\t});
\t\t//]]>
\t</script>
\t";
        }
        // line 229
        echo "
\t<script type=\"text/javascript\">
\t\t\$(document).ready(function(){
\t\t\t\$(\".gallery_image_";
        // line 232
        echo ($context["moduleid"] ?? null);
        echo "\").attr('rel', 'gallery').fancybox({
\t\t        prevMethod : false,
\t\t\t\thelpers: {
\t\t\t\t\tthumbs\t: {
\t\t\t\t\t\twidth\t: 50,
\t\t\t\t\t\theight\t: 50,
\t\t\t\t\t},

\t\t\t\t\t";
        // line 240
        if (($context["show_fullname"] ?? null)) {
            // line 241
            echo "\t\t\t\t\t\ttitle : {type : 'over'},
\t\t            ";
        } else {
            // line 242
            echo " 
\t\t            \ttitle : null
\t\t            ";
        }
        // line 245
        echo "\t\t\t\t},
\t\t\t});
\t\t});
\t</script>";
    }

    public function getTemplateName()
    {
        return "so-buyshop/template/extension/module/so_instagram_gallery/default.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  528 => 245,  523 => 242,  519 => 241,  517 => 240,  506 => 232,  501 => 229,  493 => 224,  439 => 172,  429 => 166,  418 => 157,  408 => 151,  397 => 145,  393 => 144,  389 => 143,  385 => 142,  381 => 141,  377 => 140,  370 => 136,  366 => 135,  362 => 134,  358 => 133,  354 => 132,  348 => 129,  344 => 128,  340 => 127,  335 => 125,  331 => 124,  327 => 123,  323 => 122,  319 => 121,  315 => 120,  311 => 119,  305 => 115,  299 => 111,  292 => 108,  289 => 107,  279 => 100,  259 => 83,  255 => 82,  251 => 81,  242 => 74,  240 => 73,  235 => 70,  229 => 67,  226 => 66,  224 => 65,  218 => 61,  213 => 60,  210 => 59,  205 => 57,  198 => 56,  192 => 54,  189 => 53,  183 => 50,  172 => 46,  160 => 45,  155 => 42,  150 => 41,  146 => 40,  143 => 39,  137 => 36,  131 => 34,  126 => 33,  124 => 32,  120 => 30,  115 => 29,  112 => 28,  106 => 26,  102 => 25,  94 => 24,  89 => 21,  83 => 18,  80 => 17,  78 => 16,  74 => 14,  69 => 13,  65 => 12,  59 => 11,  56 => 10,  54 => 9,  52 => 8,  50 => 7,  48 => 6,  46 => 5,  44 => 4,  42 => 3,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "so-buyshop/template/extension/module/so_instagram_gallery/default.twig", "/home/azhkhn/public_html/protidin.com.bd/catalog/view/theme/so-buyshop/template/extension/module/so_instagram_gallery/default.twig");
    }
}
