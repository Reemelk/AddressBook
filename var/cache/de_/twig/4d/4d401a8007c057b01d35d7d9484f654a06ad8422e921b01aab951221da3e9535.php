<?php

/* @User/Resetting/reset.html.twig */
class __TwigTemplate_ed62cb7aa5a187f83293d635d8d656843067a6da5a559772131846e88860bbef extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@User/Resetting/reset.html.twig", 1);
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
        $__internal_a168744c677a0756ffed2a3d345e56f07e6592be3c41e0631af9cf6076405746 = $this->env->getExtension("native_profiler");
        $__internal_a168744c677a0756ffed2a3d345e56f07e6592be3c41e0631af9cf6076405746->enter($__internal_a168744c677a0756ffed2a3d345e56f07e6592be3c41e0631af9cf6076405746_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@User/Resetting/reset.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a168744c677a0756ffed2a3d345e56f07e6592be3c41e0631af9cf6076405746->leave($__internal_a168744c677a0756ffed2a3d345e56f07e6592be3c41e0631af9cf6076405746_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_4f6f361fc91bc8605a7584fb1a5c9a2683260da0f748f97d12c0d781c4d3a086 = $this->env->getExtension("native_profiler");
        $__internal_4f6f361fc91bc8605a7584fb1a5c9a2683260da0f748f97d12c0d781c4d3a086->enter($__internal_4f6f361fc91bc8605a7584fb1a5c9a2683260da0f748f97d12c0d781c4d3a086_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:reset_content.html.twig", "@User/Resetting/reset.html.twig", 4)->display($context);
        
        $__internal_4f6f361fc91bc8605a7584fb1a5c9a2683260da0f748f97d12c0d781c4d3a086->leave($__internal_4f6f361fc91bc8605a7584fb1a5c9a2683260da0f748f97d12c0d781c4d3a086_prof);

    }

    public function getTemplateName()
    {
        return "@User/Resetting/reset.html.twig";
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
/* {% include "FOSUserBundle:Resetting:reset_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
