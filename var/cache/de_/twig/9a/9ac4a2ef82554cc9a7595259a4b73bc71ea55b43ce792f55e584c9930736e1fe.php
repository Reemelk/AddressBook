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
        $__internal_2fe1e28116035c8c03269fac95548cdf34fde7ca72f38e18d533594f2a4039a7 = $this->env->getExtension("native_profiler");
        $__internal_2fe1e28116035c8c03269fac95548cdf34fde7ca72f38e18d533594f2a4039a7->enter($__internal_2fe1e28116035c8c03269fac95548cdf34fde7ca72f38e18d533594f2a4039a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:Registration:register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2fe1e28116035c8c03269fac95548cdf34fde7ca72f38e18d533594f2a4039a7->leave($__internal_2fe1e28116035c8c03269fac95548cdf34fde7ca72f38e18d533594f2a4039a7_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_60c5e662f14d1a32812175c88e89132dc3d426ea32a29ade664b1bde1b3fa386 = $this->env->getExtension("native_profiler");
        $__internal_60c5e662f14d1a32812175c88e89132dc3d426ea32a29ade664b1bde1b3fa386->enter($__internal_60c5e662f14d1a32812175c88e89132dc3d426ea32a29ade664b1bde1b3fa386_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Registration:register_content.html.twig", "UserBundle:Registration:register.html.twig", 4)->display($context);
        
        $__internal_60c5e662f14d1a32812175c88e89132dc3d426ea32a29ade664b1bde1b3fa386->leave($__internal_60c5e662f14d1a32812175c88e89132dc3d426ea32a29ade664b1bde1b3fa386_prof);

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
