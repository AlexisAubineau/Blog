<?php

/* knp_menu_base.html.twig */
class __TwigTemplate_77cc21ea0aaec575bbd0142c8c3f2f9919eab34b81f127a51b10bea3a79f7903 extends Twig_Template
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
        $__internal_0ef8aed2d77bda0b8604a06477fd7b78d72814217d634e98dda7b36dc2bce428 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0ef8aed2d77bda0b8604a06477fd7b78d72814217d634e98dda7b36dc2bce428->enter($__internal_0ef8aed2d77bda0b8604a06477fd7b78d72814217d634e98dda7b36dc2bce428_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "knp_menu_base.html.twig"));

        $__internal_71c661d56718f6fbe1e0ef25325c447dd5e7cdb8118059f0eef1c5b57bc2016f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_71c661d56718f6fbe1e0ef25325c447dd5e7cdb8118059f0eef1c5b57bc2016f->enter($__internal_71c661d56718f6fbe1e0ef25325c447dd5e7cdb8118059f0eef1c5b57bc2016f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "knp_menu_base.html.twig"));

        // line 1
        if ($this->getAttribute(($context["options"] ?? $this->getContext($context, "options")), "compressed", array())) {
            $this->displayBlock("compressed_root", $context, $blocks);
        } else {
            $this->displayBlock("root", $context, $blocks);
        }
        
        $__internal_0ef8aed2d77bda0b8604a06477fd7b78d72814217d634e98dda7b36dc2bce428->leave($__internal_0ef8aed2d77bda0b8604a06477fd7b78d72814217d634e98dda7b36dc2bce428_prof);

        
        $__internal_71c661d56718f6fbe1e0ef25325c447dd5e7cdb8118059f0eef1c5b57bc2016f->leave($__internal_71c661d56718f6fbe1e0ef25325c447dd5e7cdb8118059f0eef1c5b57bc2016f_prof);

    }

    public function getTemplateName()
    {
        return "knp_menu_base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if options.compressed %}{{ block('compressed_root') }}{% else %}{{ block('root') }}{% endif %}
", "knp_menu_base.html.twig", "/var/www/b2.2017/Blog/vendor/knplabs/knp-menu/src/Knp/Menu/Resources/views/knp_menu_base.html.twig");
    }
}
