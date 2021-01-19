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

/* so-mobile/template/extension/module/so_quickview/default.twig */
class __TwigTemplate_136115e0e168f4b69dad21f3f7d944874c58d147081787cd1dc299a44753f9b1 extends \Twig\Template
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
        echo "<script type=\"text/javascript\">
\tfunction _SoMagnificPopup(){
\t\t\$('.products-list').magnificPopup({
\t        delegate: '.quickview_handler',
\t        preloader: true,
\t        tLoading: '',
\t        type: 'iframe',
\t        mainClass: 'my-mfp-zoom-in',
\t        removalDelay: 200,
\t        gallery: {enabled: true},
\t        callbacks: {
\t        open: function() {
\t          // Will fire when this exact popup is opened
\t          // this - is Magnific Popup object
\t        },
\t        beforeOpen: function() {
\t            \$('[data-toggle=\\'tooltip\\']').hover(
\t                function() {
\t                },
\t                function(e) {
\t                  \$('[data-toggle=\\'tooltip\\']').tooltip('hide');
\t                }
\t            );
\t        },
\t        afterClose: function() {
\t            \$('[data-toggle=\\'tooltip\\']').tooltip('hide');
\t        },
\t        
\t      }
    \t});

\t}
\tfunction _SoQuickView(){
\t\tvar \$item_class = \$('";
        // line 34
        echo ($context["class_suffix"] ?? null);
        echo "');
\t\tif (\$item_class.length > 0) {
\t\t\tfor (var i = 0; i < \$item_class.length; i++) {
\t\t\t\t//\$(\$item_class[i]).addClass('quickview');
\t\t\t\tif(\$(\$item_class[i]).find('.quickview_handler').length <= 0){
\t\t\t\t\tvar producturlpath = \$(\$item_class[i]).find('a', \$(this)).attr('href');
\t\t\t\t\tif(typeof producturlpath !== 'undefined' && producturlpath.length > 0 ){
\t\t\t\t\t\tvar \$product_id = \$(\$item_class[i]).find('a', \$(this)).attr('data-product');
\t\t\t\t\t\tvar _quickviewbutton = \"<a class='visible-lg btn-button quickview quickview_handler' href='";
        // line 42
        echo twig_get_attribute($this->env, $this->source, ($context["our_url"] ?? null), "link", [0 => "extension/soconfig/quickview", 1 => "product_id="], "method", false, false, false, 42);
        echo "\"+\$product_id+\"' title=\\\"";
        echo ($context["label_text"] ?? null);
        echo "\\\" data-toggle=\\\"tooltip\\\" data-title =\\\"";
        echo ($context["label_text"] ?? null);
        echo "\\\" data-fancybox-type=\\\"iframe\\\" ><i class=\\\"quickview fa fa-search\\\"></i></a>\";
\t\t\t\t\t\t\$(\$item_class[i]).append(_quickviewbutton);
\t\t\t\t\t}
\t\t\t\t}
\t\t\t}
\t\t}
\t\t_SoMagnificPopup();
\t}
\tjQuery(document).ready(function (\$) {
\t\tsetTimeout(function (){_SoQuickView()}, 500);
\t\t// Hide tooltip when clicking on it
\t\tvar hasTooltip = \$(\"[data-toggle='tooltip']\").tooltip({container: 'body'});
\t\thasTooltip.on('click', function () {
\t\t\t\t\$(this).tooltip('hide')
\t\t});
\t});
</script>";
    }

    public function getTemplateName()
    {
        return "so-mobile/template/extension/module/so_quickview/default.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  83 => 42,  72 => 34,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "so-mobile/template/extension/module/so_quickview/default.twig", "/home/azhkhn/public_html/protidin.com.bd/catalog/view/theme/so-mobile/template/extension/module/so_quickview/default.twig");
    }
}
