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

/* so-mobile/template/extension/module/so_megamenu/default.twig */
class __TwigTemplate_23d044108f6ec4bcceaa2114c107828a511eb2fcaa8cbba47cd2342494d3800e extends \Twig\Template
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
        echo "<div class=\"responsive megamenu-style-dev\">
\t";
        // line 2
        if ((twig_get_attribute($this->env, $this->source, ($context["ustawienia"] ?? null), "orientation", [], "any", false, false, false, 2) == 1)) {
            // line 3
            echo "\t<div class=\"so-vertical-menu no-gutter\">
\t";
        }
        // line 5
        echo "\t
\t";
        // line 6
        if ((twig_get_attribute($this->env, $this->source, ($context["ustawienia"] ?? null), "disp_title_module", [], "any", false, false, false, 6) && ($context["head_name"] ?? null))) {
            // line 7
            echo "\t\t<h3>";
            echo ($context["head_name"] ?? null);
            echo "</h3>
\t";
        }
        // line 9
        echo "\t<nav class=\"navbar-default\">
\t\t<div class=\" container-megamenu ";
        // line 10
        if ((twig_get_attribute($this->env, $this->source, ($context["ustawienia"] ?? null), "full_width", [], "any", false, false, false, 10) != 1)) {
            echo " ";
            echo "container";
            echo " ";
        }
        echo " ";
        if ((twig_get_attribute($this->env, $this->source, ($context["ustawienia"] ?? null), "orientation", [], "any", false, false, false, 10) == 1)) {
            echo " ";
            echo "vertical ";
            echo " ";
        } else {
            echo " ";
            echo "horizontal";
            echo " ";
        }
        echo "\">
\t\t";
        // line 11
        if ((twig_get_attribute($this->env, $this->source, ($context["ustawienia"] ?? null), "orientation", [], "any", false, false, false, 11) == 1)) {
            // line 12
            echo "\t\t\t<div id=\"menuHeading\">
\t\t\t\t<div class=\"megamenuToogle-wrapper\">
\t\t\t\t\t<div class=\"megamenuToogle-pattern\">
\t\t\t\t\t\t<div class=\"container\">
\t\t\t\t\t\t\t<div><span></span><span></span><span></span></div>
\t\t\t\t\t\t\t";
            // line 17
            echo ($context["navigation_text"] ?? null);
            echo "
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"navbar-header\">
\t\t\t\t<button type=\"button\" id=\"show-verticalmenu\" data-toggle=\"collapse\"  class=\"navbar-toggle\">
\t\t\t\t\t<!-- <span class=\"icon-bar\"></span>
\t\t\t\t\t<span class=\"icon-bar\"></span>
\t\t\t\t\t<span class=\"icon-bar\"></span> -->
\t\t\t\t\t<i class=\"fa fa-bars\"></i>
\t\t\t\t\t<span>";
            // line 28
            echo ($context["navigation_text"] ?? null);
            echo "</span>
\t\t\t\t</button>
\t\t\t</div>
\t\t";
        } else {
            // line 32
            echo "\t\t\t<div class=\"navbar-header\">
\t\t\t\t<button type=\"button\" id=\"show-megamenu\" data-toggle=\"collapse\"  class=\"navbar-toggle\">
\t\t\t\t\t<span class=\"icon-bar\"></span>
\t\t\t\t\t<span class=\"icon-bar\"></span>
\t\t\t\t\t<span class=\"icon-bar\"></span>
\t\t\t\t</button>
\t\t\t</div>
\t\t";
        }
        // line 40
        echo "
\t\t";
        // line 41
        if ((twig_get_attribute($this->env, $this->source, ($context["ustawienia"] ?? null), "orientation", [], "any", false, false, false, 41) == 1)) {
            // line 42
            echo "\t\t\t<div class=\"vertical-wrapper\">
\t\t";
        } else {
            // line 44
            echo "\t\t\t<div class=\"megamenu-wrapper\">
\t\t";
        }
        // line 46
        echo "
\t\t";
        // line 47
        if ((twig_get_attribute($this->env, $this->source, ($context["ustawienia"] ?? null), "orientation", [], "any", false, false, false, 47) == 1)) {
            // line 48
            echo "\t\t\t<span id=\"remove-verticalmenu\" class=\"fa fa-times\"></span>
\t\t";
        } else {
            // line 50
            echo "\t\t\t<span id=\"remove-megamenu\" class=\"fa fa-times\"></span>
\t\t";
        }
        // line 52
        echo "
\t\t\t<div class=\"megamenu-pattern\">
\t\t\t\t<div class=\"container\">
\t\t\t\t\t<ul class=\"megamenu\"
\t\t\t\t\tdata-transition=\"";
        // line 56
        if ((twig_get_attribute($this->env, $this->source, ($context["ustawienia"] ?? null), "animation", [], "any", false, false, false, 56) != "")) {
            echo twig_get_attribute($this->env, $this->source, ($context["ustawienia"] ?? null), "animation", [], "any", false, false, false, 56);
        } else {
            echo "none";
        }
        echo "\" data-animationtime=\"";
        if (((twig_get_attribute($this->env, $this->source, ($context["ustawienia"] ?? null), "animation_time", [], "any", false, false, false, 56) > 0) && (twig_get_attribute($this->env, $this->source, ($context["ustawienia"] ?? null), "animation_time", [], "any", false, false, false, 56) < 5000))) {
            echo twig_get_attribute($this->env, $this->source, ($context["ustawienia"] ?? null), "animation_time", [], "any", false, false, false, 56);
        } else {
            echo 500;
        }
        echo "\">
\t\t\t\t\t\t";
        // line 57
        if (((twig_get_attribute($this->env, $this->source, ($context["ustawienia"] ?? null), "home_item", [], "any", false, false, false, 57) == "icon") || (twig_get_attribute($this->env, $this->source, ($context["ustawienia"] ?? null), "home_item", [], "any", false, false, false, 57) == "text"))) {
            // line 58
            echo "\t\t\t\t\t\t\t<li class=\"home\">
\t\t\t\t\t\t\t\t<a href=\"";
            // line 59
            echo ($context["home"] ?? null);
            echo "\">
\t\t\t\t\t\t\t\t";
            // line 60
            if ((twig_get_attribute($this->env, $this->source, ($context["ustawienia"] ?? null), "home_item", [], "any", false, false, false, 60) == "icon")) {
                // line 61
                echo "\t\t\t\t\t\t\t\t\t<i class=\"fa fa-home\"></i>
\t\t\t\t\t\t\t\t";
            } else {
                // line 63
                echo "\t\t\t\t\t\t\t\t\t<span><strong>";
                echo ($context["home_text"] ?? null);
                echo "</strong></span>
\t\t\t\t\t\t\t\t";
            }
            // line 65
            echo "\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t";
        }
        // line 68
        echo "\t\t\t\t\t\t
\t\t\t\t\t\t";
        // line 69
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["menu"] ?? null));
        foreach ($context['_seq'] as $context["key"] => $context["row"]) {
            // line 70
            echo "\t\t\t\t\t\t\t";
            $context["class"] = "";
            // line 71
            echo "\t\t\t\t\t\t\t";
            $context["icon_font"] = "";
            // line 72
            echo "\t\t\t\t\t\t\t";
            $context["class_link"] = "clearfix";
            // line 73
            echo "\t\t\t\t\t\t\t";
            $context["label_item"] = "";
            // line 74
            echo "\t\t\t\t\t\t\t";
            $context["title"] = false;
            // line 75
            echo "\t\t\t\t\t\t\t";
            $context["target"] = false;
            // line 76
            echo "
\t\t\t\t\t\t\t";
            // line 77
            if (twig_in_filter("no_image", twig_get_attribute($this->env, $this->source, $context["row"], "icon", [], "any", false, false, false, 77))) {
                // line 78
                echo "\t\t\t\t\t\t\t\t";
                $context["icon"] = "";
                // line 79
                echo "\t\t\t\t\t\t\t";
            } else {
                // line 80
                echo "\t\t\t\t\t\t\t\t";
                $context["icon"] = twig_get_attribute($this->env, $this->source, $context["row"], "icon", [], "any", false, false, false, 80);
                // line 81
                echo "\t\t\t\t\t\t\t";
            }
            // line 82
            echo "\t\t\t\t\t\t\t
\t\t\t\t\t\t\t";
            // line 83
            if ((twig_get_attribute($this->env, $this->source, $context["row"], "description", [], "any", false, false, false, 83) != "")) {
                // line 84
                echo "\t\t\t\t\t\t\t\t";
                $context["class_link"] = (($context["class_link"] ?? null) . " description");
                // line 85
                echo "\t\t\t\t\t\t\t";
            }
            // line 86
            echo "
\t\t\t\t\t\t\t";
            // line 87
            if ((((($context["route"] ?? null) && (($context["route"] ?? null) == twig_get_attribute($this->env, $this->source, $context["row"], "route", [], "any", false, false, false, 87))) && ($context["path"] ?? null)) && (($context["path"] ?? null) == twig_get_attribute($this->env, $this->source, $context["row"], "path", [], "any", false, false, false, 87)))) {
                // line 88
                echo "\t\t\t\t\t\t\t\t";
                $context["class"] = (($context["class"] ?? null) . " active_menu");
                // line 89
                echo "\t\t\t\t\t\t\t";
            }
            // line 90
            echo "
\t\t\t\t\t\t\t";
            // line 91
            if (twig_get_attribute($this->env, $this->source, $context["row"], "class_menu", [], "any", false, false, false, 91)) {
                // line 92
                echo "\t\t\t\t\t\t\t\t";
                $context["class"] = (($context["class"] ?? null) . twig_get_attribute($this->env, $this->source, $context["row"], "class_menu", [], "any", false, false, false, 92));
                // line 93
                echo "\t\t\t\t\t\t\t";
            }
            // line 94
            echo "
\t\t\t\t\t\t\t";
            // line 95
            if (twig_get_attribute($this->env, $this->source, $context["row"], "icon_font", [], "any", false, false, false, 95)) {
                // line 96
                echo "\t\t\t\t\t\t\t\t";
                $context["icon_font"] = (((($context["icon_font"] ?? null) . "<i class=\"") . twig_get_attribute($this->env, $this->source, $context["row"], "icon_font", [], "any", false, false, false, 96)) . "\"></i>");
                // line 97
                echo "\t\t\t\t\t\t\t";
            }
            // line 98
            echo "
\t\t\t\t\t\t\t";
            // line 99
            if (twig_get_attribute($this->env, $this->source, $context["row"], "label_item", [], "any", false, false, false, 99)) {
                // line 100
                echo "\t\t\t\t\t\t\t\t";
                $context["label_item"] = (((($context["label_item"] ?? null) . "<span class=\"label") . twig_get_attribute($this->env, $this->source, $context["row"], "label_item", [], "any", false, false, false, 100)) . "\"></span>");
                // line 101
                echo "\t\t\t\t\t\t\t";
            }
            // line 102
            echo "
\t\t\t\t\t\t\t";
            // line 103
            if ((twig_test_iterable(twig_get_attribute($this->env, $this->source, $context["row"], "submenu", [], "any", false, false, false, 103)) && twig_get_attribute($this->env, $this->source, $context["row"], "submenu", [], "any", false, false, false, 103))) {
                // line 104
                echo "\t\t\t\t\t\t\t\t";
                $context["class"] = (($context["class"] ?? null) . " with-sub-menu");
                // line 105
                echo "\t\t\t\t\t\t\t\t";
                if ((twig_get_attribute($this->env, $this->source, $context["row"], "submenu_type", [], "any", false, false, false, 105) == 1)) {
                    // line 106
                    echo "\t\t\t\t\t\t\t\t\t";
                    $context["class"] = (($context["class"] ?? null) . " click");
                    // line 107
                    echo "\t\t\t\t\t\t\t\t";
                } else {
                    // line 108
                    echo "\t\t\t\t\t\t\t\t\t";
                    $context["class"] = (($context["class"] ?? null) . " hover");
                    // line 109
                    echo "\t\t\t\t\t\t\t\t";
                }
                // line 110
                echo "\t\t\t\t\t\t\t";
            }
            // line 111
            echo "
\t\t\t\t\t\t\t";
            // line 112
            if ((twig_get_attribute($this->env, $this->source, $context["row"], "position", [], "any", false, false, false, 112) == 1)) {
                // line 113
                echo "\t\t\t\t\t\t\t\t";
                $context["class"] = (($context["class"] ?? null) . " pull-right");
                // line 114
                echo "\t\t\t\t\t\t\t";
            }
            // line 115
            echo "
\t\t\t\t\t\t\t";
            // line 116
            if ((twig_get_attribute($this->env, $this->source, $context["row"], "submenu_type", [], "any", false, false, false, 116) == 2)) {
                // line 117
                echo "\t\t\t\t\t\t\t\t";
                $context["title"] = "title=\"hover-intent\"";
                // line 118
                echo "\t\t\t\t\t\t\t";
            }
            // line 119
            echo "
\t\t\t\t\t\t\t";
            // line 120
            if ((twig_get_attribute($this->env, $this->source, $context["row"], "new_window", [], "any", false, false, false, 120) == 1)) {
                // line 121
                echo "\t\t\t\t\t\t\t\t";
                $context["target"] = "target=\"_blank\"";
                // line 122
                echo "\t\t\t\t\t\t\t";
            }
            // line 123
            echo "
\t\t\t\t\t\t\t";
            // line 124
            if ((twig_get_attribute($this->env, $this->source, ($context["ustawienia"] ?? null), "orientation", [], "any", false, false, false, 124) == 1)) {
                // line 125
                echo "\t\t\t\t\t\t\t\t<li class=\"item-vertical ";
                echo ($context["class"] ?? null);
                echo "\" ";
                echo ($context["title"] ?? null);
                echo ">
\t\t\t\t\t\t\t\t\t<p class='close-menu'></p>
\t\t\t\t\t\t\t\t\t";
                // line 127
                if ((twig_test_iterable(twig_get_attribute($this->env, $this->source, $context["row"], "submenu", [], "any", false, false, false, 127)) && twig_get_attribute($this->env, $this->source, $context["row"], "submenu", [], "any", false, false, false, 127))) {
                    // line 128
                    echo "\t\t\t\t\t\t\t\t\t\t<a href=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["row"], "link", [], "any", false, false, false, 128);
                    echo "\" class=\"";
                    echo ($context["class_link"] ?? null);
                    echo "\" ";
                    echo ($context["target"] ?? null);
                    echo ">
\t\t\t\t\t\t\t\t\t\t\t<span>
\t\t\t\t\t\t\t\t\t\t\t\t<strong>";
                    // line 130
                    echo (((($context["icon_font"] ?? null) . ($context["icon"] ?? null)) . (($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = twig_get_attribute($this->env, $this->source, $context["row"], "name", [], "any", false, false, false, 130)) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4[($context["lang_id"] ?? null)] ?? null) : null)) . twig_get_attribute($this->env, $this->source, $context["row"], "description", [], "any", false, false, false, 130));
                    echo "</strong>
\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t";
                    // line 132
                    echo ($context["label_item"] ?? null);
                    echo "
\t\t\t\t\t\t\t\t\t\t\t<b class='fa fa-angle-right' ></b>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t";
                } else {
                    // line 136
                    echo "\t\t\t\t\t\t\t\t \t\t<a href=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["row"], "link", [], "any", false, false, false, 136);
                    echo "\" class=\"";
                    echo ($context["class_link"] ?? null);
                    echo "\" ";
                    echo ($context["target"] ?? null);
                    echo ">
\t\t\t\t\t\t\t\t\t\t\t<span>
\t\t\t\t\t\t\t\t\t\t\t\t<strong>";
                    // line 138
                    echo (((($context["icon_font"] ?? null) . ($context["icon"] ?? null)) . (($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = twig_get_attribute($this->env, $this->source, $context["row"], "name", [], "any", false, false, false, 138)) && is_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) || $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 instanceof ArrayAccess ? ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144[($context["lang_id"] ?? null)] ?? null) : null)) . twig_get_attribute($this->env, $this->source, $context["row"], "description", [], "any", false, false, false, 138));
                    echo "</strong>
\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t";
                    // line 140
                    echo ($context["label_item"] ?? null);
                    echo "
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t";
                }
                // line 143
                echo "
\t\t\t\t\t\t\t\t\t";
                // line 144
                if ((twig_test_iterable(twig_get_attribute($this->env, $this->source, $context["row"], "submenu", [], "any", false, false, false, 144)) && twig_get_attribute($this->env, $this->source, $context["row"], "submenu", [], "any", false, false, false, 144))) {
                    // line 145
                    echo "\t\t\t\t\t\t\t\t\t\t";
                    if (twig_in_filter("%", twig_get_attribute($this->env, $this->source, $context["row"], "submenu_width", [], "any", false, false, false, 145))) {
                        // line 146
                        echo "\t\t\t\t\t\t\t\t\t\t\t<div class=\"sub-menu\" data-subwidth =\"";
                        echo twig_replace_filter(twig_get_attribute($this->env, $this->source, $context["row"], "submenu_width", [], "any", false, false, false, 146), ["%" => ""]);
                        echo "\">
\t\t\t\t\t\t\t\t\t\t";
                    } else {
                        // line 148
                        echo "\t\t\t\t\t\t\t\t\t\t\t<div class=\"sub-menu\" style=\"width:";
                        echo twig_get_attribute($this->env, $this->source, $context["row"], "submenu_width", [], "any", false, false, false, 148);
                        echo "\">
\t\t\t\t\t\t\t\t\t\t";
                    }
                    // line 150
                    echo "
\t\t\t\t\t\t\t\t\t\t<div class=\"content\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t\t\t";
                    // line 153
                    $context["row_fluid"] = 0;
                    // line 154
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["row"], "submenu", [], "any", false, false, false, 154));
                    foreach ($context['_seq'] as $context["_key"] => $context["submenu"]) {
                        // line 155
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        if (((($context["row_fluid"] ?? null) + twig_get_attribute($this->env, $this->source, $context["submenu"], "content_width", [], "any", false, false, false, 155)) > 12)) {
                            // line 156
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                            $context["row_fluid"] = twig_get_attribute($this->env, $this->source, $context["submenu"], "content_width", [], "any", false, false, false, 156);
                            // line 157
                            echo "\t\t\t\t\t\t\t\t\t\t \t\t\t\t</div><div class=\"border\"></div><div class=\"row\">
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        } else {
                            // line 159
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                            $context["row_fluid"] = (($context["row_fluid"] ?? null) + twig_get_attribute($this->env, $this->source, $context["submenu"], "content_width", [], "any", false, false, false, 159));
                            // line 160
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        }
                        // line 161
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-";
                        echo twig_get_attribute($this->env, $this->source, $context["submenu"], "content_width", [], "any", false, false, false, 161);
                        echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        // line 162
                        if ((twig_get_attribute($this->env, $this->source, $context["submenu"], "content_type", [], "any", false, false, false, 162) == 0)) {
                            // line 163
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"html ";
                            echo twig_get_attribute($this->env, $this->source, $context["submenu"], "class_menu", [], "any", false, false, false, 163);
                            echo "\">";
                            echo twig_get_attribute($this->env, $this->source, $context["submenu"], "html", [], "any", false, false, false, 163);
                            echo "</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        } elseif ((twig_get_attribute($this->env, $this->source,                         // line 164
$context["submenu"], "content_type", [], "any", false, false, false, 164) == 1)) {
                            // line 165
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                            if (twig_test_iterable(twig_get_attribute($this->env, $this->source, $context["submenu"], "product", [], "any", false, false, false, 165))) {
                                // line 166
                                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"product ";
                                echo twig_get_attribute($this->env, $this->source, $context["submenu"], "class_menu", [], "any", false, false, false, 166);
                                echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"image\"><a href=\"";
                                // line 167
                                echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["submenu"], "product", [], "any", false, false, false, 167), "link", [], "any", false, false, false, 167);
                                echo "\" onclick=\"window.location = '";
                                echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["submenu"], "product", [], "any", false, false, false, 167), "link", [], "any", false, false, false, 167);
                                echo "'\"><img src=\"";
                                echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["submenu"], "product", [], "any", false, false, false, 167), "image", [], "any", false, false, false, 167);
                                echo "\" alt=\"\"></a></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"name\"><a href=\"";
                                // line 168
                                echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["submenu"], "product", [], "any", false, false, false, 168), "link", [], "any", false, false, false, 168);
                                echo "\" onclick=\"window.location = '";
                                echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["submenu"], "product", [], "any", false, false, false, 168), "link", [], "any", false, false, false, 168);
                                echo "'\">";
                                echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["submenu"], "product", [], "any", false, false, false, 168), "name", [], "any", false, false, false, 168);
                                echo "</a></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"price\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                // line 170
                                if ( !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["submenu"], "product", [], "any", false, false, false, 170), "special", [], "any", false, false, false, 170)) {
                                    // line 171
                                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                    echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["submenu"], "product", [], "any", false, false, false, 171), "price", [], "any", false, false, false, 171);
                                    echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                } else {
                                    // line 173
                                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                    echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["submenu"], "product", [], "any", false, false, false, 173), "special", [], "any", false, false, false, 173);
                                    echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                }
                                // line 175
                                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                            }
                            // line 178
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        } elseif ((twig_get_attribute($this->env, $this->source, $context["submenu"], "content_type", [], "any", false, false, false, 178) == 2)) {
                            // line 179
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"categories ";
                            echo twig_get_attribute($this->env, $this->source, $context["submenu"], "class_menu", [], "any", false, false, false, 179);
                            echo "\">";
                            echo twig_get_attribute($this->env, $this->source, $context["submenu"], "categories", [], "any", false, false, false, 179);
                            echo "</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        } elseif ((twig_get_attribute($this->env, $this->source,                         // line 180
$context["submenu"], "content_type", [], "any", false, false, false, 180) == 3)) {
                            // line 181
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                            if (twig_test_iterable(twig_get_attribute($this->env, $this->source, $context["submenu"], "manufactures", [], "any", false, false, false, 181))) {
                                // line 182
                                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<ul class=\"manufacturer ";
                                echo twig_get_attribute($this->env, $this->source, $context["submenu"], "class_menu", [], "any", false, false, false, 182);
                                echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                // line 183
                                $context['_parent'] = $context;
                                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["submenu"], "manufactures", [], "any", false, false, false, 183));
                                foreach ($context['_seq'] as $context["_key"] => $context["manufacturer"]) {
                                    // line 184
                                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"";
                                    echo twig_get_attribute($this->env, $this->source, $context["manufacturer"], "link", [], "any", false, false, false, 184);
                                    echo "\">";
                                    echo twig_get_attribute($this->env, $this->source, $context["manufacturer"], "name", [], "any", false, false, false, 184);
                                    echo "</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                }
                                $_parent = $context['_parent'];
                                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['manufacturer'], $context['_parent'], $context['loop']);
                                $context = array_intersect_key($context, $_parent) + $_parent;
                                // line 186
                                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                            }
                            // line 188
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        } elseif ((twig_get_attribute($this->env, $this->source, $context["submenu"], "content_type", [], "any", false, false, false, 188) == 4)) {
                            // line 189
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["submenu"], "images", [], "any", false, false, false, 189), "show_title", [], "any", false, false, false, 189) == 1)) {
                                // line 190
                                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"title-submenu\">";
                                echo (($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b = twig_get_attribute($this->env, $this->source, $context["submenu"], "name", [], "any", false, false, false, 190)) && is_array($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b) || $__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b instanceof ArrayAccess ? ($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b[($context["lang_id"] ?? null)] ?? null) : null);
                                echo "</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                            }
                            // line 192
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"link ";
                            echo twig_get_attribute($this->env, $this->source, $context["submenu"], "class_menu", [], "any", false, false, false, 192);
                            echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                            // line 193
                            echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["submenu"], "images", [], "any", false, false, false, 193), "link", [], "any", false, false, false, 193);
                            echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        } elseif ((twig_get_attribute($this->env, $this->source,                         // line 195
$context["submenu"], "content_type", [], "any", false, false, false, 195) == 5)) {
                            // line 196
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["submenu"], "subcategory", [], "any", false, false, false, 196), "categories", [], "any", false, false, false, 196)) {
                                // line 197
                                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<ul class=\"subcategory ";
                                echo twig_get_attribute($this->env, $this->source, $context["submenu"], "class_menu", [], "any", false, false, false, 197);
                                echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                // line 198
                                $context['_parent'] = $context;
                                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["submenu"], "subcategory", [], "any", false, false, false, 198), "categories", [], "any", false, false, false, 198));
                                foreach ($context['_seq'] as $context["_key"] => $context["categories"]) {
                                    // line 199
                                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                    // line 200
                                    if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["submenu"], "subcategory", [], "any", false, false, false, 200), "show_title", [], "any", false, false, false, 200) == 1)) {
                                        // line 201
                                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
                                        echo twig_get_attribute($this->env, $this->source, $context["categories"], "href", [], "any", false, false, false, 201);
                                        echo "\" class=\"title-submenu ";
                                        echo twig_get_attribute($this->env, $this->source, $context["submenu"], "class_menu", [], "any", false, false, false, 201);
                                        echo "\">";
                                        echo twig_get_attribute($this->env, $this->source, $context["categories"], "name", [], "any", false, false, false, 201);
                                        echo "</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                    }
                                    // line 203
                                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                    if (twig_get_attribute($this->env, $this->source, $context["categories"], "categories", [], "any", false, false, false, 203)) {
                                        // line 204
                                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                        echo twig_get_attribute($this->env, $this->source, $context["categories"], "categories", [], "any", false, false, false, 204);
                                        echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                    }
                                    // line 206
                                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                    if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["submenu"], "subcategory", [], "any", false, false, false, 206), "show_image", [], "any", false, false, false, 206) == 1)) {
                                        // line 207
                                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"";
                                        echo twig_get_attribute($this->env, $this->source, $context["categories"], "thumb", [], "any", false, false, false, 207);
                                        echo "\" alt=\"\" >
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                    }
                                    // line 209
                                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                }
                                $_parent = $context['_parent'];
                                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['categories'], $context['_parent'], $context['loop']);
                                $context = array_intersect_key($context, $_parent) + $_parent;
                                // line 211
                                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                            }
                            // line 213
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        } elseif ((twig_get_attribute($this->env, $this->source, $context["submenu"], "content_type", [], "any", false, false, false, 213) == 6)) {
                            // line 214
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["submenu"], "productlist", [], "any", false, false, false, 214), "show_title", [], "any", false, false, false, 214) == 1)) {
                                // line 215
                                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"title-submenu\">";
                                echo (($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 = twig_get_attribute($this->env, $this->source, $context["submenu"], "name", [], "any", false, false, false, 215)) && is_array($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002) || $__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 instanceof ArrayAccess ? ($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002[($context["lang_id"] ?? null)] ?? null) : null);
                                echo "</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                            }
                            // line 217
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["submenu"], "productlist", [], "any", false, false, false, 217), "products", [], "any", false, false, false, 217)) {
                                // line 218
                                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                $context['_parent'] = $context;
                                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["submenu"], "productlist", [], "any", false, false, false, 218), "products", [], "any", false, false, false, 218));
                                foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                                    // line 219
                                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                    $context["itempage"] = ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["submenu"], "productlist", [], "any", false, false, false, 219), "col", [], "any", false, false, false, 219)) ? ((12 / twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["submenu"], "productlist", [], "any", false, false, false, 219), "col", [], "any", false, false, false, 219))) : (4));
                                    // line 220
                                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-xs-";
                                    echo ($context["itempage"] ?? null);
                                    echo " ";
                                    echo twig_get_attribute($this->env, $this->source, $context["submenu"], "class_menu", [], "any", false, false, false, 220);
                                    echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"product-thumb\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"image\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
                                    // line 223
                                    echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 223);
                                    echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"";
                                    // line 224
                                    echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 224);
                                    echo "\" alt=\"";
                                    echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 224);
                                    echo "\" title=\"";
                                    echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 224);
                                    echo "\" class=\"img-responsive\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"caption\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h4><a href=\"";
                                    // line 229
                                    echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 229);
                                    echo "\">";
                                    echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 229);
                                    echo "</a></h4>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p>";
                                    // line 230
                                    echo twig_get_attribute($this->env, $this->source, $context["product"], "description", [], "any", false, false, false, 230);
                                    echo "</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                    // line 231
                                    if (twig_get_attribute($this->env, $this->source, $context["product"], "rating", [], "any", false, false, false, 231)) {
                                        // line 232
                                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"rating\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                        // line 233
                                        $context['_parent'] = $context;
                                        $context['_seq'] = twig_ensure_traversable(range(1, 5));
                                        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                                            // line 234
                                            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                            if ((twig_get_attribute($this->env, $this->source, $context["product"], "rating", [], "any", false, false, false, 234) < $context["i"])) {
                                                // line 235
                                                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-2x\"></i></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                            } else {
                                                // line 237
                                                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"fa fa-stack\"><i class=\"fa fa-star fa-stack-2x\"></i><i class=\"fa fa-star-o fa-stack-2x\"></i></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                            }
                                            // line 239
                                            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                        }
                                        $_parent = $context['_parent'];
                                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                                        $context = array_intersect_key($context, $_parent) + $_parent;
                                        // line 240
                                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                    }
                                    // line 242
                                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                    // line 243
                                    if (twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 243)) {
                                        // line 244
                                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"price\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                        // line 245
                                        if ( !twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 245)) {
                                            // line 246
                                            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                            echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 246);
                                            echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t   \t\t";
                                        } else {
                                            // line 248
                                            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"price-new\">";
                                            echo twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 248);
                                            echo "</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"price-old\">";
                                            // line 249
                                            echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 249);
                                            echo "</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t   \t\t";
                                        }
                                        // line 251
                                        echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t   \t\t";
                                        // line 252
                                        if (twig_get_attribute($this->env, $this->source, $context["product"], "tax", [], "any", false, false, false, 252)) {
                                            // line 253
                                            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"price-tax\">";
                                            echo twig_get_attribute($this->env, $this->source, $context["product"], "tax", [], "any", false, false, false, 253);
                                            echo "</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                        }
                                        // line 255
                                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                    }
                                    // line 257
                                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t  \t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t  \t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t \t";
                                }
                                $_parent = $context['_parent'];
                                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
                                $context = array_intersect_key($context, $_parent) + $_parent;
                                // line 262
                                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                            }
                            // line 263
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        }
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['submenu'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 266
                    echo "\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>\t\t\t\t
\t\t\t\t\t\t\t\t\t\t</div>\t\t\t
\t\t\t\t\t\t\t\t\t";
                }
                // line 270
                echo "\t\t\t\t\t\t\t\t</li>\t\t\t\t\t\t\t
\t\t\t\t\t\t\t";
            } else {
                // line 271
                echo "\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<li class=\"";
                // line 272
                echo ($context["class"] ?? null);
                echo "\" ";
                echo ($context["title"] ?? null);
                echo ">
\t\t\t\t\t\t\t\t\t<p class='close-menu'></p>
\t\t\t\t\t\t\t\t\t";
                // line 274
                if ((twig_test_iterable(twig_get_attribute($this->env, $this->source, $context["row"], "submenu", [], "any", false, false, false, 274)) && twig_get_attribute($this->env, $this->source, $context["row"], "submenu", [], "any", false, false, false, 274))) {
                    // line 275
                    echo "\t\t\t\t\t\t\t\t\t\t<a href=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["row"], "link", [], "any", false, false, false, 275);
                    echo "\" class=\"";
                    echo ($context["class_link"] ?? null);
                    echo "\" ";
                    echo ($context["target"] ?? null);
                    echo ">
\t\t\t\t\t\t\t\t\t\t\t<strong>
\t\t\t\t\t\t\t\t\t\t\t\t";
                    // line 277
                    echo (((($context["icon_font"] ?? null) . ($context["icon"] ?? null)) . (($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 = twig_get_attribute($this->env, $this->source, $context["row"], "name", [], "any", false, false, false, 277)) && is_array($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4) || $__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 instanceof ArrayAccess ? ($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4[($context["lang_id"] ?? null)] ?? null) : null)) . twig_get_attribute($this->env, $this->source, $context["row"], "description", [], "any", false, false, false, 277));
                    echo "
\t\t\t\t\t\t\t\t\t\t\t</strong>
\t\t\t\t\t\t\t\t\t\t\t";
                    // line 279
                    echo ($context["label_item"] ?? null);
                    echo "
\t\t\t\t\t\t\t\t\t\t\t<b class='caret'></b>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t";
                } else {
                    // line 283
                    echo "\t\t\t\t\t\t\t\t\t\t<a href=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["row"], "link", [], "any", false, false, false, 283);
                    echo "\" class=\"";
                    echo ($context["class_link"] ?? null);
                    echo "\" ";
                    echo ($context["target"] ?? null);
                    echo ">
\t\t\t\t\t\t\t\t\t\t\t<strong>
\t\t\t\t\t\t\t\t\t\t\t\t";
                    // line 285
                    echo (((($context["icon_font"] ?? null) . ($context["icon"] ?? null)) . (($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 = twig_get_attribute($this->env, $this->source, $context["row"], "name", [], "any", false, false, false, 285)) && is_array($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666) || $__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 instanceof ArrayAccess ? ($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666[($context["lang_id"] ?? null)] ?? null) : null)) . twig_get_attribute($this->env, $this->source, $context["row"], "description", [], "any", false, false, false, 285));
                    echo "
\t\t\t\t\t\t\t\t\t\t\t</strong>
\t\t\t\t\t\t\t\t\t\t\t";
                    // line 287
                    echo ($context["label_item"] ?? null);
                    echo "
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t";
                }
                // line 290
                echo "
\t\t\t\t\t\t\t\t\t";
                // line 291
                if ((twig_test_iterable(twig_get_attribute($this->env, $this->source, $context["row"], "submenu", [], "any", false, false, false, 291)) && twig_get_attribute($this->env, $this->source, $context["row"], "submenu", [], "any", false, false, false, 291))) {
                    // line 292
                    echo "\t\t\t\t\t\t\t\t\t\t<div class=\"sub-menu\" style=\"width: ";
                    echo twig_get_attribute($this->env, $this->source, $context["row"], "submenu_width", [], "any", false, false, false, 292);
                    echo "\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"content\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    // line 295
                    $context["row_fluid"] = 0;
                    // line 296
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["row"], "submenu", [], "any", false, false, false, 296));
                    foreach ($context['_seq'] as $context["_key"] => $context["submenu"]) {
                        // line 297
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        if (((($context["row_fluid"] ?? null) + twig_get_attribute($this->env, $this->source, $context["submenu"], "content_width", [], "any", false, false, false, 297)) > 12)) {
                            // line 298
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                            $context["row_fluid"] = twig_get_attribute($this->env, $this->source, $context["submenu"], "content_width", [], "any", false, false, false, 298);
                            // line 299
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div><div class=\"border\"></div><div class=\"row\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        } else {
                            // line 301
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                            $context["row_fluid"] = (($context["row_fluid"] ?? null) + twig_get_attribute($this->env, $this->source, $context["submenu"], "content_width", [], "any", false, false, false, 301));
                            // line 302
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        }
                        // line 303
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-";
                        echo twig_get_attribute($this->env, $this->source, $context["submenu"], "content_width", [], "any", false, false, false, 303);
                        echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        // line 304
                        if ((twig_get_attribute($this->env, $this->source, $context["submenu"], "content_type", [], "any", false, false, false, 304) == 0)) {
                            // line 305
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"html ";
                            echo twig_get_attribute($this->env, $this->source, $context["submenu"], "class_menu", [], "any", false, false, false, 305);
                            echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                            // line 306
                            echo twig_get_attribute($this->env, $this->source, $context["submenu"], "html", [], "any", false, false, false, 306);
                            echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        } elseif ((twig_get_attribute($this->env, $this->source,                         // line 308
$context["submenu"], "content_type", [], "any", false, false, false, 308) == 1)) {
                            // line 309
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                            if (twig_test_iterable(twig_get_attribute($this->env, $this->source, $context["submenu"], "product", [], "any", false, false, false, 309))) {
                                // line 310
                                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"product ";
                                echo twig_get_attribute($this->env, $this->source, $context["submenu"], "class_menu", [], "any", false, false, false, 310);
                                echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"image\"><a href=\"";
                                // line 311
                                echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["submenu"], "product", [], "any", false, false, false, 311), "link", [], "any", false, false, false, 311);
                                echo "\" onclick=\"window.location = '";
                                echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["submenu"], "product", [], "any", false, false, false, 311), "link", [], "any", false, false, false, 311);
                                echo "'\"><img src=\"";
                                echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["submenu"], "product", [], "any", false, false, false, 311), "image", [], "any", false, false, false, 311);
                                echo "\" alt=\"\"></a></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"name\"><a href=\"";
                                // line 312
                                echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["submenu"], "product", [], "any", false, false, false, 312), "link", [], "any", false, false, false, 312);
                                echo "\" onclick=\"window.location = '";
                                echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["submenu"], "product", [], "any", false, false, false, 312), "link", [], "any", false, false, false, 312);
                                echo "'\">";
                                echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["submenu"], "product", [], "any", false, false, false, 312), "name", [], "any", false, false, false, 312);
                                echo "</a></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"price\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                // line 314
                                if ( !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["submenu"], "product", [], "any", false, false, false, 314), "special", [], "any", false, false, false, 314)) {
                                    // line 315
                                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                    echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["submenu"], "product", [], "any", false, false, false, 315), "price", [], "any", false, false, false, 315);
                                    echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                } else {
                                    // line 317
                                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                    echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["submenu"], "product", [], "any", false, false, false, 317), "special", [], "any", false, false, false, 317);
                                    echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                }
                                // line 319
                                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                            }
                            // line 322
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        } elseif ((twig_get_attribute($this->env, $this->source, $context["submenu"], "content_type", [], "any", false, false, false, 322) == 2)) {
                            // line 323
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"categories ";
                            echo twig_get_attribute($this->env, $this->source, $context["submenu"], "class_menu", [], "any", false, false, false, 323);
                            echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                            // line 324
                            echo twig_get_attribute($this->env, $this->source, $context["submenu"], "categories", [], "any", false, false, false, 324);
                            echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        } elseif ((twig_get_attribute($this->env, $this->source,                         // line 326
$context["submenu"], "content_type", [], "any", false, false, false, 326) == 3)) {
                            // line 327
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                            if (twig_test_iterable(twig_get_attribute($this->env, $this->source, $context["submenu"], "manufactures", [], "any", false, false, false, 327))) {
                                // line 328
                                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<ul class=\"manufacturer ";
                                echo twig_get_attribute($this->env, $this->source, $context["submenu"], "class_menu", [], "any", false, false, false, 328);
                                echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                // line 329
                                $context['_parent'] = $context;
                                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["submenu"], "manufactures", [], "any", false, false, false, 329));
                                foreach ($context['_seq'] as $context["_key"] => $context["manufacturer"]) {
                                    // line 330
                                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"";
                                    echo twig_get_attribute($this->env, $this->source, $context["manufacturer"], "link", [], "any", false, false, false, 330);
                                    echo "\">";
                                    echo twig_get_attribute($this->env, $this->source, $context["manufacturer"], "name", [], "any", false, false, false, 330);
                                    echo "</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                }
                                $_parent = $context['_parent'];
                                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['manufacturer'], $context['_parent'], $context['loop']);
                                $context = array_intersect_key($context, $_parent) + $_parent;
                                // line 332
                                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                            }
                            // line 334
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        } elseif ((twig_get_attribute($this->env, $this->source, $context["submenu"], "content_type", [], "any", false, false, false, 334) == 4)) {
                            // line 335
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["submenu"], "images", [], "any", false, false, false, 335), "show_title", [], "any", false, false, false, 335) == 1)) {
                                // line 336
                                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"title-submenu\">";
                                echo (($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e = twig_get_attribute($this->env, $this->source, $context["submenu"], "name", [], "any", false, false, false, 336)) && is_array($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e) || $__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e instanceof ArrayAccess ? ($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e[($context["lang_id"] ?? null)] ?? null) : null);
                                echo "</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                            }
                            // line 338
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"link ";
                            echo twig_get_attribute($this->env, $this->source, $context["submenu"], "class_menu", [], "any", false, false, false, 338);
                            echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                            // line 339
                            echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["submenu"], "images", [], "any", false, false, false, 339), "link", [], "any", false, false, false, 339);
                            echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        } elseif ((twig_get_attribute($this->env, $this->source,                         // line 341
$context["submenu"], "content_type", [], "any", false, false, false, 341) == 5)) {
                            // line 342
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["submenu"], "subcategory", [], "any", false, false, false, 342), "categories", [], "any", false, false, false, 342)) {
                                // line 343
                                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<ul class=\"subcategory ";
                                echo twig_get_attribute($this->env, $this->source, $context["submenu"], "class_menu", [], "any", false, false, false, 343);
                                echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                // line 344
                                $context['_parent'] = $context;
                                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["submenu"], "subcategory", [], "any", false, false, false, 344), "categories", [], "any", false, false, false, 344));
                                foreach ($context['_seq'] as $context["_key"] => $context["categories"]) {
                                    // line 345
                                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                    // line 346
                                    if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["submenu"], "subcategory", [], "any", false, false, false, 346), "show_title", [], "any", false, false, false, 346) == 1)) {
                                        // line 347
                                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
                                        echo twig_get_attribute($this->env, $this->source, $context["categories"], "href", [], "any", false, false, false, 347);
                                        echo "\" class=\"title-submenu ";
                                        echo twig_get_attribute($this->env, $this->source, $context["submenu"], "class_menu", [], "any", false, false, false, 347);
                                        echo "\">";
                                        echo twig_get_attribute($this->env, $this->source, $context["categories"], "name", [], "any", false, false, false, 347);
                                        echo "</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                    }
                                    // line 349
                                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                    if (twig_get_attribute($this->env, $this->source, $context["categories"], "categories", [], "any", false, false, false, 349)) {
                                        // line 350
                                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                        echo twig_get_attribute($this->env, $this->source, $context["categories"], "categories", [], "any", false, false, false, 350);
                                        echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                    }
                                    // line 352
                                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                    if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["submenu"], "subcategory", [], "any", false, false, false, 352), "show_image", [], "any", false, false, false, 352) == 1)) {
                                        // line 353
                                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"";
                                        echo twig_get_attribute($this->env, $this->source, $context["categories"], "thumb", [], "any", false, false, false, 353);
                                        echo "\" alt=\"\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                    }
                                    // line 355
                                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                }
                                $_parent = $context['_parent'];
                                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['categories'], $context['_parent'], $context['loop']);
                                $context = array_intersect_key($context, $_parent) + $_parent;
                                // line 357
                                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                            }
                            // line 359
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        } elseif ((twig_get_attribute($this->env, $this->source, $context["submenu"], "content_type", [], "any", false, false, false, 359) == 6)) {
                            // line 360
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["submenu"], "productlist", [], "any", false, false, false, 360), "show_title", [], "any", false, false, false, 360) == 1)) {
                                // line 361
                                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"title-submenu\">";
                                echo (($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52 = twig_get_attribute($this->env, $this->source, $context["submenu"], "name", [], "any", false, false, false, 361)) && is_array($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52) || $__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52 instanceof ArrayAccess ? ($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52[($context["lang_id"] ?? null)] ?? null) : null);
                                echo "</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                            }
                            // line 363
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["submenu"], "productlist", [], "any", false, false, false, 363), "products", [], "any", false, false, false, 363)) {
                                // line 364
                                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                $context['_parent'] = $context;
                                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["submenu"], "productlist", [], "any", false, false, false, 364), "products", [], "any", false, false, false, 364));
                                foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                                    // line 365
                                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                    $context["itempage"] = ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["submenu"], "productlist", [], "any", false, false, false, 365), "col", [], "any", false, false, false, 365)) ? ((12 / twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["submenu"], "productlist", [], "any", false, false, false, 365), "col", [], "any", false, false, false, 365))) : (4));
                                    // line 366
                                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-";
                                    echo ($context["itempage"] ?? null);
                                    echo " ";
                                    echo twig_get_attribute($this->env, $this->source, $context["submenu"], "class_menu", [], "any", false, false, false, 366);
                                    echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"product-thumb\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"image\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
                                    // line 369
                                    echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 369);
                                    echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"";
                                    // line 370
                                    echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 370);
                                    echo "\" alt=\"";
                                    echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 370);
                                    echo "\" title=\"";
                                    echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 370);
                                    echo "\" class=\"img-responsive\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"caption\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h4><a href=\"";
                                    // line 375
                                    echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 375);
                                    echo "\">";
                                    echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 375);
                                    echo "</a></h4>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p>";
                                    // line 376
                                    echo twig_get_attribute($this->env, $this->source, $context["product"], "description", [], "any", false, false, false, 376);
                                    echo "</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                    // line 377
                                    if (twig_get_attribute($this->env, $this->source, $context["product"], "rating", [], "any", false, false, false, 377)) {
                                        // line 378
                                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"rating\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                        // line 379
                                        $context['_parent'] = $context;
                                        $context['_seq'] = twig_ensure_traversable(range(1, 5));
                                        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                                            // line 380
                                            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                            if ((twig_get_attribute($this->env, $this->source, $context["product"], "rating", [], "any", false, false, false, 380) < $context["i"])) {
                                                // line 381
                                                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-2x\"></i></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                            } else {
                                                // line 383
                                                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"fa fa-stack\"><i class=\"fa fa-star fa-stack-2x\"></i><i class=\"fa fa-star-o fa-stack-2x\"></i></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                            }
                                            // line 385
                                            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                        }
                                        $_parent = $context['_parent'];
                                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                                        $context = array_intersect_key($context, $_parent) + $_parent;
                                        // line 386
                                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                    }
                                    // line 388
                                    echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                    // line 389
                                    if (twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 389)) {
                                        // line 390
                                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"price\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                        // line 391
                                        if ( !twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 391)) {
                                            // line 392
                                            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                            echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 392);
                                            echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t   \t";
                                        } else {
                                            // line 394
                                            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"price-new\">";
                                            echo twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 394);
                                            echo "</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"price-old\">";
                                            // line 395
                                            echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 395);
                                            echo "</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t   \t";
                                        }
                                        // line 397
                                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t   \t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t   \t";
                                        // line 398
                                        if (twig_get_attribute($this->env, $this->source, $context["product"], "tax", [], "any", false, false, false, 398)) {
                                            // line 399
                                            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"price-tax\">";
                                            echo twig_get_attribute($this->env, $this->source, $context["product"], "tax", [], "any", false, false, false, 399);
                                            echo "</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                        }
                                        // line 401
                                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                    }
                                    // line 403
                                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t  \t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t  \t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t \t\t\t\t";
                                }
                                $_parent = $context['_parent'];
                                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
                                $context = array_intersect_key($context, $_parent) + $_parent;
                                // line 408
                                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                            }
                            // line 409
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        }
                        // line 410
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['submenu'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 412
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t</div>\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t";
                }
                // line 416
                echo "\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t";
            }
            // line 418
            echo "\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['row'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 419
        echo "\t\t\t\t\t</ul>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t</div>
\t</nav>
\t";
        // line 425
        if ((twig_get_attribute($this->env, $this->source, ($context["ustawienia"] ?? null), "orientation", [], "any", false, false, false, 425) == 1)) {
            // line 426
            echo "\t\t</div>
\t";
        }
        // line 428
        echo "</div>

";
        // line 430
        if ((twig_get_attribute($this->env, $this->source, ($context["ustawienia"] ?? null), "orientation", [], "any", false, false, false, 430) == 1)) {
            // line 431
            echo "<script type=\"text/javascript\">
\t\$(document).ready(function() {
\t\tvar itemver =  ";
            // line 433
            echo twig_get_attribute($this->env, $this->source, ($context["ustawienia"] ?? null), "show_itemver", [], "any", false, false, false, 433);
            echo ";
\t\tif(itemver <= \$( \".vertical ul.megamenu >li\" ).length)
\t\t\t\$('.vertical ul.megamenu').append('<li class=\"loadmore\"><i class=\"fa fa-plus-square-o\"></i><span class=\"more-view\"> More Categories</span></li>');
\t\t\$('.horizontal ul.megamenu li.loadmore').remove();

\t\tvar show_itemver = itemver-1 ;
\t\t\$('ul.megamenu > li.item-vertical').each(function(i){
\t\t\tif(i>show_itemver){
\t\t\t\t\t\$(this).css('display', 'none');
\t\t\t}
\t\t});
\t\t\$(\".megamenu .loadmore\").click(function(){
\t\t\tif(\$(this).hasClass('open')){
\t\t\t\t\$('ul.megamenu li.item-vertical').each(function(i){
\t\t\t\t\tif(i>show_itemver){
\t\t\t\t\t\t\$(this).slideUp(200);
\t\t\t\t\t\t\$(this).css('display', 'none');
\t\t\t\t\t}
\t\t\t\t});
\t\t\t\t\$(this).removeClass('open');
\t\t\t\t\$('.loadmore').html('<i class=\"fa fa-plus-square-o\"></i><span class=\"more-view\">More Categories</span>');
\t\t\t}else{
\t\t\t\t\$('ul.megamenu li.item-vertical').each(function(i){
\t\t\t\t\tif(i>show_itemver){
\t\t\t\t\t\t\$(this).slideDown(200);
\t\t\t\t\t}
\t\t\t\t});
\t\t\t\t\$(this).addClass('open');
\t\t\t\t\$('.loadmore').html('<i class=\"fa fa-minus-square-o\"></i><span class=\"more-view\">Close Categories</span>');
\t\t\t}
\t\t});
\t});
</script>
";
        }
        // line 467
        echo "<script>
\$(document).ready(function(){
\t\$('a[href=\"";
        // line 469
        echo ($context["actual_link"] ?? null);
        echo "\"]').each(function() {
\t\t\$(this).parents('.with-sub-menu').addClass('sub-active');
\t});  
});
</script>";
    }

    public function getTemplateName()
    {
        return "so-mobile/template/extension/module/so_megamenu/default.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1301 => 469,  1297 => 467,  1260 => 433,  1256 => 431,  1254 => 430,  1250 => 428,  1246 => 426,  1244 => 425,  1236 => 419,  1230 => 418,  1226 => 416,  1220 => 412,  1213 => 410,  1210 => 409,  1207 => 408,  1197 => 403,  1193 => 401,  1187 => 399,  1185 => 398,  1182 => 397,  1177 => 395,  1172 => 394,  1166 => 392,  1164 => 391,  1161 => 390,  1159 => 389,  1156 => 388,  1152 => 386,  1146 => 385,  1142 => 383,  1138 => 381,  1135 => 380,  1131 => 379,  1128 => 378,  1126 => 377,  1122 => 376,  1116 => 375,  1104 => 370,  1100 => 369,  1091 => 366,  1088 => 365,  1083 => 364,  1080 => 363,  1074 => 361,  1071 => 360,  1068 => 359,  1064 => 357,  1057 => 355,  1051 => 353,  1048 => 352,  1042 => 350,  1039 => 349,  1029 => 347,  1027 => 346,  1024 => 345,  1020 => 344,  1015 => 343,  1012 => 342,  1010 => 341,  1005 => 339,  1000 => 338,  994 => 336,  991 => 335,  988 => 334,  984 => 332,  973 => 330,  969 => 329,  964 => 328,  961 => 327,  959 => 326,  954 => 324,  949 => 323,  946 => 322,  941 => 319,  935 => 317,  929 => 315,  927 => 314,  918 => 312,  910 => 311,  905 => 310,  902 => 309,  900 => 308,  895 => 306,  890 => 305,  888 => 304,  883 => 303,  880 => 302,  877 => 301,  873 => 299,  870 => 298,  867 => 297,  862 => 296,  860 => 295,  853 => 292,  851 => 291,  848 => 290,  842 => 287,  837 => 285,  827 => 283,  820 => 279,  815 => 277,  805 => 275,  803 => 274,  796 => 272,  793 => 271,  789 => 270,  783 => 266,  773 => 263,  770 => 262,  760 => 257,  756 => 255,  750 => 253,  748 => 252,  745 => 251,  740 => 249,  735 => 248,  729 => 246,  727 => 245,  724 => 244,  722 => 243,  719 => 242,  715 => 240,  709 => 239,  705 => 237,  701 => 235,  698 => 234,  694 => 233,  691 => 232,  689 => 231,  685 => 230,  679 => 229,  667 => 224,  663 => 223,  654 => 220,  651 => 219,  646 => 218,  643 => 217,  637 => 215,  634 => 214,  631 => 213,  627 => 211,  620 => 209,  614 => 207,  611 => 206,  605 => 204,  602 => 203,  592 => 201,  590 => 200,  587 => 199,  583 => 198,  578 => 197,  575 => 196,  573 => 195,  568 => 193,  563 => 192,  557 => 190,  554 => 189,  551 => 188,  547 => 186,  536 => 184,  532 => 183,  527 => 182,  524 => 181,  522 => 180,  515 => 179,  512 => 178,  507 => 175,  501 => 173,  495 => 171,  493 => 170,  484 => 168,  476 => 167,  471 => 166,  468 => 165,  466 => 164,  459 => 163,  457 => 162,  452 => 161,  449 => 160,  446 => 159,  442 => 157,  439 => 156,  436 => 155,  431 => 154,  429 => 153,  424 => 150,  418 => 148,  412 => 146,  409 => 145,  407 => 144,  404 => 143,  398 => 140,  393 => 138,  383 => 136,  376 => 132,  371 => 130,  361 => 128,  359 => 127,  351 => 125,  349 => 124,  346 => 123,  343 => 122,  340 => 121,  338 => 120,  335 => 119,  332 => 118,  329 => 117,  327 => 116,  324 => 115,  321 => 114,  318 => 113,  316 => 112,  313 => 111,  310 => 110,  307 => 109,  304 => 108,  301 => 107,  298 => 106,  295 => 105,  292 => 104,  290 => 103,  287 => 102,  284 => 101,  281 => 100,  279 => 99,  276 => 98,  273 => 97,  270 => 96,  268 => 95,  265 => 94,  262 => 93,  259 => 92,  257 => 91,  254 => 90,  251 => 89,  248 => 88,  246 => 87,  243 => 86,  240 => 85,  237 => 84,  235 => 83,  232 => 82,  229 => 81,  226 => 80,  223 => 79,  220 => 78,  218 => 77,  215 => 76,  212 => 75,  209 => 74,  206 => 73,  203 => 72,  200 => 71,  197 => 70,  193 => 69,  190 => 68,  185 => 65,  179 => 63,  175 => 61,  173 => 60,  169 => 59,  166 => 58,  164 => 57,  150 => 56,  144 => 52,  140 => 50,  136 => 48,  134 => 47,  131 => 46,  127 => 44,  123 => 42,  121 => 41,  118 => 40,  108 => 32,  101 => 28,  87 => 17,  80 => 12,  78 => 11,  60 => 10,  57 => 9,  51 => 7,  49 => 6,  46 => 5,  42 => 3,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "so-mobile/template/extension/module/so_megamenu/default.twig", "/home/azhkhn/public_html/protidin.com.bd/catalog/view/theme/so-mobile/template/extension/module/so_megamenu/default.twig");
    }
}
