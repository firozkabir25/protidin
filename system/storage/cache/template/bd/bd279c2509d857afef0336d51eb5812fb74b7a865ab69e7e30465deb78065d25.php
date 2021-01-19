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

/* so-buyshop/template/extension/module/so_newletter_custom_popup/default_layout_default.twig */
class __TwigTemplate_4138f062ecbbedc66099d0230071ee54f5b949d3ffba6f1ea23e748141dd90bb extends \Twig\Template
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
        $context["width_popup"] = ((($context["width"] ?? null)) ? (($context["width"] ?? null)) : ("50%"));
        // line 2
        echo "
";
        // line 3
        if (($context["image_bg_display"] ?? null)) {
            // line 4
            echo "    ";
            $context["bg"] = (("background: url(image/" . ($context["image"] ?? null)) . ")");
        } elseif ((        // line 5
($context["color_bg"] ?? null) != "")) {
            echo " 
   ";
            // line 6
            $context["bg"] = (("background-color: #" . ($context["color_bg"] ?? null)) . ";");
        }
        // line 8
        echo "

<div class=\"module ";
        // line 10
        echo ($context["class_suffix"] ?? null);
        echo "\">
    <div class=\"newsletter \" style=\"width:";
        // line 11
        echo ($context["width_popup"] ?? null);
        echo "; ";
        echo ($context["bg"] ?? null);
        echo " \">
        ";
        // line 12
        if (($context["disp_title_module"] ?? null)) {
            echo " 
            <h3 class=\"modtitle\">";
            // line 13
            echo ($context["head_name"] ?? null);
            echo " </h3>
        ";
        }
        // line 14
        echo " 
        
        <div class=\"title-block\">
            ";
        // line 17
        if (($context["title_display"] ?? null)) {
            // line 18
            echo "                <div class=\"page-heading font-title\">
                    ";
            // line 19
            echo ($context["title"] ?? null);
            echo "
                </div>
                <div class=\"promotext\">";
            // line 21
            echo ($context["newsletter_promo"] ?? null);
            echo "</div>
            ";
        }
        // line 23
        echo "            ";
        if ( !twig_test_empty(twig_trim_filter(($context["pre_text"] ?? null)))) {
            // line 24
            echo "                <div class=\"form-group\">
                    ";
            // line 25
            echo ($context["pre_text"] ?? null);
            echo "
                </div>
            ";
        }
        // line 28
        echo "        </div>

        <div class=\"block_content\">
             <form method=\"post\" id=\"";
        // line 31
        echo ($context["ids"] ?? null);
        echo "\" name=\"signup\" class=\"form-group form-inline signup \">
                <div class=\"form-group\">
                    <div class=\"input-box\">
                        <i class=\"fa fa-envelope\"></i>
                        <input type=\"email\" placeholder=\"";
        // line 35
        echo ($context["newsletter_placeholder"] ?? null);
        echo "\" value=\"\" class=\"form-control\" id=\"";
        echo ($context["txtemail"] ?? null);
        echo "\" name=\"txtemail\" size=\"55\">
                    </div>
                    <div class=\"subcribe\">
                        <button class=\"btn btn-primary btn-default font-title\" type=\"submit\"  name=\"submit\">
                            <i class=\"fa fa-location-arrow\"></i><span>";
        // line 39
        echo ($context["newsletter_button"] ?? null);
        echo "</span>
                        </button>
                    </div>
                </div>
                <div class=\"send-mail\"></div>

            </form>

            

        </div> <!--/.modcontent-->
       ";
        // line 50
        if ( !twig_test_empty(twig_trim_filter(($context["post_text"] ?? null)))) {
            // line 51
            echo "            <div class=\"form-group\">
                ";
            // line 52
            echo ($context["post_text"] ?? null);
            echo "
            </div>
        ";
        }
        // line 55
        echo "        
    </div>

<script type=\"text/javascript\">
    //<![CDATA[
        jQuery(document).ready(function (\$) {
            (function (element) {
                var \$element = \$(element);
                \$(\"button\",\$element).click(function(){
                    var \$this = \$(this);
                    if(typeof(subscribe_newsletter) != 'undefined'){
                        subscribe_newsletter();
                    }
                     return false;

                });

                function subscribe_newsletter()
                {
                    var emailpattern = /^\\w+([\\.-]?\\w+)*@\\w+([\\.-]?\\w+)*(\\.\\w{2,3})+\$/;
                    var email = \$('#";
        // line 75
        echo ($context["txtemail"] ?? null);
        echo "',\$element).val();

                    var d = new Date();
                    var createdate = d.getFullYear() + '-' + (d.getMonth()+1) + '-' + d.getDate() + ' ' + d.getHours() + ':' + d.getMinutes() + ':' + d.getSeconds();
                    var status   = 0;
                    var dataString = 'email='+email+'&createdate='+createdate+'&status='+status;
                   

        if(email != \"\"){

            if(!emailpattern.test(email))
            {

               \$('.alert').remove();
\t            \$('.send-mail',\$element).after('<div class=\"alert alert-danger show-error\" role=\"alert\"><i class=\"fa fa-check-circle\"></i> <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\"><span aria-hidden=\"true\">×</span></button> Invalid Email </div>')
\t            return false;
            }
            else
            {
                \$.ajax({
                    url: 'index.php?route=extension/module/so_newletter_custom_popup/newsletter',
                    type: 'post',
                    data: dataString,
                    dataType: 'json',
                    success: function(json) {
                         \$('.alert').remove();
                        if(json.error == false) {
                              \$('.send-mail',\$element).after('<div class=\"alert alert-success show-error\" role=\"alert\"> <i class=\"fa fa-check-circle\"></i> <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\"><span aria-hidden=\"true\">×</span></button> ' + json.message + '</div>');
                                setTimeout(function () {
                                    var this_close = \$('.popup-close');
                                    this_close.parent().css('display', 'none');
                                    this_close.parents().find('.so_newletter_custom_popup_bg').removeClass('popup_bg');
                                }, 3000);

                         }else{
                                \$('.send-mail',\$element).after('<div class=\"alert alert-danger show-error\" role=\"alert\"><i class=\"fa fa-check-circle\"></i> <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\"><span aria-hidden=\"true\">×</span></button> ' + json.message + '</div>');
                            }
                            var x = document.getElementsByClassName('signup');
                                for (i = 0; i < x.length; i++) {
                                x[i].reset();
                            }
                    }
                });
                return false;
            }
        } else{
            alert(\"";
        // line 121
        echo ($context["text_email_required"] ?? null);
        echo "\");
            \$(email).focus();
            return false;
        }
    }
     })(\"#";
        // line 126
        echo ($context["ids"] ?? null);
        echo " \");    
    });
    //]]>
</script>
</div>
";
    }

    public function getTemplateName()
    {
        return "so-buyshop/template/extension/module/so_newletter_custom_popup/default_layout_default.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  234 => 126,  226 => 121,  177 => 75,  155 => 55,  149 => 52,  146 => 51,  144 => 50,  130 => 39,  121 => 35,  114 => 31,  109 => 28,  103 => 25,  100 => 24,  97 => 23,  92 => 21,  87 => 19,  84 => 18,  82 => 17,  77 => 14,  72 => 13,  68 => 12,  62 => 11,  58 => 10,  54 => 8,  51 => 6,  47 => 5,  44 => 4,  42 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "so-buyshop/template/extension/module/so_newletter_custom_popup/default_layout_default.twig", "/home/azhkhn/public_html/protidin.com.bd/catalog/view/theme/so-buyshop/template/extension/module/so_newletter_custom_popup/default_layout_default.twig");
    }
}
