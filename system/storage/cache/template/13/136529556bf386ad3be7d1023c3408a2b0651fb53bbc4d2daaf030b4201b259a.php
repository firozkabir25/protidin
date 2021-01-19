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

/* so-buyshop/template/header/header1.twig */
class __TwigTemplate_e9ea0bbd55c5cc9a5e8daf478a208478f7324753e9a626b0bd3ae649f67893a6 extends \Twig\Template
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
        // line 2
        $context["hidden_headercenter"] = (((twig_get_attribute($this->env, $this->source, ($context["soconfig"] ?? null), "get_settings", [0 => "toppanel_type"], "method", false, false, false, 2) == "2")) ? ("hidden-compact") : (""));
        // line 3
        $context["hidden_headerbottom"] = (((twig_get_attribute($this->env, $this->source, ($context["soconfig"] ?? null), "get_settings", [0 => "toppanel_type"], "method", false, false, false, 3) == "1")) ? ("hidden-compact") : (""));
        // line 4
        $context["hidden_headertop"] = ((((twig_get_attribute($this->env, $this->source, ($context["soconfig"] ?? null), "get_settings", [0 => "toppanel_type"], "method", false, false, false, 4) == "1") || (twig_get_attribute($this->env, $this->source, ($context["soconfig"] ?? null), "get_settings", [0 => "toppanel_type"], "method", false, false, false, 4) == "2"))) ? ("hidden-compact") : (""));
        // line 5
        echo "
<header id=\"header\" class=\"variant typeheader-";
        // line 6
        echo ((($context["typeheader"] ?? null)) ? (($context["typeheader"] ?? null)) : ("1"));
        echo "\">
    
    ";
        // line 8
        echo "  
\t<div class=\"header-top ";
        // line 9
        echo ($context["hidden_headertop"] ?? null);
        echo "\">
\t\t<div class=\"container\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"header-top-left collapsed-block col-lg-9 col-md-8 col-sm-6 col-xs-5\">
\t\t\t\t\t";
        // line 13
        if (twig_get_attribute($this->env, $this->source, ($context["soconfig"] ?? null), "get_settings", [0 => "welcome_message_status"], "method", false, false, false, 13)) {
            // line 14
            echo "\t\t\t\t\t\t<div class=\"hidden-sm hidden-xs welcome-msg\">
\t\t\t\t\t\t\t";
            // line 15
            if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["soconfig"] ?? null), "get_settings", [0 => "welcome_message"], "method", false, false, false, 15))) {
                // line 16
                echo "\t\t\t\t\t\t\t\t";
                echo twig_get_attribute($this->env, $this->source, ($context["soconfig"] ?? null), "decode_entities", [0 => twig_get_attribute($this->env, $this->source, ($context["soconfig"] ?? null), "get_settings", [0 => "welcome_message"], "method", false, false, false, 16)], "method", false, false, false, 16);
                echo "
\t\t\t\t\t\t\t";
            }
            // line 17
            echo " 
\t\t\t\t\t\t</div>
\t\t\t\t\t";
        }
        // line 19
        echo "\t\t\t\t\t

\t\t\t\t\t";
        // line 21
        if (twig_get_attribute($this->env, $this->source, ($context["soconfig"] ?? null), "get_settings", [0 => "lang_status"], "method", false, false, false, 21)) {
            // line 22
            echo "\t\t\t\t\t<ul class=\"top-link list-inline lang-curr\">
\t\t\t\t\t    ";
            // line 23
            if (($context["language"] ?? null)) {
                echo " <li class=\"language\">";
                echo ($context["language"] ?? null);
                echo " </li>\t";
            }
            // line 24
            echo "\t\t\t\t\t\t";
            if (($context["currency"] ?? null)) {
                echo "<li class=\"currency\"> ";
                echo ($context["currency"] ?? null);
                echo "  </li> ";
            }
            echo "\t\t\t\t
\t\t\t\t\t</ul>\t\t\t\t
\t\t\t\t\t";
        }
        // line 26
        echo " 

\t\t\t\t\t
\t\t\t\t\t<div class=\"pull-right hidden-sm hidden-xs\">
\t\t\t\t\t\t";
        // line 30
        if ( !twig_test_empty(($context["header_block"] ?? null))) {
            // line 31
            echo "\t\t\t\t\t\t\t";
            echo ($context["header_block"] ?? null);
            echo "
\t\t\t\t\t\t";
        }
        // line 33
        echo "\t\t\t\t\t</div>
\t\t\t\t</div>\t
\t\t\t\t<div class=\"header-top-right collapsed-block col-lg-3 col-md-4 col-sm-6 col-xs-7\">\t
\t\t\t\t\t<div class=\"checkout_cart\">\t
\t\t\t\t\t\t<div class=\"shopping_cart\">\t\t\t\t\t\t\t
\t\t\t\t\t\t \t";
        // line 38
        echo ($context["cart"] ?? null);
        echo "
\t\t\t\t\t\t</div>\t
\t\t\t\t\t\t<span class=\" hidden-xs\">|</span>\t\t\t
\t\t\t\t\t \t";
        // line 41
        if (twig_get_attribute($this->env, $this->source, ($context["soconfig"] ?? null), "get_settings", [0 => "checkout_status"], "method", false, false, false, 41)) {
            // line 42
            echo "\t\t\t\t\t\t\t<div class=\"link_checkout hidden-xs\"><a href=\"";
            echo ($context["checkout"] ?? null);
            echo " \" class=\"btn-link\" title=\"";
            echo ($context["text_checkout"] ?? null);
            echo " \"><span >";
            echo ($context["text_checkout"] ?? null);
            echo " </span></a></div>
\t\t\t\t\t\t";
        }
        // line 43
        echo " 
\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>

\t<!-- HEADER CENTER -->
\t<div class=\"header-center ";
        // line 52
        echo ($context["hidden_headercenter"] ?? null);
        echo "\">
\t\t<div class=\"container\">
\t\t\t<div class=\"row\">
\t\t\t\t<!-- LOGO -->
\t\t\t\t<div class=\"navbar-logo col-md-3 col-sm-12 col-xs-12\">
\t\t\t\t\t<div class=\"logo\">
\t\t\t\t   \t\t";
        // line 58
        echo twig_get_attribute($this->env, $this->source, ($context["soconfig"] ?? null), "get_logo", [], "method", false, false, false, 58);
        echo "
\t\t\t\t   \t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"header-center-right col-md-9 col-sm-12 col-xs-12\">\t
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t";
        // line 63
        if (($context["search_block"] ?? null)) {
            // line 64
            echo "\t\t\t\t\t\t\t<div class=\"search-header-w col-lg-7 col-md-6 col-sm-6 col-xs-12\">
\t\t\t\t\t\t\t\t<span class=\"hidden-lg hidden-md hidden-sm search-mobi\"><i class=\"fa fa-search\"></i></span>\t
\t\t\t\t\t\t\t\t<div class=\"searchbox\">\t\t\t
\t\t\t\t\t\t\t\t ";
            // line 67
            echo ($context["search_block"] ?? null);
            echo "
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
        }
        // line 70
        echo " 
\t\t\t\t\t\t<div class=\"header-link-right hidden-xs col-lg-5 col-md-6 col-sm-6 col-xs-12\">
\t\t\t\t\t\t\t";
        // line 72
        echo ($context["header_block2"] ?? null);
        echo "
\t\t\t\t\t\t\t<div class=\"signin-w font-title\">
\t\t\t\t\t\t\t\t<ul class=\"top-link list-inline\">\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t";
        // line 75
        if (($context["logged"] ?? null)) {
            echo " 
\t\t\t\t\t\t\t\t\t\t<li class=\"log logout\"><i class=\"fa fa-unlock\"></i> <a class=\"link-lg\" href=\"";
            // line 76
            echo ($context["logout"] ?? null);
            echo " \"> ";
            echo ($context["text_logout"] ?? null);
            echo " </a></li>
\t\t\t\t\t\t\t\t\t";
        } else {
            // line 77
            echo "   
\t\t\t\t\t\t\t\t\t\t<li class=\"log login\"><i class=\"fa fa-lock\"></i><span><a class=\"link-lg\" href=\"";
            // line 78
            echo ($context["login"] ?? null);
            echo " \">";
            echo ($context["text_login"] ?? null);
            echo " </a> ";
            echo twig_get_attribute($this->env, $this->source, ($context["objlang"] ?? null), "get", [0 => "text_or"], "method", false, false, false, 78);
            echo " <a href=\"";
            echo ($context["register"] ?? null);
            echo "\">";
            echo ($context["text_register"] ?? null);
            echo "</a></span></li>\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t";
        }
        // line 79
        echo " \t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t</ul>\t
\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t";
        // line 84
        if ((twig_get_attribute($this->env, $this->source, ($context["soconfig"] ?? null), "get_settings", [0 => "phone_status"], "method", false, false, false, 84) && twig_get_attribute($this->env, $this->source, ($context["soconfig"] ?? null), "get_settings", [0 => "contact_number"], "method", false, false, false, 84))) {
            // line 85
            echo "\t\t\t\t\t\t\t<div class=\"telephone hidden-sm hidden-xs\" >
\t\t\t\t\t\t\t\t";
            // line 86
            echo twig_get_attribute($this->env, $this->source, ($context["soconfig"] ?? null), "decode_entities", [0 => twig_get_attribute($this->env, $this->source, ($context["soconfig"] ?? null), "get_settings", [0 => "contact_number"], "method", false, false, false, 86)], "method", false, false, false, 86);
            echo "
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
        }
        // line 88
        echo " 
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>           

\t\t</div>
\t</div>
\t
\t<!-- HEADER BOTTOM -->
\t<div class=\"header-bottom ";
        // line 98
        echo ($context["hidden_headerbottom"] ?? null);
        echo "\">
\t\t<div class=\"container\">
\t\t    <div class=\"row\">
\t\t\t\t
\t\t\t\t<div class=\"col-lg-3 col-md-3 col-sm-2 col-xs-2 menu-vertical\">
\t\t\t\t\t<div class=\" megamenu-dev\">
\t\t\t\t\t";
        // line 104
        echo ($context["content_menu2"] ?? null);
        echo "
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-md-9 col-sm-9 col-xs-8 mega-horizontal\">
\t\t\t\t\t<div class=\"megamenu-style-dev megamenu-dev\">
\t\t\t\t\t\t<!-- BOX CONTENT MENU -->
\t\t\t\t\t\t";
        // line 110
        echo ($context["content_menu1"] ?? null);
        echo "\t
\t\t\t\t\t</div>\t\t\t\t
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t  
\t</div>
\t
\t
</header>";
    }

    public function getTemplateName()
    {
        return "so-buyshop/template/header/header1.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  271 => 110,  262 => 104,  253 => 98,  241 => 88,  235 => 86,  232 => 85,  230 => 84,  223 => 79,  210 => 78,  207 => 77,  200 => 76,  196 => 75,  190 => 72,  186 => 70,  179 => 67,  174 => 64,  172 => 63,  164 => 58,  155 => 52,  144 => 43,  134 => 42,  132 => 41,  126 => 38,  119 => 33,  113 => 31,  111 => 30,  105 => 26,  94 => 24,  88 => 23,  85 => 22,  83 => 21,  79 => 19,  74 => 17,  68 => 16,  66 => 15,  63 => 14,  61 => 13,  54 => 9,  51 => 8,  46 => 6,  43 => 5,  41 => 4,  39 => 3,  37 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("", "so-buyshop/template/header/header1.twig", "/home/azhkhn/public_html/protidin.com.bd/catalog/view/theme/so-buyshop/template/header/header1.twig");
    }
}
