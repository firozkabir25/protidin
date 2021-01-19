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

/* so-buyshop/template/extension/module/so_home_slider/default.twig */
class __TwigTemplate_0efd59d00adc29d865e8a31845a575b48d19a429c3511e7bfd7561de5641cb64 extends \Twig\Template
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
        $context["count_item"] = twig_length_filter($this->env, ($context["list"] ?? null));
        // line 2
        echo "
<div class=\"module sohomepage-slider ";
        // line 3
        echo ($context["direction_class"] ?? null);
        echo "  ";
        echo ($context["class_suffix"] ?? null);
        echo "\">
    ";
        // line 4
        if (($context["disp_title_module"] ?? null)) {
            // line 5
            echo "      <h3 class=\"modtitle\">";
            echo ($context["head_name"] ?? null);
            echo "</h3>
    ";
        }
        // line 7
        echo "
";
        // line 8
        if (($context["pre_text"] ?? null)) {
            // line 9
            echo "  <div class=\"form-group\">
    ";
            // line 10
            echo ($context["pre_text"] ?? null);
            echo "
  </div>
";
        }
        // line 13
        echo "

<div class=\"modcontent\">
    ";
        // line 16
        if (($context["list"] ?? null)) {
            echo " 
    <div id=\"sohomepage-slider";
            // line 17
            echo ($context["module"] ?? null);
            echo "\">
        <div class=\"so-homeslider sohomeslider-inner-";
            // line 18
            echo ($context["module"] ?? null);
            echo "\">
        ";
            // line 19
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["list"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                echo "        
            <div class=\"item\">
                <a href=\"";
                // line 21
                echo twig_get_attribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, false, 21);
                echo "\" title=\"";
                echo twig_get_attribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, false, 21);
                echo "\" target=\"";
                echo ($context["item_link_target"] ?? null);
                echo "\">
                    <img class=\"responsive\" src=\"";
                // line 22
                echo twig_get_attribute($this->env, $this->source, $context["item"], "thumb", [], "any", false, false, false, 22);
                echo "\"  alt=\"";
                echo twig_get_attribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, false, 22);
                echo "\" />
                </a>
                <div class=\"sohomeslider-description\">
                    ";
                // line 25
                if (twig_get_attribute($this->env, $this->source, $context["item"], "caption", [], "any", false, false, false, 25)) {
                    echo " <h2>";
                    echo twig_get_attribute($this->env, $this->source, $context["item"], "caption", [], "any", false, false, false, 25);
                    echo "</h2> ";
                }
                // line 26
                echo "                    ";
                echo twig_get_attribute($this->env, $this->source, $context["item"], "description", [], "any", false, false, false, 26);
                echo "              
                </div>
            </div>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 30
            echo "        </div>

    <script type=\"text/javascript\">
      var total_item = ";
            // line 33
            echo ($context["count_item"] ?? null);
            echo " ;
      \$(\".sohomeslider-inner-";
            // line 34
            echo ($context["module"] ?? null);
            echo "\").owlCarousel2({
      rtl: ";
            // line 35
            echo ($context["direction"] ?? null);
            echo ",
          animateOut: '";
            // line 36
            echo ($context["animateOut"] ?? null);
            echo "',
          animateIn: '";
            // line 37
            echo ($context["animateIn"] ?? null);
            echo "',
          autoplay: ";
            // line 38
            echo ($context["autoplay"] ?? null);
            echo ",
          autoplayTimeout: ";
            // line 39
            echo ($context["autoplayTimeout"] ?? null);
            echo ",
          autoplaySpeed:  ";
            // line 40
            echo ($context["autoplaySpeed"] ?? null);
            echo ",
          smartSpeed: 500,
          autoplayHoverPause: ";
            // line 42
            echo ($context["autoplayHoverPause"] ?? null);
            echo ",
          startPosition: ";
            // line 43
            echo ($context["startPosition"] ?? null);
            echo ",
          mouseDrag:  ";
            // line 44
            echo ($context["mouseDrag"] ?? null);
            echo ",
          touchDrag: ";
            // line 45
            echo ($context["touchDrag"] ?? null);
            echo ",
          dots: ";
            // line 46
            echo ($context["dots"] ?? null);
            echo ",
          autoWidth: false,
          dotClass: \"owl2-dot\",
          dotsClass: \"owl2-dots\",
          loop: ";
            // line 50
            echo ($context["loop"] ?? null);
            echo ",
          navText: [\"Next\", \"Prev\"],
          navClass: [\"owl2-prev\", \"owl2-next\"],
          responsive: {
          0:{ items: ";
            // line 54
            echo ($context["nb_column4"] ?? null);
            echo ",
            nav: total_item <= ";
            // line 55
            echo ($context["nb_column4"] ?? null);
            echo " ? false : ((";
            echo ($context["nav"] ?? null);
            echo " ) ? true: false),
          },
          480:{ items: ";
            // line 57
            echo ($context["nb_column3"] ?? null);
            echo ",
            nav: total_item <= ";
            // line 58
            echo ($context["nb_column3"] ?? null);
            echo " ? false : ((";
            echo ($context["nav"] ?? null);
            echo " ) ? true: false),
          },
          768:{ items: ";
            // line 60
            echo ($context["nb_column2"] ?? null);
            echo ",
            nav: total_item <= ";
            // line 61
            echo ($context["nb_column2"] ?? null);
            echo " ? false : ((";
            echo ($context["nav"] ?? null);
            echo " ) ? true: false),
          },
          992:{ items: ";
            // line 63
            echo ($context["nb_column1"] ?? null);
            echo ",
            nav: total_item <= ";
            // line 64
            echo ($context["nb_column1"] ?? null);
            echo " ? false : ((";
            echo ($context["nav"] ?? null);
            echo " ) ? true: false),
          },
          1200:{ items: ";
            // line 66
            echo ($context["nb_column0"] ?? null);
            echo ",
            nav: total_item <= ";
            // line 67
            echo ($context["nb_column0"] ?? null);
            echo " ? false : ((";
            echo ($context["nav"] ?? null);
            echo " ) ? true: false),
          }
        },
      });
    </script>
    </div>
    ";
        } else {
            // line 73
            echo "  
        ";
            // line 74
            echo twig_get_attribute($this->env, $this->source, ($context["objlang"] ?? null), "get", [0 => "text_noitem"], "method", false, false, false, 74);
            echo "
    ";
        }
        // line 76
        echo "</div> <!--/.modcontent-->

";
        // line 78
        if (($context["post_text"] ?? null)) {
            // line 79
            echo "  <div class=\"form-group\">
    ";
            // line 80
            echo ($context["post_text"] ?? null);
            echo "
  </div>
";
        }
        // line 83
        echo "

</div> 
";
    }

    public function getTemplateName()
    {
        return "so-buyshop/template/extension/module/so_home_slider/default.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  278 => 83,  272 => 80,  269 => 79,  267 => 78,  263 => 76,  258 => 74,  255 => 73,  243 => 67,  239 => 66,  232 => 64,  228 => 63,  221 => 61,  217 => 60,  210 => 58,  206 => 57,  199 => 55,  195 => 54,  188 => 50,  181 => 46,  177 => 45,  173 => 44,  169 => 43,  165 => 42,  160 => 40,  156 => 39,  152 => 38,  148 => 37,  144 => 36,  140 => 35,  136 => 34,  132 => 33,  127 => 30,  116 => 26,  110 => 25,  102 => 22,  94 => 21,  87 => 19,  83 => 18,  79 => 17,  75 => 16,  70 => 13,  64 => 10,  61 => 9,  59 => 8,  56 => 7,  50 => 5,  48 => 4,  42 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "so-buyshop/template/extension/module/so_home_slider/default.twig", "/home/azhkhn/public_html/protidin.com.bd/catalog/view/theme/so-buyshop/template/extension/module/so_home_slider/default.twig");
    }
}
