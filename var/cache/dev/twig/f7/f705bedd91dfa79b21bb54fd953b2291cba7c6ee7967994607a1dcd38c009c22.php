<?php

/* SonataAdminBundle:CRUD:base_edit.html.twig */
class __TwigTemplate_633f2c49d4adaafa50b1bb716e0e9ceeceabc3dcf96d4d891973a7b03252f5db extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $_trait_0 = $this->loadTemplate("SonataAdminBundle:CRUD:base_edit_form.html.twig", "SonataAdminBundle:CRUD:base_edit.html.twig", 33);
        // line 33
        if (!$_trait_0->isTraitable()) {
            throw new Twig_Error_Runtime('Template "'."SonataAdminBundle:CRUD:base_edit_form.html.twig".'" cannot be used as a trait.');
        }
        $_trait_0_blocks = $_trait_0->getBlocks();

        if (!isset($_trait_0_blocks["form"])) {
            throw new Twig_Error_Runtime(sprintf('Block "form" is not defined in trait "SonataAdminBundle:CRUD:base_edit_form.html.twig".'));
        }

        $_trait_0_blocks["parentForm"] = $_trait_0_blocks["form"]; unset($_trait_0_blocks["form"]);

        $this->traits = $_trait_0_blocks;

        $this->blocks = array_merge(
            $this->traits,
            array(
                'title' => array($this, 'block_title'),
                'navbar_title' => array($this, 'block_navbar_title'),
                'actions' => array($this, 'block_actions'),
                'tab_menu' => array($this, 'block_tab_menu'),
                'form' => array($this, 'block_form'),
            )
        );
    }

    protected function doGetParent(array $context)
    {
        // line 12
        return $this->loadTemplate(($context["base_template"] ?? $this->getContext($context, "base_template")), "SonataAdminBundle:CRUD:base_edit.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_36417a796920049d828541ce23125ae4f6e282ce8b9421eb9910caed0e855981 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_36417a796920049d828541ce23125ae4f6e282ce8b9421eb9910caed0e855981->enter($__internal_36417a796920049d828541ce23125ae4f6e282ce8b9421eb9910caed0e855981_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:base_edit.html.twig"));

        $__internal_11f5c88c8b8aa63c9185663858ed6e290a8e44d82d5221dcc68436a6276cdea6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_11f5c88c8b8aa63c9185663858ed6e290a8e44d82d5221dcc68436a6276cdea6->enter($__internal_11f5c88c8b8aa63c9185663858ed6e290a8e44d82d5221dcc68436a6276cdea6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:base_edit.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_36417a796920049d828541ce23125ae4f6e282ce8b9421eb9910caed0e855981->leave($__internal_36417a796920049d828541ce23125ae4f6e282ce8b9421eb9910caed0e855981_prof);

        
        $__internal_11f5c88c8b8aa63c9185663858ed6e290a8e44d82d5221dcc68436a6276cdea6->leave($__internal_11f5c88c8b8aa63c9185663858ed6e290a8e44d82d5221dcc68436a6276cdea6_prof);

    }

    // line 14
    public function block_title($context, array $blocks = array())
    {
        $__internal_cdac81f41970b65faf6ebb9493adf6d47ec04855a4914769a03259beae18ec6e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cdac81f41970b65faf6ebb9493adf6d47ec04855a4914769a03259beae18ec6e->enter($__internal_cdac81f41970b65faf6ebb9493adf6d47ec04855a4914769a03259beae18ec6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_07ba11ea0379f127e8690bffc19e400da08c8006f9da3738d0c5ae7f582626a3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_07ba11ea0379f127e8690bffc19e400da08c8006f9da3738d0c5ae7f582626a3->enter($__internal_07ba11ea0379f127e8690bffc19e400da08c8006f9da3738d0c5ae7f582626a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 15
        echo "    ";
        // line 16
        echo "    ";
        if ( !(null === ((array_key_exists("objectId", $context)) ? (_twig_default_filter(($context["objectId"] ?? $this->getContext($context, "objectId")), $this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "id", array(0 => ($context["object"] ?? $this->getContext($context, "object"))), "method"))) : ($this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "id", array(0 => ($context["object"] ?? $this->getContext($context, "object"))), "method"))))) {
            // line 17
            echo "        ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("title_edit", array("%name%" => twig_truncate_filter($this->env, $this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "toString", array(0 => ($context["object"] ?? $this->getContext($context, "object"))), "method"), 15)), "SonataAdminBundle"), "html", null, true);
            echo "
    ";
        } else {
            // line 19
            echo "        ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("title_create", array(), "SonataAdminBundle"), "html", null, true);
            echo "
    ";
        }
        
        $__internal_07ba11ea0379f127e8690bffc19e400da08c8006f9da3738d0c5ae7f582626a3->leave($__internal_07ba11ea0379f127e8690bffc19e400da08c8006f9da3738d0c5ae7f582626a3_prof);

        
        $__internal_cdac81f41970b65faf6ebb9493adf6d47ec04855a4914769a03259beae18ec6e->leave($__internal_cdac81f41970b65faf6ebb9493adf6d47ec04855a4914769a03259beae18ec6e_prof);

    }

    // line 23
    public function block_navbar_title($context, array $blocks = array())
    {
        $__internal_4d189c070d05b870a53ad3dd3dafb9e9d19e87c14e58d7017311f6f5995ae9a1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4d189c070d05b870a53ad3dd3dafb9e9d19e87c14e58d7017311f6f5995ae9a1->enter($__internal_4d189c070d05b870a53ad3dd3dafb9e9d19e87c14e58d7017311f6f5995ae9a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navbar_title"));

        $__internal_19cf56c120a2b56e3ae2f4987102e02a3982313d81317aadeca29d29e003c20e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_19cf56c120a2b56e3ae2f4987102e02a3982313d81317aadeca29d29e003c20e->enter($__internal_19cf56c120a2b56e3ae2f4987102e02a3982313d81317aadeca29d29e003c20e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navbar_title"));

        // line 24
        echo "    ";
        $this->displayBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_19cf56c120a2b56e3ae2f4987102e02a3982313d81317aadeca29d29e003c20e->leave($__internal_19cf56c120a2b56e3ae2f4987102e02a3982313d81317aadeca29d29e003c20e_prof);

        
        $__internal_4d189c070d05b870a53ad3dd3dafb9e9d19e87c14e58d7017311f6f5995ae9a1->leave($__internal_4d189c070d05b870a53ad3dd3dafb9e9d19e87c14e58d7017311f6f5995ae9a1_prof);

    }

    // line 27
    public function block_actions($context, array $blocks = array())
    {
        $__internal_d657b2c03d15b27ffcf95a18165c83e544f4e5a819dfe39b1c4428b9615487f8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d657b2c03d15b27ffcf95a18165c83e544f4e5a819dfe39b1c4428b9615487f8->enter($__internal_d657b2c03d15b27ffcf95a18165c83e544f4e5a819dfe39b1c4428b9615487f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "actions"));

        $__internal_b39cf92085b68ecc7fbf24da9a825f24e1a782b8d28e5ee5ec54c0499c8a0a05 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b39cf92085b68ecc7fbf24da9a825f24e1a782b8d28e5ee5ec54c0499c8a0a05->enter($__internal_b39cf92085b68ecc7fbf24da9a825f24e1a782b8d28e5ee5ec54c0499c8a0a05_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "actions"));

        // line 28
        $this->loadTemplate("SonataAdminBundle:CRUD:action_buttons.html.twig", "SonataAdminBundle:CRUD:base_edit.html.twig", 28)->display($context);
        
        $__internal_b39cf92085b68ecc7fbf24da9a825f24e1a782b8d28e5ee5ec54c0499c8a0a05->leave($__internal_b39cf92085b68ecc7fbf24da9a825f24e1a782b8d28e5ee5ec54c0499c8a0a05_prof);

        
        $__internal_d657b2c03d15b27ffcf95a18165c83e544f4e5a819dfe39b1c4428b9615487f8->leave($__internal_d657b2c03d15b27ffcf95a18165c83e544f4e5a819dfe39b1c4428b9615487f8_prof);

    }

    // line 31
    public function block_tab_menu($context, array $blocks = array())
    {
        $__internal_d310287fdfd7e48652462c8bcbc236735e7526805404c6c2ae9198bc50c8227e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d310287fdfd7e48652462c8bcbc236735e7526805404c6c2ae9198bc50c8227e->enter($__internal_d310287fdfd7e48652462c8bcbc236735e7526805404c6c2ae9198bc50c8227e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tab_menu"));

        $__internal_2be6440bd195194f352b8be8bfbf9a81d37de70aa96fdf1cd780b3a641cacbb4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2be6440bd195194f352b8be8bfbf9a81d37de70aa96fdf1cd780b3a641cacbb4->enter($__internal_2be6440bd195194f352b8be8bfbf9a81d37de70aa96fdf1cd780b3a641cacbb4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tab_menu"));

        echo $this->env->getExtension('Knp\Menu\Twig\MenuExtension')->render($this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "sidemenu", array(0 => ($context["action"] ?? $this->getContext($context, "action"))), "method"), array("currentClass" => "active", "template" => $this->getAttribute($this->getAttribute(($context["sonata_admin"] ?? $this->getContext($context, "sonata_admin")), "adminPool", array()), "getTemplate", array(0 => "tab_menu_template"), "method")), "twig");
        
        $__internal_2be6440bd195194f352b8be8bfbf9a81d37de70aa96fdf1cd780b3a641cacbb4->leave($__internal_2be6440bd195194f352b8be8bfbf9a81d37de70aa96fdf1cd780b3a641cacbb4_prof);

        
        $__internal_d310287fdfd7e48652462c8bcbc236735e7526805404c6c2ae9198bc50c8227e->leave($__internal_d310287fdfd7e48652462c8bcbc236735e7526805404c6c2ae9198bc50c8227e_prof);

    }

    // line 35
    public function block_form($context, array $blocks = array())
    {
        $__internal_c84bd6487ffae2af5b3c4f155dd9fbcbf6fa14e3f63b9e2f45828d8658388bd5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c84bd6487ffae2af5b3c4f155dd9fbcbf6fa14e3f63b9e2f45828d8658388bd5->enter($__internal_c84bd6487ffae2af5b3c4f155dd9fbcbf6fa14e3f63b9e2f45828d8658388bd5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form"));

        $__internal_40ebe459acec30fe9231e4bfdfc3a738c59180b6fc462a7917de57b2adb84614 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_40ebe459acec30fe9231e4bfdfc3a738c59180b6fc462a7917de57b2adb84614->enter($__internal_40ebe459acec30fe9231e4bfdfc3a738c59180b6fc462a7917de57b2adb84614_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form"));

        // line 36
        echo "    ";
        $this->displayBlock("parentForm", $context, $blocks);
        echo "
";
        
        $__internal_40ebe459acec30fe9231e4bfdfc3a738c59180b6fc462a7917de57b2adb84614->leave($__internal_40ebe459acec30fe9231e4bfdfc3a738c59180b6fc462a7917de57b2adb84614_prof);

        
        $__internal_c84bd6487ffae2af5b3c4f155dd9fbcbf6fa14e3f63b9e2f45828d8658388bd5->leave($__internal_c84bd6487ffae2af5b3c4f155dd9fbcbf6fa14e3f63b9e2f45828d8658388bd5_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:base_edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  163 => 36,  154 => 35,  136 => 31,  126 => 28,  117 => 27,  104 => 24,  95 => 23,  81 => 19,  75 => 17,  72 => 16,  70 => 15,  61 => 14,  40 => 12,  12 => 33,);
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

{% extends base_template %}

{% block title %}
    {# NEXT_MAJOR: remove default filter #}
    {% if objectId|default(admin.id(object)) is not null %}
        {{ \"title_edit\"|trans({'%name%': admin.toString(object)|truncate(15) }, 'SonataAdminBundle') }}
    {% else %}
        {{ \"title_create\"|trans({}, 'SonataAdminBundle') }}
    {% endif %}
{% endblock %}

{% block navbar_title %}
    {{ block('title') }}
{% endblock %}

{%- block actions -%}
    {% include 'SonataAdminBundle:CRUD:action_buttons.html.twig' %}
{%- endblock -%}

{% block tab_menu %}{{ knp_menu_render(admin.sidemenu(action), {'currentClass' : 'active', 'template': sonata_admin.adminPool.getTemplate('tab_menu_template')}, 'twig') }}{% endblock %}

{% use 'SonataAdminBundle:CRUD:base_edit_form.html.twig' with form as parentForm %}

{% block form %}
    {{ block('parentForm') }}
{% endblock %}
", "SonataAdminBundle:CRUD:base_edit.html.twig", "/var/www/b2.2017/Blog/vendor/sonata-project/admin-bundle/Resources/views/CRUD/base_edit.html.twig");
    }
}
