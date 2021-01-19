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

/* so-buyshop/template/extension/module/so_newletter_custom_popup/default.twig */
class __TwigTemplate_4e1d42fc11c72851c50fc66fc811b4bf884ee79d25d9e7b1ee561f79e6c16719 extends \Twig\Template
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
        if ((($context["layout"] ?? null) == "layout_default")) {
            // line 2
            echo "\t";
            $this->loadTemplate((($context["theme_directory"] ?? null) . "/template/extension/module/so_newletter_custom_popup/default_layout_default.twig"), "so-buyshop/template/extension/module/so_newletter_custom_popup/default.twig", 2)->display($context);
        } else {
            // line 4
            echo "\t";
            $this->loadTemplate((($context["theme_directory"] ?? null) . "/template/extension/module/so_newletter_custom_popup/default_layout_popup.twig"), "so-buyshop/template/extension/module/so_newletter_custom_popup/default.twig", 4)->display($context);
        }
        // line 6
        echo "
";
    }

    public function getTemplateName()
    {
        return "so-buyshop/template/extension/module/so_newletter_custom_popup/default.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  47 => 6,  43 => 4,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "so-buyshop/template/extension/module/so_newletter_custom_popup/default.twig", "/home/azhkhn/public_html/protidin.com.bd/catalog/view/theme/so-buyshop/template/extension/module/so_newletter_custom_popup/default.twig");
    }
}
