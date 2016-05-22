<?php

/* @FOSUser/Resetting/reset.html.twig */
class __TwigTemplate_d4516336f70984dc9a588f5ae6f27276a31fb82b3fc583130cdc4bdd0ae1f34e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Resetting/reset.html.twig", 1);
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
        $__internal_cc1ee51b35962e2a89f36e587aeaa5fb3918a0892c6112f44edcb5ef9979e625 = $this->env->getExtension("native_profiler");
        $__internal_cc1ee51b35962e2a89f36e587aeaa5fb3918a0892c6112f44edcb5ef9979e625->enter($__internal_cc1ee51b35962e2a89f36e587aeaa5fb3918a0892c6112f44edcb5ef9979e625_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/reset.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cc1ee51b35962e2a89f36e587aeaa5fb3918a0892c6112f44edcb5ef9979e625->leave($__internal_cc1ee51b35962e2a89f36e587aeaa5fb3918a0892c6112f44edcb5ef9979e625_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_9e1e5711d7c5ab1a800f6d7606f00f262b7ac40dbd9e8999f14ffed05c144359 = $this->env->getExtension("native_profiler");
        $__internal_9e1e5711d7c5ab1a800f6d7606f00f262b7ac40dbd9e8999f14ffed05c144359->enter($__internal_9e1e5711d7c5ab1a800f6d7606f00f262b7ac40dbd9e8999f14ffed05c144359_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:reset_content.html.twig", "@FOSUser/Resetting/reset.html.twig", 4)->display($context);
        
        $__internal_9e1e5711d7c5ab1a800f6d7606f00f262b7ac40dbd9e8999f14ffed05c144359->leave($__internal_9e1e5711d7c5ab1a800f6d7606f00f262b7ac40dbd9e8999f14ffed05c144359_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/reset.html.twig";
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
