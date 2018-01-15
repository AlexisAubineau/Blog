<?php

/* AppBundle:default:index.html.twig */
class __TwigTemplate_f093856295960dab32378f52d50893fca40f883ef476c3b05a7e026e7664df27 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AppBundle::layout.html.twig", "AppBundle:default:index.html.twig", 1);
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
        $__internal_90ea946c241fd563916cd3738e5890a12c74184a8b0098fc5b75da755d82011e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_90ea946c241fd563916cd3738e5890a12c74184a8b0098fc5b75da755d82011e->enter($__internal_90ea946c241fd563916cd3738e5890a12c74184a8b0098fc5b75da755d82011e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:default:index.html.twig"));

        $__internal_80dd45f14edd7aeb7113b3e751aaad842f19605c7ef72ed13965bd601c6d8044 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_80dd45f14edd7aeb7113b3e751aaad842f19605c7ef72ed13965bd601c6d8044->enter($__internal_80dd45f14edd7aeb7113b3e751aaad842f19605c7ef72ed13965bd601c6d8044_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_90ea946c241fd563916cd3738e5890a12c74184a8b0098fc5b75da755d82011e->leave($__internal_90ea946c241fd563916cd3738e5890a12c74184a8b0098fc5b75da755d82011e_prof);

        
        $__internal_80dd45f14edd7aeb7113b3e751aaad842f19605c7ef72ed13965bd601c6d8044->leave($__internal_80dd45f14edd7aeb7113b3e751aaad842f19605c7ef72ed13965bd601c6d8044_prof);

    }

    // line 2
    public function block_header($context, array $blocks = array())
    {
        $__internal_180512742470d9692a23955aeb7ef9cf21ef5d3ed1a0afe841f54c8f569598a0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_180512742470d9692a23955aeb7ef9cf21ef5d3ed1a0afe841f54c8f569598a0->enter($__internal_180512742470d9692a23955aeb7ef9cf21ef5d3ed1a0afe841f54c8f569598a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        $__internal_2dedde19f0c961f917d45aacdb37168afcf9fe1c8484d75be027b719e75a59af = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2dedde19f0c961f917d45aacdb37168afcf9fe1c8484d75be027b719e75a59af->enter($__internal_2dedde19f0c961f917d45aacdb37168afcf9fe1c8484d75be027b719e75a59af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 3
        echo "    <nav class=\"navbar navbar-expand-lg navbar-light bg-light\">
        <a class=\"navbar-brand\" href=\"";
        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("homepage");
        echo "\">A.Aubineau</a>
        <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarSupportedContent\" aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
            <span class=\"navbar-toggler-icon\"></span>
        </button>
        ";
        // line 8
        $this->displayBlock('nav_button', $context, $blocks);
        // line 44
        echo "    </nav>
";
        
        $__internal_2dedde19f0c961f917d45aacdb37168afcf9fe1c8484d75be027b719e75a59af->leave($__internal_2dedde19f0c961f917d45aacdb37168afcf9fe1c8484d75be027b719e75a59af_prof);

        
        $__internal_180512742470d9692a23955aeb7ef9cf21ef5d3ed1a0afe841f54c8f569598a0->leave($__internal_180512742470d9692a23955aeb7ef9cf21ef5d3ed1a0afe841f54c8f569598a0_prof);

    }

    // line 8
    public function block_nav_button($context, array $blocks = array())
    {
        $__internal_7a4cee4bd8a16bb6147275dbf60c99ef198b95e7983a66b24f74a58af2fa0639 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7a4cee4bd8a16bb6147275dbf60c99ef198b95e7983a66b24f74a58af2fa0639->enter($__internal_7a4cee4bd8a16bb6147275dbf60c99ef198b95e7983a66b24f74a58af2fa0639_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "nav_button"));

        $__internal_4a2a0e9a14e585a9b018abd0e65427361ae7a6a98d678e75a7fc33b7a3fa7989 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4a2a0e9a14e585a9b018abd0e65427361ae7a6a98d678e75a7fc33b7a3fa7989->enter($__internal_4a2a0e9a14e585a9b018abd0e65427361ae7a6a98d678e75a7fc33b7a3fa7989_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "nav_button"));

        // line 9
        echo "            <div class=\"collapse navbar-collapse row\" id=\"navbarSupportedContent\">
                <ul class=\"navbar-nav\">
                    <li class=\"nav-item active\">
                        <a class=\"nav-link js-scrollTo\" href=\"#section1\">Home<span class=\"sr-only\">(current)</span></a>
                    </li>
                    <li class=\"nav-item\">
                        <a class=\"nav-link js-scrollTo\" href=\"#section2\">Diplomes</a>
                    </li>
                    <li class=\"nav-item\">
                        <a class=\"nav-link js-scrollTo\" href=\"#section3\">Expériences</a>
                    </li>
                    <li class=\"nav-item\">
                        <a class=\"nav-link js-scrollTo\" href=\"#section4\">Compétences</a>
                    </li>
                    <li class=\"nav-item\">
                        <a class=\"nav-link js-scrollTo\" href=\"#section5\">Réalisations</a>
                    </li>
                    <li class=\"nav-item\">
                        <a class=\"nav-link js-scrollTo\" href=\"#section6\">Certifications</a>
                    </li>
                    <li class=\"nav-item\">
                        <a class=\"nav-link js-scrollTo\" href=\"#section7\">Contact</a>
                    </li>
                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"";
        // line 33
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("blog");
        echo "\">Blog</a>
                    </li>
                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"https://twitter.com/Skewrad_Alexis\">Twitter</a>
                    </li>
                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"https://github.com/AlexisAubineau?tab=repositories\">Github</a>
                    </li>
                </ul>
            </div>
        ";
        
        $__internal_4a2a0e9a14e585a9b018abd0e65427361ae7a6a98d678e75a7fc33b7a3fa7989->leave($__internal_4a2a0e9a14e585a9b018abd0e65427361ae7a6a98d678e75a7fc33b7a3fa7989_prof);

        
        $__internal_7a4cee4bd8a16bb6147275dbf60c99ef198b95e7983a66b24f74a58af2fa0639->leave($__internal_7a4cee4bd8a16bb6147275dbf60c99ef198b95e7983a66b24f74a58af2fa0639_prof);

    }

    // line 46
    public function block_body($context, array $blocks = array())
    {
        $__internal_cc301b4bba2b2caee353880ec8387acad896cbcf90c369582432e7b050e93938 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cc301b4bba2b2caee353880ec8387acad896cbcf90c369582432e7b050e93938->enter($__internal_cc301b4bba2b2caee353880ec8387acad896cbcf90c369582432e7b050e93938_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_bcbcb54332ae3dc6fa3a031139b2e94ac964f63e1e30253046fd6f10ab7d9cb0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bcbcb54332ae3dc6fa3a031139b2e94ac964f63e1e30253046fd6f10ab7d9cb0->enter($__internal_bcbcb54332ae3dc6fa3a031139b2e94ac964f63e1e30253046fd6f10ab7d9cb0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 47
        echo "        <section id=\"section1\" class=\"home\">
        ";
        // line 48
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["personnels"] ?? $this->getContext($context, "personnels")));
        foreach ($context['_seq'] as $context["_key"] => $context["personnel"]) {
            // line 49
            echo "            <div class=\"container\">
                <div class=\"row\">
                    <h1 class=\"\">Aubineau
                        <span class=\"text-primary\">Alexis</span>
                    </h1>
                    <div class=\"\">
                        <p>";
            // line 55
            echo twig_escape_filter($this->env, $this->getAttribute($context["personnel"], "adresse", array()), "html", null, true);
            echo "</p>
                        <p>";
            // line 56
            echo twig_escape_filter($this->env, $this->getAttribute($context["personnel"], "codePostal", array()), "html", null, true);
            echo "</p>
                        <p>";
            // line 57
            echo twig_escape_filter($this->env, $this->getAttribute($context["personnel"], "ville", array()), "html", null, true);
            echo "</p>
                        <p>";
            // line 58
            echo twig_escape_filter($this->env, $this->getAttribute($context["personnel"], "numero", array()), "html", null, true);
            echo "</p>
                        <a href=\"";
            // line 59
            echo twig_escape_filter($this->env, $this->getAttribute($context["personnel"], "adresseMail", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["personnel"], "adresseMail", array()), "html", null, true);
            echo "</a>
                    </div>
                    <p class=\"\">";
            // line 61
            echo twig_escape_filter($this->env, $this->getAttribute($context["personnel"], "description", array()), "html", null, true);
            echo "</p>
                </div>
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['personnel'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 65
        echo "        </section>

        <section id=\"section2\" class=\"diplomes\">
            <div class=\"container\">
                <div class=\"row\">
                    <h1>Diplomes</h1>
                    ";
        // line 71
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["diplomes"] ?? $this->getContext($context, "diplomes")));
        foreach ($context['_seq'] as $context["_key"] => $context["diplome"]) {
            // line 72
            echo "                        <div class=\"resume-item d-flex flex-column flex-md-row mb-5\">
                            <div class=\"resume-content mr-auto\">
                                <h3 class=\"mb-0\">";
            // line 74
            echo twig_escape_filter($this->env, $this->getAttribute($context["diplome"], "titreDiplome", array()), "html", null, true);
            echo "</h3>
                                <div class=\"subheading mb-3\">";
            // line 75
            echo twig_escape_filter($this->env, $this->getAttribute($context["diplome"], "ecoleDiplome", array()), "html", null, true);
            echo "</div>
                                <p>";
            // line 76
            echo twig_escape_filter($this->env, $this->getAttribute($context["diplome"], "contenuDiplome", array()), "html", null, true);
            echo "</p>
                            </div>
                            <div class=\"resume-date text-md-right\">
                                <span class=\"text-primary\">";
            // line 79
            echo twig_escape_filter($this->env, $this->getAttribute($context["diplome"], "dateDiplome", array()), "html", null, true);
            echo "</span>
                            </div>
                        </div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['diplome'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 83
        echo "                </div>
            </div>
        </section>

        <section id=\"section3\" class=\"experiences\">
            <div class=\"container\">
                <div class=\"row\">
                    <h1>Expériences</h1>
                    ";
        // line 91
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["experiences"] ?? $this->getContext($context, "experiences")));
        foreach ($context['_seq'] as $context["_key"] => $context["experience"]) {
            // line 92
            echo "                        <div class=\"resume-item d-flex flex-column flex-md-row mb-5\">
                            <div class=\"resume-content mr-auto\">
                                <h3 class=\"mb-0\">";
            // line 94
            echo twig_escape_filter($this->env, $this->getAttribute($context["experience"], "titreExperience", array()), "html", null, true);
            echo "</h3>
                                <p>";
            // line 95
            echo twig_escape_filter($this->env, $this->getAttribute($context["experience"], "contenuExperience", array()), "html", null, true);
            echo "</p>
                            </div>
                            <div class=\"resume-date text-md-right\">
                                <span class=\"text-primary\">";
            // line 98
            echo twig_escape_filter($this->env, $this->getAttribute($context["experience"], "dateExperience", array()), "html", null, true);
            echo "</span>
                            </div>
                        </div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['experience'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 102
        echo "                </div>
            </div>
        </section>

        <section id=\"section4\" class=\"competences\">
            <div class=\"container\">
                <div class=\"row\">
                    <h1>Compétences</h1>
                    ";
        // line 110
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["competences"] ?? $this->getContext($context, "competences")));
        foreach ($context['_seq'] as $context["_key"] => $context["competence"]) {
            // line 111
            echo "                        <div class=\"resume-item d-flex flex-column flex-md-row mb-5\">
                            <div class=\"resume-content mr-auto\">
                                <h3 class=\"mb-0\">";
            // line 113
            echo twig_escape_filter($this->env, $this->getAttribute($context["competence"], "titreCompetence", array()), "html", null, true);
            echo "</h3>
                                <hr>
                                <p>";
            // line 115
            echo twig_escape_filter($this->env, $this->getAttribute($context["competence"], "niveauCompetence", array()), "html", null, true);
            echo "</p>
                                <hr>
                            </div>
                        </div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['competence'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 120
        echo "                </div>
            </div>
        </section>

        <section id=\"section5\" class=\"realisations\">
            <div class=\"container\">
                <div class=\"row\">
                    <h1>Réalisations</h1>
                    ";
        // line 128
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["realisations"] ?? $this->getContext($context, "realisations")));
        foreach ($context['_seq'] as $context["_key"] => $context["realisation"]) {
            // line 129
            echo "                        <div class=\"col-md-6\">
                            <div class=\"article\">
                                <div class=\"card mb-6\">
                                    <div class=\"card-body\">
                                        <h2 class=\"card-title\">";
            // line 133
            echo twig_escape_filter($this->env, $this->getAttribute($context["realisation"], "titreRealisation", array()), "html", null, true);
            echo "</h2>
                                        <p class=\"card-text\">";
            // line 134
            echo twig_escape_filter($this->env, $this->getAttribute($context["realisation"], "contenuRealisation", array()), "html", null, true);
            echo "</p>
                                        <p>";
            // line 135
            echo twig_escape_filter($this->env, $this->getAttribute($context["realisation"], "dateRealisation", array()), "html", null, true);
            echo "</p>
                                        <a href=\"";
            // line 136
            echo twig_escape_filter($this->env, $this->getAttribute($context["realisation"], "urlRealisation", array()), "html", null, true);
            echo "\" class=\"btn btn-primary\">Lire &rarr;</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['realisation'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 142
        echo "                </div>
            </div>
        </section>

        <section id=\"section6\" class=\"certifications\">
            <div class=\"container\">
                <div class=\"row\">
                    <h1>Certifications</h1>
                    ";
        // line 150
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["certifications"] ?? $this->getContext($context, "certifications")));
        foreach ($context['_seq'] as $context["_key"] => $context["certification"]) {
            // line 151
            echo "                        <div class=\"resume-item d-flex flex-column flex-md-row mb-5\">
                            <div class=\"resume-content mr-auto\">
                                <h3 class=\"mb-0\">";
            // line 153
            echo twig_escape_filter($this->env, $this->getAttribute($context["certification"], "titreCertification", array()), "html", null, true);
            echo "</h3>
                                <p>";
            // line 154
            echo twig_escape_filter($this->env, $this->getAttribute($context["certification"], "contenuCertification", array()), "html", null, true);
            echo "</p>
                            </div>
                            <div class=\"resume-date text-md-right\">
                                <span class=\"text-primary\">";
            // line 157
            echo twig_escape_filter($this->env, $this->getAttribute($context["certification"], "dateCertification", array()), "html", null, true);
            echo "</span>
                            </div>
                        </div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['certification'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 161
        echo "                </div>
            </div>
        </section>

        <section id=\"section7\" class=\"contact\">
            <div class=\"container\">
                <div class=\"row\">
                    <h1>Contact</h1>
                </div>
            </div>
        </section>
";
        
        $__internal_bcbcb54332ae3dc6fa3a031139b2e94ac964f63e1e30253046fd6f10ab7d9cb0->leave($__internal_bcbcb54332ae3dc6fa3a031139b2e94ac964f63e1e30253046fd6f10ab7d9cb0_prof);

        
        $__internal_cc301b4bba2b2caee353880ec8387acad896cbcf90c369582432e7b050e93938->leave($__internal_cc301b4bba2b2caee353880ec8387acad896cbcf90c369582432e7b050e93938_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  381 => 161,  371 => 157,  365 => 154,  361 => 153,  357 => 151,  353 => 150,  343 => 142,  331 => 136,  327 => 135,  323 => 134,  319 => 133,  313 => 129,  309 => 128,  299 => 120,  288 => 115,  283 => 113,  279 => 111,  275 => 110,  265 => 102,  255 => 98,  249 => 95,  245 => 94,  241 => 92,  237 => 91,  227 => 83,  217 => 79,  211 => 76,  207 => 75,  203 => 74,  199 => 72,  195 => 71,  187 => 65,  177 => 61,  170 => 59,  166 => 58,  162 => 57,  158 => 56,  154 => 55,  146 => 49,  142 => 48,  139 => 47,  130 => 46,  109 => 33,  83 => 9,  74 => 8,  63 => 44,  61 => 8,  54 => 4,  51 => 3,  42 => 2,  11 => 1,);
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
            <div class=\"collapse navbar-collapse row\" id=\"navbarSupportedContent\">
                <ul class=\"navbar-nav\">
                    <li class=\"nav-item active\">
                        <a class=\"nav-link js-scrollTo\" href=\"#section1\">Home<span class=\"sr-only\">(current)</span></a>
                    </li>
                    <li class=\"nav-item\">
                        <a class=\"nav-link js-scrollTo\" href=\"#section2\">Diplomes</a>
                    </li>
                    <li class=\"nav-item\">
                        <a class=\"nav-link js-scrollTo\" href=\"#section3\">Expériences</a>
                    </li>
                    <li class=\"nav-item\">
                        <a class=\"nav-link js-scrollTo\" href=\"#section4\">Compétences</a>
                    </li>
                    <li class=\"nav-item\">
                        <a class=\"nav-link js-scrollTo\" href=\"#section5\">Réalisations</a>
                    </li>
                    <li class=\"nav-item\">
                        <a class=\"nav-link js-scrollTo\" href=\"#section6\">Certifications</a>
                    </li>
                    <li class=\"nav-item\">
                        <a class=\"nav-link js-scrollTo\" href=\"#section7\">Contact</a>
                    </li>
                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"{{ path('blog') }}\">Blog</a>
                    </li>
                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"https://twitter.com/Skewrad_Alexis\">Twitter</a>
                    </li>
                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"https://github.com/AlexisAubineau?tab=repositories\">Github</a>
                    </li>
                </ul>
            </div>
        {% endblock %}
    </nav>
{% endblock %}
{% block body %}
        <section id=\"section1\" class=\"home\">
        {% for personnel in personnels %}
            <div class=\"container\">
                <div class=\"row\">
                    <h1 class=\"\">Aubineau
                        <span class=\"text-primary\">Alexis</span>
                    </h1>
                    <div class=\"\">
                        <p>{{ personnel.adresse }}</p>
                        <p>{{ personnel.codePostal }}</p>
                        <p>{{ personnel.ville }}</p>
                        <p>{{ personnel.numero }}</p>
                        <a href=\"{{ personnel.adresseMail }}\">{{ personnel.adresseMail }}</a>
                    </div>
                    <p class=\"\">{{ personnel.description }}</p>
                </div>
            </div>
        {% endfor %}
        </section>

        <section id=\"section2\" class=\"diplomes\">
            <div class=\"container\">
                <div class=\"row\">
                    <h1>Diplomes</h1>
                    {% for diplome in diplomes %}
                        <div class=\"resume-item d-flex flex-column flex-md-row mb-5\">
                            <div class=\"resume-content mr-auto\">
                                <h3 class=\"mb-0\">{{ diplome.titreDiplome }}</h3>
                                <div class=\"subheading mb-3\">{{ diplome.ecoleDiplome }}</div>
                                <p>{{ diplome.contenuDiplome }}</p>
                            </div>
                            <div class=\"resume-date text-md-right\">
                                <span class=\"text-primary\">{{ diplome.dateDiplome }}</span>
                            </div>
                        </div>
                    {% endfor %}
                </div>
            </div>
        </section>

        <section id=\"section3\" class=\"experiences\">
            <div class=\"container\">
                <div class=\"row\">
                    <h1>Expériences</h1>
                    {% for experience in experiences %}
                        <div class=\"resume-item d-flex flex-column flex-md-row mb-5\">
                            <div class=\"resume-content mr-auto\">
                                <h3 class=\"mb-0\">{{ experience.titreExperience }}</h3>
                                <p>{{ experience.contenuExperience }}</p>
                            </div>
                            <div class=\"resume-date text-md-right\">
                                <span class=\"text-primary\">{{ experience.dateExperience }}</span>
                            </div>
                        </div>
                    {% endfor %}
                </div>
            </div>
        </section>

        <section id=\"section4\" class=\"competences\">
            <div class=\"container\">
                <div class=\"row\">
                    <h1>Compétences</h1>
                    {% for competence in competences %}
                        <div class=\"resume-item d-flex flex-column flex-md-row mb-5\">
                            <div class=\"resume-content mr-auto\">
                                <h3 class=\"mb-0\">{{ competence.titreCompetence }}</h3>
                                <hr>
                                <p>{{ competence.niveauCompetence }}</p>
                                <hr>
                            </div>
                        </div>
                    {% endfor %}
                </div>
            </div>
        </section>

        <section id=\"section5\" class=\"realisations\">
            <div class=\"container\">
                <div class=\"row\">
                    <h1>Réalisations</h1>
                    {% for realisation in realisations %}
                        <div class=\"col-md-6\">
                            <div class=\"article\">
                                <div class=\"card mb-6\">
                                    <div class=\"card-body\">
                                        <h2 class=\"card-title\">{{ realisation.titreRealisation }}</h2>
                                        <p class=\"card-text\">{{ realisation.contenuRealisation }}</p>
                                        <p>{{ realisation.dateRealisation }}</p>
                                        <a href=\"{{ realisation.urlRealisation }}\" class=\"btn btn-primary\">Lire &rarr;</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    {% endfor %}
                </div>
            </div>
        </section>

        <section id=\"section6\" class=\"certifications\">
            <div class=\"container\">
                <div class=\"row\">
                    <h1>Certifications</h1>
                    {% for certification in certifications %}
                        <div class=\"resume-item d-flex flex-column flex-md-row mb-5\">
                            <div class=\"resume-content mr-auto\">
                                <h3 class=\"mb-0\">{{ certification.titreCertification }}</h3>
                                <p>{{ certification.contenuCertification }}</p>
                            </div>
                            <div class=\"resume-date text-md-right\">
                                <span class=\"text-primary\">{{ certification.dateCertification }}</span>
                            </div>
                        </div>
                    {% endfor %}
                </div>
            </div>
        </section>

        <section id=\"section7\" class=\"contact\">
            <div class=\"container\">
                <div class=\"row\">
                    <h1>Contact</h1>
                </div>
            </div>
        </section>
{% endblock %}", "AppBundle:default:index.html.twig", "/var/www/b2.2017/Blog/src/AppBundle/Resources/views/default/index.html.twig");
    }
}
