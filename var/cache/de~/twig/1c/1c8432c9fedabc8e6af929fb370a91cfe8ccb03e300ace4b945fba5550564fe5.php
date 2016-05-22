<?php

/* @FOSUser/Profile/show.html.twig */
class __TwigTemplate_38e46277e17e466216180b397679be57314abc1a771c29ea2ba7faa80fbe35e4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Profile/show.html.twig", 1);
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
        $__internal_56cfba1ea3643ec5351e9db847cf4d1f8aff6ca7ac943b5913d4019c3d83dbbf = $this->env->getExtension("native_profiler");
        $__internal_56cfba1ea3643ec5351e9db847cf4d1f8aff6ca7ac943b5913d4019c3d83dbbf->enter($__internal_56cfba1ea3643ec5351e9db847cf4d1f8aff6ca7ac943b5913d4019c3d83dbbf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_56cfba1ea3643ec5351e9db847cf4d1f8aff6ca7ac943b5913d4019c3d83dbbf->leave($__internal_56cfba1ea3643ec5351e9db847cf4d1f8aff6ca7ac943b5913d4019c3d83dbbf_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_fbbfe4e9846b060cadc579e6b7e6b0aecfc65e00b641b2b291478e20a9b8eabe = $this->env->getExtension("native_profiler");
        $__internal_fbbfe4e9846b060cadc579e6b7e6b0aecfc65e00b641b2b291478e20a9b8eabe->enter($__internal_fbbfe4e9846b060cadc579e6b7e6b0aecfc65e00b641b2b291478e20a9b8eabe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:show_content.html.twig", "@FOSUser/Profile/show.html.twig", 4)->display($context);
        
        $__internal_fbbfe4e9846b060cadc579e6b7e6b0aecfc65e00b641b2b291478e20a9b8eabe->leave($__internal_fbbfe4e9846b060cadc579e6b7e6b0aecfc65e00b641b2b291478e20a9b8eabe_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Profile/show.html.twig";
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
