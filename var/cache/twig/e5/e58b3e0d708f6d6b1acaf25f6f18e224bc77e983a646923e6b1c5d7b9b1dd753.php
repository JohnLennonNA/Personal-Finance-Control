<?php

/* layout.html.twig */
class __TwigTemplate_05274e29f987d317355ed34e1cfb7c701c54f3006d82dc51817425768a413b16 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
            'javascript' => array($this, 'block_javascript'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b4e765370ba47ab6036e8d7558e7262c13da50be2c3af5cf997f5813eea947ea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b4e765370ba47ab6036e8d7558e7262c13da50be2c3af5cf997f5813eea947ea->enter($__internal_b4e765370ba47ab6036e8d7558e7262c13da50be2c3af5cf997f5813eea947ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "layout.html.twig"));

        $__internal_bc855ca651205ef5d0376b334c732c3b4b9850ab3531abdc41f45e64589ca7c1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bc855ca651205ef5d0376b334c732c3b4b9850ab3531abdc41f45e64589ca7c1->enter($__internal_bc855ca651205ef5d0376b334c732c3b4b9850ab3531abdc41f45e64589ca7c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <title>";
        // line 4
        $this->displayBlock('title', $context, $blocks);
        echo " - My Silex Application</title>

        <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\">
        <link href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/font-awesome-4.7.0/css/font-awesome.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
        <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js\"></script>
        <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js\"></script>
        <link href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/main.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />

        <script type=\"text/javascript\">
            var _gaq = _gaq || [];
            _gaq.push(['_setAccount', 'UA-XXXXXXXX-X']);
            _gaq.push(['_trackPageview']);

            (function() {
                var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
                ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
                var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
            })();
        </script>
    </head>
    <body>
        ";
        // line 25
        $this->displayBlock('content', $context, $blocks);
        // line 26
        echo "
        ";
        // line 27
        $this->displayBlock('javascript', $context, $blocks);
        // line 28
        echo "    </body>
</html>
";
        
        $__internal_b4e765370ba47ab6036e8d7558e7262c13da50be2c3af5cf997f5813eea947ea->leave($__internal_b4e765370ba47ab6036e8d7558e7262c13da50be2c3af5cf997f5813eea947ea_prof);

        
        $__internal_bc855ca651205ef5d0376b334c732c3b4b9850ab3531abdc41f45e64589ca7c1->leave($__internal_bc855ca651205ef5d0376b334c732c3b4b9850ab3531abdc41f45e64589ca7c1_prof);

    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        $__internal_f84beb27673dfa6698fa4fc599bd80c04eb69d4dcd64b0783fe2d065faed1991 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f84beb27673dfa6698fa4fc599bd80c04eb69d4dcd64b0783fe2d065faed1991->enter($__internal_f84beb27673dfa6698fa4fc599bd80c04eb69d4dcd64b0783fe2d065faed1991_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_c289f0ffa7494a6ae991c1df8ad58c82b1b7c2db66752aca2bc0538b7128f30a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c289f0ffa7494a6ae991c1df8ad58c82b1b7c2db66752aca2bc0538b7128f30a->enter($__internal_c289f0ffa7494a6ae991c1df8ad58c82b1b7c2db66752aca2bc0538b7128f30a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "";
        
        $__internal_c289f0ffa7494a6ae991c1df8ad58c82b1b7c2db66752aca2bc0538b7128f30a->leave($__internal_c289f0ffa7494a6ae991c1df8ad58c82b1b7c2db66752aca2bc0538b7128f30a_prof);

        
        $__internal_f84beb27673dfa6698fa4fc599bd80c04eb69d4dcd64b0783fe2d065faed1991->leave($__internal_f84beb27673dfa6698fa4fc599bd80c04eb69d4dcd64b0783fe2d065faed1991_prof);

    }

    // line 25
    public function block_content($context, array $blocks = array())
    {
        $__internal_ecfab706ec04fbc3991676d1ecb1f0a3fab19c89528e66b64eb14adfd55c5f2b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ecfab706ec04fbc3991676d1ecb1f0a3fab19c89528e66b64eb14adfd55c5f2b->enter($__internal_ecfab706ec04fbc3991676d1ecb1f0a3fab19c89528e66b64eb14adfd55c5f2b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_ef419e57fdfca928c6fc6475cc41d16b4a4c9ccb532da3c2bf9cd604ca9ee924 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ef419e57fdfca928c6fc6475cc41d16b4a4c9ccb532da3c2bf9cd604ca9ee924->enter($__internal_ef419e57fdfca928c6fc6475cc41d16b4a4c9ccb532da3c2bf9cd604ca9ee924_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        
        $__internal_ef419e57fdfca928c6fc6475cc41d16b4a4c9ccb532da3c2bf9cd604ca9ee924->leave($__internal_ef419e57fdfca928c6fc6475cc41d16b4a4c9ccb532da3c2bf9cd604ca9ee924_prof);

        
        $__internal_ecfab706ec04fbc3991676d1ecb1f0a3fab19c89528e66b64eb14adfd55c5f2b->leave($__internal_ecfab706ec04fbc3991676d1ecb1f0a3fab19c89528e66b64eb14adfd55c5f2b_prof);

    }

    // line 27
    public function block_javascript($context, array $blocks = array())
    {
        $__internal_962a4cb09f786a72ef2e4eb0e79388117e9091f7e2ba5866b20b8a01d28f7087 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_962a4cb09f786a72ef2e4eb0e79388117e9091f7e2ba5866b20b8a01d28f7087->enter($__internal_962a4cb09f786a72ef2e4eb0e79388117e9091f7e2ba5866b20b8a01d28f7087_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascript"));

        $__internal_b841ab79f6ba5783dc2ff6a4d38a15fade40eae30688290131b7c96a5ec964f2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b841ab79f6ba5783dc2ff6a4d38a15fade40eae30688290131b7c96a5ec964f2->enter($__internal_b841ab79f6ba5783dc2ff6a4d38a15fade40eae30688290131b7c96a5ec964f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascript"));

        
        $__internal_b841ab79f6ba5783dc2ff6a4d38a15fade40eae30688290131b7c96a5ec964f2->leave($__internal_b841ab79f6ba5783dc2ff6a4d38a15fade40eae30688290131b7c96a5ec964f2_prof);

        
        $__internal_962a4cb09f786a72ef2e4eb0e79388117e9091f7e2ba5866b20b8a01d28f7087->leave($__internal_962a4cb09f786a72ef2e4eb0e79388117e9091f7e2ba5866b20b8a01d28f7087_prof);

    }

    public function getTemplateName()
    {
        return "layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 27,  100 => 25,  82 => 4,  70 => 28,  68 => 27,  65 => 26,  63 => 25,  45 => 10,  39 => 7,  33 => 4,  28 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <title>{% block title '' %} - My Silex Application</title>

        <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\">
        <link href=\"{{ asset('css/font-awesome-4.7.0/css/font-awesome.min.css') }}\" rel=\"stylesheet\" type=\"text/css\" />
        <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js\"></script>
        <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js\"></script>
        <link href=\"{{ asset('css/main.css') }}\" rel=\"stylesheet\" type=\"text/css\" />

        <script type=\"text/javascript\">
            var _gaq = _gaq || [];
            _gaq.push(['_setAccount', 'UA-XXXXXXXX-X']);
            _gaq.push(['_trackPageview']);

            (function() {
                var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
                ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
                var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
            })();
        </script>
    </head>
    <body>
        {% block content %}{% endblock %}

        {% block javascript %}{% endblock %}
    </body>
</html>
", "layout.html.twig", "/var/www/html/Projetos Pessoais/FinanceControl/silex/templates/layout.html.twig");
    }
}
