<?php

/* SonataAdminBundle:CRUD:list_inner_row.html.twig */
class __TwigTemplate_86c362501b2ac8e6252133ad22f367126fe7e3d07ae47426aded1b4d14983890 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_list_inner_row.html.twig", "SonataAdminBundle:CRUD:list_inner_row.html.twig", 12);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:CRUD:base_list_inner_row.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5e06ff6ba0e39c6e77016ed2a30981552c3c1c1604d8ebae540ad2b7172f76e3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5e06ff6ba0e39c6e77016ed2a30981552c3c1c1604d8ebae540ad2b7172f76e3->enter($__internal_5e06ff6ba0e39c6e77016ed2a30981552c3c1c1604d8ebae540ad2b7172f76e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list_inner_row.html.twig"));

        $__internal_3634b3aee044deeed17fdc6f60465baaea832e9ebc08eb8ed582d1dbcba246b6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3634b3aee044deeed17fdc6f60465baaea832e9ebc08eb8ed582d1dbcba246b6->enter($__internal_3634b3aee044deeed17fdc6f60465baaea832e9ebc08eb8ed582d1dbcba246b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list_inner_row.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5e06ff6ba0e39c6e77016ed2a30981552c3c1c1604d8ebae540ad2b7172f76e3->leave($__internal_5e06ff6ba0e39c6e77016ed2a30981552c3c1c1604d8ebae540ad2b7172f76e3_prof);

        
        $__internal_3634b3aee044deeed17fdc6f60465baaea832e9ebc08eb8ed582d1dbcba246b6->leave($__internal_3634b3aee044deeed17fdc6f60465baaea832e9ebc08eb8ed582d1dbcba246b6_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:list_inner_row.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  11 => 12,);
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

{% extends 'SonataAdminBundle:CRUD:base_list_inner_row.html.twig' %}
", "SonataAdminBundle:CRUD:list_inner_row.html.twig", "/var/www/b2.2017/Blog/vendor/sonata-project/admin-bundle/Resources/views/CRUD/list_inner_row.html.twig");
    }
}
