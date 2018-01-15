<?php

/* SonataBlockBundle:Block:block_base.html.twig */
class __TwigTemplate_31bea9d984b83c78ad2872c58141ee69a6b1926c75506fe02012530335f82082 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'block' => array($this, 'block_block'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a7b336c590784d5654bbd6e0491a5eaa892481fd895345c14c30b25cc6fea750 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a7b336c590784d5654bbd6e0491a5eaa892481fd895345c14c30b25cc6fea750->enter($__internal_a7b336c590784d5654bbd6e0491a5eaa892481fd895345c14c30b25cc6fea750_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataBlockBundle:Block:block_base.html.twig"));

        $__internal_ed909ebdc9b826466f2580a95342b0a921844f23cb3cd79da4cf005df2c8dfce = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ed909ebdc9b826466f2580a95342b0a921844f23cb3cd79da4cf005df2c8dfce->enter($__internal_ed909ebdc9b826466f2580a95342b0a921844f23cb3cd79da4cf005df2c8dfce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataBlockBundle:Block:block_base.html.twig"));

        // line 11
        echo "<div id=\"cms-block-";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["block"] ?? $this->getContext($context, "block")), "id", array()), "html", null, true);
        echo "\" class=\"cms-block cms-block-element\">
    ";
        // line 12
        $this->displayBlock('block', $context, $blocks);
        // line 13
        echo "</div>
";
        
        $__internal_a7b336c590784d5654bbd6e0491a5eaa892481fd895345c14c30b25cc6fea750->leave($__internal_a7b336c590784d5654bbd6e0491a5eaa892481fd895345c14c30b25cc6fea750_prof);

        
        $__internal_ed909ebdc9b826466f2580a95342b0a921844f23cb3cd79da4cf005df2c8dfce->leave($__internal_ed909ebdc9b826466f2580a95342b0a921844f23cb3cd79da4cf005df2c8dfce_prof);

    }

    // line 12
    public function block_block($context, array $blocks = array())
    {
        $__internal_2a274b308b3e3501e3ff6450402dfa5aa4991515c06ff8379130277ec70bbd61 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2a274b308b3e3501e3ff6450402dfa5aa4991515c06ff8379130277ec70bbd61->enter($__internal_2a274b308b3e3501e3ff6450402dfa5aa4991515c06ff8379130277ec70bbd61_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

        $__internal_d79af29455dc5ce0d6b501abf585536d824d073f10c9a84edb4c8e516d36e900 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d79af29455dc5ce0d6b501abf585536d824d073f10c9a84edb4c8e516d36e900->enter($__internal_d79af29455dc5ce0d6b501abf585536d824d073f10c9a84edb4c8e516d36e900_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

        echo "EMPTY CONTENT";
        
        $__internal_d79af29455dc5ce0d6b501abf585536d824d073f10c9a84edb4c8e516d36e900->leave($__internal_d79af29455dc5ce0d6b501abf585536d824d073f10c9a84edb4c8e516d36e900_prof);

        
        $__internal_2a274b308b3e3501e3ff6450402dfa5aa4991515c06ff8379130277ec70bbd61->leave($__internal_2a274b308b3e3501e3ff6450402dfa5aa4991515c06ff8379130277ec70bbd61_prof);

    }

    public function getTemplateName()
    {
        return "SonataBlockBundle:Block:block_base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  44 => 12,  33 => 13,  31 => 12,  26 => 11,);
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
<div id=\"cms-block-{{ block.id }}\" class=\"cms-block cms-block-element\">
    {% block block %}EMPTY CONTENT{% endblock %}
</div>
", "SonataBlockBundle:Block:block_base.html.twig", "/var/www/b2.2017/Blog/vendor/sonata-project/block-bundle/Resources/views/Block/block_base.html.twig");
    }
}
