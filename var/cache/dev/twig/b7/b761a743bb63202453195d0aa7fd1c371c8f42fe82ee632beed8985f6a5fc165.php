<?php

/* @WebProfiler/Collector/ajax.html.twig */
class __TwigTemplate_48e4e35e67bfcc59a4823c1313e44de06f1dbf416cd1ff38a0145015b04ccc45 extends Twig_Template
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
        $__internal_cb475195a2a7b99f7a6f59ae828fde9fdc8f8eb421436e785212caeeedd00c76 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cb475195a2a7b99f7a6f59ae828fde9fdc8f8eb421436e785212caeeedd00c76->enter($__internal_cb475195a2a7b99f7a6f59ae828fde9fdc8f8eb421436e785212caeeedd00c76_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_7c3d73c8802d028ed4c3e32f3132f60692f306dd8e76931f1c0760c30d48ca64 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7c3d73c8802d028ed4c3e32f3132f60692f306dd8e76931f1c0760c30d48ca64->enter($__internal_7c3d73c8802d028ed4c3e32f3132f60692f306dd8e76931f1c0760c30d48ca64_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cb475195a2a7b99f7a6f59ae828fde9fdc8f8eb421436e785212caeeedd00c76->leave($__internal_cb475195a2a7b99f7a6f59ae828fde9fdc8f8eb421436e785212caeeedd00c76_prof);

        
        $__internal_7c3d73c8802d028ed4c3e32f3132f60692f306dd8e76931f1c0760c30d48ca64->leave($__internal_7c3d73c8802d028ed4c3e32f3132f60692f306dd8e76931f1c0760c30d48ca64_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_ca39098f57b69b12a72e1592ee373d6cea4b9b1d6972eb47cbc0273b85339dfa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ca39098f57b69b12a72e1592ee373d6cea4b9b1d6972eb47cbc0273b85339dfa->enter($__internal_ca39098f57b69b12a72e1592ee373d6cea4b9b1d6972eb47cbc0273b85339dfa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_9f853ee35fcbf8347bc9f6a08297d6120ef62c6bdfdd2a4c2d7cda2bbbe6ee37 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9f853ee35fcbf8347bc9f6a08297d6120ef62c6bdfdd2a4c2d7cda2bbbe6ee37->enter($__internal_9f853ee35fcbf8347bc9f6a08297d6120ef62c6bdfdd2a4c2d7cda2bbbe6ee37_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "    ";
        ob_start();
        // line 5
        echo "        ";
        echo twig_include($this->env, $context, "@WebProfiler/Icon/ajax.svg");
        echo "
        <span class=\"sf-toolbar-value sf-toolbar-ajax-request-counter\">0</span>
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
        
        $__internal_9f853ee35fcbf8347bc9f6a08297d6120ef62c6bdfdd2a4c2d7cda2bbbe6ee37->leave($__internal_9f853ee35fcbf8347bc9f6a08297d6120ef62c6bdfdd2a4c2d7cda2bbbe6ee37_prof);

        
        $__internal_ca39098f57b69b12a72e1592ee373d6cea4b9b1d6972eb47cbc0273b85339dfa->leave($__internal_ca39098f57b69b12a72e1592ee373d6cea4b9b1d6972eb47cbc0273b85339dfa_prof);

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
        <span class=\"sf-toolbar-value sf-toolbar-ajax-request-counter\">0</span>
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
", "@WebProfiler/Collector/ajax.html.twig", "/var/www/b2.2017/Blog/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/ajax.html.twig");
    }
}
