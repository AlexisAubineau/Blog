<?php

/* SonataAdminBundle:CRUD:list_string.html.twig */
class __TwigTemplate_54543ba3d7da7ccb94b33ba4fd5e17f0d5ca2a7b6e7852187eae00620d713f13 extends Twig_Template
{
    protected function doGetParent(array $context)
    {
        // line 12
        return $this->loadTemplate($this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "getTemplate", array(0 => "base_list_field"), "method"), "SonataAdminBundle:CRUD:list_string.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_92755abe74bb4f747f157b0fa064dab8b5c05667730007ee4f99f1bc1411322b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_92755abe74bb4f747f157b0fa064dab8b5c05667730007ee4f99f1bc1411322b->enter($__internal_92755abe74bb4f747f157b0fa064dab8b5c05667730007ee4f99f1bc1411322b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list_string.html.twig"));

        $__internal_28fd820db9965dfc45225e39693ef78bb0f8fd7d5521bf5e3b18842744fe62a3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_28fd820db9965dfc45225e39693ef78bb0f8fd7d5521bf5e3b18842744fe62a3->enter($__internal_28fd820db9965dfc45225e39693ef78bb0f8fd7d5521bf5e3b18842744fe62a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list_string.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_92755abe74bb4f747f157b0fa064dab8b5c05667730007ee4f99f1bc1411322b->leave($__internal_92755abe74bb4f747f157b0fa064dab8b5c05667730007ee4f99f1bc1411322b_prof);

        
        $__internal_28fd820db9965dfc45225e39693ef78bb0f8fd7d5521bf5e3b18842744fe62a3->leave($__internal_28fd820db9965dfc45225e39693ef78bb0f8fd7d5521bf5e3b18842744fe62a3_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:list_string.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  9 => 12,);
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
", "SonataAdminBundle:CRUD:list_string.html.twig", "/var/www/b2.2017/Blog/vendor/sonata-project/admin-bundle/Resources/views/CRUD/list_string.html.twig");
    }
}
