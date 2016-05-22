<?php

/* UserBundle:Resetting:request.html.twig */
class __TwigTemplate_9b9fa3ea0be64633c99b47d01b0c0ce2006462771efa51b9f55bd1793e8bd2f9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "UserBundle:Resetting:request.html.twig", 1);
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
        $__internal_a56de8f6d1bba0b1eb7d97353600163bc297e8f696da8818f1ce1ce61b802f66 = $this->env->getExtension("native_profiler");
        $__internal_a56de8f6d1bba0b1eb7d97353600163bc297e8f696da8818f1ce1ce61b802f66->enter($__internal_a56de8f6d1bba0b1eb7d97353600163bc297e8f696da8818f1ce1ce61b802f66_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:Resetting:request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a56de8f6d1bba0b1eb7d97353600163bc297e8f696da8818f1ce1ce61b802f66->leave($__internal_a56de8f6d1bba0b1eb7d97353600163bc297e8f696da8818f1ce1ce61b802f66_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_12a413b86833a2171f17b27e4223947e83b0fd1a9a56eaafeca0d99d24ed5d9b = $this->env->getExtension("native_profiler");
        $__internal_12a413b86833a2171f17b27e4223947e83b0fd1a9a56eaafeca0d99d24ed5d9b->enter($__internal_12a413b86833a2171f17b27e4223947e83b0fd1a9a56eaafeca0d99d24ed5d9b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:request_content.html.twig", "UserBundle:Resetting:request.html.twig", 4)->display($context);
        
        $__internal_12a413b86833a2171f17b27e4223947e83b0fd1a9a56eaafeca0d99d24ed5d9b->leave($__internal_12a413b86833a2171f17b27e4223947e83b0fd1a9a56eaafeca0d99d24ed5d9b_prof);

    }

    public function getTemplateName()
    {
        return "UserBundle:Resetting:request.html.twig";
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
/* {% include "FOSUserBundle:Resetting:request_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
