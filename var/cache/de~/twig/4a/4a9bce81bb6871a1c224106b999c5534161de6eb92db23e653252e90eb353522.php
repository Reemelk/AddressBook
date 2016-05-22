<?php

/* @FOSUser/Registration/register.html.twig */
class __TwigTemplate_fdd9f90adba4a0c3be3f676e259914a1eea7e9bb9fbf9959f770b4b659b63017 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Registration/register.html.twig", 1);
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
        $__internal_8e67a6893193588db076fc744e15f4285f5bca2a541faa33792e5219644c8c95 = $this->env->getExtension("native_profiler");
        $__internal_8e67a6893193588db076fc744e15f4285f5bca2a541faa33792e5219644c8c95->enter($__internal_8e67a6893193588db076fc744e15f4285f5bca2a541faa33792e5219644c8c95_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8e67a6893193588db076fc744e15f4285f5bca2a541faa33792e5219644c8c95->leave($__internal_8e67a6893193588db076fc744e15f4285f5bca2a541faa33792e5219644c8c95_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_8d0191a39b5628cf009396cc5c9bcd319939f2a86fb92d7c9f2a8e97bbdc16f9 = $this->env->getExtension("native_profiler");
        $__internal_8d0191a39b5628cf009396cc5c9bcd319939f2a86fb92d7c9f2a8e97bbdc16f9->enter($__internal_8d0191a39b5628cf009396cc5c9bcd319939f2a86fb92d7c9f2a8e97bbdc16f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Registration:register_content.html.twig", "@FOSUser/Registration/register.html.twig", 4)->display($context);
        
        $__internal_8d0191a39b5628cf009396cc5c9bcd319939f2a86fb92d7c9f2a8e97bbdc16f9->leave($__internal_8d0191a39b5628cf009396cc5c9bcd319939f2a86fb92d7c9f2a8e97bbdc16f9_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/register.html.twig";
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
