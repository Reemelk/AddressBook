<?php

/* @FOSUser/Registration/register.html.twig */
class __TwigTemplate_fdd9f90adba4a0c3be3f676e259914a1eea7e9bb9fbf9959f770b4b659b63017 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Registration/register.html.twig", 1);
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
        $__internal_14a56a3d9a8a646db2788b25f17a2cdf653f9f527f78935fb5330af68a1a7c3b = $this->env->getExtension("native_profiler");
        $__internal_14a56a3d9a8a646db2788b25f17a2cdf653f9f527f78935fb5330af68a1a7c3b->enter($__internal_14a56a3d9a8a646db2788b25f17a2cdf653f9f527f78935fb5330af68a1a7c3b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_14a56a3d9a8a646db2788b25f17a2cdf653f9f527f78935fb5330af68a1a7c3b->leave($__internal_14a56a3d9a8a646db2788b25f17a2cdf653f9f527f78935fb5330af68a1a7c3b_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_292f3612512fd3712cf7998929600060b997cd7cb92eecf4b70e58ce19b86c79 = $this->env->getExtension("native_profiler");
        $__internal_292f3612512fd3712cf7998929600060b997cd7cb92eecf4b70e58ce19b86c79->enter($__internal_292f3612512fd3712cf7998929600060b997cd7cb92eecf4b70e58ce19b86c79_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Registration:register_content.html.twig", "@FOSUser/Registration/register.html.twig", 4)->display($context);
        
        $__internal_292f3612512fd3712cf7998929600060b997cd7cb92eecf4b70e58ce19b86c79->leave($__internal_292f3612512fd3712cf7998929600060b997cd7cb92eecf4b70e58ce19b86c79_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/register.html.twig";
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
/* {% include "FOSUserBundle:Registration:register_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
