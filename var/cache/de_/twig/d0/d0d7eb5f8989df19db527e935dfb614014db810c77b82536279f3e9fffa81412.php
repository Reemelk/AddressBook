<?php

/* @User/Registration/register.html.twig */
class __TwigTemplate_f06c7dc896216ae399966c3b8bfe1979a93f88bda8bd81fd81f70778177a7adb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@User/Registration/register.html.twig", 1);
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
        $__internal_d8c07ac0d0bf04319cd0c854f34991728a37d833d03ff3bc01253a55c38e953b = $this->env->getExtension("native_profiler");
        $__internal_d8c07ac0d0bf04319cd0c854f34991728a37d833d03ff3bc01253a55c38e953b->enter($__internal_d8c07ac0d0bf04319cd0c854f34991728a37d833d03ff3bc01253a55c38e953b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@User/Registration/register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d8c07ac0d0bf04319cd0c854f34991728a37d833d03ff3bc01253a55c38e953b->leave($__internal_d8c07ac0d0bf04319cd0c854f34991728a37d833d03ff3bc01253a55c38e953b_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_d856469f483aa22cc47814fc9520485183d4bb16616e9d6bcfd2969887dee126 = $this->env->getExtension("native_profiler");
        $__internal_d856469f483aa22cc47814fc9520485183d4bb16616e9d6bcfd2969887dee126->enter($__internal_d856469f483aa22cc47814fc9520485183d4bb16616e9d6bcfd2969887dee126_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Registration:register_content.html.twig", "@User/Registration/register.html.twig", 4)->display($context);
        
        $__internal_d856469f483aa22cc47814fc9520485183d4bb16616e9d6bcfd2969887dee126->leave($__internal_d856469f483aa22cc47814fc9520485183d4bb16616e9d6bcfd2969887dee126_prof);

    }

    public function getTemplateName()
    {
        return "@User/Registration/register.html.twig";
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
/* {% include "FOSUserBundle:Registration:register_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
