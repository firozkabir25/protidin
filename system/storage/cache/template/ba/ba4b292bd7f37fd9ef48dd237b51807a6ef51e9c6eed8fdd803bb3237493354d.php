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

/* extension/soconfig/layout_form.twig */
class __TwigTemplate_5d0efb08d414f225a965553d9f57abc01d46fc3d403405c71833376fc8e5ab18 extends \Twig\Template
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
        $context["homeLayout"] = ["1" => "Home Layout1", "2" => "Home Layout2", "3" => "Home Layout3", "4" => "Home Layout4"];
        // line 7
        echo "
";
        // line 8
        echo ($context["header"] ?? null);
        echo ($context["column_left"] ?? null);
        echo "
<div id=\"content\">
  <div class=\"page-header\">
    <div class=\"container-fluid\">
      <div class=\"pull-right\">
        <button type=\"submit\" form=\"form-layout\" data-toggle=\"tooltip\" title=\"";
        // line 13
        echo ($context["button_save"] ?? null);
        echo "\" class=\"btn btn-primary\"><i class=\"fa fa-save\"></i></button>
        <a href=\"";
        // line 14
        echo ($context["cancel"] ?? null);
        echo "\" data-toggle=\"tooltip\" title=\"";
        echo ($context["button_cancel"] ?? null);
        echo "\" class=\"btn btn-default\"><i class=\"fa fa-reply\"></i></a></div>
      <h1>";
        // line 15
        echo ($context["heading_title"] ?? null);
        echo "</h1>
      <ul class=\"breadcrumb\">
        ";
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 18
            echo "        <li><a href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 18);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 18);
            echo "</a></li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 20
        echo "      </ul>
    </div>
  </div>
  <div class=\"container-fluid\">
    ";
        // line 24
        if (($context["error_warning"] ?? null)) {
            // line 25
            echo "    <div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ";
            echo ($context["error_warning"] ?? null);
            echo "
      <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
    </div>
    ";
        }
        // line 29
        echo "    <div class=\"panel panel-default\">
      <div class=\"panel-heading\">
        <h3 class=\"panel-title\"><i class=\"fa fa-pencil\"></i> ";
        // line 31
        echo ($context["text_form"] ?? null);
        echo "</h3>
      </div>
      <div class=\"panel-body\">
        <form action=\"";
        // line 34
        echo ($context["action"] ?? null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-layout\" class=\"form-horizontal\">
          <fieldset>
            <legend>";
        // line 36
        echo ($context["text_route"] ?? null);
        echo "</legend>
            <div class=\"form-group required\">
              <label class=\"col-sm-2 control-label\" for=\"input-name\">";
        // line 38
        echo ($context["entry_name"] ?? null);
        echo "</label>
              <div class=\"col-sm-10\">
                <input type=\"text\" name=\"name\" value=\"";
        // line 40
        echo ($context["name"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_name"] ?? null);
        echo "\" id=\"input-name\" class=\"form-control\" />
                ";
        // line 41
        if (($context["error_name"] ?? null)) {
            // line 42
            echo "                <div class=\"text-danger\">";
            echo ($context["error_name"] ?? null);
            echo "</div>
                ";
        }
        // line 44
        echo "              </div>
            </div>
            <table id=\"route\" class=\"table table-striped table-bordered table-hover\">
              <thead>
                <tr>
                  <td class=\"text-left\">";
        // line 49
        echo ($context["entry_store"] ?? null);
        echo "</td>
                  <td class=\"text-left\">";
        // line 50
        echo ($context["entry_route"] ?? null);
        echo "</td>
                  <td></td>
                </tr>
              </thead>
              <tbody>

                ";
        // line 56
        $context["route_row"] = 0;
        // line 57
        echo "\t\t\t\t        
                ";
        // line 58
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["layout_routes"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["layout_route"]) {
            // line 59
            echo "                <tr id=\"route-row";
            echo ($context["route_row"] ?? null);
            echo "\">
                  <td class=\"text-left\"><select name=\"layout_route[";
            // line 60
            echo ($context["route_row"] ?? null);
            echo "][store_id]\" class=\"form-control\">
                      <option value=\"0\">";
            // line 61
            echo ($context["text_default"] ?? null);
            echo "</option>
                      ";
            // line 62
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["stores"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["store"]) {
                // line 63
                echo "                      ";
                if ((twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 63) == twig_get_attribute($this->env, $this->source, $context["layout_route"], "store_id", [], "any", false, false, false, 63))) {
                    // line 64
                    echo "                      <option value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 64);
                    echo "\" selected=\"selected\">";
                    echo twig_get_attribute($this->env, $this->source, $context["store"], "name", [], "any", false, false, false, 64);
                    echo "</option>
                      ";
                } else {
                    // line 66
                    echo "                      <option value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 66);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["store"], "name", [], "any", false, false, false, 66);
                    echo "</option>
                      ";
                }
                // line 68
                echo "                      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['store'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 69
            echo "                    </select></td>
                  <td class=\"text-left\"><input type=\"text\" name=\"layout_route[";
            // line 70
            echo ($context["route_row"] ?? null);
            echo "][route]\" value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["layout_route"], "route", [], "any", false, false, false, 70);
            echo "\" placeholder=\"";
            echo ($context["entry_route"] ?? null);
            echo "\" class=\"form-control\" /></td>
                  <td class=\"text-left\"><button type=\"button\" onclick=\"\$('#route-row";
            // line 71
            echo ($context["route_row"] ?? null);
            echo "').remove();\" data-toggle=\"tooltip\" title=\"";
            echo ($context["button_remove"] ?? null);
            echo "\" class=\"btn btn-danger\"><i class=\"fa fa-minus-circle\"></i></button></td>
                </tr>
                ";
            // line 73
            $context["route_row"] = (($context["route_row"] ?? null) + 1);
            // line 74
            echo "                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['layout_route'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 75
        echo "
              </tbody>
              <tfoot>
                <tr>
                  <td colspan=\"2\"></td>
                  <td class=\"text-left\"><button type=\"button\" onclick=\"addRoute();\" data-toggle=\"tooltip\" title=\"";
        // line 80
        echo ($context["button_route_add"] ?? null);
        echo "\" class=\"btn btn-primary\"><i class=\"fa fa-plus-circle\"></i></button></td>
                </tr>
              </tfoot>
            </table>
          </fieldset>

          <fieldset>
            <legend>";
        // line 87
        echo ($context["text_module"] ?? null);
        echo "</legend>
            
            ";
        // line 89
        $context["module_row"] = 0;
        // line 90
        echo "            
            <div class=\"bs-callout bs-callout-info\" id=\"callout-alerts-no-default\"> <h4>Content Header</h4> </div>
            <div class=\"well\"> 
                <div class=\"row\">
                    ";
        // line 95
        echo "                    <div class=\"col-lg-12 col-md-12 col-sm-12\"> 
                        ";
        // line 96
        echo twig_get_attribute($this->env, $this->source, ($context["fields"] ?? null), "create_position", [0 => "Header Block", 1 => "header_block", 2 => ($context["layout_modules"] ?? null), 3 => ($context["extensions"] ?? null), 4 => ($context["module_row"] ?? null)], "method", false, false, false, 96);
        echo "                 
                    </div>
                    <div class=\"col-lg-4 col-md-4 col-sm-12\"> 
                        <pre><h2 class=\"text-center\">Logo</h2></pre>
                    </div>

                    <div class=\"col-lg-4 col-md-4 col-sm-12\">
                        ";
        // line 103
        echo twig_get_attribute($this->env, $this->source, ($context["fields"] ?? null), "create_position", [0 => "Search Block", 1 => "search_block", 2 => ($context["layout_modules"] ?? null), 3 => ($context["extensions"] ?? null), 4 => ($context["module_row"] ?? null)], "method", false, false, false, 103);
        echo "
                    </div>

                    <div class=\"col-lg-4 col-md-4 col-sm-12\"> 
                        ";
        // line 107
        echo twig_get_attribute($this->env, $this->source, ($context["fields"] ?? null), "create_position", [0 => "Header Block2", 1 => "header_block2", 2 => ($context["layout_modules"] ?? null), 3 => ($context["extensions"] ?? null), 4 => ($context["module_row"] ?? null)], "method", false, false, false, 107);
        echo "                 
                    </div>

                    <div class=\"col-lg-4 col-md-4 col-sm-12\"> 
                        ";
        // line 111
        echo twig_get_attribute($this->env, $this->source, ($context["fields"] ?? null), "create_position", [0 => "Mega menu vertical", 1 => "content_menu2", 2 => ($context["layout_modules"] ?? null), 3 => ($context["extensions"] ?? null), 4 => ($context["module_row"] ?? null)], "method", false, false, false, 111);
        echo "                 
                    </div>

                    <div class=\"col-lg-8 col-md-8 col-sm-12\"> 
                        ";
        // line 115
        echo twig_get_attribute($this->env, $this->source, ($context["fields"] ?? null), "create_position", [0 => "Mega menu horizontal", 1 => "content_menu1", 2 => ($context["layout_modules"] ?? null), 3 => ($context["extensions"] ?? null), 4 => ($context["module_row"] ?? null)], "method", false, false, false, 115);
        echo "                 
                    </div>
                 </div>
            </div>

            <div class=\"bs-callout bs-callout-info\" id=\"callout-alerts-no-default\"> <h4>Content Main</h4> </div>
            <div class=\"well\"> 
                <div class=\"row\">
                    <div class=\"col-sm-12\">
                        ";
        // line 124
        echo twig_get_attribute($this->env, $this->source, ($context["fields"] ?? null), "home_position", [0 => "Content Home (Only show home page) ", 1 => "content_home", 2 => ($context["layout_modules"] ?? null), 3 => ($context["extensions"] ?? null), 4 => ($context["module_row"] ?? null), 5 => ($context["homeLayout"] ?? null)], "method", false, false, false, 124);
        echo "
                    </div>
                    <div class=\"col-lg-3 col-md-4 col-sm-12\">
                        ";
        // line 128
        echo "                        ";
        echo twig_get_attribute($this->env, $this->source, ($context["fields"] ?? null), "create_position", [0 => "Column Left", 1 => "column_left", 2 => ($context["layout_modules"] ?? null), 3 => ($context["extensions"] ?? null), 4 => ($context["module_row"] ?? null)], "method", false, false, false, 128);
        echo "
                    </div>

                    <div class=\"col-lg-6 col-md-4 col-sm-12\">
                     ";
        // line 133
        echo "                        

                        ";
        // line 135
        echo twig_get_attribute($this->env, $this->source, ($context["fields"] ?? null), "create_position", [0 => "Content Top", 1 => "content_top", 2 => ($context["layout_modules"] ?? null), 3 => ($context["extensions"] ?? null), 4 => ($context["module_row"] ?? null)], "method", false, false, false, 135);
        echo "
                       
                        ";
        // line 137
        echo twig_get_attribute($this->env, $this->source, ($context["fields"] ?? null), "create_position", [0 => "Content Bottom", 1 => "content_bottom", 2 => ($context["layout_modules"] ?? null), 3 => ($context["extensions"] ?? null), 4 => ($context["module_row"] ?? null)], "method", false, false, false, 137);
        echo "

                    </div>

                    <div class=\"col-lg-3 col-md-4 col-sm-12\">
                    ";
        // line 142
        echo " 
                        ";
        // line 143
        echo twig_get_attribute($this->env, $this->source, ($context["fields"] ?? null), "create_position", [0 => "Column Right", 1 => "column_right", 2 => ($context["layout_modules"] ?? null), 3 => ($context["extensions"] ?? null), 4 => ($context["module_row"] ?? null)], "method", false, false, false, 143);
        echo "
                        
                     </div>

                 
                </div>
            </div>

            <div class=\"bs-callout bs-callout-info\" id=\"callout-alerts-no-default\"> <h4>Content Footer</h4> </div>
            <div class=\"well\"> 
                <div class=\"row\">
                    ";
        // line 155
        echo "                    <div class=\"col-lg-3 col-md-3 col-sm-12\"> 
                        ";
        // line 156
        echo twig_get_attribute($this->env, $this->source, ($context["fields"] ?? null), "create_position", [0 => "Footer 1 Block", 1 => "footer_block1", 2 => ($context["layout_modules"] ?? null), 3 => ($context["extensions"] ?? null), 4 => ($context["module_row"] ?? null)], "method", false, false, false, 156);
        echo "
                    </div>
                    <div class=\"col-lg-3 col-md-3 col-sm-12\"> 
                        ";
        // line 159
        echo twig_get_attribute($this->env, $this->source, ($context["fields"] ?? null), "create_position", [0 => "Footer 2 Block 1", 1 => "footer_block2", 2 => ($context["layout_modules"] ?? null), 3 => ($context["extensions"] ?? null), 4 => ($context["module_row"] ?? null)], "method", false, false, false, 159);
        echo "
                    </div>
                    <div class=\"col-lg-3 col-md-3 col-sm-12\"> 
                        ";
        // line 162
        echo twig_get_attribute($this->env, $this->source, ($context["fields"] ?? null), "create_position", [0 => "Footer 2 Block 2", 1 => "footer_block3", 2 => ($context["layout_modules"] ?? null), 3 => ($context["extensions"] ?? null), 4 => ($context["module_row"] ?? null)], "method", false, false, false, 162);
        echo "
                    </div>
                    <div class=\"col-lg-3 col-md-3 col-sm-12\"> 
                        ";
        // line 165
        echo twig_get_attribute($this->env, $this->source, ($context["fields"] ?? null), "create_position", [0 => "Footer 3 Block", 1 => "footer_block4", 2 => ($context["layout_modules"] ?? null), 3 => ($context["extensions"] ?? null), 4 => ($context["module_row"] ?? null)], "method", false, false, false, 165);
        echo "
                    </div>
      
                 </div>
            </div>

          </fieldset>
        </form>
      </div>
    </div>
  </div>

  <style>
    .form-order{border: 1px solid #ccc;    vertical-align: top;margin-left: -1px;}
    .bs-callout h4 { margin: 0;}
    .bs-callout {padding: 10px;margin: 20px 0 0;border: 1px solid #ddd;border-left-width: 5px;background: #f4f4f4;}
    .bs-callout+.well {background: none;margin-top: -1px;border-radius: 0px;}
    .bs-callout-info {border-left-color: #1b809e;}
  </style>


  <script type=\"text/javascript\"><!--

\$(\".select2-input\").select2({});

var route_row = ";
        // line 190
        echo ($context["route_row"] ?? null);
        echo ";

function addRoute() {
     html  = '<tr id=\"route-row' + route_row + '\">';
     html += '  <td class=\"text-left\"><select name=\"layout_route[' + route_row + '][store_id]\" class=\"form-control select2-input\">';
     html += '  <option value=\"0\">";
        // line 195
        echo ($context["text_default"] ?? null);
        echo "</option>';
     ";
        // line 196
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["stores"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["store"]) {
            // line 197
            echo "     html += '<option value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 197);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["store"], "name", [], "any", false, false, false, 197), "js");
            echo "</option>';
     ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['store'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 199
        echo "     html += '  </select></td>';
     html += '  <td class=\"text-left\"><input type=\"text\" name=\"layout_route[' + route_row + '][route]\" value=\"\" placeholder=\"";
        // line 200
        echo ($context["entry_route"] ?? null);
        echo "\" class=\"form-control\" /></td>';
     html += '  <td class=\"text-left\"><button type=\"button\" onclick=\"\$(\\'#route-row' + route_row + '\\').remove();\" data-toggle=\"tooltip\" title=\"";
        // line 201
        echo ($context["button_remove"] ?? null);
        echo "\" class=\"btn btn-danger\"><i class=\"fa fa-minus-circle\"></i></button></td>';
     html += '</tr>';
     
     \$('#route tbody').append(html);
     
     route_row++;
}

";
        // line 209
        echo twig_get_attribute($this->env, $this->source, ($context["fields"] ?? null), "var_module_row", [], "method", false, false, false, 209);
        echo "
function addModule(type) {
    
     html  = '<tr id=\"module-row' + module_row + '\">';
    html += '  <td class=\"text-left\"><div class=\"input-group\"><select name=\"layout_module[' + module_row + '][code]\" class=\"form-control input-sm select2-input\">';
     ";
        // line 214
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["extensions"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["extension"]) {
            // line 215
            echo "     html += '    <optgroup label=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["extension"], "name", [], "any", false, false, false, 215), "js");
            echo "\">';
     ";
            // line 216
            if ( !twig_get_attribute($this->env, $this->source, $context["extension"], "module", [], "any", false, false, false, 216)) {
                // line 217
                echo "     html += '      <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["extension"], "code", [], "any", false, false, false, 217);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["extension"], "name", [], "any", false, false, false, 217), "js");
                echo "</option>';
     ";
            } else {
                // line 219
                echo "     ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["extension"], "module", [], "any", false, false, false, 219));
                foreach ($context['_seq'] as $context["_key"] => $context["module"]) {
                    // line 220
                    echo "     html += '      <option value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["module"], "code", [], "any", false, false, false, 220);
                    echo "\">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["module"], "name", [], "any", false, false, false, 220), "js");
                    echo "</option>';
     ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['module'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 222
                echo "     ";
            }
            // line 223
            echo "     html += '    </optgroup>';
     ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['extension'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 225
        echo "     html += '  </select>';
    html += '  <input type=\"hidden\" name=\"layout_module[' + module_row + '][position]\" value=\"' + type.replace('-', '_') + '\" />';
    html += '  <input type=\"hidden\" name=\"layout_module[' + module_row + '][sort_order]\" value=\"\" />';
     html += '  <div class=\"input-group-btn\"><a href=\"\" target=\"_blank\" type=\"button\" data-toggle=\"tooltip\" title=\"";
        // line 228
        echo ($context["button_edit"] ?? null);
        echo "\" class=\"btn btn-primary btn-sm\"><i class=\"fa fa-pencil\"></i></a><button type=\"button\" onclick=\"\$(\\'#module-row' + module_row + '\\').remove();\" data-toggle=\"tooltip\" title=\"";
        echo ($context["button_remove"] ?? null);
        echo "\" class=\"btn btn-danger btn-sm\"><i class=\"fa fa fa-minus-circle\"></i></button></div></div></td>';
     html += '</tr>';
     \$(\".select2-input\").select2({});
     \$('#module-' + type + ' tbody').append(html);
     
     \$('#module-' + type + ' tbody select[name=\\'layout_module[' + module_row + '][code]\\']').val(\$('#module-' + type + ' tfoot select').val());
     
     \$('#module-' + type + ' select[name*=\\'code\\']').trigger('change');
          
     \$('#module-' + type + ' tbody input[name*=\\'sort_order\\']').each(function(i, element) {
          \$(element).val(i);
     });
     
     module_row++;
}


\$('#module-column-left, #module-column-right, #module-content-top, #module-content-bottom').delegate('select[name*=\\'code\\']', 'change', function() {
    var part = this.value.split('.');
    
    if (!part[1]) {
        \$(this).parent().find('a').attr('href', 'index.php?route=extension/module/' + part[0] + '&user_token=";
        // line 249
        echo ($context["user_token"] ?? null);
        echo "');
    } else {
        \$(this).parent().find('a').attr('href', 'index.php?route=extension/module/' + part[0] + '&user_token=";
        // line 251
        echo ($context["user_token"] ?? null);
        echo "&module_id=' + part[1]);
    }
});

\$('#module-column-left, #module-column-right, #module-content-top, #module-content-bottom').trigger('change');

//--></script> 
</div>
";
        // line 259
        echo ($context["footer"] ?? null);
    }

    public function getTemplateName()
    {
        return "extension/soconfig/layout_form.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  551 => 259,  540 => 251,  535 => 249,  509 => 228,  504 => 225,  497 => 223,  494 => 222,  483 => 220,  478 => 219,  470 => 217,  468 => 216,  463 => 215,  459 => 214,  451 => 209,  440 => 201,  436 => 200,  433 => 199,  422 => 197,  418 => 196,  414 => 195,  406 => 190,  378 => 165,  372 => 162,  366 => 159,  360 => 156,  357 => 155,  343 => 143,  340 => 142,  332 => 137,  327 => 135,  323 => 133,  315 => 128,  309 => 124,  297 => 115,  290 => 111,  283 => 107,  276 => 103,  266 => 96,  263 => 95,  257 => 90,  255 => 89,  250 => 87,  240 => 80,  233 => 75,  227 => 74,  225 => 73,  218 => 71,  210 => 70,  207 => 69,  201 => 68,  193 => 66,  185 => 64,  182 => 63,  178 => 62,  174 => 61,  170 => 60,  165 => 59,  161 => 58,  158 => 57,  156 => 56,  147 => 50,  143 => 49,  136 => 44,  130 => 42,  128 => 41,  122 => 40,  117 => 38,  112 => 36,  107 => 34,  101 => 31,  97 => 29,  89 => 25,  87 => 24,  81 => 20,  70 => 18,  66 => 17,  61 => 15,  55 => 14,  51 => 13,  42 => 8,  39 => 7,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "extension/soconfig/layout_form.twig", "/home/azhkhn/public_html/protidin.com.bd/admin/view/template/extension/soconfig/layout_form.twig");
    }
}
