<?php

/* @Twig/layout.html.twig */
class __TwigTemplate_9d5bfdefcc91b06752e3693ffce5914af6f2822d6c4588257cd2999f2499185c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_fed4ee74842daffddb2eb521164dd77874e391c4b4e22759d5b0e2d36d62e970 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fed4ee74842daffddb2eb521164dd77874e391c4b4e22759d5b0e2d36d62e970->enter($__internal_fed4ee74842daffddb2eb521164dd77874e391c4b4e22759d5b0e2d36d62e970_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_d7d38507a831bde7a30dc41591cd47223cea7ffdf251ea28d2aa4f93e8f416b0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d7d38507a831bde7a30dc41591cd47223cea7ffdf251ea28d2aa4f93e8f416b0->enter($__internal_d7d38507a831bde7a30dc41591cd47223cea7ffdf251ea28d2aa4f93e8f416b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 8
        echo twig_include($this->env, $context, "@Twig/images/favicon.png.base64");
        echo "\">
        <style>";
        // line 9
        echo twig_include($this->env, $context, "@Twig/exception.css.twig");
        echo "</style>
        ";
        // line 10
        $this->displayBlock('head', $context, $blocks);
        // line 11
        echo "    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">";
        // line 15
        echo twig_include($this->env, $context, "@Twig/images/symfony-logo.svg");
        echo " Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">";
        // line 19
        echo twig_include($this->env, $context, "@Twig/images/icon-book.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">";
        // line 26
        echo twig_include($this->env, $context, "@Twig/images/icon-support.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        ";
        // line 33
        $this->displayBlock('body', $context, $blocks);
        // line 34
        echo "        ";
        echo twig_include($this->env, $context, "@Twig/base_js.html.twig");
        echo "
    </body>
</html>
";
        
        $__internal_fed4ee74842daffddb2eb521164dd77874e391c4b4e22759d5b0e2d36d62e970->leave($__internal_fed4ee74842daffddb2eb521164dd77874e391c4b4e22759d5b0e2d36d62e970_prof);

        
        $__internal_d7d38507a831bde7a30dc41591cd47223cea7ffdf251ea28d2aa4f93e8f416b0->leave($__internal_d7d38507a831bde7a30dc41591cd47223cea7ffdf251ea28d2aa4f93e8f416b0_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_a71031f9df3949443a8a98df6f7c7f43688776d6b133fc98b65edc96ad4bc7d7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a71031f9df3949443a8a98df6f7c7f43688776d6b133fc98b65edc96ad4bc7d7->enter($__internal_a71031f9df3949443a8a98df6f7c7f43688776d6b133fc98b65edc96ad4bc7d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_c755b9ca464be31221e8377d2fdcf5048af76fbcc787457fcca7edd80068ecf6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c755b9ca464be31221e8377d2fdcf5048af76fbcc787457fcca7edd80068ecf6->enter($__internal_c755b9ca464be31221e8377d2fdcf5048af76fbcc787457fcca7edd80068ecf6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_c755b9ca464be31221e8377d2fdcf5048af76fbcc787457fcca7edd80068ecf6->leave($__internal_c755b9ca464be31221e8377d2fdcf5048af76fbcc787457fcca7edd80068ecf6_prof);

        
        $__internal_a71031f9df3949443a8a98df6f7c7f43688776d6b133fc98b65edc96ad4bc7d7->leave($__internal_a71031f9df3949443a8a98df6f7c7f43688776d6b133fc98b65edc96ad4bc7d7_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_514b718ef43380a9f9a697b708f3dc85baceaba7b48e781483bd9493bb1aad85 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_514b718ef43380a9f9a697b708f3dc85baceaba7b48e781483bd9493bb1aad85->enter($__internal_514b718ef43380a9f9a697b708f3dc85baceaba7b48e781483bd9493bb1aad85_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_fdab9a62a7194b1ae9d73cb7ed3278c1487a15bd11ec2ecda3c2db8fa217e48a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fdab9a62a7194b1ae9d73cb7ed3278c1487a15bd11ec2ecda3c2db8fa217e48a->enter($__internal_fdab9a62a7194b1ae9d73cb7ed3278c1487a15bd11ec2ecda3c2db8fa217e48a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_fdab9a62a7194b1ae9d73cb7ed3278c1487a15bd11ec2ecda3c2db8fa217e48a->leave($__internal_fdab9a62a7194b1ae9d73cb7ed3278c1487a15bd11ec2ecda3c2db8fa217e48a_prof);

        
        $__internal_514b718ef43380a9f9a697b708f3dc85baceaba7b48e781483bd9493bb1aad85->leave($__internal_514b718ef43380a9f9a697b708f3dc85baceaba7b48e781483bd9493bb1aad85_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_f669d6c5a90804be194c3ab78564d373d0d0d56447619171a5e228b694fffafb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f669d6c5a90804be194c3ab78564d373d0d0d56447619171a5e228b694fffafb->enter($__internal_f669d6c5a90804be194c3ab78564d373d0d0d56447619171a5e228b694fffafb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_3c9db3f7d0584caa6e031790aa62ac07db548183f77633968608aca64c64f659 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3c9db3f7d0584caa6e031790aa62ac07db548183f77633968608aca64c64f659->enter($__internal_3c9db3f7d0584caa6e031790aa62ac07db548183f77633968608aca64c64f659_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_3c9db3f7d0584caa6e031790aa62ac07db548183f77633968608aca64c64f659->leave($__internal_3c9db3f7d0584caa6e031790aa62ac07db548183f77633968608aca64c64f659_prof);

        
        $__internal_f669d6c5a90804be194c3ab78564d373d0d0d56447619171a5e228b694fffafb->leave($__internal_f669d6c5a90804be194c3ab78564d373d0d0d56447619171a5e228b694fffafb_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 33,  120 => 10,  103 => 7,  88 => 34,  86 => 33,  76 => 26,  66 => 19,  59 => 15,  53 => 11,  51 => 10,  47 => 9,  43 => 8,  39 => 7,  33 => 4,  28 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"{{ _charset }}\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>{% block title %}{% endblock %}</title>
        <link rel=\"icon\" type=\"image/png\" href=\"{{ include('@Twig/images/favicon.png.base64') }}\">
        <style>{{ include('@Twig/exception.css.twig') }}</style>
        {% block head %}{% endblock %}
    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">{{ include('@Twig/images/symfony-logo.svg') }} Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-book.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-support.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        {% block body %}{% endblock %}
        {{ include('@Twig/base_js.html.twig') }}
    </body>
</html>
", "@Twig/layout.html.twig", "/var/www/b2.2017/Blog/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/layout.html.twig");
    }
}
