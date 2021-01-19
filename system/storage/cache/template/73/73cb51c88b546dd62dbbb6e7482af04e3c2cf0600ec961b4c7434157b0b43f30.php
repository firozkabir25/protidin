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

/* so-buyshop/template/extension/module/so_megamenu/default.twig */
class __TwigTemplate_f2af75ffbff72d16240061bd961073c4483eca81d70a4ca909959ccfe2fc829f extends \Twig\Template
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
        $context["suffix_id"] = ("so_megamenu_" . twig_random($this->env, 100));
        // line 2
        $context["show_verticalmenu_id"] = ("show-verticalmenu-" . twig_random($this->env, 100));
        // line 3
        $context["remove_verticalmenu_id"] = ("remove-verticalmenu-" . twig_random($this->env, 100));
        // line 4
        echo "


<div id=\"";
        // line 7
        echo ($context["suffix_id"] ?? null);
        echo "\" class=\"responsive megamenu-style-dev ";
        echo twig_get_attribute($this->env, $this->source, ($context["ustawienia"] ?? null), "class_menu", [], "any", false, false, false, 7);
        echo "\">
\t";
        // line 8
        if ((twig_get_attribute($this->env, $this->source, ($context["ustawienia"] ?? null), "orientation", [], "any", false, false, false, 8) == 1)) {
            // line 9
            echo "\t<div class=\"so-vertical-menu no-gutter\">
\t";
        }
        // line 11
        echo "\t
\t";
        // line 12
        if ((twig_get_attribute($this->env, $this->source, ($context["ustawienia"] ?? null), "disp_title_module", [], "any", false, false, false, 12) && ($context["head_name"] ?? null))) {
            // line 13
            echo "\t\t<h3>";
            echo ($context["head_name"] ?? null);
            echo "</h3>
\t";
        }
        // line 15
        echo "\t<nav class=\"navbar-default\">
\t\t<div class=\"container-megamenu ";
        // line 16
        if ((twig_get_attribute($this->env, $this->source, ($context["ustawienia"] ?? null), "full_width", [], "any", false, false, false, 16) != 1)) {
            echo " ";
            echo "container";
            echo " ";
        }
        echo " ";
        if ((twig_get_attribute($this->env, $this->source, ($context["ustawienia"] ?? null), "orientation", [], "any", false, false, false, 16) == 1)) {
            echo "vertical ";
            echo " ";
        } else {
            echo "horizontal";
        }
        echo "\">
\t\t";
        // line 17
        if ((twig_get_attribute($this->env, $this->source, ($context["ustawienia"] ?? null), "orientation", [], "any", false, false, false, 17) == 1)) {
            // line 18
            echo "\t\t\t<div class=\"menuHeading\">
\t\t\t\t<div class=\"megamenuToogle-wrapper\">
\t\t\t\t\t<div class=\"megamenuToogle-pattern\">
\t\t\t\t\t\t<div class=\"container\">
\t\t\t\t\t\t\t<div><span></span><span></span><span></span></div>
\t\t\t\t\t\t\t<span class=\"title-mega\">
\t\t\t\t\t\t\t";
            // line 24
            echo ($context["navigation_text"] ?? null);
            echo "
\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"navbar-header\">
\t\t\t\t<span class=\"hidden\">";
            // line 31
            echo ($context["navigation_text"] ?? null);
            echo "</span>
\t\t\t\t<button type=\"button\" id=\"";
            // line 32
            echo ($context["show_verticalmenu_id"] ?? null);
            echo "\" data-toggle=\"collapse\"  class=\"navbar-toggle\">
\t\t\t\t\t <span class=\"icon-bar\"></span>
\t\t\t\t\t<span class=\"icon-bar\"></span>
\t\t\t\t\t<span class=\"icon-bar\"></span> 
\t\t\t\t\t
\t\t\t\t</button>
\t\t\t\t
\t\t\t</div>
\t\t";
        } else {
            // line 41
            echo "\t\t\t<div class=\"navbar-header\">
\t\t\t\t<span class=\"hidden\">";
            // line 42
            echo ($context["navigation_text"] ?? null);
            echo "</span>
\t\t<button type=\"button\" id=\"show-megamenu\" data-toggle=\"collapse\"  class=\"navbar-toggle\">
\t\t\t\t\t<span class=\"icon-bar\"></span>
\t\t\t\t\t<span class=\"icon-bar\"></span>
\t\t\t\t\t<span class=\"icon-bar\"></span>
\t\t\t\t\t
\t\t\t\t</button>
\t\t\t\t
\t\t\t</div>
\t\t";
        }
        // line 52
        echo "
\t\t";
        // line 53
        if ((twig_get_attribute($this->env, $this->source, ($context["ustawienia"] ?? null), "orientation", [], "any", false, false, false, 53) == 1)) {
            // line 54
            echo "\t\t\t<div class=\"vertical-wrapper\">
\t\t";
        } else {
            // line 56
            echo "\t\t\t<div class=\"megamenu-wrapper\">
\t\t";
        }
        // line 58
        echo "
\t\t";
        // line 59
        if ((twig_get_attribute($this->env, $this->source, ($context["ustawienia"] ?? null), "orientation", [], "any", false, false, false, 59) == 1)) {
            // line 60
            echo "\t\t\t<span id=\"";
            echo ($context["remove_verticalmenu_id"] ?? null);
            echo "\" class=\"remove-verticalmenu fa fa-times\"></span>
\t\t";
        } else {
            // line 62
            echo "\t\t\t<span id=\"remove-megamenu\" class=\"fa fa-times\"></span>
\t\t";
        }
        // line 64
        echo "
\t\t\t<div class=\"megamenu-pattern\">
\t\t\t\t<div class=\"container\">
\t\t\t\t\t<ul class=\"megamenu\"
\t\t\t\t\tdata-transition=\"";
        // line 68
        if ((twig_get_attribute($this->env, $this->source, ($context["ustawienia"] ?? null), "animation", [], "any", false, false, false, 68) != "")) {
            echo twig_get_attribute($this->env, $this->source, ($context["ustawienia"] ?? null), "animation", [], "any", false, false, false, 68);
        } else {
            echo "none";
        }
        echo "\" data-animationtime=\"";
        if (((twig_get_attribute($this->env, $this->source, ($context["ustawienia"] ?? null), "animation_time", [], "any", false, false, false, 68) > 0) && (twig_get_attribute($this->env, $this->source, ($context["ustawienia"] ?? null), "animation_time", [], "any", false, false, false, 68) < 5000))) {
            echo twig_get_attribute($this->env, $this->source, ($context["ustawienia"] ?? null), "animation_time", [], "any", false, false, false, 68);
        } else {
            echo 500;
        }
        echo "\">
\t\t\t\t\t\t";
        // line 69
        if (((twig_get_attribute($this->env, $this->source, ($context["ustawienia"] ?? null), "home_item", [], "any", false, false, false, 69) == "icon") || (twig_get_attribute($this->env, $this->source, ($context["ustawienia"] ?? null), "home_item", [], "any", false, false, false, 69) == "text"))) {
            // line 70
            echo "\t\t\t\t\t\t\t<li class=\"home\">
\t\t\t\t\t\t\t\t<a href=\"";
            // line 71
            echo ($context["home"] ?? null);
            echo "\">
\t\t\t\t\t\t\t\t";
            // line 72
            if ((twig_get_attribute($this->env, $this->source, ($context["ustawienia"] ?? null), "home_item", [], "any", false, false, false, 72) == "icon")) {
                // line 73
                echo "\t\t\t\t\t\t\t\t\t<i class=\"fa fa-home\"></i>
\t\t\t\t\t\t\t\t";
            } else {
                // line 75
                echo "\t\t\t\t\t\t\t\t\t<span><strong>";
                echo ($context["home_text"] ?? null);
                echo "</strong></span>
\t\t\t\t\t\t\t\t";
            }
            // line 77
            echo "\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t";
        }
        // line 80
        echo "\t\t\t\t\t\t
\t\t\t\t\t\t";
        // line 81
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["menu"] ?? null));
        foreach ($context['_seq'] as $context["key"] => $context["row"]) {
            // line 82
            echo "\t\t\t\t\t\t\t";
            $context["class"] = "";
            // line 83
            echo "\t\t\t\t\t\t\t";
            $context["icon_font"] = "";
            // line 84
            echo "\t\t\t\t\t\t\t";
            $context["class_link"] = "clearfix";
            // line 85
            echo "\t\t\t\t\t\t\t";
            $context["label_item"] = "";
            // line 86
            echo "\t\t\t\t\t\t\t";
            $context["title"] = false;
            // line 87
            echo "\t\t\t\t\t\t\t";
            $context["target"] = false;
            // line 88
            echo "
\t\t\t\t\t\t\t";
            // line 89
            if (twig_in_filter("no_image", twig_get_attribute($this->env, $this->source, $context["row"], "icon", [], "any", false, false, false, 89))) {
                // line 90
                echo "\t\t\t\t\t\t\t\t";
                $context["icon"] = "";
                // line 91
                echo "\t\t\t\t\t\t\t";
            } else {
                // line 92
                echo "\t\t\t\t\t\t\t\t";
                $context["icon"] = twig_get_attribute($this->env, $this->source, $context["row"], "icon", [], "any", false, false, false, 92);
                // line 93
                echo "\t\t\t\t\t\t\t";
            }
            // line 94
            echo "\t\t\t\t\t\t\t
\t\t\t\t\t\t\t";
            // line 95
            if ((twig_get_attribute($this->env, $this->source, $context["row"], "description", [], "any", false, false, false, 95) != "")) {
                // line 96
                echo "\t\t\t\t\t\t\t\t";
                $context["class_link"] = (($context["class_link"] ?? null) . " description");
                // line 97
                echo "\t\t\t\t\t\t\t";
            }
            // line 98
            echo "
\t\t\t\t\t\t\t";
            // line 99
            if ((((($context["route"] ?? null) && (($context["route"] ?? null) == twig_get_attribute($this->env, $this->source, $context["row"], "route", [], "any", false, false, false, 99))) && ($context["path"] ?? null)) && (($context["path"] ?? null) == twig_get_attribute($this->env, $this->source, $context["row"], "path", [], "any", false, false, false, 99)))) {
                // line 100
                echo "\t\t\t\t\t\t\t\t";
                $context["class"] = (($context["class"] ?? null) . " active_menu");
                // line 101
                echo "\t\t\t\t\t\t\t";
            }
            // line 102
            echo "
\t\t\t\t\t\t\t";
            // line 103
            if (twig_get_attribute($this->env, $this->source, $context["row"], "class_menu", [], "any", false, false, false, 103)) {
                // line 104
                echo "\t\t\t\t\t\t\t\t";
                $context["class"] = (($context["class"] ?? null) . twig_get_attribute($this->env, $this->source, $context["row"], "class_menu", [], "any", false, false, false, 104));
                // line 105
                echo "\t\t\t\t\t\t\t";
            }
            // line 106
            echo "
\t\t\t\t\t\t\t";
            // line 107
            if (twig_get_attribute($this->env, $this->source, $context["row"], "icon_font", [], "any", false, false, false, 107)) {
                // line 108
                echo "\t\t\t\t\t\t\t\t";
                $context["icon_font"] = (((($context["icon_font"] ?? null) . "<i class=\"") . twig_get_attribute($this->env, $this->source, $context["row"], "icon_font", [], "any", false, false, false, 108)) . "\"></i>");
                // line 109
                echo "\t\t\t\t\t\t\t";
            }
            // line 110
            echo "
\t\t\t\t\t\t\t";
            // line 111
            if (twig_get_attribute($this->env, $this->source, $context["row"], "label_item", [], "any", false, false, false, 111)) {
                // line 112
                echo "\t\t\t\t\t\t\t\t";
                $context["label_item"] = (((($context["label_item"] ?? null) . "<span class=\"label") . twig_get_attribute($this->env, $this->source, $context["row"], "label_item", [], "any", false, false, false, 112)) . "\"></span>");
                // line 113
                echo "\t\t\t\t\t\t\t";
            }
            // line 114
            echo "
\t\t\t\t\t\t\t";
            // line 115
            if ((twig_test_iterable(twig_get_attribute($this->env, $this->source, $context["row"], "submenu", [], "any", false, false, false, 115)) && twig_get_attribute($this->env, $this->source, $context["row"], "submenu", [], "any", false, false, false, 115))) {
                // line 116
                echo "\t\t\t\t\t\t\t\t";
                $context["class"] = (($context["class"] ?? null) . " with-sub-menu");
                // line 117
                echo "\t\t\t\t\t\t\t\t";
                if ((twig_get_attribute($this->env, $this->source, $context["row"], "submenu_type", [], "any", false, false, false, 117) == 1)) {
                    // line 118
                    echo "\t\t\t\t\t\t\t\t\t";
                    $context["class"] = (($context["class"] ?? null) . " click");
                    // line 119
                    echo "\t\t\t\t\t\t\t\t";
                } else {
                    // line 120
                    echo "\t\t\t\t\t\t\t\t\t";
                    $context["class"] = (($context["class"] ?? null) . " hover");
                    // line 121
                    echo "\t\t\t\t\t\t\t\t";
                }
                // line 122
                echo "\t\t\t\t\t\t\t";
            }
            // line 123
            echo "
\t\t\t\t\t\t\t";
            // line 124
            if ((twig_get_attribute($this->env, $this->source, $context["row"], "position", [], "any", false, false, false, 124) == 1)) {
                // line 125
                echo "\t\t\t\t\t\t\t\t";
                $context["class"] = (($context["class"] ?? null) . " pull-right");
                // line 126
                echo "\t\t\t\t\t\t\t";
            }
            // line 127
            echo "
\t\t\t\t\t\t\t";
            // line 128
            if ((twig_get_attribute($this->env, $this->source, $context["row"], "submenu_type", [], "any", false, false, false, 128) == 2)) {
                // line 129
                echo "\t\t\t\t\t\t\t\t";
                $context["title"] = "title=\"hover-intent\"";
                // line 130
                echo "\t\t\t\t\t\t\t";
            }
            // line 131
            echo "
\t\t\t\t\t\t\t";
            // line 132
            if ((twig_get_attribute($this->env, $this->source, $context["row"], "new_window", [], "any", false, false, false, 132) == 1)) {
                // line 133
                echo "\t\t\t\t\t\t\t\t";
                $context["target"] = "target=\"_blank\"";
                // line 134
                echo "\t\t\t\t\t\t\t";
            }
            // line 135
            echo "
\t\t\t\t\t\t\t";
            // line 136
            if ((twig_get_attribute($this->env, $this->source, ($context["ustawienia"] ?? null), "orientation", [], "any", false, false, false, 136) == 1)) {
                // line 137
                echo "\t\t\t\t\t\t\t\t<li class=\"item-vertical ";
                echo ($context["class"] ?? null);
                echo "\" ";
                echo ($context["title"] ?? null);
                echo ">
\t\t\t\t\t\t\t\t\t<p class='close-menu'></p>
\t\t\t\t\t\t\t\t\t";
                // line 139
                if ((twig_test_iterable(twig_get_attribute($this->env, $this->source, $context["row"], "submenu", [], "any", false, false, false, 139)) && twig_get_attribute($this->env, $this->source, $context["row"], "submenu", [], "any", false, false, false, 139))) {
                    // line 140
                    echo "\t\t\t\t\t\t\t\t\t\t<a href=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["row"], "link", [], "any", false, false, false, 140);
                    echo "\" class=\"";
                    echo ($context["class_link"] ?? null);
                    echo "\" ";
                    echo ($context["target"] ?? null);
                    echo ">
\t\t\t\t\t\t\t\t\t\t\t<span>
\t\t\t\t\t\t\t\t\t\t\t\t<strong>";
                    // line 142
                    echo (((($context["icon_font"] ?? null) . ($context["icon"] ?? null)) . (($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = twig_get_attribute($this->env, $this->source, $context["row"], "name", [], "any", false, false, false, 142)) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4[($context["lang_id"] ?? null)] ?? null) : null)) . twig_get_attribute($this->env, $this->source, $context["row"], "description", [], "any", false, false, false, 142));
                    echo "</strong>
\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t";
                    // line 144
                    echo ($context["label_item"] ?? null);
                    echo "
\t\t\t\t\t\t\t\t\t\t\t<b class='fa fa-angle-right' ></b>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t";
                } else {
                    // line 148
                    echo "\t\t\t\t\t\t\t\t \t\t<a href=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["row"], "link", [], "any", false, false, false, 148);
                    echo "\" class=\"";
                    echo ($context["class_link"] ?? null);
                    echo "\" ";
                    echo ($context["target"] ?? null);
                    echo ">
\t\t\t\t\t\t\t\t\t\t\t<span>
\t\t\t\t\t\t\t\t\t\t\t\t<strong>";
                    // line 150
                    echo (((($context["icon_font"] ?? null) . ($context["icon"] ?? null)) . (($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = twig_get_attribute($this->env, $this->source, $context["row"], "name", [], "any", false, false, false, 150)) && is_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) || $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 instanceof ArrayAccess ? ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144[($context["lang_id"] ?? null)] ?? null) : null)) . twig_get_attribute($this->env, $this->source, $context["row"], "description", [], "any", false, false, false, 150));
                    echo "</strong>
\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t";
                    // line 152
                    echo ($context["label_item"] ?? null);
                    echo "
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t";
                }
                // line 155
                echo "
\t\t\t\t\t\t\t\t\t";
                // line 156
                if ((twig_test_iterable(twig_get_attribute($this->env, $this->source, $context["row"], "submenu", [], "any", false, false, false, 156)) && twig_get_attribute($this->env, $this->source, $context["row"], "submenu", [], "any", false, false, false, 156))) {
                    // line 157
                    echo "\t\t\t\t\t\t\t\t\t\t";
                    if (twig_in_filter("%", twig_get_attribute($this->env, $this->source, $context["row"], "submenu_width", [], "any", false, false, false, 157))) {
                        // line 158
                        echo "\t\t\t\t\t\t\t\t\t\t\t<div class=\"sub-menu\" data-subwidth =\"";
                        echo twig_replace_filter(twig_get_attribute($this->env, $this->source, $context["row"], "submenu_width", [], "any", false, false, false, 158), ["%" => ""]);
                        echo "\">
\t\t\t\t\t\t\t\t\t\t";
                    } else {
                        // line 160
                        echo "\t\t\t\t\t\t\t\t\t\t\t<div class=\"sub-menu\" style=\"width:";
                        echo twig_get_attribute($this->env, $this->source, $context["row"], "submenu_width", [], "any", false, false, false, 160);
                        echo "\">
\t\t\t\t\t\t\t\t\t\t";
                    }
                    // line 162
                    echo "
\t\t\t\t\t\t\t\t\t\t<div class=\"content\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t\t\t";
                    // line 165
                    $context["row_fluid"] = 0;
                    // line 166
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["row"], "submenu", [], "any", false, false, false, 166));
                    foreach ($context['_seq'] as $context["_key"] => $context["submenu"]) {
                        // line 167
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        if (((($context["row_fluid"] ?? null) + twig_get_attribute($this->env, $this->source, $context["submenu"], "content_width", [], "any", false, false, false, 167)) > 12)) {
                            // line 168
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                            $context["row_fluid"] = twig_get_attribute($this->env, $this->source, $context["submenu"], "content_width", [], "any", false, false, false, 168);
                            // line 169
                            echo "\t\t\t\t\t\t\t\t\t\t \t\t\t\t</div><div class=\"border\"></div><div class=\"row\">
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        } else {
                            // line 171
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                            $context["row_fluid"] = (($context["row_fluid"] ?? null) + twig_get_attribute($this->env, $this->source, $context["submenu"], "content_width", [], "any", false, false, false, 171));
                            // line 172
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        }
                        // line 173
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-";
                        echo twig_get_attribute($this->env, $this->source, $context["submenu"], "content_width", [], "any", false, false, false, 173);
                        echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        // line 174
                        if ((twig_get_attribute($this->env, $this->source, $context["submenu"], "content_type", [], "any", false, false, false, 174) == 0)) {
                            // line 175
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"html ";
                            echo twig_get_attribute($this->env, $this->source, $context["submenu"], "class_menu", [], "any", false, false, false, 175);
                            echo "\">";
                            echo twig_get_attribute($this->env, $this->source, $context["submenu"], "html", [], "any", false, false, false, 175);
                            echo "</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        } elseif ((twig_get_attribute($this->env, $this->source,                         // line 176
$context["submenu"], "content_type", [], "any", false, false, false, 176) == 1)) {
                            // line 177
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                            if (twig_test_iterable(twig_get_attribute($this->env, $this->source, $context["submenu"], "product", [], "any", false, false, false, 177))) {
                                // line 178
                                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"product ";
                                echo twig_get_attribute($this->env, $this->source, $context["submenu"], "class_menu", [], "any", false, false, false, 178);
                                echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"image\"><a href=\"";
                                // line 179
                                echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["submenu"], "product", [], "any", false, false, false, 179), "link", [], "any", false, false, false, 179);
                                echo "\" onclick=\"window.location = '";
                                echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["submenu"], "product", [], "any", false, false, false, 179), "link", [], "any", false, false, false, 179);
                                echo "'\"><img class=\"lazyload\" data-sizes=\"auto\" src=\"data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==\" data-src=\"";
                                echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["submenu"], "product", [], "any", false, false, false, 179), "image", [], "any", false, false, false, 179);
                                echo "\" alt=\"\"></a></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"name\"><a href=\"";
                                // line 180
                                echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["submenu"], "product", [], "any", false, false, false, 180), "link", [], "any", false, false, false, 180);
                                echo "\" onclick=\"window.location = '";
                                echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["submenu"], "product", [], "any", false, false, false, 180), "link", [], "any", false, false, false, 180);
                                echo "'\">";
                                echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["submenu"], "product", [], "any", false, false, false, 180), "name", [], "any", false, false, false, 180);
                                echo "</a></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"price\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                // line 182
                                if ( !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["submenu"], "product", [], "any", false, false, false, 182), "special", [], "any", false, false, false, 182)) {
                                    // line 183
                                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                    echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["submenu"], "product", [], "any", false, false, false, 183), "price", [], "any", false, false, false, 183);
                                    echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                } else {
                                    // line 185
                                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                    echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["submenu"], "product", [], "any", false, false, false, 185), "special", [], "any", false, false, false, 185);
                                    echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                }
                                // line 187
                                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                            }
                            // line 190
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        } elseif ((twig_get_attribute($this->env, $this->source, $context["submenu"], "content_type", [], "any", false, false, false, 190) == 2)) {
                            // line 191
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"categories ";
                            echo twig_get_attribute($this->env, $this->source, $context["submenu"], "class_menu", [], "any", false, false, false, 191);
                            echo "\">";
                            echo twig_get_attribute($this->env, $this->source, $context["submenu"], "categories", [], "any", false, false, false, 191);
                            echo "</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        } elseif ((twig_get_attribute($this->env, $this->source,                         // line 192
$context["submenu"], "content_type", [], "any", false, false, false, 192) == 3)) {
                            // line 193
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                            if (twig_test_iterable(twig_get_attribute($this->env, $this->source, $context["submenu"], "manufactures", [], "any", false, false, false, 193))) {
                                // line 194
                                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<ul class=\"manufacturer ";
                                echo twig_get_attribute($this->env, $this->source, $context["submenu"], "class_menu", [], "any", false, false, false, 194);
                                echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                // line 195
                                $context['_parent'] = $context;
                                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["submenu"], "manufactures", [], "any", false, false, false, 195));
                                foreach ($context['_seq'] as $context["_key"] => $context["manufacturer"]) {
                                    // line 196
                                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"";
                                    echo twig_get_attribute($this->env, $this->source, $context["manufacturer"], "link", [], "any", false, false, false, 196);
                                    echo "\">";
                                    echo twig_get_attribute($this->env, $this->source, $context["manufacturer"], "name", [], "any", false, false, false, 196);
                                    echo "</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                }
                                $_parent = $context['_parent'];
                                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['manufacturer'], $context['_parent'], $context['loop']);
                                $context = array_intersect_key($context, $_parent) + $_parent;
                                // line 198
                                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                            }
                            // line 200
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        } elseif ((twig_get_attribute($this->env, $this->source, $context["submenu"], "content_type", [], "any", false, false, false, 200) == 4)) {
                            // line 201
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["submenu"], "images", [], "any", false, false, false, 201), "show_title", [], "any", false, false, false, 201) == 1)) {
                                // line 202
                                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"title-submenu\">";
                                echo (($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b = twig_get_attribute($this->env, $this->source, $context["submenu"], "name", [], "any", false, false, false, 202)) && is_array($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b) || $__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b instanceof ArrayAccess ? ($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b[($context["lang_id"] ?? null)] ?? null) : null);
                                echo "</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                            }
                            // line 204
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"link ";
                            echo twig_get_attribute($this->env, $this->source, $context["submenu"], "class_menu", [], "any", false, false, false, 204);
                            echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                            // line 205
                            echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["submenu"], "images", [], "any", false, false, false, 205), "link", [], "any", false, false, false, 205);
                            echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        } elseif ((twig_get_attribute($this->env, $this->source,                         // line 207
$context["submenu"], "content_type", [], "any", false, false, false, 207) == 5)) {
                            // line 208
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["submenu"], "subcategory", [], "any", false, false, false, 208), "categories", [], "any", false, false, false, 208)) {
                                // line 209
                                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<ul class=\"subcategory ";
                                echo twig_get_attribute($this->env, $this->source, $context["submenu"], "class_menu", [], "any", false, false, false, 209);
                                echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                // line 210
                                $context['_parent'] = $context;
                                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["submenu"], "subcategory", [], "any", false, false, false, 210), "categories", [], "any", false, false, false, 210));
                                foreach ($context['_seq'] as $context["_key"] => $context["categories"]) {
                                    // line 211
                                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                    // line 212
                                    if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["submenu"], "subcategory", [], "any", false, false, false, 212), "show_title", [], "any", false, false, false, 212) == 1)) {
                                        // line 213
                                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
                                        echo twig_get_attribute($this->env, $this->source, $context["categories"], "href", [], "any", false, false, false, 213);
                                        echo "\" class=\"title-submenu ";
                                        echo twig_get_attribute($this->env, $this->source, $context["submenu"], "class_menu", [], "any", false, false, false, 213);
                                        echo "\">";
                                        echo twig_get_attribute($this->env, $this->source, $context["categories"], "name", [], "any", false, false, false, 213);
                                        echo "</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                    }
                                    // line 215
                                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                    if (twig_get_attribute($this->env, $this->source, $context["categories"], "categories", [], "any", false, false, false, 215)) {
                                        // line 216
                                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                        echo twig_get_attribute($this->env, $this->source, $context["categories"], "categories", [], "any", false, false, false, 216);
                                        echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                    }
                                    // line 218
                                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                    if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["submenu"], "subcategory", [], "any", false, false, false, 218), "show_image", [], "any", false, false, false, 218) == 1)) {
                                        // line 219
                                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img class=\"lazyload\" data-sizes=\"auto\" src=\"data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==\" data-src=\"";
                                        echo twig_get_attribute($this->env, $this->source, $context["categories"], "thumb", [], "any", false, false, false, 219);
                                        echo "\" alt=\"\" >
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                    }
                                    // line 221
                                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                }
                                $_parent = $context['_parent'];
                                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['categories'], $context['_parent'], $context['loop']);
                                $context = array_intersect_key($context, $_parent) + $_parent;
                                // line 223
                                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                            }
                            // line 225
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        } elseif ((twig_get_attribute($this->env, $this->source, $context["submenu"], "content_type", [], "any", false, false, false, 225) == 6)) {
                            // line 226
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["submenu"], "productlist", [], "any", false, false, false, 226), "show_title", [], "any", false, false, false, 226) == 1)) {
                                // line 227
                                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"title-submenu\">";
                                echo (($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 = twig_get_attribute($this->env, $this->source, $context["submenu"], "name", [], "any", false, false, false, 227)) && is_array($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002) || $__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 instanceof ArrayAccess ? ($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002[($context["lang_id"] ?? null)] ?? null) : null);
                                echo "</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                            }
                            // line 229
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["submenu"], "productlist", [], "any", false, false, false, 229), "products", [], "any", false, false, false, 229)) {
                                // line 230
                                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                $context['_parent'] = $context;
                                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["submenu"], "productlist", [], "any", false, false, false, 230), "products", [], "any", false, false, false, 230));
                                foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                                    // line 231
                                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                    $context["itempage"] = ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["submenu"], "productlist", [], "any", false, false, false, 231), "col", [], "any", false, false, false, 231)) ? ((12 / twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["submenu"], "productlist", [], "any", false, false, false, 231), "col", [], "any", false, false, false, 231))) : (4));
                                    // line 232
                                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-xs-";
                                    echo ($context["itempage"] ?? null);
                                    echo " ";
                                    echo twig_get_attribute($this->env, $this->source, $context["submenu"], "class_menu", [], "any", false, false, false, 232);
                                    echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"product-thumb\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"image\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
                                    // line 235
                                    echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 235);
                                    echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img class=\"lazyload\" data-sizes=\"auto\" src=\"data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==\" data-src=\"";
                                    // line 236
                                    echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 236);
                                    echo "\" alt=\"";
                                    echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 236);
                                    echo "\" title=\"";
                                    echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 236);
                                    echo "\"  />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"caption\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h4><a href=\"";
                                    // line 241
                                    echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 241);
                                    echo "\">";
                                    echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 241);
                                    echo "</a></h4>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p>";
                                    // line 242
                                    echo twig_get_attribute($this->env, $this->source, $context["product"], "description", [], "any", false, false, false, 242);
                                    echo "</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                    // line 243
                                    if (twig_get_attribute($this->env, $this->source, $context["product"], "rating", [], "any", false, false, false, 243)) {
                                        // line 244
                                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"rating\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                        // line 245
                                        $context['_parent'] = $context;
                                        $context['_seq'] = twig_ensure_traversable(range(1, 5));
                                        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                                            // line 246
                                            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                            if ((twig_get_attribute($this->env, $this->source, $context["product"], "rating", [], "any", false, false, false, 246) < $context["i"])) {
                                                // line 247
                                                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-2x\"></i></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                            } else {
                                                // line 249
                                                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"fa fa-stack\"><i class=\"fa fa-star fa-stack-2x\"></i><i class=\"fa fa-star-o fa-stack-2x\"></i></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                            }
                                            // line 251
                                            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                        }
                                        $_parent = $context['_parent'];
                                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                                        $context = array_intersect_key($context, $_parent) + $_parent;
                                        // line 252
                                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                    }
                                    // line 254
                                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                    // line 255
                                    if (twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 255)) {
                                        // line 256
                                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"price\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                        // line 257
                                        if ( !twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 257)) {
                                            // line 258
                                            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                            echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 258);
                                            echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t   \t\t";
                                        } else {
                                            // line 260
                                            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"price-new\">";
                                            echo twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 260);
                                            echo "</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"price-old\">";
                                            // line 261
                                            echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 261);
                                            echo "</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t   \t\t";
                                        }
                                        // line 263
                                        echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t   \t\t";
                                        // line 264
                                        if (twig_get_attribute($this->env, $this->source, $context["product"], "tax", [], "any", false, false, false, 264)) {
                                            // line 265
                                            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"price-tax\">";
                                            echo twig_get_attribute($this->env, $this->source, $context["product"], "tax", [], "any", false, false, false, 265);
                                            echo "</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                        }
                                        // line 267
                                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                    }
                                    // line 269
                                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t  \t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t  \t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t \t";
                                }
                                $_parent = $context['_parent'];
                                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
                                $context = array_intersect_key($context, $_parent) + $_parent;
                                // line 274
                                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                            }
                            // line 275
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        }
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['submenu'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 278
                    echo "\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>\t\t\t\t
\t\t\t\t\t\t\t\t\t\t</div>\t\t\t
\t\t\t\t\t\t\t\t\t";
                }
                // line 282
                echo "\t\t\t\t\t\t\t\t</li>\t\t\t\t\t\t\t
\t\t\t\t\t\t\t";
            } else {
                // line 283
                echo "\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<li class=\"";
                // line 284
                echo ($context["class"] ?? null);
                echo "\" ";
                echo ($context["title"] ?? null);
                echo ">
\t\t\t\t\t\t\t\t\t<p class='close-menu'></p>
\t\t\t\t\t\t\t\t\t";
                // line 286
                if ((twig_test_iterable(twig_get_attribute($this->env, $this->source, $context["row"], "submenu", [], "any", false, false, false, 286)) && twig_get_attribute($this->env, $this->source, $context["row"], "submenu", [], "any", false, false, false, 286))) {
                    // line 287
                    echo "\t\t\t\t\t\t\t\t\t\t<a href=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["row"], "link", [], "any", false, false, false, 287);
                    echo "\" class=\"";
                    echo ($context["class_link"] ?? null);
                    echo "\" ";
                    echo ($context["target"] ?? null);
                    echo ">
\t\t\t\t\t\t\t\t\t\t\t<strong>
\t\t\t\t\t\t\t\t\t\t\t\t";
                    // line 289
                    echo (((($context["icon_font"] ?? null) . ($context["icon"] ?? null)) . (($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 = twig_get_attribute($this->env, $this->source, $context["row"], "name", [], "any", false, false, false, 289)) && is_array($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4) || $__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 instanceof ArrayAccess ? ($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4[($context["lang_id"] ?? null)] ?? null) : null)) . twig_get_attribute($this->env, $this->source, $context["row"], "description", [], "any", false, false, false, 289));
                    echo "
\t\t\t\t\t\t\t\t\t\t\t</strong>
\t\t\t\t\t\t\t\t\t\t\t";
                    // line 291
                    echo ($context["label_item"] ?? null);
                    echo "
\t\t\t\t\t\t\t\t\t\t\t<b class='caret'></b>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t";
                } else {
                    // line 295
                    echo "\t\t\t\t\t\t\t\t\t\t<a href=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["row"], "link", [], "any", false, false, false, 295);
                    echo "\" class=\"";
                    echo ($context["class_link"] ?? null);
                    echo "\" ";
                    echo ($context["target"] ?? null);
                    echo ">
\t\t\t\t\t\t\t\t\t\t\t<strong>
\t\t\t\t\t\t\t\t\t\t\t\t";
                    // line 297
                    echo (((($context["icon_font"] ?? null) . ($context["icon"] ?? null)) . (($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 = twig_get_attribute($this->env, $this->source, $context["row"], "name", [], "any", false, false, false, 297)) && is_array($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666) || $__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 instanceof ArrayAccess ? ($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666[($context["lang_id"] ?? null)] ?? null) : null)) . twig_get_attribute($this->env, $this->source, $context["row"], "description", [], "any", false, false, false, 297));
                    echo "
\t\t\t\t\t\t\t\t\t\t\t</strong>
\t\t\t\t\t\t\t\t\t\t\t";
                    // line 299
                    echo ($context["label_item"] ?? null);
                    echo "
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t";
                }
                // line 302
                echo "
\t\t\t\t\t\t\t\t\t";
                // line 303
                if ((twig_test_iterable(twig_get_attribute($this->env, $this->source, $context["row"], "submenu", [], "any", false, false, false, 303)) && twig_get_attribute($this->env, $this->source, $context["row"], "submenu", [], "any", false, false, false, 303))) {
                    // line 304
                    echo "\t\t\t\t\t\t\t\t\t\t<div class=\"sub-menu\" style=\"width: ";
                    echo twig_get_attribute($this->env, $this->source, $context["row"], "submenu_width", [], "any", false, false, false, 304);
                    echo "\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"content\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    // line 307
                    $context["row_fluid"] = 0;
                    // line 308
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["row"], "submenu", [], "any", false, false, false, 308));
                    foreach ($context['_seq'] as $context["_key"] => $context["submenu"]) {
                        // line 309
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        if (((($context["row_fluid"] ?? null) + twig_get_attribute($this->env, $this->source, $context["submenu"], "content_width", [], "any", false, false, false, 309)) > 12)) {
                            // line 310
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                            $context["row_fluid"] = twig_get_attribute($this->env, $this->source, $context["submenu"], "content_width", [], "any", false, false, false, 310);
                            // line 311
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div><div class=\"border\"></div><div class=\"row\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        } else {
                            // line 313
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                            $context["row_fluid"] = (($context["row_fluid"] ?? null) + twig_get_attribute($this->env, $this->source, $context["submenu"], "content_width", [], "any", false, false, false, 313));
                            // line 314
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        }
                        // line 315
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-";
                        echo twig_get_attribute($this->env, $this->source, $context["submenu"], "content_width", [], "any", false, false, false, 315);
                        echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        // line 316
                        if ((twig_get_attribute($this->env, $this->source, $context["submenu"], "content_type", [], "any", false, false, false, 316) == 0)) {
                            // line 317
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"html ";
                            echo twig_get_attribute($this->env, $this->source, $context["submenu"], "class_menu", [], "any", false, false, false, 317);
                            echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                            // line 318
                            echo twig_get_attribute($this->env, $this->source, $context["submenu"], "html", [], "any", false, false, false, 318);
                            echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        } elseif ((twig_get_attribute($this->env, $this->source,                         // line 320
$context["submenu"], "content_type", [], "any", false, false, false, 320) == 1)) {
                            // line 321
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                            if (twig_test_iterable(twig_get_attribute($this->env, $this->source, $context["submenu"], "product", [], "any", false, false, false, 321))) {
                                // line 322
                                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"product ";
                                echo twig_get_attribute($this->env, $this->source, $context["submenu"], "class_menu", [], "any", false, false, false, 322);
                                echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"image\"><a href=\"";
                                // line 323
                                echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["submenu"], "product", [], "any", false, false, false, 323), "link", [], "any", false, false, false, 323);
                                echo "\" onclick=\"window.location = '";
                                echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["submenu"], "product", [], "any", false, false, false, 323), "link", [], "any", false, false, false, 323);
                                echo "'\"><img class=\"lazyload\" data-sizes=\"auto\" src=\"data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==\" data-src=\"";
                                echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["submenu"], "product", [], "any", false, false, false, 323), "image", [], "any", false, false, false, 323);
                                echo "\" alt=\"\"></a></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"name\"><a href=\"";
                                // line 324
                                echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["submenu"], "product", [], "any", false, false, false, 324), "link", [], "any", false, false, false, 324);
                                echo "\" onclick=\"window.location = '";
                                echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["submenu"], "product", [], "any", false, false, false, 324), "link", [], "any", false, false, false, 324);
                                echo "'\">";
                                echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["submenu"], "product", [], "any", false, false, false, 324), "name", [], "any", false, false, false, 324);
                                echo "</a></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"price\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                // line 326
                                if ( !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["submenu"], "product", [], "any", false, false, false, 326), "special", [], "any", false, false, false, 326)) {
                                    // line 327
                                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                    echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["submenu"], "product", [], "any", false, false, false, 327), "price", [], "any", false, false, false, 327);
                                    echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                } else {
                                    // line 329
                                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                    echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["submenu"], "product", [], "any", false, false, false, 329), "special", [], "any", false, false, false, 329);
                                    echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                }
                                // line 331
                                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                            }
                            // line 334
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        } elseif ((twig_get_attribute($this->env, $this->source, $context["submenu"], "content_type", [], "any", false, false, false, 334) == 2)) {
                            // line 335
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"categories ";
                            echo twig_get_attribute($this->env, $this->source, $context["submenu"], "class_menu", [], "any", false, false, false, 335);
                            echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                            // line 336
                            echo twig_get_attribute($this->env, $this->source, $context["submenu"], "categories", [], "any", false, false, false, 336);
                            echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        } elseif ((twig_get_attribute($this->env, $this->source,                         // line 338
$context["submenu"], "content_type", [], "any", false, false, false, 338) == 3)) {
                            // line 339
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                            if (twig_test_iterable(twig_get_attribute($this->env, $this->source, $context["submenu"], "manufactures", [], "any", false, false, false, 339))) {
                                // line 340
                                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<ul class=\"manufacturer ";
                                echo twig_get_attribute($this->env, $this->source, $context["submenu"], "class_menu", [], "any", false, false, false, 340);
                                echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                // line 341
                                $context['_parent'] = $context;
                                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["submenu"], "manufactures", [], "any", false, false, false, 341));
                                foreach ($context['_seq'] as $context["_key"] => $context["manufacturer"]) {
                                    // line 342
                                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"";
                                    echo twig_get_attribute($this->env, $this->source, $context["manufacturer"], "link", [], "any", false, false, false, 342);
                                    echo "\">";
                                    echo twig_get_attribute($this->env, $this->source, $context["manufacturer"], "name", [], "any", false, false, false, 342);
                                    echo "</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                }
                                $_parent = $context['_parent'];
                                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['manufacturer'], $context['_parent'], $context['loop']);
                                $context = array_intersect_key($context, $_parent) + $_parent;
                                // line 344
                                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                            }
                            // line 346
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        } elseif ((twig_get_attribute($this->env, $this->source, $context["submenu"], "content_type", [], "any", false, false, false, 346) == 4)) {
                            // line 347
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["submenu"], "images", [], "any", false, false, false, 347), "show_title", [], "any", false, false, false, 347) == 1)) {
                                // line 348
                                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"title-submenu\">";
                                echo (($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e = twig_get_attribute($this->env, $this->source, $context["submenu"], "name", [], "any", false, false, false, 348)) && is_array($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e) || $__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e instanceof ArrayAccess ? ($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e[($context["lang_id"] ?? null)] ?? null) : null);
                                echo "</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                            }
                            // line 350
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"link ";
                            echo twig_get_attribute($this->env, $this->source, $context["submenu"], "class_menu", [], "any", false, false, false, 350);
                            echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                            // line 351
                            echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["submenu"], "images", [], "any", false, false, false, 351), "link", [], "any", false, false, false, 351);
                            echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        } elseif ((twig_get_attribute($this->env, $this->source,                         // line 353
$context["submenu"], "content_type", [], "any", false, false, false, 353) == 5)) {
                            // line 354
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["submenu"], "subcategory", [], "any", false, false, false, 354), "categories", [], "any", false, false, false, 354)) {
                                // line 355
                                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<ul class=\"subcategory ";
                                echo twig_get_attribute($this->env, $this->source, $context["submenu"], "class_menu", [], "any", false, false, false, 355);
                                echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                // line 356
                                $context['_parent'] = $context;
                                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["submenu"], "subcategory", [], "any", false, false, false, 356), "categories", [], "any", false, false, false, 356));
                                foreach ($context['_seq'] as $context["_key"] => $context["categories"]) {
                                    // line 357
                                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                    // line 358
                                    if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["submenu"], "subcategory", [], "any", false, false, false, 358), "show_title", [], "any", false, false, false, 358) == 1)) {
                                        // line 359
                                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
                                        echo twig_get_attribute($this->env, $this->source, $context["categories"], "href", [], "any", false, false, false, 359);
                                        echo "\" class=\"title-submenu ";
                                        echo twig_get_attribute($this->env, $this->source, $context["submenu"], "class_menu", [], "any", false, false, false, 359);
                                        echo "\">";
                                        echo twig_get_attribute($this->env, $this->source, $context["categories"], "name", [], "any", false, false, false, 359);
                                        echo "</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                    }
                                    // line 361
                                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                    if (twig_get_attribute($this->env, $this->source, $context["categories"], "categories", [], "any", false, false, false, 361)) {
                                        // line 362
                                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                        echo twig_get_attribute($this->env, $this->source, $context["categories"], "categories", [], "any", false, false, false, 362);
                                        echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                    }
                                    // line 364
                                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                    if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["submenu"], "subcategory", [], "any", false, false, false, 364), "show_image", [], "any", false, false, false, 364) == 1)) {
                                        // line 365
                                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img class=\"lazyload\" data-sizes=\"auto\" src=\"data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==\" data-src=\"";
                                        echo twig_get_attribute($this->env, $this->source, $context["categories"], "thumb", [], "any", false, false, false, 365);
                                        echo "\" alt=\"\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                    }
                                    // line 367
                                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                }
                                $_parent = $context['_parent'];
                                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['categories'], $context['_parent'], $context['loop']);
                                $context = array_intersect_key($context, $_parent) + $_parent;
                                // line 369
                                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                            }
                            // line 371
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        } elseif ((twig_get_attribute($this->env, $this->source, $context["submenu"], "content_type", [], "any", false, false, false, 371) == 6)) {
                            // line 372
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["submenu"], "productlist", [], "any", false, false, false, 372), "show_title", [], "any", false, false, false, 372) == 1)) {
                                // line 373
                                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"title-submenu\">";
                                echo (($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52 = twig_get_attribute($this->env, $this->source, $context["submenu"], "name", [], "any", false, false, false, 373)) && is_array($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52) || $__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52 instanceof ArrayAccess ? ($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52[($context["lang_id"] ?? null)] ?? null) : null);
                                echo "</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                            }
                            // line 375
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["submenu"], "productlist", [], "any", false, false, false, 375), "products", [], "any", false, false, false, 375)) {
                                // line 376
                                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                $context['_parent'] = $context;
                                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["submenu"], "productlist", [], "any", false, false, false, 376), "products", [], "any", false, false, false, 376));
                                foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                                    // line 377
                                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                    $context["itempage"] = ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["submenu"], "productlist", [], "any", false, false, false, 377), "col", [], "any", false, false, false, 377)) ? ((12 / twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["submenu"], "productlist", [], "any", false, false, false, 377), "col", [], "any", false, false, false, 377))) : (4));
                                    // line 378
                                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-";
                                    echo ($context["itempage"] ?? null);
                                    echo " ";
                                    echo twig_get_attribute($this->env, $this->source, $context["submenu"], "class_menu", [], "any", false, false, false, 378);
                                    echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"product-thumb\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"image\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
                                    // line 381
                                    echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 381);
                                    echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img class=\"lazyload\" data-sizes=\"auto\" src=\"data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==\" data-src=\"";
                                    // line 382
                                    echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 382);
                                    echo "\" alt=\"";
                                    echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 382);
                                    echo "\" title=\"";
                                    echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 382);
                                    echo "\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"caption\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h4><a href=\"";
                                    // line 387
                                    echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 387);
                                    echo "\">";
                                    echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 387);
                                    echo "</a></h4>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p>";
                                    // line 388
                                    echo twig_get_attribute($this->env, $this->source, $context["product"], "description", [], "any", false, false, false, 388);
                                    echo "</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                    // line 389
                                    if (twig_get_attribute($this->env, $this->source, $context["product"], "rating", [], "any", false, false, false, 389)) {
                                        // line 390
                                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"rating\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                        // line 391
                                        $context['_parent'] = $context;
                                        $context['_seq'] = twig_ensure_traversable(range(1, 5));
                                        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                                            // line 392
                                            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                            if ((twig_get_attribute($this->env, $this->source, $context["product"], "rating", [], "any", false, false, false, 392) < $context["i"])) {
                                                // line 393
                                                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-2x\"></i></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                            } else {
                                                // line 395
                                                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"fa fa-stack\"><i class=\"fa fa-star fa-stack-2x\"></i><i class=\"fa fa-star-o fa-stack-2x\"></i></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                            }
                                            // line 397
                                            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                        }
                                        $_parent = $context['_parent'];
                                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                                        $context = array_intersect_key($context, $_parent) + $_parent;
                                        // line 398
                                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                    }
                                    // line 400
                                    echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                    // line 401
                                    if (twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 401)) {
                                        // line 402
                                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"price\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                        // line 403
                                        if ( !twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 403)) {
                                            // line 404
                                            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                            echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 404);
                                            echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t   \t";
                                        } else {
                                            // line 406
                                            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"price-new\">";
                                            echo twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 406);
                                            echo "</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"price-old\">";
                                            // line 407
                                            echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 407);
                                            echo "</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t   \t";
                                        }
                                        // line 409
                                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t   \t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t   \t";
                                        // line 410
                                        if (twig_get_attribute($this->env, $this->source, $context["product"], "tax", [], "any", false, false, false, 410)) {
                                            // line 411
                                            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"price-tax\">";
                                            echo twig_get_attribute($this->env, $this->source, $context["product"], "tax", [], "any", false, false, false, 411);
                                            echo "</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                        }
                                        // line 413
                                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                    }
                                    // line 415
                                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t  \t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t  \t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t \t\t\t\t";
                                }
                                $_parent = $context['_parent'];
                                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
                                $context = array_intersect_key($context, $_parent) + $_parent;
                                // line 420
                                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                            }
                            // line 421
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        }
                        // line 422
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['submenu'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 424
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t</div>\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t";
                }
                // line 428
                echo "\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t";
            }
            // line 430
            echo "\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['row'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 431
        echo "\t\t\t\t\t</ul>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t</div>
\t</nav>
\t";
        // line 437
        if ((twig_get_attribute($this->env, $this->source, ($context["ustawienia"] ?? null), "orientation", [], "any", false, false, false, 437) == 1)) {
            // line 438
            echo "\t\t</div>
\t";
        }
        // line 440
        echo "</div>

";
        // line 442
        if ((twig_get_attribute($this->env, $this->source, ($context["ustawienia"] ?? null), "orientation", [], "any", false, false, false, 442) == 1)) {
            // line 443
            echo "<script type=\"text/javascript\">
\t\$(document).ready(function() {

\t\t(function (element) {
\t\t\tvar \$element = \$(element);
\t\t\tvar itemver =  ";
            // line 448
            echo twig_get_attribute($this->env, $this->source, ($context["ustawienia"] ?? null), "show_itemver", [], "any", false, false, false, 448);
            echo ";
\t\t\t
\t\t\t
\t\t\t
\t\t\tif(itemver < \$( \".vertical ul.megamenu >li\", \$element ).length){
\t\t\t\t\$('.vertical ul.megamenu', \$element).append('<li class=\"loadmore\"><i class=\"fa fa-plus-square\"></i><span class=\"more-view\"> ";
            // line 453
            echo ($context["text_more_category"] ?? null);
            echo "</span></li>');
\t\t\t\t\$('.horizontal ul.megamenu li.loadmore', \$element).remove();
\t\t\t}
\t\t\t
\t\t\tvar show_itemver = itemver-1 ;
\t\t\t\$('ul.megamenu > li.item-vertical', \$element).each(function(i){
\t\t\t\tif(i>show_itemver){
\t\t\t\t\t\t\$(this).css('display', 'none');
\t\t\t\t} 
\t\t\t});
\t\t\t
\t\t\t\$(\".megamenu .loadmore\", \$element).click(function(){
\t\t\t\tif(\$(this).hasClass('open')){
\t\t\t\t\t\$('ul.megamenu li.item-vertical', \$element).each(function(i){
\t\t\t\t\t\t\tif(i>show_itemver){
\t\t\t\t\t\t\t\t\t\$(this).slideUp(200);
\t\t\t\t\t\t\t\t\t\$(this).css('display', 'none');
\t\t\t\t\t\t\t}
\t\t\t\t\t});
\t\t\t\t\t
\t\t\t\t\t\$(this).removeClass('open');
\t\t\t\t\t\$('.loadmore', \$element).html('<i class=\"fa fa-plus\"></i><span class=\"more-view\">";
            // line 474
            echo ($context["text_more_category"] ?? null);
            echo "</span>');
\t\t\t\t}else{
\t\t\t\t\t\$('ul.megamenu li.item-vertical', \$element).each(function(i){
\t\t\t\t\t\t\tif(i>show_itemver){
\t\t\t\t\t\t\t\t\t\$(this).slideDown(200);
\t\t\t\t\t\t\t}
\t\t\t\t\t});
\t\t\t\t\t\$(this).addClass('open');
\t\t\t\t\t\$('.loadmore', \$element).html('<i class=\"fa fa-minus\"></i><span class=\"more-view\">";
            // line 482
            echo ($context["text_more_category"] ?? null);
            echo "</span>');
\t\t\t\t}
\t\t\t});
\t\t})(\"#";
            // line 485
            echo ($context["suffix_id"] ?? null);
            echo "\");


\t

\t    \$(\"#";
            // line 490
            echo ($context["show_verticalmenu_id"] ?? null);
            echo "\").click(function () {
\t\t\tif(\$('#";
            // line 491
            echo ($context["suffix_id"] ?? null);
            echo " .vertical-wrapper').hasClass('so-vertical-active'))
\t\t\t\t\$('#";
            // line 492
            echo ($context["suffix_id"] ?? null);
            echo " .vertical-wrapper').removeClass('so-vertical-active');
\t\t\telse
\t\t\t\t\$('#";
            // line 494
            echo ($context["suffix_id"] ?? null);
            echo " .vertical-wrapper').addClass('so-vertical-active');
\t\t}); 
\t\t\$('#";
            // line 496
            echo ($context["remove_verticalmenu_id"] ?? null);
            echo "').click(function() {
\t        \$('#";
            // line 497
            echo ($context["suffix_id"] ?? null);
            echo " .vertical-wrapper').removeClass('so-vertical-active');
\t        return false;
\t    });\t
\t});
</script>
";
        }
        // line 503
        echo "<script>
\$(document).ready(function(){
\t\$('a[href=\"";
        // line 505
        echo ($context["actual_link"] ?? null);
        echo "\"]').each(function() {
\t\t\$(this).parents('.with-sub-menu').addClass('sub-active');
\t});  
});
</script>";
    }

    public function getTemplateName()
    {
        return "so-buyshop/template/extension/module/so_megamenu/default.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1380 => 505,  1376 => 503,  1367 => 497,  1363 => 496,  1358 => 494,  1353 => 492,  1349 => 491,  1345 => 490,  1337 => 485,  1331 => 482,  1320 => 474,  1296 => 453,  1288 => 448,  1281 => 443,  1279 => 442,  1275 => 440,  1271 => 438,  1269 => 437,  1261 => 431,  1255 => 430,  1251 => 428,  1245 => 424,  1238 => 422,  1235 => 421,  1232 => 420,  1222 => 415,  1218 => 413,  1212 => 411,  1210 => 410,  1207 => 409,  1202 => 407,  1197 => 406,  1191 => 404,  1189 => 403,  1186 => 402,  1184 => 401,  1181 => 400,  1177 => 398,  1171 => 397,  1167 => 395,  1163 => 393,  1160 => 392,  1156 => 391,  1153 => 390,  1151 => 389,  1147 => 388,  1141 => 387,  1129 => 382,  1125 => 381,  1116 => 378,  1113 => 377,  1108 => 376,  1105 => 375,  1099 => 373,  1096 => 372,  1093 => 371,  1089 => 369,  1082 => 367,  1076 => 365,  1073 => 364,  1067 => 362,  1064 => 361,  1054 => 359,  1052 => 358,  1049 => 357,  1045 => 356,  1040 => 355,  1037 => 354,  1035 => 353,  1030 => 351,  1025 => 350,  1019 => 348,  1016 => 347,  1013 => 346,  1009 => 344,  998 => 342,  994 => 341,  989 => 340,  986 => 339,  984 => 338,  979 => 336,  974 => 335,  971 => 334,  966 => 331,  960 => 329,  954 => 327,  952 => 326,  943 => 324,  935 => 323,  930 => 322,  927 => 321,  925 => 320,  920 => 318,  915 => 317,  913 => 316,  908 => 315,  905 => 314,  902 => 313,  898 => 311,  895 => 310,  892 => 309,  887 => 308,  885 => 307,  878 => 304,  876 => 303,  873 => 302,  867 => 299,  862 => 297,  852 => 295,  845 => 291,  840 => 289,  830 => 287,  828 => 286,  821 => 284,  818 => 283,  814 => 282,  808 => 278,  798 => 275,  795 => 274,  785 => 269,  781 => 267,  775 => 265,  773 => 264,  770 => 263,  765 => 261,  760 => 260,  754 => 258,  752 => 257,  749 => 256,  747 => 255,  744 => 254,  740 => 252,  734 => 251,  730 => 249,  726 => 247,  723 => 246,  719 => 245,  716 => 244,  714 => 243,  710 => 242,  704 => 241,  692 => 236,  688 => 235,  679 => 232,  676 => 231,  671 => 230,  668 => 229,  662 => 227,  659 => 226,  656 => 225,  652 => 223,  645 => 221,  639 => 219,  636 => 218,  630 => 216,  627 => 215,  617 => 213,  615 => 212,  612 => 211,  608 => 210,  603 => 209,  600 => 208,  598 => 207,  593 => 205,  588 => 204,  582 => 202,  579 => 201,  576 => 200,  572 => 198,  561 => 196,  557 => 195,  552 => 194,  549 => 193,  547 => 192,  540 => 191,  537 => 190,  532 => 187,  526 => 185,  520 => 183,  518 => 182,  509 => 180,  501 => 179,  496 => 178,  493 => 177,  491 => 176,  484 => 175,  482 => 174,  477 => 173,  474 => 172,  471 => 171,  467 => 169,  464 => 168,  461 => 167,  456 => 166,  454 => 165,  449 => 162,  443 => 160,  437 => 158,  434 => 157,  432 => 156,  429 => 155,  423 => 152,  418 => 150,  408 => 148,  401 => 144,  396 => 142,  386 => 140,  384 => 139,  376 => 137,  374 => 136,  371 => 135,  368 => 134,  365 => 133,  363 => 132,  360 => 131,  357 => 130,  354 => 129,  352 => 128,  349 => 127,  346 => 126,  343 => 125,  341 => 124,  338 => 123,  335 => 122,  332 => 121,  329 => 120,  326 => 119,  323 => 118,  320 => 117,  317 => 116,  315 => 115,  312 => 114,  309 => 113,  306 => 112,  304 => 111,  301 => 110,  298 => 109,  295 => 108,  293 => 107,  290 => 106,  287 => 105,  284 => 104,  282 => 103,  279 => 102,  276 => 101,  273 => 100,  271 => 99,  268 => 98,  265 => 97,  262 => 96,  260 => 95,  257 => 94,  254 => 93,  251 => 92,  248 => 91,  245 => 90,  243 => 89,  240 => 88,  237 => 87,  234 => 86,  231 => 85,  228 => 84,  225 => 83,  222 => 82,  218 => 81,  215 => 80,  210 => 77,  204 => 75,  200 => 73,  198 => 72,  194 => 71,  191 => 70,  189 => 69,  175 => 68,  169 => 64,  165 => 62,  159 => 60,  157 => 59,  154 => 58,  150 => 56,  146 => 54,  144 => 53,  141 => 52,  128 => 42,  125 => 41,  113 => 32,  109 => 31,  99 => 24,  91 => 18,  89 => 17,  74 => 16,  71 => 15,  65 => 13,  63 => 12,  60 => 11,  56 => 9,  54 => 8,  48 => 7,  43 => 4,  41 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "so-buyshop/template/extension/module/so_megamenu/default.twig", "/home/azhkhn/public_html/protidin.com.bd/catalog/view/theme/so-buyshop/template/extension/module/so_megamenu/default.twig");
    }
}
