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
        $__internal_3f398cb180fc5bb6211eb0ff5bf836f3fcb34046a37156f11bcdad0ecbef1ee8 = $this->env->getExtension("native_profiler");
        $__internal_3f398cb180fc5bb6211eb0ff5bf836f3fcb34046a37156f11bcdad0ecbef1ee8->enter($__internal_3f398cb180fc5bb6211eb0ff5bf836f3fcb34046a37156f11bcdad0ecbef1ee8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_3f398cb180fc5bb6211eb0ff5bf836f3fcb34046a37156f11bcdad0ecbef1ee8->leave($__internal_3f398cb180fc5bb6211eb0ff5bf836f3fcb34046a37156f11bcdad0ecbef1ee8_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_b294b906126e37f6d51fcff0e6f7f7171ba2559181c32ac314e5654ea7d59bcb = $this->env->getExtension("native_profiler");
        $__internal_b294b906126e37f6d51fcff0e6f7f7171ba2559181c32ac314e5654ea7d59bcb->enter($__internal_b294b906126e37f6d51fcff0e6f7f7171ba2559181c32ac314e5654ea7d59bcb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_b294b906126e37f6d51fcff0e6f7f7171ba2559181c32ac314e5654ea7d59bcb->leave($__internal_b294b906126e37f6d51fcff0e6f7f7171ba2559181c32ac314e5654ea7d59bcb_prof);

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
