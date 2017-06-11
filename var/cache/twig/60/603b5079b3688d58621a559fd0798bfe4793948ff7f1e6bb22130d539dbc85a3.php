<?php

/* index.html.twig */
class __TwigTemplate_c6b20ace63691e3429e4bd92e3a2def6521e6af0765d998fc8f37f7ff2459f7b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "index.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
            'javascript' => array($this, 'block_javascript'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b0737d1ccd36d47aee2a9807064c0279fb54893b34519a8d45553fe8ff510756 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b0737d1ccd36d47aee2a9807064c0279fb54893b34519a8d45553fe8ff510756->enter($__internal_b0737d1ccd36d47aee2a9807064c0279fb54893b34519a8d45553fe8ff510756_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "index.html.twig"));

        $__internal_0354fb788e5d08dc65a78be08dbe4716d42675fe953a157f6a7161598c26ff4a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0354fb788e5d08dc65a78be08dbe4716d42675fe953a157f6a7161598c26ff4a->enter($__internal_0354fb788e5d08dc65a78be08dbe4716d42675fe953a157f6a7161598c26ff4a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b0737d1ccd36d47aee2a9807064c0279fb54893b34519a8d45553fe8ff510756->leave($__internal_b0737d1ccd36d47aee2a9807064c0279fb54893b34519a8d45553fe8ff510756_prof);

        
        $__internal_0354fb788e5d08dc65a78be08dbe4716d42675fe953a157f6a7161598c26ff4a->leave($__internal_0354fb788e5d08dc65a78be08dbe4716d42675fe953a157f6a7161598c26ff4a_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_181d59b2b218b70fc53a82dce1ea4d2a9421c49ae160619f908c524ed2e2db14 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_181d59b2b218b70fc53a82dce1ea4d2a9421c49ae160619f908c524ed2e2db14->enter($__internal_181d59b2b218b70fc53a82dce1ea4d2a9421c49ae160619f908c524ed2e2db14_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_0b1f8c5f4d0bba1ef805f18a62b896945152ddc7350aa22f9269720e328ed26d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0b1f8c5f4d0bba1ef805f18a62b896945152ddc7350aa22f9269720e328ed26d->enter($__internal_0b1f8c5f4d0bba1ef805f18a62b896945152ddc7350aa22f9269720e328ed26d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "    <div class=\"container\">
        <div class=\"row text-center\">
            <div class=\"col-md-4 text-right\">
                <i class=\"fa fa-angle-double-left\" aria-hidden=\"true\"></i>
            </div>
            <div class=\"col-md-4\">
                <h3>Month: January</h3>
            </div>
            <div class=\"col-md-4 text-left\">
                <i class=\"fa fa-angle-double-right\" aria-hidden=\"true\"></i>
            </div>
        </div>

        <div class=\"row\">
            <div class=\"col-md-6\">
                <table class=\"table table-hover\">
                    <thead>
                    <tr>
                        <th></th>
                        <th>Day</th>
                        <th>Value</th>
                        <th>Description</th>
                        <th>Options</th>
                    </tr>
                    </thead>
                    <tbody ng-app=\"scotchApp\" ng-controller=\"mainController\">
                    <tr>
                        <td><i class=\"fa fa-thumbs-up\"></i></td>
                        <td>01</td>
                        <td>R\$ 100.00</td>
                        <td>loremd dasdsa dasdas das dsa</td>
                        <td>
                            <i class=\"fa fa-pencil editar initialism\" title=\"Edit\"></i>
                            <i class=\"fa fa-times excluir initialism\" title=\"Remove\"></i>
                            <i class='fa fa-money registrarPagamento initialism' title=\"Mark payed\"></i>
                        </td>
                    </tr>
                    </tbody>
                </table>
            </div>
            <div class=\"col-md-4\">
                <div class=\"row\">
                    <form class=\"formAddEvents\">
                        <div class=\"form-group\">
                            <label for=\"description\">Description</label>
                            <input type=\"text\" class=\"form-control\" id=\"description\">
                        </div>
                        <div class=\"form-group\">
                            <label for=\"value\">Value in R\$</label>
                            <input type=\"text\" class=\"form-control\" id=\"value\">
                        </div>
                        <div class=\"form-group\">
                            <label for=\"date\">Date( optional )</label>
                            <input type=\"date\" class=\"form-control\" id=\"date\">
                        </div>
                        <div class=\"row\">
                            <div class=\"col-md-6\">
                                <div class=\"checkbox\">
                                    <label><input type=\"radio\" value=\"0\" name=\"type\" class=\"type\">Entrada</label>
                                </div>
                            </div>
                            <div class=\"col-md-6\">
                                <div class=\"checkbox\">
                                    <label><input type=\"radio\" value=\"1\" name=\"type\" class=\"type\" checked>Saida</label>
                                </div>
                            </div>
                        </div>

                        <button type=\"button\" class=\"btn btn-default addEventsButton\">Add</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class=\"container-fluid footerMenu\">
        <div class=\"row\">
            <div class=\"col-md-2 text-center\">
                <span>Positive Value</span> R\$ 00,00
            </div>
            <div class=\"col-md-2 text-center\">
                <i class=\"fa fa-minus-square\" aria-hidden=\"true\"></i>
            </div>
            <div class=\"col-md-2 text-center\">
                <span>Negative Value</span> R\$ 00,00
            </div>
            <div class=\"col-md-2 text-center\">
                <i class=\"fa fa-hand-o-right\" aria-hidden=\"true\"></i>
            </div>
            <div class=\"col-md-2 text-center\">
                <span>Balance</span> R\$ 00,00
            </div>
        </div>
    </div>
";
        
        $__internal_0b1f8c5f4d0bba1ef805f18a62b896945152ddc7350aa22f9269720e328ed26d->leave($__internal_0b1f8c5f4d0bba1ef805f18a62b896945152ddc7350aa22f9269720e328ed26d_prof);

        
        $__internal_181d59b2b218b70fc53a82dce1ea4d2a9421c49ae160619f908c524ed2e2db14->leave($__internal_181d59b2b218b70fc53a82dce1ea4d2a9421c49ae160619f908c524ed2e2db14_prof);

    }

    // line 100
    public function block_javascript($context, array $blocks = array())
    {
        $__internal_86f6d730bf18fbc43faf2df4b07232377ddcb9cce2a832051cbab89e5c5936b2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_86f6d730bf18fbc43faf2df4b07232377ddcb9cce2a832051cbab89e5c5936b2->enter($__internal_86f6d730bf18fbc43faf2df4b07232377ddcb9cce2a832051cbab89e5c5936b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascript"));

        $__internal_5bca76ea05bc470566aa2eb06224817b479677d7680710b9b2e46b087aa431bc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5bca76ea05bc470566aa2eb06224817b479677d7680710b9b2e46b087aa431bc->enter($__internal_5bca76ea05bc470566aa2eb06224817b479677d7680710b9b2e46b087aa431bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascript"));

        // line 101
        echo "<script>
    \$( document ).ready(function() {

        \$(\".formAddEvents\").on(\"click\", \".addEventsButton\" , function(){
            console.log(\$(this).parent().find(\"#description\").val());
            var objEvent = {
                \"description\" : \$(this).parent().find(\"#description\").val(),
                \"value\" : \$(this).parent().find(\"#value\").val(),
                \"date\" : \$(this).parent().find(\"#date\").val(),
                \"type\" : \$(this).parent().find(\".type:checked\").val()
            }

            console.log(objEvent);

            sendRquest(\"addEvents\", objEvent, \"POST\", true, false);
        });
    });

    function reflesh(){
        sendRquest(\"listEvents\", false, \"GET\", false, function(teste){ updateTable(teste); });
    }

    function updateTable(result){

        var data = JSON.parse(result).hits.hits;

        for( i in data ){
            console.log(data[i]);
        }

//        console.log(JSON.parse(result).hits.hits);
    }

    function sendRquest(route, obj, methodType, updateTable, callbakc){
        \$.ajax({
            url: \"/web/\" + route,
            data: obj,
            method: methodType,
            success: function(result){

                callbakc(result);

                if(updateTable === true){
                    reflesh();
                }
            }}
        );
    }

</script>
";
        
        $__internal_5bca76ea05bc470566aa2eb06224817b479677d7680710b9b2e46b087aa431bc->leave($__internal_5bca76ea05bc470566aa2eb06224817b479677d7680710b9b2e46b087aa431bc_prof);

        
        $__internal_86f6d730bf18fbc43faf2df4b07232377ddcb9cce2a832051cbab89e5c5936b2->leave($__internal_86f6d730bf18fbc43faf2df4b07232377ddcb9cce2a832051cbab89e5c5936b2_prof);

    }

    public function getTemplateName()
    {
        return "index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  163 => 101,  154 => 100,  50 => 4,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"layout.html.twig\" %}

{% block content %}
    <div class=\"container\">
        <div class=\"row text-center\">
            <div class=\"col-md-4 text-right\">
                <i class=\"fa fa-angle-double-left\" aria-hidden=\"true\"></i>
            </div>
            <div class=\"col-md-4\">
                <h3>Month: January</h3>
            </div>
            <div class=\"col-md-4 text-left\">
                <i class=\"fa fa-angle-double-right\" aria-hidden=\"true\"></i>
            </div>
        </div>

        <div class=\"row\">
            <div class=\"col-md-6\">
                <table class=\"table table-hover\">
                    <thead>
                    <tr>
                        <th></th>
                        <th>Day</th>
                        <th>Value</th>
                        <th>Description</th>
                        <th>Options</th>
                    </tr>
                    </thead>
                    <tbody ng-app=\"scotchApp\" ng-controller=\"mainController\">
                    <tr>
                        <td><i class=\"fa fa-thumbs-up\"></i></td>
                        <td>01</td>
                        <td>R\$ 100.00</td>
                        <td>loremd dasdsa dasdas das dsa</td>
                        <td>
                            <i class=\"fa fa-pencil editar initialism\" title=\"Edit\"></i>
                            <i class=\"fa fa-times excluir initialism\" title=\"Remove\"></i>
                            <i class='fa fa-money registrarPagamento initialism' title=\"Mark payed\"></i>
                        </td>
                    </tr>
                    </tbody>
                </table>
            </div>
            <div class=\"col-md-4\">
                <div class=\"row\">
                    <form class=\"formAddEvents\">
                        <div class=\"form-group\">
                            <label for=\"description\">Description</label>
                            <input type=\"text\" class=\"form-control\" id=\"description\">
                        </div>
                        <div class=\"form-group\">
                            <label for=\"value\">Value in R\$</label>
                            <input type=\"text\" class=\"form-control\" id=\"value\">
                        </div>
                        <div class=\"form-group\">
                            <label for=\"date\">Date( optional )</label>
                            <input type=\"date\" class=\"form-control\" id=\"date\">
                        </div>
                        <div class=\"row\">
                            <div class=\"col-md-6\">
                                <div class=\"checkbox\">
                                    <label><input type=\"radio\" value=\"0\" name=\"type\" class=\"type\">Entrada</label>
                                </div>
                            </div>
                            <div class=\"col-md-6\">
                                <div class=\"checkbox\">
                                    <label><input type=\"radio\" value=\"1\" name=\"type\" class=\"type\" checked>Saida</label>
                                </div>
                            </div>
                        </div>

                        <button type=\"button\" class=\"btn btn-default addEventsButton\">Add</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class=\"container-fluid footerMenu\">
        <div class=\"row\">
            <div class=\"col-md-2 text-center\">
                <span>Positive Value</span> R\$ 00,00
            </div>
            <div class=\"col-md-2 text-center\">
                <i class=\"fa fa-minus-square\" aria-hidden=\"true\"></i>
            </div>
            <div class=\"col-md-2 text-center\">
                <span>Negative Value</span> R\$ 00,00
            </div>
            <div class=\"col-md-2 text-center\">
                <i class=\"fa fa-hand-o-right\" aria-hidden=\"true\"></i>
            </div>
            <div class=\"col-md-2 text-center\">
                <span>Balance</span> R\$ 00,00
            </div>
        </div>
    </div>
{% endblock %}

{% block javascript %}
<script>
    \$( document ).ready(function() {

        \$(\".formAddEvents\").on(\"click\", \".addEventsButton\" , function(){
            console.log(\$(this).parent().find(\"#description\").val());
            var objEvent = {
                \"description\" : \$(this).parent().find(\"#description\").val(),
                \"value\" : \$(this).parent().find(\"#value\").val(),
                \"date\" : \$(this).parent().find(\"#date\").val(),
                \"type\" : \$(this).parent().find(\".type:checked\").val()
            }

            console.log(objEvent);

            sendRquest(\"addEvents\", objEvent, \"POST\", true, false);
        });
    });

    function reflesh(){
        sendRquest(\"listEvents\", false, \"GET\", false, function(teste){ updateTable(teste); });
    }

    function updateTable(result){

        var data = JSON.parse(result).hits.hits;

        for( i in data ){
            console.log(data[i]);
        }

//        console.log(JSON.parse(result).hits.hits);
    }

    function sendRquest(route, obj, methodType, updateTable, callbakc){
        \$.ajax({
            url: \"/web/\" + route,
            data: obj,
            method: methodType,
            success: function(result){

                callbakc(result);

                if(updateTable === true){
                    reflesh();
                }
            }}
        );
    }

</script>
{% endblock %}", "index.html.twig", "/var/www/html/Projetos Pessoais/FinanceControl/silex/templates/index.html.twig");
    }
}
