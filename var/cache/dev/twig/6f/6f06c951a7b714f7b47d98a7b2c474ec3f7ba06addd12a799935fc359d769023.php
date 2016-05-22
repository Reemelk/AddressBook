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
        $__internal_3fb1930a3d1be9b83abda466fd48c87f61021b62f2386da0d01172cb6a2a8821 = $this->env->getExtension("native_profiler");
        $__internal_3fb1930a3d1be9b83abda466fd48c87f61021b62f2386da0d01172cb6a2a8821->enter($__internal_3fb1930a3d1be9b83abda466fd48c87f61021b62f2386da0d01172cb6a2a8821_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3fb1930a3d1be9b83abda466fd48c87f61021b62f2386da0d01172cb6a2a8821->leave($__internal_3fb1930a3d1be9b83abda466fd48c87f61021b62f2386da0d01172cb6a2a8821_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_c8835b42c3753450a402348f763d085ee6368c68794a2ba38fda29c1e8ad835f = $this->env->getExtension("native_profiler");
        $__internal_c8835b42c3753450a402348f763d085ee6368c68794a2ba38fda29c1e8ad835f->enter($__internal_c8835b42c3753450a402348f763d085ee6368c68794a2ba38fda29c1e8ad835f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_c8835b42c3753450a402348f763d085ee6368c68794a2ba38fda29c1e8ad835f->leave($__internal_c8835b42c3753450a402348f763d085ee6368c68794a2ba38fda29c1e8ad835f_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_62b1dfd06d0037dd0fa75e3531600400cda955c1c14d05caa74c12f29b0491c4 = $this->env->getExtension("native_profiler");
        $__internal_62b1dfd06d0037dd0fa75e3531600400cda955c1c14d05caa74c12f29b0491c4->enter($__internal_62b1dfd06d0037dd0fa75e3531600400cda955c1c14d05caa74c12f29b0491c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_62b1dfd06d0037dd0fa75e3531600400cda955c1c14d05caa74c12f29b0491c4->leave($__internal_62b1dfd06d0037dd0fa75e3531600400cda955c1c14d05caa74c12f29b0491c4_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_d9d5c7593b2b1f83cb51d98e0dd7276f9438afaa2ce1922f035cc15706db09e8 = $this->env->getExtension("native_profiler");
        $__internal_d9d5c7593b2b1f83cb51d98e0dd7276f9438afaa2ce1922f035cc15706db09e8->enter($__internal_d9d5c7593b2b1f83cb51d98e0dd7276f9438afaa2ce1922f035cc15706db09e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_d9d5c7593b2b1f83cb51d98e0dd7276f9438afaa2ce1922f035cc15706db09e8->leave($__internal_d9d5c7593b2b1f83cb51d98e0dd7276f9438afaa2ce1922f035cc15706db09e8_prof);

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
