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
        $__internal_a47af76d935d8218b186ea69e0cfc499c6851d13b34d8512618369ece50d036a = $this->env->getExtension("native_profiler");
        $__internal_a47af76d935d8218b186ea69e0cfc499c6851d13b34d8512618369ece50d036a->enter($__internal_a47af76d935d8218b186ea69e0cfc499c6851d13b34d8512618369ece50d036a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:ChangePassword:changePassword.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a47af76d935d8218b186ea69e0cfc499c6851d13b34d8512618369ece50d036a->leave($__internal_a47af76d935d8218b186ea69e0cfc499c6851d13b34d8512618369ece50d036a_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_56b0bb1bbccd832a9494eac260d3a947bce56086cc051687053d6590dcc485d8 = $this->env->getExtension("native_profiler");
        $__internal_56b0bb1bbccd832a9494eac260d3a947bce56086cc051687053d6590dcc485d8->enter($__internal_56b0bb1bbccd832a9494eac260d3a947bce56086cc051687053d6590dcc485d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:ChangePassword:changePassword_content.html.twig", "UserBundle:ChangePassword:changePassword.html.twig", 4)->display($context);
        
        $__internal_56b0bb1bbccd832a9494eac260d3a947bce56086cc051687053d6590dcc485d8->leave($__internal_56b0bb1bbccd832a9494eac260d3a947bce56086cc051687053d6590dcc485d8_prof);

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
