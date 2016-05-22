<?php

/* @User/ChangePassword/changePassword.html.twig */
class __TwigTemplate_4ed49f3a9a287aeb9b98b9db547838843828333c4fd265e0215fd894fef2cc88 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@User/ChangePassword/changePassword.html.twig", 1);
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
        $__internal_28bb54574cafda7c63becb3f22e5ceb34d9547f0fa2488c5cc2331727c70b09f = $this->env->getExtension("native_profiler");
        $__internal_28bb54574cafda7c63becb3f22e5ceb34d9547f0fa2488c5cc2331727c70b09f->enter($__internal_28bb54574cafda7c63becb3f22e5ceb34d9547f0fa2488c5cc2331727c70b09f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@User/ChangePassword/changePassword.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_28bb54574cafda7c63becb3f22e5ceb34d9547f0fa2488c5cc2331727c70b09f->leave($__internal_28bb54574cafda7c63becb3f22e5ceb34d9547f0fa2488c5cc2331727c70b09f_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_d91980293d53db1d47f7572d683531bb70968991fc3258291db754cdb8d7b6c4 = $this->env->getExtension("native_profiler");
        $__internal_d91980293d53db1d47f7572d683531bb70968991fc3258291db754cdb8d7b6c4->enter($__internal_d91980293d53db1d47f7572d683531bb70968991fc3258291db754cdb8d7b6c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:ChangePassword:changePassword_content.html.twig", "@User/ChangePassword/changePassword.html.twig", 4)->display($context);
        
        $__internal_d91980293d53db1d47f7572d683531bb70968991fc3258291db754cdb8d7b6c4->leave($__internal_d91980293d53db1d47f7572d683531bb70968991fc3258291db754cdb8d7b6c4_prof);

    }

    public function getTemplateName()
    {
        return "@User/ChangePassword/changePassword.html.twig";
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
