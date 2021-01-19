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

/* so-mobile/template/extension/module/so_latest_blog/default.twig */
class __TwigTemplate_ae920fc71a617e2da203edc91ded07734245c182298afdd1ab797e560850adb8 extends \Twig\Template
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
        echo "<div class=\"module so-latest-blog ";
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
        // line 2
        if (($context["disp_title_module"] ?? null)) {
            // line 3
            echo "\t\t<h3 class=\"modtitle\"><span>";
            echo ($context["head_name"] ?? null);
            echo "</span></h3>
\t";
        }
        // line 5
        echo "\t";
        if ((($context["pre_text"] ?? null) != "")) {
            // line 6
            echo "\t\t<div class=\"form-group\">";
            echo ($context["pre_text"] ?? null);
            echo "</div>
\t";
        }
        // line 8
        echo "\t<div class=\"modcontent clearfix\">
\t\t";
        // line 9
        if ((( !twig_test_empty(($context["blogs"] ?? null)) && (isset($context["error_no_database"]) || array_key_exists("error_no_database", $context))) && (($context["error_no_database"] ?? null) == ""))) {
            echo "\t
\t\t\t";
            // line 10
            $context["count_item"] = twig_length_filter($this->env, ($context["blogs"] ?? null));
            // line 11
            echo "\t\t\t";
            $context["cls_btn_page"] = (((($context["button_page"] ?? null) == "top")) ? ("buttom-type1") : ("button-type2"));
            // line 12
            echo "\t\t\t";
            $context["btn_type"] = (((($context["button_page"] ?? null) == "top")) ? ("button-type1") : ("button-type2"));
            // line 13
            echo "\t\t\t";
            $context["btn_prev"] = (((($context["button_page"] ?? null) == "top")) ? ("&#171;") : ("&#139;"));
            // line 14
            echo "\t\t\t";
            $context["btn_next"] = (((($context["button_page"] ?? null) == "top")) ? ("&#187;") : ("&#155;"));
            // line 15
            echo "\t\t\t";
            $context["i"] = 0;
            // line 16
            echo "\t\t\t<div id=\"";
            echo ($context["tag_id"] ?? null);
            echo "\" class=\"so-blog-external ";
            echo ($context["cls_btn_page"] ?? null);
            echo " ";
            echo ($context["btn_type"] ?? null);
            echo "\">
\t\t\t\t";
            // line 17
            if ((($context["type_show"] ?? null) == "simple")) {
                // line 18
                echo "\t\t\t\t\t<div class=\"blog-external-simple\">
\t\t\t\t\t\t";
                // line 19
                $context["k"] = 0;
                // line 20
                echo "\t\t\t\t\t\t";
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
                    // line 21
                    echo "\t\t\t\t\t\t\t";
                    $context["k"] = (($context["k"] ?? null) + 1);
                    // line 22
                    echo "\t\t\t\t\t\t\t<div class=\"cat-wrap\">
\t\t\t\t\t\t\t\t<div class=\"media\">
\t\t\t\t\t\t\t\t\t";
                    // line 24
                    echo twig_include($this->env, $context, (($context["theme_config"] ?? null) . "/template/extension/module/so_latest_blog/default_items.twig"));
                    echo "
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
                    // line 27
                    $context["clear"] = "clr1";
                    // line 28
                    echo "\t\t\t\t\t\t\t";
                    if (((($context["k"] ?? null) % 2) == 0)) {
                        echo " ";
                        $context["clear"] = (($context["clear"] ?? null) . " clr2");
                    }
                    // line 29
                    echo "\t\t\t\t\t\t\t";
                    if (((($context["k"] ?? null) % 3) == 0)) {
                        echo " ";
                        $context["clear"] = (($context["clear"] ?? null) . " clr3");
                    }
                    // line 30
                    echo "\t\t\t\t\t\t\t";
                    if (((($context["k"] ?? null) % 4) == 0)) {
                        echo " ";
                        $context["clear"] = (($context["clear"] ?? null) . " clr4");
                    }
                    // line 31
                    echo "\t\t\t\t\t\t\t";
                    if (((($context["k"] ?? null) % 5) == 0)) {
                        echo " ";
                        $context["clear"] = (($context["clear"] ?? null) . " clr5");
                    }
                    // line 32
                    echo "\t\t\t\t\t\t\t";
                    if (((($context["k"] ?? null) % 6) == 0)) {
                        echo " ";
                        $context["clear"] = (($context["clear"] ?? null) . " clr6");
                    }
                    // line 33
                    echo "\t\t\t\t\t\t\t<div class=\"";
                    echo ($context["clear"] ?? null);
                    echo "\"></div>
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
                // line 35
                echo "\t\t\t\t\t</div>
\t\t\t\t";
            } else {
                // line 37
                echo "\t\t\t\t\t<div class=\"blog-external\" data-effect=\"";
                echo ($context["effect"] ?? null);
                echo "\">
\t\t\t\t\t\t";
                // line 38
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
                    // line 39
                    echo "\t\t\t\t\t\t\t";
                    $context["i"] = (($context["i"] ?? null) + 1);
                    // line 40
                    echo "\t\t\t\t\t\t\t";
                    if ((((($context["i"] ?? null) % ($context["nb_rows"] ?? null)) == 1) || (($context["nb_rows"] ?? null) == 1))) {
                        // line 41
                        echo "\t\t\t\t\t\t\t\t<div class=\"media\">
\t\t\t\t\t\t\t";
                    }
                    // line 43
                    echo "
\t\t\t\t\t\t\t";
                    // line 44
                    echo twig_include($this->env, $context, (($context["theme_config"] ?? null) . "/template/extension/module/so_latest_blog/default_items.twig"));
                    echo "
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t";
                    // line 46
                    if ((((($context["i"] ?? null) % ($context["nb_rows"] ?? null)) == 0) || (($context["i"] ?? null) == ($context["count_item"] ?? null)))) {
                        // line 47
                        echo "\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
                    }
                    // line 48
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
                // line 50
                echo "\t\t\t\t\t</div>
\t\t\t\t";
            }
            // line 52
            echo "\t\t\t</div>
\t\t\t<script type=\"text/javascript\">
\t\t\t\t//<![CDATA[
\t\t\t\tjQuery(document).ready(function (\$) {
\t\t\t\t\t;(function (element) {
\t\t\t\t\t\tvar \$element = \$(element),
\t\t\t\t\t\t\t\t\$extraslider = \$(\".blog-external\", \$element),
\t\t\t\t\t\t\t\t_delay = ";
            // line 59
            echo ($context["delay"] ?? null);
            echo ",
\t\t\t\t\t\t_duration = ";
            // line 60
            echo ($context["duration"] ?? null);
            echo ",
\t\t\t\t\t\t_effect = '";
            // line 61
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
            // line 77
            if ((($context["dots"] ?? null) == "true")) {
                // line 78
                echo "\t\t\t\t\t\t\t\tif (\$(\".owl2-dot\", \$element).length < 2) {
\t\t\t\t\t\t\t\t\t\$(\".owl2-prev\", \$element).css(\"display\", \"none\");
\t\t\t\t\t\t\t\t\t\$(\".owl2-next\", \$element).css(\"display\", \"none\");
\t\t\t\t\t\t\t\t\t\$(\".owl2-dot\", \$element).css(\"display\", \"none\");
\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t";
            }
            // line 84
            echo "
\t\t\t\t\t\t\t";
            // line 85
            if ((($context["button_page"] ?? null) == "top")) {
                // line 86
                echo "\t\t\t\t\t\t\t\t\$(\".owl2-controls\", \$element).insertBefore(\$extraslider);
\t\t\t\t\t\t\t\t\$(\".owl2-dots\", \$element).insertAfter(\$(\".owl2-prev\", \$element));
\t\t\t\t\t\t\t";
            } else {
                // line 89
                echo "\t\t\t\t\t\t\t\t\$(\".owl2-nav\", \$element).insertBefore(\$extraslider);
\t\t\t\t\t\t\t\t\$(\".owl2-controls\", \$element).insertAfter(\$extraslider);
\t\t\t\t\t\t\t";
            }
            // line 92
            echo "\t\t\t\t\t\t});

\t\t\t\t\t\t\$extraslider.owlCarousel2({
\t\t\t\t\t\t\tmargin: 10,
\t\t\t\t\t\t\tslideBy: ";
            // line 96
            echo ($context["slideBy"] ?? null);
            echo ",
\t\t\t\t\t\t\tautoplay: ";
            // line 97
            echo ($context["autoplay"] ?? null);
            echo ",
\t\t\t\t\t\t\tautoplayHoverPause: ";
            // line 98
            echo ($context["pausehover"] ?? null);
            echo ",
\t\t\t\t\t\t\tautoplayTimeout: ";
            // line 99
            echo ($context["autoplay_timeout"] ?? null);
            echo ",
\t\t\t\t\t\t\tautoplaySpeed: ";
            // line 100
            echo ($context["autoplaySpeed"] ?? null);
            echo ",
\t\t\t\t\t\t\tstartPosition: ";
            // line 101
            echo ($context["startPosition"] ?? null);
            echo ",
\t\t\t\t\t\t\tmouseDrag: ";
            // line 102
            echo ($context["mouseDrag"] ?? null);
            echo ",
\t\t\t\t\t\t\ttouchDrag: ";
            // line 103
            echo ($context["touchDrag"] ?? null);
            echo ",
\t\t\t\t\t\t\tautoWidth: false,
\t\t\t\t\t\t\trtl: ";
            // line 105
            echo (((($context["direction"] ?? null) == "ltr")) ? ("false") : ("true"));
            echo ",
\t\t\t\t\t\t\tresponsive: {
\t\t\t\t\t\t\t\t0: \t{ items: ";
            // line 107
            echo ($context["nb_column4"] ?? null);
            echo " } ,
\t\t\t\t\t\t\t\t480: { items: ";
            // line 108
            echo ($context["nb_column3"] ?? null);
            echo " },
\t\t\t\t\t\t\t\t768: { items: ";
            // line 109
            echo ($context["nb_column2"] ?? null);
            echo " },
\t\t\t\t\t\t\t\t992: { items: ";
            // line 110
            echo ($context["nb_column1"] ?? null);
            echo " },
\t\t\t\t\t\t\t\t1200: {items: ";
            // line 111
            echo ($context["nb_column0"] ?? null);
            echo "},
\t\t\t\t\t\t\t},
\t\t\t\t\t\t\tdotClass: \"owl2-dot\",
\t\t\t\t\t\t\tdotsClass: \"owl2-dots\",
\t\t\t\t\t\t\tdots: ";
            // line 115
            echo ($context["dots"] ?? null);
            echo ",
\t\t\t\t\t\t\tdotsSpeed:";
            // line 116
            echo ($context["dotsSpeed"] ?? null);
            echo ",
\t\t\t\t\t\t\tnav: ";
            // line 117
            echo ($context["nav"] ?? null);
            echo ",
\t\t\t\t\t\t\tloop: ";
            // line 118
            echo ($context["loop"] ?? null);
            echo ",
\t\t\t\t\t\t\tnavSpeed: ";
            // line 119
            echo ($context["navSpeed"] ?? null);
            echo ",
\t\t\t\t\t\t\tnavText: [\"";
            // line 120
            echo ($context["btn_prev"] ?? null);
            echo "\", \"";
            echo ($context["btn_next"] ?? null);
            echo "\"],
\t\t\t\t\t\t\tnavClass: [\"owl2-prev\", \"owl2-next\"]
\t\t\t\t\t\t});

\t\t\t\t\t\t\$extraslider.on(\"translate.owl.carousel2\", function (e) {
\t\t\t\t\t\t\t";
            // line 125
            if ((($context["dots"] ?? null) == "true")) {
                // line 126
                echo "\t\t\t\t\t\t\t\tif (\$(\".owl2-dot\", \$element).length < 2) {
\t\t\t\t\t\t\t\t\t\$(\".owl2-prev\", \$element).css(\"display\", \"none\");
\t\t\t\t\t\t\t\t\t\$(\".owl2-next\", \$element).css(\"display\", \"none\");
\t\t\t\t\t\t\t\t\t\$(\".owl2-dot\", \$element).css(\"display\", \"none\");
\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t";
            }
            // line 132
            echo "
\t\t\t\t\t\t\t//var \$item_active = \$(\".owl2-item.active\", \$element);
\t\t\t\t\t\t\t//_UngetAnimate(\$item_active);
\t\t\t\t\t\t\t//_getAnimate(\$item_active);
\t\t\t\t\t\t});

\t\t\t\t\t\t\$extraslider.on(\"translated.owl.carousel2\", function (e) {
\t\t\t\t\t\t\t";
            // line 139
            if ((($context["dots"] ?? null) == "true")) {
                // line 140
                echo "\t\t\t\t\t\t\t\tif (\$(\".owl2-dot\", \$element).length < 2) {
\t\t\t\t\t\t\t\t\t\$(\".owl2-prev\", \$element).css(\"display\", \"none\");
\t\t\t\t\t\t\t\t\t\$(\".owl2-next\", \$element).css(\"display\", \"none\");
\t\t\t\t\t\t\t\t\t\$(\".owl2-dot\", \$element).css(\"display\", \"none\");
\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t";
            }
            // line 146
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
            // line 196
            echo ($context["tag_id"] ?? null);
            echo "\");
\t\t\t\t});
\t\t\t\t//]]>
\t\t\t</script>
\t\t";
        } elseif ((        // line 200
(isset($context["error_no_database"]) || array_key_exists("error_no_database", $context)) && (($context["error_no_database"] ?? null) != ""))) {
            // line 201
            echo "\t\t\t<div class=\"alert alert-danger\"><i class=\"fa fa-exclamation-circle\"></i>";
            echo ($context["error_no_database"] ?? null);
            echo "</div>
\t\t";
        } else {
            // line 203
            echo "    \t\t";
            echo ($context["NoItem"] ?? null);
            echo "
\t\t";
        }
        // line 205
        echo "\t</div>
\t";
        // line 206
        if ((($context["post_text"] ?? null) != "")) {
            // line 207
            echo "\t\t<div class=\"form-group\">
\t\t\t";
            // line 208
            echo ($context["post_text"] ?? null);
            echo "
\t\t</div>
\t";
        }
        // line 211
        echo "</div>";
    }

    public function getTemplateName()
    {
        return "so-mobile/template/extension/module/so_latest_blog/default.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  532 => 211,  526 => 208,  523 => 207,  521 => 206,  518 => 205,  512 => 203,  506 => 201,  504 => 200,  497 => 196,  445 => 146,  437 => 140,  435 => 139,  426 => 132,  418 => 126,  416 => 125,  406 => 120,  402 => 119,  398 => 118,  394 => 117,  390 => 116,  386 => 115,  379 => 111,  375 => 110,  371 => 109,  367 => 108,  363 => 107,  358 => 105,  353 => 103,  349 => 102,  345 => 101,  341 => 100,  337 => 99,  333 => 98,  329 => 97,  325 => 96,  319 => 92,  314 => 89,  309 => 86,  307 => 85,  304 => 84,  296 => 78,  294 => 77,  275 => 61,  271 => 60,  267 => 59,  258 => 52,  254 => 50,  239 => 48,  235 => 47,  233 => 46,  228 => 44,  225 => 43,  221 => 41,  218 => 40,  215 => 39,  198 => 38,  193 => 37,  189 => 35,  172 => 33,  166 => 32,  160 => 31,  154 => 30,  148 => 29,  142 => 28,  140 => 27,  134 => 24,  130 => 22,  127 => 21,  109 => 20,  107 => 19,  104 => 18,  102 => 17,  93 => 16,  90 => 15,  87 => 14,  84 => 13,  81 => 12,  78 => 11,  76 => 10,  72 => 9,  69 => 8,  63 => 6,  60 => 5,  54 => 3,  52 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "so-mobile/template/extension/module/so_latest_blog/default.twig", "/home/azhkhn/public_html/protidin.com.bd/catalog/view/theme/so-mobile/template/extension/module/so_latest_blog/default.twig");
    }
}
