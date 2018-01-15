<?php

/* AppBundle:blog:article.html.twig */
class __TwigTemplate_8528941019687140469e27bbc3c8a3b86341c3529a196294d4b84c00891691a8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AppBundle::layout.html.twig", "AppBundle:blog:article.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
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
        $__internal_1d030c4fb5cea23dbc2da156fb4895f9718d81e90c4dc49a70cd6913665be8c4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1d030c4fb5cea23dbc2da156fb4895f9718d81e90c4dc49a70cd6913665be8c4->enter($__internal_1d030c4fb5cea23dbc2da156fb4895f9718d81e90c4dc49a70cd6913665be8c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:blog:article.html.twig"));

        $__internal_14bc9e627338117cc7a50a0c332a15a5388192f5a0c52306507787eb967f40ab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_14bc9e627338117cc7a50a0c332a15a5388192f5a0c52306507787eb967f40ab->enter($__internal_14bc9e627338117cc7a50a0c332a15a5388192f5a0c52306507787eb967f40ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:blog:article.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1d030c4fb5cea23dbc2da156fb4895f9718d81e90c4dc49a70cd6913665be8c4->leave($__internal_1d030c4fb5cea23dbc2da156fb4895f9718d81e90c4dc49a70cd6913665be8c4_prof);

        
        $__internal_14bc9e627338117cc7a50a0c332a15a5388192f5a0c52306507787eb967f40ab->leave($__internal_14bc9e627338117cc7a50a0c332a15a5388192f5a0c52306507787eb967f40ab_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_bc105d7f4c58fdf1a928ae0ad814edd935c938f137cf66f2da6f4e9bc1980869 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bc105d7f4c58fdf1a928ae0ad814edd935c938f137cf66f2da6f4e9bc1980869->enter($__internal_bc105d7f4c58fdf1a928ae0ad814edd935c938f137cf66f2da6f4e9bc1980869_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_956a6885605e5a71976b3c31b830d735655152993c8c665ba1e9c917929ffb01 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_956a6885605e5a71976b3c31b830d735655152993c8c665ba1e9c917929ffb01->enter($__internal_956a6885605e5a71976b3c31b830d735655152993c8c665ba1e9c917929ffb01_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "    ";
        $this->displayParentBlock("title", $context, $blocks);
        echo " &gt; ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["articles"] ?? $this->getContext($context, "articles")), "titre", array()), "html", null, true);
        echo "
";
        
        $__internal_956a6885605e5a71976b3c31b830d735655152993c8c665ba1e9c917929ffb01->leave($__internal_956a6885605e5a71976b3c31b830d735655152993c8c665ba1e9c917929ffb01_prof);

        
        $__internal_bc105d7f4c58fdf1a928ae0ad814edd935c938f137cf66f2da6f4e9bc1980869->leave($__internal_bc105d7f4c58fdf1a928ae0ad814edd935c938f137cf66f2da6f4e9bc1980869_prof);

    }

    // line 7
    public function block_header($context, array $blocks = array())
    {
        $__internal_008cb9c3e0c2863779c565b1ec45aa2b7455846c3a657ec7e948c0c5de2926aa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_008cb9c3e0c2863779c565b1ec45aa2b7455846c3a657ec7e948c0c5de2926aa->enter($__internal_008cb9c3e0c2863779c565b1ec45aa2b7455846c3a657ec7e948c0c5de2926aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        $__internal_28dd27c58a0b76ee7d3b5bbc01f745b8271f067f79e986befa3f33edb85e42fc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_28dd27c58a0b76ee7d3b5bbc01f745b8271f067f79e986befa3f33edb85e42fc->enter($__internal_28dd27c58a0b76ee7d3b5bbc01f745b8271f067f79e986befa3f33edb85e42fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 8
        echo "    <nav class=\"navbar navbar-expand-lg navbar-light bg-light\">
        <a class=\"navbar-brand\" href=\"";
        // line 9
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("blog");
        echo "\">A.Aubineau</a>
        <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarSupportedContent\" aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
            <span class=\"navbar-toggler-icon\"></span>
        </button>
        ";
        // line 13
        $this->displayBlock('nav_button', $context, $blocks);
        // line 51
        echo "    </nav>
";
        
        $__internal_28dd27c58a0b76ee7d3b5bbc01f745b8271f067f79e986befa3f33edb85e42fc->leave($__internal_28dd27c58a0b76ee7d3b5bbc01f745b8271f067f79e986befa3f33edb85e42fc_prof);

        
        $__internal_008cb9c3e0c2863779c565b1ec45aa2b7455846c3a657ec7e948c0c5de2926aa->leave($__internal_008cb9c3e0c2863779c565b1ec45aa2b7455846c3a657ec7e948c0c5de2926aa_prof);

    }

    // line 13
    public function block_nav_button($context, array $blocks = array())
    {
        $__internal_90532f7c634c83a339963fca04c2af9e2863598c528fd50304f1b034760130d1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_90532f7c634c83a339963fca04c2af9e2863598c528fd50304f1b034760130d1->enter($__internal_90532f7c634c83a339963fca04c2af9e2863598c528fd50304f1b034760130d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "nav_button"));

        $__internal_2ff849eeb8de9baa7092846fa9710222bd27fe6e9e18bcc372382abe0ef9d729 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2ff849eeb8de9baa7092846fa9710222bd27fe6e9e18bcc372382abe0ef9d729->enter($__internal_2ff849eeb8de9baa7092846fa9710222bd27fe6e9e18bcc372382abe0ef9d729_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "nav_button"));

        // line 14
        echo "            <div class=\"collapse navbar-collapse\" id=\"navbarSupportedContent\">
                <ul class=\"navbar-nav\">
                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"";
        // line 17
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("homepage");
        echo "\">CV</a>
                    </li>
                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"";
        // line 20
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("blog");
        echo "\">Article</a>
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
        // line 30
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 31
            echo "                            <a class=\"nav-link ";
            echo ((($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "get", array(0 => "_route"), "method") == "fos_user_security_logout")) ? ("active") : (""));
            echo "\" href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_logout");
            echo "\"><span class=\"sr-only\">(current)</span>
                                ";
            // line 32
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("layout.logged_in_as", array("%username%" => $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "username", array())), "FOSUserBundle"), "html", null, true);
            echo "
                            </a>
                        ";
        } else {
            // line 35
            echo "                            <a class=\"nav-link ";
            echo ((($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "get", array(0 => "_route"), "method") == "fos_user_security_login")) ? ("active") : (""));
            echo "\" href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_login");
            echo "\">";
            echo "Connexion";
            echo "<span class=\"sr-only\">(current)</span></a>
                        ";
        }
        // line 37
        echo "                    </li>
                    <li class=\"nav-item\">
                        ";
        // line 39
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 40
            echo "                            ";
            // line 41
            echo "
                            ";
            // line 43
            echo "                        ";
        } else {
            // line 44
            echo "                            <a class=\"nav-link ";
            echo ((($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "get", array(0 => "_route"), "method") == "fos_user_registration_register")) ? ("active") : (""));
            echo "\" href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_registration_register");
            echo "\">";
            echo "Inscription";
            echo "</a>
                        ";
        }
        // line 46
        echo "
                    </li>
                </ul>
            </div>
        ";
        
        $__internal_2ff849eeb8de9baa7092846fa9710222bd27fe6e9e18bcc372382abe0ef9d729->leave($__internal_2ff849eeb8de9baa7092846fa9710222bd27fe6e9e18bcc372382abe0ef9d729_prof);

        
        $__internal_90532f7c634c83a339963fca04c2af9e2863598c528fd50304f1b034760130d1->leave($__internal_90532f7c634c83a339963fca04c2af9e2863598c528fd50304f1b034760130d1_prof);

    }

    // line 54
    public function block_body($context, array $blocks = array())
    {
        $__internal_027aed33e97946b8ccf3c6d804a88535435caebc7427a0fc8d03ac667f90f4fb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_027aed33e97946b8ccf3c6d804a88535435caebc7427a0fc8d03ac667f90f4fb->enter($__internal_027aed33e97946b8ccf3c6d804a88535435caebc7427a0fc8d03ac667f90f4fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_185f3c8e1f5e41d2e6c88edd413f0426041eb22c8662c7daab57ed2d75dc75da = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_185f3c8e1f5e41d2e6c88edd413f0426041eb22c8662c7daab57ed2d75dc75da->enter($__internal_185f3c8e1f5e41d2e6c88edd413f0426041eb22c8662c7daab57ed2d75dc75da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 55
        echo "    <div class=\"Article\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-12\">
                    <h1 class=\"mt-4\">";
        // line 59
        echo twig_escape_filter($this->env, $this->getAttribute(($context["arts"] ?? $this->getContext($context, "arts")), "titre", array()), "html", null, true);
        echo "</h1>
                    <p class=\"lead\"> par <a href=\"\">";
        // line 60
        echo twig_escape_filter($this->env, $this->getAttribute(($context["arts"] ?? $this->getContext($context, "arts")), "auteur", array()), "html", null, true);
        echo "</a> </p>
                    <hr>
                    <p>25/05/2017</p>
                    <hr>
                    <img class=\"img-fluid rounded\" src=\"";
        // line 64
        echo twig_escape_filter($this->env, $this->getAttribute(($context["arts"] ?? $this->getContext($context, "arts")), "image", array()), "html", null, true);
        echo "\" alt=\"\">
                    <hr>
                    <p class=\"lead\">";
        // line 66
        echo twig_escape_filter($this->env, $this->getAttribute(($context["arts"] ?? $this->getContext($context, "arts")), "contenu", array()), "html", null, true);
        echo "</p>
                    <hr>
                    <div class=\"card my-4\">
                        <h5 class=\"card-header\">Laisser un commentaire:</h5>
                        <div class=\"card-body\">

                            ";
        // line 72
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start', array("attr" => array("novalidate" => "novalidate")));
        echo "
                            ";
        // line 73
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
        echo "

                            <div class=\"form-group\">
                                ";
        // line 76
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "pseudo", array()), 'label');
        echo "
                                ";
        // line 77
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "pseudo", array()), 'errors');
        echo "
                                ";
        // line 78
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "pseudo", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                            </div>

                            <div class=\"form-group\">
                                ";
        // line 82
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "commentaires", array()), 'label');
        echo "
                                ";
        // line 83
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "commentaires", array()), 'errors');
        echo "
                                ";
        // line 84
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "commentaires", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                            </div>

                            <div>
                                <input type=\"submit\" value=\"Submit\" class=\"btn btn-primary\"/>
                            </div>

                            ";
        // line 91
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "

                        </div>
                    </div>

                    <hr>
                    ";
        // line 97
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["comment"] ?? $this->getContext($context, "comment")));
        foreach ($context['_seq'] as $context["_key"] => $context["commentaires"]) {
            // line 98
            echo "                        <div class=\"media mb-4\">
                            <div class=\"media-body\">
                                <h5 class=\"mt-0\">";
            // line 100
            echo twig_escape_filter($this->env, $this->getAttribute($context["commentaires"], "pseudo", array()), "html", null, true);
            echo "</h5>
                                <p>";
            // line 101
            echo twig_escape_filter($this->env, $this->getAttribute($context["commentaires"], "commentaires", array()), "html", null, true);
            echo "</p>
                                <hr>
                            </div>
                        </div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['commentaires'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 106
        echo "
                </div>
            </div>
        </div>
    </div>
";
        
        $__internal_185f3c8e1f5e41d2e6c88edd413f0426041eb22c8662c7daab57ed2d75dc75da->leave($__internal_185f3c8e1f5e41d2e6c88edd413f0426041eb22c8662c7daab57ed2d75dc75da_prof);

        
        $__internal_027aed33e97946b8ccf3c6d804a88535435caebc7427a0fc8d03ac667f90f4fb->leave($__internal_027aed33e97946b8ccf3c6d804a88535435caebc7427a0fc8d03ac667f90f4fb_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:blog:article.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  310 => 106,  299 => 101,  295 => 100,  291 => 98,  287 => 97,  278 => 91,  268 => 84,  264 => 83,  260 => 82,  253 => 78,  249 => 77,  245 => 76,  239 => 73,  235 => 72,  226 => 66,  221 => 64,  214 => 60,  210 => 59,  204 => 55,  195 => 54,  181 => 46,  171 => 44,  168 => 43,  165 => 41,  163 => 40,  161 => 39,  157 => 37,  147 => 35,  141 => 32,  134 => 31,  132 => 30,  119 => 20,  113 => 17,  108 => 14,  99 => 13,  88 => 51,  86 => 13,  79 => 9,  76 => 8,  67 => 7,  52 => 4,  43 => 3,  11 => 1,);
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

{% block title %}
    {{ parent() }} &gt; {{ articles.titre }}
{% endblock %}

{% block header %}
    <nav class=\"navbar navbar-expand-lg navbar-light bg-light\">
        <a class=\"navbar-brand\" href=\"{{ path('blog') }}\">A.Aubineau</a>
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
                        <a class=\"nav-link\" href=\"{{ path('blog') }}\">Article</a>
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

{%  block body %}
    <div class=\"Article\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-12\">
                    <h1 class=\"mt-4\">{{ arts.titre }}</h1>
                    <p class=\"lead\"> par <a href=\"\">{{ arts.auteur }}</a> </p>
                    <hr>
                    <p>25/05/2017</p>
                    <hr>
                    <img class=\"img-fluid rounded\" src=\"{{ arts.image }}\" alt=\"\">
                    <hr>
                    <p class=\"lead\">{{ arts.contenu }}</p>
                    <hr>
                    <div class=\"card my-4\">
                        <h5 class=\"card-header\">Laisser un commentaire:</h5>
                        <div class=\"card-body\">

                            {{ form_start(form, {'attr': {'novalidate': 'novalidate'}}, {'method': 'GET'}) }}
                            {{ form_errors(form) }}

                            <div class=\"form-group\">
                                {{ form_label(form.pseudo) }}
                                {{ form_errors(form.pseudo) }}
                                {{ form_widget(form.pseudo, {'attr': {'class': 'form-control'}}) }}
                            </div>

                            <div class=\"form-group\">
                                {{ form_label(form.commentaires) }}
                                {{ form_errors(form.commentaires) }}
                                {{ form_widget(form.commentaires, {'attr': {'class': 'form-control'}}) }}
                            </div>

                            <div>
                                <input type=\"submit\" value=\"Submit\" class=\"btn btn-primary\"/>
                            </div>

                            {{ form_end(form) }}

                        </div>
                    </div>

                    <hr>
                    {% for commentaires in comment %}
                        <div class=\"media mb-4\">
                            <div class=\"media-body\">
                                <h5 class=\"mt-0\">{{ commentaires.pseudo }}</h5>
                                <p>{{ commentaires.commentaires }}</p>
                                <hr>
                            </div>
                        </div>
                    {% endfor %}

                </div>
            </div>
        </div>
    </div>
{% endblock %}", "AppBundle:blog:article.html.twig", "/var/www/b2.2017/Blog/src/AppBundle/Resources/views/blog/article.html.twig");
    }
}
