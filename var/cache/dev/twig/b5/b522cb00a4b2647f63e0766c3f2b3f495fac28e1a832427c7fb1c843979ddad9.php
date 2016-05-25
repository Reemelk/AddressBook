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
        $__internal_8b02859bcecc8ff5dda6373a3e900a4fd050808e14064249c7e5c14fd5f7d58c = $this->env->getExtension("native_profiler");
        $__internal_8b02859bcecc8ff5dda6373a3e900a4fd050808e14064249c7e5c14fd5f7d58c->enter($__internal_8b02859bcecc8ff5dda6373a3e900a4fd050808e14064249c7e5c14fd5f7d58c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:ChangePassword:changePassword.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8b02859bcecc8ff5dda6373a3e900a4fd050808e14064249c7e5c14fd5f7d58c->leave($__internal_8b02859bcecc8ff5dda6373a3e900a4fd050808e14064249c7e5c14fd5f7d58c_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_e20e891e67ec83a632e58f98cf749227b29d01c3fd60dc5cd0cdc49275d5f401 = $this->env->getExtension("native_profiler");
        $__internal_e20e891e67ec83a632e58f98cf749227b29d01c3fd60dc5cd0cdc49275d5f401->enter($__internal_e20e891e67ec83a632e58f98cf749227b29d01c3fd60dc5cd0cdc49275d5f401_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:ChangePassword:changePassword_content.html.twig", "UserBundle:ChangePassword:changePassword.html.twig", 4)->display($context);
        
        $__internal_e20e891e67ec83a632e58f98cf749227b29d01c3fd60dc5cd0cdc49275d5f401->leave($__internal_e20e891e67ec83a632e58f98cf749227b29d01c3fd60dc5cd0cdc49275d5f401_prof);

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
