<?php

/* SonataAdminBundle::standard_layout.html.twig */
class __TwigTemplate_9f6f0f84bfc67fe53632a84e1de3d42ee9f770538a3851b2db39ff3bfbe667f6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'html_attributes' => array($this, 'block_html_attributes'),
            'meta_tags' => array($this, 'block_meta_tags'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascripts' => array($this, 'block_javascripts'),
            'sonata_javascript_config' => array($this, 'block_sonata_javascript_config'),
            'sonata_javascript_pool' => array($this, 'block_sonata_javascript_pool'),
            'sonata_head_title' => array($this, 'block_sonata_head_title'),
            'body_attributes' => array($this, 'block_body_attributes'),
            'sonata_header' => array($this, 'block_sonata_header'),
            'sonata_header_noscript_warning' => array($this, 'block_sonata_header_noscript_warning'),
            'logo' => array($this, 'block_logo'),
            'sonata_nav' => array($this, 'block_sonata_nav'),
            'sonata_breadcrumb' => array($this, 'block_sonata_breadcrumb'),
            'sonata_top_nav_menu' => array($this, 'block_sonata_top_nav_menu'),
            'sonata_top_nav_menu_add_block' => array($this, 'block_sonata_top_nav_menu_add_block'),
            'sonata_top_nav_menu_user_block' => array($this, 'block_sonata_top_nav_menu_user_block'),
            'sonata_wrapper' => array($this, 'block_sonata_wrapper'),
            'sonata_left_side' => array($this, 'block_sonata_left_side'),
            'sonata_side_nav' => array($this, 'block_sonata_side_nav'),
            'sonata_sidebar_search' => array($this, 'block_sonata_sidebar_search'),
            'side_bar_before_nav' => array($this, 'block_side_bar_before_nav'),
            'side_bar_nav' => array($this, 'block_side_bar_nav'),
            'side_bar_after_nav' => array($this, 'block_side_bar_after_nav'),
            'side_bar_after_nav_content' => array($this, 'block_side_bar_after_nav_content'),
            'sonata_page_content' => array($this, 'block_sonata_page_content'),
            'sonata_page_content_header' => array($this, 'block_sonata_page_content_header'),
            'sonata_page_content_nav' => array($this, 'block_sonata_page_content_nav'),
            'tab_menu_navbar_header' => array($this, 'block_tab_menu_navbar_header'),
            'sonata_admin_content_actions_wrappers' => array($this, 'block_sonata_admin_content_actions_wrappers'),
            'sonata_admin_content' => array($this, 'block_sonata_admin_content'),
            'notice' => array($this, 'block_notice'),
            'bootlint' => array($this, 'block_bootlint'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_db58570cb30a92f3bc2780edd784dab5e3082f8b69a1558c5ea94b6705da398a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_db58570cb30a92f3bc2780edd784dab5e3082f8b69a1558c5ea94b6705da398a->enter($__internal_db58570cb30a92f3bc2780edd784dab5e3082f8b69a1558c5ea94b6705da398a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle::standard_layout.html.twig"));

        $__internal_8c993cb82b56e6a0af49127548e6b5774b98ee2621dd2c6dd44f6ed750d8a1ca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8c993cb82b56e6a0af49127548e6b5774b98ee2621dd2c6dd44f6ed750d8a1ca->enter($__internal_8c993cb82b56e6a0af49127548e6b5774b98ee2621dd2c6dd44f6ed750d8a1ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle::standard_layout.html.twig"));

        // line 11
        echo "
";
        // line 12
        $context["_preview"] = ((        $this->hasBlock("preview", $context, $blocks)) ? (twig_trim_filter(        $this->renderBlock("preview", $context, $blocks))) : (null));
        // line 13
        $context["_form"] = ((        $this->hasBlock("form", $context, $blocks)) ? (twig_trim_filter(        $this->renderBlock("form", $context, $blocks))) : (null));
        // line 14
        $context["_show"] = ((        $this->hasBlock("show", $context, $blocks)) ? (twig_trim_filter(        $this->renderBlock("show", $context, $blocks))) : (null));
        // line 15
        $context["_list_table"] = ((        $this->hasBlock("list_table", $context, $blocks)) ? (twig_trim_filter(        $this->renderBlock("list_table", $context, $blocks))) : (null));
        // line 16
        $context["_list_filters"] = ((        $this->hasBlock("list_filters", $context, $blocks)) ? (twig_trim_filter(        $this->renderBlock("list_filters", $context, $blocks))) : (null));
        // line 17
        $context["_tab_menu"] = ((        $this->hasBlock("tab_menu", $context, $blocks)) ? (twig_trim_filter(        $this->renderBlock("tab_menu", $context, $blocks))) : (null));
        // line 18
        $context["_content"] = ((        $this->hasBlock("content", $context, $blocks)) ? (twig_trim_filter(        $this->renderBlock("content", $context, $blocks))) : (null));
        // line 19
        $context["_title"] = ((        $this->hasBlock("title", $context, $blocks)) ? (twig_trim_filter(        $this->renderBlock("title", $context, $blocks))) : (null));
        // line 20
        $context["_breadcrumb"] = ((        $this->hasBlock("breadcrumb", $context, $blocks)) ? (twig_trim_filter(        $this->renderBlock("breadcrumb", $context, $blocks))) : (null));
        // line 21
        $context["_actions"] = ((        $this->hasBlock("actions", $context, $blocks)) ? (twig_trim_filter(        $this->renderBlock("actions", $context, $blocks))) : (null));
        // line 22
        $context["_navbar_title"] = ((        $this->hasBlock("navbar_title", $context, $blocks)) ? (twig_trim_filter(        $this->renderBlock("navbar_title", $context, $blocks))) : (null));
        // line 23
        $context["_list_filters_actions"] = ((        $this->hasBlock("list_filters_actions", $context, $blocks)) ? (twig_trim_filter(        $this->renderBlock("list_filters_actions", $context, $blocks))) : (null));
        // line 24
        echo "
<!DOCTYPE html>
<html ";
        // line 26
        $this->displayBlock('html_attributes', $context, $blocks);
        echo ">
    <head>
        ";
        // line 28
        $this->displayBlock('meta_tags', $context, $blocks);
        // line 33
        echo "
        ";
        // line 34
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 39
        echo "
        ";
        // line 40
        $this->displayBlock('javascripts', $context, $blocks);
        // line 88
        echo "
        <title>
        ";
        // line 90
        $this->displayBlock('sonata_head_title', $context, $blocks);
        // line 116
        echo "        </title>
    </head>
    <body ";
        // line 118
        $this->displayBlock('body_attributes', $context, $blocks);
        echo ">

    <div class=\"wrapper\">

        ";
        // line 122
        $this->displayBlock('sonata_header', $context, $blocks);
        // line 221
        echo "
        ";
        // line 222
        $this->displayBlock('sonata_wrapper', $context, $blocks);
        // line 355
        echo "    </div>

    ";
        // line 357
        if ($this->getAttribute($this->getAttribute(($context["sonata_admin"] ?? $this->getContext($context, "sonata_admin")), "adminPool", array()), "getOption", array(0 => "use_bootlint"), "method")) {
            // line 358
            echo "        ";
            $this->displayBlock('bootlint', $context, $blocks);
            // line 364
            echo "    ";
        }
        // line 365
        echo "
    </body>
</html>
";
        
        $__internal_db58570cb30a92f3bc2780edd784dab5e3082f8b69a1558c5ea94b6705da398a->leave($__internal_db58570cb30a92f3bc2780edd784dab5e3082f8b69a1558c5ea94b6705da398a_prof);

        
        $__internal_8c993cb82b56e6a0af49127548e6b5774b98ee2621dd2c6dd44f6ed750d8a1ca->leave($__internal_8c993cb82b56e6a0af49127548e6b5774b98ee2621dd2c6dd44f6ed750d8a1ca_prof);

    }

    // line 26
    public function block_html_attributes($context, array $blocks = array())
    {
        $__internal_8802177b38e9250d20b8f0f1db1583e46b14cb628bf2a93e3dc8b3061c3a4009 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8802177b38e9250d20b8f0f1db1583e46b14cb628bf2a93e3dc8b3061c3a4009->enter($__internal_8802177b38e9250d20b8f0f1db1583e46b14cb628bf2a93e3dc8b3061c3a4009_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "html_attributes"));

        $__internal_d200751409aeb431b711026f6dcfebec83265203fafb5e522ecdb00ad49f0da6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d200751409aeb431b711026f6dcfebec83265203fafb5e522ecdb00ad49f0da6->enter($__internal_d200751409aeb431b711026f6dcfebec83265203fafb5e522ecdb00ad49f0da6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "html_attributes"));

        echo "class=\"no-js\"";
        
        $__internal_d200751409aeb431b711026f6dcfebec83265203fafb5e522ecdb00ad49f0da6->leave($__internal_d200751409aeb431b711026f6dcfebec83265203fafb5e522ecdb00ad49f0da6_prof);

        
        $__internal_8802177b38e9250d20b8f0f1db1583e46b14cb628bf2a93e3dc8b3061c3a4009->leave($__internal_8802177b38e9250d20b8f0f1db1583e46b14cb628bf2a93e3dc8b3061c3a4009_prof);

    }

    // line 28
    public function block_meta_tags($context, array $blocks = array())
    {
        $__internal_a12baea0c3866e05e5d85108f3aea4877ce5c5e389e75679fce8503a80292413 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a12baea0c3866e05e5d85108f3aea4877ce5c5e389e75679fce8503a80292413->enter($__internal_a12baea0c3866e05e5d85108f3aea4877ce5c5e389e75679fce8503a80292413_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "meta_tags"));

        $__internal_c60d9e9363bae537a94bb74b084ca80405b3e2b1389ac31b6e4cc84debf5932d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c60d9e9363bae537a94bb74b084ca80405b3e2b1389ac31b6e4cc84debf5932d->enter($__internal_c60d9e9363bae537a94bb74b084ca80405b3e2b1389ac31b6e4cc84debf5932d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "meta_tags"));

        // line 29
        echo "            <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
            <meta charset=\"UTF-8\">
            <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
        ";
        
        $__internal_c60d9e9363bae537a94bb74b084ca80405b3e2b1389ac31b6e4cc84debf5932d->leave($__internal_c60d9e9363bae537a94bb74b084ca80405b3e2b1389ac31b6e4cc84debf5932d_prof);

        
        $__internal_a12baea0c3866e05e5d85108f3aea4877ce5c5e389e75679fce8503a80292413->leave($__internal_a12baea0c3866e05e5d85108f3aea4877ce5c5e389e75679fce8503a80292413_prof);

    }

    // line 34
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_165c6828d41f394a854cded0015ad9f5b85ed0478af5f5387494cb25b88e3f8a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_165c6828d41f394a854cded0015ad9f5b85ed0478af5f5387494cb25b88e3f8a->enter($__internal_165c6828d41f394a854cded0015ad9f5b85ed0478af5f5387494cb25b88e3f8a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_f34d0d254b4c2a108fad79c9016b223ae8de6d55f27e30bf3c7d93c132e690ac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f34d0d254b4c2a108fad79c9016b223ae8de6d55f27e30bf3c7d93c132e690ac->enter($__internal_f34d0d254b4c2a108fad79c9016b223ae8de6d55f27e30bf3c7d93c132e690ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 35
        echo "            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["sonata_admin"] ?? $this->getContext($context, "sonata_admin")), "adminPool", array()), "getOption", array(0 => "stylesheets", 1 => array()), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["stylesheet"]) {
            // line 36
            echo "                <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl($context["stylesheet"]), "html", null, true);
            echo "\">
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['stylesheet'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 38
        echo "        ";
        
        $__internal_f34d0d254b4c2a108fad79c9016b223ae8de6d55f27e30bf3c7d93c132e690ac->leave($__internal_f34d0d254b4c2a108fad79c9016b223ae8de6d55f27e30bf3c7d93c132e690ac_prof);

        
        $__internal_165c6828d41f394a854cded0015ad9f5b85ed0478af5f5387494cb25b88e3f8a->leave($__internal_165c6828d41f394a854cded0015ad9f5b85ed0478af5f5387494cb25b88e3f8a_prof);

    }

    // line 40
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_4d127966cb9bc7e7f855bbbdb050690aa9ddabb87195dabe30aa6cc6e706a736 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4d127966cb9bc7e7f855bbbdb050690aa9ddabb87195dabe30aa6cc6e706a736->enter($__internal_4d127966cb9bc7e7f855bbbdb050690aa9ddabb87195dabe30aa6cc6e706a736_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_134bf4da1d7825dccc3ecc7c619bbf1ca83466f0cbc435daf24161d3126ec021 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_134bf4da1d7825dccc3ecc7c619bbf1ca83466f0cbc435daf24161d3126ec021->enter($__internal_134bf4da1d7825dccc3ecc7c619bbf1ca83466f0cbc435daf24161d3126ec021_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 41
        echo "            ";
        $this->displayBlock('sonata_javascript_config', $context, $blocks);
        // line 61
        echo "
            ";
        // line 62
        $this->displayBlock('sonata_javascript_pool', $context, $blocks);
        // line 67
        echo "
            ";
        // line 68
        $context["locale"] = $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "locale", array());
        // line 69
        echo "            ";
        // line 70
        echo "            ";
        if ((twig_slice($this->env, ($context["locale"] ?? $this->getContext($context, "locale")), 0, 2) != "en")) {
            // line 71
            echo "                <script src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl((("bundles/sonatacore/vendor/moment/locale/" . twig_replace_filter(twig_lower_filter($this->env,             // line 73
($context["locale"] ?? $this->getContext($context, "locale"))), array("_" => "-"))) . ".js")), "html", null, true);
            // line 75
            echo "\"></script>
            ";
        }
        // line 77
        echo "
            ";
        // line 79
        echo "            ";
        if ($this->getAttribute($this->getAttribute(($context["sonata_admin"] ?? $this->getContext($context, "sonata_admin")), "adminPool", array()), "getOption", array(0 => "use_select2"), "method")) {
            // line 80
            echo "                ";
            if ((($context["locale"] ?? $this->getContext($context, "locale")) == "pt")) {
                $context["locale"] = "pt_PT";
            }
            // line 81
            echo "
                ";
            // line 83
            echo "                ";
            if ((twig_slice($this->env, ($context["locale"] ?? $this->getContext($context, "locale")), 0, 2) != "en")) {
                // line 84
                echo "                    <script src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl((("bundles/sonatacore/vendor/select2/select2_locale_" . twig_replace_filter(($context["locale"] ?? $this->getContext($context, "locale")), array("_" => "-"))) . ".js")), "html", null, true);
                echo "\"></script>
                ";
            }
            // line 86
            echo "            ";
        }
        // line 87
        echo "        ";
        
        $__internal_134bf4da1d7825dccc3ecc7c619bbf1ca83466f0cbc435daf24161d3126ec021->leave($__internal_134bf4da1d7825dccc3ecc7c619bbf1ca83466f0cbc435daf24161d3126ec021_prof);

        
        $__internal_4d127966cb9bc7e7f855bbbdb050690aa9ddabb87195dabe30aa6cc6e706a736->leave($__internal_4d127966cb9bc7e7f855bbbdb050690aa9ddabb87195dabe30aa6cc6e706a736_prof);

    }

    // line 41
    public function block_sonata_javascript_config($context, array $blocks = array())
    {
        $__internal_ecad9e0df160613e105595fc374a3a8f5cf2d1d312ba8f05e07441b9963ecbd1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ecad9e0df160613e105595fc374a3a8f5cf2d1d312ba8f05e07441b9963ecbd1->enter($__internal_ecad9e0df160613e105595fc374a3a8f5cf2d1d312ba8f05e07441b9963ecbd1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_javascript_config"));

        $__internal_cea182a10f594a5753dc4c77d93a6d82a84cbd858d707568270e08af62128329 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cea182a10f594a5753dc4c77d93a6d82a84cbd858d707568270e08af62128329->enter($__internal_cea182a10f594a5753dc4c77d93a6d82a84cbd858d707568270e08af62128329_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_javascript_config"));

        // line 42
        echo "                <script>
                    window.SONATA_CONFIG = {
                        CONFIRM_EXIT: ";
        // line 44
        if ($this->getAttribute($this->getAttribute(($context["sonata_admin"] ?? $this->getContext($context, "sonata_admin")), "adminPool", array()), "getOption", array(0 => "confirm_exit"), "method")) {
            echo "true";
        } else {
            echo "false";
        }
        echo ",
                        USE_SELECT2: ";
        // line 45
        if ($this->getAttribute($this->getAttribute(($context["sonata_admin"] ?? $this->getContext($context, "sonata_admin")), "adminPool", array()), "getOption", array(0 => "use_select2"), "method")) {
            echo "true";
        } else {
            echo "false";
        }
        echo ",
                        USE_ICHECK: ";
        // line 46
        if ($this->getAttribute($this->getAttribute(($context["sonata_admin"] ?? $this->getContext($context, "sonata_admin")), "adminPool", array()), "getOption", array(0 => "use_icheck"), "method")) {
            echo "true";
        } else {
            echo "false";
        }
        echo ",
                        USE_STICKYFORMS: ";
        // line 47
        if ($this->getAttribute($this->getAttribute(($context["sonata_admin"] ?? $this->getContext($context, "sonata_admin")), "adminPool", array()), "getOption", array(0 => "use_stickyforms"), "method")) {
            echo "true";
        } else {
            echo "false";
        }
        // line 48
        echo "                    };
                    window.SONATA_TRANSLATIONS = {
                        CONFIRM_EXIT: '";
        // line 50
        echo twig_escape_filter($this->env, twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("confirm_exit", array(), "SonataAdminBundle"), "js"), "html", null, true);
        echo "'
                    };

                    // http://getbootstrap.com/getting-started/#support-ie10-width
                    if (navigator.userAgent.match(/IEMobile\\/10\\.0/)) {
                        var msViewportStyle = document.createElement('style');
                        msViewportStyle.appendChild(document.createTextNode('@-ms-viewport{width:auto!important}'));
                        document.querySelector('head').appendChild(msViewportStyle);
                    }
                </script>
            ";
        
        $__internal_cea182a10f594a5753dc4c77d93a6d82a84cbd858d707568270e08af62128329->leave($__internal_cea182a10f594a5753dc4c77d93a6d82a84cbd858d707568270e08af62128329_prof);

        
        $__internal_ecad9e0df160613e105595fc374a3a8f5cf2d1d312ba8f05e07441b9963ecbd1->leave($__internal_ecad9e0df160613e105595fc374a3a8f5cf2d1d312ba8f05e07441b9963ecbd1_prof);

    }

    // line 62
    public function block_sonata_javascript_pool($context, array $blocks = array())
    {
        $__internal_724f929e0a3872f84284aed39fe60226cbfe651281e62aead1740c6519b92bba = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_724f929e0a3872f84284aed39fe60226cbfe651281e62aead1740c6519b92bba->enter($__internal_724f929e0a3872f84284aed39fe60226cbfe651281e62aead1740c6519b92bba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_javascript_pool"));

        $__internal_43203c3811a1f468ab518ee4ca57d77fdb4f27d58f0cf542dd9d5c42081a8e5f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_43203c3811a1f468ab518ee4ca57d77fdb4f27d58f0cf542dd9d5c42081a8e5f->enter($__internal_43203c3811a1f468ab518ee4ca57d77fdb4f27d58f0cf542dd9d5c42081a8e5f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_javascript_pool"));

        // line 63
        echo "                ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["sonata_admin"] ?? $this->getContext($context, "sonata_admin")), "adminPool", array()), "getOption", array(0 => "javascripts", 1 => array()), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["javascript"]) {
            // line 64
            echo "                    <script src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl($context["javascript"]), "html", null, true);
            echo "\"></script>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['javascript'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 66
        echo "            ";
        
        $__internal_43203c3811a1f468ab518ee4ca57d77fdb4f27d58f0cf542dd9d5c42081a8e5f->leave($__internal_43203c3811a1f468ab518ee4ca57d77fdb4f27d58f0cf542dd9d5c42081a8e5f_prof);

        
        $__internal_724f929e0a3872f84284aed39fe60226cbfe651281e62aead1740c6519b92bba->leave($__internal_724f929e0a3872f84284aed39fe60226cbfe651281e62aead1740c6519b92bba_prof);

    }

    // line 90
    public function block_sonata_head_title($context, array $blocks = array())
    {
        $__internal_cb80bc0611b3c57be01db5fc03b36af1c3a944ed22641ac0ec4e0e4acef56c24 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cb80bc0611b3c57be01db5fc03b36af1c3a944ed22641ac0ec4e0e4acef56c24->enter($__internal_cb80bc0611b3c57be01db5fc03b36af1c3a944ed22641ac0ec4e0e4acef56c24_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_head_title"));

        $__internal_38b61b0e1a152def28d69e122d32b18a153cfb8c0a40ac8feed9e98f74dcbda8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_38b61b0e1a152def28d69e122d32b18a153cfb8c0a40ac8feed9e98f74dcbda8->enter($__internal_38b61b0e1a152def28d69e122d32b18a153cfb8c0a40ac8feed9e98f74dcbda8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_head_title"));

        // line 91
        echo "            ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Admin", array(), "SonataAdminBundle"), "html", null, true);
        echo "

            ";
        // line 93
        if ( !twig_test_empty(($context["_title"] ?? $this->getContext($context, "_title")))) {
            // line 94
            echo "                ";
            echo strip_tags(($context["_title"] ?? $this->getContext($context, "_title")));
            echo "
            ";
        } else {
            // line 96
            echo "                ";
            if (array_key_exists("action", $context)) {
                // line 97
                echo "                    -
                    ";
                // line 98
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["breadcrumbs_builder"] ?? $this->getContext($context, "breadcrumbs_builder")), "breadcrumbs", array(0 => ($context["admin"] ?? $this->getContext($context, "admin")), 1 => ($context["action"] ?? $this->getContext($context, "action"))), "method"));
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
                foreach ($context['_seq'] as $context["_key"] => $context["menu"]) {
                    // line 99
                    echo "                        ";
                    if ( !$this->getAttribute($context["loop"], "first", array())) {
                        // line 100
                        echo "                            ";
                        if (($this->getAttribute($context["loop"], "index", array()) != 2)) {
                            // line 101
                            echo "                                &gt;
                            ";
                        }
                        // line 104
                        $context["translation_domain"] = $this->getAttribute($context["menu"], "extra", array(0 => "translation_domain", 1 => "messages"), "method");
                        // line 105
                        $context["label"] = $this->getAttribute($context["menu"], "label", array());
                        // line 106
                        if ( !(($context["translation_domain"] ?? $this->getContext($context, "translation_domain")) === false)) {
                            // line 107
                            $context["label"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(($context["label"] ?? $this->getContext($context, "label")), $this->getAttribute($context["menu"], "extra", array(0 => "translation_params", 1 => array()), "method"), ($context["translation_domain"] ?? $this->getContext($context, "translation_domain")));
                        }
                        // line 110
                        echo twig_escape_filter($this->env, ($context["label"] ?? $this->getContext($context, "label")), "html", null, true);
                        echo "
                        ";
                    }
                    // line 112
                    echo "                    ";
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
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['menu'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 113
                echo "                ";
            }
            // line 114
            echo "            ";
        }
        // line 115
        echo "        ";
        
        $__internal_38b61b0e1a152def28d69e122d32b18a153cfb8c0a40ac8feed9e98f74dcbda8->leave($__internal_38b61b0e1a152def28d69e122d32b18a153cfb8c0a40ac8feed9e98f74dcbda8_prof);

        
        $__internal_cb80bc0611b3c57be01db5fc03b36af1c3a944ed22641ac0ec4e0e4acef56c24->leave($__internal_cb80bc0611b3c57be01db5fc03b36af1c3a944ed22641ac0ec4e0e4acef56c24_prof);

    }

    // line 118
    public function block_body_attributes($context, array $blocks = array())
    {
        $__internal_2844e36a839d09bdfd166d674e31888dd4602dd52fbb5ed4f1c61963630d55bb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2844e36a839d09bdfd166d674e31888dd4602dd52fbb5ed4f1c61963630d55bb->enter($__internal_2844e36a839d09bdfd166d674e31888dd4602dd52fbb5ed4f1c61963630d55bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_attributes"));

        $__internal_a49252c5429f0f43d643042aa2fc675d70efa98b55ba96698b512e0ca978c0da = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a49252c5429f0f43d643042aa2fc675d70efa98b55ba96698b512e0ca978c0da->enter($__internal_a49252c5429f0f43d643042aa2fc675d70efa98b55ba96698b512e0ca978c0da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_attributes"));

        echo "class=\"sonata-bc skin-black fixed\"";
        
        $__internal_a49252c5429f0f43d643042aa2fc675d70efa98b55ba96698b512e0ca978c0da->leave($__internal_a49252c5429f0f43d643042aa2fc675d70efa98b55ba96698b512e0ca978c0da_prof);

        
        $__internal_2844e36a839d09bdfd166d674e31888dd4602dd52fbb5ed4f1c61963630d55bb->leave($__internal_2844e36a839d09bdfd166d674e31888dd4602dd52fbb5ed4f1c61963630d55bb_prof);

    }

    // line 122
    public function block_sonata_header($context, array $blocks = array())
    {
        $__internal_a9094c79c6347be8cd8a3c78a0c87893af22a3ed4fba2c23ec6f3535beb6baa5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a9094c79c6347be8cd8a3c78a0c87893af22a3ed4fba2c23ec6f3535beb6baa5->enter($__internal_a9094c79c6347be8cd8a3c78a0c87893af22a3ed4fba2c23ec6f3535beb6baa5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_header"));

        $__internal_c4b09ed657ac907d25d0c0ed8ba299c652b884b75ccde8984262da467c474b33 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c4b09ed657ac907d25d0c0ed8ba299c652b884b75ccde8984262da467c474b33->enter($__internal_c4b09ed657ac907d25d0c0ed8ba299c652b884b75ccde8984262da467c474b33_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_header"));

        // line 123
        echo "            <header class=\"main-header\">
                ";
        // line 124
        $this->displayBlock('sonata_header_noscript_warning', $context, $blocks);
        // line 131
        echo "                ";
        $this->displayBlock('logo', $context, $blocks);
        // line 143
        echo "                ";
        $this->displayBlock('sonata_nav', $context, $blocks);
        // line 219
        echo "            </header>
        ";
        
        $__internal_c4b09ed657ac907d25d0c0ed8ba299c652b884b75ccde8984262da467c474b33->leave($__internal_c4b09ed657ac907d25d0c0ed8ba299c652b884b75ccde8984262da467c474b33_prof);

        
        $__internal_a9094c79c6347be8cd8a3c78a0c87893af22a3ed4fba2c23ec6f3535beb6baa5->leave($__internal_a9094c79c6347be8cd8a3c78a0c87893af22a3ed4fba2c23ec6f3535beb6baa5_prof);

    }

    // line 124
    public function block_sonata_header_noscript_warning($context, array $blocks = array())
    {
        $__internal_4782e45d81c58354d658a9b822e4e7690d6fbff5ed30a862d6318df08878f2d2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4782e45d81c58354d658a9b822e4e7690d6fbff5ed30a862d6318df08878f2d2->enter($__internal_4782e45d81c58354d658a9b822e4e7690d6fbff5ed30a862d6318df08878f2d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_header_noscript_warning"));

        $__internal_4a4381969c07a93210971b059fc4c7630d5c502898b5b7c49ed8daf091d140e8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4a4381969c07a93210971b059fc4c7630d5c502898b5b7c49ed8daf091d140e8->enter($__internal_4a4381969c07a93210971b059fc4c7630d5c502898b5b7c49ed8daf091d140e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_header_noscript_warning"));

        // line 125
        echo "                    <noscript>
                        <div class=\"noscript-warning\">
                            ";
        // line 127
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("noscript_warning", array(), "SonataAdminBundle"), "html", null, true);
        echo "
                        </div>
                    </noscript>
                ";
        
        $__internal_4a4381969c07a93210971b059fc4c7630d5c502898b5b7c49ed8daf091d140e8->leave($__internal_4a4381969c07a93210971b059fc4c7630d5c502898b5b7c49ed8daf091d140e8_prof);

        
        $__internal_4782e45d81c58354d658a9b822e4e7690d6fbff5ed30a862d6318df08878f2d2->leave($__internal_4782e45d81c58354d658a9b822e4e7690d6fbff5ed30a862d6318df08878f2d2_prof);

    }

    // line 131
    public function block_logo($context, array $blocks = array())
    {
        $__internal_bb45a8c4390480af5b1cb2369801d30645ceec1d2761b1b4a8e2da8577b95887 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bb45a8c4390480af5b1cb2369801d30645ceec1d2761b1b4a8e2da8577b95887->enter($__internal_bb45a8c4390480af5b1cb2369801d30645ceec1d2761b1b4a8e2da8577b95887_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "logo"));

        $__internal_620443cadcecb8dd6dcbb88a6e27dbaa805641bb693e12038d209b6df4c1a3e9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_620443cadcecb8dd6dcbb88a6e27dbaa805641bb693e12038d209b6df4c1a3e9->enter($__internal_620443cadcecb8dd6dcbb88a6e27dbaa805641bb693e12038d209b6df4c1a3e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "logo"));

        // line 132
        echo "                    ";
        ob_start();
        // line 133
        echo "                        <a class=\"logo\" href=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sonata_admin_dashboard");
        echo "\">
                            ";
        // line 134
        if ((("single_image" == $this->getAttribute($this->getAttribute(($context["sonata_admin"] ?? $this->getContext($context, "sonata_admin")), "adminPool", array()), "getOption", array(0 => "title_mode"), "method")) || ("both" == $this->getAttribute($this->getAttribute(($context["sonata_admin"] ?? $this->getContext($context, "sonata_admin")), "adminPool", array()), "getOption", array(0 => "title_mode"), "method")))) {
            // line 135
            echo "                                <img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl($this->getAttribute($this->getAttribute(($context["sonata_admin"] ?? $this->getContext($context, "sonata_admin")), "adminPool", array()), "titlelogo", array())), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["sonata_admin"] ?? $this->getContext($context, "sonata_admin")), "adminPool", array()), "title", array()), "html", null, true);
            echo "\">
                            ";
        }
        // line 137
        echo "                            ";
        if ((("single_text" == $this->getAttribute($this->getAttribute(($context["sonata_admin"] ?? $this->getContext($context, "sonata_admin")), "adminPool", array()), "getOption", array(0 => "title_mode"), "method")) || ("both" == $this->getAttribute($this->getAttribute(($context["sonata_admin"] ?? $this->getContext($context, "sonata_admin")), "adminPool", array()), "getOption", array(0 => "title_mode"), "method")))) {
            // line 138
            echo "                                <span>";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["sonata_admin"] ?? $this->getContext($context, "sonata_admin")), "adminPool", array()), "title", array()), "html", null, true);
            echo "</span>
                            ";
        }
        // line 140
        echo "                        </a>
                    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        // line 142
        echo "                ";
        
        $__internal_620443cadcecb8dd6dcbb88a6e27dbaa805641bb693e12038d209b6df4c1a3e9->leave($__internal_620443cadcecb8dd6dcbb88a6e27dbaa805641bb693e12038d209b6df4c1a3e9_prof);

        
        $__internal_bb45a8c4390480af5b1cb2369801d30645ceec1d2761b1b4a8e2da8577b95887->leave($__internal_bb45a8c4390480af5b1cb2369801d30645ceec1d2761b1b4a8e2da8577b95887_prof);

    }

    // line 143
    public function block_sonata_nav($context, array $blocks = array())
    {
        $__internal_0795d041bf84b7c84ea8d34d02d1d0bc1fad395e4178e11fd27f866ecc1c6d40 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0795d041bf84b7c84ea8d34d02d1d0bc1fad395e4178e11fd27f866ecc1c6d40->enter($__internal_0795d041bf84b7c84ea8d34d02d1d0bc1fad395e4178e11fd27f866ecc1c6d40_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_nav"));

        $__internal_176bfb664fecda3edf5049da52b5815ca1593189a968fe77f9d27dd1dd4c59a4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_176bfb664fecda3edf5049da52b5815ca1593189a968fe77f9d27dd1dd4c59a4->enter($__internal_176bfb664fecda3edf5049da52b5815ca1593189a968fe77f9d27dd1dd4c59a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_nav"));

        // line 144
        echo "                    <nav class=\"navbar navbar-static-top\" role=\"navigation\">
                        <a href=\"#\" class=\"sidebar-toggle\" data-toggle=\"offcanvas\" role=\"button\">
                            <span class=\"sr-only\">Toggle navigation</span>
                        </a>

                        <div class=\"navbar-left\">
                            ";
        // line 150
        $this->displayBlock('sonata_breadcrumb', $context, $blocks);
        // line 189
        echo "                        </div>

                        ";
        // line 191
        $this->displayBlock('sonata_top_nav_menu', $context, $blocks);
        // line 217
        echo "                    </nav>
                ";
        
        $__internal_176bfb664fecda3edf5049da52b5815ca1593189a968fe77f9d27dd1dd4c59a4->leave($__internal_176bfb664fecda3edf5049da52b5815ca1593189a968fe77f9d27dd1dd4c59a4_prof);

        
        $__internal_0795d041bf84b7c84ea8d34d02d1d0bc1fad395e4178e11fd27f866ecc1c6d40->leave($__internal_0795d041bf84b7c84ea8d34d02d1d0bc1fad395e4178e11fd27f866ecc1c6d40_prof);

    }

    // line 150
    public function block_sonata_breadcrumb($context, array $blocks = array())
    {
        $__internal_fe8ab8755c9f80bd1a16851fe1a5264d5aeff9e272530a36a0c3dce9af2c0638 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fe8ab8755c9f80bd1a16851fe1a5264d5aeff9e272530a36a0c3dce9af2c0638->enter($__internal_fe8ab8755c9f80bd1a16851fe1a5264d5aeff9e272530a36a0c3dce9af2c0638_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_breadcrumb"));

        $__internal_8b7208c0c096c3907cf046f7c561fa369d048861d23ff5c799e8d37285a7f7af = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8b7208c0c096c3907cf046f7c561fa369d048861d23ff5c799e8d37285a7f7af->enter($__internal_8b7208c0c096c3907cf046f7c561fa369d048861d23ff5c799e8d37285a7f7af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_breadcrumb"));

        // line 151
        echo "                                <div class=\"hidden-xs\">
                                    ";
        // line 152
        if (( !twig_test_empty(($context["_breadcrumb"] ?? $this->getContext($context, "_breadcrumb"))) || array_key_exists("action", $context))) {
            // line 153
            echo "                                        <ol class=\"nav navbar-top-links breadcrumb\">
                                            ";
            // line 154
            if (twig_test_empty(($context["_breadcrumb"] ?? $this->getContext($context, "_breadcrumb")))) {
                // line 155
                echo "                                                ";
                if (array_key_exists("action", $context)) {
                    // line 156
                    echo "                                                    ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["breadcrumbs_builder"] ?? $this->getContext($context, "breadcrumbs_builder")), "breadcrumbs", array(0 => ($context["admin"] ?? $this->getContext($context, "admin")), 1 => ($context["action"] ?? $this->getContext($context, "action"))), "method"));
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
                    foreach ($context['_seq'] as $context["_key"] => $context["menu"]) {
                        // line 157
                        $context["translation_domain"] = $this->getAttribute($context["menu"], "extra", array(0 => "translation_domain", 1 => "messages"), "method");
                        // line 158
                        $context["label"] = $this->getAttribute($context["menu"], "label", array());
                        // line 159
                        if ( !(($context["translation_domain"] ?? $this->getContext($context, "translation_domain")) === false)) {
                            // line 160
                            $context["label"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(($context["label"] ?? $this->getContext($context, "label")), $this->getAttribute($context["menu"], "extra", array(0 => "translation_params", 1 => array()), "method"), ($context["translation_domain"] ?? $this->getContext($context, "translation_domain")));
                        }
                        // line 163
                        if ( !$this->getAttribute($context["loop"], "last", array())) {
                            // line 164
                            echo "                                                            <li>
                                                                ";
                            // line 165
                            if ( !twig_test_empty($this->getAttribute($context["menu"], "uri", array()))) {
                                // line 166
                                echo "                                                                    <a href=\"";
                                echo twig_escape_filter($this->env, $this->getAttribute($context["menu"], "uri", array()), "html", null, true);
                                echo "\">
                                                                        ";
                                // line 167
                                if ($this->getAttribute($context["menu"], "extra", array(0 => "safe_label", 1 => true), "method")) {
                                    // line 168
                                    echo ($context["label"] ?? $this->getContext($context, "label"));
                                } else {
                                    // line 170
                                    echo twig_escape_filter($this->env, ($context["label"] ?? $this->getContext($context, "label")), "html", null, true);
                                }
                                // line 172
                                echo "                                                                    </a>
                                                                ";
                            } else {
                                // line 174
                                echo "                                                                    <span>";
                                echo twig_escape_filter($this->env, ($context["label"] ?? $this->getContext($context, "label")), "html", null, true);
                                echo "</span>
                                                                ";
                            }
                            // line 176
                            echo "                                                            </li>
                                                        ";
                        } else {
                            // line 178
                            echo "                                                            <li class=\"active\"><span>";
                            echo twig_escape_filter($this->env, ($context["label"] ?? $this->getContext($context, "label")), "html", null, true);
                            echo "</span></li>
                                                        ";
                        }
                        // line 180
                        echo "                                                    ";
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
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['menu'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 181
                    echo "                                                ";
                }
                // line 182
                echo "                                            ";
            } else {
                // line 183
                echo "                                                ";
                echo ($context["_breadcrumb"] ?? $this->getContext($context, "_breadcrumb"));
                echo "
                                            ";
            }
            // line 185
            echo "                                        </ol>
                                    ";
        }
        // line 187
        echo "                                </div>
                            ";
        
        $__internal_8b7208c0c096c3907cf046f7c561fa369d048861d23ff5c799e8d37285a7f7af->leave($__internal_8b7208c0c096c3907cf046f7c561fa369d048861d23ff5c799e8d37285a7f7af_prof);

        
        $__internal_fe8ab8755c9f80bd1a16851fe1a5264d5aeff9e272530a36a0c3dce9af2c0638->leave($__internal_fe8ab8755c9f80bd1a16851fe1a5264d5aeff9e272530a36a0c3dce9af2c0638_prof);

    }

    // line 191
    public function block_sonata_top_nav_menu($context, array $blocks = array())
    {
        $__internal_0e71d5fdb6550e39a8e055afd64775955198b744070dec61f9b201518ba9faee = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0e71d5fdb6550e39a8e055afd64775955198b744070dec61f9b201518ba9faee->enter($__internal_0e71d5fdb6550e39a8e055afd64775955198b744070dec61f9b201518ba9faee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_top_nav_menu"));

        $__internal_2ceb98ed960fa3f7462e3bae2be20760e49c19b80ded06242eb3ca8cdca1341c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2ceb98ed960fa3f7462e3bae2be20760e49c19b80ded06242eb3ca8cdca1341c->enter($__internal_2ceb98ed960fa3f7462e3bae2be20760e49c19b80ded06242eb3ca8cdca1341c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_top_nav_menu"));

        // line 192
        echo "                            ";
        if (($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()) && $this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_SONATA_ADMIN"))) {
            // line 193
            echo "                                <div class=\"navbar-custom-menu\">
                                    <ul class=\"nav navbar-nav\">
                                        ";
            // line 195
            $this->displayBlock('sonata_top_nav_menu_add_block', $context, $blocks);
            // line 203
            echo "                                        ";
            $this->displayBlock('sonata_top_nav_menu_user_block', $context, $blocks);
            // line 213
            echo "                                    </ul>
                                </div>
                            ";
        }
        // line 216
        echo "                        ";
        
        $__internal_2ceb98ed960fa3f7462e3bae2be20760e49c19b80ded06242eb3ca8cdca1341c->leave($__internal_2ceb98ed960fa3f7462e3bae2be20760e49c19b80ded06242eb3ca8cdca1341c_prof);

        
        $__internal_0e71d5fdb6550e39a8e055afd64775955198b744070dec61f9b201518ba9faee->leave($__internal_0e71d5fdb6550e39a8e055afd64775955198b744070dec61f9b201518ba9faee_prof);

    }

    // line 195
    public function block_sonata_top_nav_menu_add_block($context, array $blocks = array())
    {
        $__internal_68dfab039b0ab119789a0a125bd3df59551de444f315a3038fecaafd5215c156 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_68dfab039b0ab119789a0a125bd3df59551de444f315a3038fecaafd5215c156->enter($__internal_68dfab039b0ab119789a0a125bd3df59551de444f315a3038fecaafd5215c156_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_top_nav_menu_add_block"));

        $__internal_bc98994ddd8f2834f66c0444c6b50c799fa31b8c4a08a7cedd0540aad1023532 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bc98994ddd8f2834f66c0444c6b50c799fa31b8c4a08a7cedd0540aad1023532->enter($__internal_bc98994ddd8f2834f66c0444c6b50c799fa31b8c4a08a7cedd0540aad1023532_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_top_nav_menu_add_block"));

        // line 196
        echo "                                            <li class=\"dropdown\">
                                                <a class=\"dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\">
                                                    <i class=\"fa fa-plus-square fa-fw\" aria-hidden=\"true\"></i> <i class=\"fa fa-caret-down\" aria-hidden=\"true\"></i>
                                                </a>
                                                ";
        // line 200
        $this->loadTemplate($this->getAttribute($this->getAttribute(($context["sonata_admin"] ?? $this->getContext($context, "sonata_admin")), "adminPool", array()), "getTemplate", array(0 => "add_block"), "method"), "SonataAdminBundle::standard_layout.html.twig", 200)->display($context);
        // line 201
        echo "                                            </li>
                                        ";
        
        $__internal_bc98994ddd8f2834f66c0444c6b50c799fa31b8c4a08a7cedd0540aad1023532->leave($__internal_bc98994ddd8f2834f66c0444c6b50c799fa31b8c4a08a7cedd0540aad1023532_prof);

        
        $__internal_68dfab039b0ab119789a0a125bd3df59551de444f315a3038fecaafd5215c156->leave($__internal_68dfab039b0ab119789a0a125bd3df59551de444f315a3038fecaafd5215c156_prof);

    }

    // line 203
    public function block_sonata_top_nav_menu_user_block($context, array $blocks = array())
    {
        $__internal_713ca78220dbfd160acbfc62c8e01ecac4ddde1a06344d233a6f187044b8efd6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_713ca78220dbfd160acbfc62c8e01ecac4ddde1a06344d233a6f187044b8efd6->enter($__internal_713ca78220dbfd160acbfc62c8e01ecac4ddde1a06344d233a6f187044b8efd6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_top_nav_menu_user_block"));

        $__internal_c57fb46810f7cf8a10ebc7e1cd004494e8ad795e45e102033e6da160d82016a9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c57fb46810f7cf8a10ebc7e1cd004494e8ad795e45e102033e6da160d82016a9->enter($__internal_c57fb46810f7cf8a10ebc7e1cd004494e8ad795e45e102033e6da160d82016a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_top_nav_menu_user_block"));

        // line 204
        echo "                                            <li class=\"dropdown user-menu\">
                                                <a class=\"dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\">
                                                    <i class=\"fa fa-user fa-fw\" aria-hidden=\"true\"></i> <i class=\"fa fa-caret-down\" aria-hidden=\"true\"></i>
                                                </a>
                                                <ul class=\"dropdown-menu dropdown-user\">
                                                    ";
        // line 209
        $this->loadTemplate($this->getAttribute($this->getAttribute(($context["sonata_admin"] ?? $this->getContext($context, "sonata_admin")), "adminPool", array()), "getTemplate", array(0 => "user_block"), "method"), "SonataAdminBundle::standard_layout.html.twig", 209)->display($context);
        // line 210
        echo "                                                </ul>
                                            </li>
                                        ";
        
        $__internal_c57fb46810f7cf8a10ebc7e1cd004494e8ad795e45e102033e6da160d82016a9->leave($__internal_c57fb46810f7cf8a10ebc7e1cd004494e8ad795e45e102033e6da160d82016a9_prof);

        
        $__internal_713ca78220dbfd160acbfc62c8e01ecac4ddde1a06344d233a6f187044b8efd6->leave($__internal_713ca78220dbfd160acbfc62c8e01ecac4ddde1a06344d233a6f187044b8efd6_prof);

    }

    // line 222
    public function block_sonata_wrapper($context, array $blocks = array())
    {
        $__internal_82a5ad1a81db4dbaf992c7a9f0674f88edf8c2da124bef5acaa1d30133bf01e7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_82a5ad1a81db4dbaf992c7a9f0674f88edf8c2da124bef5acaa1d30133bf01e7->enter($__internal_82a5ad1a81db4dbaf992c7a9f0674f88edf8c2da124bef5acaa1d30133bf01e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_wrapper"));

        $__internal_db5cb01721f631888934cbd80e077c4e46ec4b28c1960173364eff43352dfc03 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_db5cb01721f631888934cbd80e077c4e46ec4b28c1960173364eff43352dfc03->enter($__internal_db5cb01721f631888934cbd80e077c4e46ec4b28c1960173364eff43352dfc03_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_wrapper"));

        // line 223
        echo "            ";
        $this->displayBlock('sonata_left_side', $context, $blocks);
        // line 255
        echo "
            <div class=\"content-wrapper\">
                ";
        // line 257
        $this->displayBlock('sonata_page_content', $context, $blocks);
        // line 353
        echo "            </div>
        ";
        
        $__internal_db5cb01721f631888934cbd80e077c4e46ec4b28c1960173364eff43352dfc03->leave($__internal_db5cb01721f631888934cbd80e077c4e46ec4b28c1960173364eff43352dfc03_prof);

        
        $__internal_82a5ad1a81db4dbaf992c7a9f0674f88edf8c2da124bef5acaa1d30133bf01e7->leave($__internal_82a5ad1a81db4dbaf992c7a9f0674f88edf8c2da124bef5acaa1d30133bf01e7_prof);

    }

    // line 223
    public function block_sonata_left_side($context, array $blocks = array())
    {
        $__internal_fe0133c4626d78096e1e6949ad6166b1ba650383c9f4f31d5fcc2ffc85124e14 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fe0133c4626d78096e1e6949ad6166b1ba650383c9f4f31d5fcc2ffc85124e14->enter($__internal_fe0133c4626d78096e1e6949ad6166b1ba650383c9f4f31d5fcc2ffc85124e14_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_left_side"));

        $__internal_ac7d64a659de7325823f3c0865bb5627e8394d5e0f728c8f2b20131be6d81a6c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ac7d64a659de7325823f3c0865bb5627e8394d5e0f728c8f2b20131be6d81a6c->enter($__internal_ac7d64a659de7325823f3c0865bb5627e8394d5e0f728c8f2b20131be6d81a6c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_left_side"));

        // line 224
        echo "                <aside class=\"main-sidebar\">
                    <section class=\"sidebar\">
                        ";
        // line 226
        $this->displayBlock('sonata_side_nav', $context, $blocks);
        // line 252
        echo "                    </section>
                </aside>
            ";
        
        $__internal_ac7d64a659de7325823f3c0865bb5627e8394d5e0f728c8f2b20131be6d81a6c->leave($__internal_ac7d64a659de7325823f3c0865bb5627e8394d5e0f728c8f2b20131be6d81a6c_prof);

        
        $__internal_fe0133c4626d78096e1e6949ad6166b1ba650383c9f4f31d5fcc2ffc85124e14->leave($__internal_fe0133c4626d78096e1e6949ad6166b1ba650383c9f4f31d5fcc2ffc85124e14_prof);

    }

    // line 226
    public function block_sonata_side_nav($context, array $blocks = array())
    {
        $__internal_f1b347678cfbf3f56f7231b8598845bb0ecc658efdfcfba8b753b2639441d044 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f1b347678cfbf3f56f7231b8598845bb0ecc658efdfcfba8b753b2639441d044->enter($__internal_f1b347678cfbf3f56f7231b8598845bb0ecc658efdfcfba8b753b2639441d044_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_side_nav"));

        $__internal_f26e518c5aca5c8acf83232df5eac481adecebb8690c742fefcf85dd84c88695 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f26e518c5aca5c8acf83232df5eac481adecebb8690c742fefcf85dd84c88695->enter($__internal_f26e518c5aca5c8acf83232df5eac481adecebb8690c742fefcf85dd84c88695_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_side_nav"));

        // line 227
        echo "                            ";
        $this->displayBlock('sonata_sidebar_search', $context, $blocks);
        // line 239
        echo "
                            ";
        // line 240
        $this->displayBlock('side_bar_before_nav', $context, $blocks);
        // line 241
        echo "                            ";
        $this->displayBlock('side_bar_nav', $context, $blocks);
        // line 244
        echo "                            ";
        $this->displayBlock('side_bar_after_nav', $context, $blocks);
        // line 251
        echo "                        ";
        
        $__internal_f26e518c5aca5c8acf83232df5eac481adecebb8690c742fefcf85dd84c88695->leave($__internal_f26e518c5aca5c8acf83232df5eac481adecebb8690c742fefcf85dd84c88695_prof);

        
        $__internal_f1b347678cfbf3f56f7231b8598845bb0ecc658efdfcfba8b753b2639441d044->leave($__internal_f1b347678cfbf3f56f7231b8598845bb0ecc658efdfcfba8b753b2639441d044_prof);

    }

    // line 227
    public function block_sonata_sidebar_search($context, array $blocks = array())
    {
        $__internal_8ca9c3fb3c6bb7203cffb762c55d6cd9923364cc40e15f01c73b0d5b060614cf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8ca9c3fb3c6bb7203cffb762c55d6cd9923364cc40e15f01c73b0d5b060614cf->enter($__internal_8ca9c3fb3c6bb7203cffb762c55d6cd9923364cc40e15f01c73b0d5b060614cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_sidebar_search"));

        $__internal_c996ab5619a7af4127e9a182bcae485353e83f7576d6072f1df2514cefc8e47f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c996ab5619a7af4127e9a182bcae485353e83f7576d6072f1df2514cefc8e47f->enter($__internal_c996ab5619a7af4127e9a182bcae485353e83f7576d6072f1df2514cefc8e47f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_sidebar_search"));

        // line 228
        echo "                                <form action=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sonata_admin_search");
        echo "\" method=\"GET\" class=\"sidebar-form\" role=\"search\">
                                    <div class=\"input-group custom-search-form\">
                                        <input type=\"text\" name=\"q\" value=\"";
        // line 230
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "get", array(0 => "q"), "method"), "html", null, true);
        echo "\" class=\"form-control\" placeholder=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("search_placeholder", array(), "SonataAdminBundle"), "html", null, true);
        echo "\">
                                        <span class=\"input-group-btn\">
                                            <button class=\"btn btn-flat\" type=\"submit\">
                                                <i class=\"fa fa-search\" aria-hidden=\"true\"></i>
                                            </button>
                                        </span>
                                    </div>
                                </form>
                            ";
        
        $__internal_c996ab5619a7af4127e9a182bcae485353e83f7576d6072f1df2514cefc8e47f->leave($__internal_c996ab5619a7af4127e9a182bcae485353e83f7576d6072f1df2514cefc8e47f_prof);

        
        $__internal_8ca9c3fb3c6bb7203cffb762c55d6cd9923364cc40e15f01c73b0d5b060614cf->leave($__internal_8ca9c3fb3c6bb7203cffb762c55d6cd9923364cc40e15f01c73b0d5b060614cf_prof);

    }

    // line 240
    public function block_side_bar_before_nav($context, array $blocks = array())
    {
        $__internal_644717ad912d2b3464b90b0210e0e1d7660963f77837b9123cab3b1a3308a81a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_644717ad912d2b3464b90b0210e0e1d7660963f77837b9123cab3b1a3308a81a->enter($__internal_644717ad912d2b3464b90b0210e0e1d7660963f77837b9123cab3b1a3308a81a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "side_bar_before_nav"));

        $__internal_e45b27de22a2d04428bf440119798c5e63f5c56b946c14e01c2ca34fb0a92c48 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e45b27de22a2d04428bf440119798c5e63f5c56b946c14e01c2ca34fb0a92c48->enter($__internal_e45b27de22a2d04428bf440119798c5e63f5c56b946c14e01c2ca34fb0a92c48_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "side_bar_before_nav"));

        echo " ";
        
        $__internal_e45b27de22a2d04428bf440119798c5e63f5c56b946c14e01c2ca34fb0a92c48->leave($__internal_e45b27de22a2d04428bf440119798c5e63f5c56b946c14e01c2ca34fb0a92c48_prof);

        
        $__internal_644717ad912d2b3464b90b0210e0e1d7660963f77837b9123cab3b1a3308a81a->leave($__internal_644717ad912d2b3464b90b0210e0e1d7660963f77837b9123cab3b1a3308a81a_prof);

    }

    // line 241
    public function block_side_bar_nav($context, array $blocks = array())
    {
        $__internal_39267e31daf88eeaf8575487a9596c745a99797c41b5c2cb80e8d41a334930e6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_39267e31daf88eeaf8575487a9596c745a99797c41b5c2cb80e8d41a334930e6->enter($__internal_39267e31daf88eeaf8575487a9596c745a99797c41b5c2cb80e8d41a334930e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "side_bar_nav"));

        $__internal_16d7602cb6e9ec8258d8a329371b36fe52aa035a6656307da6e80444dbe18759 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_16d7602cb6e9ec8258d8a329371b36fe52aa035a6656307da6e80444dbe18759->enter($__internal_16d7602cb6e9ec8258d8a329371b36fe52aa035a6656307da6e80444dbe18759_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "side_bar_nav"));

        // line 242
        echo "                                ";
        echo $this->env->getExtension('Knp\Menu\Twig\MenuExtension')->render("sonata_admin_sidebar", array("template" => $this->getAttribute($this->getAttribute(($context["sonata_admin"] ?? $this->getContext($context, "sonata_admin")), "adminPool", array()), "getTemplate", array(0 => "knp_menu_template"), "method")));
        echo "
                            ";
        
        $__internal_16d7602cb6e9ec8258d8a329371b36fe52aa035a6656307da6e80444dbe18759->leave($__internal_16d7602cb6e9ec8258d8a329371b36fe52aa035a6656307da6e80444dbe18759_prof);

        
        $__internal_39267e31daf88eeaf8575487a9596c745a99797c41b5c2cb80e8d41a334930e6->leave($__internal_39267e31daf88eeaf8575487a9596c745a99797c41b5c2cb80e8d41a334930e6_prof);

    }

    // line 244
    public function block_side_bar_after_nav($context, array $blocks = array())
    {
        $__internal_f6e49cab3f6443d04110abafa14cfb42c23b23a24e17b36a961d45be05b1f43f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f6e49cab3f6443d04110abafa14cfb42c23b23a24e17b36a961d45be05b1f43f->enter($__internal_f6e49cab3f6443d04110abafa14cfb42c23b23a24e17b36a961d45be05b1f43f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "side_bar_after_nav"));

        $__internal_4bfefc0b35ccdebc18e873fdcb507157f5f3b3041b554c6fd18a113eb6c5baae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4bfefc0b35ccdebc18e873fdcb507157f5f3b3041b554c6fd18a113eb6c5baae->enter($__internal_4bfefc0b35ccdebc18e873fdcb507157f5f3b3041b554c6fd18a113eb6c5baae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "side_bar_after_nav"));

        // line 245
        echo "                                <p class=\"text-center small\" style=\"border-top: 1px solid #444444; padding-top: 10px\">
                                    ";
        // line 246
        $this->displayBlock('side_bar_after_nav_content', $context, $blocks);
        // line 249
        echo "                                </p>
                            ";
        
        $__internal_4bfefc0b35ccdebc18e873fdcb507157f5f3b3041b554c6fd18a113eb6c5baae->leave($__internal_4bfefc0b35ccdebc18e873fdcb507157f5f3b3041b554c6fd18a113eb6c5baae_prof);

        
        $__internal_f6e49cab3f6443d04110abafa14cfb42c23b23a24e17b36a961d45be05b1f43f->leave($__internal_f6e49cab3f6443d04110abafa14cfb42c23b23a24e17b36a961d45be05b1f43f_prof);

    }

    // line 246
    public function block_side_bar_after_nav_content($context, array $blocks = array())
    {
        $__internal_0cad3c1012541a0af4461015bc7b240de00af3a52df4a653e1e04f4678c62238 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0cad3c1012541a0af4461015bc7b240de00af3a52df4a653e1e04f4678c62238->enter($__internal_0cad3c1012541a0af4461015bc7b240de00af3a52df4a653e1e04f4678c62238_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "side_bar_after_nav_content"));

        $__internal_6f2e87271e2a8021993f08ca3079d3919bdc073b3f206b1f004da788355a8651 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6f2e87271e2a8021993f08ca3079d3919bdc073b3f206b1f004da788355a8651->enter($__internal_6f2e87271e2a8021993f08ca3079d3919bdc073b3f206b1f004da788355a8651_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "side_bar_after_nav_content"));

        // line 247
        echo "                                        <a href=\"https://sonata-project.org\" rel=\"noreferrer\" target=\"_blank\">sonata project</a>
                                    ";
        
        $__internal_6f2e87271e2a8021993f08ca3079d3919bdc073b3f206b1f004da788355a8651->leave($__internal_6f2e87271e2a8021993f08ca3079d3919bdc073b3f206b1f004da788355a8651_prof);

        
        $__internal_0cad3c1012541a0af4461015bc7b240de00af3a52df4a653e1e04f4678c62238->leave($__internal_0cad3c1012541a0af4461015bc7b240de00af3a52df4a653e1e04f4678c62238_prof);

    }

    // line 257
    public function block_sonata_page_content($context, array $blocks = array())
    {
        $__internal_7b4ac1de5895aafefaa0b54bc2e685b8a0d68a8a6c5edfb351455da1eb7fc432 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7b4ac1de5895aafefaa0b54bc2e685b8a0d68a8a6c5edfb351455da1eb7fc432->enter($__internal_7b4ac1de5895aafefaa0b54bc2e685b8a0d68a8a6c5edfb351455da1eb7fc432_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_page_content"));

        $__internal_71a1945f534e57265bd78565a10665275093d3112473e878fbd3ce68325b5594 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_71a1945f534e57265bd78565a10665275093d3112473e878fbd3ce68325b5594->enter($__internal_71a1945f534e57265bd78565a10665275093d3112473e878fbd3ce68325b5594_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_page_content"));

        // line 258
        echo "                    <section class=\"content-header\">

                        ";
        // line 260
        $this->displayBlock('sonata_page_content_header', $context, $blocks);
        // line 314
        echo "                    </section>

                    <section class=\"content\">
                        ";
        // line 317
        $this->displayBlock('sonata_admin_content', $context, $blocks);
        // line 351
        echo "                    </section>
                ";
        
        $__internal_71a1945f534e57265bd78565a10665275093d3112473e878fbd3ce68325b5594->leave($__internal_71a1945f534e57265bd78565a10665275093d3112473e878fbd3ce68325b5594_prof);

        
        $__internal_7b4ac1de5895aafefaa0b54bc2e685b8a0d68a8a6c5edfb351455da1eb7fc432->leave($__internal_7b4ac1de5895aafefaa0b54bc2e685b8a0d68a8a6c5edfb351455da1eb7fc432_prof);

    }

    // line 260
    public function block_sonata_page_content_header($context, array $blocks = array())
    {
        $__internal_5a11a5a36aa2731a3bc5827e5cce77eb8d801ac7a106b9792981c6ca4fe9fed5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5a11a5a36aa2731a3bc5827e5cce77eb8d801ac7a106b9792981c6ca4fe9fed5->enter($__internal_5a11a5a36aa2731a3bc5827e5cce77eb8d801ac7a106b9792981c6ca4fe9fed5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_page_content_header"));

        $__internal_b81f60828d67895173c1e64a6b499398d04109c7088aa071da5fc9333ed794fa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b81f60828d67895173c1e64a6b499398d04109c7088aa071da5fc9333ed794fa->enter($__internal_b81f60828d67895173c1e64a6b499398d04109c7088aa071da5fc9333ed794fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_page_content_header"));

        // line 261
        echo "                            ";
        $this->displayBlock('sonata_page_content_nav', $context, $blocks);
        // line 313
        echo "                        ";
        
        $__internal_b81f60828d67895173c1e64a6b499398d04109c7088aa071da5fc9333ed794fa->leave($__internal_b81f60828d67895173c1e64a6b499398d04109c7088aa071da5fc9333ed794fa_prof);

        
        $__internal_5a11a5a36aa2731a3bc5827e5cce77eb8d801ac7a106b9792981c6ca4fe9fed5->leave($__internal_5a11a5a36aa2731a3bc5827e5cce77eb8d801ac7a106b9792981c6ca4fe9fed5_prof);

    }

    // line 261
    public function block_sonata_page_content_nav($context, array $blocks = array())
    {
        $__internal_17937c1d9bdf2be19b1071a61eed33762353c4ebabdb589b355ec65ac219e593 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_17937c1d9bdf2be19b1071a61eed33762353c4ebabdb589b355ec65ac219e593->enter($__internal_17937c1d9bdf2be19b1071a61eed33762353c4ebabdb589b355ec65ac219e593_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_page_content_nav"));

        $__internal_966f187966962000a91cc968e6f1e92a2e17f95ba2805d2570b24479ff750121 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_966f187966962000a91cc968e6f1e92a2e17f95ba2805d2570b24479ff750121->enter($__internal_966f187966962000a91cc968e6f1e92a2e17f95ba2805d2570b24479ff750121_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_page_content_nav"));

        // line 262
        echo "                                ";
        if ((( !twig_test_empty(($context["_tab_menu"] ?? $this->getContext($context, "_tab_menu"))) ||  !twig_test_empty(($context["_actions"] ?? $this->getContext($context, "_actions")))) ||  !twig_test_empty(($context["_list_filters_actions"] ?? $this->getContext($context, "_list_filters_actions"))))) {
            // line 263
            echo "                                    <nav class=\"navbar navbar-default\" role=\"navigation\">
                                        <div class=\"container-fluid\">
                                            ";
            // line 265
            $this->displayBlock('tab_menu_navbar_header', $context, $blocks);
            // line 272
            echo "
                                            <div class=\"navbar-collapse\">
                                                ";
            // line 274
            if ( !twig_test_empty(($context["_tab_menu"] ?? $this->getContext($context, "_tab_menu")))) {
                // line 275
                echo "                                                    <div class=\"navbar-left\">
                                                        ";
                // line 276
                echo ($context["_tab_menu"] ?? $this->getContext($context, "_tab_menu"));
                echo "
                                                    </div>
                                                ";
            }
            // line 279
            echo "
                                                ";
            // line 280
            if ((((array_key_exists("admin", $context) && array_key_exists("action", $context)) && (($context["action"] ?? $this->getContext($context, "action")) == "list")) && (twig_length_filter($this->env, $this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "listModes", array())) > 1))) {
                // line 281
                echo "                                                    <div class=\"nav navbar-right btn-group\">
                                                        ";
                // line 282
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "listModes", array()));
                foreach ($context['_seq'] as $context["mode"] => $context["settings"]) {
                    // line 283
                    echo "                                                            <a href=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "generateUrl", array(0 => "list", 1 => twig_array_merge($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "query", array()), "all", array()), array("_list_mode" => $context["mode"]))), "method"), "html", null, true);
                    echo "\" class=\"btn btn-default navbar-btn btn-sm";
                    if (($this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "getListMode", array(), "method") == $context["mode"])) {
                        echo " active";
                    }
                    echo "\"><i class=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["settings"], "class", array()), "html", null, true);
                    echo "\"></i></a>
                                                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['mode'], $context['settings'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 285
                echo "                                                    </div>
                                                ";
            }
            // line 287
            echo "
                                                ";
            // line 288
            $this->displayBlock('sonata_admin_content_actions_wrappers', $context, $blocks);
            // line 304
            echo "
                                                ";
            // line 305
            if ( !twig_test_empty(($context["_list_filters_actions"] ?? $this->getContext($context, "_list_filters_actions")))) {
                // line 306
                echo "                                                    ";
                echo ($context["_list_filters_actions"] ?? $this->getContext($context, "_list_filters_actions"));
                echo "
                                                ";
            }
            // line 308
            echo "                                            </div>
                                        </div>
                                    </nav>
                                ";
        }
        // line 312
        echo "                            ";
        
        $__internal_966f187966962000a91cc968e6f1e92a2e17f95ba2805d2570b24479ff750121->leave($__internal_966f187966962000a91cc968e6f1e92a2e17f95ba2805d2570b24479ff750121_prof);

        
        $__internal_17937c1d9bdf2be19b1071a61eed33762353c4ebabdb589b355ec65ac219e593->leave($__internal_17937c1d9bdf2be19b1071a61eed33762353c4ebabdb589b355ec65ac219e593_prof);

    }

    // line 265
    public function block_tab_menu_navbar_header($context, array $blocks = array())
    {
        $__internal_a56dcd919787c8a5397e2511dea653fec0125c73e33a6e649685604b85220a56 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a56dcd919787c8a5397e2511dea653fec0125c73e33a6e649685604b85220a56->enter($__internal_a56dcd919787c8a5397e2511dea653fec0125c73e33a6e649685604b85220a56_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tab_menu_navbar_header"));

        $__internal_84233dcc713e5a09137e205a635368d19779745b1fad040f6e9d3f255ae1ee3a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_84233dcc713e5a09137e205a635368d19779745b1fad040f6e9d3f255ae1ee3a->enter($__internal_84233dcc713e5a09137e205a635368d19779745b1fad040f6e9d3f255ae1ee3a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tab_menu_navbar_header"));

        // line 266
        echo "                                                ";
        if ( !twig_test_empty(($context["_navbar_title"] ?? $this->getContext($context, "_navbar_title")))) {
            // line 267
            echo "                                                    <div class=\"navbar-header\">
                                                        <a class=\"navbar-brand\" href=\"#\">";
            // line 268
            echo ($context["_navbar_title"] ?? $this->getContext($context, "_navbar_title"));
            echo "</a>
                                                    </div>
                                                ";
        }
        // line 271
        echo "                                            ";
        
        $__internal_84233dcc713e5a09137e205a635368d19779745b1fad040f6e9d3f255ae1ee3a->leave($__internal_84233dcc713e5a09137e205a635368d19779745b1fad040f6e9d3f255ae1ee3a_prof);

        
        $__internal_a56dcd919787c8a5397e2511dea653fec0125c73e33a6e649685604b85220a56->leave($__internal_a56dcd919787c8a5397e2511dea653fec0125c73e33a6e649685604b85220a56_prof);

    }

    // line 288
    public function block_sonata_admin_content_actions_wrappers($context, array $blocks = array())
    {
        $__internal_13cd4eae60ee4ecee315444c49da17a25d074a91efc49dc3c7683c9052d4a951 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_13cd4eae60ee4ecee315444c49da17a25d074a91efc49dc3c7683c9052d4a951->enter($__internal_13cd4eae60ee4ecee315444c49da17a25d074a91efc49dc3c7683c9052d4a951_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_admin_content_actions_wrappers"));

        $__internal_ab0a48e022e60516a48f9519631cef91dbd577ac89fdcc73ca98d008858ba943 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ab0a48e022e60516a48f9519631cef91dbd577ac89fdcc73ca98d008858ba943->enter($__internal_ab0a48e022e60516a48f9519631cef91dbd577ac89fdcc73ca98d008858ba943_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_admin_content_actions_wrappers"));

        // line 289
        echo "                                                    ";
        if ( !twig_test_empty(twig_trim_filter(twig_replace_filter(($context["_actions"] ?? $this->getContext($context, "_actions")), array("<li>" => "", "</li>" => ""))))) {
            // line 290
            echo "                                                        <ul class=\"nav navbar-nav navbar-right\">
                                                        ";
            // line 291
            if ((twig_length_filter($this->env, twig_split_filter($this->env, ($context["_actions"] ?? $this->getContext($context, "_actions")), "</a>")) > 2)) {
                // line 292
                echo "                                                            <li class=\"dropdown sonata-actions\">
                                                                <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">";
                // line 293
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("link_actions", array(), "SonataAdminBundle"), "html", null, true);
                echo " <b class=\"caret\"></b></a>
                                                                <ul class=\"dropdown-menu\" role=\"menu\">
                                                                    ";
                // line 295
                echo ($context["_actions"] ?? $this->getContext($context, "_actions"));
                echo "
                                                                </ul>
                                                            </li>
                                                        ";
            } else {
                // line 299
                echo "                                                            ";
                echo ($context["_actions"] ?? $this->getContext($context, "_actions"));
                echo "
                                                        ";
            }
            // line 301
            echo "                                                        </ul>
                                                    ";
        }
        // line 303
        echo "                                                ";
        
        $__internal_ab0a48e022e60516a48f9519631cef91dbd577ac89fdcc73ca98d008858ba943->leave($__internal_ab0a48e022e60516a48f9519631cef91dbd577ac89fdcc73ca98d008858ba943_prof);

        
        $__internal_13cd4eae60ee4ecee315444c49da17a25d074a91efc49dc3c7683c9052d4a951->leave($__internal_13cd4eae60ee4ecee315444c49da17a25d074a91efc49dc3c7683c9052d4a951_prof);

    }

    // line 317
    public function block_sonata_admin_content($context, array $blocks = array())
    {
        $__internal_7c3d5fa2083cdd0bd2f942f48f14db7f946ff45802953a4aea92659a42c3c1c0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7c3d5fa2083cdd0bd2f942f48f14db7f946ff45802953a4aea92659a42c3c1c0->enter($__internal_7c3d5fa2083cdd0bd2f942f48f14db7f946ff45802953a4aea92659a42c3c1c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_admin_content"));

        $__internal_180dfc713425b7b347e446a2af4ef2bf9889568a583d1c7555343d077e1c94e6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_180dfc713425b7b347e446a2af4ef2bf9889568a583d1c7555343d077e1c94e6->enter($__internal_180dfc713425b7b347e446a2af4ef2bf9889568a583d1c7555343d077e1c94e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_admin_content"));

        // line 318
        echo "
                            ";
        // line 319
        $this->displayBlock('notice', $context, $blocks);
        // line 322
        echo "
                            ";
        // line 323
        if ( !twig_test_empty(($context["_preview"] ?? $this->getContext($context, "_preview")))) {
            // line 324
            echo "                                <div class=\"sonata-ba-preview\">";
            echo ($context["_preview"] ?? $this->getContext($context, "_preview"));
            echo "</div>
                            ";
        }
        // line 326
        echo "
                            ";
        // line 327
        if ( !twig_test_empty(($context["_content"] ?? $this->getContext($context, "_content")))) {
            // line 328
            echo "                                <div class=\"sonata-ba-content\">";
            echo ($context["_content"] ?? $this->getContext($context, "_content"));
            echo "</div>
                            ";
        }
        // line 330
        echo "
                            ";
        // line 331
        if ( !twig_test_empty(($context["_show"] ?? $this->getContext($context, "_show")))) {
            // line 332
            echo "                                <div class=\"sonata-ba-show\">";
            echo ($context["_show"] ?? $this->getContext($context, "_show"));
            echo "</div>
                            ";
        }
        // line 334
        echo "
                            ";
        // line 335
        if ( !twig_test_empty(($context["_form"] ?? $this->getContext($context, "_form")))) {
            // line 336
            echo "                                <div class=\"sonata-ba-form\">";
            echo ($context["_form"] ?? $this->getContext($context, "_form"));
            echo "</div>
                            ";
        }
        // line 338
        echo "
                            ";
        // line 339
        if ( !twig_test_empty(($context["_list_filters"] ?? $this->getContext($context, "_list_filters")))) {
            // line 340
            echo "                                <div class=\"row\">
                                    ";
            // line 341
            echo ($context["_list_filters"] ?? $this->getContext($context, "_list_filters"));
            echo "
                                </div>
                            ";
        }
        // line 344
        echo "
                            ";
        // line 345
        if ( !twig_test_empty(($context["_list_table"] ?? $this->getContext($context, "_list_table")))) {
            // line 346
            echo "                                <div class=\"row\">
                                    ";
            // line 347
            echo ($context["_list_table"] ?? $this->getContext($context, "_list_table"));
            echo "
                                </div>
                            ";
        }
        // line 350
        echo "                        ";
        
        $__internal_180dfc713425b7b347e446a2af4ef2bf9889568a583d1c7555343d077e1c94e6->leave($__internal_180dfc713425b7b347e446a2af4ef2bf9889568a583d1c7555343d077e1c94e6_prof);

        
        $__internal_7c3d5fa2083cdd0bd2f942f48f14db7f946ff45802953a4aea92659a42c3c1c0->leave($__internal_7c3d5fa2083cdd0bd2f942f48f14db7f946ff45802953a4aea92659a42c3c1c0_prof);

    }

    // line 319
    public function block_notice($context, array $blocks = array())
    {
        $__internal_ae7a4569a81cd89c32eda673a0028a749f215b355bd6a320051410e88d5cf06f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ae7a4569a81cd89c32eda673a0028a749f215b355bd6a320051410e88d5cf06f->enter($__internal_ae7a4569a81cd89c32eda673a0028a749f215b355bd6a320051410e88d5cf06f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "notice"));

        $__internal_cbe7535773eb85739a4a53a88d702a6d250cb0add585bf05d6991236bce32829 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cbe7535773eb85739a4a53a88d702a6d250cb0add585bf05d6991236bce32829->enter($__internal_cbe7535773eb85739a4a53a88d702a6d250cb0add585bf05d6991236bce32829_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "notice"));

        // line 320
        echo "                                ";
        $this->loadTemplate("SonataCoreBundle:FlashMessage:render.html.twig", "SonataAdminBundle::standard_layout.html.twig", 320)->display($context);
        // line 321
        echo "                            ";
        
        $__internal_cbe7535773eb85739a4a53a88d702a6d250cb0add585bf05d6991236bce32829->leave($__internal_cbe7535773eb85739a4a53a88d702a6d250cb0add585bf05d6991236bce32829_prof);

        
        $__internal_ae7a4569a81cd89c32eda673a0028a749f215b355bd6a320051410e88d5cf06f->leave($__internal_ae7a4569a81cd89c32eda673a0028a749f215b355bd6a320051410e88d5cf06f_prof);

    }

    // line 358
    public function block_bootlint($context, array $blocks = array())
    {
        $__internal_31ddd511cf6538759597192ac3f98b0c4030ca1f6c7730172229d5118b0dd160 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_31ddd511cf6538759597192ac3f98b0c4030ca1f6c7730172229d5118b0dd160->enter($__internal_31ddd511cf6538759597192ac3f98b0c4030ca1f6c7730172229d5118b0dd160_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "bootlint"));

        $__internal_6b83d24f1dca4cdb2b2e57d6eec5c5626f12bd723a4d36323594b4ed9bade489 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6b83d24f1dca4cdb2b2e57d6eec5c5626f12bd723a4d36323594b4ed9bade489->enter($__internal_6b83d24f1dca4cdb2b2e57d6eec5c5626f12bd723a4d36323594b4ed9bade489_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "bootlint"));

        // line 359
        echo "            ";
        // line 360
        echo "            <script type=\"text/javascript\">
                javascript:(function(){var s=document.createElement(\"script\");s.onload=function(){bootlint.showLintReportForCurrentDocument([], {hasProblems: false, problemFree: false});};s.src=\"https://maxcdn.bootstrapcdn.com/bootlint/latest/bootlint.min.js\";document.body.appendChild(s)})();
            </script>
        ";
        
        $__internal_6b83d24f1dca4cdb2b2e57d6eec5c5626f12bd723a4d36323594b4ed9bade489->leave($__internal_6b83d24f1dca4cdb2b2e57d6eec5c5626f12bd723a4d36323594b4ed9bade489_prof);

        
        $__internal_31ddd511cf6538759597192ac3f98b0c4030ca1f6c7730172229d5118b0dd160->leave($__internal_31ddd511cf6538759597192ac3f98b0c4030ca1f6c7730172229d5118b0dd160_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle::standard_layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1458 => 360,  1456 => 359,  1447 => 358,  1437 => 321,  1434 => 320,  1425 => 319,  1415 => 350,  1409 => 347,  1406 => 346,  1404 => 345,  1401 => 344,  1395 => 341,  1392 => 340,  1390 => 339,  1387 => 338,  1381 => 336,  1379 => 335,  1376 => 334,  1370 => 332,  1368 => 331,  1365 => 330,  1359 => 328,  1357 => 327,  1354 => 326,  1348 => 324,  1346 => 323,  1343 => 322,  1341 => 319,  1338 => 318,  1329 => 317,  1319 => 303,  1315 => 301,  1309 => 299,  1302 => 295,  1297 => 293,  1294 => 292,  1292 => 291,  1289 => 290,  1286 => 289,  1277 => 288,  1267 => 271,  1261 => 268,  1258 => 267,  1255 => 266,  1246 => 265,  1236 => 312,  1230 => 308,  1224 => 306,  1222 => 305,  1219 => 304,  1217 => 288,  1214 => 287,  1210 => 285,  1195 => 283,  1191 => 282,  1188 => 281,  1186 => 280,  1183 => 279,  1177 => 276,  1174 => 275,  1172 => 274,  1168 => 272,  1166 => 265,  1162 => 263,  1159 => 262,  1150 => 261,  1140 => 313,  1137 => 261,  1128 => 260,  1117 => 351,  1115 => 317,  1110 => 314,  1108 => 260,  1104 => 258,  1095 => 257,  1084 => 247,  1075 => 246,  1064 => 249,  1062 => 246,  1059 => 245,  1050 => 244,  1037 => 242,  1028 => 241,  1010 => 240,  989 => 230,  983 => 228,  974 => 227,  964 => 251,  961 => 244,  958 => 241,  956 => 240,  953 => 239,  950 => 227,  941 => 226,  929 => 252,  927 => 226,  923 => 224,  914 => 223,  903 => 353,  901 => 257,  897 => 255,  894 => 223,  885 => 222,  873 => 210,  871 => 209,  864 => 204,  855 => 203,  844 => 201,  842 => 200,  836 => 196,  827 => 195,  817 => 216,  812 => 213,  809 => 203,  807 => 195,  803 => 193,  800 => 192,  791 => 191,  780 => 187,  776 => 185,  770 => 183,  767 => 182,  764 => 181,  750 => 180,  744 => 178,  740 => 176,  734 => 174,  730 => 172,  727 => 170,  724 => 168,  722 => 167,  717 => 166,  715 => 165,  712 => 164,  710 => 163,  707 => 160,  705 => 159,  703 => 158,  701 => 157,  683 => 156,  680 => 155,  678 => 154,  675 => 153,  673 => 152,  670 => 151,  661 => 150,  650 => 217,  648 => 191,  644 => 189,  642 => 150,  634 => 144,  625 => 143,  615 => 142,  611 => 140,  605 => 138,  602 => 137,  594 => 135,  592 => 134,  587 => 133,  584 => 132,  575 => 131,  561 => 127,  557 => 125,  548 => 124,  537 => 219,  534 => 143,  531 => 131,  529 => 124,  526 => 123,  517 => 122,  499 => 118,  489 => 115,  486 => 114,  483 => 113,  469 => 112,  464 => 110,  461 => 107,  459 => 106,  457 => 105,  455 => 104,  451 => 101,  448 => 100,  445 => 99,  428 => 98,  425 => 97,  422 => 96,  416 => 94,  414 => 93,  408 => 91,  399 => 90,  389 => 66,  380 => 64,  375 => 63,  366 => 62,  345 => 50,  341 => 48,  335 => 47,  327 => 46,  319 => 45,  311 => 44,  307 => 42,  298 => 41,  288 => 87,  285 => 86,  279 => 84,  276 => 83,  273 => 81,  268 => 80,  265 => 79,  262 => 77,  258 => 75,  256 => 73,  254 => 71,  251 => 70,  249 => 69,  247 => 68,  244 => 67,  242 => 62,  239 => 61,  236 => 41,  227 => 40,  217 => 38,  208 => 36,  203 => 35,  194 => 34,  181 => 29,  172 => 28,  154 => 26,  141 => 365,  138 => 364,  135 => 358,  133 => 357,  129 => 355,  127 => 222,  124 => 221,  122 => 122,  115 => 118,  111 => 116,  109 => 90,  105 => 88,  103 => 40,  100 => 39,  98 => 34,  95 => 33,  93 => 28,  88 => 26,  84 => 24,  82 => 23,  80 => 22,  78 => 21,  76 => 20,  74 => 19,  72 => 18,  70 => 17,  68 => 16,  66 => 15,  64 => 14,  62 => 13,  60 => 12,  57 => 11,);
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

{% set _preview = block('preview') is defined ? block('preview')|trim : null %}
{% set _form = block('form') is defined ? block('form')|trim : null %}
{% set _show = block('show') is defined ? block('show')|trim : null %}
{% set _list_table = block('list_table') is defined ? block('list_table')|trim : null %}
{% set _list_filters = block('list_filters') is defined ? block('list_filters')|trim : null %}
{% set _tab_menu = block('tab_menu') is defined ? block('tab_menu')|trim : null %}
{% set _content = block('content') is defined ? block('content')|trim : null %}
{% set _title = block('title') is defined ? block('title')|trim : null %}
{% set _breadcrumb = block('breadcrumb') is defined ? block('breadcrumb')|trim : null %}
{% set _actions = block('actions') is defined ? block('actions')|trim : null %}
{% set _navbar_title = block('navbar_title') is defined ? block('navbar_title')|trim : null %}
{% set _list_filters_actions = block('list_filters_actions') is defined ? block('list_filters_actions')|trim : null %}

<!DOCTYPE html>
<html {% block html_attributes %}class=\"no-js\"{% endblock %}>
    <head>
        {% block meta_tags %}
            <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
            <meta charset=\"UTF-8\">
            <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
        {% endblock %}

        {% block stylesheets %}
            {% for stylesheet in sonata_admin.adminPool.getOption('stylesheets', []) %}
                <link rel=\"stylesheet\" href=\"{{ asset(stylesheet) }}\">
            {% endfor %}
        {% endblock %}

        {% block javascripts %}
            {% block sonata_javascript_config %}
                <script>
                    window.SONATA_CONFIG = {
                        CONFIRM_EXIT: {% if sonata_admin.adminPool.getOption('confirm_exit') %}true{% else %}false{% endif %},
                        USE_SELECT2: {% if sonata_admin.adminPool.getOption('use_select2') %}true{% else %}false{% endif %},
                        USE_ICHECK: {% if sonata_admin.adminPool.getOption('use_icheck') %}true{% else %}false{% endif %},
                        USE_STICKYFORMS: {% if sonata_admin.adminPool.getOption('use_stickyforms') %}true{% else %}false{% endif %}
                    };
                    window.SONATA_TRANSLATIONS = {
                        CONFIRM_EXIT: '{{ 'confirm_exit'|trans({}, 'SonataAdminBundle')|escape('js') }}'
                    };

                    // http://getbootstrap.com/getting-started/#support-ie10-width
                    if (navigator.userAgent.match(/IEMobile\\/10\\.0/)) {
                        var msViewportStyle = document.createElement('style');
                        msViewportStyle.appendChild(document.createTextNode('@-ms-viewport{width:auto!important}'));
                        document.querySelector('head').appendChild(msViewportStyle);
                    }
                </script>
            {% endblock %}

            {% block sonata_javascript_pool %}
                {% for javascript in sonata_admin.adminPool.getOption('javascripts', []) %}
                    <script src=\"{{ asset(javascript) }}\"></script>
                {% endfor %}
            {% endblock %}

            {% set locale = app.request.locale %}
            {# localize moment #}
            {% if locale[:2] != 'en' %}
                <script src=\"{{ asset(
                    'bundles/sonatacore/vendor/moment/locale/' ~
                    locale|lower|replace({'_':'-'}) ~
                    '.js'
                ) }}\"></script>
            {% endif %}

            {# localize select2 #}
            {% if sonata_admin.adminPool.getOption('use_select2') %}
                {% if locale == 'pt' %}{% set locale = 'pt_PT' %}{% endif %}

                {# omit default EN locale #}
                {% if locale[:2] != 'en' %}
                    <script src=\"{{ asset('bundles/sonatacore/vendor/select2/select2_locale_' ~ locale|replace({'_':'-'}) ~ '.js') }}\"></script>
                {% endif %}
            {% endif %}
        {% endblock %}

        <title>
        {% block sonata_head_title %}
            {{ 'Admin'|trans({}, 'SonataAdminBundle') }}

            {% if _title is not empty %}
                {{ _title|striptags|raw }}
            {% else %}
                {% if action is defined %}
                    -
                    {% for menu in breadcrumbs_builder.breadcrumbs(admin, action) %}
                        {% if not loop.first %}
                            {% if loop.index != 2 %}
                                &gt;
                            {% endif %}

                            {%- set translation_domain = menu.extra('translation_domain', 'messages') -%}
                            {%- set label = menu.label -%}
                            {%- if translation_domain is not same as(false) -%}
                                {%- set label = label|trans(menu.extra('translation_params', {}), translation_domain) -%}
                            {%- endif -%}

                            {{ label }}
                        {% endif %}
                    {% endfor %}
                {% endif %}
            {% endif %}
        {% endblock %}
        </title>
    </head>
    <body {% block body_attributes %}class=\"sonata-bc skin-black fixed\"{% endblock %}>

    <div class=\"wrapper\">

        {% block sonata_header %}
            <header class=\"main-header\">
                {% block sonata_header_noscript_warning %}
                    <noscript>
                        <div class=\"noscript-warning\">
                            {{ 'noscript_warning'|trans({}, 'SonataAdminBundle') }}
                        </div>
                    </noscript>
                {% endblock %}
                {% block logo %}
                    {% spaceless %}
                        <a class=\"logo\" href=\"{{ path('sonata_admin_dashboard') }}\">
                            {% if 'single_image' == sonata_admin.adminPool.getOption('title_mode') or 'both' == sonata_admin.adminPool.getOption('title_mode') %}
                                <img src=\"{{ asset(sonata_admin.adminPool.titlelogo) }}\" alt=\"{{ sonata_admin.adminPool.title }}\">
                            {% endif %}
                            {% if 'single_text' == sonata_admin.adminPool.getOption('title_mode') or 'both' == sonata_admin.adminPool.getOption('title_mode') %}
                                <span>{{ sonata_admin.adminPool.title }}</span>
                            {% endif %}
                        </a>
                    {% endspaceless %}
                {% endblock %}
                {% block sonata_nav %}
                    <nav class=\"navbar navbar-static-top\" role=\"navigation\">
                        <a href=\"#\" class=\"sidebar-toggle\" data-toggle=\"offcanvas\" role=\"button\">
                            <span class=\"sr-only\">Toggle navigation</span>
                        </a>

                        <div class=\"navbar-left\">
                            {% block sonata_breadcrumb %}
                                <div class=\"hidden-xs\">
                                    {% if _breadcrumb is not empty or action is defined %}
                                        <ol class=\"nav navbar-top-links breadcrumb\">
                                            {% if _breadcrumb is empty %}
                                                {% if action is defined %}
                                                    {% for menu in breadcrumbs_builder.breadcrumbs(admin, action) %}
                                                        {%- set translation_domain = menu.extra('translation_domain', 'messages') -%}
                                                        {%- set label = menu.label -%}
                                                        {%- if translation_domain is not same as(false) -%}
                                                            {%- set label = label|trans(menu.extra('translation_params', {}), translation_domain) -%}
                                                        {%- endif -%}

                                                        {% if not loop.last %}
                                                            <li>
                                                                {% if menu.uri is not empty %}
                                                                    <a href=\"{{ menu.uri }}\">
                                                                        {% if menu.extra('safe_label', true) %}
                                                                            {{- label|raw -}}
                                                                        {% else %}
                                                                            {{- label -}}
                                                                        {% endif %}
                                                                    </a>
                                                                {% else %}
                                                                    <span>{{ label }}</span>
                                                                {% endif %}
                                                            </li>
                                                        {% else %}
                                                            <li class=\"active\"><span>{{ label }}</span></li>
                                                        {% endif %}
                                                    {% endfor %}
                                                {% endif %}
                                            {% else %}
                                                {{ _breadcrumb|raw }}
                                            {% endif %}
                                        </ol>
                                    {% endif %}
                                </div>
                            {% endblock sonata_breadcrumb %}
                        </div>

                        {% block sonata_top_nav_menu %}
                            {% if app.user and is_granted('ROLE_SONATA_ADMIN') %}
                                <div class=\"navbar-custom-menu\">
                                    <ul class=\"nav navbar-nav\">
                                        {% block sonata_top_nav_menu_add_block %}
                                            <li class=\"dropdown\">
                                                <a class=\"dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\">
                                                    <i class=\"fa fa-plus-square fa-fw\" aria-hidden=\"true\"></i> <i class=\"fa fa-caret-down\" aria-hidden=\"true\"></i>
                                                </a>
                                                {% include sonata_admin.adminPool.getTemplate('add_block') %}
                                            </li>
                                        {% endblock %}
                                        {% block sonata_top_nav_menu_user_block %}
                                            <li class=\"dropdown user-menu\">
                                                <a class=\"dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\">
                                                    <i class=\"fa fa-user fa-fw\" aria-hidden=\"true\"></i> <i class=\"fa fa-caret-down\" aria-hidden=\"true\"></i>
                                                </a>
                                                <ul class=\"dropdown-menu dropdown-user\">
                                                    {% include sonata_admin.adminPool.getTemplate('user_block') %}
                                                </ul>
                                            </li>
                                        {% endblock %}
                                    </ul>
                                </div>
                            {% endif %}
                        {% endblock %}
                    </nav>
                {% endblock sonata_nav %}
            </header>
        {% endblock sonata_header %}

        {% block sonata_wrapper %}
            {% block sonata_left_side %}
                <aside class=\"main-sidebar\">
                    <section class=\"sidebar\">
                        {% block sonata_side_nav %}
                            {% block sonata_sidebar_search %}
                                <form action=\"{{ path('sonata_admin_search') }}\" method=\"GET\" class=\"sidebar-form\" role=\"search\">
                                    <div class=\"input-group custom-search-form\">
                                        <input type=\"text\" name=\"q\" value=\"{{ app.request.get('q') }}\" class=\"form-control\" placeholder=\"{{ 'search_placeholder'|trans({}, 'SonataAdminBundle') }}\">
                                        <span class=\"input-group-btn\">
                                            <button class=\"btn btn-flat\" type=\"submit\">
                                                <i class=\"fa fa-search\" aria-hidden=\"true\"></i>
                                            </button>
                                        </span>
                                    </div>
                                </form>
                            {% endblock sonata_sidebar_search %}

                            {% block side_bar_before_nav %} {% endblock %}
                            {% block side_bar_nav %}
                                {{ knp_menu_render('sonata_admin_sidebar', {template: sonata_admin.adminPool.getTemplate('knp_menu_template')}) }}
                            {% endblock side_bar_nav %}
                            {% block side_bar_after_nav %}
                                <p class=\"text-center small\" style=\"border-top: 1px solid #444444; padding-top: 10px\">
                                    {% block side_bar_after_nav_content %}
                                        <a href=\"https://sonata-project.org\" rel=\"noreferrer\" target=\"_blank\">sonata project</a>
                                    {% endblock %}
                                </p>
                            {% endblock %}
                        {% endblock sonata_side_nav %}
                    </section>
                </aside>
            {% endblock sonata_left_side %}

            <div class=\"content-wrapper\">
                {% block sonata_page_content %}
                    <section class=\"content-header\">

                        {% block sonata_page_content_header %}
                            {% block sonata_page_content_nav %}
                                {% if _tab_menu is not empty or _actions is not empty or _list_filters_actions is not empty %}
                                    <nav class=\"navbar navbar-default\" role=\"navigation\">
                                        <div class=\"container-fluid\">
                                            {% block tab_menu_navbar_header %}
                                                {% if _navbar_title is not empty %}
                                                    <div class=\"navbar-header\">
                                                        <a class=\"navbar-brand\" href=\"#\">{{ _navbar_title|raw }}</a>
                                                    </div>
                                                {% endif %}
                                            {% endblock %}

                                            <div class=\"navbar-collapse\">
                                                {% if _tab_menu is not empty %}
                                                    <div class=\"navbar-left\">
                                                        {{ _tab_menu|raw }}
                                                    </div>
                                                {% endif %}

                                                {% if admin is defined and action is defined and action == 'list' and admin.listModes|length > 1 %}
                                                    <div class=\"nav navbar-right btn-group\">
                                                        {% for mode, settings in admin.listModes %}
                                                            <a href=\"{{ admin.generateUrl('list', app.request.query.all|merge({_list_mode: mode})) }}\" class=\"btn btn-default navbar-btn btn-sm{% if admin.getListMode() == mode %} active{% endif %}\"><i class=\"{{ settings.class }}\"></i></a>
                                                        {% endfor %}
                                                    </div>
                                                {% endif %}

                                                {% block sonata_admin_content_actions_wrappers %}
                                                    {% if _actions|replace({ '<li>': '', '</li>': '' })|trim is not empty %}
                                                        <ul class=\"nav navbar-nav navbar-right\">
                                                        {% if _actions|split('</a>')|length > 2 %}
                                                            <li class=\"dropdown sonata-actions\">
                                                                <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">{{ 'link_actions'|trans({}, 'SonataAdminBundle') }} <b class=\"caret\"></b></a>
                                                                <ul class=\"dropdown-menu\" role=\"menu\">
                                                                    {{ _actions|raw }}
                                                                </ul>
                                                            </li>
                                                        {% else %}
                                                            {{ _actions|raw }}
                                                        {% endif %}
                                                        </ul>
                                                    {% endif %}
                                                {% endblock sonata_admin_content_actions_wrappers %}

                                                {% if _list_filters_actions is not empty %}
                                                    {{ _list_filters_actions|raw }}
                                                {% endif %}
                                            </div>
                                        </div>
                                    </nav>
                                {% endif %}
                            {% endblock sonata_page_content_nav %}
                        {% endblock sonata_page_content_header %}
                    </section>

                    <section class=\"content\">
                        {% block sonata_admin_content %}

                            {% block notice %}
                                {% include 'SonataCoreBundle:FlashMessage:render.html.twig' %}
                            {% endblock notice %}

                            {% if _preview is not empty %}
                                <div class=\"sonata-ba-preview\">{{ _preview|raw }}</div>
                            {% endif %}

                            {% if _content is not empty %}
                                <div class=\"sonata-ba-content\">{{ _content|raw }}</div>
                            {% endif %}

                            {% if _show is not empty %}
                                <div class=\"sonata-ba-show\">{{ _show|raw }}</div>
                            {% endif %}

                            {% if _form is not empty %}
                                <div class=\"sonata-ba-form\">{{ _form|raw }}</div>
                            {% endif %}

                            {% if _list_filters is not empty %}
                                <div class=\"row\">
                                    {{ _list_filters|raw }}
                                </div>
                            {% endif %}

                            {% if _list_table is not empty %}
                                <div class=\"row\">
                                    {{ _list_table|raw }}
                                </div>
                            {% endif %}
                        {% endblock sonata_admin_content %}
                    </section>
                {% endblock sonata_page_content %}
            </div>
        {% endblock sonata_wrapper %}
    </div>

    {% if sonata_admin.adminPool.getOption('use_bootlint') %}
        {% block bootlint %}
            {# Bootlint - https://github.com/twbs/bootlint#in-the-browser #}
            <script type=\"text/javascript\">
                javascript:(function(){var s=document.createElement(\"script\");s.onload=function(){bootlint.showLintReportForCurrentDocument([], {hasProblems: false, problemFree: false});};s.src=\"https://maxcdn.bootstrapcdn.com/bootlint/latest/bootlint.min.js\";document.body.appendChild(s)})();
            </script>
        {% endblock %}
    {% endif %}

    </body>
</html>
", "SonataAdminBundle::standard_layout.html.twig", "/var/www/b2.2017/Blog/vendor/sonata-project/admin-bundle/Resources/views/standard_layout.html.twig");
    }
}
