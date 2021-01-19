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

/* so-buyshop/template/account/login.twig */
class __TwigTemplate_73313a0702f13363a7c86c9b502970270f6de3d708d4aaff8de8fedfcc84a0ea extends \Twig\Template
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
 <div class=\"breadcrumbs \">
    <div class=\"container\">
        <ul class=\"breadcrumb\">
          ";
        // line 5
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 6
            echo "          <li><a href=\"";
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
        echo "        </ul>
      </div>
  </div>
<div class=\"container\">
 
  ";
        // line 13
        if (($context["success"] ?? null)) {
            // line 14
            echo "  <div class=\"alert alert-success alert-dismissible\"><i class=\"fa fa-check-circle\"></i> ";
            echo ($context["success"] ?? null);
            echo "</div>
  ";
        }
        // line 16
        echo "  ";
        if (($context["error_warning"] ?? null)) {
            // line 17
            echo "  <div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ";
            echo ($context["error_warning"] ?? null);
            echo "</div>
  ";
        }
        // line 19
        echo "  <div class=\"row\">";
        echo ($context["column_left"] ?? null);
        echo "
   ";
        // line 20
        if ((($context["column_left"] ?? null) && ($context["column_right"] ?? null))) {
            // line 21
            echo "        ";
            $context["class"] = "col-sm-6 fluid-allsidebar";
            // line 22
            echo "    ";
        } elseif ((($context["column_left"] ?? null) || ($context["column_right"] ?? null))) {
            // line 23
            echo "        ";
            $context["class"] = "col-md-9 col-sm-12 fluid-sidebar";
            // line 24
            echo "    ";
        } else {
            // line 25
            echo "        ";
            $context["class"] = "col-sm-12";
            // line 26
            echo "    ";
        }
        // line 27
        echo "    <div id=\"content\" class=\"";
        echo ($context["class"] ?? null);
        echo "\">";
        echo ($context["content_top"] ?? null);
        echo "
      <div class=\"row\">
        <div class=\"col-sm-6\">
          <div class=\"well \">
            <h2>";
        // line 31
        echo ($context["text_new_customer"] ?? null);
        echo "</h2>
            <p><strong>";
        // line 32
        echo ($context["text_register"] ?? null);
        echo "</strong></p>
            <p>";
        // line 33
        echo ($context["text_register_account"] ?? null);
        echo "</p>
            <a href=\"";
        // line 34
        echo ($context["register"] ?? null);
        echo "\" class=\"btn btn-primary\">";
        echo ($context["button_continue"] ?? null);
        echo "</a></div>
        </div>
        <div class=\"col-sm-6\">
          
                <div class=\"well col-sm-12\">    
            
            <h2>";
        // line 40
        echo ($context["text_returning_customer"] ?? null);
        echo "</h2>
            <p><strong>";
        // line 41
        echo ($context["text_i_am_returning_customer"] ?? null);
        echo "</strong></p>
            <form action=\"";
        // line 42
        echo ($context["action"] ?? null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\">
              <div class=\"form-group\">
                <label class=\"control-label\" for=\"input-email\">";
        // line 44
        echo ($context["entry_email"] ?? null);
        echo "</label>
                <input type=\"text\" name=\"email\" value=\"";
        // line 45
        echo ($context["email"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_email"] ?? null);
        echo "\" id=\"input-email\" class=\"form-control\" />
              </div>
              <div class=\"form-group\">
                <label class=\"control-label\" for=\"input-password\">";
        // line 48
        echo ($context["entry_password"] ?? null);
        echo "</label>
                <input type=\"password\" name=\"password\" value=\"";
        // line 49
        echo ($context["password"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_password"] ?? null);
        echo "\" id=\"input-password\" class=\"form-control\" />
                <a href=\"";
        // line 50
        echo ($context["forgotten"] ?? null);
        echo "\">";
        echo ($context["text_forgotten"] ?? null);
        echo "</a></div>
              
                <input type=\"submit\" value=\"";
        // line 52
        echo ($context["button_login"] ?? null);
        echo "\" class=\"btn btn-primary pull-left\" />  
            
              ";
        // line 54
        if (($context["redirect"] ?? null)) {
            // line 55
            echo "              <input type=\"hidden\" name=\"redirect\" value=\"";
            echo ($context["redirect"] ?? null);
            echo "\" />
              ";
        }
        // line 57
        echo "            </form>

                ";
        // line 59
        if (((isset($context["setting"]) || array_key_exists("setting", $context)) && twig_get_attribute($this->env, $this->source, ($context["setting"] ?? null), "so_sociallogin_enable", [], "any", false, false, false, 59))) {
            // line 60
            echo "                    <column id=\"column-login\" class=\"col-sm-8 pull-right\">
                        <div class=\"row\">
                            ";
            // line 62
            if ((isset($context["warning"]) || array_key_exists("warning", $context))) {
                // line 63
                echo "                                <div class=\"alert alert-warning\"><i class=\"fa fa-check-circle\"></i> ";
                echo ($context["warning"] ?? null);
                echo "</div>
                            ";
            }
            // line 65
            echo "                          
                            <div class=\"social_login pull-right\" id=\"so_sociallogin\">
                                ";
            // line 67
            if (twig_get_attribute($this->env, $this->source, ($context["setting"] ?? null), "so_sociallogin_fbstatus", [], "any", false, false, false, 67)) {
                // line 68
                echo "                                    ";
                if ((twig_get_attribute($this->env, $this->source, ($context["setting"] ?? null), "so_sociallogin_button", [], "any", false, false, false, 68) == "image")) {
                    // line 69
                    echo "                                        <a class=\"social-icon\"  href=\"";
                    echo ($context["fblink"] ?? null);
                    echo "\">
                                            <img class=\"img-responsive\" src=\"";
                    // line 70
                    echo ($context["fbimage"] ?? null);
                    echo "\" 
                                                data-toggle=\"tooltip\" alt=\"";
                    // line 71
                    echo twig_get_attribute($this->env, $this->source, ($context["setting"] ?? null), "so_sociallogin_fbtitle", [], "any", false, false, false, 71);
                    echo "\" 
                                                title=\"";
                    // line 72
                    echo twig_get_attribute($this->env, $this->source, ($context["setting"] ?? null), "so_sociallogin_fbtitle", [], "any", false, false, false, 72);
                    echo "\"
                                            />
                                        </a>
                                    ";
                } else {
                    // line 76
                    echo "                                        <a href=\"";
                    echo ($context["fblink"] ?? null);
                    echo "\" class=\"btn btn-social-icon btn-sm btn-facebook\"><i class=\"fa fa-facebook fa-fw\" aria-hidden=\"true\"></i></a>
                                    ";
                }
                // line 78
                echo "                                ";
            }
            // line 79
            echo "                                
                                ";
            // line 80
            if (twig_get_attribute($this->env, $this->source, ($context["setting"] ?? null), "so_sociallogin_twitstatus", [], "any", false, false, false, 80)) {
                // line 81
                echo "                                    ";
                if ((twig_get_attribute($this->env, $this->source, ($context["setting"] ?? null), "so_sociallogin_button", [], "any", false, false, false, 81) == "image")) {
                    // line 82
                    echo "                                        <a class=\"social-icon\"  href=\"";
                    echo ($context["twitlink"] ?? null);
                    echo "\">
                                            <img class=\"img-responsive\" src=\"";
                    // line 83
                    echo ($context["twitimage"] ?? null);
                    echo "\" 
                                                data-toggle=\"tooltip\" alt=\"";
                    // line 84
                    echo twig_get_attribute($this->env, $this->source, ($context["setting"] ?? null), "so_sociallogin_twittertitle", [], "any", false, false, false, 84);
                    echo "\" 
                                                title=\"";
                    // line 85
                    echo twig_get_attribute($this->env, $this->source, ($context["setting"] ?? null), "so_sociallogin_twittertitle", [], "any", false, false, false, 85);
                    echo "\"
                                            />
                                        </a>
                                    ";
                } else {
                    // line 89
                    echo "                                        <a href=\"";
                    echo ($context["twitlink"] ?? null);
                    echo "\" class=\"btn btn-social-icon btn-sm btn-twitter\"><i class=\"fa fa-twitter fa-fw\" aria-hidden=\"true\"></i></a>
                                    ";
                }
                // line 91
                echo "                                ";
            }
            // line 92
            echo "                                
                                ";
            // line 93
            if (twig_get_attribute($this->env, $this->source, ($context["setting"] ?? null), "so_sociallogin_googlestatus", [], "any", false, false, false, 93)) {
                // line 94
                echo "                                    ";
                if ((twig_get_attribute($this->env, $this->source, ($context["setting"] ?? null), "so_sociallogin_button", [], "any", false, false, false, 94) == "image")) {
                    // line 95
                    echo "                                        <a class=\"social-icon\" href=\"";
                    echo ($context["googlelink"] ?? null);
                    echo "\">
                                            <img class=\"img-responsive\" src=\"";
                    // line 96
                    echo ($context["googleimage"] ?? null);
                    echo "\" 
                                                data-toggle=\"tooltip\" alt=\"";
                    // line 97
                    echo twig_get_attribute($this->env, $this->source, ($context["setting"] ?? null), "so_sociallogin_googletitle", [], "any", false, false, false, 97);
                    echo "\" 
                                                title=\"";
                    // line 98
                    echo twig_get_attribute($this->env, $this->source, ($context["setting"] ?? null), "so_sociallogin_googletitle", [], "any", false, false, false, 98);
                    echo "\" 
                                            />
                                        </a>
                                    ";
                } else {
                    // line 102
                    echo "                                        <a href=\"";
                    echo ($context["googlelink"] ?? null);
                    echo "\" class=\"btn btn-social-icon btn-sm btn-google-plus\"><i class=\"fa fa-google fa-fw\" aria-hidden=\"true\"></i></a>
                                    ";
                }
                // line 104
                echo "                                ";
            }
            // line 105
            echo "                                
                                ";
            // line 106
            if (twig_get_attribute($this->env, $this->source, ($context["setting"] ?? null), "so_sociallogin_linkstatus", [], "any", false, false, false, 106)) {
                // line 107
                echo "                                    ";
                if ((twig_get_attribute($this->env, $this->source, ($context["setting"] ?? null), "so_sociallogin_button", [], "any", false, false, false, 107) == "image")) {
                    // line 108
                    echo "                                        <a class=\"social-icon\" href=\"";
                    echo ($context["linkdinlink"] ?? null);
                    echo "\">
                                            <img class=\"img-responsive\" src=\"";
                    // line 109
                    echo ($context["linkdinimage"] ?? null);
                    echo "\" 
                                                data-toggle=\"tooltip\" alt=\"";
                    // line 110
                    echo twig_get_attribute($this->env, $this->source, ($context["setting"] ?? null), "so_sociallogin_linkedintitle", [], "any", false, false, false, 110);
                    echo "\" 
                                                title=\"";
                    // line 111
                    echo twig_get_attribute($this->env, $this->source, ($context["setting"] ?? null), "so_sociallogin_linkedintitle", [], "any", false, false, false, 111);
                    echo "\"
                                            />
                                        </a>
                                    ";
                } else {
                    // line 115
                    echo "                                        <a href=\"";
                    echo ($context["linkdinlink"] ?? null);
                    echo "\" class=\"btn btn-social-icon btn-sm btn-linkdin\"><i class=\"fa fa-linkedin fa-fw\" aria-hidden=\"true\"></i></a>
                                    ";
                }
                // line 117
                echo "                                ";
            }
            // line 118
            echo "                            </div>
                        </div>
                    </column>
                ";
        }
        // line 122
        echo "            
          </div>
        </div>
      </div>
      ";
        // line 126
        echo ($context["content_bottom"] ?? null);
        echo "</div>
    ";
        // line 127
        echo ($context["column_right"] ?? null);
        echo "</div>
</div>

                <style>
                @media(max-width:991px){
                    #column-login,.social_login,.socalicon{
                        float:none !important;
                        width:100%;
                    }
                    .account-login .btn-primary{
                        float:none !important;
                    }
                    .social_login {
                        padding:0 10px;
                    }
                }
                </style>
            
";
        // line 145
        echo ($context["footer"] ?? null);
    }

    public function getTemplateName()
    {
        return "so-buyshop/template/account/login.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  400 => 145,  379 => 127,  375 => 126,  369 => 122,  363 => 118,  360 => 117,  354 => 115,  347 => 111,  343 => 110,  339 => 109,  334 => 108,  331 => 107,  329 => 106,  326 => 105,  323 => 104,  317 => 102,  310 => 98,  306 => 97,  302 => 96,  297 => 95,  294 => 94,  292 => 93,  289 => 92,  286 => 91,  280 => 89,  273 => 85,  269 => 84,  265 => 83,  260 => 82,  257 => 81,  255 => 80,  252 => 79,  249 => 78,  243 => 76,  236 => 72,  232 => 71,  228 => 70,  223 => 69,  220 => 68,  218 => 67,  214 => 65,  208 => 63,  206 => 62,  202 => 60,  200 => 59,  196 => 57,  190 => 55,  188 => 54,  183 => 52,  176 => 50,  170 => 49,  166 => 48,  158 => 45,  154 => 44,  149 => 42,  145 => 41,  141 => 40,  130 => 34,  126 => 33,  122 => 32,  118 => 31,  108 => 27,  105 => 26,  102 => 25,  99 => 24,  96 => 23,  93 => 22,  90 => 21,  88 => 20,  83 => 19,  77 => 17,  74 => 16,  68 => 14,  66 => 13,  59 => 8,  48 => 6,  44 => 5,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "so-buyshop/template/account/login.twig", "/home/azhkhn/public_html/protidin.com.bd/system/storage/modification/catalog/view/theme/so-buyshop/template/account/login.twig");
    }
}
