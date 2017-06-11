<?php

/* index.html.twig */
class __TwigTemplate_8f9661abf7876ef7fdc82fd2c44d5c2790947f5ae68d5f679863a29950605ada extends Twig_Template
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
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
    }

    // line 100
    public function block_javascript($context, array $blocks = array())
    {
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
        return array (  133 => 101,  130 => 100,  32 => 4,  29 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "index.html.twig", "/var/www/html/Projetos Pessoais/FinanceControl/silex/templates/index.html.twig");
    }
}
