<?php

/* SonataAdminBundle:CRUD:list__batch.html.twig */
class __TwigTemplate_b100e0551f8b7cfa7e2327f0b957efd60925cd5413bbb44a3eaff80f40a691d8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'field' => array($this, 'block_field'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 12
        return $this->loadTemplate($this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "getTemplate", array(0 => "base_list_field"), "method"), "SonataAdminBundle:CRUD:list__batch.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6f985dc086d2801ebe76c31ebfc21c000944e9f3c7987335ed42399f8898f9c5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6f985dc086d2801ebe76c31ebfc21c000944e9f3c7987335ed42399f8898f9c5->enter($__internal_6f985dc086d2801ebe76c31ebfc21c000944e9f3c7987335ed42399f8898f9c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list__batch.html.twig"));

        $__internal_5e4af403bfd40116ea306f0470160736e0bdd0e61814982b13d70275b0f2e962 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5e4af403bfd40116ea306f0470160736e0bdd0e61814982b13d70275b0f2e962->enter($__internal_5e4af403bfd40116ea306f0470160736e0bdd0e61814982b13d70275b0f2e962_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list__batch.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f985dc086d2801ebe76c31ebfc21c000944e9f3c7987335ed42399f8898f9c5->leave($__internal_6f985dc086d2801ebe76c31ebfc21c000944e9f3c7987335ed42399f8898f9c5_prof);

        
        $__internal_5e4af403bfd40116ea306f0470160736e0bdd0e61814982b13d70275b0f2e962->leave($__internal_5e4af403bfd40116ea306f0470160736e0bdd0e61814982b13d70275b0f2e962_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_9fbd360785b7c4c75e6f465ec6208b3bfe2576ab5511e1e13748057a5a1823aa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9fbd360785b7c4c75e6f465ec6208b3bfe2576ab5511e1e13748057a5a1823aa->enter($__internal_9fbd360785b7c4c75e6f465ec6208b3bfe2576ab5511e1e13748057a5a1823aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        $__internal_370bb34c53026f953a1798ecaf663c10ef156f1d4078bbe1d6ba4f51ef9d2514 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_370bb34c53026f953a1798ecaf663c10ef156f1d4078bbe1d6ba4f51ef9d2514->enter($__internal_370bb34c53026f953a1798ecaf663c10ef156f1d4078bbe1d6ba4f51ef9d2514_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        echo "    <input type=\"checkbox\" name=\"idx[]\" value=\"";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "id", array(0 => ($context["object"] ?? $this->getContext($context, "object"))), "method"), "html", null, true);
        echo "\">
";
        
        $__internal_370bb34c53026f953a1798ecaf663c10ef156f1d4078bbe1d6ba4f51ef9d2514->leave($__internal_370bb34c53026f953a1798ecaf663c10ef156f1d4078bbe1d6ba4f51ef9d2514_prof);

        
        $__internal_9fbd360785b7c4c75e6f465ec6208b3bfe2576ab5511e1e13748057a5a1823aa->leave($__internal_9fbd360785b7c4c75e6f465ec6208b3bfe2576ab5511e1e13748057a5a1823aa_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:list__batch.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  48 => 15,  39 => 14,  18 => 12,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{#

This file is part of the Sonata package.

(c) Thomas Rabaix <thomas.rabaix@sonata-project.org>

For the full copyright and license information, please view the LICENSE
file that was distributed with this source code.

#}

{% extends admin.getTemplate('base_list_field') %}

{% block field %}
    <input type=\"checkbox\" name=\"idx[]\" value=\"{{ admin.id(object) }}\">
{% endblock %}
", "SonataAdminBundle:CRUD:list__batch.html.twig", "/var/www/b2.2017/Blog/vendor/sonata-project/admin-bundle/Resources/views/CRUD/list__batch.html.twig");
    }
}
