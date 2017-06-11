<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_cb1d96c756f666b32c0ce23190cdcc297a7db2e5dbcf12d3d607ec0498b182ad extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
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
        $__internal_11b0a9998f9aef39ca5c46275b75436399b282ca942d16d704be38765e65c4ee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_11b0a9998f9aef39ca5c46275b75436399b282ca942d16d704be38765e65c4ee->enter($__internal_11b0a9998f9aef39ca5c46275b75436399b282ca942d16d704be38765e65c4ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_915d195f9c2a56b425793ab838472ce5e868e4b1149b9e59d1a8ef6bc5c4cc97 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_915d195f9c2a56b425793ab838472ce5e868e4b1149b9e59d1a8ef6bc5c4cc97->enter($__internal_915d195f9c2a56b425793ab838472ce5e868e4b1149b9e59d1a8ef6bc5c4cc97_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_11b0a9998f9aef39ca5c46275b75436399b282ca942d16d704be38765e65c4ee->leave($__internal_11b0a9998f9aef39ca5c46275b75436399b282ca942d16d704be38765e65c4ee_prof);

        
        $__internal_915d195f9c2a56b425793ab838472ce5e868e4b1149b9e59d1a8ef6bc5c4cc97->leave($__internal_915d195f9c2a56b425793ab838472ce5e868e4b1149b9e59d1a8ef6bc5c4cc97_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_b8b96711b3824f5662e8f08f797521aa17bc0ceddb2aee6211d04cf6cc641c96 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b8b96711b3824f5662e8f08f797521aa17bc0ceddb2aee6211d04cf6cc641c96->enter($__internal_b8b96711b3824f5662e8f08f797521aa17bc0ceddb2aee6211d04cf6cc641c96_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_8efafa1da17c1a540b27620bf03bd72d32df4b89e898f2fd689ff73638f50bd8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8efafa1da17c1a540b27620bf03bd72d32df4b89e898f2fd689ff73638f50bd8->enter($__internal_8efafa1da17c1a540b27620bf03bd72d32df4b89e898f2fd689ff73638f50bd8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_8efafa1da17c1a540b27620bf03bd72d32df4b89e898f2fd689ff73638f50bd8->leave($__internal_8efafa1da17c1a540b27620bf03bd72d32df4b89e898f2fd689ff73638f50bd8_prof);

        
        $__internal_b8b96711b3824f5662e8f08f797521aa17bc0ceddb2aee6211d04cf6cc641c96->leave($__internal_b8b96711b3824f5662e8f08f797521aa17bc0ceddb2aee6211d04cf6cc641c96_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_46fd39eec90177e12cb97aacca15d7dfee49f1cd2dae8d977e33ecaf8cc3ef11 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_46fd39eec90177e12cb97aacca15d7dfee49f1cd2dae8d977e33ecaf8cc3ef11->enter($__internal_46fd39eec90177e12cb97aacca15d7dfee49f1cd2dae8d977e33ecaf8cc3ef11_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_356c3f5bdf90c23b6d72b86483c64ea99b5b6b5b9e7c1f64f65473815ad0601e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_356c3f5bdf90c23b6d72b86483c64ea99b5b6b5b9e7c1f64f65473815ad0601e->enter($__internal_356c3f5bdf90c23b6d72b86483c64ea99b5b6b5b9e7c1f64f65473815ad0601e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_356c3f5bdf90c23b6d72b86483c64ea99b5b6b5b9e7c1f64f65473815ad0601e->leave($__internal_356c3f5bdf90c23b6d72b86483c64ea99b5b6b5b9e7c1f64f65473815ad0601e_prof);

        
        $__internal_46fd39eec90177e12cb97aacca15d7dfee49f1cd2dae8d977e33ecaf8cc3ef11->leave($__internal_46fd39eec90177e12cb97aacca15d7dfee49f1cd2dae8d977e33ecaf8cc3ef11_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_e237dca3886abfb0e308a875c99ebc2cbb9f0acd8933d99786b109a6d4e54223 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e237dca3886abfb0e308a875c99ebc2cbb9f0acd8933d99786b109a6d4e54223->enter($__internal_e237dca3886abfb0e308a875c99ebc2cbb9f0acd8933d99786b109a6d4e54223_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_4d2f89db0ea24259b5cb8b4c606eb0f9b66174cdacd8e2d5a6d66386ceb2db20 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4d2f89db0ea24259b5cb8b4c606eb0f9b66174cdacd8e2d5a6d66386ceb2db20->enter($__internal_4d2f89db0ea24259b5cb8b4c606eb0f9b66174cdacd8e2d5a6d66386ceb2db20_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_4d2f89db0ea24259b5cb8b4c606eb0f9b66174cdacd8e2d5a6d66386ceb2db20->leave($__internal_4d2f89db0ea24259b5cb8b4c606eb0f9b66174cdacd8e2d5a6d66386ceb2db20_prof);

        
        $__internal_e237dca3886abfb0e308a875c99ebc2cbb9f0acd8933d99786b109a6d4e54223->leave($__internal_e237dca3886abfb0e308a875c99ebc2cbb9f0acd8933d99786b109a6d4e54223_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
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

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "/var/www/html/Projetos Pessoais/FinanceControl/silex/vendor/symfony/web-profiler-bundle/Resources/views/Collector/router.html.twig");
    }
}
