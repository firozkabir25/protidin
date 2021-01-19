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

/* default/template/extension/module/so_html_content/default.twig */
class __TwigTemplate_3fa9d22fce98c33faccc33743ed579c5fb7ce4ddfce3b33cb668a4b3017a13d6 extends \Twig\Template
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
        echo " \">
  ";
        // line 2
        if ((($context["heading_title"] ?? null) &&  !twig_test_empty(twig_trim_filter(($context["heading_title"] ?? null))))) {
            echo " 
    <h2>";
            // line 3
            echo ($context["heading_title"] ?? null);
            echo " </h2>
  ";
        }
        // line 4
        echo " 
  
  ";
        // line 6
        echo ($context["html"] ?? null);
        echo " 
</div>";
    }

    public function getTemplateName()
    {
        return "default/template/extension/module/so_html_content/default.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  55 => 6,  51 => 4,  46 => 3,  42 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/extension/module/so_html_content/default.twig", "/home/azhkhn/public_html/protidin.com.bd/catalog/view/theme/default/template/extension/module/so_html_content/default.twig");
    }
}
