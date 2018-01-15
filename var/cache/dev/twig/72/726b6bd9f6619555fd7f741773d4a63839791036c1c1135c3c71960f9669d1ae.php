<?php

/* SonataAdminBundle:CRUD:list.html.twig */
class __TwigTemplate_a4cc5d5973f2dd8d673dcdba94622682310c0dffe163410882f0a2c2a67751ed extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_list.html.twig", "SonataAdminBundle:CRUD:list.html.twig", 12);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:CRUD:base_list.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e2d994e0c86afcdc3a1b30a383e2cfeac528a02752a6843a7651c7402a901fac = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e2d994e0c86afcdc3a1b30a383e2cfeac528a02752a6843a7651c7402a901fac->enter($__internal_e2d994e0c86afcdc3a1b30a383e2cfeac528a02752a6843a7651c7402a901fac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list.html.twig"));

        $__internal_35ff0029240479d4c39e2403b1d9a8d1a09608a1deb49df5441c68df7e65ed5e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_35ff0029240479d4c39e2403b1d9a8d1a09608a1deb49df5441c68df7e65ed5e->enter($__internal_35ff0029240479d4c39e2403b1d9a8d1a09608a1deb49df5441c68df7e65ed5e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e2d994e0c86afcdc3a1b30a383e2cfeac528a02752a6843a7651c7402a901fac->leave($__internal_e2d994e0c86afcdc3a1b30a383e2cfeac528a02752a6843a7651c7402a901fac_prof);

        
        $__internal_35ff0029240479d4c39e2403b1d9a8d1a09608a1deb49df5441c68df7e65ed5e->leave($__internal_35ff0029240479d4c39e2403b1d9a8d1a09608a1deb49df5441c68df7e65ed5e_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:list.html.twig";
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

{% extends 'SonataAdminBundle:CRUD:base_list.html.twig' %}
", "SonataAdminBundle:CRUD:list.html.twig", "/var/www/b2.2017/Blog/vendor/sonata-project/admin-bundle/Resources/views/CRUD/list.html.twig");
    }
}
