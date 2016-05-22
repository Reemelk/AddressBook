<?php

/* FOSUserBundle:Group:list.html.twig */
class __TwigTemplate_58fbf6b5af700a484494d955e22ca6def0911dad418dedb992f75fefdf17f558 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:list.html.twig", 1);
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
        $__internal_0410a31f195bedd99f95860727782df3f9fa9f2d203e272df75eb5430a7a24e7 = $this->env->getExtension("native_profiler");
        $__internal_0410a31f195bedd99f95860727782df3f9fa9f2d203e272df75eb5430a7a24e7->enter($__internal_0410a31f195bedd99f95860727782df3f9fa9f2d203e272df75eb5430a7a24e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0410a31f195bedd99f95860727782df3f9fa9f2d203e272df75eb5430a7a24e7->leave($__internal_0410a31f195bedd99f95860727782df3f9fa9f2d203e272df75eb5430a7a24e7_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_d074f4ed0d87573c69b100ca7f88fd37c65d8846f5a1652a241995561b9164ea = $this->env->getExtension("native_profiler");
        $__internal_d074f4ed0d87573c69b100ca7f88fd37c65d8846f5a1652a241995561b9164ea->enter($__internal_d074f4ed0d87573c69b100ca7f88fd37c65d8846f5a1652a241995561b9164ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:list_content.html.twig", "FOSUserBundle:Group:list.html.twig", 4)->display($context);
        
        $__internal_d074f4ed0d87573c69b100ca7f88fd37c65d8846f5a1652a241995561b9164ea->leave($__internal_d074f4ed0d87573c69b100ca7f88fd37c65d8846f5a1652a241995561b9164ea_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:list.html.twig";
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
/* {% include "FOSUserBundle:Group:list_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
