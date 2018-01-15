<?php

/* SonataAdminBundle:CRUD:list_boolean.html.twig */
class __TwigTemplate_a5e3d8573a989e790b89e5d14613a29778812d36660825782f74bc67e8cc7530 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'field_span_attributes' => array($this, 'block_field_span_attributes'),
            'field' => array($this, 'block_field'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 12
        return $this->loadTemplate($this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "getTemplate", array(0 => "base_list_field"), "method"), "SonataAdminBundle:CRUD:list_boolean.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_158a4c2e00ca45cf2200c3eadbd49e3ca1fe26f1a387f0c85d810923cb215c01 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_158a4c2e00ca45cf2200c3eadbd49e3ca1fe26f1a387f0c85d810923cb215c01->enter($__internal_158a4c2e00ca45cf2200c3eadbd49e3ca1fe26f1a387f0c85d810923cb215c01_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list_boolean.html.twig"));

        $__internal_5e13b3c98550fb81bcb9e9da4ca26eadf00e6ae15bf0503313b415d7f4fac0ee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5e13b3c98550fb81bcb9e9da4ca26eadf00e6ae15bf0503313b415d7f4fac0ee->enter($__internal_5e13b3c98550fb81bcb9e9da4ca26eadf00e6ae15bf0503313b415d7f4fac0ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list_boolean.html.twig"));

        // line 14
        $context["isEditable"] = (($this->getAttribute($this->getAttribute(($context["field_description"] ?? null), "options", array(), "any", false, true), "editable", array(), "any", true, true) && $this->getAttribute($this->getAttribute(($context["field_description"] ?? $this->getContext($context, "field_description")), "options", array()), "editable", array())) && $this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "hasAccess", array(0 => "edit", 1 => ($context["object"] ?? $this->getContext($context, "object"))), "method"));
        // line 15
        $context["xEditableType"] = $this->env->getExtension('Sonata\AdminBundle\Twig\Extension\SonataAdminExtension')->getXEditableType($this->getAttribute(($context["field_description"] ?? $this->getContext($context, "field_description")), "type", array()));
        // line 17
        if ((($context["isEditable"] ?? $this->getContext($context, "isEditable")) && ($context["xEditableType"] ?? $this->getContext($context, "xEditableType")))) {
        }
        // line 12
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_158a4c2e00ca45cf2200c3eadbd49e3ca1fe26f1a387f0c85d810923cb215c01->leave($__internal_158a4c2e00ca45cf2200c3eadbd49e3ca1fe26f1a387f0c85d810923cb215c01_prof);

        
        $__internal_5e13b3c98550fb81bcb9e9da4ca26eadf00e6ae15bf0503313b415d7f4fac0ee->leave($__internal_5e13b3c98550fb81bcb9e9da4ca26eadf00e6ae15bf0503313b415d7f4fac0ee_prof);

    }

    // line 18
    public function block_field_span_attributes($context, array $blocks = array())
    {
        $__internal_87c179c6f11c36b33f1e91226ffdc34b79dec9dace0b717e94ea0e558e2a54da = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_87c179c6f11c36b33f1e91226ffdc34b79dec9dace0b717e94ea0e558e2a54da->enter($__internal_87c179c6f11c36b33f1e91226ffdc34b79dec9dace0b717e94ea0e558e2a54da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field_span_attributes"));

        $__internal_aed3889b6d5b781fca7038fe9bc2a2ccdbbafd1289a82c63055d5bcdd86c10cc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aed3889b6d5b781fca7038fe9bc2a2ccdbbafd1289a82c63055d5bcdd86c10cc->enter($__internal_aed3889b6d5b781fca7038fe9bc2a2ccdbbafd1289a82c63055d5bcdd86c10cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field_span_attributes"));

        // line 19
        echo "        ";
        ob_start();
        // line 20
        echo "            ";
        $this->displayParentBlock("field_span_attributes", $context, $blocks);
        echo "
            data-source=\"[{value: 0, text: '";
        // line 21
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("label_type_no", array(), "SonataAdminBundle");
        echo "'},{value: 1, text: '";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("label_type_yes", array(), "SonataAdminBundle");
        echo "'}]\"
        ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        // line 23
        echo "    ";
        
        $__internal_aed3889b6d5b781fca7038fe9bc2a2ccdbbafd1289a82c63055d5bcdd86c10cc->leave($__internal_aed3889b6d5b781fca7038fe9bc2a2ccdbbafd1289a82c63055d5bcdd86c10cc_prof);

        
        $__internal_87c179c6f11c36b33f1e91226ffdc34b79dec9dace0b717e94ea0e558e2a54da->leave($__internal_87c179c6f11c36b33f1e91226ffdc34b79dec9dace0b717e94ea0e558e2a54da_prof);

    }

    // line 26
    public function block_field($context, array $blocks = array())
    {
        $__internal_ea955b6ce6de92f8a91f5d55de016a182ff382409f87e30ffebd1d7c6a8aa2d2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ea955b6ce6de92f8a91f5d55de016a182ff382409f87e30ffebd1d7c6a8aa2d2->enter($__internal_ea955b6ce6de92f8a91f5d55de016a182ff382409f87e30ffebd1d7c6a8aa2d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        $__internal_f9f666e48f1a7fdfdf9a30ceb0cc2cce0a491c1acaa23089c2b4bc122334e7ae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f9f666e48f1a7fdfdf9a30ceb0cc2cce0a491c1acaa23089c2b4bc122334e7ae->enter($__internal_f9f666e48f1a7fdfdf9a30ceb0cc2cce0a491c1acaa23089c2b4bc122334e7ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 27
        $this->loadTemplate("SonataAdminBundle:CRUD:display_boolean.html.twig", "SonataAdminBundle:CRUD:list_boolean.html.twig", 27)->display($context);
        
        $__internal_f9f666e48f1a7fdfdf9a30ceb0cc2cce0a491c1acaa23089c2b4bc122334e7ae->leave($__internal_f9f666e48f1a7fdfdf9a30ceb0cc2cce0a491c1acaa23089c2b4bc122334e7ae_prof);

        
        $__internal_ea955b6ce6de92f8a91f5d55de016a182ff382409f87e30ffebd1d7c6a8aa2d2->leave($__internal_ea955b6ce6de92f8a91f5d55de016a182ff382409f87e30ffebd1d7c6a8aa2d2_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:list_boolean.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  91 => 27,  82 => 26,  72 => 23,  65 => 21,  60 => 20,  57 => 19,  48 => 18,  38 => 12,  35 => 17,  33 => 15,  31 => 14,  19 => 12,);
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

{% set isEditable = field_description.options.editable is defined and field_description.options.editable and admin.hasAccess('edit', object) %}
{% set xEditableType = field_description.type|sonata_xeditable_type %}

{% if isEditable and xEditableType %}
    {% block field_span_attributes %}
        {% spaceless %}
            {{ parent() }}
            data-source=\"[{value: 0, text: '{%- trans from 'SonataAdminBundle' %}label_type_no{% endtrans -%}'},{value: 1, text: '{%- trans from 'SonataAdminBundle' %}label_type_yes{% endtrans -%}'}]\"
        {% endspaceless %}
    {% endblock %}
{% endif %}

{% block field %}
    {%- include 'SonataAdminBundle:CRUD:display_boolean.html.twig' -%}
{% endblock %}
", "SonataAdminBundle:CRUD:list_boolean.html.twig", "/var/www/b2.2017/Blog/vendor/sonata-project/admin-bundle/Resources/views/CRUD/list_boolean.html.twig");
    }
}
