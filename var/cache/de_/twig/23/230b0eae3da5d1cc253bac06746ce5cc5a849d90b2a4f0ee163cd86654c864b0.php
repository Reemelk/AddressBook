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
        $__internal_a707ad08d378e8c266518014b470f2f16b73ada4608abe73bcb7f836d862d6cb = $this->env->getExtension("native_profiler");
        $__internal_a707ad08d378e8c266518014b470f2f16b73ada4608abe73bcb7f836d862d6cb->enter($__internal_a707ad08d378e8c266518014b470f2f16b73ada4608abe73bcb7f836d862d6cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a707ad08d378e8c266518014b470f2f16b73ada4608abe73bcb7f836d862d6cb->leave($__internal_a707ad08d378e8c266518014b470f2f16b73ada4608abe73bcb7f836d862d6cb_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_dd2e6f169fe4aee1fba858a4ac46977c34e420967d9d1ed434e1801a1139089e = $this->env->getExtension("native_profiler");
        $__internal_dd2e6f169fe4aee1fba858a4ac46977c34e420967d9d1ed434e1801a1139089e->enter($__internal_dd2e6f169fe4aee1fba858a4ac46977c34e420967d9d1ed434e1801a1139089e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_dd2e6f169fe4aee1fba858a4ac46977c34e420967d9d1ed434e1801a1139089e->leave($__internal_dd2e6f169fe4aee1fba858a4ac46977c34e420967d9d1ed434e1801a1139089e_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_4f3d609fea38f28c1a8794309e38a3bdb73c13cdcbfafc3a6d8febe65c1d8100 = $this->env->getExtension("native_profiler");
        $__internal_4f3d609fea38f28c1a8794309e38a3bdb73c13cdcbfafc3a6d8febe65c1d8100->enter($__internal_4f3d609fea38f28c1a8794309e38a3bdb73c13cdcbfafc3a6d8febe65c1d8100_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_4f3d609fea38f28c1a8794309e38a3bdb73c13cdcbfafc3a6d8febe65c1d8100->leave($__internal_4f3d609fea38f28c1a8794309e38a3bdb73c13cdcbfafc3a6d8febe65c1d8100_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_a787989e25673f59be1b8c6df7cb152053473b3c36071dab4521c3d0d576cae4 = $this->env->getExtension("native_profiler");
        $__internal_a787989e25673f59be1b8c6df7cb152053473b3c36071dab4521c3d0d576cae4->enter($__internal_a787989e25673f59be1b8c6df7cb152053473b3c36071dab4521c3d0d576cae4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_a787989e25673f59be1b8c6df7cb152053473b3c36071dab4521c3d0d576cae4->leave($__internal_a787989e25673f59be1b8c6df7cb152053473b3c36071dab4521c3d0d576cae4_prof);

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
