<?php

/* SonataAdminBundle:Button:create_button.html.twig */
class __TwigTemplate_577352f852c547b4e4247aef4b2ea2aaf5259da91de42be570ccbdff9f6553b0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_fba53235be2f647abf8f78e6d5bb22912bbc1d78a9a1b5f77beed7879b67bd1c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fba53235be2f647abf8f78e6d5bb22912bbc1d78a9a1b5f77beed7879b67bd1c->enter($__internal_fba53235be2f647abf8f78e6d5bb22912bbc1d78a9a1b5f77beed7879b67bd1c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:Button:create_button.html.twig"));

        $__internal_6f63a6efb784c3846467c8a2d379390632a7104d5f8de9b9c7a5847e1741bb7b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6f63a6efb784c3846467c8a2d379390632a7104d5f8de9b9c7a5847e1741bb7b->enter($__internal_6f63a6efb784c3846467c8a2d379390632a7104d5f8de9b9c7a5847e1741bb7b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:Button:create_button.html.twig"));

        // line 11
        echo "
";
        // line 12
        if (($this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "hasAccess", array(0 => "create"), "method") && $this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "hasRoute", array(0 => "create"), "method"))) {
            // line 13
            echo "    ";
            if (twig_test_empty($this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "subClasses", array()))) {
                // line 14
                echo "        <li>
            <a class=\"sonata-action-element\" href=\"";
                // line 15
                echo twig_escape_filter($this->env, $this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "generateUrl", array(0 => "create"), "method"), "html", null, true);
                echo "\">
                <i class=\"fa fa-plus-circle\" aria-hidden=\"true\"></i>
                ";
                // line 17
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("link_action_create", array(), "SonataAdminBundle"), "html", null, true);
                echo "
            </a>
        </li>
    ";
            } else {
                // line 21
                echo "        ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_array_keys_filter($this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "subclasses", array())));
                foreach ($context['_seq'] as $context["_key"] => $context["subclass"]) {
                    // line 22
                    echo "            <li>
                <a class=\"sonata-action-element\" href=\"";
                    // line 23
                    echo twig_escape_filter($this->env, $this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "generateUrl", array(0 => "create", 1 => array("subclass" => $context["subclass"])), "method"), "html", null, true);
                    echo "\">
                    <i class=\"fa fa-plus-circle\" aria-hidden=\"true\"></i>
                    ";
                    // line 25
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("link_action_create", array(), "SonataAdminBundle"), "html", null, true);
                    echo " ";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($context["subclass"], array(), $this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "translationdomain", array())), "html", null, true);
                    echo "
                </a>
            </li>
        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['subclass'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 29
                echo "    ";
            }
        }
        
        $__internal_fba53235be2f647abf8f78e6d5bb22912bbc1d78a9a1b5f77beed7879b67bd1c->leave($__internal_fba53235be2f647abf8f78e6d5bb22912bbc1d78a9a1b5f77beed7879b67bd1c_prof);

        
        $__internal_6f63a6efb784c3846467c8a2d379390632a7104d5f8de9b9c7a5847e1741bb7b->leave($__internal_6f63a6efb784c3846467c8a2d379390632a7104d5f8de9b9c7a5847e1741bb7b_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:Button:create_button.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 29,  61 => 25,  56 => 23,  53 => 22,  48 => 21,  41 => 17,  36 => 15,  33 => 14,  30 => 13,  28 => 12,  25 => 11,);
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

{% if admin.hasAccess('create') and admin.hasRoute('create') %}
    {% if admin.subClasses is empty %}
        <li>
            <a class=\"sonata-action-element\" href=\"{{ admin.generateUrl('create') }}\">
                <i class=\"fa fa-plus-circle\" aria-hidden=\"true\"></i>
                {{ 'link_action_create'|trans({}, 'SonataAdminBundle') }}
            </a>
        </li>
    {% else %}
        {% for subclass in admin.subclasses|keys %}
            <li>
                <a class=\"sonata-action-element\" href=\"{{ admin.generateUrl('create', {'subclass': subclass}) }}\">
                    <i class=\"fa fa-plus-circle\" aria-hidden=\"true\"></i>
                    {{ 'link_action_create'|trans({}, 'SonataAdminBundle') }} {{ subclass|trans({}, admin.translationdomain) }}
                </a>
            </li>
        {% endfor %}
    {% endif %}
{% endif %}
", "SonataAdminBundle:Button:create_button.html.twig", "/var/www/b2.2017/Blog/vendor/sonata-project/admin-bundle/Resources/views/Button/create_button.html.twig");
    }
}
