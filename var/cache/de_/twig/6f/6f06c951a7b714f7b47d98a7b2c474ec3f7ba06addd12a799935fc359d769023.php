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
        $__internal_c5446ce090059db8a90c0e487e542359139c7a3b7603df22fdab9ec2e6397515 = $this->env->getExtension("native_profiler");
        $__internal_c5446ce090059db8a90c0e487e542359139c7a3b7603df22fdab9ec2e6397515->enter($__internal_c5446ce090059db8a90c0e487e542359139c7a3b7603df22fdab9ec2e6397515_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c5446ce090059db8a90c0e487e542359139c7a3b7603df22fdab9ec2e6397515->leave($__internal_c5446ce090059db8a90c0e487e542359139c7a3b7603df22fdab9ec2e6397515_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_464b1f3583290033505f45d3f29ed6c49b082e651005b78437fcc372fea65e7d = $this->env->getExtension("native_profiler");
        $__internal_464b1f3583290033505f45d3f29ed6c49b082e651005b78437fcc372fea65e7d->enter($__internal_464b1f3583290033505f45d3f29ed6c49b082e651005b78437fcc372fea65e7d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_464b1f3583290033505f45d3f29ed6c49b082e651005b78437fcc372fea65e7d->leave($__internal_464b1f3583290033505f45d3f29ed6c49b082e651005b78437fcc372fea65e7d_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_e4d48ddd389100ad9effb15e9e89b7e382d7e85fabb801adf8208ec7ceabe030 = $this->env->getExtension("native_profiler");
        $__internal_e4d48ddd389100ad9effb15e9e89b7e382d7e85fabb801adf8208ec7ceabe030->enter($__internal_e4d48ddd389100ad9effb15e9e89b7e382d7e85fabb801adf8208ec7ceabe030_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_e4d48ddd389100ad9effb15e9e89b7e382d7e85fabb801adf8208ec7ceabe030->leave($__internal_e4d48ddd389100ad9effb15e9e89b7e382d7e85fabb801adf8208ec7ceabe030_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_82b47769ccf6a44573fae579cc51f1ef2dbc347170d88a35552582fc5c733a29 = $this->env->getExtension("native_profiler");
        $__internal_82b47769ccf6a44573fae579cc51f1ef2dbc347170d88a35552582fc5c733a29->enter($__internal_82b47769ccf6a44573fae579cc51f1ef2dbc347170d88a35552582fc5c733a29_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_82b47769ccf6a44573fae579cc51f1ef2dbc347170d88a35552582fc5c733a29->leave($__internal_82b47769ccf6a44573fae579cc51f1ef2dbc347170d88a35552582fc5c733a29_prof);

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
