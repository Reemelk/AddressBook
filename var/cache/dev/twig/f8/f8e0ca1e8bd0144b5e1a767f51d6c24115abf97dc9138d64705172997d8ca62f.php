<?php

/* @User/Profile/edit.html.twig */
class __TwigTemplate_6fadff5d4a2e17973609c0d91dd1d7e3f91f134e8091f74526f8becb711dfb79 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@User/Profile/edit.html.twig", 1);
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
        $__internal_dbc68fe47ad1823c82b5b8e8dcf9ddc8b179974fb18a97bbb2dfdd7dd8d1bed6 = $this->env->getExtension("native_profiler");
        $__internal_dbc68fe47ad1823c82b5b8e8dcf9ddc8b179974fb18a97bbb2dfdd7dd8d1bed6->enter($__internal_dbc68fe47ad1823c82b5b8e8dcf9ddc8b179974fb18a97bbb2dfdd7dd8d1bed6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@User/Profile/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_dbc68fe47ad1823c82b5b8e8dcf9ddc8b179974fb18a97bbb2dfdd7dd8d1bed6->leave($__internal_dbc68fe47ad1823c82b5b8e8dcf9ddc8b179974fb18a97bbb2dfdd7dd8d1bed6_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_94fd8b37329d9a58dd00c633aa58f33c11fe0f8b27a9e9ea99a48817dfb8022c = $this->env->getExtension("native_profiler");
        $__internal_94fd8b37329d9a58dd00c633aa58f33c11fe0f8b27a9e9ea99a48817dfb8022c->enter($__internal_94fd8b37329d9a58dd00c633aa58f33c11fe0f8b27a9e9ea99a48817dfb8022c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:edit_content.html.twig", "@User/Profile/edit.html.twig", 4)->display($context);
        
        $__internal_94fd8b37329d9a58dd00c633aa58f33c11fe0f8b27a9e9ea99a48817dfb8022c->leave($__internal_94fd8b37329d9a58dd00c633aa58f33c11fe0f8b27a9e9ea99a48817dfb8022c_prof);

    }

    public function getTemplateName()
    {
        return "@User/Profile/edit.html.twig";
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
/* {% include "FOSUserBundle:Profile:edit_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
