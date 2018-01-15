<?php

/* SonataAdminBundle:Menu:sonata_menu.html.twig */
class __TwigTemplate_583be9e67e7f53ea97e4a0f7f55bec5fb1e97250b628c456c21085223325d046 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("knp_menu.html.twig", "SonataAdminBundle:Menu:sonata_menu.html.twig", 1);
        $this->blocks = array(
            'root' => array($this, 'block_root'),
            'item' => array($this, 'block_item'),
            'linkElement' => array($this, 'block_linkElement'),
            'spanElement' => array($this, 'block_spanElement'),
            'label' => array($this, 'block_label'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "knp_menu.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e9006c52bd7c44c5990e32bd325dae2a209f5ed4ec93af25cbf5a7219466591c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e9006c52bd7c44c5990e32bd325dae2a209f5ed4ec93af25cbf5a7219466591c->enter($__internal_e9006c52bd7c44c5990e32bd325dae2a209f5ed4ec93af25cbf5a7219466591c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:Menu:sonata_menu.html.twig"));

        $__internal_9525cb03d360d6f2a9c92b277192904560634b682da3f7cc5091a594cc373243 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9525cb03d360d6f2a9c92b277192904560634b682da3f7cc5091a594cc373243->enter($__internal_9525cb03d360d6f2a9c92b277192904560634b682da3f7cc5091a594cc373243_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:Menu:sonata_menu.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e9006c52bd7c44c5990e32bd325dae2a209f5ed4ec93af25cbf5a7219466591c->leave($__internal_e9006c52bd7c44c5990e32bd325dae2a209f5ed4ec93af25cbf5a7219466591c_prof);

        
        $__internal_9525cb03d360d6f2a9c92b277192904560634b682da3f7cc5091a594cc373243->leave($__internal_9525cb03d360d6f2a9c92b277192904560634b682da3f7cc5091a594cc373243_prof);

    }

    // line 3
    public function block_root($context, array $blocks = array())
    {
        $__internal_efc46a8ddfd4483c956a695400caab0554d816fde012ee4711a03d64a2b977b4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_efc46a8ddfd4483c956a695400caab0554d816fde012ee4711a03d64a2b977b4->enter($__internal_efc46a8ddfd4483c956a695400caab0554d816fde012ee4711a03d64a2b977b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "root"));

        $__internal_26ac05f652ce4a24428f7b3ad885e5b1efda3ef8e4fb81e9b736fa7be6b7c5d7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_26ac05f652ce4a24428f7b3ad885e5b1efda3ef8e4fb81e9b736fa7be6b7c5d7->enter($__internal_26ac05f652ce4a24428f7b3ad885e5b1efda3ef8e4fb81e9b736fa7be6b7c5d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "root"));

        // line 4
        $context["listAttributes"] = twig_array_merge($this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "childrenAttributes", array()), array("class" => "sidebar-menu"));
        // line 5
        $context["request"] = (($this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "extra", array(0 => "request"), "method")) ? ($this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "extra", array(0 => "request"), "method")) : ($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array())));
        // line 6
        echo "    ";
        $this->displayBlock("list", $context, $blocks);
        
        $__internal_26ac05f652ce4a24428f7b3ad885e5b1efda3ef8e4fb81e9b736fa7be6b7c5d7->leave($__internal_26ac05f652ce4a24428f7b3ad885e5b1efda3ef8e4fb81e9b736fa7be6b7c5d7_prof);

        
        $__internal_efc46a8ddfd4483c956a695400caab0554d816fde012ee4711a03d64a2b977b4->leave($__internal_efc46a8ddfd4483c956a695400caab0554d816fde012ee4711a03d64a2b977b4_prof);

    }

    // line 9
    public function block_item($context, array $blocks = array())
    {
        $__internal_719012780b1535d02f817d03c9c0a68f01b6531e974b8f52141958ab9d11bbc3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_719012780b1535d02f817d03c9c0a68f01b6531e974b8f52141958ab9d11bbc3->enter($__internal_719012780b1535d02f817d03c9c0a68f01b6531e974b8f52141958ab9d11bbc3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "item"));

        $__internal_06e93c355a815689b9885162b11c73cc0bf9a4524184141dcc6f5050042051cc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_06e93c355a815689b9885162b11c73cc0bf9a4524184141dcc6f5050042051cc->enter($__internal_06e93c355a815689b9885162b11c73cc0bf9a4524184141dcc6f5050042051cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "item"));

        // line 10
        if ($this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "displayed", array())) {
            // line 12
            $context["display"] = (twig_test_empty($this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "extra", array(0 => "roles"), "method")) || $this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_SUPER_ADMIN"));
            // line 13
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "extra", array(0 => "roles"), "method"));
            foreach ($context['_seq'] as $context["_key"] => $context["role"]) {
                if ( !($context["display"] ?? $this->getContext($context, "display"))) {
                    // line 14
                    $context["display"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted($context["role"]);
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['role'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        // line 18
        if (($this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "displayed", array()) && ((array_key_exists("display", $context)) ? (_twig_default_filter(($context["display"] ?? $this->getContext($context, "display")))) : ("")))) {
            // line 19
            echo "        ";
            $context["options"] = twig_array_merge(($context["options"] ?? $this->getContext($context, "options")), array("branch_class" => "treeview", "currentClass" => "active"));
            // line 20
            $this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "setChildrenAttribute", array(0 => "class", 1 => twig_trim_filter(($this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "childrenAttribute", array(0 => "class"), "method") . " active"))), "method");
            // line 21
            $this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "setChildrenAttribute", array(0 => "class", 1 => twig_trim_filter(($this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "childrenAttribute", array(0 => "class"), "method") . " treeview-menu"))), "method");
            // line 22
            echo "        ";
            $this->displayParentBlock("item", $context, $blocks);
            echo "
    ";
        }
        
        $__internal_06e93c355a815689b9885162b11c73cc0bf9a4524184141dcc6f5050042051cc->leave($__internal_06e93c355a815689b9885162b11c73cc0bf9a4524184141dcc6f5050042051cc_prof);

        
        $__internal_719012780b1535d02f817d03c9c0a68f01b6531e974b8f52141958ab9d11bbc3->leave($__internal_719012780b1535d02f817d03c9c0a68f01b6531e974b8f52141958ab9d11bbc3_prof);

    }

    // line 26
    public function block_linkElement($context, array $blocks = array())
    {
        $__internal_7046f51bc70e6f2fcf55a5d4246a0340369819a014bf0e526427fe855e64c902 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7046f51bc70e6f2fcf55a5d4246a0340369819a014bf0e526427fe855e64c902->enter($__internal_7046f51bc70e6f2fcf55a5d4246a0340369819a014bf0e526427fe855e64c902_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "linkElement"));

        $__internal_fc105f0d21f7cb8cbf3fcb4556eefd55084625fbfc8c98aeff24a6d457715cde = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fc105f0d21f7cb8cbf3fcb4556eefd55084625fbfc8c98aeff24a6d457715cde->enter($__internal_fc105f0d21f7cb8cbf3fcb4556eefd55084625fbfc8c98aeff24a6d457715cde_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "linkElement"));

        // line 27
        echo "    ";
        ob_start();
        // line 28
        echo "        ";
        $context["translation_domain"] = $this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "extra", array(0 => "label_catalogue", 1 => "messages"), "method");
        // line 29
        echo "        ";
        if (($this->getAttribute(($context["item"] ?? null), "extra", array(0 => "on_top"), "method", true, true) &&  !$this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "extra", array(0 => "on_top"), "method"))) {
            // line 30
            echo "            ";
            $context["icon"] = (($this->getAttribute(($context["item"] ?? null), "extra", array(0 => "icon"), "method", true, true)) ? (_twig_default_filter($this->getAttribute(($context["item"] ?? null), "extra", array(0 => "icon"), "method"), ((($this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "level", array()) > 1)) ? ("<i class=\"fa fa-angle-double-right\" aria-hidden=\"true\"></i>") : ("")))) : (((($this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "level", array()) > 1)) ? ("<i class=\"fa fa-angle-double-right\" aria-hidden=\"true\"></i>") : (""))));
            // line 31
            echo "        ";
        } else {
            // line 32
            echo "            ";
            $context["icon"] = $this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "extra", array(0 => "icon"), "method");
            // line 33
            echo "        ";
        }
        // line 34
        echo "        ";
        $context["is_link"] = true;
        // line 35
        echo "        ";
        $this->displayParentBlock("linkElement", $context, $blocks);
        echo "
    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_fc105f0d21f7cb8cbf3fcb4556eefd55084625fbfc8c98aeff24a6d457715cde->leave($__internal_fc105f0d21f7cb8cbf3fcb4556eefd55084625fbfc8c98aeff24a6d457715cde_prof);

        
        $__internal_7046f51bc70e6f2fcf55a5d4246a0340369819a014bf0e526427fe855e64c902->leave($__internal_7046f51bc70e6f2fcf55a5d4246a0340369819a014bf0e526427fe855e64c902_prof);

    }

    // line 39
    public function block_spanElement($context, array $blocks = array())
    {
        $__internal_fca0eeb1fec0feb690f3388f48272872e6c52f148bf25fa9ac8be994b136cac7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fca0eeb1fec0feb690f3388f48272872e6c52f148bf25fa9ac8be994b136cac7->enter($__internal_fca0eeb1fec0feb690f3388f48272872e6c52f148bf25fa9ac8be994b136cac7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "spanElement"));

        $__internal_0c45f924f1a3313853c740656fff4c1afe078eab258d4bd1b6b0df591d480904 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0c45f924f1a3313853c740656fff4c1afe078eab258d4bd1b6b0df591d480904->enter($__internal_0c45f924f1a3313853c740656fff4c1afe078eab258d4bd1b6b0df591d480904_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "spanElement"));

        // line 40
        echo "    ";
        ob_start();
        // line 41
        echo "        <a href=\"#\">
            ";
        // line 42
        $context["translation_domain"] = $this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "extra", array(0 => "label_catalogue"), "method");
        // line 43
        echo "            ";
        $context["icon"] = (($this->getAttribute(($context["item"] ?? null), "extra", array(0 => "icon"), "method", true, true)) ? (_twig_default_filter($this->getAttribute(($context["item"] ?? null), "extra", array(0 => "icon"), "method"), "")) : (""));
        // line 44
        echo "            ";
        echo ($context["icon"] ?? $this->getContext($context, "icon"));
        echo "
            ";
        // line 45
        $this->displayParentBlock("spanElement", $context, $blocks);
        // line 46
        if (( !$this->getAttribute(($context["item"] ?? null), "extra", array(0 => "keep_open"), "method", true, true) ||  !$this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "extra", array(0 => "keep_open"), "method"))) {
            // line 47
            echo "<span class=\"pull-right-container\"><i class=\"fa pull-right fa-angle-left\"></i></span>";
        }
        // line 49
        echo "</a>
    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_0c45f924f1a3313853c740656fff4c1afe078eab258d4bd1b6b0df591d480904->leave($__internal_0c45f924f1a3313853c740656fff4c1afe078eab258d4bd1b6b0df591d480904_prof);

        
        $__internal_fca0eeb1fec0feb690f3388f48272872e6c52f148bf25fa9ac8be994b136cac7->leave($__internal_fca0eeb1fec0feb690f3388f48272872e6c52f148bf25fa9ac8be994b136cac7_prof);

    }

    // line 53
    public function block_label($context, array $blocks = array())
    {
        $__internal_c026e30659b1970fd3715feefe86be4deb8a1de24a3cabc8fa324d6a4cdc6a45 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c026e30659b1970fd3715feefe86be4deb8a1de24a3cabc8fa324d6a4cdc6a45->enter($__internal_c026e30659b1970fd3715feefe86be4deb8a1de24a3cabc8fa324d6a4cdc6a45_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "label"));

        $__internal_6f1778a4cadefa56b2e640d1aed3df53d51e9337a247c0fe69482e9b502637e3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6f1778a4cadefa56b2e640d1aed3df53d51e9337a247c0fe69482e9b502637e3->enter($__internal_6f1778a4cadefa56b2e640d1aed3df53d51e9337a247c0fe69482e9b502637e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "label"));

        if ((array_key_exists("is_link", $context) && ($context["is_link"] ?? $this->getContext($context, "is_link")))) {
            echo ((array_key_exists("icon", $context)) ? (_twig_default_filter(($context["icon"] ?? $this->getContext($context, "icon")))) : (""));
        }
        if (($this->getAttribute(($context["options"] ?? $this->getContext($context, "options")), "allow_safe_labels", array()) && $this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "extra", array(0 => "safe_label", 1 => false), "method"))) {
            echo $this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "label", array());
        } else {
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "label", array()), array(), ((array_key_exists("translation_domain", $context)) ? (_twig_default_filter(($context["translation_domain"] ?? $this->getContext($context, "translation_domain")), "messages")) : ("messages"))), "html", null, true);
        }
        
        $__internal_6f1778a4cadefa56b2e640d1aed3df53d51e9337a247c0fe69482e9b502637e3->leave($__internal_6f1778a4cadefa56b2e640d1aed3df53d51e9337a247c0fe69482e9b502637e3_prof);

        
        $__internal_c026e30659b1970fd3715feefe86be4deb8a1de24a3cabc8fa324d6a4cdc6a45->leave($__internal_c026e30659b1970fd3715feefe86be4deb8a1de24a3cabc8fa324d6a4cdc6a45_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:Menu:sonata_menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  208 => 53,  196 => 49,  193 => 47,  191 => 46,  189 => 45,  184 => 44,  181 => 43,  179 => 42,  176 => 41,  173 => 40,  164 => 39,  150 => 35,  147 => 34,  144 => 33,  141 => 32,  138 => 31,  135 => 30,  132 => 29,  129 => 28,  126 => 27,  117 => 26,  103 => 22,  101 => 21,  99 => 20,  96 => 19,  94 => 18,  86 => 14,  81 => 13,  79 => 12,  77 => 10,  68 => 9,  57 => 6,  55 => 5,  53 => 4,  44 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'knp_menu.html.twig' %}

{% block root %}
    {%- set listAttributes = item.childrenAttributes|merge({'class': 'sidebar-menu'}) %}
    {%- set request        = item.extra('request') ?: app.request %}
    {{ block('list') -}}
{% endblock %}

{% block item %}
    {%- if item.displayed %}
        {#- check role of the group #}
        {%- set display = (item.extra('roles') is empty or is_granted('ROLE_SUPER_ADMIN') ) %}
        {%- for role in item.extra('roles') if not display %}
            {%- set display = is_granted(role) %}
        {%- endfor %}
    {%- endif %}

    {%- if item.displayed and display|default %}
        {% set options = options|merge({branch_class: 'treeview', currentClass: \"active\"}) %}
        {%- do item.setChildrenAttribute('class', (item.childrenAttribute('class')~' active')|trim) %}
        {%- do item.setChildrenAttribute('class', (item.childrenAttribute('class')~' treeview-menu')|trim) %}
        {{ parent() }}
    {% endif %}
{% endblock %}

{% block linkElement %}
    {% spaceless %}
        {% set translation_domain = item.extra('label_catalogue', 'messages') %}
        {% if item.extra('on_top') is defined and not item.extra('on_top') %}
            {% set icon = item.extra('icon')|default(item.level > 1 ? '<i class=\"fa fa-angle-double-right\" aria-hidden=\"true\"></i>' : '') %}
        {% else %}
            {% set icon = item.extra('icon') %}
        {% endif %}
        {% set is_link = true %}
        {{ parent() }}
    {% endspaceless %}
{% endblock %}

{% block spanElement %}
    {% spaceless %}
        <a href=\"#\">
            {% set translation_domain = item.extra('label_catalogue') %}
            {% set icon = item.extra('icon')|default('') %}
            {{ icon|raw }}
            {{ parent() }}
            {%- if item.extra('keep_open') is not defined or not item.extra('keep_open') -%}
                <span class=\"pull-right-container\"><i class=\"fa pull-right fa-angle-left\"></i></span>
            {%- endif -%}
        </a>
    {% endspaceless %}
{% endblock %}

{% block label %}{% if is_link is defined and is_link %}{{ icon|default|raw }}{% endif %}{% if options.allow_safe_labels and item.extra('safe_label', false) %}{{ item.label|raw }}{% else %}{{ item.label|trans({}, translation_domain|default('messages')) }}{% endif %}{% endblock %}
", "SonataAdminBundle:Menu:sonata_menu.html.twig", "/var/www/b2.2017/Blog/vendor/sonata-project/admin-bundle/Resources/views/Menu/sonata_menu.html.twig");
    }
}
