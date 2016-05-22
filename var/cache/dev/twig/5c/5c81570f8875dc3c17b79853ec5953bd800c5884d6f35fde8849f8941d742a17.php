<?php

/* FOSUserBundle:Profile:show.html.twig */
class __TwigTemplate_6dddf54e3e2759eaf900af458d82eafb51c1309df1b8b369fda18de14970557b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Profile:show.html.twig", 1);
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
        $__internal_326e12b0a30643e9fe415416e8ae63e8739929d8f306c45bc4acb8f6063c1bd2 = $this->env->getExtension("native_profiler");
        $__internal_326e12b0a30643e9fe415416e8ae63e8739929d8f306c45bc4acb8f6063c1bd2->enter($__internal_326e12b0a30643e9fe415416e8ae63e8739929d8f306c45bc4acb8f6063c1bd2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_326e12b0a30643e9fe415416e8ae63e8739929d8f306c45bc4acb8f6063c1bd2->leave($__internal_326e12b0a30643e9fe415416e8ae63e8739929d8f306c45bc4acb8f6063c1bd2_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_e576c291e2bcb2e062c2deb7752cf4469d6764ae21962c7af5b73a0f3db3db64 = $this->env->getExtension("native_profiler");
        $__internal_e576c291e2bcb2e062c2deb7752cf4469d6764ae21962c7af5b73a0f3db3db64->enter($__internal_e576c291e2bcb2e062c2deb7752cf4469d6764ae21962c7af5b73a0f3db3db64_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:show_content.html.twig", "FOSUserBundle:Profile:show.html.twig", 4)->display($context);
        
        $__internal_e576c291e2bcb2e062c2deb7752cf4469d6764ae21962c7af5b73a0f3db3db64->leave($__internal_e576c291e2bcb2e062c2deb7752cf4469d6764ae21962c7af5b73a0f3db3db64_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:show.html.twig";
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
