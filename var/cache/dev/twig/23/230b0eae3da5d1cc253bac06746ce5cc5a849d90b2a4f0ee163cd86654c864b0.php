<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_45ec59eed5dad6352b94d01ac6418f4ff3777565e67775300f98f4b9534355ce extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f15d6949f377ac8ca283dac8e4ed201b990a20526edc3c04019bd0f7666bbace = $this->env->getExtension("native_profiler");
        $__internal_f15d6949f377ac8ca283dac8e4ed201b990a20526edc3c04019bd0f7666bbace->enter($__internal_f15d6949f377ac8ca283dac8e4ed201b990a20526edc3c04019bd0f7666bbace_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f15d6949f377ac8ca283dac8e4ed201b990a20526edc3c04019bd0f7666bbace->leave($__internal_f15d6949f377ac8ca283dac8e4ed201b990a20526edc3c04019bd0f7666bbace_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_094be0020fc26bcac71fa748081df40f87e18e96953874d266a03e0c0163c9b9 = $this->env->getExtension("native_profiler");
        $__internal_094be0020fc26bcac71fa748081df40f87e18e96953874d266a03e0c0163c9b9->enter($__internal_094be0020fc26bcac71fa748081df40f87e18e96953874d266a03e0c0163c9b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_094be0020fc26bcac71fa748081df40f87e18e96953874d266a03e0c0163c9b9->leave($__internal_094be0020fc26bcac71fa748081df40f87e18e96953874d266a03e0c0163c9b9_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_452dacc18679ee362520ba88e75a37b1d954bcd1051319165ff34141774b038d = $this->env->getExtension("native_profiler");
        $__internal_452dacc18679ee362520ba88e75a37b1d954bcd1051319165ff34141774b038d->enter($__internal_452dacc18679ee362520ba88e75a37b1d954bcd1051319165ff34141774b038d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_452dacc18679ee362520ba88e75a37b1d954bcd1051319165ff34141774b038d->leave($__internal_452dacc18679ee362520ba88e75a37b1d954bcd1051319165ff34141774b038d_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_ceb2c97019e4e9042da9746de6c5d17fbfa3af74ce43c6bec23ea09b19427c57 = $this->env->getExtension("native_profiler");
        $__internal_ceb2c97019e4e9042da9746de6c5d17fbfa3af74ce43c6bec23ea09b19427c57->enter($__internal_ceb2c97019e4e9042da9746de6c5d17fbfa3af74ce43c6bec23ea09b19427c57_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_ceb2c97019e4e9042da9746de6c5d17fbfa3af74ce43c6bec23ea09b19427c57->leave($__internal_ceb2c97019e4e9042da9746de6c5d17fbfa3af74ce43c6bec23ea09b19427c57_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block toolbar %}{% endblock %}*/
/* */
/* {% block menu %}*/
/* <span class="label">*/
/*     <span class="icon">{{ include('@WebProfiler/Icon/router.svg') }}</span>*/
/*     <strong>Routing</strong>*/
/* </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     {{ render(path('_profiler_router', { token: token })) }}*/
/* {% endblock %}*/
/* */
