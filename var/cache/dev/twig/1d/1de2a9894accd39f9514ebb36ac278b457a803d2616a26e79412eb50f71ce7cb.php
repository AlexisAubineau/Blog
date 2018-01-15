<?php

/* SonataAdminBundle:CRUD:list_array.html.twig */
class __TwigTemplate_076e01c1789015fa11e30efec2f7fa3eb62df09941c0473a06149745af16623e extends Twig_Template
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
        // line 13
        return $this->loadTemplate($this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "getTemplate", array(0 => "base_list_field"), "method"), "SonataAdminBundle:CRUD:list_array.html.twig", 13);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6f16b0606c96530f22e0ab5d77b6d97d8f6e6debfd529aa97e6247a3ae99d595 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6f16b0606c96530f22e0ab5d77b6d97d8f6e6debfd529aa97e6247a3ae99d595->enter($__internal_6f16b0606c96530f22e0ab5d77b6d97d8f6e6debfd529aa97e6247a3ae99d595_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list_array.html.twig"));

        $__internal_d96680bb1ce40c489e3ba1f04443af1507d65dc49cb7c9b00202d5dcabc168a8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d96680bb1ce40c489e3ba1f04443af1507d65dc49cb7c9b00202d5dcabc168a8->enter($__internal_d96680bb1ce40c489e3ba1f04443af1507d65dc49cb7c9b00202d5dcabc168a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list_array.html.twig"));

        // line 11
        $context["list"] = $this->loadTemplate("SonataAdminBundle:CRUD:base_array_macro.html.twig", "SonataAdminBundle:CRUD:list_array.html.twig", 11);
        // line 13
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f16b0606c96530f22e0ab5d77b6d97d8f6e6debfd529aa97e6247a3ae99d595->leave($__internal_6f16b0606c96530f22e0ab5d77b6d97d8f6e6debfd529aa97e6247a3ae99d595_prof);

        
        $__internal_d96680bb1ce40c489e3ba1f04443af1507d65dc49cb7c9b00202d5dcabc168a8->leave($__internal_d96680bb1ce40c489e3ba1f04443af1507d65dc49cb7c9b00202d5dcabc168a8_prof);

    }

    // line 15
    public function block_field($context, array $blocks = array())
    {
        $__internal_937a0a016fddad7a6ac6ca4201c2488c7cf3666bd65d75aca117d28f9267d9fe = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_937a0a016fddad7a6ac6ca4201c2488c7cf3666bd65d75aca117d28f9267d9fe->enter($__internal_937a0a016fddad7a6ac6ca4201c2488c7cf3666bd65d75aca117d28f9267d9fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        $__internal_a24fb95aa5cce4b9a5d69c32d0744489b0c7844cebec1a114e292c42298504bc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a24fb95aa5cce4b9a5d69c32d0744489b0c7844cebec1a114e292c42298504bc->enter($__internal_a24fb95aa5cce4b9a5d69c32d0744489b0c7844cebec1a114e292c42298504bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 16
        echo "    ";
        echo $context["list"]->getrender_array(($context["value"] ?? $this->getContext($context, "value")), ( !$this->getAttribute($this->getAttribute(($context["field_description"] ?? null), "options", array(), "any", false, true), "inline", array(), "any", true, true) || $this->getAttribute($this->getAttribute(($context["field_description"] ?? $this->getContext($context, "field_description")), "options", array()), "inline", array())));
        echo "
";
        
        $__internal_a24fb95aa5cce4b9a5d69c32d0744489b0c7844cebec1a114e292c42298504bc->leave($__internal_a24fb95aa5cce4b9a5d69c32d0744489b0c7844cebec1a114e292c42298504bc_prof);

        
        $__internal_937a0a016fddad7a6ac6ca4201c2488c7cf3666bd65d75aca117d28f9267d9fe->leave($__internal_937a0a016fddad7a6ac6ca4201c2488c7cf3666bd65d75aca117d28f9267d9fe_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:list_array.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  51 => 16,  42 => 15,  32 => 13,  30 => 11,  18 => 13,);
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
{% import 'SonataAdminBundle:CRUD:base_array_macro.html.twig' as list %}

{% extends admin.getTemplate('base_list_field') %}

{% block field %}
    {{ list.render_array(value, field_description.options.inline is not defined or field_description.options.inline) }}
{% endblock %}
", "SonataAdminBundle:CRUD:list_array.html.twig", "/var/www/b2.2017/Blog/vendor/sonata-project/admin-bundle/Resources/views/CRUD/list_array.html.twig");
    }
}
