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

/* so-mobile/template/common/footer.twig */
class __TwigTemplate_17692395316d56022c336f88d0cd50be74f8bfdd7c62dba7258526eec262f2f9 extends \Twig\Template
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
        // line 2
        echo "\t\t<div class=\"container footer-content\">

\t\t\t";
        // line 4
        if ((twig_get_attribute($this->env, $this->source, ($context["soconfig"] ?? null), "get_settings", [0 => "mphone_status"], "method", false, false, false, 4) || twig_get_attribute($this->env, $this->source, ($context["soconfig"] ?? null), "get_settings", [0 => "memail_status"], "method", false, false, false, 4))) {
            // line 5
            echo "\t\t\t<div class=\"footernav-top\">
\t\t\t\t<div class=\"need-help\">
\t\t\t\t\t<p>";
            // line 7
            echo ($context["text_needhelp"] ?? null);
            echo "</p>
\t\t\t\t\t<div class=\"nh-contact\">
\t\t\t\t\t\t";
            // line 9
            if (twig_get_attribute($this->env, $this->source, ($context["soconfig"] ?? null), "get_settings", [0 => "mphone_status"], "method", false, false, false, 9)) {
                // line 10
                echo "\t\t\t\t\t\t\t<a href=\"tel:";
                echo twig_get_attribute($this->env, $this->source, ($context["soconfig"] ?? null), "get_settings", [0 => "mphone_text"], "method", false, false, false, 10);
                echo "\"><i class=\"fa fa-phone\"></i> ";
                echo twig_get_attribute($this->env, $this->source, ($context["soconfig"] ?? null), "get_settings", [0 => "mphone_text"], "method", false, false, false, 10);
                echo "</a>
\t\t\t\t\t\t";
            }
            // line 12
            echo "\t\t\t\t\t\t";
            if (twig_get_attribute($this->env, $this->source, ($context["soconfig"] ?? null), "get_settings", [0 => "memail_status"], "method", false, false, false, 12)) {
                // line 13
                echo "\t\t\t\t\t\t\t<a href=\"mailto:";
                echo twig_get_attribute($this->env, $this->source, ($context["soconfig"] ?? null), "get_settings", [0 => "memail_text"], "method", false, false, false, 13);
                echo "\" class=\"need-help-padding\" target=\"_top\"><i class=\"fa fa-envelope-o\"></i>  ";
                echo ($context["text_emailus"] ?? null);
                echo "</a>
\t\t\t\t\t\t";
            }
            // line 15
            echo "\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t";
        }
        // line 19
        echo "
\t\t\t";
        // line 20
        if (twig_get_attribute($this->env, $this->source, ($context["soconfig"] ?? null), "get_settings", [0 => "customfooter_status"], "method", false, false, false, 20)) {
            // line 21
            echo "\t\t\t<div class=\"footernav-social\">
\t\t\t\t";
            // line 22
            echo ($context["customfooter_text"] ?? null);
            echo "
\t\t\t</div>
\t\t\t";
        }
        // line 25
        echo "
\t\t\t";
        // line 26
        if (twig_get_attribute($this->env, $this->source, ($context["soconfig"] ?? null), "get_settings", [0 => "menufooter_status"], "method", false, false, false, 26)) {
            // line 27
            echo "\t\t\t<div class=\"footernav-midde\">
\t\t\t\t<ul class=\"footer-link-list row\">
\t\t\t\t";
            // line 29
            if (twig_get_attribute($this->env, $this->source, ($context["soconfig"] ?? null), "get_settings", [0 => "footermenus"], "method", false, false, false, 29)) {
                // line 30
                echo "\t\t\t\t\t
\t\t\t\t\t";
                // line 31
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["soconfig"] ?? null), "get_settings", [0 => "footermenus"], "method", false, false, false, 31));
                foreach ($context['_seq'] as $context["_key"] => $context["menuitem"]) {
                    // line 32
                    echo "\t\t\t\t\t\t";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["menuitem"], "name", [], "any", false, false, false, 32));
                    foreach ($context['_seq'] as $context["nameid"] => $context["menuname"]) {
                        // line 33
                        echo "\t\t\t\t\t\t\t";
                        if (($context["nameid"] == ($context["lang_id"] ?? null))) {
                            // line 34
                            echo "\t\t\t\t\t\t\t<li class=\"col-xs-6\"><a href=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["menuitem"], "link", [], "any", false, false, false, 34);
                            echo "\">";
                            echo $context["menuname"];
                            echo "</a></li>
\t\t\t\t\t\t\t";
                        }
                        // line 36
                        echo "\t\t\t\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['nameid'], $context['menuname'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 37
                    echo "\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['menuitem'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 38
                echo "\t\t\t\t";
            }
            // line 39
            echo "\t\t\t\t</ul>
\t\t\t</div>
\t\t\t";
        }
        // line 42
        echo "
\t\t\t<div class=\"footernav-bottom\">
\t\t\t\t<div class=\"text-center\">
\t\t\t\t\t";
        // line 45
        if (twig_get_attribute($this->env, $this->source, ($context["soconfig"] ?? null), "get_settings", [0 => "mimgpayment"], "method", false, false, false, 45)) {
            // line 46
            echo "\t\t\t\t\t\t<p class=\"nomargin\"><img alt=\"Footer Image\" class=\"form-group\" src=\"image/";
            echo twig_get_attribute($this->env, $this->source, ($context["soconfig"] ?? null), "get_settings", [0 => "mimgpayment"], "method", false, false, false, 46);
            echo "\"></p>
\t\t\t\t\t";
        }
        // line 48
        echo "
\t\t\t\t\t";
        // line 49
        if (twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["soconfig"] ?? null), "get_settings", [0 => "mcopyright"], "method", false, false, false, 49))) {
            // line 50
            echo "\t\t\t\t\t\t";
            echo ($context["powered"] ?? null);
            echo "
\t\t\t\t\t";
        } else {
            // line 52
            echo "\t\t\t\t\t\t";
            echo twig_replace_filter(twig_get_attribute($this->env, $this->source, ($context["soconfig"] ?? null), "decode_entities", [0 => twig_get_attribute($this->env, $this->source, ($context["soconfig"] ?? null), "get_settings", [0 => "mcopyright"], "method", false, false, false, 52)], "method", false, false, false, 52), ["{year}" => twig_date_format_filter($this->env, "now", "Y")]);
            echo "
\t\t\t\t\t";
        }
        // line 54
        echo "
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t

\t</div>
\t<!-- End Main Content -->
\t
\t</div>
\t<!-- End Main wrapper -->
\t
\t


</body>
</html>";
    }

    public function getTemplateName()
    {
        return "so-mobile/template/common/footer.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  177 => 54,  171 => 52,  165 => 50,  163 => 49,  160 => 48,  154 => 46,  152 => 45,  147 => 42,  142 => 39,  139 => 38,  133 => 37,  127 => 36,  119 => 34,  116 => 33,  111 => 32,  107 => 31,  104 => 30,  102 => 29,  98 => 27,  96 => 26,  93 => 25,  87 => 22,  84 => 21,  82 => 20,  79 => 19,  73 => 15,  65 => 13,  62 => 12,  54 => 10,  52 => 9,  47 => 7,  43 => 5,  41 => 4,  37 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("", "so-mobile/template/common/footer.twig", "/home/azhkhn/public_html/protidin.com.bd/catalog/view/theme/so-mobile/template/common/footer.twig");
    }
}
