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
        $__internal_efa96c94944fc8710b803c7aa35bd442a197b8ba99ec1139d7c99dd5ed39c616 = $this->env->getExtension("native_profiler");
        $__internal_efa96c94944fc8710b803c7aa35bd442a197b8ba99ec1139d7c99dd5ed39c616->enter($__internal_efa96c94944fc8710b803c7aa35bd442a197b8ba99ec1139d7c99dd5ed39c616_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@User/Profile/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_efa96c94944fc8710b803c7aa35bd442a197b8ba99ec1139d7c99dd5ed39c616->leave($__internal_efa96c94944fc8710b803c7aa35bd442a197b8ba99ec1139d7c99dd5ed39c616_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_9af6d3d094c726029749e75cfb6228d0aac3fe0b08d83b1672412071fbeb35ec = $this->env->getExtension("native_profiler");
        $__internal_9af6d3d094c726029749e75cfb6228d0aac3fe0b08d83b1672412071fbeb35ec->enter($__internal_9af6d3d094c726029749e75cfb6228d0aac3fe0b08d83b1672412071fbeb35ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:edit_content.html.twig", "@User/Profile/edit.html.twig", 4)->display($context);
        
        $__internal_9af6d3d094c726029749e75cfb6228d0aac3fe0b08d83b1672412071fbeb35ec->leave($__internal_9af6d3d094c726029749e75cfb6228d0aac3fe0b08d83b1672412071fbeb35ec_prof);

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
