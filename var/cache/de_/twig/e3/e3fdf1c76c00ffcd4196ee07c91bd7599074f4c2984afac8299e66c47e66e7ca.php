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
        $__internal_785bb36d00e4f4e1f045dd2972a0d7b96b2a13c5c0649ff438e5d4bc76f63bfb = $this->env->getExtension("native_profiler");
        $__internal_785bb36d00e4f4e1f045dd2972a0d7b96b2a13c5c0649ff438e5d4bc76f63bfb->enter($__internal_785bb36d00e4f4e1f045dd2972a0d7b96b2a13c5c0649ff438e5d4bc76f63bfb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_785bb36d00e4f4e1f045dd2972a0d7b96b2a13c5c0649ff438e5d4bc76f63bfb->leave($__internal_785bb36d00e4f4e1f045dd2972a0d7b96b2a13c5c0649ff438e5d4bc76f63bfb_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_cc8cfd7a8e8c4334c3df4cabb5cafbfa0330b60115570af1fc2e9c2e43263588 = $this->env->getExtension("native_profiler");
        $__internal_cc8cfd7a8e8c4334c3df4cabb5cafbfa0330b60115570af1fc2e9c2e43263588->enter($__internal_cc8cfd7a8e8c4334c3df4cabb5cafbfa0330b60115570af1fc2e9c2e43263588_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:list_content.html.twig", "@FOSUser/Group/list.html.twig", 4)->display($context);
        
        $__internal_cc8cfd7a8e8c4334c3df4cabb5cafbfa0330b60115570af1fc2e9c2e43263588->leave($__internal_cc8cfd7a8e8c4334c3df4cabb5cafbfa0330b60115570af1fc2e9c2e43263588_prof);

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
