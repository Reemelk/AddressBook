<?php

/* @WebProfiler/Profiler/ajax_layout.html.twig */
class __TwigTemplate_d8f396c5b6197075a9e07d400b41dab4b174907c0d7164bc9d3a11d328db320b extends Twig_Template
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
        $__internal_d3fa811d4120d3dd0b26dd952b2311279932d88504c460524e8d58efd9d0ebfc = $this->env->getExtension("native_profiler");
        $__internal_d3fa811d4120d3dd0b26dd952b2311279932d88504c460524e8d58efd9d0ebfc->enter($__internal_d3fa811d4120d3dd0b26dd952b2311279932d88504c460524e8d58efd9d0ebfc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_d3fa811d4120d3dd0b26dd952b2311279932d88504c460524e8d58efd9d0ebfc->leave($__internal_d3fa811d4120d3dd0b26dd952b2311279932d88504c460524e8d58efd9d0ebfc_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_0ec3de1563eead0f7dc09e8991c8cae07367a9f68bcd8f85f4a355ab060910c6 = $this->env->getExtension("native_profiler");
        $__internal_0ec3de1563eead0f7dc09e8991c8cae07367a9f68bcd8f85f4a355ab060910c6->enter($__internal_0ec3de1563eead0f7dc09e8991c8cae07367a9f68bcd8f85f4a355ab060910c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_0ec3de1563eead0f7dc09e8991c8cae07367a9f68bcd8f85f4a355ab060910c6->leave($__internal_0ec3de1563eead0f7dc09e8991c8cae07367a9f68bcd8f85f4a355ab060910c6_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }
}
/* {% block panel '' %}*/
/* */
