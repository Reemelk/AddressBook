<?php

/* @User/Profile/show.html.twig */
class __TwigTemplate_a596f387190a327170cb85cbe6824301afa7551809a61573fb5b317d00611cf0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@User/Profile/show.html.twig", 1);
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
        $__internal_a92e547e01370ea98f96b391d96498b8f16682d90efeeacfd93087f99264329a = $this->env->getExtension("native_profiler");
        $__internal_a92e547e01370ea98f96b391d96498b8f16682d90efeeacfd93087f99264329a->enter($__internal_a92e547e01370ea98f96b391d96498b8f16682d90efeeacfd93087f99264329a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@User/Profile/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a92e547e01370ea98f96b391d96498b8f16682d90efeeacfd93087f99264329a->leave($__internal_a92e547e01370ea98f96b391d96498b8f16682d90efeeacfd93087f99264329a_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_e1b6da975616b436aef6b8f673b0b52e5079809c0e3a237d989136cbed8e5aa6 = $this->env->getExtension("native_profiler");
        $__internal_e1b6da975616b436aef6b8f673b0b52e5079809c0e3a237d989136cbed8e5aa6->enter($__internal_e1b6da975616b436aef6b8f673b0b52e5079809c0e3a237d989136cbed8e5aa6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:show_content.html.twig", "@User/Profile/show.html.twig", 4)->display($context);
        
        $__internal_e1b6da975616b436aef6b8f673b0b52e5079809c0e3a237d989136cbed8e5aa6->leave($__internal_e1b6da975616b436aef6b8f673b0b52e5079809c0e3a237d989136cbed8e5aa6_prof);

    }

    public function getTemplateName()
    {
        return "@User/Profile/show.html.twig";
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
/* {% include "FOSUserBundle:Profile:show_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
