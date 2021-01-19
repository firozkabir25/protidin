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

/* setting/setting.twig */
class __TwigTemplate_3b478a7362fea00d7d5351d6447190a6a4bd6287c92f4005e92ad370376964d7 extends \Twig\Template
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
        echo ($context["column_left"] ?? null);
        echo "
<div id=\"content\">
  <div class=\"page-header\">
    <div class=\"container-fluid\">
      <div class=\"pull-right\">
        <button type=\"submit\" id=\"button-save\" form=\"form-setting\" data-toggle=\"tooltip\" title=\"";
        // line 6
        echo ($context["button_save"] ?? null);
        echo "\" disabled=\"disabled\" class=\"btn btn-primary\"><i class=\"fa fa-save\"></i></button>
        <a href=\"";
        // line 7
        echo ($context["cancel"] ?? null);
        echo "\" data-toggle=\"tooltip\" title=\"";
        echo ($context["button_cancel"] ?? null);
        echo "\" class=\"btn btn-default\"><i class=\"fa fa-reply\"></i></a></div>
      <h1>";
        // line 8
        echo ($context["heading_title"] ?? null);
        echo "</h1>
      <ul class=\"breadcrumb\">
        ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 11
            echo "        <li><a href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 11);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 11);
            echo "</a></li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 13
        echo "      </ul>
    </div>
  </div>
  <div class=\"container-fluid\"> ";
        // line 16
        if (($context["error_warning"] ?? null)) {
            // line 17
            echo "    <div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ";
            echo ($context["error_warning"] ?? null);
            echo "
      <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
    </div>
    ";
        }
        // line 21
        echo "    ";
        if (($context["success"] ?? null)) {
            // line 22
            echo "    <div class=\"alert alert-success alert-dismissible\"><i class=\"fa fa-check-circle\"></i> ";
            echo ($context["success"] ?? null);
            echo "
      <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
    </div>
    ";
        }
        // line 26
        echo "    <div class=\"panel panel-default\">
      <div class=\"panel-heading\">
        <h3 class=\"panel-title\"><i class=\"fa fa-pencil\"></i> ";
        // line 28
        echo ($context["text_edit"] ?? null);
        echo "</h3>
      </div>
      <div class=\"panel-body\">
        <form action=\"";
        // line 31
        echo ($context["action"] ?? null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-setting\" class=\"form-horizontal\">
          <ul class=\"nav nav-tabs\">
            <li class=\"active\"><a href=\"#tab-general\" data-toggle=\"tab\">";
        // line 33
        echo ($context["tab_general"] ?? null);
        echo "</a></li>
            <li><a href=\"#tab-store\" data-toggle=\"tab\">";
        // line 34
        echo ($context["tab_store"] ?? null);
        echo "</a></li>
            <li><a href=\"#tab-local\" data-toggle=\"tab\">";
        // line 35
        echo ($context["tab_local"] ?? null);
        echo "</a></li>
            <li><a href=\"#tab-option\" data-toggle=\"tab\">";
        // line 36
        echo ($context["tab_option"] ?? null);
        echo "</a></li>
            <li><a href=\"#tab-image\" data-toggle=\"tab\">";
        // line 37
        echo ($context["tab_image"] ?? null);
        echo "</a></li>
            <li><a href=\"#tab-mail\" data-toggle=\"tab\">";
        // line 38
        echo ($context["tab_mail"] ?? null);
        echo "</a></li>
            <li><a href=\"#tab-server\" data-toggle=\"tab\">";
        // line 39
        echo ($context["tab_server"] ?? null);
        echo "</a></li>
            <li><a href=\"#tab-wallet\" data-toggle=\"tab\">";
        // line 40
        echo ($context["tab_wallet"] ?? null);
        echo "</a></li>
          </ul>
          <div class=\"tab-content\">
            <div class=\"tab-pane active\" id=\"tab-general\">
              <div class=\"form-group required\">
                <label class=\"col-sm-2 control-label\" for=\"input-meta-title\">";
        // line 45
        echo ($context["entry_meta_title"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"config_meta_title\" value=\"";
        // line 47
        echo ($context["config_meta_title"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_meta_title"] ?? null);
        echo "\" id=\"input-meta-title\" class=\"form-control\" />
                  ";
        // line 48
        if (($context["error_meta_title"] ?? null)) {
            // line 49
            echo "                  <div class=\"text-danger\">";
            echo ($context["error_meta_title"] ?? null);
            echo "</div>
                  ";
        }
        // line 50
        echo " </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-meta-description\">";
        // line 53
        echo ($context["entry_meta_description"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <textarea name=\"config_meta_description\" rows=\"5\" placeholder=\"";
        // line 55
        echo ($context["entry_meta_description"] ?? null);
        echo "\" id=\"input-meta-description\" class=\"form-control\">";
        echo ($context["config_meta_description"] ?? null);
        echo "</textarea>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-meta-keyword\">";
        // line 59
        echo ($context["entry_meta_keyword"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <textarea name=\"config_meta_keyword\" rows=\"5\" placeholder=\"";
        // line 61
        echo ($context["entry_meta_keyword"] ?? null);
        echo "\" id=\"input-meta-keyword\" class=\"form-control\">";
        echo ($context["config_meta_keyword"] ?? null);
        echo "</textarea>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-theme\">";
        // line 65
        echo ($context["entry_theme"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <select name=\"config_theme\" id=\"input-theme\" class=\"form-control\">
                    
                    ";
        // line 69
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["themes"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["theme"]) {
            // line 70
            echo "                    ";
            if ((twig_get_attribute($this->env, $this->source, $context["theme"], "value", [], "any", false, false, false, 70) == ($context["config_theme"] ?? null))) {
                // line 71
                echo "                    
                    <option value=\"";
                // line 72
                echo twig_get_attribute($this->env, $this->source, $context["theme"], "value", [], "any", false, false, false, 72);
                echo "\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["theme"], "text", [], "any", false, false, false, 72);
                echo "</option>
                    
                    ";
            } else {
                // line 75
                echo "                    
                    <option value=\"";
                // line 76
                echo twig_get_attribute($this->env, $this->source, $context["theme"], "value", [], "any", false, false, false, 76);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["theme"], "text", [], "any", false, false, false, 76);
                echo "</option>
                    
                    ";
            }
            // line 79
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['theme'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 80
        echo "                  
                  </select>
                  <br />
                  <img src=\"\" alt=\"\" id=\"theme\" class=\"img-thumbnail\" /></div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-layout\">";
        // line 86
        echo ($context["entry_layout"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <select name=\"config_layout_id\" id=\"input-layout\" class=\"form-control\">
                    
                    ";
        // line 90
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["layouts"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["layout"]) {
            // line 91
            echo "                    ";
            if ((twig_get_attribute($this->env, $this->source, $context["layout"], "layout_id", [], "any", false, false, false, 91) == ($context["config_layout_id"] ?? null))) {
                // line 92
                echo "                    
                    <option value=\"";
                // line 93
                echo twig_get_attribute($this->env, $this->source, $context["layout"], "layout_id", [], "any", false, false, false, 93);
                echo "\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["layout"], "name", [], "any", false, false, false, 93);
                echo "</option>
                    
                    ";
            } else {
                // line 96
                echo "                    
                    <option value=\"";
                // line 97
                echo twig_get_attribute($this->env, $this->source, $context["layout"], "layout_id", [], "any", false, false, false, 97);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["layout"], "name", [], "any", false, false, false, 97);
                echo "</option>
                    
                    ";
            }
            // line 100
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['layout'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 101
        echo "                  
                  </select>
                </div>
              </div>
            </div>
            <div class=\"tab-pane\" id=\"tab-store\">
              <div class=\"form-group required\">
                <label class=\"col-sm-2 control-label\" for=\"input-name\">";
        // line 108
        echo ($context["entry_name"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"config_name\" value=\"";
        // line 110
        echo ($context["config_name"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_name"] ?? null);
        echo "\" id=\"input-name\" class=\"form-control\" />
                  ";
        // line 111
        if (($context["error_name"] ?? null)) {
            // line 112
            echo "                  <div class=\"text-danger\">";
            echo ($context["error_name"] ?? null);
            echo "</div>
                  ";
        }
        // line 113
        echo " </div>
              </div>
              <div class=\"form-group required\">
                <label class=\"col-sm-2 control-label\" for=\"input-owner\">";
        // line 116
        echo ($context["entry_owner"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"config_owner\" value=\"";
        // line 118
        echo ($context["config_owner"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_owner"] ?? null);
        echo "\" id=\"input-owner\" class=\"form-control\" />
                  ";
        // line 119
        if (($context["error_owner"] ?? null)) {
            // line 120
            echo "                  <div class=\"text-danger\">";
            echo ($context["error_owner"] ?? null);
            echo "</div>
                  ";
        }
        // line 121
        echo " </div>
              </div>
              <div class=\"form-group required\">
                <label class=\"col-sm-2 control-label\" for=\"input-address\">";
        // line 124
        echo ($context["entry_address"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <textarea name=\"config_address\" placeholder=\"";
        // line 126
        echo ($context["entry_address"] ?? null);
        echo "\" rows=\"5\" id=\"input-address\" class=\"form-control\">";
        echo ($context["config_address"] ?? null);
        echo "</textarea>
                  ";
        // line 127
        if (($context["error_address"] ?? null)) {
            // line 128
            echo "                  <div class=\"text-danger\">";
            echo ($context["error_address"] ?? null);
            echo "</div>
                  ";
        }
        // line 129
        echo " </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-geocode\"><span data-toggle=\"tooltip\" data-container=\"#tab-general\" title=\"";
        // line 132
        echo ($context["help_geocode"] ?? null);
        echo "\">";
        echo ($context["entry_geocode"] ?? null);
        echo "</span></label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"config_geocode\" value=\"";
        // line 134
        echo ($context["config_geocode"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_geocode"] ?? null);
        echo "\" id=\"input-geocode\" class=\"form-control\" />
                </div>
              </div>
              <div class=\"form-group required\">
                <label class=\"col-sm-2 control-label\" for=\"input-email\">";
        // line 138
        echo ($context["entry_email"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"config_email\" value=\"";
        // line 140
        echo ($context["config_email"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_email"] ?? null);
        echo "\" id=\"input-email\" class=\"form-control\" />
                  ";
        // line 141
        if (($context["error_email"] ?? null)) {
            // line 142
            echo "                  <div class=\"text-danger\">";
            echo ($context["error_email"] ?? null);
            echo "</div>
                  ";
        }
        // line 143
        echo " </div>
              </div>
              <div class=\"form-group required\">
                <label class=\"col-sm-2 control-label\" for=\"input-telephone\">";
        // line 146
        echo ($context["entry_telephone"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"config_telephone\" value=\"";
        // line 148
        echo ($context["config_telephone"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_telephone"] ?? null);
        echo "\" id=\"input-telephone\" class=\"form-control\" />
                  ";
        // line 149
        if (($context["error_telephone"] ?? null)) {
            // line 150
            echo "                  <div class=\"text-danger\">";
            echo ($context["error_telephone"] ?? null);
            echo "</div>
                  ";
        }
        // line 151
        echo " </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-fax\">";
        // line 154
        echo ($context["entry_fax"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"config_fax\" value=\"";
        // line 156
        echo ($context["config_fax"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_fax"] ?? null);
        echo "\" id=\"input-fax\" class=\"form-control\" />
                </div>
              </div>              
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-image\">";
        // line 160
        echo ($context["entry_image"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\"><a href=\"\" id=\"thumb-image\" data-toggle=\"image\" class=\"img-thumbnail\"><img src=\"";
        // line 161
        echo ($context["thumb"] ?? null);
        echo "\" alt=\"\" title=\"\" data-placeholder=\"";
        echo ($context["placeholder"] ?? null);
        echo "\" /></a>
                  <input type=\"hidden\" name=\"config_image\" value=\"";
        // line 162
        echo ($context["config_image"] ?? null);
        echo "\" id=\"input-image\" />
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-open\"><span data-toggle=\"tooltip\" data-container=\"#tab-general\" title=\"";
        // line 166
        echo ($context["help_open"] ?? null);
        echo "\">";
        echo ($context["entry_open"] ?? null);
        echo "</span></label>
                <div class=\"col-sm-10\">
                  <textarea name=\"config_open\" rows=\"5\" placeholder=\"";
        // line 168
        echo ($context["entry_open"] ?? null);
        echo "\" id=\"input-open\" class=\"form-control\">";
        echo ($context["config_open"] ?? null);
        echo "</textarea>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-comment\"><span data-toggle=\"tooltip\" data-container=\"#tab-general\" title=\"";
        // line 172
        echo ($context["help_comment"] ?? null);
        echo "\">";
        echo ($context["entry_comment"] ?? null);
        echo "</span></label>
                <div class=\"col-sm-10\">
                  <textarea name=\"config_comment\" rows=\"5\" placeholder=\"";
        // line 174
        echo ($context["entry_comment"] ?? null);
        echo "\" id=\"input-comment\" class=\"form-control\">";
        echo ($context["config_comment"] ?? null);
        echo "</textarea>
                </div>
              </div>
              ";
        // line 177
        if (($context["locations"] ?? null)) {
            // line 178
            echo "              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" data-container=\"#tab-general\" title=\"";
            // line 179
            echo ($context["help_location"] ?? null);
            echo "\">";
            echo ($context["entry_location"] ?? null);
            echo "</span></label>
                <div class=\"col-sm-10\"> ";
            // line 180
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["locations"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["location"]) {
                // line 181
                echo "                  <div class=\"checkbox\">
                    <label> ";
                // line 182
                if (twig_in_filter(twig_get_attribute($this->env, $this->source, $context["location"], "location_id", [], "any", false, false, false, 182), ($context["config_location"] ?? null))) {
                    // line 183
                    echo "                      <input type=\"checkbox\" name=\"config_location[]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["location"], "location_id", [], "any", false, false, false, 183);
                    echo "\" checked=\"checked\" />
                      ";
                    // line 184
                    echo twig_get_attribute($this->env, $this->source, $context["location"], "name", [], "any", false, false, false, 184);
                    echo "
                      ";
                } else {
                    // line 186
                    echo "                      <input type=\"checkbox\" name=\"config_location[]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["location"], "location_id", [], "any", false, false, false, 186);
                    echo "\" />
                      ";
                    // line 187
                    echo twig_get_attribute($this->env, $this->source, $context["location"], "name", [], "any", false, false, false, 187);
                    echo "
                      ";
                }
                // line 188
                echo " </label>
                  </div>
                  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['location'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 190
            echo " </div>
              </div>
              ";
        }
        // line 192
        echo " </div>
            <div class=\"tab-pane\" id=\"tab-local\">
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-country\">";
        // line 195
        echo ($context["entry_country"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <select name=\"config_country_id\" id=\"input-country\" class=\"form-control\">
                    
                    ";
        // line 199
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["countries"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["country"]) {
            // line 200
            echo "                    ";
            if ((twig_get_attribute($this->env, $this->source, $context["country"], "country_id", [], "any", false, false, false, 200) == ($context["config_country_id"] ?? null))) {
                // line 201
                echo "                    
                    <option value=\"";
                // line 202
                echo twig_get_attribute($this->env, $this->source, $context["country"], "country_id", [], "any", false, false, false, 202);
                echo "\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["country"], "name", [], "any", false, false, false, 202);
                echo "</option>
                    
                    ";
            } else {
                // line 205
                echo "                    
                    <option value=\"";
                // line 206
                echo twig_get_attribute($this->env, $this->source, $context["country"], "country_id", [], "any", false, false, false, 206);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["country"], "name", [], "any", false, false, false, 206);
                echo "</option>
                    
                    ";
            }
            // line 209
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['country'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 210
        echo "                  
                  </select>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-zone\">";
        // line 215
        echo ($context["entry_zone"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <select name=\"config_zone_id\" id=\"input-zone\" class=\"form-control\">
                  </select>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-language\">";
        // line 222
        echo ($context["entry_language"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <select name=\"config_language\" id=\"input-language\" class=\"form-control\">
                    
                    ";
        // line 226
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 227
            echo "                    ";
            if ((twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 227) == ($context["config_language"] ?? null))) {
                // line 228
                echo "                    
                    <option value=\"";
                // line 229
                echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 229);
                echo "\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 229);
                echo "</option>
                    
                    ";
            } else {
                // line 232
                echo "                    
                    <option value=\"";
                // line 233
                echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 233);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 233);
                echo "</option>
                    
                    ";
            }
            // line 236
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 237
        echo "                  
                  </select>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-admin-language\">";
        // line 242
        echo ($context["entry_admin_language"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <select name=\"config_admin_language\" id=\"input-admin-language\" class=\"form-control\">
                    
                    ";
        // line 246
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 247
            echo "                    ";
            if ((twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 247) == ($context["config_admin_language"] ?? null))) {
                // line 248
                echo "                    
                    <option value=\"";
                // line 249
                echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 249);
                echo "\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 249);
                echo "</option>
                    
                    ";
            } else {
                // line 252
                echo "                    
                    <option value=\"";
                // line 253
                echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 253);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 253);
                echo "</option>
                    
                    ";
            }
            // line 256
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 257
        echo "                  
                  </select>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-currency\"><span data-toggle=\"tooltip\" title=\"";
        // line 262
        echo ($context["help_currency"] ?? null);
        echo "\">";
        echo ($context["entry_currency"] ?? null);
        echo "</span></label>
                <div class=\"col-sm-10\">
                  <select name=\"config_currency\" id=\"input-currency\" class=\"form-control\">
                    
                    ";
        // line 266
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["currencies"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["currency"]) {
            // line 267
            echo "                    ";
            if ((twig_get_attribute($this->env, $this->source, $context["currency"], "code", [], "any", false, false, false, 267) == ($context["config_currency"] ?? null))) {
                // line 268
                echo "                    
                    <option value=\"";
                // line 269
                echo twig_get_attribute($this->env, $this->source, $context["currency"], "code", [], "any", false, false, false, 269);
                echo "\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["currency"], "title", [], "any", false, false, false, 269);
                echo "</option>
                    
                    ";
            } else {
                // line 272
                echo "                    
                    <option value=\"";
                // line 273
                echo twig_get_attribute($this->env, $this->source, $context["currency"], "code", [], "any", false, false, false, 273);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["currency"], "title", [], "any", false, false, false, 273);
                echo "</option>
                    
                    ";
            }
            // line 276
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['currency'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 277
        echo "                  
                  </select>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 282
        echo ($context["help_currency_auto"] ?? null);
        echo "\">";
        echo ($context["entry_currency_auto"] ?? null);
        echo "</span></label>
                <div class=\"col-sm-10\">
                  <label class=\"radio-inline\"> ";
        // line 284
        if (($context["config_currency_auto"] ?? null)) {
            // line 285
            echo "                    <input type=\"radio\" name=\"config_currency_auto\" value=\"1\" checked=\"checked\" />
                    ";
            // line 286
            echo ($context["text_yes"] ?? null);
            echo "
                    ";
        } else {
            // line 288
            echo "                    <input type=\"radio\" name=\"config_currency_auto\" value=\"1\" />
                    ";
            // line 289
            echo ($context["text_yes"] ?? null);
            echo "
                    ";
        }
        // line 290
        echo " </label>
                  <label class=\"radio-inline\"> ";
        // line 291
        if ( !($context["config_currency_auto"] ?? null)) {
            // line 292
            echo "                    <input type=\"radio\" name=\"config_currency_auto\" value=\"0\" checked=\"checked\" />
                    ";
            // line 293
            echo ($context["text_no"] ?? null);
            echo "
                    ";
        } else {
            // line 295
            echo "                    <input type=\"radio\" name=\"config_currency_auto\" value=\"0\" />
                    ";
            // line 296
            echo ($context["text_no"] ?? null);
            echo "
                    ";
        }
        // line 297
        echo " </label>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-length-class\">";
        // line 301
        echo ($context["entry_length_class"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <select name=\"config_length_class_id\" id=\"input-length-class\" class=\"form-control\">
                    
                    ";
        // line 305
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["length_classes"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["length_class"]) {
            // line 306
            echo "                    ";
            if ((twig_get_attribute($this->env, $this->source, $context["length_class"], "length_class_id", [], "any", false, false, false, 306) == ($context["config_length_class_id"] ?? null))) {
                // line 307
                echo "                    
                    <option value=\"";
                // line 308
                echo twig_get_attribute($this->env, $this->source, $context["length_class"], "length_class_id", [], "any", false, false, false, 308);
                echo "\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["length_class"], "title", [], "any", false, false, false, 308);
                echo "</option>
                    
                    ";
            } else {
                // line 311
                echo "                    
                    <option value=\"";
                // line 312
                echo twig_get_attribute($this->env, $this->source, $context["length_class"], "length_class_id", [], "any", false, false, false, 312);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["length_class"], "title", [], "any", false, false, false, 312);
                echo "</option>
                    
                    ";
            }
            // line 315
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['length_class'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 316
        echo "                  
                  </select>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-weight-class\">";
        // line 321
        echo ($context["entry_weight_class"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <select name=\"config_weight_class_id\" id=\"input-weight-class\" class=\"form-control\">
                    
                    ";
        // line 325
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["weight_classes"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["weight_class"]) {
            // line 326
            echo "                    ";
            if ((twig_get_attribute($this->env, $this->source, $context["weight_class"], "weight_class_id", [], "any", false, false, false, 326) == ($context["config_weight_class_id"] ?? null))) {
                // line 327
                echo "                    
                    <option value=\"";
                // line 328
                echo twig_get_attribute($this->env, $this->source, $context["weight_class"], "weight_class_id", [], "any", false, false, false, 328);
                echo "\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["weight_class"], "title", [], "any", false, false, false, 328);
                echo "</option>
                    
                    ";
            } else {
                // line 331
                echo "                    
                    <option value=\"";
                // line 332
                echo twig_get_attribute($this->env, $this->source, $context["weight_class"], "weight_class_id", [], "any", false, false, false, 332);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["weight_class"], "title", [], "any", false, false, false, 332);
                echo "</option>
                    
                    ";
            }
            // line 335
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['weight_class'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 336
        echo "                  
                  </select>
                </div>
              </div>
            </div>
            <div class=\"tab-pane\" id=\"tab-option\">
              <fieldset>
                <legend>";
        // line 343
        echo ($context["text_product"] ?? null);
        echo "</legend>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 345
        echo ($context["help_product_count"] ?? null);
        echo "\">";
        echo ($context["entry_product_count"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <label class=\"radio-inline\"> ";
        // line 347
        if (($context["config_product_count"] ?? null)) {
            // line 348
            echo "                      <input type=\"radio\" name=\"config_product_count\" value=\"1\" checked=\"checked\" />
                      ";
            // line 349
            echo ($context["text_yes"] ?? null);
            echo "
                      ";
        } else {
            // line 351
            echo "                      <input type=\"radio\" name=\"config_product_count\" value=\"1\" />
                      ";
            // line 352
            echo ($context["text_yes"] ?? null);
            echo "
                      ";
        }
        // line 353
        echo " </label>
                    <label class=\"radio-inline\"> ";
        // line 354
        if ( !($context["config_product_count"] ?? null)) {
            // line 355
            echo "                      <input type=\"radio\" name=\"config_product_count\" value=\"0\" checked=\"checked\" />
                      ";
            // line 356
            echo ($context["text_no"] ?? null);
            echo "
                      ";
        } else {
            // line 358
            echo "                      <input type=\"radio\" name=\"config_product_count\" value=\"0\" />
                      ";
            // line 359
            echo ($context["text_no"] ?? null);
            echo "
                      ";
        }
        // line 360
        echo " </label>
                  </div>
                </div>
                <div class=\"form-group required\">
                  <label class=\"col-sm-2 control-label\" for=\"input-admin-limit\"><span data-toggle=\"tooltip\" title=\"";
        // line 364
        echo ($context["help_limit_admin"] ?? null);
        echo "\">";
        echo ($context["entry_limit_admin"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"config_limit_admin\" value=\"";
        // line 366
        echo ($context["config_limit_admin"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_limit_admin"] ?? null);
        echo "\" id=\"input-admin-limit\" class=\"form-control\" />
                    ";
        // line 367
        if (($context["error_limit_admin"] ?? null)) {
            // line 368
            echo "                    <div class=\"text-danger\">";
            echo ($context["error_limit_admin"] ?? null);
            echo "</div>
                    ";
        }
        // line 369
        echo " </div>
                </div>
              </fieldset>
              <fieldset>
                <legend>";
        // line 373
        echo ($context["text_review"] ?? null);
        echo "</legend>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 375
        echo ($context["help_review"] ?? null);
        echo "\">";
        echo ($context["entry_review"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <label class=\"radio-inline\"> ";
        // line 377
        if (($context["config_review_status"] ?? null)) {
            // line 378
            echo "                      <input type=\"radio\" name=\"config_review_status\" value=\"1\" checked=\"checked\" />
                      ";
            // line 379
            echo ($context["text_yes"] ?? null);
            echo "
                      ";
        } else {
            // line 381
            echo "                      <input type=\"radio\" name=\"config_review_status\" value=\"1\" />
                      ";
            // line 382
            echo ($context["text_yes"] ?? null);
            echo "
                      ";
        }
        // line 383
        echo " </label>
                    <label class=\"radio-inline\"> ";
        // line 384
        if ( !($context["config_review_status"] ?? null)) {
            // line 385
            echo "                      <input type=\"radio\" name=\"config_review_status\" value=\"0\" checked=\"checked\" />
                      ";
            // line 386
            echo ($context["text_no"] ?? null);
            echo "
                      ";
        } else {
            // line 388
            echo "                      <input type=\"radio\" name=\"config_review_status\" value=\"0\" />
                      ";
            // line 389
            echo ($context["text_no"] ?? null);
            echo "
                      ";
        }
        // line 390
        echo " </label>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 394
        echo ($context["help_review_guest"] ?? null);
        echo "\">";
        echo ($context["entry_review_guest"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <label class=\"radio-inline\"> ";
        // line 396
        if (($context["config_review_guest"] ?? null)) {
            // line 397
            echo "                      <input type=\"radio\" name=\"config_review_guest\" value=\"1\" checked=\"checked\" />
                      ";
            // line 398
            echo ($context["text_yes"] ?? null);
            echo "
                      ";
        } else {
            // line 400
            echo "                      <input type=\"radio\" name=\"config_review_guest\" value=\"1\" />
                      ";
            // line 401
            echo ($context["text_yes"] ?? null);
            echo "
                      ";
        }
        // line 402
        echo " </label>
                    <label class=\"radio-inline\"> ";
        // line 403
        if ( !($context["config_review_guest"] ?? null)) {
            // line 404
            echo "                      <input type=\"radio\" name=\"config_review_guest\" value=\"0\" checked=\"checked\" />
                      ";
            // line 405
            echo ($context["text_no"] ?? null);
            echo "
                      ";
        } else {
            // line 407
            echo "                      <input type=\"radio\" name=\"config_review_guest\" value=\"0\" />
                      ";
            // line 408
            echo ($context["text_no"] ?? null);
            echo "
                      ";
        }
        // line 409
        echo " </label>
                  </div>
                </div>
              </fieldset>
              <fieldset>
                <legend>";
        // line 414
        echo ($context["text_voucher"] ?? null);
        echo "</legend>
                <div class=\"form-group required\">
                  <label class=\"col-sm-2 control-label\" for=\"input-voucher-min\"><span data-toggle=\"tooltip\" title=\"";
        // line 416
        echo ($context["help_voucher_min"] ?? null);
        echo "\">";
        echo ($context["entry_voucher_min"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"config_voucher_min\" value=\"";
        // line 418
        echo ($context["config_voucher_min"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_voucher_min"] ?? null);
        echo "\" id=\"input-voucher-min\" class=\"form-control\" />
                    ";
        // line 419
        if (($context["error_voucher_min"] ?? null)) {
            // line 420
            echo "                    <div class=\"text-danger\">";
            echo ($context["error_voucher_min"] ?? null);
            echo "</div>
                    ";
        }
        // line 421
        echo " </div>
                </div>
                <div class=\"form-group required\">
                  <label class=\"col-sm-2 control-label\" for=\"input-voucher-max\"><span data-toggle=\"tooltip\" title=\"";
        // line 424
        echo ($context["help_voucher_max"] ?? null);
        echo "\">";
        echo ($context["entry_voucher_max"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"config_voucher_max\" value=\"";
        // line 426
        echo ($context["config_voucher_max"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_voucher_max"] ?? null);
        echo "\" id=\"input-voucher-max\" class=\"form-control\" />
                    ";
        // line 427
        if (($context["error_voucher_max"] ?? null)) {
            // line 428
            echo "                    <div class=\"text-danger\">";
            echo ($context["error_voucher_max"] ?? null);
            echo "</div>
                    ";
        }
        // line 429
        echo " </div>
                </div>
              </fieldset>
              <fieldset>
                <legend>";
        // line 433
        echo ($context["text_tax"] ?? null);
        echo "</legend>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\">";
        // line 435
        echo ($context["entry_tax"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <label class=\"radio-inline\"> ";
        // line 437
        if (($context["config_tax"] ?? null)) {
            // line 438
            echo "                      <input type=\"radio\" name=\"config_tax\" value=\"1\" checked=\"checked\" />
                      ";
            // line 439
            echo ($context["text_yes"] ?? null);
            echo "
                      ";
        } else {
            // line 441
            echo "                      <input type=\"radio\" name=\"config_tax\" value=\"1\" />
                      ";
            // line 442
            echo ($context["text_yes"] ?? null);
            echo "
                      ";
        }
        // line 443
        echo " </label>
                    <label class=\"radio-inline\"> ";
        // line 444
        if ( !($context["config_tax"] ?? null)) {
            // line 445
            echo "                      <input type=\"radio\" name=\"config_tax\" value=\"0\" checked=\"checked\" />
                      ";
            // line 446
            echo ($context["text_no"] ?? null);
            echo "
                      ";
        } else {
            // line 448
            echo "                      <input type=\"radio\" name=\"config_tax\" value=\"0\" />
                      ";
            // line 449
            echo ($context["text_no"] ?? null);
            echo "
                      ";
        }
        // line 450
        echo " </label>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-tax-default\"><span data-toggle=\"tooltip\" title=\"";
        // line 454
        echo ($context["help_tax_default"] ?? null);
        echo "\">";
        echo ($context["entry_tax_default"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <select name=\"config_tax_default\" id=\"input-tax-default\" class=\"form-control\">
                      <option value=\"\">";
        // line 457
        echo ($context["text_none"] ?? null);
        echo "</option>
                      
                      ";
        // line 459
        if ((($context["config_tax_default"] ?? null) == "shipping")) {
            // line 460
            echo "                      
                      <option value=\"shipping\" selected=\"selected\">";
            // line 461
            echo ($context["text_shipping"] ?? null);
            echo "</option>
                      
                      ";
        } else {
            // line 464
            echo "                      
                      <option value=\"shipping\">";
            // line 465
            echo ($context["text_shipping"] ?? null);
            echo "</option>
                      
                      ";
        }
        // line 468
        echo "                      ";
        if ((($context["config_tax_default"] ?? null) == "payment")) {
            // line 469
            echo "                      
                      <option value=\"payment\" selected=\"selected\">";
            // line 470
            echo ($context["text_payment"] ?? null);
            echo "</option>
                      
                      ";
        } else {
            // line 473
            echo "                      
                      <option value=\"payment\">";
            // line 474
            echo ($context["text_payment"] ?? null);
            echo "</option>
                      
                      ";
        }
        // line 477
        echo "                    
                    </select>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-tax-customer\"><span data-toggle=\"tooltip\" title=\"";
        // line 482
        echo ($context["help_tax_customer"] ?? null);
        echo "\">";
        echo ($context["entry_tax_customer"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <select name=\"config_tax_customer\" id=\"input-tax-customer\" class=\"form-control\">
                      <option value=\"\">";
        // line 485
        echo ($context["text_none"] ?? null);
        echo "</option>
                      
                      ";
        // line 487
        if ((($context["config_tax_customer"] ?? null) == "shipping")) {
            // line 488
            echo "                      
                      <option value=\"shipping\" selected=\"selected\">";
            // line 489
            echo ($context["text_shipping"] ?? null);
            echo "</option>
                      
                      ";
        } else {
            // line 492
            echo "                      
                      <option value=\"shipping\">";
            // line 493
            echo ($context["text_shipping"] ?? null);
            echo "</option>
                      
                      ";
        }
        // line 496
        echo "                      ";
        if ((($context["config_tax_customer"] ?? null) == "payment")) {
            // line 497
            echo "                      
                      <option value=\"payment\" selected=\"selected\">";
            // line 498
            echo ($context["text_payment"] ?? null);
            echo "</option>
                      
                      ";
        } else {
            // line 501
            echo "                      
                      <option value=\"payment\">";
            // line 502
            echo ($context["text_payment"] ?? null);
            echo "</option>
                      
                      ";
        }
        // line 505
        echo "                    
                    </select>
                  </div>
                </div>
              </fieldset>
              <fieldset>
                <legend>";
        // line 511
        echo ($context["text_account"] ?? null);
        echo "</legend>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 513
        echo ($context["help_customer_online"] ?? null);
        echo "\">";
        echo ($context["entry_customer_online"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <label class=\"radio-inline\"> ";
        // line 515
        if (($context["config_customer_online"] ?? null)) {
            // line 516
            echo "                      <input type=\"radio\" name=\"config_customer_online\" value=\"1\" checked=\"checked\" />
                      ";
            // line 517
            echo ($context["text_yes"] ?? null);
            echo "
                      ";
        } else {
            // line 519
            echo "                      <input type=\"radio\" name=\"config_customer_online\" value=\"1\" />
                      ";
            // line 520
            echo ($context["text_yes"] ?? null);
            echo "
                      ";
        }
        // line 521
        echo " </label>
                    <label class=\"radio-inline\"> ";
        // line 522
        if ( !($context["config_customer_online"] ?? null)) {
            // line 523
            echo "                      <input type=\"radio\" name=\"config_customer_online\" value=\"0\" checked=\"checked\" />
                      ";
            // line 524
            echo ($context["text_no"] ?? null);
            echo "
                      ";
        } else {
            // line 526
            echo "                      <input type=\"radio\" name=\"config_customer_online\" value=\"0\" />
                      ";
            // line 527
            echo ($context["text_no"] ?? null);
            echo "
                      ";
        }
        // line 528
        echo " </label>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 532
        echo ($context["help_customer_activity"] ?? null);
        echo "\">";
        echo ($context["entry_customer_activity"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <label class=\"radio-inline\"> ";
        // line 534
        if (($context["config_customer_activity"] ?? null)) {
            // line 535
            echo "                      <input type=\"radio\" name=\"config_customer_activity\" value=\"1\" checked=\"checked\" />
                      ";
            // line 536
            echo ($context["text_yes"] ?? null);
            echo "
                      ";
        } else {
            // line 538
            echo "                      <input type=\"radio\" name=\"config_customer_activity\" value=\"1\" />
                      ";
            // line 539
            echo ($context["text_yes"] ?? null);
            echo "
                      ";
        }
        // line 540
        echo " </label>
                    <label class=\"radio-inline\"> ";
        // line 541
        if ( !($context["config_customer_activity"] ?? null)) {
            // line 542
            echo "                      <input type=\"radio\" name=\"config_customer_activity\" value=\"0\" checked=\"checked\" />
                      ";
            // line 543
            echo ($context["text_no"] ?? null);
            echo "
                      ";
        } else {
            // line 545
            echo "                      <input type=\"radio\" name=\"config_customer_activity\" value=\"0\" />
                      ";
            // line 546
            echo ($context["text_no"] ?? null);
            echo "
                      ";
        }
        // line 547
        echo " </label>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\">";
        // line 551
        echo ($context["entry_customer_search"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <label class=\"radio-inline\"> ";
        // line 553
        if (($context["config_customer_search"] ?? null)) {
            // line 554
            echo "                      <input type=\"radio\" name=\"config_customer_search\" value=\"1\" checked=\"checked\" />
                      ";
            // line 555
            echo ($context["text_yes"] ?? null);
            echo "
                      ";
        } else {
            // line 557
            echo "                      <input type=\"radio\" name=\"config_customer_search\" value=\"1\" />
                      ";
            // line 558
            echo ($context["text_yes"] ?? null);
            echo "
                      ";
        }
        // line 559
        echo " </label>
                    <label class=\"radio-inline\"> ";
        // line 560
        if ( !($context["config_customer_search"] ?? null)) {
            // line 561
            echo "                      <input type=\"radio\" name=\"config_customer_search\" value=\"0\" checked=\"checked\" />
                      ";
            // line 562
            echo ($context["text_no"] ?? null);
            echo "
                      ";
        } else {
            // line 564
            echo "                      <input type=\"radio\" name=\"config_customer_search\" value=\"0\" />
                      ";
            // line 565
            echo ($context["text_no"] ?? null);
            echo "
                      ";
        }
        // line 566
        echo " </label>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-customer-group\"><span data-toggle=\"tooltip\" title=\"";
        // line 570
        echo ($context["help_customer_group"] ?? null);
        echo "\">";
        echo ($context["entry_customer_group"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <select name=\"config_customer_group_id\" id=\"input-customer-group\" class=\"form-control\">
                      
                      ";
        // line 574
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["customer_groups"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["customer_group"]) {
            // line 575
            echo "                      ";
            if ((twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 575) == ($context["config_customer_group_id"] ?? null))) {
                // line 576
                echo "                      
                      <option value=\"";
                // line 577
                echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 577);
                echo "\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "name", [], "any", false, false, false, 577);
                echo "</option>
                      
                      ";
            } else {
                // line 580
                echo "                      
                      <option value=\"";
                // line 581
                echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 581);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "name", [], "any", false, false, false, 581);
                echo "</option>
                      
                      ";
            }
            // line 584
            echo "                      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['customer_group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 585
        echo "                    
                    </select>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 590
        echo ($context["help_customer_group_display"] ?? null);
        echo "\">";
        echo ($context["entry_customer_group_display"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\"> ";
        // line 591
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["customer_groups"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["customer_group"]) {
            // line 592
            echo "                    <div class=\"checkbox\">
                      <label> ";
            // line 593
            if (twig_in_filter(twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 593), ($context["config_customer_group_display"] ?? null))) {
                // line 594
                echo "                        <input type=\"checkbox\" name=\"config_customer_group_display[]\" value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 594);
                echo "\" checked=\"checked\" />
                        ";
                // line 595
                echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "name", [], "any", false, false, false, 595);
                echo "
                        ";
            } else {
                // line 597
                echo "                        <input type=\"checkbox\" name=\"config_customer_group_display[]\" value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 597);
                echo "\" />
                        ";
                // line 598
                echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "name", [], "any", false, false, false, 598);
                echo "
                        ";
            }
            // line 599
            echo " </label>
                    </div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['customer_group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 602
        echo "                    ";
        if (($context["error_customer_group_display"] ?? null)) {
            // line 603
            echo "                    <div class=\"text-danger\">";
            echo ($context["error_customer_group_display"] ?? null);
            echo "</div>
                    ";
        }
        // line 604
        echo " </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 607
        echo ($context["help_customer_price"] ?? null);
        echo "\">";
        echo ($context["entry_customer_price"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <label class=\"radio-inline\"> ";
        // line 609
        if (($context["config_customer_price"] ?? null)) {
            // line 610
            echo "                      <input type=\"radio\" name=\"config_customer_price\" value=\"1\" checked=\"checked\" />
                      ";
            // line 611
            echo ($context["text_yes"] ?? null);
            echo "
                      ";
        } else {
            // line 613
            echo "                      <input type=\"radio\" name=\"config_customer_price\" value=\"1\" />
                      ";
            // line 614
            echo ($context["text_yes"] ?? null);
            echo "
                      ";
        }
        // line 615
        echo " </label>
                    <label class=\"radio-inline\"> ";
        // line 616
        if ( !($context["config_customer_price"] ?? null)) {
            // line 617
            echo "                      <input type=\"radio\" name=\"config_customer_price\" value=\"0\" checked=\"checked\" />
                      ";
            // line 618
            echo ($context["text_no"] ?? null);
            echo "
                      ";
        } else {
            // line 620
            echo "                      <input type=\"radio\" name=\"config_customer_price\" value=\"0\" />
                      ";
            // line 621
            echo ($context["text_no"] ?? null);
            echo "
                      ";
        }
        // line 622
        echo " </label>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-login-attempts\"><span data-toggle=\"tooltip\" title=\"";
        // line 626
        echo ($context["help_login_attempts"] ?? null);
        echo "\">";
        echo ($context["entry_login_attempts"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"config_login_attempts\" value=\"";
        // line 628
        echo ($context["config_login_attempts"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_login_attempts"] ?? null);
        echo "\" id=\"input-login-attempts\" class=\"form-control\" />
                    ";
        // line 629
        if (($context["error_login_attempts"] ?? null)) {
            // line 630
            echo "                    <div class=\"text-danger\">";
            echo ($context["error_login_attempts"] ?? null);
            echo "</div>
                    ";
        }
        // line 631
        echo " </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-account\"><span data-toggle=\"tooltip\" title=\"";
        // line 634
        echo ($context["help_account"] ?? null);
        echo "\">";
        echo ($context["entry_account"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <select name=\"config_account_id\" id=\"input-account\" class=\"form-control\">
                      <option value=\"0\">";
        // line 637
        echo ($context["text_none"] ?? null);
        echo "</option>
                      
                      ";
        // line 639
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["informations"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["information"]) {
            // line 640
            echo "                      ";
            if ((twig_get_attribute($this->env, $this->source, $context["information"], "information_id", [], "any", false, false, false, 640) == ($context["config_account_id"] ?? null))) {
                // line 641
                echo "                      
                      <option value=\"";
                // line 642
                echo twig_get_attribute($this->env, $this->source, $context["information"], "information_id", [], "any", false, false, false, 642);
                echo "\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["information"], "title", [], "any", false, false, false, 642);
                echo "</option>
                      
                      ";
            } else {
                // line 645
                echo "                      
                      <option value=\"";
                // line 646
                echo twig_get_attribute($this->env, $this->source, $context["information"], "information_id", [], "any", false, false, false, 646);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["information"], "title", [], "any", false, false, false, 646);
                echo "</option>
                      
                      ";
            }
            // line 649
            echo "                      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['information'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 650
        echo "                    
                    </select>
                  </div>
                </div>
              </fieldset>
              <fieldset>
                <legend>";
        // line 656
        echo ($context["text_checkout"] ?? null);
        echo "</legend>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-invoice-prefix\"><span data-toggle=\"tooltip\" title=\"";
        // line 658
        echo ($context["help_invoice_prefix"] ?? null);
        echo "\">";
        echo ($context["entry_invoice_prefix"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"config_invoice_prefix\" value=\"";
        // line 660
        echo ($context["config_invoice_prefix"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_invoice_prefix"] ?? null);
        echo "\" id=\"input-invoice-prefix\" class=\"form-control\" />
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 664
        echo ($context["help_cart_weight"] ?? null);
        echo "\">";
        echo ($context["entry_cart_weight"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <label class=\"radio-inline\"> ";
        // line 666
        if (($context["config_cart_weight"] ?? null)) {
            // line 667
            echo "                      <input type=\"radio\" name=\"config_cart_weight\" value=\"1\" checked=\"checked\" />
                      ";
            // line 668
            echo ($context["text_yes"] ?? null);
            echo "
                      ";
        } else {
            // line 670
            echo "                      <input type=\"radio\" name=\"config_cart_weight\" value=\"1\" />
                      ";
            // line 671
            echo ($context["text_yes"] ?? null);
            echo "
                      ";
        }
        // line 672
        echo " </label>
                    <label class=\"radio-inline\"> ";
        // line 673
        if ( !($context["config_cart_weight"] ?? null)) {
            // line 674
            echo "                      <input type=\"radio\" name=\"config_cart_weight\" value=\"0\" checked=\"checked\" />
                      ";
            // line 675
            echo ($context["text_no"] ?? null);
            echo "
                      ";
        } else {
            // line 677
            echo "                      <input type=\"radio\" name=\"config_cart_weight\" value=\"0\" />
                      ";
            // line 678
            echo ($context["text_no"] ?? null);
            echo "
                      ";
        }
        // line 679
        echo " </label>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 683
        echo ($context["help_checkout_guest"] ?? null);
        echo "\">";
        echo ($context["entry_checkout_guest"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <label class=\"radio-inline\"> ";
        // line 685
        if (($context["config_checkout_guest"] ?? null)) {
            // line 686
            echo "                      <input type=\"radio\" name=\"config_checkout_guest\" value=\"1\" checked=\"checked\" />
                      ";
            // line 687
            echo ($context["text_yes"] ?? null);
            echo "
                      ";
        } else {
            // line 689
            echo "                      <input type=\"radio\" name=\"config_checkout_guest\" value=\"1\" />
                      ";
            // line 690
            echo ($context["text_yes"] ?? null);
            echo "
                      ";
        }
        // line 691
        echo " </label>
                    <label class=\"radio-inline\"> ";
        // line 692
        if ( !($context["config_checkout_guest"] ?? null)) {
            // line 693
            echo "                      <input type=\"radio\" name=\"config_checkout_guest\" value=\"0\" checked=\"checked\" />
                      ";
            // line 694
            echo ($context["text_no"] ?? null);
            echo "
                      ";
        } else {
            // line 696
            echo "                      <input type=\"radio\" name=\"config_checkout_guest\" value=\"0\" />
                      ";
            // line 697
            echo ($context["text_no"] ?? null);
            echo "
                      ";
        }
        // line 698
        echo " </label>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-checkout\"><span data-toggle=\"tooltip\" title=\"";
        // line 702
        echo ($context["help_checkout"] ?? null);
        echo "\">";
        echo ($context["entry_checkout"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <select name=\"config_checkout_id\" id=\"input-checkout\" class=\"form-control\">
                      <option value=\"0\">";
        // line 705
        echo ($context["text_none"] ?? null);
        echo "</option>
                      
                      ";
        // line 707
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["informations"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["information"]) {
            // line 708
            echo "                      ";
            if ((twig_get_attribute($this->env, $this->source, $context["information"], "information_id", [], "any", false, false, false, 708) == ($context["config_checkout_id"] ?? null))) {
                // line 709
                echo "                      
                      <option value=\"";
                // line 710
                echo twig_get_attribute($this->env, $this->source, $context["information"], "information_id", [], "any", false, false, false, 710);
                echo "\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["information"], "title", [], "any", false, false, false, 710);
                echo "</option>
                      
                      ";
            } else {
                // line 713
                echo "                      
                      <option value=\"";
                // line 714
                echo twig_get_attribute($this->env, $this->source, $context["information"], "information_id", [], "any", false, false, false, 714);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["information"], "title", [], "any", false, false, false, 714);
                echo "</option>
                      
                      ";
            }
            // line 717
            echo "                      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['information'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 718
        echo "                    
                    </select>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-order-status\"><span data-toggle=\"tooltip\" title=\"";
        // line 723
        echo ($context["help_order_status"] ?? null);
        echo "\">";
        echo ($context["entry_order_status"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <select name=\"config_order_status_id\" id=\"input-order-status\" class=\"form-control\">
                      
                      ";
        // line 727
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["order_statuses"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["order_status"]) {
            // line 728
            echo "                      ";
            if ((twig_get_attribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 728) == ($context["config_order_status_id"] ?? null))) {
                // line 729
                echo "                      
                      <option value=\"";
                // line 730
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 730);
                echo "\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "name", [], "any", false, false, false, 730);
                echo "</option>
                      
                      ";
            } else {
                // line 733
                echo "                      
                      <option value=\"";
                // line 734
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 734);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "name", [], "any", false, false, false, 734);
                echo "</option>
                      
                      ";
            }
            // line 737
            echo "                      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['order_status'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 738
        echo "                    
                    </select>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-process-status\"><span data-toggle=\"tooltip\" title=\"";
        // line 743
        echo ($context["help_processing_status"] ?? null);
        echo "\">";
        echo ($context["entry_processing_status"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <div class=\"well well-sm\" style=\"height: 150px; overflow: auto;\"> ";
        // line 745
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["order_statuses"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["order_status"]) {
            // line 746
            echo "                      <div class=\"checkbox\">
                        <label> ";
            // line 747
            if (twig_in_filter(twig_get_attribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 747), ($context["config_processing_status"] ?? null))) {
                // line 748
                echo "                          <input type=\"checkbox\" name=\"config_processing_status[]\" value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 748);
                echo "\" checked=\"checked\" />
                          ";
                // line 749
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "name", [], "any", false, false, false, 749);
                echo "
                          ";
            } else {
                // line 751
                echo "                          <input type=\"checkbox\" name=\"config_processing_status[]\" value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 751);
                echo "\" />
                          ";
                // line 752
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "name", [], "any", false, false, false, 752);
                echo "
                          ";
            }
            // line 753
            echo " </label>
                      </div>
                      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['order_status'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 755
        echo " </div>
                    ";
        // line 756
        if (($context["error_processing_status"] ?? null)) {
            // line 757
            echo "                    <div class=\"text-danger\">";
            echo ($context["error_processing_status"] ?? null);
            echo "</div>
                    ";
        }
        // line 758
        echo " </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-complete-status\"><span data-toggle=\"tooltip\" title=\"";
        // line 761
        echo ($context["help_complete_status"] ?? null);
        echo "\">";
        echo ($context["entry_complete_status"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <div class=\"well well-sm\" style=\"height: 150px; overflow: auto;\"> ";
        // line 763
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["order_statuses"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["order_status"]) {
            // line 764
            echo "                      <div class=\"checkbox\">
                        <label> ";
            // line 765
            if (twig_in_filter(twig_get_attribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 765), ($context["config_complete_status"] ?? null))) {
                // line 766
                echo "                          <input type=\"checkbox\" name=\"config_complete_status[]\" value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 766);
                echo "\" checked=\"checked\" />
                          ";
                // line 767
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "name", [], "any", false, false, false, 767);
                echo "
                          ";
            } else {
                // line 769
                echo "                          <input type=\"checkbox\" name=\"config_complete_status[]\" value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 769);
                echo "\" />
                          ";
                // line 770
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "name", [], "any", false, false, false, 770);
                echo "
                          ";
            }
            // line 771
            echo " </label>
                      </div>
                      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['order_status'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 773
        echo " </div>
                    ";
        // line 774
        if (($context["error_complete_status"] ?? null)) {
            // line 775
            echo "                    <div class=\"text-danger\">";
            echo ($context["error_complete_status"] ?? null);
            echo "</div>
                    ";
        }
        // line 776
        echo " </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-fraud-status\"><span data-toggle=\"tooltip\" title=\"";
        // line 779
        echo ($context["help_fraud_status"] ?? null);
        echo "\">";
        echo ($context["entry_fraud_status"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <select name=\"config_fraud_status_id\" id=\"input-fraud-status\" class=\"form-control\">
                      
                      ";
        // line 783
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["order_statuses"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["order_status"]) {
            // line 784
            echo "                      ";
            if ((twig_get_attribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 784) == ($context["config_fraud_status_id"] ?? null))) {
                // line 785
                echo "                      
                      <option value=\"";
                // line 786
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 786);
                echo "\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "name", [], "any", false, false, false, 786);
                echo "</option>
                      
                      ";
            } else {
                // line 789
                echo "                      
                      <option value=\"";
                // line 790
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 790);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "name", [], "any", false, false, false, 790);
                echo "</option>
                      
                      ";
            }
            // line 793
            echo "                      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['order_status'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 794
        echo "                    
                    </select>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-api\"><span data-toggle=\"tooltip\" title=\"";
        // line 799
        echo ($context["help_api"] ?? null);
        echo "\">";
        echo ($context["entry_api"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <select name=\"config_api_id\" id=\"input-api\" class=\"form-control\">
                      <option value=\"0\">";
        // line 802
        echo ($context["text_none"] ?? null);
        echo "</option>
                      
                      ";
        // line 804
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["apis"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["api"]) {
            // line 805
            echo "                      ";
            if ((twig_get_attribute($this->env, $this->source, $context["api"], "api_id", [], "any", false, false, false, 805) == ($context["config_api_id"] ?? null))) {
                // line 806
                echo "                      
                      <option value=\"";
                // line 807
                echo twig_get_attribute($this->env, $this->source, $context["api"], "api_id", [], "any", false, false, false, 807);
                echo "\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["api"], "username", [], "any", false, false, false, 807);
                echo "</option>
                      
                      ";
            } else {
                // line 810
                echo "                      
                      <option value=\"";
                // line 811
                echo twig_get_attribute($this->env, $this->source, $context["api"], "api_id", [], "any", false, false, false, 811);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["api"], "username", [], "any", false, false, false, 811);
                echo "</option>
                      
                      ";
            }
            // line 814
            echo "                      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['api'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 815
        echo "                    
                    </select>
                  </div>
                </div>
              </fieldset>
              <fieldset>
                <legend>";
        // line 821
        echo ($context["text_stock"] ?? null);
        echo "</legend>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 823
        echo ($context["help_stock_display"] ?? null);
        echo "\">";
        echo ($context["entry_stock_display"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <label class=\"radio-inline\"> ";
        // line 825
        if (($context["config_stock_display"] ?? null)) {
            // line 826
            echo "                      <input type=\"radio\" name=\"config_stock_display\" value=\"1\" checked=\"checked\" />
                      ";
            // line 827
            echo ($context["text_yes"] ?? null);
            echo "
                      ";
        } else {
            // line 829
            echo "                      <input type=\"radio\" name=\"config_stock_display\" value=\"1\" />
                      ";
            // line 830
            echo ($context["text_yes"] ?? null);
            echo "
                      ";
        }
        // line 831
        echo " </label>
                    <label class=\"radio-inline\"> ";
        // line 832
        if ( !($context["config_stock_display"] ?? null)) {
            // line 833
            echo "                      <input type=\"radio\" name=\"config_stock_display\" value=\"0\" checked=\"checked\" />
                      ";
            // line 834
            echo ($context["text_no"] ?? null);
            echo "
                      ";
        } else {
            // line 836
            echo "                      <input type=\"radio\" name=\"config_stock_display\" value=\"0\" />
                      ";
            // line 837
            echo ($context["text_no"] ?? null);
            echo "
                      ";
        }
        // line 838
        echo " </label>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 842
        echo ($context["help_stock_warning"] ?? null);
        echo "\">";
        echo ($context["entry_stock_warning"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <label class=\"radio-inline\"> ";
        // line 844
        if (($context["config_stock_warning"] ?? null)) {
            // line 845
            echo "                      <input type=\"radio\" name=\"config_stock_warning\" value=\"1\" checked=\"checked\" />
                      ";
            // line 846
            echo ($context["text_yes"] ?? null);
            echo "
                      ";
        } else {
            // line 848
            echo "                      <input type=\"radio\" name=\"config_stock_warning\" value=\"1\" />
                      ";
            // line 849
            echo ($context["text_yes"] ?? null);
            echo "
                      ";
        }
        // line 850
        echo " </label>
                    <label class=\"radio-inline\"> ";
        // line 851
        if ( !($context["config_stock_warning"] ?? null)) {
            // line 852
            echo "                      <input type=\"radio\" name=\"config_stock_warning\" value=\"0\" checked=\"checked\" />
                      ";
            // line 853
            echo ($context["text_no"] ?? null);
            echo "
                      ";
        } else {
            // line 855
            echo "                      <input type=\"radio\" name=\"config_stock_warning\" value=\"0\" />
                      ";
            // line 856
            echo ($context["text_no"] ?? null);
            echo "
                      ";
        }
        // line 857
        echo " </label>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 861
        echo ($context["help_stock_checkout"] ?? null);
        echo "\">";
        echo ($context["entry_stock_checkout"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <label class=\"radio-inline\"> ";
        // line 863
        if (($context["config_stock_checkout"] ?? null)) {
            // line 864
            echo "                      <input type=\"radio\" name=\"config_stock_checkout\" value=\"1\" checked=\"checked\" />
                      ";
            // line 865
            echo ($context["text_yes"] ?? null);
            echo "
                      ";
        } else {
            // line 867
            echo "                      <input type=\"radio\" name=\"config_stock_checkout\" value=\"1\" />
                      ";
            // line 868
            echo ($context["text_yes"] ?? null);
            echo "
                      ";
        }
        // line 869
        echo " </label>
                    <label class=\"radio-inline\"> ";
        // line 870
        if ( !($context["config_stock_checkout"] ?? null)) {
            // line 871
            echo "                      <input type=\"radio\" name=\"config_stock_checkout\" value=\"0\" checked=\"checked\" />
                      ";
            // line 872
            echo ($context["text_no"] ?? null);
            echo "
                      ";
        } else {
            // line 874
            echo "                      <input type=\"radio\" name=\"config_stock_checkout\" value=\"0\" />
                      ";
            // line 875
            echo ($context["text_no"] ?? null);
            echo "
                      ";
        }
        // line 876
        echo " </label>
                  </div>
                </div>
              </fieldset>
              <fieldset>
                <legend>";
        // line 881
        echo ($context["text_affiliate"] ?? null);
        echo "</legend>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-affiliate-group\">";
        // line 883
        echo ($context["entry_affiliate_group"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <select name=\"config_affiliate_group_id\" id=\"input-affiliate-group\" class=\"form-control\">
                      
                      ";
        // line 887
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["customer_groups"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["customer_group"]) {
            // line 888
            echo "                      ";
            if ((twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 888) == ($context["config_affiliate_group_id"] ?? null))) {
                // line 889
                echo "                      
                      <option value=\"";
                // line 890
                echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 890);
                echo "\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "name", [], "any", false, false, false, 890);
                echo "</option>
                      
                      ";
            } else {
                // line 893
                echo "                      
                      <option value=\"";
                // line 894
                echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 894);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "name", [], "any", false, false, false, 894);
                echo "</option>
                      
                      ";
            }
            // line 897
            echo "                      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['customer_group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 898
        echo "                    
                    </select>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 903
        echo ($context["help_affiliate_approval"] ?? null);
        echo "\">";
        echo ($context["entry_affiliate_approval"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <label class=\"radio-inline\"> ";
        // line 905
        if (($context["config_affiliate_approval"] ?? null)) {
            // line 906
            echo "                      <input type=\"radio\" name=\"config_affiliate_approval\" value=\"1\" checked=\"checked\" />
                      ";
            // line 907
            echo ($context["text_yes"] ?? null);
            echo "
                      ";
        } else {
            // line 909
            echo "                      <input type=\"radio\" name=\"config_affiliate_approval\" value=\"1\" />
                      ";
            // line 910
            echo ($context["text_yes"] ?? null);
            echo "
                      ";
        }
        // line 911
        echo " </label>
                    <label class=\"radio-inline\"> ";
        // line 912
        if ( !($context["config_affiliate_approval"] ?? null)) {
            // line 913
            echo "                      <input type=\"radio\" name=\"config_affiliate_approval\" value=\"0\" checked=\"checked\" />
                      ";
            // line 914
            echo ($context["text_no"] ?? null);
            echo "
                      ";
        } else {
            // line 916
            echo "                      <input type=\"radio\" name=\"config_affiliate_approval\" value=\"0\" />
                      ";
            // line 917
            echo ($context["text_no"] ?? null);
            echo "
                      ";
        }
        // line 918
        echo " </label>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 922
        echo ($context["help_affiliate_auto"] ?? null);
        echo "\">";
        echo ($context["entry_affiliate_auto"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <label class=\"radio-inline\"> ";
        // line 924
        if (($context["config_affiliate_auto"] ?? null)) {
            // line 925
            echo "                      <input type=\"radio\" name=\"config_affiliate_auto\" value=\"1\" checked=\"checked\" />
                      ";
            // line 926
            echo ($context["text_yes"] ?? null);
            echo "
                      ";
        } else {
            // line 928
            echo "                      <input type=\"radio\" name=\"config_affiliate_auto\" value=\"1\" />
                      ";
            // line 929
            echo ($context["text_yes"] ?? null);
            echo "
                      ";
        }
        // line 930
        echo " </label>
                    <label class=\"radio-inline\"> ";
        // line 931
        if ( !($context["config_affiliate_auto"] ?? null)) {
            // line 932
            echo "                      <input type=\"radio\" name=\"config_affiliate_auto\" value=\"0\" checked=\"checked\" />
                      ";
            // line 933
            echo ($context["text_no"] ?? null);
            echo "
                      ";
        } else {
            // line 935
            echo "                      <input type=\"radio\" name=\"config_affiliate_auto\" value=\"0\" />
                      ";
            // line 936
            echo ($context["text_no"] ?? null);
            echo "
                      ";
        }
        // line 937
        echo " </label>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-affiliate-commission\"><span data-toggle=\"tooltip\" title=\"";
        // line 941
        echo ($context["help_affiliate_commission"] ?? null);
        echo "\">";
        echo ($context["entry_affiliate_commission"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"config_affiliate_commission\" value=\"";
        // line 943
        echo ($context["config_affiliate_commission"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_affiliate_commission"] ?? null);
        echo "\" id=\"input-affiliate-commission\" class=\"form-control\" />
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-affiliate\"><span data-toggle=\"tooltip\" title=\"";
        // line 947
        echo ($context["help_affiliate"] ?? null);
        echo "\">";
        echo ($context["entry_affiliate"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <select name=\"config_affiliate_id\" id=\"input-affiliate\" class=\"form-control\">
                      <option value=\"0\">";
        // line 950
        echo ($context["text_none"] ?? null);
        echo "</option>
                      
                      ";
        // line 952
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["informations"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["information"]) {
            // line 953
            echo "                      ";
            if ((twig_get_attribute($this->env, $this->source, $context["information"], "information_id", [], "any", false, false, false, 953) == ($context["config_affiliate_id"] ?? null))) {
                // line 954
                echo "                      
                      <option value=\"";
                // line 955
                echo twig_get_attribute($this->env, $this->source, $context["information"], "information_id", [], "any", false, false, false, 955);
                echo "\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["information"], "title", [], "any", false, false, false, 955);
                echo "</option>
                      
                      ";
            } else {
                // line 958
                echo "                      
                      <option value=\"";
                // line 959
                echo twig_get_attribute($this->env, $this->source, $context["information"], "information_id", [], "any", false, false, false, 959);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["information"], "title", [], "any", false, false, false, 959);
                echo "</option>
                      
                      ";
            }
            // line 962
            echo "                      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['information'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 963
        echo "                    
                    </select>
                  </div>
                </div>
              </fieldset>
              <fieldset>
                <legend>";
        // line 969
        echo ($context["text_return"] ?? null);
        echo "</legend>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-return\"><span data-toggle=\"tooltip\" title=\"";
        // line 971
        echo ($context["help_return"] ?? null);
        echo "\">";
        echo ($context["entry_return"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <select name=\"config_return_id\" id=\"input-return\" class=\"form-control\">
                      <option value=\"0\">";
        // line 974
        echo ($context["text_none"] ?? null);
        echo "</option>
                      
                      ";
        // line 976
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["informations"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["information"]) {
            // line 977
            echo "                      ";
            if ((twig_get_attribute($this->env, $this->source, $context["information"], "information_id", [], "any", false, false, false, 977) == ($context["config_return_id"] ?? null))) {
                // line 978
                echo "                      
                      <option value=\"";
                // line 979
                echo twig_get_attribute($this->env, $this->source, $context["information"], "information_id", [], "any", false, false, false, 979);
                echo "\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["information"], "title", [], "any", false, false, false, 979);
                echo "</option>
                      
                      ";
            } else {
                // line 982
                echo "                      
                      <option value=\"";
                // line 983
                echo twig_get_attribute($this->env, $this->source, $context["information"], "information_id", [], "any", false, false, false, 983);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["information"], "title", [], "any", false, false, false, 983);
                echo "</option>
                      
                      ";
            }
            // line 986
            echo "                      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['information'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 987
        echo "                    
                    </select>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-return-status\"><span data-toggle=\"tooltip\" title=\"";
        // line 992
        echo ($context["help_return_status"] ?? null);
        echo "\">";
        echo ($context["entry_return_status"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <select name=\"config_return_status_id\" id=\"input-return-status\" class=\"form-control\">
                      
                      ";
        // line 996
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["return_statuses"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["return_status"]) {
            // line 997
            echo "                      ";
            if ((twig_get_attribute($this->env, $this->source, $context["return_status"], "return_status_id", [], "any", false, false, false, 997) == ($context["config_return_status_id"] ?? null))) {
                // line 998
                echo "                      
                      <option value=\"";
                // line 999
                echo twig_get_attribute($this->env, $this->source, $context["return_status"], "return_status_id", [], "any", false, false, false, 999);
                echo "\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["return_status"], "name", [], "any", false, false, false, 999);
                echo "</option>
                      
                      ";
            } else {
                // line 1002
                echo "                      
                      <option value=\"";
                // line 1003
                echo twig_get_attribute($this->env, $this->source, $context["return_status"], "return_status_id", [], "any", false, false, false, 1003);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["return_status"], "name", [], "any", false, false, false, 1003);
                echo "</option>
                      
                      ";
            }
            // line 1006
            echo "                      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['return_status'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1007
        echo "                    
                    </select>
                  </div>
                </div>
              </fieldset>
              <fieldset>
                <legend>";
        // line 1013
        echo ($context["text_captcha"] ?? null);
        echo "</legend>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 1015
        echo ($context["help_captcha"] ?? null);
        echo "\">";
        echo ($context["entry_captcha"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <select name=\"config_captcha\" id=\"input-captcha\" class=\"form-control\">
                      <option value=\"\">";
        // line 1018
        echo ($context["text_none"] ?? null);
        echo "</option>
                      
                      ";
        // line 1020
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["captchas"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["captcha"]) {
            // line 1021
            echo "                      ";
            if ((twig_get_attribute($this->env, $this->source, $context["captcha"], "value", [], "any", false, false, false, 1021) == ($context["config_captcha"] ?? null))) {
                // line 1022
                echo "                      
                      <option value=\"";
                // line 1023
                echo twig_get_attribute($this->env, $this->source, $context["captcha"], "value", [], "any", false, false, false, 1023);
                echo "\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["captcha"], "text", [], "any", false, false, false, 1023);
                echo "</option>
                      
                      ";
            } else {
                // line 1026
                echo "                      
                      <option value=\"";
                // line 1027
                echo twig_get_attribute($this->env, $this->source, $context["captcha"], "value", [], "any", false, false, false, 1027);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["captcha"], "text", [], "any", false, false, false, 1027);
                echo "</option>
                      
                      ";
            }
            // line 1030
            echo "                      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['captcha'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1031
        echo "                    
                    </select>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\">";
        // line 1036
        echo ($context["entry_captcha_page"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <div class=\"well well-sm\" style=\"height: 150px; overflow: auto;\"> ";
        // line 1038
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["captcha_pages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["captcha_page"]) {
            // line 1039
            echo "                      <div class=\"checkbox\">
                        <label> ";
            // line 1040
            if (twig_in_filter(twig_get_attribute($this->env, $this->source, $context["captcha_page"], "value", [], "any", false, false, false, 1040), ($context["config_captcha_page"] ?? null))) {
                // line 1041
                echo "                          <input type=\"checkbox\" name=\"config_captcha_page[]\" value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["captcha_page"], "value", [], "any", false, false, false, 1041);
                echo "\" checked=\"checked\" />
                          ";
                // line 1042
                echo twig_get_attribute($this->env, $this->source, $context["captcha_page"], "text", [], "any", false, false, false, 1042);
                echo "
                          ";
            } else {
                // line 1044
                echo "                          <input type=\"checkbox\" name=\"config_captcha_page[]\" value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["captcha_page"], "value", [], "any", false, false, false, 1044);
                echo "\" />
                          ";
                // line 1045
                echo twig_get_attribute($this->env, $this->source, $context["captcha_page"], "text", [], "any", false, false, false, 1045);
                echo "
                          ";
            }
            // line 1046
            echo " </label>
                      </div>
                      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['captcha_page'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1048
        echo " </div>
                  </div>
                </div>
              </fieldset>
            </div>
            <div class=\"tab-pane\" id=\"tab-image\">
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-logo\">";
        // line 1055
        echo ($context["entry_logo"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\"><a href=\"\" id=\"thumb-logo\" data-toggle=\"image\" class=\"img-thumbnail\"><img src=\"";
        // line 1056
        echo ($context["logo"] ?? null);
        echo "\" alt=\"\" title=\"\" data-placeholder=\"";
        echo ($context["placeholder"] ?? null);
        echo "\" /></a>
                  <input type=\"hidden\" name=\"config_logo\" value=\"";
        // line 1057
        echo ($context["config_logo"] ?? null);
        echo "\" id=\"input-logo\" />
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-icon\"><span data-toggle=\"tooltip\" title=\"";
        // line 1061
        echo ($context["help_icon"] ?? null);
        echo "\">";
        echo ($context["entry_icon"] ?? null);
        echo "</span></label>
                <div class=\"col-sm-10\"><a href=\"\" id=\"thumb-icon\" data-toggle=\"image\" class=\"img-thumbnail\"><img src=\"";
        // line 1062
        echo ($context["icon"] ?? null);
        echo "\" alt=\"\" title=\"\" data-placeholder=\"";
        echo ($context["placeholder"] ?? null);
        echo "\" /></a>
                  <input type=\"hidden\" name=\"config_icon\" value=\"";
        // line 1063
        echo ($context["config_icon"] ?? null);
        echo "\" id=\"input-icon\" />
                </div>
              </div>
            </div>
            <div class=\"tab-pane\" id=\"tab-mail\">
              <fieldset>
                <legend>";
        // line 1069
        echo ($context["text_general"] ?? null);
        echo "</legend>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-mail-engine\"><span data-toggle=\"tooltip\" title=\"";
        // line 1071
        echo ($context["help_mail_engine"] ?? null);
        echo "\">";
        echo ($context["entry_mail_engine"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <select name=\"config_mail_engine\" id=\"input-mail-engine\" class=\"form-control\">
                      
                      ";
        // line 1075
        if ((($context["config_mail_engine"] ?? null) == "mail")) {
            // line 1076
            echo "                      
                      <option value=\"mail\" selected=\"selected\">";
            // line 1077
            echo ($context["text_mail"] ?? null);
            echo "</option>
                      
                      ";
        } else {
            // line 1080
            echo "                      
                      <option value=\"mail\">";
            // line 1081
            echo ($context["text_mail"] ?? null);
            echo "</option>
                      
                      ";
        }
        // line 1084
        echo "                      ";
        if ((($context["config_mail_engine"] ?? null) == "smtp")) {
            // line 1085
            echo "                      
                      <option value=\"smtp\" selected=\"selected\">";
            // line 1086
            echo ($context["text_smtp"] ?? null);
            echo "</option>
                      
                      ";
        } else {
            // line 1089
            echo "                      
                      <option value=\"smtp\">";
            // line 1090
            echo ($context["text_smtp"] ?? null);
            echo "</option>
                      
                      ";
        }
        // line 1093
        echo "                    
                    </select>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-mail-parameter\"><span data-toggle=\"tooltip\" title=\"";
        // line 1098
        echo ($context["help_mail_parameter"] ?? null);
        echo "\">";
        echo ($context["entry_mail_parameter"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"config_mail_parameter\" value=\"";
        // line 1100
        echo ($context["config_mail_parameter"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_mail_parameter"] ?? null);
        echo "\" id=\"input-mail-parameter\" class=\"form-control\" />
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-mail-smtp-hostname\"><span data-toggle=\"tooltip\" title=\"";
        // line 1104
        echo ($context["help_mail_smtp_hostname"] ?? null);
        echo "\">";
        echo ($context["entry_mail_smtp_hostname"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"config_mail_smtp_hostname\" value=\"";
        // line 1106
        echo ($context["config_mail_smtp_hostname"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_mail_smtp_hostname"] ?? null);
        echo "\" id=\"input-mail-smtp-hostname\" class=\"form-control\" />
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-mail-smtp-username\">";
        // line 1110
        echo ($context["entry_mail_smtp_username"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"config_mail_smtp_username\" value=\"";
        // line 1112
        echo ($context["config_mail_smtp_username"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_mail_smtp_username"] ?? null);
        echo "\" id=\"input-mail-smtp-username\" class=\"form-control\" />
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-mail-smtp-password\"><span data-toggle=\"tooltip\" title=\"";
        // line 1116
        echo ($context["help_mail_smtp_password"] ?? null);
        echo "\">";
        echo ($context["entry_mail_smtp_password"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"config_mail_smtp_password\" value=\"";
        // line 1118
        echo ($context["config_mail_smtp_password"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_mail_smtp_password"] ?? null);
        echo "\" id=\"input-mail-smtp-password\" class=\"form-control\" />
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-mail-smtp-port\">";
        // line 1122
        echo ($context["entry_mail_smtp_port"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"config_mail_smtp_port\" value=\"";
        // line 1124
        echo ($context["config_mail_smtp_port"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_mail_smtp_port"] ?? null);
        echo "\" id=\"input-mail-smtp-port\" class=\"form-control\" />
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-mail-smtp-timeout\">";
        // line 1128
        echo ($context["entry_mail_smtp_timeout"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"config_mail_smtp_timeout\" value=\"";
        // line 1130
        echo ($context["config_mail_smtp_timeout"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_mail_smtp_timeout"] ?? null);
        echo "\" id=\"input-mail-smtp-timeout\" class=\"form-control\" />
                  </div>
                </div>
              </fieldset>
              <fieldset>
                <legend>";
        // line 1135
        echo ($context["text_mail_alert"] ?? null);
        echo "</legend>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 1137
        echo ($context["help_mail_alert"] ?? null);
        echo "\">";
        echo ($context["entry_mail_alert"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <div class=\"well well-sm\" style=\"height: 150px; overflow: auto;\"> ";
        // line 1139
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["mail_alerts"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["mail_alert"]) {
            // line 1140
            echo "                      <div class=\"checkbox\">
                        <label> ";
            // line 1141
            if (twig_in_filter(twig_get_attribute($this->env, $this->source, $context["mail_alert"], "value", [], "any", false, false, false, 1141), ($context["config_mail_alert"] ?? null))) {
                // line 1142
                echo "                          <input type=\"checkbox\" name=\"config_mail_alert[]\" value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["mail_alert"], "value", [], "any", false, false, false, 1142);
                echo "\" checked=\"checked\" />
                          ";
                // line 1143
                echo twig_get_attribute($this->env, $this->source, $context["mail_alert"], "text", [], "any", false, false, false, 1143);
                echo "
                          ";
            } else {
                // line 1145
                echo "                          <input type=\"checkbox\" name=\"config_mail_alert[]\" value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["mail_alert"], "value", [], "any", false, false, false, 1145);
                echo "\" />
                          ";
                // line 1146
                echo twig_get_attribute($this->env, $this->source, $context["mail_alert"], "text", [], "any", false, false, false, 1146);
                echo "
                          ";
            }
            // line 1147
            echo " </label>
                      </div>
                      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['mail_alert'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1149
        echo " </div>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-mail-alert-email\"><span data-toggle=\"tooltip\" title=\"";
        // line 1153
        echo ($context["help_mail_alert_email"] ?? null);
        echo "\">";
        echo ($context["entry_mail_alert_email"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <textarea name=\"config_mail_alert_email\" rows=\"5\" placeholder=\"";
        // line 1155
        echo ($context["entry_mail_alert_email"] ?? null);
        echo "\" id=\"input-alert-email\" class=\"form-control\">";
        echo ($context["config_mail_alert_email"] ?? null);
        echo "</textarea>
                  </div>
                </div>
              </fieldset>
            </div>
            <div class=\"tab-pane\" id=\"tab-server\">
              <fieldset>
                <legend>";
        // line 1162
        echo ($context["text_general"] ?? null);
        echo "</legend>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 1164
        echo ($context["help_maintenance"] ?? null);
        echo "\">";
        echo ($context["entry_maintenance"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <label class=\"radio-inline\"> ";
        // line 1166
        if (($context["config_maintenance"] ?? null)) {
            // line 1167
            echo "                      <input type=\"radio\" name=\"config_maintenance\" value=\"1\" checked=\"checked\" />
                      ";
            // line 1168
            echo ($context["text_yes"] ?? null);
            echo "
                      ";
        } else {
            // line 1170
            echo "                      <input type=\"radio\" name=\"config_maintenance\" value=\"1\" />
                      ";
            // line 1171
            echo ($context["text_yes"] ?? null);
            echo "
                      ";
        }
        // line 1172
        echo " </label>
                    <label class=\"radio-inline\"> ";
        // line 1173
        if ( !($context["config_maintenance"] ?? null)) {
            // line 1174
            echo "                      <input type=\"radio\" name=\"config_maintenance\" value=\"0\" checked=\"checked\" />
                      ";
            // line 1175
            echo ($context["text_no"] ?? null);
            echo "
                      ";
        } else {
            // line 1177
            echo "                      <input type=\"radio\" name=\"config_maintenance\" value=\"0\" />
                      ";
            // line 1178
            echo ($context["text_no"] ?? null);
            echo "
                      ";
        }
        // line 1179
        echo " </label>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 1183
        echo ($context["help_seo_url"] ?? null);
        echo "\">";
        echo ($context["entry_seo_url"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <label class=\"radio-inline\"> ";
        // line 1185
        if (($context["config_seo_url"] ?? null)) {
            // line 1186
            echo "                      <input type=\"radio\" name=\"config_seo_url\" value=\"1\" checked=\"checked\" />
                      ";
            // line 1187
            echo ($context["text_yes"] ?? null);
            echo "
                      ";
        } else {
            // line 1189
            echo "                      <input type=\"radio\" name=\"config_seo_url\" value=\"1\" />
                      ";
            // line 1190
            echo ($context["text_yes"] ?? null);
            echo "
                      ";
        }
        // line 1191
        echo " </label>
                    <label class=\"radio-inline\"> ";
        // line 1192
        if ( !($context["config_seo_url"] ?? null)) {
            // line 1193
            echo "                      <input type=\"radio\" name=\"config_seo_url\" value=\"0\" checked=\"checked\" />
                      ";
            // line 1194
            echo ($context["text_no"] ?? null);
            echo "
                      ";
        } else {
            // line 1196
            echo "                      <input type=\"radio\" name=\"config_seo_url\" value=\"0\" />
                      ";
            // line 1197
            echo ($context["text_no"] ?? null);
            echo "
                      ";
        }
        // line 1198
        echo " </label>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-robots\"><span data-toggle=\"tooltip\" title=\"";
        // line 1202
        echo ($context["help_robots"] ?? null);
        echo "\">";
        echo ($context["entry_robots"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <textarea name=\"config_robots\" rows=\"5\" placeholder=\"";
        // line 1204
        echo ($context["entry_robots"] ?? null);
        echo "\" id=\"input-robots\" class=\"form-control\">";
        echo ($context["config_robots"] ?? null);
        echo "</textarea>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-compression\"><span data-toggle=\"tooltip\" title=\"";
        // line 1208
        echo ($context["help_compression"] ?? null);
        echo "\">";
        echo ($context["entry_compression"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"config_compression\" value=\"";
        // line 1210
        echo ($context["config_compression"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_compression"] ?? null);
        echo "\" id=\"input-compression\" class=\"form-control\" />
                  </div>
                </div>
              </fieldset>
              <fieldset>
                <legend>";
        // line 1215
        echo ($context["text_security"] ?? null);
        echo "</legend>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 1217
        echo ($context["help_secure"] ?? null);
        echo "\">";
        echo ($context["entry_secure"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <label class=\"radio-inline\"> ";
        // line 1219
        if (($context["config_secure"] ?? null)) {
            // line 1220
            echo "                      <input type=\"radio\" name=\"config_secure\" value=\"1\" checked=\"checked\" />
                      ";
            // line 1221
            echo ($context["text_yes"] ?? null);
            echo "
                      ";
        } else {
            // line 1223
            echo "                      <input type=\"radio\" name=\"config_secure\" value=\"1\" />
                      ";
            // line 1224
            echo ($context["text_yes"] ?? null);
            echo "
                      ";
        }
        // line 1225
        echo " </label>
                    <label class=\"radio-inline\"> ";
        // line 1226
        if ( !($context["config_secure"] ?? null)) {
            // line 1227
            echo "                      <input type=\"radio\" name=\"config_secure\" value=\"0\" checked=\"checked\" />
                      ";
            // line 1228
            echo ($context["text_no"] ?? null);
            echo "
                      ";
        } else {
            // line 1230
            echo "                      <input type=\"radio\" name=\"config_secure\" value=\"0\" />
                      ";
            // line 1231
            echo ($context["text_no"] ?? null);
            echo "
                      ";
        }
        // line 1232
        echo " </label>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 1236
        echo ($context["help_password"] ?? null);
        echo "\">";
        echo ($context["entry_password"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <label class=\"radio-inline\"> ";
        // line 1238
        if (($context["config_password"] ?? null)) {
            // line 1239
            echo "                      <input type=\"radio\" name=\"config_password\" value=\"1\" checked=\"checked\" />
                      ";
            // line 1240
            echo ($context["text_yes"] ?? null);
            echo "
                      ";
        } else {
            // line 1242
            echo "                      <input type=\"radio\" name=\"config_password\" value=\"1\" />
                      ";
            // line 1243
            echo ($context["text_yes"] ?? null);
            echo "
                      ";
        }
        // line 1244
        echo " </label>
                    <label class=\"radio-inline\"> ";
        // line 1245
        if ( !($context["config_password"] ?? null)) {
            // line 1246
            echo "                      <input type=\"radio\" name=\"config_password\" value=\"0\" checked=\"checked\" />
                      ";
            // line 1247
            echo ($context["text_no"] ?? null);
            echo "
                      ";
        } else {
            // line 1249
            echo "                      <input type=\"radio\" name=\"config_password\" value=\"0\" />
                      ";
            // line 1250
            echo ($context["text_no"] ?? null);
            echo "
                      ";
        }
        // line 1251
        echo " </label>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 1255
        echo ($context["help_shared"] ?? null);
        echo "\">";
        echo ($context["entry_shared"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <label class=\"radio-inline\"> ";
        // line 1257
        if (($context["config_shared"] ?? null)) {
            // line 1258
            echo "                      <input type=\"radio\" name=\"config_shared\" value=\"1\" checked=\"checked\" />
                      ";
            // line 1259
            echo ($context["text_yes"] ?? null);
            echo "
                      ";
        } else {
            // line 1261
            echo "                      <input type=\"radio\" name=\"config_shared\" value=\"1\" />
                      ";
            // line 1262
            echo ($context["text_yes"] ?? null);
            echo "
                      ";
        }
        // line 1263
        echo " </label>
                    <label class=\"radio-inline\"> ";
        // line 1264
        if ( !($context["config_shared"] ?? null)) {
            // line 1265
            echo "                      <input type=\"radio\" name=\"config_shared\" value=\"0\" checked=\"checked\" />
                      ";
            // line 1266
            echo ($context["text_no"] ?? null);
            echo "
                      ";
        } else {
            // line 1268
            echo "                      <input type=\"radio\" name=\"config_shared\" value=\"0\" />
                      ";
            // line 1269
            echo ($context["text_no"] ?? null);
            echo "
                      ";
        }
        // line 1270
        echo " </label>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-encryption\"><span data-toggle=\"tooltip\" title=\"";
        // line 1274
        echo ($context["help_encryption"] ?? null);
        echo "\">";
        echo ($context["entry_encryption"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <textarea name=\"config_encryption\" rows=\"5\" placeholder=\"";
        // line 1276
        echo ($context["entry_encryption"] ?? null);
        echo "\" id=\"input-encryption\" class=\"form-control\">";
        echo ($context["config_encryption"] ?? null);
        echo "</textarea>
                    ";
        // line 1277
        if (($context["error_encryption"] ?? null)) {
            // line 1278
            echo "                    <div class=\"text-danger\">";
            echo ($context["error_encryption"] ?? null);
            echo "</div>
                    ";
        }
        // line 1279
        echo " </div>
                </div>
              </fieldset>
              <fieldset>
                <legend>";
        // line 1283
        echo ($context["text_upload"] ?? null);
        echo "</legend>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-file-max-size\"><span data-toggle=\"tooltip\" title=\"";
        // line 1285
        echo ($context["help_file_max_size"] ?? null);
        echo "\">";
        echo ($context["entry_file_max_size"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"config_file_max_size\" value=\"";
        // line 1287
        echo ($context["config_file_max_size"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_file_max_size"] ?? null);
        echo "\" id=\"input-file-max-size\" class=\"form-control\" />
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-file-ext-allowed\"><span data-toggle=\"tooltip\" title=\"";
        // line 1291
        echo ($context["help_file_ext_allowed"] ?? null);
        echo "\">";
        echo ($context["entry_file_ext_allowed"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <textarea name=\"config_file_ext_allowed\" rows=\"5\" placeholder=\"";
        // line 1293
        echo ($context["entry_file_ext_allowed"] ?? null);
        echo "\" id=\"input-file-ext-allowed\" class=\"form-control\">";
        echo ($context["config_file_ext_allowed"] ?? null);
        echo "</textarea>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-file-mime-allowed\"><span data-toggle=\"tooltip\" title=\"";
        // line 1297
        echo ($context["help_file_mime_allowed"] ?? null);
        echo "\">";
        echo ($context["entry_file_mime_allowed"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <textarea name=\"config_file_mime_allowed\" rows=\"5\" placeholder=\"";
        // line 1299
        echo ($context["entry_file_mime_allowed"] ?? null);
        echo "\" id=\"input-file-mime-allowed\" class=\"form-control\">";
        echo ($context["config_file_mime_allowed"] ?? null);
        echo "</textarea>
                  </div>
                </div>
              </fieldset>
              <fieldset>
                <legend>";
        // line 1304
        echo ($context["text_error"] ?? null);
        echo "</legend>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\">";
        // line 1306
        echo ($context["entry_error_display"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <label class=\"radio-inline\"> ";
        // line 1308
        if (($context["config_error_display"] ?? null)) {
            // line 1309
            echo "                      <input type=\"radio\" name=\"config_error_display\" value=\"1\" checked=\"checked\" />
                      ";
            // line 1310
            echo ($context["text_yes"] ?? null);
            echo "
                      ";
        } else {
            // line 1312
            echo "                      <input type=\"radio\" name=\"config_error_display\" value=\"1\" />
                      ";
            // line 1313
            echo ($context["text_yes"] ?? null);
            echo "
                      ";
        }
        // line 1314
        echo " </label>
                    <label class=\"radio-inline\"> ";
        // line 1315
        if ( !($context["config_error_display"] ?? null)) {
            // line 1316
            echo "                      <input type=\"radio\" name=\"config_error_display\" value=\"0\" checked=\"checked\" />
                      ";
            // line 1317
            echo ($context["text_no"] ?? null);
            echo "
                      ";
        } else {
            // line 1319
            echo "                      <input type=\"radio\" name=\"config_error_display\" value=\"0\" />
                      ";
            // line 1320
            echo ($context["text_no"] ?? null);
            echo "
                      ";
        }
        // line 1321
        echo " </label>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\">";
        // line 1325
        echo ($context["entry_error_log"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <label class=\"radio-inline\"> ";
        // line 1327
        if (($context["config_error_log"] ?? null)) {
            // line 1328
            echo "                      <input type=\"radio\" name=\"config_error_log\" value=\"1\" checked=\"checked\" />
                      ";
            // line 1329
            echo ($context["text_yes"] ?? null);
            echo "
                      ";
        } else {
            // line 1331
            echo "                      <input type=\"radio\" name=\"config_error_log\" value=\"1\" />
                      ";
            // line 1332
            echo ($context["text_yes"] ?? null);
            echo "
                      ";
        }
        // line 1333
        echo " </label>
                    <label class=\"radio-inline\"> ";
        // line 1334
        if ( !($context["config_error_log"] ?? null)) {
            // line 1335
            echo "                      <input type=\"radio\" name=\"config_error_log\" value=\"0\" checked=\"checked\" />
                      ";
            // line 1336
            echo ($context["text_no"] ?? null);
            echo "
                      ";
        } else {
            // line 1338
            echo "                      <input type=\"radio\" name=\"config_error_log\" value=\"0\" />
                      ";
            // line 1339
            echo ($context["text_no"] ?? null);
            echo "
                      ";
        }
        // line 1340
        echo "</label>
                  </div>
                </div>
                <div class=\"form-group required\">
                  <label class=\"col-sm-2 control-label\" for=\"input-error-filename\">";
        // line 1344
        echo ($context["entry_error_filename"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"config_error_filename\" value=\"";
        // line 1346
        echo ($context["config_error_filename"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_error_filename"] ?? null);
        echo "\" id=\"input-error-filename\" class=\"form-control\" />
                    ";
        // line 1347
        if (($context["error_log"] ?? null)) {
            // line 1348
            echo "                    <div class=\"text-danger\">";
            echo ($context["error_log"] ?? null);
            echo "</div>
                    ";
        }
        // line 1349
        echo " </div>
                </div>
              </fieldset>              
            </div>";
        // line 1355
        echo "              <div class=\"tab-pane\" id=\"tab-wallet\">
              <fieldset>
                  <legend>";
        // line 1357
        echo ($context["text_reward_rate"] ?? null);
        echo "</legend>
                  <div class=\"form-group required\">
                    <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 1359
        echo ($context["help_reward_set"] ?? null);
        echo "\">";
        echo ($context["entry_value_count"] ?? null);
        echo "</span></label>
                    <div id=\"add_more\" class=\"col-sm-10\">
                      <div>
                          <select class=\"form-control-reward\" name=\"select_name[]\">
                            <option value=\"1\" >";
        // line 1363
        echo ($context["text_percent"] ?? null);
        echo "</option>
                            <option value=\"2\" >";
        // line 1364
        echo ($context["text_fixed"] ?? null);
        echo "</option>
                          </select>
                          <input type=\"text\" value=\"\" name=\"min_amount\" placeholder=\"";
        // line 1366
        echo ($context["text_min"] ?? null);
        echo "\" class=\"form-control-reward\"/>
                          <input type=\"text\" value=\"\" name=\"max_amount\" placeholder=\"";
        // line 1367
        echo ($context["text_max"] ?? null);
        echo "\" class=\"form-control-reward\"/>
                          <input type=\"text\" value=\"\" name=\"percentage_value\" placeholder=\"";
        // line 1368
        echo ($context["text_percents"] ?? null);
        echo "\" class=\"form-control-reward\"/>
                          <input type=\"text\" value=\"\" name=\"fixed_value\"  placeholder=\"";
        // line 1369
        echo ($context["text_fix"] ?? null);
        echo "\" class=\"form-control-reward\"/>            
                      </div>
                       <div>
                          <button type=\"button\" id=\"add\" class=\"btn btn-primary\"><i class=\"fa fa-plus\"></i></button>
                       </div>
                    </div>
                  </div>
              </fieldset>
              <fieldset>
                  <legend>";
        // line 1378
        echo ($context["entry_reward_point"] ?? null);
        echo "</legend>
                  <div class=\"form-group required\">
                      <label class=\"col-sm-2 control-label\" for=\"input-reward-point\">";
        // line 1380
        echo ($context["entry_reward_point"] ?? null);
        echo "</label>
                        <div class=\"col-sm-10\">
                            <input type=\"text\" name=\"config_reward_point\" value=\"";
        // line 1382
        echo ($context["config_reward_point"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_reward_point"] ?? null);
        echo "\" id=\"input-reward-point\" class=\"form-control\" />
                            ";
        // line 1383
        if (($context["error_reward_point"] ?? null)) {
            // line 1384
            echo "                            <div class=\"text-danger\">";
            echo ($context["error_reward_point"] ?? null);
            echo "</div>
                            ";
        }
        // line 1385
        echo " 
                        </div>
                  </div>
              </fieldset>
            </div>
            
          </div>
        </form>
      </div>
    </div>
  </div>
  <script type=\"text/javascript\"><!--
\$('select[name=\\'config_theme\\']').on('change', function() {
\t\$.ajax({
\t\turl: 'index.php?route=setting/setting/theme&user_token=";
        // line 1399
        echo ($context["user_token"] ?? null);
        echo "&theme=' + this.value,
\t\tdataType: 'html',
\t\tbeforeSend: function() {
\t\t\t\$('select[name=\\'config_theme\\']').prop('disabled', true);
\t\t},
\t\tcomplete: function() {
\t\t\t\$('select[name=\\'config_theme\\']').prop('disabled', false);
\t\t},
\t\tsuccess: function(html) {
\t\t\t\$('#theme').attr('src', html);
\t\t},
\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t}
\t});
});

\$('select[name=\\'config_theme\\']').trigger('change');
//--></script> 
  <script type=\"text/javascript\"><!--
\$('select[name=\\'config_country_id\\']').on('change', function() {
\t\$.ajax({
\t\turl: 'index.php?route=localisation/country/country&user_token=";
        // line 1421
        echo ($context["user_token"] ?? null);
        echo "&country_id=' + this.value,
\t\tdataType: 'json',
\t\tbeforeSend: function() {
\t\t\t\$('select[name=\\'config_country_id\\']').prop('disabled', true);
\t\t},
\t\tcomplete: function() {
\t\t\t\$('select[name=\\'config_country_id\\']').prop('disabled', false);
\t\t},
\t\tsuccess: function(json) {
\t\t\thtml = '<option value=\"\">";
        // line 1430
        echo ($context["text_select"] ?? null);
        echo "</option>';

\t\t\tif (json['zone'] && json['zone'] != '') {
\t\t\t\tfor (i = 0; i < json['zone'].length; i++) {
          \t\t\thtml += '<option value=\"' + json['zone'][i]['zone_id'] + '\"';

\t\t\t\t\tif (json['zone'][i]['zone_id'] == '";
        // line 1436
        echo ($context["config_zone_id"] ?? null);
        echo "') {
            \t\t\thtml += ' selected=\"selected\"';
\t\t\t\t\t}

\t\t\t\t\thtml += '>' + json['zone'][i]['name'] + '</option>';
\t\t\t\t}
\t\t\t} else {
\t\t\t\thtml += '<option value=\"0\" selected=\"selected\">";
        // line 1443
        echo ($context["text_none"] ?? null);
        echo "</option>';
\t\t\t}

\t\t\t\$('select[name=\\'config_zone_id\\']').html(html);
\t\t\t
\t\t\t\$('#button-save').prop('disabled', false);
\t\t},
\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t}
\t});
});

\$('select[name=\\'config_country_id\\']').trigger('change');
//--></script>
<script type=\"text/javascript\"><!--
\$(document).ready(function() {
     \$(\"#add\").click(function(){
       \$(\"#add_more\").append( '<div>'+
          '<select class=\"form-control-reward\" name=\"select_name[]\">'+
              '<option value=\"\">";
        // line 1463
        echo ($context["text_percent"] ?? null);
        echo "</option>'+
              '<option value=\"\">";
        // line 1464
        echo ($context["text_fixed"] ?? null);
        echo "</option>'+
          '</select>'+
              '<input type=\"text\" value=\"\" name=\"min_value[]\" placeholder=\"";
        // line 1466
        echo ($context["text_min"] ?? null);
        echo "\" id=\"\" class=\"form-control-reward\"/>'+
              '<input type=\"\" value=\"\" name=\"max_value[]\" placeholder=\"";
        // line 1467
        echo ($context["text_max"] ?? null);
        echo "\" id=\"\" class=\"form-control-reward\"/>'+
              '<input type=\"text\" name=\"percent_value[]\" value=\"\" placeholder=\"";
        // line 1468
        echo ($context["text_percents"] ?? null);
        echo "\" id=\"\" class=\"form-control-reward\"/>'+
              '<input type=\"text\" name=\"fixed_value[]\" value=\"\" placeholder=\"";
        // line 1469
        echo ($context["text_fix"] ?? null);
        echo "\" id=\"\" class=\"form-control-reward\"/>'+ 
            '</div>');
   });
});


//--></script>
</div>
";
        // line 1477
        echo ($context["footer"] ?? null);
        echo " 
";
    }

    public function getTemplateName()
    {
        return "setting/setting.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  3806 => 1477,  3795 => 1469,  3791 => 1468,  3787 => 1467,  3783 => 1466,  3778 => 1464,  3774 => 1463,  3751 => 1443,  3741 => 1436,  3732 => 1430,  3720 => 1421,  3695 => 1399,  3679 => 1385,  3673 => 1384,  3671 => 1383,  3665 => 1382,  3660 => 1380,  3655 => 1378,  3643 => 1369,  3639 => 1368,  3635 => 1367,  3631 => 1366,  3626 => 1364,  3622 => 1363,  3613 => 1359,  3608 => 1357,  3604 => 1355,  3599 => 1349,  3593 => 1348,  3591 => 1347,  3585 => 1346,  3580 => 1344,  3574 => 1340,  3569 => 1339,  3566 => 1338,  3561 => 1336,  3558 => 1335,  3556 => 1334,  3553 => 1333,  3548 => 1332,  3545 => 1331,  3540 => 1329,  3537 => 1328,  3535 => 1327,  3530 => 1325,  3524 => 1321,  3519 => 1320,  3516 => 1319,  3511 => 1317,  3508 => 1316,  3506 => 1315,  3503 => 1314,  3498 => 1313,  3495 => 1312,  3490 => 1310,  3487 => 1309,  3485 => 1308,  3480 => 1306,  3475 => 1304,  3465 => 1299,  3458 => 1297,  3449 => 1293,  3442 => 1291,  3433 => 1287,  3426 => 1285,  3421 => 1283,  3415 => 1279,  3409 => 1278,  3407 => 1277,  3401 => 1276,  3394 => 1274,  3388 => 1270,  3383 => 1269,  3380 => 1268,  3375 => 1266,  3372 => 1265,  3370 => 1264,  3367 => 1263,  3362 => 1262,  3359 => 1261,  3354 => 1259,  3351 => 1258,  3349 => 1257,  3342 => 1255,  3336 => 1251,  3331 => 1250,  3328 => 1249,  3323 => 1247,  3320 => 1246,  3318 => 1245,  3315 => 1244,  3310 => 1243,  3307 => 1242,  3302 => 1240,  3299 => 1239,  3297 => 1238,  3290 => 1236,  3284 => 1232,  3279 => 1231,  3276 => 1230,  3271 => 1228,  3268 => 1227,  3266 => 1226,  3263 => 1225,  3258 => 1224,  3255 => 1223,  3250 => 1221,  3247 => 1220,  3245 => 1219,  3238 => 1217,  3233 => 1215,  3223 => 1210,  3216 => 1208,  3207 => 1204,  3200 => 1202,  3194 => 1198,  3189 => 1197,  3186 => 1196,  3181 => 1194,  3178 => 1193,  3176 => 1192,  3173 => 1191,  3168 => 1190,  3165 => 1189,  3160 => 1187,  3157 => 1186,  3155 => 1185,  3148 => 1183,  3142 => 1179,  3137 => 1178,  3134 => 1177,  3129 => 1175,  3126 => 1174,  3124 => 1173,  3121 => 1172,  3116 => 1171,  3113 => 1170,  3108 => 1168,  3105 => 1167,  3103 => 1166,  3096 => 1164,  3091 => 1162,  3079 => 1155,  3072 => 1153,  3066 => 1149,  3058 => 1147,  3053 => 1146,  3048 => 1145,  3043 => 1143,  3038 => 1142,  3036 => 1141,  3033 => 1140,  3029 => 1139,  3022 => 1137,  3017 => 1135,  3007 => 1130,  3002 => 1128,  2993 => 1124,  2988 => 1122,  2979 => 1118,  2972 => 1116,  2963 => 1112,  2958 => 1110,  2949 => 1106,  2942 => 1104,  2933 => 1100,  2926 => 1098,  2919 => 1093,  2913 => 1090,  2910 => 1089,  2904 => 1086,  2901 => 1085,  2898 => 1084,  2892 => 1081,  2889 => 1080,  2883 => 1077,  2880 => 1076,  2878 => 1075,  2869 => 1071,  2864 => 1069,  2855 => 1063,  2849 => 1062,  2843 => 1061,  2836 => 1057,  2830 => 1056,  2826 => 1055,  2817 => 1048,  2809 => 1046,  2804 => 1045,  2799 => 1044,  2794 => 1042,  2789 => 1041,  2787 => 1040,  2784 => 1039,  2780 => 1038,  2775 => 1036,  2768 => 1031,  2762 => 1030,  2754 => 1027,  2751 => 1026,  2743 => 1023,  2740 => 1022,  2737 => 1021,  2733 => 1020,  2728 => 1018,  2720 => 1015,  2715 => 1013,  2707 => 1007,  2701 => 1006,  2693 => 1003,  2690 => 1002,  2682 => 999,  2679 => 998,  2676 => 997,  2672 => 996,  2663 => 992,  2656 => 987,  2650 => 986,  2642 => 983,  2639 => 982,  2631 => 979,  2628 => 978,  2625 => 977,  2621 => 976,  2616 => 974,  2608 => 971,  2603 => 969,  2595 => 963,  2589 => 962,  2581 => 959,  2578 => 958,  2570 => 955,  2567 => 954,  2564 => 953,  2560 => 952,  2555 => 950,  2547 => 947,  2538 => 943,  2531 => 941,  2525 => 937,  2520 => 936,  2517 => 935,  2512 => 933,  2509 => 932,  2507 => 931,  2504 => 930,  2499 => 929,  2496 => 928,  2491 => 926,  2488 => 925,  2486 => 924,  2479 => 922,  2473 => 918,  2468 => 917,  2465 => 916,  2460 => 914,  2457 => 913,  2455 => 912,  2452 => 911,  2447 => 910,  2444 => 909,  2439 => 907,  2436 => 906,  2434 => 905,  2427 => 903,  2420 => 898,  2414 => 897,  2406 => 894,  2403 => 893,  2395 => 890,  2392 => 889,  2389 => 888,  2385 => 887,  2378 => 883,  2373 => 881,  2366 => 876,  2361 => 875,  2358 => 874,  2353 => 872,  2350 => 871,  2348 => 870,  2345 => 869,  2340 => 868,  2337 => 867,  2332 => 865,  2329 => 864,  2327 => 863,  2320 => 861,  2314 => 857,  2309 => 856,  2306 => 855,  2301 => 853,  2298 => 852,  2296 => 851,  2293 => 850,  2288 => 849,  2285 => 848,  2280 => 846,  2277 => 845,  2275 => 844,  2268 => 842,  2262 => 838,  2257 => 837,  2254 => 836,  2249 => 834,  2246 => 833,  2244 => 832,  2241 => 831,  2236 => 830,  2233 => 829,  2228 => 827,  2225 => 826,  2223 => 825,  2216 => 823,  2211 => 821,  2203 => 815,  2197 => 814,  2189 => 811,  2186 => 810,  2178 => 807,  2175 => 806,  2172 => 805,  2168 => 804,  2163 => 802,  2155 => 799,  2148 => 794,  2142 => 793,  2134 => 790,  2131 => 789,  2123 => 786,  2120 => 785,  2117 => 784,  2113 => 783,  2104 => 779,  2099 => 776,  2093 => 775,  2091 => 774,  2088 => 773,  2080 => 771,  2075 => 770,  2070 => 769,  2065 => 767,  2060 => 766,  2058 => 765,  2055 => 764,  2051 => 763,  2044 => 761,  2039 => 758,  2033 => 757,  2031 => 756,  2028 => 755,  2020 => 753,  2015 => 752,  2010 => 751,  2005 => 749,  2000 => 748,  1998 => 747,  1995 => 746,  1991 => 745,  1984 => 743,  1977 => 738,  1971 => 737,  1963 => 734,  1960 => 733,  1952 => 730,  1949 => 729,  1946 => 728,  1942 => 727,  1933 => 723,  1926 => 718,  1920 => 717,  1912 => 714,  1909 => 713,  1901 => 710,  1898 => 709,  1895 => 708,  1891 => 707,  1886 => 705,  1878 => 702,  1872 => 698,  1867 => 697,  1864 => 696,  1859 => 694,  1856 => 693,  1854 => 692,  1851 => 691,  1846 => 690,  1843 => 689,  1838 => 687,  1835 => 686,  1833 => 685,  1826 => 683,  1820 => 679,  1815 => 678,  1812 => 677,  1807 => 675,  1804 => 674,  1802 => 673,  1799 => 672,  1794 => 671,  1791 => 670,  1786 => 668,  1783 => 667,  1781 => 666,  1774 => 664,  1765 => 660,  1758 => 658,  1753 => 656,  1745 => 650,  1739 => 649,  1731 => 646,  1728 => 645,  1720 => 642,  1717 => 641,  1714 => 640,  1710 => 639,  1705 => 637,  1697 => 634,  1692 => 631,  1686 => 630,  1684 => 629,  1678 => 628,  1671 => 626,  1665 => 622,  1660 => 621,  1657 => 620,  1652 => 618,  1649 => 617,  1647 => 616,  1644 => 615,  1639 => 614,  1636 => 613,  1631 => 611,  1628 => 610,  1626 => 609,  1619 => 607,  1614 => 604,  1608 => 603,  1605 => 602,  1597 => 599,  1592 => 598,  1587 => 597,  1582 => 595,  1577 => 594,  1575 => 593,  1572 => 592,  1568 => 591,  1562 => 590,  1555 => 585,  1549 => 584,  1541 => 581,  1538 => 580,  1530 => 577,  1527 => 576,  1524 => 575,  1520 => 574,  1511 => 570,  1505 => 566,  1500 => 565,  1497 => 564,  1492 => 562,  1489 => 561,  1487 => 560,  1484 => 559,  1479 => 558,  1476 => 557,  1471 => 555,  1468 => 554,  1466 => 553,  1461 => 551,  1455 => 547,  1450 => 546,  1447 => 545,  1442 => 543,  1439 => 542,  1437 => 541,  1434 => 540,  1429 => 539,  1426 => 538,  1421 => 536,  1418 => 535,  1416 => 534,  1409 => 532,  1403 => 528,  1398 => 527,  1395 => 526,  1390 => 524,  1387 => 523,  1385 => 522,  1382 => 521,  1377 => 520,  1374 => 519,  1369 => 517,  1366 => 516,  1364 => 515,  1357 => 513,  1352 => 511,  1344 => 505,  1338 => 502,  1335 => 501,  1329 => 498,  1326 => 497,  1323 => 496,  1317 => 493,  1314 => 492,  1308 => 489,  1305 => 488,  1303 => 487,  1298 => 485,  1290 => 482,  1283 => 477,  1277 => 474,  1274 => 473,  1268 => 470,  1265 => 469,  1262 => 468,  1256 => 465,  1253 => 464,  1247 => 461,  1244 => 460,  1242 => 459,  1237 => 457,  1229 => 454,  1223 => 450,  1218 => 449,  1215 => 448,  1210 => 446,  1207 => 445,  1205 => 444,  1202 => 443,  1197 => 442,  1194 => 441,  1189 => 439,  1186 => 438,  1184 => 437,  1179 => 435,  1174 => 433,  1168 => 429,  1162 => 428,  1160 => 427,  1154 => 426,  1147 => 424,  1142 => 421,  1136 => 420,  1134 => 419,  1128 => 418,  1121 => 416,  1116 => 414,  1109 => 409,  1104 => 408,  1101 => 407,  1096 => 405,  1093 => 404,  1091 => 403,  1088 => 402,  1083 => 401,  1080 => 400,  1075 => 398,  1072 => 397,  1070 => 396,  1063 => 394,  1057 => 390,  1052 => 389,  1049 => 388,  1044 => 386,  1041 => 385,  1039 => 384,  1036 => 383,  1031 => 382,  1028 => 381,  1023 => 379,  1020 => 378,  1018 => 377,  1011 => 375,  1006 => 373,  1000 => 369,  994 => 368,  992 => 367,  986 => 366,  979 => 364,  973 => 360,  968 => 359,  965 => 358,  960 => 356,  957 => 355,  955 => 354,  952 => 353,  947 => 352,  944 => 351,  939 => 349,  936 => 348,  934 => 347,  927 => 345,  922 => 343,  913 => 336,  907 => 335,  899 => 332,  896 => 331,  888 => 328,  885 => 327,  882 => 326,  878 => 325,  871 => 321,  864 => 316,  858 => 315,  850 => 312,  847 => 311,  839 => 308,  836 => 307,  833 => 306,  829 => 305,  822 => 301,  816 => 297,  811 => 296,  808 => 295,  803 => 293,  800 => 292,  798 => 291,  795 => 290,  790 => 289,  787 => 288,  782 => 286,  779 => 285,  777 => 284,  770 => 282,  763 => 277,  757 => 276,  749 => 273,  746 => 272,  738 => 269,  735 => 268,  732 => 267,  728 => 266,  719 => 262,  712 => 257,  706 => 256,  698 => 253,  695 => 252,  687 => 249,  684 => 248,  681 => 247,  677 => 246,  670 => 242,  663 => 237,  657 => 236,  649 => 233,  646 => 232,  638 => 229,  635 => 228,  632 => 227,  628 => 226,  621 => 222,  611 => 215,  604 => 210,  598 => 209,  590 => 206,  587 => 205,  579 => 202,  576 => 201,  573 => 200,  569 => 199,  562 => 195,  557 => 192,  552 => 190,  544 => 188,  539 => 187,  534 => 186,  529 => 184,  524 => 183,  522 => 182,  519 => 181,  515 => 180,  509 => 179,  506 => 178,  504 => 177,  496 => 174,  489 => 172,  480 => 168,  473 => 166,  466 => 162,  460 => 161,  456 => 160,  447 => 156,  442 => 154,  437 => 151,  431 => 150,  429 => 149,  423 => 148,  418 => 146,  413 => 143,  407 => 142,  405 => 141,  399 => 140,  394 => 138,  385 => 134,  378 => 132,  373 => 129,  367 => 128,  365 => 127,  359 => 126,  354 => 124,  349 => 121,  343 => 120,  341 => 119,  335 => 118,  330 => 116,  325 => 113,  319 => 112,  317 => 111,  311 => 110,  306 => 108,  297 => 101,  291 => 100,  283 => 97,  280 => 96,  272 => 93,  269 => 92,  266 => 91,  262 => 90,  255 => 86,  247 => 80,  241 => 79,  233 => 76,  230 => 75,  222 => 72,  219 => 71,  216 => 70,  212 => 69,  205 => 65,  196 => 61,  191 => 59,  182 => 55,  177 => 53,  172 => 50,  166 => 49,  164 => 48,  158 => 47,  153 => 45,  145 => 40,  141 => 39,  137 => 38,  133 => 37,  129 => 36,  125 => 35,  121 => 34,  117 => 33,  112 => 31,  106 => 28,  102 => 26,  94 => 22,  91 => 21,  83 => 17,  81 => 16,  76 => 13,  65 => 11,  61 => 10,  56 => 8,  50 => 7,  46 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "setting/setting.twig", "/opt/lampp/htdocs/protidin/admin/view/template/setting/setting.twig");
    }
}
