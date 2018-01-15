<?php

/* knp_menu.html.twig */
class __TwigTemplate_64c5b7c7f6e27df3f0bc07dcbfa7743f353941b2ee77a68fcfc7222cf2107463 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("knp_menu_base.html.twig", "knp_menu.html.twig", 1);
        $this->blocks = array(
            'compressed_root' => array($this, 'block_compressed_root'),
            'root' => array($this, 'block_root'),
            'list' => array($this, 'block_list'),
            'children' => array($this, 'block_children'),
            'item' => array($this, 'block_item'),
            'linkElement' => array($this, 'block_linkElement'),
            'spanElement' => array($this, 'block_spanElement'),
            'label' => array($this, 'block_label'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "knp_menu_base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_37d389e7eba036f0ebe3027673452b22231ac6b472da282b8aa121b29d29afe6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_37d389e7eba036f0ebe3027673452b22231ac6b472da282b8aa121b29d29afe6->enter($__internal_37d389e7eba036f0ebe3027673452b22231ac6b472da282b8aa121b29d29afe6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "knp_menu.html.twig"));

        $__internal_ecd08631059a27a32f055f749a5e6c8ff7393ed7a24d399c65e89d96d74ff848 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ecd08631059a27a32f055f749a5e6c8ff7393ed7a24d399c65e89d96d74ff848->enter($__internal_ecd08631059a27a32f055f749a5e6c8ff7393ed7a24d399c65e89d96d74ff848_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "knp_menu.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_37d389e7eba036f0ebe3027673452b22231ac6b472da282b8aa121b29d29afe6->leave($__internal_37d389e7eba036f0ebe3027673452b22231ac6b472da282b8aa121b29d29afe6_prof);

        
        $__internal_ecd08631059a27a32f055f749a5e6c8ff7393ed7a24d399c65e89d96d74ff848->leave($__internal_ecd08631059a27a32f055f749a5e6c8ff7393ed7a24d399c65e89d96d74ff848_prof);

    }

    // line 11
    public function block_compressed_root($context, array $blocks = array())
    {
        $__internal_1277f12144e05f0d22c95e33b9ce818fb9dfa8b0e7f04ed765ef016e748bbacf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1277f12144e05f0d22c95e33b9ce818fb9dfa8b0e7f04ed765ef016e748bbacf->enter($__internal_1277f12144e05f0d22c95e33b9ce818fb9dfa8b0e7f04ed765ef016e748bbacf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "compressed_root"));

        $__internal_f83443297308c2d860f9df760305fe398043f5bcf9ca33be8707d84df7c228b8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f83443297308c2d860f9df760305fe398043f5bcf9ca33be8707d84df7c228b8->enter($__internal_f83443297308c2d860f9df760305fe398043f5bcf9ca33be8707d84df7c228b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "compressed_root"));

        // line 12
        ob_start();
        // line 13
        $this->displayBlock("root", $context, $blocks);
        echo "
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_f83443297308c2d860f9df760305fe398043f5bcf9ca33be8707d84df7c228b8->leave($__internal_f83443297308c2d860f9df760305fe398043f5bcf9ca33be8707d84df7c228b8_prof);

        
        $__internal_1277f12144e05f0d22c95e33b9ce818fb9dfa8b0e7f04ed765ef016e748bbacf->leave($__internal_1277f12144e05f0d22c95e33b9ce818fb9dfa8b0e7f04ed765ef016e748bbacf_prof);

    }

    // line 17
    public function block_root($context, array $blocks = array())
    {
        $__internal_df58037338ea9bbff6ef238efdad4e452e5994b87fb4612b91c8639f7c997150 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_df58037338ea9bbff6ef238efdad4e452e5994b87fb4612b91c8639f7c997150->enter($__internal_df58037338ea9bbff6ef238efdad4e452e5994b87fb4612b91c8639f7c997150_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "root"));

        $__internal_fe458f863e4c2a40be89bff8b64c5ca11c6e616c9da1ce84f07ad66c38c05405 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fe458f863e4c2a40be89bff8b64c5ca11c6e616c9da1ce84f07ad66c38c05405->enter($__internal_fe458f863e4c2a40be89bff8b64c5ca11c6e616c9da1ce84f07ad66c38c05405_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "root"));

        // line 18
        $context["listAttributes"] = $this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "childrenAttributes", array());
        // line 19
        $this->displayBlock("list", $context, $blocks);
        
        $__internal_fe458f863e4c2a40be89bff8b64c5ca11c6e616c9da1ce84f07ad66c38c05405->leave($__internal_fe458f863e4c2a40be89bff8b64c5ca11c6e616c9da1ce84f07ad66c38c05405_prof);

        
        $__internal_df58037338ea9bbff6ef238efdad4e452e5994b87fb4612b91c8639f7c997150->leave($__internal_df58037338ea9bbff6ef238efdad4e452e5994b87fb4612b91c8639f7c997150_prof);

    }

    // line 22
    public function block_list($context, array $blocks = array())
    {
        $__internal_b5dff2a40fff2cc28f5e2795ba164fb58c551cb87d1366be0b3f9540970259de = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b5dff2a40fff2cc28f5e2795ba164fb58c551cb87d1366be0b3f9540970259de->enter($__internal_b5dff2a40fff2cc28f5e2795ba164fb58c551cb87d1366be0b3f9540970259de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "list"));

        $__internal_90fdf5984e69e46d34416013cfac63de2ae74cda1fc030fa9271936b9a69dc32 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_90fdf5984e69e46d34416013cfac63de2ae74cda1fc030fa9271936b9a69dc32->enter($__internal_90fdf5984e69e46d34416013cfac63de2ae74cda1fc030fa9271936b9a69dc32_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "list"));

        // line 23
        if ((($this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "hasChildren", array()) &&  !($this->getAttribute(($context["options"] ?? $this->getContext($context, "options")), "depth", array()) === 0)) && $this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "displayChildren", array()))) {
            // line 24
            echo "    ";
            $context["knp_menu"] = $this;
            // line 25
            echo "    <ul";
            echo $context["knp_menu"]->getattributes(($context["listAttributes"] ?? $this->getContext($context, "listAttributes")));
            echo ">
        ";
            // line 26
            $this->displayBlock("children", $context, $blocks);
            echo "
    </ul>
";
        }
        
        $__internal_90fdf5984e69e46d34416013cfac63de2ae74cda1fc030fa9271936b9a69dc32->leave($__internal_90fdf5984e69e46d34416013cfac63de2ae74cda1fc030fa9271936b9a69dc32_prof);

        
        $__internal_b5dff2a40fff2cc28f5e2795ba164fb58c551cb87d1366be0b3f9540970259de->leave($__internal_b5dff2a40fff2cc28f5e2795ba164fb58c551cb87d1366be0b3f9540970259de_prof);

    }

    // line 31
    public function block_children($context, array $blocks = array())
    {
        $__internal_85a6c39ea7cb0656ff8ab5b80347df1934b15f096738f1a2d59c63872f20fdf6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_85a6c39ea7cb0656ff8ab5b80347df1934b15f096738f1a2d59c63872f20fdf6->enter($__internal_85a6c39ea7cb0656ff8ab5b80347df1934b15f096738f1a2d59c63872f20fdf6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "children"));

        $__internal_7755b1bc949dfc76531098fc9bb7b61332d727019fcaa559e466178062286663 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7755b1bc949dfc76531098fc9bb7b61332d727019fcaa559e466178062286663->enter($__internal_7755b1bc949dfc76531098fc9bb7b61332d727019fcaa559e466178062286663_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "children"));

        // line 33
        $context["currentOptions"] = ($context["options"] ?? $this->getContext($context, "options"));
        // line 34
        $context["currentItem"] = ($context["item"] ?? $this->getContext($context, "item"));
        // line 36
        if ( !(null === $this->getAttribute(($context["options"] ?? $this->getContext($context, "options")), "depth", array()))) {
            // line 37
            $context["options"] = twig_array_merge(($context["options"] ?? $this->getContext($context, "options")), array("depth" => ($this->getAttribute(($context["currentOptions"] ?? $this->getContext($context, "currentOptions")), "depth", array()) - 1)));
        }
        // line 40
        if (( !(null === $this->getAttribute(($context["options"] ?? $this->getContext($context, "options")), "matchingDepth", array())) && ($this->getAttribute(($context["options"] ?? $this->getContext($context, "options")), "matchingDepth", array()) > 0))) {
            // line 41
            $context["options"] = twig_array_merge(($context["options"] ?? $this->getContext($context, "options")), array("matchingDepth" => ($this->getAttribute(($context["currentOptions"] ?? $this->getContext($context, "currentOptions")), "matchingDepth", array()) - 1)));
        }
        // line 43
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["currentItem"] ?? $this->getContext($context, "currentItem")), "children", array()));
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
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 44
            echo "    ";
            $this->displayBlock("item", $context, $blocks);
            echo "
";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 47
        $context["item"] = ($context["currentItem"] ?? $this->getContext($context, "currentItem"));
        // line 48
        $context["options"] = ($context["currentOptions"] ?? $this->getContext($context, "currentOptions"));
        
        $__internal_7755b1bc949dfc76531098fc9bb7b61332d727019fcaa559e466178062286663->leave($__internal_7755b1bc949dfc76531098fc9bb7b61332d727019fcaa559e466178062286663_prof);

        
        $__internal_85a6c39ea7cb0656ff8ab5b80347df1934b15f096738f1a2d59c63872f20fdf6->leave($__internal_85a6c39ea7cb0656ff8ab5b80347df1934b15f096738f1a2d59c63872f20fdf6_prof);

    }

    // line 51
    public function block_item($context, array $blocks = array())
    {
        $__internal_09afface2aee0c7ba42db8cdd4bf1893a15550b2a08ccfe1854c342dc673c0d0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_09afface2aee0c7ba42db8cdd4bf1893a15550b2a08ccfe1854c342dc673c0d0->enter($__internal_09afface2aee0c7ba42db8cdd4bf1893a15550b2a08ccfe1854c342dc673c0d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "item"));

        $__internal_6006ff877f8f1a5a48ec4e068eeb97946399e615367288f831cc20a679d2223e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6006ff877f8f1a5a48ec4e068eeb97946399e615367288f831cc20a679d2223e->enter($__internal_6006ff877f8f1a5a48ec4e068eeb97946399e615367288f831cc20a679d2223e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "item"));

        // line 52
        if ($this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "displayed", array())) {
            // line 54
            $context["classes"] = (( !twig_test_empty($this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "attribute", array(0 => "class"), "method"))) ? (array(0 => $this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "attribute", array(0 => "class"), "method"))) : (array()));
            // line 55
            if ($this->getAttribute(($context["matcher"] ?? $this->getContext($context, "matcher")), "isCurrent", array(0 => ($context["item"] ?? $this->getContext($context, "item"))), "method")) {
                // line 56
                $context["classes"] = twig_array_merge(($context["classes"] ?? $this->getContext($context, "classes")), array(0 => $this->getAttribute(($context["options"] ?? $this->getContext($context, "options")), "currentClass", array())));
            } elseif ($this->getAttribute(            // line 57
($context["matcher"] ?? $this->getContext($context, "matcher")), "isAncestor", array(0 => ($context["item"] ?? $this->getContext($context, "item")), 1 => $this->getAttribute(($context["options"] ?? $this->getContext($context, "options")), "matchingDepth", array())), "method")) {
                // line 58
                $context["classes"] = twig_array_merge(($context["classes"] ?? $this->getContext($context, "classes")), array(0 => $this->getAttribute(($context["options"] ?? $this->getContext($context, "options")), "ancestorClass", array())));
            }
            // line 60
            if ($this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "actsLikeFirst", array())) {
                // line 61
                $context["classes"] = twig_array_merge(($context["classes"] ?? $this->getContext($context, "classes")), array(0 => $this->getAttribute(($context["options"] ?? $this->getContext($context, "options")), "firstClass", array())));
            }
            // line 63
            if ($this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "actsLikeLast", array())) {
                // line 64
                $context["classes"] = twig_array_merge(($context["classes"] ?? $this->getContext($context, "classes")), array(0 => $this->getAttribute(($context["options"] ?? $this->getContext($context, "options")), "lastClass", array())));
            }
            // line 66
            echo "
    ";
            // line 68
            echo "    ";
            if (($this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "hasChildren", array()) &&  !($this->getAttribute(($context["options"] ?? $this->getContext($context, "options")), "depth", array()) === 0))) {
                // line 69
                echo "        ";
                if (( !twig_test_empty($this->getAttribute(($context["options"] ?? $this->getContext($context, "options")), "branch_class", array())) && $this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "displayChildren", array()))) {
                    // line 70
                    $context["classes"] = twig_array_merge(($context["classes"] ?? $this->getContext($context, "classes")), array(0 => $this->getAttribute(($context["options"] ?? $this->getContext($context, "options")), "branch_class", array())));
                    // line 71
                    echo "        ";
                }
                // line 72
                echo "    ";
            } elseif ( !twig_test_empty($this->getAttribute(($context["options"] ?? $this->getContext($context, "options")), "leaf_class", array()))) {
                // line 73
                $context["classes"] = twig_array_merge(($context["classes"] ?? $this->getContext($context, "classes")), array(0 => $this->getAttribute(($context["options"] ?? $this->getContext($context, "options")), "leaf_class", array())));
            }
            // line 76
            $context["attributes"] = $this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "attributes", array());
            // line 77
            if ( !twig_test_empty(($context["classes"] ?? $this->getContext($context, "classes")))) {
                // line 78
                $context["attributes"] = twig_array_merge(($context["attributes"] ?? $this->getContext($context, "attributes")), array("class" => twig_join_filter(($context["classes"] ?? $this->getContext($context, "classes")), " ")));
            }
            // line 81
            echo "    ";
            $context["knp_menu"] = $this;
            // line 82
            echo "    <li";
            echo $context["knp_menu"]->getattributes(($context["attributes"] ?? $this->getContext($context, "attributes")));
            echo ">";
            // line 83
            if (( !twig_test_empty($this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "uri", array())) && ( !$this->getAttribute(($context["matcher"] ?? $this->getContext($context, "matcher")), "isCurrent", array(0 => ($context["item"] ?? $this->getContext($context, "item"))), "method") || $this->getAttribute(($context["options"] ?? $this->getContext($context, "options")), "currentAsLink", array())))) {
                // line 84
                echo "        ";
                $this->displayBlock("linkElement", $context, $blocks);
            } else {
                // line 86
                echo "        ";
                $this->displayBlock("spanElement", $context, $blocks);
            }
            // line 89
            $context["childrenClasses"] = (( !twig_test_empty($this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "childrenAttribute", array(0 => "class"), "method"))) ? (array(0 => $this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "childrenAttribute", array(0 => "class"), "method"))) : (array()));
            // line 90
            $context["childrenClasses"] = twig_array_merge(($context["childrenClasses"] ?? $this->getContext($context, "childrenClasses")), array(0 => ("menu_level_" . $this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "level", array()))));
            // line 91
            $context["listAttributes"] = twig_array_merge($this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "childrenAttributes", array()), array("class" => twig_join_filter(($context["childrenClasses"] ?? $this->getContext($context, "childrenClasses")), " ")));
            // line 92
            echo "        ";
            $this->displayBlock("list", $context, $blocks);
            echo "
    </li>
";
        }
        
        $__internal_6006ff877f8f1a5a48ec4e068eeb97946399e615367288f831cc20a679d2223e->leave($__internal_6006ff877f8f1a5a48ec4e068eeb97946399e615367288f831cc20a679d2223e_prof);

        
        $__internal_09afface2aee0c7ba42db8cdd4bf1893a15550b2a08ccfe1854c342dc673c0d0->leave($__internal_09afface2aee0c7ba42db8cdd4bf1893a15550b2a08ccfe1854c342dc673c0d0_prof);

    }

    // line 97
    public function block_linkElement($context, array $blocks = array())
    {
        $__internal_b5347dfe7a3c4953ca75213a724bd0dd06d1178109822810a27098b41a36e4a6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b5347dfe7a3c4953ca75213a724bd0dd06d1178109822810a27098b41a36e4a6->enter($__internal_b5347dfe7a3c4953ca75213a724bd0dd06d1178109822810a27098b41a36e4a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "linkElement"));

        $__internal_93a1ef9f6fcc68df98b452eaa993a05e616ef9acb908c5a13c7111fc771bd3ba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_93a1ef9f6fcc68df98b452eaa993a05e616ef9acb908c5a13c7111fc771bd3ba->enter($__internal_93a1ef9f6fcc68df98b452eaa993a05e616ef9acb908c5a13c7111fc771bd3ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "linkElement"));

        $context["knp_menu"] = $this;
        echo "<a href=\"";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "uri", array()), "html", null, true);
        echo "\"";
        echo $context["knp_menu"]->getattributes($this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "linkAttributes", array()));
        echo ">";
        $this->displayBlock("label", $context, $blocks);
        echo "</a>";
        
        $__internal_93a1ef9f6fcc68df98b452eaa993a05e616ef9acb908c5a13c7111fc771bd3ba->leave($__internal_93a1ef9f6fcc68df98b452eaa993a05e616ef9acb908c5a13c7111fc771bd3ba_prof);

        
        $__internal_b5347dfe7a3c4953ca75213a724bd0dd06d1178109822810a27098b41a36e4a6->leave($__internal_b5347dfe7a3c4953ca75213a724bd0dd06d1178109822810a27098b41a36e4a6_prof);

    }

    // line 99
    public function block_spanElement($context, array $blocks = array())
    {
        $__internal_fe74d0ab22a0b15d5133067bf8a1c14aad704fa7f568119d8db148f4a48cee8c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fe74d0ab22a0b15d5133067bf8a1c14aad704fa7f568119d8db148f4a48cee8c->enter($__internal_fe74d0ab22a0b15d5133067bf8a1c14aad704fa7f568119d8db148f4a48cee8c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "spanElement"));

        $__internal_202d00829c53debcb0aa4ecd914c79ae7df3f9a7b5800cca043425c3cc7c8ef1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_202d00829c53debcb0aa4ecd914c79ae7df3f9a7b5800cca043425c3cc7c8ef1->enter($__internal_202d00829c53debcb0aa4ecd914c79ae7df3f9a7b5800cca043425c3cc7c8ef1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "spanElement"));

        $context["knp_menu"] = $this;
        echo "<span";
        echo $context["knp_menu"]->getattributes($this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "labelAttributes", array()));
        echo ">";
        $this->displayBlock("label", $context, $blocks);
        echo "</span>";
        
        $__internal_202d00829c53debcb0aa4ecd914c79ae7df3f9a7b5800cca043425c3cc7c8ef1->leave($__internal_202d00829c53debcb0aa4ecd914c79ae7df3f9a7b5800cca043425c3cc7c8ef1_prof);

        
        $__internal_fe74d0ab22a0b15d5133067bf8a1c14aad704fa7f568119d8db148f4a48cee8c->leave($__internal_fe74d0ab22a0b15d5133067bf8a1c14aad704fa7f568119d8db148f4a48cee8c_prof);

    }

    // line 101
    public function block_label($context, array $blocks = array())
    {
        $__internal_449623fc9ec0e81161d978a6fefbe3adb0cd1ae920b9d3e9be4372e61e437f71 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_449623fc9ec0e81161d978a6fefbe3adb0cd1ae920b9d3e9be4372e61e437f71->enter($__internal_449623fc9ec0e81161d978a6fefbe3adb0cd1ae920b9d3e9be4372e61e437f71_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "label"));

        $__internal_1b9feb79a6944c9119beae15c8bcd0f52e26a38402cf256371e271d0b1cba2ff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1b9feb79a6944c9119beae15c8bcd0f52e26a38402cf256371e271d0b1cba2ff->enter($__internal_1b9feb79a6944c9119beae15c8bcd0f52e26a38402cf256371e271d0b1cba2ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "label"));

        if (($this->getAttribute(($context["options"] ?? $this->getContext($context, "options")), "allow_safe_labels", array()) && $this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "getExtra", array(0 => "safe_label", 1 => false), "method"))) {
            echo $this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "label", array());
        } else {
            echo twig_escape_filter($this->env, $this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "label", array()), "html", null, true);
        }
        
        $__internal_1b9feb79a6944c9119beae15c8bcd0f52e26a38402cf256371e271d0b1cba2ff->leave($__internal_1b9feb79a6944c9119beae15c8bcd0f52e26a38402cf256371e271d0b1cba2ff_prof);

        
        $__internal_449623fc9ec0e81161d978a6fefbe3adb0cd1ae920b9d3e9be4372e61e437f71->leave($__internal_449623fc9ec0e81161d978a6fefbe3adb0cd1ae920b9d3e9be4372e61e437f71_prof);

    }

    // line 3
    public function getattributes($__attributes__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "attributes" => $__attributes__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_dc6e72634d2333727504cfd0b515dead8983245bba59eec153d8dbf17095407d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
            $__internal_dc6e72634d2333727504cfd0b515dead8983245bba59eec153d8dbf17095407d->enter($__internal_dc6e72634d2333727504cfd0b515dead8983245bba59eec153d8dbf17095407d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "attributes"));

            $__internal_371687122f0628ca7782a7d1eb913ebc2db47f3a92c10df20cff48118118a264 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
            $__internal_371687122f0628ca7782a7d1eb913ebc2db47f3a92c10df20cff48118118a264->enter($__internal_371687122f0628ca7782a7d1eb913ebc2db47f3a92c10df20cff48118118a264_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "attributes"));

            // line 4
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["attributes"] ?? $this->getContext($context, "attributes")));
            foreach ($context['_seq'] as $context["name"] => $context["value"]) {
                // line 5
                if (( !(null === $context["value"]) &&  !($context["value"] === false))) {
                    // line 6
                    echo sprintf(" %s=\"%s\"", $context["name"], ((($context["value"] === true)) ? (twig_escape_filter($this->env, $context["name"])) : (twig_escape_filter($this->env, $context["value"]))));
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['name'], $context['value'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            
            $__internal_371687122f0628ca7782a7d1eb913ebc2db47f3a92c10df20cff48118118a264->leave($__internal_371687122f0628ca7782a7d1eb913ebc2db47f3a92c10df20cff48118118a264_prof);

            
            $__internal_dc6e72634d2333727504cfd0b515dead8983245bba59eec153d8dbf17095407d->leave($__internal_dc6e72634d2333727504cfd0b515dead8983245bba59eec153d8dbf17095407d_prof);

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
        return "knp_menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  385 => 6,  383 => 5,  379 => 4,  361 => 3,  339 => 101,  316 => 99,  291 => 97,  276 => 92,  274 => 91,  272 => 90,  270 => 89,  266 => 86,  262 => 84,  260 => 83,  256 => 82,  253 => 81,  250 => 78,  248 => 77,  246 => 76,  243 => 73,  240 => 72,  237 => 71,  235 => 70,  232 => 69,  229 => 68,  226 => 66,  223 => 64,  221 => 63,  218 => 61,  216 => 60,  213 => 58,  211 => 57,  209 => 56,  207 => 55,  205 => 54,  203 => 52,  194 => 51,  184 => 48,  182 => 47,  165 => 44,  148 => 43,  145 => 41,  143 => 40,  140 => 37,  138 => 36,  136 => 34,  134 => 33,  125 => 31,  111 => 26,  106 => 25,  103 => 24,  101 => 23,  92 => 22,  82 => 19,  80 => 18,  71 => 17,  58 => 13,  56 => 12,  47 => 11,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'knp_menu_base.html.twig' %}

{% macro attributes(attributes) %}
{% for name, value in attributes %}
    {%- if value is not none and value is not same as(false) -%}
        {{- ' %s=\"%s\"'|format(name, value is same as(true) ? name|e : value|e)|raw -}}
    {%- endif -%}
{%- endfor -%}
{% endmacro %}

{% block compressed_root %}
{% spaceless %}
{{ block('root') }}
{% endspaceless %}
{% endblock %}

{% block root %}
{% set listAttributes = item.childrenAttributes %}
{{ block('list') -}}
{% endblock %}

{% block list %}
{% if item.hasChildren and options.depth is not same as(0) and item.displayChildren %}
    {% import _self as knp_menu %}
    <ul{{ knp_menu.attributes(listAttributes) }}>
        {{ block('children') }}
    </ul>
{% endif %}
{% endblock %}

{% block children %}
{# save current variables #}
{% set currentOptions = options %}
{% set currentItem = item %}
{# update the depth for children #}
{% if options.depth is not none %}
{% set options = options|merge({'depth': currentOptions.depth - 1}) %}
{% endif %}
{# update the matchingDepth for children #}
{% if options.matchingDepth is not none and options.matchingDepth > 0 %}
{% set options = options|merge({'matchingDepth': currentOptions.matchingDepth - 1}) %}
{% endif %}
{% for item in currentItem.children %}
    {{ block('item') }}
{% endfor %}
{# restore current variables #}
{% set item = currentItem %}
{% set options = currentOptions %}
{% endblock %}

{% block item %}
{% if item.displayed %}
{# building the class of the item #}
    {%- set classes = item.attribute('class') is not empty ? [item.attribute('class')] : [] %}
    {%- if matcher.isCurrent(item) %}
        {%- set classes = classes|merge([options.currentClass]) %}
    {%- elseif matcher.isAncestor(item, options.matchingDepth) %}
        {%- set classes = classes|merge([options.ancestorClass]) %}
    {%- endif %}
    {%- if item.actsLikeFirst %}
        {%- set classes = classes|merge([options.firstClass]) %}
    {%- endif %}
    {%- if item.actsLikeLast %}
        {%- set classes = classes|merge([options.lastClass]) %}
    {%- endif %}

    {# Mark item as \"leaf\" (no children) or as \"branch\" (has children that are displayed) #}
    {% if item.hasChildren and options.depth is not same as(0) %}
        {% if options.branch_class is not empty and item.displayChildren %}
            {%- set classes = classes|merge([options.branch_class]) %}
        {% endif %}
    {% elseif options.leaf_class is not empty %}
        {%- set classes = classes|merge([options.leaf_class]) %}
    {%- endif %}

    {%- set attributes = item.attributes %}
    {%- if classes is not empty %}
        {%- set attributes = attributes|merge({'class': classes|join(' ')}) %}
    {%- endif %}
{# displaying the item #}
    {% import _self as knp_menu %}
    <li{{ knp_menu.attributes(attributes) }}>
        {%- if item.uri is not empty and (not matcher.isCurrent(item) or options.currentAsLink) %}
        {{ block('linkElement') }}
        {%- else %}
        {{ block('spanElement') }}
        {%- endif %}
{# render the list of children#}
        {%- set childrenClasses = item.childrenAttribute('class') is not empty ? [item.childrenAttribute('class')] : [] %}
        {%- set childrenClasses = childrenClasses|merge(['menu_level_' ~ item.level]) %}
        {%- set listAttributes = item.childrenAttributes|merge({'class': childrenClasses|join(' ') }) %}
        {{ block('list') }}
    </li>
{% endif %}
{% endblock %}

{% block linkElement %}{% import _self as knp_menu %}<a href=\"{{ item.uri }}\"{{ knp_menu.attributes(item.linkAttributes) }}>{{ block('label') }}</a>{% endblock %}

{% block spanElement %}{% import _self as knp_menu %}<span{{ knp_menu.attributes(item.labelAttributes) }}>{{ block('label') }}</span>{% endblock %}

{% block label %}{% if options.allow_safe_labels and item.getExtra('safe_label', false) %}{{ item.label|raw }}{% else %}{{ item.label }}{% endif %}{% endblock %}
", "knp_menu.html.twig", "/var/www/b2.2017/Blog/vendor/knplabs/knp-menu/src/Knp/Menu/Resources/views/knp_menu.html.twig");
    }
}
