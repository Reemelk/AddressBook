<?php

/* @FOSUser/Group/edit.html.twig */
class __TwigTemplate_b6061b2393d53e1f84a519289494104f34e557639816e244b5e86e6a10b0daf4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Group/edit.html.twig", 1);
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
        $__internal_de076ba5378db9d5398254cf603dcdd7d23258a073ff31e244f85edf07dfc207 = $this->env->getExtension("native_profiler");
        $__internal_de076ba5378db9d5398254cf603dcdd7d23258a073ff31e244f85edf07dfc207->enter($__internal_de076ba5378db9d5398254cf603dcdd7d23258a073ff31e244f85edf07dfc207_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_de076ba5378db9d5398254cf603dcdd7d23258a073ff31e244f85edf07dfc207->leave($__internal_de076ba5378db9d5398254cf603dcdd7d23258a073ff31e244f85edf07dfc207_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_11f93c4249d41b95a7db85dc7001d3d4a3b1ef30adb85f274a22f5bd33c68dd6 = $this->env->getExtension("native_profiler");
        $__internal_11f93c4249d41b95a7db85dc7001d3d4a3b1ef30adb85f274a22f5bd33c68dd6->enter($__internal_11f93c4249d41b95a7db85dc7001d3d4a3b1ef30adb85f274a22f5bd33c68dd6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:edit_content.html.twig", "@FOSUser/Group/edit.html.twig", 4)->display($context);
        
        $__internal_11f93c4249d41b95a7db85dc7001d3d4a3b1ef30adb85f274a22f5bd33c68dd6->leave($__internal_11f93c4249d41b95a7db85dc7001d3d4a3b1ef30adb85f274a22f5bd33c68dd6_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/edit.html.twig";
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
/* {% include "FOSUserBundle:Group:edit_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
