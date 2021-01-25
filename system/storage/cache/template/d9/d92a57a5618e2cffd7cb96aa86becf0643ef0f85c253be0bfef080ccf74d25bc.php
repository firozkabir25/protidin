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

/* so-buyshop/template/extension/payment/free_checkout.twig */
class __TwigTemplate_1d2d8aca3439fc96ed1caf248e21c4bb9c093274236b21f8061b4d9695d914da extends \Twig\Template
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
        echo "<div class=\"buttons\">
  <div class=\"pull-right\">
    <input type=\"button\" value=\"";
        // line 3
        echo ($context["button_confirm"] ?? null);
        echo "\" id=\"button-confirm\" class=\"btn btn-primary\" data-loading-text=\"";
        echo ($context["text_loading"] ?? null);
        echo "\" />
  </div>
</div>
<script type=\"text/javascript\"><!--
\$('#button-confirm').on('click', function() {
\t\$.ajax({
\t\ttype: 'get',
\t\turl: 'index.php?route=extension/payment/free_checkout/confirm',
\t\tcache: false,
\t\tbeforeSend: function() {
\t\t\t\$('#button-confirm').button('loading');
\t\t},
\t\tcomplete: function() {
\t\t\t\$('#button-confirm').button('reset');
\t\t},
\t\tsuccess: function() {
\t\t\tlocation = '";
        // line 19
        echo ($context["continue"] ?? null);
        echo "';
\t\t}
\t});
});
//--></script>
";
    }

    public function getTemplateName()
    {
        return "so-buyshop/template/extension/payment/free_checkout.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  62 => 19,  41 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "so-buyshop/template/extension/payment/free_checkout.twig", "/opt/lampp/htdocs/protidin/catalog/view/theme/so-buyshop/template/extension/payment/free_checkout.twig");
    }
}
