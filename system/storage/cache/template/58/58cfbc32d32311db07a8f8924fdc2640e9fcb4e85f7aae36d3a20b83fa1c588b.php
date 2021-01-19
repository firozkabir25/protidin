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

/* so-mobile/template/header/header1.twig */
class __TwigTemplate_f447bbe662e7f78072e842120f2bc2cf17efa84c0123054fa72a706772330554 extends \Twig\Template
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
        $context["barStatic"] = ((twig_get_attribute($this->env, $this->source, ($context["soconfig"] ?? null), "get_settings", [0 => "barnav"], "method", false, false, false, 2)) ? ("") : ("bar-static"));
        // line 3
        if ((twig_get_attribute($this->env, $this->source, ($context["soconfig"] ?? null), "is_mobile_page", [], "method", false, false, false, 3) || twig_get_attribute($this->env, $this->source, ($context["soconfig"] ?? null), "is_home_page", [], "method", false, false, false, 3))) {
            // line 4
            echo "\t<header class=\" bar bar-nav bar-navhome typeheader-";
            echo twig_get_attribute($this->env, $this->source, ($context["soconfig"] ?? null), "get_settings", [0 => "mtypeheader"], "method", false, false, false, 4);
            echo " ";
            echo ($context["barStatic"] ?? null);
            echo "\">
\t\t<div class=\"row navbar-bar \">
\t\t
\t\t\t<div class=\"navbar-menu col-xs-2\">
\t\t\t   <a class=\"toggle-panel\" href=\"#panel-menu\">
\t\t\t   \t<span class=\"icon-bar\"></span>
\t\t\t   \t<span class=\"icon-bar bar2\"></span>
\t\t\t   \t<span class=\"icon-bar\"></span>
\t\t\t   </a>
\t\t\t</div>

\t\t\t<div class=\"navbar-logo col-xs-3\">
\t\t\t\t";
            // line 16
            echo twig_get_attribute($this->env, $this->source, ($context["soconfig"] ?? null), "get_logoMobile", [], "method", false, false, false, 16);
            echo "
\t\t\t</div>
\t\t\t<div class=\"navbar-search col-xs-7\">
\t\t\t\t";
            // line 19
            echo ($context["search_block"] ?? null);
            echo "
\t\t\t</div>

\t\t</div>
\t</header>
";
        } else {
            // line 26
            echo "\t<header class=\"bar bar-nav ";
            echo ($context["barStatic"] ?? null);
            echo "\">
\t\t<a class=\"btn btn-link btn-nav pull-left\" href=\"#\" onClick=\"history.go(-1); return false;\">
\t\t\t<span class=\"icon icon-left-nav\"></span>
\t\t</a>
\t\t<a class=\"btn btn-link btn-nav pull-right toggle-panel\" href=\"#panel-menu\">
\t\t\t<span class=\"icon icon-bars\"></span>
\t\t</a>
\t\t<h1 class=\"title\">";
            // line 33
            echo ($context["title"] ?? null);
            echo "</h1>
\t</header>
";
        }
    }

    public function getTemplateName()
    {
        return "so-mobile/template/header/header1.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 33,  74 => 26,  65 => 19,  59 => 16,  41 => 4,  39 => 3,  37 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("", "so-mobile/template/header/header1.twig", "/home/azhkhn/public_html/protidin.com.bd/catalog/view/theme/so-mobile/template/header/header1.twig");
    }
}
