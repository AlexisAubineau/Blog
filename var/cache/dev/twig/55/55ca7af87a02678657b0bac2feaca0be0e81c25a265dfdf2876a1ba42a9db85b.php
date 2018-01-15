<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_081d924468490197006402b46981e8815db214e2e134c70433c276a061d91c9f extends Twig_Template
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
        $__internal_ed6d0d8bc92b668be7419efe86868cf44cd07aefdab82eda64b51686528d08c1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ed6d0d8bc92b668be7419efe86868cf44cd07aefdab82eda64b51686528d08c1->enter($__internal_ed6d0d8bc92b668be7419efe86868cf44cd07aefdab82eda64b51686528d08c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_ec839b95ddcf6b01aede110094343e7814bcf7b351dd8f0d0efbcdb13ebfe07a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ec839b95ddcf6b01aede110094343e7814bcf7b351dd8f0d0efbcdb13ebfe07a->enter($__internal_ec839b95ddcf6b01aede110094343e7814bcf7b351dd8f0d0efbcdb13ebfe07a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ed6d0d8bc92b668be7419efe86868cf44cd07aefdab82eda64b51686528d08c1->leave($__internal_ed6d0d8bc92b668be7419efe86868cf44cd07aefdab82eda64b51686528d08c1_prof);

        
        $__internal_ec839b95ddcf6b01aede110094343e7814bcf7b351dd8f0d0efbcdb13ebfe07a->leave($__internal_ec839b95ddcf6b01aede110094343e7814bcf7b351dd8f0d0efbcdb13ebfe07a_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_3a704f921e103aae76adeda00903472c475efbfb864189a674b8837fa9d24c06 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3a704f921e103aae76adeda00903472c475efbfb864189a674b8837fa9d24c06->enter($__internal_3a704f921e103aae76adeda00903472c475efbfb864189a674b8837fa9d24c06_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_e2d87258f3bb08b7bee43ea85ec6f87df738dd1b207427f432ad9d3955795c44 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e2d87258f3bb08b7bee43ea85ec6f87df738dd1b207427f432ad9d3955795c44->enter($__internal_e2d87258f3bb08b7bee43ea85ec6f87df738dd1b207427f432ad9d3955795c44_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_e2d87258f3bb08b7bee43ea85ec6f87df738dd1b207427f432ad9d3955795c44->leave($__internal_e2d87258f3bb08b7bee43ea85ec6f87df738dd1b207427f432ad9d3955795c44_prof);

        
        $__internal_3a704f921e103aae76adeda00903472c475efbfb864189a674b8837fa9d24c06->leave($__internal_3a704f921e103aae76adeda00903472c475efbfb864189a674b8837fa9d24c06_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_239d6940a9e099df28f36d2eb5e2cd4c767a8364cbe929beaed99141a1609c6e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_239d6940a9e099df28f36d2eb5e2cd4c767a8364cbe929beaed99141a1609c6e->enter($__internal_239d6940a9e099df28f36d2eb5e2cd4c767a8364cbe929beaed99141a1609c6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_9df9eafe9a0b3a4c6cc1d36e4a0c2f3b935f44ea4408c16168656ff72391c19e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9df9eafe9a0b3a4c6cc1d36e4a0c2f3b935f44ea4408c16168656ff72391c19e->enter($__internal_9df9eafe9a0b3a4c6cc1d36e4a0c2f3b935f44ea4408c16168656ff72391c19e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_9df9eafe9a0b3a4c6cc1d36e4a0c2f3b935f44ea4408c16168656ff72391c19e->leave($__internal_9df9eafe9a0b3a4c6cc1d36e4a0c2f3b935f44ea4408c16168656ff72391c19e_prof);

        
        $__internal_239d6940a9e099df28f36d2eb5e2cd4c767a8364cbe929beaed99141a1609c6e->leave($__internal_239d6940a9e099df28f36d2eb5e2cd4c767a8364cbe929beaed99141a1609c6e_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_4656514022f91e3a05ae101d0e7f788f7ffda34df3d03803296af72eeb54efab = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4656514022f91e3a05ae101d0e7f788f7ffda34df3d03803296af72eeb54efab->enter($__internal_4656514022f91e3a05ae101d0e7f788f7ffda34df3d03803296af72eeb54efab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_19b462fe70b7787adb492f959c5e4a5f470bdbf2c209233ee3134a87931616e3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_19b462fe70b7787adb492f959c5e4a5f470bdbf2c209233ee3134a87931616e3->enter($__internal_19b462fe70b7787adb492f959c5e4a5f470bdbf2c209233ee3134a87931616e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_19b462fe70b7787adb492f959c5e4a5f470bdbf2c209233ee3134a87931616e3->leave($__internal_19b462fe70b7787adb492f959c5e4a5f470bdbf2c209233ee3134a87931616e3_prof);

        
        $__internal_4656514022f91e3a05ae101d0e7f788f7ffda34df3d03803296af72eeb54efab->leave($__internal_4656514022f91e3a05ae101d0e7f788f7ffda34df3d03803296af72eeb54efab_prof);

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
", "@WebProfiler/Collector/router.html.twig", "/var/www/b2.2017/Blog/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
