<?php

/* @User/Profile/show.html.twig */
class __TwigTemplate_a596f387190a327170cb85cbe6824301afa7551809a61573fb5b317d00611cf0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@User/Profile/show.html.twig", 1);
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
        $__internal_9759372567596c73d8f018cd66efd68e26059982a11d0c59ab5fa81c4b468b20 = $this->env->getExtension("native_profiler");
        $__internal_9759372567596c73d8f018cd66efd68e26059982a11d0c59ab5fa81c4b468b20->enter($__internal_9759372567596c73d8f018cd66efd68e26059982a11d0c59ab5fa81c4b468b20_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@User/Profile/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9759372567596c73d8f018cd66efd68e26059982a11d0c59ab5fa81c4b468b20->leave($__internal_9759372567596c73d8f018cd66efd68e26059982a11d0c59ab5fa81c4b468b20_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_e8fdfcd79117d9aa248b7211c0636065be465315732db90f70dccc4134a7f045 = $this->env->getExtension("native_profiler");
        $__internal_e8fdfcd79117d9aa248b7211c0636065be465315732db90f70dccc4134a7f045->enter($__internal_e8fdfcd79117d9aa248b7211c0636065be465315732db90f70dccc4134a7f045_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:show_content.html.twig", "@User/Profile/show.html.twig", 4)->display($context);
        
        $__internal_e8fdfcd79117d9aa248b7211c0636065be465315732db90f70dccc4134a7f045->leave($__internal_e8fdfcd79117d9aa248b7211c0636065be465315732db90f70dccc4134a7f045_prof);

    }

    public function getTemplateName()
    {
        return "@User/Profile/show.html.twig";
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
