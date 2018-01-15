<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_9f5fe0b85cc297b667dcbf190737e21c3ab256bad503ae8e7e05764556cb939d extends Twig_Template
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
        $__internal_fb77cd82004b61adf315f531a9bc853f1529204fef327f94e987ed063740abcd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fb77cd82004b61adf315f531a9bc853f1529204fef327f94e987ed063740abcd->enter($__internal_fb77cd82004b61adf315f531a9bc853f1529204fef327f94e987ed063740abcd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_6015cd2b931254c6d570f4f2b160215af507175b97239e109a2793f853f1298f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6015cd2b931254c6d570f4f2b160215af507175b97239e109a2793f853f1298f->enter($__internal_6015cd2b931254c6d570f4f2b160215af507175b97239e109a2793f853f1298f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fb77cd82004b61adf315f531a9bc853f1529204fef327f94e987ed063740abcd->leave($__internal_fb77cd82004b61adf315f531a9bc853f1529204fef327f94e987ed063740abcd_prof);

        
        $__internal_6015cd2b931254c6d570f4f2b160215af507175b97239e109a2793f853f1298f->leave($__internal_6015cd2b931254c6d570f4f2b160215af507175b97239e109a2793f853f1298f_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_c7a67264b200aa791ea17203fc1a132889fdf11fb32ebf87704648bf178284d9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c7a67264b200aa791ea17203fc1a132889fdf11fb32ebf87704648bf178284d9->enter($__internal_c7a67264b200aa791ea17203fc1a132889fdf11fb32ebf87704648bf178284d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_beaf01226b3f28ca947eab92d25b80df67be6e2d66654b14cb501786a143cf21 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_beaf01226b3f28ca947eab92d25b80df67be6e2d66654b14cb501786a143cf21->enter($__internal_beaf01226b3f28ca947eab92d25b80df67be6e2d66654b14cb501786a143cf21_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_beaf01226b3f28ca947eab92d25b80df67be6e2d66654b14cb501786a143cf21->leave($__internal_beaf01226b3f28ca947eab92d25b80df67be6e2d66654b14cb501786a143cf21_prof);

        
        $__internal_c7a67264b200aa791ea17203fc1a132889fdf11fb32ebf87704648bf178284d9->leave($__internal_c7a67264b200aa791ea17203fc1a132889fdf11fb32ebf87704648bf178284d9_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_8e32540ca6de6fbb139fbf2fb4f1112da163d1ae49b095979cc4c7e3740e3158 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8e32540ca6de6fbb139fbf2fb4f1112da163d1ae49b095979cc4c7e3740e3158->enter($__internal_8e32540ca6de6fbb139fbf2fb4f1112da163d1ae49b095979cc4c7e3740e3158_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_102b1fdd1af71949e9ba3852f8920f28b3fdce65b23dd688388bd7daa112041b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_102b1fdd1af71949e9ba3852f8920f28b3fdce65b23dd688388bd7daa112041b->enter($__internal_102b1fdd1af71949e9ba3852f8920f28b3fdce65b23dd688388bd7daa112041b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_102b1fdd1af71949e9ba3852f8920f28b3fdce65b23dd688388bd7daa112041b->leave($__internal_102b1fdd1af71949e9ba3852f8920f28b3fdce65b23dd688388bd7daa112041b_prof);

        
        $__internal_8e32540ca6de6fbb139fbf2fb4f1112da163d1ae49b095979cc4c7e3740e3158->leave($__internal_8e32540ca6de6fbb139fbf2fb4f1112da163d1ae49b095979cc4c7e3740e3158_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_4550ae3006d63c5b7462e4f9889c22892f21914df10912276d0ea823abca01a0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4550ae3006d63c5b7462e4f9889c22892f21914df10912276d0ea823abca01a0->enter($__internal_4550ae3006d63c5b7462e4f9889c22892f21914df10912276d0ea823abca01a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_61e01ab3728d15e330f81fe9d077069f9d55d1ba56d6b269732d2a2fabd12522 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_61e01ab3728d15e330f81fe9d077069f9d55d1ba56d6b269732d2a2fabd12522->enter($__internal_61e01ab3728d15e330f81fe9d077069f9d55d1ba56d6b269732d2a2fabd12522_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
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
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_61e01ab3728d15e330f81fe9d077069f9d55d1ba56d6b269732d2a2fabd12522->leave($__internal_61e01ab3728d15e330f81fe9d077069f9d55d1ba56d6b269732d2a2fabd12522_prof);

        
        $__internal_4550ae3006d63c5b7462e4f9889c22892f21914df10912276d0ea823abca01a0->leave($__internal_4550ae3006d63c5b7462e4f9889c22892f21914df10912276d0ea823abca01a0_prof);

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
", "@WebProfiler/Collector/exception.html.twig", "/var/www/b2.2017/Blog/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
