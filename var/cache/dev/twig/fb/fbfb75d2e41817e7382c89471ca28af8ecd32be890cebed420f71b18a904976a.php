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
        $__internal_4d398f7c9af93f81d419289ce47f1d250699b57a4f3fb69fdfb1a447a28b6713 = $this->env->getExtension("native_profiler");
        $__internal_4d398f7c9af93f81d419289ce47f1d250699b57a4f3fb69fdfb1a447a28b6713->enter($__internal_4d398f7c9af93f81d419289ce47f1d250699b57a4f3fb69fdfb1a447a28b6713_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_4d398f7c9af93f81d419289ce47f1d250699b57a4f3fb69fdfb1a447a28b6713->leave($__internal_4d398f7c9af93f81d419289ce47f1d250699b57a4f3fb69fdfb1a447a28b6713_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_b8d0e44138b77caea69401372993d8dea34e3d5bf83b93c512ecbf7175e0247b = $this->env->getExtension("native_profiler");
        $__internal_b8d0e44138b77caea69401372993d8dea34e3d5bf83b93c512ecbf7175e0247b->enter($__internal_b8d0e44138b77caea69401372993d8dea34e3d5bf83b93c512ecbf7175e0247b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_b8d0e44138b77caea69401372993d8dea34e3d5bf83b93c512ecbf7175e0247b->leave($__internal_b8d0e44138b77caea69401372993d8dea34e3d5bf83b93c512ecbf7175e0247b_prof);

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
