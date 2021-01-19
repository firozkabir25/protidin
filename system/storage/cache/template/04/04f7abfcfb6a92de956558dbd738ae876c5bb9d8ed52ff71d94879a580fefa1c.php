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

/* so-buyshop/template/extension/module/so_popular_tags/default.twig */
class __TwigTemplate_4bd66700c53d8cf92a5026397a6e61167fc52e35bb2ed849facddc2cfb0b0fa6 extends \Twig\Template
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
        echo "<div class=\"module ";
        echo ($context["class_suffix"] ?? null);
        echo " so-popular-tag\">
\t";
        // line 2
        if ( !twig_test_empty(twig_trim_filter(($context["pre_text"] ?? null)))) {
            // line 3
            echo "\t\t<div class=\"form-group\">
\t\t\t";
            // line 4
            echo ($context["pre_text"] ?? null);
            echo "
\t\t</div>
\t";
        }
        // line 7
        echo "\t";
        if (($context["disp_title_module"] ?? null)) {
            // line 8
            echo "\t<h3 class=\"modtitle\">
\t\t<span>";
            // line 9
            echo ($context["head_name"] ?? null);
            echo "</span>
\t</h3>
\t";
        }
        // line 12
        echo "\t<div class=\"modcontent\">\t
\t\t";
        // line 13
        if (($context["data"] ?? null)) {
            // line 14
            echo "\t\t\t";
            echo ($context["data"] ?? null);
            echo "
\t\t";
        } else {
            // line 16
            echo "\t\t\t<p>";
            echo ($context["text_notags"] ?? null);
            echo "</p>
\t\t";
        }
        // line 18
        echo "\t</div>
\t";
        // line 19
        if ( !twig_test_empty(twig_trim_filter(($context["post_text"] ?? null)))) {
            // line 20
            echo "\t\t<div class=\"form-group\">
\t\t\t";
            // line 21
            echo ($context["post_text"] ?? null);
            echo "
\t\t</div>
\t";
        }
        // line 24
        echo "</div>";
    }

    public function getTemplateName()
    {
        return "so-buyshop/template/extension/module/so_popular_tags/default.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  96 => 24,  90 => 21,  87 => 20,  85 => 19,  82 => 18,  76 => 16,  70 => 14,  68 => 13,  65 => 12,  59 => 9,  56 => 8,  53 => 7,  47 => 4,  44 => 3,  42 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "so-buyshop/template/extension/module/so_popular_tags/default.twig", "/home/azhkhn/public_html/protidin.com.bd/catalog/view/theme/so-buyshop/template/extension/module/so_popular_tags/default.twig");
    }
}
