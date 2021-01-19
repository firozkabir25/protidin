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

/* so-buyshop/template/common/header.twig */
class __TwigTemplate_c2989f954e03e2e357ac79be06a6c4129162fe742975a7029c7a82605c057c22 extends \Twig\Template
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
        echo "<!DOCTYPE html>
<html dir=\"";
        // line 10
        echo ($context["direction"] ?? null);
        echo "\" lang=\"";
        echo ($context["lang"] ?? null);
        echo "\">
<head>
<meta charset=\"UTF-8\" />
<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
<title>";
        // line 14
        echo ($context["title"] ?? null);
        echo "</title>
<base href=\"";
        // line 15
        echo ($context["base"] ?? null);
        echo "\" />
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\"> 
";
        // line 17
        if (($context["description"] ?? null)) {
            echo "<meta name=\"description\" content=\"";
            echo ($context["description"] ?? null);
            echo "\" />";
        }
        // line 18
        if (($context["keywords"] ?? null)) {
            echo "<meta name=\"keywords\" content=\"";
            echo ($context["keywords"] ?? null);
            echo "\" />";
        }
        // line 19
        echo "<!--[if IE]><meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge,chrome=1\"><![endif]-->

";
        // line 22
        if ((($context["direction"] ?? null) == "ltr")) {
            echo " ";
            echo twig_get_attribute($this->env, $this->source, ($context["soconfig"] ?? null), "addCss", [0 => "catalog/view/javascript/bootstrap/css/bootstrap.min.css"], "method", false, false, false, 22);
            echo "
";
        } elseif ((        // line 23
($context["direction"] ?? null) == "rtl")) {
            echo twig_get_attribute($this->env, $this->source, ($context["soconfig"] ?? null), "addCss", [0 => "catalog/view/javascript/soconfig/css/bootstrap/bootstrap.rtl.min.css"], "method", false, false, false, 23);
            echo " 
";
        } else {
            // line 24
            echo twig_get_attribute($this->env, $this->source, ($context["soconfig"] ?? null), "addCss", [0 => "catalog/view/javascript/bootstrap/css/bootstrap.min.css"], "method", false, false, false, 24);
            echo " ";
        }
        // line 25
        echo "
";
        // line 26
        echo twig_get_attribute($this->env, $this->source, ($context["soconfig"] ?? null), "addCss", [0 => "catalog/view/javascript/font-awesome/css/font-awesome.min.css"], "method", false, false, false, 26);
        echo "
";
        // line 27
        echo twig_get_attribute($this->env, $this->source, ($context["soconfig"] ?? null), "addCss", [0 => "catalog/view/javascript/soconfig/css/lib.css"], "method", false, false, false, 27);
        echo "
";
        // line 28
        echo twig_get_attribute($this->env, $this->source, ($context["soconfig"] ?? null), "addCss", [0 => (("catalog/view/theme/" . ($context["theme_directory"] ?? null)) . "/css/ie9-and-up.css")], "method", false, false, false, 28);
        echo "
";
        // line 29
        echo twig_get_attribute($this->env, $this->source, ($context["soconfig"] ?? null), "addCss", [0 => (("catalog/view/theme/" . ($context["theme_directory"] ?? null)) . "/css/custom.css")], "method", false, false, false, 29);
        echo "



";
        // line 33
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["styles"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["style"]) {
            echo twig_get_attribute($this->env, $this->source, ($context["soconfig"] ?? null), "addCss", [0 => twig_get_attribute($this->env, $this->source, $context["style"], "href", [], "any", false, false, false, 33)], "method", false, false, false, 33);
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['style'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 34
        if (twig_get_attribute($this->env, $this->source, ($context["soconfig"] ?? null), "get_settings", [0 => "cssfile_status"], "method", false, false, false, 34)) {
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["soconfig"] ?? null), "get_settings", [0 => "cssfile_url"], "method", false, false, false, 34));
            foreach ($context['_seq'] as $context["_key"] => $context["cssfile"]) {
                echo " ";
                echo twig_get_attribute($this->env, $this->source, ($context["soconfig"] ?? null), "addCss", [0 => $context["cssfile"]], "method", false, false, false, 34);
                echo " ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cssfile'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo " ";
        }
        // line 35
        echo "


";
        // line 39
        echo twig_get_attribute($this->env, $this->source, ($context["soconfig"] ?? null), "addJs", [0 => "catalog/view/javascript/jquery/jquery-2.1.1.min.js"], "method", false, false, false, 39);
        echo "
";
        // line 40
        echo twig_get_attribute($this->env, $this->source, ($context["soconfig"] ?? null), "addJs", [0 => "catalog/view/javascript/bootstrap/js/bootstrap.min.js"], "method", false, false, false, 40);
        echo "
";
        // line 41
        echo twig_get_attribute($this->env, $this->source, ($context["soconfig"] ?? null), "addJs", [0 => "catalog/view/javascript/soconfig/js/libs.js"], "method", false, false, false, 41);
        echo "

";
        // line 43
        echo twig_get_attribute($this->env, $this->source, ($context["soconfig"] ?? null), "addJs", [0 => "catalog/view/javascript/soconfig/js/so.system.js"], "method", false, false, false, 43);
        echo "
";
        // line 44
        echo twig_get_attribute($this->env, $this->source, ($context["soconfig"] ?? null), "addJs", [0 => "catalog/view/javascript/soconfig/js/jquery.sticky-kit.min.js"], "method", false, false, false, 44);
        echo "
";
        // line 45
        echo twig_get_attribute($this->env, $this->source, ($context["soconfig"] ?? null), "addJs", [0 => "catalog/view/javascript/lazysizes/lazysizes.min.js"], "method", false, false, false, 45);
        echo "
";
        // line 46
        if ((($context["class"] ?? null) == "information-information")) {
            echo " ";
            echo twig_get_attribute($this->env, $this->source, ($context["soconfig"] ?? null), "addJs", [0 => "catalog/view/javascript/soconfig/js/typo/element.js"], "method", false, false, false, 46);
            echo " ";
        }
        // line 47
        echo "

";
        // line 49
        echo twig_get_attribute($this->env, $this->source, ($context["soconfig"] ?? null), "addJs", [0 => (("catalog/view/theme/" . ($context["theme_directory"] ?? null)) . "/js/so.custom.js")], "method", false, false, false, 49);
        echo "
";
        // line 50
        echo twig_get_attribute($this->env, $this->source, ($context["soconfig"] ?? null), "addJs", [0 => (("catalog/view/theme/" . ($context["theme_directory"] ?? null)) . "/js/common.js")], "method", false, false, false, 50);
        echo "

";
        // line 52
        if (twig_get_attribute($this->env, $this->source, ($context["soconfig"] ?? null), "get_settings", [0 => "toppanel_status"], "method", false, false, false, 52)) {
            echo twig_get_attribute($this->env, $this->source, ($context["soconfig"] ?? null), "addJs", [0 => "catalog/view/javascript/soconfig/js/toppanel.js"], "method", false, false, false, 52);
        }
        // line 53
        echo twig_get_attribute($this->env, $this->source, ($context["soconfig"] ?? null), "addJs", [0 => "catalog/view/javascript/so_onepagecheckout/js/so_onepagecheckout.js"], "method", false, false, false, 53);
        echo "
";
        // line 54
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["scripts"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["script"]) {
            echo " ";
            echo twig_get_attribute($this->env, $this->source, ($context["soconfig"] ?? null), "addJs", [0 => $context["script"]], "method", false, false, false, 54);
            echo " ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['script'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 55
        echo "

";
        // line 58
        echo "
";
        // line 59
        echo twig_get_attribute($this->env, $this->source, ($context["soconfig"] ?? null), "scss_compass", [], "any", false, false, false, 59);
        echo "
";
        // line 60
        echo twig_get_attribute($this->env, $this->source, ($context["soconfig"] ?? null), "css_out", [0 => twig_get_attribute($this->env, $this->source, ($context["soconfig"] ?? null), "get_settings", [0 => "cssExclude"], "method", false, false, false, 60)], "method", false, false, false, 60);
        echo "
";
        // line 61
        echo twig_get_attribute($this->env, $this->source, ($context["soconfig"] ?? null), "js_out", [0 => twig_get_attribute($this->env, $this->source, ($context["soconfig"] ?? null), "get_settings", [0 => "jsExclude"], "method", false, false, false, 61)], "method", false, false, false, 61);
        echo "
";
        // line 63
        echo "
";
        // line 64
        if ((twig_get_attribute($this->env, $this->source, ($context["soconfig"] ?? null), "get_settings", [0 => "url_body"], "method", false, false, false, 64) && (twig_get_attribute($this->env, $this->source, ($context["soconfig"] ?? null), "get_settings", [0 => "body_status"], "method", false, false, false, 64) == "google"))) {
            echo " <link href='";
            echo twig_get_attribute($this->env, $this->source, ($context["soconfig"] ?? null), "get_settings", [0 => "url_body"], "method", false, false, false, 64);
            echo "' rel='stylesheet' type='text/css'> ";
        }
        echo " \t
";
        // line 65
        if ((twig_get_attribute($this->env, $this->source, ($context["soconfig"] ?? null), "get_settings", [0 => "url_menu"], "method", false, false, false, 65) && (twig_get_attribute($this->env, $this->source, ($context["soconfig"] ?? null), "get_settings", [0 => "menu_status"], "method", false, false, false, 65) == "google"))) {
            echo " <link href='";
            echo twig_get_attribute($this->env, $this->source, ($context["soconfig"] ?? null), "get_settings", [0 => "url_menu"], "method", false, false, false, 65);
            echo "' rel='stylesheet' type='text/css'> ";
        }
        echo " \t
";
        // line 66
        if ((twig_get_attribute($this->env, $this->source, ($context["soconfig"] ?? null), "get_settings", [0 => "url_heading"], "method", false, false, false, 66) && (twig_get_attribute($this->env, $this->source, ($context["soconfig"] ?? null), "get_settings", [0 => "heading_status"], "method", false, false, false, 66) == "google"))) {
            echo " <link href='";
            echo twig_get_attribute($this->env, $this->source, ($context["soconfig"] ?? null), "get_settings", [0 => "url_heading"], "method", false, false, false, 66);
            echo "' rel='stylesheet' type='text/css'> ";
        }
        echo " \t



";
        // line 70
        if (($context["selector_body"] ?? null)) {
            // line 71
            echo "\t<style type=\"text/css\">
\t\t";
            // line 72
            if ((twig_get_attribute($this->env, $this->source, ($context["soconfig"] ?? null), "get_settings", [0 => "body_status"], "method", false, false, false, 72) == "google")) {
                echo " ";
                echo (((($context["selector_body"] ?? null) . "{font-family:") . twig_get_attribute($this->env, $this->source, ($context["soconfig"] ?? null), "get_settings", [0 => "family_body"], "method", false, false, false, 72)) . "}");
                echo "
\t\t";
            } else {
                // line 73
                echo "  ";
                echo (((($context["selector_body"] ?? null) . "{font-family:") . twig_get_attribute($this->env, $this->source, ($context["soconfig"] ?? null), "get_settings", [0 => "normal_body"], "method", false, false, false, 73)) . "}");
            }
            echo " 
\t</style>
";
        }
        // line 75
        echo " 
";
        // line 76
        if (($context["selector_menu"] ?? null)) {
            // line 77
            echo "\t<style type=\"text/css\">
\t\t";
            // line 78
            if ((twig_get_attribute($this->env, $this->source, ($context["soconfig"] ?? null), "get_settings", [0 => "menu_status"], "method", false, false, false, 78) == "google")) {
                echo " ";
                echo (((($context["selector_menu"] ?? null) . "{font-family:") . twig_get_attribute($this->env, $this->source, ($context["soconfig"] ?? null), "get_settings", [0 => "family_menu"], "method", false, false, false, 78)) . "}");
                echo "
\t\t";
            } else {
                // line 79
                echo "  ";
                echo (((($context["selector_menu"] ?? null) . "{font-family:") . twig_get_attribute($this->env, $this->source, ($context["soconfig"] ?? null), "get_settings", [0 => "normal_menu"], "method", false, false, false, 79)) . "}");
            }
            echo " 
\t</style>
";
        }
        // line 81
        echo " 
";
        // line 82
        if (($context["selector_heading"] ?? null)) {
            // line 83
            echo "\t<style type=\"text/css\">
\t\t";
            // line 84
            if ((twig_get_attribute($this->env, $this->source, ($context["soconfig"] ?? null), "get_settings", [0 => "heading_status"], "method", false, false, false, 84) == "google")) {
                echo " ";
                echo (((($context["selector_heading"] ?? null) . "{font-family:") . twig_get_attribute($this->env, $this->source, ($context["soconfig"] ?? null), "get_settings", [0 => "family_heading"], "method", false, false, false, 84)) . "}");
                echo "
\t\t";
            } else {
                // line 85
                echo "  ";
                echo (((($context["selector_heading"] ?? null) . "{font-family:") . twig_get_attribute($this->env, $this->source, ($context["soconfig"] ?? null), "get_settings", [0 => "normal_heading"], "method", false, false, false, 85)) . "}");
            }
            echo " 
\t</style>
";
        }
        // line 87
        echo " 


";
        // line 91
        if ((twig_get_attribute($this->env, $this->source, ($context["soconfig"] ?? null), "get_settings", [0 => "cssinput_status"], "method", false, false, false, 91) &&  !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["soconfig"] ?? null), "get_settings", [0 => "cssinput_content"], "method", false, false, false, 91)))) {
            // line 92
            echo "    <style type=\"text/css\">";
            echo twig_get_attribute($this->env, $this->source, ($context["soconfig"] ?? null), "get_settings", [0 => "cssinput_content"], "method", false, false, false, 92);
            echo " </style>
";
        }
        // line 93
        echo " 

";
        // line 95
        if ((twig_get_attribute($this->env, $this->source, ($context["soconfig"] ?? null), "get_settings", [0 => "jsinput_status"], "method", false, false, false, 95) &&  !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["soconfig"] ?? null), "get_settings", [0 => "jsinput_content"], "method", false, false, false, 95)))) {
            // line 96
            echo "   <script type=\"text/javascript\"><!--";
            echo twig_get_attribute($this->env, $this->source, ($context["soconfig"] ?? null), "get_settings", [0 => "jsinput_content"], "method", false, false, false, 96);
            echo "  //--></script>
";
        }
        // line 97
        echo " 


";
        // line 101
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["links"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["link"]) {
            echo "<link href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["link"], "href", [], "any", false, false, false, 101);
            echo "\" rel=\"";
            echo twig_get_attribute($this->env, $this->source, $context["link"], "rel", [], "any", false, false, false, 101);
            echo "\" />";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['link'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 102
        echo "\t";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["analytics"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["analytic"]) {
            // line 103
            echo "\t";
            echo $context["analytic"];
            echo "
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['analytic'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 105
        echo "
";
        // line 107
        if ((twig_get_attribute($this->env, $this->source, ($context["soconfig"] ?? null), "get_settings", [0 => "layoutstyle"], "method", false, false, false, 107) == "boxed")) {
            echo " 
\t<style type=\"text/css\">
\tbody {
\t\tbackground-color:";
            // line 110
            echo ((twig_get_attribute($this->env, $this->source, ($context["soconfig"] ?? null), "get_settings", [0 => "theme_bgcolor"], "method", false, false, false, 110)) ? (twig_get_attribute($this->env, $this->source, ($context["soconfig"] ?? null), "get_settings", [0 => "theme_bgcolor"], "method", false, false, false, 110)) : ("none"));
            echo " ;\t\t
\t\t";
            // line 111
            if ((twig_get_attribute($this->env, $this->source, ($context["soconfig"] ?? null), "get_settings", [0 => "contentbg"], "method", false, false, false, 111) != "")) {
                // line 112
                echo "\t\t\tbackground-image: url(\"image/";
                echo twig_get_attribute($this->env, $this->source, ($context["soconfig"] ?? null), "get_settings", [0 => "contentbg"], "method", false, false, false, 112);
                echo " \");
\t\t";
            }
            // line 114
            echo "\t\tbackground-repeat:";
            echo (( !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["soconfig"] ?? null), "get_settings", [0 => "content_bg_mode"], "method", false, false, false, 114))) ? (twig_get_attribute($this->env, $this->source, ($context["soconfig"] ?? null), "get_settings", [0 => "content_bg_mode"], "method", false, false, false, 114)) : ("no-repeat"));
            echo " ;
\t\tbackground-attachment:";
            // line 115
            echo (( !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["soconfig"] ?? null), "get_settings", [0 => "content_attachment"], "method", false, false, false, 115))) ? (twig_get_attribute($this->env, $this->source, ($context["soconfig"] ?? null), "get_settings", [0 => "content_attachment"], "method", false, false, false, 115)) : ("inherit"));
            echo " ;
\t\tbackground-position:top center; 
\t}
\t</style>
";
        }
        // line 119
        echo " \t


                ";
        // line 122
        echo ($context["topbar_css"] ?? null);
        echo "
            
</head>
";
        // line 126
        echo "
\t";
        // line 127
        $context["layoutbox"] = (( !twig_test_empty(($context["url_layoutbox"] ?? null))) ? (($context["url_layoutbox"] ?? null)) : (twig_get_attribute($this->env, $this->source, ($context["soconfig"] ?? null), "get_settings", [0 => "layoutstyle"], "method", false, false, false, 127)));
        // line 128
        echo "\t";
        $context["pattern"] = (( !twig_test_empty(($context["url_pattern"] ?? null))) ? (($context["url_pattern"] ?? null)) : (twig_get_attribute($this->env, $this->source, ($context["soconfig"] ?? null), "get_settings", [0 => "pattern"], "method", false, false, false, 128)));
        // line 129
        echo "

\t";
        // line 131
        $context["cls_body"] = (($context["class"] ?? null) . " ");
        // line 132
        echo "\t";
        $context["cls_body"] = (($context["cls_body"] ?? null) . ($context["direction"] ?? null));
        // line 133
        echo "\t";
        $context["cls_body"] = ((($context["cls_body"] ?? null) . " layout-") . twig_get_attribute($this->env, $this->source, ($context["soconfig"] ?? null), "get_settings", [0 => "typelayout"], "method", false, false, false, 133));
        // line 134
        if ((((($context["layoutbox"] ?? null) == "boxed") && (($context["pattern"] ?? null) != "none")) && twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["soconfig"] ?? null), "get_settings", [0 => "contentbg"], "method", false, false, false, 134)))) {
            // line 135
            echo "\t";
            $context["cls_body"] = ((($context["cls_body"] ?? null) . " pattern-") . ($context["pattern"] ?? null));
        }
        // line 136
        echo " 

\t";
        // line 138
        $context["cls_wrapper"] = ("wrapper-" . ($context["layoutbox"] ?? null));
        // line 139
        echo "\t";
        $context["cls_wrapper"] = ((($context["cls_wrapper"] ?? null) . " banners-effect-") . twig_get_attribute($this->env, $this->source, ($context["soconfig"] ?? null), "get_settings", [0 => "type_banner"], "method", false, false, false, 139));
        // line 140
        echo "\t
<body class=\"";
        // line 141
        echo ($context["cls_body"] ?? null);
        echo "\">

                ";
        // line 143
        echo ($context["so_topbar"] ?? null);
        echo "
            
<div id=\"wrapper\" class=\"";
        // line 145
        echo ($context["cls_wrapper"] ?? null);
        echo "\">  
 
";
        // line 148
        if (twig_get_attribute($this->env, $this->source, ($context["soconfig"] ?? null), "get_settings", [0 => "preloader"], "method", false, false, false, 148)) {
            // line 149
            echo "\t";
            $this->loadTemplate((($context["theme_directory"] ?? null) . "/template/soconfig/preloader.twig"), "so-buyshop/template/common/header.twig", 149)->display(twig_array_merge($context, ["preloader" => twig_get_attribute($this->env, $this->source, ($context["soconfig"] ?? null), "get_settings", [0 => "preloader_animation"], "method", false, false, false, 149)]));
        }
        // line 151
        echo "
";
        // line 153
        if ((twig_get_attribute($this->env, $this->source, ($context["soconfig"] ?? null), "get_settings", [0 => "typeheader"], "method", false, false, false, 153) == "1")) {
            // line 154
            echo "\t";
            $this->loadTemplate((($context["theme_directory"] ?? null) . "/template/header/header1.twig"), "so-buyshop/template/common/header.twig", 154)->display(twig_array_merge($context, ["typeheader" => twig_get_attribute($this->env, $this->source, ($context["soconfig"] ?? null), "get_settings", [0 => "typeheader"], "method", false, false, false, 154)]));
        } elseif ((twig_get_attribute($this->env, $this->source,         // line 155
($context["soconfig"] ?? null), "get_settings", [0 => "typeheader"], "method", false, false, false, 155) == "2")) {
            // line 156
            echo "\t";
            $this->loadTemplate((($context["theme_directory"] ?? null) . "/template/header/header2.twig"), "so-buyshop/template/common/header.twig", 156)->display(twig_array_merge($context, ["typeheader" => twig_get_attribute($this->env, $this->source, ($context["soconfig"] ?? null), "get_settings", [0 => "typeheader"], "method", false, false, false, 156)]));
        } elseif ((twig_get_attribute($this->env, $this->source,         // line 157
($context["soconfig"] ?? null), "get_settings", [0 => "typeheader"], "method", false, false, false, 157) == "3")) {
            // line 158
            echo "\t";
            $this->loadTemplate((($context["theme_directory"] ?? null) . "/template/header/header3.twig"), "so-buyshop/template/common/header.twig", 158)->display(twig_array_merge($context, ["typeheader" => twig_get_attribute($this->env, $this->source, ($context["soconfig"] ?? null), "get_settings", [0 => "typeheader"], "method", false, false, false, 158)]));
        } elseif ((twig_get_attribute($this->env, $this->source,         // line 159
($context["soconfig"] ?? null), "get_settings", [0 => "typeheader"], "method", false, false, false, 159) == "4")) {
            // line 160
            echo "\t";
            $this->loadTemplate((($context["theme_directory"] ?? null) . "/template/header/header4.twig"), "so-buyshop/template/common/header.twig", 160)->display(twig_array_merge($context, ["typeheader" => twig_get_attribute($this->env, $this->source, ($context["soconfig"] ?? null), "get_settings", [0 => "typeheader"], "method", false, false, false, 160)]));
            // line 161
            echo "

";
        } else {
            // line 163
            echo "\t
\t<style>
\t\t.alert-primary .alert-link {color: #002752;}
\t\t.alert-link {font-weight: 700;text-decoration: none;}
\t\t.alert-link:hover{text-decoration: underline;}
\t\t.alert {color: #004085;background-color: #cce5ff;padding: .75rem 1.25rem;margin-bottom: 1rem;border: 1px solid #b8daff;border-radius: .25rem;
\t\t}
\t</style>
\t<div class=\"alert alert-primary\">
\t\t\tGo to admin, find Extensions >>  <a class=\"alert-link\" href=\"admin/index.php?route=marketplace/modification\"  target=”_blank”> Modifications </a> and click 'Refresh' button. To apply the changes characterised by the uploaded modification file
\t</div>
";
        }
        // line 175
        echo "
<div id=\"socialLogin\"></div>

                ";
        // line 178
        if ((((isset($context["setting"]) || array_key_exists("setting", $context)) && twig_get_attribute($this->env, $this->source, ($context["setting"] ?? null), "so_sociallogin_enable", [], "any", false, false, false, 178)) && twig_get_attribute($this->env, $this->source, ($context["setting"] ?? null), "so_sociallogin_popuplogin", [], "any", false, false, false, 178))) {
            // line 179
            echo "                    <div class=\"modal fade in\" id=\"so_sociallogin\" tabindex=\"-1\" role=\"dialog\" aria-hidden=\"true\">
                        <div class=\"modal-dialog block-popup-login\">
                            <a href=\"javascript:void(0)\" title=\"Close\" class=\"close close-login fa fa-times-circle\" data-dismiss=\"modal\"></a>
                            <div class=\"tt_popup_login\"><strong>";
            // line 182
            echo ($context["text_title_popuplogin"] ?? null);
            echo "</strong></div>
                            <div class=\"block-content\">
                                <div class=\" col-reg registered-account\">
                                    <div class=\"block-content\">
                                        <form class=\"form form-login\" action=\"";
            // line 186
            echo ($context["login"] ?? null);
            echo "\" method=\"post\" id=\"login-form\">
                                            <fieldset class=\"fieldset login\" data-hasrequired=\"* Required Fields\">
                                                <div class=\"field email required email-input\">
                                                    <div class=\"control\">
                                                        <input name=\"email\" value=\"\" autocomplete=\"off\" id=\"email\" type=\"email\" class=\"input-text\" title=\"Email\" placeholder=\"E-mail Address\" />
                                                    </div>
                                                </div>
                                                <div class=\"field password required pass-input\">
                                                    <div class=\"control\">
                                                        <input name=\"password\" type=\"password\" autocomplete=\"off\" class=\"input-text\" id=\"pass\" title=\"Password\" placeholder=\"Password\" />
                                                    </div>
                                                </div>
                                                ";
            // line 198
            if (twig_get_attribute($this->env, $this->source, ($context["setting"] ?? null), "so_sociallogin_enable", [], "any", false, false, false, 198)) {
                // line 199
                echo "                                                <div class=\" form-group\">
                                                    <label class=\"control-label\">";
                // line 200
                echo ($context["text_title_login_with_social"] ?? null);
                echo "</label>
                                                    <div>
                                                        ";
                // line 202
                if (twig_get_attribute($this->env, $this->source, ($context["setting"] ?? null), "so_sociallogin_googlestatus", [], "any", false, false, false, 202)) {
                    // line 203
                    echo "                                                            ";
                    if ((twig_get_attribute($this->env, $this->source, ($context["setting"] ?? null), "so_sociallogin_button", [], "any", false, false, false, 203) == "icon")) {
                        // line 204
                        echo "                                                                <a href=\"";
                        echo ($context["googlelink"] ?? null);
                        echo "\" class=\"btn btn-social-icon btn-sm btn-google-plus\"><i class=\"fa fa-google fa-fw\" aria-hidden=\"true\"></i></a>
                                                            ";
                    } else {
                        // line 206
                        echo "                                                                <a class=\"social-icon\" href=\"";
                        echo ($context["googlelink"] ?? null);
                        echo "\">
                                                                    <img class=\"img-responsive\" src=\"";
                        // line 207
                        echo ($context["googleimage"] ?? null);
                        echo "\" 
                                                                        data-toggle=\"tooltip\" alt=\"";
                        // line 208
                        echo twig_get_attribute($this->env, $this->source, ($context["setting"] ?? null), "so_sociallogin_googletitle", [], "any", false, false, false, 208);
                        echo "\" 
                                                                        title=\"";
                        // line 209
                        echo twig_get_attribute($this->env, $this->source, ($context["setting"] ?? null), "so_sociallogin_googletitle", [], "any", false, false, false, 209);
                        echo "\" 
                                                                    />
                                                                </a>
                                                            ";
                    }
                    // line 213
                    echo "                                                        ";
                }
                // line 214
                echo "                                                        ";
                if (twig_get_attribute($this->env, $this->source, ($context["setting"] ?? null), "so_sociallogin_fbstatus", [], "any", false, false, false, 214)) {
                    // line 215
                    echo "                                                            ";
                    if ((twig_get_attribute($this->env, $this->source, ($context["setting"] ?? null), "so_sociallogin_button", [], "any", false, false, false, 215) == "icon")) {
                        // line 216
                        echo "                                                                <a href=\"";
                        echo ($context["fblink"] ?? null);
                        echo "\" class=\"btn btn-social-icon btn-sm btn-facebook\"><i class=\"fa fa-facebook fa-fw\" aria-hidden=\"true\"></i></a>
                                                            ";
                    } else {
                        // line 218
                        echo "                                                                <a href=\"";
                        echo ($context["fblink"] ?? null);
                        echo "\" class=\"social-icon\">
                                                                    <img class=\"img-responsive\" src=\"";
                        // line 219
                        echo ($context["fbimage"] ?? null);
                        echo "\" 
                                                                        data-toggle=\"tooltip\" alt=\"";
                        // line 220
                        echo twig_get_attribute($this->env, $this->source, ($context["setting"] ?? null), "so_sociallogin_fbtitle", [], "any", false, false, false, 220);
                        echo "\" 
                                                                        title=\"";
                        // line 221
                        echo twig_get_attribute($this->env, $this->source, ($context["setting"] ?? null), "so_sociallogin_fbtitle", [], "any", false, false, false, 221);
                        echo "\"
                                                                    />
                                                                </a>
                                                            ";
                    }
                    // line 225
                    echo "                                                        ";
                }
                // line 226
                echo "                                                        ";
                if (twig_get_attribute($this->env, $this->source, ($context["setting"] ?? null), "so_sociallogin_twitstatus", [], "any", false, false, false, 226)) {
                    // line 227
                    echo "                                                            ";
                    if ((twig_get_attribute($this->env, $this->source, ($context["setting"] ?? null), "so_sociallogin_button", [], "any", false, false, false, 227) == "icon")) {
                        // line 228
                        echo "                                                                <a href=\"";
                        echo ($context["twitlink"] ?? null);
                        echo "\" class=\"btn btn-social-icon btn-sm btn-twitter\"><i class=\"fa fa-twitter fa-fw\" aria-hidden=\"true\"></i></a>
                                                            ";
                    } else {
                        // line 230
                        echo "                                                                <a class=\"social-icon\"  href=\"";
                        echo ($context["twitlink"] ?? null);
                        echo "\">
                                                                    <img class=\"img-responsive\" src=\"";
                        // line 231
                        echo ($context["twitimage"] ?? null);
                        echo "\" 
                                                                        data-toggle=\"tooltip\" alt=\"";
                        // line 232
                        echo twig_get_attribute($this->env, $this->source, ($context["setting"] ?? null), "so_sociallogin_twittertitle", [], "any", false, false, false, 232);
                        echo "\" 
                                                                        title=\"";
                        // line 233
                        echo twig_get_attribute($this->env, $this->source, ($context["setting"] ?? null), "so_sociallogin_twittertitle", [], "any", false, false, false, 233);
                        echo "\"
                                                                    />
                                                                </a>
                                                            ";
                    }
                    // line 237
                    echo "                                                        ";
                }
                // line 238
                echo "                                                        ";
                if (twig_get_attribute($this->env, $this->source, ($context["setting"] ?? null), "so_sociallogin_linkstatus", [], "any", false, false, false, 238)) {
                    // line 239
                    echo "                                                            ";
                    if ((twig_get_attribute($this->env, $this->source, ($context["setting"] ?? null), "so_sociallogin_button", [], "any", false, false, false, 239) == "icon")) {
                        // line 240
                        echo "                                                                <a href=\"";
                        echo ($context["linkdinlink"] ?? null);
                        echo "\" class=\"btn btn-social-icon btn-sm btn-linkdin\"><i class=\"fa fa-linkedin fa-fw\" aria-hidden=\"true\"></i></a>
                                                            ";
                    } else {
                        // line 242
                        echo "                                                                <a class=\"social-icon\"  href=\"";
                        echo ($context["linkdinlink"] ?? null);
                        echo "\">
                                                                    <img class=\"img-responsive\" src=\"";
                        // line 243
                        echo ($context["linkdinimage"] ?? null);
                        echo "\" 
                                                                        data-toggle=\"tooltip\" alt=\"";
                        // line 244
                        echo twig_get_attribute($this->env, $this->source, ($context["setting"] ?? null), "so_sociallogin_linkedintitle", [], "any", false, false, false, 244);
                        echo "\" 
                                                                        title=\"";
                        // line 245
                        echo twig_get_attribute($this->env, $this->source, ($context["setting"] ?? null), "so_sociallogin_linkedintitle", [], "any", false, false, false, 245);
                        echo "\"
                                                                    />
                                                                </a>
                                                            ";
                    }
                    // line 249
                    echo "                                                        ";
                }
                // line 250
                echo "                                                    </div>
                                                </div>
                                                ";
            }
            // line 253
            echo "                                                <div class=\"secondary ft-link-p\"><a class=\"action remind\" href=\"";
            echo ($context["link_forgot_password"] ?? null);
            echo "\"><span>";
            echo ($context["text_forgot_password"] ?? null);
            echo "</span></a></div>
                                                <div class=\"actions-toolbar\">
                                                    <div class=\"primary\"><button type=\"submit\" class=\"action login primary\" name=\"send\" id=\"send2\"><span>";
            // line 255
            echo ($context["text_login"] ?? null);
            echo "</span></button></div>
                                                </div>
                                            </fieldset>
                                        </form>
                                    </div>
                                </div>      
                                <div class=\"col-reg login-customer\">
                                    ";
            // line 262
            echo ($context["text_colregister"] ?? null);
            echo "
                                    <a class=\"btn-reg-popup\" title=\"";
            // line 263
            echo ($context["text_register"] ?? null);
            echo "\" href=\"";
            echo ($context["register"] ?? null);
            echo "\">";
            echo ($context["text_create_account"] ?? null);
            echo "</a>
                                </div>
                                <div style=\"clear:both;\"></div>
                            </div>
                        </div>
                    </div>
                    <script type=\"text/javascript\">
                        jQuery(document).ready(function(\$) {
                            var \$window = \$(window);
                            function checkWidth() {
                                var windowsize = \$window.width();
                                if (windowsize > 767) {
                                    \$('a[href*=\"account/login\"]').click(function (e) {
                                        e.preventDefault();
                                        \$(\"#so_sociallogin\").modal('show');
                                    });
                                }
                            }
                            checkWidth();
                            \$(window).resize(checkWidth);
                        });
                    </script>
                ";
        }
        // line 286
        echo "            
";
    }

    public function getTemplateName()
    {
        return "so-buyshop/template/common/header.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  761 => 286,  731 => 263,  727 => 262,  717 => 255,  709 => 253,  704 => 250,  701 => 249,  694 => 245,  690 => 244,  686 => 243,  681 => 242,  675 => 240,  672 => 239,  669 => 238,  666 => 237,  659 => 233,  655 => 232,  651 => 231,  646 => 230,  640 => 228,  637 => 227,  634 => 226,  631 => 225,  624 => 221,  620 => 220,  616 => 219,  611 => 218,  605 => 216,  602 => 215,  599 => 214,  596 => 213,  589 => 209,  585 => 208,  581 => 207,  576 => 206,  570 => 204,  567 => 203,  565 => 202,  560 => 200,  557 => 199,  555 => 198,  540 => 186,  533 => 182,  528 => 179,  526 => 178,  521 => 175,  507 => 163,  502 => 161,  499 => 160,  497 => 159,  494 => 158,  492 => 157,  489 => 156,  487 => 155,  484 => 154,  482 => 153,  479 => 151,  475 => 149,  473 => 148,  468 => 145,  463 => 143,  458 => 141,  455 => 140,  452 => 139,  450 => 138,  446 => 136,  442 => 135,  440 => 134,  437 => 133,  434 => 132,  432 => 131,  428 => 129,  425 => 128,  423 => 127,  420 => 126,  414 => 122,  409 => 119,  401 => 115,  396 => 114,  390 => 112,  388 => 111,  384 => 110,  378 => 107,  375 => 105,  366 => 103,  361 => 102,  348 => 101,  343 => 97,  337 => 96,  335 => 95,  331 => 93,  325 => 92,  323 => 91,  318 => 87,  310 => 85,  303 => 84,  300 => 83,  298 => 82,  295 => 81,  287 => 79,  280 => 78,  277 => 77,  275 => 76,  272 => 75,  264 => 73,  257 => 72,  254 => 71,  252 => 70,  241 => 66,  233 => 65,  225 => 64,  222 => 63,  218 => 61,  214 => 60,  210 => 59,  207 => 58,  203 => 55,  192 => 54,  188 => 53,  184 => 52,  179 => 50,  175 => 49,  171 => 47,  165 => 46,  161 => 45,  157 => 44,  153 => 43,  148 => 41,  144 => 40,  140 => 39,  135 => 35,  121 => 34,  112 => 33,  105 => 29,  101 => 28,  97 => 27,  93 => 26,  90 => 25,  86 => 24,  80 => 23,  74 => 22,  70 => 19,  64 => 18,  58 => 17,  53 => 15,  49 => 14,  40 => 10,  37 => 9,);
    }

    public function getSourceContext()
    {
        return new Source("", "so-buyshop/template/common/header.twig", "/home/azhkhn/public_html/protidin.com.bd/system/storage/modification/catalog/view/theme/so-buyshop/template/common/header.twig");
    }
}
