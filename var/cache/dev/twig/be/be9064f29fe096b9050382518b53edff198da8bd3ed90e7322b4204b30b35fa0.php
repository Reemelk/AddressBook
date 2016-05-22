<?php

/* FOSUserBundle:Group:edit.html.twig */
class __TwigTemplate_7fdd8008bcb77dcf06e7818745fa1910c6187694409a24d2906597954a3691dd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:edit.html.twig", 1);
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
        $__internal_ab604905ecab9f00a915dc71efab9587036fca5f5d7d3a4770530e014e94883c = $this->env->getExtension("native_profiler");
        $__internal_ab604905ecab9f00a915dc71efab9587036fca5f5d7d3a4770530e014e94883c->enter($__internal_ab604905ecab9f00a915dc71efab9587036fca5f5d7d3a4770530e014e94883c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ab604905ecab9f00a915dc71efab9587036fca5f5d7d3a4770530e014e94883c->leave($__internal_ab604905ecab9f00a915dc71efab9587036fca5f5d7d3a4770530e014e94883c_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_76a68a8383bd757aebae77ea8b8a41782d3c78c10cefe331d277e9832ca4ba13 = $this->env->getExtension("native_profiler");
        $__internal_76a68a8383bd757aebae77ea8b8a41782d3c78c10cefe331d277e9832ca4ba13->enter($__internal_76a68a8383bd757aebae77ea8b8a41782d3c78c10cefe331d277e9832ca4ba13_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:edit_content.html.twig", "FOSUserBundle:Group:edit.html.twig", 4)->display($context);
        
        $__internal_76a68a8383bd757aebae77ea8b8a41782d3c78c10cefe331d277e9832ca4ba13->leave($__internal_76a68a8383bd757aebae77ea8b8a41782d3c78c10cefe331d277e9832ca4ba13_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:edit.html.twig";
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
