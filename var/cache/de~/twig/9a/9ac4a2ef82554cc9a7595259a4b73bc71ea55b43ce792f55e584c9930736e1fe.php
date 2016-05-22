<?php

/* UserBundle:Registration:register.html.twig */
class __TwigTemplate_ec537202888ee2d5776b8de26a27d8608167e48ba6ce5fcb3cadc9b3f2932ae7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "UserBundle:Registration:register.html.twig", 1);
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
        $__internal_275327be9be05bfdd63be7e1a42b07aee7e5704287af0bea46e545903634ab92 = $this->env->getExtension("native_profiler");
        $__internal_275327be9be05bfdd63be7e1a42b07aee7e5704287af0bea46e545903634ab92->enter($__internal_275327be9be05bfdd63be7e1a42b07aee7e5704287af0bea46e545903634ab92_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:Registration:register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_275327be9be05bfdd63be7e1a42b07aee7e5704287af0bea46e545903634ab92->leave($__internal_275327be9be05bfdd63be7e1a42b07aee7e5704287af0bea46e545903634ab92_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_e3a36a5c40e8342357e6951fd06681c375ef3fb2c9c7df3d56972115c95a6a9f = $this->env->getExtension("native_profiler");
        $__internal_e3a36a5c40e8342357e6951fd06681c375ef3fb2c9c7df3d56972115c95a6a9f->enter($__internal_e3a36a5c40e8342357e6951fd06681c375ef3fb2c9c7df3d56972115c95a6a9f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Registration:register_content.html.twig", "UserBundle:Registration:register.html.twig", 4)->display($context);
        
        $__internal_e3a36a5c40e8342357e6951fd06681c375ef3fb2c9c7df3d56972115c95a6a9f->leave($__internal_e3a36a5c40e8342357e6951fd06681c375ef3fb2c9c7df3d56972115c95a6a9f_prof);

    }

    public function getTemplateName()
    {
        return "UserBundle:Registration:register.html.twig";
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
