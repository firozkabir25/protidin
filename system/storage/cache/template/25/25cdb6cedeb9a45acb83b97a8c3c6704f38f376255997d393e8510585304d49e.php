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

/* so-buyshop/template/soconfig/quickview_header.twig */
class __TwigTemplate_d774f77fd6709a1a4b7e92982b8320372f86aa32bcb113a23f2e4e41f815c9ac extends \Twig\Template
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
";
        // line 16
        if (twig_get_attribute($this->env, $this->source, ($context["soconfig"] ?? null), "get_settings", [0 => "layouts"], "method", false, false, false, 16)) {
            echo " <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\"> ";
        }
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
        echo twig_get_attribute($this->env, $this->source, ($context["soconfig"] ?? null), "addCss", [0 => "catalog/view/javascript/soconfig/css/owl.carousel.css"], "method", false, false, false, 28);
        echo "
";
        // line 29
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["styles"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["style"]) {
            echo twig_get_attribute($this->env, $this->source, ($context["soconfig"] ?? null), "addCss", [0 => twig_get_attribute($this->env, $this->source, $context["style"], "href", [], "any", false, false, false, 29)], "method", false, false, false, 29);
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['style'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 30
        echo "
";
        // line 32
        echo twig_get_attribute($this->env, $this->source, ($context["soconfig"] ?? null), "addJs", [0 => "catalog/view/javascript/jquery/jquery-2.1.1.min.js"], "method", false, false, false, 32);
        echo "
";
        // line 33
        echo twig_get_attribute($this->env, $this->source, ($context["soconfig"] ?? null), "addJs", [0 => "catalog/view/javascript/bootstrap/js/bootstrap.min.js"], "method", false, false, false, 33);
        echo "
";
        // line 34
        echo twig_get_attribute($this->env, $this->source, ($context["soconfig"] ?? null), "addJs", [0 => "catalog/view/javascript/soconfig/js/libs.js"], "method", false, false, false, 34);
        echo "
";
        // line 35
        echo twig_get_attribute($this->env, $this->source, ($context["soconfig"] ?? null), "addJs", [0 => "catalog/view/javascript/soconfig/js/owl.carousel.js"], "method", false, false, false, 35);
        echo "
";
        // line 36
        echo twig_get_attribute($this->env, $this->source, ($context["soconfig"] ?? null), "addJs", [0 => "catalog/view/javascript/soconfig/js/so.system.js"], "method", false, false, false, 36);
        echo "

";
        // line 38
        echo twig_get_attribute($this->env, $this->source, ($context["soconfig"] ?? null), "addJs", [0 => (("catalog/view/theme/" . ($context["theme_directory"] ?? null)) . "/js/common.js")], "method", false, false, false, 38);
        echo "
";
        // line 39
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["scripts"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["script"]) {
            echo " ";
            echo twig_get_attribute($this->env, $this->source, ($context["soconfig"] ?? null), "addJs", [0 => $context["script"]], "method", false, false, false, 39);
            echo " ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['script'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 40
        echo "


";
        // line 44
        if ((twig_get_attribute($this->env, $this->source, ($context["soconfig"] ?? null), "get_settings", [0 => "url_body"], "method", false, false, false, 44) && (twig_get_attribute($this->env, $this->source, ($context["soconfig"] ?? null), "get_settings", [0 => "body_status"], "method", false, false, false, 44) == "google"))) {
            echo " <link href='";
            echo twig_get_attribute($this->env, $this->source, ($context["soconfig"] ?? null), "get_settings", [0 => "url_body"], "method", false, false, false, 44);
            echo "' rel='stylesheet' type='text/css'> ";
        }
        echo " \t
";
        // line 45
        if ((twig_get_attribute($this->env, $this->source, ($context["soconfig"] ?? null), "get_settings", [0 => "url_menu"], "method", false, false, false, 45) && (twig_get_attribute($this->env, $this->source, ($context["soconfig"] ?? null), "get_settings", [0 => "menu_status"], "method", false, false, false, 45) == "google"))) {
            echo " <link href='";
            echo twig_get_attribute($this->env, $this->source, ($context["soconfig"] ?? null), "get_settings", [0 => "url_menu"], "method", false, false, false, 45);
            echo "' rel='stylesheet' type='text/css'> ";
        }
        echo " \t
";
        // line 46
        if ((twig_get_attribute($this->env, $this->source, ($context["soconfig"] ?? null), "get_settings", [0 => "url_heading"], "method", false, false, false, 46) && (twig_get_attribute($this->env, $this->source, ($context["soconfig"] ?? null), "get_settings", [0 => "heading_status"], "method", false, false, false, 46) == "google"))) {
            echo " <link href='";
            echo twig_get_attribute($this->env, $this->source, ($context["soconfig"] ?? null), "get_settings", [0 => "url_heading"], "method", false, false, false, 46);
            echo "' rel='stylesheet' type='text/css'> ";
        }
        echo " \t
";
        // line 47
        if (twig_get_attribute($this->env, $this->source, ($context["soconfig"] ?? null), "get_settings", [0 => "selector_body"], "method", false, false, false, 47)) {
            // line 48
            echo "\t<style type=\"text/css\">
\t\t";
            // line 49
            if ((twig_get_attribute($this->env, $this->source, ($context["soconfig"] ?? null), "get_settings", [0 => "body_status"], "method", false, false, false, 49) == "google")) {
                echo " ";
                echo (((twig_get_attribute($this->env, $this->source, ($context["soconfig"] ?? null), "get_settings", [0 => "selector_body"], "method", false, false, false, 49) . "{font-family:") . twig_get_attribute($this->env, $this->source, ($context["soconfig"] ?? null), "get_settings", [0 => "family_body"], "method", false, false, false, 49)) . "}");
                echo "
\t\t";
            } else {
                // line 50
                echo "  ";
                echo (((twig_get_attribute($this->env, $this->source, ($context["soconfig"] ?? null), "get_settings", [0 => "selector_body"], "method", false, false, false, 50) . "{font-family:") . twig_get_attribute($this->env, $this->source, ($context["soconfig"] ?? null), "get_settings", [0 => "normal_body"], "method", false, false, false, 50)) . "}");
            }
            echo " 
\t</style>
";
        }
        // line 52
        echo " 
";
        // line 53
        if (twig_get_attribute($this->env, $this->source, ($context["soconfig"] ?? null), "get_settings", [0 => "selector_menu"], "method", false, false, false, 53)) {
            // line 54
            echo "\t<style type=\"text/css\">
\t\t";
            // line 55
            if ((twig_get_attribute($this->env, $this->source, ($context["soconfig"] ?? null), "get_settings", [0 => "menu_status"], "method", false, false, false, 55) == "google")) {
                echo " ";
                echo (((twig_get_attribute($this->env, $this->source, ($context["soconfig"] ?? null), "get_settings", [0 => "selector_menu"], "method", false, false, false, 55) . "{font-family:") . twig_get_attribute($this->env, $this->source, ($context["soconfig"] ?? null), "get_settings", [0 => "family_menu"], "method", false, false, false, 55)) . "}");
                echo "
\t\t";
            } else {
                // line 56
                echo "  ";
                echo (((twig_get_attribute($this->env, $this->source, ($context["soconfig"] ?? null), "get_settings", [0 => "selector_menu"], "method", false, false, false, 56) . "{font-family:") . twig_get_attribute($this->env, $this->source, ($context["soconfig"] ?? null), "get_settings", [0 => "normal_menu"], "method", false, false, false, 56)) . "}");
            }
            echo " 
\t</style>
";
        }
        // line 58
        echo " 
";
        // line 59
        if (twig_get_attribute($this->env, $this->source, ($context["soconfig"] ?? null), "get_settings", [0 => "selector_heading"], "method", false, false, false, 59)) {
            // line 60
            echo "\t<style type=\"text/css\">
\t\t";
            // line 61
            if ((twig_get_attribute($this->env, $this->source, ($context["soconfig"] ?? null), "get_settings", [0 => "menu_status"], "method", false, false, false, 61) == "google")) {
                echo " ";
                echo (((twig_get_attribute($this->env, $this->source, ($context["soconfig"] ?? null), "get_settings", [0 => "selector_heading"], "method", false, false, false, 61) . "{font-family:") . twig_get_attribute($this->env, $this->source, ($context["soconfig"] ?? null), "get_settings", [0 => "family_heading"], "method", false, false, false, 61)) . "}");
                echo "
\t\t";
            } else {
                // line 62
                echo "  ";
                echo (((twig_get_attribute($this->env, $this->source, ($context["soconfig"] ?? null), "get_settings", [0 => "selector_heading"], "method", false, false, false, 62) . "{font-family:") . twig_get_attribute($this->env, $this->source, ($context["soconfig"] ?? null), "get_settings", [0 => "normal_heading"], "method", false, false, false, 62)) . "}");
            }
            echo " 
\t</style>
";
        }
        // line 64
        echo " 

";
        // line 67
        echo "
";
        // line 69
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["links"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["link"]) {
            echo "<link href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["link"], "href", [], "any", false, false, false, 69);
            echo "\" rel=\"";
            echo twig_get_attribute($this->env, $this->source, $context["link"], "rel", [], "any", false, false, false, 69);
            echo "\" />";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['link'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 70
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["analytics"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["analytic"]) {
            // line 71
            echo $context["analytic"];
            echo "
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['analytic'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 73
        echo "
";
        // line 75
        echo "
";
        // line 76
        echo twig_get_attribute($this->env, $this->source, ($context["soconfig"] ?? null), "scss_compass", [], "any", false, false, false, 76);
        echo "
";
        // line 77
        echo twig_get_attribute($this->env, $this->source, ($context["soconfig"] ?? null), "css_out", [0 => twig_get_attribute($this->env, $this->source, ($context["soconfig"] ?? null), "get_settings", [0 => "cssExclude"], "method", false, false, false, 77)], "method", false, false, false, 77);
        echo "
";
        // line 78
        echo twig_get_attribute($this->env, $this->source, ($context["soconfig"] ?? null), "js_out", [0 => twig_get_attribute($this->env, $this->source, ($context["soconfig"] ?? null), "get_settings", [0 => "jsExclude"], "method", false, false, false, 78)], "method", false, false, false, 78);
        echo "


</head>

\t
<body >
<div id=\"wrapper\">  
 
";
    }

    public function getTemplateName()
    {
        return "so-buyshop/template/soconfig/quickview_header.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  297 => 78,  293 => 77,  289 => 76,  286 => 75,  283 => 73,  275 => 71,  271 => 70,  258 => 69,  255 => 67,  251 => 64,  243 => 62,  236 => 61,  233 => 60,  231 => 59,  228 => 58,  220 => 56,  213 => 55,  210 => 54,  208 => 53,  205 => 52,  197 => 50,  190 => 49,  187 => 48,  185 => 47,  177 => 46,  169 => 45,  161 => 44,  156 => 40,  145 => 39,  141 => 38,  136 => 36,  132 => 35,  128 => 34,  124 => 33,  120 => 32,  117 => 30,  108 => 29,  104 => 28,  100 => 27,  96 => 26,  93 => 25,  89 => 24,  83 => 23,  77 => 22,  73 => 19,  67 => 18,  61 => 17,  57 => 16,  53 => 15,  49 => 14,  40 => 10,  37 => 9,);
    }

    public function getSourceContext()
    {
        return new Source("", "so-buyshop/template/soconfig/quickview_header.twig", "/home/azhkhn/public_html/protidin.com.bd/catalog/view/theme/so-buyshop/template/soconfig/quickview_header.twig");
    }
}
