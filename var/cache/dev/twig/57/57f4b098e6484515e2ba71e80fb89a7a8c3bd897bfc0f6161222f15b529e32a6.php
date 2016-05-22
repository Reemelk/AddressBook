<?php

/* @FOSUser/ChangePassword/changePassword.html.twig */
class __TwigTemplate_4025944b65976a7cdfbf783319fc244dc25013c7088d369bf842201deb93d716 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/ChangePassword/changePassword.html.twig", 1);
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
        $__internal_908274236656bc6003c9fcd33a7c0dd3e160cca00e1f82a597a910b35e1ce60b = $this->env->getExtension("native_profiler");
        $__internal_908274236656bc6003c9fcd33a7c0dd3e160cca00e1f82a597a910b35e1ce60b->enter($__internal_908274236656bc6003c9fcd33a7c0dd3e160cca00e1f82a597a910b35e1ce60b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/ChangePassword/changePassword.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_908274236656bc6003c9fcd33a7c0dd3e160cca00e1f82a597a910b35e1ce60b->leave($__internal_908274236656bc6003c9fcd33a7c0dd3e160cca00e1f82a597a910b35e1ce60b_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_63c8e9b4e881d34b702deeb5c33a93e5acccbd619b4cb66bf8789bb9f418cfbf = $this->env->getExtension("native_profiler");
        $__internal_63c8e9b4e881d34b702deeb5c33a93e5acccbd619b4cb66bf8789bb9f418cfbf->enter($__internal_63c8e9b4e881d34b702deeb5c33a93e5acccbd619b4cb66bf8789bb9f418cfbf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:ChangePassword:changePassword_content.html.twig", "@FOSUser/ChangePassword/changePassword.html.twig", 4)->display($context);
        
        $__internal_63c8e9b4e881d34b702deeb5c33a93e5acccbd619b4cb66bf8789bb9f418cfbf->leave($__internal_63c8e9b4e881d34b702deeb5c33a93e5acccbd619b4cb66bf8789bb9f418cfbf_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/ChangePassword/changePassword.html.twig";
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
/* {% include "FOSUserBundle:ChangePassword:changePassword_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
