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

/* so-buyshop/template/extension/module/so_latest_blog/default.twig */
class __TwigTemplate_f16155ed69c9bfb735fd272a82e1275da7d23ef3f46c23f633c27b33cc1f3445 extends \Twig\Template
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
<div class=\"module so-latest-blog ";
        // line 2
        echo ($context["class_suffix"] ?? null);
        echo " preset01-";
        echo ($context["nb_column0"] ?? null);
        echo " preset02-";
        echo ($context["nb_column1"] ?? null);
        echo " preset03-";
        echo ($context["nb_column2"] ?? null);
        echo " preset04-";
        echo ($context["nb_column3"] ?? null);
        echo " preset05-";
        echo ($context["nb_column4"] ?? null);
        echo "\">

\t";
        // line 4
        if (($context["disp_title_module"] ?? null)) {
            // line 5
            echo "\t\t<h3 class=\"modtitle\">";
            echo ($context["head_name"] ?? null);
            echo "</h3>
\t";
        }
        // line 7
        echo "\t";
        if ( !twig_test_empty(twig_trim_filter(($context["pre_text"] ?? null)))) {
            // line 8
            echo "\t\t<div class=\"form-group\">";
            echo ($context["pre_text"] ?? null);
            echo "</div>
\t";
        }
        // line 10
        echo "\t<div class=\"modcontent clearfix\">
\t\t";
        // line 11
        if ((( !twig_test_empty(($context["blogs"] ?? null)) && (isset($context["error_no_database"]) || array_key_exists("error_no_database", $context))) && (($context["error_no_database"] ?? null) == ""))) {
            echo "\t
\t\t\t";
            // line 12
            $context["count_item"] = twig_length_filter($this->env, ($context["blogs"] ?? null));
            // line 13
            echo "\t\t\t";
            $context["cls_btn_page"] = (((($context["button_page"] ?? null) == "top")) ? ("buttom-type1") : ("button-type2"));
            // line 14
            echo "\t\t\t";
            $context["btn_type"] = (((($context["button_page"] ?? null) == "top")) ? ("button-type1") : ("button-type2"));
            // line 15
            echo "\t\t\t";
            $context["btn_prev"] = (((($context["button_page"] ?? null) == "top")) ? ("&#171;") : ("&#139;"));
            // line 16
            echo "\t\t\t";
            $context["btn_next"] = (((($context["button_page"] ?? null) == "top")) ? ("&#187;") : ("&#155;"));
            // line 17
            echo "\t\t\t";
            $context["i"] = 0;
            // line 18
            echo "\t\t\t<div id=\"";
            echo ($context["tag_id"] ?? null);
            echo "\" class=\"so-blog-external ";
            echo ($context["cls_btn_page"] ?? null);
            echo " ";
            echo ($context["btn_type"] ?? null);
            echo "\">
\t\t\t\t";
            // line 19
            if ((($context["type_show"] ?? null) == "simple")) {
                // line 20
                echo "
\t\t\t\t\t<div class=\"blog-external-simple\">
\t\t\t\t\t\t";
                // line 22
                $context["k"] = 0;
                // line 23
                echo "\t\t\t\t\t  \t";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["blogs"] ?? null));
                $context['loop'] = [
                  'parent' => $context['_parent'],
                  'index0' => 0,
                  'index'  => 1,
                  'first'  => true,
                ];
                if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                    $length = count($context['_seq']);
                    $context['loop']['revindex0'] = $length - 1;
                    $context['loop']['revindex'] = $length;
                    $context['loop']['length'] = $length;
                    $context['loop']['last'] = 1 === $length;
                }
                foreach ($context['_seq'] as $context["key"] => $context["blog"]) {
                    // line 24
                    echo "\t\t\t\t\t  \t\t";
                    $context["k"] = (($context["k"] ?? null) + 1);
                    // line 25
                    echo "\t\t\t\t\t  \t\t";
                    if (((($context["k"] ?? null) % 4) == 1)) {
                        // line 26
                        echo "\t\t\t\t\t  \t\t\t<div class=\"first-post\">
\t\t\t\t\t\t  \t\t";
                    } elseif (((                    // line 27
($context["k"] ?? null) % 4) == 2)) {
                        // line 28
                        echo "\t\t\t\t\t\t\t\t\t<div class=\"last-post\">
\t\t\t\t\t\t\t\t";
                    }
                    // line 30
                    echo "\t\t\t\t\t\t\t\t\t<div class=\"cat-wrap cat-wrap-";
                    echo ($context["k"] ?? null);
                    echo "\">
\t\t\t\t\t\t\t\t\t\t<div class=\"media\">
\t\t\t\t\t\t\t\t\t\t\t";
                    // line 32
                    $this->loadTemplate((($context["theme_config"] ?? null) . "/template/extension/module/so_latest_blog/default_items.twig"), "so-buyshop/template/extension/module/so_latest_blog/default.twig", 32)->display(twig_array_merge($context, ["type_show" => ($context["type_show"] ?? null)]));
                    // line 33
                    echo "\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t";
                    // line 35
                    if (((($context["k"] ?? null) % 4) == 0)) {
                        // line 36
                        echo "\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t";
                    }
                    // line 38
                    echo "\t\t\t\t\t\t\t";
                    if (((($context["k"] ?? null) % 4) == 1)) {
                        // line 39
                        echo "\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
                    }
                    // line 41
                    echo "\t\t\t\t\t\t";
                    ++$context['loop']['index0'];
                    ++$context['loop']['index'];
                    $context['loop']['first'] = false;
                    if (isset($context['loop']['length'])) {
                        --$context['loop']['revindex0'];
                        --$context['loop']['revindex'];
                        $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['key'], $context['blog'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 42
                echo "\t\t\t\t\t</div>
\t\t\t\t";
            } else {
                // line 44
                echo "\t\t\t\t\t<div class=\"blog-external\" data-effect=\"";
                echo ($context["effect"] ?? null);
                echo "\">\t
\t\t\t\t\t\t";
                // line 45
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["blogs"] ?? null));
                $context['loop'] = [
                  'parent' => $context['_parent'],
                  'index0' => 0,
                  'index'  => 1,
                  'first'  => true,
                ];
                if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                    $length = count($context['_seq']);
                    $context['loop']['revindex0'] = $length - 1;
                    $context['loop']['revindex'] = $length;
                    $context['loop']['length'] = $length;
                    $context['loop']['last'] = 1 === $length;
                }
                foreach ($context['_seq'] as $context["key"] => $context["blog"]) {
                    // line 46
                    echo "\t\t\t\t\t\t\t";
                    $context["i"] = (($context["i"] ?? null) + 1);
                    // line 47
                    echo "\t\t\t\t\t\t\t";
                    if ((((($context["i"] ?? null) % ($context["nb_rows"] ?? null)) == 1) || (($context["nb_rows"] ?? null) == 1))) {
                        // line 48
                        echo "\t\t\t\t\t\t\t\t<div class=\"media\">
\t\t\t\t\t\t\t";
                    }
                    // line 50
                    echo "
\t\t\t\t\t\t\t";
                    // line 51
                    $this->loadTemplate((($context["theme_config"] ?? null) . "/template/extension/module/so_latest_blog/default_items.twig"), "so-buyshop/template/extension/module/so_latest_blog/default.twig", 51)->display(twig_array_merge($context, ["type_show" => ($context["type_show"] ?? null)]));
                    // line 52
                    echo "\t\t\t\t\t\t\t
\t\t\t\t\t\t\t";
                    // line 53
                    if ((((($context["i"] ?? null) % ($context["nb_rows"] ?? null)) == 0) || (($context["i"] ?? null) == ($context["count_item"] ?? null)))) {
                        // line 54
                        echo "\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
                    }
                    // line 55
                    echo "\t\t\t\t
\t\t\t\t\t\t";
                    ++$context['loop']['index0'];
                    ++$context['loop']['index'];
                    $context['loop']['first'] = false;
                    if (isset($context['loop']['length'])) {
                        --$context['loop']['revindex0'];
                        --$context['loop']['revindex'];
                        $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['key'], $context['blog'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 57
                echo "\t\t\t\t\t</div>
\t\t\t\t";
            }
            // line 59
            echo "\t\t\t\t
\t\t\t</div>
\t\t\t<script type=\"text/javascript\">
\t\t\t\t//<![CDATA[
\t\t\t\tjQuery(document).ready(function (\$) {
\t\t\t\t\t;(function (element) {
\t\t\t\t\t\tvar \$element = \$(element),
\t\t\t\t\t\t\t\t\$extraslider = \$(\".blog-external\", \$element),
\t\t\t\t\t\t\t\t_delay = ";
            // line 67
            echo ($context["delay"] ?? null);
            echo ",
\t\t\t\t\t\t_duration = ";
            // line 68
            echo ($context["duration"] ?? null);
            echo ",
\t\t\t\t\t\t_effect = '";
            // line 69
            echo ($context["effect"] ?? null);
            echo "';

\t\t\t\t\t\tthis_item = \$extraslider.find('div.media');
\t\t\t\t\t\tthis_item.find('div.item:eq(0)').addClass('head-button');
\t\t\t\t\t\tthis_item.find('div.item:eq(0) .media-heading').addClass('head-item');
\t\t\t\t\t\tthis_item.find('div.item:eq(0) .media-left').addClass('so-block');
\t\t\t\t\t\tthis_item.find('div.item:eq(0) .media-content').addClass('so-block');
\t\t\t\t\t\t\$extraslider.on(\"initialized.owl.carousel2\", function () {
\t\t\t\t\t\t\tvar \$item_active = \$(\".owl2-item.active\", \$element);
\t\t\t\t\t\t\tif (\$item_active.length > 1 && _effect != \"none\") {
\t\t\t\t\t\t\t\t_getAnimate(\$item_active);
\t\t\t\t\t\t\t}
\t\t\t\t\t\t\telse {
\t\t\t\t\t\t\t\tvar \$item = \$(\".owl2-item\", \$element);
\t\t\t\t\t\t\t\t\$item.css({\"opacity\": 1, \"filter\": \"alpha(opacity = 100)\"});
\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t";
            // line 85
            if ((($context["dots"] ?? null) == "true")) {
                // line 86
                echo "\t\t\t\t\t\t\t\tif (\$(\".owl2-dot\", \$element).length < 2) {
\t\t\t\t\t\t\t\t\t\$(\".owl2-prev\", \$element).css(\"display\", \"none\");
\t\t\t\t\t\t\t\t\t\$(\".owl2-next\", \$element).css(\"display\", \"none\");
\t\t\t\t\t\t\t\t\t\$(\".owl2-dot\", \$element).css(\"display\", \"none\");
\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t";
            }
            // line 92
            echo "
\t\t\t\t\t\t\t";
            // line 93
            if ((($context["button_page"] ?? null) == "top")) {
                // line 94
                echo "\t\t\t\t\t\t\t\t\$(\".owl2-controls\", \$element).insertBefore(\$extraslider);
\t\t\t\t\t\t\t\t\$(\".owl2-dots\", \$element).insertAfter(\$(\".owl2-prev\", \$element));
\t\t\t\t\t\t\t";
            } else {
                // line 97
                echo "\t\t\t\t\t\t\t\t\$(\".owl2-nav\", \$element).insertBefore(\$extraslider);
\t\t\t\t\t\t\t\t\$(\".owl2-controls\", \$element).insertAfter(\$extraslider);
\t\t\t\t\t\t\t";
            }
            // line 100
            echo "\t\t\t\t\t\t});

\t\t\t\t\t\t\$extraslider.owlCarousel2({
\t\t\t\t\t\t\tmargin: ";
            // line 103
            echo ($context["margin"] ?? null);
            echo ",
\t\t\t\t\t\t\tslideBy: ";
            // line 104
            echo ($context["slideBy"] ?? null);
            echo ",
\t\t\t\t\t\t\tautoplay: ";
            // line 105
            echo ($context["autoplay"] ?? null);
            echo ",
\t\t\t\t\t\t\tautoplayHoverPause: ";
            // line 106
            echo ($context["pausehover"] ?? null);
            echo ",
\t\t\t\t\t\t\tautoplayTimeout: ";
            // line 107
            echo ($context["autoplay_timeout"] ?? null);
            echo ",
\t\t\t\t\t\t\tautoplaySpeed: ";
            // line 108
            echo ($context["autoplaySpeed"] ?? null);
            echo ",
\t\t\t\t\t\t\tstartPosition: ";
            // line 109
            echo ($context["startPosition"] ?? null);
            echo ",
\t\t\t\t\t\t\tmouseDrag: ";
            // line 110
            echo ($context["mouseDrag"] ?? null);
            echo ",
\t\t\t\t\t\t\ttouchDrag: ";
            // line 111
            echo ($context["touchDrag"] ?? null);
            echo ",
\t\t\t\t\t\t\tautoWidth: false,
\t\t\t\t\t\t\trtl: ";
            // line 113
            echo (((($context["direction"] ?? null) == "ltr")) ? ("false") : ("true"));
            echo ",
\t\t\t\t\t\t\tresponsive: {
\t\t\t\t\t\t\t\t0: \t{ items: ";
            // line 115
            echo ($context["nb_column4"] ?? null);
            echo " } ,
\t\t\t\t\t\t\t\t480: { items: ";
            // line 116
            echo ($context["nb_column3"] ?? null);
            echo " },
\t\t\t\t\t\t\t\t768: { items: ";
            // line 117
            echo ($context["nb_column2"] ?? null);
            echo " },
\t\t\t\t\t\t\t\t992: { items: ";
            // line 118
            echo ($context["nb_column1"] ?? null);
            echo " },
\t\t\t\t\t\t\t\t1200: {items: ";
            // line 119
            echo ($context["nb_column0"] ?? null);
            echo "},
\t\t\t\t\t\t\t},
\t\t\t\t\t\t\tdotClass: \"owl2-dot\",
\t\t\t\t\t\t\tdotsClass: \"owl2-dots\",
\t\t\t\t\t\t\tdots: ";
            // line 123
            echo ($context["dots"] ?? null);
            echo ",
\t\t\t\t\t\t\tdotsSpeed:";
            // line 124
            echo ($context["dotsSpeed"] ?? null);
            echo ",
\t\t\t\t\t\t\tnav: ";
            // line 125
            echo ($context["nav"] ?? null);
            echo ",
\t\t\t\t\t\t\tloop: ";
            // line 126
            echo ($context["loop"] ?? null);
            echo ",
\t\t\t\t\t\t\tnavSpeed: ";
            // line 127
            echo ($context["navSpeed"] ?? null);
            echo ",
\t\t\t\t\t\t\tnavText: [\"";
            // line 128
            echo ($context["btn_prev"] ?? null);
            echo "\", \"";
            echo ($context["btn_next"] ?? null);
            echo "\"],
\t\t\t\t\t\t\tnavClass: [\"owl2-prev\", \"owl2-next\"]
\t\t\t\t\t\t});

\t\t\t\t\t\t\$extraslider.on(\"translate.owl.carousel2\", function (e) {
\t\t\t\t\t\t\t";
            // line 133
            if ((($context["dots"] ?? null) == "true")) {
                // line 134
                echo "\t\t\t\t\t\t\t\tif (\$(\".owl2-dot\", \$element).length < 2) {
\t\t\t\t\t\t\t\t\t\$(\".owl2-prev\", \$element).css(\"display\", \"none\");
\t\t\t\t\t\t\t\t\t\$(\".owl2-next\", \$element).css(\"display\", \"none\");
\t\t\t\t\t\t\t\t\t\$(\".owl2-dot\", \$element).css(\"display\", \"none\");
\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t";
            }
            // line 140
            echo "
\t\t\t\t\t\t\t//var \$item_active = \$(\".owl2-item.active\", \$element);
\t\t\t\t\t\t\t//_UngetAnimate(\$item_active);
\t\t\t\t\t\t\t//_getAnimate(\$item_active);
\t\t\t\t\t\t});

\t\t\t\t\t\t\$extraslider.on(\"translated.owl.carousel2\", function (e) {
\t\t\t\t\t\t\t";
            // line 147
            if ((($context["dots"] ?? null) == "true")) {
                // line 148
                echo "\t\t\t\t\t\t\t\tif (\$(\".owl2-dot\", \$element).length < 2) {
\t\t\t\t\t\t\t\t\t\$(\".owl2-prev\", \$element).css(\"display\", \"none\");
\t\t\t\t\t\t\t\t\t\$(\".owl2-next\", \$element).css(\"display\", \"none\");
\t\t\t\t\t\t\t\t\t\$(\".owl2-dot\", \$element).css(\"display\", \"none\");
\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t";
            }
            // line 154
            echo "
\t\t\t\t\t\t\tvar \$item_active = \$(\".owl2-item.active\", \$element);
\t\t\t\t\t\t\tvar \$item = \$(\".owl2-item\", \$element);

\t\t\t\t\t\t\t_UngetAnimate(\$item);

\t\t\t\t\t\t\tif (\$item_active.length > 1 && _effect != \"none\") {
\t\t\t\t\t\t\t\t_getAnimate(\$item_active);
\t\t\t\t\t\t\t} else {
\t\t\t\t\t\t\t\t\$item.css({\"opacity\": 1, \"filter\": \"alpha(opacity = 100)\"});
\t\t\t\t\t\t\t}
\t\t\t\t\t\t});

\t\t\t\t\t\tfunction _getAnimate(\$el) {
\t\t\t\t\t\t\tif (_effect == \"none\") return;
\t\t\t\t\t\t\t//if (\$.browser.msie && parseInt(\$.browser.version, 10) <= 9) return;
\t\t\t\t\t\t\t\$extraslider.removeClass(\"extra-animate\");
\t\t\t\t\t\t\t\$el.each(function (i) {
\t\t\t\t\t\t\t\tvar \$_el = \$(this);
\t\t\t\t\t\t\t\t\$(this).css({
\t\t\t\t\t\t\t\t\t\"-webkit-animation\": _effect + \" \" + _duration + \"ms ease both\",
\t\t\t\t\t\t\t\t\t\"-moz-animation\": _effect + \" \" + _duration + \"ms ease both\",
\t\t\t\t\t\t\t\t\t\"-o-animation\": _effect + \" \" + _duration + \"ms ease both\",
\t\t\t\t\t\t\t\t\t\"animation\": _effect + \" \" + _duration + \"ms ease both\",
\t\t\t\t\t\t\t\t\t\"-webkit-animation-delay\": +i * _delay + \"ms\",
\t\t\t\t\t\t\t\t\t\"-moz-animation-delay\": +i * _delay + \"ms\",
\t\t\t\t\t\t\t\t\t\"-o-animation-delay\": +i * _delay + \"ms\",
\t\t\t\t\t\t\t\t\t\"animation-delay\": +i * _delay + \"ms\",
\t\t\t\t\t\t\t\t\t\"opacity\": 1
\t\t\t\t\t\t\t\t}).animate({
\t\t\t\t\t\t\t\t\topacity: 1
\t\t\t\t\t\t\t\t});

\t\t\t\t\t\t\t\tif (i == \$el.size() - 1) {
\t\t\t\t\t\t\t\t\t\$extraslider.addClass(\"extra-animate\");
\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t});
\t\t\t\t\t\t}

\t\t\t\t\t\tfunction _UngetAnimate(\$el) {
\t\t\t\t\t\t\t\$el.each(function (i) {
\t\t\t\t\t\t\t\t\$(this).css({
\t\t\t\t\t\t\t\t\t\"animation\": \"\",
\t\t\t\t\t\t\t\t\t\"-webkit-animation\": \"\",
\t\t\t\t\t\t\t\t\t\"-moz-animation\": \"\",
\t\t\t\t\t\t\t\t\t\"-o-animation\": \"\",
\t\t\t\t\t\t\t\t\t\"opacity\": 1
\t\t\t\t\t\t\t\t});
\t\t\t\t\t\t\t});
\t\t\t\t\t\t}
\t\t\t\t\t})(\"#";
            // line 204
            echo ($context["tag_id"] ?? null);
            echo "\");
\t\t\t\t});
\t\t\t\t//]]>
\t\t\t</script>
\t\t";
        } elseif ((        // line 208
(isset($context["error_no_database"]) || array_key_exists("error_no_database", $context)) && (($context["error_no_database"] ?? null) != ""))) {
            // line 209
            echo "\t\t\t<div class=\"alert alert-danger\"><i class=\"fa fa-exclamation-circle\"></i>";
            echo ($context["error_no_database"] ?? null);
            echo "</div>
\t\t";
        } else {
            // line 211
            echo "    \t\t";
            echo ($context["NoItem"] ?? null);
            echo "
\t\t";
        }
        // line 213
        echo "\t</div>
\t";
        // line 214
        if ( !twig_test_empty(twig_trim_filter(($context["post_text"] ?? null)))) {
            // line 215
            echo "\t\t<div class=\"form-group\">
\t\t\t";
            // line 216
            echo ($context["post_text"] ?? null);
            echo "
\t\t</div>
\t";
        }
        // line 219
        echo "</div>";
    }

    public function getTemplateName()
    {
        return "so-buyshop/template/extension/module/so_latest_blog/default.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  532 => 219,  526 => 216,  523 => 215,  521 => 214,  518 => 213,  512 => 211,  506 => 209,  504 => 208,  497 => 204,  445 => 154,  437 => 148,  435 => 147,  426 => 140,  418 => 134,  416 => 133,  406 => 128,  402 => 127,  398 => 126,  394 => 125,  390 => 124,  386 => 123,  379 => 119,  375 => 118,  371 => 117,  367 => 116,  363 => 115,  358 => 113,  353 => 111,  349 => 110,  345 => 109,  341 => 108,  337 => 107,  333 => 106,  329 => 105,  325 => 104,  321 => 103,  316 => 100,  311 => 97,  306 => 94,  304 => 93,  301 => 92,  293 => 86,  291 => 85,  272 => 69,  268 => 68,  264 => 67,  254 => 59,  250 => 57,  235 => 55,  231 => 54,  229 => 53,  226 => 52,  224 => 51,  221 => 50,  217 => 48,  214 => 47,  211 => 46,  194 => 45,  189 => 44,  185 => 42,  171 => 41,  167 => 39,  164 => 38,  160 => 36,  158 => 35,  154 => 33,  152 => 32,  146 => 30,  142 => 28,  140 => 27,  137 => 26,  134 => 25,  131 => 24,  113 => 23,  111 => 22,  107 => 20,  105 => 19,  96 => 18,  93 => 17,  90 => 16,  87 => 15,  84 => 14,  81 => 13,  79 => 12,  75 => 11,  72 => 10,  66 => 8,  63 => 7,  57 => 5,  55 => 4,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "so-buyshop/template/extension/module/so_latest_blog/default.twig", "/home/azhkhn/public_html/protidin.com.bd/catalog/view/theme/so-buyshop/template/extension/module/so_latest_blog/default.twig");
    }
}
