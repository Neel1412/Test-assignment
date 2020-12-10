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
class __TwigTemplate_8275c38a3a41c7cca7d876cf0b709e0dec4c3a45ad99ea80a48b604d54d74038 extends \Twig\Template
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
        echo "\t<div class=\"container pt-20\">
\t\t<div class=\"container-fluid\">
\t\t\t<h3 class=\"text-center\">
                Upload Invoice Via CSV
            </h3>
\t\t\t<form id=\"add_invoice\" name=\"add_invoice\" onsubmit=\"return false;\">
\t            <fieldset>
\t\t    \t\t<legend>Add Invoice Form:</legend>
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<div class=\"col-xs-3 col-md-3\">
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-xs-6 col-md-6\">
\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t<input id=\"uploadCSVFileInputKey\" type=\"file\" class=\"hide\" name=\"csvfile\">
\t\t\t\t\t\t\t    <button type=\"button\" id=\"uploadCSVFileKey\" class=\"btn btn-primary btn-lg btn-block\">Choose File</button>
\t\t\t\t\t\t\t </div>
\t\t\t\t\t\t\t <div class=\"form-group\">
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
\t</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 38
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 39
        echo "\t<script>
\t\tvar AddInVoice = '";
        // line 40
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

\t\t\t        },
\t\t\t    });
\t\t\t});
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
        return array (  109 => 40,  106 => 39,  99 => 38,  60 => 4,  53 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"base.html.twig\" %}

{% block body %}
\t<div class=\"container pt-20\">
\t\t<div class=\"container-fluid\">
\t\t\t<h3 class=\"text-center\">
                Upload Invoice Via CSV
            </h3>
\t\t\t<form id=\"add_invoice\" name=\"add_invoice\" onsubmit=\"return false;\">
\t            <fieldset>
\t\t    \t\t<legend>Add Invoice Form:</legend>
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<div class=\"col-xs-3 col-md-3\">
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-xs-6 col-md-6\">
\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t<input id=\"uploadCSVFileInputKey\" type=\"file\" class=\"hide\" name=\"csvfile\">
\t\t\t\t\t\t\t    <button type=\"button\" id=\"uploadCSVFileKey\" class=\"btn btn-primary btn-lg btn-block\">Choose File</button>
\t\t\t\t\t\t\t </div>
\t\t\t\t\t\t\t <div class=\"form-group\">
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

\t\t\t        },
\t\t\t    });
\t\t\t});
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
