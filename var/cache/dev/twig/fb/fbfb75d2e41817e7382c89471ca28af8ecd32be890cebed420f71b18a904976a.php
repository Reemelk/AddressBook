<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_f7cb078d89b851a8bb433315e30925801ab2589fd96dcba2e2d8a7eeac0c57c4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2765202c136abca2e509a60e219d659bdc849d4fe4c9e82644f9b29501fb8778 = $this->env->getExtension("native_profiler");
        $__internal_2765202c136abca2e509a60e219d659bdc849d4fe4c9e82644f9b29501fb8778->enter($__internal_2765202c136abca2e509a60e219d659bdc849d4fe4c9e82644f9b29501fb8778_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_2765202c136abca2e509a60e219d659bdc849d4fe4c9e82644f9b29501fb8778->leave($__internal_2765202c136abca2e509a60e219d659bdc849d4fe4c9e82644f9b29501fb8778_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_9a955ba673e23ee215066dd4dee253b32d934176f490f39359686a4fb6215791 = $this->env->getExtension("native_profiler");
        $__internal_9a955ba673e23ee215066dd4dee253b32d934176f490f39359686a4fb6215791->enter($__internal_9a955ba673e23ee215066dd4dee253b32d934176f490f39359686a4fb6215791_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_9a955ba673e23ee215066dd4dee253b32d934176f490f39359686a4fb6215791->leave($__internal_9a955ba673e23ee215066dd4dee253b32d934176f490f39359686a4fb6215791_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }
}
/* {% block panel '' %}*/
/* */
