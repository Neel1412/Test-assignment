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

/* Dashboard/index.html.twig */
class __TwigTemplate_6d3f83de1f38e71c82305cbca9b90c8ee1373e9983478109f128dbb7672a0582 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'body' => [$this, 'block_body'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Dashboard/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "Dashboard/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "\t<div class=\"container pt-20\" style=\"background-color: ghostwhite;padding: 20px;\">
\t\t<div class=\"container-fluid\">
\t\t\t<form id=\"add_invoice\" name=\"add_invoice\" onsubmit=\"return false;\">
\t            <fieldset>
\t\t    \t\t<legend>Add Invoice Form:</legend>
\t\t    \t\t<h3 class=\"text-center\">
\t\t                Example Date
\t\t            </h3>
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<div class=\"col-xs-3 col-md-3\">
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-xs-6 col-md-6\">
                            <span style=\"font-style: italic;\">Please provide InternalInvoiceId, InvoiceAmount AND DueOn.</span>
                            <div class=\"row\">
                                <div class=\"col-md-12\">
                                    <table class=\"table table-bulk dataTable\" cellspacing=\"0\" style=\"margin-bottom: 12px;\">
                                        <thead class=\"hidden-xs hidden-sm\">
                                            <tr>
                                                <th>Internal Invoice Id</th>
                                                <th>Invoice Amount</th>
                                                <th>Due On</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <b class=\"visible-xs visible-sm\">Internal Invoice Id</b>
                                                    <div>
                                                        1
                                                    </div>
                                                </td>
                                                <td>
                                                    <b class=\"visible-xs visible-sm\">Invoice Amount</b>
                                                    <div>
                                                        100
                                                    </div>
                                                </td>
                                                <td>
                                                    <b class=\"visible-xs visible-sm\">Due On</b>
                                                    <div>
                                                        2019-05-20
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <b class=\"visible-xs visible-sm\">Internal Invoice Id</b>
                                                    <div>
                                                        2
                                                    </div>
                                                </td>
                                                <td>
                                                    <b class=\"visible-xs visible-sm\">Invoice Amount</b>
                                                    <div>
                                                        200.5
                                                    </div>
                                                </td>
                                                <td>
                                                    <b class=\"visible-xs visible-sm\">Due On</b>
                                                    <div>
                                                        2019-05-10
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                            \t<td colspan=\"3\">
                                            \t\t<a class=\"text-right\" style=\"float: right;\" href=\"/sample/sample-csv-upload-file-invoice.csv\">Download sample csv file</a>
                                            \t</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>

\t\t    \t\t\t\t<div class=\"alert alert-success\" role=\"alert\" style=\"display: none;padding: 5px;\"></div>
\t\t    \t\t\t\t<div class=\"alert alert-danger\" role=\"alert\" style=\"display: none;padding: 5px;\"></div>
\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t<input id=\"uploadCSVFileInputKey\" type=\"file\" class=\"hide\" name=\"csvfile\">
\t\t\t\t\t\t\t    <button type=\"button\" id=\"uploadCSVFileKey\" class=\"btn btn-primary btn-lg btn-block\">Choose File</button>
\t\t\t\t\t\t\t </div>
\t\t\t\t\t\t\t <div class=\"form-group\" style=\"margin: 0px;\">
\t\t\t\t\t\t\t\t <span class=\"tip text-muted d-block\"></span>
\t\t\t\t\t\t\t\t <button type=\"button\" class=\"btn btn-link d-block\" id=\"uploadCSVFileKeyClear\" style=\"display: none;\">
\t\t                            <i class=\"material-icons\">clear</i>
\t\t                        </button>
\t                        </div>
\t\t\t\t\t\t  \t <button type=\"submit\" class=\"btn btn-primary\">Submit</button>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-xs-3 col-md-3\">
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t\t
\t\t\t\t</fieldset>
\t\t\t</form>
\t\t</div>
\t\t<hr style=\"border: 1px solid;\">
\t\t<h3 style=\"text-align: center;\">
\t        List Invoices
\t    </h3>
        <div class=\"row\" style=\"max-height: 280px;overflow: auto;\">
            <div class=\"col-md-12\">
                <table class=\"table table-bulk dataTable\" cellspacing=\"0\">
                    <thead class=\"hidden-xs hidden-sm\">
                        <tr>
                        \t<th>Sr</th>
                            <th>Internal Invoice Id</th>
                            <th>Invoice Amount</th>
                            <th>Due On</th>
                            <th>Sell Price</th>
                        </tr>
                    </thead>
                    <tbody>
\t                    ";
        // line 116
        if ((twig_length_filter($this->env, (isset($context["objInvoice"]) || array_key_exists("objInvoice", $context) ? $context["objInvoice"] : (function () { throw new RuntimeError('Variable "objInvoice" does not exist.', 116, $this->source); })())) > 0)) {
            // line 117
            echo "\t                    \t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["objInvoice"]) || array_key_exists("objInvoice", $context) ? $context["objInvoice"] : (function () { throw new RuntimeError('Variable "objInvoice" does not exist.', 117, $this->source); })()));
            $context['loop'] = [
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            ];
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["Invoice"]) {
                // line 118
                echo "\t                        <tr ";
                if (((twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 118) % 2) == 0)) {
                    echo " style=\"background-color: lightgrey;\" ";
                }
                echo ">
\t                        \t<td>
\t                                <b class=\"visible-xs visible-sm\">Sr</b>
\t                                <div>
\t                                    ";
                // line 122
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 122), "html", null, true);
                echo "
\t                                </div>
\t                            </td>
\t                            <td>
\t                                <b class=\"visible-xs visible-sm\">Internal Invoice Id</b>
\t                                <div>
\t                                    ";
                // line 128
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["Invoice"], "internalInvoiceId", [], "any", false, false, false, 128), "html", null, true);
                echo "
\t                                </div>
\t                            </td>
\t                            <td>
\t                                <b class=\"visible-xs visible-sm\">Invoice Amount</b>
\t                                <div>
\t                                    ";
                // line 134
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["Invoice"], "invoiceAmount", [], "any", false, false, false, 134), "html", null, true);
                echo "
\t                                </div>
\t                            </td>
\t                            <td>
\t                                <b class=\"visible-xs visible-sm\">Due On</b>
\t                                <div>
\t                                    ";
                // line 140
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["Invoice"], "dueOn", [], "any", false, false, false, 140), "Y-m-d"), "html", null, true);
                echo "
\t                                </div>
\t                            </td>
\t                            <td>
\t                                <b class=\"visible-xs visible-sm\">Sell Price</b>
\t                                <div>
\t                                    ";
                // line 146
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["Invoice"], "sellPrice", [], "any", false, false, false, 146), "html", null, true);
                echo "
\t                                </div>
\t                            </td>
\t                        </tr>
\t                    \t";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['Invoice'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 151
            echo "\t                    ";
        } else {
            // line 152
            echo "\t                    \t<tr style=\"text-align: center;\">
\t                    \t\t<td colspan=\"5\">
\t                    \t\t\t<span>No data available</span>
\t                    \t\t</td>
\t                    \t</tr>
\t                    ";
        }
        // line 158
        echo "                    </tbody>
                </table>
            </div>
        </div>
\t</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 165
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 166
        echo "\t<script>
\t\tvar AddInVoice = '";
        // line 167
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("add_inVoice_via_csv");
        echo "';

\t\t\$(document).ready(function(){
\t\t\t\$('#uploadCSVFileKey').on('click', function() {
\t\t\t    \$('#uploadCSVFileInputKey').click();
\t\t\t});
\t\t\t\$('#uploadCSVFileInputKey').on('change', function(e) {
\t\t\t    var fileName = e.target.files[0].name;
\t\t\t    \$('#add_invoice .text-muted').text(textAbstract(fileName, 40, \" \"));
\t\t\t    \$('#add_invoice .text-muted').attr(\"data-original-title\", fileName);
\t\t\t    \$('#add_invoice .text-muted').attr(\"data-toggle\", \"tooltip\");
\t\t\t    \$('[data-toggle=\"tooltip\"]').tooltip();
\t\t\t    \$('#uploadCSVFileKeyClear').css('display','inline');
\t\t\t    /*if(\$(':input[type=\"submit\"]').hasClass('disable-button')){
\t\t\t        \$(':input[type=\"submit\"]').removeClass('disable-button');
\t\t\t    }*/
\t\t\t});

\t\t\t\$(\"#uploadCSVFileKeyClear\").on('click', function() {
\t\t\t    \$(\"#uploadCSVFileInputKey\").val(\"\");
\t\t\t    \$('#add_invoice .text-muted').text(\"\").attr(\"data-original-title\", \"\");
\t\t\t    \$(this).css('display','none');
\t\t\t});

\t\t\t\$(\"#add_invoice\").submit(function(e) {

\t\t\t\t\$(':input[type=\"submit\"]').prop('disabled', true);
\t\t\t    var form = document.getElementById(\"add_invoice\");
\t\t\t    e.preventDefault();

\t\t\t\t\$.ajax({
\t\t\t        url: AddInVoice,
\t\t\t        dataType: 'json',
\t\t\t        type: 'POST',
\t\t\t        processData: false,
\t\t\t        contentType: false,
\t\t\t        cache: false,
\t\t\t        data: new FormData(form),
\t\t\t        success: function(result) {
\t\t\t        \tif( result.status == 'success' )
\t\t\t        \t{
\t\t\t\t\t        sessionStorage.setItem('invoiceAddedSuccess', true);
\t\t\t\t\t        window.location.reload();
\t\t\t        \t}
\t\t\t        \telse
\t\t\t        \t{
\t\t\t        \t\t\$('#add_invoice .alert-danger').html(result.message);
\t\t\t        \t\t\$('#add_invoice .alert-danger').show();
\t\t\t        \t\twindow.setTimeout(function() {
\t\t\t\t\t            \$('#add_invoice .alert-danger').hide();
\t\t\t\t\t        }, 4000);
\t\t\t        \t}
\t\t\t        \t\$(':input[type=\"submit\"]').prop('disabled', false);
\t\t\t        },
\t\t\t    });
\t\t\t});

\t\t\t
\t\t\tif( sessionStorage.getItem('invoiceAddedSuccess') == 'true' )
\t\t\t{
\t\t\t\t\$('#add_invoice .alert-success').html('Invoice added successfully.');
        \t\t\$('#add_invoice .alert-success').show();
        \t\twindow.setTimeout(function() {
\t\t            \$('#add_invoice .alert-success').hide();
\t\t        }, 4000);
\t\t        sessionStorage.setItem('invoiceAddedSuccess', false);
\t\t\t}
\t\t});

\t\tfunction textAbstract(el, maxlength = 20, delimiter = \" \") {
\t\t  let txt = el;
\t\t  if (txt == null) {
\t\t    return \"\";
\t\t  }
\t\t  if (txt.length <= maxlength) {
\t\t    return txt;
\t\t  }
\t\t  let t = txt.substring(0, maxlength);
\t\t  return t + \"...\";
\t\t}
\t</script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "Dashboard/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  292 => 167,  289 => 166,  282 => 165,  270 => 158,  262 => 152,  259 => 151,  240 => 146,  231 => 140,  222 => 134,  213 => 128,  204 => 122,  194 => 118,  176 => 117,  174 => 116,  60 => 4,  53 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"base.html.twig\" %}

{% block body %}
\t<div class=\"container pt-20\" style=\"background-color: ghostwhite;padding: 20px;\">
\t\t<div class=\"container-fluid\">
\t\t\t<form id=\"add_invoice\" name=\"add_invoice\" onsubmit=\"return false;\">
\t            <fieldset>
\t\t    \t\t<legend>Add Invoice Form:</legend>
\t\t    \t\t<h3 class=\"text-center\">
\t\t                Example Date
\t\t            </h3>
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<div class=\"col-xs-3 col-md-3\">
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-xs-6 col-md-6\">
                            <span style=\"font-style: italic;\">Please provide InternalInvoiceId, InvoiceAmount AND DueOn.</span>
                            <div class=\"row\">
                                <div class=\"col-md-12\">
                                    <table class=\"table table-bulk dataTable\" cellspacing=\"0\" style=\"margin-bottom: 12px;\">
                                        <thead class=\"hidden-xs hidden-sm\">
                                            <tr>
                                                <th>Internal Invoice Id</th>
                                                <th>Invoice Amount</th>
                                                <th>Due On</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <b class=\"visible-xs visible-sm\">Internal Invoice Id</b>
                                                    <div>
                                                        1
                                                    </div>
                                                </td>
                                                <td>
                                                    <b class=\"visible-xs visible-sm\">Invoice Amount</b>
                                                    <div>
                                                        100
                                                    </div>
                                                </td>
                                                <td>
                                                    <b class=\"visible-xs visible-sm\">Due On</b>
                                                    <div>
                                                        2019-05-20
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <b class=\"visible-xs visible-sm\">Internal Invoice Id</b>
                                                    <div>
                                                        2
                                                    </div>
                                                </td>
                                                <td>
                                                    <b class=\"visible-xs visible-sm\">Invoice Amount</b>
                                                    <div>
                                                        200.5
                                                    </div>
                                                </td>
                                                <td>
                                                    <b class=\"visible-xs visible-sm\">Due On</b>
                                                    <div>
                                                        2019-05-10
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                            \t<td colspan=\"3\">
                                            \t\t<a class=\"text-right\" style=\"float: right;\" href=\"/sample/sample-csv-upload-file-invoice.csv\">Download sample csv file</a>
                                            \t</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>

\t\t    \t\t\t\t<div class=\"alert alert-success\" role=\"alert\" style=\"display: none;padding: 5px;\"></div>
\t\t    \t\t\t\t<div class=\"alert alert-danger\" role=\"alert\" style=\"display: none;padding: 5px;\"></div>
\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t<input id=\"uploadCSVFileInputKey\" type=\"file\" class=\"hide\" name=\"csvfile\">
\t\t\t\t\t\t\t    <button type=\"button\" id=\"uploadCSVFileKey\" class=\"btn btn-primary btn-lg btn-block\">Choose File</button>
\t\t\t\t\t\t\t </div>
\t\t\t\t\t\t\t <div class=\"form-group\" style=\"margin: 0px;\">
\t\t\t\t\t\t\t\t <span class=\"tip text-muted d-block\"></span>
\t\t\t\t\t\t\t\t <button type=\"button\" class=\"btn btn-link d-block\" id=\"uploadCSVFileKeyClear\" style=\"display: none;\">
\t\t                            <i class=\"material-icons\">clear</i>
\t\t                        </button>
\t                        </div>
\t\t\t\t\t\t  \t <button type=\"submit\" class=\"btn btn-primary\">Submit</button>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-xs-3 col-md-3\">
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t\t
\t\t\t\t</fieldset>
\t\t\t</form>
\t\t</div>
\t\t<hr style=\"border: 1px solid;\">
\t\t<h3 style=\"text-align: center;\">
\t        List Invoices
\t    </h3>
        <div class=\"row\" style=\"max-height: 280px;overflow: auto;\">
            <div class=\"col-md-12\">
                <table class=\"table table-bulk dataTable\" cellspacing=\"0\">
                    <thead class=\"hidden-xs hidden-sm\">
                        <tr>
                        \t<th>Sr</th>
                            <th>Internal Invoice Id</th>
                            <th>Invoice Amount</th>
                            <th>Due On</th>
                            <th>Sell Price</th>
                        </tr>
                    </thead>
                    <tbody>
\t                    {% if objInvoice|length > 0 %}
\t                    \t{% for Invoice in objInvoice %}
\t                        <tr {% if loop.index % 2 == 0 %} style=\"background-color: lightgrey;\" {% endif %}>
\t                        \t<td>
\t                                <b class=\"visible-xs visible-sm\">Sr</b>
\t                                <div>
\t                                    {{ loop.index }}
\t                                </div>
\t                            </td>
\t                            <td>
\t                                <b class=\"visible-xs visible-sm\">Internal Invoice Id</b>
\t                                <div>
\t                                    {{ Invoice.internalInvoiceId }}
\t                                </div>
\t                            </td>
\t                            <td>
\t                                <b class=\"visible-xs visible-sm\">Invoice Amount</b>
\t                                <div>
\t                                    {{ Invoice.invoiceAmount }}
\t                                </div>
\t                            </td>
\t                            <td>
\t                                <b class=\"visible-xs visible-sm\">Due On</b>
\t                                <div>
\t                                    {{ Invoice.dueOn|date('Y-m-d') }}
\t                                </div>
\t                            </td>
\t                            <td>
\t                                <b class=\"visible-xs visible-sm\">Sell Price</b>
\t                                <div>
\t                                    {{ Invoice.sellPrice }}
\t                                </div>
\t                            </td>
\t                        </tr>
\t                    \t{% endfor %}
\t                    {% else %}
\t                    \t<tr style=\"text-align: center;\">
\t                    \t\t<td colspan=\"5\">
\t                    \t\t\t<span>No data available</span>
\t                    \t\t</td>
\t                    \t</tr>
\t                    {% endif %}
                    </tbody>
                </table>
            </div>
        </div>
\t</div>
{% endblock %}

{% block javascripts %}
\t<script>
\t\tvar AddInVoice = '{{ path('add_inVoice_via_csv') }}';

\t\t\$(document).ready(function(){
\t\t\t\$('#uploadCSVFileKey').on('click', function() {
\t\t\t    \$('#uploadCSVFileInputKey').click();
\t\t\t});
\t\t\t\$('#uploadCSVFileInputKey').on('change', function(e) {
\t\t\t    var fileName = e.target.files[0].name;
\t\t\t    \$('#add_invoice .text-muted').text(textAbstract(fileName, 40, \" \"));
\t\t\t    \$('#add_invoice .text-muted').attr(\"data-original-title\", fileName);
\t\t\t    \$('#add_invoice .text-muted').attr(\"data-toggle\", \"tooltip\");
\t\t\t    \$('[data-toggle=\"tooltip\"]').tooltip();
\t\t\t    \$('#uploadCSVFileKeyClear').css('display','inline');
\t\t\t    /*if(\$(':input[type=\"submit\"]').hasClass('disable-button')){
\t\t\t        \$(':input[type=\"submit\"]').removeClass('disable-button');
\t\t\t    }*/
\t\t\t});

\t\t\t\$(\"#uploadCSVFileKeyClear\").on('click', function() {
\t\t\t    \$(\"#uploadCSVFileInputKey\").val(\"\");
\t\t\t    \$('#add_invoice .text-muted').text(\"\").attr(\"data-original-title\", \"\");
\t\t\t    \$(this).css('display','none');
\t\t\t});

\t\t\t\$(\"#add_invoice\").submit(function(e) {

\t\t\t\t\$(':input[type=\"submit\"]').prop('disabled', true);
\t\t\t    var form = document.getElementById(\"add_invoice\");
\t\t\t    e.preventDefault();

\t\t\t\t\$.ajax({
\t\t\t        url: AddInVoice,
\t\t\t        dataType: 'json',
\t\t\t        type: 'POST',
\t\t\t        processData: false,
\t\t\t        contentType: false,
\t\t\t        cache: false,
\t\t\t        data: new FormData(form),
\t\t\t        success: function(result) {
\t\t\t        \tif( result.status == 'success' )
\t\t\t        \t{
\t\t\t\t\t        sessionStorage.setItem('invoiceAddedSuccess', true);
\t\t\t\t\t        window.location.reload();
\t\t\t        \t}
\t\t\t        \telse
\t\t\t        \t{
\t\t\t        \t\t\$('#add_invoice .alert-danger').html(result.message);
\t\t\t        \t\t\$('#add_invoice .alert-danger').show();
\t\t\t        \t\twindow.setTimeout(function() {
\t\t\t\t\t            \$('#add_invoice .alert-danger').hide();
\t\t\t\t\t        }, 4000);
\t\t\t        \t}
\t\t\t        \t\$(':input[type=\"submit\"]').prop('disabled', false);
\t\t\t        },
\t\t\t    });
\t\t\t});

\t\t\t
\t\t\tif( sessionStorage.getItem('invoiceAddedSuccess') == 'true' )
\t\t\t{
\t\t\t\t\$('#add_invoice .alert-success').html('Invoice added successfully.');
        \t\t\$('#add_invoice .alert-success').show();
        \t\twindow.setTimeout(function() {
\t\t            \$('#add_invoice .alert-success').hide();
\t\t        }, 4000);
\t\t        sessionStorage.setItem('invoiceAddedSuccess', false);
\t\t\t}
\t\t});

\t\tfunction textAbstract(el, maxlength = 20, delimiter = \" \") {
\t\t  let txt = el;
\t\t  if (txt == null) {
\t\t    return \"\";
\t\t  }
\t\t  if (txt.length <= maxlength) {
\t\t    return txt;
\t\t  }
\t\t  let t = txt.substring(0, maxlength);
\t\t  return t + \"...\";
\t\t}
\t</script>
{% endblock %}", "Dashboard/index.html.twig", "C:\\wamp64\\www\\Test2\\templates\\Dashboard\\index.html.twig");
    }
}
