<?php

/* AppBundle:blog:index.html.twig */
class __TwigTemplate_0c70cce4710bf2d8fc601c6c738ee40f9e8db8d9915fcd1f2ac8ba01562932c9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AppBundle::layout.html.twig", "AppBundle:blog:index.html.twig", 1);
        $this->blocks = array(
            'header' => array($this, 'block_header'),
            'nav_button' => array($this, 'block_nav_button'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "AppBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c5e588df1687a3f184f0abad124cd72e45cdf736a8f4eda118c273d51603514f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c5e588df1687a3f184f0abad124cd72e45cdf736a8f4eda118c273d51603514f->enter($__internal_c5e588df1687a3f184f0abad124cd72e45cdf736a8f4eda118c273d51603514f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:blog:index.html.twig"));

        $__internal_280099ac7971d252564bcc189a9caf3a30451b3b90f25351398c34a6a0761a90 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_280099ac7971d252564bcc189a9caf3a30451b3b90f25351398c34a6a0761a90->enter($__internal_280099ac7971d252564bcc189a9caf3a30451b3b90f25351398c34a6a0761a90_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:blog:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c5e588df1687a3f184f0abad124cd72e45cdf736a8f4eda118c273d51603514f->leave($__internal_c5e588df1687a3f184f0abad124cd72e45cdf736a8f4eda118c273d51603514f_prof);

        
        $__internal_280099ac7971d252564bcc189a9caf3a30451b3b90f25351398c34a6a0761a90->leave($__internal_280099ac7971d252564bcc189a9caf3a30451b3b90f25351398c34a6a0761a90_prof);

    }

    // line 3
    public function block_header($context, array $blocks = array())
    {
        $__internal_acc3835cc5b8567f48f45333f45b7075e42bac8dc895b80276713d04639b8e91 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_acc3835cc5b8567f48f45333f45b7075e42bac8dc895b80276713d04639b8e91->enter($__internal_acc3835cc5b8567f48f45333f45b7075e42bac8dc895b80276713d04639b8e91_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        $__internal_8c56aef548c747c7c18b1e66c1f06eed312f84e9fa8ca33ac03831f136a2493f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8c56aef548c747c7c18b1e66c1f06eed312f84e9fa8ca33ac03831f136a2493f->enter($__internal_8c56aef548c747c7c18b1e66c1f06eed312f84e9fa8ca33ac03831f136a2493f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 4
        echo "    <nav class=\"navbar navbar-expand-lg navbar-light bg-light\">
        <a class=\"navbar-brand\" href=\"";
        // line 5
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("homepage");
        echo "\">A.Aubineau</a>
        <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarSupportedContent\" aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
            <span class=\"navbar-toggler-icon\"></span>
        </button>
        ";
        // line 9
        $this->displayBlock('nav_button', $context, $blocks);
        // line 44
        echo "    </nav>
";
        
        $__internal_8c56aef548c747c7c18b1e66c1f06eed312f84e9fa8ca33ac03831f136a2493f->leave($__internal_8c56aef548c747c7c18b1e66c1f06eed312f84e9fa8ca33ac03831f136a2493f_prof);

        
        $__internal_acc3835cc5b8567f48f45333f45b7075e42bac8dc895b80276713d04639b8e91->leave($__internal_acc3835cc5b8567f48f45333f45b7075e42bac8dc895b80276713d04639b8e91_prof);

    }

    // line 9
    public function block_nav_button($context, array $blocks = array())
    {
        $__internal_4d399689aab6dffbc52e1d873684ecc89aeeace0de50b21ded9a5d20084ffb82 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4d399689aab6dffbc52e1d873684ecc89aeeace0de50b21ded9a5d20084ffb82->enter($__internal_4d399689aab6dffbc52e1d873684ecc89aeeace0de50b21ded9a5d20084ffb82_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "nav_button"));

        $__internal_632d91091256f5a92f8f21afe633426ed877e74b5275c57d834fd07a78f5e72f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_632d91091256f5a92f8f21afe633426ed877e74b5275c57d834fd07a78f5e72f->enter($__internal_632d91091256f5a92f8f21afe633426ed877e74b5275c57d834fd07a78f5e72f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "nav_button"));

        // line 10
        echo "            <div class=\"collapse navbar-collapse\" id=\"navbarSupportedContent\">
                <ul class=\"navbar-nav\">
                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"";
        // line 13
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("homepage");
        echo "\">CV</a>
                    </li>
                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"https://twitter.com/Skewrad_Alexis\">Twitter</a>
                    </li>
                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"https://github.com/AlexisAubineau?tab=repositories\">Github</a>
                    </li>
                    <li class=\"test\"></li>
                    <li class=\"nav-item\">
                        ";
        // line 23
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 24
            echo "                            <a class=\"nav-link ";
            echo ((($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "get", array(0 => "_route"), "method") == "fos_user_security_logout")) ? ("active") : (""));
            echo "\" href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_logout");
            echo "\"><span class=\"sr-only\">(current)</span>
                                ";
            // line 25
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("layout.logged_in_as", array("%username%" => $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "username", array())), "FOSUserBundle"), "html", null, true);
            echo "
                            </a>
                        ";
        } else {
            // line 28
            echo "                            <a class=\"nav-link ";
            echo ((($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "get", array(0 => "_route"), "method") == "fos_user_security_login")) ? ("active") : (""));
            echo "\" href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_login");
            echo "\">";
            echo "Connexion";
            echo "<span class=\"sr-only\">(current)</span></a>
                        ";
        }
        // line 30
        echo "                    </li>
                    <li class=\"nav-item\">
                        ";
        // line 32
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 33
            echo "                            ";
            // line 34
            echo "
                            ";
            // line 36
            echo "                        ";
        } else {
            // line 37
            echo "                            <a class=\"nav-link ";
            echo ((($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "get", array(0 => "_route"), "method") == "fos_user_registration_register")) ? ("active") : (""));
            echo "\" href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_registration_register");
            echo "\">";
            echo "Inscription";
            echo "</a>
                        ";
        }
        // line 39
        echo "
                    </li>
                </ul>
            </div>
        ";
        
        $__internal_632d91091256f5a92f8f21afe633426ed877e74b5275c57d834fd07a78f5e72f->leave($__internal_632d91091256f5a92f8f21afe633426ed877e74b5275c57d834fd07a78f5e72f_prof);

        
        $__internal_4d399689aab6dffbc52e1d873684ecc89aeeace0de50b21ded9a5d20084ffb82->leave($__internal_4d399689aab6dffbc52e1d873684ecc89aeeace0de50b21ded9a5d20084ffb82_prof);

    }

    // line 46
    public function block_body($context, array $blocks = array())
    {
        $__internal_5e4688008e7ffc0c55b11c679b986806e5bdb81082578cbe6bdb072d62460807 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5e4688008e7ffc0c55b11c679b986806e5bdb81082578cbe6bdb072d62460807->enter($__internal_5e4688008e7ffc0c55b11c679b986806e5bdb81082578cbe6bdb072d62460807_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_0bad702c77219a85df2280840490e79cd59680d9ec7e7ec2f5e610bcfaaee590 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0bad702c77219a85df2280840490e79cd59680d9ec7e7ec2f5e610bcfaaee590->enter($__internal_0bad702c77219a85df2280840490e79cd59680d9ec7e7ec2f5e610bcfaaee590_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 47
        echo "    <div class=\"Article\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-12\">
                    ";
        // line 51
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["articles"] ?? $this->getContext($context, "articles")));
        foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
            // line 52
            echo "                        <div class=\"article\">
                            <div class=\"card mb-8\">
                                <img class=\"img-fluid rounded\" src=\"";
            // line 54
            echo twig_escape_filter($this->env, $this->getAttribute($context["article"], "image", array()), "html", null, true);
            echo "\" alt=\"Image\">
                                <div class=\"card-body\">
                                    <h2 class=\"card-title\">";
            // line 56
            echo twig_escape_filter($this->env, $this->getAttribute($context["article"], "titre", array()), "html", null, true);
            echo "</h2>
                                    <p class=\"card-text\">";
            // line 57
            echo twig_escape_filter($this->env, $this->getAttribute($context["article"], "description", array()), "html", null, true);
            echo "</p>
                                    <a href=\"";
            // line 58
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("show_article", array("id" => $this->getAttribute($context["article"], "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-primary\">Lire &rarr;</a>
                                </div>
                            </div>
                            <div class=\"card-footer text-muted\">
                                <a href=\"\">";
            // line 62
            echo twig_escape_filter($this->env, $this->getAttribute($context["article"], "auteur", array()), "html", null, true);
            echo "</a>
                            </div>
                        </div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['article'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 66
        echo "                </div>
            </div>
        </div>
    </div>
";
        
        $__internal_0bad702c77219a85df2280840490e79cd59680d9ec7e7ec2f5e610bcfaaee590->leave($__internal_0bad702c77219a85df2280840490e79cd59680d9ec7e7ec2f5e610bcfaaee590_prof);

        
        $__internal_5e4688008e7ffc0c55b11c679b986806e5bdb81082578cbe6bdb072d62460807->leave($__internal_5e4688008e7ffc0c55b11c679b986806e5bdb81082578cbe6bdb072d62460807_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:blog:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  217 => 66,  207 => 62,  200 => 58,  196 => 57,  192 => 56,  187 => 54,  183 => 52,  179 => 51,  173 => 47,  164 => 46,  150 => 39,  140 => 37,  137 => 36,  134 => 34,  132 => 33,  130 => 32,  126 => 30,  116 => 28,  110 => 25,  103 => 24,  101 => 23,  88 => 13,  83 => 10,  74 => 9,  63 => 44,  61 => 9,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
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

{% block header %}
    <nav class=\"navbar navbar-expand-lg navbar-light bg-light\">
        <a class=\"navbar-brand\" href=\"{{ path('homepage') }}\">A.Aubineau</a>
        <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarSupportedContent\" aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
            <span class=\"navbar-toggler-icon\"></span>
        </button>
        {% block nav_button %}
            <div class=\"collapse navbar-collapse\" id=\"navbarSupportedContent\">
                <ul class=\"navbar-nav\">
                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"{{ path('homepage') }}\">CV</a>
                    </li>
                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"https://twitter.com/Skewrad_Alexis\">Twitter</a>
                    </li>
                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"https://github.com/AlexisAubineau?tab=repositories\">Github</a>
                    </li>
                    <li class=\"test\"></li>
                    <li class=\"nav-item\">
                        {% if is_granted(\"IS_AUTHENTICATED_REMEMBERED\") %}
                            <a class=\"nav-link {{ app.request.get('_route') == 'fos_user_security_logout' ? 'active' : '' }}\" href=\"{{ path('fos_user_security_logout') }}\"><span class=\"sr-only\">(current)</span>
                                {{ 'layout.logged_in_as'|trans({'%username%': app.user.username}, 'FOSUserBundle') }}
                            </a>
                        {% else %}
                            <a class=\"nav-link {{ app.request.get('_route') == 'fos_user_security_login' ? 'active' : '' }}\" href=\"{{ path('fos_user_security_login') }}\">{{ \"Connexion\" }}<span class=\"sr-only\">(current)</span></a>
                        {% endif %}
                    </li>
                    <li class=\"nav-item\">
                        {% if is_granted(\"IS_AUTHENTICATED_REMEMBERED\") %}
                            {#<a class=\"nav-link\" href=\"{{ path ('') }}\">#}

                            {#</a>#}
                        {% else %}
                            <a class=\"nav-link {{ app.request.get('_route') == 'fos_user_registration_register' ? 'active' : '' }}\" href=\"{{ path('fos_user_registration_register') }}\">{{ \"Inscription\" }}</a>
                        {% endif %}

                    </li>
                </ul>
            </div>
        {% endblock %}
    </nav>
{% endblock %}
{% block body %}
    <div class=\"Article\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-12\">
                    {% for article in articles %}
                        <div class=\"article\">
                            <div class=\"card mb-8\">
                                <img class=\"img-fluid rounded\" src=\"{{ article.image }}\" alt=\"Image\">
                                <div class=\"card-body\">
                                    <h2 class=\"card-title\">{{ article.titre }}</h2>
                                    <p class=\"card-text\">{{ article.description }}</p>
                                    <a href=\"{{ path('show_article', {'id': article.id}) }}\" class=\"btn btn-primary\">Lire &rarr;</a>
                                </div>
                            </div>
                            <div class=\"card-footer text-muted\">
                                <a href=\"\">{{ article.auteur }}</a>
                            </div>
                        </div>
                    {% endfor %}
                </div>
            </div>
        </div>
    </div>
{% endblock %}", "AppBundle:blog:index.html.twig", "/var/www/b2.2017/Blog/src/AppBundle/Resources/views/blog/index.html.twig");
    }
}
