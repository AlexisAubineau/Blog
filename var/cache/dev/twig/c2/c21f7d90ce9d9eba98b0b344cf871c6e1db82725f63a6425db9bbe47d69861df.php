<?php

/* SonataAdminBundle:Pager:base_results.html.twig */
class __TwigTemplate_7fbb532710719d3d97e45148ec60cc9f17b659b4faa1d611be36040040c5f234 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'num_pages' => array($this, 'block_num_pages'),
            'num_results' => array($this, 'block_num_results'),
            'max_per_page' => array($this, 'block_max_per_page'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b30e3cab562164b7cc88220d4e022429f67952f14d650c2cb97759e96ce67722 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b30e3cab562164b7cc88220d4e022429f67952f14d650c2cb97759e96ce67722->enter($__internal_b30e3cab562164b7cc88220d4e022429f67952f14d650c2cb97759e96ce67722_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:Pager:base_results.html.twig"));

        $__internal_18d6ee12a4496f8bd8372ac48dbb3da78c9b3b73d30587d05b538d3cb4d9e60a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_18d6ee12a4496f8bd8372ac48dbb3da78c9b3b73d30587d05b538d3cb4d9e60a->enter($__internal_18d6ee12a4496f8bd8372ac48dbb3da78c9b3b73d30587d05b538d3cb4d9e60a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:Pager:base_results.html.twig"));

        // line 11
        echo "
";
        // line 12
        $this->displayBlock('num_pages', $context, $blocks);
        // line 16
        echo "
";
        // line 17
        $this->displayBlock('num_results', $context, $blocks);
        // line 21
        echo "
";
        // line 22
        $this->displayBlock('max_per_page', $context, $blocks);
        
        $__internal_b30e3cab562164b7cc88220d4e022429f67952f14d650c2cb97759e96ce67722->leave($__internal_b30e3cab562164b7cc88220d4e022429f67952f14d650c2cb97759e96ce67722_prof);

        
        $__internal_18d6ee12a4496f8bd8372ac48dbb3da78c9b3b73d30587d05b538d3cb4d9e60a->leave($__internal_18d6ee12a4496f8bd8372ac48dbb3da78c9b3b73d30587d05b538d3cb4d9e60a_prof);

    }

    // line 12
    public function block_num_pages($context, array $blocks = array())
    {
        $__internal_ed630a61fe5c9786265d2490e8253afea480a5aeaf2679abdc425a04bd4e7f26 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ed630a61fe5c9786265d2490e8253afea480a5aeaf2679abdc425a04bd4e7f26->enter($__internal_ed630a61fe5c9786265d2490e8253afea480a5aeaf2679abdc425a04bd4e7f26_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "num_pages"));

        $__internal_44dd034d0b893511a53476c29d021dde34c7e23601dd6e3221bde47062d6bfc8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_44dd034d0b893511a53476c29d021dde34c7e23601dd6e3221bde47062d6bfc8->enter($__internal_44dd034d0b893511a53476c29d021dde34c7e23601dd6e3221bde47062d6bfc8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "num_pages"));

        // line 13
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "datagrid", array()), "pager", array()), "page", array()), "html", null, true);
        echo " / ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "datagrid", array()), "pager", array()), "lastpage", array()), "html", null, true);
        echo "
    &nbsp;-&nbsp;
";
        
        $__internal_44dd034d0b893511a53476c29d021dde34c7e23601dd6e3221bde47062d6bfc8->leave($__internal_44dd034d0b893511a53476c29d021dde34c7e23601dd6e3221bde47062d6bfc8_prof);

        
        $__internal_ed630a61fe5c9786265d2490e8253afea480a5aeaf2679abdc425a04bd4e7f26->leave($__internal_ed630a61fe5c9786265d2490e8253afea480a5aeaf2679abdc425a04bd4e7f26_prof);

    }

    // line 17
    public function block_num_results($context, array $blocks = array())
    {
        $__internal_e75af0318a1daa218fd61446f3bcdb5bc75a5b45d3cc521087f2ef1748a675f6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e75af0318a1daa218fd61446f3bcdb5bc75a5b45d3cc521087f2ef1748a675f6->enter($__internal_e75af0318a1daa218fd61446f3bcdb5bc75a5b45d3cc521087f2ef1748a675f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "num_results"));

        $__internal_074ed01b3db9180d21d81881af564ca8450ac1056f8cd9729bc77382eec507c7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_074ed01b3db9180d21d81881af564ca8450ac1056f8cd9729bc77382eec507c7->enter($__internal_074ed01b3db9180d21d81881af564ca8450ac1056f8cd9729bc77382eec507c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "num_results"));

        // line 18
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->transChoice("list_results_count", $this->getAttribute($this->getAttribute($this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "datagrid", array()), "pager", array()), "nbresults", array()), array("%count%" => $this->getAttribute($this->getAttribute($this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "datagrid", array()), "pager", array()), "nbresults", array())), "SonataAdminBundle");
        // line 19
        echo "    &nbsp;-&nbsp;
";
        
        $__internal_074ed01b3db9180d21d81881af564ca8450ac1056f8cd9729bc77382eec507c7->leave($__internal_074ed01b3db9180d21d81881af564ca8450ac1056f8cd9729bc77382eec507c7_prof);

        
        $__internal_e75af0318a1daa218fd61446f3bcdb5bc75a5b45d3cc521087f2ef1748a675f6->leave($__internal_e75af0318a1daa218fd61446f3bcdb5bc75a5b45d3cc521087f2ef1748a675f6_prof);

    }

    // line 22
    public function block_max_per_page($context, array $blocks = array())
    {
        $__internal_a004261bb41f9ecde04c53fda5b62e001f00b085f9750611f20ffca1f657ea3e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a004261bb41f9ecde04c53fda5b62e001f00b085f9750611f20ffca1f657ea3e->enter($__internal_a004261bb41f9ecde04c53fda5b62e001f00b085f9750611f20ffca1f657ea3e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "max_per_page"));

        $__internal_a18864db175dd411e7fdc40d99610e5d689c239f92e0981b79a72d1f14f2618f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a18864db175dd411e7fdc40d99610e5d689c239f92e0981b79a72d1f14f2618f->enter($__internal_a18864db175dd411e7fdc40d99610e5d689c239f92e0981b79a72d1f14f2618f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "max_per_page"));

        // line 23
        echo "    <label class=\"control-label\" for=\"";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "uniqid", array()), "html", null, true);
        echo "_per_page\">";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("label_per_page", array(), "SonataAdminBundle");
        echo "</label>
    <select class=\"per-page small form-control\" id=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "uniqid", array()), "html", null, true);
        echo "_per_page\" style=\"width: auto\">
        ";
        // line 25
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "getperpageoptions", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["per_page"]) {
            // line 26
            echo "            <option ";
            if (($context["per_page"] == $this->getAttribute($this->getAttribute($this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "datagrid", array()), "pager", array()), "maxperpage", array()))) {
                echo "selected=\"selected\"";
            }
            echo " value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "generateUrl", array(0 => "list", 1 => array("filter" => twig_array_merge($this->getAttribute($this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "datagrid", array()), "values", array()), array("_page" => 1, "_per_page" => $context["per_page"])))), "method"), "html", null, true);
            echo "\">";
            // line 27
            echo twig_escape_filter($this->env, $context["per_page"], "html", null, true);
            // line 28
            echo "</option>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['per_page'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 30
        echo "    </select>
";
        
        $__internal_a18864db175dd411e7fdc40d99610e5d689c239f92e0981b79a72d1f14f2618f->leave($__internal_a18864db175dd411e7fdc40d99610e5d689c239f92e0981b79a72d1f14f2618f_prof);

        
        $__internal_a004261bb41f9ecde04c53fda5b62e001f00b085f9750611f20ffca1f657ea3e->leave($__internal_a004261bb41f9ecde04c53fda5b62e001f00b085f9750611f20ffca1f657ea3e_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:Pager:base_results.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  140 => 30,  133 => 28,  131 => 27,  123 => 26,  119 => 25,  115 => 24,  108 => 23,  99 => 22,  88 => 19,  85 => 18,  76 => 17,  60 => 13,  51 => 12,  41 => 22,  38 => 21,  36 => 17,  33 => 16,  31 => 12,  28 => 11,);
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

{% block num_pages %}
    {{ admin.datagrid.pager.page }} / {{ admin.datagrid.pager.lastpage }}
    &nbsp;-&nbsp;
{% endblock %}

{% block num_results %}
    {% transchoice admin.datagrid.pager.nbresults with {'%count%': admin.datagrid.pager.nbresults} from 'SonataAdminBundle' %}list_results_count{% endtranschoice %}
    &nbsp;-&nbsp;
{% endblock %}

{% block max_per_page %}
    <label class=\"control-label\" for=\"{{ admin.uniqid }}_per_page\">{% trans from 'SonataAdminBundle' %}label_per_page{% endtrans %}</label>
    <select class=\"per-page small form-control\" id=\"{{ admin.uniqid }}_per_page\" style=\"width: auto\">
        {% for per_page in admin.getperpageoptions %}
            <option {% if per_page == admin.datagrid.pager.maxperpage %}selected=\"selected\"{% endif %} value=\"{{ admin.generateUrl('list', {'filter': admin.datagrid.values|merge({'_page': 1, '_per_page': per_page})}) }}\">
                {{- per_page -}}
            </option>
        {% endfor %}
    </select>
{% endblock %}
", "SonataAdminBundle:Pager:base_results.html.twig", "/var/www/b2.2017/Blog/vendor/sonata-project/admin-bundle/Resources/views/Pager/base_results.html.twig");
    }
}
