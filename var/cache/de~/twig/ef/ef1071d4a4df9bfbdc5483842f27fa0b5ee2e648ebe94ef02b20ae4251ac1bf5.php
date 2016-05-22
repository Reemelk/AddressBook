<?php

/* @User/ChangePassword/changePassword.html.twig */
class __TwigTemplate_4ed49f3a9a287aeb9b98b9db547838843828333c4fd265e0215fd894fef2cc88 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@User/ChangePassword/changePassword.html.twig", 1);
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
        $__internal_022cd78840fd85e5f4a1664ab26d4cccebce0cee919d94644eb63090e156875f = $this->env->getExtension("native_profiler");
        $__internal_022cd78840fd85e5f4a1664ab26d4cccebce0cee919d94644eb63090e156875f->enter($__internal_022cd78840fd85e5f4a1664ab26d4cccebce0cee919d94644eb63090e156875f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@User/ChangePassword/changePassword.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_022cd78840fd85e5f4a1664ab26d4cccebce0cee919d94644eb63090e156875f->leave($__internal_022cd78840fd85e5f4a1664ab26d4cccebce0cee919d94644eb63090e156875f_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_97688ebd3e44f016bfda3b97b17c2eb2a35ca87d9a347b9d6ef089590a46e171 = $this->env->getExtension("native_profiler");
        $__internal_97688ebd3e44f016bfda3b97b17c2eb2a35ca87d9a347b9d6ef089590a46e171->enter($__internal_97688ebd3e44f016bfda3b97b17c2eb2a35ca87d9a347b9d6ef089590a46e171_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:ChangePassword:changePassword_content.html.twig", "@User/ChangePassword/changePassword.html.twig", 4)->display($context);
        
        $__internal_97688ebd3e44f016bfda3b97b17c2eb2a35ca87d9a347b9d6ef089590a46e171->leave($__internal_97688ebd3e44f016bfda3b97b17c2eb2a35ca87d9a347b9d6ef089590a46e171_prof);

    }

    public function getTemplateName()
    {
        return "@User/ChangePassword/changePassword.html.twig";
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
/* {% include "FOSUserBundle:ChangePassword:changePassword_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
