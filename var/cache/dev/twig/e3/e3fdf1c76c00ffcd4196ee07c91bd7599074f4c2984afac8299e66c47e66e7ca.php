<?php

/* @FOSUser/Group/list.html.twig */
class __TwigTemplate_a6a0955e6f904297574945bdb2f951d2128c402d3bbce683047e8a368529bc98 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Group/list.html.twig", 1);
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
        $__internal_6a0675c472787ef6674f24ff877538fbed7eb4e12258a3bc19b5ea1eb871c654 = $this->env->getExtension("native_profiler");
        $__internal_6a0675c472787ef6674f24ff877538fbed7eb4e12258a3bc19b5ea1eb871c654->enter($__internal_6a0675c472787ef6674f24ff877538fbed7eb4e12258a3bc19b5ea1eb871c654_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6a0675c472787ef6674f24ff877538fbed7eb4e12258a3bc19b5ea1eb871c654->leave($__internal_6a0675c472787ef6674f24ff877538fbed7eb4e12258a3bc19b5ea1eb871c654_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_030b46c2c013605a33b0c1b314a588e233e0e30b14f13bbdd113b7118a390f84 = $this->env->getExtension("native_profiler");
        $__internal_030b46c2c013605a33b0c1b314a588e233e0e30b14f13bbdd113b7118a390f84->enter($__internal_030b46c2c013605a33b0c1b314a588e233e0e30b14f13bbdd113b7118a390f84_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:list_content.html.twig", "@FOSUser/Group/list.html.twig", 4)->display($context);
        
        $__internal_030b46c2c013605a33b0c1b314a588e233e0e30b14f13bbdd113b7118a390f84->leave($__internal_030b46c2c013605a33b0c1b314a588e233e0e30b14f13bbdd113b7118a390f84_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/list.html.twig";
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
