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
        $__internal_4054183de72119237d5cb943392a647de7abbe19c61979910ac94e946e7453a8 = $this->env->getExtension("native_profiler");
        $__internal_4054183de72119237d5cb943392a647de7abbe19c61979910ac94e946e7453a8->enter($__internal_4054183de72119237d5cb943392a647de7abbe19c61979910ac94e946e7453a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_4054183de72119237d5cb943392a647de7abbe19c61979910ac94e946e7453a8->leave($__internal_4054183de72119237d5cb943392a647de7abbe19c61979910ac94e946e7453a8_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_11441ddc4fd3308f167895957c1e1d8bd1839e02448ad9ef8dd3a54039951b32 = $this->env->getExtension("native_profiler");
        $__internal_11441ddc4fd3308f167895957c1e1d8bd1839e02448ad9ef8dd3a54039951b32->enter($__internal_11441ddc4fd3308f167895957c1e1d8bd1839e02448ad9ef8dd3a54039951b32_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_11441ddc4fd3308f167895957c1e1d8bd1839e02448ad9ef8dd3a54039951b32->leave($__internal_11441ddc4fd3308f167895957c1e1d8bd1839e02448ad9ef8dd3a54039951b32_prof);

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
