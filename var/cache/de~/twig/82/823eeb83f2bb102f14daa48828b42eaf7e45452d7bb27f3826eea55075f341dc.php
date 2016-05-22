<?php

/* @User/Resetting/passwordAlreadyRequested.html.twig */
class __TwigTemplate_20da1dfd7c5e99bacd8e55eb1c09d5070bf16f8cd6b9596a6c21124184a639e7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@User/Resetting/passwordAlreadyRequested.html.twig", 1);
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
        $__internal_5b05fefa71b8f5fb9b703c62e5b624a19e5f78cfeab3a8ab44de902e58609487 = $this->env->getExtension("native_profiler");
        $__internal_5b05fefa71b8f5fb9b703c62e5b624a19e5f78cfeab3a8ab44de902e58609487->enter($__internal_5b05fefa71b8f5fb9b703c62e5b624a19e5f78cfeab3a8ab44de902e58609487_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@User/Resetting/passwordAlreadyRequested.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5b05fefa71b8f5fb9b703c62e5b624a19e5f78cfeab3a8ab44de902e58609487->leave($__internal_5b05fefa71b8f5fb9b703c62e5b624a19e5f78cfeab3a8ab44de902e58609487_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_585c989932c14549cee5f62bdecc9fe4007f97b8dfbb3173c69d310f15576c90 = $this->env->getExtension("native_profiler");
        $__internal_585c989932c14549cee5f62bdecc9fe4007f97b8dfbb3173c69d310f15576c90->enter($__internal_585c989932c14549cee5f62bdecc9fe4007f97b8dfbb3173c69d310f15576c90_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.password_already_requested", array(), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_585c989932c14549cee5f62bdecc9fe4007f97b8dfbb3173c69d310f15576c90->leave($__internal_585c989932c14549cee5f62bdecc9fe4007f97b8dfbb3173c69d310f15576c90_prof);

    }

    public function getTemplateName()
    {
        return "@User/Resetting/passwordAlreadyRequested.html.twig";
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
