<?php

/* SonataAdminBundle:CRUD:list_datetime.html.twig */
class __TwigTemplate_39126346c0d24ea83d9621770d8a69c0a78a7e9e716f7796847b7e3a6936f231 extends Twig_Template
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
        return $this->loadTemplate($this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "getTemplate", array(0 => "base_list_field"), "method"), "SonataAdminBundle:CRUD:list_datetime.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6aa42a9eb4931d05ba174f134787b6e91e90d14759ab2015abe91e3636f3d9b7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6aa42a9eb4931d05ba174f134787b6e91e90d14759ab2015abe91e3636f3d9b7->enter($__internal_6aa42a9eb4931d05ba174f134787b6e91e90d14759ab2015abe91e3636f3d9b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list_datetime.html.twig"));

        $__internal_e6634bbaf178edba13b40dbbb1734a7df9ededaa6625cc6c4ed676166db1e7e0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e6634bbaf178edba13b40dbbb1734a7df9ededaa6625cc6c4ed676166db1e7e0->enter($__internal_e6634bbaf178edba13b40dbbb1734a7df9ededaa6625cc6c4ed676166db1e7e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list_datetime.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6aa42a9eb4931d05ba174f134787b6e91e90d14759ab2015abe91e3636f3d9b7->leave($__internal_6aa42a9eb4931d05ba174f134787b6e91e90d14759ab2015abe91e3636f3d9b7_prof);

        
        $__internal_e6634bbaf178edba13b40dbbb1734a7df9ededaa6625cc6c4ed676166db1e7e0->leave($__internal_e6634bbaf178edba13b40dbbb1734a7df9ededaa6625cc6c4ed676166db1e7e0_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_1107f6b937b49bba85628ffd8743919b7712130c702f8a96f363e6c6bae1610b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1107f6b937b49bba85628ffd8743919b7712130c702f8a96f363e6c6bae1610b->enter($__internal_1107f6b937b49bba85628ffd8743919b7712130c702f8a96f363e6c6bae1610b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        $__internal_cb6a63d0288361cec6a06407f8d7689b5dc4ad23dd4036bfe19fd71772330788 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cb6a63d0288361cec6a06407f8d7689b5dc4ad23dd4036bfe19fd71772330788->enter($__internal_cb6a63d0288361cec6a06407f8d7689b5dc4ad23dd4036bfe19fd71772330788_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        if (twig_test_empty(($context["value"] ?? $this->getContext($context, "value")))) {
            // line 16
            echo "&nbsp;";
        } elseif ($this->getAttribute($this->getAttribute(        // line 17
($context["field_description"] ?? null), "options", array(), "any", false, true), "format", array(), "any", true, true)) {
            // line 18
            $context["timezone"] = (($this->getAttribute($this->getAttribute(($context["field_description"] ?? null), "options", array(), "any", false, true), "timezone", array(), "any", true, true)) ? ($this->getAttribute($this->getAttribute(($context["field_description"] ?? $this->getContext($context, "field_description")), "options", array()), "timezone", array())) : (null));
            // line 19
            echo "        ";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, ($context["value"] ?? $this->getContext($context, "value")), $this->getAttribute($this->getAttribute(($context["field_description"] ?? $this->getContext($context, "field_description")), "options", array()), "format", array()), ($context["timezone"] ?? $this->getContext($context, "timezone"))), "html", null, true);
        } elseif ($this->getAttribute($this->getAttribute(        // line 20
($context["field_description"] ?? null), "options", array(), "any", false, true), "timezone", array(), "any", true, true)) {
            // line 21
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, ($context["value"] ?? $this->getContext($context, "value")), null, $this->getAttribute($this->getAttribute(($context["field_description"] ?? $this->getContext($context, "field_description")), "options", array()), "timezone", array())), "html", null, true);
        } else {
            // line 23
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, ($context["value"] ?? $this->getContext($context, "value"))), "html", null, true);
        }
        
        $__internal_cb6a63d0288361cec6a06407f8d7689b5dc4ad23dd4036bfe19fd71772330788->leave($__internal_cb6a63d0288361cec6a06407f8d7689b5dc4ad23dd4036bfe19fd71772330788_prof);

        
        $__internal_1107f6b937b49bba85628ffd8743919b7712130c702f8a96f363e6c6bae1610b->leave($__internal_1107f6b937b49bba85628ffd8743919b7712130c702f8a96f363e6c6bae1610b_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:list_datetime.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  64 => 23,  61 => 21,  59 => 20,  56 => 19,  54 => 18,  52 => 17,  50 => 16,  48 => 15,  39 => 14,  18 => 12,);
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
    {%- if value is empty -%}
        &nbsp;
    {%- elseif field_description.options.format is defined -%}
        {% set timezone = field_description.options.timezone is defined ? field_description.options.timezone : null %}
        {{ value|date(field_description.options.format, timezone) }}
    {%- elseif field_description.options.timezone is defined -%}
        {{ value|date(null, field_description.options.timezone) }}
    {%- else -%}
        {{ value|date }}
    {%- endif -%}
{% endblock %}
", "SonataAdminBundle:CRUD:list_datetime.html.twig", "/var/www/b2.2017/Blog/vendor/sonata-project/admin-bundle/Resources/views/CRUD/list_datetime.html.twig");
    }
}
