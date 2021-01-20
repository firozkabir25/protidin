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

/* default/template/mail/order_alert.twig */
class __TwigTemplate_c1e418c79e70c1b27c27791e084ac6e7bc4cd41d5ea03bf2ced0f4185b4fb74e extends \Twig\Template
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
        echo ($context["text_received"] ?? null);
        echo "

";
        // line 3
        echo ($context["text_order_id"] ?? null);
        echo " ";
        echo ($context["order_id"] ?? null);
        echo "
";
        // line 4
        echo ($context["text_date_added"] ?? null);
        echo " ";
        echo ($context["date_added"] ?? null);
        echo "
";
        // line 5
        echo ($context["text_order_status"] ?? null);
        echo " ";
        echo ($context["order_status"] ?? null);
        echo "

";
        // line 7
        echo ($context["text_product"] ?? null);
        echo "

";
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 10
            echo twig_get_attribute($this->env, $this->source, $context["product"], "quantity", [], "any", false, false, false, 10);
            echo "x ";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 10);
            echo " (";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "model", [], "any", false, false, false, 10);
            echo ") ";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "total", [], "any", false, false, false, 10);
            echo "
";
            // line 11
            if (($context["option"] ?? null)) {
                // line 12
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["product"], "option", [], "any", false, false, false, 12));
                foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
                    // line 13
                    echo "\t- ";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 13);
                    echo " ";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 13);
                    echo "
";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 16
        echo " 
";
        // line 17
        if (($context["vouchers"] ?? null)) {
            // line 18
            echo "
";
            // line 19
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["vouchers"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["voucher"]) {
                // line 20
                echo "1x ";
                echo twig_get_attribute($this->env, $this->source, $context["voucher"], "description", [], "any", false, false, false, 20);
                echo " ";
                echo twig_get_attribute($this->env, $this->source, $context["voucher"], "amount", [], "any", false, false, false, 20);
                echo "
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['voucher'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 21
            echo " 
";
        }
        // line 23
        echo ($context["text_total"] ?? null);
        echo "

";
        // line 25
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["totals"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["total"]) {
            // line 26
            echo twig_get_attribute($this->env, $this->source, $context["total"], "title", [], "any", false, false, false, 26);
            echo ": ";
            echo twig_get_attribute($this->env, $this->source, $context["total"], "value", [], "any", false, false, false, 26);
            echo "
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['total'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 27
        echo " 
  
";
        // line 29
        if (($context["comment"] ?? null)) {
            // line 30
            echo ($context["text_comment"] ?? null);
            echo "

";
            // line 32
            echo ($context["comment"] ?? null);
            echo "
";
        }
        // line 34
        echo "
";
    }

    public function getTemplateName()
    {
        return "default/template/mail/order_alert.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  164 => 34,  159 => 32,  154 => 30,  152 => 29,  148 => 27,  138 => 26,  134 => 25,  129 => 23,  125 => 21,  114 => 20,  110 => 19,  107 => 18,  105 => 17,  102 => 16,  86 => 13,  82 => 12,  80 => 11,  70 => 10,  66 => 9,  61 => 7,  54 => 5,  48 => 4,  42 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/mail/order_alert.twig", "/opt/lampp/htdocs/protidin/catalog/view/theme/default/template/mail/order_alert.twig");
    }
}
