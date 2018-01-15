<?php

/* @FOSUser/layout.html.twig */
class __TwigTemplate_3c0322b61ae638a89cd1c58536aaacabf70a946d19083b1dde316bb16117e28b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AppBundle::layout.html.twig", "@FOSUser/layout.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'content' => array($this, 'block_content'),
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "AppBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ac6dffb851f945cec509185ec22aad6c229c252710362b839e0e37cdff8a0187 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ac6dffb851f945cec509185ec22aad6c229c252710362b839e0e37cdff8a0187->enter($__internal_ac6dffb851f945cec509185ec22aad6c229c252710362b839e0e37cdff8a0187_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/layout.html.twig"));

        $__internal_11c0ba5c38c14f55005a873cc77ded794cc72e52a5d5338c96d29fc2721fc164 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_11c0ba5c38c14f55005a873cc77ded794cc72e52a5d5338c96d29fc2721fc164->enter($__internal_11c0ba5c38c14f55005a873cc77ded794cc72e52a5d5338c96d29fc2721fc164_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ac6dffb851f945cec509185ec22aad6c229c252710362b839e0e37cdff8a0187->leave($__internal_ac6dffb851f945cec509185ec22aad6c229c252710362b839e0e37cdff8a0187_prof);

        
        $__internal_11c0ba5c38c14f55005a873cc77ded794cc72e52a5d5338c96d29fc2721fc164->leave($__internal_11c0ba5c38c14f55005a873cc77ded794cc72e52a5d5338c96d29fc2721fc164_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_e160bd6846ec38176924c4151e465b428f9b55f4b696e8475d116e826c8b5305 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e160bd6846ec38176924c4151e465b428f9b55f4b696e8475d116e826c8b5305->enter($__internal_e160bd6846ec38176924c4151e465b428f9b55f4b696e8475d116e826c8b5305_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_c861dfa7dc46f60aea29c719a027c2e3bca43ee4241c3c77f512c4e767506671 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c861dfa7dc46f60aea29c719a027c2e3bca43ee4241c3c77f512c4e767506671->enter($__internal_c861dfa7dc46f60aea29c719a027c2e3bca43ee4241c3c77f512c4e767506671_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "    ";
        $this->displayBlock('content', $context, $blocks);
        
        $__internal_c861dfa7dc46f60aea29c719a027c2e3bca43ee4241c3c77f512c4e767506671->leave($__internal_c861dfa7dc46f60aea29c719a027c2e3bca43ee4241c3c77f512c4e767506671_prof);

        
        $__internal_e160bd6846ec38176924c4151e465b428f9b55f4b696e8475d116e826c8b5305->leave($__internal_e160bd6846ec38176924c4151e465b428f9b55f4b696e8475d116e826c8b5305_prof);

    }

    public function block_content($context, array $blocks = array())
    {
        $__internal_6e0d98652ff317514892c0a35cd01f14895e12be73906fca9745d9ad9d5baff7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6e0d98652ff317514892c0a35cd01f14895e12be73906fca9745d9ad9d5baff7->enter($__internal_6e0d98652ff317514892c0a35cd01f14895e12be73906fca9745d9ad9d5baff7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_3257241da80f850e80512b3662d2bd25694873b7413b2dc1ab6d77fc131d755d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3257241da80f850e80512b3662d2bd25694873b7413b2dc1ab6d77fc131d755d->enter($__internal_3257241da80f850e80512b3662d2bd25694873b7413b2dc1ab6d77fc131d755d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "        ";
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 5
        echo "    ";
        
        $__internal_3257241da80f850e80512b3662d2bd25694873b7413b2dc1ab6d77fc131d755d->leave($__internal_3257241da80f850e80512b3662d2bd25694873b7413b2dc1ab6d77fc131d755d_prof);

        
        $__internal_6e0d98652ff317514892c0a35cd01f14895e12be73906fca9745d9ad9d5baff7->leave($__internal_6e0d98652ff317514892c0a35cd01f14895e12be73906fca9745d9ad9d5baff7_prof);

    }

    // line 4
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_628f2c62140c80c066b18bb4786ade7cb6ff670910eecebf8577dda27e0526bf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_628f2c62140c80c066b18bb4786ade7cb6ff670910eecebf8577dda27e0526bf->enter($__internal_628f2c62140c80c066b18bb4786ade7cb6ff670910eecebf8577dda27e0526bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_6eef8275467675a5f68e0f4d2ace7423212e8f5e8b324828a96b35566aa9939d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6eef8275467675a5f68e0f4d2ace7423212e8f5e8b324828a96b35566aa9939d->enter($__internal_6eef8275467675a5f68e0f4d2ace7423212e8f5e8b324828a96b35566aa9939d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        
        $__internal_6eef8275467675a5f68e0f4d2ace7423212e8f5e8b324828a96b35566aa9939d->leave($__internal_6eef8275467675a5f68e0f4d2ace7423212e8f5e8b324828a96b35566aa9939d_prof);

        
        $__internal_628f2c62140c80c066b18bb4786ade7cb6ff670910eecebf8577dda27e0526bf->leave($__internal_628f2c62140c80c066b18bb4786ade7cb6ff670910eecebf8577dda27e0526bf_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  83 => 4,  73 => 5,  70 => 4,  51 => 3,  42 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'AppBundle::layout.html.twig' %}
{% block body %}
    {% block content %}
        {% block fos_user_content %}{% endblock %}
    {% endblock %}
{% endblock body %}", "@FOSUser/layout.html.twig", "/var/www/b2.2017/Blog/app/Resources/FOSUserBundle/views/layout.html.twig");
    }
}
