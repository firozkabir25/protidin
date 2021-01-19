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

/* so-buyshop/template/footer/footer2.twig */
class __TwigTemplate_77c2de0e38f54e03a06a3eef1df5d081a6264c20c586c7acc82a64b14a4723f5 extends \Twig\Template
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
        echo ((($context["typefooter"] ?? null)) ? (($context["typefooter"] ?? null)) : ("2"));
        echo "\">
\t";
        // line 2
        echo "  
\t";
        // line 3
        if ( !twig_test_empty(($context["footer_block2"] ?? null))) {
            // line 4
            echo "\t<div class=\"footer-main desc-collapse showdown\" id=\"collapse-footer\">
\t\t";
            // line 5
            echo ($context["footer_block2"] ?? null);
            echo "\t\t\t
\t</div>
\t
\t<div class=\"button-toggle hidden-lg hidden-md\">
         <a class=\"showmore\" data-toggle=\"collapse\" href=\"#\" aria-expanded=\"false\" aria-controls=\"collapse-footer\">
            <span class=\"toggle-more\">";
            // line 10
            echo twig_get_attribute($this->env, $this->source, ($context["objlang"] ?? null), "get", [0 => "show_more"], "method", false, false, false, 10);
            echo " <i class=\"fa fa-angle-down\"></i></span> 
            <span class=\"toggle-less\">";
            // line 11
            echo twig_get_attribute($this->env, $this->source, ($context["objlang"] ?? null), "get", [0 => "show_less"], "method", false, false, false, 11);
            echo " <i class=\"fa fa-angle-up\"></i></span>          
\t\t</a>        
\t</div>
\t";
        }
        // line 15
        echo "\t
\t
\t";
        // line 17
        echo " 
\t<div class=\"footer-bottom \">
\t\t<div class=\"container\">
\t\t\t<div class=\"row\">
\t\t\t\t";
        // line 21
        $context["col_copyright"] = (((twig_get_attribute($this->env, $this->source, ($context["soconfig"] ?? null), "get_settings", [0 => "imgpayment_status"], "method", false, false, false, 21) || ($context["footer_block3"] ?? null))) ? ("col-sm-4") : ("col-sm-12"));
        // line 22
        echo "\t\t\t\t<div class=\"copyright ";
        echo ($context["col_copyright"] ?? null);
        echo "\">
\t\t\t\t\t";
        // line 23
        if (twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["soconfig"] ?? null), "get_settings", [0 => "copyright"], "method", false, false, false, 23))) {
            // line 24
            echo "\t\t\t\t\t\t";
            echo ($context["powered"] ?? null);
            echo "
\t\t\t\t\t";
        } else {
            // line 26
            echo "\t\t\t\t\t\t";
            echo twig_replace_filter(twig_get_attribute($this->env, $this->source, ($context["soconfig"] ?? null), "decode_entities", [0 => twig_get_attribute($this->env, $this->source, ($context["soconfig"] ?? null), "get_settings", [0 => "copyright"], "method", false, false, false, 26)], "method", false, false, false, 26), ["{year}" => twig_date_format_filter($this->env, "now", "Y")]);
            echo "
\t\t\t\t\t";
        }
        // line 28
        echo "
\t\t\t\t</div>

\t\t\t\t";
        // line 31
        if (twig_get_attribute($this->env, $this->source, ($context["soconfig"] ?? null), "get_settings", [0 => "imgpayment_status"], "method", false, false, false, 31)) {
            echo " 
\t\t\t\t<div class=\"col-sm-8 footer-payment\">
\t\t\t\t\t<img class=\"lazyload\" data-sizes=\"auto\" src=\"data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==\" data-src=\"image/";
            // line 33
            echo twig_get_attribute($this->env, $this->source, ($context["soconfig"] ?? null), "get_settings", [0 => "imgpayment"], "method", false, false, false, 33);
            echo "\"  alt=\"imgpayment\">
\t\t\t\t</div>
\t\t\t\t";
        }
        // line 35
        echo " 
\t\t\t\t";
        // line 36
        if ( !twig_test_empty(($context["footer_block3"] ?? null))) {
            // line 37
            echo "\t\t\t\t<div class=\"col-sm-8 footer-menu\">
\t\t\t\t\t";
            // line 38
            echo ($context["footer_block3"] ?? null);
            echo "\t\t\t
\t\t\t\t</div>
\t\t\t\t";
        }
        // line 40
        echo " 
\t\t\t</div>
\t\t</div>
\t</div>
</footer>";
    }

    public function getTemplateName()
    {
        return "so-buyshop/template/footer/footer2.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  130 => 40,  124 => 38,  121 => 37,  119 => 36,  116 => 35,  110 => 33,  105 => 31,  100 => 28,  94 => 26,  88 => 24,  86 => 23,  81 => 22,  79 => 21,  73 => 17,  69 => 15,  62 => 11,  58 => 10,  50 => 5,  47 => 4,  45 => 3,  42 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "so-buyshop/template/footer/footer2.twig", "/home/azhkhn/public_html/protidin.com.bd/catalog/view/theme/so-buyshop/template/footer/footer2.twig");
    }
}
