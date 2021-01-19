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

/* so-buyshop/template/extension/module/account.twig */
class __TwigTemplate_52adc24726f3966450aad74d6b70a2b3652ef69df2f8c2d745fa3fba7550e910 extends \Twig\Template
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
        echo "<div class=\"module\">
  <h3 class=\"modtitle\"><span>";
        // line 2
        echo ($context["heading_title"] ?? null);
        echo " </span></h3>
  <div class=\"module-content custom-border\">
    <ul class=\"list-box\">
      ";
        // line 5
        if ( !($context["logged"] ?? null)) {
            echo " 
      <li><a href=\"";
            // line 6
            echo ($context["login"] ?? null);
            echo " \">";
            echo ($context["text_login"] ?? null);
            echo " </a> / <a href=\"";
            echo ($context["register"] ?? null);
            echo " \">";
            echo ($context["text_register"] ?? null);
            echo " </a></li>
      <li><a href=\"";
            // line 7
            echo ($context["forgotten"] ?? null);
            echo " \">";
            echo ($context["text_forgotten"] ?? null);
            echo " </a></li>
      ";
        }
        // line 8
        echo " 
      <li><a href=\"";
        // line 9
        echo ($context["account"] ?? null);
        echo " \">";
        echo ($context["text_account"] ?? null);
        echo " </a></li>
      ";
        // line 10
        if (($context["logged"] ?? null)) {
            echo " 
      <li><a href=\"";
            // line 11
            echo ($context["edit"] ?? null);
            echo " \">";
            echo ($context["text_edit"] ?? null);
            echo " </a></li>
      <li><a href=\"";
            // line 12
            echo ($context["password"] ?? null);
            echo " \">";
            echo ($context["text_password"] ?? null);
            echo " </a></li>
      ";
        }
        // line 13
        echo " 
      <li><a href=\"";
        // line 14
        echo ($context["address"] ?? null);
        echo " \">";
        echo ($context["text_address"] ?? null);
        echo " </a></li>
      <li><a href=\"";
        // line 15
        echo ($context["wishlist"] ?? null);
        echo " \">";
        echo ($context["text_wishlist"] ?? null);
        echo " </a></li>
      <li><a href=\"";
        // line 16
        echo ($context["order"] ?? null);
        echo " \">";
        echo ($context["text_order"] ?? null);
        echo " </a></li>
      <li><a href=\"";
        // line 17
        echo ($context["download"] ?? null);
        echo " \">";
        echo ($context["text_download"] ?? null);
        echo " </a></li>
      <li><a href=\"";
        // line 18
        echo ($context["recurring"] ?? null);
        echo " \">";
        echo ($context["text_recurring"] ?? null);
        echo " </a></li>
      <li><a href=\"";
        // line 19
        echo ($context["reward"] ?? null);
        echo " \">";
        echo ($context["text_reward"] ?? null);
        echo " </a></li>
      <li><a href=\"";
        // line 20
        echo ($context["return"] ?? null);
        echo " \">";
        echo ($context["text_return"] ?? null);
        echo " </a></li>
      <li><a href=\"";
        // line 21
        echo ($context["transaction"] ?? null);
        echo " \">";
        echo ($context["text_transaction"] ?? null);
        echo " </a></li>
      <li><a href=\"";
        // line 22
        echo ($context["newsletter"] ?? null);
        echo " \">";
        echo ($context["text_newsletter"] ?? null);
        echo " </a></li>
      ";
        // line 23
        if (($context["logged"] ?? null)) {
            echo " 
      <li><a href=\"";
            // line 24
            echo ($context["logout"] ?? null);
            echo " \">";
            echo ($context["text_logout"] ?? null);
            echo " </a></li>
      ";
        }
        // line 25
        echo " 
    </ul>
  </div>
</div>";
    }

    public function getTemplateName()
    {
        return "so-buyshop/template/extension/module/account.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  161 => 25,  154 => 24,  150 => 23,  144 => 22,  138 => 21,  132 => 20,  126 => 19,  120 => 18,  114 => 17,  108 => 16,  102 => 15,  96 => 14,  93 => 13,  86 => 12,  80 => 11,  76 => 10,  70 => 9,  67 => 8,  60 => 7,  50 => 6,  46 => 5,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "so-buyshop/template/extension/module/account.twig", "/home/azhkhn/public_html/protidin.com.bd/catalog/view/theme/so-buyshop/template/extension/module/account.twig");
    }
}
