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

/* so-buyshop/template/information/contact.twig */
class __TwigTemplate_35d365a5b576da8886c8c5c1cbf782048d001c02013ec3abde4bf46b4e1ce8a3 extends \Twig\Template
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
<div class=\"breadcrumbs\">
  <div class=\"container\">
      <ul class=\"breadcrumb\">
        ";
        // line 5
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 6
            echo "        <li><a href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 6);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 6);
            echo "</a></li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 8
        echo "      </ul>
    </div>
</div>
<div class=\"container\">
  
  <div class=\"row\">";
        // line 13
        echo ($context["column_left"] ?? null);
        echo "
    ";
        // line 14
        if ((($context["column_left"] ?? null) && ($context["column_right"] ?? null))) {
            // line 15
            echo "    ";
            $context["class"] = "col-sm-6";
            // line 16
            echo "    ";
        } elseif ((($context["column_left"] ?? null) || ($context["column_right"] ?? null))) {
            // line 17
            echo "    ";
            $context["class"] = "col-sm-9";
            // line 18
            echo "    ";
        } else {
            // line 19
            echo "    ";
            $context["class"] = "col-sm-12";
            // line 20
            echo "    ";
        }
        // line 21
        echo "    <div id=\"content\" class=\"";
        echo ($context["class"] ?? null);
        echo "\">";
        echo ($context["content_top"] ?? null);
        echo "
    \t<div class=\"info-store\">
\t\t  ";
        // line 23
        if (($context["image"] ?? null)) {
            echo " 
\t\t\t<div id=\"map-canvas\"><img src=\"";
            // line 24
            echo ($context["image"] ?? null);
            echo " \" alt=\"";
            echo ($context["store"] ?? null);
            echo " \" title=\"";
            echo ($context["store"] ?? null);
            echo " \" /></div>
\t\t  ";
        }
        // line 25
        echo " 
\t\t\t<script src=\"https://maps.googleapis.com/maps/api/js?key=AIzaSyBf-EZpcLV72omKDDxOlhG6-i8Ga8NenRo\"></script>
\t\t\t";
        // line 27
        if (($context["geocode"] ?? null)) {
            echo " 
\t\t\t  <script>
\t\t\t\tfunction initialize() {
\t\t\t\t  var myLatlng = new google.maps.LatLng(";
            // line 30
            echo ($context["geocode"] ?? null);
            echo ");
\t\t\t\t  var mapOptions = {
\t\t\t\t\tzoom: 16,
\t\t\t\t\tzoomControl: false,
\t\t\t\t\tscaleControl: false,
\t\t\t\t\tscrollwheel: false,
\t\t\t\t\tdisableDoubleClickZoom: true,
\t\t\t\t\tcenter: myLatlng
\t\t\t\t  }
\t\t\t\t  var map = new google.maps.Map(document.getElementById('map-canvas'), mapOptions);
\t\t\t\t  var marker = new google.maps.Marker({
\t\t\t\t\t  position: myLatlng,
\t\t\t\t\t  map: map,
\t\t\t\t\t  title: 'Furnicom!'
\t\t\t\t  });
\t\t\t\t} 
\t\t\t\tgoogle.maps.event.addDomListener(window, 'load', initialize);  
\t\t\t  </script>
\t\t\t  <div id=\"map-canvas\"></div>
\t\t\t";
        }
        // line 49
        echo "   
\t\t</div>
\t\t<div class=\"info-contact row\">
\t\t\t
\t\t\t<div class=\"col-sm-4 col-xs-12 info-store\">
\t          <div class=\"name-store\"><h3>";
        // line 54
        echo ($context["store"] ?? null);
        echo "</h3></div>
\t          ";
        // line 55
        if (($context["comment"] ?? null)) {
            // line 56
            echo "\t            <div class=\"comment\">
\t            \t";
            // line 57
            echo ($context["comment"] ?? null);
            echo "
\t            </div>
\t          ";
        }
        // line 59
        echo " 
\t            <address>
\t            <div class=\"address clearfix form-group\"><div class=\"pull-left\"><i class=\"fa fa-home\"></i></div><div class=\"text\">";
        // line 61
        echo ($context["address"] ?? null);
        echo "</div></div>
\t            <div class=\"form-group\"><div class=\"pull-left\"><i class=\"fa fa-phone\"></i></div><div class=\"text\">";
        // line 62
        echo ($context["telephone"] ?? null);
        echo "</div></div>
\t            ";
        // line 63
        if (($context["fax"] ?? null)) {
            // line 64
            echo "\t            <div class=\"form-group\"><div class=\"pull-left\"><i class=\"fa fa-fax\"></i></div><div class=\"text\"> ";
            echo ($context["fax"] ?? null);
            echo "</div></div>
\t            ";
        }
        // line 65
        echo " 
\t            ";
        // line 66
        if (($context["open"] ?? null)) {
            // line 67
            echo "\t            <div class=\"form-group\"><div class=\"pull-left\"><i class=\"fa fa-clock-o\"></i></div><div class=\"text\">";
            echo ($context["text_open"] ?? null);
            echo " ";
            echo ($context["open"] ?? null);
            echo "</div>  </div>
\t           ";
        }
        // line 68
        echo " 
\t            ";
        // line 69
        if (($context["geocode"] ?? null)) {
            // line 70
            echo "\t                    <a href=\"https://maps.google.com/maps?q=<?php echo urlencode(\$geocode); ?>&hl=<?php echo \$geocode_hl; ?>&t=m&z=15\" target=\"_blank\" class=\"btn btn-info hidden\"><i class=\"fa fa-map-marker\"></i> ";
            echo ($context["button_map"] ?? null);
            echo "</a>
\t                     ";
        }
        // line 71
        echo " 
\t            </address>
\t            <div class=\"socials\">
\t\t\t\t\t<ul>
\t\t\t\t\t\t<li><a href=\"https://www.facebook.com/flytheme\"><i class=\"fa fa-facebook\"></i></a></li>
\t\t\t\t\t\t<li><a href=\"https://twitter.com/Flytheme\"><i class=\"fa fa-twitter\"></i></a></li>       
\t\t\t\t\t\t<li><a href=\"https://plus.google.com/u/0/b/102399087761949580069/102399087761949580069/posts\"><i class=\"fa fa-google-plus\"></i></a></li>
\t\t\t\t\t\t<li><a href=\"https://www.linkedin.com/in/flytheme\"><i class=\"fa fa-linkedin\"></i></a></li>
\t\t\t\t\t\t<li><a href=\"#\"><i class=\"fa fa-tumblr\"></i></a></li>
\t\t\t\t\t</ul>
\t\t\t\t</div>
\t        </div>
\t\t\t<div class=\"col-sm-8 col-xs-12 contact-form\">
\t\t\t   <form action=\"";
        // line 84
        echo ($context["action"] ?? null);
        echo " \" method=\"post\" enctype=\"multipart/form-data\" class=\"form-horizontal\">
\t\t\t\t<fieldset>
\t\t\t\t\t<legend><h2>";
        // line 86
        echo ($context["text_contact"] ?? null);
        echo " </h2></legend>
                  
\t\t\t\t  <div class=\"form-group required\">
\t\t\t\t\t<div class=\"col-sm-12\">
\t\t\t\t\t  <input type=\"text\" name=\"name\" value=\"";
        // line 90
        echo ($context["name"] ?? null);
        echo "\" id=\"input-name\" class=\"form-control\" placeholder=\"";
        echo ($context["entry_name"] ?? null);
        echo " *\"/>
\t\t\t\t\t  ";
        // line 91
        if (($context["error_name"] ?? null)) {
            echo " 
\t\t\t\t\t  <div class=\"text-danger\">";
            // line 92
            echo ($context["error_name"] ?? null);
            echo " </div>
\t\t\t\t\t  ";
        }
        // line 93
        echo " 
\t\t\t\t\t</div>
\t\t\t\t  </div>
\t\t\t\t  <div class=\"form-group required\">
\t\t\t\t\t<div class=\"col-sm-12\">
\t\t\t\t\t  <input type=\"text\" name=\"email\" value=\"";
        // line 98
        echo ($context["email"] ?? null);
        echo "\" id=\"input-email\" class=\"form-control\" placeholder=\"";
        echo ($context["entry_email"] ?? null);
        echo " *\" />
\t\t\t\t\t  ";
        // line 99
        if (($context["error_email"] ?? null)) {
            echo " 
\t\t\t\t\t  <div class=\"text-danger\">";
            // line 100
            echo ($context["error_email"] ?? null);
            echo " </div>
\t\t\t\t\t  ";
        }
        // line 101
        echo " 
\t\t\t\t\t</div>
\t\t\t\t  </div>
\t\t\t\t  <div class=\"form-group required\">
\t\t\t\t\t<div class=\"col-sm-12\">
\t\t\t\t\t  <textarea name=\"enquiry\" value=\"";
        // line 106
        echo ($context["entry_enquiry"] ?? null);
        echo "\" rows=\"10\" id=\"input-enquiry\" placeholder=\"";
        echo ($context["entry_enquiry"] ?? null);
        echo " *\" class=\"form-control\">";
        echo ($context["enquiry"] ?? null);
        echo "</textarea>
\t\t\t\t\t  ";
        // line 107
        if (($context["error_enquiry"] ?? null)) {
            echo " 
\t\t\t\t\t  <div class=\"text-danger\">";
            // line 108
            echo ($context["error_enquiry"] ?? null);
            echo " </div>
\t\t\t\t\t  ";
        }
        // line 109
        echo " 
\t\t\t\t\t</div>
\t\t\t\t  </div>
\t\t\t\t  ";
        // line 112
        echo ($context["captcha"] ?? null);
        echo " 
\t\t\t\t</fieldset>
\t\t\t\t<div class=\"buttons\">
\t\t\t\t  <div class=\"pull-left\">
\t\t\t\t\t<button class=\"btn btn-info\" type=\"submit\"><span>";
        // line 116
        echo ($context["button_submit"] ?? null);
        echo " </span></button>
\t\t\t\t  </div>
\t\t\t\t</div>
\t\t\t  </form>
\t\t\t</div>
\t\t</div>
\t\t
\t\t
      
\t  
      
      
      ";
        // line 128
        echo ($context["content_bottom"] ?? null);
        echo "</div>
    ";
        // line 129
        echo ($context["column_right"] ?? null);
        echo "</div>
</div>
";
        // line 131
        echo ($context["footer"] ?? null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "so-buyshop/template/information/contact.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  334 => 131,  329 => 129,  325 => 128,  310 => 116,  303 => 112,  298 => 109,  293 => 108,  289 => 107,  281 => 106,  274 => 101,  269 => 100,  265 => 99,  259 => 98,  252 => 93,  247 => 92,  243 => 91,  237 => 90,  230 => 86,  225 => 84,  210 => 71,  204 => 70,  202 => 69,  199 => 68,  191 => 67,  189 => 66,  186 => 65,  180 => 64,  178 => 63,  174 => 62,  170 => 61,  166 => 59,  160 => 57,  157 => 56,  155 => 55,  151 => 54,  144 => 49,  121 => 30,  115 => 27,  111 => 25,  102 => 24,  98 => 23,  90 => 21,  87 => 20,  84 => 19,  81 => 18,  78 => 17,  75 => 16,  72 => 15,  70 => 14,  66 => 13,  59 => 8,  48 => 6,  44 => 5,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "so-buyshop/template/information/contact.twig", "/home/azhkhn/public_html/protidin.com.bd/catalog/view/theme/so-buyshop/template/information/contact.twig");
    }
}
