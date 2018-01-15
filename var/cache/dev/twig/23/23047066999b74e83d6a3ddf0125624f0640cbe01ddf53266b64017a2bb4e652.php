<?php

/* SonataAdminBundle:CRUD:edit.html.twig */
class __TwigTemplate_b94111bdce322109fc4847cff9b4948d11ef7ed0d19e4b4acc5aecad36ce6ad5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_edit.html.twig", "SonataAdminBundle:CRUD:edit.html.twig", 12);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:CRUD:base_edit.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_22987857db2874a4edf6d002aaef3336bddef4b14c79985835ba12b65a8bc984 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_22987857db2874a4edf6d002aaef3336bddef4b14c79985835ba12b65a8bc984->enter($__internal_22987857db2874a4edf6d002aaef3336bddef4b14c79985835ba12b65a8bc984_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:edit.html.twig"));

        $__internal_79b3a145197d15511833eabc645b9a0060076d4689bac7b71968b3524e9ba7f2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_79b3a145197d15511833eabc645b9a0060076d4689bac7b71968b3524e9ba7f2->enter($__internal_79b3a145197d15511833eabc645b9a0060076d4689bac7b71968b3524e9ba7f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_22987857db2874a4edf6d002aaef3336bddef4b14c79985835ba12b65a8bc984->leave($__internal_22987857db2874a4edf6d002aaef3336bddef4b14c79985835ba12b65a8bc984_prof);

        
        $__internal_79b3a145197d15511833eabc645b9a0060076d4689bac7b71968b3524e9ba7f2->leave($__internal_79b3a145197d15511833eabc645b9a0060076d4689bac7b71968b3524e9ba7f2_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:edit.html.twig";
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

{% extends 'SonataAdminBundle:CRUD:base_edit.html.twig' %}
", "SonataAdminBundle:CRUD:edit.html.twig", "/var/www/b2.2017/Blog/vendor/sonata-project/admin-bundle/Resources/views/CRUD/edit.html.twig");
    }
}
