<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_bc14e08efe9c7351e4f11044fe8d8b07d053262dee57ac9515840444e954cf41 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_26eeacaa3f20c4afc05f2e0917ef388671f6b6c50326d369e316a211ac9e7d14 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_26eeacaa3f20c4afc05f2e0917ef388671f6b6c50326d369e316a211ac9e7d14->enter($__internal_26eeacaa3f20c4afc05f2e0917ef388671f6b6c50326d369e316a211ac9e7d14_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_08cf5587343b17137b62b3f2e77b9bcd16079618cfcc93e3e0d94b369d12562f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_08cf5587343b17137b62b3f2e77b9bcd16079618cfcc93e3e0d94b369d12562f->enter($__internal_08cf5587343b17137b62b3f2e77b9bcd16079618cfcc93e3e0d94b369d12562f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_26eeacaa3f20c4afc05f2e0917ef388671f6b6c50326d369e316a211ac9e7d14->leave($__internal_26eeacaa3f20c4afc05f2e0917ef388671f6b6c50326d369e316a211ac9e7d14_prof);

        
        $__internal_08cf5587343b17137b62b3f2e77b9bcd16079618cfcc93e3e0d94b369d12562f->leave($__internal_08cf5587343b17137b62b3f2e77b9bcd16079618cfcc93e3e0d94b369d12562f_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_876a540b1cb4643b87c84072ddda0ba9212745e5f1ceecc24c22c2d6d6211bf5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_876a540b1cb4643b87c84072ddda0ba9212745e5f1ceecc24c22c2d6d6211bf5->enter($__internal_876a540b1cb4643b87c84072ddda0ba9212745e5f1ceecc24c22c2d6d6211bf5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_f6ffee92b0241ad78979b61e598f207cb0d7175bfbd13c8ad0fc9533cd039e17 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f6ffee92b0241ad78979b61e598f207cb0d7175bfbd13c8ad0fc9533cd039e17->enter($__internal_f6ffee92b0241ad78979b61e598f207cb0d7175bfbd13c8ad0fc9533cd039e17_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_f6ffee92b0241ad78979b61e598f207cb0d7175bfbd13c8ad0fc9533cd039e17->leave($__internal_f6ffee92b0241ad78979b61e598f207cb0d7175bfbd13c8ad0fc9533cd039e17_prof);

        
        $__internal_876a540b1cb4643b87c84072ddda0ba9212745e5f1ceecc24c22c2d6d6211bf5->leave($__internal_876a540b1cb4643b87c84072ddda0ba9212745e5f1ceecc24c22c2d6d6211bf5_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_36de13f2fff7a2ea6704e61d5b8dbefd056b014750abd410e4fbda6707ec3e7b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_36de13f2fff7a2ea6704e61d5b8dbefd056b014750abd410e4fbda6707ec3e7b->enter($__internal_36de13f2fff7a2ea6704e61d5b8dbefd056b014750abd410e4fbda6707ec3e7b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_d776742569682a2d1c41c1b07bd71bd376f4ff678870a11833d97e79a7873cce = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d776742569682a2d1c41c1b07bd71bd376f4ff678870a11833d97e79a7873cce->enter($__internal_d776742569682a2d1c41c1b07bd71bd376f4ff678870a11833d97e79a7873cce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_d776742569682a2d1c41c1b07bd71bd376f4ff678870a11833d97e79a7873cce->leave($__internal_d776742569682a2d1c41c1b07bd71bd376f4ff678870a11833d97e79a7873cce_prof);

        
        $__internal_36de13f2fff7a2ea6704e61d5b8dbefd056b014750abd410e4fbda6707ec3e7b->leave($__internal_36de13f2fff7a2ea6704e61d5b8dbefd056b014750abd410e4fbda6707ec3e7b_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_688ee49a38fbe2ae63e091dc5047d4c6d7846005a259146155dee8309abdb763 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_688ee49a38fbe2ae63e091dc5047d4c6d7846005a259146155dee8309abdb763->enter($__internal_688ee49a38fbe2ae63e091dc5047d4c6d7846005a259146155dee8309abdb763_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_a6a3f3aac26c8dfa159d5c3c423dce7c6800891fcb1ac45990a441e2070b418f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a6a3f3aac26c8dfa159d5c3c423dce7c6800891fcb1ac45990a441e2070b418f->enter($__internal_a6a3f3aac26c8dfa159d5c3c423dce7c6800891fcb1ac45990a441e2070b418f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_a6a3f3aac26c8dfa159d5c3c423dce7c6800891fcb1ac45990a441e2070b418f->leave($__internal_a6a3f3aac26c8dfa159d5c3c423dce7c6800891fcb1ac45990a441e2070b418f_prof);

        
        $__internal_688ee49a38fbe2ae63e091dc5047d4c6d7846005a259146155dee8309abdb763->leave($__internal_688ee49a38fbe2ae63e091dc5047d4c6d7846005a259146155dee8309abdb763_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
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

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "@WebProfiler/Collector/exception.html.twig", "/var/www/html/Projetos Pessoais/FinanceControl/silex/vendor/symfony/web-profiler-bundle/Resources/views/Collector/exception.html.twig");
    }
}
