<?php

/* @FOSUser/Registration/register_content.html.twig */
class __TwigTemplate_822bf4587cb9bf7296a4dea27a14fb04879d7d864cca96ece26e9bcd57b5383a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("AppBundle::layout.html.twig", "@FOSUser/Registration/register_content.html.twig", 2);
        $this->blocks = array(
            'register' => array($this, 'block_register'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "AppBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2887a36614aceb4c2383a2c92e94e72b8d9dea5a601020200f4c39a68432365d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2887a36614aceb4c2383a2c92e94e72b8d9dea5a601020200f4c39a68432365d->enter($__internal_2887a36614aceb4c2383a2c92e94e72b8d9dea5a601020200f4c39a68432365d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/register_content.html.twig"));

        $__internal_b77fbc4a6dd7a2a38dee7eab2af8301939539a8e140d5f2c1b0c47588f9a5df9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b77fbc4a6dd7a2a38dee7eab2af8301939539a8e140d5f2c1b0c47588f9a5df9->enter($__internal_b77fbc4a6dd7a2a38dee7eab2af8301939539a8e140d5f2c1b0c47588f9a5df9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/register_content.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2887a36614aceb4c2383a2c92e94e72b8d9dea5a601020200f4c39a68432365d->leave($__internal_2887a36614aceb4c2383a2c92e94e72b8d9dea5a601020200f4c39a68432365d_prof);

        
        $__internal_b77fbc4a6dd7a2a38dee7eab2af8301939539a8e140d5f2c1b0c47588f9a5df9->leave($__internal_b77fbc4a6dd7a2a38dee7eab2af8301939539a8e140d5f2c1b0c47588f9a5df9_prof);

    }

    // line 4
    public function block_register($context, array $blocks = array())
    {
        $__internal_95a1d1073a46845d3c6ebff3a7b002aae1591d67752a1ba82f3f39fa5995638a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_95a1d1073a46845d3c6ebff3a7b002aae1591d67752a1ba82f3f39fa5995638a->enter($__internal_95a1d1073a46845d3c6ebff3a7b002aae1591d67752a1ba82f3f39fa5995638a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "register"));

        $__internal_cabb9f7f24327f4de467ebea093bb380c0a450b36cb00728aa13e1c68cd095cc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cabb9f7f24327f4de467ebea093bb380c0a450b36cb00728aa13e1c68cd095cc->enter($__internal_cabb9f7f24327f4de467ebea093bb380c0a450b36cb00728aa13e1c68cd095cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "register"));

        // line 5
        echo "    <div class=\"register\">
        <form action=\"";
        // line 6
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_registration_register");
        echo "\" method=\"POST\" class=\"form-horizontal\" role=\"form\">
            ";
        // line 7
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start');
        echo "
            <h1>Inscription</h1>
            ";
        // line 10
        echo "            <div class=\"form-group formM\">
                ";
        // line 11
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "email", array()), 'errors');
        echo "
                <div>
                    ";
        // line 13
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "email", array()), 'label', array("label" => "Email "));
        echo "
                </div>
                ";
        // line 15
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "email", array()), 'widget');
        echo "
            </div>
            ";
        // line 18
        echo "            <div class=\"form-group\">
                ";
        // line 19
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "username", array()), 'errors');
        echo "
                <div>
                    ";
        // line 21
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "username", array()), 'label', array("label" => "Pseudo "));
        echo "
                </div>
                ";
        // line 23
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "username", array()), 'widget');
        echo "
            </div>
            ";
        // line 26
        echo "            <div class=\"form-group\">
                ";
        // line 27
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "plainPassword", array()), "first", array()), 'errors');
        echo "
                <div>
                    ";
        // line 29
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "plainPassword", array()), "first", array()), 'label', array("label" => "Mot de passe: "));
        echo "
                </div>
                ";
        // line 31
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "plainPassword", array()), "first", array()), 'widget');
        echo "
            </div>
            ";
        // line 34
        echo "            <div class=\"form-group\">
                ";
        // line 35
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "plainPassword", array()), "second", array()), 'errors');
        echo "
                <div>
                    ";
        // line 37
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "plainPassword", array()), "second", array()), 'label', array("label" => "Mot de passe: "));
        echo "
                </div>
                ";
        // line 39
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "plainPassword", array()), "second", array()), 'widget');
        echo "
            </div>
            <div>
                <input type=\"submit\" value=\"";
        // line 42
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />
            </div>
        </form>
        ";
        // line 45
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'rest');
        echo "
    </div>
";
        
        $__internal_cabb9f7f24327f4de467ebea093bb380c0a450b36cb00728aa13e1c68cd095cc->leave($__internal_cabb9f7f24327f4de467ebea093bb380c0a450b36cb00728aa13e1c68cd095cc_prof);

        
        $__internal_95a1d1073a46845d3c6ebff3a7b002aae1591d67752a1ba82f3f39fa5995638a->leave($__internal_95a1d1073a46845d3c6ebff3a7b002aae1591d67752a1ba82f3f39fa5995638a_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/register_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  140 => 45,  134 => 42,  128 => 39,  123 => 37,  118 => 35,  115 => 34,  110 => 31,  105 => 29,  100 => 27,  97 => 26,  92 => 23,  87 => 21,  82 => 19,  79 => 18,  74 => 15,  69 => 13,  64 => 11,  61 => 10,  56 => 7,  52 => 6,  49 => 5,  40 => 4,  11 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% trans_default_domain 'FOSUserBundle' %}
{% extends 'AppBundle::layout.html.twig' %}

{% block register %}
    <div class=\"register\">
        <form action=\"{{ path('fos_user_registration_register') }}\" method=\"POST\" class=\"form-horizontal\" role=\"form\">
            {{ form_start(form) }}
            <h1>Inscription</h1>
            {# Email adress #}
            <div class=\"form-group formM\">
                {{ form_errors(form.email) }}
                <div>
                    {{ form_label(form.email, \"Email \") }}
                </div>
                {{ form_widget(form.email) }}
            </div>
            {# Pseudo #}
            <div class=\"form-group\">
                {{ form_errors(form.username) }}
                <div>
                    {{ form_label(form.username, \"Pseudo \") }}
                </div>
                {{ form_widget(form.username) }}
            </div>
            {# Password #}
            <div class=\"form-group\">
                {{ form_errors(form.plainPassword.first) }}
                <div>
                    {{ form_label(form.plainPassword.first, \"Mot de passe: \") }}
                </div>
                {{ form_widget(form.plainPassword.first) }}
            </div>
            {# Validation password#}
            <div class=\"form-group\">
                {{ form_errors(form.plainPassword.second) }}
                <div>
                    {{ form_label(form.plainPassword.second, \"Mot de passe: \") }}
                </div>
                {{ form_widget(form.plainPassword.second) }}
            </div>
            <div>
                <input type=\"submit\" value=\"{{ 'registration.submit'|trans }}\" />
            </div>
        </form>
        {{ form_rest(form) }}
    </div>
{% endblock %}
", "@FOSUser/Registration/register_content.html.twig", "/var/www/b2.2017/Blog/app/Resources/FOSUserBundle/views/Registration/register_content.html.twig");
    }
}
