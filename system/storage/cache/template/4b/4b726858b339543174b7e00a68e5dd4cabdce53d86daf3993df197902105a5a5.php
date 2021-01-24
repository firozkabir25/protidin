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

/* so-buyshop/template/header/header2.twig */
class __TwigTemplate_8a1213be9d640ec4ce715451dc82f90609fda83a8882eb415c3abd83977a3512 extends \Twig\Template
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
        echo ((($context["typeheader"] ?? null)) ? (($context["typeheader"] ?? null)) : ("2"));
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
\t\t\t\t<div class=\"header-top-left collapsed-block col-lg-8 col-md-7 col-sm-8 col-xs-12 hidden-xs\">
\t\t\t\t\t";
        // line 13
        echo ($context["header_block2"] ?? null);
        echo "
\t\t\t\t\t";
        // line 14
        if (twig_get_attribute($this->env, $this->source, ($context["soconfig"] ?? null), "get_settings", [0 => "welcome_message_status"], "method", false, false, false, 14)) {
            // line 15
            echo "\t\t\t\t\t\t<div class=\"hidden-sm hidden-xs welcome-msg\">
\t\t\t\t\t\t\t";
            // line 16
            if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["soconfig"] ?? null), "get_settings", [0 => "welcome_message"], "method", false, false, false, 16))) {
                // line 17
                echo "\t\t\t\t\t\t\t\t";
                echo twig_get_attribute($this->env, $this->source, ($context["soconfig"] ?? null), "decode_entities", [0 => twig_get_attribute($this->env, $this->source, ($context["soconfig"] ?? null), "get_settings", [0 => "welcome_message"], "method", false, false, false, 17)], "method", false, false, false, 17);
                echo "
\t\t\t\t\t\t\t";
            }
            // line 18
            echo " 
\t\t\t\t\t\t</div>
\t\t\t\t\t";
        }
        // line 21
        echo "\t\t\t\t\t";
        if (twig_get_attribute($this->env, $this->source, ($context["soconfig"] ?? null), "get_settings", [0 => "checkout_status"], "method", false, false, false, 21)) {
            // line 22
            echo "\t\t\t\t\t\t<div class=\"link_checkout hidden-xs\"><a href=\"";
            echo ($context["checkout"] ?? null);
            echo " \" class=\"btn-link\" title=\"";
            echo ($context["text_checkout"] ?? null);
            echo " \"><span >";
            echo ($context["text_checkout"] ?? null);
            echo " </span></a></div>
\t\t\t\t\t";
        }
        // line 23
        echo " \t
\t\t\t\t\t
\t\t\t\t\t<div class=\"pull-right hidden hidden-xs\">
\t\t\t\t\t\t";
        // line 26
        if ( !twig_test_empty(($context["header_block"] ?? null))) {
            // line 27
            echo "\t\t\t\t\t\t\t";
            echo ($context["header_block"] ?? null);
            echo "
\t\t\t\t\t\t";
        }
        // line 29
        echo "\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"hidden signin-w font-title\">
\t\t\t\t\t\t<ul class=\"top-link list-inline\">\t\t\t\t\t\t\t
\t\t\t\t\t\t\t";
        // line 33
        if (($context["logged"] ?? null)) {
            echo " 
\t\t\t\t\t\t\t\t<li class=\"log logout\"><i class=\"fa fa-unlock\"></i> <a class=\"link-lg\" href=\"";
            // line 34
            echo ($context["logout"] ?? null);
            echo " \"> ";
            echo ($context["text_logout"] ?? null);
            echo " </a></li>
\t\t\t\t\t\t\t";
        } else {
            // line 35
            echo "   
\t\t\t\t\t\t\t\t<li class=\"log login\"><i class=\"fa fa-lock\"></i><span><a class=\"link-lg\" href=\"";
            // line 36
            echo ($context["login"] ?? null);
            echo " \">";
            echo ($context["text_login"] ?? null);
            echo " </a> ";
            echo twig_get_attribute($this->env, $this->source, ($context["objlang"] ?? null), "get", [0 => "text_or"], "method", false, false, false, 36);
            echo " <a href=\"";
            echo ($context["register"] ?? null);
            echo "\">";
            echo ($context["text_register"] ?? null);
            echo "</a></span></li>\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t";
        }
        // line 37
        echo " \t\t\t\t\t\t\t\t
\t\t\t\t\t\t</ul>\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t</div>

\t\t\t\t</div>\t
\t\t\t\t<div class=\"header-top-right collapsed-block col-lg-4 col-md-5 col-sm-4 col-xs-12\">\t
\t\t\t\t\t";
        // line 43
        if ((twig_get_attribute($this->env, $this->source, ($context["soconfig"] ?? null), "get_settings", [0 => "phone_status"], "method", false, false, false, 43) && twig_get_attribute($this->env, $this->source, ($context["soconfig"] ?? null), "get_settings", [0 => "contact_number"], "method", false, false, false, 43))) {
            // line 44
            echo "\t\t\t\t\t\t<div class=\"telephone hidden-sm\" >
\t\t\t\t\t\t\t";
            // line 45
            echo twig_get_attribute($this->env, $this->source, ($context["soconfig"] ?? null), "decode_entities", [0 => twig_get_attribute($this->env, $this->source, ($context["soconfig"] ?? null), "get_settings", [0 => "contact_number"], "method", false, false, false, 45)], "method", false, false, false, 45);
            echo "
\t\t\t\t\t\t</div>
\t\t\t\t\t";
        }
        // line 47
        echo " 

\t\t\t\t\t";
        // line 49
        if (twig_get_attribute($this->env, $this->source, ($context["soconfig"] ?? null), "get_settings", [0 => "lang_status"], "method", false, false, false, 49)) {
            // line 50
            echo "\t\t\t\t\t<ul class=\"top-link list-inline lang-curr\">
\t\t\t\t\t    ";
            // line 51
            if (($context["language"] ?? null)) {
                echo " <li class=\"language\">";
                echo ($context["language"] ?? null);
                echo " </li>\t";
            }
            // line 52
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
        // line 54
        echo " \t
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>

\t<!-- HEADER CENTER -->
\t<div class=\"header-center ";
        // line 61
        echo ($context["hidden_headercenter"] ?? null);
        echo "\">
\t\t<div class=\"container\">
\t\t\t<div class=\"row\">
\t\t\t\t<!-- LOGO -->
\t\t\t\t<div class=\"navbar-logo col-md-2 col-sm-12 col-xs-12\">
\t\t\t\t\t<div class=\"logo\">
\t\t\t\t   \t\t";
        // line 67
        echo twig_get_attribute($this->env, $this->source, ($context["soconfig"] ?? null), "get_logo", [], "method", false, false, false, 67);
        echo "
\t\t\t\t   \t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"header-center-right col-md-9 col-sm-12 col-xs-12\">\t
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t";
        // line 72
        if (($context["search_block"] ?? null)) {
            // line 73
            echo "\t\t\t\t\t\t\t<div class=\"search-header-w col-lg-8 col-md-8 col-sm-8 col-xs-12\">
\t\t\t\t\t\t\t\t<span class=\"hidden-lg hidden-md hidden-sm search-mobi\"><i class=\"fa fa-search\"></i></span>\t
\t\t\t\t\t\t\t\t<div class=\"searchbox\">\t\t\t
\t\t\t\t\t\t\t\t ";
            // line 76
            echo ($context["search_block"] ?? null);
            echo "
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
        }
        // line 79
        echo " 
\t\t\t\t\t\t<div class=\"col-lg-4 col-md-4 col-sm-12 col-xs-12\">
\t\t\t\t\t\t\t<div class=\"shopping_cart\">\t\t\t\t\t\t\t
\t\t\t\t\t\t\t \t";
        // line 82
        echo ($context["cart"] ?? null);
        echo "
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>           

\t\t</div>
\t</div>
\t
\t<!-- HEADER BOTTOM -->
\t<div class=\"header-bottom ";
        // line 94
        echo ($context["hidden_headerbottom"] ?? null);
        echo "\">
\t\t<div class=\"container\">
\t\t    <div class=\"row\">
\t\t\t\t
\t\t\t\t<div class=\"col-lg-3 col-md-3 col-sm-2 col-xs-2 menu-vertical\">
\t\t\t\t\t<div class=\" megamenu-dev\">
\t\t\t\t\t";
        // line 100
        echo ($context["content_menu2"] ?? null);
        echo "
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-md-9 col-sm-9 col-xs-8 mega-horizontal\">
\t\t\t\t\t<div class=\"megamenu-style-dev megamenu-dev\">
\t\t\t\t\t\t<!-- BOX CONTENT MENU -->
\t\t\t\t\t\t";
        // line 106
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
</header>
";
    }

    public function getTemplateName()
    {
        return "so-buyshop/template/header/header2.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  265 => 106,  256 => 100,  247 => 94,  232 => 82,  227 => 79,  220 => 76,  215 => 73,  213 => 72,  205 => 67,  196 => 61,  187 => 54,  176 => 52,  170 => 51,  167 => 50,  165 => 49,  161 => 47,  155 => 45,  152 => 44,  150 => 43,  142 => 37,  129 => 36,  126 => 35,  119 => 34,  115 => 33,  109 => 29,  103 => 27,  101 => 26,  96 => 23,  86 => 22,  83 => 21,  78 => 18,  72 => 17,  70 => 16,  67 => 15,  65 => 14,  61 => 13,  54 => 9,  51 => 8,  46 => 6,  43 => 5,  41 => 4,  39 => 3,  37 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("", "so-buyshop/template/header/header2.twig", "/opt/lampp/htdocs/protidin/catalog/view/theme/so-buyshop/template/header/header2.twig");
    }
}
