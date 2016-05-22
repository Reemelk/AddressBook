<?php

/* UserBundle:ChangePassword:changePassword.html.twig */
class __TwigTemplate_e266f72745c67c074bef481e7200eb8c63960affbe5a74d51d0a6daba33cf544 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "UserBundle:ChangePassword:changePassword.html.twig", 1);
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
        $__internal_17e012269bbad689dae4dff006cf6fba68cb7947f0c98c20fd27285bb3f2714b = $this->env->getExtension("native_profiler");
        $__internal_17e012269bbad689dae4dff006cf6fba68cb7947f0c98c20fd27285bb3f2714b->enter($__internal_17e012269bbad689dae4dff006cf6fba68cb7947f0c98c20fd27285bb3f2714b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:ChangePassword:changePassword.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_17e012269bbad689dae4dff006cf6fba68cb7947f0c98c20fd27285bb3f2714b->leave($__internal_17e012269bbad689dae4dff006cf6fba68cb7947f0c98c20fd27285bb3f2714b_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_32f00c36428c703666130a0877fbaea7b37280920a9e8a15e161a6d43c532a8c = $this->env->getExtension("native_profiler");
        $__internal_32f00c36428c703666130a0877fbaea7b37280920a9e8a15e161a6d43c532a8c->enter($__internal_32f00c36428c703666130a0877fbaea7b37280920a9e8a15e161a6d43c532a8c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:ChangePassword:changePassword_content.html.twig", "UserBundle:ChangePassword:changePassword.html.twig", 4)->display($context);
        
        $__internal_32f00c36428c703666130a0877fbaea7b37280920a9e8a15e161a6d43c532a8c->leave($__internal_32f00c36428c703666130a0877fbaea7b37280920a9e8a15e161a6d43c532a8c_prof);

    }

    public function getTemplateName()
    {
        return "UserBundle:ChangePassword:changePassword.html.twig";
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
