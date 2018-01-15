<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_57cbda427cd2782a895c726a3be2b0316ae9ff6d108cadb2b974007d69f5f6d4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_234436450f553209f359ac94644e2b9e98164c81d70aa67e66b9a8c07a9892cf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_234436450f553209f359ac94644e2b9e98164c81d70aa67e66b9a8c07a9892cf->enter($__internal_234436450f553209f359ac94644e2b9e98164c81d70aa67e66b9a8c07a9892cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_8d8b7c09df34e8a3b6c3c67b7d317110b76973e8b8553d462a660b2512357263 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8d8b7c09df34e8a3b6c3c67b7d317110b76973e8b8553d462a660b2512357263->enter($__internal_8d8b7c09df34e8a3b6c3c67b7d317110b76973e8b8553d462a660b2512357263_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_234436450f553209f359ac94644e2b9e98164c81d70aa67e66b9a8c07a9892cf->leave($__internal_234436450f553209f359ac94644e2b9e98164c81d70aa67e66b9a8c07a9892cf_prof);

        
        $__internal_8d8b7c09df34e8a3b6c3c67b7d317110b76973e8b8553d462a660b2512357263->leave($__internal_8d8b7c09df34e8a3b6c3c67b7d317110b76973e8b8553d462a660b2512357263_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_8ac89a5bcf357d203d1dd9dbcf30e05aea09fa32f06fd2285953fff4ad433a11 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8ac89a5bcf357d203d1dd9dbcf30e05aea09fa32f06fd2285953fff4ad433a11->enter($__internal_8ac89a5bcf357d203d1dd9dbcf30e05aea09fa32f06fd2285953fff4ad433a11_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_851e64c9df3f58a61068b25485f7fb236bc032d93d6ef97b30d1e93270b3aecc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_851e64c9df3f58a61068b25485f7fb236bc032d93d6ef97b30d1e93270b3aecc->enter($__internal_851e64c9df3f58a61068b25485f7fb236bc032d93d6ef97b30d1e93270b3aecc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
";
        
        $__internal_851e64c9df3f58a61068b25485f7fb236bc032d93d6ef97b30d1e93270b3aecc->leave($__internal_851e64c9df3f58a61068b25485f7fb236bc032d93d6ef97b30d1e93270b3aecc_prof);

        
        $__internal_8ac89a5bcf357d203d1dd9dbcf30e05aea09fa32f06fd2285953fff4ad433a11->leave($__internal_8ac89a5bcf357d203d1dd9dbcf30e05aea09fa32f06fd2285953fff4ad433a11_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_1e8c946638001dd198574a68e81115d4b0ef4df85dfccb272f3edbbda6c6b17b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1e8c946638001dd198574a68e81115d4b0ef4df85dfccb272f3edbbda6c6b17b->enter($__internal_1e8c946638001dd198574a68e81115d4b0ef4df85dfccb272f3edbbda6c6b17b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_c84fee1fa9f2413b5f70c497226827131e84ef7826731e07586e241a31f8efe1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c84fee1fa9f2413b5f70c497226827131e84ef7826731e07586e241a31f8efe1->enter($__internal_c84fee1fa9f2413b5f70c497226827131e84ef7826731e07586e241a31f8efe1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_c84fee1fa9f2413b5f70c497226827131e84ef7826731e07586e241a31f8efe1->leave($__internal_c84fee1fa9f2413b5f70c497226827131e84ef7826731e07586e241a31f8efe1_prof);

        
        $__internal_1e8c946638001dd198574a68e81115d4b0ef4df85dfccb272f3edbbda6c6b17b->leave($__internal_1e8c946638001dd198574a68e81115d4b0ef4df85dfccb272f3edbbda6c6b17b_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_c8d6c9a0fda9f529ce411c74b8d50266c53eda5109c8a2e4d87737de572255cb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c8d6c9a0fda9f529ce411c74b8d50266c53eda5109c8a2e4d87737de572255cb->enter($__internal_c8d6c9a0fda9f529ce411c74b8d50266c53eda5109c8a2e4d87737de572255cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_34e8197be492a734b0089c127c5179519b53ec74f7cbb0719d8e9ee386739f98 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_34e8197be492a734b0089c127c5179519b53ec74f7cbb0719d8e9ee386739f98->enter($__internal_34e8197be492a734b0089c127c5179519b53ec74f7cbb0719d8e9ee386739f98_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_34e8197be492a734b0089c127c5179519b53ec74f7cbb0719d8e9ee386739f98->leave($__internal_34e8197be492a734b0089c127c5179519b53ec74f7cbb0719d8e9ee386739f98_prof);

        
        $__internal_c8d6c9a0fda9f529ce411c74b8d50266c53eda5109c8a2e4d87737de572255cb->leave($__internal_c8d6c9a0fda9f529ce411c74b8d50266c53eda5109c8a2e4d87737de572255cb_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  226 => 141,  217 => 140,  200 => 137,  191 => 136,  51 => 4,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "@Twig/Exception/exception_full.html.twig", "/var/www/b2.2017/Blog/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
