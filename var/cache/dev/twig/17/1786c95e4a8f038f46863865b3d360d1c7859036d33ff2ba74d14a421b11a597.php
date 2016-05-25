<?php

/* UserBundle:Resetting:request.html.twig */
class __TwigTemplate_9b9fa3ea0be64633c99b47d01b0c0ce2006462771efa51b9f55bd1793e8bd2f9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "UserBundle:Resetting:request.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ae21d3386e1c3d523b1996c79a0d22840cbc2e6c8c871d197ea197fe43ab8c6f = $this->env->getExtension("native_profiler");
        $__internal_ae21d3386e1c3d523b1996c79a0d22840cbc2e6c8c871d197ea197fe43ab8c6f->enter($__internal_ae21d3386e1c3d523b1996c79a0d22840cbc2e6c8c871d197ea197fe43ab8c6f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:Resetting:request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ae21d3386e1c3d523b1996c79a0d22840cbc2e6c8c871d197ea197fe43ab8c6f->leave($__internal_ae21d3386e1c3d523b1996c79a0d22840cbc2e6c8c871d197ea197fe43ab8c6f_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_fb043d1e26e341b65f71b6efc7a42cbca44aeaa94dad3dfca88715439c596ce7 = $this->env->getExtension("native_profiler");
        $__internal_fb043d1e26e341b65f71b6efc7a42cbca44aeaa94dad3dfca88715439c596ce7->enter($__internal_fb043d1e26e341b65f71b6efc7a42cbca44aeaa94dad3dfca88715439c596ce7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:request_content.html.twig", "UserBundle:Resetting:request.html.twig", 4)->display($context);
        
        $__internal_fb043d1e26e341b65f71b6efc7a42cbca44aeaa94dad3dfca88715439c596ce7->leave($__internal_fb043d1e26e341b65f71b6efc7a42cbca44aeaa94dad3dfca88715439c596ce7_prof);

    }

    public function getTemplateName()
    {
        return "UserBundle:Resetting:request.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% block fos_user_content %}*/
/* {% include "FOSUserBundle:Resetting:request_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
