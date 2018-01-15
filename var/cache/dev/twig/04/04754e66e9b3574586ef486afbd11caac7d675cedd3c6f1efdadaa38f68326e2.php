<?php

/* SonataAdminBundle:CRUD:base_array_macro.html.twig */
class __TwigTemplate_08cc4a20696574369aa80e60b62e900be0eaa3770ee421e42cabfc76dd4a200d extends Twig_Template
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
        $__internal_e5401d2fc5aed3d5b30fb826cf75a7f48f99efc02d1f2f2f4e2780b6d70f0800 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e5401d2fc5aed3d5b30fb826cf75a7f48f99efc02d1f2f2f4e2780b6d70f0800->enter($__internal_e5401d2fc5aed3d5b30fb826cf75a7f48f99efc02d1f2f2f4e2780b6d70f0800_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:base_array_macro.html.twig"));

        $__internal_ca942246aa53600bff1dd24fd1c92e1a939837055b0761ca62ca27c333121e1a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ca942246aa53600bff1dd24fd1c92e1a939837055b0761ca62ca27c333121e1a->enter($__internal_ca942246aa53600bff1dd24fd1c92e1a939837055b0761ca62ca27c333121e1a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:base_array_macro.html.twig"));

        
        $__internal_e5401d2fc5aed3d5b30fb826cf75a7f48f99efc02d1f2f2f4e2780b6d70f0800->leave($__internal_e5401d2fc5aed3d5b30fb826cf75a7f48f99efc02d1f2f2f4e2780b6d70f0800_prof);

        
        $__internal_ca942246aa53600bff1dd24fd1c92e1a939837055b0761ca62ca27c333121e1a->leave($__internal_ca942246aa53600bff1dd24fd1c92e1a939837055b0761ca62ca27c333121e1a_prof);

    }

    // line 11
    public function getrender_array($__value__ = null, $__inline__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "value" => $__value__,
            "inline" => $__inline__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_04268f460bb56fcbe1bf9a25f8bca5a6f1dbc7b5cadde69cdd5d9a9d27509715 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
            $__internal_04268f460bb56fcbe1bf9a25f8bca5a6f1dbc7b5cadde69cdd5d9a9d27509715->enter($__internal_04268f460bb56fcbe1bf9a25f8bca5a6f1dbc7b5cadde69cdd5d9a9d27509715_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "render_array"));

            $__internal_ef8d64e4484887305da131607cbc983b46e294ef58abf35be26307f493ebb573 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
            $__internal_ef8d64e4484887305da131607cbc983b46e294ef58abf35be26307f493ebb573->enter($__internal_ef8d64e4484887305da131607cbc983b46e294ef58abf35be26307f493ebb573_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "render_array"));

            // line 12
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["value"] ?? $this->getContext($context, "value")));
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["key"] => $context["val"]) {
                // line 13
                echo "        ";
                if (twig_test_iterable($context["val"])) {
                    // line 14
                    echo "            [";
                    echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                    echo " => ";
                    echo $this->getAttribute($this, "render_array", array(0 => $context["val"], 1 => ($context["inline"] ?? $this->getContext($context, "inline"))), "method");
                    echo "]
        ";
                } else {
                    // line 16
                    echo "            [";
                    echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                    echo " => ";
                    echo twig_escape_filter($this->env, $context["val"], "html", null, true);
                    echo "]
        ";
                }
                // line 18
                echo "
        ";
                // line 19
                if (( !$this->getAttribute($context["loop"], "last", array()) &&  !($context["inline"] ?? $this->getContext($context, "inline")))) {
                    // line 20
                    echo "            <br>
        ";
                }
                // line 22
                echo "    ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['val'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            
            $__internal_ef8d64e4484887305da131607cbc983b46e294ef58abf35be26307f493ebb573->leave($__internal_ef8d64e4484887305da131607cbc983b46e294ef58abf35be26307f493ebb573_prof);

            
            $__internal_04268f460bb56fcbe1bf9a25f8bca5a6f1dbc7b5cadde69cdd5d9a9d27509715->leave($__internal_04268f460bb56fcbe1bf9a25f8bca5a6f1dbc7b5cadde69cdd5d9a9d27509715_prof);

        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:base_array_macro.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  98 => 22,  94 => 20,  92 => 19,  89 => 18,  81 => 16,  73 => 14,  70 => 13,  52 => 12,  33 => 11,);
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
{% macro render_array(value, inline) %}
    {% for key, val in value %}
        {% if val is iterable %}
            [{{ key }} => {{ _self.render_array(val, inline) }}]
        {%  else %}
            [{{ key }} => {{ val }}]
        {%  endif %}

        {% if not loop.last and not inline %}
            <br>
        {% endif %}
    {% endfor %}
{% endmacro %}
", "SonataAdminBundle:CRUD:base_array_macro.html.twig", "/var/www/b2.2017/Blog/vendor/sonata-project/admin-bundle/Resources/views/CRUD/base_array_macro.html.twig");
    }
}
