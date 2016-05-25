<?php

/* WebProfilerBundle:Collector:router.html.twig */
class __TwigTemplate_b6522de5d4599cc74485be4f37bf558385c0993cac4554c57491d86005c98fe7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:router.html.twig", 1);
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
        $__internal_5bbd1c4fca9857bcb90c67f42bfd6f5e69d67f6fcf5a4039d32ed8870bdb7b80 = $this->env->getExtension("native_profiler");
        $__internal_5bbd1c4fca9857bcb90c67f42bfd6f5e69d67f6fcf5a4039d32ed8870bdb7b80->enter($__internal_5bbd1c4fca9857bcb90c67f42bfd6f5e69d67f6fcf5a4039d32ed8870bdb7b80_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5bbd1c4fca9857bcb90c67f42bfd6f5e69d67f6fcf5a4039d32ed8870bdb7b80->leave($__internal_5bbd1c4fca9857bcb90c67f42bfd6f5e69d67f6fcf5a4039d32ed8870bdb7b80_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_0b355cdc8d985f128cd7e0f4051ab8827ac33eaa196845e081102ab8f63bc9cf = $this->env->getExtension("native_profiler");
        $__internal_0b355cdc8d985f128cd7e0f4051ab8827ac33eaa196845e081102ab8f63bc9cf->enter($__internal_0b355cdc8d985f128cd7e0f4051ab8827ac33eaa196845e081102ab8f63bc9cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_0b355cdc8d985f128cd7e0f4051ab8827ac33eaa196845e081102ab8f63bc9cf->leave($__internal_0b355cdc8d985f128cd7e0f4051ab8827ac33eaa196845e081102ab8f63bc9cf_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_7e5beb9836c51e15d63d4fab128188e39cf1ae4ea9418509fc7e14c810ea691e = $this->env->getExtension("native_profiler");
        $__internal_7e5beb9836c51e15d63d4fab128188e39cf1ae4ea9418509fc7e14c810ea691e->enter($__internal_7e5beb9836c51e15d63d4fab128188e39cf1ae4ea9418509fc7e14c810ea691e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_7e5beb9836c51e15d63d4fab128188e39cf1ae4ea9418509fc7e14c810ea691e->leave($__internal_7e5beb9836c51e15d63d4fab128188e39cf1ae4ea9418509fc7e14c810ea691e_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_80dc6a02823aceae1f2b7e9a00765cc2e39c74e6107e47c40f4d3638fce97869 = $this->env->getExtension("native_profiler");
        $__internal_80dc6a02823aceae1f2b7e9a00765cc2e39c74e6107e47c40f4d3638fce97869->enter($__internal_80dc6a02823aceae1f2b7e9a00765cc2e39c74e6107e47c40f4d3638fce97869_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_80dc6a02823aceae1f2b7e9a00765cc2e39c74e6107e47c40f4d3638fce97869->leave($__internal_80dc6a02823aceae1f2b7e9a00765cc2e39c74e6107e47c40f4d3638fce97869_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:router.html.twig";
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
