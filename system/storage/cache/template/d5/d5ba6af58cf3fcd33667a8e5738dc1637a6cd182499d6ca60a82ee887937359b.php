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

/* default/template/extension/module/so_onepagecheckout/default.twig */
class __TwigTemplate_9fe717a98f1d7ef61b636e6dd8e9476e530d75f99b07799f6445019fca9e0270 extends \Twig\Template
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
  \t<ul class=\"breadcrumb\">
    \t";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 5
            echo "    \t\t<li><a href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 5);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 5);
            echo "</a></li>
    \t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 7
        echo "  \t</ul>
  \t";
        // line 8
        if (($context["error_warning"] ?? null)) {
            // line 9
            echo "  \t\t<div class=\"alert alert-danger\"><i class=\"fa fa-exclamation-circle\"></i> ";
            echo ($context["error_warning"] ?? null);
            echo "
    \t\t<button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
  \t\t</div>
  \t";
        }
        // line 13
        echo "  \t<div class=\"row\">
  \t\t";
        // line 14
        echo ($context["column_left"] ?? null);
        echo "
    \t";
        // line 15
        if ((($context["column_left"] ?? null) && ($context["column_right"] ?? null))) {
            // line 16
            echo "    \t\t";
            $context["class"] = "col-sm-6";
            // line 17
            echo "    \t";
        } elseif ((($context["column_left"] ?? null) || ($context["column_right"] ?? null))) {
            // line 18
            echo "    \t\t";
            $context["class"] = "col-sm-9";
            // line 19
            echo "    \t";
        } else {
            // line 20
            echo "    \t\t";
            $context["class"] = "col-sm-12";
            // line 21
            echo "    \t";
        }
        // line 22
        echo "    \t<div id=\"content\" class=\"";
        echo ($context["class"] ?? null);
        echo "\">
    \t\t";
        // line 23
        echo ($context["content_top"] ?? null);
        echo "
    \t\t<h1>";
        // line 24
        echo ($context["heading_title"] ?? null);
        echo "</h1>
    \t\t<div class=\"so-onepagecheckout layout1 ";
        // line 25
        if (($context["is_logged_in"] ?? null)) {
            echo " is_customer ";
        }
        echo "\">
    \t\t\t<div class=\"col-left col-lg-6 col-md-6 col-sm-6 col-xs-12\">
    \t\t\t\t";
        // line 27
        if ( !($context["is_logged_in"] ?? null)) {
            // line 28
            echo "\t    \t\t\t\t<div class=\"checkout-content login-box\">
\t    \t\t\t\t\t<h2 class=\"secondary-title\"><i class=\"fa fa-user\"></i>";
            // line 29
            echo ($context["text_checkout_create_account_login"] ?? null);
            echo "</h2>
                            <div class=\"box-inner\">
                                ";
            // line 31
            if ((twig_get_attribute($this->env, $this->source, ($context["setting_so_onepagecheckout_layout_setting"] ?? null), "so_onepagecheckout_register_checkout", [], "any", false, false, false, 31) == 1)) {
                // line 32
                echo "        \t    \t\t\t\t\t<div class=\"radio\">
        \t\t\t\t\t\t\t\t<label><input type=\"radio\" name=\"account\" value=\"register\" ";
                // line 33
                if ((($context["default_auth"] ?? null) == "register")) {
                    echo " checked=\"checked\" ";
                }
                echo ">";
                echo ($context["text_register"] ?? null);
                echo "</label>
        \t\t\t\t\t\t\t</div>
                                ";
            }
            // line 36
            echo "
    \t\t\t\t\t\t\t";
            // line 37
            if ((($context["allow_guest_checkout"] ?? null) && (twig_get_attribute($this->env, $this->source, ($context["setting_so_onepagecheckout_layout_setting"] ?? null), "so_onepagecheckout_guest_checkout", [], "any", false, false, false, 37) == 1))) {
                // line 38
                echo "        \t                        <div class=\"radio\">
        \t                            <label><input type=\"radio\" name=\"account\" value=\"guest\" ";
                // line 39
                if ((($context["default_auth"] ?? null) == "guest")) {
                    echo " checked=\"checked\" ";
                }
                echo " />";
                echo ($context["text_guest"] ?? null);
                echo "</label>
        \t                        </div>
    \t                        ";
            }
            // line 42
            echo "
                                ";
            // line 43
            if ((twig_get_attribute($this->env, $this->source, ($context["setting_so_onepagecheckout_layout_setting"] ?? null), "so_onepagecheckout_enable_login", [], "any", false, false, false, 43) == 1)) {
                // line 44
                echo "        \t\t\t\t\t\t\t<div class=\"radio\">
        \t\t\t\t\t\t\t\t<label><input type=\"radio\" name=\"account\" value=\"login\" ";
                // line 45
                if ((($context["default_auth"] ?? null) == "login")) {
                    echo " checked=\"checked\" ";
                }
                echo ">";
                echo ($context["text_returning_customer"] ?? null);
                echo "</label>
                                    </div>
                                ";
            }
            // line 48
            echo "                            </div>
\t\t\t\t\t\t</div>
                        <script type=\"text/javascript\">
                            \$(document).delegate('.so-onepagecheckout input[name=\"shipping_address\"]', 'change', function() {
                                var \$this = \$(this);

                                if (\$this.is(':checked')) {
                                    \$('.so-onepagecheckout #shipping-address').hide();
                                    \$this.val(1);
                                    \$(document).trigger('so_checkout_address_changed', 'payment');
                                } else {
                                    \$('.so-onepagecheckout #shipping-address').show().find('input[type=\"text\"]').val('');
                                    \$(document).trigger('so_checkout_address_changed', 'payment');
                                    \$(document).trigger('so_checkout_address_changed', 'shipping');
                                    \$this.val(0);
                                }
                            });

                            \$(document).delegate('.so-onepagecheckout input[name=\"account\"]', 'change', function() {
                                if (this.value === 'login') {
                                    \$('.so-onepagecheckout .checkout-login').slideDown(300);
                                    \$('.so-onepagecheckout .checkout-register').parent().addClass('login-mobile');
                                } else {
                                    \$('.so-onepagecheckout .checkout-login').slideUp(300);
                                    \$('.so-onepagecheckout .checkout-register').parent().removeClass('login-mobile');
                                    if (this.value === 'register') {
                                        \$('.so-onepagecheckout #password').slideDown(300);
                                    } else {
                                        \$('.so-onepagecheckout #password').slideUp(300);
                                    }
                                }

                                \$('html').removeClass('checkout-type-login checkout-type-register checkout-type-guest').addClass('checkout-type-' + this.value);
                            });
                        </script>
\t\t\t\t\t";
        }
        // line 84
        echo "
\t\t\t\t\t";
        // line 85
        if (( !($context["is_logged_in"] ?? null) && (twig_get_attribute($this->env, $this->source, ($context["setting_so_onepagecheckout_layout_setting"] ?? null), "so_onepagecheckout_enable_login", [], "any", false, false, false, 85) == 1))) {
            // line 86
            echo "\t                    <div class=\"checkout-content checkout-login\">
\t                        <fieldset>
\t                            <h2 class=\"secondary-title\"><i class=\"fa fa-unlock\"></i>";
            // line 88
            echo ($context["text_returning_customer"] ?? null);
            echo "</h2>
                                <div class=\"box-inner\">
    \t                            <div class=\"form-group\">
    \t                                <input type=\"text\" name=\"login_email\" value=\"\" placeholder=\"";
            // line 91
            echo ($context["entry_email"] ?? null);
            echo "\" id=\"input-login_email\" class=\"form-control\" />
    \t                            </div>
    \t                            <div class=\"form-group\">
    \t                                <input type=\"password\" name=\"login_password\" value=\"\" placeholder=\"";
            // line 94
            echo ($context["entry_password"] ?? null);
            echo "\" id=\"input-login_password\" class=\"form-control\" />
    \t                                <a href=\"";
            // line 95
            echo ($context["forgotten"] ?? null);
            echo "\">";
            echo ($context["text_forgotten"] ?? null);
            echo "</a>
    \t                            </div>
    \t                            <div class=\"form-group\">
    \t                                <input type=\"button\" value=\"";
            // line 98
            echo ($context["button_login"] ?? null);
            echo "\" id=\"button-login\" data-loading-text=\"";
            echo ($context["text_loading"] ?? null);
            echo "\" class=\"btn-primary button\" />
    \t                            </div>
                                </div>
\t                        </fieldset>
\t                    </div>\t                    
                    ";
        }
        // line 104
        echo "
                    ";
        // line 105
        echo ($context["register_form"] ?? null);
        echo "
    \t\t\t</div>
                
    \t\t\t<div class=\"col-right col-lg-6 col-md-6 col-sm-6 col-xs-12\">
    \t\t\t\t<section class=\"section-left\">
    \t\t\t\t\t";
        // line 110
        if (($context["is_logged_in"] ?? null)) {
            // line 111
            echo "                        \t";
            echo ($context["payment_address"] ?? null);
            echo "
                        \t";
            // line 112
            if (($context["is_shipping_required"] ?? null)) {
                // line 113
                echo "                        \t\t";
                echo ($context["shipping_address"] ?? null);
                echo "
                        \t";
            }
            // line 115
            echo "                        ";
        }
        // line 116
        echo "                        <div class=\"ship-payment\">
                            ";
        // line 117
        if (($context["is_shipping_required"] ?? null)) {
            // line 118
            echo "                            \t";
            echo ($context["shipping_methods"] ?? null);
            echo "
                            ";
        }
        // line 120
        echo "
                            ";
        // line 121
        echo ($context["payment_methods"] ?? null);
        echo "
                        </div>
    \t\t\t\t</section>
    \t\t\t\t<section class=\"section-right\">
                        <div id=\"coupon_voucher_reward\">
    \t\t\t\t\t   ";
        // line 126
        echo ($context["coupon_voucher_reward"] ?? null);
        echo "
                        </div>

                        ";
        // line 129
        echo ($context["cart"] ?? null);
        echo "
                        
    \t\t\t\t\t<div class=\"checkout-content confirm-section\">
                            ";
        // line 132
        if (twig_get_attribute($this->env, $this->source, ($context["setting_so_onepagecheckout_layout_setting"] ?? null), "comment_status", [], "any", false, false, false, 132)) {
            // line 133
            echo "                                <div>
                                    <h2 class=\"secondary-title\"><i class=\"fa fa-comment\"></i>";
            // line 134
            echo ($context["text_comments"] ?? null);
            echo "</h2>
                                    <label>
                                        <textarea name=\"comment\" rows=\"8\" class=\"form-control ";
            // line 136
            if (twig_get_attribute($this->env, $this->source, ($context["setting_so_onepagecheckout_layout_setting"] ?? null), "require_comment_status", [], "any", false, false, false, 136)) {
                echo " requried ";
            }
            echo "\">";
            echo ($context["comment"] ?? null);
            echo "</textarea>
                                    </label>
                                </div>
                            ";
        }
        // line 140
        echo "
                            ";
        // line 141
        if ((($context["entry_newsletter"] ?? null) && twig_get_attribute($this->env, $this->source, ($context["setting_so_onepagecheckout_layout_setting"] ?? null), "show_newsletter", [], "any", false, false, false, 141))) {
            // line 142
            echo "                                <div class=\"checkbox check-newsletter\">
                                    <label for=\"newsletter\">
                                        <input type=\"checkbox\" name=\"newsletter\" value=\"1\" id=\"newsletter\" />
                                        ";
            // line 145
            echo ($context["entry_newsletter"] ?? null);
            echo "
                                    </label>
                                </div>
                            ";
        }
        // line 149
        echo "
                            ";
        // line 150
        if ((($context["text_privacy"] ?? null) && twig_get_attribute($this->env, $this->source, ($context["setting_so_onepagecheckout_layout_setting"] ?? null), "show_privacy", [], "any", false, false, false, 150))) {
            // line 151
            echo "                                <div class=\"checkbox check-privacy\">
                                    <label>
                                        <input type=\"checkbox\" name=\"privacy\" value=\"1\" />
                                        ";
            // line 154
            echo ($context["text_privacy"] ?? null);
            echo "
                                    </label>
                                </div>
                            ";
        }
        // line 158
        echo "
                            ";
        // line 159
        if ((($context["text_agree"] ?? null) && twig_get_attribute($this->env, $this->source, ($context["setting_so_onepagecheckout_layout_setting"] ?? null), "show_term", [], "any", false, false, false, 159))) {
            // line 160
            echo "                                <div class=\"checkbox check-terms\">
                                    <label>
                                        <input type=\"checkbox\" name=\"agree\" value=\"1\" />
                                        ";
            // line 163
            echo ($context["text_agree"] ?? null);
            echo "
                                    </label>
                                </div>
                            ";
        }
        // line 167
        echo "                            <div class=\"confirm-order\">
                                <button id=\"so-checkout-confirm-button\" data-loading-text=\"";
        // line 168
        echo ($context["text_loading"] ?? null);
        echo "\" class=\"btn btn-primary button confirm-button\">";
        echo ($context["text_confirm_order"] ?? null);
        echo "</button>
                            </div>                            
                        </div>
    \t\t\t\t</section>
    \t\t\t</div>
    \t\t</div>
    \t\t";
        // line 174
        echo ($context["content_bottom"] ?? null);
        echo "
    \t</div>
    </div>
</div>
<script type=\"text/javascript\">
    \$(document).delegate('.so-onepagecheckout input[name=\"shipping_method\"]', 'change', function() {
        \$(document).trigger('so_checkout_shipping_changed', this.value);
    });

    \$(document).delegate('input[name=\"payment_method\"]', 'change', function() {
        \$(document).trigger('so_checkout_payment_changed', this.value);
    });

    \$(document).delegate('.so-onepagecheckout #input-login_email, .so-onepagecheckout #input-login_password, .so-onepagecheckout #button-login', 'keydown', function(e) {
        if (e.keyCode == 13) {
            so_ajax_login();
        }
    });

    \$(document).delegate('.so-onepagecheckout #button-login', 'click', function() {
        so_ajax_login();
    });

    var count_loading = 0;
    function ajaxLoadingOn(){
        \$('body > .tooltip').remove();
        count_loading++;
        if(count_loading===1){
            \$('.so-onepagecheckout #so-checkout-confirm-button').button('loading');
            \$('.so-onepagecheckout #so-checkout-confirm-button, .so-onepagecheckout .checkout-register, .so-onepagecheckout .checkout-payment-form, .so-onepagecheckout .checkout-shipping-form, .so-onepagecheckout .checkout-cart, .so-onepagecheckout .confirm-section, .so-onepagecheckout .checkout-shipping-methods, .so-onepagecheckout .checkout-payment-methods, .so-onepagecheckout .coupon-voucher').addClass('checkout-loading');
        }
    }

    function ajaxLoadingOff(){
        count_loading--;
        if(count_loading===0){
            \$('.so-onepagecheckout #so-checkout-confirm-button').button('reset');
            \$('.so-onepagecheckout #so-checkout-confirm-button, .so-onepagecheckout .checkout-register, .so-onepagecheckout .checkout-payment-form, .so-onepagecheckout .checkout-shipping-form, .so-onepagecheckout .checkout-cart, .so-onepagecheckout .confirm-section, .so-onepagecheckout .checkout-shipping-methods, .so-onepagecheckout .checkout-payment-methods, .so-onepagecheckout .coupon-voucher').removeClass('checkout-loading');
        }
    }

    function so_ajax_login(){
        \$.ajax({
            url:'index.php?route=checkout/checkout/login',
            type:'post',
            cache:false,
            data:{email: \$('.so-onepagecheckout input[name=\"login_email\"]').val(),password: \$('.so-onepagecheckout input[name=\"login_password\"]').val()},
            dataType:'json',
            beforeSend:function(){
                ajaxLoadingOn();
                \$('.so-onepagecheckout #button-login').button('loading');
            },
            complete:function(){
                ajaxLoadingOff();
                \$('.so-onepagecheckout #button-login').button('reset');
            },
            success:function(json){
                if(json['error']&&json['error']['warning']){
                    alert(json['error']['warning']);
                }
                if(json['redirect']){
                    location=json['redirect'];
                }
            },
            error:function(xhr,ajaxOptions,thrownError){
                alert(thrownError+\"\\r\\n\"+xhr.statusText+\"\\r\\n\"+xhr.responseText);
            }
        });
    }

    \$(document).delegate('.so-onepagecheckout .confirm-button', 'click', function(){
        var data={};
        \$('.so-onepagecheckout input[type=\"text\"], .so-onepagecheckout input[type=\"number\"], .so-onepagecheckout input[type=\"password\"], .so-onepagecheckout select, .so-onepagecheckout input:checked, .so-onepagecheckout textarea[name=\"comment\"]').each(function(){
            data[\$(this).attr('name')]=\$(this).val();
        });

        \$.ajax({
            url:'index.php?route=checkout/checkout/confirm',
            type:'post',
            cache:false,
            data:data,
            dataType:'json',
            beforeSend:function(){
                ajaxLoadingOn();
            },
            success:function(json){
                \$('.so-onepagecheckout .text-danger').remove();
                \$('.so-onepagecheckout .has-error').removeClass('has-error');
                if(json['redirect_cart']){
                    location=json['redirect_cart'];return;
                }
                
                if(json['errors']){
                    \$.each(json['errors'],function(k,v){
                        if(k==='shipping_method'||k==='payment_method'){
                            return;
                        }
                        if(\$.inArray(k,['payment_country','payment_zone','shipping_country','shipping_zone'])!==-1){
                            k+='_id';
                        }else if(k.indexOf('custom_field')===0){
                            k=k.replace('custom_field','');
                            k='custom_field['+k+']';
                        }else if(k.indexOf('payment_custom_field')===0){
                            k=k.replace('payment_custom_field','');
                            k='payment_custom_field['+k+']';
                        }else if(k.indexOf('shipping_custom_field')===0){
                            k=k.replace('shipping_custom_field','');
                            k='shipping_custom_field['+k+']';
                        }
                        
                        var \$element=\$('.so-onepagecheckout [name=\"'+k+'\"]');
                        \$element.closest('.form-group').addClass('has-error');
                        if (\$element.closest('label').length)
                            \$element.closest('label').after('<div class=\"text-danger\">'+v+'</div>');
                        else
                            \$element.after('<div class=\"text-danger\">'+v+'</div>');
                    });
                    
                    ajaxLoadingOff();
                    
                    try{
                        \$('html, body').animate({scrollTop:\$('.has-error').offset().top},'slow');
                    }catch(e){
                        if (json['errors']['account'][0]) alert(json['errors']['account'][0]);
                    }
                    
                    return false;
                }
                else if(json['redirect']){
                    location=json['redirect'];
                }else{
                    var \$btn=\$('.so-onepagecheckout #payment-confirm-button input[type=\"button\"], .so-onepagecheckout #payment-confirm-button input[type=\"submit\"], .so-onepagecheckout #payment-confirm-button .pull-right a, .so-onepagecheckout #payment-confirm-button .right a, .so-onepagecheckout #payment-confirm-button a.button, .so-onepagecheckout #button-confirm, .so-onepagecheckout #button-pay, .so-onepagecheckout #payment-confirm-button.payment-iyzico_checkout_installment .submitButton, .so-onepagecheckout #stripe-confirm').first();
                    if(\$btn.attr('href')){
                        location=\$btn.attr('href');
                    }else{
                        \$btn.trigger('click');
                    }
                }
            },
            error:function(xhr,ajaxOptions,thrownError){
                alert(thrownError+\"\\r\\n\"+xhr.statusText+\"\\r\\n\"+xhr.responseText);
            }
        });
    });

    \$(document).on('so_checkout_customer_group_changed', function(e, value){
        \$.ajax({
            url:'index.php?route=checkout/checkout',
            type:'get',
            cache:false,
            data:{customer_group_id:value},
            beforeSend:function(){
                ajaxLoadingOn();
                \$('.so-onepagecheckout #account, .so-onepagecheckout #address').addClass('checkout-loading');
            },
            complete:function(){
                ajaxLoadingOff();
                \$('.so-onepagecheckout #account, .so-onepagecheckout #address').removeClass('checkout-loading');
            },
            success:function(html){
                var \$html=\$(html);
                \$('.so-onepagecheckout #account').html(\$html.find('#account'));
                \$('.so-onepagecheckout #address').html(\$html.find('#address'));
                \$('.so-onepagecheckout #password').html(\$html.find('#password'));
                \$('.so-onepagecheckout #account .form-group[data-sort]').detach().each(function(){
                    if(\$(this).attr('data-sort')>=0 && \$(this).attr('data-sort')<=\$('.so-onepagecheckout #account .form-group').length){
                        \$('.so-onepagecheckout #account .form-group').eq(\$(this).attr('data-sort')).before(this);
                    }
                    if(\$(this).attr('data-sort')>\$('#account .form-group').length){
                        \$('.so-onepagecheckout #account .form-group:last').after(this);
                    }
                    if(\$(this).attr('data-sort')<-\$('#account .form-group').length){
                        \$('.so-onepagecheckout #account .form-group:first').before(this);
                    }
                });
                
                \$(document).trigger('so_checkout_reload_payment');

                if(\$('.so-onepagecheckout input[name=\"shipping_address\"]').is(':checked')){
                    \$(document).trigger('so_checkout_reload_shipping');
                }
            },
            error:function(xhr,ajaxOptions,thrownError){
                alert(thrownError+\"\\r\\n\"+xhr.statusText+\"\\r\\n\"+xhr.responseText);
            }
        });
    });

    \$(document).on('so_checkout_address_changed', function(e, type){
        var data={};
        if(\$('.so-onepagecheckout input[name=\"'+type+'_address\"]:checked').val()==='existing'){
            data[type+'_address_id']=\$('select[name=\"'+type+'_address_id\"]').val();
        }else{
            data[type+'_country_id']=\$('select[name=\"'+type+'_country_id\"]').val();
            data[type+'_postcode']=\$('input[name=\"'+type+'_postcode\"]').val();
            data[type+'_zone_id']=\$('select[name=\"'+type+'_zone_id\"]').val();
            ";
        // line 370
        if ( !($context["is_logged_in"] ?? null)) {
            // line 371
            echo "                if(type==='payment'&&\$('input[name=\"shipping_address\"]').is(\":checked\")){
                    data['shipping_country_id']=\$('select[name=\"'+type+'_country_id\"]').val();
                    data['shipping_postcode']=\$('input[name=\"'+type+'_postcode\"]').val();
                    data['shipping_zone_id']=\$('select[name=\"'+type+'_zone_id\"]').val();
                }
            ";
        }
        // line 377
        echo "        }

        \$.ajax({
            url:'index.php?route=checkout/checkout/save',
            type:'post',
            cache:false,
            data:data,
            dataType:'json',
            success:function(json){
                \$(document).trigger('so_checkout_reload_'+type);
                ";
        // line 387
        if ( !($context["is_logged_in"] ?? null)) {
            // line 388
            echo "                    if(type==='payment'&&\$('input[name=\"shipping_address\"]').is(':checked')){
                        \$(document).trigger('so_checkout_reload_shipping');
                    }
                ";
        }
        // line 392
        echo "            },
            error:function(xhr,ajaxOptions,thrownError){
                alert(thrownError+\"\\r\\n\"+xhr.statusText+\"\\r\\n\"+xhr.responseText);
            }
        });
    });

    \$(document).on('so_checkout_shipping_changed', function (e, value) {
        \$.ajax({
            url: 'index.php?route=checkout/checkout/save',
            type: 'post',
            data: {
                shipping_method: value
            },
            dataType: 'json',
            success: function() {
                \$(document).trigger('so_checkout_reload_payment');
                \$(document).trigger('so_checkout_reload_cart');
            },
            error: function(xhr, ajaxOptions, thrownError) {
                alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
            }
        });
    });

    \$(document).on('so_checkout_payment_changed', function (e, value) {
        \$.ajax({
            url: 'index.php?route=checkout/checkout/save',
            type: 'post',
            data: {
                payment_method: value
            },
            dataType: 'json',
            success: function() {
                \$(document).trigger('so_checkout_reload_cart');
            },
            error: function(xhr, ajaxOptions, thrownError) {
                alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
            }
        });
    });

    \$(document).on('so_checkout_reload_shipping', function () {
        \$.ajax({
            url: 'index.php?route=checkout/checkout/shipping',
            type: 'get',
            dataType: 'html',
            beforeSend: function() {
                ajaxLoadingOn();
                \$('.checkout-shipping-methods').addClass('checkout-loading');
            },
            complete: function() {
                ajaxLoadingOff();
                \$('.checkout-shipping-methods').removeClass('checkout-loading');
            },
            success: function(html) {
                \$('.checkout-shipping-methods').replaceWith(html);
                \$(document).trigger('so_checkout_reload_cart');
            },
            error: function(xhr, ajaxOptions, thrownError) {
                alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
            }
        });
    });

    \$(document).on('so_checkout_reload_payment', function () {
        \$.ajax({
            url: 'index.php?route=checkout/checkout/payment',
            type: 'get',
            dataType: 'html',
            beforeSend: function() {
                ajaxLoadingOn();
                \$('.checkout-payment-methods').addClass('checkout-loading');
            },
            complete: function() {
                ajaxLoadingOff();
                \$('.checkout-payment-methods').removeClass('checkout-loading');
            },
            success: function(html) {
                \$('.checkout-payment-methods').replaceWith(html);
                \$(document).trigger('so_checkout_reload_cart');
            },
            error: function(xhr, ajaxOptions, thrownError) {
                alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
            }
        });
    });

    \$(document).on('so_checkout_reload_cart', function (e, first) {
        \$.ajax({
            url: 'index.php?route=checkout/checkout/cart',
            type: 'get',
            dataType: 'html',
            beforeSend: function() {
                if (!first) {
                    ajaxLoadingOn();
                    \$('.so-onepagecheckout .checkout-cart').addClass('checkout-loading');
                }
            },
            complete: function() {
                if (!first) {
                    ajaxLoadingOff();
                    \$('.so-onepagecheckout .checkout-cart').removeClass('checkout-loading');
                }
            },
            success: function(html) {
                \$('.so-onepagecheckout .checkout-cart').replaceWith(html);
            },
            error: function(xhr, ajaxOptions, thrownError) {
                alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
            }
        });
    });

    \$(document).delegate('.so-onepagecheckout .checkout-product .input-group .btn-update', 'click', function () {
        var key = \$(this).attr('data-product-key');
        var qty  = \$('input[name=\"quantity[' + key + ']\"]').val();
        \$.ajax({
            url: 'index.php?route=checkout/checkout/cart_update',
            type: 'post',
            data: {
                key: key,
                quantity: qty
            },
            dataType: 'json',
            beforeSend: function() {
                ajaxLoadingOn();
                \$('#cart > button > a > span').button('loading');
                \$('.so-onepagecheckout .checkout-cart').addClass('checkout-loading');
            },
            complete: function() {
                ajaxLoadingOff();
                \$('#cart > button > a > span').button('reset');
            },
            success: function(json) {
                setTimeout(function () {
                    \$('#cart-total').html(json['total']);
                }, 100);

                if (json['redirect']) {
                    location = json['redirect'];
                } else {
                    \$('#cart ul').load('index.php?route=common/cart/info ul li');

                    \$(document).trigger('so_checkout_reload_payment');
                    \$(document).trigger('so_checkout_reload_shipping');
                }
            }
        });
    });

    \$(document).delegate('.so-onepagecheckout .checkout-product .input-group .btn-delete', 'click', function () {
        var key = \$(this).attr('data-product-key');
        \$.ajax({
            url: 'index.php?route=checkout/checkout/cart_delete',
            type: 'post',
            data: {
                key: key
            },
            dataType: 'json',
            beforeSend: function() {
                ajaxLoadingOn();
                \$('#cart > button > a > span').button('loading');
                \$('.so-onepagecheckout .checkout-cart').addClass('checkout-loading');
            },
            complete: function() {
                ajaxLoadingOff();
                \$('#cart > button > a > span').button('reset');
            },
            success: function(json) {
                setTimeout(function () {
                    \$('#cart-total').html(json['total']);
                }, 100);

                if (json['redirect']) {
                    location = json['redirect'];
                } else {
                    \$('#cart ul').load('index.php?route=common/cart/info ul li');

                    \$(document).trigger('so_checkout_reload_payment');
                    \$(document).trigger('so_checkout_reload_shipping');
                }
            }
        });
    });

    \$(document).delegate('#button-voucher', 'click', function() {
        \$.ajax({
            url:'index.php?route=extension/total/voucher/voucher',
            type: 'post',
            data: 'voucher=' + encodeURIComponent(\$('input[name=\\'voucher\\']').val()),
            dataType: 'json',
            beforeSend: function() {
                ajaxLoadingOn();
                \$('.so-onepagecheckout #button-voucher').button('loading');
            },
            complete: function() {
                ajaxLoadingOff();
                \$('.so-onepagecheckout #button-voucher').button('reset');
            },
            success: function(json) {
                if (json['error']) {
                    alert(json['error']);
                } else {
                    \$('#cart ul').load('index.php?route=common/cart/info ul li');

                    \$(document).trigger('so_checkout_reload_payment');
                    \$(document).trigger('so_checkout_reload_shipping');
                }
            }
        });
    });

    \$(document).delegate('#button-coupon', 'click', function() {
        \$.ajax({
            url:'index.php?route=extension/total/coupon/coupon',
            type: 'post',
            data: 'coupon=' + encodeURIComponent(\$('input[name=\\'coupon\\']').val()),
            dataType: 'json',
            beforeSend: function() {
                ajaxLoadingOn();
                \$('.so-onepagecheckout #button-coupon').button('loading');
            },
            complete: function() {
                ajaxLoadingOff();
                \$('.so-onepagecheckout #button-coupon').button('reset');
            },
            success: function(json) {
                if (json['error']) {
                    alert(json['error']);
                } else {
                    \$('#cart ul').load('index.php?route=common/cart/info ul li');

                    \$(document).trigger('so_checkout_reload_payment');
                    \$(document).trigger('so_checkout_reload_shipping');
                }
            }
        });
    });

    \$(document).delegate('#button-reward', 'click', function() {
        \$.ajax({
            url:'index.php?route=extension/total/reward/reward',
            type: 'post',
            data: 'reward=' + encodeURIComponent(\$('input[name=\\'reward\\']').val()),
            dataType: 'json',
            beforeSend: function() {
                ajaxLoadingOn();
                \$('.so-onepagecheckout #button-reward').button('loading');
            },
            complete: function() {
                ajaxLoadingOff();
                \$('.so-onepagecheckout #button-reward').button('reset');
            },
            success: function(json) {
                if (json['error']) {
                    alert(json['error']);
                } else {
                    \$('#cart ul').load('index.php?route=common/cart/info ul li');

                    \$(document).trigger('so_checkout_reload_payment');
                    \$(document).trigger('so_checkout_reload_shipping');
                }
            }
        });
    });

    ";
        // line 659
        if (($context["is_logged_in"] ?? null)) {
            // line 660
            echo "        \$('.so-onepagecheckout [value=\"existing\"]').trigger('change');
    ";
        } else {
            // line 662
            echo "        \$('.so-onepagecheckout input[name=\"account\"]:checked').trigger('change');
    ";
        }
        // line 664
        echo "
    \$(document).trigger('so_checkout_reload_cart', true);
</script>
";
        // line 667
        echo ($context["footer"] ?? null);
    }

    public function getTemplateName()
    {
        return "default/template/extension/module/so_onepagecheckout/default.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  923 => 667,  918 => 664,  914 => 662,  910 => 660,  908 => 659,  639 => 392,  633 => 388,  631 => 387,  619 => 377,  611 => 371,  609 => 370,  410 => 174,  399 => 168,  396 => 167,  389 => 163,  384 => 160,  382 => 159,  379 => 158,  372 => 154,  367 => 151,  365 => 150,  362 => 149,  355 => 145,  350 => 142,  348 => 141,  345 => 140,  334 => 136,  329 => 134,  326 => 133,  324 => 132,  318 => 129,  312 => 126,  304 => 121,  301 => 120,  295 => 118,  293 => 117,  290 => 116,  287 => 115,  281 => 113,  279 => 112,  274 => 111,  272 => 110,  264 => 105,  261 => 104,  250 => 98,  242 => 95,  238 => 94,  232 => 91,  226 => 88,  222 => 86,  220 => 85,  217 => 84,  179 => 48,  169 => 45,  166 => 44,  164 => 43,  161 => 42,  151 => 39,  148 => 38,  146 => 37,  143 => 36,  133 => 33,  130 => 32,  128 => 31,  123 => 29,  120 => 28,  118 => 27,  111 => 25,  107 => 24,  103 => 23,  98 => 22,  95 => 21,  92 => 20,  89 => 19,  86 => 18,  83 => 17,  80 => 16,  78 => 15,  74 => 14,  71 => 13,  63 => 9,  61 => 8,  58 => 7,  47 => 5,  43 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/extension/module/so_onepagecheckout/default.twig", "/home/azhkhn/public_html/protidin.com.bd/catalog/view/theme/default/template/extension/module/so_onepagecheckout/default.twig");
    }
}
