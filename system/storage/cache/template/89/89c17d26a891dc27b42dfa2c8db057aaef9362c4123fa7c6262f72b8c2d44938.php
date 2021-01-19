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

/* so-buyshop/template/footer/footer1.twig */
class __TwigTemplate_8f380fe3852dbf1b23bbad1ccabda22d570dc73cd723f790bffef2d119594ca8 extends \Twig\Template
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
        echo "<footer class=\"footer-container typefooter-";
        echo ((($context["typefooter"] ?? null)) ? (($context["typefooter"] ?? null)) : ("1"));
        echo "\">
\t";
        // line 2
        echo "  
\t";
        // line 3
        if ( !twig_test_empty(($context["footer_block1"] ?? null))) {
            // line 4
            echo "\t<div class=\"footer-main desc-collapse showdown\" id=\"collapse-footer\">
\t\t";
            // line 5
            echo ($context["footer_block1"] ?? null);
            echo "
\t\t\t
\t</div>
\t
\t<div class=\"button-toggle hidden-lg hidden-md\">
         <a class=\"showmore\" data-toggle=\"collapse\" href=\"#\" aria-expanded=\"false\" aria-controls=\"collapse-footer\">
            <span class=\"toggle-more\">";
            // line 11
            echo twig_get_attribute($this->env, $this->source, ($context["objlang"] ?? null), "get", [0 => "show_more"], "method", false, false, false, 11);
            echo " <i class=\"fa fa-angle-down\"></i></span> 
            <span class=\"toggle-less\">";
            // line 12
            echo twig_get_attribute($this->env, $this->source, ($context["objlang"] ?? null), "get", [0 => "show_less"], "method", false, false, false, 12);
            echo " <i class=\"fa fa-angle-up\"></i></span>           
\t\t</a>        
\t</div>
\t";
        }
        // line 16
        echo "\t
\t
\t";
        // line 18
        echo " 
\t<div class=\"footer-bottom \">
\t\t<div class=\"container\">
\t\t\t<div class=\"row\">
\t\t\t\t";
        // line 22
        $context["col_copyright"] = ((twig_get_attribute($this->env, $this->source, ($context["soconfig"] ?? null), "get_settings", [0 => "imgpayment_status"], "method", false, false, false, 22)) ? ("col-sm-7") : ("col-sm-12"));
        // line 23
        echo "\t\t\t\t<div class=\"copyright ";
        echo ($context["col_copyright"] ?? null);
        echo "\">
\t\t\t\t\t";
        // line 24
        if (twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["soconfig"] ?? null), "get_settings", [0 => "copyright"], "method", false, false, false, 24))) {
            // line 25
            echo "\t\t\t\t\t\t";
            echo ($context["powered"] ?? null);
            echo "
\t\t\t\t\t";
        } else {
            // line 27
            echo "\t\t\t\t\t\t";
            echo twig_replace_filter(twig_get_attribute($this->env, $this->source, ($context["soconfig"] ?? null), "decode_entities", [0 => twig_get_attribute($this->env, $this->source, ($context["soconfig"] ?? null), "get_settings", [0 => "copyright"], "method", false, false, false, 27)], "method", false, false, false, 27), ["{year}" => twig_date_format_filter($this->env, "now", "Y")]);
            echo "
\t\t\t\t\t";
        }
        // line 29
        echo "
\t\t\t\t</div>

\t\t\t\t";
        // line 32
        if (twig_get_attribute($this->env, $this->source, ($context["soconfig"] ?? null), "get_settings", [0 => "imgpayment_status"], "method", false, false, false, 32)) {
            echo " 
\t\t\t\t<div class=\"col-sm-5 footer-payment\">
\t\t\t\t\t<img class=\"lazyload\" data-sizes=\"auto\" src=\"data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==\" data-src=\"image/";
            // line 34
            echo twig_get_attribute($this->env, $this->source, ($context["soconfig"] ?? null), "get_settings", [0 => "imgpayment"], "method", false, false, false, 34);
            echo "\"  alt=\"imgpayment\">
\t\t\t\t</div>
\t\t\t\t";
        }
        // line 36
        echo " 
\t\t\t</div>
\t\t</div>
\t\t

\t\t
\t</div>
</footer>";
    }

    public function getTemplateName()
    {
        return "so-buyshop/template/footer/footer1.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 36,  111 => 34,  106 => 32,  101 => 29,  95 => 27,  89 => 25,  87 => 24,  82 => 23,  80 => 22,  74 => 18,  70 => 16,  63 => 12,  59 => 11,  50 => 5,  47 => 4,  45 => 3,  42 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "so-buyshop/template/footer/footer1.twig", "/home/azhkhn/public_html/protidin.com.bd/catalog/view/theme/so-buyshop/template/footer/footer1.twig");
    }
}
