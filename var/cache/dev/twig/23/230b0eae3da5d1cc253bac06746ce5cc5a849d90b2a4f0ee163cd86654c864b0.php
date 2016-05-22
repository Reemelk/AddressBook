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
        $__internal_340af22729907d33735fb2c434ef72741c6ca4cfb8fd9825222e2df3377b760a = $this->env->getExtension("native_profiler");
        $__internal_340af22729907d33735fb2c434ef72741c6ca4cfb8fd9825222e2df3377b760a->enter($__internal_340af22729907d33735fb2c434ef72741c6ca4cfb8fd9825222e2df3377b760a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_340af22729907d33735fb2c434ef72741c6ca4cfb8fd9825222e2df3377b760a->leave($__internal_340af22729907d33735fb2c434ef72741c6ca4cfb8fd9825222e2df3377b760a_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_e98bb7e3bc509634f7375e338eb1d47340eb7cf3ceb32fc58710287ba97be91a = $this->env->getExtension("native_profiler");
        $__internal_e98bb7e3bc509634f7375e338eb1d47340eb7cf3ceb32fc58710287ba97be91a->enter($__internal_e98bb7e3bc509634f7375e338eb1d47340eb7cf3ceb32fc58710287ba97be91a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_e98bb7e3bc509634f7375e338eb1d47340eb7cf3ceb32fc58710287ba97be91a->leave($__internal_e98bb7e3bc509634f7375e338eb1d47340eb7cf3ceb32fc58710287ba97be91a_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_2753f061e87db36b3bcf910084bb7ebb02ece22f327bf269d6821d600d734b2e = $this->env->getExtension("native_profiler");
        $__internal_2753f061e87db36b3bcf910084bb7ebb02ece22f327bf269d6821d600d734b2e->enter($__internal_2753f061e87db36b3bcf910084bb7ebb02ece22f327bf269d6821d600d734b2e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_2753f061e87db36b3bcf910084bb7ebb02ece22f327bf269d6821d600d734b2e->leave($__internal_2753f061e87db36b3bcf910084bb7ebb02ece22f327bf269d6821d600d734b2e_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_813ed429af45545bf67a5c89a4479fedf296f5a5752bd486d45eb8fabb923b2a = $this->env->getExtension("native_profiler");
        $__internal_813ed429af45545bf67a5c89a4479fedf296f5a5752bd486d45eb8fabb923b2a->enter($__internal_813ed429af45545bf67a5c89a4479fedf296f5a5752bd486d45eb8fabb923b2a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_813ed429af45545bf67a5c89a4479fedf296f5a5752bd486d45eb8fabb923b2a->leave($__internal_813ed429af45545bf67a5c89a4479fedf296f5a5752bd486d45eb8fabb923b2a_prof);

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
