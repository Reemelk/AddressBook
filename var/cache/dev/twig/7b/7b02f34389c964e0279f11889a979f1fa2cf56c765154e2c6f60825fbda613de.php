<?php

/* UserBundle:Resetting:passwordAlreadyRequested.html.twig */
class __TwigTemplate_7699da2889fa7cc86b7c9315ca39447b1e064b191d6574575030407474d33070 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "UserBundle:Resetting:passwordAlreadyRequested.html.twig", 1);
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
        $__internal_39efc4533a8f7c860441c741e490a57b1a48971f6e5f885536027e07b3d646a4 = $this->env->getExtension("native_profiler");
        $__internal_39efc4533a8f7c860441c741e490a57b1a48971f6e5f885536027e07b3d646a4->enter($__internal_39efc4533a8f7c860441c741e490a57b1a48971f6e5f885536027e07b3d646a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:Resetting:passwordAlreadyRequested.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_39efc4533a8f7c860441c741e490a57b1a48971f6e5f885536027e07b3d646a4->leave($__internal_39efc4533a8f7c860441c741e490a57b1a48971f6e5f885536027e07b3d646a4_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_d05ed36602a3d647dae560c0ccd6d309b39ab81135bcd3c5d488bb2d564f1a05 = $this->env->getExtension("native_profiler");
        $__internal_d05ed36602a3d647dae560c0ccd6d309b39ab81135bcd3c5d488bb2d564f1a05->enter($__internal_d05ed36602a3d647dae560c0ccd6d309b39ab81135bcd3c5d488bb2d564f1a05_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.password_already_requested", array(), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_d05ed36602a3d647dae560c0ccd6d309b39ab81135bcd3c5d488bb2d564f1a05->leave($__internal_d05ed36602a3d647dae560c0ccd6d309b39ab81135bcd3c5d488bb2d564f1a05_prof);

    }

    public function getTemplateName()
    {
        return "UserBundle:Resetting:passwordAlreadyRequested.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 6,  34 => 5,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* {% block fos_user_content %}*/
/* <p>{{ 'resetting.password_already_requested'|trans }}</p>*/
/* {% endblock fos_user_content %}*/
/* */
