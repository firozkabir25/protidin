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

/* so-mobile/template/common/header.twig */
class __TwigTemplate_251087f4ebaea4eaffb0e2e10a128f6e490de8a9331ca1e3a17b2e7af4b8ad8d extends \Twig\Template
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
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1, user-scalable=0\"> 
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
        // line 29
        if ((($context["direction"] ?? null) == "rtl")) {
            echo twig_get_attribute($this->env, $this->source, ($context["soconfig"] ?? null), "addCss", [0 => "catalog/view/javascript/soconfig/css/ratchet/ratchet-rtl.css"], "method", false, false, false, 29);
            echo " 
";
        } else {
            // line 30
            echo twig_get_attribute($this->env, $this->source, ($context["soconfig"] ?? null), "addCss", [0 => "catalog/view/javascript/soconfig/css/ratchet/ratchet.css"], "method", false, false, false, 30);
            echo " ";
        }
        // line 31
        echo "
";
        // line 32
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["styles"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["style"]) {
            echo twig_get_attribute($this->env, $this->source, ($context["soconfig"] ?? null), "addCss", [0 => twig_get_attribute($this->env, $this->source, $context["style"], "href", [], "any", false, false, false, 32)], "method", false, false, false, 32);
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['style'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
        echo "
";
        // line 35
        echo twig_get_attribute($this->env, $this->source, ($context["soconfig"] ?? null), "addJs", [0 => "catalog/view/javascript/jquery/jquery-2.1.1.min.js"], "method", false, false, false, 35);
        echo "
";
        // line 36
        echo twig_get_attribute($this->env, $this->source, ($context["soconfig"] ?? null), "addJs", [0 => "catalog/view/javascript/bootstrap/js/bootstrap.min.js"], "method", false, false, false, 36);
        echo "
";
        // line 37
        echo twig_get_attribute($this->env, $this->source, ($context["soconfig"] ?? null), "addJs", [0 => "catalog/view/javascript/soconfig/js/libs.js"], "method", false, false, false, 37);
        echo "
";
        // line 38
        echo twig_get_attribute($this->env, $this->source, ($context["soconfig"] ?? null), "addJs", [0 => "catalog/view/javascript/lazysizes/lazysizes.min.js"], "method", false, false, false, 38);
        echo "

";
        // line 40
        if (twig_get_attribute($this->env, $this->source, ($context["soconfig"] ?? null), "get_settings", [0 => "barnav"], "method", false, false, false, 40)) {
            // line 41
            echo "\t";
            echo twig_get_attribute($this->env, $this->source, ($context["soconfig"] ?? null), "addJs", [0 => "catalog/view/javascript/soconfig/js/mobile/topnav.js"], "method", false, false, false, 41);
            echo "
";
        }
        // line 42
        echo " 
";
        // line 43
        echo twig_get_attribute($this->env, $this->source, ($context["soconfig"] ?? null), "addJs", [0 => "catalog/view/javascript/soconfig/js/mobile/so.mobile.js"], "method", false, false, false, 43);
        echo "
";
        // line 44
        echo twig_get_attribute($this->env, $this->source, ($context["soconfig"] ?? null), "addJs", [0 => "catalog/view/javascript/soconfig/js/ratchet/ratchet.js"], "method", false, false, false, 44);
        echo "


";
        // line 47
        echo twig_get_attribute($this->env, $this->source, ($context["soconfig"] ?? null), "addJs", [0 => (("catalog/view/theme/" . ($context["theme_directory"] ?? null)) . "/js/so.custom.js")], "method", false, false, false, 47);
        echo "
";
        // line 48
        echo twig_get_attribute($this->env, $this->source, ($context["soconfig"] ?? null), "addJs", [0 => (("catalog/view/theme/" . ($context["theme_directory"] ?? null)) . "/js/common.js")], "method", false, false, false, 48);
        echo "
";
        // line 49
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["scripts"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["script"]) {
            echo " ";
            echo twig_get_attribute($this->env, $this->source, ($context["soconfig"] ?? null), "addJs", [0 => $context["script"]], "method", false, false, false, 49);
            echo " ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['script'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 50
        echo "

";
        // line 53
        echo twig_get_attribute($this->env, $this->source, ($context["soconfig"] ?? null), "scss_compassMobile", [], "any", false, false, false, 53);
        echo "
";
        // line 54
        echo twig_get_attribute($this->env, $this->source, ($context["soconfig"] ?? null), "css_out", [0 => twig_get_attribute($this->env, $this->source, ($context["soconfig"] ?? null), "get_settings", [0 => "cssExclude"], "method", false, false, false, 54)], "method", false, false, false, 54);
        echo "
";
        // line 55
        echo twig_get_attribute($this->env, $this->source, ($context["soconfig"] ?? null), "js_out", [0 => twig_get_attribute($this->env, $this->source, ($context["soconfig"] ?? null), "get_settings", [0 => "jsExclude"], "method", false, false, false, 55)], "method", false, false, false, 55);
        echo "


";
        // line 59
        if ((twig_get_attribute($this->env, $this->source, ($context["soconfig"] ?? null), "get_settings", [0 => "murl_body"], "method", false, false, false, 59) && (twig_get_attribute($this->env, $this->source, ($context["soconfig"] ?? null), "get_settings", [0 => "mbody_status"], "method", false, false, false, 59) == "google"))) {
            echo " <link href='";
            echo twig_get_attribute($this->env, $this->source, ($context["soconfig"] ?? null), "get_settings", [0 => "murl_body"], "method", false, false, false, 59);
            echo "' rel='stylesheet' type='text/css'> ";
        }
        echo " \t
";
        // line 60
        if ((twig_get_attribute($this->env, $this->source, ($context["soconfig"] ?? null), "get_settings", [0 => "murl_heading"], "method", false, false, false, 60) && (twig_get_attribute($this->env, $this->source, ($context["soconfig"] ?? null), "get_settings", [0 => "mheading_status"], "method", false, false, false, 60) == "google"))) {
            echo " <link href='";
            echo twig_get_attribute($this->env, $this->source, ($context["soconfig"] ?? null), "get_settings", [0 => "murl_heading"], "method", false, false, false, 60);
            echo "' rel='stylesheet' type='text/css'> ";
        }
        echo " \t
";
        // line 61
        if (($context["mselector_body"] ?? null)) {
            // line 62
            echo "\t<style type=\"text/css\">
\t\t";
            // line 63
            if ((twig_get_attribute($this->env, $this->source, ($context["soconfig"] ?? null), "get_settings", [0 => "mbody_status"], "method", false, false, false, 63) == "google")) {
                echo " ";
                echo (((($context["mselector_body"] ?? null) . "{font-family:") . twig_get_attribute($this->env, $this->source, ($context["soconfig"] ?? null), "get_settings", [0 => "mfamily_body"], "method", false, false, false, 63)) . "}");
                echo "
\t\t";
            } else {
                // line 64
                echo "  ";
                echo (((($context["mselector_body"] ?? null) . "{font-family:") . twig_get_attribute($this->env, $this->source, ($context["soconfig"] ?? null), "get_settings", [0 => "mnormal_body"], "method", false, false, false, 64)) . "}");
            }
            echo " 
\t</style>
";
        }
        // line 66
        echo " 


";
        // line 69
        if (($context["mselector_heading"] ?? null)) {
            // line 70
            echo "\t<style type=\"text/css\">
\t\t";
            // line 71
            if ((twig_get_attribute($this->env, $this->source, ($context["soconfig"] ?? null), "get_settings", [0 => "mheading_status"], "method", false, false, false, 71) == "google")) {
                echo " ";
                echo (((($context["mselector_heading"] ?? null) . "{font-family:") . twig_get_attribute($this->env, $this->source, ($context["soconfig"] ?? null), "get_settings", [0 => "mfamily_heading"], "method", false, false, false, 71)) . "}");
                echo "
\t\t";
            } else {
                // line 72
                echo "  ";
                echo (((($context["mselector_heading"] ?? null) . "{font-family:") . twig_get_attribute($this->env, $this->source, ($context["soconfig"] ?? null), "get_settings", [0 => "mnormal_heading"], "method", false, false, false, 72)) . "}");
            }
            echo " 
\t</style>
";
        }
        // line 74
        echo " 



";
        // line 79
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["links"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["link"]) {
            echo "<link href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["link"], "href", [], "any", false, false, false, 79);
            echo "\" rel=\"";
            echo twig_get_attribute($this->env, $this->source, $context["link"], "rel", [], "any", false, false, false, 79);
            echo "\" />";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['link'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 80
        echo "\t";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["analytics"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["analytic"]) {
            // line 81
            echo "\t";
            echo $context["analytic"];
            echo "
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['analytic'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 83
        echo "


                ";
        // line 86
        echo ($context["topbar_css"] ?? null);
        echo "
            
</head>

";
        // line 91
        $context["cls_body"] = (($context["class"] ?? null) . " ");
        // line 92
        $context["cls_body"] = (($context["cls_body"] ?? null) . ($context["direction"] ?? null));
        // line 93
        $context["cls_body"] = ((($context["cls_body"] ?? null) . " mobilelayout-") . twig_get_attribute($this->env, $this->source, ($context["soconfig"] ?? null), "get_settings", [0 => "mobilelayout"], "method", false, false, false, 93));
        // line 94
        echo "\t
<body class=\"";
        // line 95
        echo ($context["cls_body"] ?? null);
        echo "\">

                ";
        // line 97
        echo ($context["so_topbar"] ?? null);
        echo "
            
";
        // line 99
        $this->loadTemplate((($context["theme_directory"] ?? null) . "/template/soconfig/panel_left.twig"), "so-mobile/template/common/header.twig", 99)->display($context);
        // line 100
        echo "
<div id=\"wrapper\">  
";
        // line 103
        if (twig_get_attribute($this->env, $this->source, ($context["soconfig"] ?? null), "get_settings", [0 => "bottombar_status"], "method", false, false, false, 103)) {
            // line 104
            echo "\t";
            $this->loadTemplate((($context["theme_directory"] ?? null) . "/template/soconfig/panel_bar.twig"), "so-mobile/template/common/header.twig", 104)->display(twig_array_merge($context, ["typeheader" => twig_get_attribute($this->env, $this->source, ($context["soconfig"] ?? null), "get_settings", [0 => "mtypeheader"], "method", false, false, false, 104)]));
        }
        // line 107
        if (twig_get_attribute($this->env, $this->source, ($context["soconfig"] ?? null), "get_settings", [0 => "barnav"], "method", false, false, false, 107)) {
            // line 108
            echo "\t";
            if ((twig_get_attribute($this->env, $this->source, ($context["soconfig"] ?? null), "get_settings", [0 => "mtypeheader"], "method", false, false, false, 108) == "1")) {
                // line 109
                echo "\t\t";
                $this->loadTemplate((($context["theme_directory"] ?? null) . "/template/header/header1.twig"), "so-mobile/template/common/header.twig", 109)->display(twig_array_merge($context, ["typeheader" => twig_get_attribute($this->env, $this->source, ($context["soconfig"] ?? null), "get_settings", [0 => "mtypeheader"], "method", false, false, false, 109)]));
                // line 110
                echo "\t";
            } elseif ((twig_get_attribute($this->env, $this->source, ($context["soconfig"] ?? null), "get_settings", [0 => "mtypeheader"], "method", false, false, false, 110) == "2")) {
                // line 111
                echo "\t\t";
                $this->loadTemplate((($context["theme_directory"] ?? null) . "/template/header/header2.twig"), "so-mobile/template/common/header.twig", 111)->display(twig_array_merge($context, ["typeheader" => twig_get_attribute($this->env, $this->source, ($context["soconfig"] ?? null), "get_settings", [0 => "mtypeheader"], "method", false, false, false, 111)]));
                // line 112
                echo "\t";
            } elseif ((twig_get_attribute($this->env, $this->source, ($context["soconfig"] ?? null), "get_settings", [0 => "mtypeheader"], "method", false, false, false, 112) == "3")) {
                // line 113
                echo "\t\t";
                $this->loadTemplate((($context["theme_directory"] ?? null) . "/template/header/header3.twig"), "so-mobile/template/common/header.twig", 113)->display(twig_array_merge($context, ["typeheader" => twig_get_attribute($this->env, $this->source, ($context["soconfig"] ?? null), "get_settings", [0 => "mtypeheader"], "method", false, false, false, 113)]));
                // line 114
                echo "\t";
            }
        }
        // line 116
        echo "
<!-- Begin Main Content -->
<div class=\"content\">

";
        // line 121
        if ((twig_get_attribute($this->env, $this->source, ($context["soconfig"] ?? null), "get_settings", [0 => "barnav"], "method", false, false, false, 121) == 0)) {
            // line 122
            echo "\t";
            if ((twig_get_attribute($this->env, $this->source, ($context["soconfig"] ?? null), "get_settings", [0 => "mtypeheader"], "method", false, false, false, 122) == "1")) {
                // line 123
                echo "\t\t";
                $this->loadTemplate((($context["theme_directory"] ?? null) . "/template/header/header1.twig"), "so-mobile/template/common/header.twig", 123)->display(twig_array_merge($context, ["typeheader" => twig_get_attribute($this->env, $this->source, ($context["soconfig"] ?? null), "get_settings", [0 => "mtypeheader"], "method", false, false, false, 123)]));
                // line 124
                echo "\t";
            } elseif ((twig_get_attribute($this->env, $this->source, ($context["soconfig"] ?? null), "get_settings", [0 => "mtypeheader"], "method", false, false, false, 124) == "2")) {
                // line 125
                echo "\t\t";
                $this->loadTemplate((($context["theme_directory"] ?? null) . "/template/header/header2.twig"), "so-mobile/template/common/header.twig", 125)->display(twig_array_merge($context, ["typeheader" => twig_get_attribute($this->env, $this->source, ($context["soconfig"] ?? null), "get_settings", [0 => "mtypeheader"], "method", false, false, false, 125)]));
                // line 126
                echo "\t";
            } elseif ((twig_get_attribute($this->env, $this->source, ($context["soconfig"] ?? null), "get_settings", [0 => "mtypeheader"], "method", false, false, false, 126) == "3")) {
                // line 127
                echo "\t\t";
                $this->loadTemplate((($context["theme_directory"] ?? null) . "/template/header/header3.twig"), "so-mobile/template/common/header.twig", 127)->display(twig_array_merge($context, ["typeheader" => twig_get_attribute($this->env, $this->source, ($context["soconfig"] ?? null), "get_settings", [0 => "mtypeheader"], "method", false, false, false, 127)]));
                // line 128
                echo "\t";
            }
        }
    }

    public function getTemplateName()
    {
        return "so-mobile/template/common/header.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  389 => 128,  386 => 127,  383 => 126,  380 => 125,  377 => 124,  374 => 123,  371 => 122,  369 => 121,  363 => 116,  359 => 114,  356 => 113,  353 => 112,  350 => 111,  347 => 110,  344 => 109,  341 => 108,  339 => 107,  335 => 104,  333 => 103,  329 => 100,  327 => 99,  322 => 97,  317 => 95,  314 => 94,  312 => 93,  310 => 92,  308 => 91,  301 => 86,  296 => 83,  287 => 81,  282 => 80,  269 => 79,  263 => 74,  255 => 72,  248 => 71,  245 => 70,  243 => 69,  238 => 66,  230 => 64,  223 => 63,  220 => 62,  218 => 61,  210 => 60,  202 => 59,  196 => 55,  192 => 54,  188 => 53,  184 => 50,  173 => 49,  169 => 48,  165 => 47,  159 => 44,  155 => 43,  152 => 42,  146 => 41,  144 => 40,  139 => 38,  135 => 37,  131 => 36,  127 => 35,  124 => 33,  115 => 32,  112 => 31,  108 => 30,  102 => 29,  97 => 27,  93 => 26,  90 => 25,  86 => 24,  80 => 23,  74 => 22,  70 => 19,  64 => 18,  58 => 17,  53 => 15,  49 => 14,  40 => 10,  37 => 9,);
    }

    public function getSourceContext()
    {
        return new Source("", "so-mobile/template/common/header.twig", "/home/azhkhn/public_html/protidin.com.bd/system/storage/modification/catalog/view/theme/so-mobile/template/common/header.twig");
    }
}
