<?php

/* @WebProfiler/Collector/ajax.html.twig */
class __TwigTemplate_ad48617d136352de0c01e12c8f0bd79b0af5213cca6abc9bfb9f4552b7330e34 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/ajax.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1a6539423616bec4c7165cf506b880cb10b9e40afcdbc170d3ab12393ddb04dd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1a6539423616bec4c7165cf506b880cb10b9e40afcdbc170d3ab12393ddb04dd->enter($__internal_1a6539423616bec4c7165cf506b880cb10b9e40afcdbc170d3ab12393ddb04dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_7940eeead516a3c834a9abbf6321fb5cc8f094d4287cf8c3150849c911ee5b02 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7940eeead516a3c834a9abbf6321fb5cc8f094d4287cf8c3150849c911ee5b02->enter($__internal_7940eeead516a3c834a9abbf6321fb5cc8f094d4287cf8c3150849c911ee5b02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1a6539423616bec4c7165cf506b880cb10b9e40afcdbc170d3ab12393ddb04dd->leave($__internal_1a6539423616bec4c7165cf506b880cb10b9e40afcdbc170d3ab12393ddb04dd_prof);

        
        $__internal_7940eeead516a3c834a9abbf6321fb5cc8f094d4287cf8c3150849c911ee5b02->leave($__internal_7940eeead516a3c834a9abbf6321fb5cc8f094d4287cf8c3150849c911ee5b02_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_cac8620a72b31d7fcbd3a270bbf66c02656d9126a14e22e3f16f4c26e49c889a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cac8620a72b31d7fcbd3a270bbf66c02656d9126a14e22e3f16f4c26e49c889a->enter($__internal_cac8620a72b31d7fcbd3a270bbf66c02656d9126a14e22e3f16f4c26e49c889a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_fe17aa1a245ec4a8de6ff4e992a6617795bd1ccb2aa90ff603a1872a34a806fa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fe17aa1a245ec4a8de6ff4e992a6617795bd1ccb2aa90ff603a1872a34a806fa->enter($__internal_fe17aa1a245ec4a8de6ff4e992a6617795bd1ccb2aa90ff603a1872a34a806fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "    ";
        ob_start();
        // line 5
        echo "        ";
        echo twig_include($this->env, $context, "@WebProfiler/Icon/ajax.svg");
        echo "
        <span class=\"sf-toolbar-value sf-toolbar-ajax-requests\">0</span>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 8
        echo "
    ";
        // line 9
        $context["text"] = ('' === $tmp = "        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    ") ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 29
        echo "
    ";
        // line 30
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", array("link" => false));
        echo "
";
        
        $__internal_fe17aa1a245ec4a8de6ff4e992a6617795bd1ccb2aa90ff603a1872a34a806fa->leave($__internal_fe17aa1a245ec4a8de6ff4e992a6617795bd1ccb2aa90ff603a1872a34a806fa_prof);

        
        $__internal_cac8620a72b31d7fcbd3a270bbf66c02656d9126a14e22e3f16f4c26e49c889a->leave($__internal_cac8620a72b31d7fcbd3a270bbf66c02656d9126a14e22e3f16f4c26e49c889a_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/ajax.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 30,  82 => 29,  62 => 9,  59 => 8,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}
    {% set icon %}
        {{ include('@WebProfiler/Icon/ajax.svg') }}
        <span class=\"sf-toolbar-value sf-toolbar-ajax-requests\">0</span>
    {% endset %}

    {% set text %}
        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    {% endset %}

    {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { link: false }) }}
{% endblock %}
", "@WebProfiler/Collector/ajax.html.twig", "/var/www/html/Projetos Pessoais/FinanceControl/silex/vendor/symfony/web-profiler-bundle/Resources/views/Collector/ajax.html.twig");
    }
}
