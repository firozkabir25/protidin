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

/* so-mobile/template/extension/module/so_newletter_custom_popup/default_layout_popup.twig */
class __TwigTemplate_7355d41796b7d1f9fcf953e236664fac2fafc1415d3954e0da15073562505259 extends \Twig\Template
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
        if (($context["image_bg_display"] ?? null)) {
            // line 3
            echo "    ";
            $context["bg"] = (("background: url(image/" . ($context["image"] ?? null)) . ")");
        } else {
            // line 4
            echo " 
   ";
            // line 5
            $context["bg"] = (("background-color: #" . ($context["color_bg"] ?? null)) . "");
        }
        // line 7
        echo "

<div id=\"container-module-newletter\" class=\"hidden-md hidden-sm hidden-xs\">
\t<div class=\"so_newletter_custom_popup_bg\"></div>
\t<div class=\"module custom-pop ";
        // line 11
        echo ($context["class_suffix"] ?? null);
        echo " so_newletter_custom_popup so_newletter_oca_popup\" id=\"so_newletter_custom_popup\">
\t    <div class=\"so-custom-popup so-custom-oca-popup\" style=\"width: ";
        // line 12
        echo ($context["width_popup"] ?? null);
        echo " ; ";
        echo ($context["bg"] ?? null);
        echo " ;  \">
\t\t\t
\t\t\t";
        // line 14
        if (($context["disp_title_module"] ?? null)) {
            echo " 
\t\t\t\t<h3 class=\"modtitle\">";
            // line 15
            echo ($context["head_name"] ?? null);
            echo " </h3>
\t\t\t";
        }
        // line 16
        echo " 

\t\t\t";
        // line 18
        if ((($context["pre_text"] ?? null) != "")) {
            // line 19
            echo "\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t";
            // line 20
            echo ($context["pre_text"] ?? null);
            echo "
\t\t\t\t</div>
\t\t\t";
        }
        // line 23
        echo "\t\t\t
\t\t\t<div class=\"modcontent\">
\t\t\t\t<div class=\"oca_popup\" id=\"test-popup\">
\t\t\t\t\t<div class=\"popup-content\">
\t\t\t\t\t\t<p class=\"newsletter_promo font-ct\">";
        // line 27
        echo ($context["newsletter_promo"] ?? null);
        echo "</p>
\t\t\t\t\t\t";
        // line 28
        if (($context["title_display"] ?? null)) {
            // line 29
            echo "\t\t\t\t\t\t<div class=\"popup-title\">
\t\t\t\t\t\t\t";
            // line 30
            echo ($context["title"] ?? null);
            echo "
\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
        }
        // line 33
        echo "\t\t\t\t\t\t<form method=\"post\"  name=\"signup\" class=\"form-group signup send-mail\">
\t\t\t\t\t\t\t<div class=\"input-control\">
\t\t\t\t\t\t\t\t<div class=\"email\">
\t\t\t\t\t\t\t\t\t<input type=\"email\" placeholder=\"";
        // line 36
        echo ($context["newsletter_placeholder"] ?? null);
        echo "\" value=\"\" class=\"form-control\" id=\"";
        echo ($context["txtemail_id"] ?? null);
        echo "\" name=\"txtemail\">
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<button class=\"btn btn-primary btn-default\" type=\"submit\" onclick=\"return subscribe_newsletter_popup();\" name=\"submit\">
\t\t\t\t\t\t\t\t\t";
        // line 39
        echo ($context["newsletter_button"] ?? null);
        echo "
\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</form>

\t\t\t\t\t\t<label class=\"hidden-popup\">
\t\t\t\t\t\t\t<input type=\"checkbox\" value=\"1\" name=\"hidden-popup\">
\t\t\t\t\t\t\t<span class=\"inline\">&nbsp;&nbsp;";
        // line 46
        echo ($context["input_check"] ?? null);
        echo "</span>
\t\t\t\t\t\t</label>

\t                   
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div> <!--/.modcontent-->
\t        <button title=\"Close\" type=\"button\" class=\"popup-close\">&times;</button>
\t\t\t";
        // line 54
        if ((($context["post_text"] ?? null) != "")) {
            // line 55
            echo "\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t";
            // line 56
            echo ($context["post_text"] ?? null);
            echo "
\t\t\t\t</div>
\t\t\t";
        }
        // line 59
        echo "\t\t\t
\t    </div>
\t</div>

<script type=\"text/javascript\">
    (function(\$) {
        \$(window).load(function () {
            \$('.common-home').addClass('hidden-scorll');
            \$('.so_newletter_custom_popup_bg').addClass('popup_bg');
            \$('input[name=\\'hidden-popup\\']').on('change', function(){
                if (\$(this).is(':checked')) {
                    checkCookie();
                } else {
                    unsetCookie(\"so_newletter_custom_popup\");
                }
            });
            function unsetCookie( name ) {
                document.cookie = name + '=; expires=Thu, 01 Jan 1970 00:00:01 GMT;';
            }
            \$('.popup-close').click(function(){
                var this_close = \$('.popup-close');
                this_close.parents().find('.common-home').removeClass('hidden-scorll');
                this_close.parents().find('#container-module-newletter').remove();
            });
        });
    })(jQuery);
\tfunction setCookie(cname, cvalue, exdays) {
\t\tvar d = new Date();
\t\td.setTime(d.getTime() + (exdays*24*60*60*1000));
\t\tvar expires = \"expires=\"+d.toUTCString();
\t\tdocument.cookie = cname + \"=\" + cvalue + \"; \" + expires;
\t}
\tfunction getCookie(cname) {
\t\tvar name = cname + \"=\";
\t\tvar ca = document.cookie.split(';');
\t\tfor(var i=0; i<ca.length; i++) {
\t\t\tvar c = ca[i];
\t\t\twhile (c.charAt(0)==' ') c = c.substring(1);
\t\t\tif (c.indexOf(name) == 0) return c.substring(name.length, c.length);
\t\t}
\t\treturn \"\";
\t}
\tfunction checkCookie() {
\t\tvar check_cookie = getCookie(\"so_newletter_custom_popup\");
\t\tif(check_cookie == \"\"){
\t\t\tsetCookie(\"so_newletter_custom_popup\", \"Newletter Popup\", ";
        // line 104
        echo ($context["expired"] ?? null);
        echo ");
\t\t}
\t}
    function subscribe_newsletter_popup()
    {
\t\t//alert(email);
        var emailpattern = /^\\w+([\\.-]?\\w+)*@\\w+([\\.-]?\\w+)*(\\.\\w{2,3})+\$/;
        var email = \$(";
        // line 111
        echo ($context["txtemail_id"] ?? null);
        echo ").val();
\t\t
        var d = new Date();
        var createdate = d.getFullYear() + '-' + (d.getMonth()+1) + '-' + d.getDate() + ' ' + d.getHours() + ':' + d.getMinutes() + ':' + d.getSeconds();
        var status   = 0;
        var dataString = 'email='+email+'&createdate='+createdate+'&status='+status;
\t\t
        if(email != \"\")
        {

            if(!emailpattern.test(email))
            {
                \$('.show-error').remove();
                \$('.send-mail').after('<div class=\"alert alert-danger \" role=\"alert\"> <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\"><span aria-hidden=\"true\">×</span></button> Invalid Email </div>')
                return false;
            }
            else
            {
                \$.ajax({
                    url: 'index.php?route=extension/module/so_newletter_custom_popup/newsletter',
                    type: 'post',
                    data: dataString,
                    dataType: 'json',

                    success: function(json) {
                        \$('.show-error').remove();
                        if(json.message == \"Subscription Successfull\") {
\t\t\t\t\t\t\tcheckCookie();
                            \$('.send-mail').after('<div class=\"alert alert-success\" role=\"alert\"> <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\"><span aria-hidden=\"true\">×</span></button> ' + json.message + '</div>');
                            setTimeout(function () {
                                var this_close = \$('.popup-close');
                                this_close.parent().css('display', 'none');
                                this_close.parents().find('.common-home').removeClass('hidden-scorll');
                                this_close.parents().find('#container-module-newletter').remove();

                            }, 3000);

                        }else{
                             \$('.send-mail').after('<div class=\"alert alert-danger\" role=\"alert\"> <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\"><span aria-hidden=\"true\">×</span></button> ' + json.message + '</div>');
                        }
                        var x = document.getElementsByClassName('signup');
                        for (i = 0; i < x.length; i++) {
                            x[i].reset();
                        }
                    }
                });
                return false;
            }
        }
        else
        {
            alert(\"";
        // line 162
        echo ($context["text_email_required"] ?? null);
        echo "\");
            \$(email).focus();
            return false;
        }
    }
</script>


</div>";
    }

    public function getTemplateName()
    {
        return "so-mobile/template/extension/module/so_newletter_custom_popup/default_layout_popup.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  269 => 162,  215 => 111,  205 => 104,  158 => 59,  152 => 56,  149 => 55,  147 => 54,  136 => 46,  126 => 39,  118 => 36,  113 => 33,  107 => 30,  104 => 29,  102 => 28,  98 => 27,  92 => 23,  86 => 20,  83 => 19,  81 => 18,  77 => 16,  72 => 15,  68 => 14,  61 => 12,  57 => 11,  51 => 7,  48 => 5,  45 => 4,  41 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "so-mobile/template/extension/module/so_newletter_custom_popup/default_layout_popup.twig", "/home/azhkhn/public_html/protidin.com.bd/catalog/view/theme/so-mobile/template/extension/module/so_newletter_custom_popup/default_layout_popup.twig");
    }
}
