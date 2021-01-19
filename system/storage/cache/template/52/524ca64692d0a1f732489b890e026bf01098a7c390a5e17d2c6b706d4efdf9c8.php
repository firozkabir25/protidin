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

/* so-buyshop/template/error/not_found.twig */
class __TwigTemplate_34e8a8dba83f223a8947a77af6903b28d13978e30a8a6a0d517186e8d4a5521d extends \Twig\Template
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
        echo ($context["header"] ?? null);
        echo "
<div class=\"container\">
  <ul class=\"breadcrumb\">
    ";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 5
            echo "    <li><a href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 5);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 5);
            echo "</a></li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 7
        echo "  </ul>
 ";
        // line 17
        echo "
    <div id=\"content\" class=\"bg-page-404 ";
        // line 18
        echo ($context["class"] ?? null);
        echo " \">
        ";
        // line 19
        echo ($context["content_top"] ?? null);
        echo "
        <div class=\"col-sm-6 text-center\">
                <div><img src=\"image/catalog/404/404-img-text.png\" alt=\"\"></div>
            </div>
        
            <div class=\"dec col-sm-6\">
                <p>";
        // line 25
        echo ($context["text_error"] ?? null);
        echo "</p>
                <a href=\"";
        // line 26
        echo ($context["continue"] ?? null);
        echo "\" class=\"btn btn-primary\" title=\"";
        echo ($context["button_home"] ?? null);
        echo "\">";
        echo ($context["button_home"] ?? null);
        echo "</a>
            </div>
       
    </div>

    ";
        // line 32
        echo "  ";
        // line 33
        echo "</div>
";
        // line 34
        echo ($context["footer"] ?? null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "so-buyshop/template/error/not_found.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  98 => 34,  95 => 33,  93 => 32,  81 => 26,  77 => 25,  68 => 19,  64 => 18,  61 => 17,  58 => 7,  47 => 5,  43 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "so-buyshop/template/error/not_found.twig", "/home/azhkhn/public_html/protidin.com.bd/catalog/view/theme/so-buyshop/template/error/not_found.twig");
    }
}
