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
        $__internal_b038034532007131603b8ec1a08afc9ac9e1e514336ea428fa967f40753f5f55 = $this->env->getExtension("native_profiler");
        $__internal_b038034532007131603b8ec1a08afc9ac9e1e514336ea428fa967f40753f5f55->enter($__internal_b038034532007131603b8ec1a08afc9ac9e1e514336ea428fa967f40753f5f55_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b038034532007131603b8ec1a08afc9ac9e1e514336ea428fa967f40753f5f55->leave($__internal_b038034532007131603b8ec1a08afc9ac9e1e514336ea428fa967f40753f5f55_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_e5981457fc1aac5d16f3849a176da28085b55d78810a0b31006bb626c30bb2ab = $this->env->getExtension("native_profiler");
        $__internal_e5981457fc1aac5d16f3849a176da28085b55d78810a0b31006bb626c30bb2ab->enter($__internal_e5981457fc1aac5d16f3849a176da28085b55d78810a0b31006bb626c30bb2ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:edit_content.html.twig", "@FOSUser/Group/edit.html.twig", 4)->display($context);
        
        $__internal_e5981457fc1aac5d16f3849a176da28085b55d78810a0b31006bb626c30bb2ab->leave($__internal_e5981457fc1aac5d16f3849a176da28085b55d78810a0b31006bb626c30bb2ab_prof);

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
