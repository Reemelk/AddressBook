<?php

/* UserBundle:Resetting:reset.html.twig */
class __TwigTemplate_9dd8f5e969b3e143deced2250c38b89560ebb831a8e08016e4afbc486213a009 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "UserBundle:Resetting:reset.html.twig", 1);
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
        $__internal_cca9ddb7b13e2a8bdab1f0a1c6a6f4be0e2e56bca0e512b2ee59a36804f84442 = $this->env->getExtension("native_profiler");
        $__internal_cca9ddb7b13e2a8bdab1f0a1c6a6f4be0e2e56bca0e512b2ee59a36804f84442->enter($__internal_cca9ddb7b13e2a8bdab1f0a1c6a6f4be0e2e56bca0e512b2ee59a36804f84442_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:Resetting:reset.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cca9ddb7b13e2a8bdab1f0a1c6a6f4be0e2e56bca0e512b2ee59a36804f84442->leave($__internal_cca9ddb7b13e2a8bdab1f0a1c6a6f4be0e2e56bca0e512b2ee59a36804f84442_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_9ef3c3f7bbeefe013d03343963abb0ff44df062f11f6da9a5640943b52bfc366 = $this->env->getExtension("native_profiler");
        $__internal_9ef3c3f7bbeefe013d03343963abb0ff44df062f11f6da9a5640943b52bfc366->enter($__internal_9ef3c3f7bbeefe013d03343963abb0ff44df062f11f6da9a5640943b52bfc366_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:reset_content.html.twig", "UserBundle:Resetting:reset.html.twig", 4)->display($context);
        
        $__internal_9ef3c3f7bbeefe013d03343963abb0ff44df062f11f6da9a5640943b52bfc366->leave($__internal_9ef3c3f7bbeefe013d03343963abb0ff44df062f11f6da9a5640943b52bfc366_prof);

    }

    public function getTemplateName()
    {
        return "UserBundle:Resetting:reset.html.twig";
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
