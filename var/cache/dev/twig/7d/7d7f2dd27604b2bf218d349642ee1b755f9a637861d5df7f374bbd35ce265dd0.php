<?php

/* @Twig/Exception/error.atom.twig */
class __TwigTemplate_85f21453e80c77551ae5ac16aebfba37fa42f925c5523a72e9375fe0f43c3a64 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b944acffc03a0eaec7fb9d3005b6bdafa9ccfa2229338b0a21a4c362b1530caa = $this->env->getExtension("native_profiler");
        $__internal_b944acffc03a0eaec7fb9d3005b6bdafa9ccfa2229338b0a21a4c362b1530caa->enter($__internal_b944acffc03a0eaec7fb9d3005b6bdafa9ccfa2229338b0a21a4c362b1530caa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "@Twig/Exception/error.atom.twig", 1)->display($context);
        
        $__internal_b944acffc03a0eaec7fb9d3005b6bdafa9ccfa2229338b0a21a4c362b1530caa->leave($__internal_b944acffc03a0eaec7fb9d3005b6bdafa9ccfa2229338b0a21a4c362b1530caa_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.atom.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/error.xml.twig' %}*/
/* */
