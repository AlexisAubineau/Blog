<?php

/* @FOSUser/Registration/register.html.twig */
class __TwigTemplate_0af6b3426b24a3cff1c105d5545aec07462aeaf6dc207f7d122170db8567edfb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Registration/register.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@FOSUser/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4163c1866eda1a61b95bd92b635dc83777552c8f3e948731ae220722563a5090 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4163c1866eda1a61b95bd92b635dc83777552c8f3e948731ae220722563a5090->enter($__internal_4163c1866eda1a61b95bd92b635dc83777552c8f3e948731ae220722563a5090_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/register.html.twig"));

        $__internal_5f8c22111f1f191eba0247a82d77690d4cca9ade229a20392459cb36baef5094 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5f8c22111f1f191eba0247a82d77690d4cca9ade229a20392459cb36baef5094->enter($__internal_5f8c22111f1f191eba0247a82d77690d4cca9ade229a20392459cb36baef5094_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4163c1866eda1a61b95bd92b635dc83777552c8f3e948731ae220722563a5090->leave($__internal_4163c1866eda1a61b95bd92b635dc83777552c8f3e948731ae220722563a5090_prof);

        
        $__internal_5f8c22111f1f191eba0247a82d77690d4cca9ade229a20392459cb36baef5094->leave($__internal_5f8c22111f1f191eba0247a82d77690d4cca9ade229a20392459cb36baef5094_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_656c990e0241b8ac9c211e5339e2f359f3676ba327a18156804c75384e088de5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_656c990e0241b8ac9c211e5339e2f359f3676ba327a18156804c75384e088de5->enter($__internal_656c990e0241b8ac9c211e5339e2f359f3676ba327a18156804c75384e088de5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_89d312ce449e1d3b146724a2b076f40c3b081a7f6cb2201065ddaeb3f5726518 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_89d312ce449e1d3b146724a2b076f40c3b081a7f6cb2201065ddaeb3f5726518->enter($__internal_89d312ce449e1d3b146724a2b076f40c3b081a7f6cb2201065ddaeb3f5726518_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Registration/register_content.html.twig", "@FOSUser/Registration/register.html.twig", 4)->display($context);
        
        $__internal_89d312ce449e1d3b146724a2b076f40c3b081a7f6cb2201065ddaeb3f5726518->leave($__internal_89d312ce449e1d3b146724a2b076f40c3b081a7f6cb2201065ddaeb3f5726518_prof);

        
        $__internal_656c990e0241b8ac9c211e5339e2f359f3676ba327a18156804c75384e088de5->leave($__internal_656c990e0241b8ac9c211e5339e2f359f3676ba327a18156804c75384e088de5_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/register.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"@FOSUser/layout.html.twig\" %}

{% block fos_user_content %}
{% include \"@FOSUser/Registration/register_content.html.twig\" %}
{% endblock fos_user_content %}
", "@FOSUser/Registration/register.html.twig", "/var/www/b2.2017/Blog/app/Resources/FOSUserBundle/views/Registration/register.html.twig");
    }
}
