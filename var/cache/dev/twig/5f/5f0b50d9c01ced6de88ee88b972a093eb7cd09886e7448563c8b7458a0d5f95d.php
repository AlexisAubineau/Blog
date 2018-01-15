<?php

/* AppBundle::layout.html.twig */
class __TwigTemplate_09d9cf0e4de2a4a624863e799c70452d99b42f515b8e67be1968fac0ba513ad1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'header' => array($this, 'block_header'),
            'body' => array($this, 'block_body'),
            'register' => array($this, 'block_register'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_36cf21652e37c2ddb5a03c98e1a015830036635c2bd6ce5e3345f908b7506527 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_36cf21652e37c2ddb5a03c98e1a015830036635c2bd6ce5e3345f908b7506527->enter($__internal_36cf21652e37c2ddb5a03c98e1a015830036635c2bd6ce5e3345f908b7506527_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle::layout.html.twig"));

        $__internal_9e323368a1c731e5ce6f52a867be09aab1ea67da88f4dd7079f1c182022e2963 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9e323368a1c731e5ce6f52a867be09aab1ea67da88f4dd7079f1c182022e2963->enter($__internal_9e323368a1c731e5ce6f52a867be09aab1ea67da88f4dd7079f1c182022e2963_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle::layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
    <meta charset=\"UTF-8\">
    <title>A.Aubineau</title>
    <link href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/css/bootstrap-grid.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/css/bootstrap-reboot.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/css/style.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
</head>

";
        // line 12
        $this->displayBlock('header', $context, $blocks);
        // line 14
        echo "
";
        // line 15
        $this->displayBlock('body', $context, $blocks);
        // line 17
        echo "
";
        // line 18
        $this->displayBlock('register', $context, $blocks);
        // line 20
        echo "
";
        // line 21
        $this->displayBlock('javascripts', $context, $blocks);
        // line 22
        echo "<script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/jquery.js"), "html", null, true);
        echo "\"></script>
<script src=\"https://unpkg.com/popper.js@1.12.9/dist/umd/popper.js\"></script>
<script src=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/script.js"), "html", null, true);
        echo "\"></script>
</html>
";
        
        $__internal_36cf21652e37c2ddb5a03c98e1a015830036635c2bd6ce5e3345f908b7506527->leave($__internal_36cf21652e37c2ddb5a03c98e1a015830036635c2bd6ce5e3345f908b7506527_prof);

        
        $__internal_9e323368a1c731e5ce6f52a867be09aab1ea67da88f4dd7079f1c182022e2963->leave($__internal_9e323368a1c731e5ce6f52a867be09aab1ea67da88f4dd7079f1c182022e2963_prof);

    }

    // line 12
    public function block_header($context, array $blocks = array())
    {
        $__internal_c1c6980ab3ffbc38bf179d776db1607bceaa84691bdb47dd83c216aa475ef7eb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c1c6980ab3ffbc38bf179d776db1607bceaa84691bdb47dd83c216aa475ef7eb->enter($__internal_c1c6980ab3ffbc38bf179d776db1607bceaa84691bdb47dd83c216aa475ef7eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        $__internal_fa59cf660a2b598646ad2c83434ab1cfc95edfd2abbb78f5a819120c65e7d6cf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fa59cf660a2b598646ad2c83434ab1cfc95edfd2abbb78f5a819120c65e7d6cf->enter($__internal_fa59cf660a2b598646ad2c83434ab1cfc95edfd2abbb78f5a819120c65e7d6cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        
        $__internal_fa59cf660a2b598646ad2c83434ab1cfc95edfd2abbb78f5a819120c65e7d6cf->leave($__internal_fa59cf660a2b598646ad2c83434ab1cfc95edfd2abbb78f5a819120c65e7d6cf_prof);

        
        $__internal_c1c6980ab3ffbc38bf179d776db1607bceaa84691bdb47dd83c216aa475ef7eb->leave($__internal_c1c6980ab3ffbc38bf179d776db1607bceaa84691bdb47dd83c216aa475ef7eb_prof);

    }

    // line 15
    public function block_body($context, array $blocks = array())
    {
        $__internal_841e4ac8b991671563659ebda3479cac3c9dabe06369f602bad89e671f4c0d2d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_841e4ac8b991671563659ebda3479cac3c9dabe06369f602bad89e671f4c0d2d->enter($__internal_841e4ac8b991671563659ebda3479cac3c9dabe06369f602bad89e671f4c0d2d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_9600d312f2bd156d5bc4493527cd64d4610df4ec692d9751df1f7a1b8d5af19d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9600d312f2bd156d5bc4493527cd64d4610df4ec692d9751df1f7a1b8d5af19d->enter($__internal_9600d312f2bd156d5bc4493527cd64d4610df4ec692d9751df1f7a1b8d5af19d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_9600d312f2bd156d5bc4493527cd64d4610df4ec692d9751df1f7a1b8d5af19d->leave($__internal_9600d312f2bd156d5bc4493527cd64d4610df4ec692d9751df1f7a1b8d5af19d_prof);

        
        $__internal_841e4ac8b991671563659ebda3479cac3c9dabe06369f602bad89e671f4c0d2d->leave($__internal_841e4ac8b991671563659ebda3479cac3c9dabe06369f602bad89e671f4c0d2d_prof);

    }

    // line 18
    public function block_register($context, array $blocks = array())
    {
        $__internal_8c2829f166a0f4f93f2169f515951a5ec7a75643f7d930d6a674ac099efa2c84 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8c2829f166a0f4f93f2169f515951a5ec7a75643f7d930d6a674ac099efa2c84->enter($__internal_8c2829f166a0f4f93f2169f515951a5ec7a75643f7d930d6a674ac099efa2c84_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "register"));

        $__internal_7f2704b83ddb74259fd34cd37f9bce3e60dcc2b354d091bdf33335a59094741d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7f2704b83ddb74259fd34cd37f9bce3e60dcc2b354d091bdf33335a59094741d->enter($__internal_7f2704b83ddb74259fd34cd37f9bce3e60dcc2b354d091bdf33335a59094741d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "register"));

        
        $__internal_7f2704b83ddb74259fd34cd37f9bce3e60dcc2b354d091bdf33335a59094741d->leave($__internal_7f2704b83ddb74259fd34cd37f9bce3e60dcc2b354d091bdf33335a59094741d_prof);

        
        $__internal_8c2829f166a0f4f93f2169f515951a5ec7a75643f7d930d6a674ac099efa2c84->leave($__internal_8c2829f166a0f4f93f2169f515951a5ec7a75643f7d930d6a674ac099efa2c84_prof);

    }

    // line 21
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_8004e4f094654b0fee0fd6f596e337c86f3787597e8e0a0f15dc8f2bf15b2d54 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8004e4f094654b0fee0fd6f596e337c86f3787597e8e0a0f15dc8f2bf15b2d54->enter($__internal_8004e4f094654b0fee0fd6f596e337c86f3787597e8e0a0f15dc8f2bf15b2d54_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_ba73b216169304cf93fa40baf54c21b4a6d4bb707ffe0514b25ac640c8a1986d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ba73b216169304cf93fa40baf54c21b4a6d4bb707ffe0514b25ac640c8a1986d->enter($__internal_ba73b216169304cf93fa40baf54c21b4a6d4bb707ffe0514b25ac640c8a1986d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_ba73b216169304cf93fa40baf54c21b4a6d4bb707ffe0514b25ac640c8a1986d->leave($__internal_ba73b216169304cf93fa40baf54c21b4a6d4bb707ffe0514b25ac640c8a1986d_prof);

        
        $__internal_8004e4f094654b0fee0fd6f596e337c86f3787597e8e0a0f15dc8f2bf15b2d54->leave($__internal_8004e4f094654b0fee0fd6f596e337c86f3787597e8e0a0f15dc8f2bf15b2d54_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  145 => 21,  128 => 18,  111 => 15,  94 => 12,  81 => 25,  77 => 24,  71 => 22,  69 => 21,  66 => 20,  64 => 18,  61 => 17,  59 => 15,  56 => 14,  54 => 12,  48 => 9,  44 => 8,  40 => 7,  36 => 6,  29 => 1,);
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
    <meta charset=\"UTF-8\">
    <title>A.Aubineau</title>
    <link href=\"{{  asset('assets/css/bootstrap.min.css') }}\" rel=\"stylesheet\">
    <link href=\"{{  asset('assets/css/bootstrap-grid.min.css') }}\" rel=\"stylesheet\">
    <link href=\"{{  asset('assets/css/bootstrap-reboot.min.css') }}\" rel=\"stylesheet\">
    <link href=\"{{  asset('assets/css/style.css') }}\" rel=\"stylesheet\">
</head>

{% block header %}
{% endblock %}

{% block body %}
{% endblock %}

{% block register %}
{% endblock %}

{% block javascripts %}{% endblock %}
<script src=\"{{  asset('assets/js/jquery.js') }}\"></script>
<script src=\"https://unpkg.com/popper.js@1.12.9/dist/umd/popper.js\"></script>
<script src=\"{{  asset('assets/js/bootstrap.min.js') }}\"></script>
<script src=\"{{  asset('assets/js/script.js') }}\"></script>
</html>
", "AppBundle::layout.html.twig", "/var/www/b2.2017/Blog/src/AppBundle/Resources/views/layout.html.twig");
    }
}
