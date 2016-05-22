<?php

/* @FOSUser/Group/show.html.twig */
class __TwigTemplate_a3f9cd3e18b48e6627a8343c558fa2cc195851806263e2045afa39dcba0c53c1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Group/show.html.twig", 1);
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
        $__internal_69841598e7e1eb6bd4d4f5b16283c08995910d666a08c2e3d916f478f61a43ad = $this->env->getExtension("native_profiler");
        $__internal_69841598e7e1eb6bd4d4f5b16283c08995910d666a08c2e3d916f478f61a43ad->enter($__internal_69841598e7e1eb6bd4d4f5b16283c08995910d666a08c2e3d916f478f61a43ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_69841598e7e1eb6bd4d4f5b16283c08995910d666a08c2e3d916f478f61a43ad->leave($__internal_69841598e7e1eb6bd4d4f5b16283c08995910d666a08c2e3d916f478f61a43ad_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_ccc27215f188959a2bc5f00707685755c2236d1444ee9fb81599938e0945f989 = $this->env->getExtension("native_profiler");
        $__internal_ccc27215f188959a2bc5f00707685755c2236d1444ee9fb81599938e0945f989->enter($__internal_ccc27215f188959a2bc5f00707685755c2236d1444ee9fb81599938e0945f989_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:show_content.html.twig", "@FOSUser/Group/show.html.twig", 4)->display($context);
        
        $__internal_ccc27215f188959a2bc5f00707685755c2236d1444ee9fb81599938e0945f989->leave($__internal_ccc27215f188959a2bc5f00707685755c2236d1444ee9fb81599938e0945f989_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/show.html.twig";
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
/* {% include "FOSUserBundle:Group:show_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
