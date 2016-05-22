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
        $__internal_4dfd6ba2641d8feb3b8f13398224c0bdd5f4cde9ea9dd1e0b7d53c1592a5e86b = $this->env->getExtension("native_profiler");
        $__internal_4dfd6ba2641d8feb3b8f13398224c0bdd5f4cde9ea9dd1e0b7d53c1592a5e86b->enter($__internal_4dfd6ba2641d8feb3b8f13398224c0bdd5f4cde9ea9dd1e0b7d53c1592a5e86b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4dfd6ba2641d8feb3b8f13398224c0bdd5f4cde9ea9dd1e0b7d53c1592a5e86b->leave($__internal_4dfd6ba2641d8feb3b8f13398224c0bdd5f4cde9ea9dd1e0b7d53c1592a5e86b_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_3f8344119c8c1db9431ac0d6f45633d7517a9d530e8c51f5bc82b6c9db420f18 = $this->env->getExtension("native_profiler");
        $__internal_3f8344119c8c1db9431ac0d6f45633d7517a9d530e8c51f5bc82b6c9db420f18->enter($__internal_3f8344119c8c1db9431ac0d6f45633d7517a9d530e8c51f5bc82b6c9db420f18_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:edit_content.html.twig", "@FOSUser/Group/edit.html.twig", 4)->display($context);
        
        $__internal_3f8344119c8c1db9431ac0d6f45633d7517a9d530e8c51f5bc82b6c9db420f18->leave($__internal_3f8344119c8c1db9431ac0d6f45633d7517a9d530e8c51f5bc82b6c9db420f18_prof);

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
