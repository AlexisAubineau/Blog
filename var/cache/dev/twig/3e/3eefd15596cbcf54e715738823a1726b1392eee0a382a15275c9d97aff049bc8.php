<?php

/* SonataAdminBundle:Pager:results.html.twig */
class __TwigTemplate_b4fe16229308d7a21260f954becc7481a3e135be3f91dafe15119524d6f11a7c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:Pager:base_results.html.twig", "SonataAdminBundle:Pager:results.html.twig", 12);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:Pager:base_results.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2cae0c814e76b8407949a164199074a5eefe6f6dc576451a696cd2735e78cc91 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2cae0c814e76b8407949a164199074a5eefe6f6dc576451a696cd2735e78cc91->enter($__internal_2cae0c814e76b8407949a164199074a5eefe6f6dc576451a696cd2735e78cc91_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:Pager:results.html.twig"));

        $__internal_b80322ab989be6852f93cbb95c90bc8c496f09d2bdd4b624bad3106860bcc0bc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b80322ab989be6852f93cbb95c90bc8c496f09d2bdd4b624bad3106860bcc0bc->enter($__internal_b80322ab989be6852f93cbb95c90bc8c496f09d2bdd4b624bad3106860bcc0bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:Pager:results.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2cae0c814e76b8407949a164199074a5eefe6f6dc576451a696cd2735e78cc91->leave($__internal_2cae0c814e76b8407949a164199074a5eefe6f6dc576451a696cd2735e78cc91_prof);

        
        $__internal_b80322ab989be6852f93cbb95c90bc8c496f09d2bdd4b624bad3106860bcc0bc->leave($__internal_b80322ab989be6852f93cbb95c90bc8c496f09d2bdd4b624bad3106860bcc0bc_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:Pager:results.html.twig";
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

{% extends 'SonataAdminBundle:Pager:base_results.html.twig' %}
", "SonataAdminBundle:Pager:results.html.twig", "/var/www/b2.2017/Blog/vendor/sonata-project/admin-bundle/Resources/views/Pager/results.html.twig");
    }
}
